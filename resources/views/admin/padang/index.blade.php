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
                        <h5 class="card-title fw-semibold text-capitalize">Bill</h5>
                        <button class="btn btn-primary rounded-pill btn-sm"
                            onclick="location.href='{{ route('padang.bill') }}' ">Tambah</button>
                    </div>
                    <table class="table table-bordered nowrap tabel" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Nominal
                                </th>
                                {{-- <th>
                                    Action
                                </th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($da as $row)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <h6 class="text-capitalize">{{ $row->peserta->name }}</h6>
                                    </td>
                                    <td>
                                        {{ number_format($row->nominal, 0, ',', '.') }}
                                    </td>
                                    {{-- <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');"
                                            action="{{ route('bill.destroy', $row->id) }}" method="POST">
                                            <a href="{{ route('bill.edit', $row->id) }}" class="btn btn-sm btn-primary"><i
                                                    class="ti ti-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                    class="ti ti-trash"></i></button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title fw-semibold text-capitalize">Invoice</h5>
                    </div>
                    <table class="table table-bordered nowrap tabel" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    Nomor
                                </th>
                                <th>
                                    Siswa
                                </th>
                                <th>
                                    File
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inv as $row)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $row->number }}
                                    </td>
                                    <td>
                                        @foreach ($row->inv as $item)
                                            - {{ $item->field->name }}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('mitra.bill', ['id' => md5($row->id)]) }}"
                                            class="btn btn-sm btn-dark">
                                            <i class="ti ti-cash"></i></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
                <h5 class="card-title fw-semibold text-capitalize mb-3">Data Siswa</h5>
                <table class="table table-bordered nowrap tabel" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                No.
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Job
                            </th>
                            <th>
                                Company
                            </th>
                            <th>
                                Agency
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($head as $row)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ strtoupper($row->name) }}
                                </td>
                                <td>
                                    {{ strtoupper($row->head->apply->type) }}
                                </td>
                                <td>
                                    {{ strtoupper($row->head->comp->name) }}
                                </td>
                                <td>
                                    {{ strtoupper($row->head->agency->name) }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
                <h5 class="card-title fw-semibold text-capitalize mb-3">Data Job</h5>
                <table class="table table-bordered nowrap tabel" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                No.
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Company
                            </th>
                            <th>
                                Agency
                            </th>
                            <th>
                                File
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($job as $row)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ strtoupper($row->jobs->type) }}
                                </td>
                                <td>
                                    {{ strtoupper($row->jobs->comp->name) }}
                                </td>
                                <td>
                                    {{ strtoupper($row->jobs->comp->agen->name) }}
                                </td>
                                <td>
                                    <a target="_blank" href="{{ route('padang.job', ['id' => md5($row->jobs->id)]) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="ti ti-clipboard-text"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
                <h5 class="card-title fw-semibold text-capitalize mb-3">Data LPK</h5>
                <form action="{{ route('padang.store', ['user' => md5($id)]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-3">
                        <div class="col-md-6">
                            <label>Nama</label>
                            <input type="text" name="name" value="{{ isset($mitra) ? $mitra->name : old('name') }}"
                                class="form-control">
                            @error('name')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" rows="2">{{ isset($mitra) ? $mitra->alamat : old('alamat') }}</textarea>
                            @error('alamat')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="col-md-6">
                            <label>Leader's Name</label>
                            <input type="text" name="leader"
                                value="{{ isset($mitra) ? $mitra->leader : old('leader') }}" class="form-control">
                            @error('leader')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label>Leader's Phone</label>
                            <input type="number" name="leaderNumber"
                                value="{{ isset($mitra) ? $mitra->leaderNumber : old('leaderNumber') }}"
                                class="form-control">
                            @error('leaderNumber')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="col-md-6">
                            <label>PIC Name</label>
                            <input type="text" name="pic" value="{{ isset($mitra) ? $mitra->pic : old('pic') }}"
                                class="form-control">
                            @error('pic')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label>PIC Phone</label>
                            <input type="number" name="picNumber"
                                value="{{ isset($mitra) ? $mitra->picNumber : old('picNumber') }}" class="form-control">
                            @error('picNumber')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ isset($mitra) ? $mitra->email : old('email') }}"
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
                                value="{{ isset($mitra) ? $mitra->permit : old('permit') }}" class="form-control">
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
                                value="{{ isset($mitra) ? $mitra->npwp : old('npwp') }}" class="form-control">
                            @error('npwp')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-3">
                            <label>Nama Bank</label>
                            <input type="text" name="bankName"
                                value="{{ isset($mitra) ? $mitra->bankName : old('bankName') }}" class="form-control">
                            @error('bankName')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-3">
                            <label>Nama Cabang</label>
                            <input type="text" name="bankBranch"
                                value="{{ isset($mitra) ? $mitra->bankBranch : old('bankBranch') }}"
                                class="form-control">
                            @error('bankBranch')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mt-3">
                            <label>Alamat Bank</label>
                            <input type="text" name="bankAddress"
                                value="{{ isset($mitra) ? $mitra->bankAddress : old('bankAddress') }}"
                                class="form-control">
                            @error('bankAddress')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-3">
                            <label>Nomor Rekening</label>
                            <input type="text" name="bankNumber"
                                value="{{ isset($mitra) ? $mitra->bankNumber : old('bankNumber') }}"
                                class="form-control">
                            @error('bankNumber')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-3">
                            <label>Account Bank Atas Nama</label>
                            <input type="text" name="bankHolder"
                                value="{{ isset($mitra) ? $mitra->bankHolder : old('bankHolder') }}"
                                class="form-control">
                            @error('bankHolder')
                                <div class='small text-danger text-left'>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mt-3">
                            <label>SWIFT</label>
                            <input type="text" name="swiftCode"
                                value="{{ isset($mitra) ? $mitra->swiftCode : old('swiftCode') }}" class="form-control">
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
