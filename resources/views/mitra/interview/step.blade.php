@extends('layout.base')
@section('main')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                    </div>

                    <form action="{{ route('interview.store', ['id' => md5($da->id)]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="px-5">

                            @if ($da->status == 5)
                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Status Keluarga</label>
                                        <div class="input-group">
                                            <select class="form-control" name="stat" id="family">
                                                <option value="">Status</option>
                                                <option value="wali">Wali</option>
                                                <option value="ayah">Ayah</option>
                                                <option value="ibu">Ibu</option>
                                                <option value="kaka">kaka</option>
                                                <option value="adik">Adik</option>
                                            </select>
                                            <button class="btn btn-success btn-sm" type="button"
                                                id="add-item">Tambah</button>
                                        </div>
                                    </div>
                                    @error('wali')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                                <div id="input-item">
                                    @if (old('family'))
                                        @php
                                            $item = json_decode(old('family'));
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
                                                <button class="btn btn-danger my-auto"
                                                    style="width:fit-content;height:fit-content" onclick="remove(this)"
                                                    type="button"><i class="bi bi-trash"></i></button>
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
                                                <button class="btn btn-danger my-auto"
                                                    style="width:fit-content;height:fit-content" onclick="remove(this)"
                                                    type="button"><i class="bi bi-trash"></i></button>
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
                                                <button class="btn btn-danger my-auto"
                                                    style="width:fit-content;height:fit-content" onclick="remove(this)"
                                                    type="button"><i class="bi bi-trash"></i></button>
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
                                                <button class="btn btn-danger my-auto"
                                                    style="width:fit-content;height:fit-content" onclick="remove(this)"
                                                    type="button"><i class="bi bi-trash"></i></button>
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
                                                <button class="btn btn-danger my-auto"
                                                    style="width:fit-content;height:fit-content" onclick="remove(this)"
                                                    type="button"><i class="bi bi-trash"></i></button>
                                            </div>
                                        @endisset
                                    @endif
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="my-3">Promosi diri, harapan, pertanyaan, dll</label>
                                    <textarea class="form-control" rows="2" name="me">{{ old('me') }}</textarea>
                                    @error('me')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif

                            @if ($da->status == 4)
                                <label class="my-3">Riwayat Pendiikan</label>
                                @if (old('study'))
                                    @php   $var = json_decode(old('study')); @endphp
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
                                @else
                                    <div class="form-group row mb-3" id="master">
                                        <div class="col-3">
                                            <input type="text" name="studied[]" class="form-control"
                                                placeholder="Nama Pendidikan" required>
                                        </div>
                                        <div class="col-3">
                                            <input type="month" name="first[]" class="form-control" required>
                                        </div>
                                        <div class="col-3">
                                            <input type="month" name="end[]" class="form-control" required>
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group row mb-3">
                                    <div class="col-md-12">
                                        <div id="input-study" class="mt-3">
                                        </div>
                                        <button class="btn btn-success btn-sm rounded-pill" type="button"
                                            id="add-study">Tambah</button>
                                    </div>
                                </div>
                            @endif

                            @if ($da->status == 3)
                                <label class="my-3">Riwayat Magang</label>
                                @if (old('magang'))
                                    @php
                                        $var = json_decode(old('magang'));
                                    @endphp
                                    @for ($x = 0; $x < count($var); $x++)
                                        <div class="form-group row mb-3" id="master">
                                            <div class="col-4">
                                                <input type="text" name="magang[]" value="{{ $var[$x][0] }}"
                                                    class="form-control" placeholder="Magang" required>
                                            </div>
                                            <div class="col-3">
                                                <input type="month" name="one[]" class="form-control"
                                                    value="{{ $var[$x][1] }}" required>
                                            </div>
                                            <div class="col-3 mb-3">
                                                <input type="month" name="two[]" class="form-control mb-3"
                                                    value="{{ $var[$x][2] }}" required>
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="ind[]" value="{{ $var[$x][3] }}"
                                                    class="form-control" placeholder="Industri" required>
                                            </div>
                                        </div>
                                    @endfor
                                @else
                                    <div class="form-group row mb-3" id="master-magang">
                                        <div class="col-4">
                                            <input type="text" name="magang[]" class="form-control"
                                                placeholder="Nama Perusahaan" required>
                                        </div>
                                        <div class="col-3">
                                            <input type="month" name="one[]" class="form-control" required>
                                        </div>
                                        <div class="col-3 mb-3">
                                            <input type="month" name="two[]" class="form-control" required>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" name="ind[]" class="form-control"
                                                placeholder="Industri" required>
                                        </div>
                                    </div>
                                @endif

                                <div class="form-group row mb-3">
                                    <div class="col-md-12">
                                        <div id="input-magang" class="mt-3">
                                        </div>
                                        <button class="btn btn-success btn-sm rounded-pill" type="button"
                                            id="add-magang">Tambah</button>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label class="my-3">Hal yang Dipelajari saat magang</label>
                                    <textarea class="form-control" rows="2" name="magang_des">{{ old('magang_des') }}</textarea>
                                    @error('magang_des')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif

                            @if ($da->status == 2)

                                <label class="my-3">Riwayat Pekerjaan</label>
                                @if (old('job'))
                                    @php   $var = json_decode(old('job')); @endphp
                                    @for ($x = 0; $x < count($var); $x++)
                                        <div class="form-group row mb-3" id="master-job">
                                            <div class="col-4">
                                                <input type="text" name="job[]" class="form-control"
                                                    value="{{ $var[$x][0] }}" placeholder="Nama" required>
                                            </div>
                                            <div class="col-3">
                                                <input type="month" name="first[]" class="form-control"
                                                    value="{{ $var[$x][1] }}" required>
                                            </div>
                                            <div class="col-3 mb-3">
                                                <input type="month" name="end[]" class="form-control mb-3"
                                                    value="{{ $var[$x][2] }}" required>
                                            </div>
                                            <div class="col-4">
                                                <input type="text" name="var[]" value="{{ $var[$x][3] }}"
                                                    class="form-control" placeholder="Pakerjaan" required>
                                            </div>
                                        </div>
                                    @endfor
                                @else
                                    <div class="form-group row mb-3" id="master-job">
                                        <div class="col-4">
                                            <input type="text" name="job[]" class="form-control" placeholder="Nama"
                                                required>
                                        </div>
                                        <div class="col-3">
                                            <input type="month" name="first[]" class="form-control" required>
                                        </div>
                                        <div class="col-3 mb-3">
                                            <input type="month" name="end[]" class="form-control" required>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" name="var[]" class="form-control"
                                                placeholder="Pakerjaan" required>
                                        </div>
                                    </div>
                                @endif

                                <div class="form-group row mb-3">
                                    <div class="col-md-12">
                                        <div id="input-job" class="mt-3">
                                        </div>
                                        <button class="btn btn-success btn-sm rounded-pill" type="button"
                                            id="add-job">Tambah</button>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label class="my-3">Deskripsi Pekerjaan</label>
                                    <textarea class="form-control" rows="2" name="job_des">{{ old('job_des') }}</textarea>
                                    @error('job_des')
                                        <div class='small text-danger text-left'>{{ $message }}</div>
                                    @enderror
                                </div>

                                <label class="my-3">Riwayat Lisensi</label>
                                @if (old('lisensi'))
                                    @php$var = json_decode(old('lisensi'));
                                                                                                                                                                                                                                                @endphp ?> ?> ?> ?> ?> ?>
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
                                                            {{ $val - $i }}
                                                        </option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-3">
                                                <input type="text" name="level[]" value="{{ $var[$x][2] }}"
                                                    class="form-control" placeholder="Level" required>
                                            </div>
                                        </div>
                                    @endfor
                                @else
                                    <div class="form-group row mb-3" id="master-lins">
                                        <div class="col-4">
                                            <input type="text" name="lisensi[]" class="form-control"
                                                placeholder="Lisensi" required>
                                        </div>
                                        <div class="col-3">
                                            <select class="form-control" name="waktu[]" required>
                                                <option value="">Waktu</option>
                                                @php $val = date('Y'); @endphp
                                                @for ($i = 1; $i < 5; $i++)
                                                    <option value="{{ $val - $i }}">{{ $val - $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <input type="text" name="level[]" class="form-control"
                                                placeholder="Level" required>
                                        </div>
                                    </div>
                                @endif

                                <div class="form-group row mb-3">
                                    <div class="col-md-12">
                                        <div id="input-lins" class="mt-3">
                                        </div>
                                        <button class="btn btn-success btn-sm rounded-pill" type="button"
                                            id="add-lins">Tambah</button>
                                    </div>
                                </div>
                            @endif
                            <div class="my-3 d-flex justify-content-end">
                                <button class="btn btn-primary btn-block rounded-pill">Next</button>
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
