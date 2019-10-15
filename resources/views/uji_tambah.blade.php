@extends('layouts.app')

@section('content')
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah Data</title>
    </head>
    <body>
            <div class="container">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h1>Tambah Data</h1>
                    </div>
                    <div class="card-body">
                        <br>
                        <br>

                        <form method="post" action="/table/store">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Perusahaan..">
                                @if($errors->has('nama'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Departement</label>
                                <input type="text" name="departement" class="form-control" placeholder="Masukan Departement..">
                                    @if($errors->has('departement'))
                                        <div class="text-danger">
                                            {{ $errors->first('departement') }}
                                        </div>
                                    @endif
                            </div>

                            <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" id="date" name="date">
                                    @if($errors->has('alamat'))
                                            <div class="text-danger">
                                                {{ $errors->first('alamat') }}
                                            </div>
                                        @endif
                                </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Simpan">
                                <a href="/table" class="btn btn-primary">Kembali</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </body>
        </html>
        @endsection
