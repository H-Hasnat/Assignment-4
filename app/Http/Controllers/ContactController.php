<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contacts()
    {
        $users = contact::get();

        return view('index', ['user' => $users]);
    }

    function newcontact(Request $request)
    {
        $contact = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts,email',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        contact::create($contact);
        return redirect('/contacts');
    }

    function show(string $id)
    {
        $contact = contact::find($id);
        return view('show', compact('contact'));
    }

    function edit(string $id)
    {
        $contact = contact::find($id);
        return view('edit', compact('contact'));
    }


    function update(Request $request, string $id)
    {
        $user = contact::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        $user->save();
        return redirect('/contacts');
    }

    function delete(string $id)
    {
        $user = contact::find($id);
        $user->delete();
        return redirect('/contacts');
    }


    function sorting(Request $request)
    {
        $sortval = $request->input('select');
        if ('1' === $sortval) {
            $users = contact::orderBy('name', 'asc')->get();
        } elseif ('2' === $sortval) {
            $users = contact::orderBy('created_at', 'asc')->get();
        }

        return view('index', ['user' => $users]);
    }

    function search(Request $request)
    {
        $users = contact::get();

        $searchval = $request->input('search');

        foreach ($users as $user) {

            if ($searchval === $user->name) {
                $users = contact::where('name', $user->name)->get();
                return view('index', ['user' => $users]);
            } elseif ($searchval === $user->email) {
                $users = contact::where('email', $user->email)->get();
                return view('index', ['user' => $users]);
            }
        }
    }
}
