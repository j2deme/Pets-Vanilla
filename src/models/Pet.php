<?php

class Pet
{
  protected $db;
  public $id;
  public $name;

  public function __construct()
  {
    try {
      $this->db = new PDO("sqlite:pets.db");
    } catch (Exception $e) {
      die('Connection Failed: ' . $e->getMessage());
    }
  }

  public function all()
  {
    $pets  = [];
    $query = $this->db->query('SELECT * FROM pets');

    foreach ($query as $row) {
      $pet       = new Pet();
      $pet->id   = $row['id'];
      $pet->name = $row['name'];
      array_push($pets, $pet);
    }
    return $pets;
  }

  public function find($id)
  {
    $query = $this->db->prepare('SELECT * FROM pets WHERE id = :id');
    $query->execute(['id' => $id]);
    $row       = $query->fetch();
    $pet       = new Pet();
    $pet->id   = $row['id'];
    $pet->name = $row['name'];
    return $pet;
  }

  public function save()
  {
    if ($this->id) {
      $query = $this->db->prepare('UPDATE pets SET name = :name WHERE id = :id');
      $query->execute(['name' => $this->name, 'id' => $this->id]);
    } else {
      $query = $this->db->prepare('INSERT INTO pets (name) VALUES (:name)');
      $query->execute(['name' => $this->name]);
      $this->id = $this->db->lastInsertId();
    }
  }

  public function delete()
  {
    $query = $this->db->prepare('DELETE FROM pets WHERE id = :id');
    $query->execute(['id' => $this->id]);
  }
}