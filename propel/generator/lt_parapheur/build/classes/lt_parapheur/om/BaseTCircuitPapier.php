<?php


/**
 * Base class that represents a row from the 't_circuit_papier' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTCircuitPapier extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TCircuitPapierPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TCircuitPapierPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_circuit field.
     * @var        int
     */
    protected $id_circuit;

    /**
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

    /**
     * The value for the id_agent_emetteur field.
     * @var        int
     */
    protected $id_agent_emetteur;

    /**
     * The value for the id_agent_destinataire field.
     * @var        int
     */
    protected $id_agent_destinataire;

    /**
     * The value for the id_entite_destinataire field.
     * @var        int
     */
    protected $id_entite_destinataire;

    /**
     * The value for the date_envoi field.
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the date_reception field.
     * @var        string
     */
    protected $date_reception;

    /**
     * The value for the recu field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $recu;

    /**
     * The value for the emplacement field.
     * @var        string
     */
    protected $emplacement;

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
        $this->recu = '0';
    }

    /**
     * Initializes internal state of BaseTCircuitPapier object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_circuit] column value.
     * 
     * @return int
     */
    public function getIdCircuit()
    {

        return $this->id_circuit;
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
     * Get the [id_agent_emetteur] column value.
     * 
     * @return int
     */
    public function getIdAgentEmetteur()
    {

        return $this->id_agent_emetteur;
    }

    /**
     * Get the [id_agent_destinataire] column value.
     * 
     * @return int
     */
    public function getIdAgentDestinataire()
    {

        return $this->id_agent_destinataire;
    }

    /**
     * Get the [id_entite_destinataire] column value.
     * 
     * @return int
     */
    public function getIdEntiteDestinataire()
    {

        return $this->id_entite_destinataire;
    }

    /**
     * Get the [optionally formatted] temporal [date_envoi] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEnvoi($format = null)
    {
        if ($this->date_envoi === null) {
            return null;
        }

        if ($this->date_envoi === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_envoi);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_envoi, true), $x);
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
     * Get the [optionally formatted] temporal [date_reception] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateReception($format = null)
    {
        if ($this->date_reception === null) {
            return null;
        }

        if ($this->date_reception === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_reception);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_reception, true), $x);
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
     * Get the [recu] column value.
     * 
     * @return string
     */
    public function getRecu()
    {

        return $this->recu;
    }

    /**
     * Get the [emplacement] column value.
     * 
     * @return string
     */
    public function getEmplacement()
    {

        return $this->emplacement;
    }

    /**
     * Set the value of [id_circuit] column.
     * 
     * @param int $v new value
     * @return TCircuitPapier The current object (for fluent API support)
     */
    public function setIdCircuit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_circuit !== $v) {
            $this->id_circuit = $v;
            $this->modifiedColumns[] = TCircuitPapierPeer::ID_CIRCUIT;
        }


        return $this;
    } // setIdCircuit()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return TCircuitPapier The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = TCircuitPapierPeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Set the value of [id_agent_emetteur] column.
     * 
     * @param int $v new value
     * @return TCircuitPapier The current object (for fluent API support)
     */
    public function setIdAgentEmetteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_emetteur !== $v) {
            $this->id_agent_emetteur = $v;
            $this->modifiedColumns[] = TCircuitPapierPeer::ID_AGENT_EMETTEUR;
        }


        return $this;
    } // setIdAgentEmetteur()

    /**
     * Set the value of [id_agent_destinataire] column.
     * 
     * @param int $v new value
     * @return TCircuitPapier The current object (for fluent API support)
     */
    public function setIdAgentDestinataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_destinataire !== $v) {
            $this->id_agent_destinataire = $v;
            $this->modifiedColumns[] = TCircuitPapierPeer::ID_AGENT_DESTINATAIRE;
        }


        return $this;
    } // setIdAgentDestinataire()

    /**
     * Set the value of [id_entite_destinataire] column.
     * 
     * @param int $v new value
     * @return TCircuitPapier The current object (for fluent API support)
     */
    public function setIdEntiteDestinataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_destinataire !== $v) {
            $this->id_entite_destinataire = $v;
            $this->modifiedColumns[] = TCircuitPapierPeer::ID_ENTITE_DESTINATAIRE;
        }


        return $this;
    } // setIdEntiteDestinataire()

    /**
     * Sets the value of [date_envoi] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TCircuitPapier The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_envoi !== null || $dt !== null) {
            $currentDateAsString = ($this->date_envoi !== null && $tmpDt = new DateTime($this->date_envoi)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_envoi = $newDateAsString;
                $this->modifiedColumns[] = TCircuitPapierPeer::DATE_ENVOI;
            }
        } // if either are not null


        return $this;
    } // setDateEnvoi()

    /**
     * Sets the value of [date_reception] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TCircuitPapier The current object (for fluent API support)
     */
    public function setDateReception($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_reception !== null || $dt !== null) {
            $currentDateAsString = ($this->date_reception !== null && $tmpDt = new DateTime($this->date_reception)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_reception = $newDateAsString;
                $this->modifiedColumns[] = TCircuitPapierPeer::DATE_RECEPTION;
            }
        } // if either are not null


        return $this;
    } // setDateReception()

    /**
     * Set the value of [recu] column.
     * 
     * @param string $v new value
     * @return TCircuitPapier The current object (for fluent API support)
     */
    public function setRecu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recu !== $v) {
            $this->recu = $v;
            $this->modifiedColumns[] = TCircuitPapierPeer::RECU;
        }


        return $this;
    } // setRecu()

    /**
     * Set the value of [emplacement] column.
     * 
     * @param string $v new value
     * @return TCircuitPapier The current object (for fluent API support)
     */
    public function setEmplacement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->emplacement !== $v) {
            $this->emplacement = $v;
            $this->modifiedColumns[] = TCircuitPapierPeer::EMPLACEMENT;
        }


        return $this;
    } // setEmplacement()

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
            if ($this->recu !== '0') {
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

            $this->id_circuit = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_demande = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_agent_emetteur = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_agent_destinataire = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_entite_destinataire = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->date_envoi = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->date_reception = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->recu = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->emplacement = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = TCircuitPapierPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TCircuitPapier object", $e);
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
            $con = Propel::getConnection(TCircuitPapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TCircuitPapierPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TCircuitPapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TCircuitPapierQuery::create()
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
            $con = Propel::getConnection(TCircuitPapierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TCircuitPapierPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TCircuitPapierPeer::ID_CIRCUIT;
        if (null !== $this->id_circuit) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TCircuitPapierPeer::ID_CIRCUIT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TCircuitPapierPeer::ID_CIRCUIT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_CIRCUIT`';
        }
        if ($this->isColumnModified(TCircuitPapierPeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(TCircuitPapierPeer::ID_AGENT_EMETTEUR)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_EMETTEUR`';
        }
        if ($this->isColumnModified(TCircuitPapierPeer::ID_AGENT_DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_DESTINATAIRE`';
        }
        if ($this->isColumnModified(TCircuitPapierPeer::ID_ENTITE_DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_DESTINATAIRE`';
        }
        if ($this->isColumnModified(TCircuitPapierPeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ENVOI`';
        }
        if ($this->isColumnModified(TCircuitPapierPeer::DATE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_RECEPTION`';
        }
        if ($this->isColumnModified(TCircuitPapierPeer::RECU)) {
            $modifiedColumns[':p' . $index++]  = '`RECU`';
        }
        if ($this->isColumnModified(TCircuitPapierPeer::EMPLACEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`EMPLACEMENT`';
        }

        $sql = sprintf(
            'INSERT INTO `t_circuit_papier` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_CIRCUIT`':						
                        $stmt->bindValue($identifier, $this->id_circuit, PDO::PARAM_INT);
                        break;
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_EMETTEUR`':						
                        $stmt->bindValue($identifier, $this->id_agent_emetteur, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_DESTINATAIRE`':						
                        $stmt->bindValue($identifier, $this->id_agent_destinataire, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE_DESTINATAIRE`':						
                        $stmt->bindValue($identifier, $this->id_entite_destinataire, PDO::PARAM_INT);
                        break;
                    case '`DATE_ENVOI`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`DATE_RECEPTION`':						
                        $stmt->bindValue($identifier, $this->date_reception, PDO::PARAM_STR);
                        break;
                    case '`RECU`':						
                        $stmt->bindValue($identifier, $this->recu, PDO::PARAM_STR);
                        break;
                    case '`EMPLACEMENT`':						
                        $stmt->bindValue($identifier, $this->emplacement, PDO::PARAM_STR);
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
        $this->setIdCircuit($pk);

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


            if (($retval = TCircuitPapierPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TCircuitPapierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdCircuit();
                break;
            case 1:
                return $this->getIdDemande();
                break;
            case 2:
                return $this->getIdAgentEmetteur();
                break;
            case 3:
                return $this->getIdAgentDestinataire();
                break;
            case 4:
                return $this->getIdEntiteDestinataire();
                break;
            case 5:
                return $this->getDateEnvoi();
                break;
            case 6:
                return $this->getDateReception();
                break;
            case 7:
                return $this->getRecu();
                break;
            case 8:
                return $this->getEmplacement();
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
        if (isset($alreadyDumpedObjects['TCircuitPapier'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TCircuitPapier'][$this->getPrimaryKey()] = true;
        $keys = TCircuitPapierPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCircuit(),
            $keys[1] => $this->getIdDemande(),
            $keys[2] => $this->getIdAgentEmetteur(),
            $keys[3] => $this->getIdAgentDestinataire(),
            $keys[4] => $this->getIdEntiteDestinataire(),
            $keys[5] => $this->getDateEnvoi(),
            $keys[6] => $this->getDateReception(),
            $keys[7] => $this->getRecu(),
            $keys[8] => $this->getEmplacement(),
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
        $pos = TCircuitPapierPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdCircuit($value);
                break;
            case 1:
                $this->setIdDemande($value);
                break;
            case 2:
                $this->setIdAgentEmetteur($value);
                break;
            case 3:
                $this->setIdAgentDestinataire($value);
                break;
            case 4:
                $this->setIdEntiteDestinataire($value);
                break;
            case 5:
                $this->setDateEnvoi($value);
                break;
            case 6:
                $this->setDateReception($value);
                break;
            case 7:
                $this->setRecu($value);
                break;
            case 8:
                $this->setEmplacement($value);
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
        $keys = TCircuitPapierPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdCircuit($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdDemande($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdAgentEmetteur($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdAgentDestinataire($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdEntiteDestinataire($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateEnvoi($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateReception($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRecu($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEmplacement($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TCircuitPapierPeer::DATABASE_NAME);

        if ($this->isColumnModified(TCircuitPapierPeer::ID_CIRCUIT)) $criteria->add(TCircuitPapierPeer::ID_CIRCUIT, $this->id_circuit);
        if ($this->isColumnModified(TCircuitPapierPeer::ID_DEMANDE)) $criteria->add(TCircuitPapierPeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(TCircuitPapierPeer::ID_AGENT_EMETTEUR)) $criteria->add(TCircuitPapierPeer::ID_AGENT_EMETTEUR, $this->id_agent_emetteur);
        if ($this->isColumnModified(TCircuitPapierPeer::ID_AGENT_DESTINATAIRE)) $criteria->add(TCircuitPapierPeer::ID_AGENT_DESTINATAIRE, $this->id_agent_destinataire);
        if ($this->isColumnModified(TCircuitPapierPeer::ID_ENTITE_DESTINATAIRE)) $criteria->add(TCircuitPapierPeer::ID_ENTITE_DESTINATAIRE, $this->id_entite_destinataire);
        if ($this->isColumnModified(TCircuitPapierPeer::DATE_ENVOI)) $criteria->add(TCircuitPapierPeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(TCircuitPapierPeer::DATE_RECEPTION)) $criteria->add(TCircuitPapierPeer::DATE_RECEPTION, $this->date_reception);
        if ($this->isColumnModified(TCircuitPapierPeer::RECU)) $criteria->add(TCircuitPapierPeer::RECU, $this->recu);
        if ($this->isColumnModified(TCircuitPapierPeer::EMPLACEMENT)) $criteria->add(TCircuitPapierPeer::EMPLACEMENT, $this->emplacement);

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
        $criteria = new Criteria(TCircuitPapierPeer::DATABASE_NAME);
        $criteria->add(TCircuitPapierPeer::ID_CIRCUIT, $this->id_circuit);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdCircuit();
    }

    /**
     * Generic method to set the primary key (id_circuit column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCircuit($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdCircuit();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of TCircuitPapier (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setIdAgentEmetteur($this->getIdAgentEmetteur());
        $copyObj->setIdAgentDestinataire($this->getIdAgentDestinataire());
        $copyObj->setIdEntiteDestinataire($this->getIdEntiteDestinataire());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setDateReception($this->getDateReception());
        $copyObj->setRecu($this->getRecu());
        $copyObj->setEmplacement($this->getEmplacement());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCircuit(NULL); // this is a auto-increment column, so set to default value
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
     * @return TCircuitPapier Clone of current object.
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
     * @return TCircuitPapierPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TCircuitPapierPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_circuit = null;
        $this->id_demande = null;
        $this->id_agent_emetteur = null;
        $this->id_agent_destinataire = null;
        $this->id_entite_destinataire = null;
        $this->date_envoi = null;
        $this->date_reception = null;
        $this->recu = null;
        $this->emplacement = null;
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
        return (string) $this->exportTo(TCircuitPapierPeer::DEFAULT_STRING_FORMAT);
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
