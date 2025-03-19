import { Component, Input } from '@angular/core';
import { RouterLink } from '@angular/router';
import { HeaderComponent } from '../header/header.component';
import { FooterComponent } from '../footer/footer.component';
import { KosarComponent } from '../kosar/kosar.component';
import { NgFor } from '@angular/common';

@Component({
  selector: 'app-fooldal',
  imports: [RouterLink, HeaderComponent, FooterComponent, KosarComponent, NgFor],
  templateUrl: './fooldal.component.html',
  styleUrl: './fooldal.component.css'
})
export class FooldalComponent {
  
}
