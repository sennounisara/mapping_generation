<?php


/**
 * Base class that represents a row from the 't_tranche' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTTranche extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTTranchePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTTranchePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_tranche field.
     * @var        int
     */
    protected $id_tranche;

    /**
     * The value for the id_forme_prix field.
     * @var        int
     */
    protected $id_forme_prix;

    /**
     * The value for the id_donnee_complementaire field.
     * @var        int
     */
    protected $id_donnee_complementaire;

    /**
     * The value for the nature_tranche field.
     * @var        string
     */
    protected $nature_tranche;

    /**
     * The value for the code_tranche field.
     * @var        int
     */
    protected $code_tranche;

    /**
     * The value for the intitule_tranche field.
     * @var        string
     */
    protected $intitule_tranche;

    /**
     * @var        CommonTDonneeComplementaire
     */
    protected $aCommonTDonneeComplementaire;

    /**
     * @var        CommonTFormePrix
     */
    protected $aCommonTFormePrix;

    /**
     * @var        PropelObjectCollection|CommonTLotTechniqueHasTranche[] Collection to store aggregation of CommonTLotTechniqueHasTranche objects.
     */
    protected $collCommonTLotTechniqueHasTranches;
    protected $collCommonTLotTechniqueHasTranchesPartial;

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
    protected $commonTLotTechniqueHasTranchesScheduledForDeletion = null;

    /**
     * Get the [id_tranche] column value.
     * 
     * @return int
     */
    public function getIdTranche()
    {

        return $this->id_tranche;
    }

    /**
     * Get the [id_forme_prix] column value.
     * 
     * @return int
     */
    public function getIdFormePrix()
    {

        return $this->id_forme_prix;
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
     * Get the [nature_tranche] column value.
     * 
     * @return string
     */
    public function getNatureTranche()
    {

        return $this->nature_tranche;
    }

    /**
     * Get the [code_tranche] column value.
     * 
     * @return int
     */
    public function getCodeTranche()
    {

        return $this->code_tranche;
    }

    /**
     * Get the [intitule_tranche] column value.
     * 
     * @return string
     */
    public function getIntituleTranche()
    {

        return $this->intitule_tranche;
    }

    /**
     * Set the value of [id_tranche] column.
     * 
     * @param int $v new value
     * @return CommonTTranche The current object (for fluent API support)
     */
    public function setIdTranche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tranche !== $v) {
            $this->id_tranche = $v;
            $this->modifiedColumns[] = CommonTTranchePeer::ID_TRANCHE;
        }


        return $this;
    } // setIdTranche()

    /**
     * Set the value of [id_forme_prix] column.
     * 
     * @param int $v new value
     * @return CommonTTranche The current object (for fluent API support)
     */
    public function setIdFormePrix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_forme_prix !== $v) {
            $this->id_forme_prix = $v;
            $this->modifiedColumns[] = CommonTTranchePeer::ID_FORME_PRIX;
        }

        if ($this->aCommonTFormePrix !== null && $this->aCommonTFormePrix->getIdFormePrix() !== $v) {
            $this->aCommonTFormePrix = null;
        }


        return $this;
    } // setIdFormePrix()

    /**
     * Set the value of [id_donnee_complementaire] column.
     * 
     * @param int $v new value
     * @return CommonTTranche The current object (for fluent API support)
     */
    public function setIdDonneeComplementaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_donnee_complementaire !== $v) {
            $this->id_donnee_complementaire = $v;
            $this->modifiedColumns[] = CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE;
        }

        if ($this->aCommonTDonneeComplementaire !== null && $this->aCommonTDonneeComplementaire->getIdDonneeComplementaire() !== $v) {
            $this->aCommonTDonneeComplementaire = null;
        }


        return $this;
    } // setIdDonneeComplementaire()

    /**
     * Set the value of [nature_tranche] column.
     * 
     * @param string $v new value
     * @return CommonTTranche The current object (for fluent API support)
     */
    public function setNatureTranche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nature_tranche !== $v) {
            $this->nature_tranche = $v;
            $this->modifiedColumns[] = CommonTTranchePeer::NATURE_TRANCHE;
        }


        return $this;
    } // setNatureTranche()

    /**
     * Set the value of [code_tranche] column.
     * 
     * @param int $v new value
     * @return CommonTTranche The current object (for fluent API support)
     */
    public function setCodeTranche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->code_tranche !== $v) {
            $this->code_tranche = $v;
            $this->modifiedColumns[] = CommonTTranchePeer::CODE_TRANCHE;
        }


        return $this;
    } // setCodeTranche()

    /**
     * Set the value of [intitule_tranche] column.
     * 
     * @param string $v new value
     * @return CommonTTranche The current object (for fluent API support)
     */
    public function setIntituleTranche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_tranche !== $v) {
            $this->intitule_tranche = $v;
            $this->modifiedColumns[] = CommonTTranchePeer::INTITULE_TRANCHE;
        }


        return $this;
    } // setIntituleTranche()

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

            $this->id_tranche = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_forme_prix = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_donnee_complementaire = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->nature_tranche = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->code_tranche = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->intitule_tranche = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = CommonTTranchePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTTranche object", $e);
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

        if ($this->aCommonTFormePrix !== null && $this->id_forme_prix !== $this->aCommonTFormePrix->getIdFormePrix()) {
            $this->aCommonTFormePrix = null;
        }
        if ($this->aCommonTDonneeComplementaire !== null && $this->id_donnee_complementaire !== $this->aCommonTDonneeComplementaire->getIdDonneeComplementaire()) {
            $this->aCommonTDonneeComplementaire = null;
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
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTTranchePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonTDonneeComplementaire = null;
            $this->aCommonTFormePrix = null;
            $this->collCommonTLotTechniqueHasTranches = null;

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
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTTrancheQuery::create()
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
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTTranchePeer::addInstanceToPool($this);
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

            if ($this->aCommonTDonneeComplementaire !== null) {
                if ($this->aCommonTDonneeComplementaire->isModified() || $this->aCommonTDonneeComplementaire->isNew()) {
                    $affectedRows += $this->aCommonTDonneeComplementaire->save($con);
                }
                $this->setCommonTDonneeComplementaire($this->aCommonTDonneeComplementaire);
            }

            if ($this->aCommonTFormePrix !== null) {
                if ($this->aCommonTFormePrix->isModified() || $this->aCommonTFormePrix->isNew()) {
                    $affectedRows += $this->aCommonTFormePrix->save($con);
                }
                $this->setCommonTFormePrix($this->aCommonTFormePrix);
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

            if ($this->commonTLotTechniqueHasTranchesScheduledForDeletion !== null) {
                if (!$this->commonTLotTechniqueHasTranchesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTLotTechniqueHasTranchesScheduledForDeletion as $commonTLotTechniqueHasTranche) {
                        // need to save related object because we set the relation to null
                        $commonTLotTechniqueHasTranche->save($con);
                    }
                    $this->commonTLotTechniqueHasTranchesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTLotTechniqueHasTranches !== null) {
                foreach ($this->collCommonTLotTechniqueHasTranches as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTTranchePeer::ID_TRANCHE;
        if (null !== $this->id_tranche) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTTranchePeer::ID_TRANCHE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTTranchePeer::ID_TRANCHE)) {
            $modifiedColumns[':p' . $index++]  = '`id_tranche`';
        }
        if ($this->isColumnModified(CommonTTranchePeer::ID_FORME_PRIX)) {
            $modifiedColumns[':p' . $index++]  = '`id_forme_prix`';
        }
        if ($this->isColumnModified(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_donnee_complementaire`';
        }
        if ($this->isColumnModified(CommonTTranchePeer::NATURE_TRANCHE)) {
            $modifiedColumns[':p' . $index++]  = '`nature_tranche`';
        }
        if ($this->isColumnModified(CommonTTranchePeer::CODE_TRANCHE)) {
            $modifiedColumns[':p' . $index++]  = '`code_tranche`';
        }
        if ($this->isColumnModified(CommonTTranchePeer::INTITULE_TRANCHE)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_tranche`';
        }

        $sql = sprintf(
            'INSERT INTO `t_tranche` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_tranche`':						
                        $stmt->bindValue($identifier, $this->id_tranche, PDO::PARAM_INT);
                        break;
                    case '`id_forme_prix`':						
                        $stmt->bindValue($identifier, $this->id_forme_prix, PDO::PARAM_INT);
                        break;
                    case '`id_donnee_complementaire`':						
                        $stmt->bindValue($identifier, $this->id_donnee_complementaire, PDO::PARAM_INT);
                        break;
                    case '`nature_tranche`':						
                        $stmt->bindValue($identifier, $this->nature_tranche, PDO::PARAM_STR);
                        break;
                    case '`code_tranche`':						
                        $stmt->bindValue($identifier, $this->code_tranche, PDO::PARAM_INT);
                        break;
                    case '`intitule_tranche`':						
                        $stmt->bindValue($identifier, $this->intitule_tranche, PDO::PARAM_STR);
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
        $this->setIdTranche($pk);

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

            if ($this->aCommonTDonneeComplementaire !== null) {
                if (!$this->aCommonTDonneeComplementaire->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTDonneeComplementaire->getValidationFailures());
                }
            }

            if ($this->aCommonTFormePrix !== null) {
                if (!$this->aCommonTFormePrix->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTFormePrix->getValidationFailures());
                }
            }


            if (($retval = CommonTTranchePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTLotTechniqueHasTranches !== null) {
                    foreach ($this->collCommonTLotTechniqueHasTranches as $referrerFK) {
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
        $pos = CommonTTranchePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTranche();
                break;
            case 1:
                return $this->getIdFormePrix();
                break;
            case 2:
                return $this->getIdDonneeComplementaire();
                break;
            case 3:
                return $this->getNatureTranche();
                break;
            case 4:
                return $this->getCodeTranche();
                break;
            case 5:
                return $this->getIntituleTranche();
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
        if (isset($alreadyDumpedObjects['CommonTTranche'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTTranche'][$this->getPrimaryKey()] = true;
        $keys = CommonTTranchePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTranche(),
            $keys[1] => $this->getIdFormePrix(),
            $keys[2] => $this->getIdDonneeComplementaire(),
            $keys[3] => $this->getNatureTranche(),
            $keys[4] => $this->getCodeTranche(),
            $keys[5] => $this->getIntituleTranche(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonTDonneeComplementaire) {
                $result['CommonTDonneeComplementaire'] = $this->aCommonTDonneeComplementaire->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonTFormePrix) {
                $result['CommonTFormePrix'] = $this->aCommonTFormePrix->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonTLotTechniqueHasTranches) {
                $result['CommonTLotTechniqueHasTranches'] = $this->collCommonTLotTechniqueHasTranches->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTTranchePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTranche($value);
                break;
            case 1:
                $this->setIdFormePrix($value);
                break;
            case 2:
                $this->setIdDonneeComplementaire($value);
                break;
            case 3:
                $this->setNatureTranche($value);
                break;
            case 4:
                $this->setCodeTranche($value);
                break;
            case 5:
                $this->setIntituleTranche($value);
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
        $keys = CommonTTranchePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTranche($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdFormePrix($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdDonneeComplementaire($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNatureTranche($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCodeTranche($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIntituleTranche($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTTranchePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTTranchePeer::ID_TRANCHE)) $criteria->add(CommonTTranchePeer::ID_TRANCHE, $this->id_tranche);
        if ($this->isColumnModified(CommonTTranchePeer::ID_FORME_PRIX)) $criteria->add(CommonTTranchePeer::ID_FORME_PRIX, $this->id_forme_prix);
        if ($this->isColumnModified(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE)) $criteria->add(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, $this->id_donnee_complementaire);
        if ($this->isColumnModified(CommonTTranchePeer::NATURE_TRANCHE)) $criteria->add(CommonTTranchePeer::NATURE_TRANCHE, $this->nature_tranche);
        if ($this->isColumnModified(CommonTTranchePeer::CODE_TRANCHE)) $criteria->add(CommonTTranchePeer::CODE_TRANCHE, $this->code_tranche);
        if ($this->isColumnModified(CommonTTranchePeer::INTITULE_TRANCHE)) $criteria->add(CommonTTranchePeer::INTITULE_TRANCHE, $this->intitule_tranche);

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
        $criteria = new Criteria(CommonTTranchePeer::DATABASE_NAME);
        $criteria->add(CommonTTranchePeer::ID_TRANCHE, $this->id_tranche);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdTranche();
    }

    /**
     * Generic method to set the primary key (id_tranche column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdTranche($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdTranche();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTTranche (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdFormePrix($this->getIdFormePrix());
        $copyObj->setIdDonneeComplementaire($this->getIdDonneeComplementaire());
        $copyObj->setNatureTranche($this->getNatureTranche());
        $copyObj->setCodeTranche($this->getCodeTranche());
        $copyObj->setIntituleTranche($this->getIntituleTranche());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTLotTechniqueHasTranches() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTLotTechniqueHasTranche($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTranche(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTTranche Clone of current object.
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
     * @return CommonTTranchePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTTranchePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonTDonneeComplementaire object.
     *
     * @param   CommonTDonneeComplementaire $v
     * @return CommonTTranche The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTDonneeComplementaire(CommonTDonneeComplementaire $v = null)
    {
        if ($v === null) {
            $this->setIdDonneeComplementaire(NULL);
        } else {
            $this->setIdDonneeComplementaire($v->getIdDonneeComplementaire());
        }

        $this->aCommonTDonneeComplementaire = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTDonneeComplementaire object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTTranche($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTDonneeComplementaire object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTDonneeComplementaire The associated CommonTDonneeComplementaire object.
     * @throws PropelException
     */
    public function getCommonTDonneeComplementaire(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTDonneeComplementaire === null && ($this->id_donnee_complementaire !== null) && $doQuery) {
            $this->aCommonTDonneeComplementaire = CommonTDonneeComplementaireQuery::create()->findPk($this->id_donnee_complementaire, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTDonneeComplementaire->addCommonTTranches($this);
             */
        }

        return $this->aCommonTDonneeComplementaire;
    }

    /**
     * Declares an association between this object and a CommonTFormePrix object.
     *
     * @param   CommonTFormePrix $v
     * @return CommonTTranche The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTFormePrix(CommonTFormePrix $v = null)
    {
        if ($v === null) {
            $this->setIdFormePrix(NULL);
        } else {
            $this->setIdFormePrix($v->getIdFormePrix());
        }

        $this->aCommonTFormePrix = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTFormePrix object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTTranche($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTFormePrix object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTFormePrix The associated CommonTFormePrix object.
     * @throws PropelException
     */
    public function getCommonTFormePrix(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTFormePrix === null && ($this->id_forme_prix !== null) && $doQuery) {
            $this->aCommonTFormePrix = CommonTFormePrixQuery::create()->findPk($this->id_forme_prix, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTFormePrix->addCommonTTranches($this);
             */
        }

        return $this->aCommonTFormePrix;
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
        if ('CommonTLotTechniqueHasTranche' == $relationName) {
            $this->initCommonTLotTechniqueHasTranches();
        }
    }

    /**
     * Clears out the collCommonTLotTechniqueHasTranches collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTTranche The current object (for fluent API support)
     * @see        addCommonTLotTechniqueHasTranches()
     */
    public function clearCommonTLotTechniqueHasTranches()
    {
        $this->collCommonTLotTechniqueHasTranches = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTLotTechniqueHasTranchesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTLotTechniqueHasTranches collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTLotTechniqueHasTranches($v = true)
    {
        $this->collCommonTLotTechniqueHasTranchesPartial = $v;
    }

    /**
     * Initializes the collCommonTLotTechniqueHasTranches collection.
     *
     * By default this just sets the collCommonTLotTechniqueHasTranches collection to an empty array (like clearcollCommonTLotTechniqueHasTranches());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTLotTechniqueHasTranches($overrideExisting = true)
    {
        if (null !== $this->collCommonTLotTechniqueHasTranches && !$overrideExisting) {
            return;
        }
        $this->collCommonTLotTechniqueHasTranches = new PropelObjectCollection();
        $this->collCommonTLotTechniqueHasTranches->setModel('CommonTLotTechniqueHasTranche');
    }

    /**
     * Gets an array of CommonTLotTechniqueHasTranche objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTTranche is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTLotTechniqueHasTranche[] List of CommonTLotTechniqueHasTranche objects
     * @throws PropelException
     */
    public function getCommonTLotTechniqueHasTranches($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTLotTechniqueHasTranchesPartial && !$this->isNew();
        if (null === $this->collCommonTLotTechniqueHasTranches || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTLotTechniqueHasTranches) {
                // return empty collection
                $this->initCommonTLotTechniqueHasTranches();
            } else {
                $collCommonTLotTechniqueHasTranches = CommonTLotTechniqueHasTrancheQuery::create(null, $criteria)
                    ->filterByCommonTTranche($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTLotTechniqueHasTranchesPartial && count($collCommonTLotTechniqueHasTranches)) {
                      $this->initCommonTLotTechniqueHasTranches(false);

                      foreach ($collCommonTLotTechniqueHasTranches as $obj) {
                        if (false == $this->collCommonTLotTechniqueHasTranches->contains($obj)) {
                          $this->collCommonTLotTechniqueHasTranches->append($obj);
                        }
                      }

                      $this->collCommonTLotTechniqueHasTranchesPartial = true;
                    }

                    $collCommonTLotTechniqueHasTranches->getInternalIterator()->rewind();

                    return $collCommonTLotTechniqueHasTranches;
                }

                if ($partial && $this->collCommonTLotTechniqueHasTranches) {
                    foreach ($this->collCommonTLotTechniqueHasTranches as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTLotTechniqueHasTranches[] = $obj;
                        }
                    }
                }

                $this->collCommonTLotTechniqueHasTranches = $collCommonTLotTechniqueHasTranches;
                $this->collCommonTLotTechniqueHasTranchesPartial = false;
            }
        }

        return $this->collCommonTLotTechniqueHasTranches;
    }

    /**
     * Sets a collection of CommonTLotTechniqueHasTranche objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTLotTechniqueHasTranches A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTTranche The current object (for fluent API support)
     */
    public function setCommonTLotTechniqueHasTranches(PropelCollection $commonTLotTechniqueHasTranches, PropelPDO $con = null)
    {
        $commonTLotTechniqueHasTranchesToDelete = $this->getCommonTLotTechniqueHasTranches(new Criteria(), $con)->diff($commonTLotTechniqueHasTranches);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonTLotTechniqueHasTranchesScheduledForDeletion = clone $commonTLotTechniqueHasTranchesToDelete;

        foreach ($commonTLotTechniqueHasTranchesToDelete as $commonTLotTechniqueHasTrancheRemoved) {
            $commonTLotTechniqueHasTrancheRemoved->setCommonTTranche(null);
        }

        $this->collCommonTLotTechniqueHasTranches = null;
        foreach ($commonTLotTechniqueHasTranches as $commonTLotTechniqueHasTranche) {
            $this->addCommonTLotTechniqueHasTranche($commonTLotTechniqueHasTranche);
        }

        $this->collCommonTLotTechniqueHasTranches = $commonTLotTechniqueHasTranches;
        $this->collCommonTLotTechniqueHasTranchesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTLotTechniqueHasTranche objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTLotTechniqueHasTranche objects.
     * @throws PropelException
     */
    public function countCommonTLotTechniqueHasTranches(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTLotTechniqueHasTranchesPartial && !$this->isNew();
        if (null === $this->collCommonTLotTechniqueHasTranches || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTLotTechniqueHasTranches) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTLotTechniqueHasTranches());
            }
            $query = CommonTLotTechniqueHasTrancheQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTTranche($this)
                ->count($con);
        }

        return count($this->collCommonTLotTechniqueHasTranches);
    }

    /**
     * Method called to associate a CommonTLotTechniqueHasTranche object to this object
     * through the CommonTLotTechniqueHasTranche foreign key attribute.
     *
     * @param   CommonTLotTechniqueHasTranche $l CommonTLotTechniqueHasTranche
     * @return CommonTTranche The current object (for fluent API support)
     */
    public function addCommonTLotTechniqueHasTranche(CommonTLotTechniqueHasTranche $l)
    {
        if ($this->collCommonTLotTechniqueHasTranches === null) {
            $this->initCommonTLotTechniqueHasTranches();
            $this->collCommonTLotTechniqueHasTranchesPartial = true;
        }
        if (!in_array($l, $this->collCommonTLotTechniqueHasTranches->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTLotTechniqueHasTranche($l);
        }

        return $this;
    }

    /**
     * @param	CommonTLotTechniqueHasTranche $commonTLotTechniqueHasTranche The commonTLotTechniqueHasTranche object to add.
     */
    protected function doAddCommonTLotTechniqueHasTranche($commonTLotTechniqueHasTranche)
    {
        $this->collCommonTLotTechniqueHasTranches[]= $commonTLotTechniqueHasTranche;
        $commonTLotTechniqueHasTranche->setCommonTTranche($this);
    }

    /**
     * @param	CommonTLotTechniqueHasTranche $commonTLotTechniqueHasTranche The commonTLotTechniqueHasTranche object to remove.
     * @return CommonTTranche The current object (for fluent API support)
     */
    public function removeCommonTLotTechniqueHasTranche($commonTLotTechniqueHasTranche)
    {
        if ($this->getCommonTLotTechniqueHasTranches()->contains($commonTLotTechniqueHasTranche)) {
            $this->collCommonTLotTechniqueHasTranches->remove($this->collCommonTLotTechniqueHasTranches->search($commonTLotTechniqueHasTranche));
            if (null === $this->commonTLotTechniqueHasTranchesScheduledForDeletion) {
                $this->commonTLotTechniqueHasTranchesScheduledForDeletion = clone $this->collCommonTLotTechniqueHasTranches;
                $this->commonTLotTechniqueHasTranchesScheduledForDeletion->clear();
            }
            $this->commonTLotTechniqueHasTranchesScheduledForDeletion[]= clone $commonTLotTechniqueHasTranche;
            $commonTLotTechniqueHasTranche->setCommonTTranche(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTTranche is new, it will return
     * an empty collection; or if this CommonTTranche has previously
     * been saved, it will retrieve related CommonTLotTechniqueHasTranches from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTTranche.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTLotTechniqueHasTranche[] List of CommonTLotTechniqueHasTranche objects
     */
    public function getCommonTLotTechniqueHasTranchesJoinCommonTLotTechnique($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTLotTechniqueHasTrancheQuery::create(null, $criteria);
        $query->joinWith('CommonTLotTechnique', $join_behavior);

        return $this->getCommonTLotTechniqueHasTranches($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_tranche = null;
        $this->id_forme_prix = null;
        $this->id_donnee_complementaire = null;
        $this->nature_tranche = null;
        $this->code_tranche = null;
        $this->intitule_tranche = null;
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
            if ($this->collCommonTLotTechniqueHasTranches) {
                foreach ($this->collCommonTLotTechniqueHasTranches as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonTDonneeComplementaire instanceof Persistent) {
              $this->aCommonTDonneeComplementaire->clearAllReferences($deep);
            }
            if ($this->aCommonTFormePrix instanceof Persistent) {
              $this->aCommonTFormePrix->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTLotTechniqueHasTranches instanceof PropelCollection) {
            $this->collCommonTLotTechniqueHasTranches->clearIterator();
        }
        $this->collCommonTLotTechniqueHasTranches = null;
        $this->aCommonTDonneeComplementaire = null;
        $this->aCommonTFormePrix = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTTranchePeer::DEFAULT_STRING_FORMAT);
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
