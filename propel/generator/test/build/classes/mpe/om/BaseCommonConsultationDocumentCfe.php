<?php


/**
 * Base class that represents a row from the 'consultation_document_cfe' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonConsultationDocumentCfe extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonConsultationDocumentCfePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonConsultationDocumentCfePeer
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
     * The value for the id_justificatif field.
     * @var        int
     */
    protected $id_justificatif;

    /**
     * The value for the ref_consultation field.
     * @var        int
     */
    protected $ref_consultation;

    /**
     * The value for the organisme_consultation field.
     * @var        string
     */
    protected $organisme_consultation;

    /**
     * The value for the nom_fichier field.
     * @var        string
     */
    protected $nom_fichier;

    /**
     * The value for the id_entreprise field.
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the taille_document field.
     * @var        string
     */
    protected $taille_document;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * The value for the type_document field.
     * @var        string
     */
    protected $type_document;

    /**
     * The value for the date_fin_validite field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $date_fin_validite;

    /**
     * The value for the horodatage field.
     * @var        resource
     */
    protected $horodatage;

    /**
     * The value for the untrusteddate field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $untrusteddate;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultation;

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
        $this->date_fin_validite = '';
        $this->untrusteddate = NULL;
    }

    /**
     * Initializes internal state of BaseCommonConsultationDocumentCfe object.
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
     * Get the [id_justificatif] column value.
     * 
     * @return int
     */
    public function getIdJustificatif()
    {

        return $this->id_justificatif;
    }

    /**
     * Get the [ref_consultation] column value.
     * 
     * @return int
     */
    public function getRefConsultation()
    {

        return $this->ref_consultation;
    }

    /**
     * Get the [organisme_consultation] column value.
     * 
     * @return string
     */
    public function getOrganismeConsultation()
    {

        return $this->organisme_consultation;
    }

    /**
     * Get the [nom_fichier] column value.
     * 
     * @return string
     */
    public function getNomFichier()
    {

        return $this->nom_fichier;
    }

    /**
     * Get the [id_entreprise] column value.
     * 
     * @return int
     */
    public function getIdEntreprise()
    {

        return $this->id_entreprise;
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
     * Get the [id_blob] column value.
     * 
     * @return int
     */
    public function getIdBlob()
    {

        return $this->id_blob;
    }

    /**
     * Get the [type_document] column value.
     * 
     * @return string
     */
    public function getTypeDocument()
    {

        return $this->type_document;
    }

    /**
     * Get the [date_fin_validite] column value.
     * 
     * @return string
     */
    public function getDateFinValidite()
    {

        return $this->date_fin_validite;
    }

    /**
     * Get the [horodatage] column value.
     * 
     * @return resource
     */
    public function getHorodatage()
    {

        return $this->horodatage;
    }

    /**
     * Get the [optionally formatted] temporal [untrusteddate] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUntrusteddate($format = 'Y-m-d H:i:s')
    {
        if ($this->untrusteddate === null) {
            return null;
        }

        if ($this->untrusteddate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->untrusteddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->untrusteddate, true), $x);
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_justificatif] column.
     * 
     * @param int $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setIdJustificatif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_justificatif !== $v) {
            $this->id_justificatif = $v;
            $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::ID_JUSTIFICATIF;
        }


        return $this;
    } // setIdJustificatif()

    /**
     * Set the value of [ref_consultation] column.
     * 
     * @param int $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setRefConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ref_consultation !== $v) {
            $this->ref_consultation = $v;
            $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::REF_CONSULTATION;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setRefConsultation()

    /**
     * Set the value of [organisme_consultation] column.
     * 
     * @param string $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setOrganismeConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme_consultation !== $v) {
            $this->organisme_consultation = $v;
            $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::ORGANISME_CONSULTATION;
        }


        return $this;
    } // setOrganismeConsultation()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [taille_document] column.
     * 
     * @param string $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setTailleDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille_document !== $v) {
            $this->taille_document = $v;
            $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::TAILLE_DOCUMENT;
        }


        return $this;
    } // setTailleDocument()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [type_document] column.
     * 
     * @param string $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setTypeDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_document !== $v) {
            $this->type_document = $v;
            $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::TYPE_DOCUMENT;
        }


        return $this;
    } // setTypeDocument()

    /**
     * Set the value of [date_fin_validite] column.
     * 
     * @param string $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setDateFinValidite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_fin_validite !== $v) {
            $this->date_fin_validite = $v;
            $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::DATE_FIN_VALIDITE;
        }


        return $this;
    } // setDateFinValidite()

    /**
     * Set the value of [horodatage] column.
     * 
     * @param resource $v new value
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setHorodatage($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->horodatage = fopen('php://memory', 'r+');
            fwrite($this->horodatage, $v);
            rewind($this->horodatage);
        } else { // it's already a stream
            $this->horodatage = $v;
        }
        $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::HORODATAGE;


        return $this;
    } // setHorodatage()

    /**
     * Sets the value of [untrusteddate] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     */
    public function setUntrusteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->untrusteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->untrusteddate !== null && $tmpDt = new DateTime($this->untrusteddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->untrusteddate = $newDateAsString;
                $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::UNTRUSTEDDATE;
            }
        } // if either are not null


        return $this;
    } // setUntrusteddate()

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
            if ($this->date_fin_validite !== '') {
                return false;
            }

            if ($this->untrusteddate !== NULL) {
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
            $this->id_justificatif = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->ref_consultation = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->organisme_consultation = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->nom_fichier = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_entreprise = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->taille_document = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_blob = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->type_document = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->date_fin_validite = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            if ($row[$startcol + 10] !== null) {
                $this->horodatage = fopen('php://memory', 'r+');
                fwrite($this->horodatage, $row[$startcol + 10]);
                rewind($this->horodatage);
            } else {
                $this->horodatage = null;
            }
            $this->untrusteddate = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CommonConsultationDocumentCfePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonConsultationDocumentCfe object", $e);
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

        if ($this->aCommonConsultation !== null && $this->ref_consultation !== $this->aCommonConsultation->getReference()) {
            $this->aCommonConsultation = null;
        }
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
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonConsultationDocumentCfePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonConsultationDocumentCfeQuery::create()
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
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonConsultationDocumentCfePeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonConsultation !== null) {
                if ($this->aCommonConsultation->isModified() || $this->aCommonConsultation->isNew()) {
                    $affectedRows += $this->aCommonConsultation->save($con);
                }
                $this->setCommonConsultation($this->aCommonConsultation);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                // Rewind the horodatage LOB column, since PDO does not rewind after inserting value.
                if ($this->horodatage !== null && is_resource($this->horodatage)) {
                    rewind($this->horodatage);
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

        $this->modifiedColumns[] = CommonConsultationDocumentCfePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonConsultationDocumentCfePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::ID_JUSTIFICATIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_justificatif`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::REF_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`ref_consultation`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::ORGANISME_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`organisme_consultation`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::TAILLE_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`taille_document`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::TYPE_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`type_document`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::DATE_FIN_VALIDITE)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin_validite`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::HORODATAGE)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage`';
        }
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::UNTRUSTEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`untrusteddate`';
        }

        $sql = sprintf(
            'INSERT INTO `consultation_document_cfe` (%s) VALUES (%s)',
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
                    case '`id_justificatif`':						
                        $stmt->bindValue($identifier, $this->id_justificatif, PDO::PARAM_INT);
                        break;
                    case '`ref_consultation`':						
                        $stmt->bindValue($identifier, $this->ref_consultation, PDO::PARAM_INT);
                        break;
                    case '`organisme_consultation`':						
                        $stmt->bindValue($identifier, $this->organisme_consultation, PDO::PARAM_STR);
                        break;
                    case '`nom_fichier`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
                        break;
                    case '`id_entreprise`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`taille_document`':						
                        $stmt->bindValue($identifier, $this->taille_document, PDO::PARAM_STR);
                        break;
                    case '`id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`type_document`':						
                        $stmt->bindValue($identifier, $this->type_document, PDO::PARAM_STR);
                        break;
                    case '`date_fin_validite`':						
                        $stmt->bindValue($identifier, $this->date_fin_validite, PDO::PARAM_STR);
                        break;
                    case '`horodatage`':						
                        if (is_resource($this->horodatage)) {
                            rewind($this->horodatage);
                        }
                        $stmt->bindValue($identifier, $this->horodatage, PDO::PARAM_LOB);
                        break;
                    case '`untrusteddate`':						
                        $stmt->bindValue($identifier, $this->untrusteddate, PDO::PARAM_STR);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonConsultation !== null) {
                if (!$this->aCommonConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonConsultationDocumentCfePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonConsultationDocumentCfePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdJustificatif();
                break;
            case 2:
                return $this->getRefConsultation();
                break;
            case 3:
                return $this->getOrganismeConsultation();
                break;
            case 4:
                return $this->getNomFichier();
                break;
            case 5:
                return $this->getIdEntreprise();
                break;
            case 6:
                return $this->getTailleDocument();
                break;
            case 7:
                return $this->getIdBlob();
                break;
            case 8:
                return $this->getTypeDocument();
                break;
            case 9:
                return $this->getDateFinValidite();
                break;
            case 10:
                return $this->getHorodatage();
                break;
            case 11:
                return $this->getUntrusteddate();
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
        if (isset($alreadyDumpedObjects['CommonConsultationDocumentCfe'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonConsultationDocumentCfe'][$this->getPrimaryKey()] = true;
        $keys = CommonConsultationDocumentCfePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdJustificatif(),
            $keys[2] => $this->getRefConsultation(),
            $keys[3] => $this->getOrganismeConsultation(),
            $keys[4] => $this->getNomFichier(),
            $keys[5] => $this->getIdEntreprise(),
            $keys[6] => $this->getTailleDocument(),
            $keys[7] => $this->getIdBlob(),
            $keys[8] => $this->getTypeDocument(),
            $keys[9] => $this->getDateFinValidite(),
            $keys[10] => $this->getHorodatage(),
            $keys[11] => $this->getUntrusteddate(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultation) {
                $result['CommonConsultation'] = $this->aCommonConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonConsultationDocumentCfePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdJustificatif($value);
                break;
            case 2:
                $this->setRefConsultation($value);
                break;
            case 3:
                $this->setOrganismeConsultation($value);
                break;
            case 4:
                $this->setNomFichier($value);
                break;
            case 5:
                $this->setIdEntreprise($value);
                break;
            case 6:
                $this->setTailleDocument($value);
                break;
            case 7:
                $this->setIdBlob($value);
                break;
            case 8:
                $this->setTypeDocument($value);
                break;
            case 9:
                $this->setDateFinValidite($value);
                break;
            case 10:
                $this->setHorodatage($value);
                break;
            case 11:
                $this->setUntrusteddate($value);
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
        $keys = CommonConsultationDocumentCfePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdJustificatif($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRefConsultation($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setOrganismeConsultation($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNomFichier($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdEntreprise($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTailleDocument($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdBlob($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTypeDocument($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateFinValidite($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setHorodatage($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setUntrusteddate($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonConsultationDocumentCfePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::ID)) $criteria->add(CommonConsultationDocumentCfePeer::ID, $this->id);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::ID_JUSTIFICATIF)) $criteria->add(CommonConsultationDocumentCfePeer::ID_JUSTIFICATIF, $this->id_justificatif);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::REF_CONSULTATION)) $criteria->add(CommonConsultationDocumentCfePeer::REF_CONSULTATION, $this->ref_consultation);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::ORGANISME_CONSULTATION)) $criteria->add(CommonConsultationDocumentCfePeer::ORGANISME_CONSULTATION, $this->organisme_consultation);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::NOM_FICHIER)) $criteria->add(CommonConsultationDocumentCfePeer::NOM_FICHIER, $this->nom_fichier);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::ID_ENTREPRISE)) $criteria->add(CommonConsultationDocumentCfePeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::TAILLE_DOCUMENT)) $criteria->add(CommonConsultationDocumentCfePeer::TAILLE_DOCUMENT, $this->taille_document);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::ID_BLOB)) $criteria->add(CommonConsultationDocumentCfePeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::TYPE_DOCUMENT)) $criteria->add(CommonConsultationDocumentCfePeer::TYPE_DOCUMENT, $this->type_document);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::DATE_FIN_VALIDITE)) $criteria->add(CommonConsultationDocumentCfePeer::DATE_FIN_VALIDITE, $this->date_fin_validite);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::HORODATAGE)) $criteria->add(CommonConsultationDocumentCfePeer::HORODATAGE, $this->horodatage);
        if ($this->isColumnModified(CommonConsultationDocumentCfePeer::UNTRUSTEDDATE)) $criteria->add(CommonConsultationDocumentCfePeer::UNTRUSTEDDATE, $this->untrusteddate);

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
        $criteria = new Criteria(CommonConsultationDocumentCfePeer::DATABASE_NAME);
        $criteria->add(CommonConsultationDocumentCfePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonConsultationDocumentCfe (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdJustificatif($this->getIdJustificatif());
        $copyObj->setRefConsultation($this->getRefConsultation());
        $copyObj->setOrganismeConsultation($this->getOrganismeConsultation());
        $copyObj->setNomFichier($this->getNomFichier());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setTailleDocument($this->getTailleDocument());
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setTypeDocument($this->getTypeDocument());
        $copyObj->setDateFinValidite($this->getDateFinValidite());
        $copyObj->setHorodatage($this->getHorodatage());
        $copyObj->setUntrusteddate($this->getUntrusteddate());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return CommonConsultationDocumentCfe Clone of current object.
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
     * @return CommonConsultationDocumentCfePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonConsultationDocumentCfePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonConsultationDocumentCfe The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setRefConsultation(NULL);
        } else {
            $this->setRefConsultation($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonConsultationDocumentCfe($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultation The associated CommonConsultation object.
     * @throws PropelException
     */
    public function getCommonConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultation === null && ($this->ref_consultation !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()
                ->filterByCommonConsultationDocumentCfe($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonConsultationDocumentCfes($this);
             */
        }

        return $this->aCommonConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_justificatif = null;
        $this->ref_consultation = null;
        $this->organisme_consultation = null;
        $this->nom_fichier = null;
        $this->id_entreprise = null;
        $this->taille_document = null;
        $this->id_blob = null;
        $this->type_document = null;
        $this->date_fin_validite = null;
        $this->horodatage = null;
        $this->untrusteddate = null;
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
            if ($this->aCommonConsultation instanceof Persistent) {
              $this->aCommonConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonConsultationDocumentCfePeer::DEFAULT_STRING_FORMAT);
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
