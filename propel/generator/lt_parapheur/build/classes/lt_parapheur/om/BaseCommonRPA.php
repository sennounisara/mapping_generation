<?php


/**
 * Base class that represents a row from the 'RPA' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonRPA extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonRPAPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonRPAPeer
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
     * The value for the acronymeorg field.
     * @var        string
     */
    protected $acronymeorg;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the nom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom;

    /**
     * The value for the prenom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the adresse1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse1;

    /**
     * The value for the adresse2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse2;

    /**
     * The value for the codepostal field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $codepostal;

    /**
     * The value for the ville field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville;

    /**
     * The value for the id_service field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_service;

    /**
     * The value for the fonction field.
     * @var        string
     */
    protected $fonction;

    /**
     * The value for the pays field.
     * @var        string
     */
    protected $pays;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_modification field.
     * @var        string
     */
    protected $date_modification;

    /**
     * The value for the responsable_archive field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $responsable_archive;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

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
     * The value for the organismerpa field.
     * @var        string
     */
    protected $organismerpa;

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
        $this->nom = '';
        $this->prenom = '';
        $this->adresse1 = '';
        $this->adresse2 = '';
        $this->codepostal = '';
        $this->ville = '';
        $this->id_service = 0;
        $this->responsable_archive = '0';
    }

    /**
     * Initializes internal state of BaseCommonRPA object.
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
     * Get the [acronymeorg] column value.
     * 
     * @return string
     */
    public function getAcronymeorg()
    {

        return $this->acronymeorg;
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
     * Get the [adresse1] column value.
     * 
     * @return string
     */
    public function getAdresse1()
    {

        return $this->adresse1;
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
     * Get the [codepostal] column value.
     * 
     * @return string
     */
    public function getCodepostal()
    {

        return $this->codepostal;
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
     * Get the [id_service] column value.
     * 
     * @return int
     */
    public function getIdService()
    {

        return $this->id_service;
    }

    /**
     * Get the [fonction] column value.
     * 
     * @return string
     */
    public function getFonction()
    {

        return $this->fonction;
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
     * Get the [date_creation] column value.
     * 
     * @return string
     */
    public function getDateCreation()
    {

        return $this->date_creation;
    }

    /**
     * Get the [date_modification] column value.
     * 
     * @return string
     */
    public function getDateModification()
    {

        return $this->date_modification;
    }

    /**
     * Get the [responsable_archive] column value.
     * 
     * @return string
     */
    public function getResponsableArchive()
    {

        return $this->responsable_archive;
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
     * Get the [organismerpa] column value.
     * 
     * @return string
     */
    public function getOrganismerpa()
    {

        return $this->organismerpa;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonRPAPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [acronymeorg] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setAcronymeorg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronymeorg !== $v) {
            $this->acronymeorg = $v;
            $this->modifiedColumns[] = CommonRPAPeer::ACRONYMEORG;
        }


        return $this;
    } // setAcronymeorg()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonRPAPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonRPAPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonRPAPeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [adresse1] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setAdresse1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse1 !== $v) {
            $this->adresse1 = $v;
            $this->modifiedColumns[] = CommonRPAPeer::ADRESSE1;
        }


        return $this;
    } // setAdresse1()

    /**
     * Set the value of [adresse2] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setAdresse2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2 !== $v) {
            $this->adresse2 = $v;
            $this->modifiedColumns[] = CommonRPAPeer::ADRESSE2;
        }


        return $this;
    } // setAdresse2()

    /**
     * Set the value of [codepostal] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setCodepostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codepostal !== $v) {
            $this->codepostal = $v;
            $this->modifiedColumns[] = CommonRPAPeer::CODEPOSTAL;
        }


        return $this;
    } // setCodepostal()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonRPAPeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = CommonRPAPeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [fonction] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setFonction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fonction !== $v) {
            $this->fonction = $v;
            $this->modifiedColumns[] = CommonRPAPeer::FONCTION;
        }


        return $this;
    } // setFonction()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = CommonRPAPeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonRPAPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_modification] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modification !== $v) {
            $this->date_modification = $v;
            $this->modifiedColumns[] = CommonRPAPeer::DATE_MODIFICATION;
        }


        return $this;
    } // setDateModification()

    /**
     * Set the value of [responsable_archive] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setResponsableArchive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->responsable_archive !== $v) {
            $this->responsable_archive = $v;
            $this->modifiedColumns[] = CommonRPAPeer::RESPONSABLE_ARCHIVE;
        }


        return $this;
    } // setResponsableArchive()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonRPAPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonRPAPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonRPAPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [organismerpa] column.
     * 
     * @param string $v new value
     * @return CommonRPA The current object (for fluent API support)
     */
    public function setOrganismerpa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organismerpa !== $v) {
            $this->organismerpa = $v;
            $this->modifiedColumns[] = CommonRPAPeer::ORGANISMERPA;
        }


        return $this;
    } // setOrganismerpa()

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

            if ($this->nom !== '') {
                return false;
            }

            if ($this->prenom !== '') {
                return false;
            }

            if ($this->adresse1 !== '') {
                return false;
            }

            if ($this->adresse2 !== '') {
                return false;
            }

            if ($this->codepostal !== '') {
                return false;
            }

            if ($this->ville !== '') {
                return false;
            }

            if ($this->id_service !== 0) {
                return false;
            }

            if ($this->responsable_archive !== '0') {
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
            $this->acronymeorg = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->organisme = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->nom = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->prenom = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->adresse1 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->adresse2 = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->codepostal = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ville = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->id_service = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->fonction = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->pays = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_creation = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->date_modification = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->responsable_archive = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->email = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->telephone = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->fax = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->organismerpa = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = CommonRPAPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonRPA object", $e);
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
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonRPAPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonRPAQuery::create()
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
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonRPAPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonRPAPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonRPAPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonRPAPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonRPAPeer::ACRONYMEORG)) {
            $modifiedColumns[':p' . $index++]  = '`acronymeOrg`';
        }
        if ($this->isColumnModified(CommonRPAPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonRPAPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonRPAPeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonRPAPeer::ADRESSE1)) {
            $modifiedColumns[':p' . $index++]  = '`adresse1`';
        }
        if ($this->isColumnModified(CommonRPAPeer::ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2`';
        }
        if ($this->isColumnModified(CommonRPAPeer::CODEPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`codepostal`';
        }
        if ($this->isColumnModified(CommonRPAPeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonRPAPeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service`';
        }
        if ($this->isColumnModified(CommonRPAPeer::FONCTION)) {
            $modifiedColumns[':p' . $index++]  = '`Fonction`';
        }
        if ($this->isColumnModified(CommonRPAPeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`pays`';
        }
        if ($this->isColumnModified(CommonRPAPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonRPAPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonRPAPeer::RESPONSABLE_ARCHIVE)) {
            $modifiedColumns[':p' . $index++]  = '`responsable_archive`';
        }
        if ($this->isColumnModified(CommonRPAPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonRPAPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonRPAPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonRPAPeer::ORGANISMERPA)) {
            $modifiedColumns[':p' . $index++]  = '`OrganismeRpa`';
        }

        $sql = sprintf(
            'INSERT INTO `RPA` (%s) VALUES (%s)',
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
                    case '`acronymeOrg`':						
                        $stmt->bindValue($identifier, $this->acronymeorg, PDO::PARAM_STR);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`adresse1`':						
                        $stmt->bindValue($identifier, $this->adresse1, PDO::PARAM_STR);
                        break;
                    case '`adresse2`':						
                        $stmt->bindValue($identifier, $this->adresse2, PDO::PARAM_STR);
                        break;
                    case '`codepostal`':						
                        $stmt->bindValue($identifier, $this->codepostal, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`id_service`':						
                        $stmt->bindValue($identifier, $this->id_service, PDO::PARAM_INT);
                        break;
                    case '`Fonction`':						
                        $stmt->bindValue($identifier, $this->fonction, PDO::PARAM_STR);
                        break;
                    case '`pays`':						
                        $stmt->bindValue($identifier, $this->pays, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`responsable_archive`':						
                        $stmt->bindValue($identifier, $this->responsable_archive, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`OrganismeRpa`':						
                        $stmt->bindValue($identifier, $this->organismerpa, PDO::PARAM_STR);
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


            if (($retval = CommonRPAPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonRPAPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAcronymeorg();
                break;
            case 2:
                return $this->getOrganisme();
                break;
            case 3:
                return $this->getNom();
                break;
            case 4:
                return $this->getPrenom();
                break;
            case 5:
                return $this->getAdresse1();
                break;
            case 6:
                return $this->getAdresse2();
                break;
            case 7:
                return $this->getCodepostal();
                break;
            case 8:
                return $this->getVille();
                break;
            case 9:
                return $this->getIdService();
                break;
            case 10:
                return $this->getFonction();
                break;
            case 11:
                return $this->getPays();
                break;
            case 12:
                return $this->getDateCreation();
                break;
            case 13:
                return $this->getDateModification();
                break;
            case 14:
                return $this->getResponsableArchive();
                break;
            case 15:
                return $this->getEmail();
                break;
            case 16:
                return $this->getTelephone();
                break;
            case 17:
                return $this->getFax();
                break;
            case 18:
                return $this->getOrganismerpa();
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
        if (isset($alreadyDumpedObjects['CommonRPA'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonRPA'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonRPAPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getAcronymeorg(),
            $keys[2] => $this->getOrganisme(),
            $keys[3] => $this->getNom(),
            $keys[4] => $this->getPrenom(),
            $keys[5] => $this->getAdresse1(),
            $keys[6] => $this->getAdresse2(),
            $keys[7] => $this->getCodepostal(),
            $keys[8] => $this->getVille(),
            $keys[9] => $this->getIdService(),
            $keys[10] => $this->getFonction(),
            $keys[11] => $this->getPays(),
            $keys[12] => $this->getDateCreation(),
            $keys[13] => $this->getDateModification(),
            $keys[14] => $this->getResponsableArchive(),
            $keys[15] => $this->getEmail(),
            $keys[16] => $this->getTelephone(),
            $keys[17] => $this->getFax(),
            $keys[18] => $this->getOrganismerpa(),
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
        $pos = CommonRPAPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAcronymeorg($value);
                break;
            case 2:
                $this->setOrganisme($value);
                break;
            case 3:
                $this->setNom($value);
                break;
            case 4:
                $this->setPrenom($value);
                break;
            case 5:
                $this->setAdresse1($value);
                break;
            case 6:
                $this->setAdresse2($value);
                break;
            case 7:
                $this->setCodepostal($value);
                break;
            case 8:
                $this->setVille($value);
                break;
            case 9:
                $this->setIdService($value);
                break;
            case 10:
                $this->setFonction($value);
                break;
            case 11:
                $this->setPays($value);
                break;
            case 12:
                $this->setDateCreation($value);
                break;
            case 13:
                $this->setDateModification($value);
                break;
            case 14:
                $this->setResponsableArchive($value);
                break;
            case 15:
                $this->setEmail($value);
                break;
            case 16:
                $this->setTelephone($value);
                break;
            case 17:
                $this->setFax($value);
                break;
            case 18:
                $this->setOrganismerpa($value);
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
        $keys = CommonRPAPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAcronymeorg($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrganisme($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNom($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPrenom($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAdresse1($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdresse2($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCodepostal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVille($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIdService($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFonction($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPays($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateCreation($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDateModification($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setResponsableArchive($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEmail($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTelephone($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setFax($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOrganismerpa($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonRPAPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonRPAPeer::ID)) $criteria->add(CommonRPAPeer::ID, $this->id);
        if ($this->isColumnModified(CommonRPAPeer::ACRONYMEORG)) $criteria->add(CommonRPAPeer::ACRONYMEORG, $this->acronymeorg);
        if ($this->isColumnModified(CommonRPAPeer::ORGANISME)) $criteria->add(CommonRPAPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonRPAPeer::NOM)) $criteria->add(CommonRPAPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonRPAPeer::PRENOM)) $criteria->add(CommonRPAPeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonRPAPeer::ADRESSE1)) $criteria->add(CommonRPAPeer::ADRESSE1, $this->adresse1);
        if ($this->isColumnModified(CommonRPAPeer::ADRESSE2)) $criteria->add(CommonRPAPeer::ADRESSE2, $this->adresse2);
        if ($this->isColumnModified(CommonRPAPeer::CODEPOSTAL)) $criteria->add(CommonRPAPeer::CODEPOSTAL, $this->codepostal);
        if ($this->isColumnModified(CommonRPAPeer::VILLE)) $criteria->add(CommonRPAPeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonRPAPeer::ID_SERVICE)) $criteria->add(CommonRPAPeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(CommonRPAPeer::FONCTION)) $criteria->add(CommonRPAPeer::FONCTION, $this->fonction);
        if ($this->isColumnModified(CommonRPAPeer::PAYS)) $criteria->add(CommonRPAPeer::PAYS, $this->pays);
        if ($this->isColumnModified(CommonRPAPeer::DATE_CREATION)) $criteria->add(CommonRPAPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonRPAPeer::DATE_MODIFICATION)) $criteria->add(CommonRPAPeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonRPAPeer::RESPONSABLE_ARCHIVE)) $criteria->add(CommonRPAPeer::RESPONSABLE_ARCHIVE, $this->responsable_archive);
        if ($this->isColumnModified(CommonRPAPeer::EMAIL)) $criteria->add(CommonRPAPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonRPAPeer::TELEPHONE)) $criteria->add(CommonRPAPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonRPAPeer::FAX)) $criteria->add(CommonRPAPeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonRPAPeer::ORGANISMERPA)) $criteria->add(CommonRPAPeer::ORGANISMERPA, $this->organismerpa);

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
        $criteria = new Criteria(CommonRPAPeer::DATABASE_NAME);
        $criteria->add(CommonRPAPeer::ID, $this->id);
        $criteria->add(CommonRPAPeer::ACRONYMEORG, $this->acronymeorg);

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
        $pks[1] = $this->getAcronymeorg();

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
        $this->setAcronymeorg($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getAcronymeorg());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonRPA (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAcronymeorg($this->getAcronymeorg());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setNom($this->getNom());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setAdresse1($this->getAdresse1());
        $copyObj->setAdresse2($this->getAdresse2());
        $copyObj->setCodepostal($this->getCodepostal());
        $copyObj->setVille($this->getVille());
        $copyObj->setIdService($this->getIdService());
        $copyObj->setFonction($this->getFonction());
        $copyObj->setPays($this->getPays());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setResponsableArchive($this->getResponsableArchive());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setOrganismerpa($this->getOrganismerpa());
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
     * @return CommonRPA Clone of current object.
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
     * @return CommonRPAPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonRPAPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->acronymeorg = null;
        $this->organisme = null;
        $this->nom = null;
        $this->prenom = null;
        $this->adresse1 = null;
        $this->adresse2 = null;
        $this->codepostal = null;
        $this->ville = null;
        $this->id_service = null;
        $this->fonction = null;
        $this->pays = null;
        $this->date_creation = null;
        $this->date_modification = null;
        $this->responsable_archive = null;
        $this->email = null;
        $this->telephone = null;
        $this->fax = null;
        $this->organismerpa = null;
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
        return (string) $this->exportTo(CommonRPAPeer::DEFAULT_STRING_FORMAT);
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
