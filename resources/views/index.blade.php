@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14 font-JosefinSans">
                    Do you want to become the REAL you?
                </h1>
                <a href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase font-Rosario">
                    Read more
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-14 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/01/10/17/32/physiotherapy-595529_960_720.jpg" alt="gym-gear"
                width="700px">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600 font-Rosario">
                Struggling to get in shape?
            </h2>

            <p class="py-8 text-gray-500 text-s font-RobotoSlab">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quo vero suscipit odit veritatis?
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9 font-RobotoSlab">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, recusandae. Aspernatur ea itaque a possimus
                quae consectetur neque sapiente?
            </p>
            <a href="/blog" class="uppercase bg-red-800 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-14 bg-gray-900 text-white">
        <h2 class="text-2xl pb-5 text-l font-Rosario ">
            We are experts!...
        </h2>
        <span class="font-extrabold block text-4xl py-1 font-JosefinSans">
            Routines
        </span>
        <span class="font-extrabold block text-4xl py-1 font-JosefinSans">
            Nutrition
        </span>
        <span class="font-extrabold block text-4xl py-1 font-JosefinSans">
            Equipment
        </span>
    </div>

    <div class="text-center py-14">
        <span class="uppercase text-s text-gray-400 font-Rosario">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10 font-JosefinSans">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500 font-RobotoSlab font-light">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis in sapiente nesciunt, est enim non fugit
            quidem nobis quos quisquam!
        </p>
    </div>

    {{-- Dummy Blog Data --}}

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Beginner
                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, error magni. Nam ipsum incidunt error
                    laudantium nulla doloremque qui iure, obcaecati saepe!
                </h3>
                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Find
                    More Information
                </a>
            </div>
        </div>

        <div>
            <img src="https://cdn.pixabay.com/photo/2020/04/11/15/49/treadmill-5030966_960_720.jpg" width="700px">
        </div>
    </div>
@endsection
