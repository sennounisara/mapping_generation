<?php


/**
 * Base class that represents a row from the 'Societes_Exclues' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonSocietesExclues extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonSocietesExcluesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonSocietesExcluesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_societes_exclues field.
     * @var        int
     */
    protected $id_societes_exclues;

    /**
     * The value for the organisme_acronyme field.
     * @var        string
     */
    protected $organisme_acronyme;

    /**
     * The value for the id_service field.
     * @var        int
     */
    protected $id_service;

    /**
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the nom_document field.
     * @var        string
     */
    protected $nom_document;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * The value for the taille_document field.
     * @var        string
     */
    protected $taille_document;

    /**
     * The value for the identifiant_entreprise field.
     * @var        string
     */
    protected $identifiant_entreprise;

    /**
     * The value for the raison_sociale field.
     * @var        string
     */
    protected $raison_sociale;

    /**
     * The value for the motif field.
     * @var        string
     */
    protected $motif;

    /**
     * The value for the raison_sociale_fr field.
     * @var        string
     */
    protected $raison_sociale_fr;

    /**
     * The value for the motif_fr field.
     * @var        string
     */
    protected $motif_fr;

    /**
     * The value for the raison_sociale_ar field.
     * @var        string
     */
    protected $raison_sociale_ar;

    /**
     * The value for the motif_ar field.
     * @var        string
     */
    protected $motif_ar;

    /**
     * The value for the type_exclusion field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_exclusion;

    /**
     * The value for the date_debut_exclusion field.
     * @var        string
     */
    protected $date_debut_exclusion;

    /**
     * The value for the date_fin_exclusion field.
     * @var        string
     */
    protected $date_fin_exclusion;

    /**
     * The value for the type_portee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_portee;

    /**
     * The value for the raison_sociale_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $raison_sociale_it;

    /**
     * The value for the motif_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $motif_it;

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
        $this->type_exclusion = '0';
        $this->type_portee = '0';
        $this->raison_sociale_it = '';
        $this->motif_it = '';
    }

    /**
     * Initializes internal state of BaseCommonSocietesExclues object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_societes_exclues] column value.
     * 
     * @return int
     */
    public function getIdSocietesExclues()
    {

        return $this->id_societes_exclues;
    }

    /**
     * Get the [organisme_acronyme] column value.
     * 
     * @return string
     */
    public function getOrganismeAcronyme()
    {

        return $this->organisme_acronyme;
    }

    /**
     * Get the [id_service] column value.
     * 
     * @return int
     */
    public function getIdService()
    {

        return $this->id_service;
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
     * Get the [nom_document] column value.
     * 
     * @return string
     */
    public function getNomDocument()
    {

        return $this->nom_document;
    }

    /**
     * Get the [id_blob] column value.
     * 
     * @return int
     */
    public function getIdBlob()
    {

        return $this->id_blob;
    }

    /**
     * Get the [taille_document] column value.
     * 
     * @return string
     */
    public function getTailleDocument()
    {

        return $this->taille_document;
    }

    /**
     * Get the [identifiant_entreprise] column value.
     * 
     * @return string
     */
    public function getIdentifiantEntreprise()
    {

        return $this->identifiant_entreprise;
    }

    /**
     * Get the [raison_sociale] column value.
     * 
     * @return string
     */
    public function getRaisonSociale()
    {

        return $this->raison_sociale;
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
     * Get the [raison_sociale_fr] column value.
     * 
     * @return string
     */
    public function getRaisonSocialeFr()
    {

        return $this->raison_sociale_fr;
    }

    /**
     * Get the [motif_fr] column value.
     * 
     * @return string
     */
    public function getMotifFr()
    {

        return $this->motif_fr;
    }

    /**
     * Get the [raison_sociale_ar] column value.
     * 
     * @return string
     */
    public function getRaisonSocialeAr()
    {

        return $this->raison_sociale_ar;
    }

    /**
     * Get the [motif_ar] column value.
     * 
     * @return string
     */
    public function getMotifAr()
    {

        return $this->motif_ar;
    }

    /**
     * Get the [type_exclusion] column value.
     * 
     * @return string
     */
    public function getTypeExclusion()
    {

        return $this->type_exclusion;
    }

    /**
     * Get the [date_debut_exclusion] column value.
     * 
     * @return string
     */
    public function getDateDebutExclusion()
    {

        return $this->date_debut_exclusion;
    }

    /**
     * Get the [date_fin_exclusion] column value.
     * 
     * @return string
     */
    public function getDateFinExclusion()
    {

        return $this->date_fin_exclusion;
    }

    /**
     * Get the [type_portee] column value.
     * 
     * @return string
     */
    public function getTypePortee()
    {

        return $this->type_portee;
    }

    /**
     * Get the [raison_sociale_it] column value.
     * 
     * @return string
     */
    public function getRaisonSocialeIt()
    {

        return $this->raison_sociale_it;
    }

    /**
     * Get the [motif_it] column value.
     * 
     * @return string
     */
    public function getMotifIt()
    {

        return $this->motif_it;
    }

    /**
     * Set the value of [id_societes_exclues] column.
     * 
     * @param int $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setIdSocietesExclues($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_societes_exclues !== $v) {
            $this->id_societes_exclues = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES;
        }


        return $this;
    } // setIdSocietesExclues()

    /**
     * Set the value of [organisme_acronyme] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setOrganismeAcronyme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme_acronyme !== $v) {
            $this->organisme_acronyme = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::ORGANISME_ACRONYME;
        }


        return $this;
    } // setOrganismeAcronyme()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [nom_document] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setNomDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_document !== $v) {
            $this->nom_document = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::NOM_DOCUMENT;
        }


        return $this;
    } // setNomDocument()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [taille_document] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setTailleDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille_document !== $v) {
            $this->taille_document = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::TAILLE_DOCUMENT;
        }


        return $this;
    } // setTailleDocument()

    /**
     * Set the value of [identifiant_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setIdentifiantEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_entreprise !== $v) {
            $this->identifiant_entreprise = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::IDENTIFIANT_ENTREPRISE;
        }


        return $this;
    } // setIdentifiantEntreprise()

    /**
     * Set the value of [raison_sociale] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setRaisonSociale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raison_sociale !== $v) {
            $this->raison_sociale = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::RAISON_SOCIALE;
        }


        return $this;
    } // setRaisonSociale()

    /**
     * Set the value of [motif] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setMotif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif !== $v) {
            $this->motif = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::MOTIF;
        }


        return $this;
    } // setMotif()

    /**
     * Set the value of [raison_sociale_fr] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setRaisonSocialeFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raison_sociale_fr !== $v) {
            $this->raison_sociale_fr = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::RAISON_SOCIALE_FR;
        }


        return $this;
    } // setRaisonSocialeFr()

    /**
     * Set the value of [motif_fr] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setMotifFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_fr !== $v) {
            $this->motif_fr = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::MOTIF_FR;
        }


        return $this;
    } // setMotifFr()

    /**
     * Set the value of [raison_sociale_ar] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setRaisonSocialeAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raison_sociale_ar !== $v) {
            $this->raison_sociale_ar = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::RAISON_SOCIALE_AR;
        }


        return $this;
    } // setRaisonSocialeAr()

    /**
     * Set the value of [motif_ar] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setMotifAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_ar !== $v) {
            $this->motif_ar = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::MOTIF_AR;
        }


        return $this;
    } // setMotifAr()

    /**
     * Set the value of [type_exclusion] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setTypeExclusion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_exclusion !== $v) {
            $this->type_exclusion = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::TYPE_EXCLUSION;
        }


        return $this;
    } // setTypeExclusion()

    /**
     * Set the value of [date_debut_exclusion] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setDateDebutExclusion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_debut_exclusion !== $v) {
            $this->date_debut_exclusion = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::DATE_DEBUT_EXCLUSION;
        }


        return $this;
    } // setDateDebutExclusion()

    /**
     * Set the value of [date_fin_exclusion] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setDateFinExclusion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_fin_exclusion !== $v) {
            $this->date_fin_exclusion = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::DATE_FIN_EXCLUSION;
        }


        return $this;
    } // setDateFinExclusion()

    /**
     * Set the value of [type_portee] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setTypePortee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_portee !== $v) {
            $this->type_portee = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::TYPE_PORTEE;
        }


        return $this;
    } // setTypePortee()

    /**
     * Set the value of [raison_sociale_it] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setRaisonSocialeIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raison_sociale_it !== $v) {
            $this->raison_sociale_it = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::RAISON_SOCIALE_IT;
        }


        return $this;
    } // setRaisonSocialeIt()

    /**
     * Set the value of [motif_it] column.
     * 
     * @param string $v new value
     * @return CommonSocietesExclues The current object (for fluent API support)
     */
    public function setMotifIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_it !== $v) {
            $this->motif_it = $v;
            $this->modifiedColumns[] = CommonSocietesExcluesPeer::MOTIF_IT;
        }


        return $this;
    } // setMotifIt()

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
            if ($this->type_exclusion !== '0') {
                return false;
            }

            if ($this->type_portee !== '0') {
                return false;
            }

            if ($this->raison_sociale_it !== '') {
                return false;
            }

            if ($this->motif_it !== '') {
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

            $this->id_societes_exclues = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme_acronyme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_service = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_agent = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->nom_document = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_blob = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->taille_document = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->identifiant_entreprise = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->raison_sociale = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->motif = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->raison_sociale_fr = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->motif_fr = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->raison_sociale_ar = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->motif_ar = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->type_exclusion = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->date_debut_exclusion = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->date_fin_exclusion = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->type_portee = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->raison_sociale_it = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->motif_it = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = CommonSocietesExcluesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonSocietesExclues object", $e);
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
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonSocietesExcluesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonSocietesExcluesQuery::create()
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
            $con = Propel::getConnection(CommonSocietesExcluesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonSocietesExcluesPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES;
        if (null !== $this->id_societes_exclues) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES)) {
            $modifiedColumns[':p' . $index++]  = '`id_societes_exclues`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::ORGANISME_ACRONYME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme_acronyme`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::NOM_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_document`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::TAILLE_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`taille_document`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::IDENTIFIANT_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`identifiant_entreprise`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::RAISON_SOCIALE)) {
            $modifiedColumns[':p' . $index++]  = '`raison_sociale`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::MOTIF)) {
            $modifiedColumns[':p' . $index++]  = '`motif`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::RAISON_SOCIALE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`raison_sociale_fr`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::MOTIF_FR)) {
            $modifiedColumns[':p' . $index++]  = '`motif_fr`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::RAISON_SOCIALE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`raison_sociale_ar`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::MOTIF_AR)) {
            $modifiedColumns[':p' . $index++]  = '`motif_ar`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::TYPE_EXCLUSION)) {
            $modifiedColumns[':p' . $index++]  = '`type_exclusion`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::DATE_DEBUT_EXCLUSION)) {
            $modifiedColumns[':p' . $index++]  = '`date_debut_exclusion`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::DATE_FIN_EXCLUSION)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin_exclusion`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::TYPE_PORTEE)) {
            $modifiedColumns[':p' . $index++]  = '`type_portee`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::RAISON_SOCIALE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`raison_sociale_it`';
        }
        if ($this->isColumnModified(CommonSocietesExcluesPeer::MOTIF_IT)) {
            $modifiedColumns[':p' . $index++]  = '`motif_it`';
        }

        $sql = sprintf(
            'INSERT INTO `Societes_Exclues` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_societes_exclues`':						
                        $stmt->bindValue($identifier, $this->id_societes_exclues, PDO::PARAM_INT);
                        break;
                    case '`organisme_acronyme`':						
                        $stmt->bindValue($identifier, $this->organisme_acronyme, PDO::PARAM_STR);
                        break;
                    case '`id_service`':						
                        $stmt->bindValue($identifier, $this->id_service, PDO::PARAM_INT);
                        break;
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`nom_document`':						
                        $stmt->bindValue($identifier, $this->nom_document, PDO::PARAM_STR);
                        break;
                    case '`id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`taille_document`':						
                        $stmt->bindValue($identifier, $this->taille_document, PDO::PARAM_STR);
                        break;
                    case '`identifiant_entreprise`':						
                        $stmt->bindValue($identifier, $this->identifiant_entreprise, PDO::PARAM_STR);
                        break;
                    case '`raison_sociale`':						
                        $stmt->bindValue($identifier, $this->raison_sociale, PDO::PARAM_STR);
                        break;
                    case '`motif`':						
                        $stmt->bindValue($identifier, $this->motif, PDO::PARAM_STR);
                        break;
                    case '`raison_sociale_fr`':						
                        $stmt->bindValue($identifier, $this->raison_sociale_fr, PDO::PARAM_STR);
                        break;
                    case '`motif_fr`':						
                        $stmt->bindValue($identifier, $this->motif_fr, PDO::PARAM_STR);
                        break;
                    case '`raison_sociale_ar`':						
                        $stmt->bindValue($identifier, $this->raison_sociale_ar, PDO::PARAM_STR);
                        break;
                    case '`motif_ar`':						
                        $stmt->bindValue($identifier, $this->motif_ar, PDO::PARAM_STR);
                        break;
                    case '`type_exclusion`':						
                        $stmt->bindValue($identifier, $this->type_exclusion, PDO::PARAM_STR);
                        break;
                    case '`date_debut_exclusion`':						
                        $stmt->bindValue($identifier, $this->date_debut_exclusion, PDO::PARAM_STR);
                        break;
                    case '`date_fin_exclusion`':						
                        $stmt->bindValue($identifier, $this->date_fin_exclusion, PDO::PARAM_STR);
                        break;
                    case '`type_portee`':						
                        $stmt->bindValue($identifier, $this->type_portee, PDO::PARAM_STR);
                        break;
                    case '`raison_sociale_it`':						
                        $stmt->bindValue($identifier, $this->raison_sociale_it, PDO::PARAM_STR);
                        break;
                    case '`motif_it`':						
                        $stmt->bindValue($identifier, $this->motif_it, PDO::PARAM_STR);
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
        $this->setIdSocietesExclues($pk);

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


            if (($retval = CommonSocietesExcluesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonSocietesExcluesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdSocietesExclues();
                break;
            case 1:
                return $this->getOrganismeAcronyme();
                break;
            case 2:
                return $this->getIdService();
                break;
            case 3:
                return $this->getIdAgent();
                break;
            case 4:
                return $this->getNomDocument();
                break;
            case 5:
                return $this->getIdBlob();
                break;
            case 6:
                return $this->getTailleDocument();
                break;
            case 7:
                return $this->getIdentifiantEntreprise();
                break;
            case 8:
                return $this->getRaisonSociale();
                break;
            case 9:
                return $this->getMotif();
                break;
            case 10:
                return $this->getRaisonSocialeFr();
                break;
            case 11:
                return $this->getMotifFr();
                break;
            case 12:
                return $this->getRaisonSocialeAr();
                break;
            case 13:
                return $this->getMotifAr();
                break;
            case 14:
                return $this->getTypeExclusion();
                break;
            case 15:
                return $this->getDateDebutExclusion();
                break;
            case 16:
                return $this->getDateFinExclusion();
                break;
            case 17:
                return $this->getTypePortee();
                break;
            case 18:
                return $this->getRaisonSocialeIt();
                break;
            case 19:
                return $this->getMotifIt();
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
        if (isset($alreadyDumpedObjects['CommonSocietesExclues'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonSocietesExclues'][$this->getPrimaryKey()] = true;
        $keys = CommonSocietesExcluesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdSocietesExclues(),
            $keys[1] => $this->getOrganismeAcronyme(),
            $keys[2] => $this->getIdService(),
            $keys[3] => $this->getIdAgent(),
            $keys[4] => $this->getNomDocument(),
            $keys[5] => $this->getIdBlob(),
            $keys[6] => $this->getTailleDocument(),
            $keys[7] => $this->getIdentifiantEntreprise(),
            $keys[8] => $this->getRaisonSociale(),
            $keys[9] => $this->getMotif(),
            $keys[10] => $this->getRaisonSocialeFr(),
            $keys[11] => $this->getMotifFr(),
            $keys[12] => $this->getRaisonSocialeAr(),
            $keys[13] => $this->getMotifAr(),
            $keys[14] => $this->getTypeExclusion(),
            $keys[15] => $this->getDateDebutExclusion(),
            $keys[16] => $this->getDateFinExclusion(),
            $keys[17] => $this->getTypePortee(),
            $keys[18] => $this->getRaisonSocialeIt(),
            $keys[19] => $this->getMotifIt(),
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
        $pos = CommonSocietesExcluesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdSocietesExclues($value);
                break;
            case 1:
                $this->setOrganismeAcronyme($value);
                break;
            case 2:
                $this->setIdService($value);
                break;
            case 3:
                $this->setIdAgent($value);
                break;
            case 4:
                $this->setNomDocument($value);
                break;
            case 5:
                $this->setIdBlob($value);
                break;
            case 6:
                $this->setTailleDocument($value);
                break;
            case 7:
                $this->setIdentifiantEntreprise($value);
                break;
            case 8:
                $this->setRaisonSociale($value);
                break;
            case 9:
                $this->setMotif($value);
                break;
            case 10:
                $this->setRaisonSocialeFr($value);
                break;
            case 11:
                $this->setMotifFr($value);
                break;
            case 12:
                $this->setRaisonSocialeAr($value);
                break;
            case 13:
                $this->setMotifAr($value);
                break;
            case 14:
                $this->setTypeExclusion($value);
                break;
            case 15:
                $this->setDateDebutExclusion($value);
                break;
            case 16:
                $this->setDateFinExclusion($value);
                break;
            case 17:
                $this->setTypePortee($value);
                break;
            case 18:
                $this->setRaisonSocialeIt($value);
                break;
            case 19:
                $this->setMotifIt($value);
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
        $keys = CommonSocietesExcluesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdSocietesExclues($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganismeAcronyme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdService($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdAgent($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNomDocument($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdBlob($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTailleDocument($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdentifiantEntreprise($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRaisonSociale($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMotif($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setRaisonSocialeFr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMotifFr($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setRaisonSocialeAr($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMotifAr($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTypeExclusion($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateDebutExclusion($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDateFinExclusion($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTypePortee($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setRaisonSocialeIt($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMotifIt($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonSocietesExcluesPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES)) $criteria->add(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $this->id_societes_exclues);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::ORGANISME_ACRONYME)) $criteria->add(CommonSocietesExcluesPeer::ORGANISME_ACRONYME, $this->organisme_acronyme);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::ID_SERVICE)) $criteria->add(CommonSocietesExcluesPeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::ID_AGENT)) $criteria->add(CommonSocietesExcluesPeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::NOM_DOCUMENT)) $criteria->add(CommonSocietesExcluesPeer::NOM_DOCUMENT, $this->nom_document);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::ID_BLOB)) $criteria->add(CommonSocietesExcluesPeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::TAILLE_DOCUMENT)) $criteria->add(CommonSocietesExcluesPeer::TAILLE_DOCUMENT, $this->taille_document);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::IDENTIFIANT_ENTREPRISE)) $criteria->add(CommonSocietesExcluesPeer::IDENTIFIANT_ENTREPRISE, $this->identifiant_entreprise);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::RAISON_SOCIALE)) $criteria->add(CommonSocietesExcluesPeer::RAISON_SOCIALE, $this->raison_sociale);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::MOTIF)) $criteria->add(CommonSocietesExcluesPeer::MOTIF, $this->motif);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::RAISON_SOCIALE_FR)) $criteria->add(CommonSocietesExcluesPeer::RAISON_SOCIALE_FR, $this->raison_sociale_fr);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::MOTIF_FR)) $criteria->add(CommonSocietesExcluesPeer::MOTIF_FR, $this->motif_fr);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::RAISON_SOCIALE_AR)) $criteria->add(CommonSocietesExcluesPeer::RAISON_SOCIALE_AR, $this->raison_sociale_ar);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::MOTIF_AR)) $criteria->add(CommonSocietesExcluesPeer::MOTIF_AR, $this->motif_ar);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::TYPE_EXCLUSION)) $criteria->add(CommonSocietesExcluesPeer::TYPE_EXCLUSION, $this->type_exclusion);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::DATE_DEBUT_EXCLUSION)) $criteria->add(CommonSocietesExcluesPeer::DATE_DEBUT_EXCLUSION, $this->date_debut_exclusion);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::DATE_FIN_EXCLUSION)) $criteria->add(CommonSocietesExcluesPeer::DATE_FIN_EXCLUSION, $this->date_fin_exclusion);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::TYPE_PORTEE)) $criteria->add(CommonSocietesExcluesPeer::TYPE_PORTEE, $this->type_portee);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::RAISON_SOCIALE_IT)) $criteria->add(CommonSocietesExcluesPeer::RAISON_SOCIALE_IT, $this->raison_sociale_it);
        if ($this->isColumnModified(CommonSocietesExcluesPeer::MOTIF_IT)) $criteria->add(CommonSocietesExcluesPeer::MOTIF_IT, $this->motif_it);

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
        $criteria = new Criteria(CommonSocietesExcluesPeer::DATABASE_NAME);
        $criteria->add(CommonSocietesExcluesPeer::ID_SOCIETES_EXCLUES, $this->id_societes_exclues);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdSocietesExclues();
    }

    /**
     * Generic method to set the primary key (id_societes_exclues column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdSocietesExclues($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdSocietesExclues();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonSocietesExclues (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganismeAcronyme($this->getOrganismeAcronyme());
        $copyObj->setIdService($this->getIdService());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setNomDocument($this->getNomDocument());
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setTailleDocument($this->getTailleDocument());
        $copyObj->setIdentifiantEntreprise($this->getIdentifiantEntreprise());
        $copyObj->setRaisonSociale($this->getRaisonSociale());
        $copyObj->setMotif($this->getMotif());
        $copyObj->setRaisonSocialeFr($this->getRaisonSocialeFr());
        $copyObj->setMotifFr($this->getMotifFr());
        $copyObj->setRaisonSocialeAr($this->getRaisonSocialeAr());
        $copyObj->setMotifAr($this->getMotifAr());
        $copyObj->setTypeExclusion($this->getTypeExclusion());
        $copyObj->setDateDebutExclusion($this->getDateDebutExclusion());
        $copyObj->setDateFinExclusion($this->getDateFinExclusion());
        $copyObj->setTypePortee($this->getTypePortee());
        $copyObj->setRaisonSocialeIt($this->getRaisonSocialeIt());
        $copyObj->setMotifIt($this->getMotifIt());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdSocietesExclues(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonSocietesExclues Clone of current object.
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
     * @return CommonSocietesExcluesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonSocietesExcluesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_societes_exclues = null;
        $this->organisme_acronyme = null;
        $this->id_service = null;
        $this->id_agent = null;
        $this->nom_document = null;
        $this->id_blob = null;
        $this->taille_document = null;
        $this->identifiant_entreprise = null;
        $this->raison_sociale = null;
        $this->motif = null;
        $this->raison_sociale_fr = null;
        $this->motif_fr = null;
        $this->raison_sociale_ar = null;
        $this->motif_ar = null;
        $this->type_exclusion = null;
        $this->date_debut_exclusion = null;
        $this->date_fin_exclusion = null;
        $this->type_portee = null;
        $this->raison_sociale_it = null;
        $this->motif_it = null;
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
        return (string) $this->exportTo(CommonSocietesExcluesPeer::DEFAULT_STRING_FORMAT);
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
