

<?php $__env->startSection('header'); ?>
<h1>Edit Siswa</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-right">
                <a class="btn btn-secondary" href="<?php echo e(route('sisw.index')); ?>"> Back</a>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('sisw.update',$sisw->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="nama" value="<?php echo e($sisw->nama); ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nim:</strong>
                <input type="text" name="nim" value="<?php echo e($sisw->nim); ?>" class="form-control" placeholder="nim">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                <textarea class="form-control" style="height:150px" name="email" placeholder="Content"><?php echo e($sisw->email); ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>alamat:</strong>
                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Content"><?php echo e($sisw->alamat); ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SONY\Desktop\modul7\resources\views/sisw/edit.blade.php ENDPATH**/ ?>