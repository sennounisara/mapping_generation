<?php


/**
 * Base class that represents a row from the 'Historique_Avis_Pub' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonHistoriqueAvisPub extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonHistoriqueAvisPubPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonHistoriqueAvisPubPeer
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
     * The value for the id_avis field.
     * @var        int
     */
    protected $id_avis;

    /**
     * The value for the date_modification field.
     * @var        string
     */
    protected $date_modification;

    /**
     * The value for the detail_statut field.
     * @var        int
     */
    protected $detail_statut;

    /**
     * The value for the motif_rejet field.
     * @var        string
     */
    protected $motif_rejet;

    /**
     * The value for the prenom_agent field.
     * @var        string
     */
    protected $prenom_agent;

    /**
     * The value for the nom_agent field.
     * @var        string
     */
    protected $nom_agent;

    /**
     * The value for the type_historique field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_historique;

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
        $this->type_historique = 0;
    }

    /**
     * Initializes internal state of BaseCommonHistoriqueAvisPub object.
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
     * Get the [id_avis] column value.
     * 
     * @return int
     */
    public function getIdAvis()
    {

        return $this->id_avis;
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
     * Get the [detail_statut] column value.
     * 
     * @return int
     */
    public function getDetailStatut()
    {

        return $this->detail_statut;
    }

    /**
     * Get the [motif_rejet] column value.
     * 
     * @return string
     */
    public function getMotifRejet()
    {

        return $this->motif_rejet;
    }

    /**
     * Get the [prenom_agent] column value.
     * 
     * @return string
     */
    public function getPrenomAgent()
    {

        return $this->prenom_agent;
    }

    /**
     * Get the [nom_agent] column value.
     * 
     * @return string
     */
    public function getNomAgent()
    {

        return $this->nom_agent;
    }

    /**
     * Get the [type_historique] column value.
     * 
     * @return int
     */
    public function getTypeHistorique()
    {

        return $this->type_historique;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonHistoriqueAvisPub The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonHistoriqueAvisPubPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonHistoriqueAvisPub The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonHistoriqueAvisPubPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_avis] column.
     * 
     * @param int $v new value
     * @return CommonHistoriqueAvisPub The current object (for fluent API support)
     */
    public function setIdAvis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_avis !== $v) {
            $this->id_avis = $v;
            $this->modifiedColumns[] = CommonHistoriqueAvisPubPeer::ID_AVIS;
        }


        return $this;
    } // setIdAvis()

    /**
     * Set the value of [date_modification] column.
     * 
     * @param string $v new value
     * @return CommonHistoriqueAvisPub The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modification !== $v) {
            $this->date_modification = $v;
            $this->modifiedColumns[] = CommonHistoriqueAvisPubPeer::DATE_MODIFICATION;
        }


        return $this;
    } // setDateModification()

    /**
     * Set the value of [detail_statut] column.
     * 
     * @param int $v new value
     * @return CommonHistoriqueAvisPub The current object (for fluent API support)
     */
    public function setDetailStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->detail_statut !== $v) {
            $this->detail_statut = $v;
            $this->modifiedColumns[] = CommonHistoriqueAvisPubPeer::DETAIL_STATUT;
        }


        return $this;
    } // setDetailStatut()

    /**
     * Set the value of [motif_rejet] column.
     * 
     * @param string $v new value
     * @return CommonHistoriqueAvisPub The current object (for fluent API support)
     */
    public function setMotifRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_rejet !== $v) {
            $this->motif_rejet = $v;
            $this->modifiedColumns[] = CommonHistoriqueAvisPubPeer::MOTIF_REJET;
        }


        return $this;
    } // setMotifRejet()

    /**
     * Set the value of [prenom_agent] column.
     * 
     * @param string $v new value
     * @return CommonHistoriqueAvisPub The current object (for fluent API support)
     */
    public function setPrenomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent !== $v) {
            $this->prenom_agent = $v;
            $this->modifiedColumns[] = CommonHistoriqueAvisPubPeer::PRENOM_AGENT;
        }


        return $this;
    } // setPrenomAgent()

    /**
     * Set the value of [nom_agent] column.
     * 
     * @param string $v new value
     * @return CommonHistoriqueAvisPub The current object (for fluent API support)
     */
    public function setNomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent !== $v) {
            $this->nom_agent = $v;
            $this->modifiedColumns[] = CommonHistoriqueAvisPubPeer::NOM_AGENT;
        }


        return $this;
    } // setNomAgent()

    /**
     * Set the value of [type_historique] column.
     * 
     * @param int $v new value
     * @return CommonHistoriqueAvisPub The current object (for fluent API support)
     */
    public function setTypeHistorique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_historique !== $v) {
            $this->type_historique = $v;
            $this->modifiedColumns[] = CommonHistoriqueAvisPubPeer::TYPE_HISTORIQUE;
        }


        return $this;
    } // setTypeHistorique()

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
            if ($this->type_historique !== 0) {
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
            $this->id_avis = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->date_modification = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->detail_statut = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->motif_rejet = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->prenom_agent = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->nom_agent = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->type_historique = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = CommonHistoriqueAvisPubPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonHistoriqueAvisPub object", $e);
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
            $con = Propel::getConnection(CommonHistoriqueAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonHistoriqueAvisPubPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonHistoriqueAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonHistoriqueAvisPubQuery::create()
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
            $con = Propel::getConnection(CommonHistoriqueAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonHistoriqueAvisPubPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonHistoriqueAvisPubPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonHistoriqueAvisPubPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::ID_AVIS)) {
            $modifiedColumns[':p' . $index++]  = '`id_avis`';
        }
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::DETAIL_STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`detail_statut`';
        }
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::MOTIF_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`motif_rejet`';
        }
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::PRENOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_agent`';
        }
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::NOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent`';
        }
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::TYPE_HISTORIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`type_historique`';
        }

        $sql = sprintf(
            'INSERT INTO `Historique_Avis_Pub` (%s) VALUES (%s)',
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
                    case '`id_avis`':						
                        $stmt->bindValue($identifier, $this->id_avis, PDO::PARAM_INT);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`detail_statut`':						
                        $stmt->bindValue($identifier, $this->detail_statut, PDO::PARAM_INT);
                        break;
                    case '`motif_rejet`':						
                        $stmt->bindValue($identifier, $this->motif_rejet, PDO::PARAM_STR);
                        break;
                    case '`prenom_agent`':						
                        $stmt->bindValue($identifier, $this->prenom_agent, PDO::PARAM_STR);
                        break;
                    case '`nom_agent`':						
                        $stmt->bindValue($identifier, $this->nom_agent, PDO::PARAM_STR);
                        break;
                    case '`type_historique`':						
                        $stmt->bindValue($identifier, $this->type_historique, PDO::PARAM_INT);
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


            if (($retval = CommonHistoriqueAvisPubPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonHistoriqueAvisPubPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAvis();
                break;
            case 3:
                return $this->getDateModification();
                break;
            case 4:
                return $this->getDetailStatut();
                break;
            case 5:
                return $this->getMotifRejet();
                break;
            case 6:
                return $this->getPrenomAgent();
                break;
            case 7:
                return $this->getNomAgent();
                break;
            case 8:
                return $this->getTypeHistorique();
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
        if (isset($alreadyDumpedObjects['CommonHistoriqueAvisPub'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonHistoriqueAvisPub'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonHistoriqueAvisPubPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdAvis(),
            $keys[3] => $this->getDateModification(),
            $keys[4] => $this->getDetailStatut(),
            $keys[5] => $this->getMotifRejet(),
            $keys[6] => $this->getPrenomAgent(),
            $keys[7] => $this->getNomAgent(),
            $keys[8] => $this->getTypeHistorique(),
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
        $pos = CommonHistoriqueAvisPubPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAvis($value);
                break;
            case 3:
                $this->setDateModification($value);
                break;
            case 4:
                $this->setDetailStatut($value);
                break;
            case 5:
                $this->setMotifRejet($value);
                break;
            case 6:
                $this->setPrenomAgent($value);
                break;
            case 7:
                $this->setNomAgent($value);
                break;
            case 8:
                $this->setTypeHistorique($value);
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
        $keys = CommonHistoriqueAvisPubPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdAvis($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDateModification($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDetailStatut($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMotifRejet($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrenomAgent($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNomAgent($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTypeHistorique($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonHistoriqueAvisPubPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::ID)) $criteria->add(CommonHistoriqueAvisPubPeer::ID, $this->id);
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::ORGANISME)) $criteria->add(CommonHistoriqueAvisPubPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::ID_AVIS)) $criteria->add(CommonHistoriqueAvisPubPeer::ID_AVIS, $this->id_avis);
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::DATE_MODIFICATION)) $criteria->add(CommonHistoriqueAvisPubPeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::DETAIL_STATUT)) $criteria->add(CommonHistoriqueAvisPubPeer::DETAIL_STATUT, $this->detail_statut);
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::MOTIF_REJET)) $criteria->add(CommonHistoriqueAvisPubPeer::MOTIF_REJET, $this->motif_rejet);
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::PRENOM_AGENT)) $criteria->add(CommonHistoriqueAvisPubPeer::PRENOM_AGENT, $this->prenom_agent);
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::NOM_AGENT)) $criteria->add(CommonHistoriqueAvisPubPeer::NOM_AGENT, $this->nom_agent);
        if ($this->isColumnModified(CommonHistoriqueAvisPubPeer::TYPE_HISTORIQUE)) $criteria->add(CommonHistoriqueAvisPubPeer::TYPE_HISTORIQUE, $this->type_historique);

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
        $criteria = new Criteria(CommonHistoriqueAvisPubPeer::DATABASE_NAME);
        $criteria->add(CommonHistoriqueAvisPubPeer::ID, $this->id);
        $criteria->add(CommonHistoriqueAvisPubPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonHistoriqueAvisPub (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdAvis($this->getIdAvis());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setDetailStatut($this->getDetailStatut());
        $copyObj->setMotifRejet($this->getMotifRejet());
        $copyObj->setPrenomAgent($this->getPrenomAgent());
        $copyObj->setNomAgent($this->getNomAgent());
        $copyObj->setTypeHistorique($this->getTypeHistorique());
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
     * @return CommonHistoriqueAvisPub Clone of current object.
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
     * @return CommonHistoriqueAvisPubPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonHistoriqueAvisPubPeer();
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
        $this->id_avis = null;
        $this->date_modification = null;
        $this->detail_statut = null;
        $this->motif_rejet = null;
        $this->prenom_agent = null;
        $this->nom_agent = null;
        $this->type_historique = null;
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
        return (string) $this->exportTo(CommonHistoriqueAvisPubPeer::DEFAULT_STRING_FORMAT);
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
