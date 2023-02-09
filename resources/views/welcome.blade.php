@extends('layouts.main-layout')

@section('content')
<div class="cont">

    <div class="cont-cards">
        @foreach ($projects as $project)
        <a href="{{route('project.detail',$project)}}"
            class="card"
            data-content="{{$project -> name}}">

            <img src="{{$project -> main_image}}"
                alt=""
                class=imgcard>

        </a>
        @endforeach

    </div>


</div>
@endsection