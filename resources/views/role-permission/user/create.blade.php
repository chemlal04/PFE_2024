<x-app-layout>
    <div class="container mx-auto mt-5">
        <div class="flex flex-col">
            <div class="w-full">

                @if ($errors->any())
                <ul class="bg-yellow-200 border border-yellow-400 text-yellow-700 px-4 py-3 rounded mb-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-100 px-4 py-3 border-b border-gray-200">
                        <h4 class="text-lg font-semibold">Create User
                            <a href="{{ url('users') }}" class="bg-red-500 text-white px-4 py-2 rounded float-right">Back</a>
                        </h4>
                    </div>
                    <div class="px-4 py-5">
                        <form action="{{ url('users') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="block text-gray-700">Name</label>
                                <input type="text" name="name" class="form-input mt-1 block w-full" />
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700">Email</label>
                                <input type="text" name="email" class="form-input mt-1 block w-full" />
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-gray-700">Password</label>
                                <input type="password" name="password" class="form-input mt-1 block w-full" />
                            </div>
                            <div class="mb-4">
                                <label for="roles" class="block text-gray-700">Roles</label>
                                <select name="roles[]" class="form-select mt-1 block w-full" multiple>
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="bg-red-500 text-black px-4 py-2 rounded">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
