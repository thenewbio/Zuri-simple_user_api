<!DOCTYPE html>
<html>
<head>
<title>API TASK</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
<div class="container">
<a class="navbar-brand mr-auto" href="#">Simple User API</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
@guest
<li class="nav-item">
<a class="nav-link" href="{{ url('/register') }}">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ url('/api/user/create') }}">Register</a>
</li>
@endguest
</ul>
</div>
</div>
</nav>
@yield('content')
<!-- <p> Okama </p> -->
<form method="POST" id="validateajax" action="/api/user/create" name="registerform">
              <div class="form-group">
              <label>Name</label>
                <input type="text"id = "name" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror form-control" />
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
                <label>Email</label>
                <input type="text" id= "email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror form-control" />

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @csrf
              </div>
               <div class="form-group">
                <label>Password</label>
                <input type="password" id="password" name="password"  class="@error('password') is-invalid @enderror form-control" />
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
               <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password-repeat"  class="@error('password-repeat') is-invalid @enderror form-control" />
                @error('password-repeat')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <button class="btn btn-primary">Register</button>
              </div>
            </form>
</body>
</html>