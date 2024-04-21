@extends('layout.base')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" />
@endpush
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="card-title fw-semibold text-capitalize mb-3">Data Job Terdaftar</h5>                    
                    <button class="btn btn-primary rounded-pill btn-sm"
                        onclick="location.href='{{ route('peserta.reg') }}' ">Daftar</button>
                </div>
                <table class="table table-bordered nowrap tabel" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                No.
                            </th>                
                            <th>
                                Job
                            </th>                 
                            <th>
                                Company
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
                                    {{ strtoupper($row->apply->type) }}
                                </td>            
                                <td>
                                    @foreach ($row as $item)
                                        
                                    @endforeach
                                    {{ strtoupper($row->comp->name) }}
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
