<?php


/**
 * Base class that represents a row from the 'Admissibilite_Enveloppe_Lot' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAdmissibiliteEnveloppeLot extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAdmissibiliteEnveloppeLotPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAdmissibiliteEnveloppeLotPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_offre field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_offre;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the sous_pli field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $sous_pli;

    /**
     * The value for the admissibilite field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $admissibilite;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the type_enveloppe field.
     * Note: this column has a database default value of: 2
     * @var        int
     */
    protected $type_enveloppe;

    /**
     * The value for the sous_reserve field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $sous_reserve;

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
        $this->id_offre = 0;
        $this->organisme = '';
        $this->sous_pli = 0;
        $this->admissibilite = 0;
        $this->type_enveloppe = 2;
        $this->sous_reserve = '0';
    }

    /**
     * Initializes internal state of BaseCommonAdmissibiliteEnveloppeLot object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_offre] column value.
     * 
     * @return int
     */
    public function getIdOffre()
    {

        return $this->id_offre;
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
     * Get the [sous_pli] column value.
     * 
     * @return int
     */
    public function getSousPli()
    {

        return $this->sous_pli;
    }

    /**
     * Get the [admissibilite] column value.
     * 
     * @return int
     */
    public function getAdmissibilite()
    {

        return $this->admissibilite;
    }

    /**
     * Get the [commentaire] column value.
     * 
     * @return string
     */
    public function getCommentaire()
    {

        return $this->commentaire;
    }

    /**
     * Get the [type_enveloppe] column value.
     * 
     * @return int
     */
    public function getTypeEnveloppe()
    {

        return $this->type_enveloppe;
    }

    /**
     * Get the [sous_reserve] column value.
     * 
     * @return string
     */
    public function getSousReserve()
    {

        return $this->sous_reserve;
    }

    /**
     * Set the value of [id_offre] column.
     * 
     * @param int $v new value
     * @return CommonAdmissibiliteEnveloppeLot The current object (for fluent API support)
     */
    public function setIdOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_offre !== $v) {
            $this->id_offre = $v;
            $this->modifiedColumns[] = CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE;
        }


        return $this;
    } // setIdOffre()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonAdmissibiliteEnveloppeLot The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonAdmissibiliteEnveloppeLotPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [sous_pli] column.
     * 
     * @param int $v new value
     * @return CommonAdmissibiliteEnveloppeLot The current object (for fluent API support)
     */
    public function setSousPli($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sous_pli !== $v) {
            $this->sous_pli = $v;
            $this->modifiedColumns[] = CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI;
        }


        return $this;
    } // setSousPli()

    /**
     * Set the value of [admissibilite] column.
     * 
     * @param int $v new value
     * @return CommonAdmissibiliteEnveloppeLot The current object (for fluent API support)
     */
    public function setAdmissibilite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->admissibilite !== $v) {
            $this->admissibilite = $v;
            $this->modifiedColumns[] = CommonAdmissibiliteEnveloppeLotPeer::ADMISSIBILITE;
        }


        return $this;
    } // setAdmissibilite()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonAdmissibiliteEnveloppeLot The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonAdmissibiliteEnveloppeLotPeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [type_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonAdmissibiliteEnveloppeLot The current object (for fluent API support)
     */
    public function setTypeEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_enveloppe !== $v) {
            $this->type_enveloppe = $v;
            $this->modifiedColumns[] = CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE;
        }


        return $this;
    } // setTypeEnveloppe()

    /**
     * Set the value of [sous_reserve] column.
     * 
     * @param string $v new value
     * @return CommonAdmissibiliteEnveloppeLot The current object (for fluent API support)
     */
    public function setSousReserve($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sous_reserve !== $v) {
            $this->sous_reserve = $v;
            $this->modifiedColumns[] = CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE;
        }


        return $this;
    } // setSousReserve()

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
            if ($this->id_offre !== 0) {
                return false;
            }

            if ($this->organisme !== '') {
                return false;
            }

            if ($this->sous_pli !== 0) {
                return false;
            }

            if ($this->admissibilite !== 0) {
                return false;
            }

            if ($this->type_enveloppe !== 2) {
                return false;
            }

            if ($this->sous_reserve !== '0') {
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

            $this->id_offre = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->sous_pli = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->admissibilite = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->commentaire = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->type_enveloppe = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->sous_reserve = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = CommonAdmissibiliteEnveloppeLotPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAdmissibiliteEnveloppeLot object", $e);
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
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAdmissibiliteEnveloppeLotPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAdmissibiliteEnveloppeLotQuery::create()
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
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAdmissibiliteEnveloppeLotPeer::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_Offre`';
        }
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI)) {
            $modifiedColumns[':p' . $index++]  = '`sous_pli`';
        }
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::ADMISSIBILITE)) {
            $modifiedColumns[':p' . $index++]  = '`admissibilite`';
        }
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`type_enveloppe`';
        }
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE)) {
            $modifiedColumns[':p' . $index++]  = '`sous_reserve`';
        }

        $sql = sprintf(
            'INSERT INTO `Admissibilite_Enveloppe_Lot` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_Offre`':						
                        $stmt->bindValue($identifier, $this->id_offre, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`sous_pli`':						
                        $stmt->bindValue($identifier, $this->sous_pli, PDO::PARAM_INT);
                        break;
                    case '`admissibilite`':						
                        $stmt->bindValue($identifier, $this->admissibilite, PDO::PARAM_INT);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`type_enveloppe`':						
                        $stmt->bindValue($identifier, $this->type_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`sous_reserve`':						
                        $stmt->bindValue($identifier, $this->sous_reserve, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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


            if (($retval = CommonAdmissibiliteEnveloppeLotPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonAdmissibiliteEnveloppeLotPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdOffre();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getSousPli();
                break;
            case 3:
                return $this->getAdmissibilite();
                break;
            case 4:
                return $this->getCommentaire();
                break;
            case 5:
                return $this->getTypeEnveloppe();
                break;
            case 6:
                return $this->getSousReserve();
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
        if (isset($alreadyDumpedObjects['CommonAdmissibiliteEnveloppeLot'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAdmissibiliteEnveloppeLot'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonAdmissibiliteEnveloppeLotPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdOffre(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getSousPli(),
            $keys[3] => $this->getAdmissibilite(),
            $keys[4] => $this->getCommentaire(),
            $keys[5] => $this->getTypeEnveloppe(),
            $keys[6] => $this->getSousReserve(),
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
        $pos = CommonAdmissibiliteEnveloppeLotPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdOffre($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setSousPli($value);
                break;
            case 3:
                $this->setAdmissibilite($value);
                break;
            case 4:
                $this->setCommentaire($value);
                break;
            case 5:
                $this->setTypeEnveloppe($value);
                break;
            case 6:
                $this->setSousReserve($value);
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
        $keys = CommonAdmissibiliteEnveloppeLotPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdOffre($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSousPli($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAdmissibilite($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCommentaire($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTypeEnveloppe($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSousReserve($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE)) $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, $this->id_offre);
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME)) $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI)) $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, $this->sous_pli);
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::ADMISSIBILITE)) $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::ADMISSIBILITE, $this->admissibilite);
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::COMMENTAIRE)) $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE)) $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, $this->type_enveloppe);
        if ($this->isColumnModified(CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE)) $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE, $this->sous_reserve);

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
        $criteria = new Criteria(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME);
        $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, $this->id_offre);
        $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME, $this->organisme);
        $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, $this->sous_pli);
        $criteria->add(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, $this->type_enveloppe);

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
        $pks[0] = $this->getIdOffre();
        $pks[1] = $this->getOrganisme();
        $pks[2] = $this->getSousPli();
        $pks[3] = $this->getTypeEnveloppe();

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
        $this->setIdOffre($keys[0]);
        $this->setOrganisme($keys[1]);
        $this->setSousPli($keys[2]);
        $this->setTypeEnveloppe($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdOffre()) && (null === $this->getOrganisme()) && (null === $this->getSousPli()) && (null === $this->getTypeEnveloppe());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonAdmissibiliteEnveloppeLot (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdOffre($this->getIdOffre());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setSousPli($this->getSousPli());
        $copyObj->setAdmissibilite($this->getAdmissibilite());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setTypeEnveloppe($this->getTypeEnveloppe());
        $copyObj->setSousReserve($this->getSousReserve());
        if ($makeNew) {
            $copyObj->setNew(true);
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
     * @return CommonAdmissibiliteEnveloppeLot Clone of current object.
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
     * @return CommonAdmissibiliteEnveloppeLotPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAdmissibiliteEnveloppeLotPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_offre = null;
        $this->organisme = null;
        $this->sous_pli = null;
        $this->admissibilite = null;
        $this->commentaire = null;
        $this->type_enveloppe = null;
        $this->sous_reserve = null;
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
        return (string) $this->exportTo(CommonAdmissibiliteEnveloppeLotPeer::DEFAULT_STRING_FORMAT);
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
