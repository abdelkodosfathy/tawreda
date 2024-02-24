<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Http\Requests\DiscountStoreRequest;

class DiscountController extends Controller
{
    public function index()
    {
        $discount = Discount::all();

        // Return Json Response
        return response()->json([
            'results' => $discount
        ], 200);
    }
    public function store(DiscountStoreRequest $request)
    {
        try {
            // Create discount
            Discount::create([
                'dis_name' => $request->dis_name,
                'dis_desc' => $request->dis_desc,
                'dis_percent' => $request->dis_percent,

            ]);

            // Return Json Response
            return response()->json([
                'message' => "discount successfully created."
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
        $discount = Discount::find($id);
        if (!$discount) {
            return response()->json([
                'message' => 'discount Not Found.'
            ], 404);
        }

        // Return Json Response
        return response()->json([
            'discount' => $discount
        ], 200);
    }
    public function update(DiscountStoreRequest $request, $id)
    {
        try {
            // Find User
            $discount = Discount::find($id);
            if (!$discount) {
                return $discount()->json([
                    'message' => 'discount Not Found.'
                ], 404);
            }


            $discount->dis_name = $request->dis_name;
            $discount->dis_desc = $request->dis_desc;
            $discount->dis_percent = $request->dis_percent;

            // Update User
            $discount->save();

            // Return Json Response
            return response()->json([
                'message' => "discount successfully updated."
            ], 200);
        } catch (\Exception $e) {
            // Return Json Response
            return response()->json([
                "message" => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        // Detail 
        $discount = Discount::find($id);
        if (!$discount) {
            return response()->json([
                'message' => 'discount Not Found.'
            ], 404);
        }

        // Delete User
        $discount->delete();

        // Return Json Response
        return response()->json([
            'message' => "discount successfully deleted."
        ], 200);
    }
}

