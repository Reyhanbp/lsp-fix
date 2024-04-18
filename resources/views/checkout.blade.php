@extends('layouts.main')

@section('content')

  <div class="row mt-5 justify-content-betwen">
    <div class="col-lg-12">
      <div class="card ">
        <div class="card-header">
          <h4 style="margin-top: 6px; padding-left:4px">Detail Booking Anda</h4>
        </div>
        <div class="card-body">
          <form action="{{route('checkout')}}" method="POST">
            @csrf
            <table class="table">
              <tbody>
                <tr>
                  <td class="text-fit ">Nama Penyewa</td>
                  <td class="text-fit">:</td>
                  <td>{{ $name }}</td>
                  <input type="hidden" name="name" value="{{$name}}">
                </tr>
                <tr>
                  <td class="text-fit ">No Tlp Penyewa</td>
                  <td class="text-fit">:</td>
                  <td>{{ $no_tlp }}</td>
                  <input type="hidden" name="no_tlp" value="{{$no_tlp}}">
                </tr>
                <input type="hidden" name="selected_lapangan_id" value="{{$selected_lapangan->id}}">
                <tr>
                  <td class="text-fit ">Jenis</td>
                  <td class="text-fit">:</td>
                  <td>{{ $selected_lapangan->jenis }}</td>
                </tr>
                <tr>
                  <td class="">lokasi</td>
                  <td class="text-fit">:</td>
                  <td>{{ $selected_lapangan->lokasi }}</td>
                </tr>
                <tr>
                  <td class=" text-fit">Harga perjam</td>
                  <td class="text-fit">:</td>
                  <td>Rp. {{ number_format($selected_lapangan->price) }}</td>
                </tr>
                @if ($sewa_sepatu)
                  <tr>
                    <td class=" text-fit">Sewa Sepatu</td>
                    <td class="text-fit">:</td>
                    <td>
                      Rp. 50,000/jam
                    </td>
                    <input type="hidden" name="sewa_sepatu" value="{{$sewa_sepatu}}">
                  </tr>
                  @endif
                @if ($sewa_kostum)
                  <tr>
                    <td class=" text-fit">Sewa Kostum</td>
                    <td class="text-fit">:</td>
                    <td>
                      Rp. 45,000/jam
                    </td>
                    <input type="hidden" name="sewa_kostum" value="{{$sewa_kostum}}">
                  </tr>
                @endif
                <tr>
                  <td class=" text-fit">Tgl Mulai</td>
                  <td class="text-fit">:</td>
                  <td>
                    <input class="form-control py-0" type="datetime-local" name="date_start" id=""
                      value="{{ $date_start }}">
                  </td>
                </tr>
                <tr>
                  <td class=" text-fit">Tgl Selesai</td>
                  <td class="text-fit">:</td>
                  <td>
                    <input class="form-control py-0" type="datetime-local" name="date_end" id=""
                      value="{{ $date_end }}">
                  </td>
                </tr>

              </tbody>
            </table>
            <h4 class="d-flex justify-content-between">
              Total Harga
              <span class="text-danger ">Rp. {{ number_format($total_harga) }}</span>
              <input type="hidden" name="total_harga" id="total-harga" value="{{$total_harga}}">
            </h4>
            <h4 class="d-flex justify-content-between mt-4">
              Tunai
              <div class="d-flex">
                <input type="number" style="text-align: end; padding-right: 0" class="form-control  " id="input-tunai" min="{{$total_harga}}" value="0" name="pay" >
              </div>
            </h4>
            <h4 class="d-flex justify-content-between mt-3">
              Kembalian
              <span class=" " id="kembalian">Rp.0</span>
            </h4>

            <button class="btn btn-success w-100 mt-3" type="submit">Booking</button>
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
@push('scripts')
    <script>
      $('#input-tunai').keyup(function (e) {
       let tunai = $('#input-tunai').val();
       let total_harga =  $('#total-harga').val();
       let kembalian = tunai - total_harga;
       $('#kembalian').text('Rp.' + kembalian.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
      });
    </script>
@endpush
