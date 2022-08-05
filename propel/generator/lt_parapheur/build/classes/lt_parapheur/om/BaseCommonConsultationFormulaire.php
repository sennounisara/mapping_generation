<?php


/**
 * Base class that represents a row from the 'ConsultationFormulaire' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConsultationFormulaire extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonConsultationFormulairePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonConsultationFormulairePeer
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
     * The value for the reference field.
     * @var        string
     */
    protected $reference;

    /**
     * The value for the nom field.
     * @var        string
     */
    protected $nom;

    /**
     * The value for the type_formulaire field.
     * @var        int
     */
    protected $type_formulaire;

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
     * The value for the code_cpv_1 field.
     * @var        string
     */
    protected $code_cpv_1;

    /**
     * The value for the code_cpv_2 field.
     * @var        string
     */
    protected $code_cpv_2;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the service_id field.
     * @var        int
     */
    protected $service_id;

    /**
     * The value for the date_creation field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_modification field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_modification;

    /**
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the type_enveloppe field.
     * @var        int
     */
    protected $type_enveloppe;

    /**
     * The value for the lot field.
     * @var        int
     */
    protected $lot;

    /**
     * The value for the id_modele field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_modele;

    /**
     * The value for the statut field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $statut;

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
        $this->date_creation = '0000-00-00 00:00:00';
        $this->date_modification = '0000-00-00 00:00:00';
        $this->id_modele = 0;
        $this->statut = 1;
    }

    /**
     * Initializes internal state of BaseCommonConsultationFormulaire object.
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
     * Get the [reference] column value.
     * 
     * @return string
     */
    public function getReference()
    {

        return $this->reference;
    }

    /**
     * Get the [nom] column value.
     * 
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * Get the [type_formulaire] column value.
     * 
     * @return int
     */
    public function getTypeFormulaire()
    {

        return $this->type_formulaire;
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
     * Get the [code_cpv_1] column value.
     * 
     * @return string
     */
    public function getCodeCpv1()
    {

        return $this->code_cpv_1;
    }

    /**
     * Get the [code_cpv_2] column value.
     * 
     * @return string
     */
    public function getCodeCpv2()
    {

        return $this->code_cpv_2;
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
     * Get the [service_id] column value.
     * 
     * @return int
     */
    public function getServiceId()
    {

        return $this->service_id;
    }

    /**
     * Get the [date_creation] column value.
     * 
     * @return string
     */
    public function getDateCreation()
    {

        return $this->date_creation;
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
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [type_enveloppe] column value.
     * 
     * @return int
     */
    public function getTypeEnveloppe()
    {

        return $this->type_enveloppe;
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
     * Get the [id_modele] column value.
     * 
     * @return int
     */
    public function getIdModele()
    {

        return $this->id_modele;
    }

    /**
     * Get the [statut] column value.
     * 
     * @return int
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [reference] column.
     * 
     * @param string $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reference !== $v) {
            $this->reference = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::REFERENCE;
        }


        return $this;
    } // setReference()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [type_formulaire] column.
     * 
     * @param int $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setTypeFormulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_formulaire !== $v) {
            $this->type_formulaire = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::TYPE_FORMULAIRE;
        }


        return $this;
    } // setTypeFormulaire()

    /**
     * Set the value of [id_type_procedure] column.
     * 
     * @param int $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setIdTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_procedure !== $v) {
            $this->id_type_procedure = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::ID_TYPE_PROCEDURE;
        }


        return $this;
    } // setIdTypeProcedure()

    /**
     * Set the value of [id_categorie] column.
     * 
     * @param int $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setIdCategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_categorie !== $v) {
            $this->id_categorie = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::ID_CATEGORIE;
        }


        return $this;
    } // setIdCategorie()

    /**
     * Set the value of [code_cpv_1] column.
     * 
     * @param string $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setCodeCpv1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv_1 !== $v) {
            $this->code_cpv_1 = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::CODE_CPV_1;
        }


        return $this;
    } // setCodeCpv1()

    /**
     * Set the value of [code_cpv_2] column.
     * 
     * @param string $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setCodeCpv2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv_2 !== $v) {
            $this->code_cpv_2 = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::CODE_CPV_2;
        }


        return $this;
    } // setCodeCpv2()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [service_id] column.
     * 
     * @param int $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setServiceId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->service_id !== $v) {
            $this->service_id = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::SERVICE_ID;
        }


        return $this;
    } // setServiceId()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_modification] column.
     * 
     * @param string $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modification !== $v) {
            $this->date_modification = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::DATE_MODIFICATION;
        }


        return $this;
    } // setDateModification()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [type_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setTypeEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_enveloppe !== $v) {
            $this->type_enveloppe = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::TYPE_ENVELOPPE;
        }


        return $this;
    } // setTypeEnveloppe()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [id_modele] column.
     * 
     * @param int $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setIdModele($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_modele !== $v) {
            $this->id_modele = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::ID_MODELE;
        }


        return $this;
    } // setIdModele()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonConsultationFormulaire The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonConsultationFormulairePeer::STATUT;
        }


        return $this;
    } // setStatut()

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
            if ($this->date_creation !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->date_modification !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->id_modele !== 0) {
                return false;
            }

            if ($this->statut !== 1) {
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
            $this->reference = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->nom = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->type_formulaire = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_type_procedure = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->id_categorie = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->code_cpv_1 = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->code_cpv_2 = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->organisme = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->service_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->date_creation = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_modification = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->consultation_ref = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->type_enveloppe = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->lot = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->id_modele = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->statut = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = CommonConsultationFormulairePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonConsultationFormulaire object", $e);
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
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonConsultationFormulairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonConsultationFormulaireQuery::create()
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
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonConsultationFormulairePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonConsultationFormulairePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonConsultationFormulairePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonConsultationFormulairePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`reference`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::TYPE_FORMULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`type_formulaire`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::ID_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_procedure`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::ID_CATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`id_categorie`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::CODE_CPV_1)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv_1`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::CODE_CPV_2)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv_2`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::SERVICE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`service_id`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::TYPE_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`type_enveloppe`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::ID_MODELE)) {
            $modifiedColumns[':p' . $index++]  = '`id_modele`';
        }
        if ($this->isColumnModified(CommonConsultationFormulairePeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }

        $sql = sprintf(
            'INSERT INTO `ConsultationFormulaire` (%s) VALUES (%s)',
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
                    case '`reference`':						
                        $stmt->bindValue($identifier, $this->reference, PDO::PARAM_STR);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`type_formulaire`':						
                        $stmt->bindValue($identifier, $this->type_formulaire, PDO::PARAM_INT);
                        break;
                    case '`id_type_procedure`':						
                        $stmt->bindValue($identifier, $this->id_type_procedure, PDO::PARAM_INT);
                        break;
                    case '`id_categorie`':						
                        $stmt->bindValue($identifier, $this->id_categorie, PDO::PARAM_INT);
                        break;
                    case '`code_cpv_1`':						
                        $stmt->bindValue($identifier, $this->code_cpv_1, PDO::PARAM_STR);
                        break;
                    case '`code_cpv_2`':						
                        $stmt->bindValue($identifier, $this->code_cpv_2, PDO::PARAM_STR);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`service_id`':						
                        $stmt->bindValue($identifier, $this->service_id, PDO::PARAM_INT);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`type_enveloppe`':						
                        $stmt->bindValue($identifier, $this->type_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`id_modele`':						
                        $stmt->bindValue($identifier, $this->id_modele, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
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


            if (($retval = CommonConsultationFormulairePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonConsultationFormulairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getReference();
                break;
            case 2:
                return $this->getNom();
                break;
            case 3:
                return $this->getTypeFormulaire();
                break;
            case 4:
                return $this->getIdTypeProcedure();
                break;
            case 5:
                return $this->getIdCategorie();
                break;
            case 6:
                return $this->getCodeCpv1();
                break;
            case 7:
                return $this->getCodeCpv2();
                break;
            case 8:
                return $this->getOrganisme();
                break;
            case 9:
                return $this->getServiceId();
                break;
            case 10:
                return $this->getDateCreation();
                break;
            case 11:
                return $this->getDateModification();
                break;
            case 12:
                return $this->getConsultationRef();
                break;
            case 13:
                return $this->getTypeEnveloppe();
                break;
            case 14:
                return $this->getLot();
                break;
            case 15:
                return $this->getIdModele();
                break;
            case 16:
                return $this->getStatut();
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
        if (isset($alreadyDumpedObjects['CommonConsultationFormulaire'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonConsultationFormulaire'][$this->getPrimaryKey()] = true;
        $keys = CommonConsultationFormulairePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getReference(),
            $keys[2] => $this->getNom(),
            $keys[3] => $this->getTypeFormulaire(),
            $keys[4] => $this->getIdTypeProcedure(),
            $keys[5] => $this->getIdCategorie(),
            $keys[6] => $this->getCodeCpv1(),
            $keys[7] => $this->getCodeCpv2(),
            $keys[8] => $this->getOrganisme(),
            $keys[9] => $this->getServiceId(),
            $keys[10] => $this->getDateCreation(),
            $keys[11] => $this->getDateModification(),
            $keys[12] => $this->getConsultationRef(),
            $keys[13] => $this->getTypeEnveloppe(),
            $keys[14] => $this->getLot(),
            $keys[15] => $this->getIdModele(),
            $keys[16] => $this->getStatut(),
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
        $pos = CommonConsultationFormulairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setReference($value);
                break;
            case 2:
                $this->setNom($value);
                break;
            case 3:
                $this->setTypeFormulaire($value);
                break;
            case 4:
                $this->setIdTypeProcedure($value);
                break;
            case 5:
                $this->setIdCategorie($value);
                break;
            case 6:
                $this->setCodeCpv1($value);
                break;
            case 7:
                $this->setCodeCpv2($value);
                break;
            case 8:
                $this->setOrganisme($value);
                break;
            case 9:
                $this->setServiceId($value);
                break;
            case 10:
                $this->setDateCreation($value);
                break;
            case 11:
                $this->setDateModification($value);
                break;
            case 12:
                $this->setConsultationRef($value);
                break;
            case 13:
                $this->setTypeEnveloppe($value);
                break;
            case 14:
                $this->setLot($value);
                break;
            case 15:
                $this->setIdModele($value);
                break;
            case 16:
                $this->setStatut($value);
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
        $keys = CommonConsultationFormulairePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setReference($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNom($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTypeFormulaire($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdTypeProcedure($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdCategorie($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCodeCpv1($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCodeCpv2($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOrganisme($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setServiceId($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateCreation($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateModification($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setConsultationRef($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTypeEnveloppe($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLot($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdModele($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setStatut($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonConsultationFormulairePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonConsultationFormulairePeer::ID)) $criteria->add(CommonConsultationFormulairePeer::ID, $this->id);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::REFERENCE)) $criteria->add(CommonConsultationFormulairePeer::REFERENCE, $this->reference);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::NOM)) $criteria->add(CommonConsultationFormulairePeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::TYPE_FORMULAIRE)) $criteria->add(CommonConsultationFormulairePeer::TYPE_FORMULAIRE, $this->type_formulaire);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::ID_TYPE_PROCEDURE)) $criteria->add(CommonConsultationFormulairePeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::ID_CATEGORIE)) $criteria->add(CommonConsultationFormulairePeer::ID_CATEGORIE, $this->id_categorie);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::CODE_CPV_1)) $criteria->add(CommonConsultationFormulairePeer::CODE_CPV_1, $this->code_cpv_1);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::CODE_CPV_2)) $criteria->add(CommonConsultationFormulairePeer::CODE_CPV_2, $this->code_cpv_2);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::ORGANISME)) $criteria->add(CommonConsultationFormulairePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::SERVICE_ID)) $criteria->add(CommonConsultationFormulairePeer::SERVICE_ID, $this->service_id);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::DATE_CREATION)) $criteria->add(CommonConsultationFormulairePeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::DATE_MODIFICATION)) $criteria->add(CommonConsultationFormulairePeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::CONSULTATION_REF)) $criteria->add(CommonConsultationFormulairePeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::TYPE_ENVELOPPE)) $criteria->add(CommonConsultationFormulairePeer::TYPE_ENVELOPPE, $this->type_enveloppe);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::LOT)) $criteria->add(CommonConsultationFormulairePeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::ID_MODELE)) $criteria->add(CommonConsultationFormulairePeer::ID_MODELE, $this->id_modele);
        if ($this->isColumnModified(CommonConsultationFormulairePeer::STATUT)) $criteria->add(CommonConsultationFormulairePeer::STATUT, $this->statut);

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
        $criteria = new Criteria(CommonConsultationFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonConsultationFormulairePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonConsultationFormulaire (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setReference($this->getReference());
        $copyObj->setNom($this->getNom());
        $copyObj->setTypeFormulaire($this->getTypeFormulaire());
        $copyObj->setIdTypeProcedure($this->getIdTypeProcedure());
        $copyObj->setIdCategorie($this->getIdCategorie());
        $copyObj->setCodeCpv1($this->getCodeCpv1());
        $copyObj->setCodeCpv2($this->getCodeCpv2());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setServiceId($this->getServiceId());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setTypeEnveloppe($this->getTypeEnveloppe());
        $copyObj->setLot($this->getLot());
        $copyObj->setIdModele($this->getIdModele());
        $copyObj->setStatut($this->getStatut());
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
     * @return CommonConsultationFormulaire Clone of current object.
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
     * @return CommonConsultationFormulairePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonConsultationFormulairePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->reference = null;
        $this->nom = null;
        $this->type_formulaire = null;
        $this->id_type_procedure = null;
        $this->id_categorie = null;
        $this->code_cpv_1 = null;
        $this->code_cpv_2 = null;
        $this->organisme = null;
        $this->service_id = null;
        $this->date_creation = null;
        $this->date_modification = null;
        $this->consultation_ref = null;
        $this->type_enveloppe = null;
        $this->lot = null;
        $this->id_modele = null;
        $this->statut = null;
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
        return (string) $this->exportTo(CommonConsultationFormulairePeer::DEFAULT_STRING_FORMAT);
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
