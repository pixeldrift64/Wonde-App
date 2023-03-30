<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a class="text-indigo-500" href="{{ route('dashboard') }}">Dashboard</a> / {{ $class->name }} - {{ \Carbon\Carbon::parse($lesson->start_at->date, $lesson->start_at->timezone)->setTimezone(config('app.timezone'))->format('d/m/Y') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
                        Lesson Details
                    </h2>
                    <p><b>Starts at:</b> {{ \Carbon\Carbon::parse($lesson->start_at->date, $lesson->start_at->timezone)->setTimezone(config('app.timezone'))->format('d/m/Y \a\t\ h:ia') }}</p>
                    <p><b>Ends at:</b> {{ \Carbon\Carbon::parse($lesson->end_at->date, $lesson->end_at->timezone)->setTimezone(config('app.timezone'))->format('d/m/Y \a\t\ h:ia') }}</p>

                    <ul role="list" class="divide-y divide-gray-20 mt-4">
                        <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white">
                            <div class="flex w-full items-center justify-between space-x-6">
                                <div class="flex-1 truncate">
                                    <div class="flex items-center space-x-3">
                                        <h2 class="truncate text-lg font-medium text-gray-900">Students in Class <b>{{ $class->name }}</b> </h2>
                                    </div>
                                    <ul role="list">
                                        @foreach ($students as $student)
                                            <li class="flex py-1 items-center space-x-1">
                                                <div class="flex-1">
                                                    <p class="text-sm font-medium text-gray-900">{{ $student->forename }} {{ $student->surname }}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
