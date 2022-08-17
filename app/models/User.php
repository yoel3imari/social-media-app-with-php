<?php

namespace App\Models;

use PDOException;
use App\Models\Model;
use App\Database\Db;
use App\Traits\Singleton;

class User implements Model
{
    use Singleton;
    protected $name;
    protected $username;
    protected $bio;
    protected $password;
    protected $picture;
    private $table_name = "users";

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
        try {
            $cnn = (Db::get_instance())->connect();
            $query = $cnn->prepare("INSERT INTO users (username, password, age, name) VALUES(:username, :pw, :age, :nm)");
            $query->execute([
                "username" => $data["username"],
                "pw" => $data["password"],
                "age" => $data["age"],
                "nm" => $data["name"]
            ]);
            $cnn = null;
            return true;
        } catch (PDOException $e) {
            var_dump($e->errorInfo);
        }
    }

    public function read(string $username, array $data)
    {
        try {
            // get user by username and specific data
            $cnn = (Db::get_instance())->connect();

            $wanted = "";
            for ($i = 0; $i < count($data); $i++) {
                if ($i === 0)
                    $wanted .= $data[$i];
                else
                    $wanted .= ", " . $data[$i];
            }

            $stmt = $cnn->prepare("SELECT " . $wanted . " FROM " . $this->table_name . " WHERE username = :username;");
            $stmt->execute(["username" => $username]);
            $result = $stmt->fetchAll();
            if (count($result) == 0) {
                return false;
            }
            return $result[0];
        } catch (PDOException $e) {
            return $e->errorInfo;
        }
    }

    public function exist(string $username)
    {
        try {
            // get user by username and specific data
            $cnn = (Db::get_instance())->connect();

            $stmt = $cnn->prepare("SELECT COUNT(*) FROM users WHERE username = :username;");
            $stmt->execute(["username" => $username]);
            $result = $stmt->fetchColumn();
            if ($result === 0) {
                return false;
            }
            // user exist
            return true;
        } catch (PDOException $e) {
            return $e->errorInfo;
        }
    }

    public function update(string $username, array $data)
    {
    }

    public function delete(string $username)
    {
    }
}
