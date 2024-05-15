<x-app-layout>
    <div class="py-12">

        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('habits.create') }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            Create New Habit
        </a>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <h2 class="text-2xl font-semibold px-6 py-4 bg-gray-200 dark:bg-gray-700 border-b border-gray-300 dark:border-gray-600  dark:text-white">
                    Habits
                </h2>

                <div class="p-6">
                    @forelse ($habits as $habit)
                        <a href="{{ route('habits.edit', $habit->id) }}"
                           class="block mb-4 p-4 border rounded-lg shadow-md bg-white dark:bg-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 transition duration-300 ease-in-out">
                            <p class="font-bold text-lg text-gray-800 dark:text-white">{{ $habit->name }}</p>
                            <p class="text-gray-600 dark:text-gray-300">{{ $habit->description }}</p>
                            <div class="mt-2 flex items-center">
                                <p class="text-sm text-gray-500">
                                    Completion Status: {{ $habit->complete ? 'Complete' : 'Incomplete' }}
                                </p>
                            </div>
                        </a>
                    @empty
                        <p class="text-gray-600 dark:text-gray-300 py-4">No habits found.</p>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
