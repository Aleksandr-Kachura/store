<?php
namespace Site\ShopBundle\Service;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.06.15
 * Time: 8:43
 */
class Srv
{

    public function __construct($container)
    {
        $this->container = $container;
    }
    public function showAct()
    {
        $doctrine = $this->container->get('doctrine')->getManager();
      //  $user = $doctrine->getRepository('BundlesStoreBundle:User')->findOneById(1);
      //  $user=1;
       $req=$this->container->get('request');
       // return $user;
    }

    public function getParam($category)
    {
        $doctrine = $this->container->get('doctrine')->getManager();
        $user = $doctrine->getRepository('BundlesStoreBundle:User');

        $repo=$doctrine->getRepository('BundlesStoreBundle:ValParam');
        $param=$category->getParam();
        $par=array();
        foreach($param as $key=>$value)
        {
            $id=$value->getId();
            $par[$value->getId()]=$repo->getParam($id);
            // dump($value->getValparam()->getValues());
        }
         return $par;
    }
    public function Test()
    {
        $doctrine=$this->container->get('doctrine');
    }
}