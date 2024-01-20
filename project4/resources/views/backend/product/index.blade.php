@extends('backend.layouts.app')

@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">


            <!-- Table with stripped rows -->
            <table class="table datatable">
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
                <!-- loop comes from database -->
                @foreach($products as $cat)
                <tr>
                  <td>{{$cat->id}}</td>
                  <td>{{$cat->name}}</td>
                  <td>{{$cat->description}}</td>
                  <td> <img src="{{'images/'. $cat->image}}" width="100"> </td>
                  <td>{{implode(", ", $cat->tags) ?? 'NO Data'}}</td>
                  <td>{{$cat->price}}</td>
                  <!-- <td>{{$cat->category_id}}</td> for showing id -->
                  <td>{{$cat->category->name ?? 'N/A'}}</td>
                  <!-- comes from Models/Product.php 
                "public function category(): BelongsTo{ 
                    return $this->belongsTo(Category::class);
                        }" -->

                  <td>{{$cat->availability}}</td>
                  <td>Edit | Delete</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

@endsection