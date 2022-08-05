<?php


/**
 * Base class that represents a row from the 'Service_Mertier_Profils' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonServiceMertierProfils extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonServiceMertierProfilsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonServiceMertierProfilsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_auto field.
     * @var        int
     */
    protected $id_auto;

    /**
     * The value for the id_interne field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_interne;

    /**
     * The value for the id_service_metier field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_service_metier;

    /**
     * The value for the id_externe field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_externe;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the libelle_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_fr;

    /**
     * The value for the libelle_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_en;

    /**
     * The value for the libelle_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_es;

    /**
     * The value for the libelle_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_su;

    /**
     * The value for the libelle_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_du;

    /**
     * The value for the libelle_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_cz;

    /**
     * The value for the libelle_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_ar;

    /**
     * The value for the libelle_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_it;

    /**
     * The value for the show_profile_for_hyperadmin_only field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $show_profile_for_hyperadmin_only;

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
        $this->id_interne = 0;
        $this->id_service_metier = 0;
        $this->id_externe = 0;
        $this->libelle_fr = '';
        $this->libelle_en = '';
        $this->libelle_es = '';
        $this->libelle_su = '';
        $this->libelle_du = '';
        $this->libelle_cz = '';
        $this->libelle_ar = '';
        $this->libelle_it = '';
        $this->show_profile_for_hyperadmin_only = '0';
    }

    /**
     * Initializes internal state of BaseCommonServiceMertierProfils object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_auto] column value.
     * 
     * @return int
     */
    public function getIdAuto()
    {

        return $this->id_auto;
    }

    /**
     * Get the [id_interne] column value.
     * 
     * @return int
     */
    public function getIdInterne()
    {

        return $this->id_interne;
    }

    /**
     * Get the [id_service_metier] column value.
     * 
     * @return int
     */
    public function getIdServiceMetier()
    {

        return $this->id_service_metier;
    }

    /**
     * Get the [id_externe] column value.
     * 
     * @return int
     */
    public function getIdExterne()
    {

        return $this->id_externe;
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
     * Get the [libelle_fr] column value.
     * 
     * @return string
     */
    public function getLibelleFr()
    {

        return $this->libelle_fr;
    }

    /**
     * Get the [libelle_en] column value.
     * 
     * @return string
     */
    public function getLibelleEn()
    {

        return $this->libelle_en;
    }

    /**
     * Get the [libelle_es] column value.
     * 
     * @return string
     */
    public function getLibelleEs()
    {

        return $this->libelle_es;
    }

    /**
     * Get the [libelle_su] column value.
     * 
     * @return string
     */
    public function getLibelleSu()
    {

        return $this->libelle_su;
    }

    /**
     * Get the [libelle_du] column value.
     * 
     * @return string
     */
    public function getLibelleDu()
    {

        return $this->libelle_du;
    }

    /**
     * Get the [libelle_cz] column value.
     * 
     * @return string
     */
    public function getLibelleCz()
    {

        return $this->libelle_cz;
    }

    /**
     * Get the [libelle_ar] column value.
     * 
     * @return string
     */
    public function getLibelleAr()
    {

        return $this->libelle_ar;
    }

    /**
     * Get the [libelle_it] column value.
     * 
     * @return string
     */
    public function getLibelleIt()
    {

        return $this->libelle_it;
    }

    /**
     * Get the [show_profile_for_hyperadmin_only] column value.
     * 
     * @return string
     */
    public function getShowProfileForHyperadminOnly()
    {

        return $this->show_profile_for_hyperadmin_only;
    }

    /**
     * Set the value of [id_auto] column.
     * 
     * @param int $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setIdAuto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_auto !== $v) {
            $this->id_auto = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::ID_AUTO;
        }


        return $this;
    } // setIdAuto()

    /**
     * Set the value of [id_interne] column.
     * 
     * @param int $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setIdInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_interne !== $v) {
            $this->id_interne = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::ID_INTERNE;
        }


        return $this;
    } // setIdInterne()

    /**
     * Set the value of [id_service_metier] column.
     * 
     * @param int $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setIdServiceMetier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service_metier !== $v) {
            $this->id_service_metier = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::ID_SERVICE_METIER;
        }


        return $this;
    } // setIdServiceMetier()

    /**
     * Set the value of [id_externe] column.
     * 
     * @param int $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setIdExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_externe !== $v) {
            $this->id_externe = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::ID_EXTERNE;
        }


        return $this;
    } // setIdExterne()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [libelle_fr] column.
     * 
     * @param string $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setLibelleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_fr !== $v) {
            $this->libelle_fr = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::LIBELLE_FR;
        }


        return $this;
    } // setLibelleFr()

    /**
     * Set the value of [libelle_en] column.
     * 
     * @param string $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setLibelleEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_en !== $v) {
            $this->libelle_en = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::LIBELLE_EN;
        }


        return $this;
    } // setLibelleEn()

    /**
     * Set the value of [libelle_es] column.
     * 
     * @param string $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setLibelleEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_es !== $v) {
            $this->libelle_es = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::LIBELLE_ES;
        }


        return $this;
    } // setLibelleEs()

    /**
     * Set the value of [libelle_su] column.
     * 
     * @param string $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setLibelleSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_su !== $v) {
            $this->libelle_su = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::LIBELLE_SU;
        }


        return $this;
    } // setLibelleSu()

    /**
     * Set the value of [libelle_du] column.
     * 
     * @param string $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setLibelleDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_du !== $v) {
            $this->libelle_du = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::LIBELLE_DU;
        }


        return $this;
    } // setLibelleDu()

    /**
     * Set the value of [libelle_cz] column.
     * 
     * @param string $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setLibelleCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_cz !== $v) {
            $this->libelle_cz = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::LIBELLE_CZ;
        }


        return $this;
    } // setLibelleCz()

    /**
     * Set the value of [libelle_ar] column.
     * 
     * @param string $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setLibelleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_ar !== $v) {
            $this->libelle_ar = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::LIBELLE_AR;
        }


        return $this;
    } // setLibelleAr()

    /**
     * Set the value of [libelle_it] column.
     * 
     * @param string $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setLibelleIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_it !== $v) {
            $this->libelle_it = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::LIBELLE_IT;
        }


        return $this;
    } // setLibelleIt()

    /**
     * Set the value of [show_profile_for_hyperadmin_only] column.
     * 
     * @param string $v new value
     * @return CommonServiceMertierProfils The current object (for fluent API support)
     */
    public function setShowProfileForHyperadminOnly($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->show_profile_for_hyperadmin_only !== $v) {
            $this->show_profile_for_hyperadmin_only = $v;
            $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY;
        }


        return $this;
    } // setShowProfileForHyperadminOnly()

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
            if ($this->id_interne !== 0) {
                return false;
            }

            if ($this->id_service_metier !== 0) {
                return false;
            }

            if ($this->id_externe !== 0) {
                return false;
            }

            if ($this->libelle_fr !== '') {
                return false;
            }

            if ($this->libelle_en !== '') {
                return false;
            }

            if ($this->libelle_es !== '') {
                return false;
            }

            if ($this->libelle_su !== '') {
                return false;
            }

            if ($this->libelle_du !== '') {
                return false;
            }

            if ($this->libelle_cz !== '') {
                return false;
            }

            if ($this->libelle_ar !== '') {
                return false;
            }

            if ($this->libelle_it !== '') {
                return false;
            }

            if ($this->show_profile_for_hyperadmin_only !== '0') {
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

            $this->id_auto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_interne = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_service_metier = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_externe = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->libelle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->libelle_fr = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->libelle_en = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->libelle_es = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->libelle_su = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->libelle_du = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->libelle_cz = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->libelle_ar = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->libelle_it = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->show_profile_for_hyperadmin_only = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = CommonServiceMertierProfilsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonServiceMertierProfils object", $e);
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
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonServiceMertierProfilsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonServiceMertierProfilsQuery::create()
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
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonServiceMertierProfilsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonServiceMertierProfilsPeer::ID_AUTO;
        if (null !== $this->id_auto) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonServiceMertierProfilsPeer::ID_AUTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::ID_AUTO)) {
            $modifiedColumns[':p' . $index++]  = '`id_auto`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::ID_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`id_interne`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::ID_SERVICE_METIER)) {
            $modifiedColumns[':p' . $index++]  = '`id_service_metier`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::ID_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`id_externe`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_fr`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_en`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_es`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_su`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_du`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_cz`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_ar`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_it`';
        }
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY)) {
            $modifiedColumns[':p' . $index++]  = '`show_profile_for_hyperadmin_only`';
        }

        $sql = sprintf(
            'INSERT INTO `Service_Mertier_Profils` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_auto`':						
                        $stmt->bindValue($identifier, $this->id_auto, PDO::PARAM_INT);
                        break;
                    case '`id_interne`':						
                        $stmt->bindValue($identifier, $this->id_interne, PDO::PARAM_INT);
                        break;
                    case '`id_service_metier`':						
                        $stmt->bindValue($identifier, $this->id_service_metier, PDO::PARAM_INT);
                        break;
                    case '`id_externe`':						
                        $stmt->bindValue($identifier, $this->id_externe, PDO::PARAM_INT);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`libelle_fr`':						
                        $stmt->bindValue($identifier, $this->libelle_fr, PDO::PARAM_STR);
                        break;
                    case '`libelle_en`':						
                        $stmt->bindValue($identifier, $this->libelle_en, PDO::PARAM_STR);
                        break;
                    case '`libelle_es`':						
                        $stmt->bindValue($identifier, $this->libelle_es, PDO::PARAM_STR);
                        break;
                    case '`libelle_su`':						
                        $stmt->bindValue($identifier, $this->libelle_su, PDO::PARAM_STR);
                        break;
                    case '`libelle_du`':						
                        $stmt->bindValue($identifier, $this->libelle_du, PDO::PARAM_STR);
                        break;
                    case '`libelle_cz`':						
                        $stmt->bindValue($identifier, $this->libelle_cz, PDO::PARAM_STR);
                        break;
                    case '`libelle_ar`':						
                        $stmt->bindValue($identifier, $this->libelle_ar, PDO::PARAM_STR);
                        break;
                    case '`libelle_it`':						
                        $stmt->bindValue($identifier, $this->libelle_it, PDO::PARAM_STR);
                        break;
                    case '`show_profile_for_hyperadmin_only`':						
                        $stmt->bindValue($identifier, $this->show_profile_for_hyperadmin_only, PDO::PARAM_STR);
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
        $this->setIdAuto($pk);

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


            if (($retval = CommonServiceMertierProfilsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonServiceMertierProfilsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAuto();
                break;
            case 1:
                return $this->getIdInterne();
                break;
            case 2:
                return $this->getIdServiceMetier();
                break;
            case 3:
                return $this->getIdExterne();
                break;
            case 4:
                return $this->getLibelle();
                break;
            case 5:
                return $this->getLibelleFr();
                break;
            case 6:
                return $this->getLibelleEn();
                break;
            case 7:
                return $this->getLibelleEs();
                break;
            case 8:
                return $this->getLibelleSu();
                break;
            case 9:
                return $this->getLibelleDu();
                break;
            case 10:
                return $this->getLibelleCz();
                break;
            case 11:
                return $this->getLibelleAr();
                break;
            case 12:
                return $this->getLibelleIt();
                break;
            case 13:
                return $this->getShowProfileForHyperadminOnly();
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
        if (isset($alreadyDumpedObjects['CommonServiceMertierProfils'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonServiceMertierProfils'][$this->getPrimaryKey()] = true;
        $keys = CommonServiceMertierProfilsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdAuto(),
            $keys[1] => $this->getIdInterne(),
            $keys[2] => $this->getIdServiceMetier(),
            $keys[3] => $this->getIdExterne(),
            $keys[4] => $this->getLibelle(),
            $keys[5] => $this->getLibelleFr(),
            $keys[6] => $this->getLibelleEn(),
            $keys[7] => $this->getLibelleEs(),
            $keys[8] => $this->getLibelleSu(),
            $keys[9] => $this->getLibelleDu(),
            $keys[10] => $this->getLibelleCz(),
            $keys[11] => $this->getLibelleAr(),
            $keys[12] => $this->getLibelleIt(),
            $keys[13] => $this->getShowProfileForHyperadminOnly(),
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
        $pos = CommonServiceMertierProfilsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAuto($value);
                break;
            case 1:
                $this->setIdInterne($value);
                break;
            case 2:
                $this->setIdServiceMetier($value);
                break;
            case 3:
                $this->setIdExterne($value);
                break;
            case 4:
                $this->setLibelle($value);
                break;
            case 5:
                $this->setLibelleFr($value);
                break;
            case 6:
                $this->setLibelleEn($value);
                break;
            case 7:
                $this->setLibelleEs($value);
                break;
            case 8:
                $this->setLibelleSu($value);
                break;
            case 9:
                $this->setLibelleDu($value);
                break;
            case 10:
                $this->setLibelleCz($value);
                break;
            case 11:
                $this->setLibelleAr($value);
                break;
            case 12:
                $this->setLibelleIt($value);
                break;
            case 13:
                $this->setShowProfileForHyperadminOnly($value);
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
        $keys = CommonServiceMertierProfilsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdAuto($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdInterne($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdServiceMetier($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdExterne($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLibelle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLibelleFr($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLibelleEn($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLibelleEs($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLibelleSu($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLibelleDu($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLibelleCz($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLibelleAr($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setLibelleIt($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setShowProfileForHyperadminOnly($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonServiceMertierProfilsPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::ID_AUTO)) $criteria->add(CommonServiceMertierProfilsPeer::ID_AUTO, $this->id_auto);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::ID_INTERNE)) $criteria->add(CommonServiceMertierProfilsPeer::ID_INTERNE, $this->id_interne);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::ID_SERVICE_METIER)) $criteria->add(CommonServiceMertierProfilsPeer::ID_SERVICE_METIER, $this->id_service_metier);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::ID_EXTERNE)) $criteria->add(CommonServiceMertierProfilsPeer::ID_EXTERNE, $this->id_externe);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE)) $criteria->add(CommonServiceMertierProfilsPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_FR)) $criteria->add(CommonServiceMertierProfilsPeer::LIBELLE_FR, $this->libelle_fr);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_EN)) $criteria->add(CommonServiceMertierProfilsPeer::LIBELLE_EN, $this->libelle_en);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_ES)) $criteria->add(CommonServiceMertierProfilsPeer::LIBELLE_ES, $this->libelle_es);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_SU)) $criteria->add(CommonServiceMertierProfilsPeer::LIBELLE_SU, $this->libelle_su);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_DU)) $criteria->add(CommonServiceMertierProfilsPeer::LIBELLE_DU, $this->libelle_du);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_CZ)) $criteria->add(CommonServiceMertierProfilsPeer::LIBELLE_CZ, $this->libelle_cz);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_AR)) $criteria->add(CommonServiceMertierProfilsPeer::LIBELLE_AR, $this->libelle_ar);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::LIBELLE_IT)) $criteria->add(CommonServiceMertierProfilsPeer::LIBELLE_IT, $this->libelle_it);
        if ($this->isColumnModified(CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY)) $criteria->add(CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY, $this->show_profile_for_hyperadmin_only);

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
        $criteria = new Criteria(CommonServiceMertierProfilsPeer::DATABASE_NAME);
        $criteria->add(CommonServiceMertierProfilsPeer::ID_AUTO, $this->id_auto);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdAuto();
    }

    /**
     * Generic method to set the primary key (id_auto column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdAuto($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdAuto();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonServiceMertierProfils (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdInterne($this->getIdInterne());
        $copyObj->setIdServiceMetier($this->getIdServiceMetier());
        $copyObj->setIdExterne($this->getIdExterne());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setLibelleFr($this->getLibelleFr());
        $copyObj->setLibelleEn($this->getLibelleEn());
        $copyObj->setLibelleEs($this->getLibelleEs());
        $copyObj->setLibelleSu($this->getLibelleSu());
        $copyObj->setLibelleDu($this->getLibelleDu());
        $copyObj->setLibelleCz($this->getLibelleCz());
        $copyObj->setLibelleAr($this->getLibelleAr());
        $copyObj->setLibelleIt($this->getLibelleIt());
        $copyObj->setShowProfileForHyperadminOnly($this->getShowProfileForHyperadminOnly());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdAuto(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonServiceMertierProfils Clone of current object.
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
     * @return CommonServiceMertierProfilsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonServiceMertierProfilsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_auto = null;
        $this->id_interne = null;
        $this->id_service_metier = null;
        $this->id_externe = null;
        $this->libelle = null;
        $this->libelle_fr = null;
        $this->libelle_en = null;
        $this->libelle_es = null;
        $this->libelle_su = null;
        $this->libelle_du = null;
        $this->libelle_cz = null;
        $this->libelle_ar = null;
        $this->libelle_it = null;
        $this->show_profile_for_hyperadmin_only = null;
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
        return (string) $this->exportTo(CommonServiceMertierProfilsPeer::DEFAULT_STRING_FORMAT);
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