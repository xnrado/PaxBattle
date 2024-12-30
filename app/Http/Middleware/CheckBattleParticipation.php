<?php

namespace App\Http\Middleware;

use App\Models\Battle;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckBattleParticipation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $slug = $request->route('slug');
        $battle = Battle::query()->where('slug', $slug)->first();

        if (!$battle) {
            abort(404);
        }

        if ($user->can('see_all_battles')) {
            return $next($request);
        }

        $user_battles = $user->battles->pluck('id')->toArray();
        if (!in_array($battle->id, $user_battles)) {
            abort(403);
        }

        return $next($request);
    }
}
