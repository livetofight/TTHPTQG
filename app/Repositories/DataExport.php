
<?php

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromCollection,WithHeadings
{
    private $modelName;
    private $filltable;

    public function __construct(String $modelName, array $filltable)
    {
        $this->modelName= $modelName;
        $this->filltable= $filltable;
    }
    function collection(){
        $data = $this->modelName::all();
        return $data;
    }
    public function headings(): array
    {
        return $this->filltable;
    }
}
