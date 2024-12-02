<x-app-layout>
    <div class="mx-5">
    <div class="flex justify-between max-w-3xl mx-auto text-white pt-4 pb-2">
        <h1 class="text-2xl font-bold">Users</h1>
    </div>
    <div class="max-w-3xl mx-auto py-6">
        @foreach ($users as $user)
        <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
            <div class="flex flex-col items-center justify-between md:flex-row">
                <div class="flex space-x-4 items-center mb-4 md:mb-0">
                    <div class="text-md text-gray-950">
                        <span class="font-semibold">ID:</span> {{$user->id}}
                    </div>
                    <div class="text-md text-gray-950">
                        <span class="font-semibold">Name:</span> {{$user->name}}
                    </div>
                    <div class="text-md text-gray-950">
                        <span class="font-semibold">Email:</span> {{$user->email}}
                    </div>
                </div>
                <div class="flex space-x-4 items-center">
                    <div class="text-md text-gray-950">
                        <span class="font-semibold">Role:</span>
                    </div>
                    <div x-data="{ dropdownOpen: false, selectedRole: '{{ $user->role }}' }" class="relative w-32 border-2 border-slate-500 rounded-md">
                        <form action="{{ route('users.updateRole', $user->id) }}" method="POST" class="inline">
                            @csrf
                            @method('PUT')
                            <div @click="dropdownOpen = !dropdownOpen" class="appearance-none block w-full rounded-md cursor-pointer px-4 py-1 bg-white">
                                <div class="flex items-center justify-between">
                                    <span x-text="{'user': 'User', 'admin': 'Admin'}[selectedRole]"></span>
                                    <i :class="dropdownOpen ? 'fa-square-caret-up' : 'fa-square-caret-down'" class="fa-regular fa-square-caret-down text-2xl text-slate-500"></i>
                                </div>
                            </div>
                            <div x-show="dropdownOpen"
                                 @click.away="dropdownOpen = false"
                                 class="absolute mt-1 w-full rounded-md shadow-all-sides bg-white z-10 p-1">
                                <div class="max-h-40 overflow-y-auto">
                                    <div @click="selectedRole = 'user'; dropdownOpen = false; $nextTick(() => $el.closest('form').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">User</div>
                                    <div @click="selectedRole = 'admin'; dropdownOpen = false; $nextTick(() => $el.closest('form').submit())" class="cursor-pointer px-4 py-2 hover:rounded-md hover:text-white hover:bg-slate-500">Admin</div>
                                </div>
                            </div>
                            <input type="hidden" name="role" :value="selectedRole">
                        </form>
                    </div>
                    <div class="text-md text-gray-950">
                        <form method="post" action="{{route('users.destroy', ['user' => $user])}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-500 text-white px-3 py-2 border-2 border-red-500 hover:border-red-600 rounded-md hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</x-app-layout>
