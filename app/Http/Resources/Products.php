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
            'sku' => $this->sku,
            'file' => $this->file,
            'description' => $this->description,
            'categories_id' => $this->categories_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];    

        return array_merge(parent::toArray($request), [
            'avatar_url' => env('APP_URL') . $this->file
        ]);
    }
}
