@extends('layout.base')
@section('main')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                        <button class="btn btn-danger rounded-pill btn-sm" onclick="history.back()">Back</button>
                    </div>

                    <form action="{{ route('setting.store') }}" method="post">
                        @csrf
                        <div class="px-5">
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Bank</label>
                                <div class="col-md-6">
                                    <input type="text" name="bank"
                                        value="{{ isset($set) ? $set->bank : old('bank') }}" class="form-control">
                                    @error('bank')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
 
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Pajak</label>
                                <div class="col-md-6">
                                    <input type="number" name="tax"
                                        value="{{ isset($set) ? $set->tax : old('tax') }}" class="form-control">
                                    @error('tax')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-start">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection