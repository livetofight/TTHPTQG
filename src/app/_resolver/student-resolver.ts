import { Student } from '../_models/student';
import { Injectable } from '@angular/core';
import { Resolve, Router, ActivatedRouteSnapshot } from '@angular/router';
import { StudentService } from '../_services/student.service';
import { Observable } from 'rxjs';

@Injectable({
    providedIn: 'root'
})
export class StudentResolver implements Resolve<Student[]> {

    constructor(
        private studentService: StudentService,
        private router: Router
    ) { }

    resolve(route: ActivatedRouteSnapshot): Observable<Student[]> {
        return this.studentService.getAllStudent();
    }
}