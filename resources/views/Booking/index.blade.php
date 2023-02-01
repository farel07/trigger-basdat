@extends('app')
@section('title', "Booking")
@section('title-header', "Booking")

@section('konten')
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addBooking">+Tambah</button>
    <div class="card shadow mb-3">
        <div class="card-body">
            <div class="table-relative">
                <table class="table table-bordered" id="dataTable" width="100%" calspacing="0">
                    <thead>
                        <tr class="text-center fw-bold">
                            <th>No</th>
                            <th>User</th>
                            <th>Komputer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booking as $item)

                        @if (strtotime(now()) - $item->book_at > ($item->jam * 3600))
                            
                        @php
                            App\Models\Booking::destroy($item->id);
                        @endphp

                        @else

                        <tr class="text-center fw-bold">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->user->username }}</td>
                            <td>Komputer {{ $item->komputer_id }}</td>
                            <td>
                                <form action="{{ route('booking.destroy', $item->id) }}" onclick="return confirm('Apakah anda ingin menghapusnya ?')" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endif

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('Booking.add_booking')
    @endsection