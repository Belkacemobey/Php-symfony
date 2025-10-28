<?php

namespace App\Controller;

use App\Entity\Job;
use App\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class JobController extends AbstractController
{
    #[Route('/job', name: 'app_job')]
    public function index(EntityManagerInterface $entityManager): Response
    {   
        $job = new Job();
        $job->setType('Scrum Master');
        $job->setCompany('Sotoripop');
        $job->setDescription('Fullstack JS');
        $job->setExpiresAt(new \DateTimeImmutable());
        $job->setEmail('haykel.chouchane@gmail.com');

        $image = new Image();
        $image->setUrl('https://cdn.pixabay.com/photo/2015/10/30/10/03/gold-1013618_960_720.jpg');
        $image->setAlt('Job de rêves');

        $job->setImage($image);

        // Cascade persist gère automatiquement l'image
        $entityManager->persist($job);
        $entityManager->flush();

        return $this->render('job/index.html.twig', [
            'id' => $job->getId(),
        ]);
    }

    #[Route('/job/{id}', name: 'job_show')]
    public function show(EntityManagerInterface $entityManager, $id): Response
    {
        $job = $entityManager->getRepository(Job::class)->find($id);

        return $this->render('job/show.html.twig', [
            'job' => $job
        ]);
    }
}
