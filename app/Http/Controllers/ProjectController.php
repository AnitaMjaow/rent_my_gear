<?php


namespace App\Http\Controllers;
use Auth;
use App\Project;
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
		//$projects = Projects::all();
		$projects = Project::where('user_id', Auth::user()=>id)=>get();

		

		return view('projects/index', ['projects' => $projects]);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('projects/create');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$project = new Project();
		$project->title = $request->title;
		$project->description = $request->description;
		$project->save();
		return redirect('/projects/' . $project->id);
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function show(Project $project)
	{
		$todos = $project->todos;
		return view('projects/show', ['project' => $project, 'todos' => $todos]);
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Project $project)
	{
		return view('projects/edit', ['project' => $project]);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Project $project)
	{
		$project->title = $request->title;
		$project->description = $request->description;
		$project->save();
		return redirect('/projects/' . $project->id);
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Project $project)
	{
		return redirect('/projects');
	}
}