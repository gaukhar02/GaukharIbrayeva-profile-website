<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
    $objDemo = new \stdClass();
    $objDemo ->demo_one = "Demo One Value";
    $objDemo ->demo_two = "Demo Two Value";
    $objDemo ->sender = 'Gaukhar.Ibrayeva';
    $objDemo ->receiver = 'Gaukhar.Ibrayeva';

    Mail::to("g019302i@gmail.com")->send(new DemoEmail($objDemo));

    }
    }
