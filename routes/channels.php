<?php

use App\Models\Battle;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('chat.battle.{id}', function ($user, $id) {
    $battle = Battle::with('user')->find($id);
    return !is_null($battle);
    // return (int) $user->id === (int) $id;
});
