<?php


/**
 * Base class that represents a row from the 't_CAO_Commission_Agent' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOCommissionAgent extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCAOCommissionAgentPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCAOCommissionAgentPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_commission_agent field.
     * @var        string
     */
    protected $id_commission_agent;

    /**
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_commission field.
     * @var        string
     */
    protected $id_commission;

    /**
     * The value for the id_ref_val_type_voix_defaut field.
     * @var        int
     */
    protected $id_ref_val_type_voix_defaut;

    /**
     * The value for the type_compte field.
     * @var        int
     */
    protected $type_compte;

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
     * Get the [id_commission_agent] column value.
     * 
     * @return string
     */
    public function getIdCommissionAgent()
    {

        return $this->id_commission_agent;
    }

    /**
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
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
     * Get the [id_commission] column value.
     * 
     * @return string
     */
    public function getIdCommission()
    {

        return $this->id_commission;
    }

    /**
     * Get the [id_ref_val_type_voix_defaut] column value.
     * 
     * @return int
     */
    public function getIdRefValTypeVoixDefaut()
    {

        return $this->id_ref_val_type_voix_defaut;
    }

    /**
     * Get the [type_compte] column value.
     * 
     * @return int
     */
    public function getTypeCompte()
    {

        return $this->type_compte;
    }

    /**
     * Set the value of [id_commission_agent] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionAgent The current object (for fluent API support)
     */
    public function setIdCommissionAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_commission_agent !== $v) {
            $this->id_commission_agent = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT;
        }


        return $this;
    } // setIdCommissionAgent()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonTCAOCommissionAgent The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionAgentPeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionAgent The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionAgentPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_commission] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionAgent The current object (for fluent API support)
     */
    public function setIdCommission($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_commission !== $v) {
            $this->id_commission = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionAgentPeer::ID_COMMISSION;
        }


        return $this;
    } // setIdCommission()

    /**
     * Set the value of [id_ref_val_type_voix_defaut] column.
     * 
     * @param int $v new value
     * @return CommonTCAOCommissionAgent The current object (for fluent API support)
     */
    public function setIdRefValTypeVoixDefaut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ref_val_type_voix_defaut !== $v) {
            $this->id_ref_val_type_voix_defaut = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionAgentPeer::ID_REF_VAL_TYPE_VOIX_DEFAUT;
        }


        return $this;
    } // setIdRefValTypeVoixDefaut()

    /**
     * Set the value of [type_compte] column.
     * 
     * @param int $v new value
     * @return CommonTCAOCommissionAgent The current object (for fluent API support)
     */
    public function setTypeCompte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_compte !== $v) {
            $this->type_compte = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionAgentPeer::TYPE_COMPTE;
        }


        return $this;
    } // setTypeCompte()

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

            $this->id_commission_agent = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->id_agent = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->organisme = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_commission = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_ref_val_type_voix_defaut = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->type_compte = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = CommonTCAOCommissionAgentPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCAOCommissionAgent object", $e);
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
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCAOCommissionAgentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCAOCommissionAgentQuery::create()
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
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCAOCommissionAgentPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT;
        if (null !== $this->id_commission_agent) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_commission_agent`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::ID_COMMISSION)) {
            $modifiedColumns[':p' . $index++]  = '`id_commission`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::ID_REF_VAL_TYPE_VOIX_DEFAUT)) {
            $modifiedColumns[':p' . $index++]  = '`id_ref_val_type_voix_defaut`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::TYPE_COMPTE)) {
            $modifiedColumns[':p' . $index++]  = '`type_compte`';
        }

        $sql = sprintf(
            'INSERT INTO `t_CAO_Commission_Agent` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_commission_agent`':						
                        $stmt->bindValue($identifier, $this->id_commission_agent, PDO::PARAM_STR);
                        break;
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_commission`':						
                        $stmt->bindValue($identifier, $this->id_commission, PDO::PARAM_STR);
                        break;
                    case '`id_ref_val_type_voix_defaut`':						
                        $stmt->bindValue($identifier, $this->id_ref_val_type_voix_defaut, PDO::PARAM_INT);
                        break;
                    case '`type_compte`':						
                        $stmt->bindValue($identifier, $this->type_compte, PDO::PARAM_INT);
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
        $this->setIdCommissionAgent($pk);

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


            if (($retval = CommonTCAOCommissionAgentPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTCAOCommissionAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdCommissionAgent();
                break;
            case 1:
                return $this->getIdAgent();
                break;
            case 2:
                return $this->getOrganisme();
                break;
            case 3:
                return $this->getIdCommission();
                break;
            case 4:
                return $this->getIdRefValTypeVoixDefaut();
                break;
            case 5:
                return $this->getTypeCompte();
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
        if (isset($alreadyDumpedObjects['CommonTCAOCommissionAgent'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCAOCommissionAgent'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTCAOCommissionAgentPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCommissionAgent(),
            $keys[1] => $this->getIdAgent(),
            $keys[2] => $this->getOrganisme(),
            $keys[3] => $this->getIdCommission(),
            $keys[4] => $this->getIdRefValTypeVoixDefaut(),
            $keys[5] => $this->getTypeCompte(),
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
        $pos = CommonTCAOCommissionAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdCommissionAgent($value);
                break;
            case 1:
                $this->setIdAgent($value);
                break;
            case 2:
                $this->setOrganisme($value);
                break;
            case 3:
                $this->setIdCommission($value);
                break;
            case 4:
                $this->setIdRefValTypeVoixDefaut($value);
                break;
            case 5:
                $this->setTypeCompte($value);
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
        $keys = CommonTCAOCommissionAgentPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdCommissionAgent($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdAgent($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrganisme($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdCommission($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdRefValTypeVoixDefaut($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTypeCompte($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCAOCommissionAgentPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT)) $criteria->add(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, $this->id_commission_agent);
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::ID_AGENT)) $criteria->add(CommonTCAOCommissionAgentPeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::ORGANISME)) $criteria->add(CommonTCAOCommissionAgentPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::ID_COMMISSION)) $criteria->add(CommonTCAOCommissionAgentPeer::ID_COMMISSION, $this->id_commission);
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::ID_REF_VAL_TYPE_VOIX_DEFAUT)) $criteria->add(CommonTCAOCommissionAgentPeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $this->id_ref_val_type_voix_defaut);
        if ($this->isColumnModified(CommonTCAOCommissionAgentPeer::TYPE_COMPTE)) $criteria->add(CommonTCAOCommissionAgentPeer::TYPE_COMPTE, $this->type_compte);

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
        $criteria = new Criteria(CommonTCAOCommissionAgentPeer::DATABASE_NAME);
        $criteria->add(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, $this->id_commission_agent);
        $criteria->add(CommonTCAOCommissionAgentPeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdCommissionAgent();
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
        $this->setIdCommissionAgent($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdCommissionAgent()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTCAOCommissionAgent (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdCommission($this->getIdCommission());
        $copyObj->setIdRefValTypeVoixDefaut($this->getIdRefValTypeVoixDefaut());
        $copyObj->setTypeCompte($this->getTypeCompte());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCommissionAgent(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTCAOCommissionAgent Clone of current object.
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
     * @return CommonTCAOCommissionAgentPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCAOCommissionAgentPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_commission_agent = null;
        $this->id_agent = null;
        $this->organisme = null;
        $this->id_commission = null;
        $this->id_ref_val_type_voix_defaut = null;
        $this->type_compte = null;
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
        return (string) $this->exportTo(CommonTCAOCommissionAgentPeer::DEFAULT_STRING_FORMAT);
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
