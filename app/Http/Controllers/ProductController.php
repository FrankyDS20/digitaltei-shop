<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    protected $empresa = "DIGITALTEI";

    public function index()
    {
        $titulo = "Productos";
        $apiUrl = "https://digitalteiperu.com/api/productos";
        $jsonData = file_get_contents($apiUrl);
        $data = json_decode($jsonData);
    
        // Configurar la paginación
        $page = request()->get('page', 1); // Obtener el número de página actual de la solicitud
        $perPage = 9; // Número de elementos por página
        $offset = ($page - 1) * $perPage; // Calcular el desplazamiento
        $items = array_slice($data, $offset, $perPage, true); // Obtener los elementos para la página actual
    
        // Crear una instancia de LengthAwarePaginator
        $paginator = new LengthAwarePaginator(
            $items,
            count($data),
            $perPage,
            $page,
            [
                'path' => Paginator::resolveCurrentPath(), // Obtener la URL base para los enlaces de paginación
                'query' => request()->query() // Mantener los parámetros de consulta existentes en los enlaces de paginación
            ]
        );
        $categorias=$this->getCategorias();
        $marcas=$this->getMarcas();
        
        return view('product.index', compact('titulo', 'paginator','categorias','marcas'));
    }
    public function getMarcas()
    {
        $apiUrl = "https://digitalteiperu.com/api/marcas";
        $jsonData = file_get_contents($apiUrl);
        return json_decode($jsonData);
    
    }
    public function getCategorias(){
        $titulo = "Categorías";
        $apiUrl = "https://digitalteiperu.com/api/categorias";
        $jsonData = file_get_contents($apiUrl);
        $data = json_decode($jsonData);
    
       return $data;

    }
    public function show($id){
        $titulo = "Productos";
        $apiUrl = "https://digitalteiperu.com/api/products/subcategory/".$id;
        $jsonData = file_get_contents($apiUrl);
        $data = json_decode($jsonData);
    
        // Configurar la paginación
        $page = request()->get('page', 1); // Obtener el número de página actual de la solicitud
        $perPage = 9; // Número de elementos por página
        $offset = ($page - 1) * $perPage; // Calcular el desplazamiento
        $items = array_slice($data, $offset, $perPage, true); // Obtener los elementos para la página actual
    
        // Crear una instancia de LengthAwarePaginator
        $paginator = new LengthAwarePaginator(
            $items,
            count($data),
            $perPage,
            $page,
            [
                'path' => Paginator::resolveCurrentPath(), // Obtener la URL base para los enlaces de paginación
                'query' => request()->query() // Mantener los parámetros de consulta existentes en los enlaces de paginación
            ]
        );
        $marcas=$this->getMarcas();
        $categorias=$this->getCategorias();
        return view('product.index', compact('titulo', 'paginator','categorias','marcas'));

    }

    public function productbycategory($id)
    {
        // $subcategories = SubCategory::where('category_id', $id)->pluck('id');
        // $data = Product::select(
        //     'products.*',
        //     'brands.name as brand_name',
        //     'sub_categories.name as subcategory_name',
        //     'types.name as type_name'
        // )
        // ->join('brands', 'products.brand_id', '=', 'brands.id')
        // ->join('sub_categories', 'products.subcategory_id', '=', 'sub_categories.id')
        // ->join('types', 'products.type_id', '=', 'types.id')
        // ->whereIn('products.subcategory_id', $subcategories)
        // ->orderBy('products.id', 'DESC')
        // ->paginate(6);

        // $titulo = "Productos";
         $marcas=$this->getMarcas();
        return view('shop',compact('titulo','data'));
    }
  
   
}
