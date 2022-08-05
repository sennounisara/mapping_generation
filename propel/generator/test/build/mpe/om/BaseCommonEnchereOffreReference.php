<?php


/**
 * Base class that represents a row from the 'EnchereOffreReference' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEnchereOffreReference extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEnchereOffreReferencePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEnchereOffreReferencePeer
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
     * The value for the idenchereoffre field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $idenchereoffre;

    /**
     * The value for the idencherereference field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $idencherereference;

    /**
     * The value for the valeur field.
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $valeur;

    /**
     * @var        CommonEnchereOffre
     */
    protected $aCommonEnchereOffreRelatedByIdenchereoffreOrganisme;

    /**
     * @var        CommonEnchereOffre
     */
    protected $aCommonEnchereOffreRelatedByIdenchereoffre;

    /**
     * @var        CommonEnchereReference
     */
    protected $aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme;

    /**
     * @var        CommonEnchereReference
     */
    protected $aCommonEnchereReferenceRelatedByIdencherereference;

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
        $this->idenchereoffre = 0;
        $this->idencherereference = 0;
        $this->valeur = 0.0;
    }

    /**
     * Initializes internal state of BaseCommonEnchereOffreReference object.
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
     * Get the [idenchereoffre] column value.
     * 
     * @return int
     */
    public function getIdenchereoffre()
    {

        return $this->idenchereoffre;
    }

    /**
     * Get the [idencherereference] column value.
     * 
     * @return int
     */
    public function getIdencherereference()
    {

        return $this->idencherereference;
    }

    /**
     * Get the [valeur] column value.
     * 
     * @return double
     */
    public function getValeur()
    {

        return $this->valeur;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonEnchereOffreReference The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonEnchereOffreReferencePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonEnchereOffreReference The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonEnchereOffreReferencePeer::ORGANISME;
        }

        if ($this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme !== null && $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->getOrganisme() !== $v) {
            $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme = null;
        }

        if ($this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme !== null && $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->getOrganisme() !== $v) {
            $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [idenchereoffre] column.
     * 
     * @param int $v new value
     * @return CommonEnchereOffreReference The current object (for fluent API support)
     */
    public function setIdenchereoffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idenchereoffre !== $v) {
            $this->idenchereoffre = $v;
            $this->modifiedColumns[] = CommonEnchereOffreReferencePeer::IDENCHEREOFFRE;
        }

        if ($this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme !== null && $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->getId() !== $v) {
            $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme = null;
        }

        if ($this->aCommonEnchereOffreRelatedByIdenchereoffre !== null && $this->aCommonEnchereOffreRelatedByIdenchereoffre->getId() !== $v) {
            $this->aCommonEnchereOffreRelatedByIdenchereoffre = null;
        }


        return $this;
    } // setIdenchereoffre()

    /**
     * Set the value of [idencherereference] column.
     * 
     * @param int $v new value
     * @return CommonEnchereOffreReference The current object (for fluent API support)
     */
    public function setIdencherereference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idencherereference !== $v) {
            $this->idencherereference = $v;
            $this->modifiedColumns[] = CommonEnchereOffreReferencePeer::IDENCHEREREFERENCE;
        }

        if ($this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme !== null && $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->getId() !== $v) {
            $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme = null;
        }

        if ($this->aCommonEnchereReferenceRelatedByIdencherereference !== null && $this->aCommonEnchereReferenceRelatedByIdencherereference->getId() !== $v) {
            $this->aCommonEnchereReferenceRelatedByIdencherereference = null;
        }


        return $this;
    } // setIdencherereference()

    /**
     * Set the value of [valeur] column.
     * 
     * @param double $v new value
     * @return CommonEnchereOffreReference The current object (for fluent API support)
     */
    public function setValeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valeur !== $v) {
            $this->valeur = $v;
            $this->modifiedColumns[] = CommonEnchereOffreReferencePeer::VALEUR;
        }


        return $this;
    } // setValeur()

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

            if ($this->idenchereoffre !== 0) {
                return false;
            }

            if ($this->idencherereference !== 0) {
                return false;
            }

            if ($this->valeur !== 0.0) {
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
            $this->idenchereoffre = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idencherereference = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->valeur = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = CommonEnchereOffreReferencePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEnchereOffreReference object", $e);
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

        if ($this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme !== null && $this->organisme !== $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->getOrganisme()) {
            $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme = null;
        }
        if ($this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme !== null && $this->organisme !== $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->getOrganisme()) {
            $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme = null;
        }
        if ($this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme !== null && $this->idenchereoffre !== $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->getId()) {
            $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme = null;
        }
        if ($this->aCommonEnchereOffreRelatedByIdenchereoffre !== null && $this->idenchereoffre !== $this->aCommonEnchereOffreRelatedByIdenchereoffre->getId()) {
            $this->aCommonEnchereOffreRelatedByIdenchereoffre = null;
        }
        if ($this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme !== null && $this->idencherereference !== $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->getId()) {
            $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme = null;
        }
        if ($this->aCommonEnchereReferenceRelatedByIdencherereference !== null && $this->idencherereference !== $this->aCommonEnchereReferenceRelatedByIdencherereference->getId()) {
            $this->aCommonEnchereReferenceRelatedByIdencherereference = null;
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
            $con = Propel::getConnection(CommonEnchereOffreReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEnchereOffreReferencePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme = null;
            $this->aCommonEnchereOffreRelatedByIdenchereoffre = null;
            $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme = null;
            $this->aCommonEnchereReferenceRelatedByIdencherereference = null;
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
            $con = Propel::getConnection(CommonEnchereOffreReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEnchereOffreReferenceQuery::create()
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
            $con = Propel::getConnection(CommonEnchereOffreReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonEnchereOffreReferencePeer::addInstanceToPool($this);
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

            if ($this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme !== null) {
                if ($this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->isModified() || $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->isNew()) {
                    $affectedRows += $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->save($con);
                }
                $this->setCommonEnchereOffreRelatedByIdenchereoffreOrganisme($this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme);
            }

            if ($this->aCommonEnchereOffreRelatedByIdenchereoffre !== null) {
                if ($this->aCommonEnchereOffreRelatedByIdenchereoffre->isModified() || $this->aCommonEnchereOffreRelatedByIdenchereoffre->isNew()) {
                    $affectedRows += $this->aCommonEnchereOffreRelatedByIdenchereoffre->save($con);
                }
                $this->setCommonEnchereOffreRelatedByIdenchereoffre($this->aCommonEnchereOffreRelatedByIdenchereoffre);
            }

            if ($this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme !== null) {
                if ($this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->isModified() || $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->isNew()) {
                    $affectedRows += $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->save($con);
                }
                $this->setCommonEnchereReferenceRelatedByIdencherereferenceOrganisme($this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme);
            }

            if ($this->aCommonEnchereReferenceRelatedByIdencherereference !== null) {
                if ($this->aCommonEnchereReferenceRelatedByIdencherereference->isModified() || $this->aCommonEnchereReferenceRelatedByIdencherereference->isNew()) {
                    $affectedRows += $this->aCommonEnchereReferenceRelatedByIdencherereference->save($con);
                }
                $this->setCommonEnchereReferenceRelatedByIdencherereference($this->aCommonEnchereReferenceRelatedByIdencherereference);
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

        $this->modifiedColumns[] = CommonEnchereOffreReferencePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonEnchereOffreReferencePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonEnchereOffreReferencePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonEnchereOffreReferencePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonEnchereOffreReferencePeer::IDENCHEREOFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`idEnchereOffre`';
        }
        if ($this->isColumnModified(CommonEnchereOffreReferencePeer::IDENCHEREREFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`idEnchereReference`';
        }
        if ($this->isColumnModified(CommonEnchereOffreReferencePeer::VALEUR)) {
            $modifiedColumns[':p' . $index++]  = '`valeur`';
        }

        $sql = sprintf(
            'INSERT INTO `EnchereOffreReference` (%s) VALUES (%s)',
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
                    case '`idEnchereOffre`':						
                        $stmt->bindValue($identifier, $this->idenchereoffre, PDO::PARAM_INT);
                        break;
                    case '`idEnchereReference`':						
                        $stmt->bindValue($identifier, $this->idencherereference, PDO::PARAM_INT);
                        break;
                    case '`valeur`':						
                        $stmt->bindValue($identifier, $this->valeur, PDO::PARAM_STR);
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

            if ($this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme !== null) {
                if (!$this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->getValidationFailures());
                }
            }

            if ($this->aCommonEnchereOffreRelatedByIdenchereoffre !== null) {
                if (!$this->aCommonEnchereOffreRelatedByIdenchereoffre->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonEnchereOffreRelatedByIdenchereoffre->getValidationFailures());
                }
            }

            if ($this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme !== null) {
                if (!$this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->getValidationFailures());
                }
            }

            if ($this->aCommonEnchereReferenceRelatedByIdencherereference !== null) {
                if (!$this->aCommonEnchereReferenceRelatedByIdencherereference->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonEnchereReferenceRelatedByIdencherereference->getValidationFailures());
                }
            }


            if (($retval = CommonEnchereOffreReferencePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonEnchereOffreReferencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdenchereoffre();
                break;
            case 3:
                return $this->getIdencherereference();
                break;
            case 4:
                return $this->getValeur();
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
        if (isset($alreadyDumpedObjects['CommonEnchereOffreReference'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEnchereOffreReference'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonEnchereOffreReferencePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdenchereoffre(),
            $keys[3] => $this->getIdencherereference(),
            $keys[4] => $this->getValeur(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme) {
                $result['CommonEnchereOffreRelatedByIdenchereoffreOrganisme'] = $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonEnchereOffreRelatedByIdenchereoffre) {
                $result['CommonEnchereOffreRelatedByIdenchereoffre'] = $this->aCommonEnchereOffreRelatedByIdenchereoffre->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme) {
                $result['CommonEnchereReferenceRelatedByIdencherereferenceOrganisme'] = $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonEnchereReferenceRelatedByIdencherereference) {
                $result['CommonEnchereReferenceRelatedByIdencherereference'] = $this->aCommonEnchereReferenceRelatedByIdencherereference->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonEnchereOffreReferencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdenchereoffre($value);
                break;
            case 3:
                $this->setIdencherereference($value);
                break;
            case 4:
                $this->setValeur($value);
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
        $keys = CommonEnchereOffreReferencePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdenchereoffre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdencherereference($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setValeur($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEnchereOffreReferencePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEnchereOffreReferencePeer::ID)) $criteria->add(CommonEnchereOffreReferencePeer::ID, $this->id);
        if ($this->isColumnModified(CommonEnchereOffreReferencePeer::ORGANISME)) $criteria->add(CommonEnchereOffreReferencePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonEnchereOffreReferencePeer::IDENCHEREOFFRE)) $criteria->add(CommonEnchereOffreReferencePeer::IDENCHEREOFFRE, $this->idenchereoffre);
        if ($this->isColumnModified(CommonEnchereOffreReferencePeer::IDENCHEREREFERENCE)) $criteria->add(CommonEnchereOffreReferencePeer::IDENCHEREREFERENCE, $this->idencherereference);
        if ($this->isColumnModified(CommonEnchereOffreReferencePeer::VALEUR)) $criteria->add(CommonEnchereOffreReferencePeer::VALEUR, $this->valeur);

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
        $criteria = new Criteria(CommonEnchereOffreReferencePeer::DATABASE_NAME);
        $criteria->add(CommonEnchereOffreReferencePeer::ID, $this->id);
        $criteria->add(CommonEnchereOffreReferencePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonEnchereOffreReference (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdenchereoffre($this->getIdenchereoffre());
        $copyObj->setIdencherereference($this->getIdencherereference());
        $copyObj->setValeur($this->getValeur());

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
     * @return CommonEnchereOffreReference Clone of current object.
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
     * @return CommonEnchereOffreReferencePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEnchereOffreReferencePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonEnchereOffre object.
     *
     * @param   CommonEnchereOffre $v
     * @return CommonEnchereOffreReference The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonEnchereOffreRelatedByIdenchereoffreOrganisme(CommonEnchereOffre $v = null)
    {
        if ($v === null) {
            $this->setIdenchereoffre(0);
        } else {
            $this->setIdenchereoffre($v->getId());
        }

        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonEnchereOffre object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonEnchereOffre object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonEnchereOffre The associated CommonEnchereOffre object.
     * @throws PropelException
     */
    public function getCommonEnchereOffreRelatedByIdenchereoffreOrganisme(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme === null && ($this->idenchereoffre !== null && ($this->organisme !== "" && $this->organisme !== null)) && $doQuery) {
            $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme = CommonEnchereOffreQuery::create()->findPk(array($this->idenchereoffre, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->addCommonEnchereOffreReferencesRelatedByIdenchereoffreOrganisme($this);
             */
        }

        return $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme;
    }

    /**
     * Declares an association between this object and a CommonEnchereOffre object.
     *
     * @param   CommonEnchereOffre $v
     * @return CommonEnchereOffreReference The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonEnchereOffreRelatedByIdenchereoffre(CommonEnchereOffre $v = null)
    {
        if ($v === null) {
            $this->setIdenchereoffre(0);
        } else {
            $this->setIdenchereoffre($v->getId());
        }

        $this->aCommonEnchereOffreRelatedByIdenchereoffre = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonEnchereOffre object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonEnchereOffreReferenceRelatedByIdenchereoffre($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonEnchereOffre object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonEnchereOffre The associated CommonEnchereOffre object.
     * @throws PropelException
     */
    public function getCommonEnchereOffreRelatedByIdenchereoffre(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonEnchereOffreRelatedByIdenchereoffre === null && ($this->idenchereoffre !== null) && $doQuery) {
            $this->aCommonEnchereOffreRelatedByIdenchereoffre = CommonEnchereOffreQuery::create()
                ->filterByCommonEnchereOffreReferenceRelatedByIdenchereoffre($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonEnchereOffreRelatedByIdenchereoffre->addCommonEnchereOffreReferencesRelatedByIdenchereoffre($this);
             */
        }

        return $this->aCommonEnchereOffreRelatedByIdenchereoffre;
    }

    /**
     * Declares an association between this object and a CommonEnchereReference object.
     *
     * @param   CommonEnchereReference $v
     * @return CommonEnchereOffreReference The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonEnchereReferenceRelatedByIdencherereferenceOrganisme(CommonEnchereReference $v = null)
    {
        if ($v === null) {
            $this->setIdencherereference(0);
        } else {
            $this->setIdencherereference($v->getId());
        }

        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonEnchereReference object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonEnchereReference object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonEnchereReference The associated CommonEnchereReference object.
     * @throws PropelException
     */
    public function getCommonEnchereReferenceRelatedByIdencherereferenceOrganisme(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme === null && ($this->idencherereference !== null && ($this->organisme !== "" && $this->organisme !== null)) && $doQuery) {
            $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme = CommonEnchereReferenceQuery::create()->findPk(array($this->idencherereference, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->addCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme($this);
             */
        }

        return $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme;
    }

    /**
     * Declares an association between this object and a CommonEnchereReference object.
     *
     * @param   CommonEnchereReference $v
     * @return CommonEnchereOffreReference The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonEnchereReferenceRelatedByIdencherereference(CommonEnchereReference $v = null)
    {
        if ($v === null) {
            $this->setIdencherereference(0);
        } else {
            $this->setIdencherereference($v->getId());
        }

        $this->aCommonEnchereReferenceRelatedByIdencherereference = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonEnchereReference object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonEnchereOffreReferenceRelatedByIdencherereference($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonEnchereReference object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonEnchereReference The associated CommonEnchereReference object.
     * @throws PropelException
     */
    public function getCommonEnchereReferenceRelatedByIdencherereference(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonEnchereReferenceRelatedByIdencherereference === null && ($this->idencherereference !== null) && $doQuery) {
            $this->aCommonEnchereReferenceRelatedByIdencherereference = CommonEnchereReferenceQuery::create()
                ->filterByCommonEnchereOffreReferenceRelatedByIdencherereference($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonEnchereReferenceRelatedByIdencherereference->addCommonEnchereOffreReferencesRelatedByIdencherereference($this);
             */
        }

        return $this->aCommonEnchereReferenceRelatedByIdencherereference;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->idenchereoffre = null;
        $this->idencherereference = null;
        $this->valeur = null;
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
            if ($this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme instanceof Persistent) {
              $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme->clearAllReferences($deep);
            }
            if ($this->aCommonEnchereOffreRelatedByIdenchereoffre instanceof Persistent) {
              $this->aCommonEnchereOffreRelatedByIdenchereoffre->clearAllReferences($deep);
            }
            if ($this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme instanceof Persistent) {
              $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme->clearAllReferences($deep);
            }
            if ($this->aCommonEnchereReferenceRelatedByIdencherereference instanceof Persistent) {
              $this->aCommonEnchereReferenceRelatedByIdencherereference->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonEnchereOffreRelatedByIdenchereoffreOrganisme = null;
        $this->aCommonEnchereOffreRelatedByIdenchereoffre = null;
        $this->aCommonEnchereReferenceRelatedByIdencherereferenceOrganisme = null;
        $this->aCommonEnchereReferenceRelatedByIdencherereference = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonEnchereOffreReferencePeer::DEFAULT_STRING_FORMAT);
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