import { Overlay } from '@angular/cdk/overlay';
import { NgIf } from '@angular/common';
import { Component, Inject, Input } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { MatButtonModule } from '@angular/material/button';
import { MAT_DIALOG_DATA, MatDialog, MatDialogRef } from '@angular/material/dialog';
import { MatError, MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import { MatSelectModule } from '@angular/material/select';
import { ModalComponent } from '../modal/modal.component';
import { AuthService } from '../auth.service';
import { User } from '../models/pekseg.model';

@Component({
  selector: 'app-regist',
  imports: [FormsModule, MatFormFieldModule, MatInputModule, MatError, MatSelectModule, NgIf, MatInputModule,MatButtonModule],
  templateUrl: './regist.component.html',
  styleUrl: './regist.component.css'
})
export class RegistComponent {
  constructor(
    public dialogRef: MatDialogRef<RegistComponent>,
    @Inject(MAT_DIALOG_DATA) public data: { message: string }, public dialog: MatDialog, private overlay: Overlay, private auth: AuthService
  ) {}

  close() {
    this.dialogRef.close();
  }

  
    openModal() {
      document.body.style.overflow = 'hidden';
    
      const dialogRef = this.dialog.open(ModalComponent, {
        width: '500px',
        
        
      });
    
      dialogRef.afterClosed().subscribe(() => {
        document.body.style.overflow = 'auto';
      });
  }

  @Input() user: User = {username:'',email:'',password:''};
  message: string = '';



  registration() {
    if (!this.user) {
      this.message = 'Hibás adatok!';
      return;
    }

    this.auth.register(this.user.username, this.user.email, this.user.password)
      .subscribe({
        next: (response) => {
          this.message = 'Sikeres regisztráció!';
        },
        error: (err) => {
          this.message = 'Hiba történt a regisztráció során.';
        }
      });
  }
}
