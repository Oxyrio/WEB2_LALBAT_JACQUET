<?php namespace App\Http\Controllers;

use App\Http\Requests\ValidateProfilRequest;
use App\Http\Requests\ValidatePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller {

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
            return view('profil.show')->with(compact('user'));
        }
    }

    public function edit(Request $request)
    {
        if ($request->user())
        {
            $user = $request->user();
            return view('profil.edit')->with(compact('user'));
        }
    }

    public function update(ValidateProfilRequest $request)
    {
        $user = $request->user();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('profil.show');
    }

    public function edit_password()
    {
        return view('profil.change_password');
    }

    public  function update_password(ValidatePasswordRequest $request)
    {
        if($request->user()){
            $user = $request->user();
            $user->password = bcrypt($request->password);
            $user->save();

            return redirect()->route('profil.show');
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin.users');

    }

}
