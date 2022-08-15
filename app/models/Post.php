<?php

namespace App\Models;
use App\Models\Model;
class Post implements Model
{

    protected $id;
    protected $poster;
    protected $content;
    protected $date;
    protected $likes;

    /**
     * get a property from this object
     */
    public function __get($prop)
    {
        if (property_exists($this, $prop)) {
            return $this->$prop;
        }
    }

    /**
     * set a property in this object
     */
    public function __set($prop, $value)
    {
        if( property_exists($this, $prop) ){
            $this->$prop = $value;
        }
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
