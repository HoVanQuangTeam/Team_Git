<?php

namespace App\Http\Controllers\UserAuth;

use App\Khachhangs;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/Trangchu';
    protected $redirectAfterLogout = '/Trangchu';
    protected $guard = 'khachhangs';
//    protected function guard()
//    {
//        return Auth::guard('Khachhangs');
//    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'ten_kh' => 'required|max:255',
            'email' => 'required|email|max:255|unique:khachhangs',
            'password' => 'required|min:6',
//            'ten_dang_nhap' =>'required|unique:khachhangs',
            'sdt' =>'required|numeric|digits_between:10,11',
            'dia_chi' =>'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */

    // 

    // protected function test(Request $request){
    //     return Khachhangs::create([ 
    //         'ten_kh' => $request->get('ten_kh'),
    //         'email' => $request->get('email'),
    //         'sdt'=> $request->get('sdt'),
    //         'dia_chi' =>$request->get('dia_chi'),
    //         'ten_dang_nhap' => $request->get('ten_dang_nhap'),
    //         'mat_khau' => bcrypt($request->get('mat_khau'))
    //     ]);
    // }

    protected function create(array $data)
    {
        return Khachhangs::create([ 
            'ten_kh' => $data['ten_kh'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'sdt'=> $data['sdt'],
            'dia_chi' =>$data['dia_chi']
        ]);
    }

    public  function  test(){
        return "oke";
    }
}