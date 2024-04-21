@extends('layout.base')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" />
@endpush
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                        <div class="dropdown">
                            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Download
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('admin.excel', ['par' => 'mitra']) }}">Excel</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('admin.pdf', ['par' => 'mitra']) }}">PDF</a>
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
                                    LPK
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($head as $row)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize">{{ $row->peserta->name }}</h6>
                                    </td>
                                    <td>
                                        @if ($row->mitra)
                                            <p class="mb-0 fw-normal">{{ $row->partner->name }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.siswa.detail', ['id' => md5($row->id)]) }}"
                                            class="btn btn-primary btn-sm rounded-pill"><i class="ti ti-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
