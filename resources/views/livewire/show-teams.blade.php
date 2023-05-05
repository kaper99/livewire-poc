{{--<div class="grid place-items-center border border-sky-500">--}}
<div class="grid grid-cols-1 place-items-center  ">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="grid grid-cols-1 " >
    @foreach($teams as $team)
        {{--        <form wire:submit.prevent="join({{$team->id}})">--}}
            <div
                class=" grow w-100 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> Team
                    name: {{$team->name}} </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400"> Team
                    members {{count($team->allUsers())}}</p>
            </div>
            <div class="flex flex-row space-x-4">
                <button class="flex-1 w-50 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-2"
                        wire:click="join({{$team->id}})">
                    Join team
                </button>
                <button class=" flex-1 w-50 bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded my-2"
                        wire:click="leave({{$team->id}})">
                    Leave team
                </button>
            </div>

        {{--            <form/>--}}
    @endforeach
</div>
    {{--            <form wire:submit.prevent="photo">--}}
    {{--                <input type="file" wire:model="photo">--}}

    {{--                @error('photo') <span class="error">{{ $message }}</span> @enderror--}}

    {{--                <button type="submit">Save Photo</button>--}}
    {{--            </form>--}}
</div>
