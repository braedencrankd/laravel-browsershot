<?php

use App\Models\Invoice;
use Spatie\Browsershot\Browsershot;
use Spatie\LaravelPdf\PdfBuilder;
use Spatie\LaravelPdf\Facades\Pdf;

it('can generate pdf', function () {

  $invoice = Invoice::factory()->create();


  $pdf = Pdf::view('pdfs.invoice', ['invoice' => $invoice])
    ->withBrowsershot(function (Browsershot $browsershot) {
      $browsershot->setNodeBinary('/usr/bin/node');
      $browsershot->setNpmBinary('/usr/bin/npm');
      $browsershot->noSandbox();
    })
    ->format('a4')
    ->save('invoice.pdf');

  expect($pdf)->toBeString();
});

// it('can render an invoice', function () {
//   Pdf::fake();

//   $invoice = Invoice::factory()->create();

//   $this->get(route('download-invoice', $invoice))
//     ->assertOk();

//   Pdf::assertRespondedWithPdf(function (PdfBuilder $pdf) {
//     return $pdf->contains('test');
//   });
// });
