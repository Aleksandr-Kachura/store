<?php

namespace Site\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Bundles\StoreBundle\Entity\Orders;
use Bundles\StoreBundle\Entity\ProdtoOrder;
use Bundles\StoreBundle\Entity\Product;
use Bundles\StoreBundle\Entity\ValParam;
use Bundles\StoreBundle\Form\ProductType;

class OrderController extends Controller
{
    public function indexAction()
    {

        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('BundlesStoreBundle:Orders');
        $orders=$repo->findBy(['userId'=>1]);
       // dump($product);
        foreach($orders as $key=>$value)
        {
            $id=$value->getId();
            $ord[$id]=$value->getProdtorder();
        }
       // $ids=array(8,9);
       $data=$this->prepareData($ord);

        //dump($category);
        if (!$ord) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        }
        return $this->render('SiteShopBundle:Page:order.html.twig',array('ord' => $data));
    }

    public function prepareData($order)
    {
        //$data = array();

        foreach($order as $key=>$value)
        {
            //$data[][$key]=$key;
            $price =0;
            $quntity =0;
            foreach($value as $key1=>$val)
            {
                if($key==$val->getOrderId())
                {
                    $price=$price+$val->getPrice()*$val->getQuantity();
                   $quntity=$quntity+$val->getQuantity();
                    $data[$key]['price'] =$price;
                    $data[$key]['quantity']=$quntity;
                }

            }
        }

        return $data;
    }

    public function viewDetailAction()
    {

        $req=$this->getRequest(); //объект реквест
        $id = $req->get('id');

        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('BundlesStoreBundle:ProdtoOrder');
        $detail=$repo->findByOrderId($id);


        foreach($detail as $key=>$value)
        {
            $data[$key]['price']=$value->getPrice();
            $data[$key]['quantity']=$value->getQuantity();

            $repo=$em->getRepository('BundlesStoreBundle:product');
            $product=$repo->findOneById($value->getProductId());

            $data[$key]['title']=$product->getTitle();
            $data[$key]['discription']=$product->getDescription();
            $data[$key]['id']=$product->getId();

        }
        //$products=$detail->getTitle();
      //  dump($data);


        if (!$detail) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        }
       return $this->render('SiteShopBundle:Page:detailOrder.html.twig',array('products'=>$data));
    }

    public function createProductAction()
    {
        $req=$this->getRequest(); //объект реквест
        $slug=$req->get('slug');
        if(isset($slug))
        {
            $em = $this->getDoctrine()
                ->getManager();
            $repo=$em->getRepository('BundlesStoreBundle:Category');
            if($slug)
            {
                $category=$repo->findOneBySlug($req->get('slug'));
                $params=$category->getParam();
            }


            $product=new Product();
            $form   = $this->createForm(new ProductType(),  $product);
            //   $form->submit($req);
            /*  if ($form->isValid()) {


                    $em->persist($product);
                    $em->flush();
                  return $this->indexAction();
                  /*$Repo=$this->get('site.repository.order'); // обращение к сервису
                  $Repo->create($product);*/

            /*  }*/

            return $this->render('SiteShopBundle:Page:createProduct.html.twig',array('form' => $form->createView(),'params'=>$params,'slug'=>$slug));
        }
        else
        {
            return $this->render('SiteShopBundle:Page:createProduct.html.twig',array('message' =>'Товар создан'));
        }

    }
    public function saveProductAction()
    {
        $req=$this->getRequest(); //объект реквест
        $slug=$req->get('slug');
        $param=$req->get('params');
        $hero=$req->get('hero');
       // dump($slug);
        /*dump($param);
        dump($val);*/



        $em = $this->getDoctrine()
            ->getManager();
        $repo=$em->getRepository('BundlesStoreBundle:Category');
        $po=$em->getRepository('BundlesStoreBundle:Parametrs');
        $category=$repo->findOneBySlug($req->get('slug'));
        $id=$category->getId();
        $product=new Product();


        $form   = $this->createForm(new ProductType(),  $product);
        $form->submit($req);
       if ($form->isValid()) {
           $product->setCategory($category);
           $em->persist($product);
           $em->flush();
        }
       // $productid = $product->getId();
        foreach($param as $key=>$value)
        {
            $val=new ValParam();
            $val->setValue($hero[$key]);
            $param=$po->findOneById($value);
           // $paramId=1;
            //$val->setParamId(1);
           // $val->setParametrs($param);
            $val->setParametrs(1);
            $val->setProduct($product);
            $em->persist($val);
            $em->flush();


        }
       return $this->createProductAction();
      //  dump($product->getId());


    }
}