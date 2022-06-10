<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
    
    <?php $__env->startSection('header'); ?>
    <h1>Input Data</h1>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('konten'); ?>
    <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
    </div>
    </body>
    </html>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SONY\Desktop\modul7\resources\views/template.blade.php ENDPATH**/ ?>