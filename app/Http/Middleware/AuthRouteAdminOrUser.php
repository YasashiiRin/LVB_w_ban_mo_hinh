<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthRouteAdminOrUser
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $useremail = $user->email;
        $is_admin = DB::table('admin')->where('email', $useremail)->exists();
        if ($is_admin) {
            return redirect()->route('admin');
        }
        return redirect()->route('trang-chu');
    }
}
