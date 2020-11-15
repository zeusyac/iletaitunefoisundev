<?php

declare(strict_types=1);

namespace App\Infrastructure\Symfony\Security\Exception;

use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;

class AccountSuspendedException extends CustomUserMessageAccountStatusException
{
}