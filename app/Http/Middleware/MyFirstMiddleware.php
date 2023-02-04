<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class MyFirstMiddleware
{
    private $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function handle(Request $request, Closure $next, $role)
    {
        dd($role);
        $response = $next($request);

        if ($this->users->count() === 6) {
            return $response;
        }

        dd('Existem mais ou menos de 6 usuarios');
    }
}
