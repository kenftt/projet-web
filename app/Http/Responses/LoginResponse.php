<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /*
    @param \Illuminate\Http\Request $request
    @return \Symfony\Component\HttpFoundation\Response
    */
    public function toResponse($request){
        if(auth()->user()->pilote){
            return $request->wantsJson()
                ? response()->json(['two_factor'=> false])
                : redirect()->route('admin');
        }
            return $request->wantsJson()
                ? response()->json(['two_factor'=> false])
                 : redirect()->intended(config('fortify.home'));
    }
}
