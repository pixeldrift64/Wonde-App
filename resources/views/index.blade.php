<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ env('APP_NAME') }} - Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="frfxont-semibold text-xl text-gray-800 leading-tight mb-2">
                        Lessons for Week Commencing {{ \Carbon\Carbon::now()->startOfWeek()->format('jS F Y') }}
                    </h2>
                    <div class="bg-white w-full divide-y divide-gray-200">
                        @foreach ($lessonsForWeek as $day => $lessons)
                            <details>
                                <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none">{{ ucfirst($day) }}</summary>

                                <ul role="list" class="divide-y divide-gray-200">
                                @foreach ($lessons as $lesson)
                                    <li class="border-l-4">
                                        <a href={{ route('lesson', ['lessonId' => $lesson->id]) }} class="events-list-item block hover:bg-gray-50">
                                        <div class="flex items-center">

                                            <div class="px-4 py-4 sm:px-6 flex-1">
                                                <div class="md:flex items-center justify-between">
                                                    <div>
                                                        <div class="flex">
                                                            <p class="truncate text-md font-medium text-gray-600">
                                                                <span class="text-indigo-600">{{ $lesson->class->name }}</span>
                                                            </p>
                                                        </div>

                                                        <div class="flex items-center text-sm text-gray-500">
                                                            <!-- Heroicon name: mini/calendar -->
                                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                                                            </svg>
                                                            <p>
                                                                <time>{{ $lesson->period->data->name }} - {{ \Carbon\Carbon::parse($lesson->start_at->date, $lesson->start_at->timezone)->setTimezone(config('app.timezone'))->format('h:ia') }}</time>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </li>
                                @endforeach
                                </ul>
                            </details>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
