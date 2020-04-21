<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
//, WithMultipleSheets
class StudentsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents 
{

    use Exportable;

    protected $id_school;
    
    // public function __construct(string $id_school)
    // {
    //     $this->id_school = $id_school;
    // }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        foreach (Student::whereYear('created_at',date('Y'))
                        ->get(['username','password','fullname',
                        'cmnd','date_of_birth','gender','nation',
                        'id_school','address','subject_list',
                        'created_at']) as $row => $value) {
            $student[] = array(
                '0' => $row + 1,
                '1' => $value->username,
                '2' => $value->password,
                '3' => $value->fullname,
                '4' => $value->cmnd,
                '5' => $value->date_of_birth->format('d/m/Y'),
                '6' => $value->gender,
                '7' => $value->nation,
                '8' => $value->id_school,
                '9' => $value->address,
                '10' => $value->subject_list,
                '11' => $value->created_at->format('d/m/Y H:m:s'),
            );
        }

        return (collect($student));
    }

    public function headings() :array {
    	return ["STT", "Mã đăng nhập", "Mật khẩu", "Họ và tên", "CMND", "Ngày sinh", "Giới tính","Dân tộc","Mã trường", "Địa chỉ", "Môn thi", "Ngày tạo"];
    }

    // public function sheets(): array
    // {
    //     $sheets = [];

    //     foreach ($this->id_school as $key =>$value) {
    //         $name="ahihi";
    //         $sheets[] = new StudentSchoolSheet($this->id_school, $name);
    //     }
    //     return $sheets;
    // }

    public function registerEvents(): array
    {
        $normal_style = array('font' => array('name' => 'Calibri','size' => 12));

        return [
            BeforeSheet::class  => function(BeforeSheet $event)  use($normal_style) {
                $event->sheet->setCellValue('A1','SỞ GIÁO DỤC VÀ ĐÀO TẠO TỈNH BÌNH ĐỊNH');
                $event->sheet->setCellValue('A2','TRƯỜNG THPT LƯƠNG THẾ VINH');
                $event->sheet->setCellValue('G1','CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM');
                $event->sheet->setCellValue('G2','Độc lập - Tự do - Hạnh phúc');
                $event->sheet->setCellValue('E4','DANH SÁCH THI THPT QUỐC GIA');
                $event->sheet->setCellValue('A5','');
            },

            AfterSheet::class    => function(AfterSheet $event) use($normal_style) {
                $styleArrayheading = [
                    'font'=>[
                        'bold'=>'true'
                    ],
                    'alignment' => array(
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    )
                    
                ];
                $event->sheet->getDelegate()->getStyle('A1:L1')->applyFromArray($styleArrayheading);
                
                $styleArray = array(
                    'borders' => array(
                        'outline' => array(
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                            'color' => array('argb' => '000000'),
                        ),
                    ),
                );
                //$worksheet->getParent()->getDefaultStyle()->applyFromArray($styleArray);
                //$event->sheet->applyFromArray($styleArray);
            },
        ];
    }

    

}
