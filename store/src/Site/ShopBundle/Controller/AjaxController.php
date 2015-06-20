<?php

namespace Site\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;

class AjaxController extends Controller
{
    public function indexAction()
    {
        $sess = $this->get('session');
        //$sess->clear();
        $sess->start();
        $request = Request::createFromGlobals();
        $id=$request->get('id');
        $cart = $sess->get('cart');

        if(!isset($cart[$id]))
        {
            $cart[$id]=1;
        }
        else
        {
            $arr=array();
            if($cart[$id])
            {
                foreach($cart as $key=>$value)
                {
                    $arr[]=$key;
                }
                if(in_array($id ,$arr))
                {
                    $cart[$id]+=1;
                }
                else
                {
                    $cart[$id]=1;
                }

            }

        }
      //  var_dump($_SESSION);
       $sess->set('cart',$cart);
       // var_dump($sess->get('cart'));
        return new JsonResponse(
            [
                'error' => false,
                'message' => 'Товар успешно добавлен в корзину!'
            ]);
    }

    public function viewFilterAction()
    {

        $request = Request::createFromGlobals();
        $ids=$request->get('ids');
        $slug =$request->get('slug');
        //$sl
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository('BundlesStoreBundle:Category');
        $category=$repo->findOneBySlug($slug);
        $repo=$em->getRepository('BundlesStoreBundle:Product');
        $filtr=$repo->filterBrend($category,$ids);
        $html=$this->prepareHtml($filtr);

       // var_dump($name);

       if(!$ids)
        {
            return new JsonResponse(
                [
                    'error' => true,
                    'message' => '111'

                ]);
        }
        return new JsonResponse(
            [
                'prod' =>$html,
                'error' => false,
                'message' => 'Товар успешно добавлен в корзину!'
            ]);
    }

    public function prepareHtml($prod)
    {

        $name = array();
        $str="<br><h1>Продукты</h1>";
        foreach($prod as $key=>$value)
        {
            $str.=  "<a href='#'>".$value->getTitle()."</a>
            <br>Производители:".$value->getBrend()."<hr>";
        }
        return $str;

    }


}
