<?php


/**
 * Base class that represents a row from the 't_CAO_Ordre_De_Passage' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOOrdreDePassage extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCAOOrdreDePassagePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCAOOrdreDePassagePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_ordre_de_passage field.
     * @var        string
     */
    protected $id_ordre_de_passage;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_seance field.
     * @var        string
     */
    protected $id_seance;

    /**
     * The value for the id_commission field.
     * @var        string
     */
    protected $id_commission;

    /**
     * The value for the id_commission_consultation field.
     * @var        string
     */
    protected $id_commission_consultation;

    /**
     * The value for the ordre_de_passage field.
     * @var        int
     */
    protected $ordre_de_passage;

    /**
     * The value for the id_ref_org_val_etape field.
     * @var        int
     */
    protected $id_ref_org_val_etape;

    /**
     * The value for the date_seance field.
     * @var        string
     */
    protected $date_seance;

    /**
     * The value for the date_passage field.
     * @var        string
     */
    protected $date_passage;

    /**
     * @var        CommonTCAOSeance
     */
    protected $aCommonTCAOSeanceRelatedByDateSeance;

    /**
     * @var        CommonTCAOCommissionConsultation
     */
    protected $aCommonTCAOCommissionConsultation;

    /**
     * @var        CommonTCAOCommission
     */
    protected $aCommonTCAOCommission;

    /**
     * @var        CommonTCAOSeance
     */
    protected $aCommonTCAOSeanceRelatedByIdSeance;

    /**
     * @var        CommonOrganisme
     */
    protected $aCommonOrganisme;

    /**
     * @var        PropelObjectCollection|CommonTCAOSeanceInvite[] Collection to store aggregation of CommonTCAOSeanceInvite objects.
     */
    protected $collCommonTCAOSeanceInvites;
    protected $collCommonTCAOSeanceInvitesPartial;

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
    protected $commonTCAOSeanceInvitesScheduledForDeletion = null;

    /**
     * Get the [id_ordre_de_passage] column value.
     * 
     * @return string
     */
    public function getIdOrdreDePassage()
    {

        return $this->id_ordre_de_passage;
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
     * Get the [id_seance] column value.
     * 
     * @return string
     */
    public function getIdSeance()
    {

        return $this->id_seance;
    }

    /**
     * Get the [id_commission] column value.
     * 
     * @return string
     */
    public function getIdCommission()
    {

        return $this->id_commission;
    }

    /**
     * Get the [id_commission_consultation] column value.
     * 
     * @return string
     */
    public function getIdCommissionConsultation()
    {

        return $this->id_commission_consultation;
    }

    /**
     * Get the [ordre_de_passage] column value.
     * 
     * @return int
     */
    public function getOrdreDePassage()
    {

        return $this->ordre_de_passage;
    }

    /**
     * Get the [id_ref_org_val_etape] column value.
     * 
     * @return int
     */
    public function getIdRefOrgValEtape()
    {

        return $this->id_ref_org_val_etape;
    }

    /**
     * Get the [optionally formatted] temporal [date_seance] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateSeance($format = 'Y-m-d H:i:s')
    {
        if ($this->date_seance === null) {
            return null;
        }

        if ($this->date_seance === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_seance);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_seance, true), $x);
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
     * Get the [optionally formatted] temporal [date_passage] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatePassage($format = 'Y-m-d H:i:s')
    {
        if ($this->date_passage === null) {
            return null;
        }

        if ($this->date_passage === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_passage);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_passage, true), $x);
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
     * Set the value of [id_ordre_de_passage] column.
     * 
     * @param string $v new value
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function setIdOrdreDePassage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_ordre_de_passage !== $v) {
            $this->id_ordre_de_passage = $v;
            $this->modifiedColumns[] = CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE;
        }


        return $this;
    } // setIdOrdreDePassage()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTCAOOrdreDePassagePeer::ORGANISME;
        }

        if ($this->aCommonOrganisme !== null && $this->aCommonOrganisme->getAcronyme() !== $v) {
            $this->aCommonOrganisme = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_seance] column.
     * 
     * @param string $v new value
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function setIdSeance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_seance !== $v) {
            $this->id_seance = $v;
            $this->modifiedColumns[] = CommonTCAOOrdreDePassagePeer::ID_SEANCE;
        }

        if ($this->aCommonTCAOSeanceRelatedByIdSeance !== null && $this->aCommonTCAOSeanceRelatedByIdSeance->getIdSeance() !== $v) {
            $this->aCommonTCAOSeanceRelatedByIdSeance = null;
        }


        return $this;
    } // setIdSeance()

    /**
     * Set the value of [id_commission] column.
     * 
     * @param string $v new value
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function setIdCommission($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_commission !== $v) {
            $this->id_commission = $v;
            $this->modifiedColumns[] = CommonTCAOOrdreDePassagePeer::ID_COMMISSION;
        }

        if ($this->aCommonTCAOCommission !== null && $this->aCommonTCAOCommission->getIdCommission() !== $v) {
            $this->aCommonTCAOCommission = null;
        }


        return $this;
    } // setIdCommission()

    /**
     * Set the value of [id_commission_consultation] column.
     * 
     * @param string $v new value
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function setIdCommissionConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_commission_consultation !== $v) {
            $this->id_commission_consultation = $v;
            $this->modifiedColumns[] = CommonTCAOOrdreDePassagePeer::ID_COMMISSION_CONSULTATION;
        }

        if ($this->aCommonTCAOCommissionConsultation !== null && $this->aCommonTCAOCommissionConsultation->getIdCommissionConsultation() !== $v) {
            $this->aCommonTCAOCommissionConsultation = null;
        }


        return $this;
    } // setIdCommissionConsultation()

    /**
     * Set the value of [ordre_de_passage] column.
     * 
     * @param int $v new value
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function setOrdreDePassage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordre_de_passage !== $v) {
            $this->ordre_de_passage = $v;
            $this->modifiedColumns[] = CommonTCAOOrdreDePassagePeer::ORDRE_DE_PASSAGE;
        }


        return $this;
    } // setOrdreDePassage()

    /**
     * Set the value of [id_ref_org_val_etape] column.
     * 
     * @param int $v new value
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function setIdRefOrgValEtape($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ref_org_val_etape !== $v) {
            $this->id_ref_org_val_etape = $v;
            $this->modifiedColumns[] = CommonTCAOOrdreDePassagePeer::ID_REF_ORG_VAL_ETAPE;
        }


        return $this;
    } // setIdRefOrgValEtape()

    /**
     * Sets the value of [date_seance] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function setDateSeance($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_seance !== null || $dt !== null) {
            $currentDateAsString = ($this->date_seance !== null && $tmpDt = new DateTime($this->date_seance)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_seance = $newDateAsString;
                $this->modifiedColumns[] = CommonTCAOOrdreDePassagePeer::DATE_SEANCE;
            }
        } // if either are not null

        if ($this->aCommonTCAOSeanceRelatedByDateSeance !== null && $this->aCommonTCAOSeanceRelatedByDateSeance->getDate() !== $v) {
            $this->aCommonTCAOSeanceRelatedByDateSeance = null;
        }


        return $this;
    } // setDateSeance()

    /**
     * Sets the value of [date_passage] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function setDatePassage($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_passage !== null || $dt !== null) {
            $currentDateAsString = ($this->date_passage !== null && $tmpDt = new DateTime($this->date_passage)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_passage = $newDateAsString;
                $this->modifiedColumns[] = CommonTCAOOrdreDePassagePeer::DATE_PASSAGE;
            }
        } // if either are not null


        return $this;
    } // setDatePassage()

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

            $this->id_ordre_de_passage = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_seance = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_commission = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_commission_consultation = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ordre_de_passage = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_ref_org_val_etape = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->date_seance = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->date_passage = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = CommonTCAOOrdreDePassagePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCAOOrdreDePassage object", $e);
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

        if ($this->aCommonOrganisme !== null && $this->organisme !== $this->aCommonOrganisme->getAcronyme()) {
            $this->aCommonOrganisme = null;
        }
        if ($this->aCommonTCAOSeanceRelatedByIdSeance !== null && $this->id_seance !== $this->aCommonTCAOSeanceRelatedByIdSeance->getIdSeance()) {
            $this->aCommonTCAOSeanceRelatedByIdSeance = null;
        }
        if ($this->aCommonTCAOCommission !== null && $this->id_commission !== $this->aCommonTCAOCommission->getIdCommission()) {
            $this->aCommonTCAOCommission = null;
        }
        if ($this->aCommonTCAOCommissionConsultation !== null && $this->id_commission_consultation !== $this->aCommonTCAOCommissionConsultation->getIdCommissionConsultation()) {
            $this->aCommonTCAOCommissionConsultation = null;
        }
        if ($this->aCommonTCAOSeanceRelatedByDateSeance !== null && $this->date_seance !== $this->aCommonTCAOSeanceRelatedByDateSeance->getDate()) {
            $this->aCommonTCAOSeanceRelatedByDateSeance = null;
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
            $con = Propel::getConnection(CommonTCAOOrdreDePassagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCAOOrdreDePassagePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonTCAOSeanceRelatedByDateSeance = null;
            $this->aCommonTCAOCommissionConsultation = null;
            $this->aCommonTCAOCommission = null;
            $this->aCommonTCAOSeanceRelatedByIdSeance = null;
            $this->aCommonOrganisme = null;
            $this->collCommonTCAOSeanceInvites = null;

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
            $con = Propel::getConnection(CommonTCAOOrdreDePassagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCAOOrdreDePassageQuery::create()
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
            $con = Propel::getConnection(CommonTCAOOrdreDePassagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCAOOrdreDePassagePeer::addInstanceToPool($this);
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

            if ($this->aCommonTCAOSeanceRelatedByDateSeance !== null) {
                if ($this->aCommonTCAOSeanceRelatedByDateSeance->isModified() || $this->aCommonTCAOSeanceRelatedByDateSeance->isNew()) {
                    $affectedRows += $this->aCommonTCAOSeanceRelatedByDateSeance->save($con);
                }
                $this->setCommonTCAOSeanceRelatedByDateSeance($this->aCommonTCAOSeanceRelatedByDateSeance);
            }

            if ($this->aCommonTCAOCommissionConsultation !== null) {
                if ($this->aCommonTCAOCommissionConsultation->isModified() || $this->aCommonTCAOCommissionConsultation->isNew()) {
                    $affectedRows += $this->aCommonTCAOCommissionConsultation->save($con);
                }
                $this->setCommonTCAOCommissionConsultation($this->aCommonTCAOCommissionConsultation);
            }

            if ($this->aCommonTCAOCommission !== null) {
                if ($this->aCommonTCAOCommission->isModified() || $this->aCommonTCAOCommission->isNew()) {
                    $affectedRows += $this->aCommonTCAOCommission->save($con);
                }
                $this->setCommonTCAOCommission($this->aCommonTCAOCommission);
            }

            if ($this->aCommonTCAOSeanceRelatedByIdSeance !== null) {
                if ($this->aCommonTCAOSeanceRelatedByIdSeance->isModified() || $this->aCommonTCAOSeanceRelatedByIdSeance->isNew()) {
                    $affectedRows += $this->aCommonTCAOSeanceRelatedByIdSeance->save($con);
                }
                $this->setCommonTCAOSeanceRelatedByIdSeance($this->aCommonTCAOSeanceRelatedByIdSeance);
            }

            if ($this->aCommonOrganisme !== null) {
                if ($this->aCommonOrganisme->isModified() || $this->aCommonOrganisme->isNew()) {
                    $affectedRows += $this->aCommonOrganisme->save($con);
                }
                $this->setCommonOrganisme($this->aCommonOrganisme);
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

            if ($this->commonTCAOSeanceInvitesScheduledForDeletion !== null) {
                if (!$this->commonTCAOSeanceInvitesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOSeanceInvitesScheduledForDeletion as $commonTCAOSeanceInvite) {
                        // need to save related object because we set the relation to null
                        $commonTCAOSeanceInvite->save($con);
                    }
                    $this->commonTCAOSeanceInvitesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOSeanceInvites !== null) {
                foreach ($this->collCommonTCAOSeanceInvites as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE;
        if (null !== $this->id_ordre_de_passage) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`id_ordre_de_passage`';
        }
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ID_SEANCE)) {
            $modifiedColumns[':p' . $index++]  = '`id_seance`';
        }
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ID_COMMISSION)) {
            $modifiedColumns[':p' . $index++]  = '`id_commission`';
        }
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ID_COMMISSION_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_commission_consultation`';
        }
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ORDRE_DE_PASSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`ordre_de_passage`';
        }
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ID_REF_ORG_VAL_ETAPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_ref_org_val_etape`';
        }
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::DATE_SEANCE)) {
            $modifiedColumns[':p' . $index++]  = '`date_seance`';
        }
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::DATE_PASSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`date_passage`';
        }

        $sql = sprintf(
            'INSERT INTO `t_CAO_Ordre_De_Passage` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_ordre_de_passage`':						
                        $stmt->bindValue($identifier, $this->id_ordre_de_passage, PDO::PARAM_STR);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_seance`':						
                        $stmt->bindValue($identifier, $this->id_seance, PDO::PARAM_STR);
                        break;
                    case '`id_commission`':						
                        $stmt->bindValue($identifier, $this->id_commission, PDO::PARAM_STR);
                        break;
                    case '`id_commission_consultation`':						
                        $stmt->bindValue($identifier, $this->id_commission_consultation, PDO::PARAM_STR);
                        break;
                    case '`ordre_de_passage`':						
                        $stmt->bindValue($identifier, $this->ordre_de_passage, PDO::PARAM_INT);
                        break;
                    case '`id_ref_org_val_etape`':						
                        $stmt->bindValue($identifier, $this->id_ref_org_val_etape, PDO::PARAM_INT);
                        break;
                    case '`date_seance`':						
                        $stmt->bindValue($identifier, $this->date_seance, PDO::PARAM_STR);
                        break;
                    case '`date_passage`':						
                        $stmt->bindValue($identifier, $this->date_passage, PDO::PARAM_STR);
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
        $this->setIdOrdreDePassage($pk);

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

            if ($this->aCommonTCAOSeanceRelatedByDateSeance !== null) {
                if (!$this->aCommonTCAOSeanceRelatedByDateSeance->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTCAOSeanceRelatedByDateSeance->getValidationFailures());
                }
            }

            if ($this->aCommonTCAOCommissionConsultation !== null) {
                if (!$this->aCommonTCAOCommissionConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTCAOCommissionConsultation->getValidationFailures());
                }
            }

            if ($this->aCommonTCAOCommission !== null) {
                if (!$this->aCommonTCAOCommission->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTCAOCommission->getValidationFailures());
                }
            }

            if ($this->aCommonTCAOSeanceRelatedByIdSeance !== null) {
                if (!$this->aCommonTCAOSeanceRelatedByIdSeance->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTCAOSeanceRelatedByIdSeance->getValidationFailures());
                }
            }

            if ($this->aCommonOrganisme !== null) {
                if (!$this->aCommonOrganisme->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonOrganisme->getValidationFailures());
                }
            }


            if (($retval = CommonTCAOOrdreDePassagePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTCAOSeanceInvites !== null) {
                    foreach ($this->collCommonTCAOSeanceInvites as $referrerFK) {
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
        $pos = CommonTCAOOrdreDePassagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdOrdreDePassage();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdSeance();
                break;
            case 3:
                return $this->getIdCommission();
                break;
            case 4:
                return $this->getIdCommissionConsultation();
                break;
            case 5:
                return $this->getOrdreDePassage();
                break;
            case 6:
                return $this->getIdRefOrgValEtape();
                break;
            case 7:
                return $this->getDateSeance();
                break;
            case 8:
                return $this->getDatePassage();
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
        if (isset($alreadyDumpedObjects['CommonTCAOOrdreDePassage'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCAOOrdreDePassage'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTCAOOrdreDePassagePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdOrdreDePassage(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdSeance(),
            $keys[3] => $this->getIdCommission(),
            $keys[4] => $this->getIdCommissionConsultation(),
            $keys[5] => $this->getOrdreDePassage(),
            $keys[6] => $this->getIdRefOrgValEtape(),
            $keys[7] => $this->getDateSeance(),
            $keys[8] => $this->getDatePassage(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonTCAOSeanceRelatedByDateSeance) {
                $result['CommonTCAOSeanceRelatedByDateSeance'] = $this->aCommonTCAOSeanceRelatedByDateSeance->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonTCAOCommissionConsultation) {
                $result['CommonTCAOCommissionConsultation'] = $this->aCommonTCAOCommissionConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonTCAOCommission) {
                $result['CommonTCAOCommission'] = $this->aCommonTCAOCommission->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonTCAOSeanceRelatedByIdSeance) {
                $result['CommonTCAOSeanceRelatedByIdSeance'] = $this->aCommonTCAOSeanceRelatedByIdSeance->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonOrganisme) {
                $result['CommonOrganisme'] = $this->aCommonOrganisme->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonTCAOSeanceInvites) {
                $result['CommonTCAOSeanceInvites'] = $this->collCommonTCAOSeanceInvites->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTCAOOrdreDePassagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdOrdreDePassage($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdSeance($value);
                break;
            case 3:
                $this->setIdCommission($value);
                break;
            case 4:
                $this->setIdCommissionConsultation($value);
                break;
            case 5:
                $this->setOrdreDePassage($value);
                break;
            case 6:
                $this->setIdRefOrgValEtape($value);
                break;
            case 7:
                $this->setDateSeance($value);
                break;
            case 8:
                $this->setDatePassage($value);
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
        $keys = CommonTCAOOrdreDePassagePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdOrdreDePassage($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdSeance($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdCommission($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdCommissionConsultation($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOrdreDePassage($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdRefOrgValEtape($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateSeance($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDatePassage($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCAOOrdreDePassagePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE)) $criteria->add(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE, $this->id_ordre_de_passage);
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ORGANISME)) $criteria->add(CommonTCAOOrdreDePassagePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ID_SEANCE)) $criteria->add(CommonTCAOOrdreDePassagePeer::ID_SEANCE, $this->id_seance);
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ID_COMMISSION)) $criteria->add(CommonTCAOOrdreDePassagePeer::ID_COMMISSION, $this->id_commission);
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ID_COMMISSION_CONSULTATION)) $criteria->add(CommonTCAOOrdreDePassagePeer::ID_COMMISSION_CONSULTATION, $this->id_commission_consultation);
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ORDRE_DE_PASSAGE)) $criteria->add(CommonTCAOOrdreDePassagePeer::ORDRE_DE_PASSAGE, $this->ordre_de_passage);
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::ID_REF_ORG_VAL_ETAPE)) $criteria->add(CommonTCAOOrdreDePassagePeer::ID_REF_ORG_VAL_ETAPE, $this->id_ref_org_val_etape);
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::DATE_SEANCE)) $criteria->add(CommonTCAOOrdreDePassagePeer::DATE_SEANCE, $this->date_seance);
        if ($this->isColumnModified(CommonTCAOOrdreDePassagePeer::DATE_PASSAGE)) $criteria->add(CommonTCAOOrdreDePassagePeer::DATE_PASSAGE, $this->date_passage);

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
        $criteria = new Criteria(CommonTCAOOrdreDePassagePeer::DATABASE_NAME);
        $criteria->add(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE, $this->id_ordre_de_passage);
        $criteria->add(CommonTCAOOrdreDePassagePeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdOrdreDePassage();
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
        $this->setIdOrdreDePassage($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdOrdreDePassage()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTCAOOrdreDePassage (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdSeance($this->getIdSeance());
        $copyObj->setIdCommission($this->getIdCommission());
        $copyObj->setIdCommissionConsultation($this->getIdCommissionConsultation());
        $copyObj->setOrdreDePassage($this->getOrdreDePassage());
        $copyObj->setIdRefOrgValEtape($this->getIdRefOrgValEtape());
        $copyObj->setDateSeance($this->getDateSeance());
        $copyObj->setDatePassage($this->getDatePassage());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTCAOSeanceInvites() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOSeanceInvite($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdOrdreDePassage(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTCAOOrdreDePassage Clone of current object.
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
     * @return CommonTCAOOrdreDePassagePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCAOOrdreDePassagePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonTCAOSeance object.
     *
     * @param   CommonTCAOSeance $v
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTCAOSeanceRelatedByDateSeance(CommonTCAOSeance $v = null)
    {
        if ($v === null) {
            $this->setDateSeance(NULL);
        } else {
            $this->setDateSeance($v->getDate());
        }

        $this->aCommonTCAOSeanceRelatedByDateSeance = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTCAOSeance object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCAOOrdreDePassageRelatedByDateSeance($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTCAOSeance object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTCAOSeance The associated CommonTCAOSeance object.
     * @throws PropelException
     */
    public function getCommonTCAOSeanceRelatedByDateSeance(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTCAOSeanceRelatedByDateSeance === null && (($this->date_seance !== "" && $this->date_seance !== null)) && $doQuery) {
            $this->aCommonTCAOSeanceRelatedByDateSeance = CommonTCAOSeanceQuery::create()
                ->filterByCommonTCAOOrdreDePassageRelatedByDateSeance($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTCAOSeanceRelatedByDateSeance->addCommonTCAOOrdreDePassagesRelatedByDateSeance($this);
             */
        }

        return $this->aCommonTCAOSeanceRelatedByDateSeance;
    }

    /**
     * Declares an association between this object and a CommonTCAOCommissionConsultation object.
     *
     * @param   CommonTCAOCommissionConsultation $v
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTCAOCommissionConsultation(CommonTCAOCommissionConsultation $v = null)
    {
        if ($v === null) {
            $this->setIdCommissionConsultation(NULL);
        } else {
            $this->setIdCommissionConsultation($v->getIdCommissionConsultation());
        }

        $this->aCommonTCAOCommissionConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTCAOCommissionConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCAOOrdreDePassage($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTCAOCommissionConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTCAOCommissionConsultation The associated CommonTCAOCommissionConsultation object.
     * @throws PropelException
     */
    public function getCommonTCAOCommissionConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTCAOCommissionConsultation === null && (($this->id_commission_consultation !== "" && $this->id_commission_consultation !== null)) && $doQuery) {
            $this->aCommonTCAOCommissionConsultation = CommonTCAOCommissionConsultationQuery::create()
                ->filterByCommonTCAOOrdreDePassage($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTCAOCommissionConsultation->addCommonTCAOOrdreDePassages($this);
             */
        }

        return $this->aCommonTCAOCommissionConsultation;
    }

    /**
     * Declares an association between this object and a CommonTCAOCommission object.
     *
     * @param   CommonTCAOCommission $v
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTCAOCommission(CommonTCAOCommission $v = null)
    {
        if ($v === null) {
            $this->setIdCommission(NULL);
        } else {
            $this->setIdCommission($v->getIdCommission());
        }

        $this->aCommonTCAOCommission = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTCAOCommission object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCAOOrdreDePassage($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTCAOCommission object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTCAOCommission The associated CommonTCAOCommission object.
     * @throws PropelException
     */
    public function getCommonTCAOCommission(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTCAOCommission === null && (($this->id_commission !== "" && $this->id_commission !== null)) && $doQuery) {
            $this->aCommonTCAOCommission = CommonTCAOCommissionQuery::create()
                ->filterByCommonTCAOOrdreDePassage($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTCAOCommission->addCommonTCAOOrdreDePassages($this);
             */
        }

        return $this->aCommonTCAOCommission;
    }

    /**
     * Declares an association between this object and a CommonTCAOSeance object.
     *
     * @param   CommonTCAOSeance $v
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTCAOSeanceRelatedByIdSeance(CommonTCAOSeance $v = null)
    {
        if ($v === null) {
            $this->setIdSeance(NULL);
        } else {
            $this->setIdSeance($v->getIdSeance());
        }

        $this->aCommonTCAOSeanceRelatedByIdSeance = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTCAOSeance object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCAOOrdreDePassageRelatedByIdSeance($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTCAOSeance object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTCAOSeance The associated CommonTCAOSeance object.
     * @throws PropelException
     */
    public function getCommonTCAOSeanceRelatedByIdSeance(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTCAOSeanceRelatedByIdSeance === null && (($this->id_seance !== "" && $this->id_seance !== null)) && $doQuery) {
            $this->aCommonTCAOSeanceRelatedByIdSeance = CommonTCAOSeanceQuery::create()
                ->filterByCommonTCAOOrdreDePassageRelatedByIdSeance($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTCAOSeanceRelatedByIdSeance->addCommonTCAOOrdreDePassagesRelatedByIdSeance($this);
             */
        }

        return $this->aCommonTCAOSeanceRelatedByIdSeance;
    }

    /**
     * Declares an association between this object and a CommonOrganisme object.
     *
     * @param   CommonOrganisme $v
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonOrganisme(CommonOrganisme $v = null)
    {
        if ($v === null) {
            $this->setOrganisme(NULL);
        } else {
            $this->setOrganisme($v->getAcronyme());
        }

        $this->aCommonOrganisme = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonOrganisme object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCAOOrdreDePassage($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonOrganisme object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonOrganisme The associated CommonOrganisme object.
     * @throws PropelException
     */
    public function getCommonOrganisme(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonOrganisme === null && (($this->organisme !== "" && $this->organisme !== null)) && $doQuery) {
            $this->aCommonOrganisme = CommonOrganismeQuery::create()
                ->filterByCommonTCAOOrdreDePassage($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonOrganisme->addCommonTCAOOrdreDePassages($this);
             */
        }

        return $this->aCommonOrganisme;
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
        if ('CommonTCAOSeanceInvite' == $relationName) {
            $this->initCommonTCAOSeanceInvites();
        }
    }

    /**
     * Clears out the collCommonTCAOSeanceInvites collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     * @see        addCommonTCAOSeanceInvites()
     */
    public function clearCommonTCAOSeanceInvites()
    {
        $this->collCommonTCAOSeanceInvites = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOSeanceInvitesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOSeanceInvites collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOSeanceInvites($v = true)
    {
        $this->collCommonTCAOSeanceInvitesPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOSeanceInvites collection.
     *
     * By default this just sets the collCommonTCAOSeanceInvites collection to an empty array (like clearcollCommonTCAOSeanceInvites());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOSeanceInvites($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOSeanceInvites && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOSeanceInvites = new PropelObjectCollection();
        $this->collCommonTCAOSeanceInvites->setModel('CommonTCAOSeanceInvite');
    }

    /**
     * Gets an array of CommonTCAOSeanceInvite objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCAOOrdreDePassage is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     * @throws PropelException
     */
    public function getCommonTCAOSeanceInvites($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOSeanceInvitesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOSeanceInvites || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOSeanceInvites) {
                // return empty collection
                $this->initCommonTCAOSeanceInvites();
            } else {
                $collCommonTCAOSeanceInvites = CommonTCAOSeanceInviteQuery::create(null, $criteria)
                    ->filterByCommonTCAOOrdreDePassage($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOSeanceInvitesPartial && count($collCommonTCAOSeanceInvites)) {
                      $this->initCommonTCAOSeanceInvites(false);

                      foreach ($collCommonTCAOSeanceInvites as $obj) {
                        if (false == $this->collCommonTCAOSeanceInvites->contains($obj)) {
                          $this->collCommonTCAOSeanceInvites->append($obj);
                        }
                      }

                      $this->collCommonTCAOSeanceInvitesPartial = true;
                    }

                    $collCommonTCAOSeanceInvites->getInternalIterator()->rewind();

                    return $collCommonTCAOSeanceInvites;
                }

                if ($partial && $this->collCommonTCAOSeanceInvites) {
                    foreach ($this->collCommonTCAOSeanceInvites as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOSeanceInvites[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOSeanceInvites = $collCommonTCAOSeanceInvites;
                $this->collCommonTCAOSeanceInvitesPartial = false;
            }
        }

        return $this->collCommonTCAOSeanceInvites;
    }

    /**
     * Sets a collection of CommonTCAOSeanceInvite objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOSeanceInvites A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function setCommonTCAOSeanceInvites(PropelCollection $commonTCAOSeanceInvites, PropelPDO $con = null)
    {
        $commonTCAOSeanceInvitesToDelete = $this->getCommonTCAOSeanceInvites(new Criteria(), $con)->diff($commonTCAOSeanceInvites);


        $this->commonTCAOSeanceInvitesScheduledForDeletion = $commonTCAOSeanceInvitesToDelete;

        foreach ($commonTCAOSeanceInvitesToDelete as $commonTCAOSeanceInviteRemoved) {
            $commonTCAOSeanceInviteRemoved->setCommonTCAOOrdreDePassage(null);
        }

        $this->collCommonTCAOSeanceInvites = null;
        foreach ($commonTCAOSeanceInvites as $commonTCAOSeanceInvite) {
            $this->addCommonTCAOSeanceInvite($commonTCAOSeanceInvite);
        }

        $this->collCommonTCAOSeanceInvites = $commonTCAOSeanceInvites;
        $this->collCommonTCAOSeanceInvitesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOSeanceInvite objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOSeanceInvite objects.
     * @throws PropelException
     */
    public function countCommonTCAOSeanceInvites(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOSeanceInvitesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOSeanceInvites || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOSeanceInvites) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOSeanceInvites());
            }
            $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCAOOrdreDePassage($this)
                ->count($con);
        }

        return count($this->collCommonTCAOSeanceInvites);
    }

    /**
     * Method called to associate a CommonTCAOSeanceInvite object to this object
     * through the CommonTCAOSeanceInvite foreign key attribute.
     *
     * @param   CommonTCAOSeanceInvite $l CommonTCAOSeanceInvite
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function addCommonTCAOSeanceInvite(CommonTCAOSeanceInvite $l)
    {
        if ($this->collCommonTCAOSeanceInvites === null) {
            $this->initCommonTCAOSeanceInvites();
            $this->collCommonTCAOSeanceInvitesPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOSeanceInvites->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOSeanceInvite($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOSeanceInvite $commonTCAOSeanceInvite The commonTCAOSeanceInvite object to add.
     */
    protected function doAddCommonTCAOSeanceInvite($commonTCAOSeanceInvite)
    {
        $this->collCommonTCAOSeanceInvites[]= $commonTCAOSeanceInvite;
        $commonTCAOSeanceInvite->setCommonTCAOOrdreDePassage($this);
    }

    /**
     * @param	CommonTCAOSeanceInvite $commonTCAOSeanceInvite The commonTCAOSeanceInvite object to remove.
     * @return CommonTCAOOrdreDePassage The current object (for fluent API support)
     */
    public function removeCommonTCAOSeanceInvite($commonTCAOSeanceInvite)
    {
        if ($this->getCommonTCAOSeanceInvites()->contains($commonTCAOSeanceInvite)) {
            $this->collCommonTCAOSeanceInvites->remove($this->collCommonTCAOSeanceInvites->search($commonTCAOSeanceInvite));
            if (null === $this->commonTCAOSeanceInvitesScheduledForDeletion) {
                $this->commonTCAOSeanceInvitesScheduledForDeletion = clone $this->collCommonTCAOSeanceInvites;
                $this->commonTCAOSeanceInvitesScheduledForDeletion->clear();
            }
            $this->commonTCAOSeanceInvitesScheduledForDeletion[]= clone $commonTCAOSeanceInvite;
            $commonTCAOSeanceInvite->setCommonTCAOOrdreDePassage(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOOrdreDePassage is new, it will return
     * an empty collection; or if this CommonTCAOOrdreDePassage has previously
     * been saved, it will retrieve related CommonTCAOSeanceInvites from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOOrdreDePassage.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     */
    public function getCommonTCAOSeanceInvitesJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonTCAOSeanceInvites($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOOrdreDePassage is new, it will return
     * an empty collection; or if this CommonTCAOOrdreDePassage has previously
     * been saved, it will retrieve related CommonTCAOSeanceInvites from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOOrdreDePassage.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     */
    public function getCommonTCAOSeanceInvitesJoinCommonTCAOIntervenantExterne($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOIntervenantExterne', $join_behavior);

        return $this->getCommonTCAOSeanceInvites($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOOrdreDePassage is new, it will return
     * an empty collection; or if this CommonTCAOOrdreDePassage has previously
     * been saved, it will retrieve related CommonTCAOSeanceInvites from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOOrdreDePassage.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     */
    public function getCommonTCAOSeanceInvitesJoinCommonOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
        $query->joinWith('CommonOrganisme', $join_behavior);

        return $this->getCommonTCAOSeanceInvites($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_ordre_de_passage = null;
        $this->organisme = null;
        $this->id_seance = null;
        $this->id_commission = null;
        $this->id_commission_consultation = null;
        $this->ordre_de_passage = null;
        $this->id_ref_org_val_etape = null;
        $this->date_seance = null;
        $this->date_passage = null;
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
            if ($this->collCommonTCAOSeanceInvites) {
                foreach ($this->collCommonTCAOSeanceInvites as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonTCAOSeanceRelatedByDateSeance instanceof Persistent) {
              $this->aCommonTCAOSeanceRelatedByDateSeance->clearAllReferences($deep);
            }
            if ($this->aCommonTCAOCommissionConsultation instanceof Persistent) {
              $this->aCommonTCAOCommissionConsultation->clearAllReferences($deep);
            }
            if ($this->aCommonTCAOCommission instanceof Persistent) {
              $this->aCommonTCAOCommission->clearAllReferences($deep);
            }
            if ($this->aCommonTCAOSeanceRelatedByIdSeance instanceof Persistent) {
              $this->aCommonTCAOSeanceRelatedByIdSeance->clearAllReferences($deep);
            }
            if ($this->aCommonOrganisme instanceof Persistent) {
              $this->aCommonOrganisme->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTCAOSeanceInvites instanceof PropelCollection) {
            $this->collCommonTCAOSeanceInvites->clearIterator();
        }
        $this->collCommonTCAOSeanceInvites = null;
        $this->aCommonTCAOSeanceRelatedByDateSeance = null;
        $this->aCommonTCAOCommissionConsultation = null;
        $this->aCommonTCAOCommission = null;
        $this->aCommonTCAOSeanceRelatedByIdSeance = null;
        $this->aCommonOrganisme = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTCAOOrdreDePassagePeer::DEFAULT_STRING_FORMAT);
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
