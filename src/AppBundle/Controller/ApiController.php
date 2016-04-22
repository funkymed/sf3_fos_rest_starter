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
        $format = $request->get('_format','json');
        $view = $this->view(['foo' => 'bar'], Response::HTTP_OK)->setFormat($format);
        return $view;


        return $view;
    }
}