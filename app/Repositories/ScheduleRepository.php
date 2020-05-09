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

    public function getIdSubject()
    {
        $schedule = Schedule::whereDate('test_date',now());
        //dd($schedule);
        if(now()>'12:00') $sign='>';
        else $sign='<';
        return $schedule->where('test_date',$sign,\Carbon\Carbon::parse('12:00'))->value('id_subject');
    }
}
