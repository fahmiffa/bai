@extends('layout.base')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
@endpush
@section('main')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                        <button class="btn btn-primary rounded-pill btn-sm"
                            onclick="location.href='{{ route('invoice.create') }}' ">Tambah</button>
                    </div>

                    @php
                        $type = ['kanrihi', 'management_fee', 'monitoring_fee', 'ticket_pesawat'];
                    @endphp
                    <ul class="nav nav-tabs" role="tablist">
                        @foreach ($type as $val)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $loop->first ? 'active' : null }}" id="tabs-{{ $val }}"
                                    data-bs-toggle="tab" href="#tab-{{ $val }}" role="tab"
                                    aria-controls="tab-{{ $val }}"
                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ strtoupper(str_replace('_', ' ', $val)) }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content my-3" id="tab-content">

                        @foreach ($type as $val)
                            <div class="tab-pane {{ $loop->first ? 'active' : null }}" id="tab-{{ $val }}"
                                role="tabpanel" aria-labelledby="tab-{{ $val }}">
                                @if ($val == 'kanrihi')
                                    @if ($repay)
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Warning !!!</strong> Ada Tagihan Kanrihi yang belum di generate di
                                            periode selanjutnya.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @include('admin.invoices.kanrihi')
                                @endif

                                @if ($val == 'management_fee')
                                    @include('admin.invoices.management_fee')
                                @endif

                                @if ($val == 'monitoring_fee')
                                    @include('admin.invoices.monitoring_fee')
                                @endif

                                @if ($val == 'ticket_pesawat')
                                    @if ($bill->where('status', 0)->count() > 0)
                                        <button type="button" class="btn btn-primary rounded-pill me-auto btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#open">
                                            Generate
                                        </button>
                                        <div class="modal fade" id="open" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="Label"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">
                                                            Generate Invoice</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('bill.invoice') }}" method="POST">

                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3">LPK</label>
                                                                <div class="col-md-6">
                                                                    <select class="choices form-select" name="lpk">
                                                                        <option value="">Pilih LPK</option>
                                                                        @foreach ($bill->unique('mitra') as $item)
                                                                            <option value="{{ $item->lpk->user }}"
                                                                                @selected(isset($invoice) && $invoice->mitra == $item->lpk->user)
                                                                                @selected(old('lpk') == $item->lpk->user)>
                                                                                {{ strtoupper($item->lpk->name) }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('lpk')
                                                                        <div class='small text-danger text-left'>
                                                                            {{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3">Template</label>
                                                                @php
                                                                    $role = [1, 2, 3, 4, 5];
                                                                @endphp
                                                                <div class="col-md-6">
                                                                    <select class="form-control" name="template" required>
                                                                        <option value="">Pilih
                                                                            template
                                                                        </option>
                                                                        @foreach ($role as $item)
                                                                            <option value="{{ $item }}"
                                                                                @selected(isset($invoice) && $invoice->template == $item)
                                                                                @selected(old('template') == $item)>
                                                                                {{ strtoupper(str_replace('_', ' ', $item)) }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('template')
                                                                        <div class='small text-danger text-left'>
                                                                            {{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3">Tanggal
                                                                    Invoice</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" name="invoice"
                                                                        value="{{ isset($invoice) ? $invoice->tanggal : old('invoice') }}"
                                                                        class="form-control" required>
                                                                    @error('invoice')
                                                                        <div class='small text-danger text-left'>
                                                                            {{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3">Due Date</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" name="due"
                                                                        value="{{ isset($invoice) ? $invoice->due : old('due') }}"
                                                                        class="form-control" required>
                                                                    @error('due')
                                                                        <div class='small text-danger text-left'>
                                                                            {{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            @csrf

                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3">Note</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" name="note"
                                                                        value="{{ isset($invoice) ? $invoice->note : old('note') }}"
                                                                        class="form-control" required>
                                                                    @error('note')
                                                                        <div class='small text-danger text-left'>
                                                                            {{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-sm btn-primary">Generate</button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <table class="table table-bordered nowrap tabel" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    No.
                                                </th>
                                                <th>
                                                    Nama
                                                </th>
                                                <th>
                                                    LPK
                                                </th>
                                                <th>
                                                    Nominal
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach ($bill as $row)
                                                <tr>
                                                    <td>
                                                        {{ $no++ }}
                                                    </td>
                                                    <td>
                                                        {{ $row->peserta->name }}
                                                    </td>
                                                    <td>
                                                        {{ $row->heads->partner->name }}
                                                    </td>
                                                    <td>
                                                        {{ number_format($row->nominal, 0, ',', '.') }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <h5 class="card-title fw-semibold text-capitalize">Invoice</h5>
                                    @include('admin.invoices.ticket_pesawat')
                                @endif
                            </div>
                        @endforeach

                        @foreach ($da as $row)
                            @if ($row->status == 1)
                                <div class="modal fade" id="to{{ $row->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                    Bukti Invoice {{ ucwords(str_replace('_', ' ', $row->type)) }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/' . $row->paid->file) }}" class="w-100 mb-3">
                                                <h6>{{ $row->paid->created_at }}</h6>
                                                <h6> {{ number_format($row->paid->nominal, 0, ',', '.') }}</h6>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="gen{{ $row->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                    Generate Invoice kanrihi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body mx-5">
                                                <form action="{{ route('repay', ['id' => md5($row->id)]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <h6>Anda akan generate invoice ini lagi</h6>

                                                    <div class="form-group row mb-3">
                                                        <label>Tanggal Invoice</label>
                                                        <input type="text" name="invoice" class="form-control"
                                                            required>
                                                        @error('invoice')
                                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group row mb-3">
                                                        <label>Jatuh Tempo</label>
                                                        <input type="text" name="due" class="form-control"
                                                            required>
                                                        @error('due')
                                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group row mb-3">
                                                        <label>Nominal</label>
                                                        <input type="number" name="nominal" class="form-control"
                                                            value="{{ $row->sum }}" required>
                                                        @error('nominal')
                                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                                        @enderror
                                                    </div>


                                                    <div class="form-group mb-3">
                                                        <button type="submit"
                                                            class="btn rounded-pill btn-primary">Generate</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>

    <script>
        new DataTable('.tabel', {
            responsive: true
        });

        let choices = document.querySelectorAll(".choices")
        let initChoice
        for (let i = 0; i < choices.length; i++) {
            if (choices[i].classList.contains("multiple-remove")) {
                initChoice = new Choices(choices[i], {
                    delimiter: ",",
                    editItems: true,
                    maxItemCount: -1,
                    removeItemButton: true,
                })
            } else {
                initChoice = new Choices(choices[i])
            }
        }
    </script>
@endpush
