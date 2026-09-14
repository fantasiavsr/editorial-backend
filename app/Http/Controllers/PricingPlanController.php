<?php

namespace App\Http\Controllers;

use App\Models\PricingPlan;

class PricingPlanController extends Controller
{
    /**
     * Display a listing of the pricing plans.
     */
    public function index()
    {
        return response()->json([
            'data' => PricingPlan::all(),
        ]);
    }
}
