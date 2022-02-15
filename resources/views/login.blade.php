@extends('layout')

@section('body')
<div class="topdesc mt-5">
    <div class="container">
        <h3 class="text-center bg-secondary">Login</h3>
        <div class="container border border-5 mb-5 bg-info">
            <form enctype="multipart/form-data" method="POST" action="/log">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name='email' id="email" aria-describedby="email">
                  </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name='password' id="password">
                </div>
                <div class="mb-3 item-align-center">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit" value="signup">Submit</button>
                      </div>
                </div>
                <div class="mb-3 text-center">
                 <a href="/Signin"><u>Don't have an account? click here to sign up</u></a>
              </div>
              </form>
        </div>
    </div>
    
</div>
        
@endsection