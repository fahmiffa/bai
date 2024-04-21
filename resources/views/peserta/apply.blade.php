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
                    @isset($apply)
                        <form action="{{ route('apply.update', ['apply' => $apply]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                        @else
                            <form action="{{ route('peserta.apply') }}" method="post" enctype="multipart/form-data">
                                @endif
                                @csrf

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>JOB</label>
                                        @isset($document)
                                            <p class="form-control-plaintext"> {{ strtoupper($document->heads->comp->name) }}</p>
                                        @else
                                            <select class="choices form-select" name="job">
                                                <option value="">Select Job</option>
                                                @foreach ($comp as $item)
                                                    @if ($item->jobs->open)
                                                        <option value="{{ $item->jobs->id }}" @selected(isset($document) && $document->heads->apply->id == $item->jobs->id)>
                                                             {{ strtoupper($item->jobs->type) }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('comp')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label>CV</label>
                                            <input class="form-control" name="cv" type="file" accept=".pdf">
                                            @error('cv')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label>Dokumen</label>
                                            <input class="form-control" name="doc" type="file" accept=".pdf">
                                            @error('doc')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label>Pas Photo</label>
                                            <input class="form-control" name="photo" type="file" accept=".jpg, .jpeg, .png">
                                            @error('photo')
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
