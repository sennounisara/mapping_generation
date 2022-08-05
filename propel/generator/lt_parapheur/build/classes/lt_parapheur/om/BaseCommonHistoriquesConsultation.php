<?php


/**
 * Base class that represents a row from the 'historiques_consultation' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonHistoriquesConsultation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonHistoriquesConsultationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonHistoriquesConsultationPeer
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
     * The value for the ref_consultation field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ref_consultation;

    /**
     * The value for the statut field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $statut;

    /**
     * The value for the id_agent field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the nom_agent field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_agent;

    /**
     * The value for the prenom_agent field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prenom_agent;

    /**
     * The value for the nom_element field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_element;

    /**
     * The value for the valeur field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $valeur;

    /**
     * The value for the valeur_detail_1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $valeur_detail_1;

    /**
     * The value for the valeur_detail_2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $valeur_detail_2;

    /**
     * The value for the numero_lot field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $numero_lot;

    /**
     * The value for the horodatage field.
     * @var        resource
     */
    protected $horodatage;

    /**
     * The value for the untrusteddate field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $untrusteddate;

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
        $this->ref_consultation = 0;
        $this->statut = '';
        $this->id_agent = 0;
        $this->nom_agent = '';
        $this->prenom_agent = '';
        $this->nom_element = '';
        $this->valeur = '';
        $this->valeur_detail_1 = '';
        $this->valeur_detail_2 = '';
        $this->numero_lot = '';
        $this->untrusteddate = '0000-00-00 00:00:00';
    }

    /**
     * Initializes internal state of BaseCommonHistoriquesConsultation object.
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
     * Get the [ref_consultation] column value.
     * 
     * @return int
     */
    public function getRefConsultation()
    {

        return $this->ref_consultation;
    }

    /**
     * Get the [statut] column value.
     * 
     * @return string
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
    }

    /**
     * Get the [nom_agent] column value.
     * 
     * @return string
     */
    public function getNomAgent()
    {

        return $this->nom_agent;
    }

    /**
     * Get the [prenom_agent] column value.
     * 
     * @return string
     */
    public function getPrenomAgent()
    {

        return $this->prenom_agent;
    }

    /**
     * Get the [nom_element] column value.
     * 
     * @return string
     */
    public function getNomElement()
    {

        return $this->nom_element;
    }

    /**
     * Get the [valeur] column value.
     * 
     * @return string
     */
    public function getValeur()
    {

        return $this->valeur;
    }

    /**
     * Get the [valeur_detail_1] column value.
     * 
     * @return string
     */
    public function getValeurDetail1()
    {

        return $this->valeur_detail_1;
    }

    /**
     * Get the [valeur_detail_2] column value.
     * 
     * @return string
     */
    public function getValeurDetail2()
    {

        return $this->valeur_detail_2;
    }

    /**
     * Get the [numero_lot] column value.
     * 
     * @return string
     */
    public function getNumeroLot()
    {

        return $this->numero_lot;
    }

    /**
     * Get the [horodatage] column value.
     * 
     * @return resource
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [ref_consultation] column.
     * 
     * @param int $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setRefConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ref_consultation !== $v) {
            $this->ref_consultation = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::REF_CONSULTATION;
        }


        return $this;
    } // setRefConsultation()

    /**
     * Set the value of [statut] column.
     * 
     * @param string $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [nom_agent] column.
     * 
     * @param string $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setNomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent !== $v) {
            $this->nom_agent = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::NOM_AGENT;
        }


        return $this;
    } // setNomAgent()

    /**
     * Set the value of [prenom_agent] column.
     * 
     * @param string $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setPrenomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent !== $v) {
            $this->prenom_agent = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::PRENOM_AGENT;
        }


        return $this;
    } // setPrenomAgent()

    /**
     * Set the value of [nom_element] column.
     * 
     * @param string $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setNomElement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_element !== $v) {
            $this->nom_element = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::NOM_ELEMENT;
        }


        return $this;
    } // setNomElement()

    /**
     * Set the value of [valeur] column.
     * 
     * @param string $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setValeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur !== $v) {
            $this->valeur = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::VALEUR;
        }


        return $this;
    } // setValeur()

    /**
     * Set the value of [valeur_detail_1] column.
     * 
     * @param string $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setValeurDetail1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_detail_1 !== $v) {
            $this->valeur_detail_1 = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::VALEUR_DETAIL_1;
        }


        return $this;
    } // setValeurDetail1()

    /**
     * Set the value of [valeur_detail_2] column.
     * 
     * @param string $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setValeurDetail2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur_detail_2 !== $v) {
            $this->valeur_detail_2 = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::VALEUR_DETAIL_2;
        }


        return $this;
    } // setValeurDetail2()

    /**
     * Set the value of [numero_lot] column.
     * 
     * @param string $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setNumeroLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_lot !== $v) {
            $this->numero_lot = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::NUMERO_LOT;
        }


        return $this;
    } // setNumeroLot()

    /**
     * Set the value of [horodatage] column.
     * 
     * @param resource $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setHorodatage($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->horodatage = fopen('php://memory', 'r+');
            fwrite($this->horodatage, $v);
            rewind($this->horodatage);
        } else { // it's already a stream
            $this->horodatage = $v;
        }
        $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::HORODATAGE;


        return $this;
    } // setHorodatage()

    /**
     * Set the value of [untrusteddate] column.
     * 
     * @param string $v new value
     * @return CommonHistoriquesConsultation The current object (for fluent API support)
     */
    public function setUntrusteddate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->untrusteddate !== $v) {
            $this->untrusteddate = $v;
            $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::UNTRUSTEDDATE;
        }


        return $this;
    } // setUntrusteddate()

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

            if ($this->ref_consultation !== 0) {
                return false;
            }

            if ($this->statut !== '') {
                return false;
            }

            if ($this->id_agent !== 0) {
                return false;
            }

            if ($this->nom_agent !== '') {
                return false;
            }

            if ($this->prenom_agent !== '') {
                return false;
            }

            if ($this->nom_element !== '') {
                return false;
            }

            if ($this->valeur !== '') {
                return false;
            }

            if ($this->valeur_detail_1 !== '') {
                return false;
            }

            if ($this->valeur_detail_2 !== '') {
                return false;
            }

            if ($this->numero_lot !== '') {
                return false;
            }

            if ($this->untrusteddate !== '0000-00-00 00:00:00') {
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
            $this->ref_consultation = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->statut = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_agent = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->nom_agent = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->prenom_agent = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->nom_element = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->valeur = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->valeur_detail_1 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->valeur_detail_2 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->numero_lot = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            if ($row[$startcol + 12] !== null) {
                $this->horodatage = fopen('php://memory', 'r+');
                fwrite($this->horodatage, $row[$startcol + 12]);
                rewind($this->horodatage);
            } else {
                $this->horodatage = null;
            }
            $this->untrusteddate = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = CommonHistoriquesConsultationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonHistoriquesConsultation object", $e);
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
            $con = Propel::getConnection(CommonHistoriquesConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonHistoriquesConsultationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonHistoriquesConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonHistoriquesConsultationQuery::create()
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
            $con = Propel::getConnection(CommonHistoriquesConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonHistoriquesConsultationPeer::addInstanceToPool($this);
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
                // Rewind the horodatage LOB column, since PDO does not rewind after inserting value.
                if ($this->horodatage !== null && is_resource($this->horodatage)) {
                    rewind($this->horodatage);
                }

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

        $this->modifiedColumns[] = CommonHistoriquesConsultationPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonHistoriquesConsultationPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::REF_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`ref_consultation`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::NOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::PRENOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_agent`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::NOM_ELEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_element`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::VALEUR)) {
            $modifiedColumns[':p' . $index++]  = '`valeur`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::VALEUR_DETAIL_1)) {
            $modifiedColumns[':p' . $index++]  = '`valeur_detail_1`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::VALEUR_DETAIL_2)) {
            $modifiedColumns[':p' . $index++]  = '`valeur_detail_2`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::NUMERO_LOT)) {
            $modifiedColumns[':p' . $index++]  = '`numero_lot`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::HORODATAGE)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage`';
        }
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::UNTRUSTEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`untrusteddate`';
        }

        $sql = sprintf(
            'INSERT INTO `historiques_consultation` (%s) VALUES (%s)',
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
                    case '`ref_consultation`':						
                        $stmt->bindValue($identifier, $this->ref_consultation, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_STR);
                        break;
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`nom_agent`':						
                        $stmt->bindValue($identifier, $this->nom_agent, PDO::PARAM_STR);
                        break;
                    case '`prenom_agent`':						
                        $stmt->bindValue($identifier, $this->prenom_agent, PDO::PARAM_STR);
                        break;
                    case '`nom_element`':						
                        $stmt->bindValue($identifier, $this->nom_element, PDO::PARAM_STR);
                        break;
                    case '`valeur`':						
                        $stmt->bindValue($identifier, $this->valeur, PDO::PARAM_STR);
                        break;
                    case '`valeur_detail_1`':						
                        $stmt->bindValue($identifier, $this->valeur_detail_1, PDO::PARAM_STR);
                        break;
                    case '`valeur_detail_2`':						
                        $stmt->bindValue($identifier, $this->valeur_detail_2, PDO::PARAM_STR);
                        break;
                    case '`numero_lot`':						
                        $stmt->bindValue($identifier, $this->numero_lot, PDO::PARAM_STR);
                        break;
                    case '`horodatage`':						
                        if (is_resource($this->horodatage)) {
                            rewind($this->horodatage);
                        }
                        $stmt->bindValue($identifier, $this->horodatage, PDO::PARAM_LOB);
                        break;
                    case '`untrusteddate`':						
                        $stmt->bindValue($identifier, $this->untrusteddate, PDO::PARAM_STR);
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


            if (($retval = CommonHistoriquesConsultationPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonHistoriquesConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRefConsultation();
                break;
            case 3:
                return $this->getStatut();
                break;
            case 4:
                return $this->getIdAgent();
                break;
            case 5:
                return $this->getNomAgent();
                break;
            case 6:
                return $this->getPrenomAgent();
                break;
            case 7:
                return $this->getNomElement();
                break;
            case 8:
                return $this->getValeur();
                break;
            case 9:
                return $this->getValeurDetail1();
                break;
            case 10:
                return $this->getValeurDetail2();
                break;
            case 11:
                return $this->getNumeroLot();
                break;
            case 12:
                return $this->getHorodatage();
                break;
            case 13:
                return $this->getUntrusteddate();
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
        if (isset($alreadyDumpedObjects['CommonHistoriquesConsultation'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonHistoriquesConsultation'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonHistoriquesConsultationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getRefConsultation(),
            $keys[3] => $this->getStatut(),
            $keys[4] => $this->getIdAgent(),
            $keys[5] => $this->getNomAgent(),
            $keys[6] => $this->getPrenomAgent(),
            $keys[7] => $this->getNomElement(),
            $keys[8] => $this->getValeur(),
            $keys[9] => $this->getValeurDetail1(),
            $keys[10] => $this->getValeurDetail2(),
            $keys[11] => $this->getNumeroLot(),
            $keys[12] => $this->getHorodatage(),
            $keys[13] => $this->getUntrusteddate(),
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
        $pos = CommonHistoriquesConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRefConsultation($value);
                break;
            case 3:
                $this->setStatut($value);
                break;
            case 4:
                $this->setIdAgent($value);
                break;
            case 5:
                $this->setNomAgent($value);
                break;
            case 6:
                $this->setPrenomAgent($value);
                break;
            case 7:
                $this->setNomElement($value);
                break;
            case 8:
                $this->setValeur($value);
                break;
            case 9:
                $this->setValeurDetail1($value);
                break;
            case 10:
                $this->setValeurDetail2($value);
                break;
            case 11:
                $this->setNumeroLot($value);
                break;
            case 12:
                $this->setHorodatage($value);
                break;
            case 13:
                $this->setUntrusteddate($value);
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
        $keys = CommonHistoriquesConsultationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRefConsultation($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setStatut($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdAgent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNomAgent($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrenomAgent($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNomElement($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setValeur($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setValeurDetail1($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setValeurDetail2($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNumeroLot($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setHorodatage($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setUntrusteddate($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonHistoriquesConsultationPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::ID)) $criteria->add(CommonHistoriquesConsultationPeer::ID, $this->id);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::ORGANISME)) $criteria->add(CommonHistoriquesConsultationPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::REF_CONSULTATION)) $criteria->add(CommonHistoriquesConsultationPeer::REF_CONSULTATION, $this->ref_consultation);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::STATUT)) $criteria->add(CommonHistoriquesConsultationPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::ID_AGENT)) $criteria->add(CommonHistoriquesConsultationPeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::NOM_AGENT)) $criteria->add(CommonHistoriquesConsultationPeer::NOM_AGENT, $this->nom_agent);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::PRENOM_AGENT)) $criteria->add(CommonHistoriquesConsultationPeer::PRENOM_AGENT, $this->prenom_agent);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::NOM_ELEMENT)) $criteria->add(CommonHistoriquesConsultationPeer::NOM_ELEMENT, $this->nom_element);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::VALEUR)) $criteria->add(CommonHistoriquesConsultationPeer::VALEUR, $this->valeur);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::VALEUR_DETAIL_1)) $criteria->add(CommonHistoriquesConsultationPeer::VALEUR_DETAIL_1, $this->valeur_detail_1);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::VALEUR_DETAIL_2)) $criteria->add(CommonHistoriquesConsultationPeer::VALEUR_DETAIL_2, $this->valeur_detail_2);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::NUMERO_LOT)) $criteria->add(CommonHistoriquesConsultationPeer::NUMERO_LOT, $this->numero_lot);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::HORODATAGE)) $criteria->add(CommonHistoriquesConsultationPeer::HORODATAGE, $this->horodatage);
        if ($this->isColumnModified(CommonHistoriquesConsultationPeer::UNTRUSTEDDATE)) $criteria->add(CommonHistoriquesConsultationPeer::UNTRUSTEDDATE, $this->untrusteddate);

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
        $criteria = new Criteria(CommonHistoriquesConsultationPeer::DATABASE_NAME);
        $criteria->add(CommonHistoriquesConsultationPeer::ID, $this->id);
        $criteria->add(CommonHistoriquesConsultationPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonHistoriquesConsultation (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setRefConsultation($this->getRefConsultation());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setNomAgent($this->getNomAgent());
        $copyObj->setPrenomAgent($this->getPrenomAgent());
        $copyObj->setNomElement($this->getNomElement());
        $copyObj->setValeur($this->getValeur());
        $copyObj->setValeurDetail1($this->getValeurDetail1());
        $copyObj->setValeurDetail2($this->getValeurDetail2());
        $copyObj->setNumeroLot($this->getNumeroLot());
        $copyObj->setHorodatage($this->getHorodatage());
        $copyObj->setUntrusteddate($this->getUntrusteddate());
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
     * @return CommonHistoriquesConsultation Clone of current object.
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
     * @return CommonHistoriquesConsultationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonHistoriquesConsultationPeer();
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
        $this->ref_consultation = null;
        $this->statut = null;
        $this->id_agent = null;
        $this->nom_agent = null;
        $this->prenom_agent = null;
        $this->nom_element = null;
        $this->valeur = null;
        $this->valeur_detail_1 = null;
        $this->valeur_detail_2 = null;
        $this->numero_lot = null;
        $this->horodatage = null;
        $this->untrusteddate = null;
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
        return (string) $this->exportTo(CommonHistoriquesConsultationPeer::DEFAULT_STRING_FORMAT);
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
