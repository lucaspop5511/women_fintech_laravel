<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::paginate(10);
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:members',
            'profession' => 'required',
            'linkedin_url' => 'nullable|url',
        ]);
        
        Member::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'profession' => $request->input('profession'),
            'company' => $request->input('company'),
            'linkedin_url' => $request->input('linkedin_url'),
            'status' => 'active', // Default value
        ]);
        
        return redirect()->route('members.index')->with('success', 'Member added successfully!');
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }    

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:members,email,' . $id,
            'profession' => 'required',
            'linkedin_url' => 'nullable|url',
        ]);

        $member = Member::findOrFail($id);
        $member->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'profession' => $request->input('profession'),
            'company' => $request->input('company'),
            'linkedin_url' => $request->input('linkedin_url'),
        ]);

        return redirect()->route('members.index')->with('success', 'Member updated successfully!');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id); 
        $member->delete(); 

        return redirect()->route('members.index')->with('success', 'Member deleted successfully!');
    }
}
