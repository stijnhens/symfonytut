<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($firstName, $count)
    {
        $templating = $this->container->get('templating');

        $response = $templating->renderResponse('EventBundle:Default:index.html.twig', array(
            'name' => $firstName
        ));

        return $response;
    }
}
