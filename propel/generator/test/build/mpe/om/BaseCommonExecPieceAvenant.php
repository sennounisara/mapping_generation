<?php


/**
 * Base class that represents a row from the 'exec_piece_avenant' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecPieceAvenant extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecPieceAvenantPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecPieceAvenantPeer
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
     * The value for the id_avenant field.
     * @var        int
     */
    protected $id_avenant;

    /**
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the taille field.
     * @var        string
     */
    protected $taille;

    /**
     * The value for the id_agent_crea field.
     * @var        int
     */
    protected $id_agent_crea;

    /**
     * The value for the date_crea field.
     * @var        string
     */
    protected $date_crea;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgent;

    /**
     * @var        CommonExecAvenant
     */
    protected $aCommonExecAvenant;

    /**
     * @var        CommonExecContrat
     */
    protected $aCommonExecContrat;

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
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [id_avenant] column value.
     * 
     * @return int
     */
    public function getIdAvenant()
    {

        return $this->id_avenant;
    }

    /**
     * Get the [id_contrat] column value.
     * 
     * @return int
     */
    public function getIdContrat()
    {

        return $this->id_contrat;
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
     * Get the [taille] column value.
     * 
     * @return string
     */
    public function getTaille()
    {

        return $this->taille;
    }

    /**
     * Get the [id_agent_crea] column value.
     * 
     * @return int
     */
    public function getIdAgentCrea()
    {

        return $this->id_agent_crea;
    }

    /**
     * Get the [optionally formatted] temporal [date_crea] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCrea($format = 'Y-m-d H:i:s')
    {
        if ($this->date_crea === null) {
            return null;
        }

        if ($this->date_crea === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_crea);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_crea, true), $x);
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
     * Get the [id_blob] column value.
     * 
     * @return int
     */
    public function getIdBlob()
    {

        return $this->id_blob;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecPieceAvenantPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_avenant] column.
     * 
     * @param int $v new value
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     */
    public function setIdAvenant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_avenant !== $v) {
            $this->id_avenant = $v;
            $this->modifiedColumns[] = CommonExecPieceAvenantPeer::ID_AVENANT;
        }

        if ($this->aCommonExecAvenant !== null && $this->aCommonExecAvenant->getId() !== $v) {
            $this->aCommonExecAvenant = null;
        }


        return $this;
    } // setIdAvenant()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecPieceAvenantPeer::ID_CONTRAT;
        }

        if ($this->aCommonExecContrat !== null && $this->aCommonExecContrat->getIdContrat() !== $v) {
            $this->aCommonExecContrat = null;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonExecPieceAvenantPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [taille] column.
     * 
     * @param string $v new value
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     */
    public function setTaille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille !== $v) {
            $this->taille = $v;
            $this->modifiedColumns[] = CommonExecPieceAvenantPeer::TAILLE;
        }


        return $this;
    } // setTaille()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecPieceAvenantPeer::ID_AGENT_CREA;
        }

        if ($this->aCommonAgent !== null && $this->aCommonAgent->getId() !== $v) {
            $this->aCommonAgent = null;
        }


        return $this;
    } // setIdAgentCrea()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecPieceAvenantPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonExecPieceAvenantPeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_avenant = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_contrat = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->libelle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->taille = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_agent_crea = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->date_crea = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_blob = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = CommonExecPieceAvenantPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecPieceAvenant object", $e);
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

        if ($this->aCommonExecAvenant !== null && $this->id_avenant !== $this->aCommonExecAvenant->getId()) {
            $this->aCommonExecAvenant = null;
        }
        if ($this->aCommonExecContrat !== null && $this->id_contrat !== $this->aCommonExecContrat->getIdContrat()) {
            $this->aCommonExecContrat = null;
        }
        if ($this->aCommonAgent !== null && $this->id_agent_crea !== $this->aCommonAgent->getId()) {
            $this->aCommonAgent = null;
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
            $con = Propel::getConnection(CommonExecPieceAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecPieceAvenantPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonAgent = null;
            $this->aCommonExecAvenant = null;
            $this->aCommonExecContrat = null;
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
            $con = Propel::getConnection(CommonExecPieceAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecPieceAvenantQuery::create()
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
            $con = Propel::getConnection(CommonExecPieceAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecPieceAvenantPeer::addInstanceToPool($this);
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

            if ($this->aCommonAgent !== null) {
                if ($this->aCommonAgent->isModified() || $this->aCommonAgent->isNew()) {
                    $affectedRows += $this->aCommonAgent->save($con);
                }
                $this->setCommonAgent($this->aCommonAgent);
            }

            if ($this->aCommonExecAvenant !== null) {
                if ($this->aCommonExecAvenant->isModified() || $this->aCommonExecAvenant->isNew()) {
                    $affectedRows += $this->aCommonExecAvenant->save($con);
                }
                $this->setCommonExecAvenant($this->aCommonExecAvenant);
            }

            if ($this->aCommonExecContrat !== null) {
                if ($this->aCommonExecContrat->isModified() || $this->aCommonExecContrat->isNew()) {
                    $affectedRows += $this->aCommonExecContrat->save($con);
                }
                $this->setCommonExecContrat($this->aCommonExecContrat);
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

        $this->modifiedColumns[] = CommonExecPieceAvenantPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecPieceAvenantPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::ID_AVENANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_avenant`';
        }
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::TAILLE)) {
            $modifiedColumns[':p' . $index++]  = '`taille`';
        }
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_piece_avenant` (%s) VALUES (%s)',
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
                    case '`id_avenant`':						
                        $stmt->bindValue($identifier, $this->id_avenant, PDO::PARAM_INT);
                        break;
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`taille`':						
                        $stmt->bindValue($identifier, $this->taille, PDO::PARAM_STR);
                        break;
                    case '`id_agent_crea`':						
                        $stmt->bindValue($identifier, $this->id_agent_crea, PDO::PARAM_INT);
                        break;
                    case '`date_crea`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
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

            if ($this->aCommonAgent !== null) {
                if (!$this->aCommonAgent->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgent->getValidationFailures());
                }
            }

            if ($this->aCommonExecAvenant !== null) {
                if (!$this->aCommonExecAvenant->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecAvenant->getValidationFailures());
                }
            }

            if ($this->aCommonExecContrat !== null) {
                if (!$this->aCommonExecContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecContrat->getValidationFailures());
                }
            }


            if (($retval = CommonExecPieceAvenantPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonExecPieceAvenantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAvenant();
                break;
            case 2:
                return $this->getIdContrat();
                break;
            case 3:
                return $this->getLibelle();
                break;
            case 4:
                return $this->getTaille();
                break;
            case 5:
                return $this->getIdAgentCrea();
                break;
            case 6:
                return $this->getDateCrea();
                break;
            case 7:
                return $this->getIdBlob();
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
        if (isset($alreadyDumpedObjects['CommonExecPieceAvenant'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecPieceAvenant'][$this->getPrimaryKey()] = true;
        $keys = CommonExecPieceAvenantPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdAvenant(),
            $keys[2] => $this->getIdContrat(),
            $keys[3] => $this->getLibelle(),
            $keys[4] => $this->getTaille(),
            $keys[5] => $this->getIdAgentCrea(),
            $keys[6] => $this->getDateCrea(),
            $keys[7] => $this->getIdBlob(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonAgent) {
                $result['CommonAgent'] = $this->aCommonAgent->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecAvenant) {
                $result['CommonExecAvenant'] = $this->aCommonExecAvenant->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecContrat) {
                $result['CommonExecContrat'] = $this->aCommonExecContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonExecPieceAvenantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAvenant($value);
                break;
            case 2:
                $this->setIdContrat($value);
                break;
            case 3:
                $this->setLibelle($value);
                break;
            case 4:
                $this->setTaille($value);
                break;
            case 5:
                $this->setIdAgentCrea($value);
                break;
            case 6:
                $this->setDateCrea($value);
                break;
            case 7:
                $this->setIdBlob($value);
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
        $keys = CommonExecPieceAvenantPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdAvenant($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdContrat($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTaille($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdAgentCrea($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateCrea($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdBlob($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecPieceAvenantPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecPieceAvenantPeer::ID)) $criteria->add(CommonExecPieceAvenantPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::ID_AVENANT)) $criteria->add(CommonExecPieceAvenantPeer::ID_AVENANT, $this->id_avenant);
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::ID_CONTRAT)) $criteria->add(CommonExecPieceAvenantPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::LIBELLE)) $criteria->add(CommonExecPieceAvenantPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::TAILLE)) $criteria->add(CommonExecPieceAvenantPeer::TAILLE, $this->taille);
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::ID_AGENT_CREA)) $criteria->add(CommonExecPieceAvenantPeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::DATE_CREA)) $criteria->add(CommonExecPieceAvenantPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecPieceAvenantPeer::ID_BLOB)) $criteria->add(CommonExecPieceAvenantPeer::ID_BLOB, $this->id_blob);

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
        $criteria = new Criteria(CommonExecPieceAvenantPeer::DATABASE_NAME);
        $criteria->add(CommonExecPieceAvenantPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecPieceAvenant (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdAvenant($this->getIdAvenant());
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setTaille($this->getTaille());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdBlob($this->getIdBlob());

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
     * @return CommonExecPieceAvenant Clone of current object.
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
     * @return CommonExecPieceAvenantPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecPieceAvenantPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgent(CommonAgent $v = null)
    {
        if ($v === null) {
            $this->setIdAgentCrea(NULL);
        } else {
            $this->setIdAgentCrea($v->getId());
        }

        $this->aCommonAgent = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgent object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecPieceAvenant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonAgent object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonAgent The associated CommonAgent object.
     * @throws PropelException
     */
    public function getCommonAgent(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgent === null && ($this->id_agent_crea !== null) && $doQuery) {
            $this->aCommonAgent = CommonAgentQuery::create()->findPk($this->id_agent_crea, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgent->addCommonExecPieceAvenants($this);
             */
        }

        return $this->aCommonAgent;
    }

    /**
     * Declares an association between this object and a CommonExecAvenant object.
     *
     * @param   CommonExecAvenant $v
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecAvenant(CommonExecAvenant $v = null)
    {
        if ($v === null) {
            $this->setIdAvenant(NULL);
        } else {
            $this->setIdAvenant($v->getId());
        }

        $this->aCommonExecAvenant = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecAvenant object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecPieceAvenant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecAvenant object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecAvenant The associated CommonExecAvenant object.
     * @throws PropelException
     */
    public function getCommonExecAvenant(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecAvenant === null && ($this->id_avenant !== null) && $doQuery) {
            $this->aCommonExecAvenant = CommonExecAvenantQuery::create()->findPk($this->id_avenant, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecAvenant->addCommonExecPieceAvenants($this);
             */
        }

        return $this->aCommonExecAvenant;
    }

    /**
     * Declares an association between this object and a CommonExecContrat object.
     *
     * @param   CommonExecContrat $v
     * @return CommonExecPieceAvenant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecContrat(CommonExecContrat $v = null)
    {
        if ($v === null) {
            $this->setIdContrat(NULL);
        } else {
            $this->setIdContrat($v->getIdContrat());
        }

        $this->aCommonExecContrat = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecContrat object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecPieceAvenant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecContrat object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecContrat The associated CommonExecContrat object.
     * @throws PropelException
     */
    public function getCommonExecContrat(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecContrat === null && ($this->id_contrat !== null) && $doQuery) {
            $this->aCommonExecContrat = CommonExecContratQuery::create()->findPk($this->id_contrat, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecContrat->addCommonExecPieceAvenants($this);
             */
        }

        return $this->aCommonExecContrat;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_avenant = null;
        $this->id_contrat = null;
        $this->libelle = null;
        $this->taille = null;
        $this->id_agent_crea = null;
        $this->date_crea = null;
        $this->id_blob = null;
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
            if ($this->aCommonAgent instanceof Persistent) {
              $this->aCommonAgent->clearAllReferences($deep);
            }
            if ($this->aCommonExecAvenant instanceof Persistent) {
              $this->aCommonExecAvenant->clearAllReferences($deep);
            }
            if ($this->aCommonExecContrat instanceof Persistent) {
              $this->aCommonExecContrat->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonAgent = null;
        $this->aCommonExecAvenant = null;
        $this->aCommonExecContrat = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecPieceAvenantPeer::DEFAULT_STRING_FORMAT);
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
