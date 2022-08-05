<?php


/**
 * Base class that represents a row from the 'TypeProcedure' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTypeProcedure extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTypeProcedurePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTypeProcedurePeer
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
     * The value for the libelle_type_procedure field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_type_procedure;

    /**
     * The value for the libelle_type_procedure_fr field.
     * @var        string
     */
    protected $libelle_type_procedure_fr;

    /**
     * The value for the libelle_type_procedure_en field.
     * @var        string
     */
    protected $libelle_type_procedure_en;

    /**
     * The value for the libelle_type_procedure_es field.
     * @var        string
     */
    protected $libelle_type_procedure_es;

    /**
     * The value for the libelle_type_procedure_su field.
     * @var        string
     */
    protected $libelle_type_procedure_su;

    /**
     * The value for the libelle_type_procedure_du field.
     * @var        string
     */
    protected $libelle_type_procedure_du;

    /**
     * The value for the libelle_type_procedure_cz field.
     * @var        string
     */
    protected $libelle_type_procedure_cz;

    /**
     * The value for the libelle_type_procedure_ar field.
     * @var        string
     */
    protected $libelle_type_procedure_ar;

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
     * The value for the categorie_procedure field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $categorie_procedure;

    /**
     * The value for the id_type_procedure_anm field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_type_procedure_anm;

    /**
     * The value for the delai_alerte field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $delai_alerte;

    /**
     * The value for the mapa field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $mapa;

    /**
     * The value for the consultation_transverse field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $consultation_transverse;

    /**
     * The value for the code_recensement field.
     * @var        string
     */
    protected $code_recensement;

    /**
     * The value for the abbreviation_portail_anm field.
     * @var        string
     */
    protected $abbreviation_portail_anm;

    /**
     * The value for the id_modele field.
     * @var        int
     */
    protected $id_modele;

    /**
     * The value for the libelle_type_procedure_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_type_procedure_it;

    /**
     * The value for the affichage_caution field.
     * @var        int
     */
    protected $affichage_caution;

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
        $this->libelle_type_procedure = '';
        $this->abbreviation = '';
        $this->type_boamp = 0;
        $this->categorie_procedure = 0;
        $this->id_type_procedure_anm = 0;
        $this->delai_alerte = 0;
        $this->mapa = '0';
        $this->consultation_transverse = '0';
        $this->libelle_type_procedure_it = '';
    }

    /**
     * Initializes internal state of BaseCommonTypeProcedure object.
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
     * Get the [libelle_type_procedure] column value.
     * 
     * @return string
     */
    public function getLibelleTypeProcedure()
    {

        return $this->libelle_type_procedure;
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
     * Get the [categorie_procedure] column value.
     * 
     * @return int
     */
    public function getCategorieProcedure()
    {

        return $this->categorie_procedure;
    }

    /**
     * Get the [id_type_procedure_anm] column value.
     * 
     * @return int
     */
    public function getIdTypeProcedureAnm()
    {

        return $this->id_type_procedure_anm;
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
     * Get the [mapa] column value.
     * 
     * @return string
     */
    public function getMapa()
    {

        return $this->mapa;
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
     * Get the [code_recensement] column value.
     * 
     * @return string
     */
    public function getCodeRecensement()
    {

        return $this->code_recensement;
    }

    /**
     * Get the [abbreviation_portail_anm] column value.
     * 
     * @return string
     */
    public function getAbbreviationPortailAnm()
    {

        return $this->abbreviation_portail_anm;
    }

    /**
     * Get the [id_modele] column value.
     * 
     * @return int
     */
    public function getIdModele()
    {

        return $this->id_modele;
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
     * Get the [affichage_caution] column value.
     * 
     * @return int
     */
    public function getAffichageCaution()
    {

        return $this->affichage_caution;
    }

    /**
     * Set the value of [id_type_procedure] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setIdTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_procedure !== $v) {
            $this->id_type_procedure = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::ID_TYPE_PROCEDURE;
        }


        return $this;
    } // setIdTypeProcedure()

    /**
     * Set the value of [libelle_type_procedure] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setLibelleTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure !== $v) {
            $this->libelle_type_procedure = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE;
        }


        return $this;
    } // setLibelleTypeProcedure()

    /**
     * Set the value of [libelle_type_procedure_fr] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_fr !== $v) {
            $this->libelle_type_procedure_fr = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_FR;
        }


        return $this;
    } // setLibelleTypeProcedureFr()

    /**
     * Set the value of [libelle_type_procedure_en] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_en !== $v) {
            $this->libelle_type_procedure_en = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_EN;
        }


        return $this;
    } // setLibelleTypeProcedureEn()

    /**
     * Set the value of [libelle_type_procedure_es] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_es !== $v) {
            $this->libelle_type_procedure_es = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_ES;
        }


        return $this;
    } // setLibelleTypeProcedureEs()

    /**
     * Set the value of [libelle_type_procedure_su] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_su !== $v) {
            $this->libelle_type_procedure_su = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_SU;
        }


        return $this;
    } // setLibelleTypeProcedureSu()

    /**
     * Set the value of [libelle_type_procedure_du] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_du !== $v) {
            $this->libelle_type_procedure_du = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_DU;
        }


        return $this;
    } // setLibelleTypeProcedureDu()

    /**
     * Set the value of [libelle_type_procedure_cz] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_cz !== $v) {
            $this->libelle_type_procedure_cz = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_CZ;
        }


        return $this;
    } // setLibelleTypeProcedureCz()

    /**
     * Set the value of [libelle_type_procedure_ar] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_ar !== $v) {
            $this->libelle_type_procedure_ar = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_AR;
        }


        return $this;
    } // setLibelleTypeProcedureAr()

    /**
     * Set the value of [abbreviation] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setAbbreviation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abbreviation !== $v) {
            $this->abbreviation = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::ABBREVIATION;
        }


        return $this;
    } // setAbbreviation()

    /**
     * Set the value of [type_boamp] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setTypeBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_boamp !== $v) {
            $this->type_boamp = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::TYPE_BOAMP;
        }


        return $this;
    } // setTypeBoamp()

    /**
     * Set the value of [categorie_procedure] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setCategorieProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->categorie_procedure !== $v) {
            $this->categorie_procedure = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::CATEGORIE_PROCEDURE;
        }


        return $this;
    } // setCategorieProcedure()

    /**
     * Set the value of [id_type_procedure_anm] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setIdTypeProcedureAnm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_procedure_anm !== $v) {
            $this->id_type_procedure_anm = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::ID_TYPE_PROCEDURE_ANM;
        }


        return $this;
    } // setIdTypeProcedureAnm()

    /**
     * Set the value of [delai_alerte] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setDelaiAlerte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_alerte !== $v) {
            $this->delai_alerte = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::DELAI_ALERTE;
        }


        return $this;
    } // setDelaiAlerte()

    /**
     * Set the value of [mapa] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setMapa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mapa !== $v) {
            $this->mapa = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::MAPA;
        }


        return $this;
    } // setMapa()

    /**
     * Set the value of [consultation_transverse] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setConsultationTransverse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultation_transverse !== $v) {
            $this->consultation_transverse = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE;
        }


        return $this;
    } // setConsultationTransverse()

    /**
     * Set the value of [code_recensement] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setCodeRecensement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_recensement !== $v) {
            $this->code_recensement = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::CODE_RECENSEMENT;
        }


        return $this;
    } // setCodeRecensement()

    /**
     * Set the value of [abbreviation_portail_anm] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setAbbreviationPortailAnm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->abbreviation_portail_anm !== $v) {
            $this->abbreviation_portail_anm = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::ABBREVIATION_PORTAIL_ANM;
        }


        return $this;
    } // setAbbreviationPortailAnm()

    /**
     * Set the value of [id_modele] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setIdModele($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_modele !== $v) {
            $this->id_modele = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::ID_MODELE;
        }


        return $this;
    } // setIdModele()

    /**
     * Set the value of [libelle_type_procedure_it] column.
     * 
     * @param string $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setLibelleTypeProcedureIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_type_procedure_it !== $v) {
            $this->libelle_type_procedure_it = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_IT;
        }


        return $this;
    } // setLibelleTypeProcedureIt()

    /**
     * Set the value of [affichage_caution] column.
     * 
     * @param int $v new value
     * @return CommonTypeProcedure The current object (for fluent API support)
     */
    public function setAffichageCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->affichage_caution !== $v) {
            $this->affichage_caution = $v;
            $this->modifiedColumns[] = CommonTypeProcedurePeer::AFFICHAGE_CAUTION;
        }


        return $this;
    } // setAffichageCaution()

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
            if ($this->libelle_type_procedure !== '') {
                return false;
            }

            if ($this->abbreviation !== '') {
                return false;
            }

            if ($this->type_boamp !== 0) {
                return false;
            }

            if ($this->categorie_procedure !== 0) {
                return false;
            }

            if ($this->id_type_procedure_anm !== 0) {
                return false;
            }

            if ($this->delai_alerte !== 0) {
                return false;
            }

            if ($this->mapa !== '0') {
                return false;
            }

            if ($this->consultation_transverse !== '0') {
                return false;
            }

            if ($this->libelle_type_procedure_it !== '') {
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
            $this->libelle_type_procedure = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->libelle_type_procedure_fr = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle_type_procedure_en = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->libelle_type_procedure_es = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->libelle_type_procedure_su = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->libelle_type_procedure_du = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->libelle_type_procedure_cz = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->libelle_type_procedure_ar = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->abbreviation = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->type_boamp = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->categorie_procedure = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->id_type_procedure_anm = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->delai_alerte = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->mapa = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->consultation_transverse = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->code_recensement = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->abbreviation_portail_anm = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->id_modele = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->libelle_type_procedure_it = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->affichage_caution = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = CommonTypeProcedurePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTypeProcedure object", $e);
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
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTypeProcedurePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTypeProcedureQuery::create()
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
            $con = Propel::getConnection(CommonTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTypeProcedurePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTypeProcedurePeer::ID_TYPE_PROCEDURE;
        if (null !== $this->id_type_procedure) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTypeProcedurePeer::ID_TYPE_PROCEDURE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_procedure`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_fr`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_en`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_es`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_su`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_du`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_cz`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_ar`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::ABBREVIATION)) {
            $modifiedColumns[':p' . $index++]  = '`abbreviation`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::TYPE_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`type_boamp`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::CATEGORIE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`categorie_procedure`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE_ANM)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_procedure_ANM`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::DELAI_ALERTE)) {
            $modifiedColumns[':p' . $index++]  = '`delai_alerte`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::MAPA)) {
            $modifiedColumns[':p' . $index++]  = '`mapa`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_transverse`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::CODE_RECENSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`code_recensement`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::ABBREVIATION_PORTAIL_ANM)) {
            $modifiedColumns[':p' . $index++]  = '`abbreviation_portail_ANM`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::ID_MODELE)) {
            $modifiedColumns[':p' . $index++]  = '`id_modele`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_type_procedure_it`';
        }
        if ($this->isColumnModified(CommonTypeProcedurePeer::AFFICHAGE_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`affichage_caution`';
        }

        $sql = sprintf(
            'INSERT INTO `TypeProcedure` (%s) VALUES (%s)',
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
                    case '`libelle_type_procedure`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure, PDO::PARAM_STR);
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
                    case '`abbreviation`':						
                        $stmt->bindValue($identifier, $this->abbreviation, PDO::PARAM_STR);
                        break;
                    case '`type_boamp`':						
                        $stmt->bindValue($identifier, $this->type_boamp, PDO::PARAM_INT);
                        break;
                    case '`categorie_procedure`':						
                        $stmt->bindValue($identifier, $this->categorie_procedure, PDO::PARAM_INT);
                        break;
                    case '`id_type_procedure_ANM`':						
                        $stmt->bindValue($identifier, $this->id_type_procedure_anm, PDO::PARAM_INT);
                        break;
                    case '`delai_alerte`':						
                        $stmt->bindValue($identifier, $this->delai_alerte, PDO::PARAM_INT);
                        break;
                    case '`mapa`':						
                        $stmt->bindValue($identifier, $this->mapa, PDO::PARAM_STR);
                        break;
                    case '`consultation_transverse`':						
                        $stmt->bindValue($identifier, $this->consultation_transverse, PDO::PARAM_STR);
                        break;
                    case '`code_recensement`':						
                        $stmt->bindValue($identifier, $this->code_recensement, PDO::PARAM_STR);
                        break;
                    case '`abbreviation_portail_ANM`':						
                        $stmt->bindValue($identifier, $this->abbreviation_portail_anm, PDO::PARAM_STR);
                        break;
                    case '`id_modele`':						
                        $stmt->bindValue($identifier, $this->id_modele, PDO::PARAM_INT);
                        break;
                    case '`libelle_type_procedure_it`':						
                        $stmt->bindValue($identifier, $this->libelle_type_procedure_it, PDO::PARAM_STR);
                        break;
                    case '`affichage_caution`':						
                        $stmt->bindValue($identifier, $this->affichage_caution, PDO::PARAM_INT);
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


            if (($retval = CommonTypeProcedurePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTypeProcedurePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLibelleTypeProcedure();
                break;
            case 2:
                return $this->getLibelleTypeProcedureFr();
                break;
            case 3:
                return $this->getLibelleTypeProcedureEn();
                break;
            case 4:
                return $this->getLibelleTypeProcedureEs();
                break;
            case 5:
                return $this->getLibelleTypeProcedureSu();
                break;
            case 6:
                return $this->getLibelleTypeProcedureDu();
                break;
            case 7:
                return $this->getLibelleTypeProcedureCz();
                break;
            case 8:
                return $this->getLibelleTypeProcedureAr();
                break;
            case 9:
                return $this->getAbbreviation();
                break;
            case 10:
                return $this->getTypeBoamp();
                break;
            case 11:
                return $this->getCategorieProcedure();
                break;
            case 12:
                return $this->getIdTypeProcedureAnm();
                break;
            case 13:
                return $this->getDelaiAlerte();
                break;
            case 14:
                return $this->getMapa();
                break;
            case 15:
                return $this->getConsultationTransverse();
                break;
            case 16:
                return $this->getCodeRecensement();
                break;
            case 17:
                return $this->getAbbreviationPortailAnm();
                break;
            case 18:
                return $this->getIdModele();
                break;
            case 19:
                return $this->getLibelleTypeProcedureIt();
                break;
            case 20:
                return $this->getAffichageCaution();
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
        if (isset($alreadyDumpedObjects['CommonTypeProcedure'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTypeProcedure'][$this->getPrimaryKey()] = true;
        $keys = CommonTypeProcedurePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdTypeProcedure(),
            $keys[1] => $this->getLibelleTypeProcedure(),
            $keys[2] => $this->getLibelleTypeProcedureFr(),
            $keys[3] => $this->getLibelleTypeProcedureEn(),
            $keys[4] => $this->getLibelleTypeProcedureEs(),
            $keys[5] => $this->getLibelleTypeProcedureSu(),
            $keys[6] => $this->getLibelleTypeProcedureDu(),
            $keys[7] => $this->getLibelleTypeProcedureCz(),
            $keys[8] => $this->getLibelleTypeProcedureAr(),
            $keys[9] => $this->getAbbreviation(),
            $keys[10] => $this->getTypeBoamp(),
            $keys[11] => $this->getCategorieProcedure(),
            $keys[12] => $this->getIdTypeProcedureAnm(),
            $keys[13] => $this->getDelaiAlerte(),
            $keys[14] => $this->getMapa(),
            $keys[15] => $this->getConsultationTransverse(),
            $keys[16] => $this->getCodeRecensement(),
            $keys[17] => $this->getAbbreviationPortailAnm(),
            $keys[18] => $this->getIdModele(),
            $keys[19] => $this->getLibelleTypeProcedureIt(),
            $keys[20] => $this->getAffichageCaution(),
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
        $pos = CommonTypeProcedurePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLibelleTypeProcedure($value);
                break;
            case 2:
                $this->setLibelleTypeProcedureFr($value);
                break;
            case 3:
                $this->setLibelleTypeProcedureEn($value);
                break;
            case 4:
                $this->setLibelleTypeProcedureEs($value);
                break;
            case 5:
                $this->setLibelleTypeProcedureSu($value);
                break;
            case 6:
                $this->setLibelleTypeProcedureDu($value);
                break;
            case 7:
                $this->setLibelleTypeProcedureCz($value);
                break;
            case 8:
                $this->setLibelleTypeProcedureAr($value);
                break;
            case 9:
                $this->setAbbreviation($value);
                break;
            case 10:
                $this->setTypeBoamp($value);
                break;
            case 11:
                $this->setCategorieProcedure($value);
                break;
            case 12:
                $this->setIdTypeProcedureAnm($value);
                break;
            case 13:
                $this->setDelaiAlerte($value);
                break;
            case 14:
                $this->setMapa($value);
                break;
            case 15:
                $this->setConsultationTransverse($value);
                break;
            case 16:
                $this->setCodeRecensement($value);
                break;
            case 17:
                $this->setAbbreviationPortailAnm($value);
                break;
            case 18:
                $this->setIdModele($value);
                break;
            case 19:
                $this->setLibelleTypeProcedureIt($value);
                break;
            case 20:
                $this->setAffichageCaution($value);
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
        $keys = CommonTypeProcedurePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdTypeProcedure($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLibelleTypeProcedure($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLibelleTypeProcedureFr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelleTypeProcedureEn($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLibelleTypeProcedureEs($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLibelleTypeProcedureSu($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLibelleTypeProcedureDu($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLibelleTypeProcedureCz($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLibelleTypeProcedureAr($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAbbreviation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTypeBoamp($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCategorieProcedure($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdTypeProcedureAnm($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDelaiAlerte($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMapa($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setConsultationTransverse($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCodeRecensement($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAbbreviationPortailAnm($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdModele($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setLibelleTypeProcedureIt($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAffichageCaution($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTypeProcedurePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE)) $criteria->add(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE)) $criteria->add(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE, $this->libelle_type_procedure);
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_FR)) $criteria->add(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_FR, $this->libelle_type_procedure_fr);
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_EN)) $criteria->add(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_EN, $this->libelle_type_procedure_en);
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_ES)) $criteria->add(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_ES, $this->libelle_type_procedure_es);
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_SU)) $criteria->add(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_SU, $this->libelle_type_procedure_su);
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_DU)) $criteria->add(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_DU, $this->libelle_type_procedure_du);
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_CZ)) $criteria->add(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_CZ, $this->libelle_type_procedure_cz);
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_AR)) $criteria->add(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_AR, $this->libelle_type_procedure_ar);
        if ($this->isColumnModified(CommonTypeProcedurePeer::ABBREVIATION)) $criteria->add(CommonTypeProcedurePeer::ABBREVIATION, $this->abbreviation);
        if ($this->isColumnModified(CommonTypeProcedurePeer::TYPE_BOAMP)) $criteria->add(CommonTypeProcedurePeer::TYPE_BOAMP, $this->type_boamp);
        if ($this->isColumnModified(CommonTypeProcedurePeer::CATEGORIE_PROCEDURE)) $criteria->add(CommonTypeProcedurePeer::CATEGORIE_PROCEDURE, $this->categorie_procedure);
        if ($this->isColumnModified(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE_ANM)) $criteria->add(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE_ANM, $this->id_type_procedure_anm);
        if ($this->isColumnModified(CommonTypeProcedurePeer::DELAI_ALERTE)) $criteria->add(CommonTypeProcedurePeer::DELAI_ALERTE, $this->delai_alerte);
        if ($this->isColumnModified(CommonTypeProcedurePeer::MAPA)) $criteria->add(CommonTypeProcedurePeer::MAPA, $this->mapa);
        if ($this->isColumnModified(CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE)) $criteria->add(CommonTypeProcedurePeer::CONSULTATION_TRANSVERSE, $this->consultation_transverse);
        if ($this->isColumnModified(CommonTypeProcedurePeer::CODE_RECENSEMENT)) $criteria->add(CommonTypeProcedurePeer::CODE_RECENSEMENT, $this->code_recensement);
        if ($this->isColumnModified(CommonTypeProcedurePeer::ABBREVIATION_PORTAIL_ANM)) $criteria->add(CommonTypeProcedurePeer::ABBREVIATION_PORTAIL_ANM, $this->abbreviation_portail_anm);
        if ($this->isColumnModified(CommonTypeProcedurePeer::ID_MODELE)) $criteria->add(CommonTypeProcedurePeer::ID_MODELE, $this->id_modele);
        if ($this->isColumnModified(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_IT)) $criteria->add(CommonTypeProcedurePeer::LIBELLE_TYPE_PROCEDURE_IT, $this->libelle_type_procedure_it);
        if ($this->isColumnModified(CommonTypeProcedurePeer::AFFICHAGE_CAUTION)) $criteria->add(CommonTypeProcedurePeer::AFFICHAGE_CAUTION, $this->affichage_caution);

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
        $criteria = new Criteria(CommonTypeProcedurePeer::DATABASE_NAME);
        $criteria->add(CommonTypeProcedurePeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdTypeProcedure();
    }

    /**
     * Generic method to set the primary key (id_type_procedure column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdTypeProcedure($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdTypeProcedure();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTypeProcedure (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLibelleTypeProcedure($this->getLibelleTypeProcedure());
        $copyObj->setLibelleTypeProcedureFr($this->getLibelleTypeProcedureFr());
        $copyObj->setLibelleTypeProcedureEn($this->getLibelleTypeProcedureEn());
        $copyObj->setLibelleTypeProcedureEs($this->getLibelleTypeProcedureEs());
        $copyObj->setLibelleTypeProcedureSu($this->getLibelleTypeProcedureSu());
        $copyObj->setLibelleTypeProcedureDu($this->getLibelleTypeProcedureDu());
        $copyObj->setLibelleTypeProcedureCz($this->getLibelleTypeProcedureCz());
        $copyObj->setLibelleTypeProcedureAr($this->getLibelleTypeProcedureAr());
        $copyObj->setAbbreviation($this->getAbbreviation());
        $copyObj->setTypeBoamp($this->getTypeBoamp());
        $copyObj->setCategorieProcedure($this->getCategorieProcedure());
        $copyObj->setIdTypeProcedureAnm($this->getIdTypeProcedureAnm());
        $copyObj->setDelaiAlerte($this->getDelaiAlerte());
        $copyObj->setMapa($this->getMapa());
        $copyObj->setConsultationTransverse($this->getConsultationTransverse());
        $copyObj->setCodeRecensement($this->getCodeRecensement());
        $copyObj->setAbbreviationPortailAnm($this->getAbbreviationPortailAnm());
        $copyObj->setIdModele($this->getIdModele());
        $copyObj->setLibelleTypeProcedureIt($this->getLibelleTypeProcedureIt());
        $copyObj->setAffichageCaution($this->getAffichageCaution());
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
     * @return CommonTypeProcedure Clone of current object.
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
     * @return CommonTypeProcedurePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTypeProcedurePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_type_procedure = null;
        $this->libelle_type_procedure = null;
        $this->libelle_type_procedure_fr = null;
        $this->libelle_type_procedure_en = null;
        $this->libelle_type_procedure_es = null;
        $this->libelle_type_procedure_su = null;
        $this->libelle_type_procedure_du = null;
        $this->libelle_type_procedure_cz = null;
        $this->libelle_type_procedure_ar = null;
        $this->abbreviation = null;
        $this->type_boamp = null;
        $this->categorie_procedure = null;
        $this->id_type_procedure_anm = null;
        $this->delai_alerte = null;
        $this->mapa = null;
        $this->consultation_transverse = null;
        $this->code_recensement = null;
        $this->abbreviation_portail_anm = null;
        $this->id_modele = null;
        $this->libelle_type_procedure_it = null;
        $this->affichage_caution = null;
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
        return (string) $this->exportTo(CommonTypeProcedurePeer::DEFAULT_STRING_FORMAT);
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
