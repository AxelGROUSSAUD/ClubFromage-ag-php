<?php


namespace Club_Fromage\Model\Buisness;


class Membre implements JsonSerializable, IBuisnessClass
{
  private $_id;
  private $_nomUtilisateur;
  private $_pseudo;
  private $_email;
  private $_motDePasse;
  private $_dateDerConnexion;
  private $_dateEntreeClub;
  private $_description;
  private $_activite;

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
    public function getNomUtilisateur()
    {
        return $this->_nomUtilisateur;
    }

    /**
     * @param mixed $nomUtilisateur
     */
    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->_nomUtilisateur = $nomUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->_motDePasse;
    }

    /**
     * @param mixed $motDePasse
     */
    public function setMotDePasse($motDePasse)
    {
        $this->_motDePasse = $motDePasse;
    }

    /**
     * @return mixed
     */
    public function getDateDerConnexion()
    {
        return $this->_dateDerConnexion;
    }

    /**
     * @param mixed $dateDerConnexion
     */
    public function setDateDerConnexion($dateDerConnexion)
    {
        $this->_dateDerConnexion = $dateDerConnexion;
    }

    /**
     * @return mixed
     */
    public function getDateEntreeClub()
    {
        return $this->_dateEntreeClub;
    }

    /**
     * @param mixed $dateEntreeClub
     */
    public function setDateEntreeClub($dateEntreeClub)
    {
        $this->_dateEntreeClub = $dateEntreeClub;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getActivite()
    {
        return $this->_activite;
    }

    /**
     * @param mixed $activite
     */
    public function setActivite($activite)
    {
        $this->_activite = $activite;
    }

    public function jsonSerialize()
    {
        $tab = array(
            "id" => $this->getId(),
            "nomUtilisateur" => $this->getNomUtilisateur(),
            "pseudo" => $this->getPseudo(),
            "email" => $this->getEmail(),
            "motDePasse" => $this->getMotDePasse(),
            "dateDerConnexion" => $this->getDateDerConnexion(),
            "dateEntreeClub" => $this->getDateEntreeClub(),
            "description" => $this->getDescription()

        );
        return json_encode($tab,JSON_PRETTY_PRINT) ;
    }

    public function jsonParse($chaineJSON)
    {
        return json_decode($chaineJSON,false);

    }






}