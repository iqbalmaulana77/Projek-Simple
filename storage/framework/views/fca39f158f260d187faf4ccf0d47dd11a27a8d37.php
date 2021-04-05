
<?php $__env->startSection('title','Data Masyarakat'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
             <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Data Masyarakat</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select class="form-select shadow-none row border-top">
                                        <option>2021-04</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No</th>
                                            <th class="border-top-0">Nik</th>
                                            <th class="border-top-0">Nama</th>
                                            <th class="border-top-0">Username</th>
                                            <th class="border-top-0">No Telephone</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $masyarakat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($msy->nik); ?></td>
                                            <td><?php echo e($msy->nama); ?></td>
                                            <td><?php echo e($msy->username); ?></td>
                                            <td><?php echo e($msy->telp); ?></td>
                                            <td>
                                                <form class="text-center d-inline" action="<?php echo e(url('/admin/delete_data_masyarakat/'.$msy->nik)); ?>" method="POST" aria-expanded="false">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button type="submit" class="hide-menu btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../tamplate_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Folder_iqbal\pengaduan_fix\resources\views/admin/data_masyarakat.blade.php ENDPATH**/ ?>