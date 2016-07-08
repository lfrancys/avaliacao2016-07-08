<?php

namespace App\Http\Controllers\Estoque;

use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    protected $productService;
    protected $categoryService;

    /**
     * ProductController constructor.
     * @param $productService
     */
    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{

           /* if ($request->ajax())
                return $this->productService->all();*/

            return view('content.produto.index.index')->with('produtos', $this->productService->all());

            //return ;

        }catch (\Exception $e){
            throw $e;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias =  $this->categoryService->all();

        $lstCategories = [];
        foreach ($categorias as $categoria){
            $lstCategories[$categoria->id] = $categoria->categoryName;
        }

       //  $categorias;

        return view('content.produto.create.index')->with('categorias', $lstCategories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ProductRequest $request)
    {
        return $this->productService->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias =  $this->categoryService->all();

        $lstCategories = [];
        foreach ($categorias as $categoria){
            $lstCategories[$categoria->id] = $categoria->categoryName;
        }

        $produto = $this->productService->find($id);

        return view('content.produto.edit.index')->with(['produto' => $produto, 'categorias' => $lstCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ProductRequest $request, $id)
    {
        return $this->productService->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productService->destroy($id);
    }
}
