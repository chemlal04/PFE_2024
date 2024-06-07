<x-app-layout>
    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <div class="w-full max-w-xl">

                @if (session('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-200 px-4 py-3 border-b border-gray-300 rounded-t-lg">
                        <h4 class="text-lg font-semibold flex justify-between items-center">
                            Role : {{ $role->name }}
                            <a href="{{ url('roles') }}" class="bg-red-500 text-white px-4 py-2 rounded">Back</a>
                        </h4>
                    </div>
                    <div class="p-4">
                        <form action="{{ url('roles/'.$role->id.'/give-permissions') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                @error('permission')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror

                                <label for="" class="block text-sm font-medium text-gray-700">Permissions</label>

                                <div class="grid grid-cols-2 gap-4 mt-2">
                                    @foreach ($permissions as $permission)
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input
                                                type="checkbox"
                                                name="permission[]"
                                                value="{{ $permission->name }}"
                                                class="form-checkbox text-indigo-600 focus:ring-indigo-500 h-5 w-5"
                                                {{ in_array($permission->id, $rolePermissions) ? 'checked':'' }}
                                            />
                                            <span class="ml-2">{{ $permission->name }}</span>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>

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

