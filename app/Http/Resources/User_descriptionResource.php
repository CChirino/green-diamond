<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User_descriptionResource extends JsonResource
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
            'social_security' => $this->social_security,
            'birthdate' => $this->birthdate,
            'phone_number' => $this->phone_number,
            'type_of_person' => $this->type_of_person,
            'image' => $this->image,
            'user_id' =>$this->user_id,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];    
    }
}
