<?php


/**
 * Base class that represents a row from the 'DA_Consultation' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDAConsultation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonDAConsultationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonDAConsultationPeer
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
     * The value for the reference_utilisateur field.
     * @var        string
     */
    protected $reference_utilisateur;

    /**
     * The value for the societe field.
     * @var        string
     */
    protected $societe;

    /**
     * The value for the objet field.
     * @var        string
     */
    protected $objet;

    /**
     * The value for the type_procedure field.
     * @var        string
     */
    protected $type_procedure;

    /**
     * The value for the type_marche field.
     * @var        string
     */
    protected $type_marche;

    /**
     * The value for the satut_ao field.
     * @var        string
     */
    protected $satut_ao;

    /**
     * The value for the datefin field.
     * @var        string
     */
    protected $datefin;

    /**
     * The value for the datemiseenligne field.
     * @var        string
     */
    protected $datemiseenligne;

    /**
     * The value for the caution_provisoire field.
     * @var        string
     */
    protected $caution_provisoire;

    /**
     * The value for the principale field.
     * @var        string
     */
    protected $principale;

    /**
     * The value for the lot field.
     * @var        int
     */
    protected $lot;

    /**
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the create_at field.
     * @var        string
     */
    protected $create_at;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultation;

    /**
     * @var        PropelObjectCollection|CommonLigneDA[] Collection to store aggregation of CommonLigneDA objects.
     */
    protected $collCommonLigneDAs;
    protected $collCommonLigneDAsPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonLigneDAsScheduledForDeletion = null;

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
     * Get the [reference_utilisateur] column value.
     * 
     * @return string
     */
    public function getReferenceUtilisateur()
    {

        return $this->reference_utilisateur;
    }

    /**
     * Get the [societe] column value.
     * 
     * @return string
     */
    public function getSociete()
    {

        return $this->societe;
    }

    /**
     * Get the [objet] column value.
     * 
     * @return string
     */
    public function getObjet()
    {

        return $this->objet;
    }

    /**
     * Get the [type_procedure] column value.
     * 
     * @return string
     */
    public function getTypeProcedure()
    {

        return $this->type_procedure;
    }

    /**
     * Get the [type_marche] column value.
     * 
     * @return string
     */
    public function getTypeMarche()
    {

        return $this->type_marche;
    }

    /**
     * Get the [satut_ao] column value.
     * 
     * @return string
     */
    public function getSatutAo()
    {

        return $this->satut_ao;
    }

    /**
     * Get the [optionally formatted] temporal [datefin] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatefin($format = 'Y-m-d H:i:s')
    {
        if ($this->datefin === null) {
            return null;
        }

        if ($this->datefin === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datefin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datefin, true), $x);
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
     * Get the [optionally formatted] temporal [datemiseenligne] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatemiseenligne($format = 'Y-m-d H:i:s')
    {
        if ($this->datemiseenligne === null) {
            return null;
        }

        if ($this->datemiseenligne === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datemiseenligne);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datemiseenligne, true), $x);
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
     * Get the [caution_provisoire] column value.
     * 
     * @return string
     */
    public function getCautionProvisoire()
    {

        return $this->caution_provisoire;
    }

    /**
     * Get the [principale] column value.
     * 
     * @return string
     */
    public function getPrincipale()
    {

        return $this->principale;
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
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [optionally formatted] temporal [create_at] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreateAt($format = null)
    {
        if ($this->create_at === null) {
            return null;
        }

        if ($this->create_at === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->create_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->create_at, true), $x);
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [reference_utilisateur] column.
     * 
     * @param string $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setReferenceUtilisateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reference_utilisateur !== $v) {
            $this->reference_utilisateur = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::REFERENCE_UTILISATEUR;
        }


        return $this;
    } // setReferenceUtilisateur()

    /**
     * Set the value of [societe] column.
     * 
     * @param string $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setSociete($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->societe !== $v) {
            $this->societe = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::SOCIETE;
        }


        return $this;
    } // setSociete()

    /**
     * Set the value of [objet] column.
     * 
     * @param string $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet !== $v) {
            $this->objet = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::OBJET;
        }


        return $this;
    } // setObjet()

    /**
     * Set the value of [type_procedure] column.
     * 
     * @param string $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_procedure !== $v) {
            $this->type_procedure = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::TYPE_PROCEDURE;
        }


        return $this;
    } // setTypeProcedure()

    /**
     * Set the value of [type_marche] column.
     * 
     * @param string $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setTypeMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_marche !== $v) {
            $this->type_marche = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::TYPE_MARCHE;
        }


        return $this;
    } // setTypeMarche()

    /**
     * Set the value of [satut_ao] column.
     * 
     * @param string $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setSatutAo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->satut_ao !== $v) {
            $this->satut_ao = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::SATUT_AO;
        }


        return $this;
    } // setSatutAo()

    /**
     * Sets the value of [datefin] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setDatefin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datefin !== null || $dt !== null) {
            $currentDateAsString = ($this->datefin !== null && $tmpDt = new DateTime($this->datefin)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datefin = $newDateAsString;
                $this->modifiedColumns[] = CommonDAConsultationPeer::DATEFIN;
            }
        } // if either are not null


        return $this;
    } // setDatefin()

    /**
     * Sets the value of [datemiseenligne] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setDatemiseenligne($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datemiseenligne !== null || $dt !== null) {
            $currentDateAsString = ($this->datemiseenligne !== null && $tmpDt = new DateTime($this->datemiseenligne)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->datemiseenligne = $newDateAsString;
                $this->modifiedColumns[] = CommonDAConsultationPeer::DATEMISEENLIGNE;
            }
        } // if either are not null


        return $this;
    } // setDatemiseenligne()

    /**
     * Set the value of [caution_provisoire] column.
     * 
     * @param string $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setCautionProvisoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->caution_provisoire !== $v) {
            $this->caution_provisoire = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::CAUTION_PROVISOIRE;
        }


        return $this;
    } // setCautionProvisoire()

    /**
     * Set the value of [principale] column.
     * 
     * @param string $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setPrincipale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->principale !== $v) {
            $this->principale = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::PRINCIPALE;
        }


        return $this;
    } // setPrincipale()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonDAConsultationPeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Sets the value of [create_at] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setCreateAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->create_at !== null || $dt !== null) {
            $currentDateAsString = ($this->create_at !== null && $tmpDt = new DateTime($this->create_at)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->create_at = $newDateAsString;
                $this->modifiedColumns[] = CommonDAConsultationPeer::CREATE_AT;
            }
        } // if either are not null


        return $this;
    } // setCreateAt()

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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->reference_utilisateur = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->societe = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->objet = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->type_procedure = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->type_marche = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->satut_ao = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->datefin = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->datemiseenligne = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->caution_provisoire = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->principale = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->lot = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->consultation_ref = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->create_at = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = CommonDAConsultationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonDAConsultation object", $e);
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

        if ($this->aCommonConsultation !== null && $this->consultation_ref !== $this->aCommonConsultation->getReference()) {
            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonDAConsultationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultation = null;
            $this->collCommonLigneDAs = null;

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
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonDAConsultationQuery::create()
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
            $con = Propel::getConnection(CommonDAConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonDAConsultationPeer::addInstanceToPool($this);
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

            if ($this->aCommonConsultation !== null) {
                if ($this->aCommonConsultation->isModified() || $this->aCommonConsultation->isNew()) {
                    $affectedRows += $this->aCommonConsultation->save($con);
                }
                $this->setCommonConsultation($this->aCommonConsultation);
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

            if ($this->commonLigneDAsScheduledForDeletion !== null) {
                if (!$this->commonLigneDAsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonLigneDAsScheduledForDeletion as $commonLigneDA) {
                        // need to save related object because we set the relation to null
                        $commonLigneDA->save($con);
                    }
                    $this->commonLigneDAsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonLigneDAs !== null) {
                foreach ($this->collCommonLigneDAs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CommonDAConsultationPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonDAConsultationPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonDAConsultationPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::REFERENCE_UTILISATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`reference_utilisateur`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::SOCIETE)) {
            $modifiedColumns[':p' . $index++]  = '`Societe`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`objet`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`type_procedure`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::TYPE_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`type_marche`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::SATUT_AO)) {
            $modifiedColumns[':p' . $index++]  = '`satut_AO`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::DATEFIN)) {
            $modifiedColumns[':p' . $index++]  = '`datefin`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::DATEMISEENLIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`datemiseenligne`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::CAUTION_PROVISOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`caution_provisoire`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::PRINCIPALE)) {
            $modifiedColumns[':p' . $index++]  = '`Principale`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonDAConsultationPeer::CREATE_AT)) {
            $modifiedColumns[':p' . $index++]  = '`CREATE_AT`';
        }

        $sql = sprintf(
            'INSERT INTO `DA_Consultation` (%s) VALUES (%s)',
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
                    case '`reference_utilisateur`':						
                        $stmt->bindValue($identifier, $this->reference_utilisateur, PDO::PARAM_STR);
                        break;
                    case '`Societe`':						
                        $stmt->bindValue($identifier, $this->societe, PDO::PARAM_STR);
                        break;
                    case '`objet`':						
                        $stmt->bindValue($identifier, $this->objet, PDO::PARAM_STR);
                        break;
                    case '`type_procedure`':						
                        $stmt->bindValue($identifier, $this->type_procedure, PDO::PARAM_STR);
                        break;
                    case '`type_marche`':						
                        $stmt->bindValue($identifier, $this->type_marche, PDO::PARAM_STR);
                        break;
                    case '`satut_AO`':						
                        $stmt->bindValue($identifier, $this->satut_ao, PDO::PARAM_STR);
                        break;
                    case '`datefin`':						
                        $stmt->bindValue($identifier, $this->datefin, PDO::PARAM_STR);
                        break;
                    case '`datemiseenligne`':						
                        $stmt->bindValue($identifier, $this->datemiseenligne, PDO::PARAM_STR);
                        break;
                    case '`caution_provisoire`':						
                        $stmt->bindValue($identifier, $this->caution_provisoire, PDO::PARAM_STR);
                        break;
                    case '`Principale`':						
                        $stmt->bindValue($identifier, $this->principale, PDO::PARAM_STR);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`CREATE_AT`':						
                        $stmt->bindValue($identifier, $this->create_at, PDO::PARAM_STR);
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

            if ($this->aCommonConsultation !== null) {
                if (!$this->aCommonConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonDAConsultationPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonLigneDAs !== null) {
                    foreach ($this->collCommonLigneDAs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = CommonDAConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getReferenceUtilisateur();
                break;
            case 3:
                return $this->getSociete();
                break;
            case 4:
                return $this->getObjet();
                break;
            case 5:
                return $this->getTypeProcedure();
                break;
            case 6:
                return $this->getTypeMarche();
                break;
            case 7:
                return $this->getSatutAo();
                break;
            case 8:
                return $this->getDatefin();
                break;
            case 9:
                return $this->getDatemiseenligne();
                break;
            case 10:
                return $this->getCautionProvisoire();
                break;
            case 11:
                return $this->getPrincipale();
                break;
            case 12:
                return $this->getLot();
                break;
            case 13:
                return $this->getConsultationRef();
                break;
            case 14:
                return $this->getCreateAt();
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
        if (isset($alreadyDumpedObjects['CommonDAConsultation'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonDAConsultation'][$this->getPrimaryKey()] = true;
        $keys = CommonDAConsultationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getReferenceUtilisateur(),
            $keys[3] => $this->getSociete(),
            $keys[4] => $this->getObjet(),
            $keys[5] => $this->getTypeProcedure(),
            $keys[6] => $this->getTypeMarche(),
            $keys[7] => $this->getSatutAo(),
            $keys[8] => $this->getDatefin(),
            $keys[9] => $this->getDatemiseenligne(),
            $keys[10] => $this->getCautionProvisoire(),
            $keys[11] => $this->getPrincipale(),
            $keys[12] => $this->getLot(),
            $keys[13] => $this->getConsultationRef(),
            $keys[14] => $this->getCreateAt(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultation) {
                $result['CommonConsultation'] = $this->aCommonConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonLigneDAs) {
                $result['CommonLigneDAs'] = $this->collCommonLigneDAs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonDAConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setReferenceUtilisateur($value);
                break;
            case 3:
                $this->setSociete($value);
                break;
            case 4:
                $this->setObjet($value);
                break;
            case 5:
                $this->setTypeProcedure($value);
                break;
            case 6:
                $this->setTypeMarche($value);
                break;
            case 7:
                $this->setSatutAo($value);
                break;
            case 8:
                $this->setDatefin($value);
                break;
            case 9:
                $this->setDatemiseenligne($value);
                break;
            case 10:
                $this->setCautionProvisoire($value);
                break;
            case 11:
                $this->setPrincipale($value);
                break;
            case 12:
                $this->setLot($value);
                break;
            case 13:
                $this->setConsultationRef($value);
                break;
            case 14:
                $this->setCreateAt($value);
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
        $keys = CommonDAConsultationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setReferenceUtilisateur($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSociete($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setObjet($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTypeProcedure($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTypeMarche($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSatutAo($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDatefin($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDatemiseenligne($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCautionProvisoire($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPrincipale($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setLot($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setConsultationRef($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCreateAt($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonDAConsultationPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonDAConsultationPeer::ID)) $criteria->add(CommonDAConsultationPeer::ID, $this->id);
        if ($this->isColumnModified(CommonDAConsultationPeer::ORGANISME)) $criteria->add(CommonDAConsultationPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonDAConsultationPeer::REFERENCE_UTILISATEUR)) $criteria->add(CommonDAConsultationPeer::REFERENCE_UTILISATEUR, $this->reference_utilisateur);
        if ($this->isColumnModified(CommonDAConsultationPeer::SOCIETE)) $criteria->add(CommonDAConsultationPeer::SOCIETE, $this->societe);
        if ($this->isColumnModified(CommonDAConsultationPeer::OBJET)) $criteria->add(CommonDAConsultationPeer::OBJET, $this->objet);
        if ($this->isColumnModified(CommonDAConsultationPeer::TYPE_PROCEDURE)) $criteria->add(CommonDAConsultationPeer::TYPE_PROCEDURE, $this->type_procedure);
        if ($this->isColumnModified(CommonDAConsultationPeer::TYPE_MARCHE)) $criteria->add(CommonDAConsultationPeer::TYPE_MARCHE, $this->type_marche);
        if ($this->isColumnModified(CommonDAConsultationPeer::SATUT_AO)) $criteria->add(CommonDAConsultationPeer::SATUT_AO, $this->satut_ao);
        if ($this->isColumnModified(CommonDAConsultationPeer::DATEFIN)) $criteria->add(CommonDAConsultationPeer::DATEFIN, $this->datefin);
        if ($this->isColumnModified(CommonDAConsultationPeer::DATEMISEENLIGNE)) $criteria->add(CommonDAConsultationPeer::DATEMISEENLIGNE, $this->datemiseenligne);
        if ($this->isColumnModified(CommonDAConsultationPeer::CAUTION_PROVISOIRE)) $criteria->add(CommonDAConsultationPeer::CAUTION_PROVISOIRE, $this->caution_provisoire);
        if ($this->isColumnModified(CommonDAConsultationPeer::PRINCIPALE)) $criteria->add(CommonDAConsultationPeer::PRINCIPALE, $this->principale);
        if ($this->isColumnModified(CommonDAConsultationPeer::LOT)) $criteria->add(CommonDAConsultationPeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonDAConsultationPeer::CONSULTATION_REF)) $criteria->add(CommonDAConsultationPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonDAConsultationPeer::CREATE_AT)) $criteria->add(CommonDAConsultationPeer::CREATE_AT, $this->create_at);

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
        $criteria = new Criteria(CommonDAConsultationPeer::DATABASE_NAME);
        $criteria->add(CommonDAConsultationPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonDAConsultation (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setReferenceUtilisateur($this->getReferenceUtilisateur());
        $copyObj->setSociete($this->getSociete());
        $copyObj->setObjet($this->getObjet());
        $copyObj->setTypeProcedure($this->getTypeProcedure());
        $copyObj->setTypeMarche($this->getTypeMarche());
        $copyObj->setSatutAo($this->getSatutAo());
        $copyObj->setDatefin($this->getDatefin());
        $copyObj->setDatemiseenligne($this->getDatemiseenligne());
        $copyObj->setCautionProvisoire($this->getCautionProvisoire());
        $copyObj->setPrincipale($this->getPrincipale());
        $copyObj->setLot($this->getLot());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setCreateAt($this->getCreateAt());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonLigneDAs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonLigneDA($relObj->copy($deepCopy));
                }
            }

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
     * @return CommonDAConsultation Clone of current object.
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
     * @return CommonDAConsultationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonDAConsultationPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonDAConsultation The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setConsultationRef(NULL);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonDAConsultation($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultation The associated CommonConsultation object.
     * @throws PropelException
     */
    public function getCommonConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultation === null && ($this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()
                ->filterByCommonDAConsultation($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonDAConsultations($this);
             */
        }

        return $this->aCommonConsultation;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CommonLigneDA' == $relationName) {
            $this->initCommonLigneDAs();
        }
    }

    /**
     * Clears out the collCommonLigneDAs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonDAConsultation The current object (for fluent API support)
     * @see        addCommonLigneDAs()
     */
    public function clearCommonLigneDAs()
    {
        $this->collCommonLigneDAs = null; // important to set this to null since that means it is uninitialized
        $this->collCommonLigneDAsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonLigneDAs collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonLigneDAs($v = true)
    {
        $this->collCommonLigneDAsPartial = $v;
    }

    /**
     * Initializes the collCommonLigneDAs collection.
     *
     * By default this just sets the collCommonLigneDAs collection to an empty array (like clearcollCommonLigneDAs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonLigneDAs($overrideExisting = true)
    {
        if (null !== $this->collCommonLigneDAs && !$overrideExisting) {
            return;
        }
        $this->collCommonLigneDAs = new PropelObjectCollection();
        $this->collCommonLigneDAs->setModel('CommonLigneDA');
    }

    /**
     * Gets an array of CommonLigneDA objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonDAConsultation is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonLigneDA[] List of CommonLigneDA objects
     * @throws PropelException
     */
    public function getCommonLigneDAs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonLigneDAsPartial && !$this->isNew();
        if (null === $this->collCommonLigneDAs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonLigneDAs) {
                // return empty collection
                $this->initCommonLigneDAs();
            } else {
                $collCommonLigneDAs = CommonLigneDAQuery::create(null, $criteria)
                    ->filterByCommonDAConsultation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonLigneDAsPartial && count($collCommonLigneDAs)) {
                      $this->initCommonLigneDAs(false);

                      foreach ($collCommonLigneDAs as $obj) {
                        if (false == $this->collCommonLigneDAs->contains($obj)) {
                          $this->collCommonLigneDAs->append($obj);
                        }
                      }

                      $this->collCommonLigneDAsPartial = true;
                    }

                    $collCommonLigneDAs->getInternalIterator()->rewind();

                    return $collCommonLigneDAs;
                }

                if ($partial && $this->collCommonLigneDAs) {
                    foreach ($this->collCommonLigneDAs as $obj) {
                        if ($obj->isNew()) {
                            $collCommonLigneDAs[] = $obj;
                        }
                    }
                }

                $this->collCommonLigneDAs = $collCommonLigneDAs;
                $this->collCommonLigneDAsPartial = false;
            }
        }

        return $this->collCommonLigneDAs;
    }

    /**
     * Sets a collection of CommonLigneDA objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonLigneDAs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function setCommonLigneDAs(PropelCollection $commonLigneDAs, PropelPDO $con = null)
    {
        $commonLigneDAsToDelete = $this->getCommonLigneDAs(new Criteria(), $con)->diff($commonLigneDAs);


        $this->commonLigneDAsScheduledForDeletion = $commonLigneDAsToDelete;

        foreach ($commonLigneDAsToDelete as $commonLigneDARemoved) {
            $commonLigneDARemoved->setCommonDAConsultation(null);
        }

        $this->collCommonLigneDAs = null;
        foreach ($commonLigneDAs as $commonLigneDA) {
            $this->addCommonLigneDA($commonLigneDA);
        }

        $this->collCommonLigneDAs = $commonLigneDAs;
        $this->collCommonLigneDAsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonLigneDA objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonLigneDA objects.
     * @throws PropelException
     */
    public function countCommonLigneDAs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonLigneDAsPartial && !$this->isNew();
        if (null === $this->collCommonLigneDAs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonLigneDAs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonLigneDAs());
            }
            $query = CommonLigneDAQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonDAConsultation($this)
                ->count($con);
        }

        return count($this->collCommonLigneDAs);
    }

    /**
     * Method called to associate a CommonLigneDA object to this object
     * through the CommonLigneDA foreign key attribute.
     *
     * @param   CommonLigneDA $l CommonLigneDA
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function addCommonLigneDA(CommonLigneDA $l)
    {
        if ($this->collCommonLigneDAs === null) {
            $this->initCommonLigneDAs();
            $this->collCommonLigneDAsPartial = true;
        }
        if (!in_array($l, $this->collCommonLigneDAs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonLigneDA($l);
        }

        return $this;
    }

    /**
     * @param	CommonLigneDA $commonLigneDA The commonLigneDA object to add.
     */
    protected function doAddCommonLigneDA($commonLigneDA)
    {
        $this->collCommonLigneDAs[]= $commonLigneDA;
        $commonLigneDA->setCommonDAConsultation($this);
    }

    /**
     * @param	CommonLigneDA $commonLigneDA The commonLigneDA object to remove.
     * @return CommonDAConsultation The current object (for fluent API support)
     */
    public function removeCommonLigneDA($commonLigneDA)
    {
        if ($this->getCommonLigneDAs()->contains($commonLigneDA)) {
            $this->collCommonLigneDAs->remove($this->collCommonLigneDAs->search($commonLigneDA));
            if (null === $this->commonLigneDAsScheduledForDeletion) {
                $this->commonLigneDAsScheduledForDeletion = clone $this->collCommonLigneDAs;
                $this->commonLigneDAsScheduledForDeletion->clear();
            }
            $this->commonLigneDAsScheduledForDeletion[]= $commonLigneDA;
            $commonLigneDA->setCommonDAConsultation(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->reference_utilisateur = null;
        $this->societe = null;
        $this->objet = null;
        $this->type_procedure = null;
        $this->type_marche = null;
        $this->satut_ao = null;
        $this->datefin = null;
        $this->datemiseenligne = null;
        $this->caution_provisoire = null;
        $this->principale = null;
        $this->lot = null;
        $this->consultation_ref = null;
        $this->create_at = null;
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
            if ($this->collCommonLigneDAs) {
                foreach ($this->collCommonLigneDAs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonConsultation instanceof Persistent) {
              $this->aCommonConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonLigneDAs instanceof PropelCollection) {
            $this->collCommonLigneDAs->clearIterator();
        }
        $this->collCommonLigneDAs = null;
        $this->aCommonConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonDAConsultationPeer::DEFAULT_STRING_FORMAT);
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
