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
                    <div class="d-flex justify-content-between mb-5">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                        <div class="dropdown">
                            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Download
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item"
                                        href="{{ route('admin.excel', ['par' => 'agency']) }}">Excel</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('admin.pdf', ['par' => 'agency']) }}">PDF</a>
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
                                    Name
                                </th>
                                <th>
                                    Leader
                                </th>
                                <th>
                                    PIC
                                </th>
                                <th>
                                    Dokumen MOU
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
                                        <h6 class="text-capitalize">{{ $row->name }}</h6>
                                    </td>
                                    <td>
                                        {{ $row->leader }}
                                    </td>
                                    <td>
                                        {{ $row->pic }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.mou', ['id' => md5($row->id)]) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="ti ti-briefcase"></i>
                                        </a>
                                    </td>
                                    <td>
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
                                        <h6>Kategori</h6>
                                        {{ strtoupper($item->cat->type) }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Leader Phone</h6>
                                        {{ $item->leaderNumber }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>PIC Phone</h6>
                                        {{ $item->pic }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Bank</h6>
                                        <div class="d-flex align-items-center gap-2 text-capitalize">
                                            Account Number : {{ $item->bankNumber }}
                                        </div>
                                        <div class="d-flex align-items-center gap-2 text-capitalize">
                                            Holder Name : {{ $item->bankHolder }}
                                        </div>
                                        <div class="d-flex align-items-center gap-2 text-capitalize">
                                            Swift Code : {{ $item->swiftCode }}
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>LPK/SO</h6>
                                        @foreach ($item->cat->so as $val)
                                            - {{ $val->mitras->name }}<br>
                                        @endforeach
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
