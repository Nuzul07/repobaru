@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <head>
            <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        </head
        <div class="col-md-8">
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
<div id="form">
<div class="logo">
<h1 class="text-center head">Register</h1>
</div>
        <div class="form-item">
            <p class="formLabel"></p>
            <input type="text" name="name" id="email" class="form-style" placeholder="Nama" />
        </div>
        <div class="form-item">
            <p class="formLabel"></p>
            <input type="email" name="email" id="email" class="form-style" placeholder="Email" />
        </div>
        <div class="form-item">
            <p class="formLabel"></p>
            <input type="text" name="status" id="email" class="form-style" placeholder="Status" />
        </div>
        <div class="form-item">
            <p class="formLabel"></p>
            <input type="password" name="password" id="email" class="form-style" placeholder="Password" />
        </div>  
        <div class="form-item">
            <p class="formLabel"></p>
            <input type="password_confirmation" name="password_confirmation" id="email" class="form-style" placeholder="Confirm Password" />
        </div>
        <div class="form-item">
        <input type="submit" class="login pull-right" value="Register">
        <div class="clear-fix"></div>
        </div>                     
</div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                               
                            </div>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection