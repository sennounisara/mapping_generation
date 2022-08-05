<?php


/**
 * Base class that represents a row from the 'echange' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseEchange extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EchangePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EchangePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_echange field.
     * @var        int
     */
    protected $id_echange;

    /**
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

    /**
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the emetteur field.
     * @var        string
     */
    protected $emetteur;

    /**
     * The value for the destinataire field.
     * @var        string
     */
    protected $destinataire;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the id_piece_jointe field.
     * @var        int
     */
    protected $id_piece_jointe;

    /**
     * The value for the nom_piece_jointe field.
     * @var        string
     */
    protected $nom_piece_jointe;

    /**
     * The value for the type_echange field.
     * @var        string
     */
    protected $type_echange;

    /**
     * The value for the format field.
     * @var        string
     */
    protected $format;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the date_echange field.
     * @var        string
     */
    protected $date_echange;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the reference_courrier field.
     * @var        string
     */
    protected $reference_courrier;

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
     * Get the [id_echange] column value.
     * 
     * @return int
     */
    public function getIdEchange()
    {

        return $this->id_echange;
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
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
    }

    /**
     * Get the [emetteur] column value.
     * 
     * @return string
     */
    public function getEmetteur()
    {

        return $this->emetteur;
    }

    /**
     * Get the [destinataire] column value.
     * 
     * @return string
     */
    public function getDestinataire()
    {

        return $this->destinataire;
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
     * Get the [id_piece_jointe] column value.
     * 
     * @return int
     */
    public function getIdPieceJointe()
    {

        return $this->id_piece_jointe;
    }

    /**
     * Get the [nom_piece_jointe] column value.
     * 
     * @return string
     */
    public function getNomPieceJointe()
    {

        return $this->nom_piece_jointe;
    }

    /**
     * Get the [type_echange] column value.
     * 
     * @return string
     */
    public function getTypeEchange()
    {

        return $this->type_echange;
    }

    /**
     * Get the [format] column value.
     * 
     * @return string
     */
    public function getFormat()
    {

        return $this->format;
    }

    /**
     * Get the [commentaire] column value.
     * 
     * @return string
     */
    public function getCommentaire()
    {

        return $this->commentaire;
    }

    /**
     * Get the [optionally formatted] temporal [date_echange] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEchange($format = null)
    {
        if ($this->date_echange === null) {
            return null;
        }

        if ($this->date_echange === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_echange);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_echange, true), $x);
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
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Get the [reference_courrier] column value.
     * 
     * @return string
     */
    public function getReferenceCourrier()
    {

        return $this->reference_courrier;
    }

    /**
     * Set the value of [id_echange] column.
     * 
     * @param int $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setIdEchange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_echange !== $v) {
            $this->id_echange = $v;
            $this->modifiedColumns[] = EchangePeer::ID_ECHANGE;
        }


        return $this;
    } // setIdEchange()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = EchangePeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = EchangePeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [emetteur] column.
     * 
     * @param string $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setEmetteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->emetteur !== $v) {
            $this->emetteur = $v;
            $this->modifiedColumns[] = EchangePeer::EMETTEUR;
        }


        return $this;
    } // setEmetteur()

    /**
     * Set the value of [destinataire] column.
     * 
     * @param string $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setDestinataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->destinataire !== $v) {
            $this->destinataire = $v;
            $this->modifiedColumns[] = EchangePeer::DESTINATAIRE;
        }


        return $this;
    } // setDestinataire()

    /**
     * Sets the value of [date_creation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Echange The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_creation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_creation !== null && $tmpDt = new DateTime($this->date_creation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_creation = $newDateAsString;
                $this->modifiedColumns[] = EchangePeer::DATE_CREATION;
            }
        } // if either are not null


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [id_piece_jointe] column.
     * 
     * @param int $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setIdPieceJointe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_piece_jointe !== $v) {
            $this->id_piece_jointe = $v;
            $this->modifiedColumns[] = EchangePeer::ID_PIECE_JOINTE;
        }


        return $this;
    } // setIdPieceJointe()

    /**
     * Set the value of [nom_piece_jointe] column.
     * 
     * @param string $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setNomPieceJointe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_piece_jointe !== $v) {
            $this->nom_piece_jointe = $v;
            $this->modifiedColumns[] = EchangePeer::NOM_PIECE_JOINTE;
        }


        return $this;
    } // setNomPieceJointe()

    /**
     * Set the value of [type_echange] column.
     * 
     * @param string $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setTypeEchange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_echange !== $v) {
            $this->type_echange = $v;
            $this->modifiedColumns[] = EchangePeer::TYPE_ECHANGE;
        }


        return $this;
    } // setTypeEchange()

    /**
     * Set the value of [format] column.
     * 
     * @param string $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setFormat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->format !== $v) {
            $this->format = $v;
            $this->modifiedColumns[] = EchangePeer::FORMAT;
        }


        return $this;
    } // setFormat()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = EchangePeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Sets the value of [date_echange] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Echange The current object (for fluent API support)
     */
    public function setDateEchange($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_echange !== null || $dt !== null) {
            $currentDateAsString = ($this->date_echange !== null && $tmpDt = new DateTime($this->date_echange)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_echange = $newDateAsString;
                $this->modifiedColumns[] = EchangePeer::DATE_ECHANGE;
            }
        } // if either are not null


        return $this;
    } // setDateEchange()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = EchangePeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [reference_courrier] column.
     * 
     * @param string $v new value
     * @return Echange The current object (for fluent API support)
     */
    public function setReferenceCourrier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reference_courrier !== $v) {
            $this->reference_courrier = $v;
            $this->modifiedColumns[] = EchangePeer::REFERENCE_COURRIER;
        }


        return $this;
    } // setReferenceCourrier()

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

            $this->id_echange = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_demande = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_agent = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->emetteur = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->destinataire = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_creation = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->id_piece_jointe = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->nom_piece_jointe = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->type_echange = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->format = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->commentaire = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_echange = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->id_entite = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->reference_courrier = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = EchangePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Echange object", $e);
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
            $con = Propel::getConnection(EchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EchangePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(EchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EchangeQuery::create()
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
            $con = Propel::getConnection(EchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EchangePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = EchangePeer::ID_ECHANGE;
        if (null !== $this->id_echange) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EchangePeer::ID_ECHANGE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EchangePeer::ID_ECHANGE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ECHANGE`';
        }
        if ($this->isColumnModified(EchangePeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(EchangePeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT`';
        }
        if ($this->isColumnModified(EchangePeer::EMETTEUR)) {
            $modifiedColumns[':p' . $index++]  = '`EMETTEUR`';
        }
        if ($this->isColumnModified(EchangePeer::DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`DESTINATAIRE`';
        }
        if ($this->isColumnModified(EchangePeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_CREATION`';
        }
        if ($this->isColumnModified(EchangePeer::ID_PIECE_JOINTE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PIECE_JOINTE`';
        }
        if ($this->isColumnModified(EchangePeer::NOM_PIECE_JOINTE)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_PIECE_JOINTE`';
        }
        if ($this->isColumnModified(EchangePeer::TYPE_ECHANGE)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_ECHANGE`';
        }
        if ($this->isColumnModified(EchangePeer::FORMAT)) {
            $modifiedColumns[':p' . $index++]  = '`FORMAT`';
        }
        if ($this->isColumnModified(EchangePeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENTAIRE`';
        }
        if ($this->isColumnModified(EchangePeer::DATE_ECHANGE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ECHANGE`';
        }
        if ($this->isColumnModified(EchangePeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(EchangePeer::REFERENCE_COURRIER)) {
            $modifiedColumns[':p' . $index++]  = '`REFERENCE_COURRIER`';
        }

        $sql = sprintf(
            'INSERT INTO `echange` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_ECHANGE`':						
                        $stmt->bindValue($identifier, $this->id_echange, PDO::PARAM_INT);
                        break;
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`EMETTEUR`':						
                        $stmt->bindValue($identifier, $this->emetteur, PDO::PARAM_STR);
                        break;
                    case '`DESTINATAIRE`':						
                        $stmt->bindValue($identifier, $this->destinataire, PDO::PARAM_STR);
                        break;
                    case '`DATE_CREATION`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`ID_PIECE_JOINTE`':						
                        $stmt->bindValue($identifier, $this->id_piece_jointe, PDO::PARAM_INT);
                        break;
                    case '`NOM_PIECE_JOINTE`':						
                        $stmt->bindValue($identifier, $this->nom_piece_jointe, PDO::PARAM_STR);
                        break;
                    case '`TYPE_ECHANGE`':						
                        $stmt->bindValue($identifier, $this->type_echange, PDO::PARAM_STR);
                        break;
                    case '`FORMAT`':						
                        $stmt->bindValue($identifier, $this->format, PDO::PARAM_STR);
                        break;
                    case '`COMMENTAIRE`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`DATE_ECHANGE`':						
                        $stmt->bindValue($identifier, $this->date_echange, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`REFERENCE_COURRIER`':						
                        $stmt->bindValue($identifier, $this->reference_courrier, PDO::PARAM_STR);
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
        $this->setIdEchange($pk);

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


            if (($retval = EchangePeer::doValidate($this, $columns)) !== true) {
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
        $pos = EchangePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEchange();
                break;
            case 1:
                return $this->getIdDemande();
                break;
            case 2:
                return $this->getIdAgent();
                break;
            case 3:
                return $this->getEmetteur();
                break;
            case 4:
                return $this->getDestinataire();
                break;
            case 5:
                return $this->getDateCreation();
                break;
            case 6:
                return $this->getIdPieceJointe();
                break;
            case 7:
                return $this->getNomPieceJointe();
                break;
            case 8:
                return $this->getTypeEchange();
                break;
            case 9:
                return $this->getFormat();
                break;
            case 10:
                return $this->getCommentaire();
                break;
            case 11:
                return $this->getDateEchange();
                break;
            case 12:
                return $this->getIdEntite();
                break;
            case 13:
                return $this->getReferenceCourrier();
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
        if (isset($alreadyDumpedObjects['Echange'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Echange'][$this->getPrimaryKey()] = true;
        $keys = EchangePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEchange(),
            $keys[1] => $this->getIdDemande(),
            $keys[2] => $this->getIdAgent(),
            $keys[3] => $this->getEmetteur(),
            $keys[4] => $this->getDestinataire(),
            $keys[5] => $this->getDateCreation(),
            $keys[6] => $this->getIdPieceJointe(),
            $keys[7] => $this->getNomPieceJointe(),
            $keys[8] => $this->getTypeEchange(),
            $keys[9] => $this->getFormat(),
            $keys[10] => $this->getCommentaire(),
            $keys[11] => $this->getDateEchange(),
            $keys[12] => $this->getIdEntite(),
            $keys[13] => $this->getReferenceCourrier(),
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
        $pos = EchangePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEchange($value);
                break;
            case 1:
                $this->setIdDemande($value);
                break;
            case 2:
                $this->setIdAgent($value);
                break;
            case 3:
                $this->setEmetteur($value);
                break;
            case 4:
                $this->setDestinataire($value);
                break;
            case 5:
                $this->setDateCreation($value);
                break;
            case 6:
                $this->setIdPieceJointe($value);
                break;
            case 7:
                $this->setNomPieceJointe($value);
                break;
            case 8:
                $this->setTypeEchange($value);
                break;
            case 9:
                $this->setFormat($value);
                break;
            case 10:
                $this->setCommentaire($value);
                break;
            case 11:
                $this->setDateEchange($value);
                break;
            case 12:
                $this->setIdEntite($value);
                break;
            case 13:
                $this->setReferenceCourrier($value);
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
        $keys = EchangePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEchange($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdDemande($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdAgent($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmetteur($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDestinataire($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateCreation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdPieceJointe($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNomPieceJointe($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTypeEchange($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFormat($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCommentaire($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateEchange($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdEntite($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setReferenceCourrier($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EchangePeer::DATABASE_NAME);

        if ($this->isColumnModified(EchangePeer::ID_ECHANGE)) $criteria->add(EchangePeer::ID_ECHANGE, $this->id_echange);
        if ($this->isColumnModified(EchangePeer::ID_DEMANDE)) $criteria->add(EchangePeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(EchangePeer::ID_AGENT)) $criteria->add(EchangePeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(EchangePeer::EMETTEUR)) $criteria->add(EchangePeer::EMETTEUR, $this->emetteur);
        if ($this->isColumnModified(EchangePeer::DESTINATAIRE)) $criteria->add(EchangePeer::DESTINATAIRE, $this->destinataire);
        if ($this->isColumnModified(EchangePeer::DATE_CREATION)) $criteria->add(EchangePeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(EchangePeer::ID_PIECE_JOINTE)) $criteria->add(EchangePeer::ID_PIECE_JOINTE, $this->id_piece_jointe);
        if ($this->isColumnModified(EchangePeer::NOM_PIECE_JOINTE)) $criteria->add(EchangePeer::NOM_PIECE_JOINTE, $this->nom_piece_jointe);
        if ($this->isColumnModified(EchangePeer::TYPE_ECHANGE)) $criteria->add(EchangePeer::TYPE_ECHANGE, $this->type_echange);
        if ($this->isColumnModified(EchangePeer::FORMAT)) $criteria->add(EchangePeer::FORMAT, $this->format);
        if ($this->isColumnModified(EchangePeer::COMMENTAIRE)) $criteria->add(EchangePeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(EchangePeer::DATE_ECHANGE)) $criteria->add(EchangePeer::DATE_ECHANGE, $this->date_echange);
        if ($this->isColumnModified(EchangePeer::ID_ENTITE)) $criteria->add(EchangePeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(EchangePeer::REFERENCE_COURRIER)) $criteria->add(EchangePeer::REFERENCE_COURRIER, $this->reference_courrier);

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
        $criteria = new Criteria(EchangePeer::DATABASE_NAME);
        $criteria->add(EchangePeer::ID_ECHANGE, $this->id_echange);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdEchange();
    }

    /**
     * Generic method to set the primary key (id_echange column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdEchange($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdEchange();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Echange (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setEmetteur($this->getEmetteur());
        $copyObj->setDestinataire($this->getDestinataire());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setIdPieceJointe($this->getIdPieceJointe());
        $copyObj->setNomPieceJointe($this->getNomPieceJointe());
        $copyObj->setTypeEchange($this->getTypeEchange());
        $copyObj->setFormat($this->getFormat());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setDateEchange($this->getDateEchange());
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setReferenceCourrier($this->getReferenceCourrier());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdEchange(NULL); // this is a auto-increment column, so set to default value
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
     * @return Echange Clone of current object.
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
     * @return EchangePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EchangePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_echange = null;
        $this->id_demande = null;
        $this->id_agent = null;
        $this->emetteur = null;
        $this->destinataire = null;
        $this->date_creation = null;
        $this->id_piece_jointe = null;
        $this->nom_piece_jointe = null;
        $this->type_echange = null;
        $this->format = null;
        $this->commentaire = null;
        $this->date_echange = null;
        $this->id_entite = null;
        $this->reference_courrier = null;
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
        return (string) $this->exportTo(EchangePeer::DEFAULT_STRING_FORMAT);
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
