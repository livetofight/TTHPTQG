<?php

namespace App\Repositories;

use App\Models\Task;

class TaskRepository  extends EloquentRepository 
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Task::class;
    }

    
}