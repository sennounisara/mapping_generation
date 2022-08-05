<?php


/**
 * Base class that represents a row from the 'exec_contrat' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseExecContrat extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ExecContratPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ExecContratPeer
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
     * The value for the devise field.
     * @var        string
     */
    protected $devise;

    /**
     * The value for the id_contrat_source field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $id_contrat_source;

    /**
     * @var        ExecTypeContrat
     */
    protected $aExecTypeContrat;

    /**
     * @var        ExecTypeStructure
     */
    protected $aExecTypeStructure;

    /**
     * @var        PropelObjectCollection|ExecAgentContrat[] Collection to store aggregation of ExecAgentContrat objects.
     */
    protected $collExecAgentContrats;
    protected $collExecAgentContratsPartial;

    /**
     * @var        PropelObjectCollection|ExecAvenant[] Collection to store aggregation of ExecAvenant objects.
     */
    protected $collExecAvenants;
    protected $collExecAvenantsPartial;

    /**
     * @var        PropelObjectCollection|ExecContact[] Collection to store aggregation of ExecContact objects.
     */
    protected $collExecContacts;
    protected $collExecContactsPartial;

    /**
     * @var        PropelObjectCollection|ExecContractant[] Collection to store aggregation of ExecContractant objects.
     */
    protected $collExecContractants;
    protected $collExecContractantsPartial;

    /**
     * @var        PropelObjectCollection|ExecDossierPaiement[] Collection to store aggregation of ExecDossierPaiement objects.
     */
    protected $collExecDossierPaiements;
    protected $collExecDossierPaiementsPartial;

    /**
     * @var        PropelObjectCollection|ExecEvenement[] Collection to store aggregation of ExecEvenement objects.
     */
    protected $collExecEvenements;
    protected $collExecEvenementsPartial;

    /**
     * @var        PropelObjectCollection|ExecFacture[] Collection to store aggregation of ExecFacture objects.
     */
    protected $collExecFactures;
    protected $collExecFacturesPartial;

    /**
     * @var        PropelObjectCollection|ExecHistoriquePrix[] Collection to store aggregation of ExecHistoriquePrix objects.
     */
    protected $collExecHistoriquePrixs;
    protected $collExecHistoriquePrixsPartial;

    /**
     * @var        PropelObjectCollection|ExecInscritContrat[] Collection to store aggregation of ExecInscritContrat objects.
     */
    protected $collExecInscritContrats;
    protected $collExecInscritContratsPartial;

    /**
     * @var        PropelObjectCollection|ExecLivrableContrat[] Collection to store aggregation of ExecLivrableContrat objects.
     */
    protected $collExecLivrableContrats;
    protected $collExecLivrableContratsPartial;

    /**
     * @var        PropelObjectCollection|ExecPhase[] Collection to store aggregation of ExecPhase objects.
     */
    protected $collExecPhases;
    protected $collExecPhasesPartial;

    /**
     * @var        PropelObjectCollection|ExecPiece[] Collection to store aggregation of ExecPiece objects.
     */
    protected $collExecPieces;
    protected $collExecPiecesPartial;

    /**
     * @var        PropelObjectCollection|ExecPieceAvenant[] Collection to store aggregation of ExecPieceAvenant objects.
     */
    protected $collExecPieceAvenants;
    protected $collExecPieceAvenantsPartial;

    /**
     * @var        PropelObjectCollection|ExecPieceContrat[] Collection to store aggregation of ExecPieceContrat objects.
     */
    protected $collExecPieceContrats;
    protected $collExecPieceContratsPartial;

    /**
     * @var        PropelObjectCollection|ExecPieceDossierpaiement[] Collection to store aggregation of ExecPieceDossierpaiement objects.
     */
    protected $collExecPieceDossierpaiements;
    protected $collExecPieceDossierpaiementsPartial;

    /**
     * @var        PropelObjectCollection|ExecPieceEvenement[] Collection to store aggregation of ExecPieceEvenement objects.
     */
    protected $collExecPieceEvenements;
    protected $collExecPieceEvenementsPartial;

    /**
     * @var        PropelObjectCollection|ExecPieceFacture[] Collection to store aggregation of ExecPieceFacture objects.
     */
    protected $collExecPieceFactures;
    protected $collExecPieceFacturesPartial;

    /**
     * @var        PropelObjectCollection|ExecPrix[] Collection to store aggregation of ExecPrix objects.
     */
    protected $collExecPrixs;
    protected $collExecPrixsPartial;

    /**
     * @var        PropelObjectCollection|ExecPrixAvenant[] Collection to store aggregation of ExecPrixAvenant objects.
     */
    protected $collExecPrixAvenants;
    protected $collExecPrixAvenantsPartial;

    /**
     * @var        PropelObjectCollection|ExecRepartition[] Collection to store aggregation of ExecRepartition objects.
     */
    protected $collExecRepartitions;
    protected $collExecRepartitionsPartial;

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
    protected $ExecAgentContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecAvenantsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecContactsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecContractantsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecDossierPaiementsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecEvenementsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecHistoriquePrixsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecInscritContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecLivrableContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecPhasesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecPiecesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecPieceAvenantsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecPieceContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecPieceDossierpaiementsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecPieceEvenementsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecPieceFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecPrixsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecPrixAvenantsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ExecRepartitionsScheduledForDeletion = null;

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
        $this->id_contrat_source = 1;
    }

    /**
     * Initializes internal state of BaseExecContrat object.
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
     * Get the [devise] column value.
     * 
     * @return string
     */
    public function getDevise()
    {

        return $this->devise;
    }

    /**
     * Get the [id_contrat_source] column value.
     * 
     * @return int
     */
    public function getIdContratSource()
    {

        return $this->id_contrat_source;
    }

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_CONTRAT;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = ExecContratPeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = ExecContratPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_decision_enveloppe] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdDecisionEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_decision_enveloppe !== $v) {
            $this->id_decision_enveloppe = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_DECISION_ENVELOPPE;
        }


        return $this;
    } // setIdDecisionEnveloppe()

    /**
     * Set the value of [numero] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = ExecContratPeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = ExecContratPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [id_type_contrat] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdTypeContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_contrat !== $v) {
            $this->id_type_contrat = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_TYPE_CONTRAT;
        }

        if ($this->aExecTypeContrat !== null && $this->aExecTypeContrat->getId() !== $v) {
            $this->aExecTypeContrat = null;
        }


        return $this;
    } // setIdTypeContrat()

    /**
     * Set the value of [id_type_structure] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdTypeStructure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_structure !== $v) {
            $this->id_type_structure = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_TYPE_STRUCTURE;
        }

        if ($this->aExecTypeStructure !== null && $this->aExecTypeStructure->getId() !== $v) {
            $this->aExecTypeStructure = null;
        }


        return $this;
    } // setIdTypeStructure()

    /**
     * Set the value of [objet] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet !== $v) {
            $this->objet = $v;
            $this->modifiedColumns[] = ExecContratPeer::OBJET;
        }


        return $this;
    } // setObjet()

    /**
     * Set the value of [num_consultation] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setNumConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_consultation !== $v) {
            $this->num_consultation = $v;
            $this->modifiedColumns[] = ExecContratPeer::NUM_CONSULTATION;
        }


        return $this;
    } // setNumConsultation()

    /**
     * Set the value of [id_nature_prestation] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdNaturePrestation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_nature_prestation !== $v) {
            $this->id_nature_prestation = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_NATURE_PRESTATION;
        }


        return $this;
    } // setIdNaturePrestation()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [id_service_gerant] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdServiceGerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service_gerant !== $v) {
            $this->id_service_gerant = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_SERVICE_GERANT;
        }


        return $this;
    } // setIdServiceGerant()

    /**
     * Set the value of [id_agent_gestion] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdAgentGestion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_gestion !== $v) {
            $this->id_agent_gestion = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_AGENT_GESTION;
        }


        return $this;
    } // setIdAgentGestion()

    /**
     * Set the value of [reconductible] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setReconductible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reconductible !== $v) {
            $this->reconductible = $v;
            $this->modifiedColumns[] = ExecContratPeer::RECONDUCTIBLE;
        }


        return $this;
    } // setReconductible()

    /**
     * Set the value of [nombre_reconduction] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setNombreReconduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nombre_reconduction !== $v) {
            $this->nombre_reconduction = $v;
            $this->modifiedColumns[] = ExecContratPeer::NOMBRE_RECONDUCTION;
        }


        return $this;
    } // setNombreReconduction()

    /**
     * Set the value of [montant_ht] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_ht !== $v) {
            $this->montant_ht = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_HT;
        }


        return $this;
    } // setMontantHt()

    /**
     * Set the value of [montant_ttc] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_ttc !== $v) {
            $this->montant_ttc = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_TTC;
        }


        return $this;
    } // setMontantTtc()

    /**
     * Set the value of [montant_min] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_min !== $v) {
            $this->montant_min = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_MIN;
        }


        return $this;
    } // setMontantMin()

    /**
     * Set the value of [montant_max] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_max !== $v) {
            $this->montant_max = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_MAX;
        }


        return $this;
    } // setMontantMax()

    /**
     * Set the value of [montant_min_ttc] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantMinTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_min_ttc !== $v) {
            $this->montant_min_ttc = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_MIN_TTC;
        }


        return $this;
    } // setMontantMinTtc()

    /**
     * Set the value of [montant_max_ttc] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantMaxTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_max_ttc !== $v) {
            $this->montant_max_ttc = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_MAX_TTC;
        }


        return $this;
    } // setMontantMaxTtc()

    /**
     * Set the value of [montant_facture_ht] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantFactureHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_facture_ht !== $v) {
            $this->montant_facture_ht = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_FACTURE_HT;
        }


        return $this;
    } // setMontantFactureHt()

    /**
     * Set the value of [montant_facture_ttc] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantFactureTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_facture_ttc !== $v) {
            $this->montant_facture_ttc = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_FACTURE_TTC;
        }


        return $this;
    } // setMontantFactureTtc()

    /**
     * Set the value of [montant_paye_ht] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantPayeHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_paye_ht !== $v) {
            $this->montant_paye_ht = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_PAYE_HT;
        }


        return $this;
    } // setMontantPayeHt()

    /**
     * Set the value of [montant_paye_ttc] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantPayeTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_paye_ttc !== $v) {
            $this->montant_paye_ttc = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_PAYE_TTC;
        }


        return $this;
    } // setMontantPayeTtc()

    /**
     * Set the value of [montant_caution] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_caution !== $v) {
            $this->montant_caution = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_CAUTION;
        }


        return $this;
    } // setMontantCaution()

    /**
     * Set the value of [pourcentage_caution] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setPourcentageCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pourcentage_caution !== $v) {
            $this->pourcentage_caution = $v;
            $this->modifiedColumns[] = ExecContratPeer::POURCENTAGE_CAUTION;
        }


        return $this;
    } // setPourcentageCaution()

    /**
     * Set the value of [retenue_garantie] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setRetenueGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->retenue_garantie !== $v) {
            $this->retenue_garantie = $v;
            $this->modifiedColumns[] = ExecContratPeer::RETENUE_GARANTIE;
        }


        return $this;
    } // setRetenueGarantie()

    /**
     * Set the value of [pourcentage_retenue_garantie] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setPourcentageRetenueGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pourcentage_retenue_garantie !== $v) {
            $this->pourcentage_retenue_garantie = $v;
            $this->modifiedColumns[] = ExecContratPeer::POURCENTAGE_RETENUE_GARANTIE;
        }


        return $this;
    } // setPourcentageRetenueGarantie()

    /**
     * Set the value of [montant_retenu_garantie] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantRetenuGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_retenu_garantie !== $v) {
            $this->montant_retenu_garantie = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_RETENU_GARANTIE;
        }


        return $this;
    } // setMontantRetenuGarantie()

    /**
     * Set the value of [pourcentage_prelevement_garantie] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setPourcentagePrelevementGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pourcentage_prelevement_garantie !== $v) {
            $this->pourcentage_prelevement_garantie = $v;
            $this->modifiedColumns[] = ExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE;
        }


        return $this;
    } // setPourcentagePrelevementGarantie()

    /**
     * Set the value of [montant_avance] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantAvance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_avance !== $v) {
            $this->montant_avance = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_AVANCE;
        }


        return $this;
    } // setMontantAvance()

    /**
     * Set the value of [delai_partiel] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDelaiPartiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_partiel !== $v) {
            $this->delai_partiel = $v;
            $this->modifiedColumns[] = ExecContratPeer::DELAI_PARTIEL;
        }


        return $this;
    } // setDelaiPartiel()

    /**
     * Set the value of [delai_contrat] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDelaiContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->delai_contrat !== $v) {
            $this->delai_contrat = $v;
            $this->modifiedColumns[] = ExecContratPeer::DELAI_CONTRAT;
        }


        return $this;
    } // setDelaiContrat()

    /**
     * Set the value of [unite_delai_contrat] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setUniteDelaiContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unite_delai_contrat !== $v) {
            $this->unite_delai_contrat = $v;
            $this->modifiedColumns[] = ExecContratPeer::UNITE_DELAI_CONTRAT;
        }


        return $this;
    } // setUniteDelaiContrat()

    /**
     * Sets the value of [date_approbation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDateApprobation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_approbation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_approbation !== null && $tmpDt = new DateTime($this->date_approbation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_approbation = $newDateAsString;
                $this->modifiedColumns[] = ExecContratPeer::DATE_APPROBATION;
            }
        } // if either are not null


        return $this;
    } // setDateApprobation()

    /**
     * Sets the value of [date_notification_approbation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDateNotificationApprobation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_notification_approbation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_notification_approbation !== null && $tmpDt = new DateTime($this->date_notification_approbation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_notification_approbation = $newDateAsString;
                $this->modifiedColumns[] = ExecContratPeer::DATE_NOTIFICATION_APPROBATION;
            }
        } // if either are not null


        return $this;
    } // setDateNotificationApprobation()

    /**
     * Sets the value of [date_fin] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDateFin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_fin !== null || $dt !== null) {
            $currentDateAsString = ($this->date_fin !== null && $tmpDt = new DateTime($this->date_fin)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_fin = $newDateAsString;
                $this->modifiedColumns[] = ExecContratPeer::DATE_FIN;
            }
        } // if either are not null


        return $this;
    } // setDateFin()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = ExecContratPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_AGENT_CREA;
        }


        return $this;
    } // setIdAgentCrea()

    /**
     * Sets the value of [date_modif] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = ExecContratPeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

    /**
     * Set the value of [id_agent_modif] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdAgentModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_modif !== $v) {
            $this->id_agent_modif = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_AGENT_MODIF;
        }


        return $this;
    } // setIdAgentModif()

    /**
     * Set the value of [delai_reel] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDelaiReel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->delai_reel !== $v) {
            $this->delai_reel = $v;
            $this->modifiedColumns[] = ExecContratPeer::DELAI_REEL;
        }


        return $this;
    } // setDelaiReel()

    /**
     * Set the value of [depassement] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDepassement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depassement !== $v) {
            $this->depassement = $v;
            $this->modifiedColumns[] = ExecContratPeer::DEPASSEMENT;
        }


        return $this;
    } // setDepassement()

    /**
     * Sets the value of [date_maj_delai_reel] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDateMajDelaiReel($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_maj_delai_reel !== null || $dt !== null) {
            $currentDateAsString = ($this->date_maj_delai_reel !== null && $tmpDt = new DateTime($this->date_maj_delai_reel)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_maj_delai_reel = $newDateAsString;
                $this->modifiedColumns[] = ExecContratPeer::DATE_MAJ_DELAI_REEL;
            }
        } // if either are not null


        return $this;
    } // setDateMajDelaiReel()

    /**
     * Set the value of [id_parapheur] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_parapheur !== $v) {
            $this->id_parapheur = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_PARAPHEUR;
        }


        return $this;
    } // setIdParapheur()

    /**
     * Set the value of [statut_parapheur] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setStatutParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_parapheur !== $v) {
            $this->statut_parapheur = $v;
            $this->modifiedColumns[] = ExecContratPeer::STATUT_PARAPHEUR;
        }


        return $this;
    } // setStatutParapheur()

    /**
     * Sets the value of [date_cloture_parapheur] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDateClotureParapheur($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_cloture_parapheur !== null || $dt !== null) {
            $currentDateAsString = ($this->date_cloture_parapheur !== null && $tmpDt = new DateTime($this->date_cloture_parapheur)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_cloture_parapheur = $newDateAsString;
                $this->modifiedColumns[] = ExecContratPeer::DATE_CLOTURE_PARAPHEUR;
            }
        } // if either are not null


        return $this;
    } // setDateClotureParapheur()

    /**
     * Set the value of [garantie] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->garantie !== $v) {
            $this->garantie = $v;
            $this->modifiedColumns[] = ExecContratPeer::GARANTIE;
        }


        return $this;
    } // setGarantie()

    /**
     * Set the value of [duree_garantie] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDureeGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->duree_garantie !== $v) {
            $this->duree_garantie = $v;
            $this->modifiedColumns[] = ExecContratPeer::DUREE_GARANTIE;
        }


        return $this;
    } // setDureeGarantie()

    /**
     * Set the value of [unite_garantie] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setUniteGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unite_garantie !== $v) {
            $this->unite_garantie = $v;
            $this->modifiedColumns[] = ExecContratPeer::UNITE_GARANTIE;
        }


        return $this;
    } // setUniteGarantie()

    /**
     * Set the value of [type_penalite] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setTypePenalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_penalite !== $v) {
            $this->type_penalite = $v;
            $this->modifiedColumns[] = ExecContratPeer::TYPE_PENALITE;
        }


        return $this;
    } // setTypePenalite()

    /**
     * Set the value of [pourcentage_penalite] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setPourcentagePenalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->pourcentage_penalite !== $v) {
            $this->pourcentage_penalite = $v;
            $this->modifiedColumns[] = ExecContratPeer::POURCENTAGE_PENALITE;
        }


        return $this;
    } // setPourcentagePenalite()

    /**
     * Set the value of [montant_penalite] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setMontantPenalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_penalite !== $v) {
            $this->montant_penalite = $v;
            $this->modifiedColumns[] = ExecContratPeer::MONTANT_PENALITE;
        }


        return $this;
    } // setMontantPenalite()

    /**
     * Set the value of [plafond_penalite] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setPlafondPenalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->plafond_penalite !== $v) {
            $this->plafond_penalite = $v;
            $this->modifiedColumns[] = ExecContratPeer::PLAFOND_PENALITE;
        }


        return $this;
    } // setPlafondPenalite()

    /**
     * Set the value of [mode_passation] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setModePassation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mode_passation !== $v) {
            $this->mode_passation = $v;
            $this->modifiedColumns[] = ExecContratPeer::MODE_PASSATION;
        }


        return $this;
    } // setModePassation()

    /**
     * Set the value of [lie_marche] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setLieMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lie_marche !== $v) {
            $this->lie_marche = $v;
            $this->modifiedColumns[] = ExecContratPeer::LIE_MARCHE;
        }


        return $this;
    } // setLieMarche()

    /**
     * Set the value of [num_chapeau] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setNumChapeau($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->num_chapeau !== $v) {
            $this->num_chapeau = $v;
            $this->modifiedColumns[] = ExecContratPeer::NUM_CHAPEAU;
        }


        return $this;
    } // setNumChapeau()

    /**
     * Set the value of [os_phase] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setOsPhase($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->os_phase !== $v) {
            $this->os_phase = $v;
            $this->modifiedColumns[] = ExecContratPeer::OS_PHASE;
        }


        return $this;
    } // setOsPhase()

    /**
     * Set the value of [prestation_demande] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setPrestationDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prestation_demande !== $v) {
            $this->prestation_demande = $v;
            $this->modifiedColumns[] = ExecContratPeer::PRESTATION_DEMANDE;
        }


        return $this;
    } // setPrestationDemande()

    /**
     * Set the value of [forfait_jh] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setForfaitJh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->forfait_jh !== $v) {
            $this->forfait_jh = $v;
            $this->modifiedColumns[] = ExecContratPeer::FORFAIT_JH;
        }


        return $this;
    } // setForfaitJh()

    /**
     * Set the value of [quantite_jh] column.
     * 
     * @param double $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setQuantiteJh($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->quantite_jh !== $v) {
            $this->quantite_jh = $v;
            $this->modifiedColumns[] = ExecContratPeer::QUANTITE_JH;
        }


        return $this;
    } // setQuantiteJh()

    /**
     * Set the value of [nature_marche] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setNatureMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nature_marche !== $v) {
            $this->nature_marche = $v;
            $this->modifiedColumns[] = ExecContratPeer::NATURE_MARCHE;
        }


        return $this;
    } // setNatureMarche()

    /**
     * Sets the value of [date_debut] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDateDebut($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_debut !== null || $dt !== null) {
            $currentDateAsString = ($this->date_debut !== null && $tmpDt = new DateTime($this->date_debut)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_debut = $newDateAsString;
                $this->modifiedColumns[] = ExecContratPeer::DATE_DEBUT;
            }
        } // if either are not null


        return $this;
    } // setDateDebut()

    /**
     * Set the value of [plurianuelle] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setPlurianuelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->plurianuelle !== $v) {
            $this->plurianuelle = $v;
            $this->modifiedColumns[] = ExecContratPeer::PLURIANUELLE;
        }


        return $this;
    } // setPlurianuelle()

    /**
     * Set the value of [trancheconditionnelle] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setTrancheconditionnelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->trancheconditionnelle !== $v) {
            $this->trancheconditionnelle = $v;
            $this->modifiedColumns[] = ExecContratPeer::TRANCHECONDITIONNELLE;
        }


        return $this;
    } // setTrancheconditionnelle()

    /**
     * Set the value of [id_agent_cr] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdAgentCr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_cr !== $v) {
            $this->id_agent_cr = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_AGENT_CR;
        }


        return $this;
    } // setIdAgentCr()

    /**
     * Set the value of [devise] column.
     * 
     * @param string $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setDevise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->devise !== $v) {
            $this->devise = $v;
            $this->modifiedColumns[] = ExecContratPeer::DEVISE;
        }


        return $this;
    } // setDevise()

    /**
     * Set the value of [id_contrat_source] column.
     * 
     * @param int $v new value
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setIdContratSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat_source !== $v) {
            $this->id_contrat_source = $v;
            $this->modifiedColumns[] = ExecContratPeer::ID_CONTRAT_SOURCE;
        }


        return $this;
    } // setIdContratSource()

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

            if ($this->id_contrat_source !== 1) {
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
            $this->devise = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->id_contrat_source = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 70; // 70 = ExecContratPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ExecContrat object", $e);
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

        if ($this->aExecTypeContrat !== null && $this->id_type_contrat !== $this->aExecTypeContrat->getId()) {
            $this->aExecTypeContrat = null;
        }
        if ($this->aExecTypeStructure !== null && $this->id_type_structure !== $this->aExecTypeStructure->getId()) {
            $this->aExecTypeStructure = null;
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
            $con = Propel::getConnection(ExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ExecContratPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aExecTypeContrat = null;
            $this->aExecTypeStructure = null;
            $this->collExecAgentContrats = null;

            $this->collExecAvenants = null;

            $this->collExecContacts = null;

            $this->collExecContractants = null;

            $this->collExecDossierPaiements = null;

            $this->collExecEvenements = null;

            $this->collExecFactures = null;

            $this->collExecHistoriquePrixs = null;

            $this->collExecInscritContrats = null;

            $this->collExecLivrableContrats = null;

            $this->collExecPhases = null;

            $this->collExecPieces = null;

            $this->collExecPieceAvenants = null;

            $this->collExecPieceContrats = null;

            $this->collExecPieceDossierpaiements = null;

            $this->collExecPieceEvenements = null;

            $this->collExecPieceFactures = null;

            $this->collExecPrixs = null;

            $this->collExecPrixAvenants = null;

            $this->collExecRepartitions = null;

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
            $con = Propel::getConnection(ExecContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ExecContratQuery::create()
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
            $con = Propel::getConnection(ExecContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ExecContratPeer::addInstanceToPool($this);
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

            if ($this->aExecTypeContrat !== null) {
                if ($this->aExecTypeContrat->isModified() || $this->aExecTypeContrat->isNew()) {
                    $affectedRows += $this->aExecTypeContrat->save($con);
                }
                $this->setExecTypeContrat($this->aExecTypeContrat);
            }

            if ($this->aExecTypeStructure !== null) {
                if ($this->aExecTypeStructure->isModified() || $this->aExecTypeStructure->isNew()) {
                    $affectedRows += $this->aExecTypeStructure->save($con);
                }
                $this->setExecTypeStructure($this->aExecTypeStructure);
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

            if ($this->ExecAgentContratsScheduledForDeletion !== null) {
                if (!$this->ExecAgentContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecAgentContratsScheduledForDeletion as $ExecAgentContrat) {
                        // need to save related object because we set the relation to null
                        $ExecAgentContrat->save($con);
                    }
                    $this->ExecAgentContratsScheduledForDeletion = null;
                }
            }

            if ($this->collExecAgentContrats !== null) {
                foreach ($this->collExecAgentContrats as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecAvenantsScheduledForDeletion !== null) {
                if (!$this->ExecAvenantsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecAvenantsScheduledForDeletion as $ExecAvenant) {
                        // need to save related object because we set the relation to null
                        $ExecAvenant->save($con);
                    }
                    $this->ExecAvenantsScheduledForDeletion = null;
                }
            }

            if ($this->collExecAvenants !== null) {
                foreach ($this->collExecAvenants as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecContactsScheduledForDeletion !== null) {
                if (!$this->ExecContactsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecContactsScheduledForDeletion as $ExecContact) {
                        // need to save related object because we set the relation to null
                        $ExecContact->save($con);
                    }
                    $this->ExecContactsScheduledForDeletion = null;
                }
            }

            if ($this->collExecContacts !== null) {
                foreach ($this->collExecContacts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecContractantsScheduledForDeletion !== null) {
                if (!$this->ExecContractantsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecContractantsScheduledForDeletion as $ExecContractant) {
                        // need to save related object because we set the relation to null
                        $ExecContractant->save($con);
                    }
                    $this->ExecContractantsScheduledForDeletion = null;
                }
            }

            if ($this->collExecContractants !== null) {
                foreach ($this->collExecContractants as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecDossierPaiementsScheduledForDeletion !== null) {
                if (!$this->ExecDossierPaiementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecDossierPaiementsScheduledForDeletion as $ExecDossierPaiement) {
                        // need to save related object because we set the relation to null
                        $ExecDossierPaiement->save($con);
                    }
                    $this->ExecDossierPaiementsScheduledForDeletion = null;
                }
            }

            if ($this->collExecDossierPaiements !== null) {
                foreach ($this->collExecDossierPaiements as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecEvenementsScheduledForDeletion !== null) {
                if (!$this->ExecEvenementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecEvenementsScheduledForDeletion as $ExecEvenement) {
                        // need to save related object because we set the relation to null
                        $ExecEvenement->save($con);
                    }
                    $this->ExecEvenementsScheduledForDeletion = null;
                }
            }

            if ($this->collExecEvenements !== null) {
                foreach ($this->collExecEvenements as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecFacturesScheduledForDeletion !== null) {
                if (!$this->ExecFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecFacturesScheduledForDeletion as $ExecFacture) {
                        // need to save related object because we set the relation to null
                        $ExecFacture->save($con);
                    }
                    $this->ExecFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collExecFactures !== null) {
                foreach ($this->collExecFactures as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecHistoriquePrixsScheduledForDeletion !== null) {
                if (!$this->ExecHistoriquePrixsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecHistoriquePrixsScheduledForDeletion as $ExecHistoriquePrix) {
                        // need to save related object because we set the relation to null
                        $ExecHistoriquePrix->save($con);
                    }
                    $this->ExecHistoriquePrixsScheduledForDeletion = null;
                }
            }

            if ($this->collExecHistoriquePrixs !== null) {
                foreach ($this->collExecHistoriquePrixs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecInscritContratsScheduledForDeletion !== null) {
                if (!$this->ExecInscritContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecInscritContratsScheduledForDeletion as $ExecInscritContrat) {
                        // need to save related object because we set the relation to null
                        $ExecInscritContrat->save($con);
                    }
                    $this->ExecInscritContratsScheduledForDeletion = null;
                }
            }

            if ($this->collExecInscritContrats !== null) {
                foreach ($this->collExecInscritContrats as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecLivrableContratsScheduledForDeletion !== null) {
                if (!$this->ExecLivrableContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecLivrableContratsScheduledForDeletion as $ExecLivrableContrat) {
                        // need to save related object because we set the relation to null
                        $ExecLivrableContrat->save($con);
                    }
                    $this->ExecLivrableContratsScheduledForDeletion = null;
                }
            }

            if ($this->collExecLivrableContrats !== null) {
                foreach ($this->collExecLivrableContrats as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecPhasesScheduledForDeletion !== null) {
                if (!$this->ExecPhasesScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecPhasesScheduledForDeletion as $ExecPhase) {
                        // need to save related object because we set the relation to null
                        $ExecPhase->save($con);
                    }
                    $this->ExecPhasesScheduledForDeletion = null;
                }
            }

            if ($this->collExecPhases !== null) {
                foreach ($this->collExecPhases as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecPiecesScheduledForDeletion !== null) {
                if (!$this->ExecPiecesScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecPiecesScheduledForDeletion as $ExecPiece) {
                        // need to save related object because we set the relation to null
                        $ExecPiece->save($con);
                    }
                    $this->ExecPiecesScheduledForDeletion = null;
                }
            }

            if ($this->collExecPieces !== null) {
                foreach ($this->collExecPieces as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecPieceAvenantsScheduledForDeletion !== null) {
                if (!$this->ExecPieceAvenantsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecPieceAvenantsScheduledForDeletion as $ExecPieceAvenant) {
                        // need to save related object because we set the relation to null
                        $ExecPieceAvenant->save($con);
                    }
                    $this->ExecPieceAvenantsScheduledForDeletion = null;
                }
            }

            if ($this->collExecPieceAvenants !== null) {
                foreach ($this->collExecPieceAvenants as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecPieceContratsScheduledForDeletion !== null) {
                if (!$this->ExecPieceContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecPieceContratsScheduledForDeletion as $ExecPieceContrat) {
                        // need to save related object because we set the relation to null
                        $ExecPieceContrat->save($con);
                    }
                    $this->ExecPieceContratsScheduledForDeletion = null;
                }
            }

            if ($this->collExecPieceContrats !== null) {
                foreach ($this->collExecPieceContrats as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecPieceDossierpaiementsScheduledForDeletion !== null) {
                if (!$this->ExecPieceDossierpaiementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecPieceDossierpaiementsScheduledForDeletion as $ExecPieceDossierpaiement) {
                        // need to save related object because we set the relation to null
                        $ExecPieceDossierpaiement->save($con);
                    }
                    $this->ExecPieceDossierpaiementsScheduledForDeletion = null;
                }
            }

            if ($this->collExecPieceDossierpaiements !== null) {
                foreach ($this->collExecPieceDossierpaiements as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecPieceEvenementsScheduledForDeletion !== null) {
                if (!$this->ExecPieceEvenementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecPieceEvenementsScheduledForDeletion as $ExecPieceEvenement) {
                        // need to save related object because we set the relation to null
                        $ExecPieceEvenement->save($con);
                    }
                    $this->ExecPieceEvenementsScheduledForDeletion = null;
                }
            }

            if ($this->collExecPieceEvenements !== null) {
                foreach ($this->collExecPieceEvenements as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecPieceFacturesScheduledForDeletion !== null) {
                if (!$this->ExecPieceFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecPieceFacturesScheduledForDeletion as $ExecPieceFacture) {
                        // need to save related object because we set the relation to null
                        $ExecPieceFacture->save($con);
                    }
                    $this->ExecPieceFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collExecPieceFactures !== null) {
                foreach ($this->collExecPieceFactures as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecPrixsScheduledForDeletion !== null) {
                if (!$this->ExecPrixsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecPrixsScheduledForDeletion as $ExecPrix) {
                        // need to save related object because we set the relation to null
                        $ExecPrix->save($con);
                    }
                    $this->ExecPrixsScheduledForDeletion = null;
                }
            }

            if ($this->collExecPrixs !== null) {
                foreach ($this->collExecPrixs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecPrixAvenantsScheduledForDeletion !== null) {
                if (!$this->ExecPrixAvenantsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecPrixAvenantsScheduledForDeletion as $ExecPrixAvenant) {
                        // need to save related object because we set the relation to null
                        $ExecPrixAvenant->save($con);
                    }
                    $this->ExecPrixAvenantsScheduledForDeletion = null;
                }
            }

            if ($this->collExecPrixAvenants !== null) {
                foreach ($this->collExecPrixAvenants as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ExecRepartitionsScheduledForDeletion !== null) {
                if (!$this->ExecRepartitionsScheduledForDeletion->isEmpty()) {
                    foreach ($this->ExecRepartitionsScheduledForDeletion as $ExecRepartition) {
                        // need to save related object because we set the relation to null
                        $ExecRepartition->save($con);
                    }
                    $this->ExecRepartitionsScheduledForDeletion = null;
                }
            }

            if ($this->collExecRepartitions !== null) {
                foreach ($this->collExecRepartitions as $referrerFK) {
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

        $this->modifiedColumns[] = ExecContratPeer::ID_CONTRAT;
        if (null !== $this->id_contrat) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ExecContratPeer::ID_CONTRAT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ExecContratPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(ExecContratPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(ExecContratPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_DECISION_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_decision_enveloppe`';
        }
        if ($this->isColumnModified(ExecContratPeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(ExecContratPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_TYPE_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_contrat`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_TYPE_STRUCTURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_structure`';
        }
        if ($this->isColumnModified(ExecContratPeer::OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`objet`';
        }
        if ($this->isColumnModified(ExecContratPeer::NUM_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`num_consultation`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_NATURE_PRESTATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_nature_prestation`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_SERVICE_GERANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_service_gerant`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_AGENT_GESTION)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_gestion`';
        }
        if ($this->isColumnModified(ExecContratPeer::RECONDUCTIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`reconductible`';
        }
        if ($this->isColumnModified(ExecContratPeer::NOMBRE_RECONDUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`nombre_reconduction`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_ht`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_ttc`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`montant_min`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`montant_max`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_MIN_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_min_ttc`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_MAX_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_max_ttc`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_FACTURE_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_facture_ht`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_FACTURE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_facture_ttc`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_PAYE_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_paye_ht`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_PAYE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_paye_ttc`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`montant_caution`';
        }
        if ($this->isColumnModified(ExecContratPeer::POURCENTAGE_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_caution`';
        }
        if ($this->isColumnModified(ExecContratPeer::RETENUE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`retenue_garantie`';
        }
        if ($this->isColumnModified(ExecContratPeer::POURCENTAGE_RETENUE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_retenue_garantie`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_RETENU_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_retenu_garantie`';
        }
        if ($this->isColumnModified(ExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_prelevement_garantie`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_AVANCE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_avance`';
        }
        if ($this->isColumnModified(ExecContratPeer::DELAI_PARTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`delai_partiel`';
        }
        if ($this->isColumnModified(ExecContratPeer::DELAI_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`delai_contrat`';
        }
        if ($this->isColumnModified(ExecContratPeer::UNITE_DELAI_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`unite_delai_contrat`';
        }
        if ($this->isColumnModified(ExecContratPeer::DATE_APPROBATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_approbation`';
        }
        if ($this->isColumnModified(ExecContratPeer::DATE_NOTIFICATION_APPROBATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_notification_approbation`';
        }
        if ($this->isColumnModified(ExecContratPeer::DATE_FIN)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin`';
        }
        if ($this->isColumnModified(ExecContratPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(ExecContratPeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`date_modif`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_AGENT_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_modif`';
        }
        if ($this->isColumnModified(ExecContratPeer::DELAI_REEL)) {
            $modifiedColumns[':p' . $index++]  = '`delai_reel`';
        }
        if ($this->isColumnModified(ExecContratPeer::DEPASSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`depassement`';
        }
        if ($this->isColumnModified(ExecContratPeer::DATE_MAJ_DELAI_REEL)) {
            $modifiedColumns[':p' . $index++]  = '`date_maj_delai_reel`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_parapheur`';
        }
        if ($this->isColumnModified(ExecContratPeer::STATUT_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`statut_parapheur`';
        }
        if ($this->isColumnModified(ExecContratPeer::DATE_CLOTURE_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`date_cloture_parapheur`';
        }
        if ($this->isColumnModified(ExecContratPeer::GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`garantie`';
        }
        if ($this->isColumnModified(ExecContratPeer::DUREE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`duree_garantie`';
        }
        if ($this->isColumnModified(ExecContratPeer::UNITE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`unite_garantie`';
        }
        if ($this->isColumnModified(ExecContratPeer::TYPE_PENALITE)) {
            $modifiedColumns[':p' . $index++]  = '`type_penalite`';
        }
        if ($this->isColumnModified(ExecContratPeer::POURCENTAGE_PENALITE)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_penalite`';
        }
        if ($this->isColumnModified(ExecContratPeer::MONTANT_PENALITE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_penalite`';
        }
        if ($this->isColumnModified(ExecContratPeer::PLAFOND_PENALITE)) {
            $modifiedColumns[':p' . $index++]  = '`plafond_penalite`';
        }
        if ($this->isColumnModified(ExecContratPeer::MODE_PASSATION)) {
            $modifiedColumns[':p' . $index++]  = '`mode_passation`';
        }
        if ($this->isColumnModified(ExecContratPeer::LIE_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`lie_marche`';
        }
        if ($this->isColumnModified(ExecContratPeer::NUM_CHAPEAU)) {
            $modifiedColumns[':p' . $index++]  = '`num_chapeau`';
        }
        if ($this->isColumnModified(ExecContratPeer::OS_PHASE)) {
            $modifiedColumns[':p' . $index++]  = '`os_phase`';
        }
        if ($this->isColumnModified(ExecContratPeer::PRESTATION_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`prestation_demande`';
        }
        if ($this->isColumnModified(ExecContratPeer::FORFAIT_JH)) {
            $modifiedColumns[':p' . $index++]  = '`forfait_jh`';
        }
        if ($this->isColumnModified(ExecContratPeer::QUANTITE_JH)) {
            $modifiedColumns[':p' . $index++]  = '`quantite_jh`';
        }
        if ($this->isColumnModified(ExecContratPeer::NATURE_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`nature_marche`';
        }
        if ($this->isColumnModified(ExecContratPeer::DATE_DEBUT)) {
            $modifiedColumns[':p' . $index++]  = '`date_debut`';
        }
        if ($this->isColumnModified(ExecContratPeer::PLURIANUELLE)) {
            $modifiedColumns[':p' . $index++]  = '`plurianuelle`';
        }
        if ($this->isColumnModified(ExecContratPeer::TRANCHECONDITIONNELLE)) {
            $modifiedColumns[':p' . $index++]  = '`trancheconditionnelle`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_AGENT_CR)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_cr`';
        }
        if ($this->isColumnModified(ExecContratPeer::DEVISE)) {
            $modifiedColumns[':p' . $index++]  = '`devise`';
        }
        if ($this->isColumnModified(ExecContratPeer::ID_CONTRAT_SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat_source`';
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
                    case '`devise`':						
                        $stmt->bindValue($identifier, $this->devise, PDO::PARAM_STR);
                        break;
                    case '`id_contrat_source`':						
                        $stmt->bindValue($identifier, $this->id_contrat_source, PDO::PARAM_INT);
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

            if ($this->aExecTypeContrat !== null) {
                if (!$this->aExecTypeContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aExecTypeContrat->getValidationFailures());
                }
            }

            if ($this->aExecTypeStructure !== null) {
                if (!$this->aExecTypeStructure->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aExecTypeStructure->getValidationFailures());
                }
            }


            if (($retval = ExecContratPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collExecAgentContrats !== null) {
                    foreach ($this->collExecAgentContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecAvenants !== null) {
                    foreach ($this->collExecAvenants as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecContacts !== null) {
                    foreach ($this->collExecContacts as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecContractants !== null) {
                    foreach ($this->collExecContractants as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecDossierPaiements !== null) {
                    foreach ($this->collExecDossierPaiements as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecEvenements !== null) {
                    foreach ($this->collExecEvenements as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecFactures !== null) {
                    foreach ($this->collExecFactures as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecHistoriquePrixs !== null) {
                    foreach ($this->collExecHistoriquePrixs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecInscritContrats !== null) {
                    foreach ($this->collExecInscritContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecLivrableContrats !== null) {
                    foreach ($this->collExecLivrableContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecPhases !== null) {
                    foreach ($this->collExecPhases as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecPieces !== null) {
                    foreach ($this->collExecPieces as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecPieceAvenants !== null) {
                    foreach ($this->collExecPieceAvenants as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecPieceContrats !== null) {
                    foreach ($this->collExecPieceContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecPieceDossierpaiements !== null) {
                    foreach ($this->collExecPieceDossierpaiements as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecPieceEvenements !== null) {
                    foreach ($this->collExecPieceEvenements as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecPieceFactures !== null) {
                    foreach ($this->collExecPieceFactures as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecPrixs !== null) {
                    foreach ($this->collExecPrixs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecPrixAvenants !== null) {
                    foreach ($this->collExecPrixAvenants as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collExecRepartitions !== null) {
                    foreach ($this->collExecRepartitions as $referrerFK) {
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
        $pos = ExecContratPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
            case 68:
                return $this->getDevise();
                break;
            case 69:
                return $this->getIdContratSource();
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
        if (isset($alreadyDumpedObjects['ExecContrat'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ExecContrat'][$this->getPrimaryKey()] = true;
        $keys = ExecContratPeer::getFieldNames($keyType);
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
            $keys[68] => $this->getDevise(),
            $keys[69] => $this->getIdContratSource(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aExecTypeContrat) {
                $result['ExecTypeContrat'] = $this->aExecTypeContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aExecTypeStructure) {
                $result['ExecTypeStructure'] = $this->aExecTypeStructure->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collExecAgentContrats) {
                $result['ExecAgentContrats'] = $this->collExecAgentContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecAvenants) {
                $result['ExecAvenants'] = $this->collExecAvenants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecContacts) {
                $result['ExecContacts'] = $this->collExecContacts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecContractants) {
                $result['ExecContractants'] = $this->collExecContractants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecDossierPaiements) {
                $result['ExecDossierPaiements'] = $this->collExecDossierPaiements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecEvenements) {
                $result['ExecEvenements'] = $this->collExecEvenements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecFactures) {
                $result['ExecFactures'] = $this->collExecFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecHistoriquePrixs) {
                $result['ExecHistoriquePrixs'] = $this->collExecHistoriquePrixs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecInscritContrats) {
                $result['ExecInscritContrats'] = $this->collExecInscritContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecLivrableContrats) {
                $result['ExecLivrableContrats'] = $this->collExecLivrableContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecPhases) {
                $result['ExecPhases'] = $this->collExecPhases->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecPieces) {
                $result['ExecPieces'] = $this->collExecPieces->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecPieceAvenants) {
                $result['ExecPieceAvenants'] = $this->collExecPieceAvenants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecPieceContrats) {
                $result['ExecPieceContrats'] = $this->collExecPieceContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecPieceDossierpaiements) {
                $result['ExecPieceDossierpaiements'] = $this->collExecPieceDossierpaiements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecPieceEvenements) {
                $result['ExecPieceEvenements'] = $this->collExecPieceEvenements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecPieceFactures) {
                $result['ExecPieceFactures'] = $this->collExecPieceFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecPrixs) {
                $result['ExecPrixs'] = $this->collExecPrixs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecPrixAvenants) {
                $result['ExecPrixAvenants'] = $this->collExecPrixAvenants->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collExecRepartitions) {
                $result['ExecRepartitions'] = $this->collExecRepartitions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ExecContratPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
            case 68:
                $this->setDevise($value);
                break;
            case 69:
                $this->setIdContratSource($value);
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
        $keys = ExecContratPeer::getFieldNames($keyType);

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
        if (array_key_exists($keys[68], $arr)) $this->setDevise($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setIdContratSource($arr[$keys[69]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ExecContratPeer::DATABASE_NAME);

        if ($this->isColumnModified(ExecContratPeer::ID_CONTRAT)) $criteria->add(ExecContratPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(ExecContratPeer::CONSULTATION_REF)) $criteria->add(ExecContratPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(ExecContratPeer::ORGANISME)) $criteria->add(ExecContratPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(ExecContratPeer::ID_DECISION_ENVELOPPE)) $criteria->add(ExecContratPeer::ID_DECISION_ENVELOPPE, $this->id_decision_enveloppe);
        if ($this->isColumnModified(ExecContratPeer::NUMERO)) $criteria->add(ExecContratPeer::NUMERO, $this->numero);
        if ($this->isColumnModified(ExecContratPeer::STATUT)) $criteria->add(ExecContratPeer::STATUT, $this->statut);
        if ($this->isColumnModified(ExecContratPeer::ID_TYPE_CONTRAT)) $criteria->add(ExecContratPeer::ID_TYPE_CONTRAT, $this->id_type_contrat);
        if ($this->isColumnModified(ExecContratPeer::ID_TYPE_STRUCTURE)) $criteria->add(ExecContratPeer::ID_TYPE_STRUCTURE, $this->id_type_structure);
        if ($this->isColumnModified(ExecContratPeer::OBJET)) $criteria->add(ExecContratPeer::OBJET, $this->objet);
        if ($this->isColumnModified(ExecContratPeer::NUM_CONSULTATION)) $criteria->add(ExecContratPeer::NUM_CONSULTATION, $this->num_consultation);
        if ($this->isColumnModified(ExecContratPeer::ID_NATURE_PRESTATION)) $criteria->add(ExecContratPeer::ID_NATURE_PRESTATION, $this->id_nature_prestation);
        if ($this->isColumnModified(ExecContratPeer::ID_SERVICE)) $criteria->add(ExecContratPeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(ExecContratPeer::ID_SERVICE_GERANT)) $criteria->add(ExecContratPeer::ID_SERVICE_GERANT, $this->id_service_gerant);
        if ($this->isColumnModified(ExecContratPeer::ID_AGENT_GESTION)) $criteria->add(ExecContratPeer::ID_AGENT_GESTION, $this->id_agent_gestion);
        if ($this->isColumnModified(ExecContratPeer::RECONDUCTIBLE)) $criteria->add(ExecContratPeer::RECONDUCTIBLE, $this->reconductible);
        if ($this->isColumnModified(ExecContratPeer::NOMBRE_RECONDUCTION)) $criteria->add(ExecContratPeer::NOMBRE_RECONDUCTION, $this->nombre_reconduction);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_HT)) $criteria->add(ExecContratPeer::MONTANT_HT, $this->montant_ht);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_TTC)) $criteria->add(ExecContratPeer::MONTANT_TTC, $this->montant_ttc);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_MIN)) $criteria->add(ExecContratPeer::MONTANT_MIN, $this->montant_min);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_MAX)) $criteria->add(ExecContratPeer::MONTANT_MAX, $this->montant_max);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_MIN_TTC)) $criteria->add(ExecContratPeer::MONTANT_MIN_TTC, $this->montant_min_ttc);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_MAX_TTC)) $criteria->add(ExecContratPeer::MONTANT_MAX_TTC, $this->montant_max_ttc);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_FACTURE_HT)) $criteria->add(ExecContratPeer::MONTANT_FACTURE_HT, $this->montant_facture_ht);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_FACTURE_TTC)) $criteria->add(ExecContratPeer::MONTANT_FACTURE_TTC, $this->montant_facture_ttc);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_PAYE_HT)) $criteria->add(ExecContratPeer::MONTANT_PAYE_HT, $this->montant_paye_ht);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_PAYE_TTC)) $criteria->add(ExecContratPeer::MONTANT_PAYE_TTC, $this->montant_paye_ttc);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_CAUTION)) $criteria->add(ExecContratPeer::MONTANT_CAUTION, $this->montant_caution);
        if ($this->isColumnModified(ExecContratPeer::POURCENTAGE_CAUTION)) $criteria->add(ExecContratPeer::POURCENTAGE_CAUTION, $this->pourcentage_caution);
        if ($this->isColumnModified(ExecContratPeer::RETENUE_GARANTIE)) $criteria->add(ExecContratPeer::RETENUE_GARANTIE, $this->retenue_garantie);
        if ($this->isColumnModified(ExecContratPeer::POURCENTAGE_RETENUE_GARANTIE)) $criteria->add(ExecContratPeer::POURCENTAGE_RETENUE_GARANTIE, $this->pourcentage_retenue_garantie);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_RETENU_GARANTIE)) $criteria->add(ExecContratPeer::MONTANT_RETENU_GARANTIE, $this->montant_retenu_garantie);
        if ($this->isColumnModified(ExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE)) $criteria->add(ExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE, $this->pourcentage_prelevement_garantie);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_AVANCE)) $criteria->add(ExecContratPeer::MONTANT_AVANCE, $this->montant_avance);
        if ($this->isColumnModified(ExecContratPeer::DELAI_PARTIEL)) $criteria->add(ExecContratPeer::DELAI_PARTIEL, $this->delai_partiel);
        if ($this->isColumnModified(ExecContratPeer::DELAI_CONTRAT)) $criteria->add(ExecContratPeer::DELAI_CONTRAT, $this->delai_contrat);
        if ($this->isColumnModified(ExecContratPeer::UNITE_DELAI_CONTRAT)) $criteria->add(ExecContratPeer::UNITE_DELAI_CONTRAT, $this->unite_delai_contrat);
        if ($this->isColumnModified(ExecContratPeer::DATE_APPROBATION)) $criteria->add(ExecContratPeer::DATE_APPROBATION, $this->date_approbation);
        if ($this->isColumnModified(ExecContratPeer::DATE_NOTIFICATION_APPROBATION)) $criteria->add(ExecContratPeer::DATE_NOTIFICATION_APPROBATION, $this->date_notification_approbation);
        if ($this->isColumnModified(ExecContratPeer::DATE_FIN)) $criteria->add(ExecContratPeer::DATE_FIN, $this->date_fin);
        if ($this->isColumnModified(ExecContratPeer::DATE_CREA)) $criteria->add(ExecContratPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(ExecContratPeer::ID_AGENT_CREA)) $criteria->add(ExecContratPeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(ExecContratPeer::DATE_MODIF)) $criteria->add(ExecContratPeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(ExecContratPeer::ID_AGENT_MODIF)) $criteria->add(ExecContratPeer::ID_AGENT_MODIF, $this->id_agent_modif);
        if ($this->isColumnModified(ExecContratPeer::DELAI_REEL)) $criteria->add(ExecContratPeer::DELAI_REEL, $this->delai_reel);
        if ($this->isColumnModified(ExecContratPeer::DEPASSEMENT)) $criteria->add(ExecContratPeer::DEPASSEMENT, $this->depassement);
        if ($this->isColumnModified(ExecContratPeer::DATE_MAJ_DELAI_REEL)) $criteria->add(ExecContratPeer::DATE_MAJ_DELAI_REEL, $this->date_maj_delai_reel);
        if ($this->isColumnModified(ExecContratPeer::ID_PARAPHEUR)) $criteria->add(ExecContratPeer::ID_PARAPHEUR, $this->id_parapheur);
        if ($this->isColumnModified(ExecContratPeer::STATUT_PARAPHEUR)) $criteria->add(ExecContratPeer::STATUT_PARAPHEUR, $this->statut_parapheur);
        if ($this->isColumnModified(ExecContratPeer::DATE_CLOTURE_PARAPHEUR)) $criteria->add(ExecContratPeer::DATE_CLOTURE_PARAPHEUR, $this->date_cloture_parapheur);
        if ($this->isColumnModified(ExecContratPeer::GARANTIE)) $criteria->add(ExecContratPeer::GARANTIE, $this->garantie);
        if ($this->isColumnModified(ExecContratPeer::DUREE_GARANTIE)) $criteria->add(ExecContratPeer::DUREE_GARANTIE, $this->duree_garantie);
        if ($this->isColumnModified(ExecContratPeer::UNITE_GARANTIE)) $criteria->add(ExecContratPeer::UNITE_GARANTIE, $this->unite_garantie);
        if ($this->isColumnModified(ExecContratPeer::TYPE_PENALITE)) $criteria->add(ExecContratPeer::TYPE_PENALITE, $this->type_penalite);
        if ($this->isColumnModified(ExecContratPeer::POURCENTAGE_PENALITE)) $criteria->add(ExecContratPeer::POURCENTAGE_PENALITE, $this->pourcentage_penalite);
        if ($this->isColumnModified(ExecContratPeer::MONTANT_PENALITE)) $criteria->add(ExecContratPeer::MONTANT_PENALITE, $this->montant_penalite);
        if ($this->isColumnModified(ExecContratPeer::PLAFOND_PENALITE)) $criteria->add(ExecContratPeer::PLAFOND_PENALITE, $this->plafond_penalite);
        if ($this->isColumnModified(ExecContratPeer::MODE_PASSATION)) $criteria->add(ExecContratPeer::MODE_PASSATION, $this->mode_passation);
        if ($this->isColumnModified(ExecContratPeer::LIE_MARCHE)) $criteria->add(ExecContratPeer::LIE_MARCHE, $this->lie_marche);
        if ($this->isColumnModified(ExecContratPeer::NUM_CHAPEAU)) $criteria->add(ExecContratPeer::NUM_CHAPEAU, $this->num_chapeau);
        if ($this->isColumnModified(ExecContratPeer::OS_PHASE)) $criteria->add(ExecContratPeer::OS_PHASE, $this->os_phase);
        if ($this->isColumnModified(ExecContratPeer::PRESTATION_DEMANDE)) $criteria->add(ExecContratPeer::PRESTATION_DEMANDE, $this->prestation_demande);
        if ($this->isColumnModified(ExecContratPeer::FORFAIT_JH)) $criteria->add(ExecContratPeer::FORFAIT_JH, $this->forfait_jh);
        if ($this->isColumnModified(ExecContratPeer::QUANTITE_JH)) $criteria->add(ExecContratPeer::QUANTITE_JH, $this->quantite_jh);
        if ($this->isColumnModified(ExecContratPeer::NATURE_MARCHE)) $criteria->add(ExecContratPeer::NATURE_MARCHE, $this->nature_marche);
        if ($this->isColumnModified(ExecContratPeer::DATE_DEBUT)) $criteria->add(ExecContratPeer::DATE_DEBUT, $this->date_debut);
        if ($this->isColumnModified(ExecContratPeer::PLURIANUELLE)) $criteria->add(ExecContratPeer::PLURIANUELLE, $this->plurianuelle);
        if ($this->isColumnModified(ExecContratPeer::TRANCHECONDITIONNELLE)) $criteria->add(ExecContratPeer::TRANCHECONDITIONNELLE, $this->trancheconditionnelle);
        if ($this->isColumnModified(ExecContratPeer::ID_AGENT_CR)) $criteria->add(ExecContratPeer::ID_AGENT_CR, $this->id_agent_cr);
        if ($this->isColumnModified(ExecContratPeer::DEVISE)) $criteria->add(ExecContratPeer::DEVISE, $this->devise);
        if ($this->isColumnModified(ExecContratPeer::ID_CONTRAT_SOURCE)) $criteria->add(ExecContratPeer::ID_CONTRAT_SOURCE, $this->id_contrat_source);

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
        $criteria = new Criteria(ExecContratPeer::DATABASE_NAME);
        $criteria->add(ExecContratPeer::ID_CONTRAT, $this->id_contrat);

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
     * @param object $copyObj An object of ExecContrat (or compatible) type.
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
        $copyObj->setDevise($this->getDevise());
        $copyObj->setIdContratSource($this->getIdContratSource());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getExecAgentContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecAgentContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecAvenants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecAvenant($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecContacts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecContact($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecContractants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecContractant($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecDossierPaiements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecDossierPaiement($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecEvenements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecEvenement($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecFacture($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecHistoriquePrixs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecHistoriquePrix($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecInscritContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecInscritContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecLivrableContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecLivrableContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecPhases() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecPhase($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecPieces() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecPiece($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecPieceAvenants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecPieceAvenant($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecPieceContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecPieceContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecPieceDossierpaiements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecPieceDossierpaiement($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecPieceEvenements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecPieceEvenement($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecPieceFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecPieceFacture($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecPrixs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecPrix($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecPrixAvenants() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecPrixAvenant($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getExecRepartitions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addExecRepartition($relObj->copy($deepCopy));
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
     * @return ExecContrat Clone of current object.
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
     * @return ExecContratPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ExecContratPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ExecTypeContrat object.
     *
     * @param   ExecTypeContrat $v
     * @return ExecContrat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setExecTypeContrat(ExecTypeContrat $v = null)
    {
        if ($v === null) {
            $this->setIdTypeContrat(NULL);
        } else {
            $this->setIdTypeContrat($v->getId());
        }

        $this->aExecTypeContrat = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ExecTypeContrat object, it will not be re-added.
        if ($v !== null) {
            $v->addExecContrat($this);
        }


        return $this;
    }


    /**
     * Get the associated ExecTypeContrat object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ExecTypeContrat The associated ExecTypeContrat object.
     * @throws PropelException
     */
    public function getExecTypeContrat(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aExecTypeContrat === null && ($this->id_type_contrat !== null) && $doQuery) {
            $this->aExecTypeContrat = ExecTypeContratQuery::create()->findPk($this->id_type_contrat, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aExecTypeContrat->addExecContrats($this);
             */
        }

        return $this->aExecTypeContrat;
    }

    /**
     * Declares an association between this object and a ExecTypeStructure object.
     *
     * @param   ExecTypeStructure $v
     * @return ExecContrat The current object (for fluent API support)
     * @throws PropelException
     */
    public function setExecTypeStructure(ExecTypeStructure $v = null)
    {
        if ($v === null) {
            $this->setIdTypeStructure(NULL);
        } else {
            $this->setIdTypeStructure($v->getId());
        }

        $this->aExecTypeStructure = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ExecTypeStructure object, it will not be re-added.
        if ($v !== null) {
            $v->addExecContrat($this);
        }


        return $this;
    }


    /**
     * Get the associated ExecTypeStructure object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ExecTypeStructure The associated ExecTypeStructure object.
     * @throws PropelException
     */
    public function getExecTypeStructure(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aExecTypeStructure === null && ($this->id_type_structure !== null) && $doQuery) {
            $this->aExecTypeStructure = ExecTypeStructureQuery::create()->findPk($this->id_type_structure, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aExecTypeStructure->addExecContrats($this);
             */
        }

        return $this->aExecTypeStructure;
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
        if ('ExecAgentContrat' == $relationName) {
            $this->initExecAgentContrats();
        }
        if ('ExecAvenant' == $relationName) {
            $this->initExecAvenants();
        }
        if ('ExecContact' == $relationName) {
            $this->initExecContacts();
        }
        if ('ExecContractant' == $relationName) {
            $this->initExecContractants();
        }
        if ('ExecDossierPaiement' == $relationName) {
            $this->initExecDossierPaiements();
        }
        if ('ExecEvenement' == $relationName) {
            $this->initExecEvenements();
        }
        if ('ExecFacture' == $relationName) {
            $this->initExecFactures();
        }
        if ('ExecHistoriquePrix' == $relationName) {
            $this->initExecHistoriquePrixs();
        }
        if ('ExecInscritContrat' == $relationName) {
            $this->initExecInscritContrats();
        }
        if ('ExecLivrableContrat' == $relationName) {
            $this->initExecLivrableContrats();
        }
        if ('ExecPhase' == $relationName) {
            $this->initExecPhases();
        }
        if ('ExecPiece' == $relationName) {
            $this->initExecPieces();
        }
        if ('ExecPieceAvenant' == $relationName) {
            $this->initExecPieceAvenants();
        }
        if ('ExecPieceContrat' == $relationName) {
            $this->initExecPieceContrats();
        }
        if ('ExecPieceDossierpaiement' == $relationName) {
            $this->initExecPieceDossierpaiements();
        }
        if ('ExecPieceEvenement' == $relationName) {
            $this->initExecPieceEvenements();
        }
        if ('ExecPieceFacture' == $relationName) {
            $this->initExecPieceFactures();
        }
        if ('ExecPrix' == $relationName) {
            $this->initExecPrixs();
        }
        if ('ExecPrixAvenant' == $relationName) {
            $this->initExecPrixAvenants();
        }
        if ('ExecRepartition' == $relationName) {
            $this->initExecRepartitions();
        }
    }

    /**
     * Clears out the collExecAgentContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecAgentContrats()
     */
    public function clearExecAgentContrats()
    {
        $this->collExecAgentContrats = null; // important to set this to null since that means it is uninitialized
        $this->collExecAgentContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecAgentContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecAgentContrats($v = true)
    {
        $this->collExecAgentContratsPartial = $v;
    }

    /**
     * Initializes the collExecAgentContrats collection.
     *
     * By default this just sets the collExecAgentContrats collection to an empty array (like clearcollExecAgentContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecAgentContrats($overrideExisting = true)
    {
        if (null !== $this->collExecAgentContrats && !$overrideExisting) {
            return;
        }
        $this->collExecAgentContrats = new PropelObjectCollection();
        $this->collExecAgentContrats->setModel('ExecAgentContrat');
    }

    /**
     * Gets an array of ExecAgentContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecAgentContrat[] List of ExecAgentContrat objects
     * @throws PropelException
     */
    public function getExecAgentContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecAgentContratsPartial && !$this->isNew();
        if (null === $this->collExecAgentContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecAgentContrats) {
                // return empty collection
                $this->initExecAgentContrats();
            } else {
                $collExecAgentContrats = ExecAgentContratQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecAgentContratsPartial && count($collExecAgentContrats)) {
                      $this->initExecAgentContrats(false);

                      foreach ($collExecAgentContrats as $obj) {
                        if (false == $this->collExecAgentContrats->contains($obj)) {
                          $this->collExecAgentContrats->append($obj);
                        }
                      }

                      $this->collExecAgentContratsPartial = true;
                    }

                    $collExecAgentContrats->getInternalIterator()->rewind();

                    return $collExecAgentContrats;
                }

                if ($partial && $this->collExecAgentContrats) {
                    foreach ($this->collExecAgentContrats as $obj) {
                        if ($obj->isNew()) {
                            $collExecAgentContrats[] = $obj;
                        }
                    }
                }

                $this->collExecAgentContrats = $collExecAgentContrats;
                $this->collExecAgentContratsPartial = false;
            }
        }

        return $this->collExecAgentContrats;
    }

    /**
     * Sets a collection of ExecAgentContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecAgentContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecAgentContrats(PropelCollection $ExecAgentContrats, PropelPDO $con = null)
    {
        $ExecAgentContratsToDelete = $this->getExecAgentContrats(new Criteria(), $con)->diff($ExecAgentContrats);


        $this->ExecAgentContratsScheduledForDeletion = $ExecAgentContratsToDelete;

        foreach ($ExecAgentContratsToDelete as $ExecAgentContratRemoved) {
            $ExecAgentContratRemoved->setExecContrat(null);
        }

        $this->collExecAgentContrats = null;
        foreach ($ExecAgentContrats as $ExecAgentContrat) {
            $this->addExecAgentContrat($ExecAgentContrat);
        }

        $this->collExecAgentContrats = $ExecAgentContrats;
        $this->collExecAgentContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecAgentContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecAgentContrat objects.
     * @throws PropelException
     */
    public function countExecAgentContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecAgentContratsPartial && !$this->isNew();
        if (null === $this->collExecAgentContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecAgentContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecAgentContrats());
            }
            $query = ExecAgentContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecAgentContrats);
    }

    /**
     * Method called to associate a ExecAgentContrat object to this object
     * through the ExecAgentContrat foreign key attribute.
     *
     * @param   ExecAgentContrat $l ExecAgentContrat
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecAgentContrat(ExecAgentContrat $l)
    {
        if ($this->collExecAgentContrats === null) {
            $this->initExecAgentContrats();
            $this->collExecAgentContratsPartial = true;
        }
        if (!in_array($l, $this->collExecAgentContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecAgentContrat($l);
        }

        return $this;
    }

    /**
     * @param	ExecAgentContrat $ExecAgentContrat The ExecAgentContrat object to add.
     */
    protected function doAddExecAgentContrat($ExecAgentContrat)
    {
        $this->collExecAgentContrats[]= $ExecAgentContrat;
        $ExecAgentContrat->setExecContrat($this);
    }

    /**
     * @param	ExecAgentContrat $ExecAgentContrat The ExecAgentContrat object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecAgentContrat($ExecAgentContrat)
    {
        if ($this->getExecAgentContrats()->contains($ExecAgentContrat)) {
            $this->collExecAgentContrats->remove($this->collExecAgentContrats->search($ExecAgentContrat));
            if (null === $this->ExecAgentContratsScheduledForDeletion) {
                $this->ExecAgentContratsScheduledForDeletion = clone $this->collExecAgentContrats;
                $this->ExecAgentContratsScheduledForDeletion->clear();
            }
            $this->ExecAgentContratsScheduledForDeletion[]= clone $ExecAgentContrat;
            $ExecAgentContrat->setExecContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collExecAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecAvenants()
     */
    public function clearExecAvenants()
    {
        $this->collExecAvenants = null; // important to set this to null since that means it is uninitialized
        $this->collExecAvenantsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecAvenants collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecAvenants($v = true)
    {
        $this->collExecAvenantsPartial = $v;
    }

    /**
     * Initializes the collExecAvenants collection.
     *
     * By default this just sets the collExecAvenants collection to an empty array (like clearcollExecAvenants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecAvenants($overrideExisting = true)
    {
        if (null !== $this->collExecAvenants && !$overrideExisting) {
            return;
        }
        $this->collExecAvenants = new PropelObjectCollection();
        $this->collExecAvenants->setModel('ExecAvenant');
    }

    /**
     * Gets an array of ExecAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecAvenant[] List of ExecAvenant objects
     * @throws PropelException
     */
    public function getExecAvenants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecAvenantsPartial && !$this->isNew();
        if (null === $this->collExecAvenants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecAvenants) {
                // return empty collection
                $this->initExecAvenants();
            } else {
                $collExecAvenants = ExecAvenantQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecAvenantsPartial && count($collExecAvenants)) {
                      $this->initExecAvenants(false);

                      foreach ($collExecAvenants as $obj) {
                        if (false == $this->collExecAvenants->contains($obj)) {
                          $this->collExecAvenants->append($obj);
                        }
                      }

                      $this->collExecAvenantsPartial = true;
                    }

                    $collExecAvenants->getInternalIterator()->rewind();

                    return $collExecAvenants;
                }

                if ($partial && $this->collExecAvenants) {
                    foreach ($this->collExecAvenants as $obj) {
                        if ($obj->isNew()) {
                            $collExecAvenants[] = $obj;
                        }
                    }
                }

                $this->collExecAvenants = $collExecAvenants;
                $this->collExecAvenantsPartial = false;
            }
        }

        return $this->collExecAvenants;
    }

    /**
     * Sets a collection of ExecAvenant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecAvenants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecAvenants(PropelCollection $ExecAvenants, PropelPDO $con = null)
    {
        $ExecAvenantsToDelete = $this->getExecAvenants(new Criteria(), $con)->diff($ExecAvenants);


        $this->ExecAvenantsScheduledForDeletion = $ExecAvenantsToDelete;

        foreach ($ExecAvenantsToDelete as $ExecAvenantRemoved) {
            $ExecAvenantRemoved->setExecContrat(null);
        }

        $this->collExecAvenants = null;
        foreach ($ExecAvenants as $ExecAvenant) {
            $this->addExecAvenant($ExecAvenant);
        }

        $this->collExecAvenants = $ExecAvenants;
        $this->collExecAvenantsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecAvenant objects.
     * @throws PropelException
     */
    public function countExecAvenants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecAvenantsPartial && !$this->isNew();
        if (null === $this->collExecAvenants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecAvenants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecAvenants());
            }
            $query = ExecAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecAvenants);
    }

    /**
     * Method called to associate a ExecAvenant object to this object
     * through the ExecAvenant foreign key attribute.
     *
     * @param   ExecAvenant $l ExecAvenant
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecAvenant(ExecAvenant $l)
    {
        if ($this->collExecAvenants === null) {
            $this->initExecAvenants();
            $this->collExecAvenantsPartial = true;
        }
        if (!in_array($l, $this->collExecAvenants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecAvenant($l);
        }

        return $this;
    }

    /**
     * @param	ExecAvenant $ExecAvenant The ExecAvenant object to add.
     */
    protected function doAddExecAvenant($ExecAvenant)
    {
        $this->collExecAvenants[]= $ExecAvenant;
        $ExecAvenant->setExecContrat($this);
    }

    /**
     * @param	ExecAvenant $ExecAvenant The ExecAvenant object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecAvenant($ExecAvenant)
    {
        if ($this->getExecAvenants()->contains($ExecAvenant)) {
            $this->collExecAvenants->remove($this->collExecAvenants->search($ExecAvenant));
            if (null === $this->ExecAvenantsScheduledForDeletion) {
                $this->ExecAvenantsScheduledForDeletion = clone $this->collExecAvenants;
                $this->ExecAvenantsScheduledForDeletion->clear();
            }
            $this->ExecAvenantsScheduledForDeletion[]= clone $ExecAvenant;
            $ExecAvenant->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecAvenant[] List of ExecAvenant objects
     */
    public function getExecAvenantsJoinExecTypeAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecAvenantQuery::create(null, $criteria);
        $query->joinWith('ExecTypeAvenant', $join_behavior);

        return $this->getExecAvenants($query, $con);
    }

    /**
     * Clears out the collExecContacts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecContacts()
     */
    public function clearExecContacts()
    {
        $this->collExecContacts = null; // important to set this to null since that means it is uninitialized
        $this->collExecContactsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecContacts collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecContacts($v = true)
    {
        $this->collExecContactsPartial = $v;
    }

    /**
     * Initializes the collExecContacts collection.
     *
     * By default this just sets the collExecContacts collection to an empty array (like clearcollExecContacts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecContacts($overrideExisting = true)
    {
        if (null !== $this->collExecContacts && !$overrideExisting) {
            return;
        }
        $this->collExecContacts = new PropelObjectCollection();
        $this->collExecContacts->setModel('ExecContact');
    }

    /**
     * Gets an array of ExecContact objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecContact[] List of ExecContact objects
     * @throws PropelException
     */
    public function getExecContacts($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecContactsPartial && !$this->isNew();
        if (null === $this->collExecContacts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecContacts) {
                // return empty collection
                $this->initExecContacts();
            } else {
                $collExecContacts = ExecContactQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecContactsPartial && count($collExecContacts)) {
                      $this->initExecContacts(false);

                      foreach ($collExecContacts as $obj) {
                        if (false == $this->collExecContacts->contains($obj)) {
                          $this->collExecContacts->append($obj);
                        }
                      }

                      $this->collExecContactsPartial = true;
                    }

                    $collExecContacts->getInternalIterator()->rewind();

                    return $collExecContacts;
                }

                if ($partial && $this->collExecContacts) {
                    foreach ($this->collExecContacts as $obj) {
                        if ($obj->isNew()) {
                            $collExecContacts[] = $obj;
                        }
                    }
                }

                $this->collExecContacts = $collExecContacts;
                $this->collExecContactsPartial = false;
            }
        }

        return $this->collExecContacts;
    }

    /**
     * Sets a collection of ExecContact objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecContacts A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecContacts(PropelCollection $ExecContacts, PropelPDO $con = null)
    {
        $ExecContactsToDelete = $this->getExecContacts(new Criteria(), $con)->diff($ExecContacts);


        $this->ExecContactsScheduledForDeletion = $ExecContactsToDelete;

        foreach ($ExecContactsToDelete as $ExecContactRemoved) {
            $ExecContactRemoved->setExecContrat(null);
        }

        $this->collExecContacts = null;
        foreach ($ExecContacts as $ExecContact) {
            $this->addExecContact($ExecContact);
        }

        $this->collExecContacts = $ExecContacts;
        $this->collExecContactsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecContact objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecContact objects.
     * @throws PropelException
     */
    public function countExecContacts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecContactsPartial && !$this->isNew();
        if (null === $this->collExecContacts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecContacts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecContacts());
            }
            $query = ExecContactQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecContacts);
    }

    /**
     * Method called to associate a ExecContact object to this object
     * through the ExecContact foreign key attribute.
     *
     * @param   ExecContact $l ExecContact
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecContact(ExecContact $l)
    {
        if ($this->collExecContacts === null) {
            $this->initExecContacts();
            $this->collExecContactsPartial = true;
        }
        if (!in_array($l, $this->collExecContacts->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecContact($l);
        }

        return $this;
    }

    /**
     * @param	ExecContact $ExecContact The ExecContact object to add.
     */
    protected function doAddExecContact($ExecContact)
    {
        $this->collExecContacts[]= $ExecContact;
        $ExecContact->setExecContrat($this);
    }

    /**
     * @param	ExecContact $ExecContact The ExecContact object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecContact($ExecContact)
    {
        if ($this->getExecContacts()->contains($ExecContact)) {
            $this->collExecContacts->remove($this->collExecContacts->search($ExecContact));
            if (null === $this->ExecContactsScheduledForDeletion) {
                $this->ExecContactsScheduledForDeletion = clone $this->collExecContacts;
                $this->ExecContactsScheduledForDeletion->clear();
            }
            $this->ExecContactsScheduledForDeletion[]= clone $ExecContact;
            $ExecContact->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecContacts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecContact[] List of ExecContact objects
     */
    public function getExecContactsJoinExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecContactQuery::create(null, $criteria);
        $query->joinWith('ExecContractant', $join_behavior);

        return $this->getExecContacts($query, $con);
    }

    /**
     * Clears out the collExecContractants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecContractants()
     */
    public function clearExecContractants()
    {
        $this->collExecContractants = null; // important to set this to null since that means it is uninitialized
        $this->collExecContractantsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecContractants collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecContractants($v = true)
    {
        $this->collExecContractantsPartial = $v;
    }

    /**
     * Initializes the collExecContractants collection.
     *
     * By default this just sets the collExecContractants collection to an empty array (like clearcollExecContractants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecContractants($overrideExisting = true)
    {
        if (null !== $this->collExecContractants && !$overrideExisting) {
            return;
        }
        $this->collExecContractants = new PropelObjectCollection();
        $this->collExecContractants->setModel('ExecContractant');
    }

    /**
     * Gets an array of ExecContractant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecContractant[] List of ExecContractant objects
     * @throws PropelException
     */
    public function getExecContractants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecContractantsPartial && !$this->isNew();
        if (null === $this->collExecContractants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecContractants) {
                // return empty collection
                $this->initExecContractants();
            } else {
                $collExecContractants = ExecContractantQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecContractantsPartial && count($collExecContractants)) {
                      $this->initExecContractants(false);

                      foreach ($collExecContractants as $obj) {
                        if (false == $this->collExecContractants->contains($obj)) {
                          $this->collExecContractants->append($obj);
                        }
                      }

                      $this->collExecContractantsPartial = true;
                    }

                    $collExecContractants->getInternalIterator()->rewind();

                    return $collExecContractants;
                }

                if ($partial && $this->collExecContractants) {
                    foreach ($this->collExecContractants as $obj) {
                        if ($obj->isNew()) {
                            $collExecContractants[] = $obj;
                        }
                    }
                }

                $this->collExecContractants = $collExecContractants;
                $this->collExecContractantsPartial = false;
            }
        }

        return $this->collExecContractants;
    }

    /**
     * Sets a collection of ExecContractant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecContractants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecContractants(PropelCollection $ExecContractants, PropelPDO $con = null)
    {
        $ExecContractantsToDelete = $this->getExecContractants(new Criteria(), $con)->diff($ExecContractants);


        $this->ExecContractantsScheduledForDeletion = $ExecContractantsToDelete;

        foreach ($ExecContractantsToDelete as $ExecContractantRemoved) {
            $ExecContractantRemoved->setExecContrat(null);
        }

        $this->collExecContractants = null;
        foreach ($ExecContractants as $ExecContractant) {
            $this->addExecContractant($ExecContractant);
        }

        $this->collExecContractants = $ExecContractants;
        $this->collExecContractantsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecContractant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecContractant objects.
     * @throws PropelException
     */
    public function countExecContractants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecContractantsPartial && !$this->isNew();
        if (null === $this->collExecContractants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecContractants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecContractants());
            }
            $query = ExecContractantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecContractants);
    }

    /**
     * Method called to associate a ExecContractant object to this object
     * through the ExecContractant foreign key attribute.
     *
     * @param   ExecContractant $l ExecContractant
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecContractant(ExecContractant $l)
    {
        if ($this->collExecContractants === null) {
            $this->initExecContractants();
            $this->collExecContractantsPartial = true;
        }
        if (!in_array($l, $this->collExecContractants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecContractant($l);
        }

        return $this;
    }

    /**
     * @param	ExecContractant $ExecContractant The ExecContractant object to add.
     */
    protected function doAddExecContractant($ExecContractant)
    {
        $this->collExecContractants[]= $ExecContractant;
        $ExecContractant->setExecContrat($this);
    }

    /**
     * @param	ExecContractant $ExecContractant The ExecContractant object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecContractant($ExecContractant)
    {
        if ($this->getExecContractants()->contains($ExecContractant)) {
            $this->collExecContractants->remove($this->collExecContractants->search($ExecContractant));
            if (null === $this->ExecContractantsScheduledForDeletion) {
                $this->ExecContractantsScheduledForDeletion = clone $this->collExecContractants;
                $this->ExecContractantsScheduledForDeletion->clear();
            }
            $this->ExecContractantsScheduledForDeletion[]= clone $ExecContractant;
            $ExecContractant->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecContractant[] List of ExecContractant objects
     */
    public function getExecContractantsJoinExecContractantRelatedByIdParent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecContractantQuery::create(null, $criteria);
        $query->joinWith('ExecContractantRelatedByIdParent', $join_behavior);

        return $this->getExecContractants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecContractant[] List of ExecContractant objects
     */
    public function getExecContractantsJoinExecTypeContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecContractantQuery::create(null, $criteria);
        $query->joinWith('ExecTypeContractant', $join_behavior);

        return $this->getExecContractants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecContractants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecContractant[] List of ExecContractant objects
     */
    public function getExecContractantsJoinExecTypeStructure($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecContractantQuery::create(null, $criteria);
        $query->joinWith('ExecTypeStructure', $join_behavior);

        return $this->getExecContractants($query, $con);
    }

    /**
     * Clears out the collExecDossierPaiements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecDossierPaiements()
     */
    public function clearExecDossierPaiements()
    {
        $this->collExecDossierPaiements = null; // important to set this to null since that means it is uninitialized
        $this->collExecDossierPaiementsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecDossierPaiements collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecDossierPaiements($v = true)
    {
        $this->collExecDossierPaiementsPartial = $v;
    }

    /**
     * Initializes the collExecDossierPaiements collection.
     *
     * By default this just sets the collExecDossierPaiements collection to an empty array (like clearcollExecDossierPaiements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecDossierPaiements($overrideExisting = true)
    {
        if (null !== $this->collExecDossierPaiements && !$overrideExisting) {
            return;
        }
        $this->collExecDossierPaiements = new PropelObjectCollection();
        $this->collExecDossierPaiements->setModel('ExecDossierPaiement');
    }

    /**
     * Gets an array of ExecDossierPaiement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecDossierPaiement[] List of ExecDossierPaiement objects
     * @throws PropelException
     */
    public function getExecDossierPaiements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecDossierPaiementsPartial && !$this->isNew();
        if (null === $this->collExecDossierPaiements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecDossierPaiements) {
                // return empty collection
                $this->initExecDossierPaiements();
            } else {
                $collExecDossierPaiements = ExecDossierPaiementQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecDossierPaiementsPartial && count($collExecDossierPaiements)) {
                      $this->initExecDossierPaiements(false);

                      foreach ($collExecDossierPaiements as $obj) {
                        if (false == $this->collExecDossierPaiements->contains($obj)) {
                          $this->collExecDossierPaiements->append($obj);
                        }
                      }

                      $this->collExecDossierPaiementsPartial = true;
                    }

                    $collExecDossierPaiements->getInternalIterator()->rewind();

                    return $collExecDossierPaiements;
                }

                if ($partial && $this->collExecDossierPaiements) {
                    foreach ($this->collExecDossierPaiements as $obj) {
                        if ($obj->isNew()) {
                            $collExecDossierPaiements[] = $obj;
                        }
                    }
                }

                $this->collExecDossierPaiements = $collExecDossierPaiements;
                $this->collExecDossierPaiementsPartial = false;
            }
        }

        return $this->collExecDossierPaiements;
    }

    /**
     * Sets a collection of ExecDossierPaiement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecDossierPaiements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecDossierPaiements(PropelCollection $ExecDossierPaiements, PropelPDO $con = null)
    {
        $ExecDossierPaiementsToDelete = $this->getExecDossierPaiements(new Criteria(), $con)->diff($ExecDossierPaiements);


        $this->ExecDossierPaiementsScheduledForDeletion = $ExecDossierPaiementsToDelete;

        foreach ($ExecDossierPaiementsToDelete as $ExecDossierPaiementRemoved) {
            $ExecDossierPaiementRemoved->setExecContrat(null);
        }

        $this->collExecDossierPaiements = null;
        foreach ($ExecDossierPaiements as $ExecDossierPaiement) {
            $this->addExecDossierPaiement($ExecDossierPaiement);
        }

        $this->collExecDossierPaiements = $ExecDossierPaiements;
        $this->collExecDossierPaiementsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecDossierPaiement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecDossierPaiement objects.
     * @throws PropelException
     */
    public function countExecDossierPaiements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecDossierPaiementsPartial && !$this->isNew();
        if (null === $this->collExecDossierPaiements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecDossierPaiements) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecDossierPaiements());
            }
            $query = ExecDossierPaiementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecDossierPaiements);
    }

    /**
     * Method called to associate a ExecDossierPaiement object to this object
     * through the ExecDossierPaiement foreign key attribute.
     *
     * @param   ExecDossierPaiement $l ExecDossierPaiement
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecDossierPaiement(ExecDossierPaiement $l)
    {
        if ($this->collExecDossierPaiements === null) {
            $this->initExecDossierPaiements();
            $this->collExecDossierPaiementsPartial = true;
        }
        if (!in_array($l, $this->collExecDossierPaiements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecDossierPaiement($l);
        }

        return $this;
    }

    /**
     * @param	ExecDossierPaiement $ExecDossierPaiement The ExecDossierPaiement object to add.
     */
    protected function doAddExecDossierPaiement($ExecDossierPaiement)
    {
        $this->collExecDossierPaiements[]= $ExecDossierPaiement;
        $ExecDossierPaiement->setExecContrat($this);
    }

    /**
     * @param	ExecDossierPaiement $ExecDossierPaiement The ExecDossierPaiement object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecDossierPaiement($ExecDossierPaiement)
    {
        if ($this->getExecDossierPaiements()->contains($ExecDossierPaiement)) {
            $this->collExecDossierPaiements->remove($this->collExecDossierPaiements->search($ExecDossierPaiement));
            if (null === $this->ExecDossierPaiementsScheduledForDeletion) {
                $this->ExecDossierPaiementsScheduledForDeletion = clone $this->collExecDossierPaiements;
                $this->ExecDossierPaiementsScheduledForDeletion->clear();
            }
            $this->ExecDossierPaiementsScheduledForDeletion[]= $ExecDossierPaiement;
            $ExecDossierPaiement->setExecContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collExecEvenements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecEvenements()
     */
    public function clearExecEvenements()
    {
        $this->collExecEvenements = null; // important to set this to null since that means it is uninitialized
        $this->collExecEvenementsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecEvenements collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecEvenements($v = true)
    {
        $this->collExecEvenementsPartial = $v;
    }

    /**
     * Initializes the collExecEvenements collection.
     *
     * By default this just sets the collExecEvenements collection to an empty array (like clearcollExecEvenements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecEvenements($overrideExisting = true)
    {
        if (null !== $this->collExecEvenements && !$overrideExisting) {
            return;
        }
        $this->collExecEvenements = new PropelObjectCollection();
        $this->collExecEvenements->setModel('ExecEvenement');
    }

    /**
     * Gets an array of ExecEvenement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecEvenement[] List of ExecEvenement objects
     * @throws PropelException
     */
    public function getExecEvenements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecEvenementsPartial && !$this->isNew();
        if (null === $this->collExecEvenements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecEvenements) {
                // return empty collection
                $this->initExecEvenements();
            } else {
                $collExecEvenements = ExecEvenementQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecEvenementsPartial && count($collExecEvenements)) {
                      $this->initExecEvenements(false);

                      foreach ($collExecEvenements as $obj) {
                        if (false == $this->collExecEvenements->contains($obj)) {
                          $this->collExecEvenements->append($obj);
                        }
                      }

                      $this->collExecEvenementsPartial = true;
                    }

                    $collExecEvenements->getInternalIterator()->rewind();

                    return $collExecEvenements;
                }

                if ($partial && $this->collExecEvenements) {
                    foreach ($this->collExecEvenements as $obj) {
                        if ($obj->isNew()) {
                            $collExecEvenements[] = $obj;
                        }
                    }
                }

                $this->collExecEvenements = $collExecEvenements;
                $this->collExecEvenementsPartial = false;
            }
        }

        return $this->collExecEvenements;
    }

    /**
     * Sets a collection of ExecEvenement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecEvenements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecEvenements(PropelCollection $ExecEvenements, PropelPDO $con = null)
    {
        $ExecEvenementsToDelete = $this->getExecEvenements(new Criteria(), $con)->diff($ExecEvenements);


        $this->ExecEvenementsScheduledForDeletion = $ExecEvenementsToDelete;

        foreach ($ExecEvenementsToDelete as $ExecEvenementRemoved) {
            $ExecEvenementRemoved->setExecContrat(null);
        }

        $this->collExecEvenements = null;
        foreach ($ExecEvenements as $ExecEvenement) {
            $this->addExecEvenement($ExecEvenement);
        }

        $this->collExecEvenements = $ExecEvenements;
        $this->collExecEvenementsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecEvenement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecEvenement objects.
     * @throws PropelException
     */
    public function countExecEvenements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecEvenementsPartial && !$this->isNew();
        if (null === $this->collExecEvenements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecEvenements) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecEvenements());
            }
            $query = ExecEvenementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecEvenements);
    }

    /**
     * Method called to associate a ExecEvenement object to this object
     * through the ExecEvenement foreign key attribute.
     *
     * @param   ExecEvenement $l ExecEvenement
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecEvenement(ExecEvenement $l)
    {
        if ($this->collExecEvenements === null) {
            $this->initExecEvenements();
            $this->collExecEvenementsPartial = true;
        }
        if (!in_array($l, $this->collExecEvenements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecEvenement($l);
        }

        return $this;
    }

    /**
     * @param	ExecEvenement $ExecEvenement The ExecEvenement object to add.
     */
    protected function doAddExecEvenement($ExecEvenement)
    {
        $this->collExecEvenements[]= $ExecEvenement;
        $ExecEvenement->setExecContrat($this);
    }

    /**
     * @param	ExecEvenement $ExecEvenement The ExecEvenement object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecEvenement($ExecEvenement)
    {
        if ($this->getExecEvenements()->contains($ExecEvenement)) {
            $this->collExecEvenements->remove($this->collExecEvenements->search($ExecEvenement));
            if (null === $this->ExecEvenementsScheduledForDeletion) {
                $this->ExecEvenementsScheduledForDeletion = clone $this->collExecEvenements;
                $this->ExecEvenementsScheduledForDeletion->clear();
            }
            $this->ExecEvenementsScheduledForDeletion[]= clone $ExecEvenement;
            $ExecEvenement->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecEvenement[] List of ExecEvenement objects
     */
    public function getExecEvenementsJoinExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecEvenementQuery::create(null, $criteria);
        $query->joinWith('ExecContractant', $join_behavior);

        return $this->getExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecEvenement[] List of ExecEvenement objects
     */
    public function getExecEvenementsJoinExecPhase($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecEvenementQuery::create(null, $criteria);
        $query->joinWith('ExecPhase', $join_behavior);

        return $this->getExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecEvenement[] List of ExecEvenement objects
     */
    public function getExecEvenementsJoinExecTypeEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecEvenementQuery::create(null, $criteria);
        $query->joinWith('ExecTypeEvenement', $join_behavior);

        return $this->getExecEvenements($query, $con);
    }

    /**
     * Clears out the collExecFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecFactures()
     */
    public function clearExecFactures()
    {
        $this->collExecFactures = null; // important to set this to null since that means it is uninitialized
        $this->collExecFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collExecFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecFactures($v = true)
    {
        $this->collExecFacturesPartial = $v;
    }

    /**
     * Initializes the collExecFactures collection.
     *
     * By default this just sets the collExecFactures collection to an empty array (like clearcollExecFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecFactures($overrideExisting = true)
    {
        if (null !== $this->collExecFactures && !$overrideExisting) {
            return;
        }
        $this->collExecFactures = new PropelObjectCollection();
        $this->collExecFactures->setModel('ExecFacture');
    }

    /**
     * Gets an array of ExecFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecFacture[] List of ExecFacture objects
     * @throws PropelException
     */
    public function getExecFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecFacturesPartial && !$this->isNew();
        if (null === $this->collExecFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecFactures) {
                // return empty collection
                $this->initExecFactures();
            } else {
                $collExecFactures = ExecFactureQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecFacturesPartial && count($collExecFactures)) {
                      $this->initExecFactures(false);

                      foreach ($collExecFactures as $obj) {
                        if (false == $this->collExecFactures->contains($obj)) {
                          $this->collExecFactures->append($obj);
                        }
                      }

                      $this->collExecFacturesPartial = true;
                    }

                    $collExecFactures->getInternalIterator()->rewind();

                    return $collExecFactures;
                }

                if ($partial && $this->collExecFactures) {
                    foreach ($this->collExecFactures as $obj) {
                        if ($obj->isNew()) {
                            $collExecFactures[] = $obj;
                        }
                    }
                }

                $this->collExecFactures = $collExecFactures;
                $this->collExecFacturesPartial = false;
            }
        }

        return $this->collExecFactures;
    }

    /**
     * Sets a collection of ExecFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecFactures(PropelCollection $ExecFactures, PropelPDO $con = null)
    {
        $ExecFacturesToDelete = $this->getExecFactures(new Criteria(), $con)->diff($ExecFactures);


        $this->ExecFacturesScheduledForDeletion = $ExecFacturesToDelete;

        foreach ($ExecFacturesToDelete as $ExecFactureRemoved) {
            $ExecFactureRemoved->setExecContrat(null);
        }

        $this->collExecFactures = null;
        foreach ($ExecFactures as $ExecFacture) {
            $this->addExecFacture($ExecFacture);
        }

        $this->collExecFactures = $ExecFactures;
        $this->collExecFacturesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecFacture objects.
     * @throws PropelException
     */
    public function countExecFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecFacturesPartial && !$this->isNew();
        if (null === $this->collExecFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecFactures());
            }
            $query = ExecFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecFactures);
    }

    /**
     * Method called to associate a ExecFacture object to this object
     * through the ExecFacture foreign key attribute.
     *
     * @param   ExecFacture $l ExecFacture
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecFacture(ExecFacture $l)
    {
        if ($this->collExecFactures === null) {
            $this->initExecFactures();
            $this->collExecFacturesPartial = true;
        }
        if (!in_array($l, $this->collExecFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecFacture($l);
        }

        return $this;
    }

    /**
     * @param	ExecFacture $ExecFacture The ExecFacture object to add.
     */
    protected function doAddExecFacture($ExecFacture)
    {
        $this->collExecFactures[]= $ExecFacture;
        $ExecFacture->setExecContrat($this);
    }

    /**
     * @param	ExecFacture $ExecFacture The ExecFacture object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecFacture($ExecFacture)
    {
        if ($this->getExecFactures()->contains($ExecFacture)) {
            $this->collExecFactures->remove($this->collExecFactures->search($ExecFacture));
            if (null === $this->ExecFacturesScheduledForDeletion) {
                $this->ExecFacturesScheduledForDeletion = clone $this->collExecFactures;
                $this->ExecFacturesScheduledForDeletion->clear();
            }
            $this->ExecFacturesScheduledForDeletion[]= clone $ExecFacture;
            $ExecFacture->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecFacture[] List of ExecFacture objects
     */
    public function getExecFacturesJoinExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecFactureQuery::create(null, $criteria);
        $query->joinWith('ExecContractant', $join_behavior);

        return $this->getExecFactures($query, $con);
    }

    /**
     * Clears out the collExecHistoriquePrixs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecHistoriquePrixs()
     */
    public function clearExecHistoriquePrixs()
    {
        $this->collExecHistoriquePrixs = null; // important to set this to null since that means it is uninitialized
        $this->collExecHistoriquePrixsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecHistoriquePrixs collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecHistoriquePrixs($v = true)
    {
        $this->collExecHistoriquePrixsPartial = $v;
    }

    /**
     * Initializes the collExecHistoriquePrixs collection.
     *
     * By default this just sets the collExecHistoriquePrixs collection to an empty array (like clearcollExecHistoriquePrixs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecHistoriquePrixs($overrideExisting = true)
    {
        if (null !== $this->collExecHistoriquePrixs && !$overrideExisting) {
            return;
        }
        $this->collExecHistoriquePrixs = new PropelObjectCollection();
        $this->collExecHistoriquePrixs->setModel('ExecHistoriquePrix');
    }

    /**
     * Gets an array of ExecHistoriquePrix objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecHistoriquePrix[] List of ExecHistoriquePrix objects
     * @throws PropelException
     */
    public function getExecHistoriquePrixs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecHistoriquePrixsPartial && !$this->isNew();
        if (null === $this->collExecHistoriquePrixs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecHistoriquePrixs) {
                // return empty collection
                $this->initExecHistoriquePrixs();
            } else {
                $collExecHistoriquePrixs = ExecHistoriquePrixQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecHistoriquePrixsPartial && count($collExecHistoriquePrixs)) {
                      $this->initExecHistoriquePrixs(false);

                      foreach ($collExecHistoriquePrixs as $obj) {
                        if (false == $this->collExecHistoriquePrixs->contains($obj)) {
                          $this->collExecHistoriquePrixs->append($obj);
                        }
                      }

                      $this->collExecHistoriquePrixsPartial = true;
                    }

                    $collExecHistoriquePrixs->getInternalIterator()->rewind();

                    return $collExecHistoriquePrixs;
                }

                if ($partial && $this->collExecHistoriquePrixs) {
                    foreach ($this->collExecHistoriquePrixs as $obj) {
                        if ($obj->isNew()) {
                            $collExecHistoriquePrixs[] = $obj;
                        }
                    }
                }

                $this->collExecHistoriquePrixs = $collExecHistoriquePrixs;
                $this->collExecHistoriquePrixsPartial = false;
            }
        }

        return $this->collExecHistoriquePrixs;
    }

    /**
     * Sets a collection of ExecHistoriquePrix objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecHistoriquePrixs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecHistoriquePrixs(PropelCollection $ExecHistoriquePrixs, PropelPDO $con = null)
    {
        $ExecHistoriquePrixsToDelete = $this->getExecHistoriquePrixs(new Criteria(), $con)->diff($ExecHistoriquePrixs);


        $this->ExecHistoriquePrixsScheduledForDeletion = $ExecHistoriquePrixsToDelete;

        foreach ($ExecHistoriquePrixsToDelete as $ExecHistoriquePrixRemoved) {
            $ExecHistoriquePrixRemoved->setExecContrat(null);
        }

        $this->collExecHistoriquePrixs = null;
        foreach ($ExecHistoriquePrixs as $ExecHistoriquePrix) {
            $this->addExecHistoriquePrix($ExecHistoriquePrix);
        }

        $this->collExecHistoriquePrixs = $ExecHistoriquePrixs;
        $this->collExecHistoriquePrixsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecHistoriquePrix objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecHistoriquePrix objects.
     * @throws PropelException
     */
    public function countExecHistoriquePrixs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecHistoriquePrixsPartial && !$this->isNew();
        if (null === $this->collExecHistoriquePrixs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecHistoriquePrixs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecHistoriquePrixs());
            }
            $query = ExecHistoriquePrixQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecHistoriquePrixs);
    }

    /**
     * Method called to associate a ExecHistoriquePrix object to this object
     * through the ExecHistoriquePrix foreign key attribute.
     *
     * @param   ExecHistoriquePrix $l ExecHistoriquePrix
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecHistoriquePrix(ExecHistoriquePrix $l)
    {
        if ($this->collExecHistoriquePrixs === null) {
            $this->initExecHistoriquePrixs();
            $this->collExecHistoriquePrixsPartial = true;
        }
        if (!in_array($l, $this->collExecHistoriquePrixs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecHistoriquePrix($l);
        }

        return $this;
    }

    /**
     * @param	ExecHistoriquePrix $ExecHistoriquePrix The ExecHistoriquePrix object to add.
     */
    protected function doAddExecHistoriquePrix($ExecHistoriquePrix)
    {
        $this->collExecHistoriquePrixs[]= $ExecHistoriquePrix;
        $ExecHistoriquePrix->setExecContrat($this);
    }

    /**
     * @param	ExecHistoriquePrix $ExecHistoriquePrix The ExecHistoriquePrix object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecHistoriquePrix($ExecHistoriquePrix)
    {
        if ($this->getExecHistoriquePrixs()->contains($ExecHistoriquePrix)) {
            $this->collExecHistoriquePrixs->remove($this->collExecHistoriquePrixs->search($ExecHistoriquePrix));
            if (null === $this->ExecHistoriquePrixsScheduledForDeletion) {
                $this->ExecHistoriquePrixsScheduledForDeletion = clone $this->collExecHistoriquePrixs;
                $this->ExecHistoriquePrixsScheduledForDeletion->clear();
            }
            $this->ExecHistoriquePrixsScheduledForDeletion[]= clone $ExecHistoriquePrix;
            $ExecHistoriquePrix->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecHistoriquePrix[] List of ExecHistoriquePrix objects
     */
    public function getExecHistoriquePrixsJoinExecAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('ExecAvenant', $join_behavior);

        return $this->getExecHistoriquePrixs($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecHistoriquePrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecHistoriquePrix[] List of ExecHistoriquePrix objects
     */
    public function getExecHistoriquePrixsJoinExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecHistoriquePrixQuery::create(null, $criteria);
        $query->joinWith('ExecPrix', $join_behavior);

        return $this->getExecHistoriquePrixs($query, $con);
    }

    /**
     * Clears out the collExecInscritContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecInscritContrats()
     */
    public function clearExecInscritContrats()
    {
        $this->collExecInscritContrats = null; // important to set this to null since that means it is uninitialized
        $this->collExecInscritContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecInscritContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecInscritContrats($v = true)
    {
        $this->collExecInscritContratsPartial = $v;
    }

    /**
     * Initializes the collExecInscritContrats collection.
     *
     * By default this just sets the collExecInscritContrats collection to an empty array (like clearcollExecInscritContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecInscritContrats($overrideExisting = true)
    {
        if (null !== $this->collExecInscritContrats && !$overrideExisting) {
            return;
        }
        $this->collExecInscritContrats = new PropelObjectCollection();
        $this->collExecInscritContrats->setModel('ExecInscritContrat');
    }

    /**
     * Gets an array of ExecInscritContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecInscritContrat[] List of ExecInscritContrat objects
     * @throws PropelException
     */
    public function getExecInscritContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecInscritContratsPartial && !$this->isNew();
        if (null === $this->collExecInscritContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecInscritContrats) {
                // return empty collection
                $this->initExecInscritContrats();
            } else {
                $collExecInscritContrats = ExecInscritContratQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecInscritContratsPartial && count($collExecInscritContrats)) {
                      $this->initExecInscritContrats(false);

                      foreach ($collExecInscritContrats as $obj) {
                        if (false == $this->collExecInscritContrats->contains($obj)) {
                          $this->collExecInscritContrats->append($obj);
                        }
                      }

                      $this->collExecInscritContratsPartial = true;
                    }

                    $collExecInscritContrats->getInternalIterator()->rewind();

                    return $collExecInscritContrats;
                }

                if ($partial && $this->collExecInscritContrats) {
                    foreach ($this->collExecInscritContrats as $obj) {
                        if ($obj->isNew()) {
                            $collExecInscritContrats[] = $obj;
                        }
                    }
                }

                $this->collExecInscritContrats = $collExecInscritContrats;
                $this->collExecInscritContratsPartial = false;
            }
        }

        return $this->collExecInscritContrats;
    }

    /**
     * Sets a collection of ExecInscritContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecInscritContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecInscritContrats(PropelCollection $ExecInscritContrats, PropelPDO $con = null)
    {
        $ExecInscritContratsToDelete = $this->getExecInscritContrats(new Criteria(), $con)->diff($ExecInscritContrats);


        $this->ExecInscritContratsScheduledForDeletion = $ExecInscritContratsToDelete;

        foreach ($ExecInscritContratsToDelete as $ExecInscritContratRemoved) {
            $ExecInscritContratRemoved->setExecContrat(null);
        }

        $this->collExecInscritContrats = null;
        foreach ($ExecInscritContrats as $ExecInscritContrat) {
            $this->addExecInscritContrat($ExecInscritContrat);
        }

        $this->collExecInscritContrats = $ExecInscritContrats;
        $this->collExecInscritContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecInscritContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecInscritContrat objects.
     * @throws PropelException
     */
    public function countExecInscritContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecInscritContratsPartial && !$this->isNew();
        if (null === $this->collExecInscritContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecInscritContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecInscritContrats());
            }
            $query = ExecInscritContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecInscritContrats);
    }

    /**
     * Method called to associate a ExecInscritContrat object to this object
     * through the ExecInscritContrat foreign key attribute.
     *
     * @param   ExecInscritContrat $l ExecInscritContrat
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecInscritContrat(ExecInscritContrat $l)
    {
        if ($this->collExecInscritContrats === null) {
            $this->initExecInscritContrats();
            $this->collExecInscritContratsPartial = true;
        }
        if (!in_array($l, $this->collExecInscritContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecInscritContrat($l);
        }

        return $this;
    }

    /**
     * @param	ExecInscritContrat $ExecInscritContrat The ExecInscritContrat object to add.
     */
    protected function doAddExecInscritContrat($ExecInscritContrat)
    {
        $this->collExecInscritContrats[]= $ExecInscritContrat;
        $ExecInscritContrat->setExecContrat($this);
    }

    /**
     * @param	ExecInscritContrat $ExecInscritContrat The ExecInscritContrat object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecInscritContrat($ExecInscritContrat)
    {
        if ($this->getExecInscritContrats()->contains($ExecInscritContrat)) {
            $this->collExecInscritContrats->remove($this->collExecInscritContrats->search($ExecInscritContrat));
            if (null === $this->ExecInscritContratsScheduledForDeletion) {
                $this->ExecInscritContratsScheduledForDeletion = clone $this->collExecInscritContrats;
                $this->ExecInscritContratsScheduledForDeletion->clear();
            }
            $this->ExecInscritContratsScheduledForDeletion[]= clone $ExecInscritContrat;
            $ExecInscritContrat->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecInscritContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecInscritContrat[] List of ExecInscritContrat objects
     */
    public function getExecInscritContratsJoinExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecInscritContratQuery::create(null, $criteria);
        $query->joinWith('ExecContractant', $join_behavior);

        return $this->getExecInscritContrats($query, $con);
    }

    /**
     * Clears out the collExecLivrableContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecLivrableContrats()
     */
    public function clearExecLivrableContrats()
    {
        $this->collExecLivrableContrats = null; // important to set this to null since that means it is uninitialized
        $this->collExecLivrableContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecLivrableContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecLivrableContrats($v = true)
    {
        $this->collExecLivrableContratsPartial = $v;
    }

    /**
     * Initializes the collExecLivrableContrats collection.
     *
     * By default this just sets the collExecLivrableContrats collection to an empty array (like clearcollExecLivrableContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecLivrableContrats($overrideExisting = true)
    {
        if (null !== $this->collExecLivrableContrats && !$overrideExisting) {
            return;
        }
        $this->collExecLivrableContrats = new PropelObjectCollection();
        $this->collExecLivrableContrats->setModel('ExecLivrableContrat');
    }

    /**
     * Gets an array of ExecLivrableContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecLivrableContrat[] List of ExecLivrableContrat objects
     * @throws PropelException
     */
    public function getExecLivrableContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecLivrableContratsPartial && !$this->isNew();
        if (null === $this->collExecLivrableContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecLivrableContrats) {
                // return empty collection
                $this->initExecLivrableContrats();
            } else {
                $collExecLivrableContrats = ExecLivrableContratQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecLivrableContratsPartial && count($collExecLivrableContrats)) {
                      $this->initExecLivrableContrats(false);

                      foreach ($collExecLivrableContrats as $obj) {
                        if (false == $this->collExecLivrableContrats->contains($obj)) {
                          $this->collExecLivrableContrats->append($obj);
                        }
                      }

                      $this->collExecLivrableContratsPartial = true;
                    }

                    $collExecLivrableContrats->getInternalIterator()->rewind();

                    return $collExecLivrableContrats;
                }

                if ($partial && $this->collExecLivrableContrats) {
                    foreach ($this->collExecLivrableContrats as $obj) {
                        if ($obj->isNew()) {
                            $collExecLivrableContrats[] = $obj;
                        }
                    }
                }

                $this->collExecLivrableContrats = $collExecLivrableContrats;
                $this->collExecLivrableContratsPartial = false;
            }
        }

        return $this->collExecLivrableContrats;
    }

    /**
     * Sets a collection of ExecLivrableContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecLivrableContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecLivrableContrats(PropelCollection $ExecLivrableContrats, PropelPDO $con = null)
    {
        $ExecLivrableContratsToDelete = $this->getExecLivrableContrats(new Criteria(), $con)->diff($ExecLivrableContrats);


        $this->ExecLivrableContratsScheduledForDeletion = $ExecLivrableContratsToDelete;

        foreach ($ExecLivrableContratsToDelete as $ExecLivrableContratRemoved) {
            $ExecLivrableContratRemoved->setExecContrat(null);
        }

        $this->collExecLivrableContrats = null;
        foreach ($ExecLivrableContrats as $ExecLivrableContrat) {
            $this->addExecLivrableContrat($ExecLivrableContrat);
        }

        $this->collExecLivrableContrats = $ExecLivrableContrats;
        $this->collExecLivrableContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecLivrableContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecLivrableContrat objects.
     * @throws PropelException
     */
    public function countExecLivrableContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecLivrableContratsPartial && !$this->isNew();
        if (null === $this->collExecLivrableContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecLivrableContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecLivrableContrats());
            }
            $query = ExecLivrableContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecLivrableContrats);
    }

    /**
     * Method called to associate a ExecLivrableContrat object to this object
     * through the ExecLivrableContrat foreign key attribute.
     *
     * @param   ExecLivrableContrat $l ExecLivrableContrat
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecLivrableContrat(ExecLivrableContrat $l)
    {
        if ($this->collExecLivrableContrats === null) {
            $this->initExecLivrableContrats();
            $this->collExecLivrableContratsPartial = true;
        }
        if (!in_array($l, $this->collExecLivrableContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecLivrableContrat($l);
        }

        return $this;
    }

    /**
     * @param	ExecLivrableContrat $ExecLivrableContrat The ExecLivrableContrat object to add.
     */
    protected function doAddExecLivrableContrat($ExecLivrableContrat)
    {
        $this->collExecLivrableContrats[]= $ExecLivrableContrat;
        $ExecLivrableContrat->setExecContrat($this);
    }

    /**
     * @param	ExecLivrableContrat $ExecLivrableContrat The ExecLivrableContrat object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecLivrableContrat($ExecLivrableContrat)
    {
        if ($this->getExecLivrableContrats()->contains($ExecLivrableContrat)) {
            $this->collExecLivrableContrats->remove($this->collExecLivrableContrats->search($ExecLivrableContrat));
            if (null === $this->ExecLivrableContratsScheduledForDeletion) {
                $this->ExecLivrableContratsScheduledForDeletion = clone $this->collExecLivrableContrats;
                $this->ExecLivrableContratsScheduledForDeletion->clear();
            }
            $this->ExecLivrableContratsScheduledForDeletion[]= clone $ExecLivrableContrat;
            $ExecLivrableContrat->setExecContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collExecPhases collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecPhases()
     */
    public function clearExecPhases()
    {
        $this->collExecPhases = null; // important to set this to null since that means it is uninitialized
        $this->collExecPhasesPartial = null;

        return $this;
    }

    /**
     * reset is the collExecPhases collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecPhases($v = true)
    {
        $this->collExecPhasesPartial = $v;
    }

    /**
     * Initializes the collExecPhases collection.
     *
     * By default this just sets the collExecPhases collection to an empty array (like clearcollExecPhases());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecPhases($overrideExisting = true)
    {
        if (null !== $this->collExecPhases && !$overrideExisting) {
            return;
        }
        $this->collExecPhases = new PropelObjectCollection();
        $this->collExecPhases->setModel('ExecPhase');
    }

    /**
     * Gets an array of ExecPhase objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecPhase[] List of ExecPhase objects
     * @throws PropelException
     */
    public function getExecPhases($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecPhasesPartial && !$this->isNew();
        if (null === $this->collExecPhases || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecPhases) {
                // return empty collection
                $this->initExecPhases();
            } else {
                $collExecPhases = ExecPhaseQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecPhasesPartial && count($collExecPhases)) {
                      $this->initExecPhases(false);

                      foreach ($collExecPhases as $obj) {
                        if (false == $this->collExecPhases->contains($obj)) {
                          $this->collExecPhases->append($obj);
                        }
                      }

                      $this->collExecPhasesPartial = true;
                    }

                    $collExecPhases->getInternalIterator()->rewind();

                    return $collExecPhases;
                }

                if ($partial && $this->collExecPhases) {
                    foreach ($this->collExecPhases as $obj) {
                        if ($obj->isNew()) {
                            $collExecPhases[] = $obj;
                        }
                    }
                }

                $this->collExecPhases = $collExecPhases;
                $this->collExecPhasesPartial = false;
            }
        }

        return $this->collExecPhases;
    }

    /**
     * Sets a collection of ExecPhase objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecPhases A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecPhases(PropelCollection $ExecPhases, PropelPDO $con = null)
    {
        $ExecPhasesToDelete = $this->getExecPhases(new Criteria(), $con)->diff($ExecPhases);


        $this->ExecPhasesScheduledForDeletion = $ExecPhasesToDelete;

        foreach ($ExecPhasesToDelete as $ExecPhaseRemoved) {
            $ExecPhaseRemoved->setExecContrat(null);
        }

        $this->collExecPhases = null;
        foreach ($ExecPhases as $ExecPhase) {
            $this->addExecPhase($ExecPhase);
        }

        $this->collExecPhases = $ExecPhases;
        $this->collExecPhasesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecPhase objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecPhase objects.
     * @throws PropelException
     */
    public function countExecPhases(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecPhasesPartial && !$this->isNew();
        if (null === $this->collExecPhases || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecPhases) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecPhases());
            }
            $query = ExecPhaseQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecPhases);
    }

    /**
     * Method called to associate a ExecPhase object to this object
     * through the ExecPhase foreign key attribute.
     *
     * @param   ExecPhase $l ExecPhase
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecPhase(ExecPhase $l)
    {
        if ($this->collExecPhases === null) {
            $this->initExecPhases();
            $this->collExecPhasesPartial = true;
        }
        if (!in_array($l, $this->collExecPhases->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecPhase($l);
        }

        return $this;
    }

    /**
     * @param	ExecPhase $ExecPhase The ExecPhase object to add.
     */
    protected function doAddExecPhase($ExecPhase)
    {
        $this->collExecPhases[]= $ExecPhase;
        $ExecPhase->setExecContrat($this);
    }

    /**
     * @param	ExecPhase $ExecPhase The ExecPhase object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecPhase($ExecPhase)
    {
        if ($this->getExecPhases()->contains($ExecPhase)) {
            $this->collExecPhases->remove($this->collExecPhases->search($ExecPhase));
            if (null === $this->ExecPhasesScheduledForDeletion) {
                $this->ExecPhasesScheduledForDeletion = clone $this->collExecPhases;
                $this->ExecPhasesScheduledForDeletion->clear();
            }
            $this->ExecPhasesScheduledForDeletion[]= clone $ExecPhase;
            $ExecPhase->setExecContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collExecPieces collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecPieces()
     */
    public function clearExecPieces()
    {
        $this->collExecPieces = null; // important to set this to null since that means it is uninitialized
        $this->collExecPiecesPartial = null;

        return $this;
    }

    /**
     * reset is the collExecPieces collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecPieces($v = true)
    {
        $this->collExecPiecesPartial = $v;
    }

    /**
     * Initializes the collExecPieces collection.
     *
     * By default this just sets the collExecPieces collection to an empty array (like clearcollExecPieces());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecPieces($overrideExisting = true)
    {
        if (null !== $this->collExecPieces && !$overrideExisting) {
            return;
        }
        $this->collExecPieces = new PropelObjectCollection();
        $this->collExecPieces->setModel('ExecPiece');
    }

    /**
     * Gets an array of ExecPiece objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecPiece[] List of ExecPiece objects
     * @throws PropelException
     */
    public function getExecPieces($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecPiecesPartial && !$this->isNew();
        if (null === $this->collExecPieces || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecPieces) {
                // return empty collection
                $this->initExecPieces();
            } else {
                $collExecPieces = ExecPieceQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecPiecesPartial && count($collExecPieces)) {
                      $this->initExecPieces(false);

                      foreach ($collExecPieces as $obj) {
                        if (false == $this->collExecPieces->contains($obj)) {
                          $this->collExecPieces->append($obj);
                        }
                      }

                      $this->collExecPiecesPartial = true;
                    }

                    $collExecPieces->getInternalIterator()->rewind();

                    return $collExecPieces;
                }

                if ($partial && $this->collExecPieces) {
                    foreach ($this->collExecPieces as $obj) {
                        if ($obj->isNew()) {
                            $collExecPieces[] = $obj;
                        }
                    }
                }

                $this->collExecPieces = $collExecPieces;
                $this->collExecPiecesPartial = false;
            }
        }

        return $this->collExecPieces;
    }

    /**
     * Sets a collection of ExecPiece objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecPieces A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecPieces(PropelCollection $ExecPieces, PropelPDO $con = null)
    {
        $ExecPiecesToDelete = $this->getExecPieces(new Criteria(), $con)->diff($ExecPieces);


        $this->ExecPiecesScheduledForDeletion = $ExecPiecesToDelete;

        foreach ($ExecPiecesToDelete as $ExecPieceRemoved) {
            $ExecPieceRemoved->setExecContrat(null);
        }

        $this->collExecPieces = null;
        foreach ($ExecPieces as $ExecPiece) {
            $this->addExecPiece($ExecPiece);
        }

        $this->collExecPieces = $ExecPieces;
        $this->collExecPiecesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecPiece objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecPiece objects.
     * @throws PropelException
     */
    public function countExecPieces(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecPiecesPartial && !$this->isNew();
        if (null === $this->collExecPieces || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecPieces) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecPieces());
            }
            $query = ExecPieceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecPieces);
    }

    /**
     * Method called to associate a ExecPiece object to this object
     * through the ExecPiece foreign key attribute.
     *
     * @param   ExecPiece $l ExecPiece
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecPiece(ExecPiece $l)
    {
        if ($this->collExecPieces === null) {
            $this->initExecPieces();
            $this->collExecPiecesPartial = true;
        }
        if (!in_array($l, $this->collExecPieces->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecPiece($l);
        }

        return $this;
    }

    /**
     * @param	ExecPiece $ExecPiece The ExecPiece object to add.
     */
    protected function doAddExecPiece($ExecPiece)
    {
        $this->collExecPieces[]= $ExecPiece;
        $ExecPiece->setExecContrat($this);
    }

    /**
     * @param	ExecPiece $ExecPiece The ExecPiece object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecPiece($ExecPiece)
    {
        if ($this->getExecPieces()->contains($ExecPiece)) {
            $this->collExecPieces->remove($this->collExecPieces->search($ExecPiece));
            if (null === $this->ExecPiecesScheduledForDeletion) {
                $this->ExecPiecesScheduledForDeletion = clone $this->collExecPieces;
                $this->ExecPiecesScheduledForDeletion->clear();
            }
            $this->ExecPiecesScheduledForDeletion[]= clone $ExecPiece;
            $ExecPiece->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecPieces from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecPiece[] List of ExecPiece objects
     */
    public function getExecPiecesJoinExecTypePiece($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecPieceQuery::create(null, $criteria);
        $query->joinWith('ExecTypePiece', $join_behavior);

        return $this->getExecPieces($query, $con);
    }

    /**
     * Clears out the collExecPieceAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecPieceAvenants()
     */
    public function clearExecPieceAvenants()
    {
        $this->collExecPieceAvenants = null; // important to set this to null since that means it is uninitialized
        $this->collExecPieceAvenantsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecPieceAvenants collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecPieceAvenants($v = true)
    {
        $this->collExecPieceAvenantsPartial = $v;
    }

    /**
     * Initializes the collExecPieceAvenants collection.
     *
     * By default this just sets the collExecPieceAvenants collection to an empty array (like clearcollExecPieceAvenants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecPieceAvenants($overrideExisting = true)
    {
        if (null !== $this->collExecPieceAvenants && !$overrideExisting) {
            return;
        }
        $this->collExecPieceAvenants = new PropelObjectCollection();
        $this->collExecPieceAvenants->setModel('ExecPieceAvenant');
    }

    /**
     * Gets an array of ExecPieceAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecPieceAvenant[] List of ExecPieceAvenant objects
     * @throws PropelException
     */
    public function getExecPieceAvenants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecPieceAvenantsPartial && !$this->isNew();
        if (null === $this->collExecPieceAvenants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecPieceAvenants) {
                // return empty collection
                $this->initExecPieceAvenants();
            } else {
                $collExecPieceAvenants = ExecPieceAvenantQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecPieceAvenantsPartial && count($collExecPieceAvenants)) {
                      $this->initExecPieceAvenants(false);

                      foreach ($collExecPieceAvenants as $obj) {
                        if (false == $this->collExecPieceAvenants->contains($obj)) {
                          $this->collExecPieceAvenants->append($obj);
                        }
                      }

                      $this->collExecPieceAvenantsPartial = true;
                    }

                    $collExecPieceAvenants->getInternalIterator()->rewind();

                    return $collExecPieceAvenants;
                }

                if ($partial && $this->collExecPieceAvenants) {
                    foreach ($this->collExecPieceAvenants as $obj) {
                        if ($obj->isNew()) {
                            $collExecPieceAvenants[] = $obj;
                        }
                    }
                }

                $this->collExecPieceAvenants = $collExecPieceAvenants;
                $this->collExecPieceAvenantsPartial = false;
            }
        }

        return $this->collExecPieceAvenants;
    }

    /**
     * Sets a collection of ExecPieceAvenant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecPieceAvenants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecPieceAvenants(PropelCollection $ExecPieceAvenants, PropelPDO $con = null)
    {
        $ExecPieceAvenantsToDelete = $this->getExecPieceAvenants(new Criteria(), $con)->diff($ExecPieceAvenants);


        $this->ExecPieceAvenantsScheduledForDeletion = $ExecPieceAvenantsToDelete;

        foreach ($ExecPieceAvenantsToDelete as $ExecPieceAvenantRemoved) {
            $ExecPieceAvenantRemoved->setExecContrat(null);
        }

        $this->collExecPieceAvenants = null;
        foreach ($ExecPieceAvenants as $ExecPieceAvenant) {
            $this->addExecPieceAvenant($ExecPieceAvenant);
        }

        $this->collExecPieceAvenants = $ExecPieceAvenants;
        $this->collExecPieceAvenantsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecPieceAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecPieceAvenant objects.
     * @throws PropelException
     */
    public function countExecPieceAvenants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecPieceAvenantsPartial && !$this->isNew();
        if (null === $this->collExecPieceAvenants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecPieceAvenants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecPieceAvenants());
            }
            $query = ExecPieceAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecPieceAvenants);
    }

    /**
     * Method called to associate a ExecPieceAvenant object to this object
     * through the ExecPieceAvenant foreign key attribute.
     *
     * @param   ExecPieceAvenant $l ExecPieceAvenant
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecPieceAvenant(ExecPieceAvenant $l)
    {
        if ($this->collExecPieceAvenants === null) {
            $this->initExecPieceAvenants();
            $this->collExecPieceAvenantsPartial = true;
        }
        if (!in_array($l, $this->collExecPieceAvenants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecPieceAvenant($l);
        }

        return $this;
    }

    /**
     * @param	ExecPieceAvenant $ExecPieceAvenant The ExecPieceAvenant object to add.
     */
    protected function doAddExecPieceAvenant($ExecPieceAvenant)
    {
        $this->collExecPieceAvenants[]= $ExecPieceAvenant;
        $ExecPieceAvenant->setExecContrat($this);
    }

    /**
     * @param	ExecPieceAvenant $ExecPieceAvenant The ExecPieceAvenant object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecPieceAvenant($ExecPieceAvenant)
    {
        if ($this->getExecPieceAvenants()->contains($ExecPieceAvenant)) {
            $this->collExecPieceAvenants->remove($this->collExecPieceAvenants->search($ExecPieceAvenant));
            if (null === $this->ExecPieceAvenantsScheduledForDeletion) {
                $this->ExecPieceAvenantsScheduledForDeletion = clone $this->collExecPieceAvenants;
                $this->ExecPieceAvenantsScheduledForDeletion->clear();
            }
            $this->ExecPieceAvenantsScheduledForDeletion[]= clone $ExecPieceAvenant;
            $ExecPieceAvenant->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecPieceAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecPieceAvenant[] List of ExecPieceAvenant objects
     */
    public function getExecPieceAvenantsJoinExecAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecPieceAvenantQuery::create(null, $criteria);
        $query->joinWith('ExecAvenant', $join_behavior);

        return $this->getExecPieceAvenants($query, $con);
    }

    /**
     * Clears out the collExecPieceContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecPieceContrats()
     */
    public function clearExecPieceContrats()
    {
        $this->collExecPieceContrats = null; // important to set this to null since that means it is uninitialized
        $this->collExecPieceContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecPieceContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecPieceContrats($v = true)
    {
        $this->collExecPieceContratsPartial = $v;
    }

    /**
     * Initializes the collExecPieceContrats collection.
     *
     * By default this just sets the collExecPieceContrats collection to an empty array (like clearcollExecPieceContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecPieceContrats($overrideExisting = true)
    {
        if (null !== $this->collExecPieceContrats && !$overrideExisting) {
            return;
        }
        $this->collExecPieceContrats = new PropelObjectCollection();
        $this->collExecPieceContrats->setModel('ExecPieceContrat');
    }

    /**
     * Gets an array of ExecPieceContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecPieceContrat[] List of ExecPieceContrat objects
     * @throws PropelException
     */
    public function getExecPieceContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecPieceContratsPartial && !$this->isNew();
        if (null === $this->collExecPieceContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecPieceContrats) {
                // return empty collection
                $this->initExecPieceContrats();
            } else {
                $collExecPieceContrats = ExecPieceContratQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecPieceContratsPartial && count($collExecPieceContrats)) {
                      $this->initExecPieceContrats(false);

                      foreach ($collExecPieceContrats as $obj) {
                        if (false == $this->collExecPieceContrats->contains($obj)) {
                          $this->collExecPieceContrats->append($obj);
                        }
                      }

                      $this->collExecPieceContratsPartial = true;
                    }

                    $collExecPieceContrats->getInternalIterator()->rewind();

                    return $collExecPieceContrats;
                }

                if ($partial && $this->collExecPieceContrats) {
                    foreach ($this->collExecPieceContrats as $obj) {
                        if ($obj->isNew()) {
                            $collExecPieceContrats[] = $obj;
                        }
                    }
                }

                $this->collExecPieceContrats = $collExecPieceContrats;
                $this->collExecPieceContratsPartial = false;
            }
        }

        return $this->collExecPieceContrats;
    }

    /**
     * Sets a collection of ExecPieceContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecPieceContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecPieceContrats(PropelCollection $ExecPieceContrats, PropelPDO $con = null)
    {
        $ExecPieceContratsToDelete = $this->getExecPieceContrats(new Criteria(), $con)->diff($ExecPieceContrats);


        $this->ExecPieceContratsScheduledForDeletion = $ExecPieceContratsToDelete;

        foreach ($ExecPieceContratsToDelete as $ExecPieceContratRemoved) {
            $ExecPieceContratRemoved->setExecContrat(null);
        }

        $this->collExecPieceContrats = null;
        foreach ($ExecPieceContrats as $ExecPieceContrat) {
            $this->addExecPieceContrat($ExecPieceContrat);
        }

        $this->collExecPieceContrats = $ExecPieceContrats;
        $this->collExecPieceContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecPieceContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecPieceContrat objects.
     * @throws PropelException
     */
    public function countExecPieceContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecPieceContratsPartial && !$this->isNew();
        if (null === $this->collExecPieceContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecPieceContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecPieceContrats());
            }
            $query = ExecPieceContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecPieceContrats);
    }

    /**
     * Method called to associate a ExecPieceContrat object to this object
     * through the ExecPieceContrat foreign key attribute.
     *
     * @param   ExecPieceContrat $l ExecPieceContrat
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecPieceContrat(ExecPieceContrat $l)
    {
        if ($this->collExecPieceContrats === null) {
            $this->initExecPieceContrats();
            $this->collExecPieceContratsPartial = true;
        }
        if (!in_array($l, $this->collExecPieceContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecPieceContrat($l);
        }

        return $this;
    }

    /**
     * @param	ExecPieceContrat $ExecPieceContrat The ExecPieceContrat object to add.
     */
    protected function doAddExecPieceContrat($ExecPieceContrat)
    {
        $this->collExecPieceContrats[]= $ExecPieceContrat;
        $ExecPieceContrat->setExecContrat($this);
    }

    /**
     * @param	ExecPieceContrat $ExecPieceContrat The ExecPieceContrat object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecPieceContrat($ExecPieceContrat)
    {
        if ($this->getExecPieceContrats()->contains($ExecPieceContrat)) {
            $this->collExecPieceContrats->remove($this->collExecPieceContrats->search($ExecPieceContrat));
            if (null === $this->ExecPieceContratsScheduledForDeletion) {
                $this->ExecPieceContratsScheduledForDeletion = clone $this->collExecPieceContrats;
                $this->ExecPieceContratsScheduledForDeletion->clear();
            }
            $this->ExecPieceContratsScheduledForDeletion[]= clone $ExecPieceContrat;
            $ExecPieceContrat->setExecContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collExecPieceDossierpaiements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecPieceDossierpaiements()
     */
    public function clearExecPieceDossierpaiements()
    {
        $this->collExecPieceDossierpaiements = null; // important to set this to null since that means it is uninitialized
        $this->collExecPieceDossierpaiementsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecPieceDossierpaiements collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecPieceDossierpaiements($v = true)
    {
        $this->collExecPieceDossierpaiementsPartial = $v;
    }

    /**
     * Initializes the collExecPieceDossierpaiements collection.
     *
     * By default this just sets the collExecPieceDossierpaiements collection to an empty array (like clearcollExecPieceDossierpaiements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecPieceDossierpaiements($overrideExisting = true)
    {
        if (null !== $this->collExecPieceDossierpaiements && !$overrideExisting) {
            return;
        }
        $this->collExecPieceDossierpaiements = new PropelObjectCollection();
        $this->collExecPieceDossierpaiements->setModel('ExecPieceDossierpaiement');
    }

    /**
     * Gets an array of ExecPieceDossierpaiement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecPieceDossierpaiement[] List of ExecPieceDossierpaiement objects
     * @throws PropelException
     */
    public function getExecPieceDossierpaiements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecPieceDossierpaiementsPartial && !$this->isNew();
        if (null === $this->collExecPieceDossierpaiements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecPieceDossierpaiements) {
                // return empty collection
                $this->initExecPieceDossierpaiements();
            } else {
                $collExecPieceDossierpaiements = ExecPieceDossierpaiementQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecPieceDossierpaiementsPartial && count($collExecPieceDossierpaiements)) {
                      $this->initExecPieceDossierpaiements(false);

                      foreach ($collExecPieceDossierpaiements as $obj) {
                        if (false == $this->collExecPieceDossierpaiements->contains($obj)) {
                          $this->collExecPieceDossierpaiements->append($obj);
                        }
                      }

                      $this->collExecPieceDossierpaiementsPartial = true;
                    }

                    $collExecPieceDossierpaiements->getInternalIterator()->rewind();

                    return $collExecPieceDossierpaiements;
                }

                if ($partial && $this->collExecPieceDossierpaiements) {
                    foreach ($this->collExecPieceDossierpaiements as $obj) {
                        if ($obj->isNew()) {
                            $collExecPieceDossierpaiements[] = $obj;
                        }
                    }
                }

                $this->collExecPieceDossierpaiements = $collExecPieceDossierpaiements;
                $this->collExecPieceDossierpaiementsPartial = false;
            }
        }

        return $this->collExecPieceDossierpaiements;
    }

    /**
     * Sets a collection of ExecPieceDossierpaiement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecPieceDossierpaiements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecPieceDossierpaiements(PropelCollection $ExecPieceDossierpaiements, PropelPDO $con = null)
    {
        $ExecPieceDossierpaiementsToDelete = $this->getExecPieceDossierpaiements(new Criteria(), $con)->diff($ExecPieceDossierpaiements);


        $this->ExecPieceDossierpaiementsScheduledForDeletion = $ExecPieceDossierpaiementsToDelete;

        foreach ($ExecPieceDossierpaiementsToDelete as $ExecPieceDossierpaiementRemoved) {
            $ExecPieceDossierpaiementRemoved->setExecContrat(null);
        }

        $this->collExecPieceDossierpaiements = null;
        foreach ($ExecPieceDossierpaiements as $ExecPieceDossierpaiement) {
            $this->addExecPieceDossierpaiement($ExecPieceDossierpaiement);
        }

        $this->collExecPieceDossierpaiements = $ExecPieceDossierpaiements;
        $this->collExecPieceDossierpaiementsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecPieceDossierpaiement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecPieceDossierpaiement objects.
     * @throws PropelException
     */
    public function countExecPieceDossierpaiements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecPieceDossierpaiementsPartial && !$this->isNew();
        if (null === $this->collExecPieceDossierpaiements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecPieceDossierpaiements) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecPieceDossierpaiements());
            }
            $query = ExecPieceDossierpaiementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecPieceDossierpaiements);
    }

    /**
     * Method called to associate a ExecPieceDossierpaiement object to this object
     * through the ExecPieceDossierpaiement foreign key attribute.
     *
     * @param   ExecPieceDossierpaiement $l ExecPieceDossierpaiement
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecPieceDossierpaiement(ExecPieceDossierpaiement $l)
    {
        if ($this->collExecPieceDossierpaiements === null) {
            $this->initExecPieceDossierpaiements();
            $this->collExecPieceDossierpaiementsPartial = true;
        }
        if (!in_array($l, $this->collExecPieceDossierpaiements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecPieceDossierpaiement($l);
        }

        return $this;
    }

    /**
     * @param	ExecPieceDossierpaiement $ExecPieceDossierpaiement The ExecPieceDossierpaiement object to add.
     */
    protected function doAddExecPieceDossierpaiement($ExecPieceDossierpaiement)
    {
        $this->collExecPieceDossierpaiements[]= $ExecPieceDossierpaiement;
        $ExecPieceDossierpaiement->setExecContrat($this);
    }

    /**
     * @param	ExecPieceDossierpaiement $ExecPieceDossierpaiement The ExecPieceDossierpaiement object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecPieceDossierpaiement($ExecPieceDossierpaiement)
    {
        if ($this->getExecPieceDossierpaiements()->contains($ExecPieceDossierpaiement)) {
            $this->collExecPieceDossierpaiements->remove($this->collExecPieceDossierpaiements->search($ExecPieceDossierpaiement));
            if (null === $this->ExecPieceDossierpaiementsScheduledForDeletion) {
                $this->ExecPieceDossierpaiementsScheduledForDeletion = clone $this->collExecPieceDossierpaiements;
                $this->ExecPieceDossierpaiementsScheduledForDeletion->clear();
            }
            $this->ExecPieceDossierpaiementsScheduledForDeletion[]= $ExecPieceDossierpaiement;
            $ExecPieceDossierpaiement->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecPieceDossierpaiements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecPieceDossierpaiement[] List of ExecPieceDossierpaiement objects
     */
    public function getExecPieceDossierpaiementsJoinExecDossierPaiement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecPieceDossierpaiementQuery::create(null, $criteria);
        $query->joinWith('ExecDossierPaiement', $join_behavior);

        return $this->getExecPieceDossierpaiements($query, $con);
    }

    /**
     * Clears out the collExecPieceEvenements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecPieceEvenements()
     */
    public function clearExecPieceEvenements()
    {
        $this->collExecPieceEvenements = null; // important to set this to null since that means it is uninitialized
        $this->collExecPieceEvenementsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecPieceEvenements collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecPieceEvenements($v = true)
    {
        $this->collExecPieceEvenementsPartial = $v;
    }

    /**
     * Initializes the collExecPieceEvenements collection.
     *
     * By default this just sets the collExecPieceEvenements collection to an empty array (like clearcollExecPieceEvenements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecPieceEvenements($overrideExisting = true)
    {
        if (null !== $this->collExecPieceEvenements && !$overrideExisting) {
            return;
        }
        $this->collExecPieceEvenements = new PropelObjectCollection();
        $this->collExecPieceEvenements->setModel('ExecPieceEvenement');
    }

    /**
     * Gets an array of ExecPieceEvenement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecPieceEvenement[] List of ExecPieceEvenement objects
     * @throws PropelException
     */
    public function getExecPieceEvenements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecPieceEvenementsPartial && !$this->isNew();
        if (null === $this->collExecPieceEvenements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecPieceEvenements) {
                // return empty collection
                $this->initExecPieceEvenements();
            } else {
                $collExecPieceEvenements = ExecPieceEvenementQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecPieceEvenementsPartial && count($collExecPieceEvenements)) {
                      $this->initExecPieceEvenements(false);

                      foreach ($collExecPieceEvenements as $obj) {
                        if (false == $this->collExecPieceEvenements->contains($obj)) {
                          $this->collExecPieceEvenements->append($obj);
                        }
                      }

                      $this->collExecPieceEvenementsPartial = true;
                    }

                    $collExecPieceEvenements->getInternalIterator()->rewind();

                    return $collExecPieceEvenements;
                }

                if ($partial && $this->collExecPieceEvenements) {
                    foreach ($this->collExecPieceEvenements as $obj) {
                        if ($obj->isNew()) {
                            $collExecPieceEvenements[] = $obj;
                        }
                    }
                }

                $this->collExecPieceEvenements = $collExecPieceEvenements;
                $this->collExecPieceEvenementsPartial = false;
            }
        }

        return $this->collExecPieceEvenements;
    }

    /**
     * Sets a collection of ExecPieceEvenement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecPieceEvenements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecPieceEvenements(PropelCollection $ExecPieceEvenements, PropelPDO $con = null)
    {
        $ExecPieceEvenementsToDelete = $this->getExecPieceEvenements(new Criteria(), $con)->diff($ExecPieceEvenements);


        $this->ExecPieceEvenementsScheduledForDeletion = $ExecPieceEvenementsToDelete;

        foreach ($ExecPieceEvenementsToDelete as $ExecPieceEvenementRemoved) {
            $ExecPieceEvenementRemoved->setExecContrat(null);
        }

        $this->collExecPieceEvenements = null;
        foreach ($ExecPieceEvenements as $ExecPieceEvenement) {
            $this->addExecPieceEvenement($ExecPieceEvenement);
        }

        $this->collExecPieceEvenements = $ExecPieceEvenements;
        $this->collExecPieceEvenementsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecPieceEvenement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecPieceEvenement objects.
     * @throws PropelException
     */
    public function countExecPieceEvenements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecPieceEvenementsPartial && !$this->isNew();
        if (null === $this->collExecPieceEvenements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecPieceEvenements) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecPieceEvenements());
            }
            $query = ExecPieceEvenementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecPieceEvenements);
    }

    /**
     * Method called to associate a ExecPieceEvenement object to this object
     * through the ExecPieceEvenement foreign key attribute.
     *
     * @param   ExecPieceEvenement $l ExecPieceEvenement
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecPieceEvenement(ExecPieceEvenement $l)
    {
        if ($this->collExecPieceEvenements === null) {
            $this->initExecPieceEvenements();
            $this->collExecPieceEvenementsPartial = true;
        }
        if (!in_array($l, $this->collExecPieceEvenements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecPieceEvenement($l);
        }

        return $this;
    }

    /**
     * @param	ExecPieceEvenement $ExecPieceEvenement The ExecPieceEvenement object to add.
     */
    protected function doAddExecPieceEvenement($ExecPieceEvenement)
    {
        $this->collExecPieceEvenements[]= $ExecPieceEvenement;
        $ExecPieceEvenement->setExecContrat($this);
    }

    /**
     * @param	ExecPieceEvenement $ExecPieceEvenement The ExecPieceEvenement object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecPieceEvenement($ExecPieceEvenement)
    {
        if ($this->getExecPieceEvenements()->contains($ExecPieceEvenement)) {
            $this->collExecPieceEvenements->remove($this->collExecPieceEvenements->search($ExecPieceEvenement));
            if (null === $this->ExecPieceEvenementsScheduledForDeletion) {
                $this->ExecPieceEvenementsScheduledForDeletion = clone $this->collExecPieceEvenements;
                $this->ExecPieceEvenementsScheduledForDeletion->clear();
            }
            $this->ExecPieceEvenementsScheduledForDeletion[]= clone $ExecPieceEvenement;
            $ExecPieceEvenement->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecPieceEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecPieceEvenement[] List of ExecPieceEvenement objects
     */
    public function getExecPieceEvenementsJoinExecEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecPieceEvenementQuery::create(null, $criteria);
        $query->joinWith('ExecEvenement', $join_behavior);

        return $this->getExecPieceEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecPieceEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecPieceEvenement[] List of ExecPieceEvenement objects
     */
    public function getExecPieceEvenementsJoinExecTypePieceEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecPieceEvenementQuery::create(null, $criteria);
        $query->joinWith('ExecTypePieceEvenement', $join_behavior);

        return $this->getExecPieceEvenements($query, $con);
    }

    /**
     * Clears out the collExecPieceFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecPieceFactures()
     */
    public function clearExecPieceFactures()
    {
        $this->collExecPieceFactures = null; // important to set this to null since that means it is uninitialized
        $this->collExecPieceFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collExecPieceFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecPieceFactures($v = true)
    {
        $this->collExecPieceFacturesPartial = $v;
    }

    /**
     * Initializes the collExecPieceFactures collection.
     *
     * By default this just sets the collExecPieceFactures collection to an empty array (like clearcollExecPieceFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecPieceFactures($overrideExisting = true)
    {
        if (null !== $this->collExecPieceFactures && !$overrideExisting) {
            return;
        }
        $this->collExecPieceFactures = new PropelObjectCollection();
        $this->collExecPieceFactures->setModel('ExecPieceFacture');
    }

    /**
     * Gets an array of ExecPieceFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecPieceFacture[] List of ExecPieceFacture objects
     * @throws PropelException
     */
    public function getExecPieceFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecPieceFacturesPartial && !$this->isNew();
        if (null === $this->collExecPieceFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecPieceFactures) {
                // return empty collection
                $this->initExecPieceFactures();
            } else {
                $collExecPieceFactures = ExecPieceFactureQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecPieceFacturesPartial && count($collExecPieceFactures)) {
                      $this->initExecPieceFactures(false);

                      foreach ($collExecPieceFactures as $obj) {
                        if (false == $this->collExecPieceFactures->contains($obj)) {
                          $this->collExecPieceFactures->append($obj);
                        }
                      }

                      $this->collExecPieceFacturesPartial = true;
                    }

                    $collExecPieceFactures->getInternalIterator()->rewind();

                    return $collExecPieceFactures;
                }

                if ($partial && $this->collExecPieceFactures) {
                    foreach ($this->collExecPieceFactures as $obj) {
                        if ($obj->isNew()) {
                            $collExecPieceFactures[] = $obj;
                        }
                    }
                }

                $this->collExecPieceFactures = $collExecPieceFactures;
                $this->collExecPieceFacturesPartial = false;
            }
        }

        return $this->collExecPieceFactures;
    }

    /**
     * Sets a collection of ExecPieceFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecPieceFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecPieceFactures(PropelCollection $ExecPieceFactures, PropelPDO $con = null)
    {
        $ExecPieceFacturesToDelete = $this->getExecPieceFactures(new Criteria(), $con)->diff($ExecPieceFactures);


        $this->ExecPieceFacturesScheduledForDeletion = $ExecPieceFacturesToDelete;

        foreach ($ExecPieceFacturesToDelete as $ExecPieceFactureRemoved) {
            $ExecPieceFactureRemoved->setExecContrat(null);
        }

        $this->collExecPieceFactures = null;
        foreach ($ExecPieceFactures as $ExecPieceFacture) {
            $this->addExecPieceFacture($ExecPieceFacture);
        }

        $this->collExecPieceFactures = $ExecPieceFactures;
        $this->collExecPieceFacturesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecPieceFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecPieceFacture objects.
     * @throws PropelException
     */
    public function countExecPieceFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecPieceFacturesPartial && !$this->isNew();
        if (null === $this->collExecPieceFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecPieceFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecPieceFactures());
            }
            $query = ExecPieceFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecPieceFactures);
    }

    /**
     * Method called to associate a ExecPieceFacture object to this object
     * through the ExecPieceFacture foreign key attribute.
     *
     * @param   ExecPieceFacture $l ExecPieceFacture
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecPieceFacture(ExecPieceFacture $l)
    {
        if ($this->collExecPieceFactures === null) {
            $this->initExecPieceFactures();
            $this->collExecPieceFacturesPartial = true;
        }
        if (!in_array($l, $this->collExecPieceFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecPieceFacture($l);
        }

        return $this;
    }

    /**
     * @param	ExecPieceFacture $ExecPieceFacture The ExecPieceFacture object to add.
     */
    protected function doAddExecPieceFacture($ExecPieceFacture)
    {
        $this->collExecPieceFactures[]= $ExecPieceFacture;
        $ExecPieceFacture->setExecContrat($this);
    }

    /**
     * @param	ExecPieceFacture $ExecPieceFacture The ExecPieceFacture object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecPieceFacture($ExecPieceFacture)
    {
        if ($this->getExecPieceFactures()->contains($ExecPieceFacture)) {
            $this->collExecPieceFactures->remove($this->collExecPieceFactures->search($ExecPieceFacture));
            if (null === $this->ExecPieceFacturesScheduledForDeletion) {
                $this->ExecPieceFacturesScheduledForDeletion = clone $this->collExecPieceFactures;
                $this->ExecPieceFacturesScheduledForDeletion->clear();
            }
            $this->ExecPieceFacturesScheduledForDeletion[]= clone $ExecPieceFacture;
            $ExecPieceFacture->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecPieceFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecPieceFacture[] List of ExecPieceFacture objects
     */
    public function getExecPieceFacturesJoinExecFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecPieceFactureQuery::create(null, $criteria);
        $query->joinWith('ExecFacture', $join_behavior);

        return $this->getExecPieceFactures($query, $con);
    }

    /**
     * Clears out the collExecPrixs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecPrixs()
     */
    public function clearExecPrixs()
    {
        $this->collExecPrixs = null; // important to set this to null since that means it is uninitialized
        $this->collExecPrixsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecPrixs collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecPrixs($v = true)
    {
        $this->collExecPrixsPartial = $v;
    }

    /**
     * Initializes the collExecPrixs collection.
     *
     * By default this just sets the collExecPrixs collection to an empty array (like clearcollExecPrixs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecPrixs($overrideExisting = true)
    {
        if (null !== $this->collExecPrixs && !$overrideExisting) {
            return;
        }
        $this->collExecPrixs = new PropelObjectCollection();
        $this->collExecPrixs->setModel('ExecPrix');
    }

    /**
     * Gets an array of ExecPrix objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecPrix[] List of ExecPrix objects
     * @throws PropelException
     */
    public function getExecPrixs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecPrixsPartial && !$this->isNew();
        if (null === $this->collExecPrixs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecPrixs) {
                // return empty collection
                $this->initExecPrixs();
            } else {
                $collExecPrixs = ExecPrixQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecPrixsPartial && count($collExecPrixs)) {
                      $this->initExecPrixs(false);

                      foreach ($collExecPrixs as $obj) {
                        if (false == $this->collExecPrixs->contains($obj)) {
                          $this->collExecPrixs->append($obj);
                        }
                      }

                      $this->collExecPrixsPartial = true;
                    }

                    $collExecPrixs->getInternalIterator()->rewind();

                    return $collExecPrixs;
                }

                if ($partial && $this->collExecPrixs) {
                    foreach ($this->collExecPrixs as $obj) {
                        if ($obj->isNew()) {
                            $collExecPrixs[] = $obj;
                        }
                    }
                }

                $this->collExecPrixs = $collExecPrixs;
                $this->collExecPrixsPartial = false;
            }
        }

        return $this->collExecPrixs;
    }

    /**
     * Sets a collection of ExecPrix objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecPrixs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecPrixs(PropelCollection $ExecPrixs, PropelPDO $con = null)
    {
        $ExecPrixsToDelete = $this->getExecPrixs(new Criteria(), $con)->diff($ExecPrixs);


        $this->ExecPrixsScheduledForDeletion = $ExecPrixsToDelete;

        foreach ($ExecPrixsToDelete as $ExecPrixRemoved) {
            $ExecPrixRemoved->setExecContrat(null);
        }

        $this->collExecPrixs = null;
        foreach ($ExecPrixs as $ExecPrix) {
            $this->addExecPrix($ExecPrix);
        }

        $this->collExecPrixs = $ExecPrixs;
        $this->collExecPrixsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecPrix objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecPrix objects.
     * @throws PropelException
     */
    public function countExecPrixs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecPrixsPartial && !$this->isNew();
        if (null === $this->collExecPrixs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecPrixs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecPrixs());
            }
            $query = ExecPrixQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecPrixs);
    }

    /**
     * Method called to associate a ExecPrix object to this object
     * through the ExecPrix foreign key attribute.
     *
     * @param   ExecPrix $l ExecPrix
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecPrix(ExecPrix $l)
    {
        if ($this->collExecPrixs === null) {
            $this->initExecPrixs();
            $this->collExecPrixsPartial = true;
        }
        if (!in_array($l, $this->collExecPrixs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecPrix($l);
        }

        return $this;
    }

    /**
     * @param	ExecPrix $ExecPrix The ExecPrix object to add.
     */
    protected function doAddExecPrix($ExecPrix)
    {
        $this->collExecPrixs[]= $ExecPrix;
        $ExecPrix->setExecContrat($this);
    }

    /**
     * @param	ExecPrix $ExecPrix The ExecPrix object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecPrix($ExecPrix)
    {
        if ($this->getExecPrixs()->contains($ExecPrix)) {
            $this->collExecPrixs->remove($this->collExecPrixs->search($ExecPrix));
            if (null === $this->ExecPrixsScheduledForDeletion) {
                $this->ExecPrixsScheduledForDeletion = clone $this->collExecPrixs;
                $this->ExecPrixsScheduledForDeletion->clear();
            }
            $this->ExecPrixsScheduledForDeletion[]= clone $ExecPrix;
            $ExecPrix->setExecContrat(null);
        }

        return $this;
    }

    /**
     * Clears out the collExecPrixAvenants collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecPrixAvenants()
     */
    public function clearExecPrixAvenants()
    {
        $this->collExecPrixAvenants = null; // important to set this to null since that means it is uninitialized
        $this->collExecPrixAvenantsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecPrixAvenants collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecPrixAvenants($v = true)
    {
        $this->collExecPrixAvenantsPartial = $v;
    }

    /**
     * Initializes the collExecPrixAvenants collection.
     *
     * By default this just sets the collExecPrixAvenants collection to an empty array (like clearcollExecPrixAvenants());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecPrixAvenants($overrideExisting = true)
    {
        if (null !== $this->collExecPrixAvenants && !$overrideExisting) {
            return;
        }
        $this->collExecPrixAvenants = new PropelObjectCollection();
        $this->collExecPrixAvenants->setModel('ExecPrixAvenant');
    }

    /**
     * Gets an array of ExecPrixAvenant objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecPrixAvenant[] List of ExecPrixAvenant objects
     * @throws PropelException
     */
    public function getExecPrixAvenants($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecPrixAvenantsPartial && !$this->isNew();
        if (null === $this->collExecPrixAvenants || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecPrixAvenants) {
                // return empty collection
                $this->initExecPrixAvenants();
            } else {
                $collExecPrixAvenants = ExecPrixAvenantQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecPrixAvenantsPartial && count($collExecPrixAvenants)) {
                      $this->initExecPrixAvenants(false);

                      foreach ($collExecPrixAvenants as $obj) {
                        if (false == $this->collExecPrixAvenants->contains($obj)) {
                          $this->collExecPrixAvenants->append($obj);
                        }
                      }

                      $this->collExecPrixAvenantsPartial = true;
                    }

                    $collExecPrixAvenants->getInternalIterator()->rewind();

                    return $collExecPrixAvenants;
                }

                if ($partial && $this->collExecPrixAvenants) {
                    foreach ($this->collExecPrixAvenants as $obj) {
                        if ($obj->isNew()) {
                            $collExecPrixAvenants[] = $obj;
                        }
                    }
                }

                $this->collExecPrixAvenants = $collExecPrixAvenants;
                $this->collExecPrixAvenantsPartial = false;
            }
        }

        return $this->collExecPrixAvenants;
    }

    /**
     * Sets a collection of ExecPrixAvenant objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecPrixAvenants A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecPrixAvenants(PropelCollection $ExecPrixAvenants, PropelPDO $con = null)
    {
        $ExecPrixAvenantsToDelete = $this->getExecPrixAvenants(new Criteria(), $con)->diff($ExecPrixAvenants);


        $this->ExecPrixAvenantsScheduledForDeletion = $ExecPrixAvenantsToDelete;

        foreach ($ExecPrixAvenantsToDelete as $ExecPrixAvenantRemoved) {
            $ExecPrixAvenantRemoved->setExecContrat(null);
        }

        $this->collExecPrixAvenants = null;
        foreach ($ExecPrixAvenants as $ExecPrixAvenant) {
            $this->addExecPrixAvenant($ExecPrixAvenant);
        }

        $this->collExecPrixAvenants = $ExecPrixAvenants;
        $this->collExecPrixAvenantsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecPrixAvenant objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecPrixAvenant objects.
     * @throws PropelException
     */
    public function countExecPrixAvenants(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecPrixAvenantsPartial && !$this->isNew();
        if (null === $this->collExecPrixAvenants || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecPrixAvenants) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecPrixAvenants());
            }
            $query = ExecPrixAvenantQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecPrixAvenants);
    }

    /**
     * Method called to associate a ExecPrixAvenant object to this object
     * through the ExecPrixAvenant foreign key attribute.
     *
     * @param   ExecPrixAvenant $l ExecPrixAvenant
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecPrixAvenant(ExecPrixAvenant $l)
    {
        if ($this->collExecPrixAvenants === null) {
            $this->initExecPrixAvenants();
            $this->collExecPrixAvenantsPartial = true;
        }
        if (!in_array($l, $this->collExecPrixAvenants->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecPrixAvenant($l);
        }

        return $this;
    }

    /**
     * @param	ExecPrixAvenant $ExecPrixAvenant The ExecPrixAvenant object to add.
     */
    protected function doAddExecPrixAvenant($ExecPrixAvenant)
    {
        $this->collExecPrixAvenants[]= $ExecPrixAvenant;
        $ExecPrixAvenant->setExecContrat($this);
    }

    /**
     * @param	ExecPrixAvenant $ExecPrixAvenant The ExecPrixAvenant object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecPrixAvenant($ExecPrixAvenant)
    {
        if ($this->getExecPrixAvenants()->contains($ExecPrixAvenant)) {
            $this->collExecPrixAvenants->remove($this->collExecPrixAvenants->search($ExecPrixAvenant));
            if (null === $this->ExecPrixAvenantsScheduledForDeletion) {
                $this->ExecPrixAvenantsScheduledForDeletion = clone $this->collExecPrixAvenants;
                $this->ExecPrixAvenantsScheduledForDeletion->clear();
            }
            $this->ExecPrixAvenantsScheduledForDeletion[]= clone $ExecPrixAvenant;
            $ExecPrixAvenant->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecPrixAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecPrixAvenant[] List of ExecPrixAvenant objects
     */
    public function getExecPrixAvenantsJoinExecAvenant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecPrixAvenantQuery::create(null, $criteria);
        $query->joinWith('ExecAvenant', $join_behavior);

        return $this->getExecPrixAvenants($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecPrixAvenants from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecPrixAvenant[] List of ExecPrixAvenant objects
     */
    public function getExecPrixAvenantsJoinExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecPrixAvenantQuery::create(null, $criteria);
        $query->joinWith('ExecPrix', $join_behavior);

        return $this->getExecPrixAvenants($query, $con);
    }

    /**
     * Clears out the collExecRepartitions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ExecContrat The current object (for fluent API support)
     * @see        addExecRepartitions()
     */
    public function clearExecRepartitions()
    {
        $this->collExecRepartitions = null; // important to set this to null since that means it is uninitialized
        $this->collExecRepartitionsPartial = null;

        return $this;
    }

    /**
     * reset is the collExecRepartitions collection loaded partially
     *
     * @return void
     */
    public function resetPartialExecRepartitions($v = true)
    {
        $this->collExecRepartitionsPartial = $v;
    }

    /**
     * Initializes the collExecRepartitions collection.
     *
     * By default this just sets the collExecRepartitions collection to an empty array (like clearcollExecRepartitions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initExecRepartitions($overrideExisting = true)
    {
        if (null !== $this->collExecRepartitions && !$overrideExisting) {
            return;
        }
        $this->collExecRepartitions = new PropelObjectCollection();
        $this->collExecRepartitions->setModel('ExecRepartition');
    }

    /**
     * Gets an array of ExecRepartition objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ExecContrat is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ExecRepartition[] List of ExecRepartition objects
     * @throws PropelException
     */
    public function getExecRepartitions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collExecRepartitionsPartial && !$this->isNew();
        if (null === $this->collExecRepartitions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collExecRepartitions) {
                // return empty collection
                $this->initExecRepartitions();
            } else {
                $collExecRepartitions = ExecRepartitionQuery::create(null, $criteria)
                    ->filterByExecContrat($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collExecRepartitionsPartial && count($collExecRepartitions)) {
                      $this->initExecRepartitions(false);

                      foreach ($collExecRepartitions as $obj) {
                        if (false == $this->collExecRepartitions->contains($obj)) {
                          $this->collExecRepartitions->append($obj);
                        }
                      }

                      $this->collExecRepartitionsPartial = true;
                    }

                    $collExecRepartitions->getInternalIterator()->rewind();

                    return $collExecRepartitions;
                }

                if ($partial && $this->collExecRepartitions) {
                    foreach ($this->collExecRepartitions as $obj) {
                        if ($obj->isNew()) {
                            $collExecRepartitions[] = $obj;
                        }
                    }
                }

                $this->collExecRepartitions = $collExecRepartitions;
                $this->collExecRepartitionsPartial = false;
            }
        }

        return $this->collExecRepartitions;
    }

    /**
     * Sets a collection of ExecRepartition objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ExecRepartitions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ExecContrat The current object (for fluent API support)
     */
    public function setExecRepartitions(PropelCollection $ExecRepartitions, PropelPDO $con = null)
    {
        $ExecRepartitionsToDelete = $this->getExecRepartitions(new Criteria(), $con)->diff($ExecRepartitions);


        $this->ExecRepartitionsScheduledForDeletion = $ExecRepartitionsToDelete;

        foreach ($ExecRepartitionsToDelete as $ExecRepartitionRemoved) {
            $ExecRepartitionRemoved->setExecContrat(null);
        }

        $this->collExecRepartitions = null;
        foreach ($ExecRepartitions as $ExecRepartition) {
            $this->addExecRepartition($ExecRepartition);
        }

        $this->collExecRepartitions = $ExecRepartitions;
        $this->collExecRepartitionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ExecRepartition objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ExecRepartition objects.
     * @throws PropelException
     */
    public function countExecRepartitions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collExecRepartitionsPartial && !$this->isNew();
        if (null === $this->collExecRepartitions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collExecRepartitions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getExecRepartitions());
            }
            $query = ExecRepartitionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByExecContrat($this)
                ->count($con);
        }

        return count($this->collExecRepartitions);
    }

    /**
     * Method called to associate a ExecRepartition object to this object
     * through the ExecRepartition foreign key attribute.
     *
     * @param   ExecRepartition $l ExecRepartition
     * @return ExecContrat The current object (for fluent API support)
     */
    public function addExecRepartition(ExecRepartition $l)
    {
        if ($this->collExecRepartitions === null) {
            $this->initExecRepartitions();
            $this->collExecRepartitionsPartial = true;
        }
        if (!in_array($l, $this->collExecRepartitions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddExecRepartition($l);
        }

        return $this;
    }

    /**
     * @param	ExecRepartition $ExecRepartition The ExecRepartition object to add.
     */
    protected function doAddExecRepartition($ExecRepartition)
    {
        $this->collExecRepartitions[]= $ExecRepartition;
        $ExecRepartition->setExecContrat($this);
    }

    /**
     * @param	ExecRepartition $ExecRepartition The ExecRepartition object to remove.
     * @return ExecContrat The current object (for fluent API support)
     */
    public function removeExecRepartition($ExecRepartition)
    {
        if ($this->getExecRepartitions()->contains($ExecRepartition)) {
            $this->collExecRepartitions->remove($this->collExecRepartitions->search($ExecRepartition));
            if (null === $this->ExecRepartitionsScheduledForDeletion) {
                $this->ExecRepartitionsScheduledForDeletion = clone $this->collExecRepartitions;
                $this->ExecRepartitionsScheduledForDeletion->clear();
            }
            $this->ExecRepartitionsScheduledForDeletion[]= clone $ExecRepartition;
            $ExecRepartition->setExecContrat(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecRepartition[] List of ExecRepartition objects
     */
    public function getExecRepartitionsJoinExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('ExecContractant', $join_behavior);

        return $this->getExecRepartitions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecRepartition[] List of ExecRepartition objects
     */
    public function getExecRepartitionsJoinExecFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('ExecFacture', $join_behavior);

        return $this->getExecRepartitions($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ExecContrat is new, it will return
     * an empty collection; or if this ExecContrat has previously
     * been saved, it will retrieve related ExecRepartitions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ExecContrat.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ExecRepartition[] List of ExecRepartition objects
     */
    public function getExecRepartitionsJoinExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ExecRepartitionQuery::create(null, $criteria);
        $query->joinWith('ExecPrix', $join_behavior);

        return $this->getExecRepartitions($query, $con);
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
        $this->devise = null;
        $this->id_contrat_source = null;
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
            if ($this->collExecAgentContrats) {
                foreach ($this->collExecAgentContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecAvenants) {
                foreach ($this->collExecAvenants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecContacts) {
                foreach ($this->collExecContacts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecContractants) {
                foreach ($this->collExecContractants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecDossierPaiements) {
                foreach ($this->collExecDossierPaiements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecEvenements) {
                foreach ($this->collExecEvenements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecFactures) {
                foreach ($this->collExecFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecHistoriquePrixs) {
                foreach ($this->collExecHistoriquePrixs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecInscritContrats) {
                foreach ($this->collExecInscritContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecLivrableContrats) {
                foreach ($this->collExecLivrableContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecPhases) {
                foreach ($this->collExecPhases as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecPieces) {
                foreach ($this->collExecPieces as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecPieceAvenants) {
                foreach ($this->collExecPieceAvenants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecPieceContrats) {
                foreach ($this->collExecPieceContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecPieceDossierpaiements) {
                foreach ($this->collExecPieceDossierpaiements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecPieceEvenements) {
                foreach ($this->collExecPieceEvenements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecPieceFactures) {
                foreach ($this->collExecPieceFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecPrixs) {
                foreach ($this->collExecPrixs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecPrixAvenants) {
                foreach ($this->collExecPrixAvenants as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collExecRepartitions) {
                foreach ($this->collExecRepartitions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aExecTypeContrat instanceof Persistent) {
              $this->aExecTypeContrat->clearAllReferences($deep);
            }
            if ($this->aExecTypeStructure instanceof Persistent) {
              $this->aExecTypeStructure->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collExecAgentContrats instanceof PropelCollection) {
            $this->collExecAgentContrats->clearIterator();
        }
        $this->collExecAgentContrats = null;
        if ($this->collExecAvenants instanceof PropelCollection) {
            $this->collExecAvenants->clearIterator();
        }
        $this->collExecAvenants = null;
        if ($this->collExecContacts instanceof PropelCollection) {
            $this->collExecContacts->clearIterator();
        }
        $this->collExecContacts = null;
        if ($this->collExecContractants instanceof PropelCollection) {
            $this->collExecContractants->clearIterator();
        }
        $this->collExecContractants = null;
        if ($this->collExecDossierPaiements instanceof PropelCollection) {
            $this->collExecDossierPaiements->clearIterator();
        }
        $this->collExecDossierPaiements = null;
        if ($this->collExecEvenements instanceof PropelCollection) {
            $this->collExecEvenements->clearIterator();
        }
        $this->collExecEvenements = null;
        if ($this->collExecFactures instanceof PropelCollection) {
            $this->collExecFactures->clearIterator();
        }
        $this->collExecFactures = null;
        if ($this->collExecHistoriquePrixs instanceof PropelCollection) {
            $this->collExecHistoriquePrixs->clearIterator();
        }
        $this->collExecHistoriquePrixs = null;
        if ($this->collExecInscritContrats instanceof PropelCollection) {
            $this->collExecInscritContrats->clearIterator();
        }
        $this->collExecInscritContrats = null;
        if ($this->collExecLivrableContrats instanceof PropelCollection) {
            $this->collExecLivrableContrats->clearIterator();
        }
        $this->collExecLivrableContrats = null;
        if ($this->collExecPhases instanceof PropelCollection) {
            $this->collExecPhases->clearIterator();
        }
        $this->collExecPhases = null;
        if ($this->collExecPieces instanceof PropelCollection) {
            $this->collExecPieces->clearIterator();
        }
        $this->collExecPieces = null;
        if ($this->collExecPieceAvenants instanceof PropelCollection) {
            $this->collExecPieceAvenants->clearIterator();
        }
        $this->collExecPieceAvenants = null;
        if ($this->collExecPieceContrats instanceof PropelCollection) {
            $this->collExecPieceContrats->clearIterator();
        }
        $this->collExecPieceContrats = null;
        if ($this->collExecPieceDossierpaiements instanceof PropelCollection) {
            $this->collExecPieceDossierpaiements->clearIterator();
        }
        $this->collExecPieceDossierpaiements = null;
        if ($this->collExecPieceEvenements instanceof PropelCollection) {
            $this->collExecPieceEvenements->clearIterator();
        }
        $this->collExecPieceEvenements = null;
        if ($this->collExecPieceFactures instanceof PropelCollection) {
            $this->collExecPieceFactures->clearIterator();
        }
        $this->collExecPieceFactures = null;
        if ($this->collExecPrixs instanceof PropelCollection) {
            $this->collExecPrixs->clearIterator();
        }
        $this->collExecPrixs = null;
        if ($this->collExecPrixAvenants instanceof PropelCollection) {
            $this->collExecPrixAvenants->clearIterator();
        }
        $this->collExecPrixAvenants = null;
        if ($this->collExecRepartitions instanceof PropelCollection) {
            $this->collExecRepartitions->clearIterator();
        }
        $this->collExecRepartitions = null;
        $this->aExecTypeContrat = null;
        $this->aExecTypeStructure = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ExecContratPeer::DEFAULT_STRING_FORMAT);
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
