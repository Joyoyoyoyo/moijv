<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Entity;

/**
 * Description of game
 *
 * @author Etudiant
 */
class game {
    //put your code here
    private $id;
    private $title;
    private $image;
    /**
     *
     * @var \Entity\User
     */
    
    private $user;
    /**
     *
     * @var \Entity\Category
     */
    private $category;
    function getUser() {
        return $this->user;
    }

    function getCategory() {
        return $this->category;
    }

    function setUser(\Entity\User $user) {
        $this->user = $user;
    }

    function setCategory(\Entity\Category $category) {
        $this->category = $category;
    }

        
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getImage() {
        return $this->image;
    }

   

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setImage($image) {
        $this->image = $image;
    }


    
}
