@extends('layout.base')
@section('main')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                    </div>

                    <form action="{{ route('interview.update', ['id' => md5($da->id)]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="px-3">                   
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Nama Lengkap</label>
                                <div class="col-md-6">
                                    <input type="text" name="fullname" value="{{ $da->fullname }}"
                                        class="form-control">
                                    @error('fullname')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-6">
                                    <input type="email" name="email" value="{{ $da->email }}"
                                        class="form-control">
                                    @error('email')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Nomor HP</label>
                                <div class="col-md-6">
                                    <input type="number" name="hp" value="{{ $da->hp }}"
                                        class="form-control">
                                    @error('hp')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">NIK</label>
                                <div class="col-md-6">
                                    <input type="number" name="nik" value="{{ $da->nik }}"
                                        class="form-control">
                                    @error('nik')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Alamat</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="3" name="alamat">{{ $da->alamat }}</textarea>
                                    @error('alamat')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Provinsi</label>
                                <div class="col-md-6">
                                    <input type="text" name="prov" value="{{ $da->prov }}"
                                        class="form-control">
                                    @error('prov')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Kecamatan</label>
                                <div class="col-md-6">
                                    <input type="text" name="kec" value="{{ $da->kec }}"
                                        class="form-control">
                                    @error('kec')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Jenis Kelamin</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="gender">
                                        <option value="1" @selected($da->gender == '1')>Perempuan</option>
                                        <option value="2" @selected($da->gender == '2')>Laki-laki</option>
                                    </select>
                                    @error('gender')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Tempat lahir</label>
                                <div class="col-md-6">
                                    <input type="text" name="place_birth" value="{{ $da->place_birth }}"
                                        class="form-control">
                                    @error('place_birth')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Tanggal lahir</label>
                                <div class="col-md-6">
                                    <input type="date" name="date_birth" value="{{ $da->date_birth }}"
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
                                        <option value="1" @selected($da->religion == '1')>Islam</option>
                                        <option value="2" @selected($da->religion == '2')>Kristen</option>
                                        <option value="3" @selected($da->religion == '3')>Hindu</option>
                                        <option value="4" @selected($da->religion == '4')>Buddha</option>
                                        <option value="5" @selected($da->religion == '5')>Konghucu</option>
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
                                        <option value="1" @selected($da->married == '1')>Menikah</option>
                                        <option value="0" @selected($da->married == '0')>Belum Menikah</option>
                                    </select>
                                    @error('married')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-md-3">Tinggi Badan</label>
                                <div class="col-md-6">
                                    <input type="number" name="tall" value="{{ $da->tall }}"
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
                                        <input type="number" name="weight" value="{{ $da->weight }}"
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
                                    <label class="col-md-3 text-wrap">Kekuatan Cengkraman</label>
                                    <div class="col-md-6">
                                        <input type="number" name="power" value="{{ $da->power }}"
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
                                        <input class="form-check-input" name="smoker" type="checkbox"
                                            {{ $da->smoker == 1 ? 'checked' : null }}>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Meminum Alkohol</label>
                                <div class="col-md-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="alkohol" type="checkbox"
                                            {{ $da->alkohol == 1 ? 'checked' : null }}>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Golongan Darah</label>
                                <div class="col-md-6">
                                    <input type="text" name="blood" value="{{ $da->blood }}"
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
                                        <option value="1" @selected($da->hand == '1')>Kanan</option>
                                        <option value="2" @selected($da->hand == '2')>Kiri</option>
                                    </select>
                                    @error('hand')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Pembelajaran LPK</label>
                                <div class="col-md-6">                
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" name="learning" value="{{ $da->learning }}"
                                                class="form-control">
                                            <span class="input-group-text">Bulan</span>
                                        </div>
                                        @error('learning')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Daya Penglihatan</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="look">
                                        <option value="1" @selected($da->look == '1')>Kanan</option>
                                        <option value="2" @selected($da->look == '2')>Kiri</option>
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
                                        <option value="1" @selected($da->japan == '1')>Ya</option>
                                        <option value="2" @selected($da->japan == '2')>Tidak</option>
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
                                        <option value="1" @selected($da->accident == '1')>Ya</option>
                                        <option value="2" @selected($da->accident == '2')>Tidak</option>
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
                                        <option value="1" @selected($da->sick == '1')>Ya</option>
                                        <option value="2" @selected($da->sick == '2')>Tidak</option>
                                    </select>
                                    @error('sick')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Kehalian Khusus</label>
                                <div class="col-md-6">
                                    <input type="text" name="skill" value="{{ $da->skill }}"
                                        class="form-control">
                                    @error('skill')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-3">Hobbi</label>
                                <div class="col-md-6">
                                    <input type="text" name="hobbies" value="{{ $da->hobbies }}"
                                        class="form-control">
                                    @error('hobbies')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- family --}}
                            <div class="divider divider-center my-3">
                                <div class="divider-text">Keluarga</div>
                            </div>
                            <div id="input-item">
                                @php
                                    $item = json_decode($da->family);
                                @endphp

                                @isset($item->ibu)
                                    @php  $ibu = $item->ibu; @endphp
                                    <div class="form-group row mb-3">
                                        <label class="text-Captitalize">Ibu</label>
                                        <input type="hidden" name="status[]" class="form-control" value="ibu">
                                        @for ($i = 0; $i < count($ibu); $i++)
                                            <div class="col-md-3">
                                                <input type="text" name="ibu[]" class="form-control"
                                                    value="{{ $ibu[$i] }}" required>
                                            </div>
                                        @endfor
                                    </div>
                                @endisset

                                @isset($item->kaka)
                                    @php  $kaka = $item->kaka; @endphp
                                    <div class="form-group row mb-3">
                                        <label class="text-Captitalize">kaka</label>
                                        <input type="hidden" name="status[]" class="form-control" value="kaka">
                                        @for ($i = 0; $i < count($kaka); $i++)
                                            <div class="col-md-3">
                                                <input type="text" name="kaka[]" class="form-control"
                                                    value="{{ $kaka[$i] }}" required>
                                            </div>
                                        @endfor
                                    </div>
                                @endisset

                                @isset($item->adik)
                                    @php  $adik = $item->adik; @endphp
                                    <div class="form-group row mb-3">
                                        <label class="text-Captitalize">adik</label>
                                        <input type="hidden" name="status[]" class="form-control" value="adik">
                                        @for ($i = 0; $i < count($adik); $i++)
                                            <div class="col-md-3">
                                                <input type="text" name="'+adik+'[]" class="form-control"
                                                    value="{{ $adik[$i] }}" required>
                                            </div>
                                        @endfor
                                    </div>
                                @endisset

                                @isset($item->ayah)
                                    @php  $ayah = $item->ayah; @endphp
                                    <div class="form-group row mb-3">
                                        <label class="text-Captitalize">ayah</label>
                                        <input type="hidden" name="status[]" class="form-control" value="ayah">
                                        @for ($i = 0; $i < count($ayah); $i++)
                                            <div class="col-md-3">
                                                <input type="text" name="ayah[]" class="form-control"
                                                    value="{{ $ayah[$i] }}" required>
                                            </div>
                                        @endfor
                                    </div>
                                @endisset

                                @isset($item->wali)
                                    @php  $wali = $item->wali; @endphp
                                    <div class="form-group row mb-3">
                                        <label class="text-Captitalize">wali</label>
                                        <input type="hidden" name="status[]" class="form-control" value="wali">
                                        @for ($i = 0; $i < count($wali); $i++)
                                            <div class="col-md-3">
                                                <input type="text" name="wali[]" class="form-control"
                                                    value="{{ $wali[$i] }}" required>
                                            </div>
                                        @endfor
                                    </div>
                                @endisset
                            </div>
                            <div class="form-group row mb-3">
                                <label class="my-3">Promosi diri, harapan, pertanyaan, dll</label>
                                <textarea class="form-control" rows="2" name="me">{{ $da->me }}</textarea>
                                @error('me')
                                    <div class='small text-danger text-left'>{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="divider divider-center my-3">
                                <div class="divider-text">Pendidikan</div>
                            </div>
                            <label class="my-3">Riwayat Pendiikan</label>
                            @php   $var = json_decode($da->study); @endphp
                            @for ($x = 0; $x < count($var); $x++)
                            <div class="form-group row mb-3" id="master">
                                <div class="col-3">
                                    <input type="text" name="studied[]" value="{{ $var[$x][0] }}"
                                        class="form-control" placeholder="Nama Pendidikan" required>
                                </div>
                                <div class="col-3">
                                    <input type="month" name="first[]" class="form-control"
                                        value="{{ $var[$x][1] }}" required>
                                </div>
                                <div class="col-3">
                                    <input type="month" name="end[]" class="form-control"
                                        value="{{ $var[$x][2] }}" required>
                                </div>
                            </div>
                            @endfor
                 
                            <label class="my-3">Riwayat Pekerjaan</label>
                            @php
                            $var = json_decode($da->job);                           
                            @endphp
                            @for ($x = 0; $x < count($var); $x++)
                                <div class="form-group row mb-3" id="master">
                                    <div class="col-4">
                                        <input type="text" name="job[]" class="form-control"
                                            value="{{ $var[$x][0] }}" placeholder="Nama Perusahaan" required>
                                    </div>
                                    <div class="col-4">
                                        <input type="month" name="firstJob[]" class="form-control"
                                        value="{{ $var[$x][1] }}" required>                             
                                    </div>
                                    <div class="col-4">
                                        <input type="month" name="endJob[]" class="form-control"
                                            value="{{ $var[$x][2] }}" required>                                  
                                    </div>
                                    <div class="col-4 mt-3">
                                        <input type="text" name="var[]" value="{{ $var[$x][3] }}"
                                        class="form-control" placeholder="Pakerjaan" required>
                                    </div>
                                </div>
                            @endfor

                            <div class="form-group row mb-3">
                                <label class="my-3">Deskripsi Pekerjaan</label>
                                <textarea class="form-control" rows="2" name="job_des">{{ $da->job_des }}</textarea>
                                @error('job_des')
                                    <div class='small text-danger text-left'>{{ $message }}</div>
                                @enderror
                            </div>
                
                            <label class="my-3">Riwayat Magang</label>
                            @php  $var = json_decode($da->magang); @endphp
                            @for ($x = 0; $x < count($var); $x++)
                            <div class="form-group row mb-3">
                                <div class="col-4">
                                    <input type="text" name="magang[]" value="{{ $var[$x][0] }}"
                                        class="form-control" placeholder="Magang" required>
                                </div>
                                <div class="col-3">
                                    <input type="month" name="firstMagang[]" class="form-control"
                                        value="{{ $var[$x][1] }}" required>
                                </div>
                                <div class="col-3 mb-3">
                                    <input type="month" name="endMagang[]" class="form-control mb-3"
                                        value="{{ $var[$x][2] }}" required>
                                </div>
                                <div class="col-4">
                                    <input type="text" name="ind[]" value="{{ $var[$x][3] }}"
                                        class="form-control" placeholder="Industri" required>
                                </div>
                            </div>
                            @endfor

                            <div class="form-group row mb-3">
                                <label class="my-3">Hal yang Dipelajari saat magang</label>
                                <textarea class="form-control" rows="2" name="magang_des">{{ $da->magang_des }}</textarea>
                                @error('magang_des')
                                    <div class='small text-danger text-left'>{{ $message }}</div>
                                @enderror
                            </div>
             
                            <label class="my-3">Riwayat Lisensi</label>
                            @php $var = json_decode($da->lisensi);  @endphp
                            @for ($x = 0; $x < count($var); $x++)
                                <div class="form-group row mb-3" id="master">
                                    <div class="col-4">
                                        <input type="text" name="lisensi[]" value="{{ $var[$x][0] }}"
                                            class="form-control" placeholder="Lisensi" required>
                                    </div>
                                    <div class="col-3">
                                        <select class="form-control" name="waktu[]" required>
                                            <option value="">Waktu</option>
                                            @php $val = date('Y'); @endphp
                                            @for ($i = 1; $i < 5; $i++)
                                                <option value="{{ $val - $i }}" @selected($var[$x][1] == $val - $i)>
                                                    {{ $val - $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" name="level[]" value="{{ $var[$x][2] }}"
                                            class="form-control" placeholder="Level" required>
                                    </div>
                                </div>
                            @endfor

                            <div class="mb-3 d-flex justify-content-start">
                                <button class="btn btn-primary btn-block w-25 rounded-pill">Save</button>
                            </div>
                        </div>                 
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function remove(e) {
            e.closest('.form-group').remove();
        }

        function capitalizeFirstLetter(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        }


        $('#add-item').on('click', function() {
            var status = $('#family').val();
            const st = ["wali", "ayah", "ibu"];

            if (status) {
                var clonedDiv = $('#input-item');
                if (st.includes(status)) {
                    clonedDiv.append('<div class="form-group row mb-3">\
                                                                        <label class="text-Captitalize">' +
                        capitalizeFirstLetter(
                            status) +
                        '</label>\
                                                                        <input type="hidden" name="status[]" class="form-control" value="' +
                        status + '">\
                                                                        <div class="col-md-3">\
                                                                          <input type="text" name="' + status + '[]" class="form-control" placeholder="Nama" required>\
                                                                        </div>\
                                                                        <div class="col-md-3">\
                                                                          <input type="number" name="' + status + '[]" class="form-control" placeholder="Umur" required>\
                                                                        </div> \
                                                                        <div class="col-md-3">\
                                                                          <input type="number" name="' + status + '[]" class="form-control" placeholder="Nomor HP" required>\
                                                                        </div>\
                                                                        <button class="btn btn-danger my-auto" style="width:fit-content;height:fit-content" onclick="remove(this)" type="button"><i class="ti ti-trash"></i></button>\
                                                                    </div>\
                                                                  ');
                } else {
                    clonedDiv.append('<div class="form-group row mb-3">\
                                                                       <label class="text-Captitalize">' +
                        capitalizeFirstLetter(
                            status) +
                        '</label>\
                                                                        <input type="hidden" name="status[]" class="form-control" value="' +
                        status + '">\
                                                                        <div class="col-md-3">\
                                                                          <input type="text" name="' + status + '[]" class="form-control" placeholder="Nama" required>\
                                                                        </div>\
                                                                        <div class="col-md-3">\
                                                                          <input type="number" name="' + status + '[]" class="form-control" placeholder="Umur" required>\
                                                                        </div> \
                                                                        <button class="btn btn-danger my-auto" style="width:fit-content;height:fit-content" onclick="remove(this)" type="button"><i class="ti ti-trash"></i></button>\
                                                                    </div>\
                                                                  ');
                }
            } else {
                alert('Silahkan pilih status');
            }

        });

        function remove(e) {
            e.parentNode.remove();
        }

        $('#add-study').on('click', function() {
            var originalDiv = $('#master');
            var clonedDiv = originalDiv.clone();
            clonedDiv.append(
                '<button class="btn btn-danger my-auto" style="width:fit-content;height:fit-content" onclick="remove(this)"  type="button"><i class="ti ti-trash"></i></button>'
            );
            $('#input-study').append(clonedDiv);
        });

        $('#add-magang').on('click', function() {
            var originalDiv = $('#master-magang');
            var clonedDiv = originalDiv.clone();
            clonedDiv.append(
                '<button class="btn btn-danger ms-3 mt-3" style="width:fit-content;height:fit-content" onclick="remove(this)"  type="button"><i class="ti ti-trash"></i></button>'
            );
            $('#input-magang').append(clonedDiv);
        });

        $('#add-lins').on('click', function() {
            var originalDiv = $('#master-lins');
            var clonedDiv = originalDiv.clone();
            clonedDiv.append(
                '<button class="btn btn-danger my-auto" style="width:fit-content;height:fit-content" onclick="remove(this)"  type="button"><i class="ti ti-trash"></i></button>'
            );
            $('#input-lins').append(clonedDiv);
        });

        $('#add-job').on('click', function() {
            var originalDiv = $('#master-job');
            var clonedDiv = originalDiv.clone();
            clonedDiv.append(
                '<button class="btn btn-danger my-auto" style="width:fit-content;height:fit-content" onclick="remove(this)"  type="button"><i class="ti ti-trash"></i></button>'
            );
            $('#input-job').append(clonedDiv);
        });
    </script>
@endpush
