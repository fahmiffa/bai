@extends('layout.base')
@section('main')
        <div class="row">      
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-between mb-3">
                      <h5 class="card-title fw-semibold text-capitalize">{{$data}}</h5>
                      <button class="btn btn-primary rounded-pill btn-sm" onclick="location.href='{{route('agency.create')}}' ">Add</button>
                  </div>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No.</h6>
                        </th>                
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Role</h6>
                          </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $row)
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{$loop->iteration}}</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{$row->name}}</h6>                 
                            </td>
                            <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$row->email}}</p>
                            </td>
                            <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2 text-capitalize">
                                {{$row->role}}
                            </div>
                            </td>
                            <td class="border-bottom-0">
                              <form onsubmit="return confirm('Apakah Anda Yakin Menghapus ?');" action="{{ route('user.destroy', $row->id) }}" method="POST">
                                <a href="{{ route('user.edit', $row->id) }}" class="btn btn-sm btn-primary"><i class="ti ti-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="ti ti-trash"></i></button>
                            </form>
                            </td>
                        </tr>                   
                       @endforeach               
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-center">
                    {!! $user->withQueryString()->links('pagination::bootstrap-5') !!}           
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>   
@endsection