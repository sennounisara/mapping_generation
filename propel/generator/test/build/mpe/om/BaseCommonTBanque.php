<?php


/**
 * Base class that represents a row from the 't_banque' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTBanque extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTBanquePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTBanquePeer
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
     * The value for the code field.
     * @var        string
     */
    protected $code;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the sigle field.
     * @var        string
     */
    protected $sigle;

    /**
     * The value for the mode field.
     * @var        string
     */
    protected $mode;

    /**
     * The value for the adresse_siege field.
     * @var        string
     */
    protected $adresse_siege;

    /**
     * The value for the ville_siege field.
     * @var        string
     */
    protected $ville_siege;

    /**
     * The value for the id_ref_ville field.
     * @var        int
     */
    protected $id_ref_ville;

    /**
     * The value for the position_debut_code_agence field.
     * @var        int
     */
    protected $position_debut_code_agence;

    /**
     * The value for the taille_code_agence field.
     * @var        int
     */
    protected $taille_code_agence;

    /**
     * The value for the position_debut_code_ville field.
     * @var        int
     */
    protected $position_debut_code_ville;

    /**
     * The value for the taille_code_ville field.
     * @var        int
     */
    protected $taille_code_ville;

    /**
     * The value for the affichage_compte_virement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affichage_compte_virement;

    /**
     * The value for the config_id_modele_demande_caution field.
     * @var        int
     */
    protected $config_id_modele_demande_caution;

    /**
     * The value for the numero_agrement field.
     * @var        string
     */
    protected $numero_agrement;

    /**
     * The value for the date_agrement field.
     * @var        string
     */
    protected $date_agrement;

    /**
     * The value for the config_generer_reference_caution field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $config_generer_reference_caution;

    /**
     * The value for the config_id_document_modele field.
     * @var        int
     */
    protected $config_id_document_modele;

    /**
     * The value for the config_id_modele_demande_restitution field.
     * @var        int
     */
    protected $config_id_modele_demande_restitution;

    /**
     * @var        PropelObjectCollection|CommonTCompteBancaire[] Collection to store aggregation of CommonTCompteBancaire objects.
     */
    protected $collCommonTCompteBancaires;
    protected $collCommonTCompteBancairesPartial;

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
    protected $commonTCompteBancairesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->affichage_compte_virement = '0';
        $this->config_generer_reference_caution = '0';
    }

    /**
     * Initializes internal state of BaseCommonTBanque object.
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
     * Get the [code] column value.
     * 
     * @return string
     */
    public function getCode()
    {

        return $this->code;
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
     * Get the [sigle] column value.
     * 
     * @return string
     */
    public function getSigle()
    {

        return $this->sigle;
    }

    /**
     * Get the [mode] column value.
     * 
     * @return string
     */
    public function getMode()
    {

        return $this->mode;
    }

    /**
     * Get the [adresse_siege] column value.
     * 
     * @return string
     */
    public function getAdresseSiege()
    {

        return $this->adresse_siege;
    }

    /**
     * Get the [ville_siege] column value.
     * 
     * @return string
     */
    public function getVilleSiege()
    {

        return $this->ville_siege;
    }

    /**
     * Get the [id_ref_ville] column value.
     * 
     * @return int
     */
    public function getIdRefVille()
    {

        return $this->id_ref_ville;
    }

    /**
     * Get the [position_debut_code_agence] column value.
     * 
     * @return int
     */
    public function getPositionDebutCodeAgence()
    {

        return $this->position_debut_code_agence;
    }

    /**
     * Get the [taille_code_agence] column value.
     * 
     * @return int
     */
    public function getTailleCodeAgence()
    {

        return $this->taille_code_agence;
    }

    /**
     * Get the [position_debut_code_ville] column value.
     * 
     * @return int
     */
    public function getPositionDebutCodeVille()
    {

        return $this->position_debut_code_ville;
    }

    /**
     * Get the [taille_code_ville] column value.
     * 
     * @return int
     */
    public function getTailleCodeVille()
    {

        return $this->taille_code_ville;
    }

    /**
     * Get the [affichage_compte_virement] column value.
     * 
     * @return string
     */
    public function getAffichageCompteVirement()
    {

        return $this->affichage_compte_virement;
    }

    /**
     * Get the [config_id_modele_demande_caution] column value.
     * 
     * @return int
     */
    public function getConfigIdModeleDemandeCaution()
    {

        return $this->config_id_modele_demande_caution;
    }

    /**
     * Get the [numero_agrement] column value.
     * 
     * @return string
     */
    public function getNumeroAgrement()
    {

        return $this->numero_agrement;
    }

    /**
     * Get the [optionally formatted] temporal [date_agrement] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateAgrement($format = null)
    {
        if ($this->date_agrement === null) {
            return null;
        }

        if ($this->date_agrement === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_agrement);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_agrement, true), $x);
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
     * Get the [config_generer_reference_caution] column value.
     * 
     * @return string
     */
    public function getConfigGenererReferenceCaution()
    {

        return $this->config_generer_reference_caution;
    }

    /**
     * Get the [config_id_document_modele] column value.
     * 
     * @return int
     */
    public function getConfigIdDocumentModele()
    {

        return $this->config_id_document_modele;
    }

    /**
     * Get the [config_id_modele_demande_restitution] column value.
     * 
     * @return int
     */
    public function getConfigIdModeleDemandeRestitution()
    {

        return $this->config_id_modele_demande_restitution;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [code] column.
     * 
     * @param string $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::CODE;
        }


        return $this;
    } // setCode()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [sigle] column.
     * 
     * @param string $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setSigle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle !== $v) {
            $this->sigle = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::SIGLE;
        }


        return $this;
    } // setSigle()

    /**
     * Set the value of [mode] column.
     * 
     * @param string $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setMode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode !== $v) {
            $this->mode = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::MODE;
        }


        return $this;
    } // setMode()

    /**
     * Set the value of [adresse_siege] column.
     * 
     * @param string $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setAdresseSiege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_siege !== $v) {
            $this->adresse_siege = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::ADRESSE_SIEGE;
        }


        return $this;
    } // setAdresseSiege()

    /**
     * Set the value of [ville_siege] column.
     * 
     * @param string $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setVilleSiege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_siege !== $v) {
            $this->ville_siege = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::VILLE_SIEGE;
        }


        return $this;
    } // setVilleSiege()

    /**
     * Set the value of [id_ref_ville] column.
     * 
     * @param int $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setIdRefVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ref_ville !== $v) {
            $this->id_ref_ville = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::ID_REF_VILLE;
        }


        return $this;
    } // setIdRefVille()

    /**
     * Set the value of [position_debut_code_agence] column.
     * 
     * @param int $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setPositionDebutCodeAgence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->position_debut_code_agence !== $v) {
            $this->position_debut_code_agence = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::POSITION_DEBUT_CODE_AGENCE;
        }


        return $this;
    } // setPositionDebutCodeAgence()

    /**
     * Set the value of [taille_code_agence] column.
     * 
     * @param int $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setTailleCodeAgence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taille_code_agence !== $v) {
            $this->taille_code_agence = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::TAILLE_CODE_AGENCE;
        }


        return $this;
    } // setTailleCodeAgence()

    /**
     * Set the value of [position_debut_code_ville] column.
     * 
     * @param int $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setPositionDebutCodeVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->position_debut_code_ville !== $v) {
            $this->position_debut_code_ville = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::POSITION_DEBUT_CODE_VILLE;
        }


        return $this;
    } // setPositionDebutCodeVille()

    /**
     * Set the value of [taille_code_ville] column.
     * 
     * @param int $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setTailleCodeVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taille_code_ville !== $v) {
            $this->taille_code_ville = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::TAILLE_CODE_VILLE;
        }


        return $this;
    } // setTailleCodeVille()

    /**
     * Set the value of [affichage_compte_virement] column.
     * 
     * @param string $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setAffichageCompteVirement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_compte_virement !== $v) {
            $this->affichage_compte_virement = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT;
        }


        return $this;
    } // setAffichageCompteVirement()

    /**
     * Set the value of [config_id_modele_demande_caution] column.
     * 
     * @param int $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setConfigIdModeleDemandeCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->config_id_modele_demande_caution !== $v) {
            $this->config_id_modele_demande_caution = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_CAUTION;
        }


        return $this;
    } // setConfigIdModeleDemandeCaution()

    /**
     * Set the value of [numero_agrement] column.
     * 
     * @param string $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setNumeroAgrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_agrement !== $v) {
            $this->numero_agrement = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::NUMERO_AGREMENT;
        }


        return $this;
    } // setNumeroAgrement()

    /**
     * Sets the value of [date_agrement] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setDateAgrement($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_agrement !== null || $dt !== null) {
            $currentDateAsString = ($this->date_agrement !== null && $tmpDt = new DateTime($this->date_agrement)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_agrement = $newDateAsString;
                $this->modifiedColumns[] = CommonTBanquePeer::DATE_AGREMENT;
            }
        } // if either are not null


        return $this;
    } // setDateAgrement()

    /**
     * Set the value of [config_generer_reference_caution] column.
     * 
     * @param string $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setConfigGenererReferenceCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->config_generer_reference_caution !== $v) {
            $this->config_generer_reference_caution = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION;
        }


        return $this;
    } // setConfigGenererReferenceCaution()

    /**
     * Set the value of [config_id_document_modele] column.
     * 
     * @param int $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setConfigIdDocumentModele($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->config_id_document_modele !== $v) {
            $this->config_id_document_modele = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::CONFIG_ID_DOCUMENT_MODELE;
        }


        return $this;
    } // setConfigIdDocumentModele()

    /**
     * Set the value of [config_id_modele_demande_restitution] column.
     * 
     * @param int $v new value
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setConfigIdModeleDemandeRestitution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->config_id_modele_demande_restitution !== $v) {
            $this->config_id_modele_demande_restitution = $v;
            $this->modifiedColumns[] = CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_RESTITUTION;
        }


        return $this;
    } // setConfigIdModeleDemandeRestitution()

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
            if ($this->affichage_compte_virement !== '0') {
                return false;
            }

            if ($this->config_generer_reference_caution !== '0') {
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
            $this->code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->sigle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->mode = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->adresse_siege = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ville_siege = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_ref_ville = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->position_debut_code_agence = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->taille_code_agence = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->position_debut_code_ville = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->taille_code_ville = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->affichage_compte_virement = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->config_id_modele_demande_caution = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->numero_agrement = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->date_agrement = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->config_generer_reference_caution = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->config_id_document_modele = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->config_id_modele_demande_restitution = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = CommonTBanquePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTBanque object", $e);
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
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTBanquePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonTCompteBancaires = null;

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
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTBanqueQuery::create()
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
            $con = Propel::getConnection(CommonTBanquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTBanquePeer::addInstanceToPool($this);
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

            if ($this->commonTCompteBancairesScheduledForDeletion !== null) {
                if (!$this->commonTCompteBancairesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCompteBancairesScheduledForDeletion as $commonTCompteBancaire) {
                        // need to save related object because we set the relation to null
                        $commonTCompteBancaire->save($con);
                    }
                    $this->commonTCompteBancairesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCompteBancaires !== null) {
                foreach ($this->collCommonTCompteBancaires as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTBanquePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTBanquePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTBanquePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::CODE)) {
            $modifiedColumns[':p' . $index++]  = '`code`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::SIGLE)) {
            $modifiedColumns[':p' . $index++]  = '`sigle`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::MODE)) {
            $modifiedColumns[':p' . $index++]  = '`mode`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::ADRESSE_SIEGE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_siege`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::VILLE_SIEGE)) {
            $modifiedColumns[':p' . $index++]  = '`ville_siege`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::ID_REF_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`id_ref_ville`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::POSITION_DEBUT_CODE_AGENCE)) {
            $modifiedColumns[':p' . $index++]  = '`position_debut_code_agence`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::TAILLE_CODE_AGENCE)) {
            $modifiedColumns[':p' . $index++]  = '`taille_code_agence`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::POSITION_DEBUT_CODE_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`position_debut_code_ville`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::TAILLE_CODE_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`taille_code_ville`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`affichage_compte_virement`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`config_id_modele_demande_caution`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::NUMERO_AGREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`numero_agrement`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::DATE_AGREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`date_agrement`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`config_generer_reference_caution`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::CONFIG_ID_DOCUMENT_MODELE)) {
            $modifiedColumns[':p' . $index++]  = '`config_id_document_modele`';
        }
        if ($this->isColumnModified(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_RESTITUTION)) {
            $modifiedColumns[':p' . $index++]  = '`config_id_modele_demande_restitution`';
        }

        $sql = sprintf(
            'INSERT INTO `t_banque` (%s) VALUES (%s)',
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
                    case '`code`':						
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`sigle`':						
                        $stmt->bindValue($identifier, $this->sigle, PDO::PARAM_STR);
                        break;
                    case '`mode`':						
                        $stmt->bindValue($identifier, $this->mode, PDO::PARAM_STR);
                        break;
                    case '`adresse_siege`':						
                        $stmt->bindValue($identifier, $this->adresse_siege, PDO::PARAM_STR);
                        break;
                    case '`ville_siege`':						
                        $stmt->bindValue($identifier, $this->ville_siege, PDO::PARAM_STR);
                        break;
                    case '`id_ref_ville`':						
                        $stmt->bindValue($identifier, $this->id_ref_ville, PDO::PARAM_INT);
                        break;
                    case '`position_debut_code_agence`':						
                        $stmt->bindValue($identifier, $this->position_debut_code_agence, PDO::PARAM_INT);
                        break;
                    case '`taille_code_agence`':						
                        $stmt->bindValue($identifier, $this->taille_code_agence, PDO::PARAM_INT);
                        break;
                    case '`position_debut_code_ville`':						
                        $stmt->bindValue($identifier, $this->position_debut_code_ville, PDO::PARAM_INT);
                        break;
                    case '`taille_code_ville`':						
                        $stmt->bindValue($identifier, $this->taille_code_ville, PDO::PARAM_INT);
                        break;
                    case '`affichage_compte_virement`':						
                        $stmt->bindValue($identifier, $this->affichage_compte_virement, PDO::PARAM_STR);
                        break;
                    case '`config_id_modele_demande_caution`':						
                        $stmt->bindValue($identifier, $this->config_id_modele_demande_caution, PDO::PARAM_INT);
                        break;
                    case '`numero_agrement`':						
                        $stmt->bindValue($identifier, $this->numero_agrement, PDO::PARAM_STR);
                        break;
                    case '`date_agrement`':						
                        $stmt->bindValue($identifier, $this->date_agrement, PDO::PARAM_STR);
                        break;
                    case '`config_generer_reference_caution`':						
                        $stmt->bindValue($identifier, $this->config_generer_reference_caution, PDO::PARAM_STR);
                        break;
                    case '`config_id_document_modele`':						
                        $stmt->bindValue($identifier, $this->config_id_document_modele, PDO::PARAM_INT);
                        break;
                    case '`config_id_modele_demande_restitution`':						
                        $stmt->bindValue($identifier, $this->config_id_modele_demande_restitution, PDO::PARAM_INT);
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


            if (($retval = CommonTBanquePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTCompteBancaires !== null) {
                    foreach ($this->collCommonTCompteBancaires as $referrerFK) {
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
        $pos = CommonTBanquePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCode();
                break;
            case 2:
                return $this->getLibelle();
                break;
            case 3:
                return $this->getSigle();
                break;
            case 4:
                return $this->getMode();
                break;
            case 5:
                return $this->getAdresseSiege();
                break;
            case 6:
                return $this->getVilleSiege();
                break;
            case 7:
                return $this->getIdRefVille();
                break;
            case 8:
                return $this->getPositionDebutCodeAgence();
                break;
            case 9:
                return $this->getTailleCodeAgence();
                break;
            case 10:
                return $this->getPositionDebutCodeVille();
                break;
            case 11:
                return $this->getTailleCodeVille();
                break;
            case 12:
                return $this->getAffichageCompteVirement();
                break;
            case 13:
                return $this->getConfigIdModeleDemandeCaution();
                break;
            case 14:
                return $this->getNumeroAgrement();
                break;
            case 15:
                return $this->getDateAgrement();
                break;
            case 16:
                return $this->getConfigGenererReferenceCaution();
                break;
            case 17:
                return $this->getConfigIdDocumentModele();
                break;
            case 18:
                return $this->getConfigIdModeleDemandeRestitution();
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
        if (isset($alreadyDumpedObjects['CommonTBanque'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTBanque'][$this->getPrimaryKey()] = true;
        $keys = CommonTBanquePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getCode(),
            $keys[2] => $this->getLibelle(),
            $keys[3] => $this->getSigle(),
            $keys[4] => $this->getMode(),
            $keys[5] => $this->getAdresseSiege(),
            $keys[6] => $this->getVilleSiege(),
            $keys[7] => $this->getIdRefVille(),
            $keys[8] => $this->getPositionDebutCodeAgence(),
            $keys[9] => $this->getTailleCodeAgence(),
            $keys[10] => $this->getPositionDebutCodeVille(),
            $keys[11] => $this->getTailleCodeVille(),
            $keys[12] => $this->getAffichageCompteVirement(),
            $keys[13] => $this->getConfigIdModeleDemandeCaution(),
            $keys[14] => $this->getNumeroAgrement(),
            $keys[15] => $this->getDateAgrement(),
            $keys[16] => $this->getConfigGenererReferenceCaution(),
            $keys[17] => $this->getConfigIdDocumentModele(),
            $keys[18] => $this->getConfigIdModeleDemandeRestitution(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonTCompteBancaires) {
                $result['CommonTCompteBancaires'] = $this->collCommonTCompteBancaires->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTBanquePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCode($value);
                break;
            case 2:
                $this->setLibelle($value);
                break;
            case 3:
                $this->setSigle($value);
                break;
            case 4:
                $this->setMode($value);
                break;
            case 5:
                $this->setAdresseSiege($value);
                break;
            case 6:
                $this->setVilleSiege($value);
                break;
            case 7:
                $this->setIdRefVille($value);
                break;
            case 8:
                $this->setPositionDebutCodeAgence($value);
                break;
            case 9:
                $this->setTailleCodeAgence($value);
                break;
            case 10:
                $this->setPositionDebutCodeVille($value);
                break;
            case 11:
                $this->setTailleCodeVille($value);
                break;
            case 12:
                $this->setAffichageCompteVirement($value);
                break;
            case 13:
                $this->setConfigIdModeleDemandeCaution($value);
                break;
            case 14:
                $this->setNumeroAgrement($value);
                break;
            case 15:
                $this->setDateAgrement($value);
                break;
            case 16:
                $this->setConfigGenererReferenceCaution($value);
                break;
            case 17:
                $this->setConfigIdDocumentModele($value);
                break;
            case 18:
                $this->setConfigIdModeleDemandeRestitution($value);
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
        $keys = CommonTBanquePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCode($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSigle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAdresseSiege($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVilleSiege($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdRefVille($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPositionDebutCodeAgence($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTailleCodeAgence($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPositionDebutCodeVille($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTailleCodeVille($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAffichageCompteVirement($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setConfigIdModeleDemandeCaution($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNumeroAgrement($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateAgrement($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setConfigGenererReferenceCaution($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setConfigIdDocumentModele($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setConfigIdModeleDemandeRestitution($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTBanquePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTBanquePeer::ID)) $criteria->add(CommonTBanquePeer::ID, $this->id);
        if ($this->isColumnModified(CommonTBanquePeer::CODE)) $criteria->add(CommonTBanquePeer::CODE, $this->code);
        if ($this->isColumnModified(CommonTBanquePeer::LIBELLE)) $criteria->add(CommonTBanquePeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonTBanquePeer::SIGLE)) $criteria->add(CommonTBanquePeer::SIGLE, $this->sigle);
        if ($this->isColumnModified(CommonTBanquePeer::MODE)) $criteria->add(CommonTBanquePeer::MODE, $this->mode);
        if ($this->isColumnModified(CommonTBanquePeer::ADRESSE_SIEGE)) $criteria->add(CommonTBanquePeer::ADRESSE_SIEGE, $this->adresse_siege);
        if ($this->isColumnModified(CommonTBanquePeer::VILLE_SIEGE)) $criteria->add(CommonTBanquePeer::VILLE_SIEGE, $this->ville_siege);
        if ($this->isColumnModified(CommonTBanquePeer::ID_REF_VILLE)) $criteria->add(CommonTBanquePeer::ID_REF_VILLE, $this->id_ref_ville);
        if ($this->isColumnModified(CommonTBanquePeer::POSITION_DEBUT_CODE_AGENCE)) $criteria->add(CommonTBanquePeer::POSITION_DEBUT_CODE_AGENCE, $this->position_debut_code_agence);
        if ($this->isColumnModified(CommonTBanquePeer::TAILLE_CODE_AGENCE)) $criteria->add(CommonTBanquePeer::TAILLE_CODE_AGENCE, $this->taille_code_agence);
        if ($this->isColumnModified(CommonTBanquePeer::POSITION_DEBUT_CODE_VILLE)) $criteria->add(CommonTBanquePeer::POSITION_DEBUT_CODE_VILLE, $this->position_debut_code_ville);
        if ($this->isColumnModified(CommonTBanquePeer::TAILLE_CODE_VILLE)) $criteria->add(CommonTBanquePeer::TAILLE_CODE_VILLE, $this->taille_code_ville);
        if ($this->isColumnModified(CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT)) $criteria->add(CommonTBanquePeer::AFFICHAGE_COMPTE_VIREMENT, $this->affichage_compte_virement);
        if ($this->isColumnModified(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_CAUTION)) $criteria->add(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_CAUTION, $this->config_id_modele_demande_caution);
        if ($this->isColumnModified(CommonTBanquePeer::NUMERO_AGREMENT)) $criteria->add(CommonTBanquePeer::NUMERO_AGREMENT, $this->numero_agrement);
        if ($this->isColumnModified(CommonTBanquePeer::DATE_AGREMENT)) $criteria->add(CommonTBanquePeer::DATE_AGREMENT, $this->date_agrement);
        if ($this->isColumnModified(CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION)) $criteria->add(CommonTBanquePeer::CONFIG_GENERER_REFERENCE_CAUTION, $this->config_generer_reference_caution);
        if ($this->isColumnModified(CommonTBanquePeer::CONFIG_ID_DOCUMENT_MODELE)) $criteria->add(CommonTBanquePeer::CONFIG_ID_DOCUMENT_MODELE, $this->config_id_document_modele);
        if ($this->isColumnModified(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_RESTITUTION)) $criteria->add(CommonTBanquePeer::CONFIG_ID_MODELE_DEMANDE_RESTITUTION, $this->config_id_modele_demande_restitution);

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
        $criteria = new Criteria(CommonTBanquePeer::DATABASE_NAME);
        $criteria->add(CommonTBanquePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonTBanque (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCode($this->getCode());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setSigle($this->getSigle());
        $copyObj->setMode($this->getMode());
        $copyObj->setAdresseSiege($this->getAdresseSiege());
        $copyObj->setVilleSiege($this->getVilleSiege());
        $copyObj->setIdRefVille($this->getIdRefVille());
        $copyObj->setPositionDebutCodeAgence($this->getPositionDebutCodeAgence());
        $copyObj->setTailleCodeAgence($this->getTailleCodeAgence());
        $copyObj->setPositionDebutCodeVille($this->getPositionDebutCodeVille());
        $copyObj->setTailleCodeVille($this->getTailleCodeVille());
        $copyObj->setAffichageCompteVirement($this->getAffichageCompteVirement());
        $copyObj->setConfigIdModeleDemandeCaution($this->getConfigIdModeleDemandeCaution());
        $copyObj->setNumeroAgrement($this->getNumeroAgrement());
        $copyObj->setDateAgrement($this->getDateAgrement());
        $copyObj->setConfigGenererReferenceCaution($this->getConfigGenererReferenceCaution());
        $copyObj->setConfigIdDocumentModele($this->getConfigIdDocumentModele());
        $copyObj->setConfigIdModeleDemandeRestitution($this->getConfigIdModeleDemandeRestitution());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTCompteBancaires() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCompteBancaire($relObj->copy($deepCopy));
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
     * @return CommonTBanque Clone of current object.
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
     * @return CommonTBanquePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTBanquePeer();
        }

        return self::$peer;
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
        if ('CommonTCompteBancaire' == $relationName) {
            $this->initCommonTCompteBancaires();
        }
    }

    /**
     * Clears out the collCommonTCompteBancaires collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTBanque The current object (for fluent API support)
     * @see        addCommonTCompteBancaires()
     */
    public function clearCommonTCompteBancaires()
    {
        $this->collCommonTCompteBancaires = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCompteBancairesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCompteBancaires collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCompteBancaires($v = true)
    {
        $this->collCommonTCompteBancairesPartial = $v;
    }

    /**
     * Initializes the collCommonTCompteBancaires collection.
     *
     * By default this just sets the collCommonTCompteBancaires collection to an empty array (like clearcollCommonTCompteBancaires());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCompteBancaires($overrideExisting = true)
    {
        if (null !== $this->collCommonTCompteBancaires && !$overrideExisting) {
            return;
        }
        $this->collCommonTCompteBancaires = new PropelObjectCollection();
        $this->collCommonTCompteBancaires->setModel('CommonTCompteBancaire');
    }

    /**
     * Gets an array of CommonTCompteBancaire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTBanque is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCompteBancaire[] List of CommonTCompteBancaire objects
     * @throws PropelException
     */
    public function getCommonTCompteBancaires($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCompteBancairesPartial && !$this->isNew();
        if (null === $this->collCommonTCompteBancaires || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCompteBancaires) {
                // return empty collection
                $this->initCommonTCompteBancaires();
            } else {
                $collCommonTCompteBancaires = CommonTCompteBancaireQuery::create(null, $criteria)
                    ->filterByCommonTBanque($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCompteBancairesPartial && count($collCommonTCompteBancaires)) {
                      $this->initCommonTCompteBancaires(false);

                      foreach ($collCommonTCompteBancaires as $obj) {
                        if (false == $this->collCommonTCompteBancaires->contains($obj)) {
                          $this->collCommonTCompteBancaires->append($obj);
                        }
                      }

                      $this->collCommonTCompteBancairesPartial = true;
                    }

                    $collCommonTCompteBancaires->getInternalIterator()->rewind();

                    return $collCommonTCompteBancaires;
                }

                if ($partial && $this->collCommonTCompteBancaires) {
                    foreach ($this->collCommonTCompteBancaires as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCompteBancaires[] = $obj;
                        }
                    }
                }

                $this->collCommonTCompteBancaires = $collCommonTCompteBancaires;
                $this->collCommonTCompteBancairesPartial = false;
            }
        }

        return $this->collCommonTCompteBancaires;
    }

    /**
     * Sets a collection of CommonTCompteBancaire objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCompteBancaires A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function setCommonTCompteBancaires(PropelCollection $commonTCompteBancaires, PropelPDO $con = null)
    {
        $commonTCompteBancairesToDelete = $this->getCommonTCompteBancaires(new Criteria(), $con)->diff($commonTCompteBancaires);


        $this->commonTCompteBancairesScheduledForDeletion = $commonTCompteBancairesToDelete;

        foreach ($commonTCompteBancairesToDelete as $commonTCompteBancaireRemoved) {
            $commonTCompteBancaireRemoved->setCommonTBanque(null);
        }

        $this->collCommonTCompteBancaires = null;
        foreach ($commonTCompteBancaires as $commonTCompteBancaire) {
            $this->addCommonTCompteBancaire($commonTCompteBancaire);
        }

        $this->collCommonTCompteBancaires = $commonTCompteBancaires;
        $this->collCommonTCompteBancairesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCompteBancaire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCompteBancaire objects.
     * @throws PropelException
     */
    public function countCommonTCompteBancaires(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCompteBancairesPartial && !$this->isNew();
        if (null === $this->collCommonTCompteBancaires || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCompteBancaires) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCompteBancaires());
            }
            $query = CommonTCompteBancaireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTBanque($this)
                ->count($con);
        }

        return count($this->collCommonTCompteBancaires);
    }

    /**
     * Method called to associate a CommonTCompteBancaire object to this object
     * through the CommonTCompteBancaire foreign key attribute.
     *
     * @param   CommonTCompteBancaire $l CommonTCompteBancaire
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function addCommonTCompteBancaire(CommonTCompteBancaire $l)
    {
        if ($this->collCommonTCompteBancaires === null) {
            $this->initCommonTCompteBancaires();
            $this->collCommonTCompteBancairesPartial = true;
        }
        if (!in_array($l, $this->collCommonTCompteBancaires->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCompteBancaire($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCompteBancaire $commonTCompteBancaire The commonTCompteBancaire object to add.
     */
    protected function doAddCommonTCompteBancaire($commonTCompteBancaire)
    {
        $this->collCommonTCompteBancaires[]= $commonTCompteBancaire;
        $commonTCompteBancaire->setCommonTBanque($this);
    }

    /**
     * @param	CommonTCompteBancaire $commonTCompteBancaire The commonTCompteBancaire object to remove.
     * @return CommonTBanque The current object (for fluent API support)
     */
    public function removeCommonTCompteBancaire($commonTCompteBancaire)
    {
        if ($this->getCommonTCompteBancaires()->contains($commonTCompteBancaire)) {
            $this->collCommonTCompteBancaires->remove($this->collCommonTCompteBancaires->search($commonTCompteBancaire));
            if (null === $this->commonTCompteBancairesScheduledForDeletion) {
                $this->commonTCompteBancairesScheduledForDeletion = clone $this->collCommonTCompteBancaires;
                $this->commonTCompteBancairesScheduledForDeletion->clear();
            }
            $this->commonTCompteBancairesScheduledForDeletion[]= clone $commonTCompteBancaire;
            $commonTCompteBancaire->setCommonTBanque(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->code = null;
        $this->libelle = null;
        $this->sigle = null;
        $this->mode = null;
        $this->adresse_siege = null;
        $this->ville_siege = null;
        $this->id_ref_ville = null;
        $this->position_debut_code_agence = null;
        $this->taille_code_agence = null;
        $this->position_debut_code_ville = null;
        $this->taille_code_ville = null;
        $this->affichage_compte_virement = null;
        $this->config_id_modele_demande_caution = null;
        $this->numero_agrement = null;
        $this->date_agrement = null;
        $this->config_generer_reference_caution = null;
        $this->config_id_document_modele = null;
        $this->config_id_modele_demande_restitution = null;
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
            if ($this->collCommonTCompteBancaires) {
                foreach ($this->collCommonTCompteBancaires as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTCompteBancaires instanceof PropelCollection) {
            $this->collCommonTCompteBancaires->clearIterator();
        }
        $this->collCommonTCompteBancaires = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTBanquePeer::DEFAULT_STRING_FORMAT);
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
