import { Component, Input } from '@angular/core';
import { RouterLink } from '@angular/router';
import {MatIconModule} from '@angular/material/icon';
import {MatButtonModule} from '@angular/material/button';
import {MatToolbarModule} from '@angular/material/toolbar';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import { FormsModule } from '@angular/forms';
import { LoginComponent } from '../login/login.component';
import { MatDialog } from '@angular/material/dialog';
import { Overlay } from '@angular/cdk/overlay';
import { ModalComponent } from '../modal/modal.component';

export interface DialogData {
  name: string;
  password: string;
  email: string;
}

@Component({
  selector: 'app-header',
  imports: [LoginComponent,RouterLink, MatIconModule, MatButtonModule, MatToolbarModule, MatFormFieldModule, MatInputModule, FormsModule, MatButtonModule,MatFormFieldModule,],
  templateUrl: './header.component.html',
  styleUrl: './header.component.css'
})
export class HeaderComponent {
  constructor(public dialog: MatDialog, private overlay: Overlay) {}

  openModal() {
    document.body.style.overflow = 'hidden';
  
    const dialogRef = this.dialog.open(ModalComponent, {
      width: '500px',
      
      
    });
  
    dialogRef.afterClosed().subscribe(() => {
      document.body.style.overflow = 'auto';
    });
}
}
