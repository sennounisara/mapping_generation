<?php


/**
 * Base class that represents a row from the 'Type_Procedure_Organisme' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTypeProcedureOrganisme extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTypeProcedureOrganismePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTypeProcedureOrganismePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_type_procedure field.
     * @var        int
     */
    protected $id_type_procedure;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the libelle_type_procedure field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_type_procedure;

    /**
     * The value for the abbreviation field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $abbreviation;

    /**
     * The value for the type_boamp field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_boamp;

    /**
     * The value for the id_type_procedure_portail field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_type_procedure_portail;

    /**
     * The value for the categorie_procedure field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $categorie_procedure;

    /**
     * The value for the delai_alerte field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $delai_alerte;

    /**
     * The value for the id_type_validation field.
     * Note: this column has a database default value of: 2
     * @var        int
     */
    protected $id_type_validation;

    /**
     * The value for the service_validation field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $service_validation;

    /**
     * The value for the mapa field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $mapa;

    /**
     * The value for the activer_mapa field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $activer_mapa;

    /**
     * The value for the libelle_type_procedure_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_type_procedure_fr;

    /**
     * The value for the libelle_type_procedure_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_type_procedure_en;

    /**
     * The value for the libelle_type_procedure_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_type_procedure_es;

    /**
     * The value for the libelle_type_procedure_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_type_procedure_su;

    /**
     * The value for the libelle_type_procedure_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_type_procedure_du;

    /**
     * The value for the libelle_type_procedure_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_type_procedure_cz;

    /**
     * The value for the libelle_type_procedure_ar field.
     * @var        string
     */
    protected $libelle_type_procedure_ar;

    /**
     * The value for the id_montant_mapa field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_montant_mapa;

    /**
     * The value for the code_recensement field.
     * @var        string
     */
    protected $code_recensement;

    /**
     * The value for the depouillable_phase_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $depouillable_phase_consultation;

    /**
     * The value for the consultation_transverse field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_transverse;

    /**
     * The value for the tag_boamp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tag_boamp;

    /**
     * The value for the ao field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ao;

    /**
     * The value for the mn field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $mn;

    /**
     * The value for the dc field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $dc;

    /**
     * The value for the autre field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $autre;

    /**
     * The value for the sad field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $sad;

    /**
     * The value for the accord_cadre field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $accord_cadre;

    /**
     * The value for the tag_name_mesure_avancement field.
     * @var        string
     */
    protected $tag_name_mesure_avancement;

    /**
     * The value for the abreviation_interface field.
     * @var        string
     */
    protected $abreviation_interface;

    /**
     * The value for the libelle_type_procedure_it field.
     * @var        string
     */
    protected $libelle_type_procedure_it;

    /**
     * The value for the publicite_types_form_xml field.
     * @var        string
     */
    protected $publicite_types_form_xml;

    /**
     * The value for the tag_name_chorus field.
     * @var        string
     */
    protected $tag_name_chorus;

    /**
     * The value for the equivalent_opoce field.
     * @var        string
     */
    protected $equivalent_opoce;

    /**
     * The value for the equivalent_boamp field.
     * @var        string
     */
    protected $equivalent_boamp;

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
        $this->libelle_type_procedure = '';
        $this->abbreviation = '';
        $this->type_boamp = 0;
        $this->id_type_procedure_portail = 0;
        $this->categorie_procedure = 0;
        $this->delai_alerte = 0;
        $this->id_type_validation = 2;
        $this->service_validation = 0;
        $this->mapa = '0';
        $this->activer_mapa = '1';
        $this->libelle_type_procedure_fr = '';
        $this->libelle_type_procedure_en = '';
        $this->libelle_type_procedure_es = '';
        $this->libelle_type_procedure_su = '';
        $this->libelle_type_procedure_du = '';
        $this->libelle_type_procedure_cz = '';
        $this->id_montant_mapa = 0;
        $this->depouillable_phase_consultation = '0';
        $this->consultation_transverse = '0';
        $this->tag_boamp = '';
        $this->ao = '0';
        $this->mn = '0';
        $this->dc = '0';
        $this->autre = '0';
        $this->sad = '0';
        $this->accord_cadre = '0';
    }

    /**
     * Initializes internal state of BaseCommonTypeProcedureOrganisme object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [libelle_type_procedure] column value.
     * 
     * @return string
     */
    public function getLibelleTypeProcedure()
    {

        return $this->libelle_type_procedure;
    }

    /**
     * Get the [abbreviation] column value.
     * 
     * @return string
     */
    public function getAbbreviation()
    {

        return $this->abbreviation;
    }

    /**
     * Get the [type_boamp] column value.
     * 
     * @return int
     */
    public function getTypeBoamp()
    {

        return $this->type_boamp;
    }

    /**
     * Get the [id_type_procedure_portail] column value.
     * 
     * @return int
     */
    public function getIdTypeProcedurePortail()
    {

        return $this->id_type_procedure_portail;
    }

    /**
     * Get the [categorie_procedure] column value.
     * 
     * @return int
     */
    public function getCategorieProcedure()
    {

        return $this->categorie_procedure;
    }

    /**
     * Get the [delai_alerte] column value.
     * 
     * @return int
     */
    public function getDelaiAlerte()
    {

        return $this->delai_alerte;
    }

    /**
     * Get the [id_type_validation] column value.
     * 
     * @return int
     */
    public function getIdTypeValidation()
    {

        return $this->id_type_validation;
    }

    /**
     * Get the [service_validation] column value.
     * 
     * @return int
     */
    public function getServiceValidation()
    {

        return $this->service_validation;
    }

    /**
     * Get the [mapa] column value.
     * 
     * @return string
     */
    public function getMapa()
    {

        return $this->mapa;
    }

    /**
     * Get the [activer_mapa] column value.
     * 
     * @return string
     */
    public function getActiverMapa()
    {

        return $this->activer_mapa;
    }

    /**
     * Get the [libelle_type_procedure_fr] column value.
     * 
     * @return string
     */
    public function getLibelleTypeProcedureFr()
    {

        return $this->libelle_type_procedure_fr;
    }

    /**
     * Get the [libelle_type_procedure_en] column value.
     * 
     * @return string
     */
    public function getLibelleTypeProcedureEn()
    {

        return $this->libelle_type_procedure_en;
    }

    /**
     * Get the [libelle_type_procedure_es] column value.
     * 
     * @return string
     */
    public function getLibelleTypeProcedureEs()
    {

        return $this->libelle_type_procedure_es;
    }

    /**
     * Get the [libelle_type_procedure_su] column value.
     * 
     * @return string
     */
    public function getLibelleTypeProcedureSu()
    {

        return $this->libelle_type_procedure_su;
    }

    /**
     * Get the [libelle_type_procedure_du] column value.
     * 
     * @return string
     */
    public function getLibelleTypeProcedureDu()
    {

        return $this->libelle_type_procedure_du;
    }

    /**
     * Get the [libelle_type_procedure_cz] column value.
     * 
     * @return string
     */
    public function getLibelleTypeProcedureCz()
    {

        return $this->libelle_type_procedure_cz;
    }

    /**
     * Get the [libelle_type_procedure_ar] column value.
     * 
     * @return string
     */
    public function getLibelleTypeProcedureAr()
    {

        return $this->libelle_type_procedure_ar;
    }

    /**
     * Get the [id_montant_mapa] column value.
     * 
     * @return int
     */
    public function getIdMontantMapa()
    {

        return $this->id_montant_mapa;
    }

    /**
     * Get the [code_recensement] column value.
     * 
     * @return string
     */
    public function getCodeRecensement()
    {

        return $this->code_recensement;
    }

    /**
     * Get the [depouillable_phase_consultation] column value.
     * 
     * @return string
     */
    public function getDepouillablePhaseConsultation()
    {

        return $this->depouillable_phase_consultation;
    }

    /**
     * Get the [consultation_transverse] column value.
     * 
     * @return string
     */
    public function getConsultationTransverse()
    {

        return $this->consultation_transverse;
    }

    /**
     * Get the [tag_boamp] column value.
     * 
     * @return string
     */
    public function getTagBoamp()
    {

        return $this->tag_boamp;
    }

    /**
     * Get the [ao] column value.
     * 
     * @return string
     */
    public function getAo()
    {

        return $this->ao;
    }

    /**
     * Get the [mn] column value.
     * 
     * @return string
     */
    public function getMn()
    {

        return $this->mn;
    }

    /**
     * Get the [dc] column value.
     * 
     * @return string
     */
    public function getDc()
    {

        return $this->dc;
    }

    /**
     * Get the [autre] column value.
     * 
     * @return string
     */
    public function getAutre()
    {

        return $this->autre;
    }

    /**
     * Get the [sad] column value.
     * 
     * @return string
     */
    public function getSad()
    {

        return $this->sad;
    }

    /**
     * Get the [accord_cadre] column value.
     * 
     * @return string
     */
    public function getAccordCadre()
    {

        return $this->accord_cadre;
    }

    /**
     * Get the [tag_name_mesure_avancement] column value.
     * 
     * @return string
     */
    public function getTagNameMesureAvancement()
    {

        return $this->tag_name_mesure_avancement;
    }

    /**
     * Get the [abreviation_interface] column value.
     * 
     * @return string
     */
    public function getAbreviationInterface()
    {

        return $this->abreviation_interface;
    }

    /**
     * Get the [libelle_type_procedure_it] column value.
     * 
     * @return string
     */
    public function getLibelleTypeProcedureIt()
    {

        return $this->libelle_type_procedure_it;
    }

    /**
     * Get the [publicite_types_form_xml] column value.
     * 
     * @return string
     */
    public function getPubliciteTypesFormXml()
    {

        return $this->publicite_types_form_xml;
    }

    /**
     * Get the [tag_name_chorus] column value.
     * 
     * @return string
     */
    public function getTagNameChorus()
    {

        return $this->tag_name_chorus;
    }

    /**
     * Get the [equivalent_opoce] column value.
     * 
     * @return string
     */
    public function getEquivalentOpoce()
    {

        return $this->equivalent_opoce;
    }

    /**
     * Get the [equivalent_boamp] column value.
     * 
     * @return string
     */
    public function getEquivalentBoamp()
    {

        return $this->equivalent_boamp;
    }

    /**
     * Set the value of [id_type_procedure] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setIdTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_procedure !== $v) {
            $this->id_type_procedure = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE;
        }


        return $this;
    } // setIdTypeProcedure()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [libelle_type_procedure] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setLibelleTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure !== $v) {
            $this->libelle_type_procedure = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE;
        }


        return $this;
    } // setLibelleTypeProcedure()

    /**
     * Set the value of [abbreviation] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setAbbreviation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abbreviation !== $v) {
            $this->abbreviation = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::ABBREVIATION;
        }


        return $this;
    } // setAbbreviation()

    /**
     * Set the value of [type_boamp] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setTypeBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_boamp !== $v) {
            $this->type_boamp = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::TYPE_BOAMP;
        }


        return $this;
    } // setTypeBoamp()

    /**
     * Set the value of [id_type_procedure_portail] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setIdTypeProcedurePortail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_procedure_portail !== $v) {
            $this->id_type_procedure_portail = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE_PORTAIL;
        }


        return $this;
    } // setIdTypeProcedurePortail()

    /**
     * Set the value of [categorie_procedure] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setCategorieProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->categorie_procedure !== $v) {
            $this->categorie_procedure = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::CATEGORIE_PROCEDURE;
        }


        return $this;
    } // setCategorieProcedure()

    /**
     * Set the value of [delai_alerte] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setDelaiAlerte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_alerte !== $v) {
            $this->delai_alerte = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::DELAI_ALERTE;
        }


        return $this;
    } // setDelaiAlerte()

    /**
     * Set the value of [id_type_validation] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setIdTypeValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_validation !== $v) {
            $this->id_type_validation = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::ID_TYPE_VALIDATION;
        }


        return $this;
    } // setIdTypeValidation()

    /**
     * Set the value of [service_validation] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setServiceValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->service_validation !== $v) {
            $this->service_validation = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::SERVICE_VALIDATION;
        }


        return $this;
    } // setServiceValidation()

    /**
     * Set the value of [mapa] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setMapa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mapa !== $v) {
            $this->mapa = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::MAPA;
        }


        return $this;
    } // setMapa()

    /**
     * Set the value of [activer_mapa] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setActiverMapa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activer_mapa !== $v) {
            $this->activer_mapa = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::ACTIVER_MAPA;
        }


        return $this;
    } // setActiverMapa()

    /**
     * Set the value of [libelle_type_procedure_fr] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_fr !== $v) {
            $this->libelle_type_procedure_fr = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_FR;
        }


        return $this;
    } // setLibelleTypeProcedureFr()

    /**
     * Set the value of [libelle_type_procedure_en] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_en !== $v) {
            $this->libelle_type_procedure_en = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_EN;
        }


        return $this;
    } // setLibelleTypeProcedureEn()

    /**
     * Set the value of [libelle_type_procedure_es] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_es !== $v) {
            $this->libelle_type_procedure_es = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_ES;
        }


        return $this;
    } // setLibelleTypeProcedureEs()

    /**
     * Set the value of [libelle_type_procedure_su] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_su !== $v) {
            $this->libelle_type_procedure_su = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_SU;
        }


        return $this;
    } // setLibelleTypeProcedureSu()

    /**
     * Set the value of [libelle_type_procedure_du] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_du !== $v) {
            $this->libelle_type_procedure_du = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_DU;
        }


        return $this;
    } // setLibelleTypeProcedureDu()

    /**
     * Set the value of [libelle_type_procedure_cz] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_cz !== $v) {
            $this->libelle_type_procedure_cz = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_CZ;
        }


        return $this;
    } // setLibelleTypeProcedureCz()

    /**
     * Set the value of [libelle_type_procedure_ar] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_ar !== $v) {
            $this->libelle_type_procedure_ar = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_AR;
        }


        return $this;
    } // setLibelleTypeProcedureAr()

    /**
     * Set the value of [id_montant_mapa] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setIdMontantMapa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_montant_mapa !== $v) {
            $this->id_montant_mapa = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::ID_MONTANT_MAPA;
        }


        return $this;
    } // setIdMontantMapa()

    /**
     * Set the value of [code_recensement] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setCodeRecensement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_recensement !== $v) {
            $this->code_recensement = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::CODE_RECENSEMENT;
        }


        return $this;
    } // setCodeRecensement()

    /**
     * Set the value of [depouillable_phase_consultation] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setDepouillablePhaseConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depouillable_phase_consultation !== $v) {
            $this->depouillable_phase_consultation = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION;
        }


        return $this;
    } // setDepouillablePhaseConsultation()

    /**
     * Set the value of [consultation_transverse] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setConsultationTransverse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_transverse !== $v) {
            $this->consultation_transverse = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE;
        }


        return $this;
    } // setConsultationTransverse()

    /**
     * Set the value of [tag_boamp] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setTagBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tag_boamp !== $v) {
            $this->tag_boamp = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::TAG_BOAMP;
        }


        return $this;
    } // setTagBoamp()

    /**
     * Set the value of [ao] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setAo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ao !== $v) {
            $this->ao = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::AO;
        }


        return $this;
    } // setAo()

    /**
     * Set the value of [mn] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setMn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mn !== $v) {
            $this->mn = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::MN;
        }


        return $this;
    } // setMn()

    /**
     * Set the value of [dc] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setDc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dc !== $v) {
            $this->dc = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::DC;
        }


        return $this;
    } // setDc()

    /**
     * Set the value of [autre] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setAutre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->autre !== $v) {
            $this->autre = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::AUTRE;
        }


        return $this;
    } // setAutre()

    /**
     * Set the value of [sad] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setSad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sad !== $v) {
            $this->sad = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::SAD;
        }


        return $this;
    } // setSad()

    /**
     * Set the value of [accord_cadre] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setAccordCadre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->accord_cadre !== $v) {
            $this->accord_cadre = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::ACCORD_CADRE;
        }


        return $this;
    } // setAccordCadre()

    /**
     * Set the value of [tag_name_mesure_avancement] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setTagNameMesureAvancement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tag_name_mesure_avancement !== $v) {
            $this->tag_name_mesure_avancement = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::TAG_NAME_MESURE_AVANCEMENT;
        }


        return $this;
    } // setTagNameMesureAvancement()

    /**
     * Set the value of [abreviation_interface] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setAbreviationInterface($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abreviation_interface !== $v) {
            $this->abreviation_interface = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::ABREVIATION_INTERFACE;
        }


        return $this;
    } // setAbreviationInterface()

    /**
     * Set the value of [libelle_type_procedure_it] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_it !== $v) {
            $this->libelle_type_procedure_it = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_IT;
        }


        return $this;
    } // setLibelleTypeProcedureIt()

    /**
     * Set the value of [publicite_types_form_xml] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setPubliciteTypesFormXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->publicite_types_form_xml !== $v) {
            $this->publicite_types_form_xml = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::PUBLICITE_TYPES_FORM_XML;
        }


        return $this;
    } // setPubliciteTypesFormXml()

    /**
     * Set the value of [tag_name_chorus] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setTagNameChorus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tag_name_chorus !== $v) {
            $this->tag_name_chorus = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::TAG_NAME_CHORUS;
        }


        return $this;
    } // setTagNameChorus()

    /**
     * Set the value of [equivalent_opoce] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setEquivalentOpoce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->equivalent_opoce !== $v) {
            $this->equivalent_opoce = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::EQUIVALENT_OPOCE;
        }


        return $this;
    } // setEquivalentOpoce()

    /**
     * Set the value of [equivalent_boamp] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedureOrganisme The current object (for fluent API support)
     */
    public function setEquivalentBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->equivalent_boamp !== $v) {
            $this->equivalent_boamp = $v;
            $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::EQUIVALENT_BOAMP;
        }


        return $this;
    } // setEquivalentBoamp()

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

            if ($this->libelle_type_procedure !== '') {
                return false;
            }

            if ($this->abbreviation !== '') {
                return false;
            }

            if ($this->type_boamp !== 0) {
                return false;
            }

            if ($this->id_type_procedure_portail !== 0) {
                return false;
            }

            if ($this->categorie_procedure !== 0) {
                return false;
            }

            if ($this->delai_alerte !== 0) {
                return false;
            }

            if ($this->id_type_validation !== 2) {
                return false;
            }

            if ($this->service_validation !== 0) {
                return false;
            }

            if ($this->mapa !== '0') {
                return false;
            }

            if ($this->activer_mapa !== '1') {
                return false;
            }

            if ($this->libelle_type_procedure_fr !== '') {
                return false;
            }

            if ($this->libelle_type_procedure_en !== '') {
                return false;
            }

            if ($this->libelle_type_procedure_es !== '') {
                return false;
            }

            if ($this->libelle_type_procedure_su !== '') {
                return false;
            }

            if ($this->libelle_type_procedure_du !== '') {
                return false;
            }

            if ($this->libelle_type_procedure_cz !== '') {
                return false;
            }

            if ($this->id_montant_mapa !== 0) {
                return false;
            }

            if ($this->depouillable_phase_consultation !== '0') {
                return false;
            }

            if ($this->consultation_transverse !== '0') {
                return false;
            }

            if ($this->tag_boamp !== '') {
                return false;
            }

            if ($this->ao !== '0') {
                return false;
            }

            if ($this->mn !== '0') {
                return false;
            }

            if ($this->dc !== '0') {
                return false;
            }

            if ($this->autre !== '0') {
                return false;
            }

            if ($this->sad !== '0') {
                return false;
            }

            if ($this->accord_cadre !== '0') {
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

            $this->id_type_procedure = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->libelle_type_procedure = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->abbreviation = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->type_boamp = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->id_type_procedure_portail = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->categorie_procedure = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->delai_alerte = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->id_type_validation = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->service_validation = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->mapa = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->activer_mapa = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->libelle_type_procedure_fr = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->libelle_type_procedure_en = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->libelle_type_procedure_es = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->libelle_type_procedure_su = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->libelle_type_procedure_du = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->libelle_type_procedure_cz = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->libelle_type_procedure_ar = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->id_montant_mapa = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->code_recensement = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->depouillable_phase_consultation = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->consultation_transverse = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->tag_boamp = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->ao = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->mn = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->dc = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->autre = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->sad = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->accord_cadre = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->tag_name_mesure_avancement = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->abreviation_interface = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->libelle_type_procedure_it = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->publicite_types_form_xml = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->tag_name_chorus = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->equivalent_opoce = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->equivalent_boamp = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 37; // 37 = CommonTypeProcedureOrganismePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTypeProcedureOrganisme object", $e);
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
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTypeProcedureOrganismePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTypeProcedureOrganismeQuery::create()
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
            $con = Propel::getConnection(CommonTypeProcedureOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTypeProcedureOrganismePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE;
        if (null !== $this->id_type_procedure) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_procedure`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ABBREVIATION)) {
            $modifiedColumns[':p' . $index++]  = '`abbreviation`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::TYPE_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`type_boamp`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE_PORTAIL)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_procedure_portail`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::CATEGORIE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`categorie_procedure`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::DELAI_ALERTE)) {
            $modifiedColumns[':p' . $index++]  = '`delai_alerte`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ID_TYPE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_validation`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::SERVICE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`service_validation`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::MAPA)) {
            $modifiedColumns[':p' . $index++]  = '`mapa`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ACTIVER_MAPA)) {
            $modifiedColumns[':p' . $index++]  = '`activer_mapa`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_fr`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_en`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_es`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_su`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_du`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_cz`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_ar`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ID_MONTANT_MAPA)) {
            $modifiedColumns[':p' . $index++]  = '`id_montant_mapa`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::CODE_RECENSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`code_recensement`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`depouillable_phase_consultation`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_transverse`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::TAG_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`tag_Boamp`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::AO)) {
            $modifiedColumns[':p' . $index++]  = '`ao`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::MN)) {
            $modifiedColumns[':p' . $index++]  = '`mn`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::DC)) {
            $modifiedColumns[':p' . $index++]  = '`dc`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::AUTRE)) {
            $modifiedColumns[':p' . $index++]  = '`autre`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::SAD)) {
            $modifiedColumns[':p' . $index++]  = '`sad`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ACCORD_CADRE)) {
            $modifiedColumns[':p' . $index++]  = '`accord_cadre`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::TAG_NAME_MESURE_AVANCEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`tag_name_mesure_avancement`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ABREVIATION_INTERFACE)) {
            $modifiedColumns[':p' . $index++]  = '`abreviation_interface`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_it`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::PUBLICITE_TYPES_FORM_XML)) {
            $modifiedColumns[':p' . $index++]  = '`publicite_types_form_xml`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::TAG_NAME_CHORUS)) {
            $modifiedColumns[':p' . $index++]  = '`tag_name_chorus`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::EQUIVALENT_OPOCE)) {
            $modifiedColumns[':p' . $index++]  = '`equivalent_opoce`';
        }
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::EQUIVALENT_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`equivalent_boamp`';
        }

        $sql = sprintf(
            'INSERT INTO `Type_Procedure_Organisme` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_type_procedure`':						
                        $stmt->bindValue($identifier, $this->id_type_procedure, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`libelle_type_procedure`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure, PDO::PARAM_STR);
                        break;
                    case '`abbreviation`':						
                        $stmt->bindValue($identifier, $this->abbreviation, PDO::PARAM_STR);
                        break;
                    case '`type_boamp`':						
                        $stmt->bindValue($identifier, $this->type_boamp, PDO::PARAM_INT);
                        break;
                    case '`id_type_procedure_portail`':						
                        $stmt->bindValue($identifier, $this->id_type_procedure_portail, PDO::PARAM_INT);
                        break;
                    case '`categorie_procedure`':						
                        $stmt->bindValue($identifier, $this->categorie_procedure, PDO::PARAM_INT);
                        break;
                    case '`delai_alerte`':						
                        $stmt->bindValue($identifier, $this->delai_alerte, PDO::PARAM_INT);
                        break;
                    case '`id_type_validation`':						
                        $stmt->bindValue($identifier, $this->id_type_validation, PDO::PARAM_INT);
                        break;
                    case '`service_validation`':						
                        $stmt->bindValue($identifier, $this->service_validation, PDO::PARAM_INT);
                        break;
                    case '`mapa`':						
                        $stmt->bindValue($identifier, $this->mapa, PDO::PARAM_STR);
                        break;
                    case '`activer_mapa`':						
                        $stmt->bindValue($identifier, $this->activer_mapa, PDO::PARAM_STR);
                        break;
                    case '`libelle_type_procedure_fr`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure_fr, PDO::PARAM_STR);
                        break;
                    case '`libelle_type_procedure_en`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure_en, PDO::PARAM_STR);
                        break;
                    case '`libelle_type_procedure_es`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure_es, PDO::PARAM_STR);
                        break;
                    case '`libelle_type_procedure_su`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure_su, PDO::PARAM_STR);
                        break;
                    case '`libelle_type_procedure_du`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure_du, PDO::PARAM_STR);
                        break;
                    case '`libelle_type_procedure_cz`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure_cz, PDO::PARAM_STR);
                        break;
                    case '`libelle_type_procedure_ar`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure_ar, PDO::PARAM_STR);
                        break;
                    case '`id_montant_mapa`':						
                        $stmt->bindValue($identifier, $this->id_montant_mapa, PDO::PARAM_INT);
                        break;
                    case '`code_recensement`':						
                        $stmt->bindValue($identifier, $this->code_recensement, PDO::PARAM_STR);
                        break;
                    case '`depouillable_phase_consultation`':						
                        $stmt->bindValue($identifier, $this->depouillable_phase_consultation, PDO::PARAM_STR);
                        break;
                    case '`consultation_transverse`':						
                        $stmt->bindValue($identifier, $this->consultation_transverse, PDO::PARAM_STR);
                        break;
                    case '`tag_Boamp`':						
                        $stmt->bindValue($identifier, $this->tag_boamp, PDO::PARAM_STR);
                        break;
                    case '`ao`':						
                        $stmt->bindValue($identifier, $this->ao, PDO::PARAM_STR);
                        break;
                    case '`mn`':						
                        $stmt->bindValue($identifier, $this->mn, PDO::PARAM_STR);
                        break;
                    case '`dc`':						
                        $stmt->bindValue($identifier, $this->dc, PDO::PARAM_STR);
                        break;
                    case '`autre`':						
                        $stmt->bindValue($identifier, $this->autre, PDO::PARAM_STR);
                        break;
                    case '`sad`':						
                        $stmt->bindValue($identifier, $this->sad, PDO::PARAM_STR);
                        break;
                    case '`accord_cadre`':						
                        $stmt->bindValue($identifier, $this->accord_cadre, PDO::PARAM_STR);
                        break;
                    case '`tag_name_mesure_avancement`':						
                        $stmt->bindValue($identifier, $this->tag_name_mesure_avancement, PDO::PARAM_STR);
                        break;
                    case '`abreviation_interface`':						
                        $stmt->bindValue($identifier, $this->abreviation_interface, PDO::PARAM_STR);
                        break;
                    case '`libelle_type_procedure_it`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure_it, PDO::PARAM_STR);
                        break;
                    case '`publicite_types_form_xml`':						
                        $stmt->bindValue($identifier, $this->publicite_types_form_xml, PDO::PARAM_STR);
                        break;
                    case '`tag_name_chorus`':						
                        $stmt->bindValue($identifier, $this->tag_name_chorus, PDO::PARAM_STR);
                        break;
                    case '`equivalent_opoce`':						
                        $stmt->bindValue($identifier, $this->equivalent_opoce, PDO::PARAM_STR);
                        break;
                    case '`equivalent_boamp`':						
                        $stmt->bindValue($identifier, $this->equivalent_boamp, PDO::PARAM_STR);
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
        $this->setIdTypeProcedure($pk);

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


            if (($retval = CommonTypeProcedureOrganismePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTypeProcedureOrganismePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTypeProcedure();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getLibelleTypeProcedure();
                break;
            case 3:
                return $this->getAbbreviation();
                break;
            case 4:
                return $this->getTypeBoamp();
                break;
            case 5:
                return $this->getIdTypeProcedurePortail();
                break;
            case 6:
                return $this->getCategorieProcedure();
                break;
            case 7:
                return $this->getDelaiAlerte();
                break;
            case 8:
                return $this->getIdTypeValidation();
                break;
            case 9:
                return $this->getServiceValidation();
                break;
            case 10:
                return $this->getMapa();
                break;
            case 11:
                return $this->getActiverMapa();
                break;
            case 12:
                return $this->getLibelleTypeProcedureFr();
                break;
            case 13:
                return $this->getLibelleTypeProcedureEn();
                break;
            case 14:
                return $this->getLibelleTypeProcedureEs();
                break;
            case 15:
                return $this->getLibelleTypeProcedureSu();
                break;
            case 16:
                return $this->getLibelleTypeProcedureDu();
                break;
            case 17:
                return $this->getLibelleTypeProcedureCz();
                break;
            case 18:
                return $this->getLibelleTypeProcedureAr();
                break;
            case 19:
                return $this->getIdMontantMapa();
                break;
            case 20:
                return $this->getCodeRecensement();
                break;
            case 21:
                return $this->getDepouillablePhaseConsultation();
                break;
            case 22:
                return $this->getConsultationTransverse();
                break;
            case 23:
                return $this->getTagBoamp();
                break;
            case 24:
                return $this->getAo();
                break;
            case 25:
                return $this->getMn();
                break;
            case 26:
                return $this->getDc();
                break;
            case 27:
                return $this->getAutre();
                break;
            case 28:
                return $this->getSad();
                break;
            case 29:
                return $this->getAccordCadre();
                break;
            case 30:
                return $this->getTagNameMesureAvancement();
                break;
            case 31:
                return $this->getAbreviationInterface();
                break;
            case 32:
                return $this->getLibelleTypeProcedureIt();
                break;
            case 33:
                return $this->getPubliciteTypesFormXml();
                break;
            case 34:
                return $this->getTagNameChorus();
                break;
            case 35:
                return $this->getEquivalentOpoce();
                break;
            case 36:
                return $this->getEquivalentBoamp();
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
        if (isset($alreadyDumpedObjects['CommonTypeProcedureOrganisme'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTypeProcedureOrganisme'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTypeProcedureOrganismePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTypeProcedure(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getLibelleTypeProcedure(),
            $keys[3] => $this->getAbbreviation(),
            $keys[4] => $this->getTypeBoamp(),
            $keys[5] => $this->getIdTypeProcedurePortail(),
            $keys[6] => $this->getCategorieProcedure(),
            $keys[7] => $this->getDelaiAlerte(),
            $keys[8] => $this->getIdTypeValidation(),
            $keys[9] => $this->getServiceValidation(),
            $keys[10] => $this->getMapa(),
            $keys[11] => $this->getActiverMapa(),
            $keys[12] => $this->getLibelleTypeProcedureFr(),
            $keys[13] => $this->getLibelleTypeProcedureEn(),
            $keys[14] => $this->getLibelleTypeProcedureEs(),
            $keys[15] => $this->getLibelleTypeProcedureSu(),
            $keys[16] => $this->getLibelleTypeProcedureDu(),
            $keys[17] => $this->getLibelleTypeProcedureCz(),
            $keys[18] => $this->getLibelleTypeProcedureAr(),
            $keys[19] => $this->getIdMontantMapa(),
            $keys[20] => $this->getCodeRecensement(),
            $keys[21] => $this->getDepouillablePhaseConsultation(),
            $keys[22] => $this->getConsultationTransverse(),
            $keys[23] => $this->getTagBoamp(),
            $keys[24] => $this->getAo(),
            $keys[25] => $this->getMn(),
            $keys[26] => $this->getDc(),
            $keys[27] => $this->getAutre(),
            $keys[28] => $this->getSad(),
            $keys[29] => $this->getAccordCadre(),
            $keys[30] => $this->getTagNameMesureAvancement(),
            $keys[31] => $this->getAbreviationInterface(),
            $keys[32] => $this->getLibelleTypeProcedureIt(),
            $keys[33] => $this->getPubliciteTypesFormXml(),
            $keys[34] => $this->getTagNameChorus(),
            $keys[35] => $this->getEquivalentOpoce(),
            $keys[36] => $this->getEquivalentBoamp(),
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
        $pos = CommonTypeProcedureOrganismePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTypeProcedure($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setLibelleTypeProcedure($value);
                break;
            case 3:
                $this->setAbbreviation($value);
                break;
            case 4:
                $this->setTypeBoamp($value);
                break;
            case 5:
                $this->setIdTypeProcedurePortail($value);
                break;
            case 6:
                $this->setCategorieProcedure($value);
                break;
            case 7:
                $this->setDelaiAlerte($value);
                break;
            case 8:
                $this->setIdTypeValidation($value);
                break;
            case 9:
                $this->setServiceValidation($value);
                break;
            case 10:
                $this->setMapa($value);
                break;
            case 11:
                $this->setActiverMapa($value);
                break;
            case 12:
                $this->setLibelleTypeProcedureFr($value);
                break;
            case 13:
                $this->setLibelleTypeProcedureEn($value);
                break;
            case 14:
                $this->setLibelleTypeProcedureEs($value);
                break;
            case 15:
                $this->setLibelleTypeProcedureSu($value);
                break;
            case 16:
                $this->setLibelleTypeProcedureDu($value);
                break;
            case 17:
                $this->setLibelleTypeProcedureCz($value);
                break;
            case 18:
                $this->setLibelleTypeProcedureAr($value);
                break;
            case 19:
                $this->setIdMontantMapa($value);
                break;
            case 20:
                $this->setCodeRecensement($value);
                break;
            case 21:
                $this->setDepouillablePhaseConsultation($value);
                break;
            case 22:
                $this->setConsultationTransverse($value);
                break;
            case 23:
                $this->setTagBoamp($value);
                break;
            case 24:
                $this->setAo($value);
                break;
            case 25:
                $this->setMn($value);
                break;
            case 26:
                $this->setDc($value);
                break;
            case 27:
                $this->setAutre($value);
                break;
            case 28:
                $this->setSad($value);
                break;
            case 29:
                $this->setAccordCadre($value);
                break;
            case 30:
                $this->setTagNameMesureAvancement($value);
                break;
            case 31:
                $this->setAbreviationInterface($value);
                break;
            case 32:
                $this->setLibelleTypeProcedureIt($value);
                break;
            case 33:
                $this->setPubliciteTypesFormXml($value);
                break;
            case 34:
                $this->setTagNameChorus($value);
                break;
            case 35:
                $this->setEquivalentOpoce($value);
                break;
            case 36:
                $this->setEquivalentBoamp($value);
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
        $keys = CommonTypeProcedureOrganismePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTypeProcedure($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelleTypeProcedure($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAbbreviation($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTypeBoamp($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdTypeProcedurePortail($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCategorieProcedure($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDelaiAlerte($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdTypeValidation($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setServiceValidation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setMapa($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setActiverMapa($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setLibelleTypeProcedureFr($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLibelleTypeProcedureEn($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLibelleTypeProcedureEs($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setLibelleTypeProcedureSu($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLibelleTypeProcedureDu($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLibelleTypeProcedureCz($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLibelleTypeProcedureAr($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setIdMontantMapa($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setCodeRecensement($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDepouillablePhaseConsultation($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setConsultationTransverse($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTagBoamp($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAo($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setMn($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDc($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setAutre($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setSad($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setAccordCadre($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setTagNameMesureAvancement($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setAbreviationInterface($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setLibelleTypeProcedureIt($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setPubliciteTypesFormXml($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setTagNameChorus($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setEquivalentOpoce($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setEquivalentBoamp($arr[$keys[36]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTypeProcedureOrganismePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE)) $criteria->add(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ORGANISME)) $criteria->add(CommonTypeProcedureOrganismePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE)) $criteria->add(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE, $this->libelle_type_procedure);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ABBREVIATION)) $criteria->add(CommonTypeProcedureOrganismePeer::ABBREVIATION, $this->abbreviation);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::TYPE_BOAMP)) $criteria->add(CommonTypeProcedureOrganismePeer::TYPE_BOAMP, $this->type_boamp);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE_PORTAIL)) $criteria->add(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE_PORTAIL, $this->id_type_procedure_portail);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::CATEGORIE_PROCEDURE)) $criteria->add(CommonTypeProcedureOrganismePeer::CATEGORIE_PROCEDURE, $this->categorie_procedure);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::DELAI_ALERTE)) $criteria->add(CommonTypeProcedureOrganismePeer::DELAI_ALERTE, $this->delai_alerte);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ID_TYPE_VALIDATION)) $criteria->add(CommonTypeProcedureOrganismePeer::ID_TYPE_VALIDATION, $this->id_type_validation);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::SERVICE_VALIDATION)) $criteria->add(CommonTypeProcedureOrganismePeer::SERVICE_VALIDATION, $this->service_validation);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::MAPA)) $criteria->add(CommonTypeProcedureOrganismePeer::MAPA, $this->mapa);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ACTIVER_MAPA)) $criteria->add(CommonTypeProcedureOrganismePeer::ACTIVER_MAPA, $this->activer_mapa);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_FR)) $criteria->add(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_FR, $this->libelle_type_procedure_fr);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_EN)) $criteria->add(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_EN, $this->libelle_type_procedure_en);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_ES)) $criteria->add(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_ES, $this->libelle_type_procedure_es);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_SU)) $criteria->add(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_SU, $this->libelle_type_procedure_su);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_DU)) $criteria->add(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_DU, $this->libelle_type_procedure_du);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_CZ)) $criteria->add(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_CZ, $this->libelle_type_procedure_cz);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_AR)) $criteria->add(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_AR, $this->libelle_type_procedure_ar);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ID_MONTANT_MAPA)) $criteria->add(CommonTypeProcedureOrganismePeer::ID_MONTANT_MAPA, $this->id_montant_mapa);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::CODE_RECENSEMENT)) $criteria->add(CommonTypeProcedureOrganismePeer::CODE_RECENSEMENT, $this->code_recensement);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION)) $criteria->add(CommonTypeProcedureOrganismePeer::DEPOUILLABLE_PHASE_CONSULTATION, $this->depouillable_phase_consultation);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE)) $criteria->add(CommonTypeProcedureOrganismePeer::CONSULTATION_TRANSVERSE, $this->consultation_transverse);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::TAG_BOAMP)) $criteria->add(CommonTypeProcedureOrganismePeer::TAG_BOAMP, $this->tag_boamp);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::AO)) $criteria->add(CommonTypeProcedureOrganismePeer::AO, $this->ao);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::MN)) $criteria->add(CommonTypeProcedureOrganismePeer::MN, $this->mn);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::DC)) $criteria->add(CommonTypeProcedureOrganismePeer::DC, $this->dc);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::AUTRE)) $criteria->add(CommonTypeProcedureOrganismePeer::AUTRE, $this->autre);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::SAD)) $criteria->add(CommonTypeProcedureOrganismePeer::SAD, $this->sad);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ACCORD_CADRE)) $criteria->add(CommonTypeProcedureOrganismePeer::ACCORD_CADRE, $this->accord_cadre);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::TAG_NAME_MESURE_AVANCEMENT)) $criteria->add(CommonTypeProcedureOrganismePeer::TAG_NAME_MESURE_AVANCEMENT, $this->tag_name_mesure_avancement);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::ABREVIATION_INTERFACE)) $criteria->add(CommonTypeProcedureOrganismePeer::ABREVIATION_INTERFACE, $this->abreviation_interface);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_IT)) $criteria->add(CommonTypeProcedureOrganismePeer::LIBELLE_TYPE_PROCEDURE_IT, $this->libelle_type_procedure_it);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::PUBLICITE_TYPES_FORM_XML)) $criteria->add(CommonTypeProcedureOrganismePeer::PUBLICITE_TYPES_FORM_XML, $this->publicite_types_form_xml);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::TAG_NAME_CHORUS)) $criteria->add(CommonTypeProcedureOrganismePeer::TAG_NAME_CHORUS, $this->tag_name_chorus);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::EQUIVALENT_OPOCE)) $criteria->add(CommonTypeProcedureOrganismePeer::EQUIVALENT_OPOCE, $this->equivalent_opoce);
        if ($this->isColumnModified(CommonTypeProcedureOrganismePeer::EQUIVALENT_BOAMP)) $criteria->add(CommonTypeProcedureOrganismePeer::EQUIVALENT_BOAMP, $this->equivalent_boamp);

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
        $criteria = new Criteria(CommonTypeProcedureOrganismePeer::DATABASE_NAME);
        $criteria->add(CommonTypeProcedureOrganismePeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        $criteria->add(CommonTypeProcedureOrganismePeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdTypeProcedure();
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
        $this->setIdTypeProcedure($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdTypeProcedure()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTypeProcedureOrganisme (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setLibelleTypeProcedure($this->getLibelleTypeProcedure());
        $copyObj->setAbbreviation($this->getAbbreviation());
        $copyObj->setTypeBoamp($this->getTypeBoamp());
        $copyObj->setIdTypeProcedurePortail($this->getIdTypeProcedurePortail());
        $copyObj->setCategorieProcedure($this->getCategorieProcedure());
        $copyObj->setDelaiAlerte($this->getDelaiAlerte());
        $copyObj->setIdTypeValidation($this->getIdTypeValidation());
        $copyObj->setServiceValidation($this->getServiceValidation());
        $copyObj->setMapa($this->getMapa());
        $copyObj->setActiverMapa($this->getActiverMapa());
        $copyObj->setLibelleTypeProcedureFr($this->getLibelleTypeProcedureFr());
        $copyObj->setLibelleTypeProcedureEn($this->getLibelleTypeProcedureEn());
        $copyObj->setLibelleTypeProcedureEs($this->getLibelleTypeProcedureEs());
        $copyObj->setLibelleTypeProcedureSu($this->getLibelleTypeProcedureSu());
        $copyObj->setLibelleTypeProcedureDu($this->getLibelleTypeProcedureDu());
        $copyObj->setLibelleTypeProcedureCz($this->getLibelleTypeProcedureCz());
        $copyObj->setLibelleTypeProcedureAr($this->getLibelleTypeProcedureAr());
        $copyObj->setIdMontantMapa($this->getIdMontantMapa());
        $copyObj->setCodeRecensement($this->getCodeRecensement());
        $copyObj->setDepouillablePhaseConsultation($this->getDepouillablePhaseConsultation());
        $copyObj->setConsultationTransverse($this->getConsultationTransverse());
        $copyObj->setTagBoamp($this->getTagBoamp());
        $copyObj->setAo($this->getAo());
        $copyObj->setMn($this->getMn());
        $copyObj->setDc($this->getDc());
        $copyObj->setAutre($this->getAutre());
        $copyObj->setSad($this->getSad());
        $copyObj->setAccordCadre($this->getAccordCadre());
        $copyObj->setTagNameMesureAvancement($this->getTagNameMesureAvancement());
        $copyObj->setAbreviationInterface($this->getAbreviationInterface());
        $copyObj->setLibelleTypeProcedureIt($this->getLibelleTypeProcedureIt());
        $copyObj->setPubliciteTypesFormXml($this->getPubliciteTypesFormXml());
        $copyObj->setTagNameChorus($this->getTagNameChorus());
        $copyObj->setEquivalentOpoce($this->getEquivalentOpoce());
        $copyObj->setEquivalentBoamp($this->getEquivalentBoamp());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdTypeProcedure(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTypeProcedureOrganisme Clone of current object.
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
     * @return CommonTypeProcedureOrganismePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTypeProcedureOrganismePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_type_procedure = null;
        $this->organisme = null;
        $this->libelle_type_procedure = null;
        $this->abbreviation = null;
        $this->type_boamp = null;
        $this->id_type_procedure_portail = null;
        $this->categorie_procedure = null;
        $this->delai_alerte = null;
        $this->id_type_validation = null;
        $this->service_validation = null;
        $this->mapa = null;
        $this->activer_mapa = null;
        $this->libelle_type_procedure_fr = null;
        $this->libelle_type_procedure_en = null;
        $this->libelle_type_procedure_es = null;
        $this->libelle_type_procedure_su = null;
        $this->libelle_type_procedure_du = null;
        $this->libelle_type_procedure_cz = null;
        $this->libelle_type_procedure_ar = null;
        $this->id_montant_mapa = null;
        $this->code_recensement = null;
        $this->depouillable_phase_consultation = null;
        $this->consultation_transverse = null;
        $this->tag_boamp = null;
        $this->ao = null;
        $this->mn = null;
        $this->dc = null;
        $this->autre = null;
        $this->sad = null;
        $this->accord_cadre = null;
        $this->tag_name_mesure_avancement = null;
        $this->abreviation_interface = null;
        $this->libelle_type_procedure_it = null;
        $this->publicite_types_form_xml = null;
        $this->tag_name_chorus = null;
        $this->equivalent_opoce = null;
        $this->equivalent_boamp = null;
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
        return (string) $this->exportTo(CommonTypeProcedureOrganismePeer::DEFAULT_STRING_FORMAT);
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
