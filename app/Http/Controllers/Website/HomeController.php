<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return view('Pages.home');
    }

    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->only(['name','email','message']), [
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
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
        return redirect()->route('home')->with('success', __('success message'));

    }
}
