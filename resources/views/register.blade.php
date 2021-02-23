@extends('master')
@section("content")
<div class = "container custom-login-page" >
    <div class = "row">
        <div class = "col-sm-4 col-sm-offset-4 round2" >
            
            <form action="register" method ="POST">
                @csrf
                <h1>Register</h1>
                <div class="form-group">
                    <label for="userEmail">Email address</label>
                    <input type="email" name = "email" class="form-control" id="user_email" placeholder="eaxmple@mail.com" style="font-style:italic">
                </div>

                <div class="form-group">
                    <label for="userPass">Password</label>
                    <input type="password" name = "password" class="form-control" id="user_pass" placeholder="Password" style="font-style:italic">
                </div>
                <hr>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection 