<?php

namespace FTT\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FTTUserBundle extends Bundle
{ public function getParent()
  
        {
  
    return 'FOSUserBundle';
  
        }
}