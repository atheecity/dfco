<?php 

namespace DF\JoueurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller
{
	
	public function showProTeamEffectifAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		
		$effectifs = $em->getRepository('DFJoueurBundle:Joueur')->getJoueursClub(1);
		
		return $this->render('DFJoueurBundle:Public:show_teamPro_effectif.html.twig', array(
			'effectifs' => $effectifs,
		));
	}
	
	public function showJoueurAction($joueur_id)
	{
		$em = $this->getDoctrine()->getEntityManager();
		
		return $this->render('DFJoueurBundle:Public:show_joueur.html.twig');
	}
	
}