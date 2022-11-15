@extends('layouts.main')
@section('meta_title', 'Home Page')

@section('content')

<section class="py-5">
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
                        <div class="col-sm-12 mt-3">
                            <div class="row">
                                <div class="col-sm-5 ">
                                    <div class="form-group tags-div mb-3">
                                        <input type="text" id="inputTag" name="tag[]" class="form-control tags-input">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                        <button type="button" class="add-tag-btn btn btn-dark px-4">Add Tag</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags">
                            <div class="single-tag">
                                <div class="form-group">
                                    <input type="checkbox" class="btn-check tag-btn" id="value_1" checked name="tags[]" value="Value One">
                                    <label class="btn btn-outline-dark" for="value_1">Value One</label>
                                    <p class="close-icon">&times;</p>
                                </div>
                            </div>
                            <div class="single-tag ">
                                <div class="form-group">
                                    <input type="checkbox" class="btn-check tag-btn" id="value_2" checked name="tags[]" value="Value Two">
                                    <label class="btn btn-outline-dark" for="value_2">Value Two</label>
                                    <p class="close-icon">&times;</p>
                                </div>
                            </div>
                            <div class="single-tag">
                                <div class="form-group">
                                    <input type="checkbox" class="btn-check tag-btn" id="value_3" checked name="tags[]" value="Value Three">
                                    <label class="btn btn-outline-dark" for="value_3">Value Three</label>
                                    <p class="close-icon">&times;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3">
                        <div class="tags">
                            <div class="single-tag">
                                <div class="form-group">
                                    <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off" name="tags[]" value="Tag One">
                                    <label class="btn btn-outline-dark" for="btn-check-outlined">Tag One</label>
                                    <p class="close-icon">&times;</p>
                                </div>
                            </div>
                            <div class="single-tag">
                                <div class="form-group">
                                    <input type="checkbox" class="btn-check" id="btn-check-outlined-2" autocomplete="off" name="tags[]" value="Tag One">
                                    <label class="btn btn-outline-dark" for="btn-check-outlined-2">Tag One</label>
                                    <p class="close-icon">&times;</p>
                                </div>
                            </div>
                            <div class="single-tag">
                                <div class="form-group">
                                    <input type="checkbox" class="btn-check" id="btn-check-outlined-3" autocomplete="off" name="tags[]" value="Tag One">
                                    <label class="btn btn-outline-dark" for="btn-check-outlined-3">Tag One</label>
                                    <p class="close-icon">&times;</p>
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