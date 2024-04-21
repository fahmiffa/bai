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
                                @endif
                                @csrf                      
                                <div class="form-group row mb-3">
                                    <label class="col-md-3">LPK</label>
                                    <div class="col-md-6">
                                        <select class="choices form-select" name="lpk">
                                            <option value="">Pilih LPK</option>
                                            @foreach ($head->unique('mitra'); as $item)
                                                <option value="{{ $item->partner->user }}" @selected(isset($invoice) && $invoice->mitra == $item->partner->user)
                                                    @selected(old('lpk') == $item->partner->user)>
                                                    {{ strtoupper($item->partner->name) }}                                           
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('lpk')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>                      
                                <div class="form-group row mb-3">
                                    <label class="col-md-3">Agency</label>
                                    <div class="col-md-6">
                                        <select class="choices form-select" name="agen" required>
                                            <option value="">Pilih Agency</option>
                                            @foreach ($head->unique('agen'); as $item)
                                                <option value="{{ $item->agency->id }}" @selected(isset($invoice) && $invoice->agen == $item->agency->id)
                                                    @selected(old('agen') == $item->agency->id)>
                                                    {{ strtoupper($item->agency->name) }} </option>
                                            @endforeach
                                        </select>
                                        @error('agen')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-md-3">Type</label>
                                    @php
                                        $role = ['kanrihi', 'management_fee', 'monitoring_fee'];
                                    @endphp
                                    <div class="col-md-6">
                                        <select class="form-control" name="type" id="type">
                                            <option value="">Pilih Type</option>
                                            @foreach ($role as $item)
                                                <option value="{{ $item }}" @selected(isset($invoice) && $invoice->type == $item)
                                                    @selected(old('type') == $item)>
                                                    {{ strtoupper(str_replace('_', ' ', $item)) }}                                           
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-md-3">Note</label>
                                    <div class="col-md-6">
                                        <input type="text" name="note"
                                            value="{{ isset($invoice) ? $invoice->note : old('note') }}" class="form-control"
                                            required>
                                        @error('note')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>                              
                                <div class="mb-3 d-flex justify-content-start">
                                    <button class="btn btn-primary">Next</button>
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
