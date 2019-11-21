<?php

namespace App\Controller; // namespace de la classe actuelle

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

// namespace de la classe Route utilisée en annotation
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * Commentaire que est une annotation et qui permet de créer une url "/article"
     * qui appelle la méthode "ArticleShow"
     *
     * @Route("/mySelf", name="mySelf")
     */
    public function ArticleShow()
    {
        $prenom = 'Christopher';
        $nom = 'Couty';
        $age = date('Y') - 1987;


        //Réponse HTTP valide
        //Par défaut, le code renvoyé est 200, et le cotenu 'html'
        $response = new Response("<div style='color: white; font-size: 30px; font-family: Dosis;
                                 height: 100vh; width: 100%; background-color: #3f4d63; display: flex; 
                                 align-items: center; justify-content: center;'><p>Bonjour, je m'appel 
                                 $prenom $nom et j'ai $age ans.</p></div>");

        return $response;
    }

    /**
     * @Route("/twigArticle", name="twigArticle")
     */

    public function twigArticle()
    {
        $titre = 'La pomme verte';
        $compteur_pomme = 'Nombre de pomme mangé :';
        $random = rand(0, 100);

        $sideBarre = true;
        $tags = [
            'Pomme verte',
            'Pomme rouge',
            'Pomme jaune',
            'Pomme bleu',
            'Pomme rose'
        ];

        $articles = [
            'article 1' => [
                'id' => 1,
                'titre' => 'article 1',
                'contenu' => 'contenu de l\'article1'
            ],
            'article 2' => [
                'id' => 2,
                'titre' => 'article 2',
                'contenu' => 'contenu de l\'article2'
            ],
            'article 3' => [
                'id' => 3,
                'titre' => 'article 3',
                'contenu' => 'contenu de l\'article3'
            ],
            'article 4' => [
                'id' => 4,
                'titre' => 'article 4',
                'contenu' => 'contenu de l\'article4'
            ]
        ];

        //récupère et compile le contenu d'un fichier Twig
        // en html et le renvoie en réponse
        return $this->render("article.html.twig", [
            'title' => $titre,
            'compt' => $compteur_pomme . ' ' . $random,
            'nav' => $sideBarre,
            'tag' => $tags,
            'articles' => $articles
        ]);
    }

}