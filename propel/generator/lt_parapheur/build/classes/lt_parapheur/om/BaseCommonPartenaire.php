<?php


/**
 * Base class that represents a row from the 'Partenaire' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPartenaire extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonPartenairePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonPartenairePeer
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
     * The value for the initials field.
     * @var        string
     */
    protected $initials;

    /**
     * The value for the desc_partenaire field.
     * @var        string
     */
    protected $desc_partenaire;

    /**
     * The value for the desc_partenaire_fr field.
     * @var        string
     */
    protected $desc_partenaire_fr;

    /**
     * The value for the desc_partenaire_en field.
     * @var        string
     */
    protected $desc_partenaire_en;

    /**
     * The value for the desc_partenaire_es field.
     * @var        string
     */
    protected $desc_partenaire_es;

    /**
     * The value for the desc_partenaire_it field.
     * @var        string
     */
    protected $desc_partenaire_it;

    /**
     * The value for the desc_partenaire_ar field.
     * @var        string
     */
    protected $desc_partenaire_ar;

    /**
     * The value for the desc_partenaire_su field.
     * @var        string
     */
    protected $desc_partenaire_su;

    /**
     * The value for the lien_img field.
     * @var        string
     */
    protected $lien_img;

    /**
     * The value for the lien_externe field.
     * @var        string
     */
    protected $lien_externe;

    /**
     * The value for the title field.
     * @var        string
     */
    protected $title;

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
     * Get the [initials] column value.
     * 
     * @return string
     */
    public function getInitials()
    {

        return $this->initials;
    }

    /**
     * Get the [desc_partenaire] column value.
     * 
     * @return string
     */
    public function getDescPartenaire()
    {

        return $this->desc_partenaire;
    }

    /**
     * Get the [desc_partenaire_fr] column value.
     * 
     * @return string
     */
    public function getDescPartenaireFr()
    {

        return $this->desc_partenaire_fr;
    }

    /**
     * Get the [desc_partenaire_en] column value.
     * 
     * @return string
     */
    public function getDescPartenaireEn()
    {

        return $this->desc_partenaire_en;
    }

    /**
     * Get the [desc_partenaire_es] column value.
     * 
     * @return string
     */
    public function getDescPartenaireEs()
    {

        return $this->desc_partenaire_es;
    }

    /**
     * Get the [desc_partenaire_it] column value.
     * 
     * @return string
     */
    public function getDescPartenaireIt()
    {

        return $this->desc_partenaire_it;
    }

    /**
     * Get the [desc_partenaire_ar] column value.
     * 
     * @return string
     */
    public function getDescPartenaireAr()
    {

        return $this->desc_partenaire_ar;
    }

    /**
     * Get the [desc_partenaire_su] column value.
     * 
     * @return string
     */
    public function getDescPartenaireSu()
    {

        return $this->desc_partenaire_su;
    }

    /**
     * Get the [lien_img] column value.
     * 
     * @return string
     */
    public function getLienImg()
    {

        return $this->lien_img;
    }

    /**
     * Get the [lien_externe] column value.
     * 
     * @return string
     */
    public function getLienExterne()
    {

        return $this->lien_externe;
    }

    /**
     * Get the [title] column value.
     * 
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [initials] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setInitials($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->initials !== $v) {
            $this->initials = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::INITIALS;
        }


        return $this;
    } // setInitials()

    /**
     * Set the value of [desc_partenaire] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setDescPartenaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desc_partenaire !== $v) {
            $this->desc_partenaire = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::DESC_PARTENAIRE;
        }


        return $this;
    } // setDescPartenaire()

    /**
     * Set the value of [desc_partenaire_fr] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setDescPartenaireFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desc_partenaire_fr !== $v) {
            $this->desc_partenaire_fr = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::DESC_PARTENAIRE_FR;
        }


        return $this;
    } // setDescPartenaireFr()

    /**
     * Set the value of [desc_partenaire_en] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setDescPartenaireEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desc_partenaire_en !== $v) {
            $this->desc_partenaire_en = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::DESC_PARTENAIRE_EN;
        }


        return $this;
    } // setDescPartenaireEn()

    /**
     * Set the value of [desc_partenaire_es] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setDescPartenaireEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desc_partenaire_es !== $v) {
            $this->desc_partenaire_es = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::DESC_PARTENAIRE_ES;
        }


        return $this;
    } // setDescPartenaireEs()

    /**
     * Set the value of [desc_partenaire_it] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setDescPartenaireIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desc_partenaire_it !== $v) {
            $this->desc_partenaire_it = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::DESC_PARTENAIRE_IT;
        }


        return $this;
    } // setDescPartenaireIt()

    /**
     * Set the value of [desc_partenaire_ar] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setDescPartenaireAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desc_partenaire_ar !== $v) {
            $this->desc_partenaire_ar = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::DESC_PARTENAIRE_AR;
        }


        return $this;
    } // setDescPartenaireAr()

    /**
     * Set the value of [desc_partenaire_su] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setDescPartenaireSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->desc_partenaire_su !== $v) {
            $this->desc_partenaire_su = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::DESC_PARTENAIRE_SU;
        }


        return $this;
    } // setDescPartenaireSu()

    /**
     * Set the value of [lien_img] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setLienImg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lien_img !== $v) {
            $this->lien_img = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::LIEN_IMG;
        }


        return $this;
    } // setLienImg()

    /**
     * Set the value of [lien_externe] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setLienExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lien_externe !== $v) {
            $this->lien_externe = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::LIEN_EXTERNE;
        }


        return $this;
    } // setLienExterne()

    /**
     * Set the value of [title] column.
     * 
     * @param string $v new value
     * @return CommonPartenaire The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = CommonPartenairePeer::TITLE;
        }


        return $this;
    } // setTitle()

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
            $this->initials = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->desc_partenaire = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->desc_partenaire_fr = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->desc_partenaire_en = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->desc_partenaire_es = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->desc_partenaire_it = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->desc_partenaire_ar = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->desc_partenaire_su = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->lien_img = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->lien_externe = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->title = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CommonPartenairePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonPartenaire object", $e);
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
            $con = Propel::getConnection(CommonPartenairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonPartenairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonPartenairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonPartenaireQuery::create()
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
            $con = Propel::getConnection(CommonPartenairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonPartenairePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonPartenairePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonPartenairePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonPartenairePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::INITIALS)) {
            $modifiedColumns[':p' . $index++]  = '`initials`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`desc_partenaire`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`desc_partenaire_fr`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`desc_partenaire_en`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`desc_partenaire_es`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`desc_partenaire_it`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`desc_partenaire_ar`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`desc_partenaire_su`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::LIEN_IMG)) {
            $modifiedColumns[':p' . $index++]  = '`lien_img`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::LIEN_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`lien_externe`';
        }
        if ($this->isColumnModified(CommonPartenairePeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`title`';
        }

        $sql = sprintf(
            'INSERT INTO `Partenaire` (%s) VALUES (%s)',
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
                    case '`initials`':						
                        $stmt->bindValue($identifier, $this->initials, PDO::PARAM_STR);
                        break;
                    case '`desc_partenaire`':						
                        $stmt->bindValue($identifier, $this->desc_partenaire, PDO::PARAM_STR);
                        break;
                    case '`desc_partenaire_fr`':						
                        $stmt->bindValue($identifier, $this->desc_partenaire_fr, PDO::PARAM_STR);
                        break;
                    case '`desc_partenaire_en`':						
                        $stmt->bindValue($identifier, $this->desc_partenaire_en, PDO::PARAM_STR);
                        break;
                    case '`desc_partenaire_es`':						
                        $stmt->bindValue($identifier, $this->desc_partenaire_es, PDO::PARAM_STR);
                        break;
                    case '`desc_partenaire_it`':						
                        $stmt->bindValue($identifier, $this->desc_partenaire_it, PDO::PARAM_STR);
                        break;
                    case '`desc_partenaire_ar`':						
                        $stmt->bindValue($identifier, $this->desc_partenaire_ar, PDO::PARAM_STR);
                        break;
                    case '`desc_partenaire_su`':						
                        $stmt->bindValue($identifier, $this->desc_partenaire_su, PDO::PARAM_STR);
                        break;
                    case '`lien_img`':						
                        $stmt->bindValue($identifier, $this->lien_img, PDO::PARAM_STR);
                        break;
                    case '`lien_externe`':						
                        $stmt->bindValue($identifier, $this->lien_externe, PDO::PARAM_STR);
                        break;
                    case '`title`':						
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
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


            if (($retval = CommonPartenairePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonPartenairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getInitials();
                break;
            case 2:
                return $this->getDescPartenaire();
                break;
            case 3:
                return $this->getDescPartenaireFr();
                break;
            case 4:
                return $this->getDescPartenaireEn();
                break;
            case 5:
                return $this->getDescPartenaireEs();
                break;
            case 6:
                return $this->getDescPartenaireIt();
                break;
            case 7:
                return $this->getDescPartenaireAr();
                break;
            case 8:
                return $this->getDescPartenaireSu();
                break;
            case 9:
                return $this->getLienImg();
                break;
            case 10:
                return $this->getLienExterne();
                break;
            case 11:
                return $this->getTitle();
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
        if (isset($alreadyDumpedObjects['CommonPartenaire'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonPartenaire'][$this->getPrimaryKey()] = true;
        $keys = CommonPartenairePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getInitials(),
            $keys[2] => $this->getDescPartenaire(),
            $keys[3] => $this->getDescPartenaireFr(),
            $keys[4] => $this->getDescPartenaireEn(),
            $keys[5] => $this->getDescPartenaireEs(),
            $keys[6] => $this->getDescPartenaireIt(),
            $keys[7] => $this->getDescPartenaireAr(),
            $keys[8] => $this->getDescPartenaireSu(),
            $keys[9] => $this->getLienImg(),
            $keys[10] => $this->getLienExterne(),
            $keys[11] => $this->getTitle(),
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
        $pos = CommonPartenairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setInitials($value);
                break;
            case 2:
                $this->setDescPartenaire($value);
                break;
            case 3:
                $this->setDescPartenaireFr($value);
                break;
            case 4:
                $this->setDescPartenaireEn($value);
                break;
            case 5:
                $this->setDescPartenaireEs($value);
                break;
            case 6:
                $this->setDescPartenaireIt($value);
                break;
            case 7:
                $this->setDescPartenaireAr($value);
                break;
            case 8:
                $this->setDescPartenaireSu($value);
                break;
            case 9:
                $this->setLienImg($value);
                break;
            case 10:
                $this->setLienExterne($value);
                break;
            case 11:
                $this->setTitle($value);
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
        $keys = CommonPartenairePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setInitials($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDescPartenaire($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDescPartenaireFr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDescPartenaireEn($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDescPartenaireEs($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDescPartenaireIt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDescPartenaireAr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDescPartenaireSu($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLienImg($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLienExterne($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTitle($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonPartenairePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonPartenairePeer::ID)) $criteria->add(CommonPartenairePeer::ID, $this->id);
        if ($this->isColumnModified(CommonPartenairePeer::INITIALS)) $criteria->add(CommonPartenairePeer::INITIALS, $this->initials);
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE)) $criteria->add(CommonPartenairePeer::DESC_PARTENAIRE, $this->desc_partenaire);
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_FR)) $criteria->add(CommonPartenairePeer::DESC_PARTENAIRE_FR, $this->desc_partenaire_fr);
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_EN)) $criteria->add(CommonPartenairePeer::DESC_PARTENAIRE_EN, $this->desc_partenaire_en);
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_ES)) $criteria->add(CommonPartenairePeer::DESC_PARTENAIRE_ES, $this->desc_partenaire_es);
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_IT)) $criteria->add(CommonPartenairePeer::DESC_PARTENAIRE_IT, $this->desc_partenaire_it);
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_AR)) $criteria->add(CommonPartenairePeer::DESC_PARTENAIRE_AR, $this->desc_partenaire_ar);
        if ($this->isColumnModified(CommonPartenairePeer::DESC_PARTENAIRE_SU)) $criteria->add(CommonPartenairePeer::DESC_PARTENAIRE_SU, $this->desc_partenaire_su);
        if ($this->isColumnModified(CommonPartenairePeer::LIEN_IMG)) $criteria->add(CommonPartenairePeer::LIEN_IMG, $this->lien_img);
        if ($this->isColumnModified(CommonPartenairePeer::LIEN_EXTERNE)) $criteria->add(CommonPartenairePeer::LIEN_EXTERNE, $this->lien_externe);
        if ($this->isColumnModified(CommonPartenairePeer::TITLE)) $criteria->add(CommonPartenairePeer::TITLE, $this->title);

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
        $criteria = new Criteria(CommonPartenairePeer::DATABASE_NAME);
        $criteria->add(CommonPartenairePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonPartenaire (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInitials($this->getInitials());
        $copyObj->setDescPartenaire($this->getDescPartenaire());
        $copyObj->setDescPartenaireFr($this->getDescPartenaireFr());
        $copyObj->setDescPartenaireEn($this->getDescPartenaireEn());
        $copyObj->setDescPartenaireEs($this->getDescPartenaireEs());
        $copyObj->setDescPartenaireIt($this->getDescPartenaireIt());
        $copyObj->setDescPartenaireAr($this->getDescPartenaireAr());
        $copyObj->setDescPartenaireSu($this->getDescPartenaireSu());
        $copyObj->setLienImg($this->getLienImg());
        $copyObj->setLienExterne($this->getLienExterne());
        $copyObj->setTitle($this->getTitle());
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
     * @return CommonPartenaire Clone of current object.
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
     * @return CommonPartenairePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonPartenairePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->initials = null;
        $this->desc_partenaire = null;
        $this->desc_partenaire_fr = null;
        $this->desc_partenaire_en = null;
        $this->desc_partenaire_es = null;
        $this->desc_partenaire_it = null;
        $this->desc_partenaire_ar = null;
        $this->desc_partenaire_su = null;
        $this->lien_img = null;
        $this->lien_externe = null;
        $this->title = null;
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
        return (string) $this->exportTo(CommonPartenairePeer::DEFAULT_STRING_FORMAT);
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
