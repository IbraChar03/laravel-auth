<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MainController extends Controller
{

    // public function welcome()
    // {
    //     return view("welcome");
    // }
    public function createProject(Request $request)
    {
        $data = $request->validate([
            "name" => ["string", "required"],
            "description" => ["string", "required"],
            "release_date" => ["date", "required", 'before:tomorrow'],
            "repo_link" => ["string", "required"],
            "main_image" => ["image", "required", "max:2048"]
        ]);
        $img_path = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;
        $project = new Project();
        $project->name = $data["name"];
        $project->description = $data["description"];
        $project->repo_link = $data["repo_link"];
        $project->release_date = $data["release_date"];
        $project->main_image = $data["main_image"];
        $project->save();
        // return view("home", $project);
        return redirect()->route("project.all");

    }
    public function allProjects()
    {
        $projects = Project::all();
        // dd($projects);
        return view("home", compact("projects"));
    }
    public function editProject(Project $project)
    {
        return view("edit-project", compact("project"));
    }
    public function updateProject(Project $project, Request $request)
    {

        $data = $request->validate([
            "name" => [
                "string",
                "required",
            ],
            "description" => ["string", "required"],
            "release_date" => [
                "date",
                "required",
                'before:tomorrow'
            ],
            "repo_link" => [
                "string",
                "required",
            ],
            "main_image" => [
                "image",
                "nullable",
                "max:2048"
            ]
        ]);
        if (array_key_exists("main_image", $data)) {
            $img_path = Storage::put('uploads', $data['main_image']);
            $data['main_image'] = $img_path;
        }

        $project->name = $data["name"];
        $project->description = $data["description"];
        $project->repo_link = $data["repo_link"];
        $project->release_date = $data["release_date"];
        if (array_key_exists("main_image", $data)) {
            $project->main_image = $data["main_image"];
        }

        $project->save();

        return redirect()->route("project.all");
    }
    public function deleteProject(Project $project)
    {
        $project->delete();
        return redirect()->route("project.all");
    }
    public function projectsWelcome()
    {
        $projects = Project::all();
        return view("welcome", compact("projects"));
    }
    public function dashboard()
    {
        return redirect()->route("project.all");
    }
    public function detailProject(Project $project)
    {
        return view("detail-project", compact("project"));

    }
    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "string"],
            "message" => ["required", "string"]
        ]);
        $message = new Message();
        $message->name = $data["name"];
        $message->email = $data["email"];
        $message->message = $data["message"];
        $message->save();
        return redirect()->route("project.welcome");
    }
    public function name()
    {
        return view("name");
    }
    public function about()
    {
        return view("about");
    }
}