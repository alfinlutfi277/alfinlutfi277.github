
 
<!-- membuat judul bernama 'Edit Artikel' pada tab bar -->
<?php $__env->startSection('title', 'Edit Artikel'); ?>
 
<?php $__env->startSection('header'); ?>
<center class="mt-4">
    <h2>Edit Artikel</h2>
</center>
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('main'); ?>
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/edit_process">
    <?php echo csrf_field(); ?>
	<input type="hidden" value="<?php echo e($article->id); ?>" name="id">
        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" value="<?php echo e($article->judul); ?>" name="judul" placeholder="Judul artikel">
        </div>
        <div class="form-group">
            <label>Isi Artikel</label>
            <textarea class="form-control" name="deskripsi" rows="15"><?php echo e($article->deskripsi); ?>

            </textarea>
        </div>
</div>
<?php $__env->stopSection(); ?>
 
<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
<?php $__env->startSection('sidebar'); ?>
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important
    <div class="form-group">
        <label>Edit</label>
        <input type="submit" class="form-control btn btn-primary" value="Edit">
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\lutfi\resources\views/edit.blade.php ENDPATH**/ ?>