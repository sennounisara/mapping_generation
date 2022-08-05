<?php


/**
 * Base class that represents a row from the 't_liaison_demande' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTLiaisonDemande extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TLiaisonDemandePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TLiaisonDemandePeer
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
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

    /**
     * The value for the id_demande_lie field.
     * @var        int
     */
    protected $id_demande_lie;

    /**
     * The value for the type_relation field.
     * @var        int
     */
    protected $type_relation;

    /**
     * The value for the numero_demande_lie field.
     * @var        string
     */
    protected $numero_demande_lie;

    /**
     * The value for the num_demande field.
     * @var        string
     */
    protected $num_demande;

    /**
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the id_affaire field.
     * @var        int
     */
    protected $id_affaire;

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
     * Get the [id_demande] column value.
     * 
     * @return int
     */
    public function getIdDemande()
    {

        return $this->id_demande;
    }

    /**
     * Get the [id_demande_lie] column value.
     * 
     * @return int
     */
    public function getIdDemandeLie()
    {

        return $this->id_demande_lie;
    }

    /**
     * Get the [type_relation] column value.
     * 
     * @return int
     */
    public function getTypeRelation()
    {

        return $this->type_relation;
    }

    /**
     * Get the [numero_demande_lie] column value.
     * 
     * @return string
     */
    public function getNumeroDemandeLie()
    {

        return $this->numero_demande_lie;
    }

    /**
     * Get the [num_demande] column value.
     * 
     * @return string
     */
    public function getNumDemande()
    {

        return $this->num_demande;
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
     * Get the [id_affaire] column value.
     * 
     * @return int
     */
    public function getIdAffaire()
    {

        return $this->id_affaire;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return TLiaisonDemande The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = TLiaisonDemandePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return TLiaisonDemande The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = TLiaisonDemandePeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Set the value of [id_demande_lie] column.
     * 
     * @param int $v new value
     * @return TLiaisonDemande The current object (for fluent API support)
     */
    public function setIdDemandeLie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande_lie !== $v) {
            $this->id_demande_lie = $v;
            $this->modifiedColumns[] = TLiaisonDemandePeer::ID_DEMANDE_LIE;
        }


        return $this;
    } // setIdDemandeLie()

    /**
     * Set the value of [type_relation] column.
     * 
     * @param int $v new value
     * @return TLiaisonDemande The current object (for fluent API support)
     */
    public function setTypeRelation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_relation !== $v) {
            $this->type_relation = $v;
            $this->modifiedColumns[] = TLiaisonDemandePeer::TYPE_RELATION;
        }


        return $this;
    } // setTypeRelation()

    /**
     * Set the value of [numero_demande_lie] column.
     * 
     * @param string $v new value
     * @return TLiaisonDemande The current object (for fluent API support)
     */
    public function setNumeroDemandeLie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_demande_lie !== $v) {
            $this->numero_demande_lie = $v;
            $this->modifiedColumns[] = TLiaisonDemandePeer::NUMERO_DEMANDE_LIE;
        }


        return $this;
    } // setNumeroDemandeLie()

    /**
     * Set the value of [num_demande] column.
     * 
     * @param string $v new value
     * @return TLiaisonDemande The current object (for fluent API support)
     */
    public function setNumDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_demande !== $v) {
            $this->num_demande = $v;
            $this->modifiedColumns[] = TLiaisonDemandePeer::NUM_DEMANDE;
        }


        return $this;
    } // setNumDemande()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return TLiaisonDemande The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = TLiaisonDemandePeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [id_affaire] column.
     * 
     * @param int $v new value
     * @return TLiaisonDemande The current object (for fluent API support)
     */
    public function setIdAffaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_affaire !== $v) {
            $this->id_affaire = $v;
            $this->modifiedColumns[] = TLiaisonDemandePeer::ID_AFFAIRE;
        }


        return $this;
    } // setIdAffaire()

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
            $this->id_demande = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_demande_lie = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->type_relation = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->numero_demande_lie = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->num_demande = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->id_agent = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_affaire = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = TLiaisonDemandePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TLiaisonDemande object", $e);
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
            $con = Propel::getConnection(TLiaisonDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TLiaisonDemandePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TLiaisonDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TLiaisonDemandeQuery::create()
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
            $con = Propel::getConnection(TLiaisonDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TLiaisonDemandePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TLiaisonDemandePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TLiaisonDemandePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TLiaisonDemandePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(TLiaisonDemandePeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(TLiaisonDemandePeer::ID_DEMANDE_LIE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE_LIE`';
        }
        if ($this->isColumnModified(TLiaisonDemandePeer::TYPE_RELATION)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_RELATION`';
        }
        if ($this->isColumnModified(TLiaisonDemandePeer::NUMERO_DEMANDE_LIE)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_DEMANDE_LIE`';
        }
        if ($this->isColumnModified(TLiaisonDemandePeer::NUM_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`NUM_DEMANDE`';
        }
        if ($this->isColumnModified(TLiaisonDemandePeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT`';
        }
        if ($this->isColumnModified(TLiaisonDemandePeer::ID_AFFAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AFFAIRE`';
        }

        $sql = sprintf(
            'INSERT INTO `t_liaison_demande` (%s) VALUES (%s)',
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
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_DEMANDE_LIE`':						
                        $stmt->bindValue($identifier, $this->id_demande_lie, PDO::PARAM_INT);
                        break;
                    case '`TYPE_RELATION`':						
                        $stmt->bindValue($identifier, $this->type_relation, PDO::PARAM_INT);
                        break;
                    case '`NUMERO_DEMANDE_LIE`':						
                        $stmt->bindValue($identifier, $this->numero_demande_lie, PDO::PARAM_STR);
                        break;
                    case '`NUM_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->num_demande, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`ID_AFFAIRE`':						
                        $stmt->bindValue($identifier, $this->id_affaire, PDO::PARAM_INT);
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


            if (($retval = TLiaisonDemandePeer::doValidate($this, $columns)) !== true) {
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
        $pos = TLiaisonDemandePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDemande();
                break;
            case 2:
                return $this->getIdDemandeLie();
                break;
            case 3:
                return $this->getTypeRelation();
                break;
            case 4:
                return $this->getNumeroDemandeLie();
                break;
            case 5:
                return $this->getNumDemande();
                break;
            case 6:
                return $this->getIdAgent();
                break;
            case 7:
                return $this->getIdAffaire();
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
        if (isset($alreadyDumpedObjects['TLiaisonDemande'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TLiaisonDemande'][$this->getPrimaryKey()] = true;
        $keys = TLiaisonDemandePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdDemande(),
            $keys[2] => $this->getIdDemandeLie(),
            $keys[3] => $this->getTypeRelation(),
            $keys[4] => $this->getNumeroDemandeLie(),
            $keys[5] => $this->getNumDemande(),
            $keys[6] => $this->getIdAgent(),
            $keys[7] => $this->getIdAffaire(),
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
        $pos = TLiaisonDemandePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDemande($value);
                break;
            case 2:
                $this->setIdDemandeLie($value);
                break;
            case 3:
                $this->setTypeRelation($value);
                break;
            case 4:
                $this->setNumeroDemandeLie($value);
                break;
            case 5:
                $this->setNumDemande($value);
                break;
            case 6:
                $this->setIdAgent($value);
                break;
            case 7:
                $this->setIdAffaire($value);
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
        $keys = TLiaisonDemandePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdDemande($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdDemandeLie($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTypeRelation($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNumeroDemandeLie($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNumDemande($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdAgent($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdAffaire($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TLiaisonDemandePeer::DATABASE_NAME);

        if ($this->isColumnModified(TLiaisonDemandePeer::ID)) $criteria->add(TLiaisonDemandePeer::ID, $this->id);
        if ($this->isColumnModified(TLiaisonDemandePeer::ID_DEMANDE)) $criteria->add(TLiaisonDemandePeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(TLiaisonDemandePeer::ID_DEMANDE_LIE)) $criteria->add(TLiaisonDemandePeer::ID_DEMANDE_LIE, $this->id_demande_lie);
        if ($this->isColumnModified(TLiaisonDemandePeer::TYPE_RELATION)) $criteria->add(TLiaisonDemandePeer::TYPE_RELATION, $this->type_relation);
        if ($this->isColumnModified(TLiaisonDemandePeer::NUMERO_DEMANDE_LIE)) $criteria->add(TLiaisonDemandePeer::NUMERO_DEMANDE_LIE, $this->numero_demande_lie);
        if ($this->isColumnModified(TLiaisonDemandePeer::NUM_DEMANDE)) $criteria->add(TLiaisonDemandePeer::NUM_DEMANDE, $this->num_demande);
        if ($this->isColumnModified(TLiaisonDemandePeer::ID_AGENT)) $criteria->add(TLiaisonDemandePeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(TLiaisonDemandePeer::ID_AFFAIRE)) $criteria->add(TLiaisonDemandePeer::ID_AFFAIRE, $this->id_affaire);

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
        $criteria = new Criteria(TLiaisonDemandePeer::DATABASE_NAME);
        $criteria->add(TLiaisonDemandePeer::ID, $this->id);

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
     * @param object $copyObj An object of TLiaisonDemande (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setIdDemandeLie($this->getIdDemandeLie());
        $copyObj->setTypeRelation($this->getTypeRelation());
        $copyObj->setNumeroDemandeLie($this->getNumeroDemandeLie());
        $copyObj->setNumDemande($this->getNumDemande());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setIdAffaire($this->getIdAffaire());
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
     * @return TLiaisonDemande Clone of current object.
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
     * @return TLiaisonDemandePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TLiaisonDemandePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_demande = null;
        $this->id_demande_lie = null;
        $this->type_relation = null;
        $this->numero_demande_lie = null;
        $this->num_demande = null;
        $this->id_agent = null;
        $this->id_affaire = null;
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
        return (string) $this->exportTo(TLiaisonDemandePeer::DEFAULT_STRING_FORMAT);
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
