@extends('layouts.main')

@section('content')
<style>

    .card {
        border: none;
    }

    .card-group {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card.border-primary {
        border-color: #007bff;
    }

    .card.border-warning {
        border-color: #ffc107;
    }

    .card.border-success {
        border-color: #28a745;
    }

    .card-header {
        background-color: transparent;
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

    .card-header span {
        color: #007bff;
    }

    .card-body {
        padding: 1.25rem;
    }

    .card-body ul {
        list-style-type: none;
        padding: 0;
    }

    .modal-body {
        padding: 1rem;
    }
</style>
    <div class="container mt-4 ">
        <div class="row justify-content-center" style="min-height: 90vh">
            <div class="col-md-7">
                <div class="card border-primary">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="mt-3">Tata Cara Penyewaan Lapangan</h3>
                        </div>
                        <ol class="mt-4">
                            <li>Pilih jenis lapangan yang tersedia (Indoor/Outdoor).</li>
                            <li>Apabila ingin menyewa sepatu atau kostum, Anda dapat memilih opsi penyewaan.</li>
                            <li>Isi formulir penyewaan dengan lengkap dan benar.</li>
                            <li>Lakukan pembayaran sesuai dengan petunjuk yang diberikan.</li>
                            <li>Tunggu konfirmasi dari pihak penyewa.</li>
                        </ol>

                        <div class="card-group mt-4">
                            <div class="card border-warning">
                                <div class="card-header text-center">
                                    Biaya Sewa Lapangan - <span><strong>Indoor</strong></span>
                                </div>
                                <div class="card-body ms-5">
                                    <ul>
                                        <li>Reguler : Rp 300.000/Jam</li>
                                        <li>Matras : Rp 250.000/Jam</li>
                                        <li>Rumput : Rp 200.000/Jam</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card border-warning ">
                                <div class="card-header text-center">
                                    Biaya Sewa Lapangan - <span><strong>Outdoor</strong></span>
                                </div>
                                <div class="card-body ms-5">
                                    <ul>
                                        <li>Reguler : Rp 250.000/Jam</li>
                                        <li>Matras : Rp 200.000/Jam</li>
                                        <li>Rumput : Rp 150.000/Jam</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="card mt-4 border-success">
                            <div class="card-header">
                                Biaya Sewa Tambahan
                            </div>
                            <div class="card-body">
                                <p><strong>Sewa Sepatu:</strong> Rp 50.000/Jam</p>
                                <p><strong>Sewa Kostum:</strong> Rp 45.000/Jam</p>
                            </div>
                        </div>

                        <!-- Modal Konfirmasi Keluar -->
                        <div id="confirmModal" class="modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Konfirmasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin keluar?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button id="konfirmasiKeluarButton" type="button" class="btn btn-danger">Ya, Keluar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Konfirmasi Keluar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#keluarButton').click(function() {
                $('#confirmModal').modal('show');
            });

            $('#konfirmasiKeluarButton').click(function() {
                // Tambahkan kode di sini untuk menangani keluar
                // Misalnya, mengarahkan pengguna ke halaman keluar
            });
        });
    </script>
@endsection
