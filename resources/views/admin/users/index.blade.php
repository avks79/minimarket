<x-app-layout>

    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
                    Tata Kelola User
                </h2>

                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                    Kelola data pengguna yang terdaftar di sistem.
                </p>
            </div>

            <a
                href="{{ route('admin.dashboard') }}"
                class="inline-flex items-center justify-center gap-2 px-4 py-2
                       bg-gray-100 hover:bg-gray-200
                       dark:bg-gray-700 dark:hover:bg-gray-600
                       text-gray-700 dark:text-gray-200
                       rounded-lg text-sm font-medium transition"
            >
                ← Dashboard
            </a>
        </div>
    </x-slot>

    <div class="py-8">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- ALERT SUCCESS --}}
            @if(session('success'))
                <div class="mb-6 flex items-center gap-3 p-4 rounded-xl
                            bg-green-50 border border-green-200
                            dark:bg-green-900/20 dark:border-green-800">

                    <div class="flex items-center justify-center w-9 h-9
                                bg-green-100 dark:bg-green-800
                                rounded-full">

                        <svg class="w-5 h-5 text-green-600 dark:text-green-300"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M5 13l4 4L19 7"/>
                        </svg>

                    </div>

                    <p class="text-sm font-medium text-green-700 dark:text-green-300">
                        {{ session('success') }}
                    </p>
                </div>
            @endif


            {{-- ALERT ERROR --}}
            @if(session('error'))
                <div class="mb-6 flex items-center gap-3 p-4 rounded-xl
                            bg-red-50 border border-red-200
                            dark:bg-red-900/20 dark:border-red-800">

                    <div class="flex items-center justify-center w-9 h-9
                                bg-red-100 dark:bg-red-800
                                rounded-full">

                        <svg class="w-5 h-5 text-red-600 dark:text-red-300"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>

                    </div>

                    <p class="text-sm font-medium text-red-700 dark:text-red-300">
                        {{ session('error') }}
                    </p>
                </div>
            @endif


            {{-- STATISTIC CARDS --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">

                {{-- TOTAL USER --}}
                <div class="bg-white dark:bg-gray-800
                            border border-gray-100 dark:border-gray-700
                            rounded-2xl p-5 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Total Pengguna
                            </p>

                            <h3 class="text-3xl font-bold text-gray-800 dark:text-white mt-1">
                                {{ $users->count() }}
                            </h3>
                        </div>

                        <div class="w-12 h-12 flex items-center justify-center
                                    rounded-xl bg-blue-100 dark:bg-blue-900/40">

                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M17 20h5v-2a4 4 0 00-4-4h-1
                                         M9 20H4v-2a4 4 0 014-4h1
                                         M12 12a4 4 0 100-8 4 4 0 000 8z"/>
                            </svg>

                        </div>

                    </div>
                </div>


                {{-- ADMIN --}}
                <div class="bg-white dark:bg-gray-800
                            border border-gray-100 dark:border-gray-700
                            rounded-2xl p-5 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Administrator
                            </p>

                            <h3 class="text-3xl font-bold text-gray-800 dark:text-white mt-1">
                                {{ $users->where('role', 'admin')->count() }}
                            </h3>
                        </div>

                        <div class="w-12 h-12 flex items-center justify-center
                                    rounded-xl bg-purple-100 dark:bg-purple-900/40">

                            <svg class="w-6 h-6 text-purple-600 dark:text-purple-400"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 15l-3 3m3-3l3 3m-3-3v-4
                                         M5 20h14
                                         a2 2 0 002-2v-5
                                         a2 2 0 00-2-2h-1
                                         a6 6 0 10-12 0H5
                                         a2 2 0 00-2 2v5
                                         a2 2 0 002 2z"/>
                            </svg>

                        </div>

                    </div>
                </div>


                {{-- USER BIASA --}}
                <div class="bg-white dark:bg-gray-800
                            border border-gray-100 dark:border-gray-700
                            rounded-2xl p-5 shadow-sm">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                User Biasa
                            </p>

                            <h3 class="text-3xl font-bold text-gray-800 dark:text-white mt-1">
                                {{ $users->where('role', 'user')->count() }}
                            </h3>
                        </div>

                        <div class="w-12 h-12 flex items-center justify-center
                                    rounded-xl bg-green-100 dark:bg-green-900/40">

                            <svg class="w-6 h-6 text-green-600 dark:text-green-400"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0z
                                         M4 21a8 8 0 0116 0"/>
                            </svg>

                        </div>

                    </div>
                </div>

            </div>


            {{-- USER TABLE --}}
            <div class="bg-white dark:bg-gray-800
                        border border-gray-100 dark:border-gray-700
                        rounded-2xl shadow-sm overflow-hidden">

                {{-- TABLE HEADER --}}
                <div class="px-6 py-5 border-b border-gray-100 dark:border-gray-700">

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">

                        <div>
                            <h3 class="text-lg font-bold text-gray-800 dark:text-gray-100">
                                Daftar Pengguna
                            </h3>

                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                Data seluruh pengguna yang terdaftar.
                            </p>
                        </div>

                    </div>

                </div>


                {{-- TABLE --}}
                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-gray-50 dark:bg-gray-900/50">

                            <tr>

                                <th class="px-6 py-4 text-left text-xs font-semibold
                                           text-gray-500 dark:text-gray-400 uppercase">
                                    Pengguna
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold
                                           text-gray-500 dark:text-gray-400 uppercase">
                                    Email
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold
                                           text-gray-500 dark:text-gray-400 uppercase">
                                    Role
                                </th>

                                <th class="px-6 py-4 text-right text-xs font-semibold
                                           text-gray-500 dark:text-gray-400 uppercase">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-gray-100 dark:divide-gray-700">

                            @forelse($users as $user)

                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30 transition">

                                    {{-- USER --}}
                                    <td class="px-6 py-4">

                                        <div class="flex items-center gap-3">

                                            <div class="w-11 h-11 rounded-full
                                                        bg-blue-100 dark:bg-blue-900/40
                                                        flex items-center justify-center">

                                                <span class="text-blue-600 dark:text-blue-400
                                                             font-bold text-sm">

                                                    {{ strtoupper(substr($user->name, 0, 1)) }}

                                                </span>

                                            </div>

                                            <div>

                                                <p class="font-semibold text-gray-800 dark:text-gray-100">
                                                    {{ $user->name }}
                                                </p>

                                                <p class="text-xs text-gray-500 dark:text-gray-400">
                                                    ID #{{ $user->id }}
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    {{-- EMAIL --}}
                                    <td class="px-6 py-4">

                                        <span class="text-sm text-gray-600 dark:text-gray-300">
                                            {{ $user->email }}
                                        </span>

                                    </td>


                                    {{-- ROLE --}}
                                    <td class="px-6 py-4">

                                        @if($user->role === 'admin')

                                            <span class="inline-flex items-center gap-1.5
                                                         px-3 py-1 rounded-full
                                                         text-xs font-semibold
                                                         bg-purple-100 text-purple-700
                                                         dark:bg-purple-900/40 dark:text-purple-300">

                                                <span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>

                                                Admin

                                            </span>

                                        @else

                                            <span class="inline-flex items-center gap-1.5
                                                         px-3 py-1 rounded-full
                                                         text-xs font-semibold
                                                         bg-blue-100 text-blue-700
                                                         dark:bg-blue-900/40 dark:text-blue-300">

                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>

                                                User

                                            </span>

                                        @endif

                                    </td>


                                    {{-- ACTION --}}
                                    <td class="px-6 py-4">

                                        <div class="flex items-center justify-end gap-2">

                                            {{-- EDIT --}}
                                            <a
                                                href="{{ route('admin.users.edit', $user) }}"
                                                class="inline-flex items-center gap-1.5
                                                       px-3 py-2 rounded-lg
                                                       text-sm font-medium
                                                       text-blue-600
                                                       bg-blue-50 hover:bg-blue-100
                                                       dark:bg-blue-900/30
                                                       dark:hover:bg-blue-900/50
                                                       dark:text-blue-400
                                                       transition"
                                            >

                                                <svg class="w-4 h-4"
                                                     fill="none"
                                                     stroke="currentColor"
                                                     viewBox="0 0 24 24">

                                                    <path stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M11 5H6a2 2 0 00-2 2v11
                                                             a2 2 0 002 2h11a2 2 0 002-2v-5
                                                             M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1
                                                             1-4 7.5-7.5z"/>

                                                </svg>

                                                Edit

                                            </a>


                                            {{-- DELETE --}}
                                            @if($user->role !== 'admin')

                                                <form
                                                    action="{{ route('admin.users.destroy', $user) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus {{ $user->name }}?')"
                                                >

                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="inline-flex items-center gap-1.5
                                                               px-3 py-2 rounded-lg
                                                               text-sm font-medium
                                                               text-red-600
                                                               bg-red-50 hover:bg-red-100
                                                               dark:bg-red-900/30
                                                               dark:hover:bg-red-900/50
                                                               dark:text-red-400
                                                               transition"
                                                    >

                                                        <svg class="w-4 h-4"
                                                             fill="none"
                                                             stroke="currentColor"
                                                             viewBox="0 0 24 24">

                                                            <path stroke-linecap="round"
                                                                  stroke-linejoin="round"
                                                                  stroke-width="2"
                                                                  d="M19 7l-.867 12.142
                                                                     A2 2 0 0116.138 21H7.862
                                                                     a2 2 0 01-1.995-1.858L5 7
                                                                     m5 4v6m4-6v6
                                                                     M9 7V4a1 1 0 011-1h4a1 1 0 011 1v3
                                                                     m-9 0h14"/>

                                                        </svg>

                                                        Hapus

                                                    </button>

                                                </form>

                                            @endif

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="4" class="px-6 py-12 text-center">

                                        <div class="flex flex-col items-center">

                                            <div class="w-16 h-16 rounded-full
                                                        bg-gray-100 dark:bg-gray-700
                                                        flex items-center justify-center mb-4">

                                                <svg class="w-8 h-8 text-gray-400"
                                                     fill="none"
                                                     stroke="currentColor"
                                                     viewBox="0 0 24 24">

                                                    <path stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M17 20h5v-2a4 4 0 00-4-4h-1
                                                             M9 20H4v-2a4 4 0 014-4h1
                                                             M12 12a4 4 0 100-8 4 4 0 000 8z"/>

                                                </svg>

                                            </div>

                                            <h3 class="font-semibold text-gray-700 dark:text-gray-200">
                                                Belum ada pengguna
                                            </h3>

                                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                                Belum ada user yang terdaftar.
                                            </p>

                                        </div>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>
