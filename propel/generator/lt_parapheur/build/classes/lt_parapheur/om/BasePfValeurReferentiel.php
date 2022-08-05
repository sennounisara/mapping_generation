<?php


/**
 * Base class that represents a row from the 'pf_valeur_referentiel' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfValeurReferentiel extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PfValeurReferentielPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PfValeurReferentielPeer
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
     * The value for the categorie field.
     * @var        string
     */
    protected $categorie;

    /**
     * The value for the ordre field.
     * @var        int
     */
    protected $ordre;

    /**
     * The value for the date_modification field.
     * @var        string
     */
    protected $date_modification;

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
     * Get the [categorie] column value.
     * 
     * @return string
     */
    public function getCategorie()
    {

        return $this->categorie;
    }

    /**
     * Get the [ordre] column value.
     * 
     * @return int
     */
    public function getOrdre()
    {

        return $this->ordre;
    }

    /**
     * Get the [optionally formatted] temporal [date_modification] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateModification($format = 'Y-m-d H:i:s')
    {
        if ($this->date_modification === null) {
            return null;
        }

        if ($this->date_modification === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_modification);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modification, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Set the value of [id_valeur_ref] column.
     * 
     * @param int $v new value
     * @return PfValeurReferentiel The current object (for fluent API support)
     */
    public function setIdValeurRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_valeur_ref !== $v) {
            $this->id_valeur_ref = $v;
            $this->modifiedColumns[] = PfValeurReferentielPeer::ID_VALEUR_REF;
        }


        return $this;
    } // setIdValeurRef()

    /**
     * Set the value of [id_referentiel] column.
     * 
     * @param int $v new value
     * @return PfValeurReferentiel The current object (for fluent API support)
     */
    public function setIdReferentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_referentiel !== $v) {
            $this->id_referentiel = $v;
            $this->modifiedColumns[] = PfValeurReferentielPeer::ID_REFERENTIEL;
        }


        return $this;
    } // setIdReferentiel()

    /**
     * Set the value of [libelle_valeur_ref_fr] column.
     * 
     * @param string $v new value
     * @return PfValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurRefFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_ref_fr !== $v) {
            $this->libelle_valeur_ref_fr = $v;
            $this->modifiedColumns[] = PfValeurReferentielPeer::LIBELLE_VALEUR_REF_FR;
        }


        return $this;
    } // setLibelleValeurRefFr()

    /**
     * Set the value of [libelle_valeur_ref_ar] column.
     * 
     * @param string $v new value
     * @return PfValeurReferentiel The current object (for fluent API support)
     */
    public function setLibelleValeurRefAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_valeur_ref_ar !== $v) {
            $this->libelle_valeur_ref_ar = $v;
            $this->modifiedColumns[] = PfValeurReferentielPeer::LIBELLE_VALEUR_REF_AR;
        }


        return $this;
    } // setLibelleValeurRefAr()

    /**
     * Set the value of [categorie] column.
     * 
     * @param string $v new value
     * @return PfValeurReferentiel The current object (for fluent API support)
     */
    public function setCategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->categorie !== $v) {
            $this->categorie = $v;
            $this->modifiedColumns[] = PfValeurReferentielPeer::CATEGORIE;
        }


        return $this;
    } // setCategorie()

    /**
     * Set the value of [ordre] column.
     * 
     * @param int $v new value
     * @return PfValeurReferentiel The current object (for fluent API support)
     */
    public function setOrdre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordre !== $v) {
            $this->ordre = $v;
            $this->modifiedColumns[] = PfValeurReferentielPeer::ORDRE;
        }


        return $this;
    } // setOrdre()

    /**
     * Sets the value of [date_modification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return PfValeurReferentiel The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modification !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modification !== null && $tmpDt = new DateTime($this->date_modification)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modification = $newDateAsString;
                $this->modifiedColumns[] = PfValeurReferentielPeer::DATE_MODIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDateModification()

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
            $this->categorie = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ordre = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->date_modification = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = PfValeurReferentielPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PfValeurReferentiel object", $e);
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
            $con = Propel::getConnection(PfValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PfValeurReferentielPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PfValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PfValeurReferentielQuery::create()
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
            $con = Propel::getConnection(PfValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PfValeurReferentielPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PfValeurReferentielPeer::ID_VALEUR_REF;
        if (null !== $this->id_valeur_ref) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PfValeurReferentielPeer::ID_VALEUR_REF . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PfValeurReferentielPeer::ID_VALEUR_REF)) {
            $modifiedColumns[':p' . $index++]  = '`ID_VALEUR_REF`';
        }
        if ($this->isColumnModified(PfValeurReferentielPeer::ID_REFERENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`ID_REFERENTIEL`';
        }
        if ($this->isColumnModified(PfValeurReferentielPeer::LIBELLE_VALEUR_REF_FR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_VALEUR_REF_FR`';
        }
        if ($this->isColumnModified(PfValeurReferentielPeer::LIBELLE_VALEUR_REF_AR)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_VALEUR_REF_AR`';
        }
        if ($this->isColumnModified(PfValeurReferentielPeer::CATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`CATEGORIE`';
        }
        if ($this->isColumnModified(PfValeurReferentielPeer::ORDRE)) {
            $modifiedColumns[':p' . $index++]  = '`ORDRE`';
        }
        if ($this->isColumnModified(PfValeurReferentielPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_MODIFICATION`';
        }

        $sql = sprintf(
            'INSERT INTO `pf_valeur_referentiel` (%s) VALUES (%s)',
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
                    case '`CATEGORIE`':						
                        $stmt->bindValue($identifier, $this->categorie, PDO::PARAM_STR);
                        break;
                    case '`ORDRE`':						
                        $stmt->bindValue($identifier, $this->ordre, PDO::PARAM_INT);
                        break;
                    case '`DATE_MODIFICATION`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
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


            if (($retval = PfValeurReferentielPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PfValeurReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCategorie();
                break;
            case 5:
                return $this->getOrdre();
                break;
            case 6:
                return $this->getDateModification();
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
        if (isset($alreadyDumpedObjects['PfValeurReferentiel'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PfValeurReferentiel'][$this->getPrimaryKey()] = true;
        $keys = PfValeurReferentielPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdValeurRef(),
            $keys[1] => $this->getIdReferentiel(),
            $keys[2] => $this->getLibelleValeurRefFr(),
            $keys[3] => $this->getLibelleValeurRefAr(),
            $keys[4] => $this->getCategorie(),
            $keys[5] => $this->getOrdre(),
            $keys[6] => $this->getDateModification(),
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
        $pos = PfValeurReferentielPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCategorie($value);
                break;
            case 5:
                $this->setOrdre($value);
                break;
            case 6:
                $this->setDateModification($value);
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
        $keys = PfValeurReferentielPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdValeurRef($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdReferentiel($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelleValeurRefFr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleValeurRefAr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCategorie($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOrdre($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateModification($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PfValeurReferentielPeer::DATABASE_NAME);

        if ($this->isColumnModified(PfValeurReferentielPeer::ID_VALEUR_REF)) $criteria->add(PfValeurReferentielPeer::ID_VALEUR_REF, $this->id_valeur_ref);
        if ($this->isColumnModified(PfValeurReferentielPeer::ID_REFERENTIEL)) $criteria->add(PfValeurReferentielPeer::ID_REFERENTIEL, $this->id_referentiel);
        if ($this->isColumnModified(PfValeurReferentielPeer::LIBELLE_VALEUR_REF_FR)) $criteria->add(PfValeurReferentielPeer::LIBELLE_VALEUR_REF_FR, $this->libelle_valeur_ref_fr);
        if ($this->isColumnModified(PfValeurReferentielPeer::LIBELLE_VALEUR_REF_AR)) $criteria->add(PfValeurReferentielPeer::LIBELLE_VALEUR_REF_AR, $this->libelle_valeur_ref_ar);
        if ($this->isColumnModified(PfValeurReferentielPeer::CATEGORIE)) $criteria->add(PfValeurReferentielPeer::CATEGORIE, $this->categorie);
        if ($this->isColumnModified(PfValeurReferentielPeer::ORDRE)) $criteria->add(PfValeurReferentielPeer::ORDRE, $this->ordre);
        if ($this->isColumnModified(PfValeurReferentielPeer::DATE_MODIFICATION)) $criteria->add(PfValeurReferentielPeer::DATE_MODIFICATION, $this->date_modification);

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
        $criteria = new Criteria(PfValeurReferentielPeer::DATABASE_NAME);
        $criteria->add(PfValeurReferentielPeer::ID_VALEUR_REF, $this->id_valeur_ref);

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
     * @param object $copyObj An object of PfValeurReferentiel (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdReferentiel($this->getIdReferentiel());
        $copyObj->setLibelleValeurRefFr($this->getLibelleValeurRefFr());
        $copyObj->setLibelleValeurRefAr($this->getLibelleValeurRefAr());
        $copyObj->setCategorie($this->getCategorie());
        $copyObj->setOrdre($this->getOrdre());
        $copyObj->setDateModification($this->getDateModification());
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
     * @return PfValeurReferentiel Clone of current object.
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
     * @return PfValeurReferentielPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PfValeurReferentielPeer();
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
        $this->categorie = null;
        $this->ordre = null;
        $this->date_modification = null;
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
        return (string) $this->exportTo(PfValeurReferentielPeer::DEFAULT_STRING_FORMAT);
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
