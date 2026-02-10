@extends('guest.layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10 text-center">
      <h1 class="mb-3">PPDB SMK Negeri 9 Malang</h1>
      <p class="lead">
        Sistem Penerimaan Peserta Didik Baru (PPDB) SMK Negeri 9 Malang
        memberikan kemudahan bagi calon peserta didik untuk memperoleh
        informasi serta melakukan pendaftaran secara online.
      </p>

      <div class="mt-4">
        <a href="/login" class="btn btn-primary mr-2">Daftar / Login</a>
        <a href="/alur" class="btn btn-outline-secondary">Lihat Alur</a>
      </div>
    </div>
  </div>
</div>
@endsection