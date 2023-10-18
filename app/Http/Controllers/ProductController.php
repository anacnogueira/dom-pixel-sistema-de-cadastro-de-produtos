<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        echo 'Listar';
    }

    public function create(): View
    {
        return view('products.create');
    }


    public function store(ProductRequest $request): RedirectResponse
    {
        return redirect('/products');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
