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
                        <button class="btn btn-danger rounded-pill btn-sm"
                            onclick="location.href='{{ route('invoice.index') }}'">Back</button>
                    </div>

                    @isset($invoice)
                        <form action="{{ route('invoice.update', ['invoice' => $invoice]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                        @else
                            <form action="{{ route('invoice.store') }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="note" value="{{ $note }}">
                                @endif
                                @csrf
                                
                                
                                <input type="hidden" name="type" value="{{ $type }}">
                                <input type="hidden" name="mitra" value="{{ $da[0]->mitra }}">
                                <input type="hidden" name="agen" value="{{ $da[0]->agen }}">
                                @php
                                 $val = isset($invoice) ? $invoice->inv : $da;
                                @endphp

                                @foreach ($val as $item)                              
                                    <input type="hidden" name="siswa[]" value="{{ isset($invoice) ? $item->field->id : $item->id}}">
                                    <div class="form-group row mb-3">
                                        <label class="col-md-3">
                                            <p class="form-control-plain-text">
                                                {{ isset($invoice) ? $item->field->name : $item->peserta->name}}
                                                <br>
                                            </p>
                                        </label>
                                        <div class="col-md-3">
                                            <label>Tanggal Berangkat</label>
                                            <input type="date" name="departure[]" value="{{isset($invoice) ? $item->tanggal : null}}" class="form-control" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Nominal</label>
                                            <input type="number" name="nominal[]" value="{{isset($invoice) ? $item->nominal : null}}" class="form-control" required>
                                        </div>

                                        @if($kanrihi)
                                            <div class="col-md-3">
                                                <label>Periode</label>
                                                <select class="form-control" name="time[]" required>
                                                    <option value="">Pilih periode</option>
                                                    @php
                                                        $role = [1, 2, 3];
                                                    @endphp
                                                    @foreach ($role as $row)
                                                        <option value="{{ $row }}" @selected(isset($invoice) && $item->time == $row)
                                                            @selected(old('time') == $row)>
                                                            {{ strtoupper($row) }} Bulan</option>
                                                    @endforeach
                                                </select>
                                                @error('time')
                                                    <div class='small text-danger text-left'>{{ $message }}</div>
                                                @enderror
                                            </div>
                                        @endif
                                    </div>
                                @endforeach

                                <div class="form-group row mb-3">
                                    <label class="col-md-3">Template</label>
                                    @php
                                        $role = [1, 2, 3, 4, 5];
                                    @endphp
                                    <div class="col-md-6">
                                        <select class="form-control" name="template" required>
                                            <option value="">Pilih template</option>
                                            @foreach ($role as $item)
                                                <option value="{{ $item }}" @selected(isset($invoice) && $invoice->template == $item)
                                                    @selected(old('template') == $item)>
                                                    {{ strtoupper(str_replace('_', ' ', $item)) }}</option>
                                            @endforeach
                                        </select>
                                        @error('template')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label class="col-md-3">Tanggal Invoice</label>
                                    <div class="col-md-6">
                                        <input type="text" name="invoice"
                                            value="{{ isset($invoice) ? $invoice->tanggal : old('invoice') }}"
                                            class="form-control" required>
                                        @error('invoice')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label class="col-md-3">Due Date</label>
                                    <div class="col-md-6">
                                        <input type="text" name="due"
                                            value="{{ isset($invoice) ? $invoice->due : old('due') }}" class="form-control"
                                            required>
                                        @error('due')
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
        <script>
            $('#type').on('change', function() {
                var a = $(this).val();
                if (a === 'kanrihi') {
                    $('#time').removeClass('d-none');
                } else {
                    $('#time').addClass('d-none');
                }
            });

            @if (old())
                @if (old('type') == 'kanrihi')
                    $('#time').removeClass('d-none');
                @endif
            @endif
        </script>
    @endpush
