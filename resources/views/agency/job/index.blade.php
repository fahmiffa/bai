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
                        <button class="btn btn-primary rounded-pill btn-sm"
                            onclick="location.href='{{ route('job.create') }}' ">Add</button>
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
                                    Leader
                                </th>
                                <th>
                                    Type
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
                                        {{ strtoupper($item->comp->name) }}
                                    </td>
                                    <td>
                                        {{ strtoupper($item->comp->leader) }}
                                    </td>
                                    <td>
                                        {{ $item->type }}
                                    </td>
                                    <td>   
                                        <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');"
                                        action="{{ route('job.destroy', $item->id) }}" method="POST">
                                        <a href="{{ route('job.edit', $item->id) }}" class="btn btn-sm btn-primary"><i
                                                class="ti ti-edit"></i></a>
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#to{{ $item->id }}">
                                                <i class="ti ti-eye"></i>
                                            </button>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="ti ti-trash"></i></button>
                                    </form>
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
                                <h5 class="modal-title" id="staticBackdropLabel"> {{ strtoupper($item->comp->name) }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">                           
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Kouta</h6>
                                        {{ $item->kouta }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Age</h6>
                                        {{ $item->age }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Basic Salary</h6>
                                        {{ number_format($item->salary, 0, ',', '.') }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Allowance</h6>
                                        {{ number_format($item->allowance, 0, ',', '.') }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>SO/LPK</h6>
                                        @foreach ($item->tojobs as $val)
                                            - {{ $val->mitras->name }}<br>
                                        @endforeach
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        @if ($item->pile)
                                            <h6>Dokumen</h6>
                                            <a target="_blank" href="{{ asset('storage/' . $item->pile) }}"
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
