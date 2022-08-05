<?php


/**
 * Base class that represents a row from the 't_dossier_formulaire' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDossierFormulaire extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTDossierFormulairePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTDossierFormulairePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_dossier_formulaire field.
     * @var        int
     */
    protected $id_dossier_formulaire;

    /**
     * The value for the id_reponse_elec_formulaire field.
     * @var        int
     */
    protected $id_reponse_elec_formulaire;

    /**
     * The value for the id_lot field.
     * @var        int
     */
    protected $id_lot;

    /**
     * The value for the type_enveloppe field.
     * @var        int
     */
    protected $type_enveloppe;

    /**
     * The value for the libelle_forrmulaire field.
     * @var        string
     */
    protected $libelle_forrmulaire;

    /**
     * The value for the cle_externe_dispositif field.
     * @var        int
     */
    protected $cle_externe_dispositif;

    /**
     * The value for the cle_externe_dossier field.
     * @var        int
     */
    protected $cle_externe_dossier;

    /**
     * The value for the statut_validation field.
     * @var        string
     */
    protected $statut_validation;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_modif field.
     * @var        string
     */
    protected $date_modif;

    /**
     * The value for the date_validation field.
     * @var        string
     */
    protected $date_validation;

    /**
     * The value for the statut_generation_globale field.
     * @var        int
     */
    protected $statut_generation_globale;

    /**
     * The value for the type_reponse field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $type_reponse;

    /**
     * The value for the cle_externe_formulaire field.
     * @var        int
     */
    protected $cle_externe_formulaire;

    /**
     * The value for the formulaire_depose field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $formulaire_depose;

    /**
     * The value for the id_dossier_pere field.
     * @var        int
     */
    protected $id_dossier_pere;

    /**
     * @var        CommonTReponseElecFormulaire
     */
    protected $aCommonTReponseElecFormulaire;

    /**
     * @var        PropelObjectCollection|CommonTEditionFormulaire[] Collection to store aggregation of CommonTEditionFormulaire objects.
     */
    protected $collCommonTEditionFormulaires;
    protected $collCommonTEditionFormulairesPartial;

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
    protected $commonTEditionFormulairesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->type_reponse = 1;
        $this->formulaire_depose = '0';
    }

    /**
     * Initializes internal state of BaseCommonTDossierFormulaire object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_dossier_formulaire] column value.
     * 
     * @return int
     */
    public function getIdDossierFormulaire()
    {

        return $this->id_dossier_formulaire;
    }

    /**
     * Get the [id_reponse_elec_formulaire] column value.
     * 
     * @return int
     */
    public function getIdReponseElecFormulaire()
    {

        return $this->id_reponse_elec_formulaire;
    }

    /**
     * Get the [id_lot] column value.
     * 
     * @return int
     */
    public function getIdLot()
    {

        return $this->id_lot;
    }

    /**
     * Get the [type_enveloppe] column value.
     * 
     * @return int
     */
    public function getTypeEnveloppe()
    {

        return $this->type_enveloppe;
    }

    /**
     * Get the [libelle_forrmulaire] column value.
     * 
     * @return string
     */
    public function getLibelleForrmulaire()
    {

        return $this->libelle_forrmulaire;
    }

    /**
     * Get the [cle_externe_dispositif] column value.
     * 
     * @return int
     */
    public function getCleExterneDispositif()
    {

        return $this->cle_externe_dispositif;
    }

    /**
     * Get the [cle_externe_dossier] column value.
     * 
     * @return int
     */
    public function getCleExterneDossier()
    {

        return $this->cle_externe_dossier;
    }

    /**
     * Get the [statut_validation] column value.
     * 
     * @return string
     */
    public function getStatutValidation()
    {

        return $this->statut_validation;
    }

    /**
     * Get the [date_creation] column value.
     * 
     * @return string
     */
    public function getDateCreation()
    {

        return $this->date_creation;
    }

    /**
     * Get the [date_modif] column value.
     * 
     * @return string
     */
    public function getDateModif()
    {

        return $this->date_modif;
    }

    /**
     * Get the [date_validation] column value.
     * 
     * @return string
     */
    public function getDateValidation()
    {

        return $this->date_validation;
    }

    /**
     * Get the [statut_generation_globale] column value.
     * 
     * @return int
     */
    public function getStatutGenerationGlobale()
    {

        return $this->statut_generation_globale;
    }

    /**
     * Get the [type_reponse] column value.
     * 
     * @return int
     */
    public function getTypeReponse()
    {

        return $this->type_reponse;
    }

    /**
     * Get the [cle_externe_formulaire] column value.
     * 
     * @return int
     */
    public function getCleExterneFormulaire()
    {

        return $this->cle_externe_formulaire;
    }

    /**
     * Get the [formulaire_depose] column value.
     * 
     * @return string
     */
    public function getFormulaireDepose()
    {

        return $this->formulaire_depose;
    }

    /**
     * Get the [id_dossier_pere] column value.
     * 
     * @return int
     */
    public function getIdDossierPere()
    {

        return $this->id_dossier_pere;
    }

    /**
     * Set the value of [id_dossier_formulaire] column.
     * 
     * @param int $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setIdDossierFormulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_dossier_formulaire !== $v) {
            $this->id_dossier_formulaire = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE;
        }


        return $this;
    } // setIdDossierFormulaire()

    /**
     * Set the value of [id_reponse_elec_formulaire] column.
     * 
     * @param int $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setIdReponseElecFormulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_reponse_elec_formulaire !== $v) {
            $this->id_reponse_elec_formulaire = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE;
        }

        if ($this->aCommonTReponseElecFormulaire !== null && $this->aCommonTReponseElecFormulaire->getIdReponseElecFormulaire() !== $v) {
            $this->aCommonTReponseElecFormulaire = null;
        }


        return $this;
    } // setIdReponseElecFormulaire()

    /**
     * Set the value of [id_lot] column.
     * 
     * @param int $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setIdLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_lot !== $v) {
            $this->id_lot = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::ID_LOT;
        }


        return $this;
    } // setIdLot()

    /**
     * Set the value of [type_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setTypeEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_enveloppe !== $v) {
            $this->type_enveloppe = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::TYPE_ENVELOPPE;
        }


        return $this;
    } // setTypeEnveloppe()

    /**
     * Set the value of [libelle_forrmulaire] column.
     * 
     * @param string $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setLibelleForrmulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_forrmulaire !== $v) {
            $this->libelle_forrmulaire = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::LIBELLE_FORRMULAIRE;
        }


        return $this;
    } // setLibelleForrmulaire()

    /**
     * Set the value of [cle_externe_dispositif] column.
     * 
     * @param int $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setCleExterneDispositif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cle_externe_dispositif !== $v) {
            $this->cle_externe_dispositif = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF;
        }


        return $this;
    } // setCleExterneDispositif()

    /**
     * Set the value of [cle_externe_dossier] column.
     * 
     * @param int $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setCleExterneDossier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cle_externe_dossier !== $v) {
            $this->cle_externe_dossier = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::CLE_EXTERNE_DOSSIER;
        }


        return $this;
    } // setCleExterneDossier()

    /**
     * Set the value of [statut_validation] column.
     * 
     * @param string $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setStatutValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_validation !== $v) {
            $this->statut_validation = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::STATUT_VALIDATION;
        }


        return $this;
    } // setStatutValidation()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_modif] column.
     * 
     * @param string $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modif !== $v) {
            $this->date_modif = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::DATE_MODIF;
        }


        return $this;
    } // setDateModif()

    /**
     * Set the value of [date_validation] column.
     * 
     * @param string $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setDateValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_validation !== $v) {
            $this->date_validation = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::DATE_VALIDATION;
        }


        return $this;
    } // setDateValidation()

    /**
     * Set the value of [statut_generation_globale] column.
     * 
     * @param int $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setStatutGenerationGlobale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_generation_globale !== $v) {
            $this->statut_generation_globale = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::STATUT_GENERATION_GLOBALE;
        }


        return $this;
    } // setStatutGenerationGlobale()

    /**
     * Set the value of [type_reponse] column.
     * 
     * @param int $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setTypeReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_reponse !== $v) {
            $this->type_reponse = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::TYPE_REPONSE;
        }


        return $this;
    } // setTypeReponse()

    /**
     * Set the value of [cle_externe_formulaire] column.
     * 
     * @param int $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setCleExterneFormulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cle_externe_formulaire !== $v) {
            $this->cle_externe_formulaire = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE;
        }


        return $this;
    } // setCleExterneFormulaire()

    /**
     * Set the value of [formulaire_depose] column.
     * 
     * @param string $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setFormulaireDepose($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->formulaire_depose !== $v) {
            $this->formulaire_depose = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE;
        }


        return $this;
    } // setFormulaireDepose()

    /**
     * Set the value of [id_dossier_pere] column.
     * 
     * @param int $v new value
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setIdDossierPere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_dossier_pere !== $v) {
            $this->id_dossier_pere = $v;
            $this->modifiedColumns[] = CommonTDossierFormulairePeer::ID_DOSSIER_PERE;
        }


        return $this;
    } // setIdDossierPere()

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
            if ($this->type_reponse !== 1) {
                return false;
            }

            if ($this->formulaire_depose !== '0') {
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

            $this->id_dossier_formulaire = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_reponse_elec_formulaire = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_lot = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->type_enveloppe = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->libelle_forrmulaire = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cle_externe_dispositif = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->cle_externe_dossier = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->statut_validation = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->date_creation = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->date_modif = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->date_validation = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->statut_generation_globale = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->type_reponse = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->cle_externe_formulaire = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->formulaire_depose = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->id_dossier_pere = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = CommonTDossierFormulairePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTDossierFormulaire object", $e);
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

        if ($this->aCommonTReponseElecFormulaire !== null && $this->id_reponse_elec_formulaire !== $this->aCommonTReponseElecFormulaire->getIdReponseElecFormulaire()) {
            $this->aCommonTReponseElecFormulaire = null;
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
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTDossierFormulairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonTReponseElecFormulaire = null;
            $this->collCommonTEditionFormulaires = null;

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
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTDossierFormulaireQuery::create()
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
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTDossierFormulairePeer::addInstanceToPool($this);
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

            if ($this->aCommonTReponseElecFormulaire !== null) {
                if ($this->aCommonTReponseElecFormulaire->isModified() || $this->aCommonTReponseElecFormulaire->isNew()) {
                    $affectedRows += $this->aCommonTReponseElecFormulaire->save($con);
                }
                $this->setCommonTReponseElecFormulaire($this->aCommonTReponseElecFormulaire);
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

            if ($this->commonTEditionFormulairesScheduledForDeletion !== null) {
                if (!$this->commonTEditionFormulairesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTEditionFormulairesScheduledForDeletion as $commonTEditionFormulaire) {
                        // need to save related object because we set the relation to null
                        $commonTEditionFormulaire->save($con);
                    }
                    $this->commonTEditionFormulairesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTEditionFormulaires !== null) {
                foreach ($this->collCommonTEditionFormulaires as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE;
        if (null !== $this->id_dossier_formulaire) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_dossier_formulaire`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_reponse_elec_formulaire`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::ID_LOT)) {
            $modifiedColumns[':p' . $index++]  = '`id_lot`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::TYPE_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`type_enveloppe`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::LIBELLE_FORRMULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_forrmulaire`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF)) {
            $modifiedColumns[':p' . $index++]  = '`cle_externe_dispositif`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::CLE_EXTERNE_DOSSIER)) {
            $modifiedColumns[':p' . $index++]  = '`cle_externe_dossier`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::STATUT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`statut_validation`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`date_modif`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::DATE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::STATUT_GENERATION_GLOBALE)) {
            $modifiedColumns[':p' . $index++]  = '`statut_generation_globale`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::TYPE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`type_reponse`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`cle_externe_formulaire`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE)) {
            $modifiedColumns[':p' . $index++]  = '`formulaire_depose`';
        }
        if ($this->isColumnModified(CommonTDossierFormulairePeer::ID_DOSSIER_PERE)) {
            $modifiedColumns[':p' . $index++]  = '`id_dossier_pere`';
        }

        $sql = sprintf(
            'INSERT INTO `t_dossier_formulaire` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_dossier_formulaire`':						
                        $stmt->bindValue($identifier, $this->id_dossier_formulaire, PDO::PARAM_INT);
                        break;
                    case '`id_reponse_elec_formulaire`':						
                        $stmt->bindValue($identifier, $this->id_reponse_elec_formulaire, PDO::PARAM_INT);
                        break;
                    case '`id_lot`':						
                        $stmt->bindValue($identifier, $this->id_lot, PDO::PARAM_INT);
                        break;
                    case '`type_enveloppe`':						
                        $stmt->bindValue($identifier, $this->type_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`libelle_forrmulaire`':						
                        $stmt->bindValue($identifier, $this->libelle_forrmulaire, PDO::PARAM_STR);
                        break;
                    case '`cle_externe_dispositif`':						
                        $stmt->bindValue($identifier, $this->cle_externe_dispositif, PDO::PARAM_INT);
                        break;
                    case '`cle_externe_dossier`':						
                        $stmt->bindValue($identifier, $this->cle_externe_dossier, PDO::PARAM_INT);
                        break;
                    case '`statut_validation`':						
                        $stmt->bindValue($identifier, $this->statut_validation, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_modif`':						
                        $stmt->bindValue($identifier, $this->date_modif, PDO::PARAM_STR);
                        break;
                    case '`date_validation`':						
                        $stmt->bindValue($identifier, $this->date_validation, PDO::PARAM_STR);
                        break;
                    case '`statut_generation_globale`':						
                        $stmt->bindValue($identifier, $this->statut_generation_globale, PDO::PARAM_INT);
                        break;
                    case '`type_reponse`':						
                        $stmt->bindValue($identifier, $this->type_reponse, PDO::PARAM_INT);
                        break;
                    case '`cle_externe_formulaire`':						
                        $stmt->bindValue($identifier, $this->cle_externe_formulaire, PDO::PARAM_INT);
                        break;
                    case '`formulaire_depose`':						
                        $stmt->bindValue($identifier, $this->formulaire_depose, PDO::PARAM_STR);
                        break;
                    case '`id_dossier_pere`':						
                        $stmt->bindValue($identifier, $this->id_dossier_pere, PDO::PARAM_INT);
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
        $this->setIdDossierFormulaire($pk);

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

            if ($this->aCommonTReponseElecFormulaire !== null) {
                if (!$this->aCommonTReponseElecFormulaire->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTReponseElecFormulaire->getValidationFailures());
                }
            }


            if (($retval = CommonTDossierFormulairePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTEditionFormulaires !== null) {
                    foreach ($this->collCommonTEditionFormulaires as $referrerFK) {
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
        $pos = CommonTDossierFormulairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDossierFormulaire();
                break;
            case 1:
                return $this->getIdReponseElecFormulaire();
                break;
            case 2:
                return $this->getIdLot();
                break;
            case 3:
                return $this->getTypeEnveloppe();
                break;
            case 4:
                return $this->getLibelleForrmulaire();
                break;
            case 5:
                return $this->getCleExterneDispositif();
                break;
            case 6:
                return $this->getCleExterneDossier();
                break;
            case 7:
                return $this->getStatutValidation();
                break;
            case 8:
                return $this->getDateCreation();
                break;
            case 9:
                return $this->getDateModif();
                break;
            case 10:
                return $this->getDateValidation();
                break;
            case 11:
                return $this->getStatutGenerationGlobale();
                break;
            case 12:
                return $this->getTypeReponse();
                break;
            case 13:
                return $this->getCleExterneFormulaire();
                break;
            case 14:
                return $this->getFormulaireDepose();
                break;
            case 15:
                return $this->getIdDossierPere();
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
        if (isset($alreadyDumpedObjects['CommonTDossierFormulaire'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTDossierFormulaire'][$this->getPrimaryKey()] = true;
        $keys = CommonTDossierFormulairePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdDossierFormulaire(),
            $keys[1] => $this->getIdReponseElecFormulaire(),
            $keys[2] => $this->getIdLot(),
            $keys[3] => $this->getTypeEnveloppe(),
            $keys[4] => $this->getLibelleForrmulaire(),
            $keys[5] => $this->getCleExterneDispositif(),
            $keys[6] => $this->getCleExterneDossier(),
            $keys[7] => $this->getStatutValidation(),
            $keys[8] => $this->getDateCreation(),
            $keys[9] => $this->getDateModif(),
            $keys[10] => $this->getDateValidation(),
            $keys[11] => $this->getStatutGenerationGlobale(),
            $keys[12] => $this->getTypeReponse(),
            $keys[13] => $this->getCleExterneFormulaire(),
            $keys[14] => $this->getFormulaireDepose(),
            $keys[15] => $this->getIdDossierPere(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonTReponseElecFormulaire) {
                $result['CommonTReponseElecFormulaire'] = $this->aCommonTReponseElecFormulaire->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonTEditionFormulaires) {
                $result['CommonTEditionFormulaires'] = $this->collCommonTEditionFormulaires->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTDossierFormulairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDossierFormulaire($value);
                break;
            case 1:
                $this->setIdReponseElecFormulaire($value);
                break;
            case 2:
                $this->setIdLot($value);
                break;
            case 3:
                $this->setTypeEnveloppe($value);
                break;
            case 4:
                $this->setLibelleForrmulaire($value);
                break;
            case 5:
                $this->setCleExterneDispositif($value);
                break;
            case 6:
                $this->setCleExterneDossier($value);
                break;
            case 7:
                $this->setStatutValidation($value);
                break;
            case 8:
                $this->setDateCreation($value);
                break;
            case 9:
                $this->setDateModif($value);
                break;
            case 10:
                $this->setDateValidation($value);
                break;
            case 11:
                $this->setStatutGenerationGlobale($value);
                break;
            case 12:
                $this->setTypeReponse($value);
                break;
            case 13:
                $this->setCleExterneFormulaire($value);
                break;
            case 14:
                $this->setFormulaireDepose($value);
                break;
            case 15:
                $this->setIdDossierPere($value);
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
        $keys = CommonTDossierFormulairePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdDossierFormulaire($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdReponseElecFormulaire($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdLot($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTypeEnveloppe($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLibelleForrmulaire($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCleExterneDispositif($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCleExterneDossier($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStatutValidation($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDateCreation($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateModif($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateValidation($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setStatutGenerationGlobale($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTypeReponse($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCleExterneFormulaire($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFormulaireDepose($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdDossierPere($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTDossierFormulairePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE)) $criteria->add(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $this->id_dossier_formulaire);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE)) $criteria->add(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $this->id_reponse_elec_formulaire);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::ID_LOT)) $criteria->add(CommonTDossierFormulairePeer::ID_LOT, $this->id_lot);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::TYPE_ENVELOPPE)) $criteria->add(CommonTDossierFormulairePeer::TYPE_ENVELOPPE, $this->type_enveloppe);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::LIBELLE_FORRMULAIRE)) $criteria->add(CommonTDossierFormulairePeer::LIBELLE_FORRMULAIRE, $this->libelle_forrmulaire);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF)) $criteria->add(CommonTDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, $this->cle_externe_dispositif);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::CLE_EXTERNE_DOSSIER)) $criteria->add(CommonTDossierFormulairePeer::CLE_EXTERNE_DOSSIER, $this->cle_externe_dossier);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::STATUT_VALIDATION)) $criteria->add(CommonTDossierFormulairePeer::STATUT_VALIDATION, $this->statut_validation);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::DATE_CREATION)) $criteria->add(CommonTDossierFormulairePeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::DATE_MODIF)) $criteria->add(CommonTDossierFormulairePeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::DATE_VALIDATION)) $criteria->add(CommonTDossierFormulairePeer::DATE_VALIDATION, $this->date_validation);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::STATUT_GENERATION_GLOBALE)) $criteria->add(CommonTDossierFormulairePeer::STATUT_GENERATION_GLOBALE, $this->statut_generation_globale);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::TYPE_REPONSE)) $criteria->add(CommonTDossierFormulairePeer::TYPE_REPONSE, $this->type_reponse);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE)) $criteria->add(CommonTDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE, $this->cle_externe_formulaire);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE)) $criteria->add(CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE, $this->formulaire_depose);
        if ($this->isColumnModified(CommonTDossierFormulairePeer::ID_DOSSIER_PERE)) $criteria->add(CommonTDossierFormulairePeer::ID_DOSSIER_PERE, $this->id_dossier_pere);

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
        $criteria = new Criteria(CommonTDossierFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $this->id_dossier_formulaire);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdDossierFormulaire();
    }

    /**
     * Generic method to set the primary key (id_dossier_formulaire column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdDossierFormulaire($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdDossierFormulaire();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTDossierFormulaire (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdReponseElecFormulaire($this->getIdReponseElecFormulaire());
        $copyObj->setIdLot($this->getIdLot());
        $copyObj->setTypeEnveloppe($this->getTypeEnveloppe());
        $copyObj->setLibelleForrmulaire($this->getLibelleForrmulaire());
        $copyObj->setCleExterneDispositif($this->getCleExterneDispositif());
        $copyObj->setCleExterneDossier($this->getCleExterneDossier());
        $copyObj->setStatutValidation($this->getStatutValidation());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModif($this->getDateModif());
        $copyObj->setDateValidation($this->getDateValidation());
        $copyObj->setStatutGenerationGlobale($this->getStatutGenerationGlobale());
        $copyObj->setTypeReponse($this->getTypeReponse());
        $copyObj->setCleExterneFormulaire($this->getCleExterneFormulaire());
        $copyObj->setFormulaireDepose($this->getFormulaireDepose());
        $copyObj->setIdDossierPere($this->getIdDossierPere());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTEditionFormulaires() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTEditionFormulaire($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdDossierFormulaire(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTDossierFormulaire Clone of current object.
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
     * @return CommonTDossierFormulairePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTDossierFormulairePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonTReponseElecFormulaire object.
     *
     * @param   CommonTReponseElecFormulaire $v
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTReponseElecFormulaire(CommonTReponseElecFormulaire $v = null)
    {
        if ($v === null) {
            $this->setIdReponseElecFormulaire(NULL);
        } else {
            $this->setIdReponseElecFormulaire($v->getIdReponseElecFormulaire());
        }

        $this->aCommonTReponseElecFormulaire = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTReponseElecFormulaire object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTDossierFormulaire($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTReponseElecFormulaire object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTReponseElecFormulaire The associated CommonTReponseElecFormulaire object.
     * @throws PropelException
     */
    public function getCommonTReponseElecFormulaire(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTReponseElecFormulaire === null && ($this->id_reponse_elec_formulaire !== null) && $doQuery) {
            $this->aCommonTReponseElecFormulaire = CommonTReponseElecFormulaireQuery::create()->findPk($this->id_reponse_elec_formulaire, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTReponseElecFormulaire->addCommonTDossierFormulaires($this);
             */
        }

        return $this->aCommonTReponseElecFormulaire;
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
        if ('CommonTEditionFormulaire' == $relationName) {
            $this->initCommonTEditionFormulaires();
        }
    }

    /**
     * Clears out the collCommonTEditionFormulaires collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     * @see        addCommonTEditionFormulaires()
     */
    public function clearCommonTEditionFormulaires()
    {
        $this->collCommonTEditionFormulaires = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTEditionFormulairesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTEditionFormulaires collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTEditionFormulaires($v = true)
    {
        $this->collCommonTEditionFormulairesPartial = $v;
    }

    /**
     * Initializes the collCommonTEditionFormulaires collection.
     *
     * By default this just sets the collCommonTEditionFormulaires collection to an empty array (like clearcollCommonTEditionFormulaires());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTEditionFormulaires($overrideExisting = true)
    {
        if (null !== $this->collCommonTEditionFormulaires && !$overrideExisting) {
            return;
        }
        $this->collCommonTEditionFormulaires = new PropelObjectCollection();
        $this->collCommonTEditionFormulaires->setModel('CommonTEditionFormulaire');
    }

    /**
     * Gets an array of CommonTEditionFormulaire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTDossierFormulaire is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTEditionFormulaire[] List of CommonTEditionFormulaire objects
     * @throws PropelException
     */
    public function getCommonTEditionFormulaires($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTEditionFormulairesPartial && !$this->isNew();
        if (null === $this->collCommonTEditionFormulaires || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTEditionFormulaires) {
                // return empty collection
                $this->initCommonTEditionFormulaires();
            } else {
                $collCommonTEditionFormulaires = CommonTEditionFormulaireQuery::create(null, $criteria)
                    ->filterByCommonTDossierFormulaire($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTEditionFormulairesPartial && count($collCommonTEditionFormulaires)) {
                      $this->initCommonTEditionFormulaires(false);

                      foreach ($collCommonTEditionFormulaires as $obj) {
                        if (false == $this->collCommonTEditionFormulaires->contains($obj)) {
                          $this->collCommonTEditionFormulaires->append($obj);
                        }
                      }

                      $this->collCommonTEditionFormulairesPartial = true;
                    }

                    $collCommonTEditionFormulaires->getInternalIterator()->rewind();

                    return $collCommonTEditionFormulaires;
                }

                if ($partial && $this->collCommonTEditionFormulaires) {
                    foreach ($this->collCommonTEditionFormulaires as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTEditionFormulaires[] = $obj;
                        }
                    }
                }

                $this->collCommonTEditionFormulaires = $collCommonTEditionFormulaires;
                $this->collCommonTEditionFormulairesPartial = false;
            }
        }

        return $this->collCommonTEditionFormulaires;
    }

    /**
     * Sets a collection of CommonTEditionFormulaire objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTEditionFormulaires A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function setCommonTEditionFormulaires(PropelCollection $commonTEditionFormulaires, PropelPDO $con = null)
    {
        $commonTEditionFormulairesToDelete = $this->getCommonTEditionFormulaires(new Criteria(), $con)->diff($commonTEditionFormulaires);


        $this->commonTEditionFormulairesScheduledForDeletion = $commonTEditionFormulairesToDelete;

        foreach ($commonTEditionFormulairesToDelete as $commonTEditionFormulaireRemoved) {
            $commonTEditionFormulaireRemoved->setCommonTDossierFormulaire(null);
        }

        $this->collCommonTEditionFormulaires = null;
        foreach ($commonTEditionFormulaires as $commonTEditionFormulaire) {
            $this->addCommonTEditionFormulaire($commonTEditionFormulaire);
        }

        $this->collCommonTEditionFormulaires = $commonTEditionFormulaires;
        $this->collCommonTEditionFormulairesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTEditionFormulaire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTEditionFormulaire objects.
     * @throws PropelException
     */
    public function countCommonTEditionFormulaires(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTEditionFormulairesPartial && !$this->isNew();
        if (null === $this->collCommonTEditionFormulaires || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTEditionFormulaires) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTEditionFormulaires());
            }
            $query = CommonTEditionFormulaireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTDossierFormulaire($this)
                ->count($con);
        }

        return count($this->collCommonTEditionFormulaires);
    }

    /**
     * Method called to associate a CommonTEditionFormulaire object to this object
     * through the CommonTEditionFormulaire foreign key attribute.
     *
     * @param   CommonTEditionFormulaire $l CommonTEditionFormulaire
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function addCommonTEditionFormulaire(CommonTEditionFormulaire $l)
    {
        if ($this->collCommonTEditionFormulaires === null) {
            $this->initCommonTEditionFormulaires();
            $this->collCommonTEditionFormulairesPartial = true;
        }
        if (!in_array($l, $this->collCommonTEditionFormulaires->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTEditionFormulaire($l);
        }

        return $this;
    }

    /**
     * @param	CommonTEditionFormulaire $commonTEditionFormulaire The commonTEditionFormulaire object to add.
     */
    protected function doAddCommonTEditionFormulaire($commonTEditionFormulaire)
    {
        $this->collCommonTEditionFormulaires[]= $commonTEditionFormulaire;
        $commonTEditionFormulaire->setCommonTDossierFormulaire($this);
    }

    /**
     * @param	CommonTEditionFormulaire $commonTEditionFormulaire The commonTEditionFormulaire object to remove.
     * @return CommonTDossierFormulaire The current object (for fluent API support)
     */
    public function removeCommonTEditionFormulaire($commonTEditionFormulaire)
    {
        if ($this->getCommonTEditionFormulaires()->contains($commonTEditionFormulaire)) {
            $this->collCommonTEditionFormulaires->remove($this->collCommonTEditionFormulaires->search($commonTEditionFormulaire));
            if (null === $this->commonTEditionFormulairesScheduledForDeletion) {
                $this->commonTEditionFormulairesScheduledForDeletion = clone $this->collCommonTEditionFormulaires;
                $this->commonTEditionFormulairesScheduledForDeletion->clear();
            }
            $this->commonTEditionFormulairesScheduledForDeletion[]= clone $commonTEditionFormulaire;
            $commonTEditionFormulaire->setCommonTDossierFormulaire(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_dossier_formulaire = null;
        $this->id_reponse_elec_formulaire = null;
        $this->id_lot = null;
        $this->type_enveloppe = null;
        $this->libelle_forrmulaire = null;
        $this->cle_externe_dispositif = null;
        $this->cle_externe_dossier = null;
        $this->statut_validation = null;
        $this->date_creation = null;
        $this->date_modif = null;
        $this->date_validation = null;
        $this->statut_generation_globale = null;
        $this->type_reponse = null;
        $this->cle_externe_formulaire = null;
        $this->formulaire_depose = null;
        $this->id_dossier_pere = null;
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
            if ($this->collCommonTEditionFormulaires) {
                foreach ($this->collCommonTEditionFormulaires as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonTReponseElecFormulaire instanceof Persistent) {
              $this->aCommonTReponseElecFormulaire->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTEditionFormulaires instanceof PropelCollection) {
            $this->collCommonTEditionFormulaires->clearIterator();
        }
        $this->collCommonTEditionFormulaires = null;
        $this->aCommonTReponseElecFormulaire = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTDossierFormulairePeer::DEFAULT_STRING_FORMAT);
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
