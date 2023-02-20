@extends('layouts.main-layout')

@section('content')
<div class="main2">
    <div class="cont-project">
        <span>PROJECTS</span>
    </div>
    <div class="cont">

        <div class="cont-cards">
            @foreach ($projects as $project)
            <a href="{{route('project.detail',$project)}}"
                class="card"
                data-content="{{$project -> name}}">

                <img src="{{asset('storage/' . $project -> main_image)}}"
                    alt=""
                    class=imgcard>

            </a>
            @endforeach

        </div>
      
    </div>
    <div class=cont-other>
       <div class="cont-btn2">
            <a class="btn-submit btntheme btnsize" href="https://github.com/IbraChar03?tab=repositories" target="_blank">Other Projects</a> </div>
        
    </div>
    <div class="cont-contacts">
        <span>CONTACT ME</span>
    </div>
    <div class="cont-form">
        <div class="form">
            <form action="{{route('project.contact')}}"
                method="POST">
                @csrf
                <label for="name"
                    class=label>Name</label>
                <input type="text"
                    name="name"
                    class=input
                    placeholder="Name"> <br> <br>
                <label for="email"
                    class=label>Email</label>
                <input type="text"
                    name="email"
                    class=input
                    placeholder="Email Address"> <br> <br>
                <label for="message"
                    class=label>Message</label>
                <textarea name="message"
                    cols="30"
                    rows="10"
                    class=input
                    placeholder="Message"></textarea><br> <br>
                <div class="cont-btn">
                    <input type="submit"
                        value="Send Message"
                        class="btn-submit btntheme btnsize">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection