@extends('layout.main')

@section('title',' Tambah Program Studi')

@section('content')

<div class="row">

   <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Program Studi</h4>
                  <p class="card-description">
                    Formulir tambah Progam Studi
                  </p>
                  <form method="POST" action= "{{ route('prodi.store') }}" class="forms-sample">
                    <div class="form-sample">
                        @csrf
                      <div class="form-group">
                      <label for="nama">Nama Prodi</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}" placeholder="Nama Fakultas">
                      @error('nama')
                          <span class="text-danger">{{$message}} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="singkatan">Singkatan</label>
                      <input type="text" class="form-control" name="singkatan" placeholder="FIKR,FEB, ....">
                     @error('singkatan')
                          <span class="text-danger">{{$message}} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="fakultas_id">Prodi</label>
                      <select name="fakultas_id"
                      class="form-control">
                            @foreach ($fakultas as $item)
                                    <option value="{{$item['id'] }}">
                                        {{ $item['nama']}}
                                    </option>
                            @endforeach
                    </select>
                      @error('fakultas_id')
                          <span class="text-danger">{{$message}} </span>
                      @enderror
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ url('prodi')}}" class="btn btn-light">Batal</a>
                  </form>
                </div>
              </div>

</div>
@endsection 