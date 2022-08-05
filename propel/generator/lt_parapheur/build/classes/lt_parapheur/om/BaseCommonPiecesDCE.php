<?php


/**
 * Base class that represents a row from the 'Pieces_DCE' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPiecesDCE extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonPiecesDCEPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonPiecesDCEPeer
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
     * The value for the nom_piece field.
     * @var        string
     */
    protected $nom_piece;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

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
     * The value for the document_redac field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $document_redac;

    /**
     * The value for the id_redac field.
     * @var        int
     */
    protected $id_redac;

    /**
     * The value for the statut field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $statut;

    /**
     * The value for the type_piece field.
     * @var        string
     */
    protected $type_piece;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultationRelatedByRefConsultation;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultationRelatedByOrganismeConsultation;

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
        $this->document_redac = '0';
        $this->statut = 0;
    }

    /**
     * Initializes internal state of BaseCommonPiecesDCE object.
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
     * Get the [nom_piece] column value.
     * 
     * @return string
     */
    public function getNomPiece()
    {

        return $this->nom_piece;
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
     * Get the [document_redac] column value.
     * 
     * @return string
     */
    public function getDocumentRedac()
    {

        return $this->document_redac;
    }

    /**
     * Get the [id_redac] column value.
     * 
     * @return int
     */
    public function getIdRedac()
    {

        return $this->id_redac;
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
     * Get the [type_piece] column value.
     * 
     * @return string
     */
    public function getTypePiece()
    {

        return $this->type_piece;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonPiecesDCE The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonPiecesDCEPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [nom_piece] column.
     * 
     * @param string $v new value
     * @return CommonPiecesDCE The current object (for fluent API support)
     */
    public function setNomPiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_piece !== $v) {
            $this->nom_piece = $v;
            $this->modifiedColumns[] = CommonPiecesDCEPeer::NOM_PIECE;
        }


        return $this;
    } // setNomPiece()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonPiecesDCE The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonPiecesDCEPeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [ref_consultation] column.
     * 
     * @param int $v new value
     * @return CommonPiecesDCE The current object (for fluent API support)
     */
    public function setRefConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ref_consultation !== $v) {
            $this->ref_consultation = $v;
            $this->modifiedColumns[] = CommonPiecesDCEPeer::REF_CONSULTATION;
        }

        if ($this->aCommonConsultationRelatedByRefConsultation !== null && $this->aCommonConsultationRelatedByRefConsultation->getReference() !== $v) {
            $this->aCommonConsultationRelatedByRefConsultation = null;
        }


        return $this;
    } // setRefConsultation()

    /**
     * Set the value of [organisme_consultation] column.
     * 
     * @param string $v new value
     * @return CommonPiecesDCE The current object (for fluent API support)
     */
    public function setOrganismeConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme_consultation !== $v) {
            $this->organisme_consultation = $v;
            $this->modifiedColumns[] = CommonPiecesDCEPeer::ORGANISME_CONSULTATION;
        }

        if ($this->aCommonConsultationRelatedByOrganismeConsultation !== null && $this->aCommonConsultationRelatedByOrganismeConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultationRelatedByOrganismeConsultation = null;
        }


        return $this;
    } // setOrganismeConsultation()

    /**
     * Set the value of [document_redac] column.
     * 
     * @param string $v new value
     * @return CommonPiecesDCE The current object (for fluent API support)
     */
    public function setDocumentRedac($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->document_redac !== $v) {
            $this->document_redac = $v;
            $this->modifiedColumns[] = CommonPiecesDCEPeer::DOCUMENT_REDAC;
        }


        return $this;
    } // setDocumentRedac()

    /**
     * Set the value of [id_redac] column.
     * 
     * @param int $v new value
     * @return CommonPiecesDCE The current object (for fluent API support)
     */
    public function setIdRedac($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_redac !== $v) {
            $this->id_redac = $v;
            $this->modifiedColumns[] = CommonPiecesDCEPeer::ID_REDAC;
        }


        return $this;
    } // setIdRedac()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonPiecesDCE The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonPiecesDCEPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [type_piece] column.
     * 
     * @param string $v new value
     * @return CommonPiecesDCE The current object (for fluent API support)
     */
    public function setTypePiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_piece !== $v) {
            $this->type_piece = $v;
            $this->modifiedColumns[] = CommonPiecesDCEPeer::TYPE_PIECE;
        }


        return $this;
    } // setTypePiece()

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
            if ($this->document_redac !== '0') {
                return false;
            }

            if ($this->statut !== 0) {
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
            $this->nom_piece = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_blob = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->ref_consultation = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->organisme_consultation = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->document_redac = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->id_redac = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->statut = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->type_piece = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = CommonPiecesDCEPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonPiecesDCE object", $e);
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

        if ($this->aCommonConsultationRelatedByRefConsultation !== null && $this->ref_consultation !== $this->aCommonConsultationRelatedByRefConsultation->getReference()) {
            $this->aCommonConsultationRelatedByRefConsultation = null;
        }
        if ($this->aCommonConsultationRelatedByOrganismeConsultation !== null && $this->organisme_consultation !== $this->aCommonConsultationRelatedByOrganismeConsultation->getOrganisme()) {
            $this->aCommonConsultationRelatedByOrganismeConsultation = null;
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
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonPiecesDCEPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultationRelatedByRefConsultation = null;
            $this->aCommonConsultationRelatedByOrganismeConsultation = null;
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
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonPiecesDCEQuery::create()
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
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonPiecesDCEPeer::addInstanceToPool($this);
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

            if ($this->aCommonConsultationRelatedByRefConsultation !== null) {
                if ($this->aCommonConsultationRelatedByRefConsultation->isModified() || $this->aCommonConsultationRelatedByRefConsultation->isNew()) {
                    $affectedRows += $this->aCommonConsultationRelatedByRefConsultation->save($con);
                }
                $this->setCommonConsultationRelatedByRefConsultation($this->aCommonConsultationRelatedByRefConsultation);
            }

            if ($this->aCommonConsultationRelatedByOrganismeConsultation !== null) {
                if ($this->aCommonConsultationRelatedByOrganismeConsultation->isModified() || $this->aCommonConsultationRelatedByOrganismeConsultation->isNew()) {
                    $affectedRows += $this->aCommonConsultationRelatedByOrganismeConsultation->save($con);
                }
                $this->setCommonConsultationRelatedByOrganismeConsultation($this->aCommonConsultationRelatedByOrganismeConsultation);
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

        $this->modifiedColumns[] = CommonPiecesDCEPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonPiecesDCEPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonPiecesDCEPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonPiecesDCEPeer::NOM_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_Piece`';
        }
        if ($this->isColumnModified(CommonPiecesDCEPeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob`';
        }
        if ($this->isColumnModified(CommonPiecesDCEPeer::REF_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`ref_consultation`';
        }
        if ($this->isColumnModified(CommonPiecesDCEPeer::ORGANISME_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`organisme_consultation`';
        }
        if ($this->isColumnModified(CommonPiecesDCEPeer::DOCUMENT_REDAC)) {
            $modifiedColumns[':p' . $index++]  = '`document_Redac`';
        }
        if ($this->isColumnModified(CommonPiecesDCEPeer::ID_REDAC)) {
            $modifiedColumns[':p' . $index++]  = '`id_Redac`';
        }
        if ($this->isColumnModified(CommonPiecesDCEPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonPiecesDCEPeer::TYPE_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`Type_Piece`';
        }

        $sql = sprintf(
            'INSERT INTO `Pieces_DCE` (%s) VALUES (%s)',
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
                    case '`nom_Piece`':						
                        $stmt->bindValue($identifier, $this->nom_piece, PDO::PARAM_STR);
                        break;
                    case '`id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`ref_consultation`':						
                        $stmt->bindValue($identifier, $this->ref_consultation, PDO::PARAM_INT);
                        break;
                    case '`organisme_consultation`':						
                        $stmt->bindValue($identifier, $this->organisme_consultation, PDO::PARAM_STR);
                        break;
                    case '`document_Redac`':						
                        $stmt->bindValue($identifier, $this->document_redac, PDO::PARAM_STR);
                        break;
                    case '`id_Redac`':						
                        $stmt->bindValue($identifier, $this->id_redac, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`Type_Piece`':						
                        $stmt->bindValue($identifier, $this->type_piece, PDO::PARAM_STR);
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

            if ($this->aCommonConsultationRelatedByRefConsultation !== null) {
                if (!$this->aCommonConsultationRelatedByRefConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultationRelatedByRefConsultation->getValidationFailures());
                }
            }

            if ($this->aCommonConsultationRelatedByOrganismeConsultation !== null) {
                if (!$this->aCommonConsultationRelatedByOrganismeConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultationRelatedByOrganismeConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonPiecesDCEPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonPiecesDCEPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNomPiece();
                break;
            case 2:
                return $this->getIdBlob();
                break;
            case 3:
                return $this->getRefConsultation();
                break;
            case 4:
                return $this->getOrganismeConsultation();
                break;
            case 5:
                return $this->getDocumentRedac();
                break;
            case 6:
                return $this->getIdRedac();
                break;
            case 7:
                return $this->getStatut();
                break;
            case 8:
                return $this->getTypePiece();
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
        if (isset($alreadyDumpedObjects['CommonPiecesDCE'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonPiecesDCE'][$this->getPrimaryKey()] = true;
        $keys = CommonPiecesDCEPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNomPiece(),
            $keys[2] => $this->getIdBlob(),
            $keys[3] => $this->getRefConsultation(),
            $keys[4] => $this->getOrganismeConsultation(),
            $keys[5] => $this->getDocumentRedac(),
            $keys[6] => $this->getIdRedac(),
            $keys[7] => $this->getStatut(),
            $keys[8] => $this->getTypePiece(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultationRelatedByRefConsultation) {
                $result['CommonConsultationRelatedByRefConsultation'] = $this->aCommonConsultationRelatedByRefConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonConsultationRelatedByOrganismeConsultation) {
                $result['CommonConsultationRelatedByOrganismeConsultation'] = $this->aCommonConsultationRelatedByOrganismeConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonPiecesDCEPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNomPiece($value);
                break;
            case 2:
                $this->setIdBlob($value);
                break;
            case 3:
                $this->setRefConsultation($value);
                break;
            case 4:
                $this->setOrganismeConsultation($value);
                break;
            case 5:
                $this->setDocumentRedac($value);
                break;
            case 6:
                $this->setIdRedac($value);
                break;
            case 7:
                $this->setStatut($value);
                break;
            case 8:
                $this->setTypePiece($value);
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
        $keys = CommonPiecesDCEPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNomPiece($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdBlob($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRefConsultation($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrganismeConsultation($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDocumentRedac($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdRedac($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStatut($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTypePiece($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonPiecesDCEPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonPiecesDCEPeer::ID)) $criteria->add(CommonPiecesDCEPeer::ID, $this->id);
        if ($this->isColumnModified(CommonPiecesDCEPeer::NOM_PIECE)) $criteria->add(CommonPiecesDCEPeer::NOM_PIECE, $this->nom_piece);
        if ($this->isColumnModified(CommonPiecesDCEPeer::ID_BLOB)) $criteria->add(CommonPiecesDCEPeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(CommonPiecesDCEPeer::REF_CONSULTATION)) $criteria->add(CommonPiecesDCEPeer::REF_CONSULTATION, $this->ref_consultation);
        if ($this->isColumnModified(CommonPiecesDCEPeer::ORGANISME_CONSULTATION)) $criteria->add(CommonPiecesDCEPeer::ORGANISME_CONSULTATION, $this->organisme_consultation);
        if ($this->isColumnModified(CommonPiecesDCEPeer::DOCUMENT_REDAC)) $criteria->add(CommonPiecesDCEPeer::DOCUMENT_REDAC, $this->document_redac);
        if ($this->isColumnModified(CommonPiecesDCEPeer::ID_REDAC)) $criteria->add(CommonPiecesDCEPeer::ID_REDAC, $this->id_redac);
        if ($this->isColumnModified(CommonPiecesDCEPeer::STATUT)) $criteria->add(CommonPiecesDCEPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonPiecesDCEPeer::TYPE_PIECE)) $criteria->add(CommonPiecesDCEPeer::TYPE_PIECE, $this->type_piece);

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
        $criteria = new Criteria(CommonPiecesDCEPeer::DATABASE_NAME);
        $criteria->add(CommonPiecesDCEPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonPiecesDCE (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNomPiece($this->getNomPiece());
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setRefConsultation($this->getRefConsultation());
        $copyObj->setOrganismeConsultation($this->getOrganismeConsultation());
        $copyObj->setDocumentRedac($this->getDocumentRedac());
        $copyObj->setIdRedac($this->getIdRedac());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setTypePiece($this->getTypePiece());

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
     * @return CommonPiecesDCE Clone of current object.
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
     * @return CommonPiecesDCEPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonPiecesDCEPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonPiecesDCE The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultationRelatedByRefConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setRefConsultation(NULL);
        } else {
            $this->setRefConsultation($v->getReference());
        }

        $this->aCommonConsultationRelatedByRefConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonPiecesDCERelatedByRefConsultation($this);
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
    public function getCommonConsultationRelatedByRefConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultationRelatedByRefConsultation === null && ($this->ref_consultation !== null) && $doQuery) {
            $this->aCommonConsultationRelatedByRefConsultation = CommonConsultationQuery::create()
                ->filterByCommonPiecesDCERelatedByRefConsultation($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultationRelatedByRefConsultation->addCommonPiecesDCEsRelatedByRefConsultation($this);
             */
        }

        return $this->aCommonConsultationRelatedByRefConsultation;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonPiecesDCE The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultationRelatedByOrganismeConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganismeConsultation(NULL);
        } else {
            $this->setOrganismeConsultation($v->getOrganisme());
        }

        $this->aCommonConsultationRelatedByOrganismeConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonPiecesDCERelatedByOrganismeConsultation($this);
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
    public function getCommonConsultationRelatedByOrganismeConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultationRelatedByOrganismeConsultation === null && (($this->organisme_consultation !== "" && $this->organisme_consultation !== null)) && $doQuery) {
            $this->aCommonConsultationRelatedByOrganismeConsultation = CommonConsultationQuery::create()
                ->filterByCommonPiecesDCERelatedByOrganismeConsultation($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultationRelatedByOrganismeConsultation->addCommonPiecesDCEsRelatedByOrganismeConsultation($this);
             */
        }

        return $this->aCommonConsultationRelatedByOrganismeConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nom_piece = null;
        $this->id_blob = null;
        $this->ref_consultation = null;
        $this->organisme_consultation = null;
        $this->document_redac = null;
        $this->id_redac = null;
        $this->statut = null;
        $this->type_piece = null;
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
            if ($this->aCommonConsultationRelatedByRefConsultation instanceof Persistent) {
              $this->aCommonConsultationRelatedByRefConsultation->clearAllReferences($deep);
            }
            if ($this->aCommonConsultationRelatedByOrganismeConsultation instanceof Persistent) {
              $this->aCommonConsultationRelatedByOrganismeConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonConsultationRelatedByRefConsultation = null;
        $this->aCommonConsultationRelatedByOrganismeConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonPiecesDCEPeer::DEFAULT_STRING_FORMAT);
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
