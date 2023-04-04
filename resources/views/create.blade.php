@extends('layout')

@section('header')
Tambah Data Nasabah
@endsection

@section('header2')
Dashboard
@endsection

@section('header3')
Tambah Data Nasabah
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Nasabah
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('nasabah.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="no_rek">No Rekening</label><br>
                        <input type="text" name="no_rek" class="formcontrol" id="no_rek" ariadescribedby="no_rek" >
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label><br>
                        <input type="text" name="nama" class="formcontrol" id="nama" ariadescribedby="nama" >
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label><br>
                        <input type="text" name="alamat" class="formcontrol" id="alamat" ariadescribedby="alamat" >
                    </div>
                    <div class="form-group">
                        <label for="jenis_tabungan">Jenis Tabungan</label><br>
                        <input type="jenis_tabungan" name="jenis_tabungan" class="formcontrol" id="jenis_tabungan" ariadescribedby="jenis_tabungan" >
                    </div>
                    <div class="form-group">
                        <label for="saldo">Saldo</label><br>
                        <input type="saldo" name="saldo" class="formcontrol" id="saldo" ariadescribedby="saldo" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection