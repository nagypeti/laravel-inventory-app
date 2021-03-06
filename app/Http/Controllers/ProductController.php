<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Http\Requests\Product as ProductRequest;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use UploadImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return Response
     */
    public function store(ProductRequest $request)
    {
        $request->validated();

        $model = new Product();
        $model->name = $request->get('name');
        $model->price = $request->get('price');
        $model->save();

        if ($request->has('image')) {
            $name = Str::slug($request->get('name') . '_' . time());
            $path = $this->uploadOneToPublic($request->file('image'), $name);
            $image = new Image();
            $image->name = $name;
            $image->path = $path;
            $model->image()->save($image);
        }

        return redirect()->route('products.index')
            ->with('success', 'Product added successfully!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param int $id
     * @return Response
     */
    public function update(ProductRequest $request, $id)
    {
        $request->validated();
        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully!');
    }
}
