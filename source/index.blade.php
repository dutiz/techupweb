@extends('_layouts.master')

@section('body')
<div class="bg-blue-500">
    <div class="container">
        <div class="row items-center">
            <div class="col-6">
                <h1 class="text-6xl font-bold text-white offset-1">
                    Learn to code for free!
                </h1>
            </div>

            <img class="py-8 offset-1 " src="/assets/images/home_intro.png" alt="home_intro">
        </div>
    </div>
</div>
<div class="container mt-16">
    <div class="row justify-center text-center">
        <div class="col-7">
            <h2 class="text-5xl font-bold ">A ton of Courses</h2>
            <p class="offset-1">From graphic design to web development, it’s all here!
                <br>You will learn how to code front end websites with HTML, Javascript & CSS, as well as the back end
                of websites with PHP & .NET </p>
            <button class="mt-6 bg-blue-500 text-white px-5 py-2 rounded">Browse All</button>
        </div>
    </div>
</div>
@include('_partials.all_courses')
<div style="background:url(/assets/images/techup_bg.png);">
    <div class="container">
        <div class="row justify-center text-center py-48">
            <div class="col-7">
                <h3 class="text-2xl font-bold">TechUp Courses</h3>
                <p class="my-6">TechUP is a FREE computer programming platform, open to high school students. No
                    previous experience
                    is required; our platform is designed for beginners and will teach you to design a website in HTML,
                    CSS, Javascript, Jquery, Bootstrap, WordPress and much more! Materials will be taught in Albanian
                    and Macedonian.
                </p>
                <p>Enhance your skills in your field of choice</p>
                <button class="mt-6 bg-blue-500 text-white px-5 py-2 rounded">View All Courses</button>
            </div>
        </div>
    </div>
</div>
<div class="bg-orange-500">
    <div class="container">
        <div class="row items-center py-32">
            <div class="col-6">
                <img class="offset-1" src="/assets/images/techathon.png" alt="techathon">

            </div>
            <div class="col-5">
                <h1 class="text-3xl text-white font-bold">Team up for the future and register your team!</h1>
                <button class="mt-12 bg-blue-500 text-white px-5 py-2 rounded">Read More</button>
            </div>
        </div>
    </div>
</div>
<div class="bg-indigo-200">
    <div class="container">
        <div class="row items-center py-8">
            <div class="col-5 offset-1">
                <img src="/assets/images/brain.png" alt="brain">
                <h2 class="mt-8 font-bold text-2xl text-base">Learn by Doing</h2>

                <p class="mt-5">Learn by theory and with IRL projects!<br>
                    Grasp the information very quickly with our well thought out classes with step by step programs!
                </p>
            </div>
            <div class="col-6">
                <img src="/assets/images/home_learn.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row items-center py-48">
        <div class="col-6">
            <iframe width="522px" height="286px" src="https://www.youtube.com/embed/FWdYL1R4rec" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="col-5 text-justify">
            <h3>Mission</h3>
            <p class="my-5">The Youth Empowerment Platform strives to support Gostivar’s youth by fostering their
                leadership skills,
                encouraging their civic engagement, providing technical skills, and ensuring all members have a space to
                full their potential in becoming their most authentic, best version of themselves.
            </p>
            <p>
                YEP is achieving its goal by implementing various projects for the youth, such as: <br>
                #techathon, #gostronic, #mycitymypride, #ihaveadream, #yeptalks and many more!.
            </p>
        </div>
    </div>
</div>
<div style="background:url('/assets/images/home_register.png') no-repeat center center / cover;">
    <div class="container">
        <div class="row py-32 items-center">
            <div class="col-7">
                <h1 class="text-white text-5xl font-bold">Don't forget to register</h1>
                <button class="mt-8 text-white py-2 px-5 border border-white rounded">Register</button>
            </div>
        </div>
    </div>
</div>
@endsection