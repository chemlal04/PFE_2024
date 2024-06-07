<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

            {{ __('users') }}

        </h2>

    </x-slot>
     

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">


                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="mt-3 bg-white shadow-md rounded-lg">
                    <div class="bg-gray-200 p-4 rounded-t-lg">
                        <h4 class="text-lg font-semibold flex justify-between items-center">
                            Users
                        </h4>
                    </div>
                    <div class="p-4">
                        <table class="min-w-full divide-y divide-gray-200 table-auto">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="border p-2 text-left">Id</th>
                                    <th class="border p-2 text-left">Name</th>
                                    <th class="border p-2 text-left">Email</th>
                                    <th class="border p-2 text-left">Roles</th>
                                    <th class="border p-2 text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user)
                                <tr>
                                    <td class="border p-2">{{ $user->id }}</td>
                                    <td class="border p-2">{{ $user->name }}</td>
                                    <td class="border p-2">{{ $user->email }}</td>
                                    <td class="border p-2">
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $rolename)
                                                <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">{{ $rolename }}</span>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="border p-2">
                                        <a href="{{ url('users/'.$user->id.'/edit') }}" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit</a>
                                        <a href="{{ url('users/'.$user->id.'/delete') }}" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-2">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>