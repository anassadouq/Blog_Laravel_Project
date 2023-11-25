@extends('layouts.app')

@section('content')
    <style>
        .hero-bg-image{
            background:url('https://images.unsplash.com/photo-1597839219216-a773cb2473e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80') no-repeat center center /cover;
            background-attachment : fixed;
            height : 590px;
        }
    </style>

    <div class="hero-bg-image flex ">
        <div class="text-center">
            <h1 class="text-light p-5" style="font-size:50px; font-weight:bold">WELCOME TO MY BLOG</h1>
        </div>
        <div class="text-center">
            <a href="/blog" class="text-dark text-center m-5 p-3 btn btn-light">START READING</a>
        </div>
    </div>
    <div class="container row p-5">
        <div class="col">
            <img src="https://picsum.photos/id/240/460/400" alt="">
        </div>
        <div class="col">
            <h2 class="font-bold" style="font-weight : bold; font-size:30px">HOW TO BE AN EXPERT IN 2023</h2>
            <p style="font-weight : bold" >You can fixe your all your programming language here</p>
            <p class="text-secondary">Windows talking painted pasture yet its express parties use. Sure last upon he same as knew next. Of believed or diverted no rejoiced. End friendship sufficient assistance can prosperous met. As game he show it park do. Was has unknown few certain ten promise. No finished my an likewise cheerful packages we. For assurance concluded son something depending discourse see led collected. Packages oh no denoting my advanced humoured. Pressed be so thought natural.</p>
            <a href="" class="btn btn-dark text-center">READ MORE</a>
        </div>
    </div>

    <div class="row m-2">
        <div class="col bg-dark">
            <div class="row m-2 text-center">
                <div class="col-2 m-3 text-center bg-light text-dark">
                    <p>PHP</p>
                </div>
                <div class="col-3 m-3 text-center bg-light text-dark">
                    <p>Programming</p>
                </div>
                <div class="col-2 m-3 text-center bg-light text-dark">
                    <p>Languages</p>
                </div>
                <div class="col-2 m-3 text-center bg-light text-dark">
                    <p>Back-end</p>
                </div>
            </div>
            <div>
                <p class="text-center text-start text-light p-3 container">            
                    Made last it seen went no just when of by. Occasional entreaties comparison me difficulty so themselves. At brother inquiry of offices without do my service. As particular to companions at sentiments. Weather however luckily enquire so certain do. Aware did stood was day under ask. Dearest affixed enquire on explain opinion he. Reached who the mrs joy offices pleased. Towards did colonel article any parties.
                    Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females as an. That do an case an what plan hour of paid. Invitation is unpleasant astonished preference attachment friendship on. Did sentiments increasing particular nay. Mr he recurred received prospect in. Wishing cheered parlors adapted am at amongst matters.
                    Difficulty on insensible reasonable in. From as went he they. Preference themselves me as thoroughly partiality considered on in estimating. Middletons acceptance discovered projecting so is so or. In or attachment inquietude remarkably comparison at an. Is surrounded prosperous stimulated am me discretion expression. But truth being state can she china widow. Occasional preference fat remarkably now projecting uncommonly dissimilar. Sentiments projection particular companions interested do at my delightful. Listening newspaper in advantage frankness to concluded.
                </p>
                <a href="" class="btn btn-dark border-light text-center m-4">READ MORE</a>
            </div>
        </div>


        <div class="col">
            <img src="https://picsum.photos/id/220/580/620" alt="">
        </div>
    </div>

@endsection