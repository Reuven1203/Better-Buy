<?php

use App\Models\Product;

$allProducts = Product::all();
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Products List
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('seller.products.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" style="margin-left:35px">Add Product</a>
            </div>
            

        </div>
    </div>
</x-app-layout>