<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><strong>Quran-Ku</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="{{route('surah')}}">Home <span class="sr-only">(current)</span></a>
          </div>
          {{-- <form action="{{route('surah.search')}}" class="form-inline my-2 my-lg-0 ml-auto" method="POST">
            @csrf
          <input class="form-control mr-sm-2 " placeholder="Cari Surah" aria-label="Search" name="search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}
        </div>
      </nav>
</div>