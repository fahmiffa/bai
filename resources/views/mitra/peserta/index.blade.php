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
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                        <button class="btn btn-primary rounded-pill btn-sm"
                            onclick="location.href='{{ route('document.create') }}' ">Tambah</button>
                    </div>
                    <table class="table table-bordered nowrap tabel" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    NAMA
                                </th>
                                <th>
                                    JOB
                                </th>
                                <th>
                                    PERUSAHAAN
                                </th>
                                <th>
                                    AGENSI
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
                                        <h6 class="text-capitalize">{{ $row->heads->peserta->name }}</h6>
                                    </td>
                                    <td>
                                        {{ strtoupper($row->heads->apply->type) }}
                                    </td>
                                    <td>
                                        {{ strtoupper($row->heads->comp->name) }}
                                    </td>
                                    <td>
                                        {{ strtoupper($row->heads->agency->name) }}
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');"
                                            action="{{ route('document.destroy', $row->id) }}" method="POST">
                                            <a href="{{ route('document.edit', $row->id) }}"
                                                class="btn btn-sm btn-primary"><i class="ti ti-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#to{{ $row->id }}">
                                                <i class="ti ti-eye"></i>
                                            </button>
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
                                <h5 class="modal-title" id="staticBackdropLabel">{{ $item->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-3 col-6 mb-3">
                                    <img src="{{ asset('storage/' . $item->photo) }}" class="w-25">
                                </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Jenis Pekerjaan</h6>
                                        {{ $item->heads->peserta->jenis }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Nomor Whatsapp</h6>
                                        {{ $item->heads->peserta->hp }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Jenis Kelamin</h6>
                                        {{ $item->heads->peserta->gender }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Status Tinggal</h6>
                                        {{ $item->heads->peserta->residance }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Tanggal Interview</h6>
                                        {{ $item->heads->peserta->interview }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Tanggal kedatangan</h6>
                                        {{ $item->heads->peserta->arrival }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Tanggal Kepulangan</h6>
                                        {{ $item->heads->peserta->departure }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Tanggal Mulai Kerja</h6>
                                        {{ $item->heads->peserta->workStart }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Tanggal Terakhir Kerja</h6>
                                        {{ $item->heads->peserta->workEnd }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Monitoring / Keluhan</h6>
                                        {{ $item->heads->peserta->complaint }}
                                    </div>
                                    <div class="col-md-3 col-6 mb-3">
                                        <h6>Minat Bidang Pekerjaan</h6>
                                        {{ $item->heads->peserta->section }}
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
        new DataTable('.tabel', {
            responsive: true
        });
    </script>
@endpush
