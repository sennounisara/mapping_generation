<?php


/**
 * Base class that represents a row from the 't_historique_tache' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTHistoriqueTache extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'THistoriqueTachePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        THistoriqueTachePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_historique_tache field.
     * @var        int
     */
    protected $id_historique_tache;

    /**
     * The value for the id_tache field.
     * @var        int
     */
    protected $id_tache;

    /**
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

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
     * @var        double
     */
    protected $taux_realisation;

    /**
     * The value for the id_action field.
     * @var        int
     */
    protected $id_action;

    /**
     * The value for the id_statut field.
     * @var        int
     */
    protected $id_statut;

    /**
     * The value for the motif field.
     * @var        string
     */
    protected $motif;

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
     * The value for the date_modification field.
     * @var        string
     */
    protected $date_modification;

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
     * Get the [id_historique_tache] column value.
     * 
     * @return int
     */
    public function getIdHistoriqueTache()
    {

        return $this->id_historique_tache;
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
     * Get the [id_demande] column value.
     * 
     * @return int
     */
    public function getIdDemande()
    {

        return $this->id_demande;
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
     * Get the [id_action] column value.
     * 
     * @return int
     */
    public function getIdAction()
    {

        return $this->id_action;
    }

    /**
     * Get the [id_statut] column value.
     * 
     * @return int
     */
    public function getIdStatut()
    {

        return $this->id_statut;
    }

    /**
     * Get the [motif] column value.
     * 
     * @return string
     */
    public function getMotif()
    {

        return $this->motif;
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
     * Get the [optionally formatted] temporal [date_modification] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateModification($format = 'Y-m-d H:i:s')
    {
        if ($this->date_modification === null) {
            return null;
        }

        if ($this->date_modification === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_modification);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modification, true), $x);
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
     * Set the value of [id_historique_tache] column.
     * 
     * @param int $v new value
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setIdHistoriqueTache($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_historique_tache !== $v) {
            $this->id_historique_tache = $v;
            $this->modifiedColumns[] = THistoriqueTachePeer::ID_HISTORIQUE_TACHE;
        }


        return $this;
    } // setIdHistoriqueTache()

    /**
     * Set the value of [id_tache] column.
     * 
     * @param int $v new value
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setIdTache($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tache !== $v) {
            $this->id_tache = $v;
            $this->modifiedColumns[] = THistoriqueTachePeer::ID_TACHE;
        }


        return $this;
    } // setIdTache()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = THistoriqueTachePeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Sets the value of [date_echeance_previsionnelle] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setDateEcheancePrevisionnelle($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_echeance_previsionnelle !== null || $dt !== null) {
            $currentDateAsString = ($this->date_echeance_previsionnelle !== null && $tmpDt = new DateTime($this->date_echeance_previsionnelle)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_echeance_previsionnelle = $newDateAsString;
                $this->modifiedColumns[] = THistoriqueTachePeer::DATE_ECHEANCE_PREVISIONNELLE;
            }
        } // if either are not null


        return $this;
    } // setDateEcheancePrevisionnelle()

    /**
     * Sets the value of [date_echeance_reelle] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setDateEcheanceReelle($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_echeance_reelle !== null || $dt !== null) {
            $currentDateAsString = ($this->date_echeance_reelle !== null && $tmpDt = new DateTime($this->date_echeance_reelle)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_echeance_reelle = $newDateAsString;
                $this->modifiedColumns[] = THistoriqueTachePeer::DATE_ECHEANCE_REELLE;
            }
        } // if either are not null


        return $this;
    } // setDateEcheanceReelle()

    /**
     * Set the value of [responsable] column.
     * 
     * @param string $v new value
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setResponsable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->responsable !== $v) {
            $this->responsable = $v;
            $this->modifiedColumns[] = THistoriqueTachePeer::RESPONSABLE;
        }


        return $this;
    } // setResponsable()

    /**
     * Set the value of [taux_realisation] column.
     * 
     * @param double $v new value
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setTauxRealisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->taux_realisation !== $v) {
            $this->taux_realisation = $v;
            $this->modifiedColumns[] = THistoriqueTachePeer::TAUX_REALISATION;
        }


        return $this;
    } // setTauxRealisation()

    /**
     * Set the value of [id_action] column.
     * 
     * @param int $v new value
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setIdAction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_action !== $v) {
            $this->id_action = $v;
            $this->modifiedColumns[] = THistoriqueTachePeer::ID_ACTION;
        }


        return $this;
    } // setIdAction()

    /**
     * Set the value of [id_statut] column.
     * 
     * @param int $v new value
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setIdStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_statut !== $v) {
            $this->id_statut = $v;
            $this->modifiedColumns[] = THistoriqueTachePeer::ID_STATUT;
        }


        return $this;
    } // setIdStatut()

    /**
     * Set the value of [motif] column.
     * 
     * @param string $v new value
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setMotif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif !== $v) {
            $this->motif = $v;
            $this->modifiedColumns[] = THistoriqueTachePeer::MOTIF;
        }


        return $this;
    } // setMotif()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = THistoriqueTachePeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [agent] column.
     * 
     * @param string $v new value
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agent !== $v) {
            $this->agent = $v;
            $this->modifiedColumns[] = THistoriqueTachePeer::AGENT;
        }


        return $this;
    } // setAgent()

    /**
     * Sets the value of [date_modification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return THistoriqueTache The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modification !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modification !== null && $tmpDt = new DateTime($this->date_modification)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modification = $newDateAsString;
                $this->modifiedColumns[] = THistoriqueTachePeer::DATE_MODIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDateModification()

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

            $this->id_historique_tache = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_tache = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_demande = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->date_echeance_previsionnelle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->date_echeance_reelle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->responsable = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->taux_realisation = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->id_action = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->id_statut = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->motif = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->id_agent = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->agent = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_modification = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = THistoriqueTachePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating THistoriqueTache object", $e);
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
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = THistoriqueTachePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = THistoriqueTacheQuery::create()
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
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                THistoriqueTachePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = THistoriqueTachePeer::ID_HISTORIQUE_TACHE;
        if (null !== $this->id_historique_tache) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . THistoriqueTachePeer::ID_HISTORIQUE_TACHE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(THistoriqueTachePeer::ID_HISTORIQUE_TACHE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_HISTORIQUE_TACHE`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::ID_TACHE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_TACHE`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::DATE_ECHEANCE_PREVISIONNELLE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ECHEANCE_PREVISIONNELLE`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::DATE_ECHEANCE_REELLE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ECHEANCE_REELLE`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::RESPONSABLE)) {
            $modifiedColumns[':p' . $index++]  = '`RESPONSABLE`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::TAUX_REALISATION)) {
            $modifiedColumns[':p' . $index++]  = '`TAUX_REALISATION`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::ID_ACTION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ACTION`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::ID_STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_STATUT`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::MOTIF)) {
            $modifiedColumns[':p' . $index++]  = '`MOTIF`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`AGENT`';
        }
        if ($this->isColumnModified(THistoriqueTachePeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_MODIFICATION`';
        }

        $sql = sprintf(
            'INSERT INTO `t_historique_tache` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_HISTORIQUE_TACHE`':						
                        $stmt->bindValue($identifier, $this->id_historique_tache, PDO::PARAM_INT);
                        break;
                    case '`ID_TACHE`':						
                        $stmt->bindValue($identifier, $this->id_tache, PDO::PARAM_INT);
                        break;
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
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
                    case '`ID_ACTION`':						
                        $stmt->bindValue($identifier, $this->id_action, PDO::PARAM_INT);
                        break;
                    case '`ID_STATUT`':						
                        $stmt->bindValue($identifier, $this->id_statut, PDO::PARAM_INT);
                        break;
                    case '`MOTIF`':						
                        $stmt->bindValue($identifier, $this->motif, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`AGENT`':						
                        $stmt->bindValue($identifier, $this->agent, PDO::PARAM_STR);
                        break;
                    case '`DATE_MODIFICATION`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
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
        $this->setIdHistoriqueTache($pk);

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


            if (($retval = THistoriqueTachePeer::doValidate($this, $columns)) !== true) {
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
        $pos = THistoriqueTachePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdHistoriqueTache();
                break;
            case 1:
                return $this->getIdTache();
                break;
            case 2:
                return $this->getIdDemande();
                break;
            case 3:
                return $this->getDateEcheancePrevisionnelle();
                break;
            case 4:
                return $this->getDateEcheanceReelle();
                break;
            case 5:
                return $this->getResponsable();
                break;
            case 6:
                return $this->getTauxRealisation();
                break;
            case 7:
                return $this->getIdAction();
                break;
            case 8:
                return $this->getIdStatut();
                break;
            case 9:
                return $this->getMotif();
                break;
            case 10:
                return $this->getIdAgent();
                break;
            case 11:
                return $this->getAgent();
                break;
            case 12:
                return $this->getDateModification();
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
        if (isset($alreadyDumpedObjects['THistoriqueTache'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['THistoriqueTache'][$this->getPrimaryKey()] = true;
        $keys = THistoriqueTachePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdHistoriqueTache(),
            $keys[1] => $this->getIdTache(),
            $keys[2] => $this->getIdDemande(),
            $keys[3] => $this->getDateEcheancePrevisionnelle(),
            $keys[4] => $this->getDateEcheanceReelle(),
            $keys[5] => $this->getResponsable(),
            $keys[6] => $this->getTauxRealisation(),
            $keys[7] => $this->getIdAction(),
            $keys[8] => $this->getIdStatut(),
            $keys[9] => $this->getMotif(),
            $keys[10] => $this->getIdAgent(),
            $keys[11] => $this->getAgent(),
            $keys[12] => $this->getDateModification(),
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
        $pos = THistoriqueTachePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdHistoriqueTache($value);
                break;
            case 1:
                $this->setIdTache($value);
                break;
            case 2:
                $this->setIdDemande($value);
                break;
            case 3:
                $this->setDateEcheancePrevisionnelle($value);
                break;
            case 4:
                $this->setDateEcheanceReelle($value);
                break;
            case 5:
                $this->setResponsable($value);
                break;
            case 6:
                $this->setTauxRealisation($value);
                break;
            case 7:
                $this->setIdAction($value);
                break;
            case 8:
                $this->setIdStatut($value);
                break;
            case 9:
                $this->setMotif($value);
                break;
            case 10:
                $this->setIdAgent($value);
                break;
            case 11:
                $this->setAgent($value);
                break;
            case 12:
                $this->setDateModification($value);
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
        $keys = THistoriqueTachePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdHistoriqueTache($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdTache($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdDemande($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDateEcheancePrevisionnelle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDateEcheanceReelle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setResponsable($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTauxRealisation($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdAction($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdStatut($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMotif($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIdAgent($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAgent($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateModification($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(THistoriqueTachePeer::DATABASE_NAME);

        if ($this->isColumnModified(THistoriqueTachePeer::ID_HISTORIQUE_TACHE)) $criteria->add(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $this->id_historique_tache);
        if ($this->isColumnModified(THistoriqueTachePeer::ID_TACHE)) $criteria->add(THistoriqueTachePeer::ID_TACHE, $this->id_tache);
        if ($this->isColumnModified(THistoriqueTachePeer::ID_DEMANDE)) $criteria->add(THistoriqueTachePeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(THistoriqueTachePeer::DATE_ECHEANCE_PREVISIONNELLE)) $criteria->add(THistoriqueTachePeer::DATE_ECHEANCE_PREVISIONNELLE, $this->date_echeance_previsionnelle);
        if ($this->isColumnModified(THistoriqueTachePeer::DATE_ECHEANCE_REELLE)) $criteria->add(THistoriqueTachePeer::DATE_ECHEANCE_REELLE, $this->date_echeance_reelle);
        if ($this->isColumnModified(THistoriqueTachePeer::RESPONSABLE)) $criteria->add(THistoriqueTachePeer::RESPONSABLE, $this->responsable);
        if ($this->isColumnModified(THistoriqueTachePeer::TAUX_REALISATION)) $criteria->add(THistoriqueTachePeer::TAUX_REALISATION, $this->taux_realisation);
        if ($this->isColumnModified(THistoriqueTachePeer::ID_ACTION)) $criteria->add(THistoriqueTachePeer::ID_ACTION, $this->id_action);
        if ($this->isColumnModified(THistoriqueTachePeer::ID_STATUT)) $criteria->add(THistoriqueTachePeer::ID_STATUT, $this->id_statut);
        if ($this->isColumnModified(THistoriqueTachePeer::MOTIF)) $criteria->add(THistoriqueTachePeer::MOTIF, $this->motif);
        if ($this->isColumnModified(THistoriqueTachePeer::ID_AGENT)) $criteria->add(THistoriqueTachePeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(THistoriqueTachePeer::AGENT)) $criteria->add(THistoriqueTachePeer::AGENT, $this->agent);
        if ($this->isColumnModified(THistoriqueTachePeer::DATE_MODIFICATION)) $criteria->add(THistoriqueTachePeer::DATE_MODIFICATION, $this->date_modification);

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
        $criteria = new Criteria(THistoriqueTachePeer::DATABASE_NAME);
        $criteria->add(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $this->id_historique_tache);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdHistoriqueTache();
    }

    /**
     * Generic method to set the primary key (id_historique_tache column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdHistoriqueTache($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdHistoriqueTache();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of THistoriqueTache (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTache($this->getIdTache());
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setDateEcheancePrevisionnelle($this->getDateEcheancePrevisionnelle());
        $copyObj->setDateEcheanceReelle($this->getDateEcheanceReelle());
        $copyObj->setResponsable($this->getResponsable());
        $copyObj->setTauxRealisation($this->getTauxRealisation());
        $copyObj->setIdAction($this->getIdAction());
        $copyObj->setIdStatut($this->getIdStatut());
        $copyObj->setMotif($this->getMotif());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setAgent($this->getAgent());
        $copyObj->setDateModification($this->getDateModification());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdHistoriqueTache(NULL); // this is a auto-increment column, so set to default value
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
     * @return THistoriqueTache Clone of current object.
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
     * @return THistoriqueTachePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new THistoriqueTachePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_historique_tache = null;
        $this->id_tache = null;
        $this->id_demande = null;
        $this->date_echeance_previsionnelle = null;
        $this->date_echeance_reelle = null;
        $this->responsable = null;
        $this->taux_realisation = null;
        $this->id_action = null;
        $this->id_statut = null;
        $this->motif = null;
        $this->id_agent = null;
        $this->agent = null;
        $this->date_modification = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
        return (string) $this->exportTo(THistoriqueTachePeer::DEFAULT_STRING_FORMAT);
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
