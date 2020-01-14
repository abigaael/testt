@extends('layouts.email')
@section('content')

	<h1>Hi, Data anda telah berhasil ditambahkan</h1>
	<hr> Selamat {{ $data->nama_customer }}, data anda berhasil ditambahkan

	<table>
		<thead>
			<tr>
				<th>Alamat</th>
				<th>No Hp</th>
				<th>Jenis Kelamin</th>
			</tr>
			<tbody>
				<tr>
					<td>{{ $data->alamat }}</td>
					<td>{{ $data->no_hp }}</td>
					<td>{{ $data->jenis_kelamin }}</td>
				</tr>
			</tbody>
		</thead>
	</table>

@endsection