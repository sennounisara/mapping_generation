<?php


/**
 * Base class that represents a row from the 'exec_prix_avenant' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecPrixAvenant extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecPrixAvenantPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecPrixAvenantPeer
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
     * The value for the id_avenant field.
     * @var        int
     */
    protected $id_avenant;

    /**
     * The value for the id_prix field.
     * @var        int
     */
    protected $id_prix;

    /**
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the numero field.
     * @var        string
     */
    protected $numero;

    /**
     * The value for the intitule field.
     * @var        string
     */
    protected $intitule;

    /**
     * The value for the unite field.
     * @var        string
     */
    protected $unite;

    /**
     * The value for the ecart_quantite field.
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $ecart_quantite;

    /**
     * The value for the quantite_av field.
     * @var        double
     */
    protected $quantite_av;

    /**
     * The value for the quantite_ap field.
     * @var        double
     */
    protected $quantite_ap;

    /**
     * The value for the prix_unitaire field.
     * @var        double
     */
    protected $prix_unitaire;

    /**
     * The value for the prix_ht_av field.
     * @var        double
     */
    protected $prix_ht_av;

    /**
     * The value for the prix_ht_ap field.
     * @var        double
     */
    protected $prix_ht_ap;

    /**
     * The value for the taux_tva field.
     * @var        double
     */
    protected $taux_tva;

    /**
     * The value for the prix_ttc_av field.
     * @var        double
     */
    protected $prix_ttc_av;

    /**
     * The value for the prix_ttc_ap field.
     * @var        double
     */
    protected $prix_ttc_ap;

    /**
     * The value for the quantite_max field.
     * @var        double
     */
    protected $quantite_max;

    /**
     * The value for the prix_ht_min field.
     * @var        double
     */
    protected $prix_ht_min;

    /**
     * The value for the prix_ht_max field.
     * @var        double
     */
    protected $prix_ht_max;

    /**
     * The value for the prix_ttc_min field.
     * @var        double
     */
    protected $prix_ttc_min;

    /**
     * The value for the prix_ttc_max field.
     * @var        double
     */
    protected $prix_ttc_max;

    /**
     * @var        CommonExecAvenant
     */
    protected $aCommonExecAvenant;

    /**
     * @var        CommonExecContrat
     */
    protected $aCommonExecContrat;

    /**
     * @var        CommonExecPrix
     */
    protected $aCommonExecPrix;

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
        $this->ecart_quantite = 0.0;
    }

    /**
     * Initializes internal state of BaseCommonExecPrixAvenant object.
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
     * Get the [id_avenant] column value.
     * 
     * @return int
     */
    public function getIdAvenant()
    {

        return $this->id_avenant;
    }

    /**
     * Get the [id_prix] column value.
     * 
     * @return int
     */
    public function getIdPrix()
    {

        return $this->id_prix;
    }

    /**
     * Get the [id_contrat] column value.
     * 
     * @return int
     */
    public function getIdContrat()
    {

        return $this->id_contrat;
    }

    /**
     * Get the [numero] column value.
     * 
     * @return string
     */
    public function getNumero()
    {

        return $this->numero;
    }

    /**
     * Get the [intitule] column value.
     * 
     * @return string
     */
    public function getIntitule()
    {

        return $this->intitule;
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
     * Get the [ecart_quantite] column value.
     * 
     * @return double
     */
    public function getEcartQuantite()
    {

        return $this->ecart_quantite;
    }

    /**
     * Get the [quantite_av] column value.
     * 
     * @return double
     */
    public function getQuantiteAv()
    {

        return $this->quantite_av;
    }

    /**
     * Get the [quantite_ap] column value.
     * 
     * @return double
     */
    public function getQuantiteAp()
    {

        return $this->quantite_ap;
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
     * Get the [prix_ht_av] column value.
     * 
     * @return double
     */
    public function getPrixHtAv()
    {

        return $this->prix_ht_av;
    }

    /**
     * Get the [prix_ht_ap] column value.
     * 
     * @return double
     */
    public function getPrixHtAp()
    {

        return $this->prix_ht_ap;
    }

    /**
     * Get the [taux_tva] column value.
     * 
     * @return double
     */
    public function getTauxTva()
    {

        return $this->taux_tva;
    }

    /**
     * Get the [prix_ttc_av] column value.
     * 
     * @return double
     */
    public function getPrixTtcAv()
    {

        return $this->prix_ttc_av;
    }

    /**
     * Get the [prix_ttc_ap] column value.
     * 
     * @return double
     */
    public function getPrixTtcAp()
    {

        return $this->prix_ttc_ap;
    }

    /**
     * Get the [quantite_max] column value.
     * 
     * @return double
     */
    public function getQuantiteMax()
    {

        return $this->quantite_max;
    }

    /**
     * Get the [prix_ht_min] column value.
     * 
     * @return double
     */
    public function getPrixHtMin()
    {

        return $this->prix_ht_min;
    }

    /**
     * Get the [prix_ht_max] column value.
     * 
     * @return double
     */
    public function getPrixHtMax()
    {

        return $this->prix_ht_max;
    }

    /**
     * Get the [prix_ttc_min] column value.
     * 
     * @return double
     */
    public function getPrixTtcMin()
    {

        return $this->prix_ttc_min;
    }

    /**
     * Get the [prix_ttc_max] column value.
     * 
     * @return double
     */
    public function getPrixTtcMax()
    {

        return $this->prix_ttc_max;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_avenant] column.
     * 
     * @param int $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setIdAvenant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_avenant !== $v) {
            $this->id_avenant = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::ID_AVENANT;
        }

        if ($this->aCommonExecAvenant !== null && $this->aCommonExecAvenant->getId() !== $v) {
            $this->aCommonExecAvenant = null;
        }


        return $this;
    } // setIdAvenant()

    /**
     * Set the value of [id_prix] column.
     * 
     * @param int $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setIdPrix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_prix !== $v) {
            $this->id_prix = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::ID_PRIX;
        }

        if ($this->aCommonExecPrix !== null && $this->aCommonExecPrix->getId() !== $v) {
            $this->aCommonExecPrix = null;
        }


        return $this;
    } // setIdPrix()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::ID_CONTRAT;
        }

        if ($this->aCommonExecContrat !== null && $this->aCommonExecContrat->getIdContrat() !== $v) {
            $this->aCommonExecContrat = null;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [numero] column.
     * 
     * @param string $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::INTITULE;
        }


        return $this;
    } // setIntitule()

    /**
     * Set the value of [unite] column.
     * 
     * @param string $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setUnite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unite !== $v) {
            $this->unite = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::UNITE;
        }


        return $this;
    } // setUnite()

    /**
     * Set the value of [ecart_quantite] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setEcartQuantite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->ecart_quantite !== $v) {
            $this->ecart_quantite = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::ECART_QUANTITE;
        }


        return $this;
    } // setEcartQuantite()

    /**
     * Set the value of [quantite_av] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setQuantiteAv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->quantite_av !== $v) {
            $this->quantite_av = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::QUANTITE_AV;
        }


        return $this;
    } // setQuantiteAv()

    /**
     * Set the value of [quantite_ap] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setQuantiteAp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->quantite_ap !== $v) {
            $this->quantite_ap = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::QUANTITE_AP;
        }


        return $this;
    } // setQuantiteAp()

    /**
     * Set the value of [prix_unitaire] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setPrixUnitaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_unitaire !== $v) {
            $this->prix_unitaire = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::PRIX_UNITAIRE;
        }


        return $this;
    } // setPrixUnitaire()

    /**
     * Set the value of [prix_ht_av] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setPrixHtAv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ht_av !== $v) {
            $this->prix_ht_av = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::PRIX_HT_AV;
        }


        return $this;
    } // setPrixHtAv()

    /**
     * Set the value of [prix_ht_ap] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setPrixHtAp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ht_ap !== $v) {
            $this->prix_ht_ap = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::PRIX_HT_AP;
        }


        return $this;
    } // setPrixHtAp()

    /**
     * Set the value of [taux_tva] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setTauxTva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->taux_tva !== $v) {
            $this->taux_tva = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::TAUX_TVA;
        }


        return $this;
    } // setTauxTva()

    /**
     * Set the value of [prix_ttc_av] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setPrixTtcAv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ttc_av !== $v) {
            $this->prix_ttc_av = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::PRIX_TTC_AV;
        }


        return $this;
    } // setPrixTtcAv()

    /**
     * Set the value of [prix_ttc_ap] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setPrixTtcAp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ttc_ap !== $v) {
            $this->prix_ttc_ap = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::PRIX_TTC_AP;
        }


        return $this;
    } // setPrixTtcAp()

    /**
     * Set the value of [quantite_max] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setQuantiteMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->quantite_max !== $v) {
            $this->quantite_max = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::QUANTITE_MAX;
        }


        return $this;
    } // setQuantiteMax()

    /**
     * Set the value of [prix_ht_min] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setPrixHtMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ht_min !== $v) {
            $this->prix_ht_min = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::PRIX_HT_MIN;
        }


        return $this;
    } // setPrixHtMin()

    /**
     * Set the value of [prix_ht_max] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setPrixHtMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ht_max !== $v) {
            $this->prix_ht_max = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::PRIX_HT_MAX;
        }


        return $this;
    } // setPrixHtMax()

    /**
     * Set the value of [prix_ttc_min] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setPrixTtcMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ttc_min !== $v) {
            $this->prix_ttc_min = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::PRIX_TTC_MIN;
        }


        return $this;
    } // setPrixTtcMin()

    /**
     * Set the value of [prix_ttc_max] column.
     * 
     * @param double $v new value
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     */
    public function setPrixTtcMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ttc_max !== $v) {
            $this->prix_ttc_max = $v;
            $this->modifiedColumns[] = CommonExecPrixAvenantPeer::PRIX_TTC_MAX;
        }


        return $this;
    } // setPrixTtcMax()

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
            if ($this->ecart_quantite !== 0.0) {
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
            $this->id_avenant = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_prix = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_contrat = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->numero = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->intitule = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->unite = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->ecart_quantite = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->quantite_av = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->quantite_ap = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->prix_unitaire = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->prix_ht_av = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->prix_ht_ap = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->taux_tva = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->prix_ttc_av = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->prix_ttc_ap = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->quantite_max = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->prix_ht_min = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->prix_ht_max = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->prix_ttc_min = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->prix_ttc_max = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = CommonExecPrixAvenantPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecPrixAvenant object", $e);
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

        if ($this->aCommonExecAvenant !== null && $this->id_avenant !== $this->aCommonExecAvenant->getId()) {
            $this->aCommonExecAvenant = null;
        }
        if ($this->aCommonExecPrix !== null && $this->id_prix !== $this->aCommonExecPrix->getId()) {
            $this->aCommonExecPrix = null;
        }
        if ($this->aCommonExecContrat !== null && $this->id_contrat !== $this->aCommonExecContrat->getIdContrat()) {
            $this->aCommonExecContrat = null;
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
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecPrixAvenantPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonExecAvenant = null;
            $this->aCommonExecContrat = null;
            $this->aCommonExecPrix = null;
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
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecPrixAvenantQuery::create()
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
            $con = Propel::getConnection(CommonExecPrixAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecPrixAvenantPeer::addInstanceToPool($this);
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

            if ($this->aCommonExecAvenant !== null) {
                if ($this->aCommonExecAvenant->isModified() || $this->aCommonExecAvenant->isNew()) {
                    $affectedRows += $this->aCommonExecAvenant->save($con);
                }
                $this->setCommonExecAvenant($this->aCommonExecAvenant);
            }

            if ($this->aCommonExecContrat !== null) {
                if ($this->aCommonExecContrat->isModified() || $this->aCommonExecContrat->isNew()) {
                    $affectedRows += $this->aCommonExecContrat->save($con);
                }
                $this->setCommonExecContrat($this->aCommonExecContrat);
            }

            if ($this->aCommonExecPrix !== null) {
                if ($this->aCommonExecPrix->isModified() || $this->aCommonExecPrix->isNew()) {
                    $affectedRows += $this->aCommonExecPrix->save($con);
                }
                $this->setCommonExecPrix($this->aCommonExecPrix);
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

        $this->modifiedColumns[] = CommonExecPrixAvenantPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecPrixAvenantPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::ID_AVENANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_avenant`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::ID_PRIX)) {
            $modifiedColumns[':p' . $index++]  = '`id_prix`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`intitule`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::UNITE)) {
            $modifiedColumns[':p' . $index++]  = '`unite`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::ECART_QUANTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ecart_quantite`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::QUANTITE_AV)) {
            $modifiedColumns[':p' . $index++]  = '`quantite_av`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::QUANTITE_AP)) {
            $modifiedColumns[':p' . $index++]  = '`quantite_ap`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_UNITAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`prix_unitaire`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_HT_AV)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ht_av`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_HT_AP)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ht_ap`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::TAUX_TVA)) {
            $modifiedColumns[':p' . $index++]  = '`taux_tva`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_TTC_AV)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ttc_av`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_TTC_AP)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ttc_ap`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::QUANTITE_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`quantite_max`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_HT_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ht_min`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_HT_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ht_max`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_TTC_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ttc_min`';
        }
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_TTC_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ttc_max`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_prix_avenant` (%s) VALUES (%s)',
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
                    case '`id_avenant`':						
                        $stmt->bindValue($identifier, $this->id_avenant, PDO::PARAM_INT);
                        break;
                    case '`id_prix`':						
                        $stmt->bindValue($identifier, $this->id_prix, PDO::PARAM_INT);
                        break;
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`numero`':						
                        $stmt->bindValue($identifier, $this->numero, PDO::PARAM_STR);
                        break;
                    case '`intitule`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
                        break;
                    case '`unite`':						
                        $stmt->bindValue($identifier, $this->unite, PDO::PARAM_STR);
                        break;
                    case '`ecart_quantite`':						
                        $stmt->bindValue($identifier, $this->ecart_quantite, PDO::PARAM_STR);
                        break;
                    case '`quantite_av`':						
                        $stmt->bindValue($identifier, $this->quantite_av, PDO::PARAM_STR);
                        break;
                    case '`quantite_ap`':						
                        $stmt->bindValue($identifier, $this->quantite_ap, PDO::PARAM_STR);
                        break;
                    case '`prix_unitaire`':						
                        $stmt->bindValue($identifier, $this->prix_unitaire, PDO::PARAM_STR);
                        break;
                    case '`prix_ht_av`':						
                        $stmt->bindValue($identifier, $this->prix_ht_av, PDO::PARAM_STR);
                        break;
                    case '`prix_ht_ap`':						
                        $stmt->bindValue($identifier, $this->prix_ht_ap, PDO::PARAM_STR);
                        break;
                    case '`taux_tva`':						
                        $stmt->bindValue($identifier, $this->taux_tva, PDO::PARAM_STR);
                        break;
                    case '`prix_ttc_av`':						
                        $stmt->bindValue($identifier, $this->prix_ttc_av, PDO::PARAM_STR);
                        break;
                    case '`prix_ttc_ap`':						
                        $stmt->bindValue($identifier, $this->prix_ttc_ap, PDO::PARAM_STR);
                        break;
                    case '`quantite_max`':						
                        $stmt->bindValue($identifier, $this->quantite_max, PDO::PARAM_STR);
                        break;
                    case '`prix_ht_min`':						
                        $stmt->bindValue($identifier, $this->prix_ht_min, PDO::PARAM_STR);
                        break;
                    case '`prix_ht_max`':						
                        $stmt->bindValue($identifier, $this->prix_ht_max, PDO::PARAM_STR);
                        break;
                    case '`prix_ttc_min`':						
                        $stmt->bindValue($identifier, $this->prix_ttc_min, PDO::PARAM_STR);
                        break;
                    case '`prix_ttc_max`':						
                        $stmt->bindValue($identifier, $this->prix_ttc_max, PDO::PARAM_STR);
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

            if ($this->aCommonExecAvenant !== null) {
                if (!$this->aCommonExecAvenant->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecAvenant->getValidationFailures());
                }
            }

            if ($this->aCommonExecContrat !== null) {
                if (!$this->aCommonExecContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecContrat->getValidationFailures());
                }
            }

            if ($this->aCommonExecPrix !== null) {
                if (!$this->aCommonExecPrix->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecPrix->getValidationFailures());
                }
            }


            if (($retval = CommonExecPrixAvenantPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonExecPrixAvenantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAvenant();
                break;
            case 2:
                return $this->getIdPrix();
                break;
            case 3:
                return $this->getIdContrat();
                break;
            case 4:
                return $this->getNumero();
                break;
            case 5:
                return $this->getIntitule();
                break;
            case 6:
                return $this->getUnite();
                break;
            case 7:
                return $this->getEcartQuantite();
                break;
            case 8:
                return $this->getQuantiteAv();
                break;
            case 9:
                return $this->getQuantiteAp();
                break;
            case 10:
                return $this->getPrixUnitaire();
                break;
            case 11:
                return $this->getPrixHtAv();
                break;
            case 12:
                return $this->getPrixHtAp();
                break;
            case 13:
                return $this->getTauxTva();
                break;
            case 14:
                return $this->getPrixTtcAv();
                break;
            case 15:
                return $this->getPrixTtcAp();
                break;
            case 16:
                return $this->getQuantiteMax();
                break;
            case 17:
                return $this->getPrixHtMin();
                break;
            case 18:
                return $this->getPrixHtMax();
                break;
            case 19:
                return $this->getPrixTtcMin();
                break;
            case 20:
                return $this->getPrixTtcMax();
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
        if (isset($alreadyDumpedObjects['CommonExecPrixAvenant'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecPrixAvenant'][$this->getPrimaryKey()] = true;
        $keys = CommonExecPrixAvenantPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdAvenant(),
            $keys[2] => $this->getIdPrix(),
            $keys[3] => $this->getIdContrat(),
            $keys[4] => $this->getNumero(),
            $keys[5] => $this->getIntitule(),
            $keys[6] => $this->getUnite(),
            $keys[7] => $this->getEcartQuantite(),
            $keys[8] => $this->getQuantiteAv(),
            $keys[9] => $this->getQuantiteAp(),
            $keys[10] => $this->getPrixUnitaire(),
            $keys[11] => $this->getPrixHtAv(),
            $keys[12] => $this->getPrixHtAp(),
            $keys[13] => $this->getTauxTva(),
            $keys[14] => $this->getPrixTtcAv(),
            $keys[15] => $this->getPrixTtcAp(),
            $keys[16] => $this->getQuantiteMax(),
            $keys[17] => $this->getPrixHtMin(),
            $keys[18] => $this->getPrixHtMax(),
            $keys[19] => $this->getPrixTtcMin(),
            $keys[20] => $this->getPrixTtcMax(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonExecAvenant) {
                $result['CommonExecAvenant'] = $this->aCommonExecAvenant->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecContrat) {
                $result['CommonExecContrat'] = $this->aCommonExecContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecPrix) {
                $result['CommonExecPrix'] = $this->aCommonExecPrix->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonExecPrixAvenantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAvenant($value);
                break;
            case 2:
                $this->setIdPrix($value);
                break;
            case 3:
                $this->setIdContrat($value);
                break;
            case 4:
                $this->setNumero($value);
                break;
            case 5:
                $this->setIntitule($value);
                break;
            case 6:
                $this->setUnite($value);
                break;
            case 7:
                $this->setEcartQuantite($value);
                break;
            case 8:
                $this->setQuantiteAv($value);
                break;
            case 9:
                $this->setQuantiteAp($value);
                break;
            case 10:
                $this->setPrixUnitaire($value);
                break;
            case 11:
                $this->setPrixHtAv($value);
                break;
            case 12:
                $this->setPrixHtAp($value);
                break;
            case 13:
                $this->setTauxTva($value);
                break;
            case 14:
                $this->setPrixTtcAv($value);
                break;
            case 15:
                $this->setPrixTtcAp($value);
                break;
            case 16:
                $this->setQuantiteMax($value);
                break;
            case 17:
                $this->setPrixHtMin($value);
                break;
            case 18:
                $this->setPrixHtMax($value);
                break;
            case 19:
                $this->setPrixTtcMin($value);
                break;
            case 20:
                $this->setPrixTtcMax($value);
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
        $keys = CommonExecPrixAvenantPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdAvenant($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdPrix($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdContrat($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNumero($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIntitule($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUnite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEcartQuantite($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setQuantiteAv($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setQuantiteAp($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPrixUnitaire($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPrixHtAv($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPrixHtAp($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTauxTva($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPrixTtcAv($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPrixTtcAp($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setQuantiteMax($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPrixHtMin($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setPrixHtMax($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setPrixTtcMin($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPrixTtcMax($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecPrixAvenantPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecPrixAvenantPeer::ID)) $criteria->add(CommonExecPrixAvenantPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::ID_AVENANT)) $criteria->add(CommonExecPrixAvenantPeer::ID_AVENANT, $this->id_avenant);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::ID_PRIX)) $criteria->add(CommonExecPrixAvenantPeer::ID_PRIX, $this->id_prix);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::ID_CONTRAT)) $criteria->add(CommonExecPrixAvenantPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::NUMERO)) $criteria->add(CommonExecPrixAvenantPeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::INTITULE)) $criteria->add(CommonExecPrixAvenantPeer::INTITULE, $this->intitule);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::UNITE)) $criteria->add(CommonExecPrixAvenantPeer::UNITE, $this->unite);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::ECART_QUANTITE)) $criteria->add(CommonExecPrixAvenantPeer::ECART_QUANTITE, $this->ecart_quantite);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::QUANTITE_AV)) $criteria->add(CommonExecPrixAvenantPeer::QUANTITE_AV, $this->quantite_av);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::QUANTITE_AP)) $criteria->add(CommonExecPrixAvenantPeer::QUANTITE_AP, $this->quantite_ap);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_UNITAIRE)) $criteria->add(CommonExecPrixAvenantPeer::PRIX_UNITAIRE, $this->prix_unitaire);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_HT_AV)) $criteria->add(CommonExecPrixAvenantPeer::PRIX_HT_AV, $this->prix_ht_av);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_HT_AP)) $criteria->add(CommonExecPrixAvenantPeer::PRIX_HT_AP, $this->prix_ht_ap);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::TAUX_TVA)) $criteria->add(CommonExecPrixAvenantPeer::TAUX_TVA, $this->taux_tva);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_TTC_AV)) $criteria->add(CommonExecPrixAvenantPeer::PRIX_TTC_AV, $this->prix_ttc_av);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_TTC_AP)) $criteria->add(CommonExecPrixAvenantPeer::PRIX_TTC_AP, $this->prix_ttc_ap);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::QUANTITE_MAX)) $criteria->add(CommonExecPrixAvenantPeer::QUANTITE_MAX, $this->quantite_max);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_HT_MIN)) $criteria->add(CommonExecPrixAvenantPeer::PRIX_HT_MIN, $this->prix_ht_min);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_HT_MAX)) $criteria->add(CommonExecPrixAvenantPeer::PRIX_HT_MAX, $this->prix_ht_max);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_TTC_MIN)) $criteria->add(CommonExecPrixAvenantPeer::PRIX_TTC_MIN, $this->prix_ttc_min);
        if ($this->isColumnModified(CommonExecPrixAvenantPeer::PRIX_TTC_MAX)) $criteria->add(CommonExecPrixAvenantPeer::PRIX_TTC_MAX, $this->prix_ttc_max);

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
        $criteria = new Criteria(CommonExecPrixAvenantPeer::DATABASE_NAME);
        $criteria->add(CommonExecPrixAvenantPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecPrixAvenant (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdAvenant($this->getIdAvenant());
        $copyObj->setIdPrix($this->getIdPrix());
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setNumero($this->getNumero());
        $copyObj->setIntitule($this->getIntitule());
        $copyObj->setUnite($this->getUnite());
        $copyObj->setEcartQuantite($this->getEcartQuantite());
        $copyObj->setQuantiteAv($this->getQuantiteAv());
        $copyObj->setQuantiteAp($this->getQuantiteAp());
        $copyObj->setPrixUnitaire($this->getPrixUnitaire());
        $copyObj->setPrixHtAv($this->getPrixHtAv());
        $copyObj->setPrixHtAp($this->getPrixHtAp());
        $copyObj->setTauxTva($this->getTauxTva());
        $copyObj->setPrixTtcAv($this->getPrixTtcAv());
        $copyObj->setPrixTtcAp($this->getPrixTtcAp());
        $copyObj->setQuantiteMax($this->getQuantiteMax());
        $copyObj->setPrixHtMin($this->getPrixHtMin());
        $copyObj->setPrixHtMax($this->getPrixHtMax());
        $copyObj->setPrixTtcMin($this->getPrixTtcMin());
        $copyObj->setPrixTtcMax($this->getPrixTtcMax());

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
     * @return CommonExecPrixAvenant Clone of current object.
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
     * @return CommonExecPrixAvenantPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecPrixAvenantPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonExecAvenant object.
     *
     * @param   CommonExecAvenant $v
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecAvenant(CommonExecAvenant $v = null)
    {
        if ($v === null) {
            $this->setIdAvenant(NULL);
        } else {
            $this->setIdAvenant($v->getId());
        }

        $this->aCommonExecAvenant = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecAvenant object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecPrixAvenant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecAvenant object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecAvenant The associated CommonExecAvenant object.
     * @throws PropelException
     */
    public function getCommonExecAvenant(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecAvenant === null && ($this->id_avenant !== null) && $doQuery) {
            $this->aCommonExecAvenant = CommonExecAvenantQuery::create()->findPk($this->id_avenant, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecAvenant->addCommonExecPrixAvenants($this);
             */
        }

        return $this->aCommonExecAvenant;
    }

    /**
     * Declares an association between this object and a CommonExecContrat object.
     *
     * @param   CommonExecContrat $v
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecContrat(CommonExecContrat $v = null)
    {
        if ($v === null) {
            $this->setIdContrat(NULL);
        } else {
            $this->setIdContrat($v->getIdContrat());
        }

        $this->aCommonExecContrat = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecContrat object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecPrixAvenant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecContrat object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecContrat The associated CommonExecContrat object.
     * @throws PropelException
     */
    public function getCommonExecContrat(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecContrat === null && ($this->id_contrat !== null) && $doQuery) {
            $this->aCommonExecContrat = CommonExecContratQuery::create()->findPk($this->id_contrat, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecContrat->addCommonExecPrixAvenants($this);
             */
        }

        return $this->aCommonExecContrat;
    }

    /**
     * Declares an association between this object and a CommonExecPrix object.
     *
     * @param   CommonExecPrix $v
     * @return CommonExecPrixAvenant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecPrix(CommonExecPrix $v = null)
    {
        if ($v === null) {
            $this->setIdPrix(NULL);
        } else {
            $this->setIdPrix($v->getId());
        }

        $this->aCommonExecPrix = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecPrix object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecPrixAvenant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecPrix object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecPrix The associated CommonExecPrix object.
     * @throws PropelException
     */
    public function getCommonExecPrix(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecPrix === null && ($this->id_prix !== null) && $doQuery) {
            $this->aCommonExecPrix = CommonExecPrixQuery::create()->findPk($this->id_prix, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecPrix->addCommonExecPrixAvenants($this);
             */
        }

        return $this->aCommonExecPrix;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_avenant = null;
        $this->id_prix = null;
        $this->id_contrat = null;
        $this->numero = null;
        $this->intitule = null;
        $this->unite = null;
        $this->ecart_quantite = null;
        $this->quantite_av = null;
        $this->quantite_ap = null;
        $this->prix_unitaire = null;
        $this->prix_ht_av = null;
        $this->prix_ht_ap = null;
        $this->taux_tva = null;
        $this->prix_ttc_av = null;
        $this->prix_ttc_ap = null;
        $this->quantite_max = null;
        $this->prix_ht_min = null;
        $this->prix_ht_max = null;
        $this->prix_ttc_min = null;
        $this->prix_ttc_max = null;
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
            if ($this->aCommonExecAvenant instanceof Persistent) {
              $this->aCommonExecAvenant->clearAllReferences($deep);
            }
            if ($this->aCommonExecContrat instanceof Persistent) {
              $this->aCommonExecContrat->clearAllReferences($deep);
            }
            if ($this->aCommonExecPrix instanceof Persistent) {
              $this->aCommonExecPrix->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonExecAvenant = null;
        $this->aCommonExecContrat = null;
        $this->aCommonExecPrix = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecPrixAvenantPeer::DEFAULT_STRING_FORMAT);
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
