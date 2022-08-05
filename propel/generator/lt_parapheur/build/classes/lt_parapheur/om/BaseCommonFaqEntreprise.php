<?php


/**
 * Base class that represents a row from the 'Faq_Entreprise' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonFaqEntreprise extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonFaqEntreprisePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonFaqEntreprisePeer
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
     * The value for the question field.
     * @var        string
     */
    protected $question;

    /**
     * The value for the question_fr field.
     * @var        string
     */
    protected $question_fr;

    /**
     * The value for the question_en field.
     * @var        string
     */
    protected $question_en;

    /**
     * The value for the question_es field.
     * @var        string
     */
    protected $question_es;

    /**
     * The value for the reponse field.
     * @var        string
     */
    protected $reponse;

    /**
     * The value for the reponse_fr field.
     * @var        string
     */
    protected $reponse_fr;

    /**
     * The value for the reponse_en field.
     * @var        string
     */
    protected $reponse_en;

    /**
     * The value for the reponse_es field.
     * @var        string
     */
    protected $reponse_es;

    /**
     * The value for the question_it field.
     * @var        string
     */
    protected $question_it;

    /**
     * The value for the reponse_it field.
     * @var        string
     */
    protected $reponse_it;

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
     * Get the [question] column value.
     * 
     * @return string
     */
    public function getQuestion()
    {

        return $this->question;
    }

    /**
     * Get the [question_fr] column value.
     * 
     * @return string
     */
    public function getQuestionFr()
    {

        return $this->question_fr;
    }

    /**
     * Get the [question_en] column value.
     * 
     * @return string
     */
    public function getQuestionEn()
    {

        return $this->question_en;
    }

    /**
     * Get the [question_es] column value.
     * 
     * @return string
     */
    public function getQuestionEs()
    {

        return $this->question_es;
    }

    /**
     * Get the [reponse] column value.
     * 
     * @return string
     */
    public function getReponse()
    {

        return $this->reponse;
    }

    /**
     * Get the [reponse_fr] column value.
     * 
     * @return string
     */
    public function getReponseFr()
    {

        return $this->reponse_fr;
    }

    /**
     * Get the [reponse_en] column value.
     * 
     * @return string
     */
    public function getReponseEn()
    {

        return $this->reponse_en;
    }

    /**
     * Get the [reponse_es] column value.
     * 
     * @return string
     */
    public function getReponseEs()
    {

        return $this->reponse_es;
    }

    /**
     * Get the [question_it] column value.
     * 
     * @return string
     */
    public function getQuestionIt()
    {

        return $this->question_it;
    }

    /**
     * Get the [reponse_it] column value.
     * 
     * @return string
     */
    public function getReponseIt()
    {

        return $this->reponse_it;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [question] column.
     * 
     * @param string $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setQuestion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->question !== $v) {
            $this->question = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::QUESTION;
        }


        return $this;
    } // setQuestion()

    /**
     * Set the value of [question_fr] column.
     * 
     * @param string $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setQuestionFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->question_fr !== $v) {
            $this->question_fr = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::QUESTION_FR;
        }


        return $this;
    } // setQuestionFr()

    /**
     * Set the value of [question_en] column.
     * 
     * @param string $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setQuestionEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->question_en !== $v) {
            $this->question_en = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::QUESTION_EN;
        }


        return $this;
    } // setQuestionEn()

    /**
     * Set the value of [question_es] column.
     * 
     * @param string $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setQuestionEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->question_es !== $v) {
            $this->question_es = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::QUESTION_ES;
        }


        return $this;
    } // setQuestionEs()

    /**
     * Set the value of [reponse] column.
     * 
     * @param string $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reponse !== $v) {
            $this->reponse = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::REPONSE;
        }


        return $this;
    } // setReponse()

    /**
     * Set the value of [reponse_fr] column.
     * 
     * @param string $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setReponseFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reponse_fr !== $v) {
            $this->reponse_fr = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::REPONSE_FR;
        }


        return $this;
    } // setReponseFr()

    /**
     * Set the value of [reponse_en] column.
     * 
     * @param string $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setReponseEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reponse_en !== $v) {
            $this->reponse_en = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::REPONSE_EN;
        }


        return $this;
    } // setReponseEn()

    /**
     * Set the value of [reponse_es] column.
     * 
     * @param string $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setReponseEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reponse_es !== $v) {
            $this->reponse_es = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::REPONSE_ES;
        }


        return $this;
    } // setReponseEs()

    /**
     * Set the value of [question_it] column.
     * 
     * @param string $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setQuestionIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->question_it !== $v) {
            $this->question_it = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::QUESTION_IT;
        }


        return $this;
    } // setQuestionIt()

    /**
     * Set the value of [reponse_it] column.
     * 
     * @param string $v new value
     * @return CommonFaqEntreprise The current object (for fluent API support)
     */
    public function setReponseIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reponse_it !== $v) {
            $this->reponse_it = $v;
            $this->modifiedColumns[] = CommonFaqEntreprisePeer::REPONSE_IT;
        }


        return $this;
    } // setReponseIt()

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
            $this->question = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->question_fr = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->question_en = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->question_es = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->reponse = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->reponse_fr = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->reponse_en = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->reponse_es = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->question_it = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->reponse_it = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = CommonFaqEntreprisePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonFaqEntreprise object", $e);
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
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonFaqEntreprisePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonFaqEntrepriseQuery::create()
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
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonFaqEntreprisePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonFaqEntreprisePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonFaqEntreprisePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonFaqEntreprisePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonFaqEntreprisePeer::QUESTION)) {
            $modifiedColumns[':p' . $index++]  = '`question`';
        }
        if ($this->isColumnModified(CommonFaqEntreprisePeer::QUESTION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`question_fr`';
        }
        if ($this->isColumnModified(CommonFaqEntreprisePeer::QUESTION_EN)) {
            $modifiedColumns[':p' . $index++]  = '`question_en`';
        }
        if ($this->isColumnModified(CommonFaqEntreprisePeer::QUESTION_ES)) {
            $modifiedColumns[':p' . $index++]  = '`question_es`';
        }
        if ($this->isColumnModified(CommonFaqEntreprisePeer::REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`reponse`';
        }
        if ($this->isColumnModified(CommonFaqEntreprisePeer::REPONSE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`reponse_fr`';
        }
        if ($this->isColumnModified(CommonFaqEntreprisePeer::REPONSE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`reponse_en`';
        }
        if ($this->isColumnModified(CommonFaqEntreprisePeer::REPONSE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`reponse_es`';
        }
        if ($this->isColumnModified(CommonFaqEntreprisePeer::QUESTION_IT)) {
            $modifiedColumns[':p' . $index++]  = '`question_it`';
        }
        if ($this->isColumnModified(CommonFaqEntreprisePeer::REPONSE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`reponse_it`';
        }

        $sql = sprintf(
            'INSERT INTO `Faq_Entreprise` (%s) VALUES (%s)',
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
                    case '`question`':						
                        $stmt->bindValue($identifier, $this->question, PDO::PARAM_STR);
                        break;
                    case '`question_fr`':						
                        $stmt->bindValue($identifier, $this->question_fr, PDO::PARAM_STR);
                        break;
                    case '`question_en`':						
                        $stmt->bindValue($identifier, $this->question_en, PDO::PARAM_STR);
                        break;
                    case '`question_es`':						
                        $stmt->bindValue($identifier, $this->question_es, PDO::PARAM_STR);
                        break;
                    case '`reponse`':						
                        $stmt->bindValue($identifier, $this->reponse, PDO::PARAM_STR);
                        break;
                    case '`reponse_fr`':						
                        $stmt->bindValue($identifier, $this->reponse_fr, PDO::PARAM_STR);
                        break;
                    case '`reponse_en`':						
                        $stmt->bindValue($identifier, $this->reponse_en, PDO::PARAM_STR);
                        break;
                    case '`reponse_es`':						
                        $stmt->bindValue($identifier, $this->reponse_es, PDO::PARAM_STR);
                        break;
                    case '`question_it`':						
                        $stmt->bindValue($identifier, $this->question_it, PDO::PARAM_STR);
                        break;
                    case '`reponse_it`':						
                        $stmt->bindValue($identifier, $this->reponse_it, PDO::PARAM_STR);
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


            if (($retval = CommonFaqEntreprisePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonFaqEntreprisePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getQuestion();
                break;
            case 2:
                return $this->getQuestionFr();
                break;
            case 3:
                return $this->getQuestionEn();
                break;
            case 4:
                return $this->getQuestionEs();
                break;
            case 5:
                return $this->getReponse();
                break;
            case 6:
                return $this->getReponseFr();
                break;
            case 7:
                return $this->getReponseEn();
                break;
            case 8:
                return $this->getReponseEs();
                break;
            case 9:
                return $this->getQuestionIt();
                break;
            case 10:
                return $this->getReponseIt();
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
        if (isset($alreadyDumpedObjects['CommonFaqEntreprise'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonFaqEntreprise'][$this->getPrimaryKey()] = true;
        $keys = CommonFaqEntreprisePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getQuestion(),
            $keys[2] => $this->getQuestionFr(),
            $keys[3] => $this->getQuestionEn(),
            $keys[4] => $this->getQuestionEs(),
            $keys[5] => $this->getReponse(),
            $keys[6] => $this->getReponseFr(),
            $keys[7] => $this->getReponseEn(),
            $keys[8] => $this->getReponseEs(),
            $keys[9] => $this->getQuestionIt(),
            $keys[10] => $this->getReponseIt(),
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
        $pos = CommonFaqEntreprisePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setQuestion($value);
                break;
            case 2:
                $this->setQuestionFr($value);
                break;
            case 3:
                $this->setQuestionEn($value);
                break;
            case 4:
                $this->setQuestionEs($value);
                break;
            case 5:
                $this->setReponse($value);
                break;
            case 6:
                $this->setReponseFr($value);
                break;
            case 7:
                $this->setReponseEn($value);
                break;
            case 8:
                $this->setReponseEs($value);
                break;
            case 9:
                $this->setQuestionIt($value);
                break;
            case 10:
                $this->setReponseIt($value);
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
        $keys = CommonFaqEntreprisePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setQuestion($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setQuestionFr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setQuestionEn($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setQuestionEs($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setReponse($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setReponseFr($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setReponseEn($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setReponseEs($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setQuestionIt($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setReponseIt($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonFaqEntreprisePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonFaqEntreprisePeer::ID)) $criteria->add(CommonFaqEntreprisePeer::ID, $this->id);
        if ($this->isColumnModified(CommonFaqEntreprisePeer::QUESTION)) $criteria->add(CommonFaqEntreprisePeer::QUESTION, $this->question);
        if ($this->isColumnModified(CommonFaqEntreprisePeer::QUESTION_FR)) $criteria->add(CommonFaqEntreprisePeer::QUESTION_FR, $this->question_fr);
        if ($this->isColumnModified(CommonFaqEntreprisePeer::QUESTION_EN)) $criteria->add(CommonFaqEntreprisePeer::QUESTION_EN, $this->question_en);
        if ($this->isColumnModified(CommonFaqEntreprisePeer::QUESTION_ES)) $criteria->add(CommonFaqEntreprisePeer::QUESTION_ES, $this->question_es);
        if ($this->isColumnModified(CommonFaqEntreprisePeer::REPONSE)) $criteria->add(CommonFaqEntreprisePeer::REPONSE, $this->reponse);
        if ($this->isColumnModified(CommonFaqEntreprisePeer::REPONSE_FR)) $criteria->add(CommonFaqEntreprisePeer::REPONSE_FR, $this->reponse_fr);
        if ($this->isColumnModified(CommonFaqEntreprisePeer::REPONSE_EN)) $criteria->add(CommonFaqEntreprisePeer::REPONSE_EN, $this->reponse_en);
        if ($this->isColumnModified(CommonFaqEntreprisePeer::REPONSE_ES)) $criteria->add(CommonFaqEntreprisePeer::REPONSE_ES, $this->reponse_es);
        if ($this->isColumnModified(CommonFaqEntreprisePeer::QUESTION_IT)) $criteria->add(CommonFaqEntreprisePeer::QUESTION_IT, $this->question_it);
        if ($this->isColumnModified(CommonFaqEntreprisePeer::REPONSE_IT)) $criteria->add(CommonFaqEntreprisePeer::REPONSE_IT, $this->reponse_it);

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
        $criteria = new Criteria(CommonFaqEntreprisePeer::DATABASE_NAME);
        $criteria->add(CommonFaqEntreprisePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonFaqEntreprise (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setQuestion($this->getQuestion());
        $copyObj->setQuestionFr($this->getQuestionFr());
        $copyObj->setQuestionEn($this->getQuestionEn());
        $copyObj->setQuestionEs($this->getQuestionEs());
        $copyObj->setReponse($this->getReponse());
        $copyObj->setReponseFr($this->getReponseFr());
        $copyObj->setReponseEn($this->getReponseEn());
        $copyObj->setReponseEs($this->getReponseEs());
        $copyObj->setQuestionIt($this->getQuestionIt());
        $copyObj->setReponseIt($this->getReponseIt());
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
     * @return CommonFaqEntreprise Clone of current object.
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
     * @return CommonFaqEntreprisePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonFaqEntreprisePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->question = null;
        $this->question_fr = null;
        $this->question_en = null;
        $this->question_es = null;
        $this->reponse = null;
        $this->reponse_fr = null;
        $this->reponse_en = null;
        $this->reponse_es = null;
        $this->question_it = null;
        $this->reponse_it = null;
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
        return (string) $this->exportTo(CommonFaqEntreprisePeer::DEFAULT_STRING_FORMAT);
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
