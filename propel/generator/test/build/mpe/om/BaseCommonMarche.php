<?php


/**
 * Base class that represents a row from the 'Marche' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonMarche extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonMarchePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonMarchePeer
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
     * The value for the idmarchetranchebudgetaire field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $idmarchetranchebudgetaire;

    /**
     * The value for the numeromarcheannee field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $numeromarcheannee;

    /**
     * The value for the idservice field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $idservice;

    /**
     * The value for the nomattributaire field.
     * @var        string
     */
    protected $nomattributaire;

    /**
     * The value for the datenotification field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $datenotification;

    /**
     * The value for the codepostal field.
     * @var        string
     */
    protected $codepostal;

    /**
     * The value for the naturemarche field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $naturemarche;

    /**
     * The value for the objetmarche field.
     * @var        string
     */
    protected $objetmarche;

    /**
     * The value for the montantmarche field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $montantmarche;

    /**
     * The value for the valide field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $valide;

    /**
     * The value for the ismanuel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ismanuel;

    /**
     * The value for the pmepmi field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pmepmi;

    /**
     * The value for the id_decision_enveloppe field.
     * @var        int
     */
    protected $id_decision_enveloppe;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the acronymepays_attributaire field.
     * @var        string
     */
    protected $acronymepays_attributaire;

    /**
     * The value for the pays_attributaire field.
     * @var        string
     */
    protected $pays_attributaire;

    /**
     * The value for the siren_attributaire field.
     * @var        string
     */
    protected $siren_attributaire;

    /**
     * The value for the nic_attributaire field.
     * @var        string
     */
    protected $nic_attributaire;

    /**
     * The value for the identifiantnational_attributaire field.
     * @var        string
     */
    protected $identifiantnational_attributaire;

    /**
     * The value for the rc_ville_attributaire field.
     * @var        string
     */
    protected $rc_ville_attributaire;

    /**
     * The value for the rc_num_attributaire field.
     * @var        string
     */
    protected $rc_num_attributaire;

    /**
     * @var        CommonCategorieConsultation
     */
    protected $aCommonCategorieConsultation;

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
        $this->idmarchetranchebudgetaire = 0;
        $this->numeromarcheannee = 0;
        $this->idservice = 0;
        $this->datenotification = NULL;
        $this->naturemarche = '1';
        $this->montantmarche = '0';
        $this->valide = '0';
        $this->ismanuel = '0';
        $this->pmepmi = 0;
    }

    /**
     * Initializes internal state of BaseCommonMarche object.
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
     * Get the [idmarchetranchebudgetaire] column value.
     * 
     * @return int
     */
    public function getIdmarchetranchebudgetaire()
    {

        return $this->idmarchetranchebudgetaire;
    }

    /**
     * Get the [numeromarcheannee] column value.
     * 
     * @return int
     */
    public function getNumeromarcheannee()
    {

        return $this->numeromarcheannee;
    }

    /**
     * Get the [idservice] column value.
     * 
     * @return int
     */
    public function getIdservice()
    {

        return $this->idservice;
    }

    /**
     * Get the [nomattributaire] column value.
     * 
     * @return string
     */
    public function getNomattributaire()
    {

        return $this->nomattributaire;
    }

    /**
     * Get the [optionally formatted] temporal [datenotification] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatenotification($format = null)
    {
        if ($this->datenotification === null) {
            return null;
        }

        if ($this->datenotification === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datenotification);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datenotification, true), $x);
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
     * Get the [codepostal] column value.
     * 
     * @return string
     */
    public function getCodepostal()
    {

        return $this->codepostal;
    }

    /**
     * Get the [naturemarche] column value.
     * 
     * @return string
     */
    public function getNaturemarche()
    {

        return $this->naturemarche;
    }

    /**
     * Get the [objetmarche] column value.
     * 
     * @return string
     */
    public function getObjetmarche()
    {

        return $this->objetmarche;
    }

    /**
     * Get the [montantmarche] column value.
     * 
     * @return string
     */
    public function getMontantmarche()
    {

        return $this->montantmarche;
    }

    /**
     * Get the [valide] column value.
     * 
     * @return string
     */
    public function getValide()
    {

        return $this->valide;
    }

    /**
     * Get the [ismanuel] column value.
     * 
     * @return string
     */
    public function getIsmanuel()
    {

        return $this->ismanuel;
    }

    /**
     * Get the [pmepmi] column value.
     * 
     * @return int
     */
    public function getPmepmi()
    {

        return $this->pmepmi;
    }

    /**
     * Get the [id_decision_enveloppe] column value.
     * 
     * @return int
     */
    public function getIdDecisionEnveloppe()
    {

        return $this->id_decision_enveloppe;
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
     * Get the [acronymepays_attributaire] column value.
     * 
     * @return string
     */
    public function getAcronymepaysAttributaire()
    {

        return $this->acronymepays_attributaire;
    }

    /**
     * Get the [pays_attributaire] column value.
     * 
     * @return string
     */
    public function getPaysAttributaire()
    {

        return $this->pays_attributaire;
    }

    /**
     * Get the [siren_attributaire] column value.
     * 
     * @return string
     */
    public function getSirenAttributaire()
    {

        return $this->siren_attributaire;
    }

    /**
     * Get the [nic_attributaire] column value.
     * 
     * @return string
     */
    public function getNicAttributaire()
    {

        return $this->nic_attributaire;
    }

    /**
     * Get the [identifiantnational_attributaire] column value.
     * 
     * @return string
     */
    public function getIdentifiantnationalAttributaire()
    {

        return $this->identifiantnational_attributaire;
    }

    /**
     * Get the [rc_ville_attributaire] column value.
     * 
     * @return string
     */
    public function getRcVilleAttributaire()
    {

        return $this->rc_ville_attributaire;
    }

    /**
     * Get the [rc_num_attributaire] column value.
     * 
     * @return string
     */
    public function getRcNumAttributaire()
    {

        return $this->rc_num_attributaire;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonMarchePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonMarchePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [idmarchetranchebudgetaire] column.
     * 
     * @param int $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setIdmarchetranchebudgetaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmarchetranchebudgetaire !== $v) {
            $this->idmarchetranchebudgetaire = $v;
            $this->modifiedColumns[] = CommonMarchePeer::IDMARCHETRANCHEBUDGETAIRE;
        }


        return $this;
    } // setIdmarchetranchebudgetaire()

    /**
     * Set the value of [numeromarcheannee] column.
     * 
     * @param int $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setNumeromarcheannee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numeromarcheannee !== $v) {
            $this->numeromarcheannee = $v;
            $this->modifiedColumns[] = CommonMarchePeer::NUMEROMARCHEANNEE;
        }


        return $this;
    } // setNumeromarcheannee()

    /**
     * Set the value of [idservice] column.
     * 
     * @param int $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setIdservice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idservice !== $v) {
            $this->idservice = $v;
            $this->modifiedColumns[] = CommonMarchePeer::IDSERVICE;
        }


        return $this;
    } // setIdservice()

    /**
     * Set the value of [nomattributaire] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setNomattributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nomattributaire !== $v) {
            $this->nomattributaire = $v;
            $this->modifiedColumns[] = CommonMarchePeer::NOMATTRIBUTAIRE;
        }


        return $this;
    } // setNomattributaire()

    /**
     * Sets the value of [datenotification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setDatenotification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datenotification !== null || $dt !== null) {
            $currentDateAsString = ($this->datenotification !== null && $tmpDt = new DateTime($this->datenotification)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->datenotification = $newDateAsString;
                $this->modifiedColumns[] = CommonMarchePeer::DATENOTIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDatenotification()

    /**
     * Set the value of [codepostal] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setCodepostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codepostal !== $v) {
            $this->codepostal = $v;
            $this->modifiedColumns[] = CommonMarchePeer::CODEPOSTAL;
        }


        return $this;
    } // setCodepostal()

    /**
     * Set the value of [naturemarche] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setNaturemarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->naturemarche !== $v) {
            $this->naturemarche = $v;
            $this->modifiedColumns[] = CommonMarchePeer::NATUREMARCHE;
        }

        if ($this->aCommonCategorieConsultation !== null && $this->aCommonCategorieConsultation->getId() !== $v) {
            $this->aCommonCategorieConsultation = null;
        }


        return $this;
    } // setNaturemarche()

    /**
     * Set the value of [objetmarche] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setObjetmarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objetmarche !== $v) {
            $this->objetmarche = $v;
            $this->modifiedColumns[] = CommonMarchePeer::OBJETMARCHE;
        }


        return $this;
    } // setObjetmarche()

    /**
     * Set the value of [montantmarche] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setMontantmarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montantmarche !== $v) {
            $this->montantmarche = $v;
            $this->modifiedColumns[] = CommonMarchePeer::MONTANTMARCHE;
        }


        return $this;
    } // setMontantmarche()

    /**
     * Set the value of [valide] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setValide($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valide !== $v) {
            $this->valide = $v;
            $this->modifiedColumns[] = CommonMarchePeer::VALIDE;
        }


        return $this;
    } // setValide()

    /**
     * Set the value of [ismanuel] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setIsmanuel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ismanuel !== $v) {
            $this->ismanuel = $v;
            $this->modifiedColumns[] = CommonMarchePeer::ISMANUEL;
        }


        return $this;
    } // setIsmanuel()

    /**
     * Set the value of [pmepmi] column.
     * 
     * @param int $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setPmepmi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pmepmi !== $v) {
            $this->pmepmi = $v;
            $this->modifiedColumns[] = CommonMarchePeer::PMEPMI;
        }


        return $this;
    } // setPmepmi()

    /**
     * Set the value of [id_decision_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setIdDecisionEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_decision_enveloppe !== $v) {
            $this->id_decision_enveloppe = $v;
            $this->modifiedColumns[] = CommonMarchePeer::ID_DECISION_ENVELOPPE;
        }


        return $this;
    } // setIdDecisionEnveloppe()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonMarchePeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [acronymepays_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setAcronymepaysAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronymepays_attributaire !== $v) {
            $this->acronymepays_attributaire = $v;
            $this->modifiedColumns[] = CommonMarchePeer::ACRONYMEPAYS_ATTRIBUTAIRE;
        }


        return $this;
    } // setAcronymepaysAttributaire()

    /**
     * Set the value of [pays_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setPaysAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_attributaire !== $v) {
            $this->pays_attributaire = $v;
            $this->modifiedColumns[] = CommonMarchePeer::PAYS_ATTRIBUTAIRE;
        }


        return $this;
    } // setPaysAttributaire()

    /**
     * Set the value of [siren_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setSirenAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siren_attributaire !== $v) {
            $this->siren_attributaire = $v;
            $this->modifiedColumns[] = CommonMarchePeer::SIREN_ATTRIBUTAIRE;
        }


        return $this;
    } // setSirenAttributaire()

    /**
     * Set the value of [nic_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setNicAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nic_attributaire !== $v) {
            $this->nic_attributaire = $v;
            $this->modifiedColumns[] = CommonMarchePeer::NIC_ATTRIBUTAIRE;
        }


        return $this;
    } // setNicAttributaire()

    /**
     * Set the value of [identifiantnational_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setIdentifiantnationalAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiantnational_attributaire !== $v) {
            $this->identifiantnational_attributaire = $v;
            $this->modifiedColumns[] = CommonMarchePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE;
        }


        return $this;
    } // setIdentifiantnationalAttributaire()

    /**
     * Set the value of [rc_ville_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setRcVilleAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rc_ville_attributaire !== $v) {
            $this->rc_ville_attributaire = $v;
            $this->modifiedColumns[] = CommonMarchePeer::RC_VILLE_ATTRIBUTAIRE;
        }


        return $this;
    } // setRcVilleAttributaire()

    /**
     * Set the value of [rc_num_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonMarche The current object (for fluent API support)
     */
    public function setRcNumAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rc_num_attributaire !== $v) {
            $this->rc_num_attributaire = $v;
            $this->modifiedColumns[] = CommonMarchePeer::RC_NUM_ATTRIBUTAIRE;
        }


        return $this;
    } // setRcNumAttributaire()

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

            if ($this->idmarchetranchebudgetaire !== 0) {
                return false;
            }

            if ($this->numeromarcheannee !== 0) {
                return false;
            }

            if ($this->idservice !== 0) {
                return false;
            }

            if ($this->datenotification !== NULL) {
                return false;
            }

            if ($this->naturemarche !== '1') {
                return false;
            }

            if ($this->montantmarche !== '0') {
                return false;
            }

            if ($this->valide !== '0') {
                return false;
            }

            if ($this->ismanuel !== '0') {
                return false;
            }

            if ($this->pmepmi !== 0) {
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
            $this->idmarchetranchebudgetaire = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->numeromarcheannee = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idservice = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->nomattributaire = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->datenotification = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->codepostal = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->naturemarche = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->objetmarche = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->montantmarche = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->valide = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->ismanuel = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->pmepmi = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->id_decision_enveloppe = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->ville = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->acronymepays_attributaire = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->pays_attributaire = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->siren_attributaire = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->nic_attributaire = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->identifiantnational_attributaire = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->rc_ville_attributaire = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->rc_num_attributaire = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 23; // 23 = CommonMarchePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonMarche object", $e);
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

        if ($this->aCommonCategorieConsultation !== null && $this->naturemarche !== $this->aCommonCategorieConsultation->getId()) {
            $this->aCommonCategorieConsultation = null;
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
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonMarchePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonCategorieConsultation = null;
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
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonMarcheQuery::create()
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
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonMarchePeer::addInstanceToPool($this);
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

            if ($this->aCommonCategorieConsultation !== null) {
                if ($this->aCommonCategorieConsultation->isModified() || $this->aCommonCategorieConsultation->isNew()) {
                    $affectedRows += $this->aCommonCategorieConsultation->save($con);
                }
                $this->setCommonCategorieConsultation($this->aCommonCategorieConsultation);
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

        $this->modifiedColumns[] = CommonMarchePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonMarchePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonMarchePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonMarchePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonMarchePeer::IDMARCHETRANCHEBUDGETAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`idMarcheTrancheBudgetaire`';
        }
        if ($this->isColumnModified(CommonMarchePeer::NUMEROMARCHEANNEE)) {
            $modifiedColumns[':p' . $index++]  = '`numeroMarcheAnnee`';
        }
        if ($this->isColumnModified(CommonMarchePeer::IDSERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`idService`';
        }
        if ($this->isColumnModified(CommonMarchePeer::NOMATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`nomAttributaire`';
        }
        if ($this->isColumnModified(CommonMarchePeer::DATENOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`dateNotification`';
        }
        if ($this->isColumnModified(CommonMarchePeer::CODEPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`codePostal`';
        }
        if ($this->isColumnModified(CommonMarchePeer::NATUREMARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`natureMarche`';
        }
        if ($this->isColumnModified(CommonMarchePeer::OBJETMARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`objetMarche`';
        }
        if ($this->isColumnModified(CommonMarchePeer::MONTANTMARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`montantMarche`';
        }
        if ($this->isColumnModified(CommonMarchePeer::VALIDE)) {
            $modifiedColumns[':p' . $index++]  = '`valide`';
        }
        if ($this->isColumnModified(CommonMarchePeer::ISMANUEL)) {
            $modifiedColumns[':p' . $index++]  = '`isManuel`';
        }
        if ($this->isColumnModified(CommonMarchePeer::PMEPMI)) {
            $modifiedColumns[':p' . $index++]  = '`pmePmi`';
        }
        if ($this->isColumnModified(CommonMarchePeer::ID_DECISION_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_decision_enveloppe`';
        }
        if ($this->isColumnModified(CommonMarchePeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonMarchePeer::ACRONYMEPAYS_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`acronymePays_Attributaire`';
        }
        if ($this->isColumnModified(CommonMarchePeer::PAYS_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`pays_Attributaire`';
        }
        if ($this->isColumnModified(CommonMarchePeer::SIREN_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`siren_Attributaire`';
        }
        if ($this->isColumnModified(CommonMarchePeer::NIC_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`nic_Attributaire`';
        }
        if ($this->isColumnModified(CommonMarchePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`identifiantNational_Attributaire`';
        }
        if ($this->isColumnModified(CommonMarchePeer::RC_VILLE_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`rc_ville_attributaire`';
        }
        if ($this->isColumnModified(CommonMarchePeer::RC_NUM_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`rc_num_attributaire`';
        }

        $sql = sprintf(
            'INSERT INTO `Marche` (%s) VALUES (%s)',
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
                    case '`idMarcheTrancheBudgetaire`':						
                        $stmt->bindValue($identifier, $this->idmarchetranchebudgetaire, PDO::PARAM_INT);
                        break;
                    case '`numeroMarcheAnnee`':						
                        $stmt->bindValue($identifier, $this->numeromarcheannee, PDO::PARAM_INT);
                        break;
                    case '`idService`':						
                        $stmt->bindValue($identifier, $this->idservice, PDO::PARAM_INT);
                        break;
                    case '`nomAttributaire`':						
                        $stmt->bindValue($identifier, $this->nomattributaire, PDO::PARAM_STR);
                        break;
                    case '`dateNotification`':						
                        $stmt->bindValue($identifier, $this->datenotification, PDO::PARAM_STR);
                        break;
                    case '`codePostal`':						
                        $stmt->bindValue($identifier, $this->codepostal, PDO::PARAM_STR);
                        break;
                    case '`natureMarche`':						
                        $stmt->bindValue($identifier, $this->naturemarche, PDO::PARAM_STR);
                        break;
                    case '`objetMarche`':						
                        $stmt->bindValue($identifier, $this->objetmarche, PDO::PARAM_STR);
                        break;
                    case '`montantMarche`':						
                        $stmt->bindValue($identifier, $this->montantmarche, PDO::PARAM_STR);
                        break;
                    case '`valide`':						
                        $stmt->bindValue($identifier, $this->valide, PDO::PARAM_STR);
                        break;
                    case '`isManuel`':						
                        $stmt->bindValue($identifier, $this->ismanuel, PDO::PARAM_STR);
                        break;
                    case '`pmePmi`':						
                        $stmt->bindValue($identifier, $this->pmepmi, PDO::PARAM_INT);
                        break;
                    case '`id_decision_enveloppe`':						
                        $stmt->bindValue($identifier, $this->id_decision_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`acronymePays_Attributaire`':						
                        $stmt->bindValue($identifier, $this->acronymepays_attributaire, PDO::PARAM_STR);
                        break;
                    case '`pays_Attributaire`':						
                        $stmt->bindValue($identifier, $this->pays_attributaire, PDO::PARAM_STR);
                        break;
                    case '`siren_Attributaire`':						
                        $stmt->bindValue($identifier, $this->siren_attributaire, PDO::PARAM_STR);
                        break;
                    case '`nic_Attributaire`':						
                        $stmt->bindValue($identifier, $this->nic_attributaire, PDO::PARAM_STR);
                        break;
                    case '`identifiantNational_Attributaire`':						
                        $stmt->bindValue($identifier, $this->identifiantnational_attributaire, PDO::PARAM_STR);
                        break;
                    case '`rc_ville_attributaire`':						
                        $stmt->bindValue($identifier, $this->rc_ville_attributaire, PDO::PARAM_STR);
                        break;
                    case '`rc_num_attributaire`':						
                        $stmt->bindValue($identifier, $this->rc_num_attributaire, PDO::PARAM_STR);
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

            if ($this->aCommonCategorieConsultation !== null) {
                if (!$this->aCommonCategorieConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonCategorieConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonMarchePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonMarchePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdmarchetranchebudgetaire();
                break;
            case 3:
                return $this->getNumeromarcheannee();
                break;
            case 4:
                return $this->getIdservice();
                break;
            case 5:
                return $this->getNomattributaire();
                break;
            case 6:
                return $this->getDatenotification();
                break;
            case 7:
                return $this->getCodepostal();
                break;
            case 8:
                return $this->getNaturemarche();
                break;
            case 9:
                return $this->getObjetmarche();
                break;
            case 10:
                return $this->getMontantmarche();
                break;
            case 11:
                return $this->getValide();
                break;
            case 12:
                return $this->getIsmanuel();
                break;
            case 13:
                return $this->getPmepmi();
                break;
            case 14:
                return $this->getIdDecisionEnveloppe();
                break;
            case 15:
                return $this->getVille();
                break;
            case 16:
                return $this->getAcronymepaysAttributaire();
                break;
            case 17:
                return $this->getPaysAttributaire();
                break;
            case 18:
                return $this->getSirenAttributaire();
                break;
            case 19:
                return $this->getNicAttributaire();
                break;
            case 20:
                return $this->getIdentifiantnationalAttributaire();
                break;
            case 21:
                return $this->getRcVilleAttributaire();
                break;
            case 22:
                return $this->getRcNumAttributaire();
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
        if (isset($alreadyDumpedObjects['CommonMarche'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonMarche'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonMarchePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdmarchetranchebudgetaire(),
            $keys[3] => $this->getNumeromarcheannee(),
            $keys[4] => $this->getIdservice(),
            $keys[5] => $this->getNomattributaire(),
            $keys[6] => $this->getDatenotification(),
            $keys[7] => $this->getCodepostal(),
            $keys[8] => $this->getNaturemarche(),
            $keys[9] => $this->getObjetmarche(),
            $keys[10] => $this->getMontantmarche(),
            $keys[11] => $this->getValide(),
            $keys[12] => $this->getIsmanuel(),
            $keys[13] => $this->getPmepmi(),
            $keys[14] => $this->getIdDecisionEnveloppe(),
            $keys[15] => $this->getVille(),
            $keys[16] => $this->getAcronymepaysAttributaire(),
            $keys[17] => $this->getPaysAttributaire(),
            $keys[18] => $this->getSirenAttributaire(),
            $keys[19] => $this->getNicAttributaire(),
            $keys[20] => $this->getIdentifiantnationalAttributaire(),
            $keys[21] => $this->getRcVilleAttributaire(),
            $keys[22] => $this->getRcNumAttributaire(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonCategorieConsultation) {
                $result['CommonCategorieConsultation'] = $this->aCommonCategorieConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonMarchePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdmarchetranchebudgetaire($value);
                break;
            case 3:
                $this->setNumeromarcheannee($value);
                break;
            case 4:
                $this->setIdservice($value);
                break;
            case 5:
                $this->setNomattributaire($value);
                break;
            case 6:
                $this->setDatenotification($value);
                break;
            case 7:
                $this->setCodepostal($value);
                break;
            case 8:
                $this->setNaturemarche($value);
                break;
            case 9:
                $this->setObjetmarche($value);
                break;
            case 10:
                $this->setMontantmarche($value);
                break;
            case 11:
                $this->setValide($value);
                break;
            case 12:
                $this->setIsmanuel($value);
                break;
            case 13:
                $this->setPmepmi($value);
                break;
            case 14:
                $this->setIdDecisionEnveloppe($value);
                break;
            case 15:
                $this->setVille($value);
                break;
            case 16:
                $this->setAcronymepaysAttributaire($value);
                break;
            case 17:
                $this->setPaysAttributaire($value);
                break;
            case 18:
                $this->setSirenAttributaire($value);
                break;
            case 19:
                $this->setNicAttributaire($value);
                break;
            case 20:
                $this->setIdentifiantnationalAttributaire($value);
                break;
            case 21:
                $this->setRcVilleAttributaire($value);
                break;
            case 22:
                $this->setRcNumAttributaire($value);
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
        $keys = CommonMarchePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdmarchetranchebudgetaire($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumeromarcheannee($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdservice($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNomattributaire($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDatenotification($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCodepostal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNaturemarche($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setObjetmarche($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMontantmarche($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setValide($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIsmanuel($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPmepmi($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdDecisionEnveloppe($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setVille($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAcronymepaysAttributaire($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPaysAttributaire($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSirenAttributaire($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setNicAttributaire($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdentifiantnationalAttributaire($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setRcVilleAttributaire($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setRcNumAttributaire($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonMarchePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonMarchePeer::ID)) $criteria->add(CommonMarchePeer::ID, $this->id);
        if ($this->isColumnModified(CommonMarchePeer::ORGANISME)) $criteria->add(CommonMarchePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonMarchePeer::IDMARCHETRANCHEBUDGETAIRE)) $criteria->add(CommonMarchePeer::IDMARCHETRANCHEBUDGETAIRE, $this->idmarchetranchebudgetaire);
        if ($this->isColumnModified(CommonMarchePeer::NUMEROMARCHEANNEE)) $criteria->add(CommonMarchePeer::NUMEROMARCHEANNEE, $this->numeromarcheannee);
        if ($this->isColumnModified(CommonMarchePeer::IDSERVICE)) $criteria->add(CommonMarchePeer::IDSERVICE, $this->idservice);
        if ($this->isColumnModified(CommonMarchePeer::NOMATTRIBUTAIRE)) $criteria->add(CommonMarchePeer::NOMATTRIBUTAIRE, $this->nomattributaire);
        if ($this->isColumnModified(CommonMarchePeer::DATENOTIFICATION)) $criteria->add(CommonMarchePeer::DATENOTIFICATION, $this->datenotification);
        if ($this->isColumnModified(CommonMarchePeer::CODEPOSTAL)) $criteria->add(CommonMarchePeer::CODEPOSTAL, $this->codepostal);
        if ($this->isColumnModified(CommonMarchePeer::NATUREMARCHE)) $criteria->add(CommonMarchePeer::NATUREMARCHE, $this->naturemarche);
        if ($this->isColumnModified(CommonMarchePeer::OBJETMARCHE)) $criteria->add(CommonMarchePeer::OBJETMARCHE, $this->objetmarche);
        if ($this->isColumnModified(CommonMarchePeer::MONTANTMARCHE)) $criteria->add(CommonMarchePeer::MONTANTMARCHE, $this->montantmarche);
        if ($this->isColumnModified(CommonMarchePeer::VALIDE)) $criteria->add(CommonMarchePeer::VALIDE, $this->valide);
        if ($this->isColumnModified(CommonMarchePeer::ISMANUEL)) $criteria->add(CommonMarchePeer::ISMANUEL, $this->ismanuel);
        if ($this->isColumnModified(CommonMarchePeer::PMEPMI)) $criteria->add(CommonMarchePeer::PMEPMI, $this->pmepmi);
        if ($this->isColumnModified(CommonMarchePeer::ID_DECISION_ENVELOPPE)) $criteria->add(CommonMarchePeer::ID_DECISION_ENVELOPPE, $this->id_decision_enveloppe);
        if ($this->isColumnModified(CommonMarchePeer::VILLE)) $criteria->add(CommonMarchePeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonMarchePeer::ACRONYMEPAYS_ATTRIBUTAIRE)) $criteria->add(CommonMarchePeer::ACRONYMEPAYS_ATTRIBUTAIRE, $this->acronymepays_attributaire);
        if ($this->isColumnModified(CommonMarchePeer::PAYS_ATTRIBUTAIRE)) $criteria->add(CommonMarchePeer::PAYS_ATTRIBUTAIRE, $this->pays_attributaire);
        if ($this->isColumnModified(CommonMarchePeer::SIREN_ATTRIBUTAIRE)) $criteria->add(CommonMarchePeer::SIREN_ATTRIBUTAIRE, $this->siren_attributaire);
        if ($this->isColumnModified(CommonMarchePeer::NIC_ATTRIBUTAIRE)) $criteria->add(CommonMarchePeer::NIC_ATTRIBUTAIRE, $this->nic_attributaire);
        if ($this->isColumnModified(CommonMarchePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE)) $criteria->add(CommonMarchePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE, $this->identifiantnational_attributaire);
        if ($this->isColumnModified(CommonMarchePeer::RC_VILLE_ATTRIBUTAIRE)) $criteria->add(CommonMarchePeer::RC_VILLE_ATTRIBUTAIRE, $this->rc_ville_attributaire);
        if ($this->isColumnModified(CommonMarchePeer::RC_NUM_ATTRIBUTAIRE)) $criteria->add(CommonMarchePeer::RC_NUM_ATTRIBUTAIRE, $this->rc_num_attributaire);

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
        $criteria = new Criteria(CommonMarchePeer::DATABASE_NAME);
        $criteria->add(CommonMarchePeer::ID, $this->id);
        $criteria->add(CommonMarchePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonMarche (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdmarchetranchebudgetaire($this->getIdmarchetranchebudgetaire());
        $copyObj->setNumeromarcheannee($this->getNumeromarcheannee());
        $copyObj->setIdservice($this->getIdservice());
        $copyObj->setNomattributaire($this->getNomattributaire());
        $copyObj->setDatenotification($this->getDatenotification());
        $copyObj->setCodepostal($this->getCodepostal());
        $copyObj->setNaturemarche($this->getNaturemarche());
        $copyObj->setObjetmarche($this->getObjetmarche());
        $copyObj->setMontantmarche($this->getMontantmarche());
        $copyObj->setValide($this->getValide());
        $copyObj->setIsmanuel($this->getIsmanuel());
        $copyObj->setPmepmi($this->getPmepmi());
        $copyObj->setIdDecisionEnveloppe($this->getIdDecisionEnveloppe());
        $copyObj->setVille($this->getVille());
        $copyObj->setAcronymepaysAttributaire($this->getAcronymepaysAttributaire());
        $copyObj->setPaysAttributaire($this->getPaysAttributaire());
        $copyObj->setSirenAttributaire($this->getSirenAttributaire());
        $copyObj->setNicAttributaire($this->getNicAttributaire());
        $copyObj->setIdentifiantnationalAttributaire($this->getIdentifiantnationalAttributaire());
        $copyObj->setRcVilleAttributaire($this->getRcVilleAttributaire());
        $copyObj->setRcNumAttributaire($this->getRcNumAttributaire());

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
     * @return CommonMarche Clone of current object.
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
     * @return CommonMarchePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonMarchePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonCategorieConsultation object.
     *
     * @param   CommonCategorieConsultation $v
     * @return CommonMarche The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonCategorieConsultation(CommonCategorieConsultation $v = null)
    {
        if ($v === null) {
            $this->setNaturemarche('1');
        } else {
            $this->setNaturemarche($v->getId());
        }

        $this->aCommonCategorieConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonCategorieConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonMarche($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonCategorieConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonCategorieConsultation The associated CommonCategorieConsultation object.
     * @throws PropelException
     */
    public function getCommonCategorieConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonCategorieConsultation === null && (($this->naturemarche !== "" && $this->naturemarche !== null)) && $doQuery) {
            $this->aCommonCategorieConsultation = CommonCategorieConsultationQuery::create()->findPk($this->naturemarche, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonCategorieConsultation->addCommonMarches($this);
             */
        }

        return $this->aCommonCategorieConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->idmarchetranchebudgetaire = null;
        $this->numeromarcheannee = null;
        $this->idservice = null;
        $this->nomattributaire = null;
        $this->datenotification = null;
        $this->codepostal = null;
        $this->naturemarche = null;
        $this->objetmarche = null;
        $this->montantmarche = null;
        $this->valide = null;
        $this->ismanuel = null;
        $this->pmepmi = null;
        $this->id_decision_enveloppe = null;
        $this->ville = null;
        $this->acronymepays_attributaire = null;
        $this->pays_attributaire = null;
        $this->siren_attributaire = null;
        $this->nic_attributaire = null;
        $this->identifiantnational_attributaire = null;
        $this->rc_ville_attributaire = null;
        $this->rc_num_attributaire = null;
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
            if ($this->aCommonCategorieConsultation instanceof Persistent) {
              $this->aCommonCategorieConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonCategorieConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonMarchePeer::DEFAULT_STRING_FORMAT);
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
