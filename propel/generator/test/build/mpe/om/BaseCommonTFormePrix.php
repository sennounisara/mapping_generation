<?php


/**
 * Base class that represents a row from the 't_forme_prix' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTFormePrix extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTFormePrixPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTFormePrixPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_forme_prix field.
     * @var        int
     */
    protected $id_forme_prix;

    /**
     * The value for the forme_prix field.
     * @var        string
     */
    protected $forme_prix;

    /**
     * The value for the pf_estimation_ht field.
     * @var        string
     */
    protected $pf_estimation_ht;

    /**
     * The value for the pf_estimation_ttc field.
     * @var        string
     */
    protected $pf_estimation_ttc;

    /**
     * The value for the pf_date_valeur field.
     * @var        string
     */
    protected $pf_date_valeur;

    /**
     * The value for the id_min_max field.
     * @var        int
     */
    protected $id_min_max;

    /**
     * The value for the modalite field.
     * @var        string
     */
    protected $modalite;

    /**
     * The value for the pu_min field.
     * @var        string
     */
    protected $pu_min;

    /**
     * The value for the pu_max field.
     * @var        string
     */
    protected $pu_max;

    /**
     * The value for the pu_min_ttc field.
     * @var        string
     */
    protected $pu_min_ttc;

    /**
     * The value for the pu_max_ttc field.
     * @var        string
     */
    protected $pu_max_ttc;

    /**
     * The value for the pu_estimation_ht field.
     * @var        string
     */
    protected $pu_estimation_ht;

    /**
     * The value for the pu_estimation_ttc field.
     * @var        string
     */
    protected $pu_estimation_ttc;

    /**
     * The value for the pu_date_valeur field.
     * @var        string
     */
    protected $pu_date_valeur;

    /**
     * @var        PropelObjectCollection|CommonTTranche[] Collection to store aggregation of CommonTTranche objects.
     */
    protected $collCommonTTranches;
    protected $collCommonTTranchesPartial;

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
    protected $commonTTranchesScheduledForDeletion = null;

    /**
     * Get the [id_forme_prix] column value.
     * 
     * @return int
     */
    public function getIdFormePrix()
    {

        return $this->id_forme_prix;
    }

    /**
     * Get the [forme_prix] column value.
     * 
     * @return string
     */
    public function getFormePrix()
    {

        return $this->forme_prix;
    }

    /**
     * Get the [pf_estimation_ht] column value.
     * 
     * @return string
     */
    public function getPfEstimationHt()
    {

        return $this->pf_estimation_ht;
    }

    /**
     * Get the [pf_estimation_ttc] column value.
     * 
     * @return string
     */
    public function getPfEstimationTtc()
    {

        return $this->pf_estimation_ttc;
    }

    /**
     * Get the [optionally formatted] temporal [pf_date_valeur] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPfDateValeur($format = null)
    {
        if ($this->pf_date_valeur === null) {
            return null;
        }

        if ($this->pf_date_valeur === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pf_date_valeur);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pf_date_valeur, true), $x);
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
     * Get the [id_min_max] column value.
     * 
     * @return int
     */
    public function getIdMinMax()
    {

        return $this->id_min_max;
    }

    /**
     * Get the [modalite] column value.
     * 
     * @return string
     */
    public function getModalite()
    {

        return $this->modalite;
    }

    /**
     * Get the [pu_min] column value.
     * 
     * @return string
     */
    public function getPuMin()
    {

        return $this->pu_min;
    }

    /**
     * Get the [pu_max] column value.
     * 
     * @return string
     */
    public function getPuMax()
    {

        return $this->pu_max;
    }

    /**
     * Get the [pu_min_ttc] column value.
     * 
     * @return string
     */
    public function getPuMinTtc()
    {

        return $this->pu_min_ttc;
    }

    /**
     * Get the [pu_max_ttc] column value.
     * 
     * @return string
     */
    public function getPuMaxTtc()
    {

        return $this->pu_max_ttc;
    }

    /**
     * Get the [pu_estimation_ht] column value.
     * 
     * @return string
     */
    public function getPuEstimationHt()
    {

        return $this->pu_estimation_ht;
    }

    /**
     * Get the [pu_estimation_ttc] column value.
     * 
     * @return string
     */
    public function getPuEstimationTtc()
    {

        return $this->pu_estimation_ttc;
    }

    /**
     * Get the [optionally formatted] temporal [pu_date_valeur] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPuDateValeur($format = null)
    {
        if ($this->pu_date_valeur === null) {
            return null;
        }

        if ($this->pu_date_valeur === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pu_date_valeur);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pu_date_valeur, true), $x);
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
     * Set the value of [id_forme_prix] column.
     * 
     * @param int $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setIdFormePrix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_forme_prix !== $v) {
            $this->id_forme_prix = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::ID_FORME_PRIX;
        }


        return $this;
    } // setIdFormePrix()

    /**
     * Set the value of [forme_prix] column.
     * 
     * @param string $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setFormePrix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->forme_prix !== $v) {
            $this->forme_prix = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::FORME_PRIX;
        }


        return $this;
    } // setFormePrix()

    /**
     * Set the value of [pf_estimation_ht] column.
     * 
     * @param string $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setPfEstimationHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pf_estimation_ht !== $v) {
            $this->pf_estimation_ht = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::PF_ESTIMATION_HT;
        }


        return $this;
    } // setPfEstimationHt()

    /**
     * Set the value of [pf_estimation_ttc] column.
     * 
     * @param string $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setPfEstimationTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pf_estimation_ttc !== $v) {
            $this->pf_estimation_ttc = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::PF_ESTIMATION_TTC;
        }


        return $this;
    } // setPfEstimationTtc()

    /**
     * Sets the value of [pf_date_valeur] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setPfDateValeur($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pf_date_valeur !== null || $dt !== null) {
            $currentDateAsString = ($this->pf_date_valeur !== null && $tmpDt = new DateTime($this->pf_date_valeur)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pf_date_valeur = $newDateAsString;
                $this->modifiedColumns[] = CommonTFormePrixPeer::PF_DATE_VALEUR;
            }
        } // if either are not null


        return $this;
    } // setPfDateValeur()

    /**
     * Set the value of [id_min_max] column.
     * 
     * @param int $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setIdMinMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_min_max !== $v) {
            $this->id_min_max = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::ID_MIN_MAX;
        }


        return $this;
    } // setIdMinMax()

    /**
     * Set the value of [modalite] column.
     * 
     * @param string $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setModalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modalite !== $v) {
            $this->modalite = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::MODALITE;
        }


        return $this;
    } // setModalite()

    /**
     * Set the value of [pu_min] column.
     * 
     * @param string $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setPuMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pu_min !== $v) {
            $this->pu_min = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::PU_MIN;
        }


        return $this;
    } // setPuMin()

    /**
     * Set the value of [pu_max] column.
     * 
     * @param string $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setPuMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pu_max !== $v) {
            $this->pu_max = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::PU_MAX;
        }


        return $this;
    } // setPuMax()

    /**
     * Set the value of [pu_min_ttc] column.
     * 
     * @param string $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setPuMinTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pu_min_ttc !== $v) {
            $this->pu_min_ttc = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::PU_MIN_TTC;
        }


        return $this;
    } // setPuMinTtc()

    /**
     * Set the value of [pu_max_ttc] column.
     * 
     * @param string $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setPuMaxTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pu_max_ttc !== $v) {
            $this->pu_max_ttc = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::PU_MAX_TTC;
        }


        return $this;
    } // setPuMaxTtc()

    /**
     * Set the value of [pu_estimation_ht] column.
     * 
     * @param string $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setPuEstimationHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pu_estimation_ht !== $v) {
            $this->pu_estimation_ht = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::PU_ESTIMATION_HT;
        }


        return $this;
    } // setPuEstimationHt()

    /**
     * Set the value of [pu_estimation_ttc] column.
     * 
     * @param string $v new value
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setPuEstimationTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pu_estimation_ttc !== $v) {
            $this->pu_estimation_ttc = $v;
            $this->modifiedColumns[] = CommonTFormePrixPeer::PU_ESTIMATION_TTC;
        }


        return $this;
    } // setPuEstimationTtc()

    /**
     * Sets the value of [pu_date_valeur] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setPuDateValeur($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pu_date_valeur !== null || $dt !== null) {
            $currentDateAsString = ($this->pu_date_valeur !== null && $tmpDt = new DateTime($this->pu_date_valeur)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pu_date_valeur = $newDateAsString;
                $this->modifiedColumns[] = CommonTFormePrixPeer::PU_DATE_VALEUR;
            }
        } // if either are not null


        return $this;
    } // setPuDateValeur()

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

            $this->id_forme_prix = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->forme_prix = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->pf_estimation_ht = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->pf_estimation_ttc = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->pf_date_valeur = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_min_max = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->modalite = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->pu_min = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->pu_max = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->pu_min_ttc = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->pu_max_ttc = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->pu_estimation_ht = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->pu_estimation_ttc = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->pu_date_valeur = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = CommonTFormePrixPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTFormePrix object", $e);
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
            $con = Propel::getConnection(CommonTFormePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTFormePrixPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonTTranches = null;

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
            $con = Propel::getConnection(CommonTFormePrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTFormePrixQuery::create()
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
            $con = Propel::getConnection(CommonTFormePrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTFormePrixPeer::addInstanceToPool($this);
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

            if ($this->commonTTranchesScheduledForDeletion !== null) {
                if (!$this->commonTTranchesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTTranchesScheduledForDeletion as $commonTTranche) {
                        // need to save related object because we set the relation to null
                        $commonTTranche->save($con);
                    }
                    $this->commonTTranchesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTTranches !== null) {
                foreach ($this->collCommonTTranches as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTFormePrixPeer::ID_FORME_PRIX;
        if (null !== $this->id_forme_prix) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTFormePrixPeer::ID_FORME_PRIX . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTFormePrixPeer::ID_FORME_PRIX)) {
            $modifiedColumns[':p' . $index++]  = '`id_forme_prix`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::FORME_PRIX)) {
            $modifiedColumns[':p' . $index++]  = '`forme_prix`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::PF_ESTIMATION_HT)) {
            $modifiedColumns[':p' . $index++]  = '`pf_estimation_ht`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::PF_ESTIMATION_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`pf_estimation_ttc`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::PF_DATE_VALEUR)) {
            $modifiedColumns[':p' . $index++]  = '`pf_date_valeur`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::ID_MIN_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`id_min_max`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::MODALITE)) {
            $modifiedColumns[':p' . $index++]  = '`modalite`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`pu_min`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`pu_max`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_MIN_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`pu_min_ttc`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_MAX_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`pu_max_ttc`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_ESTIMATION_HT)) {
            $modifiedColumns[':p' . $index++]  = '`pu_estimation_ht`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_ESTIMATION_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`pu_estimation_ttc`';
        }
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_DATE_VALEUR)) {
            $modifiedColumns[':p' . $index++]  = '`pu_date_valeur`';
        }

        $sql = sprintf(
            'INSERT INTO `t_forme_prix` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_forme_prix`':						
                        $stmt->bindValue($identifier, $this->id_forme_prix, PDO::PARAM_INT);
                        break;
                    case '`forme_prix`':						
                        $stmt->bindValue($identifier, $this->forme_prix, PDO::PARAM_STR);
                        break;
                    case '`pf_estimation_ht`':						
                        $stmt->bindValue($identifier, $this->pf_estimation_ht, PDO::PARAM_STR);
                        break;
                    case '`pf_estimation_ttc`':						
                        $stmt->bindValue($identifier, $this->pf_estimation_ttc, PDO::PARAM_STR);
                        break;
                    case '`pf_date_valeur`':						
                        $stmt->bindValue($identifier, $this->pf_date_valeur, PDO::PARAM_STR);
                        break;
                    case '`id_min_max`':						
                        $stmt->bindValue($identifier, $this->id_min_max, PDO::PARAM_INT);
                        break;
                    case '`modalite`':						
                        $stmt->bindValue($identifier, $this->modalite, PDO::PARAM_STR);
                        break;
                    case '`pu_min`':						
                        $stmt->bindValue($identifier, $this->pu_min, PDO::PARAM_STR);
                        break;
                    case '`pu_max`':						
                        $stmt->bindValue($identifier, $this->pu_max, PDO::PARAM_STR);
                        break;
                    case '`pu_min_ttc`':						
                        $stmt->bindValue($identifier, $this->pu_min_ttc, PDO::PARAM_STR);
                        break;
                    case '`pu_max_ttc`':						
                        $stmt->bindValue($identifier, $this->pu_max_ttc, PDO::PARAM_STR);
                        break;
                    case '`pu_estimation_ht`':						
                        $stmt->bindValue($identifier, $this->pu_estimation_ht, PDO::PARAM_STR);
                        break;
                    case '`pu_estimation_ttc`':						
                        $stmt->bindValue($identifier, $this->pu_estimation_ttc, PDO::PARAM_STR);
                        break;
                    case '`pu_date_valeur`':						
                        $stmt->bindValue($identifier, $this->pu_date_valeur, PDO::PARAM_STR);
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
        $this->setIdFormePrix($pk);

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


            if (($retval = CommonTFormePrixPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTTranches !== null) {
                    foreach ($this->collCommonTTranches as $referrerFK) {
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
        $pos = CommonTFormePrixPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdFormePrix();
                break;
            case 1:
                return $this->getFormePrix();
                break;
            case 2:
                return $this->getPfEstimationHt();
                break;
            case 3:
                return $this->getPfEstimationTtc();
                break;
            case 4:
                return $this->getPfDateValeur();
                break;
            case 5:
                return $this->getIdMinMax();
                break;
            case 6:
                return $this->getModalite();
                break;
            case 7:
                return $this->getPuMin();
                break;
            case 8:
                return $this->getPuMax();
                break;
            case 9:
                return $this->getPuMinTtc();
                break;
            case 10:
                return $this->getPuMaxTtc();
                break;
            case 11:
                return $this->getPuEstimationHt();
                break;
            case 12:
                return $this->getPuEstimationTtc();
                break;
            case 13:
                return $this->getPuDateValeur();
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
        if (isset($alreadyDumpedObjects['CommonTFormePrix'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTFormePrix'][$this->getPrimaryKey()] = true;
        $keys = CommonTFormePrixPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdFormePrix(),
            $keys[1] => $this->getFormePrix(),
            $keys[2] => $this->getPfEstimationHt(),
            $keys[3] => $this->getPfEstimationTtc(),
            $keys[4] => $this->getPfDateValeur(),
            $keys[5] => $this->getIdMinMax(),
            $keys[6] => $this->getModalite(),
            $keys[7] => $this->getPuMin(),
            $keys[8] => $this->getPuMax(),
            $keys[9] => $this->getPuMinTtc(),
            $keys[10] => $this->getPuMaxTtc(),
            $keys[11] => $this->getPuEstimationHt(),
            $keys[12] => $this->getPuEstimationTtc(),
            $keys[13] => $this->getPuDateValeur(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonTTranches) {
                $result['CommonTTranches'] = $this->collCommonTTranches->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTFormePrixPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdFormePrix($value);
                break;
            case 1:
                $this->setFormePrix($value);
                break;
            case 2:
                $this->setPfEstimationHt($value);
                break;
            case 3:
                $this->setPfEstimationTtc($value);
                break;
            case 4:
                $this->setPfDateValeur($value);
                break;
            case 5:
                $this->setIdMinMax($value);
                break;
            case 6:
                $this->setModalite($value);
                break;
            case 7:
                $this->setPuMin($value);
                break;
            case 8:
                $this->setPuMax($value);
                break;
            case 9:
                $this->setPuMinTtc($value);
                break;
            case 10:
                $this->setPuMaxTtc($value);
                break;
            case 11:
                $this->setPuEstimationHt($value);
                break;
            case 12:
                $this->setPuEstimationTtc($value);
                break;
            case 13:
                $this->setPuDateValeur($value);
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
        $keys = CommonTFormePrixPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdFormePrix($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFormePrix($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPfEstimationHt($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPfEstimationTtc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPfDateValeur($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdMinMax($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setModalite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPuMin($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPuMax($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPuMinTtc($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPuMaxTtc($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPuEstimationHt($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPuEstimationTtc($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPuDateValeur($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTFormePrixPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTFormePrixPeer::ID_FORME_PRIX)) $criteria->add(CommonTFormePrixPeer::ID_FORME_PRIX, $this->id_forme_prix);
        if ($this->isColumnModified(CommonTFormePrixPeer::FORME_PRIX)) $criteria->add(CommonTFormePrixPeer::FORME_PRIX, $this->forme_prix);
        if ($this->isColumnModified(CommonTFormePrixPeer::PF_ESTIMATION_HT)) $criteria->add(CommonTFormePrixPeer::PF_ESTIMATION_HT, $this->pf_estimation_ht);
        if ($this->isColumnModified(CommonTFormePrixPeer::PF_ESTIMATION_TTC)) $criteria->add(CommonTFormePrixPeer::PF_ESTIMATION_TTC, $this->pf_estimation_ttc);
        if ($this->isColumnModified(CommonTFormePrixPeer::PF_DATE_VALEUR)) $criteria->add(CommonTFormePrixPeer::PF_DATE_VALEUR, $this->pf_date_valeur);
        if ($this->isColumnModified(CommonTFormePrixPeer::ID_MIN_MAX)) $criteria->add(CommonTFormePrixPeer::ID_MIN_MAX, $this->id_min_max);
        if ($this->isColumnModified(CommonTFormePrixPeer::MODALITE)) $criteria->add(CommonTFormePrixPeer::MODALITE, $this->modalite);
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_MIN)) $criteria->add(CommonTFormePrixPeer::PU_MIN, $this->pu_min);
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_MAX)) $criteria->add(CommonTFormePrixPeer::PU_MAX, $this->pu_max);
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_MIN_TTC)) $criteria->add(CommonTFormePrixPeer::PU_MIN_TTC, $this->pu_min_ttc);
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_MAX_TTC)) $criteria->add(CommonTFormePrixPeer::PU_MAX_TTC, $this->pu_max_ttc);
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_ESTIMATION_HT)) $criteria->add(CommonTFormePrixPeer::PU_ESTIMATION_HT, $this->pu_estimation_ht);
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_ESTIMATION_TTC)) $criteria->add(CommonTFormePrixPeer::PU_ESTIMATION_TTC, $this->pu_estimation_ttc);
        if ($this->isColumnModified(CommonTFormePrixPeer::PU_DATE_VALEUR)) $criteria->add(CommonTFormePrixPeer::PU_DATE_VALEUR, $this->pu_date_valeur);

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
        $criteria = new Criteria(CommonTFormePrixPeer::DATABASE_NAME);
        $criteria->add(CommonTFormePrixPeer::ID_FORME_PRIX, $this->id_forme_prix);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdFormePrix();
    }

    /**
     * Generic method to set the primary key (id_forme_prix column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdFormePrix($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdFormePrix();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTFormePrix (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFormePrix($this->getFormePrix());
        $copyObj->setPfEstimationHt($this->getPfEstimationHt());
        $copyObj->setPfEstimationTtc($this->getPfEstimationTtc());
        $copyObj->setPfDateValeur($this->getPfDateValeur());
        $copyObj->setIdMinMax($this->getIdMinMax());
        $copyObj->setModalite($this->getModalite());
        $copyObj->setPuMin($this->getPuMin());
        $copyObj->setPuMax($this->getPuMax());
        $copyObj->setPuMinTtc($this->getPuMinTtc());
        $copyObj->setPuMaxTtc($this->getPuMaxTtc());
        $copyObj->setPuEstimationHt($this->getPuEstimationHt());
        $copyObj->setPuEstimationTtc($this->getPuEstimationTtc());
        $copyObj->setPuDateValeur($this->getPuDateValeur());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTTranches() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTTranche($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdFormePrix(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTFormePrix Clone of current object.
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
     * @return CommonTFormePrixPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTFormePrixPeer();
        }

        return self::$peer;
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
        if ('CommonTTranche' == $relationName) {
            $this->initCommonTTranches();
        }
    }

    /**
     * Clears out the collCommonTTranches collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTFormePrix The current object (for fluent API support)
     * @see        addCommonTTranches()
     */
    public function clearCommonTTranches()
    {
        $this->collCommonTTranches = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTTranchesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTTranches collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTTranches($v = true)
    {
        $this->collCommonTTranchesPartial = $v;
    }

    /**
     * Initializes the collCommonTTranches collection.
     *
     * By default this just sets the collCommonTTranches collection to an empty array (like clearcollCommonTTranches());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTTranches($overrideExisting = true)
    {
        if (null !== $this->collCommonTTranches && !$overrideExisting) {
            return;
        }
        $this->collCommonTTranches = new PropelObjectCollection();
        $this->collCommonTTranches->setModel('CommonTTranche');
    }

    /**
     * Gets an array of CommonTTranche objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTFormePrix is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTTranche[] List of CommonTTranche objects
     * @throws PropelException
     */
    public function getCommonTTranches($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTTranchesPartial && !$this->isNew();
        if (null === $this->collCommonTTranches || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTTranches) {
                // return empty collection
                $this->initCommonTTranches();
            } else {
                $collCommonTTranches = CommonTTrancheQuery::create(null, $criteria)
                    ->filterByCommonTFormePrix($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTTranchesPartial && count($collCommonTTranches)) {
                      $this->initCommonTTranches(false);

                      foreach ($collCommonTTranches as $obj) {
                        if (false == $this->collCommonTTranches->contains($obj)) {
                          $this->collCommonTTranches->append($obj);
                        }
                      }

                      $this->collCommonTTranchesPartial = true;
                    }

                    $collCommonTTranches->getInternalIterator()->rewind();

                    return $collCommonTTranches;
                }

                if ($partial && $this->collCommonTTranches) {
                    foreach ($this->collCommonTTranches as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTTranches[] = $obj;
                        }
                    }
                }

                $this->collCommonTTranches = $collCommonTTranches;
                $this->collCommonTTranchesPartial = false;
            }
        }

        return $this->collCommonTTranches;
    }

    /**
     * Sets a collection of CommonTTranche objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTTranches A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function setCommonTTranches(PropelCollection $commonTTranches, PropelPDO $con = null)
    {
        $commonTTranchesToDelete = $this->getCommonTTranches(new Criteria(), $con)->diff($commonTTranches);


        $this->commonTTranchesScheduledForDeletion = $commonTTranchesToDelete;

        foreach ($commonTTranchesToDelete as $commonTTrancheRemoved) {
            $commonTTrancheRemoved->setCommonTFormePrix(null);
        }

        $this->collCommonTTranches = null;
        foreach ($commonTTranches as $commonTTranche) {
            $this->addCommonTTranche($commonTTranche);
        }

        $this->collCommonTTranches = $commonTTranches;
        $this->collCommonTTranchesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTTranche objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTTranche objects.
     * @throws PropelException
     */
    public function countCommonTTranches(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTTranchesPartial && !$this->isNew();
        if (null === $this->collCommonTTranches || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTTranches) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTTranches());
            }
            $query = CommonTTrancheQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTFormePrix($this)
                ->count($con);
        }

        return count($this->collCommonTTranches);
    }

    /**
     * Method called to associate a CommonTTranche object to this object
     * through the CommonTTranche foreign key attribute.
     *
     * @param   CommonTTranche $l CommonTTranche
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function addCommonTTranche(CommonTTranche $l)
    {
        if ($this->collCommonTTranches === null) {
            $this->initCommonTTranches();
            $this->collCommonTTranchesPartial = true;
        }
        if (!in_array($l, $this->collCommonTTranches->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTTranche($l);
        }

        return $this;
    }

    /**
     * @param	CommonTTranche $commonTTranche The commonTTranche object to add.
     */
    protected function doAddCommonTTranche($commonTTranche)
    {
        $this->collCommonTTranches[]= $commonTTranche;
        $commonTTranche->setCommonTFormePrix($this);
    }

    /**
     * @param	CommonTTranche $commonTTranche The commonTTranche object to remove.
     * @return CommonTFormePrix The current object (for fluent API support)
     */
    public function removeCommonTTranche($commonTTranche)
    {
        if ($this->getCommonTTranches()->contains($commonTTranche)) {
            $this->collCommonTTranches->remove($this->collCommonTTranches->search($commonTTranche));
            if (null === $this->commonTTranchesScheduledForDeletion) {
                $this->commonTTranchesScheduledForDeletion = clone $this->collCommonTTranches;
                $this->commonTTranchesScheduledForDeletion->clear();
            }
            $this->commonTTranchesScheduledForDeletion[]= $commonTTranche;
            $commonTTranche->setCommonTFormePrix(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTFormePrix is new, it will return
     * an empty collection; or if this CommonTFormePrix has previously
     * been saved, it will retrieve related CommonTTranches from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTFormePrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTTranche[] List of CommonTTranche objects
     */
    public function getCommonTTranchesJoinCommonTDonneeComplementaire($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTTrancheQuery::create(null, $criteria);
        $query->joinWith('CommonTDonneeComplementaire', $join_behavior);

        return $this->getCommonTTranches($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_forme_prix = null;
        $this->forme_prix = null;
        $this->pf_estimation_ht = null;
        $this->pf_estimation_ttc = null;
        $this->pf_date_valeur = null;
        $this->id_min_max = null;
        $this->modalite = null;
        $this->pu_min = null;
        $this->pu_max = null;
        $this->pu_min_ttc = null;
        $this->pu_max_ttc = null;
        $this->pu_estimation_ht = null;
        $this->pu_estimation_ttc = null;
        $this->pu_date_valeur = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
            if ($this->collCommonTTranches) {
                foreach ($this->collCommonTTranches as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTTranches instanceof PropelCollection) {
            $this->collCommonTTranches->clearIterator();
        }
        $this->collCommonTTranches = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTFormePrixPeer::DEFAULT_STRING_FORMAT);
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
