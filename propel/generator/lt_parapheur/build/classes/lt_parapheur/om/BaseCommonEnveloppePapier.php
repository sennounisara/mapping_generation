<?php


/**
 * Base class that represents a row from the 'Enveloppe_papier' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnveloppePapier extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEnveloppePapierPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEnveloppePapierPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_enveloppe_papier field.
     * @var        int
     */
    protected $id_enveloppe_papier;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the offre_papier_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $offre_papier_id;

    /**
     * The value for the statut field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $statut;

    /**
     * The value for the supprime field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprime;

    /**
     * The value for the cryptage field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $cryptage;

    /**
     * The value for the is_send field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $is_send;

    /**
     * The value for the type_env field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_env;

    /**
     * The value for the sous_pli field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $sous_pli;

    /**
     * The value for the champs_optionnels field.
     * @var        string
     */
    protected $champs_optionnels;

    /**
     * The value for the agent_id_ouverture field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $agent_id_ouverture;

    /**
     * The value for the dateheure_ouverture field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $dateheure_ouverture;

    /**
     * The value for the statut_enveloppe field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $statut_enveloppe;

    /**
     * The value for the enveloppe_postule field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $enveloppe_postule;

    /**
     * The value for the nom_agent_ouverture field.
     * @var        string
     */
    protected $nom_agent_ouverture;

    /**
     * The value for the montant field.
     * @var        double
     */
    protected $montant;

    /**
     * The value for the montant_apres_modification field.
     * @var        double
     */
    protected $montant_apres_modification;

    /**
     * The value for the type_attributaire field.
     * @var        string
     */
    protected $type_attributaire;

    /**
     * The value for the devise field.
     * @var        string
     */
    protected $devise;

    /**
     * The value for the rabais_preference_national field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $rabais_preference_national;

    /**
     * The value for the type_correction_montant field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $type_correction_montant;

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
        $this->offre_papier_id = 0;
        $this->statut = 0;
        $this->supprime = '0';
        $this->cryptage = '1';
        $this->is_send = 1;
        $this->type_env = 0;
        $this->sous_pli = 0;
        $this->agent_id_ouverture = 0;
        $this->dateheure_ouverture = NULL;
        $this->statut_enveloppe = 1;
        $this->enveloppe_postule = '1';
        $this->rabais_preference_national = '0';
        $this->type_correction_montant = '';
    }

    /**
     * Initializes internal state of BaseCommonEnveloppePapier object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_enveloppe_papier] column value.
     * 
     * @return int
     */
    public function getIdEnveloppePapier()
    {

        return $this->id_enveloppe_papier;
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
     * Get the [offre_papier_id] column value.
     * 
     * @return int
     */
    public function getOffrePapierId()
    {

        return $this->offre_papier_id;
    }

    /**
     * Get the [statut] column value.
     * 
     * @return int
     */
    public function getStatut()
    {

        return $this->statut;
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
     * Get the [cryptage] column value.
     * 
     * @return string
     */
    public function getCryptage()
    {

        return $this->cryptage;
    }

    /**
     * Get the [is_send] column value.
     * 
     * @return int
     */
    public function getIsSend()
    {

        return $this->is_send;
    }

    /**
     * Get the [type_env] column value.
     * 
     * @return int
     */
    public function getTypeEnv()
    {

        return $this->type_env;
    }

    /**
     * Get the [sous_pli] column value.
     * 
     * @return int
     */
    public function getSousPli()
    {

        return $this->sous_pli;
    }

    /**
     * Get the [champs_optionnels] column value.
     * 
     * @return string
     */
    public function getChampsOptionnels()
    {

        return $this->champs_optionnels;
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
     * Get the [optionally formatted] temporal [dateheure_ouverture] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateheureOuverture($format = 'Y-m-d H:i:s')
    {
        if ($this->dateheure_ouverture === null) {
            return null;
        }

        if ($this->dateheure_ouverture === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateheure_ouverture);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateheure_ouverture, true), $x);
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
     * Get the [statut_enveloppe] column value.
     * 
     * @return int
     */
    public function getStatutEnveloppe()
    {

        return $this->statut_enveloppe;
    }

    /**
     * Get the [enveloppe_postule] column value.
     * 
     * @return string
     */
    public function getEnveloppePostule()
    {

        return $this->enveloppe_postule;
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
     * Get the [montant] column value.
     * 
     * @return double
     */
    public function getMontant()
    {

        return $this->montant;
    }

    /**
     * Get the [montant_apres_modification] column value.
     * 
     * @return double
     */
    public function getMontantApresModification()
    {

        return $this->montant_apres_modification;
    }

    /**
     * Get the [type_attributaire] column value.
     * 
     * @return string
     */
    public function getTypeAttributaire()
    {

        return $this->type_attributaire;
    }

    /**
     * Get the [devise] column value.
     * 
     * @return string
     */
    public function getDevise()
    {

        return $this->devise;
    }

    /**
     * Get the [rabais_preference_national] column value.
     * 
     * @return string
     */
    public function getRabaisPreferenceNational()
    {

        return $this->rabais_preference_national;
    }

    /**
     * Get the [type_correction_montant] column value.
     * 
     * @return string
     */
    public function getTypeCorrectionMontant()
    {

        return $this->type_correction_montant;
    }

    /**
     * Set the value of [id_enveloppe_papier] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setIdEnveloppePapier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_enveloppe_papier !== $v) {
            $this->id_enveloppe_papier = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER;
        }


        return $this;
    } // setIdEnveloppePapier()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [offre_papier_id] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setOffrePapierId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->offre_papier_id !== $v) {
            $this->offre_papier_id = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::OFFRE_PAPIER_ID;
        }


        return $this;
    } // setOffrePapierId()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [supprime] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setSupprime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprime !== $v) {
            $this->supprime = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::SUPPRIME;
        }


        return $this;
    } // setSupprime()

    /**
     * Set the value of [cryptage] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setCryptage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cryptage !== $v) {
            $this->cryptage = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::CRYPTAGE;
        }


        return $this;
    } // setCryptage()

    /**
     * Set the value of [is_send] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setIsSend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_send !== $v) {
            $this->is_send = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::IS_SEND;
        }


        return $this;
    } // setIsSend()

    /**
     * Set the value of [type_env] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setTypeEnv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_env !== $v) {
            $this->type_env = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::TYPE_ENV;
        }


        return $this;
    } // setTypeEnv()

    /**
     * Set the value of [sous_pli] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setSousPli($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sous_pli !== $v) {
            $this->sous_pli = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::SOUS_PLI;
        }


        return $this;
    } // setSousPli()

    /**
     * Set the value of [champs_optionnels] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setChampsOptionnels($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champs_optionnels !== $v) {
            $this->champs_optionnels = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::CHAMPS_OPTIONNELS;
        }


        return $this;
    } // setChampsOptionnels()

    /**
     * Set the value of [agent_id_ouverture] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setAgentIdOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agent_id_ouverture !== $v) {
            $this->agent_id_ouverture = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::AGENT_ID_OUVERTURE;
        }


        return $this;
    } // setAgentIdOuverture()

    /**
     * Sets the value of [dateheure_ouverture] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setDateheureOuverture($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateheure_ouverture !== null || $dt !== null) {
            $currentDateAsString = ($this->dateheure_ouverture !== null && $tmpDt = new DateTime($this->dateheure_ouverture)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->dateheure_ouverture = $newDateAsString;
                $this->modifiedColumns[] = CommonEnveloppePapierPeer::DATEHEURE_OUVERTURE;
            }
        } // if either are not null


        return $this;
    } // setDateheureOuverture()

    /**
     * Set the value of [statut_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setStatutEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_enveloppe !== $v) {
            $this->statut_enveloppe = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::STATUT_ENVELOPPE;
        }


        return $this;
    } // setStatutEnveloppe()

    /**
     * Set the value of [enveloppe_postule] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setEnveloppePostule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->enveloppe_postule !== $v) {
            $this->enveloppe_postule = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::ENVELOPPE_POSTULE;
        }


        return $this;
    } // setEnveloppePostule()

    /**
     * Set the value of [nom_agent_ouverture] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setNomAgentOuverture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_ouverture !== $v) {
            $this->nom_agent_ouverture = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::NOM_AGENT_OUVERTURE;
        }


        return $this;
    } // setNomAgentOuverture()

    /**
     * Set the value of [montant] column.
     * 
     * @param double $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setMontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant !== $v) {
            $this->montant = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::MONTANT;
        }


        return $this;
    } // setMontant()

    /**
     * Set the value of [montant_apres_modification] column.
     * 
     * @param double $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setMontantApresModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_apres_modification !== $v) {
            $this->montant_apres_modification = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::MONTANT_APRES_MODIFICATION;
        }


        return $this;
    } // setMontantApresModification()

    /**
     * Set the value of [type_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setTypeAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_attributaire !== $v) {
            $this->type_attributaire = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE;
        }


        return $this;
    } // setTypeAttributaire()

    /**
     * Set the value of [devise] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setDevise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->devise !== $v) {
            $this->devise = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::DEVISE;
        }


        return $this;
    } // setDevise()

    /**
     * Set the value of [rabais_preference_national] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setRabaisPreferenceNational($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rabais_preference_national !== $v) {
            $this->rabais_preference_national = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL;
        }


        return $this;
    } // setRabaisPreferenceNational()

    /**
     * Set the value of [type_correction_montant] column.
     * 
     * @param string $v new value
     * @return CommonEnveloppePapier The current object (for fluent API support)
     */
    public function setTypeCorrectionMontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_correction_montant !== $v) {
            $this->type_correction_montant = $v;
            $this->modifiedColumns[] = CommonEnveloppePapierPeer::TYPE_CORRECTION_MONTANT;
        }


        return $this;
    } // setTypeCorrectionMontant()

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

            if ($this->offre_papier_id !== 0) {
                return false;
            }

            if ($this->statut !== 0) {
                return false;
            }

            if ($this->supprime !== '0') {
                return false;
            }

            if ($this->cryptage !== '1') {
                return false;
            }

            if ($this->is_send !== 1) {
                return false;
            }

            if ($this->type_env !== 0) {
                return false;
            }

            if ($this->sous_pli !== 0) {
                return false;
            }

            if ($this->agent_id_ouverture !== 0) {
                return false;
            }

            if ($this->dateheure_ouverture !== NULL) {
                return false;
            }

            if ($this->statut_enveloppe !== 1) {
                return false;
            }

            if ($this->enveloppe_postule !== '1') {
                return false;
            }

            if ($this->rabais_preference_national !== '0') {
                return false;
            }

            if ($this->type_correction_montant !== '') {
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

            $this->id_enveloppe_papier = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->offre_papier_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->statut = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->supprime = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cryptage = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->is_send = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->type_env = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->sous_pli = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->champs_optionnels = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->agent_id_ouverture = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->dateheure_ouverture = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->statut_enveloppe = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->enveloppe_postule = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->nom_agent_ouverture = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->montant = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->montant_apres_modification = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->type_attributaire = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->devise = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->rabais_preference_national = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->type_correction_montant = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = CommonEnveloppePapierPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEnveloppePapier object", $e);
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
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEnveloppePapierPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEnveloppePapierQuery::create()
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
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonEnveloppePapierPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER;
        if (null !== $this->id_enveloppe_papier) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER)) {
            $modifiedColumns[':p' . $index++]  = '`id_enveloppe_papier`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::OFFRE_PAPIER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`offre_papier_id`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::SUPPRIME)) {
            $modifiedColumns[':p' . $index++]  = '`supprime`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::CRYPTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`cryptage`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::IS_SEND)) {
            $modifiedColumns[':p' . $index++]  = '`is_send`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::TYPE_ENV)) {
            $modifiedColumns[':p' . $index++]  = '`type_env`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::SOUS_PLI)) {
            $modifiedColumns[':p' . $index++]  = '`sous_pli`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::CHAMPS_OPTIONNELS)) {
            $modifiedColumns[':p' . $index++]  = '`champs_optionnels`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::AGENT_ID_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`agent_id_ouverture`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::DATEHEURE_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`dateheure_ouverture`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::STATUT_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`statut_enveloppe`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::ENVELOPPE_POSTULE)) {
            $modifiedColumns[':p' . $index++]  = '`enveloppe_postule`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::NOM_AGENT_OUVERTURE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent_ouverture`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::MONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`montant`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::MONTANT_APRES_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`montant_apres_modification`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`type_attributaire`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::DEVISE)) {
            $modifiedColumns[':p' . $index++]  = '`devise`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL)) {
            $modifiedColumns[':p' . $index++]  = '`rabais_preference_national`';
        }
        if ($this->isColumnModified(CommonEnveloppePapierPeer::TYPE_CORRECTION_MONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`type_correction_montant`';
        }

        $sql = sprintf(
            'INSERT INTO `Enveloppe_papier` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_enveloppe_papier`':						
                        $stmt->bindValue($identifier, $this->id_enveloppe_papier, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`offre_papier_id`':						
                        $stmt->bindValue($identifier, $this->offre_papier_id, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`supprime`':						
                        $stmt->bindValue($identifier, $this->supprime, PDO::PARAM_STR);
                        break;
                    case '`cryptage`':						
                        $stmt->bindValue($identifier, $this->cryptage, PDO::PARAM_STR);
                        break;
                    case '`is_send`':						
                        $stmt->bindValue($identifier, $this->is_send, PDO::PARAM_INT);
                        break;
                    case '`type_env`':						
                        $stmt->bindValue($identifier, $this->type_env, PDO::PARAM_INT);
                        break;
                    case '`sous_pli`':						
                        $stmt->bindValue($identifier, $this->sous_pli, PDO::PARAM_INT);
                        break;
                    case '`champs_optionnels`':						
                        $stmt->bindValue($identifier, $this->champs_optionnels, PDO::PARAM_STR);
                        break;
                    case '`agent_id_ouverture`':						
                        $stmt->bindValue($identifier, $this->agent_id_ouverture, PDO::PARAM_INT);
                        break;
                    case '`dateheure_ouverture`':						
                        $stmt->bindValue($identifier, $this->dateheure_ouverture, PDO::PARAM_STR);
                        break;
                    case '`statut_enveloppe`':						
                        $stmt->bindValue($identifier, $this->statut_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`enveloppe_postule`':						
                        $stmt->bindValue($identifier, $this->enveloppe_postule, PDO::PARAM_STR);
                        break;
                    case '`nom_agent_ouverture`':						
                        $stmt->bindValue($identifier, $this->nom_agent_ouverture, PDO::PARAM_STR);
                        break;
                    case '`montant`':						
                        $stmt->bindValue($identifier, $this->montant, PDO::PARAM_STR);
                        break;
                    case '`montant_apres_modification`':						
                        $stmt->bindValue($identifier, $this->montant_apres_modification, PDO::PARAM_STR);
                        break;
                    case '`type_attributaire`':						
                        $stmt->bindValue($identifier, $this->type_attributaire, PDO::PARAM_STR);
                        break;
                    case '`devise`':						
                        $stmt->bindValue($identifier, $this->devise, PDO::PARAM_STR);
                        break;
                    case '`rabais_preference_national`':						
                        $stmt->bindValue($identifier, $this->rabais_preference_national, PDO::PARAM_STR);
                        break;
                    case '`type_correction_montant`':						
                        $stmt->bindValue($identifier, $this->type_correction_montant, PDO::PARAM_STR);
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
        $this->setIdEnveloppePapier($pk);

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


            if (($retval = CommonEnveloppePapierPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonEnveloppePapierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEnveloppePapier();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getOffrePapierId();
                break;
            case 3:
                return $this->getStatut();
                break;
            case 4:
                return $this->getSupprime();
                break;
            case 5:
                return $this->getCryptage();
                break;
            case 6:
                return $this->getIsSend();
                break;
            case 7:
                return $this->getTypeEnv();
                break;
            case 8:
                return $this->getSousPli();
                break;
            case 9:
                return $this->getChampsOptionnels();
                break;
            case 10:
                return $this->getAgentIdOuverture();
                break;
            case 11:
                return $this->getDateheureOuverture();
                break;
            case 12:
                return $this->getStatutEnveloppe();
                break;
            case 13:
                return $this->getEnveloppePostule();
                break;
            case 14:
                return $this->getNomAgentOuverture();
                break;
            case 15:
                return $this->getMontant();
                break;
            case 16:
                return $this->getMontantApresModification();
                break;
            case 17:
                return $this->getTypeAttributaire();
                break;
            case 18:
                return $this->getDevise();
                break;
            case 19:
                return $this->getRabaisPreferenceNational();
                break;
            case 20:
                return $this->getTypeCorrectionMontant();
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
        if (isset($alreadyDumpedObjects['CommonEnveloppePapier'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEnveloppePapier'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonEnveloppePapierPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEnveloppePapier(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getOffrePapierId(),
            $keys[3] => $this->getStatut(),
            $keys[4] => $this->getSupprime(),
            $keys[5] => $this->getCryptage(),
            $keys[6] => $this->getIsSend(),
            $keys[7] => $this->getTypeEnv(),
            $keys[8] => $this->getSousPli(),
            $keys[9] => $this->getChampsOptionnels(),
            $keys[10] => $this->getAgentIdOuverture(),
            $keys[11] => $this->getDateheureOuverture(),
            $keys[12] => $this->getStatutEnveloppe(),
            $keys[13] => $this->getEnveloppePostule(),
            $keys[14] => $this->getNomAgentOuverture(),
            $keys[15] => $this->getMontant(),
            $keys[16] => $this->getMontantApresModification(),
            $keys[17] => $this->getTypeAttributaire(),
            $keys[18] => $this->getDevise(),
            $keys[19] => $this->getRabaisPreferenceNational(),
            $keys[20] => $this->getTypeCorrectionMontant(),
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
        $pos = CommonEnveloppePapierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEnveloppePapier($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setOffrePapierId($value);
                break;
            case 3:
                $this->setStatut($value);
                break;
            case 4:
                $this->setSupprime($value);
                break;
            case 5:
                $this->setCryptage($value);
                break;
            case 6:
                $this->setIsSend($value);
                break;
            case 7:
                $this->setTypeEnv($value);
                break;
            case 8:
                $this->setSousPli($value);
                break;
            case 9:
                $this->setChampsOptionnels($value);
                break;
            case 10:
                $this->setAgentIdOuverture($value);
                break;
            case 11:
                $this->setDateheureOuverture($value);
                break;
            case 12:
                $this->setStatutEnveloppe($value);
                break;
            case 13:
                $this->setEnveloppePostule($value);
                break;
            case 14:
                $this->setNomAgentOuverture($value);
                break;
            case 15:
                $this->setMontant($value);
                break;
            case 16:
                $this->setMontantApresModification($value);
                break;
            case 17:
                $this->setTypeAttributaire($value);
                break;
            case 18:
                $this->setDevise($value);
                break;
            case 19:
                $this->setRabaisPreferenceNational($value);
                break;
            case 20:
                $this->setTypeCorrectionMontant($value);
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
        $keys = CommonEnveloppePapierPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEnveloppePapier($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOffrePapierId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setStatut($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSupprime($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCryptage($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIsSend($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTypeEnv($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSousPli($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setChampsOptionnels($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAgentIdOuverture($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateheureOuverture($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setStatutEnveloppe($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEnveloppePostule($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNomAgentOuverture($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMontant($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMontantApresModification($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTypeAttributaire($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDevise($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setRabaisPreferenceNational($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTypeCorrectionMontant($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEnveloppePapierPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER)) $criteria->add(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, $this->id_enveloppe_papier);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::ORGANISME)) $criteria->add(CommonEnveloppePapierPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::OFFRE_PAPIER_ID)) $criteria->add(CommonEnveloppePapierPeer::OFFRE_PAPIER_ID, $this->offre_papier_id);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::STATUT)) $criteria->add(CommonEnveloppePapierPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::SUPPRIME)) $criteria->add(CommonEnveloppePapierPeer::SUPPRIME, $this->supprime);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::CRYPTAGE)) $criteria->add(CommonEnveloppePapierPeer::CRYPTAGE, $this->cryptage);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::IS_SEND)) $criteria->add(CommonEnveloppePapierPeer::IS_SEND, $this->is_send);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::TYPE_ENV)) $criteria->add(CommonEnveloppePapierPeer::TYPE_ENV, $this->type_env);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::SOUS_PLI)) $criteria->add(CommonEnveloppePapierPeer::SOUS_PLI, $this->sous_pli);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::CHAMPS_OPTIONNELS)) $criteria->add(CommonEnveloppePapierPeer::CHAMPS_OPTIONNELS, $this->champs_optionnels);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::AGENT_ID_OUVERTURE)) $criteria->add(CommonEnveloppePapierPeer::AGENT_ID_OUVERTURE, $this->agent_id_ouverture);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::DATEHEURE_OUVERTURE)) $criteria->add(CommonEnveloppePapierPeer::DATEHEURE_OUVERTURE, $this->dateheure_ouverture);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::STATUT_ENVELOPPE)) $criteria->add(CommonEnveloppePapierPeer::STATUT_ENVELOPPE, $this->statut_enveloppe);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::ENVELOPPE_POSTULE)) $criteria->add(CommonEnveloppePapierPeer::ENVELOPPE_POSTULE, $this->enveloppe_postule);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::NOM_AGENT_OUVERTURE)) $criteria->add(CommonEnveloppePapierPeer::NOM_AGENT_OUVERTURE, $this->nom_agent_ouverture);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::MONTANT)) $criteria->add(CommonEnveloppePapierPeer::MONTANT, $this->montant);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::MONTANT_APRES_MODIFICATION)) $criteria->add(CommonEnveloppePapierPeer::MONTANT_APRES_MODIFICATION, $this->montant_apres_modification);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE)) $criteria->add(CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE, $this->type_attributaire);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::DEVISE)) $criteria->add(CommonEnveloppePapierPeer::DEVISE, $this->devise);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL)) $criteria->add(CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL, $this->rabais_preference_national);
        if ($this->isColumnModified(CommonEnveloppePapierPeer::TYPE_CORRECTION_MONTANT)) $criteria->add(CommonEnveloppePapierPeer::TYPE_CORRECTION_MONTANT, $this->type_correction_montant);

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
        $criteria = new Criteria(CommonEnveloppePapierPeer::DATABASE_NAME);
        $criteria->add(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, $this->id_enveloppe_papier);
        $criteria->add(CommonEnveloppePapierPeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdEnveloppePapier();
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
        $this->setIdEnveloppePapier($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdEnveloppePapier()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonEnveloppePapier (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setOffrePapierId($this->getOffrePapierId());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setSupprime($this->getSupprime());
        $copyObj->setCryptage($this->getCryptage());
        $copyObj->setIsSend($this->getIsSend());
        $copyObj->setTypeEnv($this->getTypeEnv());
        $copyObj->setSousPli($this->getSousPli());
        $copyObj->setChampsOptionnels($this->getChampsOptionnels());
        $copyObj->setAgentIdOuverture($this->getAgentIdOuverture());
        $copyObj->setDateheureOuverture($this->getDateheureOuverture());
        $copyObj->setStatutEnveloppe($this->getStatutEnveloppe());
        $copyObj->setEnveloppePostule($this->getEnveloppePostule());
        $copyObj->setNomAgentOuverture($this->getNomAgentOuverture());
        $copyObj->setMontant($this->getMontant());
        $copyObj->setMontantApresModification($this->getMontantApresModification());
        $copyObj->setTypeAttributaire($this->getTypeAttributaire());
        $copyObj->setDevise($this->getDevise());
        $copyObj->setRabaisPreferenceNational($this->getRabaisPreferenceNational());
        $copyObj->setTypeCorrectionMontant($this->getTypeCorrectionMontant());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdEnveloppePapier(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonEnveloppePapier Clone of current object.
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
     * @return CommonEnveloppePapierPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEnveloppePapierPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_enveloppe_papier = null;
        $this->organisme = null;
        $this->offre_papier_id = null;
        $this->statut = null;
        $this->supprime = null;
        $this->cryptage = null;
        $this->is_send = null;
        $this->type_env = null;
        $this->sous_pli = null;
        $this->champs_optionnels = null;
        $this->agent_id_ouverture = null;
        $this->dateheure_ouverture = null;
        $this->statut_enveloppe = null;
        $this->enveloppe_postule = null;
        $this->nom_agent_ouverture = null;
        $this->montant = null;
        $this->montant_apres_modification = null;
        $this->type_attributaire = null;
        $this->devise = null;
        $this->rabais_preference_national = null;
        $this->type_correction_montant = null;
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
        return (string) $this->exportTo(CommonEnveloppePapierPeer::DEFAULT_STRING_FORMAT);
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
