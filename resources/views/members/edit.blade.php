@extends('layouts.app')

@section('title', 'Edit Member')

@section('content')
    <h1>Edit Member</h1>
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name', $member->first_name) }}" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $member->last_name) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $member->email) }}" required>
        </div>
        <div class="form-group">
            <label for="profession">Profession</label>
            <input type="text" name="profession" id="profession" class="form-control" value="{{ old('profession', $member->profession) }}" required>
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" id="company" class="form-control" value="{{ old('company', $member->company) }}">
        </div>
        <div class="form-group">
            <label for="linkedin_url">LinkedIn URL</label>
            <input type="url" name="linkedin_url" id="linkedin_url" class="form-control" value="{{ old('linkedin_url', $member->linkedin_url) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Member</button>
    </form>
@endsection
