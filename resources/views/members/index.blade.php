@extends('layouts.app')

@section('title', 'Members Directory')

@section('content')
    <h1>Members</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Profession</th>
                <th>Company</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->first_name . ' ' . $member->last_name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->profession }}</td>
                    <td>{{ $member->company }}</td>
                    <td>{{ $member->status }}</td>
                    <td>
                    <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display: inline; padding: 0;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this member?')">
                            <i class="fas fa-trash-alt"></i> Delete
                        </button>
                    </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $members->links() }}
@endsection
