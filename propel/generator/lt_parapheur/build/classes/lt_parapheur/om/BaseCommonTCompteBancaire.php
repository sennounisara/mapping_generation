<?php


/**
 * Base class that represents a row from the 't_compte_bancaire' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCompteBancaire extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCompteBancairePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCompteBancairePeer
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
     * The value for the id_entreprise field.
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the id_inscrit field.
     * @var        int
     */
    protected $id_inscrit;

    /**
     * The value for the denomination field.
     * @var        string
     */
    protected $denomination;

    /**
     * The value for the id_banque field.
     * @var        int
     */
    protected $id_banque;

    /**
     * The value for the identifiant_bancaire field.
     * @var        string
     */
    protected $identifiant_bancaire;

    /**
     * The value for the code_ville field.
     * @var        string
     */
    protected $code_ville;

    /**
     * The value for the code_agence field.
     * @var        string
     */
    protected $code_agence;

    /**
     * The value for the id_ville field.
     * @var        int
     */
    protected $id_ville;

    /**
     * The value for the supprime field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprime;

    /**
     * The value for the actif field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $actif;

    /**
     * The value for the bancarise field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $bancarise;

    /**
     * @var        CommonTBanque
     */
    protected $aCommonTBanque;

    /**
     * @var        PropelObjectCollection|CommonCautionDemande[] Collection to store aggregation of CommonCautionDemande objects.
     */
    protected $collCommonCautionDemandes;
    protected $collCommonCautionDemandesPartial;

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
    protected $commonCautionDemandesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->supprime = '0';
        $this->actif = '1';
        $this->bancarise = '1';
    }

    /**
     * Initializes internal state of BaseCommonTCompteBancaire object.
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
     * Get the [id_entreprise] column value.
     * 
     * @return int
     */
    public function getIdEntreprise()
    {

        return $this->id_entreprise;
    }

    /**
     * Get the [id_inscrit] column value.
     * 
     * @return int
     */
    public function getIdInscrit()
    {

        return $this->id_inscrit;
    }

    /**
     * Get the [denomination] column value.
     * 
     * @return string
     */
    public function getDenomination()
    {

        return $this->denomination;
    }

    /**
     * Get the [id_banque] column value.
     * 
     * @return int
     */
    public function getIdBanque()
    {

        return $this->id_banque;
    }

    /**
     * Get the [identifiant_bancaire] column value.
     * 
     * @return string
     */
    public function getIdentifiantBancaire()
    {

        return $this->identifiant_bancaire;
    }

    /**
     * Get the [code_ville] column value.
     * 
     * @return string
     */
    public function getCodeVille()
    {

        return $this->code_ville;
    }

    /**
     * Get the [code_agence] column value.
     * 
     * @return string
     */
    public function getCodeAgence()
    {

        return $this->code_agence;
    }

    /**
     * Get the [id_ville] column value.
     * 
     * @return int
     */
    public function getIdVille()
    {

        return $this->id_ville;
    }

    /**
     * Get the [supprime] column value.
     * 
     * @return string
     */
    public function getSupprime()
    {

        return $this->supprime;
    }

    /**
     * Get the [actif] column value.
     * 
     * @return string
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Get the [bancarise] column value.
     * 
     * @return string
     */
    public function getBancarise()
    {

        return $this->bancarise;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [denomination] column.
     * 
     * @param string $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setDenomination($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination !== $v) {
            $this->denomination = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::DENOMINATION;
        }


        return $this;
    } // setDenomination()

    /**
     * Set the value of [id_banque] column.
     * 
     * @param int $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setIdBanque($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_banque !== $v) {
            $this->id_banque = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::ID_BANQUE;
        }

        if ($this->aCommonTBanque !== null && $this->aCommonTBanque->getId() !== $v) {
            $this->aCommonTBanque = null;
        }


        return $this;
    } // setIdBanque()

    /**
     * Set the value of [identifiant_bancaire] column.
     * 
     * @param string $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setIdentifiantBancaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_bancaire !== $v) {
            $this->identifiant_bancaire = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::IDENTIFIANT_BANCAIRE;
        }


        return $this;
    } // setIdentifiantBancaire()

    /**
     * Set the value of [code_ville] column.
     * 
     * @param string $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setCodeVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_ville !== $v) {
            $this->code_ville = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::CODE_VILLE;
        }


        return $this;
    } // setCodeVille()

    /**
     * Set the value of [code_agence] column.
     * 
     * @param string $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setCodeAgence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_agence !== $v) {
            $this->code_agence = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::CODE_AGENCE;
        }


        return $this;
    } // setCodeAgence()

    /**
     * Set the value of [id_ville] column.
     * 
     * @param int $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setIdVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ville !== $v) {
            $this->id_ville = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::ID_VILLE;
        }


        return $this;
    } // setIdVille()

    /**
     * Set the value of [supprime] column.
     * 
     * @param string $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setSupprime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprime !== $v) {
            $this->supprime = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::SUPPRIME;
        }


        return $this;
    } // setSupprime()

    /**
     * Set the value of [actif] column.
     * 
     * @param string $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setActif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif !== $v) {
            $this->actif = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::ACTIF;
        }


        return $this;
    } // setActif()

    /**
     * Set the value of [bancarise] column.
     * 
     * @param string $v new value
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setBancarise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bancarise !== $v) {
            $this->bancarise = $v;
            $this->modifiedColumns[] = CommonTCompteBancairePeer::BANCARISE;
        }


        return $this;
    } // setBancarise()

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
            if ($this->supprime !== '0') {
                return false;
            }

            if ($this->actif !== '1') {
                return false;
            }

            if ($this->bancarise !== '1') {
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
            $this->id_entreprise = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_inscrit = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->denomination = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_banque = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->identifiant_bancaire = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->code_ville = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->code_agence = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->id_ville = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->supprime = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->actif = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->bancarise = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CommonTCompteBancairePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCompteBancaire object", $e);
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

        if ($this->aCommonTBanque !== null && $this->id_banque !== $this->aCommonTBanque->getId()) {
            $this->aCommonTBanque = null;
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
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCompteBancairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonTBanque = null;
            $this->collCommonCautionDemandes = null;

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
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCompteBancaireQuery::create()
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
            $con = Propel::getConnection(CommonTCompteBancairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCompteBancairePeer::addInstanceToPool($this);
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

            if ($this->aCommonTBanque !== null) {
                if ($this->aCommonTBanque->isModified() || $this->aCommonTBanque->isNew()) {
                    $affectedRows += $this->aCommonTBanque->save($con);
                }
                $this->setCommonTBanque($this->aCommonTBanque);
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

            if ($this->commonCautionDemandesScheduledForDeletion !== null) {
                if (!$this->commonCautionDemandesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonCautionDemandesScheduledForDeletion as $commonCautionDemande) {
                        // need to save related object because we set the relation to null
                        $commonCautionDemande->save($con);
                    }
                    $this->commonCautionDemandesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonCautionDemandes !== null) {
                foreach ($this->collCommonCautionDemandes as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTCompteBancairePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCompteBancairePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCompteBancairePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTREPRISE`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_INSCRIT`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::DENOMINATION)) {
            $modifiedColumns[':p' . $index++]  = '`DENOMINATION`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::ID_BANQUE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_BANQUE`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::IDENTIFIANT_BANCAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_BANCAIRE`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::CODE_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_VILLE`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::CODE_AGENCE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_AGENCE`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::ID_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_VILLE`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::SUPPRIME)) {
            $modifiedColumns[':p' . $index++]  = '`SUPPRIME`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`ACTIF`';
        }
        if ($this->isColumnModified(CommonTCompteBancairePeer::BANCARISE)) {
            $modifiedColumns[':p' . $index++]  = '`BANCARISE`';
        }

        $sql = sprintf(
            'INSERT INTO `t_compte_bancaire` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTREPRISE`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`ID_INSCRIT`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`DENOMINATION`':						
                        $stmt->bindValue($identifier, $this->denomination, PDO::PARAM_STR);
                        break;
                    case '`ID_BANQUE`':						
                        $stmt->bindValue($identifier, $this->id_banque, PDO::PARAM_INT);
                        break;
                    case '`IDENTIFIANT_BANCAIRE`':						
                        $stmt->bindValue($identifier, $this->identifiant_bancaire, PDO::PARAM_STR);
                        break;
                    case '`CODE_VILLE`':						
                        $stmt->bindValue($identifier, $this->code_ville, PDO::PARAM_STR);
                        break;
                    case '`CODE_AGENCE`':						
                        $stmt->bindValue($identifier, $this->code_agence, PDO::PARAM_STR);
                        break;
                    case '`ID_VILLE`':						
                        $stmt->bindValue($identifier, $this->id_ville, PDO::PARAM_INT);
                        break;
                    case '`SUPPRIME`':						
                        $stmt->bindValue($identifier, $this->supprime, PDO::PARAM_STR);
                        break;
                    case '`ACTIF`':						
                        $stmt->bindValue($identifier, $this->actif, PDO::PARAM_STR);
                        break;
                    case '`BANCARISE`':						
                        $stmt->bindValue($identifier, $this->bancarise, PDO::PARAM_STR);
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

            if ($this->aCommonTBanque !== null) {
                if (!$this->aCommonTBanque->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTBanque->getValidationFailures());
                }
            }


            if (($retval = CommonTCompteBancairePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonCautionDemandes !== null) {
                    foreach ($this->collCommonCautionDemandes as $referrerFK) {
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
        $pos = CommonTCompteBancairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEntreprise();
                break;
            case 2:
                return $this->getIdInscrit();
                break;
            case 3:
                return $this->getDenomination();
                break;
            case 4:
                return $this->getIdBanque();
                break;
            case 5:
                return $this->getIdentifiantBancaire();
                break;
            case 6:
                return $this->getCodeVille();
                break;
            case 7:
                return $this->getCodeAgence();
                break;
            case 8:
                return $this->getIdVille();
                break;
            case 9:
                return $this->getSupprime();
                break;
            case 10:
                return $this->getActif();
                break;
            case 11:
                return $this->getBancarise();
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
        if (isset($alreadyDumpedObjects['CommonTCompteBancaire'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCompteBancaire'][$this->getPrimaryKey()] = true;
        $keys = CommonTCompteBancairePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdEntreprise(),
            $keys[2] => $this->getIdInscrit(),
            $keys[3] => $this->getDenomination(),
            $keys[4] => $this->getIdBanque(),
            $keys[5] => $this->getIdentifiantBancaire(),
            $keys[6] => $this->getCodeVille(),
            $keys[7] => $this->getCodeAgence(),
            $keys[8] => $this->getIdVille(),
            $keys[9] => $this->getSupprime(),
            $keys[10] => $this->getActif(),
            $keys[11] => $this->getBancarise(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonTBanque) {
                $result['CommonTBanque'] = $this->aCommonTBanque->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonCautionDemandes) {
                $result['CommonCautionDemandes'] = $this->collCommonCautionDemandes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTCompteBancairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEntreprise($value);
                break;
            case 2:
                $this->setIdInscrit($value);
                break;
            case 3:
                $this->setDenomination($value);
                break;
            case 4:
                $this->setIdBanque($value);
                break;
            case 5:
                $this->setIdentifiantBancaire($value);
                break;
            case 6:
                $this->setCodeVille($value);
                break;
            case 7:
                $this->setCodeAgence($value);
                break;
            case 8:
                $this->setIdVille($value);
                break;
            case 9:
                $this->setSupprime($value);
                break;
            case 10:
                $this->setActif($value);
                break;
            case 11:
                $this->setBancarise($value);
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
        $keys = CommonTCompteBancairePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdEntreprise($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdInscrit($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDenomination($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdBanque($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdentifiantBancaire($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCodeVille($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCodeAgence($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdVille($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSupprime($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setActif($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setBancarise($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCompteBancairePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCompteBancairePeer::ID)) $criteria->add(CommonTCompteBancairePeer::ID, $this->id);
        if ($this->isColumnModified(CommonTCompteBancairePeer::ID_ENTREPRISE)) $criteria->add(CommonTCompteBancairePeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonTCompteBancairePeer::ID_INSCRIT)) $criteria->add(CommonTCompteBancairePeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonTCompteBancairePeer::DENOMINATION)) $criteria->add(CommonTCompteBancairePeer::DENOMINATION, $this->denomination);
        if ($this->isColumnModified(CommonTCompteBancairePeer::ID_BANQUE)) $criteria->add(CommonTCompteBancairePeer::ID_BANQUE, $this->id_banque);
        if ($this->isColumnModified(CommonTCompteBancairePeer::IDENTIFIANT_BANCAIRE)) $criteria->add(CommonTCompteBancairePeer::IDENTIFIANT_BANCAIRE, $this->identifiant_bancaire);
        if ($this->isColumnModified(CommonTCompteBancairePeer::CODE_VILLE)) $criteria->add(CommonTCompteBancairePeer::CODE_VILLE, $this->code_ville);
        if ($this->isColumnModified(CommonTCompteBancairePeer::CODE_AGENCE)) $criteria->add(CommonTCompteBancairePeer::CODE_AGENCE, $this->code_agence);
        if ($this->isColumnModified(CommonTCompteBancairePeer::ID_VILLE)) $criteria->add(CommonTCompteBancairePeer::ID_VILLE, $this->id_ville);
        if ($this->isColumnModified(CommonTCompteBancairePeer::SUPPRIME)) $criteria->add(CommonTCompteBancairePeer::SUPPRIME, $this->supprime);
        if ($this->isColumnModified(CommonTCompteBancairePeer::ACTIF)) $criteria->add(CommonTCompteBancairePeer::ACTIF, $this->actif);
        if ($this->isColumnModified(CommonTCompteBancairePeer::BANCARISE)) $criteria->add(CommonTCompteBancairePeer::BANCARISE, $this->bancarise);

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
        $criteria = new Criteria(CommonTCompteBancairePeer::DATABASE_NAME);
        $criteria->add(CommonTCompteBancairePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonTCompteBancaire (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setDenomination($this->getDenomination());
        $copyObj->setIdBanque($this->getIdBanque());
        $copyObj->setIdentifiantBancaire($this->getIdentifiantBancaire());
        $copyObj->setCodeVille($this->getCodeVille());
        $copyObj->setCodeAgence($this->getCodeAgence());
        $copyObj->setIdVille($this->getIdVille());
        $copyObj->setSupprime($this->getSupprime());
        $copyObj->setActif($this->getActif());
        $copyObj->setBancarise($this->getBancarise());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonCautionDemandes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonCautionDemande($relObj->copy($deepCopy));
                }
            }

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
     * @return CommonTCompteBancaire Clone of current object.
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
     * @return CommonTCompteBancairePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCompteBancairePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonTBanque object.
     *
     * @param   CommonTBanque $v
     * @return CommonTCompteBancaire The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTBanque(CommonTBanque $v = null)
    {
        if ($v === null) {
            $this->setIdBanque(NULL);
        } else {
            $this->setIdBanque($v->getId());
        }

        $this->aCommonTBanque = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTBanque object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCompteBancaire($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTBanque object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTBanque The associated CommonTBanque object.
     * @throws PropelException
     */
    public function getCommonTBanque(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTBanque === null && ($this->id_banque !== null) && $doQuery) {
            $this->aCommonTBanque = CommonTBanqueQuery::create()->findPk($this->id_banque, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTBanque->addCommonTCompteBancaires($this);
             */
        }

        return $this->aCommonTBanque;
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
        if ('CommonCautionDemande' == $relationName) {
            $this->initCommonCautionDemandes();
        }
    }

    /**
     * Clears out the collCommonCautionDemandes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTCompteBancaire The current object (for fluent API support)
     * @see        addCommonCautionDemandes()
     */
    public function clearCommonCautionDemandes()
    {
        $this->collCommonCautionDemandes = null; // important to set this to null since that means it is uninitialized
        $this->collCommonCautionDemandesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonCautionDemandes collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonCautionDemandes($v = true)
    {
        $this->collCommonCautionDemandesPartial = $v;
    }

    /**
     * Initializes the collCommonCautionDemandes collection.
     *
     * By default this just sets the collCommonCautionDemandes collection to an empty array (like clearcollCommonCautionDemandes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonCautionDemandes($overrideExisting = true)
    {
        if (null !== $this->collCommonCautionDemandes && !$overrideExisting) {
            return;
        }
        $this->collCommonCautionDemandes = new PropelObjectCollection();
        $this->collCommonCautionDemandes->setModel('CommonCautionDemande');
    }

    /**
     * Gets an array of CommonCautionDemande objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTCompteBancaire is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     * @throws PropelException
     */
    public function getCommonCautionDemandes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesPartial && !$this->isNew();
        if (null === $this->collCommonCautionDemandes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandes) {
                // return empty collection
                $this->initCommonCautionDemandes();
            } else {
                $collCommonCautionDemandes = CommonCautionDemandeQuery::create(null, $criteria)
                    ->filterByCommonTCompteBancaire($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonCautionDemandesPartial && count($collCommonCautionDemandes)) {
                      $this->initCommonCautionDemandes(false);

                      foreach ($collCommonCautionDemandes as $obj) {
                        if (false == $this->collCommonCautionDemandes->contains($obj)) {
                          $this->collCommonCautionDemandes->append($obj);
                        }
                      }

                      $this->collCommonCautionDemandesPartial = true;
                    }

                    $collCommonCautionDemandes->getInternalIterator()->rewind();

                    return $collCommonCautionDemandes;
                }

                if ($partial && $this->collCommonCautionDemandes) {
                    foreach ($this->collCommonCautionDemandes as $obj) {
                        if ($obj->isNew()) {
                            $collCommonCautionDemandes[] = $obj;
                        }
                    }
                }

                $this->collCommonCautionDemandes = $collCommonCautionDemandes;
                $this->collCommonCautionDemandesPartial = false;
            }
        }

        return $this->collCommonCautionDemandes;
    }

    /**
     * Sets a collection of CommonCautionDemande objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonCautionDemandes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function setCommonCautionDemandes(PropelCollection $commonCautionDemandes, PropelPDO $con = null)
    {
        $commonCautionDemandesToDelete = $this->getCommonCautionDemandes(new Criteria(), $con)->diff($commonCautionDemandes);


        $this->commonCautionDemandesScheduledForDeletion = $commonCautionDemandesToDelete;

        foreach ($commonCautionDemandesToDelete as $commonCautionDemandeRemoved) {
            $commonCautionDemandeRemoved->setCommonTCompteBancaire(null);
        }

        $this->collCommonCautionDemandes = null;
        foreach ($commonCautionDemandes as $commonCautionDemande) {
            $this->addCommonCautionDemande($commonCautionDemande);
        }

        $this->collCommonCautionDemandes = $commonCautionDemandes;
        $this->collCommonCautionDemandesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonCautionDemande objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonCautionDemande objects.
     * @throws PropelException
     */
    public function countCommonCautionDemandes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionDemandesPartial && !$this->isNew();
        if (null === $this->collCommonCautionDemandes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionDemandes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonCautionDemandes());
            }
            $query = CommonCautionDemandeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTCompteBancaire($this)
                ->count($con);
        }

        return count($this->collCommonCautionDemandes);
    }

    /**
     * Method called to associate a CommonCautionDemande object to this object
     * through the CommonCautionDemande foreign key attribute.
     *
     * @param   CommonCautionDemande $l CommonCautionDemande
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function addCommonCautionDemande(CommonCautionDemande $l)
    {
        if ($this->collCommonCautionDemandes === null) {
            $this->initCommonCautionDemandes();
            $this->collCommonCautionDemandesPartial = true;
        }
        if (!in_array($l, $this->collCommonCautionDemandes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonCautionDemande($l);
        }

        return $this;
    }

    /**
     * @param	CommonCautionDemande $commonCautionDemande The commonCautionDemande object to add.
     */
    protected function doAddCommonCautionDemande($commonCautionDemande)
    {
        $this->collCommonCautionDemandes[]= $commonCautionDemande;
        $commonCautionDemande->setCommonTCompteBancaire($this);
    }

    /**
     * @param	CommonCautionDemande $commonCautionDemande The commonCautionDemande object to remove.
     * @return CommonTCompteBancaire The current object (for fluent API support)
     */
    public function removeCommonCautionDemande($commonCautionDemande)
    {
        if ($this->getCommonCautionDemandes()->contains($commonCautionDemande)) {
            $this->collCommonCautionDemandes->remove($this->collCommonCautionDemandes->search($commonCautionDemande));
            if (null === $this->commonCautionDemandesScheduledForDeletion) {
                $this->commonCautionDemandesScheduledForDeletion = clone $this->collCommonCautionDemandes;
                $this->commonCautionDemandesScheduledForDeletion->clear();
            }
            $this->commonCautionDemandesScheduledForDeletion[]= clone $commonCautionDemande;
            $commonCautionDemande->setCommonTCompteBancaire(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCompteBancaire is new, it will return
     * an empty collection; or if this CommonTCompteBancaire has previously
     * been saved, it will retrieve related CommonCautionDemandes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCompteBancaire.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     */
    public function getCommonCautionDemandesJoinCommonAgentBanquierRelatedByIdAgentBanquierRejet($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonAgentBanquierRelatedByIdAgentBanquierRejet', $join_behavior);

        return $this->getCommonCautionDemandes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCompteBancaire is new, it will return
     * an empty collection; or if this CommonTCompteBancaire has previously
     * been saved, it will retrieve related CommonCautionDemandes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCompteBancaire.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     */
    public function getCommonCautionDemandesJoinCommonAgentBanquierRelatedByIdAgentBanquierValidation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonAgentBanquierRelatedByIdAgentBanquierValidation', $join_behavior);

        return $this->getCommonCautionDemandes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCompteBancaire is new, it will return
     * an empty collection; or if this CommonTCompteBancaire has previously
     * been saved, it will retrieve related CommonCautionDemandes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCompteBancaire.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     */
    public function getCommonCautionDemandesJoinCommonAgentBanquierRelatedByIdAgentPriseEnCharge($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonAgentBanquierRelatedByIdAgentPriseEnCharge', $join_behavior);

        return $this->getCommonCautionDemandes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCompteBancaire is new, it will return
     * an empty collection; or if this CommonTCompteBancaire has previously
     * been saved, it will retrieve related CommonCautionDemandes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCompteBancaire.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     */
    public function getCommonCautionDemandesJoinCommonAgentBanquierRelatedByIdSignataire1($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonAgentBanquierRelatedByIdSignataire1', $join_behavior);

        return $this->getCommonCautionDemandes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonTCompteBancaire is new, it will return
     * an empty collection; or if this CommonTCompteBancaire has previously
     * been saved, it will retrieve related CommonCautionDemandes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonTCompteBancaire.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionDemande[] List of CommonCautionDemande objects
     */
    public function getCommonCautionDemandesJoinCommonAgentBanquierRelatedByIdSignataire2($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonAgentBanquierRelatedByIdSignataire2', $join_behavior);

        return $this->getCommonCautionDemandes($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_entreprise = null;
        $this->id_inscrit = null;
        $this->denomination = null;
        $this->id_banque = null;
        $this->identifiant_bancaire = null;
        $this->code_ville = null;
        $this->code_agence = null;
        $this->id_ville = null;
        $this->supprime = null;
        $this->actif = null;
        $this->bancarise = null;
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
            if ($this->collCommonCautionDemandes) {
                foreach ($this->collCommonCautionDemandes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonTBanque instanceof Persistent) {
              $this->aCommonTBanque->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonCautionDemandes instanceof PropelCollection) {
            $this->collCommonCautionDemandes->clearIterator();
        }
        $this->collCommonCautionDemandes = null;
        $this->aCommonTBanque = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTCompteBancairePeer::DEFAULT_STRING_FORMAT);
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
