@extends('layouts.main')
@section('meta_title', 'Home Page')

@section('content')

<section class="auth py-5">
    <div class="container">
        <div class="form">
            <form action="{{ route('image.upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-2 image-div">
                        <div class="form-group image-upload">
                            <img src="/images/default-image.png" alt="default" class="image">
                            <input type="file" name="images[]" class="form-control upload">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group image-upload">
                           <button type="button" class="add-btn btn btn-dark px-4">Add More</button>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark px-4">Upload Images</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection