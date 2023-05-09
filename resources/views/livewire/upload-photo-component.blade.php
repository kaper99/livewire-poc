<div>
    <form wire:submit.prevent="upload({{$team->id}})">
        <input type="file" wire:model="photo" >

        @error('photo') <span class="error">{{ $message }}</span> @enderror

        <button wire:click="$refresh" type="submit" class="flex-1 w-50 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-2">
            Save photo
        </button>
    </form>
    <div class="flex flex-row space-x-4">

    </div>
</div>
