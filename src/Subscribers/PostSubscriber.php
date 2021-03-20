<?php

namespace App\Subscribers;

use App\Entity\Posts;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\Security\Core\Security;

class PostSubscriber implements EventSubscriberInterface
{

    // Permet la récupération du nom de l'utilisateur connecté et de définir celui-ci comme autheur des articles en création

    /**
     * @var security
     */
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class=>['setAuthor']
        ];
    }

    public function setAuthor(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();
        if ($entity instanceof Posts) {
            $entity->setPostAuthor($this->security->getUser());
        }
    }
}