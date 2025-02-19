<?php

namespace App\Models;

use Filament\Panel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable implements FilamentUser
{
    use SoftDeletes, Notifiable;

    protected $guarded = ['id'];

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
}
