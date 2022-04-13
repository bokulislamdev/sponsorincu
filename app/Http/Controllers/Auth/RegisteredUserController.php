<?php

namespace App\Http\Controllers\Auth;



use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }
    public function vendorCreate()
    {
        return view('auth.vendor-register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255','unique:users'],
            // 'name' => ['required', 'string', 'max:255'],
            // 'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        
        $user = User::create([
            'username' => $request->username,
            // 'phone' => $request->phone,
            // 'name' => $request->name,
            'email' => $request->email,
            'role' => 3,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
     
        return redirect(RouteServiceProvider::SPONSORDASHBOARD);
    }
    
    
    public function vendorStore(Request $request)
    {
        
        $request->validate([
            'username' => ['required', 'string', 'max:255','unique:users'],
            // 'company_name' => ['required'],
            // 'country_id' => ['required'],
            // 'city_id' =>  ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'post' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        
        $user = User::create([
            'username' => $request->username,
            // 'company_name' => $request->company_name,
            // 'country_id' => $request->country_id,
            // 'city_id' => $request->city_id,
            'email' => $request->email,
            // 'post' => $request->post,
            'role' => 4,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
       
        return redirect(RouteServiceProvider::ORGANIZERDASHBOARD);
    }
}
