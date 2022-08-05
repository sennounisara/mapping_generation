<?php


/**
 * Base class that represents a row from the 'exec_evenement' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecEvenement extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecEvenementPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecEvenementPeer
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
     * The value for the id_type_evenement field.
     * @var        int
     */
    protected $id_type_evenement;

    /**
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the id_contractant field.
     * @var        int
     */
    protected $id_contractant;

    /**
     * The value for the id_phase field.
     * @var        int
     */
    protected $id_phase;

    /**
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the date_document field.
     * @var        string
     */
    protected $date_document;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the origine_piece field.
     * @var        int
     */
    protected $origine_piece;

    /**
     * The value for the date_validation field.
     * @var        string
     */
    protected $date_validation;

    /**
     * The value for the date_rejet field.
     * @var        string
     */
    protected $date_rejet;

    /**
     * The value for the id_agent_validation field.
     * @var        int
     */
    protected $id_agent_validation;

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
     * The value for the motif_darret field.
     * @var        string
     */
    protected $motif_darret;

    /**
     * The value for the type_reception field.
     * @var        string
     */
    protected $type_reception;

    /**
     * The value for the porte_reception field.
     * @var        string
     */
    protected $porte_reception;

    /**
     * The value for the mode_prononce_reception field.
     * @var        string
     */
    protected $mode_prononce_reception;

    /**
     * The value for the penalite_retard field.
     * @var        string
     */
    protected $penalite_retard;

    /**
     * The value for the prestation_reception field.
     * @var        string
     */
    protected $prestation_reception;

    /**
     * The value for the date_reserve field.
     * @var        string
     */
    protected $date_reserve;

    /**
     * The value for the delai_maximal_reserves field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $delai_maximal_reserves;

    /**
     * The value for the detail_reserve field.
     * @var        string
     */
    protected $detail_reserve;

    /**
     * The value for the ordre_evenement field.
     * @var        int
     */
    protected $ordre_evenement;

    /**
     * The value for the demande field.
     * @var        string
     */
    protected $demande;

    /**
     * The value for the id_parent field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_parent;

    /**
     * The value for the date_derniere_synchronisation field.
     * @var        string
     */
    protected $date_derniere_synchronisation;

    /**
     * The value for the numero field.
     * @var        string
     */
    protected $numero;

    /**
     * The value for the id_facture field.
     * @var        int
     */
    protected $id_facture;

    /**
     * @var        CommonExecContractant
     */
    protected $aCommonExecContractant;

    /**
     * @var        CommonExecContrat
     */
    protected $aCommonExecContrat;

    /**
     * @var        CommonExecPhase
     */
    protected $aCommonExecPhase;

    /**
     * @var        CommonExecTypeEvenement
     */
    protected $aCommonExecTypeEvenement;

    /**
     * @var        PropelObjectCollection|CommonExecPieceEvenement[] Collection to store aggregation of CommonExecPieceEvenement objects.
     */
    protected $collCommonExecPieceEvenements;
    protected $collCommonExecPieceEvenementsPartial;

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
    protected $commonExecPieceEvenementsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->delai_maximal_reserves = 0;
        $this->id_parent = 0;
    }

    /**
     * Initializes internal state of BaseCommonExecEvenement object.
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
     * Get the [id_type_evenement] column value.
     * 
     * @return int
     */
    public function getIdTypeEvenement()
    {

        return $this->id_type_evenement;
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
     * Get the [id_contractant] column value.
     * 
     * @return int
     */
    public function getIdContractant()
    {

        return $this->id_contractant;
    }

    /**
     * Get the [id_phase] column value.
     * 
     * @return int
     */
    public function getIdPhase()
    {

        return $this->id_phase;
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
     * Get the [optionally formatted] temporal [date] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = 'Y-m-d H:i:s')
    {
        if ($this->date === null) {
            return null;
        }

        if ($this->date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date, true), $x);
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
     * Get the [optionally formatted] temporal [date_document] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDocument($format = 'Y-m-d H:i:s')
    {
        if ($this->date_document === null) {
            return null;
        }

        if ($this->date_document === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_document);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_document, true), $x);
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
     * Get the [commentaire] column value.
     * 
     * @return string
     */
    public function getCommentaire()
    {

        return $this->commentaire;
    }

    /**
     * Get the [origine_piece] column value.
     * 
     * @return int
     */
    public function getOriginePiece()
    {

        return $this->origine_piece;
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
     * Get the [id_agent_validation] column value.
     * 
     * @return int
     */
    public function getIdAgentValidation()
    {

        return $this->id_agent_validation;
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
     * Get the [motif_darret] column value.
     * 
     * @return string
     */
    public function getMotifDarret()
    {

        return $this->motif_darret;
    }

    /**
     * Get the [type_reception] column value.
     * 
     * @return string
     */
    public function getTypeReception()
    {

        return $this->type_reception;
    }

    /**
     * Get the [porte_reception] column value.
     * 
     * @return string
     */
    public function getPorteReception()
    {

        return $this->porte_reception;
    }

    /**
     * Get the [mode_prononce_reception] column value.
     * 
     * @return string
     */
    public function getModePrononceReception()
    {

        return $this->mode_prononce_reception;
    }

    /**
     * Get the [penalite_retard] column value.
     * 
     * @return string
     */
    public function getPenaliteRetard()
    {

        return $this->penalite_retard;
    }

    /**
     * Get the [prestation_reception] column value.
     * 
     * @return string
     */
    public function getPrestationReception()
    {

        return $this->prestation_reception;
    }

    /**
     * Get the [optionally formatted] temporal [date_reserve] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateReserve($format = 'Y-m-d H:i:s')
    {
        if ($this->date_reserve === null) {
            return null;
        }

        if ($this->date_reserve === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_reserve);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_reserve, true), $x);
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
     * Get the [delai_maximal_reserves] column value.
     * 
     * @return int
     */
    public function getDelaiMaximalReserves()
    {

        return $this->delai_maximal_reserves;
    }

    /**
     * Get the [detail_reserve] column value.
     * 
     * @return string
     */
    public function getDetailReserve()
    {

        return $this->detail_reserve;
    }

    /**
     * Get the [ordre_evenement] column value.
     * 
     * @return int
     */
    public function getOrdreEvenement()
    {

        return $this->ordre_evenement;
    }

    /**
     * Get the [demande] column value.
     * 
     * @return string
     */
    public function getDemande()
    {

        return $this->demande;
    }

    /**
     * Get the [id_parent] column value.
     * 
     * @return int
     */
    public function getIdParent()
    {

        return $this->id_parent;
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
     * Get the [numero] column value.
     * 
     * @return string
     */
    public function getNumero()
    {

        return $this->numero;
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_type_evenement] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdTypeEvenement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_evenement !== $v) {
            $this->id_type_evenement = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_TYPE_EVENEMENT;
        }

        if ($this->aCommonExecTypeEvenement !== null && $this->aCommonExecTypeEvenement->getId() !== $v) {
            $this->aCommonExecTypeEvenement = null;
        }


        return $this;
    } // setIdTypeEvenement()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_CONTRAT;
        }

        if ($this->aCommonExecContrat !== null && $this->aCommonExecContrat->getIdContrat() !== $v) {
            $this->aCommonExecContrat = null;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [id_contractant] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdContractant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contractant !== $v) {
            $this->id_contractant = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_CONTRACTANT;
        }

        if ($this->aCommonExecContractant !== null && $this->aCommonExecContractant->getId() !== $v) {
            $this->aCommonExecContractant = null;
        }


        return $this;
    } // setIdContractant()

    /**
     * Set the value of [id_phase] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdPhase($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_phase !== $v) {
            $this->id_phase = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_PHASE;
        }

        if ($this->aCommonExecPhase !== null && $this->aCommonExecPhase->getId() !== $v) {
            $this->aCommonExecPhase = null;
        }


        return $this;
    } // setIdPhase()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = CommonExecEvenementPeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Sets the value of [date_document] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDateDocument($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_document !== null || $dt !== null) {
            $currentDateAsString = ($this->date_document !== null && $tmpDt = new DateTime($this->date_document)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_document = $newDateAsString;
                $this->modifiedColumns[] = CommonExecEvenementPeer::DATE_DOCUMENT;
            }
        } // if either are not null


        return $this;
    } // setDateDocument()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [origine_piece] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setOriginePiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->origine_piece !== $v) {
            $this->origine_piece = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ORIGINE_PIECE;
        }


        return $this;
    } // setOriginePiece()

    /**
     * Sets the value of [date_validation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDateValidation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_validation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_validation !== null && $tmpDt = new DateTime($this->date_validation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_validation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecEvenementPeer::DATE_VALIDATION;
            }
        } // if either are not null


        return $this;
    } // setDateValidation()

    /**
     * Sets the value of [date_rejet] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDateRejet($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_rejet !== null || $dt !== null) {
            $currentDateAsString = ($this->date_rejet !== null && $tmpDt = new DateTime($this->date_rejet)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_rejet = $newDateAsString;
                $this->modifiedColumns[] = CommonExecEvenementPeer::DATE_REJET;
            }
        } // if either are not null


        return $this;
    } // setDateRejet()

    /**
     * Set the value of [id_agent_validation] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdAgentValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_validation !== $v) {
            $this->id_agent_validation = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_AGENT_VALIDATION;
        }


        return $this;
    } // setIdAgentValidation()

    /**
     * Set the value of [id_agent_rejet] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdAgentRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_rejet !== $v) {
            $this->id_agent_rejet = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_AGENT_REJET;
        }


        return $this;
    } // setIdAgentRejet()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecEvenementPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_AGENT_CREA;
        }


        return $this;
    } // setIdAgentCrea()

    /**
     * Sets the value of [date_modif] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = CommonExecEvenementPeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

    /**
     * Set the value of [id_agent_modif] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdAgentModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_modif !== $v) {
            $this->id_agent_modif = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_AGENT_MODIF;
        }


        return $this;
    } // setIdAgentModif()

    /**
     * Set the value of [id_parapheur] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_parapheur !== $v) {
            $this->id_parapheur = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_PARAPHEUR;
        }


        return $this;
    } // setIdParapheur()

    /**
     * Sets the value of [date_cloture_parapheur] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDateClotureParapheur($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_cloture_parapheur !== null || $dt !== null) {
            $currentDateAsString = ($this->date_cloture_parapheur !== null && $tmpDt = new DateTime($this->date_cloture_parapheur)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_cloture_parapheur = $newDateAsString;
                $this->modifiedColumns[] = CommonExecEvenementPeer::DATE_CLOTURE_PARAPHEUR;
            }
        } // if either are not null


        return $this;
    } // setDateClotureParapheur()

    /**
     * Set the value of [motif_rejet] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setMotifRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_rejet !== $v) {
            $this->motif_rejet = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::MOTIF_REJET;
        }


        return $this;
    } // setMotifRejet()

    /**
     * Set the value of [motif_darret] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setMotifDarret($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_darret !== $v) {
            $this->motif_darret = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::MOTIF_DARRET;
        }


        return $this;
    } // setMotifDarret()

    /**
     * Set the value of [type_reception] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setTypeReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_reception !== $v) {
            $this->type_reception = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::TYPE_RECEPTION;
        }


        return $this;
    } // setTypeReception()

    /**
     * Set the value of [porte_reception] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setPorteReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->porte_reception !== $v) {
            $this->porte_reception = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::PORTE_RECEPTION;
        }


        return $this;
    } // setPorteReception()

    /**
     * Set the value of [mode_prononce_reception] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setModePrononceReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode_prononce_reception !== $v) {
            $this->mode_prononce_reception = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION;
        }


        return $this;
    } // setModePrononceReception()

    /**
     * Set the value of [penalite_retard] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setPenaliteRetard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->penalite_retard !== $v) {
            $this->penalite_retard = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::PENALITE_RETARD;
        }


        return $this;
    } // setPenaliteRetard()

    /**
     * Set the value of [prestation_reception] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setPrestationReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prestation_reception !== $v) {
            $this->prestation_reception = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::PRESTATION_RECEPTION;
        }


        return $this;
    } // setPrestationReception()

    /**
     * Sets the value of [date_reserve] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDateReserve($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_reserve !== null || $dt !== null) {
            $currentDateAsString = ($this->date_reserve !== null && $tmpDt = new DateTime($this->date_reserve)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_reserve = $newDateAsString;
                $this->modifiedColumns[] = CommonExecEvenementPeer::DATE_RESERVE;
            }
        } // if either are not null


        return $this;
    } // setDateReserve()

    /**
     * Set the value of [delai_maximal_reserves] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDelaiMaximalReserves($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_maximal_reserves !== $v) {
            $this->delai_maximal_reserves = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::DELAI_MAXIMAL_RESERVES;
        }


        return $this;
    } // setDelaiMaximalReserves()

    /**
     * Set the value of [detail_reserve] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDetailReserve($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->detail_reserve !== $v) {
            $this->detail_reserve = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::DETAIL_RESERVE;
        }


        return $this;
    } // setDetailReserve()

    /**
     * Set the value of [ordre_evenement] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setOrdreEvenement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordre_evenement !== $v) {
            $this->ordre_evenement = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ORDRE_EVENEMENT;
        }


        return $this;
    } // setOrdreEvenement()

    /**
     * Set the value of [demande] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->demande !== $v) {
            $this->demande = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::DEMANDE;
        }


        return $this;
    } // setDemande()

    /**
     * Set the value of [id_parent] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdParent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_parent !== $v) {
            $this->id_parent = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_PARENT;
        }


        return $this;
    } // setIdParent()

    /**
     * Sets the value of [date_derniere_synchronisation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setDateDerniereSynchronisation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_derniere_synchronisation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_derniere_synchronisation !== null && $tmpDt = new DateTime($this->date_derniere_synchronisation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_derniere_synchronisation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecEvenementPeer::DATE_DERNIERE_SYNCHRONISATION;
            }
        } // if either are not null


        return $this;
    } // setDateDerniereSynchronisation()

    /**
     * Set the value of [numero] column.
     * 
     * @param string $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [id_facture] column.
     * 
     * @param int $v new value
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setIdFacture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_facture !== $v) {
            $this->id_facture = $v;
            $this->modifiedColumns[] = CommonExecEvenementPeer::ID_FACTURE;
        }


        return $this;
    } // setIdFacture()

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
            if ($this->delai_maximal_reserves !== 0) {
                return false;
            }

            if ($this->id_parent !== 0) {
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
            $this->id_type_evenement = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_contrat = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_contractant = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_phase = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->statut = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->date_document = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->commentaire = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->origine_piece = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->date_validation = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_rejet = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->id_agent_validation = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->id_agent_rejet = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->date_crea = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->id_agent_crea = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->date_modif = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->id_agent_modif = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->id_parapheur = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->date_cloture_parapheur = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->motif_rejet = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->motif_darret = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->type_reception = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->porte_reception = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->mode_prononce_reception = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->penalite_retard = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->prestation_reception = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->date_reserve = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->delai_maximal_reserves = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->detail_reserve = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->ordre_evenement = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->demande = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->id_parent = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->date_derniere_synchronisation = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->numero = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->id_facture = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 36; // 36 = CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecEvenement object", $e);
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

        if ($this->aCommonExecTypeEvenement !== null && $this->id_type_evenement !== $this->aCommonExecTypeEvenement->getId()) {
            $this->aCommonExecTypeEvenement = null;
        }
        if ($this->aCommonExecContrat !== null && $this->id_contrat !== $this->aCommonExecContrat->getIdContrat()) {
            $this->aCommonExecContrat = null;
        }
        if ($this->aCommonExecContractant !== null && $this->id_contractant !== $this->aCommonExecContractant->getId()) {
            $this->aCommonExecContractant = null;
        }
        if ($this->aCommonExecPhase !== null && $this->id_phase !== $this->aCommonExecPhase->getId()) {
            $this->aCommonExecPhase = null;
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
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecEvenementPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonExecContractant = null;
            $this->aCommonExecContrat = null;
            $this->aCommonExecPhase = null;
            $this->aCommonExecTypeEvenement = null;
            $this->collCommonExecPieceEvenements = null;

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
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecEvenementQuery::create()
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
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecEvenementPeer::addInstanceToPool($this);
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

            if ($this->aCommonExecPhase !== null) {
                if ($this->aCommonExecPhase->isModified() || $this->aCommonExecPhase->isNew()) {
                    $affectedRows += $this->aCommonExecPhase->save($con);
                }
                $this->setCommonExecPhase($this->aCommonExecPhase);
            }

            if ($this->aCommonExecTypeEvenement !== null) {
                if ($this->aCommonExecTypeEvenement->isModified() || $this->aCommonExecTypeEvenement->isNew()) {
                    $affectedRows += $this->aCommonExecTypeEvenement->save($con);
                }
                $this->setCommonExecTypeEvenement($this->aCommonExecTypeEvenement);
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

            if ($this->commonExecPieceEvenementsScheduledForDeletion !== null) {
                if (!$this->commonExecPieceEvenementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPieceEvenementsScheduledForDeletion as $commonExecPieceEvenement) {
                        // need to save related object because we set the relation to null
                        $commonExecPieceEvenement->save($con);
                    }
                    $this->commonExecPieceEvenementsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPieceEvenements !== null) {
                foreach ($this->collCommonExecPieceEvenements as $referrerFK) {
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

        $this->modifiedColumns[] = CommonExecEvenementPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecEvenementPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecEvenementPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_TYPE_EVENEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_evenement`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_CONTRACTANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contractant`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_PHASE)) {
            $modifiedColumns[':p' . $index++]  = '`id_phase`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = '`date_document`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ORIGINE_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`origine_piece`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`date_rejet`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_AGENT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_validation`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_AGENT_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_rejet`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`date_modif`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_AGENT_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_modif`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_parapheur`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_CLOTURE_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`date_cloture_parapheur`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::MOTIF_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`motif_rejet`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::MOTIF_DARRET)) {
            $modifiedColumns[':p' . $index++]  = '`motif_darret`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::TYPE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`type_reception`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::PORTE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`porte_reception`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`mode_prononce_reception`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::PENALITE_RETARD)) {
            $modifiedColumns[':p' . $index++]  = '`penalite_retard`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::PRESTATION_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`prestation_reception`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_RESERVE)) {
            $modifiedColumns[':p' . $index++]  = '`date_reserve`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DELAI_MAXIMAL_RESERVES)) {
            $modifiedColumns[':p' . $index++]  = '`delai_maximal_reserves`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DETAIL_RESERVE)) {
            $modifiedColumns[':p' . $index++]  = '`detail_reserve`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ORDRE_EVENEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`ordre_evenement`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`demande`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_PARENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_parent`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_DERNIERE_SYNCHRONISATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_derniere_synchronisation`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_facture`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_evenement` (%s) VALUES (%s)',
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
                    case '`id_type_evenement`':						
                        $stmt->bindValue($identifier, $this->id_type_evenement, PDO::PARAM_INT);
                        break;
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`id_contractant`':						
                        $stmt->bindValue($identifier, $this->id_contractant, PDO::PARAM_INT);
                        break;
                    case '`id_phase`':						
                        $stmt->bindValue($identifier, $this->id_phase, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`date`':						
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`date_document`':						
                        $stmt->bindValue($identifier, $this->date_document, PDO::PARAM_STR);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`origine_piece`':						
                        $stmt->bindValue($identifier, $this->origine_piece, PDO::PARAM_INT);
                        break;
                    case '`date_validation`':						
                        $stmt->bindValue($identifier, $this->date_validation, PDO::PARAM_STR);
                        break;
                    case '`date_rejet`':						
                        $stmt->bindValue($identifier, $this->date_rejet, PDO::PARAM_STR);
                        break;
                    case '`id_agent_validation`':						
                        $stmt->bindValue($identifier, $this->id_agent_validation, PDO::PARAM_INT);
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
                    case '`motif_darret`':						
                        $stmt->bindValue($identifier, $this->motif_darret, PDO::PARAM_STR);
                        break;
                    case '`type_reception`':						
                        $stmt->bindValue($identifier, $this->type_reception, PDO::PARAM_STR);
                        break;
                    case '`porte_reception`':						
                        $stmt->bindValue($identifier, $this->porte_reception, PDO::PARAM_STR);
                        break;
                    case '`mode_prononce_reception`':						
                        $stmt->bindValue($identifier, $this->mode_prononce_reception, PDO::PARAM_STR);
                        break;
                    case '`penalite_retard`':						
                        $stmt->bindValue($identifier, $this->penalite_retard, PDO::PARAM_STR);
                        break;
                    case '`prestation_reception`':						
                        $stmt->bindValue($identifier, $this->prestation_reception, PDO::PARAM_STR);
                        break;
                    case '`date_reserve`':						
                        $stmt->bindValue($identifier, $this->date_reserve, PDO::PARAM_STR);
                        break;
                    case '`delai_maximal_reserves`':						
                        $stmt->bindValue($identifier, $this->delai_maximal_reserves, PDO::PARAM_INT);
                        break;
                    case '`detail_reserve`':						
                        $stmt->bindValue($identifier, $this->detail_reserve, PDO::PARAM_STR);
                        break;
                    case '`ordre_evenement`':						
                        $stmt->bindValue($identifier, $this->ordre_evenement, PDO::PARAM_INT);
                        break;
                    case '`demande`':						
                        $stmt->bindValue($identifier, $this->demande, PDO::PARAM_STR);
                        break;
                    case '`id_parent`':						
                        $stmt->bindValue($identifier, $this->id_parent, PDO::PARAM_INT);
                        break;
                    case '`date_derniere_synchronisation`':						
                        $stmt->bindValue($identifier, $this->date_derniere_synchronisation, PDO::PARAM_STR);
                        break;
                    case '`numero`':						
                        $stmt->bindValue($identifier, $this->numero, PDO::PARAM_STR);
                        break;
                    case '`id_facture`':						
                        $stmt->bindValue($identifier, $this->id_facture, PDO::PARAM_INT);
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

            if ($this->aCommonExecPhase !== null) {
                if (!$this->aCommonExecPhase->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecPhase->getValidationFailures());
                }
            }

            if ($this->aCommonExecTypeEvenement !== null) {
                if (!$this->aCommonExecTypeEvenement->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecTypeEvenement->getValidationFailures());
                }
            }


            if (($retval = CommonExecEvenementPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecPieceEvenements !== null) {
                    foreach ($this->collCommonExecPieceEvenements as $referrerFK) {
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
        $pos = CommonExecEvenementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTypeEvenement();
                break;
            case 2:
                return $this->getIdContrat();
                break;
            case 3:
                return $this->getIdContractant();
                break;
            case 4:
                return $this->getIdPhase();
                break;
            case 5:
                return $this->getStatut();
                break;
            case 6:
                return $this->getDate();
                break;
            case 7:
                return $this->getDateDocument();
                break;
            case 8:
                return $this->getCommentaire();
                break;
            case 9:
                return $this->getOriginePiece();
                break;
            case 10:
                return $this->getDateValidation();
                break;
            case 11:
                return $this->getDateRejet();
                break;
            case 12:
                return $this->getIdAgentValidation();
                break;
            case 13:
                return $this->getIdAgentRejet();
                break;
            case 14:
                return $this->getDateCrea();
                break;
            case 15:
                return $this->getIdAgentCrea();
                break;
            case 16:
                return $this->getDateModif();
                break;
            case 17:
                return $this->getIdAgentModif();
                break;
            case 18:
                return $this->getIdParapheur();
                break;
            case 19:
                return $this->getDateClotureParapheur();
                break;
            case 20:
                return $this->getMotifRejet();
                break;
            case 21:
                return $this->getMotifDarret();
                break;
            case 22:
                return $this->getTypeReception();
                break;
            case 23:
                return $this->getPorteReception();
                break;
            case 24:
                return $this->getModePrononceReception();
                break;
            case 25:
                return $this->getPenaliteRetard();
                break;
            case 26:
                return $this->getPrestationReception();
                break;
            case 27:
                return $this->getDateReserve();
                break;
            case 28:
                return $this->getDelaiMaximalReserves();
                break;
            case 29:
                return $this->getDetailReserve();
                break;
            case 30:
                return $this->getOrdreEvenement();
                break;
            case 31:
                return $this->getDemande();
                break;
            case 32:
                return $this->getIdParent();
                break;
            case 33:
                return $this->getDateDerniereSynchronisation();
                break;
            case 34:
                return $this->getNumero();
                break;
            case 35:
                return $this->getIdFacture();
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
        if (isset($alreadyDumpedObjects['CommonExecEvenement'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecEvenement'][$this->getPrimaryKey()] = true;
        $keys = CommonExecEvenementPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdTypeEvenement(),
            $keys[2] => $this->getIdContrat(),
            $keys[3] => $this->getIdContractant(),
            $keys[4] => $this->getIdPhase(),
            $keys[5] => $this->getStatut(),
            $keys[6] => $this->getDate(),
            $keys[7] => $this->getDateDocument(),
            $keys[8] => $this->getCommentaire(),
            $keys[9] => $this->getOriginePiece(),
            $keys[10] => $this->getDateValidation(),
            $keys[11] => $this->getDateRejet(),
            $keys[12] => $this->getIdAgentValidation(),
            $keys[13] => $this->getIdAgentRejet(),
            $keys[14] => $this->getDateCrea(),
            $keys[15] => $this->getIdAgentCrea(),
            $keys[16] => $this->getDateModif(),
            $keys[17] => $this->getIdAgentModif(),
            $keys[18] => $this->getIdParapheur(),
            $keys[19] => $this->getDateClotureParapheur(),
            $keys[20] => $this->getMotifRejet(),
            $keys[21] => $this->getMotifDarret(),
            $keys[22] => $this->getTypeReception(),
            $keys[23] => $this->getPorteReception(),
            $keys[24] => $this->getModePrononceReception(),
            $keys[25] => $this->getPenaliteRetard(),
            $keys[26] => $this->getPrestationReception(),
            $keys[27] => $this->getDateReserve(),
            $keys[28] => $this->getDelaiMaximalReserves(),
            $keys[29] => $this->getDetailReserve(),
            $keys[30] => $this->getOrdreEvenement(),
            $keys[31] => $this->getDemande(),
            $keys[32] => $this->getIdParent(),
            $keys[33] => $this->getDateDerniereSynchronisation(),
            $keys[34] => $this->getNumero(),
            $keys[35] => $this->getIdFacture(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonExecContractant) {
                $result['CommonExecContractant'] = $this->aCommonExecContractant->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecContrat) {
                $result['CommonExecContrat'] = $this->aCommonExecContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecPhase) {
                $result['CommonExecPhase'] = $this->aCommonExecPhase->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecTypeEvenement) {
                $result['CommonExecTypeEvenement'] = $this->aCommonExecTypeEvenement->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonExecPieceEvenements) {
                $result['CommonExecPieceEvenements'] = $this->collCommonExecPieceEvenements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecEvenementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTypeEvenement($value);
                break;
            case 2:
                $this->setIdContrat($value);
                break;
            case 3:
                $this->setIdContractant($value);
                break;
            case 4:
                $this->setIdPhase($value);
                break;
            case 5:
                $this->setStatut($value);
                break;
            case 6:
                $this->setDate($value);
                break;
            case 7:
                $this->setDateDocument($value);
                break;
            case 8:
                $this->setCommentaire($value);
                break;
            case 9:
                $this->setOriginePiece($value);
                break;
            case 10:
                $this->setDateValidation($value);
                break;
            case 11:
                $this->setDateRejet($value);
                break;
            case 12:
                $this->setIdAgentValidation($value);
                break;
            case 13:
                $this->setIdAgentRejet($value);
                break;
            case 14:
                $this->setDateCrea($value);
                break;
            case 15:
                $this->setIdAgentCrea($value);
                break;
            case 16:
                $this->setDateModif($value);
                break;
            case 17:
                $this->setIdAgentModif($value);
                break;
            case 18:
                $this->setIdParapheur($value);
                break;
            case 19:
                $this->setDateClotureParapheur($value);
                break;
            case 20:
                $this->setMotifRejet($value);
                break;
            case 21:
                $this->setMotifDarret($value);
                break;
            case 22:
                $this->setTypeReception($value);
                break;
            case 23:
                $this->setPorteReception($value);
                break;
            case 24:
                $this->setModePrononceReception($value);
                break;
            case 25:
                $this->setPenaliteRetard($value);
                break;
            case 26:
                $this->setPrestationReception($value);
                break;
            case 27:
                $this->setDateReserve($value);
                break;
            case 28:
                $this->setDelaiMaximalReserves($value);
                break;
            case 29:
                $this->setDetailReserve($value);
                break;
            case 30:
                $this->setOrdreEvenement($value);
                break;
            case 31:
                $this->setDemande($value);
                break;
            case 32:
                $this->setIdParent($value);
                break;
            case 33:
                $this->setDateDerniereSynchronisation($value);
                break;
            case 34:
                $this->setNumero($value);
                break;
            case 35:
                $this->setIdFacture($value);
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
        $keys = CommonExecEvenementPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdTypeEvenement($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdContrat($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdContractant($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdPhase($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStatut($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDate($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateDocument($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCommentaire($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setOriginePiece($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateValidation($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateRejet($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdAgentValidation($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdAgentRejet($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateCrea($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdAgentCrea($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDateModif($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setIdAgentModif($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdParapheur($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateClotureParapheur($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMotifRejet($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMotifDarret($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setTypeReception($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setPorteReception($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setModePrononceReception($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPenaliteRetard($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setPrestationReception($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDateReserve($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDelaiMaximalReserves($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDetailReserve($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setOrdreEvenement($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDemande($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setIdParent($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDateDerniereSynchronisation($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setNumero($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setIdFacture($arr[$keys[35]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecEvenementPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecEvenementPeer::ID)) $criteria->add(CommonExecEvenementPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_TYPE_EVENEMENT)) $criteria->add(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, $this->id_type_evenement);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_CONTRAT)) $criteria->add(CommonExecEvenementPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_CONTRACTANT)) $criteria->add(CommonExecEvenementPeer::ID_CONTRACTANT, $this->id_contractant);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_PHASE)) $criteria->add(CommonExecEvenementPeer::ID_PHASE, $this->id_phase);
        if ($this->isColumnModified(CommonExecEvenementPeer::STATUT)) $criteria->add(CommonExecEvenementPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE)) $criteria->add(CommonExecEvenementPeer::DATE, $this->date);
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_DOCUMENT)) $criteria->add(CommonExecEvenementPeer::DATE_DOCUMENT, $this->date_document);
        if ($this->isColumnModified(CommonExecEvenementPeer::COMMENTAIRE)) $criteria->add(CommonExecEvenementPeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonExecEvenementPeer::ORIGINE_PIECE)) $criteria->add(CommonExecEvenementPeer::ORIGINE_PIECE, $this->origine_piece);
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_VALIDATION)) $criteria->add(CommonExecEvenementPeer::DATE_VALIDATION, $this->date_validation);
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_REJET)) $criteria->add(CommonExecEvenementPeer::DATE_REJET, $this->date_rejet);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_AGENT_VALIDATION)) $criteria->add(CommonExecEvenementPeer::ID_AGENT_VALIDATION, $this->id_agent_validation);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_AGENT_REJET)) $criteria->add(CommonExecEvenementPeer::ID_AGENT_REJET, $this->id_agent_rejet);
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_CREA)) $criteria->add(CommonExecEvenementPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_AGENT_CREA)) $criteria->add(CommonExecEvenementPeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_MODIF)) $criteria->add(CommonExecEvenementPeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_AGENT_MODIF)) $criteria->add(CommonExecEvenementPeer::ID_AGENT_MODIF, $this->id_agent_modif);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_PARAPHEUR)) $criteria->add(CommonExecEvenementPeer::ID_PARAPHEUR, $this->id_parapheur);
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_CLOTURE_PARAPHEUR)) $criteria->add(CommonExecEvenementPeer::DATE_CLOTURE_PARAPHEUR, $this->date_cloture_parapheur);
        if ($this->isColumnModified(CommonExecEvenementPeer::MOTIF_REJET)) $criteria->add(CommonExecEvenementPeer::MOTIF_REJET, $this->motif_rejet);
        if ($this->isColumnModified(CommonExecEvenementPeer::MOTIF_DARRET)) $criteria->add(CommonExecEvenementPeer::MOTIF_DARRET, $this->motif_darret);
        if ($this->isColumnModified(CommonExecEvenementPeer::TYPE_RECEPTION)) $criteria->add(CommonExecEvenementPeer::TYPE_RECEPTION, $this->type_reception);
        if ($this->isColumnModified(CommonExecEvenementPeer::PORTE_RECEPTION)) $criteria->add(CommonExecEvenementPeer::PORTE_RECEPTION, $this->porte_reception);
        if ($this->isColumnModified(CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION)) $criteria->add(CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION, $this->mode_prononce_reception);
        if ($this->isColumnModified(CommonExecEvenementPeer::PENALITE_RETARD)) $criteria->add(CommonExecEvenementPeer::PENALITE_RETARD, $this->penalite_retard);
        if ($this->isColumnModified(CommonExecEvenementPeer::PRESTATION_RECEPTION)) $criteria->add(CommonExecEvenementPeer::PRESTATION_RECEPTION, $this->prestation_reception);
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_RESERVE)) $criteria->add(CommonExecEvenementPeer::DATE_RESERVE, $this->date_reserve);
        if ($this->isColumnModified(CommonExecEvenementPeer::DELAI_MAXIMAL_RESERVES)) $criteria->add(CommonExecEvenementPeer::DELAI_MAXIMAL_RESERVES, $this->delai_maximal_reserves);
        if ($this->isColumnModified(CommonExecEvenementPeer::DETAIL_RESERVE)) $criteria->add(CommonExecEvenementPeer::DETAIL_RESERVE, $this->detail_reserve);
        if ($this->isColumnModified(CommonExecEvenementPeer::ORDRE_EVENEMENT)) $criteria->add(CommonExecEvenementPeer::ORDRE_EVENEMENT, $this->ordre_evenement);
        if ($this->isColumnModified(CommonExecEvenementPeer::DEMANDE)) $criteria->add(CommonExecEvenementPeer::DEMANDE, $this->demande);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_PARENT)) $criteria->add(CommonExecEvenementPeer::ID_PARENT, $this->id_parent);
        if ($this->isColumnModified(CommonExecEvenementPeer::DATE_DERNIERE_SYNCHRONISATION)) $criteria->add(CommonExecEvenementPeer::DATE_DERNIERE_SYNCHRONISATION, $this->date_derniere_synchronisation);
        if ($this->isColumnModified(CommonExecEvenementPeer::NUMERO)) $criteria->add(CommonExecEvenementPeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CommonExecEvenementPeer::ID_FACTURE)) $criteria->add(CommonExecEvenementPeer::ID_FACTURE, $this->id_facture);

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
        $criteria = new Criteria(CommonExecEvenementPeer::DATABASE_NAME);
        $criteria->add(CommonExecEvenementPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecEvenement (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTypeEvenement($this->getIdTypeEvenement());
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setIdContractant($this->getIdContractant());
        $copyObj->setIdPhase($this->getIdPhase());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDate($this->getDate());
        $copyObj->setDateDocument($this->getDateDocument());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setOriginePiece($this->getOriginePiece());
        $copyObj->setDateValidation($this->getDateValidation());
        $copyObj->setDateRejet($this->getDateRejet());
        $copyObj->setIdAgentValidation($this->getIdAgentValidation());
        $copyObj->setIdAgentRejet($this->getIdAgentRejet());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setDateModif($this->getDateModif());
        $copyObj->setIdAgentModif($this->getIdAgentModif());
        $copyObj->setIdParapheur($this->getIdParapheur());
        $copyObj->setDateClotureParapheur($this->getDateClotureParapheur());
        $copyObj->setMotifRejet($this->getMotifRejet());
        $copyObj->setMotifDarret($this->getMotifDarret());
        $copyObj->setTypeReception($this->getTypeReception());
        $copyObj->setPorteReception($this->getPorteReception());
        $copyObj->setModePrononceReception($this->getModePrononceReception());
        $copyObj->setPenaliteRetard($this->getPenaliteRetard());
        $copyObj->setPrestationReception($this->getPrestationReception());
        $copyObj->setDateReserve($this->getDateReserve());
        $copyObj->setDelaiMaximalReserves($this->getDelaiMaximalReserves());
        $copyObj->setDetailReserve($this->getDetailReserve());
        $copyObj->setOrdreEvenement($this->getOrdreEvenement());
        $copyObj->setDemande($this->getDemande());
        $copyObj->setIdParent($this->getIdParent());
        $copyObj->setDateDerniereSynchronisation($this->getDateDerniereSynchronisation());
        $copyObj->setNumero($this->getNumero());
        $copyObj->setIdFacture($this->getIdFacture());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonExecPieceEvenements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPieceEvenement($relObj->copy($deepCopy));
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
     * @return CommonExecEvenement Clone of current object.
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
     * @return CommonExecEvenementPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecEvenementPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonExecContractant object.
     *
     * @param   CommonExecContractant $v
     * @return CommonExecEvenement The current object (for fluent API support)
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
            $v->addCommonExecEvenement($this);
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
                $this->aCommonExecContractant->addCommonExecEvenements($this);
             */
        }

        return $this->aCommonExecContractant;
    }

    /**
     * Declares an association between this object and a CommonExecContrat object.
     *
     * @param   CommonExecContrat $v
     * @return CommonExecEvenement The current object (for fluent API support)
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
            $v->addCommonExecEvenement($this);
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
                $this->aCommonExecContrat->addCommonExecEvenements($this);
             */
        }

        return $this->aCommonExecContrat;
    }

    /**
     * Declares an association between this object and a CommonExecPhase object.
     *
     * @param   CommonExecPhase $v
     * @return CommonExecEvenement The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecPhase(CommonExecPhase $v = null)
    {
        if ($v === null) {
            $this->setIdPhase(NULL);
        } else {
            $this->setIdPhase($v->getId());
        }

        $this->aCommonExecPhase = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecPhase object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecEvenement($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecPhase object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecPhase The associated CommonExecPhase object.
     * @throws PropelException
     */
    public function getCommonExecPhase(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecPhase === null && ($this->id_phase !== null) && $doQuery) {
            $this->aCommonExecPhase = CommonExecPhaseQuery::create()->findPk($this->id_phase, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecPhase->addCommonExecEvenements($this);
             */
        }

        return $this->aCommonExecPhase;
    }

    /**
     * Declares an association between this object and a CommonExecTypeEvenement object.
     *
     * @param   CommonExecTypeEvenement $v
     * @return CommonExecEvenement The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecTypeEvenement(CommonExecTypeEvenement $v = null)
    {
        if ($v === null) {
            $this->setIdTypeEvenement(NULL);
        } else {
            $this->setIdTypeEvenement($v->getId());
        }

        $this->aCommonExecTypeEvenement = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecTypeEvenement object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecEvenement($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecTypeEvenement object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecTypeEvenement The associated CommonExecTypeEvenement object.
     * @throws PropelException
     */
    public function getCommonExecTypeEvenement(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecTypeEvenement === null && ($this->id_type_evenement !== null) && $doQuery) {
            $this->aCommonExecTypeEvenement = CommonExecTypeEvenementQuery::create()->findPk($this->id_type_evenement, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecTypeEvenement->addCommonExecEvenements($this);
             */
        }

        return $this->aCommonExecTypeEvenement;
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
        if ('CommonExecPieceEvenement' == $relationName) {
            $this->initCommonExecPieceEvenements();
        }
    }

    /**
     * Clears out the collCommonExecPieceEvenements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecEvenement The current object (for fluent API support)
     * @see        addCommonExecPieceEvenements()
     */
    public function clearCommonExecPieceEvenements()
    {
        $this->collCommonExecPieceEvenements = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPieceEvenementsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPieceEvenements collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPieceEvenements($v = true)
    {
        $this->collCommonExecPieceEvenementsPartial = $v;
    }

    /**
     * Initializes the collCommonExecPieceEvenements collection.
     *
     * By default this just sets the collCommonExecPieceEvenements collection to an empty array (like clearcollCommonExecPieceEvenements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPieceEvenements($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPieceEvenements && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPieceEvenements = new PropelObjectCollection();
        $this->collCommonExecPieceEvenements->setModel('CommonExecPieceEvenement');
    }

    /**
     * Gets an array of CommonExecPieceEvenement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecEvenement is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPieceEvenement[] List of CommonExecPieceEvenement objects
     * @throws PropelException
     */
    public function getCommonExecPieceEvenements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPieceEvenementsPartial && !$this->isNew();
        if (null === $this->collCommonExecPieceEvenements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieceEvenements) {
                // return empty collection
                $this->initCommonExecPieceEvenements();
            } else {
                $collCommonExecPieceEvenements = CommonExecPieceEvenementQuery::create(null, $criteria)
                    ->filterByCommonExecEvenement($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPieceEvenementsPartial && count($collCommonExecPieceEvenements)) {
                      $this->initCommonExecPieceEvenements(false);

                      foreach ($collCommonExecPieceEvenements as $obj) {
                        if (false == $this->collCommonExecPieceEvenements->contains($obj)) {
                          $this->collCommonExecPieceEvenements->append($obj);
                        }
                      }

                      $this->collCommonExecPieceEvenementsPartial = true;
                    }

                    $collCommonExecPieceEvenements->getInternalIterator()->rewind();

                    return $collCommonExecPieceEvenements;
                }

                if ($partial && $this->collCommonExecPieceEvenements) {
                    foreach ($this->collCommonExecPieceEvenements as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPieceEvenements[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPieceEvenements = $collCommonExecPieceEvenements;
                $this->collCommonExecPieceEvenementsPartial = false;
            }
        }

        return $this->collCommonExecPieceEvenements;
    }

    /**
     * Sets a collection of CommonExecPieceEvenement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPieceEvenements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function setCommonExecPieceEvenements(PropelCollection $commonExecPieceEvenements, PropelPDO $con = null)
    {
        $commonExecPieceEvenementsToDelete = $this->getCommonExecPieceEvenements(new Criteria(), $con)->diff($commonExecPieceEvenements);


        $this->commonExecPieceEvenementsScheduledForDeletion = $commonExecPieceEvenementsToDelete;

        foreach ($commonExecPieceEvenementsToDelete as $commonExecPieceEvenementRemoved) {
            $commonExecPieceEvenementRemoved->setCommonExecEvenement(null);
        }

        $this->collCommonExecPieceEvenements = null;
        foreach ($commonExecPieceEvenements as $commonExecPieceEvenement) {
            $this->addCommonExecPieceEvenement($commonExecPieceEvenement);
        }

        $this->collCommonExecPieceEvenements = $commonExecPieceEvenements;
        $this->collCommonExecPieceEvenementsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPieceEvenement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPieceEvenement objects.
     * @throws PropelException
     */
    public function countCommonExecPieceEvenements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPieceEvenementsPartial && !$this->isNew();
        if (null === $this->collCommonExecPieceEvenements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieceEvenements) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPieceEvenements());
            }
            $query = CommonExecPieceEvenementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecEvenement($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceEvenements);
    }

    /**
     * Method called to associate a CommonExecPieceEvenement object to this object
     * through the CommonExecPieceEvenement foreign key attribute.
     *
     * @param   CommonExecPieceEvenement $l CommonExecPieceEvenement
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function addCommonExecPieceEvenement(CommonExecPieceEvenement $l)
    {
        if ($this->collCommonExecPieceEvenements === null) {
            $this->initCommonExecPieceEvenements();
            $this->collCommonExecPieceEvenementsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPieceEvenements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPieceEvenement($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPieceEvenement $commonExecPieceEvenement The commonExecPieceEvenement object to add.
     */
    protected function doAddCommonExecPieceEvenement($commonExecPieceEvenement)
    {
        $this->collCommonExecPieceEvenements[]= $commonExecPieceEvenement;
        $commonExecPieceEvenement->setCommonExecEvenement($this);
    }

    /**
     * @param	CommonExecPieceEvenement $commonExecPieceEvenement The commonExecPieceEvenement object to remove.
     * @return CommonExecEvenement The current object (for fluent API support)
     */
    public function removeCommonExecPieceEvenement($commonExecPieceEvenement)
    {
        if ($this->getCommonExecPieceEvenements()->contains($commonExecPieceEvenement)) {
            $this->collCommonExecPieceEvenements->remove($this->collCommonExecPieceEvenements->search($commonExecPieceEvenement));
            if (null === $this->commonExecPieceEvenementsScheduledForDeletion) {
                $this->commonExecPieceEvenementsScheduledForDeletion = clone $this->collCommonExecPieceEvenements;
                $this->commonExecPieceEvenementsScheduledForDeletion->clear();
            }
            $this->commonExecPieceEvenementsScheduledForDeletion[]= clone $commonExecPieceEvenement;
            $commonExecPieceEvenement->setCommonExecEvenement(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecEvenement is new, it will return
     * an empty collection; or if this CommonExecEvenement has previously
     * been saved, it will retrieve related CommonExecPieceEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecEvenement.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceEvenement[] List of CommonExecPieceEvenement objects
     */
    public function getCommonExecPieceEvenementsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPieceEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecEvenement is new, it will return
     * an empty collection; or if this CommonExecEvenement has previously
     * been saved, it will retrieve related CommonExecPieceEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecEvenement.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceEvenement[] List of CommonExecPieceEvenement objects
     */
    public function getCommonExecPieceEvenementsJoinCommonExecTypePieceEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypePieceEvenement', $join_behavior);

        return $this->getCommonExecPieceEvenements($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_type_evenement = null;
        $this->id_contrat = null;
        $this->id_contractant = null;
        $this->id_phase = null;
        $this->statut = null;
        $this->date = null;
        $this->date_document = null;
        $this->commentaire = null;
        $this->origine_piece = null;
        $this->date_validation = null;
        $this->date_rejet = null;
        $this->id_agent_validation = null;
        $this->id_agent_rejet = null;
        $this->date_crea = null;
        $this->id_agent_crea = null;
        $this->date_modif = null;
        $this->id_agent_modif = null;
        $this->id_parapheur = null;
        $this->date_cloture_parapheur = null;
        $this->motif_rejet = null;
        $this->motif_darret = null;
        $this->type_reception = null;
        $this->porte_reception = null;
        $this->mode_prononce_reception = null;
        $this->penalite_retard = null;
        $this->prestation_reception = null;
        $this->date_reserve = null;
        $this->delai_maximal_reserves = null;
        $this->detail_reserve = null;
        $this->ordre_evenement = null;
        $this->demande = null;
        $this->id_parent = null;
        $this->date_derniere_synchronisation = null;
        $this->numero = null;
        $this->id_facture = null;
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
            if ($this->collCommonExecPieceEvenements) {
                foreach ($this->collCommonExecPieceEvenements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonExecContractant instanceof Persistent) {
              $this->aCommonExecContractant->clearAllReferences($deep);
            }
            if ($this->aCommonExecContrat instanceof Persistent) {
              $this->aCommonExecContrat->clearAllReferences($deep);
            }
            if ($this->aCommonExecPhase instanceof Persistent) {
              $this->aCommonExecPhase->clearAllReferences($deep);
            }
            if ($this->aCommonExecTypeEvenement instanceof Persistent) {
              $this->aCommonExecTypeEvenement->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecPieceEvenements instanceof PropelCollection) {
            $this->collCommonExecPieceEvenements->clearIterator();
        }
        $this->collCommonExecPieceEvenements = null;
        $this->aCommonExecContractant = null;
        $this->aCommonExecContrat = null;
        $this->aCommonExecPhase = null;
        $this->aCommonExecTypeEvenement = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecEvenementPeer::DEFAULT_STRING_FORMAT);
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
