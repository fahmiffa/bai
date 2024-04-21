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
                    </div>              
                            <form action="{{ route('independent.store') }}" method="post" enctype="multipart/form-data">                         
                                @csrf                                        
                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="name"
                                            value="{{ isset($independent) ? $independent->name : old('name') }}" class="form-control">
                                        @error('name')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                     
                                    <div class="col-md-6">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat" rows="2">{{ isset($independent) ? $independent->residance : old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                                     
                                </div>                            

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Nomor Whatsapp</label>
                                        <input type="number" name="hp"
                                            value="{{ isset($independent) ? $independent->hp : old('hp') }}"
                                            class="form-control">
                                        @error('hp')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div> 
                                    
                                    <div class="col-md-6">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="gender"
                                            value="{{ isset($independent) ? $independent->gender : old('gender') }}"
                                            class="form-control">
                                        @error('gender')
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
