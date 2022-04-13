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

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                    <tr>
                                        @if(auth()->user()->role_id == "Admin")
                                        <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            User ID
                                        </th>
                                        @endif
                                        <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Orders
                                        </th>
                                        <th scope="col" width="50" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Image
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Price
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Date
                                        </th>
            
                                        <th scope="col" width="200" class="px-6 py-3 bg-gray-50">
                                            Commands
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @if (auth()->user()->role_id != "Admin" && auth()->user()->role_id == "Client")
                                    @foreach ($user->orders as $order)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $order->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            <img src="/storage/{{$product->image}}" alt="">
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $order->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $order->price }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $order->date }}
                                        </td>
                                        <td>
                                            <form class="inline-block" action="{{ route('seller.products.edit', $product->id) }}" method="get">
                                                <input type="hidden" name="_method" value="Edit">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2" style="margin-left:60px" value="Edit">
                                            </form>
                                            <form class="inline-block" action="{{ route('seller.products.edit', $product->id) }}" method="get">
                                                <input type="hidden" name="_method" value="SponsorProduct">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2" style="margin-left:60px" value="Sponsor Product">
                                            </form>
                                            <form class="inline-block" action="{{ route('seller.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">

                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" style="margin-left:60px" value="Delete">
                                            </form>
                                        </td>


                                    </tr>

                                    @endforeach
                                    @endif
                                    @if(auth()->user()->role_id == 'Admin')
                                    @foreach ($allProducts as $order)

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $order->user_id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $order->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            <img src="/storage/{{$product->image}}" alt="">
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $order->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $order->price }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $order->date }}
                                        </td>
                                        <td>
                                            <form class="inline-block" action="{{ route('seller.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">

                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" style="margin-left:60px" value="Delete">
                                            </form>
                                        </td>


                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>