<?php


/**
 * Base class that represents a row from the 'Chorus_echange' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonChorusEchange extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonChorusEchangePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonChorusEchangePeer
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
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_decision field.
     * @var        int
     */
    protected $id_decision;

    /**
     * The value for the num_ordre field.
     * @var        string
     */
    protected $num_ordre;

    /**
     * The value for the nom_createur field.
     * @var        string
     */
    protected $nom_createur;

    /**
     * The value for the prenom_createur field.
     * @var        string
     */
    protected $prenom_createur;

    /**
     * The value for the id_createur field.
     * @var        int
     */
    protected $id_createur;

    /**
     * The value for the statutechange field.
     * @var        string
     */
    protected $statutechange;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_envoi field.
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the retour_chorus field.
     * @var        string
     */
    protected $retour_chorus;

    /**
     * The value for the id_ej_appli_ext field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $id_ej_appli_ext;

    /**
     * The value for the id_oa field.
     * @var        int
     */
    protected $id_oa;

    /**
     * The value for the id_ga field.
     * @var        int
     */
    protected $id_ga;

    /**
     * The value for the id_type_marche field.
     * @var        int
     */
    protected $id_type_marche;

    /**
     * The value for the id_type_groupement field.
     * @var        string
     */
    protected $id_type_groupement;

    /**
     * The value for the id_regroupement_comptable field.
     * @var        string
     */
    protected $id_regroupement_comptable;

    /**
     * The value for the dce_items field.
     * @var        string
     */
    protected $dce_items;

    /**
     * The value for the ids_env_ae field.
     * @var        string
     */
    protected $ids_env_ae;

    /**
     * The value for the ids_env_items field.
     * @var        string
     */
    protected $ids_env_items;

    /**
     * The value for the ids_pieces_externes field.
     * @var        string
     */
    protected $ids_pieces_externes;

    /**
     * The value for the id_agent_envoi field.
     * @var        int
     */
    protected $id_agent_envoi;

    /**
     * The value for the nom_agent field.
     * @var        string
     */
    protected $nom_agent;

    /**
     * The value for the prenom_agent field.
     * @var        string
     */
    protected $prenom_agent;

    /**
     * The value for the signace field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $signace;

    /**
     * The value for the siren field.
     * @var        string
     */
    protected $siren;

    /**
     * The value for the siret field.
     * @var        string
     */
    protected $siret;

    /**
     * The value for the date_notification field.
     * @var        string
     */
    protected $date_notification;

    /**
     * The value for the date_fin_marche field.
     * @var        string
     */
    protected $date_fin_marche;

    /**
     * The value for the id_acte_juridique field.
     * @var        string
     */
    protected $id_acte_juridique;

    /**
     * The value for the cpv_1 field.
     * @var        string
     */
    protected $cpv_1;

    /**
     * The value for the cpv_2 field.
     * @var        string
     */
    protected $cpv_2;

    /**
     * The value for the cpv_3 field.
     * @var        string
     */
    protected $cpv_3;

    /**
     * The value for the cpv_4 field.
     * @var        string
     */
    protected $cpv_4;

    /**
     * The value for the id_type_procedure field.
     * @var        int
     */
    protected $id_type_procedure;

    /**
     * The value for the id_forme_prix field.
     * @var        string
     */
    protected $id_forme_prix;

    /**
     * The value for the nbr_entreprises_cotraitantes field.
     * @var        string
     */
    protected $nbr_entreprises_cotraitantes;

    /**
     * The value for the sous_traitance_declaree field.
     * @var        string
     */
    protected $sous_traitance_declaree;

    /**
     * The value for the carte_achat field.
     * @var        string
     */
    protected $carte_achat;

    /**
     * The value for the clause_sociale field.
     * @var        string
     */
    protected $clause_sociale;

    /**
     * The value for the clause_environnementale field.
     * @var        string
     */
    protected $clause_environnementale;

    /**
     * The value for the nbr_proposition_recues field.
     * @var        string
     */
    protected $nbr_proposition_recues;

    /**
     * The value for the nbr_proposition_dematerialisees field.
     * @var        string
     */
    protected $nbr_proposition_dematerialisees;

    /**
     * The value for the nom_fichier field.
     * @var        string
     */
    protected $nom_fichier;

    /**
     * The value for the erreur_rejet field.
     * @var        string
     */
    protected $erreur_rejet;

    /**
     * The value for the code_cpv_libelle1 field.
     * @var        string
     */
    protected $code_cpv_libelle1;

    /**
     * The value for the code_cpv_libelle2 field.
     * @var        string
     */
    protected $code_cpv_libelle2;

    /**
     * The value for the code_cpv_libelle3 field.
     * @var        string
     */
    protected $code_cpv_libelle3;

    /**
     * The value for the code_cpv_libelle4 field.
     * @var        string
     */
    protected $code_cpv_libelle4;

    /**
     * The value for the pieces_notif_items field.
     * @var        string
     */
    protected $pieces_notif_items;

    /**
     * The value for the ids_blob_env field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ids_blob_env;

    /**
     * The value for the ids_env_sign_items field.
     * @var        string
     */
    protected $ids_env_sign_items;

    /**
     * The value for the ids_blob_sign_env field.
     * @var        string
     */
    protected $ids_blob_sign_env;

    /**
     * The value for the montant_ht field.
     * @var        string
     */
    protected $montant_ht;

    /**
     * The value for the code_pays_titulaire field.
     * @var        string
     */
    protected $code_pays_titulaire;

    /**
     * The value for the numero_siret_titulaire field.
     * @var        string
     */
    protected $numero_siret_titulaire;

    /**
     * The value for the numero_siren_titulaire field.
     * @var        string
     */
    protected $numero_siren_titulaire;

    /**
     * The value for the codes_pays_co_titulaire field.
     * @var        string
     */
    protected $codes_pays_co_titulaire;

    /**
     * The value for the numero_siret_co_titulaire field.
     * @var        string
     */
    protected $numero_siret_co_titulaire;

    /**
     * The value for the numero_siren_co_titulaire field.
     * @var        string
     */
    protected $numero_siren_co_titulaire;

    /**
     * The value for the ccag_reference field.
     * @var        string
     */
    protected $ccag_reference;

    /**
     * The value for the pourcentage_avance field.
     * @var        string
     */
    protected $pourcentage_avance;

    /**
     * The value for the type_avance field.
     * @var        string
     */
    protected $type_avance;

    /**
     * The value for the conditions_paiement field.
     * @var        string
     */
    protected $conditions_paiement;

    /**
     * The value for the identifiant_accord_cadre field.
     * @var        string
     */
    protected $identifiant_accord_cadre;

    /**
     * The value for the date_notification_reelle field.
     * @var        string
     */
    protected $date_notification_reelle;

    /**
     * The value for the date_fin_marche_reelle field.
     * @var        string
     */
    protected $date_fin_marche_reelle;

    /**
     * The value for the ids_rapport_signature field.
     * @var        string
     */
    protected $ids_rapport_signature;

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
        $this->organisme = '';
        $this->id_ej_appli_ext = '';
        $this->signace = '0';
        $this->ids_blob_env = '';
    }

    /**
     * Initializes internal state of BaseCommonChorusEchange object.
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
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [id_decision] column value.
     * 
     * @return int
     */
    public function getIdDecision()
    {

        return $this->id_decision;
    }

    /**
     * Get the [num_ordre] column value.
     * 
     * @return string
     */
    public function getNumOrdre()
    {

        return $this->num_ordre;
    }

    /**
     * Get the [nom_createur] column value.
     * 
     * @return string
     */
    public function getNomCreateur()
    {

        return $this->nom_createur;
    }

    /**
     * Get the [prenom_createur] column value.
     * 
     * @return string
     */
    public function getPrenomCreateur()
    {

        return $this->prenom_createur;
    }

    /**
     * Get the [id_createur] column value.
     * 
     * @return int
     */
    public function getIdCreateur()
    {

        return $this->id_createur;
    }

    /**
     * Get the [statutechange] column value.
     * 
     * @return string
     */
    public function getStatutechange()
    {

        return $this->statutechange;
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
     * Get the [date_envoi] column value.
     * 
     * @return string
     */
    public function getDateEnvoi()
    {

        return $this->date_envoi;
    }

    /**
     * Get the [retour_chorus] column value.
     * 
     * @return string
     */
    public function getRetourChorus()
    {

        return $this->retour_chorus;
    }

    /**
     * Get the [id_ej_appli_ext] column value.
     * 
     * @return string
     */
    public function getIdEjAppliExt()
    {

        return $this->id_ej_appli_ext;
    }

    /**
     * Get the [id_oa] column value.
     * 
     * @return int
     */
    public function getIdOa()
    {

        return $this->id_oa;
    }

    /**
     * Get the [id_ga] column value.
     * 
     * @return int
     */
    public function getIdGa()
    {

        return $this->id_ga;
    }

    /**
     * Get the [id_type_marche] column value.
     * 
     * @return int
     */
    public function getIdTypeMarche()
    {

        return $this->id_type_marche;
    }

    /**
     * Get the [id_type_groupement] column value.
     * 
     * @return string
     */
    public function getIdTypeGroupement()
    {

        return $this->id_type_groupement;
    }

    /**
     * Get the [id_regroupement_comptable] column value.
     * 
     * @return string
     */
    public function getIdRegroupementComptable()
    {

        return $this->id_regroupement_comptable;
    }

    /**
     * Get the [dce_items] column value.
     * 
     * @return string
     */
    public function getDceItems()
    {

        return $this->dce_items;
    }

    /**
     * Get the [ids_env_ae] column value.
     * 
     * @return string
     */
    public function getIdsEnvAe()
    {

        return $this->ids_env_ae;
    }

    /**
     * Get the [ids_env_items] column value.
     * 
     * @return string
     */
    public function getIdsEnvItems()
    {

        return $this->ids_env_items;
    }

    /**
     * Get the [ids_pieces_externes] column value.
     * 
     * @return string
     */
    public function getIdsPiecesExternes()
    {

        return $this->ids_pieces_externes;
    }

    /**
     * Get the [id_agent_envoi] column value.
     * 
     * @return int
     */
    public function getIdAgentEnvoi()
    {

        return $this->id_agent_envoi;
    }

    /**
     * Get the [nom_agent] column value.
     * 
     * @return string
     */
    public function getNomAgent()
    {

        return $this->nom_agent;
    }

    /**
     * Get the [prenom_agent] column value.
     * 
     * @return string
     */
    public function getPrenomAgent()
    {

        return $this->prenom_agent;
    }

    /**
     * Get the [signace] column value.
     * 
     * @return string
     */
    public function getSignace()
    {

        return $this->signace;
    }

    /**
     * Get the [siren] column value.
     * 
     * @return string
     */
    public function getSiren()
    {

        return $this->siren;
    }

    /**
     * Get the [siret] column value.
     * 
     * @return string
     */
    public function getSiret()
    {

        return $this->siret;
    }

    /**
     * Get the [date_notification] column value.
     * 
     * @return string
     */
    public function getDateNotification()
    {

        return $this->date_notification;
    }

    /**
     * Get the [date_fin_marche] column value.
     * 
     * @return string
     */
    public function getDateFinMarche()
    {

        return $this->date_fin_marche;
    }

    /**
     * Get the [id_acte_juridique] column value.
     * 
     * @return string
     */
    public function getIdActeJuridique()
    {

        return $this->id_acte_juridique;
    }

    /**
     * Get the [cpv_1] column value.
     * 
     * @return string
     */
    public function getCpv1()
    {

        return $this->cpv_1;
    }

    /**
     * Get the [cpv_2] column value.
     * 
     * @return string
     */
    public function getCpv2()
    {

        return $this->cpv_2;
    }

    /**
     * Get the [cpv_3] column value.
     * 
     * @return string
     */
    public function getCpv3()
    {

        return $this->cpv_3;
    }

    /**
     * Get the [cpv_4] column value.
     * 
     * @return string
     */
    public function getCpv4()
    {

        return $this->cpv_4;
    }

    /**
     * Get the [id_type_procedure] column value.
     * 
     * @return int
     */
    public function getIdTypeProcedure()
    {

        return $this->id_type_procedure;
    }

    /**
     * Get the [id_forme_prix] column value.
     * 
     * @return string
     */
    public function getIdFormePrix()
    {

        return $this->id_forme_prix;
    }

    /**
     * Get the [nbr_entreprises_cotraitantes] column value.
     * 
     * @return string
     */
    public function getNbrEntreprisesCotraitantes()
    {

        return $this->nbr_entreprises_cotraitantes;
    }

    /**
     * Get the [sous_traitance_declaree] column value.
     * 
     * @return string
     */
    public function getSousTraitanceDeclaree()
    {

        return $this->sous_traitance_declaree;
    }

    /**
     * Get the [carte_achat] column value.
     * 
     * @return string
     */
    public function getCarteAchat()
    {

        return $this->carte_achat;
    }

    /**
     * Get the [clause_sociale] column value.
     * 
     * @return string
     */
    public function getClauseSociale()
    {

        return $this->clause_sociale;
    }

    /**
     * Get the [clause_environnementale] column value.
     * 
     * @return string
     */
    public function getClauseEnvironnementale()
    {

        return $this->clause_environnementale;
    }

    /**
     * Get the [nbr_proposition_recues] column value.
     * 
     * @return string
     */
    public function getNbrPropositionRecues()
    {

        return $this->nbr_proposition_recues;
    }

    /**
     * Get the [nbr_proposition_dematerialisees] column value.
     * 
     * @return string
     */
    public function getNbrPropositionDematerialisees()
    {

        return $this->nbr_proposition_dematerialisees;
    }

    /**
     * Get the [nom_fichier] column value.
     * 
     * @return string
     */
    public function getNomFichier()
    {

        return $this->nom_fichier;
    }

    /**
     * Get the [erreur_rejet] column value.
     * 
     * @return string
     */
    public function getErreurRejet()
    {

        return $this->erreur_rejet;
    }

    /**
     * Get the [code_cpv_libelle1] column value.
     * 
     * @return string
     */
    public function getCodeCpvLibelle1()
    {

        return $this->code_cpv_libelle1;
    }

    /**
     * Get the [code_cpv_libelle2] column value.
     * 
     * @return string
     */
    public function getCodeCpvLibelle2()
    {

        return $this->code_cpv_libelle2;
    }

    /**
     * Get the [code_cpv_libelle3] column value.
     * 
     * @return string
     */
    public function getCodeCpvLibelle3()
    {

        return $this->code_cpv_libelle3;
    }

    /**
     * Get the [code_cpv_libelle4] column value.
     * 
     * @return string
     */
    public function getCodeCpvLibelle4()
    {

        return $this->code_cpv_libelle4;
    }

    /**
     * Get the [pieces_notif_items] column value.
     * 
     * @return string
     */
    public function getPiecesNotifItems()
    {

        return $this->pieces_notif_items;
    }

    /**
     * Get the [ids_blob_env] column value.
     * 
     * @return string
     */
    public function getIdsBlobEnv()
    {

        return $this->ids_blob_env;
    }

    /**
     * Get the [ids_env_sign_items] column value.
     * 
     * @return string
     */
    public function getIdsEnvSignItems()
    {

        return $this->ids_env_sign_items;
    }

    /**
     * Get the [ids_blob_sign_env] column value.
     * 
     * @return string
     */
    public function getIdsBlobSignEnv()
    {

        return $this->ids_blob_sign_env;
    }

    /**
     * Get the [montant_ht] column value.
     * 
     * @return string
     */
    public function getMontantHt()
    {

        return $this->montant_ht;
    }

    /**
     * Get the [code_pays_titulaire] column value.
     * 
     * @return string
     */
    public function getCodePaysTitulaire()
    {

        return $this->code_pays_titulaire;
    }

    /**
     * Get the [numero_siret_titulaire] column value.
     * 
     * @return string
     */
    public function getNumeroSiretTitulaire()
    {

        return $this->numero_siret_titulaire;
    }

    /**
     * Get the [numero_siren_titulaire] column value.
     * 
     * @return string
     */
    public function getNumeroSirenTitulaire()
    {

        return $this->numero_siren_titulaire;
    }

    /**
     * Get the [codes_pays_co_titulaire] column value.
     * 
     * @return string
     */
    public function getCodesPaysCoTitulaire()
    {

        return $this->codes_pays_co_titulaire;
    }

    /**
     * Get the [numero_siret_co_titulaire] column value.
     * 
     * @return string
     */
    public function getNumeroSiretCoTitulaire()
    {

        return $this->numero_siret_co_titulaire;
    }

    /**
     * Get the [numero_siren_co_titulaire] column value.
     * 
     * @return string
     */
    public function getNumeroSirenCoTitulaire()
    {

        return $this->numero_siren_co_titulaire;
    }

    /**
     * Get the [ccag_reference] column value.
     * 
     * @return string
     */
    public function getCcagReference()
    {

        return $this->ccag_reference;
    }

    /**
     * Get the [pourcentage_avance] column value.
     * 
     * @return string
     */
    public function getPourcentageAvance()
    {

        return $this->pourcentage_avance;
    }

    /**
     * Get the [type_avance] column value.
     * 
     * @return string
     */
    public function getTypeAvance()
    {

        return $this->type_avance;
    }

    /**
     * Get the [conditions_paiement] column value.
     * 
     * @return string
     */
    public function getConditionsPaiement()
    {

        return $this->conditions_paiement;
    }

    /**
     * Get the [identifiant_accord_cadre] column value.
     * 
     * @return string
     */
    public function getIdentifiantAccordCadre()
    {

        return $this->identifiant_accord_cadre;
    }

    /**
     * Get the [date_notification_reelle] column value.
     * 
     * @return string
     */
    public function getDateNotificationReelle()
    {

        return $this->date_notification_reelle;
    }

    /**
     * Get the [date_fin_marche_reelle] column value.
     * 
     * @return string
     */
    public function getDateFinMarcheReelle()
    {

        return $this->date_fin_marche_reelle;
    }

    /**
     * Get the [ids_rapport_signature] column value.
     * 
     * @return string
     */
    public function getIdsRapportSignature()
    {

        return $this->ids_rapport_signature;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_decision] column.
     * 
     * @param int $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdDecision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_decision !== $v) {
            $this->id_decision = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_DECISION;
        }


        return $this;
    } // setIdDecision()

    /**
     * Set the value of [num_ordre] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNumOrdre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_ordre !== $v) {
            $this->num_ordre = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NUM_ORDRE;
        }


        return $this;
    } // setNumOrdre()

    /**
     * Set the value of [nom_createur] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNomCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_createur !== $v) {
            $this->nom_createur = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NOM_CREATEUR;
        }


        return $this;
    } // setNomCreateur()

    /**
     * Set the value of [prenom_createur] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setPrenomCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_createur !== $v) {
            $this->prenom_createur = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::PRENOM_CREATEUR;
        }


        return $this;
    } // setPrenomCreateur()

    /**
     * Set the value of [id_createur] column.
     * 
     * @param int $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_createur !== $v) {
            $this->id_createur = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_CREATEUR;
        }


        return $this;
    } // setIdCreateur()

    /**
     * Set the value of [statutechange] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setStatutechange($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statutechange !== $v) {
            $this->statutechange = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::STATUTECHANGE;
        }


        return $this;
    } // setStatutechange()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_envoi] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi !== $v) {
            $this->date_envoi = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::DATE_ENVOI;
        }


        return $this;
    } // setDateEnvoi()

    /**
     * Set the value of [retour_chorus] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setRetourChorus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->retour_chorus !== $v) {
            $this->retour_chorus = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::RETOUR_CHORUS;
        }


        return $this;
    } // setRetourChorus()

    /**
     * Set the value of [id_ej_appli_ext] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdEjAppliExt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_ej_appli_ext !== $v) {
            $this->id_ej_appli_ext = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_EJ_APPLI_EXT;
        }


        return $this;
    } // setIdEjAppliExt()

    /**
     * Set the value of [id_oa] column.
     * 
     * @param int $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdOa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_oa !== $v) {
            $this->id_oa = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_OA;
        }


        return $this;
    } // setIdOa()

    /**
     * Set the value of [id_ga] column.
     * 
     * @param int $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdGa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ga !== $v) {
            $this->id_ga = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_GA;
        }


        return $this;
    } // setIdGa()

    /**
     * Set the value of [id_type_marche] column.
     * 
     * @param int $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdTypeMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_marche !== $v) {
            $this->id_type_marche = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_TYPE_MARCHE;
        }


        return $this;
    } // setIdTypeMarche()

    /**
     * Set the value of [id_type_groupement] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdTypeGroupement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_type_groupement !== $v) {
            $this->id_type_groupement = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_TYPE_GROUPEMENT;
        }


        return $this;
    } // setIdTypeGroupement()

    /**
     * Set the value of [id_regroupement_comptable] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdRegroupementComptable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_regroupement_comptable !== $v) {
            $this->id_regroupement_comptable = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_REGROUPEMENT_COMPTABLE;
        }


        return $this;
    } // setIdRegroupementComptable()

    /**
     * Set the value of [dce_items] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setDceItems($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dce_items !== $v) {
            $this->dce_items = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::DCE_ITEMS;
        }


        return $this;
    } // setDceItems()

    /**
     * Set the value of [ids_env_ae] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdsEnvAe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_env_ae !== $v) {
            $this->ids_env_ae = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::IDS_ENV_AE;
        }


        return $this;
    } // setIdsEnvAe()

    /**
     * Set the value of [ids_env_items] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdsEnvItems($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_env_items !== $v) {
            $this->ids_env_items = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::IDS_ENV_ITEMS;
        }


        return $this;
    } // setIdsEnvItems()

    /**
     * Set the value of [ids_pieces_externes] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdsPiecesExternes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_pieces_externes !== $v) {
            $this->ids_pieces_externes = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::IDS_PIECES_EXTERNES;
        }


        return $this;
    } // setIdsPiecesExternes()

    /**
     * Set the value of [id_agent_envoi] column.
     * 
     * @param int $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdAgentEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_envoi !== $v) {
            $this->id_agent_envoi = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_AGENT_ENVOI;
        }


        return $this;
    } // setIdAgentEnvoi()

    /**
     * Set the value of [nom_agent] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent !== $v) {
            $this->nom_agent = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NOM_AGENT;
        }


        return $this;
    } // setNomAgent()

    /**
     * Set the value of [prenom_agent] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setPrenomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent !== $v) {
            $this->prenom_agent = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::PRENOM_AGENT;
        }


        return $this;
    } // setPrenomAgent()

    /**
     * Set the value of [signace] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setSignace($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signace !== $v) {
            $this->signace = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::SIGNACE;
        }


        return $this;
    } // setSignace()

    /**
     * Set the value of [siren] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setSiren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siren !== $v) {
            $this->siren = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::SIREN;
        }


        return $this;
    } // setSiren()

    /**
     * Set the value of [siret] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setSiret($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siret !== $v) {
            $this->siret = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::SIRET;
        }


        return $this;
    } // setSiret()

    /**
     * Set the value of [date_notification] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setDateNotification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_notification !== $v) {
            $this->date_notification = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::DATE_NOTIFICATION;
        }


        return $this;
    } // setDateNotification()

    /**
     * Set the value of [date_fin_marche] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setDateFinMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_fin_marche !== $v) {
            $this->date_fin_marche = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::DATE_FIN_MARCHE;
        }


        return $this;
    } // setDateFinMarche()

    /**
     * Set the value of [id_acte_juridique] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdActeJuridique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_acte_juridique !== $v) {
            $this->id_acte_juridique = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_ACTE_JURIDIQUE;
        }


        return $this;
    } // setIdActeJuridique()

    /**
     * Set the value of [cpv_1] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCpv1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cpv_1 !== $v) {
            $this->cpv_1 = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CPV_1;
        }


        return $this;
    } // setCpv1()

    /**
     * Set the value of [cpv_2] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCpv2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cpv_2 !== $v) {
            $this->cpv_2 = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CPV_2;
        }


        return $this;
    } // setCpv2()

    /**
     * Set the value of [cpv_3] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCpv3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cpv_3 !== $v) {
            $this->cpv_3 = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CPV_3;
        }


        return $this;
    } // setCpv3()

    /**
     * Set the value of [cpv_4] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCpv4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cpv_4 !== $v) {
            $this->cpv_4 = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CPV_4;
        }


        return $this;
    } // setCpv4()

    /**
     * Set the value of [id_type_procedure] column.
     * 
     * @param int $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_procedure !== $v) {
            $this->id_type_procedure = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_TYPE_PROCEDURE;
        }


        return $this;
    } // setIdTypeProcedure()

    /**
     * Set the value of [id_forme_prix] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdFormePrix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_forme_prix !== $v) {
            $this->id_forme_prix = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ID_FORME_PRIX;
        }


        return $this;
    } // setIdFormePrix()

    /**
     * Set the value of [nbr_entreprises_cotraitantes] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNbrEntreprisesCotraitantes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nbr_entreprises_cotraitantes !== $v) {
            $this->nbr_entreprises_cotraitantes = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NBR_ENTREPRISES_COTRAITANTES;
        }


        return $this;
    } // setNbrEntreprisesCotraitantes()

    /**
     * Set the value of [sous_traitance_declaree] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setSousTraitanceDeclaree($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sous_traitance_declaree !== $v) {
            $this->sous_traitance_declaree = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::SOUS_TRAITANCE_DECLAREE;
        }


        return $this;
    } // setSousTraitanceDeclaree()

    /**
     * Set the value of [carte_achat] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCarteAchat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->carte_achat !== $v) {
            $this->carte_achat = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CARTE_ACHAT;
        }


        return $this;
    } // setCarteAchat()

    /**
     * Set the value of [clause_sociale] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setClauseSociale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clause_sociale !== $v) {
            $this->clause_sociale = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CLAUSE_SOCIALE;
        }


        return $this;
    } // setClauseSociale()

    /**
     * Set the value of [clause_environnementale] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setClauseEnvironnementale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clause_environnementale !== $v) {
            $this->clause_environnementale = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CLAUSE_ENVIRONNEMENTALE;
        }


        return $this;
    } // setClauseEnvironnementale()

    /**
     * Set the value of [nbr_proposition_recues] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNbrPropositionRecues($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nbr_proposition_recues !== $v) {
            $this->nbr_proposition_recues = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NBR_PROPOSITION_RECUES;
        }


        return $this;
    } // setNbrPropositionRecues()

    /**
     * Set the value of [nbr_proposition_dematerialisees] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNbrPropositionDematerialisees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nbr_proposition_dematerialisees !== $v) {
            $this->nbr_proposition_dematerialisees = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NBR_PROPOSITION_DEMATERIALISEES;
        }


        return $this;
    } // setNbrPropositionDematerialisees()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

    /**
     * Set the value of [erreur_rejet] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setErreurRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->erreur_rejet !== $v) {
            $this->erreur_rejet = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::ERREUR_REJET;
        }


        return $this;
    } // setErreurRejet()

    /**
     * Set the value of [code_cpv_libelle1] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCodeCpvLibelle1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv_libelle1 !== $v) {
            $this->code_cpv_libelle1 = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CODE_CPV_LIBELLE1;
        }


        return $this;
    } // setCodeCpvLibelle1()

    /**
     * Set the value of [code_cpv_libelle2] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCodeCpvLibelle2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv_libelle2 !== $v) {
            $this->code_cpv_libelle2 = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CODE_CPV_LIBELLE2;
        }


        return $this;
    } // setCodeCpvLibelle2()

    /**
     * Set the value of [code_cpv_libelle3] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCodeCpvLibelle3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv_libelle3 !== $v) {
            $this->code_cpv_libelle3 = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CODE_CPV_LIBELLE3;
        }


        return $this;
    } // setCodeCpvLibelle3()

    /**
     * Set the value of [code_cpv_libelle4] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCodeCpvLibelle4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv_libelle4 !== $v) {
            $this->code_cpv_libelle4 = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CODE_CPV_LIBELLE4;
        }


        return $this;
    } // setCodeCpvLibelle4()

    /**
     * Set the value of [pieces_notif_items] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setPiecesNotifItems($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pieces_notif_items !== $v) {
            $this->pieces_notif_items = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::PIECES_NOTIF_ITEMS;
        }


        return $this;
    } // setPiecesNotifItems()

    /**
     * Set the value of [ids_blob_env] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdsBlobEnv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_blob_env !== $v) {
            $this->ids_blob_env = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::IDS_BLOB_ENV;
        }


        return $this;
    } // setIdsBlobEnv()

    /**
     * Set the value of [ids_env_sign_items] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdsEnvSignItems($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_env_sign_items !== $v) {
            $this->ids_env_sign_items = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::IDS_ENV_SIGN_ITEMS;
        }


        return $this;
    } // setIdsEnvSignItems()

    /**
     * Set the value of [ids_blob_sign_env] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdsBlobSignEnv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_blob_sign_env !== $v) {
            $this->ids_blob_sign_env = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::IDS_BLOB_SIGN_ENV;
        }


        return $this;
    } // setIdsBlobSignEnv()

    /**
     * Set the value of [montant_ht] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setMontantHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_ht !== $v) {
            $this->montant_ht = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::MONTANT_HT;
        }


        return $this;
    } // setMontantHt()

    /**
     * Set the value of [code_pays_titulaire] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCodePaysTitulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_pays_titulaire !== $v) {
            $this->code_pays_titulaire = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CODE_PAYS_TITULAIRE;
        }


        return $this;
    } // setCodePaysTitulaire()

    /**
     * Set the value of [numero_siret_titulaire] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNumeroSiretTitulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_siret_titulaire !== $v) {
            $this->numero_siret_titulaire = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NUMERO_SIRET_TITULAIRE;
        }


        return $this;
    } // setNumeroSiretTitulaire()

    /**
     * Set the value of [numero_siren_titulaire] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNumeroSirenTitulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_siren_titulaire !== $v) {
            $this->numero_siren_titulaire = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NUMERO_SIREN_TITULAIRE;
        }


        return $this;
    } // setNumeroSirenTitulaire()

    /**
     * Set the value of [codes_pays_co_titulaire] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCodesPaysCoTitulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codes_pays_co_titulaire !== $v) {
            $this->codes_pays_co_titulaire = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CODES_PAYS_CO_TITULAIRE;
        }


        return $this;
    } // setCodesPaysCoTitulaire()

    /**
     * Set the value of [numero_siret_co_titulaire] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNumeroSiretCoTitulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_siret_co_titulaire !== $v) {
            $this->numero_siret_co_titulaire = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NUMERO_SIRET_CO_TITULAIRE;
        }


        return $this;
    } // setNumeroSiretCoTitulaire()

    /**
     * Set the value of [numero_siren_co_titulaire] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setNumeroSirenCoTitulaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_siren_co_titulaire !== $v) {
            $this->numero_siren_co_titulaire = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::NUMERO_SIREN_CO_TITULAIRE;
        }


        return $this;
    } // setNumeroSirenCoTitulaire()

    /**
     * Set the value of [ccag_reference] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setCcagReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ccag_reference !== $v) {
            $this->ccag_reference = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CCAG_REFERENCE;
        }


        return $this;
    } // setCcagReference()

    /**
     * Set the value of [pourcentage_avance] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setPourcentageAvance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pourcentage_avance !== $v) {
            $this->pourcentage_avance = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::POURCENTAGE_AVANCE;
        }


        return $this;
    } // setPourcentageAvance()

    /**
     * Set the value of [type_avance] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setTypeAvance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_avance !== $v) {
            $this->type_avance = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::TYPE_AVANCE;
        }


        return $this;
    } // setTypeAvance()

    /**
     * Set the value of [conditions_paiement] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setConditionsPaiement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->conditions_paiement !== $v) {
            $this->conditions_paiement = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::CONDITIONS_PAIEMENT;
        }


        return $this;
    } // setConditionsPaiement()

    /**
     * Set the value of [identifiant_accord_cadre] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdentifiantAccordCadre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_accord_cadre !== $v) {
            $this->identifiant_accord_cadre = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::IDENTIFIANT_ACCORD_CADRE;
        }


        return $this;
    } // setIdentifiantAccordCadre()

    /**
     * Set the value of [date_notification_reelle] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setDateNotificationReelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_notification_reelle !== $v) {
            $this->date_notification_reelle = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::DATE_NOTIFICATION_REELLE;
        }


        return $this;
    } // setDateNotificationReelle()

    /**
     * Set the value of [date_fin_marche_reelle] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setDateFinMarcheReelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_fin_marche_reelle !== $v) {
            $this->date_fin_marche_reelle = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::DATE_FIN_MARCHE_REELLE;
        }


        return $this;
    } // setDateFinMarcheReelle()

    /**
     * Set the value of [ids_rapport_signature] column.
     * 
     * @param string $v new value
     * @return CommonChorusEchange The current object (for fluent API support)
     */
    public function setIdsRapportSignature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ids_rapport_signature !== $v) {
            $this->ids_rapport_signature = $v;
            $this->modifiedColumns[] = CommonChorusEchangePeer::IDS_RAPPORT_SIGNATURE;
        }


        return $this;
    } // setIdsRapportSignature()

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
            if ($this->organisme !== '') {
                return false;
            }

            if ($this->id_ej_appli_ext !== '') {
                return false;
            }

            if ($this->signace !== '0') {
                return false;
            }

            if ($this->ids_blob_env !== '') {
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
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_decision = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->num_ordre = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->nom_createur = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->prenom_createur = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->id_createur = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->statutechange = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->date_creation = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->date_envoi = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->retour_chorus = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->id_ej_appli_ext = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->id_oa = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->id_ga = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->id_type_marche = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->id_type_groupement = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->id_regroupement_comptable = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->dce_items = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->ids_env_ae = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->ids_env_items = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->ids_pieces_externes = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->id_agent_envoi = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->nom_agent = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->prenom_agent = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->signace = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->siren = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->siret = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->date_notification = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->date_fin_marche = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->id_acte_juridique = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->cpv_1 = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->cpv_2 = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->cpv_3 = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->cpv_4 = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->id_type_procedure = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->id_forme_prix = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->nbr_entreprises_cotraitantes = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->sous_traitance_declaree = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->carte_achat = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->clause_sociale = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->clause_environnementale = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->nbr_proposition_recues = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->nbr_proposition_dematerialisees = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->nom_fichier = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->erreur_rejet = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->code_cpv_libelle1 = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->code_cpv_libelle2 = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->code_cpv_libelle3 = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->code_cpv_libelle4 = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->pieces_notif_items = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->ids_blob_env = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->ids_env_sign_items = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->ids_blob_sign_env = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->montant_ht = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->code_pays_titulaire = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->numero_siret_titulaire = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->numero_siren_titulaire = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->codes_pays_co_titulaire = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->numero_siret_co_titulaire = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->numero_siren_co_titulaire = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->ccag_reference = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->pourcentage_avance = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->type_avance = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->conditions_paiement = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->identifiant_accord_cadre = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->date_notification_reelle = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->date_fin_marche_reelle = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->ids_rapport_signature = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 68; // 68 = CommonChorusEchangePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonChorusEchange object", $e);
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
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonChorusEchangePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonChorusEchangeQuery::create()
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
            $con = Propel::getConnection(CommonChorusEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonChorusEchangePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonChorusEchangePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonChorusEchangePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonChorusEchangePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_DECISION)) {
            $modifiedColumns[':p' . $index++]  = '`id_decision`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NUM_ORDRE)) {
            $modifiedColumns[':p' . $index++]  = '`num_ordre`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NOM_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`nom_createur`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::PRENOM_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_createur`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_createur`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::STATUTECHANGE)) {
            $modifiedColumns[':p' . $index++]  = '`statutEchange`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::RETOUR_CHORUS)) {
            $modifiedColumns[':p' . $index++]  = '`retour_chorus`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_EJ_APPLI_EXT)) {
            $modifiedColumns[':p' . $index++]  = '`id_ej_appli_ext`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_OA)) {
            $modifiedColumns[':p' . $index++]  = '`id_oa`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_GA)) {
            $modifiedColumns[':p' . $index++]  = '`id_ga`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_TYPE_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_marche`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_TYPE_GROUPEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_groupement`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_REGROUPEMENT_COMPTABLE)) {
            $modifiedColumns[':p' . $index++]  = '`id_regroupement_comptable`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::DCE_ITEMS)) {
            $modifiedColumns[':p' . $index++]  = '`dce_items`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_ENV_AE)) {
            $modifiedColumns[':p' . $index++]  = '`ids_env_ae`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_ENV_ITEMS)) {
            $modifiedColumns[':p' . $index++]  = '`ids_env_items`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_PIECES_EXTERNES)) {
            $modifiedColumns[':p' . $index++]  = '`ids_pieces_externes`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_AGENT_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_envoi`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::PRENOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_agent`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::SIGNACE)) {
            $modifiedColumns[':p' . $index++]  = '`signACE`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::SIREN)) {
            $modifiedColumns[':p' . $index++]  = '`siren`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::SIRET)) {
            $modifiedColumns[':p' . $index++]  = '`siret`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_NOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_notification`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_FIN_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin_marche`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_ACTE_JURIDIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`id_acte_juridique`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CPV_1)) {
            $modifiedColumns[':p' . $index++]  = '`cpv_1`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CPV_2)) {
            $modifiedColumns[':p' . $index++]  = '`cpv_2`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CPV_3)) {
            $modifiedColumns[':p' . $index++]  = '`cpv_3`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CPV_4)) {
            $modifiedColumns[':p' . $index++]  = '`cpv_4`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_procedure`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_FORME_PRIX)) {
            $modifiedColumns[':p' . $index++]  = '`id_forme_prix`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NBR_ENTREPRISES_COTRAITANTES)) {
            $modifiedColumns[':p' . $index++]  = '`Nbr_entreprises_cotraitantes`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::SOUS_TRAITANCE_DECLAREE)) {
            $modifiedColumns[':p' . $index++]  = '`sous_traitance_declaree`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CARTE_ACHAT)) {
            $modifiedColumns[':p' . $index++]  = '`carte_achat`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CLAUSE_SOCIALE)) {
            $modifiedColumns[':p' . $index++]  = '`clause_sociale`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CLAUSE_ENVIRONNEMENTALE)) {
            $modifiedColumns[':p' . $index++]  = '`clause_environnementale`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NBR_PROPOSITION_RECUES)) {
            $modifiedColumns[':p' . $index++]  = '`Nbr_proposition_recues`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NBR_PROPOSITION_DEMATERIALISEES)) {
            $modifiedColumns[':p' . $index++]  = '`Nbr_proposition_dematerialisees`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::ERREUR_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`erreur_rejet`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CODE_CPV_LIBELLE1)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv_libelle1`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CODE_CPV_LIBELLE2)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv_libelle2`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CODE_CPV_LIBELLE3)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv_libelle3`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CODE_CPV_LIBELLE4)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv_libelle4`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::PIECES_NOTIF_ITEMS)) {
            $modifiedColumns[':p' . $index++]  = '`pieces_notif_items`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_BLOB_ENV)) {
            $modifiedColumns[':p' . $index++]  = '`ids_blob_env`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_ENV_SIGN_ITEMS)) {
            $modifiedColumns[':p' . $index++]  = '`ids_env_sign_items`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_BLOB_SIGN_ENV)) {
            $modifiedColumns[':p' . $index++]  = '`ids_blob_sign_env`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::MONTANT_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_ht`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CODE_PAYS_TITULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`code_pays_titulaire`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NUMERO_SIRET_TITULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_siret_titulaire`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NUMERO_SIREN_TITULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_siren_titulaire`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CODES_PAYS_CO_TITULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`Codes_pays_co_titulaire`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NUMERO_SIRET_CO_TITULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_siret_co_titulaire`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::NUMERO_SIREN_CO_TITULAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_siren_co_titulaire`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CCAG_REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`CCAG_reference`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::POURCENTAGE_AVANCE)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_avance`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::TYPE_AVANCE)) {
            $modifiedColumns[':p' . $index++]  = '`type_avance`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::CONDITIONS_PAIEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`conditions_paiement`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::IDENTIFIANT_ACCORD_CADRE)) {
            $modifiedColumns[':p' . $index++]  = '`identifiant_accord_cadre`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_NOTIFICATION_REELLE)) {
            $modifiedColumns[':p' . $index++]  = '`date_notification_reelle`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_FIN_MARCHE_REELLE)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin_marche_reelle`';
        }
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_RAPPORT_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = '`ids_rapport_signature`';
        }

        $sql = sprintf(
            'INSERT INTO `Chorus_echange` (%s) VALUES (%s)',
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
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_decision`':						
                        $stmt->bindValue($identifier, $this->id_decision, PDO::PARAM_INT);
                        break;
                    case '`num_ordre`':						
                        $stmt->bindValue($identifier, $this->num_ordre, PDO::PARAM_STR);
                        break;
                    case '`nom_createur`':						
                        $stmt->bindValue($identifier, $this->nom_createur, PDO::PARAM_STR);
                        break;
                    case '`prenom_createur`':						
                        $stmt->bindValue($identifier, $this->prenom_createur, PDO::PARAM_STR);
                        break;
                    case '`id_createur`':						
                        $stmt->bindValue($identifier, $this->id_createur, PDO::PARAM_INT);
                        break;
                    case '`statutEchange`':						
                        $stmt->bindValue($identifier, $this->statutechange, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_envoi`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`retour_chorus`':						
                        $stmt->bindValue($identifier, $this->retour_chorus, PDO::PARAM_STR);
                        break;
                    case '`id_ej_appli_ext`':						
                        $stmt->bindValue($identifier, $this->id_ej_appli_ext, PDO::PARAM_STR);
                        break;
                    case '`id_oa`':						
                        $stmt->bindValue($identifier, $this->id_oa, PDO::PARAM_INT);
                        break;
                    case '`id_ga`':						
                        $stmt->bindValue($identifier, $this->id_ga, PDO::PARAM_INT);
                        break;
                    case '`id_type_marche`':						
                        $stmt->bindValue($identifier, $this->id_type_marche, PDO::PARAM_INT);
                        break;
                    case '`id_type_groupement`':						
                        $stmt->bindValue($identifier, $this->id_type_groupement, PDO::PARAM_STR);
                        break;
                    case '`id_regroupement_comptable`':						
                        $stmt->bindValue($identifier, $this->id_regroupement_comptable, PDO::PARAM_STR);
                        break;
                    case '`dce_items`':						
                        $stmt->bindValue($identifier, $this->dce_items, PDO::PARAM_STR);
                        break;
                    case '`ids_env_ae`':						
                        $stmt->bindValue($identifier, $this->ids_env_ae, PDO::PARAM_STR);
                        break;
                    case '`ids_env_items`':						
                        $stmt->bindValue($identifier, $this->ids_env_items, PDO::PARAM_STR);
                        break;
                    case '`ids_pieces_externes`':						
                        $stmt->bindValue($identifier, $this->ids_pieces_externes, PDO::PARAM_STR);
                        break;
                    case '`id_agent_envoi`':						
                        $stmt->bindValue($identifier, $this->id_agent_envoi, PDO::PARAM_INT);
                        break;
                    case '`nom_agent`':						
                        $stmt->bindValue($identifier, $this->nom_agent, PDO::PARAM_STR);
                        break;
                    case '`prenom_agent`':						
                        $stmt->bindValue($identifier, $this->prenom_agent, PDO::PARAM_STR);
                        break;
                    case '`signACE`':						
                        $stmt->bindValue($identifier, $this->signace, PDO::PARAM_STR);
                        break;
                    case '`siren`':						
                        $stmt->bindValue($identifier, $this->siren, PDO::PARAM_STR);
                        break;
                    case '`siret`':						
                        $stmt->bindValue($identifier, $this->siret, PDO::PARAM_STR);
                        break;
                    case '`date_notification`':						
                        $stmt->bindValue($identifier, $this->date_notification, PDO::PARAM_STR);
                        break;
                    case '`date_fin_marche`':						
                        $stmt->bindValue($identifier, $this->date_fin_marche, PDO::PARAM_STR);
                        break;
                    case '`id_acte_juridique`':						
                        $stmt->bindValue($identifier, $this->id_acte_juridique, PDO::PARAM_STR);
                        break;
                    case '`cpv_1`':						
                        $stmt->bindValue($identifier, $this->cpv_1, PDO::PARAM_STR);
                        break;
                    case '`cpv_2`':						
                        $stmt->bindValue($identifier, $this->cpv_2, PDO::PARAM_STR);
                        break;
                    case '`cpv_3`':						
                        $stmt->bindValue($identifier, $this->cpv_3, PDO::PARAM_STR);
                        break;
                    case '`cpv_4`':						
                        $stmt->bindValue($identifier, $this->cpv_4, PDO::PARAM_STR);
                        break;
                    case '`id_type_procedure`':						
                        $stmt->bindValue($identifier, $this->id_type_procedure, PDO::PARAM_INT);
                        break;
                    case '`id_forme_prix`':						
                        $stmt->bindValue($identifier, $this->id_forme_prix, PDO::PARAM_STR);
                        break;
                    case '`Nbr_entreprises_cotraitantes`':						
                        $stmt->bindValue($identifier, $this->nbr_entreprises_cotraitantes, PDO::PARAM_STR);
                        break;
                    case '`sous_traitance_declaree`':						
                        $stmt->bindValue($identifier, $this->sous_traitance_declaree, PDO::PARAM_STR);
                        break;
                    case '`carte_achat`':						
                        $stmt->bindValue($identifier, $this->carte_achat, PDO::PARAM_STR);
                        break;
                    case '`clause_sociale`':						
                        $stmt->bindValue($identifier, $this->clause_sociale, PDO::PARAM_STR);
                        break;
                    case '`clause_environnementale`':						
                        $stmt->bindValue($identifier, $this->clause_environnementale, PDO::PARAM_STR);
                        break;
                    case '`Nbr_proposition_recues`':						
                        $stmt->bindValue($identifier, $this->nbr_proposition_recues, PDO::PARAM_STR);
                        break;
                    case '`Nbr_proposition_dematerialisees`':						
                        $stmt->bindValue($identifier, $this->nbr_proposition_dematerialisees, PDO::PARAM_STR);
                        break;
                    case '`nom_fichier`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
                        break;
                    case '`erreur_rejet`':						
                        $stmt->bindValue($identifier, $this->erreur_rejet, PDO::PARAM_STR);
                        break;
                    case '`code_cpv_libelle1`':						
                        $stmt->bindValue($identifier, $this->code_cpv_libelle1, PDO::PARAM_STR);
                        break;
                    case '`code_cpv_libelle2`':						
                        $stmt->bindValue($identifier, $this->code_cpv_libelle2, PDO::PARAM_STR);
                        break;
                    case '`code_cpv_libelle3`':						
                        $stmt->bindValue($identifier, $this->code_cpv_libelle3, PDO::PARAM_STR);
                        break;
                    case '`code_cpv_libelle4`':						
                        $stmt->bindValue($identifier, $this->code_cpv_libelle4, PDO::PARAM_STR);
                        break;
                    case '`pieces_notif_items`':						
                        $stmt->bindValue($identifier, $this->pieces_notif_items, PDO::PARAM_STR);
                        break;
                    case '`ids_blob_env`':						
                        $stmt->bindValue($identifier, $this->ids_blob_env, PDO::PARAM_STR);
                        break;
                    case '`ids_env_sign_items`':						
                        $stmt->bindValue($identifier, $this->ids_env_sign_items, PDO::PARAM_STR);
                        break;
                    case '`ids_blob_sign_env`':						
                        $stmt->bindValue($identifier, $this->ids_blob_sign_env, PDO::PARAM_STR);
                        break;
                    case '`montant_ht`':						
                        $stmt->bindValue($identifier, $this->montant_ht, PDO::PARAM_STR);
                        break;
                    case '`code_pays_titulaire`':						
                        $stmt->bindValue($identifier, $this->code_pays_titulaire, PDO::PARAM_STR);
                        break;
                    case '`numero_siret_titulaire`':						
                        $stmt->bindValue($identifier, $this->numero_siret_titulaire, PDO::PARAM_STR);
                        break;
                    case '`numero_siren_titulaire`':						
                        $stmt->bindValue($identifier, $this->numero_siren_titulaire, PDO::PARAM_STR);
                        break;
                    case '`Codes_pays_co_titulaire`':						
                        $stmt->bindValue($identifier, $this->codes_pays_co_titulaire, PDO::PARAM_STR);
                        break;
                    case '`numero_siret_co_titulaire`':						
                        $stmt->bindValue($identifier, $this->numero_siret_co_titulaire, PDO::PARAM_STR);
                        break;
                    case '`numero_siren_co_titulaire`':						
                        $stmt->bindValue($identifier, $this->numero_siren_co_titulaire, PDO::PARAM_STR);
                        break;
                    case '`CCAG_reference`':						
                        $stmt->bindValue($identifier, $this->ccag_reference, PDO::PARAM_STR);
                        break;
                    case '`pourcentage_avance`':						
                        $stmt->bindValue($identifier, $this->pourcentage_avance, PDO::PARAM_STR);
                        break;
                    case '`type_avance`':						
                        $stmt->bindValue($identifier, $this->type_avance, PDO::PARAM_STR);
                        break;
                    case '`conditions_paiement`':						
                        $stmt->bindValue($identifier, $this->conditions_paiement, PDO::PARAM_STR);
                        break;
                    case '`identifiant_accord_cadre`':						
                        $stmt->bindValue($identifier, $this->identifiant_accord_cadre, PDO::PARAM_STR);
                        break;
                    case '`date_notification_reelle`':						
                        $stmt->bindValue($identifier, $this->date_notification_reelle, PDO::PARAM_STR);
                        break;
                    case '`date_fin_marche_reelle`':						
                        $stmt->bindValue($identifier, $this->date_fin_marche_reelle, PDO::PARAM_STR);
                        break;
                    case '`ids_rapport_signature`':						
                        $stmt->bindValue($identifier, $this->ids_rapport_signature, PDO::PARAM_STR);
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


            if (($retval = CommonChorusEchangePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonChorusEchangePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdDecision();
                break;
            case 3:
                return $this->getNumOrdre();
                break;
            case 4:
                return $this->getNomCreateur();
                break;
            case 5:
                return $this->getPrenomCreateur();
                break;
            case 6:
                return $this->getIdCreateur();
                break;
            case 7:
                return $this->getStatutechange();
                break;
            case 8:
                return $this->getDateCreation();
                break;
            case 9:
                return $this->getDateEnvoi();
                break;
            case 10:
                return $this->getRetourChorus();
                break;
            case 11:
                return $this->getIdEjAppliExt();
                break;
            case 12:
                return $this->getIdOa();
                break;
            case 13:
                return $this->getIdGa();
                break;
            case 14:
                return $this->getIdTypeMarche();
                break;
            case 15:
                return $this->getIdTypeGroupement();
                break;
            case 16:
                return $this->getIdRegroupementComptable();
                break;
            case 17:
                return $this->getDceItems();
                break;
            case 18:
                return $this->getIdsEnvAe();
                break;
            case 19:
                return $this->getIdsEnvItems();
                break;
            case 20:
                return $this->getIdsPiecesExternes();
                break;
            case 21:
                return $this->getIdAgentEnvoi();
                break;
            case 22:
                return $this->getNomAgent();
                break;
            case 23:
                return $this->getPrenomAgent();
                break;
            case 24:
                return $this->getSignace();
                break;
            case 25:
                return $this->getSiren();
                break;
            case 26:
                return $this->getSiret();
                break;
            case 27:
                return $this->getDateNotification();
                break;
            case 28:
                return $this->getDateFinMarche();
                break;
            case 29:
                return $this->getIdActeJuridique();
                break;
            case 30:
                return $this->getCpv1();
                break;
            case 31:
                return $this->getCpv2();
                break;
            case 32:
                return $this->getCpv3();
                break;
            case 33:
                return $this->getCpv4();
                break;
            case 34:
                return $this->getIdTypeProcedure();
                break;
            case 35:
                return $this->getIdFormePrix();
                break;
            case 36:
                return $this->getNbrEntreprisesCotraitantes();
                break;
            case 37:
                return $this->getSousTraitanceDeclaree();
                break;
            case 38:
                return $this->getCarteAchat();
                break;
            case 39:
                return $this->getClauseSociale();
                break;
            case 40:
                return $this->getClauseEnvironnementale();
                break;
            case 41:
                return $this->getNbrPropositionRecues();
                break;
            case 42:
                return $this->getNbrPropositionDematerialisees();
                break;
            case 43:
                return $this->getNomFichier();
                break;
            case 44:
                return $this->getErreurRejet();
                break;
            case 45:
                return $this->getCodeCpvLibelle1();
                break;
            case 46:
                return $this->getCodeCpvLibelle2();
                break;
            case 47:
                return $this->getCodeCpvLibelle3();
                break;
            case 48:
                return $this->getCodeCpvLibelle4();
                break;
            case 49:
                return $this->getPiecesNotifItems();
                break;
            case 50:
                return $this->getIdsBlobEnv();
                break;
            case 51:
                return $this->getIdsEnvSignItems();
                break;
            case 52:
                return $this->getIdsBlobSignEnv();
                break;
            case 53:
                return $this->getMontantHt();
                break;
            case 54:
                return $this->getCodePaysTitulaire();
                break;
            case 55:
                return $this->getNumeroSiretTitulaire();
                break;
            case 56:
                return $this->getNumeroSirenTitulaire();
                break;
            case 57:
                return $this->getCodesPaysCoTitulaire();
                break;
            case 58:
                return $this->getNumeroSiretCoTitulaire();
                break;
            case 59:
                return $this->getNumeroSirenCoTitulaire();
                break;
            case 60:
                return $this->getCcagReference();
                break;
            case 61:
                return $this->getPourcentageAvance();
                break;
            case 62:
                return $this->getTypeAvance();
                break;
            case 63:
                return $this->getConditionsPaiement();
                break;
            case 64:
                return $this->getIdentifiantAccordCadre();
                break;
            case 65:
                return $this->getDateNotificationReelle();
                break;
            case 66:
                return $this->getDateFinMarcheReelle();
                break;
            case 67:
                return $this->getIdsRapportSignature();
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
        if (isset($alreadyDumpedObjects['CommonChorusEchange'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonChorusEchange'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonChorusEchangePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdDecision(),
            $keys[3] => $this->getNumOrdre(),
            $keys[4] => $this->getNomCreateur(),
            $keys[5] => $this->getPrenomCreateur(),
            $keys[6] => $this->getIdCreateur(),
            $keys[7] => $this->getStatutechange(),
            $keys[8] => $this->getDateCreation(),
            $keys[9] => $this->getDateEnvoi(),
            $keys[10] => $this->getRetourChorus(),
            $keys[11] => $this->getIdEjAppliExt(),
            $keys[12] => $this->getIdOa(),
            $keys[13] => $this->getIdGa(),
            $keys[14] => $this->getIdTypeMarche(),
            $keys[15] => $this->getIdTypeGroupement(),
            $keys[16] => $this->getIdRegroupementComptable(),
            $keys[17] => $this->getDceItems(),
            $keys[18] => $this->getIdsEnvAe(),
            $keys[19] => $this->getIdsEnvItems(),
            $keys[20] => $this->getIdsPiecesExternes(),
            $keys[21] => $this->getIdAgentEnvoi(),
            $keys[22] => $this->getNomAgent(),
            $keys[23] => $this->getPrenomAgent(),
            $keys[24] => $this->getSignace(),
            $keys[25] => $this->getSiren(),
            $keys[26] => $this->getSiret(),
            $keys[27] => $this->getDateNotification(),
            $keys[28] => $this->getDateFinMarche(),
            $keys[29] => $this->getIdActeJuridique(),
            $keys[30] => $this->getCpv1(),
            $keys[31] => $this->getCpv2(),
            $keys[32] => $this->getCpv3(),
            $keys[33] => $this->getCpv4(),
            $keys[34] => $this->getIdTypeProcedure(),
            $keys[35] => $this->getIdFormePrix(),
            $keys[36] => $this->getNbrEntreprisesCotraitantes(),
            $keys[37] => $this->getSousTraitanceDeclaree(),
            $keys[38] => $this->getCarteAchat(),
            $keys[39] => $this->getClauseSociale(),
            $keys[40] => $this->getClauseEnvironnementale(),
            $keys[41] => $this->getNbrPropositionRecues(),
            $keys[42] => $this->getNbrPropositionDematerialisees(),
            $keys[43] => $this->getNomFichier(),
            $keys[44] => $this->getErreurRejet(),
            $keys[45] => $this->getCodeCpvLibelle1(),
            $keys[46] => $this->getCodeCpvLibelle2(),
            $keys[47] => $this->getCodeCpvLibelle3(),
            $keys[48] => $this->getCodeCpvLibelle4(),
            $keys[49] => $this->getPiecesNotifItems(),
            $keys[50] => $this->getIdsBlobEnv(),
            $keys[51] => $this->getIdsEnvSignItems(),
            $keys[52] => $this->getIdsBlobSignEnv(),
            $keys[53] => $this->getMontantHt(),
            $keys[54] => $this->getCodePaysTitulaire(),
            $keys[55] => $this->getNumeroSiretTitulaire(),
            $keys[56] => $this->getNumeroSirenTitulaire(),
            $keys[57] => $this->getCodesPaysCoTitulaire(),
            $keys[58] => $this->getNumeroSiretCoTitulaire(),
            $keys[59] => $this->getNumeroSirenCoTitulaire(),
            $keys[60] => $this->getCcagReference(),
            $keys[61] => $this->getPourcentageAvance(),
            $keys[62] => $this->getTypeAvance(),
            $keys[63] => $this->getConditionsPaiement(),
            $keys[64] => $this->getIdentifiantAccordCadre(),
            $keys[65] => $this->getDateNotificationReelle(),
            $keys[66] => $this->getDateFinMarcheReelle(),
            $keys[67] => $this->getIdsRapportSignature(),
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
        $pos = CommonChorusEchangePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdDecision($value);
                break;
            case 3:
                $this->setNumOrdre($value);
                break;
            case 4:
                $this->setNomCreateur($value);
                break;
            case 5:
                $this->setPrenomCreateur($value);
                break;
            case 6:
                $this->setIdCreateur($value);
                break;
            case 7:
                $this->setStatutechange($value);
                break;
            case 8:
                $this->setDateCreation($value);
                break;
            case 9:
                $this->setDateEnvoi($value);
                break;
            case 10:
                $this->setRetourChorus($value);
                break;
            case 11:
                $this->setIdEjAppliExt($value);
                break;
            case 12:
                $this->setIdOa($value);
                break;
            case 13:
                $this->setIdGa($value);
                break;
            case 14:
                $this->setIdTypeMarche($value);
                break;
            case 15:
                $this->setIdTypeGroupement($value);
                break;
            case 16:
                $this->setIdRegroupementComptable($value);
                break;
            case 17:
                $this->setDceItems($value);
                break;
            case 18:
                $this->setIdsEnvAe($value);
                break;
            case 19:
                $this->setIdsEnvItems($value);
                break;
            case 20:
                $this->setIdsPiecesExternes($value);
                break;
            case 21:
                $this->setIdAgentEnvoi($value);
                break;
            case 22:
                $this->setNomAgent($value);
                break;
            case 23:
                $this->setPrenomAgent($value);
                break;
            case 24:
                $this->setSignace($value);
                break;
            case 25:
                $this->setSiren($value);
                break;
            case 26:
                $this->setSiret($value);
                break;
            case 27:
                $this->setDateNotification($value);
                break;
            case 28:
                $this->setDateFinMarche($value);
                break;
            case 29:
                $this->setIdActeJuridique($value);
                break;
            case 30:
                $this->setCpv1($value);
                break;
            case 31:
                $this->setCpv2($value);
                break;
            case 32:
                $this->setCpv3($value);
                break;
            case 33:
                $this->setCpv4($value);
                break;
            case 34:
                $this->setIdTypeProcedure($value);
                break;
            case 35:
                $this->setIdFormePrix($value);
                break;
            case 36:
                $this->setNbrEntreprisesCotraitantes($value);
                break;
            case 37:
                $this->setSousTraitanceDeclaree($value);
                break;
            case 38:
                $this->setCarteAchat($value);
                break;
            case 39:
                $this->setClauseSociale($value);
                break;
            case 40:
                $this->setClauseEnvironnementale($value);
                break;
            case 41:
                $this->setNbrPropositionRecues($value);
                break;
            case 42:
                $this->setNbrPropositionDematerialisees($value);
                break;
            case 43:
                $this->setNomFichier($value);
                break;
            case 44:
                $this->setErreurRejet($value);
                break;
            case 45:
                $this->setCodeCpvLibelle1($value);
                break;
            case 46:
                $this->setCodeCpvLibelle2($value);
                break;
            case 47:
                $this->setCodeCpvLibelle3($value);
                break;
            case 48:
                $this->setCodeCpvLibelle4($value);
                break;
            case 49:
                $this->setPiecesNotifItems($value);
                break;
            case 50:
                $this->setIdsBlobEnv($value);
                break;
            case 51:
                $this->setIdsEnvSignItems($value);
                break;
            case 52:
                $this->setIdsBlobSignEnv($value);
                break;
            case 53:
                $this->setMontantHt($value);
                break;
            case 54:
                $this->setCodePaysTitulaire($value);
                break;
            case 55:
                $this->setNumeroSiretTitulaire($value);
                break;
            case 56:
                $this->setNumeroSirenTitulaire($value);
                break;
            case 57:
                $this->setCodesPaysCoTitulaire($value);
                break;
            case 58:
                $this->setNumeroSiretCoTitulaire($value);
                break;
            case 59:
                $this->setNumeroSirenCoTitulaire($value);
                break;
            case 60:
                $this->setCcagReference($value);
                break;
            case 61:
                $this->setPourcentageAvance($value);
                break;
            case 62:
                $this->setTypeAvance($value);
                break;
            case 63:
                $this->setConditionsPaiement($value);
                break;
            case 64:
                $this->setIdentifiantAccordCadre($value);
                break;
            case 65:
                $this->setDateNotificationReelle($value);
                break;
            case 66:
                $this->setDateFinMarcheReelle($value);
                break;
            case 67:
                $this->setIdsRapportSignature($value);
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
        $keys = CommonChorusEchangePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdDecision($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumOrdre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNomCreateur($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPrenomCreateur($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdCreateur($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStatutechange($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDateCreation($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateEnvoi($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setRetourChorus($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdEjAppliExt($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdOa($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdGa($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdTypeMarche($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdTypeGroupement($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdRegroupementComptable($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDceItems($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdsEnvAe($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setIdsEnvItems($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdsPiecesExternes($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setIdAgentEnvoi($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setNomAgent($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setPrenomAgent($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setSignace($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setSiren($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSiret($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDateNotification($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDateFinMarche($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setIdActeJuridique($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setCpv1($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setCpv2($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setCpv3($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setCpv4($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setIdTypeProcedure($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setIdFormePrix($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setNbrEntreprisesCotraitantes($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setSousTraitanceDeclaree($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setCarteAchat($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setClauseSociale($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setClauseEnvironnementale($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setNbrPropositionRecues($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setNbrPropositionDematerialisees($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setNomFichier($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setErreurRejet($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setCodeCpvLibelle1($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setCodeCpvLibelle2($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setCodeCpvLibelle3($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setCodeCpvLibelle4($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setPiecesNotifItems($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setIdsBlobEnv($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setIdsEnvSignItems($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setIdsBlobSignEnv($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setMontantHt($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setCodePaysTitulaire($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setNumeroSiretTitulaire($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setNumeroSirenTitulaire($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setCodesPaysCoTitulaire($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setNumeroSiretCoTitulaire($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setNumeroSirenCoTitulaire($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setCcagReference($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setPourcentageAvance($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setTypeAvance($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setConditionsPaiement($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setIdentifiantAccordCadre($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setDateNotificationReelle($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setDateFinMarcheReelle($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setIdsRapportSignature($arr[$keys[67]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonChorusEchangePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonChorusEchangePeer::ID)) $criteria->add(CommonChorusEchangePeer::ID, $this->id);
        if ($this->isColumnModified(CommonChorusEchangePeer::ORGANISME)) $criteria->add(CommonChorusEchangePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_DECISION)) $criteria->add(CommonChorusEchangePeer::ID_DECISION, $this->id_decision);
        if ($this->isColumnModified(CommonChorusEchangePeer::NUM_ORDRE)) $criteria->add(CommonChorusEchangePeer::NUM_ORDRE, $this->num_ordre);
        if ($this->isColumnModified(CommonChorusEchangePeer::NOM_CREATEUR)) $criteria->add(CommonChorusEchangePeer::NOM_CREATEUR, $this->nom_createur);
        if ($this->isColumnModified(CommonChorusEchangePeer::PRENOM_CREATEUR)) $criteria->add(CommonChorusEchangePeer::PRENOM_CREATEUR, $this->prenom_createur);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_CREATEUR)) $criteria->add(CommonChorusEchangePeer::ID_CREATEUR, $this->id_createur);
        if ($this->isColumnModified(CommonChorusEchangePeer::STATUTECHANGE)) $criteria->add(CommonChorusEchangePeer::STATUTECHANGE, $this->statutechange);
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_CREATION)) $criteria->add(CommonChorusEchangePeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_ENVOI)) $criteria->add(CommonChorusEchangePeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(CommonChorusEchangePeer::RETOUR_CHORUS)) $criteria->add(CommonChorusEchangePeer::RETOUR_CHORUS, $this->retour_chorus);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_EJ_APPLI_EXT)) $criteria->add(CommonChorusEchangePeer::ID_EJ_APPLI_EXT, $this->id_ej_appli_ext);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_OA)) $criteria->add(CommonChorusEchangePeer::ID_OA, $this->id_oa);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_GA)) $criteria->add(CommonChorusEchangePeer::ID_GA, $this->id_ga);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_TYPE_MARCHE)) $criteria->add(CommonChorusEchangePeer::ID_TYPE_MARCHE, $this->id_type_marche);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_TYPE_GROUPEMENT)) $criteria->add(CommonChorusEchangePeer::ID_TYPE_GROUPEMENT, $this->id_type_groupement);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_REGROUPEMENT_COMPTABLE)) $criteria->add(CommonChorusEchangePeer::ID_REGROUPEMENT_COMPTABLE, $this->id_regroupement_comptable);
        if ($this->isColumnModified(CommonChorusEchangePeer::DCE_ITEMS)) $criteria->add(CommonChorusEchangePeer::DCE_ITEMS, $this->dce_items);
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_ENV_AE)) $criteria->add(CommonChorusEchangePeer::IDS_ENV_AE, $this->ids_env_ae);
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_ENV_ITEMS)) $criteria->add(CommonChorusEchangePeer::IDS_ENV_ITEMS, $this->ids_env_items);
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_PIECES_EXTERNES)) $criteria->add(CommonChorusEchangePeer::IDS_PIECES_EXTERNES, $this->ids_pieces_externes);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_AGENT_ENVOI)) $criteria->add(CommonChorusEchangePeer::ID_AGENT_ENVOI, $this->id_agent_envoi);
        if ($this->isColumnModified(CommonChorusEchangePeer::NOM_AGENT)) $criteria->add(CommonChorusEchangePeer::NOM_AGENT, $this->nom_agent);
        if ($this->isColumnModified(CommonChorusEchangePeer::PRENOM_AGENT)) $criteria->add(CommonChorusEchangePeer::PRENOM_AGENT, $this->prenom_agent);
        if ($this->isColumnModified(CommonChorusEchangePeer::SIGNACE)) $criteria->add(CommonChorusEchangePeer::SIGNACE, $this->signace);
        if ($this->isColumnModified(CommonChorusEchangePeer::SIREN)) $criteria->add(CommonChorusEchangePeer::SIREN, $this->siren);
        if ($this->isColumnModified(CommonChorusEchangePeer::SIRET)) $criteria->add(CommonChorusEchangePeer::SIRET, $this->siret);
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_NOTIFICATION)) $criteria->add(CommonChorusEchangePeer::DATE_NOTIFICATION, $this->date_notification);
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_FIN_MARCHE)) $criteria->add(CommonChorusEchangePeer::DATE_FIN_MARCHE, $this->date_fin_marche);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_ACTE_JURIDIQUE)) $criteria->add(CommonChorusEchangePeer::ID_ACTE_JURIDIQUE, $this->id_acte_juridique);
        if ($this->isColumnModified(CommonChorusEchangePeer::CPV_1)) $criteria->add(CommonChorusEchangePeer::CPV_1, $this->cpv_1);
        if ($this->isColumnModified(CommonChorusEchangePeer::CPV_2)) $criteria->add(CommonChorusEchangePeer::CPV_2, $this->cpv_2);
        if ($this->isColumnModified(CommonChorusEchangePeer::CPV_3)) $criteria->add(CommonChorusEchangePeer::CPV_3, $this->cpv_3);
        if ($this->isColumnModified(CommonChorusEchangePeer::CPV_4)) $criteria->add(CommonChorusEchangePeer::CPV_4, $this->cpv_4);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_TYPE_PROCEDURE)) $criteria->add(CommonChorusEchangePeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        if ($this->isColumnModified(CommonChorusEchangePeer::ID_FORME_PRIX)) $criteria->add(CommonChorusEchangePeer::ID_FORME_PRIX, $this->id_forme_prix);
        if ($this->isColumnModified(CommonChorusEchangePeer::NBR_ENTREPRISES_COTRAITANTES)) $criteria->add(CommonChorusEchangePeer::NBR_ENTREPRISES_COTRAITANTES, $this->nbr_entreprises_cotraitantes);
        if ($this->isColumnModified(CommonChorusEchangePeer::SOUS_TRAITANCE_DECLAREE)) $criteria->add(CommonChorusEchangePeer::SOUS_TRAITANCE_DECLAREE, $this->sous_traitance_declaree);
        if ($this->isColumnModified(CommonChorusEchangePeer::CARTE_ACHAT)) $criteria->add(CommonChorusEchangePeer::CARTE_ACHAT, $this->carte_achat);
        if ($this->isColumnModified(CommonChorusEchangePeer::CLAUSE_SOCIALE)) $criteria->add(CommonChorusEchangePeer::CLAUSE_SOCIALE, $this->clause_sociale);
        if ($this->isColumnModified(CommonChorusEchangePeer::CLAUSE_ENVIRONNEMENTALE)) $criteria->add(CommonChorusEchangePeer::CLAUSE_ENVIRONNEMENTALE, $this->clause_environnementale);
        if ($this->isColumnModified(CommonChorusEchangePeer::NBR_PROPOSITION_RECUES)) $criteria->add(CommonChorusEchangePeer::NBR_PROPOSITION_RECUES, $this->nbr_proposition_recues);
        if ($this->isColumnModified(CommonChorusEchangePeer::NBR_PROPOSITION_DEMATERIALISEES)) $criteria->add(CommonChorusEchangePeer::NBR_PROPOSITION_DEMATERIALISEES, $this->nbr_proposition_dematerialisees);
        if ($this->isColumnModified(CommonChorusEchangePeer::NOM_FICHIER)) $criteria->add(CommonChorusEchangePeer::NOM_FICHIER, $this->nom_fichier);
        if ($this->isColumnModified(CommonChorusEchangePeer::ERREUR_REJET)) $criteria->add(CommonChorusEchangePeer::ERREUR_REJET, $this->erreur_rejet);
        if ($this->isColumnModified(CommonChorusEchangePeer::CODE_CPV_LIBELLE1)) $criteria->add(CommonChorusEchangePeer::CODE_CPV_LIBELLE1, $this->code_cpv_libelle1);
        if ($this->isColumnModified(CommonChorusEchangePeer::CODE_CPV_LIBELLE2)) $criteria->add(CommonChorusEchangePeer::CODE_CPV_LIBELLE2, $this->code_cpv_libelle2);
        if ($this->isColumnModified(CommonChorusEchangePeer::CODE_CPV_LIBELLE3)) $criteria->add(CommonChorusEchangePeer::CODE_CPV_LIBELLE3, $this->code_cpv_libelle3);
        if ($this->isColumnModified(CommonChorusEchangePeer::CODE_CPV_LIBELLE4)) $criteria->add(CommonChorusEchangePeer::CODE_CPV_LIBELLE4, $this->code_cpv_libelle4);
        if ($this->isColumnModified(CommonChorusEchangePeer::PIECES_NOTIF_ITEMS)) $criteria->add(CommonChorusEchangePeer::PIECES_NOTIF_ITEMS, $this->pieces_notif_items);
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_BLOB_ENV)) $criteria->add(CommonChorusEchangePeer::IDS_BLOB_ENV, $this->ids_blob_env);
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_ENV_SIGN_ITEMS)) $criteria->add(CommonChorusEchangePeer::IDS_ENV_SIGN_ITEMS, $this->ids_env_sign_items);
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_BLOB_SIGN_ENV)) $criteria->add(CommonChorusEchangePeer::IDS_BLOB_SIGN_ENV, $this->ids_blob_sign_env);
        if ($this->isColumnModified(CommonChorusEchangePeer::MONTANT_HT)) $criteria->add(CommonChorusEchangePeer::MONTANT_HT, $this->montant_ht);
        if ($this->isColumnModified(CommonChorusEchangePeer::CODE_PAYS_TITULAIRE)) $criteria->add(CommonChorusEchangePeer::CODE_PAYS_TITULAIRE, $this->code_pays_titulaire);
        if ($this->isColumnModified(CommonChorusEchangePeer::NUMERO_SIRET_TITULAIRE)) $criteria->add(CommonChorusEchangePeer::NUMERO_SIRET_TITULAIRE, $this->numero_siret_titulaire);
        if ($this->isColumnModified(CommonChorusEchangePeer::NUMERO_SIREN_TITULAIRE)) $criteria->add(CommonChorusEchangePeer::NUMERO_SIREN_TITULAIRE, $this->numero_siren_titulaire);
        if ($this->isColumnModified(CommonChorusEchangePeer::CODES_PAYS_CO_TITULAIRE)) $criteria->add(CommonChorusEchangePeer::CODES_PAYS_CO_TITULAIRE, $this->codes_pays_co_titulaire);
        if ($this->isColumnModified(CommonChorusEchangePeer::NUMERO_SIRET_CO_TITULAIRE)) $criteria->add(CommonChorusEchangePeer::NUMERO_SIRET_CO_TITULAIRE, $this->numero_siret_co_titulaire);
        if ($this->isColumnModified(CommonChorusEchangePeer::NUMERO_SIREN_CO_TITULAIRE)) $criteria->add(CommonChorusEchangePeer::NUMERO_SIREN_CO_TITULAIRE, $this->numero_siren_co_titulaire);
        if ($this->isColumnModified(CommonChorusEchangePeer::CCAG_REFERENCE)) $criteria->add(CommonChorusEchangePeer::CCAG_REFERENCE, $this->ccag_reference);
        if ($this->isColumnModified(CommonChorusEchangePeer::POURCENTAGE_AVANCE)) $criteria->add(CommonChorusEchangePeer::POURCENTAGE_AVANCE, $this->pourcentage_avance);
        if ($this->isColumnModified(CommonChorusEchangePeer::TYPE_AVANCE)) $criteria->add(CommonChorusEchangePeer::TYPE_AVANCE, $this->type_avance);
        if ($this->isColumnModified(CommonChorusEchangePeer::CONDITIONS_PAIEMENT)) $criteria->add(CommonChorusEchangePeer::CONDITIONS_PAIEMENT, $this->conditions_paiement);
        if ($this->isColumnModified(CommonChorusEchangePeer::IDENTIFIANT_ACCORD_CADRE)) $criteria->add(CommonChorusEchangePeer::IDENTIFIANT_ACCORD_CADRE, $this->identifiant_accord_cadre);
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_NOTIFICATION_REELLE)) $criteria->add(CommonChorusEchangePeer::DATE_NOTIFICATION_REELLE, $this->date_notification_reelle);
        if ($this->isColumnModified(CommonChorusEchangePeer::DATE_FIN_MARCHE_REELLE)) $criteria->add(CommonChorusEchangePeer::DATE_FIN_MARCHE_REELLE, $this->date_fin_marche_reelle);
        if ($this->isColumnModified(CommonChorusEchangePeer::IDS_RAPPORT_SIGNATURE)) $criteria->add(CommonChorusEchangePeer::IDS_RAPPORT_SIGNATURE, $this->ids_rapport_signature);

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
        $criteria = new Criteria(CommonChorusEchangePeer::DATABASE_NAME);
        $criteria->add(CommonChorusEchangePeer::ID, $this->id);
        $criteria->add(CommonChorusEchangePeer::ORGANISME, $this->organisme);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getId();
        $pks[1] = $this->getOrganisme();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setId($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonChorusEchange (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdDecision($this->getIdDecision());
        $copyObj->setNumOrdre($this->getNumOrdre());
        $copyObj->setNomCreateur($this->getNomCreateur());
        $copyObj->setPrenomCreateur($this->getPrenomCreateur());
        $copyObj->setIdCreateur($this->getIdCreateur());
        $copyObj->setStatutechange($this->getStatutechange());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setRetourChorus($this->getRetourChorus());
        $copyObj->setIdEjAppliExt($this->getIdEjAppliExt());
        $copyObj->setIdOa($this->getIdOa());
        $copyObj->setIdGa($this->getIdGa());
        $copyObj->setIdTypeMarche($this->getIdTypeMarche());
        $copyObj->setIdTypeGroupement($this->getIdTypeGroupement());
        $copyObj->setIdRegroupementComptable($this->getIdRegroupementComptable());
        $copyObj->setDceItems($this->getDceItems());
        $copyObj->setIdsEnvAe($this->getIdsEnvAe());
        $copyObj->setIdsEnvItems($this->getIdsEnvItems());
        $copyObj->setIdsPiecesExternes($this->getIdsPiecesExternes());
        $copyObj->setIdAgentEnvoi($this->getIdAgentEnvoi());
        $copyObj->setNomAgent($this->getNomAgent());
        $copyObj->setPrenomAgent($this->getPrenomAgent());
        $copyObj->setSignace($this->getSignace());
        $copyObj->setSiren($this->getSiren());
        $copyObj->setSiret($this->getSiret());
        $copyObj->setDateNotification($this->getDateNotification());
        $copyObj->setDateFinMarche($this->getDateFinMarche());
        $copyObj->setIdActeJuridique($this->getIdActeJuridique());
        $copyObj->setCpv1($this->getCpv1());
        $copyObj->setCpv2($this->getCpv2());
        $copyObj->setCpv3($this->getCpv3());
        $copyObj->setCpv4($this->getCpv4());
        $copyObj->setIdTypeProcedure($this->getIdTypeProcedure());
        $copyObj->setIdFormePrix($this->getIdFormePrix());
        $copyObj->setNbrEntreprisesCotraitantes($this->getNbrEntreprisesCotraitantes());
        $copyObj->setSousTraitanceDeclaree($this->getSousTraitanceDeclaree());
        $copyObj->setCarteAchat($this->getCarteAchat());
        $copyObj->setClauseSociale($this->getClauseSociale());
        $copyObj->setClauseEnvironnementale($this->getClauseEnvironnementale());
        $copyObj->setNbrPropositionRecues($this->getNbrPropositionRecues());
        $copyObj->setNbrPropositionDematerialisees($this->getNbrPropositionDematerialisees());
        $copyObj->setNomFichier($this->getNomFichier());
        $copyObj->setErreurRejet($this->getErreurRejet());
        $copyObj->setCodeCpvLibelle1($this->getCodeCpvLibelle1());
        $copyObj->setCodeCpvLibelle2($this->getCodeCpvLibelle2());
        $copyObj->setCodeCpvLibelle3($this->getCodeCpvLibelle3());
        $copyObj->setCodeCpvLibelle4($this->getCodeCpvLibelle4());
        $copyObj->setPiecesNotifItems($this->getPiecesNotifItems());
        $copyObj->setIdsBlobEnv($this->getIdsBlobEnv());
        $copyObj->setIdsEnvSignItems($this->getIdsEnvSignItems());
        $copyObj->setIdsBlobSignEnv($this->getIdsBlobSignEnv());
        $copyObj->setMontantHt($this->getMontantHt());
        $copyObj->setCodePaysTitulaire($this->getCodePaysTitulaire());
        $copyObj->setNumeroSiretTitulaire($this->getNumeroSiretTitulaire());
        $copyObj->setNumeroSirenTitulaire($this->getNumeroSirenTitulaire());
        $copyObj->setCodesPaysCoTitulaire($this->getCodesPaysCoTitulaire());
        $copyObj->setNumeroSiretCoTitulaire($this->getNumeroSiretCoTitulaire());
        $copyObj->setNumeroSirenCoTitulaire($this->getNumeroSirenCoTitulaire());
        $copyObj->setCcagReference($this->getCcagReference());
        $copyObj->setPourcentageAvance($this->getPourcentageAvance());
        $copyObj->setTypeAvance($this->getTypeAvance());
        $copyObj->setConditionsPaiement($this->getConditionsPaiement());
        $copyObj->setIdentifiantAccordCadre($this->getIdentifiantAccordCadre());
        $copyObj->setDateNotificationReelle($this->getDateNotificationReelle());
        $copyObj->setDateFinMarcheReelle($this->getDateFinMarcheReelle());
        $copyObj->setIdsRapportSignature($this->getIdsRapportSignature());
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
     * @return CommonChorusEchange Clone of current object.
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
     * @return CommonChorusEchangePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonChorusEchangePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->id_decision = null;
        $this->num_ordre = null;
        $this->nom_createur = null;
        $this->prenom_createur = null;
        $this->id_createur = null;
        $this->statutechange = null;
        $this->date_creation = null;
        $this->date_envoi = null;
        $this->retour_chorus = null;
        $this->id_ej_appli_ext = null;
        $this->id_oa = null;
        $this->id_ga = null;
        $this->id_type_marche = null;
        $this->id_type_groupement = null;
        $this->id_regroupement_comptable = null;
        $this->dce_items = null;
        $this->ids_env_ae = null;
        $this->ids_env_items = null;
        $this->ids_pieces_externes = null;
        $this->id_agent_envoi = null;
        $this->nom_agent = null;
        $this->prenom_agent = null;
        $this->signace = null;
        $this->siren = null;
        $this->siret = null;
        $this->date_notification = null;
        $this->date_fin_marche = null;
        $this->id_acte_juridique = null;
        $this->cpv_1 = null;
        $this->cpv_2 = null;
        $this->cpv_3 = null;
        $this->cpv_4 = null;
        $this->id_type_procedure = null;
        $this->id_forme_prix = null;
        $this->nbr_entreprises_cotraitantes = null;
        $this->sous_traitance_declaree = null;
        $this->carte_achat = null;
        $this->clause_sociale = null;
        $this->clause_environnementale = null;
        $this->nbr_proposition_recues = null;
        $this->nbr_proposition_dematerialisees = null;
        $this->nom_fichier = null;
        $this->erreur_rejet = null;
        $this->code_cpv_libelle1 = null;
        $this->code_cpv_libelle2 = null;
        $this->code_cpv_libelle3 = null;
        $this->code_cpv_libelle4 = null;
        $this->pieces_notif_items = null;
        $this->ids_blob_env = null;
        $this->ids_env_sign_items = null;
        $this->ids_blob_sign_env = null;
        $this->montant_ht = null;
        $this->code_pays_titulaire = null;
        $this->numero_siret_titulaire = null;
        $this->numero_siren_titulaire = null;
        $this->codes_pays_co_titulaire = null;
        $this->numero_siret_co_titulaire = null;
        $this->numero_siren_co_titulaire = null;
        $this->ccag_reference = null;
        $this->pourcentage_avance = null;
        $this->type_avance = null;
        $this->conditions_paiement = null;
        $this->identifiant_accord_cadre = null;
        $this->date_notification_reelle = null;
        $this->date_fin_marche_reelle = null;
        $this->ids_rapport_signature = null;
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
        return (string) $this->exportTo(CommonChorusEchangePeer::DEFAULT_STRING_FORMAT);
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
