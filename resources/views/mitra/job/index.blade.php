@extends('layout.base')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" />
@endpush
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                    </div>
                    <table class="table table-bordered nowrap tabel" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    NAMA
                                </th>
                                <th>
                                    PERUSAHAAN
                                </th>
                                <th>
                                    AGENSI
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($da as $row)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $row->jobs->type }}
                                    </td>
                                    <td>
                                        {{ strtoupper($row->jobs->comp->name) }}
                                    </td>
                                    <td>
                                        {{ strtoupper($row->jobs->comp->agen->name) }}
                                    </td>
                                    <td>
                                        @if ($row->jobs->pile)
                                            <a target="_blank" href="{{ asset('storage/' . $row->jobs->pile) }}"
                                                class="btn btn-primary btn-sm">File</a>
                                        @endif

                                        @if ($row->jobs->pile)
                                            <a target="_blank"
                                                href="{{ route('document.job', ['id' => md5($row->jobs->id)]) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="ti ti-clipboard-text"></i>
                                            </a>
                                        @endif
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#to{{ $row->id }}">
                                            <i class="ti ti-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @foreach ($da as $item)
                <div class="modal fade" id="to{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">{{ $item->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Jenis Pekerjaan</h6>
                                        {{ $item->jobs->type }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Kouta</h6>
                                        {{ $item->jobs->kouta }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Age</h6>
                                        {{ $item->jobs->age }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Catatan</h6>
                                        {{ $item->jobs->note }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Gaji Pokok</h6>
                                        {{ number_format($item->jobs->salary, 0, ',', '.') }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Tunjangan</h6>
                                        {{ number_format($item->jobs->allowance, 0, ',', '.') }}
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>

    <script>
        new DataTable('.tabel', {
            responsive: true
        });
    </script>
@endpush
