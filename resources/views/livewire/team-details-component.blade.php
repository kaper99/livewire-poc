<div class="grid grid-cols-1 w-1/2 bg-red-500 mx-auto mt-10 rounded">
    <div
        class="mx-auto grow w-100 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> Team
            name: {{$team->name}} </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400"> Team members {{count($team->allUsers())}}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400"> Region name: {{$team->region}}</p>
        <p class="font-normal text-gray-700 dark:text-gray-400"> City name: {{$team->city}}</p>
    </div>
    @if($team->hasMedia('image'))
        <div class="w-64 h-64 ">
            <img src='{{$team->getFirstMediaUrl('image')}}' alt="Image" class="w-full h-full object-cover">
        </div>
{{--        <div class="w-full h-64 bg-cover bg-center m-top "--}}
{{--             style="background-image: url('{{$team->getFirstMediaUrl('image')}}');"></div>--}}
    @endif
    @if($team->owner()->first()->id === \Illuminate\Support\Facades\Auth::user()->id)
        <livewire:upload-photo-component :team="$team"/>
        {{--        @livewire('upload-photo-component', ['team' => $team])--}}
    @endif
</div>
