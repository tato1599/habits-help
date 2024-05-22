<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">


            <div>
                <div class="flex justify-end mb-4 mr-6">
                    <a href="{{ route('habits.create') }}"
                       class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Create New Habit
                    </a>
                </div>

                <div class="p-6">
                    @forelse ($habits as $habit)
                        <div class="block mb-4 p-4 border rounded-lg shadow-md bg-white dark:bg-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 transition duration-300 ease-in-out">
                            <p class="font-bold text-lg text-gray-800 dark:text-white">{{ $habit->name }}</p>
                            <p class="text-gray-600 dark:text-gray-300">{{ $habit->description }}</p>
                            <div class="mt-2 flex items-center">
                                <p class="text-sm text-gray-500">
                                    Completion Status: {{ $habit->complete ? 'Complete' : 'Incomplete' }}
                                </p>
                            </div>
                            <div class="flex items-center space-x-4 mt-4">
                                <a href="{{ route('habits.edit', $habit->id) }}"
                                   class="text-white inline-flex items-center bg-green-500 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                    Edit
                                </a>
                                <form action="{{ route('habits.destroy', $habit->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center text-white !bg-red-600 hover:!bg-red-700 focus:ring-4 focus:outline-none focus:!ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:!bg-red-500 dark:hover:!bg-red-600 dark:focus:!ring-red-900"
                                            onclick="return confirm('Are you sure you want to delete this habit?')">
                                        <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-600 dark:text-gray-300 py-4">No habits found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
