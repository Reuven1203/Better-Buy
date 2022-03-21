<?php

use Illuminate\Support\Facades\DB;

$users = DB::select('select * from users');

use App\Http\Controllers\Admin\UserController;
?>
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User
        </h2>
    </x-slot>
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{route('admin.users.update',$user->id)}}" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                                <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" value=<?php echo $user->name; ?> />
                            </div>
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="email" class="block font-medium text-sm text-gray-700">E-mail</label>
                                <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full" value=<?php echo $user->email; ?> />
                            </div>
                            <!-- <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="price" class="block font-medium text-sm text-gray-700">Price</label>
                            <input type="number" name="price" id="price" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('price', '') }}" />
                        </div> -->
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <x-jet-label for="role_id" value="{{ __('Register as:') }}" />
                                <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" value=<?php echo $user->role_id; ?>>
                                    <option value="Admin">Admin</option>
                                    <option value="Client">Client</option>
                                    <option value="Seller">Seller</option>

                                </select>
                            </div>


                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <input type="submit" value="Edit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">

                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>