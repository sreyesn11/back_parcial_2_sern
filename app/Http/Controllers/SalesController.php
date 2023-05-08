<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sale;


class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return $sales;
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->nombre_empleado = $request->nombre_empleado;
        $sale->nombre_cliente = $request->nombre_cliente;
        $sale->precio = $request->precio;
        $sale->fecha_compra = $request->fecha_compra;
        $sale->save();
        return $sale;
    }

    public function show()
    {
        
    }

    public function edit($id)
    {

    }

    public function update(Request $request,  $id)
    {
        $sale = Sale::findOrFail($id);
    
        $sale->nombre_empleado = $request->nombre_empleado;
        $sale->nombre_cliente = $request->nombre_cliente;
        $sale->precio = $request->precio;
        $sale->fecha_compra = $request->fecha_compra;
    
        $sale->save();
        
        return redirect('sales'); 
    }

    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return $sale;
    }

}