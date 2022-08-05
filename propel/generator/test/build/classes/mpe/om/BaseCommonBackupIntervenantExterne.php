<?php


/**
 * Base class that represents a row from the 'backup_Intervenant_Externe' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonBackupIntervenantExterne extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonBackupIntervenantExternePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonBackupIntervenantExternePeer
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
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the nom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom;

    /**
     * The value for the prenom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the organisation field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisation;

    /**
     * The value for the fonction field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $fonction;

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
     * The value for the mail field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mail;

    /**
     * The value for the type_invitation field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $type_invitation;

    /**
     * The value for the civilite field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $civilite;

    /**
     * The value for the type_voix field.
     * @var        string
     */
    protected $type_voix;

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
        $this->nom = '';
        $this->prenom = '';
        $this->organisation = '';
        $this->fonction = '';
        $this->adresse = '';
        $this->mail = '';
        $this->type_invitation = 1;
        $this->civilite = '';
    }

    /**
     * Initializes internal state of BaseCommonBackupIntervenantExterne object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

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
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
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
     * Get the [mail] column value.
     * 
     * @return string
     */
    public function getMail()
    {

        return $this->mail;
    }

    /**
     * Get the [type_invitation] column value.
     * 
     * @return int
     */
    public function getTypeInvitation()
    {

        return $this->type_invitation;
    }

    /**
     * Get the [civilite] column value.
     * 
     * @return string
     */
    public function getCivilite()
    {

        return $this->civilite;
    }

    /**
     * Get the [type_voix] column value.
     * 
     * @return string
     */
    public function getTypeVoix()
    {

        return $this->type_voix;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [organisation] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setOrganisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisation !== $v) {
            $this->organisation = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::ORGANISATION;
        }


        return $this;
    } // setOrganisation()

    /**
     * Set the value of [fonction] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setFonction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fonction !== $v) {
            $this->fonction = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::FONCTION;
        }


        return $this;
    } // setFonction()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [code_postal] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setCodePostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_postal !== $v) {
            $this->code_postal = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::CODE_POSTAL;
        }


        return $this;
    } // setCodePostal()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [mail] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [type_invitation] column.
     * 
     * @param int $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setTypeInvitation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_invitation !== $v) {
            $this->type_invitation = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::TYPE_INVITATION;
        }


        return $this;
    } // setTypeInvitation()

    /**
     * Set the value of [civilite] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setCivilite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->civilite !== $v) {
            $this->civilite = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::CIVILITE;
        }


        return $this;
    } // setCivilite()

    /**
     * Set the value of [type_voix] column.
     * 
     * @param string $v new value
     * @return CommonBackupIntervenantExterne The current object (for fluent API support)
     */
    public function setTypeVoix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_voix !== $v) {
            $this->type_voix = $v;
            $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::TYPE_VOIX;
        }


        return $this;
    } // setTypeVoix()

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
            if ($this->nom !== '') {
                return false;
            }

            if ($this->prenom !== '') {
                return false;
            }

            if ($this->organisation !== '') {
                return false;
            }

            if ($this->fonction !== '') {
                return false;
            }

            if ($this->adresse !== '') {
                return false;
            }

            if ($this->mail !== '') {
                return false;
            }

            if ($this->type_invitation !== 1) {
                return false;
            }

            if ($this->civilite !== '') {
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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->nom = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->prenom = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->organisation = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->fonction = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->adresse = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->code_postal = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ville = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->mail = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->type_invitation = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->civilite = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->type_voix = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = CommonBackupIntervenantExternePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonBackupIntervenantExterne object", $e);
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
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonBackupIntervenantExternePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonBackupIntervenantExterneQuery::create()
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
            $con = Propel::getConnection(CommonBackupIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonBackupIntervenantExternePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonBackupIntervenantExternePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonBackupIntervenantExternePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::ORGANISATION)) {
            $modifiedColumns[':p' . $index++]  = '`organisation`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::FONCTION)) {
            $modifiedColumns[':p' . $index++]  = '`fonction`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`code_postal`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`mail`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::TYPE_INVITATION)) {
            $modifiedColumns[':p' . $index++]  = '`type_invitation`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::CIVILITE)) {
            $modifiedColumns[':p' . $index++]  = '`civilite`';
        }
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::TYPE_VOIX)) {
            $modifiedColumns[':p' . $index++]  = '`type_voix`';
        }

        $sql = sprintf(
            'INSERT INTO `backup_Intervenant_Externe` (%s) VALUES (%s)',
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
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
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
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`code_postal`':						
                        $stmt->bindValue($identifier, $this->code_postal, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`mail`':						
                        $stmt->bindValue($identifier, $this->mail, PDO::PARAM_STR);
                        break;
                    case '`type_invitation`':						
                        $stmt->bindValue($identifier, $this->type_invitation, PDO::PARAM_INT);
                        break;
                    case '`civilite`':						
                        $stmt->bindValue($identifier, $this->civilite, PDO::PARAM_STR);
                        break;
                    case '`type_voix`':						
                        $stmt->bindValue($identifier, $this->type_voix, PDO::PARAM_STR);
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


            if (($retval = CommonBackupIntervenantExternePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonBackupIntervenantExternePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getNom();
                break;
            case 3:
                return $this->getPrenom();
                break;
            case 4:
                return $this->getOrganisation();
                break;
            case 5:
                return $this->getFonction();
                break;
            case 6:
                return $this->getAdresse();
                break;
            case 7:
                return $this->getCodePostal();
                break;
            case 8:
                return $this->getVille();
                break;
            case 9:
                return $this->getMail();
                break;
            case 10:
                return $this->getTypeInvitation();
                break;
            case 11:
                return $this->getCivilite();
                break;
            case 12:
                return $this->getTypeVoix();
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
        if (isset($alreadyDumpedObjects['CommonBackupIntervenantExterne'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonBackupIntervenantExterne'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonBackupIntervenantExternePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getNom(),
            $keys[3] => $this->getPrenom(),
            $keys[4] => $this->getOrganisation(),
            $keys[5] => $this->getFonction(),
            $keys[6] => $this->getAdresse(),
            $keys[7] => $this->getCodePostal(),
            $keys[8] => $this->getVille(),
            $keys[9] => $this->getMail(),
            $keys[10] => $this->getTypeInvitation(),
            $keys[11] => $this->getCivilite(),
            $keys[12] => $this->getTypeVoix(),
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
        $pos = CommonBackupIntervenantExternePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setNom($value);
                break;
            case 3:
                $this->setPrenom($value);
                break;
            case 4:
                $this->setOrganisation($value);
                break;
            case 5:
                $this->setFonction($value);
                break;
            case 6:
                $this->setAdresse($value);
                break;
            case 7:
                $this->setCodePostal($value);
                break;
            case 8:
                $this->setVille($value);
                break;
            case 9:
                $this->setMail($value);
                break;
            case 10:
                $this->setTypeInvitation($value);
                break;
            case 11:
                $this->setCivilite($value);
                break;
            case 12:
                $this->setTypeVoix($value);
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
        $keys = CommonBackupIntervenantExternePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNom($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPrenom($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setOrganisation($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFonction($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdresse($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCodePostal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVille($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMail($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTypeInvitation($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCivilite($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTypeVoix($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonBackupIntervenantExternePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::ID)) $criteria->add(CommonBackupIntervenantExternePeer::ID, $this->id);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::ORGANISME)) $criteria->add(CommonBackupIntervenantExternePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::NOM)) $criteria->add(CommonBackupIntervenantExternePeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::PRENOM)) $criteria->add(CommonBackupIntervenantExternePeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::ORGANISATION)) $criteria->add(CommonBackupIntervenantExternePeer::ORGANISATION, $this->organisation);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::FONCTION)) $criteria->add(CommonBackupIntervenantExternePeer::FONCTION, $this->fonction);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::ADRESSE)) $criteria->add(CommonBackupIntervenantExternePeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::CODE_POSTAL)) $criteria->add(CommonBackupIntervenantExternePeer::CODE_POSTAL, $this->code_postal);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::VILLE)) $criteria->add(CommonBackupIntervenantExternePeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::MAIL)) $criteria->add(CommonBackupIntervenantExternePeer::MAIL, $this->mail);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::TYPE_INVITATION)) $criteria->add(CommonBackupIntervenantExternePeer::TYPE_INVITATION, $this->type_invitation);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::CIVILITE)) $criteria->add(CommonBackupIntervenantExternePeer::CIVILITE, $this->civilite);
        if ($this->isColumnModified(CommonBackupIntervenantExternePeer::TYPE_VOIX)) $criteria->add(CommonBackupIntervenantExternePeer::TYPE_VOIX, $this->type_voix);

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
        $criteria = new Criteria(CommonBackupIntervenantExternePeer::DATABASE_NAME);
        $criteria->add(CommonBackupIntervenantExternePeer::ID, $this->id);
        $criteria->add(CommonBackupIntervenantExternePeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getId();
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
        $this->setId($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonBackupIntervenantExterne (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setNom($this->getNom());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setOrganisation($this->getOrganisation());
        $copyObj->setFonction($this->getFonction());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setCodePostal($this->getCodePostal());
        $copyObj->setVille($this->getVille());
        $copyObj->setMail($this->getMail());
        $copyObj->setTypeInvitation($this->getTypeInvitation());
        $copyObj->setCivilite($this->getCivilite());
        $copyObj->setTypeVoix($this->getTypeVoix());
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
     * @return CommonBackupIntervenantExterne Clone of current object.
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
     * @return CommonBackupIntervenantExternePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonBackupIntervenantExternePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->nom = null;
        $this->prenom = null;
        $this->organisation = null;
        $this->fonction = null;
        $this->adresse = null;
        $this->code_postal = null;
        $this->ville = null;
        $this->mail = null;
        $this->type_invitation = null;
        $this->civilite = null;
        $this->type_voix = null;
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
        return (string) $this->exportTo(CommonBackupIntervenantExternePeer::DEFAULT_STRING_FORMAT);
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
