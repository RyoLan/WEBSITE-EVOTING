<style>
    body {
        font-family: sans-serif;
        background-color: #f2f2f2;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 70vh;
    }

    .card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 20px;
        text-align: center;
    }

    .card img {
        width: 200px;
        height: 200px;

        margin-bottom: 10px;
    }

    .text{
        margin-top: 10vh
    }

    .button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        width: 200px;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px;
    }
    .button1 {
        background-color: #defa76;
        color: white;
        padding: 10px 20px;
        width: 200px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px;
    }


    .button:hover {
        background-color: #3e8e41;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
{{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico')}}" /> --}}
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->

                    {{-- <div class="row">
                        @foreach ($kandidat as $data)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="text-center votcard shadow-md bg-white p-4 pt-5 h-100">
                                    <img class="rounded-pill shadow-md p-2"
                                        src="{{ asset('images/kandidat/' . $data->foto) }}" alt="">
                                    <h4 class="mt-3 fs-5 mb-1 fw-bold">{{ $data->no_urut }}</h4>
                                    <h6 class="fs-7">Ketua :<span class="text-primary fw-bold">
                                            {{ $data->nama_ketua }}</span></h6>
                                    <h6 class="fs-7">Wakil Ketua :<span class="text-primary fw-bold">
                                            {{ $data->nama_wakil }}</span></h6>
                                    <p class="text-dark fs-8">Kelas : {{ $data->kelas }}</p>
                                    <p class="text-dark fs-8">Jurusan : {{ $data->jurusan }}</p>
                                    <p class="text-dark mb-3 fs-8">Tahun ajaran : {{ $data->tahun_ajaran }}</p>
                                    <button data-id="{{ $data->id }}" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"
                                        class="btn btn-primary fw-bolder fs-8 view-manifesto">Visi & Misi</button>
                                    @if ($pemilih->status == 0)
                                        <form method="POST" action="{{ route('vote.store') }}" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id_pemilih" value="{{ $pemilih->id }}">
                                            <input type="hidden" name="id_kandidat" value="{{ $data->id }}">
                                            <button type="submit"
                                                class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                                        </form>
                                    @else
                                        <button class="btn btn-secondary fw-bolder px-4 ms-2 fs-8" disabled>Already Voted</button>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Perhitungan Sementara</div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
    <h1 class="text" style="text-align: center;">Daftar Calon Ketua OSIS Periode 2024 - 2025</h1>
    <center><hr width="900"></center>
    <div class="container">

        {{-- <div class="card">
            <img src="assets/images/siti.jpg" alt="Siti Jennie">
            <h2>Siti Jennie</h2>
            <button class="button">VISI MISI</button>
            <br>
            <button class="button1">BERI SUARA</button>
        </div>
        <div class="card">
            <img src="assets/images/lisa.jpg" alt="Lisa">
            <h2>Lisa</h2>
            <button class="button">VISI MISI</button>
            <br>
            <button class="button1">BERI SUARA</button>
        </div>
        <div class="card">
            <img src="assets/images/apep.jpg" alt="Jongkok">
            <h2>Jongkok</h2>
            <button class="button">VISI MISI</button>
            <br>
            <button class="button1">BERI SUARA</button>
        </div> --}}
        @foreach ($kandidat as $data)
        <div class="col-lg-4 col-md-6 mb-4" style="margin-left:10px">
            <div class="text-center votcard shadow-md bg-white p-4 pt-5 h-100" >
                <img class="rounded-pill shadow-md p-2" 
                    src="{{ asset('images/kandidat/' . $data->foto) }}" alt="">
                <h4 class="mt-3 fs-5 mb-1 fw-bold">{{ $data->no_urut }}</h4>
                <h6 class="fs-7">Ketua :<span class="text-primary fw-bold">
                        {{ $data->nama_ketua }}</span></h6>
                <h6 class="fs-7">Wakil Ketua :<span class="text-primary fw-bold">
                        {{ $data->nama_wakil }}</span></h6>
                <p class="text-dark fs-8">Kelas : {{ $data->kelas }}</p>
                <p class="text-dark mb-3 fs-8">Tahun ajaran : {{ $data->tahun_ajaran }}</p>
                <a href="/visi/{{ $data->id }}"  class="btn btn-danger text-align-center">Visi & Misi</a>
                @if ($pemilih->status == 0)
                    <form method="POST" action="{{ route('vote.store') }}" class="d-inline">
                        @csrf
                        <input type="hidden" name="id_pemilih" value="{{ $pemilih->id }}">
                        <input type="hidden" name="id_kandidat" value="{{ $data->id }}">
                        <button type="submit"
                            class="buttons btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                    </form>
                @else
                    <button class="button1 btn btn-secondary fw-bolder px-4 ms-2 fs-8" disabled>Already Voted</button>
                @endif
            </div>
        </div>
    @endforeach
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-6 fw-bold fs-5" id="exampleModalLabel">Visi & Misi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="molist">
                        <h6>Visi</h6>
                        <li id="visi"></li>
                        <h6>Misi</h6>
                        <li id="misi"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buttons = document.querySelectorAll('.view-manifesto');
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    fetch('/get-manifesto/' + id)
                        .then(response => response.json())
                        .then(data => {
                            document.getElementById('visi').innerText = data.visi;
                            document.getElementById('misi').innerText = data.misi;
                        });
                });
            });
        });
    </script>
 --}}
