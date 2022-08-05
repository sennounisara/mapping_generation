<?php


/**
 * Base class that represents a row from the 'article_catalogue' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonArticleCatalogue extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonArticleCataloguePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonArticleCataloguePeer
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
     * The value for the reference field.
     * @var        string
     */
    protected $reference;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the prix_unitaire field.
     * @var        double
     */
    protected $prix_unitaire;

    /**
     * The value for the delai_livraison field.
     * @var        int
     */
    protected $delai_livraison;

    /**
     * The value for the type_categorie field.
     * @var        int
     */
    protected $type_categorie;

    /**
     * The value for the id_marque field.
     * @var        int
     */
    protected $id_marque;

    /**
     * The value for the id_fabriquant field.
     * @var        int
     */
    protected $id_fabriquant;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * The value for the unite_delai_livraison field.
     * @var        int
     */
    protected $unite_delai_livraison;

    /**
     * The value for the id_catalogue field.
     * @var        int
     */
    protected $id_catalogue;

    /**
     * The value for the actif field.
     * @var        boolean
     */
    protected $actif;

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
     * Get the [reference] column value.
     * 
     * @return string
     */
    public function getReference()
    {

        return $this->reference;
    }

    /**
     * Get the [description] column value.
     * 
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [prix_unitaire] column value.
     * 
     * @return double
     */
    public function getPrixUnitaire()
    {

        return $this->prix_unitaire;
    }

    /**
     * Get the [delai_livraison] column value.
     * 
     * @return int
     */
    public function getDelaiLivraison()
    {

        return $this->delai_livraison;
    }

    /**
     * Get the [type_categorie] column value.
     * 
     * @return int
     */
    public function getTypeCategorie()
    {

        return $this->type_categorie;
    }

    /**
     * Get the [id_marque] column value.
     * 
     * @return int
     */
    public function getIdMarque()
    {

        return $this->id_marque;
    }

    /**
     * Get the [id_fabriquant] column value.
     * 
     * @return int
     */
    public function getIdFabriquant()
    {

        return $this->id_fabriquant;
    }

    /**
     * Get the [id_blob] column value.
     * 
     * @return int
     */
    public function getIdBlob()
    {

        return $this->id_blob;
    }

    /**
     * Get the [unite_delai_livraison] column value.
     * 
     * @return int
     */
    public function getUniteDelaiLivraison()
    {

        return $this->unite_delai_livraison;
    }

    /**
     * Get the [id_catalogue] column value.
     * 
     * @return int
     */
    public function getIdCatalogue()
    {

        return $this->id_catalogue;
    }

    /**
     * Get the [actif] column value.
     * 
     * @return boolean
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [reference] column.
     * 
     * @param string $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reference !== $v) {
            $this->reference = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::REFERENCE;
        }


        return $this;
    } // setReference()

    /**
     * Set the value of [description] column.
     * 
     * @param string $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [prix_unitaire] column.
     * 
     * @param double $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setPrixUnitaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_unitaire !== $v) {
            $this->prix_unitaire = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::PRIX_UNITAIRE;
        }


        return $this;
    } // setPrixUnitaire()

    /**
     * Set the value of [delai_livraison] column.
     * 
     * @param int $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setDelaiLivraison($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_livraison !== $v) {
            $this->delai_livraison = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::DELAI_LIVRAISON;
        }


        return $this;
    } // setDelaiLivraison()

    /**
     * Set the value of [type_categorie] column.
     * 
     * @param int $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setTypeCategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_categorie !== $v) {
            $this->type_categorie = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::TYPE_CATEGORIE;
        }


        return $this;
    } // setTypeCategorie()

    /**
     * Set the value of [id_marque] column.
     * 
     * @param int $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setIdMarque($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_marque !== $v) {
            $this->id_marque = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::ID_MARQUE;
        }


        return $this;
    } // setIdMarque()

    /**
     * Set the value of [id_fabriquant] column.
     * 
     * @param int $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setIdFabriquant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_fabriquant !== $v) {
            $this->id_fabriquant = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::ID_FABRIQUANT;
        }


        return $this;
    } // setIdFabriquant()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [unite_delai_livraison] column.
     * 
     * @param int $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setUniteDelaiLivraison($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unite_delai_livraison !== $v) {
            $this->unite_delai_livraison = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::UNITE_DELAI_LIVRAISON;
        }


        return $this;
    } // setUniteDelaiLivraison()

    /**
     * Set the value of [id_catalogue] column.
     * 
     * @param int $v new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setIdCatalogue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_catalogue !== $v) {
            $this->id_catalogue = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::ID_CATALOGUE;
        }


        return $this;
    } // setIdCatalogue()

    /**
     * Sets the value of the [actif] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonArticleCatalogue The current object (for fluent API support)
     */
    public function setActif($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->actif !== $v) {
            $this->actif = $v;
            $this->modifiedColumns[] = CommonArticleCataloguePeer::ACTIF;
        }


        return $this;
    } // setActif()

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
            $this->reference = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->prix_unitaire = ($row[$startcol + 3] !== null) ? (double) $row[$startcol + 3] : null;
            $this->delai_livraison = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->type_categorie = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_marque = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_fabriquant = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->id_blob = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->unite_delai_livraison = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->id_catalogue = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->actif = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CommonArticleCataloguePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonArticleCatalogue object", $e);
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
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonArticleCataloguePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonArticleCatalogueQuery::create()
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
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonArticleCataloguePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonArticleCataloguePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonArticleCataloguePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonArticleCataloguePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`reference`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::PRIX_UNITAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`prix_unitaire`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::DELAI_LIVRAISON)) {
            $modifiedColumns[':p' . $index++]  = '`delai_livraison`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::TYPE_CATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`type_categorie`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::ID_MARQUE)) {
            $modifiedColumns[':p' . $index++]  = '`id_marque`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::ID_FABRIQUANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_fabriquant`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::UNITE_DELAI_LIVRAISON)) {
            $modifiedColumns[':p' . $index++]  = '`unite_delai_livraison`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::ID_CATALOGUE)) {
            $modifiedColumns[':p' . $index++]  = '`id_catalogue`';
        }
        if ($this->isColumnModified(CommonArticleCataloguePeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }

        $sql = sprintf(
            'INSERT INTO `article_catalogue` (%s) VALUES (%s)',
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
                    case '`reference`':						
                        $stmt->bindValue($identifier, $this->reference, PDO::PARAM_STR);
                        break;
                    case '`description`':						
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`prix_unitaire`':						
                        $stmt->bindValue($identifier, $this->prix_unitaire, PDO::PARAM_STR);
                        break;
                    case '`delai_livraison`':						
                        $stmt->bindValue($identifier, $this->delai_livraison, PDO::PARAM_INT);
                        break;
                    case '`type_categorie`':						
                        $stmt->bindValue($identifier, $this->type_categorie, PDO::PARAM_INT);
                        break;
                    case '`id_marque`':						
                        $stmt->bindValue($identifier, $this->id_marque, PDO::PARAM_INT);
                        break;
                    case '`id_fabriquant`':						
                        $stmt->bindValue($identifier, $this->id_fabriquant, PDO::PARAM_INT);
                        break;
                    case '`id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`unite_delai_livraison`':						
                        $stmt->bindValue($identifier, $this->unite_delai_livraison, PDO::PARAM_INT);
                        break;
                    case '`id_catalogue`':						
                        $stmt->bindValue($identifier, $this->id_catalogue, PDO::PARAM_INT);
                        break;
                    case '`actif`':
                        $stmt->bindValue($identifier, (int) $this->actif, PDO::PARAM_INT);
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


            if (($retval = CommonArticleCataloguePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonArticleCataloguePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getReference();
                break;
            case 2:
                return $this->getDescription();
                break;
            case 3:
                return $this->getPrixUnitaire();
                break;
            case 4:
                return $this->getDelaiLivraison();
                break;
            case 5:
                return $this->getTypeCategorie();
                break;
            case 6:
                return $this->getIdMarque();
                break;
            case 7:
                return $this->getIdFabriquant();
                break;
            case 8:
                return $this->getIdBlob();
                break;
            case 9:
                return $this->getUniteDelaiLivraison();
                break;
            case 10:
                return $this->getIdCatalogue();
                break;
            case 11:
                return $this->getActif();
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
        if (isset($alreadyDumpedObjects['CommonArticleCatalogue'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonArticleCatalogue'][$this->getPrimaryKey()] = true;
        $keys = CommonArticleCataloguePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getReference(),
            $keys[2] => $this->getDescription(),
            $keys[3] => $this->getPrixUnitaire(),
            $keys[4] => $this->getDelaiLivraison(),
            $keys[5] => $this->getTypeCategorie(),
            $keys[6] => $this->getIdMarque(),
            $keys[7] => $this->getIdFabriquant(),
            $keys[8] => $this->getIdBlob(),
            $keys[9] => $this->getUniteDelaiLivraison(),
            $keys[10] => $this->getIdCatalogue(),
            $keys[11] => $this->getActif(),
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
        $pos = CommonArticleCataloguePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setReference($value);
                break;
            case 2:
                $this->setDescription($value);
                break;
            case 3:
                $this->setPrixUnitaire($value);
                break;
            case 4:
                $this->setDelaiLivraison($value);
                break;
            case 5:
                $this->setTypeCategorie($value);
                break;
            case 6:
                $this->setIdMarque($value);
                break;
            case 7:
                $this->setIdFabriquant($value);
                break;
            case 8:
                $this->setIdBlob($value);
                break;
            case 9:
                $this->setUniteDelaiLivraison($value);
                break;
            case 10:
                $this->setIdCatalogue($value);
                break;
            case 11:
                $this->setActif($value);
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
        $keys = CommonArticleCataloguePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setReference($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPrixUnitaire($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDelaiLivraison($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTypeCategorie($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdMarque($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdFabriquant($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdBlob($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUniteDelaiLivraison($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIdCatalogue($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setActif($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonArticleCataloguePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonArticleCataloguePeer::ID)) $criteria->add(CommonArticleCataloguePeer::ID, $this->id);
        if ($this->isColumnModified(CommonArticleCataloguePeer::REFERENCE)) $criteria->add(CommonArticleCataloguePeer::REFERENCE, $this->reference);
        if ($this->isColumnModified(CommonArticleCataloguePeer::DESCRIPTION)) $criteria->add(CommonArticleCataloguePeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(CommonArticleCataloguePeer::PRIX_UNITAIRE)) $criteria->add(CommonArticleCataloguePeer::PRIX_UNITAIRE, $this->prix_unitaire);
        if ($this->isColumnModified(CommonArticleCataloguePeer::DELAI_LIVRAISON)) $criteria->add(CommonArticleCataloguePeer::DELAI_LIVRAISON, $this->delai_livraison);
        if ($this->isColumnModified(CommonArticleCataloguePeer::TYPE_CATEGORIE)) $criteria->add(CommonArticleCataloguePeer::TYPE_CATEGORIE, $this->type_categorie);
        if ($this->isColumnModified(CommonArticleCataloguePeer::ID_MARQUE)) $criteria->add(CommonArticleCataloguePeer::ID_MARQUE, $this->id_marque);
        if ($this->isColumnModified(CommonArticleCataloguePeer::ID_FABRIQUANT)) $criteria->add(CommonArticleCataloguePeer::ID_FABRIQUANT, $this->id_fabriquant);
        if ($this->isColumnModified(CommonArticleCataloguePeer::ID_BLOB)) $criteria->add(CommonArticleCataloguePeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(CommonArticleCataloguePeer::UNITE_DELAI_LIVRAISON)) $criteria->add(CommonArticleCataloguePeer::UNITE_DELAI_LIVRAISON, $this->unite_delai_livraison);
        if ($this->isColumnModified(CommonArticleCataloguePeer::ID_CATALOGUE)) $criteria->add(CommonArticleCataloguePeer::ID_CATALOGUE, $this->id_catalogue);
        if ($this->isColumnModified(CommonArticleCataloguePeer::ACTIF)) $criteria->add(CommonArticleCataloguePeer::ACTIF, $this->actif);

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
        $criteria = new Criteria(CommonArticleCataloguePeer::DATABASE_NAME);
        $criteria->add(CommonArticleCataloguePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonArticleCatalogue (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setReference($this->getReference());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setPrixUnitaire($this->getPrixUnitaire());
        $copyObj->setDelaiLivraison($this->getDelaiLivraison());
        $copyObj->setTypeCategorie($this->getTypeCategorie());
        $copyObj->setIdMarque($this->getIdMarque());
        $copyObj->setIdFabriquant($this->getIdFabriquant());
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setUniteDelaiLivraison($this->getUniteDelaiLivraison());
        $copyObj->setIdCatalogue($this->getIdCatalogue());
        $copyObj->setActif($this->getActif());
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
     * @return CommonArticleCatalogue Clone of current object.
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
     * @return CommonArticleCataloguePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonArticleCataloguePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->reference = null;
        $this->description = null;
        $this->prix_unitaire = null;
        $this->delai_livraison = null;
        $this->type_categorie = null;
        $this->id_marque = null;
        $this->id_fabriquant = null;
        $this->id_blob = null;
        $this->unite_delai_livraison = null;
        $this->id_catalogue = null;
        $this->actif = null;
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
        return (string) $this->exportTo(CommonArticleCataloguePeer::DEFAULT_STRING_FORMAT);
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
