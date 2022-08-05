<?php


/**
 * Base class that represents a row from the 't_candidature_mps' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCandidatureMps extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCandidatureMpsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCandidatureMpsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_candidature field.
     * @var        int
     */
    protected $id_candidature;

    /**
     * The value for the id_entreprise field.
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the id_inscrit field.
     * @var        int
     */
    protected $id_inscrit;

    /**
     * The value for the ref_consultation field.
     * @var        int
     */
    protected $ref_consultation;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_offre field.
     * @var        int
     */
    protected $id_offre;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * The value for the horodatage field.
     * @var        resource
     */
    protected $horodatage;

    /**
     * The value for the untrusted_date field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $untrusted_date;

    /**
     * The value for the untrusted_serial field.
     * @var        string
     */
    protected $untrusted_serial;

    /**
     * The value for the taille_fichier field.
     * @var        int
     */
    protected $taille_fichier;

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
        $this->untrusted_date = NULL;
    }

    /**
     * Initializes internal state of BaseCommonTCandidatureMps object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_candidature] column value.
     * 
     * @return int
     */
    public function getIdCandidature()
    {

        return $this->id_candidature;
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
     * Get the [id_inscrit] column value.
     * 
     * @return int
     */
    public function getIdInscrit()
    {

        return $this->id_inscrit;
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
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [id_offre] column value.
     * 
     * @return int
     */
    public function getIdOffre()
    {

        return $this->id_offre;
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
     * Get the [horodatage] column value.
     * 
     * @return resource
     */
    public function getHorodatage()
    {

        return $this->horodatage;
    }

    /**
     * Get the [optionally formatted] temporal [untrusted_date] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUntrustedDate($format = 'Y-m-d H:i:s')
    {
        if ($this->untrusted_date === null) {
            return null;
        }

        if ($this->untrusted_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->untrusted_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->untrusted_date, true), $x);
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
     * Get the [untrusted_serial] column value.
     * 
     * @return string
     */
    public function getUntrustedSerial()
    {

        return $this->untrusted_serial;
    }

    /**
     * Get the [taille_fichier] column value.
     * 
     * @return int
     */
    public function getTailleFichier()
    {

        return $this->taille_fichier;
    }

    /**
     * Set the value of [id_candidature] column.
     * 
     * @param int $v new value
     * @return CommonTCandidatureMps The current object (for fluent API support)
     */
    public function setIdCandidature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_candidature !== $v) {
            $this->id_candidature = $v;
            $this->modifiedColumns[] = CommonTCandidatureMpsPeer::ID_CANDIDATURE;
        }


        return $this;
    } // setIdCandidature()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonTCandidatureMps The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonTCandidatureMpsPeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonTCandidatureMps The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonTCandidatureMpsPeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [ref_consultation] column.
     * 
     * @param int $v new value
     * @return CommonTCandidatureMps The current object (for fluent API support)
     */
    public function setRefConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ref_consultation !== $v) {
            $this->ref_consultation = $v;
            $this->modifiedColumns[] = CommonTCandidatureMpsPeer::REF_CONSULTATION;
        }


        return $this;
    } // setRefConsultation()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTCandidatureMps The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTCandidatureMpsPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_offre] column.
     * 
     * @param int $v new value
     * @return CommonTCandidatureMps The current object (for fluent API support)
     */
    public function setIdOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_offre !== $v) {
            $this->id_offre = $v;
            $this->modifiedColumns[] = CommonTCandidatureMpsPeer::ID_OFFRE;
        }


        return $this;
    } // setIdOffre()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonTCandidatureMps The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonTCandidatureMpsPeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [horodatage] column.
     * 
     * @param resource $v new value
     * @return CommonTCandidatureMps The current object (for fluent API support)
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
        $this->modifiedColumns[] = CommonTCandidatureMpsPeer::HORODATAGE;


        return $this;
    } // setHorodatage()

    /**
     * Sets the value of [untrusted_date] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTCandidatureMps The current object (for fluent API support)
     */
    public function setUntrustedDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->untrusted_date !== null || $dt !== null) {
            $currentDateAsString = ($this->untrusted_date !== null && $tmpDt = new DateTime($this->untrusted_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->untrusted_date = $newDateAsString;
                $this->modifiedColumns[] = CommonTCandidatureMpsPeer::UNTRUSTED_DATE;
            }
        } // if either are not null


        return $this;
    } // setUntrustedDate()

    /**
     * Set the value of [untrusted_serial] column.
     * 
     * @param string $v new value
     * @return CommonTCandidatureMps The current object (for fluent API support)
     */
    public function setUntrustedSerial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->untrusted_serial !== $v) {
            $this->untrusted_serial = $v;
            $this->modifiedColumns[] = CommonTCandidatureMpsPeer::UNTRUSTED_SERIAL;
        }


        return $this;
    } // setUntrustedSerial()

    /**
     * Set the value of [taille_fichier] column.
     * 
     * @param int $v new value
     * @return CommonTCandidatureMps The current object (for fluent API support)
     */
    public function setTailleFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taille_fichier !== $v) {
            $this->taille_fichier = $v;
            $this->modifiedColumns[] = CommonTCandidatureMpsPeer::TAILLE_FICHIER;
        }


        return $this;
    } // setTailleFichier()

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
            if ($this->untrusted_date !== NULL) {
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

            $this->id_candidature = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_entreprise = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_inscrit = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->ref_consultation = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->organisme = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_offre = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_blob = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            if ($row[$startcol + 7] !== null) {
                $this->horodatage = fopen('php://memory', 'r+');
                fwrite($this->horodatage, $row[$startcol + 7]);
                rewind($this->horodatage);
            } else {
                $this->horodatage = null;
            }
            $this->untrusted_date = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->untrusted_serial = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->taille_fichier = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = CommonTCandidatureMpsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCandidatureMps object", $e);
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
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCandidatureMpsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCandidatureMpsQuery::create()
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
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCandidatureMpsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTCandidatureMpsPeer::ID_CANDIDATURE;
        if (null !== $this->id_candidature) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCandidatureMpsPeer::ID_CANDIDATURE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ID_CANDIDATURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_candidature`';
        }
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise`';
        }
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`id_inscrit`';
        }
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::REF_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`ref_consultation`';
        }
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ID_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_offre`';
        }
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob`';
        }
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::HORODATAGE)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage`';
        }
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::UNTRUSTED_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`untrusted_date`';
        }
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::UNTRUSTED_SERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`untrusted_serial`';
        }
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::TAILLE_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`taille_fichier`';
        }

        $sql = sprintf(
            'INSERT INTO `t_candidature_mps` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_candidature`':						
                        $stmt->bindValue($identifier, $this->id_candidature, PDO::PARAM_INT);
                        break;
                    case '`id_entreprise`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`id_inscrit`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`ref_consultation`':						
                        $stmt->bindValue($identifier, $this->ref_consultation, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_offre`':						
                        $stmt->bindValue($identifier, $this->id_offre, PDO::PARAM_INT);
                        break;
                    case '`id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`horodatage`':						
                        if (is_resource($this->horodatage)) {
                            rewind($this->horodatage);
                        }
                        $stmt->bindValue($identifier, $this->horodatage, PDO::PARAM_LOB);
                        break;
                    case '`untrusted_date`':						
                        $stmt->bindValue($identifier, $this->untrusted_date, PDO::PARAM_STR);
                        break;
                    case '`untrusted_serial`':						
                        $stmt->bindValue($identifier, $this->untrusted_serial, PDO::PARAM_STR);
                        break;
                    case '`taille_fichier`':						
                        $stmt->bindValue($identifier, $this->taille_fichier, PDO::PARAM_INT);
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
        $this->setIdCandidature($pk);

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


            if (($retval = CommonTCandidatureMpsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTCandidatureMpsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdCandidature();
                break;
            case 1:
                return $this->getIdEntreprise();
                break;
            case 2:
                return $this->getIdInscrit();
                break;
            case 3:
                return $this->getRefConsultation();
                break;
            case 4:
                return $this->getOrganisme();
                break;
            case 5:
                return $this->getIdOffre();
                break;
            case 6:
                return $this->getIdBlob();
                break;
            case 7:
                return $this->getHorodatage();
                break;
            case 8:
                return $this->getUntrustedDate();
                break;
            case 9:
                return $this->getUntrustedSerial();
                break;
            case 10:
                return $this->getTailleFichier();
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
        if (isset($alreadyDumpedObjects['CommonTCandidatureMps'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCandidatureMps'][$this->getPrimaryKey()] = true;
        $keys = CommonTCandidatureMpsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCandidature(),
            $keys[1] => $this->getIdEntreprise(),
            $keys[2] => $this->getIdInscrit(),
            $keys[3] => $this->getRefConsultation(),
            $keys[4] => $this->getOrganisme(),
            $keys[5] => $this->getIdOffre(),
            $keys[6] => $this->getIdBlob(),
            $keys[7] => $this->getHorodatage(),
            $keys[8] => $this->getUntrustedDate(),
            $keys[9] => $this->getUntrustedSerial(),
            $keys[10] => $this->getTailleFichier(),
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
        $pos = CommonTCandidatureMpsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdCandidature($value);
                break;
            case 1:
                $this->setIdEntreprise($value);
                break;
            case 2:
                $this->setIdInscrit($value);
                break;
            case 3:
                $this->setRefConsultation($value);
                break;
            case 4:
                $this->setOrganisme($value);
                break;
            case 5:
                $this->setIdOffre($value);
                break;
            case 6:
                $this->setIdBlob($value);
                break;
            case 7:
                $this->setHorodatage($value);
                break;
            case 8:
                $this->setUntrustedDate($value);
                break;
            case 9:
                $this->setUntrustedSerial($value);
                break;
            case 10:
                $this->setTailleFichier($value);
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
        $keys = CommonTCandidatureMpsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdCandidature($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdEntreprise($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdInscrit($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRefConsultation($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrganisme($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdOffre($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdBlob($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setHorodatage($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUntrustedDate($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUntrustedSerial($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTailleFichier($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCandidatureMpsPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ID_CANDIDATURE)) $criteria->add(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $this->id_candidature);
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ID_ENTREPRISE)) $criteria->add(CommonTCandidatureMpsPeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ID_INSCRIT)) $criteria->add(CommonTCandidatureMpsPeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::REF_CONSULTATION)) $criteria->add(CommonTCandidatureMpsPeer::REF_CONSULTATION, $this->ref_consultation);
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ORGANISME)) $criteria->add(CommonTCandidatureMpsPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ID_OFFRE)) $criteria->add(CommonTCandidatureMpsPeer::ID_OFFRE, $this->id_offre);
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::ID_BLOB)) $criteria->add(CommonTCandidatureMpsPeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::HORODATAGE)) $criteria->add(CommonTCandidatureMpsPeer::HORODATAGE, $this->horodatage);
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::UNTRUSTED_DATE)) $criteria->add(CommonTCandidatureMpsPeer::UNTRUSTED_DATE, $this->untrusted_date);
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::UNTRUSTED_SERIAL)) $criteria->add(CommonTCandidatureMpsPeer::UNTRUSTED_SERIAL, $this->untrusted_serial);
        if ($this->isColumnModified(CommonTCandidatureMpsPeer::TAILLE_FICHIER)) $criteria->add(CommonTCandidatureMpsPeer::TAILLE_FICHIER, $this->taille_fichier);

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
        $criteria = new Criteria(CommonTCandidatureMpsPeer::DATABASE_NAME);
        $criteria->add(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $this->id_candidature);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdCandidature();
    }

    /**
     * Generic method to set the primary key (id_candidature column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCandidature($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdCandidature();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTCandidatureMps (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setRefConsultation($this->getRefConsultation());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdOffre($this->getIdOffre());
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setHorodatage($this->getHorodatage());
        $copyObj->setUntrustedDate($this->getUntrustedDate());
        $copyObj->setUntrustedSerial($this->getUntrustedSerial());
        $copyObj->setTailleFichier($this->getTailleFichier());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCandidature(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTCandidatureMps Clone of current object.
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
     * @return CommonTCandidatureMpsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCandidatureMpsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_candidature = null;
        $this->id_entreprise = null;
        $this->id_inscrit = null;
        $this->ref_consultation = null;
        $this->organisme = null;
        $this->id_offre = null;
        $this->id_blob = null;
        $this->horodatage = null;
        $this->untrusted_date = null;
        $this->untrusted_serial = null;
        $this->taille_fichier = null;
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
        return (string) $this->exportTo(CommonTCandidatureMpsPeer::DEFAULT_STRING_FORMAT);
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
