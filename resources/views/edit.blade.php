@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edycja profilu') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('personEdit',['id' => Auth::user()->id]) }}">
                        @csrf

                       
						
						

						<div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Zdjęcie') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{$aced['image']}}" >

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Płeć') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{$aced['gender']}}" required>

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="prefM" class="col-md-4 col-form-label text-md-right">{{ __('Czy preferujesz mężczyzn?') }}</label>

                            <div class="col-md-6">
                                <input id="prefM" type="text" class="form-control{{ $errors->has('prefM') ? ' is-invalid' : '' }}" name="prefM" value="{{$aced['prefM']}}" required>

                                @if ($errors->has('prefM'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prefM') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="prefW" class="col-md-4 col-form-label text-md-right">{{ __('Czy preferujesz kobiety?') }}</label>

                            <div class="col-md-6">
                                <input id="prefW" type="text" class="form-control{{ $errors->has('prefW') ? ' is-invalid' : '' }}" name="prefW" value="{{$aced['prefW']}}" required>

                                @if ($errors->has('prefW'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prefW') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Wiek') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{$aced['age']}}" required>

                                @if ($errors->has('age'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Miasto zamieszkania') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{$aced['city']}}" required>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="nation" class="col-md-4 col-form-label text-md-right">{{ __('Państwo') }}</label>

                            <div class="col-md-6">
                                <input id="nation" type="text" class="form-control{{ $errors->has('nation') ? ' is-invalid' : '' }}" name="nation" value="{{$aced['nation']}}" required>

                                @if ($errors->has('prefM'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="complex" class="col-md-4 col-form-label text-md-right">{{ __('Cera') }}</label>

                            <div class="col-md-6">
                                <input id="complex" type="text" class="form-control{{ $errors->has('complex') ? ' is-invalid' : '' }}" name="complex" value="{{$aced['complex']}}" >

                                @if ($errors->has('complex'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('complex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="ecolor" class="col-md-4 col-form-label text-md-right">{{ __('Kolor oczu') }}</label>

                            <div class="col-md-6">
                                <input id="ecolor" type="text" class="form-control{{ $errors->has('ecolor') ? ' is-invalid' : '' }}" name="ecolor" value="{{$aced['ecolor']}}" >

                                @if ($errors->has('ecolor'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ecolor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="hcolor" class="col-md-4 col-form-label text-md-right">{{ __('Kolor włosów') }}</label>

                            <div class="col-md-6">
                                <input id="hcolor" type="text" class="form-control{{ $errors->has('hcolor') ? ' is-invalid' : '' }}" name="hcolor" value="{{$aced['hcolor']}}" >

                                @if ($errors->has('hcolor'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hcolor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('Wzrost') }}</label>

                            <div class="col-md-6">
                                <input id="height" type="text" class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}" name="height" value="{{$aced['height']}}" >

                                @if ($errors->has('height'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Opis') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{$aced['description']}}" >

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button  class="btn btn-primary">
                                    {{ __('Register') }}
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