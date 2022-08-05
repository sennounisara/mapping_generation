<?php


/**
 * Base class that represents a row from the 'exec_facture' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecFacture extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecFacturePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecFacturePeer
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
     * The value for the intitule field.
     * @var        string
     */
    protected $intitule;

    /**
     * The value for the numero field.
     * @var        string
     */
    protected $numero;

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
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the date_depot field.
     * @var        string
     */
    protected $date_depot;

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
     * The value for the montant_a_paye_ht field.
     * @var        double
     */
    protected $montant_a_paye_ht;

    /**
     * The value for the montant_a_paye_ttc field.
     * @var        double
     */
    protected $montant_a_paye_ttc;

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
     * The value for the numero_workflow field.
     * @var        string
     */
    protected $numero_workflow;

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
     * The value for the id_entreprise_modif field.
     * @var        int
     */
    protected $id_entreprise_modif;

    /**
     * The value for the date_modif field.
     * @var        string
     */
    protected $date_modif;

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
     * The value for the montant_retenue_garantie field.
     * @var        double
     */
    protected $montant_retenue_garantie;

    /**
     * The value for the motif_rejet field.
     * @var        string
     */
    protected $motif_rejet;

    /**
     * The value for the origine field.
     * @var        boolean
     */
    protected $origine;

    /**
     * The value for the validation_via_exec field.
     * @var        boolean
     */
    protected $validation_via_exec;

    /**
     * The value for the date_paiement field.
     * @var        string
     */
    protected $date_paiement;

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
     * @var        CommonExecContractant
     */
    protected $aCommonExecContractant;

    /**
     * @var        CommonExecContrat
     */
    protected $aCommonExecContrat;

    /**
     * @var        CommonEntreprise
     */
    protected $aCommonEntrepriseRelatedByIdEntrepriseCrea;

    /**
     * @var        CommonEntreprise
     */
    protected $aCommonEntrepriseRelatedByIdEntrepriseModif;

    /**
     * @var        PropelObjectCollection|CommonExecDpFacture[] Collection to store aggregation of CommonExecDpFacture objects.
     */
    protected $collCommonExecDpFactures;
    protected $collCommonExecDpFacturesPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPieceFacture[] Collection to store aggregation of CommonExecPieceFacture objects.
     */
    protected $collCommonExecPieceFactures;
    protected $collCommonExecPieceFacturesPartial;

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
    protected $commonExecDpFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPieceFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecRepartitionsScheduledForDeletion = null;

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
     * Get the [intitule] column value.
     * 
     * @return string
     */
    public function getIntitule()
    {

        return $this->intitule;
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
     * Get the [statut] column value.
     * 
     * @return int
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Get the [optionally formatted] temporal [date_depot] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDepot($format = 'Y-m-d H:i:s')
    {
        if ($this->date_depot === null) {
            return null;
        }

        if ($this->date_depot === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_depot);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_depot, true), $x);
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
     * Get the [montant_a_paye_ht] column value.
     * 
     * @return double
     */
    public function getMontantAPayeHt()
    {

        return $this->montant_a_paye_ht;
    }

    /**
     * Get the [montant_a_paye_ttc] column value.
     * 
     * @return double
     */
    public function getMontantAPayeTtc()
    {

        return $this->montant_a_paye_ttc;
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
     * Get the [numero_workflow] column value.
     * 
     * @return string
     */
    public function getNumeroWorkflow()
    {

        return $this->numero_workflow;
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
     * Get the [id_entreprise_modif] column value.
     * 
     * @return int
     */
    public function getIdEntrepriseModif()
    {

        return $this->id_entreprise_modif;
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
     * Get the [montant_retenue_garantie] column value.
     * 
     * @return double
     */
    public function getMontantRetenueGarantie()
    {

        return $this->montant_retenue_garantie;
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
     * Get the [origine] column value.
     * 
     * @return boolean
     */
    public function getOrigine()
    {

        return $this->origine;
    }

    /**
     * Get the [validation_via_exec] column value.
     * 
     * @return boolean
     */
    public function getValidationViaExec()
    {

        return $this->validation_via_exec;
    }

    /**
     * Get the [optionally formatted] temporal [date_paiement] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatePaiement($format = 'Y-m-d H:i:s')
    {
        if ($this->date_paiement === null) {
            return null;
        }

        if ($this->date_paiement === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_paiement);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_paiement, true), $x);
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
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::INTITULE;
        }


        return $this;
    } // setIntitule()

    /**
     * Set the value of [numero] column.
     * 
     * @param string $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ID_CONTRAT;
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
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setIdContractant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contractant !== $v) {
            $this->id_contractant = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ID_CONTRACTANT;
        }

        if ($this->aCommonExecContractant !== null && $this->aCommonExecContractant->getId() !== $v) {
            $this->aCommonExecContractant = null;
        }


        return $this;
    } // setIdContractant()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Sets the value of [date_depot] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setDateDepot($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_depot !== null || $dt !== null) {
            $currentDateAsString = ($this->date_depot !== null && $tmpDt = new DateTime($this->date_depot)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_depot = $newDateAsString;
                $this->modifiedColumns[] = CommonExecFacturePeer::DATE_DEPOT;
            }
        } // if either are not null


        return $this;
    } // setDateDepot()

    /**
     * Sets the value of [date_validation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setDateValidation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_validation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_validation !== null && $tmpDt = new DateTime($this->date_validation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_validation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecFacturePeer::DATE_VALIDATION;
            }
        } // if either are not null


        return $this;
    } // setDateValidation()

    /**
     * Set the value of [id_agent_validation] column.
     * 
     * @param int $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setIdAgentValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_validation !== $v) {
            $this->id_agent_validation = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ID_AGENT_VALIDATION;
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
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setDateRejet($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_rejet !== null || $dt !== null) {
            $currentDateAsString = ($this->date_rejet !== null && $tmpDt = new DateTime($this->date_rejet)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_rejet = $newDateAsString;
                $this->modifiedColumns[] = CommonExecFacturePeer::DATE_REJET;
            }
        } // if either are not null


        return $this;
    } // setDateRejet()

    /**
     * Set the value of [id_agent_rejet] column.
     * 
     * @param int $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setIdAgentRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_rejet !== $v) {
            $this->id_agent_rejet = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ID_AGENT_REJET;
        }

        if ($this->aCommonAgentRelatedByIdAgentRejet !== null && $this->aCommonAgentRelatedByIdAgentRejet->getId() !== $v) {
            $this->aCommonAgentRelatedByIdAgentRejet = null;
        }


        return $this;
    } // setIdAgentRejet()

    /**
     * Set the value of [montant_facture_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setMontantFactureHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_facture_ht !== $v) {
            $this->montant_facture_ht = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::MONTANT_FACTURE_HT;
        }


        return $this;
    } // setMontantFactureHt()

    /**
     * Set the value of [montant_facture_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setMontantFactureTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_facture_ttc !== $v) {
            $this->montant_facture_ttc = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::MONTANT_FACTURE_TTC;
        }


        return $this;
    } // setMontantFactureTtc()

    /**
     * Set the value of [montant_a_paye_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setMontantAPayeHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_a_paye_ht !== $v) {
            $this->montant_a_paye_ht = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::MONTANT_A_PAYE_HT;
        }


        return $this;
    } // setMontantAPayeHt()

    /**
     * Set the value of [montant_a_paye_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setMontantAPayeTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_a_paye_ttc !== $v) {
            $this->montant_a_paye_ttc = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::MONTANT_A_PAYE_TTC;
        }


        return $this;
    } // setMontantAPayeTtc()

    /**
     * Set the value of [montant_paye_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setMontantPayeHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_paye_ht !== $v) {
            $this->montant_paye_ht = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::MONTANT_PAYE_HT;
        }


        return $this;
    } // setMontantPayeHt()

    /**
     * Set the value of [montant_paye_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setMontantPayeTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_paye_ttc !== $v) {
            $this->montant_paye_ttc = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::MONTANT_PAYE_TTC;
        }


        return $this;
    } // setMontantPayeTtc()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [origine_piece] column.
     * 
     * @param int $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setOriginePiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->origine_piece !== $v) {
            $this->origine_piece = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ORIGINE_PIECE;
        }


        return $this;
    } // setOriginePiece()

    /**
     * Set the value of [numero_workflow] column.
     * 
     * @param string $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setNumeroWorkflow($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_workflow !== $v) {
            $this->numero_workflow = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::NUMERO_WORKFLOW;
        }


        return $this;
    } // setNumeroWorkflow()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ID_AGENT_CREA;
        }

        if ($this->aCommonAgentRelatedByIdAgentCrea !== null && $this->aCommonAgentRelatedByIdAgentCrea->getId() !== $v) {
            $this->aCommonAgentRelatedByIdAgentCrea = null;
        }


        return $this;
    } // setIdAgentCrea()

    /**
     * Set the value of [id_entreprise_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setIdEntrepriseCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise_crea !== $v) {
            $this->id_entreprise_crea = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ID_ENTREPRISE_CREA;
        }

        if ($this->aCommonEntrepriseRelatedByIdEntrepriseCrea !== null && $this->aCommonEntrepriseRelatedByIdEntrepriseCrea->getId() !== $v) {
            $this->aCommonEntrepriseRelatedByIdEntrepriseCrea = null;
        }


        return $this;
    } // setIdEntrepriseCrea()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecFacturePeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_agent_modif] column.
     * 
     * @param int $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setIdAgentModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_modif !== $v) {
            $this->id_agent_modif = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ID_AGENT_MODIF;
        }

        if ($this->aCommonAgentRelatedByIdAgentModif !== null && $this->aCommonAgentRelatedByIdAgentModif->getId() !== $v) {
            $this->aCommonAgentRelatedByIdAgentModif = null;
        }


        return $this;
    } // setIdAgentModif()

    /**
     * Set the value of [id_entreprise_modif] column.
     * 
     * @param int $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setIdEntrepriseModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise_modif !== $v) {
            $this->id_entreprise_modif = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ID_ENTREPRISE_MODIF;
        }

        if ($this->aCommonEntrepriseRelatedByIdEntrepriseModif !== null && $this->aCommonEntrepriseRelatedByIdEntrepriseModif->getId() !== $v) {
            $this->aCommonEntrepriseRelatedByIdEntrepriseModif = null;
        }


        return $this;
    } // setIdEntrepriseModif()

    /**
     * Sets the value of [date_modif] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = CommonExecFacturePeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

    /**
     * Set the value of [id_parapheur] column.
     * 
     * @param int $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setIdParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_parapheur !== $v) {
            $this->id_parapheur = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ID_PARAPHEUR;
        }


        return $this;
    } // setIdParapheur()

    /**
     * Sets the value of [date_cloture_parapheur] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setDateClotureParapheur($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_cloture_parapheur !== null || $dt !== null) {
            $currentDateAsString = ($this->date_cloture_parapheur !== null && $tmpDt = new DateTime($this->date_cloture_parapheur)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_cloture_parapheur = $newDateAsString;
                $this->modifiedColumns[] = CommonExecFacturePeer::DATE_CLOTURE_PARAPHEUR;
            }
        } // if either are not null


        return $this;
    } // setDateClotureParapheur()

    /**
     * Set the value of [montant_retenue_garantie] column.
     * 
     * @param double $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setMontantRetenueGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_retenue_garantie !== $v) {
            $this->montant_retenue_garantie = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::MONTANT_RETENUE_GARANTIE;
        }


        return $this;
    } // setMontantRetenueGarantie()

    /**
     * Set the value of [motif_rejet] column.
     * 
     * @param string $v new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setMotifRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_rejet !== $v) {
            $this->motif_rejet = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::MOTIF_REJET;
        }


        return $this;
    } // setMotifRejet()

    /**
     * Sets the value of the [origine] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setOrigine($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->origine !== $v) {
            $this->origine = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::ORIGINE;
        }


        return $this;
    } // setOrigine()

    /**
     * Sets the value of the [validation_via_exec] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setValidationViaExec($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->validation_via_exec !== $v) {
            $this->validation_via_exec = $v;
            $this->modifiedColumns[] = CommonExecFacturePeer::VALIDATION_VIA_EXEC;
        }


        return $this;
    } // setValidationViaExec()

    /**
     * Sets the value of [date_paiement] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setDatePaiement($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_paiement !== null || $dt !== null) {
            $currentDateAsString = ($this->date_paiement !== null && $tmpDt = new DateTime($this->date_paiement)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_paiement = $newDateAsString;
                $this->modifiedColumns[] = CommonExecFacturePeer::DATE_PAIEMENT;
            }
        } // if either are not null


        return $this;
    } // setDatePaiement()

    /**
     * Sets the value of [date_derniere_synchronisation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setDateDerniereSynchronisation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_derniere_synchronisation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_derniere_synchronisation !== null && $tmpDt = new DateTime($this->date_derniere_synchronisation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_derniere_synchronisation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecFacturePeer::DATE_DERNIERE_SYNCHRONISATION;
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
            $this->intitule = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->numero = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_contrat = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_contractant = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->statut = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->date_depot = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->date_validation = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->id_agent_validation = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->date_rejet = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->id_agent_rejet = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->montant_facture_ht = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->montant_facture_ttc = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->montant_a_paye_ht = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->montant_a_paye_ttc = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
            $this->montant_paye_ht = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->montant_paye_ttc = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->commentaire = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->origine_piece = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->numero_workflow = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->id_agent_crea = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->id_entreprise_crea = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->date_crea = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->id_agent_modif = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->id_entreprise_modif = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->date_modif = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->id_parapheur = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->date_cloture_parapheur = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->montant_retenue_garantie = ($row[$startcol + 28] !== null) ? (double) $row[$startcol + 28] : null;
            $this->motif_rejet = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->origine = ($row[$startcol + 30] !== null) ? (boolean) $row[$startcol + 30] : null;
            $this->validation_via_exec = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
            $this->date_paiement = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->date_derniere_synchronisation = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 34; // 34 = CommonExecFacturePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecFacture object", $e);
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
        if ($this->aCommonExecContractant !== null && $this->id_contractant !== $this->aCommonExecContractant->getId()) {
            $this->aCommonExecContractant = null;
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
        if ($this->aCommonEntrepriseRelatedByIdEntrepriseCrea !== null && $this->id_entreprise_crea !== $this->aCommonEntrepriseRelatedByIdEntrepriseCrea->getId()) {
            $this->aCommonEntrepriseRelatedByIdEntrepriseCrea = null;
        }
        if ($this->aCommonAgentRelatedByIdAgentModif !== null && $this->id_agent_modif !== $this->aCommonAgentRelatedByIdAgentModif->getId()) {
            $this->aCommonAgentRelatedByIdAgentModif = null;
        }
        if ($this->aCommonEntrepriseRelatedByIdEntrepriseModif !== null && $this->id_entreprise_modif !== $this->aCommonEntrepriseRelatedByIdEntrepriseModif->getId()) {
            $this->aCommonEntrepriseRelatedByIdEntrepriseModif = null;
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
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecFacturePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $this->aCommonExecContractant = null;
            $this->aCommonExecContrat = null;
            $this->aCommonEntrepriseRelatedByIdEntrepriseCrea = null;
            $this->aCommonEntrepriseRelatedByIdEntrepriseModif = null;
            $this->collCommonExecDpFactures = null;

            $this->collCommonExecPieceFactures = null;

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
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecFactureQuery::create()
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
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecFacturePeer::addInstanceToPool($this);
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

            if ($this->aCommonEntrepriseRelatedByIdEntrepriseCrea !== null) {
                if ($this->aCommonEntrepriseRelatedByIdEntrepriseCrea->isModified() || $this->aCommonEntrepriseRelatedByIdEntrepriseCrea->isNew()) {
                    $affectedRows += $this->aCommonEntrepriseRelatedByIdEntrepriseCrea->save($con);
                }
                $this->setCommonEntrepriseRelatedByIdEntrepriseCrea($this->aCommonEntrepriseRelatedByIdEntrepriseCrea);
            }

            if ($this->aCommonEntrepriseRelatedByIdEntrepriseModif !== null) {
                if ($this->aCommonEntrepriseRelatedByIdEntrepriseModif->isModified() || $this->aCommonEntrepriseRelatedByIdEntrepriseModif->isNew()) {
                    $affectedRows += $this->aCommonEntrepriseRelatedByIdEntrepriseModif->save($con);
                }
                $this->setCommonEntrepriseRelatedByIdEntrepriseModif($this->aCommonEntrepriseRelatedByIdEntrepriseModif);
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

            if ($this->commonExecDpFacturesScheduledForDeletion !== null) {
                if (!$this->commonExecDpFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecDpFacturesScheduledForDeletion as $commonExecDpFacture) {
                        // need to save related object because we set the relation to null
                        $commonExecDpFacture->save($con);
                    }
                    $this->commonExecDpFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecDpFactures !== null) {
                foreach ($this->collCommonExecDpFactures as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecPieceFacturesScheduledForDeletion !== null) {
                if (!$this->commonExecPieceFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPieceFacturesScheduledForDeletion as $commonExecPieceFacture) {
                        // need to save related object because we set the relation to null
                        $commonExecPieceFacture->save($con);
                    }
                    $this->commonExecPieceFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPieceFactures !== null) {
                foreach ($this->collCommonExecPieceFactures as $referrerFK) {
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

        $this->modifiedColumns[] = CommonExecFacturePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecFacturePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecFacturePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`intitule`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ID_CONTRACTANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contractant`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`date_depot`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ID_AGENT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_validation`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`date_rejet`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ID_AGENT_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_rejet`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_FACTURE_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_facture_ht`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_FACTURE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_facture_ttc`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_A_PAYE_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_a_paye_ht`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_A_PAYE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_a_paye_ttc`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_PAYE_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_paye_ht`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_PAYE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_paye_ttc`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ORIGINE_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`origine_piece`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::NUMERO_WORKFLOW)) {
            $modifiedColumns[':p' . $index++]  = '`numero_workflow`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ID_ENTREPRISE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise_crea`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ID_AGENT_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_modif`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ID_ENTREPRISE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise_modif`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`date_modif`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ID_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_parapheur`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_CLOTURE_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`date_cloture_parapheur`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_RETENUE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_retenue_garantie`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::MOTIF_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`motif_rejet`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::ORIGINE)) {
            $modifiedColumns[':p' . $index++]  = '`origine`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::VALIDATION_VIA_EXEC)) {
            $modifiedColumns[':p' . $index++]  = '`validation_via_exec`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_PAIEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`date_paiement`';
        }
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_DERNIERE_SYNCHRONISATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_derniere_synchronisation`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_facture` (%s) VALUES (%s)',
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
                    case '`intitule`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
                        break;
                    case '`numero`':						
                        $stmt->bindValue($identifier, $this->numero, PDO::PARAM_STR);
                        break;
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`id_contractant`':						
                        $stmt->bindValue($identifier, $this->id_contractant, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`date_depot`':						
                        $stmt->bindValue($identifier, $this->date_depot, PDO::PARAM_STR);
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
                    case '`montant_facture_ht`':						
                        $stmt->bindValue($identifier, $this->montant_facture_ht, PDO::PARAM_STR);
                        break;
                    case '`montant_facture_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_facture_ttc, PDO::PARAM_STR);
                        break;
                    case '`montant_a_paye_ht`':						
                        $stmt->bindValue($identifier, $this->montant_a_paye_ht, PDO::PARAM_STR);
                        break;
                    case '`montant_a_paye_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_a_paye_ttc, PDO::PARAM_STR);
                        break;
                    case '`montant_paye_ht`':						
                        $stmt->bindValue($identifier, $this->montant_paye_ht, PDO::PARAM_STR);
                        break;
                    case '`montant_paye_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_paye_ttc, PDO::PARAM_STR);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`origine_piece`':						
                        $stmt->bindValue($identifier, $this->origine_piece, PDO::PARAM_INT);
                        break;
                    case '`numero_workflow`':						
                        $stmt->bindValue($identifier, $this->numero_workflow, PDO::PARAM_STR);
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
                    case '`id_entreprise_modif`':						
                        $stmt->bindValue($identifier, $this->id_entreprise_modif, PDO::PARAM_INT);
                        break;
                    case '`date_modif`':						
                        $stmt->bindValue($identifier, $this->date_modif, PDO::PARAM_STR);
                        break;
                    case '`id_parapheur`':						
                        $stmt->bindValue($identifier, $this->id_parapheur, PDO::PARAM_INT);
                        break;
                    case '`date_cloture_parapheur`':						
                        $stmt->bindValue($identifier, $this->date_cloture_parapheur, PDO::PARAM_STR);
                        break;
                    case '`montant_retenue_garantie`':						
                        $stmt->bindValue($identifier, $this->montant_retenue_garantie, PDO::PARAM_STR);
                        break;
                    case '`motif_rejet`':						
                        $stmt->bindValue($identifier, $this->motif_rejet, PDO::PARAM_STR);
                        break;
                    case '`origine`':
                        $stmt->bindValue($identifier, (int) $this->origine, PDO::PARAM_INT);
                        break;
                    case '`validation_via_exec`':
                        $stmt->bindValue($identifier, (int) $this->validation_via_exec, PDO::PARAM_INT);
                        break;
                    case '`date_paiement`':						
                        $stmt->bindValue($identifier, $this->date_paiement, PDO::PARAM_STR);
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

            if ($this->aCommonEntrepriseRelatedByIdEntrepriseCrea !== null) {
                if (!$this->aCommonEntrepriseRelatedByIdEntrepriseCrea->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonEntrepriseRelatedByIdEntrepriseCrea->getValidationFailures());
                }
            }

            if ($this->aCommonEntrepriseRelatedByIdEntrepriseModif !== null) {
                if (!$this->aCommonEntrepriseRelatedByIdEntrepriseModif->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonEntrepriseRelatedByIdEntrepriseModif->getValidationFailures());
                }
            }


            if (($retval = CommonExecFacturePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecDpFactures !== null) {
                    foreach ($this->collCommonExecDpFactures as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecPieceFactures !== null) {
                    foreach ($this->collCommonExecPieceFactures as $referrerFK) {
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
        $pos = CommonExecFacturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIntitule();
                break;
            case 2:
                return $this->getNumero();
                break;
            case 3:
                return $this->getIdContrat();
                break;
            case 4:
                return $this->getIdContractant();
                break;
            case 5:
                return $this->getStatut();
                break;
            case 6:
                return $this->getDateDepot();
                break;
            case 7:
                return $this->getDateValidation();
                break;
            case 8:
                return $this->getIdAgentValidation();
                break;
            case 9:
                return $this->getDateRejet();
                break;
            case 10:
                return $this->getIdAgentRejet();
                break;
            case 11:
                return $this->getMontantFactureHt();
                break;
            case 12:
                return $this->getMontantFactureTtc();
                break;
            case 13:
                return $this->getMontantAPayeHt();
                break;
            case 14:
                return $this->getMontantAPayeTtc();
                break;
            case 15:
                return $this->getMontantPayeHt();
                break;
            case 16:
                return $this->getMontantPayeTtc();
                break;
            case 17:
                return $this->getCommentaire();
                break;
            case 18:
                return $this->getOriginePiece();
                break;
            case 19:
                return $this->getNumeroWorkflow();
                break;
            case 20:
                return $this->getIdAgentCrea();
                break;
            case 21:
                return $this->getIdEntrepriseCrea();
                break;
            case 22:
                return $this->getDateCrea();
                break;
            case 23:
                return $this->getIdAgentModif();
                break;
            case 24:
                return $this->getIdEntrepriseModif();
                break;
            case 25:
                return $this->getDateModif();
                break;
            case 26:
                return $this->getIdParapheur();
                break;
            case 27:
                return $this->getDateClotureParapheur();
                break;
            case 28:
                return $this->getMontantRetenueGarantie();
                break;
            case 29:
                return $this->getMotifRejet();
                break;
            case 30:
                return $this->getOrigine();
                break;
            case 31:
                return $this->getValidationViaExec();
                break;
            case 32:
                return $this->getDatePaiement();
                break;
            case 33:
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
        if (isset($alreadyDumpedObjects['CommonExecFacture'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecFacture'][$this->getPrimaryKey()] = true;
        $keys = CommonExecFacturePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIntitule(),
            $keys[2] => $this->getNumero(),
            $keys[3] => $this->getIdContrat(),
            $keys[4] => $this->getIdContractant(),
            $keys[5] => $this->getStatut(),
            $keys[6] => $this->getDateDepot(),
            $keys[7] => $this->getDateValidation(),
            $keys[8] => $this->getIdAgentValidation(),
            $keys[9] => $this->getDateRejet(),
            $keys[10] => $this->getIdAgentRejet(),
            $keys[11] => $this->getMontantFactureHt(),
            $keys[12] => $this->getMontantFactureTtc(),
            $keys[13] => $this->getMontantAPayeHt(),
            $keys[14] => $this->getMontantAPayeTtc(),
            $keys[15] => $this->getMontantPayeHt(),
            $keys[16] => $this->getMontantPayeTtc(),
            $keys[17] => $this->getCommentaire(),
            $keys[18] => $this->getOriginePiece(),
            $keys[19] => $this->getNumeroWorkflow(),
            $keys[20] => $this->getIdAgentCrea(),
            $keys[21] => $this->getIdEntrepriseCrea(),
            $keys[22] => $this->getDateCrea(),
            $keys[23] => $this->getIdAgentModif(),
            $keys[24] => $this->getIdEntrepriseModif(),
            $keys[25] => $this->getDateModif(),
            $keys[26] => $this->getIdParapheur(),
            $keys[27] => $this->getDateClotureParapheur(),
            $keys[28] => $this->getMontantRetenueGarantie(),
            $keys[29] => $this->getMotifRejet(),
            $keys[30] => $this->getOrigine(),
            $keys[31] => $this->getValidationViaExec(),
            $keys[32] => $this->getDatePaiement(),
            $keys[33] => $this->getDateDerniereSynchronisation(),
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
            if (null !== $this->aCommonExecContractant) {
                $result['CommonExecContractant'] = $this->aCommonExecContractant->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecContrat) {
                $result['CommonExecContrat'] = $this->aCommonExecContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonEntrepriseRelatedByIdEntrepriseCrea) {
                $result['CommonEntrepriseRelatedByIdEntrepriseCrea'] = $this->aCommonEntrepriseRelatedByIdEntrepriseCrea->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonEntrepriseRelatedByIdEntrepriseModif) {
                $result['CommonEntrepriseRelatedByIdEntrepriseModif'] = $this->aCommonEntrepriseRelatedByIdEntrepriseModif->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonExecDpFactures) {
                $result['CommonExecDpFactures'] = $this->collCommonExecDpFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPieceFactures) {
                $result['CommonExecPieceFactures'] = $this->collCommonExecPieceFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecFacturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIntitule($value);
                break;
            case 2:
                $this->setNumero($value);
                break;
            case 3:
                $this->setIdContrat($value);
                break;
            case 4:
                $this->setIdContractant($value);
                break;
            case 5:
                $this->setStatut($value);
                break;
            case 6:
                $this->setDateDepot($value);
                break;
            case 7:
                $this->setDateValidation($value);
                break;
            case 8:
                $this->setIdAgentValidation($value);
                break;
            case 9:
                $this->setDateRejet($value);
                break;
            case 10:
                $this->setIdAgentRejet($value);
                break;
            case 11:
                $this->setMontantFactureHt($value);
                break;
            case 12:
                $this->setMontantFactureTtc($value);
                break;
            case 13:
                $this->setMontantAPayeHt($value);
                break;
            case 14:
                $this->setMontantAPayeTtc($value);
                break;
            case 15:
                $this->setMontantPayeHt($value);
                break;
            case 16:
                $this->setMontantPayeTtc($value);
                break;
            case 17:
                $this->setCommentaire($value);
                break;
            case 18:
                $this->setOriginePiece($value);
                break;
            case 19:
                $this->setNumeroWorkflow($value);
                break;
            case 20:
                $this->setIdAgentCrea($value);
                break;
            case 21:
                $this->setIdEntrepriseCrea($value);
                break;
            case 22:
                $this->setDateCrea($value);
                break;
            case 23:
                $this->setIdAgentModif($value);
                break;
            case 24:
                $this->setIdEntrepriseModif($value);
                break;
            case 25:
                $this->setDateModif($value);
                break;
            case 26:
                $this->setIdParapheur($value);
                break;
            case 27:
                $this->setDateClotureParapheur($value);
                break;
            case 28:
                $this->setMontantRetenueGarantie($value);
                break;
            case 29:
                $this->setMotifRejet($value);
                break;
            case 30:
                $this->setOrigine($value);
                break;
            case 31:
                $this->setValidationViaExec($value);
                break;
            case 32:
                $this->setDatePaiement($value);
                break;
            case 33:
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
        $keys = CommonExecFacturePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIntitule($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNumero($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdContrat($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdContractant($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStatut($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateDepot($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateValidation($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdAgentValidation($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateRejet($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIdAgentRejet($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMontantFactureHt($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMontantFactureTtc($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMontantAPayeHt($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMontantAPayeTtc($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMontantPayeHt($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMontantPayeTtc($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCommentaire($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOriginePiece($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setNumeroWorkflow($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdAgentCrea($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setIdEntrepriseCrea($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDateCrea($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setIdAgentModif($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setIdEntrepriseModif($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDateModif($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setIdParapheur($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDateClotureParapheur($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setMontantRetenueGarantie($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setMotifRejet($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setOrigine($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setValidationViaExec($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDatePaiement($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDateDerniereSynchronisation($arr[$keys[33]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecFacturePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecFacturePeer::ID)) $criteria->add(CommonExecFacturePeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecFacturePeer::INTITULE)) $criteria->add(CommonExecFacturePeer::INTITULE, $this->intitule);
        if ($this->isColumnModified(CommonExecFacturePeer::NUMERO)) $criteria->add(CommonExecFacturePeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CommonExecFacturePeer::ID_CONTRAT)) $criteria->add(CommonExecFacturePeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecFacturePeer::ID_CONTRACTANT)) $criteria->add(CommonExecFacturePeer::ID_CONTRACTANT, $this->id_contractant);
        if ($this->isColumnModified(CommonExecFacturePeer::STATUT)) $criteria->add(CommonExecFacturePeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_DEPOT)) $criteria->add(CommonExecFacturePeer::DATE_DEPOT, $this->date_depot);
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_VALIDATION)) $criteria->add(CommonExecFacturePeer::DATE_VALIDATION, $this->date_validation);
        if ($this->isColumnModified(CommonExecFacturePeer::ID_AGENT_VALIDATION)) $criteria->add(CommonExecFacturePeer::ID_AGENT_VALIDATION, $this->id_agent_validation);
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_REJET)) $criteria->add(CommonExecFacturePeer::DATE_REJET, $this->date_rejet);
        if ($this->isColumnModified(CommonExecFacturePeer::ID_AGENT_REJET)) $criteria->add(CommonExecFacturePeer::ID_AGENT_REJET, $this->id_agent_rejet);
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_FACTURE_HT)) $criteria->add(CommonExecFacturePeer::MONTANT_FACTURE_HT, $this->montant_facture_ht);
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_FACTURE_TTC)) $criteria->add(CommonExecFacturePeer::MONTANT_FACTURE_TTC, $this->montant_facture_ttc);
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_A_PAYE_HT)) $criteria->add(CommonExecFacturePeer::MONTANT_A_PAYE_HT, $this->montant_a_paye_ht);
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_A_PAYE_TTC)) $criteria->add(CommonExecFacturePeer::MONTANT_A_PAYE_TTC, $this->montant_a_paye_ttc);
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_PAYE_HT)) $criteria->add(CommonExecFacturePeer::MONTANT_PAYE_HT, $this->montant_paye_ht);
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_PAYE_TTC)) $criteria->add(CommonExecFacturePeer::MONTANT_PAYE_TTC, $this->montant_paye_ttc);
        if ($this->isColumnModified(CommonExecFacturePeer::COMMENTAIRE)) $criteria->add(CommonExecFacturePeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonExecFacturePeer::ORIGINE_PIECE)) $criteria->add(CommonExecFacturePeer::ORIGINE_PIECE, $this->origine_piece);
        if ($this->isColumnModified(CommonExecFacturePeer::NUMERO_WORKFLOW)) $criteria->add(CommonExecFacturePeer::NUMERO_WORKFLOW, $this->numero_workflow);
        if ($this->isColumnModified(CommonExecFacturePeer::ID_AGENT_CREA)) $criteria->add(CommonExecFacturePeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecFacturePeer::ID_ENTREPRISE_CREA)) $criteria->add(CommonExecFacturePeer::ID_ENTREPRISE_CREA, $this->id_entreprise_crea);
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_CREA)) $criteria->add(CommonExecFacturePeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecFacturePeer::ID_AGENT_MODIF)) $criteria->add(CommonExecFacturePeer::ID_AGENT_MODIF, $this->id_agent_modif);
        if ($this->isColumnModified(CommonExecFacturePeer::ID_ENTREPRISE_MODIF)) $criteria->add(CommonExecFacturePeer::ID_ENTREPRISE_MODIF, $this->id_entreprise_modif);
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_MODIF)) $criteria->add(CommonExecFacturePeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(CommonExecFacturePeer::ID_PARAPHEUR)) $criteria->add(CommonExecFacturePeer::ID_PARAPHEUR, $this->id_parapheur);
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_CLOTURE_PARAPHEUR)) $criteria->add(CommonExecFacturePeer::DATE_CLOTURE_PARAPHEUR, $this->date_cloture_parapheur);
        if ($this->isColumnModified(CommonExecFacturePeer::MONTANT_RETENUE_GARANTIE)) $criteria->add(CommonExecFacturePeer::MONTANT_RETENUE_GARANTIE, $this->montant_retenue_garantie);
        if ($this->isColumnModified(CommonExecFacturePeer::MOTIF_REJET)) $criteria->add(CommonExecFacturePeer::MOTIF_REJET, $this->motif_rejet);
        if ($this->isColumnModified(CommonExecFacturePeer::ORIGINE)) $criteria->add(CommonExecFacturePeer::ORIGINE, $this->origine);
        if ($this->isColumnModified(CommonExecFacturePeer::VALIDATION_VIA_EXEC)) $criteria->add(CommonExecFacturePeer::VALIDATION_VIA_EXEC, $this->validation_via_exec);
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_PAIEMENT)) $criteria->add(CommonExecFacturePeer::DATE_PAIEMENT, $this->date_paiement);
        if ($this->isColumnModified(CommonExecFacturePeer::DATE_DERNIERE_SYNCHRONISATION)) $criteria->add(CommonExecFacturePeer::DATE_DERNIERE_SYNCHRONISATION, $this->date_derniere_synchronisation);

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
        $criteria = new Criteria(CommonExecFacturePeer::DATABASE_NAME);
        $criteria->add(CommonExecFacturePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecFacture (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntitule($this->getIntitule());
        $copyObj->setNumero($this->getNumero());
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setIdContractant($this->getIdContractant());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDateDepot($this->getDateDepot());
        $copyObj->setDateValidation($this->getDateValidation());
        $copyObj->setIdAgentValidation($this->getIdAgentValidation());
        $copyObj->setDateRejet($this->getDateRejet());
        $copyObj->setIdAgentRejet($this->getIdAgentRejet());
        $copyObj->setMontantFactureHt($this->getMontantFactureHt());
        $copyObj->setMontantFactureTtc($this->getMontantFactureTtc());
        $copyObj->setMontantAPayeHt($this->getMontantAPayeHt());
        $copyObj->setMontantAPayeTtc($this->getMontantAPayeTtc());
        $copyObj->setMontantPayeHt($this->getMontantPayeHt());
        $copyObj->setMontantPayeTtc($this->getMontantPayeTtc());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setOriginePiece($this->getOriginePiece());
        $copyObj->setNumeroWorkflow($this->getNumeroWorkflow());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setIdEntrepriseCrea($this->getIdEntrepriseCrea());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdAgentModif($this->getIdAgentModif());
        $copyObj->setIdEntrepriseModif($this->getIdEntrepriseModif());
        $copyObj->setDateModif($this->getDateModif());
        $copyObj->setIdParapheur($this->getIdParapheur());
        $copyObj->setDateClotureParapheur($this->getDateClotureParapheur());
        $copyObj->setMontantRetenueGarantie($this->getMontantRetenueGarantie());
        $copyObj->setMotifRejet($this->getMotifRejet());
        $copyObj->setOrigine($this->getOrigine());
        $copyObj->setValidationViaExec($this->getValidationViaExec());
        $copyObj->setDatePaiement($this->getDatePaiement());
        $copyObj->setDateDerniereSynchronisation($this->getDateDerniereSynchronisation());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonExecDpFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecDpFacture($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPieceFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPieceFacture($relObj->copy($deepCopy));
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
     * @return CommonExecFacture Clone of current object.
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
     * @return CommonExecFacturePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecFacturePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecFacture The current object (for fluent API support)
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
            $v->addCommonExecFactureRelatedByIdAgentCrea($this);
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
                $this->aCommonAgentRelatedByIdAgentCrea->addCommonExecFacturesRelatedByIdAgentCrea($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentCrea;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecFacture The current object (for fluent API support)
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
            $v->addCommonExecFactureRelatedByIdAgentModif($this);
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
                $this->aCommonAgentRelatedByIdAgentModif->addCommonExecFacturesRelatedByIdAgentModif($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentModif;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecFacture The current object (for fluent API support)
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
            $v->addCommonExecFactureRelatedByIdAgentRejet($this);
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
                $this->aCommonAgentRelatedByIdAgentRejet->addCommonExecFacturesRelatedByIdAgentRejet($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentRejet;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecFacture The current object (for fluent API support)
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
            $v->addCommonExecFactureRelatedByIdAgentValidation($this);
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
                $this->aCommonAgentRelatedByIdAgentValidation->addCommonExecFacturesRelatedByIdAgentValidation($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentValidation;
    }

    /**
     * Declares an association between this object and a CommonExecContractant object.
     *
     * @param   CommonExecContractant $v
     * @return CommonExecFacture The current object (for fluent API support)
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
            $v->addCommonExecFacture($this);
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
                $this->aCommonExecContractant->addCommonExecFactures($this);
             */
        }

        return $this->aCommonExecContractant;
    }

    /**
     * Declares an association between this object and a CommonExecContrat object.
     *
     * @param   CommonExecContrat $v
     * @return CommonExecFacture The current object (for fluent API support)
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
            $v->addCommonExecFacture($this);
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
                $this->aCommonExecContrat->addCommonExecFactures($this);
             */
        }

        return $this->aCommonExecContrat;
    }

    /**
     * Declares an association between this object and a CommonEntreprise object.
     *
     * @param   CommonEntreprise $v
     * @return CommonExecFacture The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonEntrepriseRelatedByIdEntrepriseCrea(CommonEntreprise $v = null)
    {
        if ($v === null) {
            $this->setIdEntrepriseCrea(NULL);
        } else {
            $this->setIdEntrepriseCrea($v->getId());
        }

        $this->aCommonEntrepriseRelatedByIdEntrepriseCrea = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonEntreprise object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecFactureRelatedByIdEntrepriseCrea($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonEntreprise object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonEntreprise The associated CommonEntreprise object.
     * @throws PropelException
     */
    public function getCommonEntrepriseRelatedByIdEntrepriseCrea(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonEntrepriseRelatedByIdEntrepriseCrea === null && ($this->id_entreprise_crea !== null) && $doQuery) {
            $this->aCommonEntrepriseRelatedByIdEntrepriseCrea = CommonEntrepriseQuery::create()->findPk($this->id_entreprise_crea, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonEntrepriseRelatedByIdEntrepriseCrea->addCommonExecFacturesRelatedByIdEntrepriseCrea($this);
             */
        }

        return $this->aCommonEntrepriseRelatedByIdEntrepriseCrea;
    }

    /**
     * Declares an association between this object and a CommonEntreprise object.
     *
     * @param   CommonEntreprise $v
     * @return CommonExecFacture The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonEntrepriseRelatedByIdEntrepriseModif(CommonEntreprise $v = null)
    {
        if ($v === null) {
            $this->setIdEntrepriseModif(NULL);
        } else {
            $this->setIdEntrepriseModif($v->getId());
        }

        $this->aCommonEntrepriseRelatedByIdEntrepriseModif = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonEntreprise object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecFactureRelatedByIdEntrepriseModif($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonEntreprise object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonEntreprise The associated CommonEntreprise object.
     * @throws PropelException
     */
    public function getCommonEntrepriseRelatedByIdEntrepriseModif(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonEntrepriseRelatedByIdEntrepriseModif === null && ($this->id_entreprise_modif !== null) && $doQuery) {
            $this->aCommonEntrepriseRelatedByIdEntrepriseModif = CommonEntrepriseQuery::create()->findPk($this->id_entreprise_modif, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonEntrepriseRelatedByIdEntrepriseModif->addCommonExecFacturesRelatedByIdEntrepriseModif($this);
             */
        }

        return $this->aCommonEntrepriseRelatedByIdEntrepriseModif;
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
        if ('CommonExecDpFacture' == $relationName) {
            $this->initCommonExecDpFactures();
        }
        if ('CommonExecPieceFacture' == $relationName) {
            $this->initCommonExecPieceFactures();
        }
        if ('CommonExecRepartition' == $relationName) {
            $this->initCommonExecRepartitions();
        }
    }

    /**
     * Clears out the collCommonExecDpFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecFacture The current object (for fluent API support)
     * @see        addCommonExecDpFactures()
     */
    public function clearCommonExecDpFactures()
    {
        $this->collCommonExecDpFactures = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecDpFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecDpFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecDpFactures($v = true)
    {
        $this->collCommonExecDpFacturesPartial = $v;
    }

    /**
     * Initializes the collCommonExecDpFactures collection.
     *
     * By default this just sets the collCommonExecDpFactures collection to an empty array (like clearcollCommonExecDpFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecDpFactures($overrideExisting = true)
    {
        if (null !== $this->collCommonExecDpFactures && !$overrideExisting) {
            return;
        }
        $this->collCommonExecDpFactures = new PropelObjectCollection();
        $this->collCommonExecDpFactures->setModel('CommonExecDpFacture');
    }

    /**
     * Gets an array of CommonExecDpFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecFacture is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecDpFacture[] List of CommonExecDpFacture objects
     * @throws PropelException
     */
    public function getCommonExecDpFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecDpFacturesPartial && !$this->isNew();
        if (null === $this->collCommonExecDpFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecDpFactures) {
                // return empty collection
                $this->initCommonExecDpFactures();
            } else {
                $collCommonExecDpFactures = CommonExecDpFactureQuery::create(null, $criteria)
                    ->filterByCommonExecFacture($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecDpFacturesPartial && count($collCommonExecDpFactures)) {
                      $this->initCommonExecDpFactures(false);

                      foreach ($collCommonExecDpFactures as $obj) {
                        if (false == $this->collCommonExecDpFactures->contains($obj)) {
                          $this->collCommonExecDpFactures->append($obj);
                        }
                      }

                      $this->collCommonExecDpFacturesPartial = true;
                    }

                    $collCommonExecDpFactures->getInternalIterator()->rewind();

                    return $collCommonExecDpFactures;
                }

                if ($partial && $this->collCommonExecDpFactures) {
                    foreach ($this->collCommonExecDpFactures as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecDpFactures[] = $obj;
                        }
                    }
                }

                $this->collCommonExecDpFactures = $collCommonExecDpFactures;
                $this->collCommonExecDpFacturesPartial = false;
            }
        }

        return $this->collCommonExecDpFactures;
    }

    /**
     * Sets a collection of CommonExecDpFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecDpFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setCommonExecDpFactures(PropelCollection $commonExecDpFactures, PropelPDO $con = null)
    {
        $commonExecDpFacturesToDelete = $this->getCommonExecDpFactures(new Criteria(), $con)->diff($commonExecDpFactures);


        $this->commonExecDpFacturesScheduledForDeletion = $commonExecDpFacturesToDelete;

        foreach ($commonExecDpFacturesToDelete as $commonExecDpFactureRemoved) {
            $commonExecDpFactureRemoved->setCommonExecFacture(null);
        }

        $this->collCommonExecDpFactures = null;
        foreach ($commonExecDpFactures as $commonExecDpFacture) {
            $this->addCommonExecDpFacture($commonExecDpFacture);
        }

        $this->collCommonExecDpFactures = $commonExecDpFactures;
        $this->collCommonExecDpFacturesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecDpFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecDpFacture objects.
     * @throws PropelException
     */
    public function countCommonExecDpFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecDpFacturesPartial && !$this->isNew();
        if (null === $this->collCommonExecDpFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecDpFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecDpFactures());
            }
            $query = CommonExecDpFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecFacture($this)
                ->count($con);
        }

        return count($this->collCommonExecDpFactures);
    }

    /**
     * Method called to associate a CommonExecDpFacture object to this object
     * through the CommonExecDpFacture foreign key attribute.
     *
     * @param   CommonExecDpFacture $l CommonExecDpFacture
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function addCommonExecDpFacture(CommonExecDpFacture $l)
    {
        if ($this->collCommonExecDpFactures === null) {
            $this->initCommonExecDpFactures();
            $this->collCommonExecDpFacturesPartial = true;
        }
        if (!in_array($l, $this->collCommonExecDpFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecDpFacture($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecDpFacture $commonExecDpFacture The commonExecDpFacture object to add.
     */
    protected function doAddCommonExecDpFacture($commonExecDpFacture)
    {
        $this->collCommonExecDpFactures[]= $commonExecDpFacture;
        $commonExecDpFacture->setCommonExecFacture($this);
    }

    /**
     * @param	CommonExecDpFacture $commonExecDpFacture The commonExecDpFacture object to remove.
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function removeCommonExecDpFacture($commonExecDpFacture)
    {
        if ($this->getCommonExecDpFactures()->contains($commonExecDpFacture)) {
            $this->collCommonExecDpFactures->remove($this->collCommonExecDpFactures->search($commonExecDpFacture));
            if (null === $this->commonExecDpFacturesScheduledForDeletion) {
                $this->commonExecDpFacturesScheduledForDeletion = clone $this->collCommonExecDpFactures;
                $this->commonExecDpFacturesScheduledForDeletion->clear();
            }
            $this->commonExecDpFacturesScheduledForDeletion[]= $commonExecDpFacture;
            $commonExecDpFacture->setCommonExecFacture(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecFacture is new, it will return
     * an empty collection; or if this CommonExecFacture has previously
     * been saved, it will retrieve related CommonExecDpFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecFacture.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecDpFacture[] List of CommonExecDpFacture objects
     */
    public function getCommonExecDpFacturesJoinCommonExecDossierPaiement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecDpFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecDossierPaiement', $join_behavior);

        return $this->getCommonExecDpFactures($query, $con);
    }

    /**
     * Clears out the collCommonExecPieceFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecFacture The current object (for fluent API support)
     * @see        addCommonExecPieceFactures()
     */
    public function clearCommonExecPieceFactures()
    {
        $this->collCommonExecPieceFactures = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPieceFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPieceFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPieceFactures($v = true)
    {
        $this->collCommonExecPieceFacturesPartial = $v;
    }

    /**
     * Initializes the collCommonExecPieceFactures collection.
     *
     * By default this just sets the collCommonExecPieceFactures collection to an empty array (like clearcollCommonExecPieceFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPieceFactures($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPieceFactures && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPieceFactures = new PropelObjectCollection();
        $this->collCommonExecPieceFactures->setModel('CommonExecPieceFacture');
    }

    /**
     * Gets an array of CommonExecPieceFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecFacture is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPieceFacture[] List of CommonExecPieceFacture objects
     * @throws PropelException
     */
    public function getCommonExecPieceFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPieceFacturesPartial && !$this->isNew();
        if (null === $this->collCommonExecPieceFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieceFactures) {
                // return empty collection
                $this->initCommonExecPieceFactures();
            } else {
                $collCommonExecPieceFactures = CommonExecPieceFactureQuery::create(null, $criteria)
                    ->filterByCommonExecFacture($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPieceFacturesPartial && count($collCommonExecPieceFactures)) {
                      $this->initCommonExecPieceFactures(false);

                      foreach ($collCommonExecPieceFactures as $obj) {
                        if (false == $this->collCommonExecPieceFactures->contains($obj)) {
                          $this->collCommonExecPieceFactures->append($obj);
                        }
                      }

                      $this->collCommonExecPieceFacturesPartial = true;
                    }

                    $collCommonExecPieceFactures->getInternalIterator()->rewind();

                    return $collCommonExecPieceFactures;
                }

                if ($partial && $this->collCommonExecPieceFactures) {
                    foreach ($this->collCommonExecPieceFactures as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPieceFactures[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPieceFactures = $collCommonExecPieceFactures;
                $this->collCommonExecPieceFacturesPartial = false;
            }
        }

        return $this->collCommonExecPieceFactures;
    }

    /**
     * Sets a collection of CommonExecPieceFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPieceFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setCommonExecPieceFactures(PropelCollection $commonExecPieceFactures, PropelPDO $con = null)
    {
        $commonExecPieceFacturesToDelete = $this->getCommonExecPieceFactures(new Criteria(), $con)->diff($commonExecPieceFactures);


        $this->commonExecPieceFacturesScheduledForDeletion = $commonExecPieceFacturesToDelete;

        foreach ($commonExecPieceFacturesToDelete as $commonExecPieceFactureRemoved) {
            $commonExecPieceFactureRemoved->setCommonExecFacture(null);
        }

        $this->collCommonExecPieceFactures = null;
        foreach ($commonExecPieceFactures as $commonExecPieceFacture) {
            $this->addCommonExecPieceFacture($commonExecPieceFacture);
        }

        $this->collCommonExecPieceFactures = $commonExecPieceFactures;
        $this->collCommonExecPieceFacturesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPieceFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPieceFacture objects.
     * @throws PropelException
     */
    public function countCommonExecPieceFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPieceFacturesPartial && !$this->isNew();
        if (null === $this->collCommonExecPieceFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieceFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPieceFactures());
            }
            $query = CommonExecPieceFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecFacture($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceFactures);
    }

    /**
     * Method called to associate a CommonExecPieceFacture object to this object
     * through the CommonExecPieceFacture foreign key attribute.
     *
     * @param   CommonExecPieceFacture $l CommonExecPieceFacture
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function addCommonExecPieceFacture(CommonExecPieceFacture $l)
    {
        if ($this->collCommonExecPieceFactures === null) {
            $this->initCommonExecPieceFactures();
            $this->collCommonExecPieceFacturesPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPieceFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPieceFacture($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPieceFacture $commonExecPieceFacture The commonExecPieceFacture object to add.
     */
    protected function doAddCommonExecPieceFacture($commonExecPieceFacture)
    {
        $this->collCommonExecPieceFactures[]= $commonExecPieceFacture;
        $commonExecPieceFacture->setCommonExecFacture($this);
    }

    /**
     * @param	CommonExecPieceFacture $commonExecPieceFacture The commonExecPieceFacture object to remove.
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function removeCommonExecPieceFacture($commonExecPieceFacture)
    {
        if ($this->getCommonExecPieceFactures()->contains($commonExecPieceFacture)) {
            $this->collCommonExecPieceFactures->remove($this->collCommonExecPieceFactures->search($commonExecPieceFacture));
            if (null === $this->commonExecPieceFacturesScheduledForDeletion) {
                $this->commonExecPieceFacturesScheduledForDeletion = clone $this->collCommonExecPieceFactures;
                $this->commonExecPieceFacturesScheduledForDeletion->clear();
            }
            $this->commonExecPieceFacturesScheduledForDeletion[]= clone $commonExecPieceFacture;
            $commonExecPieceFacture->setCommonExecFacture(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecFacture is new, it will return
     * an empty collection; or if this CommonExecFacture has previously
     * been saved, it will retrieve related CommonExecPieceFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecFacture.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceFacture[] List of CommonExecPieceFacture objects
     */
    public function getCommonExecPieceFacturesJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceFactureQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonExecPieceFactures($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecFacture is new, it will return
     * an empty collection; or if this CommonExecFacture has previously
     * been saved, it will retrieve related CommonExecPieceFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecFacture.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceFacture[] List of CommonExecPieceFacture objects
     */
    public function getCommonExecPieceFacturesJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPieceFactures($query, $con);
    }

    /**
     * Clears out the collCommonExecRepartitions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecFacture The current object (for fluent API support)
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
     * If this CommonExecFacture is new, it will return
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
                    ->filterByCommonExecFacture($this)
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
     * @return CommonExecFacture The current object (for fluent API support)
     */
    public function setCommonExecRepartitions(PropelCollection $commonExecRepartitions, PropelPDO $con = null)
    {
        $commonExecRepartitionsToDelete = $this->getCommonExecRepartitions(new Criteria(), $con)->diff($commonExecRepartitions);


        $this->commonExecRepartitionsScheduledForDeletion = $commonExecRepartitionsToDelete;

        foreach ($commonExecRepartitionsToDelete as $commonExecRepartitionRemoved) {
            $commonExecRepartitionRemoved->setCommonExecFacture(null);
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
                ->filterByCommonExecFacture($this)
                ->count($con);
        }

        return count($this->collCommonExecRepartitions);
    }

    /**
     * Method called to associate a CommonExecRepartition object to this object
     * through the CommonExecRepartition foreign key attribute.
     *
     * @param   CommonExecRepartition $l CommonExecRepartition
     * @return CommonExecFacture The current object (for fluent API support)
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
        $commonExecRepartition->setCommonExecFacture($this);
    }

    /**
     * @param	CommonExecRepartition $commonExecRepartition The commonExecRepartition object to remove.
     * @return CommonExecFacture The current object (for fluent API support)
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
            $commonExecRepartition->setCommonExecFacture(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecFacture is new, it will return
     * an empty collection; or if this CommonExecFacture has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecFacture.
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
     * Otherwise if this CommonExecFacture is new, it will return
     * an empty collection; or if this CommonExecFacture has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecFacture.
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
     * Otherwise if this CommonExecFacture is new, it will return
     * an empty collection; or if this CommonExecFacture has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecFacture.
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
     * Otherwise if this CommonExecFacture is new, it will return
     * an empty collection; or if this CommonExecFacture has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecFacture.
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
     * Otherwise if this CommonExecFacture is new, it will return
     * an empty collection; or if this CommonExecFacture has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecFacture.
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
     * Otherwise if this CommonExecFacture is new, it will return
     * an empty collection; or if this CommonExecFacture has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecFacture.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsJoinCommonExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecPrix', $join_behavior);

        return $this->getCommonExecRepartitions($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->intitule = null;
        $this->numero = null;
        $this->id_contrat = null;
        $this->id_contractant = null;
        $this->statut = null;
        $this->date_depot = null;
        $this->date_validation = null;
        $this->id_agent_validation = null;
        $this->date_rejet = null;
        $this->id_agent_rejet = null;
        $this->montant_facture_ht = null;
        $this->montant_facture_ttc = null;
        $this->montant_a_paye_ht = null;
        $this->montant_a_paye_ttc = null;
        $this->montant_paye_ht = null;
        $this->montant_paye_ttc = null;
        $this->commentaire = null;
        $this->origine_piece = null;
        $this->numero_workflow = null;
        $this->id_agent_crea = null;
        $this->id_entreprise_crea = null;
        $this->date_crea = null;
        $this->id_agent_modif = null;
        $this->id_entreprise_modif = null;
        $this->date_modif = null;
        $this->id_parapheur = null;
        $this->date_cloture_parapheur = null;
        $this->montant_retenue_garantie = null;
        $this->motif_rejet = null;
        $this->origine = null;
        $this->validation_via_exec = null;
        $this->date_paiement = null;
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
            if ($this->collCommonExecDpFactures) {
                foreach ($this->collCommonExecDpFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPieceFactures) {
                foreach ($this->collCommonExecPieceFactures as $o) {
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
            if ($this->aCommonAgentRelatedByIdAgentRejet instanceof Persistent) {
              $this->aCommonAgentRelatedByIdAgentRejet->clearAllReferences($deep);
            }
            if ($this->aCommonAgentRelatedByIdAgentValidation instanceof Persistent) {
              $this->aCommonAgentRelatedByIdAgentValidation->clearAllReferences($deep);
            }
            if ($this->aCommonExecContractant instanceof Persistent) {
              $this->aCommonExecContractant->clearAllReferences($deep);
            }
            if ($this->aCommonExecContrat instanceof Persistent) {
              $this->aCommonExecContrat->clearAllReferences($deep);
            }
            if ($this->aCommonEntrepriseRelatedByIdEntrepriseCrea instanceof Persistent) {
              $this->aCommonEntrepriseRelatedByIdEntrepriseCrea->clearAllReferences($deep);
            }
            if ($this->aCommonEntrepriseRelatedByIdEntrepriseModif instanceof Persistent) {
              $this->aCommonEntrepriseRelatedByIdEntrepriseModif->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecDpFactures instanceof PropelCollection) {
            $this->collCommonExecDpFactures->clearIterator();
        }
        $this->collCommonExecDpFactures = null;
        if ($this->collCommonExecPieceFactures instanceof PropelCollection) {
            $this->collCommonExecPieceFactures->clearIterator();
        }
        $this->collCommonExecPieceFactures = null;
        if ($this->collCommonExecRepartitions instanceof PropelCollection) {
            $this->collCommonExecRepartitions->clearIterator();
        }
        $this->collCommonExecRepartitions = null;
        $this->aCommonAgentRelatedByIdAgentCrea = null;
        $this->aCommonAgentRelatedByIdAgentModif = null;
        $this->aCommonAgentRelatedByIdAgentRejet = null;
        $this->aCommonAgentRelatedByIdAgentValidation = null;
        $this->aCommonExecContractant = null;
        $this->aCommonExecContrat = null;
        $this->aCommonEntrepriseRelatedByIdEntrepriseCrea = null;
        $this->aCommonEntrepriseRelatedByIdEntrepriseModif = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecFacturePeer::DEFAULT_STRING_FORMAT);
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
