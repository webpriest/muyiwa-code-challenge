<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssetResource extends JsonResource
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
            'type' => $this->type,
            'serial_number' => $this->serial_number,
            'description' => $this->description,
            'mode' => $this->mode,
            'purchase_date' => $this->purchase_date,
            'start_use_date' => $this->start_use_date,
            'warranty_expiry_date' => $this->warranty_expiry_date,
            'picture_path' => $this->picture(),
            'purchase_price' => '₦'.number_format($this->purchase_price, 0, '.', ','),
            'degradation' => $this->degradation,
            'currency_value' => $this->currency_value,
            'location' => $this->location,
        ];
    }
}
