@extends('layout')

@section('header')
Detail Data Nasabah
@endsection

@section('header2')
Dashboard
@endsection

@section('header3')
Detail Data Nasabah
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Nasabah
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>no_rek: </b>{{$Nasabah->no_rek}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Nasabah->nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Nasabah->alamat}}</li>
                    <li class="list-group-item"><b>Jenis Tabungan: </b>{{$Nasabah->jenis_tabungan}}</li>
                    <li class="list-group-item"><b>Saldo: </b>{{$Nasabah->saldo}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('nasabah.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection