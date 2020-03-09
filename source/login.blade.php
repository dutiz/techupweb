@extends('_layouts.master')

@section('body')

<div style="background:url('/assets/images/title_img.png'); ">
    <div class="container">
        <div class="row items-center justify-between py-20">
            <div class="col-4">


                <h2 class="text-5xl"> Login </h2>

            </div>
            <div class="col-2">
                <p class="offset-1 text-sm"> Login</p>
            </div>
        </div>
    </div>
</div>
<div class="container my-40">
    <div class="row">
        <div class="lg:col-6">
            <div class="border mb-10 lg:mb-0">
                <div class="m-10">
                    <h2 class="text-4xl font-bold mb-4">Login</h2>
                    <input class="bg-gray-100 mb-5 py-6 pl-10 w-full" type="text" placeholder="Username / E-mail *"
                        name="uname" />
                    <input class="bg-gray-100 mb-5 py-6 pl-10 w-full" type="password" placeholder="Password *"
                        name="password" />
                    <button
                        class="transition duration-200 ease-in-out bg-orange-500 font-bold text-white py-6 px-10 rounded hover:bg-gray-600">
                        Login </button>
                </div>
            </div>
        </div>
        <div class="lg:col-6">
            <div class="border">
                <div class="m-10">
                    <h2 class="text-4xl font-bold mb-4">Register</h2>
                    <input class="bg-gray-100 mb-5 py-6 pl-10 w-full" type="text" placeholder="Username / E-mail *"
                        name="uname" />
                    <input class="bg-gray-100 mb-5 py-6 pl-10 w-full" type="password" placeholder="Password *"
                        name="password" />
                    <button
                        class="transition duration-200 ease-in-out bg-orange-500 font-bold text-white py-6 px-10 rounded hover:bg-gray-600"
                        onclick=" window.location.href='/register' ;"> Register </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection