@extends('template')

@section('content')

    <h3>Tambah Data Kartu Grafis (VGA) Baru</h3>

    <a href="/vga" class="btn btn-secondary"> Kembali</a>

    <br/>
    <br/>

    <form action="/vga/store" method="post">
        {{ csrf_field() }} {{-- Ini sama dengan @csrf --}}

        <div class="row">
            <div class="col-3">
                <label class="label-control"> Merk VGA </label>
            </div>
            <div class="col-8">
                <input type="text" name="merkVGA" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label class="label-control"> Harga </label>
            </div>
            <div class="col-8">
                <input type="number" name="hargaVGA" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label class="label-control"> Tersedia </label>
            </div>
            <div class="col-8">
                <select name="tersedia" required="required" class="form-control">
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select> <br/>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label class="label-control"> Berat (kg) </label>
            </div>
            <div class="col-8">
                <input type="text" name="berat" required="required" class="form-control"> <br/>
            </div>
        </div>

        <input type="submit" class="btn btn-success" value="Simpan Data">

    </form>

@endsection
