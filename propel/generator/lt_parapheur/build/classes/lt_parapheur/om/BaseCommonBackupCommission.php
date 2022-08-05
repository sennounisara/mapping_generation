<?php


/**
 * Base class that represents a row from the 'backup_Commission' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBackupCommission extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonBackupCommissionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonBackupCommissionPeer
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
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the date field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $date;

    /**
     * The value for the lieu field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lieu;

    /**
     * The value for the salle field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $salle;

    /**
     * The value for the type field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $type;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the ordre_du_jour field.
     * @var        resource
     */
    protected $ordre_du_jour;

    /**
     * The value for the invitations_zip field.
     * @var        resource
     */
    protected $invitations_zip;

    /**
     * The value for the status_cao field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $status_cao;

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
        $this->date = NULL;
        $this->lieu = '';
        $this->salle = '';
        $this->type = '';
        $this->status_cao = '';
    }

    /**
     * Initializes internal state of BaseCommonBackupCommission object.
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
     * Get the [lieu] column value.
     * 
     * @return string
     */
    public function getLieu()
    {

        return $this->lieu;
    }

    /**
     * Get the [salle] column value.
     * 
     * @return string
     */
    public function getSalle()
    {

        return $this->salle;
    }

    /**
     * Get the [type] column value.
     * 
     * @return string
     */
    public function getType()
    {

        return $this->type;
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
     * Get the [ordre_du_jour] column value.
     * 
     * @return resource
     */
    public function getOrdreDuJour()
    {

        return $this->ordre_du_jour;
    }

    /**
     * Get the [invitations_zip] column value.
     * 
     * @return resource
     */
    public function getInvitationsZip()
    {

        return $this->invitations_zip;
    }

    /**
     * Get the [status_cao] column value.
     * 
     * @return string
     */
    public function getStatusCao()
    {

        return $this->status_cao;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonBackupCommission The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonBackupCommissionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonBackupCommission The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonBackupCommissionPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonBackupCommission The current object (for fluent API support)
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
                $this->modifiedColumns[] = CommonBackupCommissionPeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Set the value of [lieu] column.
     * 
     * @param string $v new value
     * @return CommonBackupCommission The current object (for fluent API support)
     */
    public function setLieu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu !== $v) {
            $this->lieu = $v;
            $this->modifiedColumns[] = CommonBackupCommissionPeer::LIEU;
        }


        return $this;
    } // setLieu()

    /**
     * Set the value of [salle] column.
     * 
     * @param string $v new value
     * @return CommonBackupCommission The current object (for fluent API support)
     */
    public function setSalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->salle !== $v) {
            $this->salle = $v;
            $this->modifiedColumns[] = CommonBackupCommissionPeer::SALLE;
        }


        return $this;
    } // setSalle()

    /**
     * Set the value of [type] column.
     * 
     * @param string $v new value
     * @return CommonBackupCommission The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CommonBackupCommissionPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonBackupCommission The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonBackupCommissionPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [ordre_du_jour] column.
     * 
     * @param resource $v new value
     * @return CommonBackupCommission The current object (for fluent API support)
     */
    public function setOrdreDuJour($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->ordre_du_jour = fopen('php://memory', 'r+');
            fwrite($this->ordre_du_jour, $v);
            rewind($this->ordre_du_jour);
        } else { // it's already a stream
            $this->ordre_du_jour = $v;
        }
        $this->modifiedColumns[] = CommonBackupCommissionPeer::ORDRE_DU_JOUR;


        return $this;
    } // setOrdreDuJour()

    /**
     * Set the value of [invitations_zip] column.
     * 
     * @param resource $v new value
     * @return CommonBackupCommission The current object (for fluent API support)
     */
    public function setInvitationsZip($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->invitations_zip = fopen('php://memory', 'r+');
            fwrite($this->invitations_zip, $v);
            rewind($this->invitations_zip);
        } else { // it's already a stream
            $this->invitations_zip = $v;
        }
        $this->modifiedColumns[] = CommonBackupCommissionPeer::INVITATIONS_ZIP;


        return $this;
    } // setInvitationsZip()

    /**
     * Set the value of [status_cao] column.
     * 
     * @param string $v new value
     * @return CommonBackupCommission The current object (for fluent API support)
     */
    public function setStatusCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->status_cao !== $v) {
            $this->status_cao = $v;
            $this->modifiedColumns[] = CommonBackupCommissionPeer::STATUS_CAO;
        }


        return $this;
    } // setStatusCao()

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
            if ($this->date !== NULL) {
                return false;
            }

            if ($this->lieu !== '') {
                return false;
            }

            if ($this->salle !== '') {
                return false;
            }

            if ($this->type !== '') {
                return false;
            }

            if ($this->status_cao !== '') {
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
            $this->date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->lieu = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->salle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->type = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->libelle = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            if ($row[$startcol + 7] !== null) {
                $this->ordre_du_jour = fopen('php://memory', 'r+');
                fwrite($this->ordre_du_jour, $row[$startcol + 7]);
                rewind($this->ordre_du_jour);
            } else {
                $this->ordre_du_jour = null;
            }
            if ($row[$startcol + 8] !== null) {
                $this->invitations_zip = fopen('php://memory', 'r+');
                fwrite($this->invitations_zip, $row[$startcol + 8]);
                rewind($this->invitations_zip);
            } else {
                $this->invitations_zip = null;
            }
            $this->status_cao = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = CommonBackupCommissionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonBackupCommission object", $e);
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
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonBackupCommissionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonBackupCommissionQuery::create()
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
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonBackupCommissionPeer::addInstanceToPool($this);
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
                // Rewind the ordre_du_jour LOB column, since PDO does not rewind after inserting value.
                if ($this->ordre_du_jour !== null && is_resource($this->ordre_du_jour)) {
                    rewind($this->ordre_du_jour);
                }

                // Rewind the invitations_zip LOB column, since PDO does not rewind after inserting value.
                if ($this->invitations_zip !== null && is_resource($this->invitations_zip)) {
                    rewind($this->invitations_zip);
                }

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

        $this->modifiedColumns[] = CommonBackupCommissionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonBackupCommissionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonBackupCommissionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonBackupCommissionPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonBackupCommissionPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(CommonBackupCommissionPeer::LIEU)) {
            $modifiedColumns[':p' . $index++]  = '`lieu`';
        }
        if ($this->isColumnModified(CommonBackupCommissionPeer::SALLE)) {
            $modifiedColumns[':p' . $index++]  = '`salle`';
        }
        if ($this->isColumnModified(CommonBackupCommissionPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CommonBackupCommissionPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonBackupCommissionPeer::ORDRE_DU_JOUR)) {
            $modifiedColumns[':p' . $index++]  = '`ordre_du_jour`';
        }
        if ($this->isColumnModified(CommonBackupCommissionPeer::INVITATIONS_ZIP)) {
            $modifiedColumns[':p' . $index++]  = '`invitations_zip`';
        }
        if ($this->isColumnModified(CommonBackupCommissionPeer::STATUS_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`status_cao`';
        }

        $sql = sprintf(
            'INSERT INTO `backup_Commission` (%s) VALUES (%s)',
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
                    case '`date`':						
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`lieu`':						
                        $stmt->bindValue($identifier, $this->lieu, PDO::PARAM_STR);
                        break;
                    case '`salle`':						
                        $stmt->bindValue($identifier, $this->salle, PDO::PARAM_STR);
                        break;
                    case '`type`':						
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`ordre_du_jour`':						
                        if (is_resource($this->ordre_du_jour)) {
                            rewind($this->ordre_du_jour);
                        }
                        $stmt->bindValue($identifier, $this->ordre_du_jour, PDO::PARAM_LOB);
                        break;
                    case '`invitations_zip`':						
                        if (is_resource($this->invitations_zip)) {
                            rewind($this->invitations_zip);
                        }
                        $stmt->bindValue($identifier, $this->invitations_zip, PDO::PARAM_LOB);
                        break;
                    case '`status_cao`':						
                        $stmt->bindValue($identifier, $this->status_cao, PDO::PARAM_STR);
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


            if (($retval = CommonBackupCommissionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonBackupCommissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDate();
                break;
            case 3:
                return $this->getLieu();
                break;
            case 4:
                return $this->getSalle();
                break;
            case 5:
                return $this->getType();
                break;
            case 6:
                return $this->getLibelle();
                break;
            case 7:
                return $this->getOrdreDuJour();
                break;
            case 8:
                return $this->getInvitationsZip();
                break;
            case 9:
                return $this->getStatusCao();
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
        if (isset($alreadyDumpedObjects['CommonBackupCommission'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonBackupCommission'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonBackupCommissionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getDate(),
            $keys[3] => $this->getLieu(),
            $keys[4] => $this->getSalle(),
            $keys[5] => $this->getType(),
            $keys[6] => $this->getLibelle(),
            $keys[7] => $this->getOrdreDuJour(),
            $keys[8] => $this->getInvitationsZip(),
            $keys[9] => $this->getStatusCao(),
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
        $pos = CommonBackupCommissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDate($value);
                break;
            case 3:
                $this->setLieu($value);
                break;
            case 4:
                $this->setSalle($value);
                break;
            case 5:
                $this->setType($value);
                break;
            case 6:
                $this->setLibelle($value);
                break;
            case 7:
                $this->setOrdreDuJour($value);
                break;
            case 8:
                $this->setInvitationsZip($value);
                break;
            case 9:
                $this->setStatusCao($value);
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
        $keys = CommonBackupCommissionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDate($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLieu($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSalle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLibelle($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOrdreDuJour($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setInvitationsZip($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setStatusCao($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonBackupCommissionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonBackupCommissionPeer::ID)) $criteria->add(CommonBackupCommissionPeer::ID, $this->id);
        if ($this->isColumnModified(CommonBackupCommissionPeer::ORGANISME)) $criteria->add(CommonBackupCommissionPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonBackupCommissionPeer::DATE)) $criteria->add(CommonBackupCommissionPeer::DATE, $this->date);
        if ($this->isColumnModified(CommonBackupCommissionPeer::LIEU)) $criteria->add(CommonBackupCommissionPeer::LIEU, $this->lieu);
        if ($this->isColumnModified(CommonBackupCommissionPeer::SALLE)) $criteria->add(CommonBackupCommissionPeer::SALLE, $this->salle);
        if ($this->isColumnModified(CommonBackupCommissionPeer::TYPE)) $criteria->add(CommonBackupCommissionPeer::TYPE, $this->type);
        if ($this->isColumnModified(CommonBackupCommissionPeer::LIBELLE)) $criteria->add(CommonBackupCommissionPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonBackupCommissionPeer::ORDRE_DU_JOUR)) $criteria->add(CommonBackupCommissionPeer::ORDRE_DU_JOUR, $this->ordre_du_jour);
        if ($this->isColumnModified(CommonBackupCommissionPeer::INVITATIONS_ZIP)) $criteria->add(CommonBackupCommissionPeer::INVITATIONS_ZIP, $this->invitations_zip);
        if ($this->isColumnModified(CommonBackupCommissionPeer::STATUS_CAO)) $criteria->add(CommonBackupCommissionPeer::STATUS_CAO, $this->status_cao);

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
        $criteria = new Criteria(CommonBackupCommissionPeer::DATABASE_NAME);
        $criteria->add(CommonBackupCommissionPeer::ID, $this->id);
        $criteria->add(CommonBackupCommissionPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonBackupCommission (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setDate($this->getDate());
        $copyObj->setLieu($this->getLieu());
        $copyObj->setSalle($this->getSalle());
        $copyObj->setType($this->getType());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setOrdreDuJour($this->getOrdreDuJour());
        $copyObj->setInvitationsZip($this->getInvitationsZip());
        $copyObj->setStatusCao($this->getStatusCao());
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
     * @return CommonBackupCommission Clone of current object.
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
     * @return CommonBackupCommissionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonBackupCommissionPeer();
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
        $this->date = null;
        $this->lieu = null;
        $this->salle = null;
        $this->type = null;
        $this->libelle = null;
        $this->ordre_du_jour = null;
        $this->invitations_zip = null;
        $this->status_cao = null;
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
        return (string) $this->exportTo(CommonBackupCommissionPeer::DEFAULT_STRING_FORMAT);
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
