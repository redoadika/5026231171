@extends('template')

@section('content')
    <h3>Tambah Nilai</h3>

    <a href="/eas" class="btn btn-secondary"> Kembali</a>

    <br/>
    <br/>

    <form action="/eas/store" method="POST">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="nomorinduksiswa" class="col-sm-3 col-form-label">NRP</label>
            <div class="col-sm-9">
                <input type="text" name="nomorinduksiswa" class="form-control @error('nomorinduksiswa') is-invalid @enderror" required="required" value="{{ old('nomorinduksiswa') }}">
                @error('nomorinduksiswa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="nilaiangka" class="col-sm-3 col-form-label">Nilai Angka</label>
            <div class="col-sm-9">
                <input type="text" name="nilaiangka" class="form-control @error('nilaiangka') is-invalid @enderror" required="required" value="{{ old('nilaiangka') }}">
                @error('nilaiangka')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="sks" class="col-sm-3 col-form-label">SKS</label>
            <div class="col-sm-9">
                <input type="text" name="sks" class="form-control @error('sks') is-invalid @enderror" required="required" value="{{ old('sks') }}">
                @error('sks')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                <input type="submit" class="btn btn-primary" value="SIMPAN">
            </div>
        </div>
    </form>
@endsection
