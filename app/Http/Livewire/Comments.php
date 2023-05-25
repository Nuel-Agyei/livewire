<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;

class Comments extends Component
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public $comments =[
        ['body' => 'Lorem ipsum dolor sit amet consectetur, adispisicing
        elit. Quasi ex cupiditate quo commodi aspernatur delectus veniam necessitatibus',
        'created_at'=>'5 mins ago',
        'creator'=>'Nuel'
        ]
    ];

    public function addComment()
    {
        if ($this->newComment =='') {
            return;
        }
        array_unshift($this->comments,
        ['body'=> $this->newComment,
        'created_at'=>Carbon::now()->diffForHumans(),
        'creator'=>'Chani']);
        $this->newComment = '';
    }

    public $newComment;

    public function render()
    {
        return view('livewire.comments');
    }
}
