<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KvizResurs extends JsonResource
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
            'Naziv - ' => $this->resource->naziv,
            'Televizija - ' => $this->resource->televizija,
            'Trajanje - MIN -  ' => $this->resource->trajanje,
            'Voditelj - ' => $this->resource->voditelj,
            'Nagrada - RSD -  ' => $this->resource->nagrada
        ];
    }
}
