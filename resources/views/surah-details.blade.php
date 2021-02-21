@extends('layouts.app')

@section('title', 'Quran-ku')
    
@section('content')
   <section class="section-details">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12 mt-5" data-aos="fade-up">
                    <div class="card">
                        <div class="card-header">
                            <h2>  {{$detailSurah['name']['transliteration']['id']}} ({{$detailSurah['name']['translation']['id']}})</h2>
                        </div>
                        <div class="card-body">
                            <h4>Surat Ke : {{$detailSurah['number']}} / {{$detailSurah['revelation']['id']}} / {{$detailSurah['numberOfVerses']}} Ayat</h4>
                            <h5>Penjelasan Surat :</h5>
                          <blockquote class="blockquote mb-0">
                            <p>{{$detailSurah['tafsir']['id']}}</p>
                          </blockquote>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row mb-5">
                @for ($i = 0; $i < count  ($detailSurah['verses']); $i++)
                <div class="col-lg-6 col-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="audio-surah">
                        <audio id="myAudio" class="responsive " 
                        controls 
                        controlslist="nodownload"
                        class="mb-5 ml-2 shadow-md rounded-md"
                        preload="none">
                        <source src="{{$detailSurah['verses'][$i]['audio']['primary']}}" type="audio/mpeg"  class="surah">
                    </audio>
                    </div>
                   
                </div>
                <div class="col-lg-6 col-12 mb-5" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-right mb-5">{{$detailSurah['verses'][$i]['text']['arab']}}</h2>
                    <p class="textright">{{$detailSurah['verses'][$i]['translation']['id']}}</p>
                    <hr>
                </div>
                @endfor
            </div>
        </div>
   </section>
@endsection


@push('addon-script')
<script>
    AOS.init();
  </script>
@endpush


