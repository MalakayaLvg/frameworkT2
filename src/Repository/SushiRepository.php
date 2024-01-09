<?php
namespace App\Repository;

use App\Entity\Sushi;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;

#[TargetEntity(name: Sushi::class)]
class SushiRepository extends Repository
{


    public function insert(string $name, string $type, string $fish):void
    {
        $query = $this->pdo->prepare("INSERT INTO sushis SET name= :name, type= :type, fish= :fish");
        $query->execute([
            "name"=>$name,
            "type"=>$type,
            "fish"=>$fish
        ]);

    }

    public function update(string $name, string $type, string $fish, int $id):void
    {
        $query = $this->pdo->prepare("UPDATE sushis SET name= :name, type= :type, fish= :fish WHERE id= :id");
        $query->execute([
            "name"=>$name,
            "type"=>$type,
            "fish"=>$fish,
            "id"=>$id
        ]);
    }

    public function delete(int $id):void
    {
        $query = $this->pdo->prepare("DELETE FROM sushis WHERE id= :id");
        $query->execute([
            "id"=>$id
        ]);
    }
}
