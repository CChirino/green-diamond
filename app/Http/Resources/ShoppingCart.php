<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShoppingCart extends JsonResource
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
            'status' => $this->status,
            'user_id' => $this->user_id,
            'order_date' => $this->order_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];  
    }
}
