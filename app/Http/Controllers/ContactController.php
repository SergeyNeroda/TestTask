<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:5|max:1000',
        ]);

        try {
            ContactMessage::create($request->only('name', 'email', 'message'));
            return redirect()->route('contact')->with('success', 'Дякуємо за звернення!');
        } catch (\Exception $e) {
            return back()->with('danger', 'Помилка збереження звернення');
        }
    }
}
