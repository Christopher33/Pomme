<?php


namespace App\Controller {

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;


    class direction extends AbstractController
    {
        /**
         * @Route("/admin", name="admin_connexion")
         */
        public function Connexion()
        {
            // génère une url pour la route dont le nom est "article"
            //$url = $this->generateUrl('article');
            // effectue une redirection vers la doc de Symfony
            //return $this->redirect($url);
            // cumule les deux méthodes 'generateUrl' et 'redirect'
            return $this->redirectToRoute('mySelf');
        }
    }
}