@extends('layout.master')
@section('content')
<div class="main-container offset-4">
    <!-- resources/views/login.blade.php -->
    <br><br>
    <form method="POST" action="{{ route('login') }}" class="col-8  bg-white" >
        @csrf

        <div>
            <label for="username" class="col-md-2 col-form-label">UserName</label>
            <input id="username" class="block mt-1 w-full form-control" type="text" name="username" required
                autofocus placeholder="Entrez votre nom d'utilisateur"/>
        </div>

        <div class="mt-4">
            <label for="password" class="col-md-2 col-form-label">Mot de passe</label>
            <input id="password" class="block mt-1 w-full form-control" type="password" name="password" required
                placeholder="Votre mot de passe" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <input type="checkbox" id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
          
              
        </div>
        <button class="bg-white rounded bbcar-color fw-bold offset-5">
            <i class="bx bx-log-in-circle"></i>  <strong>Se connecter</strong>
          </button> 
    </form>


</div>
@endsection