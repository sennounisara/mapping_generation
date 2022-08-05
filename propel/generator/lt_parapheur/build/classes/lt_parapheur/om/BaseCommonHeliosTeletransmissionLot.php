<?php


/**
 * Base class that represents a row from the 'Helios_teletransmission_lot' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonHeliosTeletransmissionLot extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonHeliosTeletransmissionLotPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonHeliosTeletransmissionLotPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_teletransmission field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_teletransmission;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the lot field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lot;

    /**
     * The value for the numero_marche field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $numero_marche;

    /**
     * The value for the ids_env_actes_engagements field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ids_env_actes_engagements;

    /**
     * The value for the ids_enveloppes_items field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ids_enveloppes_items;

    /**
     * The value for the ids_docs_acceptes field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ids_docs_acceptes;

    /**
     * The value for the ids_msg_notif field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ids_msg_notif;

    /**
     * The value for the lot_in_transmission field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lot_in_transmission;

    /**
     * The value for the statut_envoi field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $statut_envoi;

    /**
     * The value for the id_zip_send field.
     * @var        string
     */
    protected $id_zip_send;

    /**
     * The value for the nom_lettre_commande field.
     * @var        string
     */
    protected $nom_lettre_commande;

    /**
     * The value for the lettre_commande field.
     * @var        int
     */
    protected $lettre_commande;

    /**
     * The value for the horodatage field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $horodatage;

    /**
     * The value for the untrusteddate field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $untrusteddate;

    /**
     * The value for the taille field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $taille;

    /**
     * The value for the valider_comptable field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $valider_comptable;

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
        $this->id_teletransmission = 0;
        $this->organisme = '';
        $this->lot = 0;
        $this->numero_marche = '';
        $this->ids_env_actes_engagements = '';
        $this->ids_enveloppes_items = '';
        $this->ids_docs_acceptes = '';
        $this->ids_msg_notif = '';
        $this->lot_in_transmission = '';
        $this->statut_envoi = 1;
        $this->horodatage = '';
        $this->untrusteddate = '';
        $this->taille = '';
        $this->valider_comptable = '0';
    }

    /**
     * Initializes internal state of BaseCommonHeliosTeletransmissionLot object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_teletransmission] column value.
     * 
     * @return int
     */
    public function getIdTeletransmission()
    {

        return $this->id_teletransmission;
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
     * Get the [lot] column value.
     * 
     * @return int
     */
    public function getLot()
    {

        return $this->lot;
    }

    /**
     * Get the [numero_marche] column value.
     * 
     * @return string
     */
    public function getNumeroMarche()
    {

        return $this->numero_marche;
    }

    /**
     * Get the [ids_env_actes_engagements] column value.
     * 
     * @return string
     */
    public function getIdsEnvActesEngagements()
    {

        return $this->ids_env_actes_engagements;
    }

    /**
     * Get the [ids_enveloppes_items] column value.
     * 
     * @return string
     */
    public function getIdsEnveloppesItems()
    {

        return $this->ids_enveloppes_items;
    }

    /**
     * Get the [ids_docs_acceptes] column value.
     * 
     * @return string
     */
    public function getIdsDocsAcceptes()
    {

        return $this->ids_docs_acceptes;
    }

    /**
     * Get the [ids_msg_notif] column value.
     * 
     * @return string
     */
    public function getIdsMsgNotif()
    {

        return $this->ids_msg_notif;
    }

    /**
     * Get the [lot_in_transmission] column value.
     * 
     * @return string
     */
    public function getLotInTransmission()
    {

        return $this->lot_in_transmission;
    }

    /**
     * Get the [statut_envoi] column value.
     * 
     * @return int
     */
    public function getStatutEnvoi()
    {

        return $this->statut_envoi;
    }

    /**
     * Get the [id_zip_send] column value.
     * 
     * @return string
     */
    public function getIdZipSend()
    {

        return $this->id_zip_send;
    }

    /**
     * Get the [nom_lettre_commande] column value.
     * 
     * @return string
     */
    public function getNomLettreCommande()
    {

        return $this->nom_lettre_commande;
    }

    /**
     * Get the [lettre_commande] column value.
     * 
     * @return int
     */
    public function getLettreCommande()
    {

        return $this->lettre_commande;
    }

    /**
     * Get the [horodatage] column value.
     * 
     * @return string
     */
    public function getHorodatage()
    {

        return $this->horodatage;
    }

    /**
     * Get the [untrusteddate] column value.
     * 
     * @return string
     */
    public function getUntrusteddate()
    {

        return $this->untrusteddate;
    }

    /**
     * Get the [taille] column value.
     * 
     * @return string
     */
    public function getTaille()
    {

        return $this->taille;
    }

    /**
     * Get the [valider_comptable] column value.
     * 
     * @return string
     */
    public function getValiderComptable()
    {

        return $this->valider_comptable;
    }

    /**
     * Set the value of [id_teletransmission] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setIdTeletransmission($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_teletransmission !== $v) {
            $this->id_teletransmission = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION;
        }


        return $this;
    } // setIdTeletransmission()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [numero_marche] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setNumeroMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_marche !== $v) {
            $this->numero_marche = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::NUMERO_MARCHE;
        }


        return $this;
    } // setNumeroMarche()

    /**
     * Set the value of [ids_env_actes_engagements] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setIdsEnvActesEngagements($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_env_actes_engagements !== $v) {
            $this->ids_env_actes_engagements = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::IDS_ENV_ACTES_ENGAGEMENTS;
        }


        return $this;
    } // setIdsEnvActesEngagements()

    /**
     * Set the value of [ids_enveloppes_items] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setIdsEnveloppesItems($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_enveloppes_items !== $v) {
            $this->ids_enveloppes_items = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::IDS_ENVELOPPES_ITEMS;
        }


        return $this;
    } // setIdsEnveloppesItems()

    /**
     * Set the value of [ids_docs_acceptes] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setIdsDocsAcceptes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_docs_acceptes !== $v) {
            $this->ids_docs_acceptes = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::IDS_DOCS_ACCEPTES;
        }


        return $this;
    } // setIdsDocsAcceptes()

    /**
     * Set the value of [ids_msg_notif] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setIdsMsgNotif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_msg_notif !== $v) {
            $this->ids_msg_notif = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::IDS_MSG_NOTIF;
        }


        return $this;
    } // setIdsMsgNotif()

    /**
     * Set the value of [lot_in_transmission] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setLotInTransmission($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lot_in_transmission !== $v) {
            $this->lot_in_transmission = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::LOT_IN_TRANSMISSION;
        }


        return $this;
    } // setLotInTransmission()

    /**
     * Set the value of [statut_envoi] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setStatutEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_envoi !== $v) {
            $this->statut_envoi = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::STATUT_ENVOI;
        }


        return $this;
    } // setStatutEnvoi()

    /**
     * Set the value of [id_zip_send] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setIdZipSend($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_zip_send !== $v) {
            $this->id_zip_send = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::ID_ZIP_SEND;
        }


        return $this;
    } // setIdZipSend()

    /**
     * Set the value of [nom_lettre_commande] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setNomLettreCommande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_lettre_commande !== $v) {
            $this->nom_lettre_commande = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::NOM_LETTRE_COMMANDE;
        }


        return $this;
    } // setNomLettreCommande()

    /**
     * Set the value of [lettre_commande] column.
     * 
     * @param int $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setLettreCommande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lettre_commande !== $v) {
            $this->lettre_commande = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::LETTRE_COMMANDE;
        }


        return $this;
    } // setLettreCommande()

    /**
     * Set the value of [horodatage] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setHorodatage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->horodatage !== $v) {
            $this->horodatage = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::HORODATAGE;
        }


        return $this;
    } // setHorodatage()

    /**
     * Set the value of [untrusteddate] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setUntrusteddate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->untrusteddate !== $v) {
            $this->untrusteddate = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::UNTRUSTEDDATE;
        }


        return $this;
    } // setUntrusteddate()

    /**
     * Set the value of [taille] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setTaille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille !== $v) {
            $this->taille = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::TAILLE;
        }


        return $this;
    } // setTaille()

    /**
     * Set the value of [valider_comptable] column.
     * 
     * @param string $v new value
     * @return CommonHeliosTeletransmissionLot The current object (for fluent API support)
     */
    public function setValiderComptable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valider_comptable !== $v) {
            $this->valider_comptable = $v;
            $this->modifiedColumns[] = CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE;
        }


        return $this;
    } // setValiderComptable()

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
            if ($this->id_teletransmission !== 0) {
                return false;
            }

            if ($this->organisme !== '') {
                return false;
            }

            if ($this->lot !== 0) {
                return false;
            }

            if ($this->numero_marche !== '') {
                return false;
            }

            if ($this->ids_env_actes_engagements !== '') {
                return false;
            }

            if ($this->ids_enveloppes_items !== '') {
                return false;
            }

            if ($this->ids_docs_acceptes !== '') {
                return false;
            }

            if ($this->ids_msg_notif !== '') {
                return false;
            }

            if ($this->lot_in_transmission !== '') {
                return false;
            }

            if ($this->statut_envoi !== 1) {
                return false;
            }

            if ($this->horodatage !== '') {
                return false;
            }

            if ($this->untrusteddate !== '') {
                return false;
            }

            if ($this->taille !== '') {
                return false;
            }

            if ($this->valider_comptable !== '0') {
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

            $this->id_teletransmission = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->lot = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->numero_marche = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->ids_env_actes_engagements = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ids_enveloppes_items = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ids_docs_acceptes = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->ids_msg_notif = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->lot_in_transmission = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->statut_envoi = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->id_zip_send = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->nom_lettre_commande = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->lettre_commande = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->horodatage = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->untrusteddate = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->taille = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->valider_comptable = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = CommonHeliosTeletransmissionLotPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonHeliosTeletransmissionLot object", $e);
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
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonHeliosTeletransmissionLotPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonHeliosTeletransmissionLotQuery::create()
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
            $con = Propel::getConnection(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonHeliosTeletransmissionLotPeer::addInstanceToPool($this);
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
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION)) {
            $modifiedColumns[':p' . $index++]  = '`id_teletransmission`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::NUMERO_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_marche`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::IDS_ENV_ACTES_ENGAGEMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`ids_env_actes_engagements`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::IDS_ENVELOPPES_ITEMS)) {
            $modifiedColumns[':p' . $index++]  = '`ids_enveloppes_items`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::IDS_DOCS_ACCEPTES)) {
            $modifiedColumns[':p' . $index++]  = '`ids_docs_acceptes`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::IDS_MSG_NOTIF)) {
            $modifiedColumns[':p' . $index++]  = '`ids_msg_notif`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::LOT_IN_TRANSMISSION)) {
            $modifiedColumns[':p' . $index++]  = '`lot_in_transmission`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::STATUT_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`statut_envoi`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::ID_ZIP_SEND)) {
            $modifiedColumns[':p' . $index++]  = '`id_zip_send`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::NOM_LETTRE_COMMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`nom_lettre_commande`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::LETTRE_COMMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`lettre_commande`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::HORODATAGE)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::UNTRUSTEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`untrusteddate`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::TAILLE)) {
            $modifiedColumns[':p' . $index++]  = '`taille`';
        }
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE)) {
            $modifiedColumns[':p' . $index++]  = '`valider_comptable`';
        }

        $sql = sprintf(
            'INSERT INTO `Helios_teletransmission_lot` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_teletransmission`':						
                        $stmt->bindValue($identifier, $this->id_teletransmission, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`numero_marche`':						
                        $stmt->bindValue($identifier, $this->numero_marche, PDO::PARAM_STR);
                        break;
                    case '`ids_env_actes_engagements`':						
                        $stmt->bindValue($identifier, $this->ids_env_actes_engagements, PDO::PARAM_STR);
                        break;
                    case '`ids_enveloppes_items`':						
                        $stmt->bindValue($identifier, $this->ids_enveloppes_items, PDO::PARAM_STR);
                        break;
                    case '`ids_docs_acceptes`':						
                        $stmt->bindValue($identifier, $this->ids_docs_acceptes, PDO::PARAM_STR);
                        break;
                    case '`ids_msg_notif`':						
                        $stmt->bindValue($identifier, $this->ids_msg_notif, PDO::PARAM_STR);
                        break;
                    case '`lot_in_transmission`':						
                        $stmt->bindValue($identifier, $this->lot_in_transmission, PDO::PARAM_STR);
                        break;
                    case '`statut_envoi`':						
                        $stmt->bindValue($identifier, $this->statut_envoi, PDO::PARAM_INT);
                        break;
                    case '`id_zip_send`':						
                        $stmt->bindValue($identifier, $this->id_zip_send, PDO::PARAM_STR);
                        break;
                    case '`nom_lettre_commande`':						
                        $stmt->bindValue($identifier, $this->nom_lettre_commande, PDO::PARAM_STR);
                        break;
                    case '`lettre_commande`':						
                        $stmt->bindValue($identifier, $this->lettre_commande, PDO::PARAM_INT);
                        break;
                    case '`horodatage`':						
                        $stmt->bindValue($identifier, $this->horodatage, PDO::PARAM_STR);
                        break;
                    case '`untrusteddate`':						
                        $stmt->bindValue($identifier, $this->untrusteddate, PDO::PARAM_STR);
                        break;
                    case '`taille`':						
                        $stmt->bindValue($identifier, $this->taille, PDO::PARAM_STR);
                        break;
                    case '`valider_comptable`':						
                        $stmt->bindValue($identifier, $this->valider_comptable, PDO::PARAM_STR);
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


            if (($retval = CommonHeliosTeletransmissionLotPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonHeliosTeletransmissionLotPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTeletransmission();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getLot();
                break;
            case 3:
                return $this->getNumeroMarche();
                break;
            case 4:
                return $this->getIdsEnvActesEngagements();
                break;
            case 5:
                return $this->getIdsEnveloppesItems();
                break;
            case 6:
                return $this->getIdsDocsAcceptes();
                break;
            case 7:
                return $this->getIdsMsgNotif();
                break;
            case 8:
                return $this->getLotInTransmission();
                break;
            case 9:
                return $this->getStatutEnvoi();
                break;
            case 10:
                return $this->getIdZipSend();
                break;
            case 11:
                return $this->getNomLettreCommande();
                break;
            case 12:
                return $this->getLettreCommande();
                break;
            case 13:
                return $this->getHorodatage();
                break;
            case 14:
                return $this->getUntrusteddate();
                break;
            case 15:
                return $this->getTaille();
                break;
            case 16:
                return $this->getValiderComptable();
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
        if (isset($alreadyDumpedObjects['CommonHeliosTeletransmissionLot'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonHeliosTeletransmissionLot'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonHeliosTeletransmissionLotPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTeletransmission(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getLot(),
            $keys[3] => $this->getNumeroMarche(),
            $keys[4] => $this->getIdsEnvActesEngagements(),
            $keys[5] => $this->getIdsEnveloppesItems(),
            $keys[6] => $this->getIdsDocsAcceptes(),
            $keys[7] => $this->getIdsMsgNotif(),
            $keys[8] => $this->getLotInTransmission(),
            $keys[9] => $this->getStatutEnvoi(),
            $keys[10] => $this->getIdZipSend(),
            $keys[11] => $this->getNomLettreCommande(),
            $keys[12] => $this->getLettreCommande(),
            $keys[13] => $this->getHorodatage(),
            $keys[14] => $this->getUntrusteddate(),
            $keys[15] => $this->getTaille(),
            $keys[16] => $this->getValiderComptable(),
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
        $pos = CommonHeliosTeletransmissionLotPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTeletransmission($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setLot($value);
                break;
            case 3:
                $this->setNumeroMarche($value);
                break;
            case 4:
                $this->setIdsEnvActesEngagements($value);
                break;
            case 5:
                $this->setIdsEnveloppesItems($value);
                break;
            case 6:
                $this->setIdsDocsAcceptes($value);
                break;
            case 7:
                $this->setIdsMsgNotif($value);
                break;
            case 8:
                $this->setLotInTransmission($value);
                break;
            case 9:
                $this->setStatutEnvoi($value);
                break;
            case 10:
                $this->setIdZipSend($value);
                break;
            case 11:
                $this->setNomLettreCommande($value);
                break;
            case 12:
                $this->setLettreCommande($value);
                break;
            case 13:
                $this->setHorodatage($value);
                break;
            case 14:
                $this->setUntrusteddate($value);
                break;
            case 15:
                $this->setTaille($value);
                break;
            case 16:
                $this->setValiderComptable($value);
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
        $keys = CommonHeliosTeletransmissionLotPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTeletransmission($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLot($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumeroMarche($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdsEnvActesEngagements($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdsEnveloppesItems($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdsDocsAcceptes($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdsMsgNotif($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLotInTransmission($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setStatutEnvoi($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIdZipSend($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNomLettreCommande($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setLettreCommande($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setHorodatage($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setUntrusteddate($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTaille($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setValiderComptable($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION)) $criteria->add(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, $this->id_teletransmission);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::ORGANISME)) $criteria->add(CommonHeliosTeletransmissionLotPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::LOT)) $criteria->add(CommonHeliosTeletransmissionLotPeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::NUMERO_MARCHE)) $criteria->add(CommonHeliosTeletransmissionLotPeer::NUMERO_MARCHE, $this->numero_marche);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::IDS_ENV_ACTES_ENGAGEMENTS)) $criteria->add(CommonHeliosTeletransmissionLotPeer::IDS_ENV_ACTES_ENGAGEMENTS, $this->ids_env_actes_engagements);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::IDS_ENVELOPPES_ITEMS)) $criteria->add(CommonHeliosTeletransmissionLotPeer::IDS_ENVELOPPES_ITEMS, $this->ids_enveloppes_items);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::IDS_DOCS_ACCEPTES)) $criteria->add(CommonHeliosTeletransmissionLotPeer::IDS_DOCS_ACCEPTES, $this->ids_docs_acceptes);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::IDS_MSG_NOTIF)) $criteria->add(CommonHeliosTeletransmissionLotPeer::IDS_MSG_NOTIF, $this->ids_msg_notif);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::LOT_IN_TRANSMISSION)) $criteria->add(CommonHeliosTeletransmissionLotPeer::LOT_IN_TRANSMISSION, $this->lot_in_transmission);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::STATUT_ENVOI)) $criteria->add(CommonHeliosTeletransmissionLotPeer::STATUT_ENVOI, $this->statut_envoi);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::ID_ZIP_SEND)) $criteria->add(CommonHeliosTeletransmissionLotPeer::ID_ZIP_SEND, $this->id_zip_send);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::NOM_LETTRE_COMMANDE)) $criteria->add(CommonHeliosTeletransmissionLotPeer::NOM_LETTRE_COMMANDE, $this->nom_lettre_commande);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::LETTRE_COMMANDE)) $criteria->add(CommonHeliosTeletransmissionLotPeer::LETTRE_COMMANDE, $this->lettre_commande);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::HORODATAGE)) $criteria->add(CommonHeliosTeletransmissionLotPeer::HORODATAGE, $this->horodatage);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::UNTRUSTEDDATE)) $criteria->add(CommonHeliosTeletransmissionLotPeer::UNTRUSTEDDATE, $this->untrusteddate);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::TAILLE)) $criteria->add(CommonHeliosTeletransmissionLotPeer::TAILLE, $this->taille);
        if ($this->isColumnModified(CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE)) $criteria->add(CommonHeliosTeletransmissionLotPeer::VALIDER_COMPTABLE, $this->valider_comptable);

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
        $criteria = new Criteria(CommonHeliosTeletransmissionLotPeer::DATABASE_NAME);
        $criteria->add(CommonHeliosTeletransmissionLotPeer::ID_TELETRANSMISSION, $this->id_teletransmission);
        $criteria->add(CommonHeliosTeletransmissionLotPeer::ORGANISME, $this->organisme);
        $criteria->add(CommonHeliosTeletransmissionLotPeer::LOT, $this->lot);

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
        $pks[0] = $this->getIdTeletransmission();
        $pks[1] = $this->getOrganisme();
        $pks[2] = $this->getLot();

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
        $this->setIdTeletransmission($keys[0]);
        $this->setOrganisme($keys[1]);
        $this->setLot($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdTeletransmission()) && (null === $this->getOrganisme()) && (null === $this->getLot());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonHeliosTeletransmissionLot (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTeletransmission($this->getIdTeletransmission());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setLot($this->getLot());
        $copyObj->setNumeroMarche($this->getNumeroMarche());
        $copyObj->setIdsEnvActesEngagements($this->getIdsEnvActesEngagements());
        $copyObj->setIdsEnveloppesItems($this->getIdsEnveloppesItems());
        $copyObj->setIdsDocsAcceptes($this->getIdsDocsAcceptes());
        $copyObj->setIdsMsgNotif($this->getIdsMsgNotif());
        $copyObj->setLotInTransmission($this->getLotInTransmission());
        $copyObj->setStatutEnvoi($this->getStatutEnvoi());
        $copyObj->setIdZipSend($this->getIdZipSend());
        $copyObj->setNomLettreCommande($this->getNomLettreCommande());
        $copyObj->setLettreCommande($this->getLettreCommande());
        $copyObj->setHorodatage($this->getHorodatage());
        $copyObj->setUntrusteddate($this->getUntrusteddate());
        $copyObj->setTaille($this->getTaille());
        $copyObj->setValiderComptable($this->getValiderComptable());
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
     * @return CommonHeliosTeletransmissionLot Clone of current object.
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
     * @return CommonHeliosTeletransmissionLotPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonHeliosTeletransmissionLotPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_teletransmission = null;
        $this->organisme = null;
        $this->lot = null;
        $this->numero_marche = null;
        $this->ids_env_actes_engagements = null;
        $this->ids_enveloppes_items = null;
        $this->ids_docs_acceptes = null;
        $this->ids_msg_notif = null;
        $this->lot_in_transmission = null;
        $this->statut_envoi = null;
        $this->id_zip_send = null;
        $this->nom_lettre_commande = null;
        $this->lettre_commande = null;
        $this->horodatage = null;
        $this->untrusteddate = null;
        $this->taille = null;
        $this->valider_comptable = null;
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
        return (string) $this->exportTo(CommonHeliosTeletransmissionLotPeer::DEFAULT_STRING_FORMAT);
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
