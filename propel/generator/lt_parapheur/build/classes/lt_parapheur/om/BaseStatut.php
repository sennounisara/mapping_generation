<?php


/**
 * Base class that represents a row from the 'statut' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseStatut extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'StatutPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        StatutPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_statut field.
     * @var        int
     */
    protected $id_statut;

    /**
     * The value for the libele_statut_fr field.
     * @var        string
     */
    protected $libele_statut_fr;

    /**
     * The value for the libele_statut_ar field.
     * @var        string
     */
    protected $libele_statut_ar;

    /**
     * The value for the id_action field.
     * @var        int
     */
    protected $id_action;

    /**
     * The value for the is_echange field.
     * @var        string
     */
    protected $is_echange;

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
     * Get the [id_statut] column value.
     * 
     * @return int
     */
    public function getIdStatut()
    {

        return $this->id_statut;
    }

    /**
     * Get the [libele_statut_fr] column value.
     * 
     * @return string
     */
    public function getLibeleStatutFr()
    {

        return $this->libele_statut_fr;
    }

    /**
     * Get the [libele_statut_ar] column value.
     * 
     * @return string
     */
    public function getLibeleStatutAr()
    {

        return $this->libele_statut_ar;
    }

    /**
     * Get the [id_action] column value.
     * 
     * @return int
     */
    public function getIdAction()
    {

        return $this->id_action;
    }

    /**
     * Get the [is_echange] column value.
     * 
     * @return string
     */
    public function getIsEchange()
    {

        return $this->is_echange;
    }

    /**
     * Set the value of [id_statut] column.
     * 
     * @param int $v new value
     * @return Statut The current object (for fluent API support)
     */
    public function setIdStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_statut !== $v) {
            $this->id_statut = $v;
            $this->modifiedColumns[] = StatutPeer::ID_STATUT;
        }


        return $this;
    } // setIdStatut()

    /**
     * Set the value of [libele_statut_fr] column.
     * 
     * @param string $v new value
     * @return Statut The current object (for fluent API support)
     */
    public function setLibeleStatutFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libele_statut_fr !== $v) {
            $this->libele_statut_fr = $v;
            $this->modifiedColumns[] = StatutPeer::LIBELE_STATUT_FR;
        }


        return $this;
    } // setLibeleStatutFr()

    /**
     * Set the value of [libele_statut_ar] column.
     * 
     * @param string $v new value
     * @return Statut The current object (for fluent API support)
     */
    public function setLibeleStatutAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libele_statut_ar !== $v) {
            $this->libele_statut_ar = $v;
            $this->modifiedColumns[] = StatutPeer::LIBELE_STATUT_AR;
        }


        return $this;
    } // setLibeleStatutAr()

    /**
     * Set the value of [id_action] column.
     * 
     * @param int $v new value
     * @return Statut The current object (for fluent API support)
     */
    public function setIdAction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_action !== $v) {
            $this->id_action = $v;
            $this->modifiedColumns[] = StatutPeer::ID_ACTION;
        }


        return $this;
    } // setIdAction()

    /**
     * Set the value of [is_echange] column.
     * 
     * @param string $v new value
     * @return Statut The current object (for fluent API support)
     */
    public function setIsEchange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->is_echange !== $v) {
            $this->is_echange = $v;
            $this->modifiedColumns[] = StatutPeer::IS_ECHANGE;
        }


        return $this;
    } // setIsEchange()

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

            $this->id_statut = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->libele_statut_fr = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->libele_statut_ar = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_action = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->is_echange = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = StatutPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Statut object", $e);
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
            $con = Propel::getConnection(StatutPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = StatutPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(StatutPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = StatutQuery::create()
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
            $con = Propel::getConnection(StatutPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                StatutPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = StatutPeer::ID_STATUT;
        if (null !== $this->id_statut) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . StatutPeer::ID_STATUT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(StatutPeer::ID_STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_STATUT`';
        }
        if ($this->isColumnModified(StatutPeer::LIBELE_STATUT_FR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELE_STATUT_FR`';
        }
        if ($this->isColumnModified(StatutPeer::LIBELE_STATUT_AR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELE_STATUT_AR`';
        }
        if ($this->isColumnModified(StatutPeer::ID_ACTION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ACTION`';
        }
        if ($this->isColumnModified(StatutPeer::IS_ECHANGE)) {
            $modifiedColumns[':p' . $index++]  = '`IS_ECHANGE`';
        }

        $sql = sprintf(
            'INSERT INTO `statut` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_STATUT`':						
                        $stmt->bindValue($identifier, $this->id_statut, PDO::PARAM_INT);
                        break;
                    case '`LIBELE_STATUT_FR`':						
                        $stmt->bindValue($identifier, $this->libele_statut_fr, PDO::PARAM_STR);
                        break;
                    case '`LIBELE_STATUT_AR`':						
                        $stmt->bindValue($identifier, $this->libele_statut_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_ACTION`':						
                        $stmt->bindValue($identifier, $this->id_action, PDO::PARAM_INT);
                        break;
                    case '`IS_ECHANGE`':						
                        $stmt->bindValue($identifier, $this->is_echange, PDO::PARAM_STR);
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
        $this->setIdStatut($pk);

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


            if (($retval = StatutPeer::doValidate($this, $columns)) !== true) {
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
        $pos = StatutPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdStatut();
                break;
            case 1:
                return $this->getLibeleStatutFr();
                break;
            case 2:
                return $this->getLibeleStatutAr();
                break;
            case 3:
                return $this->getIdAction();
                break;
            case 4:
                return $this->getIsEchange();
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
        if (isset($alreadyDumpedObjects['Statut'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Statut'][$this->getPrimaryKey()] = true;
        $keys = StatutPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdStatut(),
            $keys[1] => $this->getLibeleStatutFr(),
            $keys[2] => $this->getLibeleStatutAr(),
            $keys[3] => $this->getIdAction(),
            $keys[4] => $this->getIsEchange(),
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
        $pos = StatutPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdStatut($value);
                break;
            case 1:
                $this->setLibeleStatutFr($value);
                break;
            case 2:
                $this->setLibeleStatutAr($value);
                break;
            case 3:
                $this->setIdAction($value);
                break;
            case 4:
                $this->setIsEchange($value);
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
        $keys = StatutPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdStatut($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLibeleStatutFr($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibeleStatutAr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdAction($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIsEchange($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(StatutPeer::DATABASE_NAME);

        if ($this->isColumnModified(StatutPeer::ID_STATUT)) $criteria->add(StatutPeer::ID_STATUT, $this->id_statut);
        if ($this->isColumnModified(StatutPeer::LIBELE_STATUT_FR)) $criteria->add(StatutPeer::LIBELE_STATUT_FR, $this->libele_statut_fr);
        if ($this->isColumnModified(StatutPeer::LIBELE_STATUT_AR)) $criteria->add(StatutPeer::LIBELE_STATUT_AR, $this->libele_statut_ar);
        if ($this->isColumnModified(StatutPeer::ID_ACTION)) $criteria->add(StatutPeer::ID_ACTION, $this->id_action);
        if ($this->isColumnModified(StatutPeer::IS_ECHANGE)) $criteria->add(StatutPeer::IS_ECHANGE, $this->is_echange);

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
        $criteria = new Criteria(StatutPeer::DATABASE_NAME);
        $criteria->add(StatutPeer::ID_STATUT, $this->id_statut);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdStatut();
    }

    /**
     * Generic method to set the primary key (id_statut column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdStatut($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdStatut();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Statut (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLibeleStatutFr($this->getLibeleStatutFr());
        $copyObj->setLibeleStatutAr($this->getLibeleStatutAr());
        $copyObj->setIdAction($this->getIdAction());
        $copyObj->setIsEchange($this->getIsEchange());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdStatut(NULL); // this is a auto-increment column, so set to default value
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
     * @return Statut Clone of current object.
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
     * @return StatutPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new StatutPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_statut = null;
        $this->libele_statut_fr = null;
        $this->libele_statut_ar = null;
        $this->id_action = null;
        $this->is_echange = null;
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
        return (string) $this->exportTo(StatutPeer::DEFAULT_STRING_FORMAT);
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
