<?php


/**
 * Base class that represents a row from the 'Autres_Pieces_Mise_Disposition' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAutresPiecesMiseDisposition extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAutresPiecesMiseDispositionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAutresPiecesMiseDispositionPeer
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
     * The value for the id_decision_enveloppe field.
     * @var        int
     */
    protected $id_decision_enveloppe;

    /**
     * The value for the org field.
     * @var        string
     */
    protected $org;

    /**
     * The value for the id_destinataire field.
     * @var        int
     */
    protected $id_destinataire;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * The value for the nom_fichier field.
     * @var        string
     */
    protected $nom_fichier;

    /**
     * The value for the taille_fichier field.
     * @var        string
     */
    protected $taille_fichier;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the horodatage field.
     * @var        resource
     */
    protected $horodatage;

    /**
     * The value for the untrusteddate field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $untrusteddate;

    /**
     * The value for the agent_id field.
     * @var        int
     */
    protected $agent_id;

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
        $this->untrusteddate = '0000-00-00 00:00:00';
    }

    /**
     * Initializes internal state of BaseCommonAutresPiecesMiseDisposition object.
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
     * Get the [id_decision_enveloppe] column value.
     * 
     * @return int
     */
    public function getIdDecisionEnveloppe()
    {

        return $this->id_decision_enveloppe;
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
     * Get the [id_destinataire] column value.
     * 
     * @return int
     */
    public function getIdDestinataire()
    {

        return $this->id_destinataire;
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
     * Get the [nom_fichier] column value.
     * 
     * @return string
     */
    public function getNomFichier()
    {

        return $this->nom_fichier;
    }

    /**
     * Get the [taille_fichier] column value.
     * 
     * @return string
     */
    public function getTailleFichier()
    {

        return $this->taille_fichier;
    }

    /**
     * Get the [date_creation] column value.
     * 
     * @return string
     */
    public function getDateCreation()
    {

        return $this->date_creation;
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
     * Get the [untrusteddate] column value.
     * 
     * @return string
     */
    public function getUntrusteddate()
    {

        return $this->untrusteddate;
    }

    /**
     * Get the [agent_id] column value.
     * 
     * @return int
     */
    public function getAgentId()
    {

        return $this->agent_id;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_decision_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setIdDecisionEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_decision_enveloppe !== $v) {
            $this->id_decision_enveloppe = $v;
            $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE;
        }


        return $this;
    } // setIdDecisionEnveloppe()

    /**
     * Set the value of [org] column.
     * 
     * @param string $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setOrg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->org !== $v) {
            $this->org = $v;
            $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::ORG;
        }


        return $this;
    } // setOrg()

    /**
     * Set the value of [id_destinataire] column.
     * 
     * @param int $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setIdDestinataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_destinataire !== $v) {
            $this->id_destinataire = $v;
            $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::ID_DESTINATAIRE;
        }


        return $this;
    } // setIdDestinataire()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

    /**
     * Set the value of [taille_fichier] column.
     * 
     * @param string $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setTailleFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille_fichier !== $v) {
            $this->taille_fichier = $v;
            $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::TAILLE_FICHIER;
        }


        return $this;
    } // setTailleFichier()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [horodatage] column.
     * 
     * @param resource $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
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
        $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::HORODATAGE;


        return $this;
    } // setHorodatage()

    /**
     * Set the value of [untrusteddate] column.
     * 
     * @param string $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setUntrusteddate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->untrusteddate !== $v) {
            $this->untrusteddate = $v;
            $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::UNTRUSTEDDATE;
        }


        return $this;
    } // setUntrusteddate()

    /**
     * Set the value of [agent_id] column.
     * 
     * @param int $v new value
     * @return CommonAutresPiecesMiseDisposition The current object (for fluent API support)
     */
    public function setAgentId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agent_id !== $v) {
            $this->agent_id = $v;
            $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::AGENT_ID;
        }


        return $this;
    } // setAgentId()

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
            if ($this->untrusteddate !== '0000-00-00 00:00:00') {
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
            $this->id_decision_enveloppe = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->org = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_destinataire = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_blob = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->nom_fichier = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->taille_fichier = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->date_creation = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            if ($row[$startcol + 8] !== null) {
                $this->horodatage = fopen('php://memory', 'r+');
                fwrite($this->horodatage, $row[$startcol + 8]);
                rewind($this->horodatage);
            } else {
                $this->horodatage = null;
            }
            $this->untrusteddate = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->agent_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = CommonAutresPiecesMiseDispositionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAutresPiecesMiseDisposition object", $e);
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
            $con = Propel::getConnection(CommonAutresPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAutresPiecesMiseDispositionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonAutresPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAutresPiecesMiseDispositionQuery::create()
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
            $con = Propel::getConnection(CommonAutresPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAutresPiecesMiseDispositionPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonAutresPiecesMiseDispositionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAutresPiecesMiseDispositionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_decision_enveloppe`';
        }
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::ORG)) {
            $modifiedColumns[':p' . $index++]  = '`org`';
        }
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::ID_DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_destinataire`';
        }
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob`';
        }
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier`';
        }
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::TAILLE_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`taille_fichier`';
        }
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::HORODATAGE)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage`';
        }
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::UNTRUSTEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`untrusteddate`';
        }
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::AGENT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`agent_id`';
        }

        $sql = sprintf(
            'INSERT INTO `Autres_Pieces_Mise_Disposition` (%s) VALUES (%s)',
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
                    case '`id_decision_enveloppe`':						
                        $stmt->bindValue($identifier, $this->id_decision_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`org`':						
                        $stmt->bindValue($identifier, $this->org, PDO::PARAM_STR);
                        break;
                    case '`id_destinataire`':						
                        $stmt->bindValue($identifier, $this->id_destinataire, PDO::PARAM_INT);
                        break;
                    case '`id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`nom_fichier`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
                        break;
                    case '`taille_fichier`':						
                        $stmt->bindValue($identifier, $this->taille_fichier, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
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
                    case '`agent_id`':						
                        $stmt->bindValue($identifier, $this->agent_id, PDO::PARAM_INT);
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


            if (($retval = CommonAutresPiecesMiseDispositionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonAutresPiecesMiseDispositionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDecisionEnveloppe();
                break;
            case 2:
                return $this->getOrg();
                break;
            case 3:
                return $this->getIdDestinataire();
                break;
            case 4:
                return $this->getIdBlob();
                break;
            case 5:
                return $this->getNomFichier();
                break;
            case 6:
                return $this->getTailleFichier();
                break;
            case 7:
                return $this->getDateCreation();
                break;
            case 8:
                return $this->getHorodatage();
                break;
            case 9:
                return $this->getUntrusteddate();
                break;
            case 10:
                return $this->getAgentId();
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
        if (isset($alreadyDumpedObjects['CommonAutresPiecesMiseDisposition'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAutresPiecesMiseDisposition'][$this->getPrimaryKey()] = true;
        $keys = CommonAutresPiecesMiseDispositionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdDecisionEnveloppe(),
            $keys[2] => $this->getOrg(),
            $keys[3] => $this->getIdDestinataire(),
            $keys[4] => $this->getIdBlob(),
            $keys[5] => $this->getNomFichier(),
            $keys[6] => $this->getTailleFichier(),
            $keys[7] => $this->getDateCreation(),
            $keys[8] => $this->getHorodatage(),
            $keys[9] => $this->getUntrusteddate(),
            $keys[10] => $this->getAgentId(),
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
        $pos = CommonAutresPiecesMiseDispositionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDecisionEnveloppe($value);
                break;
            case 2:
                $this->setOrg($value);
                break;
            case 3:
                $this->setIdDestinataire($value);
                break;
            case 4:
                $this->setIdBlob($value);
                break;
            case 5:
                $this->setNomFichier($value);
                break;
            case 6:
                $this->setTailleFichier($value);
                break;
            case 7:
                $this->setDateCreation($value);
                break;
            case 8:
                $this->setHorodatage($value);
                break;
            case 9:
                $this->setUntrusteddate($value);
                break;
            case 10:
                $this->setAgentId($value);
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
        $keys = CommonAutresPiecesMiseDispositionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdDecisionEnveloppe($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrg($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdDestinataire($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdBlob($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNomFichier($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTailleFichier($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateCreation($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHorodatage($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUntrusteddate($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAgentId($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAutresPiecesMiseDispositionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::ID)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::ID, $this->id);
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $this->id_decision_enveloppe);
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::ORG)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::ORG, $this->org);
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::ID_DESTINATAIRE)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::ID_DESTINATAIRE, $this->id_destinataire);
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::ID_BLOB)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::NOM_FICHIER)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::NOM_FICHIER, $this->nom_fichier);
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::TAILLE_FICHIER)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::TAILLE_FICHIER, $this->taille_fichier);
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::DATE_CREATION)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::HORODATAGE)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::HORODATAGE, $this->horodatage);
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::UNTRUSTEDDATE)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::UNTRUSTEDDATE, $this->untrusteddate);
        if ($this->isColumnModified(CommonAutresPiecesMiseDispositionPeer::AGENT_ID)) $criteria->add(CommonAutresPiecesMiseDispositionPeer::AGENT_ID, $this->agent_id);

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
        $criteria = new Criteria(CommonAutresPiecesMiseDispositionPeer::DATABASE_NAME);
        $criteria->add(CommonAutresPiecesMiseDispositionPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonAutresPiecesMiseDisposition (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdDecisionEnveloppe($this->getIdDecisionEnveloppe());
        $copyObj->setOrg($this->getOrg());
        $copyObj->setIdDestinataire($this->getIdDestinataire());
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setNomFichier($this->getNomFichier());
        $copyObj->setTailleFichier($this->getTailleFichier());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setHorodatage($this->getHorodatage());
        $copyObj->setUntrusteddate($this->getUntrusteddate());
        $copyObj->setAgentId($this->getAgentId());
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
     * @return CommonAutresPiecesMiseDisposition Clone of current object.
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
     * @return CommonAutresPiecesMiseDispositionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAutresPiecesMiseDispositionPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_decision_enveloppe = null;
        $this->org = null;
        $this->id_destinataire = null;
        $this->id_blob = null;
        $this->nom_fichier = null;
        $this->taille_fichier = null;
        $this->date_creation = null;
        $this->horodatage = null;
        $this->untrusteddate = null;
        $this->agent_id = null;
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
        return (string) $this->exportTo(CommonAutresPiecesMiseDispositionPeer::DEFAULT_STRING_FORMAT);
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
