@extends('layout.base')
@push('css')    
    <link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap5.min.css')}}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" />
@endpush
@section('main')
    <div class="row">     
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">                                                      
                    <div class="row">
                        <div class="col-md-3 col-6 mb-3">
                            <img src="{{ asset('storage/' . $head->document->photo) }}" class="w-25">
                            <p class="fw-bold mt-2">{{$data}}</p>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Jenis Pekerjaan</h6>
                            {{ $head->peserta->jenis }}
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Nomor Whatsapp</h6>
                            {{ $head->peserta->hp }}
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Jenis Kelamin</h6>
                            {{ $head->peserta->gender }}
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Status Tinggal</h6>
                            {{ $head->peserta->residance }}
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Tanggal Interview</h6>
                            {{ $head->peserta->interview }}
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Tanggal kedatangan</h6>
                            {{ $head->peserta->arrival }}
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Tanggal Kepulangan</h6>
                            {{ $head->peserta->departure }}
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Tanggal Mulai Kerja</h6>
                            {{ $head->peserta->workStart }}
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Tanggal Terakhir Kerja</h6>
                            {{ $head->peserta->workEnd }}
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Monitoring / Keluhan</h6>
                            {{ $head->peserta->complaint }}
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Minat Bidang Pekerjaan</h6>
                            {{ $head->peserta->section }}
                        </div>                 
                        <div class="col-md-3 col-6 mb-3">
                            <h6>CV</h6>
                            <a target="_blank" href="{{ asset('storage/' . $head->document->cv) }}"
                                class="btn btn-primary btn-sm">File</a>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Kontrak Kerja</h6>
                            <a target="_blank" href="{{ asset('storage/' . $head->document->kontrak) }}"
                                class="btn btn-primary btn-sm">File</a>
                        </div>
                        <div class="col-md-3 col-6 mb-3">
                            <h6>Resident Card</h6>
                            <a target="_blank" href="{{ asset('storage/' . $head->document->residentCard) }}"
                                class="btn btn-primary btn-sm">File</a>
                        </div>                       
                    </div>
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
