<?php


/**
 * Base class that represents a row from the 't_complement_formulaire' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTComplementFormulaire extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTComplementFormulairePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTComplementFormulairePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_complement_formulaire field.
     * @var        int
     */
    protected $id_complement_formulaire;

    /**
     * The value for the id_dossier_formulaire field.
     * @var        int
     */
    protected $id_dossier_formulaire;

    /**
     * The value for the numero_complement field.
     * @var        int
     */
    protected $numero_complement;

    /**
     * The value for the date_a_remettre field.
     * @var        string
     */
    protected $date_a_remettre;

    /**
     * The value for the date_remis_le field.
     * @var        string
     */
    protected $date_remis_le;

    /**
     * The value for the motif field.
     * @var        string
     */
    protected $motif;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the statut_demande field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $statut_demande;

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
        $this->statut_demande = '1';
    }

    /**
     * Initializes internal state of BaseCommonTComplementFormulaire object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_complement_formulaire] column value.
     * 
     * @return int
     */
    public function getIdComplementFormulaire()
    {

        return $this->id_complement_formulaire;
    }

    /**
     * Get the [id_dossier_formulaire] column value.
     * 
     * @return int
     */
    public function getIdDossierFormulaire()
    {

        return $this->id_dossier_formulaire;
    }

    /**
     * Get the [numero_complement] column value.
     * 
     * @return int
     */
    public function getNumeroComplement()
    {

        return $this->numero_complement;
    }

    /**
     * Get the [date_a_remettre] column value.
     * 
     * @return string
     */
    public function getDateARemettre()
    {

        return $this->date_a_remettre;
    }

    /**
     * Get the [date_remis_le] column value.
     * 
     * @return string
     */
    public function getDateRemisLe()
    {

        return $this->date_remis_le;
    }

    /**
     * Get the [motif] column value.
     * 
     * @return string
     */
    public function getMotif()
    {

        return $this->motif;
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
     * Get the [statut_demande] column value.
     * 
     * @return string
     */
    public function getStatutDemande()
    {

        return $this->statut_demande;
    }

    /**
     * Set the value of [id_complement_formulaire] column.
     * 
     * @param int $v new value
     * @return CommonTComplementFormulaire The current object (for fluent API support)
     */
    public function setIdComplementFormulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_complement_formulaire !== $v) {
            $this->id_complement_formulaire = $v;
            $this->modifiedColumns[] = CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE;
        }


        return $this;
    } // setIdComplementFormulaire()

    /**
     * Set the value of [id_dossier_formulaire] column.
     * 
     * @param int $v new value
     * @return CommonTComplementFormulaire The current object (for fluent API support)
     */
    public function setIdDossierFormulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_dossier_formulaire !== $v) {
            $this->id_dossier_formulaire = $v;
            $this->modifiedColumns[] = CommonTComplementFormulairePeer::ID_DOSSIER_FORMULAIRE;
        }


        return $this;
    } // setIdDossierFormulaire()

    /**
     * Set the value of [numero_complement] column.
     * 
     * @param int $v new value
     * @return CommonTComplementFormulaire The current object (for fluent API support)
     */
    public function setNumeroComplement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero_complement !== $v) {
            $this->numero_complement = $v;
            $this->modifiedColumns[] = CommonTComplementFormulairePeer::NUMERO_COMPLEMENT;
        }


        return $this;
    } // setNumeroComplement()

    /**
     * Set the value of [date_a_remettre] column.
     * 
     * @param string $v new value
     * @return CommonTComplementFormulaire The current object (for fluent API support)
     */
    public function setDateARemettre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_a_remettre !== $v) {
            $this->date_a_remettre = $v;
            $this->modifiedColumns[] = CommonTComplementFormulairePeer::DATE_A_REMETTRE;
        }


        return $this;
    } // setDateARemettre()

    /**
     * Set the value of [date_remis_le] column.
     * 
     * @param string $v new value
     * @return CommonTComplementFormulaire The current object (for fluent API support)
     */
    public function setDateRemisLe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_remis_le !== $v) {
            $this->date_remis_le = $v;
            $this->modifiedColumns[] = CommonTComplementFormulairePeer::DATE_REMIS_LE;
        }


        return $this;
    } // setDateRemisLe()

    /**
     * Set the value of [motif] column.
     * 
     * @param string $v new value
     * @return CommonTComplementFormulaire The current object (for fluent API support)
     */
    public function setMotif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif !== $v) {
            $this->motif = $v;
            $this->modifiedColumns[] = CommonTComplementFormulairePeer::MOTIF;
        }


        return $this;
    } // setMotif()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonTComplementFormulaire The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonTComplementFormulairePeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [statut_demande] column.
     * 
     * @param string $v new value
     * @return CommonTComplementFormulaire The current object (for fluent API support)
     */
    public function setStatutDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_demande !== $v) {
            $this->statut_demande = $v;
            $this->modifiedColumns[] = CommonTComplementFormulairePeer::STATUT_DEMANDE;
        }


        return $this;
    } // setStatutDemande()

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
            if ($this->statut_demande !== '1') {
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

            $this->id_complement_formulaire = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_dossier_formulaire = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->numero_complement = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->date_a_remettre = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->date_remis_le = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->motif = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->commentaire = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->statut_demande = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = CommonTComplementFormulairePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTComplementFormulaire object", $e);
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
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTComplementFormulairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTComplementFormulaireQuery::create()
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
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTComplementFormulairePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE;
        if (null !== $this->id_complement_formulaire) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_complement_formulaire`';
        }
        if ($this->isColumnModified(CommonTComplementFormulairePeer::ID_DOSSIER_FORMULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_dossier_formulaire`';
        }
        if ($this->isColumnModified(CommonTComplementFormulairePeer::NUMERO_COMPLEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`numero_complement`';
        }
        if ($this->isColumnModified(CommonTComplementFormulairePeer::DATE_A_REMETTRE)) {
            $modifiedColumns[':p' . $index++]  = '`date_a_remettre`';
        }
        if ($this->isColumnModified(CommonTComplementFormulairePeer::DATE_REMIS_LE)) {
            $modifiedColumns[':p' . $index++]  = '`date_remis_le`';
        }
        if ($this->isColumnModified(CommonTComplementFormulairePeer::MOTIF)) {
            $modifiedColumns[':p' . $index++]  = '`motif`';
        }
        if ($this->isColumnModified(CommonTComplementFormulairePeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonTComplementFormulairePeer::STATUT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`statut_demande`';
        }

        $sql = sprintf(
            'INSERT INTO `t_complement_formulaire` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_complement_formulaire`':						
                        $stmt->bindValue($identifier, $this->id_complement_formulaire, PDO::PARAM_INT);
                        break;
                    case '`id_dossier_formulaire`':						
                        $stmt->bindValue($identifier, $this->id_dossier_formulaire, PDO::PARAM_INT);
                        break;
                    case '`numero_complement`':						
                        $stmt->bindValue($identifier, $this->numero_complement, PDO::PARAM_INT);
                        break;
                    case '`date_a_remettre`':						
                        $stmt->bindValue($identifier, $this->date_a_remettre, PDO::PARAM_STR);
                        break;
                    case '`date_remis_le`':						
                        $stmt->bindValue($identifier, $this->date_remis_le, PDO::PARAM_STR);
                        break;
                    case '`motif`':						
                        $stmt->bindValue($identifier, $this->motif, PDO::PARAM_STR);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`statut_demande`':						
                        $stmt->bindValue($identifier, $this->statut_demande, PDO::PARAM_STR);
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
        $this->setIdComplementFormulaire($pk);

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


            if (($retval = CommonTComplementFormulairePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTComplementFormulairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdComplementFormulaire();
                break;
            case 1:
                return $this->getIdDossierFormulaire();
                break;
            case 2:
                return $this->getNumeroComplement();
                break;
            case 3:
                return $this->getDateARemettre();
                break;
            case 4:
                return $this->getDateRemisLe();
                break;
            case 5:
                return $this->getMotif();
                break;
            case 6:
                return $this->getCommentaire();
                break;
            case 7:
                return $this->getStatutDemande();
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
        if (isset($alreadyDumpedObjects['CommonTComplementFormulaire'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTComplementFormulaire'][$this->getPrimaryKey()] = true;
        $keys = CommonTComplementFormulairePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdComplementFormulaire(),
            $keys[1] => $this->getIdDossierFormulaire(),
            $keys[2] => $this->getNumeroComplement(),
            $keys[3] => $this->getDateARemettre(),
            $keys[4] => $this->getDateRemisLe(),
            $keys[5] => $this->getMotif(),
            $keys[6] => $this->getCommentaire(),
            $keys[7] => $this->getStatutDemande(),
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
        $pos = CommonTComplementFormulairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdComplementFormulaire($value);
                break;
            case 1:
                $this->setIdDossierFormulaire($value);
                break;
            case 2:
                $this->setNumeroComplement($value);
                break;
            case 3:
                $this->setDateARemettre($value);
                break;
            case 4:
                $this->setDateRemisLe($value);
                break;
            case 5:
                $this->setMotif($value);
                break;
            case 6:
                $this->setCommentaire($value);
                break;
            case 7:
                $this->setStatutDemande($value);
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
        $keys = CommonTComplementFormulairePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdComplementFormulaire($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdDossierFormulaire($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNumeroComplement($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDateARemettre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDateRemisLe($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMotif($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCommentaire($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStatutDemande($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTComplementFormulairePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE)) $criteria->add(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $this->id_complement_formulaire);
        if ($this->isColumnModified(CommonTComplementFormulairePeer::ID_DOSSIER_FORMULAIRE)) $criteria->add(CommonTComplementFormulairePeer::ID_DOSSIER_FORMULAIRE, $this->id_dossier_formulaire);
        if ($this->isColumnModified(CommonTComplementFormulairePeer::NUMERO_COMPLEMENT)) $criteria->add(CommonTComplementFormulairePeer::NUMERO_COMPLEMENT, $this->numero_complement);
        if ($this->isColumnModified(CommonTComplementFormulairePeer::DATE_A_REMETTRE)) $criteria->add(CommonTComplementFormulairePeer::DATE_A_REMETTRE, $this->date_a_remettre);
        if ($this->isColumnModified(CommonTComplementFormulairePeer::DATE_REMIS_LE)) $criteria->add(CommonTComplementFormulairePeer::DATE_REMIS_LE, $this->date_remis_le);
        if ($this->isColumnModified(CommonTComplementFormulairePeer::MOTIF)) $criteria->add(CommonTComplementFormulairePeer::MOTIF, $this->motif);
        if ($this->isColumnModified(CommonTComplementFormulairePeer::COMMENTAIRE)) $criteria->add(CommonTComplementFormulairePeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonTComplementFormulairePeer::STATUT_DEMANDE)) $criteria->add(CommonTComplementFormulairePeer::STATUT_DEMANDE, $this->statut_demande);

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
        $criteria = new Criteria(CommonTComplementFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $this->id_complement_formulaire);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdComplementFormulaire();
    }

    /**
     * Generic method to set the primary key (id_complement_formulaire column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdComplementFormulaire($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdComplementFormulaire();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTComplementFormulaire (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdDossierFormulaire($this->getIdDossierFormulaire());
        $copyObj->setNumeroComplement($this->getNumeroComplement());
        $copyObj->setDateARemettre($this->getDateARemettre());
        $copyObj->setDateRemisLe($this->getDateRemisLe());
        $copyObj->setMotif($this->getMotif());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setStatutDemande($this->getStatutDemande());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdComplementFormulaire(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTComplementFormulaire Clone of current object.
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
     * @return CommonTComplementFormulairePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTComplementFormulairePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_complement_formulaire = null;
        $this->id_dossier_formulaire = null;
        $this->numero_complement = null;
        $this->date_a_remettre = null;
        $this->date_remis_le = null;
        $this->motif = null;
        $this->commentaire = null;
        $this->statut_demande = null;
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
        return (string) $this->exportTo(CommonTComplementFormulairePeer::DEFAULT_STRING_FORMAT);
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
