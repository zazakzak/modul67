@extends('layout.main')
@section('header')
<h1>Data Mahasiswa</h1>
@endsection
@section('konten')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Siswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('sisw.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama:</strong>
                {{ $sisw->NIS }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nim:</strong>
                {{ $sisw->NamaSiswa }}
            </div>
        </div>
    </div>
    @endsection
