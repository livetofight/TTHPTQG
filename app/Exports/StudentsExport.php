<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }

    public function headings() :array {
    	return ["STT", "Mã đăng nhập", "Mật khẩu", "Họ và tên", "CMND", "Ngày sinh", "Giới tính","Dân tộc","Mã trường", "Địa chỉ", "Môn thi", "Ngày tạo"];
    }

    public function booksListPhpExcel(){
        // đọc loại file template
        $fileType = \PHPExcel_IOFactory::identify(resource_path('excels/students_template.xlsx')); 
        $objReader = \PHPExcel_IOFactory::createReader($fileType);
        //load dữ liệu từ file excel luu vao bien $objPHPExcel
        $objPHPExcel = $objReader->load(resource_path('excels/students_template.xlsx')); 
    
        //đọc dữ liệu từ database
        $studentData = Student::select()->get(); 
    
        //chay ham them du lieu vao excel
        $this->addDataToExcelFile($objPHPExcel->setActiveSheetIndex(0), $studentData); 
    
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); //Ham tao moi file excel
    
        //Kiem tra thu muc co ton tai khong, neu khong co thi tao moi
    
        if (!is_dir(public_path('excel'))) {
            mkdir(public_path('excel'));
        }
    
        if (!is_dir(public_path('excel/import'))) {
            mkdir(public_path('excel/import'));
        }
        //-----------------------------------------------------------
    
        $path = 'excel/import/' . time() . 'import.xlsx'; //dat ten cho file excel
    
        $objWriter->save(public_path($path)); //luu file excel vao thu muc
    
        return redirect($path); //tra file excel ve cho nguoi dung
    }
}
