<?php
namespace App\Repository;

#[targetEntity(name: Sushi::class)]
class SushiRepository extends Repository
{
    protected string $tableName = "sushis";

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
}
