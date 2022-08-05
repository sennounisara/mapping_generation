<?php


/**
 * Base class that represents a row from the 'exec_type_avenant' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecTypeAvenant extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecTypeAvenantPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecTypeAvenantPeer
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
     * The value for the id_theme field.
     * @var        int
     */
    protected $id_theme;

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
     * @var        PropelObjectCollection|CommonExecAvenant[] Collection to store aggregation of CommonExecAvenant objects.
     */
    protected $collCommonExecAvenants;
    protected $collCommonExecAvenantsPartial;

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
    protected $commonExecAvenantsScheduledForDeletion = null;

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
     * Get the [id_theme] column value.
     * 
     * @return int
     */
    public function getIdTheme()
    {

        return $this->id_theme;
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
     * @return CommonExecTypeAvenant The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecTypeAvenantPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_theme] column.
     * 
     * @param int $v new value
     * @return CommonExecTypeAvenant The current object (for fluent API support)
     */
    public function setIdTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_theme !== $v) {
            $this->id_theme = $v;
            $this->modifiedColumns[] = CommonExecTypeAvenantPeer::ID_THEME;
        }


        return $this;
    } // setIdTheme()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeAvenant The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonExecTypeAvenantPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [libelle_fr] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeAvenant The current object (for fluent API support)
     */
    public function setLibelleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_fr !== $v) {
            $this->libelle_fr = $v;
            $this->modifiedColumns[] = CommonExecTypeAvenantPeer::LIBELLE_FR;
        }


        return $this;
    } // setLibelleFr()

    /**
     * Set the value of [libelle_ar] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeAvenant The current object (for fluent API support)
     */
    public function setLibelleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_ar !== $v) {
            $this->libelle_ar = $v;
            $this->modifiedColumns[] = CommonExecTypeAvenantPeer::LIBELLE_AR;
        }


        return $this;
    } // setLibelleAr()

    /**
     * Set the value of [libelle_en] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeAvenant The current object (for fluent API support)
     */
    public function setLibelleEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_en !== $v) {
            $this->libelle_en = $v;
            $this->modifiedColumns[] = CommonExecTypeAvenantPeer::LIBELLE_EN;
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
            $this->id_theme = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
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

            return $startcol + 6; // 6 = CommonExecTypeAvenantPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecTypeAvenant object", $e);
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
            $con = Propel::getConnection(CommonExecTypeAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecTypeAvenantPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonExecAvenants = null;

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
            $con = Propel::getConnection(CommonExecTypeAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecTypeAvenantQuery::create()
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
            $con = Propel::getConnection(CommonExecTypeAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecTypeAvenantPeer::addInstanceToPool($this);
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

            if ($this->commonExecAvenantsScheduledForDeletion !== null) {
                if (!$this->commonExecAvenantsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecAvenantsScheduledForDeletion as $commonExecAvenant) {
                        // need to save related object because we set the relation to null
                        $commonExecAvenant->save($con);
                    }
                    $this->commonExecAvenantsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecAvenants !== null) {
                foreach ($this->collCommonExecAvenants as $referrerFK) {
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

        $this->modifiedColumns[] = CommonExecTypeAvenantPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecTypeAvenantPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::ID_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`id_theme`';
        }
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::LIBELLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_fr`';
        }
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::LIBELLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_ar`';
        }
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_en`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_type_avenant` (%s) VALUES (%s)',
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
                    case '`id_theme`':						
                        $stmt->bindValue($identifier, $this->id_theme, PDO::PARAM_INT);
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


            if (($retval = CommonExecTypeAvenantPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecAvenants !== null) {
                    foreach ($this->collCommonExecAvenants as $referrerFK) {
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
        $pos = CommonExecTypeAvenantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTheme();
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
        if (isset($alreadyDumpedObjects['CommonExecTypeAvenant'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecTypeAvenant'][$this->getPrimaryKey()] = true;
        $keys = CommonExecTypeAvenantPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdTheme(),
            $keys[2] => $this->getLibelle(),
            $keys[3] => $this->getLibelleFr(),
            $keys[4] => $this->getLibelleAr(),
            $keys[5] => $this->getLibelleEn(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonExecAvenants) {
                $result['CommonExecAvenants'] = $this->collCommonExecAvenants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecTypeAvenantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTheme($value);
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
        $keys = CommonExecTypeAvenantPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdTheme($arr[$keys[1]]);
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
        $criteria = new Criteria(CommonExecTypeAvenantPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecTypeAvenantPeer::ID)) $criteria->add(CommonExecTypeAvenantPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::ID_THEME)) $criteria->add(CommonExecTypeAvenantPeer::ID_THEME, $this->id_theme);
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::LIBELLE)) $criteria->add(CommonExecTypeAvenantPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::LIBELLE_FR)) $criteria->add(CommonExecTypeAvenantPeer::LIBELLE_FR, $this->libelle_fr);
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::LIBELLE_AR)) $criteria->add(CommonExecTypeAvenantPeer::LIBELLE_AR, $this->libelle_ar);
        if ($this->isColumnModified(CommonExecTypeAvenantPeer::LIBELLE_EN)) $criteria->add(CommonExecTypeAvenantPeer::LIBELLE_EN, $this->libelle_en);

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
        $criteria = new Criteria(CommonExecTypeAvenantPeer::DATABASE_NAME);
        $criteria->add(CommonExecTypeAvenantPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecTypeAvenant (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTheme($this->getIdTheme());
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

            foreach ($this->getCommonExecAvenants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecAvenant($relObj->copy($deepCopy));
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
     * @return CommonExecTypeAvenant Clone of current object.
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
     * @return CommonExecTypeAvenantPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecTypeAvenantPeer();
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
        if ('CommonExecAvenant' == $relationName) {
            $this->initCommonExecAvenants();
        }
    }

    /**
     * Clears out the collCommonExecAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecTypeAvenant The current object (for fluent API support)
     * @see        addCommonExecAvenants()
     */
    public function clearCommonExecAvenants()
    {
        $this->collCommonExecAvenants = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecAvenantsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecAvenants collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecAvenants($v = true)
    {
        $this->collCommonExecAvenantsPartial = $v;
    }

    /**
     * Initializes the collCommonExecAvenants collection.
     *
     * By default this just sets the collCommonExecAvenants collection to an empty array (like clearcollCommonExecAvenants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecAvenants($overrideExisting = true)
    {
        if (null !== $this->collCommonExecAvenants && !$overrideExisting) {
            return;
        }
        $this->collCommonExecAvenants = new PropelObjectCollection();
        $this->collCommonExecAvenants->setModel('CommonExecAvenant');
    }

    /**
     * Gets an array of CommonExecAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecTypeAvenant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     * @throws PropelException
     */
    public function getCommonExecAvenants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenants) {
                // return empty collection
                $this->initCommonExecAvenants();
            } else {
                $collCommonExecAvenants = CommonExecAvenantQuery::create(null, $criteria)
                    ->filterByCommonExecTypeAvenant($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecAvenantsPartial && count($collCommonExecAvenants)) {
                      $this->initCommonExecAvenants(false);

                      foreach ($collCommonExecAvenants as $obj) {
                        if (false == $this->collCommonExecAvenants->contains($obj)) {
                          $this->collCommonExecAvenants->append($obj);
                        }
                      }

                      $this->collCommonExecAvenantsPartial = true;
                    }

                    $collCommonExecAvenants->getInternalIterator()->rewind();

                    return $collCommonExecAvenants;
                }

                if ($partial && $this->collCommonExecAvenants) {
                    foreach ($this->collCommonExecAvenants as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecAvenants[] = $obj;
                        }
                    }
                }

                $this->collCommonExecAvenants = $collCommonExecAvenants;
                $this->collCommonExecAvenantsPartial = false;
            }
        }

        return $this->collCommonExecAvenants;
    }

    /**
     * Sets a collection of CommonExecAvenant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecAvenants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecTypeAvenant The current object (for fluent API support)
     */
    public function setCommonExecAvenants(PropelCollection $commonExecAvenants, PropelPDO $con = null)
    {
        $commonExecAvenantsToDelete = $this->getCommonExecAvenants(new Criteria(), $con)->diff($commonExecAvenants);


        $this->commonExecAvenantsScheduledForDeletion = $commonExecAvenantsToDelete;

        foreach ($commonExecAvenantsToDelete as $commonExecAvenantRemoved) {
            $commonExecAvenantRemoved->setCommonExecTypeAvenant(null);
        }

        $this->collCommonExecAvenants = null;
        foreach ($commonExecAvenants as $commonExecAvenant) {
            $this->addCommonExecAvenant($commonExecAvenant);
        }

        $this->collCommonExecAvenants = $commonExecAvenants;
        $this->collCommonExecAvenantsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecAvenant objects.
     * @throws PropelException
     */
    public function countCommonExecAvenants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecAvenants());
            }
            $query = CommonExecAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecTypeAvenant($this)
                ->count($con);
        }

        return count($this->collCommonExecAvenants);
    }

    /**
     * Method called to associate a CommonExecAvenant object to this object
     * through the CommonExecAvenant foreign key attribute.
     *
     * @param   CommonExecAvenant $l CommonExecAvenant
     * @return CommonExecTypeAvenant The current object (for fluent API support)
     */
    public function addCommonExecAvenant(CommonExecAvenant $l)
    {
        if ($this->collCommonExecAvenants === null) {
            $this->initCommonExecAvenants();
            $this->collCommonExecAvenantsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecAvenants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecAvenant($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecAvenant $commonExecAvenant The commonExecAvenant object to add.
     */
    protected function doAddCommonExecAvenant($commonExecAvenant)
    {
        $this->collCommonExecAvenants[]= $commonExecAvenant;
        $commonExecAvenant->setCommonExecTypeAvenant($this);
    }

    /**
     * @param	CommonExecAvenant $commonExecAvenant The commonExecAvenant object to remove.
     * @return CommonExecTypeAvenant The current object (for fluent API support)
     */
    public function removeCommonExecAvenant($commonExecAvenant)
    {
        if ($this->getCommonExecAvenants()->contains($commonExecAvenant)) {
            $this->collCommonExecAvenants->remove($this->collCommonExecAvenants->search($commonExecAvenant));
            if (null === $this->commonExecAvenantsScheduledForDeletion) {
                $this->commonExecAvenantsScheduledForDeletion = clone $this->collCommonExecAvenants;
                $this->commonExecAvenantsScheduledForDeletion->clear();
            }
            $this->commonExecAvenantsScheduledForDeletion[]= $commonExecAvenant;
            $commonExecAvenant->setCommonExecTypeAvenant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecTypeAvenant is new, it will return
     * an empty collection; or if this CommonExecTypeAvenant has previously
     * been saved, it will retrieve related CommonExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecTypeAvenant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsJoinCommonAgentRelatedByIdAgentCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentCrea', $join_behavior);

        return $this->getCommonExecAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecTypeAvenant is new, it will return
     * an empty collection; or if this CommonExecTypeAvenant has previously
     * been saved, it will retrieve related CommonExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecTypeAvenant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsJoinCommonAgentRelatedByIdAgentModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentModif', $join_behavior);

        return $this->getCommonExecAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecTypeAvenant is new, it will return
     * an empty collection; or if this CommonExecTypeAvenant has previously
     * been saved, it will retrieve related CommonExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecTypeAvenant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsJoinCommonAgentRelatedByIdAgentRejet($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentRejet', $join_behavior);

        return $this->getCommonExecAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecTypeAvenant is new, it will return
     * an empty collection; or if this CommonExecTypeAvenant has previously
     * been saved, it will retrieve related CommonExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecTypeAvenant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsJoinCommonAgentRelatedByIdAgentValidation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentValidation', $join_behavior);

        return $this->getCommonExecAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecTypeAvenant is new, it will return
     * an empty collection; or if this CommonExecTypeAvenant has previously
     * been saved, it will retrieve related CommonExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecTypeAvenant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecAvenants($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_theme = null;
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
            if ($this->collCommonExecAvenants) {
                foreach ($this->collCommonExecAvenants as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecAvenants instanceof PropelCollection) {
            $this->collCommonExecAvenants->clearIterator();
        }
        $this->collCommonExecAvenants = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecTypeAvenantPeer::DEFAULT_STRING_FORMAT);
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
