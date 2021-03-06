<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
{
    $users = \Users\user::orderBy('id');
    return view('user.index', compact('users'));
}

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'empresa' => ['required', 'string', 'confirmed'],
            'telefone' => ['required', 'integer'],
            'cpf' => ['required', 'string', 'max:13'],
            'cnpj' => ['required', 'string', 'max: 15'],
            'cidade' => ['required', 'string'],
            'endereco'=> ['string'],
            'numero' => ['required', 'string'],
            'cep' => ['required', 'string'],


        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'empresa' => $data['empresa'],
            'email' => $data['email'],
            'telefone' => $data['telefone'],
            'cpf' => $data['cpf'],
            'cnpj' => $data['cnpj'],
            'cidade' =>$data['cidade'],
            'endereco' =>$data['endereco'],
            'numero' =>$data['numero'],
            'cep' => $data['cep'],
            'password' => Hash::make($data['password']),
        ]);
    }
}


