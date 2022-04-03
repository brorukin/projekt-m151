<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ort;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login()
    {
        return view('login', [
            'msg' => ''
        ]);
    }
    public function register()
    {
        return view('register', [
            'msg' => ''
        ]);
    }

    public function loginUser(Request $request)
    {
        $data = $request->all();

        $user = User::where('name', e($data['name']))->first();

        if ($user) {
            if (password_verify(e($data['password']), $user['password'])) {
                session()->put('userid', $user['id']);
                return redirect('/');
            }

            //Nur für Testzwecke
            /*return view('login', [
                'msg' => 'Falsches Passwort'
            ]);*/
        }
        return view('login', [
            'msg' => 'Benutzer und/oder Passwort nicht gefunden oder Ungültig'
        ]);
    }

    public function registerUser(Request $request)
    {
        $data = $request->all();
        

        $user = User::where('name', e($data['name']))->first();
        if ($user === null) {

            $plz = Ort::where('plz',e($data['plz']))->get();
            $ort = Ort::where('ort',e($data['ort']))->get();
            $id = 0;
            foreach($plz as $item){
                foreach($ort as $o){
                    if($item['plz'] == $o['plz'] && $item['ort'] == $o['ort']){
                        $id = $item['id'];
                    }
                }
            }
            if($id == 0){
                Ort::create([
                    'plz' => $data['plz'],
                    'ort' => $data['ort']
                ]);
                $id = Ort::latest()->first();
                $id = $id['id'];
            }

            User::create([
                'name' => e($data['name']),
                'email' => e($data['email']),
                'password' => password_hash(e($data['password']), PASSWORD_DEFAULT),
                'telefonnummer' => e($data['telefonnummer']),
                'adresse' => e($data['adresse']),
                'ort_id' => $id
            ]);
            return redirect('/login');
        }
        return view('register', [
            'msg' => 'Registration ungültig'
        ]);
    }

    public function unlogUser()
    {
        session()->flush();
        return redirect('/');
    }
}
