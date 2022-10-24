<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class BicicletaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'bicicleta_name' => $this->title,
            'serial' => $this->serial,
            'color' => $this->color,
            'marca' => $this->marca,
            'descripcion' => $this->descripcion,
            'author' => [
                'user_id' => $this->user_id,
                'name' => $this->user->name,
                'email' => $this->user->email,
            ],
            'created-at' => $this->published_at,

        ];
    }
}
