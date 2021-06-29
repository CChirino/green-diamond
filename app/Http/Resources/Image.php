<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Products as ProductResource;


class Image extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $products = $this->whenLoaded('products');

        return [
            'name' => $this->name,
            'url' => $this->url,
            'products' => new Products($this->products)

        ];    
    }
}
