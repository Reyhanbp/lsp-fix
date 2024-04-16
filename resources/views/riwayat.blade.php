@extends('layouts.main')
@section('content')
  <h3 class="mt-5">RIWAYAT TRANSAKSI</h3>
  <table class="table mt-5">
    <thead>
      <tr>
        <th>#</th>
        <th>Penyewa</th>
        <th>Jenis</th>
        <th>Lokasi</th>
        <th>Harga perjam</th>
        <th>Total Harga</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($bookings as $b)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $b->user->name }}</td>
          <td>{{ $b->lapangan->jenis }}</td>
          <td>{{ $b->lapangan->loksai }}</td>
          <td>Rp. {{ number_format($b->lapangan->price) }}</td>
          <td>Rp. {{ number_format($b->total_price) }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
