<?php

declare(strict_types=1);

namespace App\Controller\Admin\Enabel;

use App\Entity\Enabel\User;
use Enabel\UserBundle\Controller\Admin\UserCrudController as BaseUserCrudController;

class UserCrudController extends BaseUserCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }
}
