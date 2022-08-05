<?php


/**
 * Base class that represents a row from the 'pf_organisme' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfOrganisme extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PfOrganismePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PfOrganismePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_organisme field.
     * @var        int
     */
    protected $id_organisme;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the denomination_fr field.
     * @var        string
     */
    protected $denomination_fr;

    /**
     * The value for the denomination_ar field.
     * @var        string
     */
    protected $denomination_ar;

    /**
     * The value for the url_form_reclamation field.
     * @var        string
     */
    protected $url_form_reclamation;

    /**
     * The value for the categorie field.
     * @var        int
     */
    protected $categorie;

    /**
     * The value for the id_region field.
     * @var        int
     */
    protected $id_region;

    /**
     * The value for the id_province field.
     * @var        int
     */
    protected $id_province;

    /**
     * The value for the id_commune field.
     * @var        int
     */
    protected $id_commune;

    /**
     * The value for the mots_cles_fr field.
     * @var        string
     */
    protected $mots_cles_fr;

    /**
     * The value for the mots_cles_ar field.
     * @var        string
     */
    protected $mots_cles_ar;

    /**
     * The value for the telephones field.
     * @var        string
     */
    protected $telephones;

    /**
     * The value for the horaires_ar field.
     * @var        string
     */
    protected $horaires_ar;

    /**
     * The value for the horaires_fr field.
     * @var        string
     */
    protected $horaires_fr;

    /**
     * The value for the actif field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $actif;

    /**
     * The value for the ordre field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ordre;

    /**
     * The value for the date_modification field.
     * @var        string
     */
    protected $date_modification;

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
        $this->actif = '0';
        $this->ordre = 0;
    }

    /**
     * Initializes internal state of BasePfOrganisme object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_organisme] column value.
     * 
     * @return int
     */
    public function getIdOrganisme()
    {

        return $this->id_organisme;
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
     * Get the [denomination_fr] column value.
     * 
     * @return string
     */
    public function getDenominationFr()
    {

        return $this->denomination_fr;
    }

    /**
     * Get the [denomination_ar] column value.
     * 
     * @return string
     */
    public function getDenominationAr()
    {

        return $this->denomination_ar;
    }

    /**
     * Get the [url_form_reclamation] column value.
     * 
     * @return string
     */
    public function getUrlFormReclamation()
    {

        return $this->url_form_reclamation;
    }

    /**
     * Get the [categorie] column value.
     * 
     * @return int
     */
    public function getCategorie()
    {

        return $this->categorie;
    }

    /**
     * Get the [id_region] column value.
     * 
     * @return int
     */
    public function getIdRegion()
    {

        return $this->id_region;
    }

    /**
     * Get the [id_province] column value.
     * 
     * @return int
     */
    public function getIdProvince()
    {

        return $this->id_province;
    }

    /**
     * Get the [id_commune] column value.
     * 
     * @return int
     */
    public function getIdCommune()
    {

        return $this->id_commune;
    }

    /**
     * Get the [mots_cles_fr] column value.
     * 
     * @return string
     */
    public function getMotsClesFr()
    {

        return $this->mots_cles_fr;
    }

    /**
     * Get the [mots_cles_ar] column value.
     * 
     * @return string
     */
    public function getMotsClesAr()
    {

        return $this->mots_cles_ar;
    }

    /**
     * Get the [telephones] column value.
     * 
     * @return string
     */
    public function getTelephones()
    {

        return $this->telephones;
    }

    /**
     * Get the [horaires_ar] column value.
     * 
     * @return string
     */
    public function getHorairesAr()
    {

        return $this->horaires_ar;
    }

    /**
     * Get the [horaires_fr] column value.
     * 
     * @return string
     */
    public function getHorairesFr()
    {

        return $this->horaires_fr;
    }

    /**
     * Get the [actif] column value.
     * 
     * @return string
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Get the [ordre] column value.
     * 
     * @return int
     */
    public function getOrdre()
    {

        return $this->ordre;
    }

    /**
     * Get the [optionally formatted] temporal [date_modification] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateModification($format = 'Y-m-d H:i:s')
    {
        if ($this->date_modification === null) {
            return null;
        }

        if ($this->date_modification === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_modification);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modification, true), $x);
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
     * Set the value of [id_organisme] column.
     * 
     * @param int $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setIdOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_organisme !== $v) {
            $this->id_organisme = $v;
            $this->modifiedColumns[] = PfOrganismePeer::ID_ORGANISME;
        }


        return $this;
    } // setIdOrganisme()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = PfOrganismePeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [denomination_fr] column.
     * 
     * @param string $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setDenominationFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_fr !== $v) {
            $this->denomination_fr = $v;
            $this->modifiedColumns[] = PfOrganismePeer::DENOMINATION_FR;
        }


        return $this;
    } // setDenominationFr()

    /**
     * Set the value of [denomination_ar] column.
     * 
     * @param string $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setDenominationAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_ar !== $v) {
            $this->denomination_ar = $v;
            $this->modifiedColumns[] = PfOrganismePeer::DENOMINATION_AR;
        }


        return $this;
    } // setDenominationAr()

    /**
     * Set the value of [url_form_reclamation] column.
     * 
     * @param string $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setUrlFormReclamation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_form_reclamation !== $v) {
            $this->url_form_reclamation = $v;
            $this->modifiedColumns[] = PfOrganismePeer::URL_FORM_RECLAMATION;
        }


        return $this;
    } // setUrlFormReclamation()

    /**
     * Set the value of [categorie] column.
     * 
     * @param int $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setCategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->categorie !== $v) {
            $this->categorie = $v;
            $this->modifiedColumns[] = PfOrganismePeer::CATEGORIE;
        }


        return $this;
    } // setCategorie()

    /**
     * Set the value of [id_region] column.
     * 
     * @param int $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setIdRegion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_region !== $v) {
            $this->id_region = $v;
            $this->modifiedColumns[] = PfOrganismePeer::ID_REGION;
        }


        return $this;
    } // setIdRegion()

    /**
     * Set the value of [id_province] column.
     * 
     * @param int $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setIdProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_province !== $v) {
            $this->id_province = $v;
            $this->modifiedColumns[] = PfOrganismePeer::ID_PROVINCE;
        }


        return $this;
    } // setIdProvince()

    /**
     * Set the value of [id_commune] column.
     * 
     * @param int $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setIdCommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_commune !== $v) {
            $this->id_commune = $v;
            $this->modifiedColumns[] = PfOrganismePeer::ID_COMMUNE;
        }


        return $this;
    } // setIdCommune()

    /**
     * Set the value of [mots_cles_fr] column.
     * 
     * @param string $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setMotsClesFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mots_cles_fr !== $v) {
            $this->mots_cles_fr = $v;
            $this->modifiedColumns[] = PfOrganismePeer::MOTS_CLES_FR;
        }


        return $this;
    } // setMotsClesFr()

    /**
     * Set the value of [mots_cles_ar] column.
     * 
     * @param string $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setMotsClesAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mots_cles_ar !== $v) {
            $this->mots_cles_ar = $v;
            $this->modifiedColumns[] = PfOrganismePeer::MOTS_CLES_AR;
        }


        return $this;
    } // setMotsClesAr()

    /**
     * Set the value of [telephones] column.
     * 
     * @param string $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setTelephones($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephones !== $v) {
            $this->telephones = $v;
            $this->modifiedColumns[] = PfOrganismePeer::TELEPHONES;
        }


        return $this;
    } // setTelephones()

    /**
     * Set the value of [horaires_ar] column.
     * 
     * @param string $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setHorairesAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->horaires_ar !== $v) {
            $this->horaires_ar = $v;
            $this->modifiedColumns[] = PfOrganismePeer::HORAIRES_AR;
        }


        return $this;
    } // setHorairesAr()

    /**
     * Set the value of [horaires_fr] column.
     * 
     * @param string $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setHorairesFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->horaires_fr !== $v) {
            $this->horaires_fr = $v;
            $this->modifiedColumns[] = PfOrganismePeer::HORAIRES_FR;
        }


        return $this;
    } // setHorairesFr()

    /**
     * Set the value of [actif] column.
     * 
     * @param string $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setActif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif !== $v) {
            $this->actif = $v;
            $this->modifiedColumns[] = PfOrganismePeer::ACTIF;
        }


        return $this;
    } // setActif()

    /**
     * Set the value of [ordre] column.
     * 
     * @param int $v new value
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setOrdre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordre !== $v) {
            $this->ordre = $v;
            $this->modifiedColumns[] = PfOrganismePeer::ORDRE;
        }


        return $this;
    } // setOrdre()

    /**
     * Sets the value of [date_modification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfOrganisme The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modification !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modification !== null && $tmpDt = new DateTime($this->date_modification)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modification = $newDateAsString;
                $this->modifiedColumns[] = PfOrganismePeer::DATE_MODIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDateModification()

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
            if ($this->actif !== '0') {
                return false;
            }

            if ($this->ordre !== 0) {
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

            $this->id_organisme = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_entite = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->denomination_fr = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->denomination_ar = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->url_form_reclamation = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->categorie = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_region = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_province = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->id_commune = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->mots_cles_fr = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->mots_cles_ar = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->telephones = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->horaires_ar = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->horaires_fr = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->actif = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->ordre = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->date_modification = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = PfOrganismePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PfOrganisme object", $e);
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
            $con = Propel::getConnection(PfOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PfOrganismePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PfOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PfOrganismeQuery::create()
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
            $con = Propel::getConnection(PfOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PfOrganismePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PfOrganismePeer::ID_ORGANISME;
        if (null !== $this->id_organisme) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PfOrganismePeer::ID_ORGANISME . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PfOrganismePeer::ID_ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ORGANISME`';
        }
        if ($this->isColumnModified(PfOrganismePeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(PfOrganismePeer::DENOMINATION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`DENOMINATION_FR`';
        }
        if ($this->isColumnModified(PfOrganismePeer::DENOMINATION_AR)) {
            $modifiedColumns[':p' . $index++]  = '`DENOMINATION_AR`';
        }
        if ($this->isColumnModified(PfOrganismePeer::URL_FORM_RECLAMATION)) {
            $modifiedColumns[':p' . $index++]  = '`URL_FORM_RECLAMATION`';
        }
        if ($this->isColumnModified(PfOrganismePeer::CATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`CATEGORIE`';
        }
        if ($this->isColumnModified(PfOrganismePeer::ID_REGION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_REGION`';
        }
        if ($this->isColumnModified(PfOrganismePeer::ID_PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PROVINCE`';
        }
        if ($this->isColumnModified(PfOrganismePeer::ID_COMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_COMMUNE`';
        }
        if ($this->isColumnModified(PfOrganismePeer::MOTS_CLES_FR)) {
            $modifiedColumns[':p' . $index++]  = '`MOTS_CLES_FR`';
        }
        if ($this->isColumnModified(PfOrganismePeer::MOTS_CLES_AR)) {
            $modifiedColumns[':p' . $index++]  = '`MOTS_CLES_AR`';
        }
        if ($this->isColumnModified(PfOrganismePeer::TELEPHONES)) {
            $modifiedColumns[':p' . $index++]  = '`TELEPHONES`';
        }
        if ($this->isColumnModified(PfOrganismePeer::HORAIRES_AR)) {
            $modifiedColumns[':p' . $index++]  = '`HORAIRES_AR`';
        }
        if ($this->isColumnModified(PfOrganismePeer::HORAIRES_FR)) {
            $modifiedColumns[':p' . $index++]  = '`HORAIRES_FR`';
        }
        if ($this->isColumnModified(PfOrganismePeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`ACTIF`';
        }
        if ($this->isColumnModified(PfOrganismePeer::ORDRE)) {
            $modifiedColumns[':p' . $index++]  = '`ORDRE`';
        }
        if ($this->isColumnModified(PfOrganismePeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_MODIFICATION`';
        }

        $sql = sprintf(
            'INSERT INTO `pf_organisme` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_ORGANISME`':						
                        $stmt->bindValue($identifier, $this->id_organisme, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`DENOMINATION_FR`':						
                        $stmt->bindValue($identifier, $this->denomination_fr, PDO::PARAM_STR);
                        break;
                    case '`DENOMINATION_AR`':						
                        $stmt->bindValue($identifier, $this->denomination_ar, PDO::PARAM_STR);
                        break;
                    case '`URL_FORM_RECLAMATION`':						
                        $stmt->bindValue($identifier, $this->url_form_reclamation, PDO::PARAM_STR);
                        break;
                    case '`CATEGORIE`':						
                        $stmt->bindValue($identifier, $this->categorie, PDO::PARAM_INT);
                        break;
                    case '`ID_REGION`':						
                        $stmt->bindValue($identifier, $this->id_region, PDO::PARAM_INT);
                        break;
                    case '`ID_PROVINCE`':						
                        $stmt->bindValue($identifier, $this->id_province, PDO::PARAM_INT);
                        break;
                    case '`ID_COMMUNE`':						
                        $stmt->bindValue($identifier, $this->id_commune, PDO::PARAM_INT);
                        break;
                    case '`MOTS_CLES_FR`':						
                        $stmt->bindValue($identifier, $this->mots_cles_fr, PDO::PARAM_STR);
                        break;
                    case '`MOTS_CLES_AR`':						
                        $stmt->bindValue($identifier, $this->mots_cles_ar, PDO::PARAM_STR);
                        break;
                    case '`TELEPHONES`':						
                        $stmt->bindValue($identifier, $this->telephones, PDO::PARAM_STR);
                        break;
                    case '`HORAIRES_AR`':						
                        $stmt->bindValue($identifier, $this->horaires_ar, PDO::PARAM_STR);
                        break;
                    case '`HORAIRES_FR`':						
                        $stmt->bindValue($identifier, $this->horaires_fr, PDO::PARAM_STR);
                        break;
                    case '`ACTIF`':						
                        $stmt->bindValue($identifier, $this->actif, PDO::PARAM_STR);
                        break;
                    case '`ORDRE`':						
                        $stmt->bindValue($identifier, $this->ordre, PDO::PARAM_INT);
                        break;
                    case '`DATE_MODIFICATION`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
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
        $this->setIdOrganisme($pk);

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


            if (($retval = PfOrganismePeer::doValidate($this, $columns)) !== true) {
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
        $pos = PfOrganismePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdOrganisme();
                break;
            case 1:
                return $this->getIdEntite();
                break;
            case 2:
                return $this->getDenominationFr();
                break;
            case 3:
                return $this->getDenominationAr();
                break;
            case 4:
                return $this->getUrlFormReclamation();
                break;
            case 5:
                return $this->getCategorie();
                break;
            case 6:
                return $this->getIdRegion();
                break;
            case 7:
                return $this->getIdProvince();
                break;
            case 8:
                return $this->getIdCommune();
                break;
            case 9:
                return $this->getMotsClesFr();
                break;
            case 10:
                return $this->getMotsClesAr();
                break;
            case 11:
                return $this->getTelephones();
                break;
            case 12:
                return $this->getHorairesAr();
                break;
            case 13:
                return $this->getHorairesFr();
                break;
            case 14:
                return $this->getActif();
                break;
            case 15:
                return $this->getOrdre();
                break;
            case 16:
                return $this->getDateModification();
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
        if (isset($alreadyDumpedObjects['PfOrganisme'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PfOrganisme'][$this->getPrimaryKey()] = true;
        $keys = PfOrganismePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdOrganisme(),
            $keys[1] => $this->getIdEntite(),
            $keys[2] => $this->getDenominationFr(),
            $keys[3] => $this->getDenominationAr(),
            $keys[4] => $this->getUrlFormReclamation(),
            $keys[5] => $this->getCategorie(),
            $keys[6] => $this->getIdRegion(),
            $keys[7] => $this->getIdProvince(),
            $keys[8] => $this->getIdCommune(),
            $keys[9] => $this->getMotsClesFr(),
            $keys[10] => $this->getMotsClesAr(),
            $keys[11] => $this->getTelephones(),
            $keys[12] => $this->getHorairesAr(),
            $keys[13] => $this->getHorairesFr(),
            $keys[14] => $this->getActif(),
            $keys[15] => $this->getOrdre(),
            $keys[16] => $this->getDateModification(),
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
        $pos = PfOrganismePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdOrganisme($value);
                break;
            case 1:
                $this->setIdEntite($value);
                break;
            case 2:
                $this->setDenominationFr($value);
                break;
            case 3:
                $this->setDenominationAr($value);
                break;
            case 4:
                $this->setUrlFormReclamation($value);
                break;
            case 5:
                $this->setCategorie($value);
                break;
            case 6:
                $this->setIdRegion($value);
                break;
            case 7:
                $this->setIdProvince($value);
                break;
            case 8:
                $this->setIdCommune($value);
                break;
            case 9:
                $this->setMotsClesFr($value);
                break;
            case 10:
                $this->setMotsClesAr($value);
                break;
            case 11:
                $this->setTelephones($value);
                break;
            case 12:
                $this->setHorairesAr($value);
                break;
            case 13:
                $this->setHorairesFr($value);
                break;
            case 14:
                $this->setActif($value);
                break;
            case 15:
                $this->setOrdre($value);
                break;
            case 16:
                $this->setDateModification($value);
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
        $keys = PfOrganismePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdOrganisme($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdEntite($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDenominationFr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDenominationAr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUrlFormReclamation($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCategorie($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdRegion($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdProvince($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdCommune($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMotsClesFr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMotsClesAr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTelephones($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setHorairesAr($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setHorairesFr($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setActif($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setOrdre($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDateModification($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PfOrganismePeer::DATABASE_NAME);

        if ($this->isColumnModified(PfOrganismePeer::ID_ORGANISME)) $criteria->add(PfOrganismePeer::ID_ORGANISME, $this->id_organisme);
        if ($this->isColumnModified(PfOrganismePeer::ID_ENTITE)) $criteria->add(PfOrganismePeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(PfOrganismePeer::DENOMINATION_FR)) $criteria->add(PfOrganismePeer::DENOMINATION_FR, $this->denomination_fr);
        if ($this->isColumnModified(PfOrganismePeer::DENOMINATION_AR)) $criteria->add(PfOrganismePeer::DENOMINATION_AR, $this->denomination_ar);
        if ($this->isColumnModified(PfOrganismePeer::URL_FORM_RECLAMATION)) $criteria->add(PfOrganismePeer::URL_FORM_RECLAMATION, $this->url_form_reclamation);
        if ($this->isColumnModified(PfOrganismePeer::CATEGORIE)) $criteria->add(PfOrganismePeer::CATEGORIE, $this->categorie);
        if ($this->isColumnModified(PfOrganismePeer::ID_REGION)) $criteria->add(PfOrganismePeer::ID_REGION, $this->id_region);
        if ($this->isColumnModified(PfOrganismePeer::ID_PROVINCE)) $criteria->add(PfOrganismePeer::ID_PROVINCE, $this->id_province);
        if ($this->isColumnModified(PfOrganismePeer::ID_COMMUNE)) $criteria->add(PfOrganismePeer::ID_COMMUNE, $this->id_commune);
        if ($this->isColumnModified(PfOrganismePeer::MOTS_CLES_FR)) $criteria->add(PfOrganismePeer::MOTS_CLES_FR, $this->mots_cles_fr);
        if ($this->isColumnModified(PfOrganismePeer::MOTS_CLES_AR)) $criteria->add(PfOrganismePeer::MOTS_CLES_AR, $this->mots_cles_ar);
        if ($this->isColumnModified(PfOrganismePeer::TELEPHONES)) $criteria->add(PfOrganismePeer::TELEPHONES, $this->telephones);
        if ($this->isColumnModified(PfOrganismePeer::HORAIRES_AR)) $criteria->add(PfOrganismePeer::HORAIRES_AR, $this->horaires_ar);
        if ($this->isColumnModified(PfOrganismePeer::HORAIRES_FR)) $criteria->add(PfOrganismePeer::HORAIRES_FR, $this->horaires_fr);
        if ($this->isColumnModified(PfOrganismePeer::ACTIF)) $criteria->add(PfOrganismePeer::ACTIF, $this->actif);
        if ($this->isColumnModified(PfOrganismePeer::ORDRE)) $criteria->add(PfOrganismePeer::ORDRE, $this->ordre);
        if ($this->isColumnModified(PfOrganismePeer::DATE_MODIFICATION)) $criteria->add(PfOrganismePeer::DATE_MODIFICATION, $this->date_modification);

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
        $criteria = new Criteria(PfOrganismePeer::DATABASE_NAME);
        $criteria->add(PfOrganismePeer::ID_ORGANISME, $this->id_organisme);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdOrganisme();
    }

    /**
     * Generic method to set the primary key (id_organisme column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdOrganisme($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdOrganisme();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PfOrganisme (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setDenominationFr($this->getDenominationFr());
        $copyObj->setDenominationAr($this->getDenominationAr());
        $copyObj->setUrlFormReclamation($this->getUrlFormReclamation());
        $copyObj->setCategorie($this->getCategorie());
        $copyObj->setIdRegion($this->getIdRegion());
        $copyObj->setIdProvince($this->getIdProvince());
        $copyObj->setIdCommune($this->getIdCommune());
        $copyObj->setMotsClesFr($this->getMotsClesFr());
        $copyObj->setMotsClesAr($this->getMotsClesAr());
        $copyObj->setTelephones($this->getTelephones());
        $copyObj->setHorairesAr($this->getHorairesAr());
        $copyObj->setHorairesFr($this->getHorairesFr());
        $copyObj->setActif($this->getActif());
        $copyObj->setOrdre($this->getOrdre());
        $copyObj->setDateModification($this->getDateModification());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdOrganisme(NULL); // this is a auto-increment column, so set to default value
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
     * @return PfOrganisme Clone of current object.
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
     * @return PfOrganismePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PfOrganismePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_organisme = null;
        $this->id_entite = null;
        $this->denomination_fr = null;
        $this->denomination_ar = null;
        $this->url_form_reclamation = null;
        $this->categorie = null;
        $this->id_region = null;
        $this->id_province = null;
        $this->id_commune = null;
        $this->mots_cles_fr = null;
        $this->mots_cles_ar = null;
        $this->telephones = null;
        $this->horaires_ar = null;
        $this->horaires_fr = null;
        $this->actif = null;
        $this->ordre = null;
        $this->date_modification = null;
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
        return (string) $this->exportTo(PfOrganismePeer::DEFAULT_STRING_FORMAT);
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
