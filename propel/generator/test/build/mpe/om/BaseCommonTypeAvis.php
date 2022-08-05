<?php


/**
 * Base class that represents a row from the 'TypeAvis' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTypeAvis extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTypeAvisPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTypeAvisPeer
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
     * The value for the intitule_avis field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intitule_avis;

    /**
     * The value for the intitule_avis_fr field.
     * @var        string
     */
    protected $intitule_avis_fr;

    /**
     * The value for the intitule_avis_en field.
     * @var        string
     */
    protected $intitule_avis_en;

    /**
     * The value for the intitule_avis_es field.
     * @var        string
     */
    protected $intitule_avis_es;

    /**
     * The value for the intitule_avis_su field.
     * @var        string
     */
    protected $intitule_avis_su;

    /**
     * The value for the intitule_avis_du field.
     * @var        string
     */
    protected $intitule_avis_du;

    /**
     * The value for the intitule_avis_cz field.
     * @var        string
     */
    protected $intitule_avis_cz;

    /**
     * The value for the intitule_avis_ar field.
     * @var        string
     */
    protected $intitule_avis_ar;

    /**
     * The value for the abbreviation field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $abbreviation;

    /**
     * The value for the id_type_avis_anm field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_type_avis_anm;

    /**
     * The value for the intitule_avis_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intitule_avis_it;

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
        $this->intitule_avis = '';
        $this->abbreviation = '';
        $this->id_type_avis_anm = 0;
        $this->intitule_avis_it = '';
    }

    /**
     * Initializes internal state of BaseCommonTypeAvis object.
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
     * Get the [intitule_avis] column value.
     * 
     * @return string
     */
    public function getIntituleAvis()
    {

        return $this->intitule_avis;
    }

    /**
     * Get the [intitule_avis_fr] column value.
     * 
     * @return string
     */
    public function getIntituleAvisFr()
    {

        return $this->intitule_avis_fr;
    }

    /**
     * Get the [intitule_avis_en] column value.
     * 
     * @return string
     */
    public function getIntituleAvisEn()
    {

        return $this->intitule_avis_en;
    }

    /**
     * Get the [intitule_avis_es] column value.
     * 
     * @return string
     */
    public function getIntituleAvisEs()
    {

        return $this->intitule_avis_es;
    }

    /**
     * Get the [intitule_avis_su] column value.
     * 
     * @return string
     */
    public function getIntituleAvisSu()
    {

        return $this->intitule_avis_su;
    }

    /**
     * Get the [intitule_avis_du] column value.
     * 
     * @return string
     */
    public function getIntituleAvisDu()
    {

        return $this->intitule_avis_du;
    }

    /**
     * Get the [intitule_avis_cz] column value.
     * 
     * @return string
     */
    public function getIntituleAvisCz()
    {

        return $this->intitule_avis_cz;
    }

    /**
     * Get the [intitule_avis_ar] column value.
     * 
     * @return string
     */
    public function getIntituleAvisAr()
    {

        return $this->intitule_avis_ar;
    }

    /**
     * Get the [abbreviation] column value.
     * 
     * @return string
     */
    public function getAbbreviation()
    {

        return $this->abbreviation;
    }

    /**
     * Get the [id_type_avis_anm] column value.
     * 
     * @return int
     */
    public function getIdTypeAvisAnm()
    {

        return $this->id_type_avis_anm;
    }

    /**
     * Get the [intitule_avis_it] column value.
     * 
     * @return string
     */
    public function getIntituleAvisIt()
    {

        return $this->intitule_avis_it;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [intitule_avis] column.
     * 
     * @param string $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setIntituleAvis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_avis !== $v) {
            $this->intitule_avis = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::INTITULE_AVIS;
        }


        return $this;
    } // setIntituleAvis()

    /**
     * Set the value of [intitule_avis_fr] column.
     * 
     * @param string $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setIntituleAvisFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_avis_fr !== $v) {
            $this->intitule_avis_fr = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::INTITULE_AVIS_FR;
        }


        return $this;
    } // setIntituleAvisFr()

    /**
     * Set the value of [intitule_avis_en] column.
     * 
     * @param string $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setIntituleAvisEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_avis_en !== $v) {
            $this->intitule_avis_en = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::INTITULE_AVIS_EN;
        }


        return $this;
    } // setIntituleAvisEn()

    /**
     * Set the value of [intitule_avis_es] column.
     * 
     * @param string $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setIntituleAvisEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_avis_es !== $v) {
            $this->intitule_avis_es = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::INTITULE_AVIS_ES;
        }


        return $this;
    } // setIntituleAvisEs()

    /**
     * Set the value of [intitule_avis_su] column.
     * 
     * @param string $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setIntituleAvisSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_avis_su !== $v) {
            $this->intitule_avis_su = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::INTITULE_AVIS_SU;
        }


        return $this;
    } // setIntituleAvisSu()

    /**
     * Set the value of [intitule_avis_du] column.
     * 
     * @param string $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setIntituleAvisDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_avis_du !== $v) {
            $this->intitule_avis_du = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::INTITULE_AVIS_DU;
        }


        return $this;
    } // setIntituleAvisDu()

    /**
     * Set the value of [intitule_avis_cz] column.
     * 
     * @param string $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setIntituleAvisCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_avis_cz !== $v) {
            $this->intitule_avis_cz = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::INTITULE_AVIS_CZ;
        }


        return $this;
    } // setIntituleAvisCz()

    /**
     * Set the value of [intitule_avis_ar] column.
     * 
     * @param string $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setIntituleAvisAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_avis_ar !== $v) {
            $this->intitule_avis_ar = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::INTITULE_AVIS_AR;
        }


        return $this;
    } // setIntituleAvisAr()

    /**
     * Set the value of [abbreviation] column.
     * 
     * @param string $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setAbbreviation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abbreviation !== $v) {
            $this->abbreviation = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::ABBREVIATION;
        }


        return $this;
    } // setAbbreviation()

    /**
     * Set the value of [id_type_avis_anm] column.
     * 
     * @param int $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setIdTypeAvisAnm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_avis_anm !== $v) {
            $this->id_type_avis_anm = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::ID_TYPE_AVIS_ANM;
        }


        return $this;
    } // setIdTypeAvisAnm()

    /**
     * Set the value of [intitule_avis_it] column.
     * 
     * @param string $v new value
     * @return CommonTypeAvis The current object (for fluent API support)
     */
    public function setIntituleAvisIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_avis_it !== $v) {
            $this->intitule_avis_it = $v;
            $this->modifiedColumns[] = CommonTypeAvisPeer::INTITULE_AVIS_IT;
        }


        return $this;
    } // setIntituleAvisIt()

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
            if ($this->intitule_avis !== '') {
                return false;
            }

            if ($this->abbreviation !== '') {
                return false;
            }

            if ($this->id_type_avis_anm !== 0) {
                return false;
            }

            if ($this->intitule_avis_it !== '') {
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
            $this->intitule_avis = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->intitule_avis_fr = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->intitule_avis_en = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->intitule_avis_es = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->intitule_avis_su = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->intitule_avis_du = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->intitule_avis_cz = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->intitule_avis_ar = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->abbreviation = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->id_type_avis_anm = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->intitule_avis_it = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CommonTypeAvisPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTypeAvis object", $e);
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
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTypeAvisPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTypeAvisQuery::create()
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
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTypeAvisPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTypeAvisPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTypeAvisPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTypeAvisPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_avis`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_FR)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_avis_fr`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_EN)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_avis_en`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_ES)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_avis_es`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_SU)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_avis_su`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_DU)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_avis_du`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_avis_cz`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_AR)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_avis_ar`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::ABBREVIATION)) {
            $modifiedColumns[':p' . $index++]  = '`abbreviation`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::ID_TYPE_AVIS_ANM)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_avis_ANM`';
        }
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_IT)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_avis_it`';
        }

        $sql = sprintf(
            'INSERT INTO `TypeAvis` (%s) VALUES (%s)',
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
                    case '`intitule_avis`':						
                        $stmt->bindValue($identifier, $this->intitule_avis, PDO::PARAM_STR);
                        break;
                    case '`intitule_avis_fr`':						
                        $stmt->bindValue($identifier, $this->intitule_avis_fr, PDO::PARAM_STR);
                        break;
                    case '`intitule_avis_en`':						
                        $stmt->bindValue($identifier, $this->intitule_avis_en, PDO::PARAM_STR);
                        break;
                    case '`intitule_avis_es`':						
                        $stmt->bindValue($identifier, $this->intitule_avis_es, PDO::PARAM_STR);
                        break;
                    case '`intitule_avis_su`':						
                        $stmt->bindValue($identifier, $this->intitule_avis_su, PDO::PARAM_STR);
                        break;
                    case '`intitule_avis_du`':						
                        $stmt->bindValue($identifier, $this->intitule_avis_du, PDO::PARAM_STR);
                        break;
                    case '`intitule_avis_cz`':						
                        $stmt->bindValue($identifier, $this->intitule_avis_cz, PDO::PARAM_STR);
                        break;
                    case '`intitule_avis_ar`':						
                        $stmt->bindValue($identifier, $this->intitule_avis_ar, PDO::PARAM_STR);
                        break;
                    case '`abbreviation`':						
                        $stmt->bindValue($identifier, $this->abbreviation, PDO::PARAM_STR);
                        break;
                    case '`id_type_avis_ANM`':						
                        $stmt->bindValue($identifier, $this->id_type_avis_anm, PDO::PARAM_INT);
                        break;
                    case '`intitule_avis_it`':						
                        $stmt->bindValue($identifier, $this->intitule_avis_it, PDO::PARAM_STR);
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


            if (($retval = CommonTypeAvisPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTypeAvisPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIntituleAvis();
                break;
            case 2:
                return $this->getIntituleAvisFr();
                break;
            case 3:
                return $this->getIntituleAvisEn();
                break;
            case 4:
                return $this->getIntituleAvisEs();
                break;
            case 5:
                return $this->getIntituleAvisSu();
                break;
            case 6:
                return $this->getIntituleAvisDu();
                break;
            case 7:
                return $this->getIntituleAvisCz();
                break;
            case 8:
                return $this->getIntituleAvisAr();
                break;
            case 9:
                return $this->getAbbreviation();
                break;
            case 10:
                return $this->getIdTypeAvisAnm();
                break;
            case 11:
                return $this->getIntituleAvisIt();
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
        if (isset($alreadyDumpedObjects['CommonTypeAvis'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTypeAvis'][$this->getPrimaryKey()] = true;
        $keys = CommonTypeAvisPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIntituleAvis(),
            $keys[2] => $this->getIntituleAvisFr(),
            $keys[3] => $this->getIntituleAvisEn(),
            $keys[4] => $this->getIntituleAvisEs(),
            $keys[5] => $this->getIntituleAvisSu(),
            $keys[6] => $this->getIntituleAvisDu(),
            $keys[7] => $this->getIntituleAvisCz(),
            $keys[8] => $this->getIntituleAvisAr(),
            $keys[9] => $this->getAbbreviation(),
            $keys[10] => $this->getIdTypeAvisAnm(),
            $keys[11] => $this->getIntituleAvisIt(),
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
        $pos = CommonTypeAvisPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIntituleAvis($value);
                break;
            case 2:
                $this->setIntituleAvisFr($value);
                break;
            case 3:
                $this->setIntituleAvisEn($value);
                break;
            case 4:
                $this->setIntituleAvisEs($value);
                break;
            case 5:
                $this->setIntituleAvisSu($value);
                break;
            case 6:
                $this->setIntituleAvisDu($value);
                break;
            case 7:
                $this->setIntituleAvisCz($value);
                break;
            case 8:
                $this->setIntituleAvisAr($value);
                break;
            case 9:
                $this->setAbbreviation($value);
                break;
            case 10:
                $this->setIdTypeAvisAnm($value);
                break;
            case 11:
                $this->setIntituleAvisIt($value);
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
        $keys = CommonTypeAvisPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIntituleAvis($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIntituleAvisFr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIntituleAvisEn($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIntituleAvisEs($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIntituleAvisSu($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIntituleAvisDu($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIntituleAvisCz($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIntituleAvisAr($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAbbreviation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIdTypeAvisAnm($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIntituleAvisIt($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTypeAvisPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTypeAvisPeer::ID)) $criteria->add(CommonTypeAvisPeer::ID, $this->id);
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS)) $criteria->add(CommonTypeAvisPeer::INTITULE_AVIS, $this->intitule_avis);
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_FR)) $criteria->add(CommonTypeAvisPeer::INTITULE_AVIS_FR, $this->intitule_avis_fr);
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_EN)) $criteria->add(CommonTypeAvisPeer::INTITULE_AVIS_EN, $this->intitule_avis_en);
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_ES)) $criteria->add(CommonTypeAvisPeer::INTITULE_AVIS_ES, $this->intitule_avis_es);
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_SU)) $criteria->add(CommonTypeAvisPeer::INTITULE_AVIS_SU, $this->intitule_avis_su);
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_DU)) $criteria->add(CommonTypeAvisPeer::INTITULE_AVIS_DU, $this->intitule_avis_du);
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_CZ)) $criteria->add(CommonTypeAvisPeer::INTITULE_AVIS_CZ, $this->intitule_avis_cz);
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_AR)) $criteria->add(CommonTypeAvisPeer::INTITULE_AVIS_AR, $this->intitule_avis_ar);
        if ($this->isColumnModified(CommonTypeAvisPeer::ABBREVIATION)) $criteria->add(CommonTypeAvisPeer::ABBREVIATION, $this->abbreviation);
        if ($this->isColumnModified(CommonTypeAvisPeer::ID_TYPE_AVIS_ANM)) $criteria->add(CommonTypeAvisPeer::ID_TYPE_AVIS_ANM, $this->id_type_avis_anm);
        if ($this->isColumnModified(CommonTypeAvisPeer::INTITULE_AVIS_IT)) $criteria->add(CommonTypeAvisPeer::INTITULE_AVIS_IT, $this->intitule_avis_it);

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
        $criteria = new Criteria(CommonTypeAvisPeer::DATABASE_NAME);
        $criteria->add(CommonTypeAvisPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonTypeAvis (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntituleAvis($this->getIntituleAvis());
        $copyObj->setIntituleAvisFr($this->getIntituleAvisFr());
        $copyObj->setIntituleAvisEn($this->getIntituleAvisEn());
        $copyObj->setIntituleAvisEs($this->getIntituleAvisEs());
        $copyObj->setIntituleAvisSu($this->getIntituleAvisSu());
        $copyObj->setIntituleAvisDu($this->getIntituleAvisDu());
        $copyObj->setIntituleAvisCz($this->getIntituleAvisCz());
        $copyObj->setIntituleAvisAr($this->getIntituleAvisAr());
        $copyObj->setAbbreviation($this->getAbbreviation());
        $copyObj->setIdTypeAvisAnm($this->getIdTypeAvisAnm());
        $copyObj->setIntituleAvisIt($this->getIntituleAvisIt());
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
     * @return CommonTypeAvis Clone of current object.
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
     * @return CommonTypeAvisPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTypeAvisPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->intitule_avis = null;
        $this->intitule_avis_fr = null;
        $this->intitule_avis_en = null;
        $this->intitule_avis_es = null;
        $this->intitule_avis_su = null;
        $this->intitule_avis_du = null;
        $this->intitule_avis_cz = null;
        $this->intitule_avis_ar = null;
        $this->abbreviation = null;
        $this->id_type_avis_anm = null;
        $this->intitule_avis_it = null;
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
        return (string) $this->exportTo(CommonTypeAvisPeer::DEFAULT_STRING_FORMAT);
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
