<?php

namespace Site\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Bundles\StoreBundle\Entity\Orders;
use Bundles\StoreBundle\Entity\ProdtoOrder;

class PageController extends Controller
{
    public function indexAction()
    {

        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('BundlesStoreBundle:Category');
        $id=null;
        $category=$repo->findBy(['parentId'=>$id]);
        if (!$category) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        }
        return $this->render('SiteShopBundle:Page:index.html.twig',array('category' => $category));
    }
    public function viewCatAction($slug=null,$product=null)
    {
        $req=$this->getRequest(); //объект реквест
        if(!$slug)
        {
            $slug = $req->get('slug');
        }

        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('BundlesStoreBundle:Category');
        $category=$repo->findOneBySlug($slug);
        if(!$product)
        {
            $product=$category->getProduct();
        }

       /* $brends=array(2);
        $repo=$em->getRepository('BundlesStoreBundle:Product');
        $filtr=$repo->filterBrend($category,$brends);*/
        $serv = $this->get('site_bundle.service');
        $param=$serv->getParam($category);
       /* $repo=$em->getRepository('BundlesStoreBundle:ValParam');
        $param=$category->getParam();


            foreach($param as $key=>$value)
            {
                $id=$value->getId();
                $par[$value->getName()]=$repo->getParam($id);
                // dump($value->getValparam()->getValues());
            }*/
           // dump($par);



        if (!$category) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        }
        return $this->render('SiteShopBundle:Page:cat.html.twig',array('category' => $category,'prod'=>$product,'slug'=>$slug,'param'=>$param ));
    }
    public function viewProdAction()
    {
        $req=$this->getRequest(); //объект реквест
        $id = $req->get('id');
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('BundlesStoreBundle:Product');
        $product=$repo->findOneById($id);

        if (!$product) {
            throw $this->createNotFoundException('Запрашиваемая страница перемещена или удалена!');
        }

        return $this->render('SiteShopBundle:Page:product.html.twig',array('prod'=>$product));
    }
    public function showCartAction()
    {
        $sess = $this->get('session');
        $cart = $sess->get('cart');
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('BundlesStoreBundle:Product');
        //dump($cart);
        $quantity=array();
        $products=array();
        if($cart)
        {
            foreach($cart as $key=>$value)
            {
                $products[]=$repo->findOneById($key);
                $quantity[]=$value;
            }
        }

      // dump($products);

        return $this->render('SiteShopBundle:Page:showcarts.html.twig',array('prods'=>$products,'quant'=>$quantity));
    }

    public function itemReturnAction($item=null,$price=null)
    {
        $sess = $this->get('session');
        $cart = $sess->get('cart');
        $item_count=0;
        $price_count=0;
        $param = 0;
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('BundlesStoreBundle:Product');
        //dump($cart);
        if($cart)
        {
            foreach($cart as $key=>$value)
            {
                if(isset($item))
                {
                    $item_count= $item_count+$value;
                }
                if($price)
                {
                    $product=$repo->findOneById($key);
                    $price_count+=$product->getPrice()*$value;
                }

            }
            if(isset($item))
            {
                $param=$item_count;
            }
            else
            {

                $param=$price_count;
            }
        }

        $var = new Response($param);
        return $var;
    }

    public function itemDeleteAction()
    {
        $req=$this->getRequest(); //объект реквест
        $id = $req->get('id');
        $sess = $this->get('session');
        $cart = $sess->get('cart');
        $arr=array();
        foreach($cart as $key=>$value)
        {
            $arr[]=$key;
        }
        if(in_array($id ,$arr))
        {
            unset($cart[$id]);
        }
        $sess->set('cart',$cart);
       //return new RedirectResponse($this->generateUrl('site_shop_show_cart'));
        return $this-> showCartAction();
    }

    public function doneOrderAction()
    {
        $sess = $this->get('session');
        $cart = $sess->get('cart');

        if($cart)
        {
            //  $repo->setUserId($userId);
            $em=$this->getDoctrine()->getManager();
            $repo=$em->getRepository('BundlesStoreBundle:User');
            $user=$repo->findOneById(1);
            $orders = new Orders();
            $orders->setUser($user);
            $em->persist($orders);
            $em->flush();
            $or=$em->getRepository('BundlesStoreBundle:Orders');
            $order=$or->findOneById( $orders->getId());
            $prod=$em->getRepository('BundlesStoreBundle:Product');

            foreach($cart as $key=>$value)
            {
                $prodtoorder=new ProdtoOrder();
                $product=$prod->findOneById($key);
                $prodtoorder->setProduct($product);
                $prodtoorder->setOrders($order);
                $prodtoorder->setPrice($product->getPrice());
                $prodtoorder->setQuantity($value);
                $em->persist($prodtoorder);
                $em->flush();
            }

            $sess->set('cart',null);
         // return new RedirectResponse($this->generateUrl('site_shop_show_cart'));
            return $this-> showCartAction();
                // $repo->setDate($now);
          //return $this-> showCartAction();

        }

       // return new RedirectResponse($this->generateUrl('site_shop_show_cart'));
        return $this-> showCartAction();
    }
    public function doneFiltrAction()
    {
        $req=$this->getRequest();
        $arr=$req->get('param');
        $slug=$req->get('slug');
        if($arr==null)
        {
            return $this->viewCatAction($slug);
        }

        $em=$this->getDoctrine()->getManager();
        foreach($arr as $key => $value)
        {
          $array[]=$value;
        }
        dump($array);
        $repo=$em->getRepository('BundlesStoreBundle:Category');
        $category=$repo->findOneBySlug($slug);
        $prod=$category->getProduct();


        foreach($prod as $key=>$val)
        {
           $parr=$val->getValparam()->getValues();
           dump($parr);
           $count=0;
            dump($parr);
           foreach($parr as $k=>$v)
           {
               if(in_array($v->getValue(),$array[$k]))
               {
                   $count=$count+1;
               }

           }
           if($count==count($array))
           {
               $product1[]=$val;
           }
        }
        /*if(isset($product1))
        {
            dump($product1);
        }*/
        if(!isset($product1))
        {
            return $this->viewCatAction($slug,1);
        }

     // return $this->viewCatAction($slug,$product1);

    }
}
