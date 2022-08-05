<?php


/**
 * Base class that represents a row from the 't_CAO_Commission_Consultation' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOCommissionConsultation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCAOCommissionConsultationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCAOCommissionConsultationPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_commission_consultation field.
     * @var        string
     */
    protected $id_commission_consultation;

    /**
     * The value for the id_commission field.
     * @var        string
     */
    protected $id_commission;

    /**
     * The value for the ref_consultation field.
     * @var        string
     */
    protected $ref_consultation;

    /**
     * The value for the ref_libre field.
     * @var        string
     */
    protected $ref_libre;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the intitule field.
     * @var        string
     */
    protected $intitule;

    /**
     * The value for the id_type_procedure field.
     * @var        int
     */
    protected $id_type_procedure;

    /**
     * The value for the id_categorie field.
     * @var        int
     */
    protected $id_categorie;

    /**
     * The value for the service_gestionnaire field.
     * @var        string
     */
    protected $service_gestionnaire;

    /**
     * The value for the id_service_gestionnaire field.
     * @var        int
     */
    protected $id_service_gestionnaire;

    /**
     * The value for the service_associe field.
     * @var        string
     */
    protected $service_associe;

    /**
     * The value for the id_service_associe field.
     * @var        int
     */
    protected $id_service_associe;

    /**
     * The value for the date_cloture field.
     * @var        string
     */
    protected $date_cloture;

    /**
     * The value for the date_mise_en_ligne field.
     * @var        string
     */
    protected $date_mise_en_ligne;

    /**
     * The value for the id_consultation field.
     * @var        int
     */
    protected $id_consultation;

    /**
     * @var        CommonTCAOCommission
     */
    protected $aCommonTCAOCommission;

    /**
     * @var        CommonOrganisme
     */
    protected $aCommonOrganisme;

    /**
     * @var        PropelObjectCollection|CommonTCAOOrdreDePassage[] Collection to store aggregation of CommonTCAOOrdreDePassage objects.
     */
    protected $collCommonTCAOOrdreDePassages;
    protected $collCommonTCAOOrdreDePassagesPartial;

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
    protected $commonTCAOOrdreDePassagesScheduledForDeletion = null;

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
     * Get the [id_commission] column value.
     * 
     * @return string
     */
    public function getIdCommission()
    {

        return $this->id_commission;
    }

    /**
     * Get the [ref_consultation] column value.
     * 
     * @return string
     */
    public function getRefConsultation()
    {

        return $this->ref_consultation;
    }

    /**
     * Get the [ref_libre] column value.
     * 
     * @return string
     */
    public function getRefLibre()
    {

        return $this->ref_libre;
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
     * Get the [intitule] column value.
     * 
     * @return string
     */
    public function getIntitule()
    {

        return $this->intitule;
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
     * Get the [id_categorie] column value.
     * 
     * @return int
     */
    public function getIdCategorie()
    {

        return $this->id_categorie;
    }

    /**
     * Get the [service_gestionnaire] column value.
     * 
     * @return string
     */
    public function getServiceGestionnaire()
    {

        return $this->service_gestionnaire;
    }

    /**
     * Get the [id_service_gestionnaire] column value.
     * 
     * @return int
     */
    public function getIdServiceGestionnaire()
    {

        return $this->id_service_gestionnaire;
    }

    /**
     * Get the [service_associe] column value.
     * 
     * @return string
     */
    public function getServiceAssocie()
    {

        return $this->service_associe;
    }

    /**
     * Get the [id_service_associe] column value.
     * 
     * @return int
     */
    public function getIdServiceAssocie()
    {

        return $this->id_service_associe;
    }

    /**
     * Get the [optionally formatted] temporal [date_cloture] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCloture($format = 'Y-m-d H:i:s')
    {
        if ($this->date_cloture === null) {
            return null;
        }

        if ($this->date_cloture === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_cloture);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_cloture, true), $x);
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
     * Get the [optionally formatted] temporal [date_mise_en_ligne] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateMiseEnLigne($format = 'Y-m-d H:i:s')
    {
        if ($this->date_mise_en_ligne === null) {
            return null;
        }

        if ($this->date_mise_en_ligne === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_mise_en_ligne);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_mise_en_ligne, true), $x);
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
     * Get the [id_consultation] column value.
     * 
     * @return int
     */
    public function getIdConsultation()
    {

        return $this->id_consultation;
    }

    /**
     * Set the value of [id_commission_consultation] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setIdCommissionConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_commission_consultation !== $v) {
            $this->id_commission_consultation = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION;
        }


        return $this;
    } // setIdCommissionConsultation()

    /**
     * Set the value of [id_commission] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setIdCommission($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_commission !== $v) {
            $this->id_commission = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::ID_COMMISSION;
        }

        if ($this->aCommonTCAOCommission !== null && $this->aCommonTCAOCommission->getIdCommission() !== $v) {
            $this->aCommonTCAOCommission = null;
        }


        return $this;
    } // setIdCommission()

    /**
     * Set the value of [ref_consultation] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setRefConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ref_consultation !== $v) {
            $this->ref_consultation = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::REF_CONSULTATION;
        }


        return $this;
    } // setRefConsultation()

    /**
     * Set the value of [ref_libre] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setRefLibre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ref_libre !== $v) {
            $this->ref_libre = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::REF_LIBRE;
        }


        return $this;
    } // setRefLibre()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::ORGANISME;
        }

        if ($this->aCommonOrganisme !== null && $this->aCommonOrganisme->getAcronyme() !== $v) {
            $this->aCommonOrganisme = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::INTITULE;
        }


        return $this;
    } // setIntitule()

    /**
     * Set the value of [id_type_procedure] column.
     * 
     * @param int $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setIdTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_procedure !== $v) {
            $this->id_type_procedure = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::ID_TYPE_PROCEDURE;
        }


        return $this;
    } // setIdTypeProcedure()

    /**
     * Set the value of [id_categorie] column.
     * 
     * @param int $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setIdCategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_categorie !== $v) {
            $this->id_categorie = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::ID_CATEGORIE;
        }


        return $this;
    } // setIdCategorie()

    /**
     * Set the value of [service_gestionnaire] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setServiceGestionnaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->service_gestionnaire !== $v) {
            $this->service_gestionnaire = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::SERVICE_GESTIONNAIRE;
        }


        return $this;
    } // setServiceGestionnaire()

    /**
     * Set the value of [id_service_gestionnaire] column.
     * 
     * @param int $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setIdServiceGestionnaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service_gestionnaire !== $v) {
            $this->id_service_gestionnaire = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::ID_SERVICE_GESTIONNAIRE;
        }


        return $this;
    } // setIdServiceGestionnaire()

    /**
     * Set the value of [service_associe] column.
     * 
     * @param string $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setServiceAssocie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->service_associe !== $v) {
            $this->service_associe = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::SERVICE_ASSOCIE;
        }


        return $this;
    } // setServiceAssocie()

    /**
     * Set the value of [id_service_associe] column.
     * 
     * @param int $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setIdServiceAssocie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service_associe !== $v) {
            $this->id_service_associe = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::ID_SERVICE_ASSOCIE;
        }


        return $this;
    } // setIdServiceAssocie()

    /**
     * Sets the value of [date_cloture] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setDateCloture($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_cloture !== null || $dt !== null) {
            $currentDateAsString = ($this->date_cloture !== null && $tmpDt = new DateTime($this->date_cloture)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_cloture = $newDateAsString;
                $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::DATE_CLOTURE;
            }
        } // if either are not null


        return $this;
    } // setDateCloture()

    /**
     * Sets the value of [date_mise_en_ligne] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setDateMiseEnLigne($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_mise_en_ligne !== null || $dt !== null) {
            $currentDateAsString = ($this->date_mise_en_ligne !== null && $tmpDt = new DateTime($this->date_mise_en_ligne)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_mise_en_ligne = $newDateAsString;
                $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::DATE_MISE_EN_LIGNE;
            }
        } // if either are not null


        return $this;
    } // setDateMiseEnLigne()

    /**
     * Set the value of [id_consultation] column.
     * 
     * @param int $v new value
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setIdConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_consultation !== $v) {
            $this->id_consultation = $v;
            $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::ID_CONSULTATION;
        }


        return $this;
    } // setIdConsultation()

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

            $this->id_commission_consultation = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->id_commission = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->ref_consultation = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->ref_libre = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->organisme = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->intitule = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->id_type_procedure = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_categorie = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->service_gestionnaire = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->id_service_gestionnaire = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->service_associe = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->id_service_associe = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->date_cloture = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->date_mise_en_ligne = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->id_consultation = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = CommonTCAOCommissionConsultationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCAOCommissionConsultation object", $e);
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

        if ($this->aCommonTCAOCommission !== null && $this->id_commission !== $this->aCommonTCAOCommission->getIdCommission()) {
            $this->aCommonTCAOCommission = null;
        }
        if ($this->aCommonOrganisme !== null && $this->organisme !== $this->aCommonOrganisme->getAcronyme()) {
            $this->aCommonOrganisme = null;
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
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCAOCommissionConsultationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonTCAOCommission = null;
            $this->aCommonOrganisme = null;
            $this->collCommonTCAOOrdreDePassages = null;

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
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCAOCommissionConsultationQuery::create()
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
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCAOCommissionConsultationPeer::addInstanceToPool($this);
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

            if ($this->aCommonTCAOCommission !== null) {
                if ($this->aCommonTCAOCommission->isModified() || $this->aCommonTCAOCommission->isNew()) {
                    $affectedRows += $this->aCommonTCAOCommission->save($con);
                }
                $this->setCommonTCAOCommission($this->aCommonTCAOCommission);
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

            if ($this->commonTCAOOrdreDePassagesScheduledForDeletion !== null) {
                if (!$this->commonTCAOOrdreDePassagesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOOrdreDePassagesScheduledForDeletion as $commonTCAOOrdreDePassage) {
                        // need to save related object because we set the relation to null
                        $commonTCAOOrdreDePassage->save($con);
                    }
                    $this->commonTCAOOrdreDePassagesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOOrdreDePassages !== null) {
                foreach ($this->collCommonTCAOOrdreDePassages as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION;
        if (null !== $this->id_commission_consultation) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_commission_consultation`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_COMMISSION)) {
            $modifiedColumns[':p' . $index++]  = '`id_commission`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::REF_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`ref_consultation`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::REF_LIBRE)) {
            $modifiedColumns[':p' . $index++]  = '`ref_libre`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`intitule`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_procedure`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_CATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`id_categorie`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::SERVICE_GESTIONNAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`service_gestionnaire`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_SERVICE_GESTIONNAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service_gestionnaire`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::SERVICE_ASSOCIE)) {
            $modifiedColumns[':p' . $index++]  = '`service_associe`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_SERVICE_ASSOCIE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service_associe`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::DATE_CLOTURE)) {
            $modifiedColumns[':p' . $index++]  = '`date_cloture`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::DATE_MISE_EN_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`date_mise_en_ligne`';
        }
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_consultation`';
        }

        $sql = sprintf(
            'INSERT INTO `t_CAO_Commission_Consultation` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_commission_consultation`':						
                        $stmt->bindValue($identifier, $this->id_commission_consultation, PDO::PARAM_STR);
                        break;
                    case '`id_commission`':						
                        $stmt->bindValue($identifier, $this->id_commission, PDO::PARAM_STR);
                        break;
                    case '`ref_consultation`':						
                        $stmt->bindValue($identifier, $this->ref_consultation, PDO::PARAM_STR);
                        break;
                    case '`ref_libre`':						
                        $stmt->bindValue($identifier, $this->ref_libre, PDO::PARAM_STR);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`intitule`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
                        break;
                    case '`id_type_procedure`':						
                        $stmt->bindValue($identifier, $this->id_type_procedure, PDO::PARAM_INT);
                        break;
                    case '`id_categorie`':						
                        $stmt->bindValue($identifier, $this->id_categorie, PDO::PARAM_INT);
                        break;
                    case '`service_gestionnaire`':						
                        $stmt->bindValue($identifier, $this->service_gestionnaire, PDO::PARAM_STR);
                        break;
                    case '`id_service_gestionnaire`':						
                        $stmt->bindValue($identifier, $this->id_service_gestionnaire, PDO::PARAM_INT);
                        break;
                    case '`service_associe`':						
                        $stmt->bindValue($identifier, $this->service_associe, PDO::PARAM_STR);
                        break;
                    case '`id_service_associe`':						
                        $stmt->bindValue($identifier, $this->id_service_associe, PDO::PARAM_INT);
                        break;
                    case '`date_cloture`':						
                        $stmt->bindValue($identifier, $this->date_cloture, PDO::PARAM_STR);
                        break;
                    case '`date_mise_en_ligne`':						
                        $stmt->bindValue($identifier, $this->date_mise_en_ligne, PDO::PARAM_STR);
                        break;
                    case '`id_consultation`':						
                        $stmt->bindValue($identifier, $this->id_consultation, PDO::PARAM_INT);
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
        $this->setIdCommissionConsultation($pk);

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

            if ($this->aCommonTCAOCommission !== null) {
                if (!$this->aCommonTCAOCommission->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTCAOCommission->getValidationFailures());
                }
            }

            if ($this->aCommonOrganisme !== null) {
                if (!$this->aCommonOrganisme->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonOrganisme->getValidationFailures());
                }
            }


            if (($retval = CommonTCAOCommissionConsultationPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTCAOOrdreDePassages !== null) {
                    foreach ($this->collCommonTCAOOrdreDePassages as $referrerFK) {
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
        $pos = CommonTCAOCommissionConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdCommissionConsultation();
                break;
            case 1:
                return $this->getIdCommission();
                break;
            case 2:
                return $this->getRefConsultation();
                break;
            case 3:
                return $this->getRefLibre();
                break;
            case 4:
                return $this->getOrganisme();
                break;
            case 5:
                return $this->getIntitule();
                break;
            case 6:
                return $this->getIdTypeProcedure();
                break;
            case 7:
                return $this->getIdCategorie();
                break;
            case 8:
                return $this->getServiceGestionnaire();
                break;
            case 9:
                return $this->getIdServiceGestionnaire();
                break;
            case 10:
                return $this->getServiceAssocie();
                break;
            case 11:
                return $this->getIdServiceAssocie();
                break;
            case 12:
                return $this->getDateCloture();
                break;
            case 13:
                return $this->getDateMiseEnLigne();
                break;
            case 14:
                return $this->getIdConsultation();
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
        if (isset($alreadyDumpedObjects['CommonTCAOCommissionConsultation'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCAOCommissionConsultation'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTCAOCommissionConsultationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCommissionConsultation(),
            $keys[1] => $this->getIdCommission(),
            $keys[2] => $this->getRefConsultation(),
            $keys[3] => $this->getRefLibre(),
            $keys[4] => $this->getOrganisme(),
            $keys[5] => $this->getIntitule(),
            $keys[6] => $this->getIdTypeProcedure(),
            $keys[7] => $this->getIdCategorie(),
            $keys[8] => $this->getServiceGestionnaire(),
            $keys[9] => $this->getIdServiceGestionnaire(),
            $keys[10] => $this->getServiceAssocie(),
            $keys[11] => $this->getIdServiceAssocie(),
            $keys[12] => $this->getDateCloture(),
            $keys[13] => $this->getDateMiseEnLigne(),
            $keys[14] => $this->getIdConsultation(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonTCAOCommission) {
                $result['CommonTCAOCommission'] = $this->aCommonTCAOCommission->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonOrganisme) {
                $result['CommonOrganisme'] = $this->aCommonOrganisme->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonTCAOOrdreDePassages) {
                $result['CommonTCAOOrdreDePassages'] = $this->collCommonTCAOOrdreDePassages->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTCAOCommissionConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdCommissionConsultation($value);
                break;
            case 1:
                $this->setIdCommission($value);
                break;
            case 2:
                $this->setRefConsultation($value);
                break;
            case 3:
                $this->setRefLibre($value);
                break;
            case 4:
                $this->setOrganisme($value);
                break;
            case 5:
                $this->setIntitule($value);
                break;
            case 6:
                $this->setIdTypeProcedure($value);
                break;
            case 7:
                $this->setIdCategorie($value);
                break;
            case 8:
                $this->setServiceGestionnaire($value);
                break;
            case 9:
                $this->setIdServiceGestionnaire($value);
                break;
            case 10:
                $this->setServiceAssocie($value);
                break;
            case 11:
                $this->setIdServiceAssocie($value);
                break;
            case 12:
                $this->setDateCloture($value);
                break;
            case 13:
                $this->setDateMiseEnLigne($value);
                break;
            case 14:
                $this->setIdConsultation($value);
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
        $keys = CommonTCAOCommissionConsultationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdCommissionConsultation($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdCommission($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRefConsultation($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRefLibre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrganisme($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIntitule($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdTypeProcedure($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdCategorie($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setServiceGestionnaire($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIdServiceGestionnaire($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setServiceAssocie($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdServiceAssocie($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateCloture($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDateMiseEnLigne($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdConsultation($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION)) $criteria->add(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $this->id_commission_consultation);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_COMMISSION)) $criteria->add(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, $this->id_commission);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::REF_CONSULTATION)) $criteria->add(CommonTCAOCommissionConsultationPeer::REF_CONSULTATION, $this->ref_consultation);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::REF_LIBRE)) $criteria->add(CommonTCAOCommissionConsultationPeer::REF_LIBRE, $this->ref_libre);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ORGANISME)) $criteria->add(CommonTCAOCommissionConsultationPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::INTITULE)) $criteria->add(CommonTCAOCommissionConsultationPeer::INTITULE, $this->intitule);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_TYPE_PROCEDURE)) $criteria->add(CommonTCAOCommissionConsultationPeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_CATEGORIE)) $criteria->add(CommonTCAOCommissionConsultationPeer::ID_CATEGORIE, $this->id_categorie);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::SERVICE_GESTIONNAIRE)) $criteria->add(CommonTCAOCommissionConsultationPeer::SERVICE_GESTIONNAIRE, $this->service_gestionnaire);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_SERVICE_GESTIONNAIRE)) $criteria->add(CommonTCAOCommissionConsultationPeer::ID_SERVICE_GESTIONNAIRE, $this->id_service_gestionnaire);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::SERVICE_ASSOCIE)) $criteria->add(CommonTCAOCommissionConsultationPeer::SERVICE_ASSOCIE, $this->service_associe);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_SERVICE_ASSOCIE)) $criteria->add(CommonTCAOCommissionConsultationPeer::ID_SERVICE_ASSOCIE, $this->id_service_associe);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::DATE_CLOTURE)) $criteria->add(CommonTCAOCommissionConsultationPeer::DATE_CLOTURE, $this->date_cloture);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::DATE_MISE_EN_LIGNE)) $criteria->add(CommonTCAOCommissionConsultationPeer::DATE_MISE_EN_LIGNE, $this->date_mise_en_ligne);
        if ($this->isColumnModified(CommonTCAOCommissionConsultationPeer::ID_CONSULTATION)) $criteria->add(CommonTCAOCommissionConsultationPeer::ID_CONSULTATION, $this->id_consultation);

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
        $criteria = new Criteria(CommonTCAOCommissionConsultationPeer::DATABASE_NAME);
        $criteria->add(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $this->id_commission_consultation);
        $criteria->add(CommonTCAOCommissionConsultationPeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdCommissionConsultation();
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
        $this->setIdCommissionConsultation($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdCommissionConsultation()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTCAOCommissionConsultation (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdCommission($this->getIdCommission());
        $copyObj->setRefConsultation($this->getRefConsultation());
        $copyObj->setRefLibre($this->getRefLibre());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIntitule($this->getIntitule());
        $copyObj->setIdTypeProcedure($this->getIdTypeProcedure());
        $copyObj->setIdCategorie($this->getIdCategorie());
        $copyObj->setServiceGestionnaire($this->getServiceGestionnaire());
        $copyObj->setIdServiceGestionnaire($this->getIdServiceGestionnaire());
        $copyObj->setServiceAssocie($this->getServiceAssocie());
        $copyObj->setIdServiceAssocie($this->getIdServiceAssocie());
        $copyObj->setDateCloture($this->getDateCloture());
        $copyObj->setDateMiseEnLigne($this->getDateMiseEnLigne());
        $copyObj->setIdConsultation($this->getIdConsultation());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTCAOOrdreDePassages() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOOrdreDePassage($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCommissionConsultation(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTCAOCommissionConsultation Clone of current object.
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
     * @return CommonTCAOCommissionConsultationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCAOCommissionConsultationPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonTCAOCommission object.
     *
     * @param   CommonTCAOCommission $v
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
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
            $v->addCommonTCAOCommissionConsultation($this);
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
                ->filterByCommonTCAOCommissionConsultation($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTCAOCommission->addCommonTCAOCommissionConsultations($this);
             */
        }

        return $this->aCommonTCAOCommission;
    }

    /**
     * Declares an association between this object and a CommonOrganisme object.
     *
     * @param   CommonOrganisme $v
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
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
            $v->addCommonTCAOCommissionConsultation($this);
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
                ->filterByCommonTCAOCommissionConsultation($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonOrganisme->addCommonTCAOCommissionConsultations($this);
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
        if ('CommonTCAOOrdreDePassage' == $relationName) {
            $this->initCommonTCAOOrdreDePassages();
        }
    }

    /**
     * Clears out the collCommonTCAOOrdreDePassages collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     * @see        addCommonTCAOOrdreDePassages()
     */
    public function clearCommonTCAOOrdreDePassages()
    {
        $this->collCommonTCAOOrdreDePassages = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOOrdreDePassagesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOOrdreDePassages collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOOrdreDePassages($v = true)
    {
        $this->collCommonTCAOOrdreDePassagesPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOOrdreDePassages collection.
     *
     * By default this just sets the collCommonTCAOOrdreDePassages collection to an empty array (like clearcollCommonTCAOOrdreDePassages());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOOrdreDePassages($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOOrdreDePassages && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOOrdreDePassages = new PropelObjectCollection();
        $this->collCommonTCAOOrdreDePassages->setModel('CommonTCAOOrdreDePassage');
    }

    /**
     * Gets an array of CommonTCAOOrdreDePassage objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCAOCommissionConsultation is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     * @throws PropelException
     */
    public function getCommonTCAOOrdreDePassages($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOOrdreDePassagesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOOrdreDePassages || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOOrdreDePassages) {
                // return empty collection
                $this->initCommonTCAOOrdreDePassages();
            } else {
                $collCommonTCAOOrdreDePassages = CommonTCAOOrdreDePassageQuery::create(null, $criteria)
                    ->filterByCommonTCAOCommissionConsultation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOOrdreDePassagesPartial && count($collCommonTCAOOrdreDePassages)) {
                      $this->initCommonTCAOOrdreDePassages(false);

                      foreach ($collCommonTCAOOrdreDePassages as $obj) {
                        if (false == $this->collCommonTCAOOrdreDePassages->contains($obj)) {
                          $this->collCommonTCAOOrdreDePassages->append($obj);
                        }
                      }

                      $this->collCommonTCAOOrdreDePassagesPartial = true;
                    }

                    $collCommonTCAOOrdreDePassages->getInternalIterator()->rewind();

                    return $collCommonTCAOOrdreDePassages;
                }

                if ($partial && $this->collCommonTCAOOrdreDePassages) {
                    foreach ($this->collCommonTCAOOrdreDePassages as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOOrdreDePassages[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOOrdreDePassages = $collCommonTCAOOrdreDePassages;
                $this->collCommonTCAOOrdreDePassagesPartial = false;
            }
        }

        return $this->collCommonTCAOOrdreDePassages;
    }

    /**
     * Sets a collection of CommonTCAOOrdreDePassage objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOOrdreDePassages A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function setCommonTCAOOrdreDePassages(PropelCollection $commonTCAOOrdreDePassages, PropelPDO $con = null)
    {
        $commonTCAOOrdreDePassagesToDelete = $this->getCommonTCAOOrdreDePassages(new Criteria(), $con)->diff($commonTCAOOrdreDePassages);


        $this->commonTCAOOrdreDePassagesScheduledForDeletion = $commonTCAOOrdreDePassagesToDelete;

        foreach ($commonTCAOOrdreDePassagesToDelete as $commonTCAOOrdreDePassageRemoved) {
            $commonTCAOOrdreDePassageRemoved->setCommonTCAOCommissionConsultation(null);
        }

        $this->collCommonTCAOOrdreDePassages = null;
        foreach ($commonTCAOOrdreDePassages as $commonTCAOOrdreDePassage) {
            $this->addCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage);
        }

        $this->collCommonTCAOOrdreDePassages = $commonTCAOOrdreDePassages;
        $this->collCommonTCAOOrdreDePassagesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOOrdreDePassage objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOOrdreDePassage objects.
     * @throws PropelException
     */
    public function countCommonTCAOOrdreDePassages(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOOrdreDePassagesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOOrdreDePassages || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOOrdreDePassages) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOOrdreDePassages());
            }
            $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCAOCommissionConsultation($this)
                ->count($con);
        }

        return count($this->collCommonTCAOOrdreDePassages);
    }

    /**
     * Method called to associate a CommonTCAOOrdreDePassage object to this object
     * through the CommonTCAOOrdreDePassage foreign key attribute.
     *
     * @param   CommonTCAOOrdreDePassage $l CommonTCAOOrdreDePassage
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function addCommonTCAOOrdreDePassage(CommonTCAOOrdreDePassage $l)
    {
        if ($this->collCommonTCAOOrdreDePassages === null) {
            $this->initCommonTCAOOrdreDePassages();
            $this->collCommonTCAOOrdreDePassagesPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOOrdreDePassages->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOOrdreDePassage($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOOrdreDePassage $commonTCAOOrdreDePassage The commonTCAOOrdreDePassage object to add.
     */
    protected function doAddCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage)
    {
        $this->collCommonTCAOOrdreDePassages[]= $commonTCAOOrdreDePassage;
        $commonTCAOOrdreDePassage->setCommonTCAOCommissionConsultation($this);
    }

    /**
     * @param	CommonTCAOOrdreDePassage $commonTCAOOrdreDePassage The commonTCAOOrdreDePassage object to remove.
     * @return CommonTCAOCommissionConsultation The current object (for fluent API support)
     */
    public function removeCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage)
    {
        if ($this->getCommonTCAOOrdreDePassages()->contains($commonTCAOOrdreDePassage)) {
            $this->collCommonTCAOOrdreDePassages->remove($this->collCommonTCAOOrdreDePassages->search($commonTCAOOrdreDePassage));
            if (null === $this->commonTCAOOrdreDePassagesScheduledForDeletion) {
                $this->commonTCAOOrdreDePassagesScheduledForDeletion = clone $this->collCommonTCAOOrdreDePassages;
                $this->commonTCAOOrdreDePassagesScheduledForDeletion->clear();
            }
            $this->commonTCAOOrdreDePassagesScheduledForDeletion[]= clone $commonTCAOOrdreDePassage;
            $commonTCAOOrdreDePassage->setCommonTCAOCommissionConsultation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommissionConsultation is new, it will return
     * an empty collection; or if this CommonTCAOCommissionConsultation has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommissionConsultation.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonTCAOSeanceRelatedByDateSeance($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOSeanceRelatedByDateSeance', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommissionConsultation is new, it will return
     * an empty collection; or if this CommonTCAOCommissionConsultation has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommissionConsultation.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonTCAOCommission($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOCommission', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommissionConsultation is new, it will return
     * an empty collection; or if this CommonTCAOCommissionConsultation has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommissionConsultation.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonTCAOSeanceRelatedByIdSeance($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOSeanceRelatedByIdSeance', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCAOCommissionConsultation is new, it will return
     * an empty collection; or if this CommonTCAOCommissionConsultation has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCAOCommissionConsultation.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonOrganisme', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_commission_consultation = null;
        $this->id_commission = null;
        $this->ref_consultation = null;
        $this->ref_libre = null;
        $this->organisme = null;
        $this->intitule = null;
        $this->id_type_procedure = null;
        $this->id_categorie = null;
        $this->service_gestionnaire = null;
        $this->id_service_gestionnaire = null;
        $this->service_associe = null;
        $this->id_service_associe = null;
        $this->date_cloture = null;
        $this->date_mise_en_ligne = null;
        $this->id_consultation = null;
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
            if ($this->collCommonTCAOOrdreDePassages) {
                foreach ($this->collCommonTCAOOrdreDePassages as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonTCAOCommission instanceof Persistent) {
              $this->aCommonTCAOCommission->clearAllReferences($deep);
            }
            if ($this->aCommonOrganisme instanceof Persistent) {
              $this->aCommonOrganisme->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTCAOOrdreDePassages instanceof PropelCollection) {
            $this->collCommonTCAOOrdreDePassages->clearIterator();
        }
        $this->collCommonTCAOOrdreDePassages = null;
        $this->aCommonTCAOCommission = null;
        $this->aCommonOrganisme = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTCAOCommissionConsultationPeer::DEFAULT_STRING_FORMAT);
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
