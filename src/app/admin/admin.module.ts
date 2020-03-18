import { NgModule } from "@angular/core";
import { AdminComponent } from './admin.component';
import { HeaderComponent } from './layout/header/header.component';
import { FooterComponent } from './layout/footer/footer.component';
import { ContentComponent } from './layout/content/content.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { ExamComponent } from './exam/exam.component';
import { ExamlistComponent } from './examlist/examlist.component';
import { StudentComponent } from './student/student.component';
import { SubjectComponent } from './subject/subject.component';
import { CommonModule } from '@angular/common';
import { AdminRoutingModule } from './admin-routing.component';
import { LeftSideComponent } from './layout/left-side/left-side.component';

@NgModule({
  imports:[
    CommonModule,
    AdminRoutingModule,
    
  ],
  declarations:[
    AdminComponent,
    HeaderComponent,
    FooterComponent,
    LeftSideComponent,
    ContentComponent,
    DashboardComponent,
    ExamComponent,
    ExamlistComponent,
    StudentComponent,
    SubjectComponent
  ]
})
export class AdminModule{}