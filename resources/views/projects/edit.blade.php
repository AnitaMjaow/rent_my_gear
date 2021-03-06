@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		<h1>Edit Project: {{ $project->title }}</h1>

		<form method="POST" action="/projects/{{ $project->id }}">

			@csrf
			@method('PUT')

			<div class="form-group">
				<label for="title">Project Title</label>
				<input type="text" name="title" id="title" class="form-control" placeholder="Project Title" value="{{ $project->title }}">
			</div>

			<div class="form-group">
				<label for="description">Project Description</label>
				<input type="text" name="description" id="description" class="form-control" placeholder="Project Description" value="{{ $project->description }}">
			</div>

			<input type="submit" value="Save Changez" class="btn btn-primary">
		</form>

		<a href="/projects">&laquo; Back to all projects</a>
	</div>
@endsection