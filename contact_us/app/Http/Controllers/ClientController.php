<?php

namespace App\Http\Controllers;
use App\Mail\SendEmail;
use App\Models\ClientInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    public function index() {
        return view('index');
    }

    public function store(Request $request)
    {
        $hostEmail = 'gdummy347@gmail.com';
        $clientData = [
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'message' => $request->message,
        ];
        ClientInfo::create($clientData);
        Mail::to($hostEmail)->send(new SendEmail($clientData));
        return response()->json([
            'status' => 200,
        ]);

    }
}
