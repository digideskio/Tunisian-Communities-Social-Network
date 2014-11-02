<?php

namespace TunisianCommunities\TnSocialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TunisianCommunitiesTnSocialBundle:Default:index.html.twig', array('name' => $name));
    }
}
