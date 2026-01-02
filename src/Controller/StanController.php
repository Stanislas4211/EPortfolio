<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;

final class StanController extends AbstractController
{
    // Pages -->

    #[Route('/', name: 'app_stan')]
    public function index(): Response
    {
        return $this->render('stan/index.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('stan/cv.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }
    
    #[Route('/contacte', name: 'app_contacte')]
    public function contacte(): Response
    {
        return $this->render('stan/contacte.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }

    #[Route('/Administrer', name: 'app_administrer')]
    public function administrer(): Response
    {
        return $this->render('competence/administrer/administrer.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }

    #[Route('/Programmer', name: 'app_programmer')]
    public function programmer(): Response
    {
        return $this->render('competence/programmer/programmer.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }

    #[Route('/Connecter', name: 'app_connecter')]
    public function connecter(): Response
    {
        return $this->render('competence/connecter/connecter.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }

    #[Route('/moi', name: 'app_moi')]
    public function moi(): Response
    {
        return $this->render('stan/moi.html.twig', [
            'controller_name' => 'StanController',
        ]);
    }



    
    // Téléchargement de AC11 -->

    #[Route('/download/AC11.01', name: 'download_AC11.01')]
    public function download1101(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC11.01.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC11.01.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC11.02', name: 'download_AC11.02')]
    public function download1102(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC11.02.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC11.02.pdf' // nom du fichier téléchargé
        );

        return $response;
    }
    
    #[Route('/download/AC11.03', name: 'download_AC11.03')]
    public function downloadAC1103(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC11.03.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC11.03.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC11.04', name: 'download_AC11.04')]
    public function download1104(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC11.04.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC11.04.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC11.05', name: 'download_AC11.05')]
    public function download1105(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC11.05.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC11.05.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC11.06', name: 'download_AC11.06')]
    public function download1106(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC11.06.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC11.06.pdf' // nom du fichier téléchargé
        );

        return $response;
    }




    // Téléchargement de AC12 -->

    #[Route('/download/AC12.01', name: 'download_AC12.01')]
    public function download1201(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC12.01.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC12.01.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC12.02', name: 'download_AC12.02')]
    public function download1202(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC12.02.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC12.02.pdf' // nom du fichier téléchargé
        );

        return $response;
    }
    
    #[Route('/download/AC12.03', name: 'download_AC12.03')]
    public function downloadAC1203(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC12.03.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC12.03.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC12.04', name: 'download_AC12.04')]
    public function download1204(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC12.04.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC12.04.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC12.05', name: 'download_AC12.05')]
    public function download1205(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC12.05.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC12.05.pdf' // nom du fichier téléchargé
        );

        return $response;
    }




    // Téléchargement de AC13 --> 

    #[Route('/download/AC13.01', name: 'download_AC13.01')]
    public function download1301(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC13.01.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC13.01.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC13.02', name: 'download_AC13.02')]
    public function download1302(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC13.02.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC13.02.pdf' // nom du fichier téléchargé
        );

        return $response;
    }
    
    #[Route('/download/AC13.03', name: 'download_AC13.03')]
    public function downloadAC1303(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC13.03.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC13.03.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC13.04', name: 'download_AC13.04')]
    public function download1304(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC13.04.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC13.04.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC13.05', name: 'download_AC13.05')]
    public function download1305(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC13.05.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC13.05.pdf' // nom du fichier téléchargé
        );

        return $response;
    }

    #[Route('/download/AC13.06', name: 'download_AC13.06')]
    public function download1306(): BinaryFileResponse
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/AC13.06.pdf';

        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'AC13.06.pdf' // nom du fichier téléchargé
        );

        return $response;
    }




    //Téléchargement CV

     #[Route('/cv/register', name: 'cv_register')]
    public function cvRegister(): Response
    {
        return $this->render('cv_download/register.html.twig');
    }

    #[Route('/cv/download-pdf', name: 'download_cv_pdf', methods: ['POST'])]
    public function downloadCvPdf(Request $request): Response
    {
        if (!$this->validateCvForm($request)) {
            return $this->redirectToRoute('cv_register');
        }

        $pdfPath = $this->getParameter('kernel.project_dir') . '/public/cv.pdf';

        if (!file_exists($pdfPath)) {
            throw $this->createNotFoundException('Le fichier CV PDF n\'a pas été trouvé.');
        }

        $firstname = $request->request->get('firstname', 'User');
        $lastname = $request->request->get('lastname', '');

        // Helper Symfony pour envoyer un fichier en téléchargement
        return $this->file(
            $pdfPath,
            'CV_' . $firstname . '_' . $lastname . '.pdf',
            ResponseHeaderBag::DISPOSITION_ATTACHMENT
        );
    }

    private function validateCvForm(Request $request): bool
    {
        $firstname = $request->request->get('firstname', '');
        $lastname = $request->request->get('lastname', '');
        $email = $request->request->get('email', '');

        return !empty($firstname)
            && !empty($lastname)
            && !empty($email)
            && filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
