<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						
						
						

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						
						

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Zdjęcie')); ?></label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control<?php echo e($errors->has('image') ? ' is-invalid' : ''); ?>" name="image" value="<?php echo e(old('image')); ?>" >

                                <?php if($errors->has('image')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('image')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Płeć')); ?></label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>" name="gender" value="<?php echo e(old('gender')); ?>" required>

                                <?php if($errors->has('gender')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('gender')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="prefM" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Czy preferujesz mężczyzn?')); ?></label>

                            <div class="col-md-6">
                                <input id="prefM" type="text" class="form-control<?php echo e($errors->has('prefM') ? ' is-invalid' : ''); ?>" name="prefM" value="<?php echo e(old('prefM')); ?>" required>

                                <?php if($errors->has('prefM')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('prefM')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="prefW" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Czy preferujesz kobiety?')); ?></label>

                            <div class="col-md-6">
                                <input id="prefW" type="text" class="form-control<?php echo e($errors->has('prefW') ? ' is-invalid' : ''); ?>" name="prefW" value="<?php echo e(old('prefW')); ?>" required>

                                <?php if($errors->has('prefW')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('prefW')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Wiek')); ?></label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control<?php echo e($errors->has('age') ? ' is-invalid' : ''); ?>" name="age" value="<?php echo e(old('age')); ?>" required>

                                <?php if($errors->has('age')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('age')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Miasto zamieszkania')); ?></label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control<?php echo e($errors->has('city') ? ' is-invalid' : ''); ?>" name="city" value="<?php echo e(old('city')); ?>" required>

                                <?php if($errors->has('city')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('city')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="nation" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Państwo')); ?></label>

                            <div class="col-md-6">
                                <input id="nation" type="text" class="form-control<?php echo e($errors->has('nation') ? ' is-invalid' : ''); ?>" name="nation" value="<?php echo e(old('nation')); ?>" required>

                                <?php if($errors->has('prefM')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('nation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="complex" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Cera')); ?></label>

                            <div class="col-md-6">
                                <input id="complex" type="text" class="form-control<?php echo e($errors->has('complex') ? ' is-invalid' : ''); ?>" name="complex" value="<?php echo e(old('complex')); ?>" >

                                <?php if($errors->has('complex')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('complex')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="ecolor" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Kolor oczu')); ?></label>

                            <div class="col-md-6">
                                <input id="ecolor" type="text" class="form-control<?php echo e($errors->has('ecolor') ? ' is-invalid' : ''); ?>" name="ecolor" value="<?php echo e(old('ecolor')); ?>" >

                                <?php if($errors->has('ecolor')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('ecolor')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="hcolor" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Kolor włosów')); ?></label>

                            <div class="col-md-6">
                                <input id="hcolor" type="text" class="form-control<?php echo e($errors->has('hcolor') ? ' is-invalid' : ''); ?>" name="hcolor" value="<?php echo e(old('hcolor')); ?>" >

                                <?php if($errors->has('hcolor')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('hcolor')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Wzrost')); ?></label>

                            <div class="col-md-6">
                                <input id="height" type="text" class="form-control<?php echo e($errors->has('height') ? ' is-invalid' : ''); ?>" name="height" value="<?php echo e(old('height')); ?>" >

                                <?php if($errors->has('height')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('height')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Opis')); ?></label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" name="description" value="<?php echo e(old('description')); ?>" >

                                <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>