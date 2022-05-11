<?php

namespace App\Http\Controllers;

class TransferBankController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($code, $email)
    {
        return view('sendBank', [
            'code' => $code,
            'email' => $email
        ]);
    }
}
