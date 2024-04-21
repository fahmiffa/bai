@extends('layout.base')
@push('css')
    <style>
        .scrollable-ul {
            max-height: 200px;
            /* Set the maximum height of the list */
            overflow-y: auto;
            /* Enable vertical scrollbar */
        }
    </style>
@endpush
@section('main')
    <div class="row">
        <div class="col-lg-6 d-flex align-items-stretch">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold"> Job </h5>
                                    <h4 class="fw-semibold mb-3">{{ $job }}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-dark rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            {{-- <i class="ti ti-broadcast fs-6"></i> --}}
                                            <i class="ti ti-file-invoice fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold"> Company </h5>
                                    <h4 class="fw-semibold mb-3">{{ $comp }}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-dark rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-asset fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold"> Peserta </h5>
                                    <h4 class="fw-semibold mb-3">{{$siswa}}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-dark rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-user-check fs-6 fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold"> Payment </h5>
                                    <h4 class="fw-semibold mb-3">{{ $job }}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-dark rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-cash fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="mb-4">
                        <h5 class="card-title fw-semibold">Notif Activity</h5>
                    </div>
                    <ul
                        class="timeline-widget mb-0 position-relative mb-n5 {{ $log->count() > 5 ? 'scrollable-ul' : null }}">
                        @foreach ($log as $item)
                        @php $filter = ['invoice','head']; @endphp            
                            @if($item->par != 'ticket')              
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">{{ date('Y-m-d',strtotime($item->created_at)) }}</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border {{$item->par == 'invoice' ? 'border-danger' : 'border-primary'}} flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>  
                                    @if(in_array($item->par,$filter))                                
                                        <div class="timeline-desc fs-3 text-dark mt-n1">{{$item->args}}  <br> 
                                            ( {{strtoupper($item->input->name)}} ) </div>                        
                                    @else
                                        <div class="timeline-desc fs-3 text-dark mt-n1">{{ $item->args }} to
                                            {{ strtoupper($item->output->name) }} </div>
                                    @endif 
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
