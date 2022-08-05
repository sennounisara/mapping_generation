<?php


/**
 * Base class that represents a row from the 'exec_type_contrat' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseExecTypeContrat extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ExecTypeContratPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ExecTypeContratPeer
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
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the libelle_fr field.
     * @var        string
     */
    protected $libelle_fr;

    /**
     * The value for the libelle_ar field.
     * @var        string
     */
    protected $libelle_ar;

    /**
     * The value for the libelle_en field.
     * @var        string
     */
    protected $libelle_en;

    /**
     * The value for the type_evenement_liee field.
     * @var        string
     */
    protected $type_evenement_liee;

    /**
     * @var        PropelObjectCollection|ExecConfigurationFormulaire[] Collection to store aggregation of ExecConfigurationFormulaire objects.
     */
    protected $collExecConfigurationFormulairesRelatedByIdTypeContrat;
    protected $collExecConfigurationFormulairesRelatedByIdTypeContratPartial;

    /**
     * @var        PropelObjectCollection|ExecConfigurationFormulaire[] Collection to store aggregation of ExecConfigurationFormulaire objects.
     */
    protected $collExecConfigurationFormulairesRelatedByIdTypeContrat;
    protected $collExecConfigurationFormulairesRelatedByIdTypeContratPartial;

    /**
     * @var        PropelObjectCollection|ExecContrat[] Collection to store aggregation of ExecContrat objects.
     */
    protected $collExecContrats;
    protected $collExecContratsPartial;

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
    protected $ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecContratsScheduledForDeletion = null;

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
     * Get the [libelle] column value.
     * 
     * @return string
     */
    public function getLibelle()
    {

        return $this->libelle;
    }

    /**
     * Get the [libelle_fr] column value.
     * 
     * @return string
     */
    public function getLibelleFr()
    {

        return $this->libelle_fr;
    }

    /**
     * Get the [libelle_ar] column value.
     * 
     * @return string
     */
    public function getLibelleAr()
    {

        return $this->libelle_ar;
    }

    /**
     * Get the [libelle_en] column value.
     * 
     * @return string
     */
    public function getLibelleEn()
    {

        return $this->libelle_en;
    }

    /**
     * Get the [type_evenement_liee] column value.
     * 
     * @return string
     */
    public function getTypeEvenementLiee()
    {

        return $this->type_evenement_liee;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = ExecTypeContratPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = ExecTypeContratPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [libelle_fr] column.
     * 
     * @param string $v new value
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function setLibelleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_fr !== $v) {
            $this->libelle_fr = $v;
            $this->modifiedColumns[] = ExecTypeContratPeer::LIBELLE_FR;
        }


        return $this;
    } // setLibelleFr()

    /**
     * Set the value of [libelle_ar] column.
     * 
     * @param string $v new value
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function setLibelleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_ar !== $v) {
            $this->libelle_ar = $v;
            $this->modifiedColumns[] = ExecTypeContratPeer::LIBELLE_AR;
        }


        return $this;
    } // setLibelleAr()

    /**
     * Set the value of [libelle_en] column.
     * 
     * @param string $v new value
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function setLibelleEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_en !== $v) {
            $this->libelle_en = $v;
            $this->modifiedColumns[] = ExecTypeContratPeer::LIBELLE_EN;
        }


        return $this;
    } // setLibelleEn()

    /**
     * Set the value of [type_evenement_liee] column.
     * 
     * @param string $v new value
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function setTypeEvenementLiee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_evenement_liee !== $v) {
            $this->type_evenement_liee = $v;
            $this->modifiedColumns[] = ExecTypeContratPeer::TYPE_EVENEMENT_LIEE;
        }


        return $this;
    } // setTypeEvenementLiee()

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
            $this->libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->libelle_fr = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle_ar = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->libelle_en = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->type_evenement_liee = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = ExecTypeContratPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ExecTypeContrat object", $e);
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
            $con = Propel::getConnection(ExecTypeContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ExecTypeContratPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = null;

            $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = null;

            $this->collExecContrats = null;

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
            $con = Propel::getConnection(ExecTypeContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ExecTypeContratQuery::create()
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
            $con = Propel::getConnection(ExecTypeContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ExecTypeContratPeer::addInstanceToPool($this);
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

            if ($this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion !== null) {
                if (!$this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion as $ExecConfigurationFormulaireRelatedByIdTypeContrat) {
                        // need to save related object because we set the relation to null
                        $ExecConfigurationFormulaireRelatedByIdTypeContrat->save($con);
                    }
                    $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = null;
                }
            }

            if ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat !== null) {
                foreach ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion !== null) {
                if (!$this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion as $ExecConfigurationFormulaireRelatedByIdTypeContrat) {
                        // need to save related object because we set the relation to null
                        $ExecConfigurationFormulaireRelatedByIdTypeContrat->save($con);
                    }
                    $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = null;
                }
            }

            if ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat !== null) {
                foreach ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecContratsScheduledForDeletion !== null) {
                if (!$this->ExecContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecContratsScheduledForDeletion as $ExecContrat) {
                        // need to save related object because we set the relation to null
                        $ExecContrat->save($con);
                    }
                    $this->ExecContratsScheduledForDeletion = null;
                }
            }

            if ($this->collExecContrats !== null) {
                foreach ($this->collExecContrats as $referrerFK) {
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

        $this->modifiedColumns[] = ExecTypeContratPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ExecTypeContratPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ExecTypeContratPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(ExecTypeContratPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(ExecTypeContratPeer::LIBELLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_fr`';
        }
        if ($this->isColumnModified(ExecTypeContratPeer::LIBELLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_ar`';
        }
        if ($this->isColumnModified(ExecTypeContratPeer::LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_en`';
        }
        if ($this->isColumnModified(ExecTypeContratPeer::TYPE_EVENEMENT_LIEE)) {
            $modifiedColumns[':p' . $index++]  = '`type_evenement_liee`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_type_contrat` (%s) VALUES (%s)',
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
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`libelle_fr`':						
                        $stmt->bindValue($identifier, $this->libelle_fr, PDO::PARAM_STR);
                        break;
                    case '`libelle_ar`':						
                        $stmt->bindValue($identifier, $this->libelle_ar, PDO::PARAM_STR);
                        break;
                    case '`libelle_en`':						
                        $stmt->bindValue($identifier, $this->libelle_en, PDO::PARAM_STR);
                        break;
                    case '`type_evenement_liee`':						
                        $stmt->bindValue($identifier, $this->type_evenement_liee, PDO::PARAM_STR);
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


            if (($retval = ExecTypeContratPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat !== null) {
                    foreach ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat !== null) {
                    foreach ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecContrats !== null) {
                    foreach ($this->collExecContrats as $referrerFK) {
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
        $pos = ExecTypeContratPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLibelle();
                break;
            case 2:
                return $this->getLibelleFr();
                break;
            case 3:
                return $this->getLibelleAr();
                break;
            case 4:
                return $this->getLibelleEn();
                break;
            case 5:
                return $this->getTypeEvenementLiee();
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
        if (isset($alreadyDumpedObjects['ExecTypeContrat'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ExecTypeContrat'][$this->getPrimaryKey()] = true;
        $keys = ExecTypeContratPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getLibelle(),
            $keys[2] => $this->getLibelleFr(),
            $keys[3] => $this->getLibelleAr(),
            $keys[4] => $this->getLibelleEn(),
            $keys[5] => $this->getTypeEvenementLiee(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collExecConfigurationFormulairesRelatedByIdTypeContrat) {
                $result['ExecConfigurationFormulairesRelatedByIdTypeContrat'] = $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecConfigurationFormulairesRelatedByIdTypeContrat) {
                $result['ExecConfigurationFormulairesRelatedByIdTypeContrat'] = $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecContrats) {
                $result['ExecContrats'] = $this->collExecContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ExecTypeContratPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLibelle($value);
                break;
            case 2:
                $this->setLibelleFr($value);
                break;
            case 3:
                $this->setLibelleAr($value);
                break;
            case 4:
                $this->setLibelleEn($value);
                break;
            case 5:
                $this->setTypeEvenementLiee($value);
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
        $keys = ExecTypeContratPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelleFr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleAr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLibelleEn($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTypeEvenementLiee($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ExecTypeContratPeer::DATABASE_NAME);

        if ($this->isColumnModified(ExecTypeContratPeer::ID)) $criteria->add(ExecTypeContratPeer::ID, $this->id);
        if ($this->isColumnModified(ExecTypeContratPeer::LIBELLE)) $criteria->add(ExecTypeContratPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(ExecTypeContratPeer::LIBELLE_FR)) $criteria->add(ExecTypeContratPeer::LIBELLE_FR, $this->libelle_fr);
        if ($this->isColumnModified(ExecTypeContratPeer::LIBELLE_AR)) $criteria->add(ExecTypeContratPeer::LIBELLE_AR, $this->libelle_ar);
        if ($this->isColumnModified(ExecTypeContratPeer::LIBELLE_EN)) $criteria->add(ExecTypeContratPeer::LIBELLE_EN, $this->libelle_en);
        if ($this->isColumnModified(ExecTypeContratPeer::TYPE_EVENEMENT_LIEE)) $criteria->add(ExecTypeContratPeer::TYPE_EVENEMENT_LIEE, $this->type_evenement_liee);

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
        $criteria = new Criteria(ExecTypeContratPeer::DATABASE_NAME);
        $criteria->add(ExecTypeContratPeer::ID, $this->id);

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
     * @param object $copyObj An object of ExecTypeContrat (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setLibelleFr($this->getLibelleFr());
        $copyObj->setLibelleAr($this->getLibelleAr());
        $copyObj->setLibelleEn($this->getLibelleEn());
        $copyObj->setTypeEvenementLiee($this->getTypeEvenementLiee());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getExecConfigurationFormulairesRelatedByIdTypeContrat() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecConfigurationFormulaireRelatedByIdTypeContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecConfigurationFormulairesRelatedByIdTypeContrat() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecConfigurationFormulaireRelatedByIdTypeContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecContrat($relObj->copy($deepCopy));
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
     * @return ExecTypeContrat Clone of current object.
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
     * @return ExecTypeContratPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ExecTypeContratPeer();
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
        if ('ExecConfigurationFormulaireRelatedByIdTypeContrat' == $relationName) {
            $this->initExecConfigurationFormulairesRelatedByIdTypeContrat();
        }
        if ('ExecConfigurationFormulaireRelatedByIdTypeContrat' == $relationName) {
            $this->initExecConfigurationFormulairesRelatedByIdTypeContrat();
        }
        if ('ExecContrat' == $relationName) {
            $this->initExecContrats();
        }
    }

    /**
     * Clears out the collExecConfigurationFormulairesRelatedByIdTypeContrat collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecTypeContrat The current object (for fluent API support)
     * @see        addExecConfigurationFormulairesRelatedByIdTypeContrat()
     */
    public function clearExecConfigurationFormulairesRelatedByIdTypeContrat()
    {
        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = null; // important to set this to null since that means it is uninitialized
        $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = null;

        return $this;
    }

    /**
     * reset is the collExecConfigurationFormulairesRelatedByIdTypeContrat collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecConfigurationFormulairesRelatedByIdTypeContrat($v = true)
    {
        $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = $v;
    }

    /**
     * Initializes the collExecConfigurationFormulairesRelatedByIdTypeContrat collection.
     *
     * By default this just sets the collExecConfigurationFormulairesRelatedByIdTypeContrat collection to an empty array (like clearcollExecConfigurationFormulairesRelatedByIdTypeContrat());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecConfigurationFormulairesRelatedByIdTypeContrat($overrideExisting = true)
    {
        if (null !== $this->collExecConfigurationFormulairesRelatedByIdTypeContrat && !$overrideExisting) {
            return;
        }
        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = new PropelObjectCollection();
        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->setModel('ExecConfigurationFormulaire');
    }

    /**
     * Gets an array of ExecConfigurationFormulaire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecTypeContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecConfigurationFormulaire[] List of ExecConfigurationFormulaire objects
     * @throws PropelException
     */
    public function getExecConfigurationFormulairesRelatedByIdTypeContrat($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial && !$this->isNew();
        if (null === $this->collExecConfigurationFormulairesRelatedByIdTypeContrat || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecConfigurationFormulairesRelatedByIdTypeContrat) {
                // return empty collection
                $this->initExecConfigurationFormulairesRelatedByIdTypeContrat();
            } else {
                $collExecConfigurationFormulairesRelatedByIdTypeContrat = ExecConfigurationFormulaireQuery::create(null, $criteria)
                    ->filterByExecTypeContratRelatedByIdTypeContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial && count($collExecConfigurationFormulairesRelatedByIdTypeContrat)) {
                      $this->initExecConfigurationFormulairesRelatedByIdTypeContrat(false);

                      foreach ($collExecConfigurationFormulairesRelatedByIdTypeContrat as $obj) {
                        if (false == $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->contains($obj)) {
                          $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->append($obj);
                        }
                      }

                      $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = true;
                    }

                    $collExecConfigurationFormulairesRelatedByIdTypeContrat->getInternalIterator()->rewind();

                    return $collExecConfigurationFormulairesRelatedByIdTypeContrat;
                }

                if ($partial && $this->collExecConfigurationFormulairesRelatedByIdTypeContrat) {
                    foreach ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat as $obj) {
                        if ($obj->isNew()) {
                            $collExecConfigurationFormulairesRelatedByIdTypeContrat[] = $obj;
                        }
                    }
                }

                $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = $collExecConfigurationFormulairesRelatedByIdTypeContrat;
                $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = false;
            }
        }

        return $this->collExecConfigurationFormulairesRelatedByIdTypeContrat;
    }

    /**
     * Sets a collection of ExecConfigurationFormulaireRelatedByIdTypeContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecConfigurationFormulairesRelatedByIdTypeContrat A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function setExecConfigurationFormulairesRelatedByIdTypeContrat(PropelCollection $ExecConfigurationFormulairesRelatedByIdTypeContrat, PropelPDO $con = null)
    {
        $ExecConfigurationFormulairesRelatedByIdTypeContratToDelete = $this->getExecConfigurationFormulairesRelatedByIdTypeContrat(new Criteria(), $con)->diff($ExecConfigurationFormulairesRelatedByIdTypeContrat);


        $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = $ExecConfigurationFormulairesRelatedByIdTypeContratToDelete;

        foreach ($ExecConfigurationFormulairesRelatedByIdTypeContratToDelete as $ExecConfigurationFormulaireRelatedByIdTypeContratRemoved) {
            $ExecConfigurationFormulaireRelatedByIdTypeContratRemoved->setExecTypeContratRelatedByIdTypeContrat(null);
        }

        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = null;
        foreach ($ExecConfigurationFormulairesRelatedByIdTypeContrat as $ExecConfigurationFormulaireRelatedByIdTypeContrat) {
            $this->addExecConfigurationFormulaireRelatedByIdTypeContrat($ExecConfigurationFormulaireRelatedByIdTypeContrat);
        }

        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = $ExecConfigurationFormulairesRelatedByIdTypeContrat;
        $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecConfigurationFormulaire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecConfigurationFormulaire objects.
     * @throws PropelException
     */
    public function countExecConfigurationFormulairesRelatedByIdTypeContrat(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial && !$this->isNew();
        if (null === $this->collExecConfigurationFormulairesRelatedByIdTypeContrat || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecConfigurationFormulairesRelatedByIdTypeContrat) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecConfigurationFormulairesRelatedByIdTypeContrat());
            }
            $query = ExecConfigurationFormulaireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecTypeContratRelatedByIdTypeContrat($this)
                ->count($con);
        }

        return count($this->collExecConfigurationFormulairesRelatedByIdTypeContrat);
    }

    /**
     * Method called to associate a ExecConfigurationFormulaire object to this object
     * through the ExecConfigurationFormulaire foreign key attribute.
     *
     * @param   ExecConfigurationFormulaire $l ExecConfigurationFormulaire
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function addExecConfigurationFormulaireRelatedByIdTypeContrat(ExecConfigurationFormulaire $l)
    {
        if ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat === null) {
            $this->initExecConfigurationFormulairesRelatedByIdTypeContrat();
            $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = true;
        }
        if (!in_array($l, $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecConfigurationFormulaireRelatedByIdTypeContrat($l);
        }

        return $this;
    }

    /**
     * @param	ExecConfigurationFormulaireRelatedByIdTypeContrat $ExecConfigurationFormulaireRelatedByIdTypeContrat The ExecConfigurationFormulaireRelatedByIdTypeContrat object to add.
     */
    protected function doAddExecConfigurationFormulaireRelatedByIdTypeContrat($ExecConfigurationFormulaireRelatedByIdTypeContrat)
    {
        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat[]= $ExecConfigurationFormulaireRelatedByIdTypeContrat;
        $ExecConfigurationFormulaireRelatedByIdTypeContrat->setExecTypeContratRelatedByIdTypeContrat($this);
    }

    /**
     * @param	ExecConfigurationFormulaireRelatedByIdTypeContrat $ExecConfigurationFormulaireRelatedByIdTypeContrat The ExecConfigurationFormulaireRelatedByIdTypeContrat object to remove.
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function removeExecConfigurationFormulaireRelatedByIdTypeContrat($ExecConfigurationFormulaireRelatedByIdTypeContrat)
    {
        if ($this->getExecConfigurationFormulairesRelatedByIdTypeContrat()->contains($ExecConfigurationFormulaireRelatedByIdTypeContrat)) {
            $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->remove($this->collExecConfigurationFormulairesRelatedByIdTypeContrat->search($ExecConfigurationFormulaireRelatedByIdTypeContrat));
            if (null === $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion) {
                $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = clone $this->collExecConfigurationFormulairesRelatedByIdTypeContrat;
                $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion->clear();
            }
            $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion[]= clone $ExecConfigurationFormulaireRelatedByIdTypeContrat;
            $ExecConfigurationFormulaireRelatedByIdTypeContrat->setExecTypeContratRelatedByIdTypeContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collExecConfigurationFormulairesRelatedByIdTypeContrat collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecTypeContrat The current object (for fluent API support)
     * @see        addExecConfigurationFormulairesRelatedByIdTypeContrat()
     */
    public function clearExecConfigurationFormulairesRelatedByIdTypeContrat()
    {
        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = null; // important to set this to null since that means it is uninitialized
        $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = null;

        return $this;
    }

    /**
     * reset is the collExecConfigurationFormulairesRelatedByIdTypeContrat collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecConfigurationFormulairesRelatedByIdTypeContrat($v = true)
    {
        $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = $v;
    }

    /**
     * Initializes the collExecConfigurationFormulairesRelatedByIdTypeContrat collection.
     *
     * By default this just sets the collExecConfigurationFormulairesRelatedByIdTypeContrat collection to an empty array (like clearcollExecConfigurationFormulairesRelatedByIdTypeContrat());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecConfigurationFormulairesRelatedByIdTypeContrat($overrideExisting = true)
    {
        if (null !== $this->collExecConfigurationFormulairesRelatedByIdTypeContrat && !$overrideExisting) {
            return;
        }
        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = new PropelObjectCollection();
        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->setModel('ExecConfigurationFormulaire');
    }

    /**
     * Gets an array of ExecConfigurationFormulaire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecTypeContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecConfigurationFormulaire[] List of ExecConfigurationFormulaire objects
     * @throws PropelException
     */
    public function getExecConfigurationFormulairesRelatedByIdTypeContrat($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial && !$this->isNew();
        if (null === $this->collExecConfigurationFormulairesRelatedByIdTypeContrat || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecConfigurationFormulairesRelatedByIdTypeContrat) {
                // return empty collection
                $this->initExecConfigurationFormulairesRelatedByIdTypeContrat();
            } else {
                $collExecConfigurationFormulairesRelatedByIdTypeContrat = ExecConfigurationFormulaireQuery::create(null, $criteria)
                    ->filterByExecTypeContratRelatedByIdTypeContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial && count($collExecConfigurationFormulairesRelatedByIdTypeContrat)) {
                      $this->initExecConfigurationFormulairesRelatedByIdTypeContrat(false);

                      foreach ($collExecConfigurationFormulairesRelatedByIdTypeContrat as $obj) {
                        if (false == $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->contains($obj)) {
                          $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->append($obj);
                        }
                      }

                      $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = true;
                    }

                    $collExecConfigurationFormulairesRelatedByIdTypeContrat->getInternalIterator()->rewind();

                    return $collExecConfigurationFormulairesRelatedByIdTypeContrat;
                }

                if ($partial && $this->collExecConfigurationFormulairesRelatedByIdTypeContrat) {
                    foreach ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat as $obj) {
                        if ($obj->isNew()) {
                            $collExecConfigurationFormulairesRelatedByIdTypeContrat[] = $obj;
                        }
                    }
                }

                $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = $collExecConfigurationFormulairesRelatedByIdTypeContrat;
                $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = false;
            }
        }

        return $this->collExecConfigurationFormulairesRelatedByIdTypeContrat;
    }

    /**
     * Sets a collection of ExecConfigurationFormulaireRelatedByIdTypeContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecConfigurationFormulairesRelatedByIdTypeContrat A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function setExecConfigurationFormulairesRelatedByIdTypeContrat(PropelCollection $ExecConfigurationFormulairesRelatedByIdTypeContrat, PropelPDO $con = null)
    {
        $ExecConfigurationFormulairesRelatedByIdTypeContratToDelete = $this->getExecConfigurationFormulairesRelatedByIdTypeContrat(new Criteria(), $con)->diff($ExecConfigurationFormulairesRelatedByIdTypeContrat);


        $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = $ExecConfigurationFormulairesRelatedByIdTypeContratToDelete;

        foreach ($ExecConfigurationFormulairesRelatedByIdTypeContratToDelete as $ExecConfigurationFormulaireRelatedByIdTypeContratRemoved) {
            $ExecConfigurationFormulaireRelatedByIdTypeContratRemoved->setExecTypeContratRelatedByIdTypeContrat(null);
        }

        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = null;
        foreach ($ExecConfigurationFormulairesRelatedByIdTypeContrat as $ExecConfigurationFormulaireRelatedByIdTypeContrat) {
            $this->addExecConfigurationFormulaireRelatedByIdTypeContrat($ExecConfigurationFormulaireRelatedByIdTypeContrat);
        }

        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = $ExecConfigurationFormulairesRelatedByIdTypeContrat;
        $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecConfigurationFormulaire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecConfigurationFormulaire objects.
     * @throws PropelException
     */
    public function countExecConfigurationFormulairesRelatedByIdTypeContrat(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial && !$this->isNew();
        if (null === $this->collExecConfigurationFormulairesRelatedByIdTypeContrat || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecConfigurationFormulairesRelatedByIdTypeContrat) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecConfigurationFormulairesRelatedByIdTypeContrat());
            }
            $query = ExecConfigurationFormulaireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecTypeContratRelatedByIdTypeContrat($this)
                ->count($con);
        }

        return count($this->collExecConfigurationFormulairesRelatedByIdTypeContrat);
    }

    /**
     * Method called to associate a ExecConfigurationFormulaire object to this object
     * through the ExecConfigurationFormulaire foreign key attribute.
     *
     * @param   ExecConfigurationFormulaire $l ExecConfigurationFormulaire
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function addExecConfigurationFormulaireRelatedByIdTypeContrat(ExecConfigurationFormulaire $l)
    {
        if ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat === null) {
            $this->initExecConfigurationFormulairesRelatedByIdTypeContrat();
            $this->collExecConfigurationFormulairesRelatedByIdTypeContratPartial = true;
        }
        if (!in_array($l, $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecConfigurationFormulaireRelatedByIdTypeContrat($l);
        }

        return $this;
    }

    /**
     * @param	ExecConfigurationFormulaireRelatedByIdTypeContrat $ExecConfigurationFormulaireRelatedByIdTypeContrat The ExecConfigurationFormulaireRelatedByIdTypeContrat object to add.
     */
    protected function doAddExecConfigurationFormulaireRelatedByIdTypeContrat($ExecConfigurationFormulaireRelatedByIdTypeContrat)
    {
        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat[]= $ExecConfigurationFormulaireRelatedByIdTypeContrat;
        $ExecConfigurationFormulaireRelatedByIdTypeContrat->setExecTypeContratRelatedByIdTypeContrat($this);
    }

    /**
     * @param	ExecConfigurationFormulaireRelatedByIdTypeContrat $ExecConfigurationFormulaireRelatedByIdTypeContrat The ExecConfigurationFormulaireRelatedByIdTypeContrat object to remove.
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function removeExecConfigurationFormulaireRelatedByIdTypeContrat($ExecConfigurationFormulaireRelatedByIdTypeContrat)
    {
        if ($this->getExecConfigurationFormulairesRelatedByIdTypeContrat()->contains($ExecConfigurationFormulaireRelatedByIdTypeContrat)) {
            $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->remove($this->collExecConfigurationFormulairesRelatedByIdTypeContrat->search($ExecConfigurationFormulaireRelatedByIdTypeContrat));
            if (null === $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion) {
                $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = clone $this->collExecConfigurationFormulairesRelatedByIdTypeContrat;
                $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion->clear();
            }
            $this->ExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion[]= clone $ExecConfigurationFormulaireRelatedByIdTypeContrat;
            $ExecConfigurationFormulaireRelatedByIdTypeContrat->setExecTypeContratRelatedByIdTypeContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collExecContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecTypeContrat The current object (for fluent API support)
     * @see        addExecContrats()
     */
    public function clearExecContrats()
    {
        $this->collExecContrats = null; // important to set this to null since that means it is uninitialized
        $this->collExecContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecContrats($v = true)
    {
        $this->collExecContratsPartial = $v;
    }

    /**
     * Initializes the collExecContrats collection.
     *
     * By default this just sets the collExecContrats collection to an empty array (like clearcollExecContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecContrats($overrideExisting = true)
    {
        if (null !== $this->collExecContrats && !$overrideExisting) {
            return;
        }
        $this->collExecContrats = new PropelObjectCollection();
        $this->collExecContrats->setModel('ExecContrat');
    }

    /**
     * Gets an array of ExecContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecTypeContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecContrat[] List of ExecContrat objects
     * @throws PropelException
     */
    public function getExecContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecContratsPartial && !$this->isNew();
        if (null === $this->collExecContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecContrats) {
                // return empty collection
                $this->initExecContrats();
            } else {
                $collExecContrats = ExecContratQuery::create(null, $criteria)
                    ->filterByExecTypeContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecContratsPartial && count($collExecContrats)) {
                      $this->initExecContrats(false);

                      foreach ($collExecContrats as $obj) {
                        if (false == $this->collExecContrats->contains($obj)) {
                          $this->collExecContrats->append($obj);
                        }
                      }

                      $this->collExecContratsPartial = true;
                    }

                    $collExecContrats->getInternalIterator()->rewind();

                    return $collExecContrats;
                }

                if ($partial && $this->collExecContrats) {
                    foreach ($this->collExecContrats as $obj) {
                        if ($obj->isNew()) {
                            $collExecContrats[] = $obj;
                        }
                    }
                }

                $this->collExecContrats = $collExecContrats;
                $this->collExecContratsPartial = false;
            }
        }

        return $this->collExecContrats;
    }

    /**
     * Sets a collection of ExecContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function setExecContrats(PropelCollection $ExecContrats, PropelPDO $con = null)
    {
        $ExecContratsToDelete = $this->getExecContrats(new Criteria(), $con)->diff($ExecContrats);


        $this->ExecContratsScheduledForDeletion = $ExecContratsToDelete;

        foreach ($ExecContratsToDelete as $ExecContratRemoved) {
            $ExecContratRemoved->setExecTypeContrat(null);
        }

        $this->collExecContrats = null;
        foreach ($ExecContrats as $ExecContrat) {
            $this->addExecContrat($ExecContrat);
        }

        $this->collExecContrats = $ExecContrats;
        $this->collExecContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecContrat objects.
     * @throws PropelException
     */
    public function countExecContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecContratsPartial && !$this->isNew();
        if (null === $this->collExecContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecContrats());
            }
            $query = ExecContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecTypeContrat($this)
                ->count($con);
        }

        return count($this->collExecContrats);
    }

    /**
     * Method called to associate a ExecContrat object to this object
     * through the ExecContrat foreign key attribute.
     *
     * @param   ExecContrat $l ExecContrat
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function addExecContrat(ExecContrat $l)
    {
        if ($this->collExecContrats === null) {
            $this->initExecContrats();
            $this->collExecContratsPartial = true;
        }
        if (!in_array($l, $this->collExecContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecContrat($l);
        }

        return $this;
    }

    /**
     * @param	ExecContrat $ExecContrat The ExecContrat object to add.
     */
    protected function doAddExecContrat($ExecContrat)
    {
        $this->collExecContrats[]= $ExecContrat;
        $ExecContrat->setExecTypeContrat($this);
    }

    /**
     * @param	ExecContrat $ExecContrat The ExecContrat object to remove.
     * @return ExecTypeContrat The current object (for fluent API support)
     */
    public function removeExecContrat($ExecContrat)
    {
        if ($this->getExecContrats()->contains($ExecContrat)) {
            $this->collExecContrats->remove($this->collExecContrats->search($ExecContrat));
            if (null === $this->ExecContratsScheduledForDeletion) {
                $this->ExecContratsScheduledForDeletion = clone $this->collExecContrats;
                $this->ExecContratsScheduledForDeletion->clear();
            }
            $this->ExecContratsScheduledForDeletion[]= clone $ExecContrat;
            $ExecContrat->setExecTypeContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecTypeContrat is new, it will return
     * an empty collection; or if this ExecTypeContrat has previously
     * been saved, it will retrieve related ExecContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecTypeContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecContrat[] List of ExecContrat objects
     */
    public function getExecContratsJoinExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecContratQuery::create(null, $criteria);
        $query->joinWith('ExecTypeStructure', $join_behavior);

        return $this->getExecContrats($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->libelle = null;
        $this->libelle_fr = null;
        $this->libelle_ar = null;
        $this->libelle_en = null;
        $this->type_evenement_liee = null;
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
            if ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat) {
                foreach ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat) {
                foreach ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecContrats) {
                foreach ($this->collExecContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat instanceof PropelCollection) {
            $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->clearIterator();
        }
        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = null;
        if ($this->collExecConfigurationFormulairesRelatedByIdTypeContrat instanceof PropelCollection) {
            $this->collExecConfigurationFormulairesRelatedByIdTypeContrat->clearIterator();
        }
        $this->collExecConfigurationFormulairesRelatedByIdTypeContrat = null;
        if ($this->collExecContrats instanceof PropelCollection) {
            $this->collExecContrats->clearIterator();
        }
        $this->collExecContrats = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ExecTypeContratPeer::DEFAULT_STRING_FORMAT);
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
