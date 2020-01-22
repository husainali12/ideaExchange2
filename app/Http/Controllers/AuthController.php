<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\Controller;
use App\User;
use Laravel\Socialite\Facades\Socialite ;
use Tymon\JWTAuth\Facades\JWTAuth;

//use Socialite;


class AuthController extends Controller
    {
        /**
         * Create a new AuthController instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('auth:api', ['except' => ['login','signUp','redirectToProvider','handleProviderCallback']]);
        }
    
        /**
         * Get a JWT token via given credentials.
         *
         * @param  \Illuminate\Http\Request  $request
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');
           
            if ($token = JWTAuth::attempt($credentials)) {
                return $this->respondWithToken($token);
            }
    
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    public function signUp(Request $request)
    {
       User::create($request->all());

       return $this->login($request);
    }
    
        /**
         * Get the authenticated User
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function me()
        {
            return response()->json($this->guard()->user());
        }
    
        /**
         * Log the user out (Invalidate the token)
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function logout()
        {
            $this->guard()->logout();
    
            return response()->json(['message' => 'Successfully logged out']);
        }

        public function redirectToProvider()
        {
            return Socialite::driver('google')->redirect();
        }
    
        /**
         * Obtain the user information from google.
         *
         * @return \Illuminate\Http\Response
         */
        public function handleProviderCallback(Request $request)
        {
            $user = Socialite::driver('google')->stateless()->user();
             
            if (!$authenticatedUser = User::where('email', $user->email)->first()) {
            $user->password = rand(10000000,99999999);
            $authenticatedUser = User::create([
                                                'name'=>$user->name,
                                                'email'=>$user->email,
                                                'password'=> $user->password,
                                                'profile'=> $user->avatar,
                                                'banner'=>'banner.jpg'
                                              ]);
            }

            $token = auth()->guard('api')->login($authenticatedUser);

            // return $this->login($request);
            
            return $this->respondWithToken($token);
    
            // $user->token;
        }
    
        /**
         * Refresh a token.
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function refresh()
        {
            return $this->respondWithToken($this->guard()->refresh());
        }
    
        /**
         * Get the token array structure.
         *
         * @param  string $token
         *
         * @return \Illuminate\Http\JsonResponse
         */
        protected function respondWithToken($token)
        {
            return response()->json([
                'access_token' => $token,
                'token_type' => 'bearer',
                //'expires_in' => $this->guard()->factory()->getTTL() * 60
            ]);
        }
    
        /**
         * Get the guard to be used during authentication.
         *
         * @return \Illuminate\Contracts\Auth\Guard
         */
        public function guard()
        {
            return Auth::guard();
        }
    }

