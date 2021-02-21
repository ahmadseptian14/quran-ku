@extends('layouts.app')

@section('title', 'Quran-ku')
    
@section('content')
    <section class="section-surah">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <header>
                        <div class="jumbotron jumbotron-fluid" data-aos="zoom-in">
                            <div class="container">
                              <h1 class="display-4">Alquran Yang Mulia</h1>
                              <p class="lead">"Bacalah Al Quran sesungguhnya ia akan menjadi syafaat bagi pembacanya di hari kiamat"<br> HR.MUSLIM</p>
                            </div>
                          </div>
                    </header>
                </div>
            </div>
           <div class="row mt-5">
               @foreach ($surah as $listSurah)
                <div class=" col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                   <a href="{{route('details', $listSurah['number'])}}" class="text-dark">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$listSurah['number']}}. {{$listSurah['name']['transliteration']['id']}}</h5>
                            <p class="card-text">{{$listSurah['numberOfVerses']}} Ayat / {{$listSurah['revelation']['id']}}</p>
                            <h1 class="card-text text-right">{{$listSurah['name']['short']}}</h1>
                            <h5 class="card-text text-right">{{$listSurah['name']['translation']['id']}}</h5>
                        </div>
                    </div>
                   </a>
                </div>
               @endforeach
           </div>
        </div>
    </section>
@endsection

@push('addon-script')
<script>
    AOS.init();
  </script>
@endpush
