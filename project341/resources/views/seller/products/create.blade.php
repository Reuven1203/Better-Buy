<?php

use Illuminate\Support\Facades\DB;

$products = DB::select('select * from products');

use App\Http\Controllers\Admin\ProductController;
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Product
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('seller.products.create') }}">

                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{old('brand', '')}}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="Brand" class="block font-medium text-sm text-gray-700">Brand</label>
                            <input type="text" name="brand" id="brand" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('brand', '') }}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="price" class="block font-medium text-sm text-gray-700">Price</label>
                            <input type="number" name="brand" id="brand" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('brand', '') }}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="image" class="block font-medium text-sm text-gray-700">Image</label>
                            <input type="file" name="image" id="image" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('brand', '') }}" />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="stock" class="block font-medium text-sm text-gray-700">Available Stock</label>
                            <input type="number" name="stock" id="stock" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('brand', '') }}" />
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>