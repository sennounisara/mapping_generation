<?php


/**
 * Base class that represents a row from the 'Agent' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAgent extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAgentPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAgentPeer
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
     * The value for the login field.
     * @var        string
     */
    protected $login;

    /**
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the mdp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mdp;

    /**
     * The value for the certificat field.
     * @var        string
     */
    protected $certificat;

    /**
     * The value for the nom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom;

    /**
     * The value for the prenom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the tentatives_mdp field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $tentatives_mdp;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the service_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $service_id;

    /**
     * The value for the recevoir_mail field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $recevoir_mail;

    /**
     * The value for the elu field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $elu;

    /**
     * The value for the nom_fonction field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_fonction;

    /**
     * The value for the num_tel field.
     * @var        string
     */
    protected $num_tel;

    /**
     * The value for the num_fax field.
     * @var        string
     */
    protected $num_fax;

    /**
     * The value for the type_comm field.
     * Note: this column has a database default value of: '2'
     * @var        string
     */
    protected $type_comm;

    /**
     * The value for the adr_postale field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adr_postale;

    /**
     * The value for the civilite field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $civilite;

    /**
     * The value for the alerte_reponse_electronique field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_reponse_electronique;

    /**
     * The value for the alerte_reception_mainlevee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_reception_mainlevee;

    /**
     * The value for the alerte_cloture_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_cloture_consultation;

    /**
     * The value for the alerte_reception_message field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_reception_message;

    /**
     * The value for the alerte_publication_boamp field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_publication_boamp;

    /**
     * The value for the alerte_echec_publication_boamp field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_echec_publication_boamp;

    /**
     * The value for the alerte_creation_modification_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_creation_modification_agent;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_modification field.
     * @var        string
     */
    protected $date_modification;

    /**
     * The value for the id_initial field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_initial;

    /**
     * The value for the id_profil_socle_externe field.
     * @var        int
     */
    protected $id_profil_socle_externe;

    /**
     * The value for the lieu_execution field.
     * @var        string
     */
    protected $lieu_execution;

    /**
     * The value for the alerte_question_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_question_entreprise;

    /**
     * The value for the actif field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $actif;

    /**
     * The value for the codes_nuts field.
     * @var        string
     */
    protected $codes_nuts;

    /**
     * The value for the num_certificat field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $num_certificat;

    /**
     * The value for the alerte_validation_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_validation_consultation;

    /**
     * The value for the alerte_chorus field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_chorus;

    /**
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * The value for the code_theme field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $code_theme;

    /**
     * @var        CommonOrganisme
     */
    protected $aCommonOrganisme;

    /**
     * @var        PropelObjectCollection|CommonDemandeAchatParCatalogue[] Collection to store aggregation of CommonDemandeAchatParCatalogue objects.
     */
    protected $collCommonDemandeAchatParCatalogues;
    protected $collCommonDemandeAchatParCataloguesPartial;

    /**
     * @var        PropelObjectCollection|CommonExecAgentContrat[] Collection to store aggregation of CommonExecAgentContrat objects.
     */
    protected $collCommonExecAgentContrats;
    protected $collCommonExecAgentContratsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecAvenant[] Collection to store aggregation of CommonExecAvenant objects.
     */
    protected $collCommonExecAvenantsRelatedByIdAgentCrea;
    protected $collCommonExecAvenantsRelatedByIdAgentCreaPartial;

    /**
     * @var        PropelObjectCollection|CommonExecAvenant[] Collection to store aggregation of CommonExecAvenant objects.
     */
    protected $collCommonExecAvenantsRelatedByIdAgentModif;
    protected $collCommonExecAvenantsRelatedByIdAgentModifPartial;

    /**
     * @var        PropelObjectCollection|CommonExecAvenant[] Collection to store aggregation of CommonExecAvenant objects.
     */
    protected $collCommonExecAvenantsRelatedByIdAgentRejet;
    protected $collCommonExecAvenantsRelatedByIdAgentRejetPartial;

    /**
     * @var        PropelObjectCollection|CommonExecAvenant[] Collection to store aggregation of CommonExecAvenant objects.
     */
    protected $collCommonExecAvenantsRelatedByIdAgentValidation;
    protected $collCommonExecAvenantsRelatedByIdAgentValidationPartial;

    /**
     * @var        PropelObjectCollection|CommonExecContractant[] Collection to store aggregation of CommonExecContractant objects.
     */
    protected $collCommonExecContractantsRelatedByIdAgentCrea;
    protected $collCommonExecContractantsRelatedByIdAgentCreaPartial;

    /**
     * @var        PropelObjectCollection|CommonExecContractant[] Collection to store aggregation of CommonExecContractant objects.
     */
    protected $collCommonExecContractantsRelatedByIdAgentModif;
    protected $collCommonExecContractantsRelatedByIdAgentModifPartial;

    /**
     * @var        PropelObjectCollection|CommonExecContrat[] Collection to store aggregation of CommonExecContrat objects.
     */
    protected $collCommonExecContratsRelatedByIdAgentCrea;
    protected $collCommonExecContratsRelatedByIdAgentCreaPartial;

    /**
     * @var        PropelObjectCollection|CommonExecContrat[] Collection to store aggregation of CommonExecContrat objects.
     */
    protected $collCommonExecContratsRelatedByIdAgentGestion;
    protected $collCommonExecContratsRelatedByIdAgentGestionPartial;

    /**
     * @var        PropelObjectCollection|CommonExecContrat[] Collection to store aggregation of CommonExecContrat objects.
     */
    protected $collCommonExecContratsRelatedByIdAgentModif;
    protected $collCommonExecContratsRelatedByIdAgentModifPartial;

    /**
     * @var        PropelObjectCollection|CommonExecDossierPaiement[] Collection to store aggregation of CommonExecDossierPaiement objects.
     */
    protected $collCommonExecDossierPaiements;
    protected $collCommonExecDossierPaiementsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecEvenement[] Collection to store aggregation of CommonExecEvenement objects.
     */
    protected $collCommonExecEvenementsRelatedByIdAgentCrea;
    protected $collCommonExecEvenementsRelatedByIdAgentCreaPartial;

    /**
     * @var        PropelObjectCollection|CommonExecEvenement[] Collection to store aggregation of CommonExecEvenement objects.
     */
    protected $collCommonExecEvenementsRelatedByIdAgentModif;
    protected $collCommonExecEvenementsRelatedByIdAgentModifPartial;

    /**
     * @var        PropelObjectCollection|CommonExecEvenement[] Collection to store aggregation of CommonExecEvenement objects.
     */
    protected $collCommonExecEvenementsRelatedByIdAgentRejet;
    protected $collCommonExecEvenementsRelatedByIdAgentRejetPartial;

    /**
     * @var        PropelObjectCollection|CommonExecEvenement[] Collection to store aggregation of CommonExecEvenement objects.
     */
    protected $collCommonExecEvenementsRelatedByIdAgentValidation;
    protected $collCommonExecEvenementsRelatedByIdAgentValidationPartial;

    /**
     * @var        PropelObjectCollection|CommonExecFacture[] Collection to store aggregation of CommonExecFacture objects.
     */
    protected $collCommonExecFacturesRelatedByIdAgentCrea;
    protected $collCommonExecFacturesRelatedByIdAgentCreaPartial;

    /**
     * @var        PropelObjectCollection|CommonExecFacture[] Collection to store aggregation of CommonExecFacture objects.
     */
    protected $collCommonExecFacturesRelatedByIdAgentModif;
    protected $collCommonExecFacturesRelatedByIdAgentModifPartial;

    /**
     * @var        PropelObjectCollection|CommonExecFacture[] Collection to store aggregation of CommonExecFacture objects.
     */
    protected $collCommonExecFacturesRelatedByIdAgentRejet;
    protected $collCommonExecFacturesRelatedByIdAgentRejetPartial;

    /**
     * @var        PropelObjectCollection|CommonExecFacture[] Collection to store aggregation of CommonExecFacture objects.
     */
    protected $collCommonExecFacturesRelatedByIdAgentValidation;
    protected $collCommonExecFacturesRelatedByIdAgentValidationPartial;

    /**
     * @var        PropelObjectCollection|CommonExecHistoriquePrix[] Collection to store aggregation of CommonExecHistoriquePrix objects.
     */
    protected $collCommonExecHistoriquePrixsRelatedByIdAgentCrea;
    protected $collCommonExecHistoriquePrixsRelatedByIdAgentCreaPartial;

    /**
     * @var        PropelObjectCollection|CommonExecHistoriquePrix[] Collection to store aggregation of CommonExecHistoriquePrix objects.
     */
    protected $collCommonExecHistoriquePrixsRelatedByIdAgentModif;
    protected $collCommonExecHistoriquePrixsRelatedByIdAgentModifPartial;

    /**
     * @var        PropelObjectCollection|CommonExecLivrableContrat[] Collection to store aggregation of CommonExecLivrableContrat objects.
     */
    protected $collCommonExecLivrableContrats;
    protected $collCommonExecLivrableContratsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPhase[] Collection to store aggregation of CommonExecPhase objects.
     */
    protected $collCommonExecPhasesRelatedByIdAgentCrea;
    protected $collCommonExecPhasesRelatedByIdAgentCreaPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPhase[] Collection to store aggregation of CommonExecPhase objects.
     */
    protected $collCommonExecPhasesRelatedByIdAgentModif;
    protected $collCommonExecPhasesRelatedByIdAgentModifPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPiece[] Collection to store aggregation of CommonExecPiece objects.
     */
    protected $collCommonExecPieces;
    protected $collCommonExecPiecesPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPieceAvenant[] Collection to store aggregation of CommonExecPieceAvenant objects.
     */
    protected $collCommonExecPieceAvenants;
    protected $collCommonExecPieceAvenantsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPieceContrat[] Collection to store aggregation of CommonExecPieceContrat objects.
     */
    protected $collCommonExecPieceContrats;
    protected $collCommonExecPieceContratsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPieceDossierpaiement[] Collection to store aggregation of CommonExecPieceDossierpaiement objects.
     */
    protected $collCommonExecPieceDossierpaiements;
    protected $collCommonExecPieceDossierpaiementsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPieceEvenement[] Collection to store aggregation of CommonExecPieceEvenement objects.
     */
    protected $collCommonExecPieceEvenements;
    protected $collCommonExecPieceEvenementsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPieceFacture[] Collection to store aggregation of CommonExecPieceFacture objects.
     */
    protected $collCommonExecPieceFactures;
    protected $collCommonExecPieceFacturesPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPrix[] Collection to store aggregation of CommonExecPrix objects.
     */
    protected $collCommonExecPrixsRelatedByIdAgentCrea;
    protected $collCommonExecPrixsRelatedByIdAgentCreaPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPrix[] Collection to store aggregation of CommonExecPrix objects.
     */
    protected $collCommonExecPrixsRelatedByIdAgentModif;
    protected $collCommonExecPrixsRelatedByIdAgentModifPartial;

    /**
     * @var        PropelObjectCollection|CommonExecRepartition[] Collection to store aggregation of CommonExecRepartition objects.
     */
    protected $collCommonExecRepartitionsRelatedByIdAgentCrea;
    protected $collCommonExecRepartitionsRelatedByIdAgentCreaPartial;

    /**
     * @var        PropelObjectCollection|CommonExecRepartition[] Collection to store aggregation of CommonExecRepartition objects.
     */
    protected $collCommonExecRepartitionsRelatedByIdAgentModif;
    protected $collCommonExecRepartitionsRelatedByIdAgentModifPartial;

    /**
     * @var        PropelObjectCollection|CommonResultatAnalyseHistorique[] Collection to store aggregation of CommonResultatAnalyseHistorique objects.
     */
    protected $collCommonResultatAnalyseHistoriques;
    protected $collCommonResultatAnalyseHistoriquesPartial;

    /**
     * @var        PropelObjectCollection|CommonTCAOCommissionAgent[] Collection to store aggregation of CommonTCAOCommissionAgent objects.
     */
    protected $collCommonTCAOCommissionAgents;
    protected $collCommonTCAOCommissionAgentsPartial;

    /**
     * @var        PropelObjectCollection|CommonTCAOSeanceAgent[] Collection to store aggregation of CommonTCAOSeanceAgent objects.
     */
    protected $collCommonTCAOSeanceAgents;
    protected $collCommonTCAOSeanceAgentsPartial;

    /**
     * @var        PropelObjectCollection|CommonTCAOSeanceInvite[] Collection to store aggregation of CommonTCAOSeanceInvite objects.
     */
    protected $collCommonTCAOSeanceInvites;
    protected $collCommonTCAOSeanceInvitesPartial;

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
    protected $commonDemandeAchatParCataloguesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecAgentContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecAvenantsRelatedByIdAgentCreaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecAvenantsRelatedByIdAgentModifScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecAvenantsRelatedByIdAgentRejetScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecAvenantsRelatedByIdAgentValidationScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecContractantsRelatedByIdAgentCreaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecContractantsRelatedByIdAgentModifScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecContratsRelatedByIdAgentCreaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecContratsRelatedByIdAgentGestionScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecContratsRelatedByIdAgentModifScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecDossierPaiementsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecEvenementsRelatedByIdAgentCreaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecEvenementsRelatedByIdAgentModifScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecEvenementsRelatedByIdAgentRejetScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecEvenementsRelatedByIdAgentValidationScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecFacturesRelatedByIdAgentCreaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecFacturesRelatedByIdAgentModifScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecFacturesRelatedByIdAgentRejetScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecFacturesRelatedByIdAgentValidationScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecHistoriquePrixsRelatedByIdAgentCreaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecHistoriquePrixsRelatedByIdAgentModifScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecLivrableContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPhasesRelatedByIdAgentCreaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPhasesRelatedByIdAgentModifScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPiecesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPieceAvenantsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPieceContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPieceDossierpaiementsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPieceEvenementsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPieceFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPrixsRelatedByIdAgentCreaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPrixsRelatedByIdAgentModifScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecRepartitionsRelatedByIdAgentCreaScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecRepartitionsRelatedByIdAgentModifScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonResultatAnalyseHistoriquesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCAOCommissionAgentsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCAOSeanceAgentsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCAOSeanceInvitesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->email = '';
        $this->mdp = '';
        $this->nom = '';
        $this->prenom = '';
        $this->tentatives_mdp = 0;
        $this->organisme = '';
        $this->service_id = 0;
        $this->recevoir_mail = '0';
        $this->elu = '0';
        $this->nom_fonction = '';
        $this->type_comm = '2';
        $this->adr_postale = '';
        $this->civilite = '';
        $this->alerte_reponse_electronique = '0';
        $this->alerte_reception_mainlevee = '0';
        $this->alerte_cloture_consultation = '0';
        $this->alerte_reception_message = '0';
        $this->alerte_publication_boamp = '0';
        $this->alerte_echec_publication_boamp = '0';
        $this->alerte_creation_modification_agent = '0';
        $this->id_initial = 0;
        $this->alerte_question_entreprise = '0';
        $this->actif = '1';
        $this->num_certificat = '';
        $this->alerte_validation_consultation = '0';
        $this->alerte_chorus = '0';
        $this->code_theme = '0';
    }

    /**
     * Initializes internal state of BaseCommonAgent object.
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
     * Get the [login] column value.
     * 
     * @return string
     */
    public function getLogin()
    {

        return $this->login;
    }

    /**
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [mdp] column value.
     * 
     * @return string
     */
    public function getMdp()
    {

        return $this->mdp;
    }

    /**
     * Get the [certificat] column value.
     * 
     * @return string
     */
    public function getCertificat()
    {

        return $this->certificat;
    }

    /**
     * Get the [nom] column value.
     * 
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * Get the [prenom] column value.
     * 
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * Get the [tentatives_mdp] column value.
     * 
     * @return int
     */
    public function getTentativesMdp()
    {

        return $this->tentatives_mdp;
    }

    /**
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [service_id] column value.
     * 
     * @return int
     */
    public function getServiceId()
    {

        return $this->service_id;
    }

    /**
     * Get the [recevoir_mail] column value.
     * 
     * @return string
     */
    public function getRecevoirMail()
    {

        return $this->recevoir_mail;
    }

    /**
     * Get the [elu] column value.
     * 
     * @return string
     */
    public function getElu()
    {

        return $this->elu;
    }

    /**
     * Get the [nom_fonction] column value.
     * 
     * @return string
     */
    public function getNomFonction()
    {

        return $this->nom_fonction;
    }

    /**
     * Get the [num_tel] column value.
     * 
     * @return string
     */
    public function getNumTel()
    {

        return $this->num_tel;
    }

    /**
     * Get the [num_fax] column value.
     * 
     * @return string
     */
    public function getNumFax()
    {

        return $this->num_fax;
    }

    /**
     * Get the [type_comm] column value.
     * 
     * @return string
     */
    public function getTypeComm()
    {

        return $this->type_comm;
    }

    /**
     * Get the [adr_postale] column value.
     * 
     * @return string
     */
    public function getAdrPostale()
    {

        return $this->adr_postale;
    }

    /**
     * Get the [civilite] column value.
     * 
     * @return string
     */
    public function getCivilite()
    {

        return $this->civilite;
    }

    /**
     * Get the [alerte_reponse_electronique] column value.
     * 
     * @return string
     */
    public function getAlerteReponseElectronique()
    {

        return $this->alerte_reponse_electronique;
    }

    /**
     * Get the [alerte_reception_mainlevee] column value.
     * 
     * @return string
     */
    public function getAlerteReceptionMainlevee()
    {

        return $this->alerte_reception_mainlevee;
    }

    /**
     * Get the [alerte_cloture_consultation] column value.
     * 
     * @return string
     */
    public function getAlerteClotureConsultation()
    {

        return $this->alerte_cloture_consultation;
    }

    /**
     * Get the [alerte_reception_message] column value.
     * 
     * @return string
     */
    public function getAlerteReceptionMessage()
    {

        return $this->alerte_reception_message;
    }

    /**
     * Get the [alerte_publication_boamp] column value.
     * 
     * @return string
     */
    public function getAlertePublicationBoamp()
    {

        return $this->alerte_publication_boamp;
    }

    /**
     * Get the [alerte_echec_publication_boamp] column value.
     * 
     * @return string
     */
    public function getAlerteEchecPublicationBoamp()
    {

        return $this->alerte_echec_publication_boamp;
    }

    /**
     * Get the [alerte_creation_modification_agent] column value.
     * 
     * @return string
     */
    public function getAlerteCreationModificationAgent()
    {

        return $this->alerte_creation_modification_agent;
    }

    /**
     * Get the [date_creation] column value.
     * 
     * @return string
     */
    public function getDateCreation()
    {

        return $this->date_creation;
    }

    /**
     * Get the [date_modification] column value.
     * 
     * @return string
     */
    public function getDateModification()
    {

        return $this->date_modification;
    }

    /**
     * Get the [id_initial] column value.
     * 
     * @return int
     */
    public function getIdInitial()
    {

        return $this->id_initial;
    }

    /**
     * Get the [id_profil_socle_externe] column value.
     * 
     * @return int
     */
    public function getIdProfilSocleExterne()
    {

        return $this->id_profil_socle_externe;
    }

    /**
     * Get the [lieu_execution] column value.
     * 
     * @return string
     */
    public function getLieuExecution()
    {

        return $this->lieu_execution;
    }

    /**
     * Get the [alerte_question_entreprise] column value.
     * 
     * @return string
     */
    public function getAlerteQuestionEntreprise()
    {

        return $this->alerte_question_entreprise;
    }

    /**
     * Get the [actif] column value.
     * 
     * @return string
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Get the [codes_nuts] column value.
     * 
     * @return string
     */
    public function getCodesNuts()
    {

        return $this->codes_nuts;
    }

    /**
     * Get the [num_certificat] column value.
     * 
     * @return string
     */
    public function getNumCertificat()
    {

        return $this->num_certificat;
    }

    /**
     * Get the [alerte_validation_consultation] column value.
     * 
     * @return string
     */
    public function getAlerteValidationConsultation()
    {

        return $this->alerte_validation_consultation;
    }

    /**
     * Get the [alerte_chorus] column value.
     * 
     * @return string
     */
    public function getAlerteChorus()
    {

        return $this->alerte_chorus;
    }

    /**
     * Get the [password] column value.
     * 
     * @return string
     */
    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Get the [code_theme] column value.
     * 
     * @return string
     */
    public function getCodeTheme()
    {

        return $this->code_theme;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [login] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setLogin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->login !== $v) {
            $this->login = $v;
            $this->modifiedColumns[] = CommonAgentPeer::LOGIN;
        }


        return $this;
    } // setLogin()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonAgentPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [mdp] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setMdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mdp !== $v) {
            $this->mdp = $v;
            $this->modifiedColumns[] = CommonAgentPeer::MDP;
        }


        return $this;
    } // setMdp()

    /**
     * Set the value of [certificat] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->certificat !== $v) {
            $this->certificat = $v;
            $this->modifiedColumns[] = CommonAgentPeer::CERTIFICAT;
        }


        return $this;
    } // setCertificat()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonAgentPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonAgentPeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [tentatives_mdp] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setTentativesMdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tentatives_mdp !== $v) {
            $this->tentatives_mdp = $v;
            $this->modifiedColumns[] = CommonAgentPeer::TENTATIVES_MDP;
        }


        return $this;
    } // setTentativesMdp()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ORGANISME;
        }

        if ($this->aCommonOrganisme !== null && $this->aCommonOrganisme->getAcronyme() !== $v) {
            $this->aCommonOrganisme = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [service_id] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setServiceId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->service_id !== $v) {
            $this->service_id = $v;
            $this->modifiedColumns[] = CommonAgentPeer::SERVICE_ID;
        }


        return $this;
    } // setServiceId()

    /**
     * Set the value of [recevoir_mail] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setRecevoirMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recevoir_mail !== $v) {
            $this->recevoir_mail = $v;
            $this->modifiedColumns[] = CommonAgentPeer::RECEVOIR_MAIL;
        }


        return $this;
    } // setRecevoirMail()

    /**
     * Set the value of [elu] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setElu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->elu !== $v) {
            $this->elu = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ELU;
        }


        return $this;
    } // setElu()

    /**
     * Set the value of [nom_fonction] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setNomFonction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fonction !== $v) {
            $this->nom_fonction = $v;
            $this->modifiedColumns[] = CommonAgentPeer::NOM_FONCTION;
        }


        return $this;
    } // setNomFonction()

    /**
     * Set the value of [num_tel] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setNumTel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_tel !== $v) {
            $this->num_tel = $v;
            $this->modifiedColumns[] = CommonAgentPeer::NUM_TEL;
        }


        return $this;
    } // setNumTel()

    /**
     * Set the value of [num_fax] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setNumFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_fax !== $v) {
            $this->num_fax = $v;
            $this->modifiedColumns[] = CommonAgentPeer::NUM_FAX;
        }


        return $this;
    } // setNumFax()

    /**
     * Set the value of [type_comm] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setTypeComm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_comm !== $v) {
            $this->type_comm = $v;
            $this->modifiedColumns[] = CommonAgentPeer::TYPE_COMM;
        }


        return $this;
    } // setTypeComm()

    /**
     * Set the value of [adr_postale] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAdrPostale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adr_postale !== $v) {
            $this->adr_postale = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ADR_POSTALE;
        }


        return $this;
    } // setAdrPostale()

    /**
     * Set the value of [civilite] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCivilite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->civilite !== $v) {
            $this->civilite = $v;
            $this->modifiedColumns[] = CommonAgentPeer::CIVILITE;
        }


        return $this;
    } // setCivilite()

    /**
     * Set the value of [alerte_reponse_electronique] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteReponseElectronique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_reponse_electronique !== $v) {
            $this->alerte_reponse_electronique = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE;
        }


        return $this;
    } // setAlerteReponseElectronique()

    /**
     * Set the value of [alerte_reception_mainlevee] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteReceptionMainlevee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_reception_mainlevee !== $v) {
            $this->alerte_reception_mainlevee = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE;
        }


        return $this;
    } // setAlerteReceptionMainlevee()

    /**
     * Set the value of [alerte_cloture_consultation] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteClotureConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_cloture_consultation !== $v) {
            $this->alerte_cloture_consultation = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION;
        }


        return $this;
    } // setAlerteClotureConsultation()

    /**
     * Set the value of [alerte_reception_message] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteReceptionMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_reception_message !== $v) {
            $this->alerte_reception_message = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_RECEPTION_MESSAGE;
        }


        return $this;
    } // setAlerteReceptionMessage()

    /**
     * Set the value of [alerte_publication_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlertePublicationBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_publication_boamp !== $v) {
            $this->alerte_publication_boamp = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_PUBLICATION_BOAMP;
        }


        return $this;
    } // setAlertePublicationBoamp()

    /**
     * Set the value of [alerte_echec_publication_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteEchecPublicationBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_echec_publication_boamp !== $v) {
            $this->alerte_echec_publication_boamp = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP;
        }


        return $this;
    } // setAlerteEchecPublicationBoamp()

    /**
     * Set the value of [alerte_creation_modification_agent] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteCreationModificationAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_creation_modification_agent !== $v) {
            $this->alerte_creation_modification_agent = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT;
        }


        return $this;
    } // setAlerteCreationModificationAgent()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonAgentPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_modification] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modification !== $v) {
            $this->date_modification = $v;
            $this->modifiedColumns[] = CommonAgentPeer::DATE_MODIFICATION;
        }


        return $this;
    } // setDateModification()

    /**
     * Set the value of [id_initial] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setIdInitial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_initial !== $v) {
            $this->id_initial = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ID_INITIAL;
        }


        return $this;
    } // setIdInitial()

    /**
     * Set the value of [id_profil_socle_externe] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setIdProfilSocleExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_profil_socle_externe !== $v) {
            $this->id_profil_socle_externe = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE;
        }


        return $this;
    } // setIdProfilSocleExterne()

    /**
     * Set the value of [lieu_execution] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setLieuExecution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_execution !== $v) {
            $this->lieu_execution = $v;
            $this->modifiedColumns[] = CommonAgentPeer::LIEU_EXECUTION;
        }


        return $this;
    } // setLieuExecution()

    /**
     * Set the value of [alerte_question_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteQuestionEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_question_entreprise !== $v) {
            $this->alerte_question_entreprise = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE;
        }


        return $this;
    } // setAlerteQuestionEntreprise()

    /**
     * Set the value of [actif] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setActif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif !== $v) {
            $this->actif = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ACTIF;
        }


        return $this;
    } // setActif()

    /**
     * Set the value of [codes_nuts] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCodesNuts($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codes_nuts !== $v) {
            $this->codes_nuts = $v;
            $this->modifiedColumns[] = CommonAgentPeer::CODES_NUTS;
        }


        return $this;
    } // setCodesNuts()

    /**
     * Set the value of [num_certificat] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setNumCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_certificat !== $v) {
            $this->num_certificat = $v;
            $this->modifiedColumns[] = CommonAgentPeer::NUM_CERTIFICAT;
        }


        return $this;
    } // setNumCertificat()

    /**
     * Set the value of [alerte_validation_consultation] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteValidationConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_validation_consultation !== $v) {
            $this->alerte_validation_consultation = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION;
        }


        return $this;
    } // setAlerteValidationConsultation()

    /**
     * Set the value of [alerte_chorus] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteChorus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_chorus !== $v) {
            $this->alerte_chorus = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_CHORUS;
        }


        return $this;
    } // setAlerteChorus()

    /**
     * Set the value of [password] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = CommonAgentPeer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Set the value of [code_theme] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCodeTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_theme !== $v) {
            $this->code_theme = $v;
            $this->modifiedColumns[] = CommonAgentPeer::CODE_THEME;
        }


        return $this;
    } // setCodeTheme()

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
            if ($this->email !== '') {
                return false;
            }

            if ($this->mdp !== '') {
                return false;
            }

            if ($this->nom !== '') {
                return false;
            }

            if ($this->prenom !== '') {
                return false;
            }

            if ($this->tentatives_mdp !== 0) {
                return false;
            }

            if ($this->organisme !== '') {
                return false;
            }

            if ($this->service_id !== 0) {
                return false;
            }

            if ($this->recevoir_mail !== '0') {
                return false;
            }

            if ($this->elu !== '0') {
                return false;
            }

            if ($this->nom_fonction !== '') {
                return false;
            }

            if ($this->type_comm !== '2') {
                return false;
            }

            if ($this->adr_postale !== '') {
                return false;
            }

            if ($this->civilite !== '') {
                return false;
            }

            if ($this->alerte_reponse_electronique !== '0') {
                return false;
            }

            if ($this->alerte_reception_mainlevee !== '0') {
                return false;
            }

            if ($this->alerte_cloture_consultation !== '0') {
                return false;
            }

            if ($this->alerte_reception_message !== '0') {
                return false;
            }

            if ($this->alerte_publication_boamp !== '0') {
                return false;
            }

            if ($this->alerte_echec_publication_boamp !== '0') {
                return false;
            }

            if ($this->alerte_creation_modification_agent !== '0') {
                return false;
            }

            if ($this->id_initial !== 0) {
                return false;
            }

            if ($this->alerte_question_entreprise !== '0') {
                return false;
            }

            if ($this->actif !== '1') {
                return false;
            }

            if ($this->num_certificat !== '') {
                return false;
            }

            if ($this->alerte_validation_consultation !== '0') {
                return false;
            }

            if ($this->alerte_chorus !== '0') {
                return false;
            }

            if ($this->code_theme !== '0') {
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
            $this->login = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->email = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->mdp = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->certificat = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->nom = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->prenom = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->tentatives_mdp = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->organisme = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->service_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->recevoir_mail = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->elu = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->nom_fonction = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->num_tel = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->num_fax = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->type_comm = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->adr_postale = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->civilite = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->alerte_reponse_electronique = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->alerte_reception_mainlevee = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->alerte_cloture_consultation = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->alerte_reception_message = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->alerte_publication_boamp = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->alerte_echec_publication_boamp = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->alerte_creation_modification_agent = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->date_creation = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->date_modification = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->id_initial = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->id_profil_socle_externe = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->lieu_execution = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->alerte_question_entreprise = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->actif = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->codes_nuts = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->num_certificat = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->alerte_validation_consultation = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->alerte_chorus = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->password = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->code_theme = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 38; // 38 = CommonAgentPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAgent object", $e);
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

        if ($this->aCommonOrganisme !== null && $this->organisme !== $this->aCommonOrganisme->getAcronyme()) {
            $this->aCommonOrganisme = null;
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
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAgentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonOrganisme = null;
            $this->collCommonDemandeAchatParCatalogues = null;

            $this->collCommonExecAgentContrats = null;

            $this->collCommonExecAvenantsRelatedByIdAgentCrea = null;

            $this->collCommonExecAvenantsRelatedByIdAgentModif = null;

            $this->collCommonExecAvenantsRelatedByIdAgentRejet = null;

            $this->collCommonExecAvenantsRelatedByIdAgentValidation = null;

            $this->collCommonExecContractantsRelatedByIdAgentCrea = null;

            $this->collCommonExecContractantsRelatedByIdAgentModif = null;

            $this->collCommonExecContratsRelatedByIdAgentCrea = null;

            $this->collCommonExecContratsRelatedByIdAgentGestion = null;

            $this->collCommonExecContratsRelatedByIdAgentModif = null;

            $this->collCommonExecDossierPaiements = null;

            $this->collCommonExecEvenementsRelatedByIdAgentCrea = null;

            $this->collCommonExecEvenementsRelatedByIdAgentModif = null;

            $this->collCommonExecEvenementsRelatedByIdAgentRejet = null;

            $this->collCommonExecEvenementsRelatedByIdAgentValidation = null;

            $this->collCommonExecFacturesRelatedByIdAgentCrea = null;

            $this->collCommonExecFacturesRelatedByIdAgentModif = null;

            $this->collCommonExecFacturesRelatedByIdAgentRejet = null;

            $this->collCommonExecFacturesRelatedByIdAgentValidation = null;

            $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea = null;

            $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif = null;

            $this->collCommonExecLivrableContrats = null;

            $this->collCommonExecPhasesRelatedByIdAgentCrea = null;

            $this->collCommonExecPhasesRelatedByIdAgentModif = null;

            $this->collCommonExecPieces = null;

            $this->collCommonExecPieceAvenants = null;

            $this->collCommonExecPieceContrats = null;

            $this->collCommonExecPieceDossierpaiements = null;

            $this->collCommonExecPieceEvenements = null;

            $this->collCommonExecPieceFactures = null;

            $this->collCommonExecPrixsRelatedByIdAgentCrea = null;

            $this->collCommonExecPrixsRelatedByIdAgentModif = null;

            $this->collCommonExecRepartitionsRelatedByIdAgentCrea = null;

            $this->collCommonExecRepartitionsRelatedByIdAgentModif = null;

            $this->collCommonResultatAnalyseHistoriques = null;

            $this->collCommonTCAOCommissionAgents = null;

            $this->collCommonTCAOSeanceAgents = null;

            $this->collCommonTCAOSeanceInvites = null;

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
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAgentQuery::create()
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
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAgentPeer::addInstanceToPool($this);
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

            if ($this->aCommonOrganisme !== null) {
                if ($this->aCommonOrganisme->isModified() || $this->aCommonOrganisme->isNew()) {
                    $affectedRows += $this->aCommonOrganisme->save($con);
                }
                $this->setCommonOrganisme($this->aCommonOrganisme);
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

            if ($this->commonDemandeAchatParCataloguesScheduledForDeletion !== null) {
                if (!$this->commonDemandeAchatParCataloguesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonDemandeAchatParCataloguesScheduledForDeletion as $commonDemandeAchatParCatalogue) {
                        // need to save related object because we set the relation to null
                        $commonDemandeAchatParCatalogue->save($con);
                    }
                    $this->commonDemandeAchatParCataloguesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonDemandeAchatParCatalogues !== null) {
                foreach ($this->collCommonDemandeAchatParCatalogues as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecAgentContratsScheduledForDeletion !== null) {
                if (!$this->commonExecAgentContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecAgentContratsScheduledForDeletion as $commonExecAgentContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecAgentContrat->save($con);
                    }
                    $this->commonExecAgentContratsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecAgentContrats !== null) {
                foreach ($this->collCommonExecAgentContrats as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecAvenantsRelatedByIdAgentCreaScheduledForDeletion !== null) {
                if (!$this->commonExecAvenantsRelatedByIdAgentCreaScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecAvenantsRelatedByIdAgentCreaScheduledForDeletion as $commonExecAvenantRelatedByIdAgentCrea) {
                        // need to save related object because we set the relation to null
                        $commonExecAvenantRelatedByIdAgentCrea->save($con);
                    }
                    $this->commonExecAvenantsRelatedByIdAgentCreaScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecAvenantsRelatedByIdAgentCrea !== null) {
                foreach ($this->collCommonExecAvenantsRelatedByIdAgentCrea as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecAvenantsRelatedByIdAgentModifScheduledForDeletion !== null) {
                if (!$this->commonExecAvenantsRelatedByIdAgentModifScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecAvenantsRelatedByIdAgentModifScheduledForDeletion as $commonExecAvenantRelatedByIdAgentModif) {
                        // need to save related object because we set the relation to null
                        $commonExecAvenantRelatedByIdAgentModif->save($con);
                    }
                    $this->commonExecAvenantsRelatedByIdAgentModifScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecAvenantsRelatedByIdAgentModif !== null) {
                foreach ($this->collCommonExecAvenantsRelatedByIdAgentModif as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecAvenantsRelatedByIdAgentRejetScheduledForDeletion !== null) {
                if (!$this->commonExecAvenantsRelatedByIdAgentRejetScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecAvenantsRelatedByIdAgentRejetScheduledForDeletion as $commonExecAvenantRelatedByIdAgentRejet) {
                        // need to save related object because we set the relation to null
                        $commonExecAvenantRelatedByIdAgentRejet->save($con);
                    }
                    $this->commonExecAvenantsRelatedByIdAgentRejetScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecAvenantsRelatedByIdAgentRejet !== null) {
                foreach ($this->collCommonExecAvenantsRelatedByIdAgentRejet as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecAvenantsRelatedByIdAgentValidationScheduledForDeletion !== null) {
                if (!$this->commonExecAvenantsRelatedByIdAgentValidationScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecAvenantsRelatedByIdAgentValidationScheduledForDeletion as $commonExecAvenantRelatedByIdAgentValidation) {
                        // need to save related object because we set the relation to null
                        $commonExecAvenantRelatedByIdAgentValidation->save($con);
                    }
                    $this->commonExecAvenantsRelatedByIdAgentValidationScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecAvenantsRelatedByIdAgentValidation !== null) {
                foreach ($this->collCommonExecAvenantsRelatedByIdAgentValidation as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecContractantsRelatedByIdAgentCreaScheduledForDeletion !== null) {
                if (!$this->commonExecContractantsRelatedByIdAgentCreaScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContractantsRelatedByIdAgentCreaScheduledForDeletion as $commonExecContractantRelatedByIdAgentCrea) {
                        // need to save related object because we set the relation to null
                        $commonExecContractantRelatedByIdAgentCrea->save($con);
                    }
                    $this->commonExecContractantsRelatedByIdAgentCreaScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContractantsRelatedByIdAgentCrea !== null) {
                foreach ($this->collCommonExecContractantsRelatedByIdAgentCrea as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecContractantsRelatedByIdAgentModifScheduledForDeletion !== null) {
                if (!$this->commonExecContractantsRelatedByIdAgentModifScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContractantsRelatedByIdAgentModifScheduledForDeletion as $commonExecContractantRelatedByIdAgentModif) {
                        // need to save related object because we set the relation to null
                        $commonExecContractantRelatedByIdAgentModif->save($con);
                    }
                    $this->commonExecContractantsRelatedByIdAgentModifScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContractantsRelatedByIdAgentModif !== null) {
                foreach ($this->collCommonExecContractantsRelatedByIdAgentModif as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecContratsRelatedByIdAgentCreaScheduledForDeletion !== null) {
                if (!$this->commonExecContratsRelatedByIdAgentCreaScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContratsRelatedByIdAgentCreaScheduledForDeletion as $commonExecContratRelatedByIdAgentCrea) {
                        // need to save related object because we set the relation to null
                        $commonExecContratRelatedByIdAgentCrea->save($con);
                    }
                    $this->commonExecContratsRelatedByIdAgentCreaScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContratsRelatedByIdAgentCrea !== null) {
                foreach ($this->collCommonExecContratsRelatedByIdAgentCrea as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecContratsRelatedByIdAgentGestionScheduledForDeletion !== null) {
                if (!$this->commonExecContratsRelatedByIdAgentGestionScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContratsRelatedByIdAgentGestionScheduledForDeletion as $commonExecContratRelatedByIdAgentGestion) {
                        // need to save related object because we set the relation to null
                        $commonExecContratRelatedByIdAgentGestion->save($con);
                    }
                    $this->commonExecContratsRelatedByIdAgentGestionScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContratsRelatedByIdAgentGestion !== null) {
                foreach ($this->collCommonExecContratsRelatedByIdAgentGestion as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecContratsRelatedByIdAgentModifScheduledForDeletion !== null) {
                if (!$this->commonExecContratsRelatedByIdAgentModifScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContratsRelatedByIdAgentModifScheduledForDeletion as $commonExecContratRelatedByIdAgentModif) {
                        // need to save related object because we set the relation to null
                        $commonExecContratRelatedByIdAgentModif->save($con);
                    }
                    $this->commonExecContratsRelatedByIdAgentModifScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContratsRelatedByIdAgentModif !== null) {
                foreach ($this->collCommonExecContratsRelatedByIdAgentModif as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecDossierPaiementsScheduledForDeletion !== null) {
                if (!$this->commonExecDossierPaiementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecDossierPaiementsScheduledForDeletion as $commonExecDossierPaiement) {
                        // need to save related object because we set the relation to null
                        $commonExecDossierPaiement->save($con);
                    }
                    $this->commonExecDossierPaiementsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecDossierPaiements !== null) {
                foreach ($this->collCommonExecDossierPaiements as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecEvenementsRelatedByIdAgentCreaScheduledForDeletion !== null) {
                if (!$this->commonExecEvenementsRelatedByIdAgentCreaScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecEvenementsRelatedByIdAgentCreaScheduledForDeletion as $commonExecEvenementRelatedByIdAgentCrea) {
                        // need to save related object because we set the relation to null
                        $commonExecEvenementRelatedByIdAgentCrea->save($con);
                    }
                    $this->commonExecEvenementsRelatedByIdAgentCreaScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecEvenementsRelatedByIdAgentCrea !== null) {
                foreach ($this->collCommonExecEvenementsRelatedByIdAgentCrea as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecEvenementsRelatedByIdAgentModifScheduledForDeletion !== null) {
                if (!$this->commonExecEvenementsRelatedByIdAgentModifScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecEvenementsRelatedByIdAgentModifScheduledForDeletion as $commonExecEvenementRelatedByIdAgentModif) {
                        // need to save related object because we set the relation to null
                        $commonExecEvenementRelatedByIdAgentModif->save($con);
                    }
                    $this->commonExecEvenementsRelatedByIdAgentModifScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecEvenementsRelatedByIdAgentModif !== null) {
                foreach ($this->collCommonExecEvenementsRelatedByIdAgentModif as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecEvenementsRelatedByIdAgentRejetScheduledForDeletion !== null) {
                if (!$this->commonExecEvenementsRelatedByIdAgentRejetScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecEvenementsRelatedByIdAgentRejetScheduledForDeletion as $commonExecEvenementRelatedByIdAgentRejet) {
                        // need to save related object because we set the relation to null
                        $commonExecEvenementRelatedByIdAgentRejet->save($con);
                    }
                    $this->commonExecEvenementsRelatedByIdAgentRejetScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecEvenementsRelatedByIdAgentRejet !== null) {
                foreach ($this->collCommonExecEvenementsRelatedByIdAgentRejet as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecEvenementsRelatedByIdAgentValidationScheduledForDeletion !== null) {
                if (!$this->commonExecEvenementsRelatedByIdAgentValidationScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecEvenementsRelatedByIdAgentValidationScheduledForDeletion as $commonExecEvenementRelatedByIdAgentValidation) {
                        // need to save related object because we set the relation to null
                        $commonExecEvenementRelatedByIdAgentValidation->save($con);
                    }
                    $this->commonExecEvenementsRelatedByIdAgentValidationScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecEvenementsRelatedByIdAgentValidation !== null) {
                foreach ($this->collCommonExecEvenementsRelatedByIdAgentValidation as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecFacturesRelatedByIdAgentCreaScheduledForDeletion !== null) {
                if (!$this->commonExecFacturesRelatedByIdAgentCreaScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecFacturesRelatedByIdAgentCreaScheduledForDeletion as $commonExecFactureRelatedByIdAgentCrea) {
                        // need to save related object because we set the relation to null
                        $commonExecFactureRelatedByIdAgentCrea->save($con);
                    }
                    $this->commonExecFacturesRelatedByIdAgentCreaScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecFacturesRelatedByIdAgentCrea !== null) {
                foreach ($this->collCommonExecFacturesRelatedByIdAgentCrea as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecFacturesRelatedByIdAgentModifScheduledForDeletion !== null) {
                if (!$this->commonExecFacturesRelatedByIdAgentModifScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecFacturesRelatedByIdAgentModifScheduledForDeletion as $commonExecFactureRelatedByIdAgentModif) {
                        // need to save related object because we set the relation to null
                        $commonExecFactureRelatedByIdAgentModif->save($con);
                    }
                    $this->commonExecFacturesRelatedByIdAgentModifScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecFacturesRelatedByIdAgentModif !== null) {
                foreach ($this->collCommonExecFacturesRelatedByIdAgentModif as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecFacturesRelatedByIdAgentRejetScheduledForDeletion !== null) {
                if (!$this->commonExecFacturesRelatedByIdAgentRejetScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecFacturesRelatedByIdAgentRejetScheduledForDeletion as $commonExecFactureRelatedByIdAgentRejet) {
                        // need to save related object because we set the relation to null
                        $commonExecFactureRelatedByIdAgentRejet->save($con);
                    }
                    $this->commonExecFacturesRelatedByIdAgentRejetScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecFacturesRelatedByIdAgentRejet !== null) {
                foreach ($this->collCommonExecFacturesRelatedByIdAgentRejet as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecFacturesRelatedByIdAgentValidationScheduledForDeletion !== null) {
                if (!$this->commonExecFacturesRelatedByIdAgentValidationScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecFacturesRelatedByIdAgentValidationScheduledForDeletion as $commonExecFactureRelatedByIdAgentValidation) {
                        // need to save related object because we set the relation to null
                        $commonExecFactureRelatedByIdAgentValidation->save($con);
                    }
                    $this->commonExecFacturesRelatedByIdAgentValidationScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecFacturesRelatedByIdAgentValidation !== null) {
                foreach ($this->collCommonExecFacturesRelatedByIdAgentValidation as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecHistoriquePrixsRelatedByIdAgentCreaScheduledForDeletion !== null) {
                if (!$this->commonExecHistoriquePrixsRelatedByIdAgentCreaScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecHistoriquePrixsRelatedByIdAgentCreaScheduledForDeletion as $commonExecHistoriquePrixRelatedByIdAgentCrea) {
                        // need to save related object because we set the relation to null
                        $commonExecHistoriquePrixRelatedByIdAgentCrea->save($con);
                    }
                    $this->commonExecHistoriquePrixsRelatedByIdAgentCreaScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea !== null) {
                foreach ($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecHistoriquePrixsRelatedByIdAgentModifScheduledForDeletion !== null) {
                if (!$this->commonExecHistoriquePrixsRelatedByIdAgentModifScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecHistoriquePrixsRelatedByIdAgentModifScheduledForDeletion as $commonExecHistoriquePrixRelatedByIdAgentModif) {
                        // need to save related object because we set the relation to null
                        $commonExecHistoriquePrixRelatedByIdAgentModif->save($con);
                    }
                    $this->commonExecHistoriquePrixsRelatedByIdAgentModifScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif !== null) {
                foreach ($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecLivrableContratsScheduledForDeletion !== null) {
                if (!$this->commonExecLivrableContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecLivrableContratsScheduledForDeletion as $commonExecLivrableContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecLivrableContrat->save($con);
                    }
                    $this->commonExecLivrableContratsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecLivrableContrats !== null) {
                foreach ($this->collCommonExecLivrableContrats as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecPhasesRelatedByIdAgentCreaScheduledForDeletion !== null) {
                if (!$this->commonExecPhasesRelatedByIdAgentCreaScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPhasesRelatedByIdAgentCreaScheduledForDeletion as $commonExecPhaseRelatedByIdAgentCrea) {
                        // need to save related object because we set the relation to null
                        $commonExecPhaseRelatedByIdAgentCrea->save($con);
                    }
                    $this->commonExecPhasesRelatedByIdAgentCreaScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPhasesRelatedByIdAgentCrea !== null) {
                foreach ($this->collCommonExecPhasesRelatedByIdAgentCrea as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecPhasesRelatedByIdAgentModifScheduledForDeletion !== null) {
                if (!$this->commonExecPhasesRelatedByIdAgentModifScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPhasesRelatedByIdAgentModifScheduledForDeletion as $commonExecPhaseRelatedByIdAgentModif) {
                        // need to save related object because we set the relation to null
                        $commonExecPhaseRelatedByIdAgentModif->save($con);
                    }
                    $this->commonExecPhasesRelatedByIdAgentModifScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPhasesRelatedByIdAgentModif !== null) {
                foreach ($this->collCommonExecPhasesRelatedByIdAgentModif as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecPiecesScheduledForDeletion !== null) {
                if (!$this->commonExecPiecesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPiecesScheduledForDeletion as $commonExecPiece) {
                        // need to save related object because we set the relation to null
                        $commonExecPiece->save($con);
                    }
                    $this->commonExecPiecesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPieces !== null) {
                foreach ($this->collCommonExecPieces as $referrerFK) {
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

            if ($this->commonExecPieceContratsScheduledForDeletion !== null) {
                if (!$this->commonExecPieceContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPieceContratsScheduledForDeletion as $commonExecPieceContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecPieceContrat->save($con);
                    }
                    $this->commonExecPieceContratsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPieceContrats !== null) {
                foreach ($this->collCommonExecPieceContrats as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecPieceDossierpaiementsScheduledForDeletion !== null) {
                if (!$this->commonExecPieceDossierpaiementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPieceDossierpaiementsScheduledForDeletion as $commonExecPieceDossierpaiement) {
                        // need to save related object because we set the relation to null
                        $commonExecPieceDossierpaiement->save($con);
                    }
                    $this->commonExecPieceDossierpaiementsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPieceDossierpaiements !== null) {
                foreach ($this->collCommonExecPieceDossierpaiements as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->commonExecPrixsRelatedByIdAgentCreaScheduledForDeletion !== null) {
                if (!$this->commonExecPrixsRelatedByIdAgentCreaScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPrixsRelatedByIdAgentCreaScheduledForDeletion as $commonExecPrixRelatedByIdAgentCrea) {
                        // need to save related object because we set the relation to null
                        $commonExecPrixRelatedByIdAgentCrea->save($con);
                    }
                    $this->commonExecPrixsRelatedByIdAgentCreaScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPrixsRelatedByIdAgentCrea !== null) {
                foreach ($this->collCommonExecPrixsRelatedByIdAgentCrea as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecPrixsRelatedByIdAgentModifScheduledForDeletion !== null) {
                if (!$this->commonExecPrixsRelatedByIdAgentModifScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPrixsRelatedByIdAgentModifScheduledForDeletion as $commonExecPrixRelatedByIdAgentModif) {
                        // need to save related object because we set the relation to null
                        $commonExecPrixRelatedByIdAgentModif->save($con);
                    }
                    $this->commonExecPrixsRelatedByIdAgentModifScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPrixsRelatedByIdAgentModif !== null) {
                foreach ($this->collCommonExecPrixsRelatedByIdAgentModif as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecRepartitionsRelatedByIdAgentCreaScheduledForDeletion !== null) {
                if (!$this->commonExecRepartitionsRelatedByIdAgentCreaScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecRepartitionsRelatedByIdAgentCreaScheduledForDeletion as $commonExecRepartitionRelatedByIdAgentCrea) {
                        // need to save related object because we set the relation to null
                        $commonExecRepartitionRelatedByIdAgentCrea->save($con);
                    }
                    $this->commonExecRepartitionsRelatedByIdAgentCreaScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecRepartitionsRelatedByIdAgentCrea !== null) {
                foreach ($this->collCommonExecRepartitionsRelatedByIdAgentCrea as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecRepartitionsRelatedByIdAgentModifScheduledForDeletion !== null) {
                if (!$this->commonExecRepartitionsRelatedByIdAgentModifScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecRepartitionsRelatedByIdAgentModifScheduledForDeletion as $commonExecRepartitionRelatedByIdAgentModif) {
                        // need to save related object because we set the relation to null
                        $commonExecRepartitionRelatedByIdAgentModif->save($con);
                    }
                    $this->commonExecRepartitionsRelatedByIdAgentModifScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecRepartitionsRelatedByIdAgentModif !== null) {
                foreach ($this->collCommonExecRepartitionsRelatedByIdAgentModif as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonResultatAnalyseHistoriquesScheduledForDeletion !== null) {
                if (!$this->commonResultatAnalyseHistoriquesScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonResultatAnalyseHistoriqueQuery::create()
                        ->filterByPrimaryKeys($this->commonResultatAnalyseHistoriquesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonResultatAnalyseHistoriquesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonResultatAnalyseHistoriques !== null) {
                foreach ($this->collCommonResultatAnalyseHistoriques as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCAOCommissionAgentsScheduledForDeletion !== null) {
                if (!$this->commonTCAOCommissionAgentsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOCommissionAgentsScheduledForDeletion as $commonTCAOCommissionAgent) {
                        // need to save related object because we set the relation to null
                        $commonTCAOCommissionAgent->save($con);
                    }
                    $this->commonTCAOCommissionAgentsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOCommissionAgents !== null) {
                foreach ($this->collCommonTCAOCommissionAgents as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCAOSeanceAgentsScheduledForDeletion !== null) {
                if (!$this->commonTCAOSeanceAgentsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOSeanceAgentsScheduledForDeletion as $commonTCAOSeanceAgent) {
                        // need to save related object because we set the relation to null
                        $commonTCAOSeanceAgent->save($con);
                    }
                    $this->commonTCAOSeanceAgentsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOSeanceAgents !== null) {
                foreach ($this->collCommonTCAOSeanceAgents as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCAOSeanceInvitesScheduledForDeletion !== null) {
                if (!$this->commonTCAOSeanceInvitesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOSeanceInvitesScheduledForDeletion as $commonTCAOSeanceInvite) {
                        // need to save related object because we set the relation to null
                        $commonTCAOSeanceInvite->save($con);
                    }
                    $this->commonTCAOSeanceInvitesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOSeanceInvites !== null) {
                foreach ($this->collCommonTCAOSeanceInvites as $referrerFK) {
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

        $this->modifiedColumns[] = CommonAgentPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAgentPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAgentPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonAgentPeer::LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`login`';
        }
        if ($this->isColumnModified(CommonAgentPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonAgentPeer::MDP)) {
            $modifiedColumns[':p' . $index++]  = '`mdp`';
        }
        if ($this->isColumnModified(CommonAgentPeer::CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`certificat`';
        }
        if ($this->isColumnModified(CommonAgentPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonAgentPeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonAgentPeer::TENTATIVES_MDP)) {
            $modifiedColumns[':p' . $index++]  = '`tentatives_mdp`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonAgentPeer::SERVICE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`service_id`';
        }
        if ($this->isColumnModified(CommonAgentPeer::RECEVOIR_MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`RECEVOIR_MAIL`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ELU)) {
            $modifiedColumns[':p' . $index++]  = '`elu`';
        }
        if ($this->isColumnModified(CommonAgentPeer::NOM_FONCTION)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fonction`';
        }
        if ($this->isColumnModified(CommonAgentPeer::NUM_TEL)) {
            $modifiedColumns[':p' . $index++]  = '`num_tel`';
        }
        if ($this->isColumnModified(CommonAgentPeer::NUM_FAX)) {
            $modifiedColumns[':p' . $index++]  = '`num_fax`';
        }
        if ($this->isColumnModified(CommonAgentPeer::TYPE_COMM)) {
            $modifiedColumns[':p' . $index++]  = '`type_comm`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ADR_POSTALE)) {
            $modifiedColumns[':p' . $index++]  = '`adr_postale`';
        }
        if ($this->isColumnModified(CommonAgentPeer::CIVILITE)) {
            $modifiedColumns[':p' . $index++]  = '`civilite`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_reponse_electronique`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_reception_mainlevee`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_cloture_consultation`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_RECEPTION_MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_reception_message`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_PUBLICATION_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_publication_boamp`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_echec_publication_boamp`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_creation_modification_agent`';
        }
        if ($this->isColumnModified(CommonAgentPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonAgentPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ID_INITIAL)) {
            $modifiedColumns[':p' . $index++]  = '`id_initial`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`id_profil_socle_externe`';
        }
        if ($this->isColumnModified(CommonAgentPeer::LIEU_EXECUTION)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_execution`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_question_entreprise`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }
        if ($this->isColumnModified(CommonAgentPeer::CODES_NUTS)) {
            $modifiedColumns[':p' . $index++]  = '`codes_nuts`';
        }
        if ($this->isColumnModified(CommonAgentPeer::NUM_CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`num_certificat`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_validation_consultation`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CHORUS)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_chorus`';
        }
        if ($this->isColumnModified(CommonAgentPeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`password`';
        }
        if ($this->isColumnModified(CommonAgentPeer::CODE_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`code_theme`';
        }

        $sql = sprintf(
            'INSERT INTO `Agent` (%s) VALUES (%s)',
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
                    case '`login`':						
                        $stmt->bindValue($identifier, $this->login, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`mdp`':						
                        $stmt->bindValue($identifier, $this->mdp, PDO::PARAM_STR);
                        break;
                    case '`certificat`':						
                        $stmt->bindValue($identifier, $this->certificat, PDO::PARAM_STR);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`tentatives_mdp`':						
                        $stmt->bindValue($identifier, $this->tentatives_mdp, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`service_id`':						
                        $stmt->bindValue($identifier, $this->service_id, PDO::PARAM_INT);
                        break;
                    case '`RECEVOIR_MAIL`':						
                        $stmt->bindValue($identifier, $this->recevoir_mail, PDO::PARAM_STR);
                        break;
                    case '`elu`':						
                        $stmt->bindValue($identifier, $this->elu, PDO::PARAM_STR);
                        break;
                    case '`nom_fonction`':						
                        $stmt->bindValue($identifier, $this->nom_fonction, PDO::PARAM_STR);
                        break;
                    case '`num_tel`':						
                        $stmt->bindValue($identifier, $this->num_tel, PDO::PARAM_STR);
                        break;
                    case '`num_fax`':						
                        $stmt->bindValue($identifier, $this->num_fax, PDO::PARAM_STR);
                        break;
                    case '`type_comm`':						
                        $stmt->bindValue($identifier, $this->type_comm, PDO::PARAM_STR);
                        break;
                    case '`adr_postale`':						
                        $stmt->bindValue($identifier, $this->adr_postale, PDO::PARAM_STR);
                        break;
                    case '`civilite`':						
                        $stmt->bindValue($identifier, $this->civilite, PDO::PARAM_STR);
                        break;
                    case '`alerte_reponse_electronique`':						
                        $stmt->bindValue($identifier, $this->alerte_reponse_electronique, PDO::PARAM_STR);
                        break;
                    case '`alerte_reception_mainlevee`':						
                        $stmt->bindValue($identifier, $this->alerte_reception_mainlevee, PDO::PARAM_STR);
                        break;
                    case '`alerte_cloture_consultation`':						
                        $stmt->bindValue($identifier, $this->alerte_cloture_consultation, PDO::PARAM_STR);
                        break;
                    case '`alerte_reception_message`':						
                        $stmt->bindValue($identifier, $this->alerte_reception_message, PDO::PARAM_STR);
                        break;
                    case '`alerte_publication_boamp`':						
                        $stmt->bindValue($identifier, $this->alerte_publication_boamp, PDO::PARAM_STR);
                        break;
                    case '`alerte_echec_publication_boamp`':						
                        $stmt->bindValue($identifier, $this->alerte_echec_publication_boamp, PDO::PARAM_STR);
                        break;
                    case '`alerte_creation_modification_agent`':						
                        $stmt->bindValue($identifier, $this->alerte_creation_modification_agent, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`id_initial`':						
                        $stmt->bindValue($identifier, $this->id_initial, PDO::PARAM_INT);
                        break;
                    case '`id_profil_socle_externe`':						
                        $stmt->bindValue($identifier, $this->id_profil_socle_externe, PDO::PARAM_INT);
                        break;
                    case '`lieu_execution`':						
                        $stmt->bindValue($identifier, $this->lieu_execution, PDO::PARAM_STR);
                        break;
                    case '`alerte_question_entreprise`':						
                        $stmt->bindValue($identifier, $this->alerte_question_entreprise, PDO::PARAM_STR);
                        break;
                    case '`actif`':						
                        $stmt->bindValue($identifier, $this->actif, PDO::PARAM_STR);
                        break;
                    case '`codes_nuts`':						
                        $stmt->bindValue($identifier, $this->codes_nuts, PDO::PARAM_STR);
                        break;
                    case '`num_certificat`':						
                        $stmt->bindValue($identifier, $this->num_certificat, PDO::PARAM_STR);
                        break;
                    case '`alerte_validation_consultation`':						
                        $stmt->bindValue($identifier, $this->alerte_validation_consultation, PDO::PARAM_STR);
                        break;
                    case '`alerte_chorus`':						
                        $stmt->bindValue($identifier, $this->alerte_chorus, PDO::PARAM_STR);
                        break;
                    case '`password`':						
                        $stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case '`code_theme`':						
                        $stmt->bindValue($identifier, $this->code_theme, PDO::PARAM_STR);
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

            if ($this->aCommonOrganisme !== null) {
                if (!$this->aCommonOrganisme->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonOrganisme->getValidationFailures());
                }
            }


            if (($retval = CommonAgentPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonDemandeAchatParCatalogues !== null) {
                    foreach ($this->collCommonDemandeAchatParCatalogues as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecAgentContrats !== null) {
                    foreach ($this->collCommonExecAgentContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecAvenantsRelatedByIdAgentCrea !== null) {
                    foreach ($this->collCommonExecAvenantsRelatedByIdAgentCrea as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecAvenantsRelatedByIdAgentModif !== null) {
                    foreach ($this->collCommonExecAvenantsRelatedByIdAgentModif as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecAvenantsRelatedByIdAgentRejet !== null) {
                    foreach ($this->collCommonExecAvenantsRelatedByIdAgentRejet as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecAvenantsRelatedByIdAgentValidation !== null) {
                    foreach ($this->collCommonExecAvenantsRelatedByIdAgentValidation as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecContractantsRelatedByIdAgentCrea !== null) {
                    foreach ($this->collCommonExecContractantsRelatedByIdAgentCrea as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecContractantsRelatedByIdAgentModif !== null) {
                    foreach ($this->collCommonExecContractantsRelatedByIdAgentModif as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecContratsRelatedByIdAgentCrea !== null) {
                    foreach ($this->collCommonExecContratsRelatedByIdAgentCrea as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecContratsRelatedByIdAgentGestion !== null) {
                    foreach ($this->collCommonExecContratsRelatedByIdAgentGestion as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecContratsRelatedByIdAgentModif !== null) {
                    foreach ($this->collCommonExecContratsRelatedByIdAgentModif as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecDossierPaiements !== null) {
                    foreach ($this->collCommonExecDossierPaiements as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecEvenementsRelatedByIdAgentCrea !== null) {
                    foreach ($this->collCommonExecEvenementsRelatedByIdAgentCrea as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecEvenementsRelatedByIdAgentModif !== null) {
                    foreach ($this->collCommonExecEvenementsRelatedByIdAgentModif as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecEvenementsRelatedByIdAgentRejet !== null) {
                    foreach ($this->collCommonExecEvenementsRelatedByIdAgentRejet as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecEvenementsRelatedByIdAgentValidation !== null) {
                    foreach ($this->collCommonExecEvenementsRelatedByIdAgentValidation as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecFacturesRelatedByIdAgentCrea !== null) {
                    foreach ($this->collCommonExecFacturesRelatedByIdAgentCrea as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecFacturesRelatedByIdAgentModif !== null) {
                    foreach ($this->collCommonExecFacturesRelatedByIdAgentModif as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecFacturesRelatedByIdAgentRejet !== null) {
                    foreach ($this->collCommonExecFacturesRelatedByIdAgentRejet as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecFacturesRelatedByIdAgentValidation !== null) {
                    foreach ($this->collCommonExecFacturesRelatedByIdAgentValidation as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea !== null) {
                    foreach ($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif !== null) {
                    foreach ($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecLivrableContrats !== null) {
                    foreach ($this->collCommonExecLivrableContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecPhasesRelatedByIdAgentCrea !== null) {
                    foreach ($this->collCommonExecPhasesRelatedByIdAgentCrea as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecPhasesRelatedByIdAgentModif !== null) {
                    foreach ($this->collCommonExecPhasesRelatedByIdAgentModif as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecPieces !== null) {
                    foreach ($this->collCommonExecPieces as $referrerFK) {
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

                if ($this->collCommonExecPieceContrats !== null) {
                    foreach ($this->collCommonExecPieceContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecPieceDossierpaiements !== null) {
                    foreach ($this->collCommonExecPieceDossierpaiements as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecPieceEvenements !== null) {
                    foreach ($this->collCommonExecPieceEvenements as $referrerFK) {
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

                if ($this->collCommonExecPrixsRelatedByIdAgentCrea !== null) {
                    foreach ($this->collCommonExecPrixsRelatedByIdAgentCrea as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecPrixsRelatedByIdAgentModif !== null) {
                    foreach ($this->collCommonExecPrixsRelatedByIdAgentModif as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecRepartitionsRelatedByIdAgentCrea !== null) {
                    foreach ($this->collCommonExecRepartitionsRelatedByIdAgentCrea as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecRepartitionsRelatedByIdAgentModif !== null) {
                    foreach ($this->collCommonExecRepartitionsRelatedByIdAgentModif as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonResultatAnalyseHistoriques !== null) {
                    foreach ($this->collCommonResultatAnalyseHistoriques as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCAOCommissionAgents !== null) {
                    foreach ($this->collCommonTCAOCommissionAgents as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCAOSeanceAgents !== null) {
                    foreach ($this->collCommonTCAOSeanceAgents as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCAOSeanceInvites !== null) {
                    foreach ($this->collCommonTCAOSeanceInvites as $referrerFK) {
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
        $pos = CommonAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLogin();
                break;
            case 2:
                return $this->getEmail();
                break;
            case 3:
                return $this->getMdp();
                break;
            case 4:
                return $this->getCertificat();
                break;
            case 5:
                return $this->getNom();
                break;
            case 6:
                return $this->getPrenom();
                break;
            case 7:
                return $this->getTentativesMdp();
                break;
            case 8:
                return $this->getOrganisme();
                break;
            case 9:
                return $this->getServiceId();
                break;
            case 10:
                return $this->getRecevoirMail();
                break;
            case 11:
                return $this->getElu();
                break;
            case 12:
                return $this->getNomFonction();
                break;
            case 13:
                return $this->getNumTel();
                break;
            case 14:
                return $this->getNumFax();
                break;
            case 15:
                return $this->getTypeComm();
                break;
            case 16:
                return $this->getAdrPostale();
                break;
            case 17:
                return $this->getCivilite();
                break;
            case 18:
                return $this->getAlerteReponseElectronique();
                break;
            case 19:
                return $this->getAlerteReceptionMainlevee();
                break;
            case 20:
                return $this->getAlerteClotureConsultation();
                break;
            case 21:
                return $this->getAlerteReceptionMessage();
                break;
            case 22:
                return $this->getAlertePublicationBoamp();
                break;
            case 23:
                return $this->getAlerteEchecPublicationBoamp();
                break;
            case 24:
                return $this->getAlerteCreationModificationAgent();
                break;
            case 25:
                return $this->getDateCreation();
                break;
            case 26:
                return $this->getDateModification();
                break;
            case 27:
                return $this->getIdInitial();
                break;
            case 28:
                return $this->getIdProfilSocleExterne();
                break;
            case 29:
                return $this->getLieuExecution();
                break;
            case 30:
                return $this->getAlerteQuestionEntreprise();
                break;
            case 31:
                return $this->getActif();
                break;
            case 32:
                return $this->getCodesNuts();
                break;
            case 33:
                return $this->getNumCertificat();
                break;
            case 34:
                return $this->getAlerteValidationConsultation();
                break;
            case 35:
                return $this->getAlerteChorus();
                break;
            case 36:
                return $this->getPassword();
                break;
            case 37:
                return $this->getCodeTheme();
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
        if (isset($alreadyDumpedObjects['CommonAgent'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAgent'][$this->getPrimaryKey()] = true;
        $keys = CommonAgentPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getLogin(),
            $keys[2] => $this->getEmail(),
            $keys[3] => $this->getMdp(),
            $keys[4] => $this->getCertificat(),
            $keys[5] => $this->getNom(),
            $keys[6] => $this->getPrenom(),
            $keys[7] => $this->getTentativesMdp(),
            $keys[8] => $this->getOrganisme(),
            $keys[9] => $this->getServiceId(),
            $keys[10] => $this->getRecevoirMail(),
            $keys[11] => $this->getElu(),
            $keys[12] => $this->getNomFonction(),
            $keys[13] => $this->getNumTel(),
            $keys[14] => $this->getNumFax(),
            $keys[15] => $this->getTypeComm(),
            $keys[16] => $this->getAdrPostale(),
            $keys[17] => $this->getCivilite(),
            $keys[18] => $this->getAlerteReponseElectronique(),
            $keys[19] => $this->getAlerteReceptionMainlevee(),
            $keys[20] => $this->getAlerteClotureConsultation(),
            $keys[21] => $this->getAlerteReceptionMessage(),
            $keys[22] => $this->getAlertePublicationBoamp(),
            $keys[23] => $this->getAlerteEchecPublicationBoamp(),
            $keys[24] => $this->getAlerteCreationModificationAgent(),
            $keys[25] => $this->getDateCreation(),
            $keys[26] => $this->getDateModification(),
            $keys[27] => $this->getIdInitial(),
            $keys[28] => $this->getIdProfilSocleExterne(),
            $keys[29] => $this->getLieuExecution(),
            $keys[30] => $this->getAlerteQuestionEntreprise(),
            $keys[31] => $this->getActif(),
            $keys[32] => $this->getCodesNuts(),
            $keys[33] => $this->getNumCertificat(),
            $keys[34] => $this->getAlerteValidationConsultation(),
            $keys[35] => $this->getAlerteChorus(),
            $keys[36] => $this->getPassword(),
            $keys[37] => $this->getCodeTheme(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonOrganisme) {
                $result['CommonOrganisme'] = $this->aCommonOrganisme->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonDemandeAchatParCatalogues) {
                $result['CommonDemandeAchatParCatalogues'] = $this->collCommonDemandeAchatParCatalogues->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecAgentContrats) {
                $result['CommonExecAgentContrats'] = $this->collCommonExecAgentContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecAvenantsRelatedByIdAgentCrea) {
                $result['CommonExecAvenantsRelatedByIdAgentCrea'] = $this->collCommonExecAvenantsRelatedByIdAgentCrea->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecAvenantsRelatedByIdAgentModif) {
                $result['CommonExecAvenantsRelatedByIdAgentModif'] = $this->collCommonExecAvenantsRelatedByIdAgentModif->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecAvenantsRelatedByIdAgentRejet) {
                $result['CommonExecAvenantsRelatedByIdAgentRejet'] = $this->collCommonExecAvenantsRelatedByIdAgentRejet->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecAvenantsRelatedByIdAgentValidation) {
                $result['CommonExecAvenantsRelatedByIdAgentValidation'] = $this->collCommonExecAvenantsRelatedByIdAgentValidation->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecContractantsRelatedByIdAgentCrea) {
                $result['CommonExecContractantsRelatedByIdAgentCrea'] = $this->collCommonExecContractantsRelatedByIdAgentCrea->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecContractantsRelatedByIdAgentModif) {
                $result['CommonExecContractantsRelatedByIdAgentModif'] = $this->collCommonExecContractantsRelatedByIdAgentModif->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecContratsRelatedByIdAgentCrea) {
                $result['CommonExecContratsRelatedByIdAgentCrea'] = $this->collCommonExecContratsRelatedByIdAgentCrea->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecContratsRelatedByIdAgentGestion) {
                $result['CommonExecContratsRelatedByIdAgentGestion'] = $this->collCommonExecContratsRelatedByIdAgentGestion->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecContratsRelatedByIdAgentModif) {
                $result['CommonExecContratsRelatedByIdAgentModif'] = $this->collCommonExecContratsRelatedByIdAgentModif->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecDossierPaiements) {
                $result['CommonExecDossierPaiements'] = $this->collCommonExecDossierPaiements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecEvenementsRelatedByIdAgentCrea) {
                $result['CommonExecEvenementsRelatedByIdAgentCrea'] = $this->collCommonExecEvenementsRelatedByIdAgentCrea->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecEvenementsRelatedByIdAgentModif) {
                $result['CommonExecEvenementsRelatedByIdAgentModif'] = $this->collCommonExecEvenementsRelatedByIdAgentModif->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecEvenementsRelatedByIdAgentRejet) {
                $result['CommonExecEvenementsRelatedByIdAgentRejet'] = $this->collCommonExecEvenementsRelatedByIdAgentRejet->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecEvenementsRelatedByIdAgentValidation) {
                $result['CommonExecEvenementsRelatedByIdAgentValidation'] = $this->collCommonExecEvenementsRelatedByIdAgentValidation->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecFacturesRelatedByIdAgentCrea) {
                $result['CommonExecFacturesRelatedByIdAgentCrea'] = $this->collCommonExecFacturesRelatedByIdAgentCrea->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecFacturesRelatedByIdAgentModif) {
                $result['CommonExecFacturesRelatedByIdAgentModif'] = $this->collCommonExecFacturesRelatedByIdAgentModif->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecFacturesRelatedByIdAgentRejet) {
                $result['CommonExecFacturesRelatedByIdAgentRejet'] = $this->collCommonExecFacturesRelatedByIdAgentRejet->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecFacturesRelatedByIdAgentValidation) {
                $result['CommonExecFacturesRelatedByIdAgentValidation'] = $this->collCommonExecFacturesRelatedByIdAgentValidation->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea) {
                $result['CommonExecHistoriquePrixsRelatedByIdAgentCrea'] = $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif) {
                $result['CommonExecHistoriquePrixsRelatedByIdAgentModif'] = $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecLivrableContrats) {
                $result['CommonExecLivrableContrats'] = $this->collCommonExecLivrableContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPhasesRelatedByIdAgentCrea) {
                $result['CommonExecPhasesRelatedByIdAgentCrea'] = $this->collCommonExecPhasesRelatedByIdAgentCrea->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPhasesRelatedByIdAgentModif) {
                $result['CommonExecPhasesRelatedByIdAgentModif'] = $this->collCommonExecPhasesRelatedByIdAgentModif->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPieces) {
                $result['CommonExecPieces'] = $this->collCommonExecPieces->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPieceAvenants) {
                $result['CommonExecPieceAvenants'] = $this->collCommonExecPieceAvenants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPieceContrats) {
                $result['CommonExecPieceContrats'] = $this->collCommonExecPieceContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPieceDossierpaiements) {
                $result['CommonExecPieceDossierpaiements'] = $this->collCommonExecPieceDossierpaiements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPieceEvenements) {
                $result['CommonExecPieceEvenements'] = $this->collCommonExecPieceEvenements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPieceFactures) {
                $result['CommonExecPieceFactures'] = $this->collCommonExecPieceFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPrixsRelatedByIdAgentCrea) {
                $result['CommonExecPrixsRelatedByIdAgentCrea'] = $this->collCommonExecPrixsRelatedByIdAgentCrea->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPrixsRelatedByIdAgentModif) {
                $result['CommonExecPrixsRelatedByIdAgentModif'] = $this->collCommonExecPrixsRelatedByIdAgentModif->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecRepartitionsRelatedByIdAgentCrea) {
                $result['CommonExecRepartitionsRelatedByIdAgentCrea'] = $this->collCommonExecRepartitionsRelatedByIdAgentCrea->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecRepartitionsRelatedByIdAgentModif) {
                $result['CommonExecRepartitionsRelatedByIdAgentModif'] = $this->collCommonExecRepartitionsRelatedByIdAgentModif->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonResultatAnalyseHistoriques) {
                $result['CommonResultatAnalyseHistoriques'] = $this->collCommonResultatAnalyseHistoriques->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCAOCommissionAgents) {
                $result['CommonTCAOCommissionAgents'] = $this->collCommonTCAOCommissionAgents->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCAOSeanceAgents) {
                $result['CommonTCAOSeanceAgents'] = $this->collCommonTCAOSeanceAgents->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCAOSeanceInvites) {
                $result['CommonTCAOSeanceInvites'] = $this->collCommonTCAOSeanceInvites->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLogin($value);
                break;
            case 2:
                $this->setEmail($value);
                break;
            case 3:
                $this->setMdp($value);
                break;
            case 4:
                $this->setCertificat($value);
                break;
            case 5:
                $this->setNom($value);
                break;
            case 6:
                $this->setPrenom($value);
                break;
            case 7:
                $this->setTentativesMdp($value);
                break;
            case 8:
                $this->setOrganisme($value);
                break;
            case 9:
                $this->setServiceId($value);
                break;
            case 10:
                $this->setRecevoirMail($value);
                break;
            case 11:
                $this->setElu($value);
                break;
            case 12:
                $this->setNomFonction($value);
                break;
            case 13:
                $this->setNumTel($value);
                break;
            case 14:
                $this->setNumFax($value);
                break;
            case 15:
                $this->setTypeComm($value);
                break;
            case 16:
                $this->setAdrPostale($value);
                break;
            case 17:
                $this->setCivilite($value);
                break;
            case 18:
                $this->setAlerteReponseElectronique($value);
                break;
            case 19:
                $this->setAlerteReceptionMainlevee($value);
                break;
            case 20:
                $this->setAlerteClotureConsultation($value);
                break;
            case 21:
                $this->setAlerteReceptionMessage($value);
                break;
            case 22:
                $this->setAlertePublicationBoamp($value);
                break;
            case 23:
                $this->setAlerteEchecPublicationBoamp($value);
                break;
            case 24:
                $this->setAlerteCreationModificationAgent($value);
                break;
            case 25:
                $this->setDateCreation($value);
                break;
            case 26:
                $this->setDateModification($value);
                break;
            case 27:
                $this->setIdInitial($value);
                break;
            case 28:
                $this->setIdProfilSocleExterne($value);
                break;
            case 29:
                $this->setLieuExecution($value);
                break;
            case 30:
                $this->setAlerteQuestionEntreprise($value);
                break;
            case 31:
                $this->setActif($value);
                break;
            case 32:
                $this->setCodesNuts($value);
                break;
            case 33:
                $this->setNumCertificat($value);
                break;
            case 34:
                $this->setAlerteValidationConsultation($value);
                break;
            case 35:
                $this->setAlerteChorus($value);
                break;
            case 36:
                $this->setPassword($value);
                break;
            case 37:
                $this->setCodeTheme($value);
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
        $keys = CommonAgentPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLogin($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmail($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMdp($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCertificat($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNom($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrenom($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTentativesMdp($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOrganisme($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setServiceId($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setRecevoirMail($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setElu($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNomFonction($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setNumTel($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNumFax($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTypeComm($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAdrPostale($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCivilite($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAlerteReponseElectronique($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAlerteReceptionMainlevee($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAlerteClotureConsultation($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAlerteReceptionMessage($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAlertePublicationBoamp($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setAlerteEchecPublicationBoamp($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAlerteCreationModificationAgent($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDateCreation($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDateModification($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setIdInitial($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setIdProfilSocleExterne($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setLieuExecution($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAlerteQuestionEntreprise($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setActif($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setCodesNuts($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setNumCertificat($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAlerteValidationConsultation($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setAlerteChorus($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setPassword($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setCodeTheme($arr[$keys[37]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAgentPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAgentPeer::ID)) $criteria->add(CommonAgentPeer::ID, $this->id);
        if ($this->isColumnModified(CommonAgentPeer::LOGIN)) $criteria->add(CommonAgentPeer::LOGIN, $this->login);
        if ($this->isColumnModified(CommonAgentPeer::EMAIL)) $criteria->add(CommonAgentPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonAgentPeer::MDP)) $criteria->add(CommonAgentPeer::MDP, $this->mdp);
        if ($this->isColumnModified(CommonAgentPeer::CERTIFICAT)) $criteria->add(CommonAgentPeer::CERTIFICAT, $this->certificat);
        if ($this->isColumnModified(CommonAgentPeer::NOM)) $criteria->add(CommonAgentPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonAgentPeer::PRENOM)) $criteria->add(CommonAgentPeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonAgentPeer::TENTATIVES_MDP)) $criteria->add(CommonAgentPeer::TENTATIVES_MDP, $this->tentatives_mdp);
        if ($this->isColumnModified(CommonAgentPeer::ORGANISME)) $criteria->add(CommonAgentPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonAgentPeer::SERVICE_ID)) $criteria->add(CommonAgentPeer::SERVICE_ID, $this->service_id);
        if ($this->isColumnModified(CommonAgentPeer::RECEVOIR_MAIL)) $criteria->add(CommonAgentPeer::RECEVOIR_MAIL, $this->recevoir_mail);
        if ($this->isColumnModified(CommonAgentPeer::ELU)) $criteria->add(CommonAgentPeer::ELU, $this->elu);
        if ($this->isColumnModified(CommonAgentPeer::NOM_FONCTION)) $criteria->add(CommonAgentPeer::NOM_FONCTION, $this->nom_fonction);
        if ($this->isColumnModified(CommonAgentPeer::NUM_TEL)) $criteria->add(CommonAgentPeer::NUM_TEL, $this->num_tel);
        if ($this->isColumnModified(CommonAgentPeer::NUM_FAX)) $criteria->add(CommonAgentPeer::NUM_FAX, $this->num_fax);
        if ($this->isColumnModified(CommonAgentPeer::TYPE_COMM)) $criteria->add(CommonAgentPeer::TYPE_COMM, $this->type_comm);
        if ($this->isColumnModified(CommonAgentPeer::ADR_POSTALE)) $criteria->add(CommonAgentPeer::ADR_POSTALE, $this->adr_postale);
        if ($this->isColumnModified(CommonAgentPeer::CIVILITE)) $criteria->add(CommonAgentPeer::CIVILITE, $this->civilite);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE)) $criteria->add(CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE, $this->alerte_reponse_electronique);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE)) $criteria->add(CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE, $this->alerte_reception_mainlevee);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION)) $criteria->add(CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION, $this->alerte_cloture_consultation);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_RECEPTION_MESSAGE)) $criteria->add(CommonAgentPeer::ALERTE_RECEPTION_MESSAGE, $this->alerte_reception_message);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_PUBLICATION_BOAMP)) $criteria->add(CommonAgentPeer::ALERTE_PUBLICATION_BOAMP, $this->alerte_publication_boamp);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP)) $criteria->add(CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP, $this->alerte_echec_publication_boamp);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT)) $criteria->add(CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT, $this->alerte_creation_modification_agent);
        if ($this->isColumnModified(CommonAgentPeer::DATE_CREATION)) $criteria->add(CommonAgentPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonAgentPeer::DATE_MODIFICATION)) $criteria->add(CommonAgentPeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonAgentPeer::ID_INITIAL)) $criteria->add(CommonAgentPeer::ID_INITIAL, $this->id_initial);
        if ($this->isColumnModified(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE)) $criteria->add(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE, $this->id_profil_socle_externe);
        if ($this->isColumnModified(CommonAgentPeer::LIEU_EXECUTION)) $criteria->add(CommonAgentPeer::LIEU_EXECUTION, $this->lieu_execution);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE)) $criteria->add(CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE, $this->alerte_question_entreprise);
        if ($this->isColumnModified(CommonAgentPeer::ACTIF)) $criteria->add(CommonAgentPeer::ACTIF, $this->actif);
        if ($this->isColumnModified(CommonAgentPeer::CODES_NUTS)) $criteria->add(CommonAgentPeer::CODES_NUTS, $this->codes_nuts);
        if ($this->isColumnModified(CommonAgentPeer::NUM_CERTIFICAT)) $criteria->add(CommonAgentPeer::NUM_CERTIFICAT, $this->num_certificat);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION)) $criteria->add(CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION, $this->alerte_validation_consultation);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CHORUS)) $criteria->add(CommonAgentPeer::ALERTE_CHORUS, $this->alerte_chorus);
        if ($this->isColumnModified(CommonAgentPeer::PASSWORD)) $criteria->add(CommonAgentPeer::PASSWORD, $this->password);
        if ($this->isColumnModified(CommonAgentPeer::CODE_THEME)) $criteria->add(CommonAgentPeer::CODE_THEME, $this->code_theme);

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
        $criteria = new Criteria(CommonAgentPeer::DATABASE_NAME);
        $criteria->add(CommonAgentPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonAgent (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLogin($this->getLogin());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setMdp($this->getMdp());
        $copyObj->setCertificat($this->getCertificat());
        $copyObj->setNom($this->getNom());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setTentativesMdp($this->getTentativesMdp());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setServiceId($this->getServiceId());
        $copyObj->setRecevoirMail($this->getRecevoirMail());
        $copyObj->setElu($this->getElu());
        $copyObj->setNomFonction($this->getNomFonction());
        $copyObj->setNumTel($this->getNumTel());
        $copyObj->setNumFax($this->getNumFax());
        $copyObj->setTypeComm($this->getTypeComm());
        $copyObj->setAdrPostale($this->getAdrPostale());
        $copyObj->setCivilite($this->getCivilite());
        $copyObj->setAlerteReponseElectronique($this->getAlerteReponseElectronique());
        $copyObj->setAlerteReceptionMainlevee($this->getAlerteReceptionMainlevee());
        $copyObj->setAlerteClotureConsultation($this->getAlerteClotureConsultation());
        $copyObj->setAlerteReceptionMessage($this->getAlerteReceptionMessage());
        $copyObj->setAlertePublicationBoamp($this->getAlertePublicationBoamp());
        $copyObj->setAlerteEchecPublicationBoamp($this->getAlerteEchecPublicationBoamp());
        $copyObj->setAlerteCreationModificationAgent($this->getAlerteCreationModificationAgent());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setIdInitial($this->getIdInitial());
        $copyObj->setIdProfilSocleExterne($this->getIdProfilSocleExterne());
        $copyObj->setLieuExecution($this->getLieuExecution());
        $copyObj->setAlerteQuestionEntreprise($this->getAlerteQuestionEntreprise());
        $copyObj->setActif($this->getActif());
        $copyObj->setCodesNuts($this->getCodesNuts());
        $copyObj->setNumCertificat($this->getNumCertificat());
        $copyObj->setAlerteValidationConsultation($this->getAlerteValidationConsultation());
        $copyObj->setAlerteChorus($this->getAlerteChorus());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setCodeTheme($this->getCodeTheme());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonDemandeAchatParCatalogues() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonDemandeAchatParCatalogue($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecAgentContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecAgentContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecAvenantsRelatedByIdAgentCrea() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecAvenantRelatedByIdAgentCrea($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecAvenantsRelatedByIdAgentModif() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecAvenantRelatedByIdAgentModif($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecAvenantsRelatedByIdAgentRejet() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecAvenantRelatedByIdAgentRejet($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecAvenantsRelatedByIdAgentValidation() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecAvenantRelatedByIdAgentValidation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecContractantsRelatedByIdAgentCrea() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContractantRelatedByIdAgentCrea($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecContractantsRelatedByIdAgentModif() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContractantRelatedByIdAgentModif($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecContratsRelatedByIdAgentCrea() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContratRelatedByIdAgentCrea($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecContratsRelatedByIdAgentGestion() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContratRelatedByIdAgentGestion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecContratsRelatedByIdAgentModif() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContratRelatedByIdAgentModif($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecDossierPaiements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecDossierPaiement($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecEvenementsRelatedByIdAgentCrea() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecEvenementRelatedByIdAgentCrea($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecEvenementsRelatedByIdAgentModif() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecEvenementRelatedByIdAgentModif($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecEvenementsRelatedByIdAgentRejet() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecEvenementRelatedByIdAgentRejet($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecEvenementsRelatedByIdAgentValidation() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecEvenementRelatedByIdAgentValidation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecFacturesRelatedByIdAgentCrea() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecFactureRelatedByIdAgentCrea($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecFacturesRelatedByIdAgentModif() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecFactureRelatedByIdAgentModif($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecFacturesRelatedByIdAgentRejet() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecFactureRelatedByIdAgentRejet($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecFacturesRelatedByIdAgentValidation() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecFactureRelatedByIdAgentValidation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecHistoriquePrixsRelatedByIdAgentCrea() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecHistoriquePrixRelatedByIdAgentCrea($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecHistoriquePrixsRelatedByIdAgentModif() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecHistoriquePrixRelatedByIdAgentModif($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecLivrableContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecLivrableContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPhasesRelatedByIdAgentCrea() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPhaseRelatedByIdAgentCrea($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPhasesRelatedByIdAgentModif() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPhaseRelatedByIdAgentModif($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPieces() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPiece($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPieceAvenants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPieceAvenant($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPieceContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPieceContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPieceDossierpaiements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPieceDossierpaiement($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPieceEvenements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPieceEvenement($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPieceFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPieceFacture($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPrixsRelatedByIdAgentCrea() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPrixRelatedByIdAgentCrea($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPrixsRelatedByIdAgentModif() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPrixRelatedByIdAgentModif($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecRepartitionsRelatedByIdAgentCrea() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecRepartitionRelatedByIdAgentCrea($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecRepartitionsRelatedByIdAgentModif() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecRepartitionRelatedByIdAgentModif($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonResultatAnalyseHistoriques() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonResultatAnalyseHistorique($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCAOCommissionAgents() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOCommissionAgent($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCAOSeanceAgents() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOSeanceAgent($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCAOSeanceInvites() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOSeanceInvite($relObj->copy($deepCopy));
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
     * @return CommonAgent Clone of current object.
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
     * @return CommonAgentPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAgentPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonOrganisme object.
     *
     * @param   CommonOrganisme $v
     * @return CommonAgent The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonOrganisme(CommonOrganisme $v = null)
    {
        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getAcronyme());
        }

        $this->aCommonOrganisme = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonOrganisme object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonAgent($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonOrganisme object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonOrganisme The associated CommonOrganisme object.
     * @throws PropelException
     */
    public function getCommonOrganisme(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonOrganisme === null && (($this->organisme !== "" && $this->organisme !== null)) && $doQuery) {
            $this->aCommonOrganisme = CommonOrganismeQuery::create()
                ->filterByCommonAgent($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonOrganisme->addCommonAgents($this);
             */
        }

        return $this->aCommonOrganisme;
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
        if ('CommonDemandeAchatParCatalogue' == $relationName) {
            $this->initCommonDemandeAchatParCatalogues();
        }
        if ('CommonExecAgentContrat' == $relationName) {
            $this->initCommonExecAgentContrats();
        }
        if ('CommonExecAvenantRelatedByIdAgentCrea' == $relationName) {
            $this->initCommonExecAvenantsRelatedByIdAgentCrea();
        }
        if ('CommonExecAvenantRelatedByIdAgentModif' == $relationName) {
            $this->initCommonExecAvenantsRelatedByIdAgentModif();
        }
        if ('CommonExecAvenantRelatedByIdAgentRejet' == $relationName) {
            $this->initCommonExecAvenantsRelatedByIdAgentRejet();
        }
        if ('CommonExecAvenantRelatedByIdAgentValidation' == $relationName) {
            $this->initCommonExecAvenantsRelatedByIdAgentValidation();
        }
        if ('CommonExecContractantRelatedByIdAgentCrea' == $relationName) {
            $this->initCommonExecContractantsRelatedByIdAgentCrea();
        }
        if ('CommonExecContractantRelatedByIdAgentModif' == $relationName) {
            $this->initCommonExecContractantsRelatedByIdAgentModif();
        }
        if ('CommonExecContratRelatedByIdAgentCrea' == $relationName) {
            $this->initCommonExecContratsRelatedByIdAgentCrea();
        }
        if ('CommonExecContratRelatedByIdAgentGestion' == $relationName) {
            $this->initCommonExecContratsRelatedByIdAgentGestion();
        }
        if ('CommonExecContratRelatedByIdAgentModif' == $relationName) {
            $this->initCommonExecContratsRelatedByIdAgentModif();
        }
        if ('CommonExecDossierPaiement' == $relationName) {
            $this->initCommonExecDossierPaiements();
        }
        if ('CommonExecEvenementRelatedByIdAgentCrea' == $relationName) {
            $this->initCommonExecEvenementsRelatedByIdAgentCrea();
        }
        if ('CommonExecEvenementRelatedByIdAgentModif' == $relationName) {
            $this->initCommonExecEvenementsRelatedByIdAgentModif();
        }
        if ('CommonExecEvenementRelatedByIdAgentRejet' == $relationName) {
            $this->initCommonExecEvenementsRelatedByIdAgentRejet();
        }
        if ('CommonExecEvenementRelatedByIdAgentValidation' == $relationName) {
            $this->initCommonExecEvenementsRelatedByIdAgentValidation();
        }
        if ('CommonExecFactureRelatedByIdAgentCrea' == $relationName) {
            $this->initCommonExecFacturesRelatedByIdAgentCrea();
        }
        if ('CommonExecFactureRelatedByIdAgentModif' == $relationName) {
            $this->initCommonExecFacturesRelatedByIdAgentModif();
        }
        if ('CommonExecFactureRelatedByIdAgentRejet' == $relationName) {
            $this->initCommonExecFacturesRelatedByIdAgentRejet();
        }
        if ('CommonExecFactureRelatedByIdAgentValidation' == $relationName) {
            $this->initCommonExecFacturesRelatedByIdAgentValidation();
        }
        if ('CommonExecHistoriquePrixRelatedByIdAgentCrea' == $relationName) {
            $this->initCommonExecHistoriquePrixsRelatedByIdAgentCrea();
        }
        if ('CommonExecHistoriquePrixRelatedByIdAgentModif' == $relationName) {
            $this->initCommonExecHistoriquePrixsRelatedByIdAgentModif();
        }
        if ('CommonExecLivrableContrat' == $relationName) {
            $this->initCommonExecLivrableContrats();
        }
        if ('CommonExecPhaseRelatedByIdAgentCrea' == $relationName) {
            $this->initCommonExecPhasesRelatedByIdAgentCrea();
        }
        if ('CommonExecPhaseRelatedByIdAgentModif' == $relationName) {
            $this->initCommonExecPhasesRelatedByIdAgentModif();
        }
        if ('CommonExecPiece' == $relationName) {
            $this->initCommonExecPieces();
        }
        if ('CommonExecPieceAvenant' == $relationName) {
            $this->initCommonExecPieceAvenants();
        }
        if ('CommonExecPieceContrat' == $relationName) {
            $this->initCommonExecPieceContrats();
        }
        if ('CommonExecPieceDossierpaiement' == $relationName) {
            $this->initCommonExecPieceDossierpaiements();
        }
        if ('CommonExecPieceEvenement' == $relationName) {
            $this->initCommonExecPieceEvenements();
        }
        if ('CommonExecPieceFacture' == $relationName) {
            $this->initCommonExecPieceFactures();
        }
        if ('CommonExecPrixRelatedByIdAgentCrea' == $relationName) {
            $this->initCommonExecPrixsRelatedByIdAgentCrea();
        }
        if ('CommonExecPrixRelatedByIdAgentModif' == $relationName) {
            $this->initCommonExecPrixsRelatedByIdAgentModif();
        }
        if ('CommonExecRepartitionRelatedByIdAgentCrea' == $relationName) {
            $this->initCommonExecRepartitionsRelatedByIdAgentCrea();
        }
        if ('CommonExecRepartitionRelatedByIdAgentModif' == $relationName) {
            $this->initCommonExecRepartitionsRelatedByIdAgentModif();
        }
        if ('CommonResultatAnalyseHistorique' == $relationName) {
            $this->initCommonResultatAnalyseHistoriques();
        }
        if ('CommonTCAOCommissionAgent' == $relationName) {
            $this->initCommonTCAOCommissionAgents();
        }
        if ('CommonTCAOSeanceAgent' == $relationName) {
            $this->initCommonTCAOSeanceAgents();
        }
        if ('CommonTCAOSeanceInvite' == $relationName) {
            $this->initCommonTCAOSeanceInvites();
        }
    }

    /**
     * Clears out the collCommonDemandeAchatParCatalogues collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonDemandeAchatParCatalogues()
     */
    public function clearCommonDemandeAchatParCatalogues()
    {
        $this->collCommonDemandeAchatParCatalogues = null; // important to set this to null since that means it is uninitialized
        $this->collCommonDemandeAchatParCataloguesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonDemandeAchatParCatalogues collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonDemandeAchatParCatalogues($v = true)
    {
        $this->collCommonDemandeAchatParCataloguesPartial = $v;
    }

    /**
     * Initializes the collCommonDemandeAchatParCatalogues collection.
     *
     * By default this just sets the collCommonDemandeAchatParCatalogues collection to an empty array (like clearcollCommonDemandeAchatParCatalogues());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonDemandeAchatParCatalogues($overrideExisting = true)
    {
        if (null !== $this->collCommonDemandeAchatParCatalogues && !$overrideExisting) {
            return;
        }
        $this->collCommonDemandeAchatParCatalogues = new PropelObjectCollection();
        $this->collCommonDemandeAchatParCatalogues->setModel('CommonDemandeAchatParCatalogue');
    }

    /**
     * Gets an array of CommonDemandeAchatParCatalogue objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonDemandeAchatParCatalogue[] List of CommonDemandeAchatParCatalogue objects
     * @throws PropelException
     */
    public function getCommonDemandeAchatParCatalogues($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonDemandeAchatParCataloguesPartial && !$this->isNew();
        if (null === $this->collCommonDemandeAchatParCatalogues || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonDemandeAchatParCatalogues) {
                // return empty collection
                $this->initCommonDemandeAchatParCatalogues();
            } else {
                $collCommonDemandeAchatParCatalogues = CommonDemandeAchatParCatalogueQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonDemandeAchatParCataloguesPartial && count($collCommonDemandeAchatParCatalogues)) {
                      $this->initCommonDemandeAchatParCatalogues(false);

                      foreach ($collCommonDemandeAchatParCatalogues as $obj) {
                        if (false == $this->collCommonDemandeAchatParCatalogues->contains($obj)) {
                          $this->collCommonDemandeAchatParCatalogues->append($obj);
                        }
                      }

                      $this->collCommonDemandeAchatParCataloguesPartial = true;
                    }

                    $collCommonDemandeAchatParCatalogues->getInternalIterator()->rewind();

                    return $collCommonDemandeAchatParCatalogues;
                }

                if ($partial && $this->collCommonDemandeAchatParCatalogues) {
                    foreach ($this->collCommonDemandeAchatParCatalogues as $obj) {
                        if ($obj->isNew()) {
                            $collCommonDemandeAchatParCatalogues[] = $obj;
                        }
                    }
                }

                $this->collCommonDemandeAchatParCatalogues = $collCommonDemandeAchatParCatalogues;
                $this->collCommonDemandeAchatParCataloguesPartial = false;
            }
        }

        return $this->collCommonDemandeAchatParCatalogues;
    }

    /**
     * Sets a collection of CommonDemandeAchatParCatalogue objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonDemandeAchatParCatalogues A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonDemandeAchatParCatalogues(PropelCollection $commonDemandeAchatParCatalogues, PropelPDO $con = null)
    {
        $commonDemandeAchatParCataloguesToDelete = $this->getCommonDemandeAchatParCatalogues(new Criteria(), $con)->diff($commonDemandeAchatParCatalogues);


        $this->commonDemandeAchatParCataloguesScheduledForDeletion = $commonDemandeAchatParCataloguesToDelete;

        foreach ($commonDemandeAchatParCataloguesToDelete as $commonDemandeAchatParCatalogueRemoved) {
            $commonDemandeAchatParCatalogueRemoved->setCommonAgent(null);
        }

        $this->collCommonDemandeAchatParCatalogues = null;
        foreach ($commonDemandeAchatParCatalogues as $commonDemandeAchatParCatalogue) {
            $this->addCommonDemandeAchatParCatalogue($commonDemandeAchatParCatalogue);
        }

        $this->collCommonDemandeAchatParCatalogues = $commonDemandeAchatParCatalogues;
        $this->collCommonDemandeAchatParCataloguesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonDemandeAchatParCatalogue objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonDemandeAchatParCatalogue objects.
     * @throws PropelException
     */
    public function countCommonDemandeAchatParCatalogues(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonDemandeAchatParCataloguesPartial && !$this->isNew();
        if (null === $this->collCommonDemandeAchatParCatalogues || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonDemandeAchatParCatalogues) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonDemandeAchatParCatalogues());
            }
            $query = CommonDemandeAchatParCatalogueQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonDemandeAchatParCatalogues);
    }

    /**
     * Method called to associate a CommonDemandeAchatParCatalogue object to this object
     * through the CommonDemandeAchatParCatalogue foreign key attribute.
     *
     * @param   CommonDemandeAchatParCatalogue $l CommonDemandeAchatParCatalogue
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonDemandeAchatParCatalogue(CommonDemandeAchatParCatalogue $l)
    {
        if ($this->collCommonDemandeAchatParCatalogues === null) {
            $this->initCommonDemandeAchatParCatalogues();
            $this->collCommonDemandeAchatParCataloguesPartial = true;
        }
        if (!in_array($l, $this->collCommonDemandeAchatParCatalogues->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonDemandeAchatParCatalogue($l);
        }

        return $this;
    }

    /**
     * @param	CommonDemandeAchatParCatalogue $commonDemandeAchatParCatalogue The commonDemandeAchatParCatalogue object to add.
     */
    protected function doAddCommonDemandeAchatParCatalogue($commonDemandeAchatParCatalogue)
    {
        $this->collCommonDemandeAchatParCatalogues[]= $commonDemandeAchatParCatalogue;
        $commonDemandeAchatParCatalogue->setCommonAgent($this);
    }

    /**
     * @param	CommonDemandeAchatParCatalogue $commonDemandeAchatParCatalogue The commonDemandeAchatParCatalogue object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonDemandeAchatParCatalogue($commonDemandeAchatParCatalogue)
    {
        if ($this->getCommonDemandeAchatParCatalogues()->contains($commonDemandeAchatParCatalogue)) {
            $this->collCommonDemandeAchatParCatalogues->remove($this->collCommonDemandeAchatParCatalogues->search($commonDemandeAchatParCatalogue));
            if (null === $this->commonDemandeAchatParCataloguesScheduledForDeletion) {
                $this->commonDemandeAchatParCataloguesScheduledForDeletion = clone $this->collCommonDemandeAchatParCatalogues;
                $this->commonDemandeAchatParCataloguesScheduledForDeletion->clear();
            }
            $this->commonDemandeAchatParCataloguesScheduledForDeletion[]= clone $commonDemandeAchatParCatalogue;
            $commonDemandeAchatParCatalogue->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonDemandeAchatParCatalogues from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonDemandeAchatParCatalogue[] List of CommonDemandeAchatParCatalogue objects
     */
    public function getCommonDemandeAchatParCataloguesJoinCommonOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonDemandeAchatParCatalogueQuery::create(null, $criteria);
        $query->joinWith('CommonOrganisme', $join_behavior);

        return $this->getCommonDemandeAchatParCatalogues($query, $con);
    }

    /**
     * Clears out the collCommonExecAgentContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecAgentContrats()
     */
    public function clearCommonExecAgentContrats()
    {
        $this->collCommonExecAgentContrats = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecAgentContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecAgentContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecAgentContrats($v = true)
    {
        $this->collCommonExecAgentContratsPartial = $v;
    }

    /**
     * Initializes the collCommonExecAgentContrats collection.
     *
     * By default this just sets the collCommonExecAgentContrats collection to an empty array (like clearcollCommonExecAgentContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecAgentContrats($overrideExisting = true)
    {
        if (null !== $this->collCommonExecAgentContrats && !$overrideExisting) {
            return;
        }
        $this->collCommonExecAgentContrats = new PropelObjectCollection();
        $this->collCommonExecAgentContrats->setModel('CommonExecAgentContrat');
    }

    /**
     * Gets an array of CommonExecAgentContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecAgentContrat[] List of CommonExecAgentContrat objects
     * @throws PropelException
     */
    public function getCommonExecAgentContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAgentContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecAgentContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAgentContrats) {
                // return empty collection
                $this->initCommonExecAgentContrats();
            } else {
                $collCommonExecAgentContrats = CommonExecAgentContratQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecAgentContratsPartial && count($collCommonExecAgentContrats)) {
                      $this->initCommonExecAgentContrats(false);

                      foreach ($collCommonExecAgentContrats as $obj) {
                        if (false == $this->collCommonExecAgentContrats->contains($obj)) {
                          $this->collCommonExecAgentContrats->append($obj);
                        }
                      }

                      $this->collCommonExecAgentContratsPartial = true;
                    }

                    $collCommonExecAgentContrats->getInternalIterator()->rewind();

                    return $collCommonExecAgentContrats;
                }

                if ($partial && $this->collCommonExecAgentContrats) {
                    foreach ($this->collCommonExecAgentContrats as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecAgentContrats[] = $obj;
                        }
                    }
                }

                $this->collCommonExecAgentContrats = $collCommonExecAgentContrats;
                $this->collCommonExecAgentContratsPartial = false;
            }
        }

        return $this->collCommonExecAgentContrats;
    }

    /**
     * Sets a collection of CommonExecAgentContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecAgentContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecAgentContrats(PropelCollection $commonExecAgentContrats, PropelPDO $con = null)
    {
        $commonExecAgentContratsToDelete = $this->getCommonExecAgentContrats(new Criteria(), $con)->diff($commonExecAgentContrats);


        $this->commonExecAgentContratsScheduledForDeletion = $commonExecAgentContratsToDelete;

        foreach ($commonExecAgentContratsToDelete as $commonExecAgentContratRemoved) {
            $commonExecAgentContratRemoved->setCommonAgent(null);
        }

        $this->collCommonExecAgentContrats = null;
        foreach ($commonExecAgentContrats as $commonExecAgentContrat) {
            $this->addCommonExecAgentContrat($commonExecAgentContrat);
        }

        $this->collCommonExecAgentContrats = $commonExecAgentContrats;
        $this->collCommonExecAgentContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecAgentContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecAgentContrat objects.
     * @throws PropelException
     */
    public function countCommonExecAgentContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAgentContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecAgentContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAgentContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecAgentContrats());
            }
            $query = CommonExecAgentContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonExecAgentContrats);
    }

    /**
     * Method called to associate a CommonExecAgentContrat object to this object
     * through the CommonExecAgentContrat foreign key attribute.
     *
     * @param   CommonExecAgentContrat $l CommonExecAgentContrat
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecAgentContrat(CommonExecAgentContrat $l)
    {
        if ($this->collCommonExecAgentContrats === null) {
            $this->initCommonExecAgentContrats();
            $this->collCommonExecAgentContratsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecAgentContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecAgentContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecAgentContrat $commonExecAgentContrat The commonExecAgentContrat object to add.
     */
    protected function doAddCommonExecAgentContrat($commonExecAgentContrat)
    {
        $this->collCommonExecAgentContrats[]= $commonExecAgentContrat;
        $commonExecAgentContrat->setCommonAgent($this);
    }

    /**
     * @param	CommonExecAgentContrat $commonExecAgentContrat The commonExecAgentContrat object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecAgentContrat($commonExecAgentContrat)
    {
        if ($this->getCommonExecAgentContrats()->contains($commonExecAgentContrat)) {
            $this->collCommonExecAgentContrats->remove($this->collCommonExecAgentContrats->search($commonExecAgentContrat));
            if (null === $this->commonExecAgentContratsScheduledForDeletion) {
                $this->commonExecAgentContratsScheduledForDeletion = clone $this->collCommonExecAgentContrats;
                $this->commonExecAgentContratsScheduledForDeletion->clear();
            }
            $this->commonExecAgentContratsScheduledForDeletion[]= clone $commonExecAgentContrat;
            $commonExecAgentContrat->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecAgentContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAgentContrat[] List of CommonExecAgentContrat objects
     */
    public function getCommonExecAgentContratsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAgentContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecAgentContrats($query, $con);
    }

    /**
     * Clears out the collCommonExecAvenantsRelatedByIdAgentCrea collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecAvenantsRelatedByIdAgentCrea()
     */
    public function clearCommonExecAvenantsRelatedByIdAgentCrea()
    {
        $this->collCommonExecAvenantsRelatedByIdAgentCrea = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecAvenantsRelatedByIdAgentCreaPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecAvenantsRelatedByIdAgentCrea collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecAvenantsRelatedByIdAgentCrea($v = true)
    {
        $this->collCommonExecAvenantsRelatedByIdAgentCreaPartial = $v;
    }

    /**
     * Initializes the collCommonExecAvenantsRelatedByIdAgentCrea collection.
     *
     * By default this just sets the collCommonExecAvenantsRelatedByIdAgentCrea collection to an empty array (like clearcollCommonExecAvenantsRelatedByIdAgentCrea());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecAvenantsRelatedByIdAgentCrea($overrideExisting = true)
    {
        if (null !== $this->collCommonExecAvenantsRelatedByIdAgentCrea && !$overrideExisting) {
            return;
        }
        $this->collCommonExecAvenantsRelatedByIdAgentCrea = new PropelObjectCollection();
        $this->collCommonExecAvenantsRelatedByIdAgentCrea->setModel('CommonExecAvenant');
    }

    /**
     * Gets an array of CommonExecAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     * @throws PropelException
     */
    public function getCommonExecAvenantsRelatedByIdAgentCrea($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenantsRelatedByIdAgentCrea || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenantsRelatedByIdAgentCrea) {
                // return empty collection
                $this->initCommonExecAvenantsRelatedByIdAgentCrea();
            } else {
                $collCommonExecAvenantsRelatedByIdAgentCrea = CommonExecAvenantQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentCrea($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecAvenantsRelatedByIdAgentCreaPartial && count($collCommonExecAvenantsRelatedByIdAgentCrea)) {
                      $this->initCommonExecAvenantsRelatedByIdAgentCrea(false);

                      foreach ($collCommonExecAvenantsRelatedByIdAgentCrea as $obj) {
                        if (false == $this->collCommonExecAvenantsRelatedByIdAgentCrea->contains($obj)) {
                          $this->collCommonExecAvenantsRelatedByIdAgentCrea->append($obj);
                        }
                      }

                      $this->collCommonExecAvenantsRelatedByIdAgentCreaPartial = true;
                    }

                    $collCommonExecAvenantsRelatedByIdAgentCrea->getInternalIterator()->rewind();

                    return $collCommonExecAvenantsRelatedByIdAgentCrea;
                }

                if ($partial && $this->collCommonExecAvenantsRelatedByIdAgentCrea) {
                    foreach ($this->collCommonExecAvenantsRelatedByIdAgentCrea as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecAvenantsRelatedByIdAgentCrea[] = $obj;
                        }
                    }
                }

                $this->collCommonExecAvenantsRelatedByIdAgentCrea = $collCommonExecAvenantsRelatedByIdAgentCrea;
                $this->collCommonExecAvenantsRelatedByIdAgentCreaPartial = false;
            }
        }

        return $this->collCommonExecAvenantsRelatedByIdAgentCrea;
    }

    /**
     * Sets a collection of CommonExecAvenantRelatedByIdAgentCrea objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecAvenantsRelatedByIdAgentCrea A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecAvenantsRelatedByIdAgentCrea(PropelCollection $commonExecAvenantsRelatedByIdAgentCrea, PropelPDO $con = null)
    {
        $commonExecAvenantsRelatedByIdAgentCreaToDelete = $this->getCommonExecAvenantsRelatedByIdAgentCrea(new Criteria(), $con)->diff($commonExecAvenantsRelatedByIdAgentCrea);


        $this->commonExecAvenantsRelatedByIdAgentCreaScheduledForDeletion = $commonExecAvenantsRelatedByIdAgentCreaToDelete;

        foreach ($commonExecAvenantsRelatedByIdAgentCreaToDelete as $commonExecAvenantRelatedByIdAgentCreaRemoved) {
            $commonExecAvenantRelatedByIdAgentCreaRemoved->setCommonAgentRelatedByIdAgentCrea(null);
        }

        $this->collCommonExecAvenantsRelatedByIdAgentCrea = null;
        foreach ($commonExecAvenantsRelatedByIdAgentCrea as $commonExecAvenantRelatedByIdAgentCrea) {
            $this->addCommonExecAvenantRelatedByIdAgentCrea($commonExecAvenantRelatedByIdAgentCrea);
        }

        $this->collCommonExecAvenantsRelatedByIdAgentCrea = $commonExecAvenantsRelatedByIdAgentCrea;
        $this->collCommonExecAvenantsRelatedByIdAgentCreaPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecAvenant objects.
     * @throws PropelException
     */
    public function countCommonExecAvenantsRelatedByIdAgentCrea(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenantsRelatedByIdAgentCrea || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenantsRelatedByIdAgentCrea) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecAvenantsRelatedByIdAgentCrea());
            }
            $query = CommonExecAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentCrea($this)
                ->count($con);
        }

        return count($this->collCommonExecAvenantsRelatedByIdAgentCrea);
    }

    /**
     * Method called to associate a CommonExecAvenant object to this object
     * through the CommonExecAvenant foreign key attribute.
     *
     * @param   CommonExecAvenant $l CommonExecAvenant
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecAvenantRelatedByIdAgentCrea(CommonExecAvenant $l)
    {
        if ($this->collCommonExecAvenantsRelatedByIdAgentCrea === null) {
            $this->initCommonExecAvenantsRelatedByIdAgentCrea();
            $this->collCommonExecAvenantsRelatedByIdAgentCreaPartial = true;
        }
        if (!in_array($l, $this->collCommonExecAvenantsRelatedByIdAgentCrea->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecAvenantRelatedByIdAgentCrea($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecAvenantRelatedByIdAgentCrea $commonExecAvenantRelatedByIdAgentCrea The commonExecAvenantRelatedByIdAgentCrea object to add.
     */
    protected function doAddCommonExecAvenantRelatedByIdAgentCrea($commonExecAvenantRelatedByIdAgentCrea)
    {
        $this->collCommonExecAvenantsRelatedByIdAgentCrea[]= $commonExecAvenantRelatedByIdAgentCrea;
        $commonExecAvenantRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea($this);
    }

    /**
     * @param	CommonExecAvenantRelatedByIdAgentCrea $commonExecAvenantRelatedByIdAgentCrea The commonExecAvenantRelatedByIdAgentCrea object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecAvenantRelatedByIdAgentCrea($commonExecAvenantRelatedByIdAgentCrea)
    {
        if ($this->getCommonExecAvenantsRelatedByIdAgentCrea()->contains($commonExecAvenantRelatedByIdAgentCrea)) {
            $this->collCommonExecAvenantsRelatedByIdAgentCrea->remove($this->collCommonExecAvenantsRelatedByIdAgentCrea->search($commonExecAvenantRelatedByIdAgentCrea));
            if (null === $this->commonExecAvenantsRelatedByIdAgentCreaScheduledForDeletion) {
                $this->commonExecAvenantsRelatedByIdAgentCreaScheduledForDeletion = clone $this->collCommonExecAvenantsRelatedByIdAgentCrea;
                $this->commonExecAvenantsRelatedByIdAgentCreaScheduledForDeletion->clear();
            }
            $this->commonExecAvenantsRelatedByIdAgentCreaScheduledForDeletion[]= $commonExecAvenantRelatedByIdAgentCrea;
            $commonExecAvenantRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecAvenantsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsRelatedByIdAgentCreaJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecAvenantsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecAvenantsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsRelatedByIdAgentCreaJoinCommonExecTypeAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeAvenant', $join_behavior);

        return $this->getCommonExecAvenantsRelatedByIdAgentCrea($query, $con);
    }

    /**
     * Clears out the collCommonExecAvenantsRelatedByIdAgentModif collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecAvenantsRelatedByIdAgentModif()
     */
    public function clearCommonExecAvenantsRelatedByIdAgentModif()
    {
        $this->collCommonExecAvenantsRelatedByIdAgentModif = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecAvenantsRelatedByIdAgentModifPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecAvenantsRelatedByIdAgentModif collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecAvenantsRelatedByIdAgentModif($v = true)
    {
        $this->collCommonExecAvenantsRelatedByIdAgentModifPartial = $v;
    }

    /**
     * Initializes the collCommonExecAvenantsRelatedByIdAgentModif collection.
     *
     * By default this just sets the collCommonExecAvenantsRelatedByIdAgentModif collection to an empty array (like clearcollCommonExecAvenantsRelatedByIdAgentModif());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecAvenantsRelatedByIdAgentModif($overrideExisting = true)
    {
        if (null !== $this->collCommonExecAvenantsRelatedByIdAgentModif && !$overrideExisting) {
            return;
        }
        $this->collCommonExecAvenantsRelatedByIdAgentModif = new PropelObjectCollection();
        $this->collCommonExecAvenantsRelatedByIdAgentModif->setModel('CommonExecAvenant');
    }

    /**
     * Gets an array of CommonExecAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     * @throws PropelException
     */
    public function getCommonExecAvenantsRelatedByIdAgentModif($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenantsRelatedByIdAgentModif || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenantsRelatedByIdAgentModif) {
                // return empty collection
                $this->initCommonExecAvenantsRelatedByIdAgentModif();
            } else {
                $collCommonExecAvenantsRelatedByIdAgentModif = CommonExecAvenantQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentModif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecAvenantsRelatedByIdAgentModifPartial && count($collCommonExecAvenantsRelatedByIdAgentModif)) {
                      $this->initCommonExecAvenantsRelatedByIdAgentModif(false);

                      foreach ($collCommonExecAvenantsRelatedByIdAgentModif as $obj) {
                        if (false == $this->collCommonExecAvenantsRelatedByIdAgentModif->contains($obj)) {
                          $this->collCommonExecAvenantsRelatedByIdAgentModif->append($obj);
                        }
                      }

                      $this->collCommonExecAvenantsRelatedByIdAgentModifPartial = true;
                    }

                    $collCommonExecAvenantsRelatedByIdAgentModif->getInternalIterator()->rewind();

                    return $collCommonExecAvenantsRelatedByIdAgentModif;
                }

                if ($partial && $this->collCommonExecAvenantsRelatedByIdAgentModif) {
                    foreach ($this->collCommonExecAvenantsRelatedByIdAgentModif as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecAvenantsRelatedByIdAgentModif[] = $obj;
                        }
                    }
                }

                $this->collCommonExecAvenantsRelatedByIdAgentModif = $collCommonExecAvenantsRelatedByIdAgentModif;
                $this->collCommonExecAvenantsRelatedByIdAgentModifPartial = false;
            }
        }

        return $this->collCommonExecAvenantsRelatedByIdAgentModif;
    }

    /**
     * Sets a collection of CommonExecAvenantRelatedByIdAgentModif objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecAvenantsRelatedByIdAgentModif A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecAvenantsRelatedByIdAgentModif(PropelCollection $commonExecAvenantsRelatedByIdAgentModif, PropelPDO $con = null)
    {
        $commonExecAvenantsRelatedByIdAgentModifToDelete = $this->getCommonExecAvenantsRelatedByIdAgentModif(new Criteria(), $con)->diff($commonExecAvenantsRelatedByIdAgentModif);


        $this->commonExecAvenantsRelatedByIdAgentModifScheduledForDeletion = $commonExecAvenantsRelatedByIdAgentModifToDelete;

        foreach ($commonExecAvenantsRelatedByIdAgentModifToDelete as $commonExecAvenantRelatedByIdAgentModifRemoved) {
            $commonExecAvenantRelatedByIdAgentModifRemoved->setCommonAgentRelatedByIdAgentModif(null);
        }

        $this->collCommonExecAvenantsRelatedByIdAgentModif = null;
        foreach ($commonExecAvenantsRelatedByIdAgentModif as $commonExecAvenantRelatedByIdAgentModif) {
            $this->addCommonExecAvenantRelatedByIdAgentModif($commonExecAvenantRelatedByIdAgentModif);
        }

        $this->collCommonExecAvenantsRelatedByIdAgentModif = $commonExecAvenantsRelatedByIdAgentModif;
        $this->collCommonExecAvenantsRelatedByIdAgentModifPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecAvenant objects.
     * @throws PropelException
     */
    public function countCommonExecAvenantsRelatedByIdAgentModif(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenantsRelatedByIdAgentModif || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenantsRelatedByIdAgentModif) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecAvenantsRelatedByIdAgentModif());
            }
            $query = CommonExecAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentModif($this)
                ->count($con);
        }

        return count($this->collCommonExecAvenantsRelatedByIdAgentModif);
    }

    /**
     * Method called to associate a CommonExecAvenant object to this object
     * through the CommonExecAvenant foreign key attribute.
     *
     * @param   CommonExecAvenant $l CommonExecAvenant
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecAvenantRelatedByIdAgentModif(CommonExecAvenant $l)
    {
        if ($this->collCommonExecAvenantsRelatedByIdAgentModif === null) {
            $this->initCommonExecAvenantsRelatedByIdAgentModif();
            $this->collCommonExecAvenantsRelatedByIdAgentModifPartial = true;
        }
        if (!in_array($l, $this->collCommonExecAvenantsRelatedByIdAgentModif->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecAvenantRelatedByIdAgentModif($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecAvenantRelatedByIdAgentModif $commonExecAvenantRelatedByIdAgentModif The commonExecAvenantRelatedByIdAgentModif object to add.
     */
    protected function doAddCommonExecAvenantRelatedByIdAgentModif($commonExecAvenantRelatedByIdAgentModif)
    {
        $this->collCommonExecAvenantsRelatedByIdAgentModif[]= $commonExecAvenantRelatedByIdAgentModif;
        $commonExecAvenantRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif($this);
    }

    /**
     * @param	CommonExecAvenantRelatedByIdAgentModif $commonExecAvenantRelatedByIdAgentModif The commonExecAvenantRelatedByIdAgentModif object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecAvenantRelatedByIdAgentModif($commonExecAvenantRelatedByIdAgentModif)
    {
        if ($this->getCommonExecAvenantsRelatedByIdAgentModif()->contains($commonExecAvenantRelatedByIdAgentModif)) {
            $this->collCommonExecAvenantsRelatedByIdAgentModif->remove($this->collCommonExecAvenantsRelatedByIdAgentModif->search($commonExecAvenantRelatedByIdAgentModif));
            if (null === $this->commonExecAvenantsRelatedByIdAgentModifScheduledForDeletion) {
                $this->commonExecAvenantsRelatedByIdAgentModifScheduledForDeletion = clone $this->collCommonExecAvenantsRelatedByIdAgentModif;
                $this->commonExecAvenantsRelatedByIdAgentModifScheduledForDeletion->clear();
            }
            $this->commonExecAvenantsRelatedByIdAgentModifScheduledForDeletion[]= $commonExecAvenantRelatedByIdAgentModif;
            $commonExecAvenantRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecAvenantsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsRelatedByIdAgentModifJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecAvenantsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecAvenantsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsRelatedByIdAgentModifJoinCommonExecTypeAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeAvenant', $join_behavior);

        return $this->getCommonExecAvenantsRelatedByIdAgentModif($query, $con);
    }

    /**
     * Clears out the collCommonExecAvenantsRelatedByIdAgentRejet collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecAvenantsRelatedByIdAgentRejet()
     */
    public function clearCommonExecAvenantsRelatedByIdAgentRejet()
    {
        $this->collCommonExecAvenantsRelatedByIdAgentRejet = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecAvenantsRelatedByIdAgentRejetPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecAvenantsRelatedByIdAgentRejet collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecAvenantsRelatedByIdAgentRejet($v = true)
    {
        $this->collCommonExecAvenantsRelatedByIdAgentRejetPartial = $v;
    }

    /**
     * Initializes the collCommonExecAvenantsRelatedByIdAgentRejet collection.
     *
     * By default this just sets the collCommonExecAvenantsRelatedByIdAgentRejet collection to an empty array (like clearcollCommonExecAvenantsRelatedByIdAgentRejet());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecAvenantsRelatedByIdAgentRejet($overrideExisting = true)
    {
        if (null !== $this->collCommonExecAvenantsRelatedByIdAgentRejet && !$overrideExisting) {
            return;
        }
        $this->collCommonExecAvenantsRelatedByIdAgentRejet = new PropelObjectCollection();
        $this->collCommonExecAvenantsRelatedByIdAgentRejet->setModel('CommonExecAvenant');
    }

    /**
     * Gets an array of CommonExecAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     * @throws PropelException
     */
    public function getCommonExecAvenantsRelatedByIdAgentRejet($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsRelatedByIdAgentRejetPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenantsRelatedByIdAgentRejet || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenantsRelatedByIdAgentRejet) {
                // return empty collection
                $this->initCommonExecAvenantsRelatedByIdAgentRejet();
            } else {
                $collCommonExecAvenantsRelatedByIdAgentRejet = CommonExecAvenantQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentRejet($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecAvenantsRelatedByIdAgentRejetPartial && count($collCommonExecAvenantsRelatedByIdAgentRejet)) {
                      $this->initCommonExecAvenantsRelatedByIdAgentRejet(false);

                      foreach ($collCommonExecAvenantsRelatedByIdAgentRejet as $obj) {
                        if (false == $this->collCommonExecAvenantsRelatedByIdAgentRejet->contains($obj)) {
                          $this->collCommonExecAvenantsRelatedByIdAgentRejet->append($obj);
                        }
                      }

                      $this->collCommonExecAvenantsRelatedByIdAgentRejetPartial = true;
                    }

                    $collCommonExecAvenantsRelatedByIdAgentRejet->getInternalIterator()->rewind();

                    return $collCommonExecAvenantsRelatedByIdAgentRejet;
                }

                if ($partial && $this->collCommonExecAvenantsRelatedByIdAgentRejet) {
                    foreach ($this->collCommonExecAvenantsRelatedByIdAgentRejet as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecAvenantsRelatedByIdAgentRejet[] = $obj;
                        }
                    }
                }

                $this->collCommonExecAvenantsRelatedByIdAgentRejet = $collCommonExecAvenantsRelatedByIdAgentRejet;
                $this->collCommonExecAvenantsRelatedByIdAgentRejetPartial = false;
            }
        }

        return $this->collCommonExecAvenantsRelatedByIdAgentRejet;
    }

    /**
     * Sets a collection of CommonExecAvenantRelatedByIdAgentRejet objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecAvenantsRelatedByIdAgentRejet A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecAvenantsRelatedByIdAgentRejet(PropelCollection $commonExecAvenantsRelatedByIdAgentRejet, PropelPDO $con = null)
    {
        $commonExecAvenantsRelatedByIdAgentRejetToDelete = $this->getCommonExecAvenantsRelatedByIdAgentRejet(new Criteria(), $con)->diff($commonExecAvenantsRelatedByIdAgentRejet);


        $this->commonExecAvenantsRelatedByIdAgentRejetScheduledForDeletion = $commonExecAvenantsRelatedByIdAgentRejetToDelete;

        foreach ($commonExecAvenantsRelatedByIdAgentRejetToDelete as $commonExecAvenantRelatedByIdAgentRejetRemoved) {
            $commonExecAvenantRelatedByIdAgentRejetRemoved->setCommonAgentRelatedByIdAgentRejet(null);
        }

        $this->collCommonExecAvenantsRelatedByIdAgentRejet = null;
        foreach ($commonExecAvenantsRelatedByIdAgentRejet as $commonExecAvenantRelatedByIdAgentRejet) {
            $this->addCommonExecAvenantRelatedByIdAgentRejet($commonExecAvenantRelatedByIdAgentRejet);
        }

        $this->collCommonExecAvenantsRelatedByIdAgentRejet = $commonExecAvenantsRelatedByIdAgentRejet;
        $this->collCommonExecAvenantsRelatedByIdAgentRejetPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecAvenant objects.
     * @throws PropelException
     */
    public function countCommonExecAvenantsRelatedByIdAgentRejet(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsRelatedByIdAgentRejetPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenantsRelatedByIdAgentRejet || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenantsRelatedByIdAgentRejet) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecAvenantsRelatedByIdAgentRejet());
            }
            $query = CommonExecAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentRejet($this)
                ->count($con);
        }

        return count($this->collCommonExecAvenantsRelatedByIdAgentRejet);
    }

    /**
     * Method called to associate a CommonExecAvenant object to this object
     * through the CommonExecAvenant foreign key attribute.
     *
     * @param   CommonExecAvenant $l CommonExecAvenant
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecAvenantRelatedByIdAgentRejet(CommonExecAvenant $l)
    {
        if ($this->collCommonExecAvenantsRelatedByIdAgentRejet === null) {
            $this->initCommonExecAvenantsRelatedByIdAgentRejet();
            $this->collCommonExecAvenantsRelatedByIdAgentRejetPartial = true;
        }
        if (!in_array($l, $this->collCommonExecAvenantsRelatedByIdAgentRejet->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecAvenantRelatedByIdAgentRejet($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecAvenantRelatedByIdAgentRejet $commonExecAvenantRelatedByIdAgentRejet The commonExecAvenantRelatedByIdAgentRejet object to add.
     */
    protected function doAddCommonExecAvenantRelatedByIdAgentRejet($commonExecAvenantRelatedByIdAgentRejet)
    {
        $this->collCommonExecAvenantsRelatedByIdAgentRejet[]= $commonExecAvenantRelatedByIdAgentRejet;
        $commonExecAvenantRelatedByIdAgentRejet->setCommonAgentRelatedByIdAgentRejet($this);
    }

    /**
     * @param	CommonExecAvenantRelatedByIdAgentRejet $commonExecAvenantRelatedByIdAgentRejet The commonExecAvenantRelatedByIdAgentRejet object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecAvenantRelatedByIdAgentRejet($commonExecAvenantRelatedByIdAgentRejet)
    {
        if ($this->getCommonExecAvenantsRelatedByIdAgentRejet()->contains($commonExecAvenantRelatedByIdAgentRejet)) {
            $this->collCommonExecAvenantsRelatedByIdAgentRejet->remove($this->collCommonExecAvenantsRelatedByIdAgentRejet->search($commonExecAvenantRelatedByIdAgentRejet));
            if (null === $this->commonExecAvenantsRelatedByIdAgentRejetScheduledForDeletion) {
                $this->commonExecAvenantsRelatedByIdAgentRejetScheduledForDeletion = clone $this->collCommonExecAvenantsRelatedByIdAgentRejet;
                $this->commonExecAvenantsRelatedByIdAgentRejetScheduledForDeletion->clear();
            }
            $this->commonExecAvenantsRelatedByIdAgentRejetScheduledForDeletion[]= $commonExecAvenantRelatedByIdAgentRejet;
            $commonExecAvenantRelatedByIdAgentRejet->setCommonAgentRelatedByIdAgentRejet(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecAvenantsRelatedByIdAgentRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsRelatedByIdAgentRejetJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecAvenantsRelatedByIdAgentRejet($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecAvenantsRelatedByIdAgentRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsRelatedByIdAgentRejetJoinCommonExecTypeAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeAvenant', $join_behavior);

        return $this->getCommonExecAvenantsRelatedByIdAgentRejet($query, $con);
    }

    /**
     * Clears out the collCommonExecAvenantsRelatedByIdAgentValidation collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecAvenantsRelatedByIdAgentValidation()
     */
    public function clearCommonExecAvenantsRelatedByIdAgentValidation()
    {
        $this->collCommonExecAvenantsRelatedByIdAgentValidation = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecAvenantsRelatedByIdAgentValidationPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecAvenantsRelatedByIdAgentValidation collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecAvenantsRelatedByIdAgentValidation($v = true)
    {
        $this->collCommonExecAvenantsRelatedByIdAgentValidationPartial = $v;
    }

    /**
     * Initializes the collCommonExecAvenantsRelatedByIdAgentValidation collection.
     *
     * By default this just sets the collCommonExecAvenantsRelatedByIdAgentValidation collection to an empty array (like clearcollCommonExecAvenantsRelatedByIdAgentValidation());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecAvenantsRelatedByIdAgentValidation($overrideExisting = true)
    {
        if (null !== $this->collCommonExecAvenantsRelatedByIdAgentValidation && !$overrideExisting) {
            return;
        }
        $this->collCommonExecAvenantsRelatedByIdAgentValidation = new PropelObjectCollection();
        $this->collCommonExecAvenantsRelatedByIdAgentValidation->setModel('CommonExecAvenant');
    }

    /**
     * Gets an array of CommonExecAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     * @throws PropelException
     */
    public function getCommonExecAvenantsRelatedByIdAgentValidation($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsRelatedByIdAgentValidationPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenantsRelatedByIdAgentValidation || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenantsRelatedByIdAgentValidation) {
                // return empty collection
                $this->initCommonExecAvenantsRelatedByIdAgentValidation();
            } else {
                $collCommonExecAvenantsRelatedByIdAgentValidation = CommonExecAvenantQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentValidation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecAvenantsRelatedByIdAgentValidationPartial && count($collCommonExecAvenantsRelatedByIdAgentValidation)) {
                      $this->initCommonExecAvenantsRelatedByIdAgentValidation(false);

                      foreach ($collCommonExecAvenantsRelatedByIdAgentValidation as $obj) {
                        if (false == $this->collCommonExecAvenantsRelatedByIdAgentValidation->contains($obj)) {
                          $this->collCommonExecAvenantsRelatedByIdAgentValidation->append($obj);
                        }
                      }

                      $this->collCommonExecAvenantsRelatedByIdAgentValidationPartial = true;
                    }

                    $collCommonExecAvenantsRelatedByIdAgentValidation->getInternalIterator()->rewind();

                    return $collCommonExecAvenantsRelatedByIdAgentValidation;
                }

                if ($partial && $this->collCommonExecAvenantsRelatedByIdAgentValidation) {
                    foreach ($this->collCommonExecAvenantsRelatedByIdAgentValidation as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecAvenantsRelatedByIdAgentValidation[] = $obj;
                        }
                    }
                }

                $this->collCommonExecAvenantsRelatedByIdAgentValidation = $collCommonExecAvenantsRelatedByIdAgentValidation;
                $this->collCommonExecAvenantsRelatedByIdAgentValidationPartial = false;
            }
        }

        return $this->collCommonExecAvenantsRelatedByIdAgentValidation;
    }

    /**
     * Sets a collection of CommonExecAvenantRelatedByIdAgentValidation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecAvenantsRelatedByIdAgentValidation A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecAvenantsRelatedByIdAgentValidation(PropelCollection $commonExecAvenantsRelatedByIdAgentValidation, PropelPDO $con = null)
    {
        $commonExecAvenantsRelatedByIdAgentValidationToDelete = $this->getCommonExecAvenantsRelatedByIdAgentValidation(new Criteria(), $con)->diff($commonExecAvenantsRelatedByIdAgentValidation);


        $this->commonExecAvenantsRelatedByIdAgentValidationScheduledForDeletion = $commonExecAvenantsRelatedByIdAgentValidationToDelete;

        foreach ($commonExecAvenantsRelatedByIdAgentValidationToDelete as $commonExecAvenantRelatedByIdAgentValidationRemoved) {
            $commonExecAvenantRelatedByIdAgentValidationRemoved->setCommonAgentRelatedByIdAgentValidation(null);
        }

        $this->collCommonExecAvenantsRelatedByIdAgentValidation = null;
        foreach ($commonExecAvenantsRelatedByIdAgentValidation as $commonExecAvenantRelatedByIdAgentValidation) {
            $this->addCommonExecAvenantRelatedByIdAgentValidation($commonExecAvenantRelatedByIdAgentValidation);
        }

        $this->collCommonExecAvenantsRelatedByIdAgentValidation = $commonExecAvenantsRelatedByIdAgentValidation;
        $this->collCommonExecAvenantsRelatedByIdAgentValidationPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecAvenant objects.
     * @throws PropelException
     */
    public function countCommonExecAvenantsRelatedByIdAgentValidation(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsRelatedByIdAgentValidationPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenantsRelatedByIdAgentValidation || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenantsRelatedByIdAgentValidation) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecAvenantsRelatedByIdAgentValidation());
            }
            $query = CommonExecAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentValidation($this)
                ->count($con);
        }

        return count($this->collCommonExecAvenantsRelatedByIdAgentValidation);
    }

    /**
     * Method called to associate a CommonExecAvenant object to this object
     * through the CommonExecAvenant foreign key attribute.
     *
     * @param   CommonExecAvenant $l CommonExecAvenant
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecAvenantRelatedByIdAgentValidation(CommonExecAvenant $l)
    {
        if ($this->collCommonExecAvenantsRelatedByIdAgentValidation === null) {
            $this->initCommonExecAvenantsRelatedByIdAgentValidation();
            $this->collCommonExecAvenantsRelatedByIdAgentValidationPartial = true;
        }
        if (!in_array($l, $this->collCommonExecAvenantsRelatedByIdAgentValidation->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecAvenantRelatedByIdAgentValidation($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecAvenantRelatedByIdAgentValidation $commonExecAvenantRelatedByIdAgentValidation The commonExecAvenantRelatedByIdAgentValidation object to add.
     */
    protected function doAddCommonExecAvenantRelatedByIdAgentValidation($commonExecAvenantRelatedByIdAgentValidation)
    {
        $this->collCommonExecAvenantsRelatedByIdAgentValidation[]= $commonExecAvenantRelatedByIdAgentValidation;
        $commonExecAvenantRelatedByIdAgentValidation->setCommonAgentRelatedByIdAgentValidation($this);
    }

    /**
     * @param	CommonExecAvenantRelatedByIdAgentValidation $commonExecAvenantRelatedByIdAgentValidation The commonExecAvenantRelatedByIdAgentValidation object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecAvenantRelatedByIdAgentValidation($commonExecAvenantRelatedByIdAgentValidation)
    {
        if ($this->getCommonExecAvenantsRelatedByIdAgentValidation()->contains($commonExecAvenantRelatedByIdAgentValidation)) {
            $this->collCommonExecAvenantsRelatedByIdAgentValidation->remove($this->collCommonExecAvenantsRelatedByIdAgentValidation->search($commonExecAvenantRelatedByIdAgentValidation));
            if (null === $this->commonExecAvenantsRelatedByIdAgentValidationScheduledForDeletion) {
                $this->commonExecAvenantsRelatedByIdAgentValidationScheduledForDeletion = clone $this->collCommonExecAvenantsRelatedByIdAgentValidation;
                $this->commonExecAvenantsRelatedByIdAgentValidationScheduledForDeletion->clear();
            }
            $this->commonExecAvenantsRelatedByIdAgentValidationScheduledForDeletion[]= $commonExecAvenantRelatedByIdAgentValidation;
            $commonExecAvenantRelatedByIdAgentValidation->setCommonAgentRelatedByIdAgentValidation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecAvenantsRelatedByIdAgentValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsRelatedByIdAgentValidationJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecAvenantsRelatedByIdAgentValidation($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecAvenantsRelatedByIdAgentValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsRelatedByIdAgentValidationJoinCommonExecTypeAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeAvenant', $join_behavior);

        return $this->getCommonExecAvenantsRelatedByIdAgentValidation($query, $con);
    }

    /**
     * Clears out the collCommonExecContractantsRelatedByIdAgentCrea collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecContractantsRelatedByIdAgentCrea()
     */
    public function clearCommonExecContractantsRelatedByIdAgentCrea()
    {
        $this->collCommonExecContractantsRelatedByIdAgentCrea = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContractantsRelatedByIdAgentCreaPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContractantsRelatedByIdAgentCrea collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContractantsRelatedByIdAgentCrea($v = true)
    {
        $this->collCommonExecContractantsRelatedByIdAgentCreaPartial = $v;
    }

    /**
     * Initializes the collCommonExecContractantsRelatedByIdAgentCrea collection.
     *
     * By default this just sets the collCommonExecContractantsRelatedByIdAgentCrea collection to an empty array (like clearcollCommonExecContractantsRelatedByIdAgentCrea());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContractantsRelatedByIdAgentCrea($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContractantsRelatedByIdAgentCrea && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContractantsRelatedByIdAgentCrea = new PropelObjectCollection();
        $this->collCommonExecContractantsRelatedByIdAgentCrea->setModel('CommonExecContractant');
    }

    /**
     * Gets an array of CommonExecContractant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     * @throws PropelException
     */
    public function getCommonExecContractantsRelatedByIdAgentCrea($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContractantsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecContractantsRelatedByIdAgentCrea || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContractantsRelatedByIdAgentCrea) {
                // return empty collection
                $this->initCommonExecContractantsRelatedByIdAgentCrea();
            } else {
                $collCommonExecContractantsRelatedByIdAgentCrea = CommonExecContractantQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentCrea($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContractantsRelatedByIdAgentCreaPartial && count($collCommonExecContractantsRelatedByIdAgentCrea)) {
                      $this->initCommonExecContractantsRelatedByIdAgentCrea(false);

                      foreach ($collCommonExecContractantsRelatedByIdAgentCrea as $obj) {
                        if (false == $this->collCommonExecContractantsRelatedByIdAgentCrea->contains($obj)) {
                          $this->collCommonExecContractantsRelatedByIdAgentCrea->append($obj);
                        }
                      }

                      $this->collCommonExecContractantsRelatedByIdAgentCreaPartial = true;
                    }

                    $collCommonExecContractantsRelatedByIdAgentCrea->getInternalIterator()->rewind();

                    return $collCommonExecContractantsRelatedByIdAgentCrea;
                }

                if ($partial && $this->collCommonExecContractantsRelatedByIdAgentCrea) {
                    foreach ($this->collCommonExecContractantsRelatedByIdAgentCrea as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContractantsRelatedByIdAgentCrea[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContractantsRelatedByIdAgentCrea = $collCommonExecContractantsRelatedByIdAgentCrea;
                $this->collCommonExecContractantsRelatedByIdAgentCreaPartial = false;
            }
        }

        return $this->collCommonExecContractantsRelatedByIdAgentCrea;
    }

    /**
     * Sets a collection of CommonExecContractantRelatedByIdAgentCrea objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContractantsRelatedByIdAgentCrea A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecContractantsRelatedByIdAgentCrea(PropelCollection $commonExecContractantsRelatedByIdAgentCrea, PropelPDO $con = null)
    {
        $commonExecContractantsRelatedByIdAgentCreaToDelete = $this->getCommonExecContractantsRelatedByIdAgentCrea(new Criteria(), $con)->diff($commonExecContractantsRelatedByIdAgentCrea);


        $this->commonExecContractantsRelatedByIdAgentCreaScheduledForDeletion = $commonExecContractantsRelatedByIdAgentCreaToDelete;

        foreach ($commonExecContractantsRelatedByIdAgentCreaToDelete as $commonExecContractantRelatedByIdAgentCreaRemoved) {
            $commonExecContractantRelatedByIdAgentCreaRemoved->setCommonAgentRelatedByIdAgentCrea(null);
        }

        $this->collCommonExecContractantsRelatedByIdAgentCrea = null;
        foreach ($commonExecContractantsRelatedByIdAgentCrea as $commonExecContractantRelatedByIdAgentCrea) {
            $this->addCommonExecContractantRelatedByIdAgentCrea($commonExecContractantRelatedByIdAgentCrea);
        }

        $this->collCommonExecContractantsRelatedByIdAgentCrea = $commonExecContractantsRelatedByIdAgentCrea;
        $this->collCommonExecContractantsRelatedByIdAgentCreaPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContractant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContractant objects.
     * @throws PropelException
     */
    public function countCommonExecContractantsRelatedByIdAgentCrea(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContractantsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecContractantsRelatedByIdAgentCrea || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContractantsRelatedByIdAgentCrea) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContractantsRelatedByIdAgentCrea());
            }
            $query = CommonExecContractantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentCrea($this)
                ->count($con);
        }

        return count($this->collCommonExecContractantsRelatedByIdAgentCrea);
    }

    /**
     * Method called to associate a CommonExecContractant object to this object
     * through the CommonExecContractant foreign key attribute.
     *
     * @param   CommonExecContractant $l CommonExecContractant
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecContractantRelatedByIdAgentCrea(CommonExecContractant $l)
    {
        if ($this->collCommonExecContractantsRelatedByIdAgentCrea === null) {
            $this->initCommonExecContractantsRelatedByIdAgentCrea();
            $this->collCommonExecContractantsRelatedByIdAgentCreaPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContractantsRelatedByIdAgentCrea->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContractantRelatedByIdAgentCrea($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContractantRelatedByIdAgentCrea $commonExecContractantRelatedByIdAgentCrea The commonExecContractantRelatedByIdAgentCrea object to add.
     */
    protected function doAddCommonExecContractantRelatedByIdAgentCrea($commonExecContractantRelatedByIdAgentCrea)
    {
        $this->collCommonExecContractantsRelatedByIdAgentCrea[]= $commonExecContractantRelatedByIdAgentCrea;
        $commonExecContractantRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea($this);
    }

    /**
     * @param	CommonExecContractantRelatedByIdAgentCrea $commonExecContractantRelatedByIdAgentCrea The commonExecContractantRelatedByIdAgentCrea object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecContractantRelatedByIdAgentCrea($commonExecContractantRelatedByIdAgentCrea)
    {
        if ($this->getCommonExecContractantsRelatedByIdAgentCrea()->contains($commonExecContractantRelatedByIdAgentCrea)) {
            $this->collCommonExecContractantsRelatedByIdAgentCrea->remove($this->collCommonExecContractantsRelatedByIdAgentCrea->search($commonExecContractantRelatedByIdAgentCrea));
            if (null === $this->commonExecContractantsRelatedByIdAgentCreaScheduledForDeletion) {
                $this->commonExecContractantsRelatedByIdAgentCreaScheduledForDeletion = clone $this->collCommonExecContractantsRelatedByIdAgentCrea;
                $this->commonExecContractantsRelatedByIdAgentCreaScheduledForDeletion->clear();
            }
            $this->commonExecContractantsRelatedByIdAgentCreaScheduledForDeletion[]= $commonExecContractantRelatedByIdAgentCrea;
            $commonExecContractantRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdAgentCreaJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecContractantsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdAgentCreaJoinCommonExecContractantRelatedByIdParent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractantRelatedByIdParent', $join_behavior);

        return $this->getCommonExecContractantsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdAgentCreaJoinCommonExecTypeContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeContractant', $join_behavior);

        return $this->getCommonExecContractantsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdAgentCreaJoinCommonExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeStructure', $join_behavior);

        return $this->getCommonExecContractantsRelatedByIdAgentCrea($query, $con);
    }

    /**
     * Clears out the collCommonExecContractantsRelatedByIdAgentModif collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecContractantsRelatedByIdAgentModif()
     */
    public function clearCommonExecContractantsRelatedByIdAgentModif()
    {
        $this->collCommonExecContractantsRelatedByIdAgentModif = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContractantsRelatedByIdAgentModifPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContractantsRelatedByIdAgentModif collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContractantsRelatedByIdAgentModif($v = true)
    {
        $this->collCommonExecContractantsRelatedByIdAgentModifPartial = $v;
    }

    /**
     * Initializes the collCommonExecContractantsRelatedByIdAgentModif collection.
     *
     * By default this just sets the collCommonExecContractantsRelatedByIdAgentModif collection to an empty array (like clearcollCommonExecContractantsRelatedByIdAgentModif());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContractantsRelatedByIdAgentModif($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContractantsRelatedByIdAgentModif && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContractantsRelatedByIdAgentModif = new PropelObjectCollection();
        $this->collCommonExecContractantsRelatedByIdAgentModif->setModel('CommonExecContractant');
    }

    /**
     * Gets an array of CommonExecContractant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     * @throws PropelException
     */
    public function getCommonExecContractantsRelatedByIdAgentModif($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContractantsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecContractantsRelatedByIdAgentModif || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContractantsRelatedByIdAgentModif) {
                // return empty collection
                $this->initCommonExecContractantsRelatedByIdAgentModif();
            } else {
                $collCommonExecContractantsRelatedByIdAgentModif = CommonExecContractantQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentModif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContractantsRelatedByIdAgentModifPartial && count($collCommonExecContractantsRelatedByIdAgentModif)) {
                      $this->initCommonExecContractantsRelatedByIdAgentModif(false);

                      foreach ($collCommonExecContractantsRelatedByIdAgentModif as $obj) {
                        if (false == $this->collCommonExecContractantsRelatedByIdAgentModif->contains($obj)) {
                          $this->collCommonExecContractantsRelatedByIdAgentModif->append($obj);
                        }
                      }

                      $this->collCommonExecContractantsRelatedByIdAgentModifPartial = true;
                    }

                    $collCommonExecContractantsRelatedByIdAgentModif->getInternalIterator()->rewind();

                    return $collCommonExecContractantsRelatedByIdAgentModif;
                }

                if ($partial && $this->collCommonExecContractantsRelatedByIdAgentModif) {
                    foreach ($this->collCommonExecContractantsRelatedByIdAgentModif as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContractantsRelatedByIdAgentModif[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContractantsRelatedByIdAgentModif = $collCommonExecContractantsRelatedByIdAgentModif;
                $this->collCommonExecContractantsRelatedByIdAgentModifPartial = false;
            }
        }

        return $this->collCommonExecContractantsRelatedByIdAgentModif;
    }

    /**
     * Sets a collection of CommonExecContractantRelatedByIdAgentModif objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContractantsRelatedByIdAgentModif A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecContractantsRelatedByIdAgentModif(PropelCollection $commonExecContractantsRelatedByIdAgentModif, PropelPDO $con = null)
    {
        $commonExecContractantsRelatedByIdAgentModifToDelete = $this->getCommonExecContractantsRelatedByIdAgentModif(new Criteria(), $con)->diff($commonExecContractantsRelatedByIdAgentModif);


        $this->commonExecContractantsRelatedByIdAgentModifScheduledForDeletion = $commonExecContractantsRelatedByIdAgentModifToDelete;

        foreach ($commonExecContractantsRelatedByIdAgentModifToDelete as $commonExecContractantRelatedByIdAgentModifRemoved) {
            $commonExecContractantRelatedByIdAgentModifRemoved->setCommonAgentRelatedByIdAgentModif(null);
        }

        $this->collCommonExecContractantsRelatedByIdAgentModif = null;
        foreach ($commonExecContractantsRelatedByIdAgentModif as $commonExecContractantRelatedByIdAgentModif) {
            $this->addCommonExecContractantRelatedByIdAgentModif($commonExecContractantRelatedByIdAgentModif);
        }

        $this->collCommonExecContractantsRelatedByIdAgentModif = $commonExecContractantsRelatedByIdAgentModif;
        $this->collCommonExecContractantsRelatedByIdAgentModifPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContractant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContractant objects.
     * @throws PropelException
     */
    public function countCommonExecContractantsRelatedByIdAgentModif(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContractantsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecContractantsRelatedByIdAgentModif || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContractantsRelatedByIdAgentModif) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContractantsRelatedByIdAgentModif());
            }
            $query = CommonExecContractantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentModif($this)
                ->count($con);
        }

        return count($this->collCommonExecContractantsRelatedByIdAgentModif);
    }

    /**
     * Method called to associate a CommonExecContractant object to this object
     * through the CommonExecContractant foreign key attribute.
     *
     * @param   CommonExecContractant $l CommonExecContractant
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecContractantRelatedByIdAgentModif(CommonExecContractant $l)
    {
        if ($this->collCommonExecContractantsRelatedByIdAgentModif === null) {
            $this->initCommonExecContractantsRelatedByIdAgentModif();
            $this->collCommonExecContractantsRelatedByIdAgentModifPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContractantsRelatedByIdAgentModif->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContractantRelatedByIdAgentModif($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContractantRelatedByIdAgentModif $commonExecContractantRelatedByIdAgentModif The commonExecContractantRelatedByIdAgentModif object to add.
     */
    protected function doAddCommonExecContractantRelatedByIdAgentModif($commonExecContractantRelatedByIdAgentModif)
    {
        $this->collCommonExecContractantsRelatedByIdAgentModif[]= $commonExecContractantRelatedByIdAgentModif;
        $commonExecContractantRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif($this);
    }

    /**
     * @param	CommonExecContractantRelatedByIdAgentModif $commonExecContractantRelatedByIdAgentModif The commonExecContractantRelatedByIdAgentModif object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecContractantRelatedByIdAgentModif($commonExecContractantRelatedByIdAgentModif)
    {
        if ($this->getCommonExecContractantsRelatedByIdAgentModif()->contains($commonExecContractantRelatedByIdAgentModif)) {
            $this->collCommonExecContractantsRelatedByIdAgentModif->remove($this->collCommonExecContractantsRelatedByIdAgentModif->search($commonExecContractantRelatedByIdAgentModif));
            if (null === $this->commonExecContractantsRelatedByIdAgentModifScheduledForDeletion) {
                $this->commonExecContractantsRelatedByIdAgentModifScheduledForDeletion = clone $this->collCommonExecContractantsRelatedByIdAgentModif;
                $this->commonExecContractantsRelatedByIdAgentModifScheduledForDeletion->clear();
            }
            $this->commonExecContractantsRelatedByIdAgentModifScheduledForDeletion[]= $commonExecContractantRelatedByIdAgentModif;
            $commonExecContractantRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdAgentModifJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecContractantsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdAgentModifJoinCommonExecContractantRelatedByIdParent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractantRelatedByIdParent', $join_behavior);

        return $this->getCommonExecContractantsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdAgentModifJoinCommonExecTypeContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeContractant', $join_behavior);

        return $this->getCommonExecContractantsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContractantsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsRelatedByIdAgentModifJoinCommonExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeStructure', $join_behavior);

        return $this->getCommonExecContractantsRelatedByIdAgentModif($query, $con);
    }

    /**
     * Clears out the collCommonExecContratsRelatedByIdAgentCrea collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecContratsRelatedByIdAgentCrea()
     */
    public function clearCommonExecContratsRelatedByIdAgentCrea()
    {
        $this->collCommonExecContratsRelatedByIdAgentCrea = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContratsRelatedByIdAgentCreaPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContratsRelatedByIdAgentCrea collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContratsRelatedByIdAgentCrea($v = true)
    {
        $this->collCommonExecContratsRelatedByIdAgentCreaPartial = $v;
    }

    /**
     * Initializes the collCommonExecContratsRelatedByIdAgentCrea collection.
     *
     * By default this just sets the collCommonExecContratsRelatedByIdAgentCrea collection to an empty array (like clearcollCommonExecContratsRelatedByIdAgentCrea());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContratsRelatedByIdAgentCrea($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContratsRelatedByIdAgentCrea && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContratsRelatedByIdAgentCrea = new PropelObjectCollection();
        $this->collCommonExecContratsRelatedByIdAgentCrea->setModel('CommonExecContrat');
    }

    /**
     * Gets an array of CommonExecContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     * @throws PropelException
     */
    public function getCommonExecContratsRelatedByIdAgentCrea($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContratsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecContratsRelatedByIdAgentCrea || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContratsRelatedByIdAgentCrea) {
                // return empty collection
                $this->initCommonExecContratsRelatedByIdAgentCrea();
            } else {
                $collCommonExecContratsRelatedByIdAgentCrea = CommonExecContratQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentCrea($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContratsRelatedByIdAgentCreaPartial && count($collCommonExecContratsRelatedByIdAgentCrea)) {
                      $this->initCommonExecContratsRelatedByIdAgentCrea(false);

                      foreach ($collCommonExecContratsRelatedByIdAgentCrea as $obj) {
                        if (false == $this->collCommonExecContratsRelatedByIdAgentCrea->contains($obj)) {
                          $this->collCommonExecContratsRelatedByIdAgentCrea->append($obj);
                        }
                      }

                      $this->collCommonExecContratsRelatedByIdAgentCreaPartial = true;
                    }

                    $collCommonExecContratsRelatedByIdAgentCrea->getInternalIterator()->rewind();

                    return $collCommonExecContratsRelatedByIdAgentCrea;
                }

                if ($partial && $this->collCommonExecContratsRelatedByIdAgentCrea) {
                    foreach ($this->collCommonExecContratsRelatedByIdAgentCrea as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContratsRelatedByIdAgentCrea[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContratsRelatedByIdAgentCrea = $collCommonExecContratsRelatedByIdAgentCrea;
                $this->collCommonExecContratsRelatedByIdAgentCreaPartial = false;
            }
        }

        return $this->collCommonExecContratsRelatedByIdAgentCrea;
    }

    /**
     * Sets a collection of CommonExecContratRelatedByIdAgentCrea objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContratsRelatedByIdAgentCrea A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecContratsRelatedByIdAgentCrea(PropelCollection $commonExecContratsRelatedByIdAgentCrea, PropelPDO $con = null)
    {
        $commonExecContratsRelatedByIdAgentCreaToDelete = $this->getCommonExecContratsRelatedByIdAgentCrea(new Criteria(), $con)->diff($commonExecContratsRelatedByIdAgentCrea);


        $this->commonExecContratsRelatedByIdAgentCreaScheduledForDeletion = $commonExecContratsRelatedByIdAgentCreaToDelete;

        foreach ($commonExecContratsRelatedByIdAgentCreaToDelete as $commonExecContratRelatedByIdAgentCreaRemoved) {
            $commonExecContratRelatedByIdAgentCreaRemoved->setCommonAgentRelatedByIdAgentCrea(null);
        }

        $this->collCommonExecContratsRelatedByIdAgentCrea = null;
        foreach ($commonExecContratsRelatedByIdAgentCrea as $commonExecContratRelatedByIdAgentCrea) {
            $this->addCommonExecContratRelatedByIdAgentCrea($commonExecContratRelatedByIdAgentCrea);
        }

        $this->collCommonExecContratsRelatedByIdAgentCrea = $commonExecContratsRelatedByIdAgentCrea;
        $this->collCommonExecContratsRelatedByIdAgentCreaPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContrat objects.
     * @throws PropelException
     */
    public function countCommonExecContratsRelatedByIdAgentCrea(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContratsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecContratsRelatedByIdAgentCrea || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContratsRelatedByIdAgentCrea) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContratsRelatedByIdAgentCrea());
            }
            $query = CommonExecContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentCrea($this)
                ->count($con);
        }

        return count($this->collCommonExecContratsRelatedByIdAgentCrea);
    }

    /**
     * Method called to associate a CommonExecContrat object to this object
     * through the CommonExecContrat foreign key attribute.
     *
     * @param   CommonExecContrat $l CommonExecContrat
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecContratRelatedByIdAgentCrea(CommonExecContrat $l)
    {
        if ($this->collCommonExecContratsRelatedByIdAgentCrea === null) {
            $this->initCommonExecContratsRelatedByIdAgentCrea();
            $this->collCommonExecContratsRelatedByIdAgentCreaPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContratsRelatedByIdAgentCrea->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContratRelatedByIdAgentCrea($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContratRelatedByIdAgentCrea $commonExecContratRelatedByIdAgentCrea The commonExecContratRelatedByIdAgentCrea object to add.
     */
    protected function doAddCommonExecContratRelatedByIdAgentCrea($commonExecContratRelatedByIdAgentCrea)
    {
        $this->collCommonExecContratsRelatedByIdAgentCrea[]= $commonExecContratRelatedByIdAgentCrea;
        $commonExecContratRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea($this);
    }

    /**
     * @param	CommonExecContratRelatedByIdAgentCrea $commonExecContratRelatedByIdAgentCrea The commonExecContratRelatedByIdAgentCrea object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecContratRelatedByIdAgentCrea($commonExecContratRelatedByIdAgentCrea)
    {
        if ($this->getCommonExecContratsRelatedByIdAgentCrea()->contains($commonExecContratRelatedByIdAgentCrea)) {
            $this->collCommonExecContratsRelatedByIdAgentCrea->remove($this->collCommonExecContratsRelatedByIdAgentCrea->search($commonExecContratRelatedByIdAgentCrea));
            if (null === $this->commonExecContratsRelatedByIdAgentCreaScheduledForDeletion) {
                $this->commonExecContratsRelatedByIdAgentCreaScheduledForDeletion = clone $this->collCommonExecContratsRelatedByIdAgentCrea;
                $this->commonExecContratsRelatedByIdAgentCreaScheduledForDeletion->clear();
            }
            $this->commonExecContratsRelatedByIdAgentCreaScheduledForDeletion[]= $commonExecContratRelatedByIdAgentCrea;
            $commonExecContratRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContratsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsRelatedByIdAgentCreaJoinCommonCategorieConsultation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonCategorieConsultation', $join_behavior);

        return $this->getCommonExecContratsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContratsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsRelatedByIdAgentCreaJoinCommonExecTypeContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeContrat', $join_behavior);

        return $this->getCommonExecContratsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContratsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsRelatedByIdAgentCreaJoinCommonExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeStructure', $join_behavior);

        return $this->getCommonExecContratsRelatedByIdAgentCrea($query, $con);
    }

    /**
     * Clears out the collCommonExecContratsRelatedByIdAgentGestion collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecContratsRelatedByIdAgentGestion()
     */
    public function clearCommonExecContratsRelatedByIdAgentGestion()
    {
        $this->collCommonExecContratsRelatedByIdAgentGestion = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContratsRelatedByIdAgentGestionPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContratsRelatedByIdAgentGestion collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContratsRelatedByIdAgentGestion($v = true)
    {
        $this->collCommonExecContratsRelatedByIdAgentGestionPartial = $v;
    }

    /**
     * Initializes the collCommonExecContratsRelatedByIdAgentGestion collection.
     *
     * By default this just sets the collCommonExecContratsRelatedByIdAgentGestion collection to an empty array (like clearcollCommonExecContratsRelatedByIdAgentGestion());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContratsRelatedByIdAgentGestion($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContratsRelatedByIdAgentGestion && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContratsRelatedByIdAgentGestion = new PropelObjectCollection();
        $this->collCommonExecContratsRelatedByIdAgentGestion->setModel('CommonExecContrat');
    }

    /**
     * Gets an array of CommonExecContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     * @throws PropelException
     */
    public function getCommonExecContratsRelatedByIdAgentGestion($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContratsRelatedByIdAgentGestionPartial && !$this->isNew();
        if (null === $this->collCommonExecContratsRelatedByIdAgentGestion || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContratsRelatedByIdAgentGestion) {
                // return empty collection
                $this->initCommonExecContratsRelatedByIdAgentGestion();
            } else {
                $collCommonExecContratsRelatedByIdAgentGestion = CommonExecContratQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentGestion($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContratsRelatedByIdAgentGestionPartial && count($collCommonExecContratsRelatedByIdAgentGestion)) {
                      $this->initCommonExecContratsRelatedByIdAgentGestion(false);

                      foreach ($collCommonExecContratsRelatedByIdAgentGestion as $obj) {
                        if (false == $this->collCommonExecContratsRelatedByIdAgentGestion->contains($obj)) {
                          $this->collCommonExecContratsRelatedByIdAgentGestion->append($obj);
                        }
                      }

                      $this->collCommonExecContratsRelatedByIdAgentGestionPartial = true;
                    }

                    $collCommonExecContratsRelatedByIdAgentGestion->getInternalIterator()->rewind();

                    return $collCommonExecContratsRelatedByIdAgentGestion;
                }

                if ($partial && $this->collCommonExecContratsRelatedByIdAgentGestion) {
                    foreach ($this->collCommonExecContratsRelatedByIdAgentGestion as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContratsRelatedByIdAgentGestion[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContratsRelatedByIdAgentGestion = $collCommonExecContratsRelatedByIdAgentGestion;
                $this->collCommonExecContratsRelatedByIdAgentGestionPartial = false;
            }
        }

        return $this->collCommonExecContratsRelatedByIdAgentGestion;
    }

    /**
     * Sets a collection of CommonExecContratRelatedByIdAgentGestion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContratsRelatedByIdAgentGestion A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecContratsRelatedByIdAgentGestion(PropelCollection $commonExecContratsRelatedByIdAgentGestion, PropelPDO $con = null)
    {
        $commonExecContratsRelatedByIdAgentGestionToDelete = $this->getCommonExecContratsRelatedByIdAgentGestion(new Criteria(), $con)->diff($commonExecContratsRelatedByIdAgentGestion);


        $this->commonExecContratsRelatedByIdAgentGestionScheduledForDeletion = $commonExecContratsRelatedByIdAgentGestionToDelete;

        foreach ($commonExecContratsRelatedByIdAgentGestionToDelete as $commonExecContratRelatedByIdAgentGestionRemoved) {
            $commonExecContratRelatedByIdAgentGestionRemoved->setCommonAgentRelatedByIdAgentGestion(null);
        }

        $this->collCommonExecContratsRelatedByIdAgentGestion = null;
        foreach ($commonExecContratsRelatedByIdAgentGestion as $commonExecContratRelatedByIdAgentGestion) {
            $this->addCommonExecContratRelatedByIdAgentGestion($commonExecContratRelatedByIdAgentGestion);
        }

        $this->collCommonExecContratsRelatedByIdAgentGestion = $commonExecContratsRelatedByIdAgentGestion;
        $this->collCommonExecContratsRelatedByIdAgentGestionPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContrat objects.
     * @throws PropelException
     */
    public function countCommonExecContratsRelatedByIdAgentGestion(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContratsRelatedByIdAgentGestionPartial && !$this->isNew();
        if (null === $this->collCommonExecContratsRelatedByIdAgentGestion || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContratsRelatedByIdAgentGestion) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContratsRelatedByIdAgentGestion());
            }
            $query = CommonExecContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentGestion($this)
                ->count($con);
        }

        return count($this->collCommonExecContratsRelatedByIdAgentGestion);
    }

    /**
     * Method called to associate a CommonExecContrat object to this object
     * through the CommonExecContrat foreign key attribute.
     *
     * @param   CommonExecContrat $l CommonExecContrat
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecContratRelatedByIdAgentGestion(CommonExecContrat $l)
    {
        if ($this->collCommonExecContratsRelatedByIdAgentGestion === null) {
            $this->initCommonExecContratsRelatedByIdAgentGestion();
            $this->collCommonExecContratsRelatedByIdAgentGestionPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContratsRelatedByIdAgentGestion->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContratRelatedByIdAgentGestion($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContratRelatedByIdAgentGestion $commonExecContratRelatedByIdAgentGestion The commonExecContratRelatedByIdAgentGestion object to add.
     */
    protected function doAddCommonExecContratRelatedByIdAgentGestion($commonExecContratRelatedByIdAgentGestion)
    {
        $this->collCommonExecContratsRelatedByIdAgentGestion[]= $commonExecContratRelatedByIdAgentGestion;
        $commonExecContratRelatedByIdAgentGestion->setCommonAgentRelatedByIdAgentGestion($this);
    }

    /**
     * @param	CommonExecContratRelatedByIdAgentGestion $commonExecContratRelatedByIdAgentGestion The commonExecContratRelatedByIdAgentGestion object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecContratRelatedByIdAgentGestion($commonExecContratRelatedByIdAgentGestion)
    {
        if ($this->getCommonExecContratsRelatedByIdAgentGestion()->contains($commonExecContratRelatedByIdAgentGestion)) {
            $this->collCommonExecContratsRelatedByIdAgentGestion->remove($this->collCommonExecContratsRelatedByIdAgentGestion->search($commonExecContratRelatedByIdAgentGestion));
            if (null === $this->commonExecContratsRelatedByIdAgentGestionScheduledForDeletion) {
                $this->commonExecContratsRelatedByIdAgentGestionScheduledForDeletion = clone $this->collCommonExecContratsRelatedByIdAgentGestion;
                $this->commonExecContratsRelatedByIdAgentGestionScheduledForDeletion->clear();
            }
            $this->commonExecContratsRelatedByIdAgentGestionScheduledForDeletion[]= $commonExecContratRelatedByIdAgentGestion;
            $commonExecContratRelatedByIdAgentGestion->setCommonAgentRelatedByIdAgentGestion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContratsRelatedByIdAgentGestion from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsRelatedByIdAgentGestionJoinCommonCategorieConsultation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonCategorieConsultation', $join_behavior);

        return $this->getCommonExecContratsRelatedByIdAgentGestion($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContratsRelatedByIdAgentGestion from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsRelatedByIdAgentGestionJoinCommonExecTypeContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeContrat', $join_behavior);

        return $this->getCommonExecContratsRelatedByIdAgentGestion($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContratsRelatedByIdAgentGestion from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsRelatedByIdAgentGestionJoinCommonExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeStructure', $join_behavior);

        return $this->getCommonExecContratsRelatedByIdAgentGestion($query, $con);
    }

    /**
     * Clears out the collCommonExecContratsRelatedByIdAgentModif collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecContratsRelatedByIdAgentModif()
     */
    public function clearCommonExecContratsRelatedByIdAgentModif()
    {
        $this->collCommonExecContratsRelatedByIdAgentModif = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContratsRelatedByIdAgentModifPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContratsRelatedByIdAgentModif collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContratsRelatedByIdAgentModif($v = true)
    {
        $this->collCommonExecContratsRelatedByIdAgentModifPartial = $v;
    }

    /**
     * Initializes the collCommonExecContratsRelatedByIdAgentModif collection.
     *
     * By default this just sets the collCommonExecContratsRelatedByIdAgentModif collection to an empty array (like clearcollCommonExecContratsRelatedByIdAgentModif());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContratsRelatedByIdAgentModif($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContratsRelatedByIdAgentModif && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContratsRelatedByIdAgentModif = new PropelObjectCollection();
        $this->collCommonExecContratsRelatedByIdAgentModif->setModel('CommonExecContrat');
    }

    /**
     * Gets an array of CommonExecContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     * @throws PropelException
     */
    public function getCommonExecContratsRelatedByIdAgentModif($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContratsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecContratsRelatedByIdAgentModif || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContratsRelatedByIdAgentModif) {
                // return empty collection
                $this->initCommonExecContratsRelatedByIdAgentModif();
            } else {
                $collCommonExecContratsRelatedByIdAgentModif = CommonExecContratQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentModif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContratsRelatedByIdAgentModifPartial && count($collCommonExecContratsRelatedByIdAgentModif)) {
                      $this->initCommonExecContratsRelatedByIdAgentModif(false);

                      foreach ($collCommonExecContratsRelatedByIdAgentModif as $obj) {
                        if (false == $this->collCommonExecContratsRelatedByIdAgentModif->contains($obj)) {
                          $this->collCommonExecContratsRelatedByIdAgentModif->append($obj);
                        }
                      }

                      $this->collCommonExecContratsRelatedByIdAgentModifPartial = true;
                    }

                    $collCommonExecContratsRelatedByIdAgentModif->getInternalIterator()->rewind();

                    return $collCommonExecContratsRelatedByIdAgentModif;
                }

                if ($partial && $this->collCommonExecContratsRelatedByIdAgentModif) {
                    foreach ($this->collCommonExecContratsRelatedByIdAgentModif as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContratsRelatedByIdAgentModif[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContratsRelatedByIdAgentModif = $collCommonExecContratsRelatedByIdAgentModif;
                $this->collCommonExecContratsRelatedByIdAgentModifPartial = false;
            }
        }

        return $this->collCommonExecContratsRelatedByIdAgentModif;
    }

    /**
     * Sets a collection of CommonExecContratRelatedByIdAgentModif objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContratsRelatedByIdAgentModif A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecContratsRelatedByIdAgentModif(PropelCollection $commonExecContratsRelatedByIdAgentModif, PropelPDO $con = null)
    {
        $commonExecContratsRelatedByIdAgentModifToDelete = $this->getCommonExecContratsRelatedByIdAgentModif(new Criteria(), $con)->diff($commonExecContratsRelatedByIdAgentModif);


        $this->commonExecContratsRelatedByIdAgentModifScheduledForDeletion = $commonExecContratsRelatedByIdAgentModifToDelete;

        foreach ($commonExecContratsRelatedByIdAgentModifToDelete as $commonExecContratRelatedByIdAgentModifRemoved) {
            $commonExecContratRelatedByIdAgentModifRemoved->setCommonAgentRelatedByIdAgentModif(null);
        }

        $this->collCommonExecContratsRelatedByIdAgentModif = null;
        foreach ($commonExecContratsRelatedByIdAgentModif as $commonExecContratRelatedByIdAgentModif) {
            $this->addCommonExecContratRelatedByIdAgentModif($commonExecContratRelatedByIdAgentModif);
        }

        $this->collCommonExecContratsRelatedByIdAgentModif = $commonExecContratsRelatedByIdAgentModif;
        $this->collCommonExecContratsRelatedByIdAgentModifPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContrat objects.
     * @throws PropelException
     */
    public function countCommonExecContratsRelatedByIdAgentModif(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContratsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecContratsRelatedByIdAgentModif || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContratsRelatedByIdAgentModif) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContratsRelatedByIdAgentModif());
            }
            $query = CommonExecContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentModif($this)
                ->count($con);
        }

        return count($this->collCommonExecContratsRelatedByIdAgentModif);
    }

    /**
     * Method called to associate a CommonExecContrat object to this object
     * through the CommonExecContrat foreign key attribute.
     *
     * @param   CommonExecContrat $l CommonExecContrat
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecContratRelatedByIdAgentModif(CommonExecContrat $l)
    {
        if ($this->collCommonExecContratsRelatedByIdAgentModif === null) {
            $this->initCommonExecContratsRelatedByIdAgentModif();
            $this->collCommonExecContratsRelatedByIdAgentModifPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContratsRelatedByIdAgentModif->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContratRelatedByIdAgentModif($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContratRelatedByIdAgentModif $commonExecContratRelatedByIdAgentModif The commonExecContratRelatedByIdAgentModif object to add.
     */
    protected function doAddCommonExecContratRelatedByIdAgentModif($commonExecContratRelatedByIdAgentModif)
    {
        $this->collCommonExecContratsRelatedByIdAgentModif[]= $commonExecContratRelatedByIdAgentModif;
        $commonExecContratRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif($this);
    }

    /**
     * @param	CommonExecContratRelatedByIdAgentModif $commonExecContratRelatedByIdAgentModif The commonExecContratRelatedByIdAgentModif object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecContratRelatedByIdAgentModif($commonExecContratRelatedByIdAgentModif)
    {
        if ($this->getCommonExecContratsRelatedByIdAgentModif()->contains($commonExecContratRelatedByIdAgentModif)) {
            $this->collCommonExecContratsRelatedByIdAgentModif->remove($this->collCommonExecContratsRelatedByIdAgentModif->search($commonExecContratRelatedByIdAgentModif));
            if (null === $this->commonExecContratsRelatedByIdAgentModifScheduledForDeletion) {
                $this->commonExecContratsRelatedByIdAgentModifScheduledForDeletion = clone $this->collCommonExecContratsRelatedByIdAgentModif;
                $this->commonExecContratsRelatedByIdAgentModifScheduledForDeletion->clear();
            }
            $this->commonExecContratsRelatedByIdAgentModifScheduledForDeletion[]= $commonExecContratRelatedByIdAgentModif;
            $commonExecContratRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContratsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsRelatedByIdAgentModifJoinCommonCategorieConsultation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonCategorieConsultation', $join_behavior);

        return $this->getCommonExecContratsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContratsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsRelatedByIdAgentModifJoinCommonExecTypeContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeContrat', $join_behavior);

        return $this->getCommonExecContratsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecContratsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContrat[] List of CommonExecContrat objects
     */
    public function getCommonExecContratsRelatedByIdAgentModifJoinCommonExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeStructure', $join_behavior);

        return $this->getCommonExecContratsRelatedByIdAgentModif($query, $con);
    }

    /**
     * Clears out the collCommonExecDossierPaiements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecDossierPaiements()
     */
    public function clearCommonExecDossierPaiements()
    {
        $this->collCommonExecDossierPaiements = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecDossierPaiementsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecDossierPaiements collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecDossierPaiements($v = true)
    {
        $this->collCommonExecDossierPaiementsPartial = $v;
    }

    /**
     * Initializes the collCommonExecDossierPaiements collection.
     *
     * By default this just sets the collCommonExecDossierPaiements collection to an empty array (like clearcollCommonExecDossierPaiements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecDossierPaiements($overrideExisting = true)
    {
        if (null !== $this->collCommonExecDossierPaiements && !$overrideExisting) {
            return;
        }
        $this->collCommonExecDossierPaiements = new PropelObjectCollection();
        $this->collCommonExecDossierPaiements->setModel('CommonExecDossierPaiement');
    }

    /**
     * Gets an array of CommonExecDossierPaiement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecDossierPaiement[] List of CommonExecDossierPaiement objects
     * @throws PropelException
     */
    public function getCommonExecDossierPaiements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecDossierPaiementsPartial && !$this->isNew();
        if (null === $this->collCommonExecDossierPaiements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecDossierPaiements) {
                // return empty collection
                $this->initCommonExecDossierPaiements();
            } else {
                $collCommonExecDossierPaiements = CommonExecDossierPaiementQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecDossierPaiementsPartial && count($collCommonExecDossierPaiements)) {
                      $this->initCommonExecDossierPaiements(false);

                      foreach ($collCommonExecDossierPaiements as $obj) {
                        if (false == $this->collCommonExecDossierPaiements->contains($obj)) {
                          $this->collCommonExecDossierPaiements->append($obj);
                        }
                      }

                      $this->collCommonExecDossierPaiementsPartial = true;
                    }

                    $collCommonExecDossierPaiements->getInternalIterator()->rewind();

                    return $collCommonExecDossierPaiements;
                }

                if ($partial && $this->collCommonExecDossierPaiements) {
                    foreach ($this->collCommonExecDossierPaiements as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecDossierPaiements[] = $obj;
                        }
                    }
                }

                $this->collCommonExecDossierPaiements = $collCommonExecDossierPaiements;
                $this->collCommonExecDossierPaiementsPartial = false;
            }
        }

        return $this->collCommonExecDossierPaiements;
    }

    /**
     * Sets a collection of CommonExecDossierPaiement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecDossierPaiements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecDossierPaiements(PropelCollection $commonExecDossierPaiements, PropelPDO $con = null)
    {
        $commonExecDossierPaiementsToDelete = $this->getCommonExecDossierPaiements(new Criteria(), $con)->diff($commonExecDossierPaiements);


        $this->commonExecDossierPaiementsScheduledForDeletion = $commonExecDossierPaiementsToDelete;

        foreach ($commonExecDossierPaiementsToDelete as $commonExecDossierPaiementRemoved) {
            $commonExecDossierPaiementRemoved->setCommonAgent(null);
        }

        $this->collCommonExecDossierPaiements = null;
        foreach ($commonExecDossierPaiements as $commonExecDossierPaiement) {
            $this->addCommonExecDossierPaiement($commonExecDossierPaiement);
        }

        $this->collCommonExecDossierPaiements = $commonExecDossierPaiements;
        $this->collCommonExecDossierPaiementsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecDossierPaiement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecDossierPaiement objects.
     * @throws PropelException
     */
    public function countCommonExecDossierPaiements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecDossierPaiementsPartial && !$this->isNew();
        if (null === $this->collCommonExecDossierPaiements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecDossierPaiements) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecDossierPaiements());
            }
            $query = CommonExecDossierPaiementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonExecDossierPaiements);
    }

    /**
     * Method called to associate a CommonExecDossierPaiement object to this object
     * through the CommonExecDossierPaiement foreign key attribute.
     *
     * @param   CommonExecDossierPaiement $l CommonExecDossierPaiement
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecDossierPaiement(CommonExecDossierPaiement $l)
    {
        if ($this->collCommonExecDossierPaiements === null) {
            $this->initCommonExecDossierPaiements();
            $this->collCommonExecDossierPaiementsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecDossierPaiements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecDossierPaiement($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecDossierPaiement $commonExecDossierPaiement The commonExecDossierPaiement object to add.
     */
    protected function doAddCommonExecDossierPaiement($commonExecDossierPaiement)
    {
        $this->collCommonExecDossierPaiements[]= $commonExecDossierPaiement;
        $commonExecDossierPaiement->setCommonAgent($this);
    }

    /**
     * @param	CommonExecDossierPaiement $commonExecDossierPaiement The commonExecDossierPaiement object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecDossierPaiement($commonExecDossierPaiement)
    {
        if ($this->getCommonExecDossierPaiements()->contains($commonExecDossierPaiement)) {
            $this->collCommonExecDossierPaiements->remove($this->collCommonExecDossierPaiements->search($commonExecDossierPaiement));
            if (null === $this->commonExecDossierPaiementsScheduledForDeletion) {
                $this->commonExecDossierPaiementsScheduledForDeletion = clone $this->collCommonExecDossierPaiements;
                $this->commonExecDossierPaiementsScheduledForDeletion->clear();
            }
            $this->commonExecDossierPaiementsScheduledForDeletion[]= $commonExecDossierPaiement;
            $commonExecDossierPaiement->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecDossierPaiements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecDossierPaiement[] List of CommonExecDossierPaiement objects
     */
    public function getCommonExecDossierPaiementsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecDossierPaiementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecDossierPaiements($query, $con);
    }

    /**
     * Clears out the collCommonExecEvenementsRelatedByIdAgentCrea collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecEvenementsRelatedByIdAgentCrea()
     */
    public function clearCommonExecEvenementsRelatedByIdAgentCrea()
    {
        $this->collCommonExecEvenementsRelatedByIdAgentCrea = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecEvenementsRelatedByIdAgentCreaPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecEvenementsRelatedByIdAgentCrea collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecEvenementsRelatedByIdAgentCrea($v = true)
    {
        $this->collCommonExecEvenementsRelatedByIdAgentCreaPartial = $v;
    }

    /**
     * Initializes the collCommonExecEvenementsRelatedByIdAgentCrea collection.
     *
     * By default this just sets the collCommonExecEvenementsRelatedByIdAgentCrea collection to an empty array (like clearcollCommonExecEvenementsRelatedByIdAgentCrea());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecEvenementsRelatedByIdAgentCrea($overrideExisting = true)
    {
        if (null !== $this->collCommonExecEvenementsRelatedByIdAgentCrea && !$overrideExisting) {
            return;
        }
        $this->collCommonExecEvenementsRelatedByIdAgentCrea = new PropelObjectCollection();
        $this->collCommonExecEvenementsRelatedByIdAgentCrea->setModel('CommonExecEvenement');
    }

    /**
     * Gets an array of CommonExecEvenement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     * @throws PropelException
     */
    public function getCommonExecEvenementsRelatedByIdAgentCrea($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenementsRelatedByIdAgentCrea || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenementsRelatedByIdAgentCrea) {
                // return empty collection
                $this->initCommonExecEvenementsRelatedByIdAgentCrea();
            } else {
                $collCommonExecEvenementsRelatedByIdAgentCrea = CommonExecEvenementQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentCrea($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecEvenementsRelatedByIdAgentCreaPartial && count($collCommonExecEvenementsRelatedByIdAgentCrea)) {
                      $this->initCommonExecEvenementsRelatedByIdAgentCrea(false);

                      foreach ($collCommonExecEvenementsRelatedByIdAgentCrea as $obj) {
                        if (false == $this->collCommonExecEvenementsRelatedByIdAgentCrea->contains($obj)) {
                          $this->collCommonExecEvenementsRelatedByIdAgentCrea->append($obj);
                        }
                      }

                      $this->collCommonExecEvenementsRelatedByIdAgentCreaPartial = true;
                    }

                    $collCommonExecEvenementsRelatedByIdAgentCrea->getInternalIterator()->rewind();

                    return $collCommonExecEvenementsRelatedByIdAgentCrea;
                }

                if ($partial && $this->collCommonExecEvenementsRelatedByIdAgentCrea) {
                    foreach ($this->collCommonExecEvenementsRelatedByIdAgentCrea as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecEvenementsRelatedByIdAgentCrea[] = $obj;
                        }
                    }
                }

                $this->collCommonExecEvenementsRelatedByIdAgentCrea = $collCommonExecEvenementsRelatedByIdAgentCrea;
                $this->collCommonExecEvenementsRelatedByIdAgentCreaPartial = false;
            }
        }

        return $this->collCommonExecEvenementsRelatedByIdAgentCrea;
    }

    /**
     * Sets a collection of CommonExecEvenementRelatedByIdAgentCrea objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecEvenementsRelatedByIdAgentCrea A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecEvenementsRelatedByIdAgentCrea(PropelCollection $commonExecEvenementsRelatedByIdAgentCrea, PropelPDO $con = null)
    {
        $commonExecEvenementsRelatedByIdAgentCreaToDelete = $this->getCommonExecEvenementsRelatedByIdAgentCrea(new Criteria(), $con)->diff($commonExecEvenementsRelatedByIdAgentCrea);


        $this->commonExecEvenementsRelatedByIdAgentCreaScheduledForDeletion = $commonExecEvenementsRelatedByIdAgentCreaToDelete;

        foreach ($commonExecEvenementsRelatedByIdAgentCreaToDelete as $commonExecEvenementRelatedByIdAgentCreaRemoved) {
            $commonExecEvenementRelatedByIdAgentCreaRemoved->setCommonAgentRelatedByIdAgentCrea(null);
        }

        $this->collCommonExecEvenementsRelatedByIdAgentCrea = null;
        foreach ($commonExecEvenementsRelatedByIdAgentCrea as $commonExecEvenementRelatedByIdAgentCrea) {
            $this->addCommonExecEvenementRelatedByIdAgentCrea($commonExecEvenementRelatedByIdAgentCrea);
        }

        $this->collCommonExecEvenementsRelatedByIdAgentCrea = $commonExecEvenementsRelatedByIdAgentCrea;
        $this->collCommonExecEvenementsRelatedByIdAgentCreaPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecEvenement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecEvenement objects.
     * @throws PropelException
     */
    public function countCommonExecEvenementsRelatedByIdAgentCrea(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenementsRelatedByIdAgentCrea || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenementsRelatedByIdAgentCrea) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecEvenementsRelatedByIdAgentCrea());
            }
            $query = CommonExecEvenementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentCrea($this)
                ->count($con);
        }

        return count($this->collCommonExecEvenementsRelatedByIdAgentCrea);
    }

    /**
     * Method called to associate a CommonExecEvenement object to this object
     * through the CommonExecEvenement foreign key attribute.
     *
     * @param   CommonExecEvenement $l CommonExecEvenement
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecEvenementRelatedByIdAgentCrea(CommonExecEvenement $l)
    {
        if ($this->collCommonExecEvenementsRelatedByIdAgentCrea === null) {
            $this->initCommonExecEvenementsRelatedByIdAgentCrea();
            $this->collCommonExecEvenementsRelatedByIdAgentCreaPartial = true;
        }
        if (!in_array($l, $this->collCommonExecEvenementsRelatedByIdAgentCrea->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecEvenementRelatedByIdAgentCrea($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecEvenementRelatedByIdAgentCrea $commonExecEvenementRelatedByIdAgentCrea The commonExecEvenementRelatedByIdAgentCrea object to add.
     */
    protected function doAddCommonExecEvenementRelatedByIdAgentCrea($commonExecEvenementRelatedByIdAgentCrea)
    {
        $this->collCommonExecEvenementsRelatedByIdAgentCrea[]= $commonExecEvenementRelatedByIdAgentCrea;
        $commonExecEvenementRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea($this);
    }

    /**
     * @param	CommonExecEvenementRelatedByIdAgentCrea $commonExecEvenementRelatedByIdAgentCrea The commonExecEvenementRelatedByIdAgentCrea object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecEvenementRelatedByIdAgentCrea($commonExecEvenementRelatedByIdAgentCrea)
    {
        if ($this->getCommonExecEvenementsRelatedByIdAgentCrea()->contains($commonExecEvenementRelatedByIdAgentCrea)) {
            $this->collCommonExecEvenementsRelatedByIdAgentCrea->remove($this->collCommonExecEvenementsRelatedByIdAgentCrea->search($commonExecEvenementRelatedByIdAgentCrea));
            if (null === $this->commonExecEvenementsRelatedByIdAgentCreaScheduledForDeletion) {
                $this->commonExecEvenementsRelatedByIdAgentCreaScheduledForDeletion = clone $this->collCommonExecEvenementsRelatedByIdAgentCrea;
                $this->commonExecEvenementsRelatedByIdAgentCreaScheduledForDeletion->clear();
            }
            $this->commonExecEvenementsRelatedByIdAgentCreaScheduledForDeletion[]= $commonExecEvenementRelatedByIdAgentCrea;
            $commonExecEvenementRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentCreaJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentCreaJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentCreaJoinCommonExecPhase($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecPhase', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentCreaJoinCommonExecTypeEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeEvenement', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentCrea($query, $con);
    }

    /**
     * Clears out the collCommonExecEvenementsRelatedByIdAgentModif collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecEvenementsRelatedByIdAgentModif()
     */
    public function clearCommonExecEvenementsRelatedByIdAgentModif()
    {
        $this->collCommonExecEvenementsRelatedByIdAgentModif = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecEvenementsRelatedByIdAgentModifPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecEvenementsRelatedByIdAgentModif collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecEvenementsRelatedByIdAgentModif($v = true)
    {
        $this->collCommonExecEvenementsRelatedByIdAgentModifPartial = $v;
    }

    /**
     * Initializes the collCommonExecEvenementsRelatedByIdAgentModif collection.
     *
     * By default this just sets the collCommonExecEvenementsRelatedByIdAgentModif collection to an empty array (like clearcollCommonExecEvenementsRelatedByIdAgentModif());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecEvenementsRelatedByIdAgentModif($overrideExisting = true)
    {
        if (null !== $this->collCommonExecEvenementsRelatedByIdAgentModif && !$overrideExisting) {
            return;
        }
        $this->collCommonExecEvenementsRelatedByIdAgentModif = new PropelObjectCollection();
        $this->collCommonExecEvenementsRelatedByIdAgentModif->setModel('CommonExecEvenement');
    }

    /**
     * Gets an array of CommonExecEvenement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     * @throws PropelException
     */
    public function getCommonExecEvenementsRelatedByIdAgentModif($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenementsRelatedByIdAgentModif || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenementsRelatedByIdAgentModif) {
                // return empty collection
                $this->initCommonExecEvenementsRelatedByIdAgentModif();
            } else {
                $collCommonExecEvenementsRelatedByIdAgentModif = CommonExecEvenementQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentModif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecEvenementsRelatedByIdAgentModifPartial && count($collCommonExecEvenementsRelatedByIdAgentModif)) {
                      $this->initCommonExecEvenementsRelatedByIdAgentModif(false);

                      foreach ($collCommonExecEvenementsRelatedByIdAgentModif as $obj) {
                        if (false == $this->collCommonExecEvenementsRelatedByIdAgentModif->contains($obj)) {
                          $this->collCommonExecEvenementsRelatedByIdAgentModif->append($obj);
                        }
                      }

                      $this->collCommonExecEvenementsRelatedByIdAgentModifPartial = true;
                    }

                    $collCommonExecEvenementsRelatedByIdAgentModif->getInternalIterator()->rewind();

                    return $collCommonExecEvenementsRelatedByIdAgentModif;
                }

                if ($partial && $this->collCommonExecEvenementsRelatedByIdAgentModif) {
                    foreach ($this->collCommonExecEvenementsRelatedByIdAgentModif as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecEvenementsRelatedByIdAgentModif[] = $obj;
                        }
                    }
                }

                $this->collCommonExecEvenementsRelatedByIdAgentModif = $collCommonExecEvenementsRelatedByIdAgentModif;
                $this->collCommonExecEvenementsRelatedByIdAgentModifPartial = false;
            }
        }

        return $this->collCommonExecEvenementsRelatedByIdAgentModif;
    }

    /**
     * Sets a collection of CommonExecEvenementRelatedByIdAgentModif objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecEvenementsRelatedByIdAgentModif A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecEvenementsRelatedByIdAgentModif(PropelCollection $commonExecEvenementsRelatedByIdAgentModif, PropelPDO $con = null)
    {
        $commonExecEvenementsRelatedByIdAgentModifToDelete = $this->getCommonExecEvenementsRelatedByIdAgentModif(new Criteria(), $con)->diff($commonExecEvenementsRelatedByIdAgentModif);


        $this->commonExecEvenementsRelatedByIdAgentModifScheduledForDeletion = $commonExecEvenementsRelatedByIdAgentModifToDelete;

        foreach ($commonExecEvenementsRelatedByIdAgentModifToDelete as $commonExecEvenementRelatedByIdAgentModifRemoved) {
            $commonExecEvenementRelatedByIdAgentModifRemoved->setCommonAgentRelatedByIdAgentModif(null);
        }

        $this->collCommonExecEvenementsRelatedByIdAgentModif = null;
        foreach ($commonExecEvenementsRelatedByIdAgentModif as $commonExecEvenementRelatedByIdAgentModif) {
            $this->addCommonExecEvenementRelatedByIdAgentModif($commonExecEvenementRelatedByIdAgentModif);
        }

        $this->collCommonExecEvenementsRelatedByIdAgentModif = $commonExecEvenementsRelatedByIdAgentModif;
        $this->collCommonExecEvenementsRelatedByIdAgentModifPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecEvenement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecEvenement objects.
     * @throws PropelException
     */
    public function countCommonExecEvenementsRelatedByIdAgentModif(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenementsRelatedByIdAgentModif || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenementsRelatedByIdAgentModif) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecEvenementsRelatedByIdAgentModif());
            }
            $query = CommonExecEvenementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentModif($this)
                ->count($con);
        }

        return count($this->collCommonExecEvenementsRelatedByIdAgentModif);
    }

    /**
     * Method called to associate a CommonExecEvenement object to this object
     * through the CommonExecEvenement foreign key attribute.
     *
     * @param   CommonExecEvenement $l CommonExecEvenement
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecEvenementRelatedByIdAgentModif(CommonExecEvenement $l)
    {
        if ($this->collCommonExecEvenementsRelatedByIdAgentModif === null) {
            $this->initCommonExecEvenementsRelatedByIdAgentModif();
            $this->collCommonExecEvenementsRelatedByIdAgentModifPartial = true;
        }
        if (!in_array($l, $this->collCommonExecEvenementsRelatedByIdAgentModif->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecEvenementRelatedByIdAgentModif($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecEvenementRelatedByIdAgentModif $commonExecEvenementRelatedByIdAgentModif The commonExecEvenementRelatedByIdAgentModif object to add.
     */
    protected function doAddCommonExecEvenementRelatedByIdAgentModif($commonExecEvenementRelatedByIdAgentModif)
    {
        $this->collCommonExecEvenementsRelatedByIdAgentModif[]= $commonExecEvenementRelatedByIdAgentModif;
        $commonExecEvenementRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif($this);
    }

    /**
     * @param	CommonExecEvenementRelatedByIdAgentModif $commonExecEvenementRelatedByIdAgentModif The commonExecEvenementRelatedByIdAgentModif object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecEvenementRelatedByIdAgentModif($commonExecEvenementRelatedByIdAgentModif)
    {
        if ($this->getCommonExecEvenementsRelatedByIdAgentModif()->contains($commonExecEvenementRelatedByIdAgentModif)) {
            $this->collCommonExecEvenementsRelatedByIdAgentModif->remove($this->collCommonExecEvenementsRelatedByIdAgentModif->search($commonExecEvenementRelatedByIdAgentModif));
            if (null === $this->commonExecEvenementsRelatedByIdAgentModifScheduledForDeletion) {
                $this->commonExecEvenementsRelatedByIdAgentModifScheduledForDeletion = clone $this->collCommonExecEvenementsRelatedByIdAgentModif;
                $this->commonExecEvenementsRelatedByIdAgentModifScheduledForDeletion->clear();
            }
            $this->commonExecEvenementsRelatedByIdAgentModifScheduledForDeletion[]= $commonExecEvenementRelatedByIdAgentModif;
            $commonExecEvenementRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentModifJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentModifJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentModifJoinCommonExecPhase($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecPhase', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentModifJoinCommonExecTypeEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeEvenement', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentModif($query, $con);
    }

    /**
     * Clears out the collCommonExecEvenementsRelatedByIdAgentRejet collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecEvenementsRelatedByIdAgentRejet()
     */
    public function clearCommonExecEvenementsRelatedByIdAgentRejet()
    {
        $this->collCommonExecEvenementsRelatedByIdAgentRejet = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecEvenementsRelatedByIdAgentRejetPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecEvenementsRelatedByIdAgentRejet collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecEvenementsRelatedByIdAgentRejet($v = true)
    {
        $this->collCommonExecEvenementsRelatedByIdAgentRejetPartial = $v;
    }

    /**
     * Initializes the collCommonExecEvenementsRelatedByIdAgentRejet collection.
     *
     * By default this just sets the collCommonExecEvenementsRelatedByIdAgentRejet collection to an empty array (like clearcollCommonExecEvenementsRelatedByIdAgentRejet());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecEvenementsRelatedByIdAgentRejet($overrideExisting = true)
    {
        if (null !== $this->collCommonExecEvenementsRelatedByIdAgentRejet && !$overrideExisting) {
            return;
        }
        $this->collCommonExecEvenementsRelatedByIdAgentRejet = new PropelObjectCollection();
        $this->collCommonExecEvenementsRelatedByIdAgentRejet->setModel('CommonExecEvenement');
    }

    /**
     * Gets an array of CommonExecEvenement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     * @throws PropelException
     */
    public function getCommonExecEvenementsRelatedByIdAgentRejet($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsRelatedByIdAgentRejetPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenementsRelatedByIdAgentRejet || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenementsRelatedByIdAgentRejet) {
                // return empty collection
                $this->initCommonExecEvenementsRelatedByIdAgentRejet();
            } else {
                $collCommonExecEvenementsRelatedByIdAgentRejet = CommonExecEvenementQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentRejet($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecEvenementsRelatedByIdAgentRejetPartial && count($collCommonExecEvenementsRelatedByIdAgentRejet)) {
                      $this->initCommonExecEvenementsRelatedByIdAgentRejet(false);

                      foreach ($collCommonExecEvenementsRelatedByIdAgentRejet as $obj) {
                        if (false == $this->collCommonExecEvenementsRelatedByIdAgentRejet->contains($obj)) {
                          $this->collCommonExecEvenementsRelatedByIdAgentRejet->append($obj);
                        }
                      }

                      $this->collCommonExecEvenementsRelatedByIdAgentRejetPartial = true;
                    }

                    $collCommonExecEvenementsRelatedByIdAgentRejet->getInternalIterator()->rewind();

                    return $collCommonExecEvenementsRelatedByIdAgentRejet;
                }

                if ($partial && $this->collCommonExecEvenementsRelatedByIdAgentRejet) {
                    foreach ($this->collCommonExecEvenementsRelatedByIdAgentRejet as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecEvenementsRelatedByIdAgentRejet[] = $obj;
                        }
                    }
                }

                $this->collCommonExecEvenementsRelatedByIdAgentRejet = $collCommonExecEvenementsRelatedByIdAgentRejet;
                $this->collCommonExecEvenementsRelatedByIdAgentRejetPartial = false;
            }
        }

        return $this->collCommonExecEvenementsRelatedByIdAgentRejet;
    }

    /**
     * Sets a collection of CommonExecEvenementRelatedByIdAgentRejet objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecEvenementsRelatedByIdAgentRejet A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecEvenementsRelatedByIdAgentRejet(PropelCollection $commonExecEvenementsRelatedByIdAgentRejet, PropelPDO $con = null)
    {
        $commonExecEvenementsRelatedByIdAgentRejetToDelete = $this->getCommonExecEvenementsRelatedByIdAgentRejet(new Criteria(), $con)->diff($commonExecEvenementsRelatedByIdAgentRejet);


        $this->commonExecEvenementsRelatedByIdAgentRejetScheduledForDeletion = $commonExecEvenementsRelatedByIdAgentRejetToDelete;

        foreach ($commonExecEvenementsRelatedByIdAgentRejetToDelete as $commonExecEvenementRelatedByIdAgentRejetRemoved) {
            $commonExecEvenementRelatedByIdAgentRejetRemoved->setCommonAgentRelatedByIdAgentRejet(null);
        }

        $this->collCommonExecEvenementsRelatedByIdAgentRejet = null;
        foreach ($commonExecEvenementsRelatedByIdAgentRejet as $commonExecEvenementRelatedByIdAgentRejet) {
            $this->addCommonExecEvenementRelatedByIdAgentRejet($commonExecEvenementRelatedByIdAgentRejet);
        }

        $this->collCommonExecEvenementsRelatedByIdAgentRejet = $commonExecEvenementsRelatedByIdAgentRejet;
        $this->collCommonExecEvenementsRelatedByIdAgentRejetPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecEvenement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecEvenement objects.
     * @throws PropelException
     */
    public function countCommonExecEvenementsRelatedByIdAgentRejet(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsRelatedByIdAgentRejetPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenementsRelatedByIdAgentRejet || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenementsRelatedByIdAgentRejet) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecEvenementsRelatedByIdAgentRejet());
            }
            $query = CommonExecEvenementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentRejet($this)
                ->count($con);
        }

        return count($this->collCommonExecEvenementsRelatedByIdAgentRejet);
    }

    /**
     * Method called to associate a CommonExecEvenement object to this object
     * through the CommonExecEvenement foreign key attribute.
     *
     * @param   CommonExecEvenement $l CommonExecEvenement
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecEvenementRelatedByIdAgentRejet(CommonExecEvenement $l)
    {
        if ($this->collCommonExecEvenementsRelatedByIdAgentRejet === null) {
            $this->initCommonExecEvenementsRelatedByIdAgentRejet();
            $this->collCommonExecEvenementsRelatedByIdAgentRejetPartial = true;
        }
        if (!in_array($l, $this->collCommonExecEvenementsRelatedByIdAgentRejet->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecEvenementRelatedByIdAgentRejet($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecEvenementRelatedByIdAgentRejet $commonExecEvenementRelatedByIdAgentRejet The commonExecEvenementRelatedByIdAgentRejet object to add.
     */
    protected function doAddCommonExecEvenementRelatedByIdAgentRejet($commonExecEvenementRelatedByIdAgentRejet)
    {
        $this->collCommonExecEvenementsRelatedByIdAgentRejet[]= $commonExecEvenementRelatedByIdAgentRejet;
        $commonExecEvenementRelatedByIdAgentRejet->setCommonAgentRelatedByIdAgentRejet($this);
    }

    /**
     * @param	CommonExecEvenementRelatedByIdAgentRejet $commonExecEvenementRelatedByIdAgentRejet The commonExecEvenementRelatedByIdAgentRejet object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecEvenementRelatedByIdAgentRejet($commonExecEvenementRelatedByIdAgentRejet)
    {
        if ($this->getCommonExecEvenementsRelatedByIdAgentRejet()->contains($commonExecEvenementRelatedByIdAgentRejet)) {
            $this->collCommonExecEvenementsRelatedByIdAgentRejet->remove($this->collCommonExecEvenementsRelatedByIdAgentRejet->search($commonExecEvenementRelatedByIdAgentRejet));
            if (null === $this->commonExecEvenementsRelatedByIdAgentRejetScheduledForDeletion) {
                $this->commonExecEvenementsRelatedByIdAgentRejetScheduledForDeletion = clone $this->collCommonExecEvenementsRelatedByIdAgentRejet;
                $this->commonExecEvenementsRelatedByIdAgentRejetScheduledForDeletion->clear();
            }
            $this->commonExecEvenementsRelatedByIdAgentRejetScheduledForDeletion[]= $commonExecEvenementRelatedByIdAgentRejet;
            $commonExecEvenementRelatedByIdAgentRejet->setCommonAgentRelatedByIdAgentRejet(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentRejetJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentRejet($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentRejetJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentRejet($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentRejetJoinCommonExecPhase($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecPhase', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentRejet($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentRejetJoinCommonExecTypeEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeEvenement', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentRejet($query, $con);
    }

    /**
     * Clears out the collCommonExecEvenementsRelatedByIdAgentValidation collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecEvenementsRelatedByIdAgentValidation()
     */
    public function clearCommonExecEvenementsRelatedByIdAgentValidation()
    {
        $this->collCommonExecEvenementsRelatedByIdAgentValidation = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecEvenementsRelatedByIdAgentValidationPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecEvenementsRelatedByIdAgentValidation collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecEvenementsRelatedByIdAgentValidation($v = true)
    {
        $this->collCommonExecEvenementsRelatedByIdAgentValidationPartial = $v;
    }

    /**
     * Initializes the collCommonExecEvenementsRelatedByIdAgentValidation collection.
     *
     * By default this just sets the collCommonExecEvenementsRelatedByIdAgentValidation collection to an empty array (like clearcollCommonExecEvenementsRelatedByIdAgentValidation());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecEvenementsRelatedByIdAgentValidation($overrideExisting = true)
    {
        if (null !== $this->collCommonExecEvenementsRelatedByIdAgentValidation && !$overrideExisting) {
            return;
        }
        $this->collCommonExecEvenementsRelatedByIdAgentValidation = new PropelObjectCollection();
        $this->collCommonExecEvenementsRelatedByIdAgentValidation->setModel('CommonExecEvenement');
    }

    /**
     * Gets an array of CommonExecEvenement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     * @throws PropelException
     */
    public function getCommonExecEvenementsRelatedByIdAgentValidation($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsRelatedByIdAgentValidationPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenementsRelatedByIdAgentValidation || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenementsRelatedByIdAgentValidation) {
                // return empty collection
                $this->initCommonExecEvenementsRelatedByIdAgentValidation();
            } else {
                $collCommonExecEvenementsRelatedByIdAgentValidation = CommonExecEvenementQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentValidation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecEvenementsRelatedByIdAgentValidationPartial && count($collCommonExecEvenementsRelatedByIdAgentValidation)) {
                      $this->initCommonExecEvenementsRelatedByIdAgentValidation(false);

                      foreach ($collCommonExecEvenementsRelatedByIdAgentValidation as $obj) {
                        if (false == $this->collCommonExecEvenementsRelatedByIdAgentValidation->contains($obj)) {
                          $this->collCommonExecEvenementsRelatedByIdAgentValidation->append($obj);
                        }
                      }

                      $this->collCommonExecEvenementsRelatedByIdAgentValidationPartial = true;
                    }

                    $collCommonExecEvenementsRelatedByIdAgentValidation->getInternalIterator()->rewind();

                    return $collCommonExecEvenementsRelatedByIdAgentValidation;
                }

                if ($partial && $this->collCommonExecEvenementsRelatedByIdAgentValidation) {
                    foreach ($this->collCommonExecEvenementsRelatedByIdAgentValidation as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecEvenementsRelatedByIdAgentValidation[] = $obj;
                        }
                    }
                }

                $this->collCommonExecEvenementsRelatedByIdAgentValidation = $collCommonExecEvenementsRelatedByIdAgentValidation;
                $this->collCommonExecEvenementsRelatedByIdAgentValidationPartial = false;
            }
        }

        return $this->collCommonExecEvenementsRelatedByIdAgentValidation;
    }

    /**
     * Sets a collection of CommonExecEvenementRelatedByIdAgentValidation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecEvenementsRelatedByIdAgentValidation A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecEvenementsRelatedByIdAgentValidation(PropelCollection $commonExecEvenementsRelatedByIdAgentValidation, PropelPDO $con = null)
    {
        $commonExecEvenementsRelatedByIdAgentValidationToDelete = $this->getCommonExecEvenementsRelatedByIdAgentValidation(new Criteria(), $con)->diff($commonExecEvenementsRelatedByIdAgentValidation);


        $this->commonExecEvenementsRelatedByIdAgentValidationScheduledForDeletion = $commonExecEvenementsRelatedByIdAgentValidationToDelete;

        foreach ($commonExecEvenementsRelatedByIdAgentValidationToDelete as $commonExecEvenementRelatedByIdAgentValidationRemoved) {
            $commonExecEvenementRelatedByIdAgentValidationRemoved->setCommonAgentRelatedByIdAgentValidation(null);
        }

        $this->collCommonExecEvenementsRelatedByIdAgentValidation = null;
        foreach ($commonExecEvenementsRelatedByIdAgentValidation as $commonExecEvenementRelatedByIdAgentValidation) {
            $this->addCommonExecEvenementRelatedByIdAgentValidation($commonExecEvenementRelatedByIdAgentValidation);
        }

        $this->collCommonExecEvenementsRelatedByIdAgentValidation = $commonExecEvenementsRelatedByIdAgentValidation;
        $this->collCommonExecEvenementsRelatedByIdAgentValidationPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecEvenement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecEvenement objects.
     * @throws PropelException
     */
    public function countCommonExecEvenementsRelatedByIdAgentValidation(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsRelatedByIdAgentValidationPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenementsRelatedByIdAgentValidation || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenementsRelatedByIdAgentValidation) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecEvenementsRelatedByIdAgentValidation());
            }
            $query = CommonExecEvenementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentValidation($this)
                ->count($con);
        }

        return count($this->collCommonExecEvenementsRelatedByIdAgentValidation);
    }

    /**
     * Method called to associate a CommonExecEvenement object to this object
     * through the CommonExecEvenement foreign key attribute.
     *
     * @param   CommonExecEvenement $l CommonExecEvenement
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecEvenementRelatedByIdAgentValidation(CommonExecEvenement $l)
    {
        if ($this->collCommonExecEvenementsRelatedByIdAgentValidation === null) {
            $this->initCommonExecEvenementsRelatedByIdAgentValidation();
            $this->collCommonExecEvenementsRelatedByIdAgentValidationPartial = true;
        }
        if (!in_array($l, $this->collCommonExecEvenementsRelatedByIdAgentValidation->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecEvenementRelatedByIdAgentValidation($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecEvenementRelatedByIdAgentValidation $commonExecEvenementRelatedByIdAgentValidation The commonExecEvenementRelatedByIdAgentValidation object to add.
     */
    protected function doAddCommonExecEvenementRelatedByIdAgentValidation($commonExecEvenementRelatedByIdAgentValidation)
    {
        $this->collCommonExecEvenementsRelatedByIdAgentValidation[]= $commonExecEvenementRelatedByIdAgentValidation;
        $commonExecEvenementRelatedByIdAgentValidation->setCommonAgentRelatedByIdAgentValidation($this);
    }

    /**
     * @param	CommonExecEvenementRelatedByIdAgentValidation $commonExecEvenementRelatedByIdAgentValidation The commonExecEvenementRelatedByIdAgentValidation object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecEvenementRelatedByIdAgentValidation($commonExecEvenementRelatedByIdAgentValidation)
    {
        if ($this->getCommonExecEvenementsRelatedByIdAgentValidation()->contains($commonExecEvenementRelatedByIdAgentValidation)) {
            $this->collCommonExecEvenementsRelatedByIdAgentValidation->remove($this->collCommonExecEvenementsRelatedByIdAgentValidation->search($commonExecEvenementRelatedByIdAgentValidation));
            if (null === $this->commonExecEvenementsRelatedByIdAgentValidationScheduledForDeletion) {
                $this->commonExecEvenementsRelatedByIdAgentValidationScheduledForDeletion = clone $this->collCommonExecEvenementsRelatedByIdAgentValidation;
                $this->commonExecEvenementsRelatedByIdAgentValidationScheduledForDeletion->clear();
            }
            $this->commonExecEvenementsRelatedByIdAgentValidationScheduledForDeletion[]= $commonExecEvenementRelatedByIdAgentValidation;
            $commonExecEvenementRelatedByIdAgentValidation->setCommonAgentRelatedByIdAgentValidation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentValidationJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentValidation($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentValidationJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentValidation($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentValidationJoinCommonExecPhase($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecPhase', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentValidation($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecEvenementsRelatedByIdAgentValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsRelatedByIdAgentValidationJoinCommonExecTypeEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeEvenement', $join_behavior);

        return $this->getCommonExecEvenementsRelatedByIdAgentValidation($query, $con);
    }

    /**
     * Clears out the collCommonExecFacturesRelatedByIdAgentCrea collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecFacturesRelatedByIdAgentCrea()
     */
    public function clearCommonExecFacturesRelatedByIdAgentCrea()
    {
        $this->collCommonExecFacturesRelatedByIdAgentCrea = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecFacturesRelatedByIdAgentCreaPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecFacturesRelatedByIdAgentCrea collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecFacturesRelatedByIdAgentCrea($v = true)
    {
        $this->collCommonExecFacturesRelatedByIdAgentCreaPartial = $v;
    }

    /**
     * Initializes the collCommonExecFacturesRelatedByIdAgentCrea collection.
     *
     * By default this just sets the collCommonExecFacturesRelatedByIdAgentCrea collection to an empty array (like clearcollCommonExecFacturesRelatedByIdAgentCrea());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecFacturesRelatedByIdAgentCrea($overrideExisting = true)
    {
        if (null !== $this->collCommonExecFacturesRelatedByIdAgentCrea && !$overrideExisting) {
            return;
        }
        $this->collCommonExecFacturesRelatedByIdAgentCrea = new PropelObjectCollection();
        $this->collCommonExecFacturesRelatedByIdAgentCrea->setModel('CommonExecFacture');
    }

    /**
     * Gets an array of CommonExecFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     * @throws PropelException
     */
    public function getCommonExecFacturesRelatedByIdAgentCrea($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecFacturesRelatedByIdAgentCrea || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFacturesRelatedByIdAgentCrea) {
                // return empty collection
                $this->initCommonExecFacturesRelatedByIdAgentCrea();
            } else {
                $collCommonExecFacturesRelatedByIdAgentCrea = CommonExecFactureQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentCrea($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecFacturesRelatedByIdAgentCreaPartial && count($collCommonExecFacturesRelatedByIdAgentCrea)) {
                      $this->initCommonExecFacturesRelatedByIdAgentCrea(false);

                      foreach ($collCommonExecFacturesRelatedByIdAgentCrea as $obj) {
                        if (false == $this->collCommonExecFacturesRelatedByIdAgentCrea->contains($obj)) {
                          $this->collCommonExecFacturesRelatedByIdAgentCrea->append($obj);
                        }
                      }

                      $this->collCommonExecFacturesRelatedByIdAgentCreaPartial = true;
                    }

                    $collCommonExecFacturesRelatedByIdAgentCrea->getInternalIterator()->rewind();

                    return $collCommonExecFacturesRelatedByIdAgentCrea;
                }

                if ($partial && $this->collCommonExecFacturesRelatedByIdAgentCrea) {
                    foreach ($this->collCommonExecFacturesRelatedByIdAgentCrea as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecFacturesRelatedByIdAgentCrea[] = $obj;
                        }
                    }
                }

                $this->collCommonExecFacturesRelatedByIdAgentCrea = $collCommonExecFacturesRelatedByIdAgentCrea;
                $this->collCommonExecFacturesRelatedByIdAgentCreaPartial = false;
            }
        }

        return $this->collCommonExecFacturesRelatedByIdAgentCrea;
    }

    /**
     * Sets a collection of CommonExecFactureRelatedByIdAgentCrea objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecFacturesRelatedByIdAgentCrea A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecFacturesRelatedByIdAgentCrea(PropelCollection $commonExecFacturesRelatedByIdAgentCrea, PropelPDO $con = null)
    {
        $commonExecFacturesRelatedByIdAgentCreaToDelete = $this->getCommonExecFacturesRelatedByIdAgentCrea(new Criteria(), $con)->diff($commonExecFacturesRelatedByIdAgentCrea);


        $this->commonExecFacturesRelatedByIdAgentCreaScheduledForDeletion = $commonExecFacturesRelatedByIdAgentCreaToDelete;

        foreach ($commonExecFacturesRelatedByIdAgentCreaToDelete as $commonExecFactureRelatedByIdAgentCreaRemoved) {
            $commonExecFactureRelatedByIdAgentCreaRemoved->setCommonAgentRelatedByIdAgentCrea(null);
        }

        $this->collCommonExecFacturesRelatedByIdAgentCrea = null;
        foreach ($commonExecFacturesRelatedByIdAgentCrea as $commonExecFactureRelatedByIdAgentCrea) {
            $this->addCommonExecFactureRelatedByIdAgentCrea($commonExecFactureRelatedByIdAgentCrea);
        }

        $this->collCommonExecFacturesRelatedByIdAgentCrea = $commonExecFacturesRelatedByIdAgentCrea;
        $this->collCommonExecFacturesRelatedByIdAgentCreaPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecFacture objects.
     * @throws PropelException
     */
    public function countCommonExecFacturesRelatedByIdAgentCrea(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecFacturesRelatedByIdAgentCrea || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFacturesRelatedByIdAgentCrea) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecFacturesRelatedByIdAgentCrea());
            }
            $query = CommonExecFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentCrea($this)
                ->count($con);
        }

        return count($this->collCommonExecFacturesRelatedByIdAgentCrea);
    }

    /**
     * Method called to associate a CommonExecFacture object to this object
     * through the CommonExecFacture foreign key attribute.
     *
     * @param   CommonExecFacture $l CommonExecFacture
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecFactureRelatedByIdAgentCrea(CommonExecFacture $l)
    {
        if ($this->collCommonExecFacturesRelatedByIdAgentCrea === null) {
            $this->initCommonExecFacturesRelatedByIdAgentCrea();
            $this->collCommonExecFacturesRelatedByIdAgentCreaPartial = true;
        }
        if (!in_array($l, $this->collCommonExecFacturesRelatedByIdAgentCrea->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecFactureRelatedByIdAgentCrea($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecFactureRelatedByIdAgentCrea $commonExecFactureRelatedByIdAgentCrea The commonExecFactureRelatedByIdAgentCrea object to add.
     */
    protected function doAddCommonExecFactureRelatedByIdAgentCrea($commonExecFactureRelatedByIdAgentCrea)
    {
        $this->collCommonExecFacturesRelatedByIdAgentCrea[]= $commonExecFactureRelatedByIdAgentCrea;
        $commonExecFactureRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea($this);
    }

    /**
     * @param	CommonExecFactureRelatedByIdAgentCrea $commonExecFactureRelatedByIdAgentCrea The commonExecFactureRelatedByIdAgentCrea object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecFactureRelatedByIdAgentCrea($commonExecFactureRelatedByIdAgentCrea)
    {
        if ($this->getCommonExecFacturesRelatedByIdAgentCrea()->contains($commonExecFactureRelatedByIdAgentCrea)) {
            $this->collCommonExecFacturesRelatedByIdAgentCrea->remove($this->collCommonExecFacturesRelatedByIdAgentCrea->search($commonExecFactureRelatedByIdAgentCrea));
            if (null === $this->commonExecFacturesRelatedByIdAgentCreaScheduledForDeletion) {
                $this->commonExecFacturesRelatedByIdAgentCreaScheduledForDeletion = clone $this->collCommonExecFacturesRelatedByIdAgentCrea;
                $this->commonExecFacturesRelatedByIdAgentCreaScheduledForDeletion->clear();
            }
            $this->commonExecFacturesRelatedByIdAgentCreaScheduledForDeletion[]= $commonExecFactureRelatedByIdAgentCrea;
            $commonExecFactureRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentCreaJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentCreaJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentCreaJoinCommonEntrepriseRelatedByIdEntrepriseCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntrepriseRelatedByIdEntrepriseCrea', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentCreaJoinCommonEntrepriseRelatedByIdEntrepriseModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntrepriseRelatedByIdEntrepriseModif', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentCrea($query, $con);
    }

    /**
     * Clears out the collCommonExecFacturesRelatedByIdAgentModif collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecFacturesRelatedByIdAgentModif()
     */
    public function clearCommonExecFacturesRelatedByIdAgentModif()
    {
        $this->collCommonExecFacturesRelatedByIdAgentModif = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecFacturesRelatedByIdAgentModifPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecFacturesRelatedByIdAgentModif collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecFacturesRelatedByIdAgentModif($v = true)
    {
        $this->collCommonExecFacturesRelatedByIdAgentModifPartial = $v;
    }

    /**
     * Initializes the collCommonExecFacturesRelatedByIdAgentModif collection.
     *
     * By default this just sets the collCommonExecFacturesRelatedByIdAgentModif collection to an empty array (like clearcollCommonExecFacturesRelatedByIdAgentModif());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecFacturesRelatedByIdAgentModif($overrideExisting = true)
    {
        if (null !== $this->collCommonExecFacturesRelatedByIdAgentModif && !$overrideExisting) {
            return;
        }
        $this->collCommonExecFacturesRelatedByIdAgentModif = new PropelObjectCollection();
        $this->collCommonExecFacturesRelatedByIdAgentModif->setModel('CommonExecFacture');
    }

    /**
     * Gets an array of CommonExecFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     * @throws PropelException
     */
    public function getCommonExecFacturesRelatedByIdAgentModif($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecFacturesRelatedByIdAgentModif || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFacturesRelatedByIdAgentModif) {
                // return empty collection
                $this->initCommonExecFacturesRelatedByIdAgentModif();
            } else {
                $collCommonExecFacturesRelatedByIdAgentModif = CommonExecFactureQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentModif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecFacturesRelatedByIdAgentModifPartial && count($collCommonExecFacturesRelatedByIdAgentModif)) {
                      $this->initCommonExecFacturesRelatedByIdAgentModif(false);

                      foreach ($collCommonExecFacturesRelatedByIdAgentModif as $obj) {
                        if (false == $this->collCommonExecFacturesRelatedByIdAgentModif->contains($obj)) {
                          $this->collCommonExecFacturesRelatedByIdAgentModif->append($obj);
                        }
                      }

                      $this->collCommonExecFacturesRelatedByIdAgentModifPartial = true;
                    }

                    $collCommonExecFacturesRelatedByIdAgentModif->getInternalIterator()->rewind();

                    return $collCommonExecFacturesRelatedByIdAgentModif;
                }

                if ($partial && $this->collCommonExecFacturesRelatedByIdAgentModif) {
                    foreach ($this->collCommonExecFacturesRelatedByIdAgentModif as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecFacturesRelatedByIdAgentModif[] = $obj;
                        }
                    }
                }

                $this->collCommonExecFacturesRelatedByIdAgentModif = $collCommonExecFacturesRelatedByIdAgentModif;
                $this->collCommonExecFacturesRelatedByIdAgentModifPartial = false;
            }
        }

        return $this->collCommonExecFacturesRelatedByIdAgentModif;
    }

    /**
     * Sets a collection of CommonExecFactureRelatedByIdAgentModif objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecFacturesRelatedByIdAgentModif A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecFacturesRelatedByIdAgentModif(PropelCollection $commonExecFacturesRelatedByIdAgentModif, PropelPDO $con = null)
    {
        $commonExecFacturesRelatedByIdAgentModifToDelete = $this->getCommonExecFacturesRelatedByIdAgentModif(new Criteria(), $con)->diff($commonExecFacturesRelatedByIdAgentModif);


        $this->commonExecFacturesRelatedByIdAgentModifScheduledForDeletion = $commonExecFacturesRelatedByIdAgentModifToDelete;

        foreach ($commonExecFacturesRelatedByIdAgentModifToDelete as $commonExecFactureRelatedByIdAgentModifRemoved) {
            $commonExecFactureRelatedByIdAgentModifRemoved->setCommonAgentRelatedByIdAgentModif(null);
        }

        $this->collCommonExecFacturesRelatedByIdAgentModif = null;
        foreach ($commonExecFacturesRelatedByIdAgentModif as $commonExecFactureRelatedByIdAgentModif) {
            $this->addCommonExecFactureRelatedByIdAgentModif($commonExecFactureRelatedByIdAgentModif);
        }

        $this->collCommonExecFacturesRelatedByIdAgentModif = $commonExecFacturesRelatedByIdAgentModif;
        $this->collCommonExecFacturesRelatedByIdAgentModifPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecFacture objects.
     * @throws PropelException
     */
    public function countCommonExecFacturesRelatedByIdAgentModif(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecFacturesRelatedByIdAgentModif || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFacturesRelatedByIdAgentModif) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecFacturesRelatedByIdAgentModif());
            }
            $query = CommonExecFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentModif($this)
                ->count($con);
        }

        return count($this->collCommonExecFacturesRelatedByIdAgentModif);
    }

    /**
     * Method called to associate a CommonExecFacture object to this object
     * through the CommonExecFacture foreign key attribute.
     *
     * @param   CommonExecFacture $l CommonExecFacture
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecFactureRelatedByIdAgentModif(CommonExecFacture $l)
    {
        if ($this->collCommonExecFacturesRelatedByIdAgentModif === null) {
            $this->initCommonExecFacturesRelatedByIdAgentModif();
            $this->collCommonExecFacturesRelatedByIdAgentModifPartial = true;
        }
        if (!in_array($l, $this->collCommonExecFacturesRelatedByIdAgentModif->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecFactureRelatedByIdAgentModif($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecFactureRelatedByIdAgentModif $commonExecFactureRelatedByIdAgentModif The commonExecFactureRelatedByIdAgentModif object to add.
     */
    protected function doAddCommonExecFactureRelatedByIdAgentModif($commonExecFactureRelatedByIdAgentModif)
    {
        $this->collCommonExecFacturesRelatedByIdAgentModif[]= $commonExecFactureRelatedByIdAgentModif;
        $commonExecFactureRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif($this);
    }

    /**
     * @param	CommonExecFactureRelatedByIdAgentModif $commonExecFactureRelatedByIdAgentModif The commonExecFactureRelatedByIdAgentModif object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecFactureRelatedByIdAgentModif($commonExecFactureRelatedByIdAgentModif)
    {
        if ($this->getCommonExecFacturesRelatedByIdAgentModif()->contains($commonExecFactureRelatedByIdAgentModif)) {
            $this->collCommonExecFacturesRelatedByIdAgentModif->remove($this->collCommonExecFacturesRelatedByIdAgentModif->search($commonExecFactureRelatedByIdAgentModif));
            if (null === $this->commonExecFacturesRelatedByIdAgentModifScheduledForDeletion) {
                $this->commonExecFacturesRelatedByIdAgentModifScheduledForDeletion = clone $this->collCommonExecFacturesRelatedByIdAgentModif;
                $this->commonExecFacturesRelatedByIdAgentModifScheduledForDeletion->clear();
            }
            $this->commonExecFacturesRelatedByIdAgentModifScheduledForDeletion[]= $commonExecFactureRelatedByIdAgentModif;
            $commonExecFactureRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentModifJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentModifJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentModifJoinCommonEntrepriseRelatedByIdEntrepriseCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntrepriseRelatedByIdEntrepriseCrea', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentModifJoinCommonEntrepriseRelatedByIdEntrepriseModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntrepriseRelatedByIdEntrepriseModif', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentModif($query, $con);
    }

    /**
     * Clears out the collCommonExecFacturesRelatedByIdAgentRejet collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecFacturesRelatedByIdAgentRejet()
     */
    public function clearCommonExecFacturesRelatedByIdAgentRejet()
    {
        $this->collCommonExecFacturesRelatedByIdAgentRejet = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecFacturesRelatedByIdAgentRejetPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecFacturesRelatedByIdAgentRejet collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecFacturesRelatedByIdAgentRejet($v = true)
    {
        $this->collCommonExecFacturesRelatedByIdAgentRejetPartial = $v;
    }

    /**
     * Initializes the collCommonExecFacturesRelatedByIdAgentRejet collection.
     *
     * By default this just sets the collCommonExecFacturesRelatedByIdAgentRejet collection to an empty array (like clearcollCommonExecFacturesRelatedByIdAgentRejet());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecFacturesRelatedByIdAgentRejet($overrideExisting = true)
    {
        if (null !== $this->collCommonExecFacturesRelatedByIdAgentRejet && !$overrideExisting) {
            return;
        }
        $this->collCommonExecFacturesRelatedByIdAgentRejet = new PropelObjectCollection();
        $this->collCommonExecFacturesRelatedByIdAgentRejet->setModel('CommonExecFacture');
    }

    /**
     * Gets an array of CommonExecFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     * @throws PropelException
     */
    public function getCommonExecFacturesRelatedByIdAgentRejet($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesRelatedByIdAgentRejetPartial && !$this->isNew();
        if (null === $this->collCommonExecFacturesRelatedByIdAgentRejet || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFacturesRelatedByIdAgentRejet) {
                // return empty collection
                $this->initCommonExecFacturesRelatedByIdAgentRejet();
            } else {
                $collCommonExecFacturesRelatedByIdAgentRejet = CommonExecFactureQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentRejet($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecFacturesRelatedByIdAgentRejetPartial && count($collCommonExecFacturesRelatedByIdAgentRejet)) {
                      $this->initCommonExecFacturesRelatedByIdAgentRejet(false);

                      foreach ($collCommonExecFacturesRelatedByIdAgentRejet as $obj) {
                        if (false == $this->collCommonExecFacturesRelatedByIdAgentRejet->contains($obj)) {
                          $this->collCommonExecFacturesRelatedByIdAgentRejet->append($obj);
                        }
                      }

                      $this->collCommonExecFacturesRelatedByIdAgentRejetPartial = true;
                    }

                    $collCommonExecFacturesRelatedByIdAgentRejet->getInternalIterator()->rewind();

                    return $collCommonExecFacturesRelatedByIdAgentRejet;
                }

                if ($partial && $this->collCommonExecFacturesRelatedByIdAgentRejet) {
                    foreach ($this->collCommonExecFacturesRelatedByIdAgentRejet as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecFacturesRelatedByIdAgentRejet[] = $obj;
                        }
                    }
                }

                $this->collCommonExecFacturesRelatedByIdAgentRejet = $collCommonExecFacturesRelatedByIdAgentRejet;
                $this->collCommonExecFacturesRelatedByIdAgentRejetPartial = false;
            }
        }

        return $this->collCommonExecFacturesRelatedByIdAgentRejet;
    }

    /**
     * Sets a collection of CommonExecFactureRelatedByIdAgentRejet objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecFacturesRelatedByIdAgentRejet A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecFacturesRelatedByIdAgentRejet(PropelCollection $commonExecFacturesRelatedByIdAgentRejet, PropelPDO $con = null)
    {
        $commonExecFacturesRelatedByIdAgentRejetToDelete = $this->getCommonExecFacturesRelatedByIdAgentRejet(new Criteria(), $con)->diff($commonExecFacturesRelatedByIdAgentRejet);


        $this->commonExecFacturesRelatedByIdAgentRejetScheduledForDeletion = $commonExecFacturesRelatedByIdAgentRejetToDelete;

        foreach ($commonExecFacturesRelatedByIdAgentRejetToDelete as $commonExecFactureRelatedByIdAgentRejetRemoved) {
            $commonExecFactureRelatedByIdAgentRejetRemoved->setCommonAgentRelatedByIdAgentRejet(null);
        }

        $this->collCommonExecFacturesRelatedByIdAgentRejet = null;
        foreach ($commonExecFacturesRelatedByIdAgentRejet as $commonExecFactureRelatedByIdAgentRejet) {
            $this->addCommonExecFactureRelatedByIdAgentRejet($commonExecFactureRelatedByIdAgentRejet);
        }

        $this->collCommonExecFacturesRelatedByIdAgentRejet = $commonExecFacturesRelatedByIdAgentRejet;
        $this->collCommonExecFacturesRelatedByIdAgentRejetPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecFacture objects.
     * @throws PropelException
     */
    public function countCommonExecFacturesRelatedByIdAgentRejet(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesRelatedByIdAgentRejetPartial && !$this->isNew();
        if (null === $this->collCommonExecFacturesRelatedByIdAgentRejet || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFacturesRelatedByIdAgentRejet) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecFacturesRelatedByIdAgentRejet());
            }
            $query = CommonExecFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentRejet($this)
                ->count($con);
        }

        return count($this->collCommonExecFacturesRelatedByIdAgentRejet);
    }

    /**
     * Method called to associate a CommonExecFacture object to this object
     * through the CommonExecFacture foreign key attribute.
     *
     * @param   CommonExecFacture $l CommonExecFacture
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecFactureRelatedByIdAgentRejet(CommonExecFacture $l)
    {
        if ($this->collCommonExecFacturesRelatedByIdAgentRejet === null) {
            $this->initCommonExecFacturesRelatedByIdAgentRejet();
            $this->collCommonExecFacturesRelatedByIdAgentRejetPartial = true;
        }
        if (!in_array($l, $this->collCommonExecFacturesRelatedByIdAgentRejet->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecFactureRelatedByIdAgentRejet($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecFactureRelatedByIdAgentRejet $commonExecFactureRelatedByIdAgentRejet The commonExecFactureRelatedByIdAgentRejet object to add.
     */
    protected function doAddCommonExecFactureRelatedByIdAgentRejet($commonExecFactureRelatedByIdAgentRejet)
    {
        $this->collCommonExecFacturesRelatedByIdAgentRejet[]= $commonExecFactureRelatedByIdAgentRejet;
        $commonExecFactureRelatedByIdAgentRejet->setCommonAgentRelatedByIdAgentRejet($this);
    }

    /**
     * @param	CommonExecFactureRelatedByIdAgentRejet $commonExecFactureRelatedByIdAgentRejet The commonExecFactureRelatedByIdAgentRejet object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecFactureRelatedByIdAgentRejet($commonExecFactureRelatedByIdAgentRejet)
    {
        if ($this->getCommonExecFacturesRelatedByIdAgentRejet()->contains($commonExecFactureRelatedByIdAgentRejet)) {
            $this->collCommonExecFacturesRelatedByIdAgentRejet->remove($this->collCommonExecFacturesRelatedByIdAgentRejet->search($commonExecFactureRelatedByIdAgentRejet));
            if (null === $this->commonExecFacturesRelatedByIdAgentRejetScheduledForDeletion) {
                $this->commonExecFacturesRelatedByIdAgentRejetScheduledForDeletion = clone $this->collCommonExecFacturesRelatedByIdAgentRejet;
                $this->commonExecFacturesRelatedByIdAgentRejetScheduledForDeletion->clear();
            }
            $this->commonExecFacturesRelatedByIdAgentRejetScheduledForDeletion[]= $commonExecFactureRelatedByIdAgentRejet;
            $commonExecFactureRelatedByIdAgentRejet->setCommonAgentRelatedByIdAgentRejet(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentRejetJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentRejet($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentRejetJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentRejet($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentRejetJoinCommonEntrepriseRelatedByIdEntrepriseCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntrepriseRelatedByIdEntrepriseCrea', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentRejet($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentRejet from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentRejetJoinCommonEntrepriseRelatedByIdEntrepriseModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntrepriseRelatedByIdEntrepriseModif', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentRejet($query, $con);
    }

    /**
     * Clears out the collCommonExecFacturesRelatedByIdAgentValidation collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecFacturesRelatedByIdAgentValidation()
     */
    public function clearCommonExecFacturesRelatedByIdAgentValidation()
    {
        $this->collCommonExecFacturesRelatedByIdAgentValidation = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecFacturesRelatedByIdAgentValidationPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecFacturesRelatedByIdAgentValidation collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecFacturesRelatedByIdAgentValidation($v = true)
    {
        $this->collCommonExecFacturesRelatedByIdAgentValidationPartial = $v;
    }

    /**
     * Initializes the collCommonExecFacturesRelatedByIdAgentValidation collection.
     *
     * By default this just sets the collCommonExecFacturesRelatedByIdAgentValidation collection to an empty array (like clearcollCommonExecFacturesRelatedByIdAgentValidation());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecFacturesRelatedByIdAgentValidation($overrideExisting = true)
    {
        if (null !== $this->collCommonExecFacturesRelatedByIdAgentValidation && !$overrideExisting) {
            return;
        }
        $this->collCommonExecFacturesRelatedByIdAgentValidation = new PropelObjectCollection();
        $this->collCommonExecFacturesRelatedByIdAgentValidation->setModel('CommonExecFacture');
    }

    /**
     * Gets an array of CommonExecFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     * @throws PropelException
     */
    public function getCommonExecFacturesRelatedByIdAgentValidation($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesRelatedByIdAgentValidationPartial && !$this->isNew();
        if (null === $this->collCommonExecFacturesRelatedByIdAgentValidation || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFacturesRelatedByIdAgentValidation) {
                // return empty collection
                $this->initCommonExecFacturesRelatedByIdAgentValidation();
            } else {
                $collCommonExecFacturesRelatedByIdAgentValidation = CommonExecFactureQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentValidation($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecFacturesRelatedByIdAgentValidationPartial && count($collCommonExecFacturesRelatedByIdAgentValidation)) {
                      $this->initCommonExecFacturesRelatedByIdAgentValidation(false);

                      foreach ($collCommonExecFacturesRelatedByIdAgentValidation as $obj) {
                        if (false == $this->collCommonExecFacturesRelatedByIdAgentValidation->contains($obj)) {
                          $this->collCommonExecFacturesRelatedByIdAgentValidation->append($obj);
                        }
                      }

                      $this->collCommonExecFacturesRelatedByIdAgentValidationPartial = true;
                    }

                    $collCommonExecFacturesRelatedByIdAgentValidation->getInternalIterator()->rewind();

                    return $collCommonExecFacturesRelatedByIdAgentValidation;
                }

                if ($partial && $this->collCommonExecFacturesRelatedByIdAgentValidation) {
                    foreach ($this->collCommonExecFacturesRelatedByIdAgentValidation as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecFacturesRelatedByIdAgentValidation[] = $obj;
                        }
                    }
                }

                $this->collCommonExecFacturesRelatedByIdAgentValidation = $collCommonExecFacturesRelatedByIdAgentValidation;
                $this->collCommonExecFacturesRelatedByIdAgentValidationPartial = false;
            }
        }

        return $this->collCommonExecFacturesRelatedByIdAgentValidation;
    }

    /**
     * Sets a collection of CommonExecFactureRelatedByIdAgentValidation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecFacturesRelatedByIdAgentValidation A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecFacturesRelatedByIdAgentValidation(PropelCollection $commonExecFacturesRelatedByIdAgentValidation, PropelPDO $con = null)
    {
        $commonExecFacturesRelatedByIdAgentValidationToDelete = $this->getCommonExecFacturesRelatedByIdAgentValidation(new Criteria(), $con)->diff($commonExecFacturesRelatedByIdAgentValidation);


        $this->commonExecFacturesRelatedByIdAgentValidationScheduledForDeletion = $commonExecFacturesRelatedByIdAgentValidationToDelete;

        foreach ($commonExecFacturesRelatedByIdAgentValidationToDelete as $commonExecFactureRelatedByIdAgentValidationRemoved) {
            $commonExecFactureRelatedByIdAgentValidationRemoved->setCommonAgentRelatedByIdAgentValidation(null);
        }

        $this->collCommonExecFacturesRelatedByIdAgentValidation = null;
        foreach ($commonExecFacturesRelatedByIdAgentValidation as $commonExecFactureRelatedByIdAgentValidation) {
            $this->addCommonExecFactureRelatedByIdAgentValidation($commonExecFactureRelatedByIdAgentValidation);
        }

        $this->collCommonExecFacturesRelatedByIdAgentValidation = $commonExecFacturesRelatedByIdAgentValidation;
        $this->collCommonExecFacturesRelatedByIdAgentValidationPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecFacture objects.
     * @throws PropelException
     */
    public function countCommonExecFacturesRelatedByIdAgentValidation(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesRelatedByIdAgentValidationPartial && !$this->isNew();
        if (null === $this->collCommonExecFacturesRelatedByIdAgentValidation || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFacturesRelatedByIdAgentValidation) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecFacturesRelatedByIdAgentValidation());
            }
            $query = CommonExecFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentValidation($this)
                ->count($con);
        }

        return count($this->collCommonExecFacturesRelatedByIdAgentValidation);
    }

    /**
     * Method called to associate a CommonExecFacture object to this object
     * through the CommonExecFacture foreign key attribute.
     *
     * @param   CommonExecFacture $l CommonExecFacture
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecFactureRelatedByIdAgentValidation(CommonExecFacture $l)
    {
        if ($this->collCommonExecFacturesRelatedByIdAgentValidation === null) {
            $this->initCommonExecFacturesRelatedByIdAgentValidation();
            $this->collCommonExecFacturesRelatedByIdAgentValidationPartial = true;
        }
        if (!in_array($l, $this->collCommonExecFacturesRelatedByIdAgentValidation->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecFactureRelatedByIdAgentValidation($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecFactureRelatedByIdAgentValidation $commonExecFactureRelatedByIdAgentValidation The commonExecFactureRelatedByIdAgentValidation object to add.
     */
    protected function doAddCommonExecFactureRelatedByIdAgentValidation($commonExecFactureRelatedByIdAgentValidation)
    {
        $this->collCommonExecFacturesRelatedByIdAgentValidation[]= $commonExecFactureRelatedByIdAgentValidation;
        $commonExecFactureRelatedByIdAgentValidation->setCommonAgentRelatedByIdAgentValidation($this);
    }

    /**
     * @param	CommonExecFactureRelatedByIdAgentValidation $commonExecFactureRelatedByIdAgentValidation The commonExecFactureRelatedByIdAgentValidation object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecFactureRelatedByIdAgentValidation($commonExecFactureRelatedByIdAgentValidation)
    {
        if ($this->getCommonExecFacturesRelatedByIdAgentValidation()->contains($commonExecFactureRelatedByIdAgentValidation)) {
            $this->collCommonExecFacturesRelatedByIdAgentValidation->remove($this->collCommonExecFacturesRelatedByIdAgentValidation->search($commonExecFactureRelatedByIdAgentValidation));
            if (null === $this->commonExecFacturesRelatedByIdAgentValidationScheduledForDeletion) {
                $this->commonExecFacturesRelatedByIdAgentValidationScheduledForDeletion = clone $this->collCommonExecFacturesRelatedByIdAgentValidation;
                $this->commonExecFacturesRelatedByIdAgentValidationScheduledForDeletion->clear();
            }
            $this->commonExecFacturesRelatedByIdAgentValidationScheduledForDeletion[]= $commonExecFactureRelatedByIdAgentValidation;
            $commonExecFactureRelatedByIdAgentValidation->setCommonAgentRelatedByIdAgentValidation(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentValidationJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentValidation($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentValidationJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentValidation($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentValidationJoinCommonEntrepriseRelatedByIdEntrepriseCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntrepriseRelatedByIdEntrepriseCrea', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentValidation($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecFacturesRelatedByIdAgentValidation from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesRelatedByIdAgentValidationJoinCommonEntrepriseRelatedByIdEntrepriseModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntrepriseRelatedByIdEntrepriseModif', $join_behavior);

        return $this->getCommonExecFacturesRelatedByIdAgentValidation($query, $con);
    }

    /**
     * Clears out the collCommonExecHistoriquePrixsRelatedByIdAgentCrea collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecHistoriquePrixsRelatedByIdAgentCrea()
     */
    public function clearCommonExecHistoriquePrixsRelatedByIdAgentCrea()
    {
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentCreaPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecHistoriquePrixsRelatedByIdAgentCrea collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecHistoriquePrixsRelatedByIdAgentCrea($v = true)
    {
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentCreaPartial = $v;
    }

    /**
     * Initializes the collCommonExecHistoriquePrixsRelatedByIdAgentCrea collection.
     *
     * By default this just sets the collCommonExecHistoriquePrixsRelatedByIdAgentCrea collection to an empty array (like clearcollCommonExecHistoriquePrixsRelatedByIdAgentCrea());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecHistoriquePrixsRelatedByIdAgentCrea($overrideExisting = true)
    {
        if (null !== $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea && !$overrideExisting) {
            return;
        }
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea = new PropelObjectCollection();
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea->setModel('CommonExecHistoriquePrix');
    }

    /**
     * Gets an array of CommonExecHistoriquePrix objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     * @throws PropelException
     */
    public function getCommonExecHistoriquePrixsRelatedByIdAgentCrea($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecHistoriquePrixsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea) {
                // return empty collection
                $this->initCommonExecHistoriquePrixsRelatedByIdAgentCrea();
            } else {
                $collCommonExecHistoriquePrixsRelatedByIdAgentCrea = CommonExecHistoriquePrixQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentCrea($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecHistoriquePrixsRelatedByIdAgentCreaPartial && count($collCommonExecHistoriquePrixsRelatedByIdAgentCrea)) {
                      $this->initCommonExecHistoriquePrixsRelatedByIdAgentCrea(false);

                      foreach ($collCommonExecHistoriquePrixsRelatedByIdAgentCrea as $obj) {
                        if (false == $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea->contains($obj)) {
                          $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea->append($obj);
                        }
                      }

                      $this->collCommonExecHistoriquePrixsRelatedByIdAgentCreaPartial = true;
                    }

                    $collCommonExecHistoriquePrixsRelatedByIdAgentCrea->getInternalIterator()->rewind();

                    return $collCommonExecHistoriquePrixsRelatedByIdAgentCrea;
                }

                if ($partial && $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea) {
                    foreach ($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecHistoriquePrixsRelatedByIdAgentCrea[] = $obj;
                        }
                    }
                }

                $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea = $collCommonExecHistoriquePrixsRelatedByIdAgentCrea;
                $this->collCommonExecHistoriquePrixsRelatedByIdAgentCreaPartial = false;
            }
        }

        return $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea;
    }

    /**
     * Sets a collection of CommonExecHistoriquePrixRelatedByIdAgentCrea objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecHistoriquePrixsRelatedByIdAgentCrea A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecHistoriquePrixsRelatedByIdAgentCrea(PropelCollection $commonExecHistoriquePrixsRelatedByIdAgentCrea, PropelPDO $con = null)
    {
        $commonExecHistoriquePrixsRelatedByIdAgentCreaToDelete = $this->getCommonExecHistoriquePrixsRelatedByIdAgentCrea(new Criteria(), $con)->diff($commonExecHistoriquePrixsRelatedByIdAgentCrea);


        $this->commonExecHistoriquePrixsRelatedByIdAgentCreaScheduledForDeletion = $commonExecHistoriquePrixsRelatedByIdAgentCreaToDelete;

        foreach ($commonExecHistoriquePrixsRelatedByIdAgentCreaToDelete as $commonExecHistoriquePrixRelatedByIdAgentCreaRemoved) {
            $commonExecHistoriquePrixRelatedByIdAgentCreaRemoved->setCommonAgentRelatedByIdAgentCrea(null);
        }

        $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea = null;
        foreach ($commonExecHistoriquePrixsRelatedByIdAgentCrea as $commonExecHistoriquePrixRelatedByIdAgentCrea) {
            $this->addCommonExecHistoriquePrixRelatedByIdAgentCrea($commonExecHistoriquePrixRelatedByIdAgentCrea);
        }

        $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea = $commonExecHistoriquePrixsRelatedByIdAgentCrea;
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentCreaPartial = false;

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
    public function countCommonExecHistoriquePrixsRelatedByIdAgentCrea(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecHistoriquePrixsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecHistoriquePrixsRelatedByIdAgentCrea());
            }
            $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentCrea($this)
                ->count($con);
        }

        return count($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea);
    }

    /**
     * Method called to associate a CommonExecHistoriquePrix object to this object
     * through the CommonExecHistoriquePrix foreign key attribute.
     *
     * @param   CommonExecHistoriquePrix $l CommonExecHistoriquePrix
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecHistoriquePrixRelatedByIdAgentCrea(CommonExecHistoriquePrix $l)
    {
        if ($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea === null) {
            $this->initCommonExecHistoriquePrixsRelatedByIdAgentCrea();
            $this->collCommonExecHistoriquePrixsRelatedByIdAgentCreaPartial = true;
        }
        if (!in_array($l, $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecHistoriquePrixRelatedByIdAgentCrea($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecHistoriquePrixRelatedByIdAgentCrea $commonExecHistoriquePrixRelatedByIdAgentCrea The commonExecHistoriquePrixRelatedByIdAgentCrea object to add.
     */
    protected function doAddCommonExecHistoriquePrixRelatedByIdAgentCrea($commonExecHistoriquePrixRelatedByIdAgentCrea)
    {
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea[]= $commonExecHistoriquePrixRelatedByIdAgentCrea;
        $commonExecHistoriquePrixRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea($this);
    }

    /**
     * @param	CommonExecHistoriquePrixRelatedByIdAgentCrea $commonExecHistoriquePrixRelatedByIdAgentCrea The commonExecHistoriquePrixRelatedByIdAgentCrea object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecHistoriquePrixRelatedByIdAgentCrea($commonExecHistoriquePrixRelatedByIdAgentCrea)
    {
        if ($this->getCommonExecHistoriquePrixsRelatedByIdAgentCrea()->contains($commonExecHistoriquePrixRelatedByIdAgentCrea)) {
            $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea->remove($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea->search($commonExecHistoriquePrixRelatedByIdAgentCrea));
            if (null === $this->commonExecHistoriquePrixsRelatedByIdAgentCreaScheduledForDeletion) {
                $this->commonExecHistoriquePrixsRelatedByIdAgentCreaScheduledForDeletion = clone $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea;
                $this->commonExecHistoriquePrixsRelatedByIdAgentCreaScheduledForDeletion->clear();
            }
            $this->commonExecHistoriquePrixsRelatedByIdAgentCreaScheduledForDeletion[]= $commonExecHistoriquePrixRelatedByIdAgentCrea;
            $commonExecHistoriquePrixRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsRelatedByIdAgentCreaJoinCommonExecAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecAvenant', $join_behavior);

        return $this->getCommonExecHistoriquePrixsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsRelatedByIdAgentCreaJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecHistoriquePrixsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsRelatedByIdAgentCreaJoinCommonExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecPrix', $join_behavior);

        return $this->getCommonExecHistoriquePrixsRelatedByIdAgentCrea($query, $con);
    }

    /**
     * Clears out the collCommonExecHistoriquePrixsRelatedByIdAgentModif collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecHistoriquePrixsRelatedByIdAgentModif()
     */
    public function clearCommonExecHistoriquePrixsRelatedByIdAgentModif()
    {
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentModifPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecHistoriquePrixsRelatedByIdAgentModif collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecHistoriquePrixsRelatedByIdAgentModif($v = true)
    {
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentModifPartial = $v;
    }

    /**
     * Initializes the collCommonExecHistoriquePrixsRelatedByIdAgentModif collection.
     *
     * By default this just sets the collCommonExecHistoriquePrixsRelatedByIdAgentModif collection to an empty array (like clearcollCommonExecHistoriquePrixsRelatedByIdAgentModif());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecHistoriquePrixsRelatedByIdAgentModif($overrideExisting = true)
    {
        if (null !== $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif && !$overrideExisting) {
            return;
        }
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif = new PropelObjectCollection();
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif->setModel('CommonExecHistoriquePrix');
    }

    /**
     * Gets an array of CommonExecHistoriquePrix objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     * @throws PropelException
     */
    public function getCommonExecHistoriquePrixsRelatedByIdAgentModif($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecHistoriquePrixsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif) {
                // return empty collection
                $this->initCommonExecHistoriquePrixsRelatedByIdAgentModif();
            } else {
                $collCommonExecHistoriquePrixsRelatedByIdAgentModif = CommonExecHistoriquePrixQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentModif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecHistoriquePrixsRelatedByIdAgentModifPartial && count($collCommonExecHistoriquePrixsRelatedByIdAgentModif)) {
                      $this->initCommonExecHistoriquePrixsRelatedByIdAgentModif(false);

                      foreach ($collCommonExecHistoriquePrixsRelatedByIdAgentModif as $obj) {
                        if (false == $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif->contains($obj)) {
                          $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif->append($obj);
                        }
                      }

                      $this->collCommonExecHistoriquePrixsRelatedByIdAgentModifPartial = true;
                    }

                    $collCommonExecHistoriquePrixsRelatedByIdAgentModif->getInternalIterator()->rewind();

                    return $collCommonExecHistoriquePrixsRelatedByIdAgentModif;
                }

                if ($partial && $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif) {
                    foreach ($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecHistoriquePrixsRelatedByIdAgentModif[] = $obj;
                        }
                    }
                }

                $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif = $collCommonExecHistoriquePrixsRelatedByIdAgentModif;
                $this->collCommonExecHistoriquePrixsRelatedByIdAgentModifPartial = false;
            }
        }

        return $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif;
    }

    /**
     * Sets a collection of CommonExecHistoriquePrixRelatedByIdAgentModif objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecHistoriquePrixsRelatedByIdAgentModif A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecHistoriquePrixsRelatedByIdAgentModif(PropelCollection $commonExecHistoriquePrixsRelatedByIdAgentModif, PropelPDO $con = null)
    {
        $commonExecHistoriquePrixsRelatedByIdAgentModifToDelete = $this->getCommonExecHistoriquePrixsRelatedByIdAgentModif(new Criteria(), $con)->diff($commonExecHistoriquePrixsRelatedByIdAgentModif);


        $this->commonExecHistoriquePrixsRelatedByIdAgentModifScheduledForDeletion = $commonExecHistoriquePrixsRelatedByIdAgentModifToDelete;

        foreach ($commonExecHistoriquePrixsRelatedByIdAgentModifToDelete as $commonExecHistoriquePrixRelatedByIdAgentModifRemoved) {
            $commonExecHistoriquePrixRelatedByIdAgentModifRemoved->setCommonAgentRelatedByIdAgentModif(null);
        }

        $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif = null;
        foreach ($commonExecHistoriquePrixsRelatedByIdAgentModif as $commonExecHistoriquePrixRelatedByIdAgentModif) {
            $this->addCommonExecHistoriquePrixRelatedByIdAgentModif($commonExecHistoriquePrixRelatedByIdAgentModif);
        }

        $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif = $commonExecHistoriquePrixsRelatedByIdAgentModif;
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentModifPartial = false;

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
    public function countCommonExecHistoriquePrixsRelatedByIdAgentModif(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecHistoriquePrixsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecHistoriquePrixsRelatedByIdAgentModif());
            }
            $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentModif($this)
                ->count($con);
        }

        return count($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif);
    }

    /**
     * Method called to associate a CommonExecHistoriquePrix object to this object
     * through the CommonExecHistoriquePrix foreign key attribute.
     *
     * @param   CommonExecHistoriquePrix $l CommonExecHistoriquePrix
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecHistoriquePrixRelatedByIdAgentModif(CommonExecHistoriquePrix $l)
    {
        if ($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif === null) {
            $this->initCommonExecHistoriquePrixsRelatedByIdAgentModif();
            $this->collCommonExecHistoriquePrixsRelatedByIdAgentModifPartial = true;
        }
        if (!in_array($l, $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecHistoriquePrixRelatedByIdAgentModif($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecHistoriquePrixRelatedByIdAgentModif $commonExecHistoriquePrixRelatedByIdAgentModif The commonExecHistoriquePrixRelatedByIdAgentModif object to add.
     */
    protected function doAddCommonExecHistoriquePrixRelatedByIdAgentModif($commonExecHistoriquePrixRelatedByIdAgentModif)
    {
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif[]= $commonExecHistoriquePrixRelatedByIdAgentModif;
        $commonExecHistoriquePrixRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif($this);
    }

    /**
     * @param	CommonExecHistoriquePrixRelatedByIdAgentModif $commonExecHistoriquePrixRelatedByIdAgentModif The commonExecHistoriquePrixRelatedByIdAgentModif object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecHistoriquePrixRelatedByIdAgentModif($commonExecHistoriquePrixRelatedByIdAgentModif)
    {
        if ($this->getCommonExecHistoriquePrixsRelatedByIdAgentModif()->contains($commonExecHistoriquePrixRelatedByIdAgentModif)) {
            $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif->remove($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif->search($commonExecHistoriquePrixRelatedByIdAgentModif));
            if (null === $this->commonExecHistoriquePrixsRelatedByIdAgentModifScheduledForDeletion) {
                $this->commonExecHistoriquePrixsRelatedByIdAgentModifScheduledForDeletion = clone $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif;
                $this->commonExecHistoriquePrixsRelatedByIdAgentModifScheduledForDeletion->clear();
            }
            $this->commonExecHistoriquePrixsRelatedByIdAgentModifScheduledForDeletion[]= $commonExecHistoriquePrixRelatedByIdAgentModif;
            $commonExecHistoriquePrixRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsRelatedByIdAgentModifJoinCommonExecAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecAvenant', $join_behavior);

        return $this->getCommonExecHistoriquePrixsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsRelatedByIdAgentModifJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecHistoriquePrixsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecHistoriquePrix[] List of CommonExecHistoriquePrix objects
     */
    public function getCommonExecHistoriquePrixsRelatedByIdAgentModifJoinCommonExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecPrix', $join_behavior);

        return $this->getCommonExecHistoriquePrixsRelatedByIdAgentModif($query, $con);
    }

    /**
     * Clears out the collCommonExecLivrableContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecLivrableContrats()
     */
    public function clearCommonExecLivrableContrats()
    {
        $this->collCommonExecLivrableContrats = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecLivrableContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecLivrableContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecLivrableContrats($v = true)
    {
        $this->collCommonExecLivrableContratsPartial = $v;
    }

    /**
     * Initializes the collCommonExecLivrableContrats collection.
     *
     * By default this just sets the collCommonExecLivrableContrats collection to an empty array (like clearcollCommonExecLivrableContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecLivrableContrats($overrideExisting = true)
    {
        if (null !== $this->collCommonExecLivrableContrats && !$overrideExisting) {
            return;
        }
        $this->collCommonExecLivrableContrats = new PropelObjectCollection();
        $this->collCommonExecLivrableContrats->setModel('CommonExecLivrableContrat');
    }

    /**
     * Gets an array of CommonExecLivrableContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecLivrableContrat[] List of CommonExecLivrableContrat objects
     * @throws PropelException
     */
    public function getCommonExecLivrableContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecLivrableContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecLivrableContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecLivrableContrats) {
                // return empty collection
                $this->initCommonExecLivrableContrats();
            } else {
                $collCommonExecLivrableContrats = CommonExecLivrableContratQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecLivrableContratsPartial && count($collCommonExecLivrableContrats)) {
                      $this->initCommonExecLivrableContrats(false);

                      foreach ($collCommonExecLivrableContrats as $obj) {
                        if (false == $this->collCommonExecLivrableContrats->contains($obj)) {
                          $this->collCommonExecLivrableContrats->append($obj);
                        }
                      }

                      $this->collCommonExecLivrableContratsPartial = true;
                    }

                    $collCommonExecLivrableContrats->getInternalIterator()->rewind();

                    return $collCommonExecLivrableContrats;
                }

                if ($partial && $this->collCommonExecLivrableContrats) {
                    foreach ($this->collCommonExecLivrableContrats as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecLivrableContrats[] = $obj;
                        }
                    }
                }

                $this->collCommonExecLivrableContrats = $collCommonExecLivrableContrats;
                $this->collCommonExecLivrableContratsPartial = false;
            }
        }

        return $this->collCommonExecLivrableContrats;
    }

    /**
     * Sets a collection of CommonExecLivrableContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecLivrableContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecLivrableContrats(PropelCollection $commonExecLivrableContrats, PropelPDO $con = null)
    {
        $commonExecLivrableContratsToDelete = $this->getCommonExecLivrableContrats(new Criteria(), $con)->diff($commonExecLivrableContrats);


        $this->commonExecLivrableContratsScheduledForDeletion = $commonExecLivrableContratsToDelete;

        foreach ($commonExecLivrableContratsToDelete as $commonExecLivrableContratRemoved) {
            $commonExecLivrableContratRemoved->setCommonAgent(null);
        }

        $this->collCommonExecLivrableContrats = null;
        foreach ($commonExecLivrableContrats as $commonExecLivrableContrat) {
            $this->addCommonExecLivrableContrat($commonExecLivrableContrat);
        }

        $this->collCommonExecLivrableContrats = $commonExecLivrableContrats;
        $this->collCommonExecLivrableContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecLivrableContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecLivrableContrat objects.
     * @throws PropelException
     */
    public function countCommonExecLivrableContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecLivrableContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecLivrableContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecLivrableContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecLivrableContrats());
            }
            $query = CommonExecLivrableContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonExecLivrableContrats);
    }

    /**
     * Method called to associate a CommonExecLivrableContrat object to this object
     * through the CommonExecLivrableContrat foreign key attribute.
     *
     * @param   CommonExecLivrableContrat $l CommonExecLivrableContrat
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecLivrableContrat(CommonExecLivrableContrat $l)
    {
        if ($this->collCommonExecLivrableContrats === null) {
            $this->initCommonExecLivrableContrats();
            $this->collCommonExecLivrableContratsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecLivrableContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecLivrableContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecLivrableContrat $commonExecLivrableContrat The commonExecLivrableContrat object to add.
     */
    protected function doAddCommonExecLivrableContrat($commonExecLivrableContrat)
    {
        $this->collCommonExecLivrableContrats[]= $commonExecLivrableContrat;
        $commonExecLivrableContrat->setCommonAgent($this);
    }

    /**
     * @param	CommonExecLivrableContrat $commonExecLivrableContrat The commonExecLivrableContrat object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecLivrableContrat($commonExecLivrableContrat)
    {
        if ($this->getCommonExecLivrableContrats()->contains($commonExecLivrableContrat)) {
            $this->collCommonExecLivrableContrats->remove($this->collCommonExecLivrableContrats->search($commonExecLivrableContrat));
            if (null === $this->commonExecLivrableContratsScheduledForDeletion) {
                $this->commonExecLivrableContratsScheduledForDeletion = clone $this->collCommonExecLivrableContrats;
                $this->commonExecLivrableContratsScheduledForDeletion->clear();
            }
            $this->commonExecLivrableContratsScheduledForDeletion[]= clone $commonExecLivrableContrat;
            $commonExecLivrableContrat->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecLivrableContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecLivrableContrat[] List of CommonExecLivrableContrat objects
     */
    public function getCommonExecLivrableContratsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecLivrableContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecLivrableContrats($query, $con);
    }

    /**
     * Clears out the collCommonExecPhasesRelatedByIdAgentCrea collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecPhasesRelatedByIdAgentCrea()
     */
    public function clearCommonExecPhasesRelatedByIdAgentCrea()
    {
        $this->collCommonExecPhasesRelatedByIdAgentCrea = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPhasesRelatedByIdAgentCreaPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPhasesRelatedByIdAgentCrea collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPhasesRelatedByIdAgentCrea($v = true)
    {
        $this->collCommonExecPhasesRelatedByIdAgentCreaPartial = $v;
    }

    /**
     * Initializes the collCommonExecPhasesRelatedByIdAgentCrea collection.
     *
     * By default this just sets the collCommonExecPhasesRelatedByIdAgentCrea collection to an empty array (like clearcollCommonExecPhasesRelatedByIdAgentCrea());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPhasesRelatedByIdAgentCrea($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPhasesRelatedByIdAgentCrea && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPhasesRelatedByIdAgentCrea = new PropelObjectCollection();
        $this->collCommonExecPhasesRelatedByIdAgentCrea->setModel('CommonExecPhase');
    }

    /**
     * Gets an array of CommonExecPhase objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPhase[] List of CommonExecPhase objects
     * @throws PropelException
     */
    public function getCommonExecPhasesRelatedByIdAgentCrea($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPhasesRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecPhasesRelatedByIdAgentCrea || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPhasesRelatedByIdAgentCrea) {
                // return empty collection
                $this->initCommonExecPhasesRelatedByIdAgentCrea();
            } else {
                $collCommonExecPhasesRelatedByIdAgentCrea = CommonExecPhaseQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentCrea($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPhasesRelatedByIdAgentCreaPartial && count($collCommonExecPhasesRelatedByIdAgentCrea)) {
                      $this->initCommonExecPhasesRelatedByIdAgentCrea(false);

                      foreach ($collCommonExecPhasesRelatedByIdAgentCrea as $obj) {
                        if (false == $this->collCommonExecPhasesRelatedByIdAgentCrea->contains($obj)) {
                          $this->collCommonExecPhasesRelatedByIdAgentCrea->append($obj);
                        }
                      }

                      $this->collCommonExecPhasesRelatedByIdAgentCreaPartial = true;
                    }

                    $collCommonExecPhasesRelatedByIdAgentCrea->getInternalIterator()->rewind();

                    return $collCommonExecPhasesRelatedByIdAgentCrea;
                }

                if ($partial && $this->collCommonExecPhasesRelatedByIdAgentCrea) {
                    foreach ($this->collCommonExecPhasesRelatedByIdAgentCrea as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPhasesRelatedByIdAgentCrea[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPhasesRelatedByIdAgentCrea = $collCommonExecPhasesRelatedByIdAgentCrea;
                $this->collCommonExecPhasesRelatedByIdAgentCreaPartial = false;
            }
        }

        return $this->collCommonExecPhasesRelatedByIdAgentCrea;
    }

    /**
     * Sets a collection of CommonExecPhaseRelatedByIdAgentCrea objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPhasesRelatedByIdAgentCrea A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecPhasesRelatedByIdAgentCrea(PropelCollection $commonExecPhasesRelatedByIdAgentCrea, PropelPDO $con = null)
    {
        $commonExecPhasesRelatedByIdAgentCreaToDelete = $this->getCommonExecPhasesRelatedByIdAgentCrea(new Criteria(), $con)->diff($commonExecPhasesRelatedByIdAgentCrea);


        $this->commonExecPhasesRelatedByIdAgentCreaScheduledForDeletion = $commonExecPhasesRelatedByIdAgentCreaToDelete;

        foreach ($commonExecPhasesRelatedByIdAgentCreaToDelete as $commonExecPhaseRelatedByIdAgentCreaRemoved) {
            $commonExecPhaseRelatedByIdAgentCreaRemoved->setCommonAgentRelatedByIdAgentCrea(null);
        }

        $this->collCommonExecPhasesRelatedByIdAgentCrea = null;
        foreach ($commonExecPhasesRelatedByIdAgentCrea as $commonExecPhaseRelatedByIdAgentCrea) {
            $this->addCommonExecPhaseRelatedByIdAgentCrea($commonExecPhaseRelatedByIdAgentCrea);
        }

        $this->collCommonExecPhasesRelatedByIdAgentCrea = $commonExecPhasesRelatedByIdAgentCrea;
        $this->collCommonExecPhasesRelatedByIdAgentCreaPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPhase objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPhase objects.
     * @throws PropelException
     */
    public function countCommonExecPhasesRelatedByIdAgentCrea(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPhasesRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecPhasesRelatedByIdAgentCrea || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPhasesRelatedByIdAgentCrea) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPhasesRelatedByIdAgentCrea());
            }
            $query = CommonExecPhaseQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentCrea($this)
                ->count($con);
        }

        return count($this->collCommonExecPhasesRelatedByIdAgentCrea);
    }

    /**
     * Method called to associate a CommonExecPhase object to this object
     * through the CommonExecPhase foreign key attribute.
     *
     * @param   CommonExecPhase $l CommonExecPhase
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecPhaseRelatedByIdAgentCrea(CommonExecPhase $l)
    {
        if ($this->collCommonExecPhasesRelatedByIdAgentCrea === null) {
            $this->initCommonExecPhasesRelatedByIdAgentCrea();
            $this->collCommonExecPhasesRelatedByIdAgentCreaPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPhasesRelatedByIdAgentCrea->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPhaseRelatedByIdAgentCrea($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPhaseRelatedByIdAgentCrea $commonExecPhaseRelatedByIdAgentCrea The commonExecPhaseRelatedByIdAgentCrea object to add.
     */
    protected function doAddCommonExecPhaseRelatedByIdAgentCrea($commonExecPhaseRelatedByIdAgentCrea)
    {
        $this->collCommonExecPhasesRelatedByIdAgentCrea[]= $commonExecPhaseRelatedByIdAgentCrea;
        $commonExecPhaseRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea($this);
    }

    /**
     * @param	CommonExecPhaseRelatedByIdAgentCrea $commonExecPhaseRelatedByIdAgentCrea The commonExecPhaseRelatedByIdAgentCrea object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecPhaseRelatedByIdAgentCrea($commonExecPhaseRelatedByIdAgentCrea)
    {
        if ($this->getCommonExecPhasesRelatedByIdAgentCrea()->contains($commonExecPhaseRelatedByIdAgentCrea)) {
            $this->collCommonExecPhasesRelatedByIdAgentCrea->remove($this->collCommonExecPhasesRelatedByIdAgentCrea->search($commonExecPhaseRelatedByIdAgentCrea));
            if (null === $this->commonExecPhasesRelatedByIdAgentCreaScheduledForDeletion) {
                $this->commonExecPhasesRelatedByIdAgentCreaScheduledForDeletion = clone $this->collCommonExecPhasesRelatedByIdAgentCrea;
                $this->commonExecPhasesRelatedByIdAgentCreaScheduledForDeletion->clear();
            }
            $this->commonExecPhasesRelatedByIdAgentCreaScheduledForDeletion[]= $commonExecPhaseRelatedByIdAgentCrea;
            $commonExecPhaseRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPhasesRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPhase[] List of CommonExecPhase objects
     */
    public function getCommonExecPhasesRelatedByIdAgentCreaJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPhaseQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPhasesRelatedByIdAgentCrea($query, $con);
    }

    /**
     * Clears out the collCommonExecPhasesRelatedByIdAgentModif collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecPhasesRelatedByIdAgentModif()
     */
    public function clearCommonExecPhasesRelatedByIdAgentModif()
    {
        $this->collCommonExecPhasesRelatedByIdAgentModif = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPhasesRelatedByIdAgentModifPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPhasesRelatedByIdAgentModif collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPhasesRelatedByIdAgentModif($v = true)
    {
        $this->collCommonExecPhasesRelatedByIdAgentModifPartial = $v;
    }

    /**
     * Initializes the collCommonExecPhasesRelatedByIdAgentModif collection.
     *
     * By default this just sets the collCommonExecPhasesRelatedByIdAgentModif collection to an empty array (like clearcollCommonExecPhasesRelatedByIdAgentModif());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPhasesRelatedByIdAgentModif($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPhasesRelatedByIdAgentModif && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPhasesRelatedByIdAgentModif = new PropelObjectCollection();
        $this->collCommonExecPhasesRelatedByIdAgentModif->setModel('CommonExecPhase');
    }

    /**
     * Gets an array of CommonExecPhase objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPhase[] List of CommonExecPhase objects
     * @throws PropelException
     */
    public function getCommonExecPhasesRelatedByIdAgentModif($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPhasesRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecPhasesRelatedByIdAgentModif || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPhasesRelatedByIdAgentModif) {
                // return empty collection
                $this->initCommonExecPhasesRelatedByIdAgentModif();
            } else {
                $collCommonExecPhasesRelatedByIdAgentModif = CommonExecPhaseQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentModif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPhasesRelatedByIdAgentModifPartial && count($collCommonExecPhasesRelatedByIdAgentModif)) {
                      $this->initCommonExecPhasesRelatedByIdAgentModif(false);

                      foreach ($collCommonExecPhasesRelatedByIdAgentModif as $obj) {
                        if (false == $this->collCommonExecPhasesRelatedByIdAgentModif->contains($obj)) {
                          $this->collCommonExecPhasesRelatedByIdAgentModif->append($obj);
                        }
                      }

                      $this->collCommonExecPhasesRelatedByIdAgentModifPartial = true;
                    }

                    $collCommonExecPhasesRelatedByIdAgentModif->getInternalIterator()->rewind();

                    return $collCommonExecPhasesRelatedByIdAgentModif;
                }

                if ($partial && $this->collCommonExecPhasesRelatedByIdAgentModif) {
                    foreach ($this->collCommonExecPhasesRelatedByIdAgentModif as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPhasesRelatedByIdAgentModif[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPhasesRelatedByIdAgentModif = $collCommonExecPhasesRelatedByIdAgentModif;
                $this->collCommonExecPhasesRelatedByIdAgentModifPartial = false;
            }
        }

        return $this->collCommonExecPhasesRelatedByIdAgentModif;
    }

    /**
     * Sets a collection of CommonExecPhaseRelatedByIdAgentModif objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPhasesRelatedByIdAgentModif A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecPhasesRelatedByIdAgentModif(PropelCollection $commonExecPhasesRelatedByIdAgentModif, PropelPDO $con = null)
    {
        $commonExecPhasesRelatedByIdAgentModifToDelete = $this->getCommonExecPhasesRelatedByIdAgentModif(new Criteria(), $con)->diff($commonExecPhasesRelatedByIdAgentModif);


        $this->commonExecPhasesRelatedByIdAgentModifScheduledForDeletion = $commonExecPhasesRelatedByIdAgentModifToDelete;

        foreach ($commonExecPhasesRelatedByIdAgentModifToDelete as $commonExecPhaseRelatedByIdAgentModifRemoved) {
            $commonExecPhaseRelatedByIdAgentModifRemoved->setCommonAgentRelatedByIdAgentModif(null);
        }

        $this->collCommonExecPhasesRelatedByIdAgentModif = null;
        foreach ($commonExecPhasesRelatedByIdAgentModif as $commonExecPhaseRelatedByIdAgentModif) {
            $this->addCommonExecPhaseRelatedByIdAgentModif($commonExecPhaseRelatedByIdAgentModif);
        }

        $this->collCommonExecPhasesRelatedByIdAgentModif = $commonExecPhasesRelatedByIdAgentModif;
        $this->collCommonExecPhasesRelatedByIdAgentModifPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPhase objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPhase objects.
     * @throws PropelException
     */
    public function countCommonExecPhasesRelatedByIdAgentModif(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPhasesRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecPhasesRelatedByIdAgentModif || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPhasesRelatedByIdAgentModif) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPhasesRelatedByIdAgentModif());
            }
            $query = CommonExecPhaseQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentModif($this)
                ->count($con);
        }

        return count($this->collCommonExecPhasesRelatedByIdAgentModif);
    }

    /**
     * Method called to associate a CommonExecPhase object to this object
     * through the CommonExecPhase foreign key attribute.
     *
     * @param   CommonExecPhase $l CommonExecPhase
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecPhaseRelatedByIdAgentModif(CommonExecPhase $l)
    {
        if ($this->collCommonExecPhasesRelatedByIdAgentModif === null) {
            $this->initCommonExecPhasesRelatedByIdAgentModif();
            $this->collCommonExecPhasesRelatedByIdAgentModifPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPhasesRelatedByIdAgentModif->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPhaseRelatedByIdAgentModif($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPhaseRelatedByIdAgentModif $commonExecPhaseRelatedByIdAgentModif The commonExecPhaseRelatedByIdAgentModif object to add.
     */
    protected function doAddCommonExecPhaseRelatedByIdAgentModif($commonExecPhaseRelatedByIdAgentModif)
    {
        $this->collCommonExecPhasesRelatedByIdAgentModif[]= $commonExecPhaseRelatedByIdAgentModif;
        $commonExecPhaseRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif($this);
    }

    /**
     * @param	CommonExecPhaseRelatedByIdAgentModif $commonExecPhaseRelatedByIdAgentModif The commonExecPhaseRelatedByIdAgentModif object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecPhaseRelatedByIdAgentModif($commonExecPhaseRelatedByIdAgentModif)
    {
        if ($this->getCommonExecPhasesRelatedByIdAgentModif()->contains($commonExecPhaseRelatedByIdAgentModif)) {
            $this->collCommonExecPhasesRelatedByIdAgentModif->remove($this->collCommonExecPhasesRelatedByIdAgentModif->search($commonExecPhaseRelatedByIdAgentModif));
            if (null === $this->commonExecPhasesRelatedByIdAgentModifScheduledForDeletion) {
                $this->commonExecPhasesRelatedByIdAgentModifScheduledForDeletion = clone $this->collCommonExecPhasesRelatedByIdAgentModif;
                $this->commonExecPhasesRelatedByIdAgentModifScheduledForDeletion->clear();
            }
            $this->commonExecPhasesRelatedByIdAgentModifScheduledForDeletion[]= $commonExecPhaseRelatedByIdAgentModif;
            $commonExecPhaseRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPhasesRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPhase[] List of CommonExecPhase objects
     */
    public function getCommonExecPhasesRelatedByIdAgentModifJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPhaseQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPhasesRelatedByIdAgentModif($query, $con);
    }

    /**
     * Clears out the collCommonExecPieces collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecPieces()
     */
    public function clearCommonExecPieces()
    {
        $this->collCommonExecPieces = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPiecesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPieces collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPieces($v = true)
    {
        $this->collCommonExecPiecesPartial = $v;
    }

    /**
     * Initializes the collCommonExecPieces collection.
     *
     * By default this just sets the collCommonExecPieces collection to an empty array (like clearcollCommonExecPieces());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPieces($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPieces && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPieces = new PropelObjectCollection();
        $this->collCommonExecPieces->setModel('CommonExecPiece');
    }

    /**
     * Gets an array of CommonExecPiece objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPiece[] List of CommonExecPiece objects
     * @throws PropelException
     */
    public function getCommonExecPieces($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPiecesPartial && !$this->isNew();
        if (null === $this->collCommonExecPieces || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieces) {
                // return empty collection
                $this->initCommonExecPieces();
            } else {
                $collCommonExecPieces = CommonExecPieceQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPiecesPartial && count($collCommonExecPieces)) {
                      $this->initCommonExecPieces(false);

                      foreach ($collCommonExecPieces as $obj) {
                        if (false == $this->collCommonExecPieces->contains($obj)) {
                          $this->collCommonExecPieces->append($obj);
                        }
                      }

                      $this->collCommonExecPiecesPartial = true;
                    }

                    $collCommonExecPieces->getInternalIterator()->rewind();

                    return $collCommonExecPieces;
                }

                if ($partial && $this->collCommonExecPieces) {
                    foreach ($this->collCommonExecPieces as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPieces[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPieces = $collCommonExecPieces;
                $this->collCommonExecPiecesPartial = false;
            }
        }

        return $this->collCommonExecPieces;
    }

    /**
     * Sets a collection of CommonExecPiece objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPieces A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecPieces(PropelCollection $commonExecPieces, PropelPDO $con = null)
    {
        $commonExecPiecesToDelete = $this->getCommonExecPieces(new Criteria(), $con)->diff($commonExecPieces);


        $this->commonExecPiecesScheduledForDeletion = $commonExecPiecesToDelete;

        foreach ($commonExecPiecesToDelete as $commonExecPieceRemoved) {
            $commonExecPieceRemoved->setCommonAgent(null);
        }

        $this->collCommonExecPieces = null;
        foreach ($commonExecPieces as $commonExecPiece) {
            $this->addCommonExecPiece($commonExecPiece);
        }

        $this->collCommonExecPieces = $commonExecPieces;
        $this->collCommonExecPiecesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPiece objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPiece objects.
     * @throws PropelException
     */
    public function countCommonExecPieces(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPiecesPartial && !$this->isNew();
        if (null === $this->collCommonExecPieces || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieces) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPieces());
            }
            $query = CommonExecPieceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonExecPieces);
    }

    /**
     * Method called to associate a CommonExecPiece object to this object
     * through the CommonExecPiece foreign key attribute.
     *
     * @param   CommonExecPiece $l CommonExecPiece
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecPiece(CommonExecPiece $l)
    {
        if ($this->collCommonExecPieces === null) {
            $this->initCommonExecPieces();
            $this->collCommonExecPiecesPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPieces->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPiece($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPiece $commonExecPiece The commonExecPiece object to add.
     */
    protected function doAddCommonExecPiece($commonExecPiece)
    {
        $this->collCommonExecPieces[]= $commonExecPiece;
        $commonExecPiece->setCommonAgent($this);
    }

    /**
     * @param	CommonExecPiece $commonExecPiece The commonExecPiece object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecPiece($commonExecPiece)
    {
        if ($this->getCommonExecPieces()->contains($commonExecPiece)) {
            $this->collCommonExecPieces->remove($this->collCommonExecPieces->search($commonExecPiece));
            if (null === $this->commonExecPiecesScheduledForDeletion) {
                $this->commonExecPiecesScheduledForDeletion = clone $this->collCommonExecPieces;
                $this->commonExecPiecesScheduledForDeletion->clear();
            }
            $this->commonExecPiecesScheduledForDeletion[]= clone $commonExecPiece;
            $commonExecPiece->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieces from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPiece[] List of CommonExecPiece objects
     */
    public function getCommonExecPiecesJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPieces($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieces from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPiece[] List of CommonExecPiece objects
     */
    public function getCommonExecPiecesJoinCommonExecTypePiece($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypePiece', $join_behavior);

        return $this->getCommonExecPieces($query, $con);
    }

    /**
     * Clears out the collCommonExecPieceAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
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
     * If this CommonAgent is new, it will return
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
                    ->filterByCommonAgent($this)
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
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecPieceAvenants(PropelCollection $commonExecPieceAvenants, PropelPDO $con = null)
    {
        $commonExecPieceAvenantsToDelete = $this->getCommonExecPieceAvenants(new Criteria(), $con)->diff($commonExecPieceAvenants);


        $this->commonExecPieceAvenantsScheduledForDeletion = $commonExecPieceAvenantsToDelete;

        foreach ($commonExecPieceAvenantsToDelete as $commonExecPieceAvenantRemoved) {
            $commonExecPieceAvenantRemoved->setCommonAgent(null);
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
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceAvenants);
    }

    /**
     * Method called to associate a CommonExecPieceAvenant object to this object
     * through the CommonExecPieceAvenant foreign key attribute.
     *
     * @param   CommonExecPieceAvenant $l CommonExecPieceAvenant
     * @return CommonAgent The current object (for fluent API support)
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
        $commonExecPieceAvenant->setCommonAgent($this);
    }

    /**
     * @param	CommonExecPieceAvenant $commonExecPieceAvenant The commonExecPieceAvenant object to remove.
     * @return CommonAgent The current object (for fluent API support)
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
            $commonExecPieceAvenant->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieceAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceAvenant[] List of CommonExecPieceAvenant objects
     */
    public function getCommonExecPieceAvenantsJoinCommonExecAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecAvenant', $join_behavior);

        return $this->getCommonExecPieceAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieceAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
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
     * Clears out the collCommonExecPieceContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecPieceContrats()
     */
    public function clearCommonExecPieceContrats()
    {
        $this->collCommonExecPieceContrats = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPieceContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPieceContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPieceContrats($v = true)
    {
        $this->collCommonExecPieceContratsPartial = $v;
    }

    /**
     * Initializes the collCommonExecPieceContrats collection.
     *
     * By default this just sets the collCommonExecPieceContrats collection to an empty array (like clearcollCommonExecPieceContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPieceContrats($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPieceContrats && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPieceContrats = new PropelObjectCollection();
        $this->collCommonExecPieceContrats->setModel('CommonExecPieceContrat');
    }

    /**
     * Gets an array of CommonExecPieceContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPieceContrat[] List of CommonExecPieceContrat objects
     * @throws PropelException
     */
    public function getCommonExecPieceContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPieceContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecPieceContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieceContrats) {
                // return empty collection
                $this->initCommonExecPieceContrats();
            } else {
                $collCommonExecPieceContrats = CommonExecPieceContratQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPieceContratsPartial && count($collCommonExecPieceContrats)) {
                      $this->initCommonExecPieceContrats(false);

                      foreach ($collCommonExecPieceContrats as $obj) {
                        if (false == $this->collCommonExecPieceContrats->contains($obj)) {
                          $this->collCommonExecPieceContrats->append($obj);
                        }
                      }

                      $this->collCommonExecPieceContratsPartial = true;
                    }

                    $collCommonExecPieceContrats->getInternalIterator()->rewind();

                    return $collCommonExecPieceContrats;
                }

                if ($partial && $this->collCommonExecPieceContrats) {
                    foreach ($this->collCommonExecPieceContrats as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPieceContrats[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPieceContrats = $collCommonExecPieceContrats;
                $this->collCommonExecPieceContratsPartial = false;
            }
        }

        return $this->collCommonExecPieceContrats;
    }

    /**
     * Sets a collection of CommonExecPieceContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPieceContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecPieceContrats(PropelCollection $commonExecPieceContrats, PropelPDO $con = null)
    {
        $commonExecPieceContratsToDelete = $this->getCommonExecPieceContrats(new Criteria(), $con)->diff($commonExecPieceContrats);


        $this->commonExecPieceContratsScheduledForDeletion = $commonExecPieceContratsToDelete;

        foreach ($commonExecPieceContratsToDelete as $commonExecPieceContratRemoved) {
            $commonExecPieceContratRemoved->setCommonAgent(null);
        }

        $this->collCommonExecPieceContrats = null;
        foreach ($commonExecPieceContrats as $commonExecPieceContrat) {
            $this->addCommonExecPieceContrat($commonExecPieceContrat);
        }

        $this->collCommonExecPieceContrats = $commonExecPieceContrats;
        $this->collCommonExecPieceContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPieceContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPieceContrat objects.
     * @throws PropelException
     */
    public function countCommonExecPieceContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPieceContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecPieceContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieceContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPieceContrats());
            }
            $query = CommonExecPieceContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceContrats);
    }

    /**
     * Method called to associate a CommonExecPieceContrat object to this object
     * through the CommonExecPieceContrat foreign key attribute.
     *
     * @param   CommonExecPieceContrat $l CommonExecPieceContrat
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecPieceContrat(CommonExecPieceContrat $l)
    {
        if ($this->collCommonExecPieceContrats === null) {
            $this->initCommonExecPieceContrats();
            $this->collCommonExecPieceContratsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPieceContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPieceContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPieceContrat $commonExecPieceContrat The commonExecPieceContrat object to add.
     */
    protected function doAddCommonExecPieceContrat($commonExecPieceContrat)
    {
        $this->collCommonExecPieceContrats[]= $commonExecPieceContrat;
        $commonExecPieceContrat->setCommonAgent($this);
    }

    /**
     * @param	CommonExecPieceContrat $commonExecPieceContrat The commonExecPieceContrat object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecPieceContrat($commonExecPieceContrat)
    {
        if ($this->getCommonExecPieceContrats()->contains($commonExecPieceContrat)) {
            $this->collCommonExecPieceContrats->remove($this->collCommonExecPieceContrats->search($commonExecPieceContrat));
            if (null === $this->commonExecPieceContratsScheduledForDeletion) {
                $this->commonExecPieceContratsScheduledForDeletion = clone $this->collCommonExecPieceContrats;
                $this->commonExecPieceContratsScheduledForDeletion->clear();
            }
            $this->commonExecPieceContratsScheduledForDeletion[]= clone $commonExecPieceContrat;
            $commonExecPieceContrat->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieceContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceContrat[] List of CommonExecPieceContrat objects
     */
    public function getCommonExecPieceContratsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPieceContrats($query, $con);
    }

    /**
     * Clears out the collCommonExecPieceDossierpaiements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecPieceDossierpaiements()
     */
    public function clearCommonExecPieceDossierpaiements()
    {
        $this->collCommonExecPieceDossierpaiements = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPieceDossierpaiementsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPieceDossierpaiements collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPieceDossierpaiements($v = true)
    {
        $this->collCommonExecPieceDossierpaiementsPartial = $v;
    }

    /**
     * Initializes the collCommonExecPieceDossierpaiements collection.
     *
     * By default this just sets the collCommonExecPieceDossierpaiements collection to an empty array (like clearcollCommonExecPieceDossierpaiements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPieceDossierpaiements($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPieceDossierpaiements && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPieceDossierpaiements = new PropelObjectCollection();
        $this->collCommonExecPieceDossierpaiements->setModel('CommonExecPieceDossierpaiement');
    }

    /**
     * Gets an array of CommonExecPieceDossierpaiement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPieceDossierpaiement[] List of CommonExecPieceDossierpaiement objects
     * @throws PropelException
     */
    public function getCommonExecPieceDossierpaiements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPieceDossierpaiementsPartial && !$this->isNew();
        if (null === $this->collCommonExecPieceDossierpaiements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieceDossierpaiements) {
                // return empty collection
                $this->initCommonExecPieceDossierpaiements();
            } else {
                $collCommonExecPieceDossierpaiements = CommonExecPieceDossierpaiementQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPieceDossierpaiementsPartial && count($collCommonExecPieceDossierpaiements)) {
                      $this->initCommonExecPieceDossierpaiements(false);

                      foreach ($collCommonExecPieceDossierpaiements as $obj) {
                        if (false == $this->collCommonExecPieceDossierpaiements->contains($obj)) {
                          $this->collCommonExecPieceDossierpaiements->append($obj);
                        }
                      }

                      $this->collCommonExecPieceDossierpaiementsPartial = true;
                    }

                    $collCommonExecPieceDossierpaiements->getInternalIterator()->rewind();

                    return $collCommonExecPieceDossierpaiements;
                }

                if ($partial && $this->collCommonExecPieceDossierpaiements) {
                    foreach ($this->collCommonExecPieceDossierpaiements as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPieceDossierpaiements[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPieceDossierpaiements = $collCommonExecPieceDossierpaiements;
                $this->collCommonExecPieceDossierpaiementsPartial = false;
            }
        }

        return $this->collCommonExecPieceDossierpaiements;
    }

    /**
     * Sets a collection of CommonExecPieceDossierpaiement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPieceDossierpaiements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecPieceDossierpaiements(PropelCollection $commonExecPieceDossierpaiements, PropelPDO $con = null)
    {
        $commonExecPieceDossierpaiementsToDelete = $this->getCommonExecPieceDossierpaiements(new Criteria(), $con)->diff($commonExecPieceDossierpaiements);


        $this->commonExecPieceDossierpaiementsScheduledForDeletion = $commonExecPieceDossierpaiementsToDelete;

        foreach ($commonExecPieceDossierpaiementsToDelete as $commonExecPieceDossierpaiementRemoved) {
            $commonExecPieceDossierpaiementRemoved->setCommonAgent(null);
        }

        $this->collCommonExecPieceDossierpaiements = null;
        foreach ($commonExecPieceDossierpaiements as $commonExecPieceDossierpaiement) {
            $this->addCommonExecPieceDossierpaiement($commonExecPieceDossierpaiement);
        }

        $this->collCommonExecPieceDossierpaiements = $commonExecPieceDossierpaiements;
        $this->collCommonExecPieceDossierpaiementsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPieceDossierpaiement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPieceDossierpaiement objects.
     * @throws PropelException
     */
    public function countCommonExecPieceDossierpaiements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPieceDossierpaiementsPartial && !$this->isNew();
        if (null === $this->collCommonExecPieceDossierpaiements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPieceDossierpaiements) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPieceDossierpaiements());
            }
            $query = CommonExecPieceDossierpaiementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceDossierpaiements);
    }

    /**
     * Method called to associate a CommonExecPieceDossierpaiement object to this object
     * through the CommonExecPieceDossierpaiement foreign key attribute.
     *
     * @param   CommonExecPieceDossierpaiement $l CommonExecPieceDossierpaiement
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecPieceDossierpaiement(CommonExecPieceDossierpaiement $l)
    {
        if ($this->collCommonExecPieceDossierpaiements === null) {
            $this->initCommonExecPieceDossierpaiements();
            $this->collCommonExecPieceDossierpaiementsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPieceDossierpaiements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPieceDossierpaiement($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPieceDossierpaiement $commonExecPieceDossierpaiement The commonExecPieceDossierpaiement object to add.
     */
    protected function doAddCommonExecPieceDossierpaiement($commonExecPieceDossierpaiement)
    {
        $this->collCommonExecPieceDossierpaiements[]= $commonExecPieceDossierpaiement;
        $commonExecPieceDossierpaiement->setCommonAgent($this);
    }

    /**
     * @param	CommonExecPieceDossierpaiement $commonExecPieceDossierpaiement The commonExecPieceDossierpaiement object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecPieceDossierpaiement($commonExecPieceDossierpaiement)
    {
        if ($this->getCommonExecPieceDossierpaiements()->contains($commonExecPieceDossierpaiement)) {
            $this->collCommonExecPieceDossierpaiements->remove($this->collCommonExecPieceDossierpaiements->search($commonExecPieceDossierpaiement));
            if (null === $this->commonExecPieceDossierpaiementsScheduledForDeletion) {
                $this->commonExecPieceDossierpaiementsScheduledForDeletion = clone $this->collCommonExecPieceDossierpaiements;
                $this->commonExecPieceDossierpaiementsScheduledForDeletion->clear();
            }
            $this->commonExecPieceDossierpaiementsScheduledForDeletion[]= $commonExecPieceDossierpaiement;
            $commonExecPieceDossierpaiement->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieceDossierpaiements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceDossierpaiement[] List of CommonExecPieceDossierpaiement objects
     */
    public function getCommonExecPieceDossierpaiementsJoinCommonExecDossierPaiement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceDossierpaiementQuery::create(null, $criteria);
        $query->joinWith('CommonExecDossierPaiement', $join_behavior);

        return $this->getCommonExecPieceDossierpaiements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieceDossierpaiements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceDossierpaiement[] List of CommonExecPieceDossierpaiement objects
     */
    public function getCommonExecPieceDossierpaiementsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceDossierpaiementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPieceDossierpaiements($query, $con);
    }

    /**
     * Clears out the collCommonExecPieceEvenements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
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
     * If this CommonAgent is new, it will return
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
                    ->filterByCommonAgent($this)
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
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecPieceEvenements(PropelCollection $commonExecPieceEvenements, PropelPDO $con = null)
    {
        $commonExecPieceEvenementsToDelete = $this->getCommonExecPieceEvenements(new Criteria(), $con)->diff($commonExecPieceEvenements);


        $this->commonExecPieceEvenementsScheduledForDeletion = $commonExecPieceEvenementsToDelete;

        foreach ($commonExecPieceEvenementsToDelete as $commonExecPieceEvenementRemoved) {
            $commonExecPieceEvenementRemoved->setCommonAgent(null);
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
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceEvenements);
    }

    /**
     * Method called to associate a CommonExecPieceEvenement object to this object
     * through the CommonExecPieceEvenement foreign key attribute.
     *
     * @param   CommonExecPieceEvenement $l CommonExecPieceEvenement
     * @return CommonAgent The current object (for fluent API support)
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
        $commonExecPieceEvenement->setCommonAgent($this);
    }

    /**
     * @param	CommonExecPieceEvenement $commonExecPieceEvenement The commonExecPieceEvenement object to remove.
     * @return CommonAgent The current object (for fluent API support)
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
            $commonExecPieceEvenement->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieceEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
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
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieceEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceEvenement[] List of CommonExecPieceEvenement objects
     */
    public function getCommonExecPieceEvenementsJoinCommonExecEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecEvenement', $join_behavior);

        return $this->getCommonExecPieceEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieceEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
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
     * Clears out the collCommonExecPieceFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
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
     * If this CommonAgent is new, it will return
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
                    ->filterByCommonAgent($this)
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
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecPieceFactures(PropelCollection $commonExecPieceFactures, PropelPDO $con = null)
    {
        $commonExecPieceFacturesToDelete = $this->getCommonExecPieceFactures(new Criteria(), $con)->diff($commonExecPieceFactures);


        $this->commonExecPieceFacturesScheduledForDeletion = $commonExecPieceFacturesToDelete;

        foreach ($commonExecPieceFacturesToDelete as $commonExecPieceFactureRemoved) {
            $commonExecPieceFactureRemoved->setCommonAgent(null);
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
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceFactures);
    }

    /**
     * Method called to associate a CommonExecPieceFacture object to this object
     * through the CommonExecPieceFacture foreign key attribute.
     *
     * @param   CommonExecPieceFacture $l CommonExecPieceFacture
     * @return CommonAgent The current object (for fluent API support)
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
        $commonExecPieceFacture->setCommonAgent($this);
    }

    /**
     * @param	CommonExecPieceFacture $commonExecPieceFacture The commonExecPieceFacture object to remove.
     * @return CommonAgent The current object (for fluent API support)
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
            $commonExecPieceFacture->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieceFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPieceFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceFacture[] List of CommonExecPieceFacture objects
     */
    public function getCommonExecPieceFacturesJoinCommonExecFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecFacture', $join_behavior);

        return $this->getCommonExecPieceFactures($query, $con);
    }

    /**
     * Clears out the collCommonExecPrixsRelatedByIdAgentCrea collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecPrixsRelatedByIdAgentCrea()
     */
    public function clearCommonExecPrixsRelatedByIdAgentCrea()
    {
        $this->collCommonExecPrixsRelatedByIdAgentCrea = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPrixsRelatedByIdAgentCreaPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPrixsRelatedByIdAgentCrea collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPrixsRelatedByIdAgentCrea($v = true)
    {
        $this->collCommonExecPrixsRelatedByIdAgentCreaPartial = $v;
    }

    /**
     * Initializes the collCommonExecPrixsRelatedByIdAgentCrea collection.
     *
     * By default this just sets the collCommonExecPrixsRelatedByIdAgentCrea collection to an empty array (like clearcollCommonExecPrixsRelatedByIdAgentCrea());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPrixsRelatedByIdAgentCrea($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPrixsRelatedByIdAgentCrea && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPrixsRelatedByIdAgentCrea = new PropelObjectCollection();
        $this->collCommonExecPrixsRelatedByIdAgentCrea->setModel('CommonExecPrix');
    }

    /**
     * Gets an array of CommonExecPrix objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPrix[] List of CommonExecPrix objects
     * @throws PropelException
     */
    public function getCommonExecPrixsRelatedByIdAgentCrea($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPrixsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecPrixsRelatedByIdAgentCrea || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPrixsRelatedByIdAgentCrea) {
                // return empty collection
                $this->initCommonExecPrixsRelatedByIdAgentCrea();
            } else {
                $collCommonExecPrixsRelatedByIdAgentCrea = CommonExecPrixQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentCrea($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPrixsRelatedByIdAgentCreaPartial && count($collCommonExecPrixsRelatedByIdAgentCrea)) {
                      $this->initCommonExecPrixsRelatedByIdAgentCrea(false);

                      foreach ($collCommonExecPrixsRelatedByIdAgentCrea as $obj) {
                        if (false == $this->collCommonExecPrixsRelatedByIdAgentCrea->contains($obj)) {
                          $this->collCommonExecPrixsRelatedByIdAgentCrea->append($obj);
                        }
                      }

                      $this->collCommonExecPrixsRelatedByIdAgentCreaPartial = true;
                    }

                    $collCommonExecPrixsRelatedByIdAgentCrea->getInternalIterator()->rewind();

                    return $collCommonExecPrixsRelatedByIdAgentCrea;
                }

                if ($partial && $this->collCommonExecPrixsRelatedByIdAgentCrea) {
                    foreach ($this->collCommonExecPrixsRelatedByIdAgentCrea as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPrixsRelatedByIdAgentCrea[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPrixsRelatedByIdAgentCrea = $collCommonExecPrixsRelatedByIdAgentCrea;
                $this->collCommonExecPrixsRelatedByIdAgentCreaPartial = false;
            }
        }

        return $this->collCommonExecPrixsRelatedByIdAgentCrea;
    }

    /**
     * Sets a collection of CommonExecPrixRelatedByIdAgentCrea objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPrixsRelatedByIdAgentCrea A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecPrixsRelatedByIdAgentCrea(PropelCollection $commonExecPrixsRelatedByIdAgentCrea, PropelPDO $con = null)
    {
        $commonExecPrixsRelatedByIdAgentCreaToDelete = $this->getCommonExecPrixsRelatedByIdAgentCrea(new Criteria(), $con)->diff($commonExecPrixsRelatedByIdAgentCrea);


        $this->commonExecPrixsRelatedByIdAgentCreaScheduledForDeletion = $commonExecPrixsRelatedByIdAgentCreaToDelete;

        foreach ($commonExecPrixsRelatedByIdAgentCreaToDelete as $commonExecPrixRelatedByIdAgentCreaRemoved) {
            $commonExecPrixRelatedByIdAgentCreaRemoved->setCommonAgentRelatedByIdAgentCrea(null);
        }

        $this->collCommonExecPrixsRelatedByIdAgentCrea = null;
        foreach ($commonExecPrixsRelatedByIdAgentCrea as $commonExecPrixRelatedByIdAgentCrea) {
            $this->addCommonExecPrixRelatedByIdAgentCrea($commonExecPrixRelatedByIdAgentCrea);
        }

        $this->collCommonExecPrixsRelatedByIdAgentCrea = $commonExecPrixsRelatedByIdAgentCrea;
        $this->collCommonExecPrixsRelatedByIdAgentCreaPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPrix objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPrix objects.
     * @throws PropelException
     */
    public function countCommonExecPrixsRelatedByIdAgentCrea(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPrixsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecPrixsRelatedByIdAgentCrea || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPrixsRelatedByIdAgentCrea) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPrixsRelatedByIdAgentCrea());
            }
            $query = CommonExecPrixQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentCrea($this)
                ->count($con);
        }

        return count($this->collCommonExecPrixsRelatedByIdAgentCrea);
    }

    /**
     * Method called to associate a CommonExecPrix object to this object
     * through the CommonExecPrix foreign key attribute.
     *
     * @param   CommonExecPrix $l CommonExecPrix
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecPrixRelatedByIdAgentCrea(CommonExecPrix $l)
    {
        if ($this->collCommonExecPrixsRelatedByIdAgentCrea === null) {
            $this->initCommonExecPrixsRelatedByIdAgentCrea();
            $this->collCommonExecPrixsRelatedByIdAgentCreaPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPrixsRelatedByIdAgentCrea->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPrixRelatedByIdAgentCrea($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPrixRelatedByIdAgentCrea $commonExecPrixRelatedByIdAgentCrea The commonExecPrixRelatedByIdAgentCrea object to add.
     */
    protected function doAddCommonExecPrixRelatedByIdAgentCrea($commonExecPrixRelatedByIdAgentCrea)
    {
        $this->collCommonExecPrixsRelatedByIdAgentCrea[]= $commonExecPrixRelatedByIdAgentCrea;
        $commonExecPrixRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea($this);
    }

    /**
     * @param	CommonExecPrixRelatedByIdAgentCrea $commonExecPrixRelatedByIdAgentCrea The commonExecPrixRelatedByIdAgentCrea object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecPrixRelatedByIdAgentCrea($commonExecPrixRelatedByIdAgentCrea)
    {
        if ($this->getCommonExecPrixsRelatedByIdAgentCrea()->contains($commonExecPrixRelatedByIdAgentCrea)) {
            $this->collCommonExecPrixsRelatedByIdAgentCrea->remove($this->collCommonExecPrixsRelatedByIdAgentCrea->search($commonExecPrixRelatedByIdAgentCrea));
            if (null === $this->commonExecPrixsRelatedByIdAgentCreaScheduledForDeletion) {
                $this->commonExecPrixsRelatedByIdAgentCreaScheduledForDeletion = clone $this->collCommonExecPrixsRelatedByIdAgentCrea;
                $this->commonExecPrixsRelatedByIdAgentCreaScheduledForDeletion->clear();
            }
            $this->commonExecPrixsRelatedByIdAgentCreaScheduledForDeletion[]= $commonExecPrixRelatedByIdAgentCrea;
            $commonExecPrixRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPrixsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPrix[] List of CommonExecPrix objects
     */
    public function getCommonExecPrixsRelatedByIdAgentCreaJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPrixsRelatedByIdAgentCrea($query, $con);
    }

    /**
     * Clears out the collCommonExecPrixsRelatedByIdAgentModif collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecPrixsRelatedByIdAgentModif()
     */
    public function clearCommonExecPrixsRelatedByIdAgentModif()
    {
        $this->collCommonExecPrixsRelatedByIdAgentModif = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPrixsRelatedByIdAgentModifPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPrixsRelatedByIdAgentModif collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPrixsRelatedByIdAgentModif($v = true)
    {
        $this->collCommonExecPrixsRelatedByIdAgentModifPartial = $v;
    }

    /**
     * Initializes the collCommonExecPrixsRelatedByIdAgentModif collection.
     *
     * By default this just sets the collCommonExecPrixsRelatedByIdAgentModif collection to an empty array (like clearcollCommonExecPrixsRelatedByIdAgentModif());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPrixsRelatedByIdAgentModif($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPrixsRelatedByIdAgentModif && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPrixsRelatedByIdAgentModif = new PropelObjectCollection();
        $this->collCommonExecPrixsRelatedByIdAgentModif->setModel('CommonExecPrix');
    }

    /**
     * Gets an array of CommonExecPrix objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPrix[] List of CommonExecPrix objects
     * @throws PropelException
     */
    public function getCommonExecPrixsRelatedByIdAgentModif($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPrixsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecPrixsRelatedByIdAgentModif || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPrixsRelatedByIdAgentModif) {
                // return empty collection
                $this->initCommonExecPrixsRelatedByIdAgentModif();
            } else {
                $collCommonExecPrixsRelatedByIdAgentModif = CommonExecPrixQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentModif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPrixsRelatedByIdAgentModifPartial && count($collCommonExecPrixsRelatedByIdAgentModif)) {
                      $this->initCommonExecPrixsRelatedByIdAgentModif(false);

                      foreach ($collCommonExecPrixsRelatedByIdAgentModif as $obj) {
                        if (false == $this->collCommonExecPrixsRelatedByIdAgentModif->contains($obj)) {
                          $this->collCommonExecPrixsRelatedByIdAgentModif->append($obj);
                        }
                      }

                      $this->collCommonExecPrixsRelatedByIdAgentModifPartial = true;
                    }

                    $collCommonExecPrixsRelatedByIdAgentModif->getInternalIterator()->rewind();

                    return $collCommonExecPrixsRelatedByIdAgentModif;
                }

                if ($partial && $this->collCommonExecPrixsRelatedByIdAgentModif) {
                    foreach ($this->collCommonExecPrixsRelatedByIdAgentModif as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPrixsRelatedByIdAgentModif[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPrixsRelatedByIdAgentModif = $collCommonExecPrixsRelatedByIdAgentModif;
                $this->collCommonExecPrixsRelatedByIdAgentModifPartial = false;
            }
        }

        return $this->collCommonExecPrixsRelatedByIdAgentModif;
    }

    /**
     * Sets a collection of CommonExecPrixRelatedByIdAgentModif objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPrixsRelatedByIdAgentModif A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecPrixsRelatedByIdAgentModif(PropelCollection $commonExecPrixsRelatedByIdAgentModif, PropelPDO $con = null)
    {
        $commonExecPrixsRelatedByIdAgentModifToDelete = $this->getCommonExecPrixsRelatedByIdAgentModif(new Criteria(), $con)->diff($commonExecPrixsRelatedByIdAgentModif);


        $this->commonExecPrixsRelatedByIdAgentModifScheduledForDeletion = $commonExecPrixsRelatedByIdAgentModifToDelete;

        foreach ($commonExecPrixsRelatedByIdAgentModifToDelete as $commonExecPrixRelatedByIdAgentModifRemoved) {
            $commonExecPrixRelatedByIdAgentModifRemoved->setCommonAgentRelatedByIdAgentModif(null);
        }

        $this->collCommonExecPrixsRelatedByIdAgentModif = null;
        foreach ($commonExecPrixsRelatedByIdAgentModif as $commonExecPrixRelatedByIdAgentModif) {
            $this->addCommonExecPrixRelatedByIdAgentModif($commonExecPrixRelatedByIdAgentModif);
        }

        $this->collCommonExecPrixsRelatedByIdAgentModif = $commonExecPrixsRelatedByIdAgentModif;
        $this->collCommonExecPrixsRelatedByIdAgentModifPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPrix objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPrix objects.
     * @throws PropelException
     */
    public function countCommonExecPrixsRelatedByIdAgentModif(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPrixsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecPrixsRelatedByIdAgentModif || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPrixsRelatedByIdAgentModif) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPrixsRelatedByIdAgentModif());
            }
            $query = CommonExecPrixQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentModif($this)
                ->count($con);
        }

        return count($this->collCommonExecPrixsRelatedByIdAgentModif);
    }

    /**
     * Method called to associate a CommonExecPrix object to this object
     * through the CommonExecPrix foreign key attribute.
     *
     * @param   CommonExecPrix $l CommonExecPrix
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecPrixRelatedByIdAgentModif(CommonExecPrix $l)
    {
        if ($this->collCommonExecPrixsRelatedByIdAgentModif === null) {
            $this->initCommonExecPrixsRelatedByIdAgentModif();
            $this->collCommonExecPrixsRelatedByIdAgentModifPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPrixsRelatedByIdAgentModif->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPrixRelatedByIdAgentModif($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPrixRelatedByIdAgentModif $commonExecPrixRelatedByIdAgentModif The commonExecPrixRelatedByIdAgentModif object to add.
     */
    protected function doAddCommonExecPrixRelatedByIdAgentModif($commonExecPrixRelatedByIdAgentModif)
    {
        $this->collCommonExecPrixsRelatedByIdAgentModif[]= $commonExecPrixRelatedByIdAgentModif;
        $commonExecPrixRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif($this);
    }

    /**
     * @param	CommonExecPrixRelatedByIdAgentModif $commonExecPrixRelatedByIdAgentModif The commonExecPrixRelatedByIdAgentModif object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecPrixRelatedByIdAgentModif($commonExecPrixRelatedByIdAgentModif)
    {
        if ($this->getCommonExecPrixsRelatedByIdAgentModif()->contains($commonExecPrixRelatedByIdAgentModif)) {
            $this->collCommonExecPrixsRelatedByIdAgentModif->remove($this->collCommonExecPrixsRelatedByIdAgentModif->search($commonExecPrixRelatedByIdAgentModif));
            if (null === $this->commonExecPrixsRelatedByIdAgentModifScheduledForDeletion) {
                $this->commonExecPrixsRelatedByIdAgentModifScheduledForDeletion = clone $this->collCommonExecPrixsRelatedByIdAgentModif;
                $this->commonExecPrixsRelatedByIdAgentModifScheduledForDeletion->clear();
            }
            $this->commonExecPrixsRelatedByIdAgentModifScheduledForDeletion[]= $commonExecPrixRelatedByIdAgentModif;
            $commonExecPrixRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecPrixsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPrix[] List of CommonExecPrix objects
     */
    public function getCommonExecPrixsRelatedByIdAgentModifJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPrixsRelatedByIdAgentModif($query, $con);
    }

    /**
     * Clears out the collCommonExecRepartitionsRelatedByIdAgentCrea collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecRepartitionsRelatedByIdAgentCrea()
     */
    public function clearCommonExecRepartitionsRelatedByIdAgentCrea()
    {
        $this->collCommonExecRepartitionsRelatedByIdAgentCrea = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecRepartitionsRelatedByIdAgentCreaPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecRepartitionsRelatedByIdAgentCrea collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecRepartitionsRelatedByIdAgentCrea($v = true)
    {
        $this->collCommonExecRepartitionsRelatedByIdAgentCreaPartial = $v;
    }

    /**
     * Initializes the collCommonExecRepartitionsRelatedByIdAgentCrea collection.
     *
     * By default this just sets the collCommonExecRepartitionsRelatedByIdAgentCrea collection to an empty array (like clearcollCommonExecRepartitionsRelatedByIdAgentCrea());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecRepartitionsRelatedByIdAgentCrea($overrideExisting = true)
    {
        if (null !== $this->collCommonExecRepartitionsRelatedByIdAgentCrea && !$overrideExisting) {
            return;
        }
        $this->collCommonExecRepartitionsRelatedByIdAgentCrea = new PropelObjectCollection();
        $this->collCommonExecRepartitionsRelatedByIdAgentCrea->setModel('CommonExecRepartition');
    }

    /**
     * Gets an array of CommonExecRepartition objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     * @throws PropelException
     */
    public function getCommonExecRepartitionsRelatedByIdAgentCrea($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecRepartitionsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecRepartitionsRelatedByIdAgentCrea || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecRepartitionsRelatedByIdAgentCrea) {
                // return empty collection
                $this->initCommonExecRepartitionsRelatedByIdAgentCrea();
            } else {
                $collCommonExecRepartitionsRelatedByIdAgentCrea = CommonExecRepartitionQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentCrea($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecRepartitionsRelatedByIdAgentCreaPartial && count($collCommonExecRepartitionsRelatedByIdAgentCrea)) {
                      $this->initCommonExecRepartitionsRelatedByIdAgentCrea(false);

                      foreach ($collCommonExecRepartitionsRelatedByIdAgentCrea as $obj) {
                        if (false == $this->collCommonExecRepartitionsRelatedByIdAgentCrea->contains($obj)) {
                          $this->collCommonExecRepartitionsRelatedByIdAgentCrea->append($obj);
                        }
                      }

                      $this->collCommonExecRepartitionsRelatedByIdAgentCreaPartial = true;
                    }

                    $collCommonExecRepartitionsRelatedByIdAgentCrea->getInternalIterator()->rewind();

                    return $collCommonExecRepartitionsRelatedByIdAgentCrea;
                }

                if ($partial && $this->collCommonExecRepartitionsRelatedByIdAgentCrea) {
                    foreach ($this->collCommonExecRepartitionsRelatedByIdAgentCrea as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecRepartitionsRelatedByIdAgentCrea[] = $obj;
                        }
                    }
                }

                $this->collCommonExecRepartitionsRelatedByIdAgentCrea = $collCommonExecRepartitionsRelatedByIdAgentCrea;
                $this->collCommonExecRepartitionsRelatedByIdAgentCreaPartial = false;
            }
        }

        return $this->collCommonExecRepartitionsRelatedByIdAgentCrea;
    }

    /**
     * Sets a collection of CommonExecRepartitionRelatedByIdAgentCrea objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecRepartitionsRelatedByIdAgentCrea A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecRepartitionsRelatedByIdAgentCrea(PropelCollection $commonExecRepartitionsRelatedByIdAgentCrea, PropelPDO $con = null)
    {
        $commonExecRepartitionsRelatedByIdAgentCreaToDelete = $this->getCommonExecRepartitionsRelatedByIdAgentCrea(new Criteria(), $con)->diff($commonExecRepartitionsRelatedByIdAgentCrea);


        $this->commonExecRepartitionsRelatedByIdAgentCreaScheduledForDeletion = $commonExecRepartitionsRelatedByIdAgentCreaToDelete;

        foreach ($commonExecRepartitionsRelatedByIdAgentCreaToDelete as $commonExecRepartitionRelatedByIdAgentCreaRemoved) {
            $commonExecRepartitionRelatedByIdAgentCreaRemoved->setCommonAgentRelatedByIdAgentCrea(null);
        }

        $this->collCommonExecRepartitionsRelatedByIdAgentCrea = null;
        foreach ($commonExecRepartitionsRelatedByIdAgentCrea as $commonExecRepartitionRelatedByIdAgentCrea) {
            $this->addCommonExecRepartitionRelatedByIdAgentCrea($commonExecRepartitionRelatedByIdAgentCrea);
        }

        $this->collCommonExecRepartitionsRelatedByIdAgentCrea = $commonExecRepartitionsRelatedByIdAgentCrea;
        $this->collCommonExecRepartitionsRelatedByIdAgentCreaPartial = false;

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
    public function countCommonExecRepartitionsRelatedByIdAgentCrea(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecRepartitionsRelatedByIdAgentCreaPartial && !$this->isNew();
        if (null === $this->collCommonExecRepartitionsRelatedByIdAgentCrea || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecRepartitionsRelatedByIdAgentCrea) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecRepartitionsRelatedByIdAgentCrea());
            }
            $query = CommonExecRepartitionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentCrea($this)
                ->count($con);
        }

        return count($this->collCommonExecRepartitionsRelatedByIdAgentCrea);
    }

    /**
     * Method called to associate a CommonExecRepartition object to this object
     * through the CommonExecRepartition foreign key attribute.
     *
     * @param   CommonExecRepartition $l CommonExecRepartition
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecRepartitionRelatedByIdAgentCrea(CommonExecRepartition $l)
    {
        if ($this->collCommonExecRepartitionsRelatedByIdAgentCrea === null) {
            $this->initCommonExecRepartitionsRelatedByIdAgentCrea();
            $this->collCommonExecRepartitionsRelatedByIdAgentCreaPartial = true;
        }
        if (!in_array($l, $this->collCommonExecRepartitionsRelatedByIdAgentCrea->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecRepartitionRelatedByIdAgentCrea($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecRepartitionRelatedByIdAgentCrea $commonExecRepartitionRelatedByIdAgentCrea The commonExecRepartitionRelatedByIdAgentCrea object to add.
     */
    protected function doAddCommonExecRepartitionRelatedByIdAgentCrea($commonExecRepartitionRelatedByIdAgentCrea)
    {
        $this->collCommonExecRepartitionsRelatedByIdAgentCrea[]= $commonExecRepartitionRelatedByIdAgentCrea;
        $commonExecRepartitionRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea($this);
    }

    /**
     * @param	CommonExecRepartitionRelatedByIdAgentCrea $commonExecRepartitionRelatedByIdAgentCrea The commonExecRepartitionRelatedByIdAgentCrea object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecRepartitionRelatedByIdAgentCrea($commonExecRepartitionRelatedByIdAgentCrea)
    {
        if ($this->getCommonExecRepartitionsRelatedByIdAgentCrea()->contains($commonExecRepartitionRelatedByIdAgentCrea)) {
            $this->collCommonExecRepartitionsRelatedByIdAgentCrea->remove($this->collCommonExecRepartitionsRelatedByIdAgentCrea->search($commonExecRepartitionRelatedByIdAgentCrea));
            if (null === $this->commonExecRepartitionsRelatedByIdAgentCreaScheduledForDeletion) {
                $this->commonExecRepartitionsRelatedByIdAgentCreaScheduledForDeletion = clone $this->collCommonExecRepartitionsRelatedByIdAgentCrea;
                $this->commonExecRepartitionsRelatedByIdAgentCreaScheduledForDeletion->clear();
            }
            $this->commonExecRepartitionsRelatedByIdAgentCreaScheduledForDeletion[]= $commonExecRepartitionRelatedByIdAgentCrea;
            $commonExecRepartitionRelatedByIdAgentCrea->setCommonAgentRelatedByIdAgentCrea(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecRepartitionsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsRelatedByIdAgentCreaJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecRepartitionsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecRepartitionsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsRelatedByIdAgentCreaJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecRepartitionsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecRepartitionsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsRelatedByIdAgentCreaJoinCommonEntreprise($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonEntreprise', $join_behavior);

        return $this->getCommonExecRepartitionsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecRepartitionsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsRelatedByIdAgentCreaJoinCommonExecFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecFacture', $join_behavior);

        return $this->getCommonExecRepartitionsRelatedByIdAgentCrea($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecRepartitionsRelatedByIdAgentCrea from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsRelatedByIdAgentCreaJoinCommonExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecPrix', $join_behavior);

        return $this->getCommonExecRepartitionsRelatedByIdAgentCrea($query, $con);
    }

    /**
     * Clears out the collCommonExecRepartitionsRelatedByIdAgentModif collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonExecRepartitionsRelatedByIdAgentModif()
     */
    public function clearCommonExecRepartitionsRelatedByIdAgentModif()
    {
        $this->collCommonExecRepartitionsRelatedByIdAgentModif = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecRepartitionsRelatedByIdAgentModifPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecRepartitionsRelatedByIdAgentModif collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecRepartitionsRelatedByIdAgentModif($v = true)
    {
        $this->collCommonExecRepartitionsRelatedByIdAgentModifPartial = $v;
    }

    /**
     * Initializes the collCommonExecRepartitionsRelatedByIdAgentModif collection.
     *
     * By default this just sets the collCommonExecRepartitionsRelatedByIdAgentModif collection to an empty array (like clearcollCommonExecRepartitionsRelatedByIdAgentModif());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecRepartitionsRelatedByIdAgentModif($overrideExisting = true)
    {
        if (null !== $this->collCommonExecRepartitionsRelatedByIdAgentModif && !$overrideExisting) {
            return;
        }
        $this->collCommonExecRepartitionsRelatedByIdAgentModif = new PropelObjectCollection();
        $this->collCommonExecRepartitionsRelatedByIdAgentModif->setModel('CommonExecRepartition');
    }

    /**
     * Gets an array of CommonExecRepartition objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     * @throws PropelException
     */
    public function getCommonExecRepartitionsRelatedByIdAgentModif($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecRepartitionsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecRepartitionsRelatedByIdAgentModif || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecRepartitionsRelatedByIdAgentModif) {
                // return empty collection
                $this->initCommonExecRepartitionsRelatedByIdAgentModif();
            } else {
                $collCommonExecRepartitionsRelatedByIdAgentModif = CommonExecRepartitionQuery::create(null, $criteria)
                    ->filterByCommonAgentRelatedByIdAgentModif($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecRepartitionsRelatedByIdAgentModifPartial && count($collCommonExecRepartitionsRelatedByIdAgentModif)) {
                      $this->initCommonExecRepartitionsRelatedByIdAgentModif(false);

                      foreach ($collCommonExecRepartitionsRelatedByIdAgentModif as $obj) {
                        if (false == $this->collCommonExecRepartitionsRelatedByIdAgentModif->contains($obj)) {
                          $this->collCommonExecRepartitionsRelatedByIdAgentModif->append($obj);
                        }
                      }

                      $this->collCommonExecRepartitionsRelatedByIdAgentModifPartial = true;
                    }

                    $collCommonExecRepartitionsRelatedByIdAgentModif->getInternalIterator()->rewind();

                    return $collCommonExecRepartitionsRelatedByIdAgentModif;
                }

                if ($partial && $this->collCommonExecRepartitionsRelatedByIdAgentModif) {
                    foreach ($this->collCommonExecRepartitionsRelatedByIdAgentModif as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecRepartitionsRelatedByIdAgentModif[] = $obj;
                        }
                    }
                }

                $this->collCommonExecRepartitionsRelatedByIdAgentModif = $collCommonExecRepartitionsRelatedByIdAgentModif;
                $this->collCommonExecRepartitionsRelatedByIdAgentModifPartial = false;
            }
        }

        return $this->collCommonExecRepartitionsRelatedByIdAgentModif;
    }

    /**
     * Sets a collection of CommonExecRepartitionRelatedByIdAgentModif objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecRepartitionsRelatedByIdAgentModif A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonExecRepartitionsRelatedByIdAgentModif(PropelCollection $commonExecRepartitionsRelatedByIdAgentModif, PropelPDO $con = null)
    {
        $commonExecRepartitionsRelatedByIdAgentModifToDelete = $this->getCommonExecRepartitionsRelatedByIdAgentModif(new Criteria(), $con)->diff($commonExecRepartitionsRelatedByIdAgentModif);


        $this->commonExecRepartitionsRelatedByIdAgentModifScheduledForDeletion = $commonExecRepartitionsRelatedByIdAgentModifToDelete;

        foreach ($commonExecRepartitionsRelatedByIdAgentModifToDelete as $commonExecRepartitionRelatedByIdAgentModifRemoved) {
            $commonExecRepartitionRelatedByIdAgentModifRemoved->setCommonAgentRelatedByIdAgentModif(null);
        }

        $this->collCommonExecRepartitionsRelatedByIdAgentModif = null;
        foreach ($commonExecRepartitionsRelatedByIdAgentModif as $commonExecRepartitionRelatedByIdAgentModif) {
            $this->addCommonExecRepartitionRelatedByIdAgentModif($commonExecRepartitionRelatedByIdAgentModif);
        }

        $this->collCommonExecRepartitionsRelatedByIdAgentModif = $commonExecRepartitionsRelatedByIdAgentModif;
        $this->collCommonExecRepartitionsRelatedByIdAgentModifPartial = false;

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
    public function countCommonExecRepartitionsRelatedByIdAgentModif(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecRepartitionsRelatedByIdAgentModifPartial && !$this->isNew();
        if (null === $this->collCommonExecRepartitionsRelatedByIdAgentModif || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecRepartitionsRelatedByIdAgentModif) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecRepartitionsRelatedByIdAgentModif());
            }
            $query = CommonExecRepartitionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgentRelatedByIdAgentModif($this)
                ->count($con);
        }

        return count($this->collCommonExecRepartitionsRelatedByIdAgentModif);
    }

    /**
     * Method called to associate a CommonExecRepartition object to this object
     * through the CommonExecRepartition foreign key attribute.
     *
     * @param   CommonExecRepartition $l CommonExecRepartition
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonExecRepartitionRelatedByIdAgentModif(CommonExecRepartition $l)
    {
        if ($this->collCommonExecRepartitionsRelatedByIdAgentModif === null) {
            $this->initCommonExecRepartitionsRelatedByIdAgentModif();
            $this->collCommonExecRepartitionsRelatedByIdAgentModifPartial = true;
        }
        if (!in_array($l, $this->collCommonExecRepartitionsRelatedByIdAgentModif->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecRepartitionRelatedByIdAgentModif($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecRepartitionRelatedByIdAgentModif $commonExecRepartitionRelatedByIdAgentModif The commonExecRepartitionRelatedByIdAgentModif object to add.
     */
    protected function doAddCommonExecRepartitionRelatedByIdAgentModif($commonExecRepartitionRelatedByIdAgentModif)
    {
        $this->collCommonExecRepartitionsRelatedByIdAgentModif[]= $commonExecRepartitionRelatedByIdAgentModif;
        $commonExecRepartitionRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif($this);
    }

    /**
     * @param	CommonExecRepartitionRelatedByIdAgentModif $commonExecRepartitionRelatedByIdAgentModif The commonExecRepartitionRelatedByIdAgentModif object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonExecRepartitionRelatedByIdAgentModif($commonExecRepartitionRelatedByIdAgentModif)
    {
        if ($this->getCommonExecRepartitionsRelatedByIdAgentModif()->contains($commonExecRepartitionRelatedByIdAgentModif)) {
            $this->collCommonExecRepartitionsRelatedByIdAgentModif->remove($this->collCommonExecRepartitionsRelatedByIdAgentModif->search($commonExecRepartitionRelatedByIdAgentModif));
            if (null === $this->commonExecRepartitionsRelatedByIdAgentModifScheduledForDeletion) {
                $this->commonExecRepartitionsRelatedByIdAgentModifScheduledForDeletion = clone $this->collCommonExecRepartitionsRelatedByIdAgentModif;
                $this->commonExecRepartitionsRelatedByIdAgentModifScheduledForDeletion->clear();
            }
            $this->commonExecRepartitionsRelatedByIdAgentModifScheduledForDeletion[]= $commonExecRepartitionRelatedByIdAgentModif;
            $commonExecRepartitionRelatedByIdAgentModif->setCommonAgentRelatedByIdAgentModif(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecRepartitionsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsRelatedByIdAgentModifJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecRepartitionsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecRepartitionsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsRelatedByIdAgentModifJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecRepartitionsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecRepartitionsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsRelatedByIdAgentModifJoinCommonEntreprise($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonEntreprise', $join_behavior);

        return $this->getCommonExecRepartitionsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecRepartitionsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsRelatedByIdAgentModifJoinCommonExecFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecFacture', $join_behavior);

        return $this->getCommonExecRepartitionsRelatedByIdAgentModif($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonExecRepartitionsRelatedByIdAgentModif from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecRepartition[] List of CommonExecRepartition objects
     */
    public function getCommonExecRepartitionsRelatedByIdAgentModifJoinCommonExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('CommonExecPrix', $join_behavior);

        return $this->getCommonExecRepartitionsRelatedByIdAgentModif($query, $con);
    }

    /**
     * Clears out the collCommonResultatAnalyseHistoriques collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonResultatAnalyseHistoriques()
     */
    public function clearCommonResultatAnalyseHistoriques()
    {
        $this->collCommonResultatAnalyseHistoriques = null; // important to set this to null since that means it is uninitialized
        $this->collCommonResultatAnalyseHistoriquesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonResultatAnalyseHistoriques collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonResultatAnalyseHistoriques($v = true)
    {
        $this->collCommonResultatAnalyseHistoriquesPartial = $v;
    }

    /**
     * Initializes the collCommonResultatAnalyseHistoriques collection.
     *
     * By default this just sets the collCommonResultatAnalyseHistoriques collection to an empty array (like clearcollCommonResultatAnalyseHistoriques());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonResultatAnalyseHistoriques($overrideExisting = true)
    {
        if (null !== $this->collCommonResultatAnalyseHistoriques && !$overrideExisting) {
            return;
        }
        $this->collCommonResultatAnalyseHistoriques = new PropelObjectCollection();
        $this->collCommonResultatAnalyseHistoriques->setModel('CommonResultatAnalyseHistorique');
    }

    /**
     * Gets an array of CommonResultatAnalyseHistorique objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonResultatAnalyseHistorique[] List of CommonResultatAnalyseHistorique objects
     * @throws PropelException
     */
    public function getCommonResultatAnalyseHistoriques($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonResultatAnalyseHistoriquesPartial && !$this->isNew();
        if (null === $this->collCommonResultatAnalyseHistoriques || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonResultatAnalyseHistoriques) {
                // return empty collection
                $this->initCommonResultatAnalyseHistoriques();
            } else {
                $collCommonResultatAnalyseHistoriques = CommonResultatAnalyseHistoriqueQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonResultatAnalyseHistoriquesPartial && count($collCommonResultatAnalyseHistoriques)) {
                      $this->initCommonResultatAnalyseHistoriques(false);

                      foreach ($collCommonResultatAnalyseHistoriques as $obj) {
                        if (false == $this->collCommonResultatAnalyseHistoriques->contains($obj)) {
                          $this->collCommonResultatAnalyseHistoriques->append($obj);
                        }
                      }

                      $this->collCommonResultatAnalyseHistoriquesPartial = true;
                    }

                    $collCommonResultatAnalyseHistoriques->getInternalIterator()->rewind();

                    return $collCommonResultatAnalyseHistoriques;
                }

                if ($partial && $this->collCommonResultatAnalyseHistoriques) {
                    foreach ($this->collCommonResultatAnalyseHistoriques as $obj) {
                        if ($obj->isNew()) {
                            $collCommonResultatAnalyseHistoriques[] = $obj;
                        }
                    }
                }

                $this->collCommonResultatAnalyseHistoriques = $collCommonResultatAnalyseHistoriques;
                $this->collCommonResultatAnalyseHistoriquesPartial = false;
            }
        }

        return $this->collCommonResultatAnalyseHistoriques;
    }

    /**
     * Sets a collection of CommonResultatAnalyseHistorique objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonResultatAnalyseHistoriques A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonResultatAnalyseHistoriques(PropelCollection $commonResultatAnalyseHistoriques, PropelPDO $con = null)
    {
        $commonResultatAnalyseHistoriquesToDelete = $this->getCommonResultatAnalyseHistoriques(new Criteria(), $con)->diff($commonResultatAnalyseHistoriques);


        $this->commonResultatAnalyseHistoriquesScheduledForDeletion = $commonResultatAnalyseHistoriquesToDelete;

        foreach ($commonResultatAnalyseHistoriquesToDelete as $commonResultatAnalyseHistoriqueRemoved) {
            $commonResultatAnalyseHistoriqueRemoved->setCommonAgent(null);
        }

        $this->collCommonResultatAnalyseHistoriques = null;
        foreach ($commonResultatAnalyseHistoriques as $commonResultatAnalyseHistorique) {
            $this->addCommonResultatAnalyseHistorique($commonResultatAnalyseHistorique);
        }

        $this->collCommonResultatAnalyseHistoriques = $commonResultatAnalyseHistoriques;
        $this->collCommonResultatAnalyseHistoriquesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonResultatAnalyseHistorique objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonResultatAnalyseHistorique objects.
     * @throws PropelException
     */
    public function countCommonResultatAnalyseHistoriques(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonResultatAnalyseHistoriquesPartial && !$this->isNew();
        if (null === $this->collCommonResultatAnalyseHistoriques || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonResultatAnalyseHistoriques) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonResultatAnalyseHistoriques());
            }
            $query = CommonResultatAnalyseHistoriqueQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonResultatAnalyseHistoriques);
    }

    /**
     * Method called to associate a CommonResultatAnalyseHistorique object to this object
     * through the CommonResultatAnalyseHistorique foreign key attribute.
     *
     * @param   CommonResultatAnalyseHistorique $l CommonResultatAnalyseHistorique
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonResultatAnalyseHistorique(CommonResultatAnalyseHistorique $l)
    {
        if ($this->collCommonResultatAnalyseHistoriques === null) {
            $this->initCommonResultatAnalyseHistoriques();
            $this->collCommonResultatAnalyseHistoriquesPartial = true;
        }
        if (!in_array($l, $this->collCommonResultatAnalyseHistoriques->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonResultatAnalyseHistorique($l);
        }

        return $this;
    }

    /**
     * @param	CommonResultatAnalyseHistorique $commonResultatAnalyseHistorique The commonResultatAnalyseHistorique object to add.
     */
    protected function doAddCommonResultatAnalyseHistorique($commonResultatAnalyseHistorique)
    {
        $this->collCommonResultatAnalyseHistoriques[]= $commonResultatAnalyseHistorique;
        $commonResultatAnalyseHistorique->setCommonAgent($this);
    }

    /**
     * @param	CommonResultatAnalyseHistorique $commonResultatAnalyseHistorique The commonResultatAnalyseHistorique object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonResultatAnalyseHistorique($commonResultatAnalyseHistorique)
    {
        if ($this->getCommonResultatAnalyseHistoriques()->contains($commonResultatAnalyseHistorique)) {
            $this->collCommonResultatAnalyseHistoriques->remove($this->collCommonResultatAnalyseHistoriques->search($commonResultatAnalyseHistorique));
            if (null === $this->commonResultatAnalyseHistoriquesScheduledForDeletion) {
                $this->commonResultatAnalyseHistoriquesScheduledForDeletion = clone $this->collCommonResultatAnalyseHistoriques;
                $this->commonResultatAnalyseHistoriquesScheduledForDeletion->clear();
            }
            $this->commonResultatAnalyseHistoriquesScheduledForDeletion[]= clone $commonResultatAnalyseHistorique;
            $commonResultatAnalyseHistorique->setCommonAgent(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonTCAOCommissionAgents collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonTCAOCommissionAgents()
     */
    public function clearCommonTCAOCommissionAgents()
    {
        $this->collCommonTCAOCommissionAgents = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOCommissionAgentsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOCommissionAgents collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOCommissionAgents($v = true)
    {
        $this->collCommonTCAOCommissionAgentsPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOCommissionAgents collection.
     *
     * By default this just sets the collCommonTCAOCommissionAgents collection to an empty array (like clearcollCommonTCAOCommissionAgents());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOCommissionAgents($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOCommissionAgents && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOCommissionAgents = new PropelObjectCollection();
        $this->collCommonTCAOCommissionAgents->setModel('CommonTCAOCommissionAgent');
    }

    /**
     * Gets an array of CommonTCAOCommissionAgent objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOCommissionAgent[] List of CommonTCAOCommissionAgent objects
     * @throws PropelException
     */
    public function getCommonTCAOCommissionAgents($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOCommissionAgentsPartial && !$this->isNew();
        if (null === $this->collCommonTCAOCommissionAgents || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOCommissionAgents) {
                // return empty collection
                $this->initCommonTCAOCommissionAgents();
            } else {
                $collCommonTCAOCommissionAgents = CommonTCAOCommissionAgentQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOCommissionAgentsPartial && count($collCommonTCAOCommissionAgents)) {
                      $this->initCommonTCAOCommissionAgents(false);

                      foreach ($collCommonTCAOCommissionAgents as $obj) {
                        if (false == $this->collCommonTCAOCommissionAgents->contains($obj)) {
                          $this->collCommonTCAOCommissionAgents->append($obj);
                        }
                      }

                      $this->collCommonTCAOCommissionAgentsPartial = true;
                    }

                    $collCommonTCAOCommissionAgents->getInternalIterator()->rewind();

                    return $collCommonTCAOCommissionAgents;
                }

                if ($partial && $this->collCommonTCAOCommissionAgents) {
                    foreach ($this->collCommonTCAOCommissionAgents as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOCommissionAgents[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOCommissionAgents = $collCommonTCAOCommissionAgents;
                $this->collCommonTCAOCommissionAgentsPartial = false;
            }
        }

        return $this->collCommonTCAOCommissionAgents;
    }

    /**
     * Sets a collection of CommonTCAOCommissionAgent objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOCommissionAgents A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonTCAOCommissionAgents(PropelCollection $commonTCAOCommissionAgents, PropelPDO $con = null)
    {
        $commonTCAOCommissionAgentsToDelete = $this->getCommonTCAOCommissionAgents(new Criteria(), $con)->diff($commonTCAOCommissionAgents);


        $this->commonTCAOCommissionAgentsScheduledForDeletion = $commonTCAOCommissionAgentsToDelete;

        foreach ($commonTCAOCommissionAgentsToDelete as $commonTCAOCommissionAgentRemoved) {
            $commonTCAOCommissionAgentRemoved->setCommonAgent(null);
        }

        $this->collCommonTCAOCommissionAgents = null;
        foreach ($commonTCAOCommissionAgents as $commonTCAOCommissionAgent) {
            $this->addCommonTCAOCommissionAgent($commonTCAOCommissionAgent);
        }

        $this->collCommonTCAOCommissionAgents = $commonTCAOCommissionAgents;
        $this->collCommonTCAOCommissionAgentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOCommissionAgent objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOCommissionAgent objects.
     * @throws PropelException
     */
    public function countCommonTCAOCommissionAgents(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOCommissionAgentsPartial && !$this->isNew();
        if (null === $this->collCommonTCAOCommissionAgents || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOCommissionAgents) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOCommissionAgents());
            }
            $query = CommonTCAOCommissionAgentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonTCAOCommissionAgents);
    }

    /**
     * Method called to associate a CommonTCAOCommissionAgent object to this object
     * through the CommonTCAOCommissionAgent foreign key attribute.
     *
     * @param   CommonTCAOCommissionAgent $l CommonTCAOCommissionAgent
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonTCAOCommissionAgent(CommonTCAOCommissionAgent $l)
    {
        if ($this->collCommonTCAOCommissionAgents === null) {
            $this->initCommonTCAOCommissionAgents();
            $this->collCommonTCAOCommissionAgentsPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOCommissionAgents->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOCommissionAgent($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOCommissionAgent $commonTCAOCommissionAgent The commonTCAOCommissionAgent object to add.
     */
    protected function doAddCommonTCAOCommissionAgent($commonTCAOCommissionAgent)
    {
        $this->collCommonTCAOCommissionAgents[]= $commonTCAOCommissionAgent;
        $commonTCAOCommissionAgent->setCommonAgent($this);
    }

    /**
     * @param	CommonTCAOCommissionAgent $commonTCAOCommissionAgent The commonTCAOCommissionAgent object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonTCAOCommissionAgent($commonTCAOCommissionAgent)
    {
        if ($this->getCommonTCAOCommissionAgents()->contains($commonTCAOCommissionAgent)) {
            $this->collCommonTCAOCommissionAgents->remove($this->collCommonTCAOCommissionAgents->search($commonTCAOCommissionAgent));
            if (null === $this->commonTCAOCommissionAgentsScheduledForDeletion) {
                $this->commonTCAOCommissionAgentsScheduledForDeletion = clone $this->collCommonTCAOCommissionAgents;
                $this->commonTCAOCommissionAgentsScheduledForDeletion->clear();
            }
            $this->commonTCAOCommissionAgentsScheduledForDeletion[]= clone $commonTCAOCommissionAgent;
            $commonTCAOCommissionAgent->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonTCAOCommissionAgents from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOCommissionAgent[] List of CommonTCAOCommissionAgent objects
     */
    public function getCommonTCAOCommissionAgentsJoinCommonTCAOCommission($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOCommissionAgentQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOCommission', $join_behavior);

        return $this->getCommonTCAOCommissionAgents($query, $con);
    }

    /**
     * Clears out the collCommonTCAOSeanceAgents collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonTCAOSeanceAgents()
     */
    public function clearCommonTCAOSeanceAgents()
    {
        $this->collCommonTCAOSeanceAgents = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOSeanceAgentsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOSeanceAgents collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOSeanceAgents($v = true)
    {
        $this->collCommonTCAOSeanceAgentsPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOSeanceAgents collection.
     *
     * By default this just sets the collCommonTCAOSeanceAgents collection to an empty array (like clearcollCommonTCAOSeanceAgents());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOSeanceAgents($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOSeanceAgents && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOSeanceAgents = new PropelObjectCollection();
        $this->collCommonTCAOSeanceAgents->setModel('CommonTCAOSeanceAgent');
    }

    /**
     * Gets an array of CommonTCAOSeanceAgent objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOSeanceAgent[] List of CommonTCAOSeanceAgent objects
     * @throws PropelException
     */
    public function getCommonTCAOSeanceAgents($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOSeanceAgentsPartial && !$this->isNew();
        if (null === $this->collCommonTCAOSeanceAgents || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOSeanceAgents) {
                // return empty collection
                $this->initCommonTCAOSeanceAgents();
            } else {
                $collCommonTCAOSeanceAgents = CommonTCAOSeanceAgentQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOSeanceAgentsPartial && count($collCommonTCAOSeanceAgents)) {
                      $this->initCommonTCAOSeanceAgents(false);

                      foreach ($collCommonTCAOSeanceAgents as $obj) {
                        if (false == $this->collCommonTCAOSeanceAgents->contains($obj)) {
                          $this->collCommonTCAOSeanceAgents->append($obj);
                        }
                      }

                      $this->collCommonTCAOSeanceAgentsPartial = true;
                    }

                    $collCommonTCAOSeanceAgents->getInternalIterator()->rewind();

                    return $collCommonTCAOSeanceAgents;
                }

                if ($partial && $this->collCommonTCAOSeanceAgents) {
                    foreach ($this->collCommonTCAOSeanceAgents as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOSeanceAgents[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOSeanceAgents = $collCommonTCAOSeanceAgents;
                $this->collCommonTCAOSeanceAgentsPartial = false;
            }
        }

        return $this->collCommonTCAOSeanceAgents;
    }

    /**
     * Sets a collection of CommonTCAOSeanceAgent objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOSeanceAgents A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonTCAOSeanceAgents(PropelCollection $commonTCAOSeanceAgents, PropelPDO $con = null)
    {
        $commonTCAOSeanceAgentsToDelete = $this->getCommonTCAOSeanceAgents(new Criteria(), $con)->diff($commonTCAOSeanceAgents);


        $this->commonTCAOSeanceAgentsScheduledForDeletion = $commonTCAOSeanceAgentsToDelete;

        foreach ($commonTCAOSeanceAgentsToDelete as $commonTCAOSeanceAgentRemoved) {
            $commonTCAOSeanceAgentRemoved->setCommonAgent(null);
        }

        $this->collCommonTCAOSeanceAgents = null;
        foreach ($commonTCAOSeanceAgents as $commonTCAOSeanceAgent) {
            $this->addCommonTCAOSeanceAgent($commonTCAOSeanceAgent);
        }

        $this->collCommonTCAOSeanceAgents = $commonTCAOSeanceAgents;
        $this->collCommonTCAOSeanceAgentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOSeanceAgent objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOSeanceAgent objects.
     * @throws PropelException
     */
    public function countCommonTCAOSeanceAgents(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOSeanceAgentsPartial && !$this->isNew();
        if (null === $this->collCommonTCAOSeanceAgents || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOSeanceAgents) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOSeanceAgents());
            }
            $query = CommonTCAOSeanceAgentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonTCAOSeanceAgents);
    }

    /**
     * Method called to associate a CommonTCAOSeanceAgent object to this object
     * through the CommonTCAOSeanceAgent foreign key attribute.
     *
     * @param   CommonTCAOSeanceAgent $l CommonTCAOSeanceAgent
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonTCAOSeanceAgent(CommonTCAOSeanceAgent $l)
    {
        if ($this->collCommonTCAOSeanceAgents === null) {
            $this->initCommonTCAOSeanceAgents();
            $this->collCommonTCAOSeanceAgentsPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOSeanceAgents->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOSeanceAgent($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOSeanceAgent $commonTCAOSeanceAgent The commonTCAOSeanceAgent object to add.
     */
    protected function doAddCommonTCAOSeanceAgent($commonTCAOSeanceAgent)
    {
        $this->collCommonTCAOSeanceAgents[]= $commonTCAOSeanceAgent;
        $commonTCAOSeanceAgent->setCommonAgent($this);
    }

    /**
     * @param	CommonTCAOSeanceAgent $commonTCAOSeanceAgent The commonTCAOSeanceAgent object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonTCAOSeanceAgent($commonTCAOSeanceAgent)
    {
        if ($this->getCommonTCAOSeanceAgents()->contains($commonTCAOSeanceAgent)) {
            $this->collCommonTCAOSeanceAgents->remove($this->collCommonTCAOSeanceAgents->search($commonTCAOSeanceAgent));
            if (null === $this->commonTCAOSeanceAgentsScheduledForDeletion) {
                $this->commonTCAOSeanceAgentsScheduledForDeletion = clone $this->collCommonTCAOSeanceAgents;
                $this->commonTCAOSeanceAgentsScheduledForDeletion->clear();
            }
            $this->commonTCAOSeanceAgentsScheduledForDeletion[]= clone $commonTCAOSeanceAgent;
            $commonTCAOSeanceAgent->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonTCAOSeanceAgents from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOSeanceAgent[] List of CommonTCAOSeanceAgent objects
     */
    public function getCommonTCAOSeanceAgentsJoinCommonTCAOSeance($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOSeanceAgentQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOSeance', $join_behavior);

        return $this->getCommonTCAOSeanceAgents($query, $con);
    }

    /**
     * Clears out the collCommonTCAOSeanceInvites collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonAgent The current object (for fluent API support)
     * @see        addCommonTCAOSeanceInvites()
     */
    public function clearCommonTCAOSeanceInvites()
    {
        $this->collCommonTCAOSeanceInvites = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOSeanceInvitesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOSeanceInvites collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOSeanceInvites($v = true)
    {
        $this->collCommonTCAOSeanceInvitesPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOSeanceInvites collection.
     *
     * By default this just sets the collCommonTCAOSeanceInvites collection to an empty array (like clearcollCommonTCAOSeanceInvites());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOSeanceInvites($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOSeanceInvites && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOSeanceInvites = new PropelObjectCollection();
        $this->collCommonTCAOSeanceInvites->setModel('CommonTCAOSeanceInvite');
    }

    /**
     * Gets an array of CommonTCAOSeanceInvite objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonAgent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     * @throws PropelException
     */
    public function getCommonTCAOSeanceInvites($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOSeanceInvitesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOSeanceInvites || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOSeanceInvites) {
                // return empty collection
                $this->initCommonTCAOSeanceInvites();
            } else {
                $collCommonTCAOSeanceInvites = CommonTCAOSeanceInviteQuery::create(null, $criteria)
                    ->filterByCommonAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOSeanceInvitesPartial && count($collCommonTCAOSeanceInvites)) {
                      $this->initCommonTCAOSeanceInvites(false);

                      foreach ($collCommonTCAOSeanceInvites as $obj) {
                        if (false == $this->collCommonTCAOSeanceInvites->contains($obj)) {
                          $this->collCommonTCAOSeanceInvites->append($obj);
                        }
                      }

                      $this->collCommonTCAOSeanceInvitesPartial = true;
                    }

                    $collCommonTCAOSeanceInvites->getInternalIterator()->rewind();

                    return $collCommonTCAOSeanceInvites;
                }

                if ($partial && $this->collCommonTCAOSeanceInvites) {
                    foreach ($this->collCommonTCAOSeanceInvites as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOSeanceInvites[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOSeanceInvites = $collCommonTCAOSeanceInvites;
                $this->collCommonTCAOSeanceInvitesPartial = false;
            }
        }

        return $this->collCommonTCAOSeanceInvites;
    }

    /**
     * Sets a collection of CommonTCAOSeanceInvite objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOSeanceInvites A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCommonTCAOSeanceInvites(PropelCollection $commonTCAOSeanceInvites, PropelPDO $con = null)
    {
        $commonTCAOSeanceInvitesToDelete = $this->getCommonTCAOSeanceInvites(new Criteria(), $con)->diff($commonTCAOSeanceInvites);


        $this->commonTCAOSeanceInvitesScheduledForDeletion = $commonTCAOSeanceInvitesToDelete;

        foreach ($commonTCAOSeanceInvitesToDelete as $commonTCAOSeanceInviteRemoved) {
            $commonTCAOSeanceInviteRemoved->setCommonAgent(null);
        }

        $this->collCommonTCAOSeanceInvites = null;
        foreach ($commonTCAOSeanceInvites as $commonTCAOSeanceInvite) {
            $this->addCommonTCAOSeanceInvite($commonTCAOSeanceInvite);
        }

        $this->collCommonTCAOSeanceInvites = $commonTCAOSeanceInvites;
        $this->collCommonTCAOSeanceInvitesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOSeanceInvite objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOSeanceInvite objects.
     * @throws PropelException
     */
    public function countCommonTCAOSeanceInvites(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOSeanceInvitesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOSeanceInvites || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOSeanceInvites) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOSeanceInvites());
            }
            $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonAgent($this)
                ->count($con);
        }

        return count($this->collCommonTCAOSeanceInvites);
    }

    /**
     * Method called to associate a CommonTCAOSeanceInvite object to this object
     * through the CommonTCAOSeanceInvite foreign key attribute.
     *
     * @param   CommonTCAOSeanceInvite $l CommonTCAOSeanceInvite
     * @return CommonAgent The current object (for fluent API support)
     */
    public function addCommonTCAOSeanceInvite(CommonTCAOSeanceInvite $l)
    {
        if ($this->collCommonTCAOSeanceInvites === null) {
            $this->initCommonTCAOSeanceInvites();
            $this->collCommonTCAOSeanceInvitesPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOSeanceInvites->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOSeanceInvite($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOSeanceInvite $commonTCAOSeanceInvite The commonTCAOSeanceInvite object to add.
     */
    protected function doAddCommonTCAOSeanceInvite($commonTCAOSeanceInvite)
    {
        $this->collCommonTCAOSeanceInvites[]= $commonTCAOSeanceInvite;
        $commonTCAOSeanceInvite->setCommonAgent($this);
    }

    /**
     * @param	CommonTCAOSeanceInvite $commonTCAOSeanceInvite The commonTCAOSeanceInvite object to remove.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function removeCommonTCAOSeanceInvite($commonTCAOSeanceInvite)
    {
        if ($this->getCommonTCAOSeanceInvites()->contains($commonTCAOSeanceInvite)) {
            $this->collCommonTCAOSeanceInvites->remove($this->collCommonTCAOSeanceInvites->search($commonTCAOSeanceInvite));
            if (null === $this->commonTCAOSeanceInvitesScheduledForDeletion) {
                $this->commonTCAOSeanceInvitesScheduledForDeletion = clone $this->collCommonTCAOSeanceInvites;
                $this->commonTCAOSeanceInvitesScheduledForDeletion->clear();
            }
            $this->commonTCAOSeanceInvitesScheduledForDeletion[]= $commonTCAOSeanceInvite;
            $commonTCAOSeanceInvite->setCommonAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonTCAOSeanceInvites from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     */
    public function getCommonTCAOSeanceInvitesJoinCommonTCAOIntervenantExterne($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOIntervenantExterne', $join_behavior);

        return $this->getCommonTCAOSeanceInvites($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonTCAOSeanceInvites from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     */
    public function getCommonTCAOSeanceInvitesJoinCommonTCAOOrdreDePassage($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOOrdreDePassage', $join_behavior);

        return $this->getCommonTCAOSeanceInvites($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonAgent is new, it will return
     * an empty collection; or if this CommonAgent has previously
     * been saved, it will retrieve related CommonTCAOSeanceInvites from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonAgent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     */
    public function getCommonTCAOSeanceInvitesJoinCommonOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
        $query->joinWith('CommonOrganisme', $join_behavior);

        return $this->getCommonTCAOSeanceInvites($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->login = null;
        $this->email = null;
        $this->mdp = null;
        $this->certificat = null;
        $this->nom = null;
        $this->prenom = null;
        $this->tentatives_mdp = null;
        $this->organisme = null;
        $this->service_id = null;
        $this->recevoir_mail = null;
        $this->elu = null;
        $this->nom_fonction = null;
        $this->num_tel = null;
        $this->num_fax = null;
        $this->type_comm = null;
        $this->adr_postale = null;
        $this->civilite = null;
        $this->alerte_reponse_electronique = null;
        $this->alerte_reception_mainlevee = null;
        $this->alerte_cloture_consultation = null;
        $this->alerte_reception_message = null;
        $this->alerte_publication_boamp = null;
        $this->alerte_echec_publication_boamp = null;
        $this->alerte_creation_modification_agent = null;
        $this->date_creation = null;
        $this->date_modification = null;
        $this->id_initial = null;
        $this->id_profil_socle_externe = null;
        $this->lieu_execution = null;
        $this->alerte_question_entreprise = null;
        $this->actif = null;
        $this->codes_nuts = null;
        $this->num_certificat = null;
        $this->alerte_validation_consultation = null;
        $this->alerte_chorus = null;
        $this->password = null;
        $this->code_theme = null;
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
            if ($this->collCommonDemandeAchatParCatalogues) {
                foreach ($this->collCommonDemandeAchatParCatalogues as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecAgentContrats) {
                foreach ($this->collCommonExecAgentContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecAvenantsRelatedByIdAgentCrea) {
                foreach ($this->collCommonExecAvenantsRelatedByIdAgentCrea as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecAvenantsRelatedByIdAgentModif) {
                foreach ($this->collCommonExecAvenantsRelatedByIdAgentModif as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecAvenantsRelatedByIdAgentRejet) {
                foreach ($this->collCommonExecAvenantsRelatedByIdAgentRejet as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecAvenantsRelatedByIdAgentValidation) {
                foreach ($this->collCommonExecAvenantsRelatedByIdAgentValidation as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecContractantsRelatedByIdAgentCrea) {
                foreach ($this->collCommonExecContractantsRelatedByIdAgentCrea as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecContractantsRelatedByIdAgentModif) {
                foreach ($this->collCommonExecContractantsRelatedByIdAgentModif as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecContratsRelatedByIdAgentCrea) {
                foreach ($this->collCommonExecContratsRelatedByIdAgentCrea as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecContratsRelatedByIdAgentGestion) {
                foreach ($this->collCommonExecContratsRelatedByIdAgentGestion as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecContratsRelatedByIdAgentModif) {
                foreach ($this->collCommonExecContratsRelatedByIdAgentModif as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecDossierPaiements) {
                foreach ($this->collCommonExecDossierPaiements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecEvenementsRelatedByIdAgentCrea) {
                foreach ($this->collCommonExecEvenementsRelatedByIdAgentCrea as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecEvenementsRelatedByIdAgentModif) {
                foreach ($this->collCommonExecEvenementsRelatedByIdAgentModif as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecEvenementsRelatedByIdAgentRejet) {
                foreach ($this->collCommonExecEvenementsRelatedByIdAgentRejet as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecEvenementsRelatedByIdAgentValidation) {
                foreach ($this->collCommonExecEvenementsRelatedByIdAgentValidation as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecFacturesRelatedByIdAgentCrea) {
                foreach ($this->collCommonExecFacturesRelatedByIdAgentCrea as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecFacturesRelatedByIdAgentModif) {
                foreach ($this->collCommonExecFacturesRelatedByIdAgentModif as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecFacturesRelatedByIdAgentRejet) {
                foreach ($this->collCommonExecFacturesRelatedByIdAgentRejet as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecFacturesRelatedByIdAgentValidation) {
                foreach ($this->collCommonExecFacturesRelatedByIdAgentValidation as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea) {
                foreach ($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif) {
                foreach ($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecLivrableContrats) {
                foreach ($this->collCommonExecLivrableContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPhasesRelatedByIdAgentCrea) {
                foreach ($this->collCommonExecPhasesRelatedByIdAgentCrea as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPhasesRelatedByIdAgentModif) {
                foreach ($this->collCommonExecPhasesRelatedByIdAgentModif as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPieces) {
                foreach ($this->collCommonExecPieces as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPieceAvenants) {
                foreach ($this->collCommonExecPieceAvenants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPieceContrats) {
                foreach ($this->collCommonExecPieceContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPieceDossierpaiements) {
                foreach ($this->collCommonExecPieceDossierpaiements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPieceEvenements) {
                foreach ($this->collCommonExecPieceEvenements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPieceFactures) {
                foreach ($this->collCommonExecPieceFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPrixsRelatedByIdAgentCrea) {
                foreach ($this->collCommonExecPrixsRelatedByIdAgentCrea as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPrixsRelatedByIdAgentModif) {
                foreach ($this->collCommonExecPrixsRelatedByIdAgentModif as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecRepartitionsRelatedByIdAgentCrea) {
                foreach ($this->collCommonExecRepartitionsRelatedByIdAgentCrea as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecRepartitionsRelatedByIdAgentModif) {
                foreach ($this->collCommonExecRepartitionsRelatedByIdAgentModif as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonResultatAnalyseHistoriques) {
                foreach ($this->collCommonResultatAnalyseHistoriques as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCAOCommissionAgents) {
                foreach ($this->collCommonTCAOCommissionAgents as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCAOSeanceAgents) {
                foreach ($this->collCommonTCAOSeanceAgents as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCAOSeanceInvites) {
                foreach ($this->collCommonTCAOSeanceInvites as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonOrganisme instanceof Persistent) {
              $this->aCommonOrganisme->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonDemandeAchatParCatalogues instanceof PropelCollection) {
            $this->collCommonDemandeAchatParCatalogues->clearIterator();
        }
        $this->collCommonDemandeAchatParCatalogues = null;
        if ($this->collCommonExecAgentContrats instanceof PropelCollection) {
            $this->collCommonExecAgentContrats->clearIterator();
        }
        $this->collCommonExecAgentContrats = null;
        if ($this->collCommonExecAvenantsRelatedByIdAgentCrea instanceof PropelCollection) {
            $this->collCommonExecAvenantsRelatedByIdAgentCrea->clearIterator();
        }
        $this->collCommonExecAvenantsRelatedByIdAgentCrea = null;
        if ($this->collCommonExecAvenantsRelatedByIdAgentModif instanceof PropelCollection) {
            $this->collCommonExecAvenantsRelatedByIdAgentModif->clearIterator();
        }
        $this->collCommonExecAvenantsRelatedByIdAgentModif = null;
        if ($this->collCommonExecAvenantsRelatedByIdAgentRejet instanceof PropelCollection) {
            $this->collCommonExecAvenantsRelatedByIdAgentRejet->clearIterator();
        }
        $this->collCommonExecAvenantsRelatedByIdAgentRejet = null;
        if ($this->collCommonExecAvenantsRelatedByIdAgentValidation instanceof PropelCollection) {
            $this->collCommonExecAvenantsRelatedByIdAgentValidation->clearIterator();
        }
        $this->collCommonExecAvenantsRelatedByIdAgentValidation = null;
        if ($this->collCommonExecContractantsRelatedByIdAgentCrea instanceof PropelCollection) {
            $this->collCommonExecContractantsRelatedByIdAgentCrea->clearIterator();
        }
        $this->collCommonExecContractantsRelatedByIdAgentCrea = null;
        if ($this->collCommonExecContractantsRelatedByIdAgentModif instanceof PropelCollection) {
            $this->collCommonExecContractantsRelatedByIdAgentModif->clearIterator();
        }
        $this->collCommonExecContractantsRelatedByIdAgentModif = null;
        if ($this->collCommonExecContratsRelatedByIdAgentCrea instanceof PropelCollection) {
            $this->collCommonExecContratsRelatedByIdAgentCrea->clearIterator();
        }
        $this->collCommonExecContratsRelatedByIdAgentCrea = null;
        if ($this->collCommonExecContratsRelatedByIdAgentGestion instanceof PropelCollection) {
            $this->collCommonExecContratsRelatedByIdAgentGestion->clearIterator();
        }
        $this->collCommonExecContratsRelatedByIdAgentGestion = null;
        if ($this->collCommonExecContratsRelatedByIdAgentModif instanceof PropelCollection) {
            $this->collCommonExecContratsRelatedByIdAgentModif->clearIterator();
        }
        $this->collCommonExecContratsRelatedByIdAgentModif = null;
        if ($this->collCommonExecDossierPaiements instanceof PropelCollection) {
            $this->collCommonExecDossierPaiements->clearIterator();
        }
        $this->collCommonExecDossierPaiements = null;
        if ($this->collCommonExecEvenementsRelatedByIdAgentCrea instanceof PropelCollection) {
            $this->collCommonExecEvenementsRelatedByIdAgentCrea->clearIterator();
        }
        $this->collCommonExecEvenementsRelatedByIdAgentCrea = null;
        if ($this->collCommonExecEvenementsRelatedByIdAgentModif instanceof PropelCollection) {
            $this->collCommonExecEvenementsRelatedByIdAgentModif->clearIterator();
        }
        $this->collCommonExecEvenementsRelatedByIdAgentModif = null;
        if ($this->collCommonExecEvenementsRelatedByIdAgentRejet instanceof PropelCollection) {
            $this->collCommonExecEvenementsRelatedByIdAgentRejet->clearIterator();
        }
        $this->collCommonExecEvenementsRelatedByIdAgentRejet = null;
        if ($this->collCommonExecEvenementsRelatedByIdAgentValidation instanceof PropelCollection) {
            $this->collCommonExecEvenementsRelatedByIdAgentValidation->clearIterator();
        }
        $this->collCommonExecEvenementsRelatedByIdAgentValidation = null;
        if ($this->collCommonExecFacturesRelatedByIdAgentCrea instanceof PropelCollection) {
            $this->collCommonExecFacturesRelatedByIdAgentCrea->clearIterator();
        }
        $this->collCommonExecFacturesRelatedByIdAgentCrea = null;
        if ($this->collCommonExecFacturesRelatedByIdAgentModif instanceof PropelCollection) {
            $this->collCommonExecFacturesRelatedByIdAgentModif->clearIterator();
        }
        $this->collCommonExecFacturesRelatedByIdAgentModif = null;
        if ($this->collCommonExecFacturesRelatedByIdAgentRejet instanceof PropelCollection) {
            $this->collCommonExecFacturesRelatedByIdAgentRejet->clearIterator();
        }
        $this->collCommonExecFacturesRelatedByIdAgentRejet = null;
        if ($this->collCommonExecFacturesRelatedByIdAgentValidation instanceof PropelCollection) {
            $this->collCommonExecFacturesRelatedByIdAgentValidation->clearIterator();
        }
        $this->collCommonExecFacturesRelatedByIdAgentValidation = null;
        if ($this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea instanceof PropelCollection) {
            $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea->clearIterator();
        }
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentCrea = null;
        if ($this->collCommonExecHistoriquePrixsRelatedByIdAgentModif instanceof PropelCollection) {
            $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif->clearIterator();
        }
        $this->collCommonExecHistoriquePrixsRelatedByIdAgentModif = null;
        if ($this->collCommonExecLivrableContrats instanceof PropelCollection) {
            $this->collCommonExecLivrableContrats->clearIterator();
        }
        $this->collCommonExecLivrableContrats = null;
        if ($this->collCommonExecPhasesRelatedByIdAgentCrea instanceof PropelCollection) {
            $this->collCommonExecPhasesRelatedByIdAgentCrea->clearIterator();
        }
        $this->collCommonExecPhasesRelatedByIdAgentCrea = null;
        if ($this->collCommonExecPhasesRelatedByIdAgentModif instanceof PropelCollection) {
            $this->collCommonExecPhasesRelatedByIdAgentModif->clearIterator();
        }
        $this->collCommonExecPhasesRelatedByIdAgentModif = null;
        if ($this->collCommonExecPieces instanceof PropelCollection) {
            $this->collCommonExecPieces->clearIterator();
        }
        $this->collCommonExecPieces = null;
        if ($this->collCommonExecPieceAvenants instanceof PropelCollection) {
            $this->collCommonExecPieceAvenants->clearIterator();
        }
        $this->collCommonExecPieceAvenants = null;
        if ($this->collCommonExecPieceContrats instanceof PropelCollection) {
            $this->collCommonExecPieceContrats->clearIterator();
        }
        $this->collCommonExecPieceContrats = null;
        if ($this->collCommonExecPieceDossierpaiements instanceof PropelCollection) {
            $this->collCommonExecPieceDossierpaiements->clearIterator();
        }
        $this->collCommonExecPieceDossierpaiements = null;
        if ($this->collCommonExecPieceEvenements instanceof PropelCollection) {
            $this->collCommonExecPieceEvenements->clearIterator();
        }
        $this->collCommonExecPieceEvenements = null;
        if ($this->collCommonExecPieceFactures instanceof PropelCollection) {
            $this->collCommonExecPieceFactures->clearIterator();
        }
        $this->collCommonExecPieceFactures = null;
        if ($this->collCommonExecPrixsRelatedByIdAgentCrea instanceof PropelCollection) {
            $this->collCommonExecPrixsRelatedByIdAgentCrea->clearIterator();
        }
        $this->collCommonExecPrixsRelatedByIdAgentCrea = null;
        if ($this->collCommonExecPrixsRelatedByIdAgentModif instanceof PropelCollection) {
            $this->collCommonExecPrixsRelatedByIdAgentModif->clearIterator();
        }
        $this->collCommonExecPrixsRelatedByIdAgentModif = null;
        if ($this->collCommonExecRepartitionsRelatedByIdAgentCrea instanceof PropelCollection) {
            $this->collCommonExecRepartitionsRelatedByIdAgentCrea->clearIterator();
        }
        $this->collCommonExecRepartitionsRelatedByIdAgentCrea = null;
        if ($this->collCommonExecRepartitionsRelatedByIdAgentModif instanceof PropelCollection) {
            $this->collCommonExecRepartitionsRelatedByIdAgentModif->clearIterator();
        }
        $this->collCommonExecRepartitionsRelatedByIdAgentModif = null;
        if ($this->collCommonResultatAnalyseHistoriques instanceof PropelCollection) {
            $this->collCommonResultatAnalyseHistoriques->clearIterator();
        }
        $this->collCommonResultatAnalyseHistoriques = null;
        if ($this->collCommonTCAOCommissionAgents instanceof PropelCollection) {
            $this->collCommonTCAOCommissionAgents->clearIterator();
        }
        $this->collCommonTCAOCommissionAgents = null;
        if ($this->collCommonTCAOSeanceAgents instanceof PropelCollection) {
            $this->collCommonTCAOSeanceAgents->clearIterator();
        }
        $this->collCommonTCAOSeanceAgents = null;
        if ($this->collCommonTCAOSeanceInvites instanceof PropelCollection) {
            $this->collCommonTCAOSeanceInvites->clearIterator();
        }
        $this->collCommonTCAOSeanceInvites = null;
        $this->aCommonOrganisme = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonAgentPeer::DEFAULT_STRING_FORMAT);
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
