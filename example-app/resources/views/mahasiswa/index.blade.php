@extends('layout.main')

@section('title', 'Mahasiswa')
    
@section('content')
    <h1>UMDP</h1>
    <h2>Fakultas</h2>
    <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mahasiswa</h4>
                  <p class="card-description">
                    List Data Mahasiswa
                     <a href="{{route('mahasiswa.create')}}" class="btn btn-rounded btn-primary">Tambah</a>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>NPM</th>
                          <th>Nama Mahasiswa</th>
                          <th>Foto</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Prodi</th>
                          <th>URL Foto</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($mahasiswas as $value)
                            <tr> 
                                <td>{{ $value["nama"] }}</td>
                                <td>{{ $value["npm"] }} </td>
                                <td><img src="{{url ('foto/'. $item["url_foto"])}}"></td>
                                <td>{{ $value["prodi"]["nama"] }} </td>
                                <td>
                                  <form action="{{ route('mahasiswa.destroy', $item ["id"])}}" method="post">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" class ="btn btn sm btn-rounded btn-danger show_confirm" data-name="{{ $item["nama"]}}">Hapus</button></form>
                                </td>
                            </tr>
                        @endforeach 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            @if (session("sucsess"))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
              Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
               icon: "success"
              });
            </script>               
            @endif
          <script type="text/javascript">
              $('.show_confirm').click(function(event) {
                    var form =  $(this).closest("form");
                    var name = $(this).data("name");
                    event.preventDefault();
                    Swal.fire({
                    title: "Yakin mau hapus data"+name,
                    text: "Setelah dihapus data tidak dapat dikembalikan",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus"
          })
                    .then((willDelete) => {
                      if (willDelete.isConfirmed) {
                      form.submit();
                    }
                  });
              });
        </script>
@endsection

  