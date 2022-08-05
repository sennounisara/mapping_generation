<?php


/**
 * Base class that represents a row from the 'T_Traduction_Tmp' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTTraductionTmp extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTTraductionTmpPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTTraductionTmpPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the langue field.
     * @var        string
     */
    protected $langue;

    /**
     * The value for the id_libelle field.
     * @var        int
     */
    protected $id_libelle;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the champ field.
     * @var        string
     */
    protected $champ;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the reference field.
     * @var        int
     */
    protected $reference;

    /**
     * The value for the lot field.
     * @var        int
     */
    protected $lot;

    /**
     * The value for the id_donnee_complementaire field.
     * @var        int
     */
    protected $id_donnee_complementaire;

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
     * Get the [langue] column value.
     * 
     * @return string
     */
    public function getLangue()
    {

        return $this->langue;
    }

    /**
     * Get the [id_libelle] column value.
     * 
     * @return int
     */
    public function getIdLibelle()
    {

        return $this->id_libelle;
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
     * Get the [champ] column value.
     * 
     * @return string
     */
    public function getChamp()
    {

        return $this->champ;
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
     * Get the [reference] column value.
     * 
     * @return int
     */
    public function getReference()
    {

        return $this->reference;
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
     * Get the [id_donnee_complementaire] column value.
     * 
     * @return int
     */
    public function getIdDonneeComplementaire()
    {

        return $this->id_donnee_complementaire;
    }

    /**
     * Set the value of [langue] column.
     * 
     * @param string $v new value
     * @return CommonTTraductionTmp The current object (for fluent API support)
     */
    public function setLangue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->langue !== $v) {
            $this->langue = $v;
            $this->modifiedColumns[] = CommonTTraductionTmpPeer::LANGUE;
        }


        return $this;
    } // setLangue()

    /**
     * Set the value of [id_libelle] column.
     * 
     * @param int $v new value
     * @return CommonTTraductionTmp The current object (for fluent API support)
     */
    public function setIdLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_libelle !== $v) {
            $this->id_libelle = $v;
            $this->modifiedColumns[] = CommonTTraductionTmpPeer::ID_LIBELLE;
        }


        return $this;
    } // setIdLibelle()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonTTraductionTmp The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonTTraductionTmpPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [champ] column.
     * 
     * @param string $v new value
     * @return CommonTTraductionTmp The current object (for fluent API support)
     */
    public function setChamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ !== $v) {
            $this->champ = $v;
            $this->modifiedColumns[] = CommonTTraductionTmpPeer::CHAMP;
        }


        return $this;
    } // setChamp()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTTraductionTmp The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTTraductionTmpPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [reference] column.
     * 
     * @param int $v new value
     * @return CommonTTraductionTmp The current object (for fluent API support)
     */
    public function setReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reference !== $v) {
            $this->reference = $v;
            $this->modifiedColumns[] = CommonTTraductionTmpPeer::REFERENCE;
        }


        return $this;
    } // setReference()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonTTraductionTmp The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonTTraductionTmpPeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [id_donnee_complementaire] column.
     * 
     * @param int $v new value
     * @return CommonTTraductionTmp The current object (for fluent API support)
     */
    public function setIdDonneeComplementaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_donnee_complementaire !== $v) {
            $this->id_donnee_complementaire = $v;
            $this->modifiedColumns[] = CommonTTraductionTmpPeer::ID_DONNEE_COMPLEMENTAIRE;
        }


        return $this;
    } // setIdDonneeComplementaire()

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

            $this->langue = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->id_libelle = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->champ = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->organisme = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->reference = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->lot = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_donnee_complementaire = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = CommonTTraductionTmpPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTTraductionTmp object", $e);
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
            $con = Propel::getConnection(CommonTTraductionTmpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTTraductionTmpPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTTraductionTmpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTTraductionTmpQuery::create()
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
            $con = Propel::getConnection(CommonTTraductionTmpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTTraductionTmpPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTTraductionTmpPeer::ID_LIBELLE;
        if (null !== $this->id_libelle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTTraductionTmpPeer::ID_LIBELLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTTraductionTmpPeer::LANGUE)) {
            $modifiedColumns[':p' . $index++]  = '`langue`';
        }
        if ($this->isColumnModified(CommonTTraductionTmpPeer::ID_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`id_libelle`';
        }
        if ($this->isColumnModified(CommonTTraductionTmpPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonTTraductionTmpPeer::CHAMP)) {
            $modifiedColumns[':p' . $index++]  = '`champ`';
        }
        if ($this->isColumnModified(CommonTTraductionTmpPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTTraductionTmpPeer::REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`reference`';
        }
        if ($this->isColumnModified(CommonTTraductionTmpPeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonTTraductionTmpPeer::ID_DONNEE_COMPLEMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_donnee_complementaire`';
        }

        $sql = sprintf(
            'INSERT INTO `T_Traduction_Tmp` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`langue`':						
                        $stmt->bindValue($identifier, $this->langue, PDO::PARAM_STR);
                        break;
                    case '`id_libelle`':						
                        $stmt->bindValue($identifier, $this->id_libelle, PDO::PARAM_INT);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`champ`':						
                        $stmt->bindValue($identifier, $this->champ, PDO::PARAM_STR);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`reference`':						
                        $stmt->bindValue($identifier, $this->reference, PDO::PARAM_INT);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`id_donnee_complementaire`':						
                        $stmt->bindValue($identifier, $this->id_donnee_complementaire, PDO::PARAM_INT);
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
        $this->setLangue($pk);

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


            if (($retval = CommonTTraductionTmpPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTTraductionTmpPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLangue();
                break;
            case 1:
                return $this->getIdLibelle();
                break;
            case 2:
                return $this->getLibelle();
                break;
            case 3:
                return $this->getChamp();
                break;
            case 4:
                return $this->getOrganisme();
                break;
            case 5:
                return $this->getReference();
                break;
            case 6:
                return $this->getLot();
                break;
            case 7:
                return $this->getIdDonneeComplementaire();
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
        if (isset($alreadyDumpedObjects['CommonTTraductionTmp'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTTraductionTmp'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTTraductionTmpPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getLangue(),
            $keys[1] => $this->getIdLibelle(),
            $keys[2] => $this->getLibelle(),
            $keys[3] => $this->getChamp(),
            $keys[4] => $this->getOrganisme(),
            $keys[5] => $this->getReference(),
            $keys[6] => $this->getLot(),
            $keys[7] => $this->getIdDonneeComplementaire(),
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
        $pos = CommonTTraductionTmpPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLangue($value);
                break;
            case 1:
                $this->setIdLibelle($value);
                break;
            case 2:
                $this->setLibelle($value);
                break;
            case 3:
                $this->setChamp($value);
                break;
            case 4:
                $this->setOrganisme($value);
                break;
            case 5:
                $this->setReference($value);
                break;
            case 6:
                $this->setLot($value);
                break;
            case 7:
                $this->setIdDonneeComplementaire($value);
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
        $keys = CommonTTraductionTmpPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setLangue($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setChamp($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrganisme($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setReference($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLot($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdDonneeComplementaire($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTTraductionTmpPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTTraductionTmpPeer::LANGUE)) $criteria->add(CommonTTraductionTmpPeer::LANGUE, $this->langue);
        if ($this->isColumnModified(CommonTTraductionTmpPeer::ID_LIBELLE)) $criteria->add(CommonTTraductionTmpPeer::ID_LIBELLE, $this->id_libelle);
        if ($this->isColumnModified(CommonTTraductionTmpPeer::LIBELLE)) $criteria->add(CommonTTraductionTmpPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonTTraductionTmpPeer::CHAMP)) $criteria->add(CommonTTraductionTmpPeer::CHAMP, $this->champ);
        if ($this->isColumnModified(CommonTTraductionTmpPeer::ORGANISME)) $criteria->add(CommonTTraductionTmpPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTTraductionTmpPeer::REFERENCE)) $criteria->add(CommonTTraductionTmpPeer::REFERENCE, $this->reference);
        if ($this->isColumnModified(CommonTTraductionTmpPeer::LOT)) $criteria->add(CommonTTraductionTmpPeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonTTraductionTmpPeer::ID_DONNEE_COMPLEMENTAIRE)) $criteria->add(CommonTTraductionTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $this->id_donnee_complementaire);

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
        $criteria = new Criteria(CommonTTraductionTmpPeer::DATABASE_NAME);
        $criteria->add(CommonTTraductionTmpPeer::LANGUE, $this->langue);
        $criteria->add(CommonTTraductionTmpPeer::ID_LIBELLE, $this->id_libelle);

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
        $pks[0] = $this->getLangue();
        $pks[1] = $this->getIdLibelle();

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
        $this->setLangue($keys[0]);
        $this->setIdLibelle($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getLangue()) && (null === $this->getIdLibelle());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTTraductionTmp (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLangue($this->getLangue());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setChamp($this->getChamp());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setReference($this->getReference());
        $copyObj->setLot($this->getLot());
        $copyObj->setIdDonneeComplementaire($this->getIdDonneeComplementaire());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdLibelle(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTTraductionTmp Clone of current object.
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
     * @return CommonTTraductionTmpPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTTraductionTmpPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->langue = null;
        $this->id_libelle = null;
        $this->libelle = null;
        $this->champ = null;
        $this->organisme = null;
        $this->reference = null;
        $this->lot = null;
        $this->id_donnee_complementaire = null;
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
        return (string) $this->exportTo(CommonTTraductionTmpPeer::DEFAULT_STRING_FORMAT);
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
