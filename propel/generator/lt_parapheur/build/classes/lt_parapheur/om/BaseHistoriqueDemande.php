<?php


/**
 * Base class that represents a row from the 'historique_demande' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseHistoriqueDemande extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'HistoriqueDemandePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        HistoriqueDemandePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_historique_demande field.
     * @var        int
     */
    protected $id_historique_demande;

    /**
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

    /**
     * The value for the id_entite_affecte field.
     * @var        int
     */
    protected $id_entite_affecte;

    /**
     * The value for the sigle_entite_affecte_fr field.
     * @var        string
     */
    protected $sigle_entite_affecte_fr;

    /**
     * The value for the sigle_entite_affecte_ar field.
     * @var        string
     */
    protected $sigle_entite_affecte_ar;

    /**
     * The value for the id_agent_affecte field.
     * @var        int
     */
    protected $id_agent_affecte;

    /**
     * The value for the nom_agent_affecte_fr field.
     * @var        string
     */
    protected $nom_agent_affecte_fr;

    /**
     * The value for the nom_agent_affecte_ar field.
     * @var        string
     */
    protected $nom_agent_affecte_ar;

    /**
     * The value for the commentaire_citoyen_historique_demande field.
     * @var        string
     */
    protected $commentaire_citoyen_historique_demande;

    /**
     * The value for the statut_historique_demande field.
     * @var        int
     */
    protected $statut_historique_demande;

    /**
     * The value for the appreciation_prestation_historique_demande field.
     * @var        int
     */
    protected $appreciation_prestation_historique_demande;

    /**
     * The value for the date_intervention field.
     * @var        string
     */
    protected $date_intervention;

    /**
     * The value for the agent_historique_ar field.
     * @var        string
     */
    protected $agent_historique_ar;

    /**
     * The value for the agent_historique_fr field.
     * @var        string
     */
    protected $agent_historique_fr;

    /**
     * The value for the action_historique_demande field.
     * @var        string
     */
    protected $action_historique_demande;

    /**
     * The value for the commentaire_agent_interne_historique_demande field.
     * @var        string
     */
    protected $commentaire_agent_interne_historique_demande;

    /**
     * The value for the commentaire_agent_visible_historique_demande field.
     * @var        string
     */
    protected $commentaire_agent_visible_historique_demande;

    /**
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the details_ar field.
     * @var        string
     */
    protected $details_ar;

    /**
     * The value for the details_fr field.
     * @var        string
     */
    protected $details_fr;

    /**
     * The value for the id_entite_traitante field.
     * @var        int
     */
    protected $id_entite_traitante;

    /**
     * The value for the sigle_entite_traitante_fr field.
     * @var        string
     */
    protected $sigle_entite_traitante_fr;

    /**
     * The value for the sigle_entite_traitante_ar field.
     * @var        string
     */
    protected $sigle_entite_traitante_ar;

    /**
     * The value for the id_piece_jointe field.
     * @var        int
     */
    protected $id_piece_jointe;

    /**
     * The value for the nom_piece_jointe field.
     * @var        string
     */
    protected $nom_piece_jointe;

    /**
     * The value for the revision field.
     * @var        int
     */
    protected $revision;

    /**
     * The value for the id_historique_precedent field.
     * @var        int
     */
    protected $id_historique_precedent;

    /**
     * The value for the etat field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $etat;

    /**
     * The value for the id_action field.
     * @var        int
     */
    protected $id_action;

    /**
     * The value for the id_partage field.
     * @var        int
     */
    protected $id_partage;

    /**
     * The value for the id_format field.
     * @var        int
     */
    protected $id_format;

    /**
     * The value for the format_fr field.
     * @var        string
     */
    protected $format_fr;

    /**
     * The value for the format_ar field.
     * @var        string
     */
    protected $format_ar;

    /**
     * The value for the id_agent_remplacant field.
     * @var        int
     */
    protected $id_agent_remplacant;

    /**
     * The value for the agent_remplacant_ar field.
     * @var        string
     */
    protected $agent_remplacant_ar;

    /**
     * The value for the agent_remplacant_fr field.
     * @var        string
     */
    protected $agent_remplacant_fr;

    /**
     * The value for the id_historique_parent field.
     * @var        int
     */
    protected $id_historique_parent;

    /**
     * The value for the date_echeance_reponse field.
     * @var        string
     */
    protected $date_echeance_reponse;

    /**
     * The value for the canal field.
     * @var        string
     */
    protected $canal;

    /**
     * The value for the info_canal field.
     * @var        string
     */
    protected $info_canal;

    /**
     * The value for the id_etape_circuit_validation field.
     * @var        int
     */
    protected $id_etape_circuit_validation;

    /**
     * The value for the champ_supp_1 field.
     * @var        string
     */
    protected $champ_supp_1;

    /**
     * The value for the champ_supp_2 field.
     * @var        string
     */
    protected $champ_supp_2;

    /**
     * The value for the champ_supp_3 field.
     * @var        string
     */
    protected $champ_supp_3;

    /**
     * The value for the champ_supp_4 field.
     * @var        string
     */
    protected $champ_supp_4;

    /**
     * The value for the champ_supp_5 field.
     * @var        string
     */
    protected $champ_supp_5;

    /**
     * The value for the id_instruction field.
     * @var        int
     */
    protected $id_instruction;

    /**
     * The value for the type_classement field.
     * @var        int
     */
    protected $type_classement;

    /**
     * The value for the type_reponse field.
     * @var        int
     */
    protected $type_reponse;

    /**
     * The value for the avec_reponse field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $avec_reponse;

    /**
     * The value for the realise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $realise;

    /**
     * The value for the date_echeance_reponse_proche field.
     * @var        string
     */
    protected $date_echeance_reponse_proche;

    /**
     * The value for the email_validation field.
     * @var        string
     */
    protected $email_validation;

    /**
     * The value for the token_validation field.
     * @var        string
     */
    protected $token_validation;

    /**
     * The value for the check_list_tab field.
     * @var        string
     */
    protected $check_list_tab;

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
        $this->etat = '1';
        $this->avec_reponse = '0';
        $this->realise = '0';
    }

    /**
     * Initializes internal state of BaseHistoriqueDemande object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_historique_demande] column value.
     * 
     * @return int
     */
    public function getIdHistoriqueDemande()
    {

        return $this->id_historique_demande;
    }

    /**
     * Get the [id_demande] column value.
     * 
     * @return int
     */
    public function getIdDemande()
    {

        return $this->id_demande;
    }

    /**
     * Get the [id_entite_affecte] column value.
     * 
     * @return int
     */
    public function getIdEntiteAffecte()
    {

        return $this->id_entite_affecte;
    }

    /**
     * Get the [sigle_entite_affecte_fr] column value.
     * 
     * @return string
     */
    public function getSigleEntiteAffecteFr()
    {

        return $this->sigle_entite_affecte_fr;
    }

    /**
     * Get the [sigle_entite_affecte_ar] column value.
     * 
     * @return string
     */
    public function getSigleEntiteAffecteAr()
    {

        return $this->sigle_entite_affecte_ar;
    }

    /**
     * Get the [id_agent_affecte] column value.
     * 
     * @return int
     */
    public function getIdAgentAffecte()
    {

        return $this->id_agent_affecte;
    }

    /**
     * Get the [nom_agent_affecte_fr] column value.
     * 
     * @return string
     */
    public function getNomAgentAffecteFr()
    {

        return $this->nom_agent_affecte_fr;
    }

    /**
     * Get the [nom_agent_affecte_ar] column value.
     * 
     * @return string
     */
    public function getNomAgentAffecteAr()
    {

        return $this->nom_agent_affecte_ar;
    }

    /**
     * Get the [commentaire_citoyen_historique_demande] column value.
     * 
     * @return string
     */
    public function getCommentaireCitoyenHistoriqueDemande()
    {

        return $this->commentaire_citoyen_historique_demande;
    }

    /**
     * Get the [statut_historique_demande] column value.
     * 
     * @return int
     */
    public function getStatutHistoriqueDemande()
    {

        return $this->statut_historique_demande;
    }

    /**
     * Get the [appreciation_prestation_historique_demande] column value.
     * 
     * @return int
     */
    public function getAppreciationPrestationHistoriqueDemande()
    {

        return $this->appreciation_prestation_historique_demande;
    }

    /**
     * Get the [optionally formatted] temporal [date_intervention] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateIntervention($format = 'Y-m-d H:i:s')
    {
        if ($this->date_intervention === null) {
            return null;
        }

        if ($this->date_intervention === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_intervention);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_intervention, true), $x);
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
     * Get the [agent_historique_ar] column value.
     * 
     * @return string
     */
    public function getAgentHistoriqueAr()
    {

        return $this->agent_historique_ar;
    }

    /**
     * Get the [agent_historique_fr] column value.
     * 
     * @return string
     */
    public function getAgentHistoriqueFr()
    {

        return $this->agent_historique_fr;
    }

    /**
     * Get the [action_historique_demande] column value.
     * 
     * @return string
     */
    public function getActionHistoriqueDemande()
    {

        return $this->action_historique_demande;
    }

    /**
     * Get the [commentaire_agent_interne_historique_demande] column value.
     * 
     * @return string
     */
    public function getCommentaireAgentInterneHistoriqueDemande()
    {

        return $this->commentaire_agent_interne_historique_demande;
    }

    /**
     * Get the [commentaire_agent_visible_historique_demande] column value.
     * 
     * @return string
     */
    public function getCommentaireAgentVisibleHistoriqueDemande()
    {

        return $this->commentaire_agent_visible_historique_demande;
    }

    /**
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
    }

    /**
     * Get the [details_ar] column value.
     * 
     * @return string
     */
    public function getDetailsAr()
    {

        return $this->details_ar;
    }

    /**
     * Get the [details_fr] column value.
     * 
     * @return string
     */
    public function getDetailsFr()
    {

        return $this->details_fr;
    }

    /**
     * Get the [id_entite_traitante] column value.
     * 
     * @return int
     */
    public function getIdEntiteTraitante()
    {

        return $this->id_entite_traitante;
    }

    /**
     * Get the [sigle_entite_traitante_fr] column value.
     * 
     * @return string
     */
    public function getSigleEntiteTraitanteFr()
    {

        return $this->sigle_entite_traitante_fr;
    }

    /**
     * Get the [sigle_entite_traitante_ar] column value.
     * 
     * @return string
     */
    public function getSigleEntiteTraitanteAr()
    {

        return $this->sigle_entite_traitante_ar;
    }

    /**
     * Get the [id_piece_jointe] column value.
     * 
     * @return int
     */
    public function getIdPieceJointe()
    {

        return $this->id_piece_jointe;
    }

    /**
     * Get the [nom_piece_jointe] column value.
     * 
     * @return string
     */
    public function getNomPieceJointe()
    {

        return $this->nom_piece_jointe;
    }

    /**
     * Get the [revision] column value.
     * 
     * @return int
     */
    public function getRevision()
    {

        return $this->revision;
    }

    /**
     * Get the [id_historique_precedent] column value.
     * 
     * @return int
     */
    public function getIdHistoriquePrecedent()
    {

        return $this->id_historique_precedent;
    }

    /**
     * Get the [etat] column value.
     * 
     * @return string
     */
    public function getEtat()
    {

        return $this->etat;
    }

    /**
     * Get the [id_action] column value.
     * 
     * @return int
     */
    public function getIdAction()
    {

        return $this->id_action;
    }

    /**
     * Get the [id_partage] column value.
     * 
     * @return int
     */
    public function getIdPartage()
    {

        return $this->id_partage;
    }

    /**
     * Get the [id_format] column value.
     * 
     * @return int
     */
    public function getIdFormat()
    {

        return $this->id_format;
    }

    /**
     * Get the [format_fr] column value.
     * 
     * @return string
     */
    public function getFormatFr()
    {

        return $this->format_fr;
    }

    /**
     * Get the [format_ar] column value.
     * 
     * @return string
     */
    public function getFormatAr()
    {

        return $this->format_ar;
    }

    /**
     * Get the [id_agent_remplacant] column value.
     * 
     * @return int
     */
    public function getIdAgentRemplacant()
    {

        return $this->id_agent_remplacant;
    }

    /**
     * Get the [agent_remplacant_ar] column value.
     * 
     * @return string
     */
    public function getAgentRemplacantAr()
    {

        return $this->agent_remplacant_ar;
    }

    /**
     * Get the [agent_remplacant_fr] column value.
     * 
     * @return string
     */
    public function getAgentRemplacantFr()
    {

        return $this->agent_remplacant_fr;
    }

    /**
     * Get the [id_historique_parent] column value.
     * 
     * @return int
     */
    public function getIdHistoriqueParent()
    {

        return $this->id_historique_parent;
    }

    /**
     * Get the [optionally formatted] temporal [date_echeance_reponse] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEcheanceReponse($format = 'Y-m-d H:i:s')
    {
        if ($this->date_echeance_reponse === null) {
            return null;
        }

        if ($this->date_echeance_reponse === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_echeance_reponse);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_echeance_reponse, true), $x);
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
     * Get the [canal] column value.
     * 
     * @return string
     */
    public function getCanal()
    {

        return $this->canal;
    }

    /**
     * Get the [info_canal] column value.
     * 
     * @return string
     */
    public function getInfoCanal()
    {

        return $this->info_canal;
    }

    /**
     * Get the [id_etape_circuit_validation] column value.
     * 
     * @return int
     */
    public function getIdEtapeCircuitValidation()
    {

        return $this->id_etape_circuit_validation;
    }

    /**
     * Get the [champ_supp_1] column value.
     * 
     * @return string
     */
    public function getChampSupp1()
    {

        return $this->champ_supp_1;
    }

    /**
     * Get the [champ_supp_2] column value.
     * 
     * @return string
     */
    public function getChampSupp2()
    {

        return $this->champ_supp_2;
    }

    /**
     * Get the [champ_supp_3] column value.
     * 
     * @return string
     */
    public function getChampSupp3()
    {

        return $this->champ_supp_3;
    }

    /**
     * Get the [champ_supp_4] column value.
     * 
     * @return string
     */
    public function getChampSupp4()
    {

        return $this->champ_supp_4;
    }

    /**
     * Get the [champ_supp_5] column value.
     * 
     * @return string
     */
    public function getChampSupp5()
    {

        return $this->champ_supp_5;
    }

    /**
     * Get the [id_instruction] column value.
     * 
     * @return int
     */
    public function getIdInstruction()
    {

        return $this->id_instruction;
    }

    /**
     * Get the [type_classement] column value.
     * 
     * @return int
     */
    public function getTypeClassement()
    {

        return $this->type_classement;
    }

    /**
     * Get the [type_reponse] column value.
     * 
     * @return int
     */
    public function getTypeReponse()
    {

        return $this->type_reponse;
    }

    /**
     * Get the [avec_reponse] column value.
     * 
     * @return string
     */
    public function getAvecReponse()
    {

        return $this->avec_reponse;
    }

    /**
     * Get the [realise] column value.
     * 
     * @return string
     */
    public function getRealise()
    {

        return $this->realise;
    }

    /**
     * Get the [optionally formatted] temporal [date_echeance_reponse_proche] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEcheanceReponseProche($format = 'Y-m-d H:i:s')
    {
        if ($this->date_echeance_reponse_proche === null) {
            return null;
        }

        if ($this->date_echeance_reponse_proche === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_echeance_reponse_proche);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_echeance_reponse_proche, true), $x);
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
     * Get the [email_validation] column value.
     * 
     * @return string
     */
    public function getEmailValidation()
    {

        return $this->email_validation;
    }

    /**
     * Get the [token_validation] column value.
     * 
     * @return string
     */
    public function getTokenValidation()
    {

        return $this->token_validation;
    }

    /**
     * Get the [check_list_tab] column value.
     * 
     * @return string
     */
    public function getCheckListTab()
    {

        return $this->check_list_tab;
    }

    /**
     * Set the value of [id_historique_demande] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdHistoriqueDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_historique_demande !== $v) {
            $this->id_historique_demande = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE;
        }


        return $this;
    } // setIdHistoriqueDemande()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Set the value of [id_entite_affecte] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdEntiteAffecte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_affecte !== $v) {
            $this->id_entite_affecte = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_ENTITE_AFFECTE;
        }


        return $this;
    } // setIdEntiteAffecte()

    /**
     * Set the value of [sigle_entite_affecte_fr] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setSigleEntiteAffecteFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle_entite_affecte_fr !== $v) {
            $this->sigle_entite_affecte_fr = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_FR;
        }


        return $this;
    } // setSigleEntiteAffecteFr()

    /**
     * Set the value of [sigle_entite_affecte_ar] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setSigleEntiteAffecteAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle_entite_affecte_ar !== $v) {
            $this->sigle_entite_affecte_ar = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_AR;
        }


        return $this;
    } // setSigleEntiteAffecteAr()

    /**
     * Set the value of [id_agent_affecte] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdAgentAffecte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_affecte !== $v) {
            $this->id_agent_affecte = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_AGENT_AFFECTE;
        }


        return $this;
    } // setIdAgentAffecte()

    /**
     * Set the value of [nom_agent_affecte_fr] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setNomAgentAffecteFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_affecte_fr !== $v) {
            $this->nom_agent_affecte_fr = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::NOM_AGENT_AFFECTE_FR;
        }


        return $this;
    } // setNomAgentAffecteFr()

    /**
     * Set the value of [nom_agent_affecte_ar] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setNomAgentAffecteAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_affecte_ar !== $v) {
            $this->nom_agent_affecte_ar = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::NOM_AGENT_AFFECTE_AR;
        }


        return $this;
    } // setNomAgentAffecteAr()

    /**
     * Set the value of [commentaire_citoyen_historique_demande] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setCommentaireCitoyenHistoriqueDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire_citoyen_historique_demande !== $v) {
            $this->commentaire_citoyen_historique_demande = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE;
        }


        return $this;
    } // setCommentaireCitoyenHistoriqueDemande()

    /**
     * Set the value of [statut_historique_demande] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setStatutHistoriqueDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_historique_demande !== $v) {
            $this->statut_historique_demande = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::STATUT_HISTORIQUE_DEMANDE;
        }


        return $this;
    } // setStatutHistoriqueDemande()

    /**
     * Set the value of [appreciation_prestation_historique_demande] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setAppreciationPrestationHistoriqueDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->appreciation_prestation_historique_demande !== $v) {
            $this->appreciation_prestation_historique_demande = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE;
        }


        return $this;
    } // setAppreciationPrestationHistoriqueDemande()

    /**
     * Sets the value of [date_intervention] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setDateIntervention($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_intervention !== null || $dt !== null) {
            $currentDateAsString = ($this->date_intervention !== null && $tmpDt = new DateTime($this->date_intervention)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_intervention = $newDateAsString;
                $this->modifiedColumns[] = HistoriqueDemandePeer::DATE_INTERVENTION;
            }
        } // if either are not null


        return $this;
    } // setDateIntervention()

    /**
     * Set the value of [agent_historique_ar] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setAgentHistoriqueAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agent_historique_ar !== $v) {
            $this->agent_historique_ar = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::AGENT_HISTORIQUE_AR;
        }


        return $this;
    } // setAgentHistoriqueAr()

    /**
     * Set the value of [agent_historique_fr] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setAgentHistoriqueFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agent_historique_fr !== $v) {
            $this->agent_historique_fr = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::AGENT_HISTORIQUE_FR;
        }


        return $this;
    } // setAgentHistoriqueFr()

    /**
     * Set the value of [action_historique_demande] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setActionHistoriqueDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action_historique_demande !== $v) {
            $this->action_historique_demande = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ACTION_HISTORIQUE_DEMANDE;
        }


        return $this;
    } // setActionHistoriqueDemande()

    /**
     * Set the value of [commentaire_agent_interne_historique_demande] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setCommentaireAgentInterneHistoriqueDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire_agent_interne_historique_demande !== $v) {
            $this->commentaire_agent_interne_historique_demande = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE;
        }


        return $this;
    } // setCommentaireAgentInterneHistoriqueDemande()

    /**
     * Set the value of [commentaire_agent_visible_historique_demande] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setCommentaireAgentVisibleHistoriqueDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire_agent_visible_historique_demande !== $v) {
            $this->commentaire_agent_visible_historique_demande = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE;
        }


        return $this;
    } // setCommentaireAgentVisibleHistoriqueDemande()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [details_ar] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setDetailsAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->details_ar !== $v) {
            $this->details_ar = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::DETAILS_AR;
        }


        return $this;
    } // setDetailsAr()

    /**
     * Set the value of [details_fr] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setDetailsFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->details_fr !== $v) {
            $this->details_fr = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::DETAILS_FR;
        }


        return $this;
    } // setDetailsFr()

    /**
     * Set the value of [id_entite_traitante] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdEntiteTraitante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_traitante !== $v) {
            $this->id_entite_traitante = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_ENTITE_TRAITANTE;
        }


        return $this;
    } // setIdEntiteTraitante()

    /**
     * Set the value of [sigle_entite_traitante_fr] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setSigleEntiteTraitanteFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle_entite_traitante_fr !== $v) {
            $this->sigle_entite_traitante_fr = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_FR;
        }


        return $this;
    } // setSigleEntiteTraitanteFr()

    /**
     * Set the value of [sigle_entite_traitante_ar] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setSigleEntiteTraitanteAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle_entite_traitante_ar !== $v) {
            $this->sigle_entite_traitante_ar = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_AR;
        }


        return $this;
    } // setSigleEntiteTraitanteAr()

    /**
     * Set the value of [id_piece_jointe] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdPieceJointe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_piece_jointe !== $v) {
            $this->id_piece_jointe = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_PIECE_JOINTE;
        }


        return $this;
    } // setIdPieceJointe()

    /**
     * Set the value of [nom_piece_jointe] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setNomPieceJointe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_piece_jointe !== $v) {
            $this->nom_piece_jointe = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::NOM_PIECE_JOINTE;
        }


        return $this;
    } // setNomPieceJointe()

    /**
     * Set the value of [revision] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setRevision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->revision !== $v) {
            $this->revision = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::REVISION;
        }


        return $this;
    } // setRevision()

    /**
     * Set the value of [id_historique_precedent] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdHistoriquePrecedent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_historique_precedent !== $v) {
            $this->id_historique_precedent = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_HISTORIQUE_PRECEDENT;
        }


        return $this;
    } // setIdHistoriquePrecedent()

    /**
     * Set the value of [etat] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setEtat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat !== $v) {
            $this->etat = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ETAT;
        }


        return $this;
    } // setEtat()

    /**
     * Set the value of [id_action] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdAction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_action !== $v) {
            $this->id_action = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_ACTION;
        }


        return $this;
    } // setIdAction()

    /**
     * Set the value of [id_partage] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdPartage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_partage !== $v) {
            $this->id_partage = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_PARTAGE;
        }


        return $this;
    } // setIdPartage()

    /**
     * Set the value of [id_format] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdFormat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_format !== $v) {
            $this->id_format = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_FORMAT;
        }


        return $this;
    } // setIdFormat()

    /**
     * Set the value of [format_fr] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setFormatFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->format_fr !== $v) {
            $this->format_fr = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::FORMAT_FR;
        }


        return $this;
    } // setFormatFr()

    /**
     * Set the value of [format_ar] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setFormatAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->format_ar !== $v) {
            $this->format_ar = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::FORMAT_AR;
        }


        return $this;
    } // setFormatAr()

    /**
     * Set the value of [id_agent_remplacant] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdAgentRemplacant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_remplacant !== $v) {
            $this->id_agent_remplacant = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_AGENT_REMPLACANT;
        }


        return $this;
    } // setIdAgentRemplacant()

    /**
     * Set the value of [agent_remplacant_ar] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setAgentRemplacantAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agent_remplacant_ar !== $v) {
            $this->agent_remplacant_ar = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::AGENT_REMPLACANT_AR;
        }


        return $this;
    } // setAgentRemplacantAr()

    /**
     * Set the value of [agent_remplacant_fr] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setAgentRemplacantFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agent_remplacant_fr !== $v) {
            $this->agent_remplacant_fr = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::AGENT_REMPLACANT_FR;
        }


        return $this;
    } // setAgentRemplacantFr()

    /**
     * Set the value of [id_historique_parent] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdHistoriqueParent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_historique_parent !== $v) {
            $this->id_historique_parent = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_HISTORIQUE_PARENT;
        }


        return $this;
    } // setIdHistoriqueParent()

    /**
     * Sets the value of [date_echeance_reponse] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setDateEcheanceReponse($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_echeance_reponse !== null || $dt !== null) {
            $currentDateAsString = ($this->date_echeance_reponse !== null && $tmpDt = new DateTime($this->date_echeance_reponse)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_echeance_reponse = $newDateAsString;
                $this->modifiedColumns[] = HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE;
            }
        } // if either are not null


        return $this;
    } // setDateEcheanceReponse()

    /**
     * Set the value of [canal] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setCanal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->canal !== $v) {
            $this->canal = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::CANAL;
        }


        return $this;
    } // setCanal()

    /**
     * Set the value of [info_canal] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setInfoCanal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->info_canal !== $v) {
            $this->info_canal = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::INFO_CANAL;
        }


        return $this;
    } // setInfoCanal()

    /**
     * Set the value of [id_etape_circuit_validation] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdEtapeCircuitValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_etape_circuit_validation !== $v) {
            $this->id_etape_circuit_validation = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_ETAPE_CIRCUIT_VALIDATION;
        }


        return $this;
    } // setIdEtapeCircuitValidation()

    /**
     * Set the value of [champ_supp_1] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setChampSupp1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_1 !== $v) {
            $this->champ_supp_1 = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::CHAMP_SUPP_1;
        }


        return $this;
    } // setChampSupp1()

    /**
     * Set the value of [champ_supp_2] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setChampSupp2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_2 !== $v) {
            $this->champ_supp_2 = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::CHAMP_SUPP_2;
        }


        return $this;
    } // setChampSupp2()

    /**
     * Set the value of [champ_supp_3] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setChampSupp3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_3 !== $v) {
            $this->champ_supp_3 = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::CHAMP_SUPP_3;
        }


        return $this;
    } // setChampSupp3()

    /**
     * Set the value of [champ_supp_4] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setChampSupp4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_4 !== $v) {
            $this->champ_supp_4 = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::CHAMP_SUPP_4;
        }


        return $this;
    } // setChampSupp4()

    /**
     * Set the value of [champ_supp_5] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setChampSupp5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_5 !== $v) {
            $this->champ_supp_5 = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::CHAMP_SUPP_5;
        }


        return $this;
    } // setChampSupp5()

    /**
     * Set the value of [id_instruction] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setIdInstruction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_instruction !== $v) {
            $this->id_instruction = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::ID_INSTRUCTION;
        }


        return $this;
    } // setIdInstruction()

    /**
     * Set the value of [type_classement] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setTypeClassement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_classement !== $v) {
            $this->type_classement = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::TYPE_CLASSEMENT;
        }


        return $this;
    } // setTypeClassement()

    /**
     * Set the value of [type_reponse] column.
     * 
     * @param int $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setTypeReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_reponse !== $v) {
            $this->type_reponse = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::TYPE_REPONSE;
        }


        return $this;
    } // setTypeReponse()

    /**
     * Set the value of [avec_reponse] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setAvecReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->avec_reponse !== $v) {
            $this->avec_reponse = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::AVEC_REPONSE;
        }


        return $this;
    } // setAvecReponse()

    /**
     * Set the value of [realise] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setRealise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->realise !== $v) {
            $this->realise = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::REALISE;
        }


        return $this;
    } // setRealise()

    /**
     * Sets the value of [date_echeance_reponse_proche] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setDateEcheanceReponseProche($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_echeance_reponse_proche !== null || $dt !== null) {
            $currentDateAsString = ($this->date_echeance_reponse_proche !== null && $tmpDt = new DateTime($this->date_echeance_reponse_proche)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_echeance_reponse_proche = $newDateAsString;
                $this->modifiedColumns[] = HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE_PROCHE;
            }
        } // if either are not null


        return $this;
    } // setDateEcheanceReponseProche()

    /**
     * Set the value of [email_validation] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setEmailValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email_validation !== $v) {
            $this->email_validation = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::EMAIL_VALIDATION;
        }


        return $this;
    } // setEmailValidation()

    /**
     * Set the value of [token_validation] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setTokenValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->token_validation !== $v) {
            $this->token_validation = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::TOKEN_VALIDATION;
        }


        return $this;
    } // setTokenValidation()

    /**
     * Set the value of [check_list_tab] column.
     * 
     * @param string $v new value
     * @return HistoriqueDemande The current object (for fluent API support)
     */
    public function setCheckListTab($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->check_list_tab !== $v) {
            $this->check_list_tab = $v;
            $this->modifiedColumns[] = HistoriqueDemandePeer::CHECK_LIST_TAB;
        }


        return $this;
    } // setCheckListTab()

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
            if ($this->etat !== '1') {
                return false;
            }

            if ($this->avec_reponse !== '0') {
                return false;
            }

            if ($this->realise !== '0') {
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

            $this->id_historique_demande = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_demande = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_entite_affecte = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->sigle_entite_affecte_fr = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->sigle_entite_affecte_ar = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_agent_affecte = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->nom_agent_affecte_fr = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->nom_agent_affecte_ar = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->commentaire_citoyen_historique_demande = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->statut_historique_demande = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->appreciation_prestation_historique_demande = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->date_intervention = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->agent_historique_ar = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->agent_historique_fr = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->action_historique_demande = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->commentaire_agent_interne_historique_demande = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->commentaire_agent_visible_historique_demande = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->id_agent = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->details_ar = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->details_fr = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->id_entite_traitante = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->sigle_entite_traitante_fr = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->sigle_entite_traitante_ar = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->id_piece_jointe = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->nom_piece_jointe = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->revision = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->id_historique_precedent = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->etat = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->id_action = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->id_partage = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->id_format = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->format_fr = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->format_ar = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->id_agent_remplacant = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->agent_remplacant_ar = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->agent_remplacant_fr = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->id_historique_parent = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->date_echeance_reponse = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->canal = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->info_canal = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->id_etape_circuit_validation = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->champ_supp_1 = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->champ_supp_2 = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->champ_supp_3 = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->champ_supp_4 = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->champ_supp_5 = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->id_instruction = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->type_classement = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->type_reponse = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->avec_reponse = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->realise = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->date_echeance_reponse_proche = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->email_validation = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->token_validation = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->check_list_tab = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 55; // 55 = HistoriqueDemandePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating HistoriqueDemande object", $e);
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
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = HistoriqueDemandePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = HistoriqueDemandeQuery::create()
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
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                HistoriqueDemandePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE;
        if (null !== $this->id_historique_demande) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_HISTORIQUE_DEMANDE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_ENTITE_AFFECTE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_AFFECTE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`SIGLE_ENTITE_AFFECTE_FR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`SIGLE_ENTITE_AFFECTE_AR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_AGENT_AFFECTE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_AFFECTE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::NOM_AGENT_AFFECTE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_AFFECTE_FR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::NOM_AGENT_AFFECTE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_AFFECTE_AR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::STATUT_HISTORIQUE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`STATUT_HISTORIQUE_DEMANDE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::DATE_INTERVENTION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_INTERVENTION`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::AGENT_HISTORIQUE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`AGENT_HISTORIQUE_AR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::AGENT_HISTORIQUE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`AGENT_HISTORIQUE_FR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ACTION_HISTORIQUE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_HISTORIQUE_DEMANDE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::DETAILS_AR)) {
            $modifiedColumns[':p' . $index++]  = '`DETAILS_AR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::DETAILS_FR)) {
            $modifiedColumns[':p' . $index++]  = '`DETAILS_FR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_ENTITE_TRAITANTE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_TRAITANTE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`SIGLE_ENTITE_TRAITANTE_FR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`SIGLE_ENTITE_TRAITANTE_AR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_PIECE_JOINTE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PIECE_JOINTE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::NOM_PIECE_JOINTE)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_PIECE_JOINTE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::REVISION)) {
            $modifiedColumns[':p' . $index++]  = '`REVISION`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_HISTORIQUE_PRECEDENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_HISTORIQUE_PRECEDENT`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ETAT)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_ACTION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ACTION`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_PARTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PARTAGE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_FORMAT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_FORMAT`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::FORMAT_FR)) {
            $modifiedColumns[':p' . $index++]  = '`FORMAT_FR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::FORMAT_AR)) {
            $modifiedColumns[':p' . $index++]  = '`FORMAT_AR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_AGENT_REMPLACANT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_REMPLACANT`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::AGENT_REMPLACANT_AR)) {
            $modifiedColumns[':p' . $index++]  = '`AGENT_REMPLACANT_AR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::AGENT_REMPLACANT_FR)) {
            $modifiedColumns[':p' . $index++]  = '`AGENT_REMPLACANT_FR`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_HISTORIQUE_PARENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_HISTORIQUE_PARENT`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ECHEANCE_REPONSE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::CANAL)) {
            $modifiedColumns[':p' . $index++]  = '`CANAL`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::INFO_CANAL)) {
            $modifiedColumns[':p' . $index++]  = '`INFO_CANAL`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_ETAPE_CIRCUIT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ETAPE_CIRCUIT_VALIDATION`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::CHAMP_SUPP_1)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_1`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::CHAMP_SUPP_2)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_2`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::CHAMP_SUPP_3)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_3`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::CHAMP_SUPP_4)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_4`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::CHAMP_SUPP_5)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_5`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_INSTRUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_INSTRUCTION`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::TYPE_CLASSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_CLASSEMENT`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::TYPE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_REPONSE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::AVEC_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`AVEC_REPONSE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::REALISE)) {
            $modifiedColumns[':p' . $index++]  = '`REALISE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE_PROCHE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ECHEANCE_REPONSE_PROCHE`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::EMAIL_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`EMAIL_VALIDATION`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::TOKEN_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`TOKEN_VALIDATION`';
        }
        if ($this->isColumnModified(HistoriqueDemandePeer::CHECK_LIST_TAB)) {
            $modifiedColumns[':p' . $index++]  = '`CHECK_LIST_TAB`';
        }

        $sql = sprintf(
            'INSERT INTO `historique_demande` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_HISTORIQUE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_historique_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE_AFFECTE`':						
                        $stmt->bindValue($identifier, $this->id_entite_affecte, PDO::PARAM_INT);
                        break;
                    case '`SIGLE_ENTITE_AFFECTE_FR`':						
                        $stmt->bindValue($identifier, $this->sigle_entite_affecte_fr, PDO::PARAM_STR);
                        break;
                    case '`SIGLE_ENTITE_AFFECTE_AR`':						
                        $stmt->bindValue($identifier, $this->sigle_entite_affecte_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT_AFFECTE`':						
                        $stmt->bindValue($identifier, $this->id_agent_affecte, PDO::PARAM_INT);
                        break;
                    case '`NOM_AGENT_AFFECTE_FR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_affecte_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_AGENT_AFFECTE_AR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_affecte_ar, PDO::PARAM_STR);
                        break;
                    case '`COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->commentaire_citoyen_historique_demande, PDO::PARAM_STR);
                        break;
                    case '`STATUT_HISTORIQUE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->statut_historique_demande, PDO::PARAM_INT);
                        break;
                    case '`APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->appreciation_prestation_historique_demande, PDO::PARAM_INT);
                        break;
                    case '`DATE_INTERVENTION`':						
                        $stmt->bindValue($identifier, $this->date_intervention, PDO::PARAM_STR);
                        break;
                    case '`AGENT_HISTORIQUE_AR`':						
                        $stmt->bindValue($identifier, $this->agent_historique_ar, PDO::PARAM_STR);
                        break;
                    case '`AGENT_HISTORIQUE_FR`':						
                        $stmt->bindValue($identifier, $this->agent_historique_fr, PDO::PARAM_STR);
                        break;
                    case '`ACTION_HISTORIQUE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->action_historique_demande, PDO::PARAM_STR);
                        break;
                    case '`COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->commentaire_agent_interne_historique_demande, PDO::PARAM_STR);
                        break;
                    case '`COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->commentaire_agent_visible_historique_demande, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`DETAILS_AR`':						
                        $stmt->bindValue($identifier, $this->details_ar, PDO::PARAM_STR);
                        break;
                    case '`DETAILS_FR`':						
                        $stmt->bindValue($identifier, $this->details_fr, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE_TRAITANTE`':						
                        $stmt->bindValue($identifier, $this->id_entite_traitante, PDO::PARAM_INT);
                        break;
                    case '`SIGLE_ENTITE_TRAITANTE_FR`':						
                        $stmt->bindValue($identifier, $this->sigle_entite_traitante_fr, PDO::PARAM_STR);
                        break;
                    case '`SIGLE_ENTITE_TRAITANTE_AR`':						
                        $stmt->bindValue($identifier, $this->sigle_entite_traitante_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_PIECE_JOINTE`':						
                        $stmt->bindValue($identifier, $this->id_piece_jointe, PDO::PARAM_INT);
                        break;
                    case '`NOM_PIECE_JOINTE`':						
                        $stmt->bindValue($identifier, $this->nom_piece_jointe, PDO::PARAM_STR);
                        break;
                    case '`REVISION`':						
                        $stmt->bindValue($identifier, $this->revision, PDO::PARAM_INT);
                        break;
                    case '`ID_HISTORIQUE_PRECEDENT`':						
                        $stmt->bindValue($identifier, $this->id_historique_precedent, PDO::PARAM_INT);
                        break;
                    case '`ETAT`':						
                        $stmt->bindValue($identifier, $this->etat, PDO::PARAM_STR);
                        break;
                    case '`ID_ACTION`':						
                        $stmt->bindValue($identifier, $this->id_action, PDO::PARAM_INT);
                        break;
                    case '`ID_PARTAGE`':						
                        $stmt->bindValue($identifier, $this->id_partage, PDO::PARAM_INT);
                        break;
                    case '`ID_FORMAT`':						
                        $stmt->bindValue($identifier, $this->id_format, PDO::PARAM_INT);
                        break;
                    case '`FORMAT_FR`':						
                        $stmt->bindValue($identifier, $this->format_fr, PDO::PARAM_STR);
                        break;
                    case '`FORMAT_AR`':						
                        $stmt->bindValue($identifier, $this->format_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT_REMPLACANT`':						
                        $stmt->bindValue($identifier, $this->id_agent_remplacant, PDO::PARAM_INT);
                        break;
                    case '`AGENT_REMPLACANT_AR`':						
                        $stmt->bindValue($identifier, $this->agent_remplacant_ar, PDO::PARAM_STR);
                        break;
                    case '`AGENT_REMPLACANT_FR`':						
                        $stmt->bindValue($identifier, $this->agent_remplacant_fr, PDO::PARAM_STR);
                        break;
                    case '`ID_HISTORIQUE_PARENT`':						
                        $stmt->bindValue($identifier, $this->id_historique_parent, PDO::PARAM_INT);
                        break;
                    case '`DATE_ECHEANCE_REPONSE`':						
                        $stmt->bindValue($identifier, $this->date_echeance_reponse, PDO::PARAM_STR);
                        break;
                    case '`CANAL`':						
                        $stmt->bindValue($identifier, $this->canal, PDO::PARAM_STR);
                        break;
                    case '`INFO_CANAL`':						
                        $stmt->bindValue($identifier, $this->info_canal, PDO::PARAM_STR);
                        break;
                    case '`ID_ETAPE_CIRCUIT_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->id_etape_circuit_validation, PDO::PARAM_INT);
                        break;
                    case '`CHAMP_SUPP_1`':						
                        $stmt->bindValue($identifier, $this->champ_supp_1, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_2`':						
                        $stmt->bindValue($identifier, $this->champ_supp_2, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_3`':						
                        $stmt->bindValue($identifier, $this->champ_supp_3, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_4`':						
                        $stmt->bindValue($identifier, $this->champ_supp_4, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_5`':						
                        $stmt->bindValue($identifier, $this->champ_supp_5, PDO::PARAM_STR);
                        break;
                    case '`ID_INSTRUCTION`':						
                        $stmt->bindValue($identifier, $this->id_instruction, PDO::PARAM_INT);
                        break;
                    case '`TYPE_CLASSEMENT`':						
                        $stmt->bindValue($identifier, $this->type_classement, PDO::PARAM_INT);
                        break;
                    case '`TYPE_REPONSE`':						
                        $stmt->bindValue($identifier, $this->type_reponse, PDO::PARAM_INT);
                        break;
                    case '`AVEC_REPONSE`':						
                        $stmt->bindValue($identifier, $this->avec_reponse, PDO::PARAM_STR);
                        break;
                    case '`REALISE`':						
                        $stmt->bindValue($identifier, $this->realise, PDO::PARAM_STR);
                        break;
                    case '`DATE_ECHEANCE_REPONSE_PROCHE`':						
                        $stmt->bindValue($identifier, $this->date_echeance_reponse_proche, PDO::PARAM_STR);
                        break;
                    case '`EMAIL_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->email_validation, PDO::PARAM_STR);
                        break;
                    case '`TOKEN_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->token_validation, PDO::PARAM_STR);
                        break;
                    case '`CHECK_LIST_TAB`':						
                        $stmt->bindValue($identifier, $this->check_list_tab, PDO::PARAM_STR);
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
        $this->setIdHistoriqueDemande($pk);

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


            if (($retval = HistoriqueDemandePeer::doValidate($this, $columns)) !== true) {
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
        $pos = HistoriqueDemandePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdHistoriqueDemande();
                break;
            case 1:
                return $this->getIdDemande();
                break;
            case 2:
                return $this->getIdEntiteAffecte();
                break;
            case 3:
                return $this->getSigleEntiteAffecteFr();
                break;
            case 4:
                return $this->getSigleEntiteAffecteAr();
                break;
            case 5:
                return $this->getIdAgentAffecte();
                break;
            case 6:
                return $this->getNomAgentAffecteFr();
                break;
            case 7:
                return $this->getNomAgentAffecteAr();
                break;
            case 8:
                return $this->getCommentaireCitoyenHistoriqueDemande();
                break;
            case 9:
                return $this->getStatutHistoriqueDemande();
                break;
            case 10:
                return $this->getAppreciationPrestationHistoriqueDemande();
                break;
            case 11:
                return $this->getDateIntervention();
                break;
            case 12:
                return $this->getAgentHistoriqueAr();
                break;
            case 13:
                return $this->getAgentHistoriqueFr();
                break;
            case 14:
                return $this->getActionHistoriqueDemande();
                break;
            case 15:
                return $this->getCommentaireAgentInterneHistoriqueDemande();
                break;
            case 16:
                return $this->getCommentaireAgentVisibleHistoriqueDemande();
                break;
            case 17:
                return $this->getIdAgent();
                break;
            case 18:
                return $this->getDetailsAr();
                break;
            case 19:
                return $this->getDetailsFr();
                break;
            case 20:
                return $this->getIdEntiteTraitante();
                break;
            case 21:
                return $this->getSigleEntiteTraitanteFr();
                break;
            case 22:
                return $this->getSigleEntiteTraitanteAr();
                break;
            case 23:
                return $this->getIdPieceJointe();
                break;
            case 24:
                return $this->getNomPieceJointe();
                break;
            case 25:
                return $this->getRevision();
                break;
            case 26:
                return $this->getIdHistoriquePrecedent();
                break;
            case 27:
                return $this->getEtat();
                break;
            case 28:
                return $this->getIdAction();
                break;
            case 29:
                return $this->getIdPartage();
                break;
            case 30:
                return $this->getIdFormat();
                break;
            case 31:
                return $this->getFormatFr();
                break;
            case 32:
                return $this->getFormatAr();
                break;
            case 33:
                return $this->getIdAgentRemplacant();
                break;
            case 34:
                return $this->getAgentRemplacantAr();
                break;
            case 35:
                return $this->getAgentRemplacantFr();
                break;
            case 36:
                return $this->getIdHistoriqueParent();
                break;
            case 37:
                return $this->getDateEcheanceReponse();
                break;
            case 38:
                return $this->getCanal();
                break;
            case 39:
                return $this->getInfoCanal();
                break;
            case 40:
                return $this->getIdEtapeCircuitValidation();
                break;
            case 41:
                return $this->getChampSupp1();
                break;
            case 42:
                return $this->getChampSupp2();
                break;
            case 43:
                return $this->getChampSupp3();
                break;
            case 44:
                return $this->getChampSupp4();
                break;
            case 45:
                return $this->getChampSupp5();
                break;
            case 46:
                return $this->getIdInstruction();
                break;
            case 47:
                return $this->getTypeClassement();
                break;
            case 48:
                return $this->getTypeReponse();
                break;
            case 49:
                return $this->getAvecReponse();
                break;
            case 50:
                return $this->getRealise();
                break;
            case 51:
                return $this->getDateEcheanceReponseProche();
                break;
            case 52:
                return $this->getEmailValidation();
                break;
            case 53:
                return $this->getTokenValidation();
                break;
            case 54:
                return $this->getCheckListTab();
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
        if (isset($alreadyDumpedObjects['HistoriqueDemande'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['HistoriqueDemande'][$this->getPrimaryKey()] = true;
        $keys = HistoriqueDemandePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdHistoriqueDemande(),
            $keys[1] => $this->getIdDemande(),
            $keys[2] => $this->getIdEntiteAffecte(),
            $keys[3] => $this->getSigleEntiteAffecteFr(),
            $keys[4] => $this->getSigleEntiteAffecteAr(),
            $keys[5] => $this->getIdAgentAffecte(),
            $keys[6] => $this->getNomAgentAffecteFr(),
            $keys[7] => $this->getNomAgentAffecteAr(),
            $keys[8] => $this->getCommentaireCitoyenHistoriqueDemande(),
            $keys[9] => $this->getStatutHistoriqueDemande(),
            $keys[10] => $this->getAppreciationPrestationHistoriqueDemande(),
            $keys[11] => $this->getDateIntervention(),
            $keys[12] => $this->getAgentHistoriqueAr(),
            $keys[13] => $this->getAgentHistoriqueFr(),
            $keys[14] => $this->getActionHistoriqueDemande(),
            $keys[15] => $this->getCommentaireAgentInterneHistoriqueDemande(),
            $keys[16] => $this->getCommentaireAgentVisibleHistoriqueDemande(),
            $keys[17] => $this->getIdAgent(),
            $keys[18] => $this->getDetailsAr(),
            $keys[19] => $this->getDetailsFr(),
            $keys[20] => $this->getIdEntiteTraitante(),
            $keys[21] => $this->getSigleEntiteTraitanteFr(),
            $keys[22] => $this->getSigleEntiteTraitanteAr(),
            $keys[23] => $this->getIdPieceJointe(),
            $keys[24] => $this->getNomPieceJointe(),
            $keys[25] => $this->getRevision(),
            $keys[26] => $this->getIdHistoriquePrecedent(),
            $keys[27] => $this->getEtat(),
            $keys[28] => $this->getIdAction(),
            $keys[29] => $this->getIdPartage(),
            $keys[30] => $this->getIdFormat(),
            $keys[31] => $this->getFormatFr(),
            $keys[32] => $this->getFormatAr(),
            $keys[33] => $this->getIdAgentRemplacant(),
            $keys[34] => $this->getAgentRemplacantAr(),
            $keys[35] => $this->getAgentRemplacantFr(),
            $keys[36] => $this->getIdHistoriqueParent(),
            $keys[37] => $this->getDateEcheanceReponse(),
            $keys[38] => $this->getCanal(),
            $keys[39] => $this->getInfoCanal(),
            $keys[40] => $this->getIdEtapeCircuitValidation(),
            $keys[41] => $this->getChampSupp1(),
            $keys[42] => $this->getChampSupp2(),
            $keys[43] => $this->getChampSupp3(),
            $keys[44] => $this->getChampSupp4(),
            $keys[45] => $this->getChampSupp5(),
            $keys[46] => $this->getIdInstruction(),
            $keys[47] => $this->getTypeClassement(),
            $keys[48] => $this->getTypeReponse(),
            $keys[49] => $this->getAvecReponse(),
            $keys[50] => $this->getRealise(),
            $keys[51] => $this->getDateEcheanceReponseProche(),
            $keys[52] => $this->getEmailValidation(),
            $keys[53] => $this->getTokenValidation(),
            $keys[54] => $this->getCheckListTab(),
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
        $pos = HistoriqueDemandePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdHistoriqueDemande($value);
                break;
            case 1:
                $this->setIdDemande($value);
                break;
            case 2:
                $this->setIdEntiteAffecte($value);
                break;
            case 3:
                $this->setSigleEntiteAffecteFr($value);
                break;
            case 4:
                $this->setSigleEntiteAffecteAr($value);
                break;
            case 5:
                $this->setIdAgentAffecte($value);
                break;
            case 6:
                $this->setNomAgentAffecteFr($value);
                break;
            case 7:
                $this->setNomAgentAffecteAr($value);
                break;
            case 8:
                $this->setCommentaireCitoyenHistoriqueDemande($value);
                break;
            case 9:
                $this->setStatutHistoriqueDemande($value);
                break;
            case 10:
                $this->setAppreciationPrestationHistoriqueDemande($value);
                break;
            case 11:
                $this->setDateIntervention($value);
                break;
            case 12:
                $this->setAgentHistoriqueAr($value);
                break;
            case 13:
                $this->setAgentHistoriqueFr($value);
                break;
            case 14:
                $this->setActionHistoriqueDemande($value);
                break;
            case 15:
                $this->setCommentaireAgentInterneHistoriqueDemande($value);
                break;
            case 16:
                $this->setCommentaireAgentVisibleHistoriqueDemande($value);
                break;
            case 17:
                $this->setIdAgent($value);
                break;
            case 18:
                $this->setDetailsAr($value);
                break;
            case 19:
                $this->setDetailsFr($value);
                break;
            case 20:
                $this->setIdEntiteTraitante($value);
                break;
            case 21:
                $this->setSigleEntiteTraitanteFr($value);
                break;
            case 22:
                $this->setSigleEntiteTraitanteAr($value);
                break;
            case 23:
                $this->setIdPieceJointe($value);
                break;
            case 24:
                $this->setNomPieceJointe($value);
                break;
            case 25:
                $this->setRevision($value);
                break;
            case 26:
                $this->setIdHistoriquePrecedent($value);
                break;
            case 27:
                $this->setEtat($value);
                break;
            case 28:
                $this->setIdAction($value);
                break;
            case 29:
                $this->setIdPartage($value);
                break;
            case 30:
                $this->setIdFormat($value);
                break;
            case 31:
                $this->setFormatFr($value);
                break;
            case 32:
                $this->setFormatAr($value);
                break;
            case 33:
                $this->setIdAgentRemplacant($value);
                break;
            case 34:
                $this->setAgentRemplacantAr($value);
                break;
            case 35:
                $this->setAgentRemplacantFr($value);
                break;
            case 36:
                $this->setIdHistoriqueParent($value);
                break;
            case 37:
                $this->setDateEcheanceReponse($value);
                break;
            case 38:
                $this->setCanal($value);
                break;
            case 39:
                $this->setInfoCanal($value);
                break;
            case 40:
                $this->setIdEtapeCircuitValidation($value);
                break;
            case 41:
                $this->setChampSupp1($value);
                break;
            case 42:
                $this->setChampSupp2($value);
                break;
            case 43:
                $this->setChampSupp3($value);
                break;
            case 44:
                $this->setChampSupp4($value);
                break;
            case 45:
                $this->setChampSupp5($value);
                break;
            case 46:
                $this->setIdInstruction($value);
                break;
            case 47:
                $this->setTypeClassement($value);
                break;
            case 48:
                $this->setTypeReponse($value);
                break;
            case 49:
                $this->setAvecReponse($value);
                break;
            case 50:
                $this->setRealise($value);
                break;
            case 51:
                $this->setDateEcheanceReponseProche($value);
                break;
            case 52:
                $this->setEmailValidation($value);
                break;
            case 53:
                $this->setTokenValidation($value);
                break;
            case 54:
                $this->setCheckListTab($value);
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
        $keys = HistoriqueDemandePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdHistoriqueDemande($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdDemande($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdEntiteAffecte($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSigleEntiteAffecteFr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSigleEntiteAffecteAr($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdAgentAffecte($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNomAgentAffecteFr($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNomAgentAffecteAr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCommentaireCitoyenHistoriqueDemande($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setStatutHistoriqueDemande($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAppreciationPrestationHistoriqueDemande($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateIntervention($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAgentHistoriqueAr($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAgentHistoriqueFr($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setActionHistoriqueDemande($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCommentaireAgentInterneHistoriqueDemande($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCommentaireAgentVisibleHistoriqueDemande($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setIdAgent($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDetailsAr($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDetailsFr($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdEntiteTraitante($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setSigleEntiteTraitanteFr($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setSigleEntiteTraitanteAr($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setIdPieceJointe($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setNomPieceJointe($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setRevision($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setIdHistoriquePrecedent($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setEtat($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setIdAction($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setIdPartage($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setIdFormat($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFormatFr($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setFormatAr($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setIdAgentRemplacant($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAgentRemplacantAr($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setAgentRemplacantFr($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setIdHistoriqueParent($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDateEcheanceReponse($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setCanal($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setInfoCanal($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setIdEtapeCircuitValidation($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setChampSupp1($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setChampSupp2($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setChampSupp3($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setChampSupp4($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setChampSupp5($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setIdInstruction($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setTypeClassement($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setTypeReponse($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setAvecReponse($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setRealise($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDateEcheanceReponseProche($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setEmailValidation($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setTokenValidation($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setCheckListTab($arr[$keys[54]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(HistoriqueDemandePeer::DATABASE_NAME);

        if ($this->isColumnModified(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE)) $criteria->add(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $this->id_historique_demande);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_DEMANDE)) $criteria->add(HistoriqueDemandePeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_ENTITE_AFFECTE)) $criteria->add(HistoriqueDemandePeer::ID_ENTITE_AFFECTE, $this->id_entite_affecte);
        if ($this->isColumnModified(HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_FR)) $criteria->add(HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_FR, $this->sigle_entite_affecte_fr);
        if ($this->isColumnModified(HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_AR)) $criteria->add(HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_AR, $this->sigle_entite_affecte_ar);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_AGENT_AFFECTE)) $criteria->add(HistoriqueDemandePeer::ID_AGENT_AFFECTE, $this->id_agent_affecte);
        if ($this->isColumnModified(HistoriqueDemandePeer::NOM_AGENT_AFFECTE_FR)) $criteria->add(HistoriqueDemandePeer::NOM_AGENT_AFFECTE_FR, $this->nom_agent_affecte_fr);
        if ($this->isColumnModified(HistoriqueDemandePeer::NOM_AGENT_AFFECTE_AR)) $criteria->add(HistoriqueDemandePeer::NOM_AGENT_AFFECTE_AR, $this->nom_agent_affecte_ar);
        if ($this->isColumnModified(HistoriqueDemandePeer::COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE)) $criteria->add(HistoriqueDemandePeer::COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE, $this->commentaire_citoyen_historique_demande);
        if ($this->isColumnModified(HistoriqueDemandePeer::STATUT_HISTORIQUE_DEMANDE)) $criteria->add(HistoriqueDemandePeer::STATUT_HISTORIQUE_DEMANDE, $this->statut_historique_demande);
        if ($this->isColumnModified(HistoriqueDemandePeer::APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE)) $criteria->add(HistoriqueDemandePeer::APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE, $this->appreciation_prestation_historique_demande);
        if ($this->isColumnModified(HistoriqueDemandePeer::DATE_INTERVENTION)) $criteria->add(HistoriqueDemandePeer::DATE_INTERVENTION, $this->date_intervention);
        if ($this->isColumnModified(HistoriqueDemandePeer::AGENT_HISTORIQUE_AR)) $criteria->add(HistoriqueDemandePeer::AGENT_HISTORIQUE_AR, $this->agent_historique_ar);
        if ($this->isColumnModified(HistoriqueDemandePeer::AGENT_HISTORIQUE_FR)) $criteria->add(HistoriqueDemandePeer::AGENT_HISTORIQUE_FR, $this->agent_historique_fr);
        if ($this->isColumnModified(HistoriqueDemandePeer::ACTION_HISTORIQUE_DEMANDE)) $criteria->add(HistoriqueDemandePeer::ACTION_HISTORIQUE_DEMANDE, $this->action_historique_demande);
        if ($this->isColumnModified(HistoriqueDemandePeer::COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE)) $criteria->add(HistoriqueDemandePeer::COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE, $this->commentaire_agent_interne_historique_demande);
        if ($this->isColumnModified(HistoriqueDemandePeer::COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE)) $criteria->add(HistoriqueDemandePeer::COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE, $this->commentaire_agent_visible_historique_demande);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_AGENT)) $criteria->add(HistoriqueDemandePeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(HistoriqueDemandePeer::DETAILS_AR)) $criteria->add(HistoriqueDemandePeer::DETAILS_AR, $this->details_ar);
        if ($this->isColumnModified(HistoriqueDemandePeer::DETAILS_FR)) $criteria->add(HistoriqueDemandePeer::DETAILS_FR, $this->details_fr);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_ENTITE_TRAITANTE)) $criteria->add(HistoriqueDemandePeer::ID_ENTITE_TRAITANTE, $this->id_entite_traitante);
        if ($this->isColumnModified(HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_FR)) $criteria->add(HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_FR, $this->sigle_entite_traitante_fr);
        if ($this->isColumnModified(HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_AR)) $criteria->add(HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_AR, $this->sigle_entite_traitante_ar);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_PIECE_JOINTE)) $criteria->add(HistoriqueDemandePeer::ID_PIECE_JOINTE, $this->id_piece_jointe);
        if ($this->isColumnModified(HistoriqueDemandePeer::NOM_PIECE_JOINTE)) $criteria->add(HistoriqueDemandePeer::NOM_PIECE_JOINTE, $this->nom_piece_jointe);
        if ($this->isColumnModified(HistoriqueDemandePeer::REVISION)) $criteria->add(HistoriqueDemandePeer::REVISION, $this->revision);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_HISTORIQUE_PRECEDENT)) $criteria->add(HistoriqueDemandePeer::ID_HISTORIQUE_PRECEDENT, $this->id_historique_precedent);
        if ($this->isColumnModified(HistoriqueDemandePeer::ETAT)) $criteria->add(HistoriqueDemandePeer::ETAT, $this->etat);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_ACTION)) $criteria->add(HistoriqueDemandePeer::ID_ACTION, $this->id_action);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_PARTAGE)) $criteria->add(HistoriqueDemandePeer::ID_PARTAGE, $this->id_partage);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_FORMAT)) $criteria->add(HistoriqueDemandePeer::ID_FORMAT, $this->id_format);
        if ($this->isColumnModified(HistoriqueDemandePeer::FORMAT_FR)) $criteria->add(HistoriqueDemandePeer::FORMAT_FR, $this->format_fr);
        if ($this->isColumnModified(HistoriqueDemandePeer::FORMAT_AR)) $criteria->add(HistoriqueDemandePeer::FORMAT_AR, $this->format_ar);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_AGENT_REMPLACANT)) $criteria->add(HistoriqueDemandePeer::ID_AGENT_REMPLACANT, $this->id_agent_remplacant);
        if ($this->isColumnModified(HistoriqueDemandePeer::AGENT_REMPLACANT_AR)) $criteria->add(HistoriqueDemandePeer::AGENT_REMPLACANT_AR, $this->agent_remplacant_ar);
        if ($this->isColumnModified(HistoriqueDemandePeer::AGENT_REMPLACANT_FR)) $criteria->add(HistoriqueDemandePeer::AGENT_REMPLACANT_FR, $this->agent_remplacant_fr);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_HISTORIQUE_PARENT)) $criteria->add(HistoriqueDemandePeer::ID_HISTORIQUE_PARENT, $this->id_historique_parent);
        if ($this->isColumnModified(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE)) $criteria->add(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE, $this->date_echeance_reponse);
        if ($this->isColumnModified(HistoriqueDemandePeer::CANAL)) $criteria->add(HistoriqueDemandePeer::CANAL, $this->canal);
        if ($this->isColumnModified(HistoriqueDemandePeer::INFO_CANAL)) $criteria->add(HistoriqueDemandePeer::INFO_CANAL, $this->info_canal);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_ETAPE_CIRCUIT_VALIDATION)) $criteria->add(HistoriqueDemandePeer::ID_ETAPE_CIRCUIT_VALIDATION, $this->id_etape_circuit_validation);
        if ($this->isColumnModified(HistoriqueDemandePeer::CHAMP_SUPP_1)) $criteria->add(HistoriqueDemandePeer::CHAMP_SUPP_1, $this->champ_supp_1);
        if ($this->isColumnModified(HistoriqueDemandePeer::CHAMP_SUPP_2)) $criteria->add(HistoriqueDemandePeer::CHAMP_SUPP_2, $this->champ_supp_2);
        if ($this->isColumnModified(HistoriqueDemandePeer::CHAMP_SUPP_3)) $criteria->add(HistoriqueDemandePeer::CHAMP_SUPP_3, $this->champ_supp_3);
        if ($this->isColumnModified(HistoriqueDemandePeer::CHAMP_SUPP_4)) $criteria->add(HistoriqueDemandePeer::CHAMP_SUPP_4, $this->champ_supp_4);
        if ($this->isColumnModified(HistoriqueDemandePeer::CHAMP_SUPP_5)) $criteria->add(HistoriqueDemandePeer::CHAMP_SUPP_5, $this->champ_supp_5);
        if ($this->isColumnModified(HistoriqueDemandePeer::ID_INSTRUCTION)) $criteria->add(HistoriqueDemandePeer::ID_INSTRUCTION, $this->id_instruction);
        if ($this->isColumnModified(HistoriqueDemandePeer::TYPE_CLASSEMENT)) $criteria->add(HistoriqueDemandePeer::TYPE_CLASSEMENT, $this->type_classement);
        if ($this->isColumnModified(HistoriqueDemandePeer::TYPE_REPONSE)) $criteria->add(HistoriqueDemandePeer::TYPE_REPONSE, $this->type_reponse);
        if ($this->isColumnModified(HistoriqueDemandePeer::AVEC_REPONSE)) $criteria->add(HistoriqueDemandePeer::AVEC_REPONSE, $this->avec_reponse);
        if ($this->isColumnModified(HistoriqueDemandePeer::REALISE)) $criteria->add(HistoriqueDemandePeer::REALISE, $this->realise);
        if ($this->isColumnModified(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE_PROCHE)) $criteria->add(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE_PROCHE, $this->date_echeance_reponse_proche);
        if ($this->isColumnModified(HistoriqueDemandePeer::EMAIL_VALIDATION)) $criteria->add(HistoriqueDemandePeer::EMAIL_VALIDATION, $this->email_validation);
        if ($this->isColumnModified(HistoriqueDemandePeer::TOKEN_VALIDATION)) $criteria->add(HistoriqueDemandePeer::TOKEN_VALIDATION, $this->token_validation);
        if ($this->isColumnModified(HistoriqueDemandePeer::CHECK_LIST_TAB)) $criteria->add(HistoriqueDemandePeer::CHECK_LIST_TAB, $this->check_list_tab);

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
        $criteria = new Criteria(HistoriqueDemandePeer::DATABASE_NAME);
        $criteria->add(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $this->id_historique_demande);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdHistoriqueDemande();
    }

    /**
     * Generic method to set the primary key (id_historique_demande column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdHistoriqueDemande($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdHistoriqueDemande();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of HistoriqueDemande (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setIdEntiteAffecte($this->getIdEntiteAffecte());
        $copyObj->setSigleEntiteAffecteFr($this->getSigleEntiteAffecteFr());
        $copyObj->setSigleEntiteAffecteAr($this->getSigleEntiteAffecteAr());
        $copyObj->setIdAgentAffecte($this->getIdAgentAffecte());
        $copyObj->setNomAgentAffecteFr($this->getNomAgentAffecteFr());
        $copyObj->setNomAgentAffecteAr($this->getNomAgentAffecteAr());
        $copyObj->setCommentaireCitoyenHistoriqueDemande($this->getCommentaireCitoyenHistoriqueDemande());
        $copyObj->setStatutHistoriqueDemande($this->getStatutHistoriqueDemande());
        $copyObj->setAppreciationPrestationHistoriqueDemande($this->getAppreciationPrestationHistoriqueDemande());
        $copyObj->setDateIntervention($this->getDateIntervention());
        $copyObj->setAgentHistoriqueAr($this->getAgentHistoriqueAr());
        $copyObj->setAgentHistoriqueFr($this->getAgentHistoriqueFr());
        $copyObj->setActionHistoriqueDemande($this->getActionHistoriqueDemande());
        $copyObj->setCommentaireAgentInterneHistoriqueDemande($this->getCommentaireAgentInterneHistoriqueDemande());
        $copyObj->setCommentaireAgentVisibleHistoriqueDemande($this->getCommentaireAgentVisibleHistoriqueDemande());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setDetailsAr($this->getDetailsAr());
        $copyObj->setDetailsFr($this->getDetailsFr());
        $copyObj->setIdEntiteTraitante($this->getIdEntiteTraitante());
        $copyObj->setSigleEntiteTraitanteFr($this->getSigleEntiteTraitanteFr());
        $copyObj->setSigleEntiteTraitanteAr($this->getSigleEntiteTraitanteAr());
        $copyObj->setIdPieceJointe($this->getIdPieceJointe());
        $copyObj->setNomPieceJointe($this->getNomPieceJointe());
        $copyObj->setRevision($this->getRevision());
        $copyObj->setIdHistoriquePrecedent($this->getIdHistoriquePrecedent());
        $copyObj->setEtat($this->getEtat());
        $copyObj->setIdAction($this->getIdAction());
        $copyObj->setIdPartage($this->getIdPartage());
        $copyObj->setIdFormat($this->getIdFormat());
        $copyObj->setFormatFr($this->getFormatFr());
        $copyObj->setFormatAr($this->getFormatAr());
        $copyObj->setIdAgentRemplacant($this->getIdAgentRemplacant());
        $copyObj->setAgentRemplacantAr($this->getAgentRemplacantAr());
        $copyObj->setAgentRemplacantFr($this->getAgentRemplacantFr());
        $copyObj->setIdHistoriqueParent($this->getIdHistoriqueParent());
        $copyObj->setDateEcheanceReponse($this->getDateEcheanceReponse());
        $copyObj->setCanal($this->getCanal());
        $copyObj->setInfoCanal($this->getInfoCanal());
        $copyObj->setIdEtapeCircuitValidation($this->getIdEtapeCircuitValidation());
        $copyObj->setChampSupp1($this->getChampSupp1());
        $copyObj->setChampSupp2($this->getChampSupp2());
        $copyObj->setChampSupp3($this->getChampSupp3());
        $copyObj->setChampSupp4($this->getChampSupp4());
        $copyObj->setChampSupp5($this->getChampSupp5());
        $copyObj->setIdInstruction($this->getIdInstruction());
        $copyObj->setTypeClassement($this->getTypeClassement());
        $copyObj->setTypeReponse($this->getTypeReponse());
        $copyObj->setAvecReponse($this->getAvecReponse());
        $copyObj->setRealise($this->getRealise());
        $copyObj->setDateEcheanceReponseProche($this->getDateEcheanceReponseProche());
        $copyObj->setEmailValidation($this->getEmailValidation());
        $copyObj->setTokenValidation($this->getTokenValidation());
        $copyObj->setCheckListTab($this->getCheckListTab());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdHistoriqueDemande(NULL); // this is a auto-increment column, so set to default value
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
     * @return HistoriqueDemande Clone of current object.
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
     * @return HistoriqueDemandePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new HistoriqueDemandePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_historique_demande = null;
        $this->id_demande = null;
        $this->id_entite_affecte = null;
        $this->sigle_entite_affecte_fr = null;
        $this->sigle_entite_affecte_ar = null;
        $this->id_agent_affecte = null;
        $this->nom_agent_affecte_fr = null;
        $this->nom_agent_affecte_ar = null;
        $this->commentaire_citoyen_historique_demande = null;
        $this->statut_historique_demande = null;
        $this->appreciation_prestation_historique_demande = null;
        $this->date_intervention = null;
        $this->agent_historique_ar = null;
        $this->agent_historique_fr = null;
        $this->action_historique_demande = null;
        $this->commentaire_agent_interne_historique_demande = null;
        $this->commentaire_agent_visible_historique_demande = null;
        $this->id_agent = null;
        $this->details_ar = null;
        $this->details_fr = null;
        $this->id_entite_traitante = null;
        $this->sigle_entite_traitante_fr = null;
        $this->sigle_entite_traitante_ar = null;
        $this->id_piece_jointe = null;
        $this->nom_piece_jointe = null;
        $this->revision = null;
        $this->id_historique_precedent = null;
        $this->etat = null;
        $this->id_action = null;
        $this->id_partage = null;
        $this->id_format = null;
        $this->format_fr = null;
        $this->format_ar = null;
        $this->id_agent_remplacant = null;
        $this->agent_remplacant_ar = null;
        $this->agent_remplacant_fr = null;
        $this->id_historique_parent = null;
        $this->date_echeance_reponse = null;
        $this->canal = null;
        $this->info_canal = null;
        $this->id_etape_circuit_validation = null;
        $this->champ_supp_1 = null;
        $this->champ_supp_2 = null;
        $this->champ_supp_3 = null;
        $this->champ_supp_4 = null;
        $this->champ_supp_5 = null;
        $this->id_instruction = null;
        $this->type_classement = null;
        $this->type_reponse = null;
        $this->avec_reponse = null;
        $this->realise = null;
        $this->date_echeance_reponse_proche = null;
        $this->email_validation = null;
        $this->token_validation = null;
        $this->check_list_tab = null;
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
        return (string) $this->exportTo(HistoriqueDemandePeer::DEFAULT_STRING_FORMAT);
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
