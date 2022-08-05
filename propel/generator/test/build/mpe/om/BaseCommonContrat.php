<?php


/**
 * Base class that represents a row from the 'Contrat' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonContrat extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonContratPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonContratPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_marche field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_marche;

    /**
     * The value for the id_decision field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_decision;

    /**
     * The value for the informaions_complementaires field.
     * @var        string
     */
    protected $informaions_complementaires;

    /**
     * @var        PropelObjectCollection|CommonAvenant[] Collection to store aggregation of CommonAvenant objects.
     */
    protected $collCommonAvenants;
    protected $collCommonAvenantsPartial;

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
    protected $commonAvenantsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->id_marche = 0;
        $this->id_decision = 0;
    }

    /**
     * Initializes internal state of BaseCommonContrat object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [id_marche] column value.
     * 
     * @return int
     */
    public function getIdMarche()
    {

        return $this->id_marche;
    }

    /**
     * Get the [id_decision] column value.
     * 
     * @return int
     */
    public function getIdDecision()
    {

        return $this->id_decision;
    }

    /**
     * Get the [informaions_complementaires] column value.
     * 
     * @return string
     */
    public function getInformaionsComplementaires()
    {

        return $this->informaions_complementaires;
    }

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonContrat The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonContratPeer::ID_CONTRAT;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonContrat The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonContratPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_marche] column.
     * 
     * @param int $v new value
     * @return CommonContrat The current object (for fluent API support)
     */
    public function setIdMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_marche !== $v) {
            $this->id_marche = $v;
            $this->modifiedColumns[] = CommonContratPeer::ID_MARCHE;
        }


        return $this;
    } // setIdMarche()

    /**
     * Set the value of [id_decision] column.
     * 
     * @param int $v new value
     * @return CommonContrat The current object (for fluent API support)
     */
    public function setIdDecision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_decision !== $v) {
            $this->id_decision = $v;
            $this->modifiedColumns[] = CommonContratPeer::ID_DECISION;
        }


        return $this;
    } // setIdDecision()

    /**
     * Set the value of [informaions_complementaires] column.
     * 
     * @param string $v new value
     * @return CommonContrat The current object (for fluent API support)
     */
    public function setInformaionsComplementaires($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->informaions_complementaires !== $v) {
            $this->informaions_complementaires = $v;
            $this->modifiedColumns[] = CommonContratPeer::INFORMAIONS_COMPLEMENTAIRES;
        }


        return $this;
    } // setInformaionsComplementaires()

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
            if ($this->id_marche !== 0) {
                return false;
            }

            if ($this->id_decision !== 0) {
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

            $this->id_contrat = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_marche = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_decision = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->informaions_complementaires = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = CommonContratPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonContrat object", $e);
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
            $con = Propel::getConnection(CommonContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonContratPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonAvenants = null;

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
            $con = Propel::getConnection(CommonContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonContratQuery::create()
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
            $con = Propel::getConnection(CommonContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonContratPeer::addInstanceToPool($this);
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

            if ($this->commonAvenantsScheduledForDeletion !== null) {
                if (!$this->commonAvenantsScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonAvenantQuery::create()
                        ->filterByPrimaryKeys($this->commonAvenantsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonAvenantsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonAvenants !== null) {
                foreach ($this->collCommonAvenants as $referrerFK) {
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

        $this->modifiedColumns[] = CommonContratPeer::ID_CONTRAT;
        if (null !== $this->id_contrat) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonContratPeer::ID_CONTRAT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonContratPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonContratPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonContratPeer::ID_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`id_marche`';
        }
        if ($this->isColumnModified(CommonContratPeer::ID_DECISION)) {
            $modifiedColumns[':p' . $index++]  = '`id_decision`';
        }
        if ($this->isColumnModified(CommonContratPeer::INFORMAIONS_COMPLEMENTAIRES)) {
            $modifiedColumns[':p' . $index++]  = '`informaions_complementaires`';
        }

        $sql = sprintf(
            'INSERT INTO `Contrat` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_marche`':						
                        $stmt->bindValue($identifier, $this->id_marche, PDO::PARAM_INT);
                        break;
                    case '`id_decision`':						
                        $stmt->bindValue($identifier, $this->id_decision, PDO::PARAM_INT);
                        break;
                    case '`informaions_complementaires`':						
                        $stmt->bindValue($identifier, $this->informaions_complementaires, PDO::PARAM_STR);
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
        $this->setIdContrat($pk);

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


            if (($retval = CommonContratPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonAvenants !== null) {
                    foreach ($this->collCommonAvenants as $referrerFK) {
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
        $pos = CommonContratPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdContrat();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdMarche();
                break;
            case 3:
                return $this->getIdDecision();
                break;
            case 4:
                return $this->getInformaionsComplementaires();
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
        if (isset($alreadyDumpedObjects['CommonContrat'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonContrat'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonContratPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdContrat(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdMarche(),
            $keys[3] => $this->getIdDecision(),
            $keys[4] => $this->getInformaionsComplementaires(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonAvenants) {
                $result['CommonAvenants'] = $this->collCommonAvenants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonContratPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdContrat($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdMarche($value);
                break;
            case 3:
                $this->setIdDecision($value);
                break;
            case 4:
                $this->setInformaionsComplementaires($value);
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
        $keys = CommonContratPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdContrat($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdMarche($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdDecision($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setInformaionsComplementaires($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonContratPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonContratPeer::ID_CONTRAT)) $criteria->add(CommonContratPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonContratPeer::ORGANISME)) $criteria->add(CommonContratPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonContratPeer::ID_MARCHE)) $criteria->add(CommonContratPeer::ID_MARCHE, $this->id_marche);
        if ($this->isColumnModified(CommonContratPeer::ID_DECISION)) $criteria->add(CommonContratPeer::ID_DECISION, $this->id_decision);
        if ($this->isColumnModified(CommonContratPeer::INFORMAIONS_COMPLEMENTAIRES)) $criteria->add(CommonContratPeer::INFORMAIONS_COMPLEMENTAIRES, $this->informaions_complementaires);

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
        $criteria = new Criteria(CommonContratPeer::DATABASE_NAME);
        $criteria->add(CommonContratPeer::ID_CONTRAT, $this->id_contrat);
        $criteria->add(CommonContratPeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdContrat();
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
        $this->setIdContrat($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdContrat()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonContrat (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdMarche($this->getIdMarche());
        $copyObj->setIdDecision($this->getIdDecision());
        $copyObj->setInformaionsComplementaires($this->getInformaionsComplementaires());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonAvenants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonAvenant($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdContrat(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonContrat Clone of current object.
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
     * @return CommonContratPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonContratPeer();
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
        if ('CommonAvenant' == $relationName) {
            $this->initCommonAvenants();
        }
    }

    /**
     * Clears out the collCommonAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonContrat The current object (for fluent API support)
     * @see        addCommonAvenants()
     */
    public function clearCommonAvenants()
    {
        $this->collCommonAvenants = null; // important to set this to null since that means it is uninitialized
        $this->collCommonAvenantsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonAvenants collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonAvenants($v = true)
    {
        $this->collCommonAvenantsPartial = $v;
    }

    /**
     * Initializes the collCommonAvenants collection.
     *
     * By default this just sets the collCommonAvenants collection to an empty array (like clearcollCommonAvenants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonAvenants($overrideExisting = true)
    {
        if (null !== $this->collCommonAvenants && !$overrideExisting) {
            return;
        }
        $this->collCommonAvenants = new PropelObjectCollection();
        $this->collCommonAvenants->setModel('CommonAvenant');
    }

    /**
     * Gets an array of CommonAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonAvenant[] List of CommonAvenant objects
     * @throws PropelException
     */
    public function getCommonAvenants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonAvenantsPartial && !$this->isNew();
        if (null === $this->collCommonAvenants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonAvenants) {
                // return empty collection
                $this->initCommonAvenants();
            } else {
                $collCommonAvenants = CommonAvenantQuery::create(null, $criteria)
                    ->filterByCommonContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonAvenantsPartial && count($collCommonAvenants)) {
                      $this->initCommonAvenants(false);

                      foreach ($collCommonAvenants as $obj) {
                        if (false == $this->collCommonAvenants->contains($obj)) {
                          $this->collCommonAvenants->append($obj);
                        }
                      }

                      $this->collCommonAvenantsPartial = true;
                    }

                    $collCommonAvenants->getInternalIterator()->rewind();

                    return $collCommonAvenants;
                }

                if ($partial && $this->collCommonAvenants) {
                    foreach ($this->collCommonAvenants as $obj) {
                        if ($obj->isNew()) {
                            $collCommonAvenants[] = $obj;
                        }
                    }
                }

                $this->collCommonAvenants = $collCommonAvenants;
                $this->collCommonAvenantsPartial = false;
            }
        }

        return $this->collCommonAvenants;
    }

    /**
     * Sets a collection of CommonAvenant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonAvenants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonContrat The current object (for fluent API support)
     */
    public function setCommonAvenants(PropelCollection $commonAvenants, PropelPDO $con = null)
    {
        $commonAvenantsToDelete = $this->getCommonAvenants(new Criteria(), $con)->diff($commonAvenants);


        $this->commonAvenantsScheduledForDeletion = $commonAvenantsToDelete;

        foreach ($commonAvenantsToDelete as $commonAvenantRemoved) {
            $commonAvenantRemoved->setCommonContrat(null);
        }

        $this->collCommonAvenants = null;
        foreach ($commonAvenants as $commonAvenant) {
            $this->addCommonAvenant($commonAvenant);
        }

        $this->collCommonAvenants = $commonAvenants;
        $this->collCommonAvenantsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonAvenant objects.
     * @throws PropelException
     */
    public function countCommonAvenants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonAvenantsPartial && !$this->isNew();
        if (null === $this->collCommonAvenants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonAvenants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonAvenants());
            }
            $query = CommonAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonContrat($this)
                ->count($con);
        }

        return count($this->collCommonAvenants);
    }

    /**
     * Method called to associate a CommonAvenant object to this object
     * through the CommonAvenant foreign key attribute.
     *
     * @param   CommonAvenant $l CommonAvenant
     * @return CommonContrat The current object (for fluent API support)
     */
    public function addCommonAvenant(CommonAvenant $l)
    {
        if ($this->collCommonAvenants === null) {
            $this->initCommonAvenants();
            $this->collCommonAvenantsPartial = true;
        }
        if (!in_array($l, $this->collCommonAvenants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonAvenant($l);
        }

        return $this;
    }

    /**
     * @param	CommonAvenant $commonAvenant The commonAvenant object to add.
     */
    protected function doAddCommonAvenant($commonAvenant)
    {
        $this->collCommonAvenants[]= $commonAvenant;
        $commonAvenant->setCommonContrat($this);
    }

    /**
     * @param	CommonAvenant $commonAvenant The commonAvenant object to remove.
     * @return CommonContrat The current object (for fluent API support)
     */
    public function removeCommonAvenant($commonAvenant)
    {
        if ($this->getCommonAvenants()->contains($commonAvenant)) {
            $this->collCommonAvenants->remove($this->collCommonAvenants->search($commonAvenant));
            if (null === $this->commonAvenantsScheduledForDeletion) {
                $this->commonAvenantsScheduledForDeletion = clone $this->collCommonAvenants;
                $this->commonAvenantsScheduledForDeletion->clear();
            }
            $this->commonAvenantsScheduledForDeletion[]= clone $commonAvenant;
            $commonAvenant->setCommonContrat(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_contrat = null;
        $this->organisme = null;
        $this->id_marche = null;
        $this->id_decision = null;
        $this->informaions_complementaires = null;
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
            if ($this->collCommonAvenants) {
                foreach ($this->collCommonAvenants as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonAvenants instanceof PropelCollection) {
            $this->collCommonAvenants->clearIterator();
        }
        $this->collCommonAvenants = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonContratPeer::DEFAULT_STRING_FORMAT);
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
