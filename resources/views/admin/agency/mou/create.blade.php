@extends('layout.base')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
@endpush
@section('main')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                        <button class="btn btn-danger rounded-pill btn-sm" onclick="history.back()">Back</button>
                    </div>

                    @isset($mou)
                        <form action="{{ route('mou.update', ['id' => md5($mou->id)]) }}" method="post" enctype="multipart/form-data">                     
                    @else
                            <form action="{{ route('mou.store', ['id'=>md5($agency->id)]) }}" method="post" enctype="multipart/form-data">
                    @endif
                                @csrf                           
                                <div class="form-group row mb-3">
                                    <label class="col-md-3">LPK/SO</label>
                                    <div class="col-md-6">                                        
                                        <select class="choices form-select" name="mitra">
                                            <option value="">Select LPK/SO</option>
                                            @foreach ($agency->cat->so as $item)
                                                <option value="{{ $item->mitras->user }}" @selected(isset($mou) && $mou->mitra == $item->mitras->user)>
                                                    {{ strtoupper($item->mitras->name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('mitra')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label class="col-md-3">Type</label>
                                    @php
                                        $role = ['mou_kjri','mou_kbri','mou_tsk','lampiran_1', 'lampiran_2'];
                                    @endphp
                                    <div class="col-md-6">
                                        <select class="choices form-select" name="type">
                                            <option value="">Select Type</option>
                                            @foreach ($role as $item)
                                                <option value="{{ $item }}" @selected(isset($mou) && $mou->type == $item)>
                                                    {{ strtoupper(str_replace('_',' ',$item)) }}</option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>                 

                                <div class="mb-3 d-flex justify-content-start">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script>
        let choices = document.querySelectorAll(".choices")
        let initChoice
        for (let i = 0; i < choices.length; i++) {
            if (choices[i].classList.contains("multiple-remove")) {
                initChoice = new Choices(choices[i], {
                    delimiter: ",",
                    editItems: true,
                    maxItemCount: -1,
                    removeItemButton: true,
                })
            } else {
                initChoice = new Choices(choices[i])
            }
        }
    </script>
@endpush
