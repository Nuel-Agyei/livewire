<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments =[
        ['body' => 'Lorem ipsum dolor sit amet consectetur, adispisicing
        elit. Quasi ex cupiditate quo commodi aspernatur delectus veniam necessitatibus',
        'created_at'=>'5 mins ago',
        'creator'=>'Nuel'
        ]
    ];

    public function render()
    {
        return view('livewire.comments');
    }
}
