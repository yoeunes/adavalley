@extends('layouts.app')

@section('body')
<div class="bg-white shadow-md rounded border border-gray-light pt-6 pb-8 mb-4 flex flex-wrap justify-around my-2">

    <div class="flex flex-col justify-between h-full">
        <!-- img -->
        <div class="px-6 py-4">
            <div class="font-bold text-xl text-black mb-2">{{ $machine->name }}</div>

            <h1 class="title text-base">#{{ $machine->number }}</h1>

            <h2 class="subtitle text-base">{{ $machine->description }}</h2>
        </div>

        <div class="pin-b px-6 py-4 flex justify-between">
            <div>
                <button class="inline-block bg-blue hover:bg-blue-dark rounded-full px-3 py-2 text-sm font-semibold text-white mr-2">History</button>
            </div>
            <div>
                <button class="inline-block bg-red hover:bg-red-dark rounded-full px-3 py-2 text-sm font-semibold text-white">Delete</button>
            </div>
        </div>
    </div>

</div>
@endsection