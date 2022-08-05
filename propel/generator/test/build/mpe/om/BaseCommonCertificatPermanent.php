<?php


/**
 * Base class that represents a row from the 'CertificatPermanent' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCertificatPermanent extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonCertificatPermanentPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonCertificatPermanentPeer
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
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the titre field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $titre;

    /**
     * The value for the prenom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the nom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom;

    /**
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the certificat field.
     * @var        string
     */
    protected $certificat;

    /**
     * The value for the service_id field.
     * Note: this column has a database default value of: -1
     * @var        int
     */
    protected $service_id;

    /**
     * The value for the master_key field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $master_key;

    /**
     * The value for the id_agent field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the csp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $csp;

    /**
     * The value for the date_modification field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $date_modification;

    /**
     * The value for the certificat_universelle field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $certificat_universelle;

    /**
     * The value for the visible field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $visible;

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
        $this->organisme = '';
        $this->titre = '';
        $this->prenom = '';
        $this->nom = '';
        $this->email = '';
        $this->service_id = -1;
        $this->master_key = '0';
        $this->id_agent = 0;
        $this->csp = '';
        $this->date_modification = '';
        $this->certificat_universelle = '0';
        $this->visible = '1';
    }

    /**
     * Initializes internal state of BaseCommonCertificatPermanent object.
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
     * Get the [titre] column value.
     * 
     * @return string
     */
    public function getTitre()
    {

        return $this->titre;
    }

    /**
     * Get the [prenom] column value.
     * 
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * Get the [nom] column value.
     * 
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [certificat] column value.
     * 
     * @return string
     */
    public function getCertificat()
    {

        return $this->certificat;
    }

    /**
     * Get the [service_id] column value.
     * 
     * @return int
     */
    public function getServiceId()
    {

        return $this->service_id;
    }

    /**
     * Get the [master_key] column value.
     * 
     * @return string
     */
    public function getMasterKey()
    {

        return $this->master_key;
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
     * Get the [csp] column value.
     * 
     * @return string
     */
    public function getCsp()
    {

        return $this->csp;
    }

    /**
     * Get the [date_modification] column value.
     * 
     * @return string
     */
    public function getDateModification()
    {

        return $this->date_modification;
    }

    /**
     * Get the [certificat_universelle] column value.
     * 
     * @return string
     */
    public function getCertificatUniverselle()
    {

        return $this->certificat_universelle;
    }

    /**
     * Get the [visible] column value.
     * 
     * @return string
     */
    public function getVisible()
    {

        return $this->visible;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [titre] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setTitre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->titre !== $v) {
            $this->titre = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::TITRE;
        }


        return $this;
    } // setTitre()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [certificat] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->certificat !== $v) {
            $this->certificat = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::CERTIFICAT;
        }


        return $this;
    } // setCertificat()

    /**
     * Set the value of [service_id] column.
     * 
     * @param int $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setServiceId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->service_id !== $v) {
            $this->service_id = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::SERVICE_ID;
        }


        return $this;
    } // setServiceId()

    /**
     * Set the value of [master_key] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setMasterKey($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->master_key !== $v) {
            $this->master_key = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::MASTER_KEY;
        }


        return $this;
    } // setMasterKey()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [csp] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setCsp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->csp !== $v) {
            $this->csp = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::CSP;
        }


        return $this;
    } // setCsp()

    /**
     * Set the value of [date_modification] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modification !== $v) {
            $this->date_modification = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::DATE_MODIFICATION;
        }


        return $this;
    } // setDateModification()

    /**
     * Set the value of [certificat_universelle] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setCertificatUniverselle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->certificat_universelle !== $v) {
            $this->certificat_universelle = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE;
        }


        return $this;
    } // setCertificatUniverselle()

    /**
     * Set the value of [visible] column.
     * 
     * @param string $v new value
     * @return CommonCertificatPermanent The current object (for fluent API support)
     */
    public function setVisible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible !== $v) {
            $this->visible = $v;
            $this->modifiedColumns[] = CommonCertificatPermanentPeer::VISIBLE;
        }


        return $this;
    } // setVisible()

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
            if ($this->organisme !== '') {
                return false;
            }

            if ($this->titre !== '') {
                return false;
            }

            if ($this->prenom !== '') {
                return false;
            }

            if ($this->nom !== '') {
                return false;
            }

            if ($this->email !== '') {
                return false;
            }

            if ($this->service_id !== -1) {
                return false;
            }

            if ($this->master_key !== '0') {
                return false;
            }

            if ($this->id_agent !== 0) {
                return false;
            }

            if ($this->csp !== '') {
                return false;
            }

            if ($this->date_modification !== '') {
                return false;
            }

            if ($this->certificat_universelle !== '0') {
                return false;
            }

            if ($this->visible !== '1') {
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
            $this->titre = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->prenom = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->nom = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->certificat = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->service_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->master_key = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->id_agent = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->csp = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_modification = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->certificat_universelle = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->visible = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = CommonCertificatPermanentPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonCertificatPermanent object", $e);
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
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonCertificatPermanentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonCertificatPermanentQuery::create()
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
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonCertificatPermanentPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonCertificatPermanentPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonCertificatPermanentPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonCertificatPermanentPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::TITRE)) {
            $modifiedColumns[':p' . $index++]  = '`Titre`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`Prenom`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`Nom`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`EMail`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`Certificat`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::SERVICE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`service_id`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::MASTER_KEY)) {
            $modifiedColumns[':p' . $index++]  = '`master_key`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::CSP)) {
            $modifiedColumns[':p' . $index++]  = '`CSP`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE)) {
            $modifiedColumns[':p' . $index++]  = '`certificat_universelle`';
        }
        if ($this->isColumnModified(CommonCertificatPermanentPeer::VISIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`visible`';
        }

        $sql = sprintf(
            'INSERT INTO `CertificatPermanent` (%s) VALUES (%s)',
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
                    case '`Titre`':						
                        $stmt->bindValue($identifier, $this->titre, PDO::PARAM_STR);
                        break;
                    case '`Prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`Nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`EMail`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`Certificat`':						
                        $stmt->bindValue($identifier, $this->certificat, PDO::PARAM_STR);
                        break;
                    case '`service_id`':						
                        $stmt->bindValue($identifier, $this->service_id, PDO::PARAM_INT);
                        break;
                    case '`master_key`':						
                        $stmt->bindValue($identifier, $this->master_key, PDO::PARAM_STR);
                        break;
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`CSP`':						
                        $stmt->bindValue($identifier, $this->csp, PDO::PARAM_STR);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`certificat_universelle`':						
                        $stmt->bindValue($identifier, $this->certificat_universelle, PDO::PARAM_STR);
                        break;
                    case '`visible`':						
                        $stmt->bindValue($identifier, $this->visible, PDO::PARAM_STR);
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


            if (($retval = CommonCertificatPermanentPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonCertificatPermanentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTitre();
                break;
            case 3:
                return $this->getPrenom();
                break;
            case 4:
                return $this->getNom();
                break;
            case 5:
                return $this->getEmail();
                break;
            case 6:
                return $this->getCertificat();
                break;
            case 7:
                return $this->getServiceId();
                break;
            case 8:
                return $this->getMasterKey();
                break;
            case 9:
                return $this->getIdAgent();
                break;
            case 10:
                return $this->getCsp();
                break;
            case 11:
                return $this->getDateModification();
                break;
            case 12:
                return $this->getCertificatUniverselle();
                break;
            case 13:
                return $this->getVisible();
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
        if (isset($alreadyDumpedObjects['CommonCertificatPermanent'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonCertificatPermanent'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonCertificatPermanentPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getTitre(),
            $keys[3] => $this->getPrenom(),
            $keys[4] => $this->getNom(),
            $keys[5] => $this->getEmail(),
            $keys[6] => $this->getCertificat(),
            $keys[7] => $this->getServiceId(),
            $keys[8] => $this->getMasterKey(),
            $keys[9] => $this->getIdAgent(),
            $keys[10] => $this->getCsp(),
            $keys[11] => $this->getDateModification(),
            $keys[12] => $this->getCertificatUniverselle(),
            $keys[13] => $this->getVisible(),
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
        $pos = CommonCertificatPermanentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTitre($value);
                break;
            case 3:
                $this->setPrenom($value);
                break;
            case 4:
                $this->setNom($value);
                break;
            case 5:
                $this->setEmail($value);
                break;
            case 6:
                $this->setCertificat($value);
                break;
            case 7:
                $this->setServiceId($value);
                break;
            case 8:
                $this->setMasterKey($value);
                break;
            case 9:
                $this->setIdAgent($value);
                break;
            case 10:
                $this->setCsp($value);
                break;
            case 11:
                $this->setDateModification($value);
                break;
            case 12:
                $this->setCertificatUniverselle($value);
                break;
            case 13:
                $this->setVisible($value);
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
        $keys = CommonCertificatPermanentPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTitre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPrenom($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNom($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmail($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCertificat($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setServiceId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMasterKey($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIdAgent($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCsp($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateModification($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCertificatUniverselle($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setVisible($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonCertificatPermanentPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonCertificatPermanentPeer::ID)) $criteria->add(CommonCertificatPermanentPeer::ID, $this->id);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::ORGANISME)) $criteria->add(CommonCertificatPermanentPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::TITRE)) $criteria->add(CommonCertificatPermanentPeer::TITRE, $this->titre);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::PRENOM)) $criteria->add(CommonCertificatPermanentPeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::NOM)) $criteria->add(CommonCertificatPermanentPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::EMAIL)) $criteria->add(CommonCertificatPermanentPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::CERTIFICAT)) $criteria->add(CommonCertificatPermanentPeer::CERTIFICAT, $this->certificat);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::SERVICE_ID)) $criteria->add(CommonCertificatPermanentPeer::SERVICE_ID, $this->service_id);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::MASTER_KEY)) $criteria->add(CommonCertificatPermanentPeer::MASTER_KEY, $this->master_key);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::ID_AGENT)) $criteria->add(CommonCertificatPermanentPeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::CSP)) $criteria->add(CommonCertificatPermanentPeer::CSP, $this->csp);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::DATE_MODIFICATION)) $criteria->add(CommonCertificatPermanentPeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE)) $criteria->add(CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE, $this->certificat_universelle);
        if ($this->isColumnModified(CommonCertificatPermanentPeer::VISIBLE)) $criteria->add(CommonCertificatPermanentPeer::VISIBLE, $this->visible);

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
        $criteria = new Criteria(CommonCertificatPermanentPeer::DATABASE_NAME);
        $criteria->add(CommonCertificatPermanentPeer::ID, $this->id);
        $criteria->add(CommonCertificatPermanentPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonCertificatPermanent (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setTitre($this->getTitre());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setNom($this->getNom());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setCertificat($this->getCertificat());
        $copyObj->setServiceId($this->getServiceId());
        $copyObj->setMasterKey($this->getMasterKey());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setCsp($this->getCsp());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setCertificatUniverselle($this->getCertificatUniverselle());
        $copyObj->setVisible($this->getVisible());
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
     * @return CommonCertificatPermanent Clone of current object.
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
     * @return CommonCertificatPermanentPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonCertificatPermanentPeer();
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
        $this->titre = null;
        $this->prenom = null;
        $this->nom = null;
        $this->email = null;
        $this->certificat = null;
        $this->service_id = null;
        $this->master_key = null;
        $this->id_agent = null;
        $this->csp = null;
        $this->date_modification = null;
        $this->certificat_universelle = null;
        $this->visible = null;
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
        return (string) $this->exportTo(CommonCertificatPermanentPeer::DEFAULT_STRING_FORMAT);
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
