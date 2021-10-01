@extends('front.layout.layout')

@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Login</li>
        </ul>
        <h3> Login</h3>
        <div class="well">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                </div>
            @endif
            <form action="{{ route('loginCheck') }}" method="post" class="form-horizontal">
                @csrf
                <div class="control-group">
                    <lable class="control-label" for="email">
                        Email <sup>*</sup>
                    </lable>
                    <div class="controls">
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                </div>

                <div class="control-group">
                    <lable class="control-label" for="password">
                        Password <sup>*</sup>
                    </lable>
                    <div class="controls">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <input type="submit" value="Login">
                    </div>
                </div>

                <div style="margin-left: 22%;">
                    <p>Don't have an account? <a style="text-decoration: none; color: rgb(29, 176, 221)"
                            href="{{ route('user_register') }}">Register here..</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
