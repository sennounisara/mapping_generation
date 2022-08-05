<?php


/**
 * Base class that represents a row from the 'Avis_Pub' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAvisPub extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAvisPubPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAvisPubPeer
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
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the statut field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut;

    /**
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the id_agent_validateur field.
     * @var        int
     */
    protected $id_agent_validateur;

    /**
     * The value for the id_agent_validateur_eco field.
     * @var        int
     */
    protected $id_agent_validateur_eco;

    /**
     * The value for the id_agent_validateur_sip field.
     * @var        int
     */
    protected $id_agent_validateur_sip;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_envoi field.
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the type_avis field.
     * @var        int
     */
    protected $type_avis;

    /**
     * The value for the date_publication field.
     * @var        string
     */
    protected $date_publication;

    /**
     * The value for the date_validation field.
     * @var        string
     */
    protected $date_validation;

    /**
     * The value for the sip field.
     * @var        string
     */
    protected $sip;

    /**
     * The value for the id_avis_portail field.
     * @var        int
     */
    protected $id_avis_portail;

    /**
     * The value for the id_avis_presse field.
     * @var        int
     */
    protected $id_avis_presse;

    /**
     * The value for the id_avis_pdf_opoce field.
     * @var        int
     */
    protected $id_avis_pdf_opoce;

    /**
     * The value for the id_blob_logo field.
     * @var        int
     */
    protected $id_blob_logo;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultation;

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
        $this->statut = '0';
    }

    /**
     * Initializes internal state of BaseCommonAvisPub object.
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
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [statut] column value.
     * 
     * @return string
     */
    public function getStatut()
    {

        return $this->statut;
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
     * Get the [id_agent_validateur] column value.
     * 
     * @return int
     */
    public function getIdAgentValidateur()
    {

        return $this->id_agent_validateur;
    }

    /**
     * Get the [id_agent_validateur_eco] column value.
     * 
     * @return int
     */
    public function getIdAgentValidateurEco()
    {

        return $this->id_agent_validateur_eco;
    }

    /**
     * Get the [id_agent_validateur_sip] column value.
     * 
     * @return int
     */
    public function getIdAgentValidateurSip()
    {

        return $this->id_agent_validateur_sip;
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
     * Get the [date_envoi] column value.
     * 
     * @return string
     */
    public function getDateEnvoi()
    {

        return $this->date_envoi;
    }

    /**
     * Get the [type_avis] column value.
     * 
     * @return int
     */
    public function getTypeAvis()
    {

        return $this->type_avis;
    }

    /**
     * Get the [date_publication] column value.
     * 
     * @return string
     */
    public function getDatePublication()
    {

        return $this->date_publication;
    }

    /**
     * Get the [date_validation] column value.
     * 
     * @return string
     */
    public function getDateValidation()
    {

        return $this->date_validation;
    }

    /**
     * Get the [sip] column value.
     * 
     * @return string
     */
    public function getSip()
    {

        return $this->sip;
    }

    /**
     * Get the [id_avis_portail] column value.
     * 
     * @return int
     */
    public function getIdAvisPortail()
    {

        return $this->id_avis_portail;
    }

    /**
     * Get the [id_avis_presse] column value.
     * 
     * @return int
     */
    public function getIdAvisPresse()
    {

        return $this->id_avis_presse;
    }

    /**
     * Get the [id_avis_pdf_opoce] column value.
     * 
     * @return int
     */
    public function getIdAvisPdfOpoce()
    {

        return $this->id_avis_pdf_opoce;
    }

    /**
     * Get the [id_blob_logo] column value.
     * 
     * @return int
     */
    public function getIdBlobLogo()
    {

        return $this->id_blob_logo;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::ORGANISME;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [statut] column.
     * 
     * @param string $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [id_agent_validateur] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setIdAgentValidateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_validateur !== $v) {
            $this->id_agent_validateur = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::ID_AGENT_VALIDATEUR;
        }


        return $this;
    } // setIdAgentValidateur()

    /**
     * Set the value of [id_agent_validateur_eco] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setIdAgentValidateurEco($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_validateur_eco !== $v) {
            $this->id_agent_validateur_eco = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::ID_AGENT_VALIDATEUR_ECO;
        }


        return $this;
    } // setIdAgentValidateurEco()

    /**
     * Set the value of [id_agent_validateur_sip] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setIdAgentValidateurSip($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_validateur_sip !== $v) {
            $this->id_agent_validateur_sip = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::ID_AGENT_VALIDATEUR_SIP;
        }


        return $this;
    } // setIdAgentValidateurSip()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_envoi] column.
     * 
     * @param string $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi !== $v) {
            $this->date_envoi = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::DATE_ENVOI;
        }


        return $this;
    } // setDateEnvoi()

    /**
     * Set the value of [type_avis] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setTypeAvis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_avis !== $v) {
            $this->type_avis = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::TYPE_AVIS;
        }


        return $this;
    } // setTypeAvis()

    /**
     * Set the value of [date_publication] column.
     * 
     * @param string $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setDatePublication($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_publication !== $v) {
            $this->date_publication = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::DATE_PUBLICATION;
        }


        return $this;
    } // setDatePublication()

    /**
     * Set the value of [date_validation] column.
     * 
     * @param string $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setDateValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_validation !== $v) {
            $this->date_validation = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::DATE_VALIDATION;
        }


        return $this;
    } // setDateValidation()

    /**
     * Set the value of [sip] column.
     * 
     * @param string $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setSip($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sip !== $v) {
            $this->sip = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::SIP;
        }


        return $this;
    } // setSip()

    /**
     * Set the value of [id_avis_portail] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setIdAvisPortail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_avis_portail !== $v) {
            $this->id_avis_portail = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::ID_AVIS_PORTAIL;
        }


        return $this;
    } // setIdAvisPortail()

    /**
     * Set the value of [id_avis_presse] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setIdAvisPresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_avis_presse !== $v) {
            $this->id_avis_presse = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::ID_AVIS_PRESSE;
        }


        return $this;
    } // setIdAvisPresse()

    /**
     * Set the value of [id_avis_pdf_opoce] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setIdAvisPdfOpoce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_avis_pdf_opoce !== $v) {
            $this->id_avis_pdf_opoce = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::ID_AVIS_PDF_OPOCE;
        }


        return $this;
    } // setIdAvisPdfOpoce()

    /**
     * Set the value of [id_blob_logo] column.
     * 
     * @param int $v new value
     * @return CommonAvisPub The current object (for fluent API support)
     */
    public function setIdBlobLogo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_logo !== $v) {
            $this->id_blob_logo = $v;
            $this->modifiedColumns[] = CommonAvisPubPeer::ID_BLOB_LOGO;
        }


        return $this;
    } // setIdBlobLogo()

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
            if ($this->statut !== '0') {
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
            $this->consultation_ref = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->statut = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_agent = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->id_agent_validateur = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_agent_validateur_eco = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_agent_validateur_sip = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->date_creation = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->date_envoi = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->type_avis = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->date_publication = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_validation = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->sip = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->id_avis_portail = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->id_avis_presse = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->id_avis_pdf_opoce = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->id_blob_logo = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = CommonAvisPubPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAvisPub object", $e);
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

        if ($this->aCommonConsultation !== null && $this->organisme !== $this->aCommonConsultation->getOrganisme()) {
            $this->aCommonConsultation = null;
        }
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
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAvisPubPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAvisPubQuery::create()
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
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAvisPubPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonAvisPubPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAvisPubPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAvisPubPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AGENT_VALIDATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_validateur`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_ECO)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_validateur_eco`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_SIP)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_validateur_sip`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::TYPE_AVIS)) {
            $modifiedColumns[':p' . $index++]  = '`type_avis`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::DATE_PUBLICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_publication`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::DATE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::SIP)) {
            $modifiedColumns[':p' . $index++]  = '`Sip`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AVIS_PORTAIL)) {
            $modifiedColumns[':p' . $index++]  = '`id_avis_portail`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AVIS_PRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`id_avis_presse`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AVIS_PDF_OPOCE)) {
            $modifiedColumns[':p' . $index++]  = '`id_avis_pdf_opoce`';
        }
        if ($this->isColumnModified(CommonAvisPubPeer::ID_BLOB_LOGO)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob_logo`';
        }

        $sql = sprintf(
            'INSERT INTO `Avis_Pub` (%s) VALUES (%s)',
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
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_STR);
                        break;
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`id_agent_validateur`':						
                        $stmt->bindValue($identifier, $this->id_agent_validateur, PDO::PARAM_INT);
                        break;
                    case '`id_agent_validateur_eco`':						
                        $stmt->bindValue($identifier, $this->id_agent_validateur_eco, PDO::PARAM_INT);
                        break;
                    case '`id_agent_validateur_sip`':						
                        $stmt->bindValue($identifier, $this->id_agent_validateur_sip, PDO::PARAM_INT);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_envoi`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`type_avis`':						
                        $stmt->bindValue($identifier, $this->type_avis, PDO::PARAM_INT);
                        break;
                    case '`date_publication`':						
                        $stmt->bindValue($identifier, $this->date_publication, PDO::PARAM_STR);
                        break;
                    case '`date_validation`':						
                        $stmt->bindValue($identifier, $this->date_validation, PDO::PARAM_STR);
                        break;
                    case '`Sip`':						
                        $stmt->bindValue($identifier, $this->sip, PDO::PARAM_STR);
                        break;
                    case '`id_avis_portail`':						
                        $stmt->bindValue($identifier, $this->id_avis_portail, PDO::PARAM_INT);
                        break;
                    case '`id_avis_presse`':						
                        $stmt->bindValue($identifier, $this->id_avis_presse, PDO::PARAM_INT);
                        break;
                    case '`id_avis_pdf_opoce`':						
                        $stmt->bindValue($identifier, $this->id_avis_pdf_opoce, PDO::PARAM_INT);
                        break;
                    case '`id_blob_logo`':						
                        $stmt->bindValue($identifier, $this->id_blob_logo, PDO::PARAM_INT);
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


            if (($retval = CommonAvisPubPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonAvisPubPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getConsultationRef();
                break;
            case 3:
                return $this->getStatut();
                break;
            case 4:
                return $this->getIdAgent();
                break;
            case 5:
                return $this->getIdAgentValidateur();
                break;
            case 6:
                return $this->getIdAgentValidateurEco();
                break;
            case 7:
                return $this->getIdAgentValidateurSip();
                break;
            case 8:
                return $this->getDateCreation();
                break;
            case 9:
                return $this->getDateEnvoi();
                break;
            case 10:
                return $this->getTypeAvis();
                break;
            case 11:
                return $this->getDatePublication();
                break;
            case 12:
                return $this->getDateValidation();
                break;
            case 13:
                return $this->getSip();
                break;
            case 14:
                return $this->getIdAvisPortail();
                break;
            case 15:
                return $this->getIdAvisPresse();
                break;
            case 16:
                return $this->getIdAvisPdfOpoce();
                break;
            case 17:
                return $this->getIdBlobLogo();
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
        if (isset($alreadyDumpedObjects['CommonAvisPub'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAvisPub'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonAvisPubPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getConsultationRef(),
            $keys[3] => $this->getStatut(),
            $keys[4] => $this->getIdAgent(),
            $keys[5] => $this->getIdAgentValidateur(),
            $keys[6] => $this->getIdAgentValidateurEco(),
            $keys[7] => $this->getIdAgentValidateurSip(),
            $keys[8] => $this->getDateCreation(),
            $keys[9] => $this->getDateEnvoi(),
            $keys[10] => $this->getTypeAvis(),
            $keys[11] => $this->getDatePublication(),
            $keys[12] => $this->getDateValidation(),
            $keys[13] => $this->getSip(),
            $keys[14] => $this->getIdAvisPortail(),
            $keys[15] => $this->getIdAvisPresse(),
            $keys[16] => $this->getIdAvisPdfOpoce(),
            $keys[17] => $this->getIdBlobLogo(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultation) {
                $result['CommonConsultation'] = $this->aCommonConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonAvisPubPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setConsultationRef($value);
                break;
            case 3:
                $this->setStatut($value);
                break;
            case 4:
                $this->setIdAgent($value);
                break;
            case 5:
                $this->setIdAgentValidateur($value);
                break;
            case 6:
                $this->setIdAgentValidateurEco($value);
                break;
            case 7:
                $this->setIdAgentValidateurSip($value);
                break;
            case 8:
                $this->setDateCreation($value);
                break;
            case 9:
                $this->setDateEnvoi($value);
                break;
            case 10:
                $this->setTypeAvis($value);
                break;
            case 11:
                $this->setDatePublication($value);
                break;
            case 12:
                $this->setDateValidation($value);
                break;
            case 13:
                $this->setSip($value);
                break;
            case 14:
                $this->setIdAvisPortail($value);
                break;
            case 15:
                $this->setIdAvisPresse($value);
                break;
            case 16:
                $this->setIdAvisPdfOpoce($value);
                break;
            case 17:
                $this->setIdBlobLogo($value);
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
        $keys = CommonAvisPubPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setStatut($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdAgent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdAgentValidateur($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdAgentValidateurEco($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdAgentValidateurSip($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDateCreation($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateEnvoi($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTypeAvis($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDatePublication($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateValidation($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSip($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdAvisPortail($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdAvisPresse($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdAvisPdfOpoce($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setIdBlobLogo($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAvisPubPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAvisPubPeer::ID)) $criteria->add(CommonAvisPubPeer::ID, $this->id);
        if ($this->isColumnModified(CommonAvisPubPeer::ORGANISME)) $criteria->add(CommonAvisPubPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonAvisPubPeer::CONSULTATION_REF)) $criteria->add(CommonAvisPubPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonAvisPubPeer::STATUT)) $criteria->add(CommonAvisPubPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AGENT)) $criteria->add(CommonAvisPubPeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AGENT_VALIDATEUR)) $criteria->add(CommonAvisPubPeer::ID_AGENT_VALIDATEUR, $this->id_agent_validateur);
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_ECO)) $criteria->add(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_ECO, $this->id_agent_validateur_eco);
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_SIP)) $criteria->add(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_SIP, $this->id_agent_validateur_sip);
        if ($this->isColumnModified(CommonAvisPubPeer::DATE_CREATION)) $criteria->add(CommonAvisPubPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonAvisPubPeer::DATE_ENVOI)) $criteria->add(CommonAvisPubPeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(CommonAvisPubPeer::TYPE_AVIS)) $criteria->add(CommonAvisPubPeer::TYPE_AVIS, $this->type_avis);
        if ($this->isColumnModified(CommonAvisPubPeer::DATE_PUBLICATION)) $criteria->add(CommonAvisPubPeer::DATE_PUBLICATION, $this->date_publication);
        if ($this->isColumnModified(CommonAvisPubPeer::DATE_VALIDATION)) $criteria->add(CommonAvisPubPeer::DATE_VALIDATION, $this->date_validation);
        if ($this->isColumnModified(CommonAvisPubPeer::SIP)) $criteria->add(CommonAvisPubPeer::SIP, $this->sip);
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AVIS_PORTAIL)) $criteria->add(CommonAvisPubPeer::ID_AVIS_PORTAIL, $this->id_avis_portail);
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AVIS_PRESSE)) $criteria->add(CommonAvisPubPeer::ID_AVIS_PRESSE, $this->id_avis_presse);
        if ($this->isColumnModified(CommonAvisPubPeer::ID_AVIS_PDF_OPOCE)) $criteria->add(CommonAvisPubPeer::ID_AVIS_PDF_OPOCE, $this->id_avis_pdf_opoce);
        if ($this->isColumnModified(CommonAvisPubPeer::ID_BLOB_LOGO)) $criteria->add(CommonAvisPubPeer::ID_BLOB_LOGO, $this->id_blob_logo);

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
        $criteria = new Criteria(CommonAvisPubPeer::DATABASE_NAME);
        $criteria->add(CommonAvisPubPeer::ID, $this->id);
        $criteria->add(CommonAvisPubPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonAvisPub (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setIdAgentValidateur($this->getIdAgentValidateur());
        $copyObj->setIdAgentValidateurEco($this->getIdAgentValidateurEco());
        $copyObj->setIdAgentValidateurSip($this->getIdAgentValidateurSip());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setTypeAvis($this->getTypeAvis());
        $copyObj->setDatePublication($this->getDatePublication());
        $copyObj->setDateValidation($this->getDateValidation());
        $copyObj->setSip($this->getSip());
        $copyObj->setIdAvisPortail($this->getIdAvisPortail());
        $copyObj->setIdAvisPresse($this->getIdAvisPresse());
        $copyObj->setIdAvisPdfOpoce($this->getIdAvisPdfOpoce());
        $copyObj->setIdBlobLogo($this->getIdBlobLogo());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return CommonAvisPub Clone of current object.
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
     * @return CommonAvisPubPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAvisPubPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonAvisPub The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme(NULL);
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setConsultationRef(NULL);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonAvisPub($this);
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
        if ($this->aCommonConsultation === null && (($this->organisme !== "" && $this->organisme !== null) && $this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()->findPk(array($this->consultation_ref, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonAvisPubs($this);
             */
        }

        return $this->aCommonConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->consultation_ref = null;
        $this->statut = null;
        $this->id_agent = null;
        $this->id_agent_validateur = null;
        $this->id_agent_validateur_eco = null;
        $this->id_agent_validateur_sip = null;
        $this->date_creation = null;
        $this->date_envoi = null;
        $this->type_avis = null;
        $this->date_publication = null;
        $this->date_validation = null;
        $this->sip = null;
        $this->id_avis_portail = null;
        $this->id_avis_presse = null;
        $this->id_avis_pdf_opoce = null;
        $this->id_blob_logo = null;
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
            if ($this->aCommonConsultation instanceof Persistent) {
              $this->aCommonConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonAvisPubPeer::DEFAULT_STRING_FORMAT);
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
