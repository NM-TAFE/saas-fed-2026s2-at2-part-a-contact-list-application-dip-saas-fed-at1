<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

final class ContactController extends Controller
{
    public function index()
    {
        $contact = [
            "id" => 1,
            "name" => "john",
            "email" => "test@test.com",
            "phone" => "0888888888",
            "active" => true,
        ];

        // dd($contact);

        // return "Welcome to the index method in the contact controller {$name}";
        return view("client.contacts.index", ["contact" => $contact]);
    }
}
