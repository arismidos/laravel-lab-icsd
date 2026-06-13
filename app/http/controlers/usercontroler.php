<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // 1. Εμφάνιση όλων των χρηστών
    public function index()
    {
        $users = User::all(); // Ανάκτηση από τη βάση
        return view('users.index', compact('users')); // Αποστολή στο View
    }

    // 2. Αποθήκευση νέου χρήστη με Validation
    public function store(Request $request)
    {
        // Έλεγχος εγκυρότητας των δεδομένων (Validation)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        // Ασφαλής εισαγωγή στη βάση μέσω του Model
        User::create($validated);

        return redirect('/users')->with('success', 'Ο χρήστης προστέθηκε επιτυχώς!');
    }
}
?>