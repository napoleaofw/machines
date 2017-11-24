<?php

namespace App\Observers;

use Illuminate\Support\Facades\Auth;
use App\Models\AppModel;

class Model
{
    /**
     * Listen to the AppModel creating event.
     *
     * @param  \App\Models\AppModel  $model
     * @return void
     */
    public function creating(AppModel $model)
    {
        dd('hello');
        $model->created_by = Auth::user()->id;
    }

    /**
     * Listen to the AppModel updating event.
     *
     * @param  \App\Models\AppModel  $model
     * @return void
     */
    public function updating(AppModel $model)
    {
        $model->updated_by = Auth::user()->id;
    }
}