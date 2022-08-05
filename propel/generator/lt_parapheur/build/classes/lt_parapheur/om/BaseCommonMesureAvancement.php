<?php


/**
 * Base class that represents a row from the 'Mesure_avancement' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonMesureAvancement extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonMesureAvancementPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonMesureAvancementPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_mesure field.
     * @var        int
     */
    protected $id_mesure;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_service field.
     * @var        int
     */
    protected $id_service;

    /**
     * The value for the annee field.
     * @var        string
     */
    protected $annee;

    /**
     * The value for the trimestre field.
     * @var        string
     */
    protected $trimestre;

    /**
     * The value for the siren field.
     * @var        string
     */
    protected $siren;

    /**
     * The value for the nic field.
     * @var        string
     */
    protected $nic;

    /**
     * The value for the identifiant_service field.
     * @var        string
     */
    protected $identifiant_service;

    /**
     * The value for the mail field.
     * @var        string
     */
    protected $mail;

    /**
     * The value for the type_pouvoir_adjudicateur field.
     * @var        int
     */
    protected $type_pouvoir_adjudicateur;

    /**
     * The value for the departement field.
     * @var        int
     */
    protected $departement;

    /**
     * The value for the date_envoi field.
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the date_accuse field.
     * @var        string
     */
    protected $date_accuse;

    /**
     * The value for the etat field.
     * Note: this column has a database default value of: 'BR'
     * @var        string
     */
    protected $etat;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the xml field.
     * @var        string
     */
    protected $xml;

    /**
     * The value for the name_xml_genere field.
     * @var        string
     */
    protected $name_xml_genere;

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
        $this->etat = 'BR';
    }

    /**
     * Initializes internal state of BaseCommonMesureAvancement object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_mesure] column value.
     * 
     * @return int
     */
    public function getIdMesure()
    {

        return $this->id_mesure;
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
     * Get the [id_service] column value.
     * 
     * @return int
     */
    public function getIdService()
    {

        return $this->id_service;
    }

    /**
     * Get the [annee] column value.
     * 
     * @return string
     */
    public function getAnnee()
    {

        return $this->annee;
    }

    /**
     * Get the [trimestre] column value.
     * 
     * @return string
     */
    public function getTrimestre()
    {

        return $this->trimestre;
    }

    /**
     * Get the [siren] column value.
     * 
     * @return string
     */
    public function getSiren()
    {

        return $this->siren;
    }

    /**
     * Get the [nic] column value.
     * 
     * @return string
     */
    public function getNic()
    {

        return $this->nic;
    }

    /**
     * Get the [identifiant_service] column value.
     * 
     * @return string
     */
    public function getIdentifiantService()
    {

        return $this->identifiant_service;
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
     * Get the [type_pouvoir_adjudicateur] column value.
     * 
     * @return int
     */
    public function getTypePouvoirAdjudicateur()
    {

        return $this->type_pouvoir_adjudicateur;
    }

    /**
     * Get the [departement] column value.
     * 
     * @return int
     */
    public function getDepartement()
    {

        return $this->departement;
    }

    /**
     * Get the [date_envoi] column value.
     * 
     * @return string
     */
    public function getDateEnvoi()
    {

        return $this->date_envoi;
    }

    /**
     * Get the [date_accuse] column value.
     * 
     * @return string
     */
    public function getDateAccuse()
    {

        return $this->date_accuse;
    }

    /**
     * Get the [etat] column value.
     * 
     * @return string
     */
    public function getEtat()
    {

        return $this->etat;
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
     * Get the [xml] column value.
     * 
     * @return string
     */
    public function getXml()
    {

        return $this->xml;
    }

    /**
     * Get the [name_xml_genere] column value.
     * 
     * @return string
     */
    public function getNameXmlGenere()
    {

        return $this->name_xml_genere;
    }

    /**
     * Set the value of [id_mesure] column.
     * 
     * @param int $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setIdMesure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_mesure !== $v) {
            $this->id_mesure = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::ID_MESURE;
        }


        return $this;
    } // setIdMesure()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [annee] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setAnnee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annee !== $v) {
            $this->annee = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::ANNEE;
        }


        return $this;
    } // setAnnee()

    /**
     * Set the value of [trimestre] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setTrimestre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trimestre !== $v) {
            $this->trimestre = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::TRIMESTRE;
        }


        return $this;
    } // setTrimestre()

    /**
     * Set the value of [siren] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setSiren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siren !== $v) {
            $this->siren = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::SIREN;
        }


        return $this;
    } // setSiren()

    /**
     * Set the value of [nic] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setNic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nic !== $v) {
            $this->nic = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::NIC;
        }


        return $this;
    } // setNic()

    /**
     * Set the value of [identifiant_service] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setIdentifiantService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_service !== $v) {
            $this->identifiant_service = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::IDENTIFIANT_SERVICE;
        }


        return $this;
    } // setIdentifiantService()

    /**
     * Set the value of [mail] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [type_pouvoir_adjudicateur] column.
     * 
     * @param int $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setTypePouvoirAdjudicateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_pouvoir_adjudicateur !== $v) {
            $this->type_pouvoir_adjudicateur = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::TYPE_POUVOIR_ADJUDICATEUR;
        }


        return $this;
    } // setTypePouvoirAdjudicateur()

    /**
     * Set the value of [departement] column.
     * 
     * @param int $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setDepartement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->departement !== $v) {
            $this->departement = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::DEPARTEMENT;
        }


        return $this;
    } // setDepartement()

    /**
     * Set the value of [date_envoi] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi !== $v) {
            $this->date_envoi = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::DATE_ENVOI;
        }


        return $this;
    } // setDateEnvoi()

    /**
     * Set the value of [date_accuse] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setDateAccuse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_accuse !== $v) {
            $this->date_accuse = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::DATE_ACCUSE;
        }


        return $this;
    } // setDateAccuse()

    /**
     * Set the value of [etat] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setEtat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat !== $v) {
            $this->etat = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::ETAT;
        }


        return $this;
    } // setEtat()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [xml] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->xml !== $v) {
            $this->xml = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::XML;
        }


        return $this;
    } // setXml()

    /**
     * Set the value of [name_xml_genere] column.
     * 
     * @param string $v new value
     * @return CommonMesureAvancement The current object (for fluent API support)
     */
    public function setNameXmlGenere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name_xml_genere !== $v) {
            $this->name_xml_genere = $v;
            $this->modifiedColumns[] = CommonMesureAvancementPeer::NAME_XML_GENERE;
        }


        return $this;
    } // setNameXmlGenere()

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
            if ($this->etat !== 'BR') {
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

            $this->id_mesure = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_service = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->annee = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->trimestre = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->siren = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->nic = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->identifiant_service = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->mail = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->type_pouvoir_adjudicateur = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->departement = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->date_envoi = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_accuse = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->etat = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->date_creation = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->xml = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->name_xml_genere = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = CommonMesureAvancementPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonMesureAvancement object", $e);
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
            $con = Propel::getConnection(CommonMesureAvancementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonMesureAvancementPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonMesureAvancementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonMesureAvancementQuery::create()
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
            $con = Propel::getConnection(CommonMesureAvancementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonMesureAvancementPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonMesureAvancementPeer::ID_MESURE;
        if (null !== $this->id_mesure) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonMesureAvancementPeer::ID_MESURE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonMesureAvancementPeer::ID_MESURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_mesure`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::ANNEE)) {
            $modifiedColumns[':p' . $index++]  = '`annee`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::TRIMESTRE)) {
            $modifiedColumns[':p' . $index++]  = '`trimestre`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::SIREN)) {
            $modifiedColumns[':p' . $index++]  = '`siren`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::NIC)) {
            $modifiedColumns[':p' . $index++]  = '`nic`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::IDENTIFIANT_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`identifiant_service`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`mail`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::TYPE_POUVOIR_ADJUDICATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`type_pouvoir_adjudicateur`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::DEPARTEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`departement`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::DATE_ACCUSE)) {
            $modifiedColumns[':p' . $index++]  = '`date_accuse`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::ETAT)) {
            $modifiedColumns[':p' . $index++]  = '`etat`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::XML)) {
            $modifiedColumns[':p' . $index++]  = '`xml`';
        }
        if ($this->isColumnModified(CommonMesureAvancementPeer::NAME_XML_GENERE)) {
            $modifiedColumns[':p' . $index++]  = '`name_xml_genere`';
        }

        $sql = sprintf(
            'INSERT INTO `Mesure_avancement` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_mesure`':						
                        $stmt->bindValue($identifier, $this->id_mesure, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_service`':						
                        $stmt->bindValue($identifier, $this->id_service, PDO::PARAM_INT);
                        break;
                    case '`annee`':						
                        $stmt->bindValue($identifier, $this->annee, PDO::PARAM_STR);
                        break;
                    case '`trimestre`':						
                        $stmt->bindValue($identifier, $this->trimestre, PDO::PARAM_STR);
                        break;
                    case '`siren`':						
                        $stmt->bindValue($identifier, $this->siren, PDO::PARAM_STR);
                        break;
                    case '`nic`':						
                        $stmt->bindValue($identifier, $this->nic, PDO::PARAM_STR);
                        break;
                    case '`identifiant_service`':						
                        $stmt->bindValue($identifier, $this->identifiant_service, PDO::PARAM_STR);
                        break;
                    case '`mail`':						
                        $stmt->bindValue($identifier, $this->mail, PDO::PARAM_STR);
                        break;
                    case '`type_pouvoir_adjudicateur`':						
                        $stmt->bindValue($identifier, $this->type_pouvoir_adjudicateur, PDO::PARAM_INT);
                        break;
                    case '`departement`':						
                        $stmt->bindValue($identifier, $this->departement, PDO::PARAM_INT);
                        break;
                    case '`date_envoi`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`date_accuse`':						
                        $stmt->bindValue($identifier, $this->date_accuse, PDO::PARAM_STR);
                        break;
                    case '`etat`':						
                        $stmt->bindValue($identifier, $this->etat, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`xml`':						
                        $stmt->bindValue($identifier, $this->xml, PDO::PARAM_STR);
                        break;
                    case '`name_xml_genere`':						
                        $stmt->bindValue($identifier, $this->name_xml_genere, PDO::PARAM_STR);
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
        $this->setIdMesure($pk);

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


            if (($retval = CommonMesureAvancementPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonMesureAvancementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdMesure();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdService();
                break;
            case 3:
                return $this->getAnnee();
                break;
            case 4:
                return $this->getTrimestre();
                break;
            case 5:
                return $this->getSiren();
                break;
            case 6:
                return $this->getNic();
                break;
            case 7:
                return $this->getIdentifiantService();
                break;
            case 8:
                return $this->getMail();
                break;
            case 9:
                return $this->getTypePouvoirAdjudicateur();
                break;
            case 10:
                return $this->getDepartement();
                break;
            case 11:
                return $this->getDateEnvoi();
                break;
            case 12:
                return $this->getDateAccuse();
                break;
            case 13:
                return $this->getEtat();
                break;
            case 14:
                return $this->getDateCreation();
                break;
            case 15:
                return $this->getXml();
                break;
            case 16:
                return $this->getNameXmlGenere();
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
        if (isset($alreadyDumpedObjects['CommonMesureAvancement'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonMesureAvancement'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonMesureAvancementPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdMesure(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdService(),
            $keys[3] => $this->getAnnee(),
            $keys[4] => $this->getTrimestre(),
            $keys[5] => $this->getSiren(),
            $keys[6] => $this->getNic(),
            $keys[7] => $this->getIdentifiantService(),
            $keys[8] => $this->getMail(),
            $keys[9] => $this->getTypePouvoirAdjudicateur(),
            $keys[10] => $this->getDepartement(),
            $keys[11] => $this->getDateEnvoi(),
            $keys[12] => $this->getDateAccuse(),
            $keys[13] => $this->getEtat(),
            $keys[14] => $this->getDateCreation(),
            $keys[15] => $this->getXml(),
            $keys[16] => $this->getNameXmlGenere(),
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
        $pos = CommonMesureAvancementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdMesure($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdService($value);
                break;
            case 3:
                $this->setAnnee($value);
                break;
            case 4:
                $this->setTrimestre($value);
                break;
            case 5:
                $this->setSiren($value);
                break;
            case 6:
                $this->setNic($value);
                break;
            case 7:
                $this->setIdentifiantService($value);
                break;
            case 8:
                $this->setMail($value);
                break;
            case 9:
                $this->setTypePouvoirAdjudicateur($value);
                break;
            case 10:
                $this->setDepartement($value);
                break;
            case 11:
                $this->setDateEnvoi($value);
                break;
            case 12:
                $this->setDateAccuse($value);
                break;
            case 13:
                $this->setEtat($value);
                break;
            case 14:
                $this->setDateCreation($value);
                break;
            case 15:
                $this->setXml($value);
                break;
            case 16:
                $this->setNameXmlGenere($value);
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
        $keys = CommonMesureAvancementPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdMesure($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdService($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAnnee($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTrimestre($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSiren($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNic($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdentifiantService($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMail($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTypePouvoirAdjudicateur($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDepartement($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateEnvoi($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateAccuse($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEtat($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateCreation($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setXml($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setNameXmlGenere($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonMesureAvancementPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonMesureAvancementPeer::ID_MESURE)) $criteria->add(CommonMesureAvancementPeer::ID_MESURE, $this->id_mesure);
        if ($this->isColumnModified(CommonMesureAvancementPeer::ORGANISME)) $criteria->add(CommonMesureAvancementPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonMesureAvancementPeer::ID_SERVICE)) $criteria->add(CommonMesureAvancementPeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(CommonMesureAvancementPeer::ANNEE)) $criteria->add(CommonMesureAvancementPeer::ANNEE, $this->annee);
        if ($this->isColumnModified(CommonMesureAvancementPeer::TRIMESTRE)) $criteria->add(CommonMesureAvancementPeer::TRIMESTRE, $this->trimestre);
        if ($this->isColumnModified(CommonMesureAvancementPeer::SIREN)) $criteria->add(CommonMesureAvancementPeer::SIREN, $this->siren);
        if ($this->isColumnModified(CommonMesureAvancementPeer::NIC)) $criteria->add(CommonMesureAvancementPeer::NIC, $this->nic);
        if ($this->isColumnModified(CommonMesureAvancementPeer::IDENTIFIANT_SERVICE)) $criteria->add(CommonMesureAvancementPeer::IDENTIFIANT_SERVICE, $this->identifiant_service);
        if ($this->isColumnModified(CommonMesureAvancementPeer::MAIL)) $criteria->add(CommonMesureAvancementPeer::MAIL, $this->mail);
        if ($this->isColumnModified(CommonMesureAvancementPeer::TYPE_POUVOIR_ADJUDICATEUR)) $criteria->add(CommonMesureAvancementPeer::TYPE_POUVOIR_ADJUDICATEUR, $this->type_pouvoir_adjudicateur);
        if ($this->isColumnModified(CommonMesureAvancementPeer::DEPARTEMENT)) $criteria->add(CommonMesureAvancementPeer::DEPARTEMENT, $this->departement);
        if ($this->isColumnModified(CommonMesureAvancementPeer::DATE_ENVOI)) $criteria->add(CommonMesureAvancementPeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(CommonMesureAvancementPeer::DATE_ACCUSE)) $criteria->add(CommonMesureAvancementPeer::DATE_ACCUSE, $this->date_accuse);
        if ($this->isColumnModified(CommonMesureAvancementPeer::ETAT)) $criteria->add(CommonMesureAvancementPeer::ETAT, $this->etat);
        if ($this->isColumnModified(CommonMesureAvancementPeer::DATE_CREATION)) $criteria->add(CommonMesureAvancementPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonMesureAvancementPeer::XML)) $criteria->add(CommonMesureAvancementPeer::XML, $this->xml);
        if ($this->isColumnModified(CommonMesureAvancementPeer::NAME_XML_GENERE)) $criteria->add(CommonMesureAvancementPeer::NAME_XML_GENERE, $this->name_xml_genere);

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
        $criteria = new Criteria(CommonMesureAvancementPeer::DATABASE_NAME);
        $criteria->add(CommonMesureAvancementPeer::ID_MESURE, $this->id_mesure);
        $criteria->add(CommonMesureAvancementPeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdMesure();
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
        $this->setIdMesure($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdMesure()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonMesureAvancement (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdService($this->getIdService());
        $copyObj->setAnnee($this->getAnnee());
        $copyObj->setTrimestre($this->getTrimestre());
        $copyObj->setSiren($this->getSiren());
        $copyObj->setNic($this->getNic());
        $copyObj->setIdentifiantService($this->getIdentifiantService());
        $copyObj->setMail($this->getMail());
        $copyObj->setTypePouvoirAdjudicateur($this->getTypePouvoirAdjudicateur());
        $copyObj->setDepartement($this->getDepartement());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setDateAccuse($this->getDateAccuse());
        $copyObj->setEtat($this->getEtat());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setXml($this->getXml());
        $copyObj->setNameXmlGenere($this->getNameXmlGenere());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdMesure(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonMesureAvancement Clone of current object.
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
     * @return CommonMesureAvancementPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonMesureAvancementPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_mesure = null;
        $this->organisme = null;
        $this->id_service = null;
        $this->annee = null;
        $this->trimestre = null;
        $this->siren = null;
        $this->nic = null;
        $this->identifiant_service = null;
        $this->mail = null;
        $this->type_pouvoir_adjudicateur = null;
        $this->departement = null;
        $this->date_envoi = null;
        $this->date_accuse = null;
        $this->etat = null;
        $this->date_creation = null;
        $this->xml = null;
        $this->name_xml_genere = null;
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
        return (string) $this->exportTo(CommonMesureAvancementPeer::DEFAULT_STRING_FORMAT);
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
