<?php

namespace App\Models;

class Person extends Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM people");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->db->prepare("INSERT INTO people (first_name, last_name, age, date_of_entry, comments) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $data['first_name'], $data['last_name'], $data['age'], $data['date_of_entry'], $data['comments']);
        $stmt->execute();
    }

    public function get($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM people WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $data)
    {
        $stmt = $this->db->prepare("UPDATE people SET first_name = ?, last_name = ?, age = ?, date_of_entry = ?, comments = ? WHERE id = ?");
        $stmt->bind_param("ssissi", $data['first_name'], $data['last_name'], $data['age'], $data['date_of_entry'], $data['comments'], $id);
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM people WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
