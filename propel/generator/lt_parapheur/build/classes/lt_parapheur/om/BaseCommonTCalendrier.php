<?php


/**
 * Base class that represents a row from the 't_calendrier' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCalendrier extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCalendrierPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCalendrierPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_calendrier field.
     * @var        int
     */
    protected $id_calendrier;

    /**
     * The value for the reference field.
     * @var        int
     */
    protected $reference;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultation;

    /**
     * @var        PropelObjectCollection|CommonTCalendrierEtape[] Collection to store aggregation of CommonTCalendrierEtape objects.
     */
    protected $collCommonTCalendrierEtapes;
    protected $collCommonTCalendrierEtapesPartial;

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
    protected $commonTCalendrierEtapesScheduledForDeletion = null;

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
     * Get the [reference] column value.
     * 
     * @return int
     */
    public function getReference()
    {

        return $this->reference;
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
     * Set the value of [id_calendrier] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrier The current object (for fluent API support)
     */
    public function setIdCalendrier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_calendrier !== $v) {
            $this->id_calendrier = $v;
            $this->modifiedColumns[] = CommonTCalendrierPeer::ID_CALENDRIER;
        }


        return $this;
    } // setIdCalendrier()

    /**
     * Set the value of [reference] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrier The current object (for fluent API support)
     */
    public function setReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reference !== $v) {
            $this->reference = $v;
            $this->modifiedColumns[] = CommonTCalendrierPeer::REFERENCE;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setReference()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTCalendrier The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTCalendrierPeer::ORGANISME;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setOrganisme()

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

            $this->id_calendrier = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->reference = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->organisme = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = CommonTCalendrierPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCalendrier object", $e);
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

        if ($this->aCommonConsultation !== null && $this->reference !== $this->aCommonConsultation->getReference()) {
            $this->aCommonConsultation = null;
        }
        if ($this->aCommonConsultation !== null && $this->organisme !== $this->aCommonConsultation->getOrganisme()) {
            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonTCalendrierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCalendrierPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultation = null;
            $this->collCommonTCalendrierEtapes = null;

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
            $con = Propel::getConnection(CommonTCalendrierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCalendrierQuery::create()
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
            $con = Propel::getConnection(CommonTCalendrierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCalendrierPeer::addInstanceToPool($this);
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

            if ($this->commonTCalendrierEtapesScheduledForDeletion !== null) {
                if (!$this->commonTCalendrierEtapesScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonTCalendrierEtapeQuery::create()
                        ->filterByPrimaryKeys($this->commonTCalendrierEtapesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonTCalendrierEtapesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCalendrierEtapes !== null) {
                foreach ($this->collCommonTCalendrierEtapes as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTCalendrierPeer::ID_CALENDRIER;
        if (null !== $this->id_calendrier) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCalendrierPeer::ID_CALENDRIER . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCalendrierPeer::ID_CALENDRIER)) {
            $modifiedColumns[':p' . $index++]  = '`ID_CALENDRIER`';
        }
        if ($this->isColumnModified(CommonTCalendrierPeer::REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`REFERENCE`';
        }
        if ($this->isColumnModified(CommonTCalendrierPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`ORGANISME`';
        }

        $sql = sprintf(
            'INSERT INTO `t_calendrier` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_CALENDRIER`':						
                        $stmt->bindValue($identifier, $this->id_calendrier, PDO::PARAM_INT);
                        break;
                    case '`REFERENCE`':						
                        $stmt->bindValue($identifier, $this->reference, PDO::PARAM_INT);
                        break;
                    case '`ORGANISME`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
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
        $this->setIdCalendrier($pk);

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

            if ($this->aCommonConsultation !== null) {
                if (!$this->aCommonConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonTCalendrierPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTCalendrierEtapes !== null) {
                    foreach ($this->collCommonTCalendrierEtapes as $referrerFK) {
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
        $pos = CommonTCalendrierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdCalendrier();
                break;
            case 1:
                return $this->getReference();
                break;
            case 2:
                return $this->getOrganisme();
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
        if (isset($alreadyDumpedObjects['CommonTCalendrier'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCalendrier'][$this->getPrimaryKey()] = true;
        $keys = CommonTCalendrierPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCalendrier(),
            $keys[1] => $this->getReference(),
            $keys[2] => $this->getOrganisme(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultation) {
                $result['CommonConsultation'] = $this->aCommonConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonTCalendrierEtapes) {
                $result['CommonTCalendrierEtapes'] = $this->collCommonTCalendrierEtapes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTCalendrierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdCalendrier($value);
                break;
            case 1:
                $this->setReference($value);
                break;
            case 2:
                $this->setOrganisme($value);
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
        $keys = CommonTCalendrierPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdCalendrier($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setReference($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrganisme($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCalendrierPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCalendrierPeer::ID_CALENDRIER)) $criteria->add(CommonTCalendrierPeer::ID_CALENDRIER, $this->id_calendrier);
        if ($this->isColumnModified(CommonTCalendrierPeer::REFERENCE)) $criteria->add(CommonTCalendrierPeer::REFERENCE, $this->reference);
        if ($this->isColumnModified(CommonTCalendrierPeer::ORGANISME)) $criteria->add(CommonTCalendrierPeer::ORGANISME, $this->organisme);

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
        $criteria = new Criteria(CommonTCalendrierPeer::DATABASE_NAME);
        $criteria->add(CommonTCalendrierPeer::ID_CALENDRIER, $this->id_calendrier);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdCalendrier();
    }

    /**
     * Generic method to set the primary key (id_calendrier column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCalendrier($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdCalendrier();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTCalendrier (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setReference($this->getReference());
        $copyObj->setOrganisme($this->getOrganisme());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTCalendrierEtapes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCalendrierEtape($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCalendrier(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTCalendrier Clone of current object.
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
     * @return CommonTCalendrierPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCalendrierPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonTCalendrier The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme(NULL);
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setReference(NULL);
        } else {
            $this->setReference($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCalendrier($this);
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
        if ($this->aCommonConsultation === null && (($this->organisme !== "" && $this->organisme !== null) && $this->reference !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()->findPk(array($this->reference, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonTCalendriers($this);
             */
        }

        return $this->aCommonConsultation;
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
        if ('CommonTCalendrierEtape' == $relationName) {
            $this->initCommonTCalendrierEtapes();
        }
    }

    /**
     * Clears out the collCommonTCalendrierEtapes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCalendrier The current object (for fluent API support)
     * @see        addCommonTCalendrierEtapes()
     */
    public function clearCommonTCalendrierEtapes()
    {
        $this->collCommonTCalendrierEtapes = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCalendrierEtapesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCalendrierEtapes collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCalendrierEtapes($v = true)
    {
        $this->collCommonTCalendrierEtapesPartial = $v;
    }

    /**
     * Initializes the collCommonTCalendrierEtapes collection.
     *
     * By default this just sets the collCommonTCalendrierEtapes collection to an empty array (like clearcollCommonTCalendrierEtapes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCalendrierEtapes($overrideExisting = true)
    {
        if (null !== $this->collCommonTCalendrierEtapes && !$overrideExisting) {
            return;
        }
        $this->collCommonTCalendrierEtapes = new PropelObjectCollection();
        $this->collCommonTCalendrierEtapes->setModel('CommonTCalendrierEtape');
    }

    /**
     * Gets an array of CommonTCalendrierEtape objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCalendrier is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCalendrierEtape[] List of CommonTCalendrierEtape objects
     * @throws PropelException
     */
    public function getCommonTCalendrierEtapes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCalendrierEtapesPartial && !$this->isNew();
        if (null === $this->collCommonTCalendrierEtapes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCalendrierEtapes) {
                // return empty collection
                $this->initCommonTCalendrierEtapes();
            } else {
                $collCommonTCalendrierEtapes = CommonTCalendrierEtapeQuery::create(null, $criteria)
                    ->filterByCommonTCalendrier($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCalendrierEtapesPartial && count($collCommonTCalendrierEtapes)) {
                      $this->initCommonTCalendrierEtapes(false);

                      foreach ($collCommonTCalendrierEtapes as $obj) {
                        if (false == $this->collCommonTCalendrierEtapes->contains($obj)) {
                          $this->collCommonTCalendrierEtapes->append($obj);
                        }
                      }

                      $this->collCommonTCalendrierEtapesPartial = true;
                    }

                    $collCommonTCalendrierEtapes->getInternalIterator()->rewind();

                    return $collCommonTCalendrierEtapes;
                }

                if ($partial && $this->collCommonTCalendrierEtapes) {
                    foreach ($this->collCommonTCalendrierEtapes as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCalendrierEtapes[] = $obj;
                        }
                    }
                }

                $this->collCommonTCalendrierEtapes = $collCommonTCalendrierEtapes;
                $this->collCommonTCalendrierEtapesPartial = false;
            }
        }

        return $this->collCommonTCalendrierEtapes;
    }

    /**
     * Sets a collection of CommonTCalendrierEtape objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCalendrierEtapes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCalendrier The current object (for fluent API support)
     */
    public function setCommonTCalendrierEtapes(PropelCollection $commonTCalendrierEtapes, PropelPDO $con = null)
    {
        $commonTCalendrierEtapesToDelete = $this->getCommonTCalendrierEtapes(new Criteria(), $con)->diff($commonTCalendrierEtapes);


        $this->commonTCalendrierEtapesScheduledForDeletion = $commonTCalendrierEtapesToDelete;

        foreach ($commonTCalendrierEtapesToDelete as $commonTCalendrierEtapeRemoved) {
            $commonTCalendrierEtapeRemoved->setCommonTCalendrier(null);
        }

        $this->collCommonTCalendrierEtapes = null;
        foreach ($commonTCalendrierEtapes as $commonTCalendrierEtape) {
            $this->addCommonTCalendrierEtape($commonTCalendrierEtape);
        }

        $this->collCommonTCalendrierEtapes = $commonTCalendrierEtapes;
        $this->collCommonTCalendrierEtapesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCalendrierEtape objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCalendrierEtape objects.
     * @throws PropelException
     */
    public function countCommonTCalendrierEtapes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCalendrierEtapesPartial && !$this->isNew();
        if (null === $this->collCommonTCalendrierEtapes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCalendrierEtapes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCalendrierEtapes());
            }
            $query = CommonTCalendrierEtapeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCalendrier($this)
                ->count($con);
        }

        return count($this->collCommonTCalendrierEtapes);
    }

    /**
     * Method called to associate a CommonTCalendrierEtape object to this object
     * through the CommonTCalendrierEtape foreign key attribute.
     *
     * @param   CommonTCalendrierEtape $l CommonTCalendrierEtape
     * @return CommonTCalendrier The current object (for fluent API support)
     */
    public function addCommonTCalendrierEtape(CommonTCalendrierEtape $l)
    {
        if ($this->collCommonTCalendrierEtapes === null) {
            $this->initCommonTCalendrierEtapes();
            $this->collCommonTCalendrierEtapesPartial = true;
        }
        if (!in_array($l, $this->collCommonTCalendrierEtapes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCalendrierEtape($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCalendrierEtape $commonTCalendrierEtape The commonTCalendrierEtape object to add.
     */
    protected function doAddCommonTCalendrierEtape($commonTCalendrierEtape)
    {
        $this->collCommonTCalendrierEtapes[]= $commonTCalendrierEtape;
        $commonTCalendrierEtape->setCommonTCalendrier($this);
    }

    /**
     * @param	CommonTCalendrierEtape $commonTCalendrierEtape The commonTCalendrierEtape object to remove.
     * @return CommonTCalendrier The current object (for fluent API support)
     */
    public function removeCommonTCalendrierEtape($commonTCalendrierEtape)
    {
        if ($this->getCommonTCalendrierEtapes()->contains($commonTCalendrierEtape)) {
            $this->collCommonTCalendrierEtapes->remove($this->collCommonTCalendrierEtapes->search($commonTCalendrierEtape));
            if (null === $this->commonTCalendrierEtapesScheduledForDeletion) {
                $this->commonTCalendrierEtapesScheduledForDeletion = clone $this->collCommonTCalendrierEtapes;
                $this->commonTCalendrierEtapesScheduledForDeletion->clear();
            }
            $this->commonTCalendrierEtapesScheduledForDeletion[]= $commonTCalendrierEtape;
            $commonTCalendrierEtape->setCommonTCalendrier(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_calendrier = null;
        $this->reference = null;
        $this->organisme = null;
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
            if ($this->collCommonTCalendrierEtapes) {
                foreach ($this->collCommonTCalendrierEtapes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonConsultation instanceof Persistent) {
              $this->aCommonConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTCalendrierEtapes instanceof PropelCollection) {
            $this->collCommonTCalendrierEtapes->clearIterator();
        }
        $this->collCommonTCalendrierEtapes = null;
        $this->aCommonConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTCalendrierPeer::DEFAULT_STRING_FORMAT);
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
