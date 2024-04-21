@extends('layout.base')
@section('main')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('interview.store', ['id' => 'start']) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="px-5">
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Nama Lengkap</label>
                                <div class="col-md-6">
                                    <input type="text" name="fullname" value="{{ old('fullname') }}"
                                        class="form-control">
                                    @error('fullname')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">NIK</label>
                                <div class="col-md-6">
                                    <input type="number" name="nik" value="{{ old('nik') }}" class="form-control">
                                    @error('nik')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Alamat</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="3" name="alamat">{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Provinsi</label>
                                <div class="col-md-6">
                                    <input type="text" name="prov" value="{{ old('prov') }}" class="form-control">
                                    @error('prov')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Kecamatan</label>
                                <div class="col-md-6">
                                    <input type="text" name="kec" value="{{ old('kec') }}" class="form-control">
                                    @error('kec')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-6">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                    @error('email')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Nomor HP</label>
                                <div class="col-md-6">
                                    <input type="number" name="hp" value="{{ old('hp') }}" class="form-control">
                                    @error('hp')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Jenis Kelamin</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="gender">
                                        <option value="1">Perempuan</option>
                                        <option value="2">Laki-laki</option>
                                    </select>
                                    @error('gender')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Tempat lahir</label>
                                <div class="col-md-6">
                                    <input type="text" name="place_birth" value="{{ old('place_birth') }}"
                                        class="form-control">
                                    @error('place_birth')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Tanggal lahir</label>
                                <div class="col-md-6">
                                    <input type="date" name="date_birth" value="{{ old('date_birth') }}"
                                        class="form-control">
                                    @error('date_birth')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="divider divider-center">
                                <div class="divider-text">Informasi</div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Agama</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="religion">
                                        <option value="1">Islam</option>
                                        <option value="2">Kristen</option>
                                        <option value="3">Hindu</option>
                                        <option value="4">Buddha</option>
                                        <option value="5">Konghucu</option>
                                    </select>
                                    @error('gender')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Status</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="married">
                                        <option value="1">Menikah</option>
                                        <option value="0">Belum Menikah</option>
                                    </select>
                                    @error('married')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Tinggi Badan</label>
                                <div class="col-md-6">
                                    <input type="number" name="tall" value="{{ old('tall') }}"
                                        class="form-control">
                                    @error('tall')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="input-group">
                                    <label class="col-md-3">Berat Badan</label>
                                    <div class="col-md-6">
                                        <input type="number" name="weight" value="{{ old('weight') }}"
                                            class="form-control">
                                        @error('weight')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <span class="input-group-text">Kg</span>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="input-group">
                                    <label class="col-md-3">Kekuatan Cengkraman</label>
                                    <div class="col-md-6">
                                        <input type="number" name="power" value="{{ old('power') }}"
                                            class="form-control">
                                        @error('power')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <span class="input-group-text">Kg</span>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Merokok</label>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="smoker" type="checkbox" checked>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Meminum Alkohol</label>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="alkohol" type="checkbox" checked>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Golongan Darah</label>
                                <div class="col-md-6">
                                    <input type="text" name="blood" value="{{ old('blood') }}"
                                        class="form-control">
                                    @error('blood')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Tangan Dominan</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="hand">
                                        <option value="1">Kanan</option>
                                        <option value="2">Kiri</option>
                                    </select>
                                    @error('hand')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="input-group">
                                    <label class="col-md-3">Lama Belajar</label>
                                    <div class="col-md-6">
                                        <input type="number" name="learning" value="{{ old('learning') }}"
                                            class="form-control">
                                        @error('learning')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <span class="input-group-text">Bulan</span>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Daya Penglihatan</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="look">
                                        <option value="1">Kanan</option>
                                        <option value="2">Kiri</option>
                                    </select>
                                    @error('look')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Pernah Ke jepang</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="japan">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                    @error('japan')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Pernah Kecelakaan</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="accident">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                    @error('accident')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Pernah Sakit Keras</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="sick">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                    @error('sick')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Kehalian Khusus</label>
                                <div class="col-md-6">
                                    <input type="text" name="skill" value="{{ old('skill') }}"
                                        class="form-control">
                                    @error('skill')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Hobbi</label>
                                <div class="col-md-6">
                                    <input type="text" name="hobbies" value="{{ old('hobbies') }}"
                                        class="form-control">
                                    @error('hobbies')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="my-3 d-flex justify-content-end">
                                <button class="btn btn-primary btn-block rounded-pill">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
