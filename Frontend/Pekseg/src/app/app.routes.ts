import { Routes } from '@angular/router';
import { KosarComponent } from './kosar/kosar.component';
import { FooldalComponent } from './fooldal/fooldal.component';
import { TermekekComponent } from './termekek/termekek.component';
import { LoginComponent } from './login/login.component';
import { authGuard } from './auth.guard';

export const routes: Routes = [
    {path: '', component: FooldalComponent},
    {path: 'home', component: FooldalComponent},
    {path: 'kosar', component: KosarComponent},
    {path: 'termekek', component:TermekekComponent},
    { path: 'login', component: LoginComponent },
    { path: 'aloldal', component: FooldalComponent, canActivate: [authGuard] },
    { path: '**', redirectTo: 'login' }
];
