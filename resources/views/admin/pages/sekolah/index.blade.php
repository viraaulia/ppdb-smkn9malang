@extends('admin.layouts.app')
@section('content')
<div class="main-content">
<section class="section">
    <div class="section-header">
            <h1>Halaman Sekolah</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List Sekolah</h4>
                    <a href= "{{ route('sekolah.create') }}" class="btn btn-primary text-white">Tambah Sekolah</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                      <tr> 
                        <th>#</th> 
                        <th>Sekolah</th> 
                        <th>Email</th> 
                        <th>No Telepon</th> 
                        <th>Aksi</th> 
                      </tr> 

                      @foreach ($sekolahs as $sekolah)

                        <tr> 
                          <td>{{ $sekolah->id}}</td> 
                          <td>
                              {{$sekolah->nama_sekolah}} 
                              <p class="text-small">{{$sekolah->alamat}}</p>
                          </td> 
                          <td>{{$sekolah->email}}</td> 
                          <td>{{$sekolah->no_telp}}</td> 
                          <td>
                            <a href="{{ route('sekolah.edit', $sekolah->id) }}" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger" onclick="handleDelete({{ $sekolah->id }})">Hapus</button>
                          </td> 
                        </tr> 

                      @endforeach

                      <form id="form-delete" action="" method="POST">
                        @method("DELETE")
                        @csrf
                      </form>

                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
    </div>
</section>
</div>
@endsection
@push('js')
<script>

  function handleDelete(id) {
    $('#form-delete').attr('action','/sekolah/'+id);
      var check = confirm('Apakah anda yakin ingin menghapus data ini?');
    if(check) {
        $('#form-delete').submit();
    }
  }

</script>
@endpush