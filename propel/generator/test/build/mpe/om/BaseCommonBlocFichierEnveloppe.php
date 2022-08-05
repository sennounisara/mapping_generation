<?php


/**
 * Base class that represents a row from the 'blocFichierEnveloppe' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonBlocFichierEnveloppe extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonBlocFichierEnveloppePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonBlocFichierEnveloppePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_bloc_fichier field.
     * @var        int
     */
    protected $id_bloc_fichier;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_fichier field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_fichier;

    /**
     * The value for the numero_ordre_bloc field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $numero_ordre_bloc;

    /**
     * The value for the id_blob_chiffre field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_blob_chiffre;

    /**
     * The value for the id_blob_dechiffre field.
     * @var        int
     */
    protected $id_blob_dechiffre;

    /**
     * @var        CommonFichierEnveloppe
     */
    protected $aCommonFichierEnveloppe;

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
        $this->id_fichier = 0;
        $this->numero_ordre_bloc = 0;
        $this->id_blob_chiffre = 0;
    }

    /**
     * Initializes internal state of BaseCommonBlocFichierEnveloppe object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_bloc_fichier] column value.
     * 
     * @return int
     */
    public function getIdBlocFichier()
    {

        return $this->id_bloc_fichier;
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
     * Get the [id_fichier] column value.
     * 
     * @return int
     */
    public function getIdFichier()
    {

        return $this->id_fichier;
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
     * Get the [id_blob_chiffre] column value.
     * 
     * @return int
     */
    public function getIdBlobChiffre()
    {

        return $this->id_blob_chiffre;
    }

    /**
     * Get the [id_blob_dechiffre] column value.
     * 
     * @return int
     */
    public function getIdBlobDechiffre()
    {

        return $this->id_blob_dechiffre;
    }

    /**
     * Set the value of [id_bloc_fichier] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppe The current object (for fluent API support)
     */
    public function setIdBlocFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_bloc_fichier !== $v) {
            $this->id_bloc_fichier = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER;
        }


        return $this;
    } // setIdBlocFichier()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonBlocFichierEnveloppe The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppePeer::ORGANISME;
        }

        if ($this->aCommonFichierEnveloppe !== null && $this->aCommonFichierEnveloppe->getOrganisme() !== $v) {
            $this->aCommonFichierEnveloppe = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_fichier] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppe The current object (for fluent API support)
     */
    public function setIdFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_fichier !== $v) {
            $this->id_fichier = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppePeer::ID_FICHIER;
        }

        if ($this->aCommonFichierEnveloppe !== null && $this->aCommonFichierEnveloppe->getIdFichier() !== $v) {
            $this->aCommonFichierEnveloppe = null;
        }


        return $this;
    } // setIdFichier()

    /**
     * Set the value of [numero_ordre_bloc] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppe The current object (for fluent API support)
     */
    public function setNumeroOrdreBloc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero_ordre_bloc !== $v) {
            $this->numero_ordre_bloc = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppePeer::NUMERO_ORDRE_BLOC;
        }


        return $this;
    } // setNumeroOrdreBloc()

    /**
     * Set the value of [id_blob_chiffre] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppe The current object (for fluent API support)
     */
    public function setIdBlobChiffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_chiffre !== $v) {
            $this->id_blob_chiffre = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppePeer::ID_BLOB_CHIFFRE;
        }


        return $this;
    } // setIdBlobChiffre()

    /**
     * Set the value of [id_blob_dechiffre] column.
     * 
     * @param int $v new value
     * @return CommonBlocFichierEnveloppe The current object (for fluent API support)
     */
    public function setIdBlobDechiffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_dechiffre !== $v) {
            $this->id_blob_dechiffre = $v;
            $this->modifiedColumns[] = CommonBlocFichierEnveloppePeer::ID_BLOB_DECHIFFRE;
        }


        return $this;
    } // setIdBlobDechiffre()

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

            if ($this->id_fichier !== 0) {
                return false;
            }

            if ($this->numero_ordre_bloc !== 0) {
                return false;
            }

            if ($this->id_blob_chiffre !== 0) {
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

            $this->id_bloc_fichier = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_fichier = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->numero_ordre_bloc = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_blob_chiffre = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->id_blob_dechiffre = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = CommonBlocFichierEnveloppePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonBlocFichierEnveloppe object", $e);
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

        if ($this->aCommonFichierEnveloppe !== null && $this->organisme !== $this->aCommonFichierEnveloppe->getOrganisme()) {
            $this->aCommonFichierEnveloppe = null;
        }
        if ($this->aCommonFichierEnveloppe !== null && $this->id_fichier !== $this->aCommonFichierEnveloppe->getIdFichier()) {
            $this->aCommonFichierEnveloppe = null;
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
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonBlocFichierEnveloppePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonFichierEnveloppe = null;
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
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonBlocFichierEnveloppeQuery::create()
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
            $con = Propel::getConnection(CommonBlocFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonBlocFichierEnveloppePeer::addInstanceToPool($this);
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

            if ($this->aCommonFichierEnveloppe !== null) {
                if ($this->aCommonFichierEnveloppe->isModified() || $this->aCommonFichierEnveloppe->isNew()) {
                    $affectedRows += $this->aCommonFichierEnveloppe->save($con);
                }
                $this->setCommonFichierEnveloppe($this->aCommonFichierEnveloppe);
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

        $this->modifiedColumns[] = CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER;
        if (null !== $this->id_bloc_fichier) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`id_bloc_fichier`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::ID_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`id_fichier`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::NUMERO_ORDRE_BLOC)) {
            $modifiedColumns[':p' . $index++]  = '`numero_ordre_bloc`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::ID_BLOB_CHIFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob_chiffre`';
        }
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::ID_BLOB_DECHIFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob_dechiffre`';
        }

        $sql = sprintf(
            'INSERT INTO `blocFichierEnveloppe` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_bloc_fichier`':						
                        $stmt->bindValue($identifier, $this->id_bloc_fichier, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_fichier`':						
                        $stmt->bindValue($identifier, $this->id_fichier, PDO::PARAM_INT);
                        break;
                    case '`numero_ordre_bloc`':						
                        $stmt->bindValue($identifier, $this->numero_ordre_bloc, PDO::PARAM_INT);
                        break;
                    case '`id_blob_chiffre`':						
                        $stmt->bindValue($identifier, $this->id_blob_chiffre, PDO::PARAM_INT);
                        break;
                    case '`id_blob_dechiffre`':						
                        $stmt->bindValue($identifier, $this->id_blob_dechiffre, PDO::PARAM_INT);
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
        $this->setIdBlocFichier($pk);

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

            if ($this->aCommonFichierEnveloppe !== null) {
                if (!$this->aCommonFichierEnveloppe->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonFichierEnveloppe->getValidationFailures());
                }
            }


            if (($retval = CommonBlocFichierEnveloppePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonBlocFichierEnveloppePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdBlocFichier();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdFichier();
                break;
            case 3:
                return $this->getNumeroOrdreBloc();
                break;
            case 4:
                return $this->getIdBlobChiffre();
                break;
            case 5:
                return $this->getIdBlobDechiffre();
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
        if (isset($alreadyDumpedObjects['CommonBlocFichierEnveloppe'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonBlocFichierEnveloppe'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonBlocFichierEnveloppePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdBlocFichier(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdFichier(),
            $keys[3] => $this->getNumeroOrdreBloc(),
            $keys[4] => $this->getIdBlobChiffre(),
            $keys[5] => $this->getIdBlobDechiffre(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonFichierEnveloppe) {
                $result['CommonFichierEnveloppe'] = $this->aCommonFichierEnveloppe->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonBlocFichierEnveloppePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdBlocFichier($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdFichier($value);
                break;
            case 3:
                $this->setNumeroOrdreBloc($value);
                break;
            case 4:
                $this->setIdBlobChiffre($value);
                break;
            case 5:
                $this->setIdBlobDechiffre($value);
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
        $keys = CommonBlocFichierEnveloppePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdBlocFichier($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdFichier($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumeroOrdreBloc($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdBlobChiffre($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdBlobDechiffre($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonBlocFichierEnveloppePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER)) $criteria->add(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, $this->id_bloc_fichier);
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::ORGANISME)) $criteria->add(CommonBlocFichierEnveloppePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::ID_FICHIER)) $criteria->add(CommonBlocFichierEnveloppePeer::ID_FICHIER, $this->id_fichier);
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::NUMERO_ORDRE_BLOC)) $criteria->add(CommonBlocFichierEnveloppePeer::NUMERO_ORDRE_BLOC, $this->numero_ordre_bloc);
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::ID_BLOB_CHIFFRE)) $criteria->add(CommonBlocFichierEnveloppePeer::ID_BLOB_CHIFFRE, $this->id_blob_chiffre);
        if ($this->isColumnModified(CommonBlocFichierEnveloppePeer::ID_BLOB_DECHIFFRE)) $criteria->add(CommonBlocFichierEnveloppePeer::ID_BLOB_DECHIFFRE, $this->id_blob_dechiffre);

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
        $criteria = new Criteria(CommonBlocFichierEnveloppePeer::DATABASE_NAME);
        $criteria->add(CommonBlocFichierEnveloppePeer::ID_BLOC_FICHIER, $this->id_bloc_fichier);
        $criteria->add(CommonBlocFichierEnveloppePeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdBlocFichier();
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
        $this->setIdBlocFichier($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdBlocFichier()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonBlocFichierEnveloppe (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdFichier($this->getIdFichier());
        $copyObj->setNumeroOrdreBloc($this->getNumeroOrdreBloc());
        $copyObj->setIdBlobChiffre($this->getIdBlobChiffre());
        $copyObj->setIdBlobDechiffre($this->getIdBlobDechiffre());

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
            $copyObj->setIdBlocFichier(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonBlocFichierEnveloppe Clone of current object.
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
     * @return CommonBlocFichierEnveloppePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonBlocFichierEnveloppePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonFichierEnveloppe object.
     *
     * @param   CommonFichierEnveloppe $v
     * @return CommonBlocFichierEnveloppe The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonFichierEnveloppe(CommonFichierEnveloppe $v = null)
    {
        if ($v === null) {
            $this->setIdFichier(0);
        } else {
            $this->setIdFichier($v->getIdFichier());
        }

        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        $this->aCommonFichierEnveloppe = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonFichierEnveloppe object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonBlocFichierEnveloppe($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonFichierEnveloppe object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonFichierEnveloppe The associated CommonFichierEnveloppe object.
     * @throws PropelException
     */
    public function getCommonFichierEnveloppe(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonFichierEnveloppe === null && ($this->id_fichier !== null && ($this->organisme !== "" && $this->organisme !== null)) && $doQuery) {
            $this->aCommonFichierEnveloppe = CommonFichierEnveloppeQuery::create()->findPk(array($this->id_fichier, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonFichierEnveloppe->addCommonBlocFichierEnveloppes($this);
             */
        }

        return $this->aCommonFichierEnveloppe;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_bloc_fichier = null;
        $this->organisme = null;
        $this->id_fichier = null;
        $this->numero_ordre_bloc = null;
        $this->id_blob_chiffre = null;
        $this->id_blob_dechiffre = null;
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
            if ($this->aCommonFichierEnveloppe instanceof Persistent) {
              $this->aCommonFichierEnveloppe->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonFichierEnveloppe = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonBlocFichierEnveloppePeer::DEFAULT_STRING_FORMAT);
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
