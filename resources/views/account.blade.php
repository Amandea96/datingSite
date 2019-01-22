@extends('layouts.main')
@section('title')
{{$ac["name"]}}
@endsection
			
			@section('navigation')
			@parent

							<li ><a href="{{ url('/') }}">Główna</a></li>
							<li ><a href="{{ route('listPerson.show') }}">Przeglądaj</a></li>
							
							
							
				
@endsection



@section('descr')		
@parent
					
						<span class="icon fa-heart-o"></span>
						<h2><strong>{{$ac['name']}}</strong></h2>
						<p>Where things on the right ... accompany that on the left.</p>
					</header>
					@endsection
					
					
					
					
					
					
												
												
												
									 
												@section('contsmall')
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
														<td class="prof">{{$ac['gender']}}</td>
														
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
														<td class="prof">{{$ac['age']}}</td>
														
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
														<td class="prof">{{$ac['city']}}</td>
														
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
														<td class="prof">M{{$ac['prefM']}}/K{{$ac['prefW']}}</td>
														
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
														<td class="prof">{{$ac['nation']}}</td>
														
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
														<td class="prof">{{$ac['ecolor']}}/{{$ac['hcolor']}}</td>
														
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
														<td class="prof">{{$ac['complex']}}</td>
														
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
														<td class="prof">{{$ac['height']}}</td>
														
													</tr>
													
												</tbody>
											</table>
											
											
</div>
													
		
	@endsection
				
				@section('contbig')
				
				<header>
				<h3>{{$ac['name']}}</h3>
				</header>
				<div class="button_near">
			
				
							
				
				<ul class="buttons">
			
			@if(Auth::id()==$ac['id'])
			<li><a class="button small" href="{{ route('showFriends', ['id' => $ac['id']])  }}">Znajomi</a></li>	
			
			
			@elseif ($mfriend->isEmpty())
							<li><a href="{{ route('addFriend', ['id' => $ac['id']]) }}" class="button small">Dodaj do znajomych</a></li>
							
							<li><a class="button small" href="">Znajomi</a></li>
								
							@else
							<li><a class="button small" href="{{ route('delFriend', ['id' => $ac['id']]) }}">Usuń ze znajomych</a></li>
							<li><a class="button small" href="{{ route('showFriends', ['id' => $ac['id']]) }}">Znajomi</a></li>
			
			
			
			@endif
			</ul>
			
			<!--{$fr->id_person2}
			
			<ul class="buttons">
			
			<li><a class="button small" href="{$conf->action_root}addFriend/{$form->id_person}">Dodaj do znajomych</a></li>
			<li><a class="button small" href="{$conf->action_root}friendListAnother/{$form->id_person}">Znajomi</a></li>
			</ul>-->
		</div>
				</br>
				<a href="#" class="image featured"><img src="{{$ac['image']}}" alt="" /></a>
				</br><p>{{$ac['description']}}</p>
				
				
				
			
				<!--{foreach $descrip as $d}
			{strip}
			
			
			<p>{$d['text']}</p>
			
			

			{/strip}
		{/foreach}	-->
				@endsection									

					

				
		
			
			
			
			
					@section('posty')
					
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
					@foreach ($postmsg as $post)
                


				 <div class="media text-muted pt-3">
				 <img   title={{$post->name}} class="bd-placeholder-img mr-2 rounded" src="{{$post->image}}" alt={{$post->name}}    height="32"/>
     
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark"> {{$post->title}}     {{$post->date_desc}} </strong>
      </br> {{$post->text}} 
      </p>
    </div>   
					

			
@endforeach
                       
						
</br>
@if(Auth::id()==$ac['id'])
<form method="POST" action="{{ route('sendpost',['id' => Auth::user()->id]) }}">
						  {{ csrf_field() }}
						
                            
<div class="row">
                            <div class="col-5">
                                <input placeholder="TYTUŁ" id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title"  >

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                 @endif
                            </div>
                       
<div class="col-5">
                                <input placeholder="TEXT" id="text" type="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="text"  >

                                @if ($errors->has('text'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                 @endif
                            </div>
                        
                            <div class="col-2">
                                <button  class="btn btn-primary">
                                    {{ __('Wyślij') }}
                                </button>
                            </div>
                        </div>
                    </form>
						

						  
						
                </div>
            </div>
        </div>
		
    </div>
	
</div>
@endif
</section>					
					
					
</main>					
					
	
				@endsection		

			
				
				
				
				
			

			
		
					

				
				

			