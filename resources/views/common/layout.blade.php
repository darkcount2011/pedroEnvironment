<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('admin.index') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('adminSchools.index')"
                                :active="request()->routeIs('adminSchools.index')">
                        Scholen
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('adminGroups.index')"
                                :active="request()->routeIs('adminGroups.index')">
                        Groepen
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('adminTeachers.index')"
                                :active="request()->routeIs('adminTeachers.index')">
                        Leraren
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('adminStudents.index')"
                                :active="request()->routeIs('adminStudents.index')">
                        Leerlingen
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('adminSums.index')"
                                :active="request()->routeIs('adminSums.index')">
                        Sommen
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('adminFeedbackSums.index')"
                                :active="request()->routeIs('adminFeedbackSums.index')">
                        Feedback Sommen
                    </x-nav-link>
                </div>

            </div>
        </div>
    </div>
</nav>
