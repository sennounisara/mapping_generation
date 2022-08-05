<?php


/**
 * Base class that represents a row from the 'theme' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTheme extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ThemePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ThemePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_theme field.
     * @var        int
     */
    protected $id_theme;

    /**
     * The value for the libelle_theme_fr field.
     * @var        string
     */
    protected $libelle_theme_fr;

    /**
     * The value for the libelle_theme_ar field.
     * @var        string
     */
    protected $libelle_theme_ar;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the visible_tiers field.
     * @var        string
     */
    protected $visible_tiers;

    /**
     * The value for the date_modification field.
     * @var        string
     */
    protected $date_modification;

    /**
     * The value for the type_theme field.
     * @var        int
     */
    protected $type_theme;

    /**
     * The value for the id_circuit_validation field.
     * @var        int
     */
    protected $id_circuit_validation;

    /**
     * The value for the entites_autorisees field.
     * @var        string
     */
    protected $entites_autorisees;

    /**
     * The value for the calcul_entites_autorisees field.
     * @var        string
     */
    protected $calcul_entites_autorisees;

    /**
     * The value for the type_demande field.
     * @var        int
     */
    protected $type_demande;

    /**
     * The value for the id_externe field.
     * @var        int
     */
    protected $id_externe;

    /**
     * The value for the aide_text field.
     * @var        string
     */
    protected $aide_text;

    /**
     * The value for the delai field.
     * @var        int
     */
    protected $delai;

    /**
     * The value for the visible_demandeur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_demandeur;

    /**
     * The value for the type_delai field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $type_delai;

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
        $this->visible_demandeur = '0';
        $this->type_delai = '1';
    }

    /**
     * Initializes internal state of BaseTheme object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_theme] column value.
     * 
     * @return int
     */
    public function getIdTheme()
    {

        return $this->id_theme;
    }

    /**
     * Get the [libelle_theme_fr] column value.
     * 
     * @return string
     */
    public function getLibelleThemeFr()
    {

        return $this->libelle_theme_fr;
    }

    /**
     * Get the [libelle_theme_ar] column value.
     * 
     * @return string
     */
    public function getLibelleThemeAr()
    {

        return $this->libelle_theme_ar;
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
     * Get the [visible_tiers] column value.
     * 
     * @return string
     */
    public function getVisibleTiers()
    {

        return $this->visible_tiers;
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
     * Get the [type_theme] column value.
     * 
     * @return int
     */
    public function getTypeTheme()
    {

        return $this->type_theme;
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
     * Get the [entites_autorisees] column value.
     * 
     * @return string
     */
    public function getEntitesAutorisees()
    {

        return $this->entites_autorisees;
    }

    /**
     * Get the [calcul_entites_autorisees] column value.
     * 
     * @return string
     */
    public function getCalculEntitesAutorisees()
    {

        return $this->calcul_entites_autorisees;
    }

    /**
     * Get the [type_demande] column value.
     * 
     * @return int
     */
    public function getTypeDemande()
    {

        return $this->type_demande;
    }

    /**
     * Get the [id_externe] column value.
     * 
     * @return int
     */
    public function getIdExterne()
    {

        return $this->id_externe;
    }

    /**
     * Get the [aide_text] column value.
     * 
     * @return string
     */
    public function getAideText()
    {

        return $this->aide_text;
    }

    /**
     * Get the [delai] column value.
     * 
     * @return int
     */
    public function getDelai()
    {

        return $this->delai;
    }

    /**
     * Get the [visible_demandeur] column value.
     * 
     * @return string
     */
    public function getVisibleDemandeur()
    {

        return $this->visible_demandeur;
    }

    /**
     * Get the [type_delai] column value.
     * 
     * @return string
     */
    public function getTypeDelai()
    {

        return $this->type_delai;
    }

    /**
     * Set the value of [id_theme] column.
     * 
     * @param int $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setIdTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_theme !== $v) {
            $this->id_theme = $v;
            $this->modifiedColumns[] = ThemePeer::ID_THEME;
        }


        return $this;
    } // setIdTheme()

    /**
     * Set the value of [libelle_theme_fr] column.
     * 
     * @param string $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setLibelleThemeFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_theme_fr !== $v) {
            $this->libelle_theme_fr = $v;
            $this->modifiedColumns[] = ThemePeer::LIBELLE_THEME_FR;
        }


        return $this;
    } // setLibelleThemeFr()

    /**
     * Set the value of [libelle_theme_ar] column.
     * 
     * @param string $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setLibelleThemeAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_theme_ar !== $v) {
            $this->libelle_theme_ar = $v;
            $this->modifiedColumns[] = ThemePeer::LIBELLE_THEME_AR;
        }


        return $this;
    } // setLibelleThemeAr()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = ThemePeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [visible_tiers] column.
     * 
     * @param string $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setVisibleTiers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_tiers !== $v) {
            $this->visible_tiers = $v;
            $this->modifiedColumns[] = ThemePeer::VISIBLE_TIERS;
        }


        return $this;
    } // setVisibleTiers()

    /**
     * Sets the value of [date_modification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Theme The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modification !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modification !== null && $tmpDt = new DateTime($this->date_modification)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modification = $newDateAsString;
                $this->modifiedColumns[] = ThemePeer::DATE_MODIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDateModification()

    /**
     * Set the value of [type_theme] column.
     * 
     * @param int $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setTypeTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_theme !== $v) {
            $this->type_theme = $v;
            $this->modifiedColumns[] = ThemePeer::TYPE_THEME;
        }


        return $this;
    } // setTypeTheme()

    /**
     * Set the value of [id_circuit_validation] column.
     * 
     * @param int $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setIdCircuitValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_circuit_validation !== $v) {
            $this->id_circuit_validation = $v;
            $this->modifiedColumns[] = ThemePeer::ID_CIRCUIT_VALIDATION;
        }


        return $this;
    } // setIdCircuitValidation()

    /**
     * Set the value of [entites_autorisees] column.
     * 
     * @param string $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setEntitesAutorisees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entites_autorisees !== $v) {
            $this->entites_autorisees = $v;
            $this->modifiedColumns[] = ThemePeer::ENTITES_AUTORISEES;
        }


        return $this;
    } // setEntitesAutorisees()

    /**
     * Set the value of [calcul_entites_autorisees] column.
     * 
     * @param string $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setCalculEntitesAutorisees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->calcul_entites_autorisees !== $v) {
            $this->calcul_entites_autorisees = $v;
            $this->modifiedColumns[] = ThemePeer::CALCUL_ENTITES_AUTORISEES;
        }


        return $this;
    } // setCalculEntitesAutorisees()

    /**
     * Set the value of [type_demande] column.
     * 
     * @param int $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setTypeDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_demande !== $v) {
            $this->type_demande = $v;
            $this->modifiedColumns[] = ThemePeer::TYPE_DEMANDE;
        }


        return $this;
    } // setTypeDemande()

    /**
     * Set the value of [id_externe] column.
     * 
     * @param int $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setIdExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_externe !== $v) {
            $this->id_externe = $v;
            $this->modifiedColumns[] = ThemePeer::ID_EXTERNE;
        }


        return $this;
    } // setIdExterne()

    /**
     * Set the value of [aide_text] column.
     * 
     * @param string $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setAideText($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aide_text !== $v) {
            $this->aide_text = $v;
            $this->modifiedColumns[] = ThemePeer::AIDE_TEXT;
        }


        return $this;
    } // setAideText()

    /**
     * Set the value of [delai] column.
     * 
     * @param int $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setDelai($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai !== $v) {
            $this->delai = $v;
            $this->modifiedColumns[] = ThemePeer::DELAI;
        }


        return $this;
    } // setDelai()

    /**
     * Set the value of [visible_demandeur] column.
     * 
     * @param string $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setVisibleDemandeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_demandeur !== $v) {
            $this->visible_demandeur = $v;
            $this->modifiedColumns[] = ThemePeer::VISIBLE_DEMANDEUR;
        }


        return $this;
    } // setVisibleDemandeur()

    /**
     * Set the value of [type_delai] column.
     * 
     * @param string $v new value
     * @return Theme The current object (for fluent API support)
     */
    public function setTypeDelai($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_delai !== $v) {
            $this->type_delai = $v;
            $this->modifiedColumns[] = ThemePeer::TYPE_DELAI;
        }


        return $this;
    } // setTypeDelai()

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
            if ($this->visible_demandeur !== '0') {
                return false;
            }

            if ($this->type_delai !== '1') {
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

            $this->id_theme = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->libelle_theme_fr = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->libelle_theme_ar = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_entite = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->visible_tiers = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_modification = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->type_theme = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_circuit_validation = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->entites_autorisees = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->calcul_entites_autorisees = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->type_demande = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->id_externe = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->aide_text = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->delai = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->visible_demandeur = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->type_delai = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = ThemePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Theme object", $e);
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
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ThemePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ThemeQuery::create()
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
            $con = Propel::getConnection(ThemePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ThemePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ThemePeer::ID_THEME;
        if (null !== $this->id_theme) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ThemePeer::ID_THEME . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ThemePeer::ID_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`ID_THEME`';
        }
        if ($this->isColumnModified(ThemePeer::LIBELLE_THEME_FR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_THEME_FR`';
        }
        if ($this->isColumnModified(ThemePeer::LIBELLE_THEME_AR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_THEME_AR`';
        }
        if ($this->isColumnModified(ThemePeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(ThemePeer::VISIBLE_TIERS)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_TIERS`';
        }
        if ($this->isColumnModified(ThemePeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_MODIFICATION`';
        }
        if ($this->isColumnModified(ThemePeer::TYPE_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_THEME`';
        }
        if ($this->isColumnModified(ThemePeer::ID_CIRCUIT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_CIRCUIT_VALIDATION`';
        }
        if ($this->isColumnModified(ThemePeer::ENTITES_AUTORISEES)) {
            $modifiedColumns[':p' . $index++]  = '`ENTITES_AUTORISEES`';
        }
        if ($this->isColumnModified(ThemePeer::CALCUL_ENTITES_AUTORISEES)) {
            $modifiedColumns[':p' . $index++]  = '`CALCUL_ENTITES_AUTORISEES`';
        }
        if ($this->isColumnModified(ThemePeer::TYPE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_DEMANDE`';
        }
        if ($this->isColumnModified(ThemePeer::ID_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_EXTERNE`';
        }
        if ($this->isColumnModified(ThemePeer::AIDE_TEXT)) {
            $modifiedColumns[':p' . $index++]  = '`AIDE_TEXT`';
        }
        if ($this->isColumnModified(ThemePeer::DELAI)) {
            $modifiedColumns[':p' . $index++]  = '`DELAI`';
        }
        if ($this->isColumnModified(ThemePeer::VISIBLE_DEMANDEUR)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLE_DEMANDEUR`';
        }
        if ($this->isColumnModified(ThemePeer::TYPE_DELAI)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_DELAI`';
        }

        $sql = sprintf(
            'INSERT INTO `theme` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_THEME`':						
                        $stmt->bindValue($identifier, $this->id_theme, PDO::PARAM_INT);
                        break;
                    case '`LIBELLE_THEME_FR`':						
                        $stmt->bindValue($identifier, $this->libelle_theme_fr, PDO::PARAM_STR);
                        break;
                    case '`LIBELLE_THEME_AR`':						
                        $stmt->bindValue($identifier, $this->libelle_theme_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`VISIBLE_TIERS`':						
                        $stmt->bindValue($identifier, $this->visible_tiers, PDO::PARAM_STR);
                        break;
                    case '`DATE_MODIFICATION`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`TYPE_THEME`':						
                        $stmt->bindValue($identifier, $this->type_theme, PDO::PARAM_INT);
                        break;
                    case '`ID_CIRCUIT_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->id_circuit_validation, PDO::PARAM_INT);
                        break;
                    case '`ENTITES_AUTORISEES`':						
                        $stmt->bindValue($identifier, $this->entites_autorisees, PDO::PARAM_STR);
                        break;
                    case '`CALCUL_ENTITES_AUTORISEES`':						
                        $stmt->bindValue($identifier, $this->calcul_entites_autorisees, PDO::PARAM_STR);
                        break;
                    case '`TYPE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->type_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->id_externe, PDO::PARAM_INT);
                        break;
                    case '`AIDE_TEXT`':						
                        $stmt->bindValue($identifier, $this->aide_text, PDO::PARAM_STR);
                        break;
                    case '`DELAI`':						
                        $stmt->bindValue($identifier, $this->delai, PDO::PARAM_INT);
                        break;
                    case '`VISIBLE_DEMANDEUR`':						
                        $stmt->bindValue($identifier, $this->visible_demandeur, PDO::PARAM_STR);
                        break;
                    case '`TYPE_DELAI`':						
                        $stmt->bindValue($identifier, $this->type_delai, PDO::PARAM_STR);
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
        $this->setIdTheme($pk);

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


            if (($retval = ThemePeer::doValidate($this, $columns)) !== true) {
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
        $pos = ThemePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTheme();
                break;
            case 1:
                return $this->getLibelleThemeFr();
                break;
            case 2:
                return $this->getLibelleThemeAr();
                break;
            case 3:
                return $this->getIdEntite();
                break;
            case 4:
                return $this->getVisibleTiers();
                break;
            case 5:
                return $this->getDateModification();
                break;
            case 6:
                return $this->getTypeTheme();
                break;
            case 7:
                return $this->getIdCircuitValidation();
                break;
            case 8:
                return $this->getEntitesAutorisees();
                break;
            case 9:
                return $this->getCalculEntitesAutorisees();
                break;
            case 10:
                return $this->getTypeDemande();
                break;
            case 11:
                return $this->getIdExterne();
                break;
            case 12:
                return $this->getAideText();
                break;
            case 13:
                return $this->getDelai();
                break;
            case 14:
                return $this->getVisibleDemandeur();
                break;
            case 15:
                return $this->getTypeDelai();
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
        if (isset($alreadyDumpedObjects['Theme'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Theme'][$this->getPrimaryKey()] = true;
        $keys = ThemePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTheme(),
            $keys[1] => $this->getLibelleThemeFr(),
            $keys[2] => $this->getLibelleThemeAr(),
            $keys[3] => $this->getIdEntite(),
            $keys[4] => $this->getVisibleTiers(),
            $keys[5] => $this->getDateModification(),
            $keys[6] => $this->getTypeTheme(),
            $keys[7] => $this->getIdCircuitValidation(),
            $keys[8] => $this->getEntitesAutorisees(),
            $keys[9] => $this->getCalculEntitesAutorisees(),
            $keys[10] => $this->getTypeDemande(),
            $keys[11] => $this->getIdExterne(),
            $keys[12] => $this->getAideText(),
            $keys[13] => $this->getDelai(),
            $keys[14] => $this->getVisibleDemandeur(),
            $keys[15] => $this->getTypeDelai(),
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
        $pos = ThemePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTheme($value);
                break;
            case 1:
                $this->setLibelleThemeFr($value);
                break;
            case 2:
                $this->setLibelleThemeAr($value);
                break;
            case 3:
                $this->setIdEntite($value);
                break;
            case 4:
                $this->setVisibleTiers($value);
                break;
            case 5:
                $this->setDateModification($value);
                break;
            case 6:
                $this->setTypeTheme($value);
                break;
            case 7:
                $this->setIdCircuitValidation($value);
                break;
            case 8:
                $this->setEntitesAutorisees($value);
                break;
            case 9:
                $this->setCalculEntitesAutorisees($value);
                break;
            case 10:
                $this->setTypeDemande($value);
                break;
            case 11:
                $this->setIdExterne($value);
                break;
            case 12:
                $this->setAideText($value);
                break;
            case 13:
                $this->setDelai($value);
                break;
            case 14:
                $this->setVisibleDemandeur($value);
                break;
            case 15:
                $this->setTypeDelai($value);
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
        $keys = ThemePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTheme($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLibelleThemeFr($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelleThemeAr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdEntite($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setVisibleTiers($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateModification($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTypeTheme($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdCircuitValidation($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEntitesAutorisees($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCalculEntitesAutorisees($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTypeDemande($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdExterne($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAideText($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDelai($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setVisibleDemandeur($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTypeDelai($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ThemePeer::DATABASE_NAME);

        if ($this->isColumnModified(ThemePeer::ID_THEME)) $criteria->add(ThemePeer::ID_THEME, $this->id_theme);
        if ($this->isColumnModified(ThemePeer::LIBELLE_THEME_FR)) $criteria->add(ThemePeer::LIBELLE_THEME_FR, $this->libelle_theme_fr);
        if ($this->isColumnModified(ThemePeer::LIBELLE_THEME_AR)) $criteria->add(ThemePeer::LIBELLE_THEME_AR, $this->libelle_theme_ar);
        if ($this->isColumnModified(ThemePeer::ID_ENTITE)) $criteria->add(ThemePeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(ThemePeer::VISIBLE_TIERS)) $criteria->add(ThemePeer::VISIBLE_TIERS, $this->visible_tiers);
        if ($this->isColumnModified(ThemePeer::DATE_MODIFICATION)) $criteria->add(ThemePeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(ThemePeer::TYPE_THEME)) $criteria->add(ThemePeer::TYPE_THEME, $this->type_theme);
        if ($this->isColumnModified(ThemePeer::ID_CIRCUIT_VALIDATION)) $criteria->add(ThemePeer::ID_CIRCUIT_VALIDATION, $this->id_circuit_validation);
        if ($this->isColumnModified(ThemePeer::ENTITES_AUTORISEES)) $criteria->add(ThemePeer::ENTITES_AUTORISEES, $this->entites_autorisees);
        if ($this->isColumnModified(ThemePeer::CALCUL_ENTITES_AUTORISEES)) $criteria->add(ThemePeer::CALCUL_ENTITES_AUTORISEES, $this->calcul_entites_autorisees);
        if ($this->isColumnModified(ThemePeer::TYPE_DEMANDE)) $criteria->add(ThemePeer::TYPE_DEMANDE, $this->type_demande);
        if ($this->isColumnModified(ThemePeer::ID_EXTERNE)) $criteria->add(ThemePeer::ID_EXTERNE, $this->id_externe);
        if ($this->isColumnModified(ThemePeer::AIDE_TEXT)) $criteria->add(ThemePeer::AIDE_TEXT, $this->aide_text);
        if ($this->isColumnModified(ThemePeer::DELAI)) $criteria->add(ThemePeer::DELAI, $this->delai);
        if ($this->isColumnModified(ThemePeer::VISIBLE_DEMANDEUR)) $criteria->add(ThemePeer::VISIBLE_DEMANDEUR, $this->visible_demandeur);
        if ($this->isColumnModified(ThemePeer::TYPE_DELAI)) $criteria->add(ThemePeer::TYPE_DELAI, $this->type_delai);

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
        $criteria = new Criteria(ThemePeer::DATABASE_NAME);
        $criteria->add(ThemePeer::ID_THEME, $this->id_theme);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdTheme();
    }

    /**
     * Generic method to set the primary key (id_theme column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdTheme($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdTheme();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Theme (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLibelleThemeFr($this->getLibelleThemeFr());
        $copyObj->setLibelleThemeAr($this->getLibelleThemeAr());
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setVisibleTiers($this->getVisibleTiers());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setTypeTheme($this->getTypeTheme());
        $copyObj->setIdCircuitValidation($this->getIdCircuitValidation());
        $copyObj->setEntitesAutorisees($this->getEntitesAutorisees());
        $copyObj->setCalculEntitesAutorisees($this->getCalculEntitesAutorisees());
        $copyObj->setTypeDemande($this->getTypeDemande());
        $copyObj->setIdExterne($this->getIdExterne());
        $copyObj->setAideText($this->getAideText());
        $copyObj->setDelai($this->getDelai());
        $copyObj->setVisibleDemandeur($this->getVisibleDemandeur());
        $copyObj->setTypeDelai($this->getTypeDelai());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTheme(NULL); // this is a auto-increment column, so set to default value
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
     * @return Theme Clone of current object.
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
     * @return ThemePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ThemePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_theme = null;
        $this->libelle_theme_fr = null;
        $this->libelle_theme_ar = null;
        $this->id_entite = null;
        $this->visible_tiers = null;
        $this->date_modification = null;
        $this->type_theme = null;
        $this->id_circuit_validation = null;
        $this->entites_autorisees = null;
        $this->calcul_entites_autorisees = null;
        $this->type_demande = null;
        $this->id_externe = null;
        $this->aide_text = null;
        $this->delai = null;
        $this->visible_demandeur = null;
        $this->type_delai = null;
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
        return (string) $this->exportTo(ThemePeer::DEFAULT_STRING_FORMAT);
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
