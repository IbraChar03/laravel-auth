@extends('layouts.main-layout')

@section('content')
<main>
    <div class="cont-cards-detail">

        <div class="inner-cards-detail">
            <div class="name">
                <span class=title-prj>{{$project -> name}}</span>
            </div>
            <div class="imgcont">

                <img src="{{asset('storage/' . $project -> main_image)}}"
                    alt=""
                    class=img-prj>

            </div>
            <div class="desc">
                <span class=desc-prj>{{$project -> description}}</span>
            </div>
            <div class="git-cont">
                <a href="{{$project -> repo_link}}"
                    class=git><i class="fa-brands fa-github"></i> GitHub Repository
                    Link</a>
            </div>

        </div>


    </div>
</main>
@endsection