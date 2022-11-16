@extends('layouts.main')
@section('meta_title', 'Home Page')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="form">
            <form action="#" method="get">
                <div class="row">
                    <div class="filter">
                        <h4>Name: </h4>
                        @foreach ($names as $key => $value)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="names[]" value="{{ $value }}" id="name_{{ $value }}"
                                    @if (request()->query('names')!= null && in_array($value, request()->query('names')))
                                        checked
                                    @endif
                                >
                                <label class="form-check-label" for="name_{{ $value }}">
                                    {{ $value }}
                                </label>
                            </div>
                        @endforeach

                        <h4>Emails: </h4>
                        @foreach ($emails as $key => $value)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="emails[]" value="{{ $value }}" id="email_{{ $value }}"
                                    @if( request()->query('emails')!= null && in_array($value, request()->query('emails')) )
                                        checked
                                    @endif
                                >
                                <label class="form-check-label" for="email_{{ $value }}">
                                    {{ $value }}
                                </label>
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-dark">Filter</button>
                    </div>
                    @foreach ($users as $user)
                        <div class="col-sm-2 my-3">
                            <div class="card p-4 h-100">
                                <h6>Name: {{ $user->name }}</h6>
                                <p>Username: {{ $user->user_id }}</p>
                                <p>Email: {{ $user->email }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
</section>

@endsection