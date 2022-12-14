<?php


/**
 * Base class that represents a row from the 't_CAO_Commission' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOCommission extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCAOCommissionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCAOCommissionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_commission field.
     * @var        string
     */
    protected $id_commission;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the sigle field.
     * @var        string
     */
    protected $sigle;

    /**
     * The value for the intitule field.
     * @var        string
     */
    protected $intitule;

    /**
     * @var        PropelObjectCollection|CommonTCAOCommissionAgent[] Collection to store aggregation of CommonTCAOCommissionAgent objects.
     */
    protected $collCommonTCAOCommissionAgents;
    protected $collCommonTCAOCommissionAgentsPartial;

    /**
     * @var        PropelObjectCollection|CommonTCAOCommissionConsultation[] Collection to store aggregation of CommonTCAOCommissionConsultation objects.
     */
    protected $collCommonTCAOCommissionConsultations;
    protected $collCommonTCAOCommissionConsultationsPartial;

    /**
     * @var        PropelObjectCollection|CommonTCAOCommissionIntervenantExterne[] Collection to store aggregation of CommonTCAOCommissionIntervenantExterne objects.
     */
    protected $collCommonTCAOCommissionIntervenantExternes;
    protected $collCommonTCAOCommissionIntervenantExternesPartial;

    /**
     * @var        PropelObjectCollection|CommonTCAOOrdreDePassage[] Collection to store aggregation of CommonTCAOOrdreDePassage objects.
     */
    protected $collCommonTCAOOrdreDePassages;
    protected $collCommonTCAOOrdreDePassagesPartial;

    /**
     * @var        PropelObjectCollection|CommonTCAOSeance[] Collection to store aggregation of CommonTCAOSeance objects.
     */
    protected $collCommonTCAOSeances;
    protected $collCommonTCAOSeancesPartial;

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
    protected $commonTCAOCommissionAgentsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCAOCommissionConsultationsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCAOCommissionIntervenantExternesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCAOOrdreDePassagesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCAOSeancesScheduledForDeletion = null;

    /**
     * Get the [id_commission] column value.
     * 
     * @return string
     */
    public function getIdCommission()
    {

        return $this->id_commission;
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
     * Get the [sigle] column value.
     * 
     * @return string
     */
    public function getSigle()
    {

        return $this->sigle;
    }

    /**
     * Get the [intitule] column value.
     * 
     * @return string
     */
    public function getIntitule()
    {

        return $this->intitule;
    }

    /**
     * Set the value of [id_commission] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function setIdCommission($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_commission !== $v) {
            $this->id_commission = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionPeer::ID_COMMISSION;
        }


        return $this;
    } // setIdCommission()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [sigle] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function setSigle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle !== $v) {
            $this->sigle = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionPeer::SIGLE;
        }


        return $this;
    } // setSigle()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionPeer::INTITULE;
        }


        return $this;
    } // setIntitule()

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

            $this->id_commission = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->sigle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->intitule = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = CommonTCAOCommissionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCAOCommission object", $e);
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
            $con = Propel::getConnection(CommonTCAOCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCAOCommissionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonTCAOCommissionAgents = null;

            $this->collCommonTCAOCommissionConsultations = null;

            $this->collCommonTCAOCommissionIntervenantExternes = null;

            $this->collCommonTCAOOrdreDePassages = null;

            $this->collCommonTCAOSeances = null;

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
            $con = Propel::getConnection(CommonTCAOCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCAOCommissionQuery::create()
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
            $con = Propel::getConnection(CommonTCAOCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCAOCommissionPeer::addInstanceToPool($this);
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

            if ($this->commonTCAOCommissionAgentsScheduledForDeletion !== null) {
                if (!$this->commonTCAOCommissionAgentsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOCommissionAgentsScheduledForDeletion as $commonTCAOCommissionAgent) {
                        // need to save related object because we set the relation to null
                        $commonTCAOCommissionAgent->save($con);
                    }
                    $this->commonTCAOCommissionAgentsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOCommissionAgents !== null) {
                foreach ($this->collCommonTCAOCommissionAgents as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCAOCommissionConsultationsScheduledForDeletion !== null) {
                if (!$this->commonTCAOCommissionConsultationsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOCommissionConsultationsScheduledForDeletion as $commonTCAOCommissionConsultation) {
                        // need to save related object because we set the relation to null
                        $commonTCAOCommissionConsultation->save($con);
                    }
                    $this->commonTCAOCommissionConsultationsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOCommissionConsultations !== null) {
                foreach ($this->collCommonTCAOCommissionConsultations as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCAOCommissionIntervenantExternesScheduledForDeletion !== null) {
                if (!$this->commonTCAOCommissionIntervenantExternesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOCommissionIntervenantExternesScheduledForDeletion as $commonTCAOCommissionIntervenantExterne) {
                        // need to save related object because we set the relation to null
                        $commonTCAOCommissionIntervenantExterne->save($con);
                    }
                    $this->commonTCAOCommissionIntervenantExternesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOCommissionIntervenantExternes !== null) {
                foreach ($this->collCommonTCAOCommissionIntervenantExternes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCAOOrdreDePassagesScheduledForDeletion !== null) {
                if (!$this->commonTCAOOrdreDePassagesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOOrdreDePassagesScheduledForDeletion as $commonTCAOOrdreDePassage) {
                        // need to save related object because we set the relation to null
                        $commonTCAOOrdreDePassage->save($con);
                    }
                    $this->commonTCAOOrdreDePassagesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOOrdreDePassages !== null) {
                foreach ($this->collCommonTCAOOrdreDePassages as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCAOSeancesScheduledForDeletion !== null) {
                if (!$this->commonTCAOSeancesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOSeancesScheduledForDeletion as $commonTCAOSeance) {
                        // need to save related object because we set the relation to null
                        $commonTCAOSeance->save($con);
                    }
                    $this->commonTCAOSeancesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOSeances !== null) {
                foreach ($this->collCommonTCAOSeances as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTCAOCommissionPeer::ID_COMMISSION;
        if (null !== $this->id_commission) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCAOCommissionPeer::ID_COMMISSION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCAOCommissionPeer::ID_COMMISSION)) {
            $modifiedColumns[':p' . $index++]  = '`id_commission`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionPeer::SIGLE)) {
            $modifiedColumns[':p' . $index++]  = '`sigle`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionPeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`intitule`';
        }

        $sql = sprintf(
            'INSERT INTO `t_CAO_Commission` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_commission`':						
                        $stmt->bindValue($identifier, $this->id_commission, PDO::PARAM_STR);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`sigle`':						
                        $stmt->bindValue($identifier, $this->sigle, PDO::PARAM_STR);
                        break;
                    case '`intitule`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
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
        $this->setIdCommission($pk);

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


            if (($retval = CommonTCAOCommissionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTCAOCommissionAgents !== null) {
                    foreach ($this->collCommonTCAOCommissionAgents as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCAOCommissionConsultations !== null) {
                    foreach ($this->collCommonTCAOCommissionConsultations as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCAOCommissionIntervenantExternes !== null) {
                    foreach ($this->collCommonTCAOCommissionIntervenantExternes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCAOOrdreDePassages !== null) {
                    foreach ($this->collCommonTCAOOrdreDePassages as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCAOSeances !== null) {
                    foreach ($this->collCommonTCAOSeances as $referrerFK) {
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
        $pos = CommonTCAOCommissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdCommission();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getSigle();
                break;
            case 3:
                return $this->getIntitule();
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
        if (isset($alreadyDumpedObjects['CommonTCAOCommission'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCAOCommission'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTCAOCommissionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCommission(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getSigle(),
            $keys[3] => $this->getIntitule(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonTCAOCommissionAgents) {
                $result['CommonTCAOCommissionAgents'] = $this->collCommonTCAOCommissionAgents->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCAOCommissionConsultations) {
                $result['CommonTCAOCommissionConsultations'] = $this->collCommonTCAOCommissionConsultations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCAOCommissionIntervenantExternes) {
                $result['CommonTCAOCommissionIntervenantExternes'] = $this->collCommonTCAOCommissionIntervenantExternes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCAOOrdreDePassages) {
                $result['CommonTCAOOrdreDePassages'] = $this->collCommonTCAOOrdreDePassages->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCAOSeances) {
                $result['CommonTCAOSeances'] = $this->collCommonTCAOSeances->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTCAOCommissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdCommission($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setSigle($value);
                break;
            case 3:
                $this->setIntitule($value);
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
        $keys = CommonTCAOCommissionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdCommission($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSigle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIntitule($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCAOCommissionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCAOCommissionPeer::ID_COMMISSION)) $criteria->add(CommonTCAOCommissionPeer::ID_COMMISSION, $this->id_commission);
        if ($this->isColumnModified(CommonTCAOCommissionPeer::ORGANISME)) $criteria->add(CommonTCAOCommissionPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTCAOCommissionPeer::SIGLE)) $criteria->add(CommonTCAOCommissionPeer::SIGLE, $this->sigle);
        if ($this->isColumnModified(CommonTCAOCommissionPeer::INTITULE)) $criteria->add(CommonTCAOCommissionPeer::INTITULE, $this->intitule);

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
        $criteria = new Criteria(CommonTCAOCommissionPeer::DATABASE_NAME);
        $criteria->add(CommonTCAOCommissionPeer::ID_COMMISSION, $this->id_commission);
        $criteria->add(CommonTCAOCommissionPeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdCommission();
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
        $this->setIdCommission($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdCommission()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTCAOCommission (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setSigle($this->getSigle());
        $copyObj->setIntitule($this->getIntitule());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTCAOCommissionAgents() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOCommissionAgent($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCAOCommissionConsultations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOCommissionConsultation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCAOCommissionIntervenantExternes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOCommissionIntervenantExterne($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCAOOrdreDePassages() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOOrdreDePassage($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCAOSeances() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOSeance($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCommission(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTCAOCommission Clone of current object.
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
     * @return CommonTCAOCommissionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCAOCommissionPeer();
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
        if ('CommonTCAOCommissionAgent' == $relationName) {
            $this->initCommonTCAOCommissionAgents();
        }
        if ('CommonTCAOCommissionConsultation' == $relationName) {
            $this->initCommonTCAOCommissionConsultations();
        }
        if ('CommonTCAOCommissionIntervenantExterne' == $relationName) {
            $this->initCommonTCAOCommissionIntervenantExternes();
        }
        if ('CommonTCAOOrdreDePassage' == $relationName) {
            $this->initCommonTCAOOrdreDePassages();
        }
        if ('CommonTCAOSeance' == $relationName) {
            $this->initCommonTCAOSeances();
        }
    }

    /**
     * Clears out the collCommonTCAOCommissionAgents collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCAOCommission The current object (for fluent API support)
     * @see        addCommonTCAOCommissionAgents()
     */
    public function clearCommonTCAOCommissionAgents()
    {
        $this->collCommonTCAOCommissionAgents = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOCommissionAgentsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOCommissionAgents collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOCommissionAgents($v = true)
    {
        $this->collCommonTCAOCommissionAgentsPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOCommissionAgents collection.
     *
     * By default this just sets the collCommonTCAOCommissionAgents collection to an empty array (like clearcollCommonTCAOCommissionAgents());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOCommissionAgents($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOCommissionAgents && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOCommissionAgents = new PropelObjectCollection();
        $this->collCommonTCAOCommissionAgents->setModel('CommonTCAOCommissionAgent');
    }

    /**
     * Gets an array of CommonTCAOCommissionAgent objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCAOCommission is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOCommissionAgent[] List of CommonTCAOCommissionAgent objects
     * @throws PropelException
     */
    public function getCommonTCAOCommissionAgents($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOCommissionAgentsPartial && !$this->isNew();
        if (null === $this->collCommonTCAOCommissionAgents || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOCommissionAgents) {
                // return empty collection
                $this->initCommonTCAOCommissionAgents();
            } else {
                $collCommonTCAOCommissionAgents = CommonTCAOCommissionAgentQuery::create(null, $criteria)
                    ->filterByCommonTCAOCommission($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOCommissionAgentsPartial && count($collCommonTCAOCommissionAgents)) {
                      $this->initCommonTCAOCommissionAgents(false);

                      foreach ($collCommonTCAOCommissionAgents as $obj) {
                        if (false == $this->collCommonTCAOCommissionAgents->contains($obj)) {
                          $this->collCommonTCAOCommissionAgents->append($obj);
                        }
                      }

                      $this->collCommonTCAOCommissionAgentsPartial = true;
                    }

                    $collCommonTCAOCommissionAgents->getInternalIterator()->rewind();

                    return $collCommonTCAOCommissionAgents;
                }

                if ($partial && $this->collCommonTCAOCommissionAgents) {
                    foreach ($this->collCommonTCAOCommissionAgents as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOCommissionAgents[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOCommissionAgents = $collCommonTCAOCommissionAgents;
                $this->collCommonTCAOCommissionAgentsPartial = false;
            }
        }

        return $this->collCommonTCAOCommissionAgents;
    }

    /**
     * Sets a collection of CommonTCAOCommissionAgent objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOCommissionAgents A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function setCommonTCAOCommissionAgents(PropelCollection $commonTCAOCommissionAgents, PropelPDO $con = null)
    {
        $commonTCAOCommissionAgentsToDelete = $this->getCommonTCAOCommissionAgents(new Criteria(), $con)->diff($commonTCAOCommissionAgents);


        $this->commonTCAOCommissionAgentsScheduledForDeletion = $commonTCAOCommissionAgentsToDelete;

        foreach ($commonTCAOCommissionAgentsToDelete as $commonTCAOCommissionAgentRemoved) {
            $commonTCAOCommissionAgentRemoved->setCommonTCAOCommission(null);
        }

        $this->collCommonTCAOCommissionAgents = null;
        foreach ($commonTCAOCommissionAgents as $commonTCAOCommissionAgent) {
            $this->addCommonTCAOCommissionAgent($commonTCAOCommissionAgent);
        }

        $this->collCommonTCAOCommissionAgents = $commonTCAOCommissionAgents;
        $this->collCommonTCAOCommissionAgentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOCommissionAgent objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOCommissionAgent objects.
     * @throws PropelException
     */
    public function countCommonTCAOCommissionAgents(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOCommissionAgentsPartial && !$this->isNew();
        if (null === $this->collCommonTCAOCommissionAgents || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOCommissionAgents) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOCommissionAgents());
            }
            $query = CommonTCAOCommissionAgentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCAOCommission($this)
                ->count($con);
        }

        return count($this->collCommonTCAOCommissionAgents);
    }

    /**
     * Method called to associate a CommonTCAOCommissionAgent object to this object
     * through the CommonTCAOCommissionAgent foreign key attribute.
     *
     * @param   CommonTCAOCommissionAgent $l CommonTCAOCommissionAgent
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function addCommonTCAOCommissionAgent(CommonTCAOCommissionAgent $l)
    {
        if ($this->collCommonTCAOCommissionAgents === null) {
            $this->initCommonTCAOCommissionAgents();
            $this->collCommonTCAOCommissionAgentsPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOCommissionAgents->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOCommissionAgent($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOCommissionAgent $commonTCAOCommissionAgent The commonTCAOCommissionAgent object to add.
     */
    protected function doAddCommonTCAOCommissionAgent($commonTCAOCommissionAgent)
    {
        $this->collCommonTCAOCommissionAgents[]= $commonTCAOCommissionAgent;
        $commonTCAOCommissionAgent->setCommonTCAOCommission($this);
    }

    /**
     * @param	CommonTCAOCommissionAgent $commonTCAOCommissionAgent The commonTCAOCommissionAgent object to remove.
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function removeCommonTCAOCommissionAgent($commonTCAOCommissionAgent)
    {
        if ($this->getCommonTCAOCommissionAgents()->contains($commonTCAOCommissionAgent)) {
            $this->collCommonTCAOCommissionAgents->remove($this->collCommonTCAOCommissionAgents->search($commonTCAOCommissionAgent));
            if (null === $this->commonTCAOCommissionAgentsScheduledForDeletion) {
                $this->commonTCAOCommissionAgentsScheduledForDeletion = clone $this->collCommonTCAOCommissionAgents;
                $this->commonTCAOCommissionAgentsScheduledForDeletion->clear();
            }
            $this->commonTCAOCommissionAgentsScheduledForDeletion[]= clone $commonTCAOCommissionAgent;
            $commonTCAOCommissionAgent->setCommonTCAOCommission(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommission is new, it will return
     * an empty collection; or if this CommonTCAOCommission has previously
     * been saved, it will retrieve related CommonTCAOCommissionAgents from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommission.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOCommissionAgent[] List of CommonTCAOCommissionAgent objects
     */
    public function getCommonTCAOCommissionAgentsJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOCommissionAgentQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonTCAOCommissionAgents($query, $con);
    }

    /**
     * Clears out the collCommonTCAOCommissionConsultations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCAOCommission The current object (for fluent API support)
     * @see        addCommonTCAOCommissionConsultations()
     */
    public function clearCommonTCAOCommissionConsultations()
    {
        $this->collCommonTCAOCommissionConsultations = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOCommissionConsultationsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOCommissionConsultations collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOCommissionConsultations($v = true)
    {
        $this->collCommonTCAOCommissionConsultationsPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOCommissionConsultations collection.
     *
     * By default this just sets the collCommonTCAOCommissionConsultations collection to an empty array (like clearcollCommonTCAOCommissionConsultations());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOCommissionConsultations($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOCommissionConsultations && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOCommissionConsultations = new PropelObjectCollection();
        $this->collCommonTCAOCommissionConsultations->setModel('CommonTCAOCommissionConsultation');
    }

    /**
     * Gets an array of CommonTCAOCommissionConsultation objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCAOCommission is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOCommissionConsultation[] List of CommonTCAOCommissionConsultation objects
     * @throws PropelException
     */
    public function getCommonTCAOCommissionConsultations($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOCommissionConsultationsPartial && !$this->isNew();
        if (null === $this->collCommonTCAOCommissionConsultations || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOCommissionConsultations) {
                // return empty collection
                $this->initCommonTCAOCommissionConsultations();
            } else {
                $collCommonTCAOCommissionConsultations = CommonTCAOCommissionConsultationQuery::create(null, $criteria)
                    ->filterByCommonTCAOCommission($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOCommissionConsultationsPartial && count($collCommonTCAOCommissionConsultations)) {
                      $this->initCommonTCAOCommissionConsultations(false);

                      foreach ($collCommonTCAOCommissionConsultations as $obj) {
                        if (false == $this->collCommonTCAOCommissionConsultations->contains($obj)) {
                          $this->collCommonTCAOCommissionConsultations->append($obj);
                        }
                      }

                      $this->collCommonTCAOCommissionConsultationsPartial = true;
                    }

                    $collCommonTCAOCommissionConsultations->getInternalIterator()->rewind();

                    return $collCommonTCAOCommissionConsultations;
                }

                if ($partial && $this->collCommonTCAOCommissionConsultations) {
                    foreach ($this->collCommonTCAOCommissionConsultations as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOCommissionConsultations[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOCommissionConsultations = $collCommonTCAOCommissionConsultations;
                $this->collCommonTCAOCommissionConsultationsPartial = false;
            }
        }

        return $this->collCommonTCAOCommissionConsultations;
    }

    /**
     * Sets a collection of CommonTCAOCommissionConsultation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOCommissionConsultations A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function setCommonTCAOCommissionConsultations(PropelCollection $commonTCAOCommissionConsultations, PropelPDO $con = null)
    {
        $commonTCAOCommissionConsultationsToDelete = $this->getCommonTCAOCommissionConsultations(new Criteria(), $con)->diff($commonTCAOCommissionConsultations);


        $this->commonTCAOCommissionConsultationsScheduledForDeletion = $commonTCAOCommissionConsultationsToDelete;

        foreach ($commonTCAOCommissionConsultationsToDelete as $commonTCAOCommissionConsultationRemoved) {
            $commonTCAOCommissionConsultationRemoved->setCommonTCAOCommission(null);
        }

        $this->collCommonTCAOCommissionConsultations = null;
        foreach ($commonTCAOCommissionConsultations as $commonTCAOCommissionConsultation) {
            $this->addCommonTCAOCommissionConsultation($commonTCAOCommissionConsultation);
        }

        $this->collCommonTCAOCommissionConsultations = $commonTCAOCommissionConsultations;
        $this->collCommonTCAOCommissionConsultationsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOCommissionConsultation objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOCommissionConsultation objects.
     * @throws PropelException
     */
    public function countCommonTCAOCommissionConsultations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOCommissionConsultationsPartial && !$this->isNew();
        if (null === $this->collCommonTCAOCommissionConsultations || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOCommissionConsultations) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOCommissionConsultations());
            }
            $query = CommonTCAOCommissionConsultationQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCAOCommission($this)
                ->count($con);
        }

        return count($this->collCommonTCAOCommissionConsultations);
    }

    /**
     * Method called to associate a CommonTCAOCommissionConsultation object to this object
     * through the CommonTCAOCommissionConsultation foreign key attribute.
     *
     * @param   CommonTCAOCommissionConsultation $l CommonTCAOCommissionConsultation
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function addCommonTCAOCommissionConsultation(CommonTCAOCommissionConsultation $l)
    {
        if ($this->collCommonTCAOCommissionConsultations === null) {
            $this->initCommonTCAOCommissionConsultations();
            $this->collCommonTCAOCommissionConsultationsPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOCommissionConsultations->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOCommissionConsultation($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOCommissionConsultation $commonTCAOCommissionConsultation The commonTCAOCommissionConsultation object to add.
     */
    protected function doAddCommonTCAOCommissionConsultation($commonTCAOCommissionConsultation)
    {
        $this->collCommonTCAOCommissionConsultations[]= $commonTCAOCommissionConsultation;
        $commonTCAOCommissionConsultation->setCommonTCAOCommission($this);
    }

    /**
     * @param	CommonTCAOCommissionConsultation $commonTCAOCommissionConsultation The commonTCAOCommissionConsultation object to remove.
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function removeCommonTCAOCommissionConsultation($commonTCAOCommissionConsultation)
    {
        if ($this->getCommonTCAOCommissionConsultations()->contains($commonTCAOCommissionConsultation)) {
            $this->collCommonTCAOCommissionConsultations->remove($this->collCommonTCAOCommissionConsultations->search($commonTCAOCommissionConsultation));
            if (null === $this->commonTCAOCommissionConsultationsScheduledForDeletion) {
                $this->commonTCAOCommissionConsultationsScheduledForDeletion = clone $this->collCommonTCAOCommissionConsultations;
                $this->commonTCAOCommissionConsultationsScheduledForDeletion->clear();
            }
            $this->commonTCAOCommissionConsultationsScheduledForDeletion[]= clone $commonTCAOCommissionConsultation;
            $commonTCAOCommissionConsultation->setCommonTCAOCommission(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommission is new, it will return
     * an empty collection; or if this CommonTCAOCommission has previously
     * been saved, it will retrieve related CommonTCAOCommissionConsultations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommission.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOCommissionConsultation[] List of CommonTCAOCommissionConsultation objects
     */
    public function getCommonTCAOCommissionConsultationsJoinCommonOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOCommissionConsultationQuery::create(null, $criteria);
        $query->joinWith('CommonOrganisme', $join_behavior);

        return $this->getCommonTCAOCommissionConsultations($query, $con);
    }

    /**
     * Clears out the collCommonTCAOCommissionIntervenantExternes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCAOCommission The current object (for fluent API support)
     * @see        addCommonTCAOCommissionIntervenantExternes()
     */
    public function clearCommonTCAOCommissionIntervenantExternes()
    {
        $this->collCommonTCAOCommissionIntervenantExternes = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOCommissionIntervenantExternesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOCommissionIntervenantExternes collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOCommissionIntervenantExternes($v = true)
    {
        $this->collCommonTCAOCommissionIntervenantExternesPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOCommissionIntervenantExternes collection.
     *
     * By default this just sets the collCommonTCAOCommissionIntervenantExternes collection to an empty array (like clearcollCommonTCAOCommissionIntervenantExternes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOCommissionIntervenantExternes($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOCommissionIntervenantExternes && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOCommissionIntervenantExternes = new PropelObjectCollection();
        $this->collCommonTCAOCommissionIntervenantExternes->setModel('CommonTCAOCommissionIntervenantExterne');
    }

    /**
     * Gets an array of CommonTCAOCommissionIntervenantExterne objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCAOCommission is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOCommissionIntervenantExterne[] List of CommonTCAOCommissionIntervenantExterne objects
     * @throws PropelException
     */
    public function getCommonTCAOCommissionIntervenantExternes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOCommissionIntervenantExternesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOCommissionIntervenantExternes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOCommissionIntervenantExternes) {
                // return empty collection
                $this->initCommonTCAOCommissionIntervenantExternes();
            } else {
                $collCommonTCAOCommissionIntervenantExternes = CommonTCAOCommissionIntervenantExterneQuery::create(null, $criteria)
                    ->filterByCommonTCAOCommission($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOCommissionIntervenantExternesPartial && count($collCommonTCAOCommissionIntervenantExternes)) {
                      $this->initCommonTCAOCommissionIntervenantExternes(false);

                      foreach ($collCommonTCAOCommissionIntervenantExternes as $obj) {
                        if (false == $this->collCommonTCAOCommissionIntervenantExternes->contains($obj)) {
                          $this->collCommonTCAOCommissionIntervenantExternes->append($obj);
                        }
                      }

                      $this->collCommonTCAOCommissionIntervenantExternesPartial = true;
                    }

                    $collCommonTCAOCommissionIntervenantExternes->getInternalIterator()->rewind();

                    return $collCommonTCAOCommissionIntervenantExternes;
                }

                if ($partial && $this->collCommonTCAOCommissionIntervenantExternes) {
                    foreach ($this->collCommonTCAOCommissionIntervenantExternes as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOCommissionIntervenantExternes[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOCommissionIntervenantExternes = $collCommonTCAOCommissionIntervenantExternes;
                $this->collCommonTCAOCommissionIntervenantExternesPartial = false;
            }
        }

        return $this->collCommonTCAOCommissionIntervenantExternes;
    }

    /**
     * Sets a collection of CommonTCAOCommissionIntervenantExterne objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOCommissionIntervenantExternes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function setCommonTCAOCommissionIntervenantExternes(PropelCollection $commonTCAOCommissionIntervenantExternes, PropelPDO $con = null)
    {
        $commonTCAOCommissionIntervenantExternesToDelete = $this->getCommonTCAOCommissionIntervenantExternes(new Criteria(), $con)->diff($commonTCAOCommissionIntervenantExternes);


        $this->commonTCAOCommissionIntervenantExternesScheduledForDeletion = $commonTCAOCommissionIntervenantExternesToDelete;

        foreach ($commonTCAOCommissionIntervenantExternesToDelete as $commonTCAOCommissionIntervenantExterneRemoved) {
            $commonTCAOCommissionIntervenantExterneRemoved->setCommonTCAOCommission(null);
        }

        $this->collCommonTCAOCommissionIntervenantExternes = null;
        foreach ($commonTCAOCommissionIntervenantExternes as $commonTCAOCommissionIntervenantExterne) {
            $this->addCommonTCAOCommissionIntervenantExterne($commonTCAOCommissionIntervenantExterne);
        }

        $this->collCommonTCAOCommissionIntervenantExternes = $commonTCAOCommissionIntervenantExternes;
        $this->collCommonTCAOCommissionIntervenantExternesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOCommissionIntervenantExterne objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOCommissionIntervenantExterne objects.
     * @throws PropelException
     */
    public function countCommonTCAOCommissionIntervenantExternes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOCommissionIntervenantExternesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOCommissionIntervenantExternes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOCommissionIntervenantExternes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOCommissionIntervenantExternes());
            }
            $query = CommonTCAOCommissionIntervenantExterneQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCAOCommission($this)
                ->count($con);
        }

        return count($this->collCommonTCAOCommissionIntervenantExternes);
    }

    /**
     * Method called to associate a CommonTCAOCommissionIntervenantExterne object to this object
     * through the CommonTCAOCommissionIntervenantExterne foreign key attribute.
     *
     * @param   CommonTCAOCommissionIntervenantExterne $l CommonTCAOCommissionIntervenantExterne
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function addCommonTCAOCommissionIntervenantExterne(CommonTCAOCommissionIntervenantExterne $l)
    {
        if ($this->collCommonTCAOCommissionIntervenantExternes === null) {
            $this->initCommonTCAOCommissionIntervenantExternes();
            $this->collCommonTCAOCommissionIntervenantExternesPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOCommissionIntervenantExternes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOCommissionIntervenantExterne($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOCommissionIntervenantExterne $commonTCAOCommissionIntervenantExterne The commonTCAOCommissionIntervenantExterne object to add.
     */
    protected function doAddCommonTCAOCommissionIntervenantExterne($commonTCAOCommissionIntervenantExterne)
    {
        $this->collCommonTCAOCommissionIntervenantExternes[]= $commonTCAOCommissionIntervenantExterne;
        $commonTCAOCommissionIntervenantExterne->setCommonTCAOCommission($this);
    }

    /**
     * @param	CommonTCAOCommissionIntervenantExterne $commonTCAOCommissionIntervenantExterne The commonTCAOCommissionIntervenantExterne object to remove.
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function removeCommonTCAOCommissionIntervenantExterne($commonTCAOCommissionIntervenantExterne)
    {
        if ($this->getCommonTCAOCommissionIntervenantExternes()->contains($commonTCAOCommissionIntervenantExterne)) {
            $this->collCommonTCAOCommissionIntervenantExternes->remove($this->collCommonTCAOCommissionIntervenantExternes->search($commonTCAOCommissionIntervenantExterne));
            if (null === $this->commonTCAOCommissionIntervenantExternesScheduledForDeletion) {
                $this->commonTCAOCommissionIntervenantExternesScheduledForDeletion = clone $this->collCommonTCAOCommissionIntervenantExternes;
                $this->commonTCAOCommissionIntervenantExternesScheduledForDeletion->clear();
            }
            $this->commonTCAOCommissionIntervenantExternesScheduledForDeletion[]= clone $commonTCAOCommissionIntervenantExterne;
            $commonTCAOCommissionIntervenantExterne->setCommonTCAOCommission(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommission is new, it will return
     * an empty collection; or if this CommonTCAOCommission has previously
     * been saved, it will retrieve related CommonTCAOCommissionIntervenantExternes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommission.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOCommissionIntervenantExterne[] List of CommonTCAOCommissionIntervenantExterne objects
     */
    public function getCommonTCAOCommissionIntervenantExternesJoinCommonTCAOIntervenantExterne($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOCommissionIntervenantExterneQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOIntervenantExterne', $join_behavior);

        return $this->getCommonTCAOCommissionIntervenantExternes($query, $con);
    }

    /**
     * Clears out the collCommonTCAOOrdreDePassages collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCAOCommission The current object (for fluent API support)
     * @see        addCommonTCAOOrdreDePassages()
     */
    public function clearCommonTCAOOrdreDePassages()
    {
        $this->collCommonTCAOOrdreDePassages = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOOrdreDePassagesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOOrdreDePassages collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOOrdreDePassages($v = true)
    {
        $this->collCommonTCAOOrdreDePassagesPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOOrdreDePassages collection.
     *
     * By default this just sets the collCommonTCAOOrdreDePassages collection to an empty array (like clearcollCommonTCAOOrdreDePassages());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOOrdreDePassages($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOOrdreDePassages && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOOrdreDePassages = new PropelObjectCollection();
        $this->collCommonTCAOOrdreDePassages->setModel('CommonTCAOOrdreDePassage');
    }

    /**
     * Gets an array of CommonTCAOOrdreDePassage objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCAOCommission is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     * @throws PropelException
     */
    public function getCommonTCAOOrdreDePassages($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOOrdreDePassagesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOOrdreDePassages || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOOrdreDePassages) {
                // return empty collection
                $this->initCommonTCAOOrdreDePassages();
            } else {
                $collCommonTCAOOrdreDePassages = CommonTCAOOrdreDePassageQuery::create(null, $criteria)
                    ->filterByCommonTCAOCommission($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOOrdreDePassagesPartial && count($collCommonTCAOOrdreDePassages)) {
                      $this->initCommonTCAOOrdreDePassages(false);

                      foreach ($collCommonTCAOOrdreDePassages as $obj) {
                        if (false == $this->collCommonTCAOOrdreDePassages->contains($obj)) {
                          $this->collCommonTCAOOrdreDePassages->append($obj);
                        }
                      }

                      $this->collCommonTCAOOrdreDePassagesPartial = true;
                    }

                    $collCommonTCAOOrdreDePassages->getInternalIterator()->rewind();

                    return $collCommonTCAOOrdreDePassages;
                }

                if ($partial && $this->collCommonTCAOOrdreDePassages) {
                    foreach ($this->collCommonTCAOOrdreDePassages as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOOrdreDePassages[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOOrdreDePassages = $collCommonTCAOOrdreDePassages;
                $this->collCommonTCAOOrdreDePassagesPartial = false;
            }
        }

        return $this->collCommonTCAOOrdreDePassages;
    }

    /**
     * Sets a collection of CommonTCAOOrdreDePassage objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOOrdreDePassages A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function setCommonTCAOOrdreDePassages(PropelCollection $commonTCAOOrdreDePassages, PropelPDO $con = null)
    {
        $commonTCAOOrdreDePassagesToDelete = $this->getCommonTCAOOrdreDePassages(new Criteria(), $con)->diff($commonTCAOOrdreDePassages);


        $this->commonTCAOOrdreDePassagesScheduledForDeletion = $commonTCAOOrdreDePassagesToDelete;

        foreach ($commonTCAOOrdreDePassagesToDelete as $commonTCAOOrdreDePassageRemoved) {
            $commonTCAOOrdreDePassageRemoved->setCommonTCAOCommission(null);
        }

        $this->collCommonTCAOOrdreDePassages = null;
        foreach ($commonTCAOOrdreDePassages as $commonTCAOOrdreDePassage) {
            $this->addCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage);
        }

        $this->collCommonTCAOOrdreDePassages = $commonTCAOOrdreDePassages;
        $this->collCommonTCAOOrdreDePassagesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOOrdreDePassage objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOOrdreDePassage objects.
     * @throws PropelException
     */
    public function countCommonTCAOOrdreDePassages(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOOrdreDePassagesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOOrdreDePassages || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOOrdreDePassages) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOOrdreDePassages());
            }
            $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCAOCommission($this)
                ->count($con);
        }

        return count($this->collCommonTCAOOrdreDePassages);
    }

    /**
     * Method called to associate a CommonTCAOOrdreDePassage object to this object
     * through the CommonTCAOOrdreDePassage foreign key attribute.
     *
     * @param   CommonTCAOOrdreDePassage $l CommonTCAOOrdreDePassage
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function addCommonTCAOOrdreDePassage(CommonTCAOOrdreDePassage $l)
    {
        if ($this->collCommonTCAOOrdreDePassages === null) {
            $this->initCommonTCAOOrdreDePassages();
            $this->collCommonTCAOOrdreDePassagesPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOOrdreDePassages->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOOrdreDePassage($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOOrdreDePassage $commonTCAOOrdreDePassage The commonTCAOOrdreDePassage object to add.
     */
    protected function doAddCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage)
    {
        $this->collCommonTCAOOrdreDePassages[]= $commonTCAOOrdreDePassage;
        $commonTCAOOrdreDePassage->setCommonTCAOCommission($this);
    }

    /**
     * @param	CommonTCAOOrdreDePassage $commonTCAOOrdreDePassage The commonTCAOOrdreDePassage object to remove.
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function removeCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage)
    {
        if ($this->getCommonTCAOOrdreDePassages()->contains($commonTCAOOrdreDePassage)) {
            $this->collCommonTCAOOrdreDePassages->remove($this->collCommonTCAOOrdreDePassages->search($commonTCAOOrdreDePassage));
            if (null === $this->commonTCAOOrdreDePassagesScheduledForDeletion) {
                $this->commonTCAOOrdreDePassagesScheduledForDeletion = clone $this->collCommonTCAOOrdreDePassages;
                $this->commonTCAOOrdreDePassagesScheduledForDeletion->clear();
            }
            $this->commonTCAOOrdreDePassagesScheduledForDeletion[]= clone $commonTCAOOrdreDePassage;
            $commonTCAOOrdreDePassage->setCommonTCAOCommission(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommission is new, it will return
     * an empty collection; or if this CommonTCAOCommission has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommission.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonTCAOSeanceRelatedByDateSeance($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOSeanceRelatedByDateSeance', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommission is new, it will return
     * an empty collection; or if this CommonTCAOCommission has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommission.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonTCAOCommissionConsultation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOCommissionConsultation', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommission is new, it will return
     * an empty collection; or if this CommonTCAOCommission has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommission.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonTCAOSeanceRelatedByIdSeance($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOSeanceRelatedByIdSeance', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommission is new, it will return
     * an empty collection; or if this CommonTCAOCommission has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommission.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonOrganisme', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }

    /**
     * Clears out the collCommonTCAOSeances collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCAOCommission The current object (for fluent API support)
     * @see        addCommonTCAOSeances()
     */
    public function clearCommonTCAOSeances()
    {
        $this->collCommonTCAOSeances = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOSeancesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOSeances collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOSeances($v = true)
    {
        $this->collCommonTCAOSeancesPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOSeances collection.
     *
     * By default this just sets the collCommonTCAOSeances collection to an empty array (like clearcollCommonTCAOSeances());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOSeances($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOSeances && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOSeances = new PropelObjectCollection();
        $this->collCommonTCAOSeances->setModel('CommonTCAOSeance');
    }

    /**
     * Gets an array of CommonTCAOSeance objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCAOCommission is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOSeance[] List of CommonTCAOSeance objects
     * @throws PropelException
     */
    public function getCommonTCAOSeances($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOSeancesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOSeances || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOSeances) {
                // return empty collection
                $this->initCommonTCAOSeances();
            } else {
                $collCommonTCAOSeances = CommonTCAOSeanceQuery::create(null, $criteria)
                    ->filterByCommonTCAOCommission($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOSeancesPartial && count($collCommonTCAOSeances)) {
                      $this->initCommonTCAOSeances(false);

                      foreach ($collCommonTCAOSeances as $obj) {
                        if (false == $this->collCommonTCAOSeances->contains($obj)) {
                          $this->collCommonTCAOSeances->append($obj);
                        }
                      }

                      $this->collCommonTCAOSeancesPartial = true;
                    }

                    $collCommonTCAOSeances->getInternalIterator()->rewind();

                    return $collCommonTCAOSeances;
                }

                if ($partial && $this->collCommonTCAOSeances) {
                    foreach ($this->collCommonTCAOSeances as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOSeances[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOSeances = $collCommonTCAOSeances;
                $this->collCommonTCAOSeancesPartial = false;
            }
        }

        return $this->collCommonTCAOSeances;
    }

    /**
     * Sets a collection of CommonTCAOSeance objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOSeances A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function setCommonTCAOSeances(PropelCollection $commonTCAOSeances, PropelPDO $con = null)
    {
        $commonTCAOSeancesToDelete = $this->getCommonTCAOSeances(new Criteria(), $con)->diff($commonTCAOSeances);


        $this->commonTCAOSeancesScheduledForDeletion = $commonTCAOSeancesToDelete;

        foreach ($commonTCAOSeancesToDelete as $commonTCAOSeanceRemoved) {
            $commonTCAOSeanceRemoved->setCommonTCAOCommission(null);
        }

        $this->collCommonTCAOSeances = null;
        foreach ($commonTCAOSeances as $commonTCAOSeance) {
            $this->addCommonTCAOSeance($commonTCAOSeance);
        }

        $this->collCommonTCAOSeances = $commonTCAOSeances;
        $this->collCommonTCAOSeancesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOSeance objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOSeance objects.
     * @throws PropelException
     */
    public function countCommonTCAOSeances(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOSeancesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOSeances || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOSeances) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOSeances());
            }
            $query = CommonTCAOSeanceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCAOCommission($this)
                ->count($con);
        }

        return count($this->collCommonTCAOSeances);
    }

    /**
     * Method called to associate a CommonTCAOSeance object to this object
     * through the CommonTCAOSeance foreign key attribute.
     *
     * @param   CommonTCAOSeance $l CommonTCAOSeance
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function addCommonTCAOSeance(CommonTCAOSeance $l)
    {
        if ($this->collCommonTCAOSeances === null) {
            $this->initCommonTCAOSeances();
            $this->collCommonTCAOSeancesPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOSeances->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOSeance($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOSeance $commonTCAOSeance The commonTCAOSeance object to add.
     */
    protected function doAddCommonTCAOSeance($commonTCAOSeance)
    {
        $this->collCommonTCAOSeances[]= $commonTCAOSeance;
        $commonTCAOSeance->setCommonTCAOCommission($this);
    }

    /**
     * @param	CommonTCAOSeance $commonTCAOSeance The commonTCAOSeance object to remove.
     * @return CommonTCAOCommission The current object (for fluent API support)
     */
    public function removeCommonTCAOSeance($commonTCAOSeance)
    {
        if ($this->getCommonTCAOSeances()->contains($commonTCAOSeance)) {
            $this->collCommonTCAOSeances->remove($this->collCommonTCAOSeances->search($commonTCAOSeance));
            if (null === $this->commonTCAOSeancesScheduledForDeletion) {
                $this->commonTCAOSeancesScheduledForDeletion = clone $this->collCommonTCAOSeances;
                $this->commonTCAOSeancesScheduledForDeletion->clear();
            }
            $this->commonTCAOSeancesScheduledForDeletion[]= clone $commonTCAOSeance;
            $commonTCAOSeance->setCommonTCAOCommission(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_commission = null;
        $this->organisme = null;
        $this->sigle = null;
        $this->intitule = null;
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
            if ($this->collCommonTCAOCommissionAgents) {
                foreach ($this->collCommonTCAOCommissionAgents as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCAOCommissionConsultations) {
                foreach ($this->collCommonTCAOCommissionConsultations as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCAOCommissionIntervenantExternes) {
                foreach ($this->collCommonTCAOCommissionIntervenantExternes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCAOOrdreDePassages) {
                foreach ($this->collCommonTCAOOrdreDePassages as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCAOSeances) {
                foreach ($this->collCommonTCAOSeances as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTCAOCommissionAgents instanceof PropelCollection) {
            $this->collCommonTCAOCommissionAgents->clearIterator();
        }
        $this->collCommonTCAOCommissionAgents = null;
        if ($this->collCommonTCAOCommissionConsultations instanceof PropelCollection) {
            $this->collCommonTCAOCommissionConsultations->clearIterator();
        }
        $this->collCommonTCAOCommissionConsultations = null;
        if ($this->collCommonTCAOCommissionIntervenantExternes instanceof PropelCollection) {
            $this->collCommonTCAOCommissionIntervenantExternes->clearIterator();
        }
        $this->collCommonTCAOCommissionIntervenantExternes = null;
        if ($this->collCommonTCAOOrdreDePassages instanceof PropelCollection) {
            $this->collCommonTCAOOrdreDePassages->clearIterator();
        }
        $this->collCommonTCAOOrdreDePassages = null;
        if ($this->collCommonTCAOSeances instanceof PropelCollection) {
            $this->collCommonTCAOSeances->clearIterator();
        }
        $this->collCommonTCAOSeances = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTCAOCommissionPeer::DEFAULT_STRING_FORMAT);
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
