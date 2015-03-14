<?php

namespace CDS\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

	public function indexAction()
	{
		return $this->render('CDSApiBundle:Main:index.html.twig');
	}
}
