@extends('welcome')
@section('content')
<h1>Form Pendaftaran Santri</h1>

<form method="POST" action="/daftar">
@csrf
<div class="mb-3">
<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label>Alamat</label>
<textarea name="alamat" class="form-control" required></textarea>
</div>

<div class="mb-3">
<label>Asal Sekolah</label>
<input type="text" name="sekolah" class="form-control" required>
</div>

<div class="mb-3">
<label>No HP</label>
<input type="text" name="hp" class="form-control" required>
</div>

<button class="btn btn-success">Daftar</button>
</form>
@endsection
