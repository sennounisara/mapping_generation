<?php


/**
 * Base class that represents a row from the 'ReferentielFormXml' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonReferentielFormXml extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonReferentielFormXmlPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonReferentielFormXmlPeer
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
     * The value for the id_type_xml field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_type_xml;

    /**
     * The value for the consultation_ref field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $consultation_ref;

    /**
     * The value for the xml field.
     * @var        string
     */
    protected $xml;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the statut field.
     * @var        string
     */
    protected $statut;

    /**
     * The value for the id_compte_boamp field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_compte_boamp;

    /**
     * @var        CommonReferentielTypeXml
     */
    protected $aCommonReferentielTypeXml;

    /**
     * @var        PropelObjectCollection|CommonAnnonceMoniteur[] Collection to store aggregation of CommonAnnonceMoniteur objects.
     */
    protected $collCommonAnnonceMoniteurs;
    protected $collCommonAnnonceMoniteursPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonAnnonceMoniteursScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->id_type_xml = 0;
        $this->consultation_ref = '';
        $this->id_compte_boamp = 0;
    }

    /**
     * Initializes internal state of BaseCommonReferentielFormXml object.
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
     * Get the [id_type_xml] column value.
     * 
     * @return int
     */
    public function getIdTypeXml()
    {

        return $this->id_type_xml;
    }

    /**
     * Get the [consultation_ref] column value.
     * 
     * @return string
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
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
     * Get the [date_creation] column value.
     * 
     * @return string
     */
    public function getDateCreation()
    {

        return $this->date_creation;
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
     * Get the [id_compte_boamp] column value.
     * 
     * @return int
     */
    public function getIdCompteBoamp()
    {

        return $this->id_compte_boamp;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonReferentielFormXmlPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonReferentielFormXmlPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_type_xml] column.
     * 
     * @param int $v new value
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function setIdTypeXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_xml !== $v) {
            $this->id_type_xml = $v;
            $this->modifiedColumns[] = CommonReferentielFormXmlPeer::ID_TYPE_XML;
        }

        if ($this->aCommonReferentielTypeXml !== null && $this->aCommonReferentielTypeXml->getId() !== $v) {
            $this->aCommonReferentielTypeXml = null;
        }


        return $this;
    } // setIdTypeXml()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param string $v new value
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonReferentielFormXmlPeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [xml] column.
     * 
     * @param string $v new value
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function setXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->xml !== $v) {
            $this->xml = $v;
            $this->modifiedColumns[] = CommonReferentielFormXmlPeer::XML;
        }


        return $this;
    } // setXml()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonReferentielFormXmlPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [statut] column.
     * 
     * @param string $v new value
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonReferentielFormXmlPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [id_compte_boamp] column.
     * 
     * @param int $v new value
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function setIdCompteBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_compte_boamp !== $v) {
            $this->id_compte_boamp = $v;
            $this->modifiedColumns[] = CommonReferentielFormXmlPeer::ID_COMPTE_BOAMP;
        }


        return $this;
    } // setIdCompteBoamp()

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
            if ($this->id_type_xml !== 0) {
                return false;
            }

            if ($this->consultation_ref !== '') {
                return false;
            }

            if ($this->id_compte_boamp !== 0) {
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
            $this->id_type_xml = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->consultation_ref = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->xml = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_creation = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->statut = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_compte_boamp = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = CommonReferentielFormXmlPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonReferentielFormXml object", $e);
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

        if ($this->aCommonReferentielTypeXml !== null && $this->id_type_xml !== $this->aCommonReferentielTypeXml->getId()) {
            $this->aCommonReferentielTypeXml = null;
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
            $con = Propel::getConnection(CommonReferentielFormXmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonReferentielFormXmlPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonReferentielTypeXml = null;
            $this->collCommonAnnonceMoniteurs = null;

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
            $con = Propel::getConnection(CommonReferentielFormXmlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonReferentielFormXmlQuery::create()
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
            $con = Propel::getConnection(CommonReferentielFormXmlPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonReferentielFormXmlPeer::addInstanceToPool($this);
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

            if ($this->aCommonReferentielTypeXml !== null) {
                if ($this->aCommonReferentielTypeXml->isModified() || $this->aCommonReferentielTypeXml->isNew()) {
                    $affectedRows += $this->aCommonReferentielTypeXml->save($con);
                }
                $this->setCommonReferentielTypeXml($this->aCommonReferentielTypeXml);
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

            if ($this->commonAnnonceMoniteursScheduledForDeletion !== null) {
                if (!$this->commonAnnonceMoniteursScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonAnnonceMoniteursScheduledForDeletion as $commonAnnonceMoniteur) {
                        // need to save related object because we set the relation to null
                        $commonAnnonceMoniteur->save($con);
                    }
                    $this->commonAnnonceMoniteursScheduledForDeletion = null;
                }
            }

            if ($this->collCommonAnnonceMoniteurs !== null) {
                foreach ($this->collCommonAnnonceMoniteurs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CommonReferentielFormXmlPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonReferentielFormXmlPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::ID_TYPE_XML)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_xml`';
        }
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::XML)) {
            $modifiedColumns[':p' . $index++]  = '`xml`';
        }
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::ID_COMPTE_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`id_compte_boamp`';
        }

        $sql = sprintf(
            'INSERT INTO `ReferentielFormXml` (%s) VALUES (%s)',
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
                    case '`id_type_xml`':						
                        $stmt->bindValue($identifier, $this->id_type_xml, PDO::PARAM_INT);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_STR);
                        break;
                    case '`xml`':						
                        $stmt->bindValue($identifier, $this->xml, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_STR);
                        break;
                    case '`id_compte_boamp`':						
                        $stmt->bindValue($identifier, $this->id_compte_boamp, PDO::PARAM_INT);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonReferentielTypeXml !== null) {
                if (!$this->aCommonReferentielTypeXml->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonReferentielTypeXml->getValidationFailures());
                }
            }


            if (($retval = CommonReferentielFormXmlPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonAnnonceMoniteurs !== null) {
                    foreach ($this->collCommonAnnonceMoniteurs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = CommonReferentielFormXmlPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTypeXml();
                break;
            case 3:
                return $this->getConsultationRef();
                break;
            case 4:
                return $this->getXml();
                break;
            case 5:
                return $this->getDateCreation();
                break;
            case 6:
                return $this->getStatut();
                break;
            case 7:
                return $this->getIdCompteBoamp();
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
        if (isset($alreadyDumpedObjects['CommonReferentielFormXml'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonReferentielFormXml'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonReferentielFormXmlPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdTypeXml(),
            $keys[3] => $this->getConsultationRef(),
            $keys[4] => $this->getXml(),
            $keys[5] => $this->getDateCreation(),
            $keys[6] => $this->getStatut(),
            $keys[7] => $this->getIdCompteBoamp(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonReferentielTypeXml) {
                $result['CommonReferentielTypeXml'] = $this->aCommonReferentielTypeXml->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonAnnonceMoniteurs) {
                $result['CommonAnnonceMoniteurs'] = $this->collCommonAnnonceMoniteurs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonReferentielFormXmlPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTypeXml($value);
                break;
            case 3:
                $this->setConsultationRef($value);
                break;
            case 4:
                $this->setXml($value);
                break;
            case 5:
                $this->setDateCreation($value);
                break;
            case 6:
                $this->setStatut($value);
                break;
            case 7:
                $this->setIdCompteBoamp($value);
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
        $keys = CommonReferentielFormXmlPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdTypeXml($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setConsultationRef($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setXml($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateCreation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStatut($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdCompteBoamp($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonReferentielFormXmlPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonReferentielFormXmlPeer::ID)) $criteria->add(CommonReferentielFormXmlPeer::ID, $this->id);
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::ORGANISME)) $criteria->add(CommonReferentielFormXmlPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::ID_TYPE_XML)) $criteria->add(CommonReferentielFormXmlPeer::ID_TYPE_XML, $this->id_type_xml);
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::CONSULTATION_REF)) $criteria->add(CommonReferentielFormXmlPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::XML)) $criteria->add(CommonReferentielFormXmlPeer::XML, $this->xml);
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::DATE_CREATION)) $criteria->add(CommonReferentielFormXmlPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::STATUT)) $criteria->add(CommonReferentielFormXmlPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonReferentielFormXmlPeer::ID_COMPTE_BOAMP)) $criteria->add(CommonReferentielFormXmlPeer::ID_COMPTE_BOAMP, $this->id_compte_boamp);

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
        $criteria = new Criteria(CommonReferentielFormXmlPeer::DATABASE_NAME);
        $criteria->add(CommonReferentielFormXmlPeer::ID, $this->id);
        $criteria->add(CommonReferentielFormXmlPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonReferentielFormXml (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdTypeXml($this->getIdTypeXml());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setXml($this->getXml());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setIdCompteBoamp($this->getIdCompteBoamp());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonAnnonceMoniteurs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonAnnonceMoniteur($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

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
     * @return CommonReferentielFormXml Clone of current object.
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
     * @return CommonReferentielFormXmlPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonReferentielFormXmlPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonReferentielTypeXml object.
     *
     * @param   CommonReferentielTypeXml $v
     * @return CommonReferentielFormXml The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonReferentielTypeXml(CommonReferentielTypeXml $v = null)
    {
        if ($v === null) {
            $this->setIdTypeXml(0);
        } else {
            $this->setIdTypeXml($v->getId());
        }

        $this->aCommonReferentielTypeXml = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonReferentielTypeXml object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonReferentielFormXml($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonReferentielTypeXml object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonReferentielTypeXml The associated CommonReferentielTypeXml object.
     * @throws PropelException
     */
    public function getCommonReferentielTypeXml(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonReferentielTypeXml === null && ($this->id_type_xml !== null) && $doQuery) {
            $this->aCommonReferentielTypeXml = CommonReferentielTypeXmlQuery::create()
                ->filterByCommonReferentielFormXml($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonReferentielTypeXml->addCommonReferentielFormXmls($this);
             */
        }

        return $this->aCommonReferentielTypeXml;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CommonAnnonceMoniteur' == $relationName) {
            $this->initCommonAnnonceMoniteurs();
        }
    }

    /**
     * Clears out the collCommonAnnonceMoniteurs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonReferentielFormXml The current object (for fluent API support)
     * @see        addCommonAnnonceMoniteurs()
     */
    public function clearCommonAnnonceMoniteurs()
    {
        $this->collCommonAnnonceMoniteurs = null; // important to set this to null since that means it is uninitialized
        $this->collCommonAnnonceMoniteursPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonAnnonceMoniteurs collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonAnnonceMoniteurs($v = true)
    {
        $this->collCommonAnnonceMoniteursPartial = $v;
    }

    /**
     * Initializes the collCommonAnnonceMoniteurs collection.
     *
     * By default this just sets the collCommonAnnonceMoniteurs collection to an empty array (like clearcollCommonAnnonceMoniteurs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonAnnonceMoniteurs($overrideExisting = true)
    {
        if (null !== $this->collCommonAnnonceMoniteurs && !$overrideExisting) {
            return;
        }
        $this->collCommonAnnonceMoniteurs = new PropelObjectCollection();
        $this->collCommonAnnonceMoniteurs->setModel('CommonAnnonceMoniteur');
    }

    /**
     * Gets an array of CommonAnnonceMoniteur objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonReferentielFormXml is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonAnnonceMoniteur[] List of CommonAnnonceMoniteur objects
     * @throws PropelException
     */
    public function getCommonAnnonceMoniteurs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonAnnonceMoniteursPartial && !$this->isNew();
        if (null === $this->collCommonAnnonceMoniteurs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonAnnonceMoniteurs) {
                // return empty collection
                $this->initCommonAnnonceMoniteurs();
            } else {
                $collCommonAnnonceMoniteurs = CommonAnnonceMoniteurQuery::create(null, $criteria)
                    ->filterByCommonReferentielFormXml($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonAnnonceMoniteursPartial && count($collCommonAnnonceMoniteurs)) {
                      $this->initCommonAnnonceMoniteurs(false);

                      foreach ($collCommonAnnonceMoniteurs as $obj) {
                        if (false == $this->collCommonAnnonceMoniteurs->contains($obj)) {
                          $this->collCommonAnnonceMoniteurs->append($obj);
                        }
                      }

                      $this->collCommonAnnonceMoniteursPartial = true;
                    }

                    $collCommonAnnonceMoniteurs->getInternalIterator()->rewind();

                    return $collCommonAnnonceMoniteurs;
                }

                if ($partial && $this->collCommonAnnonceMoniteurs) {
                    foreach ($this->collCommonAnnonceMoniteurs as $obj) {
                        if ($obj->isNew()) {
                            $collCommonAnnonceMoniteurs[] = $obj;
                        }
                    }
                }

                $this->collCommonAnnonceMoniteurs = $collCommonAnnonceMoniteurs;
                $this->collCommonAnnonceMoniteursPartial = false;
            }
        }

        return $this->collCommonAnnonceMoniteurs;
    }

    /**
     * Sets a collection of CommonAnnonceMoniteur objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonAnnonceMoniteurs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function setCommonAnnonceMoniteurs(PropelCollection $commonAnnonceMoniteurs, PropelPDO $con = null)
    {
        $commonAnnonceMoniteursToDelete = $this->getCommonAnnonceMoniteurs(new Criteria(), $con)->diff($commonAnnonceMoniteurs);


        $this->commonAnnonceMoniteursScheduledForDeletion = $commonAnnonceMoniteursToDelete;

        foreach ($commonAnnonceMoniteursToDelete as $commonAnnonceMoniteurRemoved) {
            $commonAnnonceMoniteurRemoved->setCommonReferentielFormXml(null);
        }

        $this->collCommonAnnonceMoniteurs = null;
        foreach ($commonAnnonceMoniteurs as $commonAnnonceMoniteur) {
            $this->addCommonAnnonceMoniteur($commonAnnonceMoniteur);
        }

        $this->collCommonAnnonceMoniteurs = $commonAnnonceMoniteurs;
        $this->collCommonAnnonceMoniteursPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonAnnonceMoniteur objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonAnnonceMoniteur objects.
     * @throws PropelException
     */
    public function countCommonAnnonceMoniteurs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonAnnonceMoniteursPartial && !$this->isNew();
        if (null === $this->collCommonAnnonceMoniteurs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonAnnonceMoniteurs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonAnnonceMoniteurs());
            }
            $query = CommonAnnonceMoniteurQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonReferentielFormXml($this)
                ->count($con);
        }

        return count($this->collCommonAnnonceMoniteurs);
    }

    /**
     * Method called to associate a CommonAnnonceMoniteur object to this object
     * through the CommonAnnonceMoniteur foreign key attribute.
     *
     * @param   CommonAnnonceMoniteur $l CommonAnnonceMoniteur
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function addCommonAnnonceMoniteur(CommonAnnonceMoniteur $l)
    {
        if ($this->collCommonAnnonceMoniteurs === null) {
            $this->initCommonAnnonceMoniteurs();
            $this->collCommonAnnonceMoniteursPartial = true;
        }
        if (!in_array($l, $this->collCommonAnnonceMoniteurs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonAnnonceMoniteur($l);
        }

        return $this;
    }

    /**
     * @param	CommonAnnonceMoniteur $commonAnnonceMoniteur The commonAnnonceMoniteur object to add.
     */
    protected function doAddCommonAnnonceMoniteur($commonAnnonceMoniteur)
    {
        $this->collCommonAnnonceMoniteurs[]= $commonAnnonceMoniteur;
        $commonAnnonceMoniteur->setCommonReferentielFormXml($this);
    }

    /**
     * @param	CommonAnnonceMoniteur $commonAnnonceMoniteur The commonAnnonceMoniteur object to remove.
     * @return CommonReferentielFormXml The current object (for fluent API support)
     */
    public function removeCommonAnnonceMoniteur($commonAnnonceMoniteur)
    {
        if ($this->getCommonAnnonceMoniteurs()->contains($commonAnnonceMoniteur)) {
            $this->collCommonAnnonceMoniteurs->remove($this->collCommonAnnonceMoniteurs->search($commonAnnonceMoniteur));
            if (null === $this->commonAnnonceMoniteursScheduledForDeletion) {
                $this->commonAnnonceMoniteursScheduledForDeletion = clone $this->collCommonAnnonceMoniteurs;
                $this->commonAnnonceMoniteursScheduledForDeletion->clear();
            }
            $this->commonAnnonceMoniteursScheduledForDeletion[]= clone $commonAnnonceMoniteur;
            $commonAnnonceMoniteur->setCommonReferentielFormXml(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonReferentielFormXml is new, it will return
     * an empty collection; or if this CommonReferentielFormXml has previously
     * been saved, it will retrieve related CommonAnnonceMoniteurs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonReferentielFormXml.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonAnnonceMoniteur[] List of CommonAnnonceMoniteur objects
     */
    public function getCommonAnnonceMoniteursJoinCommonReferentielDestinationFormXml($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonAnnonceMoniteurQuery::create(null, $criteria);
        $query->joinWith('CommonReferentielDestinationFormXml', $join_behavior);

        return $this->getCommonAnnonceMoniteurs($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->id_type_xml = null;
        $this->consultation_ref = null;
        $this->xml = null;
        $this->date_creation = null;
        $this->statut = null;
        $this->id_compte_boamp = null;
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
            if ($this->collCommonAnnonceMoniteurs) {
                foreach ($this->collCommonAnnonceMoniteurs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonReferentielTypeXml instanceof Persistent) {
              $this->aCommonReferentielTypeXml->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonAnnonceMoniteurs instanceof PropelCollection) {
            $this->collCommonAnnonceMoniteurs->clearIterator();
        }
        $this->collCommonAnnonceMoniteurs = null;
        $this->aCommonReferentielTypeXml = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonReferentielFormXmlPeer::DEFAULT_STRING_FORMAT);
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
