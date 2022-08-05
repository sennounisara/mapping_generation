<?php


/**
 * Base class that represents a row from the 'exec_type_contractant' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecTypeContractant extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecTypeContractantPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecTypeContractantPeer
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
     * The value for the id_type_structure field.
     * @var        int
     */
    protected $id_type_structure;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the libelle_fr field.
     * @var        string
     */
    protected $libelle_fr;

    /**
     * The value for the libelle_ar field.
     * @var        string
     */
    protected $libelle_ar;

    /**
     * The value for the libelle_en field.
     * @var        string
     */
    protected $libelle_en;

    /**
     * @var        CommonExecTypeStructure
     */
    protected $aCommonExecTypeStructure;

    /**
     * @var        PropelObjectCollection|CommonExecContractant[] Collection to store aggregation of CommonExecContractant objects.
     */
    protected $collCommonExecContractants;
    protected $collCommonExecContractantsPartial;

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
    protected $commonExecContractantsScheduledForDeletion = null;

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
     * Get the [id_type_structure] column value.
     * 
     * @return int
     */
    public function getIdTypeStructure()
    {

        return $this->id_type_structure;
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
     * Get the [libelle_fr] column value.
     * 
     * @return string
     */
    public function getLibelleFr()
    {

        return $this->libelle_fr;
    }

    /**
     * Get the [libelle_ar] column value.
     * 
     * @return string
     */
    public function getLibelleAr()
    {

        return $this->libelle_ar;
    }

    /**
     * Get the [libelle_en] column value.
     * 
     * @return string
     */
    public function getLibelleEn()
    {

        return $this->libelle_en;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecTypeContractant The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecTypeContractantPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_type_structure] column.
     * 
     * @param int $v new value
     * @return CommonExecTypeContractant The current object (for fluent API support)
     */
    public function setIdTypeStructure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_structure !== $v) {
            $this->id_type_structure = $v;
            $this->modifiedColumns[] = CommonExecTypeContractantPeer::ID_TYPE_STRUCTURE;
        }

        if ($this->aCommonExecTypeStructure !== null && $this->aCommonExecTypeStructure->getId() !== $v) {
            $this->aCommonExecTypeStructure = null;
        }


        return $this;
    } // setIdTypeStructure()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeContractant The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonExecTypeContractantPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [libelle_fr] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeContractant The current object (for fluent API support)
     */
    public function setLibelleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_fr !== $v) {
            $this->libelle_fr = $v;
            $this->modifiedColumns[] = CommonExecTypeContractantPeer::LIBELLE_FR;
        }


        return $this;
    } // setLibelleFr()

    /**
     * Set the value of [libelle_ar] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeContractant The current object (for fluent API support)
     */
    public function setLibelleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_ar !== $v) {
            $this->libelle_ar = $v;
            $this->modifiedColumns[] = CommonExecTypeContractantPeer::LIBELLE_AR;
        }


        return $this;
    } // setLibelleAr()

    /**
     * Set the value of [libelle_en] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeContractant The current object (for fluent API support)
     */
    public function setLibelleEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_en !== $v) {
            $this->libelle_en = $v;
            $this->modifiedColumns[] = CommonExecTypeContractantPeer::LIBELLE_EN;
        }


        return $this;
    } // setLibelleEn()

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
            $this->id_type_structure = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle_fr = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->libelle_ar = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->libelle_en = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = CommonExecTypeContractantPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecTypeContractant object", $e);
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

        if ($this->aCommonExecTypeStructure !== null && $this->id_type_structure !== $this->aCommonExecTypeStructure->getId()) {
            $this->aCommonExecTypeStructure = null;
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
            $con = Propel::getConnection(CommonExecTypeContractantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecTypeContractantPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonExecTypeStructure = null;
            $this->collCommonExecContractants = null;

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
            $con = Propel::getConnection(CommonExecTypeContractantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecTypeContractantQuery::create()
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
            $con = Propel::getConnection(CommonExecTypeContractantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecTypeContractantPeer::addInstanceToPool($this);
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

            if ($this->aCommonExecTypeStructure !== null) {
                if ($this->aCommonExecTypeStructure->isModified() || $this->aCommonExecTypeStructure->isNew()) {
                    $affectedRows += $this->aCommonExecTypeStructure->save($con);
                }
                $this->setCommonExecTypeStructure($this->aCommonExecTypeStructure);
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

            if ($this->commonExecContractantsScheduledForDeletion !== null) {
                if (!$this->commonExecContractantsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContractantsScheduledForDeletion as $commonExecContractant) {
                        // need to save related object because we set the relation to null
                        $commonExecContractant->save($con);
                    }
                    $this->commonExecContractantsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContractants !== null) {
                foreach ($this->collCommonExecContractants as $referrerFK) {
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

        $this->modifiedColumns[] = CommonExecTypeContractantPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecTypeContractantPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecTypeContractantPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecTypeContractantPeer::ID_TYPE_STRUCTURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_structure`';
        }
        if ($this->isColumnModified(CommonExecTypeContractantPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonExecTypeContractantPeer::LIBELLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_fr`';
        }
        if ($this->isColumnModified(CommonExecTypeContractantPeer::LIBELLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_ar`';
        }
        if ($this->isColumnModified(CommonExecTypeContractantPeer::LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_en`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_type_contractant` (%s) VALUES (%s)',
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
                    case '`id_type_structure`':						
                        $stmt->bindValue($identifier, $this->id_type_structure, PDO::PARAM_INT);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`libelle_fr`':						
                        $stmt->bindValue($identifier, $this->libelle_fr, PDO::PARAM_STR);
                        break;
                    case '`libelle_ar`':						
                        $stmt->bindValue($identifier, $this->libelle_ar, PDO::PARAM_STR);
                        break;
                    case '`libelle_en`':						
                        $stmt->bindValue($identifier, $this->libelle_en, PDO::PARAM_STR);
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

            if ($this->aCommonExecTypeStructure !== null) {
                if (!$this->aCommonExecTypeStructure->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecTypeStructure->getValidationFailures());
                }
            }


            if (($retval = CommonExecTypeContractantPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecContractants !== null) {
                    foreach ($this->collCommonExecContractants as $referrerFK) {
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
        $pos = CommonExecTypeContractantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTypeStructure();
                break;
            case 2:
                return $this->getLibelle();
                break;
            case 3:
                return $this->getLibelleFr();
                break;
            case 4:
                return $this->getLibelleAr();
                break;
            case 5:
                return $this->getLibelleEn();
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
        if (isset($alreadyDumpedObjects['CommonExecTypeContractant'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecTypeContractant'][$this->getPrimaryKey()] = true;
        $keys = CommonExecTypeContractantPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdTypeStructure(),
            $keys[2] => $this->getLibelle(),
            $keys[3] => $this->getLibelleFr(),
            $keys[4] => $this->getLibelleAr(),
            $keys[5] => $this->getLibelleEn(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonExecTypeStructure) {
                $result['CommonExecTypeStructure'] = $this->aCommonExecTypeStructure->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonExecContractants) {
                $result['CommonExecContractants'] = $this->collCommonExecContractants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecTypeContractantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTypeStructure($value);
                break;
            case 2:
                $this->setLibelle($value);
                break;
            case 3:
                $this->setLibelleFr($value);
                break;
            case 4:
                $this->setLibelleAr($value);
                break;
            case 5:
                $this->setLibelleEn($value);
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
        $keys = CommonExecTypeContractantPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdTypeStructure($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleFr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLibelleAr($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLibelleEn($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecTypeContractantPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecTypeContractantPeer::ID)) $criteria->add(CommonExecTypeContractantPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecTypeContractantPeer::ID_TYPE_STRUCTURE)) $criteria->add(CommonExecTypeContractantPeer::ID_TYPE_STRUCTURE, $this->id_type_structure);
        if ($this->isColumnModified(CommonExecTypeContractantPeer::LIBELLE)) $criteria->add(CommonExecTypeContractantPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonExecTypeContractantPeer::LIBELLE_FR)) $criteria->add(CommonExecTypeContractantPeer::LIBELLE_FR, $this->libelle_fr);
        if ($this->isColumnModified(CommonExecTypeContractantPeer::LIBELLE_AR)) $criteria->add(CommonExecTypeContractantPeer::LIBELLE_AR, $this->libelle_ar);
        if ($this->isColumnModified(CommonExecTypeContractantPeer::LIBELLE_EN)) $criteria->add(CommonExecTypeContractantPeer::LIBELLE_EN, $this->libelle_en);

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
        $criteria = new Criteria(CommonExecTypeContractantPeer::DATABASE_NAME);
        $criteria->add(CommonExecTypeContractantPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecTypeContractant (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTypeStructure($this->getIdTypeStructure());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setLibelleFr($this->getLibelleFr());
        $copyObj->setLibelleAr($this->getLibelleAr());
        $copyObj->setLibelleEn($this->getLibelleEn());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonExecContractants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContractant($relObj->copy($deepCopy));
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
     * @return CommonExecTypeContractant Clone of current object.
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
     * @return CommonExecTypeContractantPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecTypeContractantPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonExecTypeStructure object.
     *
     * @param   CommonExecTypeStructure $v
     * @return CommonExecTypeContractant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecTypeStructure(CommonExecTypeStructure $v = null)
    {
        if ($v === null) {
            $this->setIdTypeStructure(NULL);
        } else {
            $this->setIdTypeStructure($v->getId());
        }

        $this->aCommonExecTypeStructure = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecTypeStructure object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecTypeContractant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecTypeStructure object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecTypeStructure The associated CommonExecTypeStructure object.
     * @throws PropelException
     */
    public function getCommonExecTypeStructure(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecTypeStructure === null && ($this->id_type_structure !== null) && $doQuery) {
            $this->aCommonExecTypeStructure = CommonExecTypeStructureQuery::create()->findPk($this->id_type_structure, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecTypeStructure->addCommonExecTypeContractants($this);
             */
        }

        return $this->aCommonExecTypeStructure;
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
        if ('CommonExecContractant' == $relationName) {
            $this->initCommonExecContractants();
        }
    }

    /**
     * Clears out the collCommonExecContractants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecTypeContractant The current object (for fluent API support)
     * @see        addCommonExecContractants()
     */
    public function clearCommonExecContractants()
    {
        $this->collCommonExecContractants = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContractantsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContractants collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContractants($v = true)
    {
        $this->collCommonExecContractantsPartial = $v;
    }

    /**
     * Initializes the collCommonExecContractants collection.
     *
     * By default this just sets the collCommonExecContractants collection to an empty array (like clearcollCommonExecContractants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContractants($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContractants && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContractants = new PropelObjectCollection();
        $this->collCommonExecContractants->setModel('CommonExecContractant');
    }

    /**
     * Gets an array of CommonExecContractant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecTypeContractant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     * @throws PropelException
     */
    public function getCommonExecContractants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContractantsPartial && !$this->isNew();
        if (null === $this->collCommonExecContractants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContractants) {
                // return empty collection
                $this->initCommonExecContractants();
            } else {
                $collCommonExecContractants = CommonExecContractantQuery::create(null, $criteria)
                    ->filterByCommonExecTypeContractant($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContractantsPartial && count($collCommonExecContractants)) {
                      $this->initCommonExecContractants(false);

                      foreach ($collCommonExecContractants as $obj) {
                        if (false == $this->collCommonExecContractants->contains($obj)) {
                          $this->collCommonExecContractants->append($obj);
                        }
                      }

                      $this->collCommonExecContractantsPartial = true;
                    }

                    $collCommonExecContractants->getInternalIterator()->rewind();

                    return $collCommonExecContractants;
                }

                if ($partial && $this->collCommonExecContractants) {
                    foreach ($this->collCommonExecContractants as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContractants[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContractants = $collCommonExecContractants;
                $this->collCommonExecContractantsPartial = false;
            }
        }

        return $this->collCommonExecContractants;
    }

    /**
     * Sets a collection of CommonExecContractant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContractants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecTypeContractant The current object (for fluent API support)
     */
    public function setCommonExecContractants(PropelCollection $commonExecContractants, PropelPDO $con = null)
    {
        $commonExecContractantsToDelete = $this->getCommonExecContractants(new Criteria(), $con)->diff($commonExecContractants);


        $this->commonExecContractantsScheduledForDeletion = $commonExecContractantsToDelete;

        foreach ($commonExecContractantsToDelete as $commonExecContractantRemoved) {
            $commonExecContractantRemoved->setCommonExecTypeContractant(null);
        }

        $this->collCommonExecContractants = null;
        foreach ($commonExecContractants as $commonExecContractant) {
            $this->addCommonExecContractant($commonExecContractant);
        }

        $this->collCommonExecContractants = $commonExecContractants;
        $this->collCommonExecContractantsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContractant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContractant objects.
     * @throws PropelException
     */
    public function countCommonExecContractants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContractantsPartial && !$this->isNew();
        if (null === $this->collCommonExecContractants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContractants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContractants());
            }
            $query = CommonExecContractantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecTypeContractant($this)
                ->count($con);
        }

        return count($this->collCommonExecContractants);
    }

    /**
     * Method called to associate a CommonExecContractant object to this object
     * through the CommonExecContractant foreign key attribute.
     *
     * @param   CommonExecContractant $l CommonExecContractant
     * @return CommonExecTypeContractant The current object (for fluent API support)
     */
    public function addCommonExecContractant(CommonExecContractant $l)
    {
        if ($this->collCommonExecContractants === null) {
            $this->initCommonExecContractants();
            $this->collCommonExecContractantsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContractants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContractant($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContractant $commonExecContractant The commonExecContractant object to add.
     */
    protected function doAddCommonExecContractant($commonExecContractant)
    {
        $this->collCommonExecContractants[]= $commonExecContractant;
        $commonExecContractant->setCommonExecTypeContractant($this);
    }

    /**
     * @param	CommonExecContractant $commonExecContractant The commonExecContractant object to remove.
     * @return CommonExecTypeContractant The current object (for fluent API support)
     */
    public function removeCommonExecContractant($commonExecContractant)
    {
        if ($this->getCommonExecContractants()->contains($commonExecContractant)) {
            $this->collCommonExecContractants->remove($this->collCommonExecContractants->search($commonExecContractant));
            if (null === $this->commonExecContractantsScheduledForDeletion) {
                $this->commonExecContractantsScheduledForDeletion = clone $this->collCommonExecContractants;
                $this->commonExecContractantsScheduledForDeletion->clear();
            }
            $this->commonExecContractantsScheduledForDeletion[]= clone $commonExecContractant;
            $commonExecContractant->setCommonExecTypeContractant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecTypeContractant is new, it will return
     * an empty collection; or if this CommonExecTypeContractant has previously
     * been saved, it will retrieve related CommonExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecTypeContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecContractants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecTypeContractant is new, it will return
     * an empty collection; or if this CommonExecTypeContractant has previously
     * been saved, it will retrieve related CommonExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecTypeContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsJoinCommonExecContractantRelatedByIdParent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractantRelatedByIdParent', $join_behavior);

        return $this->getCommonExecContractants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecTypeContractant is new, it will return
     * an empty collection; or if this CommonExecTypeContractant has previously
     * been saved, it will retrieve related CommonExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecTypeContractant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsJoinCommonExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeStructure', $join_behavior);

        return $this->getCommonExecContractants($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_type_structure = null;
        $this->libelle = null;
        $this->libelle_fr = null;
        $this->libelle_ar = null;
        $this->libelle_en = null;
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
            if ($this->collCommonExecContractants) {
                foreach ($this->collCommonExecContractants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonExecTypeStructure instanceof Persistent) {
              $this->aCommonExecTypeStructure->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecContractants instanceof PropelCollection) {
            $this->collCommonExecContractants->clearIterator();
        }
        $this->collCommonExecContractants = null;
        $this->aCommonExecTypeStructure = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecTypeContractantPeer::DEFAULT_STRING_FORMAT);
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
