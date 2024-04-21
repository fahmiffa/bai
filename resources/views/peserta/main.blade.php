@extends('layout.base')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" />
@endpush
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
                <h5 class="card-title fw-semibold text-capitalize mb-3">Data Job Tersedia</h5>
                <table class="table table-bordered nowrap tabel" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                No.
                            </th>
                            <th>
                                Kode
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Company
                            </th>
                            <th>
                                Agency
                            </th>
                            <th>
                                File
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($job as $row)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ strtoupper($row->jobs->code) }}
                                </td>
                                <td>
                                    {{ strtoupper($row->jobs->type) }}
                                </td>
                                <td>
                                    {{ strtoupper($row->jobs->comp->name) }}
                                </td>
                                <td>
                                    {{ strtoupper($row->jobs->comp->agen->name) }}
                                </td>
                                <td>
                                    <a target="_blank" href="{{ route('peserta.job', ['id' => md5($row->jobs->id)]) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="ti ti-clipboard-text"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
        new DataTable('.tabel', {
            responsive: true
        });
    </script>
@endpush
