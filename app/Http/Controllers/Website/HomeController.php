<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        App::setLocale(session()->get('locale'));
        return view('Pages.home');
    }

    public function change(Request $request)
    {
        $locale = $request->input('locale');
        $supportedLocales = ['en', 'ar'];
        if (in_array($locale, $supportedLocales)) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        }
        return back();
    }

    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->only(['name','email','message']), [
            'name'    => 'required|string|max:100',
            'email'   => 'required|email:filter',
            'message' => 'required|string|max:1000',
        ],
        [
            'email.required' => __('email-required'),
            'email.email' => __('email-email'),
            'name.required' => __('name-required'),
            'message.required' => __('message-required'),
        ]
        );

        if($validator->fails()){
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        Message::create($request->only(['name','email','message']));
        return redirect()->route('home')->with('success', __('success_message'));

    }
}
