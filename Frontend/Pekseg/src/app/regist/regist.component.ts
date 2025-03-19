import { Overlay } from '@angular/cdk/overlay';
import { NgIf } from '@angular/common';
import { Component, Inject } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { MatButtonModule } from '@angular/material/button';
import { MAT_DIALOG_DATA, MatDialog, MatDialogRef } from '@angular/material/dialog';
import { MatError, MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import { MatSelectModule } from '@angular/material/select';

@Component({
  selector: 'app-regist',
  imports: [FormsModule, MatFormFieldModule, MatInputModule, MatError, MatSelectModule, NgIf, MatInputModule,MatButtonModule],
  templateUrl: './regist.component.html',
  styleUrl: './regist.component.css'
})
export class RegistComponent {
  felh = {
    name: '',
    email: '',
    password: ''
    };
  constructor(
    public dialogRef: MatDialogRef<RegistComponent>,
    @Inject(MAT_DIALOG_DATA) public data: { message: string }, public dialog: MatDialog, private overlay: Overlay
  ) {}

  close() {
    this.dialogRef.close();
  }
}
