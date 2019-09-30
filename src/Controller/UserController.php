<?php

    namespace App\Controller;

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    /**
    * @Route("/user")
    */

    class UserController extends AbstractController {
        /**
        * @Route("/index", name="user_index")
        */
        
        public function index(){

            $usersList = array();

            $usersList[0]['firstName'] = "Michel";
            $usersList[0]['lastName'] = "dubois";

            $usersList[1]['firstName'] = "Richard";
            $usersList[1]['lastName'] = "dupuit";

            $usersList[2]['firstName'] = "Jack";
            $usersList[2]['lastName'] = "ducerf";

            $usersList[3]['firstName'] = "Paul";
            $usersList[3]['lastName'] = "durock";

            return $this->render('user/user.html.twig', ['users_list' => $usersList]);
        } 
    }
?>