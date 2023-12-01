<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NokotsudoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function services()
    {
        return view('services');
    }

    public function service1()
    {
        return view('service1');
    }

    public function service2()
    {
        return view('service2');
    }

    public function service3()
    {
        return view('service3');
    }

    public function service4()
    {
        return view('service4');
    }



    public function company()
    {
        return view('company');
    }

    public function company1()
    {
        return view('company1');
    }

    public function company2()
    {
        return view('company2');
    }

    public function company3()
    {
        return view('company3');
    }


    public function recruit()
    {
        return view('recruit');
    }

    public function recruit1()
    {
        return view('recruit1');
    }

    public function recruit2()
    {
        return view('recruit2');
    }

    public function recruit3()
    {
        return view('recruit3');
    }

    public function recruit3_1()
    {
        return view('recruit3_1');
    }

    public function recruit3_2()
    {
        return view('recruit3_2');
    }

    public function recruit3_3()
    {
        return view('recruit3_3');
    }


    public function news()
    {
        return view('news');
    }

    public function news_detail()
    {
        return view('news_detail');
    }



    public function contact()
    {
        return view('contact');
    }

    public function mail_send(Request $request)
    {
        $captcha = 0;
        if (isset($request['g-recaptcha-response'])) {
        $captcha = $request['g-recaptcha-response'];
        }
        if ($captcha) {
            $data = ['name' => $request->name,
            'kana' => $request->kana,
            'mail' => $request->mail,
            'zip' => $request->zip,
            'address' => $request->address,
            'building' => $request->building,
            'mail' => $request->mail,
            'tel' => $request->tel,
            'content' => $request->content,];

            $mail = $request->mail;

            Mail::send('mail', $data, function($message) use ($mail){
                $message->to($mail, 'henjokaku@henson583.com')->subject('【高野山遍照尊院】お問い合わせ完了のご案内');
            });

            Mail::send('mail_admin', $data, function($message) {
                $message->to('henjokaku@henson583.com', 'henjokaku@henson583.com')->subject('【高野山遍照尊院】お問い合わせ受け付けのお知らせ');
            });

            Mail::send('mail_admin', $data, function($message) {
                $message->to('william_billl2008@yahoo.co.jp', 'henjokaku@henson583.com')->subject('【高野山遍照尊院】お問い合わせ受け付けのお知らせ');
            });
        }

        return redirect()->to('mail_comp');
    }

    public function mail_comp()
    {
        return view('mail_comp');
    }


}
