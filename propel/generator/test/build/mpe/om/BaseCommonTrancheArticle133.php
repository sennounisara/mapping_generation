<?php


/**
 * Base class that represents a row from the 'Tranche_Article_133' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTrancheArticle133 extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTrancheArticle133Peer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTrancheArticle133Peer
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
     * The value for the acronyme_org field.
     * @var        string
     */
    protected $acronyme_org;

    /**
     * The value for the millesime field.
     * @var        string
     */
    protected $millesime;

    /**
     * The value for the libelle_tranche_budgetaire field.
     * @var        string
     */
    protected $libelle_tranche_budgetaire;

    /**
     * The value for the borne_inf field.
     * @var        string
     */
    protected $borne_inf;

    /**
     * The value for the borne_sup field.
     * @var        string
     */
    protected $borne_sup;

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
     * Get the [acronyme_org] column value.
     * 
     * @return string
     */
    public function getAcronymeOrg()
    {

        return $this->acronyme_org;
    }

    /**
     * Get the [millesime] column value.
     * 
     * @return string
     */
    public function getMillesime()
    {

        return $this->millesime;
    }

    /**
     * Get the [libelle_tranche_budgetaire] column value.
     * 
     * @return string
     */
    public function getLibelleTrancheBudgetaire()
    {

        return $this->libelle_tranche_budgetaire;
    }

    /**
     * Get the [borne_inf] column value.
     * 
     * @return string
     */
    public function getBorneInf()
    {

        return $this->borne_inf;
    }

    /**
     * Get the [borne_sup] column value.
     * 
     * @return string
     */
    public function getBorneSup()
    {

        return $this->borne_sup;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonTrancheArticle133 The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonTrancheArticle133Peer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [acronyme_org] column.
     * 
     * @param string $v new value
     * @return CommonTrancheArticle133 The current object (for fluent API support)
     */
    public function setAcronymeOrg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme_org !== $v) {
            $this->acronyme_org = $v;
            $this->modifiedColumns[] = CommonTrancheArticle133Peer::ACRONYME_ORG;
        }


        return $this;
    } // setAcronymeOrg()

    /**
     * Set the value of [millesime] column.
     * 
     * @param string $v new value
     * @return CommonTrancheArticle133 The current object (for fluent API support)
     */
    public function setMillesime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->millesime !== $v) {
            $this->millesime = $v;
            $this->modifiedColumns[] = CommonTrancheArticle133Peer::MILLESIME;
        }


        return $this;
    } // setMillesime()

    /**
     * Set the value of [libelle_tranche_budgetaire] column.
     * 
     * @param string $v new value
     * @return CommonTrancheArticle133 The current object (for fluent API support)
     */
    public function setLibelleTrancheBudgetaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_tranche_budgetaire !== $v) {
            $this->libelle_tranche_budgetaire = $v;
            $this->modifiedColumns[] = CommonTrancheArticle133Peer::LIBELLE_TRANCHE_BUDGETAIRE;
        }


        return $this;
    } // setLibelleTrancheBudgetaire()

    /**
     * Set the value of [borne_inf] column.
     * 
     * @param string $v new value
     * @return CommonTrancheArticle133 The current object (for fluent API support)
     */
    public function setBorneInf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->borne_inf !== $v) {
            $this->borne_inf = $v;
            $this->modifiedColumns[] = CommonTrancheArticle133Peer::BORNE_INF;
        }


        return $this;
    } // setBorneInf()

    /**
     * Set the value of [borne_sup] column.
     * 
     * @param string $v new value
     * @return CommonTrancheArticle133 The current object (for fluent API support)
     */
    public function setBorneSup($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->borne_sup !== $v) {
            $this->borne_sup = $v;
            $this->modifiedColumns[] = CommonTrancheArticle133Peer::BORNE_SUP;
        }


        return $this;
    } // setBorneSup()

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
            $this->acronyme_org = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->millesime = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle_tranche_budgetaire = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->borne_inf = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->borne_sup = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = CommonTrancheArticle133Peer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTrancheArticle133 object", $e);
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
            $con = Propel::getConnection(CommonTrancheArticle133Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTrancheArticle133Peer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTrancheArticle133Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTrancheArticle133Query::create()
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
            $con = Propel::getConnection(CommonTrancheArticle133Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTrancheArticle133Peer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTrancheArticle133Peer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTrancheArticle133Peer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTrancheArticle133Peer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonTrancheArticle133Peer::ACRONYME_ORG)) {
            $modifiedColumns[':p' . $index++]  = '`acronyme_org`';
        }
        if ($this->isColumnModified(CommonTrancheArticle133Peer::MILLESIME)) {
            $modifiedColumns[':p' . $index++]  = '`millesime`';
        }
        if ($this->isColumnModified(CommonTrancheArticle133Peer::LIBELLE_TRANCHE_BUDGETAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`Libelle_tranche_budgetaire`';
        }
        if ($this->isColumnModified(CommonTrancheArticle133Peer::BORNE_INF)) {
            $modifiedColumns[':p' . $index++]  = '`borne_inf`';
        }
        if ($this->isColumnModified(CommonTrancheArticle133Peer::BORNE_SUP)) {
            $modifiedColumns[':p' . $index++]  = '`borne_sup`';
        }

        $sql = sprintf(
            'INSERT INTO `Tranche_Article_133` (%s) VALUES (%s)',
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
                    case '`acronyme_org`':						
                        $stmt->bindValue($identifier, $this->acronyme_org, PDO::PARAM_STR);
                        break;
                    case '`millesime`':						
                        $stmt->bindValue($identifier, $this->millesime, PDO::PARAM_STR);
                        break;
                    case '`Libelle_tranche_budgetaire`':						
                        $stmt->bindValue($identifier, $this->libelle_tranche_budgetaire, PDO::PARAM_STR);
                        break;
                    case '`borne_inf`':						
                        $stmt->bindValue($identifier, $this->borne_inf, PDO::PARAM_STR);
                        break;
                    case '`borne_sup`':						
                        $stmt->bindValue($identifier, $this->borne_sup, PDO::PARAM_STR);
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


            if (($retval = CommonTrancheArticle133Peer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTrancheArticle133Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAcronymeOrg();
                break;
            case 2:
                return $this->getMillesime();
                break;
            case 3:
                return $this->getLibelleTrancheBudgetaire();
                break;
            case 4:
                return $this->getBorneInf();
                break;
            case 5:
                return $this->getBorneSup();
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
        if (isset($alreadyDumpedObjects['CommonTrancheArticle133'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTrancheArticle133'][$this->getPrimaryKey()] = true;
        $keys = CommonTrancheArticle133Peer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getAcronymeOrg(),
            $keys[2] => $this->getMillesime(),
            $keys[3] => $this->getLibelleTrancheBudgetaire(),
            $keys[4] => $this->getBorneInf(),
            $keys[5] => $this->getBorneSup(),
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
        $pos = CommonTrancheArticle133Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAcronymeOrg($value);
                break;
            case 2:
                $this->setMillesime($value);
                break;
            case 3:
                $this->setLibelleTrancheBudgetaire($value);
                break;
            case 4:
                $this->setBorneInf($value);
                break;
            case 5:
                $this->setBorneSup($value);
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
        $keys = CommonTrancheArticle133Peer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAcronymeOrg($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMillesime($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleTrancheBudgetaire($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBorneInf($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setBorneSup($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTrancheArticle133Peer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTrancheArticle133Peer::ID)) $criteria->add(CommonTrancheArticle133Peer::ID, $this->id);
        if ($this->isColumnModified(CommonTrancheArticle133Peer::ACRONYME_ORG)) $criteria->add(CommonTrancheArticle133Peer::ACRONYME_ORG, $this->acronyme_org);
        if ($this->isColumnModified(CommonTrancheArticle133Peer::MILLESIME)) $criteria->add(CommonTrancheArticle133Peer::MILLESIME, $this->millesime);
        if ($this->isColumnModified(CommonTrancheArticle133Peer::LIBELLE_TRANCHE_BUDGETAIRE)) $criteria->add(CommonTrancheArticle133Peer::LIBELLE_TRANCHE_BUDGETAIRE, $this->libelle_tranche_budgetaire);
        if ($this->isColumnModified(CommonTrancheArticle133Peer::BORNE_INF)) $criteria->add(CommonTrancheArticle133Peer::BORNE_INF, $this->borne_inf);
        if ($this->isColumnModified(CommonTrancheArticle133Peer::BORNE_SUP)) $criteria->add(CommonTrancheArticle133Peer::BORNE_SUP, $this->borne_sup);

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
        $criteria = new Criteria(CommonTrancheArticle133Peer::DATABASE_NAME);
        $criteria->add(CommonTrancheArticle133Peer::ID, $this->id);

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
     * @param object $copyObj An object of CommonTrancheArticle133 (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAcronymeOrg($this->getAcronymeOrg());
        $copyObj->setMillesime($this->getMillesime());
        $copyObj->setLibelleTrancheBudgetaire($this->getLibelleTrancheBudgetaire());
        $copyObj->setBorneInf($this->getBorneInf());
        $copyObj->setBorneSup($this->getBorneSup());
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
     * @return CommonTrancheArticle133 Clone of current object.
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
     * @return CommonTrancheArticle133Peer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTrancheArticle133Peer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->acronyme_org = null;
        $this->millesime = null;
        $this->libelle_tranche_budgetaire = null;
        $this->borne_inf = null;
        $this->borne_sup = null;
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
        return (string) $this->exportTo(CommonTrancheArticle133Peer::DEFAULT_STRING_FORMAT);
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
