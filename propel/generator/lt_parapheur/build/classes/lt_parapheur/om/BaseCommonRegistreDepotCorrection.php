<?php


/**
 * Base class that represents a row from the 'registre_depot_correction' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonRegistreDepotCorrection extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonRegistreDepotCorrectionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonRegistreDepotCorrectionPeer
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
     * The value for the id_offre field.
     * @var        int
     */
    protected $id_offre;

    /**
     * The value for the consultation_ref field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the nom_entreprise field.
     * @var        string
     */
    protected $nom_entreprise;

    /**
     * The value for the nom field.
     * @var        string
     */
    protected $nom;

    /**
     * The value for the prenom field.
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the mail field.
     * @var        string
     */
    protected $mail;

    /**
     * The value for the adresse field.
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the adresse2 field.
     * @var        string
     */
    protected $adresse2;

    /**
     * The value for the telephone field.
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

    /**
     * The value for the code_postal field.
     * @var        string
     */
    protected $code_postal;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the pays field.
     * @var        string
     */
    protected $pays;

    /**
     * The value for the ville_rc field.
     * @var        string
     */
    protected $ville_rc;

    /**
     * The value for the numero_rc field.
     * @var        string
     */
    protected $numero_rc;

    /**
     * The value for the identifiant_national field.
     * @var        string
     */
    protected $identifiant_national;

    /**
     * The value for the ifu_entreprise field.
     * @var        string
     */
    protected $ifu_entreprise;

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
        $this->consultation_ref = 0;
    }

    /**
     * Initializes internal state of BaseCommonRegistreDepotCorrection object.
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
     * Get the [id_offre] column value.
     * 
     * @return int
     */
    public function getIdOffre()
    {

        return $this->id_offre;
    }

    /**
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [nom_entreprise] column value.
     * 
     * @return string
     */
    public function getNomEntreprise()
    {

        return $this->nom_entreprise;
    }

    /**
     * Get the [nom] column value.
     * 
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * Get the [prenom] column value.
     * 
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * Get the [mail] column value.
     * 
     * @return string
     */
    public function getMail()
    {

        return $this->mail;
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
     * Get the [adresse2] column value.
     * 
     * @return string
     */
    public function getAdresse2()
    {

        return $this->adresse2;
    }

    /**
     * Get the [telephone] column value.
     * 
     * @return string
     */
    public function getTelephone()
    {

        return $this->telephone;
    }

    /**
     * Get the [fax] column value.
     * 
     * @return string
     */
    public function getFax()
    {

        return $this->fax;
    }

    /**
     * Get the [code_postal] column value.
     * 
     * @return string
     */
    public function getCodePostal()
    {

        return $this->code_postal;
    }

    /**
     * Get the [ville] column value.
     * 
     * @return string
     */
    public function getVille()
    {

        return $this->ville;
    }

    /**
     * Get the [pays] column value.
     * 
     * @return string
     */
    public function getPays()
    {

        return $this->pays;
    }

    /**
     * Get the [ville_rc] column value.
     * 
     * @return string
     */
    public function getVilleRc()
    {

        return $this->ville_rc;
    }

    /**
     * Get the [numero_rc] column value.
     * 
     * @return string
     */
    public function getNumeroRc()
    {

        return $this->numero_rc;
    }

    /**
     * Get the [identifiant_national] column value.
     * 
     * @return string
     */
    public function getIdentifiantNational()
    {

        return $this->identifiant_national;
    }

    /**
     * Get the [ifu_entreprise] column value.
     * 
     * @return string
     */
    public function getIfuEntreprise()
    {

        return $this->ifu_entreprise;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_offre] column.
     * 
     * @param int $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setIdOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_offre !== $v) {
            $this->id_offre = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::ID_OFFRE;
        }


        return $this;
    } // setIdOffre()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [nom_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setNomEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_entreprise !== $v) {
            $this->nom_entreprise = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::NOM_ENTREPRISE;
        }


        return $this;
    } // setNomEntreprise()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [mail] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [adresse2] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setAdresse2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2 !== $v) {
            $this->adresse2 = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::ADRESSE2;
        }


        return $this;
    } // setAdresse2()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [code_postal] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setCodePostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_postal !== $v) {
            $this->code_postal = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::CODE_POSTAL;
        }


        return $this;
    } // setCodePostal()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [ville_rc] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setVilleRc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_rc !== $v) {
            $this->ville_rc = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::VILLE_RC;
        }


        return $this;
    } // setVilleRc()

    /**
     * Set the value of [numero_rc] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setNumeroRc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_rc !== $v) {
            $this->numero_rc = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::NUMERO_RC;
        }


        return $this;
    } // setNumeroRc()

    /**
     * Set the value of [identifiant_national] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setIdentifiantNational($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_national !== $v) {
            $this->identifiant_national = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::IDENTIFIANT_NATIONAL;
        }


        return $this;
    } // setIdentifiantNational()

    /**
     * Set the value of [ifu_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonRegistreDepotCorrection The current object (for fluent API support)
     */
    public function setIfuEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ifu_entreprise !== $v) {
            $this->ifu_entreprise = $v;
            $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::IFU_ENTREPRISE;
        }


        return $this;
    } // setIfuEntreprise()

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

            if ($this->consultation_ref !== 0) {
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
            $this->id_offre = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->consultation_ref = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->nom_entreprise = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->nom = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->prenom = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->mail = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->adresse = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->adresse2 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->telephone = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->fax = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->code_postal = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->ville = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->pays = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->ville_rc = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->numero_rc = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->identifiant_national = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->ifu_entreprise = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = CommonRegistreDepotCorrectionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonRegistreDepotCorrection object", $e);
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
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonRegistreDepotCorrectionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonRegistreDepotCorrectionQuery::create()
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
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonRegistreDepotCorrectionPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonRegistreDepotCorrectionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonRegistreDepotCorrectionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::ID_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_offre`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::NOM_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_entreprise`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`mail`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`code_postal`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`pays`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::VILLE_RC)) {
            $modifiedColumns[':p' . $index++]  = '`ville_rc`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::NUMERO_RC)) {
            $modifiedColumns[':p' . $index++]  = '`numero_rc`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::IDENTIFIANT_NATIONAL)) {
            $modifiedColumns[':p' . $index++]  = '`identifiant_national`';
        }
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::IFU_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`ifu_entreprise`';
        }

        $sql = sprintf(
            'INSERT INTO `registre_depot_correction` (%s) VALUES (%s)',
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
                    case '`id_offre`':						
                        $stmt->bindValue($identifier, $this->id_offre, PDO::PARAM_INT);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`nom_entreprise`':						
                        $stmt->bindValue($identifier, $this->nom_entreprise, PDO::PARAM_STR);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`mail`':						
                        $stmt->bindValue($identifier, $this->mail, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`adresse2`':						
                        $stmt->bindValue($identifier, $this->adresse2, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`code_postal`':						
                        $stmt->bindValue($identifier, $this->code_postal, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`pays`':						
                        $stmt->bindValue($identifier, $this->pays, PDO::PARAM_STR);
                        break;
                    case '`ville_rc`':						
                        $stmt->bindValue($identifier, $this->ville_rc, PDO::PARAM_STR);
                        break;
                    case '`numero_rc`':						
                        $stmt->bindValue($identifier, $this->numero_rc, PDO::PARAM_STR);
                        break;
                    case '`identifiant_national`':						
                        $stmt->bindValue($identifier, $this->identifiant_national, PDO::PARAM_STR);
                        break;
                    case '`ifu_entreprise`':						
                        $stmt->bindValue($identifier, $this->ifu_entreprise, PDO::PARAM_STR);
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


            if (($retval = CommonRegistreDepotCorrectionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonRegistreDepotCorrectionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdOffre();
                break;
            case 3:
                return $this->getConsultationRef();
                break;
            case 4:
                return $this->getNomEntreprise();
                break;
            case 5:
                return $this->getNom();
                break;
            case 6:
                return $this->getPrenom();
                break;
            case 7:
                return $this->getMail();
                break;
            case 8:
                return $this->getAdresse();
                break;
            case 9:
                return $this->getAdresse2();
                break;
            case 10:
                return $this->getTelephone();
                break;
            case 11:
                return $this->getFax();
                break;
            case 12:
                return $this->getCodePostal();
                break;
            case 13:
                return $this->getVille();
                break;
            case 14:
                return $this->getPays();
                break;
            case 15:
                return $this->getVilleRc();
                break;
            case 16:
                return $this->getNumeroRc();
                break;
            case 17:
                return $this->getIdentifiantNational();
                break;
            case 18:
                return $this->getIfuEntreprise();
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
        if (isset($alreadyDumpedObjects['CommonRegistreDepotCorrection'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonRegistreDepotCorrection'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonRegistreDepotCorrectionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdOffre(),
            $keys[3] => $this->getConsultationRef(),
            $keys[4] => $this->getNomEntreprise(),
            $keys[5] => $this->getNom(),
            $keys[6] => $this->getPrenom(),
            $keys[7] => $this->getMail(),
            $keys[8] => $this->getAdresse(),
            $keys[9] => $this->getAdresse2(),
            $keys[10] => $this->getTelephone(),
            $keys[11] => $this->getFax(),
            $keys[12] => $this->getCodePostal(),
            $keys[13] => $this->getVille(),
            $keys[14] => $this->getPays(),
            $keys[15] => $this->getVilleRc(),
            $keys[16] => $this->getNumeroRc(),
            $keys[17] => $this->getIdentifiantNational(),
            $keys[18] => $this->getIfuEntreprise(),
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
        $pos = CommonRegistreDepotCorrectionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdOffre($value);
                break;
            case 3:
                $this->setConsultationRef($value);
                break;
            case 4:
                $this->setNomEntreprise($value);
                break;
            case 5:
                $this->setNom($value);
                break;
            case 6:
                $this->setPrenom($value);
                break;
            case 7:
                $this->setMail($value);
                break;
            case 8:
                $this->setAdresse($value);
                break;
            case 9:
                $this->setAdresse2($value);
                break;
            case 10:
                $this->setTelephone($value);
                break;
            case 11:
                $this->setFax($value);
                break;
            case 12:
                $this->setCodePostal($value);
                break;
            case 13:
                $this->setVille($value);
                break;
            case 14:
                $this->setPays($value);
                break;
            case 15:
                $this->setVilleRc($value);
                break;
            case 16:
                $this->setNumeroRc($value);
                break;
            case 17:
                $this->setIdentifiantNational($value);
                break;
            case 18:
                $this->setIfuEntreprise($value);
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
        $keys = CommonRegistreDepotCorrectionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdOffre($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setConsultationRef($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNomEntreprise($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNom($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrenom($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMail($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAdresse($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAdresse2($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTelephone($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFax($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCodePostal($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setVille($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPays($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setVilleRc($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setNumeroRc($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setIdentifiantNational($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIfuEntreprise($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonRegistreDepotCorrectionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::ID)) $criteria->add(CommonRegistreDepotCorrectionPeer::ID, $this->id);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::ORGANISME)) $criteria->add(CommonRegistreDepotCorrectionPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::ID_OFFRE)) $criteria->add(CommonRegistreDepotCorrectionPeer::ID_OFFRE, $this->id_offre);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::CONSULTATION_REF)) $criteria->add(CommonRegistreDepotCorrectionPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::NOM_ENTREPRISE)) $criteria->add(CommonRegistreDepotCorrectionPeer::NOM_ENTREPRISE, $this->nom_entreprise);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::NOM)) $criteria->add(CommonRegistreDepotCorrectionPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::PRENOM)) $criteria->add(CommonRegistreDepotCorrectionPeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::MAIL)) $criteria->add(CommonRegistreDepotCorrectionPeer::MAIL, $this->mail);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::ADRESSE)) $criteria->add(CommonRegistreDepotCorrectionPeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::ADRESSE2)) $criteria->add(CommonRegistreDepotCorrectionPeer::ADRESSE2, $this->adresse2);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::TELEPHONE)) $criteria->add(CommonRegistreDepotCorrectionPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::FAX)) $criteria->add(CommonRegistreDepotCorrectionPeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::CODE_POSTAL)) $criteria->add(CommonRegistreDepotCorrectionPeer::CODE_POSTAL, $this->code_postal);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::VILLE)) $criteria->add(CommonRegistreDepotCorrectionPeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::PAYS)) $criteria->add(CommonRegistreDepotCorrectionPeer::PAYS, $this->pays);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::VILLE_RC)) $criteria->add(CommonRegistreDepotCorrectionPeer::VILLE_RC, $this->ville_rc);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::NUMERO_RC)) $criteria->add(CommonRegistreDepotCorrectionPeer::NUMERO_RC, $this->numero_rc);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::IDENTIFIANT_NATIONAL)) $criteria->add(CommonRegistreDepotCorrectionPeer::IDENTIFIANT_NATIONAL, $this->identifiant_national);
        if ($this->isColumnModified(CommonRegistreDepotCorrectionPeer::IFU_ENTREPRISE)) $criteria->add(CommonRegistreDepotCorrectionPeer::IFU_ENTREPRISE, $this->ifu_entreprise);

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
        $criteria = new Criteria(CommonRegistreDepotCorrectionPeer::DATABASE_NAME);
        $criteria->add(CommonRegistreDepotCorrectionPeer::ID, $this->id);
        $criteria->add(CommonRegistreDepotCorrectionPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonRegistreDepotCorrection (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdOffre($this->getIdOffre());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setNomEntreprise($this->getNomEntreprise());
        $copyObj->setNom($this->getNom());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setMail($this->getMail());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setAdresse2($this->getAdresse2());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setCodePostal($this->getCodePostal());
        $copyObj->setVille($this->getVille());
        $copyObj->setPays($this->getPays());
        $copyObj->setVilleRc($this->getVilleRc());
        $copyObj->setNumeroRc($this->getNumeroRc());
        $copyObj->setIdentifiantNational($this->getIdentifiantNational());
        $copyObj->setIfuEntreprise($this->getIfuEntreprise());
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
     * @return CommonRegistreDepotCorrection Clone of current object.
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
     * @return CommonRegistreDepotCorrectionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonRegistreDepotCorrectionPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->id_offre = null;
        $this->consultation_ref = null;
        $this->nom_entreprise = null;
        $this->nom = null;
        $this->prenom = null;
        $this->mail = null;
        $this->adresse = null;
        $this->adresse2 = null;
        $this->telephone = null;
        $this->fax = null;
        $this->code_postal = null;
        $this->ville = null;
        $this->pays = null;
        $this->ville_rc = null;
        $this->numero_rc = null;
        $this->identifiant_national = null;
        $this->ifu_entreprise = null;
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
        return (string) $this->exportTo(CommonRegistreDepotCorrectionPeer::DEFAULT_STRING_FORMAT);
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
