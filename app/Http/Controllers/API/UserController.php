<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request): Collection
    {
        return User::query()
            ->select('id', 'username', 'avatar')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('username', 'like', "%{$request->search}%")
//                    ->orWhere('email', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->orderBy('username')
            ->get()
            ->map(function (User $user) {
                $user->profile_image = $user->getAvatar(['extension' => 'webp', 'size' => 24]);

                return $user;
            });
    }
}
