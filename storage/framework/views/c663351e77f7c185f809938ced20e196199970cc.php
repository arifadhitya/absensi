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
						<?php $__currentLoopData = $dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo $x; ?></td>
							<td>
								<img width="75px" src="<?php echo e(url('/simpan_foto/'.$d->foto)); ?>">
							</td>
							<td><?php echo e($d->nip); ?></td>
							<td><?php echo e($d->nama_dosen); ?></td>
							<td><?php echo e($d->kontak); ?></td>
							<td><?php echo e($d->email); ?></td>
							<td><?php echo e($d->password); ?></td>
							<td>
								<a href="/admin/datadosen/updatedosen/<?php echo e($d->nip); ?>" class="btn btn-warning">Edit</a>
								<a href="/admin/datadosen/hapusdosen/<?php echo e($d->nip); ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php 
							$x++;
						 ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tr>
					</tbody>
				</table>
				<a href="/admin/datadosen/tambahdosen" class="btn btn-primary">Insert</a>
		</div>
	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\absensi\resources\views/datadosen.blade.php ENDPATH**/ ?>