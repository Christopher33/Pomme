<?php

    namespace App\Controller;
    // namespace de la classe actuelle

    // namespace de la classe Response du composant HTPP foundation
    // namespace de la classe Route utilisée en annotation
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    //On étent la classe AbsctracController pour bénéficier des méthodes et prospriétés
    // de cette classe dans notre contrôleur

    class RequeteUtilisateur extends AbstractController
    {
        /**
         * Commentaire qui est une annotation et qui permet de créer
         * une url "/article" qui appelle la méthode "ArticleShow"
         *
         * @Route("/user", name="user")
         */
        public function ArticleShow()
        {

            // Réponse non valide (le var dump n'est pas une réponse HTTP correcte)
            //var_dump('hello world');

            // Réponse HTTP valide
            // Par défaut, le code renvoyé est 200, et le contenu 'html'

            // Appel de la méthode 'createFromGlobals' de la classe Request
            // cela permet de récupérer toutes les données de la requête de l'utilisateur
            // dans une seule classe
            // cela contient :
            //    $_GET,
            //    $_POST,
            //    $_COOKIE,
            //    $_FILES,
            //    $_SERVER
            $request = Request::createFromGlobals();

            $firstname = $request->query->get('firstname');
            $name = $request->query->get('name');
            $age = $request->query->get('age');


            //j'appel la classe "Response" dans la quelle j'entre la requete "Request::creatFromGlobals();" pour récupperer le get "id" + css

            if ($age >= 18){
                $response = new Response("<div style='color: white; font-size: 30px; font-family: Dosis;
                                 height: 100vh; width: 100%; background-color: #3f4d63; display: flex; 
                                 align-items: center; justify-content: center;'><p>Bonjour, Maître $name $firstname </p></div>");
            } else {
                $response = new Response("<div style='color: white; font-size: 30px; font-family: Dosis;
                                 height: 100vh; width: 100%; background-color: #3f4d63; display: flex; 
                                 align-items: center; justify-content: center;'><p>Tu n'es pas mon maître, enculer!</p></div>");
            }

            // affiche la requete $reponse
            return $response;
        }


    }