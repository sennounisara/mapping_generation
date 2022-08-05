<?php


/**
 * Base class that represents a row from the 'notification_web_service' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseNotificationWebService extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'NotificationWebServicePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        NotificationWebServicePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_notification_web_service field.
     * @var        int
     */
    protected $id_notification_web_service;

    /**
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

    /**
     * The value for the id_statut field.
     * @var        int
     */
    protected $id_statut;

    /**
     * The value for the libelle_statut field.
     * @var        string
     */
    protected $libelle_statut;

    /**
     * The value for the libelle_statut_ar field.
     * @var        string
     */
    protected $libelle_statut_ar;

    /**
     * The value for the date_statut field.
     * @var        string
     */
    protected $date_statut;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the id_organisme field.
     * @var        int
     */
    protected $id_organisme;

    /**
     * The value for the id_utilisateur field.
     * @var        int
     */
    protected $id_utilisateur;

    /**
     * The value for the etat_notification field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $etat_notification;

    /**
     * The value for the etat_acquittement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $etat_acquittement;

    /**
     * The value for the date_acquittement field.
     * @var        string
     */
    protected $date_acquittement;

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
        $this->etat_notification = '0';
        $this->etat_acquittement = '0';
    }

    /**
     * Initializes internal state of BaseNotificationWebService object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_notification_web_service] column value.
     * 
     * @return int
     */
    public function getIdNotificationWebService()
    {

        return $this->id_notification_web_service;
    }

    /**
     * Get the [id_demande] column value.
     * 
     * @return int
     */
    public function getIdDemande()
    {

        return $this->id_demande;
    }

    /**
     * Get the [id_statut] column value.
     * 
     * @return int
     */
    public function getIdStatut()
    {

        return $this->id_statut;
    }

    /**
     * Get the [libelle_statut] column value.
     * 
     * @return string
     */
    public function getLibelleStatut()
    {

        return $this->libelle_statut;
    }

    /**
     * Get the [libelle_statut_ar] column value.
     * 
     * @return string
     */
    public function getLibelleStatutAr()
    {

        return $this->libelle_statut_ar;
    }

    /**
     * Get the [optionally formatted] temporal [date_statut] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateStatut($format = 'Y-m-d H:i:s')
    {
        if ($this->date_statut === null) {
            return null;
        }

        if ($this->date_statut === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_statut);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_statut, true), $x);
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
     * Get the [optionally formatted] temporal [date] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = 'Y-m-d H:i:s')
    {
        if ($this->date === null) {
            return null;
        }

        if ($this->date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date, true), $x);
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
     * Get the [id_organisme] column value.
     * 
     * @return int
     */
    public function getIdOrganisme()
    {

        return $this->id_organisme;
    }

    /**
     * Get the [id_utilisateur] column value.
     * 
     * @return int
     */
    public function getIdUtilisateur()
    {

        return $this->id_utilisateur;
    }

    /**
     * Get the [etat_notification] column value.
     * 
     * @return string
     */
    public function getEtatNotification()
    {

        return $this->etat_notification;
    }

    /**
     * Get the [etat_acquittement] column value.
     * 
     * @return string
     */
    public function getEtatAcquittement()
    {

        return $this->etat_acquittement;
    }

    /**
     * Get the [optionally formatted] temporal [date_acquittement] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateAcquittement($format = 'Y-m-d H:i:s')
    {
        if ($this->date_acquittement === null) {
            return null;
        }

        if ($this->date_acquittement === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_acquittement);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_acquittement, true), $x);
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
     * Set the value of [id_notification_web_service] column.
     * 
     * @param int $v new value
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setIdNotificationWebService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_notification_web_service !== $v) {
            $this->id_notification_web_service = $v;
            $this->modifiedColumns[] = NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE;
        }


        return $this;
    } // setIdNotificationWebService()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = NotificationWebServicePeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Set the value of [id_statut] column.
     * 
     * @param int $v new value
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setIdStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_statut !== $v) {
            $this->id_statut = $v;
            $this->modifiedColumns[] = NotificationWebServicePeer::ID_STATUT;
        }


        return $this;
    } // setIdStatut()

    /**
     * Set the value of [libelle_statut] column.
     * 
     * @param string $v new value
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setLibelleStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_statut !== $v) {
            $this->libelle_statut = $v;
            $this->modifiedColumns[] = NotificationWebServicePeer::LIBELLE_STATUT;
        }


        return $this;
    } // setLibelleStatut()

    /**
     * Set the value of [libelle_statut_ar] column.
     * 
     * @param string $v new value
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setLibelleStatutAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_statut_ar !== $v) {
            $this->libelle_statut_ar = $v;
            $this->modifiedColumns[] = NotificationWebServicePeer::LIBELLE_STATUT_AR;
        }


        return $this;
    } // setLibelleStatutAr()

    /**
     * Sets the value of [date_statut] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setDateStatut($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_statut !== null || $dt !== null) {
            $currentDateAsString = ($this->date_statut !== null && $tmpDt = new DateTime($this->date_statut)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_statut = $newDateAsString;
                $this->modifiedColumns[] = NotificationWebServicePeer::DATE_STATUT;
            }
        } // if either are not null


        return $this;
    } // setDateStatut()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = NotificationWebServicePeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Set the value of [id_organisme] column.
     * 
     * @param int $v new value
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setIdOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_organisme !== $v) {
            $this->id_organisme = $v;
            $this->modifiedColumns[] = NotificationWebServicePeer::ID_ORGANISME;
        }


        return $this;
    } // setIdOrganisme()

    /**
     * Set the value of [id_utilisateur] column.
     * 
     * @param int $v new value
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setIdUtilisateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_utilisateur !== $v) {
            $this->id_utilisateur = $v;
            $this->modifiedColumns[] = NotificationWebServicePeer::ID_UTILISATEUR;
        }


        return $this;
    } // setIdUtilisateur()

    /**
     * Set the value of [etat_notification] column.
     * 
     * @param string $v new value
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setEtatNotification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat_notification !== $v) {
            $this->etat_notification = $v;
            $this->modifiedColumns[] = NotificationWebServicePeer::ETAT_NOTIFICATION;
        }


        return $this;
    } // setEtatNotification()

    /**
     * Set the value of [etat_acquittement] column.
     * 
     * @param string $v new value
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setEtatAcquittement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat_acquittement !== $v) {
            $this->etat_acquittement = $v;
            $this->modifiedColumns[] = NotificationWebServicePeer::ETAT_ACQUITTEMENT;
        }


        return $this;
    } // setEtatAcquittement()

    /**
     * Sets the value of [date_acquittement] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return NotificationWebService The current object (for fluent API support)
     */
    public function setDateAcquittement($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_acquittement !== null || $dt !== null) {
            $currentDateAsString = ($this->date_acquittement !== null && $tmpDt = new DateTime($this->date_acquittement)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_acquittement = $newDateAsString;
                $this->modifiedColumns[] = NotificationWebServicePeer::DATE_ACQUITTEMENT;
            }
        } // if either are not null


        return $this;
    } // setDateAcquittement()

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
            if ($this->etat_notification !== '0') {
                return false;
            }

            if ($this->etat_acquittement !== '0') {
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

            $this->id_notification_web_service = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_demande = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_statut = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->libelle_statut = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->libelle_statut_ar = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_statut = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_organisme = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->id_utilisateur = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->etat_notification = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->etat_acquittement = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_acquittement = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = NotificationWebServicePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating NotificationWebService object", $e);
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
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = NotificationWebServicePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = NotificationWebServiceQuery::create()
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
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                NotificationWebServicePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE;
        if (null !== $this->id_notification_web_service) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_NOTIFICATION_WEB_SERVICE`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::ID_STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_STATUT`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::LIBELLE_STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_STATUT`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::LIBELLE_STATUT_AR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_STATUT_AR`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::DATE_STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_STATUT`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::ID_ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ORGANISME`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::ID_UTILISATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`ID_UTILISATEUR`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::ETAT_NOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT_NOTIFICATION`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::ETAT_ACQUITTEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT_ACQUITTEMENT`';
        }
        if ($this->isColumnModified(NotificationWebServicePeer::DATE_ACQUITTEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ACQUITTEMENT`';
        }

        $sql = sprintf(
            'INSERT INTO `notification_web_service` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_NOTIFICATION_WEB_SERVICE`':						
                        $stmt->bindValue($identifier, $this->id_notification_web_service, PDO::PARAM_INT);
                        break;
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_STATUT`':						
                        $stmt->bindValue($identifier, $this->id_statut, PDO::PARAM_INT);
                        break;
                    case '`LIBELLE_STATUT`':						
                        $stmt->bindValue($identifier, $this->libelle_statut, PDO::PARAM_STR);
                        break;
                    case '`LIBELLE_STATUT_AR`':						
                        $stmt->bindValue($identifier, $this->libelle_statut_ar, PDO::PARAM_STR);
                        break;
                    case '`DATE_STATUT`':						
                        $stmt->bindValue($identifier, $this->date_statut, PDO::PARAM_STR);
                        break;
                    case '`DATE`':						
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`ID_ORGANISME`':						
                        $stmt->bindValue($identifier, $this->id_organisme, PDO::PARAM_INT);
                        break;
                    case '`ID_UTILISATEUR`':						
                        $stmt->bindValue($identifier, $this->id_utilisateur, PDO::PARAM_INT);
                        break;
                    case '`ETAT_NOTIFICATION`':						
                        $stmt->bindValue($identifier, $this->etat_notification, PDO::PARAM_STR);
                        break;
                    case '`ETAT_ACQUITTEMENT`':						
                        $stmt->bindValue($identifier, $this->etat_acquittement, PDO::PARAM_STR);
                        break;
                    case '`DATE_ACQUITTEMENT`':						
                        $stmt->bindValue($identifier, $this->date_acquittement, PDO::PARAM_STR);
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
        $this->setIdNotificationWebService($pk);

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


            if (($retval = NotificationWebServicePeer::doValidate($this, $columns)) !== true) {
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
        $pos = NotificationWebServicePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdNotificationWebService();
                break;
            case 1:
                return $this->getIdDemande();
                break;
            case 2:
                return $this->getIdStatut();
                break;
            case 3:
                return $this->getLibelleStatut();
                break;
            case 4:
                return $this->getLibelleStatutAr();
                break;
            case 5:
                return $this->getDateStatut();
                break;
            case 6:
                return $this->getDate();
                break;
            case 7:
                return $this->getIdOrganisme();
                break;
            case 8:
                return $this->getIdUtilisateur();
                break;
            case 9:
                return $this->getEtatNotification();
                break;
            case 10:
                return $this->getEtatAcquittement();
                break;
            case 11:
                return $this->getDateAcquittement();
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
        if (isset($alreadyDumpedObjects['NotificationWebService'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['NotificationWebService'][$this->getPrimaryKey()] = true;
        $keys = NotificationWebServicePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdNotificationWebService(),
            $keys[1] => $this->getIdDemande(),
            $keys[2] => $this->getIdStatut(),
            $keys[3] => $this->getLibelleStatut(),
            $keys[4] => $this->getLibelleStatutAr(),
            $keys[5] => $this->getDateStatut(),
            $keys[6] => $this->getDate(),
            $keys[7] => $this->getIdOrganisme(),
            $keys[8] => $this->getIdUtilisateur(),
            $keys[9] => $this->getEtatNotification(),
            $keys[10] => $this->getEtatAcquittement(),
            $keys[11] => $this->getDateAcquittement(),
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
        $pos = NotificationWebServicePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdNotificationWebService($value);
                break;
            case 1:
                $this->setIdDemande($value);
                break;
            case 2:
                $this->setIdStatut($value);
                break;
            case 3:
                $this->setLibelleStatut($value);
                break;
            case 4:
                $this->setLibelleStatutAr($value);
                break;
            case 5:
                $this->setDateStatut($value);
                break;
            case 6:
                $this->setDate($value);
                break;
            case 7:
                $this->setIdOrganisme($value);
                break;
            case 8:
                $this->setIdUtilisateur($value);
                break;
            case 9:
                $this->setEtatNotification($value);
                break;
            case 10:
                $this->setEtatAcquittement($value);
                break;
            case 11:
                $this->setDateAcquittement($value);
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
        $keys = NotificationWebServicePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdNotificationWebService($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdDemande($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdStatut($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleStatut($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLibelleStatutAr($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateStatut($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDate($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdOrganisme($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdUtilisateur($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEtatNotification($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEtatAcquittement($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateAcquittement($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(NotificationWebServicePeer::DATABASE_NAME);

        if ($this->isColumnModified(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE)) $criteria->add(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $this->id_notification_web_service);
        if ($this->isColumnModified(NotificationWebServicePeer::ID_DEMANDE)) $criteria->add(NotificationWebServicePeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(NotificationWebServicePeer::ID_STATUT)) $criteria->add(NotificationWebServicePeer::ID_STATUT, $this->id_statut);
        if ($this->isColumnModified(NotificationWebServicePeer::LIBELLE_STATUT)) $criteria->add(NotificationWebServicePeer::LIBELLE_STATUT, $this->libelle_statut);
        if ($this->isColumnModified(NotificationWebServicePeer::LIBELLE_STATUT_AR)) $criteria->add(NotificationWebServicePeer::LIBELLE_STATUT_AR, $this->libelle_statut_ar);
        if ($this->isColumnModified(NotificationWebServicePeer::DATE_STATUT)) $criteria->add(NotificationWebServicePeer::DATE_STATUT, $this->date_statut);
        if ($this->isColumnModified(NotificationWebServicePeer::DATE)) $criteria->add(NotificationWebServicePeer::DATE, $this->date);
        if ($this->isColumnModified(NotificationWebServicePeer::ID_ORGANISME)) $criteria->add(NotificationWebServicePeer::ID_ORGANISME, $this->id_organisme);
        if ($this->isColumnModified(NotificationWebServicePeer::ID_UTILISATEUR)) $criteria->add(NotificationWebServicePeer::ID_UTILISATEUR, $this->id_utilisateur);
        if ($this->isColumnModified(NotificationWebServicePeer::ETAT_NOTIFICATION)) $criteria->add(NotificationWebServicePeer::ETAT_NOTIFICATION, $this->etat_notification);
        if ($this->isColumnModified(NotificationWebServicePeer::ETAT_ACQUITTEMENT)) $criteria->add(NotificationWebServicePeer::ETAT_ACQUITTEMENT, $this->etat_acquittement);
        if ($this->isColumnModified(NotificationWebServicePeer::DATE_ACQUITTEMENT)) $criteria->add(NotificationWebServicePeer::DATE_ACQUITTEMENT, $this->date_acquittement);

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
        $criteria = new Criteria(NotificationWebServicePeer::DATABASE_NAME);
        $criteria->add(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $this->id_notification_web_service);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdNotificationWebService();
    }

    /**
     * Generic method to set the primary key (id_notification_web_service column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdNotificationWebService($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdNotificationWebService();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of NotificationWebService (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setIdStatut($this->getIdStatut());
        $copyObj->setLibelleStatut($this->getLibelleStatut());
        $copyObj->setLibelleStatutAr($this->getLibelleStatutAr());
        $copyObj->setDateStatut($this->getDateStatut());
        $copyObj->setDate($this->getDate());
        $copyObj->setIdOrganisme($this->getIdOrganisme());
        $copyObj->setIdUtilisateur($this->getIdUtilisateur());
        $copyObj->setEtatNotification($this->getEtatNotification());
        $copyObj->setEtatAcquittement($this->getEtatAcquittement());
        $copyObj->setDateAcquittement($this->getDateAcquittement());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdNotificationWebService(NULL); // this is a auto-increment column, so set to default value
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
     * @return NotificationWebService Clone of current object.
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
     * @return NotificationWebServicePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new NotificationWebServicePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_notification_web_service = null;
        $this->id_demande = null;
        $this->id_statut = null;
        $this->libelle_statut = null;
        $this->libelle_statut_ar = null;
        $this->date_statut = null;
        $this->date = null;
        $this->id_organisme = null;
        $this->id_utilisateur = null;
        $this->etat_notification = null;
        $this->etat_acquittement = null;
        $this->date_acquittement = null;
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
        return (string) $this->exportTo(NotificationWebServicePeer::DEFAULT_STRING_FORMAT);
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
