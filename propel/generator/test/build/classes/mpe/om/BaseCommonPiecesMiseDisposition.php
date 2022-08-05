<?php


/**
 * Base class that represents a row from the 'Pieces_Mise_Disposition' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonPiecesMiseDisposition extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonPiecesMiseDispositionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonPiecesMiseDispositionPeer
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
     * The value for the id_type_doc field.
     * @var        int
     */
    protected $id_type_doc;

    /**
     * The value for the id_decision_enveloppe field.
     * @var        int
     */
    protected $id_decision_enveloppe;

    /**
     * The value for the id_externe field.
     * @var        int
     */
    protected $id_externe;

    /**
     * The value for the org field.
     * @var        string
     */
    protected $org;

    /**
     * The value for the lot field.
     * @var        int
     */
    protected $lot;

    /**
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the date_mise_disposition field.
     * @var        string
     */
    protected $date_mise_disposition;

    /**
     * The value for the statut_disposition field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $statut_disposition;

    /**
     * The value for the date_recuperation field.
     * @var        string
     */
    protected $date_recuperation;

    /**
     * The value for the statut_recuperation field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $statut_recuperation;

    /**
     * The value for the message field.
     * @var        string
     */
    protected $message;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * The value for the id_destinataire field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_destinataire;

    /**
     * The value for the type field.
     * @var        int
     */
    protected $type;

    /**
     * The value for the url_externe field.
     * @var        string
     */
    protected $url_externe;

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
        $this->statut_disposition = 0;
        $this->statut_recuperation = 0;
        $this->id_destinataire = 0;
    }

    /**
     * Initializes internal state of BaseCommonPiecesMiseDisposition object.
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
     * Get the [id_type_doc] column value.
     * 
     * @return int
     */
    public function getIdTypeDoc()
    {

        return $this->id_type_doc;
    }

    /**
     * Get the [id_decision_enveloppe] column value.
     * 
     * @return int
     */
    public function getIdDecisionEnveloppe()
    {

        return $this->id_decision_enveloppe;
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
     * Get the [org] column value.
     * 
     * @return string
     */
    public function getOrg()
    {

        return $this->org;
    }

    /**
     * Get the [lot] column value.
     * 
     * @return int
     */
    public function getLot()
    {

        return $this->lot;
    }

    /**
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [optionally formatted] temporal [date_mise_disposition] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateMiseDisposition($format = 'Y-m-d H:i:s')
    {
        if ($this->date_mise_disposition === null) {
            return null;
        }

        if ($this->date_mise_disposition === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_mise_disposition);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_mise_disposition, true), $x);
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
     * Get the [statut_disposition] column value.
     * 
     * @return int
     */
    public function getStatutDisposition()
    {

        return $this->statut_disposition;
    }

    /**
     * Get the [optionally formatted] temporal [date_recuperation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateRecuperation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_recuperation === null) {
            return null;
        }

        if ($this->date_recuperation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_recuperation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_recuperation, true), $x);
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
     * Get the [statut_recuperation] column value.
     * 
     * @return int
     */
    public function getStatutRecuperation()
    {

        return $this->statut_recuperation;
    }

    /**
     * Get the [message] column value.
     * 
     * @return string
     */
    public function getMessage()
    {

        return $this->message;
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
     * Get the [id_destinataire] column value.
     * 
     * @return int
     */
    public function getIdDestinataire()
    {

        return $this->id_destinataire;
    }

    /**
     * Get the [type] column value.
     * 
     * @return int
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [url_externe] column value.
     * 
     * @return string
     */
    public function getUrlExterne()
    {

        return $this->url_externe;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_type_doc] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setIdTypeDoc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_doc !== $v) {
            $this->id_type_doc = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::ID_TYPE_DOC;
        }


        return $this;
    } // setIdTypeDoc()

    /**
     * Set the value of [id_decision_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setIdDecisionEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_decision_enveloppe !== $v) {
            $this->id_decision_enveloppe = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE;
        }


        return $this;
    } // setIdDecisionEnveloppe()

    /**
     * Set the value of [id_externe] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setIdExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_externe !== $v) {
            $this->id_externe = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::ID_EXTERNE;
        }


        return $this;
    } // setIdExterne()

    /**
     * Set the value of [org] column.
     * 
     * @param string $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setOrg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->org !== $v) {
            $this->org = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::ORG;
        }


        return $this;
    } // setOrg()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Sets the value of [date_mise_disposition] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setDateMiseDisposition($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_mise_disposition !== null || $dt !== null) {
            $currentDateAsString = ($this->date_mise_disposition !== null && $tmpDt = new DateTime($this->date_mise_disposition)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_mise_disposition = $newDateAsString;
                $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::DATE_MISE_DISPOSITION;
            }
        } // if either are not null


        return $this;
    } // setDateMiseDisposition()

    /**
     * Set the value of [statut_disposition] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setStatutDisposition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_disposition !== $v) {
            $this->statut_disposition = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::STATUT_DISPOSITION;
        }


        return $this;
    } // setStatutDisposition()

    /**
     * Sets the value of [date_recuperation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setDateRecuperation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_recuperation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_recuperation !== null && $tmpDt = new DateTime($this->date_recuperation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_recuperation = $newDateAsString;
                $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::DATE_RECUPERATION;
            }
        } // if either are not null


        return $this;
    } // setDateRecuperation()

    /**
     * Set the value of [statut_recuperation] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setStatutRecuperation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_recuperation !== $v) {
            $this->statut_recuperation = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::STATUT_RECUPERATION;
        }


        return $this;
    } // setStatutRecuperation()

    /**
     * Set the value of [message] column.
     * 
     * @param string $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->message !== $v) {
            $this->message = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::MESSAGE;
        }


        return $this;
    } // setMessage()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [id_destinataire] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setIdDestinataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_destinataire !== $v) {
            $this->id_destinataire = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE;
        }


        return $this;
    } // setIdDestinataire()

    /**
     * Set the value of [type] column.
     * 
     * @param int $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [url_externe] column.
     * 
     * @param string $v new value
     * @return CommonPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setUrlExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_externe !== $v) {
            $this->url_externe = $v;
            $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::URL_EXTERNE;
        }


        return $this;
    } // setUrlExterne()

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
            if ($this->statut_disposition !== 0) {
                return false;
            }

            if ($this->statut_recuperation !== 0) {
                return false;
            }

            if ($this->id_destinataire !== 0) {
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
            $this->id_type_doc = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_decision_enveloppe = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_externe = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->org = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->lot = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->consultation_ref = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->date_mise_disposition = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->statut_disposition = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->date_recuperation = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->statut_recuperation = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->message = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->id_blob = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->id_destinataire = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->type = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->url_externe = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = CommonPiecesMiseDispositionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonPiecesMiseDisposition object", $e);
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
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonPiecesMiseDispositionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonPiecesMiseDispositionQuery::create()
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
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonPiecesMiseDispositionPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonPiecesMiseDispositionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonPiecesMiseDispositionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID_TYPE_DOC)) {
            $modifiedColumns[':p' . $index++]  = '`Id_type_doc`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_decision_enveloppe`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`id_externe`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ORG)) {
            $modifiedColumns[':p' . $index++]  = '`org`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::DATE_MISE_DISPOSITION)) {
            $modifiedColumns[':p' . $index++]  = '`Date_mise_disposition`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::STATUT_DISPOSITION)) {
            $modifiedColumns[':p' . $index++]  = '`Statut_disposition`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::DATE_RECUPERATION)) {
            $modifiedColumns[':p' . $index++]  = '`Date_recuperation`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::STATUT_RECUPERATION)) {
            $modifiedColumns[':p' . $index++]  = '`Statut_recuperation`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`Message`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`Id_blob`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`Id_destinataire`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::URL_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`url_externe`';
        }

        $sql = sprintf(
            'INSERT INTO `Pieces_Mise_Disposition` (%s) VALUES (%s)',
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
                    case '`Id_type_doc`':						
                        $stmt->bindValue($identifier, $this->id_type_doc, PDO::PARAM_INT);
                        break;
                    case '`id_decision_enveloppe`':						
                        $stmt->bindValue($identifier, $this->id_decision_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`id_externe`':						
                        $stmt->bindValue($identifier, $this->id_externe, PDO::PARAM_INT);
                        break;
                    case '`org`':						
                        $stmt->bindValue($identifier, $this->org, PDO::PARAM_STR);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`Date_mise_disposition`':						
                        $stmt->bindValue($identifier, $this->date_mise_disposition, PDO::PARAM_STR);
                        break;
                    case '`Statut_disposition`':						
                        $stmt->bindValue($identifier, $this->statut_disposition, PDO::PARAM_INT);
                        break;
                    case '`Date_recuperation`':						
                        $stmt->bindValue($identifier, $this->date_recuperation, PDO::PARAM_STR);
                        break;
                    case '`Statut_recuperation`':						
                        $stmt->bindValue($identifier, $this->statut_recuperation, PDO::PARAM_INT);
                        break;
                    case '`Message`':						
                        $stmt->bindValue($identifier, $this->message, PDO::PARAM_STR);
                        break;
                    case '`Id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`Id_destinataire`':						
                        $stmt->bindValue($identifier, $this->id_destinataire, PDO::PARAM_INT);
                        break;
                    case '`type`':						
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_INT);
                        break;
                    case '`url_externe`':						
                        $stmt->bindValue($identifier, $this->url_externe, PDO::PARAM_STR);
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


            if (($retval = CommonPiecesMiseDispositionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonPiecesMiseDispositionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTypeDoc();
                break;
            case 2:
                return $this->getIdDecisionEnveloppe();
                break;
            case 3:
                return $this->getIdExterne();
                break;
            case 4:
                return $this->getOrg();
                break;
            case 5:
                return $this->getLot();
                break;
            case 6:
                return $this->getConsultationRef();
                break;
            case 7:
                return $this->getDateMiseDisposition();
                break;
            case 8:
                return $this->getStatutDisposition();
                break;
            case 9:
                return $this->getDateRecuperation();
                break;
            case 10:
                return $this->getStatutRecuperation();
                break;
            case 11:
                return $this->getMessage();
                break;
            case 12:
                return $this->getIdBlob();
                break;
            case 13:
                return $this->getIdDestinataire();
                break;
            case 14:
                return $this->getType();
                break;
            case 15:
                return $this->getUrlExterne();
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
        if (isset($alreadyDumpedObjects['CommonPiecesMiseDisposition'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonPiecesMiseDisposition'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonPiecesMiseDispositionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdTypeDoc(),
            $keys[2] => $this->getIdDecisionEnveloppe(),
            $keys[3] => $this->getIdExterne(),
            $keys[4] => $this->getOrg(),
            $keys[5] => $this->getLot(),
            $keys[6] => $this->getConsultationRef(),
            $keys[7] => $this->getDateMiseDisposition(),
            $keys[8] => $this->getStatutDisposition(),
            $keys[9] => $this->getDateRecuperation(),
            $keys[10] => $this->getStatutRecuperation(),
            $keys[11] => $this->getMessage(),
            $keys[12] => $this->getIdBlob(),
            $keys[13] => $this->getIdDestinataire(),
            $keys[14] => $this->getType(),
            $keys[15] => $this->getUrlExterne(),
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
        $pos = CommonPiecesMiseDispositionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTypeDoc($value);
                break;
            case 2:
                $this->setIdDecisionEnveloppe($value);
                break;
            case 3:
                $this->setIdExterne($value);
                break;
            case 4:
                $this->setOrg($value);
                break;
            case 5:
                $this->setLot($value);
                break;
            case 6:
                $this->setConsultationRef($value);
                break;
            case 7:
                $this->setDateMiseDisposition($value);
                break;
            case 8:
                $this->setStatutDisposition($value);
                break;
            case 9:
                $this->setDateRecuperation($value);
                break;
            case 10:
                $this->setStatutRecuperation($value);
                break;
            case 11:
                $this->setMessage($value);
                break;
            case 12:
                $this->setIdBlob($value);
                break;
            case 13:
                $this->setIdDestinataire($value);
                break;
            case 14:
                $this->setType($value);
                break;
            case 15:
                $this->setUrlExterne($value);
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
        $keys = CommonPiecesMiseDispositionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdTypeDoc($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdDecisionEnveloppe($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdExterne($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrg($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLot($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setConsultationRef($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateMiseDisposition($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStatutDisposition($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateRecuperation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setStatutRecuperation($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMessage($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdBlob($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdDestinataire($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setType($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setUrlExterne($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonPiecesMiseDispositionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID)) $criteria->add(CommonPiecesMiseDispositionPeer::ID, $this->id);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID_TYPE_DOC)) $criteria->add(CommonPiecesMiseDispositionPeer::ID_TYPE_DOC, $this->id_type_doc);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE)) $criteria->add(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $this->id_decision_enveloppe);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID_EXTERNE)) $criteria->add(CommonPiecesMiseDispositionPeer::ID_EXTERNE, $this->id_externe);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ORG)) $criteria->add(CommonPiecesMiseDispositionPeer::ORG, $this->org);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::LOT)) $criteria->add(CommonPiecesMiseDispositionPeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::CONSULTATION_REF)) $criteria->add(CommonPiecesMiseDispositionPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::DATE_MISE_DISPOSITION)) $criteria->add(CommonPiecesMiseDispositionPeer::DATE_MISE_DISPOSITION, $this->date_mise_disposition);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::STATUT_DISPOSITION)) $criteria->add(CommonPiecesMiseDispositionPeer::STATUT_DISPOSITION, $this->statut_disposition);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::DATE_RECUPERATION)) $criteria->add(CommonPiecesMiseDispositionPeer::DATE_RECUPERATION, $this->date_recuperation);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::STATUT_RECUPERATION)) $criteria->add(CommonPiecesMiseDispositionPeer::STATUT_RECUPERATION, $this->statut_recuperation);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::MESSAGE)) $criteria->add(CommonPiecesMiseDispositionPeer::MESSAGE, $this->message);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID_BLOB)) $criteria->add(CommonPiecesMiseDispositionPeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE)) $criteria->add(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, $this->id_destinataire);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::TYPE)) $criteria->add(CommonPiecesMiseDispositionPeer::TYPE, $this->type);
        if ($this->isColumnModified(CommonPiecesMiseDispositionPeer::URL_EXTERNE)) $criteria->add(CommonPiecesMiseDispositionPeer::URL_EXTERNE, $this->url_externe);

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
        $criteria = new Criteria(CommonPiecesMiseDispositionPeer::DATABASE_NAME);
        $criteria->add(CommonPiecesMiseDispositionPeer::ID, $this->id);
        $criteria->add(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $this->id_decision_enveloppe);
        $criteria->add(CommonPiecesMiseDispositionPeer::ORG, $this->org);
        $criteria->add(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, $this->id_destinataire);

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
        $pks[1] = $this->getIdDecisionEnveloppe();
        $pks[2] = $this->getOrg();
        $pks[3] = $this->getIdDestinataire();

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
        $this->setIdDecisionEnveloppe($keys[1]);
        $this->setOrg($keys[2]);
        $this->setIdDestinataire($keys[3]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getIdDecisionEnveloppe()) && (null === $this->getOrg()) && (null === $this->getIdDestinataire());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonPiecesMiseDisposition (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTypeDoc($this->getIdTypeDoc());
        $copyObj->setIdDecisionEnveloppe($this->getIdDecisionEnveloppe());
        $copyObj->setIdExterne($this->getIdExterne());
        $copyObj->setOrg($this->getOrg());
        $copyObj->setLot($this->getLot());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setDateMiseDisposition($this->getDateMiseDisposition());
        $copyObj->setStatutDisposition($this->getStatutDisposition());
        $copyObj->setDateRecuperation($this->getDateRecuperation());
        $copyObj->setStatutRecuperation($this->getStatutRecuperation());
        $copyObj->setMessage($this->getMessage());
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setIdDestinataire($this->getIdDestinataire());
        $copyObj->setType($this->getType());
        $copyObj->setUrlExterne($this->getUrlExterne());
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
     * @return CommonPiecesMiseDisposition Clone of current object.
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
     * @return CommonPiecesMiseDispositionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonPiecesMiseDispositionPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_type_doc = null;
        $this->id_decision_enveloppe = null;
        $this->id_externe = null;
        $this->org = null;
        $this->lot = null;
        $this->consultation_ref = null;
        $this->date_mise_disposition = null;
        $this->statut_disposition = null;
        $this->date_recuperation = null;
        $this->statut_recuperation = null;
        $this->message = null;
        $this->id_blob = null;
        $this->id_destinataire = null;
        $this->type = null;
        $this->url_externe = null;
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
        return (string) $this->exportTo(CommonPiecesMiseDispositionPeer::DEFAULT_STRING_FORMAT);
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
