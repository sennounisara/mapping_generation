<?php


/**
 * Base class that represents a row from the 't_tache' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTTache extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TTachePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TTachePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_tache field.
     * @var        int
     */
    protected $id_tache;

    /**
     * The value for the intitule field.
     * @var        string
     */
    protected $intitule;

    /**
     * The value for the date_echeance_previsionnelle field.
     * @var        string
     */
    protected $date_echeance_previsionnelle;

    /**
     * The value for the date_echeance_reelle field.
     * @var        string
     */
    protected $date_echeance_reelle;

    /**
     * The value for the responsable field.
     * @var        string
     */
    protected $responsable;

    /**
     * The value for the taux_realisation field.
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $taux_realisation;

    /**
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

    /**
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the agent field.
     * @var        string
     */
    protected $agent;

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
        $this->taux_realisation = 0.0;
    }

    /**
     * Initializes internal state of BaseTTache object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_tache] column value.
     * 
     * @return int
     */
    public function getIdTache()
    {

        return $this->id_tache;
    }

    /**
     * Get the [intitule] column value.
     * 
     * @return string
     */
    public function getIntitule()
    {

        return $this->intitule;
    }

    /**
     * Get the [optionally formatted] temporal [date_echeance_previsionnelle] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEcheancePrevisionnelle($format = null)
    {
        if ($this->date_echeance_previsionnelle === null) {
            return null;
        }

        if ($this->date_echeance_previsionnelle === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_echeance_previsionnelle);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_echeance_previsionnelle, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [optionally formatted] temporal [date_echeance_reelle] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEcheanceReelle($format = null)
    {
        if ($this->date_echeance_reelle === null) {
            return null;
        }

        if ($this->date_echeance_reelle === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_echeance_reelle);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_echeance_reelle, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [responsable] column value.
     * 
     * @return string
     */
    public function getResponsable()
    {

        return $this->responsable;
    }

    /**
     * Get the [taux_realisation] column value.
     * 
     * @return double
     */
    public function getTauxRealisation()
    {

        return $this->taux_realisation;
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
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
    }

    /**
     * Get the [agent] column value.
     * 
     * @return string
     */
    public function getAgent()
    {

        return $this->agent;
    }

    /**
     * Set the value of [id_tache] column.
     * 
     * @param int $v new value
     * @return TTache The current object (for fluent API support)
     */
    public function setIdTache($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tache !== $v) {
            $this->id_tache = $v;
            $this->modifiedColumns[] = TTachePeer::ID_TACHE;
        }


        return $this;
    } // setIdTache()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return TTache The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = TTachePeer::INTITULE;
        }


        return $this;
    } // setIntitule()

    /**
     * Sets the value of [date_echeance_previsionnelle] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TTache The current object (for fluent API support)
     */
    public function setDateEcheancePrevisionnelle($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_echeance_previsionnelle !== null || $dt !== null) {
            $currentDateAsString = ($this->date_echeance_previsionnelle !== null && $tmpDt = new DateTime($this->date_echeance_previsionnelle)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_echeance_previsionnelle = $newDateAsString;
                $this->modifiedColumns[] = TTachePeer::DATE_ECHEANCE_PREVISIONNELLE;
            }
        } // if either are not null


        return $this;
    } // setDateEcheancePrevisionnelle()

    /**
     * Sets the value of [date_echeance_reelle] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TTache The current object (for fluent API support)
     */
    public function setDateEcheanceReelle($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_echeance_reelle !== null || $dt !== null) {
            $currentDateAsString = ($this->date_echeance_reelle !== null && $tmpDt = new DateTime($this->date_echeance_reelle)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_echeance_reelle = $newDateAsString;
                $this->modifiedColumns[] = TTachePeer::DATE_ECHEANCE_REELLE;
            }
        } // if either are not null


        return $this;
    } // setDateEcheanceReelle()

    /**
     * Set the value of [responsable] column.
     * 
     * @param string $v new value
     * @return TTache The current object (for fluent API support)
     */
    public function setResponsable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->responsable !== $v) {
            $this->responsable = $v;
            $this->modifiedColumns[] = TTachePeer::RESPONSABLE;
        }


        return $this;
    } // setResponsable()

    /**
     * Set the value of [taux_realisation] column.
     * 
     * @param double $v new value
     * @return TTache The current object (for fluent API support)
     */
    public function setTauxRealisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->taux_realisation !== $v) {
            $this->taux_realisation = $v;
            $this->modifiedColumns[] = TTachePeer::TAUX_REALISATION;
        }


        return $this;
    } // setTauxRealisation()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return TTache The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = TTachePeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return TTache The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = TTachePeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [agent] column.
     * 
     * @param string $v new value
     * @return TTache The current object (for fluent API support)
     */
    public function setAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agent !== $v) {
            $this->agent = $v;
            $this->modifiedColumns[] = TTachePeer::AGENT;
        }


        return $this;
    } // setAgent()

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
            if ($this->taux_realisation !== 0.0) {
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

            $this->id_tache = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->intitule = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->date_echeance_previsionnelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->date_echeance_reelle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->responsable = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->taux_realisation = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->id_demande = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_agent = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->agent = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = TTachePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TTache object", $e);
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
            $con = Propel::getConnection(TTachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TTachePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TTachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TTacheQuery::create()
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
            $con = Propel::getConnection(TTachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TTachePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TTachePeer::ID_TACHE;
        if (null !== $this->id_tache) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TTachePeer::ID_TACHE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TTachePeer::ID_TACHE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_TACHE`';
        }
        if ($this->isColumnModified(TTachePeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`INTITULE`';
        }
        if ($this->isColumnModified(TTachePeer::DATE_ECHEANCE_PREVISIONNELLE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ECHEANCE_PREVISIONNELLE`';
        }
        if ($this->isColumnModified(TTachePeer::DATE_ECHEANCE_REELLE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ECHEANCE_REELLE`';
        }
        if ($this->isColumnModified(TTachePeer::RESPONSABLE)) {
            $modifiedColumns[':p' . $index++]  = '`RESPONSABLE`';
        }
        if ($this->isColumnModified(TTachePeer::TAUX_REALISATION)) {
            $modifiedColumns[':p' . $index++]  = '`TAUX_REALISATION`';
        }
        if ($this->isColumnModified(TTachePeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(TTachePeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT`';
        }
        if ($this->isColumnModified(TTachePeer::AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`AGENT`';
        }

        $sql = sprintf(
            'INSERT INTO `t_tache` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_TACHE`':						
                        $stmt->bindValue($identifier, $this->id_tache, PDO::PARAM_INT);
                        break;
                    case '`INTITULE`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
                        break;
                    case '`DATE_ECHEANCE_PREVISIONNELLE`':						
                        $stmt->bindValue($identifier, $this->date_echeance_previsionnelle, PDO::PARAM_STR);
                        break;
                    case '`DATE_ECHEANCE_REELLE`':						
                        $stmt->bindValue($identifier, $this->date_echeance_reelle, PDO::PARAM_STR);
                        break;
                    case '`RESPONSABLE`':						
                        $stmt->bindValue($identifier, $this->responsable, PDO::PARAM_STR);
                        break;
                    case '`TAUX_REALISATION`':						
                        $stmt->bindValue($identifier, $this->taux_realisation, PDO::PARAM_STR);
                        break;
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`AGENT`':						
                        $stmt->bindValue($identifier, $this->agent, PDO::PARAM_STR);
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
        $this->setIdTache($pk);

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


            if (($retval = TTachePeer::doValidate($this, $columns)) !== true) {
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
        $pos = TTachePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTache();
                break;
            case 1:
                return $this->getIntitule();
                break;
            case 2:
                return $this->getDateEcheancePrevisionnelle();
                break;
            case 3:
                return $this->getDateEcheanceReelle();
                break;
            case 4:
                return $this->getResponsable();
                break;
            case 5:
                return $this->getTauxRealisation();
                break;
            case 6:
                return $this->getIdDemande();
                break;
            case 7:
                return $this->getIdAgent();
                break;
            case 8:
                return $this->getAgent();
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
        if (isset($alreadyDumpedObjects['TTache'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TTache'][$this->getPrimaryKey()] = true;
        $keys = TTachePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTache(),
            $keys[1] => $this->getIntitule(),
            $keys[2] => $this->getDateEcheancePrevisionnelle(),
            $keys[3] => $this->getDateEcheanceReelle(),
            $keys[4] => $this->getResponsable(),
            $keys[5] => $this->getTauxRealisation(),
            $keys[6] => $this->getIdDemande(),
            $keys[7] => $this->getIdAgent(),
            $keys[8] => $this->getAgent(),
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
        $pos = TTachePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTache($value);
                break;
            case 1:
                $this->setIntitule($value);
                break;
            case 2:
                $this->setDateEcheancePrevisionnelle($value);
                break;
            case 3:
                $this->setDateEcheanceReelle($value);
                break;
            case 4:
                $this->setResponsable($value);
                break;
            case 5:
                $this->setTauxRealisation($value);
                break;
            case 6:
                $this->setIdDemande($value);
                break;
            case 7:
                $this->setIdAgent($value);
                break;
            case 8:
                $this->setAgent($value);
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
        $keys = TTachePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTache($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIntitule($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDateEcheancePrevisionnelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDateEcheanceReelle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setResponsable($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTauxRealisation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdDemande($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdAgent($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAgent($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TTachePeer::DATABASE_NAME);

        if ($this->isColumnModified(TTachePeer::ID_TACHE)) $criteria->add(TTachePeer::ID_TACHE, $this->id_tache);
        if ($this->isColumnModified(TTachePeer::INTITULE)) $criteria->add(TTachePeer::INTITULE, $this->intitule);
        if ($this->isColumnModified(TTachePeer::DATE_ECHEANCE_PREVISIONNELLE)) $criteria->add(TTachePeer::DATE_ECHEANCE_PREVISIONNELLE, $this->date_echeance_previsionnelle);
        if ($this->isColumnModified(TTachePeer::DATE_ECHEANCE_REELLE)) $criteria->add(TTachePeer::DATE_ECHEANCE_REELLE, $this->date_echeance_reelle);
        if ($this->isColumnModified(TTachePeer::RESPONSABLE)) $criteria->add(TTachePeer::RESPONSABLE, $this->responsable);
        if ($this->isColumnModified(TTachePeer::TAUX_REALISATION)) $criteria->add(TTachePeer::TAUX_REALISATION, $this->taux_realisation);
        if ($this->isColumnModified(TTachePeer::ID_DEMANDE)) $criteria->add(TTachePeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(TTachePeer::ID_AGENT)) $criteria->add(TTachePeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(TTachePeer::AGENT)) $criteria->add(TTachePeer::AGENT, $this->agent);

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
        $criteria = new Criteria(TTachePeer::DATABASE_NAME);
        $criteria->add(TTachePeer::ID_TACHE, $this->id_tache);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdTache();
    }

    /**
     * Generic method to set the primary key (id_tache column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdTache($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdTache();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of TTache (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntitule($this->getIntitule());
        $copyObj->setDateEcheancePrevisionnelle($this->getDateEcheancePrevisionnelle());
        $copyObj->setDateEcheanceReelle($this->getDateEcheanceReelle());
        $copyObj->setResponsable($this->getResponsable());
        $copyObj->setTauxRealisation($this->getTauxRealisation());
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setAgent($this->getAgent());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTache(NULL); // this is a auto-increment column, so set to default value
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
     * @return TTache Clone of current object.
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
     * @return TTachePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TTachePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_tache = null;
        $this->intitule = null;
        $this->date_echeance_previsionnelle = null;
        $this->date_echeance_reelle = null;
        $this->responsable = null;
        $this->taux_realisation = null;
        $this->id_demande = null;
        $this->id_agent = null;
        $this->agent = null;
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
        return (string) $this->exportTo(TTachePeer::DEFAULT_STRING_FORMAT);
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
