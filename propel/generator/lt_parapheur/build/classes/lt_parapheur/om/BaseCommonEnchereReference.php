<?php


/**
 * Base class that represents a row from the 'EnchereReference' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnchereReference extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEnchereReferencePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEnchereReferencePeer
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
     * The value for the idenchere field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $idenchere;

    /**
     * The value for the libelle field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the quantite field.
     * @var        double
     */
    protected $quantite;

    /**
     * The value for the ismontant field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $ismontant;

    /**
     * The value for the unite field.
     * @var        string
     */
    protected $unite;

    /**
     * The value for the pasmin field.
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $pasmin;

    /**
     * The value for the pasmax field.
     * @var        double
     */
    protected $pasmax;

    /**
     * The value for the valeurreference field.
     * @var        double
     */
    protected $valeurreference;

    /**
     * The value for the valeurdepartcommune field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $valeurdepartcommune;

    /**
     * The value for the valeurdepart field.
     * @var        double
     */
    protected $valeurdepart;

    /**
     * The value for the typebaremereference field.
     * @var        string
     */
    protected $typebaremereference;

    /**
     * The value for the ponderationnotereference field.
     * Note: this column has a database default value of: 1.0
     * @var        double
     */
    protected $ponderationnotereference;

    /**
     * The value for the notemaxbaremerelatif field.
     * @var        double
     */
    protected $notemaxbaremerelatif;

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
        $this->idenchere = 0;
        $this->libelle = '';
        $this->ismontant = '1';
        $this->pasmin = 0.0;
        $this->valeurdepartcommune = '1';
        $this->ponderationnotereference = 1.0;
    }

    /**
     * Initializes internal state of BaseCommonEnchereReference object.
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
     * Get the [idenchere] column value.
     * 
     * @return int
     */
    public function getIdenchere()
    {

        return $this->idenchere;
    }

    /**
     * Get the [libelle] column value.
     * 
     * @return string
     */
    public function getLibelle()
    {

        return $this->libelle;
    }

    /**
     * Get the [quantite] column value.
     * 
     * @return double
     */
    public function getQuantite()
    {

        return $this->quantite;
    }

    /**
     * Get the [ismontant] column value.
     * 
     * @return string
     */
    public function getIsmontant()
    {

        return $this->ismontant;
    }

    /**
     * Get the [unite] column value.
     * 
     * @return string
     */
    public function getUnite()
    {

        return $this->unite;
    }

    /**
     * Get the [pasmin] column value.
     * 
     * @return double
     */
    public function getPasmin()
    {

        return $this->pasmin;
    }

    /**
     * Get the [pasmax] column value.
     * 
     * @return double
     */
    public function getPasmax()
    {

        return $this->pasmax;
    }

    /**
     * Get the [valeurreference] column value.
     * 
     * @return double
     */
    public function getValeurreference()
    {

        return $this->valeurreference;
    }

    /**
     * Get the [valeurdepartcommune] column value.
     * 
     * @return string
     */
    public function getValeurdepartcommune()
    {

        return $this->valeurdepartcommune;
    }

    /**
     * Get the [valeurdepart] column value.
     * 
     * @return double
     */
    public function getValeurdepart()
    {

        return $this->valeurdepart;
    }

    /**
     * Get the [typebaremereference] column value.
     * 
     * @return string
     */
    public function getTypebaremereference()
    {

        return $this->typebaremereference;
    }

    /**
     * Get the [ponderationnotereference] column value.
     * 
     * @return double
     */
    public function getPonderationnotereference()
    {

        return $this->ponderationnotereference;
    }

    /**
     * Get the [notemaxbaremerelatif] column value.
     * 
     * @return double
     */
    public function getNotemaxbaremerelatif()
    {

        return $this->notemaxbaremerelatif;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [idenchere] column.
     * 
     * @param int $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setIdenchere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idenchere !== $v) {
            $this->idenchere = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::IDENCHERE;
        }


        return $this;
    } // setIdenchere()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [quantite] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setQuantite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->quantite !== $v) {
            $this->quantite = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::QUANTITE;
        }


        return $this;
    } // setQuantite()

    /**
     * Set the value of [ismontant] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setIsmontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ismontant !== $v) {
            $this->ismontant = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::ISMONTANT;
        }


        return $this;
    } // setIsmontant()

    /**
     * Set the value of [unite] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setUnite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unite !== $v) {
            $this->unite = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::UNITE;
        }


        return $this;
    } // setUnite()

    /**
     * Set the value of [pasmin] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setPasmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pasmin !== $v) {
            $this->pasmin = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::PASMIN;
        }


        return $this;
    } // setPasmin()

    /**
     * Set the value of [pasmax] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setPasmax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pasmax !== $v) {
            $this->pasmax = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::PASMAX;
        }


        return $this;
    } // setPasmax()

    /**
     * Set the value of [valeurreference] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setValeurreference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valeurreference !== $v) {
            $this->valeurreference = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::VALEURREFERENCE;
        }


        return $this;
    } // setValeurreference()

    /**
     * Set the value of [valeurdepartcommune] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setValeurdepartcommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeurdepartcommune !== $v) {
            $this->valeurdepartcommune = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE;
        }


        return $this;
    } // setValeurdepartcommune()

    /**
     * Set the value of [valeurdepart] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setValeurdepart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->valeurdepart !== $v) {
            $this->valeurdepart = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::VALEURDEPART;
        }


        return $this;
    } // setValeurdepart()

    /**
     * Set the value of [typebaremereference] column.
     * 
     * @param string $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setTypebaremereference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typebaremereference !== $v) {
            $this->typebaremereference = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::TYPEBAREMEREFERENCE;
        }


        return $this;
    } // setTypebaremereference()

    /**
     * Set the value of [ponderationnotereference] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setPonderationnotereference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ponderationnotereference !== $v) {
            $this->ponderationnotereference = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE;
        }


        return $this;
    } // setPonderationnotereference()

    /**
     * Set the value of [notemaxbaremerelatif] column.
     * 
     * @param double $v new value
     * @return CommonEnchereReference The current object (for fluent API support)
     */
    public function setNotemaxbaremerelatif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->notemaxbaremerelatif !== $v) {
            $this->notemaxbaremerelatif = $v;
            $this->modifiedColumns[] = CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF;
        }


        return $this;
    } // setNotemaxbaremerelatif()

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

            if ($this->idenchere !== 0) {
                return false;
            }

            if ($this->libelle !== '') {
                return false;
            }

            if ($this->ismontant !== '1') {
                return false;
            }

            if ($this->pasmin !== 0.0) {
                return false;
            }

            if ($this->valeurdepartcommune !== '1') {
                return false;
            }

            if ($this->ponderationnotereference !== 1.0) {
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
            $this->idenchere = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->libelle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->quantite = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->ismontant = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->unite = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->pasmin = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->pasmax = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->valeurreference = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->valeurdepartcommune = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->valeurdepart = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->typebaremereference = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->ponderationnotereference = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->notemaxbaremerelatif = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = CommonEnchereReferencePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEnchereReference object", $e);
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
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEnchereReferencePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEnchereReferenceQuery::create()
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
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonEnchereReferencePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonEnchereReferencePeer::ID;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonEnchereReferencePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::IDENCHERE)) {
            $modifiedColumns[':p' . $index++]  = '`idEnchere`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::QUANTITE)) {
            $modifiedColumns[':p' . $index++]  = '`quantite`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::ISMONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`isMontant`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::UNITE)) {
            $modifiedColumns[':p' . $index++]  = '`unite`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::PASMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pasMin`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::PASMAX)) {
            $modifiedColumns[':p' . $index++]  = '`pasMax`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURREFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`valeurReference`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`valeurDepartCommune`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURDEPART)) {
            $modifiedColumns[':p' . $index++]  = '`valeurDepart`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::TYPEBAREMEREFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`typeBaremeReference`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`ponderationNoteReference`';
        }
        if ($this->isColumnModified(CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF)) {
            $modifiedColumns[':p' . $index++]  = '`noteMaxBaremeRelatif`';
        }

        $sql = sprintf(
            'INSERT INTO `EnchereReference` (%s) VALUES (%s)',
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
                    case '`idEnchere`':						
                        $stmt->bindValue($identifier, $this->idenchere, PDO::PARAM_INT);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`quantite`':						
                        $stmt->bindValue($identifier, $this->quantite, PDO::PARAM_STR);
                        break;
                    case '`isMontant`':						
                        $stmt->bindValue($identifier, $this->ismontant, PDO::PARAM_STR);
                        break;
                    case '`unite`':						
                        $stmt->bindValue($identifier, $this->unite, PDO::PARAM_STR);
                        break;
                    case '`pasMin`':						
                        $stmt->bindValue($identifier, $this->pasmin, PDO::PARAM_STR);
                        break;
                    case '`pasMax`':						
                        $stmt->bindValue($identifier, $this->pasmax, PDO::PARAM_STR);
                        break;
                    case '`valeurReference`':						
                        $stmt->bindValue($identifier, $this->valeurreference, PDO::PARAM_STR);
                        break;
                    case '`valeurDepartCommune`':						
                        $stmt->bindValue($identifier, $this->valeurdepartcommune, PDO::PARAM_STR);
                        break;
                    case '`valeurDepart`':						
                        $stmt->bindValue($identifier, $this->valeurdepart, PDO::PARAM_STR);
                        break;
                    case '`typeBaremeReference`':						
                        $stmt->bindValue($identifier, $this->typebaremereference, PDO::PARAM_STR);
                        break;
                    case '`ponderationNoteReference`':						
                        $stmt->bindValue($identifier, $this->ponderationnotereference, PDO::PARAM_STR);
                        break;
                    case '`noteMaxBaremeRelatif`':						
                        $stmt->bindValue($identifier, $this->notemaxbaremerelatif, PDO::PARAM_STR);
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
        if ($pk !== null) {
            $this->setId($pk);
        }

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


            if (($retval = CommonEnchereReferencePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonEnchereReferencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdenchere();
                break;
            case 3:
                return $this->getLibelle();
                break;
            case 4:
                return $this->getQuantite();
                break;
            case 5:
                return $this->getIsmontant();
                break;
            case 6:
                return $this->getUnite();
                break;
            case 7:
                return $this->getPasmin();
                break;
            case 8:
                return $this->getPasmax();
                break;
            case 9:
                return $this->getValeurreference();
                break;
            case 10:
                return $this->getValeurdepartcommune();
                break;
            case 11:
                return $this->getValeurdepart();
                break;
            case 12:
                return $this->getTypebaremereference();
                break;
            case 13:
                return $this->getPonderationnotereference();
                break;
            case 14:
                return $this->getNotemaxbaremerelatif();
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
        if (isset($alreadyDumpedObjects['CommonEnchereReference'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEnchereReference'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonEnchereReferencePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdenchere(),
            $keys[3] => $this->getLibelle(),
            $keys[4] => $this->getQuantite(),
            $keys[5] => $this->getIsmontant(),
            $keys[6] => $this->getUnite(),
            $keys[7] => $this->getPasmin(),
            $keys[8] => $this->getPasmax(),
            $keys[9] => $this->getValeurreference(),
            $keys[10] => $this->getValeurdepartcommune(),
            $keys[11] => $this->getValeurdepart(),
            $keys[12] => $this->getTypebaremereference(),
            $keys[13] => $this->getPonderationnotereference(),
            $keys[14] => $this->getNotemaxbaremerelatif(),
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
        $pos = CommonEnchereReferencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdenchere($value);
                break;
            case 3:
                $this->setLibelle($value);
                break;
            case 4:
                $this->setQuantite($value);
                break;
            case 5:
                $this->setIsmontant($value);
                break;
            case 6:
                $this->setUnite($value);
                break;
            case 7:
                $this->setPasmin($value);
                break;
            case 8:
                $this->setPasmax($value);
                break;
            case 9:
                $this->setValeurreference($value);
                break;
            case 10:
                $this->setValeurdepartcommune($value);
                break;
            case 11:
                $this->setValeurdepart($value);
                break;
            case 12:
                $this->setTypebaremereference($value);
                break;
            case 13:
                $this->setPonderationnotereference($value);
                break;
            case 14:
                $this->setNotemaxbaremerelatif($value);
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
        $keys = CommonEnchereReferencePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdenchere($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setQuantite($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIsmontant($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUnite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPasmin($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPasmax($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setValeurreference($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setValeurdepartcommune($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setValeurdepart($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTypebaremereference($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPonderationnotereference($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNotemaxbaremerelatif($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEnchereReferencePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEnchereReferencePeer::ID)) $criteria->add(CommonEnchereReferencePeer::ID, $this->id);
        if ($this->isColumnModified(CommonEnchereReferencePeer::ORGANISME)) $criteria->add(CommonEnchereReferencePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonEnchereReferencePeer::IDENCHERE)) $criteria->add(CommonEnchereReferencePeer::IDENCHERE, $this->idenchere);
        if ($this->isColumnModified(CommonEnchereReferencePeer::LIBELLE)) $criteria->add(CommonEnchereReferencePeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonEnchereReferencePeer::QUANTITE)) $criteria->add(CommonEnchereReferencePeer::QUANTITE, $this->quantite);
        if ($this->isColumnModified(CommonEnchereReferencePeer::ISMONTANT)) $criteria->add(CommonEnchereReferencePeer::ISMONTANT, $this->ismontant);
        if ($this->isColumnModified(CommonEnchereReferencePeer::UNITE)) $criteria->add(CommonEnchereReferencePeer::UNITE, $this->unite);
        if ($this->isColumnModified(CommonEnchereReferencePeer::PASMIN)) $criteria->add(CommonEnchereReferencePeer::PASMIN, $this->pasmin);
        if ($this->isColumnModified(CommonEnchereReferencePeer::PASMAX)) $criteria->add(CommonEnchereReferencePeer::PASMAX, $this->pasmax);
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURREFERENCE)) $criteria->add(CommonEnchereReferencePeer::VALEURREFERENCE, $this->valeurreference);
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE)) $criteria->add(CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE, $this->valeurdepartcommune);
        if ($this->isColumnModified(CommonEnchereReferencePeer::VALEURDEPART)) $criteria->add(CommonEnchereReferencePeer::VALEURDEPART, $this->valeurdepart);
        if ($this->isColumnModified(CommonEnchereReferencePeer::TYPEBAREMEREFERENCE)) $criteria->add(CommonEnchereReferencePeer::TYPEBAREMEREFERENCE, $this->typebaremereference);
        if ($this->isColumnModified(CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE)) $criteria->add(CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE, $this->ponderationnotereference);
        if ($this->isColumnModified(CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF)) $criteria->add(CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF, $this->notemaxbaremerelatif);

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
        $criteria = new Criteria(CommonEnchereReferencePeer::DATABASE_NAME);
        $criteria->add(CommonEnchereReferencePeer::ID, $this->id);
        $criteria->add(CommonEnchereReferencePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonEnchereReference (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdenchere($this->getIdenchere());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setQuantite($this->getQuantite());
        $copyObj->setIsmontant($this->getIsmontant());
        $copyObj->setUnite($this->getUnite());
        $copyObj->setPasmin($this->getPasmin());
        $copyObj->setPasmax($this->getPasmax());
        $copyObj->setValeurreference($this->getValeurreference());
        $copyObj->setValeurdepartcommune($this->getValeurdepartcommune());
        $copyObj->setValeurdepart($this->getValeurdepart());
        $copyObj->setTypebaremereference($this->getTypebaremereference());
        $copyObj->setPonderationnotereference($this->getPonderationnotereference());
        $copyObj->setNotemaxbaremerelatif($this->getNotemaxbaremerelatif());
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
     * @return CommonEnchereReference Clone of current object.
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
     * @return CommonEnchereReferencePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEnchereReferencePeer();
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
        $this->idenchere = null;
        $this->libelle = null;
        $this->quantite = null;
        $this->ismontant = null;
        $this->unite = null;
        $this->pasmin = null;
        $this->pasmax = null;
        $this->valeurreference = null;
        $this->valeurdepartcommune = null;
        $this->valeurdepart = null;
        $this->typebaremereference = null;
        $this->ponderationnotereference = null;
        $this->notemaxbaremerelatif = null;
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
        return (string) $this->exportTo(CommonEnchereReferencePeer::DEFAULT_STRING_FORMAT);
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
