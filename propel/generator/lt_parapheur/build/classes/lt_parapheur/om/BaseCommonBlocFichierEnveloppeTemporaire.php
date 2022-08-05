<?php


/**
 * Base class that represents a row from the 'blocFichierEnveloppeTemporaire' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBlocFichierEnveloppeTemporaire extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonBlocFichierEnveloppeTemporairePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonBlocFichierEnveloppeTemporairePeer
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
     * The value for the uid field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $uid;

    /**
     * The value for the type_env field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_env;

    /**
     * The value for the sous_pli field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $sous_pli;

    /**
     * The value for the type_fichier field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $type_fichier;

    /**
     * The value for the numero_ordre_fichier field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $numero_ordre_fichier;

    /**
     * The value for the numero_ordre_bloc field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $numero_ordre_bloc;

    /**
     * The value for the id_blob field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_blob;

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
        $this->uid = '';
        $this->type_env = 0;
        $this->sous_pli = 0;
        $this->type_fichier = '';
        $this->numero_ordre_fichier = 0;
        $this->numero_ordre_bloc = 0;
        $this->id_blob = 0;
    }

    /**
     * Initializes internal state of BaseCommonBlocFichierEnveloppeTemporaire object.
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
     * Get the [uid] column value.
     * 
     * @return string
     */
    public function getUid()
    {

        return $this->uid;
    }

    /**
     * Get the [type_env] column value.
     * 
     * @return int
     */
    public function getTypeEnv()
    {

        return $this->type_env;
    }

    /**
     * Get the [sous_pli] column value.
     * 
     * @return int
     */
    public function getSousPli()
    {

        return $this->sous_pli;
    }

    /**
     * Get the [type_fichier] column value.
     * 
     * @return string
     */
    public function getTypeFichier()
    {

        return $this->type_fichier;
    }

    /**
     * Get the [numero_ordre_fichier] column value.
     * 
     * @return int
     */
    public function getNumeroOrdreFichier()
    {

        return $this->numero_ordre_fichier;
    }

    /**
     * Get the [numero_ordre_bloc] column value.
     * 
     * @return int
     */
    public function getNumeroOrdreBloc()
    {

        return $this->numero_ordre_bloc;
    }

    /**
     * Get the [id_blob] column value.
     * 
     * @return int
     */
    public function getIdBlob()
    {

        return $this->id_blob;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppeTemporaire The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppeTemporairePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonBlocFichierEnveloppeTemporaire The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppeTemporairePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [uid] column.
     * 
     * @param string $v new value
     * @return CommonBlocFichierEnveloppeTemporaire The current object (for fluent API support)
     */
    public function setUid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->uid !== $v) {
            $this->uid = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppeTemporairePeer::UID;
        }


        return $this;
    } // setUid()

    /**
     * Set the value of [type_env] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppeTemporaire The current object (for fluent API support)
     */
    public function setTypeEnv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_env !== $v) {
            $this->type_env = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppeTemporairePeer::TYPE_ENV;
        }


        return $this;
    } // setTypeEnv()

    /**
     * Set the value of [sous_pli] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppeTemporaire The current object (for fluent API support)
     */
    public function setSousPli($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sous_pli !== $v) {
            $this->sous_pli = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppeTemporairePeer::SOUS_PLI;
        }


        return $this;
    } // setSousPli()

    /**
     * Set the value of [type_fichier] column.
     * 
     * @param string $v new value
     * @return CommonBlocFichierEnveloppeTemporaire The current object (for fluent API support)
     */
    public function setTypeFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_fichier !== $v) {
            $this->type_fichier = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppeTemporairePeer::TYPE_FICHIER;
        }


        return $this;
    } // setTypeFichier()

    /**
     * Set the value of [numero_ordre_fichier] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppeTemporaire The current object (for fluent API support)
     */
    public function setNumeroOrdreFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero_ordre_fichier !== $v) {
            $this->numero_ordre_fichier = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_FICHIER;
        }


        return $this;
    } // setNumeroOrdreFichier()

    /**
     * Set the value of [numero_ordre_bloc] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppeTemporaire The current object (for fluent API support)
     */
    public function setNumeroOrdreBloc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero_ordre_bloc !== $v) {
            $this->numero_ordre_bloc = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_BLOC;
        }


        return $this;
    } // setNumeroOrdreBloc()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppeTemporaire The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppeTemporairePeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

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

            if ($this->uid !== '') {
                return false;
            }

            if ($this->type_env !== 0) {
                return false;
            }

            if ($this->sous_pli !== 0) {
                return false;
            }

            if ($this->type_fichier !== '') {
                return false;
            }

            if ($this->numero_ordre_fichier !== 0) {
                return false;
            }

            if ($this->numero_ordre_bloc !== 0) {
                return false;
            }

            if ($this->id_blob !== 0) {
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
            $this->uid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->type_env = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->sous_pli = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->type_fichier = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->numero_ordre_fichier = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->numero_ordre_bloc = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->id_blob = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = CommonBlocFichierEnveloppeTemporairePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonBlocFichierEnveloppeTemporaire object", $e);
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
            $con = Propel::getConnection(CommonBlocFichierEnveloppeTemporairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonBlocFichierEnveloppeTemporairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonBlocFichierEnveloppeTemporairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonBlocFichierEnveloppeTemporaireQuery::create()
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
            $con = Propel::getConnection(CommonBlocFichierEnveloppeTemporairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonBlocFichierEnveloppeTemporairePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonBlocFichierEnveloppeTemporairePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonBlocFichierEnveloppeTemporairePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::UID)) {
            $modifiedColumns[':p' . $index++]  = '`uid`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::TYPE_ENV)) {
            $modifiedColumns[':p' . $index++]  = '`type_env`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::SOUS_PLI)) {
            $modifiedColumns[':p' . $index++]  = '`sous_pli`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::TYPE_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`type_fichier`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`numero_ordre_fichier`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_BLOC)) {
            $modifiedColumns[':p' . $index++]  = '`numero_ordre_bloc`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob`';
        }

        $sql = sprintf(
            'INSERT INTO `blocFichierEnveloppeTemporaire` (%s) VALUES (%s)',
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
                    case '`uid`':						
                        $stmt->bindValue($identifier, $this->uid, PDO::PARAM_STR);
                        break;
                    case '`type_env`':						
                        $stmt->bindValue($identifier, $this->type_env, PDO::PARAM_INT);
                        break;
                    case '`sous_pli`':						
                        $stmt->bindValue($identifier, $this->sous_pli, PDO::PARAM_INT);
                        break;
                    case '`type_fichier`':						
                        $stmt->bindValue($identifier, $this->type_fichier, PDO::PARAM_STR);
                        break;
                    case '`numero_ordre_fichier`':						
                        $stmt->bindValue($identifier, $this->numero_ordre_fichier, PDO::PARAM_INT);
                        break;
                    case '`numero_ordre_bloc`':						
                        $stmt->bindValue($identifier, $this->numero_ordre_bloc, PDO::PARAM_INT);
                        break;
                    case '`id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
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


            if (($retval = CommonBlocFichierEnveloppeTemporairePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonBlocFichierEnveloppeTemporairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUid();
                break;
            case 3:
                return $this->getTypeEnv();
                break;
            case 4:
                return $this->getSousPli();
                break;
            case 5:
                return $this->getTypeFichier();
                break;
            case 6:
                return $this->getNumeroOrdreFichier();
                break;
            case 7:
                return $this->getNumeroOrdreBloc();
                break;
            case 8:
                return $this->getIdBlob();
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
        if (isset($alreadyDumpedObjects['CommonBlocFichierEnveloppeTemporaire'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonBlocFichierEnveloppeTemporaire'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonBlocFichierEnveloppeTemporairePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getUid(),
            $keys[3] => $this->getTypeEnv(),
            $keys[4] => $this->getSousPli(),
            $keys[5] => $this->getTypeFichier(),
            $keys[6] => $this->getNumeroOrdreFichier(),
            $keys[7] => $this->getNumeroOrdreBloc(),
            $keys[8] => $this->getIdBlob(),
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
        $pos = CommonBlocFichierEnveloppeTemporairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUid($value);
                break;
            case 3:
                $this->setTypeEnv($value);
                break;
            case 4:
                $this->setSousPli($value);
                break;
            case 5:
                $this->setTypeFichier($value);
                break;
            case 6:
                $this->setNumeroOrdreFichier($value);
                break;
            case 7:
                $this->setNumeroOrdreBloc($value);
                break;
            case 8:
                $this->setIdBlob($value);
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
        $keys = CommonBlocFichierEnveloppeTemporairePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUid($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTypeEnv($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSousPli($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTypeFichier($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNumeroOrdreFichier($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNumeroOrdreBloc($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdBlob($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonBlocFichierEnveloppeTemporairePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::ID)) $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::ID, $this->id);
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::ORGANISME)) $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::UID)) $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::UID, $this->uid);
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::TYPE_ENV)) $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::TYPE_ENV, $this->type_env);
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::SOUS_PLI)) $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::SOUS_PLI, $this->sous_pli);
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::TYPE_FICHIER)) $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::TYPE_FICHIER, $this->type_fichier);
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_FICHIER)) $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_FICHIER, $this->numero_ordre_fichier);
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_BLOC)) $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_BLOC, $this->numero_ordre_bloc);
        if ($this->isColumnModified(CommonBlocFichierEnveloppeTemporairePeer::ID_BLOB)) $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::ID_BLOB, $this->id_blob);

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
        $criteria = new Criteria(CommonBlocFichierEnveloppeTemporairePeer::DATABASE_NAME);
        $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::ID, $this->id);
        $criteria->add(CommonBlocFichierEnveloppeTemporairePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonBlocFichierEnveloppeTemporaire (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setUid($this->getUid());
        $copyObj->setTypeEnv($this->getTypeEnv());
        $copyObj->setSousPli($this->getSousPli());
        $copyObj->setTypeFichier($this->getTypeFichier());
        $copyObj->setNumeroOrdreFichier($this->getNumeroOrdreFichier());
        $copyObj->setNumeroOrdreBloc($this->getNumeroOrdreBloc());
        $copyObj->setIdBlob($this->getIdBlob());
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
     * @return CommonBlocFichierEnveloppeTemporaire Clone of current object.
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
     * @return CommonBlocFichierEnveloppeTemporairePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonBlocFichierEnveloppeTemporairePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->uid = null;
        $this->type_env = null;
        $this->sous_pli = null;
        $this->type_fichier = null;
        $this->numero_ordre_fichier = null;
        $this->numero_ordre_bloc = null;
        $this->id_blob = null;
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
        return (string) $this->exportTo(CommonBlocFichierEnveloppeTemporairePeer::DEFAULT_STRING_FORMAT);
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
