<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Illuminate\Http\Client\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Traits\HasRoles;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use HasRoles;
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $varidate = $request->validate([
            'username' => 'required|max:15|min:13',
            'password' => 'required|max:15|min:13'
        ]);
        $users = DB::table('users')
            ->where('users.username', '=', $request->username)
            ->first();
        $admins = DB::table('tb_admins')
            ->where('username', '=', $request->username)
            ->first();
        $directors = DB::table('tb_directors')
            ->where('username', '=', $request->username)
            ->first();

        if ($users != null && $admins != null && $directors != null) {
            auth()->user()->syncRoles(['admin', 'users', 'director']);
        } elseif ($users != null && $admins != null && $directors == null) {
            auth()->user()->assignRole(['admin']);
        } elseif ($users != null && $admins == null && $directors == null) {
            auth()->user()->assignRole('users');
        } elseif ($users == null && $admins == null && $directors != null) {
            auth()->user()->assignRole('director');
        } elseif ($users != null && $admins == null && $directors != null) {
            auth()->user()->syncRoles(['users', 'director']);
        } else{
            return response()->json([
                'result' => 'false'
            ]);
        }

        if (Auth::user()->hasRole('admin')) {
            $userp = auth()->user();
            $userp->syncPermissions([
                'can-read-research',
                'manage-users',
                'approve-research',
                'add-director-research',
                'add-feedback',
                'edit-feedback'
            ]);
            return view('admin')->with('success', 'Login Successful!!');
        } elseif (Auth::user()->hasRole('director')) {
            $userp = auth()->user();
            $userp->syncPermissions([
                'can-read-research',
                'add-feedback',
                'edit-feedback'
            ]);
            return view('director')->with('success', 'Login Successful!!');
        } elseif (Auth::user()->hasRole('users')) {
            $userp=auth()->user();
            $userp->syncPermissions([
                'can-read-research',
                'can-send',
                'can-edit-research',
                'can-cancel-research'
            ]);
            return view('home')->with('success', 'Login Successful!!');
        } else {
            return view('auth.login')->with('error', 'Username or Password incorrect!!');
        }

        //dd($request->all(), $admin, $directer, $users, $userse);

        /* $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.lanna.co.th/Profile/checkuser',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
    "Username":"' . $request->email . '",
    "Password":"' . $request->password . '"

}',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                ),
            ));

            $response = json_decode(curl_exec($curl));

            curl_close($curl);
            //  dd($response);
            if ($response->Result == "true") {
                $data = $response->Data[0];
                // dd('true');
                $email_chk = $data->Email;
                $user = User::where('email', $email_chk)->first();
                if (!$user) {
                    $user = new User();
                    //$user->username = $data->Username;
                    $user->name = $data->FullName;
                    $user->email = $data->Email;
                    $user->username = $data->Username;
                    $user_tb = DB::table('Users')->count();
                    if ($user_tb < 1) {
                        $user->role_user = "1";
                    } else {
                        $user->role_user = "2";
                    }

                    $user->save();
                }
                $this->guard()->login($user, true);
                //Alert::success('Login Successful!!!');
                return redirect()->route("admin.dashboard");
                //dd(auth()->user());
            } elseif ($response->Result == "authenfailed") { //password incorrect
                return redirect('/')->with('errorpassword', 'Password Incorrect');
            } elseif ($response->Result == "failed") { //email incorrect
                return redirect('/')->with('erroremail', 'Email Incorrect');
            } elseif ($response->Result == "notfound") { //password and email incorrect or email incorrect
                return redirect('/')->with('errornot', 'Email or Password NotFound');
            }*/
    }
    public function logout()
    {

        Auth::logout();
        return redirect('/');
    }
}
