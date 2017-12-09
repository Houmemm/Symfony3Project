<?php

namespace frontoffice\frontBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use Doctrine\DBAL\Event\Listeners\MysqlSessionInit;

class frontofficefrontBundle extends Bundle
{
      public function boot()
    {
        $this->container->
            get('doctrine.orm.entity_manager')->
            getEventManager()->
            addEventSubscriber(new MysqlSessionInit('utf8', 'utf8_unicode_ci'));
    }
    
}
