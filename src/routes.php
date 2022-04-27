<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::get('with-login/{user}/{hash}', function ($userId, $hashKey) {
        $userModel = config('loginwithid.user_model');
        $loadUser = new $userModel;

        if ($hashKey != config('loginwithid.hash')) {
            echo 'error hash!'; die;
        }
        $user = $loadUser::findOrFail($userId);
        Auth::loginUsingId($user->id);

        return redirect()->route(config('loginwithid.redirect_route'));
    });
});
