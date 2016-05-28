<?php

namespace msmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\PathPackage;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Asset\Packages;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use msmBundle\Entity\seminars;

class webinarController extends Controller
{
    public function listwebinarAction(Request $request)
    {
	$repository = $this->getDoctrine()->getRepository('msmBundle:seminars');
	$webinars = $repository->findAll();
	$user = $this->getUser();
	
	return $this->render('msmBundle:webinar:listwebinar.html.twig', array( 'webinars' => $webinars, 'user' => $user ));
    }

    public function createwebinarAction(Request $request)
    {
	$defaults = array( 'seminarTime' => new \DateTime('now') );
	$user = $this->getUser();
	
	$form = $this->createFormBuilder($defaults)
	    ->add('seminarName', 'text', array( 'constraints' => new NotBlank(), ))
	    ->add('seminarTime', 'datetime', array( 'constraints' => array( new NotBlank(), new Type('\DateTime'), ) ))
	    ->add('seminarDescription', 'textarea', array( 'constraints' => new NotBlank(), ))
	    ->add('seminarVideo', 'text', array( 'constraints' => new NotBlank(), ))
	    ->add('seminarHost', 'text', array( 'constraints' => new NotBlank(), ))
	    ->getForm();
	
	$form->handleRequest($request);

	if ($form->isValid()) {
	    $data = $form->getData();
	    
	    //first save to database
	    
	    $msmwebinar = new seminars();
	    $number = $user->getId();
	    $userid = str_pad($number,4,"0",STR_PAD_LEFT);
	    $msmwebinar->setseminarName($userid.','.$data['seminarName']);
	    $msmwebinar->setseminarDescription($data['seminarDescription']);
	    $msmwebinar->setseminarTime($data['seminarTime']);
	    $msmwebinar->setseminarVideo($data['seminarVideo']);
	    $msmwebinar->setseminarHost($data['seminarHost']);
	    $msmwebinarp = $this->getDoctrine()->getManager();
	    $msmwebinarp->persist($msmwebinar);
	    $msmwebinarp->flush();
	    
	    //then redirect
	    
	    return $this->redirectToRoute('listwebinar');
	}
	
	return $this->render('msmBundle:webinar:createwebinar.html.twig', [ 'form' => $form->createView(), 'user' => $user ]);
    }

    public function viewwebinarAction($id)
    {
	$repository = $this->getDoctrine()->getRepository('msmBundle:seminars');
	$webinar = $repository->find($id);
	$user = $this->getUser();
	
	return $this->render('msmBundle:webinar:viewwebinar.html.twig', array( 'webinar' => $webinar, 'user' => $user ));
    }
}
