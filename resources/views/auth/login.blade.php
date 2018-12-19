@extends('layouts.master')

@section('content')

    <h1>Login</h1>

    <p class='loginRow1Col1'>Don't have an account? <a href='/register'>Register here...</a></p>

    <form class='loginContainer' method='POST' action='{{ route('login') }}'>

        {{ csrf_field() }}

        <label for='email'>E-Mail Address</label>
        <input class='row2col1' id='email' type='email' name='email' value='{{ old('email') }}' required autofocus>


        <label for='password'>Password</label>
        <input class='row2col2' id='password' type='password' name='password' required>

        <button type='submit' class='btn btn-primary row2col3'>Login</button>

        <a class='btn btn-link row3col1' href='{{ route('password.request') }}'>Forgot Your Password?</a>

    </form>

@endsection