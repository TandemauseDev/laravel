<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Http\Response;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
            // Paginar los productos, sin usar el método `items()`
    $productos = Item::query()->orderBy('item_id', 'desc')->paginate(10);

    // Retornar los productos con la paginación
    return response()->json([
        'data' => ItemResource::collection($productos), // Los productos en la página actual
        'current_page' => $productos->currentPage(),   // Página actual
        'last_page' => $productos->lastPage(),         // Última página
        'total' => $productos->total(),                // Total de productos
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreItemRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        // Crear un nuevo item con los datos validados del request
        $item = Item::create($request->validated());

        // Retornar el recurso creado con código 201 (Created)
        return new ItemResource($item, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function show(Item $item)
    {
        // Retornar el recurso especificado
        return new ItemResource($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateItemRequest $request
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        // Actualizar el item con los datos validados del request
        $item->update($request->validated());

        // Retornar el recurso actualizado
        return new ItemResource($item);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Item $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        // Eliminar el recurso
        $item->delete();

        // Retornar una respuesta de éxito sin contenido
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
