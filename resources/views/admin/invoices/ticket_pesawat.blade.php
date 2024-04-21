<table class="table table-bordered nowrap tabel" style="width:100%">
    <thead>
        <tr>
            <th>
                No.
            </th>
            <th>
                LPK
            </th>
            <th>
                Nomor
            </th>
            <th>
                Status
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @php $no=1; @endphp
        @foreach ($da as $row)
            @if ($row->type == 'ticket_pesawat')
                <tr>
                    <td>
                        {{ $no++ }}
                    </td>
                    <td>
                        {{ $row->heads->partner->name }}
                    </td>
                    <td>
                        <p class="text-capitalize">{{ $row->number }}
                        </p>
                    </td>
                    <td>
                        @if ($row->status == 0)
                            <span class="badge bg-danger rounded-3 fw-semibold">unpaid</span>
                        @else
                            <button type="button" class="btn btn-success btn-sm rounded-pill" data-bs-toggle="modal"
                                data-bs-target="#to{{ $row->id }}">
                                Paid
                            </button>
                        @endif
                    </td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');"
                            action="{{ route('invoice.destroy', $row->id) }}" method="POST">
                            @csrf
                            {{-- <a href="{{ route('invoice.edit', $row->id) }}" class="btn btn-sm btn-primary"><i
                                    class="ti ti-edit"></i></a> --}}
                            <a href="{{ route('invoice.pile', ['id' => md5($row->id)]) }}" class="btn btn-sm btn-dark">
                                <i class="ti ti-file-text"></i>
                            </a>
                            @method('DELETE')
                            {{-- <button type="submit" class="btn btn-sm btn-danger">
                                <i class="ti ti-trash"></i>
                            </button>                  --}}
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
