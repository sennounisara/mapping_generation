<?php


/**
 * Base class that represents a row from the 'Ligne_DA' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonLigneDA extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonLigneDAPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonLigneDAPeer
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
     * The value for the num_ordre field.
     * @var        string
     */
    protected $num_ordre;

    /**
     * The value for the code_article_specifique field.
     * @var        string
     */
    protected $code_article_specifique;

    /**
     * The value for the libelle_article_specifique field.
     * @var        string
     */
    protected $libelle_article_specifique;

    /**
     * The value for the detail_article_specifique field.
     * @var        string
     */
    protected $detail_article_specifique;

    /**
     * The value for the quantite field.
     * @var        int
     */
    protected $quantite;

    /**
     * The value for the unite field.
     * @var        string
     */
    protected $unite;

    /**
     * The value for the prix_unitaire field.
     * @var        string
     */
    protected $prix_unitaire;

    /**
     * The value for the montant_total field.
     * @var        string
     */
    protected $montant_total;

    /**
     * The value for the quantite_min field.
     * @var        int
     */
    protected $quantite_min;

    /**
     * The value for the quantite_max field.
     * @var        int
     */
    protected $quantite_max;

    /**
     * The value for the da_consultation_ref field.
     * @var        int
     */
    protected $da_consultation_ref;

    /**
     * @var        CommonDAConsultation
     */
    protected $aCommonDAConsultation;

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
     * Get the [num_ordre] column value.
     * 
     * @return string
     */
    public function getNumOrdre()
    {

        return $this->num_ordre;
    }

    /**
     * Get the [code_article_specifique] column value.
     * 
     * @return string
     */
    public function getCodeArticleSpecifique()
    {

        return $this->code_article_specifique;
    }

    /**
     * Get the [libelle_article_specifique] column value.
     * 
     * @return string
     */
    public function getLibelleArticleSpecifique()
    {

        return $this->libelle_article_specifique;
    }

    /**
     * Get the [detail_article_specifique] column value.
     * 
     * @return string
     */
    public function getDetailArticleSpecifique()
    {

        return $this->detail_article_specifique;
    }

    /**
     * Get the [quantite] column value.
     * 
     * @return int
     */
    public function getQuantite()
    {

        return $this->quantite;
    }

    /**
     * Get the [unite] column value.
     * 
     * @return string
     */
    public function getUnite()
    {

        return $this->unite;
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
     * Get the [montant_total] column value.
     * 
     * @return string
     */
    public function getMontantTotal()
    {

        return $this->montant_total;
    }

    /**
     * Get the [quantite_min] column value.
     * 
     * @return int
     */
    public function getQuantiteMin()
    {

        return $this->quantite_min;
    }

    /**
     * Get the [quantite_max] column value.
     * 
     * @return int
     */
    public function getQuantiteMax()
    {

        return $this->quantite_max;
    }

    /**
     * Get the [da_consultation_ref] column value.
     * 
     * @return int
     */
    public function getDaConsultationRef()
    {

        return $this->da_consultation_ref;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [num_ordre] column.
     * 
     * @param string $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setNumOrdre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_ordre !== $v) {
            $this->num_ordre = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::NUM_ORDRE;
        }


        return $this;
    } // setNumOrdre()

    /**
     * Set the value of [code_article_specifique] column.
     * 
     * @param string $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setCodeArticleSpecifique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_article_specifique !== $v) {
            $this->code_article_specifique = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::CODE_ARTICLE_SPECIFIQUE;
        }


        return $this;
    } // setCodeArticleSpecifique()

    /**
     * Set the value of [libelle_article_specifique] column.
     * 
     * @param string $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setLibelleArticleSpecifique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_article_specifique !== $v) {
            $this->libelle_article_specifique = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::LIBELLE_ARTICLE_SPECIFIQUE;
        }


        return $this;
    } // setLibelleArticleSpecifique()

    /**
     * Set the value of [detail_article_specifique] column.
     * 
     * @param string $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setDetailArticleSpecifique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->detail_article_specifique !== $v) {
            $this->detail_article_specifique = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::DETAIL_ARTICLE_SPECIFIQUE;
        }


        return $this;
    } // setDetailArticleSpecifique()

    /**
     * Set the value of [quantite] column.
     * 
     * @param int $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setQuantite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->quantite !== $v) {
            $this->quantite = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::QUANTITE;
        }


        return $this;
    } // setQuantite()

    /**
     * Set the value of [unite] column.
     * 
     * @param string $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setUnite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unite !== $v) {
            $this->unite = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::UNITE;
        }


        return $this;
    } // setUnite()

    /**
     * Set the value of [prix_unitaire] column.
     * 
     * @param string $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setPrixUnitaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prix_unitaire !== $v) {
            $this->prix_unitaire = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::PRIX_UNITAIRE;
        }


        return $this;
    } // setPrixUnitaire()

    /**
     * Set the value of [montant_total] column.
     * 
     * @param string $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setMontantTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_total !== $v) {
            $this->montant_total = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::MONTANT_TOTAL;
        }


        return $this;
    } // setMontantTotal()

    /**
     * Set the value of [quantite_min] column.
     * 
     * @param int $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setQuantiteMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->quantite_min !== $v) {
            $this->quantite_min = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::QUANTITE_MIN;
        }


        return $this;
    } // setQuantiteMin()

    /**
     * Set the value of [quantite_max] column.
     * 
     * @param int $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setQuantiteMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->quantite_max !== $v) {
            $this->quantite_max = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::QUANTITE_MAX;
        }


        return $this;
    } // setQuantiteMax()

    /**
     * Set the value of [da_consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonLigneDA The current object (for fluent API support)
     */
    public function setDaConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->da_consultation_ref !== $v) {
            $this->da_consultation_ref = $v;
            $this->modifiedColumns[] = CommonLigneDAPeer::DA_CONSULTATION_REF;
        }

        if ($this->aCommonDAConsultation !== null && $this->aCommonDAConsultation->getId() !== $v) {
            $this->aCommonDAConsultation = null;
        }


        return $this;
    } // setDaConsultationRef()

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
            $this->num_ordre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->code_article_specifique = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle_article_specifique = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->detail_article_specifique = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->quantite = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->unite = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->prix_unitaire = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->montant_total = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->quantite_min = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->quantite_max = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->da_consultation_ref = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CommonLigneDAPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonLigneDA object", $e);
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

        if ($this->aCommonDAConsultation !== null && $this->da_consultation_ref !== $this->aCommonDAConsultation->getId()) {
            $this->aCommonDAConsultation = null;
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
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonLigneDAPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonDAConsultation = null;
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
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonLigneDAQuery::create()
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
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonLigneDAPeer::addInstanceToPool($this);
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

            if ($this->aCommonDAConsultation !== null) {
                if ($this->aCommonDAConsultation->isModified() || $this->aCommonDAConsultation->isNew()) {
                    $affectedRows += $this->aCommonDAConsultation->save($con);
                }
                $this->setCommonDAConsultation($this->aCommonDAConsultation);
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

        $this->modifiedColumns[] = CommonLigneDAPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonLigneDAPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonLigneDAPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::NUM_ORDRE)) {
            $modifiedColumns[':p' . $index++]  = '`Num_ordre`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::CODE_ARTICLE_SPECIFIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`code_article_specifique`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::LIBELLE_ARTICLE_SPECIFIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_article_specifique`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::DETAIL_ARTICLE_SPECIFIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`detail_article_specifique`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::QUANTITE)) {
            $modifiedColumns[':p' . $index++]  = '`quantite`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::UNITE)) {
            $modifiedColumns[':p' . $index++]  = '`unite`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::PRIX_UNITAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`prix_unitaire`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::MONTANT_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`Montant_total`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::QUANTITE_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`quantite_min`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::QUANTITE_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`quantite_max`';
        }
        if ($this->isColumnModified(CommonLigneDAPeer::DA_CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`DA_Consultation_ref`';
        }

        $sql = sprintf(
            'INSERT INTO `Ligne_DA` (%s) VALUES (%s)',
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
                    case '`Num_ordre`':						
                        $stmt->bindValue($identifier, $this->num_ordre, PDO::PARAM_STR);
                        break;
                    case '`code_article_specifique`':						
                        $stmt->bindValue($identifier, $this->code_article_specifique, PDO::PARAM_STR);
                        break;
                    case '`libelle_article_specifique`':						
                        $stmt->bindValue($identifier, $this->libelle_article_specifique, PDO::PARAM_STR);
                        break;
                    case '`detail_article_specifique`':						
                        $stmt->bindValue($identifier, $this->detail_article_specifique, PDO::PARAM_STR);
                        break;
                    case '`quantite`':						
                        $stmt->bindValue($identifier, $this->quantite, PDO::PARAM_INT);
                        break;
                    case '`unite`':						
                        $stmt->bindValue($identifier, $this->unite, PDO::PARAM_STR);
                        break;
                    case '`prix_unitaire`':						
                        $stmt->bindValue($identifier, $this->prix_unitaire, PDO::PARAM_STR);
                        break;
                    case '`Montant_total`':						
                        $stmt->bindValue($identifier, $this->montant_total, PDO::PARAM_STR);
                        break;
                    case '`quantite_min`':						
                        $stmt->bindValue($identifier, $this->quantite_min, PDO::PARAM_INT);
                        break;
                    case '`quantite_max`':						
                        $stmt->bindValue($identifier, $this->quantite_max, PDO::PARAM_INT);
                        break;
                    case '`DA_Consultation_ref`':						
                        $stmt->bindValue($identifier, $this->da_consultation_ref, PDO::PARAM_INT);
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

            if ($this->aCommonDAConsultation !== null) {
                if (!$this->aCommonDAConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonDAConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonLigneDAPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonLigneDAPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNumOrdre();
                break;
            case 2:
                return $this->getCodeArticleSpecifique();
                break;
            case 3:
                return $this->getLibelleArticleSpecifique();
                break;
            case 4:
                return $this->getDetailArticleSpecifique();
                break;
            case 5:
                return $this->getQuantite();
                break;
            case 6:
                return $this->getUnite();
                break;
            case 7:
                return $this->getPrixUnitaire();
                break;
            case 8:
                return $this->getMontantTotal();
                break;
            case 9:
                return $this->getQuantiteMin();
                break;
            case 10:
                return $this->getQuantiteMax();
                break;
            case 11:
                return $this->getDaConsultationRef();
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
        if (isset($alreadyDumpedObjects['CommonLigneDA'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonLigneDA'][$this->getPrimaryKey()] = true;
        $keys = CommonLigneDAPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNumOrdre(),
            $keys[2] => $this->getCodeArticleSpecifique(),
            $keys[3] => $this->getLibelleArticleSpecifique(),
            $keys[4] => $this->getDetailArticleSpecifique(),
            $keys[5] => $this->getQuantite(),
            $keys[6] => $this->getUnite(),
            $keys[7] => $this->getPrixUnitaire(),
            $keys[8] => $this->getMontantTotal(),
            $keys[9] => $this->getQuantiteMin(),
            $keys[10] => $this->getQuantiteMax(),
            $keys[11] => $this->getDaConsultationRef(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonDAConsultation) {
                $result['CommonDAConsultation'] = $this->aCommonDAConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonLigneDAPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNumOrdre($value);
                break;
            case 2:
                $this->setCodeArticleSpecifique($value);
                break;
            case 3:
                $this->setLibelleArticleSpecifique($value);
                break;
            case 4:
                $this->setDetailArticleSpecifique($value);
                break;
            case 5:
                $this->setQuantite($value);
                break;
            case 6:
                $this->setUnite($value);
                break;
            case 7:
                $this->setPrixUnitaire($value);
                break;
            case 8:
                $this->setMontantTotal($value);
                break;
            case 9:
                $this->setQuantiteMin($value);
                break;
            case 10:
                $this->setQuantiteMax($value);
                break;
            case 11:
                $this->setDaConsultationRef($value);
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
        $keys = CommonLigneDAPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNumOrdre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCodeArticleSpecifique($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleArticleSpecifique($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDetailArticleSpecifique($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setQuantite($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUnite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPrixUnitaire($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMontantTotal($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setQuantiteMin($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setQuantiteMax($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDaConsultationRef($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonLigneDAPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonLigneDAPeer::ID)) $criteria->add(CommonLigneDAPeer::ID, $this->id);
        if ($this->isColumnModified(CommonLigneDAPeer::NUM_ORDRE)) $criteria->add(CommonLigneDAPeer::NUM_ORDRE, $this->num_ordre);
        if ($this->isColumnModified(CommonLigneDAPeer::CODE_ARTICLE_SPECIFIQUE)) $criteria->add(CommonLigneDAPeer::CODE_ARTICLE_SPECIFIQUE, $this->code_article_specifique);
        if ($this->isColumnModified(CommonLigneDAPeer::LIBELLE_ARTICLE_SPECIFIQUE)) $criteria->add(CommonLigneDAPeer::LIBELLE_ARTICLE_SPECIFIQUE, $this->libelle_article_specifique);
        if ($this->isColumnModified(CommonLigneDAPeer::DETAIL_ARTICLE_SPECIFIQUE)) $criteria->add(CommonLigneDAPeer::DETAIL_ARTICLE_SPECIFIQUE, $this->detail_article_specifique);
        if ($this->isColumnModified(CommonLigneDAPeer::QUANTITE)) $criteria->add(CommonLigneDAPeer::QUANTITE, $this->quantite);
        if ($this->isColumnModified(CommonLigneDAPeer::UNITE)) $criteria->add(CommonLigneDAPeer::UNITE, $this->unite);
        if ($this->isColumnModified(CommonLigneDAPeer::PRIX_UNITAIRE)) $criteria->add(CommonLigneDAPeer::PRIX_UNITAIRE, $this->prix_unitaire);
        if ($this->isColumnModified(CommonLigneDAPeer::MONTANT_TOTAL)) $criteria->add(CommonLigneDAPeer::MONTANT_TOTAL, $this->montant_total);
        if ($this->isColumnModified(CommonLigneDAPeer::QUANTITE_MIN)) $criteria->add(CommonLigneDAPeer::QUANTITE_MIN, $this->quantite_min);
        if ($this->isColumnModified(CommonLigneDAPeer::QUANTITE_MAX)) $criteria->add(CommonLigneDAPeer::QUANTITE_MAX, $this->quantite_max);
        if ($this->isColumnModified(CommonLigneDAPeer::DA_CONSULTATION_REF)) $criteria->add(CommonLigneDAPeer::DA_CONSULTATION_REF, $this->da_consultation_ref);

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
        $criteria = new Criteria(CommonLigneDAPeer::DATABASE_NAME);
        $criteria->add(CommonLigneDAPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonLigneDA (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNumOrdre($this->getNumOrdre());
        $copyObj->setCodeArticleSpecifique($this->getCodeArticleSpecifique());
        $copyObj->setLibelleArticleSpecifique($this->getLibelleArticleSpecifique());
        $copyObj->setDetailArticleSpecifique($this->getDetailArticleSpecifique());
        $copyObj->setQuantite($this->getQuantite());
        $copyObj->setUnite($this->getUnite());
        $copyObj->setPrixUnitaire($this->getPrixUnitaire());
        $copyObj->setMontantTotal($this->getMontantTotal());
        $copyObj->setQuantiteMin($this->getQuantiteMin());
        $copyObj->setQuantiteMax($this->getQuantiteMax());
        $copyObj->setDaConsultationRef($this->getDaConsultationRef());

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
     * @return CommonLigneDA Clone of current object.
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
     * @return CommonLigneDAPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonLigneDAPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonDAConsultation object.
     *
     * @param   CommonDAConsultation $v
     * @return CommonLigneDA The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonDAConsultation(CommonDAConsultation $v = null)
    {
        if ($v === null) {
            $this->setDaConsultationRef(NULL);
        } else {
            $this->setDaConsultationRef($v->getId());
        }

        $this->aCommonDAConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonDAConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonLigneDA($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonDAConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonDAConsultation The associated CommonDAConsultation object.
     * @throws PropelException
     */
    public function getCommonDAConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonDAConsultation === null && ($this->da_consultation_ref !== null) && $doQuery) {
            $this->aCommonDAConsultation = CommonDAConsultationQuery::create()->findPk($this->da_consultation_ref, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonDAConsultation->addCommonLigneDAs($this);
             */
        }

        return $this->aCommonDAConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->num_ordre = null;
        $this->code_article_specifique = null;
        $this->libelle_article_specifique = null;
        $this->detail_article_specifique = null;
        $this->quantite = null;
        $this->unite = null;
        $this->prix_unitaire = null;
        $this->montant_total = null;
        $this->quantite_min = null;
        $this->quantite_max = null;
        $this->da_consultation_ref = null;
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
            if ($this->aCommonDAConsultation instanceof Persistent) {
              $this->aCommonDAConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonDAConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonLigneDAPeer::DEFAULT_STRING_FORMAT);
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
