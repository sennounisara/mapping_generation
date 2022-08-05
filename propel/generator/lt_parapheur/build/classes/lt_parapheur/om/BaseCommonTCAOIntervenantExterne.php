<?php


/**
 * Base class that represents a row from the 't_CAO_Intervenant_Externe' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCAOIntervenantExterne extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTCAOIntervenantExternePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTCAOIntervenantExternePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_intervenant_externe field.
     * @var        string
     */
    protected $id_intervenant_externe;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_ref_val_civilite field.
     * @var        int
     */
    protected $id_ref_val_civilite;

    /**
     * The value for the nom field.
     * @var        string
     */
    protected $nom;

    /**
     * The value for the prenom field.
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the organisation field.
     * @var        string
     */
    protected $organisation;

    /**
     * The value for the fonction field.
     * @var        string
     */
    protected $fonction;

    /**
     * The value for the id_ref_val_type_voix_defaut field.
     * @var        int
     */
    protected $id_ref_val_type_voix_defaut;

    /**
     * The value for the adresse field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the code_postal field.
     * @var        string
     */
    protected $code_postal;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the id_ref_val_mode_communication field.
     * @var        int
     */
    protected $id_ref_val_mode_communication;

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
        $this->adresse = '';
        $this->email = '';
    }

    /**
     * Initializes internal state of BaseCommonTCAOIntervenantExterne object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_intervenant_externe] column value.
     * 
     * @return string
     */
    public function getIdIntervenantExterne()
    {

        return $this->id_intervenant_externe;
    }

    /**
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [id_ref_val_civilite] column value.
     * 
     * @return int
     */
    public function getIdRefValCivilite()
    {

        return $this->id_ref_val_civilite;
    }

    /**
     * Get the [nom] column value.
     * 
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * Get the [prenom] column value.
     * 
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * Get the [organisation] column value.
     * 
     * @return string
     */
    public function getOrganisation()
    {

        return $this->organisation;
    }

    /**
     * Get the [fonction] column value.
     * 
     * @return string
     */
    public function getFonction()
    {

        return $this->fonction;
    }

    /**
     * Get the [id_ref_val_type_voix_defaut] column value.
     * 
     * @return int
     */
    public function getIdRefValTypeVoixDefaut()
    {

        return $this->id_ref_val_type_voix_defaut;
    }

    /**
     * Get the [adresse] column value.
     * 
     * @return string
     */
    public function getAdresse()
    {

        return $this->adresse;
    }

    /**
     * Get the [code_postal] column value.
     * 
     * @return string
     */
    public function getCodePostal()
    {

        return $this->code_postal;
    }

    /**
     * Get the [ville] column value.
     * 
     * @return string
     */
    public function getVille()
    {

        return $this->ville;
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
     * Get the [id_ref_val_mode_communication] column value.
     * 
     * @return int
     */
    public function getIdRefValModeCommunication()
    {

        return $this->id_ref_val_mode_communication;
    }

    /**
     * Set the value of [id_intervenant_externe] column.
     * 
     * @param string $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setIdIntervenantExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_intervenant_externe !== $v) {
            $this->id_intervenant_externe = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE;
        }


        return $this;
    } // setIdIntervenantExterne()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_ref_val_civilite] column.
     * 
     * @param int $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setIdRefValCivilite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ref_val_civilite !== $v) {
            $this->id_ref_val_civilite = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::ID_REF_VAL_CIVILITE;
        }


        return $this;
    } // setIdRefValCivilite()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [organisation] column.
     * 
     * @param string $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setOrganisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisation !== $v) {
            $this->organisation = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::ORGANISATION;
        }


        return $this;
    } // setOrganisation()

    /**
     * Set the value of [fonction] column.
     * 
     * @param string $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setFonction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fonction !== $v) {
            $this->fonction = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::FONCTION;
        }


        return $this;
    } // setFonction()

    /**
     * Set the value of [id_ref_val_type_voix_defaut] column.
     * 
     * @param int $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setIdRefValTypeVoixDefaut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ref_val_type_voix_defaut !== $v) {
            $this->id_ref_val_type_voix_defaut = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX_DEFAUT;
        }


        return $this;
    } // setIdRefValTypeVoixDefaut()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [code_postal] column.
     * 
     * @param string $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setCodePostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_postal !== $v) {
            $this->code_postal = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::CODE_POSTAL;
        }


        return $this;
    } // setCodePostal()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [id_ref_val_mode_communication] column.
     * 
     * @param int $v new value
     * @return CommonTCAOIntervenantExterne The current object (for fluent API support)
     */
    public function setIdRefValModeCommunication($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ref_val_mode_communication !== $v) {
            $this->id_ref_val_mode_communication = $v;
            $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::ID_REF_VAL_MODE_COMMUNICATION;
        }


        return $this;
    } // setIdRefValModeCommunication()

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
            if ($this->adresse !== '') {
                return false;
            }

            if ($this->email !== '') {
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

            $this->id_intervenant_externe = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_ref_val_civilite = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->nom = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->prenom = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->organisation = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->fonction = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_ref_val_type_voix_defaut = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->adresse = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->code_postal = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->ville = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->email = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->id_ref_val_mode_communication = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = CommonTCAOIntervenantExternePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTCAOIntervenantExterne object", $e);
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
            $con = Propel::getConnection(CommonTCAOIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTCAOIntervenantExternePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTCAOIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTCAOIntervenantExterneQuery::create()
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
            $con = Propel::getConnection(CommonTCAOIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTCAOIntervenantExternePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE;
        if (null !== $this->id_intervenant_externe) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`id_intervenant_externe`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ID_REF_VAL_CIVILITE)) {
            $modifiedColumns[':p' . $index++]  = '`id_ref_val_civilite`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ORGANISATION)) {
            $modifiedColumns[':p' . $index++]  = '`organisation`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::FONCTION)) {
            $modifiedColumns[':p' . $index++]  = '`fonction`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX_DEFAUT)) {
            $modifiedColumns[':p' . $index++]  = '`id_ref_val_type_voix_defaut`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`code_postal`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ID_REF_VAL_MODE_COMMUNICATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_ref_val_mode_communication`';
        }

        $sql = sprintf(
            'INSERT INTO `t_CAO_Intervenant_Externe` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_intervenant_externe`':						
                        $stmt->bindValue($identifier, $this->id_intervenant_externe, PDO::PARAM_STR);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_ref_val_civilite`':						
                        $stmt->bindValue($identifier, $this->id_ref_val_civilite, PDO::PARAM_INT);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`organisation`':						
                        $stmt->bindValue($identifier, $this->organisation, PDO::PARAM_STR);
                        break;
                    case '`fonction`':						
                        $stmt->bindValue($identifier, $this->fonction, PDO::PARAM_STR);
                        break;
                    case '`id_ref_val_type_voix_defaut`':						
                        $stmt->bindValue($identifier, $this->id_ref_val_type_voix_defaut, PDO::PARAM_INT);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`code_postal`':						
                        $stmt->bindValue($identifier, $this->code_postal, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`id_ref_val_mode_communication`':						
                        $stmt->bindValue($identifier, $this->id_ref_val_mode_communication, PDO::PARAM_INT);
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
        $this->setIdIntervenantExterne($pk);

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


            if (($retval = CommonTCAOIntervenantExternePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTCAOIntervenantExternePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdIntervenantExterne();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdRefValCivilite();
                break;
            case 3:
                return $this->getNom();
                break;
            case 4:
                return $this->getPrenom();
                break;
            case 5:
                return $this->getOrganisation();
                break;
            case 6:
                return $this->getFonction();
                break;
            case 7:
                return $this->getIdRefValTypeVoixDefaut();
                break;
            case 8:
                return $this->getAdresse();
                break;
            case 9:
                return $this->getCodePostal();
                break;
            case 10:
                return $this->getVille();
                break;
            case 11:
                return $this->getEmail();
                break;
            case 12:
                return $this->getIdRefValModeCommunication();
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
        if (isset($alreadyDumpedObjects['CommonTCAOIntervenantExterne'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTCAOIntervenantExterne'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTCAOIntervenantExternePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdIntervenantExterne(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdRefValCivilite(),
            $keys[3] => $this->getNom(),
            $keys[4] => $this->getPrenom(),
            $keys[5] => $this->getOrganisation(),
            $keys[6] => $this->getFonction(),
            $keys[7] => $this->getIdRefValTypeVoixDefaut(),
            $keys[8] => $this->getAdresse(),
            $keys[9] => $this->getCodePostal(),
            $keys[10] => $this->getVille(),
            $keys[11] => $this->getEmail(),
            $keys[12] => $this->getIdRefValModeCommunication(),
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
        $pos = CommonTCAOIntervenantExternePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdIntervenantExterne($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdRefValCivilite($value);
                break;
            case 3:
                $this->setNom($value);
                break;
            case 4:
                $this->setPrenom($value);
                break;
            case 5:
                $this->setOrganisation($value);
                break;
            case 6:
                $this->setFonction($value);
                break;
            case 7:
                $this->setIdRefValTypeVoixDefaut($value);
                break;
            case 8:
                $this->setAdresse($value);
                break;
            case 9:
                $this->setCodePostal($value);
                break;
            case 10:
                $this->setVille($value);
                break;
            case 11:
                $this->setEmail($value);
                break;
            case 12:
                $this->setIdRefValModeCommunication($value);
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
        $keys = CommonTCAOIntervenantExternePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdIntervenantExterne($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdRefValCivilite($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNom($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPrenom($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOrganisation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFonction($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdRefValTypeVoixDefaut($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAdresse($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCodePostal($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setVille($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmail($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdRefValModeCommunication($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTCAOIntervenantExternePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE)) $criteria->add(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $this->id_intervenant_externe);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ORGANISME)) $criteria->add(CommonTCAOIntervenantExternePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ID_REF_VAL_CIVILITE)) $criteria->add(CommonTCAOIntervenantExternePeer::ID_REF_VAL_CIVILITE, $this->id_ref_val_civilite);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::NOM)) $criteria->add(CommonTCAOIntervenantExternePeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::PRENOM)) $criteria->add(CommonTCAOIntervenantExternePeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ORGANISATION)) $criteria->add(CommonTCAOIntervenantExternePeer::ORGANISATION, $this->organisation);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::FONCTION)) $criteria->add(CommonTCAOIntervenantExternePeer::FONCTION, $this->fonction);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX_DEFAUT)) $criteria->add(CommonTCAOIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $this->id_ref_val_type_voix_defaut);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ADRESSE)) $criteria->add(CommonTCAOIntervenantExternePeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::CODE_POSTAL)) $criteria->add(CommonTCAOIntervenantExternePeer::CODE_POSTAL, $this->code_postal);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::VILLE)) $criteria->add(CommonTCAOIntervenantExternePeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::EMAIL)) $criteria->add(CommonTCAOIntervenantExternePeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonTCAOIntervenantExternePeer::ID_REF_VAL_MODE_COMMUNICATION)) $criteria->add(CommonTCAOIntervenantExternePeer::ID_REF_VAL_MODE_COMMUNICATION, $this->id_ref_val_mode_communication);

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
        $criteria = new Criteria(CommonTCAOIntervenantExternePeer::DATABASE_NAME);
        $criteria->add(CommonTCAOIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $this->id_intervenant_externe);
        $criteria->add(CommonTCAOIntervenantExternePeer::ORGANISME, $this->organisme);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getIdIntervenantExterne();
        $pks[1] = $this->getOrganisme();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setIdIntervenantExterne($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdIntervenantExterne()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTCAOIntervenantExterne (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdRefValCivilite($this->getIdRefValCivilite());
        $copyObj->setNom($this->getNom());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setOrganisation($this->getOrganisation());
        $copyObj->setFonction($this->getFonction());
        $copyObj->setIdRefValTypeVoixDefaut($this->getIdRefValTypeVoixDefaut());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setCodePostal($this->getCodePostal());
        $copyObj->setVille($this->getVille());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setIdRefValModeCommunication($this->getIdRefValModeCommunication());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdIntervenantExterne(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTCAOIntervenantExterne Clone of current object.
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
     * @return CommonTCAOIntervenantExternePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTCAOIntervenantExternePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_intervenant_externe = null;
        $this->organisme = null;
        $this->id_ref_val_civilite = null;
        $this->nom = null;
        $this->prenom = null;
        $this->organisation = null;
        $this->fonction = null;
        $this->id_ref_val_type_voix_defaut = null;
        $this->adresse = null;
        $this->code_postal = null;
        $this->ville = null;
        $this->email = null;
        $this->id_ref_val_mode_communication = null;
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
        return (string) $this->exportTo(CommonTCAOIntervenantExternePeer::DEFAULT_STRING_FORMAT);
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
