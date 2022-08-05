<?php


/**
 * Base class that represents a row from the 'Justificatifs' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonJustificatifs extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonJustificatifsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonJustificatifsPeer
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
     * The value for the intitule_justificatif field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intitule_justificatif;

    /**
     * The value for the id_entreprise field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the taille field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $taille;

    /**
     * The value for the justificatif field.
     * @var        int
     */
    protected $justificatif;

    /**
     * The value for the statut field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut;

    /**
     * The value for the id_document field.
     * @var        int
     */
    protected $id_document;

    /**
     * The value for the nom field.
     * @var        string
     */
    protected $nom;

    /**
     * The value for the nom_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_fr;

    /**
     * The value for the nom_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_en;

    /**
     * The value for the nom_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_es;

    /**
     * The value for the nom_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_su;

    /**
     * The value for the nom_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_du;

    /**
     * The value for the nom_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_cz;

    /**
     * The value for the nom_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_ar;

    /**
     * The value for the nom_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_it;

    /**
     * The value for the date_fin_validite field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $date_fin_validite;

    /**
     * The value for the visible_par_agents field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_par_agents;

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
        $this->intitule_justificatif = '';
        $this->id_entreprise = 0;
        $this->taille = '';
        $this->statut = '0';
        $this->nom_fr = '';
        $this->nom_en = '';
        $this->nom_es = '';
        $this->nom_su = '';
        $this->nom_du = '';
        $this->nom_cz = '';
        $this->nom_ar = '';
        $this->nom_it = '';
        $this->date_fin_validite = NULL;
        $this->visible_par_agents = '0';
    }

    /**
     * Initializes internal state of BaseCommonJustificatifs object.
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
     * Get the [intitule_justificatif] column value.
     * 
     * @return string
     */
    public function getIntituleJustificatif()
    {

        return $this->intitule_justificatif;
    }

    /**
     * Get the [id_entreprise] column value.
     * 
     * @return int
     */
    public function getIdEntreprise()
    {

        return $this->id_entreprise;
    }

    /**
     * Get the [taille] column value.
     * 
     * @return string
     */
    public function getTaille()
    {

        return $this->taille;
    }

    /**
     * Get the [justificatif] column value.
     * 
     * @return int
     */
    public function getJustificatif()
    {

        return $this->justificatif;
    }

    /**
     * Get the [statut] column value.
     * 
     * @return string
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Get the [id_document] column value.
     * 
     * @return int
     */
    public function getIdDocument()
    {

        return $this->id_document;
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
     * Get the [nom_fr] column value.
     * 
     * @return string
     */
    public function getNomFr()
    {

        return $this->nom_fr;
    }

    /**
     * Get the [nom_en] column value.
     * 
     * @return string
     */
    public function getNomEn()
    {

        return $this->nom_en;
    }

    /**
     * Get the [nom_es] column value.
     * 
     * @return string
     */
    public function getNomEs()
    {

        return $this->nom_es;
    }

    /**
     * Get the [nom_su] column value.
     * 
     * @return string
     */
    public function getNomSu()
    {

        return $this->nom_su;
    }

    /**
     * Get the [nom_du] column value.
     * 
     * @return string
     */
    public function getNomDu()
    {

        return $this->nom_du;
    }

    /**
     * Get the [nom_cz] column value.
     * 
     * @return string
     */
    public function getNomCz()
    {

        return $this->nom_cz;
    }

    /**
     * Get the [nom_ar] column value.
     * 
     * @return string
     */
    public function getNomAr()
    {

        return $this->nom_ar;
    }

    /**
     * Get the [nom_it] column value.
     * 
     * @return string
     */
    public function getNomIt()
    {

        return $this->nom_it;
    }

    /**
     * Get the [optionally formatted] temporal [date_fin_validite] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateFinValidite($format = null)
    {
        if ($this->date_fin_validite === null) {
            return null;
        }

        if ($this->date_fin_validite === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_fin_validite);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_fin_validite, true), $x);
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
     * Get the [visible_par_agents] column value.
     * 
     * @return string
     */
    public function getVisibleParAgents()
    {

        return $this->visible_par_agents;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [intitule_justificatif] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setIntituleJustificatif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_justificatif !== $v) {
            $this->intitule_justificatif = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::INTITULE_JUSTIFICATIF;
        }


        return $this;
    } // setIntituleJustificatif()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [taille] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setTaille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille !== $v) {
            $this->taille = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::TAILLE;
        }


        return $this;
    } // setTaille()

    /**
     * Set the value of [justificatif] column.
     * 
     * @param int $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setJustificatif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->justificatif !== $v) {
            $this->justificatif = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::JUSTIFICATIF;
        }


        return $this;
    } // setJustificatif()

    /**
     * Set the value of [statut] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [id_document] column.
     * 
     * @param int $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setIdDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_document !== $v) {
            $this->id_document = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::ID_DOCUMENT;
        }


        return $this;
    } // setIdDocument()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [nom_fr] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setNomFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fr !== $v) {
            $this->nom_fr = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::NOM_FR;
        }


        return $this;
    } // setNomFr()

    /**
     * Set the value of [nom_en] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setNomEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_en !== $v) {
            $this->nom_en = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::NOM_EN;
        }


        return $this;
    } // setNomEn()

    /**
     * Set the value of [nom_es] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setNomEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_es !== $v) {
            $this->nom_es = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::NOM_ES;
        }


        return $this;
    } // setNomEs()

    /**
     * Set the value of [nom_su] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setNomSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_su !== $v) {
            $this->nom_su = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::NOM_SU;
        }


        return $this;
    } // setNomSu()

    /**
     * Set the value of [nom_du] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setNomDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_du !== $v) {
            $this->nom_du = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::NOM_DU;
        }


        return $this;
    } // setNomDu()

    /**
     * Set the value of [nom_cz] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setNomCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_cz !== $v) {
            $this->nom_cz = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::NOM_CZ;
        }


        return $this;
    } // setNomCz()

    /**
     * Set the value of [nom_ar] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setNomAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_ar !== $v) {
            $this->nom_ar = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::NOM_AR;
        }


        return $this;
    } // setNomAr()

    /**
     * Set the value of [nom_it] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setNomIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_it !== $v) {
            $this->nom_it = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::NOM_IT;
        }


        return $this;
    } // setNomIt()

    /**
     * Sets the value of [date_fin_validite] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setDateFinValidite($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_fin_validite !== null || $dt !== null) {
            $currentDateAsString = ($this->date_fin_validite !== null && $tmpDt = new DateTime($this->date_fin_validite)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->date_fin_validite = $newDateAsString;
                $this->modifiedColumns[] = CommonJustificatifsPeer::DATE_FIN_VALIDITE;
            }
        } // if either are not null


        return $this;
    } // setDateFinValidite()

    /**
     * Set the value of [visible_par_agents] column.
     * 
     * @param string $v new value
     * @return CommonJustificatifs The current object (for fluent API support)
     */
    public function setVisibleParAgents($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_par_agents !== $v) {
            $this->visible_par_agents = $v;
            $this->modifiedColumns[] = CommonJustificatifsPeer::VISIBLE_PAR_AGENTS;
        }


        return $this;
    } // setVisibleParAgents()

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
            if ($this->intitule_justificatif !== '') {
                return false;
            }

            if ($this->id_entreprise !== 0) {
                return false;
            }

            if ($this->taille !== '') {
                return false;
            }

            if ($this->statut !== '0') {
                return false;
            }

            if ($this->nom_fr !== '') {
                return false;
            }

            if ($this->nom_en !== '') {
                return false;
            }

            if ($this->nom_es !== '') {
                return false;
            }

            if ($this->nom_su !== '') {
                return false;
            }

            if ($this->nom_du !== '') {
                return false;
            }

            if ($this->nom_cz !== '') {
                return false;
            }

            if ($this->nom_ar !== '') {
                return false;
            }

            if ($this->nom_it !== '') {
                return false;
            }

            if ($this->date_fin_validite !== NULL) {
                return false;
            }

            if ($this->visible_par_agents !== '0') {
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
            $this->intitule_justificatif = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_entreprise = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->taille = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->justificatif = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->statut = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->id_document = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->nom = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->nom_fr = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->nom_en = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->nom_es = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->nom_su = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->nom_du = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->nom_cz = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->nom_ar = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->nom_it = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->date_fin_validite = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->visible_par_agents = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = CommonJustificatifsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonJustificatifs object", $e);
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
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonJustificatifsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonJustificatifsQuery::create()
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
            $con = Propel::getConnection(CommonJustificatifsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonJustificatifsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonJustificatifsPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonJustificatifsPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonJustificatifsPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::INTITULE_JUSTIFICATIF)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_justificatif`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::TAILLE)) {
            $modifiedColumns[':p' . $index++]  = '`taille`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::JUSTIFICATIF)) {
            $modifiedColumns[':p' . $index++]  = '`justificatif`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::ID_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_document`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_FR)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fr`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_EN)) {
            $modifiedColumns[':p' . $index++]  = '`nom_en`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_ES)) {
            $modifiedColumns[':p' . $index++]  = '`nom_es`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_SU)) {
            $modifiedColumns[':p' . $index++]  = '`nom_su`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_DU)) {
            $modifiedColumns[':p' . $index++]  = '`nom_du`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`nom_cz`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_AR)) {
            $modifiedColumns[':p' . $index++]  = '`nom_ar`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_IT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_it`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::DATE_FIN_VALIDITE)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin_validite`';
        }
        if ($this->isColumnModified(CommonJustificatifsPeer::VISIBLE_PAR_AGENTS)) {
            $modifiedColumns[':p' . $index++]  = '`visible_par_agents`';
        }

        $sql = sprintf(
            'INSERT INTO `Justificatifs` (%s) VALUES (%s)',
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
                    case '`intitule_justificatif`':						
                        $stmt->bindValue($identifier, $this->intitule_justificatif, PDO::PARAM_STR);
                        break;
                    case '`id_entreprise`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`taille`':						
                        $stmt->bindValue($identifier, $this->taille, PDO::PARAM_STR);
                        break;
                    case '`justificatif`':						
                        $stmt->bindValue($identifier, $this->justificatif, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_STR);
                        break;
                    case '`id_document`':						
                        $stmt->bindValue($identifier, $this->id_document, PDO::PARAM_INT);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`nom_fr`':						
                        $stmt->bindValue($identifier, $this->nom_fr, PDO::PARAM_STR);
                        break;
                    case '`nom_en`':						
                        $stmt->bindValue($identifier, $this->nom_en, PDO::PARAM_STR);
                        break;
                    case '`nom_es`':						
                        $stmt->bindValue($identifier, $this->nom_es, PDO::PARAM_STR);
                        break;
                    case '`nom_su`':						
                        $stmt->bindValue($identifier, $this->nom_su, PDO::PARAM_STR);
                        break;
                    case '`nom_du`':						
                        $stmt->bindValue($identifier, $this->nom_du, PDO::PARAM_STR);
                        break;
                    case '`nom_cz`':						
                        $stmt->bindValue($identifier, $this->nom_cz, PDO::PARAM_STR);
                        break;
                    case '`nom_ar`':						
                        $stmt->bindValue($identifier, $this->nom_ar, PDO::PARAM_STR);
                        break;
                    case '`nom_it`':						
                        $stmt->bindValue($identifier, $this->nom_it, PDO::PARAM_STR);
                        break;
                    case '`date_fin_validite`':						
                        $stmt->bindValue($identifier, $this->date_fin_validite, PDO::PARAM_STR);
                        break;
                    case '`visible_par_agents`':						
                        $stmt->bindValue($identifier, $this->visible_par_agents, PDO::PARAM_STR);
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


            if (($retval = CommonJustificatifsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonJustificatifsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIntituleJustificatif();
                break;
            case 2:
                return $this->getIdEntreprise();
                break;
            case 3:
                return $this->getTaille();
                break;
            case 4:
                return $this->getJustificatif();
                break;
            case 5:
                return $this->getStatut();
                break;
            case 6:
                return $this->getIdDocument();
                break;
            case 7:
                return $this->getNom();
                break;
            case 8:
                return $this->getNomFr();
                break;
            case 9:
                return $this->getNomEn();
                break;
            case 10:
                return $this->getNomEs();
                break;
            case 11:
                return $this->getNomSu();
                break;
            case 12:
                return $this->getNomDu();
                break;
            case 13:
                return $this->getNomCz();
                break;
            case 14:
                return $this->getNomAr();
                break;
            case 15:
                return $this->getNomIt();
                break;
            case 16:
                return $this->getDateFinValidite();
                break;
            case 17:
                return $this->getVisibleParAgents();
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
        if (isset($alreadyDumpedObjects['CommonJustificatifs'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonJustificatifs'][$this->getPrimaryKey()] = true;
        $keys = CommonJustificatifsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIntituleJustificatif(),
            $keys[2] => $this->getIdEntreprise(),
            $keys[3] => $this->getTaille(),
            $keys[4] => $this->getJustificatif(),
            $keys[5] => $this->getStatut(),
            $keys[6] => $this->getIdDocument(),
            $keys[7] => $this->getNom(),
            $keys[8] => $this->getNomFr(),
            $keys[9] => $this->getNomEn(),
            $keys[10] => $this->getNomEs(),
            $keys[11] => $this->getNomSu(),
            $keys[12] => $this->getNomDu(),
            $keys[13] => $this->getNomCz(),
            $keys[14] => $this->getNomAr(),
            $keys[15] => $this->getNomIt(),
            $keys[16] => $this->getDateFinValidite(),
            $keys[17] => $this->getVisibleParAgents(),
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
        $pos = CommonJustificatifsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIntituleJustificatif($value);
                break;
            case 2:
                $this->setIdEntreprise($value);
                break;
            case 3:
                $this->setTaille($value);
                break;
            case 4:
                $this->setJustificatif($value);
                break;
            case 5:
                $this->setStatut($value);
                break;
            case 6:
                $this->setIdDocument($value);
                break;
            case 7:
                $this->setNom($value);
                break;
            case 8:
                $this->setNomFr($value);
                break;
            case 9:
                $this->setNomEn($value);
                break;
            case 10:
                $this->setNomEs($value);
                break;
            case 11:
                $this->setNomSu($value);
                break;
            case 12:
                $this->setNomDu($value);
                break;
            case 13:
                $this->setNomCz($value);
                break;
            case 14:
                $this->setNomAr($value);
                break;
            case 15:
                $this->setNomIt($value);
                break;
            case 16:
                $this->setDateFinValidite($value);
                break;
            case 17:
                $this->setVisibleParAgents($value);
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
        $keys = CommonJustificatifsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIntituleJustificatif($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdEntreprise($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTaille($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setJustificatif($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStatut($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdDocument($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNom($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNomFr($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNomEn($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNomEs($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNomSu($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNomDu($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setNomCz($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNomAr($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNomIt($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDateFinValidite($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setVisibleParAgents($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonJustificatifsPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonJustificatifsPeer::ID)) $criteria->add(CommonJustificatifsPeer::ID, $this->id);
        if ($this->isColumnModified(CommonJustificatifsPeer::INTITULE_JUSTIFICATIF)) $criteria->add(CommonJustificatifsPeer::INTITULE_JUSTIFICATIF, $this->intitule_justificatif);
        if ($this->isColumnModified(CommonJustificatifsPeer::ID_ENTREPRISE)) $criteria->add(CommonJustificatifsPeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonJustificatifsPeer::TAILLE)) $criteria->add(CommonJustificatifsPeer::TAILLE, $this->taille);
        if ($this->isColumnModified(CommonJustificatifsPeer::JUSTIFICATIF)) $criteria->add(CommonJustificatifsPeer::JUSTIFICATIF, $this->justificatif);
        if ($this->isColumnModified(CommonJustificatifsPeer::STATUT)) $criteria->add(CommonJustificatifsPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonJustificatifsPeer::ID_DOCUMENT)) $criteria->add(CommonJustificatifsPeer::ID_DOCUMENT, $this->id_document);
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM)) $criteria->add(CommonJustificatifsPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_FR)) $criteria->add(CommonJustificatifsPeer::NOM_FR, $this->nom_fr);
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_EN)) $criteria->add(CommonJustificatifsPeer::NOM_EN, $this->nom_en);
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_ES)) $criteria->add(CommonJustificatifsPeer::NOM_ES, $this->nom_es);
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_SU)) $criteria->add(CommonJustificatifsPeer::NOM_SU, $this->nom_su);
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_DU)) $criteria->add(CommonJustificatifsPeer::NOM_DU, $this->nom_du);
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_CZ)) $criteria->add(CommonJustificatifsPeer::NOM_CZ, $this->nom_cz);
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_AR)) $criteria->add(CommonJustificatifsPeer::NOM_AR, $this->nom_ar);
        if ($this->isColumnModified(CommonJustificatifsPeer::NOM_IT)) $criteria->add(CommonJustificatifsPeer::NOM_IT, $this->nom_it);
        if ($this->isColumnModified(CommonJustificatifsPeer::DATE_FIN_VALIDITE)) $criteria->add(CommonJustificatifsPeer::DATE_FIN_VALIDITE, $this->date_fin_validite);
        if ($this->isColumnModified(CommonJustificatifsPeer::VISIBLE_PAR_AGENTS)) $criteria->add(CommonJustificatifsPeer::VISIBLE_PAR_AGENTS, $this->visible_par_agents);

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
        $criteria = new Criteria(CommonJustificatifsPeer::DATABASE_NAME);
        $criteria->add(CommonJustificatifsPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonJustificatifs (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntituleJustificatif($this->getIntituleJustificatif());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setTaille($this->getTaille());
        $copyObj->setJustificatif($this->getJustificatif());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setIdDocument($this->getIdDocument());
        $copyObj->setNom($this->getNom());
        $copyObj->setNomFr($this->getNomFr());
        $copyObj->setNomEn($this->getNomEn());
        $copyObj->setNomEs($this->getNomEs());
        $copyObj->setNomSu($this->getNomSu());
        $copyObj->setNomDu($this->getNomDu());
        $copyObj->setNomCz($this->getNomCz());
        $copyObj->setNomAr($this->getNomAr());
        $copyObj->setNomIt($this->getNomIt());
        $copyObj->setDateFinValidite($this->getDateFinValidite());
        $copyObj->setVisibleParAgents($this->getVisibleParAgents());
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
     * @return CommonJustificatifs Clone of current object.
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
     * @return CommonJustificatifsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonJustificatifsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->intitule_justificatif = null;
        $this->id_entreprise = null;
        $this->taille = null;
        $this->justificatif = null;
        $this->statut = null;
        $this->id_document = null;
        $this->nom = null;
        $this->nom_fr = null;
        $this->nom_en = null;
        $this->nom_es = null;
        $this->nom_su = null;
        $this->nom_du = null;
        $this->nom_cz = null;
        $this->nom_ar = null;
        $this->nom_it = null;
        $this->date_fin_validite = null;
        $this->visible_par_agents = null;
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
        return (string) $this->exportTo(CommonJustificatifsPeer::DEFAULT_STRING_FORMAT);
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
