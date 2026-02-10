@extends('guest.layouts.app')

@section('content')
<div class="container">

  {{-- HERO SECTION --}}
  <div class="row align-items-center" style="min-height: 60vh;">
    <div class="col-md-12 text-center">

      <h1 class="display-4 font-weight-bold">
        PPDB SMKN 9 Malang
      </h1>

      <p class="lead mt-3 mb-4">
        Sistem Penerimaan Peserta Didik Baru<br>
        Tahun Ajaran {{ date('Y') }}/{{ date('Y') + 1 }}
      </p>

      <div>
        <a href="/daftar" class="btn btn-primary btn-lg mr-2">
          Daftar Sekarang
        </a>

        <a href="/login" class="btn btn-outline-primary btn-lg">
          Login
        </a>
      </div>

    </div>
  </div>

</div>
@endsection