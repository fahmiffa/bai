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
                    <form action="{{ route('padang.billStore') }}" method="post">
                        @csrf
                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label>Siswa</label>
                                @isset($bill)
                                    <p class="form-control-plaintext"> {{ strtoupper($bill->peserta->name) }}</p>
                                @else
                                    <select class="choices form-select" name="siswa">
                                        <option value="">Select Siswa</option>
                                        @foreach ($siswa as $item)
                                            <option value="{{ $item->peserta->id }}" @selected(isset($bill) && $bill->heads->company == $item->peserta->id)>
                                                {{ strtoupper($item->peserta->name) }} </option>
                                        @endforeach
                                    </select>
                                    @endif
                                    @error('siswa')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-6">
                                    <label>Nominal</label>
                                    <input type="number" name="nominal"
                                        value="{{ isset($bill) ? $bill->nominal : old('nominal') }}" class="form-control">
                                    @error('nominal')
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
