<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {

    /**
     * Update the user's profile.
     *
     * @return Response
     */
    public function show(Request $request)
    {
        if ($request->user())
        {
            $user = $request->user();
            return view('profile.show')->with(compact('user'));
        }
    }

    public function edit(Request $request)
    {
        if ($request->user())
        {
            $user = $request->user();
            return view('profile.edit')->with(compact('user'));
        }
    }

    public function update(Request $request)
    {
        if ($request->user())
        {
            $user = $request->user();

            $user->name = $request->user->name;
            $user->email = $request->user->email;

            $user->save();

            return redirect()->route('profile.show');
        }
    }

}
