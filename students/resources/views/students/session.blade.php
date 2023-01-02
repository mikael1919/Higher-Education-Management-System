<?php

use Illuminate\Support\Facades\Session;

// Check if the 'id' session variable is set
if (!Session::has('id') || (trim(Session::get('id')) == '')) {
    return redirect()->to('index');
}

$sessionId = Session::get('id');