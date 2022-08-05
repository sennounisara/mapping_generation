<?php


/**
 * Base class that represents a row from the 'exec_avenant' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecAvenant extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecAvenantPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecAvenantPeer
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
     * The value for the id_type_avenant field.
     * @var        int
     */
    protected $id_type_avenant;

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
     * The value for the date_notification field.
     * @var        string
     */
    protected $date_notification;

    /**
     * The value for the incidence_financiere field.
     * @var        int
     */
    protected $incidence_financiere;

    /**
     * The value for the positif field.
     * @var        int
     */
    protected $positif;

    /**
     * The value for the montant_ecart_ht field.
     * @var        double
     */
    protected $montant_ecart_ht;

    /**
     * The value for the montant_ecart_ttc field.
     * @var        double
     */
    protected $montant_ecart_ttc;

    /**
     * The value for the pourcentage_ecart field.
     * @var        double
     */
    protected $pourcentage_ecart;

    /**
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the date_validation field.
     * @var        string
     */
    protected $date_validation;

    /**
     * The value for the id_agent_validation field.
     * @var        int
     */
    protected $id_agent_validation;

    /**
     * The value for the date_rejet field.
     * @var        string
     */
    protected $date_rejet;

    /**
     * The value for the id_agent_rejet field.
     * @var        int
     */
    protected $id_agent_rejet;

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
     * The value for the id_parapheur field.
     * @var        int
     */
    protected $id_parapheur;

    /**
     * The value for the date_cloture_parapheur field.
     * @var        string
     */
    protected $date_cloture_parapheur;

    /**
     * The value for the motif_rejet field.
     * @var        string
     */
    protected $motif_rejet;

    /**
     * The value for the date_derniere_synchronisation field.
     * @var        string
     */
    protected $date_derniere_synchronisation;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgentRelatedByIdAgentCrea;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgentRelatedByIdAgentModif;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgentRelatedByIdAgentRejet;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgentRelatedByIdAgentValidation;

    /**
     * @var        CommonExecContrat
     */
    protected $aCommonExecContrat;

    /**
     * @var        CommonExecTypeAvenant
     */
    protected $aCommonExecTypeAvenant;

    /**
     * @var        PropelObjectCollection|CommonExecHistoriquePrix[] Collection to store aggregation of CommonExecHistoriquePrix objects.
     */
    protected $collCommonExecHistoriquePrixs;
    protected $collCommonExecHistoriquePrixsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPieceAvenant[] Collection to store aggregation of CommonExecPieceAvenant objects.
     */
    protected $collCommonExecPieceAvenants;
    protected $collCommonExecPieceAvenantsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPrixAvenant[] Collection to store aggregation of CommonExecPrixAvenant objects.
     */
    protected $collCommonExecPrixAvenants;
    protected $collCommonExecPrixAvenantsPartial;

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
    protected $commonExecPieceAvenantsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPrixAvenantsScheduledForDeletion = null;

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
     * Get the [id_type_avenant] column value.
     * 
     * @return int
     */
    public function getIdTypeAvenant()
    {

        return $this->id_type_avenant;
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
     * Get the [optionally formatted] temporal [date_notification] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateNotification($format = 'Y-m-d H:i:s')
    {
        if ($this->date_notification === null) {
            return null;
        }

        if ($this->date_notification === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_notification);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_notification, true), $x);
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
     * Get the [incidence_financiere] column value.
     * 
     * @return int
     */
    public function getIncidenceFinanciere()
    {

        return $this->incidence_financiere;
    }

    /**
     * Get the [positif] column value.
     * 
     * @return int
     */
    public function getPositif()
    {

        return $this->positif;
    }

    /**
     * Get the [montant_ecart_ht] column value.
     * 
     * @return double
     */
    public function getMontantEcartHt()
    {

        return $this->montant_ecart_ht;
    }

    /**
     * Get the [montant_ecart_ttc] column value.
     * 
     * @return double
     */
    public function getMontantEcartTtc()
    {

        return $this->montant_ecart_ttc;
    }

    /**
     * Get the [pourcentage_ecart] column value.
     * 
     * @return double
     */
    public function getPourcentageEcart()
    {

        return $this->pourcentage_ecart;
    }

    /**
     * Get the [statut] column value.
     * 
     * @return int
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Get the [optionally formatted] temporal [date_validation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateValidation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_validation === null) {
            return null;
        }

        if ($this->date_validation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_validation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_validation, true), $x);
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
     * Get the [id_agent_validation] column value.
     * 
     * @return int
     */
    public function getIdAgentValidation()
    {

        return $this->id_agent_validation;
    }

    /**
     * Get the [optionally formatted] temporal [date_rejet] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateRejet($format = 'Y-m-d H:i:s')
    {
        if ($this->date_rejet === null) {
            return null;
        }

        if ($this->date_rejet === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_rejet);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_rejet, true), $x);
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
     * Get the [id_agent_rejet] column value.
     * 
     * @return int
     */
    public function getIdAgentRejet()
    {

        return $this->id_agent_rejet;
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
     * Get the [id_parapheur] column value.
     * 
     * @return int
     */
    public function getIdParapheur()
    {

        return $this->id_parapheur;
    }

    /**
     * Get the [optionally formatted] temporal [date_cloture_parapheur] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateClotureParapheur($format = 'Y-m-d H:i:s')
    {
        if ($this->date_cloture_parapheur === null) {
            return null;
        }

        if ($this->date_cloture_parapheur === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_cloture_parapheur);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_cloture_parapheur, true), $x);
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
     * Get the [motif_rejet] column value.
     * 
     * @return string
     */
    public function getMotifRejet()
    {

        return $this->motif_rejet;
    }

    /**
     * Get the [optionally formatted] temporal [date_derniere_synchronisation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDerniereSynchronisation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_derniere_synchronisation === null) {
            return null;
        }

        if ($this->date_derniere_synchronisation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_derniere_synchronisation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_derniere_synchronisation, true), $x);
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
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::ID_CONTRAT;
        }

        if ($this->aCommonExecContrat !== null && $this->aCommonExecContrat->getIdContrat() !== $v) {
            $this->aCommonExecContrat = null;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [id_type_avenant] column.
     * 
     * @param int $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setIdTypeAvenant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_avenant !== $v) {
            $this->id_type_avenant = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::ID_TYPE_AVENANT;
        }

        if ($this->aCommonExecTypeAvenant !== null && $this->aCommonExecTypeAvenant->getId() !== $v) {
            $this->aCommonExecTypeAvenant = null;
        }


        return $this;
    } // setIdTypeAvenant()

    /**
     * Set the value of [numero] column.
     * 
     * @param string $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::INTITULE;
        }


        return $this;
    } // setIntitule()

    /**
     * Sets the value of [date_notification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setDateNotification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_notification !== null || $dt !== null) {
            $currentDateAsString = ($this->date_notification !== null && $tmpDt = new DateTime($this->date_notification)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_notification = $newDateAsString;
                $this->modifiedColumns[] = CommonExecAvenantPeer::DATE_NOTIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDateNotification()

    /**
     * Set the value of [incidence_financiere] column.
     * 
     * @param int $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setIncidenceFinanciere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->incidence_financiere !== $v) {
            $this->incidence_financiere = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::INCIDENCE_FINANCIERE;
        }


        return $this;
    } // setIncidenceFinanciere()

    /**
     * Set the value of [positif] column.
     * 
     * @param int $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setPositif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->positif !== $v) {
            $this->positif = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::POSITIF;
        }


        return $this;
    } // setPositif()

    /**
     * Set the value of [montant_ecart_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setMontantEcartHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_ecart_ht !== $v) {
            $this->montant_ecart_ht = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::MONTANT_ECART_HT;
        }


        return $this;
    } // setMontantEcartHt()

    /**
     * Set the value of [montant_ecart_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setMontantEcartTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_ecart_ttc !== $v) {
            $this->montant_ecart_ttc = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::MONTANT_ECART_TTC;
        }


        return $this;
    } // setMontantEcartTtc()

    /**
     * Set the value of [pourcentage_ecart] column.
     * 
     * @param double $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setPourcentageEcart($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pourcentage_ecart !== $v) {
            $this->pourcentage_ecart = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::POURCENTAGE_ECART;
        }


        return $this;
    } // setPourcentageEcart()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Sets the value of [date_validation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setDateValidation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_validation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_validation !== null && $tmpDt = new DateTime($this->date_validation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_validation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecAvenantPeer::DATE_VALIDATION;
            }
        } // if either are not null


        return $this;
    } // setDateValidation()

    /**
     * Set the value of [id_agent_validation] column.
     * 
     * @param int $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setIdAgentValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_validation !== $v) {
            $this->id_agent_validation = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::ID_AGENT_VALIDATION;
        }

        if ($this->aCommonAgentRelatedByIdAgentValidation !== null && $this->aCommonAgentRelatedByIdAgentValidation->getId() !== $v) {
            $this->aCommonAgentRelatedByIdAgentValidation = null;
        }


        return $this;
    } // setIdAgentValidation()

    /**
     * Sets the value of [date_rejet] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setDateRejet($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_rejet !== null || $dt !== null) {
            $currentDateAsString = ($this->date_rejet !== null && $tmpDt = new DateTime($this->date_rejet)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_rejet = $newDateAsString;
                $this->modifiedColumns[] = CommonExecAvenantPeer::DATE_REJET;
            }
        } // if either are not null


        return $this;
    } // setDateRejet()

    /**
     * Set the value of [id_agent_rejet] column.
     * 
     * @param int $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setIdAgentRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_rejet !== $v) {
            $this->id_agent_rejet = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::ID_AGENT_REJET;
        }

        if ($this->aCommonAgentRelatedByIdAgentRejet !== null && $this->aCommonAgentRelatedByIdAgentRejet->getId() !== $v) {
            $this->aCommonAgentRelatedByIdAgentRejet = null;
        }


        return $this;
    } // setIdAgentRejet()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecAvenantPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::ID_AGENT_CREA;
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
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = CommonExecAvenantPeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

    /**
     * Set the value of [id_agent_modif] column.
     * 
     * @param int $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setIdAgentModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_modif !== $v) {
            $this->id_agent_modif = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::ID_AGENT_MODIF;
        }

        if ($this->aCommonAgentRelatedByIdAgentModif !== null && $this->aCommonAgentRelatedByIdAgentModif->getId() !== $v) {
            $this->aCommonAgentRelatedByIdAgentModif = null;
        }


        return $this;
    } // setIdAgentModif()

    /**
     * Set the value of [id_parapheur] column.
     * 
     * @param int $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setIdParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_parapheur !== $v) {
            $this->id_parapheur = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::ID_PARAPHEUR;
        }


        return $this;
    } // setIdParapheur()

    /**
     * Sets the value of [date_cloture_parapheur] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setDateClotureParapheur($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_cloture_parapheur !== null || $dt !== null) {
            $currentDateAsString = ($this->date_cloture_parapheur !== null && $tmpDt = new DateTime($this->date_cloture_parapheur)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_cloture_parapheur = $newDateAsString;
                $this->modifiedColumns[] = CommonExecAvenantPeer::DATE_CLOTURE_PARAPHEUR;
            }
        } // if either are not null


        return $this;
    } // setDateClotureParapheur()

    /**
     * Set the value of [motif_rejet] column.
     * 
     * @param string $v new value
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setMotifRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_rejet !== $v) {
            $this->motif_rejet = $v;
            $this->modifiedColumns[] = CommonExecAvenantPeer::MOTIF_REJET;
        }


        return $this;
    } // setMotifRejet()

    /**
     * Sets the value of [date_derniere_synchronisation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setDateDerniereSynchronisation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_derniere_synchronisation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_derniere_synchronisation !== null && $tmpDt = new DateTime($this->date_derniere_synchronisation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_derniere_synchronisation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecAvenantPeer::DATE_DERNIERE_SYNCHRONISATION;
            }
        } // if either are not null


        return $this;
    } // setDateDerniereSynchronisation()

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
            $this->id_type_avenant = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->numero = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->intitule = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_notification = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->incidence_financiere = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->positif = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->montant_ecart_ht = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->montant_ecart_ttc = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->pourcentage_ecart = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->statut = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->date_validation = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->id_agent_validation = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->date_rejet = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->id_agent_rejet = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->date_crea = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->id_agent_crea = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->date_modif = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->id_agent_modif = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->id_parapheur = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->date_cloture_parapheur = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->motif_rejet = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->date_derniere_synchronisation = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 24; // 24 = CommonExecAvenantPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecAvenant object", $e);
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
        if ($this->aCommonExecTypeAvenant !== null && $this->id_type_avenant !== $this->aCommonExecTypeAvenant->getId()) {
            $this->aCommonExecTypeAvenant = null;
        }
        if ($this->aCommonAgentRelatedByIdAgentValidation !== null && $this->id_agent_validation !== $this->aCommonAgentRelatedByIdAgentValidation->getId()) {
            $this->aCommonAgentRelatedByIdAgentValidation = null;
        }
        if ($this->aCommonAgentRelatedByIdAgentRejet !== null && $this->id_agent_rejet !== $this->aCommonAgentRelatedByIdAgentRejet->getId()) {
            $this->aCommonAgentRelatedByIdAgentRejet = null;
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
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecAvenantPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonAgentRelatedByIdAgentCrea = null;
            $this->aCommonAgentRelatedByIdAgentModif = null;
            $this->aCommonAgentRelatedByIdAgentRejet = null;
            $this->aCommonAgentRelatedByIdAgentValidation = null;
            $this->aCommonExecContrat = null;
            $this->aCommonExecTypeAvenant = null;
            $this->collCommonExecHistoriquePrixs = null;

            $this->collCommonExecPieceAvenants = null;

            $this->collCommonExecPrixAvenants = null;

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
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecAvenantQuery::create()
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
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecAvenantPeer::addInstanceToPool($this);
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

            if ($this->aCommonAgentRelatedByIdAgentRejet !== null) {
                if ($this->aCommonAgentRelatedByIdAgentRejet->isModified() || $this->aCommonAgentRelatedByIdAgentRejet->isNew()) {
                    $affectedRows += $this->aCommonAgentRelatedByIdAgentRejet->save($con);
                }
                $this->setCommonAgentRelatedByIdAgentRejet($this->aCommonAgentRelatedByIdAgentRejet);
            }

            if ($this->aCommonAgentRelatedByIdAgentValidation !== null) {
                if ($this->aCommonAgentRelatedByIdAgentValidation->isModified() || $this->aCommonAgentRelatedByIdAgentValidation->isNew()) {
                    $affectedRows += $this->aCommonAgentRelatedByIdAgentValidation->save($con);
                }
                $this->setCommonAgentRelatedByIdAgentValidation($this->aCommonAgentRelatedByIdAgentValidation);
            }

            if ($this->aCommonExecContrat !== null) {
                if ($this->aCommonExecContrat->isModified() || $this->aCommonExecContrat->isNew()) {
                    $affectedRows += $this->aCommonExecContrat->save($con);
                }
                $this->setCommonExecContrat($this->aCommonExecContrat);
            }

            if ($this->aCommonExecTypeAvenant !== null) {
                if ($this->aCommonExecTypeAvenant->isModified() || $this->aCommonExecTypeAvenant->isNew()) {
                    $affectedRows += $this->aCommonExecTypeAvenant->save($con);
                }
                $this->setCommonExecTypeAvenant($this->aCommonExecTypeAvenant);
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

            if ($this->commonExecPieceAvenantsScheduledForDeletion !== null) {
                if (!$this->commonExecPieceAvenantsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPieceAvenantsScheduledForDeletion as $commonExecPieceAvenant) {
                        // need to save related object because we set the relation to null
                        $commonExecPieceAvenant->save($con);
                    }
                    $this->commonExecPieceAvenantsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPieceAvenants !== null) {
                foreach ($this->collCommonExecPieceAvenants as $referrerFK) {
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

        $this->modifiedColumns[] = CommonExecAvenantPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecAvenantPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecAvenantPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_TYPE_AVENANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_avenant`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`intitule`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_NOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_notification`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::INCIDENCE_FINANCIERE)) {
            $modifiedColumns[':p' . $index++]  = '`incidence_financiere`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::POSITIF)) {
            $modifiedColumns[':p' . $index++]  = '`positif`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::MONTANT_ECART_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_ecart_ht`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::MONTANT_ECART_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_ecart_ttc`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::POURCENTAGE_ECART)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_ecart`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_AGENT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_validation`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`date_rejet`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_AGENT_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_rejet`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`date_modif`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_AGENT_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_modif`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_parapheur`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_CLOTURE_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`date_cloture_parapheur`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::MOTIF_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`motif_rejet`';
        }
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_DERNIERE_SYNCHRONISATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_derniere_synchronisation`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_avenant` (%s) VALUES (%s)',
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
                    case '`id_type_avenant`':						
                        $stmt->bindValue($identifier, $this->id_type_avenant, PDO::PARAM_INT);
                        break;
                    case '`numero`':						
                        $stmt->bindValue($identifier, $this->numero, PDO::PARAM_STR);
                        break;
                    case '`intitule`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
                        break;
                    case '`date_notification`':						
                        $stmt->bindValue($identifier, $this->date_notification, PDO::PARAM_STR);
                        break;
                    case '`incidence_financiere`':						
                        $stmt->bindValue($identifier, $this->incidence_financiere, PDO::PARAM_INT);
                        break;
                    case '`positif`':						
                        $stmt->bindValue($identifier, $this->positif, PDO::PARAM_INT);
                        break;
                    case '`montant_ecart_ht`':						
                        $stmt->bindValue($identifier, $this->montant_ecart_ht, PDO::PARAM_STR);
                        break;
                    case '`montant_ecart_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_ecart_ttc, PDO::PARAM_STR);
                        break;
                    case '`pourcentage_ecart`':						
                        $stmt->bindValue($identifier, $this->pourcentage_ecart, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`date_validation`':						
                        $stmt->bindValue($identifier, $this->date_validation, PDO::PARAM_STR);
                        break;
                    case '`id_agent_validation`':						
                        $stmt->bindValue($identifier, $this->id_agent_validation, PDO::PARAM_INT);
                        break;
                    case '`date_rejet`':						
                        $stmt->bindValue($identifier, $this->date_rejet, PDO::PARAM_STR);
                        break;
                    case '`id_agent_rejet`':						
                        $stmt->bindValue($identifier, $this->id_agent_rejet, PDO::PARAM_INT);
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
                    case '`id_parapheur`':						
                        $stmt->bindValue($identifier, $this->id_parapheur, PDO::PARAM_INT);
                        break;
                    case '`date_cloture_parapheur`':						
                        $stmt->bindValue($identifier, $this->date_cloture_parapheur, PDO::PARAM_STR);
                        break;
                    case '`motif_rejet`':						
                        $stmt->bindValue($identifier, $this->motif_rejet, PDO::PARAM_STR);
                        break;
                    case '`date_derniere_synchronisation`':						
                        $stmt->bindValue($identifier, $this->date_derniere_synchronisation, PDO::PARAM_STR);
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

            if ($this->aCommonAgentRelatedByIdAgentRejet !== null) {
                if (!$this->aCommonAgentRelatedByIdAgentRejet->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentRelatedByIdAgentRejet->getValidationFailures());
                }
            }

            if ($this->aCommonAgentRelatedByIdAgentValidation !== null) {
                if (!$this->aCommonAgentRelatedByIdAgentValidation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentRelatedByIdAgentValidation->getValidationFailures());
                }
            }

            if ($this->aCommonExecContrat !== null) {
                if (!$this->aCommonExecContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecContrat->getValidationFailures());
                }
            }

            if ($this->aCommonExecTypeAvenant !== null) {
                if (!$this->aCommonExecTypeAvenant->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecTypeAvenant->getValidationFailures());
                }
            }


            if (($retval = CommonExecAvenantPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecHistoriquePrixs !== null) {
                    foreach ($this->collCommonExecHistoriquePrixs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecPieceAvenants !== null) {
                    foreach ($this->collCommonExecPieceAvenants as $referrerFK) {
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
        $pos = CommonExecAvenantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTypeAvenant();
                break;
            case 3:
                return $this->getNumero();
                break;
            case 4:
                return $this->getIntitule();
                break;
            case 5:
                return $this->getDateNotification();
                break;
            case 6:
                return $this->getIncidenceFinanciere();
                break;
            case 7:
                return $this->getPositif();
                break;
            case 8:
                return $this->getMontantEcartHt();
                break;
            case 9:
                return $this->getMontantEcartTtc();
                break;
            case 10:
                return $this->getPourcentageEcart();
                break;
            case 11:
                return $this->getStatut();
                break;
            case 12:
                return $this->getDateValidation();
                break;
            case 13:
                return $this->getIdAgentValidation();
                break;
            case 14:
                return $this->getDateRejet();
                break;
            case 15:
                return $this->getIdAgentRejet();
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
                return $this->getIdParapheur();
                break;
            case 21:
                return $this->getDateClotureParapheur();
                break;
            case 22:
                return $this->getMotifRejet();
                break;
            case 23:
                return $this->getDateDerniereSynchronisation();
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
        if (isset($alreadyDumpedObjects['CommonExecAvenant'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecAvenant'][$this->getPrimaryKey()] = true;
        $keys = CommonExecAvenantPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdContrat(),
            $keys[2] => $this->getIdTypeAvenant(),
            $keys[3] => $this->getNumero(),
            $keys[4] => $this->getIntitule(),
            $keys[5] => $this->getDateNotification(),
            $keys[6] => $this->getIncidenceFinanciere(),
            $keys[7] => $this->getPositif(),
            $keys[8] => $this->getMontantEcartHt(),
            $keys[9] => $this->getMontantEcartTtc(),
            $keys[10] => $this->getPourcentageEcart(),
            $keys[11] => $this->getStatut(),
            $keys[12] => $this->getDateValidation(),
            $keys[13] => $this->getIdAgentValidation(),
            $keys[14] => $this->getDateRejet(),
            $keys[15] => $this->getIdAgentRejet(),
            $keys[16] => $this->getDateCrea(),
            $keys[17] => $this->getIdAgentCrea(),
            $keys[18] => $this->getDateModif(),
            $keys[19] => $this->getIdAgentModif(),
            $keys[20] => $this->getIdParapheur(),
            $keys[21] => $this->getDateClotureParapheur(),
            $keys[22] => $this->getMotifRejet(),
            $keys[23] => $this->getDateDerniereSynchronisation(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonAgentRelatedByIdAgentCrea) {
                $result['CommonAgentRelatedByIdAgentCrea'] = $this->aCommonAgentRelatedByIdAgentCrea->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonAgentRelatedByIdAgentModif) {
                $result['CommonAgentRelatedByIdAgentModif'] = $this->aCommonAgentRelatedByIdAgentModif->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonAgentRelatedByIdAgentRejet) {
                $result['CommonAgentRelatedByIdAgentRejet'] = $this->aCommonAgentRelatedByIdAgentRejet->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonAgentRelatedByIdAgentValidation) {
                $result['CommonAgentRelatedByIdAgentValidation'] = $this->aCommonAgentRelatedByIdAgentValidation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecContrat) {
                $result['CommonExecContrat'] = $this->aCommonExecContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecTypeAvenant) {
                $result['CommonExecTypeAvenant'] = $this->aCommonExecTypeAvenant->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonExecHistoriquePrixs) {
                $result['CommonExecHistoriquePrixs'] = $this->collCommonExecHistoriquePrixs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPieceAvenants) {
                $result['CommonExecPieceAvenants'] = $this->collCommonExecPieceAvenants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPrixAvenants) {
                $result['CommonExecPrixAvenants'] = $this->collCommonExecPrixAvenants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecAvenantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTypeAvenant($value);
                break;
            case 3:
                $this->setNumero($value);
                break;
            case 4:
                $this->setIntitule($value);
                break;
            case 5:
                $this->setDateNotification($value);
                break;
            case 6:
                $this->setIncidenceFinanciere($value);
                break;
            case 7:
                $this->setPositif($value);
                break;
            case 8:
                $this->setMontantEcartHt($value);
                break;
            case 9:
                $this->setMontantEcartTtc($value);
                break;
            case 10:
                $this->setPourcentageEcart($value);
                break;
            case 11:
                $this->setStatut($value);
                break;
            case 12:
                $this->setDateValidation($value);
                break;
            case 13:
                $this->setIdAgentValidation($value);
                break;
            case 14:
                $this->setDateRejet($value);
                break;
            case 15:
                $this->setIdAgentRejet($value);
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
                $this->setIdParapheur($value);
                break;
            case 21:
                $this->setDateClotureParapheur($value);
                break;
            case 22:
                $this->setMotifRejet($value);
                break;
            case 23:
                $this->setDateDerniereSynchronisation($value);
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
        $keys = CommonExecAvenantPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdContrat($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdTypeAvenant($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumero($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIntitule($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateNotification($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIncidenceFinanciere($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPositif($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMontantEcartHt($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMontantEcartTtc($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPourcentageEcart($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setStatut($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateValidation($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdAgentValidation($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateRejet($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdAgentRejet($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDateCrea($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setIdAgentCrea($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDateModif($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setIdAgentModif($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdParapheur($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDateClotureParapheur($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setMotifRejet($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDateDerniereSynchronisation($arr[$keys[23]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecAvenantPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecAvenantPeer::ID)) $criteria->add(CommonExecAvenantPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_CONTRAT)) $criteria->add(CommonExecAvenantPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_TYPE_AVENANT)) $criteria->add(CommonExecAvenantPeer::ID_TYPE_AVENANT, $this->id_type_avenant);
        if ($this->isColumnModified(CommonExecAvenantPeer::NUMERO)) $criteria->add(CommonExecAvenantPeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CommonExecAvenantPeer::INTITULE)) $criteria->add(CommonExecAvenantPeer::INTITULE, $this->intitule);
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_NOTIFICATION)) $criteria->add(CommonExecAvenantPeer::DATE_NOTIFICATION, $this->date_notification);
        if ($this->isColumnModified(CommonExecAvenantPeer::INCIDENCE_FINANCIERE)) $criteria->add(CommonExecAvenantPeer::INCIDENCE_FINANCIERE, $this->incidence_financiere);
        if ($this->isColumnModified(CommonExecAvenantPeer::POSITIF)) $criteria->add(CommonExecAvenantPeer::POSITIF, $this->positif);
        if ($this->isColumnModified(CommonExecAvenantPeer::MONTANT_ECART_HT)) $criteria->add(CommonExecAvenantPeer::MONTANT_ECART_HT, $this->montant_ecart_ht);
        if ($this->isColumnModified(CommonExecAvenantPeer::MONTANT_ECART_TTC)) $criteria->add(CommonExecAvenantPeer::MONTANT_ECART_TTC, $this->montant_ecart_ttc);
        if ($this->isColumnModified(CommonExecAvenantPeer::POURCENTAGE_ECART)) $criteria->add(CommonExecAvenantPeer::POURCENTAGE_ECART, $this->pourcentage_ecart);
        if ($this->isColumnModified(CommonExecAvenantPeer::STATUT)) $criteria->add(CommonExecAvenantPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_VALIDATION)) $criteria->add(CommonExecAvenantPeer::DATE_VALIDATION, $this->date_validation);
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_AGENT_VALIDATION)) $criteria->add(CommonExecAvenantPeer::ID_AGENT_VALIDATION, $this->id_agent_validation);
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_REJET)) $criteria->add(CommonExecAvenantPeer::DATE_REJET, $this->date_rejet);
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_AGENT_REJET)) $criteria->add(CommonExecAvenantPeer::ID_AGENT_REJET, $this->id_agent_rejet);
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_CREA)) $criteria->add(CommonExecAvenantPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_AGENT_CREA)) $criteria->add(CommonExecAvenantPeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_MODIF)) $criteria->add(CommonExecAvenantPeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_AGENT_MODIF)) $criteria->add(CommonExecAvenantPeer::ID_AGENT_MODIF, $this->id_agent_modif);
        if ($this->isColumnModified(CommonExecAvenantPeer::ID_PARAPHEUR)) $criteria->add(CommonExecAvenantPeer::ID_PARAPHEUR, $this->id_parapheur);
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_CLOTURE_PARAPHEUR)) $criteria->add(CommonExecAvenantPeer::DATE_CLOTURE_PARAPHEUR, $this->date_cloture_parapheur);
        if ($this->isColumnModified(CommonExecAvenantPeer::MOTIF_REJET)) $criteria->add(CommonExecAvenantPeer::MOTIF_REJET, $this->motif_rejet);
        if ($this->isColumnModified(CommonExecAvenantPeer::DATE_DERNIERE_SYNCHRONISATION)) $criteria->add(CommonExecAvenantPeer::DATE_DERNIERE_SYNCHRONISATION, $this->date_derniere_synchronisation);

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
        $criteria = new Criteria(CommonExecAvenantPeer::DATABASE_NAME);
        $criteria->add(CommonExecAvenantPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecAvenant (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setIdTypeAvenant($this->getIdTypeAvenant());
        $copyObj->setNumero($this->getNumero());
        $copyObj->setIntitule($this->getIntitule());
        $copyObj->setDateNotification($this->getDateNotification());
        $copyObj->setIncidenceFinanciere($this->getIncidenceFinanciere());
        $copyObj->setPositif($this->getPositif());
        $copyObj->setMontantEcartHt($this->getMontantEcartHt());
        $copyObj->setMontantEcartTtc($this->getMontantEcartTtc());
        $copyObj->setPourcentageEcart($this->getPourcentageEcart());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDateValidation($this->getDateValidation());
        $copyObj->setIdAgentValidation($this->getIdAgentValidation());
        $copyObj->setDateRejet($this->getDateRejet());
        $copyObj->setIdAgentRejet($this->getIdAgentRejet());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setDateModif($this->getDateModif());
        $copyObj->setIdAgentModif($this->getIdAgentModif());
        $copyObj->setIdParapheur($this->getIdParapheur());
        $copyObj->setDateClotureParapheur($this->getDateClotureParapheur());
        $copyObj->setMotifRejet($this->getMotifRejet());
        $copyObj->setDateDerniereSynchronisation($this->getDateDerniereSynchronisation());

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

            foreach ($this->getCommonExecPieceAvenants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPieceAvenant($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPrixAvenants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPrixAvenant($relObj->copy($deepCopy));
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
     * @return CommonExecAvenant Clone of current object.
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
     * @return CommonExecAvenantPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecAvenantPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecAvenant The current object (for fluent API support)
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
            $v->addCommonExecAvenantRelatedByIdAgentCrea($this);
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
                $this->aCommonAgentRelatedByIdAgentCrea->addCommonExecAvenantsRelatedByIdAgentCrea($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentCrea;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecAvenant The current object (for fluent API support)
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
            $v->addCommonExecAvenantRelatedByIdAgentModif($this);
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
                $this->aCommonAgentRelatedByIdAgentModif->addCommonExecAvenantsRelatedByIdAgentModif($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentModif;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecAvenant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgentRelatedByIdAgentRejet(CommonAgent $v = null)
    {
        if ($v === null) {
            $this->setIdAgentRejet(NULL);
        } else {
            $this->setIdAgentRejet($v->getId());
        }

        $this->aCommonAgentRelatedByIdAgentRejet = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgent object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecAvenantRelatedByIdAgentRejet($this);
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
    public function getCommonAgentRelatedByIdAgentRejet(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgentRelatedByIdAgentRejet === null && ($this->id_agent_rejet !== null) && $doQuery) {
            $this->aCommonAgentRelatedByIdAgentRejet = CommonAgentQuery::create()->findPk($this->id_agent_rejet, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgentRelatedByIdAgentRejet->addCommonExecAvenantsRelatedByIdAgentRejet($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentRejet;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecAvenant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgentRelatedByIdAgentValidation(CommonAgent $v = null)
    {
        if ($v === null) {
            $this->setIdAgentValidation(NULL);
        } else {
            $this->setIdAgentValidation($v->getId());
        }

        $this->aCommonAgentRelatedByIdAgentValidation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgent object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecAvenantRelatedByIdAgentValidation($this);
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
    public function getCommonAgentRelatedByIdAgentValidation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgentRelatedByIdAgentValidation === null && ($this->id_agent_validation !== null) && $doQuery) {
            $this->aCommonAgentRelatedByIdAgentValidation = CommonAgentQuery::create()->findPk($this->id_agent_validation, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgentRelatedByIdAgentValidation->addCommonExecAvenantsRelatedByIdAgentValidation($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentValidation;
    }

    /**
     * Declares an association between this object and a CommonExecContrat object.
     *
     * @param   CommonExecContrat $v
     * @return CommonExecAvenant The current object (for fluent API support)
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
            $v->addCommonExecAvenant($this);
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
                $this->aCommonExecContrat->addCommonExecAvenants($this);
             */
        }

        return $this->aCommonExecContrat;
    }

    /**
     * Declares an association between this object and a CommonExecTypeAvenant object.
     *
     * @param   CommonExecTypeAvenant $v
     * @return CommonExecAvenant The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecTypeAvenant(CommonExecTypeAvenant $v = null)
    {
        if ($v === null) {
            $this->setIdTypeAvenant(NULL);
        } else {
            $this->setIdTypeAvenant($v->getId());
        }

        $this->aCommonExecTypeAvenant = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecTypeAvenant object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecAvenant($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecTypeAvenant object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecTypeAvenant The associated CommonExecTypeAvenant object.
     * @throws PropelException
     */
    public function getCommonExecTypeAvenant(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecTypeAvenant === null && ($this->id_type_avenant !== null) && $doQuery) {
            $this->aCommonExecTypeAvenant = CommonExecTypeAvenantQuery::create()->findPk($this->id_type_avenant, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecTypeAvenant->addCommonExecAvenants($this);
             */
        }

        return $this->aCommonExecTypeAvenant;
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
        if ('CommonExecPieceAvenant' == $relationName) {
            $this->initCommonExecPieceAvenants();
        }
        if ('CommonExecPrixAvenant' == $relationName) {
            $this->initCommonExecPrixAvenants();
        }
    }

    /**
     * Clears out the collCommonExecHistoriquePrixs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecAvenant The current object (for fluent API support)
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
     * If this CommonExecAvenant is new, it will return
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
                    ->filterByCommonExecAvenant($this)
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
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setCommonExecHistoriquePrixs(PropelCollection $commonExecHistoriquePrixs, PropelPDO $con = null)
    {
        $commonExecHistoriquePrixsToDelete = $this->getCommonExecHistoriquePrixs(new Criteria(), $con)->diff($commonExecHistoriquePrixs);


        $this->commonExecHistoriquePrixsScheduledForDeletion = $commonExecHistoriquePrixsToDelete;

        foreach ($commonExecHistoriquePrixsToDelete as $commonExecHistoriquePrixRemoved) {
            $commonExecHistoriquePrixRemoved->setCommonExecAvenant(null);
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
                ->filterByCommonExecAvenant($this)
                ->count($con);
        }

        return count($this->collCommonExecHistoriquePrixs);
    }

    /**
     * Method called to associate a CommonExecHistoriquePrix object to this object
     * through the CommonExecHistoriquePrix foreign key attribute.
     *
     * @param   CommonExecHistoriquePrix $l CommonExecHistoriquePrix
     * @return CommonExecAvenant The current object (for fluent API support)
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
        $commonExecHistoriquePrix->setCommonExecAvenant($this);
    }

    /**
     * @param	CommonExecHistoriquePrix $commonExecHistoriquePrix The commonExecHistoriquePrix object to remove.
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function removeCommonExecHistoriquePrix($commonExecHistoriquePrix)
    {
        if ($this->getCommonExecHistoriquePrixs()->contains($commonExecHistoriquePrix)) {
            $this->collCommonExecHistoriquePrixs->remove($this->collCommonExecHistoriquePrixs->search($commonExecHistoriquePrix));
            if (null === $this->commonExecHistoriquePrixsScheduledForDeletion) {
                $this->commonExecHistoriquePrixsScheduledForDeletion = clone $this->collCommonExecHistoriquePrixs;
                $this->commonExecHistoriquePrixsScheduledForDeletion->clear();
            }
            $this->commonExecHistoriquePrixsScheduledForDeletion[]= $commonExecHistoriquePrix;
            $commonExecHistoriquePrix->setCommonExecAvenant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecAvenant is new, it will return
     * an empty collection; or if this CommonExecAvenant has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecAvenant.
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
     * Otherwise if this CommonExecAvenant is new, it will return
     * an empty collection; or if this CommonExecAvenant has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecAvenant.
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
     * Otherwise if this CommonExecAvenant is new, it will return
     * an empty collection; or if this CommonExecAvenant has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecAvenant.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecAvenant is new, it will return
     * an empty collection; or if this CommonExecAvenant has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecAvenant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsJoinCommonExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecPrix', $join_behavior);

        return $this->getCommonExecHistoriquePrixs($query, $con);
    }

    /**
     * Clears out the collCommonExecPieceAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecAvenant The current object (for fluent API support)
     * @see        addCommonExecPieceAvenants()
     */
    public function clearCommonExecPieceAvenants()
    {
        $this->collCommonExecPieceAvenants = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPieceAvenantsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPieceAvenants collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPieceAvenants($v = true)
    {
        $this->collCommonExecPieceAvenantsPartial = $v;
    }

    /**
     * Initializes the collCommonExecPieceAvenants collection.
     *
     * By default this just sets the collCommonExecPieceAvenants collection to an empty array (like clearcollCommonExecPieceAvenants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPieceAvenants($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPieceAvenants && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPieceAvenants = new PropelObjectCollection();
        $this->collCommonExecPieceAvenants->setModel('CommonExecPieceAvenant');
    }

    /**
     * Gets an array of CommonExecPieceAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecAvenant is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPieceAvenant[] List of CommonExecPieceAvenant objects
     * @throws PropelException
     */
    public function getCommonExecPieceAvenants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPieceAvenantsPartial && !$this->isNew();
        if (null === $this->collCommonExecPieceAvenants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieceAvenants) {
                // return empty collection
                $this->initCommonExecPieceAvenants();
            } else {
                $collCommonExecPieceAvenants = CommonExecPieceAvenantQuery::create(null, $criteria)
                    ->filterByCommonExecAvenant($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPieceAvenantsPartial && count($collCommonExecPieceAvenants)) {
                      $this->initCommonExecPieceAvenants(false);

                      foreach ($collCommonExecPieceAvenants as $obj) {
                        if (false == $this->collCommonExecPieceAvenants->contains($obj)) {
                          $this->collCommonExecPieceAvenants->append($obj);
                        }
                      }

                      $this->collCommonExecPieceAvenantsPartial = true;
                    }

                    $collCommonExecPieceAvenants->getInternalIterator()->rewind();

                    return $collCommonExecPieceAvenants;
                }

                if ($partial && $this->collCommonExecPieceAvenants) {
                    foreach ($this->collCommonExecPieceAvenants as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPieceAvenants[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPieceAvenants = $collCommonExecPieceAvenants;
                $this->collCommonExecPieceAvenantsPartial = false;
            }
        }

        return $this->collCommonExecPieceAvenants;
    }

    /**
     * Sets a collection of CommonExecPieceAvenant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPieceAvenants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setCommonExecPieceAvenants(PropelCollection $commonExecPieceAvenants, PropelPDO $con = null)
    {
        $commonExecPieceAvenantsToDelete = $this->getCommonExecPieceAvenants(new Criteria(), $con)->diff($commonExecPieceAvenants);


        $this->commonExecPieceAvenantsScheduledForDeletion = $commonExecPieceAvenantsToDelete;

        foreach ($commonExecPieceAvenantsToDelete as $commonExecPieceAvenantRemoved) {
            $commonExecPieceAvenantRemoved->setCommonExecAvenant(null);
        }

        $this->collCommonExecPieceAvenants = null;
        foreach ($commonExecPieceAvenants as $commonExecPieceAvenant) {
            $this->addCommonExecPieceAvenant($commonExecPieceAvenant);
        }

        $this->collCommonExecPieceAvenants = $commonExecPieceAvenants;
        $this->collCommonExecPieceAvenantsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPieceAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPieceAvenant objects.
     * @throws PropelException
     */
    public function countCommonExecPieceAvenants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPieceAvenantsPartial && !$this->isNew();
        if (null === $this->collCommonExecPieceAvenants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieceAvenants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPieceAvenants());
            }
            $query = CommonExecPieceAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecAvenant($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceAvenants);
    }

    /**
     * Method called to associate a CommonExecPieceAvenant object to this object
     * through the CommonExecPieceAvenant foreign key attribute.
     *
     * @param   CommonExecPieceAvenant $l CommonExecPieceAvenant
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function addCommonExecPieceAvenant(CommonExecPieceAvenant $l)
    {
        if ($this->collCommonExecPieceAvenants === null) {
            $this->initCommonExecPieceAvenants();
            $this->collCommonExecPieceAvenantsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPieceAvenants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPieceAvenant($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPieceAvenant $commonExecPieceAvenant The commonExecPieceAvenant object to add.
     */
    protected function doAddCommonExecPieceAvenant($commonExecPieceAvenant)
    {
        $this->collCommonExecPieceAvenants[]= $commonExecPieceAvenant;
        $commonExecPieceAvenant->setCommonExecAvenant($this);
    }

    /**
     * @param	CommonExecPieceAvenant $commonExecPieceAvenant The commonExecPieceAvenant object to remove.
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function removeCommonExecPieceAvenant($commonExecPieceAvenant)
    {
        if ($this->getCommonExecPieceAvenants()->contains($commonExecPieceAvenant)) {
            $this->collCommonExecPieceAvenants->remove($this->collCommonExecPieceAvenants->search($commonExecPieceAvenant));
            if (null === $this->commonExecPieceAvenantsScheduledForDeletion) {
                $this->commonExecPieceAvenantsScheduledForDeletion = clone $this->collCommonExecPieceAvenants;
                $this->commonExecPieceAvenantsScheduledForDeletion->clear();
            }
            $this->commonExecPieceAvenantsScheduledForDeletion[]= clone $commonExecPieceAvenant;
            $commonExecPieceAvenant->setCommonExecAvenant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecAvenant is new, it will return
     * an empty collection; or if this CommonExecAvenant has previously
     * been saved, it will retrieve related CommonExecPieceAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecAvenant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceAvenant[] List of CommonExecPieceAvenant objects
     */
    public function getCommonExecPieceAvenantsJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonExecPieceAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecAvenant is new, it will return
     * an empty collection; or if this CommonExecAvenant has previously
     * been saved, it will retrieve related CommonExecPieceAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecAvenant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceAvenant[] List of CommonExecPieceAvenant objects
     */
    public function getCommonExecPieceAvenantsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPieceAvenants($query, $con);
    }

    /**
     * Clears out the collCommonExecPrixAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecAvenant The current object (for fluent API support)
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
     * If this CommonExecAvenant is new, it will return
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
                    ->filterByCommonExecAvenant($this)
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
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function setCommonExecPrixAvenants(PropelCollection $commonExecPrixAvenants, PropelPDO $con = null)
    {
        $commonExecPrixAvenantsToDelete = $this->getCommonExecPrixAvenants(new Criteria(), $con)->diff($commonExecPrixAvenants);


        $this->commonExecPrixAvenantsScheduledForDeletion = $commonExecPrixAvenantsToDelete;

        foreach ($commonExecPrixAvenantsToDelete as $commonExecPrixAvenantRemoved) {
            $commonExecPrixAvenantRemoved->setCommonExecAvenant(null);
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
                ->filterByCommonExecAvenant($this)
                ->count($con);
        }

        return count($this->collCommonExecPrixAvenants);
    }

    /**
     * Method called to associate a CommonExecPrixAvenant object to this object
     * through the CommonExecPrixAvenant foreign key attribute.
     *
     * @param   CommonExecPrixAvenant $l CommonExecPrixAvenant
     * @return CommonExecAvenant The current object (for fluent API support)
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
        $commonExecPrixAvenant->setCommonExecAvenant($this);
    }

    /**
     * @param	CommonExecPrixAvenant $commonExecPrixAvenant The commonExecPrixAvenant object to remove.
     * @return CommonExecAvenant The current object (for fluent API support)
     */
    public function removeCommonExecPrixAvenant($commonExecPrixAvenant)
    {
        if ($this->getCommonExecPrixAvenants()->contains($commonExecPrixAvenant)) {
            $this->collCommonExecPrixAvenants->remove($this->collCommonExecPrixAvenants->search($commonExecPrixAvenant));
            if (null === $this->commonExecPrixAvenantsScheduledForDeletion) {
                $this->commonExecPrixAvenantsScheduledForDeletion = clone $this->collCommonExecPrixAvenants;
                $this->commonExecPrixAvenantsScheduledForDeletion->clear();
            }
            $this->commonExecPrixAvenantsScheduledForDeletion[]= clone $commonExecPrixAvenant;
            $commonExecPrixAvenant->setCommonExecAvenant(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecAvenant is new, it will return
     * an empty collection; or if this CommonExecAvenant has previously
     * been saved, it will retrieve related CommonExecPrixAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecAvenant.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecAvenant is new, it will return
     * an empty collection; or if this CommonExecAvenant has previously
     * been saved, it will retrieve related CommonExecPrixAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecAvenant.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPrixAvenant[] List of CommonExecPrixAvenant objects
     */
    public function getCommonExecPrixAvenantsJoinCommonExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPrixAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecPrix', $join_behavior);

        return $this->getCommonExecPrixAvenants($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_contrat = null;
        $this->id_type_avenant = null;
        $this->numero = null;
        $this->intitule = null;
        $this->date_notification = null;
        $this->incidence_financiere = null;
        $this->positif = null;
        $this->montant_ecart_ht = null;
        $this->montant_ecart_ttc = null;
        $this->pourcentage_ecart = null;
        $this->statut = null;
        $this->date_validation = null;
        $this->id_agent_validation = null;
        $this->date_rejet = null;
        $this->id_agent_rejet = null;
        $this->date_crea = null;
        $this->id_agent_crea = null;
        $this->date_modif = null;
        $this->id_agent_modif = null;
        $this->id_parapheur = null;
        $this->date_cloture_parapheur = null;
        $this->motif_rejet = null;
        $this->date_derniere_synchronisation = null;
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
            if ($this->collCommonExecHistoriquePrixs) {
                foreach ($this->collCommonExecHistoriquePrixs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPieceAvenants) {
                foreach ($this->collCommonExecPieceAvenants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPrixAvenants) {
                foreach ($this->collCommonExecPrixAvenants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonAgentRelatedByIdAgentCrea instanceof Persistent) {
              $this->aCommonAgentRelatedByIdAgentCrea->clearAllReferences($deep);
            }
            if ($this->aCommonAgentRelatedByIdAgentModif instanceof Persistent) {
              $this->aCommonAgentRelatedByIdAgentModif->clearAllReferences($deep);
            }
            if ($this->aCommonAgentRelatedByIdAgentRejet instanceof Persistent) {
              $this->aCommonAgentRelatedByIdAgentRejet->clearAllReferences($deep);
            }
            if ($this->aCommonAgentRelatedByIdAgentValidation instanceof Persistent) {
              $this->aCommonAgentRelatedByIdAgentValidation->clearAllReferences($deep);
            }
            if ($this->aCommonExecContrat instanceof Persistent) {
              $this->aCommonExecContrat->clearAllReferences($deep);
            }
            if ($this->aCommonExecTypeAvenant instanceof Persistent) {
              $this->aCommonExecTypeAvenant->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecHistoriquePrixs instanceof PropelCollection) {
            $this->collCommonExecHistoriquePrixs->clearIterator();
        }
        $this->collCommonExecHistoriquePrixs = null;
        if ($this->collCommonExecPieceAvenants instanceof PropelCollection) {
            $this->collCommonExecPieceAvenants->clearIterator();
        }
        $this->collCommonExecPieceAvenants = null;
        if ($this->collCommonExecPrixAvenants instanceof PropelCollection) {
            $this->collCommonExecPrixAvenants->clearIterator();
        }
        $this->collCommonExecPrixAvenants = null;
        $this->aCommonAgentRelatedByIdAgentCrea = null;
        $this->aCommonAgentRelatedByIdAgentModif = null;
        $this->aCommonAgentRelatedByIdAgentRejet = null;
        $this->aCommonAgentRelatedByIdAgentValidation = null;
        $this->aCommonExecContrat = null;
        $this->aCommonExecTypeAvenant = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecAvenantPeer::DEFAULT_STRING_FORMAT);
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
