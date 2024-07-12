<div class="sidebar" id="side_nav">
  <div class="header-box px-2 pt-5 pb-2 d-flex justify-content-center">

  </div>
  <div class="list-box  d-flex flex-column justify-content-between gap-5">
    <ul class="list-unstyled px-3 pt-3 d-flex flex-column gap-2">
      <li class="rounded {{Request::segment(2) === 'dashboard' ? 'active' : ''}} rounded-2">
        <a href="{{route('dashboard')}}"
          class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline"><i
            ></i>Selamat Datang</a>
      </li>
      <li class="rounded {{Request::segment(2) === 'criteria' ? 'active' : ''}} rounded-2">
        <a href="{{route('criteria')}}"
          class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline">
          Kriteria
        </a>
      </li>
      
      </li>
      <li class="rounded {{Request::segment(2) === 'alternatives' ? 'active' : ''}} rounded-2">
        <a href="{{route('alternatives')}}"
        class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline">
          Alternatif</a>
      </li>
      <li class="rounded {{Request::segment(2) === 'grades' ? 'active' : ''}} rounded-2">
        <a href="{{route('grades')}}"
        class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline">
            Penilaian</a>
      </li>
      <li class="rounded {{Request::segment(2) === 'calculations' ? 'active' : ''}} rounded-2">
        <a href="{{route('calculations')}}"
        class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline">
            Perhitungan</a>
      </li>
      <li class="rounded {{Request::segment(2) === 'results' ? 'active' : ''}} rounded-2">
        <a href="{{route('results')}}"
        class="text-decoration-none px-3 py-3 rounded rounded-2 d-flex align-items-baseline">
          Hasil Nilai</a>
      </li>
    </ul>
  </div>
</div>