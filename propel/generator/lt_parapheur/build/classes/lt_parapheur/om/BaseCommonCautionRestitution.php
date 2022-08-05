<?php


/**
 * Base class that represents a row from the 'caution_restitution' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionRestitution extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonCautionRestitutionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonCautionRestitutionPeer
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
     * The value for the id_caution_demande field.
     * @var        int
     */
    protected $id_caution_demande;

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
     * The value for the raison_sociale field.
     * @var        string
     */
    protected $raison_sociale;

    /**
     * The value for the ref_consultation field.
     * @var        int
     */
    protected $ref_consultation;

    /**
     * The value for the acronyme_org field.
     * @var        string
     */
    protected $acronyme_org;

    /**
     * The value for the id_acheteur_service field.
     * @var        int
     */
    protected $id_acheteur_service;

    /**
     * The value for the id_statut field.
     * @var        int
     */
    protected $id_statut;

    /**
     * The value for the type_annulation field.
     * @var        string
     */
    protected $type_annulation;

    /**
     * The value for the num_compte_virement field.
     * @var        string
     */
    protected $num_compte_virement;

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
     * The value for the id_blob_mainlevee field.
     * @var        int
     */
    protected $id_blob_mainlevee;

    /**
     * The value for the nom_doc_mainlevee field.
     * @var        string
     */
    protected $nom_doc_mainlevee;

    /**
     * The value for the date_crea field.
     * @var        string
     */
    protected $date_crea;

    /**
     * The value for the date_modif field.
     * @var        string
     */
    protected $date_modif;

    /**
     * The value for the date_depot field.
     * @var        string
     */
    protected $date_depot;

    /**
     * The value for the motif_rejet_acheteur field.
     * @var        string
     */
    protected $motif_rejet_acheteur;

    /**
     * The value for the id_agent_acheteur_generation_mainlevee field.
     * @var        int
     */
    protected $id_agent_acheteur_generation_mainlevee;

    /**
     * The value for the id_agent_acheteur_signataire field.
     * @var        int
     */
    protected $id_agent_acheteur_signataire;

    /**
     * The value for the id_agent_acheteur_validation field.
     * @var        int
     */
    protected $id_agent_acheteur_validation;

    /**
     * The value for the id_agent_acheteur_rejet field.
     * @var        int
     */
    protected $id_agent_acheteur_rejet;

    /**
     * The value for the date_generation_mainlevee field.
     * @var        string
     */
    protected $date_generation_mainlevee;

    /**
     * The value for the date_signature field.
     * @var        string
     */
    protected $date_signature;

    /**
     * The value for the date_validation_acheteur field.
     * @var        string
     */
    protected $date_validation_acheteur;

    /**
     * The value for the date_rejet_acheteur field.
     * @var        string
     */
    protected $date_rejet_acheteur;

    /**
     * The value for the date_prise_en_charge_banque field.
     * @var        string
     */
    protected $date_prise_en_charge_banque;

    /**
     * The value for the date_validation_banque field.
     * @var        string
     */
    protected $date_validation_banque;

    /**
     * The value for the date_rejet_banque field.
     * @var        string
     */
    protected $date_rejet_banque;

    /**
     * The value for the id_agent_banquier_prise_en_charge field.
     * @var        int
     */
    protected $id_agent_banquier_prise_en_charge;

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
     * The value for the motif_rejet_banquier field.
     * @var        string
     */
    protected $motif_rejet_banquier;

    /**
     * The value for the id_ville field.
     * @var        int
     */
    protected $id_ville;

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
     * @var        CommonCautionDemande
     */
    protected $aCommonCautionDemande;

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
     * Get the [id_caution_demande] column value.
     * 
     * @return int
     */
    public function getIdCautionDemande()
    {

        return $this->id_caution_demande;
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
     * Get the [raison_sociale] column value.
     * 
     * @return string
     */
    public function getRaisonSociale()
    {

        return $this->raison_sociale;
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
     * Get the [acronyme_org] column value.
     * 
     * @return string
     */
    public function getAcronymeOrg()
    {

        return $this->acronyme_org;
    }

    /**
     * Get the [id_acheteur_service] column value.
     * 
     * @return int
     */
    public function getIdAcheteurService()
    {

        return $this->id_acheteur_service;
    }

    /**
     * Get the [id_statut] column value.
     * 
     * @return int
     */
    public function getIdStatut()
    {

        return $this->id_statut;
    }

    /**
     * Get the [type_annulation] column value.
     * 
     * @return string
     */
    public function getTypeAnnulation()
    {

        return $this->type_annulation;
    }

    /**
     * Get the [num_compte_virement] column value.
     * 
     * @return string
     */
    public function getNumCompteVirement()
    {

        return $this->num_compte_virement;
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
     * Get the [id_blob_mainlevee] column value.
     * 
     * @return int
     */
    public function getIdBlobMainlevee()
    {

        return $this->id_blob_mainlevee;
    }

    /**
     * Get the [nom_doc_mainlevee] column value.
     * 
     * @return string
     */
    public function getNomDocMainlevee()
    {

        return $this->nom_doc_mainlevee;
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
     * Get the [motif_rejet_acheteur] column value.
     * 
     * @return string
     */
    public function getMotifRejetAcheteur()
    {

        return $this->motif_rejet_acheteur;
    }

    /**
     * Get the [id_agent_acheteur_generation_mainlevee] column value.
     * 
     * @return int
     */
    public function getIdAgentAcheteurGenerationMainlevee()
    {

        return $this->id_agent_acheteur_generation_mainlevee;
    }

    /**
     * Get the [id_agent_acheteur_signataire] column value.
     * 
     * @return int
     */
    public function getIdAgentAcheteurSignataire()
    {

        return $this->id_agent_acheteur_signataire;
    }

    /**
     * Get the [id_agent_acheteur_validation] column value.
     * 
     * @return int
     */
    public function getIdAgentAcheteurValidation()
    {

        return $this->id_agent_acheteur_validation;
    }

    /**
     * Get the [id_agent_acheteur_rejet] column value.
     * 
     * @return int
     */
    public function getIdAgentAcheteurRejet()
    {

        return $this->id_agent_acheteur_rejet;
    }

    /**
     * Get the [optionally formatted] temporal [date_generation_mainlevee] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateGenerationMainlevee($format = 'Y-m-d H:i:s')
    {
        if ($this->date_generation_mainlevee === null) {
            return null;
        }

        if ($this->date_generation_mainlevee === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_generation_mainlevee);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_generation_mainlevee, true), $x);
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
     * Get the [optionally formatted] temporal [date_signature] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateSignature($format = 'Y-m-d H:i:s')
    {
        if ($this->date_signature === null) {
            return null;
        }

        if ($this->date_signature === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_signature);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_signature, true), $x);
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
     * Get the [optionally formatted] temporal [date_validation_acheteur] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateValidationAcheteur($format = 'Y-m-d H:i:s')
    {
        if ($this->date_validation_acheteur === null) {
            return null;
        }

        if ($this->date_validation_acheteur === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_validation_acheteur);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_validation_acheteur, true), $x);
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
     * Get the [optionally formatted] temporal [date_rejet_acheteur] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateRejetAcheteur($format = 'Y-m-d H:i:s')
    {
        if ($this->date_rejet_acheteur === null) {
            return null;
        }

        if ($this->date_rejet_acheteur === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_rejet_acheteur);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_rejet_acheteur, true), $x);
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
     * Get the [optionally formatted] temporal [date_prise_en_charge_banque] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatePriseEnChargeBanque($format = 'Y-m-d H:i:s')
    {
        if ($this->date_prise_en_charge_banque === null) {
            return null;
        }

        if ($this->date_prise_en_charge_banque === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_prise_en_charge_banque);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_prise_en_charge_banque, true), $x);
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
     * Get the [optionally formatted] temporal [date_validation_banque] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateValidationBanque($format = 'Y-m-d H:i:s')
    {
        if ($this->date_validation_banque === null) {
            return null;
        }

        if ($this->date_validation_banque === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_validation_banque);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_validation_banque, true), $x);
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
     * Get the [optionally formatted] temporal [date_rejet_banque] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateRejetBanque($format = 'Y-m-d H:i:s')
    {
        if ($this->date_rejet_banque === null) {
            return null;
        }

        if ($this->date_rejet_banque === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_rejet_banque);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_rejet_banque, true), $x);
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
     * Get the [id_agent_banquier_prise_en_charge] column value.
     * 
     * @return int
     */
    public function getIdAgentBanquierPriseEnCharge()
    {

        return $this->id_agent_banquier_prise_en_charge;
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
     * Get the [motif_rejet_banquier] column value.
     * 
     * @return string
     */
    public function getMotifRejetBanquier()
    {

        return $this->motif_rejet_banquier;
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_caution_demande] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdCautionDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_caution_demande !== $v) {
            $this->id_caution_demande = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE;
        }

        if ($this->aCommonCautionDemande !== null && $this->aCommonCautionDemande->getId() !== $v) {
            $this->aCommonCautionDemande = null;
        }


        return $this;
    } // setIdCautionDemande()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [raison_sociale] column.
     * 
     * @param string $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setRaisonSociale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raison_sociale !== $v) {
            $this->raison_sociale = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::RAISON_SOCIALE;
        }


        return $this;
    } // setRaisonSociale()

    /**
     * Set the value of [ref_consultation] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setRefConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ref_consultation !== $v) {
            $this->ref_consultation = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::REF_CONSULTATION;
        }


        return $this;
    } // setRefConsultation()

    /**
     * Set the value of [acronyme_org] column.
     * 
     * @param string $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setAcronymeOrg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme_org !== $v) {
            $this->acronyme_org = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ACRONYME_ORG;
        }


        return $this;
    } // setAcronymeOrg()

    /**
     * Set the value of [id_acheteur_service] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdAcheteurService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_acheteur_service !== $v) {
            $this->id_acheteur_service = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_ACHETEUR_SERVICE;
        }


        return $this;
    } // setIdAcheteurService()

    /**
     * Set the value of [id_statut] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_statut !== $v) {
            $this->id_statut = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_STATUT;
        }


        return $this;
    } // setIdStatut()

    /**
     * Set the value of [type_annulation] column.
     * 
     * @param string $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setTypeAnnulation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_annulation !== $v) {
            $this->type_annulation = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::TYPE_ANNULATION;
        }


        return $this;
    } // setTypeAnnulation()

    /**
     * Set the value of [num_compte_virement] column.
     * 
     * @param string $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setNumCompteVirement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_compte_virement !== $v) {
            $this->num_compte_virement = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::NUM_COMPTE_VIREMENT;
        }


        return $this;
    } // setNumCompteVirement()

    /**
     * Set the value of [id_blob_demande] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdBlobDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_demande !== $v) {
            $this->id_blob_demande = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_BLOB_DEMANDE;
        }


        return $this;
    } // setIdBlobDemande()

    /**
     * Set the value of [nom_doc_demande] column.
     * 
     * @param string $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setNomDocDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_doc_demande !== $v) {
            $this->nom_doc_demande = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::NOM_DOC_DEMANDE;
        }


        return $this;
    } // setNomDocDemande()

    /**
     * Set the value of [id_blob_mainlevee] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdBlobMainlevee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_mainlevee !== $v) {
            $this->id_blob_mainlevee = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_BLOB_MAINLEVEE;
        }


        return $this;
    } // setIdBlobMainlevee()

    /**
     * Set the value of [nom_doc_mainlevee] column.
     * 
     * @param string $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setNomDocMainlevee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_doc_mainlevee !== $v) {
            $this->nom_doc_mainlevee = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::NOM_DOC_MAINLEVEE;
        }


        return $this;
    } // setNomDocMainlevee()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionRestitutionPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Sets the value of [date_modif] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionRestitutionPeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

    /**
     * Sets the value of [date_depot] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setDateDepot($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_depot !== null || $dt !== null) {
            $currentDateAsString = ($this->date_depot !== null && $tmpDt = new DateTime($this->date_depot)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_depot = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionRestitutionPeer::DATE_DEPOT;
            }
        } // if either are not null


        return $this;
    } // setDateDepot()

    /**
     * Set the value of [motif_rejet_acheteur] column.
     * 
     * @param string $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setMotifRejetAcheteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_rejet_acheteur !== $v) {
            $this->motif_rejet_acheteur = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::MOTIF_REJET_ACHETEUR;
        }


        return $this;
    } // setMotifRejetAcheteur()

    /**
     * Set the value of [id_agent_acheteur_generation_mainlevee] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdAgentAcheteurGenerationMainlevee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_acheteur_generation_mainlevee !== $v) {
            $this->id_agent_acheteur_generation_mainlevee = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE;
        }


        return $this;
    } // setIdAgentAcheteurGenerationMainlevee()

    /**
     * Set the value of [id_agent_acheteur_signataire] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdAgentAcheteurSignataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_acheteur_signataire !== $v) {
            $this->id_agent_acheteur_signataire = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_SIGNATAIRE;
        }


        return $this;
    } // setIdAgentAcheteurSignataire()

    /**
     * Set the value of [id_agent_acheteur_validation] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdAgentAcheteurValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_acheteur_validation !== $v) {
            $this->id_agent_acheteur_validation = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_VALIDATION;
        }


        return $this;
    } // setIdAgentAcheteurValidation()

    /**
     * Set the value of [id_agent_acheteur_rejet] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdAgentAcheteurRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_acheteur_rejet !== $v) {
            $this->id_agent_acheteur_rejet = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_REJET;
        }


        return $this;
    } // setIdAgentAcheteurRejet()

    /**
     * Sets the value of [date_generation_mainlevee] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setDateGenerationMainlevee($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_generation_mainlevee !== null || $dt !== null) {
            $currentDateAsString = ($this->date_generation_mainlevee !== null && $tmpDt = new DateTime($this->date_generation_mainlevee)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_generation_mainlevee = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionRestitutionPeer::DATE_GENERATION_MAINLEVEE;
            }
        } // if either are not null


        return $this;
    } // setDateGenerationMainlevee()

    /**
     * Sets the value of [date_signature] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setDateSignature($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_signature !== null || $dt !== null) {
            $currentDateAsString = ($this->date_signature !== null && $tmpDt = new DateTime($this->date_signature)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_signature = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionRestitutionPeer::DATE_SIGNATURE;
            }
        } // if either are not null


        return $this;
    } // setDateSignature()

    /**
     * Sets the value of [date_validation_acheteur] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setDateValidationAcheteur($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_validation_acheteur !== null || $dt !== null) {
            $currentDateAsString = ($this->date_validation_acheteur !== null && $tmpDt = new DateTime($this->date_validation_acheteur)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_validation_acheteur = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionRestitutionPeer::DATE_VALIDATION_ACHETEUR;
            }
        } // if either are not null


        return $this;
    } // setDateValidationAcheteur()

    /**
     * Sets the value of [date_rejet_acheteur] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setDateRejetAcheteur($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_rejet_acheteur !== null || $dt !== null) {
            $currentDateAsString = ($this->date_rejet_acheteur !== null && $tmpDt = new DateTime($this->date_rejet_acheteur)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_rejet_acheteur = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionRestitutionPeer::DATE_REJET_ACHETEUR;
            }
        } // if either are not null


        return $this;
    } // setDateRejetAcheteur()

    /**
     * Sets the value of [date_prise_en_charge_banque] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setDatePriseEnChargeBanque($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_prise_en_charge_banque !== null || $dt !== null) {
            $currentDateAsString = ($this->date_prise_en_charge_banque !== null && $tmpDt = new DateTime($this->date_prise_en_charge_banque)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_prise_en_charge_banque = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionRestitutionPeer::DATE_PRISE_EN_CHARGE_BANQUE;
            }
        } // if either are not null


        return $this;
    } // setDatePriseEnChargeBanque()

    /**
     * Sets the value of [date_validation_banque] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setDateValidationBanque($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_validation_banque !== null || $dt !== null) {
            $currentDateAsString = ($this->date_validation_banque !== null && $tmpDt = new DateTime($this->date_validation_banque)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_validation_banque = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionRestitutionPeer::DATE_VALIDATION_BANQUE;
            }
        } // if either are not null


        return $this;
    } // setDateValidationBanque()

    /**
     * Sets the value of [date_rejet_banque] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setDateRejetBanque($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_rejet_banque !== null || $dt !== null) {
            $currentDateAsString = ($this->date_rejet_banque !== null && $tmpDt = new DateTime($this->date_rejet_banque)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_rejet_banque = $newDateAsString;
                $this->modifiedColumns[] = CommonCautionRestitutionPeer::DATE_REJET_BANQUE;
            }
        } // if either are not null


        return $this;
    } // setDateRejetBanque()

    /**
     * Set the value of [id_agent_banquier_prise_en_charge] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdAgentBanquierPriseEnCharge($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_banquier_prise_en_charge !== $v) {
            $this->id_agent_banquier_prise_en_charge = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_PRISE_EN_CHARGE;
        }


        return $this;
    } // setIdAgentBanquierPriseEnCharge()

    /**
     * Set the value of [id_agent_banquier_validation] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdAgentBanquierValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_banquier_validation !== $v) {
            $this->id_agent_banquier_validation = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_VALIDATION;
        }


        return $this;
    } // setIdAgentBanquierValidation()

    /**
     * Set the value of [id_agent_banquier_rejet] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdAgentBanquierRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_banquier_rejet !== $v) {
            $this->id_agent_banquier_rejet = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_REJET;
        }


        return $this;
    } // setIdAgentBanquierRejet()

    /**
     * Set the value of [motif_rejet_banquier] column.
     * 
     * @param string $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setMotifRejetBanquier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_rejet_banquier !== $v) {
            $this->motif_rejet_banquier = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::MOTIF_REJET_BANQUIER;
        }


        return $this;
    } // setMotifRejetBanquier()

    /**
     * Set the value of [id_ville] column.
     * 
     * @param int $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setIdVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ville !== $v) {
            $this->id_ville = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID_VILLE;
        }


        return $this;
    } // setIdVille()

    /**
     * Set the value of [code_agence] column.
     * 
     * @param string $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setCodeAgence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_agence !== $v) {
            $this->code_agence = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::CODE_AGENCE;
        }


        return $this;
    } // setCodeAgence()

    /**
     * Set the value of [code_ville] column.
     * 
     * @param string $v new value
     * @return CommonCautionRestitution The current object (for fluent API support)
     */
    public function setCodeVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_ville !== $v) {
            $this->code_ville = $v;
            $this->modifiedColumns[] = CommonCautionRestitutionPeer::CODE_VILLE;
        }


        return $this;
    } // setCodeVille()

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
            $this->id_caution_demande = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_entreprise = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_inscrit = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->raison_sociale = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->ref_consultation = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->acronyme_org = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_acheteur_service = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->id_statut = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->type_annulation = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->num_compte_virement = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->id_blob_demande = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->nom_doc_demande = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->id_blob_mainlevee = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->nom_doc_mainlevee = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->date_crea = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->date_modif = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->date_depot = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->motif_rejet_acheteur = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->id_agent_acheteur_generation_mainlevee = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->id_agent_acheteur_signataire = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->id_agent_acheteur_validation = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->id_agent_acheteur_rejet = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->date_generation_mainlevee = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->date_signature = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->date_validation_acheteur = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->date_rejet_acheteur = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->date_prise_en_charge_banque = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->date_validation_banque = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->date_rejet_banque = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->id_agent_banquier_prise_en_charge = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->id_agent_banquier_validation = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->id_agent_banquier_rejet = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->motif_rejet_banquier = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->id_ville = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->code_agence = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->code_ville = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 37; // 37 = CommonCautionRestitutionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonCautionRestitution object", $e);
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

        if ($this->aCommonCautionDemande !== null && $this->id_caution_demande !== $this->aCommonCautionDemande->getId()) {
            $this->aCommonCautionDemande = null;
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
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonCautionRestitutionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonCautionDemande = null;
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
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonCautionRestitutionQuery::create()
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
            $con = Propel::getConnection(CommonCautionRestitutionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonCautionRestitutionPeer::addInstanceToPool($this);
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

            if ($this->aCommonCautionDemande !== null) {
                if ($this->aCommonCautionDemande->isModified() || $this->aCommonCautionDemande->isNew()) {
                    $affectedRows += $this->aCommonCautionDemande->save($con);
                }
                $this->setCommonCautionDemande($this->aCommonCautionDemande);
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

        $this->modifiedColumns[] = CommonCautionRestitutionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonCautionRestitutionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_CAUTION_DEMANDE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTREPRISE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_INSCRIT`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::RAISON_SOCIALE)) {
            $modifiedColumns[':p' . $index++]  = '`RAISON_SOCIALE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::REF_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`REF_CONSULTATION`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ACRONYME_ORG)) {
            $modifiedColumns[':p' . $index++]  = '`ACRONYME_ORG`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_ACHETEUR_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ACHETEUR_SERVICE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_STATUT`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::TYPE_ANNULATION)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_ANNULATION`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::NUM_COMPTE_VIREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`NUM_COMPTE_VIREMENT`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_BLOB_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_BLOB_DEMANDE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::NOM_DOC_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_DOC_DEMANDE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_BLOB_MAINLEVEE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_BLOB_MAINLEVEE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::NOM_DOC_MAINLEVEE)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_DOC_MAINLEVEE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_CREA`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_MODIF`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_DEPOT`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::MOTIF_REJET_ACHETEUR)) {
            $modifiedColumns[':p' . $index++]  = '`MOTIF_REJET_ACHETEUR`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_SIGNATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_ACHETEUR_SIGNATAIRE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_ACHETEUR_VALIDATION`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_ACHETEUR_REJET`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_GENERATION_MAINLEVEE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_GENERATION_MAINLEVEE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_SIGNATURE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_VALIDATION_ACHETEUR)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_VALIDATION_ACHETEUR`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_REJET_ACHETEUR)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_REJET_ACHETEUR`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_PRISE_EN_CHARGE_BANQUE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_PRISE_EN_CHARGE_BANQUE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_VALIDATION_BANQUE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_VALIDATION_BANQUE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_REJET_BANQUE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_REJET_BANQUE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_PRISE_EN_CHARGE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_BANQUIER_PRISE_EN_CHARGE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_BANQUIER_VALIDATION`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_BANQUIER_REJET`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::MOTIF_REJET_BANQUIER)) {
            $modifiedColumns[':p' . $index++]  = '`MOTIF_REJET_BANQUIER`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_VILLE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::CODE_AGENCE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_AGENCE`';
        }
        if ($this->isColumnModified(CommonCautionRestitutionPeer::CODE_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_VILLE`';
        }

        $sql = sprintf(
            'INSERT INTO `caution_restitution` (%s) VALUES (%s)',
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
                    case '`ID_CAUTION_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_caution_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTREPRISE`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`ID_INSCRIT`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`RAISON_SOCIALE`':						
                        $stmt->bindValue($identifier, $this->raison_sociale, PDO::PARAM_STR);
                        break;
                    case '`REF_CONSULTATION`':						
                        $stmt->bindValue($identifier, $this->ref_consultation, PDO::PARAM_INT);
                        break;
                    case '`ACRONYME_ORG`':						
                        $stmt->bindValue($identifier, $this->acronyme_org, PDO::PARAM_STR);
                        break;
                    case '`ID_ACHETEUR_SERVICE`':						
                        $stmt->bindValue($identifier, $this->id_acheteur_service, PDO::PARAM_INT);
                        break;
                    case '`ID_STATUT`':						
                        $stmt->bindValue($identifier, $this->id_statut, PDO::PARAM_INT);
                        break;
                    case '`TYPE_ANNULATION`':						
                        $stmt->bindValue($identifier, $this->type_annulation, PDO::PARAM_STR);
                        break;
                    case '`NUM_COMPTE_VIREMENT`':						
                        $stmt->bindValue($identifier, $this->num_compte_virement, PDO::PARAM_STR);
                        break;
                    case '`ID_BLOB_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_blob_demande, PDO::PARAM_INT);
                        break;
                    case '`NOM_DOC_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->nom_doc_demande, PDO::PARAM_STR);
                        break;
                    case '`ID_BLOB_MAINLEVEE`':						
                        $stmt->bindValue($identifier, $this->id_blob_mainlevee, PDO::PARAM_INT);
                        break;
                    case '`NOM_DOC_MAINLEVEE`':						
                        $stmt->bindValue($identifier, $this->nom_doc_mainlevee, PDO::PARAM_STR);
                        break;
                    case '`DATE_CREA`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`DATE_MODIF`':						
                        $stmt->bindValue($identifier, $this->date_modif, PDO::PARAM_STR);
                        break;
                    case '`DATE_DEPOT`':						
                        $stmt->bindValue($identifier, $this->date_depot, PDO::PARAM_STR);
                        break;
                    case '`MOTIF_REJET_ACHETEUR`':						
                        $stmt->bindValue($identifier, $this->motif_rejet_acheteur, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE`':						
                        $stmt->bindValue($identifier, $this->id_agent_acheteur_generation_mainlevee, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_ACHETEUR_SIGNATAIRE`':						
                        $stmt->bindValue($identifier, $this->id_agent_acheteur_signataire, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_ACHETEUR_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->id_agent_acheteur_validation, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_ACHETEUR_REJET`':						
                        $stmt->bindValue($identifier, $this->id_agent_acheteur_rejet, PDO::PARAM_INT);
                        break;
                    case '`DATE_GENERATION_MAINLEVEE`':						
                        $stmt->bindValue($identifier, $this->date_generation_mainlevee, PDO::PARAM_STR);
                        break;
                    case '`DATE_SIGNATURE`':						
                        $stmt->bindValue($identifier, $this->date_signature, PDO::PARAM_STR);
                        break;
                    case '`DATE_VALIDATION_ACHETEUR`':						
                        $stmt->bindValue($identifier, $this->date_validation_acheteur, PDO::PARAM_STR);
                        break;
                    case '`DATE_REJET_ACHETEUR`':						
                        $stmt->bindValue($identifier, $this->date_rejet_acheteur, PDO::PARAM_STR);
                        break;
                    case '`DATE_PRISE_EN_CHARGE_BANQUE`':						
                        $stmt->bindValue($identifier, $this->date_prise_en_charge_banque, PDO::PARAM_STR);
                        break;
                    case '`DATE_VALIDATION_BANQUE`':						
                        $stmt->bindValue($identifier, $this->date_validation_banque, PDO::PARAM_STR);
                        break;
                    case '`DATE_REJET_BANQUE`':						
                        $stmt->bindValue($identifier, $this->date_rejet_banque, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT_BANQUIER_PRISE_EN_CHARGE`':						
                        $stmt->bindValue($identifier, $this->id_agent_banquier_prise_en_charge, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_BANQUIER_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->id_agent_banquier_validation, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_BANQUIER_REJET`':						
                        $stmt->bindValue($identifier, $this->id_agent_banquier_rejet, PDO::PARAM_INT);
                        break;
                    case '`MOTIF_REJET_BANQUIER`':						
                        $stmt->bindValue($identifier, $this->motif_rejet_banquier, PDO::PARAM_STR);
                        break;
                    case '`ID_VILLE`':						
                        $stmt->bindValue($identifier, $this->id_ville, PDO::PARAM_INT);
                        break;
                    case '`CODE_AGENCE`':						
                        $stmt->bindValue($identifier, $this->code_agence, PDO::PARAM_STR);
                        break;
                    case '`CODE_VILLE`':						
                        $stmt->bindValue($identifier, $this->code_ville, PDO::PARAM_STR);
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

            if ($this->aCommonCautionDemande !== null) {
                if (!$this->aCommonCautionDemande->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonCautionDemande->getValidationFailures());
                }
            }


            if (($retval = CommonCautionRestitutionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonCautionRestitutionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdCautionDemande();
                break;
            case 2:
                return $this->getIdEntreprise();
                break;
            case 3:
                return $this->getIdInscrit();
                break;
            case 4:
                return $this->getRaisonSociale();
                break;
            case 5:
                return $this->getRefConsultation();
                break;
            case 6:
                return $this->getAcronymeOrg();
                break;
            case 7:
                return $this->getIdAcheteurService();
                break;
            case 8:
                return $this->getIdStatut();
                break;
            case 9:
                return $this->getTypeAnnulation();
                break;
            case 10:
                return $this->getNumCompteVirement();
                break;
            case 11:
                return $this->getIdBlobDemande();
                break;
            case 12:
                return $this->getNomDocDemande();
                break;
            case 13:
                return $this->getIdBlobMainlevee();
                break;
            case 14:
                return $this->getNomDocMainlevee();
                break;
            case 15:
                return $this->getDateCrea();
                break;
            case 16:
                return $this->getDateModif();
                break;
            case 17:
                return $this->getDateDepot();
                break;
            case 18:
                return $this->getMotifRejetAcheteur();
                break;
            case 19:
                return $this->getIdAgentAcheteurGenerationMainlevee();
                break;
            case 20:
                return $this->getIdAgentAcheteurSignataire();
                break;
            case 21:
                return $this->getIdAgentAcheteurValidation();
                break;
            case 22:
                return $this->getIdAgentAcheteurRejet();
                break;
            case 23:
                return $this->getDateGenerationMainlevee();
                break;
            case 24:
                return $this->getDateSignature();
                break;
            case 25:
                return $this->getDateValidationAcheteur();
                break;
            case 26:
                return $this->getDateRejetAcheteur();
                break;
            case 27:
                return $this->getDatePriseEnChargeBanque();
                break;
            case 28:
                return $this->getDateValidationBanque();
                break;
            case 29:
                return $this->getDateRejetBanque();
                break;
            case 30:
                return $this->getIdAgentBanquierPriseEnCharge();
                break;
            case 31:
                return $this->getIdAgentBanquierValidation();
                break;
            case 32:
                return $this->getIdAgentBanquierRejet();
                break;
            case 33:
                return $this->getMotifRejetBanquier();
                break;
            case 34:
                return $this->getIdVille();
                break;
            case 35:
                return $this->getCodeAgence();
                break;
            case 36:
                return $this->getCodeVille();
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
        if (isset($alreadyDumpedObjects['CommonCautionRestitution'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonCautionRestitution'][$this->getPrimaryKey()] = true;
        $keys = CommonCautionRestitutionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdCautionDemande(),
            $keys[2] => $this->getIdEntreprise(),
            $keys[3] => $this->getIdInscrit(),
            $keys[4] => $this->getRaisonSociale(),
            $keys[5] => $this->getRefConsultation(),
            $keys[6] => $this->getAcronymeOrg(),
            $keys[7] => $this->getIdAcheteurService(),
            $keys[8] => $this->getIdStatut(),
            $keys[9] => $this->getTypeAnnulation(),
            $keys[10] => $this->getNumCompteVirement(),
            $keys[11] => $this->getIdBlobDemande(),
            $keys[12] => $this->getNomDocDemande(),
            $keys[13] => $this->getIdBlobMainlevee(),
            $keys[14] => $this->getNomDocMainlevee(),
            $keys[15] => $this->getDateCrea(),
            $keys[16] => $this->getDateModif(),
            $keys[17] => $this->getDateDepot(),
            $keys[18] => $this->getMotifRejetAcheteur(),
            $keys[19] => $this->getIdAgentAcheteurGenerationMainlevee(),
            $keys[20] => $this->getIdAgentAcheteurSignataire(),
            $keys[21] => $this->getIdAgentAcheteurValidation(),
            $keys[22] => $this->getIdAgentAcheteurRejet(),
            $keys[23] => $this->getDateGenerationMainlevee(),
            $keys[24] => $this->getDateSignature(),
            $keys[25] => $this->getDateValidationAcheteur(),
            $keys[26] => $this->getDateRejetAcheteur(),
            $keys[27] => $this->getDatePriseEnChargeBanque(),
            $keys[28] => $this->getDateValidationBanque(),
            $keys[29] => $this->getDateRejetBanque(),
            $keys[30] => $this->getIdAgentBanquierPriseEnCharge(),
            $keys[31] => $this->getIdAgentBanquierValidation(),
            $keys[32] => $this->getIdAgentBanquierRejet(),
            $keys[33] => $this->getMotifRejetBanquier(),
            $keys[34] => $this->getIdVille(),
            $keys[35] => $this->getCodeAgence(),
            $keys[36] => $this->getCodeVille(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonCautionDemande) {
                $result['CommonCautionDemande'] = $this->aCommonCautionDemande->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonCautionRestitutionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdCautionDemande($value);
                break;
            case 2:
                $this->setIdEntreprise($value);
                break;
            case 3:
                $this->setIdInscrit($value);
                break;
            case 4:
                $this->setRaisonSociale($value);
                break;
            case 5:
                $this->setRefConsultation($value);
                break;
            case 6:
                $this->setAcronymeOrg($value);
                break;
            case 7:
                $this->setIdAcheteurService($value);
                break;
            case 8:
                $this->setIdStatut($value);
                break;
            case 9:
                $this->setTypeAnnulation($value);
                break;
            case 10:
                $this->setNumCompteVirement($value);
                break;
            case 11:
                $this->setIdBlobDemande($value);
                break;
            case 12:
                $this->setNomDocDemande($value);
                break;
            case 13:
                $this->setIdBlobMainlevee($value);
                break;
            case 14:
                $this->setNomDocMainlevee($value);
                break;
            case 15:
                $this->setDateCrea($value);
                break;
            case 16:
                $this->setDateModif($value);
                break;
            case 17:
                $this->setDateDepot($value);
                break;
            case 18:
                $this->setMotifRejetAcheteur($value);
                break;
            case 19:
                $this->setIdAgentAcheteurGenerationMainlevee($value);
                break;
            case 20:
                $this->setIdAgentAcheteurSignataire($value);
                break;
            case 21:
                $this->setIdAgentAcheteurValidation($value);
                break;
            case 22:
                $this->setIdAgentAcheteurRejet($value);
                break;
            case 23:
                $this->setDateGenerationMainlevee($value);
                break;
            case 24:
                $this->setDateSignature($value);
                break;
            case 25:
                $this->setDateValidationAcheteur($value);
                break;
            case 26:
                $this->setDateRejetAcheteur($value);
                break;
            case 27:
                $this->setDatePriseEnChargeBanque($value);
                break;
            case 28:
                $this->setDateValidationBanque($value);
                break;
            case 29:
                $this->setDateRejetBanque($value);
                break;
            case 30:
                $this->setIdAgentBanquierPriseEnCharge($value);
                break;
            case 31:
                $this->setIdAgentBanquierValidation($value);
                break;
            case 32:
                $this->setIdAgentBanquierRejet($value);
                break;
            case 33:
                $this->setMotifRejetBanquier($value);
                break;
            case 34:
                $this->setIdVille($value);
                break;
            case 35:
                $this->setCodeAgence($value);
                break;
            case 36:
                $this->setCodeVille($value);
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
        $keys = CommonCautionRestitutionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdCautionDemande($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdEntreprise($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdInscrit($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRaisonSociale($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRefConsultation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAcronymeOrg($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdAcheteurService($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdStatut($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTypeAnnulation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setNumCompteVirement($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdBlobDemande($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNomDocDemande($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdBlobMainlevee($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNomDocMainlevee($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateCrea($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDateModif($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDateDepot($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMotifRejetAcheteur($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setIdAgentAcheteurGenerationMainlevee($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdAgentAcheteurSignataire($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setIdAgentAcheteurValidation($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setIdAgentAcheteurRejet($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDateGenerationMainlevee($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDateSignature($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDateValidationAcheteur($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDateRejetAcheteur($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDatePriseEnChargeBanque($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDateValidationBanque($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDateRejetBanque($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setIdAgentBanquierPriseEnCharge($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setIdAgentBanquierValidation($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setIdAgentBanquierRejet($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setMotifRejetBanquier($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setIdVille($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setCodeAgence($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setCodeVille($arr[$keys[36]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonCautionRestitutionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID)) $criteria->add(CommonCautionRestitutionPeer::ID, $this->id);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE)) $criteria->add(CommonCautionRestitutionPeer::ID_CAUTION_DEMANDE, $this->id_caution_demande);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_ENTREPRISE)) $criteria->add(CommonCautionRestitutionPeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_INSCRIT)) $criteria->add(CommonCautionRestitutionPeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::RAISON_SOCIALE)) $criteria->add(CommonCautionRestitutionPeer::RAISON_SOCIALE, $this->raison_sociale);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::REF_CONSULTATION)) $criteria->add(CommonCautionRestitutionPeer::REF_CONSULTATION, $this->ref_consultation);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ACRONYME_ORG)) $criteria->add(CommonCautionRestitutionPeer::ACRONYME_ORG, $this->acronyme_org);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_ACHETEUR_SERVICE)) $criteria->add(CommonCautionRestitutionPeer::ID_ACHETEUR_SERVICE, $this->id_acheteur_service);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_STATUT)) $criteria->add(CommonCautionRestitutionPeer::ID_STATUT, $this->id_statut);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::TYPE_ANNULATION)) $criteria->add(CommonCautionRestitutionPeer::TYPE_ANNULATION, $this->type_annulation);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::NUM_COMPTE_VIREMENT)) $criteria->add(CommonCautionRestitutionPeer::NUM_COMPTE_VIREMENT, $this->num_compte_virement);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_BLOB_DEMANDE)) $criteria->add(CommonCautionRestitutionPeer::ID_BLOB_DEMANDE, $this->id_blob_demande);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::NOM_DOC_DEMANDE)) $criteria->add(CommonCautionRestitutionPeer::NOM_DOC_DEMANDE, $this->nom_doc_demande);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_BLOB_MAINLEVEE)) $criteria->add(CommonCautionRestitutionPeer::ID_BLOB_MAINLEVEE, $this->id_blob_mainlevee);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::NOM_DOC_MAINLEVEE)) $criteria->add(CommonCautionRestitutionPeer::NOM_DOC_MAINLEVEE, $this->nom_doc_mainlevee);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_CREA)) $criteria->add(CommonCautionRestitutionPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_MODIF)) $criteria->add(CommonCautionRestitutionPeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_DEPOT)) $criteria->add(CommonCautionRestitutionPeer::DATE_DEPOT, $this->date_depot);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::MOTIF_REJET_ACHETEUR)) $criteria->add(CommonCautionRestitutionPeer::MOTIF_REJET_ACHETEUR, $this->motif_rejet_acheteur);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE)) $criteria->add(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_GENERATION_MAINLEVEE, $this->id_agent_acheteur_generation_mainlevee);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_SIGNATAIRE)) $criteria->add(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_SIGNATAIRE, $this->id_agent_acheteur_signataire);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_VALIDATION)) $criteria->add(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_VALIDATION, $this->id_agent_acheteur_validation);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_REJET)) $criteria->add(CommonCautionRestitutionPeer::ID_AGENT_ACHETEUR_REJET, $this->id_agent_acheteur_rejet);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_GENERATION_MAINLEVEE)) $criteria->add(CommonCautionRestitutionPeer::DATE_GENERATION_MAINLEVEE, $this->date_generation_mainlevee);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_SIGNATURE)) $criteria->add(CommonCautionRestitutionPeer::DATE_SIGNATURE, $this->date_signature);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_VALIDATION_ACHETEUR)) $criteria->add(CommonCautionRestitutionPeer::DATE_VALIDATION_ACHETEUR, $this->date_validation_acheteur);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_REJET_ACHETEUR)) $criteria->add(CommonCautionRestitutionPeer::DATE_REJET_ACHETEUR, $this->date_rejet_acheteur);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_PRISE_EN_CHARGE_BANQUE)) $criteria->add(CommonCautionRestitutionPeer::DATE_PRISE_EN_CHARGE_BANQUE, $this->date_prise_en_charge_banque);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_VALIDATION_BANQUE)) $criteria->add(CommonCautionRestitutionPeer::DATE_VALIDATION_BANQUE, $this->date_validation_banque);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::DATE_REJET_BANQUE)) $criteria->add(CommonCautionRestitutionPeer::DATE_REJET_BANQUE, $this->date_rejet_banque);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_PRISE_EN_CHARGE)) $criteria->add(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_PRISE_EN_CHARGE, $this->id_agent_banquier_prise_en_charge);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_VALIDATION)) $criteria->add(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_VALIDATION, $this->id_agent_banquier_validation);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_REJET)) $criteria->add(CommonCautionRestitutionPeer::ID_AGENT_BANQUIER_REJET, $this->id_agent_banquier_rejet);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::MOTIF_REJET_BANQUIER)) $criteria->add(CommonCautionRestitutionPeer::MOTIF_REJET_BANQUIER, $this->motif_rejet_banquier);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::ID_VILLE)) $criteria->add(CommonCautionRestitutionPeer::ID_VILLE, $this->id_ville);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::CODE_AGENCE)) $criteria->add(CommonCautionRestitutionPeer::CODE_AGENCE, $this->code_agence);
        if ($this->isColumnModified(CommonCautionRestitutionPeer::CODE_VILLE)) $criteria->add(CommonCautionRestitutionPeer::CODE_VILLE, $this->code_ville);

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
        $criteria = new Criteria(CommonCautionRestitutionPeer::DATABASE_NAME);
        $criteria->add(CommonCautionRestitutionPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonCautionRestitution (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdCautionDemande($this->getIdCautionDemande());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setRaisonSociale($this->getRaisonSociale());
        $copyObj->setRefConsultation($this->getRefConsultation());
        $copyObj->setAcronymeOrg($this->getAcronymeOrg());
        $copyObj->setIdAcheteurService($this->getIdAcheteurService());
        $copyObj->setIdStatut($this->getIdStatut());
        $copyObj->setTypeAnnulation($this->getTypeAnnulation());
        $copyObj->setNumCompteVirement($this->getNumCompteVirement());
        $copyObj->setIdBlobDemande($this->getIdBlobDemande());
        $copyObj->setNomDocDemande($this->getNomDocDemande());
        $copyObj->setIdBlobMainlevee($this->getIdBlobMainlevee());
        $copyObj->setNomDocMainlevee($this->getNomDocMainlevee());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setDateModif($this->getDateModif());
        $copyObj->setDateDepot($this->getDateDepot());
        $copyObj->setMotifRejetAcheteur($this->getMotifRejetAcheteur());
        $copyObj->setIdAgentAcheteurGenerationMainlevee($this->getIdAgentAcheteurGenerationMainlevee());
        $copyObj->setIdAgentAcheteurSignataire($this->getIdAgentAcheteurSignataire());
        $copyObj->setIdAgentAcheteurValidation($this->getIdAgentAcheteurValidation());
        $copyObj->setIdAgentAcheteurRejet($this->getIdAgentAcheteurRejet());
        $copyObj->setDateGenerationMainlevee($this->getDateGenerationMainlevee());
        $copyObj->setDateSignature($this->getDateSignature());
        $copyObj->setDateValidationAcheteur($this->getDateValidationAcheteur());
        $copyObj->setDateRejetAcheteur($this->getDateRejetAcheteur());
        $copyObj->setDatePriseEnChargeBanque($this->getDatePriseEnChargeBanque());
        $copyObj->setDateValidationBanque($this->getDateValidationBanque());
        $copyObj->setDateRejetBanque($this->getDateRejetBanque());
        $copyObj->setIdAgentBanquierPriseEnCharge($this->getIdAgentBanquierPriseEnCharge());
        $copyObj->setIdAgentBanquierValidation($this->getIdAgentBanquierValidation());
        $copyObj->setIdAgentBanquierRejet($this->getIdAgentBanquierRejet());
        $copyObj->setMotifRejetBanquier($this->getMotifRejetBanquier());
        $copyObj->setIdVille($this->getIdVille());
        $copyObj->setCodeAgence($this->getCodeAgence());
        $copyObj->setCodeVille($this->getCodeVille());

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
     * @return CommonCautionRestitution Clone of current object.
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
     * @return CommonCautionRestitutionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonCautionRestitutionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonCautionDemande object.
     *
     * @param   CommonCautionDemande $v
     * @return CommonCautionRestitution The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonCautionDemande(CommonCautionDemande $v = null)
    {
        if ($v === null) {
            $this->setIdCautionDemande(NULL);
        } else {
            $this->setIdCautionDemande($v->getId());
        }

        $this->aCommonCautionDemande = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonCautionDemande object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonCautionRestitution($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonCautionDemande object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonCautionDemande The associated CommonCautionDemande object.
     * @throws PropelException
     */
    public function getCommonCautionDemande(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonCautionDemande === null && ($this->id_caution_demande !== null) && $doQuery) {
            $this->aCommonCautionDemande = CommonCautionDemandeQuery::create()->findPk($this->id_caution_demande, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonCautionDemande->addCommonCautionRestitutions($this);
             */
        }

        return $this->aCommonCautionDemande;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_caution_demande = null;
        $this->id_entreprise = null;
        $this->id_inscrit = null;
        $this->raison_sociale = null;
        $this->ref_consultation = null;
        $this->acronyme_org = null;
        $this->id_acheteur_service = null;
        $this->id_statut = null;
        $this->type_annulation = null;
        $this->num_compte_virement = null;
        $this->id_blob_demande = null;
        $this->nom_doc_demande = null;
        $this->id_blob_mainlevee = null;
        $this->nom_doc_mainlevee = null;
        $this->date_crea = null;
        $this->date_modif = null;
        $this->date_depot = null;
        $this->motif_rejet_acheteur = null;
        $this->id_agent_acheteur_generation_mainlevee = null;
        $this->id_agent_acheteur_signataire = null;
        $this->id_agent_acheteur_validation = null;
        $this->id_agent_acheteur_rejet = null;
        $this->date_generation_mainlevee = null;
        $this->date_signature = null;
        $this->date_validation_acheteur = null;
        $this->date_rejet_acheteur = null;
        $this->date_prise_en_charge_banque = null;
        $this->date_validation_banque = null;
        $this->date_rejet_banque = null;
        $this->id_agent_banquier_prise_en_charge = null;
        $this->id_agent_banquier_validation = null;
        $this->id_agent_banquier_rejet = null;
        $this->motif_rejet_banquier = null;
        $this->id_ville = null;
        $this->code_agence = null;
        $this->code_ville = null;
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
            if ($this->aCommonCautionDemande instanceof Persistent) {
              $this->aCommonCautionDemande->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonCautionDemande = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonCautionRestitutionPeer::DEFAULT_STRING_FORMAT);
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
