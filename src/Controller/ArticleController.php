<?php
/**
 * Created by PhpStorm.
 * User: smartnet
 * Date: 03.03.18
 * Time: 1:53
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller
{
    /**
     * @Route("/", name = "index")
     */
    public function homepage() {
//        dump($_SERVER['APP_ENV']);
        return $this->render("F/main.html.twig");
    }

    /**
     * @Route("/txt", name = "txt_index")
     */
    public function view_txt_index() {
        return $this->render("F/main.html.twig");
    }

    /**
     * @Route("/txt/new", name = "txt_new")
     */
    public function view_txt_new() {
        return $this->render("F/main.html.twig");
    }

    /**
     * @Route("/txt/list", name = "txt_list")
     */
    public function view_txt_list() {
        return $this->render("F/main.html.twig");
    }

    /**
     * @Route("/xml", name = "xml_index")
     */
    public function view_xml_index() {
        return $this->render("F/main.html.twig");
    }

    /**
     * @Route("/xml/new", name = "xml_new")
     */
    public function view_xml_new() {
        return $this->render("F/main.html.twig");
    }

    /**
     * @Route("/xml/list", name = "xml_list")
     */
    public function view_xml_list() {
        return $this->render("F/main.html.twig");
    }

    /**
     * @Route("/ini", name = "ini_index")
     */
    public function view_ini_index() {
        return $this->render("F/main.html.twig");
    }

    /**
     * @Route("/ini/new", name = "ini_new")
     */
    public function view_ini_new() {
        return $this->render("F/main.html.twig");
    }

    /**
     * @Route("/ini/list", name = "ini_list")
     */
    public function view_ini_list() {
        return $this->render("F/main.html.twig");
    }
}