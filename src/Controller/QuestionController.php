<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuestionController extends AbstractController
{
  /**
   * @Route("/", name = "app_homepage")
   */
  public function homepage() {
    return $this->render('item/homepage.html.twig');
  }

  /**
   * @Route("/item/{slug}", name = "app_item_show")
   */
  public function item($slug) {
    //dump($this);
    $items = ['first', 'second', 'third'];
    return $this->render('item/show.html.twig', ['parameter' => $slug, 'items' => $items]);
  }
}