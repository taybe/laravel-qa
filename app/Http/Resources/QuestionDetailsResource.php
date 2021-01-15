<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionDetailsResource extends JsonResource
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
            'title' => $this->title,
            'votes_count' => $this->votes_count,
            'answers_count' => $this->answers_count,
            'is_favorited' => $this->is_favorited,
            'favorites_count' => $this->favorites_count,
            'body' => $this->body,
            'body_html' => $this->body_html,
            'excerpt' => $this->excerpt,
            'user' => new UserResource($this->user),
            'created_date' => $this->created_date,
        ];
    }
}
