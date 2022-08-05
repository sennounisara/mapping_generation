<?php


/**
 * Base class that represents a row from the 'CategorieConsultation' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCategorieConsultation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonCategorieConsultationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonCategorieConsultationPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $id;

    /**
     * The value for the libelle field.
     * Note: this column has a database default value of: ''
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
     * @var        string
     */
    protected $libelle_ar;

    /**
     * The value for the id_categorie_anm field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $id_categorie_anm;

    /**
     * The value for the libelle_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_it;

    /**
     * The value for the code field.
     * @var        string
     */
    protected $code;

    /**
     * @var        PropelObjectCollection|CommonMarche[] Collection to store aggregation of CommonMarche objects.
     */
    protected $collCommonMarches;
    protected $collCommonMarchesPartial;

    /**
     * @var        PropelObjectCollection|CommonExecContrat[] Collection to store aggregation of CommonExecContrat objects.
     */
    protected $collCommonExecContrats;
    protected $collCommonExecContratsPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonMarchesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecContratsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->id = '';
        $this->libelle = '';
        $this->libelle_fr = '';
        $this->libelle_en = '';
        $this->libelle_es = '';
        $this->libelle_su = '';
        $this->libelle_du = '';
        $this->libelle_cz = '';
        $this->id_categorie_anm = '0';
        $this->libelle_it = '';
    }

    /**
     * Initializes internal state of BaseCommonCategorieConsultation object.
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
     * @return string
     */
    public function getId()
    {

        return $this->id;
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
     * Get the [id_categorie_anm] column value.
     * 
     * @return string
     */
    public function getIdCategorieAnm()
    {

        return $this->id_categorie_anm;
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
     * Get the [code] column value.
     * 
     * @return string
     */
    public function getCode()
    {

        return $this->code;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [libelle_fr] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setLibelleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_fr !== $v) {
            $this->libelle_fr = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::LIBELLE_FR;
        }


        return $this;
    } // setLibelleFr()

    /**
     * Set the value of [libelle_en] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setLibelleEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_en !== $v) {
            $this->libelle_en = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::LIBELLE_EN;
        }


        return $this;
    } // setLibelleEn()

    /**
     * Set the value of [libelle_es] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setLibelleEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_es !== $v) {
            $this->libelle_es = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::LIBELLE_ES;
        }


        return $this;
    } // setLibelleEs()

    /**
     * Set the value of [libelle_su] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setLibelleSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_su !== $v) {
            $this->libelle_su = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::LIBELLE_SU;
        }


        return $this;
    } // setLibelleSu()

    /**
     * Set the value of [libelle_du] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setLibelleDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_du !== $v) {
            $this->libelle_du = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::LIBELLE_DU;
        }


        return $this;
    } // setLibelleDu()

    /**
     * Set the value of [libelle_cz] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setLibelleCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_cz !== $v) {
            $this->libelle_cz = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::LIBELLE_CZ;
        }


        return $this;
    } // setLibelleCz()

    /**
     * Set the value of [libelle_ar] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setLibelleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_ar !== $v) {
            $this->libelle_ar = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::LIBELLE_AR;
        }


        return $this;
    } // setLibelleAr()

    /**
     * Set the value of [id_categorie_anm] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setIdCategorieAnm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_categorie_anm !== $v) {
            $this->id_categorie_anm = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::ID_CATEGORIE_ANM;
        }


        return $this;
    } // setIdCategorieAnm()

    /**
     * Set the value of [libelle_it] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setLibelleIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_it !== $v) {
            $this->libelle_it = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::LIBELLE_IT;
        }


        return $this;
    } // setLibelleIt()

    /**
     * Set the value of [code] column.
     * 
     * @param string $v new value
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[] = CommonCategorieConsultationPeer::CODE;
        }


        return $this;
    } // setCode()

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
            if ($this->id !== '') {
                return false;
            }

            if ($this->libelle !== '') {
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

            if ($this->id_categorie_anm !== '0') {
                return false;
            }

            if ($this->libelle_it !== '') {
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

            $this->id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->libelle = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->libelle_fr = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle_en = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->libelle_es = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->libelle_su = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->libelle_du = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->libelle_cz = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->libelle_ar = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->id_categorie_anm = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->libelle_it = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->code = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CommonCategorieConsultationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonCategorieConsultation object", $e);
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
            $con = Propel::getConnection(CommonCategorieConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonCategorieConsultationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonMarches = null;

            $this->collCommonExecContrats = null;

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
            $con = Propel::getConnection(CommonCategorieConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonCategorieConsultationQuery::create()
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
            $con = Propel::getConnection(CommonCategorieConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonCategorieConsultationPeer::addInstanceToPool($this);
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

            if ($this->commonMarchesScheduledForDeletion !== null) {
                if (!$this->commonMarchesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonMarchesScheduledForDeletion as $commonMarche) {
                        // need to save related object because we set the relation to null
                        $commonMarche->save($con);
                    }
                    $this->commonMarchesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonMarches !== null) {
                foreach ($this->collCommonMarches as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecContratsScheduledForDeletion !== null) {
                if (!$this->commonExecContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContratsScheduledForDeletion as $commonExecContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecContrat->save($con);
                    }
                    $this->commonExecContratsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContrats !== null) {
                foreach ($this->collCommonExecContrats as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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
        if ($this->isColumnModified(CommonCategorieConsultationPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_fr`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_en`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_es`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_su`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_du`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_cz`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_ar`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::ID_CATEGORIE_ANM)) {
            $modifiedColumns[':p' . $index++]  = '`id_categorie_ANM`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_it`';
        }
        if ($this->isColumnModified(CommonCategorieConsultationPeer::CODE)) {
            $modifiedColumns[':p' . $index++]  = '`code`';
        }

        $sql = sprintf(
            'INSERT INTO `CategorieConsultation` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_STR);
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
                    case '`id_categorie_ANM`':						
                        $stmt->bindValue($identifier, $this->id_categorie_anm, PDO::PARAM_STR);
                        break;
                    case '`libelle_it`':						
                        $stmt->bindValue($identifier, $this->libelle_it, PDO::PARAM_STR);
                        break;
                    case '`code`':						
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
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


            if (($retval = CommonCategorieConsultationPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonMarches !== null) {
                    foreach ($this->collCommonMarches as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecContrats !== null) {
                    foreach ($this->collCommonExecContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = CommonCategorieConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLibelle();
                break;
            case 2:
                return $this->getLibelleFr();
                break;
            case 3:
                return $this->getLibelleEn();
                break;
            case 4:
                return $this->getLibelleEs();
                break;
            case 5:
                return $this->getLibelleSu();
                break;
            case 6:
                return $this->getLibelleDu();
                break;
            case 7:
                return $this->getLibelleCz();
                break;
            case 8:
                return $this->getLibelleAr();
                break;
            case 9:
                return $this->getIdCategorieAnm();
                break;
            case 10:
                return $this->getLibelleIt();
                break;
            case 11:
                return $this->getCode();
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
        if (isset($alreadyDumpedObjects['CommonCategorieConsultation'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonCategorieConsultation'][$this->getPrimaryKey()] = true;
        $keys = CommonCategorieConsultationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getLibelle(),
            $keys[2] => $this->getLibelleFr(),
            $keys[3] => $this->getLibelleEn(),
            $keys[4] => $this->getLibelleEs(),
            $keys[5] => $this->getLibelleSu(),
            $keys[6] => $this->getLibelleDu(),
            $keys[7] => $this->getLibelleCz(),
            $keys[8] => $this->getLibelleAr(),
            $keys[9] => $this->getIdCategorieAnm(),
            $keys[10] => $this->getLibelleIt(),
            $keys[11] => $this->getCode(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonMarches) {
                $result['CommonMarches'] = $this->collCommonMarches->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecContrats) {
                $result['CommonExecContrats'] = $this->collCommonExecContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonCategorieConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLibelle($value);
                break;
            case 2:
                $this->setLibelleFr($value);
                break;
            case 3:
                $this->setLibelleEn($value);
                break;
            case 4:
                $this->setLibelleEs($value);
                break;
            case 5:
                $this->setLibelleSu($value);
                break;
            case 6:
                $this->setLibelleDu($value);
                break;
            case 7:
                $this->setLibelleCz($value);
                break;
            case 8:
                $this->setLibelleAr($value);
                break;
            case 9:
                $this->setIdCategorieAnm($value);
                break;
            case 10:
                $this->setLibelleIt($value);
                break;
            case 11:
                $this->setCode($value);
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
        $keys = CommonCategorieConsultationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLibelle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelleFr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleEn($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLibelleEs($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLibelleSu($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLibelleDu($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLibelleCz($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLibelleAr($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIdCategorieAnm($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLibelleIt($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCode($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonCategorieConsultationPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonCategorieConsultationPeer::ID)) $criteria->add(CommonCategorieConsultationPeer::ID, $this->id);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE)) $criteria->add(CommonCategorieConsultationPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_FR)) $criteria->add(CommonCategorieConsultationPeer::LIBELLE_FR, $this->libelle_fr);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_EN)) $criteria->add(CommonCategorieConsultationPeer::LIBELLE_EN, $this->libelle_en);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_ES)) $criteria->add(CommonCategorieConsultationPeer::LIBELLE_ES, $this->libelle_es);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_SU)) $criteria->add(CommonCategorieConsultationPeer::LIBELLE_SU, $this->libelle_su);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_DU)) $criteria->add(CommonCategorieConsultationPeer::LIBELLE_DU, $this->libelle_du);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_CZ)) $criteria->add(CommonCategorieConsultationPeer::LIBELLE_CZ, $this->libelle_cz);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_AR)) $criteria->add(CommonCategorieConsultationPeer::LIBELLE_AR, $this->libelle_ar);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::ID_CATEGORIE_ANM)) $criteria->add(CommonCategorieConsultationPeer::ID_CATEGORIE_ANM, $this->id_categorie_anm);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::LIBELLE_IT)) $criteria->add(CommonCategorieConsultationPeer::LIBELLE_IT, $this->libelle_it);
        if ($this->isColumnModified(CommonCategorieConsultationPeer::CODE)) $criteria->add(CommonCategorieConsultationPeer::CODE, $this->code);

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
        $criteria = new Criteria(CommonCategorieConsultationPeer::DATABASE_NAME);
        $criteria->add(CommonCategorieConsultationPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  string $key Primary key.
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
     * @param object $copyObj An object of CommonCategorieConsultation (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setLibelleFr($this->getLibelleFr());
        $copyObj->setLibelleEn($this->getLibelleEn());
        $copyObj->setLibelleEs($this->getLibelleEs());
        $copyObj->setLibelleSu($this->getLibelleSu());
        $copyObj->setLibelleDu($this->getLibelleDu());
        $copyObj->setLibelleCz($this->getLibelleCz());
        $copyObj->setLibelleAr($this->getLibelleAr());
        $copyObj->setIdCategorieAnm($this->getIdCategorieAnm());
        $copyObj->setLibelleIt($this->getLibelleIt());
        $copyObj->setCode($this->getCode());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonMarches() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonMarche($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContrat($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(''); // this is a auto-increment column, so set to default value
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
     * @return CommonCategorieConsultation Clone of current object.
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
     * @return CommonCategorieConsultationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonCategorieConsultationPeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CommonMarche' == $relationName) {
            $this->initCommonMarches();
        }
        if ('CommonExecContrat' == $relationName) {
            $this->initCommonExecContrats();
        }
    }

    /**
     * Clears out the collCommonMarches collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonCategorieConsultation The current object (for fluent API support)
     * @see        addCommonMarches()
     */
    public function clearCommonMarches()
    {
        $this->collCommonMarches = null; // important to set this to null since that means it is uninitialized
        $this->collCommonMarchesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonMarches collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonMarches($v = true)
    {
        $this->collCommonMarchesPartial = $v;
    }

    /**
     * Initializes the collCommonMarches collection.
     *
     * By default this just sets the collCommonMarches collection to an empty array (like clearcollCommonMarches());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonMarches($overrideExisting = true)
    {
        if (null !== $this->collCommonMarches && !$overrideExisting) {
            return;
        }
        $this->collCommonMarches = new PropelObjectCollection();
        $this->collCommonMarches->setModel('CommonMarche');
    }

    /**
     * Gets an array of CommonMarche objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonCategorieConsultation is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonMarche[] List of CommonMarche objects
     * @throws PropelException
     */
    public function getCommonMarches($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonMarchesPartial && !$this->isNew();
        if (null === $this->collCommonMarches || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonMarches) {
                // return empty collection
                $this->initCommonMarches();
            } else {
                $collCommonMarches = CommonMarcheQuery::create(null, $criteria)
                    ->filterByCommonCategorieConsultation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonMarchesPartial && count($collCommonMarches)) {
                      $this->initCommonMarches(false);

                      foreach ($collCommonMarches as $obj) {
                        if (false == $this->collCommonMarches->contains($obj)) {
                          $this->collCommonMarches->append($obj);
                        }
                      }

                      $this->collCommonMarchesPartial = true;
                    }

                    $collCommonMarches->getInternalIterator()->rewind();

                    return $collCommonMarches;
                }

                if ($partial && $this->collCommonMarches) {
                    foreach ($this->collCommonMarches as $obj) {
                        if ($obj->isNew()) {
                            $collCommonMarches[] = $obj;
                        }
                    }
                }

                $this->collCommonMarches = $collCommonMarches;
                $this->collCommonMarchesPartial = false;
            }
        }

        return $this->collCommonMarches;
    }

    /**
     * Sets a collection of CommonMarche objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonMarches A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setCommonMarches(PropelCollection $commonMarches, PropelPDO $con = null)
    {
        $commonMarchesToDelete = $this->getCommonMarches(new Criteria(), $con)->diff($commonMarches);


        $this->commonMarchesScheduledForDeletion = $commonMarchesToDelete;

        foreach ($commonMarchesToDelete as $commonMarcheRemoved) {
            $commonMarcheRemoved->setCommonCategorieConsultation(null);
        }

        $this->collCommonMarches = null;
        foreach ($commonMarches as $commonMarche) {
            $this->addCommonMarche($commonMarche);
        }

        $this->collCommonMarches = $commonMarches;
        $this->collCommonMarchesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonMarche objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonMarche objects.
     * @throws PropelException
     */
    public function countCommonMarches(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonMarchesPartial && !$this->isNew();
        if (null === $this->collCommonMarches || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonMarches) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonMarches());
            }
            $query = CommonMarcheQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonCategorieConsultation($this)
                ->count($con);
        }

        return count($this->collCommonMarches);
    }

    /**
     * Method called to associate a CommonMarche object to this object
     * through the CommonMarche foreign key attribute.
     *
     * @param   CommonMarche $l CommonMarche
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function addCommonMarche(CommonMarche $l)
    {
        if ($this->collCommonMarches === null) {
            $this->initCommonMarches();
            $this->collCommonMarchesPartial = true;
        }
        if (!in_array($l, $this->collCommonMarches->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonMarche($l);
        }

        return $this;
    }

    /**
     * @param	CommonMarche $commonMarche The commonMarche object to add.
     */
    protected function doAddCommonMarche($commonMarche)
    {
        $this->collCommonMarches[]= $commonMarche;
        $commonMarche->setCommonCategorieConsultation($this);
    }

    /**
     * @param	CommonMarche $commonMarche The commonMarche object to remove.
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function removeCommonMarche($commonMarche)
    {
        if ($this->getCommonMarches()->contains($commonMarche)) {
            $this->collCommonMarches->remove($this->collCommonMarches->search($commonMarche));
            if (null === $this->commonMarchesScheduledForDeletion) {
                $this->commonMarchesScheduledForDeletion = clone $this->collCommonMarches;
                $this->commonMarchesScheduledForDeletion->clear();
            }
            $this->commonMarchesScheduledForDeletion[]= $commonMarche;
            $commonMarche->setCommonCategorieConsultation(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonExecContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonCategorieConsultation The current object (for fluent API support)
     * @see        addCommonExecContrats()
     */
    public function clearCommonExecContrats()
    {
        $this->collCommonExecContrats = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContrats($v = true)
    {
        $this->collCommonExecContratsPartial = $v;
    }

    /**
     * Initializes the collCommonExecContrats collection.
     *
     * By default this just sets the collCommonExecContrats collection to an empty array (like clearcollCommonExecContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContrats($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContrats && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContrats = new PropelObjectCollection();
        $this->collCommonExecContrats->setModel('CommonExecContrat');
    }

    /**
     * Gets an array of CommonExecContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonCategorieConsultation is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     * @throws PropelException
     */
    public function getCommonExecContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContrats) {
                // return empty collection
                $this->initCommonExecContrats();
            } else {
                $collCommonExecContrats = CommonExecContratQuery::create(null, $criteria)
                    ->filterByCommonCategorieConsultation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContratsPartial && count($collCommonExecContrats)) {
                      $this->initCommonExecContrats(false);

                      foreach ($collCommonExecContrats as $obj) {
                        if (false == $this->collCommonExecContrats->contains($obj)) {
                          $this->collCommonExecContrats->append($obj);
                        }
                      }

                      $this->collCommonExecContratsPartial = true;
                    }

                    $collCommonExecContrats->getInternalIterator()->rewind();

                    return $collCommonExecContrats;
                }

                if ($partial && $this->collCommonExecContrats) {
                    foreach ($this->collCommonExecContrats as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContrats[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContrats = $collCommonExecContrats;
                $this->collCommonExecContratsPartial = false;
            }
        }

        return $this->collCommonExecContrats;
    }

    /**
     * Sets a collection of CommonExecContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function setCommonExecContrats(PropelCollection $commonExecContrats, PropelPDO $con = null)
    {
        $commonExecContratsToDelete = $this->getCommonExecContrats(new Criteria(), $con)->diff($commonExecContrats);


        $this->commonExecContratsScheduledForDeletion = $commonExecContratsToDelete;

        foreach ($commonExecContratsToDelete as $commonExecContratRemoved) {
            $commonExecContratRemoved->setCommonCategorieConsultation(null);
        }

        $this->collCommonExecContrats = null;
        foreach ($commonExecContrats as $commonExecContrat) {
            $this->addCommonExecContrat($commonExecContrat);
        }

        $this->collCommonExecContrats = $commonExecContrats;
        $this->collCommonExecContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContrat objects.
     * @throws PropelException
     */
    public function countCommonExecContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContrats());
            }
            $query = CommonExecContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonCategorieConsultation($this)
                ->count($con);
        }

        return count($this->collCommonExecContrats);
    }

    /**
     * Method called to associate a CommonExecContrat object to this object
     * through the CommonExecContrat foreign key attribute.
     *
     * @param   CommonExecContrat $l CommonExecContrat
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function addCommonExecContrat(CommonExecContrat $l)
    {
        if ($this->collCommonExecContrats === null) {
            $this->initCommonExecContrats();
            $this->collCommonExecContratsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContrat $commonExecContrat The commonExecContrat object to add.
     */
    protected function doAddCommonExecContrat($commonExecContrat)
    {
        $this->collCommonExecContrats[]= $commonExecContrat;
        $commonExecContrat->setCommonCategorieConsultation($this);
    }

    /**
     * @param	CommonExecContrat $commonExecContrat The commonExecContrat object to remove.
     * @return CommonCategorieConsultation The current object (for fluent API support)
     */
    public function removeCommonExecContrat($commonExecContrat)
    {
        if ($this->getCommonExecContrats()->contains($commonExecContrat)) {
            $this->collCommonExecContrats->remove($this->collCommonExecContrats->search($commonExecContrat));
            if (null === $this->commonExecContratsScheduledForDeletion) {
                $this->commonExecContratsScheduledForDeletion = clone $this->collCommonExecContrats;
                $this->commonExecContratsScheduledForDeletion->clear();
            }
            $this->commonExecContratsScheduledForDeletion[]= clone $commonExecContrat;
            $commonExecContrat->setCommonCategorieConsultation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonCategorieConsultation is new, it will return
     * an empty collection; or if this CommonCategorieConsultation has previously
     * been saved, it will retrieve related CommonExecContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonCategorieConsultation.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsJoinCommonAgentRelatedByIdAgentCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentCrea', $join_behavior);

        return $this->getCommonExecContrats($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonCategorieConsultation is new, it will return
     * an empty collection; or if this CommonCategorieConsultation has previously
     * been saved, it will retrieve related CommonExecContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonCategorieConsultation.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsJoinCommonAgentRelatedByIdAgentGestion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentGestion', $join_behavior);

        return $this->getCommonExecContrats($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonCategorieConsultation is new, it will return
     * an empty collection; or if this CommonCategorieConsultation has previously
     * been saved, it will retrieve related CommonExecContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonCategorieConsultation.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsJoinCommonAgentRelatedByIdAgentModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentModif', $join_behavior);

        return $this->getCommonExecContrats($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonCategorieConsultation is new, it will return
     * an empty collection; or if this CommonCategorieConsultation has previously
     * been saved, it will retrieve related CommonExecContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonCategorieConsultation.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsJoinCommonExecTypeContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeContrat', $join_behavior);

        return $this->getCommonExecContrats($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonCategorieConsultation is new, it will return
     * an empty collection; or if this CommonCategorieConsultation has previously
     * been saved, it will retrieve related CommonExecContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonCategorieConsultation.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsJoinCommonExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeStructure', $join_behavior);

        return $this->getCommonExecContrats($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->libelle = null;
        $this->libelle_fr = null;
        $this->libelle_en = null;
        $this->libelle_es = null;
        $this->libelle_su = null;
        $this->libelle_du = null;
        $this->libelle_cz = null;
        $this->libelle_ar = null;
        $this->id_categorie_anm = null;
        $this->libelle_it = null;
        $this->code = null;
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
            if ($this->collCommonMarches) {
                foreach ($this->collCommonMarches as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecContrats) {
                foreach ($this->collCommonExecContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonMarches instanceof PropelCollection) {
            $this->collCommonMarches->clearIterator();
        }
        $this->collCommonMarches = null;
        if ($this->collCommonExecContrats instanceof PropelCollection) {
            $this->collCommonExecContrats->clearIterator();
        }
        $this->collCommonExecContrats = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonCategorieConsultationPeer::DEFAULT_STRING_FORMAT);
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
