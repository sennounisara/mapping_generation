<?php


/**
 * Base class that represents a row from the 'ItemCritereEvaluation' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonItemCritereEvaluation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonItemCritereEvaluationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonItemCritereEvaluationPeer
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
     * The value for the idcritereevaluation field.
     * @var        int
     */
    protected $idcritereevaluation;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the prix field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $prix;

    /**
     * The value for the quantite field.
     * @var        int
     */
    protected $quantite;

    /**
     * The value for the ponderation field.
     * @var        int
     */
    protected $ponderation;

    /**
     * The value for the numero field.
     * @var        int
     */
    protected $numero;

    /**
     * The value for the regle_evaluation field.
     * @var        int
     */
    protected $regle_evaluation;

    /**
     * The value for the type_item field.
     * @var        int
     */
    protected $type_item;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->prix = '0';
    }

    /**
     * Initializes internal state of BaseCommonItemCritereEvaluation object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

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
     * Get the [idcritereevaluation] column value.
     * 
     * @return int
     */
    public function getIdcritereevaluation()
    {

        return $this->idcritereevaluation;
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
     * Get the [prix] column value.
     * 
     * @return string
     */
    public function getPrix()
    {

        return $this->prix;
    }

    /**
     * Get the [quantite] column value.
     * 
     * @return int
     */
    public function getQuantite()
    {

        return $this->quantite;
    }

    /**
     * Get the [ponderation] column value.
     * 
     * @return int
     */
    public function getPonderation()
    {

        return $this->ponderation;
    }

    /**
     * Get the [numero] column value.
     * 
     * @return int
     */
    public function getNumero()
    {

        return $this->numero;
    }

    /**
     * Get the [regle_evaluation] column value.
     * 
     * @return int
     */
    public function getRegleEvaluation()
    {

        return $this->regle_evaluation;
    }

    /**
     * Get the [type_item] column value.
     * 
     * @return int
     */
    public function getTypeItem()
    {

        return $this->type_item;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonItemCritereEvaluation The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonItemCritereEvaluationPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [idcritereevaluation] column.
     * 
     * @param int $v new value
     * @return CommonItemCritereEvaluation The current object (for fluent API support)
     */
    public function setIdcritereevaluation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcritereevaluation !== $v) {
            $this->idcritereevaluation = $v;
            $this->modifiedColumns[] = CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION;
        }


        return $this;
    } // setIdcritereevaluation()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonItemCritereEvaluation The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonItemCritereEvaluationPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [prix] column.
     * 
     * @param string $v new value
     * @return CommonItemCritereEvaluation The current object (for fluent API support)
     */
    public function setPrix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prix !== $v) {
            $this->prix = $v;
            $this->modifiedColumns[] = CommonItemCritereEvaluationPeer::PRIX;
        }


        return $this;
    } // setPrix()

    /**
     * Set the value of [quantite] column.
     * 
     * @param int $v new value
     * @return CommonItemCritereEvaluation The current object (for fluent API support)
     */
    public function setQuantite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->quantite !== $v) {
            $this->quantite = $v;
            $this->modifiedColumns[] = CommonItemCritereEvaluationPeer::QUANTITE;
        }


        return $this;
    } // setQuantite()

    /**
     * Set the value of [ponderation] column.
     * 
     * @param int $v new value
     * @return CommonItemCritereEvaluation The current object (for fluent API support)
     */
    public function setPonderation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ponderation !== $v) {
            $this->ponderation = $v;
            $this->modifiedColumns[] = CommonItemCritereEvaluationPeer::PONDERATION;
        }


        return $this;
    } // setPonderation()

    /**
     * Set the value of [numero] column.
     * 
     * @param int $v new value
     * @return CommonItemCritereEvaluation The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonItemCritereEvaluationPeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [regle_evaluation] column.
     * 
     * @param int $v new value
     * @return CommonItemCritereEvaluation The current object (for fluent API support)
     */
    public function setRegleEvaluation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->regle_evaluation !== $v) {
            $this->regle_evaluation = $v;
            $this->modifiedColumns[] = CommonItemCritereEvaluationPeer::REGLE_EVALUATION;
        }


        return $this;
    } // setRegleEvaluation()

    /**
     * Set the value of [type_item] column.
     * 
     * @param int $v new value
     * @return CommonItemCritereEvaluation The current object (for fluent API support)
     */
    public function setTypeItem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_item !== $v) {
            $this->type_item = $v;
            $this->modifiedColumns[] = CommonItemCritereEvaluationPeer::TYPE_ITEM;
        }


        return $this;
    } // setTypeItem()

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
            if ($this->prix !== '0') {
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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idcritereevaluation = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->prix = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->quantite = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->ponderation = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->numero = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->regle_evaluation = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->type_item = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = CommonItemCritereEvaluationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonItemCritereEvaluation object", $e);
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
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonItemCritereEvaluationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonItemCritereEvaluationQuery::create()
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
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonItemCritereEvaluationPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonItemCritereEvaluationPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonItemCritereEvaluationPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION)) {
            $modifiedColumns[':p' . $index++]  = '`idCritereEvaluation`';
        }
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::PRIX)) {
            $modifiedColumns[':p' . $index++]  = '`prix`';
        }
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::QUANTITE)) {
            $modifiedColumns[':p' . $index++]  = '`quantite`';
        }
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::PONDERATION)) {
            $modifiedColumns[':p' . $index++]  = '`ponderation`';
        }
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::REGLE_EVALUATION)) {
            $modifiedColumns[':p' . $index++]  = '`regle_evaluation`';
        }
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::TYPE_ITEM)) {
            $modifiedColumns[':p' . $index++]  = '`type_item`';
        }

        $sql = sprintf(
            'INSERT INTO `ItemCritereEvaluation` (%s) VALUES (%s)',
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
                    case '`idCritereEvaluation`':						
                        $stmt->bindValue($identifier, $this->idcritereevaluation, PDO::PARAM_INT);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`prix`':						
                        $stmt->bindValue($identifier, $this->prix, PDO::PARAM_STR);
                        break;
                    case '`quantite`':						
                        $stmt->bindValue($identifier, $this->quantite, PDO::PARAM_INT);
                        break;
                    case '`ponderation`':						
                        $stmt->bindValue($identifier, $this->ponderation, PDO::PARAM_INT);
                        break;
                    case '`numero`':						
                        $stmt->bindValue($identifier, $this->numero, PDO::PARAM_INT);
                        break;
                    case '`regle_evaluation`':						
                        $stmt->bindValue($identifier, $this->regle_evaluation, PDO::PARAM_INT);
                        break;
                    case '`type_item`':						
                        $stmt->bindValue($identifier, $this->type_item, PDO::PARAM_INT);
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


            if (($retval = CommonItemCritereEvaluationPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonItemCritereEvaluationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcritereevaluation();
                break;
            case 2:
                return $this->getLibelle();
                break;
            case 3:
                return $this->getPrix();
                break;
            case 4:
                return $this->getQuantite();
                break;
            case 5:
                return $this->getPonderation();
                break;
            case 6:
                return $this->getNumero();
                break;
            case 7:
                return $this->getRegleEvaluation();
                break;
            case 8:
                return $this->getTypeItem();
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
        if (isset($alreadyDumpedObjects['CommonItemCritereEvaluation'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonItemCritereEvaluation'][$this->getPrimaryKey()] = true;
        $keys = CommonItemCritereEvaluationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdcritereevaluation(),
            $keys[2] => $this->getLibelle(),
            $keys[3] => $this->getPrix(),
            $keys[4] => $this->getQuantite(),
            $keys[5] => $this->getPonderation(),
            $keys[6] => $this->getNumero(),
            $keys[7] => $this->getRegleEvaluation(),
            $keys[8] => $this->getTypeItem(),
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
        $pos = CommonItemCritereEvaluationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcritereevaluation($value);
                break;
            case 2:
                $this->setLibelle($value);
                break;
            case 3:
                $this->setPrix($value);
                break;
            case 4:
                $this->setQuantite($value);
                break;
            case 5:
                $this->setPonderation($value);
                break;
            case 6:
                $this->setNumero($value);
                break;
            case 7:
                $this->setRegleEvaluation($value);
                break;
            case 8:
                $this->setTypeItem($value);
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
        $keys = CommonItemCritereEvaluationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdcritereevaluation($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPrix($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setQuantite($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPonderation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNumero($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRegleEvaluation($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTypeItem($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonItemCritereEvaluationPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::ID)) $criteria->add(CommonItemCritereEvaluationPeer::ID, $this->id);
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION)) $criteria->add(CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION, $this->idcritereevaluation);
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::LIBELLE)) $criteria->add(CommonItemCritereEvaluationPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::PRIX)) $criteria->add(CommonItemCritereEvaluationPeer::PRIX, $this->prix);
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::QUANTITE)) $criteria->add(CommonItemCritereEvaluationPeer::QUANTITE, $this->quantite);
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::PONDERATION)) $criteria->add(CommonItemCritereEvaluationPeer::PONDERATION, $this->ponderation);
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::NUMERO)) $criteria->add(CommonItemCritereEvaluationPeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::REGLE_EVALUATION)) $criteria->add(CommonItemCritereEvaluationPeer::REGLE_EVALUATION, $this->regle_evaluation);
        if ($this->isColumnModified(CommonItemCritereEvaluationPeer::TYPE_ITEM)) $criteria->add(CommonItemCritereEvaluationPeer::TYPE_ITEM, $this->type_item);

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
        $criteria = new Criteria(CommonItemCritereEvaluationPeer::DATABASE_NAME);
        $criteria->add(CommonItemCritereEvaluationPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonItemCritereEvaluation (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdcritereevaluation($this->getIdcritereevaluation());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setPrix($this->getPrix());
        $copyObj->setQuantite($this->getQuantite());
        $copyObj->setPonderation($this->getPonderation());
        $copyObj->setNumero($this->getNumero());
        $copyObj->setRegleEvaluation($this->getRegleEvaluation());
        $copyObj->setTypeItem($this->getTypeItem());
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
     * @return CommonItemCritereEvaluation Clone of current object.
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
     * @return CommonItemCritereEvaluationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonItemCritereEvaluationPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->idcritereevaluation = null;
        $this->libelle = null;
        $this->prix = null;
        $this->quantite = null;
        $this->ponderation = null;
        $this->numero = null;
        $this->regle_evaluation = null;
        $this->type_item = null;
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
        return (string) $this->exportTo(CommonItemCritereEvaluationPeer::DEFAULT_STRING_FORMAT);
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
