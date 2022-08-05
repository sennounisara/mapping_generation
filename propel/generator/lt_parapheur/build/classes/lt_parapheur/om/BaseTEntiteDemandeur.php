<?php


/**
 * Base class that represents a row from the 't_entite_demandeur' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTEntiteDemandeur extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TEntiteDemandeurPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TEntiteDemandeurPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_entite_demandeur field.
     * @var        int
     */
    protected $id_entite_demandeur;

    /**
     * The value for the denomination_fr field.
     * @var        string
     */
    protected $denomination_fr;

    /**
     * The value for the denomination_ar field.
     * @var        string
     */
    protected $denomination_ar;

    /**
     * The value for the mail field.
     * @var        string
     */
    protected $mail;

    /**
     * The value for the telephone field.
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

    /**
     * The value for the adresse field.
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the adresse2 field.
     * @var        string
     */
    protected $adresse2;

    /**
     * The value for the cp field.
     * @var        string
     */
    protected $cp;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the path_fr field.
     * @var        string
     */
    protected $path_fr;

    /**
     * The value for the path_ar field.
     * @var        string
     */
    protected $path_ar;

    /**
     * The value for the id_region field.
     * @var        int
     */
    protected $id_region;

    /**
     * The value for the id_province field.
     * @var        int
     */
    protected $id_province;

    /**
     * The value for the id_commune field.
     * @var        int
     */
    protected $id_commune;

    /**
     * The value for the commune field.
     * @var        string
     */
    protected $commune;

    /**
     * The value for the id_pays field.
     * @var        int
     */
    protected $id_pays;

    /**
     * The value for the sigle_fr field.
     * @var        string
     */
    protected $sigle_fr;

    /**
     * The value for the sigle_ar field.
     * @var        string
     */
    protected $sigle_ar;

    /**
     * The value for the path_sigle_fr field.
     * @var        string
     */
    protected $path_sigle_fr;

    /**
     * The value for the path_sigle_ar field.
     * @var        string
     */
    protected $path_sigle_ar;

    /**
     * The value for the id_externe field.
     * @var        string
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
     * Get the [id_entite_demandeur] column value.
     * 
     * @return int
     */
    public function getIdEntiteDemandeur()
    {

        return $this->id_entite_demandeur;
    }

    /**
     * Get the [denomination_fr] column value.
     * 
     * @return string
     */
    public function getDenominationFr()
    {

        return $this->denomination_fr;
    }

    /**
     * Get the [denomination_ar] column value.
     * 
     * @return string
     */
    public function getDenominationAr()
    {

        return $this->denomination_ar;
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
     * Get the [telephone] column value.
     * 
     * @return string
     */
    public function getTelephone()
    {

        return $this->telephone;
    }

    /**
     * Get the [fax] column value.
     * 
     * @return string
     */
    public function getFax()
    {

        return $this->fax;
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
     * Get the [adresse2] column value.
     * 
     * @return string
     */
    public function getAdresse2()
    {

        return $this->adresse2;
    }

    /**
     * Get the [cp] column value.
     * 
     * @return string
     */
    public function getCp()
    {

        return $this->cp;
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
     * Get the [path_fr] column value.
     * 
     * @return string
     */
    public function getPathFr()
    {

        return $this->path_fr;
    }

    /**
     * Get the [path_ar] column value.
     * 
     * @return string
     */
    public function getPathAr()
    {

        return $this->path_ar;
    }

    /**
     * Get the [id_region] column value.
     * 
     * @return int
     */
    public function getIdRegion()
    {

        return $this->id_region;
    }

    /**
     * Get the [id_province] column value.
     * 
     * @return int
     */
    public function getIdProvince()
    {

        return $this->id_province;
    }

    /**
     * Get the [id_commune] column value.
     * 
     * @return int
     */
    public function getIdCommune()
    {

        return $this->id_commune;
    }

    /**
     * Get the [commune] column value.
     * 
     * @return string
     */
    public function getCommune()
    {

        return $this->commune;
    }

    /**
     * Get the [id_pays] column value.
     * 
     * @return int
     */
    public function getIdPays()
    {

        return $this->id_pays;
    }

    /**
     * Get the [sigle_fr] column value.
     * 
     * @return string
     */
    public function getSigleFr()
    {

        return $this->sigle_fr;
    }

    /**
     * Get the [sigle_ar] column value.
     * 
     * @return string
     */
    public function getSigleAr()
    {

        return $this->sigle_ar;
    }

    /**
     * Get the [path_sigle_fr] column value.
     * 
     * @return string
     */
    public function getPathSigleFr()
    {

        return $this->path_sigle_fr;
    }

    /**
     * Get the [path_sigle_ar] column value.
     * 
     * @return string
     */
    public function getPathSigleAr()
    {

        return $this->path_sigle_ar;
    }

    /**
     * Get the [id_externe] column value.
     * 
     * @return string
     */
    public function getIdExterne()
    {

        return $this->id_externe;
    }

    /**
     * Set the value of [id_entite_demandeur] column.
     * 
     * @param int $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setIdEntiteDemandeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_demandeur !== $v) {
            $this->id_entite_demandeur = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR;
        }


        return $this;
    } // setIdEntiteDemandeur()

    /**
     * Set the value of [denomination_fr] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setDenominationFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_fr !== $v) {
            $this->denomination_fr = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::DENOMINATION_FR;
        }


        return $this;
    } // setDenominationFr()

    /**
     * Set the value of [denomination_ar] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setDenominationAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_ar !== $v) {
            $this->denomination_ar = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::DENOMINATION_AR;
        }


        return $this;
    } // setDenominationAr()

    /**
     * Set the value of [mail] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [adresse2] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setAdresse2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2 !== $v) {
            $this->adresse2 = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::ADRESSE2;
        }


        return $this;
    } // setAdresse2()

    /**
     * Set the value of [cp] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setCp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cp !== $v) {
            $this->cp = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::CP;
        }


        return $this;
    } // setCp()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [path_fr] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setPathFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->path_fr !== $v) {
            $this->path_fr = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::PATH_FR;
        }


        return $this;
    } // setPathFr()

    /**
     * Set the value of [path_ar] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setPathAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->path_ar !== $v) {
            $this->path_ar = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::PATH_AR;
        }


        return $this;
    } // setPathAr()

    /**
     * Set the value of [id_region] column.
     * 
     * @param int $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setIdRegion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_region !== $v) {
            $this->id_region = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::ID_REGION;
        }


        return $this;
    } // setIdRegion()

    /**
     * Set the value of [id_province] column.
     * 
     * @param int $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setIdProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_province !== $v) {
            $this->id_province = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::ID_PROVINCE;
        }


        return $this;
    } // setIdProvince()

    /**
     * Set the value of [id_commune] column.
     * 
     * @param int $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setIdCommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_commune !== $v) {
            $this->id_commune = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::ID_COMMUNE;
        }


        return $this;
    } // setIdCommune()

    /**
     * Set the value of [commune] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setCommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commune !== $v) {
            $this->commune = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::COMMUNE;
        }


        return $this;
    } // setCommune()

    /**
     * Set the value of [id_pays] column.
     * 
     * @param int $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setIdPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pays !== $v) {
            $this->id_pays = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::ID_PAYS;
        }


        return $this;
    } // setIdPays()

    /**
     * Set the value of [sigle_fr] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setSigleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle_fr !== $v) {
            $this->sigle_fr = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::SIGLE_FR;
        }


        return $this;
    } // setSigleFr()

    /**
     * Set the value of [sigle_ar] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setSigleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle_ar !== $v) {
            $this->sigle_ar = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::SIGLE_AR;
        }


        return $this;
    } // setSigleAr()

    /**
     * Set the value of [path_sigle_fr] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setPathSigleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->path_sigle_fr !== $v) {
            $this->path_sigle_fr = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::PATH_SIGLE_FR;
        }


        return $this;
    } // setPathSigleFr()

    /**
     * Set the value of [path_sigle_ar] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setPathSigleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->path_sigle_ar !== $v) {
            $this->path_sigle_ar = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::PATH_SIGLE_AR;
        }


        return $this;
    } // setPathSigleAr()

    /**
     * Set the value of [id_externe] column.
     * 
     * @param string $v new value
     * @return TEntiteDemandeur The current object (for fluent API support)
     */
    public function setIdExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_externe !== $v) {
            $this->id_externe = $v;
            $this->modifiedColumns[] = TEntiteDemandeurPeer::ID_EXTERNE;
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

            $this->id_entite_demandeur = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->denomination_fr = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->denomination_ar = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->mail = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->telephone = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->fax = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->adresse = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->adresse2 = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cp = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->ville = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->path_fr = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->path_ar = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->id_region = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->id_province = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->id_commune = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->commune = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->id_pays = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->sigle_fr = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->sigle_ar = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->path_sigle_fr = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->path_sigle_ar = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->id_externe = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 22; // 22 = TEntiteDemandeurPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TEntiteDemandeur object", $e);
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
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TEntiteDemandeurPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TEntiteDemandeurQuery::create()
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
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TEntiteDemandeurPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR;
        if (null !== $this->id_entite_demandeur) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_DEMANDEUR`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::DENOMINATION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`DENOMINATION_FR`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::DENOMINATION_AR)) {
            $modifiedColumns[':p' . $index++]  = '`DENOMINATION_AR`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`mail`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::CP)) {
            $modifiedColumns[':p' . $index++]  = '`cp`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::PATH_FR)) {
            $modifiedColumns[':p' . $index++]  = '`path_fr`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::PATH_AR)) {
            $modifiedColumns[':p' . $index++]  = '`path_ar`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_REGION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_REGION`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PROVINCE`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_COMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_COMMUNE`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::COMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`COMMUNE`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PAYS`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::SIGLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`SIGLE_FR`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::SIGLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`SIGLE_AR`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::PATH_SIGLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`PATH_SIGLE_FR`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::PATH_SIGLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`PATH_SIGLE_AR`';
        }
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_EXTERNE`';
        }

        $sql = sprintf(
            'INSERT INTO `t_entite_demandeur` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_ENTITE_DEMANDEUR`':						
                        $stmt->bindValue($identifier, $this->id_entite_demandeur, PDO::PARAM_INT);
                        break;
                    case '`DENOMINATION_FR`':						
                        $stmt->bindValue($identifier, $this->denomination_fr, PDO::PARAM_STR);
                        break;
                    case '`DENOMINATION_AR`':						
                        $stmt->bindValue($identifier, $this->denomination_ar, PDO::PARAM_STR);
                        break;
                    case '`mail`':						
                        $stmt->bindValue($identifier, $this->mail, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`adresse2`':						
                        $stmt->bindValue($identifier, $this->adresse2, PDO::PARAM_STR);
                        break;
                    case '`cp`':						
                        $stmt->bindValue($identifier, $this->cp, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`path_fr`':						
                        $stmt->bindValue($identifier, $this->path_fr, PDO::PARAM_STR);
                        break;
                    case '`path_ar`':						
                        $stmt->bindValue($identifier, $this->path_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_REGION`':						
                        $stmt->bindValue($identifier, $this->id_region, PDO::PARAM_INT);
                        break;
                    case '`ID_PROVINCE`':						
                        $stmt->bindValue($identifier, $this->id_province, PDO::PARAM_INT);
                        break;
                    case '`ID_COMMUNE`':						
                        $stmt->bindValue($identifier, $this->id_commune, PDO::PARAM_INT);
                        break;
                    case '`COMMUNE`':						
                        $stmt->bindValue($identifier, $this->commune, PDO::PARAM_STR);
                        break;
                    case '`ID_PAYS`':						
                        $stmt->bindValue($identifier, $this->id_pays, PDO::PARAM_INT);
                        break;
                    case '`SIGLE_FR`':						
                        $stmt->bindValue($identifier, $this->sigle_fr, PDO::PARAM_STR);
                        break;
                    case '`SIGLE_AR`':						
                        $stmt->bindValue($identifier, $this->sigle_ar, PDO::PARAM_STR);
                        break;
                    case '`PATH_SIGLE_FR`':						
                        $stmt->bindValue($identifier, $this->path_sigle_fr, PDO::PARAM_STR);
                        break;
                    case '`PATH_SIGLE_AR`':						
                        $stmt->bindValue($identifier, $this->path_sigle_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->id_externe, PDO::PARAM_STR);
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
        $this->setIdEntiteDemandeur($pk);

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


            if (($retval = TEntiteDemandeurPeer::doValidate($this, $columns)) !== true) {
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
        $pos = TEntiteDemandeurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEntiteDemandeur();
                break;
            case 1:
                return $this->getDenominationFr();
                break;
            case 2:
                return $this->getDenominationAr();
                break;
            case 3:
                return $this->getMail();
                break;
            case 4:
                return $this->getTelephone();
                break;
            case 5:
                return $this->getFax();
                break;
            case 6:
                return $this->getAdresse();
                break;
            case 7:
                return $this->getAdresse2();
                break;
            case 8:
                return $this->getCp();
                break;
            case 9:
                return $this->getVille();
                break;
            case 10:
                return $this->getPathFr();
                break;
            case 11:
                return $this->getPathAr();
                break;
            case 12:
                return $this->getIdRegion();
                break;
            case 13:
                return $this->getIdProvince();
                break;
            case 14:
                return $this->getIdCommune();
                break;
            case 15:
                return $this->getCommune();
                break;
            case 16:
                return $this->getIdPays();
                break;
            case 17:
                return $this->getSigleFr();
                break;
            case 18:
                return $this->getSigleAr();
                break;
            case 19:
                return $this->getPathSigleFr();
                break;
            case 20:
                return $this->getPathSigleAr();
                break;
            case 21:
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
        if (isset($alreadyDumpedObjects['TEntiteDemandeur'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TEntiteDemandeur'][$this->getPrimaryKey()] = true;
        $keys = TEntiteDemandeurPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdEntiteDemandeur(),
            $keys[1] => $this->getDenominationFr(),
            $keys[2] => $this->getDenominationAr(),
            $keys[3] => $this->getMail(),
            $keys[4] => $this->getTelephone(),
            $keys[5] => $this->getFax(),
            $keys[6] => $this->getAdresse(),
            $keys[7] => $this->getAdresse2(),
            $keys[8] => $this->getCp(),
            $keys[9] => $this->getVille(),
            $keys[10] => $this->getPathFr(),
            $keys[11] => $this->getPathAr(),
            $keys[12] => $this->getIdRegion(),
            $keys[13] => $this->getIdProvince(),
            $keys[14] => $this->getIdCommune(),
            $keys[15] => $this->getCommune(),
            $keys[16] => $this->getIdPays(),
            $keys[17] => $this->getSigleFr(),
            $keys[18] => $this->getSigleAr(),
            $keys[19] => $this->getPathSigleFr(),
            $keys[20] => $this->getPathSigleAr(),
            $keys[21] => $this->getIdExterne(),
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
        $pos = TEntiteDemandeurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEntiteDemandeur($value);
                break;
            case 1:
                $this->setDenominationFr($value);
                break;
            case 2:
                $this->setDenominationAr($value);
                break;
            case 3:
                $this->setMail($value);
                break;
            case 4:
                $this->setTelephone($value);
                break;
            case 5:
                $this->setFax($value);
                break;
            case 6:
                $this->setAdresse($value);
                break;
            case 7:
                $this->setAdresse2($value);
                break;
            case 8:
                $this->setCp($value);
                break;
            case 9:
                $this->setVille($value);
                break;
            case 10:
                $this->setPathFr($value);
                break;
            case 11:
                $this->setPathAr($value);
                break;
            case 12:
                $this->setIdRegion($value);
                break;
            case 13:
                $this->setIdProvince($value);
                break;
            case 14:
                $this->setIdCommune($value);
                break;
            case 15:
                $this->setCommune($value);
                break;
            case 16:
                $this->setIdPays($value);
                break;
            case 17:
                $this->setSigleFr($value);
                break;
            case 18:
                $this->setSigleAr($value);
                break;
            case 19:
                $this->setPathSigleFr($value);
                break;
            case 20:
                $this->setPathSigleAr($value);
                break;
            case 21:
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
        $keys = TEntiteDemandeurPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdEntiteDemandeur($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDenominationFr($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDenominationAr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMail($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTelephone($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFax($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdresse($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAdresse2($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCp($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setVille($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPathFr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPathAr($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdRegion($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdProvince($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdCommune($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCommune($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdPays($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSigleFr($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSigleAr($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPathSigleFr($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPathSigleAr($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setIdExterne($arr[$keys[21]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TEntiteDemandeurPeer::DATABASE_NAME);

        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR)) $criteria->add(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $this->id_entite_demandeur);
        if ($this->isColumnModified(TEntiteDemandeurPeer::DENOMINATION_FR)) $criteria->add(TEntiteDemandeurPeer::DENOMINATION_FR, $this->denomination_fr);
        if ($this->isColumnModified(TEntiteDemandeurPeer::DENOMINATION_AR)) $criteria->add(TEntiteDemandeurPeer::DENOMINATION_AR, $this->denomination_ar);
        if ($this->isColumnModified(TEntiteDemandeurPeer::MAIL)) $criteria->add(TEntiteDemandeurPeer::MAIL, $this->mail);
        if ($this->isColumnModified(TEntiteDemandeurPeer::TELEPHONE)) $criteria->add(TEntiteDemandeurPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(TEntiteDemandeurPeer::FAX)) $criteria->add(TEntiteDemandeurPeer::FAX, $this->fax);
        if ($this->isColumnModified(TEntiteDemandeurPeer::ADRESSE)) $criteria->add(TEntiteDemandeurPeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(TEntiteDemandeurPeer::ADRESSE2)) $criteria->add(TEntiteDemandeurPeer::ADRESSE2, $this->adresse2);
        if ($this->isColumnModified(TEntiteDemandeurPeer::CP)) $criteria->add(TEntiteDemandeurPeer::CP, $this->cp);
        if ($this->isColumnModified(TEntiteDemandeurPeer::VILLE)) $criteria->add(TEntiteDemandeurPeer::VILLE, $this->ville);
        if ($this->isColumnModified(TEntiteDemandeurPeer::PATH_FR)) $criteria->add(TEntiteDemandeurPeer::PATH_FR, $this->path_fr);
        if ($this->isColumnModified(TEntiteDemandeurPeer::PATH_AR)) $criteria->add(TEntiteDemandeurPeer::PATH_AR, $this->path_ar);
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_REGION)) $criteria->add(TEntiteDemandeurPeer::ID_REGION, $this->id_region);
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_PROVINCE)) $criteria->add(TEntiteDemandeurPeer::ID_PROVINCE, $this->id_province);
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_COMMUNE)) $criteria->add(TEntiteDemandeurPeer::ID_COMMUNE, $this->id_commune);
        if ($this->isColumnModified(TEntiteDemandeurPeer::COMMUNE)) $criteria->add(TEntiteDemandeurPeer::COMMUNE, $this->commune);
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_PAYS)) $criteria->add(TEntiteDemandeurPeer::ID_PAYS, $this->id_pays);
        if ($this->isColumnModified(TEntiteDemandeurPeer::SIGLE_FR)) $criteria->add(TEntiteDemandeurPeer::SIGLE_FR, $this->sigle_fr);
        if ($this->isColumnModified(TEntiteDemandeurPeer::SIGLE_AR)) $criteria->add(TEntiteDemandeurPeer::SIGLE_AR, $this->sigle_ar);
        if ($this->isColumnModified(TEntiteDemandeurPeer::PATH_SIGLE_FR)) $criteria->add(TEntiteDemandeurPeer::PATH_SIGLE_FR, $this->path_sigle_fr);
        if ($this->isColumnModified(TEntiteDemandeurPeer::PATH_SIGLE_AR)) $criteria->add(TEntiteDemandeurPeer::PATH_SIGLE_AR, $this->path_sigle_ar);
        if ($this->isColumnModified(TEntiteDemandeurPeer::ID_EXTERNE)) $criteria->add(TEntiteDemandeurPeer::ID_EXTERNE, $this->id_externe);

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
        $criteria = new Criteria(TEntiteDemandeurPeer::DATABASE_NAME);
        $criteria->add(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $this->id_entite_demandeur);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdEntiteDemandeur();
    }

    /**
     * Generic method to set the primary key (id_entite_demandeur column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdEntiteDemandeur($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdEntiteDemandeur();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of TEntiteDemandeur (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDenominationFr($this->getDenominationFr());
        $copyObj->setDenominationAr($this->getDenominationAr());
        $copyObj->setMail($this->getMail());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setAdresse2($this->getAdresse2());
        $copyObj->setCp($this->getCp());
        $copyObj->setVille($this->getVille());
        $copyObj->setPathFr($this->getPathFr());
        $copyObj->setPathAr($this->getPathAr());
        $copyObj->setIdRegion($this->getIdRegion());
        $copyObj->setIdProvince($this->getIdProvince());
        $copyObj->setIdCommune($this->getIdCommune());
        $copyObj->setCommune($this->getCommune());
        $copyObj->setIdPays($this->getIdPays());
        $copyObj->setSigleFr($this->getSigleFr());
        $copyObj->setSigleAr($this->getSigleAr());
        $copyObj->setPathSigleFr($this->getPathSigleFr());
        $copyObj->setPathSigleAr($this->getPathSigleAr());
        $copyObj->setIdExterne($this->getIdExterne());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdEntiteDemandeur(NULL); // this is a auto-increment column, so set to default value
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
     * @return TEntiteDemandeur Clone of current object.
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
     * @return TEntiteDemandeurPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TEntiteDemandeurPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_entite_demandeur = null;
        $this->denomination_fr = null;
        $this->denomination_ar = null;
        $this->mail = null;
        $this->telephone = null;
        $this->fax = null;
        $this->adresse = null;
        $this->adresse2 = null;
        $this->cp = null;
        $this->ville = null;
        $this->path_fr = null;
        $this->path_ar = null;
        $this->id_region = null;
        $this->id_province = null;
        $this->id_commune = null;
        $this->commune = null;
        $this->id_pays = null;
        $this->sigle_fr = null;
        $this->sigle_ar = null;
        $this->path_sigle_fr = null;
        $this->path_sigle_ar = null;
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
        return (string) $this->exportTo(TEntiteDemandeurPeer::DEFAULT_STRING_FORMAT);
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
