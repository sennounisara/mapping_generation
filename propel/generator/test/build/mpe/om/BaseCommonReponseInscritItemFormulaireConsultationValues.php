<?php


/**
 * Base class that represents a row from the 'ReponseInscritItemFormulaireConsultationValues' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonReponseInscritItemFormulaireConsultationValues extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonReponseInscritItemFormulaireConsultationValuesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonReponseInscritItemFormulaireConsultationValuesPeer
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
     * The value for the iditemformulaireconsultation field.
     * @var        int
     */
    protected $iditemformulaireconsultation;

    /**
     * The value for the idreponseinscrititemformulaireconsultation field.
     * @var        int
     */
    protected $idreponseinscrititemformulaireconsultation;

    /**
     * The value for the valeur field.
     * @var        string
     */
    protected $valeur;

    /**
     * The value for the type_valeur field.
     * @var        int
     */
    protected $type_valeur;

    /**
     * The value for the precision_entreprise field.
     * @var        string
     */
    protected $precision_entreprise;

    /**
     * The value for the prix_unitaire field.
     * @var        string
     */
    protected $prix_unitaire;

    /**
     * The value for the tva field.
     * @var        string
     */
    protected $tva;

    /**
     * @var        CommonItemFormulaireConsultation
     */
    protected $aCommonItemFormulaireConsultation;

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
     * Get the [iditemformulaireconsultation] column value.
     * 
     * @return int
     */
    public function getIditemformulaireconsultation()
    {

        return $this->iditemformulaireconsultation;
    }

    /**
     * Get the [idreponseinscrititemformulaireconsultation] column value.
     * 
     * @return int
     */
    public function getIdreponseinscrititemformulaireconsultation()
    {

        return $this->idreponseinscrititemformulaireconsultation;
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
     * Get the [type_valeur] column value.
     * 
     * @return int
     */
    public function getTypeValeur()
    {

        return $this->type_valeur;
    }

    /**
     * Get the [precision_entreprise] column value.
     * 
     * @return string
     */
    public function getPrecisionEntreprise()
    {

        return $this->precision_entreprise;
    }

    /**
     * Get the [prix_unitaire] column value.
     * 
     * @return string
     */
    public function getPrixUnitaire()
    {

        return $this->prix_unitaire;
    }

    /**
     * Get the [tva] column value.
     * 
     * @return string
     */
    public function getTva()
    {

        return $this->tva;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonReponseInscritItemFormulaireConsultationValues The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonReponseInscritItemFormulaireConsultationValuesPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [iditemformulaireconsultation] column.
     * 
     * @param int $v new value
     * @return CommonReponseInscritItemFormulaireConsultationValues The current object (for fluent API support)
     */
    public function setIditemformulaireconsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->iditemformulaireconsultation !== $v) {
            $this->iditemformulaireconsultation = $v;
            $this->modifiedColumns[] = CommonReponseInscritItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION;
        }

        if ($this->aCommonItemFormulaireConsultation !== null && $this->aCommonItemFormulaireConsultation->getId() !== $v) {
            $this->aCommonItemFormulaireConsultation = null;
        }


        return $this;
    } // setIditemformulaireconsultation()

    /**
     * Set the value of [idreponseinscrititemformulaireconsultation] column.
     * 
     * @param int $v new value
     * @return CommonReponseInscritItemFormulaireConsultationValues The current object (for fluent API support)
     */
    public function setIdreponseinscrititemformulaireconsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idreponseinscrititemformulaireconsultation !== $v) {
            $this->idreponseinscrititemformulaireconsultation = $v;
            $this->modifiedColumns[] = CommonReponseInscritItemFormulaireConsultationValuesPeer::IDREPONSEINSCRITITEMFORMULAIRECONSULTATION;
        }


        return $this;
    } // setIdreponseinscrititemformulaireconsultation()

    /**
     * Set the value of [valeur] column.
     * 
     * @param string $v new value
     * @return CommonReponseInscritItemFormulaireConsultationValues The current object (for fluent API support)
     */
    public function setValeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valeur !== $v) {
            $this->valeur = $v;
            $this->modifiedColumns[] = CommonReponseInscritItemFormulaireConsultationValuesPeer::VALEUR;
        }


        return $this;
    } // setValeur()

    /**
     * Set the value of [type_valeur] column.
     * 
     * @param int $v new value
     * @return CommonReponseInscritItemFormulaireConsultationValues The current object (for fluent API support)
     */
    public function setTypeValeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_valeur !== $v) {
            $this->type_valeur = $v;
            $this->modifiedColumns[] = CommonReponseInscritItemFormulaireConsultationValuesPeer::TYPE_VALEUR;
        }


        return $this;
    } // setTypeValeur()

    /**
     * Set the value of [precision_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonReponseInscritItemFormulaireConsultationValues The current object (for fluent API support)
     */
    public function setPrecisionEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->precision_entreprise !== $v) {
            $this->precision_entreprise = $v;
            $this->modifiedColumns[] = CommonReponseInscritItemFormulaireConsultationValuesPeer::PRECISION_ENTREPRISE;
        }


        return $this;
    } // setPrecisionEntreprise()

    /**
     * Set the value of [prix_unitaire] column.
     * 
     * @param string $v new value
     * @return CommonReponseInscritItemFormulaireConsultationValues The current object (for fluent API support)
     */
    public function setPrixUnitaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prix_unitaire !== $v) {
            $this->prix_unitaire = $v;
            $this->modifiedColumns[] = CommonReponseInscritItemFormulaireConsultationValuesPeer::PRIX_UNITAIRE;
        }


        return $this;
    } // setPrixUnitaire()

    /**
     * Set the value of [tva] column.
     * 
     * @param string $v new value
     * @return CommonReponseInscritItemFormulaireConsultationValues The current object (for fluent API support)
     */
    public function setTva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tva !== $v) {
            $this->tva = $v;
            $this->modifiedColumns[] = CommonReponseInscritItemFormulaireConsultationValuesPeer::TVA;
        }


        return $this;
    } // setTva()

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
            $this->iditemformulaireconsultation = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idreponseinscrititemformulaireconsultation = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->valeur = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->type_valeur = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->precision_entreprise = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->prix_unitaire = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->tva = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = CommonReponseInscritItemFormulaireConsultationValuesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonReponseInscritItemFormulaireConsultationValues object", $e);
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

        if ($this->aCommonItemFormulaireConsultation !== null && $this->iditemformulaireconsultation !== $this->aCommonItemFormulaireConsultation->getId()) {
            $this->aCommonItemFormulaireConsultation = null;
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
            $con = Propel::getConnection(CommonReponseInscritItemFormulaireConsultationValuesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonReponseInscritItemFormulaireConsultationValuesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonItemFormulaireConsultation = null;
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
            $con = Propel::getConnection(CommonReponseInscritItemFormulaireConsultationValuesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonReponseInscritItemFormulaireConsultationValuesQuery::create()
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
            $con = Propel::getConnection(CommonReponseInscritItemFormulaireConsultationValuesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonReponseInscritItemFormulaireConsultationValuesPeer::addInstanceToPool($this);
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

            if ($this->aCommonItemFormulaireConsultation !== null) {
                if ($this->aCommonItemFormulaireConsultation->isModified() || $this->aCommonItemFormulaireConsultation->isNew()) {
                    $affectedRows += $this->aCommonItemFormulaireConsultation->save($con);
                }
                $this->setCommonItemFormulaireConsultation($this->aCommonItemFormulaireConsultation);
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

        $this->modifiedColumns[] = CommonReponseInscritItemFormulaireConsultationValuesPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonReponseInscritItemFormulaireConsultationValuesPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`idItemFormulaireConsultation`';
        }
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDREPONSEINSCRITITEMFORMULAIRECONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`idReponseInscritItemFormulaireConsultation`';
        }
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::VALEUR)) {
            $modifiedColumns[':p' . $index++]  = '`valeur`';
        }
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::TYPE_VALEUR)) {
            $modifiedColumns[':p' . $index++]  = '`type_valeur`';
        }
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::PRECISION_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`precision_entreprise`';
        }
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::PRIX_UNITAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`prix_unitaire`';
        }
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::TVA)) {
            $modifiedColumns[':p' . $index++]  = '`tva`';
        }

        $sql = sprintf(
            'INSERT INTO `ReponseInscritItemFormulaireConsultationValues` (%s) VALUES (%s)',
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
                    case '`idItemFormulaireConsultation`':						
                        $stmt->bindValue($identifier, $this->iditemformulaireconsultation, PDO::PARAM_INT);
                        break;
                    case '`idReponseInscritItemFormulaireConsultation`':						
                        $stmt->bindValue($identifier, $this->idreponseinscrititemformulaireconsultation, PDO::PARAM_INT);
                        break;
                    case '`valeur`':						
                        $stmt->bindValue($identifier, $this->valeur, PDO::PARAM_STR);
                        break;
                    case '`type_valeur`':						
                        $stmt->bindValue($identifier, $this->type_valeur, PDO::PARAM_INT);
                        break;
                    case '`precision_entreprise`':						
                        $stmt->bindValue($identifier, $this->precision_entreprise, PDO::PARAM_STR);
                        break;
                    case '`prix_unitaire`':						
                        $stmt->bindValue($identifier, $this->prix_unitaire, PDO::PARAM_STR);
                        break;
                    case '`tva`':						
                        $stmt->bindValue($identifier, $this->tva, PDO::PARAM_STR);
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

            if ($this->aCommonItemFormulaireConsultation !== null) {
                if (!$this->aCommonItemFormulaireConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonItemFormulaireConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonReponseInscritItemFormulaireConsultationValuesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonReponseInscritItemFormulaireConsultationValuesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIditemformulaireconsultation();
                break;
            case 2:
                return $this->getIdreponseinscrititemformulaireconsultation();
                break;
            case 3:
                return $this->getValeur();
                break;
            case 4:
                return $this->getTypeValeur();
                break;
            case 5:
                return $this->getPrecisionEntreprise();
                break;
            case 6:
                return $this->getPrixUnitaire();
                break;
            case 7:
                return $this->getTva();
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
        if (isset($alreadyDumpedObjects['CommonReponseInscritItemFormulaireConsultationValues'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonReponseInscritItemFormulaireConsultationValues'][$this->getPrimaryKey()] = true;
        $keys = CommonReponseInscritItemFormulaireConsultationValuesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIditemformulaireconsultation(),
            $keys[2] => $this->getIdreponseinscrititemformulaireconsultation(),
            $keys[3] => $this->getValeur(),
            $keys[4] => $this->getTypeValeur(),
            $keys[5] => $this->getPrecisionEntreprise(),
            $keys[6] => $this->getPrixUnitaire(),
            $keys[7] => $this->getTva(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonItemFormulaireConsultation) {
                $result['CommonItemFormulaireConsultation'] = $this->aCommonItemFormulaireConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonReponseInscritItemFormulaireConsultationValuesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIditemformulaireconsultation($value);
                break;
            case 2:
                $this->setIdreponseinscrititemformulaireconsultation($value);
                break;
            case 3:
                $this->setValeur($value);
                break;
            case 4:
                $this->setTypeValeur($value);
                break;
            case 5:
                $this->setPrecisionEntreprise($value);
                break;
            case 6:
                $this->setPrixUnitaire($value);
                break;
            case 7:
                $this->setTva($value);
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
        $keys = CommonReponseInscritItemFormulaireConsultationValuesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIditemformulaireconsultation($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdreponseinscrititemformulaireconsultation($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setValeur($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTypeValeur($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPrecisionEntreprise($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrixUnitaire($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTva($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonReponseInscritItemFormulaireConsultationValuesPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::ID)) $criteria->add(CommonReponseInscritItemFormulaireConsultationValuesPeer::ID, $this->id);
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION)) $criteria->add(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION, $this->iditemformulaireconsultation);
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDREPONSEINSCRITITEMFORMULAIRECONSULTATION)) $criteria->add(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDREPONSEINSCRITITEMFORMULAIRECONSULTATION, $this->idreponseinscrititemformulaireconsultation);
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::VALEUR)) $criteria->add(CommonReponseInscritItemFormulaireConsultationValuesPeer::VALEUR, $this->valeur);
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::TYPE_VALEUR)) $criteria->add(CommonReponseInscritItemFormulaireConsultationValuesPeer::TYPE_VALEUR, $this->type_valeur);
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::PRECISION_ENTREPRISE)) $criteria->add(CommonReponseInscritItemFormulaireConsultationValuesPeer::PRECISION_ENTREPRISE, $this->precision_entreprise);
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::PRIX_UNITAIRE)) $criteria->add(CommonReponseInscritItemFormulaireConsultationValuesPeer::PRIX_UNITAIRE, $this->prix_unitaire);
        if ($this->isColumnModified(CommonReponseInscritItemFormulaireConsultationValuesPeer::TVA)) $criteria->add(CommonReponseInscritItemFormulaireConsultationValuesPeer::TVA, $this->tva);

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
        $criteria = new Criteria(CommonReponseInscritItemFormulaireConsultationValuesPeer::DATABASE_NAME);
        $criteria->add(CommonReponseInscritItemFormulaireConsultationValuesPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonReponseInscritItemFormulaireConsultationValues (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIditemformulaireconsultation($this->getIditemformulaireconsultation());
        $copyObj->setIdreponseinscrititemformulaireconsultation($this->getIdreponseinscrititemformulaireconsultation());
        $copyObj->setValeur($this->getValeur());
        $copyObj->setTypeValeur($this->getTypeValeur());
        $copyObj->setPrecisionEntreprise($this->getPrecisionEntreprise());
        $copyObj->setPrixUnitaire($this->getPrixUnitaire());
        $copyObj->setTva($this->getTva());

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
     * @return CommonReponseInscritItemFormulaireConsultationValues Clone of current object.
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
     * @return CommonReponseInscritItemFormulaireConsultationValuesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonReponseInscritItemFormulaireConsultationValuesPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonItemFormulaireConsultation object.
     *
     * @param   CommonItemFormulaireConsultation $v
     * @return CommonReponseInscritItemFormulaireConsultationValues The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonItemFormulaireConsultation(CommonItemFormulaireConsultation $v = null)
    {
        if ($v === null) {
            $this->setIditemformulaireconsultation(NULL);
        } else {
            $this->setIditemformulaireconsultation($v->getId());
        }

        $this->aCommonItemFormulaireConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonItemFormulaireConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonReponseInscritItemFormulaireConsultationValues($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonItemFormulaireConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonItemFormulaireConsultation The associated CommonItemFormulaireConsultation object.
     * @throws PropelException
     */
    public function getCommonItemFormulaireConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonItemFormulaireConsultation === null && ($this->iditemformulaireconsultation !== null) && $doQuery) {
            $this->aCommonItemFormulaireConsultation = CommonItemFormulaireConsultationQuery::create()->findPk($this->iditemformulaireconsultation, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonItemFormulaireConsultation->addCommonReponseInscritItemFormulaireConsultationValuess($this);
             */
        }

        return $this->aCommonItemFormulaireConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->iditemformulaireconsultation = null;
        $this->idreponseinscrititemformulaireconsultation = null;
        $this->valeur = null;
        $this->type_valeur = null;
        $this->precision_entreprise = null;
        $this->prix_unitaire = null;
        $this->tva = null;
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
            if ($this->aCommonItemFormulaireConsultation instanceof Persistent) {
              $this->aCommonItemFormulaireConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonItemFormulaireConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonReponseInscritItemFormulaireConsultationValuesPeer::DEFAULT_STRING_FORMAT);
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