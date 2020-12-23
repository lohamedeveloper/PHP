<?php

/*PHP 7 */
class PostsController
{
    /** 
     * @Route("/api/posts/{id}", methods={"GET"})
    */
    public function get($id){}
}


/**PHP 8 */
class PostsController2
{
    //#[Route("/api/posts/{id}", methods: ["GET])]
    public function get($id){}
}