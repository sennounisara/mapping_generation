<?php


/**
 * Base class that represents a row from the 'DocumentExterne' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDocumentExterne extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonDocumentExternePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonDocumentExternePeer
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
     * The value for the refconsultation field.
     * @var        int
     */
    protected $refconsultation;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the idblob field.
     * @var        int
     */
    protected $idblob;

    /**
     * The value for the identreprise field.
     * @var        int
     */
    protected $identreprise;

    /**
     * The value for the type field.
     * @var        int
     */
    protected $type;

    /**
     * The value for the nom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the date field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $date;

    /**
     * The value for the lot field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lot;

    /**
     * @var        CommonBlobOrganisme
     */
    protected $aCommonBlobOrganisme;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultation;

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
        $this->date = NULL;
        $this->lot = 0;
    }

    /**
     * Initializes internal state of BaseCommonDocumentExterne object.
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
     * Get the [refconsultation] column value.
     * 
     * @return int
     */
    public function getRefconsultation()
    {

        return $this->refconsultation;
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
     * Get the [idblob] column value.
     * 
     * @return int
     */
    public function getIdblob()
    {

        return $this->idblob;
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
     * Get the [type] column value.
     * 
     * @return int
     */
    public function getType()
    {

        return $this->type;
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
     * Get the [description] column value.
     * 
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [optionally formatted] temporal [date] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = null)
    {
        if ($this->date === null) {
            return null;
        }

        if ($this->date === '0000-00-00') {
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
     * Get the [lot] column value.
     * 
     * @return int
     */
    public function getLot()
    {

        return $this->lot;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonDocumentExterne The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonDocumentExternePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [refconsultation] column.
     * 
     * @param int $v new value
     * @return CommonDocumentExterne The current object (for fluent API support)
     */
    public function setRefconsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refconsultation !== $v) {
            $this->refconsultation = $v;
            $this->modifiedColumns[] = CommonDocumentExternePeer::REFCONSULTATION;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setRefconsultation()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonDocumentExterne The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonDocumentExternePeer::ORGANISME;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [idblob] column.
     * 
     * @param int $v new value
     * @return CommonDocumentExterne The current object (for fluent API support)
     */
    public function setIdblob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idblob !== $v) {
            $this->idblob = $v;
            $this->modifiedColumns[] = CommonDocumentExternePeer::IDBLOB;
        }

        if ($this->aCommonBlobOrganisme !== null && $this->aCommonBlobOrganisme->getId() !== $v) {
            $this->aCommonBlobOrganisme = null;
        }


        return $this;
    } // setIdblob()

    /**
     * Set the value of [identreprise] column.
     * 
     * @param int $v new value
     * @return CommonDocumentExterne The current object (for fluent API support)
     */
    public function setIdentreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->identreprise !== $v) {
            $this->identreprise = $v;
            $this->modifiedColumns[] = CommonDocumentExternePeer::IDENTREPRISE;
        }


        return $this;
    } // setIdentreprise()

    /**
     * Set the value of [type] column.
     * 
     * @param int $v new value
     * @return CommonDocumentExterne The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CommonDocumentExternePeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonDocumentExterne The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonDocumentExternePeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [description] column.
     * 
     * @param string $v new value
     * @return CommonDocumentExterne The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = CommonDocumentExternePeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonDocumentExterne The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = CommonDocumentExternePeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonDocumentExterne The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonDocumentExternePeer::LOT;
        }


        return $this;
    } // setLot()

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

            if ($this->date !== NULL) {
                return false;
            }

            if ($this->lot !== 0) {
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
            $this->refconsultation = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->organisme = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->idblob = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->identreprise = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->type = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->nom = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->description = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->date = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->lot = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = CommonDocumentExternePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonDocumentExterne object", $e);
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

        if ($this->aCommonConsultation !== null && $this->refconsultation !== $this->aCommonConsultation->getReference()) {
            $this->aCommonConsultation = null;
        }
        if ($this->aCommonConsultation !== null && $this->organisme !== $this->aCommonConsultation->getOrganisme()) {
            $this->aCommonConsultation = null;
        }
        if ($this->aCommonBlobOrganisme !== null && $this->idblob !== $this->aCommonBlobOrganisme->getId()) {
            $this->aCommonBlobOrganisme = null;
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
            $con = Propel::getConnection(CommonDocumentExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonDocumentExternePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonBlobOrganisme = null;
            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonDocumentExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonDocumentExterneQuery::create()
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
            $con = Propel::getConnection(CommonDocumentExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonDocumentExternePeer::addInstanceToPool($this);
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

            if ($this->aCommonBlobOrganisme !== null) {
                if ($this->aCommonBlobOrganisme->isModified() || $this->aCommonBlobOrganisme->isNew()) {
                    $affectedRows += $this->aCommonBlobOrganisme->save($con);
                }
                $this->setCommonBlobOrganisme($this->aCommonBlobOrganisme);
            }

            if ($this->aCommonConsultation !== null) {
                if ($this->aCommonConsultation->isModified() || $this->aCommonConsultation->isNew()) {
                    $affectedRows += $this->aCommonConsultation->save($con);
                }
                $this->setCommonConsultation($this->aCommonConsultation);
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

        $this->modifiedColumns[] = CommonDocumentExternePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonDocumentExternePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonDocumentExternePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonDocumentExternePeer::REFCONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`refConsultation`';
        }
        if ($this->isColumnModified(CommonDocumentExternePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonDocumentExternePeer::IDBLOB)) {
            $modifiedColumns[':p' . $index++]  = '`idBlob`';
        }
        if ($this->isColumnModified(CommonDocumentExternePeer::IDENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`idEntreprise`';
        }
        if ($this->isColumnModified(CommonDocumentExternePeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CommonDocumentExternePeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonDocumentExternePeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(CommonDocumentExternePeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(CommonDocumentExternePeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }

        $sql = sprintf(
            'INSERT INTO `DocumentExterne` (%s) VALUES (%s)',
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
                    case '`refConsultation`':						
                        $stmt->bindValue($identifier, $this->refconsultation, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`idBlob`':						
                        $stmt->bindValue($identifier, $this->idblob, PDO::PARAM_INT);
                        break;
                    case '`idEntreprise`':						
                        $stmt->bindValue($identifier, $this->identreprise, PDO::PARAM_INT);
                        break;
                    case '`type`':						
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_INT);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`description`':						
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`date`':						
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
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

            if ($this->aCommonBlobOrganisme !== null) {
                if (!$this->aCommonBlobOrganisme->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonBlobOrganisme->getValidationFailures());
                }
            }

            if ($this->aCommonConsultation !== null) {
                if (!$this->aCommonConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonDocumentExternePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonDocumentExternePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRefconsultation();
                break;
            case 2:
                return $this->getOrganisme();
                break;
            case 3:
                return $this->getIdblob();
                break;
            case 4:
                return $this->getIdentreprise();
                break;
            case 5:
                return $this->getType();
                break;
            case 6:
                return $this->getNom();
                break;
            case 7:
                return $this->getDescription();
                break;
            case 8:
                return $this->getDate();
                break;
            case 9:
                return $this->getLot();
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
        if (isset($alreadyDumpedObjects['CommonDocumentExterne'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonDocumentExterne'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonDocumentExternePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getRefconsultation(),
            $keys[2] => $this->getOrganisme(),
            $keys[3] => $this->getIdblob(),
            $keys[4] => $this->getIdentreprise(),
            $keys[5] => $this->getType(),
            $keys[6] => $this->getNom(),
            $keys[7] => $this->getDescription(),
            $keys[8] => $this->getDate(),
            $keys[9] => $this->getLot(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonBlobOrganisme) {
                $result['CommonBlobOrganisme'] = $this->aCommonBlobOrganisme->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonConsultation) {
                $result['CommonConsultation'] = $this->aCommonConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonDocumentExternePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRefconsultation($value);
                break;
            case 2:
                $this->setOrganisme($value);
                break;
            case 3:
                $this->setIdblob($value);
                break;
            case 4:
                $this->setIdentreprise($value);
                break;
            case 5:
                $this->setType($value);
                break;
            case 6:
                $this->setNom($value);
                break;
            case 7:
                $this->setDescription($value);
                break;
            case 8:
                $this->setDate($value);
                break;
            case 9:
                $this->setLot($value);
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
        $keys = CommonDocumentExternePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRefconsultation($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrganisme($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdblob($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdentreprise($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNom($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDescription($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDate($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLot($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonDocumentExternePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonDocumentExternePeer::ID)) $criteria->add(CommonDocumentExternePeer::ID, $this->id);
        if ($this->isColumnModified(CommonDocumentExternePeer::REFCONSULTATION)) $criteria->add(CommonDocumentExternePeer::REFCONSULTATION, $this->refconsultation);
        if ($this->isColumnModified(CommonDocumentExternePeer::ORGANISME)) $criteria->add(CommonDocumentExternePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonDocumentExternePeer::IDBLOB)) $criteria->add(CommonDocumentExternePeer::IDBLOB, $this->idblob);
        if ($this->isColumnModified(CommonDocumentExternePeer::IDENTREPRISE)) $criteria->add(CommonDocumentExternePeer::IDENTREPRISE, $this->identreprise);
        if ($this->isColumnModified(CommonDocumentExternePeer::TYPE)) $criteria->add(CommonDocumentExternePeer::TYPE, $this->type);
        if ($this->isColumnModified(CommonDocumentExternePeer::NOM)) $criteria->add(CommonDocumentExternePeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonDocumentExternePeer::DESCRIPTION)) $criteria->add(CommonDocumentExternePeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(CommonDocumentExternePeer::DATE)) $criteria->add(CommonDocumentExternePeer::DATE, $this->date);
        if ($this->isColumnModified(CommonDocumentExternePeer::LOT)) $criteria->add(CommonDocumentExternePeer::LOT, $this->lot);

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
        $criteria = new Criteria(CommonDocumentExternePeer::DATABASE_NAME);
        $criteria->add(CommonDocumentExternePeer::ID, $this->id);
        $criteria->add(CommonDocumentExternePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonDocumentExterne (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRefconsultation($this->getRefconsultation());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdblob($this->getIdblob());
        $copyObj->setIdentreprise($this->getIdentreprise());
        $copyObj->setType($this->getType());
        $copyObj->setNom($this->getNom());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setDate($this->getDate());
        $copyObj->setLot($this->getLot());

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
     * @return CommonDocumentExterne Clone of current object.
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
     * @return CommonDocumentExternePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonDocumentExternePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonBlobOrganisme object.
     *
     * @param   CommonBlobOrganisme $v
     * @return CommonDocumentExterne The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonBlobOrganisme(CommonBlobOrganisme $v = null)
    {
        if ($v === null) {
            $this->setIdblob(NULL);
        } else {
            $this->setIdblob($v->getId());
        }

        $this->aCommonBlobOrganisme = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonBlobOrganisme object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonDocumentExterne($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonBlobOrganisme object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonBlobOrganisme The associated CommonBlobOrganisme object.
     * @throws PropelException
     */
    public function getCommonBlobOrganisme(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonBlobOrganisme === null && ($this->idblob !== null) && $doQuery) {
            $this->aCommonBlobOrganisme = CommonBlobOrganismeQuery::create()
                ->filterByCommonDocumentExterne($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonBlobOrganisme->addCommonDocumentExternes($this);
             */
        }

        return $this->aCommonBlobOrganisme;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonDocumentExterne The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setRefconsultation(NULL);
        } else {
            $this->setRefconsultation($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonDocumentExterne($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultation The associated CommonConsultation object.
     * @throws PropelException
     */
    public function getCommonConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultation === null && (($this->organisme !== "" && $this->organisme !== null) && $this->refconsultation !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()->findPk(array($this->refconsultation, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonDocumentExternes($this);
             */
        }

        return $this->aCommonConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->refconsultation = null;
        $this->organisme = null;
        $this->idblob = null;
        $this->identreprise = null;
        $this->type = null;
        $this->nom = null;
        $this->description = null;
        $this->date = null;
        $this->lot = null;
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
            if ($this->aCommonBlobOrganisme instanceof Persistent) {
              $this->aCommonBlobOrganisme->clearAllReferences($deep);
            }
            if ($this->aCommonConsultation instanceof Persistent) {
              $this->aCommonConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonBlobOrganisme = null;
        $this->aCommonConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonDocumentExternePeer::DEFAULT_STRING_FORMAT);
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
