<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Socialite;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
    
            $user = Socialite::driver('google')->user();
            // dd($user);
            // $finduser = User::where('google_id', $user->id)->first();
     
            // if($finduser){
            //     dd('log');
            //     Auth::login($finduser);
    
            //     return redirect('/home');
     
            // }else{
                // $newUser = User::create([
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'google_id'=> $user->id,
                //     'password' => encrypt('Superman_test')
                // ]);
    
                $session = array(
                    'user_id' => $user->id,
                    'email' => $user->email,
                    'name' => $user->name,
                    'user_login' => true
                );
               
                $cookie['user_id'] = $session['user_id'];
                $memcook = Crypt::encrypt(json_encode($cookie));
                // 
                // dd($memcook);
                Cookie::queue(config('custom.cookie'), $memcook, 60 * 24 * 7);
                Cache::add(config('custom.cookie') . $session['user_id'], $session, 60 * 24 * 7);

                // Cache::add(config('custom.cookie') . $user->id, $session, 100);
                // Cookie::queue(config('custom.cookie'), json_encode(array('user_id' => $user->id)), 100);

                return redirect('/home');
            // }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}