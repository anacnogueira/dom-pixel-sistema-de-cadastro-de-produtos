<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\ProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }
    
    public function index()
    {
        $products =  $this->service->list(['id','name','amount','stock']);
           
        $heads = [
            'ID',
            'Nome',
            'Preço',
            'Qtde Estoque',
            ['label' => 'Ações', 'no-export' => true, 'width' => 5],
        ];     

        foreach($products as $key => $product) {
            $products[$key]['actions'] = "<nobr> 
            
                <form method='POST' action='/products/".$product['id']."'>
                    <input type='hidden' name='_token' value='".csrf_token()."' autocomplete='off'>
                    <input type='hidden' name='_method' value='DELETE'>
                    <button type='submit' class='delete-button btn btn-xs btn-default text-danger mx-1 shadow' title='Excluir'>
                        <i class='fa fa-lg fa-fw fa-trash'></i>
                    </button> 
                </form>
                <a href='products/".$product['id']."/edit' class='btn btn-xs btn-default text-primary mx-1 shadow' title='Editar'>
                    <i class='fa fa-lg fa-fw fa-pen'></i>
                </a>
                <a href='products/".$product['id']."' class='btn btn-xs btn-default text-teal mx-1 shadow' title='Exibir Detalhes'>
                   <i class='fa fa-lg fa-fw fa-eye'></i>
               </a>
            </nobr>";
        }

        $config = [
            'data' => $products,
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, null, ['orderable' => false]],
        ];
        
        return view('products.index', compact('heads','config'));
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $this->service->create($validated);
        
        return redirect('/products');
    }

    public function show(string $id)
    {
        $product = $this->service->findById($id);
        
        return view('products.show', compact('product'));
    }

    public function edit(string $id)
    {
        $product = $this->service->findById($id);
        
        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, string $id): RedirectResponse
    {
        $validated = $request->validated();

        $this->service->update($validated, $id);
        
        return redirect('/products');
    }

    public function destroy(string $id): RedirectResponse
    {
        $this->service->delete($id);

        return redirect('/products');
    }
}
