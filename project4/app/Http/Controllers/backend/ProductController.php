<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category; // to add category here
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::All();
        //dd($products);
        return view('backend.product.index', $data); // return view te only 1ta variable pass kora jay
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['cats'] = Category::All(); // for dropdown option
        return view('backend.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([  // left side = form name
            'name' => 'required | min:4',
            'description' => 'required | min:6',
            'price' => 'required | numeric',
            'category' => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
        ]);

        $filename = time() . "." . $request->photo->extension();

        // dd($request->all()) // for checking everything should be in comment
        // echo $request->photo->extension();
        // echo "<br>";
        // echo public_path('images');
        // echo "<br>";
        // echo $request->photo->path();
        // echo "<br>";
        // echo $request->photo->stores('images');
        // dd($request->photo);

        if ($validate) {
            $data = [  // left side = database name
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category,
                'availability' => $request->availability,
                'tags' => $request->tags,
                //  'tag'=> $request->input('tags'),
                'image' => $filename,
                //'image' => public_path('images/'. $filename),
            ];

            $model = new Product();
            if ($model->create($data)) {
                $request->photo->move(public_path('images'), $filename);
                return redirect('product')->with('msg', 'Successfully Product Added');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::find($id);
        $cats = Category::all();
        return view('backend.product.edit', compact('products', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $pid)
    {
        // echo $id;
        $product = Product::find($pid);
        $product->delete();
        return redirect('product')->with('msg', "Successfully Deleted");
    }

    public function checkout(){
        return view('backend.checkout');
    }

    public function order(Request $request){
        $order = new Order();
        $order_data = $request->all();
        $order_data['order_number'] = "ORD" . rand(5, 5000);
        $order_data['quantity'] = 1;
        $order_data['country'] = 'Bangladesh';
        // print_r($order_data);
        $order->create($order_data);

        session_unset();
        print_r(session('cart'));
        // $carts = session('cart');
        // print_r($carts);
        // $order_data['coupon'] = '100';
        // $order_data['shipping_id'] = '15';


        
    }
}
