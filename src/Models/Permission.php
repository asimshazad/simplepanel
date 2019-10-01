<?php

namespace Wikichua\Simplecontrolpanel\Models;

use Illuminate\Database\Eloquent\Model;
use Wikichua\Simplecontrolpanel\Traits\DynamicFillable;
use Wikichua\Simplecontrolpanel\Traits\UserTimezone;

class Permission extends Model
{
    use DynamicFillable, UserTimezone;

    // roles relationship
    public function roles()
    {
        return $this->belongsToMany(config('lap.models.role'));
    }

    // users relationship
    public function users()
    {
        return $this->belongsToMany(config('auth.providers.users.model'));
    }

    // create permission group
    public function createGroup($group, $names = [])
    {
        foreach ($names as $name) {
            $this->create([
                'group' => $group,
                'name' => $name,
            ]);
        }
    }
}