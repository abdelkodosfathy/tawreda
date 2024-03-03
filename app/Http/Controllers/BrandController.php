<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandStoreRequest;
use Illuminate\Support\Facades\Storage;
use File;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all();

        // Return Json Response
        return response()->json([
            'results' => $brand
        ], 200);
    }
    public function store(BrandStoreRequest $request)
    {
        try {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images/brand'), $imageName);

            // Create User
            Brand::create([
                'brand_name' => $request->brand_name,
                'brand_desc' => $request->brand_desc,
                'brand_img' => $imageName,


            ]);

            // Return Json Response
            return response()->json([
                'message' => "brand successfully created."
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
        $brand = Brand::find($id);
        if (!$brand) {
            return response()->json([
                'message' => 'brand Not Found.'
            ], 404);
        }

        // Return Json Response
        return response()->json([
            'brand' => $brand
        ], 200);
    }
    public function update(BrandStoreRequest $request, $id)
    {
        try {
            // Find brand
            $brand = Brand::find($id);
            if (!$brand) {
                return response()->json([
                    'message' => 'brand Not Found.'
                ], 404);
            }
            // $imageName = '';
            // if ($request->hasFile('file')) {
            //     $imageName = time() . '.' . $request->file->extension();
            //     $request->file->move(public_path() . '/images/brand/', $imageName);
            //     if ($brand->brand_img != '') {
            //         Storage::delete('images/brand/' . $brand->brand_img);
            //     }
            // } else {
            //     $imageName = $brand->brand_img;
            // }



            // Update User

            $brand->brand_name = $request->brand_name;
            $brand->brand_desc = $request->brand_desc;
            $brand->brand_img = $request->brand_img;

            $brand->save();


            // Return Json Response
            return response()->json([
                'message' => "brand successfully updated."
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
        $brand = Brand::find($id);
        if (!$brand) {
            return response()->json([
                'message' => 'brand Not Found.'
            ], 404);
        }

        // Delete User
        $brand->delete();

        // Return Json Response
        return response()->json([
            'message' => "brand successfully deleted."
        ], 200);
    }
}
