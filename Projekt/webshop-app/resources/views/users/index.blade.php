<x-app-layout>
    <div class="flex justify-between max-w-6xl mx-auto text-white pt-4 pb-2">
        <h1 class="text-2xl font-bold">Users</h1>
    </div>
    <div class="max-w-6xl mx-auto py-6">
        @foreach ($users as $user)
        <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
            <div class="flex items-center justify-between">
                <div class="flex space-x-4">
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
                        <span class="font-semibold">Role:</span> {{$user->role}}
                    </div>
                </div>

                <div class="flex space-x-2">
                    <a href="{{route('users.edit', ['user' => $user])}}" class="bg-slate-500 text-white px-3 py-1 rounded-md hover:bg-slate-600">Edit</a>
                    <form method="post" action="{{route('users.destroy', ['user' => $user])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
