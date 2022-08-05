<?php


/**
 * Base class that represents a row from the 'JAL' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonJAL extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonJALPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonJALPeer
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
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_service field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_service;

    /**
     * The value for the nom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom;

    /**
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the email_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email_ar;

    /**
     * The value for the telecopie field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $telecopie;

    /**
     * The value for the information_facturation field.
     * @var        string
     */
    protected $information_facturation;

    /**
     * @var        PropelObjectCollection|CommonDestinataireAnnonceJAL[] Collection to store aggregation of CommonDestinataireAnnonceJAL objects.
     */
    protected $collCommonDestinataireAnnonceJALs;
    protected $collCommonDestinataireAnnonceJALsPartial;

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
    protected $commonDestinataireAnnonceJALsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->id_service = 0;
        $this->nom = '';
        $this->email = '';
        $this->email_ar = '';
        $this->telecopie = '';
    }

    /**
     * Initializes internal state of BaseCommonJAL object.
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
     * Get the [id_service] column value.
     * 
     * @return int
     */
    public function getIdService()
    {

        return $this->id_service;
    }

    /**
     * Get the [nom] column value.
     * 
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [email_ar] column value.
     * 
     * @return string
     */
    public function getEmailAr()
    {

        return $this->email_ar;
    }

    /**
     * Get the [telecopie] column value.
     * 
     * @return string
     */
    public function getTelecopie()
    {

        return $this->telecopie;
    }

    /**
     * Get the [information_facturation] column value.
     * 
     * @return string
     */
    public function getInformationFacturation()
    {

        return $this->information_facturation;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonJAL The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonJALPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonJAL The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonJALPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return CommonJAL The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = CommonJALPeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonJAL The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonJALPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonJAL The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonJALPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [email_ar] column.
     * 
     * @param string $v new value
     * @return CommonJAL The current object (for fluent API support)
     */
    public function setEmailAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email_ar !== $v) {
            $this->email_ar = $v;
            $this->modifiedColumns[] = CommonJALPeer::EMAIL_AR;
        }


        return $this;
    } // setEmailAr()

    /**
     * Set the value of [telecopie] column.
     * 
     * @param string $v new value
     * @return CommonJAL The current object (for fluent API support)
     */
    public function setTelecopie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telecopie !== $v) {
            $this->telecopie = $v;
            $this->modifiedColumns[] = CommonJALPeer::TELECOPIE;
        }


        return $this;
    } // setTelecopie()

    /**
     * Set the value of [information_facturation] column.
     * 
     * @param string $v new value
     * @return CommonJAL The current object (for fluent API support)
     */
    public function setInformationFacturation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->information_facturation !== $v) {
            $this->information_facturation = $v;
            $this->modifiedColumns[] = CommonJALPeer::INFORMATION_FACTURATION;
        }


        return $this;
    } // setInformationFacturation()

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
            if ($this->id_service !== 0) {
                return false;
            }

            if ($this->nom !== '') {
                return false;
            }

            if ($this->email !== '') {
                return false;
            }

            if ($this->email_ar !== '') {
                return false;
            }

            if ($this->telecopie !== '') {
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
            $this->id_service = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->nom = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->email_ar = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->telecopie = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->information_facturation = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = CommonJALPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonJAL object", $e);
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
            $con = Propel::getConnection(CommonJALPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonJALPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonDestinataireAnnonceJALs = null;

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
            $con = Propel::getConnection(CommonJALPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonJALQuery::create()
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
            $con = Propel::getConnection(CommonJALPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonJALPeer::addInstanceToPool($this);
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

            if ($this->commonDestinataireAnnonceJALsScheduledForDeletion !== null) {
                if (!$this->commonDestinataireAnnonceJALsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonDestinataireAnnonceJALsScheduledForDeletion as $commonDestinataireAnnonceJAL) {
                        // need to save related object because we set the relation to null
                        $commonDestinataireAnnonceJAL->save($con);
                    }
                    $this->commonDestinataireAnnonceJALsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonDestinataireAnnonceJALs !== null) {
                foreach ($this->collCommonDestinataireAnnonceJALs as $referrerFK) {
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

        $this->modifiedColumns[] = CommonJALPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonJALPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonJALPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonJALPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonJALPeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service`';
        }
        if ($this->isColumnModified(CommonJALPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonJALPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonJALPeer::EMAIL_AR)) {
            $modifiedColumns[':p' . $index++]  = '`email_ar`';
        }
        if ($this->isColumnModified(CommonJALPeer::TELECOPIE)) {
            $modifiedColumns[':p' . $index++]  = '`telecopie`';
        }
        if ($this->isColumnModified(CommonJALPeer::INFORMATION_FACTURATION)) {
            $modifiedColumns[':p' . $index++]  = '`information_facturation`';
        }

        $sql = sprintf(
            'INSERT INTO `JAL` (%s) VALUES (%s)',
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
                    case '`id_service`':						
                        $stmt->bindValue($identifier, $this->id_service, PDO::PARAM_INT);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`email_ar`':						
                        $stmt->bindValue($identifier, $this->email_ar, PDO::PARAM_STR);
                        break;
                    case '`telecopie`':						
                        $stmt->bindValue($identifier, $this->telecopie, PDO::PARAM_STR);
                        break;
                    case '`information_facturation`':						
                        $stmt->bindValue($identifier, $this->information_facturation, PDO::PARAM_STR);
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


            if (($retval = CommonJALPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonDestinataireAnnonceJALs !== null) {
                    foreach ($this->collCommonDestinataireAnnonceJALs as $referrerFK) {
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
        $pos = CommonJALPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdService();
                break;
            case 3:
                return $this->getNom();
                break;
            case 4:
                return $this->getEmail();
                break;
            case 5:
                return $this->getEmailAr();
                break;
            case 6:
                return $this->getTelecopie();
                break;
            case 7:
                return $this->getInformationFacturation();
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
        if (isset($alreadyDumpedObjects['CommonJAL'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonJAL'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonJALPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdService(),
            $keys[3] => $this->getNom(),
            $keys[4] => $this->getEmail(),
            $keys[5] => $this->getEmailAr(),
            $keys[6] => $this->getTelecopie(),
            $keys[7] => $this->getInformationFacturation(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonDestinataireAnnonceJALs) {
                $result['CommonDestinataireAnnonceJALs'] = $this->collCommonDestinataireAnnonceJALs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonJALPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdService($value);
                break;
            case 3:
                $this->setNom($value);
                break;
            case 4:
                $this->setEmail($value);
                break;
            case 5:
                $this->setEmailAr($value);
                break;
            case 6:
                $this->setTelecopie($value);
                break;
            case 7:
                $this->setInformationFacturation($value);
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
        $keys = CommonJALPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdService($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNom($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmailAr($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTelecopie($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setInformationFacturation($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonJALPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonJALPeer::ID)) $criteria->add(CommonJALPeer::ID, $this->id);
        if ($this->isColumnModified(CommonJALPeer::ORGANISME)) $criteria->add(CommonJALPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonJALPeer::ID_SERVICE)) $criteria->add(CommonJALPeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(CommonJALPeer::NOM)) $criteria->add(CommonJALPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonJALPeer::EMAIL)) $criteria->add(CommonJALPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonJALPeer::EMAIL_AR)) $criteria->add(CommonJALPeer::EMAIL_AR, $this->email_ar);
        if ($this->isColumnModified(CommonJALPeer::TELECOPIE)) $criteria->add(CommonJALPeer::TELECOPIE, $this->telecopie);
        if ($this->isColumnModified(CommonJALPeer::INFORMATION_FACTURATION)) $criteria->add(CommonJALPeer::INFORMATION_FACTURATION, $this->information_facturation);

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
        $criteria = new Criteria(CommonJALPeer::DATABASE_NAME);
        $criteria->add(CommonJALPeer::ID, $this->id);
        $criteria->add(CommonJALPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonJAL (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdService($this->getIdService());
        $copyObj->setNom($this->getNom());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setEmailAr($this->getEmailAr());
        $copyObj->setTelecopie($this->getTelecopie());
        $copyObj->setInformationFacturation($this->getInformationFacturation());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonDestinataireAnnonceJALs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonDestinataireAnnonceJAL($relObj->copy($deepCopy));
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
     * @return CommonJAL Clone of current object.
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
     * @return CommonJALPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonJALPeer();
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
        if ('CommonDestinataireAnnonceJAL' == $relationName) {
            $this->initCommonDestinataireAnnonceJALs();
        }
    }

    /**
     * Clears out the collCommonDestinataireAnnonceJALs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonJAL The current object (for fluent API support)
     * @see        addCommonDestinataireAnnonceJALs()
     */
    public function clearCommonDestinataireAnnonceJALs()
    {
        $this->collCommonDestinataireAnnonceJALs = null; // important to set this to null since that means it is uninitialized
        $this->collCommonDestinataireAnnonceJALsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonDestinataireAnnonceJALs collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonDestinataireAnnonceJALs($v = true)
    {
        $this->collCommonDestinataireAnnonceJALsPartial = $v;
    }

    /**
     * Initializes the collCommonDestinataireAnnonceJALs collection.
     *
     * By default this just sets the collCommonDestinataireAnnonceJALs collection to an empty array (like clearcollCommonDestinataireAnnonceJALs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonDestinataireAnnonceJALs($overrideExisting = true)
    {
        if (null !== $this->collCommonDestinataireAnnonceJALs && !$overrideExisting) {
            return;
        }
        $this->collCommonDestinataireAnnonceJALs = new PropelObjectCollection();
        $this->collCommonDestinataireAnnonceJALs->setModel('CommonDestinataireAnnonceJAL');
    }

    /**
     * Gets an array of CommonDestinataireAnnonceJAL objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonJAL is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonDestinataireAnnonceJAL[] List of CommonDestinataireAnnonceJAL objects
     * @throws PropelException
     */
    public function getCommonDestinataireAnnonceJALs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonDestinataireAnnonceJALsPartial && !$this->isNew();
        if (null === $this->collCommonDestinataireAnnonceJALs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonDestinataireAnnonceJALs) {
                // return empty collection
                $this->initCommonDestinataireAnnonceJALs();
            } else {
                $collCommonDestinataireAnnonceJALs = CommonDestinataireAnnonceJALQuery::create(null, $criteria)
                    ->filterByCommonJAL($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonDestinataireAnnonceJALsPartial && count($collCommonDestinataireAnnonceJALs)) {
                      $this->initCommonDestinataireAnnonceJALs(false);

                      foreach ($collCommonDestinataireAnnonceJALs as $obj) {
                        if (false == $this->collCommonDestinataireAnnonceJALs->contains($obj)) {
                          $this->collCommonDestinataireAnnonceJALs->append($obj);
                        }
                      }

                      $this->collCommonDestinataireAnnonceJALsPartial = true;
                    }

                    $collCommonDestinataireAnnonceJALs->getInternalIterator()->rewind();

                    return $collCommonDestinataireAnnonceJALs;
                }

                if ($partial && $this->collCommonDestinataireAnnonceJALs) {
                    foreach ($this->collCommonDestinataireAnnonceJALs as $obj) {
                        if ($obj->isNew()) {
                            $collCommonDestinataireAnnonceJALs[] = $obj;
                        }
                    }
                }

                $this->collCommonDestinataireAnnonceJALs = $collCommonDestinataireAnnonceJALs;
                $this->collCommonDestinataireAnnonceJALsPartial = false;
            }
        }

        return $this->collCommonDestinataireAnnonceJALs;
    }

    /**
     * Sets a collection of CommonDestinataireAnnonceJAL objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonDestinataireAnnonceJALs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonJAL The current object (for fluent API support)
     */
    public function setCommonDestinataireAnnonceJALs(PropelCollection $commonDestinataireAnnonceJALs, PropelPDO $con = null)
    {
        $commonDestinataireAnnonceJALsToDelete = $this->getCommonDestinataireAnnonceJALs(new Criteria(), $con)->diff($commonDestinataireAnnonceJALs);


        $this->commonDestinataireAnnonceJALsScheduledForDeletion = $commonDestinataireAnnonceJALsToDelete;

        foreach ($commonDestinataireAnnonceJALsToDelete as $commonDestinataireAnnonceJALRemoved) {
            $commonDestinataireAnnonceJALRemoved->setCommonJAL(null);
        }

        $this->collCommonDestinataireAnnonceJALs = null;
        foreach ($commonDestinataireAnnonceJALs as $commonDestinataireAnnonceJAL) {
            $this->addCommonDestinataireAnnonceJAL($commonDestinataireAnnonceJAL);
        }

        $this->collCommonDestinataireAnnonceJALs = $commonDestinataireAnnonceJALs;
        $this->collCommonDestinataireAnnonceJALsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonDestinataireAnnonceJAL objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonDestinataireAnnonceJAL objects.
     * @throws PropelException
     */
    public function countCommonDestinataireAnnonceJALs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonDestinataireAnnonceJALsPartial && !$this->isNew();
        if (null === $this->collCommonDestinataireAnnonceJALs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonDestinataireAnnonceJALs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonDestinataireAnnonceJALs());
            }
            $query = CommonDestinataireAnnonceJALQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonJAL($this)
                ->count($con);
        }

        return count($this->collCommonDestinataireAnnonceJALs);
    }

    /**
     * Method called to associate a CommonDestinataireAnnonceJAL object to this object
     * through the CommonDestinataireAnnonceJAL foreign key attribute.
     *
     * @param   CommonDestinataireAnnonceJAL $l CommonDestinataireAnnonceJAL
     * @return CommonJAL The current object (for fluent API support)
     */
    public function addCommonDestinataireAnnonceJAL(CommonDestinataireAnnonceJAL $l)
    {
        if ($this->collCommonDestinataireAnnonceJALs === null) {
            $this->initCommonDestinataireAnnonceJALs();
            $this->collCommonDestinataireAnnonceJALsPartial = true;
        }
        if (!in_array($l, $this->collCommonDestinataireAnnonceJALs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonDestinataireAnnonceJAL($l);
        }

        return $this;
    }

    /**
     * @param	CommonDestinataireAnnonceJAL $commonDestinataireAnnonceJAL The commonDestinataireAnnonceJAL object to add.
     */
    protected function doAddCommonDestinataireAnnonceJAL($commonDestinataireAnnonceJAL)
    {
        $this->collCommonDestinataireAnnonceJALs[]= $commonDestinataireAnnonceJAL;
        $commonDestinataireAnnonceJAL->setCommonJAL($this);
    }

    /**
     * @param	CommonDestinataireAnnonceJAL $commonDestinataireAnnonceJAL The commonDestinataireAnnonceJAL object to remove.
     * @return CommonJAL The current object (for fluent API support)
     */
    public function removeCommonDestinataireAnnonceJAL($commonDestinataireAnnonceJAL)
    {
        if ($this->getCommonDestinataireAnnonceJALs()->contains($commonDestinataireAnnonceJAL)) {
            $this->collCommonDestinataireAnnonceJALs->remove($this->collCommonDestinataireAnnonceJALs->search($commonDestinataireAnnonceJAL));
            if (null === $this->commonDestinataireAnnonceJALsScheduledForDeletion) {
                $this->commonDestinataireAnnonceJALsScheduledForDeletion = clone $this->collCommonDestinataireAnnonceJALs;
                $this->commonDestinataireAnnonceJALsScheduledForDeletion->clear();
            }
            $this->commonDestinataireAnnonceJALsScheduledForDeletion[]= clone $commonDestinataireAnnonceJAL;
            $commonDestinataireAnnonceJAL->setCommonJAL(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonJAL is new, it will return
     * an empty collection; or if this CommonJAL has previously
     * been saved, it will retrieve related CommonDestinataireAnnonceJALs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonJAL.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonDestinataireAnnonceJAL[] List of CommonDestinataireAnnonceJAL objects
     */
    public function getCommonDestinataireAnnonceJALsJoinCommonAnnonceJAL($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonDestinataireAnnonceJALQuery::create(null, $criteria);
        $query->joinWith('CommonAnnonceJAL', $join_behavior);

        return $this->getCommonDestinataireAnnonceJALs($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->id_service = null;
        $this->nom = null;
        $this->email = null;
        $this->email_ar = null;
        $this->telecopie = null;
        $this->information_facturation = null;
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
            if ($this->collCommonDestinataireAnnonceJALs) {
                foreach ($this->collCommonDestinataireAnnonceJALs as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonDestinataireAnnonceJALs instanceof PropelCollection) {
            $this->collCommonDestinataireAnnonceJALs->clearIterator();
        }
        $this->collCommonDestinataireAnnonceJALs = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonJALPeer::DEFAULT_STRING_FORMAT);
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
