<?php


/**
 * Base class that represents a row from the 'FormXmlDestinataireOpoce' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonFormXmlDestinataireOpoce extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonFormXmlDestinataireOpocePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonFormXmlDestinataireOpocePeer
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
     * The value for the id_destinataire_opoce field.
     * @var        int
     */
    protected $id_destinataire_opoce;

    /**
     * The value for the xml field.
     * @var        string
     */
    protected $xml;

    /**
     * The value for the code_retour field.
     * @var        string
     */
    protected $code_retour;

    /**
     * The value for the message_retour field.
     * @var        string
     */
    protected $message_retour;

    /**
     * The value for the id_joue field.
     * @var        string
     */
    protected $id_joue;

    /**
     * The value for the date_pub_joue field.
     * @var        string
     */
    protected $date_pub_joue;

    /**
     * The value for the lien_publication field.
     * @var        string
     */
    protected $lien_publication;

    /**
     * The value for the no_doc_ext field.
     * @var        string
     */
    protected $no_doc_ext;

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
     * Get the [id_destinataire_opoce] column value.
     * 
     * @return int
     */
    public function getIdDestinataireOpoce()
    {

        return $this->id_destinataire_opoce;
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
     * Get the [code_retour] column value.
     * 
     * @return string
     */
    public function getCodeRetour()
    {

        return $this->code_retour;
    }

    /**
     * Get the [message_retour] column value.
     * 
     * @return string
     */
    public function getMessageRetour()
    {

        return $this->message_retour;
    }

    /**
     * Get the [id_joue] column value.
     * 
     * @return string
     */
    public function getIdJoue()
    {

        return $this->id_joue;
    }

    /**
     * Get the [date_pub_joue] column value.
     * 
     * @return string
     */
    public function getDatePubJoue()
    {

        return $this->date_pub_joue;
    }

    /**
     * Get the [lien_publication] column value.
     * 
     * @return string
     */
    public function getLienPublication()
    {

        return $this->lien_publication;
    }

    /**
     * Get the [no_doc_ext] column value.
     * 
     * @return string
     */
    public function getNoDocExt()
    {

        return $this->no_doc_ext;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonFormXmlDestinataireOpoce The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonFormXmlDestinataireOpoce The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_destinataire_opoce] column.
     * 
     * @param int $v new value
     * @return CommonFormXmlDestinataireOpoce The current object (for fluent API support)
     */
    public function setIdDestinataireOpoce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_destinataire_opoce !== $v) {
            $this->id_destinataire_opoce = $v;
            $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::ID_DESTINATAIRE_OPOCE;
        }


        return $this;
    } // setIdDestinataireOpoce()

    /**
     * Set the value of [xml] column.
     * 
     * @param string $v new value
     * @return CommonFormXmlDestinataireOpoce The current object (for fluent API support)
     */
    public function setXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->xml !== $v) {
            $this->xml = $v;
            $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::XML;
        }


        return $this;
    } // setXml()

    /**
     * Set the value of [code_retour] column.
     * 
     * @param string $v new value
     * @return CommonFormXmlDestinataireOpoce The current object (for fluent API support)
     */
    public function setCodeRetour($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_retour !== $v) {
            $this->code_retour = $v;
            $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::CODE_RETOUR;
        }


        return $this;
    } // setCodeRetour()

    /**
     * Set the value of [message_retour] column.
     * 
     * @param string $v new value
     * @return CommonFormXmlDestinataireOpoce The current object (for fluent API support)
     */
    public function setMessageRetour($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->message_retour !== $v) {
            $this->message_retour = $v;
            $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::MESSAGE_RETOUR;
        }


        return $this;
    } // setMessageRetour()

    /**
     * Set the value of [id_joue] column.
     * 
     * @param string $v new value
     * @return CommonFormXmlDestinataireOpoce The current object (for fluent API support)
     */
    public function setIdJoue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_joue !== $v) {
            $this->id_joue = $v;
            $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::ID_JOUE;
        }


        return $this;
    } // setIdJoue()

    /**
     * Set the value of [date_pub_joue] column.
     * 
     * @param string $v new value
     * @return CommonFormXmlDestinataireOpoce The current object (for fluent API support)
     */
    public function setDatePubJoue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_pub_joue !== $v) {
            $this->date_pub_joue = $v;
            $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::DATE_PUB_JOUE;
        }


        return $this;
    } // setDatePubJoue()

    /**
     * Set the value of [lien_publication] column.
     * 
     * @param string $v new value
     * @return CommonFormXmlDestinataireOpoce The current object (for fluent API support)
     */
    public function setLienPublication($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lien_publication !== $v) {
            $this->lien_publication = $v;
            $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::LIEN_PUBLICATION;
        }


        return $this;
    } // setLienPublication()

    /**
     * Set the value of [no_doc_ext] column.
     * 
     * @param string $v new value
     * @return CommonFormXmlDestinataireOpoce The current object (for fluent API support)
     */
    public function setNoDocExt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->no_doc_ext !== $v) {
            $this->no_doc_ext = $v;
            $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::NO_DOC_EXT;
        }


        return $this;
    } // setNoDocExt()

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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_destinataire_opoce = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->xml = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->code_retour = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->message_retour = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->id_joue = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->date_pub_joue = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->lien_publication = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->no_doc_ext = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = CommonFormXmlDestinataireOpocePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonFormXmlDestinataireOpoce object", $e);
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
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonFormXmlDestinataireOpocePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonFormXmlDestinataireOpoceQuery::create()
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
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonFormXmlDestinataireOpocePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonFormXmlDestinataireOpocePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonFormXmlDestinataireOpocePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::ID_DESTINATAIRE_OPOCE)) {
            $modifiedColumns[':p' . $index++]  = '`id_destinataire_opoce`';
        }
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::XML)) {
            $modifiedColumns[':p' . $index++]  = '`xml`';
        }
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::CODE_RETOUR)) {
            $modifiedColumns[':p' . $index++]  = '`code_retour`';
        }
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::MESSAGE_RETOUR)) {
            $modifiedColumns[':p' . $index++]  = '`message_retour`';
        }
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::ID_JOUE)) {
            $modifiedColumns[':p' . $index++]  = '`id_joue`';
        }
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::DATE_PUB_JOUE)) {
            $modifiedColumns[':p' . $index++]  = '`date_pub_joue`';
        }
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::LIEN_PUBLICATION)) {
            $modifiedColumns[':p' . $index++]  = '`lien_publication`';
        }
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::NO_DOC_EXT)) {
            $modifiedColumns[':p' . $index++]  = '`no_doc_ext`';
        }

        $sql = sprintf(
            'INSERT INTO `FormXmlDestinataireOpoce` (%s) VALUES (%s)',
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
                    case '`id_destinataire_opoce`':						
                        $stmt->bindValue($identifier, $this->id_destinataire_opoce, PDO::PARAM_INT);
                        break;
                    case '`xml`':						
                        $stmt->bindValue($identifier, $this->xml, PDO::PARAM_STR);
                        break;
                    case '`code_retour`':						
                        $stmt->bindValue($identifier, $this->code_retour, PDO::PARAM_STR);
                        break;
                    case '`message_retour`':						
                        $stmt->bindValue($identifier, $this->message_retour, PDO::PARAM_STR);
                        break;
                    case '`id_joue`':						
                        $stmt->bindValue($identifier, $this->id_joue, PDO::PARAM_STR);
                        break;
                    case '`date_pub_joue`':						
                        $stmt->bindValue($identifier, $this->date_pub_joue, PDO::PARAM_STR);
                        break;
                    case '`lien_publication`':						
                        $stmt->bindValue($identifier, $this->lien_publication, PDO::PARAM_STR);
                        break;
                    case '`no_doc_ext`':						
                        $stmt->bindValue($identifier, $this->no_doc_ext, PDO::PARAM_STR);
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


            if (($retval = CommonFormXmlDestinataireOpocePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonFormXmlDestinataireOpocePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDestinataireOpoce();
                break;
            case 3:
                return $this->getXml();
                break;
            case 4:
                return $this->getCodeRetour();
                break;
            case 5:
                return $this->getMessageRetour();
                break;
            case 6:
                return $this->getIdJoue();
                break;
            case 7:
                return $this->getDatePubJoue();
                break;
            case 8:
                return $this->getLienPublication();
                break;
            case 9:
                return $this->getNoDocExt();
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
        if (isset($alreadyDumpedObjects['CommonFormXmlDestinataireOpoce'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonFormXmlDestinataireOpoce'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonFormXmlDestinataireOpocePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdDestinataireOpoce(),
            $keys[3] => $this->getXml(),
            $keys[4] => $this->getCodeRetour(),
            $keys[5] => $this->getMessageRetour(),
            $keys[6] => $this->getIdJoue(),
            $keys[7] => $this->getDatePubJoue(),
            $keys[8] => $this->getLienPublication(),
            $keys[9] => $this->getNoDocExt(),
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
        $pos = CommonFormXmlDestinataireOpocePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDestinataireOpoce($value);
                break;
            case 3:
                $this->setXml($value);
                break;
            case 4:
                $this->setCodeRetour($value);
                break;
            case 5:
                $this->setMessageRetour($value);
                break;
            case 6:
                $this->setIdJoue($value);
                break;
            case 7:
                $this->setDatePubJoue($value);
                break;
            case 8:
                $this->setLienPublication($value);
                break;
            case 9:
                $this->setNoDocExt($value);
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
        $keys = CommonFormXmlDestinataireOpocePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdDestinataireOpoce($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setXml($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCodeRetour($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMessageRetour($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdJoue($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDatePubJoue($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLienPublication($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNoDocExt($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::ID)) $criteria->add(CommonFormXmlDestinataireOpocePeer::ID, $this->id);
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::ORGANISME)) $criteria->add(CommonFormXmlDestinataireOpocePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::ID_DESTINATAIRE_OPOCE)) $criteria->add(CommonFormXmlDestinataireOpocePeer::ID_DESTINATAIRE_OPOCE, $this->id_destinataire_opoce);
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::XML)) $criteria->add(CommonFormXmlDestinataireOpocePeer::XML, $this->xml);
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::CODE_RETOUR)) $criteria->add(CommonFormXmlDestinataireOpocePeer::CODE_RETOUR, $this->code_retour);
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::MESSAGE_RETOUR)) $criteria->add(CommonFormXmlDestinataireOpocePeer::MESSAGE_RETOUR, $this->message_retour);
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::ID_JOUE)) $criteria->add(CommonFormXmlDestinataireOpocePeer::ID_JOUE, $this->id_joue);
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::DATE_PUB_JOUE)) $criteria->add(CommonFormXmlDestinataireOpocePeer::DATE_PUB_JOUE, $this->date_pub_joue);
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::LIEN_PUBLICATION)) $criteria->add(CommonFormXmlDestinataireOpocePeer::LIEN_PUBLICATION, $this->lien_publication);
        if ($this->isColumnModified(CommonFormXmlDestinataireOpocePeer::NO_DOC_EXT)) $criteria->add(CommonFormXmlDestinataireOpocePeer::NO_DOC_EXT, $this->no_doc_ext);

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
        $criteria = new Criteria(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME);
        $criteria->add(CommonFormXmlDestinataireOpocePeer::ID, $this->id);
        $criteria->add(CommonFormXmlDestinataireOpocePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonFormXmlDestinataireOpoce (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdDestinataireOpoce($this->getIdDestinataireOpoce());
        $copyObj->setXml($this->getXml());
        $copyObj->setCodeRetour($this->getCodeRetour());
        $copyObj->setMessageRetour($this->getMessageRetour());
        $copyObj->setIdJoue($this->getIdJoue());
        $copyObj->setDatePubJoue($this->getDatePubJoue());
        $copyObj->setLienPublication($this->getLienPublication());
        $copyObj->setNoDocExt($this->getNoDocExt());
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
     * @return CommonFormXmlDestinataireOpoce Clone of current object.
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
     * @return CommonFormXmlDestinataireOpocePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonFormXmlDestinataireOpocePeer();
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
        $this->id_destinataire_opoce = null;
        $this->xml = null;
        $this->code_retour = null;
        $this->message_retour = null;
        $this->id_joue = null;
        $this->date_pub_joue = null;
        $this->lien_publication = null;
        $this->no_doc_ext = null;
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
        return (string) $this->exportTo(CommonFormXmlDestinataireOpocePeer::DEFAULT_STRING_FORMAT);
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
