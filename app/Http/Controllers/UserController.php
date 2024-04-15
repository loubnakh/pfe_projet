<?php
namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function type_employe()
    {
        return view('auth.type_employe');
    }

    
    public function forgot(){
    return view('auth.forgot');
    }
    public function reset(){
        return view('auth.reset');
        }
    }

        //     public function loginUser(Request $request){
//         $validator = Validator::make($request->all(), [
//             'email' => 'required|email|max:100',
//              'password' => 'required|min:8|max:50'
//             ]);
        
//              // Tentative de connexion
//         $credentials = $request->only('email', 'password');
//         if (Auth::attempt($credentials)) {
//             // Authentification réussie
//             return redirect()->intended('/dashboard');
//         } else {
//             // Authentification échouée
//             return redirect()->back()->withInput()->withErrors(['email' => 'Email ou mot de passe incorrect']);
//         }
//     }
// }

    


