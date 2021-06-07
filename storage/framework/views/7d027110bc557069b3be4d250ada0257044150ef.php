<!-- membuat kerangka dari master.blade.php -->


<!-- membuat komponen title sebagai judul halaman -->
<?php $__env->startSection('title', 'Menambah Artikel'); ?>

<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
<?php $__env->startSection('main'); ?>
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/add_process">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>nama depan</label>
            <input type="text" class="form-control" name="nama_depan" placeholder="">
        </div>
        <div class="form-group">
            <label>nama belakang</label>
            <input type="text" class="form-control" name="nama_belakang" placeholder="">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="">
        </div>
        <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" placeholder="">
        </div>
        <div class="form-group">
            <label>Riwayat</label>
            <input type="text" class="form-control" name="riwayat" placeholder="">
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" class="form-control" name="lokasi" placeholder="">
        </div>
        <div class="form-group">
            <label>tanggal</label>
            <input type="text" class="form-control" name="tanggal" placeholder="">
        </div>

</div>
<?php $__env->stopSection(); ?>

<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
<?php $__env->startSection('sidebar'); ?>
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
    <div class="form-group">
        <label></label>
        <input type="submit" class="form-control btn btn-primary" value="Upload">
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamp\htdocs\basdat\resources\views/add.blade.php ENDPATH**/ ?>