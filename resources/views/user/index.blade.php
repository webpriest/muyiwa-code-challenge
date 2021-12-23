<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-between">
                    <div>List of Users</div>
                    <div><a href="#" class="bg-gray-500 hover:bg-blue-700 text-blue font-bold py-2 px-4 rounded flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg mr-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                      </svg> Add User</a></div>
                </div>

                <div class="container flex justify-center mx-auto">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="border-b border-gray-200 shadow">
                                @if($users->count())
                                <table class="divide-y divide-gray-300 ">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Thumb
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Name
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Email
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Date added
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Edit
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-300">
                                        @foreach($users as $user)
                                        <tr class="whitespace-nowrap">
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                <img src="{{ $user->avatar() }}" alt="{{ $user->full_name }}" width="50">
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    {{ $user->full_name }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-500">
                                                    {{ $user->email }}<br>
                                                    <small>{{ $user->phone }}</small>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $user->created_at->diffForHumans() }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</x-app-layout>
