<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {

        return ($this->image) ? "/storage/" . $this->image : "/storage/profile/dHrBVN9OQeqj8srSVLdIcHcjCFmTOcV1oYZEWMUk.png";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
