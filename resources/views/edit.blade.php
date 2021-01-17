@extends('layout')

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Phone') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                    <form method="POST" action="/edit/{{$phone->id}}">

                        <div class="form-group">
                            <textarea name="brand" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter a brand'>{{$phone->brand}}</textarea>
                            @if ($errors->has('brand'))
                                <span class="text-danger">{{ $errors->first('brand') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <textarea name="model" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter a model'>{{$phone->model}}</textarea>
                            @if ($errors->has('model'))
                                <span class="text-danger">{{ $errors->first('model') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter description'>{{$phone->description}}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="production">Production date:</label>
                            <input type="date" id="produced-at" name="production date" value="{{$phone->productionDate}}">
                            @if ($errors->has('productionDate'))
                                <span class="text-danger">{{ $errors->first('productionDate') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="custom-file bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                                <label for="file" class="custom-file-label">Select a file</label>
                                <br>
                                <input type="file" name="image" value="{{$phone->image}}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Phone Info</button>
                            <a href="{{url('/show')}}" class="btn btn-default">back</a>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
