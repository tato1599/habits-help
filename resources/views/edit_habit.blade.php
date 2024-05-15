<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <a href="{{ route('habits.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4 transform rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
                <span class="sr-only">Icon description</span>
            </a>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-6 dark:text-white">Edit Habit</h2>

                    <form action="{{ route('habits.update', $habit) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Agrega este campo para indicar el método PUT para actualizar -->

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white">Habit Name:</label>
                            <input type="text" name="name" id="name" required value="{{ $habit->name }}"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-white">Description:</label>
                            <textarea name="description" id="description" required
                                      class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $habit->description }}</textarea>
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="start_date" class="block text-sm font-medium text-gray-700 dark:text-white">Start Date:</label>
                                <input type="date" name="start_date" id="start_date" required value="{{ $habit->start_date }}"
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div>
                                <label for="end_date" class="block text-sm font-medium text-gray-700 dark:text-white">End Date:</label>
                                <input type="date" name="end_date" id="end_date" required value="{{ $habit->end_date }}"
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="category" class="block text-sm font-medium text-gray-700 dark:text-white">Category:</label>
                            <select name="category" id="category" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="health" {{ $habit->category === 'health' ? 'selected' : '' }}>Health</option>
                                <option value="fitness" {{ $habit->category === 'fitness' ? 'selected' : '' }}>Fitness</option>
                                <option value="productivity" {{ $habit->category === 'productivity' ? 'selected' : '' }}>Productivity</option>
                                <option value="creativity" {{ $habit->category === 'creativity' ? 'selected' : '' }}>Creativity</option>
                                <option value="other" {{ $habit->category === 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="frequency" class="block text-sm font-medium text-gray-700 dark:text-white">Frequency:</label>
                            <select name="frequency" id="frequency" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="daily" {{ $habit->frequency === 'daily' ? 'selected' : '' }}>Daily</option>
                                <option value="weekly" {{ $habit->frequency === 'weekly' ? 'selected' : '' }}>Weekly</option>
                                <option value="monthly" {{ $habit->frequency === 'monthly' ? 'selected' : '' }}>Monthly</option>
                                <option value="yearly" {{ $habit->frequency === 'yearly' ? 'selected' : '' }}>Yearly</option>
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update Habit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
