<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Categories as CategoryResource;


class Products extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'is_featured' => $this->is_featured,
            'is_hot' => $this->is_hot,
            'price' => $this->price,
            'sale_price' => $this->sale_price,
            'is_out_of_stock' => $this->is_out_of_stock,
            'depot' => $this->depot,
            'inventory' => $this->inventory,
            'is_active' => $this->is_active,
            'is_sale' => $this->is_sale,
            'description' => $this->description,
            'sku' => $this->sku,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];    

        return array_merge(parent::toArray($request), [
            'avatar_url' => env('APP_URL') . $this->images
        ]);
    }
}
