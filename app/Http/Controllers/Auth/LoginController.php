<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use Laravel\Fortify\FortifiesLoginRequests;

class LoginController
{
    use FortifiesLoginRequests;

    // ...

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'admin') {
            return redirect()->route('dashboard');
        } elseif ($user->role === 'user') {
            return redirect()->route('dashboard_employee');
        }

        return redirect('/');
    }

    // ...
}
