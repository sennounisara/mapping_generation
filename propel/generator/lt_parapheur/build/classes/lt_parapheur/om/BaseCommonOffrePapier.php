<?php


/**
 * Base class that represents a row from the 'Offre_papier' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonOffrePapier extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonOffrePapierPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonOffrePapierPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the consultation_ref field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the nom_entreprise field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_entreprise;

    /**
     * The value for the date_depot field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $date_depot;

    /**
     * The value for the external_serial field.
     * @var        string
     */
    protected $external_serial;

    /**
     * The value for the internal_serial field.
     * @var        string
     */
    protected $internal_serial;

    /**
     * The value for the offre_selectionnee field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $offre_selectionnee;

    /**
     * The value for the nom field.
     * @var        string
     */
    protected $nom;

    /**
     * The value for the prenom field.
     * @var        string
     */
    protected $prenom;

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
     * The value for the code_postal field.
     * @var        string
     */
    protected $code_postal;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the pays field.
     * @var        string
     */
    protected $pays;

    /**
     * The value for the acronyme_pays field.
     * @var        string
     */
    protected $acronyme_pays;

    /**
     * The value for the siret field.
     * @var        string
     */
    protected $siret;

    /**
     * The value for the identifiant_national field.
     * @var        string
     */
    protected $identifiant_national;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the observation field.
     * @var        string
     */
    protected $observation;

    /**
     * The value for the date_annulation field.
     * @var        string
     */
    protected $date_annulation;

    /**
     * The value for the depot_annule field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $depot_annule;

    /**
     * The value for the offre_variante field.
     * @var        string
     */
    protected $offre_variante;

    /**
     * The value for the statut_offre_papier field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $statut_offre_papier;

    /**
     * The value for the numero_reponse field.
     * @var        int
     */
    protected $numero_reponse;

    /**
     * The value for the nom_agent_ouverture field.
     * @var        string
     */
    protected $nom_agent_ouverture;

    /**
     * The value for the agent_id_ouverture field.
     * @var        int
     */
    protected $agent_id_ouverture;

    /**
     * The value for the dateheure_ouverture field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $dateheure_ouverture;

    /**
     * The value for the ifu_entreprise field.
     * @var        string
     */
    protected $ifu_entreprise;

    /**
     * The value for the type_entreprise field.
     * @var        string
     */
    protected $type_entreprise;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultation;

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
        $this->organisme = '';
        $this->consultation_ref = 0;
        $this->nom_entreprise = '';
        $this->date_depot = NULL;
        $this->offre_selectionnee = 0;
        $this->depot_annule = '0';
        $this->statut_offre_papier = 1;
        $this->dateheure_ouverture = '0000-00-00 00:00:00';
    }

    /**
     * Initializes internal state of BaseCommonOffrePapier object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [nom_entreprise] column value.
     * 
     * @return string
     */
    public function getNomEntreprise()
    {

        return $this->nom_entreprise;
    }

    /**
     * Get the [optionally formatted] temporal [date_depot] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDepot($format = 'Y-m-d H:i:s')
    {
        if ($this->date_depot === null) {
            return null;
        }

        if ($this->date_depot === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_depot);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_depot, true), $x);
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
     * Get the [external_serial] column value.
     * 
     * @return string
     */
    public function getExternalSerial()
    {

        return $this->external_serial;
    }

    /**
     * Get the [internal_serial] column value.
     * 
     * @return string
     */
    public function getInternalSerial()
    {

        return $this->internal_serial;
    }

    /**
     * Get the [offre_selectionnee] column value.
     * 
     * @return int
     */
    public function getOffreSelectionnee()
    {

        return $this->offre_selectionnee;
    }

    /**
     * Get the [nom] column value.
     * 
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * Get the [prenom] column value.
     * 
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
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
     * Get the [code_postal] column value.
     * 
     * @return string
     */
    public function getCodePostal()
    {

        return $this->code_postal;
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
     * Get the [pays] column value.
     * 
     * @return string
     */
    public function getPays()
    {

        return $this->pays;
    }

    /**
     * Get the [acronyme_pays] column value.
     * 
     * @return string
     */
    public function getAcronymePays()
    {

        return $this->acronyme_pays;
    }

    /**
     * Get the [siret] column value.
     * 
     * @return string
     */
    public function getSiret()
    {

        return $this->siret;
    }

    /**
     * Get the [identifiant_national] column value.
     * 
     * @return string
     */
    public function getIdentifiantNational()
    {

        return $this->identifiant_national;
    }

    /**
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [observation] column value.
     * 
     * @return string
     */
    public function getObservation()
    {

        return $this->observation;
    }

    /**
     * Get the [date_annulation] column value.
     * 
     * @return string
     */
    public function getDateAnnulation()
    {

        return $this->date_annulation;
    }

    /**
     * Get the [depot_annule] column value.
     * 
     * @return string
     */
    public function getDepotAnnule()
    {

        return $this->depot_annule;
    }

    /**
     * Get the [offre_variante] column value.
     * 
     * @return string
     */
    public function getOffreVariante()
    {

        return $this->offre_variante;
    }

    /**
     * Get the [statut_offre_papier] column value.
     * 
     * @return int
     */
    public function getStatutOffrePapier()
    {

        return $this->statut_offre_papier;
    }

    /**
     * Get the [numero_reponse] column value.
     * 
     * @return int
     */
    public function getNumeroReponse()
    {

        return $this->numero_reponse;
    }

    /**
     * Get the [nom_agent_ouverture] column value.
     * 
     * @return string
     */
    public function getNomAgentOuverture()
    {

        return $this->nom_agent_ouverture;
    }

    /**
     * Get the [agent_id_ouverture] column value.
     * 
     * @return int
     */
    public function getAgentIdOuverture()
    {

        return $this->agent_id_ouverture;
    }

    /**
     * Get the [dateheure_ouverture] column value.
     * 
     * @return string
     */
    public function getDateheureOuverture()
    {

        return $this->dateheure_ouverture;
    }

    /**
     * Get the [ifu_entreprise] column value.
     * 
     * @return string
     */
    public function getIfuEntreprise()
    {

        return $this->ifu_entreprise;
    }

    /**
     * Get the [type_entreprise] column value.
     * 
     * @return string
     */
    public function getTypeEntreprise()
    {

        return $this->type_entreprise;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::ORGANISME;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [nom_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setNomEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_entreprise !== $v) {
            $this->nom_entreprise = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::NOM_ENTREPRISE;
        }


        return $this;
    } // setNomEntreprise()

    /**
     * Sets the value of [date_depot] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setDateDepot($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_depot !== null || $dt !== null) {
            $currentDateAsString = ($this->date_depot !== null && $tmpDt = new DateTime($this->date_depot)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->date_depot = $newDateAsString;
                $this->modifiedColumns[] = CommonOffrePapierPeer::DATE_DEPOT;
            }
        } // if either are not null


        return $this;
    } // setDateDepot()

    /**
     * Set the value of [external_serial] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setExternalSerial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->external_serial !== $v) {
            $this->external_serial = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::EXTERNAL_SERIAL;
        }


        return $this;
    } // setExternalSerial()

    /**
     * Set the value of [internal_serial] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setInternalSerial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->internal_serial !== $v) {
            $this->internal_serial = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::INTERNAL_SERIAL;
        }


        return $this;
    } // setInternalSerial()

    /**
     * Set the value of [offre_selectionnee] column.
     * 
     * @param int $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setOffreSelectionnee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->offre_selectionnee !== $v) {
            $this->offre_selectionnee = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::OFFRE_SELECTIONNEE;
        }


        return $this;
    } // setOffreSelectionnee()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [adresse2] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setAdresse2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2 !== $v) {
            $this->adresse2 = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::ADRESSE2;
        }


        return $this;
    } // setAdresse2()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [code_postal] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setCodePostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_postal !== $v) {
            $this->code_postal = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::CODE_POSTAL;
        }


        return $this;
    } // setCodePostal()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [acronyme_pays] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setAcronymePays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme_pays !== $v) {
            $this->acronyme_pays = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::ACRONYME_PAYS;
        }


        return $this;
    } // setAcronymePays()

    /**
     * Set the value of [siret] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setSiret($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siret !== $v) {
            $this->siret = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::SIRET;
        }


        return $this;
    } // setSiret()

    /**
     * Set the value of [identifiant_national] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setIdentifiantNational($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_national !== $v) {
            $this->identifiant_national = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::IDENTIFIANT_NATIONAL;
        }


        return $this;
    } // setIdentifiantNational()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [observation] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setObservation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->observation !== $v) {
            $this->observation = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::OBSERVATION;
        }


        return $this;
    } // setObservation()

    /**
     * Set the value of [date_annulation] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setDateAnnulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_annulation !== $v) {
            $this->date_annulation = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::DATE_ANNULATION;
        }


        return $this;
    } // setDateAnnulation()

    /**
     * Set the value of [depot_annule] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setDepotAnnule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depot_annule !== $v) {
            $this->depot_annule = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::DEPOT_ANNULE;
        }


        return $this;
    } // setDepotAnnule()

    /**
     * Set the value of [offre_variante] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setOffreVariante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->offre_variante !== $v) {
            $this->offre_variante = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::OFFRE_VARIANTE;
        }


        return $this;
    } // setOffreVariante()

    /**
     * Set the value of [statut_offre_papier] column.
     * 
     * @param int $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setStatutOffrePapier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_offre_papier !== $v) {
            $this->statut_offre_papier = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::STATUT_OFFRE_PAPIER;
        }


        return $this;
    } // setStatutOffrePapier()

    /**
     * Set the value of [numero_reponse] column.
     * 
     * @param int $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setNumeroReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero_reponse !== $v) {
            $this->numero_reponse = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::NUMERO_REPONSE;
        }


        return $this;
    } // setNumeroReponse()

    /**
     * Set the value of [nom_agent_ouverture] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setNomAgentOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_ouverture !== $v) {
            $this->nom_agent_ouverture = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::NOM_AGENT_OUVERTURE;
        }


        return $this;
    } // setNomAgentOuverture()

    /**
     * Set the value of [agent_id_ouverture] column.
     * 
     * @param int $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setAgentIdOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agent_id_ouverture !== $v) {
            $this->agent_id_ouverture = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::AGENT_ID_OUVERTURE;
        }


        return $this;
    } // setAgentIdOuverture()

    /**
     * Set the value of [dateheure_ouverture] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setDateheureOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dateheure_ouverture !== $v) {
            $this->dateheure_ouverture = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::DATEHEURE_OUVERTURE;
        }


        return $this;
    } // setDateheureOuverture()

    /**
     * Set the value of [ifu_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setIfuEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ifu_entreprise !== $v) {
            $this->ifu_entreprise = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::IFU_ENTREPRISE;
        }


        return $this;
    } // setIfuEntreprise()

    /**
     * Set the value of [type_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonOffrePapier The current object (for fluent API support)
     */
    public function setTypeEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_entreprise !== $v) {
            $this->type_entreprise = $v;
            $this->modifiedColumns[] = CommonOffrePapierPeer::TYPE_ENTREPRISE;
        }


        return $this;
    } // setTypeEntreprise()

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
            if ($this->organisme !== '') {
                return false;
            }

            if ($this->consultation_ref !== 0) {
                return false;
            }

            if ($this->nom_entreprise !== '') {
                return false;
            }

            if ($this->date_depot !== NULL) {
                return false;
            }

            if ($this->offre_selectionnee !== 0) {
                return false;
            }

            if ($this->depot_annule !== '0') {
                return false;
            }

            if ($this->statut_offre_papier !== 1) {
                return false;
            }

            if ($this->dateheure_ouverture !== '0000-00-00 00:00:00') {
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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->consultation_ref = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->nom_entreprise = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->date_depot = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->external_serial = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->internal_serial = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->offre_selectionnee = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->nom = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->prenom = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->adresse = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->adresse2 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->telephone = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->fax = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->code_postal = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->ville = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->pays = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->acronyme_pays = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->siret = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->identifiant_national = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->email = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->observation = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->date_annulation = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->depot_annule = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->offre_variante = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->statut_offre_papier = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->numero_reponse = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->nom_agent_ouverture = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->agent_id_ouverture = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->dateheure_ouverture = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->ifu_entreprise = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->type_entreprise = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 32; // 32 = CommonOffrePapierPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonOffrePapier object", $e);
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

        if ($this->aCommonConsultation !== null && $this->organisme !== $this->aCommonConsultation->getOrganisme()) {
            $this->aCommonConsultation = null;
        }
        if ($this->aCommonConsultation !== null && $this->consultation_ref !== $this->aCommonConsultation->getReference()) {
            $this->aCommonConsultation = null;
        }
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
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonOffrePapierPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonOffrePapierQuery::create()
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
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonOffrePapierPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonConsultation !== null) {
                if ($this->aCommonConsultation->isModified() || $this->aCommonConsultation->isNew()) {
                    $affectedRows += $this->aCommonConsultation->save($con);
                }
                $this->setCommonConsultation($this->aCommonConsultation);
            }

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

        $this->modifiedColumns[] = CommonOffrePapierPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonOffrePapierPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonOffrePapierPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::NOM_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_entreprise`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::DATE_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`date_depot`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::EXTERNAL_SERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`external_serial`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::INTERNAL_SERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`internal_serial`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::OFFRE_SELECTIONNEE)) {
            $modifiedColumns[':p' . $index++]  = '`offre_selectionnee`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`code_postal`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`pays`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::ACRONYME_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`acronyme_pays`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::SIRET)) {
            $modifiedColumns[':p' . $index++]  = '`siret`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::IDENTIFIANT_NATIONAL)) {
            $modifiedColumns[':p' . $index++]  = '`identifiant_national`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::OBSERVATION)) {
            $modifiedColumns[':p' . $index++]  = '`observation`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::DATE_ANNULATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_annulation`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::DEPOT_ANNULE)) {
            $modifiedColumns[':p' . $index++]  = '`depot_annule`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::OFFRE_VARIANTE)) {
            $modifiedColumns[':p' . $index++]  = '`offre_variante`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::STATUT_OFFRE_PAPIER)) {
            $modifiedColumns[':p' . $index++]  = '`statut_offre_papier`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::NUMERO_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_reponse`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::NOM_AGENT_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent_ouverture`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::AGENT_ID_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`agent_id_ouverture`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::DATEHEURE_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`dateheure_ouverture`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::IFU_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`ifu_entreprise`';
        }
        if ($this->isColumnModified(CommonOffrePapierPeer::TYPE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`type_entreprise`';
        }

        $sql = sprintf(
            'INSERT INTO `Offre_papier` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`nom_entreprise`':						
                        $stmt->bindValue($identifier, $this->nom_entreprise, PDO::PARAM_STR);
                        break;
                    case '`date_depot`':						
                        $stmt->bindValue($identifier, $this->date_depot, PDO::PARAM_STR);
                        break;
                    case '`external_serial`':						
                        $stmt->bindValue($identifier, $this->external_serial, PDO::PARAM_STR);
                        break;
                    case '`internal_serial`':						
                        $stmt->bindValue($identifier, $this->internal_serial, PDO::PARAM_STR);
                        break;
                    case '`offre_selectionnee`':						
                        $stmt->bindValue($identifier, $this->offre_selectionnee, PDO::PARAM_INT);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`adresse2`':						
                        $stmt->bindValue($identifier, $this->adresse2, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`code_postal`':						
                        $stmt->bindValue($identifier, $this->code_postal, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`pays`':						
                        $stmt->bindValue($identifier, $this->pays, PDO::PARAM_STR);
                        break;
                    case '`acronyme_pays`':						
                        $stmt->bindValue($identifier, $this->acronyme_pays, PDO::PARAM_STR);
                        break;
                    case '`siret`':						
                        $stmt->bindValue($identifier, $this->siret, PDO::PARAM_STR);
                        break;
                    case '`identifiant_national`':						
                        $stmt->bindValue($identifier, $this->identifiant_national, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`observation`':						
                        $stmt->bindValue($identifier, $this->observation, PDO::PARAM_STR);
                        break;
                    case '`date_annulation`':						
                        $stmt->bindValue($identifier, $this->date_annulation, PDO::PARAM_STR);
                        break;
                    case '`depot_annule`':						
                        $stmt->bindValue($identifier, $this->depot_annule, PDO::PARAM_STR);
                        break;
                    case '`offre_variante`':						
                        $stmt->bindValue($identifier, $this->offre_variante, PDO::PARAM_STR);
                        break;
                    case '`statut_offre_papier`':						
                        $stmt->bindValue($identifier, $this->statut_offre_papier, PDO::PARAM_INT);
                        break;
                    case '`numero_reponse`':						
                        $stmt->bindValue($identifier, $this->numero_reponse, PDO::PARAM_INT);
                        break;
                    case '`nom_agent_ouverture`':						
                        $stmt->bindValue($identifier, $this->nom_agent_ouverture, PDO::PARAM_STR);
                        break;
                    case '`agent_id_ouverture`':						
                        $stmt->bindValue($identifier, $this->agent_id_ouverture, PDO::PARAM_INT);
                        break;
                    case '`dateheure_ouverture`':						
                        $stmt->bindValue($identifier, $this->dateheure_ouverture, PDO::PARAM_STR);
                        break;
                    case '`ifu_entreprise`':						
                        $stmt->bindValue($identifier, $this->ifu_entreprise, PDO::PARAM_STR);
                        break;
                    case '`type_entreprise`':						
                        $stmt->bindValue($identifier, $this->type_entreprise, PDO::PARAM_STR);
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
        $this->setId($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonConsultation !== null) {
                if (!$this->aCommonConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonOffrePapierPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonOffrePapierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getId();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getConsultationRef();
                break;
            case 3:
                return $this->getNomEntreprise();
                break;
            case 4:
                return $this->getDateDepot();
                break;
            case 5:
                return $this->getExternalSerial();
                break;
            case 6:
                return $this->getInternalSerial();
                break;
            case 7:
                return $this->getOffreSelectionnee();
                break;
            case 8:
                return $this->getNom();
                break;
            case 9:
                return $this->getPrenom();
                break;
            case 10:
                return $this->getAdresse();
                break;
            case 11:
                return $this->getAdresse2();
                break;
            case 12:
                return $this->getTelephone();
                break;
            case 13:
                return $this->getFax();
                break;
            case 14:
                return $this->getCodePostal();
                break;
            case 15:
                return $this->getVille();
                break;
            case 16:
                return $this->getPays();
                break;
            case 17:
                return $this->getAcronymePays();
                break;
            case 18:
                return $this->getSiret();
                break;
            case 19:
                return $this->getIdentifiantNational();
                break;
            case 20:
                return $this->getEmail();
                break;
            case 21:
                return $this->getObservation();
                break;
            case 22:
                return $this->getDateAnnulation();
                break;
            case 23:
                return $this->getDepotAnnule();
                break;
            case 24:
                return $this->getOffreVariante();
                break;
            case 25:
                return $this->getStatutOffrePapier();
                break;
            case 26:
                return $this->getNumeroReponse();
                break;
            case 27:
                return $this->getNomAgentOuverture();
                break;
            case 28:
                return $this->getAgentIdOuverture();
                break;
            case 29:
                return $this->getDateheureOuverture();
                break;
            case 30:
                return $this->getIfuEntreprise();
                break;
            case 31:
                return $this->getTypeEntreprise();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['CommonOffrePapier'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonOffrePapier'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonOffrePapierPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getConsultationRef(),
            $keys[3] => $this->getNomEntreprise(),
            $keys[4] => $this->getDateDepot(),
            $keys[5] => $this->getExternalSerial(),
            $keys[6] => $this->getInternalSerial(),
            $keys[7] => $this->getOffreSelectionnee(),
            $keys[8] => $this->getNom(),
            $keys[9] => $this->getPrenom(),
            $keys[10] => $this->getAdresse(),
            $keys[11] => $this->getAdresse2(),
            $keys[12] => $this->getTelephone(),
            $keys[13] => $this->getFax(),
            $keys[14] => $this->getCodePostal(),
            $keys[15] => $this->getVille(),
            $keys[16] => $this->getPays(),
            $keys[17] => $this->getAcronymePays(),
            $keys[18] => $this->getSiret(),
            $keys[19] => $this->getIdentifiantNational(),
            $keys[20] => $this->getEmail(),
            $keys[21] => $this->getObservation(),
            $keys[22] => $this->getDateAnnulation(),
            $keys[23] => $this->getDepotAnnule(),
            $keys[24] => $this->getOffreVariante(),
            $keys[25] => $this->getStatutOffrePapier(),
            $keys[26] => $this->getNumeroReponse(),
            $keys[27] => $this->getNomAgentOuverture(),
            $keys[28] => $this->getAgentIdOuverture(),
            $keys[29] => $this->getDateheureOuverture(),
            $keys[30] => $this->getIfuEntreprise(),
            $keys[31] => $this->getTypeEntreprise(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultation) {
                $result['CommonConsultation'] = $this->aCommonConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

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
        $pos = CommonOffrePapierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setId($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setConsultationRef($value);
                break;
            case 3:
                $this->setNomEntreprise($value);
                break;
            case 4:
                $this->setDateDepot($value);
                break;
            case 5:
                $this->setExternalSerial($value);
                break;
            case 6:
                $this->setInternalSerial($value);
                break;
            case 7:
                $this->setOffreSelectionnee($value);
                break;
            case 8:
                $this->setNom($value);
                break;
            case 9:
                $this->setPrenom($value);
                break;
            case 10:
                $this->setAdresse($value);
                break;
            case 11:
                $this->setAdresse2($value);
                break;
            case 12:
                $this->setTelephone($value);
                break;
            case 13:
                $this->setFax($value);
                break;
            case 14:
                $this->setCodePostal($value);
                break;
            case 15:
                $this->setVille($value);
                break;
            case 16:
                $this->setPays($value);
                break;
            case 17:
                $this->setAcronymePays($value);
                break;
            case 18:
                $this->setSiret($value);
                break;
            case 19:
                $this->setIdentifiantNational($value);
                break;
            case 20:
                $this->setEmail($value);
                break;
            case 21:
                $this->setObservation($value);
                break;
            case 22:
                $this->setDateAnnulation($value);
                break;
            case 23:
                $this->setDepotAnnule($value);
                break;
            case 24:
                $this->setOffreVariante($value);
                break;
            case 25:
                $this->setStatutOffrePapier($value);
                break;
            case 26:
                $this->setNumeroReponse($value);
                break;
            case 27:
                $this->setNomAgentOuverture($value);
                break;
            case 28:
                $this->setAgentIdOuverture($value);
                break;
            case 29:
                $this->setDateheureOuverture($value);
                break;
            case 30:
                $this->setIfuEntreprise($value);
                break;
            case 31:
                $this->setTypeEntreprise($value);
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
        $keys = CommonOffrePapierPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNomEntreprise($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDateDepot($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setExternalSerial($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setInternalSerial($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOffreSelectionnee($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNom($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPrenom($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAdresse($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAdresse2($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTelephone($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFax($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCodePostal($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setVille($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPays($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAcronymePays($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSiret($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setIdentifiantNational($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEmail($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setObservation($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDateAnnulation($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDepotAnnule($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setOffreVariante($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setStatutOffrePapier($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setNumeroReponse($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setNomAgentOuverture($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setAgentIdOuverture($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDateheureOuverture($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setIfuEntreprise($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setTypeEntreprise($arr[$keys[31]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonOffrePapierPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonOffrePapierPeer::ID)) $criteria->add(CommonOffrePapierPeer::ID, $this->id);
        if ($this->isColumnModified(CommonOffrePapierPeer::ORGANISME)) $criteria->add(CommonOffrePapierPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonOffrePapierPeer::CONSULTATION_REF)) $criteria->add(CommonOffrePapierPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonOffrePapierPeer::NOM_ENTREPRISE)) $criteria->add(CommonOffrePapierPeer::NOM_ENTREPRISE, $this->nom_entreprise);
        if ($this->isColumnModified(CommonOffrePapierPeer::DATE_DEPOT)) $criteria->add(CommonOffrePapierPeer::DATE_DEPOT, $this->date_depot);
        if ($this->isColumnModified(CommonOffrePapierPeer::EXTERNAL_SERIAL)) $criteria->add(CommonOffrePapierPeer::EXTERNAL_SERIAL, $this->external_serial);
        if ($this->isColumnModified(CommonOffrePapierPeer::INTERNAL_SERIAL)) $criteria->add(CommonOffrePapierPeer::INTERNAL_SERIAL, $this->internal_serial);
        if ($this->isColumnModified(CommonOffrePapierPeer::OFFRE_SELECTIONNEE)) $criteria->add(CommonOffrePapierPeer::OFFRE_SELECTIONNEE, $this->offre_selectionnee);
        if ($this->isColumnModified(CommonOffrePapierPeer::NOM)) $criteria->add(CommonOffrePapierPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonOffrePapierPeer::PRENOM)) $criteria->add(CommonOffrePapierPeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonOffrePapierPeer::ADRESSE)) $criteria->add(CommonOffrePapierPeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonOffrePapierPeer::ADRESSE2)) $criteria->add(CommonOffrePapierPeer::ADRESSE2, $this->adresse2);
        if ($this->isColumnModified(CommonOffrePapierPeer::TELEPHONE)) $criteria->add(CommonOffrePapierPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonOffrePapierPeer::FAX)) $criteria->add(CommonOffrePapierPeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonOffrePapierPeer::CODE_POSTAL)) $criteria->add(CommonOffrePapierPeer::CODE_POSTAL, $this->code_postal);
        if ($this->isColumnModified(CommonOffrePapierPeer::VILLE)) $criteria->add(CommonOffrePapierPeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonOffrePapierPeer::PAYS)) $criteria->add(CommonOffrePapierPeer::PAYS, $this->pays);
        if ($this->isColumnModified(CommonOffrePapierPeer::ACRONYME_PAYS)) $criteria->add(CommonOffrePapierPeer::ACRONYME_PAYS, $this->acronyme_pays);
        if ($this->isColumnModified(CommonOffrePapierPeer::SIRET)) $criteria->add(CommonOffrePapierPeer::SIRET, $this->siret);
        if ($this->isColumnModified(CommonOffrePapierPeer::IDENTIFIANT_NATIONAL)) $criteria->add(CommonOffrePapierPeer::IDENTIFIANT_NATIONAL, $this->identifiant_national);
        if ($this->isColumnModified(CommonOffrePapierPeer::EMAIL)) $criteria->add(CommonOffrePapierPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonOffrePapierPeer::OBSERVATION)) $criteria->add(CommonOffrePapierPeer::OBSERVATION, $this->observation);
        if ($this->isColumnModified(CommonOffrePapierPeer::DATE_ANNULATION)) $criteria->add(CommonOffrePapierPeer::DATE_ANNULATION, $this->date_annulation);
        if ($this->isColumnModified(CommonOffrePapierPeer::DEPOT_ANNULE)) $criteria->add(CommonOffrePapierPeer::DEPOT_ANNULE, $this->depot_annule);
        if ($this->isColumnModified(CommonOffrePapierPeer::OFFRE_VARIANTE)) $criteria->add(CommonOffrePapierPeer::OFFRE_VARIANTE, $this->offre_variante);
        if ($this->isColumnModified(CommonOffrePapierPeer::STATUT_OFFRE_PAPIER)) $criteria->add(CommonOffrePapierPeer::STATUT_OFFRE_PAPIER, $this->statut_offre_papier);
        if ($this->isColumnModified(CommonOffrePapierPeer::NUMERO_REPONSE)) $criteria->add(CommonOffrePapierPeer::NUMERO_REPONSE, $this->numero_reponse);
        if ($this->isColumnModified(CommonOffrePapierPeer::NOM_AGENT_OUVERTURE)) $criteria->add(CommonOffrePapierPeer::NOM_AGENT_OUVERTURE, $this->nom_agent_ouverture);
        if ($this->isColumnModified(CommonOffrePapierPeer::AGENT_ID_OUVERTURE)) $criteria->add(CommonOffrePapierPeer::AGENT_ID_OUVERTURE, $this->agent_id_ouverture);
        if ($this->isColumnModified(CommonOffrePapierPeer::DATEHEURE_OUVERTURE)) $criteria->add(CommonOffrePapierPeer::DATEHEURE_OUVERTURE, $this->dateheure_ouverture);
        if ($this->isColumnModified(CommonOffrePapierPeer::IFU_ENTREPRISE)) $criteria->add(CommonOffrePapierPeer::IFU_ENTREPRISE, $this->ifu_entreprise);
        if ($this->isColumnModified(CommonOffrePapierPeer::TYPE_ENTREPRISE)) $criteria->add(CommonOffrePapierPeer::TYPE_ENTREPRISE, $this->type_entreprise);

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
        $criteria = new Criteria(CommonOffrePapierPeer::DATABASE_NAME);
        $criteria->add(CommonOffrePapierPeer::ID, $this->id);
        $criteria->add(CommonOffrePapierPeer::ORGANISME, $this->organisme);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getId();
        $pks[1] = $this->getOrganisme();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setId($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonOffrePapier (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setNomEntreprise($this->getNomEntreprise());
        $copyObj->setDateDepot($this->getDateDepot());
        $copyObj->setExternalSerial($this->getExternalSerial());
        $copyObj->setInternalSerial($this->getInternalSerial());
        $copyObj->setOffreSelectionnee($this->getOffreSelectionnee());
        $copyObj->setNom($this->getNom());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setAdresse2($this->getAdresse2());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setCodePostal($this->getCodePostal());
        $copyObj->setVille($this->getVille());
        $copyObj->setPays($this->getPays());
        $copyObj->setAcronymePays($this->getAcronymePays());
        $copyObj->setSiret($this->getSiret());
        $copyObj->setIdentifiantNational($this->getIdentifiantNational());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setObservation($this->getObservation());
        $copyObj->setDateAnnulation($this->getDateAnnulation());
        $copyObj->setDepotAnnule($this->getDepotAnnule());
        $copyObj->setOffreVariante($this->getOffreVariante());
        $copyObj->setStatutOffrePapier($this->getStatutOffrePapier());
        $copyObj->setNumeroReponse($this->getNumeroReponse());
        $copyObj->setNomAgentOuverture($this->getNomAgentOuverture());
        $copyObj->setAgentIdOuverture($this->getAgentIdOuverture());
        $copyObj->setDateheureOuverture($this->getDateheureOuverture());
        $copyObj->setIfuEntreprise($this->getIfuEntreprise());
        $copyObj->setTypeEntreprise($this->getTypeEntreprise());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonOffrePapier Clone of current object.
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
     * @return CommonOffrePapierPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonOffrePapierPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonOffrePapier The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setConsultationRef(0);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonOffrePapier($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultation The associated CommonConsultation object.
     * @throws PropelException
     */
    public function getCommonConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultation === null && (($this->organisme !== "" && $this->organisme !== null) && $this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()->findPk(array($this->consultation_ref, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonOffrePapiers($this);
             */
        }

        return $this->aCommonConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->consultation_ref = null;
        $this->nom_entreprise = null;
        $this->date_depot = null;
        $this->external_serial = null;
        $this->internal_serial = null;
        $this->offre_selectionnee = null;
        $this->nom = null;
        $this->prenom = null;
        $this->adresse = null;
        $this->adresse2 = null;
        $this->telephone = null;
        $this->fax = null;
        $this->code_postal = null;
        $this->ville = null;
        $this->pays = null;
        $this->acronyme_pays = null;
        $this->siret = null;
        $this->identifiant_national = null;
        $this->email = null;
        $this->observation = null;
        $this->date_annulation = null;
        $this->depot_annule = null;
        $this->offre_variante = null;
        $this->statut_offre_papier = null;
        $this->numero_reponse = null;
        $this->nom_agent_ouverture = null;
        $this->agent_id_ouverture = null;
        $this->dateheure_ouverture = null;
        $this->ifu_entreprise = null;
        $this->type_entreprise = null;
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
            if ($this->aCommonConsultation instanceof Persistent) {
              $this->aCommonConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonOffrePapierPeer::DEFAULT_STRING_FORMAT);
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
