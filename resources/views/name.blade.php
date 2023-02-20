@extends('layouts.main-layout')

@section('content')
<div class="main-name">
    <div class="cont-name">
        <div class="cont-text">
            <div class="cont-title">
                <span class=title>Hi. I`m Ibrahim Char</span>
            </div>
            <div class="cont-desc">
                <span class=desc>A junior Full Stack Web Developer based in Italy.</span>
            </div>
            <div class="cont-prj">
                <span class=desc>Click the button below to see my projects.</span>
            </div>
            <div class="cont-btn">
                <a href="{{route('project.welcome')}}"
                    class="btn-submit btntheme btnsize">PROJECTS</a>
            </div>
        </div>
    </div>

</div>
@endsection