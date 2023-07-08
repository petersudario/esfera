<aside class="flex flex-col w-64 h-screen px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700 z-10">
    <a href="#">
        <img class="w-auto h-7" src="https://merakiui.com/images/logo.svg" alt="">
    </a>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="-mx-3 space-y-6 ">
            <div class="space-y-3 ">

                <a class="flex items-center px-3 py-2 capitalize text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="{{ route('profile.show') }}"
                   @click.prevent="$root.submit();">
                    <x-fas-user class="w-4 h-4" />
                    <span class="mx-2 text-sm font-medium"> {{ Auth::user()->name }} </span>
                </a>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="{{ route('users.index') }}">
                    <x-fas-list class="w-4 h-4" />

                    <span class="mx-2 text-sm font-medium">Users</span>
                </a>
            </div>
        </nav>
    </div>




                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="{{ route('logout') }}"
                                     @click.prevent="$root.submit();">

                        <span class="mx-2 text-sm font-medium">Log Out</span>
                        <x-gmdi-logout class="w-5 h-5" />
                    </a>
                </form>


</aside>
