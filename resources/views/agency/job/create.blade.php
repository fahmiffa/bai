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
                    @isset($job)
                        <form action="{{ route('job.update', ['job' => $job]) }}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                        @else
                            <form action="{{ route('job.store') }}" method="post" enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Company</label>
                                        <select class="choices form-select" name="comp">
                                            <option value="">Select Company</option>
                                            @foreach ($com as $item)
                                                <option value="{{ $item->id }}" @selected(isset($job) && $job->company == $item->id)>
                                                    {{ strtoupper($item->name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('comp')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>職種(業種) k</label>
                                        <input type="text" name="type"
                                            value="{{ isset($job) ? $job->type : old('type') }}" class="form-control">
                                        @error('type')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>Residance Status</label>
                                        <input type="text" name="residance"
                                            value="{{ isset($job) ? $job->residance : old('residance') }}" class="form-control">
                                        @error('residance')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>採用人数</label>
                                        <input type="number" name="kouta"
                                            value="{{ isset($job) ? $job->kouta : old('kouta') }}" class="form-control">
                                        @error('kouta')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>年齢</label>
                                        <input type="text" name="age" value="{{ isset($job) ? $job->age : old('age') }}"
                                            class="form-control">
                                        @error('age')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>性別</label>
                                        <input type="text" name="gender"
                                            value="{{ isset($job) ? $job->gender : old('gender') }}" class="form-control">
                                        @error('gender')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>手取り額</label>
                                        <input type="number" name="salary"
                                            value="{{ isset($job) ? $job->salary : old('salary') }}" class="form-control">
                                        @error('salary')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label>手当込み</label>
                                        <input type="text" name="allowance"
                                            value="{{ isset($job) ? $job->allowance : old('allowance') }}"
                                            class="form-control">
                                        @error('allowance')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>備考</label>
                                        <textarea class="form-control" name="note" rows="2">{{ isset($job) ? $job->note : old('note') }}</textarea>
                                        @error('note')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label>File</label>
                                        <input class="form-control" name="pile" type="file" accept=".pdf">
                                        @error('pile')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                @isset($job)
                                    @php
                                        $jobs = $job->tojobs->pluck('mitra')->toArray();                                                                       
                                    @endphp
                                @endif
                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Mitra/LPK</label>
                                        <select class="choices form-select multiple-remove" name="mitra[]" multiple>
                                            <option value="">Select Mitra</option>
                                            @foreach ($mitra as $item)
                                                <option value="{{ $item->mitras->user }}" @selected(isset($job) && in_array($item->mitras->user,$jobs))>
                                                    {{ strtoupper($item->mitras->name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('mitra')
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
