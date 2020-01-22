<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class AnswerResource extends Resource
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
            'id'=> $this->id ,
            'reply' => $this->body,
            'expert'  => $this->expert->name,
            'expert_id' => $this->expert_id,
            'question_slug'=> $this->question->slug,
            'upVote_count'=> $this->upvotes->count(),
            //'liked'=> !!$this->like->where('user_id',auth()->id())->count(),
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
