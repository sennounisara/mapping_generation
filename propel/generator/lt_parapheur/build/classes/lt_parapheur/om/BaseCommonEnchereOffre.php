<?php


/**
 * Base class that represents a row from the 'EnchereOffre' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnchereOffre extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEnchereOffrePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEnchereOffrePeer
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
     * The value for the idenchereentreprise field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $idenchereentreprise;

    /**
     * The value for the date field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $date;

    /**
     * The value for the valeurtic field.
     * @var        double
     */
    protected $valeurtic;

    /**
     * The value for the valeurtc field.
     * @var        double
     */
    protected $valeurtc;

    /**
     * The value for the valeurnetc field.
     * @var        double
     */
    protected $valeurnetc;

    /**
     * The value for the valeurngc field.
     * @var        double
     */
    protected $valeurngc;

    /**
     * The value for the rang field.
     * @var        int
     */
    protected $rang;

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
        $this->idenchere = 0;
        $this->idenchereentreprise = 0;
        $this->date = NULL;
    }

    /**
     * Initializes internal state of BaseCommonEnchereOffre object.
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
     * Get the [idenchereentreprise] column value.
     * 
     * @return int
     */
    public function getIdenchereentreprise()
    {

        return $this->idenchereentreprise;
    }

    /**
     * Get the [optionally formatted] temporal [date] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = 'Y-m-d H:i:s')
    {
        if ($this->date === null) {
            return null;
        }

        if ($this->date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date, true), $x);
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
     * Get the [valeurtic] column value.
     * 
     * @return double
     */
    public function getValeurtic()
    {

        return $this->valeurtic;
    }

    /**
     * Get the [valeurtc] column value.
     * 
     * @return double
     */
    public function getValeurtc()
    {

        return $this->valeurtc;
    }

    /**
     * Get the [valeurnetc] column value.
     * 
     * @return double
     */
    public function getValeurnetc()
    {

        return $this->valeurnetc;
    }

    /**
     * Get the [valeurngc] column value.
     * 
     * @return double
     */
    public function getValeurngc()
    {

        return $this->valeurngc;
    }

    /**
     * Get the [rang] column value.
     * 
     * @return int
     */
    public function getRang()
    {

        return $this->rang;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonEnchereOffre The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonEnchereOffrePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonEnchereOffre The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonEnchereOffrePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [idenchere] column.
     * 
     * @param int $v new value
     * @return CommonEnchereOffre The current object (for fluent API support)
     */
    public function setIdenchere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idenchere !== $v) {
            $this->idenchere = $v;
            $this->modifiedColumns[] = CommonEnchereOffrePeer::IDENCHERE;
        }


        return $this;
    } // setIdenchere()

    /**
     * Set the value of [idenchereentreprise] column.
     * 
     * @param int $v new value
     * @return CommonEnchereOffre The current object (for fluent API support)
     */
    public function setIdenchereentreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idenchereentreprise !== $v) {
            $this->idenchereentreprise = $v;
            $this->modifiedColumns[] = CommonEnchereOffrePeer::IDENCHEREENTREPRISE;
        }


        return $this;
    } // setIdenchereentreprise()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonEnchereOffre The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = CommonEnchereOffrePeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Set the value of [valeurtic] column.
     * 
     * @param double $v new value
     * @return CommonEnchereOffre The current object (for fluent API support)
     */
    public function setValeurtic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valeurtic !== $v) {
            $this->valeurtic = $v;
            $this->modifiedColumns[] = CommonEnchereOffrePeer::VALEURTIC;
        }


        return $this;
    } // setValeurtic()

    /**
     * Set the value of [valeurtc] column.
     * 
     * @param double $v new value
     * @return CommonEnchereOffre The current object (for fluent API support)
     */
    public function setValeurtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valeurtc !== $v) {
            $this->valeurtc = $v;
            $this->modifiedColumns[] = CommonEnchereOffrePeer::VALEURTC;
        }


        return $this;
    } // setValeurtc()

    /**
     * Set the value of [valeurnetc] column.
     * 
     * @param double $v new value
     * @return CommonEnchereOffre The current object (for fluent API support)
     */
    public function setValeurnetc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valeurnetc !== $v) {
            $this->valeurnetc = $v;
            $this->modifiedColumns[] = CommonEnchereOffrePeer::VALEURNETC;
        }


        return $this;
    } // setValeurnetc()

    /**
     * Set the value of [valeurngc] column.
     * 
     * @param double $v new value
     * @return CommonEnchereOffre The current object (for fluent API support)
     */
    public function setValeurngc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valeurngc !== $v) {
            $this->valeurngc = $v;
            $this->modifiedColumns[] = CommonEnchereOffrePeer::VALEURNGC;
        }


        return $this;
    } // setValeurngc()

    /**
     * Set the value of [rang] column.
     * 
     * @param int $v new value
     * @return CommonEnchereOffre The current object (for fluent API support)
     */
    public function setRang($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rang !== $v) {
            $this->rang = $v;
            $this->modifiedColumns[] = CommonEnchereOffrePeer::RANG;
        }


        return $this;
    } // setRang()

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

            if ($this->idenchereentreprise !== 0) {
                return false;
            }

            if ($this->date !== NULL) {
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
            $this->idenchereentreprise = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->date = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->valeurtic = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->valeurtc = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->valeurnetc = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->valeurngc = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->rang = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = CommonEnchereOffrePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEnchereOffre object", $e);
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
            $con = Propel::getConnection(CommonEnchereOffrePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEnchereOffrePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonEnchereOffrePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEnchereOffreQuery::create()
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
            $con = Propel::getConnection(CommonEnchereOffrePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonEnchereOffrePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonEnchereOffrePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonEnchereOffrePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonEnchereOffrePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonEnchereOffrePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonEnchereOffrePeer::IDENCHERE)) {
            $modifiedColumns[':p' . $index++]  = '`idEnchere`';
        }
        if ($this->isColumnModified(CommonEnchereOffrePeer::IDENCHEREENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`idEnchereEntreprise`';
        }
        if ($this->isColumnModified(CommonEnchereOffrePeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(CommonEnchereOffrePeer::VALEURTIC)) {
            $modifiedColumns[':p' . $index++]  = '`valeurTIC`';
        }
        if ($this->isColumnModified(CommonEnchereOffrePeer::VALEURTC)) {
            $modifiedColumns[':p' . $index++]  = '`valeurTC`';
        }
        if ($this->isColumnModified(CommonEnchereOffrePeer::VALEURNETC)) {
            $modifiedColumns[':p' . $index++]  = '`valeurNETC`';
        }
        if ($this->isColumnModified(CommonEnchereOffrePeer::VALEURNGC)) {
            $modifiedColumns[':p' . $index++]  = '`valeurNGC`';
        }
        if ($this->isColumnModified(CommonEnchereOffrePeer::RANG)) {
            $modifiedColumns[':p' . $index++]  = '`rang`';
        }

        $sql = sprintf(
            'INSERT INTO `EnchereOffre` (%s) VALUES (%s)',
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
                    case '`idEnchereEntreprise`':						
                        $stmt->bindValue($identifier, $this->idenchereentreprise, PDO::PARAM_INT);
                        break;
                    case '`date`':						
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`valeurTIC`':						
                        $stmt->bindValue($identifier, $this->valeurtic, PDO::PARAM_STR);
                        break;
                    case '`valeurTC`':						
                        $stmt->bindValue($identifier, $this->valeurtc, PDO::PARAM_STR);
                        break;
                    case '`valeurNETC`':						
                        $stmt->bindValue($identifier, $this->valeurnetc, PDO::PARAM_STR);
                        break;
                    case '`valeurNGC`':						
                        $stmt->bindValue($identifier, $this->valeurngc, PDO::PARAM_STR);
                        break;
                    case '`rang`':						
                        $stmt->bindValue($identifier, $this->rang, PDO::PARAM_INT);
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


            if (($retval = CommonEnchereOffrePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonEnchereOffrePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdenchereentreprise();
                break;
            case 4:
                return $this->getDate();
                break;
            case 5:
                return $this->getValeurtic();
                break;
            case 6:
                return $this->getValeurtc();
                break;
            case 7:
                return $this->getValeurnetc();
                break;
            case 8:
                return $this->getValeurngc();
                break;
            case 9:
                return $this->getRang();
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
        if (isset($alreadyDumpedObjects['CommonEnchereOffre'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEnchereOffre'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonEnchereOffrePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdenchere(),
            $keys[3] => $this->getIdenchereentreprise(),
            $keys[4] => $this->getDate(),
            $keys[5] => $this->getValeurtic(),
            $keys[6] => $this->getValeurtc(),
            $keys[7] => $this->getValeurnetc(),
            $keys[8] => $this->getValeurngc(),
            $keys[9] => $this->getRang(),
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
        $pos = CommonEnchereOffrePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdenchereentreprise($value);
                break;
            case 4:
                $this->setDate($value);
                break;
            case 5:
                $this->setValeurtic($value);
                break;
            case 6:
                $this->setValeurtc($value);
                break;
            case 7:
                $this->setValeurnetc($value);
                break;
            case 8:
                $this->setValeurngc($value);
                break;
            case 9:
                $this->setRang($value);
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
        $keys = CommonEnchereOffrePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdenchere($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdenchereentreprise($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDate($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setValeurtic($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setValeurtc($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setValeurnetc($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setValeurngc($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRang($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEnchereOffrePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEnchereOffrePeer::ID)) $criteria->add(CommonEnchereOffrePeer::ID, $this->id);
        if ($this->isColumnModified(CommonEnchereOffrePeer::ORGANISME)) $criteria->add(CommonEnchereOffrePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonEnchereOffrePeer::IDENCHERE)) $criteria->add(CommonEnchereOffrePeer::IDENCHERE, $this->idenchere);
        if ($this->isColumnModified(CommonEnchereOffrePeer::IDENCHEREENTREPRISE)) $criteria->add(CommonEnchereOffrePeer::IDENCHEREENTREPRISE, $this->idenchereentreprise);
        if ($this->isColumnModified(CommonEnchereOffrePeer::DATE)) $criteria->add(CommonEnchereOffrePeer::DATE, $this->date);
        if ($this->isColumnModified(CommonEnchereOffrePeer::VALEURTIC)) $criteria->add(CommonEnchereOffrePeer::VALEURTIC, $this->valeurtic);
        if ($this->isColumnModified(CommonEnchereOffrePeer::VALEURTC)) $criteria->add(CommonEnchereOffrePeer::VALEURTC, $this->valeurtc);
        if ($this->isColumnModified(CommonEnchereOffrePeer::VALEURNETC)) $criteria->add(CommonEnchereOffrePeer::VALEURNETC, $this->valeurnetc);
        if ($this->isColumnModified(CommonEnchereOffrePeer::VALEURNGC)) $criteria->add(CommonEnchereOffrePeer::VALEURNGC, $this->valeurngc);
        if ($this->isColumnModified(CommonEnchereOffrePeer::RANG)) $criteria->add(CommonEnchereOffrePeer::RANG, $this->rang);

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
        $criteria = new Criteria(CommonEnchereOffrePeer::DATABASE_NAME);
        $criteria->add(CommonEnchereOffrePeer::ID, $this->id);
        $criteria->add(CommonEnchereOffrePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonEnchereOffre (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdenchere($this->getIdenchere());
        $copyObj->setIdenchereentreprise($this->getIdenchereentreprise());
        $copyObj->setDate($this->getDate());
        $copyObj->setValeurtic($this->getValeurtic());
        $copyObj->setValeurtc($this->getValeurtc());
        $copyObj->setValeurnetc($this->getValeurnetc());
        $copyObj->setValeurngc($this->getValeurngc());
        $copyObj->setRang($this->getRang());
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
     * @return CommonEnchereOffre Clone of current object.
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
     * @return CommonEnchereOffrePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEnchereOffrePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->idenchere = null;
        $this->idenchereentreprise = null;
        $this->date = null;
        $this->valeurtic = null;
        $this->valeurtc = null;
        $this->valeurnetc = null;
        $this->valeurngc = null;
        $this->rang = null;
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
        return (string) $this->exportTo(CommonEnchereOffrePeer::DEFAULT_STRING_FORMAT);
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
