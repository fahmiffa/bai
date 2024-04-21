@extends('layout.base')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" />
@endpush
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                        <div class="dropdown">
                            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Download
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('admin.excel', ['par' => 'job']) }}">Excel</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('admin.pdf', ['par' => 'job']) }}">PDF</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <table class="table table-bordered nowrap" style="width:100%" id="tabel">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Company
                                </th>
                                <th>
                                    Agency
                                </th>
                                <th>
                                    LPK/SO
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
                                        {{ strtoupper($item->jobs->comp->name) }}
                                    </td>
                                    <td>
                                        {{ strtoupper($item->jobs->comp->agen->name) }}
                                    </td>
                                    <td>
                                        {{ strtoupper($item->mitras->name) }}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#to{{ $item->id }}">
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
                                <h5 class="modal-title" id="staticBackdropLabel"> {{ strtoupper($item->jobs->comp->name) }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Type</h6>
                                        {{ strtoupper($item->jobs->type) }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Kouta</h6>
                                        {{ $item->jobs->kouta }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Umur</h6>
                                        {{ $item->jobs->age }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Gender</h6>
                                        {{ $item->jobs->gender }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Gaji Pokok</h6>
                                        {{ number_format($item->jobs->salary, 0, ',', '.') }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Tunjangan</h6>
                                        {{ number_format($item->jobs->allowance, 0, ',', '.') }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        @if ($item->jobs->pile)
                                            <h6>Dokumen</h6>
                                            <a target="_blank" href="{{ asset('storage/' . $item->jobs->pile) }}"
                                                class="btn btn-primary btn-sm">File</a>
                                        @endif
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
        new DataTable('#tabel', {
            responsive: true
        });
    </script>
@endpush
