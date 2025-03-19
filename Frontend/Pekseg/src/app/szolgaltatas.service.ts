import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map, Observable } from 'rxjs';
import { Pekaru } from './models/pekseg.model';

@Injectable({
  providedIn: 'root'
})
export class SzolgaltatasService {

  constructor(private http: HttpClient) { 
    this.getTipusok();
  }

  getPekaru(): Observable<Pekaru[]> {
    return this.http.get<Pekaru[]>('http://127.0.0.1:8000/api/pekseg2');
  }


  
  private tipus: string[] = [];

  getTipusok(): Observable<string[]> {
    return this.http.get<{ tipus: string[] }>('http://127.0.0.1:8000/api/pekseg2').pipe(
      map(response => response.tipus)
    );
  }

  getPekaru2(tipus: string): Observable<Pekaru> {
    return this.http.get<Pekaru>(`http://127.0.0.1:8000/api/pekseg2/${tipus}`);
  }

  getPekaruTipus(tipus: string): Observable<Pekaru[]> {
    return this.http.get<{ pekaruk: Pekaru[] }>(`http://127.0.0.1:8000/api/pekseg2/${tipus}`).pipe(
      map(response => response.pekaruk)
    );
  }
}
