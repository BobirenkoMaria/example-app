<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\PasswordRecoveryRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\EmailConfirm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AutorizationController extends Controller
{
    public function authUser(AuthRequest $request){
        $data = $request->validated();
        if(auth('web')->attempt($data)){
            return to_route('messager');
        }
        return to_route('login')->withErrors(['email' => 'Пользователь не найден либо данные введены неправильно']);
    }

    public function showLoginForm(){
        return view('user.login');
    }

    public function showRegisterForm(){
        return view('user.register');
    }

    public function registerUser(RegisterRequest $request){
        $data = $request->validated();
        
        Mail::to($data->email)->send(new EmailConfirm());

        $user = User::create([
            "name" => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if($user){
            auth('web')->login($user);

            return to_route('messager');
        }
    }

    public function passwordRecoveryForm(){
        return view('user.password_recovery');
    }

    public function passwordRecovery(PasswordRecoveryRequest $request){
        $data = $request->validated();

        Mail::send(['text' => 'emails.confirm-email'], ['name', 'Hii'], function($message){
            $message->to($data->email, 'to Hii')->subject('test email');
            $message->from('myc851018@gmail.com', 'Hii');
        });

        return view('emails.confirm-email');
    }

    public function logOut(){
        auth('web')->logout();
        return to_route('login');
    }
}
