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

                    @isset($user)
                        <form action="{{ route('user.update', ['user' => $user]) }}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                        @else
                            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="px-5">
                                    <div class="form-group row mb-3">
                                        <label class="col-md-3">Name</label>
                                        <div class="col-md-6">
                                            <input type="text" name="name"
                                                value="{{ isset($user) ? $user->name : old('name') }}" class="form-control">
                                            @error('name')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label class="col-md-3">Email</label>
                                        <div class="col-md-6">
                                            <input type="email" name="email"
                                                value="{{ isset($user) ? $user->email : old('email') }}" class="form-control">
                                            @error('email')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label class="col-md-3">Role</label>
                                        @php
                                            $role = ['peserta', 'mitra', 'agency', 'admin'];
                                        @endphp
                                        <div class="col-md-6">
                                            <select class="choices form-select" name="role" id="role">
                                                <option value="">Pilih Role</option>
                                                @foreach ($role as $item)
                                                    <option value="{{ $item }}" @selected(isset($user) && $user->role == $item)>
                                                        {{ ucfirst($item) }}</option>
                                                @endforeach
                                            </select>
                                            @error('role')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3 {{ isset($user) && $user->role == 'agency' ? null : 'd-none' }}"
                                        id="cat">
                                        <label class="col-md-3">Kategori</label>
                                        @php
                                            $role = ['kumai', 'tsk', 'kumai dan tsk'];
                                        @endphp
                                        <div class="col-md-6">
                                            <select class="choices form-select" name="cat">
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($role as $item)
                                                    <option value="{{ $item }}" @selected(isset($user) && $user->type == $item)>
                                                        {{ strtoupper($item) }}</option>
                                                @endforeach
                                            </select>
                                            @error('cat')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3 {{ isset($user) && $user->role == 'agency' ? null : 'd-none' }}""
                                        id="mitra">
                                        <label class="col-md-3">Mitra</label>
                                        <div class="col-md-6">
                                            @isset($user)
                                                @php 
                                                    $val = $user->so->pluck('mitra')->toArray();
                                                @endphp
                                            @endif
                                            <select class="choices form-select multiple-remove" name="mitra[]" multiple>
                                                <option value="">Pilih Mitra</option>
                                                @foreach ($mitra as $item)
                                                    <option value="{{ $item->user }}" @selected(isset($user) && in_array($item->user,$val))>
                                                        {{ strtoupper($item->name) }}</option>
                                                @endforeach
                                            </select>
                                            @error('mitra')
                                                <div class='small text-danger text-left'>{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label class="col-md-3">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" name="password"
                                                value="{{ isset($user) ? null : old('password') }}" class="form-control">
                                            @error('password')
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

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
        <script>
            $('#role').on('change', function() {
                var a = $(this).val();
                if (a === 'agency') {
                    $('#cat').removeClass('d-none');
                    $('#mitra').removeClass('d-none');
                } else {
                    $('#cat').addClass('d-none');
                    $('#mitra').addClass('d-none');
                }
            });

            let choices = document.querySelectorAll(".choices")
            let initChoice
            for (let i = 0; i < choices.length; i++) {
                if (choices[i].classList.contains("multiple-remove")) {
                    initChoice = new Choices(choices[i], {
                        delimiter: ",",
                        editItems: true,
                        maxItemCount: -1,
                        removeItemButton: true,
                        removeItems: true,
                    })
                } else {
                    initChoice = new Choices(choices[i])
                }
            }
        </script>
    @endpush
