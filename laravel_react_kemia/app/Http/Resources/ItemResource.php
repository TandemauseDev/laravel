<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'item_id' => $this->item_id,
            'name' => $this->name,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'size' => $this->size,
            'img1' => $this->img1,
            'img2' => $this->img2,
            'img3' => $this->img3,
            'precautions' => $this->precautions,
            'storage' => $this->storage,
            'handling' => $this->handling,
            'uses' => $this->uses, // La nueva columna que agregaste
            'created_at' => $this->created_at->format('Y-m-d H:i:S'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:S'),
        ];
    }
}
