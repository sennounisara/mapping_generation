<?php


/**
 * Base class that represents a row from the 'exec_type_contrat' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecTypeContrat extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecTypeContratPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecTypeContratPeer
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
     * @var        PropelObjectCollection|CommonExecConfigurationFormulaire[] Collection to store aggregation of CommonExecConfigurationFormulaire objects.
     */
    protected $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
    protected $collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial;

    /**
     * @var        PropelObjectCollection|CommonExecConfigurationFormulaire[] Collection to store aggregation of CommonExecConfigurationFormulaire objects.
     */
    protected $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
    protected $collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial;

    /**
     * @var        PropelObjectCollection|CommonExecConfigurationFormulaire[] Collection to store aggregation of CommonExecConfigurationFormulaire objects.
     */
    protected $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
    protected $collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial;

    /**
     * @var        PropelObjectCollection|CommonExecContrat[] Collection to store aggregation of CommonExecContrat objects.
     */
    protected $collCommonExecContrats;
    protected $collCommonExecContratsPartial;

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
    protected $commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecContratsScheduledForDeletion = null;

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
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecTypeContratPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonExecTypeContratPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [libelle_fr] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function setLibelleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_fr !== $v) {
            $this->libelle_fr = $v;
            $this->modifiedColumns[] = CommonExecTypeContratPeer::LIBELLE_FR;
        }


        return $this;
    } // setLibelleFr()

    /**
     * Set the value of [libelle_ar] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function setLibelleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_ar !== $v) {
            $this->libelle_ar = $v;
            $this->modifiedColumns[] = CommonExecTypeContratPeer::LIBELLE_AR;
        }


        return $this;
    } // setLibelleAr()

    /**
     * Set the value of [libelle_en] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function setLibelleEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_en !== $v) {
            $this->libelle_en = $v;
            $this->modifiedColumns[] = CommonExecTypeContratPeer::LIBELLE_EN;
        }


        return $this;
    } // setLibelleEn()

    /**
     * Set the value of [type_evenement_liee] column.
     * 
     * @param string $v new value
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function setTypeEvenementLiee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_evenement_liee !== $v) {
            $this->type_evenement_liee = $v;
            $this->modifiedColumns[] = CommonExecTypeContratPeer::TYPE_EVENEMENT_LIEE;
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

            return $startcol + 6; // 6 = CommonExecTypeContratPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecTypeContrat object", $e);
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
            $con = Propel::getConnection(CommonExecTypeContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecTypeContratPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null;

            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null;

            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null;

            $this->collCommonExecContrats = null;

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
            $con = Propel::getConnection(CommonExecTypeContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecTypeContratQuery::create()
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
            $con = Propel::getConnection(CommonExecTypeContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecTypeContratPeer::addInstanceToPool($this);
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

            if ($this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion !== null) {
                if (!$this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion as $commonExecConfigurationFormulaireRelatedByIdTypeContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecConfigurationFormulaireRelatedByIdTypeContrat->save($con);
                    }
                    $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat !== null) {
                foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion !== null) {
                if (!$this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion as $commonExecConfigurationFormulaireRelatedByIdTypeContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecConfigurationFormulaireRelatedByIdTypeContrat->save($con);
                    }
                    $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat !== null) {
                foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion !== null) {
                if (!$this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion as $commonExecConfigurationFormulaireRelatedByIdTypeContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecConfigurationFormulaireRelatedByIdTypeContrat->save($con);
                    }
                    $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat !== null) {
                foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecContratsScheduledForDeletion !== null) {
                if (!$this->commonExecContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContratsScheduledForDeletion as $commonExecContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecContrat->save($con);
                    }
                    $this->commonExecContratsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContrats !== null) {
                foreach ($this->collCommonExecContrats as $referrerFK) {
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

        $this->modifiedColumns[] = CommonExecTypeContratPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecTypeContratPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecTypeContratPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecTypeContratPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonExecTypeContratPeer::LIBELLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_fr`';
        }
        if ($this->isColumnModified(CommonExecTypeContratPeer::LIBELLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_ar`';
        }
        if ($this->isColumnModified(CommonExecTypeContratPeer::LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_en`';
        }
        if ($this->isColumnModified(CommonExecTypeContratPeer::TYPE_EVENEMENT_LIEE)) {
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


            if (($retval = CommonExecTypeContratPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat !== null) {
                    foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat !== null) {
                    foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat !== null) {
                    foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecContrats !== null) {
                    foreach ($this->collCommonExecContrats as $referrerFK) {
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
        $pos = CommonExecTypeContratPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
        if (isset($alreadyDumpedObjects['CommonExecTypeContrat'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecTypeContrat'][$this->getPrimaryKey()] = true;
        $keys = CommonExecTypeContratPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getLibelle(),
            $keys[2] => $this->getLibelleFr(),
            $keys[3] => $this->getLibelleAr(),
            $keys[4] => $this->getLibelleEn(),
            $keys[5] => $this->getTypeEvenementLiee(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                $result['CommonExecConfigurationFormulairesRelatedByIdTypeContrat'] = $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                $result['CommonExecConfigurationFormulairesRelatedByIdTypeContrat'] = $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                $result['CommonExecConfigurationFormulairesRelatedByIdTypeContrat'] = $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecContrats) {
                $result['CommonExecContrats'] = $this->collCommonExecContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecTypeContratPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
        $keys = CommonExecTypeContratPeer::getFieldNames($keyType);

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
        $criteria = new Criteria(CommonExecTypeContratPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecTypeContratPeer::ID)) $criteria->add(CommonExecTypeContratPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecTypeContratPeer::LIBELLE)) $criteria->add(CommonExecTypeContratPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonExecTypeContratPeer::LIBELLE_FR)) $criteria->add(CommonExecTypeContratPeer::LIBELLE_FR, $this->libelle_fr);
        if ($this->isColumnModified(CommonExecTypeContratPeer::LIBELLE_AR)) $criteria->add(CommonExecTypeContratPeer::LIBELLE_AR, $this->libelle_ar);
        if ($this->isColumnModified(CommonExecTypeContratPeer::LIBELLE_EN)) $criteria->add(CommonExecTypeContratPeer::LIBELLE_EN, $this->libelle_en);
        if ($this->isColumnModified(CommonExecTypeContratPeer::TYPE_EVENEMENT_LIEE)) $criteria->add(CommonExecTypeContratPeer::TYPE_EVENEMENT_LIEE, $this->type_evenement_liee);

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
        $criteria = new Criteria(CommonExecTypeContratPeer::DATABASE_NAME);
        $criteria->add(CommonExecTypeContratPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecTypeContrat (or compatible) type.
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

            foreach ($this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContrat($relObj->copy($deepCopy));
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
     * @return CommonExecTypeContrat Clone of current object.
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
     * @return CommonExecTypeContratPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecTypeContratPeer();
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
        if ('CommonExecConfigurationFormulaireRelatedByIdTypeContrat' == $relationName) {
            $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat();
        }
        if ('CommonExecConfigurationFormulaireRelatedByIdTypeContrat' == $relationName) {
            $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat();
        }
        if ('CommonExecConfigurationFormulaireRelatedByIdTypeContrat' == $relationName) {
            $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat();
        }
        if ('CommonExecContrat' == $relationName) {
            $this->initCommonExecContrats();
        }
    }

    /**
     * Clears out the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecTypeContrat The current object (for fluent API support)
     * @see        addCommonExecConfigurationFormulairesRelatedByIdTypeContrat()
     */
    public function clearCommonExecConfigurationFormulairesRelatedByIdTypeContrat()
    {
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecConfigurationFormulairesRelatedByIdTypeContrat($v = true)
    {
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = $v;
    }

    /**
     * Initializes the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection.
     *
     * By default this just sets the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection to an empty array (like clearcollCommonExecConfigurationFormulairesRelatedByIdTypeContrat());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecConfigurationFormulairesRelatedByIdTypeContrat($overrideExisting = true)
    {
        if (null !== $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat && !$overrideExisting) {
            return;
        }
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = new PropelObjectCollection();
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->setModel('CommonExecConfigurationFormulaire');
    }

    /**
     * Gets an array of CommonExecConfigurationFormulaire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecTypeContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecConfigurationFormulaire[] List of CommonExecConfigurationFormulaire objects
     * @throws PropelException
     */
    public function getCommonExecConfigurationFormulairesRelatedByIdTypeContrat($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial && !$this->isNew();
        if (null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                // return empty collection
                $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat();
            } else {
                $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = CommonExecConfigurationFormulaireQuery::create(null, $criteria)
                    ->filterByCommonExecTypeContratRelatedByIdTypeContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial && count($collCommonExecConfigurationFormulairesRelatedByIdTypeContrat)) {
                      $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat(false);

                      foreach ($collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $obj) {
                        if (false == $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->contains($obj)) {
                          $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->append($obj);
                        }
                      }

                      $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = true;
                    }

                    $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->getInternalIterator()->rewind();

                    return $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
                }

                if ($partial && $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                    foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat[] = $obj;
                        }
                    }
                }

                $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
                $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = false;
            }
        }

        return $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
    }

    /**
     * Sets a collection of CommonExecConfigurationFormulaireRelatedByIdTypeContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecConfigurationFormulairesRelatedByIdTypeContrat A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function setCommonExecConfigurationFormulairesRelatedByIdTypeContrat(PropelCollection $commonExecConfigurationFormulairesRelatedByIdTypeContrat, PropelPDO $con = null)
    {
        $commonExecConfigurationFormulairesRelatedByIdTypeContratToDelete = $this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat(new Criteria(), $con)->diff($commonExecConfigurationFormulairesRelatedByIdTypeContrat);


        $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = $commonExecConfigurationFormulairesRelatedByIdTypeContratToDelete;

        foreach ($commonExecConfigurationFormulairesRelatedByIdTypeContratToDelete as $commonExecConfigurationFormulaireRelatedByIdTypeContratRemoved) {
            $commonExecConfigurationFormulaireRelatedByIdTypeContratRemoved->setCommonExecTypeContratRelatedByIdTypeContrat(null);
        }

        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null;
        foreach ($commonExecConfigurationFormulairesRelatedByIdTypeContrat as $commonExecConfigurationFormulaireRelatedByIdTypeContrat) {
            $this->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaireRelatedByIdTypeContrat);
        }

        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = $commonExecConfigurationFormulairesRelatedByIdTypeContrat;
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecConfigurationFormulaire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecConfigurationFormulaire objects.
     * @throws PropelException
     */
    public function countCommonExecConfigurationFormulairesRelatedByIdTypeContrat(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial && !$this->isNew();
        if (null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat());
            }
            $query = CommonExecConfigurationFormulaireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecTypeContratRelatedByIdTypeContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat);
    }

    /**
     * Method called to associate a CommonExecConfigurationFormulaire object to this object
     * through the CommonExecConfigurationFormulaire foreign key attribute.
     *
     * @param   CommonExecConfigurationFormulaire $l CommonExecConfigurationFormulaire
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function addCommonExecConfigurationFormulaireRelatedByIdTypeContrat(CommonExecConfigurationFormulaire $l)
    {
        if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat === null) {
            $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat();
            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = true;
        }
        if (!in_array($l, $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecConfigurationFormulaireRelatedByIdTypeContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecConfigurationFormulaireRelatedByIdTypeContrat $commonExecConfigurationFormulaireRelatedByIdTypeContrat The commonExecConfigurationFormulaireRelatedByIdTypeContrat object to add.
     */
    protected function doAddCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaireRelatedByIdTypeContrat)
    {
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat[]= $commonExecConfigurationFormulaireRelatedByIdTypeContrat;
        $commonExecConfigurationFormulaireRelatedByIdTypeContrat->setCommonExecTypeContratRelatedByIdTypeContrat($this);
    }

    /**
     * @param	CommonExecConfigurationFormulaireRelatedByIdTypeContrat $commonExecConfigurationFormulaireRelatedByIdTypeContrat The commonExecConfigurationFormulaireRelatedByIdTypeContrat object to remove.
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function removeCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaireRelatedByIdTypeContrat)
    {
        if ($this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat()->contains($commonExecConfigurationFormulaireRelatedByIdTypeContrat)) {
            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->remove($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->search($commonExecConfigurationFormulaireRelatedByIdTypeContrat));
            if (null === $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion) {
                $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = clone $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
                $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion->clear();
            }
            $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion[]= clone $commonExecConfigurationFormulaireRelatedByIdTypeContrat;
            $commonExecConfigurationFormulaireRelatedByIdTypeContrat->setCommonExecTypeContratRelatedByIdTypeContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecTypeContrat The current object (for fluent API support)
     * @see        addCommonExecConfigurationFormulairesRelatedByIdTypeContrat()
     */
    public function clearCommonExecConfigurationFormulairesRelatedByIdTypeContrat()
    {
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecConfigurationFormulairesRelatedByIdTypeContrat($v = true)
    {
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = $v;
    }

    /**
     * Initializes the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection.
     *
     * By default this just sets the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection to an empty array (like clearcollCommonExecConfigurationFormulairesRelatedByIdTypeContrat());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecConfigurationFormulairesRelatedByIdTypeContrat($overrideExisting = true)
    {
        if (null !== $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat && !$overrideExisting) {
            return;
        }
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = new PropelObjectCollection();
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->setModel('CommonExecConfigurationFormulaire');
    }

    /**
     * Gets an array of CommonExecConfigurationFormulaire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecTypeContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecConfigurationFormulaire[] List of CommonExecConfigurationFormulaire objects
     * @throws PropelException
     */
    public function getCommonExecConfigurationFormulairesRelatedByIdTypeContrat($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial && !$this->isNew();
        if (null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                // return empty collection
                $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat();
            } else {
                $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = CommonExecConfigurationFormulaireQuery::create(null, $criteria)
                    ->filterByCommonExecTypeContratRelatedByIdTypeContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial && count($collCommonExecConfigurationFormulairesRelatedByIdTypeContrat)) {
                      $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat(false);

                      foreach ($collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $obj) {
                        if (false == $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->contains($obj)) {
                          $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->append($obj);
                        }
                      }

                      $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = true;
                    }

                    $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->getInternalIterator()->rewind();

                    return $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
                }

                if ($partial && $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                    foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat[] = $obj;
                        }
                    }
                }

                $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
                $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = false;
            }
        }

        return $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
    }

    /**
     * Sets a collection of CommonExecConfigurationFormulaireRelatedByIdTypeContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecConfigurationFormulairesRelatedByIdTypeContrat A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function setCommonExecConfigurationFormulairesRelatedByIdTypeContrat(PropelCollection $commonExecConfigurationFormulairesRelatedByIdTypeContrat, PropelPDO $con = null)
    {
        $commonExecConfigurationFormulairesRelatedByIdTypeContratToDelete = $this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat(new Criteria(), $con)->diff($commonExecConfigurationFormulairesRelatedByIdTypeContrat);


        $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = $commonExecConfigurationFormulairesRelatedByIdTypeContratToDelete;

        foreach ($commonExecConfigurationFormulairesRelatedByIdTypeContratToDelete as $commonExecConfigurationFormulaireRelatedByIdTypeContratRemoved) {
            $commonExecConfigurationFormulaireRelatedByIdTypeContratRemoved->setCommonExecTypeContratRelatedByIdTypeContrat(null);
        }

        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null;
        foreach ($commonExecConfigurationFormulairesRelatedByIdTypeContrat as $commonExecConfigurationFormulaireRelatedByIdTypeContrat) {
            $this->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaireRelatedByIdTypeContrat);
        }

        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = $commonExecConfigurationFormulairesRelatedByIdTypeContrat;
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecConfigurationFormulaire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecConfigurationFormulaire objects.
     * @throws PropelException
     */
    public function countCommonExecConfigurationFormulairesRelatedByIdTypeContrat(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial && !$this->isNew();
        if (null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat());
            }
            $query = CommonExecConfigurationFormulaireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecTypeContratRelatedByIdTypeContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat);
    }

    /**
     * Method called to associate a CommonExecConfigurationFormulaire object to this object
     * through the CommonExecConfigurationFormulaire foreign key attribute.
     *
     * @param   CommonExecConfigurationFormulaire $l CommonExecConfigurationFormulaire
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function addCommonExecConfigurationFormulaireRelatedByIdTypeContrat(CommonExecConfigurationFormulaire $l)
    {
        if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat === null) {
            $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat();
            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = true;
        }
        if (!in_array($l, $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecConfigurationFormulaireRelatedByIdTypeContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecConfigurationFormulaireRelatedByIdTypeContrat $commonExecConfigurationFormulaireRelatedByIdTypeContrat The commonExecConfigurationFormulaireRelatedByIdTypeContrat object to add.
     */
    protected function doAddCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaireRelatedByIdTypeContrat)
    {
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat[]= $commonExecConfigurationFormulaireRelatedByIdTypeContrat;
        $commonExecConfigurationFormulaireRelatedByIdTypeContrat->setCommonExecTypeContratRelatedByIdTypeContrat($this);
    }

    /**
     * @param	CommonExecConfigurationFormulaireRelatedByIdTypeContrat $commonExecConfigurationFormulaireRelatedByIdTypeContrat The commonExecConfigurationFormulaireRelatedByIdTypeContrat object to remove.
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function removeCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaireRelatedByIdTypeContrat)
    {
        if ($this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat()->contains($commonExecConfigurationFormulaireRelatedByIdTypeContrat)) {
            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->remove($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->search($commonExecConfigurationFormulaireRelatedByIdTypeContrat));
            if (null === $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion) {
                $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = clone $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
                $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion->clear();
            }
            $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion[]= clone $commonExecConfigurationFormulaireRelatedByIdTypeContrat;
            $commonExecConfigurationFormulaireRelatedByIdTypeContrat->setCommonExecTypeContratRelatedByIdTypeContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecTypeContrat The current object (for fluent API support)
     * @see        addCommonExecConfigurationFormulairesRelatedByIdTypeContrat()
     */
    public function clearCommonExecConfigurationFormulairesRelatedByIdTypeContrat()
    {
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecConfigurationFormulairesRelatedByIdTypeContrat($v = true)
    {
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = $v;
    }

    /**
     * Initializes the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection.
     *
     * By default this just sets the collCommonExecConfigurationFormulairesRelatedByIdTypeContrat collection to an empty array (like clearcollCommonExecConfigurationFormulairesRelatedByIdTypeContrat());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecConfigurationFormulairesRelatedByIdTypeContrat($overrideExisting = true)
    {
        if (null !== $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat && !$overrideExisting) {
            return;
        }
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = new PropelObjectCollection();
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->setModel('CommonExecConfigurationFormulaire');
    }

    /**
     * Gets an array of CommonExecConfigurationFormulaire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecTypeContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecConfigurationFormulaire[] List of CommonExecConfigurationFormulaire objects
     * @throws PropelException
     */
    public function getCommonExecConfigurationFormulairesRelatedByIdTypeContrat($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial && !$this->isNew();
        if (null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                // return empty collection
                $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat();
            } else {
                $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = CommonExecConfigurationFormulaireQuery::create(null, $criteria)
                    ->filterByCommonExecTypeContratRelatedByIdTypeContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial && count($collCommonExecConfigurationFormulairesRelatedByIdTypeContrat)) {
                      $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat(false);

                      foreach ($collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $obj) {
                        if (false == $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->contains($obj)) {
                          $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->append($obj);
                        }
                      }

                      $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = true;
                    }

                    $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->getInternalIterator()->rewind();

                    return $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
                }

                if ($partial && $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                    foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat[] = $obj;
                        }
                    }
                }

                $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = $collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
                $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = false;
            }
        }

        return $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
    }

    /**
     * Sets a collection of CommonExecConfigurationFormulaireRelatedByIdTypeContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecConfigurationFormulairesRelatedByIdTypeContrat A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function setCommonExecConfigurationFormulairesRelatedByIdTypeContrat(PropelCollection $commonExecConfigurationFormulairesRelatedByIdTypeContrat, PropelPDO $con = null)
    {
        $commonExecConfigurationFormulairesRelatedByIdTypeContratToDelete = $this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat(new Criteria(), $con)->diff($commonExecConfigurationFormulairesRelatedByIdTypeContrat);


        $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = $commonExecConfigurationFormulairesRelatedByIdTypeContratToDelete;

        foreach ($commonExecConfigurationFormulairesRelatedByIdTypeContratToDelete as $commonExecConfigurationFormulaireRelatedByIdTypeContratRemoved) {
            $commonExecConfigurationFormulaireRelatedByIdTypeContratRemoved->setCommonExecTypeContratRelatedByIdTypeContrat(null);
        }

        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null;
        foreach ($commonExecConfigurationFormulairesRelatedByIdTypeContrat as $commonExecConfigurationFormulaireRelatedByIdTypeContrat) {
            $this->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaireRelatedByIdTypeContrat);
        }

        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = $commonExecConfigurationFormulairesRelatedByIdTypeContrat;
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecConfigurationFormulaire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecConfigurationFormulaire objects.
     * @throws PropelException
     */
    public function countCommonExecConfigurationFormulairesRelatedByIdTypeContrat(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial && !$this->isNew();
        if (null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat());
            }
            $query = CommonExecConfigurationFormulaireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecTypeContratRelatedByIdTypeContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat);
    }

    /**
     * Method called to associate a CommonExecConfigurationFormulaire object to this object
     * through the CommonExecConfigurationFormulaire foreign key attribute.
     *
     * @param   CommonExecConfigurationFormulaire $l CommonExecConfigurationFormulaire
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function addCommonExecConfigurationFormulaireRelatedByIdTypeContrat(CommonExecConfigurationFormulaire $l)
    {
        if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat === null) {
            $this->initCommonExecConfigurationFormulairesRelatedByIdTypeContrat();
            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContratPartial = true;
        }
        if (!in_array($l, $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecConfigurationFormulaireRelatedByIdTypeContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecConfigurationFormulaireRelatedByIdTypeContrat $commonExecConfigurationFormulaireRelatedByIdTypeContrat The commonExecConfigurationFormulaireRelatedByIdTypeContrat object to add.
     */
    protected function doAddCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaireRelatedByIdTypeContrat)
    {
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat[]= $commonExecConfigurationFormulaireRelatedByIdTypeContrat;
        $commonExecConfigurationFormulaireRelatedByIdTypeContrat->setCommonExecTypeContratRelatedByIdTypeContrat($this);
    }

    /**
     * @param	CommonExecConfigurationFormulaireRelatedByIdTypeContrat $commonExecConfigurationFormulaireRelatedByIdTypeContrat The commonExecConfigurationFormulaireRelatedByIdTypeContrat object to remove.
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function removeCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaireRelatedByIdTypeContrat)
    {
        if ($this->getCommonExecConfigurationFormulairesRelatedByIdTypeContrat()->contains($commonExecConfigurationFormulaireRelatedByIdTypeContrat)) {
            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->remove($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->search($commonExecConfigurationFormulaireRelatedByIdTypeContrat));
            if (null === $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion) {
                $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion = clone $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat;
                $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion->clear();
            }
            $this->commonExecConfigurationFormulairesRelatedByIdTypeContratScheduledForDeletion[]= clone $commonExecConfigurationFormulaireRelatedByIdTypeContrat;
            $commonExecConfigurationFormulaireRelatedByIdTypeContrat->setCommonExecTypeContratRelatedByIdTypeContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonExecContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecTypeContrat The current object (for fluent API support)
     * @see        addCommonExecContrats()
     */
    public function clearCommonExecContrats()
    {
        $this->collCommonExecContrats = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContrats($v = true)
    {
        $this->collCommonExecContratsPartial = $v;
    }

    /**
     * Initializes the collCommonExecContrats collection.
     *
     * By default this just sets the collCommonExecContrats collection to an empty array (like clearcollCommonExecContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContrats($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContrats && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContrats = new PropelObjectCollection();
        $this->collCommonExecContrats->setModel('CommonExecContrat');
    }

    /**
     * Gets an array of CommonExecContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecTypeContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     * @throws PropelException
     */
    public function getCommonExecContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContrats) {
                // return empty collection
                $this->initCommonExecContrats();
            } else {
                $collCommonExecContrats = CommonExecContratQuery::create(null, $criteria)
                    ->filterByCommonExecTypeContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContratsPartial && count($collCommonExecContrats)) {
                      $this->initCommonExecContrats(false);

                      foreach ($collCommonExecContrats as $obj) {
                        if (false == $this->collCommonExecContrats->contains($obj)) {
                          $this->collCommonExecContrats->append($obj);
                        }
                      }

                      $this->collCommonExecContratsPartial = true;
                    }

                    $collCommonExecContrats->getInternalIterator()->rewind();

                    return $collCommonExecContrats;
                }

                if ($partial && $this->collCommonExecContrats) {
                    foreach ($this->collCommonExecContrats as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContrats[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContrats = $collCommonExecContrats;
                $this->collCommonExecContratsPartial = false;
            }
        }

        return $this->collCommonExecContrats;
    }

    /**
     * Sets a collection of CommonExecContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function setCommonExecContrats(PropelCollection $commonExecContrats, PropelPDO $con = null)
    {
        $commonExecContratsToDelete = $this->getCommonExecContrats(new Criteria(), $con)->diff($commonExecContrats);


        $this->commonExecContratsScheduledForDeletion = $commonExecContratsToDelete;

        foreach ($commonExecContratsToDelete as $commonExecContratRemoved) {
            $commonExecContratRemoved->setCommonExecTypeContrat(null);
        }

        $this->collCommonExecContrats = null;
        foreach ($commonExecContrats as $commonExecContrat) {
            $this->addCommonExecContrat($commonExecContrat);
        }

        $this->collCommonExecContrats = $commonExecContrats;
        $this->collCommonExecContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContrat objects.
     * @throws PropelException
     */
    public function countCommonExecContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContrats());
            }
            $query = CommonExecContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecTypeContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecContrats);
    }

    /**
     * Method called to associate a CommonExecContrat object to this object
     * through the CommonExecContrat foreign key attribute.
     *
     * @param   CommonExecContrat $l CommonExecContrat
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function addCommonExecContrat(CommonExecContrat $l)
    {
        if ($this->collCommonExecContrats === null) {
            $this->initCommonExecContrats();
            $this->collCommonExecContratsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContrat $commonExecContrat The commonExecContrat object to add.
     */
    protected function doAddCommonExecContrat($commonExecContrat)
    {
        $this->collCommonExecContrats[]= $commonExecContrat;
        $commonExecContrat->setCommonExecTypeContrat($this);
    }

    /**
     * @param	CommonExecContrat $commonExecContrat The commonExecContrat object to remove.
     * @return CommonExecTypeContrat The current object (for fluent API support)
     */
    public function removeCommonExecContrat($commonExecContrat)
    {
        if ($this->getCommonExecContrats()->contains($commonExecContrat)) {
            $this->collCommonExecContrats->remove($this->collCommonExecContrats->search($commonExecContrat));
            if (null === $this->commonExecContratsScheduledForDeletion) {
                $this->commonExecContratsScheduledForDeletion = clone $this->collCommonExecContrats;
                $this->commonExecContratsScheduledForDeletion->clear();
            }
            $this->commonExecContratsScheduledForDeletion[]= clone $commonExecContrat;
            $commonExecContrat->setCommonExecTypeContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecTypeContrat is new, it will return
     * an empty collection; or if this CommonExecTypeContrat has previously
     * been saved, it will retrieve related CommonExecContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecTypeContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsJoinCommonExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeStructure', $join_behavior);

        return $this->getCommonExecContrats($query, $con);
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
            if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat) {
                foreach ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecContrats) {
                foreach ($this->collCommonExecContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat instanceof PropelCollection) {
            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->clearIterator();
        }
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null;
        if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat instanceof PropelCollection) {
            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->clearIterator();
        }
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null;
        if ($this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat instanceof PropelCollection) {
            $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat->clearIterator();
        }
        $this->collCommonExecConfigurationFormulairesRelatedByIdTypeContrat = null;
        if ($this->collCommonExecContrats instanceof PropelCollection) {
            $this->collCommonExecContrats->clearIterator();
        }
        $this->collCommonExecContrats = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecTypeContratPeer::DEFAULT_STRING_FORMAT);
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
