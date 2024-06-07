<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

            {{ __('permissions') }}

        </h2>

    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card mt-3">
                    <div class="card-header bg-gray-200 p-4 rounded-t-lg">
                        <h4 class="text-lg font-semibold flex justify-between items-center">
                            Permissions
                            <a href="{{ url('permissions/create') }}" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Add Permission</a>
                        </h4>
                    </div>
                    <div class="card-body p-4 bg-white rounded-b-lg">
                        <table class="table-auto w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border p-2 text-left">Id</th>
                                    <th class="border p-2 text-left">Name</th>
                                    <th class="border p-2 text-left w-2/5">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                <tr class="border-b">
                                    <td class="border p-2">{{ $permission->id }}</td>
                                    <td class="border p-2">{{ $permission->name }}</td>
                                    <td class="border p-2">
                                        <a href="{{ url('permissions/'.$permission->id.'/edit') }}" class="bg-green-900 text-white px-4 py-2 rounded-md hover:bg-green-600">Edit</a>
                                        <a href="{{ url('permissions/'.$permission->id.'/delete') }}" class="bg-red-500 text-white px-4 py-2 rounded-md mx-2 hover:bg-red-600">Delete</a>
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