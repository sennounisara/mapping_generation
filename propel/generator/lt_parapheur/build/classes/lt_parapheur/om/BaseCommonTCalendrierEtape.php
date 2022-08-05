<?php


/**
 * Base class that represents a row from the 't_calendrier_etape' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCalendrierEtape extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCalendrierEtapePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCalendrierEtapePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_calendrier_etape field.
     * @var        int
     */
    protected $id_calendrier_etape;

    /**
     * The value for the id_calendrier field.
     * @var        int
     */
    protected $id_calendrier;

    /**
     * The value for the code field.
     * @var        string
     */
    protected $code;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the date_initiale field.
     * @var        string
     */
    protected $date_initiale;

    /**
     * The value for the date_prevue field.
     * @var        string
     */
    protected $date_prevue;

    /**
     * The value for the position field.
     * @var        int
     */
    protected $position;

    /**
     * The value for the libre field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $libre;

    /**
     * The value for the date_reelle_confirmee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $date_reelle_confirmee;

    /**
     * @var        CommonTCalendrier
     */
    protected $aCommonTCalendrier;

    /**
     * @var        PropelObjectCollection|CommonTCalendrierTransition[] Collection to store aggregation of CommonTCalendrierTransition objects.
     */
    protected $collCommonTCalendrierTransitionsRelatedByIdEtapeSource;
    protected $collCommonTCalendrierTransitionsRelatedByIdEtapeSourcePartial;

    /**
     * @var        PropelObjectCollection|CommonTCalendrierTransition[] Collection to store aggregation of CommonTCalendrierTransition objects.
     */
    protected $collCommonTCalendrierTransitionsRelatedByIdEtapeCible;
    protected $collCommonTCalendrierTransitionsRelatedByIdEtapeCiblePartial;

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
    protected $commonTCalendrierTransitionsRelatedByIdEtapeSourceScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCalendrierTransitionsRelatedByIdEtapeCibleScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->libre = false;
        $this->date_reelle_confirmee = '0';
    }

    /**
     * Initializes internal state of BaseCommonTCalendrierEtape object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_calendrier_etape] column value.
     * 
     * @return int
     */
    public function getIdCalendrierEtape()
    {

        return $this->id_calendrier_etape;
    }

    /**
     * Get the [id_calendrier] column value.
     * 
     * @return int
     */
    public function getIdCalendrier()
    {

        return $this->id_calendrier;
    }

    /**
     * Get the [code] column value.
     * 
     * @return string
     */
    public function getCode()
    {

        return $this->code;
    }

    /**
     * Get the [libelle] column value.
     * 
     * @return string
     */
    public function getLibelle()
    {

        return $this->libelle;
    }

    /**
     * Get the [optionally formatted] temporal [date_initiale] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateInitiale($format = null)
    {
        if ($this->date_initiale === null) {
            return null;
        }

        if ($this->date_initiale === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_initiale);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_initiale, true), $x);
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
     * Get the [optionally formatted] temporal [date_prevue] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatePrevue($format = null)
    {
        if ($this->date_prevue === null) {
            return null;
        }

        if ($this->date_prevue === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_prevue);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_prevue, true), $x);
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
     * Get the [position] column value.
     * 
     * @return int
     */
    public function getPosition()
    {

        return $this->position;
    }

    /**
     * Get the [libre] column value.
     * 
     * @return boolean
     */
    public function getLibre()
    {

        return $this->libre;
    }

    /**
     * Get the [date_reelle_confirmee] column value.
     * 
     * @return string
     */
    public function getDateReelleConfirmee()
    {

        return $this->date_reelle_confirmee;
    }

    /**
     * Set the value of [id_calendrier_etape] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setIdCalendrierEtape($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_calendrier_etape !== $v) {
            $this->id_calendrier_etape = $v;
            $this->modifiedColumns[] = CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE;
        }


        return $this;
    } // setIdCalendrierEtape()

    /**
     * Set the value of [id_calendrier] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setIdCalendrier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_calendrier !== $v) {
            $this->id_calendrier = $v;
            $this->modifiedColumns[] = CommonTCalendrierEtapePeer::ID_CALENDRIER;
        }

        if ($this->aCommonTCalendrier !== null && $this->aCommonTCalendrier->getIdCalendrier() !== $v) {
            $this->aCommonTCalendrier = null;
        }


        return $this;
    } // setIdCalendrier()

    /**
     * Set the value of [code] column.
     * 
     * @param string $v new value
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[] = CommonTCalendrierEtapePeer::CODE;
        }


        return $this;
    } // setCode()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonTCalendrierEtapePeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Sets the value of [date_initiale] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setDateInitiale($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_initiale !== null || $dt !== null) {
            $currentDateAsString = ($this->date_initiale !== null && $tmpDt = new DateTime($this->date_initiale)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_initiale = $newDateAsString;
                $this->modifiedColumns[] = CommonTCalendrierEtapePeer::DATE_INITIALE;
            }
        } // if either are not null


        return $this;
    } // setDateInitiale()

    /**
     * Sets the value of [date_prevue] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setDatePrevue($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_prevue !== null || $dt !== null) {
            $currentDateAsString = ($this->date_prevue !== null && $tmpDt = new DateTime($this->date_prevue)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_prevue = $newDateAsString;
                $this->modifiedColumns[] = CommonTCalendrierEtapePeer::DATE_PREVUE;
            }
        } // if either are not null


        return $this;
    } // setDatePrevue()

    /**
     * Set the value of [position] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setPosition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->position !== $v) {
            $this->position = $v;
            $this->modifiedColumns[] = CommonTCalendrierEtapePeer::POSITION;
        }


        return $this;
    } // setPosition()

    /**
     * Sets the value of the [libre] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setLibre($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->libre !== $v) {
            $this->libre = $v;
            $this->modifiedColumns[] = CommonTCalendrierEtapePeer::LIBRE;
        }


        return $this;
    } // setLibre()

    /**
     * Set the value of [date_reelle_confirmee] column.
     * 
     * @param string $v new value
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setDateReelleConfirmee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reelle_confirmee !== $v) {
            $this->date_reelle_confirmee = $v;
            $this->modifiedColumns[] = CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE;
        }


        return $this;
    } // setDateReelleConfirmee()

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
            if ($this->libre !== false) {
                return false;
            }

            if ($this->date_reelle_confirmee !== '0') {
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

            $this->id_calendrier_etape = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_calendrier = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->code = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->date_initiale = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_prevue = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->position = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->libre = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->date_reelle_confirmee = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = CommonTCalendrierEtapePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCalendrierEtape object", $e);
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

        if ($this->aCommonTCalendrier !== null && $this->id_calendrier !== $this->aCommonTCalendrier->getIdCalendrier()) {
            $this->aCommonTCalendrier = null;
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
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCalendrierEtapePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonTCalendrier = null;
            $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource = null;

            $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible = null;

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
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCalendrierEtapeQuery::create()
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
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCalendrierEtapePeer::addInstanceToPool($this);
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

            if ($this->aCommonTCalendrier !== null) {
                if ($this->aCommonTCalendrier->isModified() || $this->aCommonTCalendrier->isNew()) {
                    $affectedRows += $this->aCommonTCalendrier->save($con);
                }
                $this->setCommonTCalendrier($this->aCommonTCalendrier);
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

            if ($this->commonTCalendrierTransitionsRelatedByIdEtapeSourceScheduledForDeletion !== null) {
                if (!$this->commonTCalendrierTransitionsRelatedByIdEtapeSourceScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonTCalendrierTransitionQuery::create()
                        ->filterByPrimaryKeys($this->commonTCalendrierTransitionsRelatedByIdEtapeSourceScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonTCalendrierTransitionsRelatedByIdEtapeSourceScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource !== null) {
                foreach ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCalendrierTransitionsRelatedByIdEtapeCibleScheduledForDeletion !== null) {
                if (!$this->commonTCalendrierTransitionsRelatedByIdEtapeCibleScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonTCalendrierTransitionQuery::create()
                        ->filterByPrimaryKeys($this->commonTCalendrierTransitionsRelatedByIdEtapeCibleScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonTCalendrierTransitionsRelatedByIdEtapeCibleScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible !== null) {
                foreach ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE;
        if (null !== $this->id_calendrier_etape) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_CALENDRIER_ETAPE`';
        }
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::ID_CALENDRIER)) {
            $modifiedColumns[':p' . $index++]  = '`ID_CALENDRIER`';
        }
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::CODE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE`';
        }
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE`';
        }
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::DATE_INITIALE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_INITIALE`';
        }
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::DATE_PREVUE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_PREVUE`';
        }
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::POSITION)) {
            $modifiedColumns[':p' . $index++]  = '`POSITION`';
        }
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::LIBRE)) {
            $modifiedColumns[':p' . $index++]  = '`LIBRE`';
        }
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_REELLE_CONFIRMEE`';
        }

        $sql = sprintf(
            'INSERT INTO `t_calendrier_etape` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_CALENDRIER_ETAPE`':						
                        $stmt->bindValue($identifier, $this->id_calendrier_etape, PDO::PARAM_INT);
                        break;
                    case '`ID_CALENDRIER`':						
                        $stmt->bindValue($identifier, $this->id_calendrier, PDO::PARAM_INT);
                        break;
                    case '`CODE`':						
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case '`LIBELLE`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`DATE_INITIALE`':						
                        $stmt->bindValue($identifier, $this->date_initiale, PDO::PARAM_STR);
                        break;
                    case '`DATE_PREVUE`':						
                        $stmt->bindValue($identifier, $this->date_prevue, PDO::PARAM_STR);
                        break;
                    case '`POSITION`':						
                        $stmt->bindValue($identifier, $this->position, PDO::PARAM_INT);
                        break;
                    case '`LIBRE`':
                        $stmt->bindValue($identifier, (int) $this->libre, PDO::PARAM_INT);
                        break;
                    case '`DATE_REELLE_CONFIRMEE`':						
                        $stmt->bindValue($identifier, $this->date_reelle_confirmee, PDO::PARAM_STR);
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
        $this->setIdCalendrierEtape($pk);

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

            if ($this->aCommonTCalendrier !== null) {
                if (!$this->aCommonTCalendrier->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTCalendrier->getValidationFailures());
                }
            }


            if (($retval = CommonTCalendrierEtapePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource !== null) {
                    foreach ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible !== null) {
                    foreach ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible as $referrerFK) {
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
        $pos = CommonTCalendrierEtapePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdCalendrierEtape();
                break;
            case 1:
                return $this->getIdCalendrier();
                break;
            case 2:
                return $this->getCode();
                break;
            case 3:
                return $this->getLibelle();
                break;
            case 4:
                return $this->getDateInitiale();
                break;
            case 5:
                return $this->getDatePrevue();
                break;
            case 6:
                return $this->getPosition();
                break;
            case 7:
                return $this->getLibre();
                break;
            case 8:
                return $this->getDateReelleConfirmee();
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
        if (isset($alreadyDumpedObjects['CommonTCalendrierEtape'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCalendrierEtape'][$this->getPrimaryKey()] = true;
        $keys = CommonTCalendrierEtapePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCalendrierEtape(),
            $keys[1] => $this->getIdCalendrier(),
            $keys[2] => $this->getCode(),
            $keys[3] => $this->getLibelle(),
            $keys[4] => $this->getDateInitiale(),
            $keys[5] => $this->getDatePrevue(),
            $keys[6] => $this->getPosition(),
            $keys[7] => $this->getLibre(),
            $keys[8] => $this->getDateReelleConfirmee(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonTCalendrier) {
                $result['CommonTCalendrier'] = $this->aCommonTCalendrier->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource) {
                $result['CommonTCalendrierTransitionsRelatedByIdEtapeSource'] = $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible) {
                $result['CommonTCalendrierTransitionsRelatedByIdEtapeCible'] = $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTCalendrierEtapePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdCalendrierEtape($value);
                break;
            case 1:
                $this->setIdCalendrier($value);
                break;
            case 2:
                $this->setCode($value);
                break;
            case 3:
                $this->setLibelle($value);
                break;
            case 4:
                $this->setDateInitiale($value);
                break;
            case 5:
                $this->setDatePrevue($value);
                break;
            case 6:
                $this->setPosition($value);
                break;
            case 7:
                $this->setLibre($value);
                break;
            case 8:
                $this->setDateReelleConfirmee($value);
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
        $keys = CommonTCalendrierEtapePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdCalendrierEtape($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdCalendrier($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCode($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDateInitiale($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDatePrevue($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPosition($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLibre($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDateReelleConfirmee($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCalendrierEtapePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE)) $criteria->add(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $this->id_calendrier_etape);
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::ID_CALENDRIER)) $criteria->add(CommonTCalendrierEtapePeer::ID_CALENDRIER, $this->id_calendrier);
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::CODE)) $criteria->add(CommonTCalendrierEtapePeer::CODE, $this->code);
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::LIBELLE)) $criteria->add(CommonTCalendrierEtapePeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::DATE_INITIALE)) $criteria->add(CommonTCalendrierEtapePeer::DATE_INITIALE, $this->date_initiale);
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::DATE_PREVUE)) $criteria->add(CommonTCalendrierEtapePeer::DATE_PREVUE, $this->date_prevue);
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::POSITION)) $criteria->add(CommonTCalendrierEtapePeer::POSITION, $this->position);
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::LIBRE)) $criteria->add(CommonTCalendrierEtapePeer::LIBRE, $this->libre);
        if ($this->isColumnModified(CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE)) $criteria->add(CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE, $this->date_reelle_confirmee);

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
        $criteria = new Criteria(CommonTCalendrierEtapePeer::DATABASE_NAME);
        $criteria->add(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $this->id_calendrier_etape);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdCalendrierEtape();
    }

    /**
     * Generic method to set the primary key (id_calendrier_etape column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCalendrierEtape($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdCalendrierEtape();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTCalendrierEtape (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdCalendrier($this->getIdCalendrier());
        $copyObj->setCode($this->getCode());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setDateInitiale($this->getDateInitiale());
        $copyObj->setDatePrevue($this->getDatePrevue());
        $copyObj->setPosition($this->getPosition());
        $copyObj->setLibre($this->getLibre());
        $copyObj->setDateReelleConfirmee($this->getDateReelleConfirmee());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTCalendrierTransitionsRelatedByIdEtapeSource() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCalendrierTransitionRelatedByIdEtapeSource($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCalendrierTransitionsRelatedByIdEtapeCible() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCalendrierTransitionRelatedByIdEtapeCible($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCalendrierEtape(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTCalendrierEtape Clone of current object.
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
     * @return CommonTCalendrierEtapePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCalendrierEtapePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonTCalendrier object.
     *
     * @param   CommonTCalendrier $v
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTCalendrier(CommonTCalendrier $v = null)
    {
        if ($v === null) {
            $this->setIdCalendrier(NULL);
        } else {
            $this->setIdCalendrier($v->getIdCalendrier());
        }

        $this->aCommonTCalendrier = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTCalendrier object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCalendrierEtape($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTCalendrier object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTCalendrier The associated CommonTCalendrier object.
     * @throws PropelException
     */
    public function getCommonTCalendrier(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTCalendrier === null && ($this->id_calendrier !== null) && $doQuery) {
            $this->aCommonTCalendrier = CommonTCalendrierQuery::create()->findPk($this->id_calendrier, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTCalendrier->addCommonTCalendrierEtapes($this);
             */
        }

        return $this->aCommonTCalendrier;
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
        if ('CommonTCalendrierTransitionRelatedByIdEtapeSource' == $relationName) {
            $this->initCommonTCalendrierTransitionsRelatedByIdEtapeSource();
        }
        if ('CommonTCalendrierTransitionRelatedByIdEtapeCible' == $relationName) {
            $this->initCommonTCalendrierTransitionsRelatedByIdEtapeCible();
        }
    }

    /**
     * Clears out the collCommonTCalendrierTransitionsRelatedByIdEtapeSource collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     * @see        addCommonTCalendrierTransitionsRelatedByIdEtapeSource()
     */
    public function clearCommonTCalendrierTransitionsRelatedByIdEtapeSource()
    {
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSourcePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCalendrierTransitionsRelatedByIdEtapeSource collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCalendrierTransitionsRelatedByIdEtapeSource($v = true)
    {
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSourcePartial = $v;
    }

    /**
     * Initializes the collCommonTCalendrierTransitionsRelatedByIdEtapeSource collection.
     *
     * By default this just sets the collCommonTCalendrierTransitionsRelatedByIdEtapeSource collection to an empty array (like clearcollCommonTCalendrierTransitionsRelatedByIdEtapeSource());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCalendrierTransitionsRelatedByIdEtapeSource($overrideExisting = true)
    {
        if (null !== $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource && !$overrideExisting) {
            return;
        }
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource = new PropelObjectCollection();
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource->setModel('CommonTCalendrierTransition');
    }

    /**
     * Gets an array of CommonTCalendrierTransition objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCalendrierEtape is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCalendrierTransition[] List of CommonTCalendrierTransition objects
     * @throws PropelException
     */
    public function getCommonTCalendrierTransitionsRelatedByIdEtapeSource($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSourcePartial && !$this->isNew();
        if (null === $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource) {
                // return empty collection
                $this->initCommonTCalendrierTransitionsRelatedByIdEtapeSource();
            } else {
                $collCommonTCalendrierTransitionsRelatedByIdEtapeSource = CommonTCalendrierTransitionQuery::create(null, $criteria)
                    ->filterByCommonTCalendrierEtapeRelatedByIdEtapeSource($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSourcePartial && count($collCommonTCalendrierTransitionsRelatedByIdEtapeSource)) {
                      $this->initCommonTCalendrierTransitionsRelatedByIdEtapeSource(false);

                      foreach ($collCommonTCalendrierTransitionsRelatedByIdEtapeSource as $obj) {
                        if (false == $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource->contains($obj)) {
                          $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource->append($obj);
                        }
                      }

                      $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSourcePartial = true;
                    }

                    $collCommonTCalendrierTransitionsRelatedByIdEtapeSource->getInternalIterator()->rewind();

                    return $collCommonTCalendrierTransitionsRelatedByIdEtapeSource;
                }

                if ($partial && $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource) {
                    foreach ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCalendrierTransitionsRelatedByIdEtapeSource[] = $obj;
                        }
                    }
                }

                $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource = $collCommonTCalendrierTransitionsRelatedByIdEtapeSource;
                $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSourcePartial = false;
            }
        }

        return $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource;
    }

    /**
     * Sets a collection of CommonTCalendrierTransitionRelatedByIdEtapeSource objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCalendrierTransitionsRelatedByIdEtapeSource A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setCommonTCalendrierTransitionsRelatedByIdEtapeSource(PropelCollection $commonTCalendrierTransitionsRelatedByIdEtapeSource, PropelPDO $con = null)
    {
        $commonTCalendrierTransitionsRelatedByIdEtapeSourceToDelete = $this->getCommonTCalendrierTransitionsRelatedByIdEtapeSource(new Criteria(), $con)->diff($commonTCalendrierTransitionsRelatedByIdEtapeSource);


        $this->commonTCalendrierTransitionsRelatedByIdEtapeSourceScheduledForDeletion = $commonTCalendrierTransitionsRelatedByIdEtapeSourceToDelete;

        foreach ($commonTCalendrierTransitionsRelatedByIdEtapeSourceToDelete as $commonTCalendrierTransitionRelatedByIdEtapeSourceRemoved) {
            $commonTCalendrierTransitionRelatedByIdEtapeSourceRemoved->setCommonTCalendrierEtapeRelatedByIdEtapeSource(null);
        }

        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource = null;
        foreach ($commonTCalendrierTransitionsRelatedByIdEtapeSource as $commonTCalendrierTransitionRelatedByIdEtapeSource) {
            $this->addCommonTCalendrierTransitionRelatedByIdEtapeSource($commonTCalendrierTransitionRelatedByIdEtapeSource);
        }

        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource = $commonTCalendrierTransitionsRelatedByIdEtapeSource;
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSourcePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCalendrierTransition objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCalendrierTransition objects.
     * @throws PropelException
     */
    public function countCommonTCalendrierTransitionsRelatedByIdEtapeSource(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSourcePartial && !$this->isNew();
        if (null === $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCalendrierTransitionsRelatedByIdEtapeSource());
            }
            $query = CommonTCalendrierTransitionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCalendrierEtapeRelatedByIdEtapeSource($this)
                ->count($con);
        }

        return count($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource);
    }

    /**
     * Method called to associate a CommonTCalendrierTransition object to this object
     * through the CommonTCalendrierTransition foreign key attribute.
     *
     * @param   CommonTCalendrierTransition $l CommonTCalendrierTransition
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function addCommonTCalendrierTransitionRelatedByIdEtapeSource(CommonTCalendrierTransition $l)
    {
        if ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource === null) {
            $this->initCommonTCalendrierTransitionsRelatedByIdEtapeSource();
            $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSourcePartial = true;
        }
        if (!in_array($l, $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCalendrierTransitionRelatedByIdEtapeSource($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCalendrierTransitionRelatedByIdEtapeSource $commonTCalendrierTransitionRelatedByIdEtapeSource The commonTCalendrierTransitionRelatedByIdEtapeSource object to add.
     */
    protected function doAddCommonTCalendrierTransitionRelatedByIdEtapeSource($commonTCalendrierTransitionRelatedByIdEtapeSource)
    {
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource[]= $commonTCalendrierTransitionRelatedByIdEtapeSource;
        $commonTCalendrierTransitionRelatedByIdEtapeSource->setCommonTCalendrierEtapeRelatedByIdEtapeSource($this);
    }

    /**
     * @param	CommonTCalendrierTransitionRelatedByIdEtapeSource $commonTCalendrierTransitionRelatedByIdEtapeSource The commonTCalendrierTransitionRelatedByIdEtapeSource object to remove.
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function removeCommonTCalendrierTransitionRelatedByIdEtapeSource($commonTCalendrierTransitionRelatedByIdEtapeSource)
    {
        if ($this->getCommonTCalendrierTransitionsRelatedByIdEtapeSource()->contains($commonTCalendrierTransitionRelatedByIdEtapeSource)) {
            $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource->remove($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource->search($commonTCalendrierTransitionRelatedByIdEtapeSource));
            if (null === $this->commonTCalendrierTransitionsRelatedByIdEtapeSourceScheduledForDeletion) {
                $this->commonTCalendrierTransitionsRelatedByIdEtapeSourceScheduledForDeletion = clone $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource;
                $this->commonTCalendrierTransitionsRelatedByIdEtapeSourceScheduledForDeletion->clear();
            }
            $this->commonTCalendrierTransitionsRelatedByIdEtapeSourceScheduledForDeletion[]= $commonTCalendrierTransitionRelatedByIdEtapeSource;
            $commonTCalendrierTransitionRelatedByIdEtapeSource->setCommonTCalendrierEtapeRelatedByIdEtapeSource(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonTCalendrierTransitionsRelatedByIdEtapeCible collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     * @see        addCommonTCalendrierTransitionsRelatedByIdEtapeCible()
     */
    public function clearCommonTCalendrierTransitionsRelatedByIdEtapeCible()
    {
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCiblePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCalendrierTransitionsRelatedByIdEtapeCible collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCalendrierTransitionsRelatedByIdEtapeCible($v = true)
    {
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCiblePartial = $v;
    }

    /**
     * Initializes the collCommonTCalendrierTransitionsRelatedByIdEtapeCible collection.
     *
     * By default this just sets the collCommonTCalendrierTransitionsRelatedByIdEtapeCible collection to an empty array (like clearcollCommonTCalendrierTransitionsRelatedByIdEtapeCible());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCalendrierTransitionsRelatedByIdEtapeCible($overrideExisting = true)
    {
        if (null !== $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible && !$overrideExisting) {
            return;
        }
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible = new PropelObjectCollection();
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible->setModel('CommonTCalendrierTransition');
    }

    /**
     * Gets an array of CommonTCalendrierTransition objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCalendrierEtape is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCalendrierTransition[] List of CommonTCalendrierTransition objects
     * @throws PropelException
     */
    public function getCommonTCalendrierTransitionsRelatedByIdEtapeCible($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCiblePartial && !$this->isNew();
        if (null === $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible) {
                // return empty collection
                $this->initCommonTCalendrierTransitionsRelatedByIdEtapeCible();
            } else {
                $collCommonTCalendrierTransitionsRelatedByIdEtapeCible = CommonTCalendrierTransitionQuery::create(null, $criteria)
                    ->filterByCommonTCalendrierEtapeRelatedByIdEtapeCible($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCiblePartial && count($collCommonTCalendrierTransitionsRelatedByIdEtapeCible)) {
                      $this->initCommonTCalendrierTransitionsRelatedByIdEtapeCible(false);

                      foreach ($collCommonTCalendrierTransitionsRelatedByIdEtapeCible as $obj) {
                        if (false == $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible->contains($obj)) {
                          $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible->append($obj);
                        }
                      }

                      $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCiblePartial = true;
                    }

                    $collCommonTCalendrierTransitionsRelatedByIdEtapeCible->getInternalIterator()->rewind();

                    return $collCommonTCalendrierTransitionsRelatedByIdEtapeCible;
                }

                if ($partial && $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible) {
                    foreach ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCalendrierTransitionsRelatedByIdEtapeCible[] = $obj;
                        }
                    }
                }

                $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible = $collCommonTCalendrierTransitionsRelatedByIdEtapeCible;
                $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCiblePartial = false;
            }
        }

        return $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible;
    }

    /**
     * Sets a collection of CommonTCalendrierTransitionRelatedByIdEtapeCible objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCalendrierTransitionsRelatedByIdEtapeCible A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function setCommonTCalendrierTransitionsRelatedByIdEtapeCible(PropelCollection $commonTCalendrierTransitionsRelatedByIdEtapeCible, PropelPDO $con = null)
    {
        $commonTCalendrierTransitionsRelatedByIdEtapeCibleToDelete = $this->getCommonTCalendrierTransitionsRelatedByIdEtapeCible(new Criteria(), $con)->diff($commonTCalendrierTransitionsRelatedByIdEtapeCible);


        $this->commonTCalendrierTransitionsRelatedByIdEtapeCibleScheduledForDeletion = $commonTCalendrierTransitionsRelatedByIdEtapeCibleToDelete;

        foreach ($commonTCalendrierTransitionsRelatedByIdEtapeCibleToDelete as $commonTCalendrierTransitionRelatedByIdEtapeCibleRemoved) {
            $commonTCalendrierTransitionRelatedByIdEtapeCibleRemoved->setCommonTCalendrierEtapeRelatedByIdEtapeCible(null);
        }

        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible = null;
        foreach ($commonTCalendrierTransitionsRelatedByIdEtapeCible as $commonTCalendrierTransitionRelatedByIdEtapeCible) {
            $this->addCommonTCalendrierTransitionRelatedByIdEtapeCible($commonTCalendrierTransitionRelatedByIdEtapeCible);
        }

        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible = $commonTCalendrierTransitionsRelatedByIdEtapeCible;
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCiblePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCalendrierTransition objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCalendrierTransition objects.
     * @throws PropelException
     */
    public function countCommonTCalendrierTransitionsRelatedByIdEtapeCible(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCiblePartial && !$this->isNew();
        if (null === $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCalendrierTransitionsRelatedByIdEtapeCible());
            }
            $query = CommonTCalendrierTransitionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCalendrierEtapeRelatedByIdEtapeCible($this)
                ->count($con);
        }

        return count($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible);
    }

    /**
     * Method called to associate a CommonTCalendrierTransition object to this object
     * through the CommonTCalendrierTransition foreign key attribute.
     *
     * @param   CommonTCalendrierTransition $l CommonTCalendrierTransition
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function addCommonTCalendrierTransitionRelatedByIdEtapeCible(CommonTCalendrierTransition $l)
    {
        if ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible === null) {
            $this->initCommonTCalendrierTransitionsRelatedByIdEtapeCible();
            $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCiblePartial = true;
        }
        if (!in_array($l, $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCalendrierTransitionRelatedByIdEtapeCible($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCalendrierTransitionRelatedByIdEtapeCible $commonTCalendrierTransitionRelatedByIdEtapeCible The commonTCalendrierTransitionRelatedByIdEtapeCible object to add.
     */
    protected function doAddCommonTCalendrierTransitionRelatedByIdEtapeCible($commonTCalendrierTransitionRelatedByIdEtapeCible)
    {
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible[]= $commonTCalendrierTransitionRelatedByIdEtapeCible;
        $commonTCalendrierTransitionRelatedByIdEtapeCible->setCommonTCalendrierEtapeRelatedByIdEtapeCible($this);
    }

    /**
     * @param	CommonTCalendrierTransitionRelatedByIdEtapeCible $commonTCalendrierTransitionRelatedByIdEtapeCible The commonTCalendrierTransitionRelatedByIdEtapeCible object to remove.
     * @return CommonTCalendrierEtape The current object (for fluent API support)
     */
    public function removeCommonTCalendrierTransitionRelatedByIdEtapeCible($commonTCalendrierTransitionRelatedByIdEtapeCible)
    {
        if ($this->getCommonTCalendrierTransitionsRelatedByIdEtapeCible()->contains($commonTCalendrierTransitionRelatedByIdEtapeCible)) {
            $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible->remove($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible->search($commonTCalendrierTransitionRelatedByIdEtapeCible));
            if (null === $this->commonTCalendrierTransitionsRelatedByIdEtapeCibleScheduledForDeletion) {
                $this->commonTCalendrierTransitionsRelatedByIdEtapeCibleScheduledForDeletion = clone $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible;
                $this->commonTCalendrierTransitionsRelatedByIdEtapeCibleScheduledForDeletion->clear();
            }
            $this->commonTCalendrierTransitionsRelatedByIdEtapeCibleScheduledForDeletion[]= $commonTCalendrierTransitionRelatedByIdEtapeCible;
            $commonTCalendrierTransitionRelatedByIdEtapeCible->setCommonTCalendrierEtapeRelatedByIdEtapeCible(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_calendrier_etape = null;
        $this->id_calendrier = null;
        $this->code = null;
        $this->libelle = null;
        $this->date_initiale = null;
        $this->date_prevue = null;
        $this->position = null;
        $this->libre = null;
        $this->date_reelle_confirmee = null;
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
            if ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource) {
                foreach ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible) {
                foreach ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonTCalendrier instanceof Persistent) {
              $this->aCommonTCalendrier->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource instanceof PropelCollection) {
            $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource->clearIterator();
        }
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeSource = null;
        if ($this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible instanceof PropelCollection) {
            $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible->clearIterator();
        }
        $this->collCommonTCalendrierTransitionsRelatedByIdEtapeCible = null;
        $this->aCommonTCalendrier = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTCalendrierEtapePeer::DEFAULT_STRING_FORMAT);
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
