<?php


/**
 * Base class that represents a row from the 'valeur_referentiel' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseValeurReferentiel extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ValeurReferentielPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ValeurReferentielPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_valeur_ref field.
     * @var        int
     */
    protected $id_valeur_ref;

    /**
     * The value for the id_referentiel field.
     * @var        int
     */
    protected $id_referentiel;

    /**
     * The value for the libelle_valeur_ref_fr field.
     * @var        string
     */
    protected $libelle_valeur_ref_fr;

    /**
     * The value for the libelle_valeur_ref_ar field.
     * @var        string
     */
    protected $libelle_valeur_ref_ar;

    /**
     * The value for the style field.
     * @var        string
     */
    protected $style;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the champ_generique_fr field.
     * @var        string
     */
    protected $champ_generique_fr;

    /**
     * The value for the champ_generique_ar field.
     * @var        string
     */
    protected $champ_generique_ar;

    /**
     * The value for the id_externe field.
     * @var        int
     */
    protected $id_externe;

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
     * Get the [id_valeur_ref] column value.
     * 
     * @return int
     */
    public function getIdValeurRef()
    {

        return $this->id_valeur_ref;
    }

    /**
     * Get the [id_referentiel] column value.
     * 
     * @return int
     */
    public function getIdReferentiel()
    {

        return $this->id_referentiel;
    }

    /**
     * Get the [libelle_valeur_ref_fr] column value.
     * 
     * @return string
     */
    public function getLibelleValeurRefFr()
    {

        return $this->libelle_valeur_ref_fr;
    }

    /**
     * Get the [libelle_valeur_ref_ar] column value.
     * 
     * @return string
     */
    public function getLibelleValeurRefAr()
    {

        return $this->libelle_valeur_ref_ar;
    }

    /**
     * Get the [style] column value.
     * 
     * @return string
     */
    public function getStyle()
    {

        return $this->style;
    }

    /**
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Get the [champ_generique_fr] column value.
     * 
     * @return string
     */
    public function getChampGeneriqueFr()
    {

        return $this->champ_generique_fr;
    }

    /**
     * Get the [champ_generique_ar] column value.
     * 
     * @return string
     */
    public function getChampGeneriqueAr()
    {

        return $this->champ_generique_ar;
    }

    /**
     * Get the [id_externe] column value.
     * 
     * @return int
     */
    public function getIdExterne()
    {

        return $this->id_externe;
    }

    /**
     * Set the value of [id_valeur_ref] column.
     * 
     * @param int $v new value
     * @return ValeurReferentiel The current object (for fluent API support)
     */
    public function setIdValeurRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_valeur_ref !== $v) {
            $this->id_valeur_ref = $v;
            $this->modifiedColumns[] = ValeurReferentielPeer::ID_VALEUR_REF;
        }


        return $this;
    } // setIdValeurRef()

    /**
     * Set the value of [id_referentiel] column.
     * 
     * @param int $v new value
     * @return ValeurReferentiel The current object (for fluent API support)
     */
    public function setIdReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_referentiel !== $v) {
            $this->id_referentiel = $v;
            $this->modifiedColumns[] = ValeurReferentielPeer::ID_REFERENTIEL;
        }


        return $this;
    } // setIdReferentiel()

    /**
     * Set the value of [libelle_valeur_ref_fr] column.
     * 
     * @param string $v new value
     * @return ValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurRefFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_ref_fr !== $v) {
            $this->libelle_valeur_ref_fr = $v;
            $this->modifiedColumns[] = ValeurReferentielPeer::LIBELLE_VALEUR_REF_FR;
        }


        return $this;
    } // setLibelleValeurRefFr()

    /**
     * Set the value of [libelle_valeur_ref_ar] column.
     * 
     * @param string $v new value
     * @return ValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurRefAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_ref_ar !== $v) {
            $this->libelle_valeur_ref_ar = $v;
            $this->modifiedColumns[] = ValeurReferentielPeer::LIBELLE_VALEUR_REF_AR;
        }


        return $this;
    } // setLibelleValeurRefAr()

    /**
     * Set the value of [style] column.
     * 
     * @param string $v new value
     * @return ValeurReferentiel The current object (for fluent API support)
     */
    public function setStyle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->style !== $v) {
            $this->style = $v;
            $this->modifiedColumns[] = ValeurReferentielPeer::STYLE;
        }


        return $this;
    } // setStyle()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return ValeurReferentiel The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = ValeurReferentielPeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [champ_generique_fr] column.
     * 
     * @param string $v new value
     * @return ValeurReferentiel The current object (for fluent API support)
     */
    public function setChampGeneriqueFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_generique_fr !== $v) {
            $this->champ_generique_fr = $v;
            $this->modifiedColumns[] = ValeurReferentielPeer::CHAMP_GENERIQUE_FR;
        }


        return $this;
    } // setChampGeneriqueFr()

    /**
     * Set the value of [champ_generique_ar] column.
     * 
     * @param string $v new value
     * @return ValeurReferentiel The current object (for fluent API support)
     */
    public function setChampGeneriqueAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_generique_ar !== $v) {
            $this->champ_generique_ar = $v;
            $this->modifiedColumns[] = ValeurReferentielPeer::CHAMP_GENERIQUE_AR;
        }


        return $this;
    } // setChampGeneriqueAr()

    /**
     * Set the value of [id_externe] column.
     * 
     * @param int $v new value
     * @return ValeurReferentiel The current object (for fluent API support)
     */
    public function setIdExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_externe !== $v) {
            $this->id_externe = $v;
            $this->modifiedColumns[] = ValeurReferentielPeer::ID_EXTERNE;
        }


        return $this;
    } // setIdExterne()

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

            $this->id_valeur_ref = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_referentiel = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->libelle_valeur_ref_fr = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle_valeur_ref_ar = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->style = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_entite = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->champ_generique_fr = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->champ_generique_ar = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->id_externe = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = ValeurReferentielPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ValeurReferentiel object", $e);
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
            $con = Propel::getConnection(ValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ValeurReferentielPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ValeurReferentielQuery::create()
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
            $con = Propel::getConnection(ValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ValeurReferentielPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = ValeurReferentielPeer::ID_VALEUR_REF;
        if (null !== $this->id_valeur_ref) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ValeurReferentielPeer::ID_VALEUR_REF . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ValeurReferentielPeer::ID_VALEUR_REF)) {
            $modifiedColumns[':p' . $index++]  = '`ID_VALEUR_REF`';
        }
        if ($this->isColumnModified(ValeurReferentielPeer::ID_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_REFERENTIEL`';
        }
        if ($this->isColumnModified(ValeurReferentielPeer::LIBELLE_VALEUR_REF_FR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_VALEUR_REF_FR`';
        }
        if ($this->isColumnModified(ValeurReferentielPeer::LIBELLE_VALEUR_REF_AR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_VALEUR_REF_AR`';
        }
        if ($this->isColumnModified(ValeurReferentielPeer::STYLE)) {
            $modifiedColumns[':p' . $index++]  = '`STYLE`';
        }
        if ($this->isColumnModified(ValeurReferentielPeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(ValeurReferentielPeer::CHAMP_GENERIQUE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_GENERIQUE_FR`';
        }
        if ($this->isColumnModified(ValeurReferentielPeer::CHAMP_GENERIQUE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_GENERIQUE_AR`';
        }
        if ($this->isColumnModified(ValeurReferentielPeer::ID_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_EXTERNE`';
        }

        $sql = sprintf(
            'INSERT INTO `valeur_referentiel` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_VALEUR_REF`':						
                        $stmt->bindValue($identifier, $this->id_valeur_ref, PDO::PARAM_INT);
                        break;
                    case '`ID_REFERENTIEL`':						
                        $stmt->bindValue($identifier, $this->id_referentiel, PDO::PARAM_INT);
                        break;
                    case '`LIBELLE_VALEUR_REF_FR`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_ref_fr, PDO::PARAM_STR);
                        break;
                    case '`LIBELLE_VALEUR_REF_AR`':						
                        $stmt->bindValue($identifier, $this->libelle_valeur_ref_ar, PDO::PARAM_STR);
                        break;
                    case '`STYLE`':						
                        $stmt->bindValue($identifier, $this->style, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`CHAMP_GENERIQUE_FR`':						
                        $stmt->bindValue($identifier, $this->champ_generique_fr, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_GENERIQUE_AR`':						
                        $stmt->bindValue($identifier, $this->champ_generique_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->id_externe, PDO::PARAM_INT);
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
        $this->setIdValeurRef($pk);

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


            if (($retval = ValeurReferentielPeer::doValidate($this, $columns)) !== true) {
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
        $pos = ValeurReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdValeurRef();
                break;
            case 1:
                return $this->getIdReferentiel();
                break;
            case 2:
                return $this->getLibelleValeurRefFr();
                break;
            case 3:
                return $this->getLibelleValeurRefAr();
                break;
            case 4:
                return $this->getStyle();
                break;
            case 5:
                return $this->getIdEntite();
                break;
            case 6:
                return $this->getChampGeneriqueFr();
                break;
            case 7:
                return $this->getChampGeneriqueAr();
                break;
            case 8:
                return $this->getIdExterne();
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
        if (isset($alreadyDumpedObjects['ValeurReferentiel'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ValeurReferentiel'][$this->getPrimaryKey()] = true;
        $keys = ValeurReferentielPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdValeurRef(),
            $keys[1] => $this->getIdReferentiel(),
            $keys[2] => $this->getLibelleValeurRefFr(),
            $keys[3] => $this->getLibelleValeurRefAr(),
            $keys[4] => $this->getStyle(),
            $keys[5] => $this->getIdEntite(),
            $keys[6] => $this->getChampGeneriqueFr(),
            $keys[7] => $this->getChampGeneriqueAr(),
            $keys[8] => $this->getIdExterne(),
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
        $pos = ValeurReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdValeurRef($value);
                break;
            case 1:
                $this->setIdReferentiel($value);
                break;
            case 2:
                $this->setLibelleValeurRefFr($value);
                break;
            case 3:
                $this->setLibelleValeurRefAr($value);
                break;
            case 4:
                $this->setStyle($value);
                break;
            case 5:
                $this->setIdEntite($value);
                break;
            case 6:
                $this->setChampGeneriqueFr($value);
                break;
            case 7:
                $this->setChampGeneriqueAr($value);
                break;
            case 8:
                $this->setIdExterne($value);
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
        $keys = ValeurReferentielPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdValeurRef($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdReferentiel($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelleValeurRefFr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleValeurRefAr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStyle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdEntite($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setChampGeneriqueFr($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setChampGeneriqueAr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdExterne($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ValeurReferentielPeer::DATABASE_NAME);

        if ($this->isColumnModified(ValeurReferentielPeer::ID_VALEUR_REF)) $criteria->add(ValeurReferentielPeer::ID_VALEUR_REF, $this->id_valeur_ref);
        if ($this->isColumnModified(ValeurReferentielPeer::ID_REFERENTIEL)) $criteria->add(ValeurReferentielPeer::ID_REFERENTIEL, $this->id_referentiel);
        if ($this->isColumnModified(ValeurReferentielPeer::LIBELLE_VALEUR_REF_FR)) $criteria->add(ValeurReferentielPeer::LIBELLE_VALEUR_REF_FR, $this->libelle_valeur_ref_fr);
        if ($this->isColumnModified(ValeurReferentielPeer::LIBELLE_VALEUR_REF_AR)) $criteria->add(ValeurReferentielPeer::LIBELLE_VALEUR_REF_AR, $this->libelle_valeur_ref_ar);
        if ($this->isColumnModified(ValeurReferentielPeer::STYLE)) $criteria->add(ValeurReferentielPeer::STYLE, $this->style);
        if ($this->isColumnModified(ValeurReferentielPeer::ID_ENTITE)) $criteria->add(ValeurReferentielPeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(ValeurReferentielPeer::CHAMP_GENERIQUE_FR)) $criteria->add(ValeurReferentielPeer::CHAMP_GENERIQUE_FR, $this->champ_generique_fr);
        if ($this->isColumnModified(ValeurReferentielPeer::CHAMP_GENERIQUE_AR)) $criteria->add(ValeurReferentielPeer::CHAMP_GENERIQUE_AR, $this->champ_generique_ar);
        if ($this->isColumnModified(ValeurReferentielPeer::ID_EXTERNE)) $criteria->add(ValeurReferentielPeer::ID_EXTERNE, $this->id_externe);

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
        $criteria = new Criteria(ValeurReferentielPeer::DATABASE_NAME);
        $criteria->add(ValeurReferentielPeer::ID_VALEUR_REF, $this->id_valeur_ref);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdValeurRef();
    }

    /**
     * Generic method to set the primary key (id_valeur_ref column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdValeurRef($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdValeurRef();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ValeurReferentiel (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdReferentiel($this->getIdReferentiel());
        $copyObj->setLibelleValeurRefFr($this->getLibelleValeurRefFr());
        $copyObj->setLibelleValeurRefAr($this->getLibelleValeurRefAr());
        $copyObj->setStyle($this->getStyle());
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setChampGeneriqueFr($this->getChampGeneriqueFr());
        $copyObj->setChampGeneriqueAr($this->getChampGeneriqueAr());
        $copyObj->setIdExterne($this->getIdExterne());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdValeurRef(NULL); // this is a auto-increment column, so set to default value
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
     * @return ValeurReferentiel Clone of current object.
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
     * @return ValeurReferentielPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ValeurReferentielPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_valeur_ref = null;
        $this->id_referentiel = null;
        $this->libelle_valeur_ref_fr = null;
        $this->libelle_valeur_ref_ar = null;
        $this->style = null;
        $this->id_entite = null;
        $this->champ_generique_fr = null;
        $this->champ_generique_ar = null;
        $this->id_externe = null;
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
        return (string) $this->exportTo(ValeurReferentielPeer::DEFAULT_STRING_FORMAT);
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
