

<?php $__env->startSection('content'); ?>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Siswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="<?php echo e(route('sisw.index')); ?>"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama:</strong>
                <?php echo e($sisw->NIS); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nim:</strong>
                <?php echo e($sisw->NamaSiswa); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SONY\Desktop\modul7\resources\views/sisw/show.blade.php ENDPATH**/ ?>