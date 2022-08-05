<?php


/**
 * Base class that represents a row from the 'EnchereEntreprisePmi' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEnchereEntreprisePmi extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEnchereEntreprisePmiPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEnchereEntreprisePmiPeer
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
     * The value for the idenchere field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $idenchere;

    /**
     * The value for the nom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom;

    /**
     * The value for the numeroanonyme field.
     * @var        int
     */
    protected $numeroanonyme;

    /**
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the mdp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mdp;

    /**
     * The value for the notetechnique field.
     * @var        double
     */
    protected $notetechnique;

    /**
     * The value for the identreprise field.
     * @var        int
     */
    protected $identreprise;

    /**
     * The value for the dateping field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $dateping;

    /**
     * The value for the nomagentconnecte field.
     * @var        string
     */
    protected $nomagentconnecte;

    /**
     * @var        CommonEncherePmi
     */
    protected $aCommonEncherePmi;

    /**
     * @var        PropelObjectCollection|CommonEnchereOffre[] Collection to store aggregation of CommonEnchereOffre objects.
     */
    protected $collCommonEnchereOffres;
    protected $collCommonEnchereOffresPartial;

    /**
     * @var        PropelObjectCollection|CommonEnchereValeursInitiales[] Collection to store aggregation of CommonEnchereValeursInitiales objects.
     */
    protected $collCommonEnchereValeursInitialess;
    protected $collCommonEnchereValeursInitialessPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonEnchereOffresScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonEnchereValeursInitialessScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->organisme = '';
        $this->idenchere = 0;
        $this->nom = '';
        $this->email = '';
        $this->mdp = '';
        $this->dateping = NULL;
    }

    /**
     * Initializes internal state of BaseCommonEnchereEntreprisePmi object.
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
     * Get the [idenchere] column value.
     * 
     * @return int
     */
    public function getIdenchere()
    {

        return $this->idenchere;
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
     * Get the [numeroanonyme] column value.
     * 
     * @return int
     */
    public function getNumeroanonyme()
    {

        return $this->numeroanonyme;
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
     * Get the [mdp] column value.
     * 
     * @return string
     */
    public function getMdp()
    {

        return $this->mdp;
    }

    /**
     * Get the [notetechnique] column value.
     * 
     * @return double
     */
    public function getNotetechnique()
    {

        return $this->notetechnique;
    }

    /**
     * Get the [identreprise] column value.
     * 
     * @return int
     */
    public function getIdentreprise()
    {

        return $this->identreprise;
    }

    /**
     * Get the [optionally formatted] temporal [dateping] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateping($format = 'Y-m-d H:i:s')
    {
        if ($this->dateping === null) {
            return null;
        }

        if ($this->dateping === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateping);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateping, true), $x);
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
     * Get the [nomagentconnecte] column value.
     * 
     * @return string
     */
    public function getNomagentconnecte()
    {

        return $this->nomagentconnecte;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::ORGANISME;
        }

        if ($this->aCommonEncherePmi !== null && $this->aCommonEncherePmi->getOrganisme() !== $v) {
            $this->aCommonEncherePmi = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [idenchere] column.
     * 
     * @param int $v new value
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setIdenchere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idenchere !== $v) {
            $this->idenchere = $v;
            $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::IDENCHERE;
        }

        if ($this->aCommonEncherePmi !== null && $this->aCommonEncherePmi->getId() !== $v) {
            $this->aCommonEncherePmi = null;
        }


        return $this;
    } // setIdenchere()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [numeroanonyme] column.
     * 
     * @param int $v new value
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setNumeroanonyme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numeroanonyme !== $v) {
            $this->numeroanonyme = $v;
            $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::NUMEROANONYME;
        }


        return $this;
    } // setNumeroanonyme()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [mdp] column.
     * 
     * @param string $v new value
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setMdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mdp !== $v) {
            $this->mdp = $v;
            $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::MDP;
        }


        return $this;
    } // setMdp()

    /**
     * Set the value of [notetechnique] column.
     * 
     * @param double $v new value
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setNotetechnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->notetechnique !== $v) {
            $this->notetechnique = $v;
            $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::NOTETECHNIQUE;
        }


        return $this;
    } // setNotetechnique()

    /**
     * Set the value of [identreprise] column.
     * 
     * @param int $v new value
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setIdentreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->identreprise !== $v) {
            $this->identreprise = $v;
            $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::IDENTREPRISE;
        }


        return $this;
    } // setIdentreprise()

    /**
     * Sets the value of [dateping] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setDateping($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateping !== null || $dt !== null) {
            $currentDateAsString = ($this->dateping !== null && $tmpDt = new DateTime($this->dateping)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->dateping = $newDateAsString;
                $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::DATEPING;
            }
        } // if either are not null


        return $this;
    } // setDateping()

    /**
     * Set the value of [nomagentconnecte] column.
     * 
     * @param string $v new value
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setNomagentconnecte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nomagentconnecte !== $v) {
            $this->nomagentconnecte = $v;
            $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::NOMAGENTCONNECTE;
        }


        return $this;
    } // setNomagentconnecte()

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

            if ($this->idenchere !== 0) {
                return false;
            }

            if ($this->nom !== '') {
                return false;
            }

            if ($this->email !== '') {
                return false;
            }

            if ($this->mdp !== '') {
                return false;
            }

            if ($this->dateping !== NULL) {
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
            $this->idenchere = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->nom = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->numeroanonyme = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->mdp = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->notetechnique = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->identreprise = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->dateping = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->nomagentconnecte = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = CommonEnchereEntreprisePmiPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEnchereEntreprisePmi object", $e);
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

        if ($this->aCommonEncherePmi !== null && $this->organisme !== $this->aCommonEncherePmi->getOrganisme()) {
            $this->aCommonEncherePmi = null;
        }
        if ($this->aCommonEncherePmi !== null && $this->idenchere !== $this->aCommonEncherePmi->getId()) {
            $this->aCommonEncherePmi = null;
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
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEnchereEntreprisePmiPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonEncherePmi = null;
            $this->collCommonEnchereOffres = null;

            $this->collCommonEnchereValeursInitialess = null;

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
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEnchereEntreprisePmiQuery::create()
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
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonEnchereEntreprisePmiPeer::addInstanceToPool($this);
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

            if ($this->aCommonEncherePmi !== null) {
                if ($this->aCommonEncherePmi->isModified() || $this->aCommonEncherePmi->isNew()) {
                    $affectedRows += $this->aCommonEncherePmi->save($con);
                }
                $this->setCommonEncherePmi($this->aCommonEncherePmi);
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

            if ($this->commonEnchereOffresScheduledForDeletion !== null) {
                if (!$this->commonEnchereOffresScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonEnchereOffreQuery::create()
                        ->filterByPrimaryKeys($this->commonEnchereOffresScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonEnchereOffresScheduledForDeletion = null;
                }
            }

            if ($this->collCommonEnchereOffres !== null) {
                foreach ($this->collCommonEnchereOffres as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonEnchereValeursInitialessScheduledForDeletion !== null) {
                if (!$this->commonEnchereValeursInitialessScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonEnchereValeursInitialesQuery::create()
                        ->filterByPrimaryKeys($this->commonEnchereValeursInitialessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonEnchereValeursInitialessScheduledForDeletion = null;
                }
            }

            if ($this->collCommonEnchereValeursInitialess !== null) {
                foreach ($this->collCommonEnchereValeursInitialess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CommonEnchereEntreprisePmiPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonEnchereEntreprisePmiPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::IDENCHERE)) {
            $modifiedColumns[':p' . $index++]  = '`idEnchere`';
        }
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::NUMEROANONYME)) {
            $modifiedColumns[':p' . $index++]  = '`numeroAnonyme`';
        }
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::MDP)) {
            $modifiedColumns[':p' . $index++]  = '`mdp`';
        }
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::NOTETECHNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`noteTechnique`';
        }
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::IDENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`idEntreprise`';
        }
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::DATEPING)) {
            $modifiedColumns[':p' . $index++]  = '`datePing`';
        }
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::NOMAGENTCONNECTE)) {
            $modifiedColumns[':p' . $index++]  = '`nomAgentConnecte`';
        }

        $sql = sprintf(
            'INSERT INTO `EnchereEntreprisePmi` (%s) VALUES (%s)',
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
                    case '`idEnchere`':						
                        $stmt->bindValue($identifier, $this->idenchere, PDO::PARAM_INT);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`numeroAnonyme`':						
                        $stmt->bindValue($identifier, $this->numeroanonyme, PDO::PARAM_INT);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`mdp`':						
                        $stmt->bindValue($identifier, $this->mdp, PDO::PARAM_STR);
                        break;
                    case '`noteTechnique`':						
                        $stmt->bindValue($identifier, $this->notetechnique, PDO::PARAM_STR);
                        break;
                    case '`idEntreprise`':						
                        $stmt->bindValue($identifier, $this->identreprise, PDO::PARAM_INT);
                        break;
                    case '`datePing`':						
                        $stmt->bindValue($identifier, $this->dateping, PDO::PARAM_STR);
                        break;
                    case '`nomAgentConnecte`':						
                        $stmt->bindValue($identifier, $this->nomagentconnecte, PDO::PARAM_STR);
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

            if ($this->aCommonEncherePmi !== null) {
                if (!$this->aCommonEncherePmi->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonEncherePmi->getValidationFailures());
                }
            }


            if (($retval = CommonEnchereEntreprisePmiPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonEnchereOffres !== null) {
                    foreach ($this->collCommonEnchereOffres as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonEnchereValeursInitialess !== null) {
                    foreach ($this->collCommonEnchereValeursInitialess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = CommonEnchereEntreprisePmiPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdenchere();
                break;
            case 3:
                return $this->getNom();
                break;
            case 4:
                return $this->getNumeroanonyme();
                break;
            case 5:
                return $this->getEmail();
                break;
            case 6:
                return $this->getMdp();
                break;
            case 7:
                return $this->getNotetechnique();
                break;
            case 8:
                return $this->getIdentreprise();
                break;
            case 9:
                return $this->getDateping();
                break;
            case 10:
                return $this->getNomagentconnecte();
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
        if (isset($alreadyDumpedObjects['CommonEnchereEntreprisePmi'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEnchereEntreprisePmi'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonEnchereEntreprisePmiPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdenchere(),
            $keys[3] => $this->getNom(),
            $keys[4] => $this->getNumeroanonyme(),
            $keys[5] => $this->getEmail(),
            $keys[6] => $this->getMdp(),
            $keys[7] => $this->getNotetechnique(),
            $keys[8] => $this->getIdentreprise(),
            $keys[9] => $this->getDateping(),
            $keys[10] => $this->getNomagentconnecte(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonEncherePmi) {
                $result['CommonEncherePmi'] = $this->aCommonEncherePmi->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonEnchereOffres) {
                $result['CommonEnchereOffres'] = $this->collCommonEnchereOffres->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonEnchereValeursInitialess) {
                $result['CommonEnchereValeursInitialess'] = $this->collCommonEnchereValeursInitialess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonEnchereEntreprisePmiPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdenchere($value);
                break;
            case 3:
                $this->setNom($value);
                break;
            case 4:
                $this->setNumeroanonyme($value);
                break;
            case 5:
                $this->setEmail($value);
                break;
            case 6:
                $this->setMdp($value);
                break;
            case 7:
                $this->setNotetechnique($value);
                break;
            case 8:
                $this->setIdentreprise($value);
                break;
            case 9:
                $this->setDateping($value);
                break;
            case 10:
                $this->setNomagentconnecte($value);
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
        $keys = CommonEnchereEntreprisePmiPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdenchere($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNom($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNumeroanonyme($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmail($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMdp($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNotetechnique($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdentreprise($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateping($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNomagentconnecte($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::ID)) $criteria->add(CommonEnchereEntreprisePmiPeer::ID, $this->id);
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::ORGANISME)) $criteria->add(CommonEnchereEntreprisePmiPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::IDENCHERE)) $criteria->add(CommonEnchereEntreprisePmiPeer::IDENCHERE, $this->idenchere);
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::NOM)) $criteria->add(CommonEnchereEntreprisePmiPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::NUMEROANONYME)) $criteria->add(CommonEnchereEntreprisePmiPeer::NUMEROANONYME, $this->numeroanonyme);
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::EMAIL)) $criteria->add(CommonEnchereEntreprisePmiPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::MDP)) $criteria->add(CommonEnchereEntreprisePmiPeer::MDP, $this->mdp);
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::NOTETECHNIQUE)) $criteria->add(CommonEnchereEntreprisePmiPeer::NOTETECHNIQUE, $this->notetechnique);
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::IDENTREPRISE)) $criteria->add(CommonEnchereEntreprisePmiPeer::IDENTREPRISE, $this->identreprise);
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::DATEPING)) $criteria->add(CommonEnchereEntreprisePmiPeer::DATEPING, $this->dateping);
        if ($this->isColumnModified(CommonEnchereEntreprisePmiPeer::NOMAGENTCONNECTE)) $criteria->add(CommonEnchereEntreprisePmiPeer::NOMAGENTCONNECTE, $this->nomagentconnecte);

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
        $criteria = new Criteria(CommonEnchereEntreprisePmiPeer::DATABASE_NAME);
        $criteria->add(CommonEnchereEntreprisePmiPeer::ID, $this->id);
        $criteria->add(CommonEnchereEntreprisePmiPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonEnchereEntreprisePmi (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdenchere($this->getIdenchere());
        $copyObj->setNom($this->getNom());
        $copyObj->setNumeroanonyme($this->getNumeroanonyme());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setMdp($this->getMdp());
        $copyObj->setNotetechnique($this->getNotetechnique());
        $copyObj->setIdentreprise($this->getIdentreprise());
        $copyObj->setDateping($this->getDateping());
        $copyObj->setNomagentconnecte($this->getNomagentconnecte());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonEnchereOffres() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonEnchereOffre($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonEnchereValeursInitialess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonEnchereValeursInitiales($relObj->copy($deepCopy));
                }
            }

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
     * @return CommonEnchereEntreprisePmi Clone of current object.
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
     * @return CommonEnchereEntreprisePmiPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEnchereEntreprisePmiPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonEncherePmi object.
     *
     * @param   CommonEncherePmi $v
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonEncherePmi(CommonEncherePmi $v = null)
    {
        if ($v === null) {
            $this->setIdenchere(0);
        } else {
            $this->setIdenchere($v->getId());
        }

        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        $this->aCommonEncherePmi = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonEncherePmi object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonEnchereEntreprisePmi($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonEncherePmi object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonEncherePmi The associated CommonEncherePmi object.
     * @throws PropelException
     */
    public function getCommonEncherePmi(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonEncherePmi === null && ($this->idenchere !== null && ($this->organisme !== "" && $this->organisme !== null)) && $doQuery) {
            $this->aCommonEncherePmi = CommonEncherePmiQuery::create()->findPk(array($this->idenchere, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonEncherePmi->addCommonEnchereEntreprisePmis($this);
             */
        }

        return $this->aCommonEncherePmi;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CommonEnchereOffre' == $relationName) {
            $this->initCommonEnchereOffres();
        }
        if ('CommonEnchereValeursInitiales' == $relationName) {
            $this->initCommonEnchereValeursInitialess();
        }
    }

    /**
     * Clears out the collCommonEnchereOffres collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     * @see        addCommonEnchereOffres()
     */
    public function clearCommonEnchereOffres()
    {
        $this->collCommonEnchereOffres = null; // important to set this to null since that means it is uninitialized
        $this->collCommonEnchereOffresPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonEnchereOffres collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonEnchereOffres($v = true)
    {
        $this->collCommonEnchereOffresPartial = $v;
    }

    /**
     * Initializes the collCommonEnchereOffres collection.
     *
     * By default this just sets the collCommonEnchereOffres collection to an empty array (like clearcollCommonEnchereOffres());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonEnchereOffres($overrideExisting = true)
    {
        if (null !== $this->collCommonEnchereOffres && !$overrideExisting) {
            return;
        }
        $this->collCommonEnchereOffres = new PropelObjectCollection();
        $this->collCommonEnchereOffres->setModel('CommonEnchereOffre');
    }

    /**
     * Gets an array of CommonEnchereOffre objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonEnchereEntreprisePmi is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonEnchereOffre[] List of CommonEnchereOffre objects
     * @throws PropelException
     */
    public function getCommonEnchereOffres($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereOffresPartial && !$this->isNew();
        if (null === $this->collCommonEnchereOffres || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereOffres) {
                // return empty collection
                $this->initCommonEnchereOffres();
            } else {
                $collCommonEnchereOffres = CommonEnchereOffreQuery::create(null, $criteria)
                    ->filterByCommonEnchereEntreprisePmi($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonEnchereOffresPartial && count($collCommonEnchereOffres)) {
                      $this->initCommonEnchereOffres(false);

                      foreach ($collCommonEnchereOffres as $obj) {
                        if (false == $this->collCommonEnchereOffres->contains($obj)) {
                          $this->collCommonEnchereOffres->append($obj);
                        }
                      }

                      $this->collCommonEnchereOffresPartial = true;
                    }

                    $collCommonEnchereOffres->getInternalIterator()->rewind();

                    return $collCommonEnchereOffres;
                }

                if ($partial && $this->collCommonEnchereOffres) {
                    foreach ($this->collCommonEnchereOffres as $obj) {
                        if ($obj->isNew()) {
                            $collCommonEnchereOffres[] = $obj;
                        }
                    }
                }

                $this->collCommonEnchereOffres = $collCommonEnchereOffres;
                $this->collCommonEnchereOffresPartial = false;
            }
        }

        return $this->collCommonEnchereOffres;
    }

    /**
     * Sets a collection of CommonEnchereOffre objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonEnchereOffres A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setCommonEnchereOffres(PropelCollection $commonEnchereOffres, PropelPDO $con = null)
    {
        $commonEnchereOffresToDelete = $this->getCommonEnchereOffres(new Criteria(), $con)->diff($commonEnchereOffres);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonEnchereOffresScheduledForDeletion = clone $commonEnchereOffresToDelete;

        foreach ($commonEnchereOffresToDelete as $commonEnchereOffreRemoved) {
            $commonEnchereOffreRemoved->setCommonEnchereEntreprisePmi(null);
        }

        $this->collCommonEnchereOffres = null;
        foreach ($commonEnchereOffres as $commonEnchereOffre) {
            $this->addCommonEnchereOffre($commonEnchereOffre);
        }

        $this->collCommonEnchereOffres = $commonEnchereOffres;
        $this->collCommonEnchereOffresPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonEnchereOffre objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonEnchereOffre objects.
     * @throws PropelException
     */
    public function countCommonEnchereOffres(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereOffresPartial && !$this->isNew();
        if (null === $this->collCommonEnchereOffres || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereOffres) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonEnchereOffres());
            }
            $query = CommonEnchereOffreQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonEnchereEntreprisePmi($this)
                ->count($con);
        }

        return count($this->collCommonEnchereOffres);
    }

    /**
     * Method called to associate a CommonEnchereOffre object to this object
     * through the CommonEnchereOffre foreign key attribute.
     *
     * @param   CommonEnchereOffre $l CommonEnchereOffre
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function addCommonEnchereOffre(CommonEnchereOffre $l)
    {
        if ($this->collCommonEnchereOffres === null) {
            $this->initCommonEnchereOffres();
            $this->collCommonEnchereOffresPartial = true;
        }
        if (!in_array($l, $this->collCommonEnchereOffres->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonEnchereOffre($l);
        }

        return $this;
    }

    /**
     * @param	CommonEnchereOffre $commonEnchereOffre The commonEnchereOffre object to add.
     */
    protected function doAddCommonEnchereOffre($commonEnchereOffre)
    {
        $this->collCommonEnchereOffres[]= $commonEnchereOffre;
        $commonEnchereOffre->setCommonEnchereEntreprisePmi($this);
    }

    /**
     * @param	CommonEnchereOffre $commonEnchereOffre The commonEnchereOffre object to remove.
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function removeCommonEnchereOffre($commonEnchereOffre)
    {
        if ($this->getCommonEnchereOffres()->contains($commonEnchereOffre)) {
            $this->collCommonEnchereOffres->remove($this->collCommonEnchereOffres->search($commonEnchereOffre));
            if (null === $this->commonEnchereOffresScheduledForDeletion) {
                $this->commonEnchereOffresScheduledForDeletion = clone $this->collCommonEnchereOffres;
                $this->commonEnchereOffresScheduledForDeletion->clear();
            }
            $this->commonEnchereOffresScheduledForDeletion[]= clone $commonEnchereOffre;
            $commonEnchereOffre->setCommonEnchereEntreprisePmi(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonEnchereEntreprisePmi is new, it will return
     * an empty collection; or if this CommonEnchereEntreprisePmi has previously
     * been saved, it will retrieve related CommonEnchereOffres from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonEnchereEntreprisePmi.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonEnchereOffre[] List of CommonEnchereOffre objects
     */
    public function getCommonEnchereOffresJoinCommonEncherePmiRelatedByIdenchereOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonEnchereOffreQuery::create(null, $criteria);
        $query->joinWith('CommonEncherePmiRelatedByIdenchereOrganisme', $join_behavior);

        return $this->getCommonEnchereOffres($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonEnchereEntreprisePmi is new, it will return
     * an empty collection; or if this CommonEnchereEntreprisePmi has previously
     * been saved, it will retrieve related CommonEnchereOffres from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonEnchereEntreprisePmi.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonEnchereOffre[] List of CommonEnchereOffre objects
     */
    public function getCommonEnchereOffresJoinCommonEncherePmiRelatedByIdenchere($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonEnchereOffreQuery::create(null, $criteria);
        $query->joinWith('CommonEncherePmiRelatedByIdenchere', $join_behavior);

        return $this->getCommonEnchereOffres($query, $con);
    }

    /**
     * Clears out the collCommonEnchereValeursInitialess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     * @see        addCommonEnchereValeursInitialess()
     */
    public function clearCommonEnchereValeursInitialess()
    {
        $this->collCommonEnchereValeursInitialess = null; // important to set this to null since that means it is uninitialized
        $this->collCommonEnchereValeursInitialessPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonEnchereValeursInitialess collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonEnchereValeursInitialess($v = true)
    {
        $this->collCommonEnchereValeursInitialessPartial = $v;
    }

    /**
     * Initializes the collCommonEnchereValeursInitialess collection.
     *
     * By default this just sets the collCommonEnchereValeursInitialess collection to an empty array (like clearcollCommonEnchereValeursInitialess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonEnchereValeursInitialess($overrideExisting = true)
    {
        if (null !== $this->collCommonEnchereValeursInitialess && !$overrideExisting) {
            return;
        }
        $this->collCommonEnchereValeursInitialess = new PropelObjectCollection();
        $this->collCommonEnchereValeursInitialess->setModel('CommonEnchereValeursInitiales');
    }

    /**
     * Gets an array of CommonEnchereValeursInitiales objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonEnchereEntreprisePmi is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonEnchereValeursInitiales[] List of CommonEnchereValeursInitiales objects
     * @throws PropelException
     */
    public function getCommonEnchereValeursInitialess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereValeursInitialessPartial && !$this->isNew();
        if (null === $this->collCommonEnchereValeursInitialess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereValeursInitialess) {
                // return empty collection
                $this->initCommonEnchereValeursInitialess();
            } else {
                $collCommonEnchereValeursInitialess = CommonEnchereValeursInitialesQuery::create(null, $criteria)
                    ->filterByCommonEnchereEntreprisePmi($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonEnchereValeursInitialessPartial && count($collCommonEnchereValeursInitialess)) {
                      $this->initCommonEnchereValeursInitialess(false);

                      foreach ($collCommonEnchereValeursInitialess as $obj) {
                        if (false == $this->collCommonEnchereValeursInitialess->contains($obj)) {
                          $this->collCommonEnchereValeursInitialess->append($obj);
                        }
                      }

                      $this->collCommonEnchereValeursInitialessPartial = true;
                    }

                    $collCommonEnchereValeursInitialess->getInternalIterator()->rewind();

                    return $collCommonEnchereValeursInitialess;
                }

                if ($partial && $this->collCommonEnchereValeursInitialess) {
                    foreach ($this->collCommonEnchereValeursInitialess as $obj) {
                        if ($obj->isNew()) {
                            $collCommonEnchereValeursInitialess[] = $obj;
                        }
                    }
                }

                $this->collCommonEnchereValeursInitialess = $collCommonEnchereValeursInitialess;
                $this->collCommonEnchereValeursInitialessPartial = false;
            }
        }

        return $this->collCommonEnchereValeursInitialess;
    }

    /**
     * Sets a collection of CommonEnchereValeursInitiales objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonEnchereValeursInitialess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function setCommonEnchereValeursInitialess(PropelCollection $commonEnchereValeursInitialess, PropelPDO $con = null)
    {
        $commonEnchereValeursInitialessToDelete = $this->getCommonEnchereValeursInitialess(new Criteria(), $con)->diff($commonEnchereValeursInitialess);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonEnchereValeursInitialessScheduledForDeletion = clone $commonEnchereValeursInitialessToDelete;

        foreach ($commonEnchereValeursInitialessToDelete as $commonEnchereValeursInitialesRemoved) {
            $commonEnchereValeursInitialesRemoved->setCommonEnchereEntreprisePmi(null);
        }

        $this->collCommonEnchereValeursInitialess = null;
        foreach ($commonEnchereValeursInitialess as $commonEnchereValeursInitiales) {
            $this->addCommonEnchereValeursInitiales($commonEnchereValeursInitiales);
        }

        $this->collCommonEnchereValeursInitialess = $commonEnchereValeursInitialess;
        $this->collCommonEnchereValeursInitialessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonEnchereValeursInitiales objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonEnchereValeursInitiales objects.
     * @throws PropelException
     */
    public function countCommonEnchereValeursInitialess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereValeursInitialessPartial && !$this->isNew();
        if (null === $this->collCommonEnchereValeursInitialess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereValeursInitialess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonEnchereValeursInitialess());
            }
            $query = CommonEnchereValeursInitialesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonEnchereEntreprisePmi($this)
                ->count($con);
        }

        return count($this->collCommonEnchereValeursInitialess);
    }

    /**
     * Method called to associate a CommonEnchereValeursInitiales object to this object
     * through the CommonEnchereValeursInitiales foreign key attribute.
     *
     * @param   CommonEnchereValeursInitiales $l CommonEnchereValeursInitiales
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function addCommonEnchereValeursInitiales(CommonEnchereValeursInitiales $l)
    {
        if ($this->collCommonEnchereValeursInitialess === null) {
            $this->initCommonEnchereValeursInitialess();
            $this->collCommonEnchereValeursInitialessPartial = true;
        }
        if (!in_array($l, $this->collCommonEnchereValeursInitialess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonEnchereValeursInitiales($l);
        }

        return $this;
    }

    /**
     * @param	CommonEnchereValeursInitiales $commonEnchereValeursInitiales The commonEnchereValeursInitiales object to add.
     */
    protected function doAddCommonEnchereValeursInitiales($commonEnchereValeursInitiales)
    {
        $this->collCommonEnchereValeursInitialess[]= $commonEnchereValeursInitiales;
        $commonEnchereValeursInitiales->setCommonEnchereEntreprisePmi($this);
    }

    /**
     * @param	CommonEnchereValeursInitiales $commonEnchereValeursInitiales The commonEnchereValeursInitiales object to remove.
     * @return CommonEnchereEntreprisePmi The current object (for fluent API support)
     */
    public function removeCommonEnchereValeursInitiales($commonEnchereValeursInitiales)
    {
        if ($this->getCommonEnchereValeursInitialess()->contains($commonEnchereValeursInitiales)) {
            $this->collCommonEnchereValeursInitialess->remove($this->collCommonEnchereValeursInitialess->search($commonEnchereValeursInitiales));
            if (null === $this->commonEnchereValeursInitialessScheduledForDeletion) {
                $this->commonEnchereValeursInitialessScheduledForDeletion = clone $this->collCommonEnchereValeursInitialess;
                $this->commonEnchereValeursInitialessScheduledForDeletion->clear();
            }
            $this->commonEnchereValeursInitialessScheduledForDeletion[]= clone $commonEnchereValeursInitiales;
            $commonEnchereValeursInitiales->setCommonEnchereEntreprisePmi(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonEnchereEntreprisePmi is new, it will return
     * an empty collection; or if this CommonEnchereEntreprisePmi has previously
     * been saved, it will retrieve related CommonEnchereValeursInitialess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonEnchereEntreprisePmi.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonEnchereValeursInitiales[] List of CommonEnchereValeursInitiales objects
     */
    public function getCommonEnchereValeursInitialessJoinCommonEnchereReference($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonEnchereValeursInitialesQuery::create(null, $criteria);
        $query->joinWith('CommonEnchereReference', $join_behavior);

        return $this->getCommonEnchereValeursInitialess($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->idenchere = null;
        $this->nom = null;
        $this->numeroanonyme = null;
        $this->email = null;
        $this->mdp = null;
        $this->notetechnique = null;
        $this->identreprise = null;
        $this->dateping = null;
        $this->nomagentconnecte = null;
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
            if ($this->collCommonEnchereOffres) {
                foreach ($this->collCommonEnchereOffres as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonEnchereValeursInitialess) {
                foreach ($this->collCommonEnchereValeursInitialess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonEncherePmi instanceof Persistent) {
              $this->aCommonEncherePmi->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonEnchereOffres instanceof PropelCollection) {
            $this->collCommonEnchereOffres->clearIterator();
        }
        $this->collCommonEnchereOffres = null;
        if ($this->collCommonEnchereValeursInitialess instanceof PropelCollection) {
            $this->collCommonEnchereValeursInitialess->clearIterator();
        }
        $this->collCommonEnchereValeursInitialess = null;
        $this->aCommonEncherePmi = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonEnchereEntreprisePmiPeer::DEFAULT_STRING_FORMAT);
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
