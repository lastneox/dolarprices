<?php

namespace Neox\DolarPricesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $dql = "SELECT n FROM NeoxDolarPricesBundle:Prices n";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $this->getRequest()->query->get('page', 1),
            10
        );
        return $this->render('NeoxDolarPricesBundle:Default:index.html.twig',compact('pagination'));
    }
}
