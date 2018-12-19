@extends('layouts.master')

@section('content')
    <h1>Register</h1>

    <p class='registerRow1Col1'>Already have an account? <a href='/login'>Login here...</a></p>

    <form class='registerContainer' method='POST' action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class='row2col1'>
            <label for='name'>Name</label><br>
            <input id='name' type='text' name='name' value='{{ old('name') }}' required autofocus>
        </div>

        <div class='row3col1'>
            <label for='email'>E-Mail Address</label><br>
            <input id='email' type='email' name='email' value='{{ old('email') }}' required>
        </div>

        <div class='row4col1'>
            <label for='password'>Password (min: 6)</label><br>
            <input id='password' type='password' name='password' required>
        </div>

        <div class='row5col1'>
            <label for='password-confirm'>Confirm Password</label><br>
            <input id='password-confirm' type='password' name='password_confirmation' required>
        </div>

        <button type='submit' class='btn btn-primary row6col1'>Register</button>
    </form>
@endsection