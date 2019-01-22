<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Chat')); ?></div>

                <div class="card-body">
					<?php $__currentLoopData = $chat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msgs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                


				 <div class="media text-muted pt-3">
				 <img   title=<?php echo e($msgs->name); ?> class="bd-placeholder-img mr-2 rounded" src="<?php echo e($msgs->image); ?>" alt=<?php echo e($msgs->name); ?>    height="32"/>
     
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark"> <?php echo e($msgs->name); ?>     <?php echo e($msgs->date_msg); ?> </strong>
       <?php echo e($msgs->message); ?> 
      </p>
    </div>   
					

			
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
						
</br>

<form method="POST" action="<?php echo e(route('sendMsg',['id' => $idreceiver])); ?>">
						  <?php echo e(csrf_field()); ?>

						
                            
<div class="row">
                            <div class="col-10">
                                <input id="message" type="text" class="form-control<?php echo e($errors->has('message') ? ' is-invalid' : ''); ?>" name="message"  >

                                <?php if($errors->has('message')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('message')); ?></strong>
                                    </span>
                                 <?php endif; ?>
                            </div>
                       

                        
                            <div class="col-2">
                                <button  class="btn btn-primary">
                                    <?php echo e(__('Wyślij')); ?>

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