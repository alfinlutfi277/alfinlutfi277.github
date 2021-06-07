

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
            <input type="text" class="form-control" value="<?php echo e($article->nama_depan); ?>" name="nama_depan"
                placeholder="Judul artikel">
        </div>
        <div class="form-group">
            <label>nama belakang</label>
            <input type="text" class="form-control" value="<?php echo e($article->nama_belakang); ?>" name="nama_belakang"
                placeholder="">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" value="<?php echo e($article->alamat); ?>" name="alamat" placeholder="">
        </div>
        <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" class="form-control" value="<?php echo e($article->pekerjaan); ?>" name="pekerjaan" placeholder="">
        </div>
        <div class="form-group">
            <label>Riwayat</label>
            <input type="text" class="form-control" value="<?php echo e($article->riwayat); ?>" name="riwayat" placeholder="">
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" class="form-control" value="<?php echo e($article->lokasi); ?>" name="lokasi" placeholder="">
        </div>
        <div class="form-group">
            <label>tanggal</label>
            <input type="text" class="form-control" value="<?php echo e($article->tanggal); ?>" name="tanggal" placeholder="">
        </div>
</div>
<?php $__env->stopSection(); ?>

<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
<?php $__env->startSection('sidebar'); ?>
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
    <div class=" form-group">
        <label></label>
        <input type="submit" class="form-control btn btn-primary" value="Edit">
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\basdat\resources\views/edit.blade.php ENDPATH**/ ?>