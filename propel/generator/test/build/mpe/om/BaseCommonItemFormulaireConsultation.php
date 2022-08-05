<?php


/**
 * Base class that represents a row from the 'ItemFormulaireConsultation' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonItemFormulaireConsultation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonItemFormulaireConsultationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonItemFormulaireConsultationPeer
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
     * The value for the idformulaireconsultation field.
     * @var        int
     */
    protected $idformulaireconsultation;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the commentaire_acheteur field.
     * @var        string
     */
    protected $commentaire_acheteur;

    /**
     * The value for the prix_unitaire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $prix_unitaire;

    /**
     * The value for the quantite field.
     * @var        string
     */
    protected $quantite;

    /**
     * The value for the precision_entreprise field.
     * @var        int
     */
    protected $precision_entreprise;

    /**
     * The value for the type_reponse field.
     * @var        string
     */
    protected $type_reponse;

    /**
     * The value for the obligatoire field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $obligatoire;

    /**
     * The value for the numero field.
     * @var        int
     */
    protected $numero;

    /**
     * @var        CommonConsultationFormulaire
     */
    protected $aCommonConsultationFormulaire;

    /**
     * @var        PropelObjectCollection|CommonEnveloppeItemFormulaireConsultationValues[] Collection to store aggregation of CommonEnveloppeItemFormulaireConsultationValues objects.
     */
    protected $collCommonEnveloppeItemFormulaireConsultationValuess;
    protected $collCommonEnveloppeItemFormulaireConsultationValuessPartial;

    /**
     * @var        PropelObjectCollection|CommonReponseInscritItemFormulaireConsultationValues[] Collection to store aggregation of CommonReponseInscritItemFormulaireConsultationValues objects.
     */
    protected $collCommonReponseInscritItemFormulaireConsultationValuess;
    protected $collCommonReponseInscritItemFormulaireConsultationValuessPartial;

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
    protected $commonEnveloppeItemFormulaireConsultationValuessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonReponseInscritItemFormulaireConsultationValuessScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->prix_unitaire = '0';
        $this->obligatoire = '1';
    }

    /**
     * Initializes internal state of BaseCommonItemFormulaireConsultation object.
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
     * Get the [idformulaireconsultation] column value.
     * 
     * @return int
     */
    public function getIdformulaireconsultation()
    {

        return $this->idformulaireconsultation;
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
     * Get the [commentaire_acheteur] column value.
     * 
     * @return string
     */
    public function getCommentaireAcheteur()
    {

        return $this->commentaire_acheteur;
    }

    /**
     * Get the [prix_unitaire] column value.
     * 
     * @return string
     */
    public function getPrixUnitaire()
    {

        return $this->prix_unitaire;
    }

    /**
     * Get the [quantite] column value.
     * 
     * @return string
     */
    public function getQuantite()
    {

        return $this->quantite;
    }

    /**
     * Get the [precision_entreprise] column value.
     * 
     * @return int
     */
    public function getPrecisionEntreprise()
    {

        return $this->precision_entreprise;
    }

    /**
     * Get the [type_reponse] column value.
     * 
     * @return string
     */
    public function getTypeReponse()
    {

        return $this->type_reponse;
    }

    /**
     * Get the [obligatoire] column value.
     * 
     * @return string
     */
    public function getObligatoire()
    {

        return $this->obligatoire;
    }

    /**
     * Get the [numero] column value.
     * 
     * @return int
     */
    public function getNumero()
    {

        return $this->numero;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [idformulaireconsultation] column.
     * 
     * @param int $v new value
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setIdformulaireconsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idformulaireconsultation !== $v) {
            $this->idformulaireconsultation = $v;
            $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::IDFORMULAIRECONSULTATION;
        }

        if ($this->aCommonConsultationFormulaire !== null && $this->aCommonConsultationFormulaire->getId() !== $v) {
            $this->aCommonConsultationFormulaire = null;
        }


        return $this;
    } // setIdformulaireconsultation()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [commentaire_acheteur] column.
     * 
     * @param string $v new value
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setCommentaireAcheteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire_acheteur !== $v) {
            $this->commentaire_acheteur = $v;
            $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::COMMENTAIRE_ACHETEUR;
        }


        return $this;
    } // setCommentaireAcheteur()

    /**
     * Set the value of [prix_unitaire] column.
     * 
     * @param string $v new value
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setPrixUnitaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prix_unitaire !== $v) {
            $this->prix_unitaire = $v;
            $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::PRIX_UNITAIRE;
        }


        return $this;
    } // setPrixUnitaire()

    /**
     * Set the value of [quantite] column.
     * 
     * @param string $v new value
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setQuantite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->quantite !== $v) {
            $this->quantite = $v;
            $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::QUANTITE;
        }


        return $this;
    } // setQuantite()

    /**
     * Set the value of [precision_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setPrecisionEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->precision_entreprise !== $v) {
            $this->precision_entreprise = $v;
            $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::PRECISION_ENTREPRISE;
        }


        return $this;
    } // setPrecisionEntreprise()

    /**
     * Set the value of [type_reponse] column.
     * 
     * @param string $v new value
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setTypeReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_reponse !== $v) {
            $this->type_reponse = $v;
            $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::TYPE_REPONSE;
        }


        return $this;
    } // setTypeReponse()

    /**
     * Set the value of [obligatoire] column.
     * 
     * @param string $v new value
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->obligatoire !== $v) {
            $this->obligatoire = $v;
            $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::OBLIGATOIRE;
        }


        return $this;
    } // setObligatoire()

    /**
     * Set the value of [numero] column.
     * 
     * @param int $v new value
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::NUMERO;
        }


        return $this;
    } // setNumero()

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
            if ($this->prix_unitaire !== '0') {
                return false;
            }

            if ($this->obligatoire !== '1') {
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
            $this->idformulaireconsultation = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->libelle = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->commentaire_acheteur = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->prix_unitaire = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->quantite = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->precision_entreprise = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->type_reponse = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->obligatoire = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->numero = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = CommonItemFormulaireConsultationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonItemFormulaireConsultation object", $e);
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

        if ($this->aCommonConsultationFormulaire !== null && $this->idformulaireconsultation !== $this->aCommonConsultationFormulaire->getId()) {
            $this->aCommonConsultationFormulaire = null;
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
            $con = Propel::getConnection(CommonItemFormulaireConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonItemFormulaireConsultationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultationFormulaire = null;
            $this->collCommonEnveloppeItemFormulaireConsultationValuess = null;

            $this->collCommonReponseInscritItemFormulaireConsultationValuess = null;

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
            $con = Propel::getConnection(CommonItemFormulaireConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonItemFormulaireConsultationQuery::create()
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
            $con = Propel::getConnection(CommonItemFormulaireConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonItemFormulaireConsultationPeer::addInstanceToPool($this);
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

            if ($this->aCommonConsultationFormulaire !== null) {
                if ($this->aCommonConsultationFormulaire->isModified() || $this->aCommonConsultationFormulaire->isNew()) {
                    $affectedRows += $this->aCommonConsultationFormulaire->save($con);
                }
                $this->setCommonConsultationFormulaire($this->aCommonConsultationFormulaire);
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

            if ($this->commonEnveloppeItemFormulaireConsultationValuessScheduledForDeletion !== null) {
                if (!$this->commonEnveloppeItemFormulaireConsultationValuessScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonEnveloppeItemFormulaireConsultationValuessScheduledForDeletion as $commonEnveloppeItemFormulaireConsultationValues) {
                        // need to save related object because we set the relation to null
                        $commonEnveloppeItemFormulaireConsultationValues->save($con);
                    }
                    $this->commonEnveloppeItemFormulaireConsultationValuessScheduledForDeletion = null;
                }
            }

            if ($this->collCommonEnveloppeItemFormulaireConsultationValuess !== null) {
                foreach ($this->collCommonEnveloppeItemFormulaireConsultationValuess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonReponseInscritItemFormulaireConsultationValuessScheduledForDeletion !== null) {
                if (!$this->commonReponseInscritItemFormulaireConsultationValuessScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonReponseInscritItemFormulaireConsultationValuessScheduledForDeletion as $commonReponseInscritItemFormulaireConsultationValues) {
                        // need to save related object because we set the relation to null
                        $commonReponseInscritItemFormulaireConsultationValues->save($con);
                    }
                    $this->commonReponseInscritItemFormulaireConsultationValuessScheduledForDeletion = null;
                }
            }

            if ($this->collCommonReponseInscritItemFormulaireConsultationValuess !== null) {
                foreach ($this->collCommonReponseInscritItemFormulaireConsultationValuess as $referrerFK) {
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

        $this->modifiedColumns[] = CommonItemFormulaireConsultationPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonItemFormulaireConsultationPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::IDFORMULAIRECONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`idFormulaireConsultation`';
        }
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::COMMENTAIRE_ACHETEUR)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire_acheteur`';
        }
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::PRIX_UNITAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`prix_unitaire`';
        }
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::QUANTITE)) {
            $modifiedColumns[':p' . $index++]  = '`quantite`';
        }
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::PRECISION_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`precision_entreprise`';
        }
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::TYPE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`type_reponse`';
        }
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`obligatoire`';
        }
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }

        $sql = sprintf(
            'INSERT INTO `ItemFormulaireConsultation` (%s) VALUES (%s)',
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
                    case '`idFormulaireConsultation`':						
                        $stmt->bindValue($identifier, $this->idformulaireconsultation, PDO::PARAM_INT);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`commentaire_acheteur`':						
                        $stmt->bindValue($identifier, $this->commentaire_acheteur, PDO::PARAM_STR);
                        break;
                    case '`prix_unitaire`':						
                        $stmt->bindValue($identifier, $this->prix_unitaire, PDO::PARAM_STR);
                        break;
                    case '`quantite`':						
                        $stmt->bindValue($identifier, $this->quantite, PDO::PARAM_STR);
                        break;
                    case '`precision_entreprise`':						
                        $stmt->bindValue($identifier, $this->precision_entreprise, PDO::PARAM_INT);
                        break;
                    case '`type_reponse`':						
                        $stmt->bindValue($identifier, $this->type_reponse, PDO::PARAM_STR);
                        break;
                    case '`obligatoire`':						
                        $stmt->bindValue($identifier, $this->obligatoire, PDO::PARAM_STR);
                        break;
                    case '`numero`':						
                        $stmt->bindValue($identifier, $this->numero, PDO::PARAM_INT);
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

            if ($this->aCommonConsultationFormulaire !== null) {
                if (!$this->aCommonConsultationFormulaire->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultationFormulaire->getValidationFailures());
                }
            }


            if (($retval = CommonItemFormulaireConsultationPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonEnveloppeItemFormulaireConsultationValuess !== null) {
                    foreach ($this->collCommonEnveloppeItemFormulaireConsultationValuess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonReponseInscritItemFormulaireConsultationValuess !== null) {
                    foreach ($this->collCommonReponseInscritItemFormulaireConsultationValuess as $referrerFK) {
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
        $pos = CommonItemFormulaireConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdformulaireconsultation();
                break;
            case 2:
                return $this->getLibelle();
                break;
            case 3:
                return $this->getCommentaireAcheteur();
                break;
            case 4:
                return $this->getPrixUnitaire();
                break;
            case 5:
                return $this->getQuantite();
                break;
            case 6:
                return $this->getPrecisionEntreprise();
                break;
            case 7:
                return $this->getTypeReponse();
                break;
            case 8:
                return $this->getObligatoire();
                break;
            case 9:
                return $this->getNumero();
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
        if (isset($alreadyDumpedObjects['CommonItemFormulaireConsultation'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonItemFormulaireConsultation'][$this->getPrimaryKey()] = true;
        $keys = CommonItemFormulaireConsultationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdformulaireconsultation(),
            $keys[2] => $this->getLibelle(),
            $keys[3] => $this->getCommentaireAcheteur(),
            $keys[4] => $this->getPrixUnitaire(),
            $keys[5] => $this->getQuantite(),
            $keys[6] => $this->getPrecisionEntreprise(),
            $keys[7] => $this->getTypeReponse(),
            $keys[8] => $this->getObligatoire(),
            $keys[9] => $this->getNumero(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultationFormulaire) {
                $result['CommonConsultationFormulaire'] = $this->aCommonConsultationFormulaire->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonEnveloppeItemFormulaireConsultationValuess) {
                $result['CommonEnveloppeItemFormulaireConsultationValuess'] = $this->collCommonEnveloppeItemFormulaireConsultationValuess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonReponseInscritItemFormulaireConsultationValuess) {
                $result['CommonReponseInscritItemFormulaireConsultationValuess'] = $this->collCommonReponseInscritItemFormulaireConsultationValuess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonItemFormulaireConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdformulaireconsultation($value);
                break;
            case 2:
                $this->setLibelle($value);
                break;
            case 3:
                $this->setCommentaireAcheteur($value);
                break;
            case 4:
                $this->setPrixUnitaire($value);
                break;
            case 5:
                $this->setQuantite($value);
                break;
            case 6:
                $this->setPrecisionEntreprise($value);
                break;
            case 7:
                $this->setTypeReponse($value);
                break;
            case 8:
                $this->setObligatoire($value);
                break;
            case 9:
                $this->setNumero($value);
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
        $keys = CommonItemFormulaireConsultationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdformulaireconsultation($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelle($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCommentaireAcheteur($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPrixUnitaire($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setQuantite($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrecisionEntreprise($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTypeReponse($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setObligatoire($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNumero($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonItemFormulaireConsultationPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::ID)) $criteria->add(CommonItemFormulaireConsultationPeer::ID, $this->id);
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::IDFORMULAIRECONSULTATION)) $criteria->add(CommonItemFormulaireConsultationPeer::IDFORMULAIRECONSULTATION, $this->idformulaireconsultation);
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::LIBELLE)) $criteria->add(CommonItemFormulaireConsultationPeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::COMMENTAIRE_ACHETEUR)) $criteria->add(CommonItemFormulaireConsultationPeer::COMMENTAIRE_ACHETEUR, $this->commentaire_acheteur);
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::PRIX_UNITAIRE)) $criteria->add(CommonItemFormulaireConsultationPeer::PRIX_UNITAIRE, $this->prix_unitaire);
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::QUANTITE)) $criteria->add(CommonItemFormulaireConsultationPeer::QUANTITE, $this->quantite);
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::PRECISION_ENTREPRISE)) $criteria->add(CommonItemFormulaireConsultationPeer::PRECISION_ENTREPRISE, $this->precision_entreprise);
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::TYPE_REPONSE)) $criteria->add(CommonItemFormulaireConsultationPeer::TYPE_REPONSE, $this->type_reponse);
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::OBLIGATOIRE)) $criteria->add(CommonItemFormulaireConsultationPeer::OBLIGATOIRE, $this->obligatoire);
        if ($this->isColumnModified(CommonItemFormulaireConsultationPeer::NUMERO)) $criteria->add(CommonItemFormulaireConsultationPeer::NUMERO, $this->numero);

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
        $criteria = new Criteria(CommonItemFormulaireConsultationPeer::DATABASE_NAME);
        $criteria->add(CommonItemFormulaireConsultationPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonItemFormulaireConsultation (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdformulaireconsultation($this->getIdformulaireconsultation());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setCommentaireAcheteur($this->getCommentaireAcheteur());
        $copyObj->setPrixUnitaire($this->getPrixUnitaire());
        $copyObj->setQuantite($this->getQuantite());
        $copyObj->setPrecisionEntreprise($this->getPrecisionEntreprise());
        $copyObj->setTypeReponse($this->getTypeReponse());
        $copyObj->setObligatoire($this->getObligatoire());
        $copyObj->setNumero($this->getNumero());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonEnveloppeItemFormulaireConsultationValuess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonEnveloppeItemFormulaireConsultationValues($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonReponseInscritItemFormulaireConsultationValuess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonReponseInscritItemFormulaireConsultationValues($relObj->copy($deepCopy));
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
     * @return CommonItemFormulaireConsultation Clone of current object.
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
     * @return CommonItemFormulaireConsultationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonItemFormulaireConsultationPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultationFormulaire object.
     *
     * @param   CommonConsultationFormulaire $v
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultationFormulaire(CommonConsultationFormulaire $v = null)
    {
        if ($v === null) {
            $this->setIdformulaireconsultation(NULL);
        } else {
            $this->setIdformulaireconsultation($v->getId());
        }

        $this->aCommonConsultationFormulaire = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultationFormulaire object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonItemFormulaireConsultation($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultationFormulaire object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultationFormulaire The associated CommonConsultationFormulaire object.
     * @throws PropelException
     */
    public function getCommonConsultationFormulaire(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultationFormulaire === null && ($this->idformulaireconsultation !== null) && $doQuery) {
            $this->aCommonConsultationFormulaire = CommonConsultationFormulaireQuery::create()->findPk($this->idformulaireconsultation, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultationFormulaire->addCommonItemFormulaireConsultations($this);
             */
        }

        return $this->aCommonConsultationFormulaire;
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
        if ('CommonEnveloppeItemFormulaireConsultationValues' == $relationName) {
            $this->initCommonEnveloppeItemFormulaireConsultationValuess();
        }
        if ('CommonReponseInscritItemFormulaireConsultationValues' == $relationName) {
            $this->initCommonReponseInscritItemFormulaireConsultationValuess();
        }
    }

    /**
     * Clears out the collCommonEnveloppeItemFormulaireConsultationValuess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     * @see        addCommonEnveloppeItemFormulaireConsultationValuess()
     */
    public function clearCommonEnveloppeItemFormulaireConsultationValuess()
    {
        $this->collCommonEnveloppeItemFormulaireConsultationValuess = null; // important to set this to null since that means it is uninitialized
        $this->collCommonEnveloppeItemFormulaireConsultationValuessPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonEnveloppeItemFormulaireConsultationValuess collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonEnveloppeItemFormulaireConsultationValuess($v = true)
    {
        $this->collCommonEnveloppeItemFormulaireConsultationValuessPartial = $v;
    }

    /**
     * Initializes the collCommonEnveloppeItemFormulaireConsultationValuess collection.
     *
     * By default this just sets the collCommonEnveloppeItemFormulaireConsultationValuess collection to an empty array (like clearcollCommonEnveloppeItemFormulaireConsultationValuess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonEnveloppeItemFormulaireConsultationValuess($overrideExisting = true)
    {
        if (null !== $this->collCommonEnveloppeItemFormulaireConsultationValuess && !$overrideExisting) {
            return;
        }
        $this->collCommonEnveloppeItemFormulaireConsultationValuess = new PropelObjectCollection();
        $this->collCommonEnveloppeItemFormulaireConsultationValuess->setModel('CommonEnveloppeItemFormulaireConsultationValues');
    }

    /**
     * Gets an array of CommonEnveloppeItemFormulaireConsultationValues objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonItemFormulaireConsultation is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonEnveloppeItemFormulaireConsultationValues[] List of CommonEnveloppeItemFormulaireConsultationValues objects
     * @throws PropelException
     */
    public function getCommonEnveloppeItemFormulaireConsultationValuess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnveloppeItemFormulaireConsultationValuessPartial && !$this->isNew();
        if (null === $this->collCommonEnveloppeItemFormulaireConsultationValuess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonEnveloppeItemFormulaireConsultationValuess) {
                // return empty collection
                $this->initCommonEnveloppeItemFormulaireConsultationValuess();
            } else {
                $collCommonEnveloppeItemFormulaireConsultationValuess = CommonEnveloppeItemFormulaireConsultationValuesQuery::create(null, $criteria)
                    ->filterByCommonItemFormulaireConsultation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonEnveloppeItemFormulaireConsultationValuessPartial && count($collCommonEnveloppeItemFormulaireConsultationValuess)) {
                      $this->initCommonEnveloppeItemFormulaireConsultationValuess(false);

                      foreach ($collCommonEnveloppeItemFormulaireConsultationValuess as $obj) {
                        if (false == $this->collCommonEnveloppeItemFormulaireConsultationValuess->contains($obj)) {
                          $this->collCommonEnveloppeItemFormulaireConsultationValuess->append($obj);
                        }
                      }

                      $this->collCommonEnveloppeItemFormulaireConsultationValuessPartial = true;
                    }

                    $collCommonEnveloppeItemFormulaireConsultationValuess->getInternalIterator()->rewind();

                    return $collCommonEnveloppeItemFormulaireConsultationValuess;
                }

                if ($partial && $this->collCommonEnveloppeItemFormulaireConsultationValuess) {
                    foreach ($this->collCommonEnveloppeItemFormulaireConsultationValuess as $obj) {
                        if ($obj->isNew()) {
                            $collCommonEnveloppeItemFormulaireConsultationValuess[] = $obj;
                        }
                    }
                }

                $this->collCommonEnveloppeItemFormulaireConsultationValuess = $collCommonEnveloppeItemFormulaireConsultationValuess;
                $this->collCommonEnveloppeItemFormulaireConsultationValuessPartial = false;
            }
        }

        return $this->collCommonEnveloppeItemFormulaireConsultationValuess;
    }

    /**
     * Sets a collection of CommonEnveloppeItemFormulaireConsultationValues objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonEnveloppeItemFormulaireConsultationValuess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setCommonEnveloppeItemFormulaireConsultationValuess(PropelCollection $commonEnveloppeItemFormulaireConsultationValuess, PropelPDO $con = null)
    {
        $commonEnveloppeItemFormulaireConsultationValuessToDelete = $this->getCommonEnveloppeItemFormulaireConsultationValuess(new Criteria(), $con)->diff($commonEnveloppeItemFormulaireConsultationValuess);


        $this->commonEnveloppeItemFormulaireConsultationValuessScheduledForDeletion = $commonEnveloppeItemFormulaireConsultationValuessToDelete;

        foreach ($commonEnveloppeItemFormulaireConsultationValuessToDelete as $commonEnveloppeItemFormulaireConsultationValuesRemoved) {
            $commonEnveloppeItemFormulaireConsultationValuesRemoved->setCommonItemFormulaireConsultation(null);
        }

        $this->collCommonEnveloppeItemFormulaireConsultationValuess = null;
        foreach ($commonEnveloppeItemFormulaireConsultationValuess as $commonEnveloppeItemFormulaireConsultationValues) {
            $this->addCommonEnveloppeItemFormulaireConsultationValues($commonEnveloppeItemFormulaireConsultationValues);
        }

        $this->collCommonEnveloppeItemFormulaireConsultationValuess = $commonEnveloppeItemFormulaireConsultationValuess;
        $this->collCommonEnveloppeItemFormulaireConsultationValuessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonEnveloppeItemFormulaireConsultationValues objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonEnveloppeItemFormulaireConsultationValues objects.
     * @throws PropelException
     */
    public function countCommonEnveloppeItemFormulaireConsultationValuess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonEnveloppeItemFormulaireConsultationValuessPartial && !$this->isNew();
        if (null === $this->collCommonEnveloppeItemFormulaireConsultationValuess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonEnveloppeItemFormulaireConsultationValuess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonEnveloppeItemFormulaireConsultationValuess());
            }
            $query = CommonEnveloppeItemFormulaireConsultationValuesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonItemFormulaireConsultation($this)
                ->count($con);
        }

        return count($this->collCommonEnveloppeItemFormulaireConsultationValuess);
    }

    /**
     * Method called to associate a CommonEnveloppeItemFormulaireConsultationValues object to this object
     * through the CommonEnveloppeItemFormulaireConsultationValues foreign key attribute.
     *
     * @param   CommonEnveloppeItemFormulaireConsultationValues $l CommonEnveloppeItemFormulaireConsultationValues
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function addCommonEnveloppeItemFormulaireConsultationValues(CommonEnveloppeItemFormulaireConsultationValues $l)
    {
        if ($this->collCommonEnveloppeItemFormulaireConsultationValuess === null) {
            $this->initCommonEnveloppeItemFormulaireConsultationValuess();
            $this->collCommonEnveloppeItemFormulaireConsultationValuessPartial = true;
        }
        if (!in_array($l, $this->collCommonEnveloppeItemFormulaireConsultationValuess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonEnveloppeItemFormulaireConsultationValues($l);
        }

        return $this;
    }

    /**
     * @param	CommonEnveloppeItemFormulaireConsultationValues $commonEnveloppeItemFormulaireConsultationValues The commonEnveloppeItemFormulaireConsultationValues object to add.
     */
    protected function doAddCommonEnveloppeItemFormulaireConsultationValues($commonEnveloppeItemFormulaireConsultationValues)
    {
        $this->collCommonEnveloppeItemFormulaireConsultationValuess[]= $commonEnveloppeItemFormulaireConsultationValues;
        $commonEnveloppeItemFormulaireConsultationValues->setCommonItemFormulaireConsultation($this);
    }

    /**
     * @param	CommonEnveloppeItemFormulaireConsultationValues $commonEnveloppeItemFormulaireConsultationValues The commonEnveloppeItemFormulaireConsultationValues object to remove.
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function removeCommonEnveloppeItemFormulaireConsultationValues($commonEnveloppeItemFormulaireConsultationValues)
    {
        if ($this->getCommonEnveloppeItemFormulaireConsultationValuess()->contains($commonEnveloppeItemFormulaireConsultationValues)) {
            $this->collCommonEnveloppeItemFormulaireConsultationValuess->remove($this->collCommonEnveloppeItemFormulaireConsultationValuess->search($commonEnveloppeItemFormulaireConsultationValues));
            if (null === $this->commonEnveloppeItemFormulaireConsultationValuessScheduledForDeletion) {
                $this->commonEnveloppeItemFormulaireConsultationValuessScheduledForDeletion = clone $this->collCommonEnveloppeItemFormulaireConsultationValuess;
                $this->commonEnveloppeItemFormulaireConsultationValuessScheduledForDeletion->clear();
            }
            $this->commonEnveloppeItemFormulaireConsultationValuessScheduledForDeletion[]= clone $commonEnveloppeItemFormulaireConsultationValues;
            $commonEnveloppeItemFormulaireConsultationValues->setCommonItemFormulaireConsultation(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonReponseInscritItemFormulaireConsultationValuess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     * @see        addCommonReponseInscritItemFormulaireConsultationValuess()
     */
    public function clearCommonReponseInscritItemFormulaireConsultationValuess()
    {
        $this->collCommonReponseInscritItemFormulaireConsultationValuess = null; // important to set this to null since that means it is uninitialized
        $this->collCommonReponseInscritItemFormulaireConsultationValuessPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonReponseInscritItemFormulaireConsultationValuess collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonReponseInscritItemFormulaireConsultationValuess($v = true)
    {
        $this->collCommonReponseInscritItemFormulaireConsultationValuessPartial = $v;
    }

    /**
     * Initializes the collCommonReponseInscritItemFormulaireConsultationValuess collection.
     *
     * By default this just sets the collCommonReponseInscritItemFormulaireConsultationValuess collection to an empty array (like clearcollCommonReponseInscritItemFormulaireConsultationValuess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonReponseInscritItemFormulaireConsultationValuess($overrideExisting = true)
    {
        if (null !== $this->collCommonReponseInscritItemFormulaireConsultationValuess && !$overrideExisting) {
            return;
        }
        $this->collCommonReponseInscritItemFormulaireConsultationValuess = new PropelObjectCollection();
        $this->collCommonReponseInscritItemFormulaireConsultationValuess->setModel('CommonReponseInscritItemFormulaireConsultationValues');
    }

    /**
     * Gets an array of CommonReponseInscritItemFormulaireConsultationValues objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonItemFormulaireConsultation is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonReponseInscritItemFormulaireConsultationValues[] List of CommonReponseInscritItemFormulaireConsultationValues objects
     * @throws PropelException
     */
    public function getCommonReponseInscritItemFormulaireConsultationValuess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonReponseInscritItemFormulaireConsultationValuessPartial && !$this->isNew();
        if (null === $this->collCommonReponseInscritItemFormulaireConsultationValuess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonReponseInscritItemFormulaireConsultationValuess) {
                // return empty collection
                $this->initCommonReponseInscritItemFormulaireConsultationValuess();
            } else {
                $collCommonReponseInscritItemFormulaireConsultationValuess = CommonReponseInscritItemFormulaireConsultationValuesQuery::create(null, $criteria)
                    ->filterByCommonItemFormulaireConsultation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonReponseInscritItemFormulaireConsultationValuessPartial && count($collCommonReponseInscritItemFormulaireConsultationValuess)) {
                      $this->initCommonReponseInscritItemFormulaireConsultationValuess(false);

                      foreach ($collCommonReponseInscritItemFormulaireConsultationValuess as $obj) {
                        if (false == $this->collCommonReponseInscritItemFormulaireConsultationValuess->contains($obj)) {
                          $this->collCommonReponseInscritItemFormulaireConsultationValuess->append($obj);
                        }
                      }

                      $this->collCommonReponseInscritItemFormulaireConsultationValuessPartial = true;
                    }

                    $collCommonReponseInscritItemFormulaireConsultationValuess->getInternalIterator()->rewind();

                    return $collCommonReponseInscritItemFormulaireConsultationValuess;
                }

                if ($partial && $this->collCommonReponseInscritItemFormulaireConsultationValuess) {
                    foreach ($this->collCommonReponseInscritItemFormulaireConsultationValuess as $obj) {
                        if ($obj->isNew()) {
                            $collCommonReponseInscritItemFormulaireConsultationValuess[] = $obj;
                        }
                    }
                }

                $this->collCommonReponseInscritItemFormulaireConsultationValuess = $collCommonReponseInscritItemFormulaireConsultationValuess;
                $this->collCommonReponseInscritItemFormulaireConsultationValuessPartial = false;
            }
        }

        return $this->collCommonReponseInscritItemFormulaireConsultationValuess;
    }

    /**
     * Sets a collection of CommonReponseInscritItemFormulaireConsultationValues objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonReponseInscritItemFormulaireConsultationValuess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function setCommonReponseInscritItemFormulaireConsultationValuess(PropelCollection $commonReponseInscritItemFormulaireConsultationValuess, PropelPDO $con = null)
    {
        $commonReponseInscritItemFormulaireConsultationValuessToDelete = $this->getCommonReponseInscritItemFormulaireConsultationValuess(new Criteria(), $con)->diff($commonReponseInscritItemFormulaireConsultationValuess);


        $this->commonReponseInscritItemFormulaireConsultationValuessScheduledForDeletion = $commonReponseInscritItemFormulaireConsultationValuessToDelete;

        foreach ($commonReponseInscritItemFormulaireConsultationValuessToDelete as $commonReponseInscritItemFormulaireConsultationValuesRemoved) {
            $commonReponseInscritItemFormulaireConsultationValuesRemoved->setCommonItemFormulaireConsultation(null);
        }

        $this->collCommonReponseInscritItemFormulaireConsultationValuess = null;
        foreach ($commonReponseInscritItemFormulaireConsultationValuess as $commonReponseInscritItemFormulaireConsultationValues) {
            $this->addCommonReponseInscritItemFormulaireConsultationValues($commonReponseInscritItemFormulaireConsultationValues);
        }

        $this->collCommonReponseInscritItemFormulaireConsultationValuess = $commonReponseInscritItemFormulaireConsultationValuess;
        $this->collCommonReponseInscritItemFormulaireConsultationValuessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonReponseInscritItemFormulaireConsultationValues objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonReponseInscritItemFormulaireConsultationValues objects.
     * @throws PropelException
     */
    public function countCommonReponseInscritItemFormulaireConsultationValuess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonReponseInscritItemFormulaireConsultationValuessPartial && !$this->isNew();
        if (null === $this->collCommonReponseInscritItemFormulaireConsultationValuess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonReponseInscritItemFormulaireConsultationValuess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonReponseInscritItemFormulaireConsultationValuess());
            }
            $query = CommonReponseInscritItemFormulaireConsultationValuesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonItemFormulaireConsultation($this)
                ->count($con);
        }

        return count($this->collCommonReponseInscritItemFormulaireConsultationValuess);
    }

    /**
     * Method called to associate a CommonReponseInscritItemFormulaireConsultationValues object to this object
     * through the CommonReponseInscritItemFormulaireConsultationValues foreign key attribute.
     *
     * @param   CommonReponseInscritItemFormulaireConsultationValues $l CommonReponseInscritItemFormulaireConsultationValues
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function addCommonReponseInscritItemFormulaireConsultationValues(CommonReponseInscritItemFormulaireConsultationValues $l)
    {
        if ($this->collCommonReponseInscritItemFormulaireConsultationValuess === null) {
            $this->initCommonReponseInscritItemFormulaireConsultationValuess();
            $this->collCommonReponseInscritItemFormulaireConsultationValuessPartial = true;
        }
        if (!in_array($l, $this->collCommonReponseInscritItemFormulaireConsultationValuess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonReponseInscritItemFormulaireConsultationValues($l);
        }

        return $this;
    }

    /**
     * @param	CommonReponseInscritItemFormulaireConsultationValues $commonReponseInscritItemFormulaireConsultationValues The commonReponseInscritItemFormulaireConsultationValues object to add.
     */
    protected function doAddCommonReponseInscritItemFormulaireConsultationValues($commonReponseInscritItemFormulaireConsultationValues)
    {
        $this->collCommonReponseInscritItemFormulaireConsultationValuess[]= $commonReponseInscritItemFormulaireConsultationValues;
        $commonReponseInscritItemFormulaireConsultationValues->setCommonItemFormulaireConsultation($this);
    }

    /**
     * @param	CommonReponseInscritItemFormulaireConsultationValues $commonReponseInscritItemFormulaireConsultationValues The commonReponseInscritItemFormulaireConsultationValues object to remove.
     * @return CommonItemFormulaireConsultation The current object (for fluent API support)
     */
    public function removeCommonReponseInscritItemFormulaireConsultationValues($commonReponseInscritItemFormulaireConsultationValues)
    {
        if ($this->getCommonReponseInscritItemFormulaireConsultationValuess()->contains($commonReponseInscritItemFormulaireConsultationValues)) {
            $this->collCommonReponseInscritItemFormulaireConsultationValuess->remove($this->collCommonReponseInscritItemFormulaireConsultationValuess->search($commonReponseInscritItemFormulaireConsultationValues));
            if (null === $this->commonReponseInscritItemFormulaireConsultationValuessScheduledForDeletion) {
                $this->commonReponseInscritItemFormulaireConsultationValuessScheduledForDeletion = clone $this->collCommonReponseInscritItemFormulaireConsultationValuess;
                $this->commonReponseInscritItemFormulaireConsultationValuessScheduledForDeletion->clear();
            }
            $this->commonReponseInscritItemFormulaireConsultationValuessScheduledForDeletion[]= clone $commonReponseInscritItemFormulaireConsultationValues;
            $commonReponseInscritItemFormulaireConsultationValues->setCommonItemFormulaireConsultation(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->idformulaireconsultation = null;
        $this->libelle = null;
        $this->commentaire_acheteur = null;
        $this->prix_unitaire = null;
        $this->quantite = null;
        $this->precision_entreprise = null;
        $this->type_reponse = null;
        $this->obligatoire = null;
        $this->numero = null;
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
            if ($this->collCommonEnveloppeItemFormulaireConsultationValuess) {
                foreach ($this->collCommonEnveloppeItemFormulaireConsultationValuess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonReponseInscritItemFormulaireConsultationValuess) {
                foreach ($this->collCommonReponseInscritItemFormulaireConsultationValuess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonConsultationFormulaire instanceof Persistent) {
              $this->aCommonConsultationFormulaire->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonEnveloppeItemFormulaireConsultationValuess instanceof PropelCollection) {
            $this->collCommonEnveloppeItemFormulaireConsultationValuess->clearIterator();
        }
        $this->collCommonEnveloppeItemFormulaireConsultationValuess = null;
        if ($this->collCommonReponseInscritItemFormulaireConsultationValuess instanceof PropelCollection) {
            $this->collCommonReponseInscritItemFormulaireConsultationValuess->clearIterator();
        }
        $this->collCommonReponseInscritItemFormulaireConsultationValuess = null;
        $this->aCommonConsultationFormulaire = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonItemFormulaireConsultationPeer::DEFAULT_STRING_FORMAT);
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
