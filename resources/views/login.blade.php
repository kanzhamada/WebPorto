@extends('layout.main')

@section('container')
<link rel="stylesheet" href="css/login.css">
<div class="row justify-content-center" style="margin-top: 100px">
  <div class="col-md-4">

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<main class="form-signin w-100 m-auto">
    <form action="/login" method="post">
      @csrf
        <h1 class="h3 mb-3 fw-normal" style="color: white">Please sign in</h1>
  
   
            
      <div class="form-floating">
        <label for="email" style="color: white">Email address</label>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>

        
      </div>

      <p></p>
      <div class="form-floating">
        <label for="password" style="color: white">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        
      </div>
  
      
      <button class="mt-3 btn btn-primary w-100 py-2" type="submit">Sign in</button>
 
      <p class="mt-3 mb-3 text-body-secondary text-center" style="color: white">&copy; 2024</p>
    
    </form>

    

  </main>
</div>
</div>
  @endsection