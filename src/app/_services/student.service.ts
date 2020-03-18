import { Injectable } from '@angular/core';
import { HttpClient, HttpParams, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from 'src/environments/environment';
import { Student } from '../_models/student';

const API_URL = "http://127.0.0.1:8000/api/";

@Injectable({
  providedIn: 'root'
})
export class StudentService {

  constructor( private httpClinet: HttpClient) { }
  getAllStudent(): Observable<Student[]>{
    return this.httpClinet.get<any>(environment.baseUrl+'admin/student');
  }
}
