<?php


/**
 * Base class that represents a row from the 'decisionEnveloppe' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDecisionEnveloppe extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonDecisionEnveloppePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonDecisionEnveloppePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_decision_enveloppe field.
     * @var        int
     */
    protected $id_decision_enveloppe;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the consultation_ref field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the id_offre field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_offre;

    /**
     * The value for the lot field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lot;

    /**
     * The value for the decision field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $decision;

    /**
     * The value for the date_notification field.
     * @var        string
     */
    protected $date_notification;

    /**
     * The value for the code_postal field.
     * @var        string
     */
    protected $code_postal;

    /**
     * The value for the pme_pmi field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $pme_pmi;

    /**
     * The value for the tranche_budgetaire field.
     * @var        int
     */
    protected $tranche_budgetaire;

    /**
     * The value for the montant_marche field.
     * @var        string
     */
    protected $montant_marche;

    /**
     * The value for the categorie field.
     * @var        int
     */
    protected $categorie;

    /**
     * The value for the objet_marche field.
     * @var        string
     */
    protected $objet_marche;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the fichier_joint field.
     * @var        int
     */
    protected $fichier_joint;

    /**
     * The value for the nom_fichier_joint field.
     * @var        string
     */
    protected $nom_fichier_joint;

    /**
     * The value for the type_enveloppe field.
     * @var        string
     */
    protected $type_enveloppe;

    /**
     * The value for the numero_marche field.
     * @var        string
     */
    protected $numero_marche;

    /**
     * The value for the statutej field.
     * @var        string
     */
    protected $statutej;

    /**
     * The value for the note field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $note;

    /**
     * The value for the classement field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $classement;

    /**
     * The value for the id_blob_pieces_notification field.
     * @var        string
     */
    protected $id_blob_pieces_notification;

    /**
     * The value for the date_fin_marche_previsionnel field.
     * @var        string
     */
    protected $date_fin_marche_previsionnel;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the acronymepays_attributaire field.
     * @var        string
     */
    protected $acronymepays_attributaire;

    /**
     * The value for the pays_attributaire field.
     * @var        string
     */
    protected $pays_attributaire;

    /**
     * The value for the siren_attributaire field.
     * @var        string
     */
    protected $siren_attributaire;

    /**
     * The value for the nic_attributaire field.
     * @var        string
     */
    protected $nic_attributaire;

    /**
     * The value for the identifiantnational_attributaire field.
     * @var        string
     */
    protected $identifiantnational_attributaire;

    /**
     * The value for the rc_ville_attributaire field.
     * @var        string
     */
    protected $rc_ville_attributaire;

    /**
     * The value for the rc_num_attributaire field.
     * @var        string
     */
    protected $rc_num_attributaire;

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
     * The value for the envoi_interface field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $envoi_interface;

    /**
     * The value for the ifu_attributaire field.
     * @var        string
     */
    protected $ifu_attributaire;

    /**
     * The value for the type_entreprise field.
     * @var        string
     */
    protected $type_entreprise;

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
        $this->consultation_ref = 0;
        $this->id_offre = 0;
        $this->lot = 0;
        $this->decision = '0';
        $this->pme_pmi = 0;
        $this->note = '';
        $this->classement = '';
        $this->envoi_interface = '0';
    }

    /**
     * Initializes internal state of BaseCommonDecisionEnveloppe object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
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
     * Get the [id_offre] column value.
     * 
     * @return int
     */
    public function getIdOffre()
    {

        return $this->id_offre;
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
     * Get the [decision] column value.
     * 
     * @return string
     */
    public function getDecision()
    {

        return $this->decision;
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
     * Get the [code_postal] column value.
     * 
     * @return string
     */
    public function getCodePostal()
    {

        return $this->code_postal;
    }

    /**
     * Get the [pme_pmi] column value.
     * 
     * @return int
     */
    public function getPmePmi()
    {

        return $this->pme_pmi;
    }

    /**
     * Get the [tranche_budgetaire] column value.
     * 
     * @return int
     */
    public function getTrancheBudgetaire()
    {

        return $this->tranche_budgetaire;
    }

    /**
     * Get the [montant_marche] column value.
     * 
     * @return string
     */
    public function getMontantMarche()
    {

        return $this->montant_marche;
    }

    /**
     * Get the [categorie] column value.
     * 
     * @return int
     */
    public function getCategorie()
    {

        return $this->categorie;
    }

    /**
     * Get the [objet_marche] column value.
     * 
     * @return string
     */
    public function getObjetMarche()
    {

        return $this->objet_marche;
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
     * Get the [fichier_joint] column value.
     * 
     * @return int
     */
    public function getFichierJoint()
    {

        return $this->fichier_joint;
    }

    /**
     * Get the [nom_fichier_joint] column value.
     * 
     * @return string
     */
    public function getNomFichierJoint()
    {

        return $this->nom_fichier_joint;
    }

    /**
     * Get the [type_enveloppe] column value.
     * 
     * @return string
     */
    public function getTypeEnveloppe()
    {

        return $this->type_enveloppe;
    }

    /**
     * Get the [numero_marche] column value.
     * 
     * @return string
     */
    public function getNumeroMarche()
    {

        return $this->numero_marche;
    }

    /**
     * Get the [statutej] column value.
     * 
     * @return string
     */
    public function getStatutej()
    {

        return $this->statutej;
    }

    /**
     * Get the [note] column value.
     * 
     * @return string
     */
    public function getNote()
    {

        return $this->note;
    }

    /**
     * Get the [classement] column value.
     * 
     * @return string
     */
    public function getClassement()
    {

        return $this->classement;
    }

    /**
     * Get the [id_blob_pieces_notification] column value.
     * 
     * @return string
     */
    public function getIdBlobPiecesNotification()
    {

        return $this->id_blob_pieces_notification;
    }

    /**
     * Get the [date_fin_marche_previsionnel] column value.
     * 
     * @return string
     */
    public function getDateFinMarchePrevisionnel()
    {

        return $this->date_fin_marche_previsionnel;
    }

    /**
     * Get the [ville] column value.
     * 
     * @return string
     */
    public function getVille()
    {

        return $this->ville;
    }

    /**
     * Get the [acronymepays_attributaire] column value.
     * 
     * @return string
     */
    public function getAcronymepaysAttributaire()
    {

        return $this->acronymepays_attributaire;
    }

    /**
     * Get the [pays_attributaire] column value.
     * 
     * @return string
     */
    public function getPaysAttributaire()
    {

        return $this->pays_attributaire;
    }

    /**
     * Get the [siren_attributaire] column value.
     * 
     * @return string
     */
    public function getSirenAttributaire()
    {

        return $this->siren_attributaire;
    }

    /**
     * Get the [nic_attributaire] column value.
     * 
     * @return string
     */
    public function getNicAttributaire()
    {

        return $this->nic_attributaire;
    }

    /**
     * Get the [identifiantnational_attributaire] column value.
     * 
     * @return string
     */
    public function getIdentifiantnationalAttributaire()
    {

        return $this->identifiantnational_attributaire;
    }

    /**
     * Get the [rc_ville_attributaire] column value.
     * 
     * @return string
     */
    public function getRcVilleAttributaire()
    {

        return $this->rc_ville_attributaire;
    }

    /**
     * Get the [rc_num_attributaire] column value.
     * 
     * @return string
     */
    public function getRcNumAttributaire()
    {

        return $this->rc_num_attributaire;
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
     * Get the [envoi_interface] column value.
     * 
     * @return string
     */
    public function getEnvoiInterface()
    {

        return $this->envoi_interface;
    }

    /**
     * Get the [ifu_attributaire] column value.
     * 
     * @return string
     */
    public function getIfuAttributaire()
    {

        return $this->ifu_attributaire;
    }

    /**
     * Get the [type_entreprise] column value.
     * 
     * @return string
     */
    public function getTypeEntreprise()
    {

        return $this->type_entreprise;
    }

    /**
     * Set the value of [id_decision_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setIdDecisionEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_decision_enveloppe !== $v) {
            $this->id_decision_enveloppe = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE;
        }


        return $this;
    } // setIdDecisionEnveloppe()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [id_offre] column.
     * 
     * @param int $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setIdOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_offre !== $v) {
            $this->id_offre = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::ID_OFFRE;
        }


        return $this;
    } // setIdOffre()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [decision] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setDecision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision !== $v) {
            $this->decision = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::DECISION;
        }


        return $this;
    } // setDecision()

    /**
     * Set the value of [date_notification] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setDateNotification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_notification !== $v) {
            $this->date_notification = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::DATE_NOTIFICATION;
        }


        return $this;
    } // setDateNotification()

    /**
     * Set the value of [code_postal] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setCodePostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_postal !== $v) {
            $this->code_postal = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::CODE_POSTAL;
        }


        return $this;
    } // setCodePostal()

    /**
     * Set the value of [pme_pmi] column.
     * 
     * @param int $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setPmePmi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pme_pmi !== $v) {
            $this->pme_pmi = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::PME_PMI;
        }


        return $this;
    } // setPmePmi()

    /**
     * Set the value of [tranche_budgetaire] column.
     * 
     * @param int $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setTrancheBudgetaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tranche_budgetaire !== $v) {
            $this->tranche_budgetaire = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::TRANCHE_BUDGETAIRE;
        }


        return $this;
    } // setTrancheBudgetaire()

    /**
     * Set the value of [montant_marche] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setMontantMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_marche !== $v) {
            $this->montant_marche = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::MONTANT_MARCHE;
        }


        return $this;
    } // setMontantMarche()

    /**
     * Set the value of [categorie] column.
     * 
     * @param int $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setCategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->categorie !== $v) {
            $this->categorie = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::CATEGORIE;
        }


        return $this;
    } // setCategorie()

    /**
     * Set the value of [objet_marche] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setObjetMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet_marche !== $v) {
            $this->objet_marche = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::OBJET_MARCHE;
        }


        return $this;
    } // setObjetMarche()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [fichier_joint] column.
     * 
     * @param int $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setFichierJoint($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fichier_joint !== $v) {
            $this->fichier_joint = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::FICHIER_JOINT;
        }


        return $this;
    } // setFichierJoint()

    /**
     * Set the value of [nom_fichier_joint] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setNomFichierJoint($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier_joint !== $v) {
            $this->nom_fichier_joint = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::NOM_FICHIER_JOINT;
        }


        return $this;
    } // setNomFichierJoint()

    /**
     * Set the value of [type_enveloppe] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setTypeEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_enveloppe !== $v) {
            $this->type_enveloppe = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::TYPE_ENVELOPPE;
        }


        return $this;
    } // setTypeEnveloppe()

    /**
     * Set the value of [numero_marche] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setNumeroMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_marche !== $v) {
            $this->numero_marche = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::NUMERO_MARCHE;
        }


        return $this;
    } // setNumeroMarche()

    /**
     * Set the value of [statutej] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setStatutej($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statutej !== $v) {
            $this->statutej = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::STATUTEJ;
        }


        return $this;
    } // setStatutej()

    /**
     * Set the value of [note] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setNote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->note !== $v) {
            $this->note = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::NOTE;
        }


        return $this;
    } // setNote()

    /**
     * Set the value of [classement] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setClassement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->classement !== $v) {
            $this->classement = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::CLASSEMENT;
        }


        return $this;
    } // setClassement()

    /**
     * Set the value of [id_blob_pieces_notification] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setIdBlobPiecesNotification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_blob_pieces_notification !== $v) {
            $this->id_blob_pieces_notification = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::ID_BLOB_PIECES_NOTIFICATION;
        }


        return $this;
    } // setIdBlobPiecesNotification()

    /**
     * Set the value of [date_fin_marche_previsionnel] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setDateFinMarchePrevisionnel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_fin_marche_previsionnel !== $v) {
            $this->date_fin_marche_previsionnel = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_PREVISIONNEL;
        }


        return $this;
    } // setDateFinMarchePrevisionnel()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [acronymepays_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setAcronymepaysAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronymepays_attributaire !== $v) {
            $this->acronymepays_attributaire = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::ACRONYMEPAYS_ATTRIBUTAIRE;
        }


        return $this;
    } // setAcronymepaysAttributaire()

    /**
     * Set the value of [pays_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setPaysAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_attributaire !== $v) {
            $this->pays_attributaire = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::PAYS_ATTRIBUTAIRE;
        }


        return $this;
    } // setPaysAttributaire()

    /**
     * Set the value of [siren_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setSirenAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siren_attributaire !== $v) {
            $this->siren_attributaire = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::SIREN_ATTRIBUTAIRE;
        }


        return $this;
    } // setSirenAttributaire()

    /**
     * Set the value of [nic_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setNicAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nic_attributaire !== $v) {
            $this->nic_attributaire = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::NIC_ATTRIBUTAIRE;
        }


        return $this;
    } // setNicAttributaire()

    /**
     * Set the value of [identifiantnational_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setIdentifiantnationalAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiantnational_attributaire !== $v) {
            $this->identifiantnational_attributaire = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE;
        }


        return $this;
    } // setIdentifiantnationalAttributaire()

    /**
     * Set the value of [rc_ville_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setRcVilleAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rc_ville_attributaire !== $v) {
            $this->rc_ville_attributaire = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::RC_VILLE_ATTRIBUTAIRE;
        }


        return $this;
    } // setRcVilleAttributaire()

    /**
     * Set the value of [rc_num_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setRcNumAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rc_num_attributaire !== $v) {
            $this->rc_num_attributaire = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::RC_NUM_ATTRIBUTAIRE;
        }


        return $this;
    } // setRcNumAttributaire()

    /**
     * Set the value of [date_notification_reelle] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setDateNotificationReelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_notification_reelle !== $v) {
            $this->date_notification_reelle = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::DATE_NOTIFICATION_REELLE;
        }


        return $this;
    } // setDateNotificationReelle()

    /**
     * Set the value of [date_fin_marche_reelle] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setDateFinMarcheReelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_fin_marche_reelle !== $v) {
            $this->date_fin_marche_reelle = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_REELLE;
        }


        return $this;
    } // setDateFinMarcheReelle()

    /**
     * Set the value of [envoi_interface] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setEnvoiInterface($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoi_interface !== $v) {
            $this->envoi_interface = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::ENVOI_INTERFACE;
        }


        return $this;
    } // setEnvoiInterface()

    /**
     * Set the value of [ifu_attributaire] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setIfuAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ifu_attributaire !== $v) {
            $this->ifu_attributaire = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::IFU_ATTRIBUTAIRE;
        }


        return $this;
    } // setIfuAttributaire()

    /**
     * Set the value of [type_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonDecisionEnveloppe The current object (for fluent API support)
     */
    public function setTypeEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_entreprise !== $v) {
            $this->type_entreprise = $v;
            $this->modifiedColumns[] = CommonDecisionEnveloppePeer::TYPE_ENTREPRISE;
        }


        return $this;
    } // setTypeEntreprise()

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

            if ($this->consultation_ref !== 0) {
                return false;
            }

            if ($this->id_offre !== 0) {
                return false;
            }

            if ($this->lot !== 0) {
                return false;
            }

            if ($this->decision !== '0') {
                return false;
            }

            if ($this->pme_pmi !== 0) {
                return false;
            }

            if ($this->note !== '') {
                return false;
            }

            if ($this->classement !== '') {
                return false;
            }

            if ($this->envoi_interface !== '0') {
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

            $this->id_decision_enveloppe = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->consultation_ref = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_offre = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->lot = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->decision = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->date_notification = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->code_postal = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->pme_pmi = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->tranche_budgetaire = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->montant_marche = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->categorie = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->objet_marche = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->commentaire = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->fichier_joint = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->nom_fichier_joint = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->type_enveloppe = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->numero_marche = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->statutej = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->note = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->classement = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->id_blob_pieces_notification = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->date_fin_marche_previsionnel = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->ville = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->acronymepays_attributaire = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->pays_attributaire = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->siren_attributaire = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->nic_attributaire = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->identifiantnational_attributaire = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->rc_ville_attributaire = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->rc_num_attributaire = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->date_notification_reelle = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->date_fin_marche_reelle = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->envoi_interface = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->ifu_attributaire = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->type_entreprise = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 36; // 36 = CommonDecisionEnveloppePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonDecisionEnveloppe object", $e);
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
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonDecisionEnveloppePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonDecisionEnveloppeQuery::create()
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
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonDecisionEnveloppePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE;
        if (null !== $this->id_decision_enveloppe) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_decision_enveloppe`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ID_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_offre`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::DECISION)) {
            $modifiedColumns[':p' . $index++]  = '`decision`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::DATE_NOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_notification`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`code_postal`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::PME_PMI)) {
            $modifiedColumns[':p' . $index++]  = '`pme_pmi`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::TRANCHE_BUDGETAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`tranche_budgetaire`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::MONTANT_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_marche`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::CATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`categorie`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::OBJET_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`objet_marche`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::FICHIER_JOINT)) {
            $modifiedColumns[':p' . $index++]  = '`fichier_joint`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::NOM_FICHIER_JOINT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier_joint`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::TYPE_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`type_enveloppe`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::NUMERO_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_marche`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::STATUTEJ)) {
            $modifiedColumns[':p' . $index++]  = '`statutEJ`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::NOTE)) {
            $modifiedColumns[':p' . $index++]  = '`note`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::CLASSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`classement`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ID_BLOB_PIECES_NOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob_pieces_notification`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_PREVISIONNEL)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin_marche_previsionnel`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ACRONYMEPAYS_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`acronymePays_Attributaire`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::PAYS_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`pays_Attributaire`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::SIREN_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`siren_Attributaire`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::NIC_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`nic_Attributaire`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`identifiantNational_Attributaire`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::RC_VILLE_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`rc_ville_attributaire`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::RC_NUM_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`rc_num_attributaire`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::DATE_NOTIFICATION_REELLE)) {
            $modifiedColumns[':p' . $index++]  = '`date_notification_reelle`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_REELLE)) {
            $modifiedColumns[':p' . $index++]  = '`date_fin_marche_reelle`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ENVOI_INTERFACE)) {
            $modifiedColumns[':p' . $index++]  = '`envoi_interface`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::IFU_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ifu_attributaire`';
        }
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::TYPE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`type_entreprise`';
        }

        $sql = sprintf(
            'INSERT INTO `decisionEnveloppe` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_decision_enveloppe`':						
                        $stmt->bindValue($identifier, $this->id_decision_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`id_offre`':						
                        $stmt->bindValue($identifier, $this->id_offre, PDO::PARAM_INT);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`decision`':						
                        $stmt->bindValue($identifier, $this->decision, PDO::PARAM_STR);
                        break;
                    case '`date_notification`':						
                        $stmt->bindValue($identifier, $this->date_notification, PDO::PARAM_STR);
                        break;
                    case '`code_postal`':						
                        $stmt->bindValue($identifier, $this->code_postal, PDO::PARAM_STR);
                        break;
                    case '`pme_pmi`':						
                        $stmt->bindValue($identifier, $this->pme_pmi, PDO::PARAM_INT);
                        break;
                    case '`tranche_budgetaire`':						
                        $stmt->bindValue($identifier, $this->tranche_budgetaire, PDO::PARAM_INT);
                        break;
                    case '`montant_marche`':						
                        $stmt->bindValue($identifier, $this->montant_marche, PDO::PARAM_STR);
                        break;
                    case '`categorie`':						
                        $stmt->bindValue($identifier, $this->categorie, PDO::PARAM_INT);
                        break;
                    case '`objet_marche`':						
                        $stmt->bindValue($identifier, $this->objet_marche, PDO::PARAM_STR);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`fichier_joint`':						
                        $stmt->bindValue($identifier, $this->fichier_joint, PDO::PARAM_INT);
                        break;
                    case '`nom_fichier_joint`':						
                        $stmt->bindValue($identifier, $this->nom_fichier_joint, PDO::PARAM_STR);
                        break;
                    case '`type_enveloppe`':						
                        $stmt->bindValue($identifier, $this->type_enveloppe, PDO::PARAM_STR);
                        break;
                    case '`numero_marche`':						
                        $stmt->bindValue($identifier, $this->numero_marche, PDO::PARAM_STR);
                        break;
                    case '`statutEJ`':						
                        $stmt->bindValue($identifier, $this->statutej, PDO::PARAM_STR);
                        break;
                    case '`note`':						
                        $stmt->bindValue($identifier, $this->note, PDO::PARAM_STR);
                        break;
                    case '`classement`':						
                        $stmt->bindValue($identifier, $this->classement, PDO::PARAM_STR);
                        break;
                    case '`id_blob_pieces_notification`':						
                        $stmt->bindValue($identifier, $this->id_blob_pieces_notification, PDO::PARAM_STR);
                        break;
                    case '`date_fin_marche_previsionnel`':						
                        $stmt->bindValue($identifier, $this->date_fin_marche_previsionnel, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`acronymePays_Attributaire`':						
                        $stmt->bindValue($identifier, $this->acronymepays_attributaire, PDO::PARAM_STR);
                        break;
                    case '`pays_Attributaire`':						
                        $stmt->bindValue($identifier, $this->pays_attributaire, PDO::PARAM_STR);
                        break;
                    case '`siren_Attributaire`':						
                        $stmt->bindValue($identifier, $this->siren_attributaire, PDO::PARAM_STR);
                        break;
                    case '`nic_Attributaire`':						
                        $stmt->bindValue($identifier, $this->nic_attributaire, PDO::PARAM_STR);
                        break;
                    case '`identifiantNational_Attributaire`':						
                        $stmt->bindValue($identifier, $this->identifiantnational_attributaire, PDO::PARAM_STR);
                        break;
                    case '`rc_ville_attributaire`':						
                        $stmt->bindValue($identifier, $this->rc_ville_attributaire, PDO::PARAM_STR);
                        break;
                    case '`rc_num_attributaire`':						
                        $stmt->bindValue($identifier, $this->rc_num_attributaire, PDO::PARAM_STR);
                        break;
                    case '`date_notification_reelle`':						
                        $stmt->bindValue($identifier, $this->date_notification_reelle, PDO::PARAM_STR);
                        break;
                    case '`date_fin_marche_reelle`':						
                        $stmt->bindValue($identifier, $this->date_fin_marche_reelle, PDO::PARAM_STR);
                        break;
                    case '`envoi_interface`':						
                        $stmt->bindValue($identifier, $this->envoi_interface, PDO::PARAM_STR);
                        break;
                    case '`ifu_attributaire`':						
                        $stmt->bindValue($identifier, $this->ifu_attributaire, PDO::PARAM_STR);
                        break;
                    case '`type_entreprise`':						
                        $stmt->bindValue($identifier, $this->type_entreprise, PDO::PARAM_STR);
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
        $this->setIdDecisionEnveloppe($pk);

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


            if (($retval = CommonDecisionEnveloppePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonDecisionEnveloppePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDecisionEnveloppe();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getConsultationRef();
                break;
            case 3:
                return $this->getIdOffre();
                break;
            case 4:
                return $this->getLot();
                break;
            case 5:
                return $this->getDecision();
                break;
            case 6:
                return $this->getDateNotification();
                break;
            case 7:
                return $this->getCodePostal();
                break;
            case 8:
                return $this->getPmePmi();
                break;
            case 9:
                return $this->getTrancheBudgetaire();
                break;
            case 10:
                return $this->getMontantMarche();
                break;
            case 11:
                return $this->getCategorie();
                break;
            case 12:
                return $this->getObjetMarche();
                break;
            case 13:
                return $this->getCommentaire();
                break;
            case 14:
                return $this->getFichierJoint();
                break;
            case 15:
                return $this->getNomFichierJoint();
                break;
            case 16:
                return $this->getTypeEnveloppe();
                break;
            case 17:
                return $this->getNumeroMarche();
                break;
            case 18:
                return $this->getStatutej();
                break;
            case 19:
                return $this->getNote();
                break;
            case 20:
                return $this->getClassement();
                break;
            case 21:
                return $this->getIdBlobPiecesNotification();
                break;
            case 22:
                return $this->getDateFinMarchePrevisionnel();
                break;
            case 23:
                return $this->getVille();
                break;
            case 24:
                return $this->getAcronymepaysAttributaire();
                break;
            case 25:
                return $this->getPaysAttributaire();
                break;
            case 26:
                return $this->getSirenAttributaire();
                break;
            case 27:
                return $this->getNicAttributaire();
                break;
            case 28:
                return $this->getIdentifiantnationalAttributaire();
                break;
            case 29:
                return $this->getRcVilleAttributaire();
                break;
            case 30:
                return $this->getRcNumAttributaire();
                break;
            case 31:
                return $this->getDateNotificationReelle();
                break;
            case 32:
                return $this->getDateFinMarcheReelle();
                break;
            case 33:
                return $this->getEnvoiInterface();
                break;
            case 34:
                return $this->getIfuAttributaire();
                break;
            case 35:
                return $this->getTypeEntreprise();
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
        if (isset($alreadyDumpedObjects['CommonDecisionEnveloppe'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonDecisionEnveloppe'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonDecisionEnveloppePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdDecisionEnveloppe(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getConsultationRef(),
            $keys[3] => $this->getIdOffre(),
            $keys[4] => $this->getLot(),
            $keys[5] => $this->getDecision(),
            $keys[6] => $this->getDateNotification(),
            $keys[7] => $this->getCodePostal(),
            $keys[8] => $this->getPmePmi(),
            $keys[9] => $this->getTrancheBudgetaire(),
            $keys[10] => $this->getMontantMarche(),
            $keys[11] => $this->getCategorie(),
            $keys[12] => $this->getObjetMarche(),
            $keys[13] => $this->getCommentaire(),
            $keys[14] => $this->getFichierJoint(),
            $keys[15] => $this->getNomFichierJoint(),
            $keys[16] => $this->getTypeEnveloppe(),
            $keys[17] => $this->getNumeroMarche(),
            $keys[18] => $this->getStatutej(),
            $keys[19] => $this->getNote(),
            $keys[20] => $this->getClassement(),
            $keys[21] => $this->getIdBlobPiecesNotification(),
            $keys[22] => $this->getDateFinMarchePrevisionnel(),
            $keys[23] => $this->getVille(),
            $keys[24] => $this->getAcronymepaysAttributaire(),
            $keys[25] => $this->getPaysAttributaire(),
            $keys[26] => $this->getSirenAttributaire(),
            $keys[27] => $this->getNicAttributaire(),
            $keys[28] => $this->getIdentifiantnationalAttributaire(),
            $keys[29] => $this->getRcVilleAttributaire(),
            $keys[30] => $this->getRcNumAttributaire(),
            $keys[31] => $this->getDateNotificationReelle(),
            $keys[32] => $this->getDateFinMarcheReelle(),
            $keys[33] => $this->getEnvoiInterface(),
            $keys[34] => $this->getIfuAttributaire(),
            $keys[35] => $this->getTypeEntreprise(),
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
        $pos = CommonDecisionEnveloppePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDecisionEnveloppe($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setConsultationRef($value);
                break;
            case 3:
                $this->setIdOffre($value);
                break;
            case 4:
                $this->setLot($value);
                break;
            case 5:
                $this->setDecision($value);
                break;
            case 6:
                $this->setDateNotification($value);
                break;
            case 7:
                $this->setCodePostal($value);
                break;
            case 8:
                $this->setPmePmi($value);
                break;
            case 9:
                $this->setTrancheBudgetaire($value);
                break;
            case 10:
                $this->setMontantMarche($value);
                break;
            case 11:
                $this->setCategorie($value);
                break;
            case 12:
                $this->setObjetMarche($value);
                break;
            case 13:
                $this->setCommentaire($value);
                break;
            case 14:
                $this->setFichierJoint($value);
                break;
            case 15:
                $this->setNomFichierJoint($value);
                break;
            case 16:
                $this->setTypeEnveloppe($value);
                break;
            case 17:
                $this->setNumeroMarche($value);
                break;
            case 18:
                $this->setStatutej($value);
                break;
            case 19:
                $this->setNote($value);
                break;
            case 20:
                $this->setClassement($value);
                break;
            case 21:
                $this->setIdBlobPiecesNotification($value);
                break;
            case 22:
                $this->setDateFinMarchePrevisionnel($value);
                break;
            case 23:
                $this->setVille($value);
                break;
            case 24:
                $this->setAcronymepaysAttributaire($value);
                break;
            case 25:
                $this->setPaysAttributaire($value);
                break;
            case 26:
                $this->setSirenAttributaire($value);
                break;
            case 27:
                $this->setNicAttributaire($value);
                break;
            case 28:
                $this->setIdentifiantnationalAttributaire($value);
                break;
            case 29:
                $this->setRcVilleAttributaire($value);
                break;
            case 30:
                $this->setRcNumAttributaire($value);
                break;
            case 31:
                $this->setDateNotificationReelle($value);
                break;
            case 32:
                $this->setDateFinMarcheReelle($value);
                break;
            case 33:
                $this->setEnvoiInterface($value);
                break;
            case 34:
                $this->setIfuAttributaire($value);
                break;
            case 35:
                $this->setTypeEntreprise($value);
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
        $keys = CommonDecisionEnveloppePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdDecisionEnveloppe($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdOffre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLot($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDecision($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateNotification($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCodePostal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPmePmi($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTrancheBudgetaire($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMontantMarche($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCategorie($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setObjetMarche($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCommentaire($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFichierJoint($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNomFichierJoint($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTypeEnveloppe($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNumeroMarche($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setStatutej($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setNote($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setClassement($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setIdBlobPiecesNotification($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDateFinMarchePrevisionnel($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setVille($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAcronymepaysAttributaire($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPaysAttributaire($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSirenAttributaire($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setNicAttributaire($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setIdentifiantnationalAttributaire($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setRcVilleAttributaire($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setRcNumAttributaire($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDateNotificationReelle($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDateFinMarcheReelle($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setEnvoiInterface($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setIfuAttributaire($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setTypeEntreprise($arr[$keys[35]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonDecisionEnveloppePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE)) $criteria->add(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, $this->id_decision_enveloppe);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ORGANISME)) $criteria->add(CommonDecisionEnveloppePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::CONSULTATION_REF)) $criteria->add(CommonDecisionEnveloppePeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ID_OFFRE)) $criteria->add(CommonDecisionEnveloppePeer::ID_OFFRE, $this->id_offre);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::LOT)) $criteria->add(CommonDecisionEnveloppePeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::DECISION)) $criteria->add(CommonDecisionEnveloppePeer::DECISION, $this->decision);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::DATE_NOTIFICATION)) $criteria->add(CommonDecisionEnveloppePeer::DATE_NOTIFICATION, $this->date_notification);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::CODE_POSTAL)) $criteria->add(CommonDecisionEnveloppePeer::CODE_POSTAL, $this->code_postal);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::PME_PMI)) $criteria->add(CommonDecisionEnveloppePeer::PME_PMI, $this->pme_pmi);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::TRANCHE_BUDGETAIRE)) $criteria->add(CommonDecisionEnveloppePeer::TRANCHE_BUDGETAIRE, $this->tranche_budgetaire);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::MONTANT_MARCHE)) $criteria->add(CommonDecisionEnveloppePeer::MONTANT_MARCHE, $this->montant_marche);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::CATEGORIE)) $criteria->add(CommonDecisionEnveloppePeer::CATEGORIE, $this->categorie);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::OBJET_MARCHE)) $criteria->add(CommonDecisionEnveloppePeer::OBJET_MARCHE, $this->objet_marche);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::COMMENTAIRE)) $criteria->add(CommonDecisionEnveloppePeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::FICHIER_JOINT)) $criteria->add(CommonDecisionEnveloppePeer::FICHIER_JOINT, $this->fichier_joint);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::NOM_FICHIER_JOINT)) $criteria->add(CommonDecisionEnveloppePeer::NOM_FICHIER_JOINT, $this->nom_fichier_joint);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::TYPE_ENVELOPPE)) $criteria->add(CommonDecisionEnveloppePeer::TYPE_ENVELOPPE, $this->type_enveloppe);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::NUMERO_MARCHE)) $criteria->add(CommonDecisionEnveloppePeer::NUMERO_MARCHE, $this->numero_marche);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::STATUTEJ)) $criteria->add(CommonDecisionEnveloppePeer::STATUTEJ, $this->statutej);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::NOTE)) $criteria->add(CommonDecisionEnveloppePeer::NOTE, $this->note);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::CLASSEMENT)) $criteria->add(CommonDecisionEnveloppePeer::CLASSEMENT, $this->classement);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ID_BLOB_PIECES_NOTIFICATION)) $criteria->add(CommonDecisionEnveloppePeer::ID_BLOB_PIECES_NOTIFICATION, $this->id_blob_pieces_notification);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_PREVISIONNEL)) $criteria->add(CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_PREVISIONNEL, $this->date_fin_marche_previsionnel);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::VILLE)) $criteria->add(CommonDecisionEnveloppePeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ACRONYMEPAYS_ATTRIBUTAIRE)) $criteria->add(CommonDecisionEnveloppePeer::ACRONYMEPAYS_ATTRIBUTAIRE, $this->acronymepays_attributaire);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::PAYS_ATTRIBUTAIRE)) $criteria->add(CommonDecisionEnveloppePeer::PAYS_ATTRIBUTAIRE, $this->pays_attributaire);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::SIREN_ATTRIBUTAIRE)) $criteria->add(CommonDecisionEnveloppePeer::SIREN_ATTRIBUTAIRE, $this->siren_attributaire);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::NIC_ATTRIBUTAIRE)) $criteria->add(CommonDecisionEnveloppePeer::NIC_ATTRIBUTAIRE, $this->nic_attributaire);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE)) $criteria->add(CommonDecisionEnveloppePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE, $this->identifiantnational_attributaire);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::RC_VILLE_ATTRIBUTAIRE)) $criteria->add(CommonDecisionEnveloppePeer::RC_VILLE_ATTRIBUTAIRE, $this->rc_ville_attributaire);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::RC_NUM_ATTRIBUTAIRE)) $criteria->add(CommonDecisionEnveloppePeer::RC_NUM_ATTRIBUTAIRE, $this->rc_num_attributaire);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::DATE_NOTIFICATION_REELLE)) $criteria->add(CommonDecisionEnveloppePeer::DATE_NOTIFICATION_REELLE, $this->date_notification_reelle);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_REELLE)) $criteria->add(CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_REELLE, $this->date_fin_marche_reelle);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::ENVOI_INTERFACE)) $criteria->add(CommonDecisionEnveloppePeer::ENVOI_INTERFACE, $this->envoi_interface);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::IFU_ATTRIBUTAIRE)) $criteria->add(CommonDecisionEnveloppePeer::IFU_ATTRIBUTAIRE, $this->ifu_attributaire);
        if ($this->isColumnModified(CommonDecisionEnveloppePeer::TYPE_ENTREPRISE)) $criteria->add(CommonDecisionEnveloppePeer::TYPE_ENTREPRISE, $this->type_entreprise);

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
        $criteria = new Criteria(CommonDecisionEnveloppePeer::DATABASE_NAME);
        $criteria->add(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, $this->id_decision_enveloppe);
        $criteria->add(CommonDecisionEnveloppePeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdDecisionEnveloppe();
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
        $this->setIdDecisionEnveloppe($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdDecisionEnveloppe()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonDecisionEnveloppe (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setIdOffre($this->getIdOffre());
        $copyObj->setLot($this->getLot());
        $copyObj->setDecision($this->getDecision());
        $copyObj->setDateNotification($this->getDateNotification());
        $copyObj->setCodePostal($this->getCodePostal());
        $copyObj->setPmePmi($this->getPmePmi());
        $copyObj->setTrancheBudgetaire($this->getTrancheBudgetaire());
        $copyObj->setMontantMarche($this->getMontantMarche());
        $copyObj->setCategorie($this->getCategorie());
        $copyObj->setObjetMarche($this->getObjetMarche());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setFichierJoint($this->getFichierJoint());
        $copyObj->setNomFichierJoint($this->getNomFichierJoint());
        $copyObj->setTypeEnveloppe($this->getTypeEnveloppe());
        $copyObj->setNumeroMarche($this->getNumeroMarche());
        $copyObj->setStatutej($this->getStatutej());
        $copyObj->setNote($this->getNote());
        $copyObj->setClassement($this->getClassement());
        $copyObj->setIdBlobPiecesNotification($this->getIdBlobPiecesNotification());
        $copyObj->setDateFinMarchePrevisionnel($this->getDateFinMarchePrevisionnel());
        $copyObj->setVille($this->getVille());
        $copyObj->setAcronymepaysAttributaire($this->getAcronymepaysAttributaire());
        $copyObj->setPaysAttributaire($this->getPaysAttributaire());
        $copyObj->setSirenAttributaire($this->getSirenAttributaire());
        $copyObj->setNicAttributaire($this->getNicAttributaire());
        $copyObj->setIdentifiantnationalAttributaire($this->getIdentifiantnationalAttributaire());
        $copyObj->setRcVilleAttributaire($this->getRcVilleAttributaire());
        $copyObj->setRcNumAttributaire($this->getRcNumAttributaire());
        $copyObj->setDateNotificationReelle($this->getDateNotificationReelle());
        $copyObj->setDateFinMarcheReelle($this->getDateFinMarcheReelle());
        $copyObj->setEnvoiInterface($this->getEnvoiInterface());
        $copyObj->setIfuAttributaire($this->getIfuAttributaire());
        $copyObj->setTypeEntreprise($this->getTypeEntreprise());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdDecisionEnveloppe(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonDecisionEnveloppe Clone of current object.
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
     * @return CommonDecisionEnveloppePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonDecisionEnveloppePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_decision_enveloppe = null;
        $this->organisme = null;
        $this->consultation_ref = null;
        $this->id_offre = null;
        $this->lot = null;
        $this->decision = null;
        $this->date_notification = null;
        $this->code_postal = null;
        $this->pme_pmi = null;
        $this->tranche_budgetaire = null;
        $this->montant_marche = null;
        $this->categorie = null;
        $this->objet_marche = null;
        $this->commentaire = null;
        $this->fichier_joint = null;
        $this->nom_fichier_joint = null;
        $this->type_enveloppe = null;
        $this->numero_marche = null;
        $this->statutej = null;
        $this->note = null;
        $this->classement = null;
        $this->id_blob_pieces_notification = null;
        $this->date_fin_marche_previsionnel = null;
        $this->ville = null;
        $this->acronymepays_attributaire = null;
        $this->pays_attributaire = null;
        $this->siren_attributaire = null;
        $this->nic_attributaire = null;
        $this->identifiantnational_attributaire = null;
        $this->rc_ville_attributaire = null;
        $this->rc_num_attributaire = null;
        $this->date_notification_reelle = null;
        $this->date_fin_marche_reelle = null;
        $this->envoi_interface = null;
        $this->ifu_attributaire = null;
        $this->type_entreprise = null;
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
        return (string) $this->exportTo(CommonDecisionEnveloppePeer::DEFAULT_STRING_FORMAT);
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
