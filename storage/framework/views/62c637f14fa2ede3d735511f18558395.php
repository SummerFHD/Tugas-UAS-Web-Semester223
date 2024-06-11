<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.min.css">
		<script src="https://kit.fontawesome.com/b632dc8495.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?php echo e(asset('/css/dashboard.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
  </head>
  <body style="background: #EEEEEE;">
		<div class="col-lg-12 m-auto p-3 mt-4">
			<div class="bg-white p-5 position-relative shadow-xl rounded-1">
				<div class="bg-purple-gradient position-absolute text-white m-auto rounded-1" style="width: 98%;top: -5%; left: 0; right: 0;">
					<p class="ms-3 mt-3">Add New Product</p>
				</div>

				<?php if($errors->any()): ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<ul>
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><?php echo e($error); ?></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php endif; ?>

				<form method="POST" action="<?php echo e(route('create.store')); ?>" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="group"> 
						<input class="inputMaterial" name="jenis" type="text" value="<?php echo e(old('jenis')); ?>" required>   
						<span class="bar"></span>
						<label>Jenis Product</label>
						<div class="error-txt">
							Error Text
						</div>
					</div>
					<div class="group"> 
						<input class="inputMaterial" name="deskripsi" type="text" value="<?php echo e(old('deskripsi')); ?>" required>   
						<span class="bar"></span>
						<label>Deskripsi</label>
						<div class="error-txt">
							Error Text
						</div>
					</div>
					<div class="group"> 
						<p style="color: #757575;">Gambar</p>
						<input type="file" name="gambar" id="gambar" required>
					</div>
					<div class="d-flex gap-1">
						<button type="submit" class="btn bg-purple text-white py-2 px-4 rounded-1">Save</button>
						<button type="button" class="btn bg-red text-white py-2 px-4 rounded-1" onclick="window.location='<?php echo e(route('dashboard')); ?>'">Back</button>
					</div>
				</form>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function() {
				$('#table').DataTable({
					"lengthChange": false,
					"searching": false,
					"paging": false					 
				});
			});
		</script>
  </body>
</html><?php /**PATH C:\Users\ASUS\Documents\backup\!WORK\tugas_andi\resources\views/dashboard/create.blade.php ENDPATH**/ ?>