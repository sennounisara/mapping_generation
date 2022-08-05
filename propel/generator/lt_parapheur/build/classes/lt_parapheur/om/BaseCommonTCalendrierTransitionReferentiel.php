<?php


/**
 * Base class that represents a row from the 't_calendrier_transition_referentiel' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCalendrierTransitionReferentiel extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCalendrierTransitionReferentielPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCalendrierTransitionReferentielPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_transition_calendrier_referentiel field.
     * @var        int
     */
    protected $id_transition_calendrier_referentiel;

    /**
     * The value for the id_type_procedure field.
     * @var        int
     */
    protected $id_type_procedure;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_calendrier_etape_referentiel_source field.
     * @var        int
     */
    protected $id_calendrier_etape_referentiel_source;

    /**
     * The value for the id_calendrier_etape_referentiel_cible field.
     * @var        int
     */
    protected $id_calendrier_etape_referentiel_cible;

    /**
     * The value for the valeur_fixe field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $valeur_fixe;

    /**
     * The value for the valeur_variable field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $valeur_variable;

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
        $this->valeur_fixe = 0;
        $this->valeur_variable = 0;
    }

    /**
     * Initializes internal state of BaseCommonTCalendrierTransitionReferentiel object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_transition_calendrier_referentiel] column value.
     * 
     * @return int
     */
    public function getIdTransitionCalendrierReferentiel()
    {

        return $this->id_transition_calendrier_referentiel;
    }

    /**
     * Get the [id_type_procedure] column value.
     * 
     * @return int
     */
    public function getIdTypeProcedure()
    {

        return $this->id_type_procedure;
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
     * Get the [id_calendrier_etape_referentiel_source] column value.
     * 
     * @return int
     */
    public function getIdCalendrierEtapeReferentielSource()
    {

        return $this->id_calendrier_etape_referentiel_source;
    }

    /**
     * Get the [id_calendrier_etape_referentiel_cible] column value.
     * 
     * @return int
     */
    public function getIdCalendrierEtapeReferentielCible()
    {

        return $this->id_calendrier_etape_referentiel_cible;
    }

    /**
     * Get the [valeur_fixe] column value.
     * 
     * @return int
     */
    public function getValeurFixe()
    {

        return $this->valeur_fixe;
    }

    /**
     * Get the [valeur_variable] column value.
     * 
     * @return int
     */
    public function getValeurVariable()
    {

        return $this->valeur_variable;
    }

    /**
     * Set the value of [id_transition_calendrier_referentiel] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrierTransitionReferentiel The current object (for fluent API support)
     */
    public function setIdTransitionCalendrierReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_transition_calendrier_referentiel !== $v) {
            $this->id_transition_calendrier_referentiel = $v;
            $this->modifiedColumns[] = CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL;
        }


        return $this;
    } // setIdTransitionCalendrierReferentiel()

    /**
     * Set the value of [id_type_procedure] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrierTransitionReferentiel The current object (for fluent API support)
     */
    public function setIdTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_procedure !== $v) {
            $this->id_type_procedure = $v;
            $this->modifiedColumns[] = CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE;
        }


        return $this;
    } // setIdTypeProcedure()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTCalendrierTransitionReferentiel The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTCalendrierTransitionReferentielPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_calendrier_etape_referentiel_source] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrierTransitionReferentiel The current object (for fluent API support)
     */
    public function setIdCalendrierEtapeReferentielSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_calendrier_etape_referentiel_source !== $v) {
            $this->id_calendrier_etape_referentiel_source = $v;
            $this->modifiedColumns[] = CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE;
        }


        return $this;
    } // setIdCalendrierEtapeReferentielSource()

    /**
     * Set the value of [id_calendrier_etape_referentiel_cible] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrierTransitionReferentiel The current object (for fluent API support)
     */
    public function setIdCalendrierEtapeReferentielCible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_calendrier_etape_referentiel_cible !== $v) {
            $this->id_calendrier_etape_referentiel_cible = $v;
            $this->modifiedColumns[] = CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE;
        }


        return $this;
    } // setIdCalendrierEtapeReferentielCible()

    /**
     * Set the value of [valeur_fixe] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrierTransitionReferentiel The current object (for fluent API support)
     */
    public function setValeurFixe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->valeur_fixe !== $v) {
            $this->valeur_fixe = $v;
            $this->modifiedColumns[] = CommonTCalendrierTransitionReferentielPeer::VALEUR_FIXE;
        }


        return $this;
    } // setValeurFixe()

    /**
     * Set the value of [valeur_variable] column.
     * 
     * @param int $v new value
     * @return CommonTCalendrierTransitionReferentiel The current object (for fluent API support)
     */
    public function setValeurVariable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->valeur_variable !== $v) {
            $this->valeur_variable = $v;
            $this->modifiedColumns[] = CommonTCalendrierTransitionReferentielPeer::VALEUR_VARIABLE;
        }


        return $this;
    } // setValeurVariable()

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
            if ($this->valeur_fixe !== 0) {
                return false;
            }

            if ($this->valeur_variable !== 0) {
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

            $this->id_transition_calendrier_referentiel = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_type_procedure = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->organisme = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_calendrier_etape_referentiel_source = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_calendrier_etape_referentiel_cible = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->valeur_fixe = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->valeur_variable = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = CommonTCalendrierTransitionReferentielPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCalendrierTransitionReferentiel object", $e);
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
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCalendrierTransitionReferentielPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCalendrierTransitionReferentielQuery::create()
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
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCalendrierTransitionReferentielPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL;
        if (null !== $this->id_transition_calendrier_referentiel) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_TRANSITION_CALENDRIER_REFERENTIEL`';
        }
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_TYPE_PROCEDURE`';
        }
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`ORGANISME`';
        }
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE`';
        }
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE`';
        }
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::VALEUR_FIXE)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_FIXE`';
        }
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::VALEUR_VARIABLE)) {
            $modifiedColumns[':p' . $index++]  = '`VALEUR_VARIABLE`';
        }

        $sql = sprintf(
            'INSERT INTO `t_calendrier_transition_referentiel` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_TRANSITION_CALENDRIER_REFERENTIEL`':						
                        $stmt->bindValue($identifier, $this->id_transition_calendrier_referentiel, PDO::PARAM_INT);
                        break;
                    case '`ID_TYPE_PROCEDURE`':						
                        $stmt->bindValue($identifier, $this->id_type_procedure, PDO::PARAM_INT);
                        break;
                    case '`ORGANISME`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE`':						
                        $stmt->bindValue($identifier, $this->id_calendrier_etape_referentiel_source, PDO::PARAM_INT);
                        break;
                    case '`ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE`':						
                        $stmt->bindValue($identifier, $this->id_calendrier_etape_referentiel_cible, PDO::PARAM_INT);
                        break;
                    case '`VALEUR_FIXE`':						
                        $stmt->bindValue($identifier, $this->valeur_fixe, PDO::PARAM_INT);
                        break;
                    case '`VALEUR_VARIABLE`':						
                        $stmt->bindValue($identifier, $this->valeur_variable, PDO::PARAM_INT);
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
        $this->setIdTransitionCalendrierReferentiel($pk);

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


            if (($retval = CommonTCalendrierTransitionReferentielPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTCalendrierTransitionReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTransitionCalendrierReferentiel();
                break;
            case 1:
                return $this->getIdTypeProcedure();
                break;
            case 2:
                return $this->getOrganisme();
                break;
            case 3:
                return $this->getIdCalendrierEtapeReferentielSource();
                break;
            case 4:
                return $this->getIdCalendrierEtapeReferentielCible();
                break;
            case 5:
                return $this->getValeurFixe();
                break;
            case 6:
                return $this->getValeurVariable();
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
        if (isset($alreadyDumpedObjects['CommonTCalendrierTransitionReferentiel'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCalendrierTransitionReferentiel'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTCalendrierTransitionReferentielPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTransitionCalendrierReferentiel(),
            $keys[1] => $this->getIdTypeProcedure(),
            $keys[2] => $this->getOrganisme(),
            $keys[3] => $this->getIdCalendrierEtapeReferentielSource(),
            $keys[4] => $this->getIdCalendrierEtapeReferentielCible(),
            $keys[5] => $this->getValeurFixe(),
            $keys[6] => $this->getValeurVariable(),
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
        $pos = CommonTCalendrierTransitionReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTransitionCalendrierReferentiel($value);
                break;
            case 1:
                $this->setIdTypeProcedure($value);
                break;
            case 2:
                $this->setOrganisme($value);
                break;
            case 3:
                $this->setIdCalendrierEtapeReferentielSource($value);
                break;
            case 4:
                $this->setIdCalendrierEtapeReferentielCible($value);
                break;
            case 5:
                $this->setValeurFixe($value);
                break;
            case 6:
                $this->setValeurVariable($value);
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
        $keys = CommonTCalendrierTransitionReferentielPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTransitionCalendrierReferentiel($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdTypeProcedure($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrganisme($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdCalendrierEtapeReferentielSource($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdCalendrierEtapeReferentielCible($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setValeurFixe($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setValeurVariable($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL)) $criteria->add(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, $this->id_transition_calendrier_referentiel);
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE)) $criteria->add(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::ORGANISME)) $criteria->add(CommonTCalendrierTransitionReferentielPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE)) $criteria->add(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE, $this->id_calendrier_etape_referentiel_source);
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE)) $criteria->add(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE, $this->id_calendrier_etape_referentiel_cible);
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::VALEUR_FIXE)) $criteria->add(CommonTCalendrierTransitionReferentielPeer::VALEUR_FIXE, $this->valeur_fixe);
        if ($this->isColumnModified(CommonTCalendrierTransitionReferentielPeer::VALEUR_VARIABLE)) $criteria->add(CommonTCalendrierTransitionReferentielPeer::VALEUR_VARIABLE, $this->valeur_variable);

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
        $criteria = new Criteria(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME);
        $criteria->add(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, $this->id_transition_calendrier_referentiel);
        $criteria->add(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        $criteria->add(CommonTCalendrierTransitionReferentielPeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdTransitionCalendrierReferentiel();
        $pks[1] = $this->getIdTypeProcedure();
        $pks[2] = $this->getOrganisme();

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
        $this->setIdTransitionCalendrierReferentiel($keys[0]);
        $this->setIdTypeProcedure($keys[1]);
        $this->setOrganisme($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdTransitionCalendrierReferentiel()) && (null === $this->getIdTypeProcedure()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTCalendrierTransitionReferentiel (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTypeProcedure($this->getIdTypeProcedure());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdCalendrierEtapeReferentielSource($this->getIdCalendrierEtapeReferentielSource());
        $copyObj->setIdCalendrierEtapeReferentielCible($this->getIdCalendrierEtapeReferentielCible());
        $copyObj->setValeurFixe($this->getValeurFixe());
        $copyObj->setValeurVariable($this->getValeurVariable());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTransitionCalendrierReferentiel(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTCalendrierTransitionReferentiel Clone of current object.
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
     * @return CommonTCalendrierTransitionReferentielPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCalendrierTransitionReferentielPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_transition_calendrier_referentiel = null;
        $this->id_type_procedure = null;
        $this->organisme = null;
        $this->id_calendrier_etape_referentiel_source = null;
        $this->id_calendrier_etape_referentiel_cible = null;
        $this->valeur_fixe = null;
        $this->valeur_variable = null;
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
        return (string) $this->exportTo(CommonTCalendrierTransitionReferentielPeer::DEFAULT_STRING_FORMAT);
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
