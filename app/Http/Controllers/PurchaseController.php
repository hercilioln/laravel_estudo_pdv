<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Purchase;
use App\Models\Provider;

class PurchaseController extends Controller
{

    public function index()
    {
        $purchases = Purchase::get();
        return view('admin.purchase.index', compact('purchases'));
    }


    public function create()
    {

        $providers = Provider::get();
        return view('admin.purchase.create', compact('providers'));
    }


    public function store(StorePurchaseRequest $request)
    {
        $purchase = Purchase::create($request->all());

        foreach ($request->pud_product_id as $key => $products) {
            $results[] = array(
                "pud_product_id" => $request->pud_product_id[$key],
                "pud_quantity_id" => $request->pud_quantity_id[$key],
                "pud_price_id" => $request->pud_price_id[$key],
            );
        }

        $purchase->purchaseDetails()->createMany($results);

        return redirect()->route('purchases.index');
    }


    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show', compact('purchases'));
    }


    public function edit(Purchase $purchase)
    {
        $providers = Provider::get();
        return view('admin.purchase.show', compact('purchases'));
    }


    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        //
    }


    public function destroy(Purchase $purchase)
    {
        //
    }
}
