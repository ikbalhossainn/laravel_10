@extends('backend.layouts.app')

@section('title','All Products')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Table</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item active">All Product</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Brand List</h5>

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Description</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($brands as $brand)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $brand->name }}</td>
                                <td>
                                    <img src="{{asset('images/'.$brand->logo)}}" width="60px" alt="">
                                </td>
                                <td>{{ $brand->description }}</td>
                                <td>
                                    <form action="{{ route('brand.destroy',$brand->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('brand.show',$brand->id) }}">Show</a>

                                        <a class="btn btn-primary" href="{{ route('brand.edit',$brand->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {!! $brands->withQueryString()->links('pagination::bootstrap-5') !!}
</main><!-- End #main -->

@endsection