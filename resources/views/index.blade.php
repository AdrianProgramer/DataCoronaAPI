@extends('Layouts.Templates')
@section('main')
    {{-- Jumbotron --}}
    <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-4">
                    <img src="https://cdn.pixabay.com/photo/2020/03/28/11/22/virus-4976617_1280.png" alt="" width="300px">
                </div>
                <div class="col-md-5  mt-5" style="color:white;font-size:20px;">
                    <p align="center"><b>Virus corona atau bisa di sebut virus <u>COVID-19</u> sudah melanda di indonesia selama 2 tahun lamanya. banyak
                    sekali yang sudah di rengut nyawanya oleh virus ini dan juga berdampak kepada banyak orang seperti urusan bisnis
                    dan pekerjaan, banyak yang di phk karena virus tersebut. oleh karena itu kita harus terus waspada dan tetap mengikuti
                    protocol keamanan.</b></p>
                </div>
            </div>
        </div>
    </section>
    {{-- End-Jumbotron --}}

    {{-- Data Indonesia --}}
    <div class="text-center mt-5">
        <h2>Positif:    <b>{{$DataPositif['value']}}</b></h2>
        <h2>Sembuh: <b>{{$DataSembuh['value']}}</b></h2>
    </div>
    {{-- End-Data indonesia --}}

    {{-- Card --}}
    <div class="container">
        <div class="row mt-5 justify-content-center">

            <div class="col-4">
                <div class="mt-5">
                    <div class="card" style=";">
                        <img src="https://asset.kompas.com/crops/z-nghehBccltlq3OE2UcNIEkU3w=/102x0:1121x679/750x500/data/photo/2021/11/09/618a52863ee27.png" class="card-img-top" alt="..." width="300px">
                        <div class="card-body">
                        <h5 class="card-title">Data indonesia</h5>
                        <p class="card-text">Data yang memperlihatkan data covid dari seluruh indonesia</p>
                        <a href="/info/indo" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="mt-5">
                    <div class="card" style=";">
                        <img src="https://e-ppid.kemlu.go.id/storage/460/COVID-19-WNI-AS-OF-18-MEI-2020-08.jpg" class="card-img-top" alt="..." width="300px">
                        <div class="card-body">
                        <h5 class="card-title">Data dunia</h5>
                        <p class="card-text">Data yang memperlihatkan data covid dari seluruh dunia</p>
                        <a href="/info/dunia" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="mt-5">
                    <div class="card" style=";">
                        <img src="https://asset.kompas.com/crops/q2VtrcfO8IYmWtLI8jlnzWzToqQ=/0x45:1280x898/750x500/data/photo/2020/03/20/5e7495e4a10d3.jpeg" class="card-img-top" alt="..." width="300px">
                        <div class="card-body">
                        <h5 class="card-title">Data provinsi</h5>
                        <p class="card-text">Data yang memperlihatkan data covid dari seluruh provinsi di indonesia</p>
                        <a href="/info/provinsi" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- End-Card --}}
@endsection
