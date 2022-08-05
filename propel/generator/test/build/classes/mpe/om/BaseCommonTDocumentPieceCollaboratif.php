<?php


/**
 * Base class that represents a row from the 't_document_piece_collaboratif' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTDocumentPieceCollaboratif extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTDocumentPieceCollaboratifPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTDocumentPieceCollaboratifPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_document_piece field.
     * @var        int
     */
    protected $id_document_piece;

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
     * The value for the nom_piece field.
     * @var        string
     */
    protected $nom_piece;

    /**
     * The value for the titre_piece field.
     * @var        string
     */
    protected $titre_piece;

    /**
     * The value for the type_piece field.
     * @var        int
     */
    protected $type_piece;

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
     * The value for the id_derniere_version field.
     * @var        int
     */
    protected $id_derniere_version;

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
     * @var        CommonTTypePiece
     */
    protected $aCommonTTypePiece;

    /**
     * @var        PropelObjectCollection|CommonTDocumentPieceCollaboratifCommentaire[] Collection to store aggregation of CommonTDocumentPieceCollaboratifCommentaire objects.
     */
    protected $collCommonTDocumentPieceCollaboratifCommentaires;
    protected $collCommonTDocumentPieceCollaboratifCommentairesPartial;

    /**
     * @var        PropelObjectCollection|CommonTDocumentPieceCollaboratifVersion[] Collection to store aggregation of CommonTDocumentPieceCollaboratifVersion objects.
     */
    protected $collCommonTDocumentPieceCollaboratifVersions;
    protected $collCommonTDocumentPieceCollaboratifVersionsPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTDocumentPieceCollaboratifCommentairesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTDocumentPieceCollaboratifVersionsScheduledForDeletion = null;

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
     * Initializes internal state of BaseCommonTDocumentPieceCollaboratif object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_document_piece] column value.
     * 
     * @return int
     */
    public function getIdDocumentPiece()
    {

        return $this->id_document_piece;
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
     * Get the [nom_piece] column value.
     * 
     * @return string
     */
    public function getNomPiece()
    {

        return $this->nom_piece;
    }

    /**
     * Get the [titre_piece] column value.
     * 
     * @return string
     */
    public function getTitrePiece()
    {

        return $this->titre_piece;
    }

    /**
     * Get the [type_piece] column value.
     * 
     * @return int
     */
    public function getTypePiece()
    {

        return $this->type_piece;
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
     * Get the [id_derniere_version] column value.
     * 
     * @return int
     */
    public function getIdDerniereVersion()
    {

        return $this->id_derniere_version;
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
     * Set the value of [id_document_piece] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setIdDocumentPiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_document_piece !== $v) {
            $this->id_document_piece = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE;
        }


        return $this;
    } // setIdDocumentPiece()

    /**
     * Set the value of [id_document] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setIdDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_document !== $v) {
            $this->id_document = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT;
        }


        return $this;
    } // setIdDocument()

    /**
     * Set the value of [id_parapheur] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setIdParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_parapheur !== $v) {
            $this->id_parapheur = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::ID_PARAPHEUR;
        }


        return $this;
    } // setIdParapheur()

    /**
     * Set the value of [nom_piece] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setNomPiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_piece !== $v) {
            $this->nom_piece = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::NOM_PIECE;
        }


        return $this;
    } // setNomPiece()

    /**
     * Set the value of [titre_piece] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setTitrePiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->titre_piece !== $v) {
            $this->titre_piece = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::TITRE_PIECE;
        }


        return $this;
    } // setTitrePiece()

    /**
     * Set the value of [type_piece] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setTypePiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_piece !== $v) {
            $this->type_piece = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE;
        }

        if ($this->aCommonTTypePiece !== null && $this->aCommonTTypePiece->getId() !== $v) {
            $this->aCommonTTypePiece = null;
        }


        return $this;
    } // setTypePiece()

    /**
     * Set the value of [type_objet] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setTypeObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_objet !== $v) {
            $this->type_objet = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::TYPE_OBJET;
        }


        return $this;
    } // setTypeObjet()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [id_derniere_version] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setIdDerniereVersion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_derniere_version !== $v) {
            $this->id_derniere_version = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::ID_DERNIERE_VERSION;
        }


        return $this;
    } // setIdDerniereVersion()

    /**
     * Sets the value of [date_creation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_creation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_creation !== null && $tmpDt = new DateTime($this->date_creation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_creation = $newDateAsString;
                $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::DATE_CREATION;
            }
        } // if either are not null


        return $this;
    } // setDateCreation()

    /**
     * Sets the value of [date_modification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modification !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modification !== null && $tmpDt = new DateTime($this->date_modification)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modification = $newDateAsString;
                $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::DATE_MODIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDateModification()

    /**
     * Set the value of [id_createur] column.
     * 
     * @param int $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setIdCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_createur !== $v) {
            $this->id_createur = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::ID_CREATEUR;
        }


        return $this;
    } // setIdCreateur()

    /**
     * Set the value of [nom_createur] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setNomCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_createur !== $v) {
            $this->nom_createur = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::NOM_CREATEUR;
        }


        return $this;
    } // setNomCreateur()

    /**
     * Set the value of [prenom_createur] column.
     * 
     * @param string $v new value
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setPrenomCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_createur !== $v) {
            $this->prenom_createur = $v;
            $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::PRENOM_CREATEUR;
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

            $this->id_document_piece = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_document = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_parapheur = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->nom_piece = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->titre_piece = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->type_piece = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->type_objet = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->statut = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->id_derniere_version = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
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

            return $startcol + 14; // 14 = CommonTDocumentPieceCollaboratifPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTDocumentPieceCollaboratif object", $e);
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

        if ($this->aCommonTTypePiece !== null && $this->type_piece !== $this->aCommonTTypePiece->getId()) {
            $this->aCommonTTypePiece = null;
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTDocumentPieceCollaboratifPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonTTypePiece = null;
            $this->collCommonTDocumentPieceCollaboratifCommentaires = null;

            $this->collCommonTDocumentPieceCollaboratifVersions = null;

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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTDocumentPieceCollaboratifQuery::create()
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTDocumentPieceCollaboratifPeer::addInstanceToPool($this);
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

            if ($this->aCommonTTypePiece !== null) {
                if ($this->aCommonTTypePiece->isModified() || $this->aCommonTTypePiece->isNew()) {
                    $affectedRows += $this->aCommonTTypePiece->save($con);
                }
                $this->setCommonTTypePiece($this->aCommonTTypePiece);
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

            if ($this->commonTDocumentPieceCollaboratifCommentairesScheduledForDeletion !== null) {
                if (!$this->commonTDocumentPieceCollaboratifCommentairesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTDocumentPieceCollaboratifCommentairesScheduledForDeletion as $commonTDocumentPieceCollaboratifCommentaire) {
                        // need to save related object because we set the relation to null
                        $commonTDocumentPieceCollaboratifCommentaire->save($con);
                    }
                    $this->commonTDocumentPieceCollaboratifCommentairesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTDocumentPieceCollaboratifCommentaires !== null) {
                foreach ($this->collCommonTDocumentPieceCollaboratifCommentaires as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTDocumentPieceCollaboratifVersionsScheduledForDeletion !== null) {
                if (!$this->commonTDocumentPieceCollaboratifVersionsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTDocumentPieceCollaboratifVersionsScheduledForDeletion as $commonTDocumentPieceCollaboratifVersion) {
                        // need to save related object because we set the relation to null
                        $commonTDocumentPieceCollaboratifVersion->save($con);
                    }
                    $this->commonTDocumentPieceCollaboratifVersionsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTDocumentPieceCollaboratifVersions !== null) {
                foreach ($this->collCommonTDocumentPieceCollaboratifVersions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE;
        if (null !== $this->id_document_piece) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`id_document_piece`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_document`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::ID_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_parapheur`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::NOM_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_piece`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::TITRE_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`titre_piece`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`type_piece`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::TYPE_OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`type_objet`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::ID_DERNIERE_VERSION)) {
            $modifiedColumns[':p' . $index++]  = '`id_derniere_version`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::ID_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_createur`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::NOM_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`nom_createur`';
        }
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::PRENOM_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_createur`';
        }

        $sql = sprintf(
            'INSERT INTO `t_document_piece_collaboratif` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_document_piece`':						
                        $stmt->bindValue($identifier, $this->id_document_piece, PDO::PARAM_INT);
                        break;
                    case '`id_document`':						
                        $stmt->bindValue($identifier, $this->id_document, PDO::PARAM_INT);
                        break;
                    case '`id_parapheur`':						
                        $stmt->bindValue($identifier, $this->id_parapheur, PDO::PARAM_INT);
                        break;
                    case '`nom_piece`':						
                        $stmt->bindValue($identifier, $this->nom_piece, PDO::PARAM_STR);
                        break;
                    case '`titre_piece`':						
                        $stmt->bindValue($identifier, $this->titre_piece, PDO::PARAM_STR);
                        break;
                    case '`type_piece`':						
                        $stmt->bindValue($identifier, $this->type_piece, PDO::PARAM_INT);
                        break;
                    case '`type_objet`':						
                        $stmt->bindValue($identifier, $this->type_objet, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`id_derniere_version`':						
                        $stmt->bindValue($identifier, $this->id_derniere_version, PDO::PARAM_INT);
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
        $this->setIdDocumentPiece($pk);

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

            if ($this->aCommonTTypePiece !== null) {
                if (!$this->aCommonTTypePiece->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTTypePiece->getValidationFailures());
                }
            }


            if (($retval = CommonTDocumentPieceCollaboratifPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTDocumentPieceCollaboratifCommentaires !== null) {
                    foreach ($this->collCommonTDocumentPieceCollaboratifCommentaires as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTDocumentPieceCollaboratifVersions !== null) {
                    foreach ($this->collCommonTDocumentPieceCollaboratifVersions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = CommonTDocumentPieceCollaboratifPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDocumentPiece();
                break;
            case 1:
                return $this->getIdDocument();
                break;
            case 2:
                return $this->getIdParapheur();
                break;
            case 3:
                return $this->getNomPiece();
                break;
            case 4:
                return $this->getTitrePiece();
                break;
            case 5:
                return $this->getTypePiece();
                break;
            case 6:
                return $this->getTypeObjet();
                break;
            case 7:
                return $this->getStatut();
                break;
            case 8:
                return $this->getIdDerniereVersion();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['CommonTDocumentPieceCollaboratif'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTDocumentPieceCollaboratif'][$this->getPrimaryKey()] = true;
        $keys = CommonTDocumentPieceCollaboratifPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdDocumentPiece(),
            $keys[1] => $this->getIdDocument(),
            $keys[2] => $this->getIdParapheur(),
            $keys[3] => $this->getNomPiece(),
            $keys[4] => $this->getTitrePiece(),
            $keys[5] => $this->getTypePiece(),
            $keys[6] => $this->getTypeObjet(),
            $keys[7] => $this->getStatut(),
            $keys[8] => $this->getIdDerniereVersion(),
            $keys[9] => $this->getDateCreation(),
            $keys[10] => $this->getDateModification(),
            $keys[11] => $this->getIdCreateur(),
            $keys[12] => $this->getNomCreateur(),
            $keys[13] => $this->getPrenomCreateur(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonTTypePiece) {
                $result['CommonTTypePiece'] = $this->aCommonTTypePiece->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonTDocumentPieceCollaboratifCommentaires) {
                $result['CommonTDocumentPieceCollaboratifCommentaires'] = $this->collCommonTDocumentPieceCollaboratifCommentaires->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTDocumentPieceCollaboratifVersions) {
                $result['CommonTDocumentPieceCollaboratifVersions'] = $this->collCommonTDocumentPieceCollaboratifVersions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTDocumentPieceCollaboratifPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDocumentPiece($value);
                break;
            case 1:
                $this->setIdDocument($value);
                break;
            case 2:
                $this->setIdParapheur($value);
                break;
            case 3:
                $this->setNomPiece($value);
                break;
            case 4:
                $this->setTitrePiece($value);
                break;
            case 5:
                $this->setTypePiece($value);
                break;
            case 6:
                $this->setTypeObjet($value);
                break;
            case 7:
                $this->setStatut($value);
                break;
            case 8:
                $this->setIdDerniereVersion($value);
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
        $keys = CommonTDocumentPieceCollaboratifPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdDocumentPiece($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdDocument($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdParapheur($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNomPiece($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTitrePiece($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTypePiece($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTypeObjet($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStatut($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdDerniereVersion($arr[$keys[8]]);
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
        $criteria = new Criteria(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $this->id_document_piece);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT, $this->id_document);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::ID_PARAPHEUR)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::ID_PARAPHEUR, $this->id_parapheur);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::NOM_PIECE)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::NOM_PIECE, $this->nom_piece);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::TITRE_PIECE)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::TITRE_PIECE, $this->titre_piece);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, $this->type_piece);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::TYPE_OBJET)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::TYPE_OBJET, $this->type_objet);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::STATUT)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::ID_DERNIERE_VERSION)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::ID_DERNIERE_VERSION, $this->id_derniere_version);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::DATE_CREATION)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::DATE_MODIFICATION)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::ID_CREATEUR)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::ID_CREATEUR, $this->id_createur);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::NOM_CREATEUR)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::NOM_CREATEUR, $this->nom_createur);
        if ($this->isColumnModified(CommonTDocumentPieceCollaboratifPeer::PRENOM_CREATEUR)) $criteria->add(CommonTDocumentPieceCollaboratifPeer::PRENOM_CREATEUR, $this->prenom_createur);

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
        $criteria = new Criteria(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);
        $criteria->add(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $this->id_document_piece);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdDocumentPiece();
    }

    /**
     * Generic method to set the primary key (id_document_piece column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdDocumentPiece($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdDocumentPiece();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTDocumentPieceCollaboratif (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdDocument($this->getIdDocument());
        $copyObj->setIdParapheur($this->getIdParapheur());
        $copyObj->setNomPiece($this->getNomPiece());
        $copyObj->setTitrePiece($this->getTitrePiece());
        $copyObj->setTypePiece($this->getTypePiece());
        $copyObj->setTypeObjet($this->getTypeObjet());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setIdDerniereVersion($this->getIdDerniereVersion());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setIdCreateur($this->getIdCreateur());
        $copyObj->setNomCreateur($this->getNomCreateur());
        $copyObj->setPrenomCreateur($this->getPrenomCreateur());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTDocumentPieceCollaboratifCommentaires() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTDocumentPieceCollaboratifCommentaire($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTDocumentPieceCollaboratifVersions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTDocumentPieceCollaboratifVersion($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdDocumentPiece(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTDocumentPieceCollaboratif Clone of current object.
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
     * @return CommonTDocumentPieceCollaboratifPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTDocumentPieceCollaboratifPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonTTypePiece object.
     *
     * @param   CommonTTypePiece $v
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTTypePiece(CommonTTypePiece $v = null)
    {
        if ($v === null) {
            $this->setTypePiece(NULL);
        } else {
            $this->setTypePiece($v->getId());
        }

        $this->aCommonTTypePiece = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTTypePiece object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTDocumentPieceCollaboratif($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTTypePiece object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTTypePiece The associated CommonTTypePiece object.
     * @throws PropelException
     */
    public function getCommonTTypePiece(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTTypePiece === null && ($this->type_piece !== null) && $doQuery) {
            $this->aCommonTTypePiece = CommonTTypePieceQuery::create()->findPk($this->type_piece, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTTypePiece->addCommonTDocumentPieceCollaboratifs($this);
             */
        }

        return $this->aCommonTTypePiece;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CommonTDocumentPieceCollaboratifCommentaire' == $relationName) {
            $this->initCommonTDocumentPieceCollaboratifCommentaires();
        }
        if ('CommonTDocumentPieceCollaboratifVersion' == $relationName) {
            $this->initCommonTDocumentPieceCollaboratifVersions();
        }
    }

    /**
     * Clears out the collCommonTDocumentPieceCollaboratifCommentaires collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     * @see        addCommonTDocumentPieceCollaboratifCommentaires()
     */
    public function clearCommonTDocumentPieceCollaboratifCommentaires()
    {
        $this->collCommonTDocumentPieceCollaboratifCommentaires = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTDocumentPieceCollaboratifCommentairesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTDocumentPieceCollaboratifCommentaires collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTDocumentPieceCollaboratifCommentaires($v = true)
    {
        $this->collCommonTDocumentPieceCollaboratifCommentairesPartial = $v;
    }

    /**
     * Initializes the collCommonTDocumentPieceCollaboratifCommentaires collection.
     *
     * By default this just sets the collCommonTDocumentPieceCollaboratifCommentaires collection to an empty array (like clearcollCommonTDocumentPieceCollaboratifCommentaires());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTDocumentPieceCollaboratifCommentaires($overrideExisting = true)
    {
        if (null !== $this->collCommonTDocumentPieceCollaboratifCommentaires && !$overrideExisting) {
            return;
        }
        $this->collCommonTDocumentPieceCollaboratifCommentaires = new PropelObjectCollection();
        $this->collCommonTDocumentPieceCollaboratifCommentaires->setModel('CommonTDocumentPieceCollaboratifCommentaire');
    }

    /**
     * Gets an array of CommonTDocumentPieceCollaboratifCommentaire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTDocumentPieceCollaboratif is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTDocumentPieceCollaboratifCommentaire[] List of CommonTDocumentPieceCollaboratifCommentaire objects
     * @throws PropelException
     */
    public function getCommonTDocumentPieceCollaboratifCommentaires($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTDocumentPieceCollaboratifCommentairesPartial && !$this->isNew();
        if (null === $this->collCommonTDocumentPieceCollaboratifCommentaires || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTDocumentPieceCollaboratifCommentaires) {
                // return empty collection
                $this->initCommonTDocumentPieceCollaboratifCommentaires();
            } else {
                $collCommonTDocumentPieceCollaboratifCommentaires = CommonTDocumentPieceCollaboratifCommentaireQuery::create(null, $criteria)
                    ->filterByCommonTDocumentPieceCollaboratif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTDocumentPieceCollaboratifCommentairesPartial && count($collCommonTDocumentPieceCollaboratifCommentaires)) {
                      $this->initCommonTDocumentPieceCollaboratifCommentaires(false);

                      foreach ($collCommonTDocumentPieceCollaboratifCommentaires as $obj) {
                        if (false == $this->collCommonTDocumentPieceCollaboratifCommentaires->contains($obj)) {
                          $this->collCommonTDocumentPieceCollaboratifCommentaires->append($obj);
                        }
                      }

                      $this->collCommonTDocumentPieceCollaboratifCommentairesPartial = true;
                    }

                    $collCommonTDocumentPieceCollaboratifCommentaires->getInternalIterator()->rewind();

                    return $collCommonTDocumentPieceCollaboratifCommentaires;
                }

                if ($partial && $this->collCommonTDocumentPieceCollaboratifCommentaires) {
                    foreach ($this->collCommonTDocumentPieceCollaboratifCommentaires as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTDocumentPieceCollaboratifCommentaires[] = $obj;
                        }
                    }
                }

                $this->collCommonTDocumentPieceCollaboratifCommentaires = $collCommonTDocumentPieceCollaboratifCommentaires;
                $this->collCommonTDocumentPieceCollaboratifCommentairesPartial = false;
            }
        }

        return $this->collCommonTDocumentPieceCollaboratifCommentaires;
    }

    /**
     * Sets a collection of CommonTDocumentPieceCollaboratifCommentaire objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTDocumentPieceCollaboratifCommentaires A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setCommonTDocumentPieceCollaboratifCommentaires(PropelCollection $commonTDocumentPieceCollaboratifCommentaires, PropelPDO $con = null)
    {
        $commonTDocumentPieceCollaboratifCommentairesToDelete = $this->getCommonTDocumentPieceCollaboratifCommentaires(new Criteria(), $con)->diff($commonTDocumentPieceCollaboratifCommentaires);


        $this->commonTDocumentPieceCollaboratifCommentairesScheduledForDeletion = $commonTDocumentPieceCollaboratifCommentairesToDelete;

        foreach ($commonTDocumentPieceCollaboratifCommentairesToDelete as $commonTDocumentPieceCollaboratifCommentaireRemoved) {
            $commonTDocumentPieceCollaboratifCommentaireRemoved->setCommonTDocumentPieceCollaboratif(null);
        }

        $this->collCommonTDocumentPieceCollaboratifCommentaires = null;
        foreach ($commonTDocumentPieceCollaboratifCommentaires as $commonTDocumentPieceCollaboratifCommentaire) {
            $this->addCommonTDocumentPieceCollaboratifCommentaire($commonTDocumentPieceCollaboratifCommentaire);
        }

        $this->collCommonTDocumentPieceCollaboratifCommentaires = $commonTDocumentPieceCollaboratifCommentaires;
        $this->collCommonTDocumentPieceCollaboratifCommentairesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTDocumentPieceCollaboratifCommentaire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTDocumentPieceCollaboratifCommentaire objects.
     * @throws PropelException
     */
    public function countCommonTDocumentPieceCollaboratifCommentaires(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTDocumentPieceCollaboratifCommentairesPartial && !$this->isNew();
        if (null === $this->collCommonTDocumentPieceCollaboratifCommentaires || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTDocumentPieceCollaboratifCommentaires) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTDocumentPieceCollaboratifCommentaires());
            }
            $query = CommonTDocumentPieceCollaboratifCommentaireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTDocumentPieceCollaboratif($this)
                ->count($con);
        }

        return count($this->collCommonTDocumentPieceCollaboratifCommentaires);
    }

    /**
     * Method called to associate a CommonTDocumentPieceCollaboratifCommentaire object to this object
     * through the CommonTDocumentPieceCollaboratifCommentaire foreign key attribute.
     *
     * @param   CommonTDocumentPieceCollaboratifCommentaire $l CommonTDocumentPieceCollaboratifCommentaire
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function addCommonTDocumentPieceCollaboratifCommentaire(CommonTDocumentPieceCollaboratifCommentaire $l)
    {
        if ($this->collCommonTDocumentPieceCollaboratifCommentaires === null) {
            $this->initCommonTDocumentPieceCollaboratifCommentaires();
            $this->collCommonTDocumentPieceCollaboratifCommentairesPartial = true;
        }
        if (!in_array($l, $this->collCommonTDocumentPieceCollaboratifCommentaires->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTDocumentPieceCollaboratifCommentaire($l);
        }

        return $this;
    }

    /**
     * @param	CommonTDocumentPieceCollaboratifCommentaire $commonTDocumentPieceCollaboratifCommentaire The commonTDocumentPieceCollaboratifCommentaire object to add.
     */
    protected function doAddCommonTDocumentPieceCollaboratifCommentaire($commonTDocumentPieceCollaboratifCommentaire)
    {
        $this->collCommonTDocumentPieceCollaboratifCommentaires[]= $commonTDocumentPieceCollaboratifCommentaire;
        $commonTDocumentPieceCollaboratifCommentaire->setCommonTDocumentPieceCollaboratif($this);
    }

    /**
     * @param	CommonTDocumentPieceCollaboratifCommentaire $commonTDocumentPieceCollaboratifCommentaire The commonTDocumentPieceCollaboratifCommentaire object to remove.
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function removeCommonTDocumentPieceCollaboratifCommentaire($commonTDocumentPieceCollaboratifCommentaire)
    {
        if ($this->getCommonTDocumentPieceCollaboratifCommentaires()->contains($commonTDocumentPieceCollaboratifCommentaire)) {
            $this->collCommonTDocumentPieceCollaboratifCommentaires->remove($this->collCommonTDocumentPieceCollaboratifCommentaires->search($commonTDocumentPieceCollaboratifCommentaire));
            if (null === $this->commonTDocumentPieceCollaboratifCommentairesScheduledForDeletion) {
                $this->commonTDocumentPieceCollaboratifCommentairesScheduledForDeletion = clone $this->collCommonTDocumentPieceCollaboratifCommentaires;
                $this->commonTDocumentPieceCollaboratifCommentairesScheduledForDeletion->clear();
            }
            $this->commonTDocumentPieceCollaboratifCommentairesScheduledForDeletion[]= clone $commonTDocumentPieceCollaboratifCommentaire;
            $commonTDocumentPieceCollaboratifCommentaire->setCommonTDocumentPieceCollaboratif(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonTDocumentPieceCollaboratifVersions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     * @see        addCommonTDocumentPieceCollaboratifVersions()
     */
    public function clearCommonTDocumentPieceCollaboratifVersions()
    {
        $this->collCommonTDocumentPieceCollaboratifVersions = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTDocumentPieceCollaboratifVersionsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTDocumentPieceCollaboratifVersions collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTDocumentPieceCollaboratifVersions($v = true)
    {
        $this->collCommonTDocumentPieceCollaboratifVersionsPartial = $v;
    }

    /**
     * Initializes the collCommonTDocumentPieceCollaboratifVersions collection.
     *
     * By default this just sets the collCommonTDocumentPieceCollaboratifVersions collection to an empty array (like clearcollCommonTDocumentPieceCollaboratifVersions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTDocumentPieceCollaboratifVersions($overrideExisting = true)
    {
        if (null !== $this->collCommonTDocumentPieceCollaboratifVersions && !$overrideExisting) {
            return;
        }
        $this->collCommonTDocumentPieceCollaboratifVersions = new PropelObjectCollection();
        $this->collCommonTDocumentPieceCollaboratifVersions->setModel('CommonTDocumentPieceCollaboratifVersion');
    }

    /**
     * Gets an array of CommonTDocumentPieceCollaboratifVersion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTDocumentPieceCollaboratif is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTDocumentPieceCollaboratifVersion[] List of CommonTDocumentPieceCollaboratifVersion objects
     * @throws PropelException
     */
    public function getCommonTDocumentPieceCollaboratifVersions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTDocumentPieceCollaboratifVersionsPartial && !$this->isNew();
        if (null === $this->collCommonTDocumentPieceCollaboratifVersions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTDocumentPieceCollaboratifVersions) {
                // return empty collection
                $this->initCommonTDocumentPieceCollaboratifVersions();
            } else {
                $collCommonTDocumentPieceCollaboratifVersions = CommonTDocumentPieceCollaboratifVersionQuery::create(null, $criteria)
                    ->filterByCommonTDocumentPieceCollaboratif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTDocumentPieceCollaboratifVersionsPartial && count($collCommonTDocumentPieceCollaboratifVersions)) {
                      $this->initCommonTDocumentPieceCollaboratifVersions(false);

                      foreach ($collCommonTDocumentPieceCollaboratifVersions as $obj) {
                        if (false == $this->collCommonTDocumentPieceCollaboratifVersions->contains($obj)) {
                          $this->collCommonTDocumentPieceCollaboratifVersions->append($obj);
                        }
                      }

                      $this->collCommonTDocumentPieceCollaboratifVersionsPartial = true;
                    }

                    $collCommonTDocumentPieceCollaboratifVersions->getInternalIterator()->rewind();

                    return $collCommonTDocumentPieceCollaboratifVersions;
                }

                if ($partial && $this->collCommonTDocumentPieceCollaboratifVersions) {
                    foreach ($this->collCommonTDocumentPieceCollaboratifVersions as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTDocumentPieceCollaboratifVersions[] = $obj;
                        }
                    }
                }

                $this->collCommonTDocumentPieceCollaboratifVersions = $collCommonTDocumentPieceCollaboratifVersions;
                $this->collCommonTDocumentPieceCollaboratifVersionsPartial = false;
            }
        }

        return $this->collCommonTDocumentPieceCollaboratifVersions;
    }

    /**
     * Sets a collection of CommonTDocumentPieceCollaboratifVersion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTDocumentPieceCollaboratifVersions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function setCommonTDocumentPieceCollaboratifVersions(PropelCollection $commonTDocumentPieceCollaboratifVersions, PropelPDO $con = null)
    {
        $commonTDocumentPieceCollaboratifVersionsToDelete = $this->getCommonTDocumentPieceCollaboratifVersions(new Criteria(), $con)->diff($commonTDocumentPieceCollaboratifVersions);


        $this->commonTDocumentPieceCollaboratifVersionsScheduledForDeletion = $commonTDocumentPieceCollaboratifVersionsToDelete;

        foreach ($commonTDocumentPieceCollaboratifVersionsToDelete as $commonTDocumentPieceCollaboratifVersionRemoved) {
            $commonTDocumentPieceCollaboratifVersionRemoved->setCommonTDocumentPieceCollaboratif(null);
        }

        $this->collCommonTDocumentPieceCollaboratifVersions = null;
        foreach ($commonTDocumentPieceCollaboratifVersions as $commonTDocumentPieceCollaboratifVersion) {
            $this->addCommonTDocumentPieceCollaboratifVersion($commonTDocumentPieceCollaboratifVersion);
        }

        $this->collCommonTDocumentPieceCollaboratifVersions = $commonTDocumentPieceCollaboratifVersions;
        $this->collCommonTDocumentPieceCollaboratifVersionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTDocumentPieceCollaboratifVersion objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTDocumentPieceCollaboratifVersion objects.
     * @throws PropelException
     */
    public function countCommonTDocumentPieceCollaboratifVersions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTDocumentPieceCollaboratifVersionsPartial && !$this->isNew();
        if (null === $this->collCommonTDocumentPieceCollaboratifVersions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTDocumentPieceCollaboratifVersions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTDocumentPieceCollaboratifVersions());
            }
            $query = CommonTDocumentPieceCollaboratifVersionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTDocumentPieceCollaboratif($this)
                ->count($con);
        }

        return count($this->collCommonTDocumentPieceCollaboratifVersions);
    }

    /**
     * Method called to associate a CommonTDocumentPieceCollaboratifVersion object to this object
     * through the CommonTDocumentPieceCollaboratifVersion foreign key attribute.
     *
     * @param   CommonTDocumentPieceCollaboratifVersion $l CommonTDocumentPieceCollaboratifVersion
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function addCommonTDocumentPieceCollaboratifVersion(CommonTDocumentPieceCollaboratifVersion $l)
    {
        if ($this->collCommonTDocumentPieceCollaboratifVersions === null) {
            $this->initCommonTDocumentPieceCollaboratifVersions();
            $this->collCommonTDocumentPieceCollaboratifVersionsPartial = true;
        }
        if (!in_array($l, $this->collCommonTDocumentPieceCollaboratifVersions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTDocumentPieceCollaboratifVersion($l);
        }

        return $this;
    }

    /**
     * @param	CommonTDocumentPieceCollaboratifVersion $commonTDocumentPieceCollaboratifVersion The commonTDocumentPieceCollaboratifVersion object to add.
     */
    protected function doAddCommonTDocumentPieceCollaboratifVersion($commonTDocumentPieceCollaboratifVersion)
    {
        $this->collCommonTDocumentPieceCollaboratifVersions[]= $commonTDocumentPieceCollaboratifVersion;
        $commonTDocumentPieceCollaboratifVersion->setCommonTDocumentPieceCollaboratif($this);
    }

    /**
     * @param	CommonTDocumentPieceCollaboratifVersion $commonTDocumentPieceCollaboratifVersion The commonTDocumentPieceCollaboratifVersion object to remove.
     * @return CommonTDocumentPieceCollaboratif The current object (for fluent API support)
     */
    public function removeCommonTDocumentPieceCollaboratifVersion($commonTDocumentPieceCollaboratifVersion)
    {
        if ($this->getCommonTDocumentPieceCollaboratifVersions()->contains($commonTDocumentPieceCollaboratifVersion)) {
            $this->collCommonTDocumentPieceCollaboratifVersions->remove($this->collCommonTDocumentPieceCollaboratifVersions->search($commonTDocumentPieceCollaboratifVersion));
            if (null === $this->commonTDocumentPieceCollaboratifVersionsScheduledForDeletion) {
                $this->commonTDocumentPieceCollaboratifVersionsScheduledForDeletion = clone $this->collCommonTDocumentPieceCollaboratifVersions;
                $this->commonTDocumentPieceCollaboratifVersionsScheduledForDeletion->clear();
            }
            $this->commonTDocumentPieceCollaboratifVersionsScheduledForDeletion[]= clone $commonTDocumentPieceCollaboratifVersion;
            $commonTDocumentPieceCollaboratifVersion->setCommonTDocumentPieceCollaboratif(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_document_piece = null;
        $this->id_document = null;
        $this->id_parapheur = null;
        $this->nom_piece = null;
        $this->titre_piece = null;
        $this->type_piece = null;
        $this->type_objet = null;
        $this->statut = null;
        $this->id_derniere_version = null;
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
            if ($this->collCommonTDocumentPieceCollaboratifCommentaires) {
                foreach ($this->collCommonTDocumentPieceCollaboratifCommentaires as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTDocumentPieceCollaboratifVersions) {
                foreach ($this->collCommonTDocumentPieceCollaboratifVersions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonTTypePiece instanceof Persistent) {
              $this->aCommonTTypePiece->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTDocumentPieceCollaboratifCommentaires instanceof PropelCollection) {
            $this->collCommonTDocumentPieceCollaboratifCommentaires->clearIterator();
        }
        $this->collCommonTDocumentPieceCollaboratifCommentaires = null;
        if ($this->collCommonTDocumentPieceCollaboratifVersions instanceof PropelCollection) {
            $this->collCommonTDocumentPieceCollaboratifVersions->clearIterator();
        }
        $this->collCommonTDocumentPieceCollaboratifVersions = null;
        $this->aCommonTTypePiece = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTDocumentPieceCollaboratifPeer::DEFAULT_STRING_FORMAT);
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
