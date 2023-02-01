@extends('app')
@section('title', "Komputer")
@section('title-header', "Komputer")

@section('konten')
<form action="{{ route('computer.store') }}" method="POST">
@csrf
<input type="hidden" name="status" value="0">
    <button type="submit" class="btn btn-primary mb-2">+Tambah</button>
</form>
    <div class="card shadow mb-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" calspacing="0">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th>No</th>
                            <th>Unit</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($unit as $item)
                        <tr class="text-center fw-bold">
                            <td>{{ $loop->iteration }}</td>
                            <td>Komputer {{ $item->id }}</td>
                            <td>
                                @if($item->status == 1)
                                    <div class="badge badge-success">Online</div>
                                    @else
                                    <div class="badge badge-danger">Offline</div>
                                @endif
                            </td>
                            <td>
                                <form class="d-inline" action="{{ route('computer.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin?')" class="btn btn-sm btn-danger">Hapus</button>
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