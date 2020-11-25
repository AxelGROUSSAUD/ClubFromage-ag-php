<?php


namespace Club_Fromage\Model\Buisness;


abstract class Aliment
{
    private $_id;
    private $_name;
    private $_origin;

    private $_dateCreation;
    private $_image;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $_name
     */
    public function setName($_name)
    {
        $this->_name = $_name;
    }

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->_origin;
    }

    /**
     * @param mixed $_origin
     */
    public function setOrigin($_origin)
    {
        $this->_origin = $_origin;
    }
    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->_dateCreation;
    }

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->_dateCreation = $dateCreation;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->_image = $image;
    }

    public function display()
    {
        echo "id = ".$this->getId() . ", name = ". $this->getName().", origin = ".$this->getOrigin().", dateCreation = ".$this->getDateCreation().", image = ".$this->getImage() ;
    }
}