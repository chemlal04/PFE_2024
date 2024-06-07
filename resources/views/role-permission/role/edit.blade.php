<x-app-layout>
    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <div class="w-full max-w-md">

                @if ($errors->any())
                <ul class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-200 px-4 py-3 border-b border-gray-300 rounded-t-lg">
                        <h4 class="text-lg font-semibold flex justify-between items-center">
                            Edit Role
                            <a href="{{ url('roles') }}" class="bg-red-500 text-white px-4 py-2 rounded">Back</a>
                        </h4>
                    </div>
                    <div class="p-4">
                        <form action="{{ url('roles/'.$role->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Role Name</label>
                                <input type="text" name="name" value="{{ $role->name }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
