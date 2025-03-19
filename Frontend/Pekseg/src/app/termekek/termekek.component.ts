import { Component } from '@angular/core';
import { HeaderComponent } from '../header/header.component';
import { FooterComponent } from '../footer/footer.component';
import { NgFor } from '@angular/common';
import { Pekaru } from '../models/pekseg.model';
import { SzolgaltatasService } from '../szolgaltatas.service';

@Component({
  selector: 'app-termekek',
  imports: [HeaderComponent, FooterComponent, NgFor],
  templateUrl: './termekek.component.html',
  styleUrl: './termekek.component.css'
})
export class TermekekComponent {
  termekek: Pekaru[] = [];
  tipusok: string[] = [];

  constructor(private service: SzolgaltatasService) {}

  ngOnInit() {
    this.service.getPekaru().subscribe(data => this.termekek = data);
  }

  getTipusok(){
    this.service.getTipusok().subscribe(data => {
      this.tipusok=data;
      console.log(this.tipusok);
    });
  }

  getPekarukByTipus(tipus: string) {
    this.service.getPekaruTipus(tipus).subscribe(data => {
      this.termekek = data;
    });
  }
}
