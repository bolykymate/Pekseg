import { Component } from '@angular/core';
import { HeaderComponent } from '../header/header.component';
import { FooterComponent } from '../footer/footer.component';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-kosar',
  imports: [FormsModule,HeaderComponent, FooterComponent],
  templateUrl: './kosar.component.html',
  styleUrl: './kosar.component.css'
})
export class KosarComponent {
  
}
