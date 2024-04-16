@extends('layouts.main')
@push('heads')
  <style>
    .text-fit {
      width: 9px;
      white-space: nowrap;
    }
  </style>
@endpush
@section('content')
  <div class="row mt-5 justify-content-center">
    <div class="col-lg-5">
      <div class="card">
        <div class="card-header">
          <h4>Detail Booking Anda</h4>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            @csrf
            <table class="table">
              <tbody>
                <tr>
                  <td class="text-fit fw-bold">Jenis</td>
                  <td class="text-fit">:</td>
                  <td>{{ $selected_lapangan->jenis }}</td>
                </tr>
                <tr>
                  <td class="fw-bold">lokasi</td>
                  <td class="text-fit">:</td>
                  <td>{{ $selected_lapangan->lokasi }}</td>
                </tr>
                <tr>
                  <td class="fw-bold text-fit">Harga perjam</td>
                  <td class="text-fit">:</td>
                  <td>Rp. {{ number_format($selected_lapangan->price) }}</td>
                </tr>
                <tr>
                  <td class="fw-bold text-fit">Tgl Mulai</td>
                  <td class="text-fit">:</td>
                  <td>
                    <input class="form-control py-0" type="datetime-local" name="date_start" id=""
                      value="{{ $date_start }}">
                  </td>
                </tr>
                <tr>
                  <td class="fw-bold text-fit">Tgl Selesai</td>
                  <td class="text-fit">:</td>
                  <td>
                    <input class="form-control py-0" type="datetime-local" name="date_end" id=""
                      value="{{ $date_end }}">
                  </td>
                </tr>
              </tbody>
            </table>
            <h4 class="d-flex justify-content-between">
              <span>Total Harga</span>
              <span class="text-primary fw-bold">Rp. {{ number_format($total_harga) }}</span>
            </h4>

            <button class="btn btn-primary w-100 mt-3" type="submit">Booking</button>
          </form>

        </div>
      </div>

    </div>
    @if (session('is_exist')[0] ?? false)
      <div class="col-lg-7">
        <div class="alert alert-danger" role="alert">
          Jadwal yang anda masukkan telah di pesan oleh seseorang, harap memasukkan jadwal booking yang lain
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Lokasi</th>
              <th>Jenis</th>
              <th>Tgl mulai</th>
              <th>Tgl selesai</th>
            </tr>
          </thead>
          <tbody>
            @foreach (session('is_exist') as $b)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->lokasi }}</td>
                <td>{{ $b->jenis }}</td>
                <td>{{ $b->date_start }}</td>
                <td>{{ $b->date_end }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif
  </div>
@endsection
