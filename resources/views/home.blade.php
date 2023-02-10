@extends('layouts.app')

@section('content')

<div class="container">
    <div class="cont-create">

        <h1>Create a new Project</h1>
        <div class="inner-create">
            @include("components.errors")
            <form action="{{route('project.create')}}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                <label for="name">Name : </label>
                <input type="text"
                    name="name"> <br><br>
                <label for="description">Description : </label>
                <input type="text"
                    name="description"> <br><br>
                <label for="main_image">Image Url : </label>
                <input type="file"
                    name="main_image"> <br><br>
                <label for="release_date">Release Date : </label>
                <input type="date"
                    name="release_date"> <br><br>
                <label for="repo_link">GitHub Repo Link : </label>
                <input type="text"
                    name="repo_link"> <br> <br>
                <input type="submit"
                    value="Create"
                    class=btn2>
            </form>
        </div>
    </div>
    <div class="cont-projects">
        <h1>Edit or Delete a Project</h1>
        <div class="inner-projects">
            <ul>
                @foreach ($projects as $project)
                <li>

                    <span class=p-name> {{$project -> name}} </span> <a href="{{route('project.edit',$project)}}"><i
                            class="fa-solid fa-pen-to-square icon"></i></a> <a
                        href="{{route('project.delete',$project)}}"><i class="fa-solid fa-trash-can icon"></i></a>
                </li> <br>

                @endforeach
            </ul>
        </div>
    </div>


</div>
@endsection