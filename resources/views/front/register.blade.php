@extends('front.layout.layout')

@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Register</li>
        </ul>
        <h3> Register</h3>
        <div class="well">
            <form action="{{ route('user_store') }}" method="post" class="form-horizontal">
                @csrf
                <div class="control-group">
                    <lable class="control-label" for="first_name">
                        First Name <sup>*</sup>
                    </lable>
                    <div class="controls">
                        <input type="text" id="first_name" required name="first_name" placeholder="First Name...">
                    </div>
                </div>

                <div class="control-group">
                    <lable class="control-label" for="last_name">
                        Last Name <sup>*</sup>
                    </lable>
                    <div class="controls">
                        <input type="text" id="last_name" required name="last_name" placeholder="Last Name...">
                    </div>
                </div>

                <div class="control-group">
                    <lable class="control-label" for="email">
                        Email <sup>*</sup>
                    </lable>
                    <div class="controls">
                        <input type="email" id="email" required name="email" placeholder="Email...">
                    </div>
                </div>

                <div class="control-group">
                    <lable class="control-label" for="password">
                        Password <sup>*</sup>
                    </lable>
                    <div class="controls">
                        <input type="password" id="password" required name="password" placeholder="Password...">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Register">
                    </div>
                </div>

                <div style="margin-left: 22%;">
                    <p>Already have an account? <a style="text-decoration: none; color: rgb(29, 176, 221)"
                            href="{{ route('user_login') }}">Login here..</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
