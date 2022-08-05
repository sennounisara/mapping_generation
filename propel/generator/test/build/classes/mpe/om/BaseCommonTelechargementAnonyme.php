<?php


/**
 * Base class that represents a row from the 'TelechargementAnonyme' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTelechargementAnonyme extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTelechargementAnonymePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTelechargementAnonymePeer
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
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the datetelechargement field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $datetelechargement;

    /**
     * The value for the tirage_plan field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $tirage_plan;

    /**
     * The value for the support field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $support;

    /**
     * The value for the noms_fichiers_dce field.
     * @var        string
     */
    protected $noms_fichiers_dce;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultationRelatedByOrganismeConsultationRef;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultationRelatedByConsultationRef;

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
        $this->organisme = '';
        $this->datetelechargement = '0000-00-00 00:00:00';
        $this->tirage_plan = 0;
        $this->support = '1';
    }

    /**
     * Initializes internal state of BaseCommonTelechargementAnonyme object.
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
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [datetelechargement] column value.
     * 
     * @return string
     */
    public function getDatetelechargement()
    {

        return $this->datetelechargement;
    }

    /**
     * Get the [tirage_plan] column value.
     * 
     * @return int
     */
    public function getTiragePlan()
    {

        return $this->tirage_plan;
    }

    /**
     * Get the [support] column value.
     * 
     * @return string
     */
    public function getSupport()
    {

        return $this->support;
    }

    /**
     * Get the [noms_fichiers_dce] column value.
     * 
     * @return string
     */
    public function getNomsFichiersDce()
    {

        return $this->noms_fichiers_dce;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonTelechargementAnonyme The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonTelechargementAnonymePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTelechargementAnonyme The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTelechargementAnonymePeer::ORGANISME;
        }

        if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null && $this->aCommonConsultationRelatedByOrganismeConsultationRef->getOrganisme() !== $v) {
            $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonTelechargementAnonyme The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonTelechargementAnonymePeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null && $this->aCommonConsultationRelatedByOrganismeConsultationRef->getReference() !== $v) {
            $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
        }

        if ($this->aCommonConsultationRelatedByConsultationRef !== null && $this->aCommonConsultationRelatedByConsultationRef->getReference() !== $v) {
            $this->aCommonConsultationRelatedByConsultationRef = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [datetelechargement] column.
     * 
     * @param string $v new value
     * @return CommonTelechargementAnonyme The current object (for fluent API support)
     */
    public function setDatetelechargement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datetelechargement !== $v) {
            $this->datetelechargement = $v;
            $this->modifiedColumns[] = CommonTelechargementAnonymePeer::DATETELECHARGEMENT;
        }


        return $this;
    } // setDatetelechargement()

    /**
     * Set the value of [tirage_plan] column.
     * 
     * @param int $v new value
     * @return CommonTelechargementAnonyme The current object (for fluent API support)
     */
    public function setTiragePlan($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tirage_plan !== $v) {
            $this->tirage_plan = $v;
            $this->modifiedColumns[] = CommonTelechargementAnonymePeer::TIRAGE_PLAN;
        }


        return $this;
    } // setTiragePlan()

    /**
     * Set the value of [support] column.
     * 
     * @param string $v new value
     * @return CommonTelechargementAnonyme The current object (for fluent API support)
     */
    public function setSupport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->support !== $v) {
            $this->support = $v;
            $this->modifiedColumns[] = CommonTelechargementAnonymePeer::SUPPORT;
        }


        return $this;
    } // setSupport()

    /**
     * Set the value of [noms_fichiers_dce] column.
     * 
     * @param string $v new value
     * @return CommonTelechargementAnonyme The current object (for fluent API support)
     */
    public function setNomsFichiersDce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->noms_fichiers_dce !== $v) {
            $this->noms_fichiers_dce = $v;
            $this->modifiedColumns[] = CommonTelechargementAnonymePeer::NOMS_FICHIERS_DCE;
        }


        return $this;
    } // setNomsFichiersDce()

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
            if ($this->organisme !== '') {
                return false;
            }

            if ($this->datetelechargement !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->tirage_plan !== 0) {
                return false;
            }

            if ($this->support !== '1') {
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
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->consultation_ref = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->datetelechargement = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->tirage_plan = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->support = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->noms_fichiers_dce = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = CommonTelechargementAnonymePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTelechargementAnonyme object", $e);
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

        if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null && $this->organisme !== $this->aCommonConsultationRelatedByOrganismeConsultationRef->getOrganisme()) {
            $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
        }
        if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null && $this->consultation_ref !== $this->aCommonConsultationRelatedByOrganismeConsultationRef->getReference()) {
            $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
        }
        if ($this->aCommonConsultationRelatedByConsultationRef !== null && $this->consultation_ref !== $this->aCommonConsultationRelatedByConsultationRef->getReference()) {
            $this->aCommonConsultationRelatedByConsultationRef = null;
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
            $con = Propel::getConnection(CommonTelechargementAnonymePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTelechargementAnonymePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
            $this->aCommonConsultationRelatedByConsultationRef = null;
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
            $con = Propel::getConnection(CommonTelechargementAnonymePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTelechargementAnonymeQuery::create()
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
            $con = Propel::getConnection(CommonTelechargementAnonymePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTelechargementAnonymePeer::addInstanceToPool($this);
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

            if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null) {
                if ($this->aCommonConsultationRelatedByOrganismeConsultationRef->isModified() || $this->aCommonConsultationRelatedByOrganismeConsultationRef->isNew()) {
                    $affectedRows += $this->aCommonConsultationRelatedByOrganismeConsultationRef->save($con);
                }
                $this->setCommonConsultationRelatedByOrganismeConsultationRef($this->aCommonConsultationRelatedByOrganismeConsultationRef);
            }

            if ($this->aCommonConsultationRelatedByConsultationRef !== null) {
                if ($this->aCommonConsultationRelatedByConsultationRef->isModified() || $this->aCommonConsultationRelatedByConsultationRef->isNew()) {
                    $affectedRows += $this->aCommonConsultationRelatedByConsultationRef->save($con);
                }
                $this->setCommonConsultationRelatedByConsultationRef($this->aCommonConsultationRelatedByConsultationRef);
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

        $this->modifiedColumns[] = CommonTelechargementAnonymePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTelechargementAnonymePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::DATETELECHARGEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`datetelechargement`';
        }
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::TIRAGE_PLAN)) {
            $modifiedColumns[':p' . $index++]  = '`tirage_plan`';
        }
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::SUPPORT)) {
            $modifiedColumns[':p' . $index++]  = '`support`';
        }
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::NOMS_FICHIERS_DCE)) {
            $modifiedColumns[':p' . $index++]  = '`noms_fichiers_dce`';
        }

        $sql = sprintf(
            'INSERT INTO `TelechargementAnonyme` (%s) VALUES (%s)',
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
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`datetelechargement`':						
                        $stmt->bindValue($identifier, $this->datetelechargement, PDO::PARAM_STR);
                        break;
                    case '`tirage_plan`':						
                        $stmt->bindValue($identifier, $this->tirage_plan, PDO::PARAM_INT);
                        break;
                    case '`support`':						
                        $stmt->bindValue($identifier, $this->support, PDO::PARAM_STR);
                        break;
                    case '`noms_fichiers_dce`':						
                        $stmt->bindValue($identifier, $this->noms_fichiers_dce, PDO::PARAM_STR);
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

            if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null) {
                if (!$this->aCommonConsultationRelatedByOrganismeConsultationRef->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultationRelatedByOrganismeConsultationRef->getValidationFailures());
                }
            }

            if ($this->aCommonConsultationRelatedByConsultationRef !== null) {
                if (!$this->aCommonConsultationRelatedByConsultationRef->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultationRelatedByConsultationRef->getValidationFailures());
                }
            }


            if (($retval = CommonTelechargementAnonymePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTelechargementAnonymePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getConsultationRef();
                break;
            case 3:
                return $this->getDatetelechargement();
                break;
            case 4:
                return $this->getTiragePlan();
                break;
            case 5:
                return $this->getSupport();
                break;
            case 6:
                return $this->getNomsFichiersDce();
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
        if (isset($alreadyDumpedObjects['CommonTelechargementAnonyme'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTelechargementAnonyme'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTelechargementAnonymePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getConsultationRef(),
            $keys[3] => $this->getDatetelechargement(),
            $keys[4] => $this->getTiragePlan(),
            $keys[5] => $this->getSupport(),
            $keys[6] => $this->getNomsFichiersDce(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultationRelatedByOrganismeConsultationRef) {
                $result['CommonConsultationRelatedByOrganismeConsultationRef'] = $this->aCommonConsultationRelatedByOrganismeConsultationRef->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonConsultationRelatedByConsultationRef) {
                $result['CommonConsultationRelatedByConsultationRef'] = $this->aCommonConsultationRelatedByConsultationRef->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonTelechargementAnonymePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setConsultationRef($value);
                break;
            case 3:
                $this->setDatetelechargement($value);
                break;
            case 4:
                $this->setTiragePlan($value);
                break;
            case 5:
                $this->setSupport($value);
                break;
            case 6:
                $this->setNomsFichiersDce($value);
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
        $keys = CommonTelechargementAnonymePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDatetelechargement($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTiragePlan($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSupport($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNomsFichiersDce($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTelechargementAnonymePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTelechargementAnonymePeer::ID)) $criteria->add(CommonTelechargementAnonymePeer::ID, $this->id);
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::ORGANISME)) $criteria->add(CommonTelechargementAnonymePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::CONSULTATION_REF)) $criteria->add(CommonTelechargementAnonymePeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::DATETELECHARGEMENT)) $criteria->add(CommonTelechargementAnonymePeer::DATETELECHARGEMENT, $this->datetelechargement);
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::TIRAGE_PLAN)) $criteria->add(CommonTelechargementAnonymePeer::TIRAGE_PLAN, $this->tirage_plan);
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::SUPPORT)) $criteria->add(CommonTelechargementAnonymePeer::SUPPORT, $this->support);
        if ($this->isColumnModified(CommonTelechargementAnonymePeer::NOMS_FICHIERS_DCE)) $criteria->add(CommonTelechargementAnonymePeer::NOMS_FICHIERS_DCE, $this->noms_fichiers_dce);

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
        $criteria = new Criteria(CommonTelechargementAnonymePeer::DATABASE_NAME);
        $criteria->add(CommonTelechargementAnonymePeer::ID, $this->id);
        $criteria->add(CommonTelechargementAnonymePeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getId();
        $pks[1] = $this->getOrganisme();

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
        $this->setId($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTelechargementAnonyme (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setDatetelechargement($this->getDatetelechargement());
        $copyObj->setTiragePlan($this->getTiragePlan());
        $copyObj->setSupport($this->getSupport());
        $copyObj->setNomsFichiersDce($this->getNomsFichiersDce());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return CommonTelechargementAnonyme Clone of current object.
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
     * @return CommonTelechargementAnonymePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTelechargementAnonymePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonTelechargementAnonyme The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultationRelatedByOrganismeConsultationRef(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setConsultationRef(NULL);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultationRelatedByOrganismeConsultationRef = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTelechargementAnonymeRelatedByOrganismeConsultationRef($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultation The associated CommonConsultation object.
     * @throws PropelException
     */
    public function getCommonConsultationRelatedByOrganismeConsultationRef(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultationRelatedByOrganismeConsultationRef === null && (($this->organisme !== "" && $this->organisme !== null) && $this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultationRelatedByOrganismeConsultationRef = CommonConsultationQuery::create()->findPk(array($this->consultation_ref, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultationRelatedByOrganismeConsultationRef->addCommonTelechargementAnonymesRelatedByOrganismeConsultationRef($this);
             */
        }

        return $this->aCommonConsultationRelatedByOrganismeConsultationRef;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonTelechargementAnonyme The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultationRelatedByConsultationRef(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setConsultationRef(NULL);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultationRelatedByConsultationRef = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTelechargementAnonymeRelatedByConsultationRef($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultation The associated CommonConsultation object.
     * @throws PropelException
     */
    public function getCommonConsultationRelatedByConsultationRef(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultationRelatedByConsultationRef === null && ($this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultationRelatedByConsultationRef = CommonConsultationQuery::create()
                ->filterByCommonTelechargementAnonymeRelatedByConsultationRef($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultationRelatedByConsultationRef->addCommonTelechargementAnonymesRelatedByConsultationRef($this);
             */
        }

        return $this->aCommonConsultationRelatedByConsultationRef;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->consultation_ref = null;
        $this->datetelechargement = null;
        $this->tirage_plan = null;
        $this->support = null;
        $this->noms_fichiers_dce = null;
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
            if ($this->aCommonConsultationRelatedByOrganismeConsultationRef instanceof Persistent) {
              $this->aCommonConsultationRelatedByOrganismeConsultationRef->clearAllReferences($deep);
            }
            if ($this->aCommonConsultationRelatedByConsultationRef instanceof Persistent) {
              $this->aCommonConsultationRelatedByConsultationRef->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
        $this->aCommonConsultationRelatedByConsultationRef = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTelechargementAnonymePeer::DEFAULT_STRING_FORMAT);
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
