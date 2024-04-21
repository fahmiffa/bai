@extends('layout.base')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" />
@endpush
@section('main')
    <div class="row">
        <div class="col-lg-12">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title fw-semibold text-capitalize">{{ $data }}</h5>
                        <button class="btn btn-primary rounded-pill btn-sm"
                            onclick="location.href='{{ route('reg.job') }}' ">Tambah</button>
                    </div>
                    <table class="table table-bordered nowrap tabel" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Alamat
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($da as $row)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $row->fullname }}
                                    </td>
                                    <td>
                                        {{ $row->alamat }}
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');"
                                            action="{{ route('document.destroy', $row->id) }}" method="POST">
                                            <a href="{{ route('interview.edit', ['id' => md5($row->id)]) }}"
                                                class="btn btn-sm btn-primary"><i class="ti ti-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#to{{ $row->id }}">
                                                <i class="ti ti-eye"></i>
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                    class="ti ti-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            @foreach ($da as $da)
                <div class="modal fade" id="to{{ $da->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">{{ $da->fullname }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="row mb-3">
                                    <div class="col-3 fw-bolder">Email</div>
                                    <div class="col-3">
                                        {{ $da->email }}
                                    </div>
                                    <div class="col-3 fw-bolder">Nomor HP</div>
                                    <div class="col-3">
                                        {{ $da->hp }}
                                    </div>
                                    <div class="col-3 fw-bolder">NIK</div>
                                    <div class="col-3">
                                        {{ $da->nik }}
                                    </div>
                                    <div class="col-3 fw-bolder">Alamat</div>
                                    <div class="col-3">
                                        {{ $da->alamat }}
                                    </div>
                                    <div class="col-3 fw-bolder">Provinsi</div>
                                    <div class="col-3">
                                        {{ $da->prov }}
                                    </div>
                                    <div class="col-3 fw-bolder">Kecamatan</div>
                                    <div class="col-3">
                                        {{ $da->kec }}
                                    </div>
                                    <div class="col-3 fw-bolder">Jenis Kelamin</div>
                                    <div class="col-3">
                                        {{ $da->gender == 1 ? 'Perempuan' : 'Laki-laki' }}
                                    </div>
                                    <div class="col-3 fw-bolder">Tempat lahir</div>
                                    <div class="col-3">
                                        {{ $da->place_birth }}
                                    </div>
                                    <div class="col-3 fw-bolder">Tanggal lahir</div>
                                    <div class="col-3">
                                        {{ $da->date_birth }}
                                    </div>
                                    <div class="col-3 fw-bolder">Agama</div>
                                    <div class="col-3">
                                        @php
                                            $rel = [null, 'Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu'];
                                        @endphp
                                        {{ $rel[$da->religion] }}
                                    </div>
                                    <div class="col-3 fw-bolder">Status</div>
                                    <div class="col-3">
                                        {{ $da->married == 0 ? 'Belum Kawin' : 'Kawin' }}
                                    </div>                       
                                    <div class="col-3 fw-bolder">Tinggi Badan</div>
                                    <div class="col-3">
                                        {{ $da->tall }}
                                    </div>
                                    <div class="col-3 fw-bolder">Berat Badan</div>
                                    <div class="col-3"> {{ $da->weight }}</div>                            
                                    <div class="col-3 fw-bolder text-wrap">Kekuatan Cengkraman</div>
                                    <div class="col-3">
                                        {{ $da->power }} Kg
                                    </div>
                                    <div class="col-3 fw-bolder">Merokok</div>
                                    <div class="col-3">
                                        {{ $da->smoker == 1 ? 'YA' : 'Tidak' }}
                                    </div>
                                    <div class="col-3 fw-bolder">Meminum Alkohol</div>
                                    <div class="col-3">
                                        {{ $da->alkohol == 1 ? 'YA' : 'Tidak' }}
                                    </div>
                                    <div class="col-3 fw-bolder">Golongan Darah</div>
                                    <div class="col-3">
                                        {{ $da->blood }}
                                    </div>
                                    <div class="col-3 fw-bolder">Tangan Dominan</div>
                                    <div class="col-3">
                                        {{ $da->hand == 1 ? 'KANAN' : 'KIRI' }}
                                    </div>
                                    <div class="col-3 fw-bolder">Pembelajaran LPK</div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            {{ $da->learning }} Bulan
                                        </div>
                                    </div>
                                    <div class="col-3 fw-bolder">Daya Penglihatan</div>
                                    <div class="col-3">
                                        {{ $da->alkohol == 1 ? 'Kanan' : 'Kiri' }}
                                    </div>
                                    <div class="col-3 fw-bolder">Pernah Ke jepang</div>
                                    <div class="col-3">
                                        {{ $da->japan == 1 ? 'Ya' : 'Tidak' }}
                                    </div>
                                    <div class="col-3 fw-bolder">Pernah Kecelakaan</div>
                                    <div class="col-3">
                                        {{ $da->accident == 1 ? 'Ya' : 'Tidak' }}
                                    </div>
                                    <div class="col-3 fw-bolder">Pernah Sakit Keras</div>
                                    <div class="col-3">
                                        {{ $da->sick == 1 ? 'Ya' : 'Tidak' }}
                                    </div>
                                    <div class="col-3 fw-bolder">Kehalian Khusus</div>
                                    <div class="col-3">
                                        {{ $da->skill }}
                                    </div>
                                    <div class="col-3 fw-bolder">Hobbi</div>
                                    <div class="col-3">
                                        {{ $da->hobbies }}
                                    </div>
                                </div>                                                    
                                <h6 class="my-3 fw-bolder">Keluarga</h6>
                                @php
                                    $item = json_decode($da->family);
                                @endphp

                                @isset($item->ibu)
                                    @php  $ibu = $item->ibu; @endphp
                                    <div class="form-group row mb-3">
                                        <label class="text-Captitalize col-3">Ibu</label>
                                        @for ($i = 0; $i < count($ibu); $i++)
                                            <div class="col-3">
                                                {{ $ibu[$i] }}
                                            </div>
                                        @endfor
                                    </div>
                                @endisset

                                @isset($item->kaka)
                                    @php  $kaka = $item->kaka; @endphp
                                    <div class="form-group row mb-3">
                                        <label class="text-Captitalize col-3">kaka</label>
                                        @for ($i = 0; $i < count($kaka); $i++)
                                            <div class="col-3">
                                                {{ $kaka[$i] }}
                                            </div>
                                        @endfor
                                    </div>
                                @endisset

                                @isset($item->adik)
                                    @php  $adik = $item->adik; @endphp
                                    <div class="form-group row mb-3">
                                        <label class="text-Captitalize col-3">adik</label>
                                        @for ($i = 0; $i < count($adik); $i++)
                                            <div class="col-3">
                                                {{ $adik[$i] }}
                                            </div>
                                        @endfor
                                    </div>
                                @endisset

                                @isset($item->ayah)
                                    @php  $ayah = $item->ayah; @endphp
                                    <div class="form-group row mb-3">
                                        <label class="text-Captitalize col-3">ayah</label>
                                        @for ($i = 0; $i < count($ayah); $i++)
                                            <div class="col-3">
                                                {{ $ayah[$i] }}
                                            </div>
                                        @endfor
                                    </div>
                                @endisset

                                @isset($item->wali)
                                    @php  $wali = $item->wali; @endphp
                                    <div class="form-group row mb-3">
                                        <label class="text-Captitalize col-3">wali</label>
                                        @for ($i = 0; $i < count($wali); $i++)
                                            <div class="col-3">
                                                {{ $wali[$i] }}
                                            </div>
                                        @endfor
                                    </div>
                                @endisset
                                <div class="form-group row mb-3">
                                    <label class="my-3 fw-bolder">Promosi diri, harapan, pertanyaan, dll</label>
                                    <div class="col-12">
                                        {{ $da->me }}
                                    </div>
                                </div>
                                <label class="my-3 fw-bolder">Pendiikan</label>
                                @php   $var = json_decode($da->study); @endphp
                                @for ($x = 0; $x < count($var); $x++)
                                    <div class="form-group row mb-3">
                                        <div class="col-3">
                                            {{ $var[$x][0] }}
                                        </div>
                                        <div class="col-3">
                                            {{ $var[$x][1] }}
                                        </div>
                                        <div class="col-3">
                                            {{ $var[$x][2] }}
                                        </div>
                                    </div>
                                @endfor

                                <label class="my-3 fw-bolder">Riwayat Pekerjaan</label>
                                @php
                                    $var = json_decode($da->job);
                                @endphp
                                @for ($x = 0; $x < count($var); $x++)
                                    <div class="form-group row mb-3">
                                        <div class="col-3">
                                            {{ $var[$x][0] }}
                                        </div>
                                        <div class="col-3">
                                            {{ $var[$x][1] }}
                                        </div>
                                        <div class="col-3">
                                            {{ $var[$x][2] }}
                                        </div>
                                        <div class="col-3">
                                            {{ $var[$x][3] }}
                                        </div>
                                    </div>
                                @endfor

                                <div class="form-group row mb-3">
                                    <label class="my-3 fw-bolder">Deskripsi Pekerjaan</label>
                                    <div class="col-12">
                                        {{ $da->job_des }}
                                    </div>
                                </div>

                                <label class="my-3 fw-bolder">Riwayat Magang</label>
                                @php  $var = json_decode($da->magang); @endphp
                                @for ($x = 0; $x < count($var); $x++)
                                    <div class="form-group row mb-3">
                                        <div class="col-3">
                                            {{ $var[$x][0] }}
                                        </div>
                                        <div class="col-3">
                                            {{ $var[$x][1] }}
                                        </div>
                                        <div class="col-3">
                                            {{ $var[$x][2] }}
                                        </div>
                                        <div class="col-3">
                                            {{ $var[$x][3] }}
                                        </div>
                                    </div>
                                @endfor

                                <div class="form-group row mb-3">
                                    <label class="my-3 fw-bolder">Hal yang Dipelajari saat magang</label>
                                    <div class="col-12">
                                        {{ $da->magang_des }}
                                    </div>
                                </div>

                                <label class="my-3 fw-bolder">Riwayat Lisensi</label>
                                @php $var = json_decode($da->lisensi);  @endphp
                                @for ($x = 0; $x < count($var); $x++)
                                    <div class="form-group row mb-3">
                                        <div class="col-3">
                                            {{ $var[$x][0] }}
                                        </div>
                                        <div class="col-3">
                                            {{ $var[$x][1] }}
                                        </div>
                                        <div class="col-3">
                                            {{ $var[$x][2] }}
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>

                </div>
        </div>
    </div>
    </div>
    @endforeach


    </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>

    <script>
        new DataTable('.tabel', {
            responsive: true
        });
    </script>
@endpush
