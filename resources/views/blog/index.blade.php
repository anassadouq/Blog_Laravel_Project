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

    <!--Blog categories -->
    <div class="bg-dark text-light">
        <h2 class="text-center" style="font-weight : bold">Blog Categories</h2>
        <div class="container">
            <div class="row p-5">
                <div class="col">
                    <p>UX Design Thinking</p>
                </div>
                <div class="col">
                    <p>Programming Languages</p>
                </div>
                <div class="col">
                    <p>Graphic Design</p>
                </div>
                <div class="col">
                    <p>Front-End Development</p>
                </div>
            </div>
        </div>
    </div>

    <!--Recent Posts -->
    <div class="p-5">
        <h2 class="text-center text-start" style="font-weight : bold">Recent Posts</h2>
        <p class="text-center text-secondary">Bbelieved provided declared. He many kept on draw lain song as same. Whether at dearest certain spirits is entered in to. Rich fine bred real use too many good. She compliment unaffected expression favourable any. Unknown chiefly showing to conduct no. Hung as love evil able to post at as.
            Frankness applauded by supported ye household. Collected favourite now for for and rapturous repulsive consulted. An seems green be wrote again. She add what own only like. Tolerably we as extremity exquisite do commanded. Doubtful offended do entrance of landlord moreover is mistress in. Nay was appear entire ladies. Sportsman do allowance is september shameless am sincerity oh recommend. Gate tell man day that who.
            Spoke as as other again ye. Hard on to roof he drew. So sell side ye in mr evil. Longer waited mr of nature seemed. Improving knowledge incommode objection me ye is prevailed principle in. Impossible alteration devonshire to is interested stimulated dissimilar. To matter esteem polite do if.
            Her old collecting she considered discovered. Square new horses and put better end. Sincerity collected happiness do is contented. Sigh ever way now many. Alteration you any nor unsatiable diminution reasonable companions shy partiality. Leaf by left deal mile oh if easy. Added woman first get led joy not early jokes.
        </p>
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
                <p class="text-center text-start text-light p-3">            
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