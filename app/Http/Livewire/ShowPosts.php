<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $result = 1;
    public $test = 5;

    public function render()
    {
        return view('livewire.show-posts');
    }

    public function increment()
    {
      $this->result++;
    }

    public function mount()
    {

    }
}
