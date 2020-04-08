<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAccountRequest;
use App\Models\Account;


class SignupController extends Controller
{
  public function register(CreateAccountRequest $req) {
    $account = new Account();
    $account->nickname = $req->input('nickname');
    $account->FirstName = $req->input('FirstName');
    $account->LastName = $req->input('LastName');
    $account->password = $req->input('password');

    $account->save();

    return redirect('/');
  }
}
