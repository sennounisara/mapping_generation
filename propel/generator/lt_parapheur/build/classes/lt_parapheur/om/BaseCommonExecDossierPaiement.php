<?php


/**
 * Base class that represents a row from the 'exec_dossier_paiement' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecDossierPaiement extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecDossierPaiementPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecDossierPaiementPeer
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
     * The value for the nume_ordre_paiement field.
     * @var        string
     */
    protected $nume_ordre_paiement;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the id_agent_creat field.
     * @var        int
     */
    protected $id_agent_creat;

    /**
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the date_depot field.
     * @var        string
     */
    protected $date_depot;

    /**
     * The value for the date_validation field.
     * @var        string
     */
    protected $date_validation;

    /**
     * The value for the date_rejet field.
     * @var        string
     */
    protected $date_rejet;

    /**
     * The value for the montant_a_paye_ttc field.
     * @var        double
     */
    protected $montant_a_paye_ttc;

    /**
     * The value for the date_crea field.
     * @var        string
     */
    protected $date_crea;

    /**
     * The value for the id_agent_modi field.
     * @var        int
     */
    protected $id_agent_modi;

    /**
     * The value for the id_parapheur field.
     * @var        int
     */
    protected $id_parapheur;

    /**
     * The value for the date_cloture_parapheur field.
     * @var        string
     */
    protected $date_cloture_parapheur;

    /**
     * The value for the id_agent_validation field.
     * @var        int
     */
    protected $id_agent_validation;

    /**
     * The value for the montant_penalite field.
     * @var        double
     */
    protected $montant_penalite;

    /**
     * The value for the montant_facture field.
     * @var        double
     */
    protected $montant_facture;

    /**
     * The value for the motif_rejet field.
     * @var        string
     */
    protected $motif_rejet;

    /**
     * The value for the date_derniere_synchronisation field.
     * @var        string
     */
    protected $date_derniere_synchronisation;

    /**
     * @var        CommonExecContrat
     */
    protected $aCommonExecContrat;

    /**
     * @var        PropelObjectCollection|CommonExecDpFacture[] Collection to store aggregation of CommonExecDpFacture objects.
     */
    protected $collCommonExecDpFactures;
    protected $collCommonExecDpFacturesPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPenalite[] Collection to store aggregation of CommonExecPenalite objects.
     */
    protected $collCommonExecPenalites;
    protected $collCommonExecPenalitesPartial;

    /**
     * @var        PropelObjectCollection|CommonExecPieceDossierpaiement[] Collection to store aggregation of CommonExecPieceDossierpaiement objects.
     */
    protected $collCommonExecPieceDossierpaiements;
    protected $collCommonExecPieceDossierpaiementsPartial;

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
    protected $commonExecDpFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPenalitesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecPieceDossierpaiementsScheduledForDeletion = null;

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
     * Get the [nume_ordre_paiement] column value.
     * 
     * @return string
     */
    public function getNumeOrdrePaiement()
    {

        return $this->nume_ordre_paiement;
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
     * Get the [id_contrat] column value.
     * 
     * @return int
     */
    public function getIdContrat()
    {

        return $this->id_contrat;
    }

    /**
     * Get the [id_agent_creat] column value.
     * 
     * @return int
     */
    public function getIdAgentCreat()
    {

        return $this->id_agent_creat;
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
     * Get the [optionally formatted] temporal [date_depot] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDepot($format = 'Y-m-d H:i:s')
    {
        if ($this->date_depot === null) {
            return null;
        }

        if ($this->date_depot === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_depot);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_depot, true), $x);
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
     * Get the [optionally formatted] temporal [date_validation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateValidation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_validation === null) {
            return null;
        }

        if ($this->date_validation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_validation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_validation, true), $x);
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
     * Get the [optionally formatted] temporal [date_rejet] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateRejet($format = 'Y-m-d H:i:s')
    {
        if ($this->date_rejet === null) {
            return null;
        }

        if ($this->date_rejet === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_rejet);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_rejet, true), $x);
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
     * Get the [montant_a_paye_ttc] column value.
     * 
     * @return double
     */
    public function getMontantAPayeTtc()
    {

        return $this->montant_a_paye_ttc;
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
     * Get the [id_agent_modi] column value.
     * 
     * @return int
     */
    public function getIdAgentModi()
    {

        return $this->id_agent_modi;
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
     * Get the [id_agent_validation] column value.
     * 
     * @return int
     */
    public function getIdAgentValidation()
    {

        return $this->id_agent_validation;
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
     * Get the [montant_facture] column value.
     * 
     * @return double
     */
    public function getMontantFacture()
    {

        return $this->montant_facture;
    }

    /**
     * Get the [motif_rejet] column value.
     * 
     * @return string
     */
    public function getMotifRejet()
    {

        return $this->motif_rejet;
    }

    /**
     * Get the [optionally formatted] temporal [date_derniere_synchronisation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDerniereSynchronisation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_derniere_synchronisation === null) {
            return null;
        }

        if ($this->date_derniere_synchronisation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_derniere_synchronisation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_derniere_synchronisation, true), $x);
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [nume_ordre_paiement] column.
     * 
     * @param string $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setNumeOrdrePaiement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nume_ordre_paiement !== $v) {
            $this->nume_ordre_paiement = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::NUME_ORDRE_PAIEMENT;
        }


        return $this;
    } // setNumeOrdrePaiement()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::ID_CONTRAT;
        }

        if ($this->aCommonExecContrat !== null && $this->aCommonExecContrat->getIdContrat() !== $v) {
            $this->aCommonExecContrat = null;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [id_agent_creat] column.
     * 
     * @param int $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setIdAgentCreat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_creat !== $v) {
            $this->id_agent_creat = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::ID_AGENT_CREAT;
        }


        return $this;
    } // setIdAgentCreat()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Sets the value of [date_depot] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setDateDepot($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_depot !== null || $dt !== null) {
            $currentDateAsString = ($this->date_depot !== null && $tmpDt = new DateTime($this->date_depot)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_depot = $newDateAsString;
                $this->modifiedColumns[] = CommonExecDossierPaiementPeer::DATE_DEPOT;
            }
        } // if either are not null


        return $this;
    } // setDateDepot()

    /**
     * Sets the value of [date_validation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setDateValidation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_validation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_validation !== null && $tmpDt = new DateTime($this->date_validation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_validation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecDossierPaiementPeer::DATE_VALIDATION;
            }
        } // if either are not null


        return $this;
    } // setDateValidation()

    /**
     * Sets the value of [date_rejet] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setDateRejet($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_rejet !== null || $dt !== null) {
            $currentDateAsString = ($this->date_rejet !== null && $tmpDt = new DateTime($this->date_rejet)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_rejet = $newDateAsString;
                $this->modifiedColumns[] = CommonExecDossierPaiementPeer::DATE_REJET;
            }
        } // if either are not null


        return $this;
    } // setDateRejet()

    /**
     * Set the value of [montant_a_paye_ttc] column.
     * 
     * @param double $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setMontantAPayeTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_a_paye_ttc !== $v) {
            $this->montant_a_paye_ttc = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::MONTANT_A_PAYE_TTC;
        }


        return $this;
    } // setMontantAPayeTtc()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecDossierPaiementPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_agent_modi] column.
     * 
     * @param int $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setIdAgentModi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_modi !== $v) {
            $this->id_agent_modi = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::ID_AGENT_MODI;
        }


        return $this;
    } // setIdAgentModi()

    /**
     * Set the value of [id_parapheur] column.
     * 
     * @param int $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setIdParapheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_parapheur !== $v) {
            $this->id_parapheur = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::ID_PARAPHEUR;
        }


        return $this;
    } // setIdParapheur()

    /**
     * Sets the value of [date_cloture_parapheur] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setDateClotureParapheur($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_cloture_parapheur !== null || $dt !== null) {
            $currentDateAsString = ($this->date_cloture_parapheur !== null && $tmpDt = new DateTime($this->date_cloture_parapheur)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_cloture_parapheur = $newDateAsString;
                $this->modifiedColumns[] = CommonExecDossierPaiementPeer::DATE_CLOTURE_PARAPHEUR;
            }
        } // if either are not null


        return $this;
    } // setDateClotureParapheur()

    /**
     * Set the value of [id_agent_validation] column.
     * 
     * @param int $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setIdAgentValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_validation !== $v) {
            $this->id_agent_validation = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::ID_AGENT_VALIDATION;
        }


        return $this;
    } // setIdAgentValidation()

    /**
     * Set the value of [montant_penalite] column.
     * 
     * @param double $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setMontantPenalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_penalite !== $v) {
            $this->montant_penalite = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::MONTANT_PENALITE;
        }


        return $this;
    } // setMontantPenalite()

    /**
     * Set the value of [montant_facture] column.
     * 
     * @param double $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setMontantFacture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_facture !== $v) {
            $this->montant_facture = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::MONTANT_FACTURE;
        }


        return $this;
    } // setMontantFacture()

    /**
     * Set the value of [motif_rejet] column.
     * 
     * @param string $v new value
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setMotifRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_rejet !== $v) {
            $this->motif_rejet = $v;
            $this->modifiedColumns[] = CommonExecDossierPaiementPeer::MOTIF_REJET;
        }


        return $this;
    } // setMotifRejet()

    /**
     * Sets the value of [date_derniere_synchronisation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setDateDerniereSynchronisation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_derniere_synchronisation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_derniere_synchronisation !== null && $tmpDt = new DateTime($this->date_derniere_synchronisation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_derniere_synchronisation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecDossierPaiementPeer::DATE_DERNIERE_SYNCHRONISATION;
            }
        } // if either are not null


        return $this;
    } // setDateDerniereSynchronisation()

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

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->nume_ordre_paiement = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->commentaire = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_contrat = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_agent_creat = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->statut = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->date_depot = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->date_validation = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->date_rejet = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->montant_a_paye_ttc = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->date_crea = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->id_agent_modi = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->id_parapheur = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->date_cloture_parapheur = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->id_agent_validation = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->montant_penalite = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
            $this->montant_facture = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
            $this->motif_rejet = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->date_derniere_synchronisation = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = CommonExecDossierPaiementPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecDossierPaiement object", $e);
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

        if ($this->aCommonExecContrat !== null && $this->id_contrat !== $this->aCommonExecContrat->getIdContrat()) {
            $this->aCommonExecContrat = null;
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
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecDossierPaiementPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonExecContrat = null;
            $this->collCommonExecDpFactures = null;

            $this->collCommonExecPenalites = null;

            $this->collCommonExecPieceDossierpaiements = null;

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
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecDossierPaiementQuery::create()
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
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecDossierPaiementPeer::addInstanceToPool($this);
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

            if ($this->aCommonExecContrat !== null) {
                if ($this->aCommonExecContrat->isModified() || $this->aCommonExecContrat->isNew()) {
                    $affectedRows += $this->aCommonExecContrat->save($con);
                }
                $this->setCommonExecContrat($this->aCommonExecContrat);
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

            if ($this->commonExecDpFacturesScheduledForDeletion !== null) {
                if (!$this->commonExecDpFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecDpFacturesScheduledForDeletion as $commonExecDpFacture) {
                        // need to save related object because we set the relation to null
                        $commonExecDpFacture->save($con);
                    }
                    $this->commonExecDpFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecDpFactures !== null) {
                foreach ($this->collCommonExecDpFactures as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecPenalitesScheduledForDeletion !== null) {
                if (!$this->commonExecPenalitesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecPenalitesScheduledForDeletion as $commonExecPenalite) {
                        // need to save related object because we set the relation to null
                        $commonExecPenalite->save($con);
                    }
                    $this->commonExecPenalitesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecPenalites !== null) {
                foreach ($this->collCommonExecPenalites as $referrerFK) {
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

        $this->modifiedColumns[] = CommonExecDossierPaiementPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecDossierPaiementPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::NUME_ORDRE_PAIEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`nume_ordre_paiement`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID_AGENT_CREAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_creat`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`date_depot`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`date_rejet`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::MONTANT_A_PAYE_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_a_paye_ttc`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID_AGENT_MODI)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_modi`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_parapheur`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_CLOTURE_PARAPHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`date_cloture_parapheur`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID_AGENT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_validation`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::MONTANT_PENALITE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_penalite`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::MONTANT_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`montant_facture`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::MOTIF_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`motif_rejet`';
        }
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_DERNIERE_SYNCHRONISATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_derniere_synchronisation`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_dossier_paiement` (%s) VALUES (%s)',
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
                    case '`nume_ordre_paiement`':						
                        $stmt->bindValue($identifier, $this->nume_ordre_paiement, PDO::PARAM_STR);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`id_agent_creat`':						
                        $stmt->bindValue($identifier, $this->id_agent_creat, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`date_depot`':						
                        $stmt->bindValue($identifier, $this->date_depot, PDO::PARAM_STR);
                        break;
                    case '`date_validation`':						
                        $stmt->bindValue($identifier, $this->date_validation, PDO::PARAM_STR);
                        break;
                    case '`date_rejet`':						
                        $stmt->bindValue($identifier, $this->date_rejet, PDO::PARAM_STR);
                        break;
                    case '`montant_a_paye_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_a_paye_ttc, PDO::PARAM_STR);
                        break;
                    case '`date_crea`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`id_agent_modi`':						
                        $stmt->bindValue($identifier, $this->id_agent_modi, PDO::PARAM_INT);
                        break;
                    case '`id_parapheur`':						
                        $stmt->bindValue($identifier, $this->id_parapheur, PDO::PARAM_INT);
                        break;
                    case '`date_cloture_parapheur`':						
                        $stmt->bindValue($identifier, $this->date_cloture_parapheur, PDO::PARAM_STR);
                        break;
                    case '`id_agent_validation`':						
                        $stmt->bindValue($identifier, $this->id_agent_validation, PDO::PARAM_INT);
                        break;
                    case '`montant_penalite`':						
                        $stmt->bindValue($identifier, $this->montant_penalite, PDO::PARAM_STR);
                        break;
                    case '`montant_facture`':						
                        $stmt->bindValue($identifier, $this->montant_facture, PDO::PARAM_STR);
                        break;
                    case '`motif_rejet`':						
                        $stmt->bindValue($identifier, $this->motif_rejet, PDO::PARAM_STR);
                        break;
                    case '`date_derniere_synchronisation`':						
                        $stmt->bindValue($identifier, $this->date_derniere_synchronisation, PDO::PARAM_STR);
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

            if ($this->aCommonExecContrat !== null) {
                if (!$this->aCommonExecContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecContrat->getValidationFailures());
                }
            }


            if (($retval = CommonExecDossierPaiementPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecDpFactures !== null) {
                    foreach ($this->collCommonExecDpFactures as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecPenalites !== null) {
                    foreach ($this->collCommonExecPenalites as $referrerFK) {
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
        $pos = CommonExecDossierPaiementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNumeOrdrePaiement();
                break;
            case 2:
                return $this->getCommentaire();
                break;
            case 3:
                return $this->getIdContrat();
                break;
            case 4:
                return $this->getIdAgentCreat();
                break;
            case 5:
                return $this->getStatut();
                break;
            case 6:
                return $this->getDateDepot();
                break;
            case 7:
                return $this->getDateValidation();
                break;
            case 8:
                return $this->getDateRejet();
                break;
            case 9:
                return $this->getMontantAPayeTtc();
                break;
            case 10:
                return $this->getDateCrea();
                break;
            case 11:
                return $this->getIdAgentModi();
                break;
            case 12:
                return $this->getIdParapheur();
                break;
            case 13:
                return $this->getDateClotureParapheur();
                break;
            case 14:
                return $this->getIdAgentValidation();
                break;
            case 15:
                return $this->getMontantPenalite();
                break;
            case 16:
                return $this->getMontantFacture();
                break;
            case 17:
                return $this->getMotifRejet();
                break;
            case 18:
                return $this->getDateDerniereSynchronisation();
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
        if (isset($alreadyDumpedObjects['CommonExecDossierPaiement'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecDossierPaiement'][$this->getPrimaryKey()] = true;
        $keys = CommonExecDossierPaiementPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNumeOrdrePaiement(),
            $keys[2] => $this->getCommentaire(),
            $keys[3] => $this->getIdContrat(),
            $keys[4] => $this->getIdAgentCreat(),
            $keys[5] => $this->getStatut(),
            $keys[6] => $this->getDateDepot(),
            $keys[7] => $this->getDateValidation(),
            $keys[8] => $this->getDateRejet(),
            $keys[9] => $this->getMontantAPayeTtc(),
            $keys[10] => $this->getDateCrea(),
            $keys[11] => $this->getIdAgentModi(),
            $keys[12] => $this->getIdParapheur(),
            $keys[13] => $this->getDateClotureParapheur(),
            $keys[14] => $this->getIdAgentValidation(),
            $keys[15] => $this->getMontantPenalite(),
            $keys[16] => $this->getMontantFacture(),
            $keys[17] => $this->getMotifRejet(),
            $keys[18] => $this->getDateDerniereSynchronisation(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonExecContrat) {
                $result['CommonExecContrat'] = $this->aCommonExecContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonExecDpFactures) {
                $result['CommonExecDpFactures'] = $this->collCommonExecDpFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPenalites) {
                $result['CommonExecPenalites'] = $this->collCommonExecPenalites->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecPieceDossierpaiements) {
                $result['CommonExecPieceDossierpaiements'] = $this->collCommonExecPieceDossierpaiements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecDossierPaiementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNumeOrdrePaiement($value);
                break;
            case 2:
                $this->setCommentaire($value);
                break;
            case 3:
                $this->setIdContrat($value);
                break;
            case 4:
                $this->setIdAgentCreat($value);
                break;
            case 5:
                $this->setStatut($value);
                break;
            case 6:
                $this->setDateDepot($value);
                break;
            case 7:
                $this->setDateValidation($value);
                break;
            case 8:
                $this->setDateRejet($value);
                break;
            case 9:
                $this->setMontantAPayeTtc($value);
                break;
            case 10:
                $this->setDateCrea($value);
                break;
            case 11:
                $this->setIdAgentModi($value);
                break;
            case 12:
                $this->setIdParapheur($value);
                break;
            case 13:
                $this->setDateClotureParapheur($value);
                break;
            case 14:
                $this->setIdAgentValidation($value);
                break;
            case 15:
                $this->setMontantPenalite($value);
                break;
            case 16:
                $this->setMontantFacture($value);
                break;
            case 17:
                $this->setMotifRejet($value);
                break;
            case 18:
                $this->setDateDerniereSynchronisation($value);
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
        $keys = CommonExecDossierPaiementPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNumeOrdrePaiement($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCommentaire($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdContrat($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdAgentCreat($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStatut($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateDepot($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateValidation($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDateRejet($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMontantAPayeTtc($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateCrea($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdAgentModi($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdParapheur($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDateClotureParapheur($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdAgentValidation($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setMontantPenalite($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMontantFacture($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setMotifRejet($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDateDerniereSynchronisation($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecDossierPaiementPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID)) $criteria->add(CommonExecDossierPaiementPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::NUME_ORDRE_PAIEMENT)) $criteria->add(CommonExecDossierPaiementPeer::NUME_ORDRE_PAIEMENT, $this->nume_ordre_paiement);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::COMMENTAIRE)) $criteria->add(CommonExecDossierPaiementPeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID_CONTRAT)) $criteria->add(CommonExecDossierPaiementPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID_AGENT_CREAT)) $criteria->add(CommonExecDossierPaiementPeer::ID_AGENT_CREAT, $this->id_agent_creat);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::STATUT)) $criteria->add(CommonExecDossierPaiementPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_DEPOT)) $criteria->add(CommonExecDossierPaiementPeer::DATE_DEPOT, $this->date_depot);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_VALIDATION)) $criteria->add(CommonExecDossierPaiementPeer::DATE_VALIDATION, $this->date_validation);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_REJET)) $criteria->add(CommonExecDossierPaiementPeer::DATE_REJET, $this->date_rejet);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::MONTANT_A_PAYE_TTC)) $criteria->add(CommonExecDossierPaiementPeer::MONTANT_A_PAYE_TTC, $this->montant_a_paye_ttc);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_CREA)) $criteria->add(CommonExecDossierPaiementPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID_AGENT_MODI)) $criteria->add(CommonExecDossierPaiementPeer::ID_AGENT_MODI, $this->id_agent_modi);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID_PARAPHEUR)) $criteria->add(CommonExecDossierPaiementPeer::ID_PARAPHEUR, $this->id_parapheur);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_CLOTURE_PARAPHEUR)) $criteria->add(CommonExecDossierPaiementPeer::DATE_CLOTURE_PARAPHEUR, $this->date_cloture_parapheur);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::ID_AGENT_VALIDATION)) $criteria->add(CommonExecDossierPaiementPeer::ID_AGENT_VALIDATION, $this->id_agent_validation);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::MONTANT_PENALITE)) $criteria->add(CommonExecDossierPaiementPeer::MONTANT_PENALITE, $this->montant_penalite);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::MONTANT_FACTURE)) $criteria->add(CommonExecDossierPaiementPeer::MONTANT_FACTURE, $this->montant_facture);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::MOTIF_REJET)) $criteria->add(CommonExecDossierPaiementPeer::MOTIF_REJET, $this->motif_rejet);
        if ($this->isColumnModified(CommonExecDossierPaiementPeer::DATE_DERNIERE_SYNCHRONISATION)) $criteria->add(CommonExecDossierPaiementPeer::DATE_DERNIERE_SYNCHRONISATION, $this->date_derniere_synchronisation);

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
        $criteria = new Criteria(CommonExecDossierPaiementPeer::DATABASE_NAME);
        $criteria->add(CommonExecDossierPaiementPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecDossierPaiement (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNumeOrdrePaiement($this->getNumeOrdrePaiement());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setIdAgentCreat($this->getIdAgentCreat());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDateDepot($this->getDateDepot());
        $copyObj->setDateValidation($this->getDateValidation());
        $copyObj->setDateRejet($this->getDateRejet());
        $copyObj->setMontantAPayeTtc($this->getMontantAPayeTtc());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdAgentModi($this->getIdAgentModi());
        $copyObj->setIdParapheur($this->getIdParapheur());
        $copyObj->setDateClotureParapheur($this->getDateClotureParapheur());
        $copyObj->setIdAgentValidation($this->getIdAgentValidation());
        $copyObj->setMontantPenalite($this->getMontantPenalite());
        $copyObj->setMontantFacture($this->getMontantFacture());
        $copyObj->setMotifRejet($this->getMotifRejet());
        $copyObj->setDateDerniereSynchronisation($this->getDateDerniereSynchronisation());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonExecDpFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecDpFacture($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPenalites() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPenalite($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecPieceDossierpaiements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecPieceDossierpaiement($relObj->copy($deepCopy));
                }
            }

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
     * @return CommonExecDossierPaiement Clone of current object.
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
     * @return CommonExecDossierPaiementPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecDossierPaiementPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonExecContrat object.
     *
     * @param   CommonExecContrat $v
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecContrat(CommonExecContrat $v = null)
    {
        if ($v === null) {
            $this->setIdContrat(NULL);
        } else {
            $this->setIdContrat($v->getIdContrat());
        }

        $this->aCommonExecContrat = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecContrat object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecDossierPaiement($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecContrat object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecContrat The associated CommonExecContrat object.
     * @throws PropelException
     */
    public function getCommonExecContrat(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecContrat === null && ($this->id_contrat !== null) && $doQuery) {
            $this->aCommonExecContrat = CommonExecContratQuery::create()->findPk($this->id_contrat, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecContrat->addCommonExecDossierPaiements($this);
             */
        }

        return $this->aCommonExecContrat;
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
        if ('CommonExecDpFacture' == $relationName) {
            $this->initCommonExecDpFactures();
        }
        if ('CommonExecPenalite' == $relationName) {
            $this->initCommonExecPenalites();
        }
        if ('CommonExecPieceDossierpaiement' == $relationName) {
            $this->initCommonExecPieceDossierpaiements();
        }
    }

    /**
     * Clears out the collCommonExecDpFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     * @see        addCommonExecDpFactures()
     */
    public function clearCommonExecDpFactures()
    {
        $this->collCommonExecDpFactures = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecDpFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecDpFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecDpFactures($v = true)
    {
        $this->collCommonExecDpFacturesPartial = $v;
    }

    /**
     * Initializes the collCommonExecDpFactures collection.
     *
     * By default this just sets the collCommonExecDpFactures collection to an empty array (like clearcollCommonExecDpFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecDpFactures($overrideExisting = true)
    {
        if (null !== $this->collCommonExecDpFactures && !$overrideExisting) {
            return;
        }
        $this->collCommonExecDpFactures = new PropelObjectCollection();
        $this->collCommonExecDpFactures->setModel('CommonExecDpFacture');
    }

    /**
     * Gets an array of CommonExecDpFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecDossierPaiement is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecDpFacture[] List of CommonExecDpFacture objects
     * @throws PropelException
     */
    public function getCommonExecDpFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecDpFacturesPartial && !$this->isNew();
        if (null === $this->collCommonExecDpFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecDpFactures) {
                // return empty collection
                $this->initCommonExecDpFactures();
            } else {
                $collCommonExecDpFactures = CommonExecDpFactureQuery::create(null, $criteria)
                    ->filterByCommonExecDossierPaiement($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecDpFacturesPartial && count($collCommonExecDpFactures)) {
                      $this->initCommonExecDpFactures(false);

                      foreach ($collCommonExecDpFactures as $obj) {
                        if (false == $this->collCommonExecDpFactures->contains($obj)) {
                          $this->collCommonExecDpFactures->append($obj);
                        }
                      }

                      $this->collCommonExecDpFacturesPartial = true;
                    }

                    $collCommonExecDpFactures->getInternalIterator()->rewind();

                    return $collCommonExecDpFactures;
                }

                if ($partial && $this->collCommonExecDpFactures) {
                    foreach ($this->collCommonExecDpFactures as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecDpFactures[] = $obj;
                        }
                    }
                }

                $this->collCommonExecDpFactures = $collCommonExecDpFactures;
                $this->collCommonExecDpFacturesPartial = false;
            }
        }

        return $this->collCommonExecDpFactures;
    }

    /**
     * Sets a collection of CommonExecDpFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecDpFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setCommonExecDpFactures(PropelCollection $commonExecDpFactures, PropelPDO $con = null)
    {
        $commonExecDpFacturesToDelete = $this->getCommonExecDpFactures(new Criteria(), $con)->diff($commonExecDpFactures);


        $this->commonExecDpFacturesScheduledForDeletion = $commonExecDpFacturesToDelete;

        foreach ($commonExecDpFacturesToDelete as $commonExecDpFactureRemoved) {
            $commonExecDpFactureRemoved->setCommonExecDossierPaiement(null);
        }

        $this->collCommonExecDpFactures = null;
        foreach ($commonExecDpFactures as $commonExecDpFacture) {
            $this->addCommonExecDpFacture($commonExecDpFacture);
        }

        $this->collCommonExecDpFactures = $commonExecDpFactures;
        $this->collCommonExecDpFacturesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecDpFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecDpFacture objects.
     * @throws PropelException
     */
    public function countCommonExecDpFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecDpFacturesPartial && !$this->isNew();
        if (null === $this->collCommonExecDpFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecDpFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecDpFactures());
            }
            $query = CommonExecDpFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecDossierPaiement($this)
                ->count($con);
        }

        return count($this->collCommonExecDpFactures);
    }

    /**
     * Method called to associate a CommonExecDpFacture object to this object
     * through the CommonExecDpFacture foreign key attribute.
     *
     * @param   CommonExecDpFacture $l CommonExecDpFacture
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function addCommonExecDpFacture(CommonExecDpFacture $l)
    {
        if ($this->collCommonExecDpFactures === null) {
            $this->initCommonExecDpFactures();
            $this->collCommonExecDpFacturesPartial = true;
        }
        if (!in_array($l, $this->collCommonExecDpFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecDpFacture($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecDpFacture $commonExecDpFacture The commonExecDpFacture object to add.
     */
    protected function doAddCommonExecDpFacture($commonExecDpFacture)
    {
        $this->collCommonExecDpFactures[]= $commonExecDpFacture;
        $commonExecDpFacture->setCommonExecDossierPaiement($this);
    }

    /**
     * @param	CommonExecDpFacture $commonExecDpFacture The commonExecDpFacture object to remove.
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function removeCommonExecDpFacture($commonExecDpFacture)
    {
        if ($this->getCommonExecDpFactures()->contains($commonExecDpFacture)) {
            $this->collCommonExecDpFactures->remove($this->collCommonExecDpFactures->search($commonExecDpFacture));
            if (null === $this->commonExecDpFacturesScheduledForDeletion) {
                $this->commonExecDpFacturesScheduledForDeletion = clone $this->collCommonExecDpFactures;
                $this->commonExecDpFacturesScheduledForDeletion->clear();
            }
            $this->commonExecDpFacturesScheduledForDeletion[]= $commonExecDpFacture;
            $commonExecDpFacture->setCommonExecDossierPaiement(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecDossierPaiement is new, it will return
     * an empty collection; or if this CommonExecDossierPaiement has previously
     * been saved, it will retrieve related CommonExecDpFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecDossierPaiement.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecDpFacture[] List of CommonExecDpFacture objects
     */
    public function getCommonExecDpFacturesJoinCommonExecFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecDpFactureQuery::create(null, $criteria);
        $query->joinWith('CommonExecFacture', $join_behavior);

        return $this->getCommonExecDpFactures($query, $con);
    }

    /**
     * Clears out the collCommonExecPenalites collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     * @see        addCommonExecPenalites()
     */
    public function clearCommonExecPenalites()
    {
        $this->collCommonExecPenalites = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecPenalitesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecPenalites collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecPenalites($v = true)
    {
        $this->collCommonExecPenalitesPartial = $v;
    }

    /**
     * Initializes the collCommonExecPenalites collection.
     *
     * By default this just sets the collCommonExecPenalites collection to an empty array (like clearcollCommonExecPenalites());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecPenalites($overrideExisting = true)
    {
        if (null !== $this->collCommonExecPenalites && !$overrideExisting) {
            return;
        }
        $this->collCommonExecPenalites = new PropelObjectCollection();
        $this->collCommonExecPenalites->setModel('CommonExecPenalite');
    }

    /**
     * Gets an array of CommonExecPenalite objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecDossierPaiement is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecPenalite[] List of CommonExecPenalite objects
     * @throws PropelException
     */
    public function getCommonExecPenalites($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPenalitesPartial && !$this->isNew();
        if (null === $this->collCommonExecPenalites || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPenalites) {
                // return empty collection
                $this->initCommonExecPenalites();
            } else {
                $collCommonExecPenalites = CommonExecPenaliteQuery::create(null, $criteria)
                    ->filterByCommonExecDossierPaiement($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecPenalitesPartial && count($collCommonExecPenalites)) {
                      $this->initCommonExecPenalites(false);

                      foreach ($collCommonExecPenalites as $obj) {
                        if (false == $this->collCommonExecPenalites->contains($obj)) {
                          $this->collCommonExecPenalites->append($obj);
                        }
                      }

                      $this->collCommonExecPenalitesPartial = true;
                    }

                    $collCommonExecPenalites->getInternalIterator()->rewind();

                    return $collCommonExecPenalites;
                }

                if ($partial && $this->collCommonExecPenalites) {
                    foreach ($this->collCommonExecPenalites as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecPenalites[] = $obj;
                        }
                    }
                }

                $this->collCommonExecPenalites = $collCommonExecPenalites;
                $this->collCommonExecPenalitesPartial = false;
            }
        }

        return $this->collCommonExecPenalites;
    }

    /**
     * Sets a collection of CommonExecPenalite objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecPenalites A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setCommonExecPenalites(PropelCollection $commonExecPenalites, PropelPDO $con = null)
    {
        $commonExecPenalitesToDelete = $this->getCommonExecPenalites(new Criteria(), $con)->diff($commonExecPenalites);


        $this->commonExecPenalitesScheduledForDeletion = $commonExecPenalitesToDelete;

        foreach ($commonExecPenalitesToDelete as $commonExecPenaliteRemoved) {
            $commonExecPenaliteRemoved->setCommonExecDossierPaiement(null);
        }

        $this->collCommonExecPenalites = null;
        foreach ($commonExecPenalites as $commonExecPenalite) {
            $this->addCommonExecPenalite($commonExecPenalite);
        }

        $this->collCommonExecPenalites = $commonExecPenalites;
        $this->collCommonExecPenalitesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecPenalite objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecPenalite objects.
     * @throws PropelException
     */
    public function countCommonExecPenalites(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecPenalitesPartial && !$this->isNew();
        if (null === $this->collCommonExecPenalites || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecPenalites) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecPenalites());
            }
            $query = CommonExecPenaliteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecDossierPaiement($this)
                ->count($con);
        }

        return count($this->collCommonExecPenalites);
    }

    /**
     * Method called to associate a CommonExecPenalite object to this object
     * through the CommonExecPenalite foreign key attribute.
     *
     * @param   CommonExecPenalite $l CommonExecPenalite
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function addCommonExecPenalite(CommonExecPenalite $l)
    {
        if ($this->collCommonExecPenalites === null) {
            $this->initCommonExecPenalites();
            $this->collCommonExecPenalitesPartial = true;
        }
        if (!in_array($l, $this->collCommonExecPenalites->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecPenalite($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecPenalite $commonExecPenalite The commonExecPenalite object to add.
     */
    protected function doAddCommonExecPenalite($commonExecPenalite)
    {
        $this->collCommonExecPenalites[]= $commonExecPenalite;
        $commonExecPenalite->setCommonExecDossierPaiement($this);
    }

    /**
     * @param	CommonExecPenalite $commonExecPenalite The commonExecPenalite object to remove.
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function removeCommonExecPenalite($commonExecPenalite)
    {
        if ($this->getCommonExecPenalites()->contains($commonExecPenalite)) {
            $this->collCommonExecPenalites->remove($this->collCommonExecPenalites->search($commonExecPenalite));
            if (null === $this->commonExecPenalitesScheduledForDeletion) {
                $this->commonExecPenalitesScheduledForDeletion = clone $this->collCommonExecPenalites;
                $this->commonExecPenalitesScheduledForDeletion->clear();
            }
            $this->commonExecPenalitesScheduledForDeletion[]= $commonExecPenalite;
            $commonExecPenalite->setCommonExecDossierPaiement(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonExecPieceDossierpaiements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecDossierPaiement The current object (for fluent API support)
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
     * If this CommonExecDossierPaiement is new, it will return
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
                    ->filterByCommonExecDossierPaiement($this)
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
     * @return CommonExecDossierPaiement The current object (for fluent API support)
     */
    public function setCommonExecPieceDossierpaiements(PropelCollection $commonExecPieceDossierpaiements, PropelPDO $con = null)
    {
        $commonExecPieceDossierpaiementsToDelete = $this->getCommonExecPieceDossierpaiements(new Criteria(), $con)->diff($commonExecPieceDossierpaiements);


        $this->commonExecPieceDossierpaiementsScheduledForDeletion = $commonExecPieceDossierpaiementsToDelete;

        foreach ($commonExecPieceDossierpaiementsToDelete as $commonExecPieceDossierpaiementRemoved) {
            $commonExecPieceDossierpaiementRemoved->setCommonExecDossierPaiement(null);
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
                ->filterByCommonExecDossierPaiement($this)
                ->count($con);
        }

        return count($this->collCommonExecPieceDossierpaiements);
    }

    /**
     * Method called to associate a CommonExecPieceDossierpaiement object to this object
     * through the CommonExecPieceDossierpaiement foreign key attribute.
     *
     * @param   CommonExecPieceDossierpaiement $l CommonExecPieceDossierpaiement
     * @return CommonExecDossierPaiement The current object (for fluent API support)
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
        $commonExecPieceDossierpaiement->setCommonExecDossierPaiement($this);
    }

    /**
     * @param	CommonExecPieceDossierpaiement $commonExecPieceDossierpaiement The commonExecPieceDossierpaiement object to remove.
     * @return CommonExecDossierPaiement The current object (for fluent API support)
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
            $commonExecPieceDossierpaiement->setCommonExecDossierPaiement(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecDossierPaiement is new, it will return
     * an empty collection; or if this CommonExecDossierPaiement has previously
     * been saved, it will retrieve related CommonExecPieceDossierpaiements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecDossierPaiement.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecPieceDossierpaiement[] List of CommonExecPieceDossierpaiement objects
     */
    public function getCommonExecPieceDossierpaiementsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecPieceDossierpaiementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecPieceDossierpaiements($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nume_ordre_paiement = null;
        $this->commentaire = null;
        $this->id_contrat = null;
        $this->id_agent_creat = null;
        $this->statut = null;
        $this->date_depot = null;
        $this->date_validation = null;
        $this->date_rejet = null;
        $this->montant_a_paye_ttc = null;
        $this->date_crea = null;
        $this->id_agent_modi = null;
        $this->id_parapheur = null;
        $this->date_cloture_parapheur = null;
        $this->id_agent_validation = null;
        $this->montant_penalite = null;
        $this->montant_facture = null;
        $this->motif_rejet = null;
        $this->date_derniere_synchronisation = null;
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
            if ($this->collCommonExecDpFactures) {
                foreach ($this->collCommonExecDpFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPenalites) {
                foreach ($this->collCommonExecPenalites as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecPieceDossierpaiements) {
                foreach ($this->collCommonExecPieceDossierpaiements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonExecContrat instanceof Persistent) {
              $this->aCommonExecContrat->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecDpFactures instanceof PropelCollection) {
            $this->collCommonExecDpFactures->clearIterator();
        }
        $this->collCommonExecDpFactures = null;
        if ($this->collCommonExecPenalites instanceof PropelCollection) {
            $this->collCommonExecPenalites->clearIterator();
        }
        $this->collCommonExecPenalites = null;
        if ($this->collCommonExecPieceDossierpaiements instanceof PropelCollection) {
            $this->collCommonExecPieceDossierpaiements->clearIterator();
        }
        $this->collCommonExecPieceDossierpaiements = null;
        $this->aCommonExecContrat = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecDossierPaiementPeer::DEFAULT_STRING_FORMAT);
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
