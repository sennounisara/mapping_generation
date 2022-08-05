<?php


/**
 * Base class that represents a row from the 'CG76_Donnee_Complementaire_entreprise' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCG76DonneeComplementaireEntreprise extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonCG76DonneeComplementaireEntreprisePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonCG76DonneeComplementaireEntreprisePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the ref field.
     * @var        int
     */
    protected $ref;

    /**
     * The value for the idinscrit field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $idinscrit;

    /**
     * The value for the identreprise field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $identreprise;

    /**
     * The value for the type_formation field.
     * @var        string
     */
    protected $type_formation;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the cout_moyen_journee field.
     * @var        string
     */
    protected $cout_moyen_journee;

    /**
     * The value for the collaboration_fpt field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $collaboration_fpt;

    /**
     * The value for the collaboration_fpe field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $collaboration_fpe;

    /**
     * The value for the centre_documentation field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $centre_documentation;

    /**
     * The value for the service_reprographie field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $service_reprographie;

    /**
     * The value for the salle_info field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $salle_info;

    /**
     * The value for the salle_cours field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $salle_cours;

    /**
     * The value for the aire_geo_inter field.
     * @var        string
     */
    protected $aire_geo_inter;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

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
        $this->idinscrit = 0;
        $this->identreprise = 0;
        $this->collaboration_fpt = 0;
        $this->collaboration_fpe = 0;
        $this->centre_documentation = 0;
        $this->service_reprographie = 0;
        $this->salle_info = 0;
        $this->salle_cours = 0;
    }

    /**
     * Initializes internal state of BaseCommonCG76DonneeComplementaireEntreprise object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [ref] column value.
     * 
     * @return int
     */
    public function getRef()
    {

        return $this->ref;
    }

    /**
     * Get the [idinscrit] column value.
     * 
     * @return int
     */
    public function getIdinscrit()
    {

        return $this->idinscrit;
    }

    /**
     * Get the [identreprise] column value.
     * 
     * @return int
     */
    public function getIdentreprise()
    {

        return $this->identreprise;
    }

    /**
     * Get the [type_formation] column value.
     * 
     * @return string
     */
    public function getTypeFormation()
    {

        return $this->type_formation;
    }

    /**
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [cout_moyen_journee] column value.
     * 
     * @return string
     */
    public function getCoutMoyenJournee()
    {

        return $this->cout_moyen_journee;
    }

    /**
     * Get the [collaboration_fpt] column value.
     * 
     * @return int
     */
    public function getCollaborationFpt()
    {

        return $this->collaboration_fpt;
    }

    /**
     * Get the [collaboration_fpe] column value.
     * 
     * @return int
     */
    public function getCollaborationFpe()
    {

        return $this->collaboration_fpe;
    }

    /**
     * Get the [centre_documentation] column value.
     * 
     * @return int
     */
    public function getCentreDocumentation()
    {

        return $this->centre_documentation;
    }

    /**
     * Get the [service_reprographie] column value.
     * 
     * @return int
     */
    public function getServiceReprographie()
    {

        return $this->service_reprographie;
    }

    /**
     * Get the [salle_info] column value.
     * 
     * @return int
     */
    public function getSalleInfo()
    {

        return $this->salle_info;
    }

    /**
     * Get the [salle_cours] column value.
     * 
     * @return int
     */
    public function getSalleCours()
    {

        return $this->salle_cours;
    }

    /**
     * Get the [aire_geo_inter] column value.
     * 
     * @return string
     */
    public function getAireGeoInter()
    {

        return $this->aire_geo_inter;
    }

    /**
     * Get the [commentaire] column value.
     * 
     * @return string
     */
    public function getCommentaire()
    {

        return $this->commentaire;
    }

    /**
     * Set the value of [ref] column.
     * 
     * @param int $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ref !== $v) {
            $this->ref = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::REF;
        }


        return $this;
    } // setRef()

    /**
     * Set the value of [idinscrit] column.
     * 
     * @param int $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setIdinscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idinscrit !== $v) {
            $this->idinscrit = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::IDINSCRIT;
        }


        return $this;
    } // setIdinscrit()

    /**
     * Set the value of [identreprise] column.
     * 
     * @param int $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setIdentreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->identreprise !== $v) {
            $this->identreprise = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::IDENTREPRISE;
        }


        return $this;
    } // setIdentreprise()

    /**
     * Set the value of [type_formation] column.
     * 
     * @param string $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setTypeFormation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_formation !== $v) {
            $this->type_formation = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::TYPE_FORMATION;
        }


        return $this;
    } // setTypeFormation()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [cout_moyen_journee] column.
     * 
     * @param string $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setCoutMoyenJournee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cout_moyen_journee !== $v) {
            $this->cout_moyen_journee = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::COUT_MOYEN_JOURNEE;
        }


        return $this;
    } // setCoutMoyenJournee()

    /**
     * Set the value of [collaboration_fpt] column.
     * 
     * @param int $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setCollaborationFpt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->collaboration_fpt !== $v) {
            $this->collaboration_fpt = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPT;
        }


        return $this;
    } // setCollaborationFpt()

    /**
     * Set the value of [collaboration_fpe] column.
     * 
     * @param int $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setCollaborationFpe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->collaboration_fpe !== $v) {
            $this->collaboration_fpe = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPE;
        }


        return $this;
    } // setCollaborationFpe()

    /**
     * Set the value of [centre_documentation] column.
     * 
     * @param int $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setCentreDocumentation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->centre_documentation !== $v) {
            $this->centre_documentation = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::CENTRE_DOCUMENTATION;
        }


        return $this;
    } // setCentreDocumentation()

    /**
     * Set the value of [service_reprographie] column.
     * 
     * @param int $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setServiceReprographie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->service_reprographie !== $v) {
            $this->service_reprographie = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::SERVICE_REPROGRAPHIE;
        }


        return $this;
    } // setServiceReprographie()

    /**
     * Set the value of [salle_info] column.
     * 
     * @param int $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setSalleInfo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->salle_info !== $v) {
            $this->salle_info = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::SALLE_INFO;
        }


        return $this;
    } // setSalleInfo()

    /**
     * Set the value of [salle_cours] column.
     * 
     * @param int $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setSalleCours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->salle_cours !== $v) {
            $this->salle_cours = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::SALLE_COURS;
        }


        return $this;
    } // setSalleCours()

    /**
     * Set the value of [aire_geo_inter] column.
     * 
     * @param string $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setAireGeoInter($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->aire_geo_inter !== $v) {
            $this->aire_geo_inter = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::AIRE_GEO_INTER;
        }


        return $this;
    } // setAireGeoInter()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonCG76DonneeComplementaireEntreprise The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

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
            if ($this->idinscrit !== 0) {
                return false;
            }

            if ($this->identreprise !== 0) {
                return false;
            }

            if ($this->collaboration_fpt !== 0) {
                return false;
            }

            if ($this->collaboration_fpe !== 0) {
                return false;
            }

            if ($this->centre_documentation !== 0) {
                return false;
            }

            if ($this->service_reprographie !== 0) {
                return false;
            }

            if ($this->salle_info !== 0) {
                return false;
            }

            if ($this->salle_cours !== 0) {
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

            $this->ref = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idinscrit = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->identreprise = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->type_formation = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cout_moyen_journee = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->collaboration_fpt = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->collaboration_fpe = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->centre_documentation = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->service_reprographie = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->salle_info = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->salle_cours = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->aire_geo_inter = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->commentaire = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = CommonCG76DonneeComplementaireEntreprisePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonCG76DonneeComplementaireEntreprise object", $e);
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
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonCG76DonneeComplementaireEntreprisePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonCG76DonneeComplementaireEntrepriseQuery::create()
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
            $con = Propel::getConnection(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonCG76DonneeComplementaireEntreprisePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonCG76DonneeComplementaireEntreprisePeer::REF;
        if (null !== $this->ref) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonCG76DonneeComplementaireEntreprisePeer::REF . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::REF)) {
            $modifiedColumns[':p' . $index++]  = '`Ref`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::IDINSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`idInscrit`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::IDENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`IdEntreprise`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::TYPE_FORMATION)) {
            $modifiedColumns[':p' . $index++]  = '`type_formation`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::COUT_MOYEN_JOURNEE)) {
            $modifiedColumns[':p' . $index++]  = '`cout_moyen_journee`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPT)) {
            $modifiedColumns[':p' . $index++]  = '`collaboration_fpt`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPE)) {
            $modifiedColumns[':p' . $index++]  = '`collaboration_fpe`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::CENTRE_DOCUMENTATION)) {
            $modifiedColumns[':p' . $index++]  = '`centre_documentation`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::SERVICE_REPROGRAPHIE)) {
            $modifiedColumns[':p' . $index++]  = '`service_reprographie`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_INFO)) {
            $modifiedColumns[':p' . $index++]  = '`salle_info`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_COURS)) {
            $modifiedColumns[':p' . $index++]  = '`salle_cours`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::AIRE_GEO_INTER)) {
            $modifiedColumns[':p' . $index++]  = '`aire_geo_inter`';
        }
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }

        $sql = sprintf(
            'INSERT INTO `CG76_Donnee_Complementaire_entreprise` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`Ref`':						
                        $stmt->bindValue($identifier, $this->ref, PDO::PARAM_INT);
                        break;
                    case '`idInscrit`':						
                        $stmt->bindValue($identifier, $this->idinscrit, PDO::PARAM_INT);
                        break;
                    case '`IdEntreprise`':						
                        $stmt->bindValue($identifier, $this->identreprise, PDO::PARAM_INT);
                        break;
                    case '`type_formation`':						
                        $stmt->bindValue($identifier, $this->type_formation, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`cout_moyen_journee`':						
                        $stmt->bindValue($identifier, $this->cout_moyen_journee, PDO::PARAM_STR);
                        break;
                    case '`collaboration_fpt`':						
                        $stmt->bindValue($identifier, $this->collaboration_fpt, PDO::PARAM_INT);
                        break;
                    case '`collaboration_fpe`':						
                        $stmt->bindValue($identifier, $this->collaboration_fpe, PDO::PARAM_INT);
                        break;
                    case '`centre_documentation`':						
                        $stmt->bindValue($identifier, $this->centre_documentation, PDO::PARAM_INT);
                        break;
                    case '`service_reprographie`':						
                        $stmt->bindValue($identifier, $this->service_reprographie, PDO::PARAM_INT);
                        break;
                    case '`salle_info`':						
                        $stmt->bindValue($identifier, $this->salle_info, PDO::PARAM_INT);
                        break;
                    case '`salle_cours`':						
                        $stmt->bindValue($identifier, $this->salle_cours, PDO::PARAM_INT);
                        break;
                    case '`aire_geo_inter`':						
                        $stmt->bindValue($identifier, $this->aire_geo_inter, PDO::PARAM_STR);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
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
        $this->setRef($pk);

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


            if (($retval = CommonCG76DonneeComplementaireEntreprisePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonCG76DonneeComplementaireEntreprisePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRef();
                break;
            case 1:
                return $this->getIdinscrit();
                break;
            case 2:
                return $this->getIdentreprise();
                break;
            case 3:
                return $this->getTypeFormation();
                break;
            case 4:
                return $this->getEmail();
                break;
            case 5:
                return $this->getCoutMoyenJournee();
                break;
            case 6:
                return $this->getCollaborationFpt();
                break;
            case 7:
                return $this->getCollaborationFpe();
                break;
            case 8:
                return $this->getCentreDocumentation();
                break;
            case 9:
                return $this->getServiceReprographie();
                break;
            case 10:
                return $this->getSalleInfo();
                break;
            case 11:
                return $this->getSalleCours();
                break;
            case 12:
                return $this->getAireGeoInter();
                break;
            case 13:
                return $this->getCommentaire();
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
        if (isset($alreadyDumpedObjects['CommonCG76DonneeComplementaireEntreprise'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonCG76DonneeComplementaireEntreprise'][$this->getPrimaryKey()] = true;
        $keys = CommonCG76DonneeComplementaireEntreprisePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getRef(),
            $keys[1] => $this->getIdinscrit(),
            $keys[2] => $this->getIdentreprise(),
            $keys[3] => $this->getTypeFormation(),
            $keys[4] => $this->getEmail(),
            $keys[5] => $this->getCoutMoyenJournee(),
            $keys[6] => $this->getCollaborationFpt(),
            $keys[7] => $this->getCollaborationFpe(),
            $keys[8] => $this->getCentreDocumentation(),
            $keys[9] => $this->getServiceReprographie(),
            $keys[10] => $this->getSalleInfo(),
            $keys[11] => $this->getSalleCours(),
            $keys[12] => $this->getAireGeoInter(),
            $keys[13] => $this->getCommentaire(),
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
        $pos = CommonCG76DonneeComplementaireEntreprisePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRef($value);
                break;
            case 1:
                $this->setIdinscrit($value);
                break;
            case 2:
                $this->setIdentreprise($value);
                break;
            case 3:
                $this->setTypeFormation($value);
                break;
            case 4:
                $this->setEmail($value);
                break;
            case 5:
                $this->setCoutMoyenJournee($value);
                break;
            case 6:
                $this->setCollaborationFpt($value);
                break;
            case 7:
                $this->setCollaborationFpe($value);
                break;
            case 8:
                $this->setCentreDocumentation($value);
                break;
            case 9:
                $this->setServiceReprographie($value);
                break;
            case 10:
                $this->setSalleInfo($value);
                break;
            case 11:
                $this->setSalleCours($value);
                break;
            case 12:
                $this->setAireGeoInter($value);
                break;
            case 13:
                $this->setCommentaire($value);
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
        $keys = CommonCG76DonneeComplementaireEntreprisePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setRef($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdinscrit($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdentreprise($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTypeFormation($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCoutMoyenJournee($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCollaborationFpt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCollaborationFpe($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCentreDocumentation($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setServiceReprographie($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSalleInfo($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setSalleCours($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAireGeoInter($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCommentaire($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::REF)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::REF, $this->ref);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::IDINSCRIT)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::IDINSCRIT, $this->idinscrit);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::IDENTREPRISE)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::IDENTREPRISE, $this->identreprise);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::TYPE_FORMATION)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::TYPE_FORMATION, $this->type_formation);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::EMAIL)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::COUT_MOYEN_JOURNEE)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::COUT_MOYEN_JOURNEE, $this->cout_moyen_journee);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPT)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPT, $this->collaboration_fpt);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPE)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::COLLABORATION_FPE, $this->collaboration_fpe);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::CENTRE_DOCUMENTATION)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::CENTRE_DOCUMENTATION, $this->centre_documentation);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::SERVICE_REPROGRAPHIE)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::SERVICE_REPROGRAPHIE, $this->service_reprographie);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_INFO)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_INFO, $this->salle_info);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_COURS)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::SALLE_COURS, $this->salle_cours);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::AIRE_GEO_INTER)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::AIRE_GEO_INTER, $this->aire_geo_inter);
        if ($this->isColumnModified(CommonCG76DonneeComplementaireEntreprisePeer::COMMENTAIRE)) $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::COMMENTAIRE, $this->commentaire);

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
        $criteria = new Criteria(CommonCG76DonneeComplementaireEntreprisePeer::DATABASE_NAME);
        $criteria->add(CommonCG76DonneeComplementaireEntreprisePeer::REF, $this->ref);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getRef();
    }

    /**
     * Generic method to set the primary key (ref column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setRef($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getRef();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonCG76DonneeComplementaireEntreprise (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdinscrit($this->getIdinscrit());
        $copyObj->setIdentreprise($this->getIdentreprise());
        $copyObj->setTypeFormation($this->getTypeFormation());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setCoutMoyenJournee($this->getCoutMoyenJournee());
        $copyObj->setCollaborationFpt($this->getCollaborationFpt());
        $copyObj->setCollaborationFpe($this->getCollaborationFpe());
        $copyObj->setCentreDocumentation($this->getCentreDocumentation());
        $copyObj->setServiceReprographie($this->getServiceReprographie());
        $copyObj->setSalleInfo($this->getSalleInfo());
        $copyObj->setSalleCours($this->getSalleCours());
        $copyObj->setAireGeoInter($this->getAireGeoInter());
        $copyObj->setCommentaire($this->getCommentaire());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setRef(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonCG76DonneeComplementaireEntreprise Clone of current object.
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
     * @return CommonCG76DonneeComplementaireEntreprisePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonCG76DonneeComplementaireEntreprisePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->ref = null;
        $this->idinscrit = null;
        $this->identreprise = null;
        $this->type_formation = null;
        $this->email = null;
        $this->cout_moyen_journee = null;
        $this->collaboration_fpt = null;
        $this->collaboration_fpe = null;
        $this->centre_documentation = null;
        $this->service_reprographie = null;
        $this->salle_info = null;
        $this->salle_cours = null;
        $this->aire_geo_inter = null;
        $this->commentaire = null;
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
        return (string) $this->exportTo(CommonCG76DonneeComplementaireEntreprisePeer::DEFAULT_STRING_FORMAT);
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
