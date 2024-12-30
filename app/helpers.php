<?php

namespace App;

use Illuminate\Support\Facades\Http;
use Jakyeru\Larascord\Models\DiscordAccessToken;
use Exception;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Collection;
use Jakyeru\Larascord\Services\DiscordService;
use Jakyeru\Larascord\Types\AccessToken;
use Jakyeru\Larascord\Types\GuildMember;
use stdClass;

/////////////////
// Discord API //
/////////////////

const baseApi = "https://discord.com/api";

if (! function_exists('get_guild')) {
    function get_guild(int $guild_id): Collection
    {
        $endpoint = '/guilds/' . $guild_id;

        $response = Http::withToken(env('DISCORD_API_TOKEN'), 'Bot')->get(baseApi . $endpoint);

        return $response->collect();
    }
}
