<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Client;
use App\Models\Sale;

class SaleController extends Controller
{

    public function index()
    {
        $sale = Sale::get();
        return view('admin.sale.index', compact('sale'));
    }


    public function create()
    {
        $clients = Client::get();
        return view('admin.sale.creat', compact('clients'));
    }


    public function store(StoreSaleRequest $request)
    {
        $sale = Sale::create($request->all());

        foreach ($request->sld_product_id as $key => $products) {
            $results[] = array(
                "sld_product_id" => $request->sld_product_id[$key],
                "sld_quantity_id" => $request->sld_quantity_id[$key],
                "sld_price_id" => $request->sld_price_id[$key],
                "sld_discount" => $request->sld_discount[$key],
            );
        }

        $sale->purchaseDetails()->createMany($results);

        return redirect()->route('sales.index');
    }


    public function show(Sale $sale)
    {
        return view('admin.sales.show', compact('sale'));
    }


    public function edit(Sale $sale)
    {
        $client = Client::get();
        return view('admin.sales.show', compact('sale'));
    }


    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        //
    }


    public function destroy(Sale $sale)
    {
        //
    }
}
