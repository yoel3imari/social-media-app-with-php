<?php

namespace App\Models;

use App\Models\Model;
use App\Database\Db;


class User implements Model
{
    protected $name;
    protected $username;
    protected $bio;
    protected $password;
    protected $picture;

    /**
     * get a property from this object
     * 
     * @package User
     */
    public function __get($prop)
    {
        if (property_exists($this, $prop)) {
            return $this->$prop;
        }
    }

    /**
     * set a property in this object
     * 
     * @package Post
     */
    public function set(array $t)
    {
        foreach ($t as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }


    // CRUD OPERATIONS
    public function create(array $data)
    {
        // create new user when signup
    }

    public function read(string $username, array $data)
    {
        // get user by username and specific data
        $db = new Db();
        $cnn = $db->connect();

        $wanted = "";
        for ($i=0; $i < count($data); $i++) { 
            if( $i == 0 )
                $wanted .= $data[$i];
            else
                $wanted .= ", " . $data[$i];
        }

        $stmt = $cnn->prepare("SELECT username, " . $wanted . " FROM users WHERE username = :username");
        $stmt->execute(["username" => $username]);
        $result = $stmt->fetchAll();
        if( count($result) == 0 ) {
            return false;
        }

        return $result[0];
    }

    public function update(string $username, array $data)
    {
    }

    public function delete(string $username)
    {
    }
}
