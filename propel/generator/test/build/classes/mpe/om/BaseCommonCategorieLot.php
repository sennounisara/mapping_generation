<?php


/**
 * Base class that represents a row from the 'CategorieLot' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCategorieLot extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonCategorieLotPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonCategorieLotPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the lot field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lot;

    /**
     * The value for the description field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $description;

    /**
     * The value for the id_tr_description field.
     * @var        int
     */
    protected $id_tr_description;

    /**
     * The value for the categorie field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $categorie;

    /**
     * The value for the description_detail field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $description_detail;

    /**
     * The value for the id_tr_description_detail field.
     * @var        int
     */
    protected $id_tr_description_detail;

    /**
     * The value for the code_cpv_1 field.
     * @var        string
     */
    protected $code_cpv_1;

    /**
     * The value for the code_cpv_2 field.
     * @var        string
     */
    protected $code_cpv_2;

    /**
     * The value for the description_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $description_fr;

    /**
     * The value for the description_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $description_en;

    /**
     * The value for the description_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $description_es;

    /**
     * The value for the description_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $description_su;

    /**
     * The value for the description_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $description_du;

    /**
     * The value for the description_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $description_cz;

    /**
     * The value for the description_ar field.
     * @var        string
     */
    protected $description_ar;

    /**
     * The value for the description_detail_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $description_detail_fr;

    /**
     * The value for the description_detail_en field.
     * @var        string
     */
    protected $description_detail_en;

    /**
     * The value for the description_detail_es field.
     * @var        string
     */
    protected $description_detail_es;

    /**
     * The value for the description_detail_su field.
     * @var        string
     */
    protected $description_detail_su;

    /**
     * The value for the description_detail_du field.
     * @var        string
     */
    protected $description_detail_du;

    /**
     * The value for the description_detail_cz field.
     * @var        string
     */
    protected $description_detail_cz;

    /**
     * The value for the description_detail_ar field.
     * @var        string
     */
    protected $description_detail_ar;

    /**
     * The value for the id_lot_externe field.
     * @var        int
     */
    protected $id_lot_externe;

    /**
     * The value for the caution_provisoire field.
     * @var        string
     */
    protected $caution_provisoire;

    /**
     * The value for the qualification field.
     * @var        string
     */
    protected $qualification;

    /**
     * The value for the agrements field.
     * @var        string
     */
    protected $agrements;

    /**
     * The value for the add_echantillion field.
     * @var        string
     */
    protected $add_echantillion;

    /**
     * The value for the date_limite_echantillion field.
     * @var        string
     */
    protected $date_limite_echantillion;

    /**
     * The value for the add_reunion field.
     * @var        string
     */
    protected $add_reunion;

    /**
     * The value for the date_reunion field.
     * @var        string
     */
    protected $date_reunion;

    /**
     * The value for the variantes field.
     * @var        string
     */
    protected $variantes;

    /**
     * The value for the echantillon field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $echantillon;

    /**
     * The value for the reunion field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $reunion;

    /**
     * The value for the visites_lieux field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visites_lieux;

    /**
     * The value for the add_echantillion_fr field.
     * @var        string
     */
    protected $add_echantillion_fr;

    /**
     * The value for the add_echantillion_en field.
     * @var        string
     */
    protected $add_echantillion_en;

    /**
     * The value for the add_echantillion_es field.
     * @var        string
     */
    protected $add_echantillion_es;

    /**
     * The value for the add_echantillion_su field.
     * @var        string
     */
    protected $add_echantillion_su;

    /**
     * The value for the add_echantillion_du field.
     * @var        string
     */
    protected $add_echantillion_du;

    /**
     * The value for the add_echantillion_cz field.
     * @var        string
     */
    protected $add_echantillion_cz;

    /**
     * The value for the add_echantillion_ar field.
     * @var        string
     */
    protected $add_echantillion_ar;

    /**
     * The value for the add_reunion_fr field.
     * @var        string
     */
    protected $add_reunion_fr;

    /**
     * The value for the add_reunion_en field.
     * @var        string
     */
    protected $add_reunion_en;

    /**
     * The value for the add_reunion_es field.
     * @var        string
     */
    protected $add_reunion_es;

    /**
     * The value for the add_reunion_su field.
     * @var        string
     */
    protected $add_reunion_su;

    /**
     * The value for the add_reunion_du field.
     * @var        string
     */
    protected $add_reunion_du;

    /**
     * The value for the add_reunion_cz field.
     * @var        string
     */
    protected $add_reunion_cz;

    /**
     * The value for the add_reunion_ar field.
     * @var        string
     */
    protected $add_reunion_ar;

    /**
     * The value for the description_detail_it field.
     * @var        string
     */
    protected $description_detail_it;

    /**
     * The value for the description_it field.
     * @var        string
     */
    protected $description_it;

    /**
     * The value for the add_echantillion_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $add_echantillion_it;

    /**
     * The value for the add_reunion_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $add_reunion_it;

    /**
     * The value for the clause_sociale field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $clause_sociale;

    /**
     * The value for the clause_environnementale field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $clause_environnementale;

    /**
     * The value for the decision field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $decision;

    /**
     * The value for the clause_sociale_condition_execution field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $clause_sociale_condition_execution;

    /**
     * The value for the clause_sociale_insertion field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $clause_sociale_insertion;

    /**
     * The value for the clause_sociale_ateliers_proteges field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $clause_sociale_ateliers_proteges;

    /**
     * The value for the clause_env_specs_techniques field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $clause_env_specs_techniques;

    /**
     * The value for the clause_env_cond_execution field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $clause_env_cond_execution;

    /**
     * The value for the clause_env_criteres_select field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $clause_env_criteres_select;

    /**
     * The value for the id_donnee_complementaire field.
     * @var        int
     */
    protected $id_donnee_complementaire;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultation;

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
        $this->lot = 0;
        $this->description = '';
        $this->categorie = '';
        $this->description_detail = '';
        $this->description_fr = '';
        $this->description_en = '';
        $this->description_es = '';
        $this->description_su = '';
        $this->description_du = '';
        $this->description_cz = '';
        $this->description_detail_fr = '';
        $this->echantillon = '0';
        $this->reunion = '0';
        $this->visites_lieux = '0';
        $this->add_echantillion_it = '';
        $this->add_reunion_it = '';
        $this->clause_sociale = '0';
        $this->clause_environnementale = '0';
        $this->decision = '0';
        $this->clause_sociale_condition_execution = '0';
        $this->clause_sociale_insertion = '0';
        $this->clause_sociale_ateliers_proteges = '0';
        $this->clause_env_specs_techniques = '0';
        $this->clause_env_cond_execution = '0';
        $this->clause_env_criteres_select = '0';
    }

    /**
     * Initializes internal state of BaseCommonCategorieLot object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [lot] column value.
     * 
     * @return int
     */
    public function getLot()
    {

        return $this->lot;
    }

    /**
     * Get the [description] column value.
     * 
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [id_tr_description] column value.
     * 
     * @return int
     */
    public function getIdTrDescription()
    {

        return $this->id_tr_description;
    }

    /**
     * Get the [categorie] column value.
     * 
     * @return string
     */
    public function getCategorie()
    {

        return $this->categorie;
    }

    /**
     * Get the [description_detail] column value.
     * 
     * @return string
     */
    public function getDescriptionDetail()
    {

        return $this->description_detail;
    }

    /**
     * Get the [id_tr_description_detail] column value.
     * 
     * @return int
     */
    public function getIdTrDescriptionDetail()
    {

        return $this->id_tr_description_detail;
    }

    /**
     * Get the [code_cpv_1] column value.
     * 
     * @return string
     */
    public function getCodeCpv1()
    {

        return $this->code_cpv_1;
    }

    /**
     * Get the [code_cpv_2] column value.
     * 
     * @return string
     */
    public function getCodeCpv2()
    {

        return $this->code_cpv_2;
    }

    /**
     * Get the [description_fr] column value.
     * 
     * @return string
     */
    public function getDescriptionFr()
    {

        return $this->description_fr;
    }

    /**
     * Get the [description_en] column value.
     * 
     * @return string
     */
    public function getDescriptionEn()
    {

        return $this->description_en;
    }

    /**
     * Get the [description_es] column value.
     * 
     * @return string
     */
    public function getDescriptionEs()
    {

        return $this->description_es;
    }

    /**
     * Get the [description_su] column value.
     * 
     * @return string
     */
    public function getDescriptionSu()
    {

        return $this->description_su;
    }

    /**
     * Get the [description_du] column value.
     * 
     * @return string
     */
    public function getDescriptionDu()
    {

        return $this->description_du;
    }

    /**
     * Get the [description_cz] column value.
     * 
     * @return string
     */
    public function getDescriptionCz()
    {

        return $this->description_cz;
    }

    /**
     * Get the [description_ar] column value.
     * 
     * @return string
     */
    public function getDescriptionAr()
    {

        return $this->description_ar;
    }

    /**
     * Get the [description_detail_fr] column value.
     * 
     * @return string
     */
    public function getDescriptionDetailFr()
    {

        return $this->description_detail_fr;
    }

    /**
     * Get the [description_detail_en] column value.
     * 
     * @return string
     */
    public function getDescriptionDetailEn()
    {

        return $this->description_detail_en;
    }

    /**
     * Get the [description_detail_es] column value.
     * 
     * @return string
     */
    public function getDescriptionDetailEs()
    {

        return $this->description_detail_es;
    }

    /**
     * Get the [description_detail_su] column value.
     * 
     * @return string
     */
    public function getDescriptionDetailSu()
    {

        return $this->description_detail_su;
    }

    /**
     * Get the [description_detail_du] column value.
     * 
     * @return string
     */
    public function getDescriptionDetailDu()
    {

        return $this->description_detail_du;
    }

    /**
     * Get the [description_detail_cz] column value.
     * 
     * @return string
     */
    public function getDescriptionDetailCz()
    {

        return $this->description_detail_cz;
    }

    /**
     * Get the [description_detail_ar] column value.
     * 
     * @return string
     */
    public function getDescriptionDetailAr()
    {

        return $this->description_detail_ar;
    }

    /**
     * Get the [id_lot_externe] column value.
     * 
     * @return int
     */
    public function getIdLotExterne()
    {

        return $this->id_lot_externe;
    }

    /**
     * Get the [caution_provisoire] column value.
     * 
     * @return string
     */
    public function getCautionProvisoire()
    {

        return $this->caution_provisoire;
    }

    /**
     * Get the [qualification] column value.
     * 
     * @return string
     */
    public function getQualification()
    {

        return $this->qualification;
    }

    /**
     * Get the [agrements] column value.
     * 
     * @return string
     */
    public function getAgrements()
    {

        return $this->agrements;
    }

    /**
     * Get the [add_echantillion] column value.
     * 
     * @return string
     */
    public function getAddEchantillion()
    {

        return $this->add_echantillion;
    }

    /**
     * Get the [date_limite_echantillion] column value.
     * 
     * @return string
     */
    public function getDateLimiteEchantillion()
    {

        return $this->date_limite_echantillion;
    }

    /**
     * Get the [add_reunion] column value.
     * 
     * @return string
     */
    public function getAddReunion()
    {

        return $this->add_reunion;
    }

    /**
     * Get the [date_reunion] column value.
     * 
     * @return string
     */
    public function getDateReunion()
    {

        return $this->date_reunion;
    }

    /**
     * Get the [variantes] column value.
     * 
     * @return string
     */
    public function getVariantes()
    {

        return $this->variantes;
    }

    /**
     * Get the [echantillon] column value.
     * 
     * @return string
     */
    public function getEchantillon()
    {

        return $this->echantillon;
    }

    /**
     * Get the [reunion] column value.
     * 
     * @return string
     */
    public function getReunion()
    {

        return $this->reunion;
    }

    /**
     * Get the [visites_lieux] column value.
     * 
     * @return string
     */
    public function getVisitesLieux()
    {

        return $this->visites_lieux;
    }

    /**
     * Get the [add_echantillion_fr] column value.
     * 
     * @return string
     */
    public function getAddEchantillionFr()
    {

        return $this->add_echantillion_fr;
    }

    /**
     * Get the [add_echantillion_en] column value.
     * 
     * @return string
     */
    public function getAddEchantillionEn()
    {

        return $this->add_echantillion_en;
    }

    /**
     * Get the [add_echantillion_es] column value.
     * 
     * @return string
     */
    public function getAddEchantillionEs()
    {

        return $this->add_echantillion_es;
    }

    /**
     * Get the [add_echantillion_su] column value.
     * 
     * @return string
     */
    public function getAddEchantillionSu()
    {

        return $this->add_echantillion_su;
    }

    /**
     * Get the [add_echantillion_du] column value.
     * 
     * @return string
     */
    public function getAddEchantillionDu()
    {

        return $this->add_echantillion_du;
    }

    /**
     * Get the [add_echantillion_cz] column value.
     * 
     * @return string
     */
    public function getAddEchantillionCz()
    {

        return $this->add_echantillion_cz;
    }

    /**
     * Get the [add_echantillion_ar] column value.
     * 
     * @return string
     */
    public function getAddEchantillionAr()
    {

        return $this->add_echantillion_ar;
    }

    /**
     * Get the [add_reunion_fr] column value.
     * 
     * @return string
     */
    public function getAddReunionFr()
    {

        return $this->add_reunion_fr;
    }

    /**
     * Get the [add_reunion_en] column value.
     * 
     * @return string
     */
    public function getAddReunionEn()
    {

        return $this->add_reunion_en;
    }

    /**
     * Get the [add_reunion_es] column value.
     * 
     * @return string
     */
    public function getAddReunionEs()
    {

        return $this->add_reunion_es;
    }

    /**
     * Get the [add_reunion_su] column value.
     * 
     * @return string
     */
    public function getAddReunionSu()
    {

        return $this->add_reunion_su;
    }

    /**
     * Get the [add_reunion_du] column value.
     * 
     * @return string
     */
    public function getAddReunionDu()
    {

        return $this->add_reunion_du;
    }

    /**
     * Get the [add_reunion_cz] column value.
     * 
     * @return string
     */
    public function getAddReunionCz()
    {

        return $this->add_reunion_cz;
    }

    /**
     * Get the [add_reunion_ar] column value.
     * 
     * @return string
     */
    public function getAddReunionAr()
    {

        return $this->add_reunion_ar;
    }

    /**
     * Get the [description_detail_it] column value.
     * 
     * @return string
     */
    public function getDescriptionDetailIt()
    {

        return $this->description_detail_it;
    }

    /**
     * Get the [description_it] column value.
     * 
     * @return string
     */
    public function getDescriptionIt()
    {

        return $this->description_it;
    }

    /**
     * Get the [add_echantillion_it] column value.
     * 
     * @return string
     */
    public function getAddEchantillionIt()
    {

        return $this->add_echantillion_it;
    }

    /**
     * Get the [add_reunion_it] column value.
     * 
     * @return string
     */
    public function getAddReunionIt()
    {

        return $this->add_reunion_it;
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
     * Get the [decision] column value.
     * 
     * @return string
     */
    public function getDecision()
    {

        return $this->decision;
    }

    /**
     * Get the [clause_sociale_condition_execution] column value.
     * 
     * @return string
     */
    public function getClauseSocialeConditionExecution()
    {

        return $this->clause_sociale_condition_execution;
    }

    /**
     * Get the [clause_sociale_insertion] column value.
     * 
     * @return string
     */
    public function getClauseSocialeInsertion()
    {

        return $this->clause_sociale_insertion;
    }

    /**
     * Get the [clause_sociale_ateliers_proteges] column value.
     * 
     * @return string
     */
    public function getClauseSocialeAteliersProteges()
    {

        return $this->clause_sociale_ateliers_proteges;
    }

    /**
     * Get the [clause_env_specs_techniques] column value.
     * 
     * @return string
     */
    public function getClauseEnvSpecsTechniques()
    {

        return $this->clause_env_specs_techniques;
    }

    /**
     * Get the [clause_env_cond_execution] column value.
     * 
     * @return string
     */
    public function getClauseEnvCondExecution()
    {

        return $this->clause_env_cond_execution;
    }

    /**
     * Get the [clause_env_criteres_select] column value.
     * 
     * @return string
     */
    public function getClauseEnvCriteresSelect()
    {

        return $this->clause_env_criteres_select;
    }

    /**
     * Get the [id_donnee_complementaire] column value.
     * 
     * @return int
     */
    public function getIdDonneeComplementaire()
    {

        return $this->id_donnee_complementaire;
    }

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ORGANISME;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [description] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [id_tr_description] column.
     * 
     * @param int $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setIdTrDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_description !== $v) {
            $this->id_tr_description = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ID_TR_DESCRIPTION;
        }


        return $this;
    } // setIdTrDescription()

    /**
     * Set the value of [categorie] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setCategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->categorie !== $v) {
            $this->categorie = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CATEGORIE;
        }


        return $this;
    } // setCategorie()

    /**
     * Set the value of [description_detail] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionDetail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_detail !== $v) {
            $this->description_detail = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_DETAIL;
        }


        return $this;
    } // setDescriptionDetail()

    /**
     * Set the value of [id_tr_description_detail] column.
     * 
     * @param int $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setIdTrDescriptionDetail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_description_detail !== $v) {
            $this->id_tr_description_detail = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ID_TR_DESCRIPTION_DETAIL;
        }


        return $this;
    } // setIdTrDescriptionDetail()

    /**
     * Set the value of [code_cpv_1] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setCodeCpv1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv_1 !== $v) {
            $this->code_cpv_1 = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CODE_CPV_1;
        }


        return $this;
    } // setCodeCpv1()

    /**
     * Set the value of [code_cpv_2] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setCodeCpv2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv_2 !== $v) {
            $this->code_cpv_2 = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CODE_CPV_2;
        }


        return $this;
    } // setCodeCpv2()

    /**
     * Set the value of [description_fr] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_fr !== $v) {
            $this->description_fr = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_FR;
        }


        return $this;
    } // setDescriptionFr()

    /**
     * Set the value of [description_en] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_en !== $v) {
            $this->description_en = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_EN;
        }


        return $this;
    } // setDescriptionEn()

    /**
     * Set the value of [description_es] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_es !== $v) {
            $this->description_es = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_ES;
        }


        return $this;
    } // setDescriptionEs()

    /**
     * Set the value of [description_su] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_su !== $v) {
            $this->description_su = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_SU;
        }


        return $this;
    } // setDescriptionSu()

    /**
     * Set the value of [description_du] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_du !== $v) {
            $this->description_du = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_DU;
        }


        return $this;
    } // setDescriptionDu()

    /**
     * Set the value of [description_cz] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_cz !== $v) {
            $this->description_cz = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_CZ;
        }


        return $this;
    } // setDescriptionCz()

    /**
     * Set the value of [description_ar] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_ar !== $v) {
            $this->description_ar = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_AR;
        }


        return $this;
    } // setDescriptionAr()

    /**
     * Set the value of [description_detail_fr] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionDetailFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_detail_fr !== $v) {
            $this->description_detail_fr = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_DETAIL_FR;
        }


        return $this;
    } // setDescriptionDetailFr()

    /**
     * Set the value of [description_detail_en] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionDetailEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_detail_en !== $v) {
            $this->description_detail_en = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_DETAIL_EN;
        }


        return $this;
    } // setDescriptionDetailEn()

    /**
     * Set the value of [description_detail_es] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionDetailEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_detail_es !== $v) {
            $this->description_detail_es = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_DETAIL_ES;
        }


        return $this;
    } // setDescriptionDetailEs()

    /**
     * Set the value of [description_detail_su] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionDetailSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_detail_su !== $v) {
            $this->description_detail_su = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_DETAIL_SU;
        }


        return $this;
    } // setDescriptionDetailSu()

    /**
     * Set the value of [description_detail_du] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionDetailDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_detail_du !== $v) {
            $this->description_detail_du = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_DETAIL_DU;
        }


        return $this;
    } // setDescriptionDetailDu()

    /**
     * Set the value of [description_detail_cz] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionDetailCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_detail_cz !== $v) {
            $this->description_detail_cz = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_DETAIL_CZ;
        }


        return $this;
    } // setDescriptionDetailCz()

    /**
     * Set the value of [description_detail_ar] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionDetailAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_detail_ar !== $v) {
            $this->description_detail_ar = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_DETAIL_AR;
        }


        return $this;
    } // setDescriptionDetailAr()

    /**
     * Set the value of [id_lot_externe] column.
     * 
     * @param int $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setIdLotExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_lot_externe !== $v) {
            $this->id_lot_externe = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ID_LOT_EXTERNE;
        }


        return $this;
    } // setIdLotExterne()

    /**
     * Set the value of [caution_provisoire] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setCautionProvisoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->caution_provisoire !== $v) {
            $this->caution_provisoire = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CAUTION_PROVISOIRE;
        }


        return $this;
    } // setCautionProvisoire()

    /**
     * Set the value of [qualification] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setQualification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qualification !== $v) {
            $this->qualification = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::QUALIFICATION;
        }


        return $this;
    } // setQualification()

    /**
     * Set the value of [agrements] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAgrements($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agrements !== $v) {
            $this->agrements = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::AGREMENTS;
        }


        return $this;
    } // setAgrements()

    /**
     * Set the value of [add_echantillion] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddEchantillion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_echantillion !== $v) {
            $this->add_echantillion = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_ECHANTILLION;
        }


        return $this;
    } // setAddEchantillion()

    /**
     * Set the value of [date_limite_echantillion] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDateLimiteEchantillion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_limite_echantillion !== $v) {
            $this->date_limite_echantillion = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DATE_LIMITE_ECHANTILLION;
        }


        return $this;
    } // setDateLimiteEchantillion()

    /**
     * Set the value of [add_reunion] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddReunion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_reunion !== $v) {
            $this->add_reunion = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_REUNION;
        }


        return $this;
    } // setAddReunion()

    /**
     * Set the value of [date_reunion] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDateReunion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reunion !== $v) {
            $this->date_reunion = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DATE_REUNION;
        }


        return $this;
    } // setDateReunion()

    /**
     * Set the value of [variantes] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setVariantes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->variantes !== $v) {
            $this->variantes = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::VARIANTES;
        }


        return $this;
    } // setVariantes()

    /**
     * Set the value of [echantillon] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setEchantillon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->echantillon !== $v) {
            $this->echantillon = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ECHANTILLON;
        }


        return $this;
    } // setEchantillon()

    /**
     * Set the value of [reunion] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setReunion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reunion !== $v) {
            $this->reunion = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::REUNION;
        }


        return $this;
    } // setReunion()

    /**
     * Set the value of [visites_lieux] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setVisitesLieux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visites_lieux !== $v) {
            $this->visites_lieux = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::VISITES_LIEUX;
        }


        return $this;
    } // setVisitesLieux()

    /**
     * Set the value of [add_echantillion_fr] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddEchantillionFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_echantillion_fr !== $v) {
            $this->add_echantillion_fr = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_ECHANTILLION_FR;
        }


        return $this;
    } // setAddEchantillionFr()

    /**
     * Set the value of [add_echantillion_en] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddEchantillionEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_echantillion_en !== $v) {
            $this->add_echantillion_en = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_ECHANTILLION_EN;
        }


        return $this;
    } // setAddEchantillionEn()

    /**
     * Set the value of [add_echantillion_es] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddEchantillionEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_echantillion_es !== $v) {
            $this->add_echantillion_es = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_ECHANTILLION_ES;
        }


        return $this;
    } // setAddEchantillionEs()

    /**
     * Set the value of [add_echantillion_su] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddEchantillionSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_echantillion_su !== $v) {
            $this->add_echantillion_su = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_ECHANTILLION_SU;
        }


        return $this;
    } // setAddEchantillionSu()

    /**
     * Set the value of [add_echantillion_du] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddEchantillionDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_echantillion_du !== $v) {
            $this->add_echantillion_du = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_ECHANTILLION_DU;
        }


        return $this;
    } // setAddEchantillionDu()

    /**
     * Set the value of [add_echantillion_cz] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddEchantillionCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_echantillion_cz !== $v) {
            $this->add_echantillion_cz = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_ECHANTILLION_CZ;
        }


        return $this;
    } // setAddEchantillionCz()

    /**
     * Set the value of [add_echantillion_ar] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddEchantillionAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_echantillion_ar !== $v) {
            $this->add_echantillion_ar = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_ECHANTILLION_AR;
        }


        return $this;
    } // setAddEchantillionAr()

    /**
     * Set the value of [add_reunion_fr] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddReunionFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_reunion_fr !== $v) {
            $this->add_reunion_fr = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_REUNION_FR;
        }


        return $this;
    } // setAddReunionFr()

    /**
     * Set the value of [add_reunion_en] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddReunionEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_reunion_en !== $v) {
            $this->add_reunion_en = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_REUNION_EN;
        }


        return $this;
    } // setAddReunionEn()

    /**
     * Set the value of [add_reunion_es] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddReunionEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_reunion_es !== $v) {
            $this->add_reunion_es = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_REUNION_ES;
        }


        return $this;
    } // setAddReunionEs()

    /**
     * Set the value of [add_reunion_su] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddReunionSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_reunion_su !== $v) {
            $this->add_reunion_su = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_REUNION_SU;
        }


        return $this;
    } // setAddReunionSu()

    /**
     * Set the value of [add_reunion_du] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddReunionDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_reunion_du !== $v) {
            $this->add_reunion_du = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_REUNION_DU;
        }


        return $this;
    } // setAddReunionDu()

    /**
     * Set the value of [add_reunion_cz] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddReunionCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_reunion_cz !== $v) {
            $this->add_reunion_cz = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_REUNION_CZ;
        }


        return $this;
    } // setAddReunionCz()

    /**
     * Set the value of [add_reunion_ar] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddReunionAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_reunion_ar !== $v) {
            $this->add_reunion_ar = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_REUNION_AR;
        }


        return $this;
    } // setAddReunionAr()

    /**
     * Set the value of [description_detail_it] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionDetailIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_detail_it !== $v) {
            $this->description_detail_it = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_DETAIL_IT;
        }


        return $this;
    } // setDescriptionDetailIt()

    /**
     * Set the value of [description_it] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDescriptionIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_it !== $v) {
            $this->description_it = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DESCRIPTION_IT;
        }


        return $this;
    } // setDescriptionIt()

    /**
     * Set the value of [add_echantillion_it] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddEchantillionIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_echantillion_it !== $v) {
            $this->add_echantillion_it = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_ECHANTILLION_IT;
        }


        return $this;
    } // setAddEchantillionIt()

    /**
     * Set the value of [add_reunion_it] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setAddReunionIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_reunion_it !== $v) {
            $this->add_reunion_it = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ADD_REUNION_IT;
        }


        return $this;
    } // setAddReunionIt()

    /**
     * Set the value of [clause_sociale] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setClauseSociale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clause_sociale !== $v) {
            $this->clause_sociale = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CLAUSE_SOCIALE;
        }


        return $this;
    } // setClauseSociale()

    /**
     * Set the value of [clause_environnementale] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setClauseEnvironnementale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clause_environnementale !== $v) {
            $this->clause_environnementale = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE;
        }


        return $this;
    } // setClauseEnvironnementale()

    /**
     * Set the value of [decision] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setDecision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision !== $v) {
            $this->decision = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::DECISION;
        }


        return $this;
    } // setDecision()

    /**
     * Set the value of [clause_sociale_condition_execution] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setClauseSocialeConditionExecution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clause_sociale_condition_execution !== $v) {
            $this->clause_sociale_condition_execution = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION;
        }


        return $this;
    } // setClauseSocialeConditionExecution()

    /**
     * Set the value of [clause_sociale_insertion] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setClauseSocialeInsertion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clause_sociale_insertion !== $v) {
            $this->clause_sociale_insertion = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CLAUSE_SOCIALE_INSERTION;
        }


        return $this;
    } // setClauseSocialeInsertion()

    /**
     * Set the value of [clause_sociale_ateliers_proteges] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setClauseSocialeAteliersProteges($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clause_sociale_ateliers_proteges !== $v) {
            $this->clause_sociale_ateliers_proteges = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES;
        }


        return $this;
    } // setClauseSocialeAteliersProteges()

    /**
     * Set the value of [clause_env_specs_techniques] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setClauseEnvSpecsTechniques($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clause_env_specs_techniques !== $v) {
            $this->clause_env_specs_techniques = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CLAUSE_ENV_SPECS_TECHNIQUES;
        }


        return $this;
    } // setClauseEnvSpecsTechniques()

    /**
     * Set the value of [clause_env_cond_execution] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setClauseEnvCondExecution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clause_env_cond_execution !== $v) {
            $this->clause_env_cond_execution = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CLAUSE_ENV_COND_EXECUTION;
        }


        return $this;
    } // setClauseEnvCondExecution()

    /**
     * Set the value of [clause_env_criteres_select] column.
     * 
     * @param string $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setClauseEnvCriteresSelect($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->clause_env_criteres_select !== $v) {
            $this->clause_env_criteres_select = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::CLAUSE_ENV_CRITERES_SELECT;
        }


        return $this;
    } // setClauseEnvCriteresSelect()

    /**
     * Set the value of [id_donnee_complementaire] column.
     * 
     * @param int $v new value
     * @return CommonCategorieLot The current object (for fluent API support)
     */
    public function setIdDonneeComplementaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_donnee_complementaire !== $v) {
            $this->id_donnee_complementaire = $v;
            $this->modifiedColumns[] = CommonCategorieLotPeer::ID_DONNEE_COMPLEMENTAIRE;
        }


        return $this;
    } // setIdDonneeComplementaire()

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

            if ($this->lot !== 0) {
                return false;
            }

            if ($this->description !== '') {
                return false;
            }

            if ($this->categorie !== '') {
                return false;
            }

            if ($this->description_detail !== '') {
                return false;
            }

            if ($this->description_fr !== '') {
                return false;
            }

            if ($this->description_en !== '') {
                return false;
            }

            if ($this->description_es !== '') {
                return false;
            }

            if ($this->description_su !== '') {
                return false;
            }

            if ($this->description_du !== '') {
                return false;
            }

            if ($this->description_cz !== '') {
                return false;
            }

            if ($this->description_detail_fr !== '') {
                return false;
            }

            if ($this->echantillon !== '0') {
                return false;
            }

            if ($this->reunion !== '0') {
                return false;
            }

            if ($this->visites_lieux !== '0') {
                return false;
            }

            if ($this->add_echantillion_it !== '') {
                return false;
            }

            if ($this->add_reunion_it !== '') {
                return false;
            }

            if ($this->clause_sociale !== '0') {
                return false;
            }

            if ($this->clause_environnementale !== '0') {
                return false;
            }

            if ($this->decision !== '0') {
                return false;
            }

            if ($this->clause_sociale_condition_execution !== '0') {
                return false;
            }

            if ($this->clause_sociale_insertion !== '0') {
                return false;
            }

            if ($this->clause_sociale_ateliers_proteges !== '0') {
                return false;
            }

            if ($this->clause_env_specs_techniques !== '0') {
                return false;
            }

            if ($this->clause_env_cond_execution !== '0') {
                return false;
            }

            if ($this->clause_env_criteres_select !== '0') {
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

            $this->organisme = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->consultation_ref = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->lot = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->id_tr_description = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->categorie = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->description_detail = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_tr_description_detail = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->code_cpv_1 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->code_cpv_2 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->description_fr = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->description_en = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->description_es = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->description_su = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->description_du = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->description_cz = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->description_ar = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->description_detail_fr = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->description_detail_en = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->description_detail_es = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->description_detail_su = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->description_detail_du = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->description_detail_cz = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->description_detail_ar = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->id_lot_externe = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->caution_provisoire = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->qualification = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->agrements = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->add_echantillion = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->date_limite_echantillion = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->add_reunion = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->date_reunion = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->variantes = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->echantillon = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->reunion = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->visites_lieux = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->add_echantillion_fr = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->add_echantillion_en = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->add_echantillion_es = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->add_echantillion_su = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->add_echantillion_du = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->add_echantillion_cz = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->add_echantillion_ar = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->add_reunion_fr = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->add_reunion_en = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->add_reunion_es = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->add_reunion_su = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->add_reunion_du = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->add_reunion_cz = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->add_reunion_ar = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->description_detail_it = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->description_it = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->add_echantillion_it = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->add_reunion_it = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->clause_sociale = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->clause_environnementale = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->decision = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->clause_sociale_condition_execution = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->clause_sociale_insertion = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->clause_sociale_ateliers_proteges = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->clause_env_specs_techniques = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->clause_env_cond_execution = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->clause_env_criteres_select = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->id_donnee_complementaire = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 64; // 64 = CommonCategorieLotPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonCategorieLot object", $e);
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

        if ($this->aCommonConsultation !== null && $this->organisme !== $this->aCommonConsultation->getOrganisme()) {
            $this->aCommonConsultation = null;
        }
        if ($this->aCommonConsultation !== null && $this->consultation_ref !== $this->aCommonConsultation->getReference()) {
            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonCategorieLotPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonCategorieLotQuery::create()
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
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonCategorieLotPeer::addInstanceToPool($this);
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

            if ($this->aCommonConsultation !== null) {
                if ($this->aCommonConsultation->isModified() || $this->aCommonConsultation->isNew()) {
                    $affectedRows += $this->aCommonConsultation->save($con);
                }
                $this->setCommonConsultation($this->aCommonConsultation);
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


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonCategorieLotPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ID_TR_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_description`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`categorie`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL)) {
            $modifiedColumns[':p' . $index++]  = '`description_detail`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ID_TR_DESCRIPTION_DETAIL)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_description_detail`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CODE_CPV_1)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv_1`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CODE_CPV_2)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv_2`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`description_fr`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_EN)) {
            $modifiedColumns[':p' . $index++]  = '`description_en`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_ES)) {
            $modifiedColumns[':p' . $index++]  = '`description_es`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_SU)) {
            $modifiedColumns[':p' . $index++]  = '`description_su`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DU)) {
            $modifiedColumns[':p' . $index++]  = '`description_du`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`description_cz`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_AR)) {
            $modifiedColumns[':p' . $index++]  = '`description_ar`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_FR)) {
            $modifiedColumns[':p' . $index++]  = '`description_detail_fr`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_EN)) {
            $modifiedColumns[':p' . $index++]  = '`description_detail_en`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_ES)) {
            $modifiedColumns[':p' . $index++]  = '`description_detail_es`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_SU)) {
            $modifiedColumns[':p' . $index++]  = '`description_detail_su`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_DU)) {
            $modifiedColumns[':p' . $index++]  = '`description_detail_du`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`description_detail_cz`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_AR)) {
            $modifiedColumns[':p' . $index++]  = '`description_detail_ar`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ID_LOT_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`id_lot_externe`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CAUTION_PROVISOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`caution_provisoire`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::QUALIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`qualification`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::AGREMENTS)) {
            $modifiedColumns[':p' . $index++]  = '`agrements`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION)) {
            $modifiedColumns[':p' . $index++]  = '`add_echantillion`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DATE_LIMITE_ECHANTILLION)) {
            $modifiedColumns[':p' . $index++]  = '`date_limite_echantillion`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION)) {
            $modifiedColumns[':p' . $index++]  = '`add_reunion`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DATE_REUNION)) {
            $modifiedColumns[':p' . $index++]  = '`date_reunion`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::VARIANTES)) {
            $modifiedColumns[':p' . $index++]  = '`variantes`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ECHANTILLON)) {
            $modifiedColumns[':p' . $index++]  = '`echantillon`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::REUNION)) {
            $modifiedColumns[':p' . $index++]  = '`reunion`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::VISITES_LIEUX)) {
            $modifiedColumns[':p' . $index++]  = '`visites_lieux`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`add_echantillion_fr`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_EN)) {
            $modifiedColumns[':p' . $index++]  = '`add_echantillion_en`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_ES)) {
            $modifiedColumns[':p' . $index++]  = '`add_echantillion_es`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_SU)) {
            $modifiedColumns[':p' . $index++]  = '`add_echantillion_su`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_DU)) {
            $modifiedColumns[':p' . $index++]  = '`add_echantillion_du`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`add_echantillion_cz`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_AR)) {
            $modifiedColumns[':p' . $index++]  = '`add_echantillion_ar`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`add_reunion_fr`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_EN)) {
            $modifiedColumns[':p' . $index++]  = '`add_reunion_en`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_ES)) {
            $modifiedColumns[':p' . $index++]  = '`add_reunion_es`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_SU)) {
            $modifiedColumns[':p' . $index++]  = '`add_reunion_su`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_DU)) {
            $modifiedColumns[':p' . $index++]  = '`add_reunion_du`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`add_reunion_cz`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_AR)) {
            $modifiedColumns[':p' . $index++]  = '`add_reunion_ar`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_IT)) {
            $modifiedColumns[':p' . $index++]  = '`description_detail_it`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_IT)) {
            $modifiedColumns[':p' . $index++]  = '`description_it`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_IT)) {
            $modifiedColumns[':p' . $index++]  = '`add_echantillion_it`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_IT)) {
            $modifiedColumns[':p' . $index++]  = '`add_reunion_it`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_SOCIALE)) {
            $modifiedColumns[':p' . $index++]  = '`clause_sociale`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE)) {
            $modifiedColumns[':p' . $index++]  = '`clause_environnementale`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::DECISION)) {
            $modifiedColumns[':p' . $index++]  = '`decision`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION)) {
            $modifiedColumns[':p' . $index++]  = '`clause_sociale_condition_execution`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_SOCIALE_INSERTION)) {
            $modifiedColumns[':p' . $index++]  = '`clause_sociale_insertion`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES)) {
            $modifiedColumns[':p' . $index++]  = '`clause_sociale_ateliers_proteges`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_ENV_SPECS_TECHNIQUES)) {
            $modifiedColumns[':p' . $index++]  = '`clause_env_specs_techniques`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_ENV_COND_EXECUTION)) {
            $modifiedColumns[':p' . $index++]  = '`clause_env_cond_execution`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_ENV_CRITERES_SELECT)) {
            $modifiedColumns[':p' . $index++]  = '`clause_env_criteres_select`';
        }
        if ($this->isColumnModified(CommonCategorieLotPeer::ID_DONNEE_COMPLEMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_donnee_complementaire`';
        }

        $sql = sprintf(
            'INSERT INTO `CategorieLot` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`description`':						
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`id_tr_description`':						
                        $stmt->bindValue($identifier, $this->id_tr_description, PDO::PARAM_INT);
                        break;
                    case '`categorie`':						
                        $stmt->bindValue($identifier, $this->categorie, PDO::PARAM_STR);
                        break;
                    case '`description_detail`':						
                        $stmt->bindValue($identifier, $this->description_detail, PDO::PARAM_STR);
                        break;
                    case '`id_tr_description_detail`':						
                        $stmt->bindValue($identifier, $this->id_tr_description_detail, PDO::PARAM_INT);
                        break;
                    case '`code_cpv_1`':						
                        $stmt->bindValue($identifier, $this->code_cpv_1, PDO::PARAM_STR);
                        break;
                    case '`code_cpv_2`':						
                        $stmt->bindValue($identifier, $this->code_cpv_2, PDO::PARAM_STR);
                        break;
                    case '`description_fr`':						
                        $stmt->bindValue($identifier, $this->description_fr, PDO::PARAM_STR);
                        break;
                    case '`description_en`':						
                        $stmt->bindValue($identifier, $this->description_en, PDO::PARAM_STR);
                        break;
                    case '`description_es`':						
                        $stmt->bindValue($identifier, $this->description_es, PDO::PARAM_STR);
                        break;
                    case '`description_su`':						
                        $stmt->bindValue($identifier, $this->description_su, PDO::PARAM_STR);
                        break;
                    case '`description_du`':						
                        $stmt->bindValue($identifier, $this->description_du, PDO::PARAM_STR);
                        break;
                    case '`description_cz`':						
                        $stmt->bindValue($identifier, $this->description_cz, PDO::PARAM_STR);
                        break;
                    case '`description_ar`':						
                        $stmt->bindValue($identifier, $this->description_ar, PDO::PARAM_STR);
                        break;
                    case '`description_detail_fr`':						
                        $stmt->bindValue($identifier, $this->description_detail_fr, PDO::PARAM_STR);
                        break;
                    case '`description_detail_en`':						
                        $stmt->bindValue($identifier, $this->description_detail_en, PDO::PARAM_STR);
                        break;
                    case '`description_detail_es`':						
                        $stmt->bindValue($identifier, $this->description_detail_es, PDO::PARAM_STR);
                        break;
                    case '`description_detail_su`':						
                        $stmt->bindValue($identifier, $this->description_detail_su, PDO::PARAM_STR);
                        break;
                    case '`description_detail_du`':						
                        $stmt->bindValue($identifier, $this->description_detail_du, PDO::PARAM_STR);
                        break;
                    case '`description_detail_cz`':						
                        $stmt->bindValue($identifier, $this->description_detail_cz, PDO::PARAM_STR);
                        break;
                    case '`description_detail_ar`':						
                        $stmt->bindValue($identifier, $this->description_detail_ar, PDO::PARAM_STR);
                        break;
                    case '`id_lot_externe`':						
                        $stmt->bindValue($identifier, $this->id_lot_externe, PDO::PARAM_INT);
                        break;
                    case '`caution_provisoire`':						
                        $stmt->bindValue($identifier, $this->caution_provisoire, PDO::PARAM_STR);
                        break;
                    case '`qualification`':						
                        $stmt->bindValue($identifier, $this->qualification, PDO::PARAM_STR);
                        break;
                    case '`agrements`':						
                        $stmt->bindValue($identifier, $this->agrements, PDO::PARAM_STR);
                        break;
                    case '`add_echantillion`':						
                        $stmt->bindValue($identifier, $this->add_echantillion, PDO::PARAM_STR);
                        break;
                    case '`date_limite_echantillion`':						
                        $stmt->bindValue($identifier, $this->date_limite_echantillion, PDO::PARAM_STR);
                        break;
                    case '`add_reunion`':						
                        $stmt->bindValue($identifier, $this->add_reunion, PDO::PARAM_STR);
                        break;
                    case '`date_reunion`':						
                        $stmt->bindValue($identifier, $this->date_reunion, PDO::PARAM_STR);
                        break;
                    case '`variantes`':						
                        $stmt->bindValue($identifier, $this->variantes, PDO::PARAM_STR);
                        break;
                    case '`echantillon`':						
                        $stmt->bindValue($identifier, $this->echantillon, PDO::PARAM_STR);
                        break;
                    case '`reunion`':						
                        $stmt->bindValue($identifier, $this->reunion, PDO::PARAM_STR);
                        break;
                    case '`visites_lieux`':						
                        $stmt->bindValue($identifier, $this->visites_lieux, PDO::PARAM_STR);
                        break;
                    case '`add_echantillion_fr`':						
                        $stmt->bindValue($identifier, $this->add_echantillion_fr, PDO::PARAM_STR);
                        break;
                    case '`add_echantillion_en`':						
                        $stmt->bindValue($identifier, $this->add_echantillion_en, PDO::PARAM_STR);
                        break;
                    case '`add_echantillion_es`':						
                        $stmt->bindValue($identifier, $this->add_echantillion_es, PDO::PARAM_STR);
                        break;
                    case '`add_echantillion_su`':						
                        $stmt->bindValue($identifier, $this->add_echantillion_su, PDO::PARAM_STR);
                        break;
                    case '`add_echantillion_du`':						
                        $stmt->bindValue($identifier, $this->add_echantillion_du, PDO::PARAM_STR);
                        break;
                    case '`add_echantillion_cz`':						
                        $stmt->bindValue($identifier, $this->add_echantillion_cz, PDO::PARAM_STR);
                        break;
                    case '`add_echantillion_ar`':						
                        $stmt->bindValue($identifier, $this->add_echantillion_ar, PDO::PARAM_STR);
                        break;
                    case '`add_reunion_fr`':						
                        $stmt->bindValue($identifier, $this->add_reunion_fr, PDO::PARAM_STR);
                        break;
                    case '`add_reunion_en`':						
                        $stmt->bindValue($identifier, $this->add_reunion_en, PDO::PARAM_STR);
                        break;
                    case '`add_reunion_es`':						
                        $stmt->bindValue($identifier, $this->add_reunion_es, PDO::PARAM_STR);
                        break;
                    case '`add_reunion_su`':						
                        $stmt->bindValue($identifier, $this->add_reunion_su, PDO::PARAM_STR);
                        break;
                    case '`add_reunion_du`':						
                        $stmt->bindValue($identifier, $this->add_reunion_du, PDO::PARAM_STR);
                        break;
                    case '`add_reunion_cz`':						
                        $stmt->bindValue($identifier, $this->add_reunion_cz, PDO::PARAM_STR);
                        break;
                    case '`add_reunion_ar`':						
                        $stmt->bindValue($identifier, $this->add_reunion_ar, PDO::PARAM_STR);
                        break;
                    case '`description_detail_it`':						
                        $stmt->bindValue($identifier, $this->description_detail_it, PDO::PARAM_STR);
                        break;
                    case '`description_it`':						
                        $stmt->bindValue($identifier, $this->description_it, PDO::PARAM_STR);
                        break;
                    case '`add_echantillion_it`':						
                        $stmt->bindValue($identifier, $this->add_echantillion_it, PDO::PARAM_STR);
                        break;
                    case '`add_reunion_it`':						
                        $stmt->bindValue($identifier, $this->add_reunion_it, PDO::PARAM_STR);
                        break;
                    case '`clause_sociale`':						
                        $stmt->bindValue($identifier, $this->clause_sociale, PDO::PARAM_STR);
                        break;
                    case '`clause_environnementale`':						
                        $stmt->bindValue($identifier, $this->clause_environnementale, PDO::PARAM_STR);
                        break;
                    case '`decision`':						
                        $stmt->bindValue($identifier, $this->decision, PDO::PARAM_STR);
                        break;
                    case '`clause_sociale_condition_execution`':						
                        $stmt->bindValue($identifier, $this->clause_sociale_condition_execution, PDO::PARAM_STR);
                        break;
                    case '`clause_sociale_insertion`':						
                        $stmt->bindValue($identifier, $this->clause_sociale_insertion, PDO::PARAM_STR);
                        break;
                    case '`clause_sociale_ateliers_proteges`':						
                        $stmt->bindValue($identifier, $this->clause_sociale_ateliers_proteges, PDO::PARAM_STR);
                        break;
                    case '`clause_env_specs_techniques`':						
                        $stmt->bindValue($identifier, $this->clause_env_specs_techniques, PDO::PARAM_STR);
                        break;
                    case '`clause_env_cond_execution`':						
                        $stmt->bindValue($identifier, $this->clause_env_cond_execution, PDO::PARAM_STR);
                        break;
                    case '`clause_env_criteres_select`':						
                        $stmt->bindValue($identifier, $this->clause_env_criteres_select, PDO::PARAM_STR);
                        break;
                    case '`id_donnee_complementaire`':						
                        $stmt->bindValue($identifier, $this->id_donnee_complementaire, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

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

            if ($this->aCommonConsultation !== null) {
                if (!$this->aCommonConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonCategorieLotPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonCategorieLotPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrganisme();
                break;
            case 1:
                return $this->getConsultationRef();
                break;
            case 2:
                return $this->getLot();
                break;
            case 3:
                return $this->getDescription();
                break;
            case 4:
                return $this->getIdTrDescription();
                break;
            case 5:
                return $this->getCategorie();
                break;
            case 6:
                return $this->getDescriptionDetail();
                break;
            case 7:
                return $this->getIdTrDescriptionDetail();
                break;
            case 8:
                return $this->getCodeCpv1();
                break;
            case 9:
                return $this->getCodeCpv2();
                break;
            case 10:
                return $this->getDescriptionFr();
                break;
            case 11:
                return $this->getDescriptionEn();
                break;
            case 12:
                return $this->getDescriptionEs();
                break;
            case 13:
                return $this->getDescriptionSu();
                break;
            case 14:
                return $this->getDescriptionDu();
                break;
            case 15:
                return $this->getDescriptionCz();
                break;
            case 16:
                return $this->getDescriptionAr();
                break;
            case 17:
                return $this->getDescriptionDetailFr();
                break;
            case 18:
                return $this->getDescriptionDetailEn();
                break;
            case 19:
                return $this->getDescriptionDetailEs();
                break;
            case 20:
                return $this->getDescriptionDetailSu();
                break;
            case 21:
                return $this->getDescriptionDetailDu();
                break;
            case 22:
                return $this->getDescriptionDetailCz();
                break;
            case 23:
                return $this->getDescriptionDetailAr();
                break;
            case 24:
                return $this->getIdLotExterne();
                break;
            case 25:
                return $this->getCautionProvisoire();
                break;
            case 26:
                return $this->getQualification();
                break;
            case 27:
                return $this->getAgrements();
                break;
            case 28:
                return $this->getAddEchantillion();
                break;
            case 29:
                return $this->getDateLimiteEchantillion();
                break;
            case 30:
                return $this->getAddReunion();
                break;
            case 31:
                return $this->getDateReunion();
                break;
            case 32:
                return $this->getVariantes();
                break;
            case 33:
                return $this->getEchantillon();
                break;
            case 34:
                return $this->getReunion();
                break;
            case 35:
                return $this->getVisitesLieux();
                break;
            case 36:
                return $this->getAddEchantillionFr();
                break;
            case 37:
                return $this->getAddEchantillionEn();
                break;
            case 38:
                return $this->getAddEchantillionEs();
                break;
            case 39:
                return $this->getAddEchantillionSu();
                break;
            case 40:
                return $this->getAddEchantillionDu();
                break;
            case 41:
                return $this->getAddEchantillionCz();
                break;
            case 42:
                return $this->getAddEchantillionAr();
                break;
            case 43:
                return $this->getAddReunionFr();
                break;
            case 44:
                return $this->getAddReunionEn();
                break;
            case 45:
                return $this->getAddReunionEs();
                break;
            case 46:
                return $this->getAddReunionSu();
                break;
            case 47:
                return $this->getAddReunionDu();
                break;
            case 48:
                return $this->getAddReunionCz();
                break;
            case 49:
                return $this->getAddReunionAr();
                break;
            case 50:
                return $this->getDescriptionDetailIt();
                break;
            case 51:
                return $this->getDescriptionIt();
                break;
            case 52:
                return $this->getAddEchantillionIt();
                break;
            case 53:
                return $this->getAddReunionIt();
                break;
            case 54:
                return $this->getClauseSociale();
                break;
            case 55:
                return $this->getClauseEnvironnementale();
                break;
            case 56:
                return $this->getDecision();
                break;
            case 57:
                return $this->getClauseSocialeConditionExecution();
                break;
            case 58:
                return $this->getClauseSocialeInsertion();
                break;
            case 59:
                return $this->getClauseSocialeAteliersProteges();
                break;
            case 60:
                return $this->getClauseEnvSpecsTechniques();
                break;
            case 61:
                return $this->getClauseEnvCondExecution();
                break;
            case 62:
                return $this->getClauseEnvCriteresSelect();
                break;
            case 63:
                return $this->getIdDonneeComplementaire();
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
        if (isset($alreadyDumpedObjects['CommonCategorieLot'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonCategorieLot'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonCategorieLotPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOrganisme(),
            $keys[1] => $this->getConsultationRef(),
            $keys[2] => $this->getLot(),
            $keys[3] => $this->getDescription(),
            $keys[4] => $this->getIdTrDescription(),
            $keys[5] => $this->getCategorie(),
            $keys[6] => $this->getDescriptionDetail(),
            $keys[7] => $this->getIdTrDescriptionDetail(),
            $keys[8] => $this->getCodeCpv1(),
            $keys[9] => $this->getCodeCpv2(),
            $keys[10] => $this->getDescriptionFr(),
            $keys[11] => $this->getDescriptionEn(),
            $keys[12] => $this->getDescriptionEs(),
            $keys[13] => $this->getDescriptionSu(),
            $keys[14] => $this->getDescriptionDu(),
            $keys[15] => $this->getDescriptionCz(),
            $keys[16] => $this->getDescriptionAr(),
            $keys[17] => $this->getDescriptionDetailFr(),
            $keys[18] => $this->getDescriptionDetailEn(),
            $keys[19] => $this->getDescriptionDetailEs(),
            $keys[20] => $this->getDescriptionDetailSu(),
            $keys[21] => $this->getDescriptionDetailDu(),
            $keys[22] => $this->getDescriptionDetailCz(),
            $keys[23] => $this->getDescriptionDetailAr(),
            $keys[24] => $this->getIdLotExterne(),
            $keys[25] => $this->getCautionProvisoire(),
            $keys[26] => $this->getQualification(),
            $keys[27] => $this->getAgrements(),
            $keys[28] => $this->getAddEchantillion(),
            $keys[29] => $this->getDateLimiteEchantillion(),
            $keys[30] => $this->getAddReunion(),
            $keys[31] => $this->getDateReunion(),
            $keys[32] => $this->getVariantes(),
            $keys[33] => $this->getEchantillon(),
            $keys[34] => $this->getReunion(),
            $keys[35] => $this->getVisitesLieux(),
            $keys[36] => $this->getAddEchantillionFr(),
            $keys[37] => $this->getAddEchantillionEn(),
            $keys[38] => $this->getAddEchantillionEs(),
            $keys[39] => $this->getAddEchantillionSu(),
            $keys[40] => $this->getAddEchantillionDu(),
            $keys[41] => $this->getAddEchantillionCz(),
            $keys[42] => $this->getAddEchantillionAr(),
            $keys[43] => $this->getAddReunionFr(),
            $keys[44] => $this->getAddReunionEn(),
            $keys[45] => $this->getAddReunionEs(),
            $keys[46] => $this->getAddReunionSu(),
            $keys[47] => $this->getAddReunionDu(),
            $keys[48] => $this->getAddReunionCz(),
            $keys[49] => $this->getAddReunionAr(),
            $keys[50] => $this->getDescriptionDetailIt(),
            $keys[51] => $this->getDescriptionIt(),
            $keys[52] => $this->getAddEchantillionIt(),
            $keys[53] => $this->getAddReunionIt(),
            $keys[54] => $this->getClauseSociale(),
            $keys[55] => $this->getClauseEnvironnementale(),
            $keys[56] => $this->getDecision(),
            $keys[57] => $this->getClauseSocialeConditionExecution(),
            $keys[58] => $this->getClauseSocialeInsertion(),
            $keys[59] => $this->getClauseSocialeAteliersProteges(),
            $keys[60] => $this->getClauseEnvSpecsTechniques(),
            $keys[61] => $this->getClauseEnvCondExecution(),
            $keys[62] => $this->getClauseEnvCriteresSelect(),
            $keys[63] => $this->getIdDonneeComplementaire(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultation) {
                $result['CommonConsultation'] = $this->aCommonConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonCategorieLotPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrganisme($value);
                break;
            case 1:
                $this->setConsultationRef($value);
                break;
            case 2:
                $this->setLot($value);
                break;
            case 3:
                $this->setDescription($value);
                break;
            case 4:
                $this->setIdTrDescription($value);
                break;
            case 5:
                $this->setCategorie($value);
                break;
            case 6:
                $this->setDescriptionDetail($value);
                break;
            case 7:
                $this->setIdTrDescriptionDetail($value);
                break;
            case 8:
                $this->setCodeCpv1($value);
                break;
            case 9:
                $this->setCodeCpv2($value);
                break;
            case 10:
                $this->setDescriptionFr($value);
                break;
            case 11:
                $this->setDescriptionEn($value);
                break;
            case 12:
                $this->setDescriptionEs($value);
                break;
            case 13:
                $this->setDescriptionSu($value);
                break;
            case 14:
                $this->setDescriptionDu($value);
                break;
            case 15:
                $this->setDescriptionCz($value);
                break;
            case 16:
                $this->setDescriptionAr($value);
                break;
            case 17:
                $this->setDescriptionDetailFr($value);
                break;
            case 18:
                $this->setDescriptionDetailEn($value);
                break;
            case 19:
                $this->setDescriptionDetailEs($value);
                break;
            case 20:
                $this->setDescriptionDetailSu($value);
                break;
            case 21:
                $this->setDescriptionDetailDu($value);
                break;
            case 22:
                $this->setDescriptionDetailCz($value);
                break;
            case 23:
                $this->setDescriptionDetailAr($value);
                break;
            case 24:
                $this->setIdLotExterne($value);
                break;
            case 25:
                $this->setCautionProvisoire($value);
                break;
            case 26:
                $this->setQualification($value);
                break;
            case 27:
                $this->setAgrements($value);
                break;
            case 28:
                $this->setAddEchantillion($value);
                break;
            case 29:
                $this->setDateLimiteEchantillion($value);
                break;
            case 30:
                $this->setAddReunion($value);
                break;
            case 31:
                $this->setDateReunion($value);
                break;
            case 32:
                $this->setVariantes($value);
                break;
            case 33:
                $this->setEchantillon($value);
                break;
            case 34:
                $this->setReunion($value);
                break;
            case 35:
                $this->setVisitesLieux($value);
                break;
            case 36:
                $this->setAddEchantillionFr($value);
                break;
            case 37:
                $this->setAddEchantillionEn($value);
                break;
            case 38:
                $this->setAddEchantillionEs($value);
                break;
            case 39:
                $this->setAddEchantillionSu($value);
                break;
            case 40:
                $this->setAddEchantillionDu($value);
                break;
            case 41:
                $this->setAddEchantillionCz($value);
                break;
            case 42:
                $this->setAddEchantillionAr($value);
                break;
            case 43:
                $this->setAddReunionFr($value);
                break;
            case 44:
                $this->setAddReunionEn($value);
                break;
            case 45:
                $this->setAddReunionEs($value);
                break;
            case 46:
                $this->setAddReunionSu($value);
                break;
            case 47:
                $this->setAddReunionDu($value);
                break;
            case 48:
                $this->setAddReunionCz($value);
                break;
            case 49:
                $this->setAddReunionAr($value);
                break;
            case 50:
                $this->setDescriptionDetailIt($value);
                break;
            case 51:
                $this->setDescriptionIt($value);
                break;
            case 52:
                $this->setAddEchantillionIt($value);
                break;
            case 53:
                $this->setAddReunionIt($value);
                break;
            case 54:
                $this->setClauseSociale($value);
                break;
            case 55:
                $this->setClauseEnvironnementale($value);
                break;
            case 56:
                $this->setDecision($value);
                break;
            case 57:
                $this->setClauseSocialeConditionExecution($value);
                break;
            case 58:
                $this->setClauseSocialeInsertion($value);
                break;
            case 59:
                $this->setClauseSocialeAteliersProteges($value);
                break;
            case 60:
                $this->setClauseEnvSpecsTechniques($value);
                break;
            case 61:
                $this->setClauseEnvCondExecution($value);
                break;
            case 62:
                $this->setClauseEnvCriteresSelect($value);
                break;
            case 63:
                $this->setIdDonneeComplementaire($value);
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
        $keys = CommonCategorieLotPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setOrganisme($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setConsultationRef($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLot($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdTrDescription($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCategorie($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDescriptionDetail($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdTrDescriptionDetail($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCodeCpv1($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCodeCpv2($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDescriptionFr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDescriptionEn($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDescriptionEs($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDescriptionSu($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDescriptionDu($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDescriptionCz($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDescriptionAr($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDescriptionDetailFr($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDescriptionDetailEn($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDescriptionDetailEs($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDescriptionDetailSu($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDescriptionDetailDu($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDescriptionDetailCz($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDescriptionDetailAr($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setIdLotExterne($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setCautionProvisoire($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setQualification($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setAgrements($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setAddEchantillion($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDateLimiteEchantillion($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAddReunion($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDateReunion($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setVariantes($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setEchantillon($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setReunion($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setVisitesLieux($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setAddEchantillionFr($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setAddEchantillionEn($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setAddEchantillionEs($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setAddEchantillionSu($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setAddEchantillionDu($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setAddEchantillionCz($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setAddEchantillionAr($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setAddReunionFr($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setAddReunionEn($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setAddReunionEs($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setAddReunionSu($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setAddReunionDu($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setAddReunionCz($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setAddReunionAr($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setDescriptionDetailIt($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDescriptionIt($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setAddEchantillionIt($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setAddReunionIt($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setClauseSociale($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setClauseEnvironnementale($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setDecision($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setClauseSocialeConditionExecution($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setClauseSocialeInsertion($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setClauseSocialeAteliersProteges($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setClauseEnvSpecsTechniques($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setClauseEnvCondExecution($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setClauseEnvCriteresSelect($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setIdDonneeComplementaire($arr[$keys[63]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonCategorieLotPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonCategorieLotPeer::ORGANISME)) $criteria->add(CommonCategorieLotPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonCategorieLotPeer::CONSULTATION_REF)) $criteria->add(CommonCategorieLotPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonCategorieLotPeer::LOT)) $criteria->add(CommonCategorieLotPeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(CommonCategorieLotPeer::ID_TR_DESCRIPTION)) $criteria->add(CommonCategorieLotPeer::ID_TR_DESCRIPTION, $this->id_tr_description);
        if ($this->isColumnModified(CommonCategorieLotPeer::CATEGORIE)) $criteria->add(CommonCategorieLotPeer::CATEGORIE, $this->categorie);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_DETAIL, $this->description_detail);
        if ($this->isColumnModified(CommonCategorieLotPeer::ID_TR_DESCRIPTION_DETAIL)) $criteria->add(CommonCategorieLotPeer::ID_TR_DESCRIPTION_DETAIL, $this->id_tr_description_detail);
        if ($this->isColumnModified(CommonCategorieLotPeer::CODE_CPV_1)) $criteria->add(CommonCategorieLotPeer::CODE_CPV_1, $this->code_cpv_1);
        if ($this->isColumnModified(CommonCategorieLotPeer::CODE_CPV_2)) $criteria->add(CommonCategorieLotPeer::CODE_CPV_2, $this->code_cpv_2);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_FR)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_FR, $this->description_fr);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_EN)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_EN, $this->description_en);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_ES)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_ES, $this->description_es);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_SU)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_SU, $this->description_su);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DU)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_DU, $this->description_du);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_CZ)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_CZ, $this->description_cz);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_AR)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_AR, $this->description_ar);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_FR)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_DETAIL_FR, $this->description_detail_fr);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_EN)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_DETAIL_EN, $this->description_detail_en);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_ES)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_DETAIL_ES, $this->description_detail_es);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_SU)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_DETAIL_SU, $this->description_detail_su);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_DU)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_DETAIL_DU, $this->description_detail_du);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_CZ)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_DETAIL_CZ, $this->description_detail_cz);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_AR)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_DETAIL_AR, $this->description_detail_ar);
        if ($this->isColumnModified(CommonCategorieLotPeer::ID_LOT_EXTERNE)) $criteria->add(CommonCategorieLotPeer::ID_LOT_EXTERNE, $this->id_lot_externe);
        if ($this->isColumnModified(CommonCategorieLotPeer::CAUTION_PROVISOIRE)) $criteria->add(CommonCategorieLotPeer::CAUTION_PROVISOIRE, $this->caution_provisoire);
        if ($this->isColumnModified(CommonCategorieLotPeer::QUALIFICATION)) $criteria->add(CommonCategorieLotPeer::QUALIFICATION, $this->qualification);
        if ($this->isColumnModified(CommonCategorieLotPeer::AGREMENTS)) $criteria->add(CommonCategorieLotPeer::AGREMENTS, $this->agrements);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION)) $criteria->add(CommonCategorieLotPeer::ADD_ECHANTILLION, $this->add_echantillion);
        if ($this->isColumnModified(CommonCategorieLotPeer::DATE_LIMITE_ECHANTILLION)) $criteria->add(CommonCategorieLotPeer::DATE_LIMITE_ECHANTILLION, $this->date_limite_echantillion);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION)) $criteria->add(CommonCategorieLotPeer::ADD_REUNION, $this->add_reunion);
        if ($this->isColumnModified(CommonCategorieLotPeer::DATE_REUNION)) $criteria->add(CommonCategorieLotPeer::DATE_REUNION, $this->date_reunion);
        if ($this->isColumnModified(CommonCategorieLotPeer::VARIANTES)) $criteria->add(CommonCategorieLotPeer::VARIANTES, $this->variantes);
        if ($this->isColumnModified(CommonCategorieLotPeer::ECHANTILLON)) $criteria->add(CommonCategorieLotPeer::ECHANTILLON, $this->echantillon);
        if ($this->isColumnModified(CommonCategorieLotPeer::REUNION)) $criteria->add(CommonCategorieLotPeer::REUNION, $this->reunion);
        if ($this->isColumnModified(CommonCategorieLotPeer::VISITES_LIEUX)) $criteria->add(CommonCategorieLotPeer::VISITES_LIEUX, $this->visites_lieux);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_FR)) $criteria->add(CommonCategorieLotPeer::ADD_ECHANTILLION_FR, $this->add_echantillion_fr);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_EN)) $criteria->add(CommonCategorieLotPeer::ADD_ECHANTILLION_EN, $this->add_echantillion_en);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_ES)) $criteria->add(CommonCategorieLotPeer::ADD_ECHANTILLION_ES, $this->add_echantillion_es);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_SU)) $criteria->add(CommonCategorieLotPeer::ADD_ECHANTILLION_SU, $this->add_echantillion_su);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_DU)) $criteria->add(CommonCategorieLotPeer::ADD_ECHANTILLION_DU, $this->add_echantillion_du);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_CZ)) $criteria->add(CommonCategorieLotPeer::ADD_ECHANTILLION_CZ, $this->add_echantillion_cz);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_AR)) $criteria->add(CommonCategorieLotPeer::ADD_ECHANTILLION_AR, $this->add_echantillion_ar);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_FR)) $criteria->add(CommonCategorieLotPeer::ADD_REUNION_FR, $this->add_reunion_fr);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_EN)) $criteria->add(CommonCategorieLotPeer::ADD_REUNION_EN, $this->add_reunion_en);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_ES)) $criteria->add(CommonCategorieLotPeer::ADD_REUNION_ES, $this->add_reunion_es);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_SU)) $criteria->add(CommonCategorieLotPeer::ADD_REUNION_SU, $this->add_reunion_su);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_DU)) $criteria->add(CommonCategorieLotPeer::ADD_REUNION_DU, $this->add_reunion_du);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_CZ)) $criteria->add(CommonCategorieLotPeer::ADD_REUNION_CZ, $this->add_reunion_cz);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_AR)) $criteria->add(CommonCategorieLotPeer::ADD_REUNION_AR, $this->add_reunion_ar);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_DETAIL_IT)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_DETAIL_IT, $this->description_detail_it);
        if ($this->isColumnModified(CommonCategorieLotPeer::DESCRIPTION_IT)) $criteria->add(CommonCategorieLotPeer::DESCRIPTION_IT, $this->description_it);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_ECHANTILLION_IT)) $criteria->add(CommonCategorieLotPeer::ADD_ECHANTILLION_IT, $this->add_echantillion_it);
        if ($this->isColumnModified(CommonCategorieLotPeer::ADD_REUNION_IT)) $criteria->add(CommonCategorieLotPeer::ADD_REUNION_IT, $this->add_reunion_it);
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_SOCIALE)) $criteria->add(CommonCategorieLotPeer::CLAUSE_SOCIALE, $this->clause_sociale);
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE)) $criteria->add(CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE, $this->clause_environnementale);
        if ($this->isColumnModified(CommonCategorieLotPeer::DECISION)) $criteria->add(CommonCategorieLotPeer::DECISION, $this->decision);
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION)) $criteria->add(CommonCategorieLotPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION, $this->clause_sociale_condition_execution);
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_SOCIALE_INSERTION)) $criteria->add(CommonCategorieLotPeer::CLAUSE_SOCIALE_INSERTION, $this->clause_sociale_insertion);
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES)) $criteria->add(CommonCategorieLotPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES, $this->clause_sociale_ateliers_proteges);
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_ENV_SPECS_TECHNIQUES)) $criteria->add(CommonCategorieLotPeer::CLAUSE_ENV_SPECS_TECHNIQUES, $this->clause_env_specs_techniques);
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_ENV_COND_EXECUTION)) $criteria->add(CommonCategorieLotPeer::CLAUSE_ENV_COND_EXECUTION, $this->clause_env_cond_execution);
        if ($this->isColumnModified(CommonCategorieLotPeer::CLAUSE_ENV_CRITERES_SELECT)) $criteria->add(CommonCategorieLotPeer::CLAUSE_ENV_CRITERES_SELECT, $this->clause_env_criteres_select);
        if ($this->isColumnModified(CommonCategorieLotPeer::ID_DONNEE_COMPLEMENTAIRE)) $criteria->add(CommonCategorieLotPeer::ID_DONNEE_COMPLEMENTAIRE, $this->id_donnee_complementaire);

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
        $criteria = new Criteria(CommonCategorieLotPeer::DATABASE_NAME);
        $criteria->add(CommonCategorieLotPeer::ORGANISME, $this->organisme);
        $criteria->add(CommonCategorieLotPeer::CONSULTATION_REF, $this->consultation_ref);
        $criteria->add(CommonCategorieLotPeer::LOT, $this->lot);

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
        $pks[0] = $this->getOrganisme();
        $pks[1] = $this->getConsultationRef();
        $pks[2] = $this->getLot();

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
        $this->setOrganisme($keys[0]);
        $this->setConsultationRef($keys[1]);
        $this->setLot($keys[2]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getOrganisme()) && (null === $this->getConsultationRef()) && (null === $this->getLot());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonCategorieLot (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setLot($this->getLot());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setIdTrDescription($this->getIdTrDescription());
        $copyObj->setCategorie($this->getCategorie());
        $copyObj->setDescriptionDetail($this->getDescriptionDetail());
        $copyObj->setIdTrDescriptionDetail($this->getIdTrDescriptionDetail());
        $copyObj->setCodeCpv1($this->getCodeCpv1());
        $copyObj->setCodeCpv2($this->getCodeCpv2());
        $copyObj->setDescriptionFr($this->getDescriptionFr());
        $copyObj->setDescriptionEn($this->getDescriptionEn());
        $copyObj->setDescriptionEs($this->getDescriptionEs());
        $copyObj->setDescriptionSu($this->getDescriptionSu());
        $copyObj->setDescriptionDu($this->getDescriptionDu());
        $copyObj->setDescriptionCz($this->getDescriptionCz());
        $copyObj->setDescriptionAr($this->getDescriptionAr());
        $copyObj->setDescriptionDetailFr($this->getDescriptionDetailFr());
        $copyObj->setDescriptionDetailEn($this->getDescriptionDetailEn());
        $copyObj->setDescriptionDetailEs($this->getDescriptionDetailEs());
        $copyObj->setDescriptionDetailSu($this->getDescriptionDetailSu());
        $copyObj->setDescriptionDetailDu($this->getDescriptionDetailDu());
        $copyObj->setDescriptionDetailCz($this->getDescriptionDetailCz());
        $copyObj->setDescriptionDetailAr($this->getDescriptionDetailAr());
        $copyObj->setIdLotExterne($this->getIdLotExterne());
        $copyObj->setCautionProvisoire($this->getCautionProvisoire());
        $copyObj->setQualification($this->getQualification());
        $copyObj->setAgrements($this->getAgrements());
        $copyObj->setAddEchantillion($this->getAddEchantillion());
        $copyObj->setDateLimiteEchantillion($this->getDateLimiteEchantillion());
        $copyObj->setAddReunion($this->getAddReunion());
        $copyObj->setDateReunion($this->getDateReunion());
        $copyObj->setVariantes($this->getVariantes());
        $copyObj->setEchantillon($this->getEchantillon());
        $copyObj->setReunion($this->getReunion());
        $copyObj->setVisitesLieux($this->getVisitesLieux());
        $copyObj->setAddEchantillionFr($this->getAddEchantillionFr());
        $copyObj->setAddEchantillionEn($this->getAddEchantillionEn());
        $copyObj->setAddEchantillionEs($this->getAddEchantillionEs());
        $copyObj->setAddEchantillionSu($this->getAddEchantillionSu());
        $copyObj->setAddEchantillionDu($this->getAddEchantillionDu());
        $copyObj->setAddEchantillionCz($this->getAddEchantillionCz());
        $copyObj->setAddEchantillionAr($this->getAddEchantillionAr());
        $copyObj->setAddReunionFr($this->getAddReunionFr());
        $copyObj->setAddReunionEn($this->getAddReunionEn());
        $copyObj->setAddReunionEs($this->getAddReunionEs());
        $copyObj->setAddReunionSu($this->getAddReunionSu());
        $copyObj->setAddReunionDu($this->getAddReunionDu());
        $copyObj->setAddReunionCz($this->getAddReunionCz());
        $copyObj->setAddReunionAr($this->getAddReunionAr());
        $copyObj->setDescriptionDetailIt($this->getDescriptionDetailIt());
        $copyObj->setDescriptionIt($this->getDescriptionIt());
        $copyObj->setAddEchantillionIt($this->getAddEchantillionIt());
        $copyObj->setAddReunionIt($this->getAddReunionIt());
        $copyObj->setClauseSociale($this->getClauseSociale());
        $copyObj->setClauseEnvironnementale($this->getClauseEnvironnementale());
        $copyObj->setDecision($this->getDecision());
        $copyObj->setClauseSocialeConditionExecution($this->getClauseSocialeConditionExecution());
        $copyObj->setClauseSocialeInsertion($this->getClauseSocialeInsertion());
        $copyObj->setClauseSocialeAteliersProteges($this->getClauseSocialeAteliersProteges());
        $copyObj->setClauseEnvSpecsTechniques($this->getClauseEnvSpecsTechniques());
        $copyObj->setClauseEnvCondExecution($this->getClauseEnvCondExecution());
        $copyObj->setClauseEnvCriteresSelect($this->getClauseEnvCriteresSelect());
        $copyObj->setIdDonneeComplementaire($this->getIdDonneeComplementaire());

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
     * @return CommonCategorieLot Clone of current object.
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
     * @return CommonCategorieLotPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonCategorieLotPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonCategorieLot The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setConsultationRef(NULL);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonCategorieLot($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultation The associated CommonConsultation object.
     * @throws PropelException
     */
    public function getCommonConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultation === null && (($this->organisme !== "" && $this->organisme !== null) && $this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()->findPk(array($this->consultation_ref, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonCategorieLots($this);
             */
        }

        return $this->aCommonConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->organisme = null;
        $this->consultation_ref = null;
        $this->lot = null;
        $this->description = null;
        $this->id_tr_description = null;
        $this->categorie = null;
        $this->description_detail = null;
        $this->id_tr_description_detail = null;
        $this->code_cpv_1 = null;
        $this->code_cpv_2 = null;
        $this->description_fr = null;
        $this->description_en = null;
        $this->description_es = null;
        $this->description_su = null;
        $this->description_du = null;
        $this->description_cz = null;
        $this->description_ar = null;
        $this->description_detail_fr = null;
        $this->description_detail_en = null;
        $this->description_detail_es = null;
        $this->description_detail_su = null;
        $this->description_detail_du = null;
        $this->description_detail_cz = null;
        $this->description_detail_ar = null;
        $this->id_lot_externe = null;
        $this->caution_provisoire = null;
        $this->qualification = null;
        $this->agrements = null;
        $this->add_echantillion = null;
        $this->date_limite_echantillion = null;
        $this->add_reunion = null;
        $this->date_reunion = null;
        $this->variantes = null;
        $this->echantillon = null;
        $this->reunion = null;
        $this->visites_lieux = null;
        $this->add_echantillion_fr = null;
        $this->add_echantillion_en = null;
        $this->add_echantillion_es = null;
        $this->add_echantillion_su = null;
        $this->add_echantillion_du = null;
        $this->add_echantillion_cz = null;
        $this->add_echantillion_ar = null;
        $this->add_reunion_fr = null;
        $this->add_reunion_en = null;
        $this->add_reunion_es = null;
        $this->add_reunion_su = null;
        $this->add_reunion_du = null;
        $this->add_reunion_cz = null;
        $this->add_reunion_ar = null;
        $this->description_detail_it = null;
        $this->description_it = null;
        $this->add_echantillion_it = null;
        $this->add_reunion_it = null;
        $this->clause_sociale = null;
        $this->clause_environnementale = null;
        $this->decision = null;
        $this->clause_sociale_condition_execution = null;
        $this->clause_sociale_insertion = null;
        $this->clause_sociale_ateliers_proteges = null;
        $this->clause_env_specs_techniques = null;
        $this->clause_env_cond_execution = null;
        $this->clause_env_criteres_select = null;
        $this->id_donnee_complementaire = null;
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
            if ($this->aCommonConsultation instanceof Persistent) {
              $this->aCommonConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonCategorieLotPeer::DEFAULT_STRING_FORMAT);
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
