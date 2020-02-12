@extends('_layouts.master')

@section('body')


<div style="background:url('/assets/images/title_img.png'); ">
    <div class="container">
        <div class="row items-center justify-between py-20">
            <div class="col-4">


                <h2 class="text-5xl"> All Courses </h2>

            </div>
            <div class="col-2">
                <p class="text-sm"> Home > All Courses</p>
            </div>
        </div>
    </div>
</div>

@include('_partials.all_courses')

@endsection