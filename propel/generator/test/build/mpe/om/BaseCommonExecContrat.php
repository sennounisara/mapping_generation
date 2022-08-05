<?php


/**
 * Base class that represents a row from the 'exec_contrat' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecContrat extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecContratPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecContratPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_decision_enveloppe field.
     * @var        int
     */
    protected $id_decision_enveloppe;

    /**
     * The value for the numero field.
     * @var        string
     */
    protected $numero;

    /**
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the id_type_contrat field.
     * @var        int
     */
    protected $id_type_contrat;

    /**
     * The value for the id_type_structure field.
     * @var        int
     */
    protected $id_type_structure;

    /**
     * The value for the objet field.
     * @var        string
     */
    protected $objet;

    /**
     * The value for the num_consultation field.
     * @var        string
     */
    protected $num_consultation;

    /**
     * The value for the id_nature_prestation field.
     * @var        string
     */
    protected $id_nature_prestation;

    /**
     * The value for the id_service field.
     * @var        int
     */
    protected $id_service;

    /**
     * The value for the id_service_gerant field.
     * @var        int
     */
    protected $id_service_gerant;

    /**
     * The value for the id_agent_gestion field.
     * @var        int
     */
    protected $id_agent_gestion;

    /**
     * The value for the reconductible field.
     * @var        int
     */
    protected $reconductible;

    /**
     * The value for the nombre_reconduction field.
     * @var        int
     */
    protected $nombre_reconduction;

    /**
     * The value for the montant_ht field.
     * @var        double
     */
    protected $montant_ht;

    /**
     * The value for the montant_ttc field.
     * @var        double
     */
    protected $montant_ttc;

    /**
     * The value for the montant_min field.
     * @var        double
     */
    protected $montant_min;

    /**
     * The value for the montant_max field.
     * @var        double
     */
    protected $montant_max;

    /**
     * The value for the montant_min_ttc field.
     * @var        double
     */
    protected $montant_min_ttc;

    /**
     * The value for the montant_max_ttc field.
     * @var        double
     */
    protected $montant_max_ttc;

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
     * The value for the montant_caution field.
     * @var        double
     */
    protected $montant_caution;

    /**
     * The value for the pourcentage_caution field.
     * @var        double
     */
    protected $pourcentage_caution;

    /**
     * The value for the retenue_garantie field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $retenue_garantie;

    /**
     * The value for the pourcentage_retenue_garantie field.
     * @var        double
     */
    protected $pourcentage_retenue_garantie;

    /**
     * The value for the montant_retenu_garantie field.
     * @var        double
     */
    protected $montant_retenu_garantie;

    /**
     * The value for the pourcentage_prelevement_garantie field.
     * @var        double
     */
    protected $pourcentage_prelevement_garantie;

    /**
     * The value for the montant_avance field.
     * @var        double
     */
    protected $montant_avance;

    /**
     * The value for the delai_partiel field.
     * @var        int
     */
    protected $delai_partiel;

    /**
     * The value for the delai_contrat field.
     * @var        double
     */
    protected $delai_contrat;

    /**
     * The value for the unite_delai_contrat field.
     * @var        int
     */
    protected $unite_delai_contrat;

    /**
     * The value for the date_approbation field.
     * @var        string
     */
    protected $date_approbation;

    /**
     * The value for the date_notification_approbation field.
     * @var        string
     */
    protected $date_notification_approbation;

    /**
     * The value for the date_fin field.
     * @var        string
     */
    protected $date_fin;

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
     * The value for the delai_reel field.
     * @var        double
     */
    protected $delai_reel;

    /**
     * The value for the depassement field.
     * @var        double
     */
    protected $depassement;

    /**
     * The value for the date_maj_delai_reel field.
     * @var        string
     */
    protected $date_maj_delai_reel;

    /**
     * The value for the id_parapheur field.
     * @var        int
     */
    protected $id_parapheur;

    /**
     * The value for the statut_parapheur field.
     * @var        int
     */
    protected $statut_parapheur;

    /**
     * The value for the date_cloture_parapheur field.
     * @var        string
     */
    protected $date_cloture_parapheur;

    /**
     * The value for the garantie field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $garantie;

    /**
     * The value for the duree_garantie field.
     * @var        double
     */
    protected $duree_garantie;

    /**
     * The value for the unite_garantie field.
     * @var        int
     */
    protected $unite_garantie;

    /**
     * The value for the type_penalite field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_penalite;

    /**
     * The value for the pourcentage_penalite field.
     * @var        double
     */
    protected $pourcentage_penalite;

    /**
     * The value for the montant_penalite field.
     * @var        double
     */
    protected $montant_penalite;

    /**
     * The value for the plafond_penalite field.
     * @var        double
     */
    protected $plafond_penalite;

    /**
     * The value for the mode_passation field.
     * @var        int
     */
    protected $mode_passation;

    /**
     * The value for the lie_marche field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $lie_marche;

    /**
     * The value for the num_chapeau field.
     * @var        int
     */
    protected $num_chapeau;

    /**
     * The value for the os_phase field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $os_phase;

    /**
     * The value for the prestation_demande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $prestation_demande;

    /**
     * The value for the forfait_jh field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $forfait_jh;

    /**
     * The value for the quantite_jh field.
     * @var        double
     */
    protected $quantite_jh;

    /**
     * The value for the nature_marche field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $nature_marche;

    /**
     * The value for the date_debut field.
     * @var        string
     */
    protected $date_debut;

    /**
     * The value for the plurianuelle field.
     * @var        string
     */
    protected $plurianuelle;

    /**
     * The value for the trancheconditionnelle field.
     * @var        string
     */
    protected $trancheconditionnelle;

    /**
     * The value for the id_agent_cr field.
     * @var        int
     */
    protected $id_agent_cr;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgentRelatedByIdAgentCrea;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgentRelatedByIdAgentGestion;

    /**
     * @var        CommonAgent
     */
    protected $aCommonAgentRelatedByIdAgentModif;

    /**
     * @var        CommonCategorieConsultation
     */
    protected $aCommonCategorieConsultation;

    /**
     * @var        CommonExecTypeContrat
     */
    protected $aCommonExecTypeContrat;

    /**
     * @var        CommonExecTypeStructure
     */
    protected $aCommonExecTypeStructure;

    /**
     * @var        PropelObjectCollection|CommonExecAgentContrat[] Collection to store aggregation of CommonExecAgentContrat objects.
     */
    protected $collCommonExecAgentContrats;
    protected $collCommonExecAgentContratsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecAvenant[] Collection to store aggregation of CommonExecAvenant objects.
     */
    protected $collCommonExecAvenants;
    protected $collCommonExecAvenantsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecContact[] Collection to store aggregation of CommonExecContact objects.
     */
    protected $collCommonExecContacts;
    protected $collCommonExecContactsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecContractant[] Collection to store aggregation of CommonExecContractant objects.
     */
    protected $collCommonExecContractants;
    protected $collCommonExecContractantsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecDossierPaiement[] Collection to store aggregation of CommonExecDossierPaiement objects.
     */
    protected $collCommonExecDossierPaiements;
    protected $collCommonExecDossierPaiementsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecEvenement[] Collection to store aggregation of CommonExecEvenement objects.
     */
    protected $collCommonExecEvenements;
    protected $collCommonExecEvenementsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecFacture[] Collection to store aggregation of CommonExecFacture objects.
     */
    protected $collCommonExecFactures;
    protected $collCommonExecFacturesPartial;

    /**
     * @var        PropelObjectCollection|CommonExecHistoriquePrix[] Collection to store aggregation of CommonExecHistoriquePrix objects.
     */
    protected $collCommonExecHistoriquePrixs;
    protected $collCommonExecHistoriquePrixsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecInscritContrat[] Collection to store aggregation of CommonExecInscritContrat objects.
     */
    protected $collCommonExecInscritContrats;
    protected $collCommonExecInscritContratsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecLivrableContrat[] Collection to store aggregation of CommonExecLivrableContrat objects.
     */
    protected $collCommonExecLivrableContrats;
    protected $collCommonExecLivrableContratsPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPhase[] Collection to store aggregation of CommonExecPhase objects.
     */
    protected $collCommonExecPhases;
    protected $collCommonExecPhasesPartial;

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
    protected $collCommonExecPrixs;
    protected $collCommonExecPrixsPartial;

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
    protected $commonExecAgentContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecAvenantsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecContactsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecContractantsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecDossierPaiementsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecEvenementsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecHistoriquePrixsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecInscritContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecLivrableContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPhasesScheduledForDeletion = null;

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
    protected $commonExecPrixsScheduledForDeletion = null;

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
        $this->retenue_garantie = '0';
        $this->garantie = '0';
        $this->type_penalite = '0';
        $this->lie_marche = '0';
        $this->os_phase = '0';
        $this->prestation_demande = '0';
        $this->forfait_jh = '0';
        $this->nature_marche = 0;
    }

    /**
     * Initializes internal state of BaseCommonExecContrat object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
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
     * Get the [id_decision_enveloppe] column value.
     * 
     * @return int
     */
    public function getIdDecisionEnveloppe()
    {

        return $this->id_decision_enveloppe;
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
     * Get the [statut] column value.
     * 
     * @return int
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Get the [id_type_contrat] column value.
     * 
     * @return int
     */
    public function getIdTypeContrat()
    {

        return $this->id_type_contrat;
    }

    /**
     * Get the [id_type_structure] column value.
     * 
     * @return int
     */
    public function getIdTypeStructure()
    {

        return $this->id_type_structure;
    }

    /**
     * Get the [objet] column value.
     * 
     * @return string
     */
    public function getObjet()
    {

        return $this->objet;
    }

    /**
     * Get the [num_consultation] column value.
     * 
     * @return string
     */
    public function getNumConsultation()
    {

        return $this->num_consultation;
    }

    /**
     * Get the [id_nature_prestation] column value.
     * 
     * @return string
     */
    public function getIdNaturePrestation()
    {

        return $this->id_nature_prestation;
    }

    /**
     * Get the [id_service] column value.
     * 
     * @return int
     */
    public function getIdService()
    {

        return $this->id_service;
    }

    /**
     * Get the [id_service_gerant] column value.
     * 
     * @return int
     */
    public function getIdServiceGerant()
    {

        return $this->id_service_gerant;
    }

    /**
     * Get the [id_agent_gestion] column value.
     * 
     * @return int
     */
    public function getIdAgentGestion()
    {

        return $this->id_agent_gestion;
    }

    /**
     * Get the [reconductible] column value.
     * 
     * @return int
     */
    public function getReconductible()
    {

        return $this->reconductible;
    }

    /**
     * Get the [nombre_reconduction] column value.
     * 
     * @return int
     */
    public function getNombreReconduction()
    {

        return $this->nombre_reconduction;
    }

    /**
     * Get the [montant_ht] column value.
     * 
     * @return double
     */
    public function getMontantHt()
    {

        return $this->montant_ht;
    }

    /**
     * Get the [montant_ttc] column value.
     * 
     * @return double
     */
    public function getMontantTtc()
    {

        return $this->montant_ttc;
    }

    /**
     * Get the [montant_min] column value.
     * 
     * @return double
     */
    public function getMontantMin()
    {

        return $this->montant_min;
    }

    /**
     * Get the [montant_max] column value.
     * 
     * @return double
     */
    public function getMontantMax()
    {

        return $this->montant_max;
    }

    /**
     * Get the [montant_min_ttc] column value.
     * 
     * @return double
     */
    public function getMontantMinTtc()
    {

        return $this->montant_min_ttc;
    }

    /**
     * Get the [montant_max_ttc] column value.
     * 
     * @return double
     */
    public function getMontantMaxTtc()
    {

        return $this->montant_max_ttc;
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
     * Get the [montant_caution] column value.
     * 
     * @return double
     */
    public function getMontantCaution()
    {

        return $this->montant_caution;
    }

    /**
     * Get the [pourcentage_caution] column value.
     * 
     * @return double
     */
    public function getPourcentageCaution()
    {

        return $this->pourcentage_caution;
    }

    /**
     * Get the [retenue_garantie] column value.
     * 
     * @return string
     */
    public function getRetenueGarantie()
    {

        return $this->retenue_garantie;
    }

    /**
     * Get the [pourcentage_retenue_garantie] column value.
     * 
     * @return double
     */
    public function getPourcentageRetenueGarantie()
    {

        return $this->pourcentage_retenue_garantie;
    }

    /**
     * Get the [montant_retenu_garantie] column value.
     * 
     * @return double
     */
    public function getMontantRetenuGarantie()
    {

        return $this->montant_retenu_garantie;
    }

    /**
     * Get the [pourcentage_prelevement_garantie] column value.
     * 
     * @return double
     */
    public function getPourcentagePrelevementGarantie()
    {

        return $this->pourcentage_prelevement_garantie;
    }

    /**
     * Get the [montant_avance] column value.
     * 
     * @return double
     */
    public function getMontantAvance()
    {

        return $this->montant_avance;
    }

    /**
     * Get the [delai_partiel] column value.
     * 
     * @return int
     */
    public function getDelaiPartiel()
    {

        return $this->delai_partiel;
    }

    /**
     * Get the [delai_contrat] column value.
     * 
     * @return double
     */
    public function getDelaiContrat()
    {

        return $this->delai_contrat;
    }

    /**
     * Get the [unite_delai_contrat] column value.
     * 
     * @return int
     */
    public function getUniteDelaiContrat()
    {

        return $this->unite_delai_contrat;
    }

    /**
     * Get the [optionally formatted] temporal [date_approbation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateApprobation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_approbation === null) {
            return null;
        }

        if ($this->date_approbation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_approbation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_approbation, true), $x);
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
     * Get the [optionally formatted] temporal [date_notification_approbation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateNotificationApprobation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_notification_approbation === null) {
            return null;
        }

        if ($this->date_notification_approbation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_notification_approbation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_notification_approbation, true), $x);
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
     * Get the [optionally formatted] temporal [date_fin] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateFin($format = 'Y-m-d H:i:s')
    {
        if ($this->date_fin === null) {
            return null;
        }

        if ($this->date_fin === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_fin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_fin, true), $x);
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
     * Get the [delai_reel] column value.
     * 
     * @return double
     */
    public function getDelaiReel()
    {

        return $this->delai_reel;
    }

    /**
     * Get the [depassement] column value.
     * 
     * @return double
     */
    public function getDepassement()
    {

        return $this->depassement;
    }

    /**
     * Get the [optionally formatted] temporal [date_maj_delai_reel] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateMajDelaiReel($format = 'Y-m-d H:i:s')
    {
        if ($this->date_maj_delai_reel === null) {
            return null;
        }

        if ($this->date_maj_delai_reel === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_maj_delai_reel);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_maj_delai_reel, true), $x);
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
     * Get the [statut_parapheur] column value.
     * 
     * @return int
     */
    public function getStatutParapheur()
    {

        return $this->statut_parapheur;
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
     * Get the [garantie] column value.
     * 
     * @return string
     */
    public function getGarantie()
    {

        return $this->garantie;
    }

    /**
     * Get the [duree_garantie] column value.
     * 
     * @return double
     */
    public function getDureeGarantie()
    {

        return $this->duree_garantie;
    }

    /**
     * Get the [unite_garantie] column value.
     * 
     * @return int
     */
    public function getUniteGarantie()
    {

        return $this->unite_garantie;
    }

    /**
     * Get the [type_penalite] column value.
     * 
     * @return string
     */
    public function getTypePenalite()
    {

        return $this->type_penalite;
    }

    /**
     * Get the [pourcentage_penalite] column value.
     * 
     * @return double
     */
    public function getPourcentagePenalite()
    {

        return $this->pourcentage_penalite;
    }

    /**
     * Get the [montant_penalite] column value.
     * 
     * @return double
     */
    public function getMontantPenalite()
    {

        return $this->montant_penalite;
    }

    /**
     * Get the [plafond_penalite] column value.
     * 
     * @return double
     */
    public function getPlafondPenalite()
    {

        return $this->plafond_penalite;
    }

    /**
     * Get the [mode_passation] column value.
     * 
     * @return int
     */
    public function getModePassation()
    {

        return $this->mode_passation;
    }

    /**
     * Get the [lie_marche] column value.
     * 
     * @return string
     */
    public function getLieMarche()
    {

        return $this->lie_marche;
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
     * Get the [os_phase] column value.
     * 
     * @return string
     */
    public function getOsPhase()
    {

        return $this->os_phase;
    }

    /**
     * Get the [prestation_demande] column value.
     * 
     * @return string
     */
    public function getPrestationDemande()
    {

        return $this->prestation_demande;
    }

    /**
     * Get the [forfait_jh] column value.
     * 
     * @return string
     */
    public function getForfaitJh()
    {

        return $this->forfait_jh;
    }

    /**
     * Get the [quantite_jh] column value.
     * 
     * @return double
     */
    public function getQuantiteJh()
    {

        return $this->quantite_jh;
    }

    /**
     * Get the [nature_marche] column value.
     * 
     * @return int
     */
    public function getNatureMarche()
    {

        return $this->nature_marche;
    }

    /**
     * Get the [optionally formatted] temporal [date_debut] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDebut($format = 'Y-m-d H:i:s')
    {
        if ($this->date_debut === null) {
            return null;
        }

        if ($this->date_debut === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_debut);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_debut, true), $x);
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
     * Get the [plurianuelle] column value.
     * 
     * @return string
     */
    public function getPlurianuelle()
    {

        return $this->plurianuelle;
    }

    /**
     * Get the [trancheconditionnelle] column value.
     * 
     * @return string
     */
    public function getTrancheconditionnelle()
    {

        return $this->trancheconditionnelle;
    }

    /**
     * Get the [id_agent_cr] column value.
     * 
     * @return int
     */
    public function getIdAgentCr()
    {

        return $this->id_agent_cr;
    }

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_CONTRAT;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_decision_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdDecisionEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_decision_enveloppe !== $v) {
            $this->id_decision_enveloppe = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_DECISION_ENVELOPPE;
        }


        return $this;
    } // setIdDecisionEnveloppe()

    /**
     * Set the value of [numero] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [id_type_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdTypeContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_contrat !== $v) {
            $this->id_type_contrat = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_TYPE_CONTRAT;
        }

        if ($this->aCommonExecTypeContrat !== null && $this->aCommonExecTypeContrat->getId() !== $v) {
            $this->aCommonExecTypeContrat = null;
        }


        return $this;
    } // setIdTypeContrat()

    /**
     * Set the value of [id_type_structure] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdTypeStructure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_structure !== $v) {
            $this->id_type_structure = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_TYPE_STRUCTURE;
        }

        if ($this->aCommonExecTypeStructure !== null && $this->aCommonExecTypeStructure->getId() !== $v) {
            $this->aCommonExecTypeStructure = null;
        }


        return $this;
    } // setIdTypeStructure()

    /**
     * Set the value of [objet] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet !== $v) {
            $this->objet = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::OBJET;
        }


        return $this;
    } // setObjet()

    /**
     * Set the value of [num_consultation] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setNumConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_consultation !== $v) {
            $this->num_consultation = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::NUM_CONSULTATION;
        }


        return $this;
    } // setNumConsultation()

    /**
     * Set the value of [id_nature_prestation] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdNaturePrestation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_nature_prestation !== $v) {
            $this->id_nature_prestation = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_NATURE_PRESTATION;
        }

        if ($this->aCommonCategorieConsultation !== null && $this->aCommonCategorieConsultation->getId() !== $v) {
            $this->aCommonCategorieConsultation = null;
        }


        return $this;
    } // setIdNaturePrestation()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [id_service_gerant] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdServiceGerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service_gerant !== $v) {
            $this->id_service_gerant = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_SERVICE_GERANT;
        }


        return $this;
    } // setIdServiceGerant()

    /**
     * Set the value of [id_agent_gestion] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdAgentGestion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_gestion !== $v) {
            $this->id_agent_gestion = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_AGENT_GESTION;
        }

        if ($this->aCommonAgentRelatedByIdAgentGestion !== null && $this->aCommonAgentRelatedByIdAgentGestion->getId() !== $v) {
            $this->aCommonAgentRelatedByIdAgentGestion = null;
        }


        return $this;
    } // setIdAgentGestion()

    /**
     * Set the value of [reconductible] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setReconductible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reconductible !== $v) {
            $this->reconductible = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::RECONDUCTIBLE;
        }


        return $this;
    } // setReconductible()

    /**
     * Set the value of [nombre_reconduction] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setNombreReconduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nombre_reconduction !== $v) {
            $this->nombre_reconduction = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::NOMBRE_RECONDUCTION;
        }


        return $this;
    } // setNombreReconduction()

    /**
     * Set the value of [montant_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_ht !== $v) {
            $this->montant_ht = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_HT;
        }


        return $this;
    } // setMontantHt()

    /**
     * Set the value of [montant_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_ttc !== $v) {
            $this->montant_ttc = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_TTC;
        }


        return $this;
    } // setMontantTtc()

    /**
     * Set the value of [montant_min] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_min !== $v) {
            $this->montant_min = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_MIN;
        }


        return $this;
    } // setMontantMin()

    /**
     * Set the value of [montant_max] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_max !== $v) {
            $this->montant_max = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_MAX;
        }


        return $this;
    } // setMontantMax()

    /**
     * Set the value of [montant_min_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantMinTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_min_ttc !== $v) {
            $this->montant_min_ttc = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_MIN_TTC;
        }


        return $this;
    } // setMontantMinTtc()

    /**
     * Set the value of [montant_max_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantMaxTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_max_ttc !== $v) {
            $this->montant_max_ttc = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_MAX_TTC;
        }


        return $this;
    } // setMontantMaxTtc()

    /**
     * Set the value of [montant_facture_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantFactureHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_facture_ht !== $v) {
            $this->montant_facture_ht = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_FACTURE_HT;
        }


        return $this;
    } // setMontantFactureHt()

    /**
     * Set the value of [montant_facture_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantFactureTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_facture_ttc !== $v) {
            $this->montant_facture_ttc = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_FACTURE_TTC;
        }


        return $this;
    } // setMontantFactureTtc()

    /**
     * Set the value of [montant_paye_ht] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantPayeHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_paye_ht !== $v) {
            $this->montant_paye_ht = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_PAYE_HT;
        }


        return $this;
    } // setMontantPayeHt()

    /**
     * Set the value of [montant_paye_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantPayeTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_paye_ttc !== $v) {
            $this->montant_paye_ttc = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_PAYE_TTC;
        }


        return $this;
    } // setMontantPayeTtc()

    /**
     * Set the value of [montant_caution] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_caution !== $v) {
            $this->montant_caution = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_CAUTION;
        }


        return $this;
    } // setMontantCaution()

    /**
     * Set the value of [pourcentage_caution] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setPourcentageCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pourcentage_caution !== $v) {
            $this->pourcentage_caution = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::POURCENTAGE_CAUTION;
        }


        return $this;
    } // setPourcentageCaution()

    /**
     * Set the value of [retenue_garantie] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setRetenueGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->retenue_garantie !== $v) {
            $this->retenue_garantie = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::RETENUE_GARANTIE;
        }


        return $this;
    } // setRetenueGarantie()

    /**
     * Set the value of [pourcentage_retenue_garantie] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setPourcentageRetenueGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pourcentage_retenue_garantie !== $v) {
            $this->pourcentage_retenue_garantie = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::POURCENTAGE_RETENUE_GARANTIE;
        }


        return $this;
    } // setPourcentageRetenueGarantie()

    /**
     * Set the value of [montant_retenu_garantie] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantRetenuGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_retenu_garantie !== $v) {
            $this->montant_retenu_garantie = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_RETENU_GARANTIE;
        }


        return $this;
    } // setMontantRetenuGarantie()

    /**
     * Set the value of [pourcentage_prelevement_garantie] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setPourcentagePrelevementGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pourcentage_prelevement_garantie !== $v) {
            $this->pourcentage_prelevement_garantie = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE;
        }


        return $this;
    } // setPourcentagePrelevementGarantie()

    /**
     * Set the value of [montant_avance] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantAvance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_avance !== $v) {
            $this->montant_avance = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_AVANCE;
        }


        return $this;
    } // setMontantAvance()

    /**
     * Set the value of [delai_partiel] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDelaiPartiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_partiel !== $v) {
            $this->delai_partiel = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::DELAI_PARTIEL;
        }


        return $this;
    } // setDelaiPartiel()

    /**
     * Set the value of [delai_contrat] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDelaiContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->delai_contrat !== $v) {
            $this->delai_contrat = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::DELAI_CONTRAT;
        }


        return $this;
    } // setDelaiContrat()

    /**
     * Set the value of [unite_delai_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setUniteDelaiContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unite_delai_contrat !== $v) {
            $this->unite_delai_contrat = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::UNITE_DELAI_CONTRAT;
        }


        return $this;
    } // setUniteDelaiContrat()

    /**
     * Sets the value of [date_approbation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDateApprobation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_approbation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_approbation !== null && $tmpDt = new DateTime($this->date_approbation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_approbation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecContratPeer::DATE_APPROBATION;
            }
        } // if either are not null


        return $this;
    } // setDateApprobation()

    /**
     * Sets the value of [date_notification_approbation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDateNotificationApprobation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_notification_approbation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_notification_approbation !== null && $tmpDt = new DateTime($this->date_notification_approbation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_notification_approbation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecContratPeer::DATE_NOTIFICATION_APPROBATION;
            }
        } // if either are not null


        return $this;
    } // setDateNotificationApprobation()

    /**
     * Sets the value of [date_fin] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDateFin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_fin !== null || $dt !== null) {
            $currentDateAsString = ($this->date_fin !== null && $tmpDt = new DateTime($this->date_fin)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_fin = $newDateAsString;
                $this->modifiedColumns[] = CommonExecContratPeer::DATE_FIN;
            }
        } // if either are not null


        return $this;
    } // setDateFin()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecContratPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_AGENT_CREA;
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = CommonExecContratPeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

    /**
     * Set the value of [id_agent_modif] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdAgentModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_modif !== $v) {
            $this->id_agent_modif = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_AGENT_MODIF;
        }

        if ($this->aCommonAgentRelatedByIdAgentModif !== null && $this->aCommonAgentRelatedByIdAgentModif->getId() !== $v) {
            $this->aCommonAgentRelatedByIdAgentModif = null;
        }


        return $this;
    } // setIdAgentModif()

    /**
     * Set the value of [delai_reel] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDelaiReel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->delai_reel !== $v) {
            $this->delai_reel = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::DELAI_REEL;
        }


        return $this;
    } // setDelaiReel()

    /**
     * Set the value of [depassement] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDepassement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depassement !== $v) {
            $this->depassement = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::DEPASSEMENT;
        }


        return $this;
    } // setDepassement()

    /**
     * Sets the value of [date_maj_delai_reel] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDateMajDelaiReel($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_maj_delai_reel !== null || $dt !== null) {
            $currentDateAsString = ($this->date_maj_delai_reel !== null && $tmpDt = new DateTime($this->date_maj_delai_reel)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_maj_delai_reel = $newDateAsString;
                $this->modifiedColumns[] = CommonExecContratPeer::DATE_MAJ_DELAI_REEL;
            }
        } // if either are not null


        return $this;
    } // setDateMajDelaiReel()

    /**
     * Set the value of [id_parapheur] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_parapheur !== $v) {
            $this->id_parapheur = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_PARAPHEUR;
        }


        return $this;
    } // setIdParapheur()

    /**
     * Set the value of [statut_parapheur] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setStatutParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_parapheur !== $v) {
            $this->statut_parapheur = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::STATUT_PARAPHEUR;
        }


        return $this;
    } // setStatutParapheur()

    /**
     * Sets the value of [date_cloture_parapheur] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDateClotureParapheur($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_cloture_parapheur !== null || $dt !== null) {
            $currentDateAsString = ($this->date_cloture_parapheur !== null && $tmpDt = new DateTime($this->date_cloture_parapheur)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_cloture_parapheur = $newDateAsString;
                $this->modifiedColumns[] = CommonExecContratPeer::DATE_CLOTURE_PARAPHEUR;
            }
        } // if either are not null


        return $this;
    } // setDateClotureParapheur()

    /**
     * Set the value of [garantie] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->garantie !== $v) {
            $this->garantie = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::GARANTIE;
        }


        return $this;
    } // setGarantie()

    /**
     * Set the value of [duree_garantie] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDureeGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->duree_garantie !== $v) {
            $this->duree_garantie = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::DUREE_GARANTIE;
        }


        return $this;
    } // setDureeGarantie()

    /**
     * Set the value of [unite_garantie] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setUniteGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unite_garantie !== $v) {
            $this->unite_garantie = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::UNITE_GARANTIE;
        }


        return $this;
    } // setUniteGarantie()

    /**
     * Set the value of [type_penalite] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setTypePenalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_penalite !== $v) {
            $this->type_penalite = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::TYPE_PENALITE;
        }


        return $this;
    } // setTypePenalite()

    /**
     * Set the value of [pourcentage_penalite] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setPourcentagePenalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pourcentage_penalite !== $v) {
            $this->pourcentage_penalite = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::POURCENTAGE_PENALITE;
        }


        return $this;
    } // setPourcentagePenalite()

    /**
     * Set the value of [montant_penalite] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setMontantPenalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_penalite !== $v) {
            $this->montant_penalite = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MONTANT_PENALITE;
        }


        return $this;
    } // setMontantPenalite()

    /**
     * Set the value of [plafond_penalite] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setPlafondPenalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->plafond_penalite !== $v) {
            $this->plafond_penalite = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::PLAFOND_PENALITE;
        }


        return $this;
    } // setPlafondPenalite()

    /**
     * Set the value of [mode_passation] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setModePassation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mode_passation !== $v) {
            $this->mode_passation = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::MODE_PASSATION;
        }


        return $this;
    } // setModePassation()

    /**
     * Set the value of [lie_marche] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setLieMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lie_marche !== $v) {
            $this->lie_marche = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::LIE_MARCHE;
        }


        return $this;
    } // setLieMarche()

    /**
     * Set the value of [num_chapeau] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setNumChapeau($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->num_chapeau !== $v) {
            $this->num_chapeau = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::NUM_CHAPEAU;
        }


        return $this;
    } // setNumChapeau()

    /**
     * Set the value of [os_phase] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setOsPhase($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->os_phase !== $v) {
            $this->os_phase = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::OS_PHASE;
        }


        return $this;
    } // setOsPhase()

    /**
     * Set the value of [prestation_demande] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setPrestationDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prestation_demande !== $v) {
            $this->prestation_demande = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::PRESTATION_DEMANDE;
        }


        return $this;
    } // setPrestationDemande()

    /**
     * Set the value of [forfait_jh] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setForfaitJh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->forfait_jh !== $v) {
            $this->forfait_jh = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::FORFAIT_JH;
        }


        return $this;
    } // setForfaitJh()

    /**
     * Set the value of [quantite_jh] column.
     * 
     * @param double $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setQuantiteJh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->quantite_jh !== $v) {
            $this->quantite_jh = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::QUANTITE_JH;
        }


        return $this;
    } // setQuantiteJh()

    /**
     * Set the value of [nature_marche] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setNatureMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nature_marche !== $v) {
            $this->nature_marche = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::NATURE_MARCHE;
        }


        return $this;
    } // setNatureMarche()

    /**
     * Sets the value of [date_debut] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setDateDebut($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_debut !== null || $dt !== null) {
            $currentDateAsString = ($this->date_debut !== null && $tmpDt = new DateTime($this->date_debut)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_debut = $newDateAsString;
                $this->modifiedColumns[] = CommonExecContratPeer::DATE_DEBUT;
            }
        } // if either are not null


        return $this;
    } // setDateDebut()

    /**
     * Set the value of [plurianuelle] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setPlurianuelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->plurianuelle !== $v) {
            $this->plurianuelle = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::PLURIANUELLE;
        }


        return $this;
    } // setPlurianuelle()

    /**
     * Set the value of [trancheconditionnelle] column.
     * 
     * @param string $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setTrancheconditionnelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trancheconditionnelle !== $v) {
            $this->trancheconditionnelle = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::TRANCHECONDITIONNELLE;
        }


        return $this;
    } // setTrancheconditionnelle()

    /**
     * Set the value of [id_agent_cr] column.
     * 
     * @param int $v new value
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setIdAgentCr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_cr !== $v) {
            $this->id_agent_cr = $v;
            $this->modifiedColumns[] = CommonExecContratPeer::ID_AGENT_CR;
        }


        return $this;
    } // setIdAgentCr()

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
            if ($this->retenue_garantie !== '0') {
                return false;
            }

            if ($this->garantie !== '0') {
                return false;
            }

            if ($this->type_penalite !== '0') {
                return false;
            }

            if ($this->lie_marche !== '0') {
                return false;
            }

            if ($this->os_phase !== '0') {
                return false;
            }

            if ($this->prestation_demande !== '0') {
                return false;
            }

            if ($this->forfait_jh !== '0') {
                return false;
            }

            if ($this->nature_marche !== 0) {
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

            $this->id_contrat = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->consultation_ref = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->organisme = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_decision_enveloppe = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->numero = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->statut = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_type_contrat = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->id_type_structure = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->objet = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->num_consultation = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->id_nature_prestation = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->id_service = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->id_service_gerant = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->id_agent_gestion = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->reconductible = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->nombre_reconduction = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->montant_ht = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->montant_ttc = ($row[$startcol + 17] !== null) ? (double) $row[$startcol + 17] : null;
            $this->montant_min = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
            $this->montant_max = ($row[$startcol + 19] !== null) ? (double) $row[$startcol + 19] : null;
            $this->montant_min_ttc = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
            $this->montant_max_ttc = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->montant_facture_ht = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->montant_facture_ttc = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->montant_paye_ht = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->montant_paye_ttc = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->montant_caution = ($row[$startcol + 26] !== null) ? (double) $row[$startcol + 26] : null;
            $this->pourcentage_caution = ($row[$startcol + 27] !== null) ? (double) $row[$startcol + 27] : null;
            $this->retenue_garantie = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->pourcentage_retenue_garantie = ($row[$startcol + 29] !== null) ? (double) $row[$startcol + 29] : null;
            $this->montant_retenu_garantie = ($row[$startcol + 30] !== null) ? (double) $row[$startcol + 30] : null;
            $this->pourcentage_prelevement_garantie = ($row[$startcol + 31] !== null) ? (double) $row[$startcol + 31] : null;
            $this->montant_avance = ($row[$startcol + 32] !== null) ? (double) $row[$startcol + 32] : null;
            $this->delai_partiel = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->delai_contrat = ($row[$startcol + 34] !== null) ? (double) $row[$startcol + 34] : null;
            $this->unite_delai_contrat = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->date_approbation = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->date_notification_approbation = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->date_fin = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->date_crea = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->id_agent_crea = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->date_modif = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->id_agent_modif = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->delai_reel = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
            $this->depassement = ($row[$startcol + 44] !== null) ? (double) $row[$startcol + 44] : null;
            $this->date_maj_delai_reel = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->id_parapheur = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->statut_parapheur = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->date_cloture_parapheur = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->garantie = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->duree_garantie = ($row[$startcol + 50] !== null) ? (double) $row[$startcol + 50] : null;
            $this->unite_garantie = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->type_penalite = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->pourcentage_penalite = ($row[$startcol + 53] !== null) ? (double) $row[$startcol + 53] : null;
            $this->montant_penalite = ($row[$startcol + 54] !== null) ? (double) $row[$startcol + 54] : null;
            $this->plafond_penalite = ($row[$startcol + 55] !== null) ? (double) $row[$startcol + 55] : null;
            $this->mode_passation = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->lie_marche = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->num_chapeau = ($row[$startcol + 58] !== null) ? (int) $row[$startcol + 58] : null;
            $this->os_phase = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->prestation_demande = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->forfait_jh = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->quantite_jh = ($row[$startcol + 62] !== null) ? (double) $row[$startcol + 62] : null;
            $this->nature_marche = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->date_debut = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->plurianuelle = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->trancheconditionnelle = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->id_agent_cr = ($row[$startcol + 67] !== null) ? (int) $row[$startcol + 67] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 68; // 68 = CommonExecContratPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecContrat object", $e);
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

        if ($this->aCommonExecTypeContrat !== null && $this->id_type_contrat !== $this->aCommonExecTypeContrat->getId()) {
            $this->aCommonExecTypeContrat = null;
        }
        if ($this->aCommonExecTypeStructure !== null && $this->id_type_structure !== $this->aCommonExecTypeStructure->getId()) {
            $this->aCommonExecTypeStructure = null;
        }
        if ($this->aCommonCategorieConsultation !== null && $this->id_nature_prestation !== $this->aCommonCategorieConsultation->getId()) {
            $this->aCommonCategorieConsultation = null;
        }
        if ($this->aCommonAgentRelatedByIdAgentGestion !== null && $this->id_agent_gestion !== $this->aCommonAgentRelatedByIdAgentGestion->getId()) {
            $this->aCommonAgentRelatedByIdAgentGestion = null;
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
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecContratPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonAgentRelatedByIdAgentCrea = null;
            $this->aCommonAgentRelatedByIdAgentGestion = null;
            $this->aCommonAgentRelatedByIdAgentModif = null;
            $this->aCommonCategorieConsultation = null;
            $this->aCommonExecTypeContrat = null;
            $this->aCommonExecTypeStructure = null;
            $this->collCommonExecAgentContrats = null;

            $this->collCommonExecAvenants = null;

            $this->collCommonExecContacts = null;

            $this->collCommonExecContractants = null;

            $this->collCommonExecDossierPaiements = null;

            $this->collCommonExecEvenements = null;

            $this->collCommonExecFactures = null;

            $this->collCommonExecHistoriquePrixs = null;

            $this->collCommonExecInscritContrats = null;

            $this->collCommonExecLivrableContrats = null;

            $this->collCommonExecPhases = null;

            $this->collCommonExecPieces = null;

            $this->collCommonExecPieceAvenants = null;

            $this->collCommonExecPieceContrats = null;

            $this->collCommonExecPieceDossierpaiements = null;

            $this->collCommonExecPieceEvenements = null;

            $this->collCommonExecPieceFactures = null;

            $this->collCommonExecPrixs = null;

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
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecContratQuery::create()
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
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecContratPeer::addInstanceToPool($this);
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

            if ($this->aCommonAgentRelatedByIdAgentGestion !== null) {
                if ($this->aCommonAgentRelatedByIdAgentGestion->isModified() || $this->aCommonAgentRelatedByIdAgentGestion->isNew()) {
                    $affectedRows += $this->aCommonAgentRelatedByIdAgentGestion->save($con);
                }
                $this->setCommonAgentRelatedByIdAgentGestion($this->aCommonAgentRelatedByIdAgentGestion);
            }

            if ($this->aCommonAgentRelatedByIdAgentModif !== null) {
                if ($this->aCommonAgentRelatedByIdAgentModif->isModified() || $this->aCommonAgentRelatedByIdAgentModif->isNew()) {
                    $affectedRows += $this->aCommonAgentRelatedByIdAgentModif->save($con);
                }
                $this->setCommonAgentRelatedByIdAgentModif($this->aCommonAgentRelatedByIdAgentModif);
            }

            if ($this->aCommonCategorieConsultation !== null) {
                if ($this->aCommonCategorieConsultation->isModified() || $this->aCommonCategorieConsultation->isNew()) {
                    $affectedRows += $this->aCommonCategorieConsultation->save($con);
                }
                $this->setCommonCategorieConsultation($this->aCommonCategorieConsultation);
            }

            if ($this->aCommonExecTypeContrat !== null) {
                if ($this->aCommonExecTypeContrat->isModified() || $this->aCommonExecTypeContrat->isNew()) {
                    $affectedRows += $this->aCommonExecTypeContrat->save($con);
                }
                $this->setCommonExecTypeContrat($this->aCommonExecTypeContrat);
            }

            if ($this->aCommonExecTypeStructure !== null) {
                if ($this->aCommonExecTypeStructure->isModified() || $this->aCommonExecTypeStructure->isNew()) {
                    $affectedRows += $this->aCommonExecTypeStructure->save($con);
                }
                $this->setCommonExecTypeStructure($this->aCommonExecTypeStructure);
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

            if ($this->commonExecAvenantsScheduledForDeletion !== null) {
                if (!$this->commonExecAvenantsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecAvenantsScheduledForDeletion as $commonExecAvenant) {
                        // need to save related object because we set the relation to null
                        $commonExecAvenant->save($con);
                    }
                    $this->commonExecAvenantsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecAvenants !== null) {
                foreach ($this->collCommonExecAvenants as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecContactsScheduledForDeletion !== null) {
                if (!$this->commonExecContactsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContactsScheduledForDeletion as $commonExecContact) {
                        // need to save related object because we set the relation to null
                        $commonExecContact->save($con);
                    }
                    $this->commonExecContactsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContacts !== null) {
                foreach ($this->collCommonExecContacts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecContractantsScheduledForDeletion !== null) {
                if (!$this->commonExecContractantsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecContractantsScheduledForDeletion as $commonExecContractant) {
                        // need to save related object because we set the relation to null
                        $commonExecContractant->save($con);
                    }
                    $this->commonExecContractantsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecContractants !== null) {
                foreach ($this->collCommonExecContractants as $referrerFK) {
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

            if ($this->commonExecEvenementsScheduledForDeletion !== null) {
                if (!$this->commonExecEvenementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecEvenementsScheduledForDeletion as $commonExecEvenement) {
                        // need to save related object because we set the relation to null
                        $commonExecEvenement->save($con);
                    }
                    $this->commonExecEvenementsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecEvenements !== null) {
                foreach ($this->collCommonExecEvenements as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecFacturesScheduledForDeletion !== null) {
                if (!$this->commonExecFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecFacturesScheduledForDeletion as $commonExecFacture) {
                        // need to save related object because we set the relation to null
                        $commonExecFacture->save($con);
                    }
                    $this->commonExecFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecFactures !== null) {
                foreach ($this->collCommonExecFactures as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->commonExecInscritContratsScheduledForDeletion !== null) {
                if (!$this->commonExecInscritContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecInscritContratsScheduledForDeletion as $commonExecInscritContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecInscritContrat->save($con);
                    }
                    $this->commonExecInscritContratsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecInscritContrats !== null) {
                foreach ($this->collCommonExecInscritContrats as $referrerFK) {
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

            if ($this->commonExecPhasesScheduledForDeletion !== null) {
                if (!$this->commonExecPhasesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPhasesScheduledForDeletion as $commonExecPhase) {
                        // need to save related object because we set the relation to null
                        $commonExecPhase->save($con);
                    }
                    $this->commonExecPhasesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPhases !== null) {
                foreach ($this->collCommonExecPhases as $referrerFK) {
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

            if ($this->commonExecPrixsScheduledForDeletion !== null) {
                if (!$this->commonExecPrixsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPrixsScheduledForDeletion as $commonExecPrix) {
                        // need to save related object because we set the relation to null
                        $commonExecPrix->save($con);
                    }
                    $this->commonExecPrixsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPrixs !== null) {
                foreach ($this->collCommonExecPrixs as $referrerFK) {
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

        $this->modifiedColumns[] = CommonExecContratPeer::ID_CONTRAT;
        if (null !== $this->id_contrat) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecContratPeer::ID_CONTRAT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecContratPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_DECISION_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_decision_enveloppe`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_TYPE_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_contrat`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_TYPE_STRUCTURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_structure`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`objet`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::NUM_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`num_consultation`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_NATURE_PRESTATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_nature_prestation`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_SERVICE_GERANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_service_gerant`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_AGENT_GESTION)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_gestion`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::RECONDUCTIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`reconductible`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::NOMBRE_RECONDUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`nombre_reconduction`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_ht`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_ttc`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`montant_min`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`montant_max`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_MIN_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_min_ttc`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_MAX_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_max_ttc`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_FACTURE_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_facture_ht`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_FACTURE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_facture_ttc`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_PAYE_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_paye_ht`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_PAYE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_paye_ttc`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`montant_caution`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::POURCENTAGE_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_caution`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::RETENUE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`retenue_garantie`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::POURCENTAGE_RETENUE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_retenue_garantie`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_RETENU_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_retenu_garantie`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_prelevement_garantie`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_AVANCE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_avance`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DELAI_PARTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`delai_partiel`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DELAI_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`delai_contrat`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::UNITE_DELAI_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`unite_delai_contrat`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DATE_APPROBATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_approbation`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DATE_NOTIFICATION_APPROBATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_notification_approbation`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DATE_FIN)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`date_modif`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_AGENT_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_modif`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DELAI_REEL)) {
            $modifiedColumns[':p' . $index++]  = '`delai_reel`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DEPASSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`depassement`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DATE_MAJ_DELAI_REEL)) {
            $modifiedColumns[':p' . $index++]  = '`date_maj_delai_reel`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_parapheur`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::STATUT_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`statut_parapheur`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DATE_CLOTURE_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`date_cloture_parapheur`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`garantie`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DUREE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`duree_garantie`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::UNITE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`unite_garantie`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::TYPE_PENALITE)) {
            $modifiedColumns[':p' . $index++]  = '`type_penalite`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::POURCENTAGE_PENALITE)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_penalite`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_PENALITE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_penalite`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::PLAFOND_PENALITE)) {
            $modifiedColumns[':p' . $index++]  = '`plafond_penalite`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::MODE_PASSATION)) {
            $modifiedColumns[':p' . $index++]  = '`mode_passation`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::LIE_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`lie_marche`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::NUM_CHAPEAU)) {
            $modifiedColumns[':p' . $index++]  = '`num_chapeau`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::OS_PHASE)) {
            $modifiedColumns[':p' . $index++]  = '`os_phase`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::PRESTATION_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`prestation_demande`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::FORFAIT_JH)) {
            $modifiedColumns[':p' . $index++]  = '`forfait_jh`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::QUANTITE_JH)) {
            $modifiedColumns[':p' . $index++]  = '`quantite_jh`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::NATURE_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`nature_marche`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::DATE_DEBUT)) {
            $modifiedColumns[':p' . $index++]  = '`date_debut`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::PLURIANUELLE)) {
            $modifiedColumns[':p' . $index++]  = '`plurianuelle`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::TRANCHECONDITIONNELLE)) {
            $modifiedColumns[':p' . $index++]  = '`trancheconditionnelle`';
        }
        if ($this->isColumnModified(CommonExecContratPeer::ID_AGENT_CR)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_cr`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_contrat` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_decision_enveloppe`':						
                        $stmt->bindValue($identifier, $this->id_decision_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`numero`':						
                        $stmt->bindValue($identifier, $this->numero, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`id_type_contrat`':						
                        $stmt->bindValue($identifier, $this->id_type_contrat, PDO::PARAM_INT);
                        break;
                    case '`id_type_structure`':						
                        $stmt->bindValue($identifier, $this->id_type_structure, PDO::PARAM_INT);
                        break;
                    case '`objet`':						
                        $stmt->bindValue($identifier, $this->objet, PDO::PARAM_STR);
                        break;
                    case '`num_consultation`':						
                        $stmt->bindValue($identifier, $this->num_consultation, PDO::PARAM_STR);
                        break;
                    case '`id_nature_prestation`':						
                        $stmt->bindValue($identifier, $this->id_nature_prestation, PDO::PARAM_STR);
                        break;
                    case '`id_service`':						
                        $stmt->bindValue($identifier, $this->id_service, PDO::PARAM_INT);
                        break;
                    case '`id_service_gerant`':						
                        $stmt->bindValue($identifier, $this->id_service_gerant, PDO::PARAM_INT);
                        break;
                    case '`id_agent_gestion`':						
                        $stmt->bindValue($identifier, $this->id_agent_gestion, PDO::PARAM_INT);
                        break;
                    case '`reconductible`':						
                        $stmt->bindValue($identifier, $this->reconductible, PDO::PARAM_INT);
                        break;
                    case '`nombre_reconduction`':						
                        $stmt->bindValue($identifier, $this->nombre_reconduction, PDO::PARAM_INT);
                        break;
                    case '`montant_ht`':						
                        $stmt->bindValue($identifier, $this->montant_ht, PDO::PARAM_STR);
                        break;
                    case '`montant_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_ttc, PDO::PARAM_STR);
                        break;
                    case '`montant_min`':						
                        $stmt->bindValue($identifier, $this->montant_min, PDO::PARAM_STR);
                        break;
                    case '`montant_max`':						
                        $stmt->bindValue($identifier, $this->montant_max, PDO::PARAM_STR);
                        break;
                    case '`montant_min_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_min_ttc, PDO::PARAM_STR);
                        break;
                    case '`montant_max_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_max_ttc, PDO::PARAM_STR);
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
                    case '`montant_caution`':						
                        $stmt->bindValue($identifier, $this->montant_caution, PDO::PARAM_STR);
                        break;
                    case '`pourcentage_caution`':						
                        $stmt->bindValue($identifier, $this->pourcentage_caution, PDO::PARAM_STR);
                        break;
                    case '`retenue_garantie`':						
                        $stmt->bindValue($identifier, $this->retenue_garantie, PDO::PARAM_STR);
                        break;
                    case '`pourcentage_retenue_garantie`':						
                        $stmt->bindValue($identifier, $this->pourcentage_retenue_garantie, PDO::PARAM_STR);
                        break;
                    case '`montant_retenu_garantie`':						
                        $stmt->bindValue($identifier, $this->montant_retenu_garantie, PDO::PARAM_STR);
                        break;
                    case '`pourcentage_prelevement_garantie`':						
                        $stmt->bindValue($identifier, $this->pourcentage_prelevement_garantie, PDO::PARAM_STR);
                        break;
                    case '`montant_avance`':						
                        $stmt->bindValue($identifier, $this->montant_avance, PDO::PARAM_STR);
                        break;
                    case '`delai_partiel`':						
                        $stmt->bindValue($identifier, $this->delai_partiel, PDO::PARAM_INT);
                        break;
                    case '`delai_contrat`':						
                        $stmt->bindValue($identifier, $this->delai_contrat, PDO::PARAM_STR);
                        break;
                    case '`unite_delai_contrat`':						
                        $stmt->bindValue($identifier, $this->unite_delai_contrat, PDO::PARAM_INT);
                        break;
                    case '`date_approbation`':						
                        $stmt->bindValue($identifier, $this->date_approbation, PDO::PARAM_STR);
                        break;
                    case '`date_notification_approbation`':						
                        $stmt->bindValue($identifier, $this->date_notification_approbation, PDO::PARAM_STR);
                        break;
                    case '`date_fin`':						
                        $stmt->bindValue($identifier, $this->date_fin, PDO::PARAM_STR);
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
                    case '`delai_reel`':						
                        $stmt->bindValue($identifier, $this->delai_reel, PDO::PARAM_STR);
                        break;
                    case '`depassement`':						
                        $stmt->bindValue($identifier, $this->depassement, PDO::PARAM_STR);
                        break;
                    case '`date_maj_delai_reel`':						
                        $stmt->bindValue($identifier, $this->date_maj_delai_reel, PDO::PARAM_STR);
                        break;
                    case '`id_parapheur`':						
                        $stmt->bindValue($identifier, $this->id_parapheur, PDO::PARAM_INT);
                        break;
                    case '`statut_parapheur`':						
                        $stmt->bindValue($identifier, $this->statut_parapheur, PDO::PARAM_INT);
                        break;
                    case '`date_cloture_parapheur`':						
                        $stmt->bindValue($identifier, $this->date_cloture_parapheur, PDO::PARAM_STR);
                        break;
                    case '`garantie`':						
                        $stmt->bindValue($identifier, $this->garantie, PDO::PARAM_STR);
                        break;
                    case '`duree_garantie`':						
                        $stmt->bindValue($identifier, $this->duree_garantie, PDO::PARAM_STR);
                        break;
                    case '`unite_garantie`':						
                        $stmt->bindValue($identifier, $this->unite_garantie, PDO::PARAM_INT);
                        break;
                    case '`type_penalite`':						
                        $stmt->bindValue($identifier, $this->type_penalite, PDO::PARAM_STR);
                        break;
                    case '`pourcentage_penalite`':						
                        $stmt->bindValue($identifier, $this->pourcentage_penalite, PDO::PARAM_STR);
                        break;
                    case '`montant_penalite`':						
                        $stmt->bindValue($identifier, $this->montant_penalite, PDO::PARAM_STR);
                        break;
                    case '`plafond_penalite`':						
                        $stmt->bindValue($identifier, $this->plafond_penalite, PDO::PARAM_STR);
                        break;
                    case '`mode_passation`':						
                        $stmt->bindValue($identifier, $this->mode_passation, PDO::PARAM_INT);
                        break;
                    case '`lie_marche`':						
                        $stmt->bindValue($identifier, $this->lie_marche, PDO::PARAM_STR);
                        break;
                    case '`num_chapeau`':						
                        $stmt->bindValue($identifier, $this->num_chapeau, PDO::PARAM_INT);
                        break;
                    case '`os_phase`':						
                        $stmt->bindValue($identifier, $this->os_phase, PDO::PARAM_STR);
                        break;
                    case '`prestation_demande`':						
                        $stmt->bindValue($identifier, $this->prestation_demande, PDO::PARAM_STR);
                        break;
                    case '`forfait_jh`':						
                        $stmt->bindValue($identifier, $this->forfait_jh, PDO::PARAM_STR);
                        break;
                    case '`quantite_jh`':						
                        $stmt->bindValue($identifier, $this->quantite_jh, PDO::PARAM_STR);
                        break;
                    case '`nature_marche`':						
                        $stmt->bindValue($identifier, $this->nature_marche, PDO::PARAM_INT);
                        break;
                    case '`date_debut`':						
                        $stmt->bindValue($identifier, $this->date_debut, PDO::PARAM_STR);
                        break;
                    case '`plurianuelle`':						
                        $stmt->bindValue($identifier, $this->plurianuelle, PDO::PARAM_STR);
                        break;
                    case '`trancheconditionnelle`':						
                        $stmt->bindValue($identifier, $this->trancheconditionnelle, PDO::PARAM_STR);
                        break;
                    case '`id_agent_cr`':						
                        $stmt->bindValue($identifier, $this->id_agent_cr, PDO::PARAM_INT);
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
        $this->setIdContrat($pk);

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

            if ($this->aCommonAgentRelatedByIdAgentGestion !== null) {
                if (!$this->aCommonAgentRelatedByIdAgentGestion->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentRelatedByIdAgentGestion->getValidationFailures());
                }
            }

            if ($this->aCommonAgentRelatedByIdAgentModif !== null) {
                if (!$this->aCommonAgentRelatedByIdAgentModif->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonAgentRelatedByIdAgentModif->getValidationFailures());
                }
            }

            if ($this->aCommonCategorieConsultation !== null) {
                if (!$this->aCommonCategorieConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonCategorieConsultation->getValidationFailures());
                }
            }

            if ($this->aCommonExecTypeContrat !== null) {
                if (!$this->aCommonExecTypeContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecTypeContrat->getValidationFailures());
                }
            }

            if ($this->aCommonExecTypeStructure !== null) {
                if (!$this->aCommonExecTypeStructure->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecTypeStructure->getValidationFailures());
                }
            }


            if (($retval = CommonExecContratPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecAgentContrats !== null) {
                    foreach ($this->collCommonExecAgentContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecAvenants !== null) {
                    foreach ($this->collCommonExecAvenants as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecContacts !== null) {
                    foreach ($this->collCommonExecContacts as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecContractants !== null) {
                    foreach ($this->collCommonExecContractants as $referrerFK) {
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

                if ($this->collCommonExecEvenements !== null) {
                    foreach ($this->collCommonExecEvenements as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecFactures !== null) {
                    foreach ($this->collCommonExecFactures as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecHistoriquePrixs !== null) {
                    foreach ($this->collCommonExecHistoriquePrixs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecInscritContrats !== null) {
                    foreach ($this->collCommonExecInscritContrats as $referrerFK) {
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

                if ($this->collCommonExecPhases !== null) {
                    foreach ($this->collCommonExecPhases as $referrerFK) {
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

                if ($this->collCommonExecPrixs !== null) {
                    foreach ($this->collCommonExecPrixs as $referrerFK) {
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
        $pos = CommonExecContratPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdContrat();
                break;
            case 1:
                return $this->getConsultationRef();
                break;
            case 2:
                return $this->getOrganisme();
                break;
            case 3:
                return $this->getIdDecisionEnveloppe();
                break;
            case 4:
                return $this->getNumero();
                break;
            case 5:
                return $this->getStatut();
                break;
            case 6:
                return $this->getIdTypeContrat();
                break;
            case 7:
                return $this->getIdTypeStructure();
                break;
            case 8:
                return $this->getObjet();
                break;
            case 9:
                return $this->getNumConsultation();
                break;
            case 10:
                return $this->getIdNaturePrestation();
                break;
            case 11:
                return $this->getIdService();
                break;
            case 12:
                return $this->getIdServiceGerant();
                break;
            case 13:
                return $this->getIdAgentGestion();
                break;
            case 14:
                return $this->getReconductible();
                break;
            case 15:
                return $this->getNombreReconduction();
                break;
            case 16:
                return $this->getMontantHt();
                break;
            case 17:
                return $this->getMontantTtc();
                break;
            case 18:
                return $this->getMontantMin();
                break;
            case 19:
                return $this->getMontantMax();
                break;
            case 20:
                return $this->getMontantMinTtc();
                break;
            case 21:
                return $this->getMontantMaxTtc();
                break;
            case 22:
                return $this->getMontantFactureHt();
                break;
            case 23:
                return $this->getMontantFactureTtc();
                break;
            case 24:
                return $this->getMontantPayeHt();
                break;
            case 25:
                return $this->getMontantPayeTtc();
                break;
            case 26:
                return $this->getMontantCaution();
                break;
            case 27:
                return $this->getPourcentageCaution();
                break;
            case 28:
                return $this->getRetenueGarantie();
                break;
            case 29:
                return $this->getPourcentageRetenueGarantie();
                break;
            case 30:
                return $this->getMontantRetenuGarantie();
                break;
            case 31:
                return $this->getPourcentagePrelevementGarantie();
                break;
            case 32:
                return $this->getMontantAvance();
                break;
            case 33:
                return $this->getDelaiPartiel();
                break;
            case 34:
                return $this->getDelaiContrat();
                break;
            case 35:
                return $this->getUniteDelaiContrat();
                break;
            case 36:
                return $this->getDateApprobation();
                break;
            case 37:
                return $this->getDateNotificationApprobation();
                break;
            case 38:
                return $this->getDateFin();
                break;
            case 39:
                return $this->getDateCrea();
                break;
            case 40:
                return $this->getIdAgentCrea();
                break;
            case 41:
                return $this->getDateModif();
                break;
            case 42:
                return $this->getIdAgentModif();
                break;
            case 43:
                return $this->getDelaiReel();
                break;
            case 44:
                return $this->getDepassement();
                break;
            case 45:
                return $this->getDateMajDelaiReel();
                break;
            case 46:
                return $this->getIdParapheur();
                break;
            case 47:
                return $this->getStatutParapheur();
                break;
            case 48:
                return $this->getDateClotureParapheur();
                break;
            case 49:
                return $this->getGarantie();
                break;
            case 50:
                return $this->getDureeGarantie();
                break;
            case 51:
                return $this->getUniteGarantie();
                break;
            case 52:
                return $this->getTypePenalite();
                break;
            case 53:
                return $this->getPourcentagePenalite();
                break;
            case 54:
                return $this->getMontantPenalite();
                break;
            case 55:
                return $this->getPlafondPenalite();
                break;
            case 56:
                return $this->getModePassation();
                break;
            case 57:
                return $this->getLieMarche();
                break;
            case 58:
                return $this->getNumChapeau();
                break;
            case 59:
                return $this->getOsPhase();
                break;
            case 60:
                return $this->getPrestationDemande();
                break;
            case 61:
                return $this->getForfaitJh();
                break;
            case 62:
                return $this->getQuantiteJh();
                break;
            case 63:
                return $this->getNatureMarche();
                break;
            case 64:
                return $this->getDateDebut();
                break;
            case 65:
                return $this->getPlurianuelle();
                break;
            case 66:
                return $this->getTrancheconditionnelle();
                break;
            case 67:
                return $this->getIdAgentCr();
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
        if (isset($alreadyDumpedObjects['CommonExecContrat'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecContrat'][$this->getPrimaryKey()] = true;
        $keys = CommonExecContratPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdContrat(),
            $keys[1] => $this->getConsultationRef(),
            $keys[2] => $this->getOrganisme(),
            $keys[3] => $this->getIdDecisionEnveloppe(),
            $keys[4] => $this->getNumero(),
            $keys[5] => $this->getStatut(),
            $keys[6] => $this->getIdTypeContrat(),
            $keys[7] => $this->getIdTypeStructure(),
            $keys[8] => $this->getObjet(),
            $keys[9] => $this->getNumConsultation(),
            $keys[10] => $this->getIdNaturePrestation(),
            $keys[11] => $this->getIdService(),
            $keys[12] => $this->getIdServiceGerant(),
            $keys[13] => $this->getIdAgentGestion(),
            $keys[14] => $this->getReconductible(),
            $keys[15] => $this->getNombreReconduction(),
            $keys[16] => $this->getMontantHt(),
            $keys[17] => $this->getMontantTtc(),
            $keys[18] => $this->getMontantMin(),
            $keys[19] => $this->getMontantMax(),
            $keys[20] => $this->getMontantMinTtc(),
            $keys[21] => $this->getMontantMaxTtc(),
            $keys[22] => $this->getMontantFactureHt(),
            $keys[23] => $this->getMontantFactureTtc(),
            $keys[24] => $this->getMontantPayeHt(),
            $keys[25] => $this->getMontantPayeTtc(),
            $keys[26] => $this->getMontantCaution(),
            $keys[27] => $this->getPourcentageCaution(),
            $keys[28] => $this->getRetenueGarantie(),
            $keys[29] => $this->getPourcentageRetenueGarantie(),
            $keys[30] => $this->getMontantRetenuGarantie(),
            $keys[31] => $this->getPourcentagePrelevementGarantie(),
            $keys[32] => $this->getMontantAvance(),
            $keys[33] => $this->getDelaiPartiel(),
            $keys[34] => $this->getDelaiContrat(),
            $keys[35] => $this->getUniteDelaiContrat(),
            $keys[36] => $this->getDateApprobation(),
            $keys[37] => $this->getDateNotificationApprobation(),
            $keys[38] => $this->getDateFin(),
            $keys[39] => $this->getDateCrea(),
            $keys[40] => $this->getIdAgentCrea(),
            $keys[41] => $this->getDateModif(),
            $keys[42] => $this->getIdAgentModif(),
            $keys[43] => $this->getDelaiReel(),
            $keys[44] => $this->getDepassement(),
            $keys[45] => $this->getDateMajDelaiReel(),
            $keys[46] => $this->getIdParapheur(),
            $keys[47] => $this->getStatutParapheur(),
            $keys[48] => $this->getDateClotureParapheur(),
            $keys[49] => $this->getGarantie(),
            $keys[50] => $this->getDureeGarantie(),
            $keys[51] => $this->getUniteGarantie(),
            $keys[52] => $this->getTypePenalite(),
            $keys[53] => $this->getPourcentagePenalite(),
            $keys[54] => $this->getMontantPenalite(),
            $keys[55] => $this->getPlafondPenalite(),
            $keys[56] => $this->getModePassation(),
            $keys[57] => $this->getLieMarche(),
            $keys[58] => $this->getNumChapeau(),
            $keys[59] => $this->getOsPhase(),
            $keys[60] => $this->getPrestationDemande(),
            $keys[61] => $this->getForfaitJh(),
            $keys[62] => $this->getQuantiteJh(),
            $keys[63] => $this->getNatureMarche(),
            $keys[64] => $this->getDateDebut(),
            $keys[65] => $this->getPlurianuelle(),
            $keys[66] => $this->getTrancheconditionnelle(),
            $keys[67] => $this->getIdAgentCr(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonAgentRelatedByIdAgentCrea) {
                $result['CommonAgentRelatedByIdAgentCrea'] = $this->aCommonAgentRelatedByIdAgentCrea->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonAgentRelatedByIdAgentGestion) {
                $result['CommonAgentRelatedByIdAgentGestion'] = $this->aCommonAgentRelatedByIdAgentGestion->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonAgentRelatedByIdAgentModif) {
                $result['CommonAgentRelatedByIdAgentModif'] = $this->aCommonAgentRelatedByIdAgentModif->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonCategorieConsultation) {
                $result['CommonCategorieConsultation'] = $this->aCommonCategorieConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecTypeContrat) {
                $result['CommonExecTypeContrat'] = $this->aCommonExecTypeContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecTypeStructure) {
                $result['CommonExecTypeStructure'] = $this->aCommonExecTypeStructure->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonExecAgentContrats) {
                $result['CommonExecAgentContrats'] = $this->collCommonExecAgentContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecAvenants) {
                $result['CommonExecAvenants'] = $this->collCommonExecAvenants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecContacts) {
                $result['CommonExecContacts'] = $this->collCommonExecContacts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecContractants) {
                $result['CommonExecContractants'] = $this->collCommonExecContractants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecDossierPaiements) {
                $result['CommonExecDossierPaiements'] = $this->collCommonExecDossierPaiements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecEvenements) {
                $result['CommonExecEvenements'] = $this->collCommonExecEvenements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecFactures) {
                $result['CommonExecFactures'] = $this->collCommonExecFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecHistoriquePrixs) {
                $result['CommonExecHistoriquePrixs'] = $this->collCommonExecHistoriquePrixs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecInscritContrats) {
                $result['CommonExecInscritContrats'] = $this->collCommonExecInscritContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecLivrableContrats) {
                $result['CommonExecLivrableContrats'] = $this->collCommonExecLivrableContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPhases) {
                $result['CommonExecPhases'] = $this->collCommonExecPhases->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
            if (null !== $this->collCommonExecPrixs) {
                $result['CommonExecPrixs'] = $this->collCommonExecPrixs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecContratPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdContrat($value);
                break;
            case 1:
                $this->setConsultationRef($value);
                break;
            case 2:
                $this->setOrganisme($value);
                break;
            case 3:
                $this->setIdDecisionEnveloppe($value);
                break;
            case 4:
                $this->setNumero($value);
                break;
            case 5:
                $this->setStatut($value);
                break;
            case 6:
                $this->setIdTypeContrat($value);
                break;
            case 7:
                $this->setIdTypeStructure($value);
                break;
            case 8:
                $this->setObjet($value);
                break;
            case 9:
                $this->setNumConsultation($value);
                break;
            case 10:
                $this->setIdNaturePrestation($value);
                break;
            case 11:
                $this->setIdService($value);
                break;
            case 12:
                $this->setIdServiceGerant($value);
                break;
            case 13:
                $this->setIdAgentGestion($value);
                break;
            case 14:
                $this->setReconductible($value);
                break;
            case 15:
                $this->setNombreReconduction($value);
                break;
            case 16:
                $this->setMontantHt($value);
                break;
            case 17:
                $this->setMontantTtc($value);
                break;
            case 18:
                $this->setMontantMin($value);
                break;
            case 19:
                $this->setMontantMax($value);
                break;
            case 20:
                $this->setMontantMinTtc($value);
                break;
            case 21:
                $this->setMontantMaxTtc($value);
                break;
            case 22:
                $this->setMontantFactureHt($value);
                break;
            case 23:
                $this->setMontantFactureTtc($value);
                break;
            case 24:
                $this->setMontantPayeHt($value);
                break;
            case 25:
                $this->setMontantPayeTtc($value);
                break;
            case 26:
                $this->setMontantCaution($value);
                break;
            case 27:
                $this->setPourcentageCaution($value);
                break;
            case 28:
                $this->setRetenueGarantie($value);
                break;
            case 29:
                $this->setPourcentageRetenueGarantie($value);
                break;
            case 30:
                $this->setMontantRetenuGarantie($value);
                break;
            case 31:
                $this->setPourcentagePrelevementGarantie($value);
                break;
            case 32:
                $this->setMontantAvance($value);
                break;
            case 33:
                $this->setDelaiPartiel($value);
                break;
            case 34:
                $this->setDelaiContrat($value);
                break;
            case 35:
                $this->setUniteDelaiContrat($value);
                break;
            case 36:
                $this->setDateApprobation($value);
                break;
            case 37:
                $this->setDateNotificationApprobation($value);
                break;
            case 38:
                $this->setDateFin($value);
                break;
            case 39:
                $this->setDateCrea($value);
                break;
            case 40:
                $this->setIdAgentCrea($value);
                break;
            case 41:
                $this->setDateModif($value);
                break;
            case 42:
                $this->setIdAgentModif($value);
                break;
            case 43:
                $this->setDelaiReel($value);
                break;
            case 44:
                $this->setDepassement($value);
                break;
            case 45:
                $this->setDateMajDelaiReel($value);
                break;
            case 46:
                $this->setIdParapheur($value);
                break;
            case 47:
                $this->setStatutParapheur($value);
                break;
            case 48:
                $this->setDateClotureParapheur($value);
                break;
            case 49:
                $this->setGarantie($value);
                break;
            case 50:
                $this->setDureeGarantie($value);
                break;
            case 51:
                $this->setUniteGarantie($value);
                break;
            case 52:
                $this->setTypePenalite($value);
                break;
            case 53:
                $this->setPourcentagePenalite($value);
                break;
            case 54:
                $this->setMontantPenalite($value);
                break;
            case 55:
                $this->setPlafondPenalite($value);
                break;
            case 56:
                $this->setModePassation($value);
                break;
            case 57:
                $this->setLieMarche($value);
                break;
            case 58:
                $this->setNumChapeau($value);
                break;
            case 59:
                $this->setOsPhase($value);
                break;
            case 60:
                $this->setPrestationDemande($value);
                break;
            case 61:
                $this->setForfaitJh($value);
                break;
            case 62:
                $this->setQuantiteJh($value);
                break;
            case 63:
                $this->setNatureMarche($value);
                break;
            case 64:
                $this->setDateDebut($value);
                break;
            case 65:
                $this->setPlurianuelle($value);
                break;
            case 66:
                $this->setTrancheconditionnelle($value);
                break;
            case 67:
                $this->setIdAgentCr($value);
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
        $keys = CommonExecContratPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdContrat($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setConsultationRef($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrganisme($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdDecisionEnveloppe($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNumero($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStatut($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdTypeContrat($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdTypeStructure($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setObjet($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNumConsultation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIdNaturePrestation($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdService($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdServiceGerant($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdAgentGestion($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setReconductible($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNombreReconduction($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMontantHt($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMontantTtc($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMontantMin($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMontantMax($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMontantMinTtc($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMontantMaxTtc($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setMontantFactureHt($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setMontantFactureTtc($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setMontantPayeHt($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setMontantPayeTtc($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setMontantCaution($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setPourcentageCaution($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setRetenueGarantie($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setPourcentageRetenueGarantie($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setMontantRetenuGarantie($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setPourcentagePrelevementGarantie($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setMontantAvance($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDelaiPartiel($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDelaiContrat($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setUniteDelaiContrat($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setDateApprobation($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDateNotificationApprobation($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDateFin($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDateCrea($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setIdAgentCrea($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDateModif($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setIdAgentModif($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setDelaiReel($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setDepassement($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setDateMajDelaiReel($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setIdParapheur($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setStatutParapheur($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setDateClotureParapheur($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setGarantie($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setDureeGarantie($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setUniteGarantie($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setTypePenalite($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setPourcentagePenalite($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setMontantPenalite($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setPlafondPenalite($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setModePassation($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setLieMarche($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setNumChapeau($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setOsPhase($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setPrestationDemande($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setForfaitJh($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setQuantiteJh($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setNatureMarche($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setDateDebut($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setPlurianuelle($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setTrancheconditionnelle($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setIdAgentCr($arr[$keys[67]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecContratPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecContratPeer::ID_CONTRAT)) $criteria->add(CommonExecContratPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecContratPeer::CONSULTATION_REF)) $criteria->add(CommonExecContratPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonExecContratPeer::ORGANISME)) $criteria->add(CommonExecContratPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonExecContratPeer::ID_DECISION_ENVELOPPE)) $criteria->add(CommonExecContratPeer::ID_DECISION_ENVELOPPE, $this->id_decision_enveloppe);
        if ($this->isColumnModified(CommonExecContratPeer::NUMERO)) $criteria->add(CommonExecContratPeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CommonExecContratPeer::STATUT)) $criteria->add(CommonExecContratPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonExecContratPeer::ID_TYPE_CONTRAT)) $criteria->add(CommonExecContratPeer::ID_TYPE_CONTRAT, $this->id_type_contrat);
        if ($this->isColumnModified(CommonExecContratPeer::ID_TYPE_STRUCTURE)) $criteria->add(CommonExecContratPeer::ID_TYPE_STRUCTURE, $this->id_type_structure);
        if ($this->isColumnModified(CommonExecContratPeer::OBJET)) $criteria->add(CommonExecContratPeer::OBJET, $this->objet);
        if ($this->isColumnModified(CommonExecContratPeer::NUM_CONSULTATION)) $criteria->add(CommonExecContratPeer::NUM_CONSULTATION, $this->num_consultation);
        if ($this->isColumnModified(CommonExecContratPeer::ID_NATURE_PRESTATION)) $criteria->add(CommonExecContratPeer::ID_NATURE_PRESTATION, $this->id_nature_prestation);
        if ($this->isColumnModified(CommonExecContratPeer::ID_SERVICE)) $criteria->add(CommonExecContratPeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(CommonExecContratPeer::ID_SERVICE_GERANT)) $criteria->add(CommonExecContratPeer::ID_SERVICE_GERANT, $this->id_service_gerant);
        if ($this->isColumnModified(CommonExecContratPeer::ID_AGENT_GESTION)) $criteria->add(CommonExecContratPeer::ID_AGENT_GESTION, $this->id_agent_gestion);
        if ($this->isColumnModified(CommonExecContratPeer::RECONDUCTIBLE)) $criteria->add(CommonExecContratPeer::RECONDUCTIBLE, $this->reconductible);
        if ($this->isColumnModified(CommonExecContratPeer::NOMBRE_RECONDUCTION)) $criteria->add(CommonExecContratPeer::NOMBRE_RECONDUCTION, $this->nombre_reconduction);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_HT)) $criteria->add(CommonExecContratPeer::MONTANT_HT, $this->montant_ht);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_TTC)) $criteria->add(CommonExecContratPeer::MONTANT_TTC, $this->montant_ttc);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_MIN)) $criteria->add(CommonExecContratPeer::MONTANT_MIN, $this->montant_min);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_MAX)) $criteria->add(CommonExecContratPeer::MONTANT_MAX, $this->montant_max);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_MIN_TTC)) $criteria->add(CommonExecContratPeer::MONTANT_MIN_TTC, $this->montant_min_ttc);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_MAX_TTC)) $criteria->add(CommonExecContratPeer::MONTANT_MAX_TTC, $this->montant_max_ttc);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_FACTURE_HT)) $criteria->add(CommonExecContratPeer::MONTANT_FACTURE_HT, $this->montant_facture_ht);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_FACTURE_TTC)) $criteria->add(CommonExecContratPeer::MONTANT_FACTURE_TTC, $this->montant_facture_ttc);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_PAYE_HT)) $criteria->add(CommonExecContratPeer::MONTANT_PAYE_HT, $this->montant_paye_ht);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_PAYE_TTC)) $criteria->add(CommonExecContratPeer::MONTANT_PAYE_TTC, $this->montant_paye_ttc);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_CAUTION)) $criteria->add(CommonExecContratPeer::MONTANT_CAUTION, $this->montant_caution);
        if ($this->isColumnModified(CommonExecContratPeer::POURCENTAGE_CAUTION)) $criteria->add(CommonExecContratPeer::POURCENTAGE_CAUTION, $this->pourcentage_caution);
        if ($this->isColumnModified(CommonExecContratPeer::RETENUE_GARANTIE)) $criteria->add(CommonExecContratPeer::RETENUE_GARANTIE, $this->retenue_garantie);
        if ($this->isColumnModified(CommonExecContratPeer::POURCENTAGE_RETENUE_GARANTIE)) $criteria->add(CommonExecContratPeer::POURCENTAGE_RETENUE_GARANTIE, $this->pourcentage_retenue_garantie);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_RETENU_GARANTIE)) $criteria->add(CommonExecContratPeer::MONTANT_RETENU_GARANTIE, $this->montant_retenu_garantie);
        if ($this->isColumnModified(CommonExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE)) $criteria->add(CommonExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE, $this->pourcentage_prelevement_garantie);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_AVANCE)) $criteria->add(CommonExecContratPeer::MONTANT_AVANCE, $this->montant_avance);
        if ($this->isColumnModified(CommonExecContratPeer::DELAI_PARTIEL)) $criteria->add(CommonExecContratPeer::DELAI_PARTIEL, $this->delai_partiel);
        if ($this->isColumnModified(CommonExecContratPeer::DELAI_CONTRAT)) $criteria->add(CommonExecContratPeer::DELAI_CONTRAT, $this->delai_contrat);
        if ($this->isColumnModified(CommonExecContratPeer::UNITE_DELAI_CONTRAT)) $criteria->add(CommonExecContratPeer::UNITE_DELAI_CONTRAT, $this->unite_delai_contrat);
        if ($this->isColumnModified(CommonExecContratPeer::DATE_APPROBATION)) $criteria->add(CommonExecContratPeer::DATE_APPROBATION, $this->date_approbation);
        if ($this->isColumnModified(CommonExecContratPeer::DATE_NOTIFICATION_APPROBATION)) $criteria->add(CommonExecContratPeer::DATE_NOTIFICATION_APPROBATION, $this->date_notification_approbation);
        if ($this->isColumnModified(CommonExecContratPeer::DATE_FIN)) $criteria->add(CommonExecContratPeer::DATE_FIN, $this->date_fin);
        if ($this->isColumnModified(CommonExecContratPeer::DATE_CREA)) $criteria->add(CommonExecContratPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecContratPeer::ID_AGENT_CREA)) $criteria->add(CommonExecContratPeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecContratPeer::DATE_MODIF)) $criteria->add(CommonExecContratPeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(CommonExecContratPeer::ID_AGENT_MODIF)) $criteria->add(CommonExecContratPeer::ID_AGENT_MODIF, $this->id_agent_modif);
        if ($this->isColumnModified(CommonExecContratPeer::DELAI_REEL)) $criteria->add(CommonExecContratPeer::DELAI_REEL, $this->delai_reel);
        if ($this->isColumnModified(CommonExecContratPeer::DEPASSEMENT)) $criteria->add(CommonExecContratPeer::DEPASSEMENT, $this->depassement);
        if ($this->isColumnModified(CommonExecContratPeer::DATE_MAJ_DELAI_REEL)) $criteria->add(CommonExecContratPeer::DATE_MAJ_DELAI_REEL, $this->date_maj_delai_reel);
        if ($this->isColumnModified(CommonExecContratPeer::ID_PARAPHEUR)) $criteria->add(CommonExecContratPeer::ID_PARAPHEUR, $this->id_parapheur);
        if ($this->isColumnModified(CommonExecContratPeer::STATUT_PARAPHEUR)) $criteria->add(CommonExecContratPeer::STATUT_PARAPHEUR, $this->statut_parapheur);
        if ($this->isColumnModified(CommonExecContratPeer::DATE_CLOTURE_PARAPHEUR)) $criteria->add(CommonExecContratPeer::DATE_CLOTURE_PARAPHEUR, $this->date_cloture_parapheur);
        if ($this->isColumnModified(CommonExecContratPeer::GARANTIE)) $criteria->add(CommonExecContratPeer::GARANTIE, $this->garantie);
        if ($this->isColumnModified(CommonExecContratPeer::DUREE_GARANTIE)) $criteria->add(CommonExecContratPeer::DUREE_GARANTIE, $this->duree_garantie);
        if ($this->isColumnModified(CommonExecContratPeer::UNITE_GARANTIE)) $criteria->add(CommonExecContratPeer::UNITE_GARANTIE, $this->unite_garantie);
        if ($this->isColumnModified(CommonExecContratPeer::TYPE_PENALITE)) $criteria->add(CommonExecContratPeer::TYPE_PENALITE, $this->type_penalite);
        if ($this->isColumnModified(CommonExecContratPeer::POURCENTAGE_PENALITE)) $criteria->add(CommonExecContratPeer::POURCENTAGE_PENALITE, $this->pourcentage_penalite);
        if ($this->isColumnModified(CommonExecContratPeer::MONTANT_PENALITE)) $criteria->add(CommonExecContratPeer::MONTANT_PENALITE, $this->montant_penalite);
        if ($this->isColumnModified(CommonExecContratPeer::PLAFOND_PENALITE)) $criteria->add(CommonExecContratPeer::PLAFOND_PENALITE, $this->plafond_penalite);
        if ($this->isColumnModified(CommonExecContratPeer::MODE_PASSATION)) $criteria->add(CommonExecContratPeer::MODE_PASSATION, $this->mode_passation);
        if ($this->isColumnModified(CommonExecContratPeer::LIE_MARCHE)) $criteria->add(CommonExecContratPeer::LIE_MARCHE, $this->lie_marche);
        if ($this->isColumnModified(CommonExecContratPeer::NUM_CHAPEAU)) $criteria->add(CommonExecContratPeer::NUM_CHAPEAU, $this->num_chapeau);
        if ($this->isColumnModified(CommonExecContratPeer::OS_PHASE)) $criteria->add(CommonExecContratPeer::OS_PHASE, $this->os_phase);
        if ($this->isColumnModified(CommonExecContratPeer::PRESTATION_DEMANDE)) $criteria->add(CommonExecContratPeer::PRESTATION_DEMANDE, $this->prestation_demande);
        if ($this->isColumnModified(CommonExecContratPeer::FORFAIT_JH)) $criteria->add(CommonExecContratPeer::FORFAIT_JH, $this->forfait_jh);
        if ($this->isColumnModified(CommonExecContratPeer::QUANTITE_JH)) $criteria->add(CommonExecContratPeer::QUANTITE_JH, $this->quantite_jh);
        if ($this->isColumnModified(CommonExecContratPeer::NATURE_MARCHE)) $criteria->add(CommonExecContratPeer::NATURE_MARCHE, $this->nature_marche);
        if ($this->isColumnModified(CommonExecContratPeer::DATE_DEBUT)) $criteria->add(CommonExecContratPeer::DATE_DEBUT, $this->date_debut);
        if ($this->isColumnModified(CommonExecContratPeer::PLURIANUELLE)) $criteria->add(CommonExecContratPeer::PLURIANUELLE, $this->plurianuelle);
        if ($this->isColumnModified(CommonExecContratPeer::TRANCHECONDITIONNELLE)) $criteria->add(CommonExecContratPeer::TRANCHECONDITIONNELLE, $this->trancheconditionnelle);
        if ($this->isColumnModified(CommonExecContratPeer::ID_AGENT_CR)) $criteria->add(CommonExecContratPeer::ID_AGENT_CR, $this->id_agent_cr);

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
        $criteria = new Criteria(CommonExecContratPeer::DATABASE_NAME);
        $criteria->add(CommonExecContratPeer::ID_CONTRAT, $this->id_contrat);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdContrat();
    }

    /**
     * Generic method to set the primary key (id_contrat column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdContrat($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdContrat();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonExecContrat (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdDecisionEnveloppe($this->getIdDecisionEnveloppe());
        $copyObj->setNumero($this->getNumero());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setIdTypeContrat($this->getIdTypeContrat());
        $copyObj->setIdTypeStructure($this->getIdTypeStructure());
        $copyObj->setObjet($this->getObjet());
        $copyObj->setNumConsultation($this->getNumConsultation());
        $copyObj->setIdNaturePrestation($this->getIdNaturePrestation());
        $copyObj->setIdService($this->getIdService());
        $copyObj->setIdServiceGerant($this->getIdServiceGerant());
        $copyObj->setIdAgentGestion($this->getIdAgentGestion());
        $copyObj->setReconductible($this->getReconductible());
        $copyObj->setNombreReconduction($this->getNombreReconduction());
        $copyObj->setMontantHt($this->getMontantHt());
        $copyObj->setMontantTtc($this->getMontantTtc());
        $copyObj->setMontantMin($this->getMontantMin());
        $copyObj->setMontantMax($this->getMontantMax());
        $copyObj->setMontantMinTtc($this->getMontantMinTtc());
        $copyObj->setMontantMaxTtc($this->getMontantMaxTtc());
        $copyObj->setMontantFactureHt($this->getMontantFactureHt());
        $copyObj->setMontantFactureTtc($this->getMontantFactureTtc());
        $copyObj->setMontantPayeHt($this->getMontantPayeHt());
        $copyObj->setMontantPayeTtc($this->getMontantPayeTtc());
        $copyObj->setMontantCaution($this->getMontantCaution());
        $copyObj->setPourcentageCaution($this->getPourcentageCaution());
        $copyObj->setRetenueGarantie($this->getRetenueGarantie());
        $copyObj->setPourcentageRetenueGarantie($this->getPourcentageRetenueGarantie());
        $copyObj->setMontantRetenuGarantie($this->getMontantRetenuGarantie());
        $copyObj->setPourcentagePrelevementGarantie($this->getPourcentagePrelevementGarantie());
        $copyObj->setMontantAvance($this->getMontantAvance());
        $copyObj->setDelaiPartiel($this->getDelaiPartiel());
        $copyObj->setDelaiContrat($this->getDelaiContrat());
        $copyObj->setUniteDelaiContrat($this->getUniteDelaiContrat());
        $copyObj->setDateApprobation($this->getDateApprobation());
        $copyObj->setDateNotificationApprobation($this->getDateNotificationApprobation());
        $copyObj->setDateFin($this->getDateFin());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setDateModif($this->getDateModif());
        $copyObj->setIdAgentModif($this->getIdAgentModif());
        $copyObj->setDelaiReel($this->getDelaiReel());
        $copyObj->setDepassement($this->getDepassement());
        $copyObj->setDateMajDelaiReel($this->getDateMajDelaiReel());
        $copyObj->setIdParapheur($this->getIdParapheur());
        $copyObj->setStatutParapheur($this->getStatutParapheur());
        $copyObj->setDateClotureParapheur($this->getDateClotureParapheur());
        $copyObj->setGarantie($this->getGarantie());
        $copyObj->setDureeGarantie($this->getDureeGarantie());
        $copyObj->setUniteGarantie($this->getUniteGarantie());
        $copyObj->setTypePenalite($this->getTypePenalite());
        $copyObj->setPourcentagePenalite($this->getPourcentagePenalite());
        $copyObj->setMontantPenalite($this->getMontantPenalite());
        $copyObj->setPlafondPenalite($this->getPlafondPenalite());
        $copyObj->setModePassation($this->getModePassation());
        $copyObj->setLieMarche($this->getLieMarche());
        $copyObj->setNumChapeau($this->getNumChapeau());
        $copyObj->setOsPhase($this->getOsPhase());
        $copyObj->setPrestationDemande($this->getPrestationDemande());
        $copyObj->setForfaitJh($this->getForfaitJh());
        $copyObj->setQuantiteJh($this->getQuantiteJh());
        $copyObj->setNatureMarche($this->getNatureMarche());
        $copyObj->setDateDebut($this->getDateDebut());
        $copyObj->setPlurianuelle($this->getPlurianuelle());
        $copyObj->setTrancheconditionnelle($this->getTrancheconditionnelle());
        $copyObj->setIdAgentCr($this->getIdAgentCr());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonExecAgentContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecAgentContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecAvenants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecAvenant($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecContacts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContact($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecContractants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecContractant($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecDossierPaiements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecDossierPaiement($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecEvenements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecEvenement($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecFacture($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecHistoriquePrixs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecHistoriquePrix($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecInscritContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecInscritContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecLivrableContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecLivrableContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPhases() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPhase($relObj->copy($deepCopy));
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

            foreach ($this->getCommonExecPrixs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPrix($relObj->copy($deepCopy));
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
            $copyObj->setIdContrat(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonExecContrat Clone of current object.
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
     * @return CommonExecContratPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecContratPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecContrat The current object (for fluent API support)
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
            $v->addCommonExecContratRelatedByIdAgentCrea($this);
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
                $this->aCommonAgentRelatedByIdAgentCrea->addCommonExecContratsRelatedByIdAgentCrea($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentCrea;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecContrat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonAgentRelatedByIdAgentGestion(CommonAgent $v = null)
    {
        if ($v === null) {
            $this->setIdAgentGestion(NULL);
        } else {
            $this->setIdAgentGestion($v->getId());
        }

        $this->aCommonAgentRelatedByIdAgentGestion = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonAgent object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecContratRelatedByIdAgentGestion($this);
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
    public function getCommonAgentRelatedByIdAgentGestion(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonAgentRelatedByIdAgentGestion === null && ($this->id_agent_gestion !== null) && $doQuery) {
            $this->aCommonAgentRelatedByIdAgentGestion = CommonAgentQuery::create()->findPk($this->id_agent_gestion, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonAgentRelatedByIdAgentGestion->addCommonExecContratsRelatedByIdAgentGestion($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentGestion;
    }

    /**
     * Declares an association between this object and a CommonAgent object.
     *
     * @param   CommonAgent $v
     * @return CommonExecContrat The current object (for fluent API support)
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
            $v->addCommonExecContratRelatedByIdAgentModif($this);
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
                $this->aCommonAgentRelatedByIdAgentModif->addCommonExecContratsRelatedByIdAgentModif($this);
             */
        }

        return $this->aCommonAgentRelatedByIdAgentModif;
    }

    /**
     * Declares an association between this object and a CommonCategorieConsultation object.
     *
     * @param   CommonCategorieConsultation $v
     * @return CommonExecContrat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonCategorieConsultation(CommonCategorieConsultation $v = null)
    {
        if ($v === null) {
            $this->setIdNaturePrestation(NULL);
        } else {
            $this->setIdNaturePrestation($v->getId());
        }

        $this->aCommonCategorieConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonCategorieConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecContrat($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonCategorieConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonCategorieConsultation The associated CommonCategorieConsultation object.
     * @throws PropelException
     */
    public function getCommonCategorieConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonCategorieConsultation === null && (($this->id_nature_prestation !== "" && $this->id_nature_prestation !== null)) && $doQuery) {
            $this->aCommonCategorieConsultation = CommonCategorieConsultationQuery::create()->findPk($this->id_nature_prestation, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonCategorieConsultation->addCommonExecContrats($this);
             */
        }

        return $this->aCommonCategorieConsultation;
    }

    /**
     * Declares an association between this object and a CommonExecTypeContrat object.
     *
     * @param   CommonExecTypeContrat $v
     * @return CommonExecContrat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecTypeContrat(CommonExecTypeContrat $v = null)
    {
        if ($v === null) {
            $this->setIdTypeContrat(NULL);
        } else {
            $this->setIdTypeContrat($v->getId());
        }

        $this->aCommonExecTypeContrat = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecTypeContrat object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecContrat($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecTypeContrat object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecTypeContrat The associated CommonExecTypeContrat object.
     * @throws PropelException
     */
    public function getCommonExecTypeContrat(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecTypeContrat === null && ($this->id_type_contrat !== null) && $doQuery) {
            $this->aCommonExecTypeContrat = CommonExecTypeContratQuery::create()->findPk($this->id_type_contrat, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecTypeContrat->addCommonExecContrats($this);
             */
        }

        return $this->aCommonExecTypeContrat;
    }

    /**
     * Declares an association between this object and a CommonExecTypeStructure object.
     *
     * @param   CommonExecTypeStructure $v
     * @return CommonExecContrat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecTypeStructure(CommonExecTypeStructure $v = null)
    {
        if ($v === null) {
            $this->setIdTypeStructure(NULL);
        } else {
            $this->setIdTypeStructure($v->getId());
        }

        $this->aCommonExecTypeStructure = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecTypeStructure object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecContrat($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecTypeStructure object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecTypeStructure The associated CommonExecTypeStructure object.
     * @throws PropelException
     */
    public function getCommonExecTypeStructure(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecTypeStructure === null && ($this->id_type_structure !== null) && $doQuery) {
            $this->aCommonExecTypeStructure = CommonExecTypeStructureQuery::create()->findPk($this->id_type_structure, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecTypeStructure->addCommonExecContrats($this);
             */
        }

        return $this->aCommonExecTypeStructure;
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
        if ('CommonExecAgentContrat' == $relationName) {
            $this->initCommonExecAgentContrats();
        }
        if ('CommonExecAvenant' == $relationName) {
            $this->initCommonExecAvenants();
        }
        if ('CommonExecContact' == $relationName) {
            $this->initCommonExecContacts();
        }
        if ('CommonExecContractant' == $relationName) {
            $this->initCommonExecContractants();
        }
        if ('CommonExecDossierPaiement' == $relationName) {
            $this->initCommonExecDossierPaiements();
        }
        if ('CommonExecEvenement' == $relationName) {
            $this->initCommonExecEvenements();
        }
        if ('CommonExecFacture' == $relationName) {
            $this->initCommonExecFactures();
        }
        if ('CommonExecHistoriquePrix' == $relationName) {
            $this->initCommonExecHistoriquePrixs();
        }
        if ('CommonExecInscritContrat' == $relationName) {
            $this->initCommonExecInscritContrats();
        }
        if ('CommonExecLivrableContrat' == $relationName) {
            $this->initCommonExecLivrableContrats();
        }
        if ('CommonExecPhase' == $relationName) {
            $this->initCommonExecPhases();
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
        if ('CommonExecPrix' == $relationName) {
            $this->initCommonExecPrixs();
        }
        if ('CommonExecPrixAvenant' == $relationName) {
            $this->initCommonExecPrixAvenants();
        }
        if ('CommonExecRepartition' == $relationName) {
            $this->initCommonExecRepartitions();
        }
    }

    /**
     * Clears out the collCommonExecAgentContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecAgentContrats(PropelCollection $commonExecAgentContrats, PropelPDO $con = null)
    {
        $commonExecAgentContratsToDelete = $this->getCommonExecAgentContrats(new Criteria(), $con)->diff($commonExecAgentContrats);


        $this->commonExecAgentContratsScheduledForDeletion = $commonExecAgentContratsToDelete;

        foreach ($commonExecAgentContratsToDelete as $commonExecAgentContratRemoved) {
            $commonExecAgentContratRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecAgentContrats);
    }

    /**
     * Method called to associate a CommonExecAgentContrat object to this object
     * through the CommonExecAgentContrat foreign key attribute.
     *
     * @param   CommonExecAgentContrat $l CommonExecAgentContrat
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecAgentContrat->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecAgentContrat $commonExecAgentContrat The commonExecAgentContrat object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecAgentContrat->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecAgentContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAgentContrat[] List of CommonExecAgentContrat objects
     */
    public function getCommonExecAgentContratsJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAgentContratQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonExecAgentContrats($query, $con);
    }

    /**
     * Clears out the collCommonExecAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
     * @see        addCommonExecAvenants()
     */
    public function clearCommonExecAvenants()
    {
        $this->collCommonExecAvenants = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecAvenantsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecAvenants collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecAvenants($v = true)
    {
        $this->collCommonExecAvenantsPartial = $v;
    }

    /**
     * Initializes the collCommonExecAvenants collection.
     *
     * By default this just sets the collCommonExecAvenants collection to an empty array (like clearcollCommonExecAvenants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecAvenants($overrideExisting = true)
    {
        if (null !== $this->collCommonExecAvenants && !$overrideExisting) {
            return;
        }
        $this->collCommonExecAvenants = new PropelObjectCollection();
        $this->collCommonExecAvenants->setModel('CommonExecAvenant');
    }

    /**
     * Gets an array of CommonExecAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     * @throws PropelException
     */
    public function getCommonExecAvenants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenants) {
                // return empty collection
                $this->initCommonExecAvenants();
            } else {
                $collCommonExecAvenants = CommonExecAvenantQuery::create(null, $criteria)
                    ->filterByCommonExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecAvenantsPartial && count($collCommonExecAvenants)) {
                      $this->initCommonExecAvenants(false);

                      foreach ($collCommonExecAvenants as $obj) {
                        if (false == $this->collCommonExecAvenants->contains($obj)) {
                          $this->collCommonExecAvenants->append($obj);
                        }
                      }

                      $this->collCommonExecAvenantsPartial = true;
                    }

                    $collCommonExecAvenants->getInternalIterator()->rewind();

                    return $collCommonExecAvenants;
                }

                if ($partial && $this->collCommonExecAvenants) {
                    foreach ($this->collCommonExecAvenants as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecAvenants[] = $obj;
                        }
                    }
                }

                $this->collCommonExecAvenants = $collCommonExecAvenants;
                $this->collCommonExecAvenantsPartial = false;
            }
        }

        return $this->collCommonExecAvenants;
    }

    /**
     * Sets a collection of CommonExecAvenant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecAvenants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecAvenants(PropelCollection $commonExecAvenants, PropelPDO $con = null)
    {
        $commonExecAvenantsToDelete = $this->getCommonExecAvenants(new Criteria(), $con)->diff($commonExecAvenants);


        $this->commonExecAvenantsScheduledForDeletion = $commonExecAvenantsToDelete;

        foreach ($commonExecAvenantsToDelete as $commonExecAvenantRemoved) {
            $commonExecAvenantRemoved->setCommonExecContrat(null);
        }

        $this->collCommonExecAvenants = null;
        foreach ($commonExecAvenants as $commonExecAvenant) {
            $this->addCommonExecAvenant($commonExecAvenant);
        }

        $this->collCommonExecAvenants = $commonExecAvenants;
        $this->collCommonExecAvenantsPartial = false;

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
    public function countCommonExecAvenants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecAvenantsPartial && !$this->isNew();
        if (null === $this->collCommonExecAvenants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecAvenants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecAvenants());
            }
            $query = CommonExecAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecAvenants);
    }

    /**
     * Method called to associate a CommonExecAvenant object to this object
     * through the CommonExecAvenant foreign key attribute.
     *
     * @param   CommonExecAvenant $l CommonExecAvenant
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function addCommonExecAvenant(CommonExecAvenant $l)
    {
        if ($this->collCommonExecAvenants === null) {
            $this->initCommonExecAvenants();
            $this->collCommonExecAvenantsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecAvenants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecAvenant($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecAvenant $commonExecAvenant The commonExecAvenant object to add.
     */
    protected function doAddCommonExecAvenant($commonExecAvenant)
    {
        $this->collCommonExecAvenants[]= $commonExecAvenant;
        $commonExecAvenant->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecAvenant $commonExecAvenant The commonExecAvenant object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function removeCommonExecAvenant($commonExecAvenant)
    {
        if ($this->getCommonExecAvenants()->contains($commonExecAvenant)) {
            $this->collCommonExecAvenants->remove($this->collCommonExecAvenants->search($commonExecAvenant));
            if (null === $this->commonExecAvenantsScheduledForDeletion) {
                $this->commonExecAvenantsScheduledForDeletion = clone $this->collCommonExecAvenants;
                $this->commonExecAvenantsScheduledForDeletion->clear();
            }
            $this->commonExecAvenantsScheduledForDeletion[]= clone $commonExecAvenant;
            $commonExecAvenant->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsJoinCommonAgentRelatedByIdAgentCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentCrea', $join_behavior);

        return $this->getCommonExecAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsJoinCommonAgentRelatedByIdAgentModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentModif', $join_behavior);

        return $this->getCommonExecAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsJoinCommonAgentRelatedByIdAgentRejet($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentRejet', $join_behavior);

        return $this->getCommonExecAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsJoinCommonAgentRelatedByIdAgentValidation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentValidation', $join_behavior);

        return $this->getCommonExecAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecAvenant[] List of CommonExecAvenant objects
     */
    public function getCommonExecAvenantsJoinCommonExecTypeAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecAvenantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeAvenant', $join_behavior);

        return $this->getCommonExecAvenants($query, $con);
    }

    /**
     * Clears out the collCommonExecContacts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
     * @see        addCommonExecContacts()
     */
    public function clearCommonExecContacts()
    {
        $this->collCommonExecContacts = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContactsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContacts collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContacts($v = true)
    {
        $this->collCommonExecContactsPartial = $v;
    }

    /**
     * Initializes the collCommonExecContacts collection.
     *
     * By default this just sets the collCommonExecContacts collection to an empty array (like clearcollCommonExecContacts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContacts($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContacts && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContacts = new PropelObjectCollection();
        $this->collCommonExecContacts->setModel('CommonExecContact');
    }

    /**
     * Gets an array of CommonExecContact objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContact[] List of CommonExecContact objects
     * @throws PropelException
     */
    public function getCommonExecContacts($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContactsPartial && !$this->isNew();
        if (null === $this->collCommonExecContacts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContacts) {
                // return empty collection
                $this->initCommonExecContacts();
            } else {
                $collCommonExecContacts = CommonExecContactQuery::create(null, $criteria)
                    ->filterByCommonExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContactsPartial && count($collCommonExecContacts)) {
                      $this->initCommonExecContacts(false);

                      foreach ($collCommonExecContacts as $obj) {
                        if (false == $this->collCommonExecContacts->contains($obj)) {
                          $this->collCommonExecContacts->append($obj);
                        }
                      }

                      $this->collCommonExecContactsPartial = true;
                    }

                    $collCommonExecContacts->getInternalIterator()->rewind();

                    return $collCommonExecContacts;
                }

                if ($partial && $this->collCommonExecContacts) {
                    foreach ($this->collCommonExecContacts as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContacts[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContacts = $collCommonExecContacts;
                $this->collCommonExecContactsPartial = false;
            }
        }

        return $this->collCommonExecContacts;
    }

    /**
     * Sets a collection of CommonExecContact objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContacts A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecContacts(PropelCollection $commonExecContacts, PropelPDO $con = null)
    {
        $commonExecContactsToDelete = $this->getCommonExecContacts(new Criteria(), $con)->diff($commonExecContacts);


        $this->commonExecContactsScheduledForDeletion = $commonExecContactsToDelete;

        foreach ($commonExecContactsToDelete as $commonExecContactRemoved) {
            $commonExecContactRemoved->setCommonExecContrat(null);
        }

        $this->collCommonExecContacts = null;
        foreach ($commonExecContacts as $commonExecContact) {
            $this->addCommonExecContact($commonExecContact);
        }

        $this->collCommonExecContacts = $commonExecContacts;
        $this->collCommonExecContactsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecContact objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecContact objects.
     * @throws PropelException
     */
    public function countCommonExecContacts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContactsPartial && !$this->isNew();
        if (null === $this->collCommonExecContacts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContacts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContacts());
            }
            $query = CommonExecContactQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecContacts);
    }

    /**
     * Method called to associate a CommonExecContact object to this object
     * through the CommonExecContact foreign key attribute.
     *
     * @param   CommonExecContact $l CommonExecContact
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function addCommonExecContact(CommonExecContact $l)
    {
        if ($this->collCommonExecContacts === null) {
            $this->initCommonExecContacts();
            $this->collCommonExecContactsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContacts->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContact($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContact $commonExecContact The commonExecContact object to add.
     */
    protected function doAddCommonExecContact($commonExecContact)
    {
        $this->collCommonExecContacts[]= $commonExecContact;
        $commonExecContact->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecContact $commonExecContact The commonExecContact object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function removeCommonExecContact($commonExecContact)
    {
        if ($this->getCommonExecContacts()->contains($commonExecContact)) {
            $this->collCommonExecContacts->remove($this->collCommonExecContacts->search($commonExecContact));
            if (null === $this->commonExecContactsScheduledForDeletion) {
                $this->commonExecContactsScheduledForDeletion = clone $this->collCommonExecContacts;
                $this->commonExecContactsScheduledForDeletion->clear();
            }
            $this->commonExecContactsScheduledForDeletion[]= clone $commonExecContact;
            $commonExecContact->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecContacts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContact[] List of CommonExecContact objects
     */
    public function getCommonExecContactsJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContactQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecContacts($query, $con);
    }

    /**
     * Clears out the collCommonExecContractants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
     * @see        addCommonExecContractants()
     */
    public function clearCommonExecContractants()
    {
        $this->collCommonExecContractants = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecContractantsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecContractants collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecContractants($v = true)
    {
        $this->collCommonExecContractantsPartial = $v;
    }

    /**
     * Initializes the collCommonExecContractants collection.
     *
     * By default this just sets the collCommonExecContractants collection to an empty array (like clearcollCommonExecContractants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecContractants($overrideExisting = true)
    {
        if (null !== $this->collCommonExecContractants && !$overrideExisting) {
            return;
        }
        $this->collCommonExecContractants = new PropelObjectCollection();
        $this->collCommonExecContractants->setModel('CommonExecContractant');
    }

    /**
     * Gets an array of CommonExecContractant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     * @throws PropelException
     */
    public function getCommonExecContractants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContractantsPartial && !$this->isNew();
        if (null === $this->collCommonExecContractants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContractants) {
                // return empty collection
                $this->initCommonExecContractants();
            } else {
                $collCommonExecContractants = CommonExecContractantQuery::create(null, $criteria)
                    ->filterByCommonExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecContractantsPartial && count($collCommonExecContractants)) {
                      $this->initCommonExecContractants(false);

                      foreach ($collCommonExecContractants as $obj) {
                        if (false == $this->collCommonExecContractants->contains($obj)) {
                          $this->collCommonExecContractants->append($obj);
                        }
                      }

                      $this->collCommonExecContractantsPartial = true;
                    }

                    $collCommonExecContractants->getInternalIterator()->rewind();

                    return $collCommonExecContractants;
                }

                if ($partial && $this->collCommonExecContractants) {
                    foreach ($this->collCommonExecContractants as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecContractants[] = $obj;
                        }
                    }
                }

                $this->collCommonExecContractants = $collCommonExecContractants;
                $this->collCommonExecContractantsPartial = false;
            }
        }

        return $this->collCommonExecContractants;
    }

    /**
     * Sets a collection of CommonExecContractant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecContractants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecContractants(PropelCollection $commonExecContractants, PropelPDO $con = null)
    {
        $commonExecContractantsToDelete = $this->getCommonExecContractants(new Criteria(), $con)->diff($commonExecContractants);


        $this->commonExecContractantsScheduledForDeletion = $commonExecContractantsToDelete;

        foreach ($commonExecContractantsToDelete as $commonExecContractantRemoved) {
            $commonExecContractantRemoved->setCommonExecContrat(null);
        }

        $this->collCommonExecContractants = null;
        foreach ($commonExecContractants as $commonExecContractant) {
            $this->addCommonExecContractant($commonExecContractant);
        }

        $this->collCommonExecContractants = $commonExecContractants;
        $this->collCommonExecContractantsPartial = false;

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
    public function countCommonExecContractants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecContractantsPartial && !$this->isNew();
        if (null === $this->collCommonExecContractants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecContractants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecContractants());
            }
            $query = CommonExecContractantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecContractants);
    }

    /**
     * Method called to associate a CommonExecContractant object to this object
     * through the CommonExecContractant foreign key attribute.
     *
     * @param   CommonExecContractant $l CommonExecContractant
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function addCommonExecContractant(CommonExecContractant $l)
    {
        if ($this->collCommonExecContractants === null) {
            $this->initCommonExecContractants();
            $this->collCommonExecContractantsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecContractants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecContractant($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecContractant $commonExecContractant The commonExecContractant object to add.
     */
    protected function doAddCommonExecContractant($commonExecContractant)
    {
        $this->collCommonExecContractants[]= $commonExecContractant;
        $commonExecContractant->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecContractant $commonExecContractant The commonExecContractant object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function removeCommonExecContractant($commonExecContractant)
    {
        if ($this->getCommonExecContractants()->contains($commonExecContractant)) {
            $this->collCommonExecContractants->remove($this->collCommonExecContractants->search($commonExecContractant));
            if (null === $this->commonExecContractantsScheduledForDeletion) {
                $this->commonExecContractantsScheduledForDeletion = clone $this->collCommonExecContractants;
                $this->commonExecContractantsScheduledForDeletion->clear();
            }
            $this->commonExecContractantsScheduledForDeletion[]= clone $commonExecContractant;
            $commonExecContractant->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsJoinCommonAgentRelatedByIdAgentCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentCrea', $join_behavior);

        return $this->getCommonExecContractants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsJoinCommonAgentRelatedByIdAgentModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentModif', $join_behavior);

        return $this->getCommonExecContractants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsJoinCommonExecContractantRelatedByIdParent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractantRelatedByIdParent', $join_behavior);

        return $this->getCommonExecContractants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsJoinCommonExecTypeContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeContractant', $join_behavior);

        return $this->getCommonExecContractants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecContractant[] List of CommonExecContractant objects
     */
    public function getCommonExecContractantsJoinCommonExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecContractantQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeStructure', $join_behavior);

        return $this->getCommonExecContractants($query, $con);
    }

    /**
     * Clears out the collCommonExecDossierPaiements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecDossierPaiements(PropelCollection $commonExecDossierPaiements, PropelPDO $con = null)
    {
        $commonExecDossierPaiementsToDelete = $this->getCommonExecDossierPaiements(new Criteria(), $con)->diff($commonExecDossierPaiements);


        $this->commonExecDossierPaiementsScheduledForDeletion = $commonExecDossierPaiementsToDelete;

        foreach ($commonExecDossierPaiementsToDelete as $commonExecDossierPaiementRemoved) {
            $commonExecDossierPaiementRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecDossierPaiements);
    }

    /**
     * Method called to associate a CommonExecDossierPaiement object to this object
     * through the CommonExecDossierPaiement foreign key attribute.
     *
     * @param   CommonExecDossierPaiement $l CommonExecDossierPaiement
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecDossierPaiement->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecDossierPaiement $commonExecDossierPaiement The commonExecDossierPaiement object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecDossierPaiement->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecDossierPaiements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecDossierPaiement[] List of CommonExecDossierPaiement objects
     */
    public function getCommonExecDossierPaiementsJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecDossierPaiementQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonExecDossierPaiements($query, $con);
    }

    /**
     * Clears out the collCommonExecEvenements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
     * @see        addCommonExecEvenements()
     */
    public function clearCommonExecEvenements()
    {
        $this->collCommonExecEvenements = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecEvenementsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecEvenements collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecEvenements($v = true)
    {
        $this->collCommonExecEvenementsPartial = $v;
    }

    /**
     * Initializes the collCommonExecEvenements collection.
     *
     * By default this just sets the collCommonExecEvenements collection to an empty array (like clearcollCommonExecEvenements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecEvenements($overrideExisting = true)
    {
        if (null !== $this->collCommonExecEvenements && !$overrideExisting) {
            return;
        }
        $this->collCommonExecEvenements = new PropelObjectCollection();
        $this->collCommonExecEvenements->setModel('CommonExecEvenement');
    }

    /**
     * Gets an array of CommonExecEvenement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     * @throws PropelException
     */
    public function getCommonExecEvenements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenements) {
                // return empty collection
                $this->initCommonExecEvenements();
            } else {
                $collCommonExecEvenements = CommonExecEvenementQuery::create(null, $criteria)
                    ->filterByCommonExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecEvenementsPartial && count($collCommonExecEvenements)) {
                      $this->initCommonExecEvenements(false);

                      foreach ($collCommonExecEvenements as $obj) {
                        if (false == $this->collCommonExecEvenements->contains($obj)) {
                          $this->collCommonExecEvenements->append($obj);
                        }
                      }

                      $this->collCommonExecEvenementsPartial = true;
                    }

                    $collCommonExecEvenements->getInternalIterator()->rewind();

                    return $collCommonExecEvenements;
                }

                if ($partial && $this->collCommonExecEvenements) {
                    foreach ($this->collCommonExecEvenements as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecEvenements[] = $obj;
                        }
                    }
                }

                $this->collCommonExecEvenements = $collCommonExecEvenements;
                $this->collCommonExecEvenementsPartial = false;
            }
        }

        return $this->collCommonExecEvenements;
    }

    /**
     * Sets a collection of CommonExecEvenement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecEvenements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecEvenements(PropelCollection $commonExecEvenements, PropelPDO $con = null)
    {
        $commonExecEvenementsToDelete = $this->getCommonExecEvenements(new Criteria(), $con)->diff($commonExecEvenements);


        $this->commonExecEvenementsScheduledForDeletion = $commonExecEvenementsToDelete;

        foreach ($commonExecEvenementsToDelete as $commonExecEvenementRemoved) {
            $commonExecEvenementRemoved->setCommonExecContrat(null);
        }

        $this->collCommonExecEvenements = null;
        foreach ($commonExecEvenements as $commonExecEvenement) {
            $this->addCommonExecEvenement($commonExecEvenement);
        }

        $this->collCommonExecEvenements = $commonExecEvenements;
        $this->collCommonExecEvenementsPartial = false;

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
    public function countCommonExecEvenements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenements) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecEvenements());
            }
            $query = CommonExecEvenementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecEvenements);
    }

    /**
     * Method called to associate a CommonExecEvenement object to this object
     * through the CommonExecEvenement foreign key attribute.
     *
     * @param   CommonExecEvenement $l CommonExecEvenement
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function addCommonExecEvenement(CommonExecEvenement $l)
    {
        if ($this->collCommonExecEvenements === null) {
            $this->initCommonExecEvenements();
            $this->collCommonExecEvenementsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecEvenements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecEvenement($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecEvenement $commonExecEvenement The commonExecEvenement object to add.
     */
    protected function doAddCommonExecEvenement($commonExecEvenement)
    {
        $this->collCommonExecEvenements[]= $commonExecEvenement;
        $commonExecEvenement->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecEvenement $commonExecEvenement The commonExecEvenement object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function removeCommonExecEvenement($commonExecEvenement)
    {
        if ($this->getCommonExecEvenements()->contains($commonExecEvenement)) {
            $this->collCommonExecEvenements->remove($this->collCommonExecEvenements->search($commonExecEvenement));
            if (null === $this->commonExecEvenementsScheduledForDeletion) {
                $this->commonExecEvenementsScheduledForDeletion = clone $this->collCommonExecEvenements;
                $this->commonExecEvenementsScheduledForDeletion->clear();
            }
            $this->commonExecEvenementsScheduledForDeletion[]= clone $commonExecEvenement;
            $commonExecEvenement->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonAgentRelatedByIdAgentCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentCrea', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonAgentRelatedByIdAgentModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentModif', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonAgentRelatedByIdAgentRejet($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentRejet', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonAgentRelatedByIdAgentValidation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentValidation', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonExecPhase($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecPhase', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonExecTypeEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeEvenement', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }

    /**
     * Clears out the collCommonExecFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
     * @see        addCommonExecFactures()
     */
    public function clearCommonExecFactures()
    {
        $this->collCommonExecFactures = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecFactures($v = true)
    {
        $this->collCommonExecFacturesPartial = $v;
    }

    /**
     * Initializes the collCommonExecFactures collection.
     *
     * By default this just sets the collCommonExecFactures collection to an empty array (like clearcollCommonExecFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecFactures($overrideExisting = true)
    {
        if (null !== $this->collCommonExecFactures && !$overrideExisting) {
            return;
        }
        $this->collCommonExecFactures = new PropelObjectCollection();
        $this->collCommonExecFactures->setModel('CommonExecFacture');
    }

    /**
     * Gets an array of CommonExecFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     * @throws PropelException
     */
    public function getCommonExecFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesPartial && !$this->isNew();
        if (null === $this->collCommonExecFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFactures) {
                // return empty collection
                $this->initCommonExecFactures();
            } else {
                $collCommonExecFactures = CommonExecFactureQuery::create(null, $criteria)
                    ->filterByCommonExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecFacturesPartial && count($collCommonExecFactures)) {
                      $this->initCommonExecFactures(false);

                      foreach ($collCommonExecFactures as $obj) {
                        if (false == $this->collCommonExecFactures->contains($obj)) {
                          $this->collCommonExecFactures->append($obj);
                        }
                      }

                      $this->collCommonExecFacturesPartial = true;
                    }

                    $collCommonExecFactures->getInternalIterator()->rewind();

                    return $collCommonExecFactures;
                }

                if ($partial && $this->collCommonExecFactures) {
                    foreach ($this->collCommonExecFactures as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecFactures[] = $obj;
                        }
                    }
                }

                $this->collCommonExecFactures = $collCommonExecFactures;
                $this->collCommonExecFacturesPartial = false;
            }
        }

        return $this->collCommonExecFactures;
    }

    /**
     * Sets a collection of CommonExecFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecFactures(PropelCollection $commonExecFactures, PropelPDO $con = null)
    {
        $commonExecFacturesToDelete = $this->getCommonExecFactures(new Criteria(), $con)->diff($commonExecFactures);


        $this->commonExecFacturesScheduledForDeletion = $commonExecFacturesToDelete;

        foreach ($commonExecFacturesToDelete as $commonExecFactureRemoved) {
            $commonExecFactureRemoved->setCommonExecContrat(null);
        }

        $this->collCommonExecFactures = null;
        foreach ($commonExecFactures as $commonExecFacture) {
            $this->addCommonExecFacture($commonExecFacture);
        }

        $this->collCommonExecFactures = $commonExecFactures;
        $this->collCommonExecFacturesPartial = false;

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
    public function countCommonExecFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecFacturesPartial && !$this->isNew();
        if (null === $this->collCommonExecFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecFactures());
            }
            $query = CommonExecFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecFactures);
    }

    /**
     * Method called to associate a CommonExecFacture object to this object
     * through the CommonExecFacture foreign key attribute.
     *
     * @param   CommonExecFacture $l CommonExecFacture
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function addCommonExecFacture(CommonExecFacture $l)
    {
        if ($this->collCommonExecFactures === null) {
            $this->initCommonExecFactures();
            $this->collCommonExecFacturesPartial = true;
        }
        if (!in_array($l, $this->collCommonExecFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecFacture($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecFacture $commonExecFacture The commonExecFacture object to add.
     */
    protected function doAddCommonExecFacture($commonExecFacture)
    {
        $this->collCommonExecFactures[]= $commonExecFacture;
        $commonExecFacture->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecFacture $commonExecFacture The commonExecFacture object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function removeCommonExecFacture($commonExecFacture)
    {
        if ($this->getCommonExecFactures()->contains($commonExecFacture)) {
            $this->collCommonExecFactures->remove($this->collCommonExecFactures->search($commonExecFacture));
            if (null === $this->commonExecFacturesScheduledForDeletion) {
                $this->commonExecFacturesScheduledForDeletion = clone $this->collCommonExecFactures;
                $this->commonExecFacturesScheduledForDeletion->clear();
            }
            $this->commonExecFacturesScheduledForDeletion[]= clone $commonExecFacture;
            $commonExecFacture->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesJoinCommonAgentRelatedByIdAgentCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentCrea', $join_behavior);

        return $this->getCommonExecFactures($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesJoinCommonAgentRelatedByIdAgentModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentModif', $join_behavior);

        return $this->getCommonExecFactures($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesJoinCommonAgentRelatedByIdAgentRejet($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentRejet', $join_behavior);

        return $this->getCommonExecFactures($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesJoinCommonAgentRelatedByIdAgentValidation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentValidation', $join_behavior);

        return $this->getCommonExecFactures($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecFactures($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesJoinCommonEntrepriseRelatedByIdEntrepriseCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntrepriseRelatedByIdEntrepriseCrea', $join_behavior);

        return $this->getCommonExecFactures($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecFacture[] List of CommonExecFacture objects
     */
    public function getCommonExecFacturesJoinCommonEntrepriseRelatedByIdEntrepriseModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntrepriseRelatedByIdEntrepriseModif', $join_behavior);

        return $this->getCommonExecFactures($query, $con);
    }

    /**
     * Clears out the collCommonExecHistoriquePrixs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecHistoriquePrixs(PropelCollection $commonExecHistoriquePrixs, PropelPDO $con = null)
    {
        $commonExecHistoriquePrixsToDelete = $this->getCommonExecHistoriquePrixs(new Criteria(), $con)->diff($commonExecHistoriquePrixs);


        $this->commonExecHistoriquePrixsScheduledForDeletion = $commonExecHistoriquePrixsToDelete;

        foreach ($commonExecHistoriquePrixsToDelete as $commonExecHistoriquePrixRemoved) {
            $commonExecHistoriquePrixRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecHistoriquePrixs);
    }

    /**
     * Method called to associate a CommonExecHistoriquePrix object to this object
     * through the CommonExecHistoriquePrix foreign key attribute.
     *
     * @param   CommonExecHistoriquePrix $l CommonExecHistoriquePrix
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecHistoriquePrix->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecHistoriquePrix $commonExecHistoriquePrix The commonExecHistoriquePrix object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecHistoriquePrix->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Clears out the collCommonExecInscritContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
     * @see        addCommonExecInscritContrats()
     */
    public function clearCommonExecInscritContrats()
    {
        $this->collCommonExecInscritContrats = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecInscritContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecInscritContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecInscritContrats($v = true)
    {
        $this->collCommonExecInscritContratsPartial = $v;
    }

    /**
     * Initializes the collCommonExecInscritContrats collection.
     *
     * By default this just sets the collCommonExecInscritContrats collection to an empty array (like clearcollCommonExecInscritContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecInscritContrats($overrideExisting = true)
    {
        if (null !== $this->collCommonExecInscritContrats && !$overrideExisting) {
            return;
        }
        $this->collCommonExecInscritContrats = new PropelObjectCollection();
        $this->collCommonExecInscritContrats->setModel('CommonExecInscritContrat');
    }

    /**
     * Gets an array of CommonExecInscritContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecInscritContrat[] List of CommonExecInscritContrat objects
     * @throws PropelException
     */
    public function getCommonExecInscritContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecInscritContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecInscritContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecInscritContrats) {
                // return empty collection
                $this->initCommonExecInscritContrats();
            } else {
                $collCommonExecInscritContrats = CommonExecInscritContratQuery::create(null, $criteria)
                    ->filterByCommonExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecInscritContratsPartial && count($collCommonExecInscritContrats)) {
                      $this->initCommonExecInscritContrats(false);

                      foreach ($collCommonExecInscritContrats as $obj) {
                        if (false == $this->collCommonExecInscritContrats->contains($obj)) {
                          $this->collCommonExecInscritContrats->append($obj);
                        }
                      }

                      $this->collCommonExecInscritContratsPartial = true;
                    }

                    $collCommonExecInscritContrats->getInternalIterator()->rewind();

                    return $collCommonExecInscritContrats;
                }

                if ($partial && $this->collCommonExecInscritContrats) {
                    foreach ($this->collCommonExecInscritContrats as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecInscritContrats[] = $obj;
                        }
                    }
                }

                $this->collCommonExecInscritContrats = $collCommonExecInscritContrats;
                $this->collCommonExecInscritContratsPartial = false;
            }
        }

        return $this->collCommonExecInscritContrats;
    }

    /**
     * Sets a collection of CommonExecInscritContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecInscritContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecInscritContrats(PropelCollection $commonExecInscritContrats, PropelPDO $con = null)
    {
        $commonExecInscritContratsToDelete = $this->getCommonExecInscritContrats(new Criteria(), $con)->diff($commonExecInscritContrats);


        $this->commonExecInscritContratsScheduledForDeletion = $commonExecInscritContratsToDelete;

        foreach ($commonExecInscritContratsToDelete as $commonExecInscritContratRemoved) {
            $commonExecInscritContratRemoved->setCommonExecContrat(null);
        }

        $this->collCommonExecInscritContrats = null;
        foreach ($commonExecInscritContrats as $commonExecInscritContrat) {
            $this->addCommonExecInscritContrat($commonExecInscritContrat);
        }

        $this->collCommonExecInscritContrats = $commonExecInscritContrats;
        $this->collCommonExecInscritContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecInscritContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecInscritContrat objects.
     * @throws PropelException
     */
    public function countCommonExecInscritContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecInscritContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecInscritContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecInscritContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecInscritContrats());
            }
            $query = CommonExecInscritContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecInscritContrats);
    }

    /**
     * Method called to associate a CommonExecInscritContrat object to this object
     * through the CommonExecInscritContrat foreign key attribute.
     *
     * @param   CommonExecInscritContrat $l CommonExecInscritContrat
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function addCommonExecInscritContrat(CommonExecInscritContrat $l)
    {
        if ($this->collCommonExecInscritContrats === null) {
            $this->initCommonExecInscritContrats();
            $this->collCommonExecInscritContratsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecInscritContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecInscritContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecInscritContrat $commonExecInscritContrat The commonExecInscritContrat object to add.
     */
    protected function doAddCommonExecInscritContrat($commonExecInscritContrat)
    {
        $this->collCommonExecInscritContrats[]= $commonExecInscritContrat;
        $commonExecInscritContrat->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecInscritContrat $commonExecInscritContrat The commonExecInscritContrat object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function removeCommonExecInscritContrat($commonExecInscritContrat)
    {
        if ($this->getCommonExecInscritContrats()->contains($commonExecInscritContrat)) {
            $this->collCommonExecInscritContrats->remove($this->collCommonExecInscritContrats->search($commonExecInscritContrat));
            if (null === $this->commonExecInscritContratsScheduledForDeletion) {
                $this->commonExecInscritContratsScheduledForDeletion = clone $this->collCommonExecInscritContrats;
                $this->commonExecInscritContratsScheduledForDeletion->clear();
            }
            $this->commonExecInscritContratsScheduledForDeletion[]= clone $commonExecInscritContrat;
            $commonExecInscritContrat->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecInscritContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecInscritContrat[] List of CommonExecInscritContrat objects
     */
    public function getCommonExecInscritContratsJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecInscritContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecInscritContrats($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecInscritContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecInscritContrat[] List of CommonExecInscritContrat objects
     */
    public function getCommonExecInscritContratsJoinCommonEntreprise($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecInscritContratQuery::create(null, $criteria);
        $query->joinWith('CommonEntreprise', $join_behavior);

        return $this->getCommonExecInscritContrats($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecInscritContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecInscritContrat[] List of CommonExecInscritContrat objects
     */
    public function getCommonExecInscritContratsJoinCommonInscrit($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecInscritContratQuery::create(null, $criteria);
        $query->joinWith('CommonInscrit', $join_behavior);

        return $this->getCommonExecInscritContrats($query, $con);
    }

    /**
     * Clears out the collCommonExecLivrableContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecLivrableContrats(PropelCollection $commonExecLivrableContrats, PropelPDO $con = null)
    {
        $commonExecLivrableContratsToDelete = $this->getCommonExecLivrableContrats(new Criteria(), $con)->diff($commonExecLivrableContrats);


        $this->commonExecLivrableContratsScheduledForDeletion = $commonExecLivrableContratsToDelete;

        foreach ($commonExecLivrableContratsToDelete as $commonExecLivrableContratRemoved) {
            $commonExecLivrableContratRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecLivrableContrats);
    }

    /**
     * Method called to associate a CommonExecLivrableContrat object to this object
     * through the CommonExecLivrableContrat foreign key attribute.
     *
     * @param   CommonExecLivrableContrat $l CommonExecLivrableContrat
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecLivrableContrat->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecLivrableContrat $commonExecLivrableContrat The commonExecLivrableContrat object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecLivrableContrat->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecLivrableContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecLivrableContrat[] List of CommonExecLivrableContrat objects
     */
    public function getCommonExecLivrableContratsJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecLivrableContratQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonExecLivrableContrats($query, $con);
    }

    /**
     * Clears out the collCommonExecPhases collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
     * @see        addCommonExecPhases()
     */
    public function clearCommonExecPhases()
    {
        $this->collCommonExecPhases = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPhasesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPhases collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPhases($v = true)
    {
        $this->collCommonExecPhasesPartial = $v;
    }

    /**
     * Initializes the collCommonExecPhases collection.
     *
     * By default this just sets the collCommonExecPhases collection to an empty array (like clearcollCommonExecPhases());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPhases($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPhases && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPhases = new PropelObjectCollection();
        $this->collCommonExecPhases->setModel('CommonExecPhase');
    }

    /**
     * Gets an array of CommonExecPhase objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPhase[] List of CommonExecPhase objects
     * @throws PropelException
     */
    public function getCommonExecPhases($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPhasesPartial && !$this->isNew();
        if (null === $this->collCommonExecPhases || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPhases) {
                // return empty collection
                $this->initCommonExecPhases();
            } else {
                $collCommonExecPhases = CommonExecPhaseQuery::create(null, $criteria)
                    ->filterByCommonExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPhasesPartial && count($collCommonExecPhases)) {
                      $this->initCommonExecPhases(false);

                      foreach ($collCommonExecPhases as $obj) {
                        if (false == $this->collCommonExecPhases->contains($obj)) {
                          $this->collCommonExecPhases->append($obj);
                        }
                      }

                      $this->collCommonExecPhasesPartial = true;
                    }

                    $collCommonExecPhases->getInternalIterator()->rewind();

                    return $collCommonExecPhases;
                }

                if ($partial && $this->collCommonExecPhases) {
                    foreach ($this->collCommonExecPhases as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPhases[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPhases = $collCommonExecPhases;
                $this->collCommonExecPhasesPartial = false;
            }
        }

        return $this->collCommonExecPhases;
    }

    /**
     * Sets a collection of CommonExecPhase objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPhases A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecPhases(PropelCollection $commonExecPhases, PropelPDO $con = null)
    {
        $commonExecPhasesToDelete = $this->getCommonExecPhases(new Criteria(), $con)->diff($commonExecPhases);


        $this->commonExecPhasesScheduledForDeletion = $commonExecPhasesToDelete;

        foreach ($commonExecPhasesToDelete as $commonExecPhaseRemoved) {
            $commonExecPhaseRemoved->setCommonExecContrat(null);
        }

        $this->collCommonExecPhases = null;
        foreach ($commonExecPhases as $commonExecPhase) {
            $this->addCommonExecPhase($commonExecPhase);
        }

        $this->collCommonExecPhases = $commonExecPhases;
        $this->collCommonExecPhasesPartial = false;

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
    public function countCommonExecPhases(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPhasesPartial && !$this->isNew();
        if (null === $this->collCommonExecPhases || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPhases) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPhases());
            }
            $query = CommonExecPhaseQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecPhases);
    }

    /**
     * Method called to associate a CommonExecPhase object to this object
     * through the CommonExecPhase foreign key attribute.
     *
     * @param   CommonExecPhase $l CommonExecPhase
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function addCommonExecPhase(CommonExecPhase $l)
    {
        if ($this->collCommonExecPhases === null) {
            $this->initCommonExecPhases();
            $this->collCommonExecPhasesPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPhases->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPhase($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPhase $commonExecPhase The commonExecPhase object to add.
     */
    protected function doAddCommonExecPhase($commonExecPhase)
    {
        $this->collCommonExecPhases[]= $commonExecPhase;
        $commonExecPhase->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecPhase $commonExecPhase The commonExecPhase object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function removeCommonExecPhase($commonExecPhase)
    {
        if ($this->getCommonExecPhases()->contains($commonExecPhase)) {
            $this->collCommonExecPhases->remove($this->collCommonExecPhases->search($commonExecPhase));
            if (null === $this->commonExecPhasesScheduledForDeletion) {
                $this->commonExecPhasesScheduledForDeletion = clone $this->collCommonExecPhases;
                $this->commonExecPhasesScheduledForDeletion->clear();
            }
            $this->commonExecPhasesScheduledForDeletion[]= clone $commonExecPhase;
            $commonExecPhase->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPhases from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPhase[] List of CommonExecPhase objects
     */
    public function getCommonExecPhasesJoinCommonAgentRelatedByIdAgentCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPhaseQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentCrea', $join_behavior);

        return $this->getCommonExecPhases($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPhases from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPhase[] List of CommonExecPhase objects
     */
    public function getCommonExecPhasesJoinCommonAgentRelatedByIdAgentModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPhaseQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentModif', $join_behavior);

        return $this->getCommonExecPhases($query, $con);
    }

    /**
     * Clears out the collCommonExecPieces collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecPieces(PropelCollection $commonExecPieces, PropelPDO $con = null)
    {
        $commonExecPiecesToDelete = $this->getCommonExecPieces(new Criteria(), $con)->diff($commonExecPieces);


        $this->commonExecPiecesScheduledForDeletion = $commonExecPiecesToDelete;

        foreach ($commonExecPiecesToDelete as $commonExecPieceRemoved) {
            $commonExecPieceRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecPieces);
    }

    /**
     * Method called to associate a CommonExecPiece object to this object
     * through the CommonExecPiece foreign key attribute.
     *
     * @param   CommonExecPiece $l CommonExecPiece
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecPiece->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecPiece $commonExecPiece The commonExecPiece object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecPiece->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieces from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPiece[] List of CommonExecPiece objects
     */
    public function getCommonExecPiecesJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonExecPieces($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieces from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecPieceAvenants(PropelCollection $commonExecPieceAvenants, PropelPDO $con = null)
    {
        $commonExecPieceAvenantsToDelete = $this->getCommonExecPieceAvenants(new Criteria(), $con)->diff($commonExecPieceAvenants);


        $this->commonExecPieceAvenantsScheduledForDeletion = $commonExecPieceAvenantsToDelete;

        foreach ($commonExecPieceAvenantsToDelete as $commonExecPieceAvenantRemoved) {
            $commonExecPieceAvenantRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceAvenants);
    }

    /**
     * Method called to associate a CommonExecPieceAvenant object to this object
     * through the CommonExecPieceAvenant foreign key attribute.
     *
     * @param   CommonExecPieceAvenant $l CommonExecPieceAvenant
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecPieceAvenant->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecPieceAvenant $commonExecPieceAvenant The commonExecPieceAvenant object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecPieceAvenant->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieceAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieceAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Clears out the collCommonExecPieceContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecPieceContrats(PropelCollection $commonExecPieceContrats, PropelPDO $con = null)
    {
        $commonExecPieceContratsToDelete = $this->getCommonExecPieceContrats(new Criteria(), $con)->diff($commonExecPieceContrats);


        $this->commonExecPieceContratsScheduledForDeletion = $commonExecPieceContratsToDelete;

        foreach ($commonExecPieceContratsToDelete as $commonExecPieceContratRemoved) {
            $commonExecPieceContratRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceContrats);
    }

    /**
     * Method called to associate a CommonExecPieceContrat object to this object
     * through the CommonExecPieceContrat foreign key attribute.
     *
     * @param   CommonExecPieceContrat $l CommonExecPieceContrat
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecPieceContrat->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecPieceContrat $commonExecPieceContrat The commonExecPieceContrat object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecPieceContrat->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieceContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceContrat[] List of CommonExecPieceContrat objects
     */
    public function getCommonExecPieceContratsJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceContratQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonExecPieceContrats($query, $con);
    }

    /**
     * Clears out the collCommonExecPieceDossierpaiements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecPieceDossierpaiements(PropelCollection $commonExecPieceDossierpaiements, PropelPDO $con = null)
    {
        $commonExecPieceDossierpaiementsToDelete = $this->getCommonExecPieceDossierpaiements(new Criteria(), $con)->diff($commonExecPieceDossierpaiements);


        $this->commonExecPieceDossierpaiementsScheduledForDeletion = $commonExecPieceDossierpaiementsToDelete;

        foreach ($commonExecPieceDossierpaiementsToDelete as $commonExecPieceDossierpaiementRemoved) {
            $commonExecPieceDossierpaiementRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceDossierpaiements);
    }

    /**
     * Method called to associate a CommonExecPieceDossierpaiement object to this object
     * through the CommonExecPieceDossierpaiement foreign key attribute.
     *
     * @param   CommonExecPieceDossierpaiement $l CommonExecPieceDossierpaiement
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecPieceDossierpaiement->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecPieceDossierpaiement $commonExecPieceDossierpaiement The commonExecPieceDossierpaiement object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecPieceDossierpaiement->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieceDossierpaiements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieceDossierpaiements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceDossierpaiement[] List of CommonExecPieceDossierpaiement objects
     */
    public function getCommonExecPieceDossierpaiementsJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceDossierpaiementQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonExecPieceDossierpaiements($query, $con);
    }

    /**
     * Clears out the collCommonExecPieceEvenements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecPieceEvenements(PropelCollection $commonExecPieceEvenements, PropelPDO $con = null)
    {
        $commonExecPieceEvenementsToDelete = $this->getCommonExecPieceEvenements(new Criteria(), $con)->diff($commonExecPieceEvenements);


        $this->commonExecPieceEvenementsScheduledForDeletion = $commonExecPieceEvenementsToDelete;

        foreach ($commonExecPieceEvenementsToDelete as $commonExecPieceEvenementRemoved) {
            $commonExecPieceEvenementRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceEvenements);
    }

    /**
     * Method called to associate a CommonExecPieceEvenement object to this object
     * through the CommonExecPieceEvenement foreign key attribute.
     *
     * @param   CommonExecPieceEvenement $l CommonExecPieceEvenement
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecPieceEvenement->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecPieceEvenement $commonExecPieceEvenement The commonExecPieceEvenement object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecPieceEvenement->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieceEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceEvenement[] List of CommonExecPieceEvenement objects
     */
    public function getCommonExecPieceEvenementsJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonExecPieceEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieceEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieceEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecPieceFactures(PropelCollection $commonExecPieceFactures, PropelPDO $con = null)
    {
        $commonExecPieceFacturesToDelete = $this->getCommonExecPieceFactures(new Criteria(), $con)->diff($commonExecPieceFactures);


        $this->commonExecPieceFacturesScheduledForDeletion = $commonExecPieceFacturesToDelete;

        foreach ($commonExecPieceFacturesToDelete as $commonExecPieceFactureRemoved) {
            $commonExecPieceFactureRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceFactures);
    }

    /**
     * Method called to associate a CommonExecPieceFacture object to this object
     * through the CommonExecPieceFacture foreign key attribute.
     *
     * @param   CommonExecPieceFacture $l CommonExecPieceFacture
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecPieceFacture->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecPieceFacture $commonExecPieceFacture The commonExecPieceFacture object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecPieceFacture->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieceFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPieceFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Clears out the collCommonExecPrixs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
     * @see        addCommonExecPrixs()
     */
    public function clearCommonExecPrixs()
    {
        $this->collCommonExecPrixs = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPrixsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPrixs collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPrixs($v = true)
    {
        $this->collCommonExecPrixsPartial = $v;
    }

    /**
     * Initializes the collCommonExecPrixs collection.
     *
     * By default this just sets the collCommonExecPrixs collection to an empty array (like clearcollCommonExecPrixs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPrixs($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPrixs && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPrixs = new PropelObjectCollection();
        $this->collCommonExecPrixs->setModel('CommonExecPrix');
    }

    /**
     * Gets an array of CommonExecPrix objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPrix[] List of CommonExecPrix objects
     * @throws PropelException
     */
    public function getCommonExecPrixs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPrixsPartial && !$this->isNew();
        if (null === $this->collCommonExecPrixs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPrixs) {
                // return empty collection
                $this->initCommonExecPrixs();
            } else {
                $collCommonExecPrixs = CommonExecPrixQuery::create(null, $criteria)
                    ->filterByCommonExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPrixsPartial && count($collCommonExecPrixs)) {
                      $this->initCommonExecPrixs(false);

                      foreach ($collCommonExecPrixs as $obj) {
                        if (false == $this->collCommonExecPrixs->contains($obj)) {
                          $this->collCommonExecPrixs->append($obj);
                        }
                      }

                      $this->collCommonExecPrixsPartial = true;
                    }

                    $collCommonExecPrixs->getInternalIterator()->rewind();

                    return $collCommonExecPrixs;
                }

                if ($partial && $this->collCommonExecPrixs) {
                    foreach ($this->collCommonExecPrixs as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPrixs[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPrixs = $collCommonExecPrixs;
                $this->collCommonExecPrixsPartial = false;
            }
        }

        return $this->collCommonExecPrixs;
    }

    /**
     * Sets a collection of CommonExecPrix objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPrixs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecPrixs(PropelCollection $commonExecPrixs, PropelPDO $con = null)
    {
        $commonExecPrixsToDelete = $this->getCommonExecPrixs(new Criteria(), $con)->diff($commonExecPrixs);


        $this->commonExecPrixsScheduledForDeletion = $commonExecPrixsToDelete;

        foreach ($commonExecPrixsToDelete as $commonExecPrixRemoved) {
            $commonExecPrixRemoved->setCommonExecContrat(null);
        }

        $this->collCommonExecPrixs = null;
        foreach ($commonExecPrixs as $commonExecPrix) {
            $this->addCommonExecPrix($commonExecPrix);
        }

        $this->collCommonExecPrixs = $commonExecPrixs;
        $this->collCommonExecPrixsPartial = false;

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
    public function countCommonExecPrixs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPrixsPartial && !$this->isNew();
        if (null === $this->collCommonExecPrixs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPrixs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPrixs());
            }
            $query = CommonExecPrixQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecPrixs);
    }

    /**
     * Method called to associate a CommonExecPrix object to this object
     * through the CommonExecPrix foreign key attribute.
     *
     * @param   CommonExecPrix $l CommonExecPrix
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function addCommonExecPrix(CommonExecPrix $l)
    {
        if ($this->collCommonExecPrixs === null) {
            $this->initCommonExecPrixs();
            $this->collCommonExecPrixsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPrixs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPrix($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPrix $commonExecPrix The commonExecPrix object to add.
     */
    protected function doAddCommonExecPrix($commonExecPrix)
    {
        $this->collCommonExecPrixs[]= $commonExecPrix;
        $commonExecPrix->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecPrix $commonExecPrix The commonExecPrix object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function removeCommonExecPrix($commonExecPrix)
    {
        if ($this->getCommonExecPrixs()->contains($commonExecPrix)) {
            $this->collCommonExecPrixs->remove($this->collCommonExecPrixs->search($commonExecPrix));
            if (null === $this->commonExecPrixsScheduledForDeletion) {
                $this->commonExecPrixsScheduledForDeletion = clone $this->collCommonExecPrixs;
                $this->commonExecPrixsScheduledForDeletion->clear();
            }
            $this->commonExecPrixsScheduledForDeletion[]= clone $commonExecPrix;
            $commonExecPrix->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPrix[] List of CommonExecPrix objects
     */
    public function getCommonExecPrixsJoinCommonAgentRelatedByIdAgentCrea($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPrixQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentCrea', $join_behavior);

        return $this->getCommonExecPrixs($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPrix[] List of CommonExecPrix objects
     */
    public function getCommonExecPrixsJoinCommonAgentRelatedByIdAgentModif($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPrixQuery::create(null, $criteria);
        $query->joinWith('CommonAgentRelatedByIdAgentModif', $join_behavior);

        return $this->getCommonExecPrixs($query, $con);
    }

    /**
     * Clears out the collCommonExecPrixAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecPrixAvenants(PropelCollection $commonExecPrixAvenants, PropelPDO $con = null)
    {
        $commonExecPrixAvenantsToDelete = $this->getCommonExecPrixAvenants(new Criteria(), $con)->diff($commonExecPrixAvenants);


        $this->commonExecPrixAvenantsScheduledForDeletion = $commonExecPrixAvenantsToDelete;

        foreach ($commonExecPrixAvenantsToDelete as $commonExecPrixAvenantRemoved) {
            $commonExecPrixAvenantRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecPrixAvenants);
    }

    /**
     * Method called to associate a CommonExecPrixAvenant object to this object
     * through the CommonExecPrixAvenant foreign key attribute.
     *
     * @param   CommonExecPrixAvenant $l CommonExecPrixAvenant
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecPrixAvenant->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecPrixAvenant $commonExecPrixAvenant The commonExecPrixAvenant object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecPrixAvenant->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPrixAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecPrixAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Clears out the collCommonExecRepartitions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecContrat The current object (for fluent API support)
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
     * If this CommonExecContrat is new, it will return
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
                    ->filterByCommonExecContrat($this)
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
     * @return CommonExecContrat The current object (for fluent API support)
     */
    public function setCommonExecRepartitions(PropelCollection $commonExecRepartitions, PropelPDO $con = null)
    {
        $commonExecRepartitionsToDelete = $this->getCommonExecRepartitions(new Criteria(), $con)->diff($commonExecRepartitions);


        $this->commonExecRepartitionsScheduledForDeletion = $commonExecRepartitionsToDelete;

        foreach ($commonExecRepartitionsToDelete as $commonExecRepartitionRemoved) {
            $commonExecRepartitionRemoved->setCommonExecContrat(null);
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
                ->filterByCommonExecContrat($this)
                ->count($con);
        }

        return count($this->collCommonExecRepartitions);
    }

    /**
     * Method called to associate a CommonExecRepartition object to this object
     * through the CommonExecRepartition foreign key attribute.
     *
     * @param   CommonExecRepartition $l CommonExecRepartition
     * @return CommonExecContrat The current object (for fluent API support)
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
        $commonExecRepartition->setCommonExecContrat($this);
    }

    /**
     * @param	CommonExecRepartition $commonExecRepartition The commonExecRepartition object to remove.
     * @return CommonExecContrat The current object (for fluent API support)
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
            $commonExecRepartition->setCommonExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecContrat is new, it will return
     * an empty collection; or if this CommonExecContrat has previously
     * been saved, it will retrieve related CommonExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecContrat.
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
        $this->id_contrat = null;
        $this->consultation_ref = null;
        $this->organisme = null;
        $this->id_decision_enveloppe = null;
        $this->numero = null;
        $this->statut = null;
        $this->id_type_contrat = null;
        $this->id_type_structure = null;
        $this->objet = null;
        $this->num_consultation = null;
        $this->id_nature_prestation = null;
        $this->id_service = null;
        $this->id_service_gerant = null;
        $this->id_agent_gestion = null;
        $this->reconductible = null;
        $this->nombre_reconduction = null;
        $this->montant_ht = null;
        $this->montant_ttc = null;
        $this->montant_min = null;
        $this->montant_max = null;
        $this->montant_min_ttc = null;
        $this->montant_max_ttc = null;
        $this->montant_facture_ht = null;
        $this->montant_facture_ttc = null;
        $this->montant_paye_ht = null;
        $this->montant_paye_ttc = null;
        $this->montant_caution = null;
        $this->pourcentage_caution = null;
        $this->retenue_garantie = null;
        $this->pourcentage_retenue_garantie = null;
        $this->montant_retenu_garantie = null;
        $this->pourcentage_prelevement_garantie = null;
        $this->montant_avance = null;
        $this->delai_partiel = null;
        $this->delai_contrat = null;
        $this->unite_delai_contrat = null;
        $this->date_approbation = null;
        $this->date_notification_approbation = null;
        $this->date_fin = null;
        $this->date_crea = null;
        $this->id_agent_crea = null;
        $this->date_modif = null;
        $this->id_agent_modif = null;
        $this->delai_reel = null;
        $this->depassement = null;
        $this->date_maj_delai_reel = null;
        $this->id_parapheur = null;
        $this->statut_parapheur = null;
        $this->date_cloture_parapheur = null;
        $this->garantie = null;
        $this->duree_garantie = null;
        $this->unite_garantie = null;
        $this->type_penalite = null;
        $this->pourcentage_penalite = null;
        $this->montant_penalite = null;
        $this->plafond_penalite = null;
        $this->mode_passation = null;
        $this->lie_marche = null;
        $this->num_chapeau = null;
        $this->os_phase = null;
        $this->prestation_demande = null;
        $this->forfait_jh = null;
        $this->quantite_jh = null;
        $this->nature_marche = null;
        $this->date_debut = null;
        $this->plurianuelle = null;
        $this->trancheconditionnelle = null;
        $this->id_agent_cr = null;
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
            if ($this->collCommonExecAgentContrats) {
                foreach ($this->collCommonExecAgentContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecAvenants) {
                foreach ($this->collCommonExecAvenants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecContacts) {
                foreach ($this->collCommonExecContacts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecContractants) {
                foreach ($this->collCommonExecContractants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecDossierPaiements) {
                foreach ($this->collCommonExecDossierPaiements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecEvenements) {
                foreach ($this->collCommonExecEvenements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecFactures) {
                foreach ($this->collCommonExecFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecHistoriquePrixs) {
                foreach ($this->collCommonExecHistoriquePrixs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecInscritContrats) {
                foreach ($this->collCommonExecInscritContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecLivrableContrats) {
                foreach ($this->collCommonExecLivrableContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPhases) {
                foreach ($this->collCommonExecPhases as $o) {
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
            if ($this->collCommonExecPrixs) {
                foreach ($this->collCommonExecPrixs as $o) {
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
            if ($this->aCommonAgentRelatedByIdAgentGestion instanceof Persistent) {
              $this->aCommonAgentRelatedByIdAgentGestion->clearAllReferences($deep);
            }
            if ($this->aCommonAgentRelatedByIdAgentModif instanceof Persistent) {
              $this->aCommonAgentRelatedByIdAgentModif->clearAllReferences($deep);
            }
            if ($this->aCommonCategorieConsultation instanceof Persistent) {
              $this->aCommonCategorieConsultation->clearAllReferences($deep);
            }
            if ($this->aCommonExecTypeContrat instanceof Persistent) {
              $this->aCommonExecTypeContrat->clearAllReferences($deep);
            }
            if ($this->aCommonExecTypeStructure instanceof Persistent) {
              $this->aCommonExecTypeStructure->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecAgentContrats instanceof PropelCollection) {
            $this->collCommonExecAgentContrats->clearIterator();
        }
        $this->collCommonExecAgentContrats = null;
        if ($this->collCommonExecAvenants instanceof PropelCollection) {
            $this->collCommonExecAvenants->clearIterator();
        }
        $this->collCommonExecAvenants = null;
        if ($this->collCommonExecContacts instanceof PropelCollection) {
            $this->collCommonExecContacts->clearIterator();
        }
        $this->collCommonExecContacts = null;
        if ($this->collCommonExecContractants instanceof PropelCollection) {
            $this->collCommonExecContractants->clearIterator();
        }
        $this->collCommonExecContractants = null;
        if ($this->collCommonExecDossierPaiements instanceof PropelCollection) {
            $this->collCommonExecDossierPaiements->clearIterator();
        }
        $this->collCommonExecDossierPaiements = null;
        if ($this->collCommonExecEvenements instanceof PropelCollection) {
            $this->collCommonExecEvenements->clearIterator();
        }
        $this->collCommonExecEvenements = null;
        if ($this->collCommonExecFactures instanceof PropelCollection) {
            $this->collCommonExecFactures->clearIterator();
        }
        $this->collCommonExecFactures = null;
        if ($this->collCommonExecHistoriquePrixs instanceof PropelCollection) {
            $this->collCommonExecHistoriquePrixs->clearIterator();
        }
        $this->collCommonExecHistoriquePrixs = null;
        if ($this->collCommonExecInscritContrats instanceof PropelCollection) {
            $this->collCommonExecInscritContrats->clearIterator();
        }
        $this->collCommonExecInscritContrats = null;
        if ($this->collCommonExecLivrableContrats instanceof PropelCollection) {
            $this->collCommonExecLivrableContrats->clearIterator();
        }
        $this->collCommonExecLivrableContrats = null;
        if ($this->collCommonExecPhases instanceof PropelCollection) {
            $this->collCommonExecPhases->clearIterator();
        }
        $this->collCommonExecPhases = null;
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
        if ($this->collCommonExecPrixs instanceof PropelCollection) {
            $this->collCommonExecPrixs->clearIterator();
        }
        $this->collCommonExecPrixs = null;
        if ($this->collCommonExecPrixAvenants instanceof PropelCollection) {
            $this->collCommonExecPrixAvenants->clearIterator();
        }
        $this->collCommonExecPrixAvenants = null;
        if ($this->collCommonExecRepartitions instanceof PropelCollection) {
            $this->collCommonExecRepartitions->clearIterator();
        }
        $this->collCommonExecRepartitions = null;
        $this->aCommonAgentRelatedByIdAgentCrea = null;
        $this->aCommonAgentRelatedByIdAgentGestion = null;
        $this->aCommonAgentRelatedByIdAgentModif = null;
        $this->aCommonCategorieConsultation = null;
        $this->aCommonExecTypeContrat = null;
        $this->aCommonExecTypeStructure = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecContratPeer::DEFAULT_STRING_FORMAT);
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
