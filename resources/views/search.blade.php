@extends('layout')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Find what you are looking for!
        </h2>
    </x-slot>

<div>
                <div class="mx-auto pull-right">
                    <div class="flex-auto text-right mt-2">
                        <form action="{{url('/search')}}" method="get">
                            <input type="get" placeholder="Enter a brand" name="search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </div>
</div>
    <div>
    <table class="w-full text-md rounded mb-4">
        <thead>
        <tr class="border-b">
            <th class="text-left p-3 px-5">Brand</th>
            <th class="text-left p-3 px-5">Model</th>
            <th class="text-left p-3 px-5">Description</th>
            <th class="text-left p-3 px-5">Production date</th>
            <th class="text-left p-3 px-5">Image</th>
            <th class="text-left p-3 px-5">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($phones as $phone)
            <tr class="border-b hover:bg-orange-100">
                <td class="p-3 px-5">
                    {{$phone->brand}}
                </td>
                <td class="p-3 px-5">
                    {{$phone->model}}
                </td>
                <td class="p-3 px-5">
                    {{$phone->description}}
                </td>
                <td class="p-3 px-5">
                    {{$phone->productionDate}}
                </td>
                <td class="p-3 px-5">
                    <img src="{{$phone->image}}" width="100px" height="100px">
                </td>
                <td class="p-3 px-5">

                    <a href="/edit/{{$phone->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                    <form action="/edit/{{$phone->id}}" class="inline-block">
                        <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                        {{ csrf_field() }}
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</x-app-layout>
@endsection
