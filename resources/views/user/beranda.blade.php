@extends('layout/user/main')

@section('title','Beranda Fahrizal')
    
@section('isi')

<div class="jumbotron ">
    <img src="assets/user/img/banner.png" class="img-fluid" style="position: absolute" width="100%">
    <div class="container">
        <h1 class="display-4 ">
            <p >Selamat datang di website<br>
                <span >Fahrizal Azi F!</span></p>
        </h1>
        <a class="btn tombol" href="#profile">Hi, Rizal</a>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row text-center">
                <div class="col">
                    <img src="assets/user/img/employee.png" class="float-start img-fluid">
                    <h4>Hard Work</h4>
                    <p>Bekerja dengan
                        sungguh</p>
                </div>
                <div class="col">
                    <img src="assets/user/img/united.png" class="float-start img-fluid">
                    <h4>Team Work</h4>
                    <p>Bekerja dengan
                        tim</p>
                </div>
                <div class="col">
                    <img src="assets/user/img/chronometer.png" class="float-start img-fluid">
                    <h4>Tepat Waktu</h4>
                    <p>Bekerja dengan
                        disiplin</p>
                </div>
            </div>
        </div>
    </div>
    <div id="profile">

    </div>
</div>

<div class="bg-1" >
    <div class="container " >
        <div class="profile"  data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" >
            <div class="row" >
                <div class="col">
                    <h1>
                        Profile
                    </h1>
                    <p>
                        {{$profile->description}}
                    </p>
                </div>
                <div class="col">

                    <img src="/uploads/{{$profile->image}}" class="img-fluid profil">
                </div>
            </div>
        </div>
        <div id="achievment"  data-aos="fade-bottom" data-aos-anchor-placement="bottom-bottom">
            <div class="row" >
                <div class="row mt-5" >
                    <h1 >
                        Achievment
                    </h1>
                    <p>
                        Beberapa pencapaian saya dan tim
                    </p>
                    <div class="owl-carousel owl-theme">
                        @foreach ($achievment as $item)
                        <div class="item">
                            <img src="uploads/{{$item->image}}" class="img-fluid achiev">
                            <p>
                                {{$item->title}}
                            </p>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-2"  style="margin-bottom: 100px">
    <div class="container mb-5 " id="language" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" >
        <h1>
            Bahasa Pemrograman
        </h1>
        <p>
            Beberapa bahasa pemrograman yang dikuasai
        </p>
        
        <div class="card" style="padding: 25px">
            <div class="row">
                
            @foreach ($language as $item)
          
                    <div class="col-6">
                        <h6 class="mb-2">{{$item->language}}</h6>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: {{$item->progress}}%;" aria-valuenow="{{$item->progress}}}" aria-valuemin="0" aria-valuemax="100">{{$item->progress}}%</div>
                        </div>
                    </div>
            @endforeach 
            <div id="portofolio">
            </div>
                </div>
        </div>
    </div>
    
    <div class="container" >
        <div data-aos="fade-right" data-aos-anchor-placement="bottom-bottom">
            <h1>
                Portofolio
            </h1>
            <p>
                Beberapa project yang saya kerjakan
            </p>
        </div>
        <div class="col-lg-12 col-xs-12">
            <div class="row justify-content-center portofolio">
                @foreach ($portofolio as $item)
                <div class="col-lg-3 col-xs-6 ">
                    <div class="card">
                        <img src="uploads/{{$item->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{Str::limit($item->title,20)}}</h5>
                            {{-- <p class="card-text">
                                {!!Str::limit($item->description,100)!!}
                            </p> --}}
                            <hr>
                            <a href="http://e-market.pamekasankab.go.id/" target="_blank">Kunjungi Website</a>
                        </div>
                    </div>
                </div>             
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
