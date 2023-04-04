@extends('layout')

@section('header')
    Data Nasabah
@endsection

@section('header2')
    Dashboard
@endsection

@section('header3')
    Data Nasabah
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Nasabah Bank xxx</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('nasabah.create') }}"> Input Nasabah</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col-md-4">
            <form action="{{ route('nasabah.index') }}" method="GET" role="search">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan Nama atau No Rekening">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No Rekening</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Tabungan</th>
            <th>Saldo</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($nasabah as $Nasabah)
        <tr>

            <td>{{ $Nasabah->no_rek }}</td>
            <td>{{ $Nasabah->nama }}</td>
            <td>{{ $Nasabah->alamat }}</td>
            <td>{{ $Nasabah->jenis_tabungan }}</td>
            <td>{{ $Nasabah->saldo }}</td>
            <td>
                <form action="{{ route('nasabah.destroy',$Nasabah->no_rek) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('nasabah.show',$Nasabah->no_rek) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('nasabah.edit',$Nasabah->no_rek) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex">
        {!! $nasabah->links() !!}
    </div>
@endsection