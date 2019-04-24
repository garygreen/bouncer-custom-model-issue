<?php

namespace App\Policies;

use App\User;
use App\MutualBlock;

class MutualBlockPolicy
{
	public function store(?User $actingUser, MutualBlock $mutualBlock): bool
	{
        // Some other checks here
        // .... 
        // blah blah
        // ...

        // And finally...
		return ! $mutualBlock->exists();
	}
}
