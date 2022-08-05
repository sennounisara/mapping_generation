<?php


/**
 * Base class that represents a row from the 'detail_admissibilite' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDetailAdmissibilite extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonDetailAdmissibilitePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonDetailAdmissibilitePeer
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
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_offre field.
     * @var        int
     */
    protected $id_offre;

    /**
     * The value for the id_env field.
     * @var        int
     */
    protected $id_env;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the admissibilite field.
     * @var        string
     */
    protected $admissibilite;

    /**
     * The value for the reserve field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $reserve;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the id_seance field.
     * @var        int
     */
    protected $id_seance;

    /**
     * The value for the lot field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lot;

    /**
     * The value for the type_offre field.
     * @var        string
     */
    protected $type_offre;

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
        $this->reserve = '0';
        $this->lot = 0;
    }

    /**
     * Initializes internal state of BaseCommonDetailAdmissibilite object.
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
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
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
     * Get the [id_offre] column value.
     * 
     * @return int
     */
    public function getIdOffre()
    {

        return $this->id_offre;
    }

    /**
     * Get the [id_env] column value.
     * 
     * @return int
     */
    public function getIdEnv()
    {

        return $this->id_env;
    }

    /**
     * Get the [type] column value.
     * 
     * @return string
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [admissibilite] column value.
     * 
     * @return string
     */
    public function getAdmissibilite()
    {

        return $this->admissibilite;
    }

    /**
     * Get the [reserve] column value.
     * 
     * @return string
     */
    public function getReserve()
    {

        return $this->reserve;
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
     * Get the [id_seance] column value.
     * 
     * @return int
     */
    public function getIdSeance()
    {

        return $this->id_seance;
    }

    /**
     * Get the [lot] column value.
     * 
     * @return int
     */
    public function getLot()
    {

        return $this->lot;
    }

    /**
     * Get the [type_offre] column value.
     * 
     * @return string
     */
    public function getTypeOffre()
    {

        return $this->type_offre;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_offre] column.
     * 
     * @param int $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setIdOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_offre !== $v) {
            $this->id_offre = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::ID_OFFRE;
        }


        return $this;
    } // setIdOffre()

    /**
     * Set the value of [id_env] column.
     * 
     * @param int $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setIdEnv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_env !== $v) {
            $this->id_env = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::ID_ENV;
        }


        return $this;
    } // setIdEnv()

    /**
     * Set the value of [type] column.
     * 
     * @param string $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [admissibilite] column.
     * 
     * @param string $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setAdmissibilite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->admissibilite !== $v) {
            $this->admissibilite = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::ADMISSIBILITE;
        }


        return $this;
    } // setAdmissibilite()

    /**
     * Set the value of [reserve] column.
     * 
     * @param string $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setReserve($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reserve !== $v) {
            $this->reserve = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::RESERVE;
        }


        return $this;
    } // setReserve()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [id_seance] column.
     * 
     * @param int $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setIdSeance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_seance !== $v) {
            $this->id_seance = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::ID_SEANCE;
        }


        return $this;
    } // setIdSeance()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [type_offre] column.
     * 
     * @param string $v new value
     * @return CommonDetailAdmissibilite The current object (for fluent API support)
     */
    public function setTypeOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_offre !== $v) {
            $this->type_offre = $v;
            $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::TYPE_OFFRE;
        }


        return $this;
    } // setTypeOffre()

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
            if ($this->reserve !== '0') {
                return false;
            }

            if ($this->lot !== 0) {
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
            $this->consultation_ref = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->organisme = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_offre = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_env = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->type = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->admissibilite = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->reserve = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->commentaire = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->id_seance = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->lot = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->type_offre = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CommonDetailAdmissibilitePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonDetailAdmissibilite object", $e);
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
            $con = Propel::getConnection(CommonDetailAdmissibilitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonDetailAdmissibilitePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonDetailAdmissibilitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonDetailAdmissibiliteQuery::create()
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
            $con = Propel::getConnection(CommonDetailAdmissibilitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonDetailAdmissibilitePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonDetailAdmissibilitePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonDetailAdmissibilitePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ID_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_offre`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ID_ENV)) {
            $modifiedColumns[':p' . $index++]  = '`id_env`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ADMISSIBILITE)) {
            $modifiedColumns[':p' . $index++]  = '`admissibilite`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::RESERVE)) {
            $modifiedColumns[':p' . $index++]  = '`reserve`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ID_SEANCE)) {
            $modifiedColumns[':p' . $index++]  = '`id_seance`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::TYPE_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`type_offre`';
        }

        $sql = sprintf(
            'INSERT INTO `detail_admissibilite` (%s) VALUES (%s)',
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
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_offre`':						
                        $stmt->bindValue($identifier, $this->id_offre, PDO::PARAM_INT);
                        break;
                    case '`id_env`':						
                        $stmt->bindValue($identifier, $this->id_env, PDO::PARAM_INT);
                        break;
                    case '`type`':						
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`admissibilite`':						
                        $stmt->bindValue($identifier, $this->admissibilite, PDO::PARAM_STR);
                        break;
                    case '`reserve`':						
                        $stmt->bindValue($identifier, $this->reserve, PDO::PARAM_STR);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`id_seance`':						
                        $stmt->bindValue($identifier, $this->id_seance, PDO::PARAM_INT);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`type_offre`':						
                        $stmt->bindValue($identifier, $this->type_offre, PDO::PARAM_STR);
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


            if (($retval = CommonDetailAdmissibilitePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonDetailAdmissibilitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getConsultationRef();
                break;
            case 2:
                return $this->getOrganisme();
                break;
            case 3:
                return $this->getIdOffre();
                break;
            case 4:
                return $this->getIdEnv();
                break;
            case 5:
                return $this->getType();
                break;
            case 6:
                return $this->getAdmissibilite();
                break;
            case 7:
                return $this->getReserve();
                break;
            case 8:
                return $this->getCommentaire();
                break;
            case 9:
                return $this->getIdSeance();
                break;
            case 10:
                return $this->getLot();
                break;
            case 11:
                return $this->getTypeOffre();
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
        if (isset($alreadyDumpedObjects['CommonDetailAdmissibilite'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonDetailAdmissibilite'][$this->getPrimaryKey()] = true;
        $keys = CommonDetailAdmissibilitePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getConsultationRef(),
            $keys[2] => $this->getOrganisme(),
            $keys[3] => $this->getIdOffre(),
            $keys[4] => $this->getIdEnv(),
            $keys[5] => $this->getType(),
            $keys[6] => $this->getAdmissibilite(),
            $keys[7] => $this->getReserve(),
            $keys[8] => $this->getCommentaire(),
            $keys[9] => $this->getIdSeance(),
            $keys[10] => $this->getLot(),
            $keys[11] => $this->getTypeOffre(),
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
        $pos = CommonDetailAdmissibilitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setConsultationRef($value);
                break;
            case 2:
                $this->setOrganisme($value);
                break;
            case 3:
                $this->setIdOffre($value);
                break;
            case 4:
                $this->setIdEnv($value);
                break;
            case 5:
                $this->setType($value);
                break;
            case 6:
                $this->setAdmissibilite($value);
                break;
            case 7:
                $this->setReserve($value);
                break;
            case 8:
                $this->setCommentaire($value);
                break;
            case 9:
                $this->setIdSeance($value);
                break;
            case 10:
                $this->setLot($value);
                break;
            case 11:
                $this->setTypeOffre($value);
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
        $keys = CommonDetailAdmissibilitePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setConsultationRef($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrganisme($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdOffre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdEnv($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdmissibilite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setReserve($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCommentaire($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIdSeance($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLot($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTypeOffre($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonDetailAdmissibilitePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ID)) $criteria->add(CommonDetailAdmissibilitePeer::ID, $this->id);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::CONSULTATION_REF)) $criteria->add(CommonDetailAdmissibilitePeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ORGANISME)) $criteria->add(CommonDetailAdmissibilitePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ID_OFFRE)) $criteria->add(CommonDetailAdmissibilitePeer::ID_OFFRE, $this->id_offre);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ID_ENV)) $criteria->add(CommonDetailAdmissibilitePeer::ID_ENV, $this->id_env);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::TYPE)) $criteria->add(CommonDetailAdmissibilitePeer::TYPE, $this->type);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ADMISSIBILITE)) $criteria->add(CommonDetailAdmissibilitePeer::ADMISSIBILITE, $this->admissibilite);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::RESERVE)) $criteria->add(CommonDetailAdmissibilitePeer::RESERVE, $this->reserve);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::COMMENTAIRE)) $criteria->add(CommonDetailAdmissibilitePeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::ID_SEANCE)) $criteria->add(CommonDetailAdmissibilitePeer::ID_SEANCE, $this->id_seance);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::LOT)) $criteria->add(CommonDetailAdmissibilitePeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonDetailAdmissibilitePeer::TYPE_OFFRE)) $criteria->add(CommonDetailAdmissibilitePeer::TYPE_OFFRE, $this->type_offre);

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
        $criteria = new Criteria(CommonDetailAdmissibilitePeer::DATABASE_NAME);
        $criteria->add(CommonDetailAdmissibilitePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonDetailAdmissibilite (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdOffre($this->getIdOffre());
        $copyObj->setIdEnv($this->getIdEnv());
        $copyObj->setType($this->getType());
        $copyObj->setAdmissibilite($this->getAdmissibilite());
        $copyObj->setReserve($this->getReserve());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setIdSeance($this->getIdSeance());
        $copyObj->setLot($this->getLot());
        $copyObj->setTypeOffre($this->getTypeOffre());
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
     * @return CommonDetailAdmissibilite Clone of current object.
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
     * @return CommonDetailAdmissibilitePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonDetailAdmissibilitePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->consultation_ref = null;
        $this->organisme = null;
        $this->id_offre = null;
        $this->id_env = null;
        $this->type = null;
        $this->admissibilite = null;
        $this->reserve = null;
        $this->commentaire = null;
        $this->id_seance = null;
        $this->lot = null;
        $this->type_offre = null;
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
        return (string) $this->exportTo(CommonDetailAdmissibilitePeer::DEFAULT_STRING_FORMAT);
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
