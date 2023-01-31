<?php

declare(strict_types=1);

namespace App\Entity\Enabel;

use App\Repository\Enabel\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Enabel\UserBundle\Entity\User as BaseUser;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User extends BaseUser
{
}
