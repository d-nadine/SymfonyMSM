<?php

namespace msmBundle\Controller;
//namespace FOS\UserBundle\Controller;
//namespace Symfony\Component\EventDispatcher

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


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
use OpenTok\OpenTok;
use OpenTok\MediaMode;
use OpenTok\ArchiveMode;
use OpenTok\Session;
use OpenTok\Role;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use msmBundle\Entity\sessions;
use msmBundle\Entity\Archives;

class msmSessionController extends Controller
{
    public function createSessionAction($apiKey, $apiSecret, Request $request)
    {
	$opentok = new OpenTok($apiKey, $apiSecret);
	$session = $opentok->createSession(array( 'mediaMode' => MediaMode::ROUTED ));
	$sessionid = $session->getSessionId();
	$user = $this->getUser();
	
	// create form for sessionid
	$defaults = array( 'SessionDate' => new \DateTime('tomorrow'), 'SessionName' => "Short and descriptive");
	$form = $this->createFormBuilder($defaults)
	    ->add('SessionName', 'text', array( 'constraints' => new NotBlank(), ))
	    ->add('SessionDate', 'datetime', array( 'constraints' => array( new NotBlank(), new Type('\DateTime'), ) ))
	    ->add('sessionid', 'hidden', ['data' => $sessionid,])
	    ->getForm();
	
	$form->handleRequest($request);
	
	if ($form->isValid()) {
	    $data = $form->getData();
	    
	    //first save to database
	    $msmsession = new sessions();
	    $msmsession->setSessionid($sessionid);
	    $number = $user->getId();
	    $userid = str_pad($number,4,"0",STR_PAD_LEFT);
	    $beta = 0;
	    $msmsession->setsessionName($userid.','.$beta.','.$data['SessionName']);
	    $msmsession->setsessionDate($data['SessionDate']);
	    $msmsessionp = $this->getDoctrine()->getManager();
	    $msmsessionp->persist($msmsession);
	    $msmsessionp->flush();
	    
	    //then redirect
	    return $this->redirectToRoute('list_sessions_admin');
	}
	
	return $this->render('msmBundle:msmSession:createSession.html.twig', [
	    'form' => $form->createView(),
	    'sessionid' => $sessionid,
	    'user' => $user,
	]);
    }

    public function createBetaSessionAction($apiKey, $apiSecret, Request $request)
    {
	$opentok = new OpenTok($apiKey, $apiSecret);
	$session = $opentok->createSession(array( 'mediaMode' => MediaMode::ROUTED ));
	$sessionid = $session->getSessionId();
	$user = $this->getUser();
	
	// create form for sessionid
	$defaults = array( 'SessionDate' => new \DateTime('tomorrow'), 'SessionName' => "Short and descriptive");
	$form = $this->createFormBuilder($defaults)
	    ->add('SessionName', 'text', array( 'constraints' => new NotBlank(), ))
	    ->add('SessionDate', 'datetime', array( 'constraints' => array( new NotBlank(), new Type('\DateTime'), ) ))
	    ->add('sessionid', 'hidden', ['data' => $sessionid,])
	    ->getForm();
	
	$form->handleRequest($request);
	
	if ($form->isValid()) {
	    $data = $form->getData();
	    
	    //first save to database
	    $msmsession = new sessions();
	    $msmsession->setSessionid($sessionid);
	    $number = $user->getId();
	    $userid = str_pad($number,4,"0",STR_PAD_LEFT);
	    $beta = 1;
	    $msmsession->setsessionName($userid.','.$beta.','.$data['SessionName']);
	    $msmsession->setsessionDate($data['SessionDate']);
	    $msmsessionp = $this->getDoctrine()->getManager();
	    $msmsessionp->persist($msmsession);
	    $msmsessionp->flush();
	    
	    //then redirect
	    return $this->redirectToRoute('list_sessions_admin');
	}
	
	return $this->render('msmBundle:msmSession:createSession.html.twig', [
	    'form' => $form->createView(),
	    'sessionid' => $sessionid,
	    'user' => $user,
	]);
    }

    public function listSessionsAdminAction()
    {
	$repository = $this->getDoctrine()
	    ->getRepository('msmBundle:sessions');
	$sessions = $repository->findAll();
	$user = $this->getUser();
	
	return $this->render('msmBundle:msmSession:listSessionsAdmin.html.twig', array( 'sessions' => $sessions, 'user' => $user ));
    }

    public function listSessionsAction()
    {
	$repository = $this->getDoctrine()
	    ->getRepository('msmBundle:sessions');
	$sessions = $repository->findAll();
	$user = $this->getUser();
	
	return $this->render('msmBundle:msmSession:listSessions.html.twig', array( 'sessions' => $sessions, 'user' => $user ));
    }

    public function listUsersAction()
    {
	$repository = $this->getDoctrine()
	    ->getRepository('msmBundle:User');
	$users = $repository->findAll();
	$user = $this->getUser();
	
	return $this->render('msmBundle:msmSession:listUsers.html.twig', array( 'users' => $users, 'user' => $user ));
    }

    public function listFilesAction()
    {
	
	if(isset($_FILES["addnetwork_key"])){
	$target_dir = "upload/";
	$target_file = $target_dir . basename($_FILES["addnetwork_key"]["name"]);
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$msg = '';
	
	// Check if file already exists
	if (file_exists($target_file)) {
	    $msg = "Sorry, file already exists.";
	}
	// Check file size
	else if ($_FILES["addnetwork_key"]["size"] > 5000000) {
	    $msg = "Sorry, your file is too large.";
	}
	// Allow certain file formats
	else if($fileType != "mp4") {
	    $msg = "Current Filetype is ".$fileType.". Sorry, only MP4 files are allowed.";
	}
	// Check if $uploadOk is set to 0 by an error
	if ($msg == '') {
	    if (move_uploaded_file($_FILES["addnetwork_key"]["tmp_name"], $target_file)) {
	        $msg = "The file ". basename( $_FILES["addnetwork_key"]["name"]). " has been uploaded.";
	    } else {
	        $msg = "Sorry, there was an error uploading your file.";
	    }
	}
	}
	//    move_uploaded_file($_FILES["addnetwork_key"]["tmp_name"], 'upload/'.$_FILES["addnetwork_key"]["name"]);
	
	$dir = 'upload';
	$files = array();
	if (is_dir($dir)) {
	    if ($dh = opendir($dir)) {
	        while (($file = readdir($dh)) !== false) {
		    if($file == ".." || $file == ".") continue;
		    array_push($files, $file);//filetype : filetype($dir . $file)
		}
	    closedir($dh);
	    }
	}
	$user = $this->getUser();
	
	return $this->render('msmBundle:msmSession:listFiles.html.twig', array( 'files' => $files, 'msg' => $msg, 'user' => $user ));
    }

    public function uploadPhotoAction()
    {
	$user = $this->getUser();
	
	if(isset($_FILES["addnetwork_key"])){
	$target_dir = "upload/photos/";
	$target_file = $target_dir . $user->getUsername() . '.png';
	$fileType = pathinfo($target_dir . $_FILES["addnetwork_key"]["name"],PATHINFO_EXTENSION);
	$msg = '';
	
	// Check if file already exists
	if (file_exists($target_file)) {
	    //$msg = "Sorry, file already exists.";
	}
	// Check file size
	else if ($_FILES["addnetwork_key"]["size"] > 5000000) {
	    $msg = "Sorry, your file is too large.";
	}
	// Allow certain file formats
	else if($fileType != "png") {
	    $msg = "Current Filetype is ".$fileType.". Sorry, only PNG files are allowed.";
	}
	// Check if $uploadOk is set to 0 by an error
	if ($msg == '') {
	    if (move_uploaded_file($_FILES["addnetwork_key"]["tmp_name"], $target_file)) {
	        $msg = "The file ". basename( $_FILES["addnetwork_key"]["name"]). " has been uploaded.";
	    } else {
	        $msg = "Sorry, there was an error uploading your file.";
	    }
	}
	}//$msg = $target_file;
	
	//return $this->redirectToRoute('profile');
	//return $this->render('msmBundle:msmSession:listFiles.html.twig', array( 'files' => $files, 'msg' => $msg, 'user' => $user ));
	return $this->render('FOSUserBundle:Profile:show.html.twig', array( 'msg' => $msg, 'user' => $user ));
    }

    public function msmSessionAction()
    {
	$user = $this->getUser();
	return $this->render('msmBundle:msmSession:msmSession.html.twig', array( 'user' => $user
	    // ...
	));
    }


    public function adminTokenAction($apiKey, $apiSecret, $name, $id, Request $request)
    {
	$repository = $this->getDoctrine()
	    ->getRepository('msmBundle:sessions');
	$session = $repository->find($id);
	$sessionid = $session->getsessionid();
	$user = $this->getUser();
	
	$opentok = new OpenTok($apiKey, $apiSecret);
	$token = $opentok->generateToken($sessionid, array(
	    'role'	 => Role::MODERATOR,
	    'expireTime' => time()+(7 * 24 * 60 * 60), // in one week
	    'data'	 => 'name=Host'
	));
	
	return $this->render('msmBundle:msmSession:adminToken.html.twig', array(
	    'token'	=> $token,
	    'sessionid'	=> $sessionid,
	    'apikey'	=> $apiKey,
	    'name'	=> $name,
	    'id'	=> $id,
	    'user'	=> $user,
	    'beta'	=> 0,
	));
    }

    public function adminTokenBetaAction($apiKey, $apiSecret, $name, $id, Request $request)
    {
	$repository = $this->getDoctrine()
	    ->getRepository('msmBundle:sessions');
	$session = $repository->find($id);
	$sessionid = $session->getsessionid();
	$user = $this->getUser();
	
	$opentok = new OpenTok($apiKey, $apiSecret);
	$token = $opentok->generateToken($sessionid, array(
	    'role'	 => Role::MODERATOR,
	    'expireTime' => time()+(7 * 24 * 60 * 60), // in one week
	    'data'	 => 'name=Host'
	));
	
	return $this->render('msmBundle:msmSession:adminToken.html.twig', array(
	    'token'	=> $token,
	    'sessionid'	=> $sessionid,
	    'apikey'	=> $apiKey,
	    'name'	=> $name,
	    'id'	=> $id,
	    'user'	=> $user,
	    'beta'	=> 1,
	));
    }

    public function createTokenAction($apiKey, $apiSecret, $name, $id, Request $request)
    {
	$user = $this->getUser();
	$repository = $this->getDoctrine()
	    ->getRepository('msmBundle:sessions');
	$session = $repository->find($id);
	$sessionid = $session->getsessionid();
	
	$opentok = new OpenTok($apiKey, $apiSecret);
	$token = $opentok->generateToken($sessionid, array(
	    'role'	 => Role::SUBSCRIBER,
	    'expireTime' => time()+(7 * 24 * 60 * 60), // in one week
	    'data'	 => 'name=Viewer'
	));
	
	return $this->render('msmBundle:msmSession:createToken.html.twig', array(
	    'token'	=> $token,
	    'sessionid'	=> $sessionid,
	    'apikey'	=> $apiKey,
	    'name'	=> $name,
	    'user'	=> $user
	));
    }

    public function createPublisherTokenAction($apiKey, $apiSecret, $name, $id, Request $request)
    {
	$user = $this->getUser();
	$repository = $this->getDoctrine()
	    ->getRepository('msmBundle:sessions');
	$session = $repository->find($id);
	$sessionid = $session->getsessionid();
	
	$opentok = new OpenTok($apiKey, $apiSecret);
	$token = $opentok->generateToken($sessionid, array(
	    'role'	 => Role::PUBLISHER,
	    'expireTime' => time()+(7 * 24 * 60 * 60), // in one week
	    'data'	 => 'name=Guest'
	));
	
	return $this->render('msmBundle:msmSession:adminToken.html.twig', array(
	    'token'	=> $token,
	    'sessionid'	=> $sessionid,
	    'apikey'	=> $apiKey,
	    'name'	=> $name,
	    'user'	=> $user
	));
    }

    public function iosTokenAction($apiKey, $apiSecret, $name, $id, Request $request)
    {
	$user = $this->getUser();
	$repository = $this->getDoctrine()
	    ->getRepository('msmBundle:sessions');
	$session = $repository->find($id);
	$sessionid = $session->getsessionid();
	
	$opentok = new OpenTok($apiKey, $apiSecret);
	$token = $opentok->generateToken($sessionid, array(
	    'role'       => Role::SUBSCRIBER,
	    'expireTime' => time()+(7 * 24 * 60 * 60), // in one week
	    'data'       => 'name=Johnny'
	));
	
	return $this->render('msmBundle:msmSession:iosToken.html.twig', array(
	    'token' => $token,
	    'sessionid' => $sessionid,
	    'apikey' => $apiKey,
	    'name' => $name,
	    'user' => $user
	));
    }

    public function AiosTokenAction($apiKey, $apiSecret, $name, $id, Request $request)
    {
	$user = $this->getUser();
	$repository = $this->getDoctrine()
	    ->getRepository('msmBundle:sessions');
	$session = $repository->find($id);
	$sessionid = $session->getsessionid();
	
	$opentok = new OpenTok($apiKey, $apiSecret);
	$token = $opentok->generateToken($sessionid, array(
	    'role'	 => Role::MODERATOR,
	    'expireTime' => time()+(7 * 24 * 60 * 60), // in one week
	    'data'	 => 'name=Guest'
	));
	
	return $this->render('msmBundle:msmSession:AiosToken.html.twig', array(
	    'token' => $token,
	    'sessionid' => $sessionid,
	    'apikey' => $apiKey,
	    'name' => $name,
	    'user' => $user
	));
    }

/*    public function deleteSessionAction()
    {
	$em = $this->getDoctrine()->getManager();
	$session = $em->getRepository('msmBundle:sessions')->find($id);
	
	if ($session) {
	    throw $this->createNotFoundException('No session found for id '.$id);
	}
	
	$em->remove($session);
	$em->flush();
	return $this->render('msmBundle:msmSession:deleteSession.html.twig', array(
	    // ...
	));
    }*/

    public function deleteSessionAction($id, Request $request)
    {
	$em = $this->getDoctrine()->getManager();
	$session = $em->getRepository('msmBundle:sessions')->find($id);
	if (!$session) {
	    throw $this->createNotFoundException( 'No session found for id ' . $id );
	}
	
	$form = $this->createFormBuilder($session)
	    ->add('sessionName', 'text')
	    ->add('sessionDate', 'datetime')
	    ->add('delete', 'submit')
	    ->getForm();
	
	$form->handleRequest($request);
	$em->remove($session);
	$em->flush();
	
	if ($form->isValid()) {
	    //$em->remove($session);
	    //$em->flush();
	    return new Response('Session deleted successfully');
	}
	
	$build['form'] = $form->createView();
	return $this->render('msmBundle:msmSession:deleteSession.html.twig', $build);
    }

    public function updateSessionAction($id, Request $request)
    {
	$em = $this->getDoctrine()->getManager();
	$session = $em->getRepository('msmBundle:sessions')->find($id);
	if (!$session) {
	    throw $this->createNotFoundException( 'No session found for id ' . $id );
	}
	
	$form = $this->createFormBuilder($session)
	    ->add('sessionName', 'text')
	    ->add('sessionDate', 'datetime')
	    ->add('save', 'submit')
	    ->getForm();
	
	$form->handleRequest($request);
	if ($form->isValid()) {
	    $em->flush();
	    return new Response('Session updated successfully');
	}
	
	$build['form'] = $form->createView();
	$build['id'] = $id;
	return $this->render('msmBundle:msmSession:updateSession.html.twig', $build);
    }

    public function createArchiveAction($apiKey, $apiSecret, $id, Request $request)
    {
	$repository = $this->getDoctrine()
	    ->getRepository('msmBundle:sessions');
	$session = $repository->find($id);
	$sessionid = $session->getsessionid();
	$sessionname = $session->getsessionname();
	$user = $this->getUser();
	
	$opentok = new OpenTok($apiKey, $apiSecret);
	$archiveOptions = array(
	    'name' => $sessionname,     // default: null
	    'hasAudio' => true,         // default: true
	    'hasVideo' => true,         // default: true
	);
	$archive = $opentok->startArchive($sessionid, $archiveOptions);
	
	// Store this archiveId in the database for later use
	$archiveid = $archive->id;
	$archivename = $archive->name;
	$archivedate = new \DateTime();
	$archivesessionid = $archive->sessionId;
	
	$msmarchives = new Archives();
	$msmarchives->setsessionid($archivesessionid);
	$msmarchives->setarchiveid($archiveid);
	$number = $user->getId();
	$userid = str_pad($number,4,"0",STR_PAD_LEFT);
	$msmarchives->setname($userid.','.$archivename);
	$msmarchives->setdate($archivedate);
	$msmarchivesp = $this->getDoctrine()->getManager();
	$msmarchivesp->persist($msmarchives);
	$msmarchivesp->flush();
	
	return new Response($archiveid);
    }

/*    public function listArchivesAction($apiKey, $apiSecret, $id, Request $request)
    {
	$repository = $this->getDoctrine()->getRepository('msmBundle:sessions');
	$session = $repository->find($id);
	$sessionid = $session->getsessionid();
	
	$repository = $this->getDoctrine()->getRepository('msmBundle:Archives');
	$archives = $repository->findBysessionid($sessionid);
	
	return $this->render('msmBundle:msmSession:listArchives.html.twig', array( 'archives' =>$archives ));
    }
*/
    public function listArchivesAction($apiKey, $apiSecret, $id, Request $request)
    {
	$user = $this->getUser();
	$archives = '';
	if($id != 0) {
	    $repository = $this->getDoctrine()->getRepository('msmBundle:sessions');
	    $session = $repository->find($id);
	    $sessionid = $session->getsessionid();
	    $repository = $this->getDoctrine()->getRepository('msmBundle:Archives');
	    $archives = $repository->findBysessionid($sessionid);

	} else {
	    $repository = $this->getDoctrine()->getRepository('msmBundle:Archives');
	    $archives = $repository->findBysessionid($sessionid);
	    $archives = $repository->findAll();
	}
	
	return $this->render('msmBundle:msmSession:listArchives.html.twig', array('archives' =>$archives, 'user' => $user));
    }

    public function closeArchivesAction($archiveid, $apiKey, $apiSecret)
    {
	$openTok = new OpenTok($apiKey, $apiSecret); 
	$res = $openTok->stopArchive($archiveid);
	
	return new Response($res);
    }

    public function watchArchiveAction($archiveid)
    {
	$user = $this->getUser();
	$resource = "44516932/".$archiveid."/"."archive.mp4";
	$resourceweb = "44516932/".$archiveid."/"."archive.mp4";
	
	$key_pair_id = 'APKAIDDXNRJB3N4I7Z3Q';
	$private_key = file_get_contents('/var/pk-APKAIDDXNRJB3N4I7Z3Q.pem');
	$base = "rtmp://s28xuwkxawqzvm.cloudfront.net/cfx/st"; 
	$baseweb = "http://d13ct4qxecram6.cloudfront.net/".$resourceweb; 
	//$baseweb = "https://s3.amazonaws.com/tokbox.com.archive2/".$resourceweb;
	
	$urlc = 'rtmp://s28xuwkxawqzvm.cloudfront.net';
	$urlweb = 'http://d13ct4qxecram6.cloudfront.net';
	//$urlweb = "https://s3.amazonaws.com/tokbox.com.archive2";
	$expires = time() + 60;
	$sig = $this->cfront_sign_url($urlc, $resource, $key_pair_id, $private_key, $expires);
	$sigweb = $this->cfront_sign_url_web($urlweb, $baseweb, $key_pair_id, $private_key, $expires);
	
	return $this->render('msmBundle:msmSession:watchArchive.html.twig', array(
	    'archiveid' =>$archiveid,
	    'sig' => $sig,
	    'sigweb' => $sigweb,
	    'resource' => $resource, 
	    'resourceweb' => $resourceweb, 
	    'base' => $base, 
	    'baseweb' => $baseweb,
	    'user' => $user
	));
    }

// ***CLOUDFRONT SIGS ***
//calculate sigs
    public function cfront_sign_url($urlc, $rtmpfile, $key_pair_id, $private_key, $expires) {
	if(!preg_match('/\?/', $urlc)) {
	    $urlc .= '?';
	}
	
	$cannedPolicy = sprintf('{"Statement":[{"Resource":"%s","Condition":{"DateLessThan":{"AWS:EpochTime":%d}}}]}', $rtmpfile, $expires);
	$signature = $this->cfront_sign($cannedPolicy, $private_key);
	return sprintf("?Expires=%d&Signature=%s&Key-Pair-Id=%s", $expires, $signature, $key_pair_id);
    }

    public function cfront_sign_url_web($urlweb, $baseweb, $key_pair_id, $private_key, $expires) {
	if(!preg_match('/\?/', $urlweb)) {
	    $urlweb .= '?';
	}
	
	$cannedPolicy = sprintf('{"Statement":[{"Resource":"%s","Condition":{"DateLessThan":{"AWS:EpochTime":%d}}}]}', $baseweb, $expires);
	$signature = $this->cfront_sign($cannedPolicy, $private_key);
	return sprintf("?Expires=%d&Signature=%s&Key-Pair-Id=%s", $expires, $signature, $key_pair_id);
    }

    public function cfront_sign($cannedPolicy, $private_key, $remove_whitespace=false) {
	if($remove_whitespace) {
	    $policy = preg_replace('/\s/', '', $cannedPolicy);
	}
	
	$policy = utf8_encode($cannedPolicy);
	$binary_signature = '';
	$pkeyid = openssl_get_privatekey($private_key);
	openssl_sign($policy, $binary_signature, $pkeyid, OPENSSL_ALGO_SHA1);
	openssl_free_key($pkeyid);
	
	return $this->cfront_safe($binary_signature);
    }

    public function cfront_safe($signature) {
	return strtr( base64_encode($signature), '+=/', '-_~');
    }
//end calc sigs

}