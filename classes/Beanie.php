<?php
class Beanie
{   
    protected $id;
    protected $designation;
    protected $prix;
    protected $image;
    protected $description;

    //Getters
    public function getId(){
        return $this->id;
    }
    public function getDesignation()
    {
        return $this->designation;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getDescription()
    {
        return $this->description;
    }

    // setters
    public function setId($id)
    {
        $this->designation = $id;
        return $this;
    }
    public function setDesignation($designation)
    {
        $this->designation = $designation;
        return $this;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    
}
