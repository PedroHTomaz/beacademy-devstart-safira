@extends('layouts.template-main')
@section('title','Entrar')

@section('content')

            

		<div class='py-3 shadow-sm'>
			<div class='d-flex justify-content-between container'>
				<div>
					<a href="/" class='h5 fw-bold text-decoration-none'><i class="fa-solid fa-diamond"></i> SAFIRA</a>
				</div>
			</div>
		</div>

        <main class="container d-flex gap-5 align-items-center flex-lg-row flex-column justify-content-center">
    	    <div class="col-6">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
        	    <img class="img-fluid" src="https://i.imgur.com/Gnd0nAf_d.webp?maxwidth=760&fidelity=grand">
    	    </div>
			<div class='w-100'>
   	        <div class="">
   		        <div class="text-center">
        	        <i class="fa-solid fa-diamond h1 text-primary"></i>
        	        <h1 class="text-primary h1 my-5">Entrar</h1>
    	        </div>

               
            </div>
    		    <form action="{{ route('login') }}" class="rounded shadow p-3" method="POST">
					@csrf
        		    <input type="email" placeholder="E-mail" class="form-control mb-3" name="email" required>
        		    <input type="password" placeholder="Senha" class="form-control mb-3" name="password" required>
        		    <button type='submit' class='btn btn-primary d-block w-100'> {{ __('Log in') }}</button>
    		    
                     <div class='py-3'>
                        <label for="remember_me" class="text-primary">
                            <input id="remember_me" type="checkbox" name="remember">
                            <span class="">{{ __('Remember me') }}</span>
                        </label>
   	                 </div>


                      <div class="d-flex justify-content-between">
                        @if (Route::has('password.request'))
                            <a class="nav-link text-primary p-0" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <a href="/register" class='nav-link text-primary p-0'>Cadastre-se</a>
                     </div> 
                </form>
				</div>                                 
           </main>

@endsection