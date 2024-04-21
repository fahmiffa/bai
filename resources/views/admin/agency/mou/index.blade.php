@extends('layout.base')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" />
@endpush
@section('main')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary rounded-pill btn-sm"
                                onclick="location.href='{{ route('mou.create', ['id' => $id]) }}' ">Tambah</button>
                            &nbsp;
                            <button class="btn btn-danger rounded-pill btn-sm" onclick="history.back()">Back</button>
                        </div>
                    </div>
                    <table class="table table-bordered nowrap" style="width:100%" id="tabel">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    LPK/SO
                                </th>
                                <th>
                                    Type
                                </th>
                                <th>
                                    File
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
                                      <h6 class="text-capitalize">{{ $row->mitras->name }}</h6>
                                    </td>
                                    <td>
                                      <h6 class="text-capitalize">{{ strtoupper((str_replace('_',' ',$row->type))) }}</h6>
                                  </td>
                                    <td>
                                      <a href="{{ route('mou.pile', ['id' => md5($row->id)]) }}"
                                        class="btn btn-dark btn-sm"><i class="ti ti-file-invoice"></i></a>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');" action="{{ route('mou.destroy', ['id' => md5($row->id)]) }}" method="POST">                                             
                                            <a href="{{ route('mou.edit', ['id' => md5($row->id)]) }}"
                                                class="btn btn-primary btn-sm"><i class="ti ti-pencil"></i></a>
                                                @csrf                                            
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="ti ti-trash"></i></button>
                                            </form>
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
