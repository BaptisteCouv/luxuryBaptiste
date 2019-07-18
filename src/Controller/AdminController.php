<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Client;
use App\Entity\JobOffer;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        
        $showUsers = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();
        $showClients = $this->getDoctrine()
            ->getRepository(client::class)
            ->findAll();
        $showJobOffers = $this->getDoctrine()
            ->getRepository(JobOffer::class)
            ->findAll();
        


        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'showUsers'=> $showUsers,
            'showClients' => $showClients,
            'showJobOffers' => $showJobOffers,
        ]);
    }
}
