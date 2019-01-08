@extends('layouts.app')

@section('content')
<div class="container" style="color: #4d94ff">
    <div class="row justify-content-center">
        <head>
            <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        </head>
        <div class="col-md-8">
            <div id="formWrapper">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

<div id="form">
<div class="logo">
<h1 class="text-center head">Login</h1>
</div>
        <div class="form-item">
            <p class="formLabel"></p>
            <input type="email" name="email" id="email" class="form-style" placeholder="Email" />
        </div>
        <div class="form-item">
            <p class="formLabel"></p>
            <input type="password" name="password" id="password" class="form-style" placeholder="Password" />
            <!-- <div class="pw-view"><i class="fa fa-eye"></i></div> -->
          <!--   <p><a href="#" ><small>Forgot Password ?</small></a></p>     -->
        </div>
        <div class="form-item">
        <input type="submit" class="login pull-right" value="Log In">
        <div class="clear-fix"></div>
        </div>
</div>
</form>
</div>
        </div>
    </div>
</div>
@endsection
