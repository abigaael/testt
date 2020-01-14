@extends('layouts.email')
@section('content')

	<h1>Hi, Data anda telah berhasil diperbaharui</h1>
	<hr>{{ $edot->nama_customer }}, data anda berhasil diupdate

	<table>
		<thead>
			<tr>
				<th>Kode</th>
				<th>Nama Customer</th>
				<th>Email</th>
				<th>No Hp</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
			</tr>
		</thead>
			<tbody>
				<tr>
					<td>{{ $edot->kode }}</td>
					<td>{{ $edot->nama_customer }}</td>
					<td>{{ $edot->email }}</td>
					<td>{{ $edot->no_hp }}</td>
					<td>
					    @if($edot->jenis_kelamin == "L")
					    	Laki-Laki
					    @else
					        Perempuan
					    @endif
					</td>
					<td>{{ $edot->alamat }}</td>
				</tr>
			</tbody>
		
	</table>

@endsection