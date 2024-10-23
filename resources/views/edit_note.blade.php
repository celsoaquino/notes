@extends('layouts.main_layout')
@section('content')
    @include('top_bar')
    <section class="mt-4 ">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="flex justify-between items-center border-b rounded-t-xl py-3 px-4 md:px-5">
                <h1 class="text-3xl">EDIT NOTE</h1>
                <div class="flex items-center gap-x-1">
                    <div class="hs-tooltip inline-block">
                        <a href="{{ route('home') }}"
                           class="hs-tooltip-toggle size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-red-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <form action="{{ route('update', $note->id)}}" method="POST">
                @csrf
                <input type="hidden" name="note_id" value="{{ Crypt::encrypt($note->id) }}">
                <div class="p-4 md:p-5">
                    <div class="max-w-full ">
                        <label for="input-label" class="block text-xl font-medium mb-2">Note Title</label>
                        <input type="text" id="input-label" name="text_title"
                               value="{{ old('text_title', $note->title) }}"
                               class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm !outline-none focus:border-blue-500"
                               placeholder="Username">
                        @error('text_title')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="max-w-full mt-4">
                        <label for="textarea-label" class="block text-xl font-medium mb-2">Note Text</label>
                        <textarea id="textarea-label" name="text_note"
                                  class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm !outline-none focus:border-blue-500"
                                  rows="3" placeholder="Say hi...">{{ old('text_note', $note->text) }}</textarea>
                        @error('text_note')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <a class="mt-3 mr-1 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-400 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                           href="{{ route('home') }}">
                            Cancel
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </a>
                        <button type="submit"
                                class="mt-3 mr-1 py-2 px-3 inline-flex justify-center items-center gap-x-5 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('home') }}">
                            Update
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
