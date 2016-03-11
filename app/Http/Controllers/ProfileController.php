<?php namespace App\Http\Controllers;

use App\Http\Requests\ValidateProfileRequest;
use App\Http\Requests\ValidatePasswordRequest;
use App\Models\User;
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

    public function update(ValidateProfileRequest $request)
    {
            $user = $request->user();
            $user->name = $request->name;
            $user->email = $request->email;

            $user->save();

            return redirect()->route('profile.show');
    }

    public function edit_pswd()
    {
        return view('profile.change_pswd');
    }

    public  function update_pswd(ValidatePasswordRequest $request)
    {
        if($request->user()){
            $user = $request->user();
            if($request->password == $request->password_confirmation){
                $user->password = bcrypt($request->password);
                $user->save();

                return redirect()->route('profile.show');
            }
        }
    }

}
