<!DOCTYPE html>
<html>
<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>
		Tambah Data Dosen
	</title>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				Tambah Data Dosen
			</div>
			<div class="card-body">
				<a href="/admin/datadosen" class="btn btn-primary">Back</a>
				<br>
				<br>
				<form method="post" action="update/<?php echo e($dosen->nip); ?>" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('PUT')); ?>

					<div class="form-group">
						<label>Foto</label>
						<img width="75px" src="<?php echo e(url('/simpan_foto/'.$dosen->foto)); ?>">
						<input type="file" name="foto">
					</div>
					<div class="form-group">
						<label>NIP</label>
						<input type="text" name="nip" class="form-control" placeholder="NIP" value="<?php echo e($dosen->nip); ?>" readonly="readonly">
						<?php if($errors->has('nip')): ?>
						<div class="text-danger"><?php echo e($errors->first('nip')); ?></div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama_dosen" class="form-control" placeholder="Nama" value="<?php echo e($dosen->nama_dosen); ?>">
						<?php if($errors->has('nama_dosen')): ?>
						<div class="text-danger"><?php echo e($errors->first('nama_dosen')); ?></div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Kontak</label>
						<input type="text" name="kontak" class="form-control" placeholder="Kontak" value="<?php echo e($dosen->kontak); ?>">
						<?php if($errors->has('kontak')): ?>
						<div class="text-danger"><?php echo e($errors->first('kontak')); ?></div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="email" value="<?php echo e($dosen->email); ?>">
						<?php if($errors->has('email')): ?>
						<div class="text-danger"><?php echo e($errors->first('email')); ?></div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="password" value="<?php echo e($dosen->password); ?>">
						<?php if($errors->has('password')): ?>
						<div class="text-danger"><?php echo e($errors->first('password')); ?></div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Kirim">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\absensi\resources\views/edit_dosen.blade.php ENDPATH**/ ?>