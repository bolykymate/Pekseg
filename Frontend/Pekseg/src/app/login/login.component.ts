import { Component } from '@angular/core';
import { User } from '../models/pekseg.model';
import { AuthService } from '../auth.service';
import { FormsModule } from '@angular/forms';
import { HeaderComponent } from '../header/header.component';
import {MatSelectModule} from '@angular/material/select';
import {MatInputModule} from '@angular/material/input';
import {MatError, MatFormFieldModule} from '@angular/material/form-field';
import { NgIf } from '@angular/common';

@Component({
  selector: 'app-login',
  imports: [FormsModule, HeaderComponent, NgIf],
  templateUrl: './login.component.html',
  styleUrl: './login.component.css'
})
export class LoginComponent {
  /* user: User = { username: '', password: '', email: '' }; */
  message: string = '';
  

  constructor(private auth: AuthService) {}


 

    

  /* login() {
    this.auth.login(this.user.username, this.user.password, this.user.email).subscribe({
      next: () => {
        this.message = 'Sikeres bejelentkezés!';
      },
      error: () => {
        this.message = 'Hibás felhasználónév vagy jelszó!';
      }
    });
  } */
}