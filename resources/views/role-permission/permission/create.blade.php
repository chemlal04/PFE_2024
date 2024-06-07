<x-app-layout>

    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <div class="w-full max-w-4xl">

                @if ($errors->any())
                <ul class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif

                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-200 p-4 rounded-t-lg">
                        <h4 class="text-lg font-semibold flex justify-between items-center">
                            Create Permission
                            <a href="{{ url('permissions') }}" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Back</a>
                        </h4>
                    </div>
                    <div class="p-4">
                        <form action="{{ url('permissions') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">Permission Name</label>
                                <input type="text" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
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
