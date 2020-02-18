@extends('_layouts.master')

@section('body')

<div style="background:url('/assets/images/title_img.png'); ">
    <div class="container">
        <div class="row items-center justify-between py-20">
            <div class="col-4">


                <h2 class="text-5xl"> HTML & CSS </h2>

            </div>
            <div class="col-3">
                <p class=" offset-1 text-sm"> Home > All Courses > Html & Css </p>
            </div>
        </div>
    </div>
</div>
<div class="container my-20">
    <div class="row justify-center text-center">
        <div class="col-10">

            We are ready to help you out on the different issues you might have with the platform. Please feel free to
            contact us.
            We would appreciate if you could give us feedback on the platform.

        </div>
    </div>
</div>
<div class="container mt-40">
    <div class="flex flex-row ">
        <div class="col-6">
            <h2 class="font-bold text-4xl ">Send us a Message</h2>
            <input class="mt-5 bg-gray-100 py-6 pl-10 w-full" type="text" placeholder="First Name" width=""
                name="fname" />
            <input class="mt-5 bg-gray-100 py-6 pl-10 w-full" type="text" placeholder="Email Adress" width=""
                name="eadress" />
        </div>
        <div class="col-6">
            <input class="mt-12 bg-gray-100 py-6 pl-10 w-full" type="text" placeholder="Last Name" width=""
                name="lname" />
            <input class="mt-5 bg-gray-100 py-6 pl-10 w-full" type="text" placeholder="Phone Noumber" width=""
                name="phnoumber" />
        </div>
    </div>

</div>
<div class="container">
    <div class="row">
        <textarea class="bg-gray-100 py-6 pl-10 w-full" name="message" placeholder="message"> </textarea>
    </div>
</div>

@endsection