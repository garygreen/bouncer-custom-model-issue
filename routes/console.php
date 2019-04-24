<?php

use App\MutualBlock;
use App\User;

Artisan::command('test', function () {
    Auth::login(new User);

    // With Bouncer enabled in app.php, this fails with error:
    // Too few arguments to function App\MutualBlock::__construct()
    // If you disable bouncer, it'll work and return true.
    dd(Gate::check('store', new MutualBlock(new User, new User)));
});
