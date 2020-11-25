<?php


namespace Club_Fromage\Model\Buisness;




class Fromage extends Aliment implements IBuisnessClass
{

    private $_recette;
    private $_dureeAffinage;
    private $_histoire;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        { // On récupère le nom du setter correspondant à l'attribut
            $method = 'set'.ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }





    /**
     * @return mixed
     */
    public function getDureeAffinage()
    {
        return $this->_dureeAffinage;
    }

    /**
     * @param mixed $dureeAffinage
     */
    public function setDureeAffinage($dureeAffinage)
    {
        $this->_dureeAffinage = $dureeAffinage;
    }



    /**
     * @return mixed
     */
    public function getRecette()
    {
        return $this->_recette;
    }

    /**
     * @param mixed $recette
     */
    public function setRecette($recette)
    {
        $this->_recette = $recette;
    }

    /**
     * @return mixed
     */
    public function getHistoire()
    {
        return $this->_histoire;
    }

    /**
     * @param mixed $histoire
     */
    public function setHistoire($histoire)
    {
        $this->_histoire = $histoire;
    }







}