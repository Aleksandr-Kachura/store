<?php

namespace Site\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Site\ShopBundle\Service\Srv;

class TestController extends Controller
{
    public function indexAction()
    {

       $serv = $this->get('site_bundle.service');
        return ($serv->showAct());
        /*$em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('BundlesStoreBundle:Orders');
        $orders=$repo->findBy(['userId'=>1]);

        foreach($orders as $key=>$value)
        {
            $id=$value->getId();
            $ord[$id]=$value->getProdtorder();
        }

        if (!$ord) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        }*/
       // return $this->render('SiteShopBundle:Page:order.html.twig',array('ord' => $data));
    }

}