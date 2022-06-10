
<?php $__env->startSection('header'); ?>
<h1>Data Mahasiswa</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
        </div>
    </div>

    <?php if($message = Session::get('succes')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>
       
        <div class="row">
            <?php $__currentLoopData = $sisw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6">
                <div class="mb-4">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title"><?php echo e($siswa->nama); ?></h5>
                                    <h6 class="card-title"><?php echo e($siswa->nim); ?></h6>
                                    <h6 class="card-title"><?php echo e($siswa->alamat); ?></h6>
                                </div>
                            
                                <div class="col">
                                    <form action="<?php echo e(route('sisw.destroy',$siswa->id)); ?>" method="POST">
                                        <a class="fa fa-pencil" href="<?php echo e(route('sisw.edit',$siswa->id)); ?>"></a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button  type="submit"  class="btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <span><?php echo e($siswa->email); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
        
    </table><br><br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SONY\Desktop\modul7\resources\views/sisw/index.blade.php ENDPATH**/ ?>