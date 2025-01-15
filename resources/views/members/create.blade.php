@extends('layouts.app')

@section('title', 'Add Member')

@section('content')
    <h1>Add Member</h1>
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="profession">Profession</label>
            <input type="text" name="profession" id="profession" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" id="company" class="form-control">
        </div>
        <div class="form-group">
            <label for="linkedin_url">LinkedIn URL</label>
            <input type="url" name="linkedin_url" id="linkedin_url" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Member</button>
    </form>
@endsection
