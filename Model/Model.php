<?php

    class Model{
        private PDO $bdd;
        public function __construct()
        {
            try{
                /* user all privileges name: admin_CE2C_O  mp: 3U3oy19pHmsvhzVhVarIO6BQk5O */
                $this->bdd = new PDO ('mysql:host=localhost:3306;dbname=CE2C;charset=utf8', 'admin_CE2C_O', '3U3oy19pHmsvhzVhVarIO6BQk5O');
            }catch(Exception $e){
                echo($e->getMessage());
            }
        }
        public function findUserByIdentifier(string $identifier)
        {
            $sqlQuery="SELECT id, firstname, lastname, password FROM Users WHERE email= :identifier ";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute
            ([
                'identifier'=>$identifier
            ]);
            $req = $statement->fetch();
            return $req;
        }

        public function getAllSites () {
            $sqlQuery="SELECT id, city FROM sites ORDER BY city ASC";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute();
            $req = $statement->fetchAll();
            return $req;
        }

        public function getRoleId($role) {
            $sqlQuery="SELECT id FROM roles WHERE name_role = :role ";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute
            ([
                'role'=>$role
            ]);
            $req = $statement->fetch();
            return $req;
        }

        public function getUsersByRole($role_id) {
            $sqlQuery="SELECT id, firstname, lastname, site_id FROM Users WHERE role_id = :role_id";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute([
                'role_id' => $role_id
            ]);
            $req = $statement->fetchAll();
            return $req;
        }
        /*public function getSiteById(int $id)
        {
            $sqlQuery="SELECT id, city  FROM sites WHERE id= :id ";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute
            ([
                'id'=>$id
            ]);
            $req = $statement->fetch();
            return $req;
        }
        public function getRoleById(int $id)
        {
            $sqlQuery="SELECT id, name_role  FROM roles WHERE id= :id ";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute
            ([
                'id'=>$id
            ]);
            $req = $statement->fetch();
            return $req;
        }*/
    }