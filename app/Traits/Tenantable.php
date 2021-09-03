<?php

namespace App\Traits;

trait Tenantable
{
    public static function bootTenantable()
    {
        if (!app()->runningInConsole() && $user = auth()->user()) {
            static::creating(function ($model) use ($user) {
                if ($user->is_admin) {
                    return;
                }

                $model->team_id = $user->team_id;
            });

            if (!$user->is_admin) {
                static::addGlobalScope('team', function ($query) use ($user) {
                    $query->where('team_id', $user->team_id);
                });
            }
        }
    }
}
