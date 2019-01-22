@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Chat') }}</div>

                <div class="card-body">
					@foreach ($chat as $msgs)
                


				 <div class="media text-muted pt-3">
				 <img   title={{$msgs->name}} class="bd-placeholder-img mr-2 rounded" src="{{$msgs->image}}" alt={{$msgs->name}}    height="32"/>
     
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark"> {{$msgs->name}}     {{$msgs->date_msg}} </strong>
       {{$msgs->message}} 
      </p>
    </div>   
					

			
@endforeach
                       
						
</br>

<form method="POST" action="{{ route('sendMsg',['id' => $idreceiver]) }}">
						  {{ csrf_field() }}
						
                            
<div class="row">
                            <div class="col-10">
                                <input id="message" type="text" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message"  >

                                @if ($errors->has('message'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
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
@endsection
