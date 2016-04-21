sf3-microkernel + Fos Rest Bundle
=================================

Author : Cyril Pereira <cyril.pereira@gmail.com>

Here is a starter to work with Fos Rest Bundle and SF3 in microservice or microkernel

# Installation

```
Composer install
```

# Test

URLs to test

```
/
/api
/doc
```

# Add your controller

Add your own controller   
Just edit in src/AppBundle/Controller make a controller who extends FOSRestController

```php
<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ApiController extends FOSRestController
{
    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Return true",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when not found"
     *   }
     * )
     * @Rest\Get("/api")
     */
    public function indexAction(Request $request)
    {
        $view = $this->view(['toto' => 'tata'], Response::HTTP_OK)->setFormat('json');
        return $view;


        return $view;
    }
}
```

# More infos

more info on fos rest bundle : http://symfony.com/doc/1.7/bundles/FOSRestBundle/index.html   
Symfony microkernel : http://symfony.com/blog/new-in-symfony-2-8-symfony-as-a-microframework   
Symfony 2 version can be found here : https://github.com/funkymed/fos_rest_starter