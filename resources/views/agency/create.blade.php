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
                        {{-- <button class="btn btn-danger rounded-pill btn-sm" onclick="history.back()">Back</button> --}}
                    </div>
                    @isset($agency)
                        <form action="{{ route('agency.update', ['agency' => $agency]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                        @else
                            <form action="{{ route('agency.store') }}" method="post" enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>管理団体名</label>
                                        <input type="text" name="name"
                                            value="{{ isset($agency) ? $agency->name : old('name') }}" class="form-control">
                                        @error('name')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>Registration Code</label>
                                        <input type="text" name="noreg"
                                            value="{{ isset($agency) ? $agency->noreg : old('noreg') }}" class="form-control">
                                        @error('noreg')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                                   
                                </div>

                                <div class="form-group row mb-3">                   
                                    <div class="col-md-6">
                                        <label>住所</label>
                                        <textarea class="form-control" name="alamat" rows="2">{{ isset($agency) ? $agency->alamat : old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                                   
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>代表者</label>
                                        <input type="text" name="leader"
                                            value="{{ isset($agency) ? $agency->leader : old('leader') }}" class="form-control">
                                        @error('leader')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>電話番号</label>
                                        <input type="number" name="leaderNumber"
                                            value="{{ isset($agency) ? $agency->leaderNumber : old('leaderNumber') }}" class="form-control">
                                        @error('leaderNumber')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                                 
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label> 担当者</label>
                                        <input type="text" name="pic"
                                            value="{{ isset($agency) ? $agency->pic : old('pic') }}" class="form-control">
                                        @error('pic')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>担当者電話番号</label>
                                        <input type="number" name="picNumber"
                                            value="{{ isset($agency) ? $agency->picNumber : old('picNumber') }}" class="form-control">
                                        @error('picNumber')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                                 
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>メール</label>
                                        <input type="email" name="email"
                                            value="{{ isset($agency) ? $agency->email : auth()->user()->email }}"
                                            class="form-control">
                                        @error('email')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                    
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>銀行名</label>
                                        <input type="text" name="bankName"
                                            value="{{ isset($agency) ? $agency->bankName : old('bankName') }}" class="form-control">
                                        @error('bankName')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>支店名</label>
                                        <input type="text" name="bankBranch"
                                            value="{{ isset($agency) ? $agency->bankBranch : old('bankBranch') }}" class="form-control">
                                        @error('bankBranch')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>銀行住所</label>
                                        <input type="text" name="bankAddress"
                                            value="{{ isset($agency) ? $agency->bankAddress : old('bankAddress') }}" class="form-control">
                                        @error('bankAddress')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>口座番号</label>
                                        <input type="number" name="bankNumber"
                                            value="{{ isset($agency) ? $agency->bankNumber : old('bankNumber') }}" class="form-control">
                                        @error('bankNumber')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>口座名義</label>
                                        <input type="text" name="bankHolder"
                                            value="{{ isset($agency) ? $agency->bankHolder : old('bankHolder') }}" class="form-control">
                                        @error('bankHolder')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>Swift Code</label>
                                        <input type="text" name="swiftCode"
                                            value="{{ isset($agency) ? $agency->swiftCode : old('swiftCode') }}" class="form-control">
                                        @error('swiftCode')
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
