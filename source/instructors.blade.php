@extends('_layouts.master')

@section('body')

<div style="background:url('/assets/images/title_img.png'); ">
    <div class="container">
        <div class="row items-center justify-between py-20">
            <div class="col-4">


                <h2 class="text-5xl"> Instructors </h2>

            </div>
            <div class="col-2">
                <p class="offset-1 text-sm"> Instructors</p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-40">
    <div class="row">
        <h2 class="text-4xl font-bold">
            Meet our Instructors
        </h2>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="lg:col-4  ">
            <a class="hover:text-orange-500" href="/arlindmusliu">
                <img class="mt-5 w-full h-auto" src="/assets/images/instructor1.jpg" alt="">
                <h2 class="my-5 font-semibold text-2xl transition duration-200 ease-in"> Arlind
                    Musliu
                </h2>
            </a>
        </div>
        <div class="lg:col-4">
            <a class="hover:text-orange-500" href="/astritdemiri"> <img class="mt-5 w-full h-auto" src="/assets/images/instructor2.jpg" alt="">
                <h2 class="my-5 font-semibold text-2xl transition duration-200 ease-in"> Astrit
                    Demiri
                </h2>
            </a>
        </div>
        <div class="lg:col-4">
            <a class="hover:text-orange-500" href="/gelejovanoski">
                <img class="mt-5 w-full h-auto" src="/assets/images/instructor3.jpg" alt="">
                <h2 class="my-5 font-semibold text-2xl transition duration-200 ease-in"> Gele
                    Jovanoski
                </h2>
            </a>
        </div>
    </div>
</div>

@endsection