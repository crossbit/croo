<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers;

    protected $loginView = 'admin.auth.login';

    protected $guard = 'admin';

    protected $redirectTo = null;

    public function __construct()
    {
        $this->redirectTo = route('admin.home');
    }
}
