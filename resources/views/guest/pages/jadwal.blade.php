@extends('guest.layouts.app')

@section('title', 'Jadwal PPDB')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mb-4">Jadwal Pelaksanaan PPDB</h2>

      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th>Kegiatan</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Pendaftaran Online</td>
            <td>1 Juni – 30 Juni 2026</td>
          </tr>
          <tr>
            <td>Seleksi Berkas</td>
            <td>1 Juli – 5 Juli 2026</td>
          </tr>
          <tr>
            <td>Pengumuman</td>
            <td>10 Juli 2026</td>
          </tr>
          <tr>
            <td>Daftar Ulang</td>
            <td>11 Juli – 15 Juli 2026</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection