<?php

namespace HouseFinder\ParserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HouseFinderParserBundle:Default:index.html.twig', array('name' => $name));
    }
}