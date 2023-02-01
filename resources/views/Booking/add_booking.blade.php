<div class="modal fade" id="addBooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <label for="username">Pilih Member</label>
                    <select class="form-control" name="user_id" id="username">
                        <option selected >Pilih Member</option>
                        @foreach ($member as $user)
                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="komputer">Pilih Unit</label>
                    <select class="form-control" name="komputer_id" id="komputer">
                        <option selected >Pilih Unit Komputer</option>
                        @foreach ($unit as $item)
                            <option value="{{ $item->id }}">Komputer {{ $item->id }}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="jam">Jam</label>
                    <input class="form-control select" type="number" max="{{ $user->sisa_jam }}" type="text" id="jam" name="jam">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
        </div>
    </div>
</div>
