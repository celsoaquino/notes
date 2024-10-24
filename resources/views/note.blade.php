<section class="mt-4 ">
    <div class="flex flex-col bg-white border shadow-sm rounded-xl">
        <div class="flex justify-between items-center border-b rounded-t-xl py-3 px-4 md:px-5">
            <div>
                <h3 class="my-1.5 text-lg font-bold text-gray-800">
                    {{ $note->title }}
                </h3>
                <p class="text-xs text-gray-400"> Created at:
                    <strong>{{ date('d-m-Y H:i:s', strtotime($note->created_at)) }}</strong></p>
                @if($note->created_at != $note->updated_at)
                    <p class="text-xs text-gray-400"> Updated at:
                        <strong>{{ date('d-m-Y H:i:s', strtotime($note->updated_at))  }}</strong></p>
                @endif
            </div>
            <div class="flex items-center gap-x-1">
                <div class="hs-tooltip inline-block">
                    <a href="{{ route('edit', Crypt::encrypt($note->id)) }}"
                       class="hs-tooltip-toggle size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                        </svg>
                        <span
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                            role="tooltip">Edit</span>
                    </a>
                </div>
                <div class="hs-tooltip inline-block">
                    <a href="{{ route('delete', Crypt::encrypt($note->id)) }}"
                       class="hs-tooltip-toggle size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-red-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                        </svg>
                        <span
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm"
                            role="tooltip">Delete</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="p-4 md:p-5">
            <p class="mt-2 text-gray-500">
                {{ $note->text }}
            </p>
            {{-- <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-none focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                href="#">
                 Card link
                 <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round">
                     <path d="m9 18 6-6-6-6"></path>
                 </svg>
             </a>--}}
        </div>
    </div>
</section>
