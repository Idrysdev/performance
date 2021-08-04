<?php

namespace App\Http\Controllers;

use App\Models\Pere;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class PereController extends Controller
{


     /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('parents.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function register(){
        return view('Parents.register');

    }

    public function login(Request $request){
        $data = $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $accounts = Pere::where('email', $data['email'])->get();
        if($accounts->isNotEmpty()){
    		$account = $accounts->first();

			if (Hash::check($data['password'].env('HASH_SALT'), $account->password)) {
				Session::put(['pere' => $account]);
			    Log::channel('single')->info('Connexion réussie', ['id' => $account->id]);
			    return redirect()->route('parents.index');
			}
    	}
        return back()->with('success','csw');
        // dd($accounts);


    }

    public function logout()
    {
    	if(Session::has('pere'))
    		Session::forget('pere');
    	return redirect()->route('parents.login-page');
    }










    public function loginPage(){

        return view('Parents.login-page');


    }

    public function store(Request $request)
    {
        $data=$this->validate($request,[
            'name'     => ['required', 'string', 'max:255'],
            'prenoms'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:peres'],
            'phone'    => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        // dd($data);

        Pere::create([
            'name' => $data['name'],
            'prenoms' => $data['prenoms'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);


        return redirect()->route('parents.login-page');


    }

    // method for launch student created pages
    public function create_children(Pere $pere)
    {
        // dd($pere->id);
        // dd(Session('pere'));
        return view('welcome',compact('pere'));

    }

    // method for launch student created pages
    public function store_children(Request $request, Pere $pere)
    {
        if(Session()->has('pere') && Session('pere.id') == $pere->id){
        $data = $request->all();
        dd($data);

        }
        return back();



    }












    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pere  $pere
     * @return \Illuminate\Http\Response
     */
    public function show(Pere $pere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pere  $pere
     * @return \Illuminate\Http\Response
     */
    public function edit(Pere $pere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pere  $pere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pere $pere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pere  $pere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pere $pere)
    {
        //
    }







}
