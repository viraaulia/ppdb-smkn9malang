@extends('guest.layouts.app')

@section('title', 'Jurusan')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-12">
      <h2 class="mb-4 text-center">Program Keahlian SMK Negeri 9 Malang</h2>
      <p class="text-center mb-5">
        SMK Negeri 9 Malang menyediakan lima program keahlian
        yang dapat dipilih oleh calon peserta didik sesuai minat dan bakat.
      </p>
    </div>
  </div>

  <div class="row">
    <!-- TSM -->
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Teknik Sepeda Motor (TSM)</h5>
          <p class="card-text">
            Program keahlian yang mempelajari perawatan, perbaikan,
            dan teknologi kendaraan roda dua.
          </p>
        </div>
      </div>
    </div>

    <!-- RPL -->
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Rekayasa Perangkat Lunak (RPL)</h5>
          <p class="card-text">
            Program keahlian yang mempelajari pembuatan aplikasi,
            website, dan sistem informasi.
          </p>
        </div>
      </div>
    </div>

    <!-- TKJ -->
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Teknik Komputer dan Jaringan (TKJ)</h5>
          <p class="card-text">
            Program keahlian yang mempelajari instalasi,
            konfigurasi, dan pengelolaan jaringan komputer.
          </p>
        </div>
      </div>
    </div>

    <!-- ANM -->
    <div class="col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Animasi (ANM)</h5>
          <p class="card-text">
            Program keahlian yang mempelajari animasi 2D dan 3D,
            desain karakter, serta produksi animasi digital.
          </p>
        </div>
      </div>
    </div>

    <!-- TEI -->
    <div class="col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Teknik Elektronika Industri (TEI)</h5>
          <p class="card-text">
            Program keahlian yang mempelajari sistem elektronika,
            otomasi industri, dan pengendalian peralatan industri.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection