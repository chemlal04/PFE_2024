<x-app-layout>

    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <div class="w-full max-w-4xl">

                @if ($errors->any())
                <ul class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-200 p-4 rounded-t-lg">
                        <h4 class="text-lg font-semibold flex justify-between items-center">
                            Edit User
                            <a href="{{ url('users') }}" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Back</a>
                        </h4>
                    </div>
                    <div class="p-4">
                        <form action="{{ url('users/'.$user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="text" name="email" readonly value="{{ $user->email }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                            </div>
                            <div class="mb-3">
                                <label for="roles" class="block text-sm font-medium text-gray-700">Roles</label>
                                <select name="roles[]" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" multiple>
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                        <option
                                            value="{{ $role }}"
                                            {{ in_array($role, $userRoles) ? 'selected' : '' }}
                                        >
                                            {{ $role }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('roles') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
