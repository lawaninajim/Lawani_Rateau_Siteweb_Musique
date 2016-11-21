<?php

namespace JN\PlatformBundle\Controller;

//important ces use
use JN\PlatformBundle\Form\ModificationPlaylistType;
use JN\PlatformBundle\Form\PlaylistType;
use JN\PlatformBundle\Entity\Musique;
use JN\PlatformBundle\Entity\Playlist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\FormType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\TextType;



class AdvertController extends Controller

{
  public function indexAction($page)

  {
	if ($page < 1) {

      throw $this->createNotFoundException("La page ".$page." n'existe pas.");

    }


    
     $listPlaylist = $this->getDoctrine()

  ->getManager()

  ->getRepository('JNPlatformBundle:Playlist')

  ->findAll()



    ;


   

    return $this->render('JNPlatformBundle:Advert:index.html.twig', array(

      'listPlaylist' => $listPlaylist

    ));

  }

  public function viewAction($id)

  {
   
    $em = $this->getDoctrine()->getManager();

    $advert = $em->getRepository('JNPlatformBundle:Playlist')->find($id);



    if (null === $advert) {

      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");

    }

    $listMusiques = $em

      ->getRepository('JNPlatformBundle:Musique')

      ->findBy(array('advert' => $advert))

    ;


    return $this->render('JNPlatformBundle:Advert:view.html.twig', array(

      'advert'           => $advert,

      'listMusiques' => $listMusiques,
    ));
 }



  public function addAction(Request $request)

  {

     

    $advert = new Playlist();

    $advert->setDate(new \Datetime());

   $form = $this->get('form.factory')->create(PlaylistType::class, $advert);


   


    if ($request->isMethod('POST')) {

      
      $form->handleRequest($request);
	



      if ($form->isValid()) {

      

        $em = $this->getDoctrine()->getManager();

        $em->persist($advert);

        $em->flush();
	


        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');



        return $this->redirectToRoute('jn_platform_view', array('id' => $advert->getId()));

      }

    }


    return $this->render('JNPlatformBundle:Advert:add.html.twig', array(

      'form' => $form->createView(),

    ));

  }
   
    



  public function editAction($id,Request $request)

  {

     $em = $this->getDoctrine()->getManager();


    $advert = $em->getRepository('JNPlatformBundle:Playlist')->find($id);


    if (null === $advert) {

      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");

    }


    $form = $this->get('form.factory')->create(ModificationPlaylistType::class, $advert);


    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

    
      $em->flush();


      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');


      return $this->redirectToRoute('jn_platform_view', array('id' => $advert->getId()));

    }


    return $this->render('JNPlatformBundle:Advert:edit.html.twig', array(

      'advert' => $advert,

      'form'   => $form->createView(),

    ));

    }


   


  public function deleteAction(Request $request, $id)

  {
    $em = $this->getDoctrine()->getManager();


    $advert = $em->getRepository('JNPlatformBundle:Playlist')->find($id);


    if (null === $advert) {

      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");

    }


    $form = $this->get('form.factory')->create();


    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

      $em->remove($advert);

      $em->flush();


      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");


      return $this->redirectToRoute('jn_platform_home');

    }

    

    return $this->render('JNPlatformBundle:Advert:delete.html.twig', array(

      'advert' => $advert,

      'form'   => $form->createView(),

    ));

  }
  public function menuAction($limit)

  {

    $listPlaylists = $this->getDoctrine()

      ->getManager()

      ->getRepository('JNPlatformBundle:Playlist')

      ->findBy(

        array(),                

        array('date' => 'desc'), 

        $limit,                 

        0                       

    );


    return $this->render('JNPlatformBundle:Advert:menu.html.twig', array(

      'listPlaylists' => $listPlaylists

    ));

  }
  


}
