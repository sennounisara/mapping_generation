<?php


/**
 * Base class that represents a row from the 'ValeurReferentiel' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonValeurReferentiel extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonValeurReferentielPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonValeurReferentielPeer
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
     * The value for the id_referentiel field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_referentiel;

    /**
     * The value for the libelle_valeur_referentiel field.
     * @var        string
     */
    protected $libelle_valeur_referentiel;

    /**
     * The value for the libelle_valeur_referentiel_fr field.
     * @var        string
     */
    protected $libelle_valeur_referentiel_fr;

    /**
     * The value for the libelle_valeur_referentiel_en field.
     * @var        string
     */
    protected $libelle_valeur_referentiel_en;

    /**
     * The value for the libelle_valeur_referentiel_es field.
     * @var        string
     */
    protected $libelle_valeur_referentiel_es;

    /**
     * The value for the libelle_valeur_referentiel_su field.
     * @var        string
     */
    protected $libelle_valeur_referentiel_su;

    /**
     * The value for the libelle_valeur_referentiel_du field.
     * @var        string
     */
    protected $libelle_valeur_referentiel_du;

    /**
     * The value for the libelle_valeur_referentiel_cz field.
     * @var        string
     */
    protected $libelle_valeur_referentiel_cz;

    /**
     * The value for the libelle_valeur_referentiel_ar field.
     * @var        string
     */
    protected $libelle_valeur_referentiel_ar;

    /**
     * The value for the libelle_2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_2;

    /**
     * The value for the libelle_valeur_referentiel_it field.
     * @var        string
     */
    protected $libelle_valeur_referentiel_it;

    /**
     * The value for the valeur_sub field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $valeur_sub;

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
        $this->id_referentiel = 0;
        $this->libelle_2 = '';
        $this->valeur_sub = '';
    }

    /**
     * Initializes internal state of BaseCommonValeurReferentiel object.
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
     * Get the [id_referentiel] column value.
     * 
     * @return int
     */
    public function getIdReferentiel()
    {

        return $this->id_referentiel;
    }

    /**
     * Get the [libelle_valeur_referentiel] column value.
     * 
     * @return string
     */
    public function getLibelleValeurReferentiel()
    {

        return $this->libelle_valeur_referentiel;
    }

    /**
     * Get the [libelle_valeur_referentiel_fr] column value.
     * 
     * @return string
     */
    public function getLibelleValeurReferentielFr()
    {

        return $this->libelle_valeur_referentiel_fr;
    }

    /**
     * Get the [libelle_valeur_referentiel_en] column value.
     * 
     * @return string
     */
    public function getLibelleValeurReferentielEn()
    {

        return $this->libelle_valeur_referentiel_en;
    }

    /**
     * Get the [libelle_valeur_referentiel_es] column value.
     * 
     * @return string
     */
    public function getLibelleValeurReferentielEs()
    {

        return $this->libelle_valeur_referentiel_es;
    }

    /**
     * Get the [libelle_valeur_referentiel_su] column value.
     * 
     * @return string
     */
    public function getLibelleValeurReferentielSu()
    {

        return $this->libelle_valeur_referentiel_su;
    }

    /**
     * Get the [libelle_valeur_referentiel_du] column value.
     * 
     * @return string
     */
    public function getLibelleValeurReferentielDu()
    {

        return $this->libelle_valeur_referentiel_du;
    }

    /**
     * Get the [libelle_valeur_referentiel_cz] column value.
     * 
     * @return string
     */
    public function getLibelleValeurReferentielCz()
    {

        return $this->libelle_valeur_referentiel_cz;
    }

    /**
     * Get the [libelle_valeur_referentiel_ar] column value.
     * 
     * @return string
     */
    public function getLibelleValeurReferentielAr()
    {

        return $this->libelle_valeur_referentiel_ar;
    }

    /**
     * Get the [libelle_2] column value.
     * 
     * @return string
     */
    public function getLibelle2()
    {

        return $this->libelle_2;
    }

    /**
     * Get the [libelle_valeur_referentiel_it] column value.
     * 
     * @return string
     */
    public function getLibelleValeurReferentielIt()
    {

        return $this->libelle_valeur_referentiel_it;
    }

    /**
     * Get the [valeur_sub] column value.
     * 
     * @return string
     */
    public function getValeurSub()
    {

        return $this->valeur_sub;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_referentiel] column.
     * 
     * @param int $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setIdReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_referentiel !== $v) {
            $this->id_referentiel = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::ID_REFERENTIEL;
        }


        return $this;
    } // setIdReferentiel()

    /**
     * Set the value of [libelle_valeur_referentiel] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_referentiel !== $v) {
            $this->libelle_valeur_referentiel = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL;
        }


        return $this;
    } // setLibelleValeurReferentiel()

    /**
     * Set the value of [libelle_valeur_referentiel_fr] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurReferentielFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_referentiel_fr !== $v) {
            $this->libelle_valeur_referentiel_fr = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_FR;
        }


        return $this;
    } // setLibelleValeurReferentielFr()

    /**
     * Set the value of [libelle_valeur_referentiel_en] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurReferentielEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_referentiel_en !== $v) {
            $this->libelle_valeur_referentiel_en = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_EN;
        }


        return $this;
    } // setLibelleValeurReferentielEn()

    /**
     * Set the value of [libelle_valeur_referentiel_es] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurReferentielEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_referentiel_es !== $v) {
            $this->libelle_valeur_referentiel_es = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_ES;
        }


        return $this;
    } // setLibelleValeurReferentielEs()

    /**
     * Set the value of [libelle_valeur_referentiel_su] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurReferentielSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_referentiel_su !== $v) {
            $this->libelle_valeur_referentiel_su = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_SU;
        }


        return $this;
    } // setLibelleValeurReferentielSu()

    /**
     * Set the value of [libelle_valeur_referentiel_du] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurReferentielDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_referentiel_du !== $v) {
            $this->libelle_valeur_referentiel_du = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_DU;
        }


        return $this;
    } // setLibelleValeurReferentielDu()

    /**
     * Set the value of [libelle_valeur_referentiel_cz] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurReferentielCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_referentiel_cz !== $v) {
            $this->libelle_valeur_referentiel_cz = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_CZ;
        }


        return $this;
    } // setLibelleValeurReferentielCz()

    /**
     * Set the value of [libelle_valeur_referentiel_ar] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurReferentielAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_referentiel_ar !== $v) {
            $this->libelle_valeur_referentiel_ar = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_AR;
        }


        return $this;
    } // setLibelleValeurReferentielAr()

    /**
     * Set the value of [libelle_2] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelle2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_2 !== $v) {
            $this->libelle_2 = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::LIBELLE_2;
        }


        return $this;
    } // setLibelle2()

    /**
     * Set the value of [libelle_valeur_referentiel_it] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurReferentielIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_referentiel_it !== $v) {
            $this->libelle_valeur_referentiel_it = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_IT;
        }


        return $this;
    } // setLibelleValeurReferentielIt()

    /**
     * Set the value of [valeur_sub] column.
     * 
     * @param string $v new value
     * @return CommonValeurReferentiel The current object (for fluent API support)
     */
    public function setValeurSub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_sub !== $v) {
            $this->valeur_sub = $v;
            $this->modifiedColumns[] = CommonValeurReferentielPeer::VALEUR_SUB;
        }


        return $this;
    } // setValeurSub()

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
            if ($this->id_referentiel !== 0) {
                return false;
            }

            if ($this->libelle_2 !== '') {
                return false;
            }

            if ($this->valeur_sub !== '') {
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
            $this->id_referentiel = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->libelle_valeur_referentiel = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle_valeur_referentiel_fr = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->libelle_valeur_referentiel_en = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->libelle_valeur_referentiel_es = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->libelle_valeur_referentiel_su = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->libelle_valeur_referentiel_du = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->libelle_valeur_referentiel_cz = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->libelle_valeur_referentiel_ar = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->libelle_2 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->libelle_valeur_referentiel_it = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->valeur_sub = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = CommonValeurReferentielPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonValeurReferentiel object", $e);
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
            $con = Propel::getConnection(CommonValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonValeurReferentielPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonValeurReferentielQuery::create()
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
            $con = Propel::getConnection(CommonValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonValeurReferentielPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonValeurReferentielPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonValeurReferentielPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonValeurReferentielPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::ID_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`id_referentiel`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_valeur_referentiel`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_valeur_referentiel_fr`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_valeur_referentiel_en`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_ES)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_valeur_referentiel_es`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_SU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_valeur_referentiel_su`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_DU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_valeur_referentiel_du`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_valeur_referentiel_cz`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_valeur_referentiel_ar`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_2)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_2`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_IT)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_valeur_referentiel_it`';
        }
        if ($this->isColumnModified(CommonValeurReferentielPeer::VALEUR_SUB)) {
            $modifiedColumns[':p' . $index++]  = '`valeur_sub`';
        }

        $sql = sprintf(
            'INSERT INTO `ValeurReferentiel` (%s) VALUES (%s)',
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
                    case '`id_referentiel`':						
                        $stmt->bindValue($identifier, $this->id_referentiel, PDO::PARAM_INT);
                        break;
                    case '`libelle_valeur_referentiel`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_referentiel, PDO::PARAM_STR);
                        break;
                    case '`libelle_valeur_referentiel_fr`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_referentiel_fr, PDO::PARAM_STR);
                        break;
                    case '`libelle_valeur_referentiel_en`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_referentiel_en, PDO::PARAM_STR);
                        break;
                    case '`libelle_valeur_referentiel_es`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_referentiel_es, PDO::PARAM_STR);
                        break;
                    case '`libelle_valeur_referentiel_su`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_referentiel_su, PDO::PARAM_STR);
                        break;
                    case '`libelle_valeur_referentiel_du`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_referentiel_du, PDO::PARAM_STR);
                        break;
                    case '`libelle_valeur_referentiel_cz`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_referentiel_cz, PDO::PARAM_STR);
                        break;
                    case '`libelle_valeur_referentiel_ar`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_referentiel_ar, PDO::PARAM_STR);
                        break;
                    case '`libelle_2`':						
                        $stmt->bindValue($identifier, $this->libelle_2, PDO::PARAM_STR);
                        break;
                    case '`libelle_valeur_referentiel_it`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_referentiel_it, PDO::PARAM_STR);
                        break;
                    case '`valeur_sub`':						
                        $stmt->bindValue($identifier, $this->valeur_sub, PDO::PARAM_STR);
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


            if (($retval = CommonValeurReferentielPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonValeurReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdReferentiel();
                break;
            case 2:
                return $this->getLibelleValeurReferentiel();
                break;
            case 3:
                return $this->getLibelleValeurReferentielFr();
                break;
            case 4:
                return $this->getLibelleValeurReferentielEn();
                break;
            case 5:
                return $this->getLibelleValeurReferentielEs();
                break;
            case 6:
                return $this->getLibelleValeurReferentielSu();
                break;
            case 7:
                return $this->getLibelleValeurReferentielDu();
                break;
            case 8:
                return $this->getLibelleValeurReferentielCz();
                break;
            case 9:
                return $this->getLibelleValeurReferentielAr();
                break;
            case 10:
                return $this->getLibelle2();
                break;
            case 11:
                return $this->getLibelleValeurReferentielIt();
                break;
            case 12:
                return $this->getValeurSub();
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
        if (isset($alreadyDumpedObjects['CommonValeurReferentiel'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonValeurReferentiel'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonValeurReferentielPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdReferentiel(),
            $keys[2] => $this->getLibelleValeurReferentiel(),
            $keys[3] => $this->getLibelleValeurReferentielFr(),
            $keys[4] => $this->getLibelleValeurReferentielEn(),
            $keys[5] => $this->getLibelleValeurReferentielEs(),
            $keys[6] => $this->getLibelleValeurReferentielSu(),
            $keys[7] => $this->getLibelleValeurReferentielDu(),
            $keys[8] => $this->getLibelleValeurReferentielCz(),
            $keys[9] => $this->getLibelleValeurReferentielAr(),
            $keys[10] => $this->getLibelle2(),
            $keys[11] => $this->getLibelleValeurReferentielIt(),
            $keys[12] => $this->getValeurSub(),
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
        $pos = CommonValeurReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdReferentiel($value);
                break;
            case 2:
                $this->setLibelleValeurReferentiel($value);
                break;
            case 3:
                $this->setLibelleValeurReferentielFr($value);
                break;
            case 4:
                $this->setLibelleValeurReferentielEn($value);
                break;
            case 5:
                $this->setLibelleValeurReferentielEs($value);
                break;
            case 6:
                $this->setLibelleValeurReferentielSu($value);
                break;
            case 7:
                $this->setLibelleValeurReferentielDu($value);
                break;
            case 8:
                $this->setLibelleValeurReferentielCz($value);
                break;
            case 9:
                $this->setLibelleValeurReferentielAr($value);
                break;
            case 10:
                $this->setLibelle2($value);
                break;
            case 11:
                $this->setLibelleValeurReferentielIt($value);
                break;
            case 12:
                $this->setValeurSub($value);
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
        $keys = CommonValeurReferentielPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdReferentiel($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelleValeurReferentiel($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleValeurReferentielFr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLibelleValeurReferentielEn($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLibelleValeurReferentielEs($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLibelleValeurReferentielSu($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLibelleValeurReferentielDu($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLibelleValeurReferentielCz($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLibelleValeurReferentielAr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLibelle2($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLibelleValeurReferentielIt($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setValeurSub($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonValeurReferentielPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonValeurReferentielPeer::ID)) $criteria->add(CommonValeurReferentielPeer::ID, $this->id);
        if ($this->isColumnModified(CommonValeurReferentielPeer::ID_REFERENTIEL)) $criteria->add(CommonValeurReferentielPeer::ID_REFERENTIEL, $this->id_referentiel);
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL)) $criteria->add(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL, $this->libelle_valeur_referentiel);
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_FR)) $criteria->add(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_FR, $this->libelle_valeur_referentiel_fr);
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_EN)) $criteria->add(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_EN, $this->libelle_valeur_referentiel_en);
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_ES)) $criteria->add(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_ES, $this->libelle_valeur_referentiel_es);
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_SU)) $criteria->add(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_SU, $this->libelle_valeur_referentiel_su);
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_DU)) $criteria->add(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_DU, $this->libelle_valeur_referentiel_du);
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_CZ)) $criteria->add(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_CZ, $this->libelle_valeur_referentiel_cz);
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_AR)) $criteria->add(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_AR, $this->libelle_valeur_referentiel_ar);
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_2)) $criteria->add(CommonValeurReferentielPeer::LIBELLE_2, $this->libelle_2);
        if ($this->isColumnModified(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_IT)) $criteria->add(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_IT, $this->libelle_valeur_referentiel_it);
        if ($this->isColumnModified(CommonValeurReferentielPeer::VALEUR_SUB)) $criteria->add(CommonValeurReferentielPeer::VALEUR_SUB, $this->valeur_sub);

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
        $criteria = new Criteria(CommonValeurReferentielPeer::DATABASE_NAME);
        $criteria->add(CommonValeurReferentielPeer::ID, $this->id);
        $criteria->add(CommonValeurReferentielPeer::ID_REFERENTIEL, $this->id_referentiel);

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
        $pks[1] = $this->getIdReferentiel();

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
        $this->setIdReferentiel($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getIdReferentiel());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonValeurReferentiel (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdReferentiel($this->getIdReferentiel());
        $copyObj->setLibelleValeurReferentiel($this->getLibelleValeurReferentiel());
        $copyObj->setLibelleValeurReferentielFr($this->getLibelleValeurReferentielFr());
        $copyObj->setLibelleValeurReferentielEn($this->getLibelleValeurReferentielEn());
        $copyObj->setLibelleValeurReferentielEs($this->getLibelleValeurReferentielEs());
        $copyObj->setLibelleValeurReferentielSu($this->getLibelleValeurReferentielSu());
        $copyObj->setLibelleValeurReferentielDu($this->getLibelleValeurReferentielDu());
        $copyObj->setLibelleValeurReferentielCz($this->getLibelleValeurReferentielCz());
        $copyObj->setLibelleValeurReferentielAr($this->getLibelleValeurReferentielAr());
        $copyObj->setLibelle2($this->getLibelle2());
        $copyObj->setLibelleValeurReferentielIt($this->getLibelleValeurReferentielIt());
        $copyObj->setValeurSub($this->getValeurSub());
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
     * @return CommonValeurReferentiel Clone of current object.
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
     * @return CommonValeurReferentielPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonValeurReferentielPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_referentiel = null;
        $this->libelle_valeur_referentiel = null;
        $this->libelle_valeur_referentiel_fr = null;
        $this->libelle_valeur_referentiel_en = null;
        $this->libelle_valeur_referentiel_es = null;
        $this->libelle_valeur_referentiel_su = null;
        $this->libelle_valeur_referentiel_du = null;
        $this->libelle_valeur_referentiel_cz = null;
        $this->libelle_valeur_referentiel_ar = null;
        $this->libelle_2 = null;
        $this->libelle_valeur_referentiel_it = null;
        $this->valeur_sub = null;
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
        return (string) $this->exportTo(CommonValeurReferentielPeer::DEFAULT_STRING_FORMAT);
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
