@extends('layout.base')
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                        <button class="btn btn-primary rounded-pill btn-sm"
                            onclick="location.href='{{ route('document.create') }}' ">Tambah</button>
                    </div>
                    <div class="table-responsive d-none">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No.</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Email</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Role</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($da as $row)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $loop->iteration }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1 text-capitalize">{{ $row->heads->field->name }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $row->email }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2 text-capitalize">
                                                {{ $row->role }}
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');"
                                                action="{{ route('user.destroy', $row->id) }}" method="POST">
                                                <a href="{{ route('user.edit', $row->id) }}"
                                                    class="btn btn-sm btn-primary"><i class="ti ti-edit"></i></a>
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
                        <div class="d-flex justify-content-center">
                            {!! $da->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($da as $item)
                <div class="card rounded shadow-sm">
                    <div class="card-header bg-primary text-white small p-1">
                        <div class="d-flex justify-content-start mx-4">
                            <p class="my-auto fw-bold">
                                NAME : {{ strtoupper($item->heads->field->name) }}
                            </p>
                            <p class="my-auto mx-auto fw-bold">
                                Perusahaan : {{ strtoupper($item->heads->comp->name) }}
                            </p>
                            <p class="my-auto mx-auto fw-bold">
                                Agensi : {{ strtoupper($item->heads->comp->agen->name) }}
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- <div class="col-md-3 col-6 mb-3">
                                <img src="{{ asset('storage/' . $item->photo) }}" class="w-25">
                            </div> --}}
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Jenis Pekerjaan</h6>
                                {{ $item->heads->field->jenis }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Nomor Whatsapp</h6>
                                {{ $item->heads->field->hp }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Jenis Kelamin</h6>
                                {{ $item->heads->field->gender }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Status Tinggal</h6>
                                {{ $item->heads->field->residance }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Tanggal Interview</h6>
                                {{ $item->heads->field->interview }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Tanggal kedatangan</h6>
                                {{ $item->heads->field->arrival }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Tanggal Kepulangan</h6>
                                {{ $item->heads->field->departure }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Tanggal Mulai Kerja</h6>
                                {{ $item->heads->field->workStart }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Tanggal Terakhir Kerja</h6>
                                {{ $item->heads->field->workEnd }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Monitoring / Keluhan</h6>
                                {{ $item->heads->field->complaint }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Minat Bidang Pekerjaan</h6>
                                {{ $item->heads->field->section }}
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>CV</h6>
                                <a target="_blank" href="{{ asset('storage/' . $item->cv) }}"
                                    class="btn btn-primary btn-sm">File</a>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Kontrak Kerja</h6>
                                <a target="_blank" href="{{ asset('storage/' . $item->kontrak) }}"
                                    class="btn btn-primary btn-sm">File</a>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <h6>Resident Card</h6>
                                <a target="_blank" href="{{ asset('storage/' . $item->residentCard) }}"
                                    class="btn btn-primary btn-sm">File</a>
                            </div>

                            <div class="col-md-3 col-6 mb-3">
                              <h6>Action</h6>
                                <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');"
                                    action="{{ route('document.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('document.edit', $item->id) }}" class="btn btn-sm btn-primary"><i
                                            class="ti ti-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                            class="ti ti-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {!! $da->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
@endsection
