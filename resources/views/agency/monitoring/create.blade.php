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
                    @isset($complaint)
                        <form action="{{ route('complaint.update', ['complaint' => $complaint]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PATCH')
                        @else
                            <form action="{{ route('complaint.store') }}" method="post" enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="form-group row mb-3">                            
                                    <div class="col-md-6">
                                        <label>Employee</label>
                                        <select class="choices form-select" name="employee">
                                            <option value="">Select Employee</option>
                                            @foreach ($head as $item)
                                                <option value="{{ $item->id }}" @selected(isset($complaint) && $complaint->head == $item->id)>
                                                    {{ strtoupper($item->peserta->name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('employee')
                                            <div class='small text-danger text-left'>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>                             

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <label>Note</label>
                                        <textarea class="form-control" name="note" rows="2">{{ isset($complaint) ? $complaint->note : old('note') }}</textarea>
                                        @error('note')
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
