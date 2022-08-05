<?php


/**
 * Base class that represents a row from the 't_reponse_elec_formulaire' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTReponseElecFormulaire extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTReponseElecFormulairePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTReponseElecFormulairePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_reponse_elec_formulaire field.
     * @var        int
     */
    protected $id_reponse_elec_formulaire;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the id_entreprise field.
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the id_inscrit field.
     * @var        int
     */
    protected $id_inscrit;

    /**
     * The value for the statut_validation_globale field.
     * @var        int
     */
    protected $statut_validation_globale;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultation;

    /**
     * @var        PropelObjectCollection|CommonTDossierFormulaire[] Collection to store aggregation of CommonTDossierFormulaire objects.
     */
    protected $collCommonTDossierFormulaires;
    protected $collCommonTDossierFormulairesPartial;

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
    protected $commonTDossierFormulairesScheduledForDeletion = null;

    /**
     * Get the [id_reponse_elec_formulaire] column value.
     * 
     * @return int
     */
    public function getIdReponseElecFormulaire()
    {

        return $this->id_reponse_elec_formulaire;
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
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [id_entreprise] column value.
     * 
     * @return int
     */
    public function getIdEntreprise()
    {

        return $this->id_entreprise;
    }

    /**
     * Get the [id_inscrit] column value.
     * 
     * @return int
     */
    public function getIdInscrit()
    {

        return $this->id_inscrit;
    }

    /**
     * Get the [statut_validation_globale] column value.
     * 
     * @return int
     */
    public function getStatutValidationGlobale()
    {

        return $this->statut_validation_globale;
    }

    /**
     * Set the value of [id_reponse_elec_formulaire] column.
     * 
     * @param int $v new value
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     */
    public function setIdReponseElecFormulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_reponse_elec_formulaire !== $v) {
            $this->id_reponse_elec_formulaire = $v;
            $this->modifiedColumns[] = CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE;
        }


        return $this;
    } // setIdReponseElecFormulaire()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTReponseElecFormulairePeer::ORGANISME;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonTReponseElecFormulairePeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonTReponseElecFormulairePeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonTReponseElecFormulairePeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [statut_validation_globale] column.
     * 
     * @param int $v new value
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     */
    public function setStatutValidationGlobale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_validation_globale !== $v) {
            $this->statut_validation_globale = $v;
            $this->modifiedColumns[] = CommonTReponseElecFormulairePeer::STATUT_VALIDATION_GLOBALE;
        }


        return $this;
    } // setStatutValidationGlobale()

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

            $this->id_reponse_elec_formulaire = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->consultation_ref = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_entreprise = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_inscrit = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->statut_validation_globale = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = CommonTReponseElecFormulairePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTReponseElecFormulaire object", $e);
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

        if ($this->aCommonConsultation !== null && $this->organisme !== $this->aCommonConsultation->getOrganisme()) {
            $this->aCommonConsultation = null;
        }
        if ($this->aCommonConsultation !== null && $this->consultation_ref !== $this->aCommonConsultation->getReference()) {
            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonTReponseElecFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTReponseElecFormulairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultation = null;
            $this->collCommonTDossierFormulaires = null;

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
            $con = Propel::getConnection(CommonTReponseElecFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTReponseElecFormulaireQuery::create()
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
            $con = Propel::getConnection(CommonTReponseElecFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTReponseElecFormulairePeer::addInstanceToPool($this);
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

            if ($this->aCommonConsultation !== null) {
                if ($this->aCommonConsultation->isModified() || $this->aCommonConsultation->isNew()) {
                    $affectedRows += $this->aCommonConsultation->save($con);
                }
                $this->setCommonConsultation($this->aCommonConsultation);
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

            if ($this->commonTDossierFormulairesScheduledForDeletion !== null) {
                if (!$this->commonTDossierFormulairesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTDossierFormulairesScheduledForDeletion as $commonTDossierFormulaire) {
                        // need to save related object because we set the relation to null
                        $commonTDossierFormulaire->save($con);
                    }
                    $this->commonTDossierFormulairesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTDossierFormulaires !== null) {
                foreach ($this->collCommonTDossierFormulaires as $referrerFK) {
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

        $this->modifiedColumns[] = CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE;
        if (null !== $this->id_reponse_elec_formulaire) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_reponse_elec_formulaire`';
        }
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise`';
        }
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`id_inscrit`';
        }
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::STATUT_VALIDATION_GLOBALE)) {
            $modifiedColumns[':p' . $index++]  = '`statut_validation_globale`';
        }

        $sql = sprintf(
            'INSERT INTO `t_reponse_elec_formulaire` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_reponse_elec_formulaire`':						
                        $stmt->bindValue($identifier, $this->id_reponse_elec_formulaire, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`id_entreprise`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`id_inscrit`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`statut_validation_globale`':						
                        $stmt->bindValue($identifier, $this->statut_validation_globale, PDO::PARAM_INT);
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
        $this->setIdReponseElecFormulaire($pk);

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

            if ($this->aCommonConsultation !== null) {
                if (!$this->aCommonConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonTReponseElecFormulairePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonTDossierFormulaires !== null) {
                    foreach ($this->collCommonTDossierFormulaires as $referrerFK) {
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
        $pos = CommonTReponseElecFormulairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdReponseElecFormulaire();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getConsultationRef();
                break;
            case 3:
                return $this->getIdEntreprise();
                break;
            case 4:
                return $this->getIdInscrit();
                break;
            case 5:
                return $this->getStatutValidationGlobale();
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
        if (isset($alreadyDumpedObjects['CommonTReponseElecFormulaire'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTReponseElecFormulaire'][$this->getPrimaryKey()] = true;
        $keys = CommonTReponseElecFormulairePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdReponseElecFormulaire(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getConsultationRef(),
            $keys[3] => $this->getIdEntreprise(),
            $keys[4] => $this->getIdInscrit(),
            $keys[5] => $this->getStatutValidationGlobale(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultation) {
                $result['CommonConsultation'] = $this->aCommonConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonTDossierFormulaires) {
                $result['CommonTDossierFormulaires'] = $this->collCommonTDossierFormulaires->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonTReponseElecFormulairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdReponseElecFormulaire($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setConsultationRef($value);
                break;
            case 3:
                $this->setIdEntreprise($value);
                break;
            case 4:
                $this->setIdInscrit($value);
                break;
            case 5:
                $this->setStatutValidationGlobale($value);
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
        $keys = CommonTReponseElecFormulairePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdReponseElecFormulaire($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdEntreprise($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdInscrit($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStatutValidationGlobale($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTReponseElecFormulairePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE)) $criteria->add(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $this->id_reponse_elec_formulaire);
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::ORGANISME)) $criteria->add(CommonTReponseElecFormulairePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::CONSULTATION_REF)) $criteria->add(CommonTReponseElecFormulairePeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::ID_ENTREPRISE)) $criteria->add(CommonTReponseElecFormulairePeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::ID_INSCRIT)) $criteria->add(CommonTReponseElecFormulairePeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonTReponseElecFormulairePeer::STATUT_VALIDATION_GLOBALE)) $criteria->add(CommonTReponseElecFormulairePeer::STATUT_VALIDATION_GLOBALE, $this->statut_validation_globale);

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
        $criteria = new Criteria(CommonTReponseElecFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $this->id_reponse_elec_formulaire);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdReponseElecFormulaire();
    }

    /**
     * Generic method to set the primary key (id_reponse_elec_formulaire column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdReponseElecFormulaire($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdReponseElecFormulaire();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTReponseElecFormulaire (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setStatutValidationGlobale($this->getStatutValidationGlobale());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonTDossierFormulaires() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTDossierFormulaire($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdReponseElecFormulaire(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTReponseElecFormulaire Clone of current object.
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
     * @return CommonTReponseElecFormulairePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTReponseElecFormulairePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme(NULL);
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setConsultationRef(NULL);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonTReponseElecFormulaire($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultation The associated CommonConsultation object.
     * @throws PropelException
     */
    public function getCommonConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultation === null && (($this->organisme !== "" && $this->organisme !== null) && $this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()->findPk(array($this->consultation_ref, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonTReponseElecFormulaires($this);
             */
        }

        return $this->aCommonConsultation;
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
        if ('CommonTDossierFormulaire' == $relationName) {
            $this->initCommonTDossierFormulaires();
        }
    }

    /**
     * Clears out the collCommonTDossierFormulaires collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     * @see        addCommonTDossierFormulaires()
     */
    public function clearCommonTDossierFormulaires()
    {
        $this->collCommonTDossierFormulaires = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTDossierFormulairesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTDossierFormulaires collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTDossierFormulaires($v = true)
    {
        $this->collCommonTDossierFormulairesPartial = $v;
    }

    /**
     * Initializes the collCommonTDossierFormulaires collection.
     *
     * By default this just sets the collCommonTDossierFormulaires collection to an empty array (like clearcollCommonTDossierFormulaires());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTDossierFormulaires($overrideExisting = true)
    {
        if (null !== $this->collCommonTDossierFormulaires && !$overrideExisting) {
            return;
        }
        $this->collCommonTDossierFormulaires = new PropelObjectCollection();
        $this->collCommonTDossierFormulaires->setModel('CommonTDossierFormulaire');
    }

    /**
     * Gets an array of CommonTDossierFormulaire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonTReponseElecFormulaire is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTDossierFormulaire[] List of CommonTDossierFormulaire objects
     * @throws PropelException
     */
    public function getCommonTDossierFormulaires($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTDossierFormulairesPartial && !$this->isNew();
        if (null === $this->collCommonTDossierFormulaires || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTDossierFormulaires) {
                // return empty collection
                $this->initCommonTDossierFormulaires();
            } else {
                $collCommonTDossierFormulaires = CommonTDossierFormulaireQuery::create(null, $criteria)
                    ->filterByCommonTReponseElecFormulaire($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTDossierFormulairesPartial && count($collCommonTDossierFormulaires)) {
                      $this->initCommonTDossierFormulaires(false);

                      foreach ($collCommonTDossierFormulaires as $obj) {
                        if (false == $this->collCommonTDossierFormulaires->contains($obj)) {
                          $this->collCommonTDossierFormulaires->append($obj);
                        }
                      }

                      $this->collCommonTDossierFormulairesPartial = true;
                    }

                    $collCommonTDossierFormulaires->getInternalIterator()->rewind();

                    return $collCommonTDossierFormulaires;
                }

                if ($partial && $this->collCommonTDossierFormulaires) {
                    foreach ($this->collCommonTDossierFormulaires as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTDossierFormulaires[] = $obj;
                        }
                    }
                }

                $this->collCommonTDossierFormulaires = $collCommonTDossierFormulaires;
                $this->collCommonTDossierFormulairesPartial = false;
            }
        }

        return $this->collCommonTDossierFormulaires;
    }

    /**
     * Sets a collection of CommonTDossierFormulaire objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTDossierFormulaires A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     */
    public function setCommonTDossierFormulaires(PropelCollection $commonTDossierFormulaires, PropelPDO $con = null)
    {
        $commonTDossierFormulairesToDelete = $this->getCommonTDossierFormulaires(new Criteria(), $con)->diff($commonTDossierFormulaires);


        $this->commonTDossierFormulairesScheduledForDeletion = $commonTDossierFormulairesToDelete;

        foreach ($commonTDossierFormulairesToDelete as $commonTDossierFormulaireRemoved) {
            $commonTDossierFormulaireRemoved->setCommonTReponseElecFormulaire(null);
        }

        $this->collCommonTDossierFormulaires = null;
        foreach ($commonTDossierFormulaires as $commonTDossierFormulaire) {
            $this->addCommonTDossierFormulaire($commonTDossierFormulaire);
        }

        $this->collCommonTDossierFormulaires = $commonTDossierFormulaires;
        $this->collCommonTDossierFormulairesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTDossierFormulaire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTDossierFormulaire objects.
     * @throws PropelException
     */
    public function countCommonTDossierFormulaires(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTDossierFormulairesPartial && !$this->isNew();
        if (null === $this->collCommonTDossierFormulaires || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTDossierFormulaires) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTDossierFormulaires());
            }
            $query = CommonTDossierFormulaireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonTReponseElecFormulaire($this)
                ->count($con);
        }

        return count($this->collCommonTDossierFormulaires);
    }

    /**
     * Method called to associate a CommonTDossierFormulaire object to this object
     * through the CommonTDossierFormulaire foreign key attribute.
     *
     * @param   CommonTDossierFormulaire $l CommonTDossierFormulaire
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     */
    public function addCommonTDossierFormulaire(CommonTDossierFormulaire $l)
    {
        if ($this->collCommonTDossierFormulaires === null) {
            $this->initCommonTDossierFormulaires();
            $this->collCommonTDossierFormulairesPartial = true;
        }
        if (!in_array($l, $this->collCommonTDossierFormulaires->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTDossierFormulaire($l);
        }

        return $this;
    }

    /**
     * @param	CommonTDossierFormulaire $commonTDossierFormulaire The commonTDossierFormulaire object to add.
     */
    protected function doAddCommonTDossierFormulaire($commonTDossierFormulaire)
    {
        $this->collCommonTDossierFormulaires[]= $commonTDossierFormulaire;
        $commonTDossierFormulaire->setCommonTReponseElecFormulaire($this);
    }

    /**
     * @param	CommonTDossierFormulaire $commonTDossierFormulaire The commonTDossierFormulaire object to remove.
     * @return CommonTReponseElecFormulaire The current object (for fluent API support)
     */
    public function removeCommonTDossierFormulaire($commonTDossierFormulaire)
    {
        if ($this->getCommonTDossierFormulaires()->contains($commonTDossierFormulaire)) {
            $this->collCommonTDossierFormulaires->remove($this->collCommonTDossierFormulaires->search($commonTDossierFormulaire));
            if (null === $this->commonTDossierFormulairesScheduledForDeletion) {
                $this->commonTDossierFormulairesScheduledForDeletion = clone $this->collCommonTDossierFormulaires;
                $this->commonTDossierFormulairesScheduledForDeletion->clear();
            }
            $this->commonTDossierFormulairesScheduledForDeletion[]= clone $commonTDossierFormulaire;
            $commonTDossierFormulaire->setCommonTReponseElecFormulaire(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_reponse_elec_formulaire = null;
        $this->organisme = null;
        $this->consultation_ref = null;
        $this->id_entreprise = null;
        $this->id_inscrit = null;
        $this->statut_validation_globale = null;
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
            if ($this->collCommonTDossierFormulaires) {
                foreach ($this->collCommonTDossierFormulaires as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonConsultation instanceof Persistent) {
              $this->aCommonConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonTDossierFormulaires instanceof PropelCollection) {
            $this->collCommonTDossierFormulaires->clearIterator();
        }
        $this->collCommonTDossierFormulaires = null;
        $this->aCommonConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonTReponseElecFormulairePeer::DEFAULT_STRING_FORMAT);
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
