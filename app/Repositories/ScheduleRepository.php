<?php

namespace App\Repositories;

use App\Models\Schedule;

class ScheduleRepository  extends EloquentRepository 
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Schedule::class;
    }

    public function getSubject($date)
    {
        return Schedule::where('test_date',$date)
                        ->select('id_subject')
                        ->get()
                        ->toArray();
    }
}