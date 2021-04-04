<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
            'id' => $this->id,
            'product_name' => $this->product_name,
            'product_slug' => $this->product_slug,
            'discount_rate' => $this->discount_rate,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'state' => $this->state,
            'image' => $this->image,
            'description' => $this->description,
            'stock' => $this->stocks,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];    
    }
}
