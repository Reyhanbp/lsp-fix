@extends('layouts.main')
@section('content')

<main class="pt-3">
    <div class="row">
        <div class="col-md-6">
            @if (session('failed-booking')[0] ?? false)
            <div class="alert alert-danger" role="alert">
                Jadwal yang anda masukkan telah di pesan oleh seseorang, harap memasukkan jadwal booking yang lain
            </div>
            @endif
            <div class="card ">
                <div class="card-header ">
                    <h4 style="padding-left: 10px; margin-top: 6px">Booking Lapangan</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('booking.post') }}" method="POST">
                        @csrf
                        <div class="container">
                            <div class="mb-3 row">
                                <label class="form-label col-md-4" for="name">Nama</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="form-label col-md-4" for="no_tlp">Nomor Telepon</label>
                                <div class="col-md-8">
                                    <input type="number" name="no_tlp" class="form-control" value="{{old('no_tlp')}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="form-label col-md-4" for="lokasi">Lokasi</label>
                                <div class="col-md-8">
                                    <select name="lokasi" class="form-select" id="lokasi" required value="{{old('lokasi')}}">
                                        <option value="" disabled selected>Pilih</option>
                                        <option value="indoor">Indoor</option>
                                        <option value="outdoor">Outdoor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="form-label col-md-4" for="jenis">Jenis</label>
                                <div class="col-md-8">
                                    <select required name="jenis" class="form-select" id="jenis">
                                        <option value="" disabled selected>Pilih</option>
                                        <option value="reguler"  @selected(old('jenis') == 'reguler')>Reguler</option>
                                        <option value="matras" @selected(old('jenis') == 'matras')>Matras</option>
                                        <option value="rumput" @selected(old('jenis') == 'rumput')>Rumput</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="form-label col-md-4">Tanggal Mulai</label>
                                <div class="col-md-8">
                                    <input type="datetime-local" class="form-control" name="date_start" value="{{old('date_start')}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="form-label col-md-4">Tanggal Selesai</label>
                                <div class="col-md-8">
                                    <input type="datetime-local" class="form-control" name="date_end" value="{{old('date_end')}}">
                                </div>
                            </div>
                            <div class="container mb-3">
                                <h5><strong>* Tambahan Sewa</strong></h5>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="sewa_sepatu" id="sewa_sepatu" class="form-check-input" @checked(old('sewa_sepatu'))>
                                    <label class="form-check-label" for="sewa_sepatu">Sewa Sepatu Rp. 50.000 / jam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="sewa_kostum" id="sewa_kostum" class="form-check-input">
                                    <label class="form-check-label" for="sewa_kostum">Sewa Kostum Rp. 45.000 / jam</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 style="margin-top: 6px; padding-left: 12px; color: white">Daftar Riwayat Booking</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Penyewa</th>
                                <th>No Tlp</th>
                                <th>Lokasi</th>
                                <th>Jenis</th>
                                <th>Harga Perjam</th>
                                <th>Tgl Mulai</th>
                                <th>Tgl Selesai</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tbody>
                                @foreach ($bs as $b)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $b->name }}</td>
                                    <td>{{ $b->no_tlp }}</td>
                                    <td>{{ $b->lapangan->jenis }}</td>
                                    <td>{{ $b->lapangan->lokasi }}</td>
                                    <td>Rp. {{ number_format($b->lapangan->price) }}</td>
                                    <td>{{ $b->getDateStart() }}</td>
                                    <td>{{ $b->getDateEnd() }}</td>
                                    <td>Rp. {{ number_format($b->total_price) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection
