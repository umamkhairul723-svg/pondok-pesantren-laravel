@extends('welcome')
@section('content')
<h1>Hasil Pendaftaran</h1>

@if($santri)
<ul class="list-group">
<li class="list-group-item">Nama: {{ $santri['nama'] }}</li>
<li class="list-group-item">Alamat: {{ $santri['alamat'] }}</li>
<li class="list-group-item">Sekolah: {{ $santri['sekolah'] }}</li>
<li class="list-group-item">No HP: {{ $santri['hp'] }}</li>
</ul>
@else
<p>Belum ada data.</p>
@endif

@endsection
