@extends('layouts.app')

@section('content')
<html>
     <head>
         <title>Data TAble</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     </head>
     <body>
        <div class="container"><br>
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                      </div>
             @endif
             <br>
            <a href="/table/tambah" class="btn btn-primary">Tambah Data</a><br><br>

            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                <div class="card-body">
                        <table class="table table-striped">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Departement</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Setting</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($table as $uji)
                                  <tr>
                                    <td><b>{{$uji->id}}</b></th>
                                    <td>{{$uji->nama}}</td>
                                    <td>{{$uji->departement}}</td>
                                    <td>{{$uji->date}}</td>
                                    <td>
                                        <a href="/table/edit/{{$uji->id}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/table/hapus/{{$uji->id}}" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                                </div>
                    @yield('content')
                </div>
    </div>
</div>
@endsection
