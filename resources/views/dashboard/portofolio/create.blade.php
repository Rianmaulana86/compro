


@extends('layouts.master')


@section('content')



<div class="container-fluid py-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <h3>Tambah Data Portofolio</h3>
          
          </div>
        </div>
        <div class="card-body">
            <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Judul</label>
                    <input class="form-control" type="text" name="judul">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Deskripsi Singkat</label>
                    <input class="form-control" type="text" name="deskripsi_singkat">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Gambar</label>
                    <input class="form-control" type="file" name="gambar">
                  </div>
                </div>
              </div>
              <button class="btn btn-primary btn-sm ms-auto" type="submit">Submit</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection