<?php


/**
 * Base class that represents a row from the 'EnchereReference' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEnchereReference extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEnchereReferencePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEnchereReferencePeer
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
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the idenchere field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $idenchere;

    /**
     * The value for the libelle field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the quantite field.
     * @var        double
     */
    protected $quantite;

    /**
     * The value for the ismontant field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $ismontant;

    /**
     * The value for the unite field.
     * @var        string
     */
    protected $unite;

    /**
     * The value for the pasmin field.
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $pasmin;

    /**
     * The value for the pasmax field.
     * @var        double
     */
    protected $pasmax;

    /**
     * The value for the valeurreference field.
     * @var        double
     */
    protected $valeurreference;

    /**
     * The value for the valeurdepartcommune field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $valeurdepartcommune;

    /**
     * The value for the valeurdepart field.
     * @var        double
     */
    protected $valeurdepart;

    /**
     * The value for the typebaremereference field.
     * @var        string
     */
    protected $typebaremereference;

    /**
     * The value for the ponderationnotereference field.
     * Note: this column has a database default value of: 1.0
     * @var        double
     */
    protected $ponderationnotereference;

    /**
     * The value for the notemaxbaremerelatif field.
     * @var        double
     */
    protected $notemaxbaremerelatif;

    /**
     * @var        CommonEncherePmi
     */
    protected $aCommonEncherePmiRelatedByIdenchere;

    /**
     * @var        CommonEncherePmi
     */
    protected $aCommonEncherePmiRelatedByIdenchereOrganisme;

    /**
     * @var        PropelObjectCollection|CommonEnchereOffreReference[] Collection to store aggregation of CommonEnchereOffreReference objects.
     */
    protected $collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme;
    protected $collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismePartial;

    /**
     * @var        PropelObjectCollection|CommonEnchereOffreReference[] Collection to store aggregation of CommonEnchereOffreReference objects.
     */
    protected $collCommonEnchereOffreReferencesRelatedByIdencherereference;
    protected $collCommonEnchereOffreReferencesRelatedByIdencherereferencePartial;

    /**
     * @var        PropelObjectCollection|CommonEnchereTrancheBaremeReference[] Collection to store aggregation of CommonEnchereTrancheBaremeReference objects.
     */
    protected $collCommonEnchereTrancheBaremeReferencesRelatedByIdreference;
    protected $collCommonEnchereTrancheBaremeReferencesRelatedByIdreferencePartial;

    /**
     * @var        PropelObjectCollection|CommonEnchereTrancheBaremeReference[] Collection to store aggregation of CommonEnchereTrancheBaremeReference objects.
     */
    protected $collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme;
    protected $collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismePartial;

    /**
     * @var        PropelObjectCollection|CommonEnchereValeursInitiales[] Collection to store aggregation of CommonEnchereValeursInitiales objects.
     */
    protected $collCommonEnchereValeursInitialess;
    protected $collCommonEnchereValeursInitialessPartial;

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
    protected $commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonEnchereOffreReferencesRelatedByIdencherereferenceScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonEnchereTrancheBaremeReferencesRelatedByIdreferenceScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonEnchereValeursInitialessScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->organisme = '';
        $this->idenchere = 0;
        $this->libelle = '';
        $this->ismontant = '1';
        $this->pasmin = 0.0;
        $this->valeurdepartcommune = '1';
        $this->ponderationnotereference = 1.0;
    }

    /**
     * Initializes internal state of BaseCommonEnchereReference object.
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
     * Get the [idenchere] column value.
     * 
     * @return int
     */
    public function getIdenchere()
    {

        return $this->idenchere;
    }

    /**
     * Get the [libelle] column value.
     * 
     * @return string
     */
    public function getLibelle()
    {

        return $this->libelle;
    }

    /**
     * Get the [quantite] column value.
     * 
     * @return double
     */
    public function getQuantite()
    {

        return $this->quantite;
    }

    /**
     * Get the [ismontant] column value.
     * 
     * @return string
     */
    public function getIsmontant()
    {

        return $this->ismontant;
    }

    /**
     * Get the [unite] column value.
     * 
     * @return string
     */
    public function getUnite()
    {

        return $this->unite;
    }

    /**
     * Get the [pasmin] column value.
     * 
     * @return double
     */
    public function getPasmin()
    {

        return $this->pasmin;
    }

    /**
     * Get the [pasmax] column value.
     * 
     * @return double
     */
    public function getPasmax()
    {

        return $this->pasmax;
    }

    /**
     * Get the [valeurreference] column value.
     * 
     * @return double
     */
    public function getValeurreference()
    {

        return $this->valeurreference;
    }

    /**
     * Get the [valeurdepartcommune] column value.
     * 
     * @return string
     */
    public function getValeurdepartcommune()
    {

        return $this->valeurdepartcommune;
    }

    /**
     * Get the [valeurdepart] column value.
     * 
     * @return double
     */
    public function getValeurdepart()
    {

        return $this->valeurdepart;
    }

    /**
     * Get the [typebaremereference] column value.
     * 
     * @return string
     */
    public function getTypebaremereference()
    {

        return $this->typebaremereference;
    }

    /**
     * Get the [ponderationnotereference] column value.
     * 
     * @return double
     */
    public function getPonderationnotereference()
    {

        return $this->ponderationnotereference;
    }

    /**
     * Get the [notemaxbaremerelatif] column value.
     * 
     * @return double
     */
    public function getNotemaxbaremerelatif()
    {

        return $this->notemaxbaremerelatif;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::ORGANISME;
        }

        if ($this->aCommonEncherePmiRelatedByIdenchereOrganisme !== null && $this->aCommonEncherePmiRelatedByIdenchereOrganisme->getOrganisme() !== $v) {
            $this->aCommonEncherePmiRelatedByIdenchereOrganisme = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [idenchere] column.
     * 
     * @param int $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setIdenchere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idenchere !== $v) {
            $this->idenchere = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::IDENCHERE;
        }

        if ($this->aCommonEncherePmiRelatedByIdenchere !== null && $this->aCommonEncherePmiRelatedByIdenchere->getId() !== $v) {
            $this->aCommonEncherePmiRelatedByIdenchere = null;
        }

        if ($this->aCommonEncherePmiRelatedByIdenchereOrganisme !== null && $this->aCommonEncherePmiRelatedByIdenchereOrganisme->getId() !== $v) {
            $this->aCommonEncherePmiRelatedByIdenchereOrganisme = null;
        }


        return $this;
    } // setIdenchere()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [quantite] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setQuantite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->quantite !== $v) {
            $this->quantite = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::QUANTITE;
        }


        return $this;
    } // setQuantite()

    /**
     * Set the value of [ismontant] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setIsmontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ismontant !== $v) {
            $this->ismontant = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::ISMONTANT;
        }


        return $this;
    } // setIsmontant()

    /**
     * Set the value of [unite] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setUnite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unite !== $v) {
            $this->unite = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::UNITE;
        }


        return $this;
    } // setUnite()

    /**
     * Set the value of [pasmin] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setPasmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pasmin !== $v) {
            $this->pasmin = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::PASMIN;
        }


        return $this;
    } // setPasmin()

    /**
     * Set the value of [pasmax] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setPasmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pasmax !== $v) {
            $this->pasmax = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::PASMAX;
        }


        return $this;
    } // setPasmax()

    /**
     * Set the value of [valeurreference] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setValeurreference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valeurreference !== $v) {
            $this->valeurreference = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::VALEURREFERENCE;
        }


        return $this;
    } // setValeurreference()

    /**
     * Set the value of [valeurdepartcommune] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setValeurdepartcommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeurdepartcommune !== $v) {
            $this->valeurdepartcommune = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE;
        }


        return $this;
    } // setValeurdepartcommune()

    /**
     * Set the value of [valeurdepart] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setValeurdepart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valeurdepart !== $v) {
            $this->valeurdepart = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::VALEURDEPART;
        }


        return $this;
    } // setValeurdepart()

    /**
     * Set the value of [typebaremereference] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setTypebaremereference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typebaremereference !== $v) {
            $this->typebaremereference = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::TYPEBAREMEREFERENCE;
        }


        return $this;
    } // setTypebaremereference()

    /**
     * Set the value of [ponderationnotereference] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setPonderationnotereference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ponderationnotereference !== $v) {
            $this->ponderationnotereference = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE;
        }


        return $this;
    } // setPonderationnotereference()

    /**
     * Set the value of [notemaxbaremerelatif] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setNotemaxbaremerelatif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->notemaxbaremerelatif !== $v) {
            $this->notemaxbaremerelatif = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF;
        }


        return $this;
    } // setNotemaxbaremerelatif()

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
            if ($this->organisme !== '') {
                return false;
            }

            if ($this->idenchere !== 0) {
                return false;
            }

            if ($this->libelle !== '') {
                return false;
            }

            if ($this->ismontant !== '1') {
                return false;
            }

            if ($this->pasmin !== 0.0) {
                return false;
            }

            if ($this->valeurdepartcommune !== '1') {
                return false;
            }

            if ($this->ponderationnotereference !== 1.0) {
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
            $this->idenchere = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->libelle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->quantite = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->ismontant = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->unite = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->pasmin = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->pasmax = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->valeurreference = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->valeurdepartcommune = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->valeurdepart = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->typebaremereference = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->ponderationnotereference = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->notemaxbaremerelatif = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = CommonEnchereReferencePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEnchereReference object", $e);
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

        if ($this->aCommonEncherePmiRelatedByIdenchereOrganisme !== null && $this->organisme !== $this->aCommonEncherePmiRelatedByIdenchereOrganisme->getOrganisme()) {
            $this->aCommonEncherePmiRelatedByIdenchereOrganisme = null;
        }
        if ($this->aCommonEncherePmiRelatedByIdenchere !== null && $this->idenchere !== $this->aCommonEncherePmiRelatedByIdenchere->getId()) {
            $this->aCommonEncherePmiRelatedByIdenchere = null;
        }
        if ($this->aCommonEncherePmiRelatedByIdenchereOrganisme !== null && $this->idenchere !== $this->aCommonEncherePmiRelatedByIdenchereOrganisme->getId()) {
            $this->aCommonEncherePmiRelatedByIdenchereOrganisme = null;
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
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEnchereReferencePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonEncherePmiRelatedByIdenchere = null;
            $this->aCommonEncherePmiRelatedByIdenchereOrganisme = null;
            $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme = null;

            $this->collCommonEnchereOffreReferencesRelatedByIdencherereference = null;

            $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference = null;

            $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme = null;

            $this->collCommonEnchereValeursInitialess = null;

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
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEnchereReferenceQuery::create()
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
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonEnchereReferencePeer::addInstanceToPool($this);
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

            if ($this->aCommonEncherePmiRelatedByIdenchere !== null) {
                if ($this->aCommonEncherePmiRelatedByIdenchere->isModified() || $this->aCommonEncherePmiRelatedByIdenchere->isNew()) {
                    $affectedRows += $this->aCommonEncherePmiRelatedByIdenchere->save($con);
                }
                $this->setCommonEncherePmiRelatedByIdenchere($this->aCommonEncherePmiRelatedByIdenchere);
            }

            if ($this->aCommonEncherePmiRelatedByIdenchereOrganisme !== null) {
                if ($this->aCommonEncherePmiRelatedByIdenchereOrganisme->isModified() || $this->aCommonEncherePmiRelatedByIdenchereOrganisme->isNew()) {
                    $affectedRows += $this->aCommonEncherePmiRelatedByIdenchereOrganisme->save($con);
                }
                $this->setCommonEncherePmiRelatedByIdenchereOrganisme($this->aCommonEncherePmiRelatedByIdenchereOrganisme);
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

            if ($this->commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeScheduledForDeletion !== null) {
                if (!$this->commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonEnchereOffreReferenceQuery::create()
                        ->filterByPrimaryKeys($this->commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeScheduledForDeletion = null;
                }
            }

            if ($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme !== null) {
                foreach ($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonEnchereOffreReferencesRelatedByIdencherereferenceScheduledForDeletion !== null) {
                if (!$this->commonEnchereOffreReferencesRelatedByIdencherereferenceScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonEnchereOffreReferenceQuery::create()
                        ->filterByPrimaryKeys($this->commonEnchereOffreReferencesRelatedByIdencherereferenceScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonEnchereOffreReferencesRelatedByIdencherereferenceScheduledForDeletion = null;
                }
            }

            if ($this->collCommonEnchereOffreReferencesRelatedByIdencherereference !== null) {
                foreach ($this->collCommonEnchereOffreReferencesRelatedByIdencherereference as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceScheduledForDeletion !== null) {
                if (!$this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonEnchereTrancheBaremeReferenceQuery::create()
                        ->filterByPrimaryKeys($this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceScheduledForDeletion = null;
                }
            }

            if ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference !== null) {
                foreach ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeScheduledForDeletion !== null) {
                if (!$this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonEnchereTrancheBaremeReferenceQuery::create()
                        ->filterByPrimaryKeys($this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeScheduledForDeletion = null;
                }
            }

            if ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme !== null) {
                foreach ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonEnchereValeursInitialessScheduledForDeletion !== null) {
                if (!$this->commonEnchereValeursInitialessScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonEnchereValeursInitialesQuery::create()
                        ->filterByPrimaryKeys($this->commonEnchereValeursInitialessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonEnchereValeursInitialessScheduledForDeletion = null;
                }
            }

            if ($this->collCommonEnchereValeursInitialess !== null) {
                foreach ($this->collCommonEnchereValeursInitialess as $referrerFK) {
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

        $this->modifiedColumns[] = CommonEnchereReferencePeer::ID;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonEnchereReferencePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::IDENCHERE)) {
            $modifiedColumns[':p' . $index++]  = '`idEnchere`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::QUANTITE)) {
            $modifiedColumns[':p' . $index++]  = '`quantite`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::ISMONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`isMontant`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::UNITE)) {
            $modifiedColumns[':p' . $index++]  = '`unite`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::PASMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pasMin`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::PASMAX)) {
            $modifiedColumns[':p' . $index++]  = '`pasMax`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURREFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`valeurReference`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`valeurDepartCommune`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURDEPART)) {
            $modifiedColumns[':p' . $index++]  = '`valeurDepart`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::TYPEBAREMEREFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`typeBaremeReference`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`ponderationNoteReference`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF)) {
            $modifiedColumns[':p' . $index++]  = '`noteMaxBaremeRelatif`';
        }

        $sql = sprintf(
            'INSERT INTO `EnchereReference` (%s) VALUES (%s)',
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
                    case '`idEnchere`':						
                        $stmt->bindValue($identifier, $this->idenchere, PDO::PARAM_INT);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`quantite`':						
                        $stmt->bindValue($identifier, $this->quantite, PDO::PARAM_STR);
                        break;
                    case '`isMontant`':						
                        $stmt->bindValue($identifier, $this->ismontant, PDO::PARAM_STR);
                        break;
                    case '`unite`':						
                        $stmt->bindValue($identifier, $this->unite, PDO::PARAM_STR);
                        break;
                    case '`pasMin`':						
                        $stmt->bindValue($identifier, $this->pasmin, PDO::PARAM_STR);
                        break;
                    case '`pasMax`':						
                        $stmt->bindValue($identifier, $this->pasmax, PDO::PARAM_STR);
                        break;
                    case '`valeurReference`':						
                        $stmt->bindValue($identifier, $this->valeurreference, PDO::PARAM_STR);
                        break;
                    case '`valeurDepartCommune`':						
                        $stmt->bindValue($identifier, $this->valeurdepartcommune, PDO::PARAM_STR);
                        break;
                    case '`valeurDepart`':						
                        $stmt->bindValue($identifier, $this->valeurdepart, PDO::PARAM_STR);
                        break;
                    case '`typeBaremeReference`':						
                        $stmt->bindValue($identifier, $this->typebaremereference, PDO::PARAM_STR);
                        break;
                    case '`ponderationNoteReference`':						
                        $stmt->bindValue($identifier, $this->ponderationnotereference, PDO::PARAM_STR);
                        break;
                    case '`noteMaxBaremeRelatif`':						
                        $stmt->bindValue($identifier, $this->notemaxbaremerelatif, PDO::PARAM_STR);
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
        if ($pk !== null) {
            $this->setId($pk);
        }

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

            if ($this->aCommonEncherePmiRelatedByIdenchere !== null) {
                if (!$this->aCommonEncherePmiRelatedByIdenchere->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonEncherePmiRelatedByIdenchere->getValidationFailures());
                }
            }

            if ($this->aCommonEncherePmiRelatedByIdenchereOrganisme !== null) {
                if (!$this->aCommonEncherePmiRelatedByIdenchereOrganisme->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonEncherePmiRelatedByIdenchereOrganisme->getValidationFailures());
                }
            }


            if (($retval = CommonEnchereReferencePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme !== null) {
                    foreach ($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonEnchereOffreReferencesRelatedByIdencherereference !== null) {
                    foreach ($this->collCommonEnchereOffreReferencesRelatedByIdencherereference as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference !== null) {
                    foreach ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme !== null) {
                    foreach ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonEnchereValeursInitialess !== null) {
                    foreach ($this->collCommonEnchereValeursInitialess as $referrerFK) {
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
        $pos = CommonEnchereReferencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdenchere();
                break;
            case 3:
                return $this->getLibelle();
                break;
            case 4:
                return $this->getQuantite();
                break;
            case 5:
                return $this->getIsmontant();
                break;
            case 6:
                return $this->getUnite();
                break;
            case 7:
                return $this->getPasmin();
                break;
            case 8:
                return $this->getPasmax();
                break;
            case 9:
                return $this->getValeurreference();
                break;
            case 10:
                return $this->getValeurdepartcommune();
                break;
            case 11:
                return $this->getValeurdepart();
                break;
            case 12:
                return $this->getTypebaremereference();
                break;
            case 13:
                return $this->getPonderationnotereference();
                break;
            case 14:
                return $this->getNotemaxbaremerelatif();
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
        if (isset($alreadyDumpedObjects['CommonEnchereReference'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEnchereReference'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonEnchereReferencePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdenchere(),
            $keys[3] => $this->getLibelle(),
            $keys[4] => $this->getQuantite(),
            $keys[5] => $this->getIsmontant(),
            $keys[6] => $this->getUnite(),
            $keys[7] => $this->getPasmin(),
            $keys[8] => $this->getPasmax(),
            $keys[9] => $this->getValeurreference(),
            $keys[10] => $this->getValeurdepartcommune(),
            $keys[11] => $this->getValeurdepart(),
            $keys[12] => $this->getTypebaremereference(),
            $keys[13] => $this->getPonderationnotereference(),
            $keys[14] => $this->getNotemaxbaremerelatif(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonEncherePmiRelatedByIdenchere) {
                $result['CommonEncherePmiRelatedByIdenchere'] = $this->aCommonEncherePmiRelatedByIdenchere->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonEncherePmiRelatedByIdenchereOrganisme) {
                $result['CommonEncherePmiRelatedByIdenchereOrganisme'] = $this->aCommonEncherePmiRelatedByIdenchereOrganisme->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme) {
                $result['CommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme'] = $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonEnchereOffreReferencesRelatedByIdencherereference) {
                $result['CommonEnchereOffreReferencesRelatedByIdencherereference'] = $this->collCommonEnchereOffreReferencesRelatedByIdencherereference->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference) {
                $result['CommonEnchereTrancheBaremeReferencesRelatedByIdreference'] = $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme) {
                $result['CommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme'] = $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonEnchereValeursInitialess) {
                $result['CommonEnchereValeursInitialess'] = $this->collCommonEnchereValeursInitialess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonEnchereReferencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdenchere($value);
                break;
            case 3:
                $this->setLibelle($value);
                break;
            case 4:
                $this->setQuantite($value);
                break;
            case 5:
                $this->setIsmontant($value);
                break;
            case 6:
                $this->setUnite($value);
                break;
            case 7:
                $this->setPasmin($value);
                break;
            case 8:
                $this->setPasmax($value);
                break;
            case 9:
                $this->setValeurreference($value);
                break;
            case 10:
                $this->setValeurdepartcommune($value);
                break;
            case 11:
                $this->setValeurdepart($value);
                break;
            case 12:
                $this->setTypebaremereference($value);
                break;
            case 13:
                $this->setPonderationnotereference($value);
                break;
            case 14:
                $this->setNotemaxbaremerelatif($value);
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
        $keys = CommonEnchereReferencePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdenchere($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setQuantite($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIsmontant($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUnite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPasmin($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPasmax($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setValeurreference($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setValeurdepartcommune($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setValeurdepart($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTypebaremereference($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPonderationnotereference($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNotemaxbaremerelatif($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEnchereReferencePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEnchereReferencePeer::ID)) $criteria->add(CommonEnchereReferencePeer::ID, $this->id);
        if ($this->isColumnModified(CommonEnchereReferencePeer::ORGANISME)) $criteria->add(CommonEnchereReferencePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonEnchereReferencePeer::IDENCHERE)) $criteria->add(CommonEnchereReferencePeer::IDENCHERE, $this->idenchere);
        if ($this->isColumnModified(CommonEnchereReferencePeer::LIBELLE)) $criteria->add(CommonEnchereReferencePeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonEnchereReferencePeer::QUANTITE)) $criteria->add(CommonEnchereReferencePeer::QUANTITE, $this->quantite);
        if ($this->isColumnModified(CommonEnchereReferencePeer::ISMONTANT)) $criteria->add(CommonEnchereReferencePeer::ISMONTANT, $this->ismontant);
        if ($this->isColumnModified(CommonEnchereReferencePeer::UNITE)) $criteria->add(CommonEnchereReferencePeer::UNITE, $this->unite);
        if ($this->isColumnModified(CommonEnchereReferencePeer::PASMIN)) $criteria->add(CommonEnchereReferencePeer::PASMIN, $this->pasmin);
        if ($this->isColumnModified(CommonEnchereReferencePeer::PASMAX)) $criteria->add(CommonEnchereReferencePeer::PASMAX, $this->pasmax);
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURREFERENCE)) $criteria->add(CommonEnchereReferencePeer::VALEURREFERENCE, $this->valeurreference);
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE)) $criteria->add(CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE, $this->valeurdepartcommune);
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURDEPART)) $criteria->add(CommonEnchereReferencePeer::VALEURDEPART, $this->valeurdepart);
        if ($this->isColumnModified(CommonEnchereReferencePeer::TYPEBAREMEREFERENCE)) $criteria->add(CommonEnchereReferencePeer::TYPEBAREMEREFERENCE, $this->typebaremereference);
        if ($this->isColumnModified(CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE)) $criteria->add(CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE, $this->ponderationnotereference);
        if ($this->isColumnModified(CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF)) $criteria->add(CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF, $this->notemaxbaremerelatif);

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
        $criteria = new Criteria(CommonEnchereReferencePeer::DATABASE_NAME);
        $criteria->add(CommonEnchereReferencePeer::ID, $this->id);
        $criteria->add(CommonEnchereReferencePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonEnchereReference (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdenchere($this->getIdenchere());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setQuantite($this->getQuantite());
        $copyObj->setIsmontant($this->getIsmontant());
        $copyObj->setUnite($this->getUnite());
        $copyObj->setPasmin($this->getPasmin());
        $copyObj->setPasmax($this->getPasmax());
        $copyObj->setValeurreference($this->getValeurreference());
        $copyObj->setValeurdepartcommune($this->getValeurdepartcommune());
        $copyObj->setValeurdepart($this->getValeurdepart());
        $copyObj->setTypebaremereference($this->getTypebaremereference());
        $copyObj->setPonderationnotereference($this->getPonderationnotereference());
        $copyObj->setNotemaxbaremerelatif($this->getNotemaxbaremerelatif());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonEnchereOffreReferencesRelatedByIdencherereference() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonEnchereOffreReferenceRelatedByIdencherereference($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonEnchereTrancheBaremeReferencesRelatedByIdreference() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonEnchereTrancheBaremeReferenceRelatedByIdreference($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonEnchereValeursInitialess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonEnchereValeursInitiales($relObj->copy($deepCopy));
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
     * @return CommonEnchereReference Clone of current object.
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
     * @return CommonEnchereReferencePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEnchereReferencePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonEncherePmi object.
     *
     * @param   CommonEncherePmi $v
     * @return CommonEnchereReference The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonEncherePmiRelatedByIdenchere(CommonEncherePmi $v = null)
    {
        if ($v === null) {
            $this->setIdenchere(0);
        } else {
            $this->setIdenchere($v->getId());
        }

        $this->aCommonEncherePmiRelatedByIdenchere = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonEncherePmi object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonEnchereReferenceRelatedByIdenchere($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonEncherePmi object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonEncherePmi The associated CommonEncherePmi object.
     * @throws PropelException
     */
    public function getCommonEncherePmiRelatedByIdenchere(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonEncherePmiRelatedByIdenchere === null && ($this->idenchere !== null) && $doQuery) {
            $this->aCommonEncherePmiRelatedByIdenchere = CommonEncherePmiQuery::create()
                ->filterByCommonEnchereReferenceRelatedByIdenchere($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonEncherePmiRelatedByIdenchere->addCommonEnchereReferencesRelatedByIdenchere($this);
             */
        }

        return $this->aCommonEncherePmiRelatedByIdenchere;
    }

    /**
     * Declares an association between this object and a CommonEncherePmi object.
     *
     * @param   CommonEncherePmi $v
     * @return CommonEnchereReference The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonEncherePmiRelatedByIdenchereOrganisme(CommonEncherePmi $v = null)
    {
        if ($v === null) {
            $this->setIdenchere(0);
        } else {
            $this->setIdenchere($v->getId());
        }

        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        $this->aCommonEncherePmiRelatedByIdenchereOrganisme = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonEncherePmi object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonEnchereReferenceRelatedByIdenchereOrganisme($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonEncherePmi object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonEncherePmi The associated CommonEncherePmi object.
     * @throws PropelException
     */
    public function getCommonEncherePmiRelatedByIdenchereOrganisme(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonEncherePmiRelatedByIdenchereOrganisme === null && ($this->idenchere !== null && ($this->organisme !== "" && $this->organisme !== null)) && $doQuery) {
            $this->aCommonEncherePmiRelatedByIdenchereOrganisme = CommonEncherePmiQuery::create()->findPk(array($this->idenchere, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonEncherePmiRelatedByIdenchereOrganisme->addCommonEnchereReferencesRelatedByIdenchereOrganisme($this);
             */
        }

        return $this->aCommonEncherePmiRelatedByIdenchereOrganisme;
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
        if ('CommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme' == $relationName) {
            $this->initCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme();
        }
        if ('CommonEnchereOffreReferenceRelatedByIdencherereference' == $relationName) {
            $this->initCommonEnchereOffreReferencesRelatedByIdencherereference();
        }
        if ('CommonEnchereTrancheBaremeReferenceRelatedByIdreference' == $relationName) {
            $this->initCommonEnchereTrancheBaremeReferencesRelatedByIdreference();
        }
        if ('CommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme' == $relationName) {
            $this->initCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme();
        }
        if ('CommonEnchereValeursInitiales' == $relationName) {
            $this->initCommonEnchereValeursInitialess();
        }
    }

    /**
     * Clears out the collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonEnchereReference The current object (for fluent API support)
     * @see        addCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme()
     */
    public function clearCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme()
    {
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme = null; // important to set this to null since that means it is uninitialized
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme($v = true)
    {
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismePartial = $v;
    }

    /**
     * Initializes the collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme collection.
     *
     * By default this just sets the collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme collection to an empty array (like clearcollCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme($overrideExisting = true)
    {
        if (null !== $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme && !$overrideExisting) {
            return;
        }
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme = new PropelObjectCollection();
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme->setModel('CommonEnchereOffreReference');
    }

    /**
     * Gets an array of CommonEnchereOffreReference objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonEnchereReference is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonEnchereOffreReference[] List of CommonEnchereOffreReference objects
     * @throws PropelException
     */
    public function getCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismePartial && !$this->isNew();
        if (null === $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme) {
                // return empty collection
                $this->initCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme();
            } else {
                $collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme = CommonEnchereOffreReferenceQuery::create(null, $criteria)
                    ->filterByCommonEnchereReferenceRelatedByIdencherereferenceOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismePartial && count($collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme)) {
                      $this->initCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme(false);

                      foreach ($collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme as $obj) {
                        if (false == $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme->contains($obj)) {
                          $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme->append($obj);
                        }
                      }

                      $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismePartial = true;
                    }

                    $collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme->getInternalIterator()->rewind();

                    return $collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme;
                }

                if ($partial && $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme) {
                    foreach ($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme as $obj) {
                        if ($obj->isNew()) {
                            $collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme[] = $obj;
                        }
                    }
                }

                $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme = $collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme;
                $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismePartial = false;
            }
        }

        return $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme;
    }

    /**
     * Sets a collection of CommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme(PropelCollection $commonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme, PropelPDO $con = null)
    {
        $commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeToDelete = $this->getCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme(new Criteria(), $con)->diff($commonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeScheduledForDeletion = clone $commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeToDelete;

        foreach ($commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeToDelete as $commonEnchereOffreReferenceRelatedByIdencherereferenceOrganismeRemoved) {
            $commonEnchereOffreReferenceRelatedByIdencherereferenceOrganismeRemoved->setCommonEnchereReferenceRelatedByIdencherereferenceOrganisme(null);
        }

        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme = null;
        foreach ($commonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme as $commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme) {
            $this->addCommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme($commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme);
        }

        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme = $commonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme;
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonEnchereOffreReference objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonEnchereOffreReference objects.
     * @throws PropelException
     */
    public function countCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismePartial && !$this->isNew();
        if (null === $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme());
            }
            $query = CommonEnchereOffreReferenceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonEnchereReferenceRelatedByIdencherereferenceOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme);
    }

    /**
     * Method called to associate a CommonEnchereOffreReference object to this object
     * through the CommonEnchereOffreReference foreign key attribute.
     *
     * @param   CommonEnchereOffreReference $l CommonEnchereOffreReference
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function addCommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme(CommonEnchereOffreReference $l)
    {
        if ($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme === null) {
            $this->initCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme();
            $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismePartial = true;
        }
        if (!in_array($l, $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme($l);
        }

        return $this;
    }

    /**
     * @param	CommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme $commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme The commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme object to add.
     */
    protected function doAddCommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme($commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme)
    {
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme[]= $commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme;
        $commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme->setCommonEnchereReferenceRelatedByIdencherereferenceOrganisme($this);
    }

    /**
     * @param	CommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme $commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme The commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme object to remove.
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function removeCommonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme($commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme)
    {
        if ($this->getCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme()->contains($commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme)) {
            $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme->remove($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme->search($commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme));
            if (null === $this->commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeScheduledForDeletion) {
                $this->commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeScheduledForDeletion = clone $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme;
                $this->commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeScheduledForDeletion->clear();
            }
            $this->commonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeScheduledForDeletion[]= clone $commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme;
            $commonEnchereOffreReferenceRelatedByIdencherereferenceOrganisme->setCommonEnchereReferenceRelatedByIdencherereferenceOrganisme(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonEnchereReference is new, it will return
     * an empty collection; or if this CommonEnchereReference has previously
     * been saved, it will retrieve related CommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonEnchereReference.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonEnchereOffreReference[] List of CommonEnchereOffreReference objects
     */
    public function getCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeJoinCommonEnchereOffreRelatedByIdenchereoffreOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonEnchereOffreReferenceQuery::create(null, $criteria);
        $query->joinWith('CommonEnchereOffreRelatedByIdenchereoffreOrganisme', $join_behavior);

        return $this->getCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonEnchereReference is new, it will return
     * an empty collection; or if this CommonEnchereReference has previously
     * been saved, it will retrieve related CommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonEnchereReference.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonEnchereOffreReference[] List of CommonEnchereOffreReference objects
     */
    public function getCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganismeJoinCommonEnchereOffreRelatedByIdenchereoffre($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonEnchereOffreReferenceQuery::create(null, $criteria);
        $query->joinWith('CommonEnchereOffreRelatedByIdenchereoffre', $join_behavior);

        return $this->getCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme($query, $con);
    }

    /**
     * Clears out the collCommonEnchereOffreReferencesRelatedByIdencherereference collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonEnchereReference The current object (for fluent API support)
     * @see        addCommonEnchereOffreReferencesRelatedByIdencherereference()
     */
    public function clearCommonEnchereOffreReferencesRelatedByIdencherereference()
    {
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereference = null; // important to set this to null since that means it is uninitialized
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferencePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonEnchereOffreReferencesRelatedByIdencherereference collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonEnchereOffreReferencesRelatedByIdencherereference($v = true)
    {
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferencePartial = $v;
    }

    /**
     * Initializes the collCommonEnchereOffreReferencesRelatedByIdencherereference collection.
     *
     * By default this just sets the collCommonEnchereOffreReferencesRelatedByIdencherereference collection to an empty array (like clearcollCommonEnchereOffreReferencesRelatedByIdencherereference());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonEnchereOffreReferencesRelatedByIdencherereference($overrideExisting = true)
    {
        if (null !== $this->collCommonEnchereOffreReferencesRelatedByIdencherereference && !$overrideExisting) {
            return;
        }
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereference = new PropelObjectCollection();
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereference->setModel('CommonEnchereOffreReference');
    }

    /**
     * Gets an array of CommonEnchereOffreReference objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonEnchereReference is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonEnchereOffreReference[] List of CommonEnchereOffreReference objects
     * @throws PropelException
     */
    public function getCommonEnchereOffreReferencesRelatedByIdencherereference($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereOffreReferencesRelatedByIdencherereferencePartial && !$this->isNew();
        if (null === $this->collCommonEnchereOffreReferencesRelatedByIdencherereference || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereOffreReferencesRelatedByIdencherereference) {
                // return empty collection
                $this->initCommonEnchereOffreReferencesRelatedByIdencherereference();
            } else {
                $collCommonEnchereOffreReferencesRelatedByIdencherereference = CommonEnchereOffreReferenceQuery::create(null, $criteria)
                    ->filterByCommonEnchereReferenceRelatedByIdencherereference($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonEnchereOffreReferencesRelatedByIdencherereferencePartial && count($collCommonEnchereOffreReferencesRelatedByIdencherereference)) {
                      $this->initCommonEnchereOffreReferencesRelatedByIdencherereference(false);

                      foreach ($collCommonEnchereOffreReferencesRelatedByIdencherereference as $obj) {
                        if (false == $this->collCommonEnchereOffreReferencesRelatedByIdencherereference->contains($obj)) {
                          $this->collCommonEnchereOffreReferencesRelatedByIdencherereference->append($obj);
                        }
                      }

                      $this->collCommonEnchereOffreReferencesRelatedByIdencherereferencePartial = true;
                    }

                    $collCommonEnchereOffreReferencesRelatedByIdencherereference->getInternalIterator()->rewind();

                    return $collCommonEnchereOffreReferencesRelatedByIdencherereference;
                }

                if ($partial && $this->collCommonEnchereOffreReferencesRelatedByIdencherereference) {
                    foreach ($this->collCommonEnchereOffreReferencesRelatedByIdencherereference as $obj) {
                        if ($obj->isNew()) {
                            $collCommonEnchereOffreReferencesRelatedByIdencherereference[] = $obj;
                        }
                    }
                }

                $this->collCommonEnchereOffreReferencesRelatedByIdencherereference = $collCommonEnchereOffreReferencesRelatedByIdencherereference;
                $this->collCommonEnchereOffreReferencesRelatedByIdencherereferencePartial = false;
            }
        }

        return $this->collCommonEnchereOffreReferencesRelatedByIdencherereference;
    }

    /**
     * Sets a collection of CommonEnchereOffreReferenceRelatedByIdencherereference objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonEnchereOffreReferencesRelatedByIdencherereference A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setCommonEnchereOffreReferencesRelatedByIdencherereference(PropelCollection $commonEnchereOffreReferencesRelatedByIdencherereference, PropelPDO $con = null)
    {
        $commonEnchereOffreReferencesRelatedByIdencherereferenceToDelete = $this->getCommonEnchereOffreReferencesRelatedByIdencherereference(new Criteria(), $con)->diff($commonEnchereOffreReferencesRelatedByIdencherereference);


        $this->commonEnchereOffreReferencesRelatedByIdencherereferenceScheduledForDeletion = $commonEnchereOffreReferencesRelatedByIdencherereferenceToDelete;

        foreach ($commonEnchereOffreReferencesRelatedByIdencherereferenceToDelete as $commonEnchereOffreReferenceRelatedByIdencherereferenceRemoved) {
            $commonEnchereOffreReferenceRelatedByIdencherereferenceRemoved->setCommonEnchereReferenceRelatedByIdencherereference(null);
        }

        $this->collCommonEnchereOffreReferencesRelatedByIdencherereference = null;
        foreach ($commonEnchereOffreReferencesRelatedByIdencherereference as $commonEnchereOffreReferenceRelatedByIdencherereference) {
            $this->addCommonEnchereOffreReferenceRelatedByIdencherereference($commonEnchereOffreReferenceRelatedByIdencherereference);
        }

        $this->collCommonEnchereOffreReferencesRelatedByIdencherereference = $commonEnchereOffreReferencesRelatedByIdencherereference;
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferencePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonEnchereOffreReference objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonEnchereOffreReference objects.
     * @throws PropelException
     */
    public function countCommonEnchereOffreReferencesRelatedByIdencherereference(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereOffreReferencesRelatedByIdencherereferencePartial && !$this->isNew();
        if (null === $this->collCommonEnchereOffreReferencesRelatedByIdencherereference || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereOffreReferencesRelatedByIdencherereference) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonEnchereOffreReferencesRelatedByIdencherereference());
            }
            $query = CommonEnchereOffreReferenceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonEnchereReferenceRelatedByIdencherereference($this)
                ->count($con);
        }

        return count($this->collCommonEnchereOffreReferencesRelatedByIdencherereference);
    }

    /**
     * Method called to associate a CommonEnchereOffreReference object to this object
     * through the CommonEnchereOffreReference foreign key attribute.
     *
     * @param   CommonEnchereOffreReference $l CommonEnchereOffreReference
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function addCommonEnchereOffreReferenceRelatedByIdencherereference(CommonEnchereOffreReference $l)
    {
        if ($this->collCommonEnchereOffreReferencesRelatedByIdencherereference === null) {
            $this->initCommonEnchereOffreReferencesRelatedByIdencherereference();
            $this->collCommonEnchereOffreReferencesRelatedByIdencherereferencePartial = true;
        }
        if (!in_array($l, $this->collCommonEnchereOffreReferencesRelatedByIdencherereference->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonEnchereOffreReferenceRelatedByIdencherereference($l);
        }

        return $this;
    }

    /**
     * @param	CommonEnchereOffreReferenceRelatedByIdencherereference $commonEnchereOffreReferenceRelatedByIdencherereference The commonEnchereOffreReferenceRelatedByIdencherereference object to add.
     */
    protected function doAddCommonEnchereOffreReferenceRelatedByIdencherereference($commonEnchereOffreReferenceRelatedByIdencherereference)
    {
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereference[]= $commonEnchereOffreReferenceRelatedByIdencherereference;
        $commonEnchereOffreReferenceRelatedByIdencherereference->setCommonEnchereReferenceRelatedByIdencherereference($this);
    }

    /**
     * @param	CommonEnchereOffreReferenceRelatedByIdencherereference $commonEnchereOffreReferenceRelatedByIdencherereference The commonEnchereOffreReferenceRelatedByIdencherereference object to remove.
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function removeCommonEnchereOffreReferenceRelatedByIdencherereference($commonEnchereOffreReferenceRelatedByIdencherereference)
    {
        if ($this->getCommonEnchereOffreReferencesRelatedByIdencherereference()->contains($commonEnchereOffreReferenceRelatedByIdencherereference)) {
            $this->collCommonEnchereOffreReferencesRelatedByIdencherereference->remove($this->collCommonEnchereOffreReferencesRelatedByIdencherereference->search($commonEnchereOffreReferenceRelatedByIdencherereference));
            if (null === $this->commonEnchereOffreReferencesRelatedByIdencherereferenceScheduledForDeletion) {
                $this->commonEnchereOffreReferencesRelatedByIdencherereferenceScheduledForDeletion = clone $this->collCommonEnchereOffreReferencesRelatedByIdencherereference;
                $this->commonEnchereOffreReferencesRelatedByIdencherereferenceScheduledForDeletion->clear();
            }
            $this->commonEnchereOffreReferencesRelatedByIdencherereferenceScheduledForDeletion[]= clone $commonEnchereOffreReferenceRelatedByIdencherereference;
            $commonEnchereOffreReferenceRelatedByIdencherereference->setCommonEnchereReferenceRelatedByIdencherereference(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonEnchereReference is new, it will return
     * an empty collection; or if this CommonEnchereReference has previously
     * been saved, it will retrieve related CommonEnchereOffreReferencesRelatedByIdencherereference from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonEnchereReference.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonEnchereOffreReference[] List of CommonEnchereOffreReference objects
     */
    public function getCommonEnchereOffreReferencesRelatedByIdencherereferenceJoinCommonEnchereOffreRelatedByIdenchereoffreOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonEnchereOffreReferenceQuery::create(null, $criteria);
        $query->joinWith('CommonEnchereOffreRelatedByIdenchereoffreOrganisme', $join_behavior);

        return $this->getCommonEnchereOffreReferencesRelatedByIdencherereference($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonEnchereReference is new, it will return
     * an empty collection; or if this CommonEnchereReference has previously
     * been saved, it will retrieve related CommonEnchereOffreReferencesRelatedByIdencherereference from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonEnchereReference.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonEnchereOffreReference[] List of CommonEnchereOffreReference objects
     */
    public function getCommonEnchereOffreReferencesRelatedByIdencherereferenceJoinCommonEnchereOffreRelatedByIdenchereoffre($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonEnchereOffreReferenceQuery::create(null, $criteria);
        $query->joinWith('CommonEnchereOffreRelatedByIdenchereoffre', $join_behavior);

        return $this->getCommonEnchereOffreReferencesRelatedByIdencherereference($query, $con);
    }

    /**
     * Clears out the collCommonEnchereTrancheBaremeReferencesRelatedByIdreference collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonEnchereReference The current object (for fluent API support)
     * @see        addCommonEnchereTrancheBaremeReferencesRelatedByIdreference()
     */
    public function clearCommonEnchereTrancheBaremeReferencesRelatedByIdreference()
    {
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference = null; // important to set this to null since that means it is uninitialized
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferencePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonEnchereTrancheBaremeReferencesRelatedByIdreference collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonEnchereTrancheBaremeReferencesRelatedByIdreference($v = true)
    {
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferencePartial = $v;
    }

    /**
     * Initializes the collCommonEnchereTrancheBaremeReferencesRelatedByIdreference collection.
     *
     * By default this just sets the collCommonEnchereTrancheBaremeReferencesRelatedByIdreference collection to an empty array (like clearcollCommonEnchereTrancheBaremeReferencesRelatedByIdreference());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonEnchereTrancheBaremeReferencesRelatedByIdreference($overrideExisting = true)
    {
        if (null !== $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference && !$overrideExisting) {
            return;
        }
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference = new PropelObjectCollection();
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference->setModel('CommonEnchereTrancheBaremeReference');
    }

    /**
     * Gets an array of CommonEnchereTrancheBaremeReference objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonEnchereReference is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonEnchereTrancheBaremeReference[] List of CommonEnchereTrancheBaremeReference objects
     * @throws PropelException
     */
    public function getCommonEnchereTrancheBaremeReferencesRelatedByIdreference($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferencePartial && !$this->isNew();
        if (null === $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference) {
                // return empty collection
                $this->initCommonEnchereTrancheBaremeReferencesRelatedByIdreference();
            } else {
                $collCommonEnchereTrancheBaremeReferencesRelatedByIdreference = CommonEnchereTrancheBaremeReferenceQuery::create(null, $criteria)
                    ->filterByCommonEnchereReferenceRelatedByIdreference($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferencePartial && count($collCommonEnchereTrancheBaremeReferencesRelatedByIdreference)) {
                      $this->initCommonEnchereTrancheBaremeReferencesRelatedByIdreference(false);

                      foreach ($collCommonEnchereTrancheBaremeReferencesRelatedByIdreference as $obj) {
                        if (false == $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference->contains($obj)) {
                          $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference->append($obj);
                        }
                      }

                      $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferencePartial = true;
                    }

                    $collCommonEnchereTrancheBaremeReferencesRelatedByIdreference->getInternalIterator()->rewind();

                    return $collCommonEnchereTrancheBaremeReferencesRelatedByIdreference;
                }

                if ($partial && $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference) {
                    foreach ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference as $obj) {
                        if ($obj->isNew()) {
                            $collCommonEnchereTrancheBaremeReferencesRelatedByIdreference[] = $obj;
                        }
                    }
                }

                $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference = $collCommonEnchereTrancheBaremeReferencesRelatedByIdreference;
                $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferencePartial = false;
            }
        }

        return $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference;
    }

    /**
     * Sets a collection of CommonEnchereTrancheBaremeReferenceRelatedByIdreference objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonEnchereTrancheBaremeReferencesRelatedByIdreference A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setCommonEnchereTrancheBaremeReferencesRelatedByIdreference(PropelCollection $commonEnchereTrancheBaremeReferencesRelatedByIdreference, PropelPDO $con = null)
    {
        $commonEnchereTrancheBaremeReferencesRelatedByIdreferenceToDelete = $this->getCommonEnchereTrancheBaremeReferencesRelatedByIdreference(new Criteria(), $con)->diff($commonEnchereTrancheBaremeReferencesRelatedByIdreference);


        $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceScheduledForDeletion = $commonEnchereTrancheBaremeReferencesRelatedByIdreferenceToDelete;

        foreach ($commonEnchereTrancheBaremeReferencesRelatedByIdreferenceToDelete as $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceRemoved) {
            $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceRemoved->setCommonEnchereReferenceRelatedByIdreference(null);
        }

        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference = null;
        foreach ($commonEnchereTrancheBaremeReferencesRelatedByIdreference as $commonEnchereTrancheBaremeReferenceRelatedByIdreference) {
            $this->addCommonEnchereTrancheBaremeReferenceRelatedByIdreference($commonEnchereTrancheBaremeReferenceRelatedByIdreference);
        }

        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference = $commonEnchereTrancheBaremeReferencesRelatedByIdreference;
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferencePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonEnchereTrancheBaremeReference objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonEnchereTrancheBaremeReference objects.
     * @throws PropelException
     */
    public function countCommonEnchereTrancheBaremeReferencesRelatedByIdreference(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferencePartial && !$this->isNew();
        if (null === $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonEnchereTrancheBaremeReferencesRelatedByIdreference());
            }
            $query = CommonEnchereTrancheBaremeReferenceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonEnchereReferenceRelatedByIdreference($this)
                ->count($con);
        }

        return count($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference);
    }

    /**
     * Method called to associate a CommonEnchereTrancheBaremeReference object to this object
     * through the CommonEnchereTrancheBaremeReference foreign key attribute.
     *
     * @param   CommonEnchereTrancheBaremeReference $l CommonEnchereTrancheBaremeReference
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function addCommonEnchereTrancheBaremeReferenceRelatedByIdreference(CommonEnchereTrancheBaremeReference $l)
    {
        if ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference === null) {
            $this->initCommonEnchereTrancheBaremeReferencesRelatedByIdreference();
            $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferencePartial = true;
        }
        if (!in_array($l, $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonEnchereTrancheBaremeReferenceRelatedByIdreference($l);
        }

        return $this;
    }

    /**
     * @param	CommonEnchereTrancheBaremeReferenceRelatedByIdreference $commonEnchereTrancheBaremeReferenceRelatedByIdreference The commonEnchereTrancheBaremeReferenceRelatedByIdreference object to add.
     */
    protected function doAddCommonEnchereTrancheBaremeReferenceRelatedByIdreference($commonEnchereTrancheBaremeReferenceRelatedByIdreference)
    {
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference[]= $commonEnchereTrancheBaremeReferenceRelatedByIdreference;
        $commonEnchereTrancheBaremeReferenceRelatedByIdreference->setCommonEnchereReferenceRelatedByIdreference($this);
    }

    /**
     * @param	CommonEnchereTrancheBaremeReferenceRelatedByIdreference $commonEnchereTrancheBaremeReferenceRelatedByIdreference The commonEnchereTrancheBaremeReferenceRelatedByIdreference object to remove.
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function removeCommonEnchereTrancheBaremeReferenceRelatedByIdreference($commonEnchereTrancheBaremeReferenceRelatedByIdreference)
    {
        if ($this->getCommonEnchereTrancheBaremeReferencesRelatedByIdreference()->contains($commonEnchereTrancheBaremeReferenceRelatedByIdreference)) {
            $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference->remove($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference->search($commonEnchereTrancheBaremeReferenceRelatedByIdreference));
            if (null === $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceScheduledForDeletion) {
                $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceScheduledForDeletion = clone $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference;
                $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceScheduledForDeletion->clear();
            }
            $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceScheduledForDeletion[]= clone $commonEnchereTrancheBaremeReferenceRelatedByIdreference;
            $commonEnchereTrancheBaremeReferenceRelatedByIdreference->setCommonEnchereReferenceRelatedByIdreference(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonEnchereReference The current object (for fluent API support)
     * @see        addCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme()
     */
    public function clearCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme()
    {
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme = null; // important to set this to null since that means it is uninitialized
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme($v = true)
    {
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismePartial = $v;
    }

    /**
     * Initializes the collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme collection.
     *
     * By default this just sets the collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme collection to an empty array (like clearcollCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme($overrideExisting = true)
    {
        if (null !== $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme && !$overrideExisting) {
            return;
        }
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme = new PropelObjectCollection();
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme->setModel('CommonEnchereTrancheBaremeReference');
    }

    /**
     * Gets an array of CommonEnchereTrancheBaremeReference objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonEnchereReference is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonEnchereTrancheBaremeReference[] List of CommonEnchereTrancheBaremeReference objects
     * @throws PropelException
     */
    public function getCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismePartial && !$this->isNew();
        if (null === $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme) {
                // return empty collection
                $this->initCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme();
            } else {
                $collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme = CommonEnchereTrancheBaremeReferenceQuery::create(null, $criteria)
                    ->filterByCommonEnchereReferenceRelatedByIdreferenceOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismePartial && count($collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme)) {
                      $this->initCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme(false);

                      foreach ($collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme as $obj) {
                        if (false == $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme->contains($obj)) {
                          $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme->append($obj);
                        }
                      }

                      $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismePartial = true;
                    }

                    $collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme->getInternalIterator()->rewind();

                    return $collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme;
                }

                if ($partial && $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme) {
                    foreach ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme as $obj) {
                        if ($obj->isNew()) {
                            $collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme[] = $obj;
                        }
                    }
                }

                $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme = $collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme;
                $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismePartial = false;
            }
        }

        return $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme;
    }

    /**
     * Sets a collection of CommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme(PropelCollection $commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme, PropelPDO $con = null)
    {
        $commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeToDelete = $this->getCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme(new Criteria(), $con)->diff($commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeScheduledForDeletion = clone $commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeToDelete;

        foreach ($commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeToDelete as $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganismeRemoved) {
            $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganismeRemoved->setCommonEnchereReferenceRelatedByIdreferenceOrganisme(null);
        }

        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme = null;
        foreach ($commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme as $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme) {
            $this->addCommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme($commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme);
        }

        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme = $commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme;
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonEnchereTrancheBaremeReference objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonEnchereTrancheBaremeReference objects.
     * @throws PropelException
     */
    public function countCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismePartial && !$this->isNew();
        if (null === $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme());
            }
            $query = CommonEnchereTrancheBaremeReferenceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonEnchereReferenceRelatedByIdreferenceOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme);
    }

    /**
     * Method called to associate a CommonEnchereTrancheBaremeReference object to this object
     * through the CommonEnchereTrancheBaremeReference foreign key attribute.
     *
     * @param   CommonEnchereTrancheBaremeReference $l CommonEnchereTrancheBaremeReference
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function addCommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme(CommonEnchereTrancheBaremeReference $l)
    {
        if ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme === null) {
            $this->initCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme();
            $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismePartial = true;
        }
        if (!in_array($l, $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme($l);
        }

        return $this;
    }

    /**
     * @param	CommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme The commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme object to add.
     */
    protected function doAddCommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme($commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme)
    {
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme[]= $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme;
        $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme->setCommonEnchereReferenceRelatedByIdreferenceOrganisme($this);
    }

    /**
     * @param	CommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme The commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme object to remove.
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function removeCommonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme($commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme)
    {
        if ($this->getCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme()->contains($commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme)) {
            $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme->remove($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme->search($commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme));
            if (null === $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeScheduledForDeletion) {
                $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeScheduledForDeletion = clone $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme;
                $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeScheduledForDeletion->clear();
            }
            $this->commonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganismeScheduledForDeletion[]= clone $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme;
            $commonEnchereTrancheBaremeReferenceRelatedByIdreferenceOrganisme->setCommonEnchereReferenceRelatedByIdreferenceOrganisme(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonEnchereValeursInitialess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonEnchereReference The current object (for fluent API support)
     * @see        addCommonEnchereValeursInitialess()
     */
    public function clearCommonEnchereValeursInitialess()
    {
        $this->collCommonEnchereValeursInitialess = null; // important to set this to null since that means it is uninitialized
        $this->collCommonEnchereValeursInitialessPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonEnchereValeursInitialess collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonEnchereValeursInitialess($v = true)
    {
        $this->collCommonEnchereValeursInitialessPartial = $v;
    }

    /**
     * Initializes the collCommonEnchereValeursInitialess collection.
     *
     * By default this just sets the collCommonEnchereValeursInitialess collection to an empty array (like clearcollCommonEnchereValeursInitialess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonEnchereValeursInitialess($overrideExisting = true)
    {
        if (null !== $this->collCommonEnchereValeursInitialess && !$overrideExisting) {
            return;
        }
        $this->collCommonEnchereValeursInitialess = new PropelObjectCollection();
        $this->collCommonEnchereValeursInitialess->setModel('CommonEnchereValeursInitiales');
    }

    /**
     * Gets an array of CommonEnchereValeursInitiales objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonEnchereReference is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonEnchereValeursInitiales[] List of CommonEnchereValeursInitiales objects
     * @throws PropelException
     */
    public function getCommonEnchereValeursInitialess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereValeursInitialessPartial && !$this->isNew();
        if (null === $this->collCommonEnchereValeursInitialess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereValeursInitialess) {
                // return empty collection
                $this->initCommonEnchereValeursInitialess();
            } else {
                $collCommonEnchereValeursInitialess = CommonEnchereValeursInitialesQuery::create(null, $criteria)
                    ->filterByCommonEnchereReference($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonEnchereValeursInitialessPartial && count($collCommonEnchereValeursInitialess)) {
                      $this->initCommonEnchereValeursInitialess(false);

                      foreach ($collCommonEnchereValeursInitialess as $obj) {
                        if (false == $this->collCommonEnchereValeursInitialess->contains($obj)) {
                          $this->collCommonEnchereValeursInitialess->append($obj);
                        }
                      }

                      $this->collCommonEnchereValeursInitialessPartial = true;
                    }

                    $collCommonEnchereValeursInitialess->getInternalIterator()->rewind();

                    return $collCommonEnchereValeursInitialess;
                }

                if ($partial && $this->collCommonEnchereValeursInitialess) {
                    foreach ($this->collCommonEnchereValeursInitialess as $obj) {
                        if ($obj->isNew()) {
                            $collCommonEnchereValeursInitialess[] = $obj;
                        }
                    }
                }

                $this->collCommonEnchereValeursInitialess = $collCommonEnchereValeursInitialess;
                $this->collCommonEnchereValeursInitialessPartial = false;
            }
        }

        return $this->collCommonEnchereValeursInitialess;
    }

    /**
     * Sets a collection of CommonEnchereValeursInitiales objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonEnchereValeursInitialess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setCommonEnchereValeursInitialess(PropelCollection $commonEnchereValeursInitialess, PropelPDO $con = null)
    {
        $commonEnchereValeursInitialessToDelete = $this->getCommonEnchereValeursInitialess(new Criteria(), $con)->diff($commonEnchereValeursInitialess);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonEnchereValeursInitialessScheduledForDeletion = clone $commonEnchereValeursInitialessToDelete;

        foreach ($commonEnchereValeursInitialessToDelete as $commonEnchereValeursInitialesRemoved) {
            $commonEnchereValeursInitialesRemoved->setCommonEnchereReference(null);
        }

        $this->collCommonEnchereValeursInitialess = null;
        foreach ($commonEnchereValeursInitialess as $commonEnchereValeursInitiales) {
            $this->addCommonEnchereValeursInitiales($commonEnchereValeursInitiales);
        }

        $this->collCommonEnchereValeursInitialess = $commonEnchereValeursInitialess;
        $this->collCommonEnchereValeursInitialessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonEnchereValeursInitiales objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonEnchereValeursInitiales objects.
     * @throws PropelException
     */
    public function countCommonEnchereValeursInitialess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnchereValeursInitialessPartial && !$this->isNew();
        if (null === $this->collCommonEnchereValeursInitialess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonEnchereValeursInitialess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonEnchereValeursInitialess());
            }
            $query = CommonEnchereValeursInitialesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonEnchereReference($this)
                ->count($con);
        }

        return count($this->collCommonEnchereValeursInitialess);
    }

    /**
     * Method called to associate a CommonEnchereValeursInitiales object to this object
     * through the CommonEnchereValeursInitiales foreign key attribute.
     *
     * @param   CommonEnchereValeursInitiales $l CommonEnchereValeursInitiales
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function addCommonEnchereValeursInitiales(CommonEnchereValeursInitiales $l)
    {
        if ($this->collCommonEnchereValeursInitialess === null) {
            $this->initCommonEnchereValeursInitialess();
            $this->collCommonEnchereValeursInitialessPartial = true;
        }
        if (!in_array($l, $this->collCommonEnchereValeursInitialess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonEnchereValeursInitiales($l);
        }

        return $this;
    }

    /**
     * @param	CommonEnchereValeursInitiales $commonEnchereValeursInitiales The commonEnchereValeursInitiales object to add.
     */
    protected function doAddCommonEnchereValeursInitiales($commonEnchereValeursInitiales)
    {
        $this->collCommonEnchereValeursInitialess[]= $commonEnchereValeursInitiales;
        $commonEnchereValeursInitiales->setCommonEnchereReference($this);
    }

    /**
     * @param	CommonEnchereValeursInitiales $commonEnchereValeursInitiales The commonEnchereValeursInitiales object to remove.
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function removeCommonEnchereValeursInitiales($commonEnchereValeursInitiales)
    {
        if ($this->getCommonEnchereValeursInitialess()->contains($commonEnchereValeursInitiales)) {
            $this->collCommonEnchereValeursInitialess->remove($this->collCommonEnchereValeursInitialess->search($commonEnchereValeursInitiales));
            if (null === $this->commonEnchereValeursInitialessScheduledForDeletion) {
                $this->commonEnchereValeursInitialessScheduledForDeletion = clone $this->collCommonEnchereValeursInitialess;
                $this->commonEnchereValeursInitialessScheduledForDeletion->clear();
            }
            $this->commonEnchereValeursInitialessScheduledForDeletion[]= clone $commonEnchereValeursInitiales;
            $commonEnchereValeursInitiales->setCommonEnchereReference(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonEnchereReference is new, it will return
     * an empty collection; or if this CommonEnchereReference has previously
     * been saved, it will retrieve related CommonEnchereValeursInitialess from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonEnchereReference.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonEnchereValeursInitiales[] List of CommonEnchereValeursInitiales objects
     */
    public function getCommonEnchereValeursInitialessJoinCommonEnchereEntreprisePmi($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonEnchereValeursInitialesQuery::create(null, $criteria);
        $query->joinWith('CommonEnchereEntreprisePmi', $join_behavior);

        return $this->getCommonEnchereValeursInitialess($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->idenchere = null;
        $this->libelle = null;
        $this->quantite = null;
        $this->ismontant = null;
        $this->unite = null;
        $this->pasmin = null;
        $this->pasmax = null;
        $this->valeurreference = null;
        $this->valeurdepartcommune = null;
        $this->valeurdepart = null;
        $this->typebaremereference = null;
        $this->ponderationnotereference = null;
        $this->notemaxbaremerelatif = null;
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
            if ($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme) {
                foreach ($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonEnchereOffreReferencesRelatedByIdencherereference) {
                foreach ($this->collCommonEnchereOffreReferencesRelatedByIdencherereference as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference) {
                foreach ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme) {
                foreach ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonEnchereValeursInitialess) {
                foreach ($this->collCommonEnchereValeursInitialess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonEncherePmiRelatedByIdenchere instanceof Persistent) {
              $this->aCommonEncherePmiRelatedByIdenchere->clearAllReferences($deep);
            }
            if ($this->aCommonEncherePmiRelatedByIdenchereOrganisme instanceof Persistent) {
              $this->aCommonEncherePmiRelatedByIdenchereOrganisme->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme instanceof PropelCollection) {
            $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme->clearIterator();
        }
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereferenceOrganisme = null;
        if ($this->collCommonEnchereOffreReferencesRelatedByIdencherereference instanceof PropelCollection) {
            $this->collCommonEnchereOffreReferencesRelatedByIdencherereference->clearIterator();
        }
        $this->collCommonEnchereOffreReferencesRelatedByIdencherereference = null;
        if ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference instanceof PropelCollection) {
            $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference->clearIterator();
        }
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreference = null;
        if ($this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme instanceof PropelCollection) {
            $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme->clearIterator();
        }
        $this->collCommonEnchereTrancheBaremeReferencesRelatedByIdreferenceOrganisme = null;
        if ($this->collCommonEnchereValeursInitialess instanceof PropelCollection) {
            $this->collCommonEnchereValeursInitialess->clearIterator();
        }
        $this->collCommonEnchereValeursInitialess = null;
        $this->aCommonEncherePmiRelatedByIdenchere = null;
        $this->aCommonEncherePmiRelatedByIdenchereOrganisme = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonEnchereReferencePeer::DEFAULT_STRING_FORMAT);
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
