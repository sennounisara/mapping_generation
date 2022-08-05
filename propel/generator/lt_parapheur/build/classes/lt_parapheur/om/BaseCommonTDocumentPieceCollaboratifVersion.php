<?php


/**
 * Base class that represents a row from the 't_document_piece_collaboratif_version' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDocumentPieceCollaboratifVersion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTDocumentPieceCollaboratifVersionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTDocumentPieceCollaboratifVersionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_version_piece_document field.
     * @var        int
     */
    protected $id_version_piece_document;

    /**
     * The value for the id_piece field.
     * @var        int
     */
    protected $id_piece;

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
     * The value for the hash field.
     * @var        string
     */
    protected $hash;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * The value for the taille_piece field.
     * @var        string
     */
    protected $taille_piece;

    /**
     * The value for the extension_document field.
     * @var        string
     */
    protected $extension_document;

    /**
     * The value for the version field.
     * @var        string
     */
    protected $version;

    /**
     * The value for the nom_agent field.
     * @var        string
     */
    protected $nom_agent;

    /**
     * The value for the prenom_agent field.
     * @var        string
     */
    protected $prenom_agent;

    /**
     * The value for the nom_document field.
     * @var        string
     */
    protected $nom_document;

    /**
     * @var        CommonTDocumentPieceCollaboratif
     */
    protected $aCommonTDocumentPieceCollaboratif;

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
     * Get the [id_version_piece_document] column value.
     * 
     * @return int
     */
    public function getIdVersionPieceDocument()
    {

        return $this->id_version_piece_document;
    }

    /**
     * Get the [id_piece] column value.
     * 
     * @return int
     */
    public function getIdPiece()
    {

        return $this->id_piece;
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
     * Get the [hash] column value.
     * 
     * @return string
     */
    public function getHash()
    {

        return $this->hash;
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
     * Get the [taille_piece] column value.
     * 
     * @return string
     */
    public function getTaillePiece()
    {

        return $this->taille_piece;
    }

    /**
     * Get the [extension_document] column value.
     * 
     * @return string
     */
    public function getExtensionDocument()
    {

        return $this->extension_document;
    }

    /**
     * Get the [version] column value.
     * 
     * @return string
     */
    public function getVersion()
    {

        return $this->version;
    }

    /**
     * Get the [nom_agent] column value.
     * 
     * @return string
     */
    public function getNomAgent()
    {

        return $this->nom_agent;
    }

    /**
     * Get the [prenom_agent] column value.
     * 
     * @return string
     */
    public function getPrenomAgent()
    {

        return $this->prenom_agent;
    }

    /**
     * Get the [nom_document] column value.
     * 
     * @return string
     */
    public function getNomDocument()
    {

        return $this->nom_document;
    }

    /**
     * Set the value of [id_version_piece_document] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setIdVersionPieceDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_version_piece_document !== $v) {
            $this->id_version_piece_document = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT;
        }


        return $this;
    } // setIdVersionPieceDocument()

    /**
     * Set the value of [id_piece] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setIdPiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_piece !== $v) {
            $this->id_piece = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE;
        }

        if ($this->aCommonTDocumentPieceCollaboratif !== null && $this->aCommonTDocumentPieceCollaboratif->getIdDocumentPiece() !== $v) {
            $this->aCommonTDocumentPieceCollaboratif = null;
        }


        return $this;
    } // setIdPiece()

    /**
     * Sets the value of [date_creation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_creation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_creation !== null && $tmpDt = new DateTime($this->date_creation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_creation = $newDateAsString;
                $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::DATE_CREATION;
            }
        } // if either are not null


        return $this;
    } // setDateCreation()

    /**
     * Sets the value of [date_modification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modification !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modification !== null && $tmpDt = new DateTime($this->date_modification)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modification = $newDateAsString;
                $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::DATE_MODIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDateModification()

    /**
     * Set the value of [hash] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setHash($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hash !== $v) {
            $this->hash = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::HASH;
        }


        return $this;
    } // setHash()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [taille_piece] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setTaillePiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille_piece !== $v) {
            $this->taille_piece = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::TAILLE_PIECE;
        }


        return $this;
    } // setTaillePiece()

    /**
     * Set the value of [extension_document] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setExtensionDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->extension_document !== $v) {
            $this->extension_document = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::EXTENSION_DOCUMENT;
        }


        return $this;
    } // setExtensionDocument()

    /**
     * Set the value of [version] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setVersion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->version !== $v) {
            $this->version = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::VERSION;
        }


        return $this;
    } // setVersion()

    /**
     * Set the value of [nom_agent] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setNomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent !== $v) {
            $this->nom_agent = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::NOM_AGENT;
        }


        return $this;
    } // setNomAgent()

    /**
     * Set the value of [prenom_agent] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setPrenomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent !== $v) {
            $this->prenom_agent = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::PRENOM_AGENT;
        }


        return $this;
    } // setPrenomAgent()

    /**
     * Set the value of [nom_document] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     */
    public function setNomDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_document !== $v) {
            $this->nom_document = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::NOM_DOCUMENT;
        }


        return $this;
    } // setNomDocument()

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

            $this->id_version_piece_document = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_piece = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->date_creation = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->date_modification = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->hash = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_blob = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->taille_piece = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->extension_document = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->version = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->nom_agent = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->prenom_agent = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->nom_document = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CommonTDocumentPieceCollaboratifVersionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTDocumentPieceCollaboratifVersion object", $e);
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

        if ($this->aCommonTDocumentPieceCollaboratif !== null && $this->id_piece !== $this->aCommonTDocumentPieceCollaboratif->getIdDocumentPiece()) {
            $this->aCommonTDocumentPieceCollaboratif = null;
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTDocumentPieceCollaboratifVersionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonTDocumentPieceCollaboratif = null;
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTDocumentPieceCollaboratifVersionQuery::create()
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTDocumentPieceCollaboratifVersionPeer::addInstanceToPool($this);
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

            if ($this->aCommonTDocumentPieceCollaboratif !== null) {
                if ($this->aCommonTDocumentPieceCollaboratif->isModified() || $this->aCommonTDocumentPieceCollaboratif->isNew()) {
                    $affectedRows += $this->aCommonTDocumentPieceCollaboratif->save($con);
                }
                $this->setCommonTDocumentPieceCollaboratif($this->aCommonTDocumentPieceCollaboratif);
            }

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

        $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT;
        if (null !== $this->id_version_piece_document) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_version_piece_document`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`id_piece`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::HASH)) {
            $modifiedColumns[':p' . $index++]  = '`hash`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::TAILLE_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`taille_piece`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::EXTENSION_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`extension_document`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::VERSION)) {
            $modifiedColumns[':p' . $index++]  = '`version`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::NOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::PRENOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_agent`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::NOM_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_document`';
        }

        $sql = sprintf(
            'INSERT INTO `t_document_piece_collaboratif_version` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_version_piece_document`':						
                        $stmt->bindValue($identifier, $this->id_version_piece_document, PDO::PARAM_INT);
                        break;
                    case '`id_piece`':						
                        $stmt->bindValue($identifier, $this->id_piece, PDO::PARAM_INT);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`hash`':						
                        $stmt->bindValue($identifier, $this->hash, PDO::PARAM_STR);
                        break;
                    case '`id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`taille_piece`':						
                        $stmt->bindValue($identifier, $this->taille_piece, PDO::PARAM_STR);
                        break;
                    case '`extension_document`':						
                        $stmt->bindValue($identifier, $this->extension_document, PDO::PARAM_STR);
                        break;
                    case '`version`':						
                        $stmt->bindValue($identifier, $this->version, PDO::PARAM_STR);
                        break;
                    case '`nom_agent`':						
                        $stmt->bindValue($identifier, $this->nom_agent, PDO::PARAM_STR);
                        break;
                    case '`prenom_agent`':						
                        $stmt->bindValue($identifier, $this->prenom_agent, PDO::PARAM_STR);
                        break;
                    case '`nom_document`':						
                        $stmt->bindValue($identifier, $this->nom_document, PDO::PARAM_STR);
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
        $this->setIdVersionPieceDocument($pk);

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

            if ($this->aCommonTDocumentPieceCollaboratif !== null) {
                if (!$this->aCommonTDocumentPieceCollaboratif->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTDocumentPieceCollaboratif->getValidationFailures());
                }
            }


            if (($retval = CommonTDocumentPieceCollaboratifVersionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTDocumentPieceCollaboratifVersionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdVersionPieceDocument();
                break;
            case 1:
                return $this->getIdPiece();
                break;
            case 2:
                return $this->getDateCreation();
                break;
            case 3:
                return $this->getDateModification();
                break;
            case 4:
                return $this->getHash();
                break;
            case 5:
                return $this->getIdBlob();
                break;
            case 6:
                return $this->getTaillePiece();
                break;
            case 7:
                return $this->getExtensionDocument();
                break;
            case 8:
                return $this->getVersion();
                break;
            case 9:
                return $this->getNomAgent();
                break;
            case 10:
                return $this->getPrenomAgent();
                break;
            case 11:
                return $this->getNomDocument();
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
        if (isset($alreadyDumpedObjects['CommonTDocumentPieceCollaboratifVersion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTDocumentPieceCollaboratifVersion'][$this->getPrimaryKey()] = true;
        $keys = CommonTDocumentPieceCollaboratifVersionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdVersionPieceDocument(),
            $keys[1] => $this->getIdPiece(),
            $keys[2] => $this->getDateCreation(),
            $keys[3] => $this->getDateModification(),
            $keys[4] => $this->getHash(),
            $keys[5] => $this->getIdBlob(),
            $keys[6] => $this->getTaillePiece(),
            $keys[7] => $this->getExtensionDocument(),
            $keys[8] => $this->getVersion(),
            $keys[9] => $this->getNomAgent(),
            $keys[10] => $this->getPrenomAgent(),
            $keys[11] => $this->getNomDocument(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonTDocumentPieceCollaboratif) {
                $result['CommonTDocumentPieceCollaboratif'] = $this->aCommonTDocumentPieceCollaboratif->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonTDocumentPieceCollaboratifVersionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdVersionPieceDocument($value);
                break;
            case 1:
                $this->setIdPiece($value);
                break;
            case 2:
                $this->setDateCreation($value);
                break;
            case 3:
                $this->setDateModification($value);
                break;
            case 4:
                $this->setHash($value);
                break;
            case 5:
                $this->setIdBlob($value);
                break;
            case 6:
                $this->setTaillePiece($value);
                break;
            case 7:
                $this->setExtensionDocument($value);
                break;
            case 8:
                $this->setVersion($value);
                break;
            case 9:
                $this->setNomAgent($value);
                break;
            case 10:
                $this->setPrenomAgent($value);
                break;
            case 11:
                $this->setNomDocument($value);
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
        $keys = CommonTDocumentPieceCollaboratifVersionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdVersionPieceDocument($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdPiece($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDateCreation($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDateModification($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setHash($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdBlob($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTaillePiece($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setExtensionDocument($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVersion($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNomAgent($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPrenomAgent($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNomDocument($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $this->id_version_piece_document);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, $this->id_piece);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::DATE_CREATION)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::DATE_MODIFICATION)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::HASH)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::HASH, $this->hash);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::ID_BLOB)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::TAILLE_PIECE)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::TAILLE_PIECE, $this->taille_piece);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::EXTENSION_DOCUMENT)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::EXTENSION_DOCUMENT, $this->extension_document);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::VERSION)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::VERSION, $this->version);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::NOM_AGENT)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::NOM_AGENT, $this->nom_agent);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::PRENOM_AGENT)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::PRENOM_AGENT, $this->prenom_agent);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifVersionPeer::NOM_DOCUMENT)) $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::NOM_DOCUMENT, $this->nom_document);

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
        $criteria = new Criteria(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);
        $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $this->id_version_piece_document);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdVersionPieceDocument();
    }

    /**
     * Generic method to set the primary key (id_version_piece_document column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdVersionPieceDocument($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdVersionPieceDocument();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTDocumentPieceCollaboratifVersion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdPiece($this->getIdPiece());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setHash($this->getHash());
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setTaillePiece($this->getTaillePiece());
        $copyObj->setExtensionDocument($this->getExtensionDocument());
        $copyObj->setVersion($this->getVersion());
        $copyObj->setNomAgent($this->getNomAgent());
        $copyObj->setPrenomAgent($this->getPrenomAgent());
        $copyObj->setNomDocument($this->getNomDocument());

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
            $copyObj->setIdVersionPieceDocument(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTDocumentPieceCollaboratifVersion Clone of current object.
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
     * @return CommonTDocumentPieceCollaboratifVersionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTDocumentPieceCollaboratifVersionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonTDocumentPieceCollaboratif object.
     *
     * @param   CommonTDocumentPieceCollaboratif $v
     * @return CommonTDocumentPieceCollaboratifVersion The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTDocumentPieceCollaboratif(CommonTDocumentPieceCollaboratif $v = null)
    {
        if ($v === null) {
            $this->setIdPiece(NULL);
        } else {
            $this->setIdPiece($v->getIdDocumentPiece());
        }

        $this->aCommonTDocumentPieceCollaboratif = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTDocumentPieceCollaboratif object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTDocumentPieceCollaboratifVersion($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTDocumentPieceCollaboratif object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTDocumentPieceCollaboratif The associated CommonTDocumentPieceCollaboratif object.
     * @throws PropelException
     */
    public function getCommonTDocumentPieceCollaboratif(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTDocumentPieceCollaboratif === null && ($this->id_piece !== null) && $doQuery) {
            $this->aCommonTDocumentPieceCollaboratif = CommonTDocumentPieceCollaboratifQuery::create()->findPk($this->id_piece, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTDocumentPieceCollaboratif->addCommonTDocumentPieceCollaboratifVersions($this);
             */
        }

        return $this->aCommonTDocumentPieceCollaboratif;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_version_piece_document = null;
        $this->id_piece = null;
        $this->date_creation = null;
        $this->date_modification = null;
        $this->hash = null;
        $this->id_blob = null;
        $this->taille_piece = null;
        $this->extension_document = null;
        $this->version = null;
        $this->nom_agent = null;
        $this->prenom_agent = null;
        $this->nom_document = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
            if ($this->aCommonTDocumentPieceCollaboratif instanceof Persistent) {
              $this->aCommonTDocumentPieceCollaboratif->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonTDocumentPieceCollaboratif = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTDocumentPieceCollaboratifVersionPeer::DEFAULT_STRING_FORMAT);
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
