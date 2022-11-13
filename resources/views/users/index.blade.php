<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-blue-600 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <section class="antialiased  text-blue-600 px-4 pt-6">
        <div class="flex flex-col h-full">
            <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-blue-200">
                <header class="px-5 py-4 border-b ">
                    <h1>
                        <a href="{{ route('users.create') }}" class="font-bold text-blue-600 hover:text-blue-400">Create New User</a>
                    </h1>
                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-blue-400 bg-blue-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">ID</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Name</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Email</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Action</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-blue-100">
                            @foreach($users as $user)
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="font-medium text-blue-800">{{ $user->id }}</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $user->name }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-blue-800">{{ $user->email }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <a href="{{ route('users.show',$user->id) }}" class="text-left font-medium text-blue-800 hover:text-blue-400">Show</a> |
                                        <a href="{{ route('users.edit',$user->id) }}" class="text-left font-medium text-blue-800 hover:text-blue-400">Edit</a> |
                                        <form class="text-left font-medium text-red-600 hover:text-red-300" action=" {{route('users.destroy',$user->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete {{ $user->name }}?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br />

                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
