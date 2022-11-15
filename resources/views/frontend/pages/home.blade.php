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
                        <div class="row">
                            <div class="col-sm-5 ">
                                <div class="form-group features-div mb-3">
                                    <input type="text" name="features[]" class="form-control features-input">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <button type="button" class="features-btn btn btn-dark px-4">Add More Features</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="checkbox" class="btn-check" id="value_one" autocomplete="off" name="tags[]" value="Value One">
                                    <label class="btn btn-outline-secondary" for="value_one">Value One</label>
                                </div>
                            </div>
                            <div class="col-sm-2 ">
                                <div class="form-group">
                                    <input type="checkbox" class="btn-check" id="value_two" autocomplete="off" name="tags[]" value="Value Two">
                                    <label class="btn btn-outline-secondary" for="value_two">Value Two</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="checkbox" class="btn-check" id="value_three" autocomplete="off" name="tags[]" value="Value Three">
                                    <label class="btn btn-outline-secondary" for="value_three">Value Three</label>
                                </div>
                            </div>
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