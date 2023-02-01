@extends('app')
@section('title', "Member")
@section('title-header', "Member")

@section('konten')
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addMember">+Tambah</button>
    <div class="card shadow mb-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" calspacing="0">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th>No</th>
                            <th>Username</th>
                            <th>Kuota Jam</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($member as $user)
                        <tr class="text-center fw-bold">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->sisa_jam }} Jam</td>
                            <td>
                                @if($user->status)
                                    <div class="badge badge-success">Online</div>
                                    @else
                                    <div class="badge badge-danger">Offline</div>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-sm btn-warning">Edit</button>
                                <form class="d-inline" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin Ingin Menghapus?')" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
    @include('MasterMember.add_member')