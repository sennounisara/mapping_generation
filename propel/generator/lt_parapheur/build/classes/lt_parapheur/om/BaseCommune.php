<?php


/**
 * Base class that represents a row from the 'commune' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommune extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommunePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommunePeer
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
     * The value for the id_province field.
     * @var        int
     */
    protected $id_province;

    /**
     * The value for the nom_commune_fr field.
     * @var        string
     */
    protected $nom_commune_fr;

    /**
     * The value for the nom_commune_ar field.
     * @var        string
     */
    protected $nom_commune_ar;

    /**
     * The value for the latitude_commune field.
     * @var        string
     */
    protected $latitude_commune;

    /**
     * The value for the logitude_commune field.
     * @var        string
     */
    protected $logitude_commune;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the id_externe field.
     * @var        int
     */
    protected $id_externe;

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
     * Get the [id_province] column value.
     * 
     * @return int
     */
    public function getIdProvince()
    {

        return $this->id_province;
    }

    /**
     * Get the [nom_commune_fr] column value.
     * 
     * @return string
     */
    public function getNomCommuneFr()
    {

        return $this->nom_commune_fr;
    }

    /**
     * Get the [nom_commune_ar] column value.
     * 
     * @return string
     */
    public function getNomCommuneAr()
    {

        return $this->nom_commune_ar;
    }

    /**
     * Get the [latitude_commune] column value.
     * 
     * @return string
     */
    public function getLatitudeCommune()
    {

        return $this->latitude_commune;
    }

    /**
     * Get the [logitude_commune] column value.
     * 
     * @return string
     */
    public function getLogitudeCommune()
    {

        return $this->logitude_commune;
    }

    /**
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Get the [id_externe] column value.
     * 
     * @return int
     */
    public function getIdExterne()
    {

        return $this->id_externe;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return Commune The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommunePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_province] column.
     * 
     * @param int $v new value
     * @return Commune The current object (for fluent API support)
     */
    public function setIdProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_province !== $v) {
            $this->id_province = $v;
            $this->modifiedColumns[] = CommunePeer::ID_PROVINCE;
        }


        return $this;
    } // setIdProvince()

    /**
     * Set the value of [nom_commune_fr] column.
     * 
     * @param string $v new value
     * @return Commune The current object (for fluent API support)
     */
    public function setNomCommuneFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_commune_fr !== $v) {
            $this->nom_commune_fr = $v;
            $this->modifiedColumns[] = CommunePeer::NOM_COMMUNE_FR;
        }


        return $this;
    } // setNomCommuneFr()

    /**
     * Set the value of [nom_commune_ar] column.
     * 
     * @param string $v new value
     * @return Commune The current object (for fluent API support)
     */
    public function setNomCommuneAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_commune_ar !== $v) {
            $this->nom_commune_ar = $v;
            $this->modifiedColumns[] = CommunePeer::NOM_COMMUNE_AR;
        }


        return $this;
    } // setNomCommuneAr()

    /**
     * Set the value of [latitude_commune] column.
     * 
     * @param string $v new value
     * @return Commune The current object (for fluent API support)
     */
    public function setLatitudeCommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->latitude_commune !== $v) {
            $this->latitude_commune = $v;
            $this->modifiedColumns[] = CommunePeer::LATITUDE_COMMUNE;
        }


        return $this;
    } // setLatitudeCommune()

    /**
     * Set the value of [logitude_commune] column.
     * 
     * @param string $v new value
     * @return Commune The current object (for fluent API support)
     */
    public function setLogitudeCommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->logitude_commune !== $v) {
            $this->logitude_commune = $v;
            $this->modifiedColumns[] = CommunePeer::LOGITUDE_COMMUNE;
        }


        return $this;
    } // setLogitudeCommune()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return Commune The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = CommunePeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [id_externe] column.
     * 
     * @param int $v new value
     * @return Commune The current object (for fluent API support)
     */
    public function setIdExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_externe !== $v) {
            $this->id_externe = $v;
            $this->modifiedColumns[] = CommunePeer::ID_EXTERNE;
        }


        return $this;
    } // setIdExterne()

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
            $this->id_province = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->nom_commune_fr = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->nom_commune_ar = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->latitude_commune = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->logitude_commune = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->id_entite = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_externe = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = CommunePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Commune object", $e);
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
            $con = Propel::getConnection(CommunePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommunePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommunePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommuneQuery::create()
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
            $con = Propel::getConnection(CommunePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommunePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommunePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommunePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommunePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(CommunePeer::ID_PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PROVINCE`';
        }
        if ($this->isColumnModified(CommunePeer::NOM_COMMUNE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_COMMUNE_FR`';
        }
        if ($this->isColumnModified(CommunePeer::NOM_COMMUNE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_COMMUNE_AR`';
        }
        if ($this->isColumnModified(CommunePeer::LATITUDE_COMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`LATITUDE_COMMUNE`';
        }
        if ($this->isColumnModified(CommunePeer::LOGITUDE_COMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`LOGITUDE_COMMUNE`';
        }
        if ($this->isColumnModified(CommunePeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(CommunePeer::ID_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_EXTERNE`';
        }

        $sql = sprintf(
            'INSERT INTO `commune` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`ID_PROVINCE`':						
                        $stmt->bindValue($identifier, $this->id_province, PDO::PARAM_INT);
                        break;
                    case '`NOM_COMMUNE_FR`':						
                        $stmt->bindValue($identifier, $this->nom_commune_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_COMMUNE_AR`':						
                        $stmt->bindValue($identifier, $this->nom_commune_ar, PDO::PARAM_STR);
                        break;
                    case '`LATITUDE_COMMUNE`':						
                        $stmt->bindValue($identifier, $this->latitude_commune, PDO::PARAM_STR);
                        break;
                    case '`LOGITUDE_COMMUNE`':						
                        $stmt->bindValue($identifier, $this->logitude_commune, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`ID_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->id_externe, PDO::PARAM_INT);
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


            if (($retval = CommunePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommunePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdProvince();
                break;
            case 2:
                return $this->getNomCommuneFr();
                break;
            case 3:
                return $this->getNomCommuneAr();
                break;
            case 4:
                return $this->getLatitudeCommune();
                break;
            case 5:
                return $this->getLogitudeCommune();
                break;
            case 6:
                return $this->getIdEntite();
                break;
            case 7:
                return $this->getIdExterne();
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
        if (isset($alreadyDumpedObjects['Commune'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Commune'][$this->getPrimaryKey()] = true;
        $keys = CommunePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdProvince(),
            $keys[2] => $this->getNomCommuneFr(),
            $keys[3] => $this->getNomCommuneAr(),
            $keys[4] => $this->getLatitudeCommune(),
            $keys[5] => $this->getLogitudeCommune(),
            $keys[6] => $this->getIdEntite(),
            $keys[7] => $this->getIdExterne(),
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
        $pos = CommunePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdProvince($value);
                break;
            case 2:
                $this->setNomCommuneFr($value);
                break;
            case 3:
                $this->setNomCommuneAr($value);
                break;
            case 4:
                $this->setLatitudeCommune($value);
                break;
            case 5:
                $this->setLogitudeCommune($value);
                break;
            case 6:
                $this->setIdEntite($value);
                break;
            case 7:
                $this->setIdExterne($value);
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
        $keys = CommunePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdProvince($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNomCommuneFr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNomCommuneAr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLatitudeCommune($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLogitudeCommune($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdEntite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdExterne($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommunePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommunePeer::ID)) $criteria->add(CommunePeer::ID, $this->id);
        if ($this->isColumnModified(CommunePeer::ID_PROVINCE)) $criteria->add(CommunePeer::ID_PROVINCE, $this->id_province);
        if ($this->isColumnModified(CommunePeer::NOM_COMMUNE_FR)) $criteria->add(CommunePeer::NOM_COMMUNE_FR, $this->nom_commune_fr);
        if ($this->isColumnModified(CommunePeer::NOM_COMMUNE_AR)) $criteria->add(CommunePeer::NOM_COMMUNE_AR, $this->nom_commune_ar);
        if ($this->isColumnModified(CommunePeer::LATITUDE_COMMUNE)) $criteria->add(CommunePeer::LATITUDE_COMMUNE, $this->latitude_commune);
        if ($this->isColumnModified(CommunePeer::LOGITUDE_COMMUNE)) $criteria->add(CommunePeer::LOGITUDE_COMMUNE, $this->logitude_commune);
        if ($this->isColumnModified(CommunePeer::ID_ENTITE)) $criteria->add(CommunePeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(CommunePeer::ID_EXTERNE)) $criteria->add(CommunePeer::ID_EXTERNE, $this->id_externe);

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
        $criteria = new Criteria(CommunePeer::DATABASE_NAME);
        $criteria->add(CommunePeer::ID, $this->id);

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
     * @param object $copyObj An object of Commune (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdProvince($this->getIdProvince());
        $copyObj->setNomCommuneFr($this->getNomCommuneFr());
        $copyObj->setNomCommuneAr($this->getNomCommuneAr());
        $copyObj->setLatitudeCommune($this->getLatitudeCommune());
        $copyObj->setLogitudeCommune($this->getLogitudeCommune());
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setIdExterne($this->getIdExterne());
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
     * @return Commune Clone of current object.
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
     * @return CommunePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommunePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_province = null;
        $this->nom_commune_fr = null;
        $this->nom_commune_ar = null;
        $this->latitude_commune = null;
        $this->logitude_commune = null;
        $this->id_entite = null;
        $this->id_externe = null;
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
        return (string) $this->exportTo(CommunePeer::DEFAULT_STRING_FORMAT);
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
