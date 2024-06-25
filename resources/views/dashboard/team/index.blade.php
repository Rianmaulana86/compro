
@extends('layouts.master')


@section('content')



<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Team table</h6>
            <br>
            <a class="btn btn-primary btn-sm" href="{{ url('team/create') }}">Tambah Data Team</a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                   @if (count($data) > 0)

                   @php
                       $no = 1;
                   @endphp
                    
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->posisi }}</td>
                            <td>
                                <a class="btn btn-primary" href="">Edit</a>
                                <a class="btn btn-danger" href="">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                   @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection