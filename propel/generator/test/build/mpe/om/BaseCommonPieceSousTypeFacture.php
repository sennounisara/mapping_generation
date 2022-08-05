<?php


/**
 * Base class that represents a row from the 'piece_sous_type_facture' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonPieceSousTypeFacture extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonPieceSousTypeFacturePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonPieceSousTypeFacturePeer
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
     * The value for the id_sous_type field.
     * @var        int
     */
    protected $id_sous_type;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the nom_fichier field.
     * @var        string
     */
    protected $nom_fichier;

    /**
     * @var        CommonSousTypeFacture
     */
    protected $aCommonSousTypeFacture;

    /**
     * @var        PropelObjectCollection|CommonFacturePieceJointe[] Collection to store aggregation of CommonFacturePieceJointe objects.
     */
    protected $collCommonFacturePieceJointes;
    protected $collCommonFacturePieceJointesPartial;

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
    protected $commonFacturePieceJointesScheduledForDeletion = null;

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
     * Get the [id_sous_type] column value.
     * 
     * @return int
     */
    public function getIdSousType()
    {

        return $this->id_sous_type;
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
     * Get the [nom_fichier] column value.
     * 
     * @return string
     */
    public function getNomFichier()
    {

        return $this->nom_fichier;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonPieceSousTypeFacture The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonPieceSousTypeFacturePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_sous_type] column.
     * 
     * @param int $v new value
     * @return CommonPieceSousTypeFacture The current object (for fluent API support)
     */
    public function setIdSousType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_sous_type !== $v) {
            $this->id_sous_type = $v;
            $this->modifiedColumns[] = CommonPieceSousTypeFacturePeer::ID_SOUS_TYPE;
        }

        if ($this->aCommonSousTypeFacture !== null && $this->aCommonSousTypeFacture->getId() !== $v) {
            $this->aCommonSousTypeFacture = null;
        }


        return $this;
    } // setIdSousType()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonPieceSousTypeFacture The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonPieceSousTypeFacturePeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return CommonPieceSousTypeFacture The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = CommonPieceSousTypeFacturePeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

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
            $this->id_sous_type = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->nom_fichier = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 4; // 4 = CommonPieceSousTypeFacturePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonPieceSousTypeFacture object", $e);
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

        if ($this->aCommonSousTypeFacture !== null && $this->id_sous_type !== $this->aCommonSousTypeFacture->getId()) {
            $this->aCommonSousTypeFacture = null;
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
            $con = Propel::getConnection(CommonPieceSousTypeFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonPieceSousTypeFacturePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonSousTypeFacture = null;
            $this->collCommonFacturePieceJointes = null;

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
            $con = Propel::getConnection(CommonPieceSousTypeFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonPieceSousTypeFactureQuery::create()
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
            $con = Propel::getConnection(CommonPieceSousTypeFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonPieceSousTypeFacturePeer::addInstanceToPool($this);
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

            if ($this->aCommonSousTypeFacture !== null) {
                if ($this->aCommonSousTypeFacture->isModified() || $this->aCommonSousTypeFacture->isNew()) {
                    $affectedRows += $this->aCommonSousTypeFacture->save($con);
                }
                $this->setCommonSousTypeFacture($this->aCommonSousTypeFacture);
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

            if ($this->commonFacturePieceJointesScheduledForDeletion !== null) {
                if (!$this->commonFacturePieceJointesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonFacturePieceJointesScheduledForDeletion as $commonFacturePieceJointe) {
                        // need to save related object because we set the relation to null
                        $commonFacturePieceJointe->save($con);
                    }
                    $this->commonFacturePieceJointesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonFacturePieceJointes !== null) {
                foreach ($this->collCommonFacturePieceJointes as $referrerFK) {
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

        $this->modifiedColumns[] = CommonPieceSousTypeFacturePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonPieceSousTypeFacturePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonPieceSousTypeFacturePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonPieceSousTypeFacturePeer::ID_SOUS_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_sous_type`';
        }
        if ($this->isColumnModified(CommonPieceSousTypeFacturePeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonPieceSousTypeFacturePeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier`';
        }

        $sql = sprintf(
            'INSERT INTO `piece_sous_type_facture` (%s) VALUES (%s)',
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
                    case '`id_sous_type`':						
                        $stmt->bindValue($identifier, $this->id_sous_type, PDO::PARAM_INT);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`nom_fichier`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
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

            if ($this->aCommonSousTypeFacture !== null) {
                if (!$this->aCommonSousTypeFacture->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonSousTypeFacture->getValidationFailures());
                }
            }


            if (($retval = CommonPieceSousTypeFacturePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonFacturePieceJointes !== null) {
                    foreach ($this->collCommonFacturePieceJointes as $referrerFK) {
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
        $pos = CommonPieceSousTypeFacturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdSousType();
                break;
            case 2:
                return $this->getLibelle();
                break;
            case 3:
                return $this->getNomFichier();
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
        if (isset($alreadyDumpedObjects['CommonPieceSousTypeFacture'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonPieceSousTypeFacture'][$this->getPrimaryKey()] = true;
        $keys = CommonPieceSousTypeFacturePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdSousType(),
            $keys[2] => $this->getLibelle(),
            $keys[3] => $this->getNomFichier(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonSousTypeFacture) {
                $result['CommonSousTypeFacture'] = $this->aCommonSousTypeFacture->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonFacturePieceJointes) {
                $result['CommonFacturePieceJointes'] = $this->collCommonFacturePieceJointes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonPieceSousTypeFacturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdSousType($value);
                break;
            case 2:
                $this->setLibelle($value);
                break;
            case 3:
                $this->setNomFichier($value);
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
        $keys = CommonPieceSousTypeFacturePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdSousType($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNomFichier($arr[$keys[3]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonPieceSousTypeFacturePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonPieceSousTypeFacturePeer::ID)) $criteria->add(CommonPieceSousTypeFacturePeer::ID, $this->id);
        if ($this->isColumnModified(CommonPieceSousTypeFacturePeer::ID_SOUS_TYPE)) $criteria->add(CommonPieceSousTypeFacturePeer::ID_SOUS_TYPE, $this->id_sous_type);
        if ($this->isColumnModified(CommonPieceSousTypeFacturePeer::LIBELLE)) $criteria->add(CommonPieceSousTypeFacturePeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonPieceSousTypeFacturePeer::NOM_FICHIER)) $criteria->add(CommonPieceSousTypeFacturePeer::NOM_FICHIER, $this->nom_fichier);

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
        $criteria = new Criteria(CommonPieceSousTypeFacturePeer::DATABASE_NAME);
        $criteria->add(CommonPieceSousTypeFacturePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonPieceSousTypeFacture (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdSousType($this->getIdSousType());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setNomFichier($this->getNomFichier());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonFacturePieceJointes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonFacturePieceJointe($relObj->copy($deepCopy));
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
     * @return CommonPieceSousTypeFacture Clone of current object.
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
     * @return CommonPieceSousTypeFacturePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonPieceSousTypeFacturePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonSousTypeFacture object.
     *
     * @param   CommonSousTypeFacture $v
     * @return CommonPieceSousTypeFacture The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonSousTypeFacture(CommonSousTypeFacture $v = null)
    {
        if ($v === null) {
            $this->setIdSousType(NULL);
        } else {
            $this->setIdSousType($v->getId());
        }

        $this->aCommonSousTypeFacture = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonSousTypeFacture object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonPieceSousTypeFacture($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonSousTypeFacture object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonSousTypeFacture The associated CommonSousTypeFacture object.
     * @throws PropelException
     */
    public function getCommonSousTypeFacture(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonSousTypeFacture === null && ($this->id_sous_type !== null) && $doQuery) {
            $this->aCommonSousTypeFacture = CommonSousTypeFactureQuery::create()->findPk($this->id_sous_type, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonSousTypeFacture->addCommonPieceSousTypeFactures($this);
             */
        }

        return $this->aCommonSousTypeFacture;
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
        if ('CommonFacturePieceJointe' == $relationName) {
            $this->initCommonFacturePieceJointes();
        }
    }

    /**
     * Clears out the collCommonFacturePieceJointes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonPieceSousTypeFacture The current object (for fluent API support)
     * @see        addCommonFacturePieceJointes()
     */
    public function clearCommonFacturePieceJointes()
    {
        $this->collCommonFacturePieceJointes = null; // important to set this to null since that means it is uninitialized
        $this->collCommonFacturePieceJointesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonFacturePieceJointes collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonFacturePieceJointes($v = true)
    {
        $this->collCommonFacturePieceJointesPartial = $v;
    }

    /**
     * Initializes the collCommonFacturePieceJointes collection.
     *
     * By default this just sets the collCommonFacturePieceJointes collection to an empty array (like clearcollCommonFacturePieceJointes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonFacturePieceJointes($overrideExisting = true)
    {
        if (null !== $this->collCommonFacturePieceJointes && !$overrideExisting) {
            return;
        }
        $this->collCommonFacturePieceJointes = new PropelObjectCollection();
        $this->collCommonFacturePieceJointes->setModel('CommonFacturePieceJointe');
    }

    /**
     * Gets an array of CommonFacturePieceJointe objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonPieceSousTypeFacture is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonFacturePieceJointe[] List of CommonFacturePieceJointe objects
     * @throws PropelException
     */
    public function getCommonFacturePieceJointes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonFacturePieceJointesPartial && !$this->isNew();
        if (null === $this->collCommonFacturePieceJointes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonFacturePieceJointes) {
                // return empty collection
                $this->initCommonFacturePieceJointes();
            } else {
                $collCommonFacturePieceJointes = CommonFacturePieceJointeQuery::create(null, $criteria)
                    ->filterByCommonPieceSousTypeFacture($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonFacturePieceJointesPartial && count($collCommonFacturePieceJointes)) {
                      $this->initCommonFacturePieceJointes(false);

                      foreach ($collCommonFacturePieceJointes as $obj) {
                        if (false == $this->collCommonFacturePieceJointes->contains($obj)) {
                          $this->collCommonFacturePieceJointes->append($obj);
                        }
                      }

                      $this->collCommonFacturePieceJointesPartial = true;
                    }

                    $collCommonFacturePieceJointes->getInternalIterator()->rewind();

                    return $collCommonFacturePieceJointes;
                }

                if ($partial && $this->collCommonFacturePieceJointes) {
                    foreach ($this->collCommonFacturePieceJointes as $obj) {
                        if ($obj->isNew()) {
                            $collCommonFacturePieceJointes[] = $obj;
                        }
                    }
                }

                $this->collCommonFacturePieceJointes = $collCommonFacturePieceJointes;
                $this->collCommonFacturePieceJointesPartial = false;
            }
        }

        return $this->collCommonFacturePieceJointes;
    }

    /**
     * Sets a collection of CommonFacturePieceJointe objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonFacturePieceJointes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonPieceSousTypeFacture The current object (for fluent API support)
     */
    public function setCommonFacturePieceJointes(PropelCollection $commonFacturePieceJointes, PropelPDO $con = null)
    {
        $commonFacturePieceJointesToDelete = $this->getCommonFacturePieceJointes(new Criteria(), $con)->diff($commonFacturePieceJointes);


        $this->commonFacturePieceJointesScheduledForDeletion = $commonFacturePieceJointesToDelete;

        foreach ($commonFacturePieceJointesToDelete as $commonFacturePieceJointeRemoved) {
            $commonFacturePieceJointeRemoved->setCommonPieceSousTypeFacture(null);
        }

        $this->collCommonFacturePieceJointes = null;
        foreach ($commonFacturePieceJointes as $commonFacturePieceJointe) {
            $this->addCommonFacturePieceJointe($commonFacturePieceJointe);
        }

        $this->collCommonFacturePieceJointes = $commonFacturePieceJointes;
        $this->collCommonFacturePieceJointesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonFacturePieceJointe objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonFacturePieceJointe objects.
     * @throws PropelException
     */
    public function countCommonFacturePieceJointes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonFacturePieceJointesPartial && !$this->isNew();
        if (null === $this->collCommonFacturePieceJointes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonFacturePieceJointes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonFacturePieceJointes());
            }
            $query = CommonFacturePieceJointeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonPieceSousTypeFacture($this)
                ->count($con);
        }

        return count($this->collCommonFacturePieceJointes);
    }

    /**
     * Method called to associate a CommonFacturePieceJointe object to this object
     * through the CommonFacturePieceJointe foreign key attribute.
     *
     * @param   CommonFacturePieceJointe $l CommonFacturePieceJointe
     * @return CommonPieceSousTypeFacture The current object (for fluent API support)
     */
    public function addCommonFacturePieceJointe(CommonFacturePieceJointe $l)
    {
        if ($this->collCommonFacturePieceJointes === null) {
            $this->initCommonFacturePieceJointes();
            $this->collCommonFacturePieceJointesPartial = true;
        }
        if (!in_array($l, $this->collCommonFacturePieceJointes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonFacturePieceJointe($l);
        }

        return $this;
    }

    /**
     * @param	CommonFacturePieceJointe $commonFacturePieceJointe The commonFacturePieceJointe object to add.
     */
    protected function doAddCommonFacturePieceJointe($commonFacturePieceJointe)
    {
        $this->collCommonFacturePieceJointes[]= $commonFacturePieceJointe;
        $commonFacturePieceJointe->setCommonPieceSousTypeFacture($this);
    }

    /**
     * @param	CommonFacturePieceJointe $commonFacturePieceJointe The commonFacturePieceJointe object to remove.
     * @return CommonPieceSousTypeFacture The current object (for fluent API support)
     */
    public function removeCommonFacturePieceJointe($commonFacturePieceJointe)
    {
        if ($this->getCommonFacturePieceJointes()->contains($commonFacturePieceJointe)) {
            $this->collCommonFacturePieceJointes->remove($this->collCommonFacturePieceJointes->search($commonFacturePieceJointe));
            if (null === $this->commonFacturePieceJointesScheduledForDeletion) {
                $this->commonFacturePieceJointesScheduledForDeletion = clone $this->collCommonFacturePieceJointes;
                $this->commonFacturePieceJointesScheduledForDeletion->clear();
            }
            $this->commonFacturePieceJointesScheduledForDeletion[]= clone $commonFacturePieceJointe;
            $commonFacturePieceJointe->setCommonPieceSousTypeFacture(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonPieceSousTypeFacture is new, it will return
     * an empty collection; or if this CommonPieceSousTypeFacture has previously
     * been saved, it will retrieve related CommonFacturePieceJointes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonPieceSousTypeFacture.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonFacturePieceJointe[] List of CommonFacturePieceJointe objects
     */
    public function getCommonFacturePieceJointesJoinCommonFacturePieceJointeRelatedByIdFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonFacturePieceJointeQuery::create(null, $criteria);
        $query->joinWith('CommonFacturePieceJointeRelatedByIdFacture', $join_behavior);

        return $this->getCommonFacturePieceJointes($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_sous_type = null;
        $this->libelle = null;
        $this->nom_fichier = null;
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
            if ($this->collCommonFacturePieceJointes) {
                foreach ($this->collCommonFacturePieceJointes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonSousTypeFacture instanceof Persistent) {
              $this->aCommonSousTypeFacture->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonFacturePieceJointes instanceof PropelCollection) {
            $this->collCommonFacturePieceJointes->clearIterator();
        }
        $this->collCommonFacturePieceJointes = null;
        $this->aCommonSousTypeFacture = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonPieceSousTypeFacturePeer::DEFAULT_STRING_FORMAT);
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
