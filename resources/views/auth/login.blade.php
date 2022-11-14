@extends('layouts.auth')
@section('meta_title', 'Login Page')

@section('content')

<section class="auth">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 black">
                <div class="left">
                    
                </div>
            </div>
            <div class="col-sm-6 form-div">
                <div class="card">
                    <h2>Login</h2>
                    <p>Enter your login details.</p>

                    <!-- form -->
                    {!! Form::open(['url' => route('login.post'), 'method' => 'POST']) !!}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="main-field">
                                        {!! Form::label('user_id', 'User Id', ['class' => 'form-label']); !!}
                                        <img src="/images/message.png" alt="user id">
                                        {!! Form::text('user_id', null, ['class' => 'form-control', 'placeholder' => 'User Id']) !!}
                                    </div>

                                    <!-- show error message -->
                                    @error('user_id')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="main-field">
                                        {!! Form::label('password', 'Password', ['class' => 'form-label']); !!}
                                        <img src="/images/lock.png" alt="password">
                                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                    </div>

                                     <!-- show error message -->
                                     @error('password')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group px-5">
                                    {!! Form::submit('Login Now', ['class' => 'btn btn-dark submit-btn', 'placeholder' => 'Password']) !!}
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection