

<!-- memberikan judul di tab sesuai dengan judul artikel yang sedang dibaca -->
<?php $__env->startSection('title'); ?>
<?php echo e($article->nama_depan); ?>

<?php $__env->stopSection(); ?>

<!-- menampilkan gambar, judul, dan isi artikel -->
<?php $__env->startSection('main'); ?>
<div class="col-md-7 col-sm-12 mb-5 bg-white p-0">

    <div class="p-4">
        <h2><?php echo e($article->nama_depan); ?></h2>
        <p class="mt-5"><?php echo e($article->nama_belakang); ?></p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<!-- menampilkan tombol kembali ke halaman utama -->
<?php $__env->startSection('sidebar'); ?>
<div class="col-md-4 offset-md-1 col-sm-12 bg-white p-4 h-100">
    <center>
        <a href="/">
            <button class="btn btn-info text-white w-100">Kembali</button>
        </a>
    </center>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\basdat\resources\views/detail.blade.php ENDPATH**/ ?>