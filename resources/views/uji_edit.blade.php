@extends('layouts.app')

@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Data</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h1>Edit Data</h1>
                </div>
                <div class="card-body">
                    <br>
                    <br>

                    <form method="post" action="/table/update/{{ $table->id }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $table->nama }}">

                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                            @endif
                    </div>

                    <div class="form-group">
                        <label>Departement</label>
                        <input type="text" name="departement" class="form-control" value="{{$table->departement}}">
                        @if($errors->has('departement'))
                        <div class="text-danger">
                            {{ $errors->first('departement') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="{{$table->date}}">
                        @if($errors->has('date'))
                        <div class="text-danger">
                            {{ $errors->first('date') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="/home" class="btn btn-primary">Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
