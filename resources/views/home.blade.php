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
                            <h3 class="mt-3"> Halo Selamat Datang Di Penyewaan ReyGoal</h3>
                            <h4 class="mt-5"> Cara Menyewa Lapangan</h4>
                        </div>
                        <ol class="mt-4">
                            <li>Tentukan jenis lapangan yang Anda inginkan, apakah Indoor atau Outdoor.</li>
                            <li>Jika Anda membutuhkan sepatu atau kostum, Anda dapat memilih opsi penyewaan.</li>
                            <li>Mohon isi data diri Anda dengan lengkap dan jelas.</li>
                            <li>Lakukan pembayaran sesuai petunjuk yang diberikan.</li>
                            <li>Setelah itu, tunggu konfirmasi dari pihak penyewa.</li>
                        </ol>

                        <div class="text-center">
                            <h4 class="mt-5"> List Biaya Penyewaan Lapangan</h4>
                        </div>
                        <div class="card-group mt-4 ">
                            <div class="card border-warning">
                                <div class="card-header text-center">
                                    Biaya Sewa Lapangan - <span><strong>Indoor</strong></span>
                                </div>
                                <div class="card-body ms-4">
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
                                <div class="card-body ms-4">
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
