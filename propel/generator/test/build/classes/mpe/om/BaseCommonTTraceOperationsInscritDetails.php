<?php


/**
 * Base class that represents a row from the 'T_trace_operations_inscrit_details' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTTraceOperationsInscritDetails extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTTraceOperationsInscritDetailsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTTraceOperationsInscritDetailsPeer
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
     * The value for the id_trace field.
     * @var        int
     */
    protected $id_trace;

    /**
     * The value for the date_debut_action field.
     * @var        string
     */
    protected $date_debut_action;

    /**
     * The value for the nom_action field.
     * @var        string
     */
    protected $nom_action;

    /**
     * The value for the details field.
     * @var        string
     */
    protected $details;

    /**
     * The value for the date_fin_action field.
     * @var        string
     */
    protected $date_fin_action;

    /**
     * The value for the id_description field.
     * @var        int
     */
    protected $id_description;

    /**
     * The value for the afficher field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $afficher;

    /**
     * The value for the descripton field.
     * @var        string
     */
    protected $descripton;

    /**
     * The value for the log_applet field.
     * @var        string
     */
    protected $log_applet;

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
        $this->afficher = '0';
    }

    /**
     * Initializes internal state of BaseCommonTTraceOperationsInscritDetails object.
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
     * Get the [id_trace] column value.
     * 
     * @return int
     */
    public function getIdTrace()
    {

        return $this->id_trace;
    }

    /**
     * Get the [optionally formatted] temporal [date_debut_action] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDebutAction($format = 'Y-m-d H:i:s')
    {
        if ($this->date_debut_action === null) {
            return null;
        }

        if ($this->date_debut_action === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_debut_action);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_debut_action, true), $x);
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
     * Get the [nom_action] column value.
     * 
     * @return string
     */
    public function getNomAction()
    {

        return $this->nom_action;
    }

    /**
     * Get the [details] column value.
     * 
     * @return string
     */
    public function getDetails()
    {

        return $this->details;
    }

    /**
     * Get the [optionally formatted] temporal [date_fin_action] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateFinAction($format = 'Y-m-d H:i:s')
    {
        if ($this->date_fin_action === null) {
            return null;
        }

        if ($this->date_fin_action === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_fin_action);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_fin_action, true), $x);
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
     * Get the [id_description] column value.
     * 
     * @return int
     */
    public function getIdDescription()
    {

        return $this->id_description;
    }

    /**
     * Get the [afficher] column value.
     * 
     * @return string
     */
    public function getAfficher()
    {

        return $this->afficher;
    }

    /**
     * Get the [descripton] column value.
     * 
     * @return string
     */
    public function getDescripton()
    {

        return $this->descripton;
    }

    /**
     * Get the [log_applet] column value.
     * 
     * @return string
     */
    public function getLogApplet()
    {

        return $this->log_applet;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonTTraceOperationsInscritDetails The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_trace] column.
     * 
     * @param int $v new value
     * @return CommonTTraceOperationsInscritDetails The current object (for fluent API support)
     */
    public function setIdTrace($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_trace !== $v) {
            $this->id_trace = $v;
            $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::ID_TRACE;
        }


        return $this;
    } // setIdTrace()

    /**
     * Sets the value of [date_debut_action] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTTraceOperationsInscritDetails The current object (for fluent API support)
     */
    public function setDateDebutAction($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_debut_action !== null || $dt !== null) {
            $currentDateAsString = ($this->date_debut_action !== null && $tmpDt = new DateTime($this->date_debut_action)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_debut_action = $newDateAsString;
                $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::DATE_DEBUT_ACTION;
            }
        } // if either are not null


        return $this;
    } // setDateDebutAction()

    /**
     * Set the value of [nom_action] column.
     * 
     * @param string $v new value
     * @return CommonTTraceOperationsInscritDetails The current object (for fluent API support)
     */
    public function setNomAction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_action !== $v) {
            $this->nom_action = $v;
            $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::NOM_ACTION;
        }


        return $this;
    } // setNomAction()

    /**
     * Set the value of [details] column.
     * 
     * @param string $v new value
     * @return CommonTTraceOperationsInscritDetails The current object (for fluent API support)
     */
    public function setDetails($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->details !== $v) {
            $this->details = $v;
            $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::DETAILS;
        }


        return $this;
    } // setDetails()

    /**
     * Sets the value of [date_fin_action] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTTraceOperationsInscritDetails The current object (for fluent API support)
     */
    public function setDateFinAction($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_fin_action !== null || $dt !== null) {
            $currentDateAsString = ($this->date_fin_action !== null && $tmpDt = new DateTime($this->date_fin_action)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_fin_action = $newDateAsString;
                $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::DATE_FIN_ACTION;
            }
        } // if either are not null


        return $this;
    } // setDateFinAction()

    /**
     * Set the value of [id_description] column.
     * 
     * @param int $v new value
     * @return CommonTTraceOperationsInscritDetails The current object (for fluent API support)
     */
    public function setIdDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_description !== $v) {
            $this->id_description = $v;
            $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::ID_DESCRIPTION;
        }


        return $this;
    } // setIdDescription()

    /**
     * Set the value of [afficher] column.
     * 
     * @param string $v new value
     * @return CommonTTraceOperationsInscritDetails The current object (for fluent API support)
     */
    public function setAfficher($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->afficher !== $v) {
            $this->afficher = $v;
            $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::AFFICHER;
        }


        return $this;
    } // setAfficher()

    /**
     * Set the value of [descripton] column.
     * 
     * @param string $v new value
     * @return CommonTTraceOperationsInscritDetails The current object (for fluent API support)
     */
    public function setDescripton($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->descripton !== $v) {
            $this->descripton = $v;
            $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::DESCRIPTON;
        }


        return $this;
    } // setDescripton()

    /**
     * Set the value of [log_applet] column.
     * 
     * @param string $v new value
     * @return CommonTTraceOperationsInscritDetails The current object (for fluent API support)
     */
    public function setLogApplet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->log_applet !== $v) {
            $this->log_applet = $v;
            $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::LOG_APPLET;
        }


        return $this;
    } // setLogApplet()

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
            if ($this->afficher !== '0') {
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
            $this->id_trace = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->date_debut_action = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->nom_action = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->details = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_fin_action = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->id_description = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->afficher = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->descripton = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->log_applet = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = CommonTTraceOperationsInscritDetailsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTTraceOperationsInscritDetails object", $e);
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
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTTraceOperationsInscritDetailsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTTraceOperationsInscritDetailsQuery::create()
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
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTTraceOperationsInscritDetailsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTTraceOperationsInscritDetailsPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTTraceOperationsInscritDetailsPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::ID_TRACE)) {
            $modifiedColumns[':p' . $index++]  = '`id_trace`';
        }
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::DATE_DEBUT_ACTION)) {
            $modifiedColumns[':p' . $index++]  = '`date_debut_action`';
        }
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::NOM_ACTION)) {
            $modifiedColumns[':p' . $index++]  = '`nom_action`';
        }
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::DETAILS)) {
            $modifiedColumns[':p' . $index++]  = '`details`';
        }
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::DATE_FIN_ACTION)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin_action`';
        }
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::ID_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`id_description`';
        }
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::AFFICHER)) {
            $modifiedColumns[':p' . $index++]  = '`afficher`';
        }
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::DESCRIPTON)) {
            $modifiedColumns[':p' . $index++]  = '`descripton`';
        }
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::LOG_APPLET)) {
            $modifiedColumns[':p' . $index++]  = '`log_applet`';
        }

        $sql = sprintf(
            'INSERT INTO `T_trace_operations_inscrit_details` (%s) VALUES (%s)',
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
                    case '`id_trace`':						
                        $stmt->bindValue($identifier, $this->id_trace, PDO::PARAM_INT);
                        break;
                    case '`date_debut_action`':						
                        $stmt->bindValue($identifier, $this->date_debut_action, PDO::PARAM_STR);
                        break;
                    case '`nom_action`':						
                        $stmt->bindValue($identifier, $this->nom_action, PDO::PARAM_STR);
                        break;
                    case '`details`':						
                        $stmt->bindValue($identifier, $this->details, PDO::PARAM_STR);
                        break;
                    case '`date_fin_action`':						
                        $stmt->bindValue($identifier, $this->date_fin_action, PDO::PARAM_STR);
                        break;
                    case '`id_description`':						
                        $stmt->bindValue($identifier, $this->id_description, PDO::PARAM_INT);
                        break;
                    case '`afficher`':						
                        $stmt->bindValue($identifier, $this->afficher, PDO::PARAM_STR);
                        break;
                    case '`descripton`':						
                        $stmt->bindValue($identifier, $this->descripton, PDO::PARAM_STR);
                        break;
                    case '`log_applet`':						
                        $stmt->bindValue($identifier, $this->log_applet, PDO::PARAM_STR);
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


            if (($retval = CommonTTraceOperationsInscritDetailsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTTraceOperationsInscritDetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTrace();
                break;
            case 2:
                return $this->getDateDebutAction();
                break;
            case 3:
                return $this->getNomAction();
                break;
            case 4:
                return $this->getDetails();
                break;
            case 5:
                return $this->getDateFinAction();
                break;
            case 6:
                return $this->getIdDescription();
                break;
            case 7:
                return $this->getAfficher();
                break;
            case 8:
                return $this->getDescripton();
                break;
            case 9:
                return $this->getLogApplet();
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
        if (isset($alreadyDumpedObjects['CommonTTraceOperationsInscritDetails'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTTraceOperationsInscritDetails'][$this->getPrimaryKey()] = true;
        $keys = CommonTTraceOperationsInscritDetailsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdTrace(),
            $keys[2] => $this->getDateDebutAction(),
            $keys[3] => $this->getNomAction(),
            $keys[4] => $this->getDetails(),
            $keys[5] => $this->getDateFinAction(),
            $keys[6] => $this->getIdDescription(),
            $keys[7] => $this->getAfficher(),
            $keys[8] => $this->getDescripton(),
            $keys[9] => $this->getLogApplet(),
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
        $pos = CommonTTraceOperationsInscritDetailsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTrace($value);
                break;
            case 2:
                $this->setDateDebutAction($value);
                break;
            case 3:
                $this->setNomAction($value);
                break;
            case 4:
                $this->setDetails($value);
                break;
            case 5:
                $this->setDateFinAction($value);
                break;
            case 6:
                $this->setIdDescription($value);
                break;
            case 7:
                $this->setAfficher($value);
                break;
            case 8:
                $this->setDescripton($value);
                break;
            case 9:
                $this->setLogApplet($value);
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
        $keys = CommonTTraceOperationsInscritDetailsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdTrace($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDateDebutAction($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNomAction($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDetails($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateFinAction($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdDescription($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAfficher($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDescripton($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLogApplet($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::ID)) $criteria->add(CommonTTraceOperationsInscritDetailsPeer::ID, $this->id);
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::ID_TRACE)) $criteria->add(CommonTTraceOperationsInscritDetailsPeer::ID_TRACE, $this->id_trace);
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::DATE_DEBUT_ACTION)) $criteria->add(CommonTTraceOperationsInscritDetailsPeer::DATE_DEBUT_ACTION, $this->date_debut_action);
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::NOM_ACTION)) $criteria->add(CommonTTraceOperationsInscritDetailsPeer::NOM_ACTION, $this->nom_action);
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::DETAILS)) $criteria->add(CommonTTraceOperationsInscritDetailsPeer::DETAILS, $this->details);
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::DATE_FIN_ACTION)) $criteria->add(CommonTTraceOperationsInscritDetailsPeer::DATE_FIN_ACTION, $this->date_fin_action);
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::ID_DESCRIPTION)) $criteria->add(CommonTTraceOperationsInscritDetailsPeer::ID_DESCRIPTION, $this->id_description);
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::AFFICHER)) $criteria->add(CommonTTraceOperationsInscritDetailsPeer::AFFICHER, $this->afficher);
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::DESCRIPTON)) $criteria->add(CommonTTraceOperationsInscritDetailsPeer::DESCRIPTON, $this->descripton);
        if ($this->isColumnModified(CommonTTraceOperationsInscritDetailsPeer::LOG_APPLET)) $criteria->add(CommonTTraceOperationsInscritDetailsPeer::LOG_APPLET, $this->log_applet);

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
        $criteria = new Criteria(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME);
        $criteria->add(CommonTTraceOperationsInscritDetailsPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonTTraceOperationsInscritDetails (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTrace($this->getIdTrace());
        $copyObj->setDateDebutAction($this->getDateDebutAction());
        $copyObj->setNomAction($this->getNomAction());
        $copyObj->setDetails($this->getDetails());
        $copyObj->setDateFinAction($this->getDateFinAction());
        $copyObj->setIdDescription($this->getIdDescription());
        $copyObj->setAfficher($this->getAfficher());
        $copyObj->setDescripton($this->getDescripton());
        $copyObj->setLogApplet($this->getLogApplet());
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
     * @return CommonTTraceOperationsInscritDetails Clone of current object.
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
     * @return CommonTTraceOperationsInscritDetailsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTTraceOperationsInscritDetailsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_trace = null;
        $this->date_debut_action = null;
        $this->nom_action = null;
        $this->details = null;
        $this->date_fin_action = null;
        $this->id_description = null;
        $this->afficher = null;
        $this->descripton = null;
        $this->log_applet = null;
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
        return (string) $this->exportTo(CommonTTraceOperationsInscritDetailsPeer::DEFAULT_STRING_FORMAT);
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
