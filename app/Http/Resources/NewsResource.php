<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => is_string($this->title) ? json_decode($this->title, true) : $this->title,
            'description' => is_string($this->description) ? json_decode($this->description, true) : $this->description,
            'category' => new CategoryResource($this->category),
        ];
    }
}
