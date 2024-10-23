@extends('layouts.main_layout')
@section('content')
    @include('top_bar')
    <section class="mt-4 ">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl">
            <div class="flex flex-col justify-center items-center border-b rounded-t-xl py-3 px-4 md:px-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="text-yellow-600 size-20 mb-2">
                    <!-- Use mb-2 to add space between the icon and the paragraph -->
                    <path fill-rule="evenodd"
                          d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                          clip-rule="evenodd"/>
                </svg>
                <strong>Are you sure you want to delete this note?</strong>
            </div>

            <form action="{{ route('update', $note->id)}}" method="POST">
                @csrf
                <input type="hidden" name="note_id" value="{{ Crypt::encrypt($note->id) }}">
                <div class="p-4 md:p-5">
                    <div class="max-w-full ">
                        <label for="input-label" class="block text-xl font-medium mb-2">Note Title</label>
                        <input type="text" id="input-label" name="text_title" readonly
                               value="{{ old('text_title', $note->title) }}"
                               class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm !outline-none focus:border-blue-500"
                               placeholder="Username">
                        @error('text_title')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="max-w-full mt-4">
                        <label for="textarea-label" class="block text-xl font-medium mb-2">Note Text</label>
                        <textarea id="textarea-label" name="text_note" readonly
                                  class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm !outline-none focus:border-blue-500"
                                  rows="3" placeholder="Say hi...">{{ old('text_note', $note->text) }}</textarea>
                        @error('text_note')
                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-center">
                        <a class="mt-3 mr-1 py-2 px-10 inline-flex justify-center items-center gap-x-5 text-sm font-medium rounded-lg border border-transparent bg-blue-400 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                           href="{{ route('home') }}">
                            No
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </a>
                        <a
                            class="mt-3 mr-1 py-2 px-10 inline-flex justify-center items-center gap-x-5 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none"
                            href="{{ route('deleteConfirm', Crypt::encrypt($note->id)) }}">
                            Yes
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
