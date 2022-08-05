<?php


/**
 * Base class that represents a row from the 'exec_prix' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecPrix extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecPrixPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecPrixPeer
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
     * The value for the quantite field.
     * @var        double
     */
    protected $quantite;

    /**
     * The value for the quantite_min field.
     * @var        double
     */
    protected $quantite_min;

    /**
     * The value for the quantite_max field.
     * @var        double
     */
    protected $quantite_max;

    /**
     * The value for the prix_unitaire field.
     * @var        double
     */
    protected $prix_unitaire;

    /**
     * The value for the prix_ht field.
     * @var        double
     */
    protected $prix_ht;

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
     * The value for the taux_tva field.
     * @var        double
     */
    protected $taux_tva;

    /**
     * The value for the prix_ttc field.
     * @var        double
     */
    protected $prix_ttc;

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
     * The value for the date_crea field.
     * @var        string
     */
    protected $date_crea;

    /**
     * The value for the id_agent_crea field.
     * @var        int
     */
    protected $id_agent_crea;

    /**
     * The value for the date_modif field.
     * @var        string
     */
    protected $date_modif;

    /**
     * The value for the id_agent_modif field.
     * @var        int
     */
    protected $id_agent_modif;

    /**
     * The value for the num_chapeau field.
     * @var        int
     */
    protected $num_chapeau;

    /**
     * The value for the prix_unitaire_max field.
     * Note: this column has a database default value of: 0.0
     * @var        double
     */
    protected $prix_unitaire_max;

    /**
     * The value for the prestation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $prestation;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgentRelatedByIdAgentCrea;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgentRelatedByIdAgentModif;

    /**
     * @var        CommonExecContrat
     */
    protected $aCommonExecContrat;

    /**
     * @var        PropelObjectCollection|CommonExecHistoriquePrix[] Collection to store aggregation of CommonExecHistoriquePrix objects.
     */
    protected $collCommonExecHistoriquePrixs;
    protected $collCommonExecHistoriquePrixsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPrixAvenant[] Collection to store aggregation of CommonExecPrixAvenant objects.
     */
    protected $collCommonExecPrixAvenants;
    protected $collCommonExecPrixAvenantsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecRepartition[] Collection to store aggregation of CommonExecRepartition objects.
     */
    protected $collCommonExecRepartitions;
    protected $collCommonExecRepartitionsPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecHistoriquePrixsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPrixAvenantsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecRepartitionsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->prix_unitaire_max = 0.0;
        $this->prestation = '0';
    }

    /**
     * Initializes internal state of BaseCommonExecPrix object.
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
     * Get the [quantite] column value.
     * 
     * @return double
     */
    public function getQuantite()
    {

        return $this->quantite;
    }

    /**
     * Get the [quantite_min] column value.
     * 
     * @return double
     */
    public function getQuantiteMin()
    {

        return $this->quantite_min;
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
     * Get the [prix_unitaire] column value.
     * 
     * @return double
     */
    public function getPrixUnitaire()
    {

        return $this->prix_unitaire;
    }

    /**
     * Get the [prix_ht] column value.
     * 
     * @return double
     */
    public function getPrixHt()
    {

        return $this->prix_ht;
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
     * Get the [taux_tva] column value.
     * 
     * @return double
     */
    public function getTauxTva()
    {

        return $this->taux_tva;
    }

    /**
     * Get the [prix_ttc] column value.
     * 
     * @return double
     */
    public function getPrixTtc()
    {

        return $this->prix_ttc;
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
     * Get the [id_agent_crea] column value.
     * 
     * @return int
     */
    public function getIdAgentCrea()
    {

        return $this->id_agent_crea;
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
     * Get the [id_agent_modif] column value.
     * 
     * @return int
     */
    public function getIdAgentModif()
    {

        return $this->id_agent_modif;
    }

    /**
     * Get the [num_chapeau] column value.
     * 
     * @return int
     */
    public function getNumChapeau()
    {

        return $this->num_chapeau;
    }

    /**
     * Get the [prix_unitaire_max] column value.
     * 
     * @return double
     */
    public function getPrixUnitaireMax()
    {

        return $this->prix_unitaire_max;
    }

    /**
     * Get the [prestation] column value.
     * 
     * @return string
     */
    public function getPrestation()
    {

        return $this->prestation;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::ID_CONTRAT;
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
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::INTITULE;
        }


        return $this;
    } // setIntitule()

    /**
     * Set the value of [unite] column.
     * 
     * @param string $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setUnite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->unite !== $v) {
            $this->unite = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::UNITE;
        }


        return $this;
    } // setUnite()

    /**
     * Set the value of [quantite] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setQuantite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->quantite !== $v) {
            $this->quantite = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::QUANTITE;
        }


        return $this;
    } // setQuantite()

    /**
     * Set the value of [quantite_min] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setQuantiteMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->quantite_min !== $v) {
            $this->quantite_min = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::QUANTITE_MIN;
        }


        return $this;
    } // setQuantiteMin()

    /**
     * Set the value of [quantite_max] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setQuantiteMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->quantite_max !== $v) {
            $this->quantite_max = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::QUANTITE_MAX;
        }


        return $this;
    } // setQuantiteMax()

    /**
     * Set the value of [prix_unitaire] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setPrixUnitaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_unitaire !== $v) {
            $this->prix_unitaire = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::PRIX_UNITAIRE;
        }


        return $this;
    } // setPrixUnitaire()

    /**
     * Set the value of [prix_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setPrixHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ht !== $v) {
            $this->prix_ht = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::PRIX_HT;
        }


        return $this;
    } // setPrixHt()

    /**
     * Set the value of [prix_ht_min] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setPrixHtMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ht_min !== $v) {
            $this->prix_ht_min = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::PRIX_HT_MIN;
        }


        return $this;
    } // setPrixHtMin()

    /**
     * Set the value of [prix_ht_max] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setPrixHtMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ht_max !== $v) {
            $this->prix_ht_max = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::PRIX_HT_MAX;
        }


        return $this;
    } // setPrixHtMax()

    /**
     * Set the value of [taux_tva] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setTauxTva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->taux_tva !== $v) {
            $this->taux_tva = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::TAUX_TVA;
        }


        return $this;
    } // setTauxTva()

    /**
     * Set the value of [prix_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setPrixTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ttc !== $v) {
            $this->prix_ttc = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::PRIX_TTC;
        }


        return $this;
    } // setPrixTtc()

    /**
     * Set the value of [prix_ttc_min] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setPrixTtcMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ttc_min !== $v) {
            $this->prix_ttc_min = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::PRIX_TTC_MIN;
        }


        return $this;
    } // setPrixTtcMin()

    /**
     * Set the value of [prix_ttc_max] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setPrixTtcMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_ttc_max !== $v) {
            $this->prix_ttc_max = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::PRIX_TTC_MAX;
        }


        return $this;
    } // setPrixTtcMax()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecPrixPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::ID_AGENT_CREA;
        }

        if ($this->aCommonAgentRelatedByIdAgentCrea !== null && $this->aCommonAgentRelatedByIdAgentCrea->getId() !== $v) {
            $this->aCommonAgentRelatedByIdAgentCrea = null;
        }


        return $this;
    } // setIdAgentCrea()

    /**
     * Sets the value of [date_modif] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = CommonExecPrixPeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

    /**
     * Set the value of [id_agent_modif] column.
     * 
     * @param int $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setIdAgentModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_modif !== $v) {
            $this->id_agent_modif = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::ID_AGENT_MODIF;
        }

        if ($this->aCommonAgentRelatedByIdAgentModif !== null && $this->aCommonAgentRelatedByIdAgentModif->getId() !== $v) {
            $this->aCommonAgentRelatedByIdAgentModif = null;
        }


        return $this;
    } // setIdAgentModif()

    /**
     * Set the value of [num_chapeau] column.
     * 
     * @param int $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setNumChapeau($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->num_chapeau !== $v) {
            $this->num_chapeau = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::NUM_CHAPEAU;
        }


        return $this;
    } // setNumChapeau()

    /**
     * Set the value of [prix_unitaire_max] column.
     * 
     * @param double $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setPrixUnitaireMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->prix_unitaire_max !== $v) {
            $this->prix_unitaire_max = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::PRIX_UNITAIRE_MAX;
        }


        return $this;
    } // setPrixUnitaireMax()

    /**
     * Set the value of [prestation] column.
     * 
     * @param string $v new value
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setPrestation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prestation !== $v) {
            $this->prestation = $v;
            $this->modifiedColumns[] = CommonExecPrixPeer::PRESTATION;
        }


        return $this;
    } // setPrestation()

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
            if ($this->prix_unitaire_max !== 0.0) {
                return false;
            }

            if ($this->prestation !== '0') {
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
            $this->id_contrat = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->numero = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->intitule = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->unite = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->quantite = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->quantite_min = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->quantite_max = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->prix_unitaire = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->prix_ht = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->prix_ht_min = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->prix_ht_max = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->taux_tva = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->prix_ttc = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->prix_ttc_min = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->prix_ttc_max = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->date_crea = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->id_agent_crea = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->date_modif = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->id_agent_modif = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->num_chapeau = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->prix_unitaire_max = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->prestation = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 23; // 23 = CommonExecPrixPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecPrix object", $e);
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
        if ($this->aCommonAgentRelatedByIdAgentCrea !== null && $this->id_agent_crea !== $this->aCommonAgentRelatedByIdAgentCrea->getId()) {
            $this->aCommonAgentRelatedByIdAgentCrea = null;
        }
        if ($this->aCommonAgentRelatedByIdAgentModif !== null && $this->id_agent_modif !== $this->aCommonAgentRelatedByIdAgentModif->getId()) {
            $this->aCommonAgentRelatedByIdAgentModif = null;
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
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecPrixPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonAgentRelatedByIdAgentCrea = null;
            $this->aCommonAgentRelatedByIdAgentModif = null;
            $this->aCommonExecContrat = null;
            $this->collCommonExecHistoriquePrixs = null;

            $this->collCommonExecPrixAvenants = null;

            $this->collCommonExecRepartitions = null;

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
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecPrixQuery::create()
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
            $con = Propel::getConnection(CommonExecPrixPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecPrixPeer::addInstanceToPool($this);
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

            if ($this->aCommonAgentRelatedByIdAgentCrea !== null) {
                if ($this->aCommonAgentRelatedByIdAgentCrea->isModified() || $this->aCommonAgentRelatedByIdAgentCrea->isNew()) {
                    $affectedRows += $this->aCommonAgentRelatedByIdAgentCrea->save($con);
                }
                $this->setCommonAgentRelatedByIdAgentCrea($this->aCommonAgentRelatedByIdAgentCrea);
            }

            if ($this->aCommonAgentRelatedByIdAgentModif !== null) {
                if ($this->aCommonAgentRelatedByIdAgentModif->isModified() || $this->aCommonAgentRelatedByIdAgentModif->isNew()) {
                    $affectedRows += $this->aCommonAgentRelatedByIdAgentModif->save($con);
                }
                $this->setCommonAgentRelatedByIdAgentModif($this->aCommonAgentRelatedByIdAgentModif);
            }

            if ($this->aCommonExecContrat !== null) {
                if ($this->aCommonExecContrat->isModified() || $this->aCommonExecContrat->isNew()) {
                    $affectedRows += $this->aCommonExecContrat->save($con);
                }
                $this->setCommonExecContrat($this->aCommonExecContrat);
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

            if ($this->commonExecHistoriquePrixsScheduledForDeletion !== null) {
                if (!$this->commonExecHistoriquePrixsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecHistoriquePrixsScheduledForDeletion as $commonExecHistoriquePrix) {
                        // need to save related object because we set the relation to null
                        $commonExecHistoriquePrix->save($con);
                    }
                    $this->commonExecHistoriquePrixsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecHistoriquePrixs !== null) {
                foreach ($this->collCommonExecHistoriquePrixs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecPrixAvenantsScheduledForDeletion !== null) {
                if (!$this->commonExecPrixAvenantsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPrixAvenantsScheduledForDeletion as $commonExecPrixAvenant) {
                        // need to save related object because we set the relation to null
                        $commonExecPrixAvenant->save($con);
                    }
                    $this->commonExecPrixAvenantsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPrixAvenants !== null) {
                foreach ($this->collCommonExecPrixAvenants as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecRepartitionsScheduledForDeletion !== null) {
                if (!$this->commonExecRepartitionsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecRepartitionsScheduledForDeletion as $commonExecRepartition) {
                        // need to save related object because we set the relation to null
                        $commonExecRepartition->save($con);
                    }
                    $this->commonExecRepartitionsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecRepartitions !== null) {
                foreach ($this->collCommonExecRepartitions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CommonExecPrixPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecPrixPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecPrixPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`intitule`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::UNITE)) {
            $modifiedColumns[':p' . $index++]  = '`unite`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::QUANTITE)) {
            $modifiedColumns[':p' . $index++]  = '`quantite`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::QUANTITE_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`quantite_min`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::QUANTITE_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`quantite_max`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_UNITAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`prix_unitaire`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_HT)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ht`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_HT_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ht_min`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_HT_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ht_max`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::TAUX_TVA)) {
            $modifiedColumns[':p' . $index++]  = '`taux_tva`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ttc`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_TTC_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ttc_min`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_TTC_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`prix_ttc_max`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`date_modif`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::ID_AGENT_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_modif`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::NUM_CHAPEAU)) {
            $modifiedColumns[':p' . $index++]  = '`num_chapeau`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_UNITAIRE_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`prix_unitaire_max`';
        }
        if ($this->isColumnModified(CommonExecPrixPeer::PRESTATION)) {
            $modifiedColumns[':p' . $index++]  = '`prestation`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_prix` (%s) VALUES (%s)',
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
                    case '`numero`':						
                        $stmt->bindValue($identifier, $this->numero, PDO::PARAM_STR);
                        break;
                    case '`intitule`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
                        break;
                    case '`unite`':						
                        $stmt->bindValue($identifier, $this->unite, PDO::PARAM_STR);
                        break;
                    case '`quantite`':						
                        $stmt->bindValue($identifier, $this->quantite, PDO::PARAM_STR);
                        break;
                    case '`quantite_min`':						
                        $stmt->bindValue($identifier, $this->quantite_min, PDO::PARAM_STR);
                        break;
                    case '`quantite_max`':						
                        $stmt->bindValue($identifier, $this->quantite_max, PDO::PARAM_STR);
                        break;
                    case '`prix_unitaire`':						
                        $stmt->bindValue($identifier, $this->prix_unitaire, PDO::PARAM_STR);
                        break;
                    case '`prix_ht`':						
                        $stmt->bindValue($identifier, $this->prix_ht, PDO::PARAM_STR);
                        break;
                    case '`prix_ht_min`':						
                        $stmt->bindValue($identifier, $this->prix_ht_min, PDO::PARAM_STR);
                        break;
                    case '`prix_ht_max`':						
                        $stmt->bindValue($identifier, $this->prix_ht_max, PDO::PARAM_STR);
                        break;
                    case '`taux_tva`':						
                        $stmt->bindValue($identifier, $this->taux_tva, PDO::PARAM_STR);
                        break;
                    case '`prix_ttc`':						
                        $stmt->bindValue($identifier, $this->prix_ttc, PDO::PARAM_STR);
                        break;
                    case '`prix_ttc_min`':						
                        $stmt->bindValue($identifier, $this->prix_ttc_min, PDO::PARAM_STR);
                        break;
                    case '`prix_ttc_max`':						
                        $stmt->bindValue($identifier, $this->prix_ttc_max, PDO::PARAM_STR);
                        break;
                    case '`date_crea`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`id_agent_crea`':						
                        $stmt->bindValue($identifier, $this->id_agent_crea, PDO::PARAM_INT);
                        break;
                    case '`date_modif`':						
                        $stmt->bindValue($identifier, $this->date_modif, PDO::PARAM_STR);
                        break;
                    case '`id_agent_modif`':						
                        $stmt->bindValue($identifier, $this->id_agent_modif, PDO::PARAM_INT);
                        break;
                    case '`num_chapeau`':						
                        $stmt->bindValue($identifier, $this->num_chapeau, PDO::PARAM_INT);
                        break;
                    case '`prix_unitaire_max`':						
                        $stmt->bindValue($identifier, $this->prix_unitaire_max, PDO::PARAM_STR);
                        break;
                    case '`prestation`':						
                        $stmt->bindValue($identifier, $this->prestation, PDO::PARAM_STR);
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

            if ($this->aCommonAgentRelatedByIdAgentCrea !== null) {
                if (!$this->aCommonAgentRelatedByIdAgentCrea->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentRelatedByIdAgentCrea->getValidationFailures());
                }
            }

            if ($this->aCommonAgentRelatedByIdAgentModif !== null) {
                if (!$this->aCommonAgentRelatedByIdAgentModif->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentRelatedByIdAgentModif->getValidationFailures());
                }
            }

            if ($this->aCommonExecContrat !== null) {
                if (!$this->aCommonExecContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecContrat->getValidationFailures());
                }
            }


            if (($retval = CommonExecPrixPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecHistoriquePrixs !== null) {
                    foreach ($this->collCommonExecHistoriquePrixs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecPrixAvenants !== null) {
                    foreach ($this->collCommonExecPrixAvenants as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecRepartitions !== null) {
                    foreach ($this->collCommonExecRepartitions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = CommonExecPrixPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNumero();
                break;
            case 3:
                return $this->getIntitule();
                break;
            case 4:
                return $this->getUnite();
                break;
            case 5:
                return $this->getQuantite();
                break;
            case 6:
                return $this->getQuantiteMin();
                break;
            case 7:
                return $this->getQuantiteMax();
                break;
            case 8:
                return $this->getPrixUnitaire();
                break;
            case 9:
                return $this->getPrixHt();
                break;
            case 10:
                return $this->getPrixHtMin();
                break;
            case 11:
                return $this->getPrixHtMax();
                break;
            case 12:
                return $this->getTauxTva();
                break;
            case 13:
                return $this->getPrixTtc();
                break;
            case 14:
                return $this->getPrixTtcMin();
                break;
            case 15:
                return $this->getPrixTtcMax();
                break;
            case 16:
                return $this->getDateCrea();
                break;
            case 17:
                return $this->getIdAgentCrea();
                break;
            case 18:
                return $this->getDateModif();
                break;
            case 19:
                return $this->getIdAgentModif();
                break;
            case 20:
                return $this->getNumChapeau();
                break;
            case 21:
                return $this->getPrixUnitaireMax();
                break;
            case 22:
                return $this->getPrestation();
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
        if (isset($alreadyDumpedObjects['CommonExecPrix'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecPrix'][$this->getPrimaryKey()] = true;
        $keys = CommonExecPrixPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdContrat(),
            $keys[2] => $this->getNumero(),
            $keys[3] => $this->getIntitule(),
            $keys[4] => $this->getUnite(),
            $keys[5] => $this->getQuantite(),
            $keys[6] => $this->getQuantiteMin(),
            $keys[7] => $this->getQuantiteMax(),
            $keys[8] => $this->getPrixUnitaire(),
            $keys[9] => $this->getPrixHt(),
            $keys[10] => $this->getPrixHtMin(),
            $keys[11] => $this->getPrixHtMax(),
            $keys[12] => $this->getTauxTva(),
            $keys[13] => $this->getPrixTtc(),
            $keys[14] => $this->getPrixTtcMin(),
            $keys[15] => $this->getPrixTtcMax(),
            $keys[16] => $this->getDateCrea(),
            $keys[17] => $this->getIdAgentCrea(),
            $keys[18] => $this->getDateModif(),
            $keys[19] => $this->getIdAgentModif(),
            $keys[20] => $this->getNumChapeau(),
            $keys[21] => $this->getPrixUnitaireMax(),
            $keys[22] => $this->getPrestation(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonAgentRelatedByIdAgentCrea) {
                $result['CommonAgentRelatedByIdAgentCrea'] = $this->aCommonAgentRelatedByIdAgentCrea->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonAgentRelatedByIdAgentModif) {
                $result['CommonAgentRelatedByIdAgentModif'] = $this->aCommonAgentRelatedByIdAgentModif->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecContrat) {
                $result['CommonExecContrat'] = $this->aCommonExecContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonExecHistoriquePrixs) {
                $result['CommonExecHistoriquePrixs'] = $this->collCommonExecHistoriquePrixs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPrixAvenants) {
                $result['CommonExecPrixAvenants'] = $this->collCommonExecPrixAvenants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecRepartitions) {
                $result['CommonExecRepartitions'] = $this->collCommonExecRepartitions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecPrixPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNumero($value);
                break;
            case 3:
                $this->setIntitule($value);
                break;
            case 4:
                $this->setUnite($value);
                break;
            case 5:
                $this->setQuantite($value);
                break;
            case 6:
                $this->setQuantiteMin($value);
                break;
            case 7:
                $this->setQuantiteMax($value);
                break;
            case 8:
                $this->setPrixUnitaire($value);
                break;
            case 9:
                $this->setPrixHt($value);
                break;
            case 10:
                $this->setPrixHtMin($value);
                break;
            case 11:
                $this->setPrixHtMax($value);
                break;
            case 12:
                $this->setTauxTva($value);
                break;
            case 13:
                $this->setPrixTtc($value);
                break;
            case 14:
                $this->setPrixTtcMin($value);
                break;
            case 15:
                $this->setPrixTtcMax($value);
                break;
            case 16:
                $this->setDateCrea($value);
                break;
            case 17:
                $this->setIdAgentCrea($value);
                break;
            case 18:
                $this->setDateModif($value);
                break;
            case 19:
                $this->setIdAgentModif($value);
                break;
            case 20:
                $this->setNumChapeau($value);
                break;
            case 21:
                $this->setPrixUnitaireMax($value);
                break;
            case 22:
                $this->setPrestation($value);
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
        $keys = CommonExecPrixPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdContrat($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNumero($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIntitule($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUnite($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setQuantite($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setQuantiteMin($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setQuantiteMax($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPrixUnitaire($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPrixHt($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPrixHtMin($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPrixHtMax($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTauxTva($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPrixTtc($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPrixTtcMin($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPrixTtcMax($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDateCrea($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setIdAgentCrea($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDateModif($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setIdAgentModif($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setNumChapeau($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPrixUnitaireMax($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setPrestation($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecPrixPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecPrixPeer::ID)) $criteria->add(CommonExecPrixPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecPrixPeer::ID_CONTRAT)) $criteria->add(CommonExecPrixPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecPrixPeer::NUMERO)) $criteria->add(CommonExecPrixPeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CommonExecPrixPeer::INTITULE)) $criteria->add(CommonExecPrixPeer::INTITULE, $this->intitule);
        if ($this->isColumnModified(CommonExecPrixPeer::UNITE)) $criteria->add(CommonExecPrixPeer::UNITE, $this->unite);
        if ($this->isColumnModified(CommonExecPrixPeer::QUANTITE)) $criteria->add(CommonExecPrixPeer::QUANTITE, $this->quantite);
        if ($this->isColumnModified(CommonExecPrixPeer::QUANTITE_MIN)) $criteria->add(CommonExecPrixPeer::QUANTITE_MIN, $this->quantite_min);
        if ($this->isColumnModified(CommonExecPrixPeer::QUANTITE_MAX)) $criteria->add(CommonExecPrixPeer::QUANTITE_MAX, $this->quantite_max);
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_UNITAIRE)) $criteria->add(CommonExecPrixPeer::PRIX_UNITAIRE, $this->prix_unitaire);
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_HT)) $criteria->add(CommonExecPrixPeer::PRIX_HT, $this->prix_ht);
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_HT_MIN)) $criteria->add(CommonExecPrixPeer::PRIX_HT_MIN, $this->prix_ht_min);
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_HT_MAX)) $criteria->add(CommonExecPrixPeer::PRIX_HT_MAX, $this->prix_ht_max);
        if ($this->isColumnModified(CommonExecPrixPeer::TAUX_TVA)) $criteria->add(CommonExecPrixPeer::TAUX_TVA, $this->taux_tva);
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_TTC)) $criteria->add(CommonExecPrixPeer::PRIX_TTC, $this->prix_ttc);
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_TTC_MIN)) $criteria->add(CommonExecPrixPeer::PRIX_TTC_MIN, $this->prix_ttc_min);
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_TTC_MAX)) $criteria->add(CommonExecPrixPeer::PRIX_TTC_MAX, $this->prix_ttc_max);
        if ($this->isColumnModified(CommonExecPrixPeer::DATE_CREA)) $criteria->add(CommonExecPrixPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecPrixPeer::ID_AGENT_CREA)) $criteria->add(CommonExecPrixPeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecPrixPeer::DATE_MODIF)) $criteria->add(CommonExecPrixPeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(CommonExecPrixPeer::ID_AGENT_MODIF)) $criteria->add(CommonExecPrixPeer::ID_AGENT_MODIF, $this->id_agent_modif);
        if ($this->isColumnModified(CommonExecPrixPeer::NUM_CHAPEAU)) $criteria->add(CommonExecPrixPeer::NUM_CHAPEAU, $this->num_chapeau);
        if ($this->isColumnModified(CommonExecPrixPeer::PRIX_UNITAIRE_MAX)) $criteria->add(CommonExecPrixPeer::PRIX_UNITAIRE_MAX, $this->prix_unitaire_max);
        if ($this->isColumnModified(CommonExecPrixPeer::PRESTATION)) $criteria->add(CommonExecPrixPeer::PRESTATION, $this->prestation);

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
        $criteria = new Criteria(CommonExecPrixPeer::DATABASE_NAME);
        $criteria->add(CommonExecPrixPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecPrix (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setNumero($this->getNumero());
        $copyObj->setIntitule($this->getIntitule());
        $copyObj->setUnite($this->getUnite());
        $copyObj->setQuantite($this->getQuantite());
        $copyObj->setQuantiteMin($this->getQuantiteMin());
        $copyObj->setQuantiteMax($this->getQuantiteMax());
        $copyObj->setPrixUnitaire($this->getPrixUnitaire());
        $copyObj->setPrixHt($this->getPrixHt());
        $copyObj->setPrixHtMin($this->getPrixHtMin());
        $copyObj->setPrixHtMax($this->getPrixHtMax());
        $copyObj->setTauxTva($this->getTauxTva());
        $copyObj->setPrixTtc($this->getPrixTtc());
        $copyObj->setPrixTtcMin($this->getPrixTtcMin());
        $copyObj->setPrixTtcMax($this->getPrixTtcMax());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setDateModif($this->getDateModif());
        $copyObj->setIdAgentModif($this->getIdAgentModif());
        $copyObj->setNumChapeau($this->getNumChapeau());
        $copyObj->setPrixUnitaireMax($this->getPrixUnitaireMax());
        $copyObj->setPrestation($this->getPrestation());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonExecHistoriquePrixs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecHistoriquePrix($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPrixAvenants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPrixAvenant($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecRepartitions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecRepartition($relObj->copy($deepCopy));
                }
            }

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
     * @return CommonExecPrix Clone of current object.
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
     * @return CommonExecPrixPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecPrixPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecPrix The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgentRelatedByIdAgentCrea(CommonAgent $v = null)
    {
        if ($v === null) {
            $this->setIdAgentCrea(NULL);
        } else {
            $this->setIdAgentCrea($v->getId());
        }

        $this->aCommonAgentRelatedByIdAgentCrea = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgent object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecPrixRelatedByIdAgentCrea($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonAgent object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonAgent The associated CommonAgent object.
     * @throws PropelException
     */
    public function getCommonAgentRelatedByIdAgentCrea(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgentRelatedByIdAgentCrea === null && ($this->id_agent_crea !== null) && $doQuery) {
            $this->aCommonAgentRelatedByIdAgentCrea = CommonAgentQuery::create()->findPk($this->id_agent_crea, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgentRelatedByIdAgentCrea->addCommonExecPrixsRelatedByIdAgentCrea($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentCrea;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecPrix The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgentRelatedByIdAgentModif(CommonAgent $v = null)
    {
        if ($v === null) {
            $this->setIdAgentModif(NULL);
        } else {
            $this->setIdAgentModif($v->getId());
        }

        $this->aCommonAgentRelatedByIdAgentModif = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgent object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecPrixRelatedByIdAgentModif($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonAgent object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonAgent The associated CommonAgent object.
     * @throws PropelException
     */
    public function getCommonAgentRelatedByIdAgentModif(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgentRelatedByIdAgentModif === null && ($this->id_agent_modif !== null) && $doQuery) {
            $this->aCommonAgentRelatedByIdAgentModif = CommonAgentQuery::create()->findPk($this->id_agent_modif, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgentRelatedByIdAgentModif->addCommonExecPrixsRelatedByIdAgentModif($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentModif;
    }

    /**
     * Declares an association between this object and a CommonExecContrat object.
     *
     * @param   CommonExecContrat $v
     * @return CommonExecPrix The current object (for fluent API support)
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
            $v->addCommonExecPrix($this);
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
                $this->aCommonExecContrat->addCommonExecPrixs($this);
             */
        }

        return $this->aCommonExecContrat;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CommonExecHistoriquePrix' == $relationName) {
            $this->initCommonExecHistoriquePrixs();
        }
        if ('CommonExecPrixAvenant' == $relationName) {
            $this->initCommonExecPrixAvenants();
        }
        if ('CommonExecRepartition' == $relationName) {
            $this->initCommonExecRepartitions();
        }
    }

    /**
     * Clears out the collCommonExecHistoriquePrixs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecPrix The current object (for fluent API support)
     * @see        addCommonExecHistoriquePrixs()
     */
    public function clearCommonExecHistoriquePrixs()
    {
        $this->collCommonExecHistoriquePrixs = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecHistoriquePrixsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecHistoriquePrixs collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecHistoriquePrixs($v = true)
    {
        $this->collCommonExecHistoriquePrixsPartial = $v;
    }

    /**
     * Initializes the collCommonExecHistoriquePrixs collection.
     *
     * By default this just sets the collCommonExecHistoriquePrixs collection to an empty array (like clearcollCommonExecHistoriquePrixs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecHistoriquePrixs($overrideExisting = true)
    {
        if (null !== $this->collCommonExecHistoriquePrixs && !$overrideExisting) {
            return;
        }
        $this->collCommonExecHistoriquePrixs = new PropelObjectCollection();
        $this->collCommonExecHistoriquePrixs->setModel('CommonExecHistoriquePrix');
    }

    /**
     * Gets an array of CommonExecHistoriquePrix objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecPrix is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     * @throws PropelException
     */
    public function getCommonExecHistoriquePrixs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecHistoriquePrixsPartial && !$this->isNew();
        if (null === $this->collCommonExecHistoriquePrixs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecHistoriquePrixs) {
                // return empty collection
                $this->initCommonExecHistoriquePrixs();
            } else {
                $collCommonExecHistoriquePrixs = CommonExecHistoriquePrixQuery::create(null, $criteria)
                    ->filterByCommonExecPrix($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecHistoriquePrixsPartial && count($collCommonExecHistoriquePrixs)) {
                      $this->initCommonExecHistoriquePrixs(false);

                      foreach ($collCommonExecHistoriquePrixs as $obj) {
                        if (false == $this->collCommonExecHistoriquePrixs->contains($obj)) {
                          $this->collCommonExecHistoriquePrixs->append($obj);
                        }
                      }

                      $this->collCommonExecHistoriquePrixsPartial = true;
                    }

                    $collCommonExecHistoriquePrixs->getInternalIterator()->rewind();

                    return $collCommonExecHistoriquePrixs;
                }

                if ($partial && $this->collCommonExecHistoriquePrixs) {
                    foreach ($this->collCommonExecHistoriquePrixs as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecHistoriquePrixs[] = $obj;
                        }
                    }
                }

                $this->collCommonExecHistoriquePrixs = $collCommonExecHistoriquePrixs;
                $this->collCommonExecHistoriquePrixsPartial = false;
            }
        }

        return $this->collCommonExecHistoriquePrixs;
    }

    /**
     * Sets a collection of CommonExecHistoriquePrix objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecHistoriquePrixs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setCommonExecHistoriquePrixs(PropelCollection $commonExecHistoriquePrixs, PropelPDO $con = null)
    {
        $commonExecHistoriquePrixsToDelete = $this->getCommonExecHistoriquePrixs(new Criteria(), $con)->diff($commonExecHistoriquePrixs);


        $this->commonExecHistoriquePrixsScheduledForDeletion = $commonExecHistoriquePrixsToDelete;

        foreach ($commonExecHistoriquePrixsToDelete as $commonExecHistoriquePrixRemoved) {
            $commonExecHistoriquePrixRemoved->setCommonExecPrix(null);
        }

        $this->collCommonExecHistoriquePrixs = null;
        foreach ($commonExecHistoriquePrixs as $commonExecHistoriquePrix) {
            $this->addCommonExecHistoriquePrix($commonExecHistoriquePrix);
        }

        $this->collCommonExecHistoriquePrixs = $commonExecHistoriquePrixs;
        $this->collCommonExecHistoriquePrixsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecHistoriquePrix objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecHistoriquePrix objects.
     * @throws PropelException
     */
    public function countCommonExecHistoriquePrixs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecHistoriquePrixsPartial && !$this->isNew();
        if (null === $this->collCommonExecHistoriquePrixs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecHistoriquePrixs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecHistoriquePrixs());
            }
            $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecPrix($this)
                ->count($con);
        }

        return count($this->collCommonExecHistoriquePrixs);
    }

    /**
     * Method called to associate a CommonExecHistoriquePrix object to this object
     * through the CommonExecHistoriquePrix foreign key attribute.
     *
     * @param   CommonExecHistoriquePrix $l CommonExecHistoriquePrix
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function addCommonExecHistoriquePrix(CommonExecHistoriquePrix $l)
    {
        if ($this->collCommonExecHistoriquePrixs === null) {
            $this->initCommonExecHistoriquePrixs();
            $this->collCommonExecHistoriquePrixsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecHistoriquePrixs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecHistoriquePrix($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecHistoriquePrix $commonExecHistoriquePrix The commonExecHistoriquePrix object to add.
     */
    protected function doAddCommonExecHistoriquePrix($commonExecHistoriquePrix)
    {
        $this->collCommonExecHistoriquePrixs[]= $commonExecHistoriquePrix;
        $commonExecHistoriquePrix->setCommonExecPrix($this);
    }

    /**
     * @param	CommonExecHistoriquePrix $commonExecHistoriquePrix The commonExecHistoriquePrix object to remove.
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function removeCommonExecHistoriquePrix($commonExecHistoriquePrix)
    {
        if ($this->getCommonExecHistoriquePrixs()->contains($commonExecHistoriquePrix)) {
            $this->collCommonExecHistoriquePrixs->remove($this->collCommonExecHistoriquePrixs->search($commonExecHistoriquePrix));
            if (null === $this->commonExecHistoriquePrixsScheduledForDeletion) {
                $this->commonExecHistoriquePrixsScheduledForDeletion = clone $this->collCommonExecHistoriquePrixs;
                $this->commonExecHistoriquePrixsScheduledForDeletion->clear();
            }
            $this->commonExecHistoriquePrixsScheduledForDeletion[]= clone $commonExecHistoriquePrix;
            $commonExecHistoriquePrix->setCommonExecPrix(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsJoinCommonAgentRelatedByIdAgentCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentCrea', $join_behavior);

        return $this->getCommonExecHistoriquePrixs($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsJoinCommonAgentRelatedByIdAgentModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentModif', $join_behavior);

        return $this->getCommonExecHistoriquePrixs($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsJoinCommonExecAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecAvenant', $join_behavior);

        return $this->getCommonExecHistoriquePrixs($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecHistoriquePrixs($query, $con);
    }

    /**
     * Clears out the collCommonExecPrixAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecPrix The current object (for fluent API support)
     * @see        addCommonExecPrixAvenants()
     */
    public function clearCommonExecPrixAvenants()
    {
        $this->collCommonExecPrixAvenants = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPrixAvenantsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPrixAvenants collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPrixAvenants($v = true)
    {
        $this->collCommonExecPrixAvenantsPartial = $v;
    }

    /**
     * Initializes the collCommonExecPrixAvenants collection.
     *
     * By default this just sets the collCommonExecPrixAvenants collection to an empty array (like clearcollCommonExecPrixAvenants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPrixAvenants($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPrixAvenants && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPrixAvenants = new PropelObjectCollection();
        $this->collCommonExecPrixAvenants->setModel('CommonExecPrixAvenant');
    }

    /**
     * Gets an array of CommonExecPrixAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecPrix is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPrixAvenant[] List of CommonExecPrixAvenant objects
     * @throws PropelException
     */
    public function getCommonExecPrixAvenants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPrixAvenantsPartial && !$this->isNew();
        if (null === $this->collCommonExecPrixAvenants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPrixAvenants) {
                // return empty collection
                $this->initCommonExecPrixAvenants();
            } else {
                $collCommonExecPrixAvenants = CommonExecPrixAvenantQuery::create(null, $criteria)
                    ->filterByCommonExecPrix($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPrixAvenantsPartial && count($collCommonExecPrixAvenants)) {
                      $this->initCommonExecPrixAvenants(false);

                      foreach ($collCommonExecPrixAvenants as $obj) {
                        if (false == $this->collCommonExecPrixAvenants->contains($obj)) {
                          $this->collCommonExecPrixAvenants->append($obj);
                        }
                      }

                      $this->collCommonExecPrixAvenantsPartial = true;
                    }

                    $collCommonExecPrixAvenants->getInternalIterator()->rewind();

                    return $collCommonExecPrixAvenants;
                }

                if ($partial && $this->collCommonExecPrixAvenants) {
                    foreach ($this->collCommonExecPrixAvenants as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPrixAvenants[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPrixAvenants = $collCommonExecPrixAvenants;
                $this->collCommonExecPrixAvenantsPartial = false;
            }
        }

        return $this->collCommonExecPrixAvenants;
    }

    /**
     * Sets a collection of CommonExecPrixAvenant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPrixAvenants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setCommonExecPrixAvenants(PropelCollection $commonExecPrixAvenants, PropelPDO $con = null)
    {
        $commonExecPrixAvenantsToDelete = $this->getCommonExecPrixAvenants(new Criteria(), $con)->diff($commonExecPrixAvenants);


        $this->commonExecPrixAvenantsScheduledForDeletion = $commonExecPrixAvenantsToDelete;

        foreach ($commonExecPrixAvenantsToDelete as $commonExecPrixAvenantRemoved) {
            $commonExecPrixAvenantRemoved->setCommonExecPrix(null);
        }

        $this->collCommonExecPrixAvenants = null;
        foreach ($commonExecPrixAvenants as $commonExecPrixAvenant) {
            $this->addCommonExecPrixAvenant($commonExecPrixAvenant);
        }

        $this->collCommonExecPrixAvenants = $commonExecPrixAvenants;
        $this->collCommonExecPrixAvenantsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPrixAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPrixAvenant objects.
     * @throws PropelException
     */
    public function countCommonExecPrixAvenants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPrixAvenantsPartial && !$this->isNew();
        if (null === $this->collCommonExecPrixAvenants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPrixAvenants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPrixAvenants());
            }
            $query = CommonExecPrixAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecPrix($this)
                ->count($con);
        }

        return count($this->collCommonExecPrixAvenants);
    }

    /**
     * Method called to associate a CommonExecPrixAvenant object to this object
     * through the CommonExecPrixAvenant foreign key attribute.
     *
     * @param   CommonExecPrixAvenant $l CommonExecPrixAvenant
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function addCommonExecPrixAvenant(CommonExecPrixAvenant $l)
    {
        if ($this->collCommonExecPrixAvenants === null) {
            $this->initCommonExecPrixAvenants();
            $this->collCommonExecPrixAvenantsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPrixAvenants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPrixAvenant($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPrixAvenant $commonExecPrixAvenant The commonExecPrixAvenant object to add.
     */
    protected function doAddCommonExecPrixAvenant($commonExecPrixAvenant)
    {
        $this->collCommonExecPrixAvenants[]= $commonExecPrixAvenant;
        $commonExecPrixAvenant->setCommonExecPrix($this);
    }

    /**
     * @param	CommonExecPrixAvenant $commonExecPrixAvenant The commonExecPrixAvenant object to remove.
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function removeCommonExecPrixAvenant($commonExecPrixAvenant)
    {
        if ($this->getCommonExecPrixAvenants()->contains($commonExecPrixAvenant)) {
            $this->collCommonExecPrixAvenants->remove($this->collCommonExecPrixAvenants->search($commonExecPrixAvenant));
            if (null === $this->commonExecPrixAvenantsScheduledForDeletion) {
                $this->commonExecPrixAvenantsScheduledForDeletion = clone $this->collCommonExecPrixAvenants;
                $this->commonExecPrixAvenantsScheduledForDeletion->clear();
            }
            $this->commonExecPrixAvenantsScheduledForDeletion[]= $commonExecPrixAvenant;
            $commonExecPrixAvenant->setCommonExecPrix(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecPrixAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPrixAvenant[] List of CommonExecPrixAvenant objects
     */
    public function getCommonExecPrixAvenantsJoinCommonExecAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPrixAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecAvenant', $join_behavior);

        return $this->getCommonExecPrixAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecPrixAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPrixAvenant[] List of CommonExecPrixAvenant objects
     */
    public function getCommonExecPrixAvenantsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPrixAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPrixAvenants($query, $con);
    }

    /**
     * Clears out the collCommonExecRepartitions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecPrix The current object (for fluent API support)
     * @see        addCommonExecRepartitions()
     */
    public function clearCommonExecRepartitions()
    {
        $this->collCommonExecRepartitions = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecRepartitionsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecRepartitions collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecRepartitions($v = true)
    {
        $this->collCommonExecRepartitionsPartial = $v;
    }

    /**
     * Initializes the collCommonExecRepartitions collection.
     *
     * By default this just sets the collCommonExecRepartitions collection to an empty array (like clearcollCommonExecRepartitions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecRepartitions($overrideExisting = true)
    {
        if (null !== $this->collCommonExecRepartitions && !$overrideExisting) {
            return;
        }
        $this->collCommonExecRepartitions = new PropelObjectCollection();
        $this->collCommonExecRepartitions->setModel('CommonExecRepartition');
    }

    /**
     * Gets an array of CommonExecRepartition objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecPrix is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     * @throws PropelException
     */
    public function getCommonExecRepartitions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecRepartitionsPartial && !$this->isNew();
        if (null === $this->collCommonExecRepartitions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecRepartitions) {
                // return empty collection
                $this->initCommonExecRepartitions();
            } else {
                $collCommonExecRepartitions = CommonExecRepartitionQuery::create(null, $criteria)
                    ->filterByCommonExecPrix($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecRepartitionsPartial && count($collCommonExecRepartitions)) {
                      $this->initCommonExecRepartitions(false);

                      foreach ($collCommonExecRepartitions as $obj) {
                        if (false == $this->collCommonExecRepartitions->contains($obj)) {
                          $this->collCommonExecRepartitions->append($obj);
                        }
                      }

                      $this->collCommonExecRepartitionsPartial = true;
                    }

                    $collCommonExecRepartitions->getInternalIterator()->rewind();

                    return $collCommonExecRepartitions;
                }

                if ($partial && $this->collCommonExecRepartitions) {
                    foreach ($this->collCommonExecRepartitions as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecRepartitions[] = $obj;
                        }
                    }
                }

                $this->collCommonExecRepartitions = $collCommonExecRepartitions;
                $this->collCommonExecRepartitionsPartial = false;
            }
        }

        return $this->collCommonExecRepartitions;
    }

    /**
     * Sets a collection of CommonExecRepartition objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecRepartitions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function setCommonExecRepartitions(PropelCollection $commonExecRepartitions, PropelPDO $con = null)
    {
        $commonExecRepartitionsToDelete = $this->getCommonExecRepartitions(new Criteria(), $con)->diff($commonExecRepartitions);


        $this->commonExecRepartitionsScheduledForDeletion = $commonExecRepartitionsToDelete;

        foreach ($commonExecRepartitionsToDelete as $commonExecRepartitionRemoved) {
            $commonExecRepartitionRemoved->setCommonExecPrix(null);
        }

        $this->collCommonExecRepartitions = null;
        foreach ($commonExecRepartitions as $commonExecRepartition) {
            $this->addCommonExecRepartition($commonExecRepartition);
        }

        $this->collCommonExecRepartitions = $commonExecRepartitions;
        $this->collCommonExecRepartitionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecRepartition objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecRepartition objects.
     * @throws PropelException
     */
    public function countCommonExecRepartitions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecRepartitionsPartial && !$this->isNew();
        if (null === $this->collCommonExecRepartitions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecRepartitions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecRepartitions());
            }
            $query = CommonExecRepartitionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecPrix($this)
                ->count($con);
        }

        return count($this->collCommonExecRepartitions);
    }

    /**
     * Method called to associate a CommonExecRepartition object to this object
     * through the CommonExecRepartition foreign key attribute.
     *
     * @param   CommonExecRepartition $l CommonExecRepartition
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function addCommonExecRepartition(CommonExecRepartition $l)
    {
        if ($this->collCommonExecRepartitions === null) {
            $this->initCommonExecRepartitions();
            $this->collCommonExecRepartitionsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecRepartitions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecRepartition($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecRepartition $commonExecRepartition The commonExecRepartition object to add.
     */
    protected function doAddCommonExecRepartition($commonExecRepartition)
    {
        $this->collCommonExecRepartitions[]= $commonExecRepartition;
        $commonExecRepartition->setCommonExecPrix($this);
    }

    /**
     * @param	CommonExecRepartition $commonExecRepartition The commonExecRepartition object to remove.
     * @return CommonExecPrix The current object (for fluent API support)
     */
    public function removeCommonExecRepartition($commonExecRepartition)
    {
        if ($this->getCommonExecRepartitions()->contains($commonExecRepartition)) {
            $this->collCommonExecRepartitions->remove($this->collCommonExecRepartitions->search($commonExecRepartition));
            if (null === $this->commonExecRepartitionsScheduledForDeletion) {
                $this->commonExecRepartitionsScheduledForDeletion = clone $this->collCommonExecRepartitions;
                $this->commonExecRepartitionsScheduledForDeletion->clear();
            }
            $this->commonExecRepartitionsScheduledForDeletion[]= clone $commonExecRepartition;
            $commonExecRepartition->setCommonExecPrix(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsJoinCommonAgentRelatedByIdAgentCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentCrea', $join_behavior);

        return $this->getCommonExecRepartitions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsJoinCommonAgentRelatedByIdAgentModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentModif', $join_behavior);

        return $this->getCommonExecRepartitions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecRepartitions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecRepartitions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsJoinCommonEntreprise($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonEntreprise', $join_behavior);

        return $this->getCommonExecRepartitions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPrix is new, it will return
     * an empty collection; or if this CommonExecPrix has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPrix.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsJoinCommonExecFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecFacture', $join_behavior);

        return $this->getCommonExecRepartitions($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_contrat = null;
        $this->numero = null;
        $this->intitule = null;
        $this->unite = null;
        $this->quantite = null;
        $this->quantite_min = null;
        $this->quantite_max = null;
        $this->prix_unitaire = null;
        $this->prix_ht = null;
        $this->prix_ht_min = null;
        $this->prix_ht_max = null;
        $this->taux_tva = null;
        $this->prix_ttc = null;
        $this->prix_ttc_min = null;
        $this->prix_ttc_max = null;
        $this->date_crea = null;
        $this->id_agent_crea = null;
        $this->date_modif = null;
        $this->id_agent_modif = null;
        $this->num_chapeau = null;
        $this->prix_unitaire_max = null;
        $this->prestation = null;
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
            if ($this->collCommonExecHistoriquePrixs) {
                foreach ($this->collCommonExecHistoriquePrixs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPrixAvenants) {
                foreach ($this->collCommonExecPrixAvenants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecRepartitions) {
                foreach ($this->collCommonExecRepartitions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonAgentRelatedByIdAgentCrea instanceof Persistent) {
              $this->aCommonAgentRelatedByIdAgentCrea->clearAllReferences($deep);
            }
            if ($this->aCommonAgentRelatedByIdAgentModif instanceof Persistent) {
              $this->aCommonAgentRelatedByIdAgentModif->clearAllReferences($deep);
            }
            if ($this->aCommonExecContrat instanceof Persistent) {
              $this->aCommonExecContrat->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecHistoriquePrixs instanceof PropelCollection) {
            $this->collCommonExecHistoriquePrixs->clearIterator();
        }
        $this->collCommonExecHistoriquePrixs = null;
        if ($this->collCommonExecPrixAvenants instanceof PropelCollection) {
            $this->collCommonExecPrixAvenants->clearIterator();
        }
        $this->collCommonExecPrixAvenants = null;
        if ($this->collCommonExecRepartitions instanceof PropelCollection) {
            $this->collCommonExecRepartitions->clearIterator();
        }
        $this->collCommonExecRepartitions = null;
        $this->aCommonAgentRelatedByIdAgentCrea = null;
        $this->aCommonAgentRelatedByIdAgentModif = null;
        $this->aCommonExecContrat = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecPrixPeer::DEFAULT_STRING_FORMAT);
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
