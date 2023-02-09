@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Create a new Project</h1>
    <div class="cont-project-create">
        <form action="{{route('project.create')}}"
            method="POST">
            @csrf
            <label for="name">Name : </label>
            <input type="text"
                name="name"> <br><br>
            <label for="description">Description : </label>
            <input type="text"
                name="description"> <br><br>
            <label for="main_image">Image Url : </label>
            <input type="text"
                name="main_image"> <br><br>
            <label for="release_date">Release Date : </label>
            <input type="date"
                name="release_date"> <br><br>
            <label for="repo_link">GitHub Repo Link : </label>
            <input type="text"
                name="repo_link"> <br>
            <input type="submit"
                value="Create"
                class=btn>
        </form>
    </div>
    <h1>Edit or Delete a Project</h1>
    <div class="cont-projects">
        <ul>
            @foreach ($projects as $project)
            <li>

                {{$project -> name}} <a href="{{route('project.edit',$project)}}"><i
                        class="fa-solid fa-pen-to-square"></i></a> <a href="{{route('project.delete',$project)}}"><i
                        class="fa-solid fa-trash-can"></i></a>
            </li> <br>

            @endforeach
        </ul>
    </div>


</div>
@endsection