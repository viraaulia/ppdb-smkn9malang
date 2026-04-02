@extends('admin.layouts.app')

@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Halaman Edit Sekolah</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <h4 class="text-dark">Form Edit Sekolah</h4>
        </div>
        <div class="card-body">
           <form action="{{ route('sekolah.store') }}" method="POST">
            @csrf()
             <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="nama_sekolah">Nama Sekolah</label>
                        <input type="text" value="{{$sekolah->nama_sekolah}}" class="form-control" id="nama_sekolah" 
                        placeholder="masukkan nama sekolah" name="nama_sekolah">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" value="{{$sekolah->email}}" class="form-control" id="email" 
                        placeholder="masukkan email" name="email">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="telp">No Telepon</label>
                        <input type="text" value="{{$sekolah->no_telp}}" class="form-control" id="no_telp" 
                        placeholder="masukkan nomor telephone" name="no_telp">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" {{ $sekolah->alamat }} id="" 
                        placeholder="masukkan alamat" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </div>
           </form>
        </div>
    </div>
</section>
</div>

@endsection