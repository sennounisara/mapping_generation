<?php


/**
 * Base class that represents a row from the 'Avenant' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAvenant extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAvenantPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAvenantPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_avenant field.
     * @var        int
     */
    protected $id_avenant;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the numero_avenant field.
     * @var        string
     */
    protected $numero_avenant;

    /**
     * The value for the type_avenant field.
     * @var        int
     */
    protected $type_avenant;

    /**
     * The value for the objet_avenant field.
     * @var        string
     */
    protected $objet_avenant;

    /**
     * The value for the montant_avenant_ht field.
     * @var        string
     */
    protected $montant_avenant_ht;

    /**
     * The value for the montant_avenant_ttc field.
     * @var        string
     */
    protected $montant_avenant_ttc;

    /**
     * The value for the pourcentage_augmentation_marche_initial field.
     * @var        string
     */
    protected $pourcentage_augmentation_marche_initial;

    /**
     * The value for the pourcentage_augmentation_cumule field.
     * @var        string
     */
    protected $pourcentage_augmentation_cumule;

    /**
     * The value for the montant_total_marche_tout_avenant_cumule field.
     * @var        string
     */
    protected $montant_total_marche_tout_avenant_cumule;

    /**
     * The value for the date_reception_projet_par_secretaire_cao field.
     * @var        string
     */
    protected $date_reception_projet_par_secretaire_cao;

    /**
     * The value for the date_reception_projet_par_charge_etude field.
     * @var        string
     */
    protected $date_reception_projet_par_charge_etude;

    /**
     * The value for the date_observation_par_sv field.
     * @var        string
     */
    protected $date_observation_par_sv;

    /**
     * The value for the date_retour_projet field.
     * @var        string
     */
    protected $date_retour_projet;

    /**
     * The value for the date_validation_projet field.
     * @var        string
     */
    protected $date_validation_projet;

    /**
     * The value for the date_validation_projet_vu_par field.
     * @var        int
     */
    protected $date_validation_projet_vu_par;

    /**
     * The value for the date_cao field.
     * @var        string
     */
    protected $date_cao;

    /**
     * The value for the avis_cao field.
     * @var        int
     */
    protected $avis_cao;

    /**
     * The value for the date_cp field.
     * @var        string
     */
    protected $date_cp;

    /**
     * The value for the date_signature_avenant field.
     * @var        string
     */
    protected $date_signature_avenant;

    /**
     * The value for the date_reception_dossier field.
     * @var        string
     */
    protected $date_reception_dossier;

    /**
     * The value for the date_formulation_observation_par_sv_sur_sdossier field.
     * @var        string
     */
    protected $date_formulation_observation_par_sv_sur_sdossier;

    /**
     * The value for the date_retour_dossier_finalise field.
     * @var        string
     */
    protected $date_retour_dossier_finalise;

    /**
     * The value for the date_validation_dossier_finalise field.
     * @var        string
     */
    protected $date_validation_dossier_finalise;

    /**
     * The value for the date_transmission_prefecture field.
     * @var        string
     */
    protected $date_transmission_prefecture;

    /**
     * The value for the date_notification field.
     * @var        string
     */
    protected $date_notification;

    /**
     * The value for the operation_validation_vues_par field.
     * @var        int
     */
    protected $operation_validation_vues_par;

    /**
     * The value for the commentaires field.
     * @var        string
     */
    protected $commentaires;

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
     * Get the [id_avenant] column value.
     * 
     * @return int
     */
    public function getIdAvenant()
    {

        return $this->id_avenant;
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
     * Get the [id_contrat] column value.
     * 
     * @return int
     */
    public function getIdContrat()
    {

        return $this->id_contrat;
    }

    /**
     * Get the [numero_avenant] column value.
     * 
     * @return string
     */
    public function getNumeroAvenant()
    {

        return $this->numero_avenant;
    }

    /**
     * Get the [type_avenant] column value.
     * 
     * @return int
     */
    public function getTypeAvenant()
    {

        return $this->type_avenant;
    }

    /**
     * Get the [objet_avenant] column value.
     * 
     * @return string
     */
    public function getObjetAvenant()
    {

        return $this->objet_avenant;
    }

    /**
     * Get the [montant_avenant_ht] column value.
     * 
     * @return string
     */
    public function getMontantAvenantHt()
    {

        return $this->montant_avenant_ht;
    }

    /**
     * Get the [montant_avenant_ttc] column value.
     * 
     * @return string
     */
    public function getMontantAvenantTtc()
    {

        return $this->montant_avenant_ttc;
    }

    /**
     * Get the [pourcentage_augmentation_marche_initial] column value.
     * 
     * @return string
     */
    public function getPourcentageAugmentationMarcheInitial()
    {

        return $this->pourcentage_augmentation_marche_initial;
    }

    /**
     * Get the [pourcentage_augmentation_cumule] column value.
     * 
     * @return string
     */
    public function getPourcentageAugmentationCumule()
    {

        return $this->pourcentage_augmentation_cumule;
    }

    /**
     * Get the [montant_total_marche_tout_avenant_cumule] column value.
     * 
     * @return string
     */
    public function getMontantTotalMarcheToutAvenantCumule()
    {

        return $this->montant_total_marche_tout_avenant_cumule;
    }

    /**
     * Get the [date_reception_projet_par_secretaire_cao] column value.
     * 
     * @return string
     */
    public function getDateReceptionProjetParSecretaireCao()
    {

        return $this->date_reception_projet_par_secretaire_cao;
    }

    /**
     * Get the [date_reception_projet_par_charge_etude] column value.
     * 
     * @return string
     */
    public function getDateReceptionProjetParChargeEtude()
    {

        return $this->date_reception_projet_par_charge_etude;
    }

    /**
     * Get the [date_observation_par_sv] column value.
     * 
     * @return string
     */
    public function getDateObservationParSv()
    {

        return $this->date_observation_par_sv;
    }

    /**
     * Get the [date_retour_projet] column value.
     * 
     * @return string
     */
    public function getDateRetourProjet()
    {

        return $this->date_retour_projet;
    }

    /**
     * Get the [date_validation_projet] column value.
     * 
     * @return string
     */
    public function getDateValidationProjet()
    {

        return $this->date_validation_projet;
    }

    /**
     * Get the [date_validation_projet_vu_par] column value.
     * 
     * @return int
     */
    public function getDateValidationProjetVuPar()
    {

        return $this->date_validation_projet_vu_par;
    }

    /**
     * Get the [date_cao] column value.
     * 
     * @return string
     */
    public function getDateCao()
    {

        return $this->date_cao;
    }

    /**
     * Get the [avis_cao] column value.
     * 
     * @return int
     */
    public function getAvisCao()
    {

        return $this->avis_cao;
    }

    /**
     * Get the [date_cp] column value.
     * 
     * @return string
     */
    public function getDateCp()
    {

        return $this->date_cp;
    }

    /**
     * Get the [date_signature_avenant] column value.
     * 
     * @return string
     */
    public function getDateSignatureAvenant()
    {

        return $this->date_signature_avenant;
    }

    /**
     * Get the [date_reception_dossier] column value.
     * 
     * @return string
     */
    public function getDateReceptionDossier()
    {

        return $this->date_reception_dossier;
    }

    /**
     * Get the [date_formulation_observation_par_sv_sur_sdossier] column value.
     * 
     * @return string
     */
    public function getDateFormulationObservationParSvSurSdossier()
    {

        return $this->date_formulation_observation_par_sv_sur_sdossier;
    }

    /**
     * Get the [date_retour_dossier_finalise] column value.
     * 
     * @return string
     */
    public function getDateRetourDossierFinalise()
    {

        return $this->date_retour_dossier_finalise;
    }

    /**
     * Get the [date_validation_dossier_finalise] column value.
     * 
     * @return string
     */
    public function getDateValidationDossierFinalise()
    {

        return $this->date_validation_dossier_finalise;
    }

    /**
     * Get the [date_transmission_prefecture] column value.
     * 
     * @return string
     */
    public function getDateTransmissionPrefecture()
    {

        return $this->date_transmission_prefecture;
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
     * Get the [operation_validation_vues_par] column value.
     * 
     * @return int
     */
    public function getOperationValidationVuesPar()
    {

        return $this->operation_validation_vues_par;
    }

    /**
     * Get the [commentaires] column value.
     * 
     * @return string
     */
    public function getCommentaires()
    {

        return $this->commentaires;
    }

    /**
     * Set the value of [id_avenant] column.
     * 
     * @param int $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setIdAvenant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_avenant !== $v) {
            $this->id_avenant = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::ID_AVENANT;
        }


        return $this;
    } // setIdAvenant()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::ID_CONTRAT;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [numero_avenant] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setNumeroAvenant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_avenant !== $v) {
            $this->numero_avenant = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::NUMERO_AVENANT;
        }


        return $this;
    } // setNumeroAvenant()

    /**
     * Set the value of [type_avenant] column.
     * 
     * @param int $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setTypeAvenant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_avenant !== $v) {
            $this->type_avenant = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::TYPE_AVENANT;
        }


        return $this;
    } // setTypeAvenant()

    /**
     * Set the value of [objet_avenant] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setObjetAvenant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet_avenant !== $v) {
            $this->objet_avenant = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::OBJET_AVENANT;
        }


        return $this;
    } // setObjetAvenant()

    /**
     * Set the value of [montant_avenant_ht] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setMontantAvenantHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_avenant_ht !== $v) {
            $this->montant_avenant_ht = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::MONTANT_AVENANT_HT;
        }


        return $this;
    } // setMontantAvenantHt()

    /**
     * Set the value of [montant_avenant_ttc] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setMontantAvenantTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_avenant_ttc !== $v) {
            $this->montant_avenant_ttc = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::MONTANT_AVENANT_TTC;
        }


        return $this;
    } // setMontantAvenantTtc()

    /**
     * Set the value of [pourcentage_augmentation_marche_initial] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setPourcentageAugmentationMarcheInitial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pourcentage_augmentation_marche_initial !== $v) {
            $this->pourcentage_augmentation_marche_initial = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::POURCENTAGE_AUGMENTATION_MARCHE_INITIAL;
        }


        return $this;
    } // setPourcentageAugmentationMarcheInitial()

    /**
     * Set the value of [pourcentage_augmentation_cumule] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setPourcentageAugmentationCumule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pourcentage_augmentation_cumule !== $v) {
            $this->pourcentage_augmentation_cumule = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::POURCENTAGE_AUGMENTATION_CUMULE;
        }


        return $this;
    } // setPourcentageAugmentationCumule()

    /**
     * Set the value of [montant_total_marche_tout_avenant_cumule] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setMontantTotalMarcheToutAvenantCumule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_total_marche_tout_avenant_cumule !== $v) {
            $this->montant_total_marche_tout_avenant_cumule = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE;
        }


        return $this;
    } // setMontantTotalMarcheToutAvenantCumule()

    /**
     * Set the value of [date_reception_projet_par_secretaire_cao] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateReceptionProjetParSecretaireCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reception_projet_par_secretaire_cao !== $v) {
            $this->date_reception_projet_par_secretaire_cao = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO;
        }


        return $this;
    } // setDateReceptionProjetParSecretaireCao()

    /**
     * Set the value of [date_reception_projet_par_charge_etude] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateReceptionProjetParChargeEtude($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reception_projet_par_charge_etude !== $v) {
            $this->date_reception_projet_par_charge_etude = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE;
        }


        return $this;
    } // setDateReceptionProjetParChargeEtude()

    /**
     * Set the value of [date_observation_par_sv] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateObservationParSv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_observation_par_sv !== $v) {
            $this->date_observation_par_sv = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_OBSERVATION_PAR_SV;
        }


        return $this;
    } // setDateObservationParSv()

    /**
     * Set the value of [date_retour_projet] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateRetourProjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_retour_projet !== $v) {
            $this->date_retour_projet = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_RETOUR_PROJET;
        }


        return $this;
    } // setDateRetourProjet()

    /**
     * Set the value of [date_validation_projet] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateValidationProjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_validation_projet !== $v) {
            $this->date_validation_projet = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_VALIDATION_PROJET;
        }


        return $this;
    } // setDateValidationProjet()

    /**
     * Set the value of [date_validation_projet_vu_par] column.
     * 
     * @param int $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateValidationProjetVuPar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->date_validation_projet_vu_par !== $v) {
            $this->date_validation_projet_vu_par = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_VALIDATION_PROJET_VU_PAR;
        }


        return $this;
    } // setDateValidationProjetVuPar()

    /**
     * Set the value of [date_cao] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_cao !== $v) {
            $this->date_cao = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_CAO;
        }


        return $this;
    } // setDateCao()

    /**
     * Set the value of [avis_cao] column.
     * 
     * @param int $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setAvisCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->avis_cao !== $v) {
            $this->avis_cao = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::AVIS_CAO;
        }


        return $this;
    } // setAvisCao()

    /**
     * Set the value of [date_cp] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateCp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_cp !== $v) {
            $this->date_cp = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_CP;
        }


        return $this;
    } // setDateCp()

    /**
     * Set the value of [date_signature_avenant] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateSignatureAvenant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_signature_avenant !== $v) {
            $this->date_signature_avenant = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_SIGNATURE_AVENANT;
        }


        return $this;
    } // setDateSignatureAvenant()

    /**
     * Set the value of [date_reception_dossier] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateReceptionDossier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reception_dossier !== $v) {
            $this->date_reception_dossier = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_RECEPTION_DOSSIER;
        }


        return $this;
    } // setDateReceptionDossier()

    /**
     * Set the value of [date_formulation_observation_par_sv_sur_sdossier] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateFormulationObservationParSvSurSdossier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_formulation_observation_par_sv_sur_sdossier !== $v) {
            $this->date_formulation_observation_par_sv_sur_sdossier = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER;
        }


        return $this;
    } // setDateFormulationObservationParSvSurSdossier()

    /**
     * Set the value of [date_retour_dossier_finalise] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateRetourDossierFinalise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_retour_dossier_finalise !== $v) {
            $this->date_retour_dossier_finalise = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_RETOUR_DOSSIER_FINALISE;
        }


        return $this;
    } // setDateRetourDossierFinalise()

    /**
     * Set the value of [date_validation_dossier_finalise] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateValidationDossierFinalise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_validation_dossier_finalise !== $v) {
            $this->date_validation_dossier_finalise = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_VALIDATION_DOSSIER_FINALISE;
        }


        return $this;
    } // setDateValidationDossierFinalise()

    /**
     * Set the value of [date_transmission_prefecture] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateTransmissionPrefecture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_transmission_prefecture !== $v) {
            $this->date_transmission_prefecture = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_TRANSMISSION_PREFECTURE;
        }


        return $this;
    } // setDateTransmissionPrefecture()

    /**
     * Set the value of [date_notification] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setDateNotification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_notification !== $v) {
            $this->date_notification = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::DATE_NOTIFICATION;
        }


        return $this;
    } // setDateNotification()

    /**
     * Set the value of [operation_validation_vues_par] column.
     * 
     * @param int $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setOperationValidationVuesPar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->operation_validation_vues_par !== $v) {
            $this->operation_validation_vues_par = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::OPERATION_VALIDATION_VUES_PAR;
        }


        return $this;
    } // setOperationValidationVuesPar()

    /**
     * Set the value of [commentaires] column.
     * 
     * @param string $v new value
     * @return CommonAvenant The current object (for fluent API support)
     */
    public function setCommentaires($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaires !== $v) {
            $this->commentaires = $v;
            $this->modifiedColumns[] = CommonAvenantPeer::COMMENTAIRES;
        }


        return $this;
    } // setCommentaires()

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

            $this->id_avenant = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_contrat = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->numero_avenant = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->type_avenant = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->objet_avenant = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->montant_avenant_ht = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->montant_avenant_ttc = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->pourcentage_augmentation_marche_initial = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->pourcentage_augmentation_cumule = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->montant_total_marche_tout_avenant_cumule = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_reception_projet_par_secretaire_cao = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_reception_projet_par_charge_etude = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->date_observation_par_sv = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->date_retour_projet = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->date_validation_projet = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->date_validation_projet_vu_par = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->date_cao = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->avis_cao = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->date_cp = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->date_signature_avenant = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->date_reception_dossier = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->date_formulation_observation_par_sv_sur_sdossier = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->date_retour_dossier_finalise = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->date_validation_dossier_finalise = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->date_transmission_prefecture = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->date_notification = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->operation_validation_vues_par = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->commentaires = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 29; // 29 = CommonAvenantPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAvenant object", $e);
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
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAvenantPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAvenantQuery::create()
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
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAvenantPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonAvenantPeer::ID_AVENANT;
        if (null !== $this->id_avenant) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAvenantPeer::ID_AVENANT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAvenantPeer::ID_AVENANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_avenant`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::NUMERO_AVENANT)) {
            $modifiedColumns[':p' . $index++]  = '`numero_avenant`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::TYPE_AVENANT)) {
            $modifiedColumns[':p' . $index++]  = '`type_avenant`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::OBJET_AVENANT)) {
            $modifiedColumns[':p' . $index++]  = '`objet_avenant`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::MONTANT_AVENANT_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_avenant_ht`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::MONTANT_AVENANT_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_avenant_ttc`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::POURCENTAGE_AUGMENTATION_MARCHE_INITIAL)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_augmentation_marche_initial`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::POURCENTAGE_AUGMENTATION_CUMULE)) {
            $modifiedColumns[':p' . $index++]  = '`pourcentage_augmentation_cumule`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_total_marche_tout_avenant_cumule`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`date_reception_projet_par_secretaire_cao`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE)) {
            $modifiedColumns[':p' . $index++]  = '`date_reception_projet_par_charge_etude`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_OBSERVATION_PAR_SV)) {
            $modifiedColumns[':p' . $index++]  = '`date_observation_par_sv`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_RETOUR_PROJET)) {
            $modifiedColumns[':p' . $index++]  = '`date_retour_projet`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_VALIDATION_PROJET)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation_projet`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_VALIDATION_PROJET_VU_PAR)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation_projet_vu_par`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`date_cao`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::AVIS_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`avis_cao`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_CP)) {
            $modifiedColumns[':p' . $index++]  = '`date_cp`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_SIGNATURE_AVENANT)) {
            $modifiedColumns[':p' . $index++]  = '`date_signature_avenant`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_RECEPTION_DOSSIER)) {
            $modifiedColumns[':p' . $index++]  = '`date_reception_dossier`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER)) {
            $modifiedColumns[':p' . $index++]  = '`date_formulation_observation_par_sv_sur_sdossier`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_RETOUR_DOSSIER_FINALISE)) {
            $modifiedColumns[':p' . $index++]  = '`date_retour_dossier_finalise`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_VALIDATION_DOSSIER_FINALISE)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation_dossier_finalise`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_TRANSMISSION_PREFECTURE)) {
            $modifiedColumns[':p' . $index++]  = '`date_transmission_prefecture`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::DATE_NOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_notification`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::OPERATION_VALIDATION_VUES_PAR)) {
            $modifiedColumns[':p' . $index++]  = '`operation_validation_vues_par`';
        }
        if ($this->isColumnModified(CommonAvenantPeer::COMMENTAIRES)) {
            $modifiedColumns[':p' . $index++]  = '`commentaires`';
        }

        $sql = sprintf(
            'INSERT INTO `Avenant` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_avenant`':						
                        $stmt->bindValue($identifier, $this->id_avenant, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`numero_avenant`':						
                        $stmt->bindValue($identifier, $this->numero_avenant, PDO::PARAM_STR);
                        break;
                    case '`type_avenant`':						
                        $stmt->bindValue($identifier, $this->type_avenant, PDO::PARAM_INT);
                        break;
                    case '`objet_avenant`':						
                        $stmt->bindValue($identifier, $this->objet_avenant, PDO::PARAM_STR);
                        break;
                    case '`montant_avenant_ht`':						
                        $stmt->bindValue($identifier, $this->montant_avenant_ht, PDO::PARAM_STR);
                        break;
                    case '`montant_avenant_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_avenant_ttc, PDO::PARAM_STR);
                        break;
                    case '`pourcentage_augmentation_marche_initial`':						
                        $stmt->bindValue($identifier, $this->pourcentage_augmentation_marche_initial, PDO::PARAM_STR);
                        break;
                    case '`pourcentage_augmentation_cumule`':						
                        $stmt->bindValue($identifier, $this->pourcentage_augmentation_cumule, PDO::PARAM_STR);
                        break;
                    case '`montant_total_marche_tout_avenant_cumule`':						
                        $stmt->bindValue($identifier, $this->montant_total_marche_tout_avenant_cumule, PDO::PARAM_STR);
                        break;
                    case '`date_reception_projet_par_secretaire_cao`':						
                        $stmt->bindValue($identifier, $this->date_reception_projet_par_secretaire_cao, PDO::PARAM_STR);
                        break;
                    case '`date_reception_projet_par_charge_etude`':						
                        $stmt->bindValue($identifier, $this->date_reception_projet_par_charge_etude, PDO::PARAM_STR);
                        break;
                    case '`date_observation_par_sv`':						
                        $stmt->bindValue($identifier, $this->date_observation_par_sv, PDO::PARAM_STR);
                        break;
                    case '`date_retour_projet`':						
                        $stmt->bindValue($identifier, $this->date_retour_projet, PDO::PARAM_STR);
                        break;
                    case '`date_validation_projet`':						
                        $stmt->bindValue($identifier, $this->date_validation_projet, PDO::PARAM_STR);
                        break;
                    case '`date_validation_projet_vu_par`':						
                        $stmt->bindValue($identifier, $this->date_validation_projet_vu_par, PDO::PARAM_INT);
                        break;
                    case '`date_cao`':						
                        $stmt->bindValue($identifier, $this->date_cao, PDO::PARAM_STR);
                        break;
                    case '`avis_cao`':						
                        $stmt->bindValue($identifier, $this->avis_cao, PDO::PARAM_INT);
                        break;
                    case '`date_cp`':						
                        $stmt->bindValue($identifier, $this->date_cp, PDO::PARAM_STR);
                        break;
                    case '`date_signature_avenant`':						
                        $stmt->bindValue($identifier, $this->date_signature_avenant, PDO::PARAM_STR);
                        break;
                    case '`date_reception_dossier`':						
                        $stmt->bindValue($identifier, $this->date_reception_dossier, PDO::PARAM_STR);
                        break;
                    case '`date_formulation_observation_par_sv_sur_sdossier`':						
                        $stmt->bindValue($identifier, $this->date_formulation_observation_par_sv_sur_sdossier, PDO::PARAM_STR);
                        break;
                    case '`date_retour_dossier_finalise`':						
                        $stmt->bindValue($identifier, $this->date_retour_dossier_finalise, PDO::PARAM_STR);
                        break;
                    case '`date_validation_dossier_finalise`':						
                        $stmt->bindValue($identifier, $this->date_validation_dossier_finalise, PDO::PARAM_STR);
                        break;
                    case '`date_transmission_prefecture`':						
                        $stmt->bindValue($identifier, $this->date_transmission_prefecture, PDO::PARAM_STR);
                        break;
                    case '`date_notification`':						
                        $stmt->bindValue($identifier, $this->date_notification, PDO::PARAM_STR);
                        break;
                    case '`operation_validation_vues_par`':						
                        $stmt->bindValue($identifier, $this->operation_validation_vues_par, PDO::PARAM_INT);
                        break;
                    case '`commentaires`':						
                        $stmt->bindValue($identifier, $this->commentaires, PDO::PARAM_STR);
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
        $this->setIdAvenant($pk);

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


            if (($retval = CommonAvenantPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonAvenantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAvenant();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdContrat();
                break;
            case 3:
                return $this->getNumeroAvenant();
                break;
            case 4:
                return $this->getTypeAvenant();
                break;
            case 5:
                return $this->getObjetAvenant();
                break;
            case 6:
                return $this->getMontantAvenantHt();
                break;
            case 7:
                return $this->getMontantAvenantTtc();
                break;
            case 8:
                return $this->getPourcentageAugmentationMarcheInitial();
                break;
            case 9:
                return $this->getPourcentageAugmentationCumule();
                break;
            case 10:
                return $this->getMontantTotalMarcheToutAvenantCumule();
                break;
            case 11:
                return $this->getDateReceptionProjetParSecretaireCao();
                break;
            case 12:
                return $this->getDateReceptionProjetParChargeEtude();
                break;
            case 13:
                return $this->getDateObservationParSv();
                break;
            case 14:
                return $this->getDateRetourProjet();
                break;
            case 15:
                return $this->getDateValidationProjet();
                break;
            case 16:
                return $this->getDateValidationProjetVuPar();
                break;
            case 17:
                return $this->getDateCao();
                break;
            case 18:
                return $this->getAvisCao();
                break;
            case 19:
                return $this->getDateCp();
                break;
            case 20:
                return $this->getDateSignatureAvenant();
                break;
            case 21:
                return $this->getDateReceptionDossier();
                break;
            case 22:
                return $this->getDateFormulationObservationParSvSurSdossier();
                break;
            case 23:
                return $this->getDateRetourDossierFinalise();
                break;
            case 24:
                return $this->getDateValidationDossierFinalise();
                break;
            case 25:
                return $this->getDateTransmissionPrefecture();
                break;
            case 26:
                return $this->getDateNotification();
                break;
            case 27:
                return $this->getOperationValidationVuesPar();
                break;
            case 28:
                return $this->getCommentaires();
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
        if (isset($alreadyDumpedObjects['CommonAvenant'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAvenant'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonAvenantPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdAvenant(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdContrat(),
            $keys[3] => $this->getNumeroAvenant(),
            $keys[4] => $this->getTypeAvenant(),
            $keys[5] => $this->getObjetAvenant(),
            $keys[6] => $this->getMontantAvenantHt(),
            $keys[7] => $this->getMontantAvenantTtc(),
            $keys[8] => $this->getPourcentageAugmentationMarcheInitial(),
            $keys[9] => $this->getPourcentageAugmentationCumule(),
            $keys[10] => $this->getMontantTotalMarcheToutAvenantCumule(),
            $keys[11] => $this->getDateReceptionProjetParSecretaireCao(),
            $keys[12] => $this->getDateReceptionProjetParChargeEtude(),
            $keys[13] => $this->getDateObservationParSv(),
            $keys[14] => $this->getDateRetourProjet(),
            $keys[15] => $this->getDateValidationProjet(),
            $keys[16] => $this->getDateValidationProjetVuPar(),
            $keys[17] => $this->getDateCao(),
            $keys[18] => $this->getAvisCao(),
            $keys[19] => $this->getDateCp(),
            $keys[20] => $this->getDateSignatureAvenant(),
            $keys[21] => $this->getDateReceptionDossier(),
            $keys[22] => $this->getDateFormulationObservationParSvSurSdossier(),
            $keys[23] => $this->getDateRetourDossierFinalise(),
            $keys[24] => $this->getDateValidationDossierFinalise(),
            $keys[25] => $this->getDateTransmissionPrefecture(),
            $keys[26] => $this->getDateNotification(),
            $keys[27] => $this->getOperationValidationVuesPar(),
            $keys[28] => $this->getCommentaires(),
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
        $pos = CommonAvenantPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAvenant($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdContrat($value);
                break;
            case 3:
                $this->setNumeroAvenant($value);
                break;
            case 4:
                $this->setTypeAvenant($value);
                break;
            case 5:
                $this->setObjetAvenant($value);
                break;
            case 6:
                $this->setMontantAvenantHt($value);
                break;
            case 7:
                $this->setMontantAvenantTtc($value);
                break;
            case 8:
                $this->setPourcentageAugmentationMarcheInitial($value);
                break;
            case 9:
                $this->setPourcentageAugmentationCumule($value);
                break;
            case 10:
                $this->setMontantTotalMarcheToutAvenantCumule($value);
                break;
            case 11:
                $this->setDateReceptionProjetParSecretaireCao($value);
                break;
            case 12:
                $this->setDateReceptionProjetParChargeEtude($value);
                break;
            case 13:
                $this->setDateObservationParSv($value);
                break;
            case 14:
                $this->setDateRetourProjet($value);
                break;
            case 15:
                $this->setDateValidationProjet($value);
                break;
            case 16:
                $this->setDateValidationProjetVuPar($value);
                break;
            case 17:
                $this->setDateCao($value);
                break;
            case 18:
                $this->setAvisCao($value);
                break;
            case 19:
                $this->setDateCp($value);
                break;
            case 20:
                $this->setDateSignatureAvenant($value);
                break;
            case 21:
                $this->setDateReceptionDossier($value);
                break;
            case 22:
                $this->setDateFormulationObservationParSvSurSdossier($value);
                break;
            case 23:
                $this->setDateRetourDossierFinalise($value);
                break;
            case 24:
                $this->setDateValidationDossierFinalise($value);
                break;
            case 25:
                $this->setDateTransmissionPrefecture($value);
                break;
            case 26:
                $this->setDateNotification($value);
                break;
            case 27:
                $this->setOperationValidationVuesPar($value);
                break;
            case 28:
                $this->setCommentaires($value);
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
        $keys = CommonAvenantPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdAvenant($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdContrat($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNumeroAvenant($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTypeAvenant($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setObjetAvenant($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMontantAvenantHt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMontantAvenantTtc($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPourcentageAugmentationMarcheInitial($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPourcentageAugmentationCumule($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMontantTotalMarcheToutAvenantCumule($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateReceptionProjetParSecretaireCao($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateReceptionProjetParChargeEtude($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDateObservationParSv($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateRetourProjet($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateValidationProjet($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDateValidationProjetVuPar($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDateCao($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAvisCao($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateCp($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDateSignatureAvenant($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDateReceptionDossier($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDateFormulationObservationParSvSurSdossier($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDateRetourDossierFinalise($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDateValidationDossierFinalise($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDateTransmissionPrefecture($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDateNotification($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setOperationValidationVuesPar($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setCommentaires($arr[$keys[28]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAvenantPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAvenantPeer::ID_AVENANT)) $criteria->add(CommonAvenantPeer::ID_AVENANT, $this->id_avenant);
        if ($this->isColumnModified(CommonAvenantPeer::ORGANISME)) $criteria->add(CommonAvenantPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonAvenantPeer::ID_CONTRAT)) $criteria->add(CommonAvenantPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonAvenantPeer::NUMERO_AVENANT)) $criteria->add(CommonAvenantPeer::NUMERO_AVENANT, $this->numero_avenant);
        if ($this->isColumnModified(CommonAvenantPeer::TYPE_AVENANT)) $criteria->add(CommonAvenantPeer::TYPE_AVENANT, $this->type_avenant);
        if ($this->isColumnModified(CommonAvenantPeer::OBJET_AVENANT)) $criteria->add(CommonAvenantPeer::OBJET_AVENANT, $this->objet_avenant);
        if ($this->isColumnModified(CommonAvenantPeer::MONTANT_AVENANT_HT)) $criteria->add(CommonAvenantPeer::MONTANT_AVENANT_HT, $this->montant_avenant_ht);
        if ($this->isColumnModified(CommonAvenantPeer::MONTANT_AVENANT_TTC)) $criteria->add(CommonAvenantPeer::MONTANT_AVENANT_TTC, $this->montant_avenant_ttc);
        if ($this->isColumnModified(CommonAvenantPeer::POURCENTAGE_AUGMENTATION_MARCHE_INITIAL)) $criteria->add(CommonAvenantPeer::POURCENTAGE_AUGMENTATION_MARCHE_INITIAL, $this->pourcentage_augmentation_marche_initial);
        if ($this->isColumnModified(CommonAvenantPeer::POURCENTAGE_AUGMENTATION_CUMULE)) $criteria->add(CommonAvenantPeer::POURCENTAGE_AUGMENTATION_CUMULE, $this->pourcentage_augmentation_cumule);
        if ($this->isColumnModified(CommonAvenantPeer::MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE)) $criteria->add(CommonAvenantPeer::MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE, $this->montant_total_marche_tout_avenant_cumule);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO)) $criteria->add(CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO, $this->date_reception_projet_par_secretaire_cao);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE)) $criteria->add(CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE, $this->date_reception_projet_par_charge_etude);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_OBSERVATION_PAR_SV)) $criteria->add(CommonAvenantPeer::DATE_OBSERVATION_PAR_SV, $this->date_observation_par_sv);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_RETOUR_PROJET)) $criteria->add(CommonAvenantPeer::DATE_RETOUR_PROJET, $this->date_retour_projet);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_VALIDATION_PROJET)) $criteria->add(CommonAvenantPeer::DATE_VALIDATION_PROJET, $this->date_validation_projet);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_VALIDATION_PROJET_VU_PAR)) $criteria->add(CommonAvenantPeer::DATE_VALIDATION_PROJET_VU_PAR, $this->date_validation_projet_vu_par);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_CAO)) $criteria->add(CommonAvenantPeer::DATE_CAO, $this->date_cao);
        if ($this->isColumnModified(CommonAvenantPeer::AVIS_CAO)) $criteria->add(CommonAvenantPeer::AVIS_CAO, $this->avis_cao);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_CP)) $criteria->add(CommonAvenantPeer::DATE_CP, $this->date_cp);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_SIGNATURE_AVENANT)) $criteria->add(CommonAvenantPeer::DATE_SIGNATURE_AVENANT, $this->date_signature_avenant);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_RECEPTION_DOSSIER)) $criteria->add(CommonAvenantPeer::DATE_RECEPTION_DOSSIER, $this->date_reception_dossier);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER)) $criteria->add(CommonAvenantPeer::DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER, $this->date_formulation_observation_par_sv_sur_sdossier);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_RETOUR_DOSSIER_FINALISE)) $criteria->add(CommonAvenantPeer::DATE_RETOUR_DOSSIER_FINALISE, $this->date_retour_dossier_finalise);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_VALIDATION_DOSSIER_FINALISE)) $criteria->add(CommonAvenantPeer::DATE_VALIDATION_DOSSIER_FINALISE, $this->date_validation_dossier_finalise);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_TRANSMISSION_PREFECTURE)) $criteria->add(CommonAvenantPeer::DATE_TRANSMISSION_PREFECTURE, $this->date_transmission_prefecture);
        if ($this->isColumnModified(CommonAvenantPeer::DATE_NOTIFICATION)) $criteria->add(CommonAvenantPeer::DATE_NOTIFICATION, $this->date_notification);
        if ($this->isColumnModified(CommonAvenantPeer::OPERATION_VALIDATION_VUES_PAR)) $criteria->add(CommonAvenantPeer::OPERATION_VALIDATION_VUES_PAR, $this->operation_validation_vues_par);
        if ($this->isColumnModified(CommonAvenantPeer::COMMENTAIRES)) $criteria->add(CommonAvenantPeer::COMMENTAIRES, $this->commentaires);

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
        $criteria = new Criteria(CommonAvenantPeer::DATABASE_NAME);
        $criteria->add(CommonAvenantPeer::ID_AVENANT, $this->id_avenant);
        $criteria->add(CommonAvenantPeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdAvenant();
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
        $this->setIdAvenant($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdAvenant()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonAvenant (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setNumeroAvenant($this->getNumeroAvenant());
        $copyObj->setTypeAvenant($this->getTypeAvenant());
        $copyObj->setObjetAvenant($this->getObjetAvenant());
        $copyObj->setMontantAvenantHt($this->getMontantAvenantHt());
        $copyObj->setMontantAvenantTtc($this->getMontantAvenantTtc());
        $copyObj->setPourcentageAugmentationMarcheInitial($this->getPourcentageAugmentationMarcheInitial());
        $copyObj->setPourcentageAugmentationCumule($this->getPourcentageAugmentationCumule());
        $copyObj->setMontantTotalMarcheToutAvenantCumule($this->getMontantTotalMarcheToutAvenantCumule());
        $copyObj->setDateReceptionProjetParSecretaireCao($this->getDateReceptionProjetParSecretaireCao());
        $copyObj->setDateReceptionProjetParChargeEtude($this->getDateReceptionProjetParChargeEtude());
        $copyObj->setDateObservationParSv($this->getDateObservationParSv());
        $copyObj->setDateRetourProjet($this->getDateRetourProjet());
        $copyObj->setDateValidationProjet($this->getDateValidationProjet());
        $copyObj->setDateValidationProjetVuPar($this->getDateValidationProjetVuPar());
        $copyObj->setDateCao($this->getDateCao());
        $copyObj->setAvisCao($this->getAvisCao());
        $copyObj->setDateCp($this->getDateCp());
        $copyObj->setDateSignatureAvenant($this->getDateSignatureAvenant());
        $copyObj->setDateReceptionDossier($this->getDateReceptionDossier());
        $copyObj->setDateFormulationObservationParSvSurSdossier($this->getDateFormulationObservationParSvSurSdossier());
        $copyObj->setDateRetourDossierFinalise($this->getDateRetourDossierFinalise());
        $copyObj->setDateValidationDossierFinalise($this->getDateValidationDossierFinalise());
        $copyObj->setDateTransmissionPrefecture($this->getDateTransmissionPrefecture());
        $copyObj->setDateNotification($this->getDateNotification());
        $copyObj->setOperationValidationVuesPar($this->getOperationValidationVuesPar());
        $copyObj->setCommentaires($this->getCommentaires());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdAvenant(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonAvenant Clone of current object.
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
     * @return CommonAvenantPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAvenantPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_avenant = null;
        $this->organisme = null;
        $this->id_contrat = null;
        $this->numero_avenant = null;
        $this->type_avenant = null;
        $this->objet_avenant = null;
        $this->montant_avenant_ht = null;
        $this->montant_avenant_ttc = null;
        $this->pourcentage_augmentation_marche_initial = null;
        $this->pourcentage_augmentation_cumule = null;
        $this->montant_total_marche_tout_avenant_cumule = null;
        $this->date_reception_projet_par_secretaire_cao = null;
        $this->date_reception_projet_par_charge_etude = null;
        $this->date_observation_par_sv = null;
        $this->date_retour_projet = null;
        $this->date_validation_projet = null;
        $this->date_validation_projet_vu_par = null;
        $this->date_cao = null;
        $this->avis_cao = null;
        $this->date_cp = null;
        $this->date_signature_avenant = null;
        $this->date_reception_dossier = null;
        $this->date_formulation_observation_par_sv_sur_sdossier = null;
        $this->date_retour_dossier_finalise = null;
        $this->date_validation_dossier_finalise = null;
        $this->date_transmission_prefecture = null;
        $this->date_notification = null;
        $this->operation_validation_vues_par = null;
        $this->commentaires = null;
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
        return (string) $this->exportTo(CommonAvenantPeer::DEFAULT_STRING_FORMAT);
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
