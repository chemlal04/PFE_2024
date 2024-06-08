<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

            {{ __('roles') }}

        </h2>

    </x-slot>

   <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">


                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="bg-white shadow-md rounded-lg mt-3">
                    <div class="bg-gray-100 px-4 py-3 border-b border-gray-200 rounded-t-lg">
                        <h4 class="text-lg font-semibold flex justify-between items-center">
                            Roles
                            <a href="{{ url('roles/create') }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Add Role
                            </a>
                        </h4>
                    </div>
                    <div class="p-4 overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($roles as $role)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $role->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $role->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap flex space-x-2">
                                        <a href="{{ url('roles/'.$role->id.'/give-permissions') }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300">
                                            Add / Edit Role Permission
                                        </a>
                                        <a href="{{ url('roles/'.$role->id.'/edit') }}" class="bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-green-300">
                                            Edit
                                        </a>
                                        @if ($role->name !== 'super_admin')
                                        <a href="{{ url('roles/'.$role->id.'/delete') }}" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300">
                                            Delete
                                        </a>
                                        @endif
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