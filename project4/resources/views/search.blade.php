@extends('backend.layouts.app')
@section('title', 'Search')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>General Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">General</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Default Table</h5>

                        <!-- Default Table -->
                        <form action="" method="get">
                            <input type="text" name="search" placeholder="Search here">

                            <select name="cat" id="">

                                <option value="">Select one</option>
                                <option value="1">Vegetable</option>
                                <option value="2">Fruits</option>
                                <option value="3">Masala</option>
                            
                            </select>
                            
                            <input type="submit" name="submit" value="SEARCH">
                        </form>
                        <!-- <input type="search" name="" id=""> -->

                        

                        @if(count($products)>0)

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Images</th>
                                    <th>Tags</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($products as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->description}}</td>
                                    <td> <img src="{{'images/'. $cat->image}}" width="100"> </td>
                                    <td>{{ implode(",", $cat->tags) }}</td>
                                    <!-- <td>
                                        <ul>
                                            @foreach($cat->tags as $tag)
                                            <li>{{$tag}}</li>
                                            @endforeach
                                        </ul>
                                    </td> -->
                                    <td>{{$cat->price}}</td>
                                    <!-- <td>{{$cat->category_id}}</td> for showing id -->
                                    <td>{{$cat->category->name ?? 'N/A'}}</td>
                                    <!-- comes from Models/Product.php 
                                            "public function category(): BelongsTo{ 
                                            return $this->belongsTo(Category::class);
                                            }" -->

                                    <td>{{$cat->availability}}</td>
                                    <td>
                                        <a href="{{route('product.edit', $cat->id)}}">Edit</a> |

                                        <a href="{{route('product.delete', $cat->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <h2>No Data Found</h2>
                        @endif

                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection