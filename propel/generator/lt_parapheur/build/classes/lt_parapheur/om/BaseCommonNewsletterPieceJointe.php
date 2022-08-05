<?php


/**
 * Base class that represents a row from the 'NewsletterPieceJointe' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonNewsletterPieceJointe extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonNewsletterPieceJointePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonNewsletterPieceJointePeer
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
     * The value for the id_newsletter field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_newsletter;

    /**
     * The value for the nom_fichier field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_fichier;

    /**
     * The value for the piece field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $piece;

    /**
     * The value for the horodatage field.
     * @var        resource
     */
    protected $horodatage;

    /**
     * The value for the untrusteddate field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $untrusteddate;

    /**
     * The value for the taille field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $taille;

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
        $this->id_newsletter = 0;
        $this->nom_fichier = '';
        $this->piece = 0;
        $this->untrusteddate = '';
        $this->taille = '0';
    }

    /**
     * Initializes internal state of BaseCommonNewsletterPieceJointe object.
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
     * Get the [id_newsletter] column value.
     * 
     * @return int
     */
    public function getIdNewsletter()
    {

        return $this->id_newsletter;
    }

    /**
     * Get the [nom_fichier] column value.
     * 
     * @return string
     */
    public function getNomFichier()
    {

        return $this->nom_fichier;
    }

    /**
     * Get the [piece] column value.
     * 
     * @return int
     */
    public function getPiece()
    {

        return $this->piece;
    }

    /**
     * Get the [horodatage] column value.
     * 
     * @return resource
     */
    public function getHorodatage()
    {

        return $this->horodatage;
    }

    /**
     * Get the [untrusteddate] column value.
     * 
     * @return string
     */
    public function getUntrusteddate()
    {

        return $this->untrusteddate;
    }

    /**
     * Get the [taille] column value.
     * 
     * @return string
     */
    public function getTaille()
    {

        return $this->taille;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonNewsletterPieceJointe The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonNewsletterPieceJointePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonNewsletterPieceJointe The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonNewsletterPieceJointePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_newsletter] column.
     * 
     * @param int $v new value
     * @return CommonNewsletterPieceJointe The current object (for fluent API support)
     */
    public function setIdNewsletter($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_newsletter !== $v) {
            $this->id_newsletter = $v;
            $this->modifiedColumns[] = CommonNewsletterPieceJointePeer::ID_NEWSLETTER;
        }


        return $this;
    } // setIdNewsletter()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return CommonNewsletterPieceJointe The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = CommonNewsletterPieceJointePeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

    /**
     * Set the value of [piece] column.
     * 
     * @param int $v new value
     * @return CommonNewsletterPieceJointe The current object (for fluent API support)
     */
    public function setPiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->piece !== $v) {
            $this->piece = $v;
            $this->modifiedColumns[] = CommonNewsletterPieceJointePeer::PIECE;
        }


        return $this;
    } // setPiece()

    /**
     * Set the value of [horodatage] column.
     * 
     * @param resource $v new value
     * @return CommonNewsletterPieceJointe The current object (for fluent API support)
     */
    public function setHorodatage($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->horodatage = fopen('php://memory', 'r+');
            fwrite($this->horodatage, $v);
            rewind($this->horodatage);
        } else { // it's already a stream
            $this->horodatage = $v;
        }
        $this->modifiedColumns[] = CommonNewsletterPieceJointePeer::HORODATAGE;


        return $this;
    } // setHorodatage()

    /**
     * Set the value of [untrusteddate] column.
     * 
     * @param string $v new value
     * @return CommonNewsletterPieceJointe The current object (for fluent API support)
     */
    public function setUntrusteddate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->untrusteddate !== $v) {
            $this->untrusteddate = $v;
            $this->modifiedColumns[] = CommonNewsletterPieceJointePeer::UNTRUSTEDDATE;
        }


        return $this;
    } // setUntrusteddate()

    /**
     * Set the value of [taille] column.
     * 
     * @param string $v new value
     * @return CommonNewsletterPieceJointe The current object (for fluent API support)
     */
    public function setTaille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille !== $v) {
            $this->taille = $v;
            $this->modifiedColumns[] = CommonNewsletterPieceJointePeer::TAILLE;
        }


        return $this;
    } // setTaille()

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
            if ($this->id_newsletter !== 0) {
                return false;
            }

            if ($this->nom_fichier !== '') {
                return false;
            }

            if ($this->piece !== 0) {
                return false;
            }

            if ($this->untrusteddate !== '') {
                return false;
            }

            if ($this->taille !== '0') {
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
            $this->id_newsletter = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->nom_fichier = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->piece = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            if ($row[$startcol + 5] !== null) {
                $this->horodatage = fopen('php://memory', 'r+');
                fwrite($this->horodatage, $row[$startcol + 5]);
                rewind($this->horodatage);
            } else {
                $this->horodatage = null;
            }
            $this->untrusteddate = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->taille = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = CommonNewsletterPieceJointePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonNewsletterPieceJointe object", $e);
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
            $con = Propel::getConnection(CommonNewsletterPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonNewsletterPieceJointePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonNewsletterPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonNewsletterPieceJointeQuery::create()
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
            $con = Propel::getConnection(CommonNewsletterPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonNewsletterPieceJointePeer::addInstanceToPool($this);
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
                // Rewind the horodatage LOB column, since PDO does not rewind after inserting value.
                if ($this->horodatage !== null && is_resource($this->horodatage)) {
                    rewind($this->horodatage);
                }

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

        $this->modifiedColumns[] = CommonNewsletterPieceJointePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonNewsletterPieceJointePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::ID_NEWSLETTER)) {
            $modifiedColumns[':p' . $index++]  = '`id_newsletter`';
        }
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier`';
        }
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`piece`';
        }
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::HORODATAGE)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage`';
        }
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::UNTRUSTEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`untrusteddate`';
        }
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::TAILLE)) {
            $modifiedColumns[':p' . $index++]  = '`taille`';
        }

        $sql = sprintf(
            'INSERT INTO `NewsletterPieceJointe` (%s) VALUES (%s)',
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
                    case '`id_newsletter`':						
                        $stmt->bindValue($identifier, $this->id_newsletter, PDO::PARAM_INT);
                        break;
                    case '`nom_fichier`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
                        break;
                    case '`piece`':						
                        $stmt->bindValue($identifier, $this->piece, PDO::PARAM_INT);
                        break;
                    case '`horodatage`':						
                        if (is_resource($this->horodatage)) {
                            rewind($this->horodatage);
                        }
                        $stmt->bindValue($identifier, $this->horodatage, PDO::PARAM_LOB);
                        break;
                    case '`untrusteddate`':						
                        $stmt->bindValue($identifier, $this->untrusteddate, PDO::PARAM_STR);
                        break;
                    case '`taille`':						
                        $stmt->bindValue($identifier, $this->taille, PDO::PARAM_STR);
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


            if (($retval = CommonNewsletterPieceJointePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonNewsletterPieceJointePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdNewsletter();
                break;
            case 3:
                return $this->getNomFichier();
                break;
            case 4:
                return $this->getPiece();
                break;
            case 5:
                return $this->getHorodatage();
                break;
            case 6:
                return $this->getUntrusteddate();
                break;
            case 7:
                return $this->getTaille();
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
        if (isset($alreadyDumpedObjects['CommonNewsletterPieceJointe'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonNewsletterPieceJointe'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonNewsletterPieceJointePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdNewsletter(),
            $keys[3] => $this->getNomFichier(),
            $keys[4] => $this->getPiece(),
            $keys[5] => $this->getHorodatage(),
            $keys[6] => $this->getUntrusteddate(),
            $keys[7] => $this->getTaille(),
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
        $pos = CommonNewsletterPieceJointePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdNewsletter($value);
                break;
            case 3:
                $this->setNomFichier($value);
                break;
            case 4:
                $this->setPiece($value);
                break;
            case 5:
                $this->setHorodatage($value);
                break;
            case 6:
                $this->setUntrusteddate($value);
                break;
            case 7:
                $this->setTaille($value);
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
        $keys = CommonNewsletterPieceJointePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdNewsletter($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNomFichier($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPiece($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setHorodatage($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUntrusteddate($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTaille($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonNewsletterPieceJointePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::ID)) $criteria->add(CommonNewsletterPieceJointePeer::ID, $this->id);
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::ORGANISME)) $criteria->add(CommonNewsletterPieceJointePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::ID_NEWSLETTER)) $criteria->add(CommonNewsletterPieceJointePeer::ID_NEWSLETTER, $this->id_newsletter);
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::NOM_FICHIER)) $criteria->add(CommonNewsletterPieceJointePeer::NOM_FICHIER, $this->nom_fichier);
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::PIECE)) $criteria->add(CommonNewsletterPieceJointePeer::PIECE, $this->piece);
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::HORODATAGE)) $criteria->add(CommonNewsletterPieceJointePeer::HORODATAGE, $this->horodatage);
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::UNTRUSTEDDATE)) $criteria->add(CommonNewsletterPieceJointePeer::UNTRUSTEDDATE, $this->untrusteddate);
        if ($this->isColumnModified(CommonNewsletterPieceJointePeer::TAILLE)) $criteria->add(CommonNewsletterPieceJointePeer::TAILLE, $this->taille);

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
        $criteria = new Criteria(CommonNewsletterPieceJointePeer::DATABASE_NAME);
        $criteria->add(CommonNewsletterPieceJointePeer::ID, $this->id);
        $criteria->add(CommonNewsletterPieceJointePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonNewsletterPieceJointe (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdNewsletter($this->getIdNewsletter());
        $copyObj->setNomFichier($this->getNomFichier());
        $copyObj->setPiece($this->getPiece());
        $copyObj->setHorodatage($this->getHorodatage());
        $copyObj->setUntrusteddate($this->getUntrusteddate());
        $copyObj->setTaille($this->getTaille());
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
     * @return CommonNewsletterPieceJointe Clone of current object.
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
     * @return CommonNewsletterPieceJointePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonNewsletterPieceJointePeer();
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
        $this->id_newsletter = null;
        $this->nom_fichier = null;
        $this->piece = null;
        $this->horodatage = null;
        $this->untrusteddate = null;
        $this->taille = null;
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
        return (string) $this->exportTo(CommonNewsletterPieceJointePeer::DEFAULT_STRING_FORMAT);
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
