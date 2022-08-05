<?php


/**
 * Base class that represents a row from the 't_etape_circuit_validation' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTEtapeCircuitValidation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TEtapeCircuitValidationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TEtapeCircuitValidationPeer
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
     * The value for the libelle_etape_fr field.
     * @var        string
     */
    protected $libelle_etape_fr;

    /**
     * The value for the libelle_etape_ar field.
     * @var        string
     */
    protected $libelle_etape_ar;

    /**
     * The value for the numero_etape field.
     * @var        int
     */
    protected $numero_etape;

    /**
     * The value for the id_type_etape field.
     * @var        int
     */
    protected $id_type_etape;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the id_circuit_validation field.
     * @var        int
     */
    protected $id_circuit_validation;

    /**
     * The value for the niveau_depart field.
     * @var        int
     */
    protected $niveau_depart;

    /**
     * The value for the niveau_fin field.
     * @var        int
     */
    protected $niveau_fin;

    /**
     * The value for the id_signataire field.
     * @var        int
     */
    protected $id_signataire;

    /**
     * The value for the visa_signature field.
     * @var        string
     */
    protected $visa_signature;

    /**
     * The value for the regle_validation field.
     * @var        string
     */
    protected $regle_validation;

    /**
     * The value for the regle_refus field.
     * @var        string
     */
    protected $regle_refus;

    /**
     * The value for the delai_etape field.
     * @var        int
     */
    protected $delai_etape;

    /**
     * The value for the delai_heure field.
     * @var        int
     */
    protected $delai_heure;

    /**
     * The value for the id_entite_relance field.
     * @var        int
     */
    protected $id_entite_relance;

    /**
     * The value for the id_agent_relance field.
     * @var        int
     */
    protected $id_agent_relance;

    /**
     * The value for the cloture field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $cloture;

    /**
     * The value for the calcul_hierarchie field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $calcul_hierarchie;

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
        $this->cloture = '1';
        $this->calcul_hierarchie = '0';
    }

    /**
     * Initializes internal state of BaseTEtapeCircuitValidation object.
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
     * Get the [libelle_etape_fr] column value.
     * 
     * @return string
     */
    public function getLibelleEtapeFr()
    {

        return $this->libelle_etape_fr;
    }

    /**
     * Get the [libelle_etape_ar] column value.
     * 
     * @return string
     */
    public function getLibelleEtapeAr()
    {

        return $this->libelle_etape_ar;
    }

    /**
     * Get the [numero_etape] column value.
     * 
     * @return int
     */
    public function getNumeroEtape()
    {

        return $this->numero_etape;
    }

    /**
     * Get the [id_type_etape] column value.
     * 
     * @return int
     */
    public function getIdTypeEtape()
    {

        return $this->id_type_etape;
    }

    /**
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Get the [id_circuit_validation] column value.
     * 
     * @return int
     */
    public function getIdCircuitValidation()
    {

        return $this->id_circuit_validation;
    }

    /**
     * Get the [niveau_depart] column value.
     * 
     * @return int
     */
    public function getNiveauDepart()
    {

        return $this->niveau_depart;
    }

    /**
     * Get the [niveau_fin] column value.
     * 
     * @return int
     */
    public function getNiveauFin()
    {

        return $this->niveau_fin;
    }

    /**
     * Get the [id_signataire] column value.
     * 
     * @return int
     */
    public function getIdSignataire()
    {

        return $this->id_signataire;
    }

    /**
     * Get the [visa_signature] column value.
     * 
     * @return string
     */
    public function getVisaSignature()
    {

        return $this->visa_signature;
    }

    /**
     * Get the [regle_validation] column value.
     * 
     * @return string
     */
    public function getRegleValidation()
    {

        return $this->regle_validation;
    }

    /**
     * Get the [regle_refus] column value.
     * 
     * @return string
     */
    public function getRegleRefus()
    {

        return $this->regle_refus;
    }

    /**
     * Get the [delai_etape] column value.
     * 
     * @return int
     */
    public function getDelaiEtape()
    {

        return $this->delai_etape;
    }

    /**
     * Get the [delai_heure] column value.
     * 
     * @return int
     */
    public function getDelaiHeure()
    {

        return $this->delai_heure;
    }

    /**
     * Get the [id_entite_relance] column value.
     * 
     * @return int
     */
    public function getIdEntiteRelance()
    {

        return $this->id_entite_relance;
    }

    /**
     * Get the [id_agent_relance] column value.
     * 
     * @return int
     */
    public function getIdAgentRelance()
    {

        return $this->id_agent_relance;
    }

    /**
     * Get the [cloture] column value.
     * 
     * @return string
     */
    public function getCloture()
    {

        return $this->cloture;
    }

    /**
     * Get the [calcul_hierarchie] column value.
     * 
     * @return string
     */
    public function getCalculHierarchie()
    {

        return $this->calcul_hierarchie;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [libelle_etape_fr] column.
     * 
     * @param string $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setLibelleEtapeFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_etape_fr !== $v) {
            $this->libelle_etape_fr = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::LIBELLE_ETAPE_FR;
        }


        return $this;
    } // setLibelleEtapeFr()

    /**
     * Set the value of [libelle_etape_ar] column.
     * 
     * @param string $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setLibelleEtapeAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_etape_ar !== $v) {
            $this->libelle_etape_ar = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::LIBELLE_ETAPE_AR;
        }


        return $this;
    } // setLibelleEtapeAr()

    /**
     * Set the value of [numero_etape] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setNumeroEtape($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero_etape !== $v) {
            $this->numero_etape = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::NUMERO_ETAPE;
        }


        return $this;
    } // setNumeroEtape()

    /**
     * Set the value of [id_type_etape] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setIdTypeEtape($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_etape !== $v) {
            $this->id_type_etape = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::ID_TYPE_ETAPE;
        }


        return $this;
    } // setIdTypeEtape()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [id_circuit_validation] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setIdCircuitValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_circuit_validation !== $v) {
            $this->id_circuit_validation = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::ID_CIRCUIT_VALIDATION;
        }


        return $this;
    } // setIdCircuitValidation()

    /**
     * Set the value of [niveau_depart] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setNiveauDepart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->niveau_depart !== $v) {
            $this->niveau_depart = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::NIVEAU_DEPART;
        }


        return $this;
    } // setNiveauDepart()

    /**
     * Set the value of [niveau_fin] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setNiveauFin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->niveau_fin !== $v) {
            $this->niveau_fin = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::NIVEAU_FIN;
        }


        return $this;
    } // setNiveauFin()

    /**
     * Set the value of [id_signataire] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setIdSignataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_signataire !== $v) {
            $this->id_signataire = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::ID_SIGNATAIRE;
        }


        return $this;
    } // setIdSignataire()

    /**
     * Set the value of [visa_signature] column.
     * 
     * @param string $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setVisaSignature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visa_signature !== $v) {
            $this->visa_signature = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::VISA_SIGNATURE;
        }


        return $this;
    } // setVisaSignature()

    /**
     * Set the value of [regle_validation] column.
     * 
     * @param string $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setRegleValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->regle_validation !== $v) {
            $this->regle_validation = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::REGLE_VALIDATION;
        }


        return $this;
    } // setRegleValidation()

    /**
     * Set the value of [regle_refus] column.
     * 
     * @param string $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setRegleRefus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->regle_refus !== $v) {
            $this->regle_refus = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::REGLE_REFUS;
        }


        return $this;
    } // setRegleRefus()

    /**
     * Set the value of [delai_etape] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setDelaiEtape($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_etape !== $v) {
            $this->delai_etape = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::DELAI_ETAPE;
        }


        return $this;
    } // setDelaiEtape()

    /**
     * Set the value of [delai_heure] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setDelaiHeure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_heure !== $v) {
            $this->delai_heure = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::DELAI_HEURE;
        }


        return $this;
    } // setDelaiHeure()

    /**
     * Set the value of [id_entite_relance] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setIdEntiteRelance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_relance !== $v) {
            $this->id_entite_relance = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::ID_ENTITE_RELANCE;
        }


        return $this;
    } // setIdEntiteRelance()

    /**
     * Set the value of [id_agent_relance] column.
     * 
     * @param int $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setIdAgentRelance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_relance !== $v) {
            $this->id_agent_relance = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::ID_AGENT_RELANCE;
        }


        return $this;
    } // setIdAgentRelance()

    /**
     * Set the value of [cloture] column.
     * 
     * @param string $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setCloture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cloture !== $v) {
            $this->cloture = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::CLOTURE;
        }


        return $this;
    } // setCloture()

    /**
     * Set the value of [calcul_hierarchie] column.
     * 
     * @param string $v new value
     * @return TEtapeCircuitValidation The current object (for fluent API support)
     */
    public function setCalculHierarchie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->calcul_hierarchie !== $v) {
            $this->calcul_hierarchie = $v;
            $this->modifiedColumns[] = TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE;
        }


        return $this;
    } // setCalculHierarchie()

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
            if ($this->cloture !== '1') {
                return false;
            }

            if ($this->calcul_hierarchie !== '0') {
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
            $this->libelle_etape_fr = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->libelle_etape_ar = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->numero_etape = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_type_etape = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->id_entite = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_circuit_validation = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->niveau_depart = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->niveau_fin = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->id_signataire = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->visa_signature = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->regle_validation = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->regle_refus = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->delai_etape = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->delai_heure = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->id_entite_relance = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->id_agent_relance = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->cloture = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->calcul_hierarchie = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = TEtapeCircuitValidationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TEtapeCircuitValidation object", $e);
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
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TEtapeCircuitValidationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TEtapeCircuitValidationQuery::create()
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
            $con = Propel::getConnection(TEtapeCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TEtapeCircuitValidationPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TEtapeCircuitValidationPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TEtapeCircuitValidationPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::LIBELLE_ETAPE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_ETAPE_FR`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::LIBELLE_ETAPE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_ETAPE_AR`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::NUMERO_ETAPE)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_ETAPE`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_TYPE_ETAPE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_TYPE_ETAPE`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_CIRCUIT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_CIRCUIT_VALIDATION`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::NIVEAU_DEPART)) {
            $modifiedColumns[':p' . $index++]  = '`NIVEAU_DEPART`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::NIVEAU_FIN)) {
            $modifiedColumns[':p' . $index++]  = '`NIVEAU_FIN`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_SIGNATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_SIGNATAIRE`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::VISA_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = '`VISA_SIGNATURE`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::REGLE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`REGLE_VALIDATION`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::REGLE_REFUS)) {
            $modifiedColumns[':p' . $index++]  = '`REGLE_REFUS`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::DELAI_ETAPE)) {
            $modifiedColumns[':p' . $index++]  = '`DELAI_ETAPE`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::DELAI_HEURE)) {
            $modifiedColumns[':p' . $index++]  = '`DELAI_HEURE`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_ENTITE_RELANCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_RELANCE`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_AGENT_RELANCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_RELANCE`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::CLOTURE)) {
            $modifiedColumns[':p' . $index++]  = '`CLOTURE`';
        }
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE)) {
            $modifiedColumns[':p' . $index++]  = '`CALCUL_HIERARCHIE`';
        }

        $sql = sprintf(
            'INSERT INTO `t_etape_circuit_validation` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`LIBELLE_ETAPE_FR`':						
                        $stmt->bindValue($identifier, $this->libelle_etape_fr, PDO::PARAM_STR);
                        break;
                    case '`LIBELLE_ETAPE_AR`':						
                        $stmt->bindValue($identifier, $this->libelle_etape_ar, PDO::PARAM_STR);
                        break;
                    case '`NUMERO_ETAPE`':						
                        $stmt->bindValue($identifier, $this->numero_etape, PDO::PARAM_INT);
                        break;
                    case '`ID_TYPE_ETAPE`':						
                        $stmt->bindValue($identifier, $this->id_type_etape, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`ID_CIRCUIT_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->id_circuit_validation, PDO::PARAM_INT);
                        break;
                    case '`NIVEAU_DEPART`':						
                        $stmt->bindValue($identifier, $this->niveau_depart, PDO::PARAM_INT);
                        break;
                    case '`NIVEAU_FIN`':						
                        $stmt->bindValue($identifier, $this->niveau_fin, PDO::PARAM_INT);
                        break;
                    case '`ID_SIGNATAIRE`':						
                        $stmt->bindValue($identifier, $this->id_signataire, PDO::PARAM_INT);
                        break;
                    case '`VISA_SIGNATURE`':						
                        $stmt->bindValue($identifier, $this->visa_signature, PDO::PARAM_STR);
                        break;
                    case '`REGLE_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->regle_validation, PDO::PARAM_STR);
                        break;
                    case '`REGLE_REFUS`':						
                        $stmt->bindValue($identifier, $this->regle_refus, PDO::PARAM_STR);
                        break;
                    case '`DELAI_ETAPE`':						
                        $stmt->bindValue($identifier, $this->delai_etape, PDO::PARAM_INT);
                        break;
                    case '`DELAI_HEURE`':						
                        $stmt->bindValue($identifier, $this->delai_heure, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE_RELANCE`':						
                        $stmt->bindValue($identifier, $this->id_entite_relance, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_RELANCE`':						
                        $stmt->bindValue($identifier, $this->id_agent_relance, PDO::PARAM_INT);
                        break;
                    case '`CLOTURE`':						
                        $stmt->bindValue($identifier, $this->cloture, PDO::PARAM_STR);
                        break;
                    case '`CALCUL_HIERARCHIE`':						
                        $stmt->bindValue($identifier, $this->calcul_hierarchie, PDO::PARAM_STR);
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


            if (($retval = TEtapeCircuitValidationPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TEtapeCircuitValidationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLibelleEtapeFr();
                break;
            case 2:
                return $this->getLibelleEtapeAr();
                break;
            case 3:
                return $this->getNumeroEtape();
                break;
            case 4:
                return $this->getIdTypeEtape();
                break;
            case 5:
                return $this->getIdEntite();
                break;
            case 6:
                return $this->getIdCircuitValidation();
                break;
            case 7:
                return $this->getNiveauDepart();
                break;
            case 8:
                return $this->getNiveauFin();
                break;
            case 9:
                return $this->getIdSignataire();
                break;
            case 10:
                return $this->getVisaSignature();
                break;
            case 11:
                return $this->getRegleValidation();
                break;
            case 12:
                return $this->getRegleRefus();
                break;
            case 13:
                return $this->getDelaiEtape();
                break;
            case 14:
                return $this->getDelaiHeure();
                break;
            case 15:
                return $this->getIdEntiteRelance();
                break;
            case 16:
                return $this->getIdAgentRelance();
                break;
            case 17:
                return $this->getCloture();
                break;
            case 18:
                return $this->getCalculHierarchie();
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
        if (isset($alreadyDumpedObjects['TEtapeCircuitValidation'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TEtapeCircuitValidation'][$this->getPrimaryKey()] = true;
        $keys = TEtapeCircuitValidationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getLibelleEtapeFr(),
            $keys[2] => $this->getLibelleEtapeAr(),
            $keys[3] => $this->getNumeroEtape(),
            $keys[4] => $this->getIdTypeEtape(),
            $keys[5] => $this->getIdEntite(),
            $keys[6] => $this->getIdCircuitValidation(),
            $keys[7] => $this->getNiveauDepart(),
            $keys[8] => $this->getNiveauFin(),
            $keys[9] => $this->getIdSignataire(),
            $keys[10] => $this->getVisaSignature(),
            $keys[11] => $this->getRegleValidation(),
            $keys[12] => $this->getRegleRefus(),
            $keys[13] => $this->getDelaiEtape(),
            $keys[14] => $this->getDelaiHeure(),
            $keys[15] => $this->getIdEntiteRelance(),
            $keys[16] => $this->getIdAgentRelance(),
            $keys[17] => $this->getCloture(),
            $keys[18] => $this->getCalculHierarchie(),
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
        $pos = TEtapeCircuitValidationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLibelleEtapeFr($value);
                break;
            case 2:
                $this->setLibelleEtapeAr($value);
                break;
            case 3:
                $this->setNumeroEtape($value);
                break;
            case 4:
                $this->setIdTypeEtape($value);
                break;
            case 5:
                $this->setIdEntite($value);
                break;
            case 6:
                $this->setIdCircuitValidation($value);
                break;
            case 7:
                $this->setNiveauDepart($value);
                break;
            case 8:
                $this->setNiveauFin($value);
                break;
            case 9:
                $this->setIdSignataire($value);
                break;
            case 10:
                $this->setVisaSignature($value);
                break;
            case 11:
                $this->setRegleValidation($value);
                break;
            case 12:
                $this->setRegleRefus($value);
                break;
            case 13:
                $this->setDelaiEtape($value);
                break;
            case 14:
                $this->setDelaiHeure($value);
                break;
            case 15:
                $this->setIdEntiteRelance($value);
                break;
            case 16:
                $this->setIdAgentRelance($value);
                break;
            case 17:
                $this->setCloture($value);
                break;
            case 18:
                $this->setCalculHierarchie($value);
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
        $keys = TEtapeCircuitValidationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLibelleEtapeFr($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelleEtapeAr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumeroEtape($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdTypeEtape($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdEntite($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdCircuitValidation($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNiveauDepart($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNiveauFin($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIdSignataire($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setVisaSignature($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setRegleValidation($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRegleRefus($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDelaiEtape($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDelaiHeure($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdEntiteRelance($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdAgentRelance($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCloture($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setCalculHierarchie($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TEtapeCircuitValidationPeer::DATABASE_NAME);

        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID)) $criteria->add(TEtapeCircuitValidationPeer::ID, $this->id);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::LIBELLE_ETAPE_FR)) $criteria->add(TEtapeCircuitValidationPeer::LIBELLE_ETAPE_FR, $this->libelle_etape_fr);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::LIBELLE_ETAPE_AR)) $criteria->add(TEtapeCircuitValidationPeer::LIBELLE_ETAPE_AR, $this->libelle_etape_ar);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::NUMERO_ETAPE)) $criteria->add(TEtapeCircuitValidationPeer::NUMERO_ETAPE, $this->numero_etape);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_TYPE_ETAPE)) $criteria->add(TEtapeCircuitValidationPeer::ID_TYPE_ETAPE, $this->id_type_etape);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_ENTITE)) $criteria->add(TEtapeCircuitValidationPeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_CIRCUIT_VALIDATION)) $criteria->add(TEtapeCircuitValidationPeer::ID_CIRCUIT_VALIDATION, $this->id_circuit_validation);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::NIVEAU_DEPART)) $criteria->add(TEtapeCircuitValidationPeer::NIVEAU_DEPART, $this->niveau_depart);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::NIVEAU_FIN)) $criteria->add(TEtapeCircuitValidationPeer::NIVEAU_FIN, $this->niveau_fin);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_SIGNATAIRE)) $criteria->add(TEtapeCircuitValidationPeer::ID_SIGNATAIRE, $this->id_signataire);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::VISA_SIGNATURE)) $criteria->add(TEtapeCircuitValidationPeer::VISA_SIGNATURE, $this->visa_signature);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::REGLE_VALIDATION)) $criteria->add(TEtapeCircuitValidationPeer::REGLE_VALIDATION, $this->regle_validation);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::REGLE_REFUS)) $criteria->add(TEtapeCircuitValidationPeer::REGLE_REFUS, $this->regle_refus);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::DELAI_ETAPE)) $criteria->add(TEtapeCircuitValidationPeer::DELAI_ETAPE, $this->delai_etape);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::DELAI_HEURE)) $criteria->add(TEtapeCircuitValidationPeer::DELAI_HEURE, $this->delai_heure);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_ENTITE_RELANCE)) $criteria->add(TEtapeCircuitValidationPeer::ID_ENTITE_RELANCE, $this->id_entite_relance);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::ID_AGENT_RELANCE)) $criteria->add(TEtapeCircuitValidationPeer::ID_AGENT_RELANCE, $this->id_agent_relance);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::CLOTURE)) $criteria->add(TEtapeCircuitValidationPeer::CLOTURE, $this->cloture);
        if ($this->isColumnModified(TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE)) $criteria->add(TEtapeCircuitValidationPeer::CALCUL_HIERARCHIE, $this->calcul_hierarchie);

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
        $criteria = new Criteria(TEtapeCircuitValidationPeer::DATABASE_NAME);
        $criteria->add(TEtapeCircuitValidationPeer::ID, $this->id);

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
     * @param object $copyObj An object of TEtapeCircuitValidation (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLibelleEtapeFr($this->getLibelleEtapeFr());
        $copyObj->setLibelleEtapeAr($this->getLibelleEtapeAr());
        $copyObj->setNumeroEtape($this->getNumeroEtape());
        $copyObj->setIdTypeEtape($this->getIdTypeEtape());
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setIdCircuitValidation($this->getIdCircuitValidation());
        $copyObj->setNiveauDepart($this->getNiveauDepart());
        $copyObj->setNiveauFin($this->getNiveauFin());
        $copyObj->setIdSignataire($this->getIdSignataire());
        $copyObj->setVisaSignature($this->getVisaSignature());
        $copyObj->setRegleValidation($this->getRegleValidation());
        $copyObj->setRegleRefus($this->getRegleRefus());
        $copyObj->setDelaiEtape($this->getDelaiEtape());
        $copyObj->setDelaiHeure($this->getDelaiHeure());
        $copyObj->setIdEntiteRelance($this->getIdEntiteRelance());
        $copyObj->setIdAgentRelance($this->getIdAgentRelance());
        $copyObj->setCloture($this->getCloture());
        $copyObj->setCalculHierarchie($this->getCalculHierarchie());
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
     * @return TEtapeCircuitValidation Clone of current object.
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
     * @return TEtapeCircuitValidationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TEtapeCircuitValidationPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->libelle_etape_fr = null;
        $this->libelle_etape_ar = null;
        $this->numero_etape = null;
        $this->id_type_etape = null;
        $this->id_entite = null;
        $this->id_circuit_validation = null;
        $this->niveau_depart = null;
        $this->niveau_fin = null;
        $this->id_signataire = null;
        $this->visa_signature = null;
        $this->regle_validation = null;
        $this->regle_refus = null;
        $this->delai_etape = null;
        $this->delai_heure = null;
        $this->id_entite_relance = null;
        $this->id_agent_relance = null;
        $this->cloture = null;
        $this->calcul_hierarchie = null;
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
        return (string) $this->exportTo(TEtapeCircuitValidationPeer::DEFAULT_STRING_FORMAT);
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
