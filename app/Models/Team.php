<?php

namespace App\Models;

use App\Enums\PlayerApproveStatus;
use App\Enums\PlayerJoinStatus;
use App\Notifications\FrontendPasswordResetNotification as ResetPasswordNotification;
use App\Traits\PushNotification;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Team extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, PushNotification;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'username',
        'logo',
        'email',
        'password',
        'phone',
        'user_fullname',
        'message_code',
        'description',
        'club_id',
        'device_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'club_id',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'device_token' => 'array',
    ];

    public function players()
    {
        return $this->hasMany(Player::class, 'team_id');
    }

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id');
    }

    public function TransferPlayers()
    {
        return $this->hasMany(TransferPlayer::class, 'basic_team_id', 'id');
    }

    public function loanPlayers()
    {
        return $this->hasMany(LoanPlayer::class, 'basic_team_id', 'id');
    }

    public function messages()
    {
        return $this->hasMany(TeamMessage::class, 'sender_id', 'id');
    }

    public function clubTeamMessages()
    {
        return $this->hasMany(ClubTeamMessage::class, 'team_id', 'id')->with('send');
    }

    public function subscribePlayer()
    {
        return Player::where('team_id', $this->id)
            ->where('approve_status', PlayerApproveStatus::Approved)
            ->where('join_status', '!=', PlayerJoinStatus::Stoped);
    }

    public function yearUpdates()
    {
        return $this->belongsToMany(YearUpdate::class);
    }

    /**
     * Get  the route key for model
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getLogoAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/$val");
    }

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }


    public function notefications()
    {
        return $this->hasMany(TeamNotefication::class, 'team_id', 'id');
    }

    public function teamHeaderImage()
    {
        return $this->hasMany(TeamHeaderImage::class);
    }

    public function assistants()
    {
        return $this->hasMany(Assistant::class);
    }
}
