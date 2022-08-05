<?php


/**
 * Base class that represents a row from the 'entite' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseEntite extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EntitePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EntitePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the denomination_fr field.
     * @var        string
     */
    protected $denomination_fr;

    /**
     * The value for the denomination_ar field.
     * @var        string
     */
    protected $denomination_ar;

    /**
     * The value for the etat field.
     * @var        string
     */
    protected $etat;

    /**
     * The value for the type_entite field.
     * @var        string
     */
    protected $type_entite;

    /**
     * The value for the mail field.
     * @var        string
     */
    protected $mail;

    /**
     * The value for the telephone field.
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

    /**
     * The value for the adresse field.
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the adresse2 field.
     * @var        string
     */
    protected $adresse2;

    /**
     * The value for the cp field.
     * @var        string
     */
    protected $cp;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the path_fr field.
     * @var        string
     */
    protected $path_fr;

    /**
     * The value for the path_ar field.
     * @var        string
     */
    protected $path_ar;

    /**
     * The value for the id_region field.
     * @var        int
     */
    protected $id_region;

    /**
     * The value for the id_province field.
     * @var        int
     */
    protected $id_province;

    /**
     * The value for the id_commune field.
     * @var        int
     */
    protected $id_commune;

    /**
     * The value for the commune field.
     * @var        string
     */
    protected $commune;

    /**
     * The value for the id_pays field.
     * @var        int
     */
    protected $id_pays;

    /**
     * The value for the sigle_fr field.
     * @var        string
     */
    protected $sigle_fr;

    /**
     * The value for the sigle_ar field.
     * @var        string
     */
    protected $sigle_ar;

    /**
     * The value for the path_sigle_fr field.
     * @var        string
     */
    protected $path_sigle_fr;

    /**
     * The value for the path_sigle_ar field.
     * @var        string
     */
    protected $path_sigle_ar;

    /**
     * The value for the entite_visible_requerant field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $entite_visible_requerant;

    /**
     * The value for the id_entite_reception field.
     * @var        int
     */
    protected $id_entite_reception;

    /**
     * The value for the niveau field.
     * @var        string
     */
    protected $niveau;

    /**
     * The value for the code_min field.
     * @var        string
     */
    protected $code_min;

    /**
     * The value for the ids_entite_en_copie field.
     * @var        string
     */
    protected $ids_entite_en_copie;

    /**
     * The value for the nom_domaine field.
     * @var        string
     */
    protected $nom_domaine;

    /**
     * The value for the acronyme field.
     * @var        string
     */
    protected $acronyme;

    /**
     * The value for the supprime field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprime;

    /**
     * The value for the entite_traitement field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $entite_traitement;

    /**
     * The value for the entites_autorisees field.
     * @var        string
     */
    protected $entites_autorisees;

    /**
     * The value for the calcul_entites_autorisees field.
     * @var        string
     */
    protected $calcul_entites_autorisees;

    /**
     * The value for the id_entite_affectation_automatique field.
     * @var        int
     */
    protected $id_entite_affectation_automatique;

    /**
     * The value for the id_entite_relance field.
     * @var        int
     */
    protected $id_entite_relance;

    /**
     * The value for the code_entite field.
     * @var        string
     */
    protected $code_entite;

    /**
     * The value for the telephones_centre_appel field.
     * @var        string
     */
    protected $telephones_centre_appel;

    /**
     * The value for the horaire_centre_appel_ar field.
     * @var        string
     */
    protected $horaire_centre_appel_ar;

    /**
     * The value for the horaire_centre_appel_fr field.
     * @var        string
     */
    protected $horaire_centre_appel_fr;

    /**
     * The value for the date_modification field.
     * @var        string
     */
    protected $date_modification;

    /**
     * The value for the id_entite_recours field.
     * @var        int
     */
    protected $id_entite_recours;

    /**
     * The value for the identifiant_entite_reception_ws field.
     * @var        int
     */
    protected $identifiant_entite_reception_ws;

    /**
     * The value for the id_socle field.
     * @var        int
     */
    protected $id_socle;

    /**
     * The value for the id_externe field.
     * @var        int
     */
    protected $id_externe;

    /**
     * The value for the increment field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $increment;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->entite_visible_requerant = '0';
        $this->supprime = '0';
        $this->entite_traitement = '1';
        $this->increment = '0';
    }

    /**
     * Initializes internal state of BaseEntite object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Get the [denomination_fr] column value.
     * 
     * @return string
     */
    public function getDenominationFr()
    {

        return $this->denomination_fr;
    }

    /**
     * Get the [denomination_ar] column value.
     * 
     * @return string
     */
    public function getDenominationAr()
    {

        return $this->denomination_ar;
    }

    /**
     * Get the [etat] column value.
     * 
     * @return string
     */
    public function getEtat()
    {

        return $this->etat;
    }

    /**
     * Get the [type_entite] column value.
     * 
     * @return string
     */
    public function getTypeEntite()
    {

        return $this->type_entite;
    }

    /**
     * Get the [mail] column value.
     * 
     * @return string
     */
    public function getMail()
    {

        return $this->mail;
    }

    /**
     * Get the [telephone] column value.
     * 
     * @return string
     */
    public function getTelephone()
    {

        return $this->telephone;
    }

    /**
     * Get the [fax] column value.
     * 
     * @return string
     */
    public function getFax()
    {

        return $this->fax;
    }

    /**
     * Get the [adresse] column value.
     * 
     * @return string
     */
    public function getAdresse()
    {

        return $this->adresse;
    }

    /**
     * Get the [adresse2] column value.
     * 
     * @return string
     */
    public function getAdresse2()
    {

        return $this->adresse2;
    }

    /**
     * Get the [cp] column value.
     * 
     * @return string
     */
    public function getCp()
    {

        return $this->cp;
    }

    /**
     * Get the [ville] column value.
     * 
     * @return string
     */
    public function getVille()
    {

        return $this->ville;
    }

    /**
     * Get the [path_fr] column value.
     * 
     * @return string
     */
    public function getPathFr()
    {

        return $this->path_fr;
    }

    /**
     * Get the [path_ar] column value.
     * 
     * @return string
     */
    public function getPathAr()
    {

        return $this->path_ar;
    }

    /**
     * Get the [id_region] column value.
     * 
     * @return int
     */
    public function getIdRegion()
    {

        return $this->id_region;
    }

    /**
     * Get the [id_province] column value.
     * 
     * @return int
     */
    public function getIdProvince()
    {

        return $this->id_province;
    }

    /**
     * Get the [id_commune] column value.
     * 
     * @return int
     */
    public function getIdCommune()
    {

        return $this->id_commune;
    }

    /**
     * Get the [commune] column value.
     * 
     * @return string
     */
    public function getCommune()
    {

        return $this->commune;
    }

    /**
     * Get the [id_pays] column value.
     * 
     * @return int
     */
    public function getIdPays()
    {

        return $this->id_pays;
    }

    /**
     * Get the [sigle_fr] column value.
     * 
     * @return string
     */
    public function getSigleFr()
    {

        return $this->sigle_fr;
    }

    /**
     * Get the [sigle_ar] column value.
     * 
     * @return string
     */
    public function getSigleAr()
    {

        return $this->sigle_ar;
    }

    /**
     * Get the [path_sigle_fr] column value.
     * 
     * @return string
     */
    public function getPathSigleFr()
    {

        return $this->path_sigle_fr;
    }

    /**
     * Get the [path_sigle_ar] column value.
     * 
     * @return string
     */
    public function getPathSigleAr()
    {

        return $this->path_sigle_ar;
    }

    /**
     * Get the [entite_visible_requerant] column value.
     * 
     * @return string
     */
    public function getEntiteVisibleRequerant()
    {

        return $this->entite_visible_requerant;
    }

    /**
     * Get the [id_entite_reception] column value.
     * 
     * @return int
     */
    public function getIdEntiteReception()
    {

        return $this->id_entite_reception;
    }

    /**
     * Get the [niveau] column value.
     * 
     * @return string
     */
    public function getNiveau()
    {

        return $this->niveau;
    }

    /**
     * Get the [code_min] column value.
     * 
     * @return string
     */
    public function getCodeMin()
    {

        return $this->code_min;
    }

    /**
     * Get the [ids_entite_en_copie] column value.
     * 
     * @return string
     */
    public function getIdsEntiteEnCopie()
    {

        return $this->ids_entite_en_copie;
    }

    /**
     * Get the [nom_domaine] column value.
     * 
     * @return string
     */
    public function getNomDomaine()
    {

        return $this->nom_domaine;
    }

    /**
     * Get the [acronyme] column value.
     * 
     * @return string
     */
    public function getAcronyme()
    {

        return $this->acronyme;
    }

    /**
     * Get the [supprime] column value.
     * 
     * @return string
     */
    public function getSupprime()
    {

        return $this->supprime;
    }

    /**
     * Get the [entite_traitement] column value.
     * 
     * @return string
     */
    public function getEntiteTraitement()
    {

        return $this->entite_traitement;
    }

    /**
     * Get the [entites_autorisees] column value.
     * 
     * @return string
     */
    public function getEntitesAutorisees()
    {

        return $this->entites_autorisees;
    }

    /**
     * Get the [calcul_entites_autorisees] column value.
     * 
     * @return string
     */
    public function getCalculEntitesAutorisees()
    {

        return $this->calcul_entites_autorisees;
    }

    /**
     * Get the [id_entite_affectation_automatique] column value.
     * 
     * @return int
     */
    public function getIdEntiteAffectationAutomatique()
    {

        return $this->id_entite_affectation_automatique;
    }

    /**
     * Get the [id_entite_relance] column value.
     * 
     * @return int
     */
    public function getIdEntiteRelance()
    {

        return $this->id_entite_relance;
    }

    /**
     * Get the [code_entite] column value.
     * 
     * @return string
     */
    public function getCodeEntite()
    {

        return $this->code_entite;
    }

    /**
     * Get the [telephones_centre_appel] column value.
     * 
     * @return string
     */
    public function getTelephonesCentreAppel()
    {

        return $this->telephones_centre_appel;
    }

    /**
     * Get the [horaire_centre_appel_ar] column value.
     * 
     * @return string
     */
    public function getHoraireCentreAppelAr()
    {

        return $this->horaire_centre_appel_ar;
    }

    /**
     * Get the [horaire_centre_appel_fr] column value.
     * 
     * @return string
     */
    public function getHoraireCentreAppelFr()
    {

        return $this->horaire_centre_appel_fr;
    }

    /**
     * Get the [optionally formatted] temporal [date_modification] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateModification($format = 'Y-m-d H:i:s')
    {
        if ($this->date_modification === null) {
            return null;
        }

        if ($this->date_modification === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_modification);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modification, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [id_entite_recours] column value.
     * 
     * @return int
     */
    public function getIdEntiteRecours()
    {

        return $this->id_entite_recours;
    }

    /**
     * Get the [identifiant_entite_reception_ws] column value.
     * 
     * @return int
     */
    public function getIdentifiantEntiteReceptionWs()
    {

        return $this->identifiant_entite_reception_ws;
    }

    /**
     * Get the [id_socle] column value.
     * 
     * @return int
     */
    public function getIdSocle()
    {

        return $this->id_socle;
    }

    /**
     * Get the [id_externe] column value.
     * 
     * @return int
     */
    public function getIdExterne()
    {

        return $this->id_externe;
    }

    /**
     * Get the [increment] column value.
     * 
     * @return string
     */
    public function getIncrement()
    {

        return $this->increment;
    }

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = EntitePeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [denomination_fr] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setDenominationFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_fr !== $v) {
            $this->denomination_fr = $v;
            $this->modifiedColumns[] = EntitePeer::DENOMINATION_FR;
        }


        return $this;
    } // setDenominationFr()

    /**
     * Set the value of [denomination_ar] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setDenominationAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_ar !== $v) {
            $this->denomination_ar = $v;
            $this->modifiedColumns[] = EntitePeer::DENOMINATION_AR;
        }


        return $this;
    } // setDenominationAr()

    /**
     * Set the value of [etat] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setEtat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat !== $v) {
            $this->etat = $v;
            $this->modifiedColumns[] = EntitePeer::ETAT;
        }


        return $this;
    } // setEtat()

    /**
     * Set the value of [type_entite] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setTypeEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_entite !== $v) {
            $this->type_entite = $v;
            $this->modifiedColumns[] = EntitePeer::TYPE_ENTITE;
        }


        return $this;
    } // setTypeEntite()

    /**
     * Set the value of [mail] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = EntitePeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = EntitePeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = EntitePeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = EntitePeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [adresse2] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setAdresse2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2 !== $v) {
            $this->adresse2 = $v;
            $this->modifiedColumns[] = EntitePeer::ADRESSE2;
        }


        return $this;
    } // setAdresse2()

    /**
     * Set the value of [cp] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setCp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cp !== $v) {
            $this->cp = $v;
            $this->modifiedColumns[] = EntitePeer::CP;
        }


        return $this;
    } // setCp()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = EntitePeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [path_fr] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setPathFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->path_fr !== $v) {
            $this->path_fr = $v;
            $this->modifiedColumns[] = EntitePeer::PATH_FR;
        }


        return $this;
    } // setPathFr()

    /**
     * Set the value of [path_ar] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setPathAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->path_ar !== $v) {
            $this->path_ar = $v;
            $this->modifiedColumns[] = EntitePeer::PATH_AR;
        }


        return $this;
    } // setPathAr()

    /**
     * Set the value of [id_region] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdRegion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_region !== $v) {
            $this->id_region = $v;
            $this->modifiedColumns[] = EntitePeer::ID_REGION;
        }


        return $this;
    } // setIdRegion()

    /**
     * Set the value of [id_province] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_province !== $v) {
            $this->id_province = $v;
            $this->modifiedColumns[] = EntitePeer::ID_PROVINCE;
        }


        return $this;
    } // setIdProvince()

    /**
     * Set the value of [id_commune] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdCommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_commune !== $v) {
            $this->id_commune = $v;
            $this->modifiedColumns[] = EntitePeer::ID_COMMUNE;
        }


        return $this;
    } // setIdCommune()

    /**
     * Set the value of [commune] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setCommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commune !== $v) {
            $this->commune = $v;
            $this->modifiedColumns[] = EntitePeer::COMMUNE;
        }


        return $this;
    } // setCommune()

    /**
     * Set the value of [id_pays] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pays !== $v) {
            $this->id_pays = $v;
            $this->modifiedColumns[] = EntitePeer::ID_PAYS;
        }


        return $this;
    } // setIdPays()

    /**
     * Set the value of [sigle_fr] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setSigleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle_fr !== $v) {
            $this->sigle_fr = $v;
            $this->modifiedColumns[] = EntitePeer::SIGLE_FR;
        }


        return $this;
    } // setSigleFr()

    /**
     * Set the value of [sigle_ar] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setSigleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle_ar !== $v) {
            $this->sigle_ar = $v;
            $this->modifiedColumns[] = EntitePeer::SIGLE_AR;
        }


        return $this;
    } // setSigleAr()

    /**
     * Set the value of [path_sigle_fr] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setPathSigleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->path_sigle_fr !== $v) {
            $this->path_sigle_fr = $v;
            $this->modifiedColumns[] = EntitePeer::PATH_SIGLE_FR;
        }


        return $this;
    } // setPathSigleFr()

    /**
     * Set the value of [path_sigle_ar] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setPathSigleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->path_sigle_ar !== $v) {
            $this->path_sigle_ar = $v;
            $this->modifiedColumns[] = EntitePeer::PATH_SIGLE_AR;
        }


        return $this;
    } // setPathSigleAr()

    /**
     * Set the value of [entite_visible_requerant] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setEntiteVisibleRequerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entite_visible_requerant !== $v) {
            $this->entite_visible_requerant = $v;
            $this->modifiedColumns[] = EntitePeer::ENTITE_VISIBLE_REQUERANT;
        }


        return $this;
    } // setEntiteVisibleRequerant()

    /**
     * Set the value of [id_entite_reception] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdEntiteReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_reception !== $v) {
            $this->id_entite_reception = $v;
            $this->modifiedColumns[] = EntitePeer::ID_ENTITE_RECEPTION;
        }


        return $this;
    } // setIdEntiteReception()

    /**
     * Set the value of [niveau] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setNiveau($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->niveau !== $v) {
            $this->niveau = $v;
            $this->modifiedColumns[] = EntitePeer::NIVEAU;
        }


        return $this;
    } // setNiveau()

    /**
     * Set the value of [code_min] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setCodeMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_min !== $v) {
            $this->code_min = $v;
            $this->modifiedColumns[] = EntitePeer::CODE_MIN;
        }


        return $this;
    } // setCodeMin()

    /**
     * Set the value of [ids_entite_en_copie] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdsEntiteEnCopie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_entite_en_copie !== $v) {
            $this->ids_entite_en_copie = $v;
            $this->modifiedColumns[] = EntitePeer::IDS_ENTITE_EN_COPIE;
        }


        return $this;
    } // setIdsEntiteEnCopie()

    /**
     * Set the value of [nom_domaine] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setNomDomaine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_domaine !== $v) {
            $this->nom_domaine = $v;
            $this->modifiedColumns[] = EntitePeer::NOM_DOMAINE;
        }


        return $this;
    } // setNomDomaine()

    /**
     * Set the value of [acronyme] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setAcronyme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme !== $v) {
            $this->acronyme = $v;
            $this->modifiedColumns[] = EntitePeer::ACRONYME;
        }


        return $this;
    } // setAcronyme()

    /**
     * Set the value of [supprime] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setSupprime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprime !== $v) {
            $this->supprime = $v;
            $this->modifiedColumns[] = EntitePeer::SUPPRIME;
        }


        return $this;
    } // setSupprime()

    /**
     * Set the value of [entite_traitement] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setEntiteTraitement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entite_traitement !== $v) {
            $this->entite_traitement = $v;
            $this->modifiedColumns[] = EntitePeer::ENTITE_TRAITEMENT;
        }


        return $this;
    } // setEntiteTraitement()

    /**
     * Set the value of [entites_autorisees] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setEntitesAutorisees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entites_autorisees !== $v) {
            $this->entites_autorisees = $v;
            $this->modifiedColumns[] = EntitePeer::ENTITES_AUTORISEES;
        }


        return $this;
    } // setEntitesAutorisees()

    /**
     * Set the value of [calcul_entites_autorisees] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setCalculEntitesAutorisees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->calcul_entites_autorisees !== $v) {
            $this->calcul_entites_autorisees = $v;
            $this->modifiedColumns[] = EntitePeer::CALCUL_ENTITES_AUTORISEES;
        }


        return $this;
    } // setCalculEntitesAutorisees()

    /**
     * Set the value of [id_entite_affectation_automatique] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdEntiteAffectationAutomatique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_affectation_automatique !== $v) {
            $this->id_entite_affectation_automatique = $v;
            $this->modifiedColumns[] = EntitePeer::ID_ENTITE_AFFECTATION_AUTOMATIQUE;
        }


        return $this;
    } // setIdEntiteAffectationAutomatique()

    /**
     * Set the value of [id_entite_relance] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdEntiteRelance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_relance !== $v) {
            $this->id_entite_relance = $v;
            $this->modifiedColumns[] = EntitePeer::ID_ENTITE_RELANCE;
        }


        return $this;
    } // setIdEntiteRelance()

    /**
     * Set the value of [code_entite] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setCodeEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_entite !== $v) {
            $this->code_entite = $v;
            $this->modifiedColumns[] = EntitePeer::CODE_ENTITE;
        }


        return $this;
    } // setCodeEntite()

    /**
     * Set the value of [telephones_centre_appel] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setTelephonesCentreAppel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephones_centre_appel !== $v) {
            $this->telephones_centre_appel = $v;
            $this->modifiedColumns[] = EntitePeer::TELEPHONES_CENTRE_APPEL;
        }


        return $this;
    } // setTelephonesCentreAppel()

    /**
     * Set the value of [horaire_centre_appel_ar] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setHoraireCentreAppelAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->horaire_centre_appel_ar !== $v) {
            $this->horaire_centre_appel_ar = $v;
            $this->modifiedColumns[] = EntitePeer::HORAIRE_CENTRE_APPEL_AR;
        }


        return $this;
    } // setHoraireCentreAppelAr()

    /**
     * Set the value of [horaire_centre_appel_fr] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setHoraireCentreAppelFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->horaire_centre_appel_fr !== $v) {
            $this->horaire_centre_appel_fr = $v;
            $this->modifiedColumns[] = EntitePeer::HORAIRE_CENTRE_APPEL_FR;
        }


        return $this;
    } // setHoraireCentreAppelFr()

    /**
     * Sets the value of [date_modification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Entite The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modification !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modification !== null && $tmpDt = new DateTime($this->date_modification)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modification = $newDateAsString;
                $this->modifiedColumns[] = EntitePeer::DATE_MODIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDateModification()

    /**
     * Set the value of [id_entite_recours] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdEntiteRecours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_recours !== $v) {
            $this->id_entite_recours = $v;
            $this->modifiedColumns[] = EntitePeer::ID_ENTITE_RECOURS;
        }


        return $this;
    } // setIdEntiteRecours()

    /**
     * Set the value of [identifiant_entite_reception_ws] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdentifiantEntiteReceptionWs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->identifiant_entite_reception_ws !== $v) {
            $this->identifiant_entite_reception_ws = $v;
            $this->modifiedColumns[] = EntitePeer::IDENTIFIANT_ENTITE_RECEPTION_WS;
        }


        return $this;
    } // setIdentifiantEntiteReceptionWs()

    /**
     * Set the value of [id_socle] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdSocle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_socle !== $v) {
            $this->id_socle = $v;
            $this->modifiedColumns[] = EntitePeer::ID_SOCLE;
        }


        return $this;
    } // setIdSocle()

    /**
     * Set the value of [id_externe] column.
     * 
     * @param int $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIdExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_externe !== $v) {
            $this->id_externe = $v;
            $this->modifiedColumns[] = EntitePeer::ID_EXTERNE;
        }


        return $this;
    } // setIdExterne()

    /**
     * Set the value of [increment] column.
     * 
     * @param string $v new value
     * @return Entite The current object (for fluent API support)
     */
    public function setIncrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->increment !== $v) {
            $this->increment = $v;
            $this->modifiedColumns[] = EntitePeer::INCREMENT;
        }


        return $this;
    } // setIncrement()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->entite_visible_requerant !== '0') {
                return false;
            }

            if ($this->supprime !== '0') {
                return false;
            }

            if ($this->entite_traitement !== '1') {
                return false;
            }

            if ($this->increment !== '0') {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_entite = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->denomination_fr = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->denomination_ar = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->etat = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->type_entite = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->mail = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->telephone = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->fax = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->adresse = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->adresse2 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->cp = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->ville = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->path_fr = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->path_ar = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->id_region = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->id_province = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->id_commune = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->commune = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->id_pays = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->sigle_fr = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->sigle_ar = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->path_sigle_fr = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->path_sigle_ar = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->entite_visible_requerant = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->id_entite_reception = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->niveau = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->code_min = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->ids_entite_en_copie = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->nom_domaine = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->acronyme = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->supprime = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->entite_traitement = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->entites_autorisees = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->calcul_entites_autorisees = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->id_entite_affectation_automatique = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->id_entite_relance = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->code_entite = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->telephones_centre_appel = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->horaire_centre_appel_ar = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->horaire_centre_appel_fr = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->date_modification = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->id_entite_recours = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->identifiant_entite_reception_ws = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->id_socle = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->id_externe = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->increment = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 46; // 46 = EntitePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Entite object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EntitePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EntiteQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(EntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                EntitePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = EntitePeer::ID_ENTITE;
        if (null !== $this->id_entite) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EntitePeer::ID_ENTITE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EntitePeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(EntitePeer::DENOMINATION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`DENOMINATION_FR`';
        }
        if ($this->isColumnModified(EntitePeer::DENOMINATION_AR)) {
            $modifiedColumns[':p' . $index++]  = '`DENOMINATION_AR`';
        }
        if ($this->isColumnModified(EntitePeer::ETAT)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT`';
        }
        if ($this->isColumnModified(EntitePeer::TYPE_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_ENTITE`';
        }
        if ($this->isColumnModified(EntitePeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`mail`';
        }
        if ($this->isColumnModified(EntitePeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(EntitePeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(EntitePeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(EntitePeer::ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2`';
        }
        if ($this->isColumnModified(EntitePeer::CP)) {
            $modifiedColumns[':p' . $index++]  = '`cp`';
        }
        if ($this->isColumnModified(EntitePeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(EntitePeer::PATH_FR)) {
            $modifiedColumns[':p' . $index++]  = '`path_fr`';
        }
        if ($this->isColumnModified(EntitePeer::PATH_AR)) {
            $modifiedColumns[':p' . $index++]  = '`path_ar`';
        }
        if ($this->isColumnModified(EntitePeer::ID_REGION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_REGION`';
        }
        if ($this->isColumnModified(EntitePeer::ID_PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PROVINCE`';
        }
        if ($this->isColumnModified(EntitePeer::ID_COMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_COMMUNE`';
        }
        if ($this->isColumnModified(EntitePeer::COMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`COMMUNE`';
        }
        if ($this->isColumnModified(EntitePeer::ID_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PAYS`';
        }
        if ($this->isColumnModified(EntitePeer::SIGLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`SIGLE_FR`';
        }
        if ($this->isColumnModified(EntitePeer::SIGLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`SIGLE_AR`';
        }
        if ($this->isColumnModified(EntitePeer::PATH_SIGLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`PATH_SIGLE_FR`';
        }
        if ($this->isColumnModified(EntitePeer::PATH_SIGLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`PATH_SIGLE_AR`';
        }
        if ($this->isColumnModified(EntitePeer::ENTITE_VISIBLE_REQUERANT)) {
            $modifiedColumns[':p' . $index++]  = '`ENTITE_VISIBLE_REQUERANT`';
        }
        if ($this->isColumnModified(EntitePeer::ID_ENTITE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_RECEPTION`';
        }
        if ($this->isColumnModified(EntitePeer::NIVEAU)) {
            $modifiedColumns[':p' . $index++]  = '`NIVEAU`';
        }
        if ($this->isColumnModified(EntitePeer::CODE_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_MIN`';
        }
        if ($this->isColumnModified(EntitePeer::IDS_ENTITE_EN_COPIE)) {
            $modifiedColumns[':p' . $index++]  = '`IDS_ENTITE_EN_COPIE`';
        }
        if ($this->isColumnModified(EntitePeer::NOM_DOMAINE)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_DOMAINE`';
        }
        if ($this->isColumnModified(EntitePeer::ACRONYME)) {
            $modifiedColumns[':p' . $index++]  = '`ACRONYME`';
        }
        if ($this->isColumnModified(EntitePeer::SUPPRIME)) {
            $modifiedColumns[':p' . $index++]  = '`SUPPRIME`';
        }
        if ($this->isColumnModified(EntitePeer::ENTITE_TRAITEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`ENTITE_TRAITEMENT`';
        }
        if ($this->isColumnModified(EntitePeer::ENTITES_AUTORISEES)) {
            $modifiedColumns[':p' . $index++]  = '`ENTITES_AUTORISEES`';
        }
        if ($this->isColumnModified(EntitePeer::CALCUL_ENTITES_AUTORISEES)) {
            $modifiedColumns[':p' . $index++]  = '`CALCUL_ENTITES_AUTORISEES`';
        }
        if ($this->isColumnModified(EntitePeer::ID_ENTITE_AFFECTATION_AUTOMATIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_AFFECTATION_AUTOMATIQUE`';
        }
        if ($this->isColumnModified(EntitePeer::ID_ENTITE_RELANCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_RELANCE`';
        }
        if ($this->isColumnModified(EntitePeer::CODE_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_ENTITE`';
        }
        if ($this->isColumnModified(EntitePeer::TELEPHONES_CENTRE_APPEL)) {
            $modifiedColumns[':p' . $index++]  = '`TELEPHONES_CENTRE_APPEL`';
        }
        if ($this->isColumnModified(EntitePeer::HORAIRE_CENTRE_APPEL_AR)) {
            $modifiedColumns[':p' . $index++]  = '`HORAIRE_CENTRE_APPEL_AR`';
        }
        if ($this->isColumnModified(EntitePeer::HORAIRE_CENTRE_APPEL_FR)) {
            $modifiedColumns[':p' . $index++]  = '`HORAIRE_CENTRE_APPEL_FR`';
        }
        if ($this->isColumnModified(EntitePeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_MODIFICATION`';
        }
        if ($this->isColumnModified(EntitePeer::ID_ENTITE_RECOURS)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_RECOURS`';
        }
        if ($this->isColumnModified(EntitePeer::IDENTIFIANT_ENTITE_RECEPTION_WS)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_ENTITE_RECEPTION_WS`';
        }
        if ($this->isColumnModified(EntitePeer::ID_SOCLE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_SOCLE`';
        }
        if ($this->isColumnModified(EntitePeer::ID_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_EXTERNE`';
        }
        if ($this->isColumnModified(EntitePeer::INCREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`INCREMENT`';
        }

        $sql = sprintf(
            'INSERT INTO `entite` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`DENOMINATION_FR`':						
                        $stmt->bindValue($identifier, $this->denomination_fr, PDO::PARAM_STR);
                        break;
                    case '`DENOMINATION_AR`':						
                        $stmt->bindValue($identifier, $this->denomination_ar, PDO::PARAM_STR);
                        break;
                    case '`ETAT`':						
                        $stmt->bindValue($identifier, $this->etat, PDO::PARAM_STR);
                        break;
                    case '`TYPE_ENTITE`':						
                        $stmt->bindValue($identifier, $this->type_entite, PDO::PARAM_STR);
                        break;
                    case '`mail`':						
                        $stmt->bindValue($identifier, $this->mail, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`adresse2`':						
                        $stmt->bindValue($identifier, $this->adresse2, PDO::PARAM_STR);
                        break;
                    case '`cp`':						
                        $stmt->bindValue($identifier, $this->cp, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`path_fr`':						
                        $stmt->bindValue($identifier, $this->path_fr, PDO::PARAM_STR);
                        break;
                    case '`path_ar`':						
                        $stmt->bindValue($identifier, $this->path_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_REGION`':						
                        $stmt->bindValue($identifier, $this->id_region, PDO::PARAM_INT);
                        break;
                    case '`ID_PROVINCE`':						
                        $stmt->bindValue($identifier, $this->id_province, PDO::PARAM_INT);
                        break;
                    case '`ID_COMMUNE`':						
                        $stmt->bindValue($identifier, $this->id_commune, PDO::PARAM_INT);
                        break;
                    case '`COMMUNE`':						
                        $stmt->bindValue($identifier, $this->commune, PDO::PARAM_STR);
                        break;
                    case '`ID_PAYS`':						
                        $stmt->bindValue($identifier, $this->id_pays, PDO::PARAM_INT);
                        break;
                    case '`SIGLE_FR`':						
                        $stmt->bindValue($identifier, $this->sigle_fr, PDO::PARAM_STR);
                        break;
                    case '`SIGLE_AR`':						
                        $stmt->bindValue($identifier, $this->sigle_ar, PDO::PARAM_STR);
                        break;
                    case '`PATH_SIGLE_FR`':						
                        $stmt->bindValue($identifier, $this->path_sigle_fr, PDO::PARAM_STR);
                        break;
                    case '`PATH_SIGLE_AR`':						
                        $stmt->bindValue($identifier, $this->path_sigle_ar, PDO::PARAM_STR);
                        break;
                    case '`ENTITE_VISIBLE_REQUERANT`':						
                        $stmt->bindValue($identifier, $this->entite_visible_requerant, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE_RECEPTION`':						
                        $stmt->bindValue($identifier, $this->id_entite_reception, PDO::PARAM_INT);
                        break;
                    case '`NIVEAU`':						
                        $stmt->bindValue($identifier, $this->niveau, PDO::PARAM_STR);
                        break;
                    case '`CODE_MIN`':						
                        $stmt->bindValue($identifier, $this->code_min, PDO::PARAM_STR);
                        break;
                    case '`IDS_ENTITE_EN_COPIE`':						
                        $stmt->bindValue($identifier, $this->ids_entite_en_copie, PDO::PARAM_STR);
                        break;
                    case '`NOM_DOMAINE`':						
                        $stmt->bindValue($identifier, $this->nom_domaine, PDO::PARAM_STR);
                        break;
                    case '`ACRONYME`':						
                        $stmt->bindValue($identifier, $this->acronyme, PDO::PARAM_STR);
                        break;
                    case '`SUPPRIME`':						
                        $stmt->bindValue($identifier, $this->supprime, PDO::PARAM_STR);
                        break;
                    case '`ENTITE_TRAITEMENT`':						
                        $stmt->bindValue($identifier, $this->entite_traitement, PDO::PARAM_STR);
                        break;
                    case '`ENTITES_AUTORISEES`':						
                        $stmt->bindValue($identifier, $this->entites_autorisees, PDO::PARAM_STR);
                        break;
                    case '`CALCUL_ENTITES_AUTORISEES`':						
                        $stmt->bindValue($identifier, $this->calcul_entites_autorisees, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE_AFFECTATION_AUTOMATIQUE`':						
                        $stmt->bindValue($identifier, $this->id_entite_affectation_automatique, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE_RELANCE`':						
                        $stmt->bindValue($identifier, $this->id_entite_relance, PDO::PARAM_INT);
                        break;
                    case '`CODE_ENTITE`':						
                        $stmt->bindValue($identifier, $this->code_entite, PDO::PARAM_STR);
                        break;
                    case '`TELEPHONES_CENTRE_APPEL`':						
                        $stmt->bindValue($identifier, $this->telephones_centre_appel, PDO::PARAM_STR);
                        break;
                    case '`HORAIRE_CENTRE_APPEL_AR`':						
                        $stmt->bindValue($identifier, $this->horaire_centre_appel_ar, PDO::PARAM_STR);
                        break;
                    case '`HORAIRE_CENTRE_APPEL_FR`':						
                        $stmt->bindValue($identifier, $this->horaire_centre_appel_fr, PDO::PARAM_STR);
                        break;
                    case '`DATE_MODIFICATION`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE_RECOURS`':						
                        $stmt->bindValue($identifier, $this->id_entite_recours, PDO::PARAM_INT);
                        break;
                    case '`IDENTIFIANT_ENTITE_RECEPTION_WS`':						
                        $stmt->bindValue($identifier, $this->identifiant_entite_reception_ws, PDO::PARAM_INT);
                        break;
                    case '`ID_SOCLE`':						
                        $stmt->bindValue($identifier, $this->id_socle, PDO::PARAM_INT);
                        break;
                    case '`ID_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->id_externe, PDO::PARAM_INT);
                        break;
                    case '`INCREMENT`':						
                        $stmt->bindValue($identifier, $this->increment, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdEntite($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = EntitePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = EntitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdEntite();
                break;
            case 1:
                return $this->getDenominationFr();
                break;
            case 2:
                return $this->getDenominationAr();
                break;
            case 3:
                return $this->getEtat();
                break;
            case 4:
                return $this->getTypeEntite();
                break;
            case 5:
                return $this->getMail();
                break;
            case 6:
                return $this->getTelephone();
                break;
            case 7:
                return $this->getFax();
                break;
            case 8:
                return $this->getAdresse();
                break;
            case 9:
                return $this->getAdresse2();
                break;
            case 10:
                return $this->getCp();
                break;
            case 11:
                return $this->getVille();
                break;
            case 12:
                return $this->getPathFr();
                break;
            case 13:
                return $this->getPathAr();
                break;
            case 14:
                return $this->getIdRegion();
                break;
            case 15:
                return $this->getIdProvince();
                break;
            case 16:
                return $this->getIdCommune();
                break;
            case 17:
                return $this->getCommune();
                break;
            case 18:
                return $this->getIdPays();
                break;
            case 19:
                return $this->getSigleFr();
                break;
            case 20:
                return $this->getSigleAr();
                break;
            case 21:
                return $this->getPathSigleFr();
                break;
            case 22:
                return $this->getPathSigleAr();
                break;
            case 23:
                return $this->getEntiteVisibleRequerant();
                break;
            case 24:
                return $this->getIdEntiteReception();
                break;
            case 25:
                return $this->getNiveau();
                break;
            case 26:
                return $this->getCodeMin();
                break;
            case 27:
                return $this->getIdsEntiteEnCopie();
                break;
            case 28:
                return $this->getNomDomaine();
                break;
            case 29:
                return $this->getAcronyme();
                break;
            case 30:
                return $this->getSupprime();
                break;
            case 31:
                return $this->getEntiteTraitement();
                break;
            case 32:
                return $this->getEntitesAutorisees();
                break;
            case 33:
                return $this->getCalculEntitesAutorisees();
                break;
            case 34:
                return $this->getIdEntiteAffectationAutomatique();
                break;
            case 35:
                return $this->getIdEntiteRelance();
                break;
            case 36:
                return $this->getCodeEntite();
                break;
            case 37:
                return $this->getTelephonesCentreAppel();
                break;
            case 38:
                return $this->getHoraireCentreAppelAr();
                break;
            case 39:
                return $this->getHoraireCentreAppelFr();
                break;
            case 40:
                return $this->getDateModification();
                break;
            case 41:
                return $this->getIdEntiteRecours();
                break;
            case 42:
                return $this->getIdentifiantEntiteReceptionWs();
                break;
            case 43:
                return $this->getIdSocle();
                break;
            case 44:
                return $this->getIdExterne();
                break;
            case 45:
                return $this->getIncrement();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Entite'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Entite'][$this->getPrimaryKey()] = true;
        $keys = EntitePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEntite(),
            $keys[1] => $this->getDenominationFr(),
            $keys[2] => $this->getDenominationAr(),
            $keys[3] => $this->getEtat(),
            $keys[4] => $this->getTypeEntite(),
            $keys[5] => $this->getMail(),
            $keys[6] => $this->getTelephone(),
            $keys[7] => $this->getFax(),
            $keys[8] => $this->getAdresse(),
            $keys[9] => $this->getAdresse2(),
            $keys[10] => $this->getCp(),
            $keys[11] => $this->getVille(),
            $keys[12] => $this->getPathFr(),
            $keys[13] => $this->getPathAr(),
            $keys[14] => $this->getIdRegion(),
            $keys[15] => $this->getIdProvince(),
            $keys[16] => $this->getIdCommune(),
            $keys[17] => $this->getCommune(),
            $keys[18] => $this->getIdPays(),
            $keys[19] => $this->getSigleFr(),
            $keys[20] => $this->getSigleAr(),
            $keys[21] => $this->getPathSigleFr(),
            $keys[22] => $this->getPathSigleAr(),
            $keys[23] => $this->getEntiteVisibleRequerant(),
            $keys[24] => $this->getIdEntiteReception(),
            $keys[25] => $this->getNiveau(),
            $keys[26] => $this->getCodeMin(),
            $keys[27] => $this->getIdsEntiteEnCopie(),
            $keys[28] => $this->getNomDomaine(),
            $keys[29] => $this->getAcronyme(),
            $keys[30] => $this->getSupprime(),
            $keys[31] => $this->getEntiteTraitement(),
            $keys[32] => $this->getEntitesAutorisees(),
            $keys[33] => $this->getCalculEntitesAutorisees(),
            $keys[34] => $this->getIdEntiteAffectationAutomatique(),
            $keys[35] => $this->getIdEntiteRelance(),
            $keys[36] => $this->getCodeEntite(),
            $keys[37] => $this->getTelephonesCentreAppel(),
            $keys[38] => $this->getHoraireCentreAppelAr(),
            $keys[39] => $this->getHoraireCentreAppelFr(),
            $keys[40] => $this->getDateModification(),
            $keys[41] => $this->getIdEntiteRecours(),
            $keys[42] => $this->getIdentifiantEntiteReceptionWs(),
            $keys[43] => $this->getIdSocle(),
            $keys[44] => $this->getIdExterne(),
            $keys[45] => $this->getIncrement(),
        );

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = EntitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdEntite($value);
                break;
            case 1:
                $this->setDenominationFr($value);
                break;
            case 2:
                $this->setDenominationAr($value);
                break;
            case 3:
                $this->setEtat($value);
                break;
            case 4:
                $this->setTypeEntite($value);
                break;
            case 5:
                $this->setMail($value);
                break;
            case 6:
                $this->setTelephone($value);
                break;
            case 7:
                $this->setFax($value);
                break;
            case 8:
                $this->setAdresse($value);
                break;
            case 9:
                $this->setAdresse2($value);
                break;
            case 10:
                $this->setCp($value);
                break;
            case 11:
                $this->setVille($value);
                break;
            case 12:
                $this->setPathFr($value);
                break;
            case 13:
                $this->setPathAr($value);
                break;
            case 14:
                $this->setIdRegion($value);
                break;
            case 15:
                $this->setIdProvince($value);
                break;
            case 16:
                $this->setIdCommune($value);
                break;
            case 17:
                $this->setCommune($value);
                break;
            case 18:
                $this->setIdPays($value);
                break;
            case 19:
                $this->setSigleFr($value);
                break;
            case 20:
                $this->setSigleAr($value);
                break;
            case 21:
                $this->setPathSigleFr($value);
                break;
            case 22:
                $this->setPathSigleAr($value);
                break;
            case 23:
                $this->setEntiteVisibleRequerant($value);
                break;
            case 24:
                $this->setIdEntiteReception($value);
                break;
            case 25:
                $this->setNiveau($value);
                break;
            case 26:
                $this->setCodeMin($value);
                break;
            case 27:
                $this->setIdsEntiteEnCopie($value);
                break;
            case 28:
                $this->setNomDomaine($value);
                break;
            case 29:
                $this->setAcronyme($value);
                break;
            case 30:
                $this->setSupprime($value);
                break;
            case 31:
                $this->setEntiteTraitement($value);
                break;
            case 32:
                $this->setEntitesAutorisees($value);
                break;
            case 33:
                $this->setCalculEntitesAutorisees($value);
                break;
            case 34:
                $this->setIdEntiteAffectationAutomatique($value);
                break;
            case 35:
                $this->setIdEntiteRelance($value);
                break;
            case 36:
                $this->setCodeEntite($value);
                break;
            case 37:
                $this->setTelephonesCentreAppel($value);
                break;
            case 38:
                $this->setHoraireCentreAppelAr($value);
                break;
            case 39:
                $this->setHoraireCentreAppelFr($value);
                break;
            case 40:
                $this->setDateModification($value);
                break;
            case 41:
                $this->setIdEntiteRecours($value);
                break;
            case 42:
                $this->setIdentifiantEntiteReceptionWs($value);
                break;
            case 43:
                $this->setIdSocle($value);
                break;
            case 44:
                $this->setIdExterne($value);
                break;
            case 45:
                $this->setIncrement($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = EntitePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEntite($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDenominationFr($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDenominationAr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEtat($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTypeEntite($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMail($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTelephone($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFax($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAdresse($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAdresse2($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCp($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setVille($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPathFr($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPathAr($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdRegion($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdProvince($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdCommune($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCommune($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdPays($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSigleFr($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSigleAr($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPathSigleFr($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setPathSigleAr($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setEntiteVisibleRequerant($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setIdEntiteReception($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setNiveau($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCodeMin($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setIdsEntiteEnCopie($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setNomDomaine($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setAcronyme($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setSupprime($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setEntiteTraitement($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setEntitesAutorisees($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setCalculEntitesAutorisees($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setIdEntiteAffectationAutomatique($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setIdEntiteRelance($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setCodeEntite($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setTelephonesCentreAppel($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setHoraireCentreAppelAr($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setHoraireCentreAppelFr($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDateModification($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setIdEntiteRecours($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setIdentifiantEntiteReceptionWs($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setIdSocle($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setIdExterne($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setIncrement($arr[$keys[45]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EntitePeer::DATABASE_NAME);

        if ($this->isColumnModified(EntitePeer::ID_ENTITE)) $criteria->add(EntitePeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(EntitePeer::DENOMINATION_FR)) $criteria->add(EntitePeer::DENOMINATION_FR, $this->denomination_fr);
        if ($this->isColumnModified(EntitePeer::DENOMINATION_AR)) $criteria->add(EntitePeer::DENOMINATION_AR, $this->denomination_ar);
        if ($this->isColumnModified(EntitePeer::ETAT)) $criteria->add(EntitePeer::ETAT, $this->etat);
        if ($this->isColumnModified(EntitePeer::TYPE_ENTITE)) $criteria->add(EntitePeer::TYPE_ENTITE, $this->type_entite);
        if ($this->isColumnModified(EntitePeer::MAIL)) $criteria->add(EntitePeer::MAIL, $this->mail);
        if ($this->isColumnModified(EntitePeer::TELEPHONE)) $criteria->add(EntitePeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(EntitePeer::FAX)) $criteria->add(EntitePeer::FAX, $this->fax);
        if ($this->isColumnModified(EntitePeer::ADRESSE)) $criteria->add(EntitePeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(EntitePeer::ADRESSE2)) $criteria->add(EntitePeer::ADRESSE2, $this->adresse2);
        if ($this->isColumnModified(EntitePeer::CP)) $criteria->add(EntitePeer::CP, $this->cp);
        if ($this->isColumnModified(EntitePeer::VILLE)) $criteria->add(EntitePeer::VILLE, $this->ville);
        if ($this->isColumnModified(EntitePeer::PATH_FR)) $criteria->add(EntitePeer::PATH_FR, $this->path_fr);
        if ($this->isColumnModified(EntitePeer::PATH_AR)) $criteria->add(EntitePeer::PATH_AR, $this->path_ar);
        if ($this->isColumnModified(EntitePeer::ID_REGION)) $criteria->add(EntitePeer::ID_REGION, $this->id_region);
        if ($this->isColumnModified(EntitePeer::ID_PROVINCE)) $criteria->add(EntitePeer::ID_PROVINCE, $this->id_province);
        if ($this->isColumnModified(EntitePeer::ID_COMMUNE)) $criteria->add(EntitePeer::ID_COMMUNE, $this->id_commune);
        if ($this->isColumnModified(EntitePeer::COMMUNE)) $criteria->add(EntitePeer::COMMUNE, $this->commune);
        if ($this->isColumnModified(EntitePeer::ID_PAYS)) $criteria->add(EntitePeer::ID_PAYS, $this->id_pays);
        if ($this->isColumnModified(EntitePeer::SIGLE_FR)) $criteria->add(EntitePeer::SIGLE_FR, $this->sigle_fr);
        if ($this->isColumnModified(EntitePeer::SIGLE_AR)) $criteria->add(EntitePeer::SIGLE_AR, $this->sigle_ar);
        if ($this->isColumnModified(EntitePeer::PATH_SIGLE_FR)) $criteria->add(EntitePeer::PATH_SIGLE_FR, $this->path_sigle_fr);
        if ($this->isColumnModified(EntitePeer::PATH_SIGLE_AR)) $criteria->add(EntitePeer::PATH_SIGLE_AR, $this->path_sigle_ar);
        if ($this->isColumnModified(EntitePeer::ENTITE_VISIBLE_REQUERANT)) $criteria->add(EntitePeer::ENTITE_VISIBLE_REQUERANT, $this->entite_visible_requerant);
        if ($this->isColumnModified(EntitePeer::ID_ENTITE_RECEPTION)) $criteria->add(EntitePeer::ID_ENTITE_RECEPTION, $this->id_entite_reception);
        if ($this->isColumnModified(EntitePeer::NIVEAU)) $criteria->add(EntitePeer::NIVEAU, $this->niveau);
        if ($this->isColumnModified(EntitePeer::CODE_MIN)) $criteria->add(EntitePeer::CODE_MIN, $this->code_min);
        if ($this->isColumnModified(EntitePeer::IDS_ENTITE_EN_COPIE)) $criteria->add(EntitePeer::IDS_ENTITE_EN_COPIE, $this->ids_entite_en_copie);
        if ($this->isColumnModified(EntitePeer::NOM_DOMAINE)) $criteria->add(EntitePeer::NOM_DOMAINE, $this->nom_domaine);
        if ($this->isColumnModified(EntitePeer::ACRONYME)) $criteria->add(EntitePeer::ACRONYME, $this->acronyme);
        if ($this->isColumnModified(EntitePeer::SUPPRIME)) $criteria->add(EntitePeer::SUPPRIME, $this->supprime);
        if ($this->isColumnModified(EntitePeer::ENTITE_TRAITEMENT)) $criteria->add(EntitePeer::ENTITE_TRAITEMENT, $this->entite_traitement);
        if ($this->isColumnModified(EntitePeer::ENTITES_AUTORISEES)) $criteria->add(EntitePeer::ENTITES_AUTORISEES, $this->entites_autorisees);
        if ($this->isColumnModified(EntitePeer::CALCUL_ENTITES_AUTORISEES)) $criteria->add(EntitePeer::CALCUL_ENTITES_AUTORISEES, $this->calcul_entites_autorisees);
        if ($this->isColumnModified(EntitePeer::ID_ENTITE_AFFECTATION_AUTOMATIQUE)) $criteria->add(EntitePeer::ID_ENTITE_AFFECTATION_AUTOMATIQUE, $this->id_entite_affectation_automatique);
        if ($this->isColumnModified(EntitePeer::ID_ENTITE_RELANCE)) $criteria->add(EntitePeer::ID_ENTITE_RELANCE, $this->id_entite_relance);
        if ($this->isColumnModified(EntitePeer::CODE_ENTITE)) $criteria->add(EntitePeer::CODE_ENTITE, $this->code_entite);
        if ($this->isColumnModified(EntitePeer::TELEPHONES_CENTRE_APPEL)) $criteria->add(EntitePeer::TELEPHONES_CENTRE_APPEL, $this->telephones_centre_appel);
        if ($this->isColumnModified(EntitePeer::HORAIRE_CENTRE_APPEL_AR)) $criteria->add(EntitePeer::HORAIRE_CENTRE_APPEL_AR, $this->horaire_centre_appel_ar);
        if ($this->isColumnModified(EntitePeer::HORAIRE_CENTRE_APPEL_FR)) $criteria->add(EntitePeer::HORAIRE_CENTRE_APPEL_FR, $this->horaire_centre_appel_fr);
        if ($this->isColumnModified(EntitePeer::DATE_MODIFICATION)) $criteria->add(EntitePeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(EntitePeer::ID_ENTITE_RECOURS)) $criteria->add(EntitePeer::ID_ENTITE_RECOURS, $this->id_entite_recours);
        if ($this->isColumnModified(EntitePeer::IDENTIFIANT_ENTITE_RECEPTION_WS)) $criteria->add(EntitePeer::IDENTIFIANT_ENTITE_RECEPTION_WS, $this->identifiant_entite_reception_ws);
        if ($this->isColumnModified(EntitePeer::ID_SOCLE)) $criteria->add(EntitePeer::ID_SOCLE, $this->id_socle);
        if ($this->isColumnModified(EntitePeer::ID_EXTERNE)) $criteria->add(EntitePeer::ID_EXTERNE, $this->id_externe);
        if ($this->isColumnModified(EntitePeer::INCREMENT)) $criteria->add(EntitePeer::INCREMENT, $this->increment);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(EntitePeer::DATABASE_NAME);
        $criteria->add(EntitePeer::ID_ENTITE, $this->id_entite);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdEntite();
    }

    /**
     * Generic method to set the primary key (id_entite column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdEntite($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdEntite();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Entite (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDenominationFr($this->getDenominationFr());
        $copyObj->setDenominationAr($this->getDenominationAr());
        $copyObj->setEtat($this->getEtat());
        $copyObj->setTypeEntite($this->getTypeEntite());
        $copyObj->setMail($this->getMail());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setAdresse2($this->getAdresse2());
        $copyObj->setCp($this->getCp());
        $copyObj->setVille($this->getVille());
        $copyObj->setPathFr($this->getPathFr());
        $copyObj->setPathAr($this->getPathAr());
        $copyObj->setIdRegion($this->getIdRegion());
        $copyObj->setIdProvince($this->getIdProvince());
        $copyObj->setIdCommune($this->getIdCommune());
        $copyObj->setCommune($this->getCommune());
        $copyObj->setIdPays($this->getIdPays());
        $copyObj->setSigleFr($this->getSigleFr());
        $copyObj->setSigleAr($this->getSigleAr());
        $copyObj->setPathSigleFr($this->getPathSigleFr());
        $copyObj->setPathSigleAr($this->getPathSigleAr());
        $copyObj->setEntiteVisibleRequerant($this->getEntiteVisibleRequerant());
        $copyObj->setIdEntiteReception($this->getIdEntiteReception());
        $copyObj->setNiveau($this->getNiveau());
        $copyObj->setCodeMin($this->getCodeMin());
        $copyObj->setIdsEntiteEnCopie($this->getIdsEntiteEnCopie());
        $copyObj->setNomDomaine($this->getNomDomaine());
        $copyObj->setAcronyme($this->getAcronyme());
        $copyObj->setSupprime($this->getSupprime());
        $copyObj->setEntiteTraitement($this->getEntiteTraitement());
        $copyObj->setEntitesAutorisees($this->getEntitesAutorisees());
        $copyObj->setCalculEntitesAutorisees($this->getCalculEntitesAutorisees());
        $copyObj->setIdEntiteAffectationAutomatique($this->getIdEntiteAffectationAutomatique());
        $copyObj->setIdEntiteRelance($this->getIdEntiteRelance());
        $copyObj->setCodeEntite($this->getCodeEntite());
        $copyObj->setTelephonesCentreAppel($this->getTelephonesCentreAppel());
        $copyObj->setHoraireCentreAppelAr($this->getHoraireCentreAppelAr());
        $copyObj->setHoraireCentreAppelFr($this->getHoraireCentreAppelFr());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setIdEntiteRecours($this->getIdEntiteRecours());
        $copyObj->setIdentifiantEntiteReceptionWs($this->getIdentifiantEntiteReceptionWs());
        $copyObj->setIdSocle($this->getIdSocle());
        $copyObj->setIdExterne($this->getIdExterne());
        $copyObj->setIncrement($this->getIncrement());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdEntite(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Entite Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return EntitePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EntitePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_entite = null;
        $this->denomination_fr = null;
        $this->denomination_ar = null;
        $this->etat = null;
        $this->type_entite = null;
        $this->mail = null;
        $this->telephone = null;
        $this->fax = null;
        $this->adresse = null;
        $this->adresse2 = null;
        $this->cp = null;
        $this->ville = null;
        $this->path_fr = null;
        $this->path_ar = null;
        $this->id_region = null;
        $this->id_province = null;
        $this->id_commune = null;
        $this->commune = null;
        $this->id_pays = null;
        $this->sigle_fr = null;
        $this->sigle_ar = null;
        $this->path_sigle_fr = null;
        $this->path_sigle_ar = null;
        $this->entite_visible_requerant = null;
        $this->id_entite_reception = null;
        $this->niveau = null;
        $this->code_min = null;
        $this->ids_entite_en_copie = null;
        $this->nom_domaine = null;
        $this->acronyme = null;
        $this->supprime = null;
        $this->entite_traitement = null;
        $this->entites_autorisees = null;
        $this->calcul_entites_autorisees = null;
        $this->id_entite_affectation_automatique = null;
        $this->id_entite_relance = null;
        $this->code_entite = null;
        $this->telephones_centre_appel = null;
        $this->horaire_centre_appel_ar = null;
        $this->horaire_centre_appel_fr = null;
        $this->date_modification = null;
        $this->id_entite_recours = null;
        $this->identifiant_entite_reception_ws = null;
        $this->id_socle = null;
        $this->id_externe = null;
        $this->increment = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EntitePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
