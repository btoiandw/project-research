@extends('layouts.app')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@section('content')
    <div class="contact-form">
        <div class="d-grid d-md-flex justify-content-md-center">
            <img alt="" class="avatar" src="{{ asset('img/logo-kpru.png') }}">
            <h5>Research and Development Institute</h5>
        </div>
        @if ($message = Session::get('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    /* title: 'Oops...', */
                    text: 'Username or Password Incorrect!',
                    /*  footer: '<a href="">Why do I have this issue?</a>' */
                });
            </script>
        @endif
        @if (count($errors) > 0)
            {{-- <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>Username or Password Incorrect</li>
                @endforeach
            </ul>
        </div> --}}
        @endif

        <form id="form-validation" name="form-validation" method="POST" action="{{ route('login') }}">
            @csrf
            <label class="form-label">Username</label>
            <input
                style="border: none;border-bottom: 1px solid rgb(196, 196, 196);background: transparent;outline: none;height: 40px;color: #000;font-size: 16px;"
                placeholder="Enter Username" name="username" type="text" >
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-username"placeholder="Enter Password" >
            <div class="d-grid d-md-flex justify-content-md-center">
                <button type="submit" value="Sign in" name="login">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
@endsection
