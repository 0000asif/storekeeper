<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SalesTransaction;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class SalesTransactionController extends Controller
{
    public function index()
    {
        $salesTransactions = SalesTransaction::with('product')->get();
        return view('sales.index', compact('salesTransactions'));
    }

    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity_sold' => 'required|integer',
        ]);
        $product = Product::find($request->product_id);
        $product->quantity -= $request->quantity_sold;
        $product->save();

        SalesTransaction::create($request->all());

        return redirect()->route('sales.index')->with('success', 'Sale recorded successfully');
    }

    public function dashboard()
    {
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $startOfMonth = Carbon::now()->startOfMonth();
        $startOfLastMonth = Carbon::now()->subMonth()->startOfMonth();
        $endOfLastMonth = Carbon::now()->subMonth()->endOfMonth();

        $salesToday = SalesTransaction::whereDate('created_at', $today)->sum('quantity_sold');
        $salesYesterday = SalesTransaction::whereDate('created_at', $yesterday)->sum('quantity_sold');
        $salesThisMonth = SalesTransaction::whereBetween('created_at', [$startOfMonth, Carbon::now()])->sum('quantity_sold');
        $salesLastMonth = SalesTransaction::whereBetween('created_at', [$startOfLastMonth, $endOfLastMonth])->sum('quantity_sold');

        return view('dashboard', compact('salesToday', 'salesYesterday', 'salesThisMonth', 'salesLastMonth'));
    }
}
