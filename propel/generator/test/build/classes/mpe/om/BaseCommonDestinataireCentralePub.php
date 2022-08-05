<?php


/**
 * Base class that represents a row from the 'destinataire_centrale_pub' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDestinataireCentralePub extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonDestinataireCentralePubPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonDestinataireCentralePubPeer
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
     * The value for the id_annonce_jal field.
     * @var        int
     */
    protected $id_annonce_jal;

    /**
     * The value for the id_compte field.
     * @var        int
     */
    protected $id_compte;

    /**
     * The value for the ids_journaux field.
     * @var        string
     */
    protected $ids_journaux;

    /**
     * The value for the statut field.
     * @var        string
     */
    protected $statut;

    /**
     * The value for the date_envoi field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the date_pub field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_pub;

    /**
     * The value for the accuse field.
     * @var        string
     */
    protected $accuse;

    /**
     * The value for the id_echange field.
     * @var        int
     */
    protected $id_echange;

    /**
     * The value for the date_ar field.
     * @var        string
     */
    protected $date_ar;

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
        $this->date_envoi = '0000-00-00 00:00:00';
        $this->date_pub = '0000-00-00 00:00:00';
    }

    /**
     * Initializes internal state of BaseCommonDestinataireCentralePub object.
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
     * Get the [id_annonce_jal] column value.
     * 
     * @return int
     */
    public function getIdAnnonceJal()
    {

        return $this->id_annonce_jal;
    }

    /**
     * Get the [id_compte] column value.
     * 
     * @return int
     */
    public function getIdCompte()
    {

        return $this->id_compte;
    }

    /**
     * Get the [ids_journaux] column value.
     * 
     * @return string
     */
    public function getIdsJournaux()
    {

        return $this->ids_journaux;
    }

    /**
     * Get the [statut] column value.
     * 
     * @return string
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Get the [date_envoi] column value.
     * 
     * @return string
     */
    public function getDateEnvoi()
    {

        return $this->date_envoi;
    }

    /**
     * Get the [date_pub] column value.
     * 
     * @return string
     */
    public function getDatePub()
    {

        return $this->date_pub;
    }

    /**
     * Get the [accuse] column value.
     * 
     * @return string
     */
    public function getAccuse()
    {

        return $this->accuse;
    }

    /**
     * Get the [id_echange] column value.
     * 
     * @return int
     */
    public function getIdEchange()
    {

        return $this->id_echange;
    }

    /**
     * Get the [date_ar] column value.
     * 
     * @return string
     */
    public function getDateAr()
    {

        return $this->date_ar;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_annonce_jal] column.
     * 
     * @param int $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setIdAnnonceJal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_annonce_jal !== $v) {
            $this->id_annonce_jal = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::ID_ANNONCE_JAL;
        }


        return $this;
    } // setIdAnnonceJal()

    /**
     * Set the value of [id_compte] column.
     * 
     * @param int $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setIdCompte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_compte !== $v) {
            $this->id_compte = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::ID_COMPTE;
        }


        return $this;
    } // setIdCompte()

    /**
     * Set the value of [ids_journaux] column.
     * 
     * @param string $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setIdsJournaux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_journaux !== $v) {
            $this->ids_journaux = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::IDS_JOURNAUX;
        }


        return $this;
    } // setIdsJournaux()

    /**
     * Set the value of [statut] column.
     * 
     * @param string $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [date_envoi] column.
     * 
     * @param string $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi !== $v) {
            $this->date_envoi = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::DATE_ENVOI;
        }


        return $this;
    } // setDateEnvoi()

    /**
     * Set the value of [date_pub] column.
     * 
     * @param string $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setDatePub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_pub !== $v) {
            $this->date_pub = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::DATE_PUB;
        }


        return $this;
    } // setDatePub()

    /**
     * Set the value of [accuse] column.
     * 
     * @param string $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setAccuse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->accuse !== $v) {
            $this->accuse = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::ACCUSE;
        }


        return $this;
    } // setAccuse()

    /**
     * Set the value of [id_echange] column.
     * 
     * @param int $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setIdEchange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_echange !== $v) {
            $this->id_echange = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::ID_ECHANGE;
        }


        return $this;
    } // setIdEchange()

    /**
     * Set the value of [date_ar] column.
     * 
     * @param string $v new value
     * @return CommonDestinataireCentralePub The current object (for fluent API support)
     */
    public function setDateAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_ar !== $v) {
            $this->date_ar = $v;
            $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::DATE_AR;
        }


        return $this;
    } // setDateAr()

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
            if ($this->date_envoi !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->date_pub !== '0000-00-00 00:00:00') {
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
            $this->id_annonce_jal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_compte = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->ids_journaux = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->statut = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->date_envoi = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->date_pub = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->accuse = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->id_echange = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->date_ar = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = CommonDestinataireCentralePubPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonDestinataireCentralePub object", $e);
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
            $con = Propel::getConnection(CommonDestinataireCentralePubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonDestinataireCentralePubPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonDestinataireCentralePubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonDestinataireCentralePubQuery::create()
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
            $con = Propel::getConnection(CommonDestinataireCentralePubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonDestinataireCentralePubPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonDestinataireCentralePubPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonDestinataireCentralePubPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ID_ANNONCE_JAL)) {
            $modifiedColumns[':p' . $index++]  = '`id_annonce_jal`';
        }
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ID_COMPTE)) {
            $modifiedColumns[':p' . $index++]  = '`id_compte`';
        }
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::IDS_JOURNAUX)) {
            $modifiedColumns[':p' . $index++]  = '`ids_journaux`';
        }
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi`';
        }
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::DATE_PUB)) {
            $modifiedColumns[':p' . $index++]  = '`date_pub`';
        }
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ACCUSE)) {
            $modifiedColumns[':p' . $index++]  = '`accuse`';
        }
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ID_ECHANGE)) {
            $modifiedColumns[':p' . $index++]  = '`id_echange`';
        }
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::DATE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`date_ar`';
        }

        $sql = sprintf(
            'INSERT INTO `destinataire_centrale_pub` (%s) VALUES (%s)',
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
                    case '`id_annonce_jal`':						
                        $stmt->bindValue($identifier, $this->id_annonce_jal, PDO::PARAM_INT);
                        break;
                    case '`id_compte`':						
                        $stmt->bindValue($identifier, $this->id_compte, PDO::PARAM_INT);
                        break;
                    case '`ids_journaux`':						
                        $stmt->bindValue($identifier, $this->ids_journaux, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_STR);
                        break;
                    case '`date_envoi`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`date_pub`':						
                        $stmt->bindValue($identifier, $this->date_pub, PDO::PARAM_STR);
                        break;
                    case '`accuse`':						
                        $stmt->bindValue($identifier, $this->accuse, PDO::PARAM_STR);
                        break;
                    case '`id_echange`':						
                        $stmt->bindValue($identifier, $this->id_echange, PDO::PARAM_INT);
                        break;
                    case '`date_ar`':						
                        $stmt->bindValue($identifier, $this->date_ar, PDO::PARAM_STR);
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


            if (($retval = CommonDestinataireCentralePubPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonDestinataireCentralePubPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAnnonceJal();
                break;
            case 3:
                return $this->getIdCompte();
                break;
            case 4:
                return $this->getIdsJournaux();
                break;
            case 5:
                return $this->getStatut();
                break;
            case 6:
                return $this->getDateEnvoi();
                break;
            case 7:
                return $this->getDatePub();
                break;
            case 8:
                return $this->getAccuse();
                break;
            case 9:
                return $this->getIdEchange();
                break;
            case 10:
                return $this->getDateAr();
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
        if (isset($alreadyDumpedObjects['CommonDestinataireCentralePub'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonDestinataireCentralePub'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonDestinataireCentralePubPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdAnnonceJal(),
            $keys[3] => $this->getIdCompte(),
            $keys[4] => $this->getIdsJournaux(),
            $keys[5] => $this->getStatut(),
            $keys[6] => $this->getDateEnvoi(),
            $keys[7] => $this->getDatePub(),
            $keys[8] => $this->getAccuse(),
            $keys[9] => $this->getIdEchange(),
            $keys[10] => $this->getDateAr(),
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
        $pos = CommonDestinataireCentralePubPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAnnonceJal($value);
                break;
            case 3:
                $this->setIdCompte($value);
                break;
            case 4:
                $this->setIdsJournaux($value);
                break;
            case 5:
                $this->setStatut($value);
                break;
            case 6:
                $this->setDateEnvoi($value);
                break;
            case 7:
                $this->setDatePub($value);
                break;
            case 8:
                $this->setAccuse($value);
                break;
            case 9:
                $this->setIdEchange($value);
                break;
            case 10:
                $this->setDateAr($value);
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
        $keys = CommonDestinataireCentralePubPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdAnnonceJal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdCompte($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdsJournaux($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStatut($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateEnvoi($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDatePub($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAccuse($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIdEchange($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateAr($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonDestinataireCentralePubPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ID)) $criteria->add(CommonDestinataireCentralePubPeer::ID, $this->id);
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ORGANISME)) $criteria->add(CommonDestinataireCentralePubPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ID_ANNONCE_JAL)) $criteria->add(CommonDestinataireCentralePubPeer::ID_ANNONCE_JAL, $this->id_annonce_jal);
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ID_COMPTE)) $criteria->add(CommonDestinataireCentralePubPeer::ID_COMPTE, $this->id_compte);
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::IDS_JOURNAUX)) $criteria->add(CommonDestinataireCentralePubPeer::IDS_JOURNAUX, $this->ids_journaux);
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::STATUT)) $criteria->add(CommonDestinataireCentralePubPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::DATE_ENVOI)) $criteria->add(CommonDestinataireCentralePubPeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::DATE_PUB)) $criteria->add(CommonDestinataireCentralePubPeer::DATE_PUB, $this->date_pub);
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ACCUSE)) $criteria->add(CommonDestinataireCentralePubPeer::ACCUSE, $this->accuse);
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::ID_ECHANGE)) $criteria->add(CommonDestinataireCentralePubPeer::ID_ECHANGE, $this->id_echange);
        if ($this->isColumnModified(CommonDestinataireCentralePubPeer::DATE_AR)) $criteria->add(CommonDestinataireCentralePubPeer::DATE_AR, $this->date_ar);

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
        $criteria = new Criteria(CommonDestinataireCentralePubPeer::DATABASE_NAME);
        $criteria->add(CommonDestinataireCentralePubPeer::ID, $this->id);
        $criteria->add(CommonDestinataireCentralePubPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonDestinataireCentralePub (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdAnnonceJal($this->getIdAnnonceJal());
        $copyObj->setIdCompte($this->getIdCompte());
        $copyObj->setIdsJournaux($this->getIdsJournaux());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setDatePub($this->getDatePub());
        $copyObj->setAccuse($this->getAccuse());
        $copyObj->setIdEchange($this->getIdEchange());
        $copyObj->setDateAr($this->getDateAr());
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
     * @return CommonDestinataireCentralePub Clone of current object.
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
     * @return CommonDestinataireCentralePubPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonDestinataireCentralePubPeer();
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
        $this->id_annonce_jal = null;
        $this->id_compte = null;
        $this->ids_journaux = null;
        $this->statut = null;
        $this->date_envoi = null;
        $this->date_pub = null;
        $this->accuse = null;
        $this->id_echange = null;
        $this->date_ar = null;
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
        return (string) $this->exportTo(CommonDestinataireCentralePubPeer::DEFAULT_STRING_FORMAT);
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
