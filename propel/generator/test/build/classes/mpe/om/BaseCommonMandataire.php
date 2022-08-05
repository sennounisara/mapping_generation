<?php


/**
 * Base class that represents a row from the 'mandataire' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonMandataire extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonMandatairePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonMandatairePeer
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
     * The value for the id_groupement field.
     * @var        int
     */
    protected $id_groupement;

    /**
     * The value for the id_entreprise field.
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the id_inscrit field.
     * @var        int
     */
    protected $id_inscrit;

    /**
     * The value for the type_mandataire field.
     * @var        string
     */
    protected $type_mandataire;

    /**
     * The value for the rc_ville field.
     * @var        int
     */
    protected $rc_ville;

    /**
     * The value for the rc_numero field.
     * @var        int
     */
    protected $rc_numero;

    /**
     * The value for the mail field.
     * @var        string
     */
    protected $mail;

    /**
     * The value for the statut_invitation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut_invitation;

    /**
     * @var        CommonGroupement
     */
    protected $aCommonGroupement;

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
        $this->statut_invitation = '0';
    }

    /**
     * Initializes internal state of BaseCommonMandataire object.
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
     * Get the [id_groupement] column value.
     * 
     * @return int
     */
    public function getIdGroupement()
    {

        return $this->id_groupement;
    }

    /**
     * Get the [id_entreprise] column value.
     * 
     * @return int
     */
    public function getIdEntreprise()
    {

        return $this->id_entreprise;
    }

    /**
     * Get the [id_inscrit] column value.
     * 
     * @return int
     */
    public function getIdInscrit()
    {

        return $this->id_inscrit;
    }

    /**
     * Get the [type_mandataire] column value.
     * 
     * @return string
     */
    public function getTypeMandataire()
    {

        return $this->type_mandataire;
    }

    /**
     * Get the [rc_ville] column value.
     * 
     * @return int
     */
    public function getRcVille()
    {

        return $this->rc_ville;
    }

    /**
     * Get the [rc_numero] column value.
     * 
     * @return int
     */
    public function getRcNumero()
    {

        return $this->rc_numero;
    }

    /**
     * Get the [mail] column value.
     * 
     * @return string
     */
    public function getMail()
    {

        return $this->mail;
    }

    /**
     * Get the [statut_invitation] column value.
     * 
     * @return string
     */
    public function getStatutInvitation()
    {

        return $this->statut_invitation;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonMandataire The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonMandatairePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_groupement] column.
     * 
     * @param int $v new value
     * @return CommonMandataire The current object (for fluent API support)
     */
    public function setIdGroupement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_groupement !== $v) {
            $this->id_groupement = $v;
            $this->modifiedColumns[] = CommonMandatairePeer::ID_GROUPEMENT;
        }

        if ($this->aCommonGroupement !== null && $this->aCommonGroupement->getId() !== $v) {
            $this->aCommonGroupement = null;
        }


        return $this;
    } // setIdGroupement()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonMandataire The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonMandatairePeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonMandataire The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonMandatairePeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [type_mandataire] column.
     * 
     * @param string $v new value
     * @return CommonMandataire The current object (for fluent API support)
     */
    public function setTypeMandataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_mandataire !== $v) {
            $this->type_mandataire = $v;
            $this->modifiedColumns[] = CommonMandatairePeer::TYPE_MANDATAIRE;
        }


        return $this;
    } // setTypeMandataire()

    /**
     * Set the value of [rc_ville] column.
     * 
     * @param int $v new value
     * @return CommonMandataire The current object (for fluent API support)
     */
    public function setRcVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rc_ville !== $v) {
            $this->rc_ville = $v;
            $this->modifiedColumns[] = CommonMandatairePeer::RC_VILLE;
        }


        return $this;
    } // setRcVille()

    /**
     * Set the value of [rc_numero] column.
     * 
     * @param int $v new value
     * @return CommonMandataire The current object (for fluent API support)
     */
    public function setRcNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rc_numero !== $v) {
            $this->rc_numero = $v;
            $this->modifiedColumns[] = CommonMandatairePeer::RC_NUMERO;
        }


        return $this;
    } // setRcNumero()

    /**
     * Set the value of [mail] column.
     * 
     * @param string $v new value
     * @return CommonMandataire The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = CommonMandatairePeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [statut_invitation] column.
     * 
     * @param string $v new value
     * @return CommonMandataire The current object (for fluent API support)
     */
    public function setStatutInvitation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_invitation !== $v) {
            $this->statut_invitation = $v;
            $this->modifiedColumns[] = CommonMandatairePeer::STATUT_INVITATION;
        }


        return $this;
    } // setStatutInvitation()

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
            if ($this->statut_invitation !== '0') {
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
            $this->id_groupement = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_entreprise = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_inscrit = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->type_mandataire = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->rc_ville = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->rc_numero = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->mail = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->statut_invitation = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = CommonMandatairePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonMandataire object", $e);
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

        if ($this->aCommonGroupement !== null && $this->id_groupement !== $this->aCommonGroupement->getId()) {
            $this->aCommonGroupement = null;
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
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonMandatairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonGroupement = null;
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
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonMandataireQuery::create()
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
            $con = Propel::getConnection(CommonMandatairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonMandatairePeer::addInstanceToPool($this);
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

            if ($this->aCommonGroupement !== null) {
                if ($this->aCommonGroupement->isModified() || $this->aCommonGroupement->isNew()) {
                    $affectedRows += $this->aCommonGroupement->save($con);
                }
                $this->setCommonGroupement($this->aCommonGroupement);
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

        $this->modifiedColumns[] = CommonMandatairePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonMandatairePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonMandatairePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonMandatairePeer::ID_GROUPEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_groupement`';
        }
        if ($this->isColumnModified(CommonMandatairePeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise`';
        }
        if ($this->isColumnModified(CommonMandatairePeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`id_inscrit`';
        }
        if ($this->isColumnModified(CommonMandatairePeer::TYPE_MANDATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`type_mandataire`';
        }
        if ($this->isColumnModified(CommonMandatairePeer::RC_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`rc_ville`';
        }
        if ($this->isColumnModified(CommonMandatairePeer::RC_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`rc_numero`';
        }
        if ($this->isColumnModified(CommonMandatairePeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`mail`';
        }
        if ($this->isColumnModified(CommonMandatairePeer::STATUT_INVITATION)) {
            $modifiedColumns[':p' . $index++]  = '`statut_invitation`';
        }

        $sql = sprintf(
            'INSERT INTO `mandataire` (%s) VALUES (%s)',
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
                    case '`id_groupement`':						
                        $stmt->bindValue($identifier, $this->id_groupement, PDO::PARAM_INT);
                        break;
                    case '`id_entreprise`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`id_inscrit`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`type_mandataire`':						
                        $stmt->bindValue($identifier, $this->type_mandataire, PDO::PARAM_STR);
                        break;
                    case '`rc_ville`':						
                        $stmt->bindValue($identifier, $this->rc_ville, PDO::PARAM_INT);
                        break;
                    case '`rc_numero`':						
                        $stmt->bindValue($identifier, $this->rc_numero, PDO::PARAM_INT);
                        break;
                    case '`mail`':						
                        $stmt->bindValue($identifier, $this->mail, PDO::PARAM_STR);
                        break;
                    case '`statut_invitation`':						
                        $stmt->bindValue($identifier, $this->statut_invitation, PDO::PARAM_STR);
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

            if ($this->aCommonGroupement !== null) {
                if (!$this->aCommonGroupement->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonGroupement->getValidationFailures());
                }
            }


            if (($retval = CommonMandatairePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonMandatairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdGroupement();
                break;
            case 2:
                return $this->getIdEntreprise();
                break;
            case 3:
                return $this->getIdInscrit();
                break;
            case 4:
                return $this->getTypeMandataire();
                break;
            case 5:
                return $this->getRcVille();
                break;
            case 6:
                return $this->getRcNumero();
                break;
            case 7:
                return $this->getMail();
                break;
            case 8:
                return $this->getStatutInvitation();
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
        if (isset($alreadyDumpedObjects['CommonMandataire'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonMandataire'][$this->getPrimaryKey()] = true;
        $keys = CommonMandatairePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdGroupement(),
            $keys[2] => $this->getIdEntreprise(),
            $keys[3] => $this->getIdInscrit(),
            $keys[4] => $this->getTypeMandataire(),
            $keys[5] => $this->getRcVille(),
            $keys[6] => $this->getRcNumero(),
            $keys[7] => $this->getMail(),
            $keys[8] => $this->getStatutInvitation(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonGroupement) {
                $result['CommonGroupement'] = $this->aCommonGroupement->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonMandatairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdGroupement($value);
                break;
            case 2:
                $this->setIdEntreprise($value);
                break;
            case 3:
                $this->setIdInscrit($value);
                break;
            case 4:
                $this->setTypeMandataire($value);
                break;
            case 5:
                $this->setRcVille($value);
                break;
            case 6:
                $this->setRcNumero($value);
                break;
            case 7:
                $this->setMail($value);
                break;
            case 8:
                $this->setStatutInvitation($value);
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
        $keys = CommonMandatairePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdGroupement($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdEntreprise($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdInscrit($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTypeMandataire($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRcVille($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRcNumero($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMail($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStatutInvitation($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonMandatairePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonMandatairePeer::ID)) $criteria->add(CommonMandatairePeer::ID, $this->id);
        if ($this->isColumnModified(CommonMandatairePeer::ID_GROUPEMENT)) $criteria->add(CommonMandatairePeer::ID_GROUPEMENT, $this->id_groupement);
        if ($this->isColumnModified(CommonMandatairePeer::ID_ENTREPRISE)) $criteria->add(CommonMandatairePeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonMandatairePeer::ID_INSCRIT)) $criteria->add(CommonMandatairePeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonMandatairePeer::TYPE_MANDATAIRE)) $criteria->add(CommonMandatairePeer::TYPE_MANDATAIRE, $this->type_mandataire);
        if ($this->isColumnModified(CommonMandatairePeer::RC_VILLE)) $criteria->add(CommonMandatairePeer::RC_VILLE, $this->rc_ville);
        if ($this->isColumnModified(CommonMandatairePeer::RC_NUMERO)) $criteria->add(CommonMandatairePeer::RC_NUMERO, $this->rc_numero);
        if ($this->isColumnModified(CommonMandatairePeer::MAIL)) $criteria->add(CommonMandatairePeer::MAIL, $this->mail);
        if ($this->isColumnModified(CommonMandatairePeer::STATUT_INVITATION)) $criteria->add(CommonMandatairePeer::STATUT_INVITATION, $this->statut_invitation);

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
        $criteria = new Criteria(CommonMandatairePeer::DATABASE_NAME);
        $criteria->add(CommonMandatairePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonMandataire (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdGroupement($this->getIdGroupement());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setTypeMandataire($this->getTypeMandataire());
        $copyObj->setRcVille($this->getRcVille());
        $copyObj->setRcNumero($this->getRcNumero());
        $copyObj->setMail($this->getMail());
        $copyObj->setStatutInvitation($this->getStatutInvitation());

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
     * @return CommonMandataire Clone of current object.
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
     * @return CommonMandatairePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonMandatairePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonGroupement object.
     *
     * @param   CommonGroupement $v
     * @return CommonMandataire The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonGroupement(CommonGroupement $v = null)
    {
        if ($v === null) {
            $this->setIdGroupement(NULL);
        } else {
            $this->setIdGroupement($v->getId());
        }

        $this->aCommonGroupement = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonGroupement object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonMandataire($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonGroupement object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonGroupement The associated CommonGroupement object.
     * @throws PropelException
     */
    public function getCommonGroupement(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonGroupement === null && ($this->id_groupement !== null) && $doQuery) {
            $this->aCommonGroupement = CommonGroupementQuery::create()->findPk($this->id_groupement, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonGroupement->addCommonMandataires($this);
             */
        }

        return $this->aCommonGroupement;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_groupement = null;
        $this->id_entreprise = null;
        $this->id_inscrit = null;
        $this->type_mandataire = null;
        $this->rc_ville = null;
        $this->rc_numero = null;
        $this->mail = null;
        $this->statut_invitation = null;
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
            if ($this->aCommonGroupement instanceof Persistent) {
              $this->aCommonGroupement->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonGroupement = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonMandatairePeer::DEFAULT_STRING_FORMAT);
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
