<?php

namespace Saidul1996\Inspire\Controllers;

use Illuminate\Http\Request;
use Saidul1996\Inspire\Inspire;

class InspirationController
{
  public function __invoke(Inspire $inspire)
  {
    $quote = $inspire->justDoIt();

    return view('inspire::index', compact('quote'));
  }
}
