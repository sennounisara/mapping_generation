<?php


/**
 * Base class that represents a row from the 'configuration_plateforme' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseConfigurationPlateforme extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ConfigurationPlateformePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ConfigurationPlateformePeer
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
     * The value for the module_demandeur_connu field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $module_demandeur_connu;

    /**
     * The value for the affichage_onglet_format_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affichage_onglet_format_demande;

    /**
     * The value for the affichage_popover_format_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affichage_popover_format_demande;

    /**
     * The value for the affichage_critere_format_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affichage_critere_format_demande;

    /**
     * The value for the ar_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ar_agent;

    /**
     * The value for the affichage_source_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $affichage_source_demande;

    /**
     * The value for the module_recherche_theme_demandeur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $module_recherche_theme_demandeur;

    /**
     * The value for the visiblitie_condition_utilisation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visiblitie_condition_utilisation;

    /**
     * The value for the condition_utilisation_ar field.
     * @var        string
     */
    protected $condition_utilisation_ar;

    /**
     * The value for the condition_utilisation_fr field.
     * @var        string
     */
    protected $condition_utilisation_fr;

    /**
     * The value for the visibilite_type_demande field.
     * @var        string
     */
    protected $visibilite_type_demande;

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
        $this->module_demandeur_connu = '1';
        $this->affichage_onglet_format_demande = '0';
        $this->affichage_popover_format_demande = '0';
        $this->affichage_critere_format_demande = '0';
        $this->ar_agent = '0';
        $this->affichage_source_demande = '0';
        $this->module_recherche_theme_demandeur = '0';
        $this->visiblitie_condition_utilisation = '0';
    }

    /**
     * Initializes internal state of BaseConfigurationPlateforme object.
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
     * Get the [module_demandeur_connu] column value.
     * 
     * @return string
     */
    public function getModuleDemandeurConnu()
    {

        return $this->module_demandeur_connu;
    }

    /**
     * Get the [affichage_onglet_format_demande] column value.
     * 
     * @return string
     */
    public function getAffichageOngletFormatDemande()
    {

        return $this->affichage_onglet_format_demande;
    }

    /**
     * Get the [affichage_popover_format_demande] column value.
     * 
     * @return string
     */
    public function getAffichagePopoverFormatDemande()
    {

        return $this->affichage_popover_format_demande;
    }

    /**
     * Get the [affichage_critere_format_demande] column value.
     * 
     * @return string
     */
    public function getAffichageCritereFormatDemande()
    {

        return $this->affichage_critere_format_demande;
    }

    /**
     * Get the [ar_agent] column value.
     * 
     * @return string
     */
    public function getArAgent()
    {

        return $this->ar_agent;
    }

    /**
     * Get the [affichage_source_demande] column value.
     * 
     * @return string
     */
    public function getAffichageSourceDemande()
    {

        return $this->affichage_source_demande;
    }

    /**
     * Get the [module_recherche_theme_demandeur] column value.
     * 
     * @return string
     */
    public function getModuleRechercheThemeDemandeur()
    {

        return $this->module_recherche_theme_demandeur;
    }

    /**
     * Get the [visiblitie_condition_utilisation] column value.
     * 
     * @return string
     */
    public function getVisiblitieConditionUtilisation()
    {

        return $this->visiblitie_condition_utilisation;
    }

    /**
     * Get the [condition_utilisation_ar] column value.
     * 
     * @return string
     */
    public function getConditionUtilisationAr()
    {

        return $this->condition_utilisation_ar;
    }

    /**
     * Get the [condition_utilisation_fr] column value.
     * 
     * @return string
     */
    public function getConditionUtilisationFr()
    {

        return $this->condition_utilisation_fr;
    }

    /**
     * Get the [visibilite_type_demande] column value.
     * 
     * @return string
     */
    public function getVisibiliteTypeDemande()
    {

        return $this->visibilite_type_demande;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [module_demandeur_connu] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setModuleDemandeurConnu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->module_demandeur_connu !== $v) {
            $this->module_demandeur_connu = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU;
        }


        return $this;
    } // setModuleDemandeurConnu()

    /**
     * Set the value of [affichage_onglet_format_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAffichageOngletFormatDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_onglet_format_demande !== $v) {
            $this->affichage_onglet_format_demande = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE;
        }


        return $this;
    } // setAffichageOngletFormatDemande()

    /**
     * Set the value of [affichage_popover_format_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAffichagePopoverFormatDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_popover_format_demande !== $v) {
            $this->affichage_popover_format_demande = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE;
        }


        return $this;
    } // setAffichagePopoverFormatDemande()

    /**
     * Set the value of [affichage_critere_format_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAffichageCritereFormatDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_critere_format_demande !== $v) {
            $this->affichage_critere_format_demande = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE;
        }


        return $this;
    } // setAffichageCritereFormatDemande()

    /**
     * Set the value of [ar_agent] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setArAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ar_agent !== $v) {
            $this->ar_agent = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::AR_AGENT;
        }


        return $this;
    } // setArAgent()

    /**
     * Set the value of [affichage_source_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setAffichageSourceDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_source_demande !== $v) {
            $this->affichage_source_demande = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE;
        }


        return $this;
    } // setAffichageSourceDemande()

    /**
     * Set the value of [module_recherche_theme_demandeur] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setModuleRechercheThemeDemandeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->module_recherche_theme_demandeur !== $v) {
            $this->module_recherche_theme_demandeur = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR;
        }


        return $this;
    } // setModuleRechercheThemeDemandeur()

    /**
     * Set the value of [visiblitie_condition_utilisation] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setVisiblitieConditionUtilisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visiblitie_condition_utilisation !== $v) {
            $this->visiblitie_condition_utilisation = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION;
        }


        return $this;
    } // setVisiblitieConditionUtilisation()

    /**
     * Set the value of [condition_utilisation_ar] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConditionUtilisationAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->condition_utilisation_ar !== $v) {
            $this->condition_utilisation_ar = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::CONDITION_UTILISATION_AR;
        }


        return $this;
    } // setConditionUtilisationAr()

    /**
     * Set the value of [condition_utilisation_fr] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setConditionUtilisationFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->condition_utilisation_fr !== $v) {
            $this->condition_utilisation_fr = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::CONDITION_UTILISATION_FR;
        }


        return $this;
    } // setConditionUtilisationFr()

    /**
     * Set the value of [visibilite_type_demande] column.
     * 
     * @param string $v new value
     * @return ConfigurationPlateforme The current object (for fluent API support)
     */
    public function setVisibiliteTypeDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visibilite_type_demande !== $v) {
            $this->visibilite_type_demande = $v;
            $this->modifiedColumns[] = ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE;
        }


        return $this;
    } // setVisibiliteTypeDemande()

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
            if ($this->module_demandeur_connu !== '1') {
                return false;
            }

            if ($this->affichage_onglet_format_demande !== '0') {
                return false;
            }

            if ($this->affichage_popover_format_demande !== '0') {
                return false;
            }

            if ($this->affichage_critere_format_demande !== '0') {
                return false;
            }

            if ($this->ar_agent !== '0') {
                return false;
            }

            if ($this->affichage_source_demande !== '0') {
                return false;
            }

            if ($this->module_recherche_theme_demandeur !== '0') {
                return false;
            }

            if ($this->visiblitie_condition_utilisation !== '0') {
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
            $this->module_demandeur_connu = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->affichage_onglet_format_demande = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->affichage_popover_format_demande = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->affichage_critere_format_demande = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ar_agent = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->affichage_source_demande = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->module_recherche_theme_demandeur = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->visiblitie_condition_utilisation = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->condition_utilisation_ar = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->condition_utilisation_fr = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->visibilite_type_demande = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = ConfigurationPlateformePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ConfigurationPlateforme object", $e);
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
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ConfigurationPlateformePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ConfigurationPlateformeQuery::create()
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
            $con = Propel::getConnection(ConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ConfigurationPlateformePeer::addInstanceToPool($this);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ConfigurationPlateformePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU)) {
            $modifiedColumns[':p' . $index++]  = '`MODULE_DEMANDEUR_CONNU`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`AFFICHAGE_ONGLET_FORMAT_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`AFFICHAGE_POPOVER_FORMAT_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`AFFICHAGE_CRITERE_FORMAT_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::AR_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`AR_AGENT`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`AFFICHAGE_SOURCE_DEMANDE`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR)) {
            $modifiedColumns[':p' . $index++]  = '`MODULE_RECHERCHE_THEME_DEMANDEUR`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBLITIE_CONDITION_UTILISATION`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::CONDITION_UTILISATION_AR)) {
            $modifiedColumns[':p' . $index++]  = '`CONDITION_UTILISATION_AR`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::CONDITION_UTILISATION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`CONDITION_UTILISATION_FR`';
        }
        if ($this->isColumnModified(ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`VISIBILITE_TYPE_DEMANDE`';
        }

        $sql = sprintf(
            'INSERT INTO `configuration_plateforme` (%s) VALUES (%s)',
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
                    case '`MODULE_DEMANDEUR_CONNU`':						
                        $stmt->bindValue($identifier, $this->module_demandeur_connu, PDO::PARAM_STR);
                        break;
                    case '`AFFICHAGE_ONGLET_FORMAT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->affichage_onglet_format_demande, PDO::PARAM_STR);
                        break;
                    case '`AFFICHAGE_POPOVER_FORMAT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->affichage_popover_format_demande, PDO::PARAM_STR);
                        break;
                    case '`AFFICHAGE_CRITERE_FORMAT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->affichage_critere_format_demande, PDO::PARAM_STR);
                        break;
                    case '`AR_AGENT`':						
                        $stmt->bindValue($identifier, $this->ar_agent, PDO::PARAM_STR);
                        break;
                    case '`AFFICHAGE_SOURCE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->affichage_source_demande, PDO::PARAM_STR);
                        break;
                    case '`MODULE_RECHERCHE_THEME_DEMANDEUR`':						
                        $stmt->bindValue($identifier, $this->module_recherche_theme_demandeur, PDO::PARAM_STR);
                        break;
                    case '`VISIBLITIE_CONDITION_UTILISATION`':						
                        $stmt->bindValue($identifier, $this->visiblitie_condition_utilisation, PDO::PARAM_STR);
                        break;
                    case '`CONDITION_UTILISATION_AR`':						
                        $stmt->bindValue($identifier, $this->condition_utilisation_ar, PDO::PARAM_STR);
                        break;
                    case '`CONDITION_UTILISATION_FR`':						
                        $stmt->bindValue($identifier, $this->condition_utilisation_fr, PDO::PARAM_STR);
                        break;
                    case '`VISIBILITE_TYPE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->visibilite_type_demande, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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


            if (($retval = ConfigurationPlateformePeer::doValidate($this, $columns)) !== true) {
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
        $pos = ConfigurationPlateformePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getModuleDemandeurConnu();
                break;
            case 2:
                return $this->getAffichageOngletFormatDemande();
                break;
            case 3:
                return $this->getAffichagePopoverFormatDemande();
                break;
            case 4:
                return $this->getAffichageCritereFormatDemande();
                break;
            case 5:
                return $this->getArAgent();
                break;
            case 6:
                return $this->getAffichageSourceDemande();
                break;
            case 7:
                return $this->getModuleRechercheThemeDemandeur();
                break;
            case 8:
                return $this->getVisiblitieConditionUtilisation();
                break;
            case 9:
                return $this->getConditionUtilisationAr();
                break;
            case 10:
                return $this->getConditionUtilisationFr();
                break;
            case 11:
                return $this->getVisibiliteTypeDemande();
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
        if (isset($alreadyDumpedObjects['ConfigurationPlateforme'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigurationPlateforme'][$this->getPrimaryKey()] = true;
        $keys = ConfigurationPlateformePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getModuleDemandeurConnu(),
            $keys[2] => $this->getAffichageOngletFormatDemande(),
            $keys[3] => $this->getAffichagePopoverFormatDemande(),
            $keys[4] => $this->getAffichageCritereFormatDemande(),
            $keys[5] => $this->getArAgent(),
            $keys[6] => $this->getAffichageSourceDemande(),
            $keys[7] => $this->getModuleRechercheThemeDemandeur(),
            $keys[8] => $this->getVisiblitieConditionUtilisation(),
            $keys[9] => $this->getConditionUtilisationAr(),
            $keys[10] => $this->getConditionUtilisationFr(),
            $keys[11] => $this->getVisibiliteTypeDemande(),
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
        $pos = ConfigurationPlateformePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setModuleDemandeurConnu($value);
                break;
            case 2:
                $this->setAffichageOngletFormatDemande($value);
                break;
            case 3:
                $this->setAffichagePopoverFormatDemande($value);
                break;
            case 4:
                $this->setAffichageCritereFormatDemande($value);
                break;
            case 5:
                $this->setArAgent($value);
                break;
            case 6:
                $this->setAffichageSourceDemande($value);
                break;
            case 7:
                $this->setModuleRechercheThemeDemandeur($value);
                break;
            case 8:
                $this->setVisiblitieConditionUtilisation($value);
                break;
            case 9:
                $this->setConditionUtilisationAr($value);
                break;
            case 10:
                $this->setConditionUtilisationFr($value);
                break;
            case 11:
                $this->setVisibiliteTypeDemande($value);
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
        $keys = ConfigurationPlateformePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setModuleDemandeurConnu($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setAffichageOngletFormatDemande($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAffichagePopoverFormatDemande($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAffichageCritereFormatDemande($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setArAgent($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAffichageSourceDemande($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setModuleRechercheThemeDemandeur($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVisiblitieConditionUtilisation($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setConditionUtilisationAr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setConditionUtilisationFr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setVisibiliteTypeDemande($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ConfigurationPlateformePeer::DATABASE_NAME);

        if ($this->isColumnModified(ConfigurationPlateformePeer::ID)) $criteria->add(ConfigurationPlateformePeer::ID, $this->id);
        if ($this->isColumnModified(ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU)) $criteria->add(ConfigurationPlateformePeer::MODULE_DEMANDEUR_CONNU, $this->module_demandeur_connu);
        if ($this->isColumnModified(ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE)) $criteria->add(ConfigurationPlateformePeer::AFFICHAGE_ONGLET_FORMAT_DEMANDE, $this->affichage_onglet_format_demande);
        if ($this->isColumnModified(ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE)) $criteria->add(ConfigurationPlateformePeer::AFFICHAGE_POPOVER_FORMAT_DEMANDE, $this->affichage_popover_format_demande);
        if ($this->isColumnModified(ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE)) $criteria->add(ConfigurationPlateformePeer::AFFICHAGE_CRITERE_FORMAT_DEMANDE, $this->affichage_critere_format_demande);
        if ($this->isColumnModified(ConfigurationPlateformePeer::AR_AGENT)) $criteria->add(ConfigurationPlateformePeer::AR_AGENT, $this->ar_agent);
        if ($this->isColumnModified(ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE)) $criteria->add(ConfigurationPlateformePeer::AFFICHAGE_SOURCE_DEMANDE, $this->affichage_source_demande);
        if ($this->isColumnModified(ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR)) $criteria->add(ConfigurationPlateformePeer::MODULE_RECHERCHE_THEME_DEMANDEUR, $this->module_recherche_theme_demandeur);
        if ($this->isColumnModified(ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION)) $criteria->add(ConfigurationPlateformePeer::VISIBLITIE_CONDITION_UTILISATION, $this->visiblitie_condition_utilisation);
        if ($this->isColumnModified(ConfigurationPlateformePeer::CONDITION_UTILISATION_AR)) $criteria->add(ConfigurationPlateformePeer::CONDITION_UTILISATION_AR, $this->condition_utilisation_ar);
        if ($this->isColumnModified(ConfigurationPlateformePeer::CONDITION_UTILISATION_FR)) $criteria->add(ConfigurationPlateformePeer::CONDITION_UTILISATION_FR, $this->condition_utilisation_fr);
        if ($this->isColumnModified(ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE)) $criteria->add(ConfigurationPlateformePeer::VISIBILITE_TYPE_DEMANDE, $this->visibilite_type_demande);

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
        $criteria = new Criteria(ConfigurationPlateformePeer::DATABASE_NAME);
        $criteria->add(ConfigurationPlateformePeer::ID, $this->id);

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
     * @param object $copyObj An object of ConfigurationPlateforme (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setModuleDemandeurConnu($this->getModuleDemandeurConnu());
        $copyObj->setAffichageOngletFormatDemande($this->getAffichageOngletFormatDemande());
        $copyObj->setAffichagePopoverFormatDemande($this->getAffichagePopoverFormatDemande());
        $copyObj->setAffichageCritereFormatDemande($this->getAffichageCritereFormatDemande());
        $copyObj->setArAgent($this->getArAgent());
        $copyObj->setAffichageSourceDemande($this->getAffichageSourceDemande());
        $copyObj->setModuleRechercheThemeDemandeur($this->getModuleRechercheThemeDemandeur());
        $copyObj->setVisiblitieConditionUtilisation($this->getVisiblitieConditionUtilisation());
        $copyObj->setConditionUtilisationAr($this->getConditionUtilisationAr());
        $copyObj->setConditionUtilisationFr($this->getConditionUtilisationFr());
        $copyObj->setVisibiliteTypeDemande($this->getVisibiliteTypeDemande());
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
     * @return ConfigurationPlateforme Clone of current object.
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
     * @return ConfigurationPlateformePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ConfigurationPlateformePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->module_demandeur_connu = null;
        $this->affichage_onglet_format_demande = null;
        $this->affichage_popover_format_demande = null;
        $this->affichage_critere_format_demande = null;
        $this->ar_agent = null;
        $this->affichage_source_demande = null;
        $this->module_recherche_theme_demandeur = null;
        $this->visiblitie_condition_utilisation = null;
        $this->condition_utilisation_ar = null;
        $this->condition_utilisation_fr = null;
        $this->visibilite_type_demande = null;
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
        return (string) $this->exportTo(ConfigurationPlateformePeer::DEFAULT_STRING_FORMAT);
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
