@extends('_layouts.master')

@section('body')
<div style="background:url('/assets/images/title_img.png'); ">
    <div class="container">
        <div class="row items-center justify-between py-20">
            <div class="col-4">


                <h2 class="text-5xl"> Register </h2>

            </div>
            <div class="col-2">
                <p class="lg:offset-1 text-sm"> Register</p>
            </div>
        </div>
    </div>
</div>
<div class="container my-40">
    <div class="row">
        <div class="lg:col-6">

            <h2 class="text-4xl font-bold mb-4">Register Now</h2>

            <input class="bg-gray-100 mb-5 py-6 pl-10 w-full" type="text" placeholder="First Name *" name="fname" />
            <input class="bg-gray-100 mb-5 py-6 pl-10 w-full" type="text" placeholder="Last Name *" name="lname" />
            <input class="bg-gray-100 mb-5 py-6 pl-10 w-full" type="email" placeholder="E-mail *" name="email" />
            <input class="bg-gray-100 mb-5 py-6 pl-10 w-full" type="password" placeholder="Password *"
                name="password" />
            <input class="bg-gray-100 mb-5 py-6 pl-10 w-full" type="password" placeholder="Password *"
                name="password" />
            <button
                class="transition duration-200 ease-in-out bg-orange-500 font-bold text-white py-6 px-10 rounded hover:bg-gray-600">
                Register </button>
        </div>
    </div>
</div>


@endsection