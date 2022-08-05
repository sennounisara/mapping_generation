<?php


/**
 * Base class that represents a row from the 'Avis_Membres_CAO' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAvisMembresCAO extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAvisMembresCAOPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAvisMembresCAOPeer
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
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the id_enveloppe field.
     * @var        int
     */
    protected $id_enveloppe;

    /**
     * The value for the nom_agent field.
     * @var        string
     */
    protected $nom_agent;

    /**
     * The value for the prenom_agent field.
     * @var        string
     */
    protected $prenom_agent;

    /**
     * The value for the date_action field.
     * @var        string
     */
    protected $date_action;

    /**
     * The value for the admissibilite field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $admissibilite;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the sous_pli field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $sous_pli;

    /**
     * The value for the type_depot_reponse field.
     * @var        int
     */
    protected $type_depot_reponse;

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
        $this->admissibilite = 0;
        $this->sous_pli = 0;
    }

    /**
     * Initializes internal state of BaseCommonAvisMembresCAO object.
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
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
    }

    /**
     * Get the [id_enveloppe] column value.
     * 
     * @return int
     */
    public function getIdEnveloppe()
    {

        return $this->id_enveloppe;
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
     * Get the [date_action] column value.
     * 
     * @return string
     */
    public function getDateAction()
    {

        return $this->date_action;
    }

    /**
     * Get the [admissibilite] column value.
     * 
     * @return int
     */
    public function getAdmissibilite()
    {

        return $this->admissibilite;
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
     * Get the [sous_pli] column value.
     * 
     * @return int
     */
    public function getSousPli()
    {

        return $this->sous_pli;
    }

    /**
     * Get the [type_depot_reponse] column value.
     * 
     * @return int
     */
    public function getTypeDepotReponse()
    {

        return $this->type_depot_reponse;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonAvisMembresCAO The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonAvisMembresCAOPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonAvisMembresCAO The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonAvisMembresCAOPeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [id_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonAvisMembresCAO The current object (for fluent API support)
     */
    public function setIdEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_enveloppe !== $v) {
            $this->id_enveloppe = $v;
            $this->modifiedColumns[] = CommonAvisMembresCAOPeer::ID_ENVELOPPE;
        }


        return $this;
    } // setIdEnveloppe()

    /**
     * Set the value of [nom_agent] column.
     * 
     * @param string $v new value
     * @return CommonAvisMembresCAO The current object (for fluent API support)
     */
    public function setNomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent !== $v) {
            $this->nom_agent = $v;
            $this->modifiedColumns[] = CommonAvisMembresCAOPeer::NOM_AGENT;
        }


        return $this;
    } // setNomAgent()

    /**
     * Set the value of [prenom_agent] column.
     * 
     * @param string $v new value
     * @return CommonAvisMembresCAO The current object (for fluent API support)
     */
    public function setPrenomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent !== $v) {
            $this->prenom_agent = $v;
            $this->modifiedColumns[] = CommonAvisMembresCAOPeer::PRENOM_AGENT;
        }


        return $this;
    } // setPrenomAgent()

    /**
     * Set the value of [date_action] column.
     * 
     * @param string $v new value
     * @return CommonAvisMembresCAO The current object (for fluent API support)
     */
    public function setDateAction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_action !== $v) {
            $this->date_action = $v;
            $this->modifiedColumns[] = CommonAvisMembresCAOPeer::DATE_ACTION;
        }


        return $this;
    } // setDateAction()

    /**
     * Set the value of [admissibilite] column.
     * 
     * @param int $v new value
     * @return CommonAvisMembresCAO The current object (for fluent API support)
     */
    public function setAdmissibilite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->admissibilite !== $v) {
            $this->admissibilite = $v;
            $this->modifiedColumns[] = CommonAvisMembresCAOPeer::ADMISSIBILITE;
        }


        return $this;
    } // setAdmissibilite()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonAvisMembresCAO The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonAvisMembresCAOPeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [sous_pli] column.
     * 
     * @param int $v new value
     * @return CommonAvisMembresCAO The current object (for fluent API support)
     */
    public function setSousPli($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sous_pli !== $v) {
            $this->sous_pli = $v;
            $this->modifiedColumns[] = CommonAvisMembresCAOPeer::SOUS_PLI;
        }


        return $this;
    } // setSousPli()

    /**
     * Set the value of [type_depot_reponse] column.
     * 
     * @param int $v new value
     * @return CommonAvisMembresCAO The current object (for fluent API support)
     */
    public function setTypeDepotReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_depot_reponse !== $v) {
            $this->type_depot_reponse = $v;
            $this->modifiedColumns[] = CommonAvisMembresCAOPeer::TYPE_DEPOT_REPONSE;
        }


        return $this;
    } // setTypeDepotReponse()

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
            if ($this->admissibilite !== 0) {
                return false;
            }

            if ($this->sous_pli !== 0) {
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
            $this->id_agent = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_enveloppe = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->nom_agent = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->prenom_agent = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_action = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->admissibilite = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->commentaire = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->sous_pli = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->type_depot_reponse = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = CommonAvisMembresCAOPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAvisMembresCAO object", $e);
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
            $con = Propel::getConnection(CommonAvisMembresCAOPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAvisMembresCAOPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonAvisMembresCAOPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAvisMembresCAOQuery::create()
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
            $con = Propel::getConnection(CommonAvisMembresCAOPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAvisMembresCAOPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonAvisMembresCAOPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAvisMembresCAOPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::ID_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_enveloppe`';
        }
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::NOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent`';
        }
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::PRENOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_agent`';
        }
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::DATE_ACTION)) {
            $modifiedColumns[':p' . $index++]  = '`date_action`';
        }
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::ADMISSIBILITE)) {
            $modifiedColumns[':p' . $index++]  = '`admissibilite`';
        }
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::SOUS_PLI)) {
            $modifiedColumns[':p' . $index++]  = '`sous_pli`';
        }
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::TYPE_DEPOT_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`type_depot_reponse`';
        }

        $sql = sprintf(
            'INSERT INTO `Avis_Membres_CAO` (%s) VALUES (%s)',
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
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`id_enveloppe`':						
                        $stmt->bindValue($identifier, $this->id_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`nom_agent`':						
                        $stmt->bindValue($identifier, $this->nom_agent, PDO::PARAM_STR);
                        break;
                    case '`prenom_agent`':						
                        $stmt->bindValue($identifier, $this->prenom_agent, PDO::PARAM_STR);
                        break;
                    case '`date_action`':						
                        $stmt->bindValue($identifier, $this->date_action, PDO::PARAM_STR);
                        break;
                    case '`admissibilite`':						
                        $stmt->bindValue($identifier, $this->admissibilite, PDO::PARAM_INT);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`sous_pli`':						
                        $stmt->bindValue($identifier, $this->sous_pli, PDO::PARAM_INT);
                        break;
                    case '`type_depot_reponse`':						
                        $stmt->bindValue($identifier, $this->type_depot_reponse, PDO::PARAM_INT);
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


            if (($retval = CommonAvisMembresCAOPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonAvisMembresCAOPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAgent();
                break;
            case 2:
                return $this->getIdEnveloppe();
                break;
            case 3:
                return $this->getNomAgent();
                break;
            case 4:
                return $this->getPrenomAgent();
                break;
            case 5:
                return $this->getDateAction();
                break;
            case 6:
                return $this->getAdmissibilite();
                break;
            case 7:
                return $this->getCommentaire();
                break;
            case 8:
                return $this->getSousPli();
                break;
            case 9:
                return $this->getTypeDepotReponse();
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
        if (isset($alreadyDumpedObjects['CommonAvisMembresCAO'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAvisMembresCAO'][$this->getPrimaryKey()] = true;
        $keys = CommonAvisMembresCAOPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdAgent(),
            $keys[2] => $this->getIdEnveloppe(),
            $keys[3] => $this->getNomAgent(),
            $keys[4] => $this->getPrenomAgent(),
            $keys[5] => $this->getDateAction(),
            $keys[6] => $this->getAdmissibilite(),
            $keys[7] => $this->getCommentaire(),
            $keys[8] => $this->getSousPli(),
            $keys[9] => $this->getTypeDepotReponse(),
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
        $pos = CommonAvisMembresCAOPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAgent($value);
                break;
            case 2:
                $this->setIdEnveloppe($value);
                break;
            case 3:
                $this->setNomAgent($value);
                break;
            case 4:
                $this->setPrenomAgent($value);
                break;
            case 5:
                $this->setDateAction($value);
                break;
            case 6:
                $this->setAdmissibilite($value);
                break;
            case 7:
                $this->setCommentaire($value);
                break;
            case 8:
                $this->setSousPli($value);
                break;
            case 9:
                $this->setTypeDepotReponse($value);
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
        $keys = CommonAvisMembresCAOPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdAgent($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdEnveloppe($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNomAgent($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPrenomAgent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateAction($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdmissibilite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCommentaire($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSousPli($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTypeDepotReponse($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAvisMembresCAOPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAvisMembresCAOPeer::ID)) $criteria->add(CommonAvisMembresCAOPeer::ID, $this->id);
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::ID_AGENT)) $criteria->add(CommonAvisMembresCAOPeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::ID_ENVELOPPE)) $criteria->add(CommonAvisMembresCAOPeer::ID_ENVELOPPE, $this->id_enveloppe);
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::NOM_AGENT)) $criteria->add(CommonAvisMembresCAOPeer::NOM_AGENT, $this->nom_agent);
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::PRENOM_AGENT)) $criteria->add(CommonAvisMembresCAOPeer::PRENOM_AGENT, $this->prenom_agent);
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::DATE_ACTION)) $criteria->add(CommonAvisMembresCAOPeer::DATE_ACTION, $this->date_action);
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::ADMISSIBILITE)) $criteria->add(CommonAvisMembresCAOPeer::ADMISSIBILITE, $this->admissibilite);
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::COMMENTAIRE)) $criteria->add(CommonAvisMembresCAOPeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::SOUS_PLI)) $criteria->add(CommonAvisMembresCAOPeer::SOUS_PLI, $this->sous_pli);
        if ($this->isColumnModified(CommonAvisMembresCAOPeer::TYPE_DEPOT_REPONSE)) $criteria->add(CommonAvisMembresCAOPeer::TYPE_DEPOT_REPONSE, $this->type_depot_reponse);

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
        $criteria = new Criteria(CommonAvisMembresCAOPeer::DATABASE_NAME);
        $criteria->add(CommonAvisMembresCAOPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonAvisMembresCAO (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setIdEnveloppe($this->getIdEnveloppe());
        $copyObj->setNomAgent($this->getNomAgent());
        $copyObj->setPrenomAgent($this->getPrenomAgent());
        $copyObj->setDateAction($this->getDateAction());
        $copyObj->setAdmissibilite($this->getAdmissibilite());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setSousPli($this->getSousPli());
        $copyObj->setTypeDepotReponse($this->getTypeDepotReponse());
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
     * @return CommonAvisMembresCAO Clone of current object.
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
     * @return CommonAvisMembresCAOPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAvisMembresCAOPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_agent = null;
        $this->id_enveloppe = null;
        $this->nom_agent = null;
        $this->prenom_agent = null;
        $this->date_action = null;
        $this->admissibilite = null;
        $this->commentaire = null;
        $this->sous_pli = null;
        $this->type_depot_reponse = null;
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
        return (string) $this->exportTo(CommonAvisMembresCAOPeer::DEFAULT_STRING_FORMAT);
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
