<?php
/**
 * Created by PhpStorm.
 * User: hong1234
 * Date: 04.11.16
 * Time: 16:36
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StoreManagerController extends Controller
{
    /**
     * @Route("/store_manager", name="store_manager")
     */
    public function indexAction()
    {
        return $this->render(
            'AppBundle:default:store_manager.html.twig'
        );
    }
}