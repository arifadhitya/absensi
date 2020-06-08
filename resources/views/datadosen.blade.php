<!DOCTYPE html>
<html>
<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>
		Data Dosen
	</title>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				Data Dosen
			</div>
			<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>no</th>
							<th>foto</th>
							<th>nip</th>
							<th>nama dosen</th>
							<th>kontak</th>
							<th>email</th>
							<th>password</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$x=1;
						 ?>
						@foreach($dosen as $d)
						<tr>
							<td><?php echo $x; ?></td>
							<td>
								<img width="75px" src="{{ url('/simpan_foto/'.$d->foto)}}">
							</td>
							<td>{{$d->nip}}</td>
							<td>{{$d->nama_dosen}}</td>
							<td>{{$d->kontak}}</td>
							<td>{{$d->email}}</td>
							<td>{{$d->password}}</td>
							<td>
								<a href="/admin/datadosen/updatedosen/{{$d->nip}}" class="btn btn-warning">Edit</a>
								<a href="/admin/datadosen/hapusdosen/{{$d->nip}}" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php 
							$x++;
						 ?>
						@endforeach
						</tr>
					</tbody>
				</table>
				<a href="/admin/datadosen/tambahdosen" class="btn btn-primary">Insert</a>
		</div>
	</div>
</body>
</html>