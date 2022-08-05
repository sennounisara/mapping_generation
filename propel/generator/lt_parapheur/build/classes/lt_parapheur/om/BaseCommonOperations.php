<?php


/**
 * Base class that represents a row from the 'Operations' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonOperations extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonOperationsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonOperationsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_operation field.
     * @var        int
     */
    protected $id_operation;

    /**
     * The value for the acronyme field.
     * @var        string
     */
    protected $acronyme;

    /**
     * The value for the id_service field.
     * @var        int
     */
    protected $id_service;

    /**
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the type field.
     * @var        int
     */
    protected $type;

    /**
     * The value for the categorie field.
     * @var        int
     */
    protected $categorie;

    /**
     * The value for the code field.
     * @var        string
     */
    protected $code;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the annee_debut field.
     * @var        string
     */
    protected $annee_debut;

    /**
     * The value for the annee_fin field.
     * @var        string
     */
    protected $annee_fin;

    /**
     * The value for the budget field.
     * @var        string
     */
    protected $budget;

    /**
     * The value for the date_creation field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_modification field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_modification;

    /**
     * The value for the supprime field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprime;

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
        $this->date_creation = '0000-00-00 00:00:00';
        $this->date_modification = '0000-00-00 00:00:00';
        $this->supprime = '0';
    }

    /**
     * Initializes internal state of BaseCommonOperations object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_operation] column value.
     * 
     * @return int
     */
    public function getIdOperation()
    {

        return $this->id_operation;
    }

    /**
     * Get the [acronyme] column value.
     * 
     * @return string
     */
    public function getAcronyme()
    {

        return $this->acronyme;
    }

    /**
     * Get the [id_service] column value.
     * 
     * @return int
     */
    public function getIdService()
    {

        return $this->id_service;
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
     * Get the [type] column value.
     * 
     * @return int
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [categorie] column value.
     * 
     * @return int
     */
    public function getCategorie()
    {

        return $this->categorie;
    }

    /**
     * Get the [code] column value.
     * 
     * @return string
     */
    public function getCode()
    {

        return $this->code;
    }

    /**
     * Get the [description] column value.
     * 
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [annee_debut] column value.
     * 
     * @return string
     */
    public function getAnneeDebut()
    {

        return $this->annee_debut;
    }

    /**
     * Get the [annee_fin] column value.
     * 
     * @return string
     */
    public function getAnneeFin()
    {

        return $this->annee_fin;
    }

    /**
     * Get the [budget] column value.
     * 
     * @return string
     */
    public function getBudget()
    {

        return $this->budget;
    }

    /**
     * Get the [date_creation] column value.
     * 
     * @return string
     */
    public function getDateCreation()
    {

        return $this->date_creation;
    }

    /**
     * Get the [date_modification] column value.
     * 
     * @return string
     */
    public function getDateModification()
    {

        return $this->date_modification;
    }

    /**
     * Get the [supprime] column value.
     * 
     * @return string
     */
    public function getSupprime()
    {

        return $this->supprime;
    }

    /**
     * Set the value of [id_operation] column.
     * 
     * @param int $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setIdOperation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_operation !== $v) {
            $this->id_operation = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::ID_OPERATION;
        }


        return $this;
    } // setIdOperation()

    /**
     * Set the value of [acronyme] column.
     * 
     * @param string $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setAcronyme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme !== $v) {
            $this->acronyme = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::ACRONYME;
        }


        return $this;
    } // setAcronyme()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [type] column.
     * 
     * @param int $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [categorie] column.
     * 
     * @param int $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setCategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->categorie !== $v) {
            $this->categorie = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::CATEGORIE;
        }


        return $this;
    } // setCategorie()

    /**
     * Set the value of [code] column.
     * 
     * @param string $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::CODE;
        }


        return $this;
    } // setCode()

    /**
     * Set the value of [description] column.
     * 
     * @param string $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [annee_debut] column.
     * 
     * @param string $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setAnneeDebut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annee_debut !== $v) {
            $this->annee_debut = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::ANNEE_DEBUT;
        }


        return $this;
    } // setAnneeDebut()

    /**
     * Set the value of [annee_fin] column.
     * 
     * @param string $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setAnneeFin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annee_fin !== $v) {
            $this->annee_fin = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::ANNEE_FIN;
        }


        return $this;
    } // setAnneeFin()

    /**
     * Set the value of [budget] column.
     * 
     * @param string $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setBudget($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->budget !== $v) {
            $this->budget = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::BUDGET;
        }


        return $this;
    } // setBudget()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_modification] column.
     * 
     * @param string $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modification !== $v) {
            $this->date_modification = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::DATE_MODIFICATION;
        }


        return $this;
    } // setDateModification()

    /**
     * Set the value of [supprime] column.
     * 
     * @param string $v new value
     * @return CommonOperations The current object (for fluent API support)
     */
    public function setSupprime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprime !== $v) {
            $this->supprime = $v;
            $this->modifiedColumns[] = CommonOperationsPeer::SUPPRIME;
        }


        return $this;
    } // setSupprime()

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
            if ($this->date_creation !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->date_modification !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->supprime !== '0') {
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

            $this->id_operation = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->acronyme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_service = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_agent = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->type = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->categorie = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->code = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->description = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->annee_debut = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->annee_fin = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->budget = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_creation = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_modification = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->supprime = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = CommonOperationsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonOperations object", $e);
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
            $con = Propel::getConnection(CommonOperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonOperationsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonOperationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonOperationsQuery::create()
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
            $con = Propel::getConnection(CommonOperationsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonOperationsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonOperationsPeer::ID_OPERATION;
        if (null !== $this->id_operation) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonOperationsPeer::ID_OPERATION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonOperationsPeer::ID_OPERATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_operation`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::ACRONYME)) {
            $modifiedColumns[':p' . $index++]  = '`acronyme`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::CATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`categorie`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::CODE)) {
            $modifiedColumns[':p' . $index++]  = '`code`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::ANNEE_DEBUT)) {
            $modifiedColumns[':p' . $index++]  = '`annee_debut`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::ANNEE_FIN)) {
            $modifiedColumns[':p' . $index++]  = '`annee_fin`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::BUDGET)) {
            $modifiedColumns[':p' . $index++]  = '`budget`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonOperationsPeer::SUPPRIME)) {
            $modifiedColumns[':p' . $index++]  = '`supprime`';
        }

        $sql = sprintf(
            'INSERT INTO `Operations` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_operation`':						
                        $stmt->bindValue($identifier, $this->id_operation, PDO::PARAM_INT);
                        break;
                    case '`acronyme`':						
                        $stmt->bindValue($identifier, $this->acronyme, PDO::PARAM_STR);
                        break;
                    case '`id_service`':						
                        $stmt->bindValue($identifier, $this->id_service, PDO::PARAM_INT);
                        break;
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`type`':						
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_INT);
                        break;
                    case '`categorie`':						
                        $stmt->bindValue($identifier, $this->categorie, PDO::PARAM_INT);
                        break;
                    case '`code`':						
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case '`description`':						
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`annee_debut`':						
                        $stmt->bindValue($identifier, $this->annee_debut, PDO::PARAM_STR);
                        break;
                    case '`annee_fin`':						
                        $stmt->bindValue($identifier, $this->annee_fin, PDO::PARAM_STR);
                        break;
                    case '`budget`':						
                        $stmt->bindValue($identifier, $this->budget, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`supprime`':						
                        $stmt->bindValue($identifier, $this->supprime, PDO::PARAM_STR);
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
        $this->setIdOperation($pk);

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


            if (($retval = CommonOperationsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonOperationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdOperation();
                break;
            case 1:
                return $this->getAcronyme();
                break;
            case 2:
                return $this->getIdService();
                break;
            case 3:
                return $this->getIdAgent();
                break;
            case 4:
                return $this->getType();
                break;
            case 5:
                return $this->getCategorie();
                break;
            case 6:
                return $this->getCode();
                break;
            case 7:
                return $this->getDescription();
                break;
            case 8:
                return $this->getAnneeDebut();
                break;
            case 9:
                return $this->getAnneeFin();
                break;
            case 10:
                return $this->getBudget();
                break;
            case 11:
                return $this->getDateCreation();
                break;
            case 12:
                return $this->getDateModification();
                break;
            case 13:
                return $this->getSupprime();
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
        if (isset($alreadyDumpedObjects['CommonOperations'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonOperations'][$this->getPrimaryKey()] = true;
        $keys = CommonOperationsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdOperation(),
            $keys[1] => $this->getAcronyme(),
            $keys[2] => $this->getIdService(),
            $keys[3] => $this->getIdAgent(),
            $keys[4] => $this->getType(),
            $keys[5] => $this->getCategorie(),
            $keys[6] => $this->getCode(),
            $keys[7] => $this->getDescription(),
            $keys[8] => $this->getAnneeDebut(),
            $keys[9] => $this->getAnneeFin(),
            $keys[10] => $this->getBudget(),
            $keys[11] => $this->getDateCreation(),
            $keys[12] => $this->getDateModification(),
            $keys[13] => $this->getSupprime(),
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
        $pos = CommonOperationsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdOperation($value);
                break;
            case 1:
                $this->setAcronyme($value);
                break;
            case 2:
                $this->setIdService($value);
                break;
            case 3:
                $this->setIdAgent($value);
                break;
            case 4:
                $this->setType($value);
                break;
            case 5:
                $this->setCategorie($value);
                break;
            case 6:
                $this->setCode($value);
                break;
            case 7:
                $this->setDescription($value);
                break;
            case 8:
                $this->setAnneeDebut($value);
                break;
            case 9:
                $this->setAnneeFin($value);
                break;
            case 10:
                $this->setBudget($value);
                break;
            case 11:
                $this->setDateCreation($value);
                break;
            case 12:
                $this->setDateModification($value);
                break;
            case 13:
                $this->setSupprime($value);
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
        $keys = CommonOperationsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdOperation($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAcronyme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdService($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdAgent($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setType($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCategorie($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDescription($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAnneeDebut($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAnneeFin($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setBudget($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateCreation($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateModification($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSupprime($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonOperationsPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonOperationsPeer::ID_OPERATION)) $criteria->add(CommonOperationsPeer::ID_OPERATION, $this->id_operation);
        if ($this->isColumnModified(CommonOperationsPeer::ACRONYME)) $criteria->add(CommonOperationsPeer::ACRONYME, $this->acronyme);
        if ($this->isColumnModified(CommonOperationsPeer::ID_SERVICE)) $criteria->add(CommonOperationsPeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(CommonOperationsPeer::ID_AGENT)) $criteria->add(CommonOperationsPeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonOperationsPeer::TYPE)) $criteria->add(CommonOperationsPeer::TYPE, $this->type);
        if ($this->isColumnModified(CommonOperationsPeer::CATEGORIE)) $criteria->add(CommonOperationsPeer::CATEGORIE, $this->categorie);
        if ($this->isColumnModified(CommonOperationsPeer::CODE)) $criteria->add(CommonOperationsPeer::CODE, $this->code);
        if ($this->isColumnModified(CommonOperationsPeer::DESCRIPTION)) $criteria->add(CommonOperationsPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(CommonOperationsPeer::ANNEE_DEBUT)) $criteria->add(CommonOperationsPeer::ANNEE_DEBUT, $this->annee_debut);
        if ($this->isColumnModified(CommonOperationsPeer::ANNEE_FIN)) $criteria->add(CommonOperationsPeer::ANNEE_FIN, $this->annee_fin);
        if ($this->isColumnModified(CommonOperationsPeer::BUDGET)) $criteria->add(CommonOperationsPeer::BUDGET, $this->budget);
        if ($this->isColumnModified(CommonOperationsPeer::DATE_CREATION)) $criteria->add(CommonOperationsPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonOperationsPeer::DATE_MODIFICATION)) $criteria->add(CommonOperationsPeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonOperationsPeer::SUPPRIME)) $criteria->add(CommonOperationsPeer::SUPPRIME, $this->supprime);

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
        $criteria = new Criteria(CommonOperationsPeer::DATABASE_NAME);
        $criteria->add(CommonOperationsPeer::ID_OPERATION, $this->id_operation);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdOperation();
    }

    /**
     * Generic method to set the primary key (id_operation column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdOperation($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdOperation();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonOperations (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAcronyme($this->getAcronyme());
        $copyObj->setIdService($this->getIdService());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setType($this->getType());
        $copyObj->setCategorie($this->getCategorie());
        $copyObj->setCode($this->getCode());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setAnneeDebut($this->getAnneeDebut());
        $copyObj->setAnneeFin($this->getAnneeFin());
        $copyObj->setBudget($this->getBudget());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setSupprime($this->getSupprime());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdOperation(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonOperations Clone of current object.
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
     * @return CommonOperationsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonOperationsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_operation = null;
        $this->acronyme = null;
        $this->id_service = null;
        $this->id_agent = null;
        $this->type = null;
        $this->categorie = null;
        $this->code = null;
        $this->description = null;
        $this->annee_debut = null;
        $this->annee_fin = null;
        $this->budget = null;
        $this->date_creation = null;
        $this->date_modification = null;
        $this->supprime = null;
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
        return (string) $this->exportTo(CommonOperationsPeer::DEFAULT_STRING_FORMAT);
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
