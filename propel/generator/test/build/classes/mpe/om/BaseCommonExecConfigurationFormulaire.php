<?php


/**
 * Base class that represents a row from the 'exec_configuration_formulaire' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecConfigurationFormulaire extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecConfigurationFormulairePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecConfigurationFormulairePeer
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
     * The value for the id_type_contrat field.
     * @var        int
     */
    protected $id_type_contrat;

    /**
     * The value for the montant_avance field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $montant_avance;

    /**
     * The value for the penalite field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $penalite;

    /**
     * The value for the delai_partiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $delai_partiel;

    /**
     * The value for the os_par_phase field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $os_par_phase;

    /**
     * The value for the montant_caution_definitive field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $montant_caution_definitive;

    /**
     * The value for the retenue_garantie field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $retenue_garantie;

    /**
     * The value for the periode_garantie field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $periode_garantie;

    /**
     * The value for the decomposition_phase field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $decomposition_phase;

    /**
     * The value for the checkliste_livrable field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $checkliste_livrable;

    /**
     * The value for the date_accusee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $date_accusee;

    /**
     * The value for the date_notification field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $date_notification;

    /**
     * The value for the mode_passaton field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $mode_passaton;

    /**
     * The value for the numero_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $numero_consultation;

    /**
     * The value for the reconductible field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $reconductible;

    /**
     * The value for the gestion_reception field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_reception;

    /**
     * The value for the gestion_litige field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $gestion_litige;

    /**
     * The value for the porte_reception field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $porte_reception;

    /**
     * The value for the type_reception field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_reception;

    /**
     * @var        CommonExecTypeContrat
     */
    protected $aCommonExecTypeContratRelatedByIdTypeContrat;

    /**
     * @var        CommonExecTypeContrat
     */
    protected $aCommonExecTypeContratRelatedByIdTypeContrat;

    /**
     * @var        CommonExecTypeContrat
     */
    protected $aCommonExecTypeContratRelatedByIdTypeContrat;

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
        $this->montant_avance = '0';
        $this->penalite = '0';
        $this->delai_partiel = '0';
        $this->os_par_phase = '0';
        $this->montant_caution_definitive = '0';
        $this->retenue_garantie = '0';
        $this->periode_garantie = '0';
        $this->decomposition_phase = '0';
        $this->checkliste_livrable = '0';
        $this->date_accusee = '0';
        $this->date_notification = '0';
        $this->mode_passaton = '0';
        $this->numero_consultation = '0';
        $this->reconductible = '0';
        $this->gestion_reception = '0';
        $this->gestion_litige = '0';
        $this->porte_reception = '0';
        $this->type_reception = '0';
    }

    /**
     * Initializes internal state of BaseCommonExecConfigurationFormulaire object.
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
     * Get the [id_type_contrat] column value.
     * 
     * @return int
     */
    public function getIdTypeContrat()
    {

        return $this->id_type_contrat;
    }

    /**
     * Get the [montant_avance] column value.
     * 
     * @return string
     */
    public function getMontantAvance()
    {

        return $this->montant_avance;
    }

    /**
     * Get the [penalite] column value.
     * 
     * @return string
     */
    public function getPenalite()
    {

        return $this->penalite;
    }

    /**
     * Get the [delai_partiel] column value.
     * 
     * @return string
     */
    public function getDelaiPartiel()
    {

        return $this->delai_partiel;
    }

    /**
     * Get the [os_par_phase] column value.
     * 
     * @return string
     */
    public function getOsParPhase()
    {

        return $this->os_par_phase;
    }

    /**
     * Get the [montant_caution_definitive] column value.
     * 
     * @return string
     */
    public function getMontantCautionDefinitive()
    {

        return $this->montant_caution_definitive;
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
     * Get the [periode_garantie] column value.
     * 
     * @return string
     */
    public function getPeriodeGarantie()
    {

        return $this->periode_garantie;
    }

    /**
     * Get the [decomposition_phase] column value.
     * 
     * @return string
     */
    public function getDecompositionPhase()
    {

        return $this->decomposition_phase;
    }

    /**
     * Get the [checkliste_livrable] column value.
     * 
     * @return string
     */
    public function getChecklisteLivrable()
    {

        return $this->checkliste_livrable;
    }

    /**
     * Get the [date_accusee] column value.
     * 
     * @return string
     */
    public function getDateAccusee()
    {

        return $this->date_accusee;
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
     * Get the [mode_passaton] column value.
     * 
     * @return string
     */
    public function getModePassaton()
    {

        return $this->mode_passaton;
    }

    /**
     * Get the [numero_consultation] column value.
     * 
     * @return string
     */
    public function getNumeroConsultation()
    {

        return $this->numero_consultation;
    }

    /**
     * Get the [reconductible] column value.
     * 
     * @return string
     */
    public function getReconductible()
    {

        return $this->reconductible;
    }

    /**
     * Get the [gestion_reception] column value.
     * 
     * @return string
     */
    public function getGestionReception()
    {

        return $this->gestion_reception;
    }

    /**
     * Get the [gestion_litige] column value.
     * 
     * @return string
     */
    public function getGestionLitige()
    {

        return $this->gestion_litige;
    }

    /**
     * Get the [porte_reception] column value.
     * 
     * @return string
     */
    public function getPorteReception()
    {

        return $this->porte_reception;
    }

    /**
     * Get the [type_reception] column value.
     * 
     * @return string
     */
    public function getTypeReception()
    {

        return $this->type_reception;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_type_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setIdTypeContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_contrat !== $v) {
            $this->id_type_contrat = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT;
        }

        if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null && $this->aCommonExecTypeContratRelatedByIdTypeContrat->getId() !== $v) {
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
        }

        if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null && $this->aCommonExecTypeContratRelatedByIdTypeContrat->getId() !== $v) {
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
        }

        if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null && $this->aCommonExecTypeContratRelatedByIdTypeContrat->getId() !== $v) {
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
        }


        return $this;
    } // setIdTypeContrat()

    /**
     * Set the value of [montant_avance] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setMontantAvance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_avance !== $v) {
            $this->montant_avance = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::MONTANT_AVANCE;
        }


        return $this;
    } // setMontantAvance()

    /**
     * Set the value of [penalite] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setPenalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->penalite !== $v) {
            $this->penalite = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::PENALITE;
        }


        return $this;
    } // setPenalite()

    /**
     * Set the value of [delai_partiel] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setDelaiPartiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->delai_partiel !== $v) {
            $this->delai_partiel = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::DELAI_PARTIEL;
        }


        return $this;
    } // setDelaiPartiel()

    /**
     * Set the value of [os_par_phase] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setOsParPhase($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->os_par_phase !== $v) {
            $this->os_par_phase = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::OS_PAR_PHASE;
        }


        return $this;
    } // setOsParPhase()

    /**
     * Set the value of [montant_caution_definitive] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setMontantCautionDefinitive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_caution_definitive !== $v) {
            $this->montant_caution_definitive = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE;
        }


        return $this;
    } // setMontantCautionDefinitive()

    /**
     * Set the value of [retenue_garantie] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setRetenueGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->retenue_garantie !== $v) {
            $this->retenue_garantie = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE;
        }


        return $this;
    } // setRetenueGarantie()

    /**
     * Set the value of [periode_garantie] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setPeriodeGarantie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->periode_garantie !== $v) {
            $this->periode_garantie = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE;
        }


        return $this;
    } // setPeriodeGarantie()

    /**
     * Set the value of [decomposition_phase] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setDecompositionPhase($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decomposition_phase !== $v) {
            $this->decomposition_phase = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE;
        }


        return $this;
    } // setDecompositionPhase()

    /**
     * Set the value of [checkliste_livrable] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setChecklisteLivrable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->checkliste_livrable !== $v) {
            $this->checkliste_livrable = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE;
        }


        return $this;
    } // setChecklisteLivrable()

    /**
     * Set the value of [date_accusee] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setDateAccusee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_accusee !== $v) {
            $this->date_accusee = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::DATE_ACCUSEE;
        }


        return $this;
    } // setDateAccusee()

    /**
     * Set the value of [date_notification] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setDateNotification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_notification !== $v) {
            $this->date_notification = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION;
        }


        return $this;
    } // setDateNotification()

    /**
     * Set the value of [mode_passaton] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setModePassaton($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mode_passaton !== $v) {
            $this->mode_passaton = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::MODE_PASSATON;
        }


        return $this;
    } // setModePassaton()

    /**
     * Set the value of [numero_consultation] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setNumeroConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_consultation !== $v) {
            $this->numero_consultation = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION;
        }


        return $this;
    } // setNumeroConsultation()

    /**
     * Set the value of [reconductible] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setReconductible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reconductible !== $v) {
            $this->reconductible = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::RECONDUCTIBLE;
        }


        return $this;
    } // setReconductible()

    /**
     * Set the value of [gestion_reception] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setGestionReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_reception !== $v) {
            $this->gestion_reception = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::GESTION_RECEPTION;
        }


        return $this;
    } // setGestionReception()

    /**
     * Set the value of [gestion_litige] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setGestionLitige($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gestion_litige !== $v) {
            $this->gestion_litige = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::GESTION_LITIGE;
        }


        return $this;
    } // setGestionLitige()

    /**
     * Set the value of [porte_reception] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setPorteReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->porte_reception !== $v) {
            $this->porte_reception = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::PORTE_RECEPTION;
        }


        return $this;
    } // setPorteReception()

    /**
     * Set the value of [type_reception] column.
     * 
     * @param string $v new value
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     */
    public function setTypeReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_reception !== $v) {
            $this->type_reception = $v;
            $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::TYPE_RECEPTION;
        }


        return $this;
    } // setTypeReception()

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
            if ($this->montant_avance !== '0') {
                return false;
            }

            if ($this->penalite !== '0') {
                return false;
            }

            if ($this->delai_partiel !== '0') {
                return false;
            }

            if ($this->os_par_phase !== '0') {
                return false;
            }

            if ($this->montant_caution_definitive !== '0') {
                return false;
            }

            if ($this->retenue_garantie !== '0') {
                return false;
            }

            if ($this->periode_garantie !== '0') {
                return false;
            }

            if ($this->decomposition_phase !== '0') {
                return false;
            }

            if ($this->checkliste_livrable !== '0') {
                return false;
            }

            if ($this->date_accusee !== '0') {
                return false;
            }

            if ($this->date_notification !== '0') {
                return false;
            }

            if ($this->mode_passaton !== '0') {
                return false;
            }

            if ($this->numero_consultation !== '0') {
                return false;
            }

            if ($this->reconductible !== '0') {
                return false;
            }

            if ($this->gestion_reception !== '0') {
                return false;
            }

            if ($this->gestion_litige !== '0') {
                return false;
            }

            if ($this->porte_reception !== '0') {
                return false;
            }

            if ($this->type_reception !== '0') {
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
            $this->id_type_contrat = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->montant_avance = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->penalite = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->delai_partiel = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->os_par_phase = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->montant_caution_definitive = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->retenue_garantie = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->periode_garantie = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->decomposition_phase = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->checkliste_livrable = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_accusee = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_notification = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->mode_passaton = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->numero_consultation = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->reconductible = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->gestion_reception = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->gestion_litige = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->porte_reception = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->type_reception = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = CommonExecConfigurationFormulairePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecConfigurationFormulaire object", $e);
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

        if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null && $this->id_type_contrat !== $this->aCommonExecTypeContratRelatedByIdTypeContrat->getId()) {
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
        }
        if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null && $this->id_type_contrat !== $this->aCommonExecTypeContratRelatedByIdTypeContrat->getId()) {
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
        }
        if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null && $this->id_type_contrat !== $this->aCommonExecTypeContratRelatedByIdTypeContrat->getId()) {
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
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
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecConfigurationFormulairePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
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
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecConfigurationFormulaireQuery::create()
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
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecConfigurationFormulairePeer::addInstanceToPool($this);
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

            if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null) {
                if ($this->aCommonExecTypeContratRelatedByIdTypeContrat->isModified() || $this->aCommonExecTypeContratRelatedByIdTypeContrat->isNew()) {
                    $affectedRows += $this->aCommonExecTypeContratRelatedByIdTypeContrat->save($con);
                }
                $this->setCommonExecTypeContratRelatedByIdTypeContrat($this->aCommonExecTypeContratRelatedByIdTypeContrat);
            }

            if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null) {
                if ($this->aCommonExecTypeContratRelatedByIdTypeContrat->isModified() || $this->aCommonExecTypeContratRelatedByIdTypeContrat->isNew()) {
                    $affectedRows += $this->aCommonExecTypeContratRelatedByIdTypeContrat->save($con);
                }
                $this->setCommonExecTypeContratRelatedByIdTypeContrat($this->aCommonExecTypeContratRelatedByIdTypeContrat);
            }

            if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null) {
                if ($this->aCommonExecTypeContratRelatedByIdTypeContrat->isModified() || $this->aCommonExecTypeContratRelatedByIdTypeContrat->isNew()) {
                    $affectedRows += $this->aCommonExecTypeContratRelatedByIdTypeContrat->save($con);
                }
                $this->setCommonExecTypeContratRelatedByIdTypeContrat($this->aCommonExecTypeContratRelatedByIdTypeContrat);
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

        $this->modifiedColumns[] = CommonExecConfigurationFormulairePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecConfigurationFormulairePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_contrat`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::MONTANT_AVANCE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_avance`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::PENALITE)) {
            $modifiedColumns[':p' . $index++]  = '`penalite`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::DELAI_PARTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`delai_partiel`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::OS_PAR_PHASE)) {
            $modifiedColumns[':p' . $index++]  = '`os_par_phase`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_caution_definitive`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`retenue_garantie`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE)) {
            $modifiedColumns[':p' . $index++]  = '`periode_garantie`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE)) {
            $modifiedColumns[':p' . $index++]  = '`decomposition_phase`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE)) {
            $modifiedColumns[':p' . $index++]  = '`checkliste_livrable`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::DATE_ACCUSEE)) {
            $modifiedColumns[':p' . $index++]  = '`date_accusee`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_notification`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::MODE_PASSATON)) {
            $modifiedColumns[':p' . $index++]  = '`mode_passaton`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`numero_consultation`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::RECONDUCTIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`reconductible`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::GESTION_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_reception`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::GESTION_LITIGE)) {
            $modifiedColumns[':p' . $index++]  = '`gestion_litige`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::PORTE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`porte_reception`';
        }
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::TYPE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`type_reception`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_configuration_formulaire` (%s) VALUES (%s)',
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
                    case '`id_type_contrat`':						
                        $stmt->bindValue($identifier, $this->id_type_contrat, PDO::PARAM_INT);
                        break;
                    case '`montant_avance`':						
                        $stmt->bindValue($identifier, $this->montant_avance, PDO::PARAM_STR);
                        break;
                    case '`penalite`':						
                        $stmt->bindValue($identifier, $this->penalite, PDO::PARAM_STR);
                        break;
                    case '`delai_partiel`':						
                        $stmt->bindValue($identifier, $this->delai_partiel, PDO::PARAM_STR);
                        break;
                    case '`os_par_phase`':						
                        $stmt->bindValue($identifier, $this->os_par_phase, PDO::PARAM_STR);
                        break;
                    case '`montant_caution_definitive`':						
                        $stmt->bindValue($identifier, $this->montant_caution_definitive, PDO::PARAM_STR);
                        break;
                    case '`retenue_garantie`':						
                        $stmt->bindValue($identifier, $this->retenue_garantie, PDO::PARAM_STR);
                        break;
                    case '`periode_garantie`':						
                        $stmt->bindValue($identifier, $this->periode_garantie, PDO::PARAM_STR);
                        break;
                    case '`decomposition_phase`':						
                        $stmt->bindValue($identifier, $this->decomposition_phase, PDO::PARAM_STR);
                        break;
                    case '`checkliste_livrable`':						
                        $stmt->bindValue($identifier, $this->checkliste_livrable, PDO::PARAM_STR);
                        break;
                    case '`date_accusee`':						
                        $stmt->bindValue($identifier, $this->date_accusee, PDO::PARAM_STR);
                        break;
                    case '`date_notification`':						
                        $stmt->bindValue($identifier, $this->date_notification, PDO::PARAM_STR);
                        break;
                    case '`mode_passaton`':						
                        $stmt->bindValue($identifier, $this->mode_passaton, PDO::PARAM_STR);
                        break;
                    case '`numero_consultation`':						
                        $stmt->bindValue($identifier, $this->numero_consultation, PDO::PARAM_STR);
                        break;
                    case '`reconductible`':						
                        $stmt->bindValue($identifier, $this->reconductible, PDO::PARAM_STR);
                        break;
                    case '`gestion_reception`':						
                        $stmt->bindValue($identifier, $this->gestion_reception, PDO::PARAM_STR);
                        break;
                    case '`gestion_litige`':						
                        $stmt->bindValue($identifier, $this->gestion_litige, PDO::PARAM_STR);
                        break;
                    case '`porte_reception`':						
                        $stmt->bindValue($identifier, $this->porte_reception, PDO::PARAM_STR);
                        break;
                    case '`type_reception`':						
                        $stmt->bindValue($identifier, $this->type_reception, PDO::PARAM_STR);
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

            if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null) {
                if (!$this->aCommonExecTypeContratRelatedByIdTypeContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecTypeContratRelatedByIdTypeContrat->getValidationFailures());
                }
            }

            if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null) {
                if (!$this->aCommonExecTypeContratRelatedByIdTypeContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecTypeContratRelatedByIdTypeContrat->getValidationFailures());
                }
            }

            if ($this->aCommonExecTypeContratRelatedByIdTypeContrat !== null) {
                if (!$this->aCommonExecTypeContratRelatedByIdTypeContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecTypeContratRelatedByIdTypeContrat->getValidationFailures());
                }
            }


            if (($retval = CommonExecConfigurationFormulairePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonExecConfigurationFormulairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdTypeContrat();
                break;
            case 2:
                return $this->getMontantAvance();
                break;
            case 3:
                return $this->getPenalite();
                break;
            case 4:
                return $this->getDelaiPartiel();
                break;
            case 5:
                return $this->getOsParPhase();
                break;
            case 6:
                return $this->getMontantCautionDefinitive();
                break;
            case 7:
                return $this->getRetenueGarantie();
                break;
            case 8:
                return $this->getPeriodeGarantie();
                break;
            case 9:
                return $this->getDecompositionPhase();
                break;
            case 10:
                return $this->getChecklisteLivrable();
                break;
            case 11:
                return $this->getDateAccusee();
                break;
            case 12:
                return $this->getDateNotification();
                break;
            case 13:
                return $this->getModePassaton();
                break;
            case 14:
                return $this->getNumeroConsultation();
                break;
            case 15:
                return $this->getReconductible();
                break;
            case 16:
                return $this->getGestionReception();
                break;
            case 17:
                return $this->getGestionLitige();
                break;
            case 18:
                return $this->getPorteReception();
                break;
            case 19:
                return $this->getTypeReception();
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
        if (isset($alreadyDumpedObjects['CommonExecConfigurationFormulaire'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecConfigurationFormulaire'][$this->getPrimaryKey()] = true;
        $keys = CommonExecConfigurationFormulairePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdTypeContrat(),
            $keys[2] => $this->getMontantAvance(),
            $keys[3] => $this->getPenalite(),
            $keys[4] => $this->getDelaiPartiel(),
            $keys[5] => $this->getOsParPhase(),
            $keys[6] => $this->getMontantCautionDefinitive(),
            $keys[7] => $this->getRetenueGarantie(),
            $keys[8] => $this->getPeriodeGarantie(),
            $keys[9] => $this->getDecompositionPhase(),
            $keys[10] => $this->getChecklisteLivrable(),
            $keys[11] => $this->getDateAccusee(),
            $keys[12] => $this->getDateNotification(),
            $keys[13] => $this->getModePassaton(),
            $keys[14] => $this->getNumeroConsultation(),
            $keys[15] => $this->getReconductible(),
            $keys[16] => $this->getGestionReception(),
            $keys[17] => $this->getGestionLitige(),
            $keys[18] => $this->getPorteReception(),
            $keys[19] => $this->getTypeReception(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonExecTypeContratRelatedByIdTypeContrat) {
                $result['CommonExecTypeContratRelatedByIdTypeContrat'] = $this->aCommonExecTypeContratRelatedByIdTypeContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecTypeContratRelatedByIdTypeContrat) {
                $result['CommonExecTypeContratRelatedByIdTypeContrat'] = $this->aCommonExecTypeContratRelatedByIdTypeContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonExecTypeContratRelatedByIdTypeContrat) {
                $result['CommonExecTypeContratRelatedByIdTypeContrat'] = $this->aCommonExecTypeContratRelatedByIdTypeContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonExecConfigurationFormulairePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdTypeContrat($value);
                break;
            case 2:
                $this->setMontantAvance($value);
                break;
            case 3:
                $this->setPenalite($value);
                break;
            case 4:
                $this->setDelaiPartiel($value);
                break;
            case 5:
                $this->setOsParPhase($value);
                break;
            case 6:
                $this->setMontantCautionDefinitive($value);
                break;
            case 7:
                $this->setRetenueGarantie($value);
                break;
            case 8:
                $this->setPeriodeGarantie($value);
                break;
            case 9:
                $this->setDecompositionPhase($value);
                break;
            case 10:
                $this->setChecklisteLivrable($value);
                break;
            case 11:
                $this->setDateAccusee($value);
                break;
            case 12:
                $this->setDateNotification($value);
                break;
            case 13:
                $this->setModePassaton($value);
                break;
            case 14:
                $this->setNumeroConsultation($value);
                break;
            case 15:
                $this->setReconductible($value);
                break;
            case 16:
                $this->setGestionReception($value);
                break;
            case 17:
                $this->setGestionLitige($value);
                break;
            case 18:
                $this->setPorteReception($value);
                break;
            case 19:
                $this->setTypeReception($value);
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
        $keys = CommonExecConfigurationFormulairePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdTypeContrat($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMontantAvance($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPenalite($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDelaiPartiel($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setOsParPhase($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMontantCautionDefinitive($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRetenueGarantie($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPeriodeGarantie($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDecompositionPhase($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setChecklisteLivrable($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateAccusee($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateNotification($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setModePassaton($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNumeroConsultation($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setReconductible($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setGestionReception($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setGestionLitige($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setPorteReception($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTypeReception($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecConfigurationFormulairePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::ID)) $criteria->add(CommonExecConfigurationFormulairePeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT)) $criteria->add(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, $this->id_type_contrat);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::MONTANT_AVANCE)) $criteria->add(CommonExecConfigurationFormulairePeer::MONTANT_AVANCE, $this->montant_avance);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::PENALITE)) $criteria->add(CommonExecConfigurationFormulairePeer::PENALITE, $this->penalite);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::DELAI_PARTIEL)) $criteria->add(CommonExecConfigurationFormulairePeer::DELAI_PARTIEL, $this->delai_partiel);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::OS_PAR_PHASE)) $criteria->add(CommonExecConfigurationFormulairePeer::OS_PAR_PHASE, $this->os_par_phase);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE)) $criteria->add(CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE, $this->montant_caution_definitive);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE)) $criteria->add(CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE, $this->retenue_garantie);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE)) $criteria->add(CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE, $this->periode_garantie);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE)) $criteria->add(CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE, $this->decomposition_phase);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE)) $criteria->add(CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE, $this->checkliste_livrable);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::DATE_ACCUSEE)) $criteria->add(CommonExecConfigurationFormulairePeer::DATE_ACCUSEE, $this->date_accusee);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION)) $criteria->add(CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION, $this->date_notification);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::MODE_PASSATON)) $criteria->add(CommonExecConfigurationFormulairePeer::MODE_PASSATON, $this->mode_passaton);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION)) $criteria->add(CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION, $this->numero_consultation);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::RECONDUCTIBLE)) $criteria->add(CommonExecConfigurationFormulairePeer::RECONDUCTIBLE, $this->reconductible);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::GESTION_RECEPTION)) $criteria->add(CommonExecConfigurationFormulairePeer::GESTION_RECEPTION, $this->gestion_reception);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::GESTION_LITIGE)) $criteria->add(CommonExecConfigurationFormulairePeer::GESTION_LITIGE, $this->gestion_litige);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::PORTE_RECEPTION)) $criteria->add(CommonExecConfigurationFormulairePeer::PORTE_RECEPTION, $this->porte_reception);
        if ($this->isColumnModified(CommonExecConfigurationFormulairePeer::TYPE_RECEPTION)) $criteria->add(CommonExecConfigurationFormulairePeer::TYPE_RECEPTION, $this->type_reception);

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
        $criteria = new Criteria(CommonExecConfigurationFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonExecConfigurationFormulairePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecConfigurationFormulaire (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTypeContrat($this->getIdTypeContrat());
        $copyObj->setMontantAvance($this->getMontantAvance());
        $copyObj->setPenalite($this->getPenalite());
        $copyObj->setDelaiPartiel($this->getDelaiPartiel());
        $copyObj->setOsParPhase($this->getOsParPhase());
        $copyObj->setMontantCautionDefinitive($this->getMontantCautionDefinitive());
        $copyObj->setRetenueGarantie($this->getRetenueGarantie());
        $copyObj->setPeriodeGarantie($this->getPeriodeGarantie());
        $copyObj->setDecompositionPhase($this->getDecompositionPhase());
        $copyObj->setChecklisteLivrable($this->getChecklisteLivrable());
        $copyObj->setDateAccusee($this->getDateAccusee());
        $copyObj->setDateNotification($this->getDateNotification());
        $copyObj->setModePassaton($this->getModePassaton());
        $copyObj->setNumeroConsultation($this->getNumeroConsultation());
        $copyObj->setReconductible($this->getReconductible());
        $copyObj->setGestionReception($this->getGestionReception());
        $copyObj->setGestionLitige($this->getGestionLitige());
        $copyObj->setPorteReception($this->getPorteReception());
        $copyObj->setTypeReception($this->getTypeReception());

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
     * @return CommonExecConfigurationFormulaire Clone of current object.
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
     * @return CommonExecConfigurationFormulairePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecConfigurationFormulairePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonExecTypeContrat object.
     *
     * @param   CommonExecTypeContrat $v
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecTypeContratRelatedByIdTypeContrat(CommonExecTypeContrat $v = null)
    {
        if ($v === null) {
            $this->setIdTypeContrat(NULL);
        } else {
            $this->setIdTypeContrat($v->getId());
        }

        $this->aCommonExecTypeContratRelatedByIdTypeContrat = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecTypeContrat object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($this);
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
    public function getCommonExecTypeContratRelatedByIdTypeContrat(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecTypeContratRelatedByIdTypeContrat === null && ($this->id_type_contrat !== null) && $doQuery) {
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = CommonExecTypeContratQuery::create()->findPk($this->id_type_contrat, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecTypeContratRelatedByIdTypeContrat->addCommonExecConfigurationFormulairesRelatedByIdTypeContrat($this);
             */
        }

        return $this->aCommonExecTypeContratRelatedByIdTypeContrat;
    }

    /**
     * Declares an association between this object and a CommonExecTypeContrat object.
     *
     * @param   CommonExecTypeContrat $v
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecTypeContratRelatedByIdTypeContrat(CommonExecTypeContrat $v = null)
    {
        if ($v === null) {
            $this->setIdTypeContrat(NULL);
        } else {
            $this->setIdTypeContrat($v->getId());
        }

        $this->aCommonExecTypeContratRelatedByIdTypeContrat = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecTypeContrat object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($this);
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
    public function getCommonExecTypeContratRelatedByIdTypeContrat(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecTypeContratRelatedByIdTypeContrat === null && ($this->id_type_contrat !== null) && $doQuery) {
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = CommonExecTypeContratQuery::create()->findPk($this->id_type_contrat, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecTypeContratRelatedByIdTypeContrat->addCommonExecConfigurationFormulairesRelatedByIdTypeContrat($this);
             */
        }

        return $this->aCommonExecTypeContratRelatedByIdTypeContrat;
    }

    /**
     * Declares an association between this object and a CommonExecTypeContrat object.
     *
     * @param   CommonExecTypeContrat $v
     * @return CommonExecConfigurationFormulaire The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecTypeContratRelatedByIdTypeContrat(CommonExecTypeContrat $v = null)
    {
        if ($v === null) {
            $this->setIdTypeContrat(NULL);
        } else {
            $this->setIdTypeContrat($v->getId());
        }

        $this->aCommonExecTypeContratRelatedByIdTypeContrat = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecTypeContrat object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecConfigurationFormulaireRelatedByIdTypeContrat($this);
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
    public function getCommonExecTypeContratRelatedByIdTypeContrat(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecTypeContratRelatedByIdTypeContrat === null && ($this->id_type_contrat !== null) && $doQuery) {
            $this->aCommonExecTypeContratRelatedByIdTypeContrat = CommonExecTypeContratQuery::create()->findPk($this->id_type_contrat, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecTypeContratRelatedByIdTypeContrat->addCommonExecConfigurationFormulairesRelatedByIdTypeContrat($this);
             */
        }

        return $this->aCommonExecTypeContratRelatedByIdTypeContrat;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_type_contrat = null;
        $this->montant_avance = null;
        $this->penalite = null;
        $this->delai_partiel = null;
        $this->os_par_phase = null;
        $this->montant_caution_definitive = null;
        $this->retenue_garantie = null;
        $this->periode_garantie = null;
        $this->decomposition_phase = null;
        $this->checkliste_livrable = null;
        $this->date_accusee = null;
        $this->date_notification = null;
        $this->mode_passaton = null;
        $this->numero_consultation = null;
        $this->reconductible = null;
        $this->gestion_reception = null;
        $this->gestion_litige = null;
        $this->porte_reception = null;
        $this->type_reception = null;
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
            if ($this->aCommonExecTypeContratRelatedByIdTypeContrat instanceof Persistent) {
              $this->aCommonExecTypeContratRelatedByIdTypeContrat->clearAllReferences($deep);
            }
            if ($this->aCommonExecTypeContratRelatedByIdTypeContrat instanceof Persistent) {
              $this->aCommonExecTypeContratRelatedByIdTypeContrat->clearAllReferences($deep);
            }
            if ($this->aCommonExecTypeContratRelatedByIdTypeContrat instanceof Persistent) {
              $this->aCommonExecTypeContratRelatedByIdTypeContrat->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
        $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
        $this->aCommonExecTypeContratRelatedByIdTypeContrat = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecConfigurationFormulairePeer::DEFAULT_STRING_FORMAT);
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
