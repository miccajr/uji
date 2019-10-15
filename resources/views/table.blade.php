@extends('home')

@section('content')
<html>
     <head>
         <title>Testing</title>
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
            <table class="table">
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
                <th scope="row">{{$uji->id}}</th>
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
        </table><a href="/login">
        <button type="button" class="btn btn-secondary">Logout</button></a>
        </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<html>
@endsection
