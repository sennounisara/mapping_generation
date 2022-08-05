<?php


/**
 * Base class that represents a row from the 'type_facture' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTypeFacture extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTypeFacturePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTypeFacturePeer
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
     * The value for the is_locale field.
     * @var        boolean
     */
    protected $is_locale;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * @var        PropelObjectCollection|CommonFacture[] Collection to store aggregation of CommonFacture objects.
     */
    protected $collCommonFactures;
    protected $collCommonFacturesPartial;

    /**
     * @var        PropelObjectCollection|CommonSousTypeFacture[] Collection to store aggregation of CommonSousTypeFacture objects.
     */
    protected $collCommonSousTypeFactures;
    protected $collCommonSousTypeFacturesPartial;

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
    protected $commonFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonSousTypeFacturesScheduledForDeletion = null;

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
     * Get the [is_locale] column value.
     * 
     * @return boolean
     */
    public function getIsLocale()
    {

        return $this->is_locale;
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonTypeFacture The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonTypeFacturePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Sets the value of the [is_locale] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonTypeFacture The current object (for fluent API support)
     */
    public function setIsLocale($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_locale !== $v) {
            $this->is_locale = $v;
            $this->modifiedColumns[] = CommonTypeFacturePeer::IS_LOCALE;
        }


        return $this;
    } // setIsLocale()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonTypeFacture The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonTypeFacturePeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

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
            $this->is_locale = ($row[$startcol + 1] !== null) ? (boolean) $row[$startcol + 1] : null;
            $this->libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 3; // 3 = CommonTypeFacturePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTypeFacture object", $e);
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
            $con = Propel::getConnection(CommonTypeFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTypeFacturePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonFactures = null;

            $this->collCommonSousTypeFactures = null;

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
            $con = Propel::getConnection(CommonTypeFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTypeFactureQuery::create()
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
            $con = Propel::getConnection(CommonTypeFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTypeFacturePeer::addInstanceToPool($this);
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

            if ($this->commonFacturesScheduledForDeletion !== null) {
                if (!$this->commonFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonFacturesScheduledForDeletion as $commonFacture) {
                        // need to save related object because we set the relation to null
                        $commonFacture->save($con);
                    }
                    $this->commonFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonFactures !== null) {
                foreach ($this->collCommonFactures as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonSousTypeFacturesScheduledForDeletion !== null) {
                if (!$this->commonSousTypeFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonSousTypeFacturesScheduledForDeletion as $commonSousTypeFacture) {
                        // need to save related object because we set the relation to null
                        $commonSousTypeFacture->save($con);
                    }
                    $this->commonSousTypeFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonSousTypeFactures !== null) {
                foreach ($this->collCommonSousTypeFactures as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTypeFacturePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTypeFacturePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTypeFacturePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonTypeFacturePeer::IS_LOCALE)) {
            $modifiedColumns[':p' . $index++]  = '`is_locale`';
        }
        if ($this->isColumnModified(CommonTypeFacturePeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }

        $sql = sprintf(
            'INSERT INTO `type_facture` (%s) VALUES (%s)',
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
                    case '`is_locale`':
                        $stmt->bindValue($identifier, (int) $this->is_locale, PDO::PARAM_INT);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
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


            if (($retval = CommonTypeFacturePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonFactures !== null) {
                    foreach ($this->collCommonFactures as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonSousTypeFactures !== null) {
                    foreach ($this->collCommonSousTypeFactures as $referrerFK) {
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
        $pos = CommonTypeFacturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIsLocale();
                break;
            case 2:
                return $this->getLibelle();
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
        if (isset($alreadyDumpedObjects['CommonTypeFacture'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTypeFacture'][$this->getPrimaryKey()] = true;
        $keys = CommonTypeFacturePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIsLocale(),
            $keys[2] => $this->getLibelle(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonFactures) {
                $result['CommonFactures'] = $this->collCommonFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonSousTypeFactures) {
                $result['CommonSousTypeFactures'] = $this->collCommonSousTypeFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTypeFacturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIsLocale($value);
                break;
            case 2:
                $this->setLibelle($value);
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
        $keys = CommonTypeFacturePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIsLocale($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelle($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTypeFacturePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTypeFacturePeer::ID)) $criteria->add(CommonTypeFacturePeer::ID, $this->id);
        if ($this->isColumnModified(CommonTypeFacturePeer::IS_LOCALE)) $criteria->add(CommonTypeFacturePeer::IS_LOCALE, $this->is_locale);
        if ($this->isColumnModified(CommonTypeFacturePeer::LIBELLE)) $criteria->add(CommonTypeFacturePeer::LIBELLE, $this->libelle);

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
        $criteria = new Criteria(CommonTypeFacturePeer::DATABASE_NAME);
        $criteria->add(CommonTypeFacturePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonTypeFacture (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIsLocale($this->getIsLocale());
        $copyObj->setLibelle($this->getLibelle());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonFacture($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonSousTypeFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonSousTypeFacture($relObj->copy($deepCopy));
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
     * @return CommonTypeFacture Clone of current object.
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
     * @return CommonTypeFacturePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTypeFacturePeer();
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
        if ('CommonFacture' == $relationName) {
            $this->initCommonFactures();
        }
        if ('CommonSousTypeFacture' == $relationName) {
            $this->initCommonSousTypeFactures();
        }
    }

    /**
     * Clears out the collCommonFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTypeFacture The current object (for fluent API support)
     * @see        addCommonFactures()
     */
    public function clearCommonFactures()
    {
        $this->collCommonFactures = null; // important to set this to null since that means it is uninitialized
        $this->collCommonFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonFactures($v = true)
    {
        $this->collCommonFacturesPartial = $v;
    }

    /**
     * Initializes the collCommonFactures collection.
     *
     * By default this just sets the collCommonFactures collection to an empty array (like clearcollCommonFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonFactures($overrideExisting = true)
    {
        if (null !== $this->collCommonFactures && !$overrideExisting) {
            return;
        }
        $this->collCommonFactures = new PropelObjectCollection();
        $this->collCommonFactures->setModel('CommonFacture');
    }

    /**
     * Gets an array of CommonFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTypeFacture is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonFacture[] List of CommonFacture objects
     * @throws PropelException
     */
    public function getCommonFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonFacturesPartial && !$this->isNew();
        if (null === $this->collCommonFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonFactures) {
                // return empty collection
                $this->initCommonFactures();
            } else {
                $collCommonFactures = CommonFactureQuery::create(null, $criteria)
                    ->filterByCommonTypeFacture($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonFacturesPartial && count($collCommonFactures)) {
                      $this->initCommonFactures(false);

                      foreach ($collCommonFactures as $obj) {
                        if (false == $this->collCommonFactures->contains($obj)) {
                          $this->collCommonFactures->append($obj);
                        }
                      }

                      $this->collCommonFacturesPartial = true;
                    }

                    $collCommonFactures->getInternalIterator()->rewind();

                    return $collCommonFactures;
                }

                if ($partial && $this->collCommonFactures) {
                    foreach ($this->collCommonFactures as $obj) {
                        if ($obj->isNew()) {
                            $collCommonFactures[] = $obj;
                        }
                    }
                }

                $this->collCommonFactures = $collCommonFactures;
                $this->collCommonFacturesPartial = false;
            }
        }

        return $this->collCommonFactures;
    }

    /**
     * Sets a collection of CommonFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTypeFacture The current object (for fluent API support)
     */
    public function setCommonFactures(PropelCollection $commonFactures, PropelPDO $con = null)
    {
        $commonFacturesToDelete = $this->getCommonFactures(new Criteria(), $con)->diff($commonFactures);


        $this->commonFacturesScheduledForDeletion = $commonFacturesToDelete;

        foreach ($commonFacturesToDelete as $commonFactureRemoved) {
            $commonFactureRemoved->setCommonTypeFacture(null);
        }

        $this->collCommonFactures = null;
        foreach ($commonFactures as $commonFacture) {
            $this->addCommonFacture($commonFacture);
        }

        $this->collCommonFactures = $commonFactures;
        $this->collCommonFacturesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonFacture objects.
     * @throws PropelException
     */
    public function countCommonFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonFacturesPartial && !$this->isNew();
        if (null === $this->collCommonFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonFactures());
            }
            $query = CommonFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTypeFacture($this)
                ->count($con);
        }

        return count($this->collCommonFactures);
    }

    /**
     * Method called to associate a CommonFacture object to this object
     * through the CommonFacture foreign key attribute.
     *
     * @param   CommonFacture $l CommonFacture
     * @return CommonTypeFacture The current object (for fluent API support)
     */
    public function addCommonFacture(CommonFacture $l)
    {
        if ($this->collCommonFactures === null) {
            $this->initCommonFactures();
            $this->collCommonFacturesPartial = true;
        }
        if (!in_array($l, $this->collCommonFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonFacture($l);
        }

        return $this;
    }

    /**
     * @param	CommonFacture $commonFacture The commonFacture object to add.
     */
    protected function doAddCommonFacture($commonFacture)
    {
        $this->collCommonFactures[]= $commonFacture;
        $commonFacture->setCommonTypeFacture($this);
    }

    /**
     * @param	CommonFacture $commonFacture The commonFacture object to remove.
     * @return CommonTypeFacture The current object (for fluent API support)
     */
    public function removeCommonFacture($commonFacture)
    {
        if ($this->getCommonFactures()->contains($commonFacture)) {
            $this->collCommonFactures->remove($this->collCommonFactures->search($commonFacture));
            if (null === $this->commonFacturesScheduledForDeletion) {
                $this->commonFacturesScheduledForDeletion = clone $this->collCommonFactures;
                $this->commonFacturesScheduledForDeletion->clear();
            }
            $this->commonFacturesScheduledForDeletion[]= clone $commonFacture;
            $commonFacture->setCommonTypeFacture(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTypeFacture is new, it will return
     * an empty collection; or if this CommonTypeFacture has previously
     * been saved, it will retrieve related CommonFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTypeFacture.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonFacture[] List of CommonFacture objects
     */
    public function getCommonFacturesJoinCommonSousTypeFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonFactureQuery::create(null, $criteria);
        $query->joinWith('CommonSousTypeFacture', $join_behavior);

        return $this->getCommonFactures($query, $con);
    }

    /**
     * Clears out the collCommonSousTypeFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTypeFacture The current object (for fluent API support)
     * @see        addCommonSousTypeFactures()
     */
    public function clearCommonSousTypeFactures()
    {
        $this->collCommonSousTypeFactures = null; // important to set this to null since that means it is uninitialized
        $this->collCommonSousTypeFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonSousTypeFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonSousTypeFactures($v = true)
    {
        $this->collCommonSousTypeFacturesPartial = $v;
    }

    /**
     * Initializes the collCommonSousTypeFactures collection.
     *
     * By default this just sets the collCommonSousTypeFactures collection to an empty array (like clearcollCommonSousTypeFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonSousTypeFactures($overrideExisting = true)
    {
        if (null !== $this->collCommonSousTypeFactures && !$overrideExisting) {
            return;
        }
        $this->collCommonSousTypeFactures = new PropelObjectCollection();
        $this->collCommonSousTypeFactures->setModel('CommonSousTypeFacture');
    }

    /**
     * Gets an array of CommonSousTypeFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTypeFacture is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonSousTypeFacture[] List of CommonSousTypeFacture objects
     * @throws PropelException
     */
    public function getCommonSousTypeFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonSousTypeFacturesPartial && !$this->isNew();
        if (null === $this->collCommonSousTypeFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonSousTypeFactures) {
                // return empty collection
                $this->initCommonSousTypeFactures();
            } else {
                $collCommonSousTypeFactures = CommonSousTypeFactureQuery::create(null, $criteria)
                    ->filterByCommonTypeFacture($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonSousTypeFacturesPartial && count($collCommonSousTypeFactures)) {
                      $this->initCommonSousTypeFactures(false);

                      foreach ($collCommonSousTypeFactures as $obj) {
                        if (false == $this->collCommonSousTypeFactures->contains($obj)) {
                          $this->collCommonSousTypeFactures->append($obj);
                        }
                      }

                      $this->collCommonSousTypeFacturesPartial = true;
                    }

                    $collCommonSousTypeFactures->getInternalIterator()->rewind();

                    return $collCommonSousTypeFactures;
                }

                if ($partial && $this->collCommonSousTypeFactures) {
                    foreach ($this->collCommonSousTypeFactures as $obj) {
                        if ($obj->isNew()) {
                            $collCommonSousTypeFactures[] = $obj;
                        }
                    }
                }

                $this->collCommonSousTypeFactures = $collCommonSousTypeFactures;
                $this->collCommonSousTypeFacturesPartial = false;
            }
        }

        return $this->collCommonSousTypeFactures;
    }

    /**
     * Sets a collection of CommonSousTypeFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonSousTypeFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTypeFacture The current object (for fluent API support)
     */
    public function setCommonSousTypeFactures(PropelCollection $commonSousTypeFactures, PropelPDO $con = null)
    {
        $commonSousTypeFacturesToDelete = $this->getCommonSousTypeFactures(new Criteria(), $con)->diff($commonSousTypeFactures);


        $this->commonSousTypeFacturesScheduledForDeletion = $commonSousTypeFacturesToDelete;

        foreach ($commonSousTypeFacturesToDelete as $commonSousTypeFactureRemoved) {
            $commonSousTypeFactureRemoved->setCommonTypeFacture(null);
        }

        $this->collCommonSousTypeFactures = null;
        foreach ($commonSousTypeFactures as $commonSousTypeFacture) {
            $this->addCommonSousTypeFacture($commonSousTypeFacture);
        }

        $this->collCommonSousTypeFactures = $commonSousTypeFactures;
        $this->collCommonSousTypeFacturesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonSousTypeFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonSousTypeFacture objects.
     * @throws PropelException
     */
    public function countCommonSousTypeFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonSousTypeFacturesPartial && !$this->isNew();
        if (null === $this->collCommonSousTypeFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonSousTypeFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonSousTypeFactures());
            }
            $query = CommonSousTypeFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTypeFacture($this)
                ->count($con);
        }

        return count($this->collCommonSousTypeFactures);
    }

    /**
     * Method called to associate a CommonSousTypeFacture object to this object
     * through the CommonSousTypeFacture foreign key attribute.
     *
     * @param   CommonSousTypeFacture $l CommonSousTypeFacture
     * @return CommonTypeFacture The current object (for fluent API support)
     */
    public function addCommonSousTypeFacture(CommonSousTypeFacture $l)
    {
        if ($this->collCommonSousTypeFactures === null) {
            $this->initCommonSousTypeFactures();
            $this->collCommonSousTypeFacturesPartial = true;
        }
        if (!in_array($l, $this->collCommonSousTypeFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonSousTypeFacture($l);
        }

        return $this;
    }

    /**
     * @param	CommonSousTypeFacture $commonSousTypeFacture The commonSousTypeFacture object to add.
     */
    protected function doAddCommonSousTypeFacture($commonSousTypeFacture)
    {
        $this->collCommonSousTypeFactures[]= $commonSousTypeFacture;
        $commonSousTypeFacture->setCommonTypeFacture($this);
    }

    /**
     * @param	CommonSousTypeFacture $commonSousTypeFacture The commonSousTypeFacture object to remove.
     * @return CommonTypeFacture The current object (for fluent API support)
     */
    public function removeCommonSousTypeFacture($commonSousTypeFacture)
    {
        if ($this->getCommonSousTypeFactures()->contains($commonSousTypeFacture)) {
            $this->collCommonSousTypeFactures->remove($this->collCommonSousTypeFactures->search($commonSousTypeFacture));
            if (null === $this->commonSousTypeFacturesScheduledForDeletion) {
                $this->commonSousTypeFacturesScheduledForDeletion = clone $this->collCommonSousTypeFactures;
                $this->commonSousTypeFacturesScheduledForDeletion->clear();
            }
            $this->commonSousTypeFacturesScheduledForDeletion[]= clone $commonSousTypeFacture;
            $commonSousTypeFacture->setCommonTypeFacture(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->is_locale = null;
        $this->libelle = null;
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
            if ($this->collCommonFactures) {
                foreach ($this->collCommonFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonSousTypeFactures) {
                foreach ($this->collCommonSousTypeFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonFactures instanceof PropelCollection) {
            $this->collCommonFactures->clearIterator();
        }
        $this->collCommonFactures = null;
        if ($this->collCommonSousTypeFactures instanceof PropelCollection) {
            $this->collCommonSousTypeFactures->clearIterator();
        }
        $this->collCommonSousTypeFactures = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTypeFacturePeer::DEFAULT_STRING_FORMAT);
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
