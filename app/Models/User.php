<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Jakyeru\Larascord\Traits\InteractsWithDiscord;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasFactory, Notifiable, InteractsWithDiscord, HasRoles, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'username',
        'global_name',
        'discriminator',
        'email',
        'avatar',
        'verified',
        'banner',
        'banner_color',
        'accent_color',
        'locale',
        'mfa_enabled',
        'premium_type',
        'public_flags'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'username' => 'string',
        'global_name' => 'string',
        'discriminator' => 'string',
        'email' => 'string',
        'avatar' => 'string',
        'verified' => 'boolean',
        'banner' => 'string',
        'banner_color' => 'string',
        'accent_color' => 'string',
        'locale' => 'string',
        'mfa_enabled' => 'boolean',
        'premium_type' => 'integer',
        'public_flags' => 'integer'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    public function battles(): BelongsToMany
    {
        return $this->belongsToMany(Battle::class, 'battle_country_user');
    }
    public function battle_countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'battle_country_user');
    }
}
