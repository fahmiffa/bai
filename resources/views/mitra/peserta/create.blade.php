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
                    @isset($document)
                        <form action="{{ route('document.update', ['document' => $document]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                        @else
                            <form action="{{ route('document.store') }}" method="post" enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>JOB</label>
                                        @isset($document)
                                            <p class="form-control-plaintext"> {{ strtoupper($document->heads->apply->type) }}</p>
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
                                            @error('job')
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
                                            <label>Kontrak Kerja</label>
                                            <input class="form-control" name="contract" type="file" accept=".pdf">
                                            @error('contract')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label>Pasport</label>
                                            <input class="form-control" name="pasport" type="file" accept=".pdf">
                                            @error('pasport')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label>Resident Card</label>
                                            <input class="form-control" name="residentCard" type="file" accept=".pdf">
                                            @error('residentCard')
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

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="name"
                                                value="{{ isset($document) ? $document->heads->peserta->name : old('name') }}"
                                                class="form-control">
                                            @error('name')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label>Jenis Pekerjaan</label>
                                            <input type="text" name="jenis"
                                                value="{{ isset($document) ? $document->heads->peserta->jenis : old('jenis') }}"
                                                class="form-control">
                                            @error('jenis')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label>Nomor Whatsapp</label>
                                            <input type="number" name="hp"
                                                value="{{ isset($document) ? $document->heads->peserta->hp : old('hp') }}"
                                                class="form-control">
                                            @error('hp')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label>Jenis Kelamin</label>
                                            <input type="text" name="gender"
                                                value="{{ isset($document) ? $document->heads->peserta->gender : old('gender') }}"
                                                class="form-control">
                                            @error('gender')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label>Status Tinggal</label>
                                            <input type="text" name="residance"
                                                value="{{ isset($document) ? $document->heads->peserta->residance : old('residance') }}"
                                                class="form-control">
                                            @error('residance')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label>Tanggal Interview</label>
                                            <input type="date" name="interview"
                                                value="{{ isset($document) ? $document->heads->peserta->interview : old('interview') }}"
                                                class="form-control">
                                            @error('interview')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label>Tanggal Kedatangan</label>
                                            <input type="date" name="arrival"
                                                value="{{ isset($document) ? $document->heads->peserta->arrival : old('arrival') }}"
                                                class="form-control">
                                            @error('arrival')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label>Tanggal Mulai Bekerja</label>
                                            <input type="date" name="workStart"
                                                value="{{ isset($document) ? $document->heads->peserta->workStart : old('workStart') }}"
                                                class="form-control">
                                            @error('workStart')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label>Tanggal Terakhir Bekerja</label>
                                            <input type="date" name="workEnd"
                                                value="{{ isset($document) ? $document->heads->peserta->workEnd : old('workEnd') }}"
                                                class="form-control">
                                            @error('workEnd')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-md-6">
                                            <label>Monitoring / Catatan Keluhan</label>
                                            <textarea class="form-control" name="monitoring" rows="2">{{ isset($document) ? $document->heads->peserta->complaint : old('monitoring') }}</textarea>
                                            @error('monitoring')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label>Minat Bidang Pekerjaan</label>
                                            @php
                                                $interest = [
                                                    'konstruksi',
                                                    'manufaktur',
                                                    'pertanian',
                                                    'peternakan',
                                                    'perikanan',
                                                    'caregiver',
                                                    'perhotelan',
                                                    'building_cleaning',
                                                    'restoran',
                                                ];
                                            @endphp
                                            <select class="form-control choices form-select" name="interest">
                                                <option value="">Pilih Minat</option>
                                                @for ($i = 0; $i < count($interest); $i++)
                                                    <option value="{{ $interest[$i] }}" @selected(isset($document) && $document->heads->peserta->section == $interest[$i])>
                                                        {{ ucfirst(str_replace('_', ' ', $interest[$i])) }}</option>
                                                @endfor
                                            </select>
                                            @error('interest')
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
