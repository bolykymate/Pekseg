import { Component } from '@angular/core';
import { HeaderComponent } from '../header/header.component';
import { FooterComponent } from '../footer/footer.component';
import { RouterLink } from '@angular/router';
import { NgFor } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-kosar',
  imports: [HeaderComponent, FooterComponent,RouterLink],
  templateUrl: './kosar.component.html',
  styleUrl: './kosar.component.css'
})
export class KosarComponent {
  
}
