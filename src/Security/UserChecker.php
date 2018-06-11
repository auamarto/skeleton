<?php

namespace App\Security;

use App\Exception\AccountDeletedException;
use App\Entity\AuthUser;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    /**
     * @param UserInterface $user
     * @throws \App\Exception\AccountDeletedException
     */
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof AuthUser) {
            return;
        }
        if ($user->isDeleted()) {
            throw new AccountDeletedException();
        }
    }

    /**
     * @param UserInterface $user
     * @throws \Exception
     */
    public function checkPostAuth(UserInterface $user): void
    {
        if (!$user instanceof AuthUser) {
            return;
        }
        if ($user->isExpired()) {
            throw new AccountExpiredException();
        }
    }
}