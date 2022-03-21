<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client and Products List') }}
        </h2>
    </x-slot>

    <div>
        <!-- @if (auth()->user()->role_id != "Admin") -->
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            Accessible only for Admins.
        </div>
        <!-- @endif -->
        <table class="min-w-full divide-y divide-gray-200 w-full">
            <thead>
                <tr>
                    <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Role
                    </th>

                    <th scope="col" width="200" class="px-6 py-3 bg-gray-50">
                        Commands
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $user->id }}
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $user->name }}
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{$user -> role_id}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <form class="inline-block" action="{{ route('admin.users.edit', $user->id) }}" method="get">
                            <input type="hidden" name="_method" value="Edit">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a><input type="submit" class="text-indigo-600 hover:text-red-900 mb-2 mr-2" style="margin-left:60px" value="Edit"></a>
                        </form>
                        <form class="inline-block" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" style="margin-left:60px" value="Delete">
                        </form>
                    </td>
                    @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>