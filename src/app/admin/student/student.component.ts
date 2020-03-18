import { Component, OnInit } from '@angular/core';
import { StudentService } from 'src/app/_services/student.service';
import { Student } from 'src/app/_models/student';
import { ActivatedRoute } from '@angular/router';

declare var $ ;

@Component({
  selector: 'app-student',
  templateUrl: './student.component.html',
  styleUrls: ['./student.component.css']
})
export class StudentComponent implements OnInit {

  listStudent: Student[];
  baseDataListStudent: Student[];


  constructor(
    private studentService: StudentService,
    private activatedRoute: ActivatedRoute,
  ) { }

  ngOnInit() {

    $(() => {
      $('#example2').DataTable()
      $('#example1').DataTable({
        "language":{
          "lengthMenu":     "Hiển thị _MENU_ kết quả",
          "emptyTable":     "Vui lòng thêm dữ liệu !",
          "info":           "Hiển thị _START_ từ _END_ của _TOTAL_ kết quả",
          "infoEmpty":      "Hiển thị 0 đến 0 của 0 kết quả",
          "search":         "Tìm kiếm:",
          "paginate": {
              "first":      "Đầu",
              "last":       "Cuối",
              "next":       "Tiến",
              "previous":   "Lùi"
          },
        }
        })
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    })
    // this.activatedRoute.data.subscribe(data => {
    //   if (data.student !== undefined && data.student !== null) {
    //     this.listStudent = data.student.result;
    //   }
    // });
    // this.baseDataListStudent = this.listStudent;
  }

  updateListStu(data){
    // this.listStudent = data; // lưu dữ liệu bên html
    // this.baseDataListStudent = []; // lưu dữ liệu gốc
    // if (data != null ) {
    //   this.listStudent.forEach(x => {
    //     this.baseDataListStudent.push(x);
    //   });
    // }
  }

  getListStudent(){
    this.studentService.getAllStudent().subscribe(data=>(this.listStudent=data)) 
  }
}
