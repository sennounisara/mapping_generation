<?php


/**
 * Base class that represents a row from the 'formejuridique' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonFormejuridique extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonFormejuridiquePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonFormejuridiquePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the formejuridique field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $formejuridique;

    /**
     * The value for the ordre field.
     * @var        int
     */
    protected $ordre;

    /**
     * The value for the libelle_formejuridique field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_formejuridique;

    /**
     * The value for the libelle_formejuridique_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_formejuridique_fr;

    /**
     * The value for the libelle_formejuridique_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_formejuridique_en;

    /**
     * The value for the libelle_formejuridique_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_formejuridique_es;

    /**
     * The value for the libelle_formejuridique_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_formejuridique_su;

    /**
     * The value for the libelle_formejuridique_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_formejuridique_du;

    /**
     * The value for the libelle_formejuridique_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_formejuridique_cz;

    /**
     * The value for the libelle_formejuridique_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_formejuridique_ar;

    /**
     * The value for the libelle_formejuridique_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_formejuridique_it;

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
        $this->formejuridique = '';
        $this->libelle_formejuridique = '';
        $this->libelle_formejuridique_fr = '';
        $this->libelle_formejuridique_en = '';
        $this->libelle_formejuridique_es = '';
        $this->libelle_formejuridique_su = '';
        $this->libelle_formejuridique_du = '';
        $this->libelle_formejuridique_cz = '';
        $this->libelle_formejuridique_ar = '';
        $this->libelle_formejuridique_it = '';
    }

    /**
     * Initializes internal state of BaseCommonFormejuridique object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [formejuridique] column value.
     * 
     * @return string
     */
    public function getFormejuridique()
    {

        return $this->formejuridique;
    }

    /**
     * Get the [ordre] column value.
     * 
     * @return int
     */
    public function getOrdre()
    {

        return $this->ordre;
    }

    /**
     * Get the [libelle_formejuridique] column value.
     * 
     * @return string
     */
    public function getLibelleFormejuridique()
    {

        return $this->libelle_formejuridique;
    }

    /**
     * Get the [libelle_formejuridique_fr] column value.
     * 
     * @return string
     */
    public function getLibelleFormejuridiqueFr()
    {

        return $this->libelle_formejuridique_fr;
    }

    /**
     * Get the [libelle_formejuridique_en] column value.
     * 
     * @return string
     */
    public function getLibelleFormejuridiqueEn()
    {

        return $this->libelle_formejuridique_en;
    }

    /**
     * Get the [libelle_formejuridique_es] column value.
     * 
     * @return string
     */
    public function getLibelleFormejuridiqueEs()
    {

        return $this->libelle_formejuridique_es;
    }

    /**
     * Get the [libelle_formejuridique_su] column value.
     * 
     * @return string
     */
    public function getLibelleFormejuridiqueSu()
    {

        return $this->libelle_formejuridique_su;
    }

    /**
     * Get the [libelle_formejuridique_du] column value.
     * 
     * @return string
     */
    public function getLibelleFormejuridiqueDu()
    {

        return $this->libelle_formejuridique_du;
    }

    /**
     * Get the [libelle_formejuridique_cz] column value.
     * 
     * @return string
     */
    public function getLibelleFormejuridiqueCz()
    {

        return $this->libelle_formejuridique_cz;
    }

    /**
     * Get the [libelle_formejuridique_ar] column value.
     * 
     * @return string
     */
    public function getLibelleFormejuridiqueAr()
    {

        return $this->libelle_formejuridique_ar;
    }

    /**
     * Get the [libelle_formejuridique_it] column value.
     * 
     * @return string
     */
    public function getLibelleFormejuridiqueIt()
    {

        return $this->libelle_formejuridique_it;
    }

    /**
     * Set the value of [formejuridique] column.
     * 
     * @param string $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setFormejuridique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->formejuridique !== $v) {
            $this->formejuridique = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::FORMEJURIDIQUE;
        }


        return $this;
    } // setFormejuridique()

    /**
     * Set the value of [ordre] column.
     * 
     * @param int $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setOrdre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordre !== $v) {
            $this->ordre = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::ORDRE;
        }


        return $this;
    } // setOrdre()

    /**
     * Set the value of [libelle_formejuridique] column.
     * 
     * @param string $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setLibelleFormejuridique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_formejuridique !== $v) {
            $this->libelle_formejuridique = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE;
        }


        return $this;
    } // setLibelleFormejuridique()

    /**
     * Set the value of [libelle_formejuridique_fr] column.
     * 
     * @param string $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setLibelleFormejuridiqueFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_formejuridique_fr !== $v) {
            $this->libelle_formejuridique_fr = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_FR;
        }


        return $this;
    } // setLibelleFormejuridiqueFr()

    /**
     * Set the value of [libelle_formejuridique_en] column.
     * 
     * @param string $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setLibelleFormejuridiqueEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_formejuridique_en !== $v) {
            $this->libelle_formejuridique_en = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_EN;
        }


        return $this;
    } // setLibelleFormejuridiqueEn()

    /**
     * Set the value of [libelle_formejuridique_es] column.
     * 
     * @param string $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setLibelleFormejuridiqueEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_formejuridique_es !== $v) {
            $this->libelle_formejuridique_es = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_ES;
        }


        return $this;
    } // setLibelleFormejuridiqueEs()

    /**
     * Set the value of [libelle_formejuridique_su] column.
     * 
     * @param string $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setLibelleFormejuridiqueSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_formejuridique_su !== $v) {
            $this->libelle_formejuridique_su = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_SU;
        }


        return $this;
    } // setLibelleFormejuridiqueSu()

    /**
     * Set the value of [libelle_formejuridique_du] column.
     * 
     * @param string $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setLibelleFormejuridiqueDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_formejuridique_du !== $v) {
            $this->libelle_formejuridique_du = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_DU;
        }


        return $this;
    } // setLibelleFormejuridiqueDu()

    /**
     * Set the value of [libelle_formejuridique_cz] column.
     * 
     * @param string $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setLibelleFormejuridiqueCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_formejuridique_cz !== $v) {
            $this->libelle_formejuridique_cz = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_CZ;
        }


        return $this;
    } // setLibelleFormejuridiqueCz()

    /**
     * Set the value of [libelle_formejuridique_ar] column.
     * 
     * @param string $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setLibelleFormejuridiqueAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_formejuridique_ar !== $v) {
            $this->libelle_formejuridique_ar = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_AR;
        }


        return $this;
    } // setLibelleFormejuridiqueAr()

    /**
     * Set the value of [libelle_formejuridique_it] column.
     * 
     * @param string $v new value
     * @return CommonFormejuridique The current object (for fluent API support)
     */
    public function setLibelleFormejuridiqueIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_formejuridique_it !== $v) {
            $this->libelle_formejuridique_it = $v;
            $this->modifiedColumns[] = CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_IT;
        }


        return $this;
    } // setLibelleFormejuridiqueIt()

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
            if ($this->formejuridique !== '') {
                return false;
            }

            if ($this->libelle_formejuridique !== '') {
                return false;
            }

            if ($this->libelle_formejuridique_fr !== '') {
                return false;
            }

            if ($this->libelle_formejuridique_en !== '') {
                return false;
            }

            if ($this->libelle_formejuridique_es !== '') {
                return false;
            }

            if ($this->libelle_formejuridique_su !== '') {
                return false;
            }

            if ($this->libelle_formejuridique_du !== '') {
                return false;
            }

            if ($this->libelle_formejuridique_cz !== '') {
                return false;
            }

            if ($this->libelle_formejuridique_ar !== '') {
                return false;
            }

            if ($this->libelle_formejuridique_it !== '') {
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

            $this->formejuridique = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->ordre = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->libelle_formejuridique = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle_formejuridique_fr = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->libelle_formejuridique_en = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->libelle_formejuridique_es = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->libelle_formejuridique_su = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->libelle_formejuridique_du = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->libelle_formejuridique_cz = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->libelle_formejuridique_ar = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->libelle_formejuridique_it = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = CommonFormejuridiquePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonFormejuridique object", $e);
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
            $con = Propel::getConnection(CommonFormejuridiquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonFormejuridiquePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonFormejuridiquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonFormejuridiqueQuery::create()
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
            $con = Propel::getConnection(CommonFormejuridiquePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonFormejuridiquePeer::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonFormejuridiquePeer::FORMEJURIDIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`formejuridique`';
        }
        if ($this->isColumnModified(CommonFormejuridiquePeer::ORDRE)) {
            $modifiedColumns[':p' . $index++]  = '`ordre`';
        }
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_formejuridique`';
        }
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_formejuridique_fr`';
        }
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_formejuridique_en`';
        }
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_formejuridique_es`';
        }
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_formejuridique_su`';
        }
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_formejuridique_du`';
        }
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_formejuridique_cz`';
        }
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_formejuridique_ar`';
        }
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_formejuridique_it`';
        }

        $sql = sprintf(
            'INSERT INTO `formejuridique` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`formejuridique`':						
                        $stmt->bindValue($identifier, $this->formejuridique, PDO::PARAM_STR);
                        break;
                    case '`ordre`':						
                        $stmt->bindValue($identifier, $this->ordre, PDO::PARAM_INT);
                        break;
                    case '`libelle_formejuridique`':						
                        $stmt->bindValue($identifier, $this->libelle_formejuridique, PDO::PARAM_STR);
                        break;
                    case '`libelle_formejuridique_fr`':						
                        $stmt->bindValue($identifier, $this->libelle_formejuridique_fr, PDO::PARAM_STR);
                        break;
                    case '`libelle_formejuridique_en`':						
                        $stmt->bindValue($identifier, $this->libelle_formejuridique_en, PDO::PARAM_STR);
                        break;
                    case '`libelle_formejuridique_es`':						
                        $stmt->bindValue($identifier, $this->libelle_formejuridique_es, PDO::PARAM_STR);
                        break;
                    case '`libelle_formejuridique_su`':						
                        $stmt->bindValue($identifier, $this->libelle_formejuridique_su, PDO::PARAM_STR);
                        break;
                    case '`libelle_formejuridique_du`':						
                        $stmt->bindValue($identifier, $this->libelle_formejuridique_du, PDO::PARAM_STR);
                        break;
                    case '`libelle_formejuridique_cz`':						
                        $stmt->bindValue($identifier, $this->libelle_formejuridique_cz, PDO::PARAM_STR);
                        break;
                    case '`libelle_formejuridique_ar`':						
                        $stmt->bindValue($identifier, $this->libelle_formejuridique_ar, PDO::PARAM_STR);
                        break;
                    case '`libelle_formejuridique_it`':						
                        $stmt->bindValue($identifier, $this->libelle_formejuridique_it, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
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


            if (($retval = CommonFormejuridiquePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonFormejuridiquePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getFormejuridique();
                break;
            case 1:
                return $this->getOrdre();
                break;
            case 2:
                return $this->getLibelleFormejuridique();
                break;
            case 3:
                return $this->getLibelleFormejuridiqueFr();
                break;
            case 4:
                return $this->getLibelleFormejuridiqueEn();
                break;
            case 5:
                return $this->getLibelleFormejuridiqueEs();
                break;
            case 6:
                return $this->getLibelleFormejuridiqueSu();
                break;
            case 7:
                return $this->getLibelleFormejuridiqueDu();
                break;
            case 8:
                return $this->getLibelleFormejuridiqueCz();
                break;
            case 9:
                return $this->getLibelleFormejuridiqueAr();
                break;
            case 10:
                return $this->getLibelleFormejuridiqueIt();
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
        if (isset($alreadyDumpedObjects['CommonFormejuridique'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonFormejuridique'][$this->getPrimaryKey()] = true;
        $keys = CommonFormejuridiquePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getFormejuridique(),
            $keys[1] => $this->getOrdre(),
            $keys[2] => $this->getLibelleFormejuridique(),
            $keys[3] => $this->getLibelleFormejuridiqueFr(),
            $keys[4] => $this->getLibelleFormejuridiqueEn(),
            $keys[5] => $this->getLibelleFormejuridiqueEs(),
            $keys[6] => $this->getLibelleFormejuridiqueSu(),
            $keys[7] => $this->getLibelleFormejuridiqueDu(),
            $keys[8] => $this->getLibelleFormejuridiqueCz(),
            $keys[9] => $this->getLibelleFormejuridiqueAr(),
            $keys[10] => $this->getLibelleFormejuridiqueIt(),
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
        $pos = CommonFormejuridiquePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setFormejuridique($value);
                break;
            case 1:
                $this->setOrdre($value);
                break;
            case 2:
                $this->setLibelleFormejuridique($value);
                break;
            case 3:
                $this->setLibelleFormejuridiqueFr($value);
                break;
            case 4:
                $this->setLibelleFormejuridiqueEn($value);
                break;
            case 5:
                $this->setLibelleFormejuridiqueEs($value);
                break;
            case 6:
                $this->setLibelleFormejuridiqueSu($value);
                break;
            case 7:
                $this->setLibelleFormejuridiqueDu($value);
                break;
            case 8:
                $this->setLibelleFormejuridiqueCz($value);
                break;
            case 9:
                $this->setLibelleFormejuridiqueAr($value);
                break;
            case 10:
                $this->setLibelleFormejuridiqueIt($value);
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
        $keys = CommonFormejuridiquePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setFormejuridique($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrdre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelleFormejuridique($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleFormejuridiqueFr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLibelleFormejuridiqueEn($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLibelleFormejuridiqueEs($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLibelleFormejuridiqueSu($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLibelleFormejuridiqueDu($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLibelleFormejuridiqueCz($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLibelleFormejuridiqueAr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLibelleFormejuridiqueIt($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonFormejuridiquePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonFormejuridiquePeer::FORMEJURIDIQUE)) $criteria->add(CommonFormejuridiquePeer::FORMEJURIDIQUE, $this->formejuridique);
        if ($this->isColumnModified(CommonFormejuridiquePeer::ORDRE)) $criteria->add(CommonFormejuridiquePeer::ORDRE, $this->ordre);
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE)) $criteria->add(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE, $this->libelle_formejuridique);
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_FR)) $criteria->add(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_FR, $this->libelle_formejuridique_fr);
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_EN)) $criteria->add(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_EN, $this->libelle_formejuridique_en);
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_ES)) $criteria->add(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_ES, $this->libelle_formejuridique_es);
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_SU)) $criteria->add(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_SU, $this->libelle_formejuridique_su);
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_DU)) $criteria->add(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_DU, $this->libelle_formejuridique_du);
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_CZ)) $criteria->add(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_CZ, $this->libelle_formejuridique_cz);
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_AR)) $criteria->add(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_AR, $this->libelle_formejuridique_ar);
        if ($this->isColumnModified(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_IT)) $criteria->add(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_IT, $this->libelle_formejuridique_it);

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
        $criteria = new Criteria(CommonFormejuridiquePeer::DATABASE_NAME);
        $criteria->add(CommonFormejuridiquePeer::FORMEJURIDIQUE, $this->formejuridique);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getFormejuridique();
    }

    /**
     * Generic method to set the primary key (formejuridique column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setFormejuridique($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getFormejuridique();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonFormejuridique (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrdre($this->getOrdre());
        $copyObj->setLibelleFormejuridique($this->getLibelleFormejuridique());
        $copyObj->setLibelleFormejuridiqueFr($this->getLibelleFormejuridiqueFr());
        $copyObj->setLibelleFormejuridiqueEn($this->getLibelleFormejuridiqueEn());
        $copyObj->setLibelleFormejuridiqueEs($this->getLibelleFormejuridiqueEs());
        $copyObj->setLibelleFormejuridiqueSu($this->getLibelleFormejuridiqueSu());
        $copyObj->setLibelleFormejuridiqueDu($this->getLibelleFormejuridiqueDu());
        $copyObj->setLibelleFormejuridiqueCz($this->getLibelleFormejuridiqueCz());
        $copyObj->setLibelleFormejuridiqueAr($this->getLibelleFormejuridiqueAr());
        $copyObj->setLibelleFormejuridiqueIt($this->getLibelleFormejuridiqueIt());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setFormejuridique(''); // this is a auto-increment column, so set to default value
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
     * @return CommonFormejuridique Clone of current object.
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
     * @return CommonFormejuridiquePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonFormejuridiquePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->formejuridique = null;
        $this->ordre = null;
        $this->libelle_formejuridique = null;
        $this->libelle_formejuridique_fr = null;
        $this->libelle_formejuridique_en = null;
        $this->libelle_formejuridique_es = null;
        $this->libelle_formejuridique_su = null;
        $this->libelle_formejuridique_du = null;
        $this->libelle_formejuridique_cz = null;
        $this->libelle_formejuridique_ar = null;
        $this->libelle_formejuridique_it = null;
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
        return (string) $this->exportTo(CommonFormejuridiquePeer::DEFAULT_STRING_FORMAT);
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
