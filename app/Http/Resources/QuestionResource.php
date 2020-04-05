<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class QuestionResource extends Resource
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
            'title' => $this->title,
            'path' => $this->path,
            'slug' => $this->slug,
            'category'=> $this->category->name,
            'body' => $this->body,
            'created_at'=> $this->created_at->diffForHumans(),
            'user'=>$this->user->name,
            'user_id'=>$this->user_id,
            'answer'=> AnswerResource::collection($this->answers),
            'replies_count'=>$this->answers->count()
        ];
    }
}