<?php


/**
 * Base class that represents a row from the 'exec_repartition' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecRepartition extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecRepartitionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecRepartitionPeer
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
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the id_facture field.
     * @var        int
     */
    protected $id_facture;

    /**
     * The value for the id_prix field.
     * @var        int
     */
    protected $id_prix;

    /**
     * The value for the id_contractant field.
     * @var        int
     */
    protected $id_contractant;

    /**
     * The value for the prix_unitaire field.
     * @var        double
     */
    protected $prix_unitaire;

    /**
     * The value for the taux_tva field.
     * @var        double
     */
    protected $taux_tva;

    /**
     * The value for the pourcentage_realise field.
     * @var        double
     */
    protected $pourcentage_realise;

    /**
     * The value for the cumul_pourcent_realise field.
     * @var        double
     */
    protected $cumul_pourcent_realise;

    /**
     * The value for the montant_facture_ht field.
     * @var        double
     */
    protected $montant_facture_ht;

    /**
     * The value for the montant_facture_ttc field.
     * @var        double
     */
    protected $montant_facture_ttc;

    /**
     * The value for the montant_paye_ht field.
     * @var        double
     */
    protected $montant_paye_ht;

    /**
     * The value for the montant_paye_ttc field.
     * @var        double
     */
    protected $montant_paye_ttc;

    /**
     * The value for the id_agent_crea field.
     * @var        int
     */
    protected $id_agent_crea;

    /**
     * The value for the id_entreprise_crea field.
     * @var        int
     */
    protected $id_entreprise_crea;

    /**
     * The value for the date_crea field.
     * @var        string
     */
    protected $date_crea;

    /**
     * The value for the id_agent_modif field.
     * @var        int
     */
    protected $id_agent_modif;

    /**
     * The value for the date_modif field.
     * @var        string
     */
    protected $date_modif;

    /**
     * @var        CommonExecContractant
     */
    protected $aCommonExecContractant;

    /**
     * @var        CommonExecContrat
     */
    protected $aCommonExecContrat;

    /**
     * @var        CommonExecFacture
     */
    protected $aCommonExecFacture;

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
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {

        return $this->id;
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
     * Get the [id_facture] column value.
     * 
     * @return int
     */
    public function getIdFacture()
    {

        return $this->id_facture;
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
     * Get the [id_contractant] column value.
     * 
     * @return int
     */
    public function getIdContractant()
    {

        return $this->id_contractant;
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
     * Get the [taux_tva] column value.
     * 
     * @return double
     */
    public function getTauxTva()
    {

        return $this->taux_tva;
    }

    /**
     * Get the [pourcentage_realise] column value.
     * 
     * @return double
     */
    public function getPourcentageRealise()
    {

        return $this->pourcentage_realise;
    }

    /**
     * Get the [cumul_pourcent_realise] column value.
     * 
     * @return double
     */
    public function getCumulPourcentRealise()
    {

        return $this->cumul_pourcent_realise;
    }

    /**
     * Get the [montant_facture_ht] column value.
     * 
     * @return double
     */
    public function getMontantFactureHt()
    {

        return $this->montant_facture_ht;
    }

    /**
     * Get the [montant_facture_ttc] column value.
     * 
     * @return double
     */
    public function getMontantFactureTtc()
    {

        return $this->montant_facture_ttc;
    }

    /**
     * Get the [montant_paye_ht] column value.
     * 
     * @return double
     */
    public function getMontantPayeHt()
    {

        return $this->montant_paye_ht;
    }

    /**
     * Get the [montant_paye_ttc] column value.
     * 
     * @return double
     */
    public function getMontantPayeTtc()
    {

        return $this->montant_paye_ttc;
    }

    /**
     * Get the [id_agent_crea] column value.
     * 
     * @return int
     */
    public function getIdAgentCrea()
    {

        return $this->id_agent_crea;
    }

    /**
     * Get the [id_entreprise_crea] column value.
     * 
     * @return int
     */
    public function getIdEntrepriseCrea()
    {

        return $this->id_entreprise_crea;
    }

    /**
     * Get the [optionally formatted] temporal [date_crea] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCrea($format = 'Y-m-d H:i:s')
    {
        if ($this->date_crea === null) {
            return null;
        }

        if ($this->date_crea === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_crea);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_crea, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [id_agent_modif] column value.
     * 
     * @return int
     */
    public function getIdAgentModif()
    {

        return $this->id_agent_modif;
    }

    /**
     * Get the [optionally formatted] temporal [date_modif] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateModif($format = 'Y-m-d H:i:s')
    {
        if ($this->date_modif === null) {
            return null;
        }

        if ($this->date_modif === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_modif);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modif, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::ID_CONTRAT;
        }

        if ($this->aCommonExecContrat !== null && $this->aCommonExecContrat->getIdContrat() !== $v) {
            $this->aCommonExecContrat = null;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [id_facture] column.
     * 
     * @param int $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setIdFacture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_facture !== $v) {
            $this->id_facture = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::ID_FACTURE;
        }

        if ($this->aCommonExecFacture !== null && $this->aCommonExecFacture->getId() !== $v) {
            $this->aCommonExecFacture = null;
        }


        return $this;
    } // setIdFacture()

    /**
     * Set the value of [id_prix] column.
     * 
     * @param int $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setIdPrix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_prix !== $v) {
            $this->id_prix = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::ID_PRIX;
        }

        if ($this->aCommonExecPrix !== null && $this->aCommonExecPrix->getId() !== $v) {
            $this->aCommonExecPrix = null;
        }


        return $this;
    } // setIdPrix()

    /**
     * Set the value of [id_contractant] column.
     * 
     * @param int $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setIdContractant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contractant !== $v) {
            $this->id_contractant = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::ID_CONTRACTANT;
        }

        if ($this->aCommonExecContractant !== null && $this->aCommonExecContractant->getId() !== $v) {
            $this->aCommonExecContractant = null;
        }


        return $this;
    } // setIdContractant()

    /**
     * Set the value of [prix_unitaire] column.
     * 
     * @param double $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setPrixUnitaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_unitaire !== $v) {
            $this->prix_unitaire = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::PRIX_UNITAIRE;
        }


        return $this;
    } // setPrixUnitaire()

    /**
     * Set the value of [taux_tva] column.
     * 
     * @param double $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setTauxTva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->taux_tva !== $v) {
            $this->taux_tva = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::TAUX_TVA;
        }


        return $this;
    } // setTauxTva()

    /**
     * Set the value of [pourcentage_realise] column.
     * 
     * @param double $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setPourcentageRealise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pourcentage_realise !== $v) {
            $this->pourcentage_realise = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::POURCENTAGE_REALISE;
        }


        return $this;
    } // setPourcentageRealise()

    /**
     * Set the value of [cumul_pourcent_realise] column.
     * 
     * @param double $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setCumulPourcentRealise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->cumul_pourcent_realise !== $v) {
            $this->cumul_pourcent_realise = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::CUMUL_POURCENT_REALISE;
        }


        return $this;
    } // setCumulPourcentRealise()

    /**
     * Set the value of [montant_facture_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setMontantFactureHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_facture_ht !== $v) {
            $this->montant_facture_ht = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::MONTANT_FACTURE_HT;
        }


        return $this;
    } // setMontantFactureHt()

    /**
     * Set the value of [montant_facture_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setMontantFactureTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_facture_ttc !== $v) {
            $this->montant_facture_ttc = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::MONTANT_FACTURE_TTC;
        }


        return $this;
    } // setMontantFactureTtc()

    /**
     * Set the value of [montant_paye_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setMontantPayeHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_paye_ht !== $v) {
            $this->montant_paye_ht = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::MONTANT_PAYE_HT;
        }


        return $this;
    } // setMontantPayeHt()

    /**
     * Set the value of [montant_paye_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setMontantPayeTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_paye_ttc !== $v) {
            $this->montant_paye_ttc = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::MONTANT_PAYE_TTC;
        }


        return $this;
    } // setMontantPayeTtc()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::ID_AGENT_CREA;
        }


        return $this;
    } // setIdAgentCrea()

    /**
     * Set the value of [id_entreprise_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setIdEntrepriseCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise_crea !== $v) {
            $this->id_entreprise_crea = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::ID_ENTREPRISE_CREA;
        }


        return $this;
    } // setIdEntrepriseCrea()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecRepartitionPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_agent_modif] column.
     * 
     * @param int $v new value
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setIdAgentModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_modif !== $v) {
            $this->id_agent_modif = $v;
            $this->modifiedColumns[] = CommonExecRepartitionPeer::ID_AGENT_MODIF;
        }


        return $this;
    } // setIdAgentModif()

    /**
     * Sets the value of [date_modif] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecRepartition The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = CommonExecRepartitionPeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

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
            $this->id_contrat = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_facture = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_prix = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_contractant = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->prix_unitaire = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->taux_tva = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->pourcentage_realise = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->cumul_pourcent_realise = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->montant_facture_ht = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->montant_facture_ttc = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->montant_paye_ht = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->montant_paye_ttc = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->id_agent_crea = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->id_entreprise_crea = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->date_crea = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->id_agent_modif = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->date_modif = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = CommonExecRepartitionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecRepartition object", $e);
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

        if ($this->aCommonExecContrat !== null && $this->id_contrat !== $this->aCommonExecContrat->getIdContrat()) {
            $this->aCommonExecContrat = null;
        }
        if ($this->aCommonExecFacture !== null && $this->id_facture !== $this->aCommonExecFacture->getId()) {
            $this->aCommonExecFacture = null;
        }
        if ($this->aCommonExecPrix !== null && $this->id_prix !== $this->aCommonExecPrix->getId()) {
            $this->aCommonExecPrix = null;
        }
        if ($this->aCommonExecContractant !== null && $this->id_contractant !== $this->aCommonExecContractant->getId()) {
            $this->aCommonExecContractant = null;
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
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecRepartitionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonExecContractant = null;
            $this->aCommonExecContrat = null;
            $this->aCommonExecFacture = null;
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
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecRepartitionQuery::create()
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
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecRepartitionPeer::addInstanceToPool($this);
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

            if ($this->aCommonExecContractant !== null) {
                if ($this->aCommonExecContractant->isModified() || $this->aCommonExecContractant->isNew()) {
                    $affectedRows += $this->aCommonExecContractant->save($con);
                }
                $this->setCommonExecContractant($this->aCommonExecContractant);
            }

            if ($this->aCommonExecContrat !== null) {
                if ($this->aCommonExecContrat->isModified() || $this->aCommonExecContrat->isNew()) {
                    $affectedRows += $this->aCommonExecContrat->save($con);
                }
                $this->setCommonExecContrat($this->aCommonExecContrat);
            }

            if ($this->aCommonExecFacture !== null) {
                if ($this->aCommonExecFacture->isModified() || $this->aCommonExecFacture->isNew()) {
                    $affectedRows += $this->aCommonExecFacture->save($con);
                }
                $this->setCommonExecFacture($this->aCommonExecFacture);
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

        $this->modifiedColumns[] = CommonExecRepartitionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecRepartitionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_facture`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_PRIX)) {
            $modifiedColumns[':p' . $index++]  = '`id_prix`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_CONTRACTANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contractant`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::PRIX_UNITAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`prix_unitaire`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::TAUX_TVA)) {
            $modifiedColumns[':p' . $index++]  = '`taux_tva`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::POURCENTAGE_REALISE)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_realise`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::CUMUL_POURCENT_REALISE)) {
            $modifiedColumns[':p' . $index++]  = '`cumul_pourcent_realise`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::MONTANT_FACTURE_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_facture_ht`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::MONTANT_FACTURE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_facture_ttc`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::MONTANT_PAYE_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_paye_ht`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::MONTANT_PAYE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_paye_ttc`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_ENTREPRISE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise_crea`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_AGENT_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_modif`';
        }
        if ($this->isColumnModified(CommonExecRepartitionPeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`date_modif`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_repartition` (%s) VALUES (%s)',
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
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`id_facture`':						
                        $stmt->bindValue($identifier, $this->id_facture, PDO::PARAM_INT);
                        break;
                    case '`id_prix`':						
                        $stmt->bindValue($identifier, $this->id_prix, PDO::PARAM_INT);
                        break;
                    case '`id_contractant`':						
                        $stmt->bindValue($identifier, $this->id_contractant, PDO::PARAM_INT);
                        break;
                    case '`prix_unitaire`':						
                        $stmt->bindValue($identifier, $this->prix_unitaire, PDO::PARAM_STR);
                        break;
                    case '`taux_tva`':						
                        $stmt->bindValue($identifier, $this->taux_tva, PDO::PARAM_STR);
                        break;
                    case '`pourcentage_realise`':						
                        $stmt->bindValue($identifier, $this->pourcentage_realise, PDO::PARAM_STR);
                        break;
                    case '`cumul_pourcent_realise`':						
                        $stmt->bindValue($identifier, $this->cumul_pourcent_realise, PDO::PARAM_STR);
                        break;
                    case '`montant_facture_ht`':						
                        $stmt->bindValue($identifier, $this->montant_facture_ht, PDO::PARAM_STR);
                        break;
                    case '`montant_facture_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_facture_ttc, PDO::PARAM_STR);
                        break;
                    case '`montant_paye_ht`':						
                        $stmt->bindValue($identifier, $this->montant_paye_ht, PDO::PARAM_STR);
                        break;
                    case '`montant_paye_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_paye_ttc, PDO::PARAM_STR);
                        break;
                    case '`id_agent_crea`':						
                        $stmt->bindValue($identifier, $this->id_agent_crea, PDO::PARAM_INT);
                        break;
                    case '`id_entreprise_crea`':						
                        $stmt->bindValue($identifier, $this->id_entreprise_crea, PDO::PARAM_INT);
                        break;
                    case '`date_crea`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`id_agent_modif`':						
                        $stmt->bindValue($identifier, $this->id_agent_modif, PDO::PARAM_INT);
                        break;
                    case '`date_modif`':						
                        $stmt->bindValue($identifier, $this->date_modif, PDO::PARAM_STR);
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

            if ($this->aCommonExecContractant !== null) {
                if (!$this->aCommonExecContractant->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecContractant->getValidationFailures());
                }
            }

            if ($this->aCommonExecContrat !== null) {
                if (!$this->aCommonExecContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecContrat->getValidationFailures());
                }
            }

            if ($this->aCommonExecFacture !== null) {
                if (!$this->aCommonExecFacture->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecFacture->getValidationFailures());
                }
            }

            if ($this->aCommonExecPrix !== null) {
                if (!$this->aCommonExecPrix->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecPrix->getValidationFailures());
                }
            }


            if (($retval = CommonExecRepartitionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonExecRepartitionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdContrat();
                break;
            case 2:
                return $this->getIdFacture();
                break;
            case 3:
                return $this->getIdPrix();
                break;
            case 4:
                return $this->getIdContractant();
                break;
            case 5:
                return $this->getPrixUnitaire();
                break;
            case 6:
                return $this->getTauxTva();
                break;
            case 7:
                return $this->getPourcentageRealise();
                break;
            case 8:
                return $this->getCumulPourcentRealise();
                break;
            case 9:
                return $this->getMontantFactureHt();
                break;
            case 10:
                return $this->getMontantFactureTtc();
                break;
            case 11:
                return $this->getMontantPayeHt();
                break;
            case 12:
                return $this->getMontantPayeTtc();
                break;
            case 13:
                return $this->getIdAgentCrea();
                break;
            case 14:
                return $this->getIdEntrepriseCrea();
                break;
            case 15:
                return $this->getDateCrea();
                break;
            case 16:
                return $this->getIdAgentModif();
                break;
            case 17:
                return $this->getDateModif();
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
        if (isset($alreadyDumpedObjects['CommonExecRepartition'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecRepartition'][$this->getPrimaryKey()] = true;
        $keys = CommonExecRepartitionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdContrat(),
            $keys[2] => $this->getIdFacture(),
            $keys[3] => $this->getIdPrix(),
            $keys[4] => $this->getIdContractant(),
            $keys[5] => $this->getPrixUnitaire(),
            $keys[6] => $this->getTauxTva(),
            $keys[7] => $this->getPourcentageRealise(),
            $keys[8] => $this->getCumulPourcentRealise(),
            $keys[9] => $this->getMontantFactureHt(),
            $keys[10] => $this->getMontantFactureTtc(),
            $keys[11] => $this->getMontantPayeHt(),
            $keys[12] => $this->getMontantPayeTtc(),
            $keys[13] => $this->getIdAgentCrea(),
            $keys[14] => $this->getIdEntrepriseCrea(),
            $keys[15] => $this->getDateCrea(),
            $keys[16] => $this->getIdAgentModif(),
            $keys[17] => $this->getDateModif(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonExecContractant) {
                $result['CommonExecContractant'] = $this->aCommonExecContractant->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecContrat) {
                $result['CommonExecContrat'] = $this->aCommonExecContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecFacture) {
                $result['CommonExecFacture'] = $this->aCommonExecFacture->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonExecRepartitionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdContrat($value);
                break;
            case 2:
                $this->setIdFacture($value);
                break;
            case 3:
                $this->setIdPrix($value);
                break;
            case 4:
                $this->setIdContractant($value);
                break;
            case 5:
                $this->setPrixUnitaire($value);
                break;
            case 6:
                $this->setTauxTva($value);
                break;
            case 7:
                $this->setPourcentageRealise($value);
                break;
            case 8:
                $this->setCumulPourcentRealise($value);
                break;
            case 9:
                $this->setMontantFactureHt($value);
                break;
            case 10:
                $this->setMontantFactureTtc($value);
                break;
            case 11:
                $this->setMontantPayeHt($value);
                break;
            case 12:
                $this->setMontantPayeTtc($value);
                break;
            case 13:
                $this->setIdAgentCrea($value);
                break;
            case 14:
                $this->setIdEntrepriseCrea($value);
                break;
            case 15:
                $this->setDateCrea($value);
                break;
            case 16:
                $this->setIdAgentModif($value);
                break;
            case 17:
                $this->setDateModif($value);
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
        $keys = CommonExecRepartitionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdContrat($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdFacture($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdPrix($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdContractant($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPrixUnitaire($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTauxTva($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPourcentageRealise($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCumulPourcentRealise($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMontantFactureHt($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMontantFactureTtc($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMontantPayeHt($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMontantPayeTtc($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdAgentCrea($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdEntrepriseCrea($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateCrea($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdAgentModif($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDateModif($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecRepartitionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecRepartitionPeer::ID)) $criteria->add(CommonExecRepartitionPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_CONTRAT)) $criteria->add(CommonExecRepartitionPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_FACTURE)) $criteria->add(CommonExecRepartitionPeer::ID_FACTURE, $this->id_facture);
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_PRIX)) $criteria->add(CommonExecRepartitionPeer::ID_PRIX, $this->id_prix);
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_CONTRACTANT)) $criteria->add(CommonExecRepartitionPeer::ID_CONTRACTANT, $this->id_contractant);
        if ($this->isColumnModified(CommonExecRepartitionPeer::PRIX_UNITAIRE)) $criteria->add(CommonExecRepartitionPeer::PRIX_UNITAIRE, $this->prix_unitaire);
        if ($this->isColumnModified(CommonExecRepartitionPeer::TAUX_TVA)) $criteria->add(CommonExecRepartitionPeer::TAUX_TVA, $this->taux_tva);
        if ($this->isColumnModified(CommonExecRepartitionPeer::POURCENTAGE_REALISE)) $criteria->add(CommonExecRepartitionPeer::POURCENTAGE_REALISE, $this->pourcentage_realise);
        if ($this->isColumnModified(CommonExecRepartitionPeer::CUMUL_POURCENT_REALISE)) $criteria->add(CommonExecRepartitionPeer::CUMUL_POURCENT_REALISE, $this->cumul_pourcent_realise);
        if ($this->isColumnModified(CommonExecRepartitionPeer::MONTANT_FACTURE_HT)) $criteria->add(CommonExecRepartitionPeer::MONTANT_FACTURE_HT, $this->montant_facture_ht);
        if ($this->isColumnModified(CommonExecRepartitionPeer::MONTANT_FACTURE_TTC)) $criteria->add(CommonExecRepartitionPeer::MONTANT_FACTURE_TTC, $this->montant_facture_ttc);
        if ($this->isColumnModified(CommonExecRepartitionPeer::MONTANT_PAYE_HT)) $criteria->add(CommonExecRepartitionPeer::MONTANT_PAYE_HT, $this->montant_paye_ht);
        if ($this->isColumnModified(CommonExecRepartitionPeer::MONTANT_PAYE_TTC)) $criteria->add(CommonExecRepartitionPeer::MONTANT_PAYE_TTC, $this->montant_paye_ttc);
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_AGENT_CREA)) $criteria->add(CommonExecRepartitionPeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_ENTREPRISE_CREA)) $criteria->add(CommonExecRepartitionPeer::ID_ENTREPRISE_CREA, $this->id_entreprise_crea);
        if ($this->isColumnModified(CommonExecRepartitionPeer::DATE_CREA)) $criteria->add(CommonExecRepartitionPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecRepartitionPeer::ID_AGENT_MODIF)) $criteria->add(CommonExecRepartitionPeer::ID_AGENT_MODIF, $this->id_agent_modif);
        if ($this->isColumnModified(CommonExecRepartitionPeer::DATE_MODIF)) $criteria->add(CommonExecRepartitionPeer::DATE_MODIF, $this->date_modif);

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
        $criteria = new Criteria(CommonExecRepartitionPeer::DATABASE_NAME);
        $criteria->add(CommonExecRepartitionPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecRepartition (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setIdFacture($this->getIdFacture());
        $copyObj->setIdPrix($this->getIdPrix());
        $copyObj->setIdContractant($this->getIdContractant());
        $copyObj->setPrixUnitaire($this->getPrixUnitaire());
        $copyObj->setTauxTva($this->getTauxTva());
        $copyObj->setPourcentageRealise($this->getPourcentageRealise());
        $copyObj->setCumulPourcentRealise($this->getCumulPourcentRealise());
        $copyObj->setMontantFactureHt($this->getMontantFactureHt());
        $copyObj->setMontantFactureTtc($this->getMontantFactureTtc());
        $copyObj->setMontantPayeHt($this->getMontantPayeHt());
        $copyObj->setMontantPayeTtc($this->getMontantPayeTtc());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setIdEntrepriseCrea($this->getIdEntrepriseCrea());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdAgentModif($this->getIdAgentModif());
        $copyObj->setDateModif($this->getDateModif());

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
     * @return CommonExecRepartition Clone of current object.
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
     * @return CommonExecRepartitionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecRepartitionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonExecContractant object.
     *
     * @param   CommonExecContractant $v
     * @return CommonExecRepartition The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecContractant(CommonExecContractant $v = null)
    {
        if ($v === null) {
            $this->setIdContractant(NULL);
        } else {
            $this->setIdContractant($v->getId());
        }

        $this->aCommonExecContractant = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecContractant object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecRepartition($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecContractant object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecContractant The associated CommonExecContractant object.
     * @throws PropelException
     */
    public function getCommonExecContractant(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecContractant === null && ($this->id_contractant !== null) && $doQuery) {
            $this->aCommonExecContractant = CommonExecContractantQuery::create()->findPk($this->id_contractant, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecContractant->addCommonExecRepartitions($this);
             */
        }

        return $this->aCommonExecContractant;
    }

    /**
     * Declares an association between this object and a CommonExecContrat object.
     *
     * @param   CommonExecContrat $v
     * @return CommonExecRepartition The current object (for fluent API support)
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
            $v->addCommonExecRepartition($this);
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
                $this->aCommonExecContrat->addCommonExecRepartitions($this);
             */
        }

        return $this->aCommonExecContrat;
    }

    /**
     * Declares an association between this object and a CommonExecFacture object.
     *
     * @param   CommonExecFacture $v
     * @return CommonExecRepartition The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecFacture(CommonExecFacture $v = null)
    {
        if ($v === null) {
            $this->setIdFacture(NULL);
        } else {
            $this->setIdFacture($v->getId());
        }

        $this->aCommonExecFacture = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecFacture object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecRepartition($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecFacture object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecFacture The associated CommonExecFacture object.
     * @throws PropelException
     */
    public function getCommonExecFacture(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecFacture === null && ($this->id_facture !== null) && $doQuery) {
            $this->aCommonExecFacture = CommonExecFactureQuery::create()->findPk($this->id_facture, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecFacture->addCommonExecRepartitions($this);
             */
        }

        return $this->aCommonExecFacture;
    }

    /**
     * Declares an association between this object and a CommonExecPrix object.
     *
     * @param   CommonExecPrix $v
     * @return CommonExecRepartition The current object (for fluent API support)
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
            $v->addCommonExecRepartition($this);
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
                $this->aCommonExecPrix->addCommonExecRepartitions($this);
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
        $this->id_contrat = null;
        $this->id_facture = null;
        $this->id_prix = null;
        $this->id_contractant = null;
        $this->prix_unitaire = null;
        $this->taux_tva = null;
        $this->pourcentage_realise = null;
        $this->cumul_pourcent_realise = null;
        $this->montant_facture_ht = null;
        $this->montant_facture_ttc = null;
        $this->montant_paye_ht = null;
        $this->montant_paye_ttc = null;
        $this->id_agent_crea = null;
        $this->id_entreprise_crea = null;
        $this->date_crea = null;
        $this->id_agent_modif = null;
        $this->date_modif = null;
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
            if ($this->aCommonExecContractant instanceof Persistent) {
              $this->aCommonExecContractant->clearAllReferences($deep);
            }
            if ($this->aCommonExecContrat instanceof Persistent) {
              $this->aCommonExecContrat->clearAllReferences($deep);
            }
            if ($this->aCommonExecFacture instanceof Persistent) {
              $this->aCommonExecFacture->clearAllReferences($deep);
            }
            if ($this->aCommonExecPrix instanceof Persistent) {
              $this->aCommonExecPrix->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonExecContractant = null;
        $this->aCommonExecContrat = null;
        $this->aCommonExecFacture = null;
        $this->aCommonExecPrix = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecRepartitionPeer::DEFAULT_STRING_FORMAT);
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
