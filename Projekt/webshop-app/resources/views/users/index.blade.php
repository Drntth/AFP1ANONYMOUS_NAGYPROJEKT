<x-app-layout>
    <div class="flex justify-between max-w-3xl mx-auto text-white pt-4 pb-2">
        <h1 class="text-2xl font-bold">Users</h1>
    </div>
    <div class="max-w-3xl mx-auto py-6">
        @foreach ($users as $user)
        <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
            <div class="flex flex-col items-center justify-between">
                <div class="flex space-x-4 items-center">
                    <div class="text-md text-gray-950">
                        <span class="font-semibold">ID:</span> {{$user->id}}
                    </div>
                    <div class="text-md text-gray-950">
                        <span class="font-semibold">Name:</span> {{$user->name}}
                    </div>
                    <div class="text-md text-gray-950">
                        <span class="font-semibold">Email:</span> {{$user->email}}
                    </div>
                    <div class="text-md text-gray-950">
                        <span class="font-semibold">Role:</span>
                    </div>
                    <div class="text-md text-gray-950">
                        <form action="{{ route('users.updateRole', $user->id) }}" method="POST" class="inline">
                            @csrf
                            @method('PUT')
                            <select name="role" class="border-gray-300 rounded-md">
                                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                            <button type="submit" class="bg-blue-500 text-white ml-2 px-3 py-1 rounded-md hover:bg-blue-600">Save</button>
                        </form>
                    </div>
                    <div class="text-md text-gray-950">
                        <form method="post" action="{{route('users.destroy', ['user' => $user])}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                </div>

                <div class="flex space-x-2">

                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
