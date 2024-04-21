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
                    @isset($company)
                        <form action="{{ route('company.update', ['company' => $company]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                        @else
                            <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input type="text" name="name"
                                            value="{{ isset($company) ? $company->name : old('name') }}" class="form-control">
                                        @error('name')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>Address</label>
                                        <textarea class="form-control" name="alamat" rows="2">{{ isset($company) ? $company->alamat : old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                                   
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Leader's Name</label>
                                        <input type="text" name="leader"
                                            value="{{ isset($company) ? $company->leader : old('leader') }}" class="form-control">
                                        @error('leader')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>Leader's Phone</label>
                                        <input type="number" name="hp"
                                            value="{{ isset($company) ? $company->hp : old('hp') }}" class="form-control">
                                        @error('hp')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                                 
                                </div>                            

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input type="email" name="email"
                                            value="{{ isset($company) ? $company->email : old('email') }}"
                                            class="form-control">
                                        @error('email')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                    
                                </div>

                                <div class="form-group row mb-3">                         
                                    <div class="col-md-6">
                                        <label>Website</label>
                                        <input type="text" name="web"
                                            value="{{ isset($company) ? $company->website : old('web') }}" class="form-control">
                                        @error('web')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>Kanrihi</label>
                                        <input type="text" name="kanrihi"
                                            value="{{ isset($company) ? $company->kanrihi : old('kanrihi') }}" class="form-control">
                                        @error('kanrihi')
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