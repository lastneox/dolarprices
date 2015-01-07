<?php

namespace Neox\DolarPricesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $prices = $this->getDoctrine()
            ->getRepository('NeoxDolarPricesBundle:Prices')
            ->findAll();
        return $this->render('NeoxDolarPricesBundle:Default:chart.html.twig',compact('prices'));
    }
}
