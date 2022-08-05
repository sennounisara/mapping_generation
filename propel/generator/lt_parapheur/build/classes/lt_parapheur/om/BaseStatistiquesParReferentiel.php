<?php


/**
 * Base class that represents a row from the 'statistiques_par_referentiel' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseStatistiquesParReferentiel extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'StatistiquesParReferentielPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        StatistiquesParReferentielPeer
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
     * The value for the type_referentiel field.
     * @var        int
     */
    protected $type_referentiel;

    /**
     * The value for the id_val_refentiel field.
     * @var        int
     */
    protected $id_val_refentiel;

    /**
     * The value for the total_reclamations_par_mois field.
     * @var        int
     */
    protected $total_reclamations_par_mois;

    /**
     * The value for the cumul_a_fin_mois field.
     * @var        int
     */
    protected $cumul_a_fin_mois;

    /**
     * The value for the evolution_par_mois field.
     * @var        int
     */
    protected $evolution_par_mois;

    /**
     * The value for the id_statistiques field.
     * @var        int
     */
    protected $id_statistiques;

    /**
     * The value for the annee field.
     * @var        int
     */
    protected $annee;

    /**
     * The value for the mois field.
     * @var        string
     */
    protected $mois;

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
     * Get the [type_referentiel] column value.
     * 
     * @return int
     */
    public function getTypeReferentiel()
    {

        return $this->type_referentiel;
    }

    /**
     * Get the [id_val_refentiel] column value.
     * 
     * @return int
     */
    public function getIdValRefentiel()
    {

        return $this->id_val_refentiel;
    }

    /**
     * Get the [total_reclamations_par_mois] column value.
     * 
     * @return int
     */
    public function getTotalReclamationsParMois()
    {

        return $this->total_reclamations_par_mois;
    }

    /**
     * Get the [cumul_a_fin_mois] column value.
     * 
     * @return int
     */
    public function getCumulAFinMois()
    {

        return $this->cumul_a_fin_mois;
    }

    /**
     * Get the [evolution_par_mois] column value.
     * 
     * @return int
     */
    public function getEvolutionParMois()
    {

        return $this->evolution_par_mois;
    }

    /**
     * Get the [id_statistiques] column value.
     * 
     * @return int
     */
    public function getIdStatistiques()
    {

        return $this->id_statistiques;
    }

    /**
     * Get the [annee] column value.
     * 
     * @return int
     */
    public function getAnnee()
    {

        return $this->annee;
    }

    /**
     * Get the [mois] column value.
     * 
     * @return string
     */
    public function getMois()
    {

        return $this->mois;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return StatistiquesParReferentiel The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = StatistiquesParReferentielPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [type_referentiel] column.
     * 
     * @param int $v new value
     * @return StatistiquesParReferentiel The current object (for fluent API support)
     */
    public function setTypeReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_referentiel !== $v) {
            $this->type_referentiel = $v;
            $this->modifiedColumns[] = StatistiquesParReferentielPeer::TYPE_REFERENTIEL;
        }


        return $this;
    } // setTypeReferentiel()

    /**
     * Set the value of [id_val_refentiel] column.
     * 
     * @param int $v new value
     * @return StatistiquesParReferentiel The current object (for fluent API support)
     */
    public function setIdValRefentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_val_refentiel !== $v) {
            $this->id_val_refentiel = $v;
            $this->modifiedColumns[] = StatistiquesParReferentielPeer::ID_VAL_REFENTIEL;
        }


        return $this;
    } // setIdValRefentiel()

    /**
     * Set the value of [total_reclamations_par_mois] column.
     * 
     * @param int $v new value
     * @return StatistiquesParReferentiel The current object (for fluent API support)
     */
    public function setTotalReclamationsParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_reclamations_par_mois !== $v) {
            $this->total_reclamations_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesParReferentielPeer::TOTAL_RECLAMATIONS_PAR_MOIS;
        }


        return $this;
    } // setTotalReclamationsParMois()

    /**
     * Set the value of [cumul_a_fin_mois] column.
     * 
     * @param int $v new value
     * @return StatistiquesParReferentiel The current object (for fluent API support)
     */
    public function setCumulAFinMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cumul_a_fin_mois !== $v) {
            $this->cumul_a_fin_mois = $v;
            $this->modifiedColumns[] = StatistiquesParReferentielPeer::CUMUL_A_FIN_MOIS;
        }


        return $this;
    } // setCumulAFinMois()

    /**
     * Set the value of [evolution_par_mois] column.
     * 
     * @param int $v new value
     * @return StatistiquesParReferentiel The current object (for fluent API support)
     */
    public function setEvolutionParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->evolution_par_mois !== $v) {
            $this->evolution_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesParReferentielPeer::EVOLUTION_PAR_MOIS;
        }


        return $this;
    } // setEvolutionParMois()

    /**
     * Set the value of [id_statistiques] column.
     * 
     * @param int $v new value
     * @return StatistiquesParReferentiel The current object (for fluent API support)
     */
    public function setIdStatistiques($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_statistiques !== $v) {
            $this->id_statistiques = $v;
            $this->modifiedColumns[] = StatistiquesParReferentielPeer::ID_STATISTIQUES;
        }


        return $this;
    } // setIdStatistiques()

    /**
     * Set the value of [annee] column.
     * 
     * @param int $v new value
     * @return StatistiquesParReferentiel The current object (for fluent API support)
     */
    public function setAnnee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->annee !== $v) {
            $this->annee = $v;
            $this->modifiedColumns[] = StatistiquesParReferentielPeer::ANNEE;
        }


        return $this;
    } // setAnnee()

    /**
     * Set the value of [mois] column.
     * 
     * @param string $v new value
     * @return StatistiquesParReferentiel The current object (for fluent API support)
     */
    public function setMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mois !== $v) {
            $this->mois = $v;
            $this->modifiedColumns[] = StatistiquesParReferentielPeer::MOIS;
        }


        return $this;
    } // setMois()

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
            $this->type_referentiel = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_val_refentiel = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->total_reclamations_par_mois = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->cumul_a_fin_mois = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->evolution_par_mois = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_statistiques = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->annee = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->mois = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = StatistiquesParReferentielPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating StatistiquesParReferentiel object", $e);
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
            $con = Propel::getConnection(StatistiquesParReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = StatistiquesParReferentielPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(StatistiquesParReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = StatistiquesParReferentielQuery::create()
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
            $con = Propel::getConnection(StatistiquesParReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                StatistiquesParReferentielPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = StatistiquesParReferentielPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . StatistiquesParReferentielPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(StatistiquesParReferentielPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(StatistiquesParReferentielPeer::TYPE_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_REFERENTIEL`';
        }
        if ($this->isColumnModified(StatistiquesParReferentielPeer::ID_VAL_REFENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_VAL_REFENTIEL`';
        }
        if ($this->isColumnModified(StatistiquesParReferentielPeer::TOTAL_RECLAMATIONS_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`TOTAL_RECLAMATIONS_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesParReferentielPeer::CUMUL_A_FIN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`CUMUL_A_FIN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesParReferentielPeer::EVOLUTION_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`EVOLUTION_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesParReferentielPeer::ID_STATISTIQUES)) {
            $modifiedColumns[':p' . $index++]  = '`ID_STATISTIQUES`';
        }
        if ($this->isColumnModified(StatistiquesParReferentielPeer::ANNEE)) {
            $modifiedColumns[':p' . $index++]  = '`ANNEE`';
        }
        if ($this->isColumnModified(StatistiquesParReferentielPeer::MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`MOIS`';
        }

        $sql = sprintf(
            'INSERT INTO `statistiques_par_referentiel` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`TYPE_REFERENTIEL`':						
                        $stmt->bindValue($identifier, $this->type_referentiel, PDO::PARAM_INT);
                        break;
                    case '`ID_VAL_REFENTIEL`':						
                        $stmt->bindValue($identifier, $this->id_val_refentiel, PDO::PARAM_INT);
                        break;
                    case '`TOTAL_RECLAMATIONS_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->total_reclamations_par_mois, PDO::PARAM_INT);
                        break;
                    case '`CUMUL_A_FIN_MOIS`':						
                        $stmt->bindValue($identifier, $this->cumul_a_fin_mois, PDO::PARAM_INT);
                        break;
                    case '`EVOLUTION_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->evolution_par_mois, PDO::PARAM_INT);
                        break;
                    case '`ID_STATISTIQUES`':						
                        $stmt->bindValue($identifier, $this->id_statistiques, PDO::PARAM_INT);
                        break;
                    case '`ANNEE`':						
                        $stmt->bindValue($identifier, $this->annee, PDO::PARAM_INT);
                        break;
                    case '`MOIS`':						
                        $stmt->bindValue($identifier, $this->mois, PDO::PARAM_STR);
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


            if (($retval = StatistiquesParReferentielPeer::doValidate($this, $columns)) !== true) {
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
        $pos = StatistiquesParReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTypeReferentiel();
                break;
            case 2:
                return $this->getIdValRefentiel();
                break;
            case 3:
                return $this->getTotalReclamationsParMois();
                break;
            case 4:
                return $this->getCumulAFinMois();
                break;
            case 5:
                return $this->getEvolutionParMois();
                break;
            case 6:
                return $this->getIdStatistiques();
                break;
            case 7:
                return $this->getAnnee();
                break;
            case 8:
                return $this->getMois();
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
        if (isset($alreadyDumpedObjects['StatistiquesParReferentiel'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['StatistiquesParReferentiel'][$this->getPrimaryKey()] = true;
        $keys = StatistiquesParReferentielPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getTypeReferentiel(),
            $keys[2] => $this->getIdValRefentiel(),
            $keys[3] => $this->getTotalReclamationsParMois(),
            $keys[4] => $this->getCumulAFinMois(),
            $keys[5] => $this->getEvolutionParMois(),
            $keys[6] => $this->getIdStatistiques(),
            $keys[7] => $this->getAnnee(),
            $keys[8] => $this->getMois(),
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
        $pos = StatistiquesParReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTypeReferentiel($value);
                break;
            case 2:
                $this->setIdValRefentiel($value);
                break;
            case 3:
                $this->setTotalReclamationsParMois($value);
                break;
            case 4:
                $this->setCumulAFinMois($value);
                break;
            case 5:
                $this->setEvolutionParMois($value);
                break;
            case 6:
                $this->setIdStatistiques($value);
                break;
            case 7:
                $this->setAnnee($value);
                break;
            case 8:
                $this->setMois($value);
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
        $keys = StatistiquesParReferentielPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTypeReferentiel($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdValRefentiel($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTotalReclamationsParMois($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCumulAFinMois($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEvolutionParMois($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdStatistiques($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAnnee($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMois($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(StatistiquesParReferentielPeer::DATABASE_NAME);

        if ($this->isColumnModified(StatistiquesParReferentielPeer::ID)) $criteria->add(StatistiquesParReferentielPeer::ID, $this->id);
        if ($this->isColumnModified(StatistiquesParReferentielPeer::TYPE_REFERENTIEL)) $criteria->add(StatistiquesParReferentielPeer::TYPE_REFERENTIEL, $this->type_referentiel);
        if ($this->isColumnModified(StatistiquesParReferentielPeer::ID_VAL_REFENTIEL)) $criteria->add(StatistiquesParReferentielPeer::ID_VAL_REFENTIEL, $this->id_val_refentiel);
        if ($this->isColumnModified(StatistiquesParReferentielPeer::TOTAL_RECLAMATIONS_PAR_MOIS)) $criteria->add(StatistiquesParReferentielPeer::TOTAL_RECLAMATIONS_PAR_MOIS, $this->total_reclamations_par_mois);
        if ($this->isColumnModified(StatistiquesParReferentielPeer::CUMUL_A_FIN_MOIS)) $criteria->add(StatistiquesParReferentielPeer::CUMUL_A_FIN_MOIS, $this->cumul_a_fin_mois);
        if ($this->isColumnModified(StatistiquesParReferentielPeer::EVOLUTION_PAR_MOIS)) $criteria->add(StatistiquesParReferentielPeer::EVOLUTION_PAR_MOIS, $this->evolution_par_mois);
        if ($this->isColumnModified(StatistiquesParReferentielPeer::ID_STATISTIQUES)) $criteria->add(StatistiquesParReferentielPeer::ID_STATISTIQUES, $this->id_statistiques);
        if ($this->isColumnModified(StatistiquesParReferentielPeer::ANNEE)) $criteria->add(StatistiquesParReferentielPeer::ANNEE, $this->annee);
        if ($this->isColumnModified(StatistiquesParReferentielPeer::MOIS)) $criteria->add(StatistiquesParReferentielPeer::MOIS, $this->mois);

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
        $criteria = new Criteria(StatistiquesParReferentielPeer::DATABASE_NAME);
        $criteria->add(StatistiquesParReferentielPeer::ID, $this->id);

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
     * @param object $copyObj An object of StatistiquesParReferentiel (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTypeReferentiel($this->getTypeReferentiel());
        $copyObj->setIdValRefentiel($this->getIdValRefentiel());
        $copyObj->setTotalReclamationsParMois($this->getTotalReclamationsParMois());
        $copyObj->setCumulAFinMois($this->getCumulAFinMois());
        $copyObj->setEvolutionParMois($this->getEvolutionParMois());
        $copyObj->setIdStatistiques($this->getIdStatistiques());
        $copyObj->setAnnee($this->getAnnee());
        $copyObj->setMois($this->getMois());
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
     * @return StatistiquesParReferentiel Clone of current object.
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
     * @return StatistiquesParReferentielPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new StatistiquesParReferentielPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->type_referentiel = null;
        $this->id_val_refentiel = null;
        $this->total_reclamations_par_mois = null;
        $this->cumul_a_fin_mois = null;
        $this->evolution_par_mois = null;
        $this->id_statistiques = null;
        $this->annee = null;
        $this->mois = null;
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
        return (string) $this->exportTo(StatistiquesParReferentielPeer::DEFAULT_STRING_FORMAT);
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
