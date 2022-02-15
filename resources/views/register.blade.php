@extends('layout')

@section('body')
    <div class="topdesc mt-5">
        <div class="container">
            <h3 class="text-center bg-secondary">Sign Up</h3>
            <div class="container border border-5 mb-5 bg-info">
                <form enctype="multipart/form-data" method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                      <label for="firstname" class="form-label">First Name:</label>
                      <input type="firstname" class="form-control" name='firstname' id="firstname" aria-describedby="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="middlename" class="form-label">Middle Name:</label>
                        <input type="middlename" class="form-control" name='middlename' id="middlename" aria-describedby="middlename">
                      </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name:</label>
                        <input type="lastname" class="form-control" name='lastname' id="lastname" aria-describedby="lastname">
                      </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name='email' id="email" aria-describedby="email">
                      </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name='password' id="password">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">gender:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="gender" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Male
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="2" name="gender" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Female  
                            </label>
                          </div>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role:</label>
                        <select class="form-select" aria-label="Default select example" name='role'>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="displaypicture" class="form-label">Display Picture:</label>
                        <input class="form-control" type="file" name='displaypicture' id="displaypicture">
                      </div>
                    <div class="mb-3 item-align-center">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit" value="signup">Submit</button>
                          </div>
                    </div>
                    <div class="mb-3 text-center">
                     <a href="/Login"><u>Already have an account? click here to log in</u></a>
                  </div>
                  </form>
                  @if ($errors->first())
                    <p style="color: rgb(255, 174, 0)">{{$errors->first()}}</p>
                  @endif
            </div>
        </div>
        
    </div>
@endsection