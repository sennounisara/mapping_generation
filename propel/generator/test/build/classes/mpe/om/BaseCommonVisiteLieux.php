<?php


/**
 * Base class that represents a row from the 'visite_lieux' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonVisiteLieux extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonVisiteLieuxPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonVisiteLieuxPeer
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
     * The value for the reference field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $reference;

    /**
     * The value for the adresse field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the id_tr_adresse field.
     * @var        int
     */
    protected $id_tr_adresse;

    /**
     * The value for the date field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $date;

    /**
     * The value for the lot field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lot;

    /**
     * The value for the adresse_fr field.
     * @var        string
     */
    protected $adresse_fr;

    /**
     * The value for the adresse_en field.
     * @var        string
     */
    protected $adresse_en;

    /**
     * The value for the adresse_es field.
     * @var        string
     */
    protected $adresse_es;

    /**
     * The value for the adresse_su field.
     * @var        string
     */
    protected $adresse_su;

    /**
     * The value for the adresse_du field.
     * @var        string
     */
    protected $adresse_du;

    /**
     * The value for the adresse_cz field.
     * @var        string
     */
    protected $adresse_cz;

    /**
     * The value for the adresse_ar field.
     * @var        string
     */
    protected $adresse_ar;

    /**
     * The value for the adresse_it field.
     * @var        string
     */
    protected $adresse_it;

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
        $this->organisme = '';
        $this->reference = 0;
        $this->adresse = '';
        $this->date = '';
        $this->lot = '';
    }

    /**
     * Initializes internal state of BaseCommonVisiteLieux object.
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
     * Get the [reference] column value.
     * 
     * @return int
     */
    public function getReference()
    {

        return $this->reference;
    }

    /**
     * Get the [adresse] column value.
     * 
     * @return string
     */
    public function getAdresse()
    {

        return $this->adresse;
    }

    /**
     * Get the [id_tr_adresse] column value.
     * 
     * @return int
     */
    public function getIdTrAdresse()
    {

        return $this->id_tr_adresse;
    }

    /**
     * Get the [date] column value.
     * 
     * @return string
     */
    public function getDate()
    {

        return $this->date;
    }

    /**
     * Get the [lot] column value.
     * 
     * @return string
     */
    public function getLot()
    {

        return $this->lot;
    }

    /**
     * Get the [adresse_fr] column value.
     * 
     * @return string
     */
    public function getAdresseFr()
    {

        return $this->adresse_fr;
    }

    /**
     * Get the [adresse_en] column value.
     * 
     * @return string
     */
    public function getAdresseEn()
    {

        return $this->adresse_en;
    }

    /**
     * Get the [adresse_es] column value.
     * 
     * @return string
     */
    public function getAdresseEs()
    {

        return $this->adresse_es;
    }

    /**
     * Get the [adresse_su] column value.
     * 
     * @return string
     */
    public function getAdresseSu()
    {

        return $this->adresse_su;
    }

    /**
     * Get the [adresse_du] column value.
     * 
     * @return string
     */
    public function getAdresseDu()
    {

        return $this->adresse_du;
    }

    /**
     * Get the [adresse_cz] column value.
     * 
     * @return string
     */
    public function getAdresseCz()
    {

        return $this->adresse_cz;
    }

    /**
     * Get the [adresse_ar] column value.
     * 
     * @return string
     */
    public function getAdresseAr()
    {

        return $this->adresse_ar;
    }

    /**
     * Get the [adresse_it] column value.
     * 
     * @return string
     */
    public function getAdresseIt()
    {

        return $this->adresse_it;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ORGANISME;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [reference] column.
     * 
     * @param int $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reference !== $v) {
            $this->reference = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::REFERENCE;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setReference()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [id_tr_adresse] column.
     * 
     * @param int $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setIdTrAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_adresse !== $v) {
            $this->id_tr_adresse = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ID_TR_ADRESSE;
        }


        return $this;
    } // setIdTrAdresse()

    /**
     * Set the value of [date] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setDate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date !== $v) {
            $this->date = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::DATE;
        }


        return $this;
    } // setDate()

    /**
     * Set the value of [lot] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [adresse_fr] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setAdresseFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_fr !== $v) {
            $this->adresse_fr = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ADRESSE_FR;
        }


        return $this;
    } // setAdresseFr()

    /**
     * Set the value of [adresse_en] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setAdresseEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_en !== $v) {
            $this->adresse_en = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ADRESSE_EN;
        }


        return $this;
    } // setAdresseEn()

    /**
     * Set the value of [adresse_es] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setAdresseEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_es !== $v) {
            $this->adresse_es = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ADRESSE_ES;
        }


        return $this;
    } // setAdresseEs()

    /**
     * Set the value of [adresse_su] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setAdresseSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_su !== $v) {
            $this->adresse_su = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ADRESSE_SU;
        }


        return $this;
    } // setAdresseSu()

    /**
     * Set the value of [adresse_du] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setAdresseDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_du !== $v) {
            $this->adresse_du = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ADRESSE_DU;
        }


        return $this;
    } // setAdresseDu()

    /**
     * Set the value of [adresse_cz] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setAdresseCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_cz !== $v) {
            $this->adresse_cz = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ADRESSE_CZ;
        }


        return $this;
    } // setAdresseCz()

    /**
     * Set the value of [adresse_ar] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setAdresseAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_ar !== $v) {
            $this->adresse_ar = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ADRESSE_AR;
        }


        return $this;
    } // setAdresseAr()

    /**
     * Set the value of [adresse_it] column.
     * 
     * @param string $v new value
     * @return CommonVisiteLieux The current object (for fluent API support)
     */
    public function setAdresseIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_it !== $v) {
            $this->adresse_it = $v;
            $this->modifiedColumns[] = CommonVisiteLieuxPeer::ADRESSE_IT;
        }


        return $this;
    } // setAdresseIt()

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

            if ($this->reference !== 0) {
                return false;
            }

            if ($this->adresse !== '') {
                return false;
            }

            if ($this->date !== '') {
                return false;
            }

            if ($this->lot !== '') {
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
            $this->reference = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->adresse = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_tr_adresse = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->date = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->lot = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->adresse_fr = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->adresse_en = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->adresse_es = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->adresse_su = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->adresse_du = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->adresse_cz = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->adresse_ar = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->adresse_it = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = CommonVisiteLieuxPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonVisiteLieux object", $e);
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

        if ($this->aCommonConsultation !== null && $this->organisme !== $this->aCommonConsultation->getOrganisme()) {
            $this->aCommonConsultation = null;
        }
        if ($this->aCommonConsultation !== null && $this->reference !== $this->aCommonConsultation->getReference()) {
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
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonVisiteLieuxPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonVisiteLieuxQuery::create()
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
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonVisiteLieuxPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonVisiteLieuxPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonVisiteLieuxPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`reference`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ID_TR_ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_adresse`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_fr`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_en`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_es`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_su`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_du`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_cz`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_ar`';
        }
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_it`';
        }

        $sql = sprintf(
            'INSERT INTO `visite_lieux` (%s) VALUES (%s)',
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
                    case '`reference`':						
                        $stmt->bindValue($identifier, $this->reference, PDO::PARAM_INT);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`id_tr_adresse`':						
                        $stmt->bindValue($identifier, $this->id_tr_adresse, PDO::PARAM_INT);
                        break;
                    case '`date`':						
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_STR);
                        break;
                    case '`adresse_fr`':						
                        $stmt->bindValue($identifier, $this->adresse_fr, PDO::PARAM_STR);
                        break;
                    case '`adresse_en`':						
                        $stmt->bindValue($identifier, $this->adresse_en, PDO::PARAM_STR);
                        break;
                    case '`adresse_es`':						
                        $stmt->bindValue($identifier, $this->adresse_es, PDO::PARAM_STR);
                        break;
                    case '`adresse_su`':						
                        $stmt->bindValue($identifier, $this->adresse_su, PDO::PARAM_STR);
                        break;
                    case '`adresse_du`':						
                        $stmt->bindValue($identifier, $this->adresse_du, PDO::PARAM_STR);
                        break;
                    case '`adresse_cz`':						
                        $stmt->bindValue($identifier, $this->adresse_cz, PDO::PARAM_STR);
                        break;
                    case '`adresse_ar`':						
                        $stmt->bindValue($identifier, $this->adresse_ar, PDO::PARAM_STR);
                        break;
                    case '`adresse_it`':						
                        $stmt->bindValue($identifier, $this->adresse_it, PDO::PARAM_STR);
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


            if (($retval = CommonVisiteLieuxPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonVisiteLieuxPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getReference();
                break;
            case 3:
                return $this->getAdresse();
                break;
            case 4:
                return $this->getIdTrAdresse();
                break;
            case 5:
                return $this->getDate();
                break;
            case 6:
                return $this->getLot();
                break;
            case 7:
                return $this->getAdresseFr();
                break;
            case 8:
                return $this->getAdresseEn();
                break;
            case 9:
                return $this->getAdresseEs();
                break;
            case 10:
                return $this->getAdresseSu();
                break;
            case 11:
                return $this->getAdresseDu();
                break;
            case 12:
                return $this->getAdresseCz();
                break;
            case 13:
                return $this->getAdresseAr();
                break;
            case 14:
                return $this->getAdresseIt();
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
        if (isset($alreadyDumpedObjects['CommonVisiteLieux'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonVisiteLieux'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonVisiteLieuxPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getReference(),
            $keys[3] => $this->getAdresse(),
            $keys[4] => $this->getIdTrAdresse(),
            $keys[5] => $this->getDate(),
            $keys[6] => $this->getLot(),
            $keys[7] => $this->getAdresseFr(),
            $keys[8] => $this->getAdresseEn(),
            $keys[9] => $this->getAdresseEs(),
            $keys[10] => $this->getAdresseSu(),
            $keys[11] => $this->getAdresseDu(),
            $keys[12] => $this->getAdresseCz(),
            $keys[13] => $this->getAdresseAr(),
            $keys[14] => $this->getAdresseIt(),
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
        $pos = CommonVisiteLieuxPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setReference($value);
                break;
            case 3:
                $this->setAdresse($value);
                break;
            case 4:
                $this->setIdTrAdresse($value);
                break;
            case 5:
                $this->setDate($value);
                break;
            case 6:
                $this->setLot($value);
                break;
            case 7:
                $this->setAdresseFr($value);
                break;
            case 8:
                $this->setAdresseEn($value);
                break;
            case 9:
                $this->setAdresseEs($value);
                break;
            case 10:
                $this->setAdresseSu($value);
                break;
            case 11:
                $this->setAdresseDu($value);
                break;
            case 12:
                $this->setAdresseCz($value);
                break;
            case 13:
                $this->setAdresseAr($value);
                break;
            case 14:
                $this->setAdresseIt($value);
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
        $keys = CommonVisiteLieuxPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setReference($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAdresse($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdTrAdresse($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDate($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLot($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAdresseFr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAdresseEn($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAdresseEs($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAdresseSu($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAdresseDu($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAdresseCz($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAdresseAr($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setAdresseIt($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonVisiteLieuxPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonVisiteLieuxPeer::ID)) $criteria->add(CommonVisiteLieuxPeer::ID, $this->id);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ORGANISME)) $criteria->add(CommonVisiteLieuxPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::REFERENCE)) $criteria->add(CommonVisiteLieuxPeer::REFERENCE, $this->reference);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE)) $criteria->add(CommonVisiteLieuxPeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ID_TR_ADRESSE)) $criteria->add(CommonVisiteLieuxPeer::ID_TR_ADRESSE, $this->id_tr_adresse);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::DATE)) $criteria->add(CommonVisiteLieuxPeer::DATE, $this->date);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::LOT)) $criteria->add(CommonVisiteLieuxPeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_FR)) $criteria->add(CommonVisiteLieuxPeer::ADRESSE_FR, $this->adresse_fr);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_EN)) $criteria->add(CommonVisiteLieuxPeer::ADRESSE_EN, $this->adresse_en);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_ES)) $criteria->add(CommonVisiteLieuxPeer::ADRESSE_ES, $this->adresse_es);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_SU)) $criteria->add(CommonVisiteLieuxPeer::ADRESSE_SU, $this->adresse_su);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_DU)) $criteria->add(CommonVisiteLieuxPeer::ADRESSE_DU, $this->adresse_du);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_CZ)) $criteria->add(CommonVisiteLieuxPeer::ADRESSE_CZ, $this->adresse_cz);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_AR)) $criteria->add(CommonVisiteLieuxPeer::ADRESSE_AR, $this->adresse_ar);
        if ($this->isColumnModified(CommonVisiteLieuxPeer::ADRESSE_IT)) $criteria->add(CommonVisiteLieuxPeer::ADRESSE_IT, $this->adresse_it);

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
        $criteria = new Criteria(CommonVisiteLieuxPeer::DATABASE_NAME);
        $criteria->add(CommonVisiteLieuxPeer::ID, $this->id);
        $criteria->add(CommonVisiteLieuxPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonVisiteLieux (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setReference($this->getReference());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setIdTrAdresse($this->getIdTrAdresse());
        $copyObj->setDate($this->getDate());
        $copyObj->setLot($this->getLot());
        $copyObj->setAdresseFr($this->getAdresseFr());
        $copyObj->setAdresseEn($this->getAdresseEn());
        $copyObj->setAdresseEs($this->getAdresseEs());
        $copyObj->setAdresseSu($this->getAdresseSu());
        $copyObj->setAdresseDu($this->getAdresseDu());
        $copyObj->setAdresseCz($this->getAdresseCz());
        $copyObj->setAdresseAr($this->getAdresseAr());
        $copyObj->setAdresseIt($this->getAdresseIt());

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
     * @return CommonVisiteLieux Clone of current object.
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
     * @return CommonVisiteLieuxPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonVisiteLieuxPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonVisiteLieux The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setReference(0);
        } else {
            $this->setReference($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonVisiteLieux($this);
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
        if ($this->aCommonConsultation === null && (($this->organisme !== "" && $this->organisme !== null) && $this->reference !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()->findPk(array($this->reference, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonVisiteLieuxs($this);
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
        $this->organisme = null;
        $this->reference = null;
        $this->adresse = null;
        $this->id_tr_adresse = null;
        $this->date = null;
        $this->lot = null;
        $this->adresse_fr = null;
        $this->adresse_en = null;
        $this->adresse_es = null;
        $this->adresse_su = null;
        $this->adresse_du = null;
        $this->adresse_cz = null;
        $this->adresse_ar = null;
        $this->adresse_it = null;
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
        return (string) $this->exportTo(CommonVisiteLieuxPeer::DEFAULT_STRING_FORMAT);
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
