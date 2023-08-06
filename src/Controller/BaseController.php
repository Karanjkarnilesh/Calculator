<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;


class BaseController extends AbstractController
{
    private $session;
    public function __construct()
    {
       
    }
    #[Route('/base', name: 'app_base')]
    public function index(): Response
    {
        return $this->render('Calculator/calculator.html.twig');
    }

    #[Route('/login', name: 'app_login')]
    public function login(Request $request,Session $session): Response
    {
        if ($request->request->all()) {
            $email = $request->request->get('email');
            $password = $request->request->get('password');   
           $session->set('user',array(
            'id'=>1,
            'name'=>'nilesh'
           ));
            return $this->render('Calculator/calculator.html.twig');
        }

     
        return $this->render('Calculator/login.html.twig');
    }
}
