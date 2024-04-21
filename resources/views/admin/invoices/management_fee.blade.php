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
                Agensi
            </th>
            <th>
                Nomor
            </th>
            <th>
                Status
            </th>
            <th>
                Tanggal
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @php $no=1; @endphp
        @foreach ($da as $row)
            @if ($row->type == 'management_fee')
                <tr>
                    <td>
                        {{ $no++ }}
                    </td>
                    <td>
                        {{ $row->lpk->name }}
                    </td>
                    <td>
                        {{ $row->agency->name }}
                    </td>
                    <td>
                        <p class="text-capitalize">{{ $row->number }}
                        </p>
                    </td>
                    <td>
                        @if ($row->status == 0)
                            <span class="badge bg-danger rounded-3 fw-semibold">unpaid</span>
                        @else
                            <button type="button"
                                class="btn {{ $row->paid->nominal < $row->sum ? 'btn-danger' : 'btn-success' }} btn-sm rounded-pill"
                                data-bs-toggle="modal" data-bs-target="#to{{ $row->id }}">
                                Paid
                            </button>
                        @endif
                    </td>
                    <td>
                        {{ date('d-m-Y', strtotime($row->created_at)) }}
                    </td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');"
                            action="{{ route('invoice.destroy', $row->id) }}" method="POST">
                            @csrf
                            <a href="{{ route('invoice.edit', $row->id) }}" class="btn btn-sm btn-primary"><i
                                    class="ti ti-edit"></i></a>
                            <a href="{{ route('invoice.pile', ['id' => md5($row->id)]) }}" class="btn btn-sm btn-dark">
                                <i class="ti ti-file-text"></i>
                            </a>
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="ti ti-trash"></i>
                            </button>

                            @if ($row->status == 1)
                                <button type="button" class="btn btn-primary btn-sm rounded-pill"
                                    data-bs-toggle="modal" data-bs-target="#gen{{ $row->id }}">
                                    Generate
                                </button>
                            @endif
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
