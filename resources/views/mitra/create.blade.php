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
                    @isset($patrner)
                        <form action="{{ route('patrner.update', ['patrner' => $patrner]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                        @else
                            <form action="{{ route('patrner.store') }}" method="post" enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Nama</label>
                                        <input type="text" name="name"
                                            value="{{ isset($patrner) ? $patrner->name : old('name') }}" class="form-control">
                                        @error('name')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat" rows="2">{{ isset($patrner) ? $patrner->alamat : old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                                   
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Leader's Name</label>
                                        <input type="text" name="leader"
                                            value="{{ isset($patrner) ? $patrner->leader : old('leader') }}" class="form-control">
                                        @error('leader')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>Leader's Phone</label>
                                        <input type="number" name="leaderNumber"
                                            value="{{ isset($patrner) ? $patrner->leaderNumber : old('leaderNumber') }}" class="form-control">
                                        @error('leaderNumber')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                                 
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>PIC Name</label>
                                        <input type="text" name="pic"
                                            value="{{ isset($patrner) ? $patrner->pic : old('pic') }}" class="form-control">
                                        @error('pic')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>PIC Phone</label>
                                        <input type="number" name="picNumber"
                                            value="{{ isset($patrner) ? $patrner->picNumber : old('picNumber') }}" class="form-control">
                                        @error('picNumber')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                                 
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input type="email" name="email"
                                            value="{{ isset($patrner) ? $patrner->email : auth()->user()->email }}"
                                            class="form-control">
                                        @error('email')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>                    
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Izin SO & LPK </label>
                                        <input type="text" name="permit"
                                            value="{{ isset($patrner) ? $patrner->permit : old('permit') }}" class="form-control">
                                        @error('permit')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>Dokumen Izin</label>
                                        <input class="form-control" name="doc" type="file" accept=".pdf">
                                        @error('doc')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                            
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label>NPWP</label>
                                        <input type="text" name="npwp"
                                            value="{{ isset($patrner) ? $patrner->npwp : old('npwp') }}" class="form-control">
                                        @error('npwp')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label>Nama Bank</label>
                                        <input type="text" name="bankName"
                                            value="{{ isset($patrner) ? $patrner->bankName : old('bankName') }}" class="form-control">
                                        @error('bankName')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label>Nama Cabang</label>
                                        <input type="text" name="bankBranch"
                                            value="{{ isset($patrner) ? $patrner->bankBranch : old('bankBranch') }}" class="form-control">
                                        @error('bankBranch')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label>Alamat Bank</label>
                                        <input type="text" name="bankAddress"
                                            value="{{ isset($patrner) ? $patrner->bankAddress : old('bankAddress') }}" class="form-control">
                                        @error('bankAddress')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label>Nomor Rekening</label>
                                        <input type="text" name="bankNumber"
                                            value="{{ isset($patrner) ? $patrner->bankNumber : old('bankNumber') }}" class="form-control">
                                        @error('bankNumber')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label>Account Bank Atas Nama</label>
                                        <input type="text" name="bankHolder"
                                            value="{{ isset($patrner) ? $patrner->bankHolder : old('bankHolder') }}" class="form-control">
                                        @error('bankHolder')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <label>SWIFT</label>
                                        <input type="text" name="swiftCode"
                                            value="{{ isset($patrner) ? $patrner->swiftCode : old('swiftCode') }}" class="form-control">
                                        @error('swiftCode')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div> 
                                
                                <div class="form-group row mb-3">
                            
                                    <div class="col-md-6">
                                        <label>Logo</label>
                                        <input class="form-control" name="logo" type="file" accept=".jpeg, .jpg, .png">
                                        @error('logo')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>Stempel</label>                                 
                                        <input class="form-control" name="stamp" type="file" accept=".jpeg, .jpg, .png">
                                        @error('stamp')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label>Tanda Tangan</label>
                                        <input class="form-control" name="ttd" type="file" accept=".jpeg, .jpg, .png">
                                        @error('ttd')
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
