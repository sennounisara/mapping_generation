<?php


/**
 * Base class that represents a row from the 't_document_collaboratif' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTDocumentCollaboratif extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTDocumentCollaboratifPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTDocumentCollaboratifPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_document field.
     * @var        int
     */
    protected $id_document;

    /**
     * The value for the id_parapheur field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_parapheur;

    /**
     * The value for the id_theme_parapheur field.
     * @var        int
     */
    protected $id_theme_parapheur;

    /**
     * The value for the id_objet field.
     * @var        int
     */
    protected $id_objet;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the titre_document field.
     * @var        string
     */
    protected $titre_document;

    /**
     * The value for the type_document field.
     * @var        int
     */
    protected $type_document;

    /**
     * The value for the type_objet field.
     * @var        int
     */
    protected $type_objet;

    /**
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_modification field.
     * @var        string
     */
    protected $date_modification;

    /**
     * The value for the id_createur field.
     * @var        int
     */
    protected $id_createur;

    /**
     * The value for the nom_createur field.
     * @var        string
     */
    protected $nom_createur;

    /**
     * The value for the prenom_createur field.
     * @var        string
     */
    protected $prenom_createur;

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
        $this->id_parapheur = 0;
    }

    /**
     * Initializes internal state of BaseCommonTDocumentCollaboratif object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_document] column value.
     * 
     * @return int
     */
    public function getIdDocument()
    {

        return $this->id_document;
    }

    /**
     * Get the [id_parapheur] column value.
     * 
     * @return int
     */
    public function getIdParapheur()
    {

        return $this->id_parapheur;
    }

    /**
     * Get the [id_theme_parapheur] column value.
     * 
     * @return int
     */
    public function getIdThemeParapheur()
    {

        return $this->id_theme_parapheur;
    }

    /**
     * Get the [id_objet] column value.
     * 
     * @return int
     */
    public function getIdObjet()
    {

        return $this->id_objet;
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
     * Get the [titre_document] column value.
     * 
     * @return string
     */
    public function getTitreDocument()
    {

        return $this->titre_document;
    }

    /**
     * Get the [type_document] column value.
     * 
     * @return int
     */
    public function getTypeDocument()
    {

        return $this->type_document;
    }

    /**
     * Get the [type_objet] column value.
     * 
     * @return int
     */
    public function getTypeObjet()
    {

        return $this->type_objet;
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
     * Get the [optionally formatted] temporal [date_creation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCreation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_creation === null) {
            return null;
        }

        if ($this->date_creation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_creation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_creation, true), $x);
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
     * Get the [id_createur] column value.
     * 
     * @return int
     */
    public function getIdCreateur()
    {

        return $this->id_createur;
    }

    /**
     * Get the [nom_createur] column value.
     * 
     * @return string
     */
    public function getNomCreateur()
    {

        return $this->nom_createur;
    }

    /**
     * Get the [prenom_createur] column value.
     * 
     * @return string
     */
    public function getPrenomCreateur()
    {

        return $this->prenom_createur;
    }

    /**
     * Set the value of [id_document] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setIdDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_document !== $v) {
            $this->id_document = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::ID_DOCUMENT;
        }


        return $this;
    } // setIdDocument()

    /**
     * Set the value of [id_parapheur] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setIdParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_parapheur !== $v) {
            $this->id_parapheur = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::ID_PARAPHEUR;
        }


        return $this;
    } // setIdParapheur()

    /**
     * Set the value of [id_theme_parapheur] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setIdThemeParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_theme_parapheur !== $v) {
            $this->id_theme_parapheur = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::ID_THEME_PARAPHEUR;
        }


        return $this;
    } // setIdThemeParapheur()

    /**
     * Set the value of [id_objet] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setIdObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_objet !== $v) {
            $this->id_objet = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::ID_OBJET;
        }


        return $this;
    } // setIdObjet()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [titre_document] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setTitreDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->titre_document !== $v) {
            $this->titre_document = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::TITRE_DOCUMENT;
        }


        return $this;
    } // setTitreDocument()

    /**
     * Set the value of [type_document] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setTypeDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_document !== $v) {
            $this->type_document = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::TYPE_DOCUMENT;
        }


        return $this;
    } // setTypeDocument()

    /**
     * Set the value of [type_objet] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setTypeObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_objet !== $v) {
            $this->type_objet = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::TYPE_OBJET;
        }


        return $this;
    } // setTypeObjet()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Sets the value of [date_creation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_creation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_creation !== null && $tmpDt = new DateTime($this->date_creation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_creation = $newDateAsString;
                $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::DATE_CREATION;
            }
        } // if either are not null


        return $this;
    } // setDateCreation()

    /**
     * Sets the value of [date_modification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modification !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modification !== null && $tmpDt = new DateTime($this->date_modification)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modification = $newDateAsString;
                $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::DATE_MODIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDateModification()

    /**
     * Set the value of [id_createur] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setIdCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_createur !== $v) {
            $this->id_createur = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::ID_CREATEUR;
        }


        return $this;
    } // setIdCreateur()

    /**
     * Set the value of [nom_createur] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setNomCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_createur !== $v) {
            $this->nom_createur = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::NOM_CREATEUR;
        }


        return $this;
    } // setNomCreateur()

    /**
     * Set the value of [prenom_createur] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentCollaboratif The current object (for fluent API support)
     */
    public function setPrenomCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_createur !== $v) {
            $this->prenom_createur = $v;
            $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::PRENOM_CREATEUR;
        }


        return $this;
    } // setPrenomCreateur()

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
            if ($this->id_parapheur !== 0) {
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

            $this->id_document = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_parapheur = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_theme_parapheur = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_objet = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->organisme = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->titre_document = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->type_document = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->type_objet = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->statut = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->date_creation = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->date_modification = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->id_createur = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->nom_createur = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->prenom_createur = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = CommonTDocumentCollaboratifPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTDocumentCollaboratif object", $e);
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
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTDocumentCollaboratifPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTDocumentCollaboratifQuery::create()
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
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTDocumentCollaboratifPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTDocumentCollaboratifPeer::ID_DOCUMENT;
        if (null !== $this->id_document) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTDocumentCollaboratifPeer::ID_DOCUMENT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ID_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_document`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ID_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_parapheur`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ID_THEME_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_theme_parapheur`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ID_OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`id_objet`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::TITRE_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`titre_document`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::TYPE_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`type_document`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::TYPE_OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`type_objet`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ID_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_createur`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::NOM_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`nom_createur`';
        }
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::PRENOM_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_createur`';
        }

        $sql = sprintf(
            'INSERT INTO `t_document_collaboratif` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_document`':						
                        $stmt->bindValue($identifier, $this->id_document, PDO::PARAM_INT);
                        break;
                    case '`id_parapheur`':						
                        $stmt->bindValue($identifier, $this->id_parapheur, PDO::PARAM_INT);
                        break;
                    case '`id_theme_parapheur`':						
                        $stmt->bindValue($identifier, $this->id_theme_parapheur, PDO::PARAM_INT);
                        break;
                    case '`id_objet`':						
                        $stmt->bindValue($identifier, $this->id_objet, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`titre_document`':						
                        $stmt->bindValue($identifier, $this->titre_document, PDO::PARAM_STR);
                        break;
                    case '`type_document`':						
                        $stmt->bindValue($identifier, $this->type_document, PDO::PARAM_INT);
                        break;
                    case '`type_objet`':						
                        $stmt->bindValue($identifier, $this->type_objet, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`id_createur`':						
                        $stmt->bindValue($identifier, $this->id_createur, PDO::PARAM_INT);
                        break;
                    case '`nom_createur`':						
                        $stmt->bindValue($identifier, $this->nom_createur, PDO::PARAM_STR);
                        break;
                    case '`prenom_createur`':						
                        $stmt->bindValue($identifier, $this->prenom_createur, PDO::PARAM_STR);
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
        $this->setIdDocument($pk);

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


            if (($retval = CommonTDocumentCollaboratifPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTDocumentCollaboratifPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDocument();
                break;
            case 1:
                return $this->getIdParapheur();
                break;
            case 2:
                return $this->getIdThemeParapheur();
                break;
            case 3:
                return $this->getIdObjet();
                break;
            case 4:
                return $this->getOrganisme();
                break;
            case 5:
                return $this->getTitreDocument();
                break;
            case 6:
                return $this->getTypeDocument();
                break;
            case 7:
                return $this->getTypeObjet();
                break;
            case 8:
                return $this->getStatut();
                break;
            case 9:
                return $this->getDateCreation();
                break;
            case 10:
                return $this->getDateModification();
                break;
            case 11:
                return $this->getIdCreateur();
                break;
            case 12:
                return $this->getNomCreateur();
                break;
            case 13:
                return $this->getPrenomCreateur();
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
        if (isset($alreadyDumpedObjects['CommonTDocumentCollaboratif'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTDocumentCollaboratif'][$this->getPrimaryKey()] = true;
        $keys = CommonTDocumentCollaboratifPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdDocument(),
            $keys[1] => $this->getIdParapheur(),
            $keys[2] => $this->getIdThemeParapheur(),
            $keys[3] => $this->getIdObjet(),
            $keys[4] => $this->getOrganisme(),
            $keys[5] => $this->getTitreDocument(),
            $keys[6] => $this->getTypeDocument(),
            $keys[7] => $this->getTypeObjet(),
            $keys[8] => $this->getStatut(),
            $keys[9] => $this->getDateCreation(),
            $keys[10] => $this->getDateModification(),
            $keys[11] => $this->getIdCreateur(),
            $keys[12] => $this->getNomCreateur(),
            $keys[13] => $this->getPrenomCreateur(),
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
        $pos = CommonTDocumentCollaboratifPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDocument($value);
                break;
            case 1:
                $this->setIdParapheur($value);
                break;
            case 2:
                $this->setIdThemeParapheur($value);
                break;
            case 3:
                $this->setIdObjet($value);
                break;
            case 4:
                $this->setOrganisme($value);
                break;
            case 5:
                $this->setTitreDocument($value);
                break;
            case 6:
                $this->setTypeDocument($value);
                break;
            case 7:
                $this->setTypeObjet($value);
                break;
            case 8:
                $this->setStatut($value);
                break;
            case 9:
                $this->setDateCreation($value);
                break;
            case 10:
                $this->setDateModification($value);
                break;
            case 11:
                $this->setIdCreateur($value);
                break;
            case 12:
                $this->setNomCreateur($value);
                break;
            case 13:
                $this->setPrenomCreateur($value);
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
        $keys = CommonTDocumentCollaboratifPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdDocument($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdParapheur($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdThemeParapheur($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdObjet($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrganisme($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTitreDocument($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTypeDocument($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTypeObjet($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStatut($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateCreation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateModification($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdCreateur($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNomCreateur($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPrenomCreateur($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTDocumentCollaboratifPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ID_DOCUMENT)) $criteria->add(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $this->id_document);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ID_PARAPHEUR)) $criteria->add(CommonTDocumentCollaboratifPeer::ID_PARAPHEUR, $this->id_parapheur);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ID_THEME_PARAPHEUR)) $criteria->add(CommonTDocumentCollaboratifPeer::ID_THEME_PARAPHEUR, $this->id_theme_parapheur);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ID_OBJET)) $criteria->add(CommonTDocumentCollaboratifPeer::ID_OBJET, $this->id_objet);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ORGANISME)) $criteria->add(CommonTDocumentCollaboratifPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::TITRE_DOCUMENT)) $criteria->add(CommonTDocumentCollaboratifPeer::TITRE_DOCUMENT, $this->titre_document);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::TYPE_DOCUMENT)) $criteria->add(CommonTDocumentCollaboratifPeer::TYPE_DOCUMENT, $this->type_document);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::TYPE_OBJET)) $criteria->add(CommonTDocumentCollaboratifPeer::TYPE_OBJET, $this->type_objet);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::STATUT)) $criteria->add(CommonTDocumentCollaboratifPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::DATE_CREATION)) $criteria->add(CommonTDocumentCollaboratifPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::DATE_MODIFICATION)) $criteria->add(CommonTDocumentCollaboratifPeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::ID_CREATEUR)) $criteria->add(CommonTDocumentCollaboratifPeer::ID_CREATEUR, $this->id_createur);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::NOM_CREATEUR)) $criteria->add(CommonTDocumentCollaboratifPeer::NOM_CREATEUR, $this->nom_createur);
        if ($this->isColumnModified(CommonTDocumentCollaboratifPeer::PRENOM_CREATEUR)) $criteria->add(CommonTDocumentCollaboratifPeer::PRENOM_CREATEUR, $this->prenom_createur);

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
        $criteria = new Criteria(CommonTDocumentCollaboratifPeer::DATABASE_NAME);
        $criteria->add(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $this->id_document);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdDocument();
    }

    /**
     * Generic method to set the primary key (id_document column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdDocument($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdDocument();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTDocumentCollaboratif (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdParapheur($this->getIdParapheur());
        $copyObj->setIdThemeParapheur($this->getIdThemeParapheur());
        $copyObj->setIdObjet($this->getIdObjet());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setTitreDocument($this->getTitreDocument());
        $copyObj->setTypeDocument($this->getTypeDocument());
        $copyObj->setTypeObjet($this->getTypeObjet());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setIdCreateur($this->getIdCreateur());
        $copyObj->setNomCreateur($this->getNomCreateur());
        $copyObj->setPrenomCreateur($this->getPrenomCreateur());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdDocument(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTDocumentCollaboratif Clone of current object.
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
     * @return CommonTDocumentCollaboratifPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTDocumentCollaboratifPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_document = null;
        $this->id_parapheur = null;
        $this->id_theme_parapheur = null;
        $this->id_objet = null;
        $this->organisme = null;
        $this->titre_document = null;
        $this->type_document = null;
        $this->type_objet = null;
        $this->statut = null;
        $this->date_creation = null;
        $this->date_modification = null;
        $this->id_createur = null;
        $this->nom_createur = null;
        $this->prenom_createur = null;
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
        return (string) $this->exportTo(CommonTDocumentCollaboratifPeer::DEFAULT_STRING_FORMAT);
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
