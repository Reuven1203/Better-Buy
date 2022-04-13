<?php

use App\Models\Product;

$allProducts = Product::all();
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Orders List
        </h2>
    </x-slot>
</x-app-layout>