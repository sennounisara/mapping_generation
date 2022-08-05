<?php


/**
 * Base class that represents a row from the 'backup_Intervenant_Ordre_Du_Jour' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBackupIntervenantOrdreDuJour extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonBackupIntervenantOrdreDuJourPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonBackupIntervenantOrdreDuJourPeer
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
     * The value for the id_ordre_du_jour field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_ordre_du_jour;

    /**
     * The value for the id_intervenant field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_intervenant;

    /**
     * The value for the id_agent field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the convocation field.
     * @var        resource
     */
    protected $convocation;

    /**
     * The value for the convoc_send field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $convoc_send;

    /**
     * The value for the nom_convoc field.
     * @var        string
     */
    protected $nom_convoc;

    /**
     * The value for the contenu_envoi field.
     * @var        string
     */
    protected $contenu_envoi;

    /**
     * The value for the nom_fichier_envoye field.
     * @var        string
     */
    protected $nom_fichier_envoye;

    /**
     * The value for the fichier_envoye field.
     * @var        resource
     */
    protected $fichier_envoye;

    /**
     * The value for the date_envoi field.
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the type_voix field.
     * @var        string
     */
    protected $type_voix;

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
        $this->id_ordre_du_jour = 0;
        $this->id_intervenant = 0;
        $this->id_agent = 0;
        $this->convoc_send = '0';
    }

    /**
     * Initializes internal state of BaseCommonBackupIntervenantOrdreDuJour object.
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
     * Get the [id_ordre_du_jour] column value.
     * 
     * @return int
     */
    public function getIdOrdreDuJour()
    {

        return $this->id_ordre_du_jour;
    }

    /**
     * Get the [id_intervenant] column value.
     * 
     * @return int
     */
    public function getIdIntervenant()
    {

        return $this->id_intervenant;
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
     * Get the [convocation] column value.
     * 
     * @return resource
     */
    public function getConvocation()
    {

        return $this->convocation;
    }

    /**
     * Get the [convoc_send] column value.
     * 
     * @return string
     */
    public function getConvocSend()
    {

        return $this->convoc_send;
    }

    /**
     * Get the [nom_convoc] column value.
     * 
     * @return string
     */
    public function getNomConvoc()
    {

        return $this->nom_convoc;
    }

    /**
     * Get the [contenu_envoi] column value.
     * 
     * @return string
     */
    public function getContenuEnvoi()
    {

        return $this->contenu_envoi;
    }

    /**
     * Get the [nom_fichier_envoye] column value.
     * 
     * @return string
     */
    public function getNomFichierEnvoye()
    {

        return $this->nom_fichier_envoye;
    }

    /**
     * Get the [fichier_envoye] column value.
     * 
     * @return resource
     */
    public function getFichierEnvoye()
    {

        return $this->fichier_envoye;
    }

    /**
     * Get the [optionally formatted] temporal [date_envoi] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEnvoi($format = 'Y-m-d H:i:s')
    {
        if ($this->date_envoi === null) {
            return null;
        }

        if ($this->date_envoi === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_envoi);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_envoi, true), $x);
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
     * Get the [type_voix] column value.
     * 
     * @return string
     */
    public function getTypeVoix()
    {

        return $this->type_voix;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_ordre_du_jour] column.
     * 
     * @param int $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setIdOrdreDuJour($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ordre_du_jour !== $v) {
            $this->id_ordre_du_jour = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::ID_ORDRE_DU_JOUR;
        }


        return $this;
    } // setIdOrdreDuJour()

    /**
     * Set the value of [id_intervenant] column.
     * 
     * @param int $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setIdIntervenant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_intervenant !== $v) {
            $this->id_intervenant = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::ID_INTERVENANT;
        }


        return $this;
    } // setIdIntervenant()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [convocation] column.
     * 
     * @param resource $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setConvocation($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->convocation = fopen('php://memory', 'r+');
            fwrite($this->convocation, $v);
            rewind($this->convocation);
        } else { // it's already a stream
            $this->convocation = $v;
        }
        $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::CONVOCATION;


        return $this;
    } // setConvocation()

    /**
     * Set the value of [convoc_send] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setConvocSend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->convoc_send !== $v) {
            $this->convoc_send = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::CONVOC_SEND;
        }


        return $this;
    } // setConvocSend()

    /**
     * Set the value of [nom_convoc] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setNomConvoc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_convoc !== $v) {
            $this->nom_convoc = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::NOM_CONVOC;
        }


        return $this;
    } // setNomConvoc()

    /**
     * Set the value of [contenu_envoi] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setContenuEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contenu_envoi !== $v) {
            $this->contenu_envoi = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::CONTENU_ENVOI;
        }


        return $this;
    } // setContenuEnvoi()

    /**
     * Set the value of [nom_fichier_envoye] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setNomFichierEnvoye($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier_envoye !== $v) {
            $this->nom_fichier_envoye = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::NOM_FICHIER_ENVOYE;
        }


        return $this;
    } // setNomFichierEnvoye()

    /**
     * Set the value of [fichier_envoye] column.
     * 
     * @param resource $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setFichierEnvoye($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->fichier_envoye = fopen('php://memory', 'r+');
            fwrite($this->fichier_envoye, $v);
            rewind($this->fichier_envoye);
        } else { // it's already a stream
            $this->fichier_envoye = $v;
        }
        $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::FICHIER_ENVOYE;


        return $this;
    } // setFichierEnvoye()

    /**
     * Sets the value of [date_envoi] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_envoi !== null || $dt !== null) {
            $currentDateAsString = ($this->date_envoi !== null && $tmpDt = new DateTime($this->date_envoi)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_envoi = $newDateAsString;
                $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::DATE_ENVOI;
            }
        } // if either are not null


        return $this;
    } // setDateEnvoi()

    /**
     * Set the value of [type_voix] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantOrdreDuJour The current object (for fluent API support)
     */
    public function setTypeVoix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_voix !== $v) {
            $this->type_voix = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::TYPE_VOIX;
        }


        return $this;
    } // setTypeVoix()

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
            if ($this->id_ordre_du_jour !== 0) {
                return false;
            }

            if ($this->id_intervenant !== 0) {
                return false;
            }

            if ($this->id_agent !== 0) {
                return false;
            }

            if ($this->convoc_send !== '0') {
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
            $this->id_ordre_du_jour = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_intervenant = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_agent = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            if ($row[$startcol + 5] !== null) {
                $this->convocation = fopen('php://memory', 'r+');
                fwrite($this->convocation, $row[$startcol + 5]);
                rewind($this->convocation);
            } else {
                $this->convocation = null;
            }
            $this->convoc_send = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->nom_convoc = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->contenu_envoi = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->nom_fichier_envoye = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            if ($row[$startcol + 10] !== null) {
                $this->fichier_envoye = fopen('php://memory', 'r+');
                fwrite($this->fichier_envoye, $row[$startcol + 10]);
                rewind($this->fichier_envoye);
            } else {
                $this->fichier_envoye = null;
            }
            $this->date_envoi = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->type_voix = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = CommonBackupIntervenantOrdreDuJourPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonBackupIntervenantOrdreDuJour object", $e);
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
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonBackupIntervenantOrdreDuJourPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonBackupIntervenantOrdreDuJourQuery::create()
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
            $con = Propel::getConnection(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonBackupIntervenantOrdreDuJourPeer::addInstanceToPool($this);
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
                // Rewind the convocation LOB column, since PDO does not rewind after inserting value.
                if ($this->convocation !== null && is_resource($this->convocation)) {
                    rewind($this->convocation);
                }

                // Rewind the fichier_envoye LOB column, since PDO does not rewind after inserting value.
                if ($this->fichier_envoye !== null && is_resource($this->fichier_envoye)) {
                    rewind($this->fichier_envoye);
                }

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

        $this->modifiedColumns[] = CommonBackupIntervenantOrdreDuJourPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonBackupIntervenantOrdreDuJourPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::ID_ORDRE_DU_JOUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_ordre_du_jour`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::ID_INTERVENANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_intervenant`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::CONVOCATION)) {
            $modifiedColumns[':p' . $index++]  = '`convocation`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::CONVOC_SEND)) {
            $modifiedColumns[':p' . $index++]  = '`convoc_send`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::NOM_CONVOC)) {
            $modifiedColumns[':p' . $index++]  = '`nom_convoc`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::CONTENU_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`contenu_envoi`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::NOM_FICHIER_ENVOYE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier_envoye`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::FICHIER_ENVOYE)) {
            $modifiedColumns[':p' . $index++]  = '`fichier_envoye`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::TYPE_VOIX)) {
            $modifiedColumns[':p' . $index++]  = '`type_voix`';
        }

        $sql = sprintf(
            'INSERT INTO `backup_Intervenant_Ordre_Du_Jour` (%s) VALUES (%s)',
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
                    case '`id_ordre_du_jour`':						
                        $stmt->bindValue($identifier, $this->id_ordre_du_jour, PDO::PARAM_INT);
                        break;
                    case '`id_intervenant`':						
                        $stmt->bindValue($identifier, $this->id_intervenant, PDO::PARAM_INT);
                        break;
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`convocation`':						
                        if (is_resource($this->convocation)) {
                            rewind($this->convocation);
                        }
                        $stmt->bindValue($identifier, $this->convocation, PDO::PARAM_LOB);
                        break;
                    case '`convoc_send`':						
                        $stmt->bindValue($identifier, $this->convoc_send, PDO::PARAM_STR);
                        break;
                    case '`nom_convoc`':						
                        $stmt->bindValue($identifier, $this->nom_convoc, PDO::PARAM_STR);
                        break;
                    case '`contenu_envoi`':						
                        $stmt->bindValue($identifier, $this->contenu_envoi, PDO::PARAM_STR);
                        break;
                    case '`nom_fichier_envoye`':						
                        $stmt->bindValue($identifier, $this->nom_fichier_envoye, PDO::PARAM_STR);
                        break;
                    case '`fichier_envoye`':						
                        if (is_resource($this->fichier_envoye)) {
                            rewind($this->fichier_envoye);
                        }
                        $stmt->bindValue($identifier, $this->fichier_envoye, PDO::PARAM_LOB);
                        break;
                    case '`date_envoi`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`type_voix`':						
                        $stmt->bindValue($identifier, $this->type_voix, PDO::PARAM_STR);
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


            if (($retval = CommonBackupIntervenantOrdreDuJourPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonBackupIntervenantOrdreDuJourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdOrdreDuJour();
                break;
            case 3:
                return $this->getIdIntervenant();
                break;
            case 4:
                return $this->getIdAgent();
                break;
            case 5:
                return $this->getConvocation();
                break;
            case 6:
                return $this->getConvocSend();
                break;
            case 7:
                return $this->getNomConvoc();
                break;
            case 8:
                return $this->getContenuEnvoi();
                break;
            case 9:
                return $this->getNomFichierEnvoye();
                break;
            case 10:
                return $this->getFichierEnvoye();
                break;
            case 11:
                return $this->getDateEnvoi();
                break;
            case 12:
                return $this->getTypeVoix();
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
        if (isset($alreadyDumpedObjects['CommonBackupIntervenantOrdreDuJour'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonBackupIntervenantOrdreDuJour'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonBackupIntervenantOrdreDuJourPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdOrdreDuJour(),
            $keys[3] => $this->getIdIntervenant(),
            $keys[4] => $this->getIdAgent(),
            $keys[5] => $this->getConvocation(),
            $keys[6] => $this->getConvocSend(),
            $keys[7] => $this->getNomConvoc(),
            $keys[8] => $this->getContenuEnvoi(),
            $keys[9] => $this->getNomFichierEnvoye(),
            $keys[10] => $this->getFichierEnvoye(),
            $keys[11] => $this->getDateEnvoi(),
            $keys[12] => $this->getTypeVoix(),
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
        $pos = CommonBackupIntervenantOrdreDuJourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdOrdreDuJour($value);
                break;
            case 3:
                $this->setIdIntervenant($value);
                break;
            case 4:
                $this->setIdAgent($value);
                break;
            case 5:
                $this->setConvocation($value);
                break;
            case 6:
                $this->setConvocSend($value);
                break;
            case 7:
                $this->setNomConvoc($value);
                break;
            case 8:
                $this->setContenuEnvoi($value);
                break;
            case 9:
                $this->setNomFichierEnvoye($value);
                break;
            case 10:
                $this->setFichierEnvoye($value);
                break;
            case 11:
                $this->setDateEnvoi($value);
                break;
            case 12:
                $this->setTypeVoix($value);
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
        $keys = CommonBackupIntervenantOrdreDuJourPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdOrdreDuJour($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdIntervenant($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdAgent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setConvocation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setConvocSend($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNomConvoc($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setContenuEnvoi($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNomFichierEnvoye($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFichierEnvoye($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateEnvoi($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTypeVoix($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::ID)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::ID, $this->id);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::ID_ORDRE_DU_JOUR)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::ID_ORDRE_DU_JOUR, $this->id_ordre_du_jour);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::ID_INTERVENANT)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::ID_INTERVENANT, $this->id_intervenant);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::ID_AGENT)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::CONVOCATION)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::CONVOCATION, $this->convocation);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::CONVOC_SEND)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::CONVOC_SEND, $this->convoc_send);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::NOM_CONVOC)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::NOM_CONVOC, $this->nom_convoc);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::CONTENU_ENVOI)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::CONTENU_ENVOI, $this->contenu_envoi);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::NOM_FICHIER_ENVOYE)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::NOM_FICHIER_ENVOYE, $this->nom_fichier_envoye);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::FICHIER_ENVOYE)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::FICHIER_ENVOYE, $this->fichier_envoye);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::DATE_ENVOI)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(CommonBackupIntervenantOrdreDuJourPeer::TYPE_VOIX)) $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::TYPE_VOIX, $this->type_voix);

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
        $criteria = new Criteria(CommonBackupIntervenantOrdreDuJourPeer::DATABASE_NAME);
        $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::ID, $this->id);
        $criteria->add(CommonBackupIntervenantOrdreDuJourPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonBackupIntervenantOrdreDuJour (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdOrdreDuJour($this->getIdOrdreDuJour());
        $copyObj->setIdIntervenant($this->getIdIntervenant());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setConvocation($this->getConvocation());
        $copyObj->setConvocSend($this->getConvocSend());
        $copyObj->setNomConvoc($this->getNomConvoc());
        $copyObj->setContenuEnvoi($this->getContenuEnvoi());
        $copyObj->setNomFichierEnvoye($this->getNomFichierEnvoye());
        $copyObj->setFichierEnvoye($this->getFichierEnvoye());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setTypeVoix($this->getTypeVoix());
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
     * @return CommonBackupIntervenantOrdreDuJour Clone of current object.
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
     * @return CommonBackupIntervenantOrdreDuJourPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonBackupIntervenantOrdreDuJourPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->id_ordre_du_jour = null;
        $this->id_intervenant = null;
        $this->id_agent = null;
        $this->convocation = null;
        $this->convoc_send = null;
        $this->nom_convoc = null;
        $this->contenu_envoi = null;
        $this->nom_fichier_envoye = null;
        $this->fichier_envoye = null;
        $this->date_envoi = null;
        $this->type_voix = null;
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
        return (string) $this->exportTo(CommonBackupIntervenantOrdreDuJourPeer::DEFAULT_STRING_FORMAT);
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
