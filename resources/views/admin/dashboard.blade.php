<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard Admin
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-2xl font-bold mb-2">
                        Selamat Datang, {{ auth()->user()->name }} 👋
                    </h1>

                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        Kamu sedang login sebagai Administrator.
                    </p>

                    {{-- Menu Kelola User --}}
                    <a
                        href="{{ route('admin.users') }}"
                        class="inline-flex items-center px-5 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg transition"
                    >
                        👥 Tata Kelola User
                    </a>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>
