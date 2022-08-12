<?php
/**
 * @author : Mari Doucet
 */

class BlogController
{
    public function index()
    {
        require "templates/blog_index.phtml";
    }

    public function show(int $id)
    {
        require "templates/blog_show.phtml";
    }
}
