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
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <table class="table table-bordered nowrap" style="width:100%" id="tabel">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Number
                                </th>
                                <th>
                                    Note
                                </th>
                                <th>
                                    Due Date
                                </th>
                                <th>
                                    Nominal
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($da as $item)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $item->number }}
                                    </td>
                                    <td>
                                        {{ $item->note }}
                                    </td>
                                    <td>
                                        {{ $item->due }}
                                    </td>
                                    <td>
                                        {{ number_format($item->sum, 0, ',', '.') }}
                                    </td>
                                    <td>
                                        @if ($item->status == 0)
                                            <span class="badge rounded-pill bg-danger">unpaid</span>
                                        @else
                                            <span class="badge rounded-pill bg-success">paid</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('payment.pile', ['id' => md5($item->id)]) }}"
                                            class="btn btn-sm btn-dark">
                                            <i class="ti ti-cash"></i></a>
                                        @if ($item->status == 0)
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#to{{ $item->id }}">
                                                <i class="ti ti-cash-banknote"></i>
                                            </button>
                                        @endif
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
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel"> {{ strtoupper($item->note) }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('pay', ['id' => md5($item->id)]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label>Nominal</label>
                                        <input type="number" name="nominal" class="form-control" required>
                                        @error('nominal')
                                            <div class='small text-danger text-left'>
                                                {{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Photo</label>
                                        <input class="form-control" name="photo" type="file" accept=".jpg, .jpge, .png"
                                            required>
                                        @error('photo')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn rounded-pill btn-primary">Pay</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
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
        new DataTable('#tabel', {
            responsive: true
        });
    </script>
@endpush
