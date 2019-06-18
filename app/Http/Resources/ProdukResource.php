<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdukResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'produk' => $this->produk,
            'deskripsi' => $this->deskripsi,
            'perusahaan' => $this->perusahaan->namaperusahaan
        ];
    }
}
