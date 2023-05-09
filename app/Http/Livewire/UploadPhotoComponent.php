<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadPhotoComponent extends Component
{
    use WithFileUploads, AuthorizesRequests;

    public ?Team $team = null;
    public $photo;
    public function render()
    {
        return view('livewire.upload-photo-component');
    }

    public function upload(int $id)
    {
        /**@var Team $team */
        $team = Team::findOrFail($id);
        $this->team = $team;
        $this->authorize('update', $team);
        $team->addMedia($this->photo)->toMediaCollection('image');
        $this->emit('refreshComponent');
    }
}
