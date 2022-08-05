<?php


/**
 * Base class that represents a row from the 'Entreprise_info_exercice' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEntrepriseInfoExercice extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEntrepriseInfoExercicePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEntrepriseInfoExercicePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_entreprise field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the debutexerciceglob field.
     * @var        string
     */
    protected $debutexerciceglob;

    /**
     * The value for the finexerciceglob field.
     * @var        string
     */
    protected $finexerciceglob;

    /**
     * The value for the ventesglob field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ventesglob;

    /**
     * The value for the biensglob field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $biensglob;

    /**
     * The value for the servicesglob field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $servicesglob;

    /**
     * The value for the totalglob field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $totalglob;

    /**
     * The value for the annee_cloture_exercice field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $annee_cloture_exercice;

    /**
     * The value for the effectif_moyen field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $effectif_moyen;

    /**
     * The value for the effectif_encadrement field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $effectif_encadrement;

    /**
     * The value for the pme field.
     * @var        string
     */
    protected $pme;

    /**
     * The value for the chiffre_affaires field.
     * @var        string
     */
    protected $chiffre_affaires;

    /**
     * The value for the besoin_excedent_financement field.
     * @var        string
     */
    protected $besoin_excedent_financement;

    /**
     * The value for the cash_flow field.
     * @var        string
     */
    protected $cash_flow;

    /**
     * The value for the capacite_endettement field.
     * @var        string
     */
    protected $capacite_endettement;

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
        $this->id_entreprise = 0;
        $this->ventesglob = '0';
        $this->biensglob = '0';
        $this->servicesglob = '0';
        $this->totalglob = '0';
        $this->annee_cloture_exercice = '';
        $this->effectif_moyen = 0;
        $this->effectif_encadrement = 0;
    }

    /**
     * Initializes internal state of BaseCommonEntrepriseInfoExercice object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_entreprise] column value.
     * 
     * @return int
     */
    public function getIdEntreprise()
    {

        return $this->id_entreprise;
    }

    /**
     * Get the [debutexerciceglob] column value.
     * 
     * @return string
     */
    public function getDebutexerciceglob()
    {

        return $this->debutexerciceglob;
    }

    /**
     * Get the [finexerciceglob] column value.
     * 
     * @return string
     */
    public function getFinexerciceglob()
    {

        return $this->finexerciceglob;
    }

    /**
     * Get the [ventesglob] column value.
     * 
     * @return string
     */
    public function getVentesglob()
    {

        return $this->ventesglob;
    }

    /**
     * Get the [biensglob] column value.
     * 
     * @return string
     */
    public function getBiensglob()
    {

        return $this->biensglob;
    }

    /**
     * Get the [servicesglob] column value.
     * 
     * @return string
     */
    public function getServicesglob()
    {

        return $this->servicesglob;
    }

    /**
     * Get the [totalglob] column value.
     * 
     * @return string
     */
    public function getTotalglob()
    {

        return $this->totalglob;
    }

    /**
     * Get the [annee_cloture_exercice] column value.
     * 
     * @return string
     */
    public function getAnneeClotureExercice()
    {

        return $this->annee_cloture_exercice;
    }

    /**
     * Get the [effectif_moyen] column value.
     * 
     * @return int
     */
    public function getEffectifMoyen()
    {

        return $this->effectif_moyen;
    }

    /**
     * Get the [effectif_encadrement] column value.
     * 
     * @return int
     */
    public function getEffectifEncadrement()
    {

        return $this->effectif_encadrement;
    }

    /**
     * Get the [pme] column value.
     * 
     * @return string
     */
    public function getPme()
    {

        return $this->pme;
    }

    /**
     * Get the [chiffre_affaires] column value.
     * 
     * @return string
     */
    public function getChiffreAffaires()
    {

        return $this->chiffre_affaires;
    }

    /**
     * Get the [besoin_excedent_financement] column value.
     * 
     * @return string
     */
    public function getBesoinExcedentFinancement()
    {

        return $this->besoin_excedent_financement;
    }

    /**
     * Get the [cash_flow] column value.
     * 
     * @return string
     */
    public function getCashFlow()
    {

        return $this->cash_flow;
    }

    /**
     * Get the [capacite_endettement] column value.
     * 
     * @return string
     */
    public function getCapaciteEndettement()
    {

        return $this->capacite_endettement;
    }

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [debutexerciceglob] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setDebutexerciceglob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->debutexerciceglob !== $v) {
            $this->debutexerciceglob = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::DEBUTEXERCICEGLOB;
        }


        return $this;
    } // setDebutexerciceglob()

    /**
     * Set the value of [finexerciceglob] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setFinexerciceglob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->finexerciceglob !== $v) {
            $this->finexerciceglob = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::FINEXERCICEGLOB;
        }


        return $this;
    } // setFinexerciceglob()

    /**
     * Set the value of [ventesglob] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setVentesglob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ventesglob !== $v) {
            $this->ventesglob = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::VENTESGLOB;
        }


        return $this;
    } // setVentesglob()

    /**
     * Set the value of [biensglob] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setBiensglob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->biensglob !== $v) {
            $this->biensglob = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::BIENSGLOB;
        }


        return $this;
    } // setBiensglob()

    /**
     * Set the value of [servicesglob] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setServicesglob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->servicesglob !== $v) {
            $this->servicesglob = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::SERVICESGLOB;
        }


        return $this;
    } // setServicesglob()

    /**
     * Set the value of [totalglob] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setTotalglob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->totalglob !== $v) {
            $this->totalglob = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::TOTALGLOB;
        }


        return $this;
    } // setTotalglob()

    /**
     * Set the value of [annee_cloture_exercice] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setAnneeClotureExercice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annee_cloture_exercice !== $v) {
            $this->annee_cloture_exercice = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE;
        }


        return $this;
    } // setAnneeClotureExercice()

    /**
     * Set the value of [effectif_moyen] column.
     * 
     * @param int $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setEffectifMoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->effectif_moyen !== $v) {
            $this->effectif_moyen = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::EFFECTIF_MOYEN;
        }


        return $this;
    } // setEffectifMoyen()

    /**
     * Set the value of [effectif_encadrement] column.
     * 
     * @param int $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setEffectifEncadrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->effectif_encadrement !== $v) {
            $this->effectif_encadrement = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::EFFECTIF_ENCADREMENT;
        }


        return $this;
    } // setEffectifEncadrement()

    /**
     * Set the value of [pme] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setPme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pme !== $v) {
            $this->pme = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::PME;
        }


        return $this;
    } // setPme()

    /**
     * Set the value of [chiffre_affaires] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setChiffreAffaires($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chiffre_affaires !== $v) {
            $this->chiffre_affaires = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::CHIFFRE_AFFAIRES;
        }


        return $this;
    } // setChiffreAffaires()

    /**
     * Set the value of [besoin_excedent_financement] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setBesoinExcedentFinancement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->besoin_excedent_financement !== $v) {
            $this->besoin_excedent_financement = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::BESOIN_EXCEDENT_FINANCEMENT;
        }


        return $this;
    } // setBesoinExcedentFinancement()

    /**
     * Set the value of [cash_flow] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setCashFlow($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cash_flow !== $v) {
            $this->cash_flow = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::CASH_FLOW;
        }


        return $this;
    } // setCashFlow()

    /**
     * Set the value of [capacite_endettement] column.
     * 
     * @param string $v new value
     * @return CommonEntrepriseInfoExercice The current object (for fluent API support)
     */
    public function setCapaciteEndettement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->capacite_endettement !== $v) {
            $this->capacite_endettement = $v;
            $this->modifiedColumns[] = CommonEntrepriseInfoExercicePeer::CAPACITE_ENDETTEMENT;
        }


        return $this;
    } // setCapaciteEndettement()

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
            if ($this->id_entreprise !== 0) {
                return false;
            }

            if ($this->ventesglob !== '0') {
                return false;
            }

            if ($this->biensglob !== '0') {
                return false;
            }

            if ($this->servicesglob !== '0') {
                return false;
            }

            if ($this->totalglob !== '0') {
                return false;
            }

            if ($this->annee_cloture_exercice !== '') {
                return false;
            }

            if ($this->effectif_moyen !== 0) {
                return false;
            }

            if ($this->effectif_encadrement !== 0) {
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

            $this->id_entreprise = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->debutexerciceglob = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->finexerciceglob = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->ventesglob = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->biensglob = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->servicesglob = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->totalglob = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->annee_cloture_exercice = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->effectif_moyen = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->effectif_encadrement = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->pme = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->chiffre_affaires = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->besoin_excedent_financement = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->cash_flow = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->capacite_endettement = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = CommonEntrepriseInfoExercicePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEntrepriseInfoExercice object", $e);
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
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEntrepriseInfoExercicePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEntrepriseInfoExerciceQuery::create()
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
            $con = Propel::getConnection(CommonEntrepriseInfoExercicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonEntrepriseInfoExercicePeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`id_Entreprise`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::DEBUTEXERCICEGLOB)) {
            $modifiedColumns[':p' . $index++]  = '`debutExerciceGlob`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::FINEXERCICEGLOB)) {
            $modifiedColumns[':p' . $index++]  = '`finExerciceGlob`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::VENTESGLOB)) {
            $modifiedColumns[':p' . $index++]  = '`ventesGlob`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::BIENSGLOB)) {
            $modifiedColumns[':p' . $index++]  = '`biensGlob`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::SERVICESGLOB)) {
            $modifiedColumns[':p' . $index++]  = '`servicesGlob`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::TOTALGLOB)) {
            $modifiedColumns[':p' . $index++]  = '`totalGlob`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE)) {
            $modifiedColumns[':p' . $index++]  = '`annee_cloture_exercice`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::EFFECTIF_MOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`effectif_moyen`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::EFFECTIF_ENCADREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`effectif_encadrement`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::PME)) {
            $modifiedColumns[':p' . $index++]  = '`pme`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::CHIFFRE_AFFAIRES)) {
            $modifiedColumns[':p' . $index++]  = '`chiffre_affaires`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::BESOIN_EXCEDENT_FINANCEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`besoin_excedent_financement`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::CASH_FLOW)) {
            $modifiedColumns[':p' . $index++]  = '`cash_flow`';
        }
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::CAPACITE_ENDETTEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`capacite_endettement`';
        }

        $sql = sprintf(
            'INSERT INTO `Entreprise_info_exercice` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_Entreprise`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`debutExerciceGlob`':						
                        $stmt->bindValue($identifier, $this->debutexerciceglob, PDO::PARAM_STR);
                        break;
                    case '`finExerciceGlob`':						
                        $stmt->bindValue($identifier, $this->finexerciceglob, PDO::PARAM_STR);
                        break;
                    case '`ventesGlob`':						
                        $stmt->bindValue($identifier, $this->ventesglob, PDO::PARAM_STR);
                        break;
                    case '`biensGlob`':						
                        $stmt->bindValue($identifier, $this->biensglob, PDO::PARAM_STR);
                        break;
                    case '`servicesGlob`':						
                        $stmt->bindValue($identifier, $this->servicesglob, PDO::PARAM_STR);
                        break;
                    case '`totalGlob`':						
                        $stmt->bindValue($identifier, $this->totalglob, PDO::PARAM_STR);
                        break;
                    case '`annee_cloture_exercice`':						
                        $stmt->bindValue($identifier, $this->annee_cloture_exercice, PDO::PARAM_STR);
                        break;
                    case '`effectif_moyen`':						
                        $stmt->bindValue($identifier, $this->effectif_moyen, PDO::PARAM_INT);
                        break;
                    case '`effectif_encadrement`':						
                        $stmt->bindValue($identifier, $this->effectif_encadrement, PDO::PARAM_INT);
                        break;
                    case '`pme`':						
                        $stmt->bindValue($identifier, $this->pme, PDO::PARAM_STR);
                        break;
                    case '`chiffre_affaires`':						
                        $stmt->bindValue($identifier, $this->chiffre_affaires, PDO::PARAM_STR);
                        break;
                    case '`besoin_excedent_financement`':						
                        $stmt->bindValue($identifier, $this->besoin_excedent_financement, PDO::PARAM_STR);
                        break;
                    case '`cash_flow`':						
                        $stmt->bindValue($identifier, $this->cash_flow, PDO::PARAM_STR);
                        break;
                    case '`capacite_endettement`':						
                        $stmt->bindValue($identifier, $this->capacite_endettement, PDO::PARAM_STR);
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


            if (($retval = CommonEntrepriseInfoExercicePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonEntrepriseInfoExercicePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEntreprise();
                break;
            case 1:
                return $this->getDebutexerciceglob();
                break;
            case 2:
                return $this->getFinexerciceglob();
                break;
            case 3:
                return $this->getVentesglob();
                break;
            case 4:
                return $this->getBiensglob();
                break;
            case 5:
                return $this->getServicesglob();
                break;
            case 6:
                return $this->getTotalglob();
                break;
            case 7:
                return $this->getAnneeClotureExercice();
                break;
            case 8:
                return $this->getEffectifMoyen();
                break;
            case 9:
                return $this->getEffectifEncadrement();
                break;
            case 10:
                return $this->getPme();
                break;
            case 11:
                return $this->getChiffreAffaires();
                break;
            case 12:
                return $this->getBesoinExcedentFinancement();
                break;
            case 13:
                return $this->getCashFlow();
                break;
            case 14:
                return $this->getCapaciteEndettement();
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
        if (isset($alreadyDumpedObjects['CommonEntrepriseInfoExercice'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEntrepriseInfoExercice'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonEntrepriseInfoExercicePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEntreprise(),
            $keys[1] => $this->getDebutexerciceglob(),
            $keys[2] => $this->getFinexerciceglob(),
            $keys[3] => $this->getVentesglob(),
            $keys[4] => $this->getBiensglob(),
            $keys[5] => $this->getServicesglob(),
            $keys[6] => $this->getTotalglob(),
            $keys[7] => $this->getAnneeClotureExercice(),
            $keys[8] => $this->getEffectifMoyen(),
            $keys[9] => $this->getEffectifEncadrement(),
            $keys[10] => $this->getPme(),
            $keys[11] => $this->getChiffreAffaires(),
            $keys[12] => $this->getBesoinExcedentFinancement(),
            $keys[13] => $this->getCashFlow(),
            $keys[14] => $this->getCapaciteEndettement(),
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
        $pos = CommonEntrepriseInfoExercicePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEntreprise($value);
                break;
            case 1:
                $this->setDebutexerciceglob($value);
                break;
            case 2:
                $this->setFinexerciceglob($value);
                break;
            case 3:
                $this->setVentesglob($value);
                break;
            case 4:
                $this->setBiensglob($value);
                break;
            case 5:
                $this->setServicesglob($value);
                break;
            case 6:
                $this->setTotalglob($value);
                break;
            case 7:
                $this->setAnneeClotureExercice($value);
                break;
            case 8:
                $this->setEffectifMoyen($value);
                break;
            case 9:
                $this->setEffectifEncadrement($value);
                break;
            case 10:
                $this->setPme($value);
                break;
            case 11:
                $this->setChiffreAffaires($value);
                break;
            case 12:
                $this->setBesoinExcedentFinancement($value);
                break;
            case 13:
                $this->setCashFlow($value);
                break;
            case 14:
                $this->setCapaciteEndettement($value);
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
        $keys = CommonEntrepriseInfoExercicePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEntreprise($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDebutexerciceglob($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFinexerciceglob($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVentesglob($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setBiensglob($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setServicesglob($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTotalglob($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAnneeClotureExercice($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEffectifMoyen($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEffectifEncadrement($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPme($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setChiffreAffaires($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setBesoinExcedentFinancement($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCashFlow($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCapaciteEndettement($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEntrepriseInfoExercicePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE)) $criteria->add(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::DEBUTEXERCICEGLOB)) $criteria->add(CommonEntrepriseInfoExercicePeer::DEBUTEXERCICEGLOB, $this->debutexerciceglob);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::FINEXERCICEGLOB)) $criteria->add(CommonEntrepriseInfoExercicePeer::FINEXERCICEGLOB, $this->finexerciceglob);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::VENTESGLOB)) $criteria->add(CommonEntrepriseInfoExercicePeer::VENTESGLOB, $this->ventesglob);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::BIENSGLOB)) $criteria->add(CommonEntrepriseInfoExercicePeer::BIENSGLOB, $this->biensglob);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::SERVICESGLOB)) $criteria->add(CommonEntrepriseInfoExercicePeer::SERVICESGLOB, $this->servicesglob);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::TOTALGLOB)) $criteria->add(CommonEntrepriseInfoExercicePeer::TOTALGLOB, $this->totalglob);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE)) $criteria->add(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE, $this->annee_cloture_exercice);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::EFFECTIF_MOYEN)) $criteria->add(CommonEntrepriseInfoExercicePeer::EFFECTIF_MOYEN, $this->effectif_moyen);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::EFFECTIF_ENCADREMENT)) $criteria->add(CommonEntrepriseInfoExercicePeer::EFFECTIF_ENCADREMENT, $this->effectif_encadrement);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::PME)) $criteria->add(CommonEntrepriseInfoExercicePeer::PME, $this->pme);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::CHIFFRE_AFFAIRES)) $criteria->add(CommonEntrepriseInfoExercicePeer::CHIFFRE_AFFAIRES, $this->chiffre_affaires);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::BESOIN_EXCEDENT_FINANCEMENT)) $criteria->add(CommonEntrepriseInfoExercicePeer::BESOIN_EXCEDENT_FINANCEMENT, $this->besoin_excedent_financement);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::CASH_FLOW)) $criteria->add(CommonEntrepriseInfoExercicePeer::CASH_FLOW, $this->cash_flow);
        if ($this->isColumnModified(CommonEntrepriseInfoExercicePeer::CAPACITE_ENDETTEMENT)) $criteria->add(CommonEntrepriseInfoExercicePeer::CAPACITE_ENDETTEMENT, $this->capacite_endettement);

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
        $criteria = new Criteria(CommonEntrepriseInfoExercicePeer::DATABASE_NAME);
        $criteria->add(CommonEntrepriseInfoExercicePeer::ID_ENTREPRISE, $this->id_entreprise);
        $criteria->add(CommonEntrepriseInfoExercicePeer::ANNEE_CLOTURE_EXERCICE, $this->annee_cloture_exercice);

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
        $pks[0] = $this->getIdEntreprise();
        $pks[1] = $this->getAnneeClotureExercice();

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
        $this->setIdEntreprise($keys[0]);
        $this->setAnneeClotureExercice($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdEntreprise()) && (null === $this->getAnneeClotureExercice());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonEntrepriseInfoExercice (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setDebutexerciceglob($this->getDebutexerciceglob());
        $copyObj->setFinexerciceglob($this->getFinexerciceglob());
        $copyObj->setVentesglob($this->getVentesglob());
        $copyObj->setBiensglob($this->getBiensglob());
        $copyObj->setServicesglob($this->getServicesglob());
        $copyObj->setTotalglob($this->getTotalglob());
        $copyObj->setAnneeClotureExercice($this->getAnneeClotureExercice());
        $copyObj->setEffectifMoyen($this->getEffectifMoyen());
        $copyObj->setEffectifEncadrement($this->getEffectifEncadrement());
        $copyObj->setPme($this->getPme());
        $copyObj->setChiffreAffaires($this->getChiffreAffaires());
        $copyObj->setBesoinExcedentFinancement($this->getBesoinExcedentFinancement());
        $copyObj->setCashFlow($this->getCashFlow());
        $copyObj->setCapaciteEndettement($this->getCapaciteEndettement());
        if ($makeNew) {
            $copyObj->setNew(true);
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
     * @return CommonEntrepriseInfoExercice Clone of current object.
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
     * @return CommonEntrepriseInfoExercicePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEntrepriseInfoExercicePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_entreprise = null;
        $this->debutexerciceglob = null;
        $this->finexerciceglob = null;
        $this->ventesglob = null;
        $this->biensglob = null;
        $this->servicesglob = null;
        $this->totalglob = null;
        $this->annee_cloture_exercice = null;
        $this->effectif_moyen = null;
        $this->effectif_encadrement = null;
        $this->pme = null;
        $this->chiffre_affaires = null;
        $this->besoin_excedent_financement = null;
        $this->cash_flow = null;
        $this->capacite_endettement = null;
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
        return (string) $this->exportTo(CommonEntrepriseInfoExercicePeer::DEFAULT_STRING_FORMAT);
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
