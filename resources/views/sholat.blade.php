@extends('layouts.app')

@section('title', 'Waktu Sholat')
    
@section('content')
    <div class="container">
        <section class="section-sholat">
            <div class="row justify-content-center text-center mt-5">
                @for ($i = 0; $i < count  ($sholat['datetime']); $i++)
                <div class="col-lg-10 col-12" data-aos="zoom-in">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                          <h1 class="display-4">Waktu Sholat</h1>
                          <h5>Subuh : {{$sholat['datetime'][$i]['times']['Fajr']}}</h5>
                          <h5>Dzuhur : {{$sholat['datetime'][$i]['times']['Dhuhr']}}</h5>
                          <h5>Ashar : {{$sholat['datetime'][$i]['times']['Asr']}}</h5>
                          <h5>Maghrib : {{$sholat['datetime'][$i]['times']['Maghrib']}}</h5>
                          <h5>Isha : {{$sholat['datetime'][$i]['times']['Isha']}}</h5>
                        </div>
                      </div>
                </div>
                @endfor
            </div>
        </section>
    </div>
@endsection

@push('addon-script')
<script>
    AOS.init();
  </script>
@endpush
