<?php

namespace EmailMkt\Infrastructure\Persistence\Doctrine\Repository;

use Doctrine\ORM\EntityManager;
use EmailMkt\Domain\Entity\Tag;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TagRepositoryFactory
{

    public function __invoke(ContainerInterface $container):TagRepository
    {
        /**
         * @var EntityManager $entityManager
         */
        $entityManager = $container->get(EntityManager::class);
        return $entityManager->getRepository(Tag::class);
    }


}
