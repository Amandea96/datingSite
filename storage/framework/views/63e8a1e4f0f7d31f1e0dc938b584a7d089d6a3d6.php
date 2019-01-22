<?php $__env->startSection('title','Lista Przyjaciół'); ?>


<?php $__env->startSection('navigation'); ?>

							##parent-placeholder-ad8317924b75d19f07472d73181bd0a61bca481b##

							<li ><a href="<?php echo e(url('/')); ?>">Główna</a></li>
							<li class='current'><a href="<?php echo e(route('listPerson.show')); ?>">Przeglądaj</a></li>
							
							
							
				
<?php $__env->stopSection(); ?>



<?php $__env->startSection('descr'); ?>		
##parent-placeholder-425e3425d812044c91d56a3aa40f3b318df09872##

<span class="icon fa-heart-o"></span>
<h2>Lista osób</h2>
<p>Zrób krok, aby poznać nowych interesujących ludzi.</p>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('contbig'); ?>








								<!--{if $msgs->isMessage()}
								<div class="messages bottom-margin">
								<ul>
								{foreach $msgs->getMessages() as $msg}
								{strip}
								<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
								{/strip}
								{/foreach}
								</ul>
							</div>
							{/if}-->
<!-- ------------------------------------------------------------------------------------ -->

<?php $__currentLoopData = $myfriends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mfr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<section class="boxsh">
							<div>
							<header class="major">
							
								<h2><strong><a href="<?php echo e(route('chatting', ['id' => $mfr->id])); ?>"><?php echo e($mfr->name); ?></a></strong></h2>
								
							</header>

							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
									
										<a href="<?php echo e(route('chatting', ['id' => $mfr->id])); ?>" class="image featured"><img src="<?php echo e($mfr->image); ?>" alt="" /></a></p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										
										<header>
											<h3>Dane</h3>
										</header>
										<p>
										
										
										 <table class='default'">
            
            <tr>
                <th>Płeć</th>
                <td><?php echo e($mfr->gender); ?></td>
            </tr>
            <tr>
                <th>Wiek</th>
                <td><?php echo e($mfr->age); ?>

				
				
				
				
</td> 
				
       </tr>
            <tr>
                <th>Wzrost</th>
                <td><?php echo e($mfr->height); ?></td>
            </tr>
        </table>
		</p>
									</section>

								</div>
							</div>
							
							
							
							</div>
							</section>
							
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
								
										
										
	



<?php $__currentLoopData = $myfriends2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mfr2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<section class="boxsh">
							<div>
							<header class="major">
							
								<h2><strong><a href="<?php echo e(route('chatting', ['id' => $mfr2->id])); ?>"><?php echo e($mfr2->name); ?></a></strong></h2>
								
							</header>

							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
									
										<a href="<?php echo e(route('chatting', ['id' => $mfr2->id])); ?>" class="image featured"><img src="<?php echo e($mfr2->image); ?>" alt="" /></a></p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										
										<header>
											<h3>Dane</h3>
										</header>
										<p>
										
										
										 <table class='default'">
            
            <tr>
                <th>Płeć</th>
                <td><?php echo e($mfr2->gender); ?></td>
            </tr>
            <tr>
                <th>Wiek</th>
                <td><?php echo e($mfr2->age); ?>

				
				
				
				
</td> 
				
       </tr>
            <tr>
                <th>Wzrost</th>
                <td><?php echo e($mfr2->height); ?></td>
            </tr>
        </table>
		</p>
									</section>

								</div>
							</div>
							
							
							
							</div>
							</section>
							
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
									
										
										
	



										
										
	
	<?php $__env->stopSection(); ?>									
<?php $__env->startSection('contsmall'); ?>

<div class="bottom-margin">
<form method="POST" class="pure-form pure-form-stacked" action="<?php echo e(route('searchFriend', ['id' =>  session('iduser')])); ?>">
	<legend>WYSZUKIWANIE</legend>
	<?php echo csrf_field(); ?>
	
	<fieldset>
		<input type="text" placeholder="name" name="name"  />
		
	
</div>	
<!--<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}personNew">+ Nowa osoba</a>
</div>	-->


 <label for="gender">Płeć</label>
		<div class="12u$">
        <div class="select-wrapper">
           
            <select name="gender" >
			<option value>       - Gender -     </option>
			<option value="Kobieta"> Kobieta </option>
			<option value="Mężczyzna"> Mężczyzna </option> </select>
			</div></div>
			
			
        
        
          
	   <label for="prefM">Czy preferujesz mężczyzn?</label>
        <div class="12u$">
        <div class="select-wrapper">
           
         <select name="prefM" >
			<option value> Wybierz </option>
			<option value="Tak"> Tak </option>
			<option value="Nie"> Nie </option> 	
			</select>
        </div></div>
	   
	
	   <label for="prefW">Czy preferujesz kobiety?</label>
        <div class="12u$">
        <div class="select-wrapper">
           
         <select name="prefW" >
			<option value> Wybierz </option>
			<option value="Tak"> Tak </option>
			<option value="Nie"> Nie </option> 	
			</select>
        </div></div>
		

		<label for="complex">Cera</label>
        <div class="12u$">
        <div class="select-wrapper">
           
          <select name="complex" >
			<option value> Wybierz </option>
			<option value="Biała"> Biała </option>
			<option value="Oliwkowa"> Oliwkowa </option>
			<option value="Śniada"> Śniada </option>
			
			<option value="Jasnobrązowa"> Jasnobrązowa </option>	
			<option value="Brązowa"> Brązowa </option>	
			<option value="Ciemnobrązowa"> Ciemnobrązowa </option>		
			</select>
        </div></div>
		
        
        
		
		
		
		
		<label for="ecolor">Kolor oczu</label>
        <div class="12u$">
        <div class="select-wrapper">
           
          <select name="ecolor" >
			<option value> Wybierz </option>
			<option value="Niebieskie"> Niebieskie </option>
			<option value="Szare"> Szare </option>
			<option value="Zielone"> Zielone</option>
			<option value="Brązowe"> Brązowe </option>	
			<option value="Piwne"> Piwne </option>	
			</select>
        </div></div>
		
		
       
		

		<label for="hcolor">Kolor włosów</label>
        <div class="12u$">
        <div class="select-wrapper">
           
           <select name="hcolor" >
			<option value> Wybierz </option>
			<option value="Białe"> Białe </option>
			<option value="Blond"> Blond </option>
			<option value="Ciemny blond"> Ciemny blond</option>
			<option value="Rude"> Rude </option>	
			<option value="Szatyn"> Szatyn </option>
			<option value="Brunet"> Brunet </option>
			<option value="Czarne"> Czarne</option>
			<option value="Inne/Zmienne"> Inne/Zmienne</option>
			</select>
        </div></div>
        
        <div >
            <label for="city">Miasto zamieszkania</label>
            <input id="city" type="text" placeholder="City" name="city">
        </div>
        
        <div >
            <label for="nation">Kraj</label>
            <input id="nation" type="text" placeholder="Nation" name="nation" >
        </div>
	
			
			
        
        
       
	   
		
		
</br>
		<ul class="buttons">
			<li><button type="submit" class="special">Filtruj</button></li>
			
			
			</ul>
		
</fieldset>
</form>

	






	






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>