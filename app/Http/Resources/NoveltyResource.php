<?php

namespace App\Http\Resources;

use App\Models\Rubric;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RubricResource;

class NoveltyResource extends JsonResource
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
            'title' => $this->title,
            'text' => $this->text,
            'rubric' => RubricResource::collection($this->rubrics),
        ];
    }
}
