<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function showlogin(){
        return view('Admlogin');
    }

    public function login(Request $request){
            $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        
        $rows = DB:: SELECT("SELECT id, name, email, password, is_superadmin FROM users WHERE email = ? LIMIT 1",
            [$data['email']]);

            if(count($rows) == 0){
                return back()->withErrors(['email' => 'Usuario Não Encontrado'])->withInput();
            }

            $user = $rows[0];

            if(!Hash::check($data['password'], $user->password)){
                return back()->withErrors(['password' => 'Senha Incorreta'])->withInput();
            }

            session([
                'admin_user_id' => $user->id,
                'admin_user_name' => $user->name,
                'is_superadmin' => (bool)$user->is_superadmin
            ]);

            return redirect()->route('admin.clientes');
    }

    public function logout(){
        session()->forget(['admin_user_id', 'admin_user_name', 'is_superadmin']);
        return redirect()->route('adm.login.form')->whit('sucess', 'Você Desligou');
    }
}
