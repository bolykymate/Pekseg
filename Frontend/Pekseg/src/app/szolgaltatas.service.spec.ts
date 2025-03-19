import { TestBed } from '@angular/core/testing';

import { SzolgaltatasService } from './szolgaltatas.service';

describe('SzolgaltatasService', () => {
  let service: SzolgaltatasService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(SzolgaltatasService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
