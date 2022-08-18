<div class="table-responsive">
	<table class="table table-hover table-head-bg-info table-expand-lg" cellpadding="10">
		<thead>
			<tr>
				<th>No </th>
				<th>Judul</th>
				<th>ISBN</th>
				<th>Penulis</th>
				<th>Penerbit</th>
				<th>Jumlah Halaman</th>
				<th>Stok Tersedia</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<button class="btn btn-primary"> <a href="/buku/create" class="text-white">Tambah data Buku</a></button>
				</td>
			</tr>
			<?php $i = 1?>
			@foreach ($bukus as $buku)
			<tr>
				<td>{{ $i }}</td>
				<td>{{ $buku['judul'] }}</td>
				<td>{{ $buku['ISBN'] }}</td>
				<td>{{ $buku['penulis'] }}</td>
				<td>{{ $buku['penerbit'] }}</td>
				<td>{{ $buku['jumlah halaman'] }}</td>
				<td>{{ $buku['stok'] }}</td>
				<td>
					<button class="btn btn-success"><a href="" class="text-white">Edit</a> </button>
					<button class="btn btn-danger"><a href="" class="text-white">Hapus</a> </button>
				</td>
			</tr>    
			<?php $i++?>
			@endforeach
			
		</tbody>
	</table>
</div>