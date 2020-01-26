<?php

namespace App\Http\Controllers;

use  App\User;
use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.page_project');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $project = Project::find($id);
        // $tasks   = Project::find($id)->tasks;

        $project = Project::join('tasks', 'tasks.project_id', '=', 'projects.id')
            ->select('projects.title', 'tasks.*')
            ->where('projects.id', '=', $id)
            ->get();

        // $data = array(
        //     'project' => $project,
        //     'tasks'   => $tasks,
        // );

        // return $data;
        return $project;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * getUserProjects
     *
     * @param  mixed $user_id
     *
     * @return void
     */
    public function getUserProjects($user_id)
    {
        $projects = User::find($user_id)->projects;
        return $projects;
    }
}
