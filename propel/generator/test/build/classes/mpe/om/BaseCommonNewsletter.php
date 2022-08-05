<?php


/**
 * Base class that represents a row from the 'Newsletter' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonNewsletter extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonNewsletterPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonNewsletterPeer
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
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the objet field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $objet;

    /**
     * The value for the corps field.
     * @var        string
     */
    protected $corps;

    /**
     * The value for the id_service_redacteur field.
     * @var        int
     */
    protected $id_service_redacteur;

    /**
     * The value for the nom_redacteur field.
     * @var        string
     */
    protected $nom_redacteur;

    /**
     * The value for the prenom_redacteur field.
     * @var        string
     */
    protected $prenom_redacteur;

    /**
     * The value for the envoye_par_nom field.
     * @var        string
     */
    protected $envoye_par_nom;

    /**
     * The value for the envoye_par_prenom field.
     * @var        string
     */
    protected $envoye_par_prenom;

    /**
     * The value for the envoye_par_email field.
     * @var        string
     */
    protected $envoye_par_email;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_derniere_modification field.
     * @var        string
     */
    protected $date_derniere_modification;

    /**
     * The value for the date_envoi field.
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the id_service_destinataire field.
     * @var        string
     */
    protected $id_service_destinataire;

    /**
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the destinataires field.
     * @var        string
     */
    protected $destinataires;

    /**
     * The value for the inclure_services_descendants field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $inclure_services_descendants;

    /**
     * The value for the type_destinataire field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $type_destinataire;

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
        $this->objet = '';
        $this->inclure_services_descendants = '0';
        $this->type_destinataire = 1;
    }

    /**
     * Initializes internal state of BaseCommonNewsletter object.
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
     * Get the [objet] column value.
     * 
     * @return string
     */
    public function getObjet()
    {

        return $this->objet;
    }

    /**
     * Get the [corps] column value.
     * 
     * @return string
     */
    public function getCorps()
    {

        return $this->corps;
    }

    /**
     * Get the [id_service_redacteur] column value.
     * 
     * @return int
     */
    public function getIdServiceRedacteur()
    {

        return $this->id_service_redacteur;
    }

    /**
     * Get the [nom_redacteur] column value.
     * 
     * @return string
     */
    public function getNomRedacteur()
    {

        return $this->nom_redacteur;
    }

    /**
     * Get the [prenom_redacteur] column value.
     * 
     * @return string
     */
    public function getPrenomRedacteur()
    {

        return $this->prenom_redacteur;
    }

    /**
     * Get the [envoye_par_nom] column value.
     * 
     * @return string
     */
    public function getEnvoyeParNom()
    {

        return $this->envoye_par_nom;
    }

    /**
     * Get the [envoye_par_prenom] column value.
     * 
     * @return string
     */
    public function getEnvoyeParPrenom()
    {

        return $this->envoye_par_prenom;
    }

    /**
     * Get the [envoye_par_email] column value.
     * 
     * @return string
     */
    public function getEnvoyeParEmail()
    {

        return $this->envoye_par_email;
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
     * Get the [date_derniere_modification] column value.
     * 
     * @return string
     */
    public function getDateDerniereModification()
    {

        return $this->date_derniere_modification;
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
     * Get the [id_service_destinataire] column value.
     * 
     * @return string
     */
    public function getIdServiceDestinataire()
    {

        return $this->id_service_destinataire;
    }

    /**
     * Get the [statut] column value.
     * 
     * @return int
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Get the [destinataires] column value.
     * 
     * @return string
     */
    public function getDestinataires()
    {

        return $this->destinataires;
    }

    /**
     * Get the [inclure_services_descendants] column value.
     * 
     * @return string
     */
    public function getInclureServicesDescendants()
    {

        return $this->inclure_services_descendants;
    }

    /**
     * Get the [type_destinataire] column value.
     * 
     * @return int
     */
    public function getTypeDestinataire()
    {

        return $this->type_destinataire;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [objet] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet !== $v) {
            $this->objet = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::OBJET;
        }


        return $this;
    } // setObjet()

    /**
     * Set the value of [corps] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setCorps($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->corps !== $v) {
            $this->corps = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::CORPS;
        }


        return $this;
    } // setCorps()

    /**
     * Set the value of [id_service_redacteur] column.
     * 
     * @param int $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setIdServiceRedacteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service_redacteur !== $v) {
            $this->id_service_redacteur = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::ID_SERVICE_REDACTEUR;
        }


        return $this;
    } // setIdServiceRedacteur()

    /**
     * Set the value of [nom_redacteur] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setNomRedacteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_redacteur !== $v) {
            $this->nom_redacteur = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::NOM_REDACTEUR;
        }


        return $this;
    } // setNomRedacteur()

    /**
     * Set the value of [prenom_redacteur] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setPrenomRedacteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_redacteur !== $v) {
            $this->prenom_redacteur = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::PRENOM_REDACTEUR;
        }


        return $this;
    } // setPrenomRedacteur()

    /**
     * Set the value of [envoye_par_nom] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setEnvoyeParNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoye_par_nom !== $v) {
            $this->envoye_par_nom = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::ENVOYE_PAR_NOM;
        }


        return $this;
    } // setEnvoyeParNom()

    /**
     * Set the value of [envoye_par_prenom] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setEnvoyeParPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoye_par_prenom !== $v) {
            $this->envoye_par_prenom = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::ENVOYE_PAR_PRENOM;
        }


        return $this;
    } // setEnvoyeParPrenom()

    /**
     * Set the value of [envoye_par_email] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setEnvoyeParEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoye_par_email !== $v) {
            $this->envoye_par_email = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::ENVOYE_PAR_EMAIL;
        }


        return $this;
    } // setEnvoyeParEmail()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_derniere_modification] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setDateDerniereModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_derniere_modification !== $v) {
            $this->date_derniere_modification = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::DATE_DERNIERE_MODIFICATION;
        }


        return $this;
    } // setDateDerniereModification()

    /**
     * Set the value of [date_envoi] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi !== $v) {
            $this->date_envoi = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::DATE_ENVOI;
        }


        return $this;
    } // setDateEnvoi()

    /**
     * Set the value of [id_service_destinataire] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setIdServiceDestinataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_service_destinataire !== $v) {
            $this->id_service_destinataire = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::ID_SERVICE_DESTINATAIRE;
        }


        return $this;
    } // setIdServiceDestinataire()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [destinataires] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setDestinataires($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->destinataires !== $v) {
            $this->destinataires = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::DESTINATAIRES;
        }


        return $this;
    } // setDestinataires()

    /**
     * Set the value of [inclure_services_descendants] column.
     * 
     * @param string $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setInclureServicesDescendants($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inclure_services_descendants !== $v) {
            $this->inclure_services_descendants = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS;
        }


        return $this;
    } // setInclureServicesDescendants()

    /**
     * Set the value of [type_destinataire] column.
     * 
     * @param int $v new value
     * @return CommonNewsletter The current object (for fluent API support)
     */
    public function setTypeDestinataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_destinataire !== $v) {
            $this->type_destinataire = $v;
            $this->modifiedColumns[] = CommonNewsletterPeer::TYPE_DESTINATAIRE;
        }


        return $this;
    } // setTypeDestinataire()

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
            if ($this->objet !== '') {
                return false;
            }

            if ($this->inclure_services_descendants !== '0') {
                return false;
            }

            if ($this->type_destinataire !== 1) {
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
            $this->objet = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->corps = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_service_redacteur = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->nom_redacteur = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->prenom_redacteur = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->envoye_par_nom = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->envoye_par_prenom = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->envoye_par_email = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->date_creation = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_derniere_modification = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_envoi = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->id_service_destinataire = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->statut = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->destinataires = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->inclure_services_descendants = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->type_destinataire = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = CommonNewsletterPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonNewsletter object", $e);
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
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonNewsletterPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonNewsletterQuery::create()
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
            $con = Propel::getConnection(CommonNewsletterPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonNewsletterPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonNewsletterPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonNewsletterPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonNewsletterPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`objet`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::CORPS)) {
            $modifiedColumns[':p' . $index++]  = '`corps`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::ID_SERVICE_REDACTEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_service_redacteur`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::NOM_REDACTEUR)) {
            $modifiedColumns[':p' . $index++]  = '`nom_redacteur`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::PRENOM_REDACTEUR)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_redacteur`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::ENVOYE_PAR_NOM)) {
            $modifiedColumns[':p' . $index++]  = '`envoye_par_nom`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::ENVOYE_PAR_PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`envoye_par_prenom`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::ENVOYE_PAR_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`envoye_par_email`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::DATE_DERNIERE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_derniere_modification`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::ID_SERVICE_DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service_destinataire`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::DESTINATAIRES)) {
            $modifiedColumns[':p' . $index++]  = '`destinataires`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS)) {
            $modifiedColumns[':p' . $index++]  = '`inclure_services_descendants`';
        }
        if ($this->isColumnModified(CommonNewsletterPeer::TYPE_DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`type_destinataire`';
        }

        $sql = sprintf(
            'INSERT INTO `Newsletter` (%s) VALUES (%s)',
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
                    case '`objet`':						
                        $stmt->bindValue($identifier, $this->objet, PDO::PARAM_STR);
                        break;
                    case '`corps`':						
                        $stmt->bindValue($identifier, $this->corps, PDO::PARAM_STR);
                        break;
                    case '`id_service_redacteur`':						
                        $stmt->bindValue($identifier, $this->id_service_redacteur, PDO::PARAM_INT);
                        break;
                    case '`nom_redacteur`':						
                        $stmt->bindValue($identifier, $this->nom_redacteur, PDO::PARAM_STR);
                        break;
                    case '`prenom_redacteur`':						
                        $stmt->bindValue($identifier, $this->prenom_redacteur, PDO::PARAM_STR);
                        break;
                    case '`envoye_par_nom`':						
                        $stmt->bindValue($identifier, $this->envoye_par_nom, PDO::PARAM_STR);
                        break;
                    case '`envoye_par_prenom`':						
                        $stmt->bindValue($identifier, $this->envoye_par_prenom, PDO::PARAM_STR);
                        break;
                    case '`envoye_par_email`':						
                        $stmt->bindValue($identifier, $this->envoye_par_email, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_derniere_modification`':						
                        $stmt->bindValue($identifier, $this->date_derniere_modification, PDO::PARAM_STR);
                        break;
                    case '`date_envoi`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`id_service_destinataire`':						
                        $stmt->bindValue($identifier, $this->id_service_destinataire, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`destinataires`':						
                        $stmt->bindValue($identifier, $this->destinataires, PDO::PARAM_STR);
                        break;
                    case '`inclure_services_descendants`':						
                        $stmt->bindValue($identifier, $this->inclure_services_descendants, PDO::PARAM_STR);
                        break;
                    case '`type_destinataire`':						
                        $stmt->bindValue($identifier, $this->type_destinataire, PDO::PARAM_INT);
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


            if (($retval = CommonNewsletterPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonNewsletterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getObjet();
                break;
            case 3:
                return $this->getCorps();
                break;
            case 4:
                return $this->getIdServiceRedacteur();
                break;
            case 5:
                return $this->getNomRedacteur();
                break;
            case 6:
                return $this->getPrenomRedacteur();
                break;
            case 7:
                return $this->getEnvoyeParNom();
                break;
            case 8:
                return $this->getEnvoyeParPrenom();
                break;
            case 9:
                return $this->getEnvoyeParEmail();
                break;
            case 10:
                return $this->getDateCreation();
                break;
            case 11:
                return $this->getDateDerniereModification();
                break;
            case 12:
                return $this->getDateEnvoi();
                break;
            case 13:
                return $this->getIdServiceDestinataire();
                break;
            case 14:
                return $this->getStatut();
                break;
            case 15:
                return $this->getDestinataires();
                break;
            case 16:
                return $this->getInclureServicesDescendants();
                break;
            case 17:
                return $this->getTypeDestinataire();
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
        if (isset($alreadyDumpedObjects['CommonNewsletter'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonNewsletter'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonNewsletterPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getObjet(),
            $keys[3] => $this->getCorps(),
            $keys[4] => $this->getIdServiceRedacteur(),
            $keys[5] => $this->getNomRedacteur(),
            $keys[6] => $this->getPrenomRedacteur(),
            $keys[7] => $this->getEnvoyeParNom(),
            $keys[8] => $this->getEnvoyeParPrenom(),
            $keys[9] => $this->getEnvoyeParEmail(),
            $keys[10] => $this->getDateCreation(),
            $keys[11] => $this->getDateDerniereModification(),
            $keys[12] => $this->getDateEnvoi(),
            $keys[13] => $this->getIdServiceDestinataire(),
            $keys[14] => $this->getStatut(),
            $keys[15] => $this->getDestinataires(),
            $keys[16] => $this->getInclureServicesDescendants(),
            $keys[17] => $this->getTypeDestinataire(),
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
        $pos = CommonNewsletterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setObjet($value);
                break;
            case 3:
                $this->setCorps($value);
                break;
            case 4:
                $this->setIdServiceRedacteur($value);
                break;
            case 5:
                $this->setNomRedacteur($value);
                break;
            case 6:
                $this->setPrenomRedacteur($value);
                break;
            case 7:
                $this->setEnvoyeParNom($value);
                break;
            case 8:
                $this->setEnvoyeParPrenom($value);
                break;
            case 9:
                $this->setEnvoyeParEmail($value);
                break;
            case 10:
                $this->setDateCreation($value);
                break;
            case 11:
                $this->setDateDerniereModification($value);
                break;
            case 12:
                $this->setDateEnvoi($value);
                break;
            case 13:
                $this->setIdServiceDestinataire($value);
                break;
            case 14:
                $this->setStatut($value);
                break;
            case 15:
                $this->setDestinataires($value);
                break;
            case 16:
                $this->setInclureServicesDescendants($value);
                break;
            case 17:
                $this->setTypeDestinataire($value);
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
        $keys = CommonNewsletterPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setObjet($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCorps($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdServiceRedacteur($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNomRedacteur($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrenomRedacteur($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEnvoyeParNom($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEnvoyeParPrenom($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEnvoyeParEmail($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateCreation($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateDerniereModification($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateEnvoi($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdServiceDestinataire($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setStatut($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDestinataires($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setInclureServicesDescendants($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTypeDestinataire($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonNewsletterPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonNewsletterPeer::ID)) $criteria->add(CommonNewsletterPeer::ID, $this->id);
        if ($this->isColumnModified(CommonNewsletterPeer::ORGANISME)) $criteria->add(CommonNewsletterPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonNewsletterPeer::OBJET)) $criteria->add(CommonNewsletterPeer::OBJET, $this->objet);
        if ($this->isColumnModified(CommonNewsletterPeer::CORPS)) $criteria->add(CommonNewsletterPeer::CORPS, $this->corps);
        if ($this->isColumnModified(CommonNewsletterPeer::ID_SERVICE_REDACTEUR)) $criteria->add(CommonNewsletterPeer::ID_SERVICE_REDACTEUR, $this->id_service_redacteur);
        if ($this->isColumnModified(CommonNewsletterPeer::NOM_REDACTEUR)) $criteria->add(CommonNewsletterPeer::NOM_REDACTEUR, $this->nom_redacteur);
        if ($this->isColumnModified(CommonNewsletterPeer::PRENOM_REDACTEUR)) $criteria->add(CommonNewsletterPeer::PRENOM_REDACTEUR, $this->prenom_redacteur);
        if ($this->isColumnModified(CommonNewsletterPeer::ENVOYE_PAR_NOM)) $criteria->add(CommonNewsletterPeer::ENVOYE_PAR_NOM, $this->envoye_par_nom);
        if ($this->isColumnModified(CommonNewsletterPeer::ENVOYE_PAR_PRENOM)) $criteria->add(CommonNewsletterPeer::ENVOYE_PAR_PRENOM, $this->envoye_par_prenom);
        if ($this->isColumnModified(CommonNewsletterPeer::ENVOYE_PAR_EMAIL)) $criteria->add(CommonNewsletterPeer::ENVOYE_PAR_EMAIL, $this->envoye_par_email);
        if ($this->isColumnModified(CommonNewsletterPeer::DATE_CREATION)) $criteria->add(CommonNewsletterPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonNewsletterPeer::DATE_DERNIERE_MODIFICATION)) $criteria->add(CommonNewsletterPeer::DATE_DERNIERE_MODIFICATION, $this->date_derniere_modification);
        if ($this->isColumnModified(CommonNewsletterPeer::DATE_ENVOI)) $criteria->add(CommonNewsletterPeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(CommonNewsletterPeer::ID_SERVICE_DESTINATAIRE)) $criteria->add(CommonNewsletterPeer::ID_SERVICE_DESTINATAIRE, $this->id_service_destinataire);
        if ($this->isColumnModified(CommonNewsletterPeer::STATUT)) $criteria->add(CommonNewsletterPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonNewsletterPeer::DESTINATAIRES)) $criteria->add(CommonNewsletterPeer::DESTINATAIRES, $this->destinataires);
        if ($this->isColumnModified(CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS)) $criteria->add(CommonNewsletterPeer::INCLURE_SERVICES_DESCENDANTS, $this->inclure_services_descendants);
        if ($this->isColumnModified(CommonNewsletterPeer::TYPE_DESTINATAIRE)) $criteria->add(CommonNewsletterPeer::TYPE_DESTINATAIRE, $this->type_destinataire);

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
        $criteria = new Criteria(CommonNewsletterPeer::DATABASE_NAME);
        $criteria->add(CommonNewsletterPeer::ID, $this->id);
        $criteria->add(CommonNewsletterPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonNewsletter (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setObjet($this->getObjet());
        $copyObj->setCorps($this->getCorps());
        $copyObj->setIdServiceRedacteur($this->getIdServiceRedacteur());
        $copyObj->setNomRedacteur($this->getNomRedacteur());
        $copyObj->setPrenomRedacteur($this->getPrenomRedacteur());
        $copyObj->setEnvoyeParNom($this->getEnvoyeParNom());
        $copyObj->setEnvoyeParPrenom($this->getEnvoyeParPrenom());
        $copyObj->setEnvoyeParEmail($this->getEnvoyeParEmail());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateDerniereModification($this->getDateDerniereModification());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setIdServiceDestinataire($this->getIdServiceDestinataire());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDestinataires($this->getDestinataires());
        $copyObj->setInclureServicesDescendants($this->getInclureServicesDescendants());
        $copyObj->setTypeDestinataire($this->getTypeDestinataire());
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
     * @return CommonNewsletter Clone of current object.
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
     * @return CommonNewsletterPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonNewsletterPeer();
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
        $this->objet = null;
        $this->corps = null;
        $this->id_service_redacteur = null;
        $this->nom_redacteur = null;
        $this->prenom_redacteur = null;
        $this->envoye_par_nom = null;
        $this->envoye_par_prenom = null;
        $this->envoye_par_email = null;
        $this->date_creation = null;
        $this->date_derniere_modification = null;
        $this->date_envoi = null;
        $this->id_service_destinataire = null;
        $this->statut = null;
        $this->destinataires = null;
        $this->inclure_services_descendants = null;
        $this->type_destinataire = null;
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
        return (string) $this->exportTo(CommonNewsletterPeer::DEFAULT_STRING_FORMAT);
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
