<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
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
            // 'name' => $this->name,
            // 'detail' => $this->detail,
            'title' => $this->title, 
            'content' => $this->content, 
            'image' => $this->image, 
            'users_id' => $this->users_id, 
            'categories_id' => $this->categories_id, 
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
