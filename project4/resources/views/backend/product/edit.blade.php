@extends('backend.layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Elements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Product Entry</h5>

                            @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                                @endforeach
                            </div>

                            @endif

                            <!-- General Form Elements -->
                            <form method="post" action="{{route('product.update', $products->id)}}" enctype="multipart/form-data">
                                <!-- enctype="multipart/form-data" // for photo -->
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" value="{{$products->name? $products->name : old('name')}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" id="" class="form-control">{{$products->description? $products->description : old('description')}}</textarea>
                                        <!-- class="form-control tinymce-editor -->
                                    </div>
                                    <!-- class="quill-editor-full" -->
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="price" class="form-control" value="{{old('price', $products->price)}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select name="category" class="form-select" id="">
                                            <option selected>Select One</option>
                                            @foreach($cats as $cat)
                                            <option value="{{$cat->id}}" @selected(old('category', $products->category_id) == $cat->id)>{{$cat->name}} </option>
                                            @endforeach
                                            <!-- {{old('category', $products->category_id) == $cat->id ? 'selected' : ''}} -->
                                        </select>
                                    </div>
                                </div>

                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Product Status</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="availability" id="gridRadios1" value="1" {{old('availability') ? 'checked':''}}>
                                            <label class="form-check-label" for="gridRadios1">
                                                Available
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="availability" id="gridRadios2" value="0" {{old('availability') ==0 ? 'checked':''}}>
                                            <label class="form-check-label" for="gridRadios2">
                                                Not Available
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Tags</legend>
                                    <div class="col-sm-10">

                                        <div class="form-check">
                                            <input class="form-check-input" name="tags[]" type="checkbox" id="gridCheck1" value="organic_food" @checked(old('tags', in_array('organic_food', $products->tags)) == 'organic_food')>
                                            <label class="form-check-label" for="gridCheck1">
                                                Organic Food
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="tags[]" id="gridCheck2" value="pure_product" @checked(old('tags', in_array('pure_product', $products->tags)) == 'pure_product')>
                                            <label class="form-check-label" for="gridCheck2">
                                                Pure Product
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Photo Upload</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="photo" id="formFile" value="{{old('photo')}}">
                                    </div>
                                </div>

                                <img src="{{asset('images/' . $products->image)}}" alt="" width="100">

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">UPDATE</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-2"></div>

        </div>
    </section>

</main>
@endsection