<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('check-channel', function () {
    return 'hello!';
});
