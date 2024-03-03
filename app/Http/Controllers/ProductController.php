<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        // Return Json Response
        return response()->json([
            'results' => $product
        ], 200);
    }
    public function store(ProductStoreRequest $request)
    {
        try {
            $imageName = time() . '.' . $request->prod_img->extension();
            $request->prod_img->move(public_path('images/product'), $imageName);

            // Create User
            Product::create([
                'product_name' => $request->product_name,
                'product_desc' => $request->product_desc,
                'product_cert' => $request->product_cert,
                'product_price' => $request->product_price,
                'dis_id' => $request->dis_id,
                'brand_id' => $request->brand_id,
                'cat_id' => $request->cat_id,
                'product_img' => $imageName,


            ]);

            // Return Json Response
            return response()->json([
                'message' => "product successfully created."
            ], 200);
        } catch (\Exception $e) {
            // Return Json Response
            return response()->json([
                "message" => $e->getMessage()

            ], 500);
        }
    }
    public function show($id)
    {
        // User Detail 
        $product = Product::find($id);
        if (!$product) {
            return response()->json([
                'message' => 'product Not Found.'
            ], 404);
        }

        // Return Json Response
        return response()->json([
            'product' => $product
        ], 200);
    }
    public function update(ProductStoreRequest $request, $id)
    {
        try {
            // Find User
            $product = Product::find($id);
            if (!$product) {
                return $product()->json([
                    'message' => 'product Not Found.'
                ], 404);
            }

            //echo "request : $request->image";
            $product->product_name = $request->product_name;
            $product->product_desc = $request->product_desc;
            $product->product_cert = $request->product_cert;
            $product->product_price = $request->product_price;
            $product->dis_id = $request->dis_id;
            $product->brand_id = $request->brand_id;
            $product->cat_id = $request->cat_id;
            // $product->product_img = $request->prod_imgfile('prod_img')->store('prod_img', 'public/imges/product');
            // Update User
            $product->save();

            // Return Json Response
            return response()->json([
                'message' => "product successfully updated."
            ], 200);
        } catch (\Exception $e) {
            // Return Json Response
            return response()->json([
                'message' => "Something went really wrong!"
            ], 500);
        }
    }

    public function destroy($id)
    {
        // Detail 
        $product = Product::find($id);
        if (!$product) {
            return response()->json([
                'message' => 'product Not Found.'
            ], 404);
        }

        // Delete User
        $product->delete();

        // Return Json Response
        return response()->json([
            'message' => "product successfully deleted."
        ], 200);
    }
}
