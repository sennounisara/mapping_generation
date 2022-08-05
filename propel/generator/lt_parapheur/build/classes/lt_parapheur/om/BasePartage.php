<?php


/**
 * Base class that represents a row from the 'partage' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePartage extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PartagePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PartagePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_partage field.
     * @var        int
     */
    protected $id_partage;

    /**
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

    /**
     * The value for the id_agent_partage field.
     * @var        int
     */
    protected $id_agent_partage;

    /**
     * The value for the nom_agent_partage_fr field.
     * @var        string
     */
    protected $nom_agent_partage_fr;

    /**
     * The value for the nom_agent_partage_ar field.
     * @var        string
     */
    protected $nom_agent_partage_ar;

    /**
     * The value for the prenom_agent_partage_fr field.
     * @var        string
     */
    protected $prenom_agent_partage_fr;

    /**
     * The value for the prenom_agent_partage_ar field.
     * @var        string
     */
    protected $prenom_agent_partage_ar;

    /**
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the action_attendue field.
     * @var        int
     */
    protected $action_attendue;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the id_piece_jointe field.
     * @var        int
     */
    protected $id_piece_jointe;

    /**
     * The value for the nom_piece_jointe field.
     * @var        string
     */
    protected $nom_piece_jointe;

    /**
     * The value for the date_partage field.
     * @var        string
     */
    protected $date_partage;

    /**
     * The value for the date_retrait field.
     * @var        string
     */
    protected $date_retrait;

    /**
     * The value for the etat field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $etat;

    /**
     * The value for the etat_partage field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $etat_partage;

    /**
     * The value for the date_retirer_partage field.
     * @var        string
     */
    protected $date_retirer_partage;

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
        $this->etat = '0';
        $this->etat_partage = '0';
    }

    /**
     * Initializes internal state of BasePartage object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_partage] column value.
     * 
     * @return int
     */
    public function getIdPartage()
    {

        return $this->id_partage;
    }

    /**
     * Get the [id_demande] column value.
     * 
     * @return int
     */
    public function getIdDemande()
    {

        return $this->id_demande;
    }

    /**
     * Get the [id_agent_partage] column value.
     * 
     * @return int
     */
    public function getIdAgentPartage()
    {

        return $this->id_agent_partage;
    }

    /**
     * Get the [nom_agent_partage_fr] column value.
     * 
     * @return string
     */
    public function getNomAgentPartageFr()
    {

        return $this->nom_agent_partage_fr;
    }

    /**
     * Get the [nom_agent_partage_ar] column value.
     * 
     * @return string
     */
    public function getNomAgentPartageAr()
    {

        return $this->nom_agent_partage_ar;
    }

    /**
     * Get the [prenom_agent_partage_fr] column value.
     * 
     * @return string
     */
    public function getPrenomAgentPartageFr()
    {

        return $this->prenom_agent_partage_fr;
    }

    /**
     * Get the [prenom_agent_partage_ar] column value.
     * 
     * @return string
     */
    public function getPrenomAgentPartageAr()
    {

        return $this->prenom_agent_partage_ar;
    }

    /**
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
    }

    /**
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Get the [action_attendue] column value.
     * 
     * @return int
     */
    public function getActionAttendue()
    {

        return $this->action_attendue;
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
     * Get the [id_piece_jointe] column value.
     * 
     * @return int
     */
    public function getIdPieceJointe()
    {

        return $this->id_piece_jointe;
    }

    /**
     * Get the [nom_piece_jointe] column value.
     * 
     * @return string
     */
    public function getNomPieceJointe()
    {

        return $this->nom_piece_jointe;
    }

    /**
     * Get the [optionally formatted] temporal [date_partage] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatePartage($format = 'Y-m-d H:i:s')
    {
        if ($this->date_partage === null) {
            return null;
        }

        if ($this->date_partage === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_partage);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_partage, true), $x);
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
     * Get the [optionally formatted] temporal [date_retrait] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateRetrait($format = 'Y-m-d H:i:s')
    {
        if ($this->date_retrait === null) {
            return null;
        }

        if ($this->date_retrait === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_retrait);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_retrait, true), $x);
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
     * Get the [etat] column value.
     * 
     * @return string
     */
    public function getEtat()
    {

        return $this->etat;
    }

    /**
     * Get the [etat_partage] column value.
     * 
     * @return string
     */
    public function getEtatPartage()
    {

        return $this->etat_partage;
    }

    /**
     * Get the [optionally formatted] temporal [date_retirer_partage] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateRetirerPartage($format = 'Y-m-d H:i:s')
    {
        if ($this->date_retirer_partage === null) {
            return null;
        }

        if ($this->date_retirer_partage === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_retirer_partage);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_retirer_partage, true), $x);
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
     * Set the value of [id_partage] column.
     * 
     * @param int $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setIdPartage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_partage !== $v) {
            $this->id_partage = $v;
            $this->modifiedColumns[] = PartagePeer::ID_PARTAGE;
        }


        return $this;
    } // setIdPartage()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = PartagePeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Set the value of [id_agent_partage] column.
     * 
     * @param int $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setIdAgentPartage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_partage !== $v) {
            $this->id_agent_partage = $v;
            $this->modifiedColumns[] = PartagePeer::ID_AGENT_PARTAGE;
        }


        return $this;
    } // setIdAgentPartage()

    /**
     * Set the value of [nom_agent_partage_fr] column.
     * 
     * @param string $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setNomAgentPartageFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_partage_fr !== $v) {
            $this->nom_agent_partage_fr = $v;
            $this->modifiedColumns[] = PartagePeer::NOM_AGENT_PARTAGE_FR;
        }


        return $this;
    } // setNomAgentPartageFr()

    /**
     * Set the value of [nom_agent_partage_ar] column.
     * 
     * @param string $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setNomAgentPartageAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_partage_ar !== $v) {
            $this->nom_agent_partage_ar = $v;
            $this->modifiedColumns[] = PartagePeer::NOM_AGENT_PARTAGE_AR;
        }


        return $this;
    } // setNomAgentPartageAr()

    /**
     * Set the value of [prenom_agent_partage_fr] column.
     * 
     * @param string $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setPrenomAgentPartageFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent_partage_fr !== $v) {
            $this->prenom_agent_partage_fr = $v;
            $this->modifiedColumns[] = PartagePeer::PRENOM_AGENT_PARTAGE_FR;
        }


        return $this;
    } // setPrenomAgentPartageFr()

    /**
     * Set the value of [prenom_agent_partage_ar] column.
     * 
     * @param string $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setPrenomAgentPartageAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent_partage_ar !== $v) {
            $this->prenom_agent_partage_ar = $v;
            $this->modifiedColumns[] = PartagePeer::PRENOM_AGENT_PARTAGE_AR;
        }


        return $this;
    } // setPrenomAgentPartageAr()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = PartagePeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = PartagePeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [action_attendue] column.
     * 
     * @param int $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setActionAttendue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->action_attendue !== $v) {
            $this->action_attendue = $v;
            $this->modifiedColumns[] = PartagePeer::ACTION_ATTENDUE;
        }


        return $this;
    } // setActionAttendue()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = PartagePeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [id_piece_jointe] column.
     * 
     * @param int $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setIdPieceJointe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_piece_jointe !== $v) {
            $this->id_piece_jointe = $v;
            $this->modifiedColumns[] = PartagePeer::ID_PIECE_JOINTE;
        }


        return $this;
    } // setIdPieceJointe()

    /**
     * Set the value of [nom_piece_jointe] column.
     * 
     * @param string $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setNomPieceJointe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_piece_jointe !== $v) {
            $this->nom_piece_jointe = $v;
            $this->modifiedColumns[] = PartagePeer::NOM_PIECE_JOINTE;
        }


        return $this;
    } // setNomPieceJointe()

    /**
     * Sets the value of [date_partage] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Partage The current object (for fluent API support)
     */
    public function setDatePartage($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_partage !== null || $dt !== null) {
            $currentDateAsString = ($this->date_partage !== null && $tmpDt = new DateTime($this->date_partage)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_partage = $newDateAsString;
                $this->modifiedColumns[] = PartagePeer::DATE_PARTAGE;
            }
        } // if either are not null


        return $this;
    } // setDatePartage()

    /**
     * Sets the value of [date_retrait] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Partage The current object (for fluent API support)
     */
    public function setDateRetrait($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_retrait !== null || $dt !== null) {
            $currentDateAsString = ($this->date_retrait !== null && $tmpDt = new DateTime($this->date_retrait)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_retrait = $newDateAsString;
                $this->modifiedColumns[] = PartagePeer::DATE_RETRAIT;
            }
        } // if either are not null


        return $this;
    } // setDateRetrait()

    /**
     * Set the value of [etat] column.
     * 
     * @param string $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setEtat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat !== $v) {
            $this->etat = $v;
            $this->modifiedColumns[] = PartagePeer::ETAT;
        }


        return $this;
    } // setEtat()

    /**
     * Set the value of [etat_partage] column.
     * 
     * @param string $v new value
     * @return Partage The current object (for fluent API support)
     */
    public function setEtatPartage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat_partage !== $v) {
            $this->etat_partage = $v;
            $this->modifiedColumns[] = PartagePeer::ETAT_PARTAGE;
        }


        return $this;
    } // setEtatPartage()

    /**
     * Sets the value of [date_retirer_partage] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Partage The current object (for fluent API support)
     */
    public function setDateRetirerPartage($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_retirer_partage !== null || $dt !== null) {
            $currentDateAsString = ($this->date_retirer_partage !== null && $tmpDt = new DateTime($this->date_retirer_partage)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_retirer_partage = $newDateAsString;
                $this->modifiedColumns[] = PartagePeer::DATE_RETIRER_PARTAGE;
            }
        } // if either are not null


        return $this;
    } // setDateRetirerPartage()

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
            if ($this->etat !== '0') {
                return false;
            }

            if ($this->etat_partage !== '0') {
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

            $this->id_partage = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_demande = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_agent_partage = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->nom_agent_partage_fr = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->nom_agent_partage_ar = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->prenom_agent_partage_fr = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->prenom_agent_partage_ar = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_agent = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->id_entite = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->action_attendue = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->commentaire = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->id_piece_jointe = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->nom_piece_jointe = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->date_partage = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->date_retrait = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->etat = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->etat_partage = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->date_retirer_partage = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 18; // 18 = PartagePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Partage object", $e);
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
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PartagePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PartageQuery::create()
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
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PartagePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PartagePeer::ID_PARTAGE;
        if (null !== $this->id_partage) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PartagePeer::ID_PARTAGE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PartagePeer::ID_PARTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PARTAGE`';
        }
        if ($this->isColumnModified(PartagePeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(PartagePeer::ID_AGENT_PARTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_PARTAGE`';
        }
        if ($this->isColumnModified(PartagePeer::NOM_AGENT_PARTAGE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_PARTAGE_FR`';
        }
        if ($this->isColumnModified(PartagePeer::NOM_AGENT_PARTAGE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_PARTAGE_AR`';
        }
        if ($this->isColumnModified(PartagePeer::PRENOM_AGENT_PARTAGE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AGENT_PARTAGE_FR`';
        }
        if ($this->isColumnModified(PartagePeer::PRENOM_AGENT_PARTAGE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AGENT_PARTAGE_AR`';
        }
        if ($this->isColumnModified(PartagePeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT`';
        }
        if ($this->isColumnModified(PartagePeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(PartagePeer::ACTION_ATTENDUE)) {
            $modifiedColumns[':p' . $index++]  = '`ACTION_ATTENDUE`';
        }
        if ($this->isColumnModified(PartagePeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENTAIRE`';
        }
        if ($this->isColumnModified(PartagePeer::ID_PIECE_JOINTE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PIECE_JOINTE`';
        }
        if ($this->isColumnModified(PartagePeer::NOM_PIECE_JOINTE)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_PIECE_JOINTE`';
        }
        if ($this->isColumnModified(PartagePeer::DATE_PARTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_PARTAGE`';
        }
        if ($this->isColumnModified(PartagePeer::DATE_RETRAIT)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_RETRAIT`';
        }
        if ($this->isColumnModified(PartagePeer::ETAT)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT`';
        }
        if ($this->isColumnModified(PartagePeer::ETAT_PARTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT_PARTAGE`';
        }
        if ($this->isColumnModified(PartagePeer::DATE_RETIRER_PARTAGE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_RETIRER_PARTAGE`';
        }

        $sql = sprintf(
            'INSERT INTO `partage` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_PARTAGE`':						
                        $stmt->bindValue($identifier, $this->id_partage, PDO::PARAM_INT);
                        break;
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_PARTAGE`':						
                        $stmt->bindValue($identifier, $this->id_agent_partage, PDO::PARAM_INT);
                        break;
                    case '`NOM_AGENT_PARTAGE_FR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_partage_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_AGENT_PARTAGE_AR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_partage_ar, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AGENT_PARTAGE_FR`':						
                        $stmt->bindValue($identifier, $this->prenom_agent_partage_fr, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AGENT_PARTAGE_AR`':						
                        $stmt->bindValue($identifier, $this->prenom_agent_partage_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`ACTION_ATTENDUE`':						
                        $stmt->bindValue($identifier, $this->action_attendue, PDO::PARAM_INT);
                        break;
                    case '`COMMENTAIRE`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`ID_PIECE_JOINTE`':						
                        $stmt->bindValue($identifier, $this->id_piece_jointe, PDO::PARAM_INT);
                        break;
                    case '`NOM_PIECE_JOINTE`':						
                        $stmt->bindValue($identifier, $this->nom_piece_jointe, PDO::PARAM_STR);
                        break;
                    case '`DATE_PARTAGE`':						
                        $stmt->bindValue($identifier, $this->date_partage, PDO::PARAM_STR);
                        break;
                    case '`DATE_RETRAIT`':						
                        $stmt->bindValue($identifier, $this->date_retrait, PDO::PARAM_STR);
                        break;
                    case '`ETAT`':						
                        $stmt->bindValue($identifier, $this->etat, PDO::PARAM_STR);
                        break;
                    case '`ETAT_PARTAGE`':						
                        $stmt->bindValue($identifier, $this->etat_partage, PDO::PARAM_STR);
                        break;
                    case '`DATE_RETIRER_PARTAGE`':						
                        $stmt->bindValue($identifier, $this->date_retirer_partage, PDO::PARAM_STR);
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
        $this->setIdPartage($pk);

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


            if (($retval = PartagePeer::doValidate($this, $columns)) !== true) {
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
        $pos = PartagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdPartage();
                break;
            case 1:
                return $this->getIdDemande();
                break;
            case 2:
                return $this->getIdAgentPartage();
                break;
            case 3:
                return $this->getNomAgentPartageFr();
                break;
            case 4:
                return $this->getNomAgentPartageAr();
                break;
            case 5:
                return $this->getPrenomAgentPartageFr();
                break;
            case 6:
                return $this->getPrenomAgentPartageAr();
                break;
            case 7:
                return $this->getIdAgent();
                break;
            case 8:
                return $this->getIdEntite();
                break;
            case 9:
                return $this->getActionAttendue();
                break;
            case 10:
                return $this->getCommentaire();
                break;
            case 11:
                return $this->getIdPieceJointe();
                break;
            case 12:
                return $this->getNomPieceJointe();
                break;
            case 13:
                return $this->getDatePartage();
                break;
            case 14:
                return $this->getDateRetrait();
                break;
            case 15:
                return $this->getEtat();
                break;
            case 16:
                return $this->getEtatPartage();
                break;
            case 17:
                return $this->getDateRetirerPartage();
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
        if (isset($alreadyDumpedObjects['Partage'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Partage'][$this->getPrimaryKey()] = true;
        $keys = PartagePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdPartage(),
            $keys[1] => $this->getIdDemande(),
            $keys[2] => $this->getIdAgentPartage(),
            $keys[3] => $this->getNomAgentPartageFr(),
            $keys[4] => $this->getNomAgentPartageAr(),
            $keys[5] => $this->getPrenomAgentPartageFr(),
            $keys[6] => $this->getPrenomAgentPartageAr(),
            $keys[7] => $this->getIdAgent(),
            $keys[8] => $this->getIdEntite(),
            $keys[9] => $this->getActionAttendue(),
            $keys[10] => $this->getCommentaire(),
            $keys[11] => $this->getIdPieceJointe(),
            $keys[12] => $this->getNomPieceJointe(),
            $keys[13] => $this->getDatePartage(),
            $keys[14] => $this->getDateRetrait(),
            $keys[15] => $this->getEtat(),
            $keys[16] => $this->getEtatPartage(),
            $keys[17] => $this->getDateRetirerPartage(),
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
        $pos = PartagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdPartage($value);
                break;
            case 1:
                $this->setIdDemande($value);
                break;
            case 2:
                $this->setIdAgentPartage($value);
                break;
            case 3:
                $this->setNomAgentPartageFr($value);
                break;
            case 4:
                $this->setNomAgentPartageAr($value);
                break;
            case 5:
                $this->setPrenomAgentPartageFr($value);
                break;
            case 6:
                $this->setPrenomAgentPartageAr($value);
                break;
            case 7:
                $this->setIdAgent($value);
                break;
            case 8:
                $this->setIdEntite($value);
                break;
            case 9:
                $this->setActionAttendue($value);
                break;
            case 10:
                $this->setCommentaire($value);
                break;
            case 11:
                $this->setIdPieceJointe($value);
                break;
            case 12:
                $this->setNomPieceJointe($value);
                break;
            case 13:
                $this->setDatePartage($value);
                break;
            case 14:
                $this->setDateRetrait($value);
                break;
            case 15:
                $this->setEtat($value);
                break;
            case 16:
                $this->setEtatPartage($value);
                break;
            case 17:
                $this->setDateRetirerPartage($value);
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
        $keys = PartagePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdPartage($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdDemande($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdAgentPartage($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setNomAgentPartageFr($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNomAgentPartageAr($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPrenomAgentPartageFr($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrenomAgentPartageAr($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdAgent($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdEntite($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setActionAttendue($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCommentaire($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdPieceJointe($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNomPieceJointe($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDatePartage($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateRetrait($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEtat($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEtatPartage($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDateRetirerPartage($arr[$keys[17]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PartagePeer::DATABASE_NAME);

        if ($this->isColumnModified(PartagePeer::ID_PARTAGE)) $criteria->add(PartagePeer::ID_PARTAGE, $this->id_partage);
        if ($this->isColumnModified(PartagePeer::ID_DEMANDE)) $criteria->add(PartagePeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(PartagePeer::ID_AGENT_PARTAGE)) $criteria->add(PartagePeer::ID_AGENT_PARTAGE, $this->id_agent_partage);
        if ($this->isColumnModified(PartagePeer::NOM_AGENT_PARTAGE_FR)) $criteria->add(PartagePeer::NOM_AGENT_PARTAGE_FR, $this->nom_agent_partage_fr);
        if ($this->isColumnModified(PartagePeer::NOM_AGENT_PARTAGE_AR)) $criteria->add(PartagePeer::NOM_AGENT_PARTAGE_AR, $this->nom_agent_partage_ar);
        if ($this->isColumnModified(PartagePeer::PRENOM_AGENT_PARTAGE_FR)) $criteria->add(PartagePeer::PRENOM_AGENT_PARTAGE_FR, $this->prenom_agent_partage_fr);
        if ($this->isColumnModified(PartagePeer::PRENOM_AGENT_PARTAGE_AR)) $criteria->add(PartagePeer::PRENOM_AGENT_PARTAGE_AR, $this->prenom_agent_partage_ar);
        if ($this->isColumnModified(PartagePeer::ID_AGENT)) $criteria->add(PartagePeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(PartagePeer::ID_ENTITE)) $criteria->add(PartagePeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(PartagePeer::ACTION_ATTENDUE)) $criteria->add(PartagePeer::ACTION_ATTENDUE, $this->action_attendue);
        if ($this->isColumnModified(PartagePeer::COMMENTAIRE)) $criteria->add(PartagePeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(PartagePeer::ID_PIECE_JOINTE)) $criteria->add(PartagePeer::ID_PIECE_JOINTE, $this->id_piece_jointe);
        if ($this->isColumnModified(PartagePeer::NOM_PIECE_JOINTE)) $criteria->add(PartagePeer::NOM_PIECE_JOINTE, $this->nom_piece_jointe);
        if ($this->isColumnModified(PartagePeer::DATE_PARTAGE)) $criteria->add(PartagePeer::DATE_PARTAGE, $this->date_partage);
        if ($this->isColumnModified(PartagePeer::DATE_RETRAIT)) $criteria->add(PartagePeer::DATE_RETRAIT, $this->date_retrait);
        if ($this->isColumnModified(PartagePeer::ETAT)) $criteria->add(PartagePeer::ETAT, $this->etat);
        if ($this->isColumnModified(PartagePeer::ETAT_PARTAGE)) $criteria->add(PartagePeer::ETAT_PARTAGE, $this->etat_partage);
        if ($this->isColumnModified(PartagePeer::DATE_RETIRER_PARTAGE)) $criteria->add(PartagePeer::DATE_RETIRER_PARTAGE, $this->date_retirer_partage);

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
        $criteria = new Criteria(PartagePeer::DATABASE_NAME);
        $criteria->add(PartagePeer::ID_PARTAGE, $this->id_partage);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdPartage();
    }

    /**
     * Generic method to set the primary key (id_partage column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdPartage($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdPartage();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Partage (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setIdAgentPartage($this->getIdAgentPartage());
        $copyObj->setNomAgentPartageFr($this->getNomAgentPartageFr());
        $copyObj->setNomAgentPartageAr($this->getNomAgentPartageAr());
        $copyObj->setPrenomAgentPartageFr($this->getPrenomAgentPartageFr());
        $copyObj->setPrenomAgentPartageAr($this->getPrenomAgentPartageAr());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setActionAttendue($this->getActionAttendue());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setIdPieceJointe($this->getIdPieceJointe());
        $copyObj->setNomPieceJointe($this->getNomPieceJointe());
        $copyObj->setDatePartage($this->getDatePartage());
        $copyObj->setDateRetrait($this->getDateRetrait());
        $copyObj->setEtat($this->getEtat());
        $copyObj->setEtatPartage($this->getEtatPartage());
        $copyObj->setDateRetirerPartage($this->getDateRetirerPartage());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdPartage(NULL); // this is a auto-increment column, so set to default value
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
     * @return Partage Clone of current object.
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
     * @return PartagePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PartagePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_partage = null;
        $this->id_demande = null;
        $this->id_agent_partage = null;
        $this->nom_agent_partage_fr = null;
        $this->nom_agent_partage_ar = null;
        $this->prenom_agent_partage_fr = null;
        $this->prenom_agent_partage_ar = null;
        $this->id_agent = null;
        $this->id_entite = null;
        $this->action_attendue = null;
        $this->commentaire = null;
        $this->id_piece_jointe = null;
        $this->nom_piece_jointe = null;
        $this->date_partage = null;
        $this->date_retrait = null;
        $this->etat = null;
        $this->etat_partage = null;
        $this->date_retirer_partage = null;
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
        return (string) $this->exportTo(PartagePeer::DEFAULT_STRING_FORMAT);
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
