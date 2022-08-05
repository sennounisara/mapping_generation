<?php


/**
 * Base class that represents a row from the 'Lt_Referentiel' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonLtReferentiel extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonLtReferentielPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonLtReferentielPeer
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
     * The value for the code_libelle field.
     * @var        string
     */
    protected $code_libelle;

    /**
     * The value for the entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $entreprise;

    /**
     * The value for the consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation;

    /**
     * The value for the lot field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $lot;

    /**
     * The value for the agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $agent;

    /**
     * The value for the obligatoire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $obligatoire;

    /**
     * The value for the type_search field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_search;

    /**
     * The value for the pages field.
     * @var        string
     */
    protected $pages;

    /**
     * The value for the path_config field.
     * @var        string
     */
    protected $path_config;

    /**
     * The value for the mode_affichage field.
     * @var        string
     */
    protected $mode_affichage;

    /**
     * The value for the mode_modification field.
     * @var        string
     */
    protected $mode_modification;

    /**
     * The value for the mode_recherche field.
     * @var        string
     */
    protected $mode_recherche;

    /**
     * The value for the type field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type;

    /**
     * The value for the organismes field.
     * @var        string
     */
    protected $organismes;

    /**
     * The value for the libelle_info_bulle field.
     * @var        string
     */
    protected $libelle_info_bulle;

    /**
     * The value for the logo field.
     * @var        string
     */
    protected $logo;

    /**
     * The value for the defaultvalue field.
     * @var        string
     */
    protected $defaultvalue;

    /**
     * The value for the dependance_allotissement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $dependance_allotissement;

    /**
     * The value for the data_type field.
     * @var        string
     */
    protected $data_type;

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
        $this->entreprise = '0';
        $this->consultation = '0';
        $this->lot = '0';
        $this->agent = '0';
        $this->obligatoire = '0';
        $this->type_search = '0';
        $this->type = '0';
        $this->dependance_allotissement = '0';
    }

    /**
     * Initializes internal state of BaseCommonLtReferentiel object.
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
     * Get the [code_libelle] column value.
     * 
     * @return string
     */
    public function getCodeLibelle()
    {

        return $this->code_libelle;
    }

    /**
     * Get the [entreprise] column value.
     * 
     * @return string
     */
    public function getEntreprise()
    {

        return $this->entreprise;
    }

    /**
     * Get the [consultation] column value.
     * 
     * @return string
     */
    public function getConsultation()
    {

        return $this->consultation;
    }

    /**
     * Get the [lot] column value.
     * 
     * @return string
     */
    public function getLot()
    {

        return $this->lot;
    }

    /**
     * Get the [agent] column value.
     * 
     * @return string
     */
    public function getAgent()
    {

        return $this->agent;
    }

    /**
     * Get the [obligatoire] column value.
     * 
     * @return string
     */
    public function getObligatoire()
    {

        return $this->obligatoire;
    }

    /**
     * Get the [type_search] column value.
     * 
     * @return string
     */
    public function getTypeSearch()
    {

        return $this->type_search;
    }

    /**
     * Get the [pages] column value.
     * 
     * @return string
     */
    public function getPages()
    {

        return $this->pages;
    }

    /**
     * Get the [path_config] column value.
     * 
     * @return string
     */
    public function getPathConfig()
    {

        return $this->path_config;
    }

    /**
     * Get the [mode_affichage] column value.
     * 
     * @return string
     */
    public function getModeAffichage()
    {

        return $this->mode_affichage;
    }

    /**
     * Get the [mode_modification] column value.
     * 
     * @return string
     */
    public function getModeModification()
    {

        return $this->mode_modification;
    }

    /**
     * Get the [mode_recherche] column value.
     * 
     * @return string
     */
    public function getModeRecherche()
    {

        return $this->mode_recherche;
    }

    /**
     * Get the [type] column value.
     * 
     * @return string
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [organismes] column value.
     * 
     * @return string
     */
    public function getOrganismes()
    {

        return $this->organismes;
    }

    /**
     * Get the [libelle_info_bulle] column value.
     * 
     * @return string
     */
    public function getLibelleInfoBulle()
    {

        return $this->libelle_info_bulle;
    }

    /**
     * Get the [logo] column value.
     * 
     * @return string
     */
    public function getLogo()
    {

        return $this->logo;
    }

    /**
     * Get the [defaultvalue] column value.
     * 
     * @return string
     */
    public function getDefaultvalue()
    {

        return $this->defaultvalue;
    }

    /**
     * Get the [dependance_allotissement] column value.
     * 
     * @return string
     */
    public function getDependanceAllotissement()
    {

        return $this->dependance_allotissement;
    }

    /**
     * Get the [data_type] column value.
     * 
     * @return string
     */
    public function getDataType()
    {

        return $this->data_type;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [code_libelle] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setCodeLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_libelle !== $v) {
            $this->code_libelle = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::CODE_LIBELLE;
        }


        return $this;
    } // setCodeLibelle()

    /**
     * Set the value of [entreprise] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entreprise !== $v) {
            $this->entreprise = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::ENTREPRISE;
        }


        return $this;
    } // setEntreprise()

    /**
     * Set the value of [consultation] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation !== $v) {
            $this->consultation = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::CONSULTATION;
        }


        return $this;
    } // setConsultation()

    /**
     * Set the value of [lot] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [agent] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agent !== $v) {
            $this->agent = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::AGENT;
        }


        return $this;
    } // setAgent()

    /**
     * Set the value of [obligatoire] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligatoire !== $v) {
            $this->obligatoire = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::OBLIGATOIRE;
        }


        return $this;
    } // setObligatoire()

    /**
     * Set the value of [type_search] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setTypeSearch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_search !== $v) {
            $this->type_search = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::TYPE_SEARCH;
        }


        return $this;
    } // setTypeSearch()

    /**
     * Set the value of [pages] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setPages($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pages !== $v) {
            $this->pages = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::PAGES;
        }


        return $this;
    } // setPages()

    /**
     * Set the value of [path_config] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setPathConfig($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->path_config !== $v) {
            $this->path_config = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::PATH_CONFIG;
        }


        return $this;
    } // setPathConfig()

    /**
     * Set the value of [mode_affichage] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setModeAffichage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode_affichage !== $v) {
            $this->mode_affichage = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::MODE_AFFICHAGE;
        }


        return $this;
    } // setModeAffichage()

    /**
     * Set the value of [mode_modification] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setModeModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode_modification !== $v) {
            $this->mode_modification = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::MODE_MODIFICATION;
        }


        return $this;
    } // setModeModification()

    /**
     * Set the value of [mode_recherche] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setModeRecherche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode_recherche !== $v) {
            $this->mode_recherche = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::MODE_RECHERCHE;
        }


        return $this;
    } // setModeRecherche()

    /**
     * Set the value of [type] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [organismes] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setOrganismes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organismes !== $v) {
            $this->organismes = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::ORGANISMES;
        }


        return $this;
    } // setOrganismes()

    /**
     * Set the value of [libelle_info_bulle] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setLibelleInfoBulle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_info_bulle !== $v) {
            $this->libelle_info_bulle = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::LIBELLE_INFO_BULLE;
        }


        return $this;
    } // setLibelleInfoBulle()

    /**
     * Set the value of [logo] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setLogo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->logo !== $v) {
            $this->logo = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::LOGO;
        }


        return $this;
    } // setLogo()

    /**
     * Set the value of [defaultvalue] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setDefaultvalue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaultvalue !== $v) {
            $this->defaultvalue = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::DEFAULTVALUE;
        }


        return $this;
    } // setDefaultvalue()

    /**
     * Set the value of [dependance_allotissement] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setDependanceAllotissement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dependance_allotissement !== $v) {
            $this->dependance_allotissement = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT;
        }


        return $this;
    } // setDependanceAllotissement()

    /**
     * Set the value of [data_type] column.
     * 
     * @param string $v new value
     * @return CommonLtReferentiel The current object (for fluent API support)
     */
    public function setDataType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->data_type !== $v) {
            $this->data_type = $v;
            $this->modifiedColumns[] = CommonLtReferentielPeer::DATA_TYPE;
        }


        return $this;
    } // setDataType()

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
            if ($this->entreprise !== '0') {
                return false;
            }

            if ($this->consultation !== '0') {
                return false;
            }

            if ($this->lot !== '0') {
                return false;
            }

            if ($this->agent !== '0') {
                return false;
            }

            if ($this->obligatoire !== '0') {
                return false;
            }

            if ($this->type_search !== '0') {
                return false;
            }

            if ($this->type !== '0') {
                return false;
            }

            if ($this->dependance_allotissement !== '0') {
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
            $this->code_libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->entreprise = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->consultation = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->lot = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->agent = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->obligatoire = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->type_search = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->pages = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->path_config = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->mode_affichage = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->mode_modification = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->mode_recherche = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->type = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->organismes = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->libelle_info_bulle = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->logo = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->defaultvalue = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->dependance_allotissement = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->data_type = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = CommonLtReferentielPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonLtReferentiel object", $e);
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
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonLtReferentielPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonLtReferentielQuery::create()
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
            $con = Propel::getConnection(CommonLtReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonLtReferentielPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonLtReferentielPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonLtReferentielPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonLtReferentielPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::CODE_LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`code_libelle`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`consultation`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`agent`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`obligatoire`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::TYPE_SEARCH)) {
            $modifiedColumns[':p' . $index++]  = '`type_search`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::PAGES)) {
            $modifiedColumns[':p' . $index++]  = '`pages`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::PATH_CONFIG)) {
            $modifiedColumns[':p' . $index++]  = '`path_config`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::MODE_AFFICHAGE)) {
            $modifiedColumns[':p' . $index++]  = '`mode_affichage`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::MODE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`mode_modification`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::MODE_RECHERCHE)) {
            $modifiedColumns[':p' . $index++]  = '`mode_recherche`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`Type`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::ORGANISMES)) {
            $modifiedColumns[':p' . $index++]  = '`organismes`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::LIBELLE_INFO_BULLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_info_bulle`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::LOGO)) {
            $modifiedColumns[':p' . $index++]  = '`logo`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::DEFAULTVALUE)) {
            $modifiedColumns[':p' . $index++]  = '`defaultValue`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`dependance_allotissement`';
        }
        if ($this->isColumnModified(CommonLtReferentielPeer::DATA_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`data_type`';
        }

        $sql = sprintf(
            'INSERT INTO `Lt_Referentiel` (%s) VALUES (%s)',
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
                    case '`code_libelle`':						
                        $stmt->bindValue($identifier, $this->code_libelle, PDO::PARAM_STR);
                        break;
                    case '`entreprise`':						
                        $stmt->bindValue($identifier, $this->entreprise, PDO::PARAM_STR);
                        break;
                    case '`consultation`':						
                        $stmt->bindValue($identifier, $this->consultation, PDO::PARAM_STR);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_STR);
                        break;
                    case '`agent`':						
                        $stmt->bindValue($identifier, $this->agent, PDO::PARAM_STR);
                        break;
                    case '`obligatoire`':						
                        $stmt->bindValue($identifier, $this->obligatoire, PDO::PARAM_STR);
                        break;
                    case '`type_search`':						
                        $stmt->bindValue($identifier, $this->type_search, PDO::PARAM_STR);
                        break;
                    case '`pages`':						
                        $stmt->bindValue($identifier, $this->pages, PDO::PARAM_STR);
                        break;
                    case '`path_config`':						
                        $stmt->bindValue($identifier, $this->path_config, PDO::PARAM_STR);
                        break;
                    case '`mode_affichage`':						
                        $stmt->bindValue($identifier, $this->mode_affichage, PDO::PARAM_STR);
                        break;
                    case '`mode_modification`':						
                        $stmt->bindValue($identifier, $this->mode_modification, PDO::PARAM_STR);
                        break;
                    case '`mode_recherche`':						
                        $stmt->bindValue($identifier, $this->mode_recherche, PDO::PARAM_STR);
                        break;
                    case '`Type`':						
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`organismes`':						
                        $stmt->bindValue($identifier, $this->organismes, PDO::PARAM_STR);
                        break;
                    case '`libelle_info_bulle`':						
                        $stmt->bindValue($identifier, $this->libelle_info_bulle, PDO::PARAM_STR);
                        break;
                    case '`logo`':						
                        $stmt->bindValue($identifier, $this->logo, PDO::PARAM_STR);
                        break;
                    case '`defaultValue`':						
                        $stmt->bindValue($identifier, $this->defaultvalue, PDO::PARAM_STR);
                        break;
                    case '`dependance_allotissement`':						
                        $stmt->bindValue($identifier, $this->dependance_allotissement, PDO::PARAM_STR);
                        break;
                    case '`data_type`':						
                        $stmt->bindValue($identifier, $this->data_type, PDO::PARAM_STR);
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


            if (($retval = CommonLtReferentielPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonLtReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCodeLibelle();
                break;
            case 2:
                return $this->getEntreprise();
                break;
            case 3:
                return $this->getConsultation();
                break;
            case 4:
                return $this->getLot();
                break;
            case 5:
                return $this->getAgent();
                break;
            case 6:
                return $this->getObligatoire();
                break;
            case 7:
                return $this->getTypeSearch();
                break;
            case 8:
                return $this->getPages();
                break;
            case 9:
                return $this->getPathConfig();
                break;
            case 10:
                return $this->getModeAffichage();
                break;
            case 11:
                return $this->getModeModification();
                break;
            case 12:
                return $this->getModeRecherche();
                break;
            case 13:
                return $this->getType();
                break;
            case 14:
                return $this->getOrganismes();
                break;
            case 15:
                return $this->getLibelleInfoBulle();
                break;
            case 16:
                return $this->getLogo();
                break;
            case 17:
                return $this->getDefaultvalue();
                break;
            case 18:
                return $this->getDependanceAllotissement();
                break;
            case 19:
                return $this->getDataType();
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
        if (isset($alreadyDumpedObjects['CommonLtReferentiel'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonLtReferentiel'][$this->getPrimaryKey()] = true;
        $keys = CommonLtReferentielPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getCodeLibelle(),
            $keys[2] => $this->getEntreprise(),
            $keys[3] => $this->getConsultation(),
            $keys[4] => $this->getLot(),
            $keys[5] => $this->getAgent(),
            $keys[6] => $this->getObligatoire(),
            $keys[7] => $this->getTypeSearch(),
            $keys[8] => $this->getPages(),
            $keys[9] => $this->getPathConfig(),
            $keys[10] => $this->getModeAffichage(),
            $keys[11] => $this->getModeModification(),
            $keys[12] => $this->getModeRecherche(),
            $keys[13] => $this->getType(),
            $keys[14] => $this->getOrganismes(),
            $keys[15] => $this->getLibelleInfoBulle(),
            $keys[16] => $this->getLogo(),
            $keys[17] => $this->getDefaultvalue(),
            $keys[18] => $this->getDependanceAllotissement(),
            $keys[19] => $this->getDataType(),
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
        $pos = CommonLtReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCodeLibelle($value);
                break;
            case 2:
                $this->setEntreprise($value);
                break;
            case 3:
                $this->setConsultation($value);
                break;
            case 4:
                $this->setLot($value);
                break;
            case 5:
                $this->setAgent($value);
                break;
            case 6:
                $this->setObligatoire($value);
                break;
            case 7:
                $this->setTypeSearch($value);
                break;
            case 8:
                $this->setPages($value);
                break;
            case 9:
                $this->setPathConfig($value);
                break;
            case 10:
                $this->setModeAffichage($value);
                break;
            case 11:
                $this->setModeModification($value);
                break;
            case 12:
                $this->setModeRecherche($value);
                break;
            case 13:
                $this->setType($value);
                break;
            case 14:
                $this->setOrganismes($value);
                break;
            case 15:
                $this->setLibelleInfoBulle($value);
                break;
            case 16:
                $this->setLogo($value);
                break;
            case 17:
                $this->setDefaultvalue($value);
                break;
            case 18:
                $this->setDependanceAllotissement($value);
                break;
            case 19:
                $this->setDataType($value);
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
        $keys = CommonLtReferentielPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCodeLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEntreprise($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setConsultation($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLot($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAgent($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setObligatoire($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTypeSearch($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPages($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPathConfig($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setModeAffichage($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setModeModification($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setModeRecherche($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setType($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOrganismes($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setLibelleInfoBulle($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLogo($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDefaultvalue($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDependanceAllotissement($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDataType($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonLtReferentielPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonLtReferentielPeer::ID)) $criteria->add(CommonLtReferentielPeer::ID, $this->id);
        if ($this->isColumnModified(CommonLtReferentielPeer::CODE_LIBELLE)) $criteria->add(CommonLtReferentielPeer::CODE_LIBELLE, $this->code_libelle);
        if ($this->isColumnModified(CommonLtReferentielPeer::ENTREPRISE)) $criteria->add(CommonLtReferentielPeer::ENTREPRISE, $this->entreprise);
        if ($this->isColumnModified(CommonLtReferentielPeer::CONSULTATION)) $criteria->add(CommonLtReferentielPeer::CONSULTATION, $this->consultation);
        if ($this->isColumnModified(CommonLtReferentielPeer::LOT)) $criteria->add(CommonLtReferentielPeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonLtReferentielPeer::AGENT)) $criteria->add(CommonLtReferentielPeer::AGENT, $this->agent);
        if ($this->isColumnModified(CommonLtReferentielPeer::OBLIGATOIRE)) $criteria->add(CommonLtReferentielPeer::OBLIGATOIRE, $this->obligatoire);
        if ($this->isColumnModified(CommonLtReferentielPeer::TYPE_SEARCH)) $criteria->add(CommonLtReferentielPeer::TYPE_SEARCH, $this->type_search);
        if ($this->isColumnModified(CommonLtReferentielPeer::PAGES)) $criteria->add(CommonLtReferentielPeer::PAGES, $this->pages);
        if ($this->isColumnModified(CommonLtReferentielPeer::PATH_CONFIG)) $criteria->add(CommonLtReferentielPeer::PATH_CONFIG, $this->path_config);
        if ($this->isColumnModified(CommonLtReferentielPeer::MODE_AFFICHAGE)) $criteria->add(CommonLtReferentielPeer::MODE_AFFICHAGE, $this->mode_affichage);
        if ($this->isColumnModified(CommonLtReferentielPeer::MODE_MODIFICATION)) $criteria->add(CommonLtReferentielPeer::MODE_MODIFICATION, $this->mode_modification);
        if ($this->isColumnModified(CommonLtReferentielPeer::MODE_RECHERCHE)) $criteria->add(CommonLtReferentielPeer::MODE_RECHERCHE, $this->mode_recherche);
        if ($this->isColumnModified(CommonLtReferentielPeer::TYPE)) $criteria->add(CommonLtReferentielPeer::TYPE, $this->type);
        if ($this->isColumnModified(CommonLtReferentielPeer::ORGANISMES)) $criteria->add(CommonLtReferentielPeer::ORGANISMES, $this->organismes);
        if ($this->isColumnModified(CommonLtReferentielPeer::LIBELLE_INFO_BULLE)) $criteria->add(CommonLtReferentielPeer::LIBELLE_INFO_BULLE, $this->libelle_info_bulle);
        if ($this->isColumnModified(CommonLtReferentielPeer::LOGO)) $criteria->add(CommonLtReferentielPeer::LOGO, $this->logo);
        if ($this->isColumnModified(CommonLtReferentielPeer::DEFAULTVALUE)) $criteria->add(CommonLtReferentielPeer::DEFAULTVALUE, $this->defaultvalue);
        if ($this->isColumnModified(CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT)) $criteria->add(CommonLtReferentielPeer::DEPENDANCE_ALLOTISSEMENT, $this->dependance_allotissement);
        if ($this->isColumnModified(CommonLtReferentielPeer::DATA_TYPE)) $criteria->add(CommonLtReferentielPeer::DATA_TYPE, $this->data_type);

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
        $criteria = new Criteria(CommonLtReferentielPeer::DATABASE_NAME);
        $criteria->add(CommonLtReferentielPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonLtReferentiel (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCodeLibelle($this->getCodeLibelle());
        $copyObj->setEntreprise($this->getEntreprise());
        $copyObj->setConsultation($this->getConsultation());
        $copyObj->setLot($this->getLot());
        $copyObj->setAgent($this->getAgent());
        $copyObj->setObligatoire($this->getObligatoire());
        $copyObj->setTypeSearch($this->getTypeSearch());
        $copyObj->setPages($this->getPages());
        $copyObj->setPathConfig($this->getPathConfig());
        $copyObj->setModeAffichage($this->getModeAffichage());
        $copyObj->setModeModification($this->getModeModification());
        $copyObj->setModeRecherche($this->getModeRecherche());
        $copyObj->setType($this->getType());
        $copyObj->setOrganismes($this->getOrganismes());
        $copyObj->setLibelleInfoBulle($this->getLibelleInfoBulle());
        $copyObj->setLogo($this->getLogo());
        $copyObj->setDefaultvalue($this->getDefaultvalue());
        $copyObj->setDependanceAllotissement($this->getDependanceAllotissement());
        $copyObj->setDataType($this->getDataType());
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
     * @return CommonLtReferentiel Clone of current object.
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
     * @return CommonLtReferentielPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonLtReferentielPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->code_libelle = null;
        $this->entreprise = null;
        $this->consultation = null;
        $this->lot = null;
        $this->agent = null;
        $this->obligatoire = null;
        $this->type_search = null;
        $this->pages = null;
        $this->path_config = null;
        $this->mode_affichage = null;
        $this->mode_modification = null;
        $this->mode_recherche = null;
        $this->type = null;
        $this->organismes = null;
        $this->libelle_info_bulle = null;
        $this->logo = null;
        $this->defaultvalue = null;
        $this->dependance_allotissement = null;
        $this->data_type = null;
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
        return (string) $this->exportTo(CommonLtReferentielPeer::DEFAULT_STRING_FORMAT);
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
