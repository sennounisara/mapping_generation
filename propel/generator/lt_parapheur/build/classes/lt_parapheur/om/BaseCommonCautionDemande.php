<?php


/**
 * Base class that represents a row from the 'caution_demande' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionDemande extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonCautionDemandePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonCautionDemandePeer
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
     * The value for the ref_consultation field.
     * @var        int
     */
    protected $ref_consultation;

    /**
     * The value for the id_entreprise field.
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the id_inscrit field.
     * @var        int
     */
    protected $id_inscrit;

    /**
     * The value for the acronyme field.
     * @var        string
     */
    protected $acronyme;

    /**
     * The value for the intitule field.
     * @var        string
     */
    protected $intitule;

    /**
     * The value for the lot field.
     * @var        int
     */
    protected $lot;

    /**
     * The value for the objet_lot field.
     * @var        string
     */
    protected $objet_lot;

    /**
     * The value for the raison_sociale field.
     * @var        string
     */
    protected $raison_sociale;

    /**
     * The value for the montant field.
     * @var        double
     */
    protected $montant;

    /**
     * The value for the date_demande field.
     * @var        string
     */
    protected $date_demande;

    /**
     * The value for the date_limite_remise_plis field.
     * @var        string
     */
    protected $date_limite_remise_plis;

    /**
     * The value for the id_statut_caution field.
     * @var        int
     */
    protected $id_statut_caution;

    /**
     * The value for the id_compte_bancaire field.
     * @var        int
     */
    protected $id_compte_bancaire;

    /**
     * The value for the id_blob_demande field.
     * @var        int
     */
    protected $id_blob_demande;

    /**
     * The value for the nom_doc_demande field.
     * @var        string
     */
    protected $nom_doc_demande;

    /**
     * The value for the id_blob_caution field.
     * @var        int
     */
    protected $id_blob_caution;

    /**
     * The value for the nom_doc_caution field.
     * @var        string
     */
    protected $nom_doc_caution;

    /**
     * The value for the id_inscrit_crea field.
     * @var        int
     */
    protected $id_inscrit_crea;

    /**
     * The value for the date_crea field.
     * @var        string
     */
    protected $date_crea;

    /**
     * The value for the id_inscrit_modif field.
     * @var        int
     */
    protected $id_inscrit_modif;

    /**
     * The value for the date_modif field.
     * @var        string
     */
    protected $date_modif;

    /**
     * The value for the identifiant_bancaire field.
     * @var        string
     */
    protected $identifiant_bancaire;

    /**
     * The value for the id_ville field.
     * @var        int
     */
    protected $id_ville;

    /**
     * The value for the acheteur_public field.
     * @var        string
     */
    protected $acheteur_public;

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
     * The value for the motif_rejet field.
     * @var        string
     */
    protected $motif_rejet;

    /**
     * The value for the id_agent_banquier_validation field.
     * @var        int
     */
    protected $id_agent_banquier_validation;

    /**
     * The value for the id_agent_banquier_rejet field.
     * @var        int
     */
    protected $id_agent_banquier_rejet;

    /**
     * The value for the reference_modele field.
     * @var        string
     */
    protected $reference_modele;

    /**
     * The value for the date_prise_en_charge field.
     * @var        string
     */
    protected $date_prise_en_charge;

    /**
     * The value for the id_agent_prise_en_charge field.
     * @var        int
     */
    protected $id_agent_prise_en_charge;

    /**
     * The value for the taguee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $taguee;

    /**
     * The value for the utilisee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $utilisee;

    /**
     * The value for the mise_a_dispo field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $mise_a_dispo;

    /**
     * The value for the id_signataire1 field.
     * @var        int
     */
    protected $id_signataire1;

    /**
     * The value for the date_signature1 field.
     * @var        string
     */
    protected $date_signature1;

    /**
     * The value for the id_signataire2 field.
     * @var        int
     */
    protected $id_signataire2;

    /**
     * The value for the date_signature2 field.
     * @var        string
     */
    protected $date_signature2;

    /**
     * The value for the groupement field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $groupement;

    /**
     * The value for the id_groupement field.
     * @var        int
     */
    protected $id_groupement;

    /**
     * The value for the code_agence field.
     * @var        string
     */
    protected $code_agence;

    /**
     * The value for the code_ville field.
     * @var        string
     */
    protected $code_ville;

    /**
     * The value for the reference_interne field.
     * @var        int
     */
    protected $reference_interne;

    /**
     * @var        CommonAgentBanquier
     */
    protected $aCommonAgentBanquierRelatedByIdAgentBanquierRejet;

    /**
     * @var        CommonAgentBanquier
     */
    protected $aCommonAgentBanquierRelatedByIdAgentBanquierValidation;

    /**
     * @var        CommonAgentBanquier
     */
    protected $aCommonAgentBanquierRelatedByIdAgentPriseEnCharge;

    /**
     * @var        CommonTCompteBancaire
     */
    protected $aCommonTCompteBancaire;

    /**
     * @var        CommonAgentBanquier
     */
    protected $aCommonAgentBanquierRelatedByIdSignataire1;

    /**
     * @var        CommonAgentBanquier
     */
    protected $aCommonAgentBanquierRelatedByIdSignataire2;

    /**
     * @var        PropelObjectCollection|CommonCautionRestitution[] Collection to store aggregation of CommonCautionRestitution objects.
     */
    protected $collCommonCautionRestitutions;
    protected $collCommonCautionRestitutionsPartial;

    /**
     * @var        PropelObjectCollection|CommonCautionSignataireDemande[] Collection to store aggregation of CommonCautionSignataireDemande objects.
     */
    protected $collCommonCautionSignataireDemandes;
    protected $collCommonCautionSignataireDemandesPartial;

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
    protected $commonCautionRestitutionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonCautionSignataireDemandesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->taguee = '0';
        $this->utilisee = '0';
        $this->mise_a_dispo = '0';
        $this->groupement = '0';
    }

    /**
     * Initializes internal state of BaseCommonCautionDemande object.
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
     * Get the [ref_consultation] column value.
     * 
     * @return int
     */
    public function getRefConsultation()
    {

        return $this->ref_consultation;
    }

    /**
     * Get the [id_entreprise] column value.
     * 
     * @return int
     */
    public function getIdEntreprise()
    {

        return $this->id_entreprise;
    }

    /**
     * Get the [id_inscrit] column value.
     * 
     * @return int
     */
    public function getIdInscrit()
    {

        return $this->id_inscrit;
    }

    /**
     * Get the [acronyme] column value.
     * 
     * @return string
     */
    public function getAcronyme()
    {

        return $this->acronyme;
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
     * Get the [lot] column value.
     * 
     * @return int
     */
    public function getLot()
    {

        return $this->lot;
    }

    /**
     * Get the [objet_lot] column value.
     * 
     * @return string
     */
    public function getObjetLot()
    {

        return $this->objet_lot;
    }

    /**
     * Get the [raison_sociale] column value.
     * 
     * @return string
     */
    public function getRaisonSociale()
    {

        return $this->raison_sociale;
    }

    /**
     * Get the [montant] column value.
     * 
     * @return double
     */
    public function getMontant()
    {

        return $this->montant;
    }

    /**
     * Get the [optionally formatted] temporal [date_demande] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDemande($format = 'Y-m-d H:i:s')
    {
        if ($this->date_demande === null) {
            return null;
        }

        if ($this->date_demande === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_demande);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_demande, true), $x);
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
     * Get the [optionally formatted] temporal [date_limite_remise_plis] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateLimiteRemisePlis($format = 'Y-m-d H:i:s')
    {
        if ($this->date_limite_remise_plis === null) {
            return null;
        }

        if ($this->date_limite_remise_plis === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_limite_remise_plis);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_limite_remise_plis, true), $x);
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
     * Get the [id_statut_caution] column value.
     * 
     * @return int
     */
    public function getIdStatutCaution()
    {

        return $this->id_statut_caution;
    }

    /**
     * Get the [id_compte_bancaire] column value.
     * 
     * @return int
     */
    public function getIdCompteBancaire()
    {

        return $this->id_compte_bancaire;
    }

    /**
     * Get the [id_blob_demande] column value.
     * 
     * @return int
     */
    public function getIdBlobDemande()
    {

        return $this->id_blob_demande;
    }

    /**
     * Get the [nom_doc_demande] column value.
     * 
     * @return string
     */
    public function getNomDocDemande()
    {

        return $this->nom_doc_demande;
    }

    /**
     * Get the [id_blob_caution] column value.
     * 
     * @return int
     */
    public function getIdBlobCaution()
    {

        return $this->id_blob_caution;
    }

    /**
     * Get the [nom_doc_caution] column value.
     * 
     * @return string
     */
    public function getNomDocCaution()
    {

        return $this->nom_doc_caution;
    }

    /**
     * Get the [id_inscrit_crea] column value.
     * 
     * @return int
     */
    public function getIdInscritCrea()
    {

        return $this->id_inscrit_crea;
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
     * Get the [id_inscrit_modif] column value.
     * 
     * @return int
     */
    public function getIdInscritModif()
    {

        return $this->id_inscrit_modif;
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
     * Get the [identifiant_bancaire] column value.
     * 
     * @return string
     */
    public function getIdentifiantBancaire()
    {

        return $this->identifiant_bancaire;
    }

    /**
     * Get the [id_ville] column value.
     * 
     * @return int
     */
    public function getIdVille()
    {

        return $this->id_ville;
    }

    /**
     * Get the [acheteur_public] column value.
     * 
     * @return string
     */
    public function getAcheteurPublic()
    {

        return $this->acheteur_public;
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
     * Get the [motif_rejet] column value.
     * 
     * @return string
     */
    public function getMotifRejet()
    {

        return $this->motif_rejet;
    }

    /**
     * Get the [id_agent_banquier_validation] column value.
     * 
     * @return int
     */
    public function getIdAgentBanquierValidation()
    {

        return $this->id_agent_banquier_validation;
    }

    /**
     * Get the [id_agent_banquier_rejet] column value.
     * 
     * @return int
     */
    public function getIdAgentBanquierRejet()
    {

        return $this->id_agent_banquier_rejet;
    }

    /**
     * Get the [reference_modele] column value.
     * 
     * @return string
     */
    public function getReferenceModele()
    {

        return $this->reference_modele;
    }

    /**
     * Get the [optionally formatted] temporal [date_prise_en_charge] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatePriseEnCharge($format = 'Y-m-d H:i:s')
    {
        if ($this->date_prise_en_charge === null) {
            return null;
        }

        if ($this->date_prise_en_charge === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_prise_en_charge);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_prise_en_charge, true), $x);
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
     * Get the [id_agent_prise_en_charge] column value.
     * 
     * @return int
     */
    public function getIdAgentPriseEnCharge()
    {

        return $this->id_agent_prise_en_charge;
    }

    /**
     * Get the [taguee] column value.
     * 
     * @return string
     */
    public function getTaguee()
    {

        return $this->taguee;
    }

    /**
     * Get the [utilisee] column value.
     * 
     * @return string
     */
    public function getUtilisee()
    {

        return $this->utilisee;
    }

    /**
     * Get the [mise_a_dispo] column value.
     * 
     * @return string
     */
    public function getMiseADispo()
    {

        return $this->mise_a_dispo;
    }

    /**
     * Get the [id_signataire1] column value.
     * 
     * @return int
     */
    public function getIdSignataire1()
    {

        return $this->id_signataire1;
    }

    /**
     * Get the [optionally formatted] temporal [date_signature1] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateSignature1($format = 'Y-m-d H:i:s')
    {
        if ($this->date_signature1 === null) {
            return null;
        }

        if ($this->date_signature1 === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_signature1);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_signature1, true), $x);
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
     * Get the [id_signataire2] column value.
     * 
     * @return int
     */
    public function getIdSignataire2()
    {

        return $this->id_signataire2;
    }

    /**
     * Get the [optionally formatted] temporal [date_signature2] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateSignature2($format = 'Y-m-d H:i:s')
    {
        if ($this->date_signature2 === null) {
            return null;
        }

        if ($this->date_signature2 === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_signature2);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_signature2, true), $x);
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
     * Get the [groupement] column value.
     * 
     * @return string
     */
    public function getGroupement()
    {

        return $this->groupement;
    }

    /**
     * Get the [id_groupement] column value.
     * 
     * @return int
     */
    public function getIdGroupement()
    {

        return $this->id_groupement;
    }

    /**
     * Get the [code_agence] column value.
     * 
     * @return string
     */
    public function getCodeAgence()
    {

        return $this->code_agence;
    }

    /**
     * Get the [code_ville] column value.
     * 
     * @return string
     */
    public function getCodeVille()
    {

        return $this->code_ville;
    }

    /**
     * Get the [reference_interne] column value.
     * 
     * @return int
     */
    public function getReferenceInterne()
    {

        return $this->reference_interne;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [ref_consultation] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setRefConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ref_consultation !== $v) {
            $this->ref_consultation = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::REF_CONSULTATION;
        }


        return $this;
    } // setRefConsultation()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [acronyme] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setAcronyme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme !== $v) {
            $this->acronyme = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ACRONYME;
        }


        return $this;
    } // setAcronyme()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::INTITULE;
        }


        return $this;
    } // setIntitule()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [objet_lot] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setObjetLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet_lot !== $v) {
            $this->objet_lot = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::OBJET_LOT;
        }


        return $this;
    } // setObjetLot()

    /**
     * Set the value of [raison_sociale] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setRaisonSociale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raison_sociale !== $v) {
            $this->raison_sociale = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::RAISON_SOCIALE;
        }


        return $this;
    } // setRaisonSociale()

    /**
     * Set the value of [montant] column.
     * 
     * @param double $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setMontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant !== $v) {
            $this->montant = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::MONTANT;
        }


        return $this;
    } // setMontant()

    /**
     * Sets the value of [date_demande] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setDateDemande($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_demande !== null || $dt !== null) {
            $currentDateAsString = ($this->date_demande !== null && $tmpDt = new DateTime($this->date_demande)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_demande = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionDemandePeer::DATE_DEMANDE;
            }
        } // if either are not null


        return $this;
    } // setDateDemande()

    /**
     * Sets the value of [date_limite_remise_plis] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setDateLimiteRemisePlis($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_limite_remise_plis !== null || $dt !== null) {
            $currentDateAsString = ($this->date_limite_remise_plis !== null && $tmpDt = new DateTime($this->date_limite_remise_plis)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_limite_remise_plis = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionDemandePeer::DATE_LIMITE_REMISE_PLIS;
            }
        } // if either are not null


        return $this;
    } // setDateLimiteRemisePlis()

    /**
     * Set the value of [id_statut_caution] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdStatutCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_statut_caution !== $v) {
            $this->id_statut_caution = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_STATUT_CAUTION;
        }


        return $this;
    } // setIdStatutCaution()

    /**
     * Set the value of [id_compte_bancaire] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdCompteBancaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_compte_bancaire !== $v) {
            $this->id_compte_bancaire = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_COMPTE_BANCAIRE;
        }

        if ($this->aCommonTCompteBancaire !== null && $this->aCommonTCompteBancaire->getId() !== $v) {
            $this->aCommonTCompteBancaire = null;
        }


        return $this;
    } // setIdCompteBancaire()

    /**
     * Set the value of [id_blob_demande] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdBlobDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_demande !== $v) {
            $this->id_blob_demande = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_BLOB_DEMANDE;
        }


        return $this;
    } // setIdBlobDemande()

    /**
     * Set the value of [nom_doc_demande] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setNomDocDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_doc_demande !== $v) {
            $this->nom_doc_demande = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::NOM_DOC_DEMANDE;
        }


        return $this;
    } // setNomDocDemande()

    /**
     * Set the value of [id_blob_caution] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdBlobCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_caution !== $v) {
            $this->id_blob_caution = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_BLOB_CAUTION;
        }


        return $this;
    } // setIdBlobCaution()

    /**
     * Set the value of [nom_doc_caution] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setNomDocCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_doc_caution !== $v) {
            $this->nom_doc_caution = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::NOM_DOC_CAUTION;
        }


        return $this;
    } // setNomDocCaution()

    /**
     * Set the value of [id_inscrit_crea] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdInscritCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit_crea !== $v) {
            $this->id_inscrit_crea = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_INSCRIT_CREA;
        }


        return $this;
    } // setIdInscritCrea()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionDemandePeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_inscrit_modif] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdInscritModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit_modif !== $v) {
            $this->id_inscrit_modif = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_INSCRIT_MODIF;
        }


        return $this;
    } // setIdInscritModif()

    /**
     * Sets the value of [date_modif] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionDemandePeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

    /**
     * Set the value of [identifiant_bancaire] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdentifiantBancaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_bancaire !== $v) {
            $this->identifiant_bancaire = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::IDENTIFIANT_BANCAIRE;
        }


        return $this;
    } // setIdentifiantBancaire()

    /**
     * Set the value of [id_ville] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ville !== $v) {
            $this->id_ville = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_VILLE;
        }


        return $this;
    } // setIdVille()

    /**
     * Set the value of [acheteur_public] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setAcheteurPublic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acheteur_public !== $v) {
            $this->acheteur_public = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ACHETEUR_PUBLIC;
        }


        return $this;
    } // setAcheteurPublic()

    /**
     * Sets the value of [date_validation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setDateValidation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_validation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_validation !== null && $tmpDt = new DateTime($this->date_validation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_validation = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionDemandePeer::DATE_VALIDATION;
            }
        } // if either are not null


        return $this;
    } // setDateValidation()

    /**
     * Sets the value of [date_rejet] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setDateRejet($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_rejet !== null || $dt !== null) {
            $currentDateAsString = ($this->date_rejet !== null && $tmpDt = new DateTime($this->date_rejet)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_rejet = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionDemandePeer::DATE_REJET;
            }
        } // if either are not null


        return $this;
    } // setDateRejet()

    /**
     * Set the value of [motif_rejet] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setMotifRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_rejet !== $v) {
            $this->motif_rejet = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::MOTIF_REJET;
        }


        return $this;
    } // setMotifRejet()

    /**
     * Set the value of [id_agent_banquier_validation] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdAgentBanquierValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_banquier_validation !== $v) {
            $this->id_agent_banquier_validation = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION;
        }

        if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation !== null && $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation->getId() !== $v) {
            $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation = null;
        }


        return $this;
    } // setIdAgentBanquierValidation()

    /**
     * Set the value of [id_agent_banquier_rejet] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdAgentBanquierRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_banquier_rejet !== $v) {
            $this->id_agent_banquier_rejet = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET;
        }

        if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet !== null && $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet->getId() !== $v) {
            $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet = null;
        }


        return $this;
    } // setIdAgentBanquierRejet()

    /**
     * Set the value of [reference_modele] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setReferenceModele($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reference_modele !== $v) {
            $this->reference_modele = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::REFERENCE_MODELE;
        }


        return $this;
    } // setReferenceModele()

    /**
     * Sets the value of [date_prise_en_charge] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setDatePriseEnCharge($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_prise_en_charge !== null || $dt !== null) {
            $currentDateAsString = ($this->date_prise_en_charge !== null && $tmpDt = new DateTime($this->date_prise_en_charge)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_prise_en_charge = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionDemandePeer::DATE_PRISE_EN_CHARGE;
            }
        } // if either are not null


        return $this;
    } // setDatePriseEnCharge()

    /**
     * Set the value of [id_agent_prise_en_charge] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdAgentPriseEnCharge($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_prise_en_charge !== $v) {
            $this->id_agent_prise_en_charge = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE;
        }

        if ($this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge !== null && $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge->getId() !== $v) {
            $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge = null;
        }


        return $this;
    } // setIdAgentPriseEnCharge()

    /**
     * Set the value of [taguee] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setTaguee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taguee !== $v) {
            $this->taguee = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::TAGUEE;
        }


        return $this;
    } // setTaguee()

    /**
     * Set the value of [utilisee] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setUtilisee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->utilisee !== $v) {
            $this->utilisee = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::UTILISEE;
        }


        return $this;
    } // setUtilisee()

    /**
     * Set the value of [mise_a_dispo] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setMiseADispo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mise_a_dispo !== $v) {
            $this->mise_a_dispo = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::MISE_A_DISPO;
        }


        return $this;
    } // setMiseADispo()

    /**
     * Set the value of [id_signataire1] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdSignataire1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_signataire1 !== $v) {
            $this->id_signataire1 = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_SIGNATAIRE1;
        }

        if ($this->aCommonAgentBanquierRelatedByIdSignataire1 !== null && $this->aCommonAgentBanquierRelatedByIdSignataire1->getId() !== $v) {
            $this->aCommonAgentBanquierRelatedByIdSignataire1 = null;
        }


        return $this;
    } // setIdSignataire1()

    /**
     * Sets the value of [date_signature1] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setDateSignature1($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_signature1 !== null || $dt !== null) {
            $currentDateAsString = ($this->date_signature1 !== null && $tmpDt = new DateTime($this->date_signature1)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_signature1 = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionDemandePeer::DATE_SIGNATURE1;
            }
        } // if either are not null


        return $this;
    } // setDateSignature1()

    /**
     * Set the value of [id_signataire2] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdSignataire2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_signataire2 !== $v) {
            $this->id_signataire2 = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_SIGNATAIRE2;
        }

        if ($this->aCommonAgentBanquierRelatedByIdSignataire2 !== null && $this->aCommonAgentBanquierRelatedByIdSignataire2->getId() !== $v) {
            $this->aCommonAgentBanquierRelatedByIdSignataire2 = null;
        }


        return $this;
    } // setIdSignataire2()

    /**
     * Sets the value of [date_signature2] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setDateSignature2($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_signature2 !== null || $dt !== null) {
            $currentDateAsString = ($this->date_signature2 !== null && $tmpDt = new DateTime($this->date_signature2)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_signature2 = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionDemandePeer::DATE_SIGNATURE2;
            }
        } // if either are not null


        return $this;
    } // setDateSignature2()

    /**
     * Set the value of [groupement] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setGroupement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->groupement !== $v) {
            $this->groupement = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::GROUPEMENT;
        }


        return $this;
    } // setGroupement()

    /**
     * Set the value of [id_groupement] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setIdGroupement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_groupement !== $v) {
            $this->id_groupement = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::ID_GROUPEMENT;
        }


        return $this;
    } // setIdGroupement()

    /**
     * Set the value of [code_agence] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setCodeAgence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_agence !== $v) {
            $this->code_agence = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::CODE_AGENCE;
        }


        return $this;
    } // setCodeAgence()

    /**
     * Set the value of [code_ville] column.
     * 
     * @param string $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setCodeVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_ville !== $v) {
            $this->code_ville = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::CODE_VILLE;
        }


        return $this;
    } // setCodeVille()

    /**
     * Set the value of [reference_interne] column.
     * 
     * @param int $v new value
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setReferenceInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reference_interne !== $v) {
            $this->reference_interne = $v;
            $this->modifiedColumns[] = CommonCautionDemandePeer::REFERENCE_INTERNE;
        }


        return $this;
    } // setReferenceInterne()

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
            if ($this->taguee !== '0') {
                return false;
            }

            if ($this->utilisee !== '0') {
                return false;
            }

            if ($this->mise_a_dispo !== '0') {
                return false;
            }

            if ($this->groupement !== '0') {
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
            $this->ref_consultation = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_entreprise = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_inscrit = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->acronyme = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->intitule = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->lot = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->objet_lot = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->raison_sociale = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->montant = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->date_demande = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_limite_remise_plis = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->id_statut_caution = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->id_compte_bancaire = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->id_blob_demande = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->nom_doc_demande = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->id_blob_caution = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->nom_doc_caution = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->id_inscrit_crea = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->date_crea = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->id_inscrit_modif = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->date_modif = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->identifiant_bancaire = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->id_ville = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->acheteur_public = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->date_validation = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->date_rejet = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->motif_rejet = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->id_agent_banquier_validation = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->id_agent_banquier_rejet = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->reference_modele = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->date_prise_en_charge = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->id_agent_prise_en_charge = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->taguee = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->utilisee = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->mise_a_dispo = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->id_signataire1 = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->date_signature1 = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->id_signataire2 = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->date_signature2 = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->groupement = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->id_groupement = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->code_agence = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->code_ville = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->reference_interne = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 45; // 45 = CommonCautionDemandePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonCautionDemande object", $e);
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

        if ($this->aCommonTCompteBancaire !== null && $this->id_compte_bancaire !== $this->aCommonTCompteBancaire->getId()) {
            $this->aCommonTCompteBancaire = null;
        }
        if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation !== null && $this->id_agent_banquier_validation !== $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation->getId()) {
            $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation = null;
        }
        if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet !== null && $this->id_agent_banquier_rejet !== $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet->getId()) {
            $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet = null;
        }
        if ($this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge !== null && $this->id_agent_prise_en_charge !== $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge->getId()) {
            $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge = null;
        }
        if ($this->aCommonAgentBanquierRelatedByIdSignataire1 !== null && $this->id_signataire1 !== $this->aCommonAgentBanquierRelatedByIdSignataire1->getId()) {
            $this->aCommonAgentBanquierRelatedByIdSignataire1 = null;
        }
        if ($this->aCommonAgentBanquierRelatedByIdSignataire2 !== null && $this->id_signataire2 !== $this->aCommonAgentBanquierRelatedByIdSignataire2->getId()) {
            $this->aCommonAgentBanquierRelatedByIdSignataire2 = null;
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
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonCautionDemandePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet = null;
            $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation = null;
            $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge = null;
            $this->aCommonTCompteBancaire = null;
            $this->aCommonAgentBanquierRelatedByIdSignataire1 = null;
            $this->aCommonAgentBanquierRelatedByIdSignataire2 = null;
            $this->collCommonCautionRestitutions = null;

            $this->collCommonCautionSignataireDemandes = null;

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
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonCautionDemandeQuery::create()
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
            $con = Propel::getConnection(CommonCautionDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonCautionDemandePeer::addInstanceToPool($this);
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

            if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet !== null) {
                if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet->isModified() || $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet->isNew()) {
                    $affectedRows += $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet->save($con);
                }
                $this->setCommonAgentBanquierRelatedByIdAgentBanquierRejet($this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet);
            }

            if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation !== null) {
                if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation->isModified() || $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation->isNew()) {
                    $affectedRows += $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation->save($con);
                }
                $this->setCommonAgentBanquierRelatedByIdAgentBanquierValidation($this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation);
            }

            if ($this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge !== null) {
                if ($this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge->isModified() || $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge->isNew()) {
                    $affectedRows += $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge->save($con);
                }
                $this->setCommonAgentBanquierRelatedByIdAgentPriseEnCharge($this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge);
            }

            if ($this->aCommonTCompteBancaire !== null) {
                if ($this->aCommonTCompteBancaire->isModified() || $this->aCommonTCompteBancaire->isNew()) {
                    $affectedRows += $this->aCommonTCompteBancaire->save($con);
                }
                $this->setCommonTCompteBancaire($this->aCommonTCompteBancaire);
            }

            if ($this->aCommonAgentBanquierRelatedByIdSignataire1 !== null) {
                if ($this->aCommonAgentBanquierRelatedByIdSignataire1->isModified() || $this->aCommonAgentBanquierRelatedByIdSignataire1->isNew()) {
                    $affectedRows += $this->aCommonAgentBanquierRelatedByIdSignataire1->save($con);
                }
                $this->setCommonAgentBanquierRelatedByIdSignataire1($this->aCommonAgentBanquierRelatedByIdSignataire1);
            }

            if ($this->aCommonAgentBanquierRelatedByIdSignataire2 !== null) {
                if ($this->aCommonAgentBanquierRelatedByIdSignataire2->isModified() || $this->aCommonAgentBanquierRelatedByIdSignataire2->isNew()) {
                    $affectedRows += $this->aCommonAgentBanquierRelatedByIdSignataire2->save($con);
                }
                $this->setCommonAgentBanquierRelatedByIdSignataire2($this->aCommonAgentBanquierRelatedByIdSignataire2);
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

            if ($this->commonCautionRestitutionsScheduledForDeletion !== null) {
                if (!$this->commonCautionRestitutionsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonCautionRestitutionsScheduledForDeletion as $commonCautionRestitution) {
                        // need to save related object because we set the relation to null
                        $commonCautionRestitution->save($con);
                    }
                    $this->commonCautionRestitutionsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonCautionRestitutions !== null) {
                foreach ($this->collCommonCautionRestitutions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonCautionSignataireDemandesScheduledForDeletion !== null) {
                if (!$this->commonCautionSignataireDemandesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonCautionSignataireDemandesScheduledForDeletion as $commonCautionSignataireDemande) {
                        // need to save related object because we set the relation to null
                        $commonCautionSignataireDemande->save($con);
                    }
                    $this->commonCautionSignataireDemandesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonCautionSignataireDemandes !== null) {
                foreach ($this->collCommonCautionSignataireDemandes as $referrerFK) {
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

        $this->modifiedColumns[] = CommonCautionDemandePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonCautionDemandePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonCautionDemandePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::REF_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`REF_CONSULTATION`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTREPRISE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_INSCRIT`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ACRONYME)) {
            $modifiedColumns[':p' . $index++]  = '`ACRONYME`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`INTITULE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`LOT`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::OBJET_LOT)) {
            $modifiedColumns[':p' . $index++]  = '`OBJET_LOT`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::RAISON_SOCIALE)) {
            $modifiedColumns[':p' . $index++]  = '`RAISON_SOCIALE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::MONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`MONTANT`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_DEMANDE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_LIMITE_REMISE_PLIS)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_LIMITE_REMISE_PLIS`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_STATUT_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_STATUT_CAUTION`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_COMPTE_BANCAIRE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_BLOB_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_BLOB_DEMANDE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::NOM_DOC_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_DOC_DEMANDE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_BLOB_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_BLOB_CAUTION`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::NOM_DOC_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_DOC_CAUTION`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_INSCRIT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_INSCRIT_CREA`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_CREA`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_INSCRIT_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`ID_INSCRIT_MODIF`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_MODIF`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::IDENTIFIANT_BANCAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_BANCAIRE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_VILLE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ACHETEUR_PUBLIC)) {
            $modifiedColumns[':p' . $index++]  = '`ACHETEUR_PUBLIC`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_VALIDATION`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_REJET`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::MOTIF_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`MOTIF_REJET`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_BANQUIER_VALIDATION`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_BANQUIER_REJET`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::REFERENCE_MODELE)) {
            $modifiedColumns[':p' . $index++]  = '`REFERENCE_MODELE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_PRISE_EN_CHARGE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_PRISE_EN_CHARGE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_PRISE_EN_CHARGE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::TAGUEE)) {
            $modifiedColumns[':p' . $index++]  = '`TAGUEE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::UTILISEE)) {
            $modifiedColumns[':p' . $index++]  = '`UTILISEE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::MISE_A_DISPO)) {
            $modifiedColumns[':p' . $index++]  = '`MISE_A_DISPO`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_SIGNATAIRE1)) {
            $modifiedColumns[':p' . $index++]  = '`ID_SIGNATAIRE1`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_SIGNATURE1)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_SIGNATURE1`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_SIGNATAIRE2)) {
            $modifiedColumns[':p' . $index++]  = '`ID_SIGNATAIRE2`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_SIGNATURE2)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_SIGNATURE2`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::GROUPEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`GROUPEMENT`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_GROUPEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_GROUPEMENT`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::CODE_AGENCE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_AGENCE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::CODE_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_VILLE`';
        }
        if ($this->isColumnModified(CommonCautionDemandePeer::REFERENCE_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`REFERENCE_INTERNE`';
        }

        $sql = sprintf(
            'INSERT INTO `caution_demande` (%s) VALUES (%s)',
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
                    case '`REF_CONSULTATION`':						
                        $stmt->bindValue($identifier, $this->ref_consultation, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTREPRISE`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`ID_INSCRIT`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`ACRONYME`':						
                        $stmt->bindValue($identifier, $this->acronyme, PDO::PARAM_STR);
                        break;
                    case '`INTITULE`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
                        break;
                    case '`LOT`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`OBJET_LOT`':						
                        $stmt->bindValue($identifier, $this->objet_lot, PDO::PARAM_STR);
                        break;
                    case '`RAISON_SOCIALE`':						
                        $stmt->bindValue($identifier, $this->raison_sociale, PDO::PARAM_STR);
                        break;
                    case '`MONTANT`':						
                        $stmt->bindValue($identifier, $this->montant, PDO::PARAM_STR);
                        break;
                    case '`DATE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->date_demande, PDO::PARAM_STR);
                        break;
                    case '`DATE_LIMITE_REMISE_PLIS`':						
                        $stmt->bindValue($identifier, $this->date_limite_remise_plis, PDO::PARAM_STR);
                        break;
                    case '`ID_STATUT_CAUTION`':						
                        $stmt->bindValue($identifier, $this->id_statut_caution, PDO::PARAM_INT);
                        break;
                    case '`ID_COMPTE_BANCAIRE`':						
                        $stmt->bindValue($identifier, $this->id_compte_bancaire, PDO::PARAM_INT);
                        break;
                    case '`ID_BLOB_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_blob_demande, PDO::PARAM_INT);
                        break;
                    case '`NOM_DOC_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->nom_doc_demande, PDO::PARAM_STR);
                        break;
                    case '`ID_BLOB_CAUTION`':						
                        $stmt->bindValue($identifier, $this->id_blob_caution, PDO::PARAM_INT);
                        break;
                    case '`NOM_DOC_CAUTION`':						
                        $stmt->bindValue($identifier, $this->nom_doc_caution, PDO::PARAM_STR);
                        break;
                    case '`ID_INSCRIT_CREA`':						
                        $stmt->bindValue($identifier, $this->id_inscrit_crea, PDO::PARAM_INT);
                        break;
                    case '`DATE_CREA`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`ID_INSCRIT_MODIF`':						
                        $stmt->bindValue($identifier, $this->id_inscrit_modif, PDO::PARAM_INT);
                        break;
                    case '`DATE_MODIF`':						
                        $stmt->bindValue($identifier, $this->date_modif, PDO::PARAM_STR);
                        break;
                    case '`IDENTIFIANT_BANCAIRE`':						
                        $stmt->bindValue($identifier, $this->identifiant_bancaire, PDO::PARAM_STR);
                        break;
                    case '`ID_VILLE`':						
                        $stmt->bindValue($identifier, $this->id_ville, PDO::PARAM_INT);
                        break;
                    case '`ACHETEUR_PUBLIC`':						
                        $stmt->bindValue($identifier, $this->acheteur_public, PDO::PARAM_STR);
                        break;
                    case '`DATE_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->date_validation, PDO::PARAM_STR);
                        break;
                    case '`DATE_REJET`':						
                        $stmt->bindValue($identifier, $this->date_rejet, PDO::PARAM_STR);
                        break;
                    case '`MOTIF_REJET`':						
                        $stmt->bindValue($identifier, $this->motif_rejet, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT_BANQUIER_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->id_agent_banquier_validation, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_BANQUIER_REJET`':						
                        $stmt->bindValue($identifier, $this->id_agent_banquier_rejet, PDO::PARAM_INT);
                        break;
                    case '`REFERENCE_MODELE`':						
                        $stmt->bindValue($identifier, $this->reference_modele, PDO::PARAM_STR);
                        break;
                    case '`DATE_PRISE_EN_CHARGE`':						
                        $stmt->bindValue($identifier, $this->date_prise_en_charge, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT_PRISE_EN_CHARGE`':						
                        $stmt->bindValue($identifier, $this->id_agent_prise_en_charge, PDO::PARAM_INT);
                        break;
                    case '`TAGUEE`':						
                        $stmt->bindValue($identifier, $this->taguee, PDO::PARAM_STR);
                        break;
                    case '`UTILISEE`':						
                        $stmt->bindValue($identifier, $this->utilisee, PDO::PARAM_STR);
                        break;
                    case '`MISE_A_DISPO`':						
                        $stmt->bindValue($identifier, $this->mise_a_dispo, PDO::PARAM_STR);
                        break;
                    case '`ID_SIGNATAIRE1`':						
                        $stmt->bindValue($identifier, $this->id_signataire1, PDO::PARAM_INT);
                        break;
                    case '`DATE_SIGNATURE1`':						
                        $stmt->bindValue($identifier, $this->date_signature1, PDO::PARAM_STR);
                        break;
                    case '`ID_SIGNATAIRE2`':						
                        $stmt->bindValue($identifier, $this->id_signataire2, PDO::PARAM_INT);
                        break;
                    case '`DATE_SIGNATURE2`':						
                        $stmt->bindValue($identifier, $this->date_signature2, PDO::PARAM_STR);
                        break;
                    case '`GROUPEMENT`':						
                        $stmt->bindValue($identifier, $this->groupement, PDO::PARAM_STR);
                        break;
                    case '`ID_GROUPEMENT`':						
                        $stmt->bindValue($identifier, $this->id_groupement, PDO::PARAM_INT);
                        break;
                    case '`CODE_AGENCE`':						
                        $stmt->bindValue($identifier, $this->code_agence, PDO::PARAM_STR);
                        break;
                    case '`CODE_VILLE`':						
                        $stmt->bindValue($identifier, $this->code_ville, PDO::PARAM_STR);
                        break;
                    case '`REFERENCE_INTERNE`':						
                        $stmt->bindValue($identifier, $this->reference_interne, PDO::PARAM_INT);
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

            if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet !== null) {
                if (!$this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet->getValidationFailures());
                }
            }

            if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation !== null) {
                if (!$this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation->getValidationFailures());
                }
            }

            if ($this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge !== null) {
                if (!$this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge->getValidationFailures());
                }
            }

            if ($this->aCommonTCompteBancaire !== null) {
                if (!$this->aCommonTCompteBancaire->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTCompteBancaire->getValidationFailures());
                }
            }

            if ($this->aCommonAgentBanquierRelatedByIdSignataire1 !== null) {
                if (!$this->aCommonAgentBanquierRelatedByIdSignataire1->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentBanquierRelatedByIdSignataire1->getValidationFailures());
                }
            }

            if ($this->aCommonAgentBanquierRelatedByIdSignataire2 !== null) {
                if (!$this->aCommonAgentBanquierRelatedByIdSignataire2->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentBanquierRelatedByIdSignataire2->getValidationFailures());
                }
            }


            if (($retval = CommonCautionDemandePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonCautionRestitutions !== null) {
                    foreach ($this->collCommonCautionRestitutions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonCautionSignataireDemandes !== null) {
                    foreach ($this->collCommonCautionSignataireDemandes as $referrerFK) {
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
        $pos = CommonCautionDemandePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRefConsultation();
                break;
            case 2:
                return $this->getIdEntreprise();
                break;
            case 3:
                return $this->getIdInscrit();
                break;
            case 4:
                return $this->getAcronyme();
                break;
            case 5:
                return $this->getIntitule();
                break;
            case 6:
                return $this->getLot();
                break;
            case 7:
                return $this->getObjetLot();
                break;
            case 8:
                return $this->getRaisonSociale();
                break;
            case 9:
                return $this->getMontant();
                break;
            case 10:
                return $this->getDateDemande();
                break;
            case 11:
                return $this->getDateLimiteRemisePlis();
                break;
            case 12:
                return $this->getIdStatutCaution();
                break;
            case 13:
                return $this->getIdCompteBancaire();
                break;
            case 14:
                return $this->getIdBlobDemande();
                break;
            case 15:
                return $this->getNomDocDemande();
                break;
            case 16:
                return $this->getIdBlobCaution();
                break;
            case 17:
                return $this->getNomDocCaution();
                break;
            case 18:
                return $this->getIdInscritCrea();
                break;
            case 19:
                return $this->getDateCrea();
                break;
            case 20:
                return $this->getIdInscritModif();
                break;
            case 21:
                return $this->getDateModif();
                break;
            case 22:
                return $this->getIdentifiantBancaire();
                break;
            case 23:
                return $this->getIdVille();
                break;
            case 24:
                return $this->getAcheteurPublic();
                break;
            case 25:
                return $this->getDateValidation();
                break;
            case 26:
                return $this->getDateRejet();
                break;
            case 27:
                return $this->getMotifRejet();
                break;
            case 28:
                return $this->getIdAgentBanquierValidation();
                break;
            case 29:
                return $this->getIdAgentBanquierRejet();
                break;
            case 30:
                return $this->getReferenceModele();
                break;
            case 31:
                return $this->getDatePriseEnCharge();
                break;
            case 32:
                return $this->getIdAgentPriseEnCharge();
                break;
            case 33:
                return $this->getTaguee();
                break;
            case 34:
                return $this->getUtilisee();
                break;
            case 35:
                return $this->getMiseADispo();
                break;
            case 36:
                return $this->getIdSignataire1();
                break;
            case 37:
                return $this->getDateSignature1();
                break;
            case 38:
                return $this->getIdSignataire2();
                break;
            case 39:
                return $this->getDateSignature2();
                break;
            case 40:
                return $this->getGroupement();
                break;
            case 41:
                return $this->getIdGroupement();
                break;
            case 42:
                return $this->getCodeAgence();
                break;
            case 43:
                return $this->getCodeVille();
                break;
            case 44:
                return $this->getReferenceInterne();
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
        if (isset($alreadyDumpedObjects['CommonCautionDemande'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonCautionDemande'][$this->getPrimaryKey()] = true;
        $keys = CommonCautionDemandePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getRefConsultation(),
            $keys[2] => $this->getIdEntreprise(),
            $keys[3] => $this->getIdInscrit(),
            $keys[4] => $this->getAcronyme(),
            $keys[5] => $this->getIntitule(),
            $keys[6] => $this->getLot(),
            $keys[7] => $this->getObjetLot(),
            $keys[8] => $this->getRaisonSociale(),
            $keys[9] => $this->getMontant(),
            $keys[10] => $this->getDateDemande(),
            $keys[11] => $this->getDateLimiteRemisePlis(),
            $keys[12] => $this->getIdStatutCaution(),
            $keys[13] => $this->getIdCompteBancaire(),
            $keys[14] => $this->getIdBlobDemande(),
            $keys[15] => $this->getNomDocDemande(),
            $keys[16] => $this->getIdBlobCaution(),
            $keys[17] => $this->getNomDocCaution(),
            $keys[18] => $this->getIdInscritCrea(),
            $keys[19] => $this->getDateCrea(),
            $keys[20] => $this->getIdInscritModif(),
            $keys[21] => $this->getDateModif(),
            $keys[22] => $this->getIdentifiantBancaire(),
            $keys[23] => $this->getIdVille(),
            $keys[24] => $this->getAcheteurPublic(),
            $keys[25] => $this->getDateValidation(),
            $keys[26] => $this->getDateRejet(),
            $keys[27] => $this->getMotifRejet(),
            $keys[28] => $this->getIdAgentBanquierValidation(),
            $keys[29] => $this->getIdAgentBanquierRejet(),
            $keys[30] => $this->getReferenceModele(),
            $keys[31] => $this->getDatePriseEnCharge(),
            $keys[32] => $this->getIdAgentPriseEnCharge(),
            $keys[33] => $this->getTaguee(),
            $keys[34] => $this->getUtilisee(),
            $keys[35] => $this->getMiseADispo(),
            $keys[36] => $this->getIdSignataire1(),
            $keys[37] => $this->getDateSignature1(),
            $keys[38] => $this->getIdSignataire2(),
            $keys[39] => $this->getDateSignature2(),
            $keys[40] => $this->getGroupement(),
            $keys[41] => $this->getIdGroupement(),
            $keys[42] => $this->getCodeAgence(),
            $keys[43] => $this->getCodeVille(),
            $keys[44] => $this->getReferenceInterne(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet) {
                $result['CommonAgentBanquierRelatedByIdAgentBanquierRejet'] = $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation) {
                $result['CommonAgentBanquierRelatedByIdAgentBanquierValidation'] = $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge) {
                $result['CommonAgentBanquierRelatedByIdAgentPriseEnCharge'] = $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonTCompteBancaire) {
                $result['CommonTCompteBancaire'] = $this->aCommonTCompteBancaire->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonAgentBanquierRelatedByIdSignataire1) {
                $result['CommonAgentBanquierRelatedByIdSignataire1'] = $this->aCommonAgentBanquierRelatedByIdSignataire1->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonAgentBanquierRelatedByIdSignataire2) {
                $result['CommonAgentBanquierRelatedByIdSignataire2'] = $this->aCommonAgentBanquierRelatedByIdSignataire2->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonCautionRestitutions) {
                $result['CommonCautionRestitutions'] = $this->collCommonCautionRestitutions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonCautionSignataireDemandes) {
                $result['CommonCautionSignataireDemandes'] = $this->collCommonCautionSignataireDemandes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonCautionDemandePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRefConsultation($value);
                break;
            case 2:
                $this->setIdEntreprise($value);
                break;
            case 3:
                $this->setIdInscrit($value);
                break;
            case 4:
                $this->setAcronyme($value);
                break;
            case 5:
                $this->setIntitule($value);
                break;
            case 6:
                $this->setLot($value);
                break;
            case 7:
                $this->setObjetLot($value);
                break;
            case 8:
                $this->setRaisonSociale($value);
                break;
            case 9:
                $this->setMontant($value);
                break;
            case 10:
                $this->setDateDemande($value);
                break;
            case 11:
                $this->setDateLimiteRemisePlis($value);
                break;
            case 12:
                $this->setIdStatutCaution($value);
                break;
            case 13:
                $this->setIdCompteBancaire($value);
                break;
            case 14:
                $this->setIdBlobDemande($value);
                break;
            case 15:
                $this->setNomDocDemande($value);
                break;
            case 16:
                $this->setIdBlobCaution($value);
                break;
            case 17:
                $this->setNomDocCaution($value);
                break;
            case 18:
                $this->setIdInscritCrea($value);
                break;
            case 19:
                $this->setDateCrea($value);
                break;
            case 20:
                $this->setIdInscritModif($value);
                break;
            case 21:
                $this->setDateModif($value);
                break;
            case 22:
                $this->setIdentifiantBancaire($value);
                break;
            case 23:
                $this->setIdVille($value);
                break;
            case 24:
                $this->setAcheteurPublic($value);
                break;
            case 25:
                $this->setDateValidation($value);
                break;
            case 26:
                $this->setDateRejet($value);
                break;
            case 27:
                $this->setMotifRejet($value);
                break;
            case 28:
                $this->setIdAgentBanquierValidation($value);
                break;
            case 29:
                $this->setIdAgentBanquierRejet($value);
                break;
            case 30:
                $this->setReferenceModele($value);
                break;
            case 31:
                $this->setDatePriseEnCharge($value);
                break;
            case 32:
                $this->setIdAgentPriseEnCharge($value);
                break;
            case 33:
                $this->setTaguee($value);
                break;
            case 34:
                $this->setUtilisee($value);
                break;
            case 35:
                $this->setMiseADispo($value);
                break;
            case 36:
                $this->setIdSignataire1($value);
                break;
            case 37:
                $this->setDateSignature1($value);
                break;
            case 38:
                $this->setIdSignataire2($value);
                break;
            case 39:
                $this->setDateSignature2($value);
                break;
            case 40:
                $this->setGroupement($value);
                break;
            case 41:
                $this->setIdGroupement($value);
                break;
            case 42:
                $this->setCodeAgence($value);
                break;
            case 43:
                $this->setCodeVille($value);
                break;
            case 44:
                $this->setReferenceInterne($value);
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
        $keys = CommonCautionDemandePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setRefConsultation($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdEntreprise($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdInscrit($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAcronyme($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIntitule($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLot($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setObjetLot($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRaisonSociale($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMontant($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateDemande($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateLimiteRemisePlis($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdStatutCaution($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdCompteBancaire($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdBlobDemande($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNomDocDemande($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdBlobCaution($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNomDocCaution($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdInscritCrea($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateCrea($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdInscritModif($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDateModif($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setIdentifiantBancaire($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setIdVille($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAcheteurPublic($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDateValidation($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDateRejet($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setMotifRejet($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setIdAgentBanquierValidation($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setIdAgentBanquierRejet($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setReferenceModele($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDatePriseEnCharge($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setIdAgentPriseEnCharge($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setTaguee($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setUtilisee($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setMiseADispo($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setIdSignataire1($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDateSignature1($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setIdSignataire2($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDateSignature2($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setGroupement($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setIdGroupement($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setCodeAgence($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setCodeVille($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setReferenceInterne($arr[$keys[44]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonCautionDemandePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonCautionDemandePeer::ID)) $criteria->add(CommonCautionDemandePeer::ID, $this->id);
        if ($this->isColumnModified(CommonCautionDemandePeer::REF_CONSULTATION)) $criteria->add(CommonCautionDemandePeer::REF_CONSULTATION, $this->ref_consultation);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_ENTREPRISE)) $criteria->add(CommonCautionDemandePeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_INSCRIT)) $criteria->add(CommonCautionDemandePeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonCautionDemandePeer::ACRONYME)) $criteria->add(CommonCautionDemandePeer::ACRONYME, $this->acronyme);
        if ($this->isColumnModified(CommonCautionDemandePeer::INTITULE)) $criteria->add(CommonCautionDemandePeer::INTITULE, $this->intitule);
        if ($this->isColumnModified(CommonCautionDemandePeer::LOT)) $criteria->add(CommonCautionDemandePeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonCautionDemandePeer::OBJET_LOT)) $criteria->add(CommonCautionDemandePeer::OBJET_LOT, $this->objet_lot);
        if ($this->isColumnModified(CommonCautionDemandePeer::RAISON_SOCIALE)) $criteria->add(CommonCautionDemandePeer::RAISON_SOCIALE, $this->raison_sociale);
        if ($this->isColumnModified(CommonCautionDemandePeer::MONTANT)) $criteria->add(CommonCautionDemandePeer::MONTANT, $this->montant);
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_DEMANDE)) $criteria->add(CommonCautionDemandePeer::DATE_DEMANDE, $this->date_demande);
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_LIMITE_REMISE_PLIS)) $criteria->add(CommonCautionDemandePeer::DATE_LIMITE_REMISE_PLIS, $this->date_limite_remise_plis);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_STATUT_CAUTION)) $criteria->add(CommonCautionDemandePeer::ID_STATUT_CAUTION, $this->id_statut_caution);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE)) $criteria->add(CommonCautionDemandePeer::ID_COMPTE_BANCAIRE, $this->id_compte_bancaire);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_BLOB_DEMANDE)) $criteria->add(CommonCautionDemandePeer::ID_BLOB_DEMANDE, $this->id_blob_demande);
        if ($this->isColumnModified(CommonCautionDemandePeer::NOM_DOC_DEMANDE)) $criteria->add(CommonCautionDemandePeer::NOM_DOC_DEMANDE, $this->nom_doc_demande);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_BLOB_CAUTION)) $criteria->add(CommonCautionDemandePeer::ID_BLOB_CAUTION, $this->id_blob_caution);
        if ($this->isColumnModified(CommonCautionDemandePeer::NOM_DOC_CAUTION)) $criteria->add(CommonCautionDemandePeer::NOM_DOC_CAUTION, $this->nom_doc_caution);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_INSCRIT_CREA)) $criteria->add(CommonCautionDemandePeer::ID_INSCRIT_CREA, $this->id_inscrit_crea);
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_CREA)) $criteria->add(CommonCautionDemandePeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_INSCRIT_MODIF)) $criteria->add(CommonCautionDemandePeer::ID_INSCRIT_MODIF, $this->id_inscrit_modif);
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_MODIF)) $criteria->add(CommonCautionDemandePeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(CommonCautionDemandePeer::IDENTIFIANT_BANCAIRE)) $criteria->add(CommonCautionDemandePeer::IDENTIFIANT_BANCAIRE, $this->identifiant_bancaire);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_VILLE)) $criteria->add(CommonCautionDemandePeer::ID_VILLE, $this->id_ville);
        if ($this->isColumnModified(CommonCautionDemandePeer::ACHETEUR_PUBLIC)) $criteria->add(CommonCautionDemandePeer::ACHETEUR_PUBLIC, $this->acheteur_public);
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_VALIDATION)) $criteria->add(CommonCautionDemandePeer::DATE_VALIDATION, $this->date_validation);
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_REJET)) $criteria->add(CommonCautionDemandePeer::DATE_REJET, $this->date_rejet);
        if ($this->isColumnModified(CommonCautionDemandePeer::MOTIF_REJET)) $criteria->add(CommonCautionDemandePeer::MOTIF_REJET, $this->motif_rejet);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION)) $criteria->add(CommonCautionDemandePeer::ID_AGENT_BANQUIER_VALIDATION, $this->id_agent_banquier_validation);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET)) $criteria->add(CommonCautionDemandePeer::ID_AGENT_BANQUIER_REJET, $this->id_agent_banquier_rejet);
        if ($this->isColumnModified(CommonCautionDemandePeer::REFERENCE_MODELE)) $criteria->add(CommonCautionDemandePeer::REFERENCE_MODELE, $this->reference_modele);
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_PRISE_EN_CHARGE)) $criteria->add(CommonCautionDemandePeer::DATE_PRISE_EN_CHARGE, $this->date_prise_en_charge);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE)) $criteria->add(CommonCautionDemandePeer::ID_AGENT_PRISE_EN_CHARGE, $this->id_agent_prise_en_charge);
        if ($this->isColumnModified(CommonCautionDemandePeer::TAGUEE)) $criteria->add(CommonCautionDemandePeer::TAGUEE, $this->taguee);
        if ($this->isColumnModified(CommonCautionDemandePeer::UTILISEE)) $criteria->add(CommonCautionDemandePeer::UTILISEE, $this->utilisee);
        if ($this->isColumnModified(CommonCautionDemandePeer::MISE_A_DISPO)) $criteria->add(CommonCautionDemandePeer::MISE_A_DISPO, $this->mise_a_dispo);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_SIGNATAIRE1)) $criteria->add(CommonCautionDemandePeer::ID_SIGNATAIRE1, $this->id_signataire1);
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_SIGNATURE1)) $criteria->add(CommonCautionDemandePeer::DATE_SIGNATURE1, $this->date_signature1);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_SIGNATAIRE2)) $criteria->add(CommonCautionDemandePeer::ID_SIGNATAIRE2, $this->id_signataire2);
        if ($this->isColumnModified(CommonCautionDemandePeer::DATE_SIGNATURE2)) $criteria->add(CommonCautionDemandePeer::DATE_SIGNATURE2, $this->date_signature2);
        if ($this->isColumnModified(CommonCautionDemandePeer::GROUPEMENT)) $criteria->add(CommonCautionDemandePeer::GROUPEMENT, $this->groupement);
        if ($this->isColumnModified(CommonCautionDemandePeer::ID_GROUPEMENT)) $criteria->add(CommonCautionDemandePeer::ID_GROUPEMENT, $this->id_groupement);
        if ($this->isColumnModified(CommonCautionDemandePeer::CODE_AGENCE)) $criteria->add(CommonCautionDemandePeer::CODE_AGENCE, $this->code_agence);
        if ($this->isColumnModified(CommonCautionDemandePeer::CODE_VILLE)) $criteria->add(CommonCautionDemandePeer::CODE_VILLE, $this->code_ville);
        if ($this->isColumnModified(CommonCautionDemandePeer::REFERENCE_INTERNE)) $criteria->add(CommonCautionDemandePeer::REFERENCE_INTERNE, $this->reference_interne);

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
        $criteria = new Criteria(CommonCautionDemandePeer::DATABASE_NAME);
        $criteria->add(CommonCautionDemandePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonCautionDemande (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setRefConsultation($this->getRefConsultation());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setAcronyme($this->getAcronyme());
        $copyObj->setIntitule($this->getIntitule());
        $copyObj->setLot($this->getLot());
        $copyObj->setObjetLot($this->getObjetLot());
        $copyObj->setRaisonSociale($this->getRaisonSociale());
        $copyObj->setMontant($this->getMontant());
        $copyObj->setDateDemande($this->getDateDemande());
        $copyObj->setDateLimiteRemisePlis($this->getDateLimiteRemisePlis());
        $copyObj->setIdStatutCaution($this->getIdStatutCaution());
        $copyObj->setIdCompteBancaire($this->getIdCompteBancaire());
        $copyObj->setIdBlobDemande($this->getIdBlobDemande());
        $copyObj->setNomDocDemande($this->getNomDocDemande());
        $copyObj->setIdBlobCaution($this->getIdBlobCaution());
        $copyObj->setNomDocCaution($this->getNomDocCaution());
        $copyObj->setIdInscritCrea($this->getIdInscritCrea());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdInscritModif($this->getIdInscritModif());
        $copyObj->setDateModif($this->getDateModif());
        $copyObj->setIdentifiantBancaire($this->getIdentifiantBancaire());
        $copyObj->setIdVille($this->getIdVille());
        $copyObj->setAcheteurPublic($this->getAcheteurPublic());
        $copyObj->setDateValidation($this->getDateValidation());
        $copyObj->setDateRejet($this->getDateRejet());
        $copyObj->setMotifRejet($this->getMotifRejet());
        $copyObj->setIdAgentBanquierValidation($this->getIdAgentBanquierValidation());
        $copyObj->setIdAgentBanquierRejet($this->getIdAgentBanquierRejet());
        $copyObj->setReferenceModele($this->getReferenceModele());
        $copyObj->setDatePriseEnCharge($this->getDatePriseEnCharge());
        $copyObj->setIdAgentPriseEnCharge($this->getIdAgentPriseEnCharge());
        $copyObj->setTaguee($this->getTaguee());
        $copyObj->setUtilisee($this->getUtilisee());
        $copyObj->setMiseADispo($this->getMiseADispo());
        $copyObj->setIdSignataire1($this->getIdSignataire1());
        $copyObj->setDateSignature1($this->getDateSignature1());
        $copyObj->setIdSignataire2($this->getIdSignataire2());
        $copyObj->setDateSignature2($this->getDateSignature2());
        $copyObj->setGroupement($this->getGroupement());
        $copyObj->setIdGroupement($this->getIdGroupement());
        $copyObj->setCodeAgence($this->getCodeAgence());
        $copyObj->setCodeVille($this->getCodeVille());
        $copyObj->setReferenceInterne($this->getReferenceInterne());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonCautionRestitutions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonCautionRestitution($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonCautionSignataireDemandes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonCautionSignataireDemande($relObj->copy($deepCopy));
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
     * @return CommonCautionDemande Clone of current object.
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
     * @return CommonCautionDemandePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonCautionDemandePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonAgentBanquier object.
     *
     * @param   CommonAgentBanquier $v
     * @return CommonCautionDemande The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgentBanquierRelatedByIdAgentBanquierRejet(CommonAgentBanquier $v = null)
    {
        if ($v === null) {
            $this->setIdAgentBanquierRejet(NULL);
        } else {
            $this->setIdAgentBanquierRejet($v->getId());
        }

        $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgentBanquier object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonCautionDemandeRelatedByIdAgentBanquierRejet($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonAgentBanquier object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonAgentBanquier The associated CommonAgentBanquier object.
     * @throws PropelException
     */
    public function getCommonAgentBanquierRelatedByIdAgentBanquierRejet(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet === null && ($this->id_agent_banquier_rejet !== null) && $doQuery) {
            $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet = CommonAgentBanquierQuery::create()->findPk($this->id_agent_banquier_rejet, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet->addCommonCautionDemandesRelatedByIdAgentBanquierRejet($this);
             */
        }

        return $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet;
    }

    /**
     * Declares an association between this object and a CommonAgentBanquier object.
     *
     * @param   CommonAgentBanquier $v
     * @return CommonCautionDemande The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgentBanquierRelatedByIdAgentBanquierValidation(CommonAgentBanquier $v = null)
    {
        if ($v === null) {
            $this->setIdAgentBanquierValidation(NULL);
        } else {
            $this->setIdAgentBanquierValidation($v->getId());
        }

        $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgentBanquier object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonCautionDemandeRelatedByIdAgentBanquierValidation($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonAgentBanquier object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonAgentBanquier The associated CommonAgentBanquier object.
     * @throws PropelException
     */
    public function getCommonAgentBanquierRelatedByIdAgentBanquierValidation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation === null && ($this->id_agent_banquier_validation !== null) && $doQuery) {
            $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation = CommonAgentBanquierQuery::create()->findPk($this->id_agent_banquier_validation, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation->addCommonCautionDemandesRelatedByIdAgentBanquierValidation($this);
             */
        }

        return $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation;
    }

    /**
     * Declares an association between this object and a CommonAgentBanquier object.
     *
     * @param   CommonAgentBanquier $v
     * @return CommonCautionDemande The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgentBanquierRelatedByIdAgentPriseEnCharge(CommonAgentBanquier $v = null)
    {
        if ($v === null) {
            $this->setIdAgentPriseEnCharge(NULL);
        } else {
            $this->setIdAgentPriseEnCharge($v->getId());
        }

        $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgentBanquier object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonCautionDemandeRelatedByIdAgentPriseEnCharge($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonAgentBanquier object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonAgentBanquier The associated CommonAgentBanquier object.
     * @throws PropelException
     */
    public function getCommonAgentBanquierRelatedByIdAgentPriseEnCharge(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge === null && ($this->id_agent_prise_en_charge !== null) && $doQuery) {
            $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge = CommonAgentBanquierQuery::create()->findPk($this->id_agent_prise_en_charge, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge->addCommonCautionDemandesRelatedByIdAgentPriseEnCharge($this);
             */
        }

        return $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge;
    }

    /**
     * Declares an association between this object and a CommonTCompteBancaire object.
     *
     * @param   CommonTCompteBancaire $v
     * @return CommonCautionDemande The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTCompteBancaire(CommonTCompteBancaire $v = null)
    {
        if ($v === null) {
            $this->setIdCompteBancaire(NULL);
        } else {
            $this->setIdCompteBancaire($v->getId());
        }

        $this->aCommonTCompteBancaire = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTCompteBancaire object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonCautionDemande($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTCompteBancaire object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTCompteBancaire The associated CommonTCompteBancaire object.
     * @throws PropelException
     */
    public function getCommonTCompteBancaire(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTCompteBancaire === null && ($this->id_compte_bancaire !== null) && $doQuery) {
            $this->aCommonTCompteBancaire = CommonTCompteBancaireQuery::create()->findPk($this->id_compte_bancaire, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTCompteBancaire->addCommonCautionDemandes($this);
             */
        }

        return $this->aCommonTCompteBancaire;
    }

    /**
     * Declares an association between this object and a CommonAgentBanquier object.
     *
     * @param   CommonAgentBanquier $v
     * @return CommonCautionDemande The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgentBanquierRelatedByIdSignataire1(CommonAgentBanquier $v = null)
    {
        if ($v === null) {
            $this->setIdSignataire1(NULL);
        } else {
            $this->setIdSignataire1($v->getId());
        }

        $this->aCommonAgentBanquierRelatedByIdSignataire1 = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgentBanquier object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonCautionDemandeRelatedByIdSignataire1($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonAgentBanquier object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonAgentBanquier The associated CommonAgentBanquier object.
     * @throws PropelException
     */
    public function getCommonAgentBanquierRelatedByIdSignataire1(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgentBanquierRelatedByIdSignataire1 === null && ($this->id_signataire1 !== null) && $doQuery) {
            $this->aCommonAgentBanquierRelatedByIdSignataire1 = CommonAgentBanquierQuery::create()->findPk($this->id_signataire1, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgentBanquierRelatedByIdSignataire1->addCommonCautionDemandesRelatedByIdSignataire1($this);
             */
        }

        return $this->aCommonAgentBanquierRelatedByIdSignataire1;
    }

    /**
     * Declares an association between this object and a CommonAgentBanquier object.
     *
     * @param   CommonAgentBanquier $v
     * @return CommonCautionDemande The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgentBanquierRelatedByIdSignataire2(CommonAgentBanquier $v = null)
    {
        if ($v === null) {
            $this->setIdSignataire2(NULL);
        } else {
            $this->setIdSignataire2($v->getId());
        }

        $this->aCommonAgentBanquierRelatedByIdSignataire2 = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgentBanquier object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonCautionDemandeRelatedByIdSignataire2($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonAgentBanquier object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonAgentBanquier The associated CommonAgentBanquier object.
     * @throws PropelException
     */
    public function getCommonAgentBanquierRelatedByIdSignataire2(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgentBanquierRelatedByIdSignataire2 === null && ($this->id_signataire2 !== null) && $doQuery) {
            $this->aCommonAgentBanquierRelatedByIdSignataire2 = CommonAgentBanquierQuery::create()->findPk($this->id_signataire2, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgentBanquierRelatedByIdSignataire2->addCommonCautionDemandesRelatedByIdSignataire2($this);
             */
        }

        return $this->aCommonAgentBanquierRelatedByIdSignataire2;
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
        if ('CommonCautionRestitution' == $relationName) {
            $this->initCommonCautionRestitutions();
        }
        if ('CommonCautionSignataireDemande' == $relationName) {
            $this->initCommonCautionSignataireDemandes();
        }
    }

    /**
     * Clears out the collCommonCautionRestitutions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonCautionDemande The current object (for fluent API support)
     * @see        addCommonCautionRestitutions()
     */
    public function clearCommonCautionRestitutions()
    {
        $this->collCommonCautionRestitutions = null; // important to set this to null since that means it is uninitialized
        $this->collCommonCautionRestitutionsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonCautionRestitutions collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonCautionRestitutions($v = true)
    {
        $this->collCommonCautionRestitutionsPartial = $v;
    }

    /**
     * Initializes the collCommonCautionRestitutions collection.
     *
     * By default this just sets the collCommonCautionRestitutions collection to an empty array (like clearcollCommonCautionRestitutions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonCautionRestitutions($overrideExisting = true)
    {
        if (null !== $this->collCommonCautionRestitutions && !$overrideExisting) {
            return;
        }
        $this->collCommonCautionRestitutions = new PropelObjectCollection();
        $this->collCommonCautionRestitutions->setModel('CommonCautionRestitution');
    }

    /**
     * Gets an array of CommonCautionRestitution objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonCautionDemande is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonCautionRestitution[] List of CommonCautionRestitution objects
     * @throws PropelException
     */
    public function getCommonCautionRestitutions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionRestitutionsPartial && !$this->isNew();
        if (null === $this->collCommonCautionRestitutions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionRestitutions) {
                // return empty collection
                $this->initCommonCautionRestitutions();
            } else {
                $collCommonCautionRestitutions = CommonCautionRestitutionQuery::create(null, $criteria)
                    ->filterByCommonCautionDemande($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonCautionRestitutionsPartial && count($collCommonCautionRestitutions)) {
                      $this->initCommonCautionRestitutions(false);

                      foreach ($collCommonCautionRestitutions as $obj) {
                        if (false == $this->collCommonCautionRestitutions->contains($obj)) {
                          $this->collCommonCautionRestitutions->append($obj);
                        }
                      }

                      $this->collCommonCautionRestitutionsPartial = true;
                    }

                    $collCommonCautionRestitutions->getInternalIterator()->rewind();

                    return $collCommonCautionRestitutions;
                }

                if ($partial && $this->collCommonCautionRestitutions) {
                    foreach ($this->collCommonCautionRestitutions as $obj) {
                        if ($obj->isNew()) {
                            $collCommonCautionRestitutions[] = $obj;
                        }
                    }
                }

                $this->collCommonCautionRestitutions = $collCommonCautionRestitutions;
                $this->collCommonCautionRestitutionsPartial = false;
            }
        }

        return $this->collCommonCautionRestitutions;
    }

    /**
     * Sets a collection of CommonCautionRestitution objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonCautionRestitutions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setCommonCautionRestitutions(PropelCollection $commonCautionRestitutions, PropelPDO $con = null)
    {
        $commonCautionRestitutionsToDelete = $this->getCommonCautionRestitutions(new Criteria(), $con)->diff($commonCautionRestitutions);


        $this->commonCautionRestitutionsScheduledForDeletion = $commonCautionRestitutionsToDelete;

        foreach ($commonCautionRestitutionsToDelete as $commonCautionRestitutionRemoved) {
            $commonCautionRestitutionRemoved->setCommonCautionDemande(null);
        }

        $this->collCommonCautionRestitutions = null;
        foreach ($commonCautionRestitutions as $commonCautionRestitution) {
            $this->addCommonCautionRestitution($commonCautionRestitution);
        }

        $this->collCommonCautionRestitutions = $commonCautionRestitutions;
        $this->collCommonCautionRestitutionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonCautionRestitution objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonCautionRestitution objects.
     * @throws PropelException
     */
    public function countCommonCautionRestitutions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionRestitutionsPartial && !$this->isNew();
        if (null === $this->collCommonCautionRestitutions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionRestitutions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonCautionRestitutions());
            }
            $query = CommonCautionRestitutionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonCautionDemande($this)
                ->count($con);
        }

        return count($this->collCommonCautionRestitutions);
    }

    /**
     * Method called to associate a CommonCautionRestitution object to this object
     * through the CommonCautionRestitution foreign key attribute.
     *
     * @param   CommonCautionRestitution $l CommonCautionRestitution
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function addCommonCautionRestitution(CommonCautionRestitution $l)
    {
        if ($this->collCommonCautionRestitutions === null) {
            $this->initCommonCautionRestitutions();
            $this->collCommonCautionRestitutionsPartial = true;
        }
        if (!in_array($l, $this->collCommonCautionRestitutions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonCautionRestitution($l);
        }

        return $this;
    }

    /**
     * @param	CommonCautionRestitution $commonCautionRestitution The commonCautionRestitution object to add.
     */
    protected function doAddCommonCautionRestitution($commonCautionRestitution)
    {
        $this->collCommonCautionRestitutions[]= $commonCautionRestitution;
        $commonCautionRestitution->setCommonCautionDemande($this);
    }

    /**
     * @param	CommonCautionRestitution $commonCautionRestitution The commonCautionRestitution object to remove.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function removeCommonCautionRestitution($commonCautionRestitution)
    {
        if ($this->getCommonCautionRestitutions()->contains($commonCautionRestitution)) {
            $this->collCommonCautionRestitutions->remove($this->collCommonCautionRestitutions->search($commonCautionRestitution));
            if (null === $this->commonCautionRestitutionsScheduledForDeletion) {
                $this->commonCautionRestitutionsScheduledForDeletion = clone $this->collCommonCautionRestitutions;
                $this->commonCautionRestitutionsScheduledForDeletion->clear();
            }
            $this->commonCautionRestitutionsScheduledForDeletion[]= clone $commonCautionRestitution;
            $commonCautionRestitution->setCommonCautionDemande(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonCautionSignataireDemandes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonCautionDemande The current object (for fluent API support)
     * @see        addCommonCautionSignataireDemandes()
     */
    public function clearCommonCautionSignataireDemandes()
    {
        $this->collCommonCautionSignataireDemandes = null; // important to set this to null since that means it is uninitialized
        $this->collCommonCautionSignataireDemandesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonCautionSignataireDemandes collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonCautionSignataireDemandes($v = true)
    {
        $this->collCommonCautionSignataireDemandesPartial = $v;
    }

    /**
     * Initializes the collCommonCautionSignataireDemandes collection.
     *
     * By default this just sets the collCommonCautionSignataireDemandes collection to an empty array (like clearcollCommonCautionSignataireDemandes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonCautionSignataireDemandes($overrideExisting = true)
    {
        if (null !== $this->collCommonCautionSignataireDemandes && !$overrideExisting) {
            return;
        }
        $this->collCommonCautionSignataireDemandes = new PropelObjectCollection();
        $this->collCommonCautionSignataireDemandes->setModel('CommonCautionSignataireDemande');
    }

    /**
     * Gets an array of CommonCautionSignataireDemande objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonCautionDemande is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonCautionSignataireDemande[] List of CommonCautionSignataireDemande objects
     * @throws PropelException
     */
    public function getCommonCautionSignataireDemandes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionSignataireDemandesPartial && !$this->isNew();
        if (null === $this->collCommonCautionSignataireDemandes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionSignataireDemandes) {
                // return empty collection
                $this->initCommonCautionSignataireDemandes();
            } else {
                $collCommonCautionSignataireDemandes = CommonCautionSignataireDemandeQuery::create(null, $criteria)
                    ->filterByCommonCautionDemande($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonCautionSignataireDemandesPartial && count($collCommonCautionSignataireDemandes)) {
                      $this->initCommonCautionSignataireDemandes(false);

                      foreach ($collCommonCautionSignataireDemandes as $obj) {
                        if (false == $this->collCommonCautionSignataireDemandes->contains($obj)) {
                          $this->collCommonCautionSignataireDemandes->append($obj);
                        }
                      }

                      $this->collCommonCautionSignataireDemandesPartial = true;
                    }

                    $collCommonCautionSignataireDemandes->getInternalIterator()->rewind();

                    return $collCommonCautionSignataireDemandes;
                }

                if ($partial && $this->collCommonCautionSignataireDemandes) {
                    foreach ($this->collCommonCautionSignataireDemandes as $obj) {
                        if ($obj->isNew()) {
                            $collCommonCautionSignataireDemandes[] = $obj;
                        }
                    }
                }

                $this->collCommonCautionSignataireDemandes = $collCommonCautionSignataireDemandes;
                $this->collCommonCautionSignataireDemandesPartial = false;
            }
        }

        return $this->collCommonCautionSignataireDemandes;
    }

    /**
     * Sets a collection of CommonCautionSignataireDemande objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonCautionSignataireDemandes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function setCommonCautionSignataireDemandes(PropelCollection $commonCautionSignataireDemandes, PropelPDO $con = null)
    {
        $commonCautionSignataireDemandesToDelete = $this->getCommonCautionSignataireDemandes(new Criteria(), $con)->diff($commonCautionSignataireDemandes);


        $this->commonCautionSignataireDemandesScheduledForDeletion = $commonCautionSignataireDemandesToDelete;

        foreach ($commonCautionSignataireDemandesToDelete as $commonCautionSignataireDemandeRemoved) {
            $commonCautionSignataireDemandeRemoved->setCommonCautionDemande(null);
        }

        $this->collCommonCautionSignataireDemandes = null;
        foreach ($commonCautionSignataireDemandes as $commonCautionSignataireDemande) {
            $this->addCommonCautionSignataireDemande($commonCautionSignataireDemande);
        }

        $this->collCommonCautionSignataireDemandes = $commonCautionSignataireDemandes;
        $this->collCommonCautionSignataireDemandesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonCautionSignataireDemande objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonCautionSignataireDemande objects.
     * @throws PropelException
     */
    public function countCommonCautionSignataireDemandes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonCautionSignataireDemandesPartial && !$this->isNew();
        if (null === $this->collCommonCautionSignataireDemandes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonCautionSignataireDemandes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonCautionSignataireDemandes());
            }
            $query = CommonCautionSignataireDemandeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonCautionDemande($this)
                ->count($con);
        }

        return count($this->collCommonCautionSignataireDemandes);
    }

    /**
     * Method called to associate a CommonCautionSignataireDemande object to this object
     * through the CommonCautionSignataireDemande foreign key attribute.
     *
     * @param   CommonCautionSignataireDemande $l CommonCautionSignataireDemande
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function addCommonCautionSignataireDemande(CommonCautionSignataireDemande $l)
    {
        if ($this->collCommonCautionSignataireDemandes === null) {
            $this->initCommonCautionSignataireDemandes();
            $this->collCommonCautionSignataireDemandesPartial = true;
        }
        if (!in_array($l, $this->collCommonCautionSignataireDemandes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonCautionSignataireDemande($l);
        }

        return $this;
    }

    /**
     * @param	CommonCautionSignataireDemande $commonCautionSignataireDemande The commonCautionSignataireDemande object to add.
     */
    protected function doAddCommonCautionSignataireDemande($commonCautionSignataireDemande)
    {
        $this->collCommonCautionSignataireDemandes[]= $commonCautionSignataireDemande;
        $commonCautionSignataireDemande->setCommonCautionDemande($this);
    }

    /**
     * @param	CommonCautionSignataireDemande $commonCautionSignataireDemande The commonCautionSignataireDemande object to remove.
     * @return CommonCautionDemande The current object (for fluent API support)
     */
    public function removeCommonCautionSignataireDemande($commonCautionSignataireDemande)
    {
        if ($this->getCommonCautionSignataireDemandes()->contains($commonCautionSignataireDemande)) {
            $this->collCommonCautionSignataireDemandes->remove($this->collCommonCautionSignataireDemandes->search($commonCautionSignataireDemande));
            if (null === $this->commonCautionSignataireDemandesScheduledForDeletion) {
                $this->commonCautionSignataireDemandesScheduledForDeletion = clone $this->collCommonCautionSignataireDemandes;
                $this->commonCautionSignataireDemandesScheduledForDeletion->clear();
            }
            $this->commonCautionSignataireDemandesScheduledForDeletion[]= clone $commonCautionSignataireDemande;
            $commonCautionSignataireDemande->setCommonCautionDemande(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonCautionDemande is new, it will return
     * an empty collection; or if this CommonCautionDemande has previously
     * been saved, it will retrieve related CommonCautionSignataireDemandes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonCautionDemande.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonCautionSignataireDemande[] List of CommonCautionSignataireDemande objects
     */
    public function getCommonCautionSignataireDemandesJoinCommonAgentBanquier($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonCautionSignataireDemandeQuery::create(null, $criteria);
        $query->joinWith('CommonAgentBanquier', $join_behavior);

        return $this->getCommonCautionSignataireDemandes($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->ref_consultation = null;
        $this->id_entreprise = null;
        $this->id_inscrit = null;
        $this->acronyme = null;
        $this->intitule = null;
        $this->lot = null;
        $this->objet_lot = null;
        $this->raison_sociale = null;
        $this->montant = null;
        $this->date_demande = null;
        $this->date_limite_remise_plis = null;
        $this->id_statut_caution = null;
        $this->id_compte_bancaire = null;
        $this->id_blob_demande = null;
        $this->nom_doc_demande = null;
        $this->id_blob_caution = null;
        $this->nom_doc_caution = null;
        $this->id_inscrit_crea = null;
        $this->date_crea = null;
        $this->id_inscrit_modif = null;
        $this->date_modif = null;
        $this->identifiant_bancaire = null;
        $this->id_ville = null;
        $this->acheteur_public = null;
        $this->date_validation = null;
        $this->date_rejet = null;
        $this->motif_rejet = null;
        $this->id_agent_banquier_validation = null;
        $this->id_agent_banquier_rejet = null;
        $this->reference_modele = null;
        $this->date_prise_en_charge = null;
        $this->id_agent_prise_en_charge = null;
        $this->taguee = null;
        $this->utilisee = null;
        $this->mise_a_dispo = null;
        $this->id_signataire1 = null;
        $this->date_signature1 = null;
        $this->id_signataire2 = null;
        $this->date_signature2 = null;
        $this->groupement = null;
        $this->id_groupement = null;
        $this->code_agence = null;
        $this->code_ville = null;
        $this->reference_interne = null;
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
            if ($this->collCommonCautionRestitutions) {
                foreach ($this->collCommonCautionRestitutions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonCautionSignataireDemandes) {
                foreach ($this->collCommonCautionSignataireDemandes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet instanceof Persistent) {
              $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet->clearAllReferences($deep);
            }
            if ($this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation instanceof Persistent) {
              $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation->clearAllReferences($deep);
            }
            if ($this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge instanceof Persistent) {
              $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge->clearAllReferences($deep);
            }
            if ($this->aCommonTCompteBancaire instanceof Persistent) {
              $this->aCommonTCompteBancaire->clearAllReferences($deep);
            }
            if ($this->aCommonAgentBanquierRelatedByIdSignataire1 instanceof Persistent) {
              $this->aCommonAgentBanquierRelatedByIdSignataire1->clearAllReferences($deep);
            }
            if ($this->aCommonAgentBanquierRelatedByIdSignataire2 instanceof Persistent) {
              $this->aCommonAgentBanquierRelatedByIdSignataire2->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonCautionRestitutions instanceof PropelCollection) {
            $this->collCommonCautionRestitutions->clearIterator();
        }
        $this->collCommonCautionRestitutions = null;
        if ($this->collCommonCautionSignataireDemandes instanceof PropelCollection) {
            $this->collCommonCautionSignataireDemandes->clearIterator();
        }
        $this->collCommonCautionSignataireDemandes = null;
        $this->aCommonAgentBanquierRelatedByIdAgentBanquierRejet = null;
        $this->aCommonAgentBanquierRelatedByIdAgentBanquierValidation = null;
        $this->aCommonAgentBanquierRelatedByIdAgentPriseEnCharge = null;
        $this->aCommonTCompteBancaire = null;
        $this->aCommonAgentBanquierRelatedByIdSignataire1 = null;
        $this->aCommonAgentBanquierRelatedByIdSignataire2 = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonCautionDemandePeer::DEFAULT_STRING_FORMAT);
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
