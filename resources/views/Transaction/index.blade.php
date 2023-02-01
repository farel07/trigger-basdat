@extends('app')
@section('title', "Transaksi")
@section('title-header', "Transaksi")

@section('konten')
<div class="row justify-content-center mt-1">
    <div class="col-6">
        <div class="card mb-5">
            <form action="{{ route('transaction.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label for="member" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Member</label>
                        <div class="col-sm-12 col-md-7">
                            <select name="user_id" id="member" class="form-control selectric">
                                <option class="selected">Pilih Member</option>
                                @foreach ($member as $user)
                                <option value="{{ $user->id }}">{{ $user->username }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="jam" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jam</label>
                        <div class="col-sm-12 col-md-7">
                            <input id="jam" type="number" name="jam" class="form-control select">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-primary">Checkout</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
