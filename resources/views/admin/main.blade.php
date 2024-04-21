@extends('layout.base')
@push('css')
    <style>
        .scrollable-ul {
            max-height: 400px;
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
                                    <h5 class="card-title mb-9 fw-semibold"> Unpaid </h5>                                                      
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-danger rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-file-invoice fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="fw-semibold mb-3">{{ number_format($tot, 0, ',', '.') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold"> Paid</h5>                            
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-file-invoice fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="fw-semibold mb-3">{{ number_format($paid, 0, ',', '.') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold"> Mitra </h5>
                                    <h4 class="fw-semibold mb-3">{{ $mitra }}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-dark rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-color-filter fs-6"></i>
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
                                    <h5 class="card-title mb-9 fw-semibold"> Agency </h5>
                                    <h4 class="fw-semibold mb-3">{{ $agency }}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-dark rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-versions fs-6"></i>
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
                                    <h5 class="card-title mb-9 fw-semibold"> Job </h5>
                                    <h4 class="fw-semibold mb-3">{{ $job }}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-dark rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-wallpaper fs-6"></i>
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
                                    <h5 class="card-title mb-9 fw-semibold"> Siswa </h5>
                                    <h4 class="fw-semibold mb-3">{{ $siswa }}</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-dark rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-user-check fs-6"></i>
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
                        <h5 class="card-title fw-semibold">Recent Activity</h5>
                    </div>
                    <ul
                        class="timeline-widget mb-0 position-relative mb-n5 {{ $log->count() > 5 ? 'scrollable-ul' : null }}">
                        @foreach ($log as $item)
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">
                                    {{ date('Y-m-d', strtotime($item->created_at)) }}</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                @if ($item->par == 'head')
                                    <div class="timeline-desc fs-3 text-dark mt-n1">{{ $item->args }} <br> (
                                        {{ $item->input->name }} ) </div>
                                @else
                                    <div class="timeline-desc fs-3 text-dark mt-n1">{{ $item->args }} <br> (
                                        {{ $item->input->name }} to {{ $item->output->name }} ) </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
