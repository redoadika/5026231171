@extends('template')

@section('content')

    <h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-info">Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Nama </label>
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Jabatan </label>
            </div>
            <div class="col-8">
                <input type="text" name="jabatan" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Umur </label>
            </div>
            <div class="col-8">
                <input type="number" name="umur" required="required" class="form-control"> <br/>
            </div>
        </div>

        <div class="row">
		    <div class="col-3">
                <label class="label-control"> Alamat </label>
            </div>
            <div class="col-8">
                <textarea type="text" name="alamat" required="required" class="form-control"></textarea> <br/>
            </div>
        </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
        </div>
	</form>

@endsection
