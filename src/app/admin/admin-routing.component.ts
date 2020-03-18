import { Routes, RouterModule } from "@angular/router";
import { AdminComponent } from './admin.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { StudentComponent } from './student/student.component';
import { SubjectComponent } from './subject/subject.component';
import { QuestionComponent } from './question/question.component';
import { ExamComponent } from './exam/exam.component';
import { ExamlistComponent } from './examlist/examlist.component';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { StudentResolver } from '../_resolver/student-resolver';

const routes: Routes = [
    {
        path:'',
        component: AdminComponent,
        children:[
            {
                path:'dashboard',
                component: DashboardComponent
            },
            {
                path:'student',
                component: StudentComponent,
                resolve: {student: StudentResolver }
            },
            {
                path:'subject',
                component: SubjectComponent
            },
            {
                path:'question',
                component: QuestionComponent
            },
            {
                path:'exam',
                component: ExamComponent
            },
            {
                path:'examlist',
                component:ExamlistComponent
            },
            {
                path: '',
                redirectTo: 'dashboard',
                pathMatch: 'full'
              },
              {
                path: '**',
                redirectTo: 'dashboard',
                pathMatch: 'full'
              }
        ]
    }
];

@NgModule({
    imports: [CommonModule, RouterModule.forChild(routes)],
    exports: [RouterModule]
})
export class AdminRoutingModule{}