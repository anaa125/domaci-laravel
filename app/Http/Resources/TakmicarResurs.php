<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TakmicarResurs extends JsonResource
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
            'Ime - ' => $this->resource->ime,
            'Prezime - ' => $this->resource->prezime,
            'Godine - ' => $this->resource->godine,
        ];
    }
}
