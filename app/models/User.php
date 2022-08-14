<?php

namespace App\Models;

class User {
    protected $name;
    protected $username;
    protected $bio;
    protected $password;
    protected $picture;

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    //-------------

    public function getUsername() {
        return $this->username;
    }

    public function setUsername(string $username) {
        $this->username = $username;
    }

    //-------------

    public function getBio() {
        return $this->bio;
    }

    public function setBio(string $bio) {
        $this->bio = $bio;
    }

    //-------------

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }

    //-------------

    public function getPicture() {
        return $this->picture;
    }

    public function setPicture(string $picture) {
        $this->picture = $picture;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {
        // create new user when signup
    }

    public function read(string $username)
    {
        // get user by username
    }

    public function update(string $username, array $data)
    {

    }

    public function delete(string $username)
    {

    }
}