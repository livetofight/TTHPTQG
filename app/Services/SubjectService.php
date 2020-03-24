<?php

namespace App\Services;

use App\Repositories\SubjectRepository;

class SubjectService
{
    private $subjectRepository;

    public function __construct(SubjectRepository $subjectRepository)
    {
        $this->subjectRepository = $subjectRepository;
    }

    public function getListSubject()
    {
        return $this->subjectRepository->getAll();
    }

}
