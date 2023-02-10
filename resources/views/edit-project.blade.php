@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Edit Project</h1>
    <div class="cont-project-create">
        @include("components.errors")
        <form action="{{route('project.update',$project)}}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            <label for="name">Name : </label>
            <input type="text"
                name="name"
                value="{{$project
                -> name}}"> <br><br>
            <label for="description">Description : </label>
            <input type="text"
                name="description"
                value="{{$project
                    -> description}}"
                class="text-area"
                rows="4"
                cols="50"><br><br>
            <label for="main_image">Image Url : </label>
            <input type="file"
                name="main_image"> <br><br>
            <label for="release_date">Release Date : </label>
            <input type="date"
                name="release_date"
                value="{{$project
                    -> release_date}}"> <br><br>
            <label for="repo_link">GitHub Repo Link : </label>
            <input type="text"
                name="repo_link"
                value="{{$project
                    -> repo_link}}"> <br> <br>
            <input type="submit"
                value="Save"
                class=btn2>
        </form>
    </div>

</div>
@endsection