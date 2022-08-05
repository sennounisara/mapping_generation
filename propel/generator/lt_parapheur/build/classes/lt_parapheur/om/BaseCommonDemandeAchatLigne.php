<?php


/**
 * Base class that represents a row from the 'demande_achat_ligne' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDemandeAchatLigne extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonDemandeAchatLignePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonDemandeAchatLignePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_demande_achat_ligne field.
     * @var        int
     */
    protected $id_demande_achat_ligne;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the numero_demande_achat field.
     * @var        string
     */
    protected $numero_demande_achat;

    /**
     * The value for the description_demande_achat field.
     * @var        string
     */
    protected $description_demande_achat;

    /**
     * The value for the numero_ligne field.
     * @var        int
     */
    protected $numero_ligne;

    /**
     * The value for the code_article field.
     * @var        string
     */
    protected $code_article;

    /**
     * The value for the description_ligne field.
     * @var        string
     */
    protected $description_ligne;

    /**
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the lot field.
     * @var        int
     */
    protected $lot;

    /**
     * The value for the quantite field.
     * @var        int
     */
    protected $quantite;

    /**
     * The value for the unite field.
     * @var        string
     */
    protected $unite;

    /**
     * The value for the site field.
     * @var        string
     */
    protected $site;

    /**
     * The value for the port field.
     * @var        string
     */
    protected $port;

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
     * Get the [id_demande_achat_ligne] column value.
     * 
     * @return int
     */
    public function getIdDemandeAchatLigne()
    {

        return $this->id_demande_achat_ligne;
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
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [numero_demande_achat] column value.
     * 
     * @return string
     */
    public function getNumeroDemandeAchat()
    {

        return $this->numero_demande_achat;
    }

    /**
     * Get the [description_demande_achat] column value.
     * 
     * @return string
     */
    public function getDescriptionDemandeAchat()
    {

        return $this->description_demande_achat;
    }

    /**
     * Get the [numero_ligne] column value.
     * 
     * @return int
     */
    public function getNumeroLigne()
    {

        return $this->numero_ligne;
    }

    /**
     * Get the [code_article] column value.
     * 
     * @return string
     */
    public function getCodeArticle()
    {

        return $this->code_article;
    }

    /**
     * Get the [description_ligne] column value.
     * 
     * @return string
     */
    public function getDescriptionLigne()
    {

        return $this->description_ligne;
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
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
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
     * Get the [quantite] column value.
     * 
     * @return int
     */
    public function getQuantite()
    {

        return $this->quantite;
    }

    /**
     * Get the [unite] column value.
     * 
     * @return string
     */
    public function getUnite()
    {

        return $this->unite;
    }

    /**
     * Get the [site] column value.
     * 
     * @return string
     */
    public function getSite()
    {

        return $this->site;
    }

    /**
     * Get the [port] column value.
     * 
     * @return string
     */
    public function getPort()
    {

        return $this->port;
    }

    /**
     * Set the value of [id_demande_achat_ligne] column.
     * 
     * @param int $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setIdDemandeAchatLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande_achat_ligne !== $v) {
            $this->id_demande_achat_ligne = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE;
        }


        return $this;
    } // setIdDemandeAchatLigne()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [numero_demande_achat] column.
     * 
     * @param string $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setNumeroDemandeAchat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_demande_achat !== $v) {
            $this->numero_demande_achat = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::NUMERO_DEMANDE_ACHAT;
        }


        return $this;
    } // setNumeroDemandeAchat()

    /**
     * Set the value of [description_demande_achat] column.
     * 
     * @param string $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setDescriptionDemandeAchat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_demande_achat !== $v) {
            $this->description_demande_achat = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::DESCRIPTION_DEMANDE_ACHAT;
        }


        return $this;
    } // setDescriptionDemandeAchat()

    /**
     * Set the value of [numero_ligne] column.
     * 
     * @param int $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setNumeroLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero_ligne !== $v) {
            $this->numero_ligne = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::NUMERO_LIGNE;
        }


        return $this;
    } // setNumeroLigne()

    /**
     * Set the value of [code_article] column.
     * 
     * @param string $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setCodeArticle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_article !== $v) {
            $this->code_article = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::CODE_ARTICLE;
        }


        return $this;
    } // setCodeArticle()

    /**
     * Set the value of [description_ligne] column.
     * 
     * @param string $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setDescriptionLigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_ligne !== $v) {
            $this->description_ligne = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::DESCRIPTION_LIGNE;
        }


        return $this;
    } // setDescriptionLigne()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [quantite] column.
     * 
     * @param int $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setQuantite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->quantite !== $v) {
            $this->quantite = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::QUANTITE;
        }


        return $this;
    } // setQuantite()

    /**
     * Set the value of [unite] column.
     * 
     * @param string $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setUnite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unite !== $v) {
            $this->unite = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::UNITE;
        }


        return $this;
    } // setUnite()

    /**
     * Set the value of [site] column.
     * 
     * @param string $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setSite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->site !== $v) {
            $this->site = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::SITE;
        }


        return $this;
    } // setSite()

    /**
     * Set the value of [port] column.
     * 
     * @param string $v new value
     * @return CommonDemandeAchatLigne The current object (for fluent API support)
     */
    public function setPort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->port !== $v) {
            $this->port = $v;
            $this->modifiedColumns[] = CommonDemandeAchatLignePeer::PORT;
        }


        return $this;
    } // setPort()

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

            $this->id_demande_achat_ligne = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->email = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->numero_demande_achat = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->description_demande_achat = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->numero_ligne = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->code_article = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->description_ligne = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->statut = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->consultation_ref = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->lot = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->quantite = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->unite = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->site = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->port = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = CommonDemandeAchatLignePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonDemandeAchatLigne object", $e);
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
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonDemandeAchatLignePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonDemandeAchatLigneQuery::create()
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
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonDemandeAchatLignePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE;
        if (null !== $this->id_demande_achat_ligne) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`id_demande_achat_ligne`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::NUMERO_DEMANDE_ACHAT)) {
            $modifiedColumns[':p' . $index++]  = '`numero_demande_achat`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::DESCRIPTION_DEMANDE_ACHAT)) {
            $modifiedColumns[':p' . $index++]  = '`description_demande_achat`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::NUMERO_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_ligne`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::CODE_ARTICLE)) {
            $modifiedColumns[':p' . $index++]  = '`code_article`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::DESCRIPTION_LIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`description_ligne`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::QUANTITE)) {
            $modifiedColumns[':p' . $index++]  = '`quantite`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::UNITE)) {
            $modifiedColumns[':p' . $index++]  = '`unite`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::SITE)) {
            $modifiedColumns[':p' . $index++]  = '`site`';
        }
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::PORT)) {
            $modifiedColumns[':p' . $index++]  = '`port`';
        }

        $sql = sprintf(
            'INSERT INTO `demande_achat_ligne` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_demande_achat_ligne`':						
                        $stmt->bindValue($identifier, $this->id_demande_achat_ligne, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`numero_demande_achat`':						
                        $stmt->bindValue($identifier, $this->numero_demande_achat, PDO::PARAM_STR);
                        break;
                    case '`description_demande_achat`':						
                        $stmt->bindValue($identifier, $this->description_demande_achat, PDO::PARAM_STR);
                        break;
                    case '`numero_ligne`':						
                        $stmt->bindValue($identifier, $this->numero_ligne, PDO::PARAM_INT);
                        break;
                    case '`code_article`':						
                        $stmt->bindValue($identifier, $this->code_article, PDO::PARAM_STR);
                        break;
                    case '`description_ligne`':						
                        $stmt->bindValue($identifier, $this->description_ligne, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`quantite`':						
                        $stmt->bindValue($identifier, $this->quantite, PDO::PARAM_INT);
                        break;
                    case '`unite`':						
                        $stmt->bindValue($identifier, $this->unite, PDO::PARAM_STR);
                        break;
                    case '`site`':						
                        $stmt->bindValue($identifier, $this->site, PDO::PARAM_STR);
                        break;
                    case '`port`':						
                        $stmt->bindValue($identifier, $this->port, PDO::PARAM_STR);
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
        $this->setIdDemandeAchatLigne($pk);

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


            if (($retval = CommonDemandeAchatLignePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonDemandeAchatLignePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDemandeAchatLigne();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getEmail();
                break;
            case 3:
                return $this->getNumeroDemandeAchat();
                break;
            case 4:
                return $this->getDescriptionDemandeAchat();
                break;
            case 5:
                return $this->getNumeroLigne();
                break;
            case 6:
                return $this->getCodeArticle();
                break;
            case 7:
                return $this->getDescriptionLigne();
                break;
            case 8:
                return $this->getStatut();
                break;
            case 9:
                return $this->getConsultationRef();
                break;
            case 10:
                return $this->getLot();
                break;
            case 11:
                return $this->getQuantite();
                break;
            case 12:
                return $this->getUnite();
                break;
            case 13:
                return $this->getSite();
                break;
            case 14:
                return $this->getPort();
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
        if (isset($alreadyDumpedObjects['CommonDemandeAchatLigne'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonDemandeAchatLigne'][$this->getPrimaryKey()] = true;
        $keys = CommonDemandeAchatLignePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdDemandeAchatLigne(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getEmail(),
            $keys[3] => $this->getNumeroDemandeAchat(),
            $keys[4] => $this->getDescriptionDemandeAchat(),
            $keys[5] => $this->getNumeroLigne(),
            $keys[6] => $this->getCodeArticle(),
            $keys[7] => $this->getDescriptionLigne(),
            $keys[8] => $this->getStatut(),
            $keys[9] => $this->getConsultationRef(),
            $keys[10] => $this->getLot(),
            $keys[11] => $this->getQuantite(),
            $keys[12] => $this->getUnite(),
            $keys[13] => $this->getSite(),
            $keys[14] => $this->getPort(),
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
        $pos = CommonDemandeAchatLignePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDemandeAchatLigne($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setEmail($value);
                break;
            case 3:
                $this->setNumeroDemandeAchat($value);
                break;
            case 4:
                $this->setDescriptionDemandeAchat($value);
                break;
            case 5:
                $this->setNumeroLigne($value);
                break;
            case 6:
                $this->setCodeArticle($value);
                break;
            case 7:
                $this->setDescriptionLigne($value);
                break;
            case 8:
                $this->setStatut($value);
                break;
            case 9:
                $this->setConsultationRef($value);
                break;
            case 10:
                $this->setLot($value);
                break;
            case 11:
                $this->setQuantite($value);
                break;
            case 12:
                $this->setUnite($value);
                break;
            case 13:
                $this->setSite($value);
                break;
            case 14:
                $this->setPort($value);
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
        $keys = CommonDemandeAchatLignePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdDemandeAchatLigne($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmail($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumeroDemandeAchat($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDescriptionDemandeAchat($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNumeroLigne($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCodeArticle($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDescriptionLigne($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStatut($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setConsultationRef($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLot($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setQuantite($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setUnite($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setSite($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPort($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonDemandeAchatLignePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE)) $criteria->add(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $this->id_demande_achat_ligne);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::ORGANISME)) $criteria->add(CommonDemandeAchatLignePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::EMAIL)) $criteria->add(CommonDemandeAchatLignePeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::NUMERO_DEMANDE_ACHAT)) $criteria->add(CommonDemandeAchatLignePeer::NUMERO_DEMANDE_ACHAT, $this->numero_demande_achat);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::DESCRIPTION_DEMANDE_ACHAT)) $criteria->add(CommonDemandeAchatLignePeer::DESCRIPTION_DEMANDE_ACHAT, $this->description_demande_achat);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::NUMERO_LIGNE)) $criteria->add(CommonDemandeAchatLignePeer::NUMERO_LIGNE, $this->numero_ligne);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::CODE_ARTICLE)) $criteria->add(CommonDemandeAchatLignePeer::CODE_ARTICLE, $this->code_article);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::DESCRIPTION_LIGNE)) $criteria->add(CommonDemandeAchatLignePeer::DESCRIPTION_LIGNE, $this->description_ligne);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::STATUT)) $criteria->add(CommonDemandeAchatLignePeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::CONSULTATION_REF)) $criteria->add(CommonDemandeAchatLignePeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::LOT)) $criteria->add(CommonDemandeAchatLignePeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::QUANTITE)) $criteria->add(CommonDemandeAchatLignePeer::QUANTITE, $this->quantite);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::UNITE)) $criteria->add(CommonDemandeAchatLignePeer::UNITE, $this->unite);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::SITE)) $criteria->add(CommonDemandeAchatLignePeer::SITE, $this->site);
        if ($this->isColumnModified(CommonDemandeAchatLignePeer::PORT)) $criteria->add(CommonDemandeAchatLignePeer::PORT, $this->port);

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
        $criteria = new Criteria(CommonDemandeAchatLignePeer::DATABASE_NAME);
        $criteria->add(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $this->id_demande_achat_ligne);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdDemandeAchatLigne();
    }

    /**
     * Generic method to set the primary key (id_demande_achat_ligne column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdDemandeAchatLigne($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdDemandeAchatLigne();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonDemandeAchatLigne (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setNumeroDemandeAchat($this->getNumeroDemandeAchat());
        $copyObj->setDescriptionDemandeAchat($this->getDescriptionDemandeAchat());
        $copyObj->setNumeroLigne($this->getNumeroLigne());
        $copyObj->setCodeArticle($this->getCodeArticle());
        $copyObj->setDescriptionLigne($this->getDescriptionLigne());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setLot($this->getLot());
        $copyObj->setQuantite($this->getQuantite());
        $copyObj->setUnite($this->getUnite());
        $copyObj->setSite($this->getSite());
        $copyObj->setPort($this->getPort());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdDemandeAchatLigne(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonDemandeAchatLigne Clone of current object.
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
     * @return CommonDemandeAchatLignePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonDemandeAchatLignePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_demande_achat_ligne = null;
        $this->organisme = null;
        $this->email = null;
        $this->numero_demande_achat = null;
        $this->description_demande_achat = null;
        $this->numero_ligne = null;
        $this->code_article = null;
        $this->description_ligne = null;
        $this->statut = null;
        $this->consultation_ref = null;
        $this->lot = null;
        $this->quantite = null;
        $this->unite = null;
        $this->site = null;
        $this->port = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
        return (string) $this->exportTo(CommonDemandeAchatLignePeer::DEFAULT_STRING_FORMAT);
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
