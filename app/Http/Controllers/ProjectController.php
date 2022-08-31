<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }



    public function index()
    {
 
       
       return view('projects.index', [
        'projects' => Project::latest()->paginate(),
       ]); 

       
    }

    public function show(Project $project)
    {

        return view('projects.show',[
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create',
    [
        'project' => new Project
    ]);
    }


    public function store(SaveProjectRequest $request)
    {


         Project::create( $request->validated());

       return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');
    }



    public function edit(project $project)
    {

        return view('projects.edit',[
            'project' => $project 
        ]);
    }

    public function update(project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito');
    }


    public function destroy(project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue Eliminado con éxito');
    }
    
}
