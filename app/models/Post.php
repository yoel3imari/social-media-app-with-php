<?php

namespace App\Models;

class Post {
    
    protected $id;
    protected $poster;
    protected $content;
    protected $date;
    protected $likes;

    public function getId() {
        return $this->id;
    }

    public function setId(string $id) {
        $this->id = $id;
    }

    //-------------

    public function getPoster() {
        return $this->poster;
    }

    public function setPoster(string $poster) {
        $this->poster = $poster;
    }

    //-------------

    public function getContent() {
        return $this->content;
    }

    public function setContent(string $content) {
        $this->content = $content;
    }

    //-------------

    public function getDate() {
        return $this->date;
    }

    public function setDate(string $date) {
        $this->date = $date;
    }

    //-------------

    public function getLikes() {
        return $this->likes;
    }

    public function setLikes(string $likes) {
        $this->likes = $likes;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}