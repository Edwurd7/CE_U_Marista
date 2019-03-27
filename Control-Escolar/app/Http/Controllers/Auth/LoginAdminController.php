<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Models\persona;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginAdminController extends Controller
{

    /*public function login(){
      $credentials = $this->validate(request(), [
        'ncontrol' => 'required|string',
        'password' => 'required|string'
      ]);
      //dd(SHA256($data['password']));
      if(Auth::attempt($credentials)){
        return view('dashboard');
      }
      return back()->withErrors(['ncontrol' => 'Sin registro']);
    }*/


    /*public function loginAdmin(Request $request){
      $credentials = $this->validate($request, [
        'id_admin' => 'required|string',
        'password' => 'required|string'
      ]);
      if(Auth::guard('admins')->attempt($credentials,$request->remember)){
        $datos=persona::select('nombres','apaterno','amaterno')->where('id_persona',auth('admins')->user()->id_persona)->get();
        $nombre =$datos[0]->nombres." ".$datos[0]->apaterno." ".$datos[0]->amaterno;
        $request->session()->regenerate();
        dd(session('status'));
        if(session('status')){
        return view('admin.home');
      }else return "nelson";
      }
      return back()->withErrors(['id_admin' => 'Sin registro']);
    }*/
    public function showLoginForm(){
        return view('login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request){
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and  the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {

      $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request)
        );
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();
        $datos=persona::select('nombres','apaterno','amaterno')->where('id_persona',auth('admins')->user()->id_persona)->get();
        $nombre =$datos[0]->nombres." ".$datos[0]->apaterno." ".$datos[0]->amaterno;
        //$request->session()->put('id_admin', $request->id_admin);
        session(['id_admin'=>$request->id_admin,'nombre'=>$nombre]);
        return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended(route('admin_home'));
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        //
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'id_admin';
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: ('/');
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        //
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admins');
    }
}
