<?php


/**
 * Base class that represents a row from the 'Certificats_Entreprises' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCertificatsEntreprises extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonCertificatsEntreprisesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonCertificatsEntreprisesPeer
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
     * The value for the certificat field.
     * @var        string
     */
    protected $certificat;

    /**
     * The value for the date_debut field.
     * @var        string
     */
    protected $date_debut;

    /**
     * The value for the date_fin field.
     * @var        string
     */
    protected $date_fin;

    /**
     * The value for the id_inscrit field.
     * @var        int
     */
    protected $id_inscrit;

    /**
     * The value for the nom_inscrit field.
     * @var        string
     */
    protected $nom_inscrit;

    /**
     * The value for the prenom_inscrit field.
     * @var        string
     */
    protected $prenom_inscrit;

    /**
     * The value for the id_entreprise field.
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the statut_revoque field.
     * @var        string
     */
    protected $statut_revoque;

    /**
     * The value for the date_revoquation field.
     * @var        string
     */
    protected $date_revoquation;

    /**
     * The value for the mail_inscrit field.
     * @var        string
     */
    protected $mail_inscrit;

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
     * Get the [certificat] column value.
     * 
     * @return string
     */
    public function getCertificat()
    {

        return $this->certificat;
    }

    /**
     * Get the [date_debut] column value.
     * 
     * @return string
     */
    public function getDateDebut()
    {

        return $this->date_debut;
    }

    /**
     * Get the [date_fin] column value.
     * 
     * @return string
     */
    public function getDateFin()
    {

        return $this->date_fin;
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
     * Get the [nom_inscrit] column value.
     * 
     * @return string
     */
    public function getNomInscrit()
    {

        return $this->nom_inscrit;
    }

    /**
     * Get the [prenom_inscrit] column value.
     * 
     * @return string
     */
    public function getPrenomInscrit()
    {

        return $this->prenom_inscrit;
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
     * Get the [statut_revoque] column value.
     * 
     * @return string
     */
    public function getStatutRevoque()
    {

        return $this->statut_revoque;
    }

    /**
     * Get the [date_revoquation] column value.
     * 
     * @return string
     */
    public function getDateRevoquation()
    {

        return $this->date_revoquation;
    }

    /**
     * Get the [mail_inscrit] column value.
     * 
     * @return string
     */
    public function getMailInscrit()
    {

        return $this->mail_inscrit;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [certificat] column.
     * 
     * @param string $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->certificat !== $v) {
            $this->certificat = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::CERTIFICAT;
        }


        return $this;
    } // setCertificat()

    /**
     * Set the value of [date_debut] column.
     * 
     * @param string $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setDateDebut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_debut !== $v) {
            $this->date_debut = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::DATE_DEBUT;
        }


        return $this;
    } // setDateDebut()

    /**
     * Set the value of [date_fin] column.
     * 
     * @param string $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setDateFin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_fin !== $v) {
            $this->date_fin = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::DATE_FIN;
        }


        return $this;
    } // setDateFin()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [nom_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setNomInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_inscrit !== $v) {
            $this->nom_inscrit = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::NOM_INSCRIT;
        }


        return $this;
    } // setNomInscrit()

    /**
     * Set the value of [prenom_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setPrenomInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_inscrit !== $v) {
            $this->prenom_inscrit = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::PRENOM_INSCRIT;
        }


        return $this;
    } // setPrenomInscrit()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [statut_revoque] column.
     * 
     * @param string $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setStatutRevoque($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_revoque !== $v) {
            $this->statut_revoque = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::STATUT_REVOQUE;
        }


        return $this;
    } // setStatutRevoque()

    /**
     * Set the value of [date_revoquation] column.
     * 
     * @param string $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setDateRevoquation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_revoquation !== $v) {
            $this->date_revoquation = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::DATE_REVOQUATION;
        }


        return $this;
    } // setDateRevoquation()

    /**
     * Set the value of [mail_inscrit] column.
     * 
     * @param string $v new value
     * @return CommonCertificatsEntreprises The current object (for fluent API support)
     */
    public function setMailInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail_inscrit !== $v) {
            $this->mail_inscrit = $v;
            $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::MAIL_INSCRIT;
        }


        return $this;
    } // setMailInscrit()

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
            $this->certificat = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->date_debut = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->date_fin = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_inscrit = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->nom_inscrit = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->prenom_inscrit = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_entreprise = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->statut_revoque = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->date_revoquation = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->mail_inscrit = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = CommonCertificatsEntreprisesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonCertificatsEntreprises object", $e);
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
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonCertificatsEntreprisesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonCertificatsEntreprisesQuery::create()
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
            $con = Propel::getConnection(CommonCertificatsEntreprisesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonCertificatsEntreprisesPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonCertificatsEntreprisesPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonCertificatsEntreprisesPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`certificat`';
        }
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::DATE_DEBUT)) {
            $modifiedColumns[':p' . $index++]  = '`date_debut`';
        }
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::DATE_FIN)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin`';
        }
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`id_inscrit`';
        }
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::NOM_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_inscrit`';
        }
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::PRENOM_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_inscrit`';
        }
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise`';
        }
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::STATUT_REVOQUE)) {
            $modifiedColumns[':p' . $index++]  = '`statut_revoque`';
        }
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::DATE_REVOQUATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_revoquation`';
        }
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::MAIL_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`mail_inscrit`';
        }

        $sql = sprintf(
            'INSERT INTO `Certificats_Entreprises` (%s) VALUES (%s)',
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
                    case '`certificat`':						
                        $stmt->bindValue($identifier, $this->certificat, PDO::PARAM_STR);
                        break;
                    case '`date_debut`':						
                        $stmt->bindValue($identifier, $this->date_debut, PDO::PARAM_STR);
                        break;
                    case '`date_fin`':						
                        $stmt->bindValue($identifier, $this->date_fin, PDO::PARAM_STR);
                        break;
                    case '`id_inscrit`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`nom_inscrit`':						
                        $stmt->bindValue($identifier, $this->nom_inscrit, PDO::PARAM_STR);
                        break;
                    case '`prenom_inscrit`':						
                        $stmt->bindValue($identifier, $this->prenom_inscrit, PDO::PARAM_STR);
                        break;
                    case '`id_entreprise`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`statut_revoque`':						
                        $stmt->bindValue($identifier, $this->statut_revoque, PDO::PARAM_STR);
                        break;
                    case '`date_revoquation`':						
                        $stmt->bindValue($identifier, $this->date_revoquation, PDO::PARAM_STR);
                        break;
                    case '`mail_inscrit`':						
                        $stmt->bindValue($identifier, $this->mail_inscrit, PDO::PARAM_STR);
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


            if (($retval = CommonCertificatsEntreprisesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonCertificatsEntreprisesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCertificat();
                break;
            case 2:
                return $this->getDateDebut();
                break;
            case 3:
                return $this->getDateFin();
                break;
            case 4:
                return $this->getIdInscrit();
                break;
            case 5:
                return $this->getNomInscrit();
                break;
            case 6:
                return $this->getPrenomInscrit();
                break;
            case 7:
                return $this->getIdEntreprise();
                break;
            case 8:
                return $this->getStatutRevoque();
                break;
            case 9:
                return $this->getDateRevoquation();
                break;
            case 10:
                return $this->getMailInscrit();
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
        if (isset($alreadyDumpedObjects['CommonCertificatsEntreprises'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonCertificatsEntreprises'][$this->getPrimaryKey()] = true;
        $keys = CommonCertificatsEntreprisesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getCertificat(),
            $keys[2] => $this->getDateDebut(),
            $keys[3] => $this->getDateFin(),
            $keys[4] => $this->getIdInscrit(),
            $keys[5] => $this->getNomInscrit(),
            $keys[6] => $this->getPrenomInscrit(),
            $keys[7] => $this->getIdEntreprise(),
            $keys[8] => $this->getStatutRevoque(),
            $keys[9] => $this->getDateRevoquation(),
            $keys[10] => $this->getMailInscrit(),
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
        $pos = CommonCertificatsEntreprisesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCertificat($value);
                break;
            case 2:
                $this->setDateDebut($value);
                break;
            case 3:
                $this->setDateFin($value);
                break;
            case 4:
                $this->setIdInscrit($value);
                break;
            case 5:
                $this->setNomInscrit($value);
                break;
            case 6:
                $this->setPrenomInscrit($value);
                break;
            case 7:
                $this->setIdEntreprise($value);
                break;
            case 8:
                $this->setStatutRevoque($value);
                break;
            case 9:
                $this->setDateRevoquation($value);
                break;
            case 10:
                $this->setMailInscrit($value);
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
        $keys = CommonCertificatsEntreprisesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCertificat($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDateDebut($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDateFin($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdInscrit($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNomInscrit($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrenomInscrit($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdEntreprise($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStatutRevoque($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateRevoquation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMailInscrit($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonCertificatsEntreprisesPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::ID)) $criteria->add(CommonCertificatsEntreprisesPeer::ID, $this->id);
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::CERTIFICAT)) $criteria->add(CommonCertificatsEntreprisesPeer::CERTIFICAT, $this->certificat);
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::DATE_DEBUT)) $criteria->add(CommonCertificatsEntreprisesPeer::DATE_DEBUT, $this->date_debut);
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::DATE_FIN)) $criteria->add(CommonCertificatsEntreprisesPeer::DATE_FIN, $this->date_fin);
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::ID_INSCRIT)) $criteria->add(CommonCertificatsEntreprisesPeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::NOM_INSCRIT)) $criteria->add(CommonCertificatsEntreprisesPeer::NOM_INSCRIT, $this->nom_inscrit);
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::PRENOM_INSCRIT)) $criteria->add(CommonCertificatsEntreprisesPeer::PRENOM_INSCRIT, $this->prenom_inscrit);
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::ID_ENTREPRISE)) $criteria->add(CommonCertificatsEntreprisesPeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::STATUT_REVOQUE)) $criteria->add(CommonCertificatsEntreprisesPeer::STATUT_REVOQUE, $this->statut_revoque);
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::DATE_REVOQUATION)) $criteria->add(CommonCertificatsEntreprisesPeer::DATE_REVOQUATION, $this->date_revoquation);
        if ($this->isColumnModified(CommonCertificatsEntreprisesPeer::MAIL_INSCRIT)) $criteria->add(CommonCertificatsEntreprisesPeer::MAIL_INSCRIT, $this->mail_inscrit);

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
        $criteria = new Criteria(CommonCertificatsEntreprisesPeer::DATABASE_NAME);
        $criteria->add(CommonCertificatsEntreprisesPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonCertificatsEntreprises (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCertificat($this->getCertificat());
        $copyObj->setDateDebut($this->getDateDebut());
        $copyObj->setDateFin($this->getDateFin());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setNomInscrit($this->getNomInscrit());
        $copyObj->setPrenomInscrit($this->getPrenomInscrit());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setStatutRevoque($this->getStatutRevoque());
        $copyObj->setDateRevoquation($this->getDateRevoquation());
        $copyObj->setMailInscrit($this->getMailInscrit());
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
     * @return CommonCertificatsEntreprises Clone of current object.
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
     * @return CommonCertificatsEntreprisesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonCertificatsEntreprisesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->certificat = null;
        $this->date_debut = null;
        $this->date_fin = null;
        $this->id_inscrit = null;
        $this->nom_inscrit = null;
        $this->prenom_inscrit = null;
        $this->id_entreprise = null;
        $this->statut_revoque = null;
        $this->date_revoquation = null;
        $this->mail_inscrit = null;
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
        return (string) $this->exportTo(CommonCertificatsEntreprisesPeer::DEFAULT_STRING_FORMAT);
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
