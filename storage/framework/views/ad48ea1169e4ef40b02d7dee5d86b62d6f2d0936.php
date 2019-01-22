<?php $__env->startSection('title'); ?>
<?php echo e($ac["name"]); ?>

<?php $__env->stopSection(); ?>
			
			<?php $__env->startSection('navigation'); ?>
			##parent-placeholder-ad8317924b75d19f07472d73181bd0a61bca481b##

							<li ><a href="<?php echo e(url('/')); ?>">Główna</a></li>
							<li ><a href="<?php echo e(route('listPerson.show')); ?>">Przeglądaj</a></li>
							
							
							
				
<?php $__env->stopSection(); ?>



<?php $__env->startSection('descr'); ?>		
##parent-placeholder-425e3425d812044c91d56a3aa40f3b318df09872##
					
						<span class="icon fa-heart-o"></span>
						<h2><strong><?php echo e($ac['name']); ?></strong></h2>
						<p>Where things on the right ... accompany that on the left.</p>
					</header>
					<?php $__env->stopSection(); ?>
					
					
					
					
					
					
												
												
												
									 
												<?php $__env->startSection('contsmall'); ?>
												<header>
													<h3></h3>
												</header> 
											<div>
											<table class="prof">
												<thead class="prof">
													<tr class="prof">
														<th class="prof">Płeć</th>
														
													</tr>
												</thead>
												<tbody class="prof">
													<tr class="prof">
														<td class="prof"><?php echo e($ac['gender']); ?></td>
														
													</tr>
													
												</tbody>
											</table>

											<table class="prof">
												<thead class="prof">
													<tr class="prof">
											<th class="prof">Wiek</th>
														
													</tr>
												</thead>
												<tbody class="prof">
													<tr class="prof">
														<td class="prof"><?php echo e($ac['age']); ?></td>
														
													</tr>
													
												</tbody>
											</table>
											
											</table>

											<table class="prof">
												<thead class="prof">
													<tr class="prof">
											<th class="prof">Miasto</th>
														
													</tr>
												</thead>
												<tbody class="prof">
													<tr class="prof">
														<td class="prof"><?php echo e($ac['city']); ?></td>
														
													</tr>
													
												</tbody>
											</table>
											
											
											<table class="prof">
												<thead class="prof">
													<tr class="prof">
											<th class="prof">Preferencje</th>
														
													</tr>
												</thead>
												<tbody class="prof">
													<tr class="prof">
														<td class="prof">M<?php echo e($ac['prefM']); ?>/K<?php echo e($ac['prefW']); ?></td>
														
													</tr>
													
												</tbody>
											</table>
											
											
											<table class="prof">
												<thead class="prof">
													<tr class="prof">
											<th class="prof">Kraj</th>
														
													</tr>
												</thead>
												<tbody class="prof">
													<tr class="prof">
														<td class="prof"><?php echo e($ac['nation']); ?></td>
														
													</tr>
													
												</tbody>
											</table>
											
											<table class="prof">
												<thead class="prof">
													<tr class="prof">
											<th class="prof">Kolor oczu/włosów</th>
														
													</tr>
												</thead>
												<tbody class="prof">
													<tr class="prof">
														<td class="prof"><?php echo e($ac['ecolor']); ?>/<?php echo e($ac['hcolor']); ?></td>
														
													</tr>
													
												</tbody>
											</table>
											
											
											
											<table class="prof">
												<thead class="prof">
													<tr class="prof">
											<th class="prof">Cera</th>
														
													</tr>
												</thead>
												<tbody class="prof">
													<tr class="prof">
														<td class="prof"><?php echo e($ac['complex']); ?></td>
														
													</tr>
													
												</tbody>
											</table>
											
											
											<table class="prof">
												<thead class="prof">
													<tr class="prof">
											<th class="prof">Wzrost</th>
														
													</tr>
												</thead>
												<tbody class="prof">
													<tr class="prof">
														<td class="prof"><?php echo e($ac['height']); ?></td>
														
													</tr>
													
												</tbody>
											</table>
											
											
</div>
													
		
	<?php $__env->stopSection(); ?>
				
				<?php $__env->startSection('contbig'); ?>
				
				<header>
				<h3><?php echo e($ac['name']); ?></h3>
				</header>
				<div class="button_near">
			
				
							
				
				<ul class="buttons">
			
			<?php if(Auth::id()==$ac['id']): ?>
			<li><a class="button small" href="<?php echo e(route('showFriends', ['id' => $ac['id']])); ?>">Znajomi</a></li>	
			
			
			<?php elseif($mfriend->isEmpty()): ?>
							<li><a href="<?php echo e(route('addFriend', ['id' => $ac['id']])); ?>" class="button small">Dodaj do znajomych</a></li>
							
							<li><a class="button small" href="">Znajomi</a></li>
								
							<?php else: ?>
							<li><a class="button small" href="<?php echo e(route('delFriend', ['id' => $ac['id']])); ?>">Usuń ze znajomych</a></li>
							<li><a class="button small" href="<?php echo e(route('showFriends', ['id' => $ac['id']])); ?>">Znajomi</a></li>
			
			
			
			<?php endif; ?>
			</ul>
			
			<!--{$fr->id_person2}
			
			<ul class="buttons">
			
			<li><a class="button small" href="{$conf->action_root}addFriend/{$form->id_person}">Dodaj do znajomych</a></li>
			<li><a class="button small" href="{$conf->action_root}friendListAnother/{$form->id_person}">Znajomi</a></li>
			</ul>-->
		</div>
				</br>
				<a href="#" class="image featured"><img src="<?php echo e($ac['image']); ?>" alt="" /></a>
				</br><p><?php echo e($ac['description']); ?></p>
				
				
				
			
				<!--{foreach $descrip as $d}
			{strip}
			
			
			<p>{$d['text']}</p>
			
			

			{/strip}
		{/foreach}	-->
				<?php $__env->stopSection(); ?>									

					

				
		
			
			
			
			
					<?php $__env->startSection('posty'); ?>
					
					<main class="py-4 myback">
					
						<section class="wrapper style3 container mypadd">
					<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <header class="major">
								<h2><strong>Posty</strong></h2>
							</header>

                <div class="card-body">
					<?php $__currentLoopData = $postmsg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                


				 <div class="media text-muted pt-3">
				 <img   title=<?php echo e($post->name); ?> class="bd-placeholder-img mr-2 rounded" src="<?php echo e($post->image); ?>" alt=<?php echo e($post->name); ?>    height="32"/>
     
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark"> <?php echo e($post->title); ?>     <?php echo e($post->date_desc); ?> </strong>
      </br> <?php echo e($post->text); ?> 
      </p>
    </div>   
					

			
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
						
</br>
<?php if(Auth::id()==$ac['id']): ?>
<form method="POST" action="<?php echo e(route('sendpost',['id' => Auth::user()->id])); ?>">
						  <?php echo e(csrf_field()); ?>

						
                            
<div class="row">
                            <div class="col-5">
                                <input placeholder="TYTUŁ" id="title" type="text" class="form-control<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" name="title"  >

                                <?php if($errors->has('title')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                 <?php endif; ?>
                            </div>
                       
<div class="col-5">
                                <input placeholder="TEXT" id="text" type="text" class="form-control<?php echo e($errors->has('text') ? ' is-invalid' : ''); ?>" name="text"  >

                                <?php if($errors->has('text')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('text')); ?></strong>
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
<?php endif; ?>
</section>					
					
					
</main>					
					
	
				<?php $__env->stopSection(); ?>		

			
				
				
				
				
			

			
		
					

				
				

			
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>