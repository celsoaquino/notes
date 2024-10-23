@extends('layouts.main_layout')
@section('content')
    @include('top_bar')
    <main>
        @if(count($notes) == 0)
            <section class="mt-4 ">
                <div class="min-h-60 flex flex-col bg-white border shadow-sm rounded-xl">
                    <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
                        <h3 class="text-3xl font-bold text-gray-400">
                            You have no notes available!
                        </h3>
                        <a href="{{ route('new') }}"
                           class="mt-3 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Create Your First Note
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        @else
            <div class="flex justify-end">
                <a class="mt-3 mr-1 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                   href="{{ route('new') }}">
                    New Note
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                    </svg>
                </a>
            </div>
            @foreach($notes as $note)
                @include('note')
            @endforeach
        @endif
    </main>

@endsection
