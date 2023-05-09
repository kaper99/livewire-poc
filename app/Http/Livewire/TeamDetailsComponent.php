<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class TeamDetailsComponent extends Component
{
    public Team $team;
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function render()
    {
        return view('livewire.team-details-component');
    }

    public function mount(Team $team)
    {
        $this->team = $team;
    }
}
