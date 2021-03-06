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
                $user->password = bcrypt($request->password);
                $user->save();

                return redirect()->route('profile.show');
        }
    }

    public function delete(Request $id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin.users');

    }

    public function promote($id)
    {
        $user = User::find($id);

        //var_dump($user);

        if ($user->role == "admin"){
            $user->role = "membre";
        } elseif ($user->role == "membre"){
            $user->role = "admin";
        }

        $user->save();

        return redirect()->route('admin.users');

    }


}
