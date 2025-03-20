import { NgIf } from '@angular/common';
import { Component, Inject } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { MAT_DIALOG_DATA, MatDialog, MatDialogRef } from '@angular/material/dialog';
import { MatError, MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import { MatSelectModule } from '@angular/material/select';
import {MatButtonModule} from '@angular/material/button';
import { Overlay } from '@angular/cdk/overlay';
import { RegistComponent } from '../regist/regist.component';
import { User } from '../models/pekseg.model';
import { AuthService } from '../auth.service';

@Component({
  selector: 'app-modal',
  imports: [FormsModule, MatFormFieldModule, MatInputModule, MatError, MatSelectModule, NgIf, MatInputModule,MatButtonModule],
  templateUrl: './modal.component.html',
  styleUrl: './modal.component.css'
})
export class ModalComponent {
  felh = {
    name: '',
    email: '',
    password: ''
    };
  constructor(
    public dialogRef: MatDialogRef<ModalComponent>,
    @Inject(MAT_DIALOG_DATA) public data: { message: string }, public dialog: MatDialog, private overlay: Overlay, private auth: AuthService
  ) {}

  close() {
    this.dialogRef.close();
  }


  openModal2() {
    document.body.style.overflow = 'hidden';
  
    const dialogRef = this.dialog.open(RegistComponent, {
      width: '500px',
      
      
    });
  
    dialogRef.afterClosed().subscribe(() => {
      document.body.style.overflow = 'auto';
    });
}

  user: User = { username: '', password: '', email: '' }; 
  message: string = '';
  


   login() {
    this.auth.login(this.user.username, this.user.password, this.user.email).subscribe({
      next: () => {
        this.message = 'Sikeres bejelentkezés!';
      },
      error: () => {
        this.message = 'Hibás felhasználónév vagy jelszó!';
      }
    });
  } 
}
