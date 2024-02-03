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
            <a href="/post" class="text-dark text-center m-5 p-3 btn btn-light">START READING</a>
        </div>
    </div>
    <div class="container row p-5">
        <div class="col">
            <img src="https://picsum.photos/id/240/460/400" alt="">
        </div>
        <div class="col">
            <h2 class="font-bold" style="font-weight : bold; font-size:30px">CREATE YOUR BLOG</h2>
            <p style="font-weight : bold" >A blog project typically involves creating and managing blogs</p>
            <p class="text-secondary">This means that a blog project starts with the creation and ongoing management of a blog. A blog is an online platform, or website, where content is regularly published. 
                which is an online platform where individuals or organizations can share information, thoughts, and updates in the form of articles or posts.
                It serves as an online space where people, whether individuals or organizations, can share various types of content. This content can include informative articles, personal thoughts, or updates on a particular subject. These are presented in the form of articles or posts, typically written pieces accompanied by images or other multimedia elements.
            </p>
            <a href="" class="btn btn-dark text-center">READ MORE</a>
        </div>
    </div>

    <div class="row m-2">
        <div class="col bg-dark">
            <div class="row m-2 text-center">
                <div class="col-2 m-3 text-center bg-light text-dark">
                    <p>Planning</p>
                </div>
                <div class="col-3 m-3 text-center bg-light text-dark">
                    <p>Content Creation</p>
                </div>
                <div class="col-2 m-3 text-center bg-light text-dark">
                    <p>Evaluate</p>
                </div>
                <div class="col-2 m-3 text-center bg-light text-dark">
                    <p>Maintenance</p>
                </div>
            </div>
            <div>
                <p class="text-center text-start text-light p-3 container">            
                    The blog project undergoes a systematic progression through key stages. In the planning phase, foundational decisions are made, outlining the purpose, target audience, and content strategy. Content creation then takes center stage, involving the generation of engaging and relevant material in the form of articles or posts. The evaluation step follows, where the project's performance is assessed through metrics like website traffic and user engagement, offering insights for refinement. Finally, maintenance becomes an ongoing task, ensuring the blog's longevity and relevance by updating content, fixing issues, and preserving a user-friendly experience. These stages collectively form a dynamic cycle, allowing for continuous improvement and adaptation to evolving goals and audience needs.
                </p>
                <a href="" class="btn btn-dark border-light text-center m-4">READ MORE</a>
            </div>
        </div>


        <div class="col">
            <img src="https://picsum.photos/id/220/580/620" alt="">
        </div>
    </div>
        
    @include('layouts.footer')

@endsection