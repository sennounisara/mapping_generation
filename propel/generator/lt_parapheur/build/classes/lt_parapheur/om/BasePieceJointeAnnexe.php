<?php


/**
 * Base class that represents a row from the 'piece_jointe_annexe' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePieceJointeAnnexe extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PieceJointeAnnexePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PieceJointeAnnexePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_piece_jointe_annexe field.
     * @var        int
     */
    protected $id_piece_jointe_annexe;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * The value for the revision field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $revision;

    /**
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

    /**
     * The value for the nom_piece field.
     * @var        string
     */
    protected $nom_piece;

    /**
     * The value for the emplacement_piece field.
     * @var        string
     */
    protected $emplacement_piece;

    /**
     * The value for the tag field.
     * @var        string
     */
    protected $tag;

    /**
     * The value for the id_table field.
     * @var        int
     */
    protected $id_table;

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
        $this->revision = 0;
    }

    /**
     * Initializes internal state of BasePieceJointeAnnexe object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_piece_jointe_annexe] column value.
     * 
     * @return int
     */
    public function getIdPieceJointeAnnexe()
    {

        return $this->id_piece_jointe_annexe;
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
     * Get the [revision] column value.
     * 
     * @return int
     */
    public function getRevision()
    {

        return $this->revision;
    }

    /**
     * Get the [id_demande] column value.
     * 
     * @return int
     */
    public function getIdDemande()
    {

        return $this->id_demande;
    }

    /**
     * Get the [nom_piece] column value.
     * 
     * @return string
     */
    public function getNomPiece()
    {

        return $this->nom_piece;
    }

    /**
     * Get the [emplacement_piece] column value.
     * 
     * @return string
     */
    public function getEmplacementPiece()
    {

        return $this->emplacement_piece;
    }

    /**
     * Get the [tag] column value.
     * 
     * @return string
     */
    public function getTag()
    {

        return $this->tag;
    }

    /**
     * Get the [id_table] column value.
     * 
     * @return int
     */
    public function getIdTable()
    {

        return $this->id_table;
    }

    /**
     * Set the value of [id_piece_jointe_annexe] column.
     * 
     * @param int $v new value
     * @return PieceJointeAnnexe The current object (for fluent API support)
     */
    public function setIdPieceJointeAnnexe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_piece_jointe_annexe !== $v) {
            $this->id_piece_jointe_annexe = $v;
            $this->modifiedColumns[] = PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE;
        }


        return $this;
    } // setIdPieceJointeAnnexe()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return PieceJointeAnnexe The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = PieceJointeAnnexePeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [revision] column.
     * 
     * @param int $v new value
     * @return PieceJointeAnnexe The current object (for fluent API support)
     */
    public function setRevision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->revision !== $v) {
            $this->revision = $v;
            $this->modifiedColumns[] = PieceJointeAnnexePeer::REVISION;
        }


        return $this;
    } // setRevision()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return PieceJointeAnnexe The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = PieceJointeAnnexePeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Set the value of [nom_piece] column.
     * 
     * @param string $v new value
     * @return PieceJointeAnnexe The current object (for fluent API support)
     */
    public function setNomPiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_piece !== $v) {
            $this->nom_piece = $v;
            $this->modifiedColumns[] = PieceJointeAnnexePeer::NOM_PIECE;
        }


        return $this;
    } // setNomPiece()

    /**
     * Set the value of [emplacement_piece] column.
     * 
     * @param string $v new value
     * @return PieceJointeAnnexe The current object (for fluent API support)
     */
    public function setEmplacementPiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->emplacement_piece !== $v) {
            $this->emplacement_piece = $v;
            $this->modifiedColumns[] = PieceJointeAnnexePeer::EMPLACEMENT_PIECE;
        }


        return $this;
    } // setEmplacementPiece()

    /**
     * Set the value of [tag] column.
     * 
     * @param string $v new value
     * @return PieceJointeAnnexe The current object (for fluent API support)
     */
    public function setTag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tag !== $v) {
            $this->tag = $v;
            $this->modifiedColumns[] = PieceJointeAnnexePeer::TAG;
        }


        return $this;
    } // setTag()

    /**
     * Set the value of [id_table] column.
     * 
     * @param int $v new value
     * @return PieceJointeAnnexe The current object (for fluent API support)
     */
    public function setIdTable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_table !== $v) {
            $this->id_table = $v;
            $this->modifiedColumns[] = PieceJointeAnnexePeer::ID_TABLE;
        }


        return $this;
    } // setIdTable()

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
            if ($this->revision !== 0) {
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

            $this->id_piece_jointe_annexe = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_blob = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->revision = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_demande = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->nom_piece = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->emplacement_piece = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->tag = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_table = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = PieceJointeAnnexePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PieceJointeAnnexe object", $e);
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
            $con = Propel::getConnection(PieceJointeAnnexePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PieceJointeAnnexePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PieceJointeAnnexePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PieceJointeAnnexeQuery::create()
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
            $con = Propel::getConnection(PieceJointeAnnexePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PieceJointeAnnexePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE;
        if (null !== $this->id_piece_jointe_annexe) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PIECE_JOINTE_ANNEXE`';
        }
        if ($this->isColumnModified(PieceJointeAnnexePeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`ID_BLOB`';
        }
        if ($this->isColumnModified(PieceJointeAnnexePeer::REVISION)) {
            $modifiedColumns[':p' . $index++]  = '`REVISION`';
        }
        if ($this->isColumnModified(PieceJointeAnnexePeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(PieceJointeAnnexePeer::NOM_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_PIECE`';
        }
        if ($this->isColumnModified(PieceJointeAnnexePeer::EMPLACEMENT_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`EMPLACEMENT_PIECE`';
        }
        if ($this->isColumnModified(PieceJointeAnnexePeer::TAG)) {
            $modifiedColumns[':p' . $index++]  = '`TAG`';
        }
        if ($this->isColumnModified(PieceJointeAnnexePeer::ID_TABLE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_TABLE`';
        }

        $sql = sprintf(
            'INSERT INTO `piece_jointe_annexe` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_PIECE_JOINTE_ANNEXE`':						
                        $stmt->bindValue($identifier, $this->id_piece_jointe_annexe, PDO::PARAM_INT);
                        break;
                    case '`ID_BLOB`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`REVISION`':						
                        $stmt->bindValue($identifier, $this->revision, PDO::PARAM_INT);
                        break;
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
                        break;
                    case '`NOM_PIECE`':						
                        $stmt->bindValue($identifier, $this->nom_piece, PDO::PARAM_STR);
                        break;
                    case '`EMPLACEMENT_PIECE`':						
                        $stmt->bindValue($identifier, $this->emplacement_piece, PDO::PARAM_STR);
                        break;
                    case '`TAG`':						
                        $stmt->bindValue($identifier, $this->tag, PDO::PARAM_STR);
                        break;
                    case '`ID_TABLE`':						
                        $stmt->bindValue($identifier, $this->id_table, PDO::PARAM_INT);
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
        $this->setIdPieceJointeAnnexe($pk);

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


            if (($retval = PieceJointeAnnexePeer::doValidate($this, $columns)) !== true) {
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
        $pos = PieceJointeAnnexePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdPieceJointeAnnexe();
                break;
            case 1:
                return $this->getIdBlob();
                break;
            case 2:
                return $this->getRevision();
                break;
            case 3:
                return $this->getIdDemande();
                break;
            case 4:
                return $this->getNomPiece();
                break;
            case 5:
                return $this->getEmplacementPiece();
                break;
            case 6:
                return $this->getTag();
                break;
            case 7:
                return $this->getIdTable();
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
        if (isset($alreadyDumpedObjects['PieceJointeAnnexe'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PieceJointeAnnexe'][$this->getPrimaryKey()] = true;
        $keys = PieceJointeAnnexePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPieceJointeAnnexe(),
            $keys[1] => $this->getIdBlob(),
            $keys[2] => $this->getRevision(),
            $keys[3] => $this->getIdDemande(),
            $keys[4] => $this->getNomPiece(),
            $keys[5] => $this->getEmplacementPiece(),
            $keys[6] => $this->getTag(),
            $keys[7] => $this->getIdTable(),
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
        $pos = PieceJointeAnnexePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdPieceJointeAnnexe($value);
                break;
            case 1:
                $this->setIdBlob($value);
                break;
            case 2:
                $this->setRevision($value);
                break;
            case 3:
                $this->setIdDemande($value);
                break;
            case 4:
                $this->setNomPiece($value);
                break;
            case 5:
                $this->setEmplacementPiece($value);
                break;
            case 6:
                $this->setTag($value);
                break;
            case 7:
                $this->setIdTable($value);
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
        $keys = PieceJointeAnnexePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPieceJointeAnnexe($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdBlob($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRevision($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdDemande($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNomPiece($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmplacementPiece($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTag($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdTable($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PieceJointeAnnexePeer::DATABASE_NAME);

        if ($this->isColumnModified(PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE)) $criteria->add(PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE, $this->id_piece_jointe_annexe);
        if ($this->isColumnModified(PieceJointeAnnexePeer::ID_BLOB)) $criteria->add(PieceJointeAnnexePeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(PieceJointeAnnexePeer::REVISION)) $criteria->add(PieceJointeAnnexePeer::REVISION, $this->revision);
        if ($this->isColumnModified(PieceJointeAnnexePeer::ID_DEMANDE)) $criteria->add(PieceJointeAnnexePeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(PieceJointeAnnexePeer::NOM_PIECE)) $criteria->add(PieceJointeAnnexePeer::NOM_PIECE, $this->nom_piece);
        if ($this->isColumnModified(PieceJointeAnnexePeer::EMPLACEMENT_PIECE)) $criteria->add(PieceJointeAnnexePeer::EMPLACEMENT_PIECE, $this->emplacement_piece);
        if ($this->isColumnModified(PieceJointeAnnexePeer::TAG)) $criteria->add(PieceJointeAnnexePeer::TAG, $this->tag);
        if ($this->isColumnModified(PieceJointeAnnexePeer::ID_TABLE)) $criteria->add(PieceJointeAnnexePeer::ID_TABLE, $this->id_table);

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
        $criteria = new Criteria(PieceJointeAnnexePeer::DATABASE_NAME);
        $criteria->add(PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE, $this->id_piece_jointe_annexe);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPieceJointeAnnexe();
    }

    /**
     * Generic method to set the primary key (id_piece_jointe_annexe column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPieceJointeAnnexe($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPieceJointeAnnexe();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PieceJointeAnnexe (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setRevision($this->getRevision());
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setNomPiece($this->getNomPiece());
        $copyObj->setEmplacementPiece($this->getEmplacementPiece());
        $copyObj->setTag($this->getTag());
        $copyObj->setIdTable($this->getIdTable());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPieceJointeAnnexe(NULL); // this is a auto-increment column, so set to default value
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
     * @return PieceJointeAnnexe Clone of current object.
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
     * @return PieceJointeAnnexePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PieceJointeAnnexePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_piece_jointe_annexe = null;
        $this->id_blob = null;
        $this->revision = null;
        $this->id_demande = null;
        $this->nom_piece = null;
        $this->emplacement_piece = null;
        $this->tag = null;
        $this->id_table = null;
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
        return (string) $this->exportTo(PieceJointeAnnexePeer::DEFAULT_STRING_FORMAT);
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
