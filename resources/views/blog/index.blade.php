@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-14 border-b border-gray-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-14 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/10/11/01/58/woman-1730325_960_720.jpg" width="700px">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                Learn how to get in shape
            </h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text text-gray-800">FitMachine</span>
            </span>, 1 day ago
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ipsum eius voluptate iste facere dolores
                repellendus! Maxime vel nobis voluptates tempora! Ducimus voluptatum adipisci illum similique quam fugiat
                vero quia? Nobis, similique.
            </p>
            <a href="" class="uppercase bg-red-800 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>
        </div>
    </div>
@endsection
