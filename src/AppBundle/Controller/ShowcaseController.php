<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Intl\Intl;

class ShowcaseController extends Controller
{
    /**
     * @Route("/", name="home_page")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Article')->findArticlesForPage(['index']);

        return $this->render('AppBundle::index.html.twig', ['posts'=>$posts[0]]);
    }

    public function aboutUsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Article')->findArticlesForPage(['aboutus']);

        return $this->render('AppBundle::aboutus.html.twig', ['posts'=>$posts[0]]);
    }

    /**
     * @Route(
     *     "/gallery"
     * )
     */
    public function galleryAction($furniture = null)
    {
        $defoultSection = [
            'kitchen',
            'living_rooms',
            'bedrooms',
            'nursery',
            'wardrobes',
            'bathrooms',
            'other',
            'doors'
        ];
        $section = $furniture ? [$furniture] : $defoultSection;

        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Article')->findArticlesForPage($section);
        $result = [];
        foreach($posts as $post) {
            $result[$post['section']][] = $post['summary'];
        }

        return $this->render('AppBundle::gallery.html.twig', ['posts'=>$result]);
    }

    /**
     * @Route(
     *     "/gallery/{furniture}"
     * )
     */
    public function furnitureGalleryAction($furniture)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Article')->findArticlesForPage([$furniture]);

        return $this->render('AppBundle::gallery.html.twig', ['posts'=>$posts]);
    }

    /**
     * @Route(
     *     "/gallery/{furniture}/{slug}"
     * )
     */
    public function concreteGalleryAction($furniture, $slug)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Article')->findConcreteArticlesForPage(['kitchen']);

        return $this->render('AppBundle::gallery.html.twig', ['posts'=>$posts]);
    }

    /**
     * @Route("/gallery/{slug}", name="gallery")
     *
     */
    public function postShowAction(Article $article)
    {
        return $this->render('blog/post_show.html.twig', array('post' => $article));
    }

    public function projectsAction()
    {
        return $this->render('AppBundle::projects.html.twig');
    }

    public function contactsAction()
    {
        return $this->render('AppBundle::contacts.html.twig');
    }
}
