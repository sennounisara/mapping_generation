<?php


/**
 * Base class that represents a row from the 't_CAO_Seance_Invite' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOSeanceInvite extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCAOSeanceInvitePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCAOSeanceInvitePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_seance_invite field.
     * @var        string
     */
    protected $id_seance_invite;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_ordre_de_passage field.
     * @var        string
     */
    protected $id_ordre_de_passage;

    /**
     * The value for the id_intervenant_externe field.
     * @var        string
     */
    protected $id_intervenant_externe;

    /**
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the id_ref_val_type_voix field.
     * @var        int
     */
    protected $id_ref_val_type_voix;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgent;

    /**
     * @var        CommonTCAOIntervenantExterne
     */
    protected $aCommonTCAOIntervenantExterne;

    /**
     * @var        CommonTCAOOrdreDePassage
     */
    protected $aCommonTCAOOrdreDePassage;

    /**
     * @var        CommonOrganisme
     */
    protected $aCommonOrganisme;

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
     * Get the [id_seance_invite] column value.
     * 
     * @return string
     */
    public function getIdSeanceInvite()
    {

        return $this->id_seance_invite;
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
     * Get the [id_ordre_de_passage] column value.
     * 
     * @return string
     */
    public function getIdOrdreDePassage()
    {

        return $this->id_ordre_de_passage;
    }

    /**
     * Get the [id_intervenant_externe] column value.
     * 
     * @return string
     */
    public function getIdIntervenantExterne()
    {

        return $this->id_intervenant_externe;
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
     * Get the [id_ref_val_type_voix] column value.
     * 
     * @return int
     */
    public function getIdRefValTypeVoix()
    {

        return $this->id_ref_val_type_voix;
    }

    /**
     * Set the value of [id_seance_invite] column.
     * 
     * @param string $v new value
     * @return CommonTCAOSeanceInvite The current object (for fluent API support)
     */
    public function setIdSeanceInvite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_seance_invite !== $v) {
            $this->id_seance_invite = $v;
            $this->modifiedColumns[] = CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE;
        }


        return $this;
    } // setIdSeanceInvite()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTCAOSeanceInvite The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTCAOSeanceInvitePeer::ORGANISME;
        }

        if ($this->aCommonOrganisme !== null && $this->aCommonOrganisme->getAcronyme() !== $v) {
            $this->aCommonOrganisme = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_ordre_de_passage] column.
     * 
     * @param string $v new value
     * @return CommonTCAOSeanceInvite The current object (for fluent API support)
     */
    public function setIdOrdreDePassage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_ordre_de_passage !== $v) {
            $this->id_ordre_de_passage = $v;
            $this->modifiedColumns[] = CommonTCAOSeanceInvitePeer::ID_ORDRE_DE_PASSAGE;
        }

        if ($this->aCommonTCAOOrdreDePassage !== null && $this->aCommonTCAOOrdreDePassage->getIdOrdreDePassage() !== $v) {
            $this->aCommonTCAOOrdreDePassage = null;
        }


        return $this;
    } // setIdOrdreDePassage()

    /**
     * Set the value of [id_intervenant_externe] column.
     * 
     * @param string $v new value
     * @return CommonTCAOSeanceInvite The current object (for fluent API support)
     */
    public function setIdIntervenantExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_intervenant_externe !== $v) {
            $this->id_intervenant_externe = $v;
            $this->modifiedColumns[] = CommonTCAOSeanceInvitePeer::ID_INTERVENANT_EXTERNE;
        }

        if ($this->aCommonTCAOIntervenantExterne !== null && $this->aCommonTCAOIntervenantExterne->getIdIntervenantExterne() !== $v) {
            $this->aCommonTCAOIntervenantExterne = null;
        }


        return $this;
    } // setIdIntervenantExterne()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonTCAOSeanceInvite The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonTCAOSeanceInvitePeer::ID_AGENT;
        }

        if ($this->aCommonAgent !== null && $this->aCommonAgent->getId() !== $v) {
            $this->aCommonAgent = null;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [id_ref_val_type_voix] column.
     * 
     * @param int $v new value
     * @return CommonTCAOSeanceInvite The current object (for fluent API support)
     */
    public function setIdRefValTypeVoix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ref_val_type_voix !== $v) {
            $this->id_ref_val_type_voix = $v;
            $this->modifiedColumns[] = CommonTCAOSeanceInvitePeer::ID_REF_VAL_TYPE_VOIX;
        }


        return $this;
    } // setIdRefValTypeVoix()

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

            $this->id_seance_invite = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_ordre_de_passage = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_intervenant_externe = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_agent = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->id_ref_val_type_voix = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = CommonTCAOSeanceInvitePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCAOSeanceInvite object", $e);
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

        if ($this->aCommonOrganisme !== null && $this->organisme !== $this->aCommonOrganisme->getAcronyme()) {
            $this->aCommonOrganisme = null;
        }
        if ($this->aCommonTCAOOrdreDePassage !== null && $this->id_ordre_de_passage !== $this->aCommonTCAOOrdreDePassage->getIdOrdreDePassage()) {
            $this->aCommonTCAOOrdreDePassage = null;
        }
        if ($this->aCommonTCAOIntervenantExterne !== null && $this->id_intervenant_externe !== $this->aCommonTCAOIntervenantExterne->getIdIntervenantExterne()) {
            $this->aCommonTCAOIntervenantExterne = null;
        }
        if ($this->aCommonAgent !== null && $this->id_agent !== $this->aCommonAgent->getId()) {
            $this->aCommonAgent = null;
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
            $con = Propel::getConnection(CommonTCAOSeanceInvitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCAOSeanceInvitePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonAgent = null;
            $this->aCommonTCAOIntervenantExterne = null;
            $this->aCommonTCAOOrdreDePassage = null;
            $this->aCommonOrganisme = null;
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
            $con = Propel::getConnection(CommonTCAOSeanceInvitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCAOSeanceInviteQuery::create()
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
            $con = Propel::getConnection(CommonTCAOSeanceInvitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCAOSeanceInvitePeer::addInstanceToPool($this);
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

            if ($this->aCommonAgent !== null) {
                if ($this->aCommonAgent->isModified() || $this->aCommonAgent->isNew()) {
                    $affectedRows += $this->aCommonAgent->save($con);
                }
                $this->setCommonAgent($this->aCommonAgent);
            }

            if ($this->aCommonTCAOIntervenantExterne !== null) {
                if ($this->aCommonTCAOIntervenantExterne->isModified() || $this->aCommonTCAOIntervenantExterne->isNew()) {
                    $affectedRows += $this->aCommonTCAOIntervenantExterne->save($con);
                }
                $this->setCommonTCAOIntervenantExterne($this->aCommonTCAOIntervenantExterne);
            }

            if ($this->aCommonTCAOOrdreDePassage !== null) {
                if ($this->aCommonTCAOOrdreDePassage->isModified() || $this->aCommonTCAOOrdreDePassage->isNew()) {
                    $affectedRows += $this->aCommonTCAOOrdreDePassage->save($con);
                }
                $this->setCommonTCAOOrdreDePassage($this->aCommonTCAOOrdreDePassage);
            }

            if ($this->aCommonOrganisme !== null) {
                if ($this->aCommonOrganisme->isModified() || $this->aCommonOrganisme->isNew()) {
                    $affectedRows += $this->aCommonOrganisme->save($con);
                }
                $this->setCommonOrganisme($this->aCommonOrganisme);
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

        $this->modifiedColumns[] = CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE;
        if (null !== $this->id_seance_invite) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE)) {
            $modifiedColumns[':p' . $index++]  = '`id_seance_invite`';
        }
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ID_ORDRE_DE_PASSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`id_ordre_de_passage`';
        }
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ID_INTERVENANT_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`id_intervenant_externe`';
        }
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ID_REF_VAL_TYPE_VOIX)) {
            $modifiedColumns[':p' . $index++]  = '`id_ref_val_type_voix`';
        }

        $sql = sprintf(
            'INSERT INTO `t_CAO_Seance_Invite` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_seance_invite`':						
                        $stmt->bindValue($identifier, $this->id_seance_invite, PDO::PARAM_STR);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_ordre_de_passage`':						
                        $stmt->bindValue($identifier, $this->id_ordre_de_passage, PDO::PARAM_STR);
                        break;
                    case '`id_intervenant_externe`':						
                        $stmt->bindValue($identifier, $this->id_intervenant_externe, PDO::PARAM_STR);
                        break;
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`id_ref_val_type_voix`':						
                        $stmt->bindValue($identifier, $this->id_ref_val_type_voix, PDO::PARAM_INT);
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
        $this->setIdSeanceInvite($pk);

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

            if ($this->aCommonAgent !== null) {
                if (!$this->aCommonAgent->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgent->getValidationFailures());
                }
            }

            if ($this->aCommonTCAOIntervenantExterne !== null) {
                if (!$this->aCommonTCAOIntervenantExterne->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTCAOIntervenantExterne->getValidationFailures());
                }
            }

            if ($this->aCommonTCAOOrdreDePassage !== null) {
                if (!$this->aCommonTCAOOrdreDePassage->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTCAOOrdreDePassage->getValidationFailures());
                }
            }

            if ($this->aCommonOrganisme !== null) {
                if (!$this->aCommonOrganisme->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonOrganisme->getValidationFailures());
                }
            }


            if (($retval = CommonTCAOSeanceInvitePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTCAOSeanceInvitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdSeanceInvite();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdOrdreDePassage();
                break;
            case 3:
                return $this->getIdIntervenantExterne();
                break;
            case 4:
                return $this->getIdAgent();
                break;
            case 5:
                return $this->getIdRefValTypeVoix();
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
        if (isset($alreadyDumpedObjects['CommonTCAOSeanceInvite'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCAOSeanceInvite'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTCAOSeanceInvitePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdSeanceInvite(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdOrdreDePassage(),
            $keys[3] => $this->getIdIntervenantExterne(),
            $keys[4] => $this->getIdAgent(),
            $keys[5] => $this->getIdRefValTypeVoix(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonAgent) {
                $result['CommonAgent'] = $this->aCommonAgent->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonTCAOIntervenantExterne) {
                $result['CommonTCAOIntervenantExterne'] = $this->aCommonTCAOIntervenantExterne->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonTCAOOrdreDePassage) {
                $result['CommonTCAOOrdreDePassage'] = $this->aCommonTCAOOrdreDePassage->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonOrganisme) {
                $result['CommonOrganisme'] = $this->aCommonOrganisme->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonTCAOSeanceInvitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdSeanceInvite($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdOrdreDePassage($value);
                break;
            case 3:
                $this->setIdIntervenantExterne($value);
                break;
            case 4:
                $this->setIdAgent($value);
                break;
            case 5:
                $this->setIdRefValTypeVoix($value);
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
        $keys = CommonTCAOSeanceInvitePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdSeanceInvite($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdOrdreDePassage($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdIntervenantExterne($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdAgent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdRefValTypeVoix($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCAOSeanceInvitePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE)) $criteria->add(CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE, $this->id_seance_invite);
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ORGANISME)) $criteria->add(CommonTCAOSeanceInvitePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ID_ORDRE_DE_PASSAGE)) $criteria->add(CommonTCAOSeanceInvitePeer::ID_ORDRE_DE_PASSAGE, $this->id_ordre_de_passage);
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ID_INTERVENANT_EXTERNE)) $criteria->add(CommonTCAOSeanceInvitePeer::ID_INTERVENANT_EXTERNE, $this->id_intervenant_externe);
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ID_AGENT)) $criteria->add(CommonTCAOSeanceInvitePeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonTCAOSeanceInvitePeer::ID_REF_VAL_TYPE_VOIX)) $criteria->add(CommonTCAOSeanceInvitePeer::ID_REF_VAL_TYPE_VOIX, $this->id_ref_val_type_voix);

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
        $criteria = new Criteria(CommonTCAOSeanceInvitePeer::DATABASE_NAME);
        $criteria->add(CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE, $this->id_seance_invite);
        $criteria->add(CommonTCAOSeanceInvitePeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdSeanceInvite();
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
        $this->setIdSeanceInvite($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdSeanceInvite()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTCAOSeanceInvite (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdOrdreDePassage($this->getIdOrdreDePassage());
        $copyObj->setIdIntervenantExterne($this->getIdIntervenantExterne());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setIdRefValTypeVoix($this->getIdRefValTypeVoix());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdSeanceInvite(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTCAOSeanceInvite Clone of current object.
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
     * @return CommonTCAOSeanceInvitePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCAOSeanceInvitePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonTCAOSeanceInvite The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgent(CommonAgent $v = null)
    {
        if ($v === null) {
            $this->setIdAgent(NULL);
        } else {
            $this->setIdAgent($v->getId());
        }

        $this->aCommonAgent = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgent object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCAOSeanceInvite($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonAgent object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonAgent The associated CommonAgent object.
     * @throws PropelException
     */
    public function getCommonAgent(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgent === null && ($this->id_agent !== null) && $doQuery) {
            $this->aCommonAgent = CommonAgentQuery::create()->findPk($this->id_agent, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgent->addCommonTCAOSeanceInvites($this);
             */
        }

        return $this->aCommonAgent;
    }

    /**
     * Declares an association between this object and a CommonTCAOIntervenantExterne object.
     *
     * @param   CommonTCAOIntervenantExterne $v
     * @return CommonTCAOSeanceInvite The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTCAOIntervenantExterne(CommonTCAOIntervenantExterne $v = null)
    {
        if ($v === null) {
            $this->setIdIntervenantExterne(NULL);
        } else {
            $this->setIdIntervenantExterne($v->getIdIntervenantExterne());
        }

        $this->aCommonTCAOIntervenantExterne = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTCAOIntervenantExterne object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCAOSeanceInvite($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTCAOIntervenantExterne object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTCAOIntervenantExterne The associated CommonTCAOIntervenantExterne object.
     * @throws PropelException
     */
    public function getCommonTCAOIntervenantExterne(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTCAOIntervenantExterne === null && (($this->id_intervenant_externe !== "" && $this->id_intervenant_externe !== null)) && $doQuery) {
            $this->aCommonTCAOIntervenantExterne = CommonTCAOIntervenantExterneQuery::create()
                ->filterByCommonTCAOSeanceInvite($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTCAOIntervenantExterne->addCommonTCAOSeanceInvites($this);
             */
        }

        return $this->aCommonTCAOIntervenantExterne;
    }

    /**
     * Declares an association between this object and a CommonTCAOOrdreDePassage object.
     *
     * @param   CommonTCAOOrdreDePassage $v
     * @return CommonTCAOSeanceInvite The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTCAOOrdreDePassage(CommonTCAOOrdreDePassage $v = null)
    {
        if ($v === null) {
            $this->setIdOrdreDePassage(NULL);
        } else {
            $this->setIdOrdreDePassage($v->getIdOrdreDePassage());
        }

        $this->aCommonTCAOOrdreDePassage = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTCAOOrdreDePassage object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCAOSeanceInvite($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTCAOOrdreDePassage object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTCAOOrdreDePassage The associated CommonTCAOOrdreDePassage object.
     * @throws PropelException
     */
    public function getCommonTCAOOrdreDePassage(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTCAOOrdreDePassage === null && (($this->id_ordre_de_passage !== "" && $this->id_ordre_de_passage !== null)) && $doQuery) {
            $this->aCommonTCAOOrdreDePassage = CommonTCAOOrdreDePassageQuery::create()
                ->filterByCommonTCAOSeanceInvite($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTCAOOrdreDePassage->addCommonTCAOSeanceInvites($this);
             */
        }

        return $this->aCommonTCAOOrdreDePassage;
    }

    /**
     * Declares an association between this object and a CommonOrganisme object.
     *
     * @param   CommonOrganisme $v
     * @return CommonTCAOSeanceInvite The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonOrganisme(CommonOrganisme $v = null)
    {
        if ($v === null) {
            $this->setOrganisme(NULL);
        } else {
            $this->setOrganisme($v->getAcronyme());
        }

        $this->aCommonOrganisme = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonOrganisme object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTCAOSeanceInvite($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonOrganisme object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonOrganisme The associated CommonOrganisme object.
     * @throws PropelException
     */
    public function getCommonOrganisme(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonOrganisme === null && (($this->organisme !== "" && $this->organisme !== null)) && $doQuery) {
            $this->aCommonOrganisme = CommonOrganismeQuery::create()
                ->filterByCommonTCAOSeanceInvite($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonOrganisme->addCommonTCAOSeanceInvites($this);
             */
        }

        return $this->aCommonOrganisme;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_seance_invite = null;
        $this->organisme = null;
        $this->id_ordre_de_passage = null;
        $this->id_intervenant_externe = null;
        $this->id_agent = null;
        $this->id_ref_val_type_voix = null;
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
            if ($this->aCommonAgent instanceof Persistent) {
              $this->aCommonAgent->clearAllReferences($deep);
            }
            if ($this->aCommonTCAOIntervenantExterne instanceof Persistent) {
              $this->aCommonTCAOIntervenantExterne->clearAllReferences($deep);
            }
            if ($this->aCommonTCAOOrdreDePassage instanceof Persistent) {
              $this->aCommonTCAOOrdreDePassage->clearAllReferences($deep);
            }
            if ($this->aCommonOrganisme instanceof Persistent) {
              $this->aCommonOrganisme->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonAgent = null;
        $this->aCommonTCAOIntervenantExterne = null;
        $this->aCommonTCAOOrdreDePassage = null;
        $this->aCommonOrganisme = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTCAOSeanceInvitePeer::DEFAULT_STRING_FORMAT);
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
