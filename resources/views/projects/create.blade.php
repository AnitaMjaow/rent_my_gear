@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		<h1>Create a New Project</h1>

		<form method="POST" action="/projects">

			@csrf

			<div class="form-group">
				<label for="title">Project Title</label>
				<input type="text" name="title" id="title" class="form-control" placeholder="Project Title">
			</div>

			<div class="form-group">
				<label for="description">Project Description</label>
				<input type="text" name="description" id="description" class="form-control" placeholder="Project Description">
			</div>

			<input type="submit" value="Create New Project" class="btn btn-primary">
		</form>

		<a href="/projects">&laquo; Back to all projects</a>
	</div>
@endsection