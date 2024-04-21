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
                        <h5 class="card-title fw-semibold text-capitalize">Bill</h5>
                        <button class="btn btn-primary rounded-pill btn-sm"
                            onclick="location.href='{{ route('bill.create') }}' ">Tambah</button>
                    </div>
                    <table class="table table-bordered nowrap tabel" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Nominal
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
                                        <h6 class="text-capitalize">{{ $row->peserta->name }}</h6>
                                    </td>
                                    <td>
                                        {{ number_format($row->nominal, 0, ',', '.') }}
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');"
                                            action="{{ route('bill.destroy', $row->id) }}" method="POST">
                                            <a href="{{ route('bill.edit', $row->id) }}" class="btn btn-sm btn-primary"><i
                                                    class="ti ti-edit"></i></a>
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
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title fw-semibold text-capitalize">Invoice</h5>
                    </div>
                    <table class="table table-bordered nowrap tabel" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Nomor
                                </th>
                                <th>
                                    Siswa
                                </th>
                                <th>
                                    File
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inv as $row)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $row->number }}
                                    </td>
                                    <td>
                                        @foreach ($row->inv as $item)
                                            - {{ $item->field->name }}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('mitra.bill', ['id' => md5($row->id)]) }}"
                                            class="btn btn-sm btn-dark">
                                            <i class="ti ti-cash"></i></a>
                                        </form>
                                    </td>
                                    <td>
                                        @if ($row->status == 0)
                                            <span class="badge bg-danger rounded-3 fw-semibold">unpaid</span>
                                        @else
                                            <button type="button" class="btn btn-success btn-sm rounded-pill"
                                                data-bs-toggle="modal" data-bs-target="#to{{ $row->id }}">
                                                Paid
                                            </button>
                                        @endif
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
        new DataTable('.tabel', {
            responsive: true
        });
    </script>
@endpush
