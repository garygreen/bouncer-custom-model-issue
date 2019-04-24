<?php

namespace App;

use App\User;

class MutualBlock
{
	public $user1;
	public $user2;

	public function __construct(User $user1, User $user2)
	{
		$this->user1 = $user1;
		$this->user2 = $user2;
	}

	public function exists(): bool
	{
		// Some custom logic here.
		// Just make out they're not mutually blockd for now.
		return false;
	}
}
