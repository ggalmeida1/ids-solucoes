<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $loggedId = intval( Auth::id() );

        $user = User::find($loggedId);

        if($user) {
            return view('admin.profile.index', [
                'user' => $user
            ]);
    }

    return redirect()->route('admin');


        return view('admin.profile.index');
    }

    public function save(Request $request)
    {
        $loggedId = intval( Auth::id() );
        $user = User::find($loggedId);

        if($user) {
            $data = $request->only([
                'name',
                'email',
                'password',
                'password_confirmation'
            ]);
            $validator = Validator::make([
                'name' => $data['name'],
                'email' => $data['email']
            ], [
                'name' => ['required','string', 'max:100'],
                'email' => ['required','string', 'max:100']
            ]);

            //Change the name
            $user->name = $data['name'];

            //Change the email
            //Verify if the email has been changed
            if($user->email != $data['email']) {
                //Verify if the new email address already exists in DB
                $hasEmail = User::where('email', $data['email'])->get();
                //If dont exists, update it
                if(count($hasEmail) === 0) {
                    $user->email = $data['email'];
                } else {
                    $validator->errors()->add('email', __('validation.unique', [
                        'attribute' => 'email',
                    ]));
                }
            }

            //Change the password
            //Verify if the user has typed any password
            if (!empty($data['password'])) {
                if (strlen($data['password']) >= 4) {
                    //Verify if the password confirmation is ok
                    if ($data['password'] === $data['password_confirmation']) {
                        //Update the password
                        $user->password = Hash::make($data['password']);
                    } else {
                        $validator->errors()->add('password', __('validation.confirmed', [
                            'attribute' => 'password',
                        ]));
                    }
                } else {
                    $validator->errors()->add('password', __('validation.min.string', [
                        'attribute' => 'password',
                        'min' => 4
                    ]));
                }
            }
            if (count($validator->errors()) > 0) {
                return redirect()->route('profile', [
                    'user' => $loggedId
                ])->withErrors($validator);
            }

            $user->save();

            return redirect()->route('profile')
                ->with('warning', 'Informações alteradas com sucesso');
        }

        return redirect()->route('profile');
    }
}