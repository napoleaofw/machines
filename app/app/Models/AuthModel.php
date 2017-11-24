<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Traits\Userstamps;

class AuthModel extends Authenticatable
{
    use Userstamps;
}
