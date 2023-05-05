<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowTeams extends Component
{
    use WithFileUploads;
public $photo;
    /**
     * @var Collection<Team> $teams
     */
    public Collection $teams;

    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->teams = Team::all();
    }

    public function render()
    {
        return view('livewire.show-teams');
    }

    public function join(int $teamId)
    {
        $team = Team::findOrFail($teamId);
        $user = Auth::user();

        if ($team->hasUserWithEmail($user->email)) {

            $message = 'User juz dodany do tej grupy';
            session()->flash('message', $message);
            return;
        }

        $team->users()->attach($user);
        $this->reset();
        $message = 'User ' . $user->name . 'dodany do teamu ' . $team->name;

        session()->flash('message', $message);
    }

    public function leave(int $teamId)
    {
        $team = Team::findOrFail($teamId);
        $user = Auth::user();

        if (!$team->hasUserWithEmail($user->email)) {

            $message = 'Usera nie ma w tej grupie';
            session()->flash('message', $message);
            return;
        }

        $team->users()->detach($user);
        $this->reset();
        $message = 'User ' . $user->name . ' usuniety z teamu ' . $team->name;

        session()->flash('message', $message);
    }

    public function photo()
    {

    }
}
