<?php


/**
 * Base class that represents a row from the 'demande_complement' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDemandeComplement extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonDemandeComplementPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonDemandeComplementPeer
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
     * The value for the id_resultat_analyse_decison field.
     * @var        int
     */
    protected $id_resultat_analyse_decison;

    /**
     * The value for the date_envoie field.
     * @var        string
     */
    protected $date_envoie;

    /**
     * The value for the date_reception field.
     * @var        string
     */
    protected $date_reception;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the nom_entreprise field.
     * @var        string
     */
    protected $nom_entreprise;

    /**
     * The value for the objet field.
     * @var        string
     */
    protected $objet;

    /**
     * The value for the message field.
     * @var        string
     */
    protected $message;

    /**
     * The value for the uid field.
     * @var        string
     */
    protected $uid;

    /**
     * The value for the message_reponse field.
     * @var        string
     */
    protected $message_reponse;

    /**
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the date_accuse_reception field.
     * @var        string
     */
    protected $date_accuse_reception;

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
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [id_resultat_analyse_decison] column value.
     * 
     * @return int
     */
    public function getIdResultatAnalyseDecison()
    {

        return $this->id_resultat_analyse_decison;
    }

    /**
     * Get the [optionally formatted] temporal [date_envoie] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEnvoie($format = 'Y-m-d H:i:s')
    {
        if ($this->date_envoie === null) {
            return null;
        }

        if ($this->date_envoie === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_envoie);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_envoie, true), $x);
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
     * Get the [optionally formatted] temporal [date_reception] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateReception($format = 'Y-m-d H:i:s')
    {
        if ($this->date_reception === null) {
            return null;
        }

        if ($this->date_reception === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_reception);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_reception, true), $x);
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
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [nom_entreprise] column value.
     * 
     * @return string
     */
    public function getNomEntreprise()
    {

        return $this->nom_entreprise;
    }

    /**
     * Get the [objet] column value.
     * 
     * @return string
     */
    public function getObjet()
    {

        return $this->objet;
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
     * Get the [uid] column value.
     * 
     * @return string
     */
    public function getUid()
    {

        return $this->uid;
    }

    /**
     * Get the [message_reponse] column value.
     * 
     * @return string
     */
    public function getMessageReponse()
    {

        return $this->message_reponse;
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
     * Get the [optionally formatted] temporal [date_accuse_reception] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateAccuseReception($format = 'Y-m-d H:i:s')
    {
        if ($this->date_accuse_reception === null) {
            return null;
        }

        if ($this->date_accuse_reception === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_accuse_reception);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_accuse_reception, true), $x);
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
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonDemandeComplementPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_resultat_analyse_decison] column.
     * 
     * @param int $v new value
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setIdResultatAnalyseDecison($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_resultat_analyse_decison !== $v) {
            $this->id_resultat_analyse_decison = $v;
            $this->modifiedColumns[] = CommonDemandeComplementPeer::ID_RESULTAT_ANALYSE_DECISON;
        }


        return $this;
    } // setIdResultatAnalyseDecison()

    /**
     * Sets the value of [date_envoie] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setDateEnvoie($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_envoie !== null || $dt !== null) {
            $currentDateAsString = ($this->date_envoie !== null && $tmpDt = new DateTime($this->date_envoie)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_envoie = $newDateAsString;
                $this->modifiedColumns[] = CommonDemandeComplementPeer::DATE_ENVOIE;
            }
        } // if either are not null


        return $this;
    } // setDateEnvoie()

    /**
     * Sets the value of [date_reception] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setDateReception($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_reception !== null || $dt !== null) {
            $currentDateAsString = ($this->date_reception !== null && $tmpDt = new DateTime($this->date_reception)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_reception = $newDateAsString;
                $this->modifiedColumns[] = CommonDemandeComplementPeer::DATE_RECEPTION;
            }
        } // if either are not null


        return $this;
    } // setDateReception()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonDemandeComplementPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [nom_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setNomEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_entreprise !== $v) {
            $this->nom_entreprise = $v;
            $this->modifiedColumns[] = CommonDemandeComplementPeer::NOM_ENTREPRISE;
        }


        return $this;
    } // setNomEntreprise()

    /**
     * Set the value of [objet] column.
     * 
     * @param string $v new value
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet !== $v) {
            $this->objet = $v;
            $this->modifiedColumns[] = CommonDemandeComplementPeer::OBJET;
        }


        return $this;
    } // setObjet()

    /**
     * Set the value of [message] column.
     * 
     * @param string $v new value
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->message !== $v) {
            $this->message = $v;
            $this->modifiedColumns[] = CommonDemandeComplementPeer::MESSAGE;
        }


        return $this;
    } // setMessage()

    /**
     * Set the value of [uid] column.
     * 
     * @param string $v new value
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setUid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->uid !== $v) {
            $this->uid = $v;
            $this->modifiedColumns[] = CommonDemandeComplementPeer::UID;
        }


        return $this;
    } // setUid()

    /**
     * Set the value of [message_reponse] column.
     * 
     * @param string $v new value
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setMessageReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->message_reponse !== $v) {
            $this->message_reponse = $v;
            $this->modifiedColumns[] = CommonDemandeComplementPeer::MESSAGE_REPONSE;
        }


        return $this;
    } // setMessageReponse()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonDemandeComplementPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Sets the value of [date_accuse_reception] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonDemandeComplement The current object (for fluent API support)
     */
    public function setDateAccuseReception($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_accuse_reception !== null || $dt !== null) {
            $currentDateAsString = ($this->date_accuse_reception !== null && $tmpDt = new DateTime($this->date_accuse_reception)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_accuse_reception = $newDateAsString;
                $this->modifiedColumns[] = CommonDemandeComplementPeer::DATE_ACCUSE_RECEPTION;
            }
        } // if either are not null


        return $this;
    } // setDateAccuseReception()

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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_resultat_analyse_decison = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->date_envoie = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->date_reception = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->nom_entreprise = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->objet = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->message = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->uid = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->message_reponse = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->statut = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->date_accuse_reception = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CommonDemandeComplementPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonDemandeComplement object", $e);
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
            $con = Propel::getConnection(CommonDemandeComplementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonDemandeComplementPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonDemandeComplementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonDemandeComplementQuery::create()
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
            $con = Propel::getConnection(CommonDemandeComplementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonDemandeComplementPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonDemandeComplementPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonDemandeComplementPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonDemandeComplementPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::ID_RESULTAT_ANALYSE_DECISON)) {
            $modifiedColumns[':p' . $index++]  = '`id_resultat_analyse_decison`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::DATE_ENVOIE)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoie`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::DATE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`date_reception`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::NOM_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_entreprise`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`objet`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`message`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::UID)) {
            $modifiedColumns[':p' . $index++]  = '`uid`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::MESSAGE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`message_reponse`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonDemandeComplementPeer::DATE_ACCUSE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`date_accuse_reception`';
        }

        $sql = sprintf(
            'INSERT INTO `demande_complement` (%s) VALUES (%s)',
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
                    case '`id_resultat_analyse_decison`':						
                        $stmt->bindValue($identifier, $this->id_resultat_analyse_decison, PDO::PARAM_INT);
                        break;
                    case '`date_envoie`':						
                        $stmt->bindValue($identifier, $this->date_envoie, PDO::PARAM_STR);
                        break;
                    case '`date_reception`':						
                        $stmt->bindValue($identifier, $this->date_reception, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`nom_entreprise`':						
                        $stmt->bindValue($identifier, $this->nom_entreprise, PDO::PARAM_STR);
                        break;
                    case '`objet`':						
                        $stmt->bindValue($identifier, $this->objet, PDO::PARAM_STR);
                        break;
                    case '`message`':						
                        $stmt->bindValue($identifier, $this->message, PDO::PARAM_STR);
                        break;
                    case '`uid`':						
                        $stmt->bindValue($identifier, $this->uid, PDO::PARAM_STR);
                        break;
                    case '`message_reponse`':						
                        $stmt->bindValue($identifier, $this->message_reponse, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`date_accuse_reception`':						
                        $stmt->bindValue($identifier, $this->date_accuse_reception, PDO::PARAM_STR);
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


            if (($retval = CommonDemandeComplementPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonDemandeComplementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdResultatAnalyseDecison();
                break;
            case 2:
                return $this->getDateEnvoie();
                break;
            case 3:
                return $this->getDateReception();
                break;
            case 4:
                return $this->getEmail();
                break;
            case 5:
                return $this->getNomEntreprise();
                break;
            case 6:
                return $this->getObjet();
                break;
            case 7:
                return $this->getMessage();
                break;
            case 8:
                return $this->getUid();
                break;
            case 9:
                return $this->getMessageReponse();
                break;
            case 10:
                return $this->getStatut();
                break;
            case 11:
                return $this->getDateAccuseReception();
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
        if (isset($alreadyDumpedObjects['CommonDemandeComplement'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonDemandeComplement'][$this->getPrimaryKey()] = true;
        $keys = CommonDemandeComplementPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdResultatAnalyseDecison(),
            $keys[2] => $this->getDateEnvoie(),
            $keys[3] => $this->getDateReception(),
            $keys[4] => $this->getEmail(),
            $keys[5] => $this->getNomEntreprise(),
            $keys[6] => $this->getObjet(),
            $keys[7] => $this->getMessage(),
            $keys[8] => $this->getUid(),
            $keys[9] => $this->getMessageReponse(),
            $keys[10] => $this->getStatut(),
            $keys[11] => $this->getDateAccuseReception(),
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
        $pos = CommonDemandeComplementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdResultatAnalyseDecison($value);
                break;
            case 2:
                $this->setDateEnvoie($value);
                break;
            case 3:
                $this->setDateReception($value);
                break;
            case 4:
                $this->setEmail($value);
                break;
            case 5:
                $this->setNomEntreprise($value);
                break;
            case 6:
                $this->setObjet($value);
                break;
            case 7:
                $this->setMessage($value);
                break;
            case 8:
                $this->setUid($value);
                break;
            case 9:
                $this->setMessageReponse($value);
                break;
            case 10:
                $this->setStatut($value);
                break;
            case 11:
                $this->setDateAccuseReception($value);
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
        $keys = CommonDemandeComplementPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdResultatAnalyseDecison($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDateEnvoie($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDateReception($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNomEntreprise($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setObjet($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMessage($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUid($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMessageReponse($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setStatut($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateAccuseReception($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonDemandeComplementPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonDemandeComplementPeer::ID)) $criteria->add(CommonDemandeComplementPeer::ID, $this->id);
        if ($this->isColumnModified(CommonDemandeComplementPeer::ID_RESULTAT_ANALYSE_DECISON)) $criteria->add(CommonDemandeComplementPeer::ID_RESULTAT_ANALYSE_DECISON, $this->id_resultat_analyse_decison);
        if ($this->isColumnModified(CommonDemandeComplementPeer::DATE_ENVOIE)) $criteria->add(CommonDemandeComplementPeer::DATE_ENVOIE, $this->date_envoie);
        if ($this->isColumnModified(CommonDemandeComplementPeer::DATE_RECEPTION)) $criteria->add(CommonDemandeComplementPeer::DATE_RECEPTION, $this->date_reception);
        if ($this->isColumnModified(CommonDemandeComplementPeer::EMAIL)) $criteria->add(CommonDemandeComplementPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonDemandeComplementPeer::NOM_ENTREPRISE)) $criteria->add(CommonDemandeComplementPeer::NOM_ENTREPRISE, $this->nom_entreprise);
        if ($this->isColumnModified(CommonDemandeComplementPeer::OBJET)) $criteria->add(CommonDemandeComplementPeer::OBJET, $this->objet);
        if ($this->isColumnModified(CommonDemandeComplementPeer::MESSAGE)) $criteria->add(CommonDemandeComplementPeer::MESSAGE, $this->message);
        if ($this->isColumnModified(CommonDemandeComplementPeer::UID)) $criteria->add(CommonDemandeComplementPeer::UID, $this->uid);
        if ($this->isColumnModified(CommonDemandeComplementPeer::MESSAGE_REPONSE)) $criteria->add(CommonDemandeComplementPeer::MESSAGE_REPONSE, $this->message_reponse);
        if ($this->isColumnModified(CommonDemandeComplementPeer::STATUT)) $criteria->add(CommonDemandeComplementPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonDemandeComplementPeer::DATE_ACCUSE_RECEPTION)) $criteria->add(CommonDemandeComplementPeer::DATE_ACCUSE_RECEPTION, $this->date_accuse_reception);

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
        $criteria = new Criteria(CommonDemandeComplementPeer::DATABASE_NAME);
        $criteria->add(CommonDemandeComplementPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonDemandeComplement (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdResultatAnalyseDecison($this->getIdResultatAnalyseDecison());
        $copyObj->setDateEnvoie($this->getDateEnvoie());
        $copyObj->setDateReception($this->getDateReception());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setNomEntreprise($this->getNomEntreprise());
        $copyObj->setObjet($this->getObjet());
        $copyObj->setMessage($this->getMessage());
        $copyObj->setUid($this->getUid());
        $copyObj->setMessageReponse($this->getMessageReponse());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDateAccuseReception($this->getDateAccuseReception());
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
     * @return CommonDemandeComplement Clone of current object.
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
     * @return CommonDemandeComplementPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonDemandeComplementPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_resultat_analyse_decison = null;
        $this->date_envoie = null;
        $this->date_reception = null;
        $this->email = null;
        $this->nom_entreprise = null;
        $this->objet = null;
        $this->message = null;
        $this->uid = null;
        $this->message_reponse = null;
        $this->statut = null;
        $this->date_accuse_reception = null;
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
        return (string) $this->exportTo(CommonDemandeComplementPeer::DEFAULT_STRING_FORMAT);
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
