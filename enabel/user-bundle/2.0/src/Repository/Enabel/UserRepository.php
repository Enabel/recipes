<?php

declare(strict_types=1);

namespace App\Repository\Enabel;

use App\Entity\Enabel\User;
use Doctrine\Persistence\ManagerRegistry;
use Enabel\UserBundle\Repository\UserRepository as BaseUserRepository;

/**
 * @method User|null   find($id, $lockMode = null, $lockVersion = null)
 * @method User|null   findOneBy(array $criteria, array $orderBy = null)
 * @method array<User> findAll()
 * @method array<User> findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends BaseUserRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }
}
