@extends('guest.layouts.app')

@section('title', 'Alur Pendaftaran')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mb-4">Alur Pendaftaran PPDB</h2>

      <ol class="list-group list-group-numbered">
        <li class="list-group-item">Calon peserta didik melakukan registrasi akun.</li>
        <li class="list-group-item">Login ke sistem PPDB.</li>
        <li class="list-group-item">Melengkapi data diri.</li>
        <li class="list-group-item">Memilih jurusan yang diminati.</li>
        <li class="list-group-item">Menginput data nilai akademik.</li>
        <li class="list-group-item">Menunggu proses verifikasi.</li>
        <li class="list-group-item">Melihat pengumuman hasil seleksi.</li>
      </ol>
    </div>
  </div>
</div>
@endsection