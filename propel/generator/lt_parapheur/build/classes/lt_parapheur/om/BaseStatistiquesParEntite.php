<?php


/**
 * Base class that represents a row from the 'statistiques_par_entite' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseStatistiquesParEntite extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'StatistiquesParEntitePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        StatistiquesParEntitePeer
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
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the total_reclamations_par_mois field.
     * @var        int
     */
    protected $total_reclamations_par_mois;

    /**
     * The value for the statut_general field.
     * @var        int
     */
    protected $statut_general;

    /**
     * The value for the statut_demande field.
     * @var        int
     */
    protected $statut_demande;

    /**
     * The value for the cumul_a_fin_mois field.
     * @var        int
     */
    protected $cumul_a_fin_mois;

    /**
     * The value for the evolution_mois field.
     * @var        int
     */
    protected $evolution_mois;

    /**
     * The value for the id_statistique field.
     * @var        int
     */
    protected $id_statistique;

    /**
     * The value for the annee field.
     * @var        int
     */
    protected $annee;

    /**
     * The value for the mois field.
     * @var        string
     */
    protected $mois;

    /**
     * The value for the sigle_path field.
     * @var        string
     */
    protected $sigle_path;

    /**
     * The value for the total_par_mois_all_child field.
     * @var        int
     */
    protected $total_par_mois_all_child;

    /**
     * The value for the total field.
     * @var        int
     */
    protected $total;

    /**
     * The value for the total_non_affecte field.
     * @var        int
     */
    protected $total_non_affecte;

    /**
     * The value for the total_hors_attribution field.
     * @var        int
     */
    protected $total_hors_attribution;

    /**
     * The value for the niveau_entite field.
     * @var        string
     */
    protected $niveau_entite;

    /**
     * The value for the evolution_all_child field.
     * @var        int
     */
    protected $evolution_all_child;

    /**
     * The value for the evolution_total field.
     * @var        int
     */
    protected $evolution_total;

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
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Get the [total_reclamations_par_mois] column value.
     * 
     * @return int
     */
    public function getTotalReclamationsParMois()
    {

        return $this->total_reclamations_par_mois;
    }

    /**
     * Get the [statut_general] column value.
     * 
     * @return int
     */
    public function getStatutGeneral()
    {

        return $this->statut_general;
    }

    /**
     * Get the [statut_demande] column value.
     * 
     * @return int
     */
    public function getStatutDemande()
    {

        return $this->statut_demande;
    }

    /**
     * Get the [cumul_a_fin_mois] column value.
     * 
     * @return int
     */
    public function getCumulAFinMois()
    {

        return $this->cumul_a_fin_mois;
    }

    /**
     * Get the [evolution_mois] column value.
     * 
     * @return int
     */
    public function getEvolutionMois()
    {

        return $this->evolution_mois;
    }

    /**
     * Get the [id_statistique] column value.
     * 
     * @return int
     */
    public function getIdStatistique()
    {

        return $this->id_statistique;
    }

    /**
     * Get the [annee] column value.
     * 
     * @return int
     */
    public function getAnnee()
    {

        return $this->annee;
    }

    /**
     * Get the [mois] column value.
     * 
     * @return string
     */
    public function getMois()
    {

        return $this->mois;
    }

    /**
     * Get the [sigle_path] column value.
     * 
     * @return string
     */
    public function getSiglePath()
    {

        return $this->sigle_path;
    }

    /**
     * Get the [total_par_mois_all_child] column value.
     * 
     * @return int
     */
    public function getTotalParMoisAllChild()
    {

        return $this->total_par_mois_all_child;
    }

    /**
     * Get the [total] column value.
     * 
     * @return int
     */
    public function getTotal()
    {

        return $this->total;
    }

    /**
     * Get the [total_non_affecte] column value.
     * 
     * @return int
     */
    public function getTotalNonAffecte()
    {

        return $this->total_non_affecte;
    }

    /**
     * Get the [total_hors_attribution] column value.
     * 
     * @return int
     */
    public function getTotalHorsAttribution()
    {

        return $this->total_hors_attribution;
    }

    /**
     * Get the [niveau_entite] column value.
     * 
     * @return string
     */
    public function getNiveauEntite()
    {

        return $this->niveau_entite;
    }

    /**
     * Get the [evolution_all_child] column value.
     * 
     * @return int
     */
    public function getEvolutionAllChild()
    {

        return $this->evolution_all_child;
    }

    /**
     * Get the [evolution_total] column value.
     * 
     * @return int
     */
    public function getEvolutionTotal()
    {

        return $this->evolution_total;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [total_reclamations_par_mois] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setTotalReclamationsParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_reclamations_par_mois !== $v) {
            $this->total_reclamations_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::TOTAL_RECLAMATIONS_PAR_MOIS;
        }


        return $this;
    } // setTotalReclamationsParMois()

    /**
     * Set the value of [statut_general] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setStatutGeneral($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_general !== $v) {
            $this->statut_general = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::STATUT_GENERAL;
        }


        return $this;
    } // setStatutGeneral()

    /**
     * Set the value of [statut_demande] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setStatutDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_demande !== $v) {
            $this->statut_demande = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::STATUT_DEMANDE;
        }


        return $this;
    } // setStatutDemande()

    /**
     * Set the value of [cumul_a_fin_mois] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setCumulAFinMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cumul_a_fin_mois !== $v) {
            $this->cumul_a_fin_mois = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::CUMUL_A_FIN_MOIS;
        }


        return $this;
    } // setCumulAFinMois()

    /**
     * Set the value of [evolution_mois] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setEvolutionMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->evolution_mois !== $v) {
            $this->evolution_mois = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::EVOLUTION_MOIS;
        }


        return $this;
    } // setEvolutionMois()

    /**
     * Set the value of [id_statistique] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setIdStatistique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_statistique !== $v) {
            $this->id_statistique = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::ID_STATISTIQUE;
        }


        return $this;
    } // setIdStatistique()

    /**
     * Set the value of [annee] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setAnnee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->annee !== $v) {
            $this->annee = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::ANNEE;
        }


        return $this;
    } // setAnnee()

    /**
     * Set the value of [mois] column.
     * 
     * @param string $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mois !== $v) {
            $this->mois = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::MOIS;
        }


        return $this;
    } // setMois()

    /**
     * Set the value of [sigle_path] column.
     * 
     * @param string $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setSiglePath($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle_path !== $v) {
            $this->sigle_path = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::SIGLE_PATH;
        }


        return $this;
    } // setSiglePath()

    /**
     * Set the value of [total_par_mois_all_child] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setTotalParMoisAllChild($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_par_mois_all_child !== $v) {
            $this->total_par_mois_all_child = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::TOTAL_PAR_MOIS_ALL_CHILD;
        }


        return $this;
    } // setTotalParMoisAllChild()

    /**
     * Set the value of [total] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total !== $v) {
            $this->total = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::TOTAL;
        }


        return $this;
    } // setTotal()

    /**
     * Set the value of [total_non_affecte] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setTotalNonAffecte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_non_affecte !== $v) {
            $this->total_non_affecte = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::TOTAL_NON_AFFECTE;
        }


        return $this;
    } // setTotalNonAffecte()

    /**
     * Set the value of [total_hors_attribution] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setTotalHorsAttribution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_hors_attribution !== $v) {
            $this->total_hors_attribution = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::TOTAL_HORS_ATTRIBUTION;
        }


        return $this;
    } // setTotalHorsAttribution()

    /**
     * Set the value of [niveau_entite] column.
     * 
     * @param string $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setNiveauEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->niveau_entite !== $v) {
            $this->niveau_entite = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::NIVEAU_ENTITE;
        }


        return $this;
    } // setNiveauEntite()

    /**
     * Set the value of [evolution_all_child] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setEvolutionAllChild($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->evolution_all_child !== $v) {
            $this->evolution_all_child = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::EVOLUTION_ALL_CHILD;
        }


        return $this;
    } // setEvolutionAllChild()

    /**
     * Set the value of [evolution_total] column.
     * 
     * @param int $v new value
     * @return StatistiquesParEntite The current object (for fluent API support)
     */
    public function setEvolutionTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->evolution_total !== $v) {
            $this->evolution_total = $v;
            $this->modifiedColumns[] = StatistiquesParEntitePeer::EVOLUTION_TOTAL;
        }


        return $this;
    } // setEvolutionTotal()

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
            $this->id_entite = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->total_reclamations_par_mois = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->statut_general = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->statut_demande = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->cumul_a_fin_mois = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->evolution_mois = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_statistique = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->annee = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->mois = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->sigle_path = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->total_par_mois_all_child = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->total = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->total_non_affecte = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->total_hors_attribution = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->niveau_entite = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->evolution_all_child = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->evolution_total = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = StatistiquesParEntitePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating StatistiquesParEntite object", $e);
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
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = StatistiquesParEntitePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = StatistiquesParEntiteQuery::create()
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
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                StatistiquesParEntitePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = StatistiquesParEntitePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . StatistiquesParEntitePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(StatistiquesParEntitePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::TOTAL_RECLAMATIONS_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`TOTAL_RECLAMATIONS_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::STATUT_GENERAL)) {
            $modifiedColumns[':p' . $index++]  = '`STATUT_GENERAL`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::STATUT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`STATUT_DEMANDE`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::CUMUL_A_FIN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`CUMUL_A_FIN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::EVOLUTION_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`EVOLUTION_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::ID_STATISTIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_STATISTIQUE`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::ANNEE)) {
            $modifiedColumns[':p' . $index++]  = '`ANNEE`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`MOIS`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::SIGLE_PATH)) {
            $modifiedColumns[':p' . $index++]  = '`SIGLE_PATH`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::TOTAL_PAR_MOIS_ALL_CHILD)) {
            $modifiedColumns[':p' . $index++]  = '`TOTAL_PAR_MOIS_ALL_CHILD`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`TOTAL`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::TOTAL_NON_AFFECTE)) {
            $modifiedColumns[':p' . $index++]  = '`TOTAL_NON_AFFECTE`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::TOTAL_HORS_ATTRIBUTION)) {
            $modifiedColumns[':p' . $index++]  = '`TOTAL_HORS_ATTRIBUTION`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::NIVEAU_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`NIVEAU_ENTITE`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::EVOLUTION_ALL_CHILD)) {
            $modifiedColumns[':p' . $index++]  = '`EVOLUTION_ALL_CHILD`';
        }
        if ($this->isColumnModified(StatistiquesParEntitePeer::EVOLUTION_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`EVOLUTION_TOTAL`';
        }

        $sql = sprintf(
            'INSERT INTO `statistiques_par_entite` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`TOTAL_RECLAMATIONS_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->total_reclamations_par_mois, PDO::PARAM_INT);
                        break;
                    case '`STATUT_GENERAL`':						
                        $stmt->bindValue($identifier, $this->statut_general, PDO::PARAM_INT);
                        break;
                    case '`STATUT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->statut_demande, PDO::PARAM_INT);
                        break;
                    case '`CUMUL_A_FIN_MOIS`':						
                        $stmt->bindValue($identifier, $this->cumul_a_fin_mois, PDO::PARAM_INT);
                        break;
                    case '`EVOLUTION_MOIS`':						
                        $stmt->bindValue($identifier, $this->evolution_mois, PDO::PARAM_INT);
                        break;
                    case '`ID_STATISTIQUE`':						
                        $stmt->bindValue($identifier, $this->id_statistique, PDO::PARAM_INT);
                        break;
                    case '`ANNEE`':						
                        $stmt->bindValue($identifier, $this->annee, PDO::PARAM_INT);
                        break;
                    case '`MOIS`':						
                        $stmt->bindValue($identifier, $this->mois, PDO::PARAM_STR);
                        break;
                    case '`SIGLE_PATH`':						
                        $stmt->bindValue($identifier, $this->sigle_path, PDO::PARAM_STR);
                        break;
                    case '`TOTAL_PAR_MOIS_ALL_CHILD`':						
                        $stmt->bindValue($identifier, $this->total_par_mois_all_child, PDO::PARAM_INT);
                        break;
                    case '`TOTAL`':						
                        $stmt->bindValue($identifier, $this->total, PDO::PARAM_INT);
                        break;
                    case '`TOTAL_NON_AFFECTE`':						
                        $stmt->bindValue($identifier, $this->total_non_affecte, PDO::PARAM_INT);
                        break;
                    case '`TOTAL_HORS_ATTRIBUTION`':						
                        $stmt->bindValue($identifier, $this->total_hors_attribution, PDO::PARAM_INT);
                        break;
                    case '`NIVEAU_ENTITE`':						
                        $stmt->bindValue($identifier, $this->niveau_entite, PDO::PARAM_STR);
                        break;
                    case '`EVOLUTION_ALL_CHILD`':						
                        $stmt->bindValue($identifier, $this->evolution_all_child, PDO::PARAM_INT);
                        break;
                    case '`EVOLUTION_TOTAL`':						
                        $stmt->bindValue($identifier, $this->evolution_total, PDO::PARAM_INT);
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


            if (($retval = StatistiquesParEntitePeer::doValidate($this, $columns)) !== true) {
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
        $pos = StatistiquesParEntitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEntite();
                break;
            case 2:
                return $this->getTotalReclamationsParMois();
                break;
            case 3:
                return $this->getStatutGeneral();
                break;
            case 4:
                return $this->getStatutDemande();
                break;
            case 5:
                return $this->getCumulAFinMois();
                break;
            case 6:
                return $this->getEvolutionMois();
                break;
            case 7:
                return $this->getIdStatistique();
                break;
            case 8:
                return $this->getAnnee();
                break;
            case 9:
                return $this->getMois();
                break;
            case 10:
                return $this->getSiglePath();
                break;
            case 11:
                return $this->getTotalParMoisAllChild();
                break;
            case 12:
                return $this->getTotal();
                break;
            case 13:
                return $this->getTotalNonAffecte();
                break;
            case 14:
                return $this->getTotalHorsAttribution();
                break;
            case 15:
                return $this->getNiveauEntite();
                break;
            case 16:
                return $this->getEvolutionAllChild();
                break;
            case 17:
                return $this->getEvolutionTotal();
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
        if (isset($alreadyDumpedObjects['StatistiquesParEntite'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['StatistiquesParEntite'][$this->getPrimaryKey()] = true;
        $keys = StatistiquesParEntitePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdEntite(),
            $keys[2] => $this->getTotalReclamationsParMois(),
            $keys[3] => $this->getStatutGeneral(),
            $keys[4] => $this->getStatutDemande(),
            $keys[5] => $this->getCumulAFinMois(),
            $keys[6] => $this->getEvolutionMois(),
            $keys[7] => $this->getIdStatistique(),
            $keys[8] => $this->getAnnee(),
            $keys[9] => $this->getMois(),
            $keys[10] => $this->getSiglePath(),
            $keys[11] => $this->getTotalParMoisAllChild(),
            $keys[12] => $this->getTotal(),
            $keys[13] => $this->getTotalNonAffecte(),
            $keys[14] => $this->getTotalHorsAttribution(),
            $keys[15] => $this->getNiveauEntite(),
            $keys[16] => $this->getEvolutionAllChild(),
            $keys[17] => $this->getEvolutionTotal(),
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
        $pos = StatistiquesParEntitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEntite($value);
                break;
            case 2:
                $this->setTotalReclamationsParMois($value);
                break;
            case 3:
                $this->setStatutGeneral($value);
                break;
            case 4:
                $this->setStatutDemande($value);
                break;
            case 5:
                $this->setCumulAFinMois($value);
                break;
            case 6:
                $this->setEvolutionMois($value);
                break;
            case 7:
                $this->setIdStatistique($value);
                break;
            case 8:
                $this->setAnnee($value);
                break;
            case 9:
                $this->setMois($value);
                break;
            case 10:
                $this->setSiglePath($value);
                break;
            case 11:
                $this->setTotalParMoisAllChild($value);
                break;
            case 12:
                $this->setTotal($value);
                break;
            case 13:
                $this->setTotalNonAffecte($value);
                break;
            case 14:
                $this->setTotalHorsAttribution($value);
                break;
            case 15:
                $this->setNiveauEntite($value);
                break;
            case 16:
                $this->setEvolutionAllChild($value);
                break;
            case 17:
                $this->setEvolutionTotal($value);
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
        $keys = StatistiquesParEntitePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdEntite($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTotalReclamationsParMois($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setStatutGeneral($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStatutDemande($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCumulAFinMois($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEvolutionMois($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdStatistique($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAnnee($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMois($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setSiglePath($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTotalParMoisAllChild($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTotal($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTotalNonAffecte($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTotalHorsAttribution($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNiveauEntite($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEvolutionAllChild($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setEvolutionTotal($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(StatistiquesParEntitePeer::DATABASE_NAME);

        if ($this->isColumnModified(StatistiquesParEntitePeer::ID)) $criteria->add(StatistiquesParEntitePeer::ID, $this->id);
        if ($this->isColumnModified(StatistiquesParEntitePeer::ID_ENTITE)) $criteria->add(StatistiquesParEntitePeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(StatistiquesParEntitePeer::TOTAL_RECLAMATIONS_PAR_MOIS)) $criteria->add(StatistiquesParEntitePeer::TOTAL_RECLAMATIONS_PAR_MOIS, $this->total_reclamations_par_mois);
        if ($this->isColumnModified(StatistiquesParEntitePeer::STATUT_GENERAL)) $criteria->add(StatistiquesParEntitePeer::STATUT_GENERAL, $this->statut_general);
        if ($this->isColumnModified(StatistiquesParEntitePeer::STATUT_DEMANDE)) $criteria->add(StatistiquesParEntitePeer::STATUT_DEMANDE, $this->statut_demande);
        if ($this->isColumnModified(StatistiquesParEntitePeer::CUMUL_A_FIN_MOIS)) $criteria->add(StatistiquesParEntitePeer::CUMUL_A_FIN_MOIS, $this->cumul_a_fin_mois);
        if ($this->isColumnModified(StatistiquesParEntitePeer::EVOLUTION_MOIS)) $criteria->add(StatistiquesParEntitePeer::EVOLUTION_MOIS, $this->evolution_mois);
        if ($this->isColumnModified(StatistiquesParEntitePeer::ID_STATISTIQUE)) $criteria->add(StatistiquesParEntitePeer::ID_STATISTIQUE, $this->id_statistique);
        if ($this->isColumnModified(StatistiquesParEntitePeer::ANNEE)) $criteria->add(StatistiquesParEntitePeer::ANNEE, $this->annee);
        if ($this->isColumnModified(StatistiquesParEntitePeer::MOIS)) $criteria->add(StatistiquesParEntitePeer::MOIS, $this->mois);
        if ($this->isColumnModified(StatistiquesParEntitePeer::SIGLE_PATH)) $criteria->add(StatistiquesParEntitePeer::SIGLE_PATH, $this->sigle_path);
        if ($this->isColumnModified(StatistiquesParEntitePeer::TOTAL_PAR_MOIS_ALL_CHILD)) $criteria->add(StatistiquesParEntitePeer::TOTAL_PAR_MOIS_ALL_CHILD, $this->total_par_mois_all_child);
        if ($this->isColumnModified(StatistiquesParEntitePeer::TOTAL)) $criteria->add(StatistiquesParEntitePeer::TOTAL, $this->total);
        if ($this->isColumnModified(StatistiquesParEntitePeer::TOTAL_NON_AFFECTE)) $criteria->add(StatistiquesParEntitePeer::TOTAL_NON_AFFECTE, $this->total_non_affecte);
        if ($this->isColumnModified(StatistiquesParEntitePeer::TOTAL_HORS_ATTRIBUTION)) $criteria->add(StatistiquesParEntitePeer::TOTAL_HORS_ATTRIBUTION, $this->total_hors_attribution);
        if ($this->isColumnModified(StatistiquesParEntitePeer::NIVEAU_ENTITE)) $criteria->add(StatistiquesParEntitePeer::NIVEAU_ENTITE, $this->niveau_entite);
        if ($this->isColumnModified(StatistiquesParEntitePeer::EVOLUTION_ALL_CHILD)) $criteria->add(StatistiquesParEntitePeer::EVOLUTION_ALL_CHILD, $this->evolution_all_child);
        if ($this->isColumnModified(StatistiquesParEntitePeer::EVOLUTION_TOTAL)) $criteria->add(StatistiquesParEntitePeer::EVOLUTION_TOTAL, $this->evolution_total);

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
        $criteria = new Criteria(StatistiquesParEntitePeer::DATABASE_NAME);
        $criteria->add(StatistiquesParEntitePeer::ID, $this->id);

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
     * @param object $copyObj An object of StatistiquesParEntite (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setTotalReclamationsParMois($this->getTotalReclamationsParMois());
        $copyObj->setStatutGeneral($this->getStatutGeneral());
        $copyObj->setStatutDemande($this->getStatutDemande());
        $copyObj->setCumulAFinMois($this->getCumulAFinMois());
        $copyObj->setEvolutionMois($this->getEvolutionMois());
        $copyObj->setIdStatistique($this->getIdStatistique());
        $copyObj->setAnnee($this->getAnnee());
        $copyObj->setMois($this->getMois());
        $copyObj->setSiglePath($this->getSiglePath());
        $copyObj->setTotalParMoisAllChild($this->getTotalParMoisAllChild());
        $copyObj->setTotal($this->getTotal());
        $copyObj->setTotalNonAffecte($this->getTotalNonAffecte());
        $copyObj->setTotalHorsAttribution($this->getTotalHorsAttribution());
        $copyObj->setNiveauEntite($this->getNiveauEntite());
        $copyObj->setEvolutionAllChild($this->getEvolutionAllChild());
        $copyObj->setEvolutionTotal($this->getEvolutionTotal());
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
     * @return StatistiquesParEntite Clone of current object.
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
     * @return StatistiquesParEntitePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new StatistiquesParEntitePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_entite = null;
        $this->total_reclamations_par_mois = null;
        $this->statut_general = null;
        $this->statut_demande = null;
        $this->cumul_a_fin_mois = null;
        $this->evolution_mois = null;
        $this->id_statistique = null;
        $this->annee = null;
        $this->mois = null;
        $this->sigle_path = null;
        $this->total_par_mois_all_child = null;
        $this->total = null;
        $this->total_non_affecte = null;
        $this->total_hors_attribution = null;
        $this->niveau_entite = null;
        $this->evolution_all_child = null;
        $this->evolution_total = null;
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
        return (string) $this->exportTo(StatistiquesParEntitePeer::DEFAULT_STRING_FORMAT);
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
