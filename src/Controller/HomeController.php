<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class HomeController extends AbstractController{

  public function bonjour()
  {
    return new Response ('Bonjour à tous');
  }

  public function aurevoir()
  {
    return $this->redirectToRoute('accueil');
  }

  public function redirectToPc()
  {
    return $this->redirect('https://www.pcgamer.com/');
  }

  public function showtemplate()
  {
    return $this->render('base.html.twig',[]);
  }

  /**
   * @Route("/products", name="products_list")
   */
  public function showproducts(Request $request)
  {
    $products = ['ordinateur','telephone','radio','cassette'];

    return $this->render('product.html.twig', ['products' => $products]);
  }

  #[Route('/customers', name:'customers_list')]
  public function showCustomers()
  {
    
    $customers =['jean','claude','john','charles'];

      return $this->render('customer.html.twig',['customers' => $customers]);
  }

  #[Route('/category/{id<\d+>}', name:"category")]
  public function getCategorie(int $id)
  {
    $category_id = $id;

    return $this->render('category.html.twig', ['id_category' => $category_id]);
  }


}