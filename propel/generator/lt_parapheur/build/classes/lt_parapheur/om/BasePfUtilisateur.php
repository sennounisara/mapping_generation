<?php


/**
 * Base class that represents a row from the 'pf_utilisateur' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfUtilisateur extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PfUtilisateurPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PfUtilisateurPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_utilisateur field.
     * @var        int
     */
    protected $id_utilisateur;

    /**
     * The value for the login field.
     * @var        string
     */
    protected $login;

    /**
     * The value for the mot_de_passe field.
     * @var        string
     */
    protected $mot_de_passe;

    /**
     * The value for the profil field.
     * @var        string
     */
    protected $profil;

    /**
     * The value for the nom_fr field.
     * @var        string
     */
    protected $nom_fr;

    /**
     * The value for the prenom_fr field.
     * @var        string
     */
    protected $prenom_fr;

    /**
     * The value for the nom_ar field.
     * @var        string
     */
    protected $nom_ar;

    /**
     * The value for the prenom_ar field.
     * @var        string
     */
    protected $prenom_ar;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the telephone field.
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the actif field.
     * Note: this column has a database default value of: '1'
     * @var        string
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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->actif = '1';
    }

    /**
     * Initializes internal state of BasePfUtilisateur object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_utilisateur] column value.
     * 
     * @return int
     */
    public function getIdUtilisateur()
    {

        return $this->id_utilisateur;
    }

    /**
     * Get the [login] column value.
     * 
     * @return string
     */
    public function getLogin()
    {

        return $this->login;
    }

    /**
     * Get the [mot_de_passe] column value.
     * 
     * @return string
     */
    public function getMotDePasse()
    {

        return $this->mot_de_passe;
    }

    /**
     * Get the [profil] column value.
     * 
     * @return string
     */
    public function getProfil()
    {

        return $this->profil;
    }

    /**
     * Get the [nom_fr] column value.
     * 
     * @return string
     */
    public function getNomFr()
    {

        return $this->nom_fr;
    }

    /**
     * Get the [prenom_fr] column value.
     * 
     * @return string
     */
    public function getPrenomFr()
    {

        return $this->prenom_fr;
    }

    /**
     * Get the [nom_ar] column value.
     * 
     * @return string
     */
    public function getNomAr()
    {

        return $this->nom_ar;
    }

    /**
     * Get the [prenom_ar] column value.
     * 
     * @return string
     */
    public function getPrenomAr()
    {

        return $this->prenom_ar;
    }

    /**
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [telephone] column value.
     * 
     * @return string
     */
    public function getTelephone()
    {

        return $this->telephone;
    }

    /**
     * Get the [actif] column value.
     * 
     * @return string
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Set the value of [id_utilisateur] column.
     * 
     * @param int $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setIdUtilisateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_utilisateur !== $v) {
            $this->id_utilisateur = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::ID_UTILISATEUR;
        }


        return $this;
    } // setIdUtilisateur()

    /**
     * Set the value of [login] column.
     * 
     * @param string $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setLogin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->login !== $v) {
            $this->login = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::LOGIN;
        }


        return $this;
    } // setLogin()

    /**
     * Set the value of [mot_de_passe] column.
     * 
     * @param string $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setMotDePasse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mot_de_passe !== $v) {
            $this->mot_de_passe = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::MOT_DE_PASSE;
        }


        return $this;
    } // setMotDePasse()

    /**
     * Set the value of [profil] column.
     * 
     * @param string $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setProfil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->profil !== $v) {
            $this->profil = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::PROFIL;
        }


        return $this;
    } // setProfil()

    /**
     * Set the value of [nom_fr] column.
     * 
     * @param string $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setNomFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fr !== $v) {
            $this->nom_fr = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::NOM_FR;
        }


        return $this;
    } // setNomFr()

    /**
     * Set the value of [prenom_fr] column.
     * 
     * @param string $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setPrenomFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_fr !== $v) {
            $this->prenom_fr = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::PRENOM_FR;
        }


        return $this;
    } // setPrenomFr()

    /**
     * Set the value of [nom_ar] column.
     * 
     * @param string $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setNomAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_ar !== $v) {
            $this->nom_ar = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::NOM_AR;
        }


        return $this;
    } // setNomAr()

    /**
     * Set the value of [prenom_ar] column.
     * 
     * @param string $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setPrenomAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_ar !== $v) {
            $this->prenom_ar = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::PRENOM_AR;
        }


        return $this;
    } // setPrenomAr()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [actif] column.
     * 
     * @param string $v new value
     * @return PfUtilisateur The current object (for fluent API support)
     */
    public function setActif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif !== $v) {
            $this->actif = $v;
            $this->modifiedColumns[] = PfUtilisateurPeer::ACTIF;
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
            if ($this->actif !== '1') {
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

            $this->id_utilisateur = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->login = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->mot_de_passe = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->profil = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->nom_fr = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->prenom_fr = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->nom_ar = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->prenom_ar = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->email = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->telephone = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->actif = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 11; // 11 = PfUtilisateurPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PfUtilisateur object", $e);
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
            $con = Propel::getConnection(PfUtilisateurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PfUtilisateurPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PfUtilisateurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PfUtilisateurQuery::create()
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
            $con = Propel::getConnection(PfUtilisateurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PfUtilisateurPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PfUtilisateurPeer::ID_UTILISATEUR;
        if (null !== $this->id_utilisateur) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PfUtilisateurPeer::ID_UTILISATEUR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PfUtilisateurPeer::ID_UTILISATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`ID_UTILISATEUR`';
        }
        if ($this->isColumnModified(PfUtilisateurPeer::LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`LOGIN`';
        }
        if ($this->isColumnModified(PfUtilisateurPeer::MOT_DE_PASSE)) {
            $modifiedColumns[':p' . $index++]  = '`MOT_DE_PASSE`';
        }
        if ($this->isColumnModified(PfUtilisateurPeer::PROFIL)) {
            $modifiedColumns[':p' . $index++]  = '`PROFIL`';
        }
        if ($this->isColumnModified(PfUtilisateurPeer::NOM_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_FR`';
        }
        if ($this->isColumnModified(PfUtilisateurPeer::PRENOM_FR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_FR`';
        }
        if ($this->isColumnModified(PfUtilisateurPeer::NOM_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AR`';
        }
        if ($this->isColumnModified(PfUtilisateurPeer::PRENOM_AR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AR`';
        }
        if ($this->isColumnModified(PfUtilisateurPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`EMAIL`';
        }
        if ($this->isColumnModified(PfUtilisateurPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`TELEPHONE`';
        }
        if ($this->isColumnModified(PfUtilisateurPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`ACTIF`';
        }

        $sql = sprintf(
            'INSERT INTO `pf_utilisateur` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_UTILISATEUR`':						
                        $stmt->bindValue($identifier, $this->id_utilisateur, PDO::PARAM_INT);
                        break;
                    case '`LOGIN`':						
                        $stmt->bindValue($identifier, $this->login, PDO::PARAM_STR);
                        break;
                    case '`MOT_DE_PASSE`':						
                        $stmt->bindValue($identifier, $this->mot_de_passe, PDO::PARAM_STR);
                        break;
                    case '`PROFIL`':						
                        $stmt->bindValue($identifier, $this->profil, PDO::PARAM_STR);
                        break;
                    case '`NOM_FR`':						
                        $stmt->bindValue($identifier, $this->nom_fr, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_FR`':						
                        $stmt->bindValue($identifier, $this->prenom_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_AR`':						
                        $stmt->bindValue($identifier, $this->nom_ar, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AR`':						
                        $stmt->bindValue($identifier, $this->prenom_ar, PDO::PARAM_STR);
                        break;
                    case '`EMAIL`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`TELEPHONE`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`ACTIF`':						
                        $stmt->bindValue($identifier, $this->actif, PDO::PARAM_STR);
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
        $this->setIdUtilisateur($pk);

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


            if (($retval = PfUtilisateurPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PfUtilisateurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdUtilisateur();
                break;
            case 1:
                return $this->getLogin();
                break;
            case 2:
                return $this->getMotDePasse();
                break;
            case 3:
                return $this->getProfil();
                break;
            case 4:
                return $this->getNomFr();
                break;
            case 5:
                return $this->getPrenomFr();
                break;
            case 6:
                return $this->getNomAr();
                break;
            case 7:
                return $this->getPrenomAr();
                break;
            case 8:
                return $this->getEmail();
                break;
            case 9:
                return $this->getTelephone();
                break;
            case 10:
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
        if (isset($alreadyDumpedObjects['PfUtilisateur'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PfUtilisateur'][$this->getPrimaryKey()] = true;
        $keys = PfUtilisateurPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdUtilisateur(),
            $keys[1] => $this->getLogin(),
            $keys[2] => $this->getMotDePasse(),
            $keys[3] => $this->getProfil(),
            $keys[4] => $this->getNomFr(),
            $keys[5] => $this->getPrenomFr(),
            $keys[6] => $this->getNomAr(),
            $keys[7] => $this->getPrenomAr(),
            $keys[8] => $this->getEmail(),
            $keys[9] => $this->getTelephone(),
            $keys[10] => $this->getActif(),
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
        $pos = PfUtilisateurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdUtilisateur($value);
                break;
            case 1:
                $this->setLogin($value);
                break;
            case 2:
                $this->setMotDePasse($value);
                break;
            case 3:
                $this->setProfil($value);
                break;
            case 4:
                $this->setNomFr($value);
                break;
            case 5:
                $this->setPrenomFr($value);
                break;
            case 6:
                $this->setNomAr($value);
                break;
            case 7:
                $this->setPrenomAr($value);
                break;
            case 8:
                $this->setEmail($value);
                break;
            case 9:
                $this->setTelephone($value);
                break;
            case 10:
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
        $keys = PfUtilisateurPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdUtilisateur($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLogin($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMotDePasse($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProfil($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNomFr($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPrenomFr($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNomAr($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPrenomAr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEmail($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTelephone($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setActif($arr[$keys[10]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PfUtilisateurPeer::DATABASE_NAME);

        if ($this->isColumnModified(PfUtilisateurPeer::ID_UTILISATEUR)) $criteria->add(PfUtilisateurPeer::ID_UTILISATEUR, $this->id_utilisateur);
        if ($this->isColumnModified(PfUtilisateurPeer::LOGIN)) $criteria->add(PfUtilisateurPeer::LOGIN, $this->login);
        if ($this->isColumnModified(PfUtilisateurPeer::MOT_DE_PASSE)) $criteria->add(PfUtilisateurPeer::MOT_DE_PASSE, $this->mot_de_passe);
        if ($this->isColumnModified(PfUtilisateurPeer::PROFIL)) $criteria->add(PfUtilisateurPeer::PROFIL, $this->profil);
        if ($this->isColumnModified(PfUtilisateurPeer::NOM_FR)) $criteria->add(PfUtilisateurPeer::NOM_FR, $this->nom_fr);
        if ($this->isColumnModified(PfUtilisateurPeer::PRENOM_FR)) $criteria->add(PfUtilisateurPeer::PRENOM_FR, $this->prenom_fr);
        if ($this->isColumnModified(PfUtilisateurPeer::NOM_AR)) $criteria->add(PfUtilisateurPeer::NOM_AR, $this->nom_ar);
        if ($this->isColumnModified(PfUtilisateurPeer::PRENOM_AR)) $criteria->add(PfUtilisateurPeer::PRENOM_AR, $this->prenom_ar);
        if ($this->isColumnModified(PfUtilisateurPeer::EMAIL)) $criteria->add(PfUtilisateurPeer::EMAIL, $this->email);
        if ($this->isColumnModified(PfUtilisateurPeer::TELEPHONE)) $criteria->add(PfUtilisateurPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(PfUtilisateurPeer::ACTIF)) $criteria->add(PfUtilisateurPeer::ACTIF, $this->actif);

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
        $criteria = new Criteria(PfUtilisateurPeer::DATABASE_NAME);
        $criteria->add(PfUtilisateurPeer::ID_UTILISATEUR, $this->id_utilisateur);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdUtilisateur();
    }

    /**
     * Generic method to set the primary key (id_utilisateur column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdUtilisateur($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdUtilisateur();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PfUtilisateur (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLogin($this->getLogin());
        $copyObj->setMotDePasse($this->getMotDePasse());
        $copyObj->setProfil($this->getProfil());
        $copyObj->setNomFr($this->getNomFr());
        $copyObj->setPrenomFr($this->getPrenomFr());
        $copyObj->setNomAr($this->getNomAr());
        $copyObj->setPrenomAr($this->getPrenomAr());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setActif($this->getActif());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdUtilisateur(NULL); // this is a auto-increment column, so set to default value
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
     * @return PfUtilisateur Clone of current object.
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
     * @return PfUtilisateurPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PfUtilisateurPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_utilisateur = null;
        $this->login = null;
        $this->mot_de_passe = null;
        $this->profil = null;
        $this->nom_fr = null;
        $this->prenom_fr = null;
        $this->nom_ar = null;
        $this->prenom_ar = null;
        $this->email = null;
        $this->telephone = null;
        $this->actif = null;
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
        return (string) $this->exportTo(PfUtilisateurPeer::DEFAULT_STRING_FORMAT);
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
