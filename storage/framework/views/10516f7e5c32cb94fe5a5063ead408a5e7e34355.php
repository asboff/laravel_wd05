<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <?php echo $__env->make('partials.header', ['name' => 'Products'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->

            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="<?php echo e(route('products.store')); ?>" class="form-horizontal form-material mx-2" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php dump($errors->all()); ?>
                            <div class="form-group">
                                <label class="col-md-12">Product's Name</label>
                                <div class="col-md-12">
                                    <input name="name" type="text" class="form-control form-control-line" value=<?php echo e(old('name')); ?>>
                                </div>
                                <?php if($errors->has('name')): ?>
                                    <?php $__currentLoopData = $errors->get('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($error); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Product's Description</label>
                                <div class="col-md-12">
                                    <input name="description" type="text" class="form-control form-control-line" value = <?php echo e(old('description')); ?>>
                                </div>
                                <?php if($errors->has('description')): ?>
                                    <?php $__currentLoopData = $errors->get('description'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($error); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Product's Category</label>
                                <select name="category_id" class="form-control">
                                    <option disabled>Выберите категорию</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Product's Price</label>
                                <div class="col-md-12">
                                    <input name="price" type="text" class="form-control form-control-line" value = <?php echo e(old('price')); ?>>
                                </div>
                                <?php if($errors->has('price')): ?>
                                    <?php $__currentLoopData = $errors->get('price'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($error); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Product's Image</label>
                                <div class="col-md-12">
                                    <input name="image" type="file" class="form-control form-control-line" value = <?php echo e(old('image')); ?>>
                                </div>
                                <?php if($errors->has('image')): ?>
                                    <?php $__currentLoopData = $errors->get('image'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($error); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Active</label>
                                <div class="col-md-12">
                                    <input name="active" type='checkbox' value="1">
                                </div>
                                <?php if($errors->has('active')): ?>
                                    <?php $__currentLoopData = $errors->get('active'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($error); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success text-white">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        All Rights Reserved by Xtreme Admin. Designed and Developed by <a
            href="https://www.wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/products/create.blade.php ENDPATH**/ ?>