<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BicicletaCollection extends ResourceCollection
{
    
    public $collects = BicicletaResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Sofonbike',
                'authors' => [
                    'David',
                    'Alex'
                ]
            ],
            'type' => 'products'
        ];
    }
}
