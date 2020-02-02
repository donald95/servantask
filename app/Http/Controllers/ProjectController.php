<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Task;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "No hay nada aquí";
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
        $validator = Validator::make(
            $request->input(),
            array(
                'title'      => 'required',
                'date_start' => 'required',
                'date_end'   => 'required',
            )
        );

        if ($validator->fails()) {
            return response()->json([
                'error'   => true,
                'message' => $validator->errors()->all()
            ], 422);
        }

        $user = User::find(Auth::id());

        $project = $user->projects()->create($request->all());

        return response()->json([
            'error'   => false,
            'project' => $project
        ], 200);

        // return response()->json([
        //     'message'   => $request->input(),
        // ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

        $pro = Project::find($id);
        $title =  $pro->title;

        return view('task.tasks', compact('project', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return response()->json([
            'error' => false,
            'project'   => $project,
        ], 200);
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
        $validator  = Validator::make(
            $request->input(),
            array(
                'title'      => 'required',
                'date_start' => 'required',
                'date_end'   => 'required',
            )
        );

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 422);
        }

        $data = array(
            'title'       => $request->title,
            'date_start'  => $request->date_start,
            'date_end'    => $request->date_end,
            'description' => $request->description
        );

        Project::whereId($id)->update($data);

        return response()->json([
            'success' => 'data was successfully updated',
            'title'   =>  $request->title
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return response()->json([
            'success'   => 'Data was successfully deleted',
        ], 200);
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

    public function getProject($id)
    {
        $project = Project::find($id);
        return response()->json([
            'project'   => $project
        ], 200);
    }
}
