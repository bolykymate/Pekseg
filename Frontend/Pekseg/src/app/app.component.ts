import { Component } from '@angular/core';
import { RouterLink, RouterOutlet } from '@angular/router';
import { FooldalComponent } from './fooldal/fooldal.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet, RouterLink ,FooldalComponent, HeaderComponent, FooterComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'Pekseg';
}
