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
        $date->format('Y-m-d');
        return Schedule::whereDate('test_date',$date)
                        ->get('id_subject')
                        ->toArray();
    }

    public function getTest($date)
    {
        $date->format('Y-m-d');
        return Schedule::whereDate('test_date',$date)
                        ->get();
    }


}