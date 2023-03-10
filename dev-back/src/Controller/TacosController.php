<?php 
/*indique où "vit" ce fichier */


 namespace App\Controller;
 /* le nom de la classe doit êtrecohérent avec le nom du fichier */

 use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\HttpFoundation\Response;
 use App\Service\CreditsInterface;
 use App\Service\DataBaseInterface;
use App\Produits;
use App\Entity\ProduitsCategorie;
use App\Repository\ProduitsRepository;
use App\Repository\ProduitsCategorieRepository;
use PDO;


 class TacosController extends AbstractController 
 {

    private $produits=[];

    /**
      * @Route("/")
      */

     
    public function accueil()
    {
        return $this->render('accueil.html.twig');
    }

    


    /*La méthode que l'on veut éxécuter en remplacement de la page par defaut de symfony. Le nom de la méthode peu importe */

        // Attention, ci-après, ce n'est pas un commentaire !
        // Notez bien le /** */ et non un /* */
        // La directive @Route indique ici que l'on associe la route
        // "/" à la méthode home pour que Symfony l'exécute chaque fois
        // que l'on accède à la racine de notre site.
      


    


    /**
      * @Route("/click&collect", name="click&collect")
      */
     public function renderProduits(ProduitsRepository $data, ProduitsCategorieRepository $pc): Response
     {   
         $produit = $data->findAll();
         $categor = $pc->findAll();
         return $this->render('base.html.twig',['categor'=>$categor, 'liste'=>$produit]);
        
     }


    

    /**
      * @Route("/{name}", name="page_categorie")
      */
    public function renderTacos(ProduitsCategorie $data, ProduitsCategorieRepository $pc): Response
    {
        $produit = $data->getProduits();
        $categor = $pc->findAll();
        return $this->render('./base.html.twig',['categor'=>$categor, 'liste'=>$produit]);

    }



    /**
     * @Route("/goto/credits")
     */
    public function goto(CreditsInterface $credits): Response
    {
        return new Response ($credits->getCredits());
    }


   

    


}
    


     






