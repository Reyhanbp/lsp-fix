@extends('layouts.main')
@section('content')
  <div class="card mt-5">
    <div class="card-body">
      <h4>Booking Lapangan</h4>
      <form action="{{ route('booking.checkout') }}">
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
              <label class="form-label" for="lokasi">Lokasi</label>
              <select name="lokasi" class="form-select" id="lokasi" required>
                <option value="" disabled selected>--pilih jenis lapangan--</option>
                <option value="indoor">Indoor</option>
                <option value="outdoor">Outdoor</option>
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label class="form-label" for="jenis">Jenis</label>
              <select required name="jenis" class="form-select" id="jenis">
                <option value="" disabled selected>--pilih jenis lapangan--</option>
                <option value="reguler">reguler</option>
                <option value="matras">matras</option>
                <option value="rumput">rumput</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <label class="form-label">Tanggal Mulai</label>
            <input type="datetime-local" class="form-control" name="date_start">
          </div>
          <div class="col-lg-6">
            <label class="form-label">Tanggal Selesai</label>
            <input type="datetime-local" class="form-control" name="date_end">
          </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-4">Checkout</button>
      </form>
    </div>
  </div>
  <div class="card mt-5">
    <div class="card-header">
      <h4>Daftar Booking Anda</h4>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Lokasi</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Total Harga</th>
            <th>Tgl Mulai</th>
            <th>Tgl Selesai</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bs as $b)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $b->lapangan->lokasi }}</td>
              <td>{{ $b->lapangan->jenis }}</td>
              <td>Rp. {{ number_format($b->lapangan->price) }}</td>
              <td>Rp. {{ number_format($b->total_price) }}</td>
              <td>{{ $b->date_start }}</td>
              <td>{{ $b->date_end }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
