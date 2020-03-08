@extends('_layouts.master')

@section('body')

<div style="background:url('/assets/images/title_img.png'); ">
    <div class="container">
        <div class="row items-center justify-between py-20">
            <div class="col-4">


                <h2 class="text-5xl"> Instructors </h2>

            </div>
            <div class="col-3">
                <p class="offset-1 text-sm"> Instructors > Gele Jovanoski </p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-40">
    <div class="row items-center">
        <div class="lg:col-2">
            <img src="/assets/images/instructor3.jpg">

        </div>
        <div class="lg:col-3">
            <h2 class="font-semibold text-2xl text-orange-500">Gele Jovanoski </h2>
            <p> Email : ArlindMusliu90@gmail.com </p>
            <p> Phone : +389 70692549</p>
            
        </div>
    </div>
    <div class="row">
        <div class="lg:col-4">
            <div class="my-10">
                <h2 class="text-2xl font-semibold"> Courses : </h2>
            </div>

        </div>

    </div>
</div>

@endsection