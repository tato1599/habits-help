@php
    $user = Auth::user();
    $initials = strtoupper(substr($user->name, 0, 1)) . strtoupper(substr($user->name, strpos($user->name, ' ') + 1, 1));
@endphp
<header class="antialiased">
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
                <a href="/" class="flex mr-4">
                  <img src=" {{ asset('images/icons/habitosnav.png') }}" alt="Habits Help Logo" class="w-10 h-10" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Habits Help</span>
                </a>
              </div>
            <div class="flex items-center lg:order-2">
                <div class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:bg-gray-700 dark:divide-gray-600" id="apps-dropdown">
                    <div class="grid grid-cols-3 gap-4 p-4">
                        <a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 group">
                            <svg class="mx-auto mb-2 w-5 h-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-400 dark:group-hover:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                            </svg>
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Logout</div>
                        </a>
                    </div>
                </div>
                <button type="button" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <div class="flex items-center justify-center w-8 h-8 bg-gray-800 rounded-full text-white">
                        {{ $initials }}
                    </div>
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-semibold text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                        <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-1 text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                        <li>
                            <a href="{{ route('profile.show') }}" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account settings</a>
                        </li>
                    </ul>
                    <ul class="py-1 text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="block w-full">
                                @csrf
                                <button type="submit" class="block w-full text-left py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
