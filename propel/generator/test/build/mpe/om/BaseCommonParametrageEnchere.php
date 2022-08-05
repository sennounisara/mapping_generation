<?php


/**
 * Base class that represents a row from the 'Parametrage_Enchere' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonParametrageEnchere extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonParametrageEncherePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonParametrageEncherePeer
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
     * The value for the refconsultation field.
     * @var        int
     */
    protected $refconsultation;

    /**
     * The value for the identiteeassociee field.
     * @var        int
     */
    protected $identiteeassociee;

    /**
     * The value for the referenceutilisateur field.
     * @var        string
     */
    protected $referenceutilisateur;

    /**
     * The value for the auteur field.
     * @var        string
     */
    protected $auteur;

    /**
     * The value for the idlot field.
     * @var        int
     */
    protected $idlot;

    /**
     * The value for the objet field.
     * @var        string
     */
    protected $objet;

    /**
     * The value for the datedebut field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $datedebut;

    /**
     * The value for the datefin field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $datefin;

    /**
     * The value for the datesuspension field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $datesuspension;

    /**
     * The value for the delaiprolongation field.
     * @var        int
     */
    protected $delaiprolongation;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the meilleureenchereobligatoire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $meilleureenchereobligatoire;

    /**
     * The value for the typebaremenetc field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $typebaremenetc;

    /**
     * The value for the typebaremeenchereglobale field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $typebaremeenchereglobale;

    /**
     * The value for the meilleurnotehaute field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $meilleurnotehaute;

    /**
     * The value for the nbrcandidatsvisible field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $nbrcandidatsvisible;

    /**
     * The value for the listecandidatsvisible field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $listecandidatsvisible;

    /**
     * The value for the rangvisible field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $rangvisible;

    /**
     * The value for the meilleureoffrevisible field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $meilleureoffrevisible;

    /**
     * The value for the montantreserve field.
     * @var        double
     */
    protected $montantreserve;

    /**
     * The value for the notemaxbaremerelatif field.
     * @var        double
     */
    protected $notemaxbaremerelatif;

    /**
     * The value for the coeffa field.
     * @var        double
     */
    protected $coeffa;

    /**
     * The value for the coeffb field.
     * @var        double
     */
    protected $coeffb;

    /**
     * The value for the coeffc field.
     * @var        double
     */
    protected $coeffc;

    /**
     * The value for the mail field.
     * @var        string
     */
    protected $mail;

    /**
     * The value for the note_entreprises field.
     * @var        string
     */
    protected $note_entreprises;

    /**
     * @var        CommonOrganisme
     */
    protected $aCommonOrganisme;

    /**
     * @var        PropelObjectCollection|CommonParametrageEnchereReference[] Collection to store aggregation of CommonParametrageEnchereReference objects.
     */
    protected $collCommonParametrageEnchereReferencesRelatedByIdenchere;
    protected $collCommonParametrageEnchereReferencesRelatedByIdencherePartial;

    /**
     * @var        PropelObjectCollection|CommonParametrageEnchereReference[] Collection to store aggregation of CommonParametrageEnchereReference objects.
     */
    protected $collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme;
    protected $collCommonParametrageEnchereReferencesRelatedByIdenchereOrganismePartial;

    /**
     * @var        PropelObjectCollection|CommonParametrageEnchereTranchesBaremeNETC[] Collection to store aggregation of CommonParametrageEnchereTranchesBaremeNETC objects.
     */
    protected $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere;
    protected $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdencherePartial;

    /**
     * @var        PropelObjectCollection|CommonParametrageEnchereTranchesBaremeNETC[] Collection to store aggregation of CommonParametrageEnchereTranchesBaremeNETC objects.
     */
    protected $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme;
    protected $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismePartial;

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
    protected $commonParametrageEnchereReferencesRelatedByIdenchereScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonParametrageEnchereReferencesRelatedByIdenchereOrganismeScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->organisme = '';
        $this->datedebut = NULL;
        $this->datefin = NULL;
        $this->datesuspension = NULL;
        $this->meilleureenchereobligatoire = '0';
        $this->typebaremenetc = '1';
        $this->typebaremeenchereglobale = '1';
        $this->meilleurnotehaute = '0';
        $this->nbrcandidatsvisible = '1';
        $this->listecandidatsvisible = '1';
        $this->rangvisible = '1';
        $this->meilleureoffrevisible = '1';
    }

    /**
     * Initializes internal state of BaseCommonParametrageEnchere object.
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
     * Get the [refconsultation] column value.
     * 
     * @return int
     */
    public function getRefconsultation()
    {

        return $this->refconsultation;
    }

    /**
     * Get the [identiteeassociee] column value.
     * 
     * @return int
     */
    public function getIdentiteeassociee()
    {

        return $this->identiteeassociee;
    }

    /**
     * Get the [referenceutilisateur] column value.
     * 
     * @return string
     */
    public function getReferenceutilisateur()
    {

        return $this->referenceutilisateur;
    }

    /**
     * Get the [auteur] column value.
     * 
     * @return string
     */
    public function getAuteur()
    {

        return $this->auteur;
    }

    /**
     * Get the [idlot] column value.
     * 
     * @return int
     */
    public function getIdlot()
    {

        return $this->idlot;
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
     * Get the [optionally formatted] temporal [datedebut] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatedebut($format = 'Y-m-d H:i:s')
    {
        if ($this->datedebut === null) {
            return null;
        }

        if ($this->datedebut === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datedebut);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datedebut, true), $x);
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
     * Get the [optionally formatted] temporal [datefin] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatefin($format = 'Y-m-d H:i:s')
    {
        if ($this->datefin === null) {
            return null;
        }

        if ($this->datefin === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datefin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datefin, true), $x);
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
     * Get the [optionally formatted] temporal [datesuspension] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatesuspension($format = 'Y-m-d H:i:s')
    {
        if ($this->datesuspension === null) {
            return null;
        }

        if ($this->datesuspension === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datesuspension);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datesuspension, true), $x);
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
     * Get the [delaiprolongation] column value.
     * 
     * @return int
     */
    public function getDelaiprolongation()
    {

        return $this->delaiprolongation;
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
     * Get the [meilleureenchereobligatoire] column value.
     * 
     * @return string
     */
    public function getMeilleureenchereobligatoire()
    {

        return $this->meilleureenchereobligatoire;
    }

    /**
     * Get the [typebaremenetc] column value.
     * 
     * @return string
     */
    public function getTypebaremenetc()
    {

        return $this->typebaremenetc;
    }

    /**
     * Get the [typebaremeenchereglobale] column value.
     * 
     * @return string
     */
    public function getTypebaremeenchereglobale()
    {

        return $this->typebaremeenchereglobale;
    }

    /**
     * Get the [meilleurnotehaute] column value.
     * 
     * @return string
     */
    public function getMeilleurnotehaute()
    {

        return $this->meilleurnotehaute;
    }

    /**
     * Get the [nbrcandidatsvisible] column value.
     * 
     * @return string
     */
    public function getNbrcandidatsvisible()
    {

        return $this->nbrcandidatsvisible;
    }

    /**
     * Get the [listecandidatsvisible] column value.
     * 
     * @return string
     */
    public function getListecandidatsvisible()
    {

        return $this->listecandidatsvisible;
    }

    /**
     * Get the [rangvisible] column value.
     * 
     * @return string
     */
    public function getRangvisible()
    {

        return $this->rangvisible;
    }

    /**
     * Get the [meilleureoffrevisible] column value.
     * 
     * @return string
     */
    public function getMeilleureoffrevisible()
    {

        return $this->meilleureoffrevisible;
    }

    /**
     * Get the [montantreserve] column value.
     * 
     * @return double
     */
    public function getMontantreserve()
    {

        return $this->montantreserve;
    }

    /**
     * Get the [notemaxbaremerelatif] column value.
     * 
     * @return double
     */
    public function getNotemaxbaremerelatif()
    {

        return $this->notemaxbaremerelatif;
    }

    /**
     * Get the [coeffa] column value.
     * 
     * @return double
     */
    public function getCoeffa()
    {

        return $this->coeffa;
    }

    /**
     * Get the [coeffb] column value.
     * 
     * @return double
     */
    public function getCoeffb()
    {

        return $this->coeffb;
    }

    /**
     * Get the [coeffc] column value.
     * 
     * @return double
     */
    public function getCoeffc()
    {

        return $this->coeffc;
    }

    /**
     * Get the [mail] column value.
     * 
     * @return string
     */
    public function getMail()
    {

        return $this->mail;
    }

    /**
     * Get the [note_entreprises] column value.
     * 
     * @return string
     */
    public function getNoteEntreprises()
    {

        return $this->note_entreprises;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::ORGANISME;
        }

        if ($this->aCommonOrganisme !== null && $this->aCommonOrganisme->getAcronyme() !== $v) {
            $this->aCommonOrganisme = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [refconsultation] column.
     * 
     * @param int $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setRefconsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->refconsultation !== $v) {
            $this->refconsultation = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::REFCONSULTATION;
        }


        return $this;
    } // setRefconsultation()

    /**
     * Set the value of [identiteeassociee] column.
     * 
     * @param int $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setIdentiteeassociee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->identiteeassociee !== $v) {
            $this->identiteeassociee = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::IDENTITEEASSOCIEE;
        }


        return $this;
    } // setIdentiteeassociee()

    /**
     * Set the value of [referenceutilisateur] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setReferenceutilisateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->referenceutilisateur !== $v) {
            $this->referenceutilisateur = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::REFERENCEUTILISATEUR;
        }


        return $this;
    } // setReferenceutilisateur()

    /**
     * Set the value of [auteur] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setAuteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->auteur !== $v) {
            $this->auteur = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::AUTEUR;
        }


        return $this;
    } // setAuteur()

    /**
     * Set the value of [idlot] column.
     * 
     * @param int $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setIdlot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idlot !== $v) {
            $this->idlot = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::IDLOT;
        }


        return $this;
    } // setIdlot()

    /**
     * Set the value of [objet] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet !== $v) {
            $this->objet = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::OBJET;
        }


        return $this;
    } // setObjet()

    /**
     * Sets the value of [datedebut] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setDatedebut($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datedebut !== null || $dt !== null) {
            $currentDateAsString = ($this->datedebut !== null && $tmpDt = new DateTime($this->datedebut)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->datedebut = $newDateAsString;
                $this->modifiedColumns[] = CommonParametrageEncherePeer::DATEDEBUT;
            }
        } // if either are not null


        return $this;
    } // setDatedebut()

    /**
     * Sets the value of [datefin] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setDatefin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datefin !== null || $dt !== null) {
            $currentDateAsString = ($this->datefin !== null && $tmpDt = new DateTime($this->datefin)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->datefin = $newDateAsString;
                $this->modifiedColumns[] = CommonParametrageEncherePeer::DATEFIN;
            }
        } // if either are not null


        return $this;
    } // setDatefin()

    /**
     * Sets the value of [datesuspension] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setDatesuspension($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datesuspension !== null || $dt !== null) {
            $currentDateAsString = ($this->datesuspension !== null && $tmpDt = new DateTime($this->datesuspension)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->datesuspension = $newDateAsString;
                $this->modifiedColumns[] = CommonParametrageEncherePeer::DATESUSPENSION;
            }
        } // if either are not null


        return $this;
    } // setDatesuspension()

    /**
     * Set the value of [delaiprolongation] column.
     * 
     * @param int $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setDelaiprolongation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delaiprolongation !== $v) {
            $this->delaiprolongation = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::DELAIPROLONGATION;
        }


        return $this;
    } // setDelaiprolongation()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [meilleureenchereobligatoire] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setMeilleureenchereobligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->meilleureenchereobligatoire !== $v) {
            $this->meilleureenchereobligatoire = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::MEILLEUREENCHEREOBLIGATOIRE;
        }


        return $this;
    } // setMeilleureenchereobligatoire()

    /**
     * Set the value of [typebaremenetc] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setTypebaremenetc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typebaremenetc !== $v) {
            $this->typebaremenetc = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::TYPEBAREMENETC;
        }


        return $this;
    } // setTypebaremenetc()

    /**
     * Set the value of [typebaremeenchereglobale] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setTypebaremeenchereglobale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->typebaremeenchereglobale !== $v) {
            $this->typebaremeenchereglobale = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::TYPEBAREMEENCHEREGLOBALE;
        }


        return $this;
    } // setTypebaremeenchereglobale()

    /**
     * Set the value of [meilleurnotehaute] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setMeilleurnotehaute($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->meilleurnotehaute !== $v) {
            $this->meilleurnotehaute = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::MEILLEURNOTEHAUTE;
        }


        return $this;
    } // setMeilleurnotehaute()

    /**
     * Set the value of [nbrcandidatsvisible] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setNbrcandidatsvisible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nbrcandidatsvisible !== $v) {
            $this->nbrcandidatsvisible = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::NBRCANDIDATSVISIBLE;
        }


        return $this;
    } // setNbrcandidatsvisible()

    /**
     * Set the value of [listecandidatsvisible] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setListecandidatsvisible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->listecandidatsvisible !== $v) {
            $this->listecandidatsvisible = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::LISTECANDIDATSVISIBLE;
        }


        return $this;
    } // setListecandidatsvisible()

    /**
     * Set the value of [rangvisible] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setRangvisible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rangvisible !== $v) {
            $this->rangvisible = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::RANGVISIBLE;
        }


        return $this;
    } // setRangvisible()

    /**
     * Set the value of [meilleureoffrevisible] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setMeilleureoffrevisible($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->meilleureoffrevisible !== $v) {
            $this->meilleureoffrevisible = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::MEILLEUREOFFREVISIBLE;
        }


        return $this;
    } // setMeilleureoffrevisible()

    /**
     * Set the value of [montantreserve] column.
     * 
     * @param double $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setMontantreserve($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montantreserve !== $v) {
            $this->montantreserve = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::MONTANTRESERVE;
        }


        return $this;
    } // setMontantreserve()

    /**
     * Set the value of [notemaxbaremerelatif] column.
     * 
     * @param double $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setNotemaxbaremerelatif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->notemaxbaremerelatif !== $v) {
            $this->notemaxbaremerelatif = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::NOTEMAXBAREMERELATIF;
        }


        return $this;
    } // setNotemaxbaremerelatif()

    /**
     * Set the value of [coeffa] column.
     * 
     * @param double $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setCoeffa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->coeffa !== $v) {
            $this->coeffa = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::COEFFA;
        }


        return $this;
    } // setCoeffa()

    /**
     * Set the value of [coeffb] column.
     * 
     * @param double $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setCoeffb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->coeffb !== $v) {
            $this->coeffb = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::COEFFB;
        }


        return $this;
    } // setCoeffb()

    /**
     * Set the value of [coeffc] column.
     * 
     * @param double $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setCoeffc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->coeffc !== $v) {
            $this->coeffc = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::COEFFC;
        }


        return $this;
    } // setCoeffc()

    /**
     * Set the value of [mail] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [note_entreprises] column.
     * 
     * @param string $v new value
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setNoteEntreprises($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->note_entreprises !== $v) {
            $this->note_entreprises = $v;
            $this->modifiedColumns[] = CommonParametrageEncherePeer::NOTE_ENTREPRISES;
        }


        return $this;
    } // setNoteEntreprises()

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

            if ($this->datedebut !== NULL) {
                return false;
            }

            if ($this->datefin !== NULL) {
                return false;
            }

            if ($this->datesuspension !== NULL) {
                return false;
            }

            if ($this->meilleureenchereobligatoire !== '0') {
                return false;
            }

            if ($this->typebaremenetc !== '1') {
                return false;
            }

            if ($this->typebaremeenchereglobale !== '1') {
                return false;
            }

            if ($this->meilleurnotehaute !== '0') {
                return false;
            }

            if ($this->nbrcandidatsvisible !== '1') {
                return false;
            }

            if ($this->listecandidatsvisible !== '1') {
                return false;
            }

            if ($this->rangvisible !== '1') {
                return false;
            }

            if ($this->meilleureoffrevisible !== '1') {
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
            $this->refconsultation = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->identiteeassociee = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->referenceutilisateur = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->auteur = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->idlot = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->objet = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->datedebut = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->datefin = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->datesuspension = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->delaiprolongation = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->commentaire = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->meilleureenchereobligatoire = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->typebaremenetc = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->typebaremeenchereglobale = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->meilleurnotehaute = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->nbrcandidatsvisible = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->listecandidatsvisible = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->rangvisible = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->meilleureoffrevisible = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->montantreserve = ($row[$startcol + 21] !== null) ? (double) $row[$startcol + 21] : null;
            $this->notemaxbaremerelatif = ($row[$startcol + 22] !== null) ? (double) $row[$startcol + 22] : null;
            $this->coeffa = ($row[$startcol + 23] !== null) ? (double) $row[$startcol + 23] : null;
            $this->coeffb = ($row[$startcol + 24] !== null) ? (double) $row[$startcol + 24] : null;
            $this->coeffc = ($row[$startcol + 25] !== null) ? (double) $row[$startcol + 25] : null;
            $this->mail = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->note_entreprises = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 28; // 28 = CommonParametrageEncherePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonParametrageEnchere object", $e);
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

        if ($this->aCommonOrganisme !== null && $this->organisme !== $this->aCommonOrganisme->getAcronyme()) {
            $this->aCommonOrganisme = null;
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
            $con = Propel::getConnection(CommonParametrageEncherePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonParametrageEncherePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonOrganisme = null;
            $this->collCommonParametrageEnchereReferencesRelatedByIdenchere = null;

            $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme = null;

            $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere = null;

            $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme = null;

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
            $con = Propel::getConnection(CommonParametrageEncherePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonParametrageEnchereQuery::create()
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
            $con = Propel::getConnection(CommonParametrageEncherePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonParametrageEncherePeer::addInstanceToPool($this);
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

            if ($this->aCommonOrganisme !== null) {
                if ($this->aCommonOrganisme->isModified() || $this->aCommonOrganisme->isNew()) {
                    $affectedRows += $this->aCommonOrganisme->save($con);
                }
                $this->setCommonOrganisme($this->aCommonOrganisme);
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

            if ($this->commonParametrageEnchereReferencesRelatedByIdenchereScheduledForDeletion !== null) {
                if (!$this->commonParametrageEnchereReferencesRelatedByIdenchereScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonParametrageEnchereReferenceQuery::create()
                        ->filterByPrimaryKeys($this->commonParametrageEnchereReferencesRelatedByIdenchereScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonParametrageEnchereReferencesRelatedByIdenchereScheduledForDeletion = null;
                }
            }

            if ($this->collCommonParametrageEnchereReferencesRelatedByIdenchere !== null) {
                foreach ($this->collCommonParametrageEnchereReferencesRelatedByIdenchere as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonParametrageEnchereReferencesRelatedByIdenchereOrganismeScheduledForDeletion !== null) {
                if (!$this->commonParametrageEnchereReferencesRelatedByIdenchereOrganismeScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonParametrageEnchereReferenceQuery::create()
                        ->filterByPrimaryKeys($this->commonParametrageEnchereReferencesRelatedByIdenchereOrganismeScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonParametrageEnchereReferencesRelatedByIdenchereOrganismeScheduledForDeletion = null;
                }
            }

            if ($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme !== null) {
                foreach ($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereScheduledForDeletion !== null) {
                if (!$this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonParametrageEnchereTranchesBaremeNETCQuery::create()
                        ->filterByPrimaryKeys($this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereScheduledForDeletion = null;
                }
            }

            if ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere !== null) {
                foreach ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeScheduledForDeletion !== null) {
                if (!$this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonParametrageEnchereTranchesBaremeNETCQuery::create()
                        ->filterByPrimaryKeys($this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeScheduledForDeletion = null;
                }
            }

            if ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme !== null) {
                foreach ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme as $referrerFK) {
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

        $this->modifiedColumns[] = CommonParametrageEncherePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonParametrageEncherePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonParametrageEncherePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::REFCONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`refConsultation`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::IDENTITEEASSOCIEE)) {
            $modifiedColumns[':p' . $index++]  = '`idEntiteeAssociee`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::REFERENCEUTILISATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`referenceUtilisateur`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::AUTEUR)) {
            $modifiedColumns[':p' . $index++]  = '`auteur`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::IDLOT)) {
            $modifiedColumns[':p' . $index++]  = '`idLot`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`objet`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::DATEDEBUT)) {
            $modifiedColumns[':p' . $index++]  = '`dateDebut`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::DATEFIN)) {
            $modifiedColumns[':p' . $index++]  = '`dateFin`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::DATESUSPENSION)) {
            $modifiedColumns[':p' . $index++]  = '`dateSuspension`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::DELAIPROLONGATION)) {
            $modifiedColumns[':p' . $index++]  = '`delaiProlongation`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::MEILLEUREENCHEREOBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`meilleureEnchereObligatoire`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::TYPEBAREMENETC)) {
            $modifiedColumns[':p' . $index++]  = '`typeBaremeNETC`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::TYPEBAREMEENCHEREGLOBALE)) {
            $modifiedColumns[':p' . $index++]  = '`typeBaremeEnchereGlobale`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::MEILLEURNOTEHAUTE)) {
            $modifiedColumns[':p' . $index++]  = '`meilleurNoteHaute`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::NBRCANDIDATSVISIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`nbrCandidatsVisible`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::LISTECANDIDATSVISIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`listeCandidatsVisible`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::RANGVISIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`rangVisible`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::MEILLEUREOFFREVISIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`meilleureOffreVisible`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::MONTANTRESERVE)) {
            $modifiedColumns[':p' . $index++]  = '`montantReserve`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::NOTEMAXBAREMERELATIF)) {
            $modifiedColumns[':p' . $index++]  = '`noteMaxBaremeRelatif`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::COEFFA)) {
            $modifiedColumns[':p' . $index++]  = '`coeffA`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::COEFFB)) {
            $modifiedColumns[':p' . $index++]  = '`coeffB`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::COEFFC)) {
            $modifiedColumns[':p' . $index++]  = '`coeffC`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`mail`';
        }
        if ($this->isColumnModified(CommonParametrageEncherePeer::NOTE_ENTREPRISES)) {
            $modifiedColumns[':p' . $index++]  = '`note_entreprises`';
        }

        $sql = sprintf(
            'INSERT INTO `Parametrage_Enchere` (%s) VALUES (%s)',
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
                    case '`refConsultation`':						
                        $stmt->bindValue($identifier, $this->refconsultation, PDO::PARAM_INT);
                        break;
                    case '`idEntiteeAssociee`':						
                        $stmt->bindValue($identifier, $this->identiteeassociee, PDO::PARAM_INT);
                        break;
                    case '`referenceUtilisateur`':						
                        $stmt->bindValue($identifier, $this->referenceutilisateur, PDO::PARAM_STR);
                        break;
                    case '`auteur`':						
                        $stmt->bindValue($identifier, $this->auteur, PDO::PARAM_STR);
                        break;
                    case '`idLot`':						
                        $stmt->bindValue($identifier, $this->idlot, PDO::PARAM_INT);
                        break;
                    case '`objet`':						
                        $stmt->bindValue($identifier, $this->objet, PDO::PARAM_STR);
                        break;
                    case '`dateDebut`':						
                        $stmt->bindValue($identifier, $this->datedebut, PDO::PARAM_STR);
                        break;
                    case '`dateFin`':						
                        $stmt->bindValue($identifier, $this->datefin, PDO::PARAM_STR);
                        break;
                    case '`dateSuspension`':						
                        $stmt->bindValue($identifier, $this->datesuspension, PDO::PARAM_STR);
                        break;
                    case '`delaiProlongation`':						
                        $stmt->bindValue($identifier, $this->delaiprolongation, PDO::PARAM_INT);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`meilleureEnchereObligatoire`':						
                        $stmt->bindValue($identifier, $this->meilleureenchereobligatoire, PDO::PARAM_STR);
                        break;
                    case '`typeBaremeNETC`':						
                        $stmt->bindValue($identifier, $this->typebaremenetc, PDO::PARAM_STR);
                        break;
                    case '`typeBaremeEnchereGlobale`':						
                        $stmt->bindValue($identifier, $this->typebaremeenchereglobale, PDO::PARAM_STR);
                        break;
                    case '`meilleurNoteHaute`':						
                        $stmt->bindValue($identifier, $this->meilleurnotehaute, PDO::PARAM_STR);
                        break;
                    case '`nbrCandidatsVisible`':						
                        $stmt->bindValue($identifier, $this->nbrcandidatsvisible, PDO::PARAM_STR);
                        break;
                    case '`listeCandidatsVisible`':						
                        $stmt->bindValue($identifier, $this->listecandidatsvisible, PDO::PARAM_STR);
                        break;
                    case '`rangVisible`':						
                        $stmt->bindValue($identifier, $this->rangvisible, PDO::PARAM_STR);
                        break;
                    case '`meilleureOffreVisible`':						
                        $stmt->bindValue($identifier, $this->meilleureoffrevisible, PDO::PARAM_STR);
                        break;
                    case '`montantReserve`':						
                        $stmt->bindValue($identifier, $this->montantreserve, PDO::PARAM_STR);
                        break;
                    case '`noteMaxBaremeRelatif`':						
                        $stmt->bindValue($identifier, $this->notemaxbaremerelatif, PDO::PARAM_STR);
                        break;
                    case '`coeffA`':						
                        $stmt->bindValue($identifier, $this->coeffa, PDO::PARAM_STR);
                        break;
                    case '`coeffB`':						
                        $stmt->bindValue($identifier, $this->coeffb, PDO::PARAM_STR);
                        break;
                    case '`coeffC`':						
                        $stmt->bindValue($identifier, $this->coeffc, PDO::PARAM_STR);
                        break;
                    case '`mail`':						
                        $stmt->bindValue($identifier, $this->mail, PDO::PARAM_STR);
                        break;
                    case '`note_entreprises`':						
                        $stmt->bindValue($identifier, $this->note_entreprises, PDO::PARAM_STR);
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

            if ($this->aCommonOrganisme !== null) {
                if (!$this->aCommonOrganisme->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonOrganisme->getValidationFailures());
                }
            }


            if (($retval = CommonParametrageEncherePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonParametrageEnchereReferencesRelatedByIdenchere !== null) {
                    foreach ($this->collCommonParametrageEnchereReferencesRelatedByIdenchere as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme !== null) {
                    foreach ($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere !== null) {
                    foreach ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme !== null) {
                    foreach ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme as $referrerFK) {
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
        $pos = CommonParametrageEncherePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getRefconsultation();
                break;
            case 3:
                return $this->getIdentiteeassociee();
                break;
            case 4:
                return $this->getReferenceutilisateur();
                break;
            case 5:
                return $this->getAuteur();
                break;
            case 6:
                return $this->getIdlot();
                break;
            case 7:
                return $this->getObjet();
                break;
            case 8:
                return $this->getDatedebut();
                break;
            case 9:
                return $this->getDatefin();
                break;
            case 10:
                return $this->getDatesuspension();
                break;
            case 11:
                return $this->getDelaiprolongation();
                break;
            case 12:
                return $this->getCommentaire();
                break;
            case 13:
                return $this->getMeilleureenchereobligatoire();
                break;
            case 14:
                return $this->getTypebaremenetc();
                break;
            case 15:
                return $this->getTypebaremeenchereglobale();
                break;
            case 16:
                return $this->getMeilleurnotehaute();
                break;
            case 17:
                return $this->getNbrcandidatsvisible();
                break;
            case 18:
                return $this->getListecandidatsvisible();
                break;
            case 19:
                return $this->getRangvisible();
                break;
            case 20:
                return $this->getMeilleureoffrevisible();
                break;
            case 21:
                return $this->getMontantreserve();
                break;
            case 22:
                return $this->getNotemaxbaremerelatif();
                break;
            case 23:
                return $this->getCoeffa();
                break;
            case 24:
                return $this->getCoeffb();
                break;
            case 25:
                return $this->getCoeffc();
                break;
            case 26:
                return $this->getMail();
                break;
            case 27:
                return $this->getNoteEntreprises();
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
        if (isset($alreadyDumpedObjects['CommonParametrageEnchere'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonParametrageEnchere'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonParametrageEncherePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getRefconsultation(),
            $keys[3] => $this->getIdentiteeassociee(),
            $keys[4] => $this->getReferenceutilisateur(),
            $keys[5] => $this->getAuteur(),
            $keys[6] => $this->getIdlot(),
            $keys[7] => $this->getObjet(),
            $keys[8] => $this->getDatedebut(),
            $keys[9] => $this->getDatefin(),
            $keys[10] => $this->getDatesuspension(),
            $keys[11] => $this->getDelaiprolongation(),
            $keys[12] => $this->getCommentaire(),
            $keys[13] => $this->getMeilleureenchereobligatoire(),
            $keys[14] => $this->getTypebaremenetc(),
            $keys[15] => $this->getTypebaremeenchereglobale(),
            $keys[16] => $this->getMeilleurnotehaute(),
            $keys[17] => $this->getNbrcandidatsvisible(),
            $keys[18] => $this->getListecandidatsvisible(),
            $keys[19] => $this->getRangvisible(),
            $keys[20] => $this->getMeilleureoffrevisible(),
            $keys[21] => $this->getMontantreserve(),
            $keys[22] => $this->getNotemaxbaremerelatif(),
            $keys[23] => $this->getCoeffa(),
            $keys[24] => $this->getCoeffb(),
            $keys[25] => $this->getCoeffc(),
            $keys[26] => $this->getMail(),
            $keys[27] => $this->getNoteEntreprises(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonOrganisme) {
                $result['CommonOrganisme'] = $this->aCommonOrganisme->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonParametrageEnchereReferencesRelatedByIdenchere) {
                $result['CommonParametrageEnchereReferencesRelatedByIdenchere'] = $this->collCommonParametrageEnchereReferencesRelatedByIdenchere->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme) {
                $result['CommonParametrageEnchereReferencesRelatedByIdenchereOrganisme'] = $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere) {
                $result['CommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere'] = $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme) {
                $result['CommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme'] = $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonParametrageEncherePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setRefconsultation($value);
                break;
            case 3:
                $this->setIdentiteeassociee($value);
                break;
            case 4:
                $this->setReferenceutilisateur($value);
                break;
            case 5:
                $this->setAuteur($value);
                break;
            case 6:
                $this->setIdlot($value);
                break;
            case 7:
                $this->setObjet($value);
                break;
            case 8:
                $this->setDatedebut($value);
                break;
            case 9:
                $this->setDatefin($value);
                break;
            case 10:
                $this->setDatesuspension($value);
                break;
            case 11:
                $this->setDelaiprolongation($value);
                break;
            case 12:
                $this->setCommentaire($value);
                break;
            case 13:
                $this->setMeilleureenchereobligatoire($value);
                break;
            case 14:
                $this->setTypebaremenetc($value);
                break;
            case 15:
                $this->setTypebaremeenchereglobale($value);
                break;
            case 16:
                $this->setMeilleurnotehaute($value);
                break;
            case 17:
                $this->setNbrcandidatsvisible($value);
                break;
            case 18:
                $this->setListecandidatsvisible($value);
                break;
            case 19:
                $this->setRangvisible($value);
                break;
            case 20:
                $this->setMeilleureoffrevisible($value);
                break;
            case 21:
                $this->setMontantreserve($value);
                break;
            case 22:
                $this->setNotemaxbaremerelatif($value);
                break;
            case 23:
                $this->setCoeffa($value);
                break;
            case 24:
                $this->setCoeffb($value);
                break;
            case 25:
                $this->setCoeffc($value);
                break;
            case 26:
                $this->setMail($value);
                break;
            case 27:
                $this->setNoteEntreprises($value);
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
        $keys = CommonParametrageEncherePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRefconsultation($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdentiteeassociee($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setReferenceutilisateur($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAuteur($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdlot($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setObjet($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDatedebut($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDatefin($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDatesuspension($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDelaiprolongation($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCommentaire($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMeilleureenchereobligatoire($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTypebaremenetc($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTypebaremeenchereglobale($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMeilleurnotehaute($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNbrcandidatsvisible($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setListecandidatsvisible($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setRangvisible($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setMeilleureoffrevisible($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMontantreserve($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setNotemaxbaremerelatif($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setCoeffa($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setCoeffb($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setCoeffc($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setMail($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setNoteEntreprises($arr[$keys[27]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonParametrageEncherePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonParametrageEncherePeer::ID)) $criteria->add(CommonParametrageEncherePeer::ID, $this->id);
        if ($this->isColumnModified(CommonParametrageEncherePeer::ORGANISME)) $criteria->add(CommonParametrageEncherePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonParametrageEncherePeer::REFCONSULTATION)) $criteria->add(CommonParametrageEncherePeer::REFCONSULTATION, $this->refconsultation);
        if ($this->isColumnModified(CommonParametrageEncherePeer::IDENTITEEASSOCIEE)) $criteria->add(CommonParametrageEncherePeer::IDENTITEEASSOCIEE, $this->identiteeassociee);
        if ($this->isColumnModified(CommonParametrageEncherePeer::REFERENCEUTILISATEUR)) $criteria->add(CommonParametrageEncherePeer::REFERENCEUTILISATEUR, $this->referenceutilisateur);
        if ($this->isColumnModified(CommonParametrageEncherePeer::AUTEUR)) $criteria->add(CommonParametrageEncherePeer::AUTEUR, $this->auteur);
        if ($this->isColumnModified(CommonParametrageEncherePeer::IDLOT)) $criteria->add(CommonParametrageEncherePeer::IDLOT, $this->idlot);
        if ($this->isColumnModified(CommonParametrageEncherePeer::OBJET)) $criteria->add(CommonParametrageEncherePeer::OBJET, $this->objet);
        if ($this->isColumnModified(CommonParametrageEncherePeer::DATEDEBUT)) $criteria->add(CommonParametrageEncherePeer::DATEDEBUT, $this->datedebut);
        if ($this->isColumnModified(CommonParametrageEncherePeer::DATEFIN)) $criteria->add(CommonParametrageEncherePeer::DATEFIN, $this->datefin);
        if ($this->isColumnModified(CommonParametrageEncherePeer::DATESUSPENSION)) $criteria->add(CommonParametrageEncherePeer::DATESUSPENSION, $this->datesuspension);
        if ($this->isColumnModified(CommonParametrageEncherePeer::DELAIPROLONGATION)) $criteria->add(CommonParametrageEncherePeer::DELAIPROLONGATION, $this->delaiprolongation);
        if ($this->isColumnModified(CommonParametrageEncherePeer::COMMENTAIRE)) $criteria->add(CommonParametrageEncherePeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonParametrageEncherePeer::MEILLEUREENCHEREOBLIGATOIRE)) $criteria->add(CommonParametrageEncherePeer::MEILLEUREENCHEREOBLIGATOIRE, $this->meilleureenchereobligatoire);
        if ($this->isColumnModified(CommonParametrageEncherePeer::TYPEBAREMENETC)) $criteria->add(CommonParametrageEncherePeer::TYPEBAREMENETC, $this->typebaremenetc);
        if ($this->isColumnModified(CommonParametrageEncherePeer::TYPEBAREMEENCHEREGLOBALE)) $criteria->add(CommonParametrageEncherePeer::TYPEBAREMEENCHEREGLOBALE, $this->typebaremeenchereglobale);
        if ($this->isColumnModified(CommonParametrageEncherePeer::MEILLEURNOTEHAUTE)) $criteria->add(CommonParametrageEncherePeer::MEILLEURNOTEHAUTE, $this->meilleurnotehaute);
        if ($this->isColumnModified(CommonParametrageEncherePeer::NBRCANDIDATSVISIBLE)) $criteria->add(CommonParametrageEncherePeer::NBRCANDIDATSVISIBLE, $this->nbrcandidatsvisible);
        if ($this->isColumnModified(CommonParametrageEncherePeer::LISTECANDIDATSVISIBLE)) $criteria->add(CommonParametrageEncherePeer::LISTECANDIDATSVISIBLE, $this->listecandidatsvisible);
        if ($this->isColumnModified(CommonParametrageEncherePeer::RANGVISIBLE)) $criteria->add(CommonParametrageEncherePeer::RANGVISIBLE, $this->rangvisible);
        if ($this->isColumnModified(CommonParametrageEncherePeer::MEILLEUREOFFREVISIBLE)) $criteria->add(CommonParametrageEncherePeer::MEILLEUREOFFREVISIBLE, $this->meilleureoffrevisible);
        if ($this->isColumnModified(CommonParametrageEncherePeer::MONTANTRESERVE)) $criteria->add(CommonParametrageEncherePeer::MONTANTRESERVE, $this->montantreserve);
        if ($this->isColumnModified(CommonParametrageEncherePeer::NOTEMAXBAREMERELATIF)) $criteria->add(CommonParametrageEncherePeer::NOTEMAXBAREMERELATIF, $this->notemaxbaremerelatif);
        if ($this->isColumnModified(CommonParametrageEncherePeer::COEFFA)) $criteria->add(CommonParametrageEncherePeer::COEFFA, $this->coeffa);
        if ($this->isColumnModified(CommonParametrageEncherePeer::COEFFB)) $criteria->add(CommonParametrageEncherePeer::COEFFB, $this->coeffb);
        if ($this->isColumnModified(CommonParametrageEncherePeer::COEFFC)) $criteria->add(CommonParametrageEncherePeer::COEFFC, $this->coeffc);
        if ($this->isColumnModified(CommonParametrageEncherePeer::MAIL)) $criteria->add(CommonParametrageEncherePeer::MAIL, $this->mail);
        if ($this->isColumnModified(CommonParametrageEncherePeer::NOTE_ENTREPRISES)) $criteria->add(CommonParametrageEncherePeer::NOTE_ENTREPRISES, $this->note_entreprises);

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
        $criteria = new Criteria(CommonParametrageEncherePeer::DATABASE_NAME);
        $criteria->add(CommonParametrageEncherePeer::ID, $this->id);
        $criteria->add(CommonParametrageEncherePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonParametrageEnchere (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setRefconsultation($this->getRefconsultation());
        $copyObj->setIdentiteeassociee($this->getIdentiteeassociee());
        $copyObj->setReferenceutilisateur($this->getReferenceutilisateur());
        $copyObj->setAuteur($this->getAuteur());
        $copyObj->setIdlot($this->getIdlot());
        $copyObj->setObjet($this->getObjet());
        $copyObj->setDatedebut($this->getDatedebut());
        $copyObj->setDatefin($this->getDatefin());
        $copyObj->setDatesuspension($this->getDatesuspension());
        $copyObj->setDelaiprolongation($this->getDelaiprolongation());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setMeilleureenchereobligatoire($this->getMeilleureenchereobligatoire());
        $copyObj->setTypebaremenetc($this->getTypebaremenetc());
        $copyObj->setTypebaremeenchereglobale($this->getTypebaremeenchereglobale());
        $copyObj->setMeilleurnotehaute($this->getMeilleurnotehaute());
        $copyObj->setNbrcandidatsvisible($this->getNbrcandidatsvisible());
        $copyObj->setListecandidatsvisible($this->getListecandidatsvisible());
        $copyObj->setRangvisible($this->getRangvisible());
        $copyObj->setMeilleureoffrevisible($this->getMeilleureoffrevisible());
        $copyObj->setMontantreserve($this->getMontantreserve());
        $copyObj->setNotemaxbaremerelatif($this->getNotemaxbaremerelatif());
        $copyObj->setCoeffa($this->getCoeffa());
        $copyObj->setCoeffb($this->getCoeffb());
        $copyObj->setCoeffc($this->getCoeffc());
        $copyObj->setMail($this->getMail());
        $copyObj->setNoteEntreprises($this->getNoteEntreprises());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonParametrageEnchereReferencesRelatedByIdenchere() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonParametrageEnchereReferenceRelatedByIdenchere($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($relObj->copy($deepCopy));
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
     * @return CommonParametrageEnchere Clone of current object.
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
     * @return CommonParametrageEncherePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonParametrageEncherePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonOrganisme object.
     *
     * @param   CommonOrganisme $v
     * @return CommonParametrageEnchere The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonOrganisme(CommonOrganisme $v = null)
    {
        if ($v === null) {
            $this->setOrganisme('');
        } else {
            $this->setOrganisme($v->getAcronyme());
        }

        $this->aCommonOrganisme = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonOrganisme object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonParametrageEnchere($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonOrganisme object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonOrganisme The associated CommonOrganisme object.
     * @throws PropelException
     */
    public function getCommonOrganisme(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonOrganisme === null && (($this->organisme !== "" && $this->organisme !== null)) && $doQuery) {
            $this->aCommonOrganisme = CommonOrganismeQuery::create()
                ->filterByCommonParametrageEnchere($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonOrganisme->addCommonParametrageEncheres($this);
             */
        }

        return $this->aCommonOrganisme;
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
        if ('CommonParametrageEnchereReferenceRelatedByIdenchere' == $relationName) {
            $this->initCommonParametrageEnchereReferencesRelatedByIdenchere();
        }
        if ('CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme' == $relationName) {
            $this->initCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme();
        }
        if ('CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere' == $relationName) {
            $this->initCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere();
        }
        if ('CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme' == $relationName) {
            $this->initCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme();
        }
    }

    /**
     * Clears out the collCommonParametrageEnchereReferencesRelatedByIdenchere collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonParametrageEnchere The current object (for fluent API support)
     * @see        addCommonParametrageEnchereReferencesRelatedByIdenchere()
     */
    public function clearCommonParametrageEnchereReferencesRelatedByIdenchere()
    {
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchere = null; // important to set this to null since that means it is uninitialized
        $this->collCommonParametrageEnchereReferencesRelatedByIdencherePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonParametrageEnchereReferencesRelatedByIdenchere collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonParametrageEnchereReferencesRelatedByIdenchere($v = true)
    {
        $this->collCommonParametrageEnchereReferencesRelatedByIdencherePartial = $v;
    }

    /**
     * Initializes the collCommonParametrageEnchereReferencesRelatedByIdenchere collection.
     *
     * By default this just sets the collCommonParametrageEnchereReferencesRelatedByIdenchere collection to an empty array (like clearcollCommonParametrageEnchereReferencesRelatedByIdenchere());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonParametrageEnchereReferencesRelatedByIdenchere($overrideExisting = true)
    {
        if (null !== $this->collCommonParametrageEnchereReferencesRelatedByIdenchere && !$overrideExisting) {
            return;
        }
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchere = new PropelObjectCollection();
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchere->setModel('CommonParametrageEnchereReference');
    }

    /**
     * Gets an array of CommonParametrageEnchereReference objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonParametrageEnchere is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonParametrageEnchereReference[] List of CommonParametrageEnchereReference objects
     * @throws PropelException
     */
    public function getCommonParametrageEnchereReferencesRelatedByIdenchere($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonParametrageEnchereReferencesRelatedByIdencherePartial && !$this->isNew();
        if (null === $this->collCommonParametrageEnchereReferencesRelatedByIdenchere || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonParametrageEnchereReferencesRelatedByIdenchere) {
                // return empty collection
                $this->initCommonParametrageEnchereReferencesRelatedByIdenchere();
            } else {
                $collCommonParametrageEnchereReferencesRelatedByIdenchere = CommonParametrageEnchereReferenceQuery::create(null, $criteria)
                    ->filterByCommonParametrageEnchereRelatedByIdenchere($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonParametrageEnchereReferencesRelatedByIdencherePartial && count($collCommonParametrageEnchereReferencesRelatedByIdenchere)) {
                      $this->initCommonParametrageEnchereReferencesRelatedByIdenchere(false);

                      foreach ($collCommonParametrageEnchereReferencesRelatedByIdenchere as $obj) {
                        if (false == $this->collCommonParametrageEnchereReferencesRelatedByIdenchere->contains($obj)) {
                          $this->collCommonParametrageEnchereReferencesRelatedByIdenchere->append($obj);
                        }
                      }

                      $this->collCommonParametrageEnchereReferencesRelatedByIdencherePartial = true;
                    }

                    $collCommonParametrageEnchereReferencesRelatedByIdenchere->getInternalIterator()->rewind();

                    return $collCommonParametrageEnchereReferencesRelatedByIdenchere;
                }

                if ($partial && $this->collCommonParametrageEnchereReferencesRelatedByIdenchere) {
                    foreach ($this->collCommonParametrageEnchereReferencesRelatedByIdenchere as $obj) {
                        if ($obj->isNew()) {
                            $collCommonParametrageEnchereReferencesRelatedByIdenchere[] = $obj;
                        }
                    }
                }

                $this->collCommonParametrageEnchereReferencesRelatedByIdenchere = $collCommonParametrageEnchereReferencesRelatedByIdenchere;
                $this->collCommonParametrageEnchereReferencesRelatedByIdencherePartial = false;
            }
        }

        return $this->collCommonParametrageEnchereReferencesRelatedByIdenchere;
    }

    /**
     * Sets a collection of CommonParametrageEnchereReferenceRelatedByIdenchere objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonParametrageEnchereReferencesRelatedByIdenchere A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setCommonParametrageEnchereReferencesRelatedByIdenchere(PropelCollection $commonParametrageEnchereReferencesRelatedByIdenchere, PropelPDO $con = null)
    {
        $commonParametrageEnchereReferencesRelatedByIdenchereToDelete = $this->getCommonParametrageEnchereReferencesRelatedByIdenchere(new Criteria(), $con)->diff($commonParametrageEnchereReferencesRelatedByIdenchere);


        $this->commonParametrageEnchereReferencesRelatedByIdenchereScheduledForDeletion = $commonParametrageEnchereReferencesRelatedByIdenchereToDelete;

        foreach ($commonParametrageEnchereReferencesRelatedByIdenchereToDelete as $commonParametrageEnchereReferenceRelatedByIdenchereRemoved) {
            $commonParametrageEnchereReferenceRelatedByIdenchereRemoved->setCommonParametrageEnchereRelatedByIdenchere(null);
        }

        $this->collCommonParametrageEnchereReferencesRelatedByIdenchere = null;
        foreach ($commonParametrageEnchereReferencesRelatedByIdenchere as $commonParametrageEnchereReferenceRelatedByIdenchere) {
            $this->addCommonParametrageEnchereReferenceRelatedByIdenchere($commonParametrageEnchereReferenceRelatedByIdenchere);
        }

        $this->collCommonParametrageEnchereReferencesRelatedByIdenchere = $commonParametrageEnchereReferencesRelatedByIdenchere;
        $this->collCommonParametrageEnchereReferencesRelatedByIdencherePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonParametrageEnchereReference objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonParametrageEnchereReference objects.
     * @throws PropelException
     */
    public function countCommonParametrageEnchereReferencesRelatedByIdenchere(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonParametrageEnchereReferencesRelatedByIdencherePartial && !$this->isNew();
        if (null === $this->collCommonParametrageEnchereReferencesRelatedByIdenchere || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonParametrageEnchereReferencesRelatedByIdenchere) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonParametrageEnchereReferencesRelatedByIdenchere());
            }
            $query = CommonParametrageEnchereReferenceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonParametrageEnchereRelatedByIdenchere($this)
                ->count($con);
        }

        return count($this->collCommonParametrageEnchereReferencesRelatedByIdenchere);
    }

    /**
     * Method called to associate a CommonParametrageEnchereReference object to this object
     * through the CommonParametrageEnchereReference foreign key attribute.
     *
     * @param   CommonParametrageEnchereReference $l CommonParametrageEnchereReference
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function addCommonParametrageEnchereReferenceRelatedByIdenchere(CommonParametrageEnchereReference $l)
    {
        if ($this->collCommonParametrageEnchereReferencesRelatedByIdenchere === null) {
            $this->initCommonParametrageEnchereReferencesRelatedByIdenchere();
            $this->collCommonParametrageEnchereReferencesRelatedByIdencherePartial = true;
        }
        if (!in_array($l, $this->collCommonParametrageEnchereReferencesRelatedByIdenchere->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonParametrageEnchereReferenceRelatedByIdenchere($l);
        }

        return $this;
    }

    /**
     * @param	CommonParametrageEnchereReferenceRelatedByIdenchere $commonParametrageEnchereReferenceRelatedByIdenchere The commonParametrageEnchereReferenceRelatedByIdenchere object to add.
     */
    protected function doAddCommonParametrageEnchereReferenceRelatedByIdenchere($commonParametrageEnchereReferenceRelatedByIdenchere)
    {
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchere[]= $commonParametrageEnchereReferenceRelatedByIdenchere;
        $commonParametrageEnchereReferenceRelatedByIdenchere->setCommonParametrageEnchereRelatedByIdenchere($this);
    }

    /**
     * @param	CommonParametrageEnchereReferenceRelatedByIdenchere $commonParametrageEnchereReferenceRelatedByIdenchere The commonParametrageEnchereReferenceRelatedByIdenchere object to remove.
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function removeCommonParametrageEnchereReferenceRelatedByIdenchere($commonParametrageEnchereReferenceRelatedByIdenchere)
    {
        if ($this->getCommonParametrageEnchereReferencesRelatedByIdenchere()->contains($commonParametrageEnchereReferenceRelatedByIdenchere)) {
            $this->collCommonParametrageEnchereReferencesRelatedByIdenchere->remove($this->collCommonParametrageEnchereReferencesRelatedByIdenchere->search($commonParametrageEnchereReferenceRelatedByIdenchere));
            if (null === $this->commonParametrageEnchereReferencesRelatedByIdenchereScheduledForDeletion) {
                $this->commonParametrageEnchereReferencesRelatedByIdenchereScheduledForDeletion = clone $this->collCommonParametrageEnchereReferencesRelatedByIdenchere;
                $this->commonParametrageEnchereReferencesRelatedByIdenchereScheduledForDeletion->clear();
            }
            $this->commonParametrageEnchereReferencesRelatedByIdenchereScheduledForDeletion[]= clone $commonParametrageEnchereReferenceRelatedByIdenchere;
            $commonParametrageEnchereReferenceRelatedByIdenchere->setCommonParametrageEnchereRelatedByIdenchere(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonParametrageEnchere The current object (for fluent API support)
     * @see        addCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme()
     */
    public function clearCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme()
    {
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme = null; // important to set this to null since that means it is uninitialized
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganismePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme($v = true)
    {
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganismePartial = $v;
    }

    /**
     * Initializes the collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme collection.
     *
     * By default this just sets the collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme collection to an empty array (like clearcollCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme($overrideExisting = true)
    {
        if (null !== $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme && !$overrideExisting) {
            return;
        }
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme = new PropelObjectCollection();
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme->setModel('CommonParametrageEnchereReference');
    }

    /**
     * Gets an array of CommonParametrageEnchereReference objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonParametrageEnchere is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonParametrageEnchereReference[] List of CommonParametrageEnchereReference objects
     * @throws PropelException
     */
    public function getCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganismePartial && !$this->isNew();
        if (null === $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme) {
                // return empty collection
                $this->initCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme();
            } else {
                $collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme = CommonParametrageEnchereReferenceQuery::create(null, $criteria)
                    ->filterByCommonParametrageEnchereRelatedByIdenchereOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganismePartial && count($collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme)) {
                      $this->initCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme(false);

                      foreach ($collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme as $obj) {
                        if (false == $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme->contains($obj)) {
                          $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme->append($obj);
                        }
                      }

                      $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganismePartial = true;
                    }

                    $collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme->getInternalIterator()->rewind();

                    return $collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme;
                }

                if ($partial && $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme) {
                    foreach ($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme as $obj) {
                        if ($obj->isNew()) {
                            $collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme[] = $obj;
                        }
                    }
                }

                $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme = $collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme;
                $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganismePartial = false;
            }
        }

        return $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme;
    }

    /**
     * Sets a collection of CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonParametrageEnchereReferencesRelatedByIdenchereOrganisme A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme(PropelCollection $commonParametrageEnchereReferencesRelatedByIdenchereOrganisme, PropelPDO $con = null)
    {
        $commonParametrageEnchereReferencesRelatedByIdenchereOrganismeToDelete = $this->getCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme(new Criteria(), $con)->diff($commonParametrageEnchereReferencesRelatedByIdenchereOrganisme);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonParametrageEnchereReferencesRelatedByIdenchereOrganismeScheduledForDeletion = clone $commonParametrageEnchereReferencesRelatedByIdenchereOrganismeToDelete;

        foreach ($commonParametrageEnchereReferencesRelatedByIdenchereOrganismeToDelete as $commonParametrageEnchereReferenceRelatedByIdenchereOrganismeRemoved) {
            $commonParametrageEnchereReferenceRelatedByIdenchereOrganismeRemoved->setCommonParametrageEnchereRelatedByIdenchereOrganisme(null);
        }

        $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme = null;
        foreach ($commonParametrageEnchereReferencesRelatedByIdenchereOrganisme as $commonParametrageEnchereReferenceRelatedByIdenchereOrganisme) {
            $this->addCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($commonParametrageEnchereReferenceRelatedByIdenchereOrganisme);
        }

        $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme = $commonParametrageEnchereReferencesRelatedByIdenchereOrganisme;
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganismePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonParametrageEnchereReference objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonParametrageEnchereReference objects.
     * @throws PropelException
     */
    public function countCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganismePartial && !$this->isNew();
        if (null === $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme());
            }
            $query = CommonParametrageEnchereReferenceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonParametrageEnchereRelatedByIdenchereOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme);
    }

    /**
     * Method called to associate a CommonParametrageEnchereReference object to this object
     * through the CommonParametrageEnchereReference foreign key attribute.
     *
     * @param   CommonParametrageEnchereReference $l CommonParametrageEnchereReference
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function addCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme(CommonParametrageEnchereReference $l)
    {
        if ($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme === null) {
            $this->initCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme();
            $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganismePartial = true;
        }
        if (!in_array($l, $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($l);
        }

        return $this;
    }

    /**
     * @param	CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme $commonParametrageEnchereReferenceRelatedByIdenchereOrganisme The commonParametrageEnchereReferenceRelatedByIdenchereOrganisme object to add.
     */
    protected function doAddCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($commonParametrageEnchereReferenceRelatedByIdenchereOrganisme)
    {
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme[]= $commonParametrageEnchereReferenceRelatedByIdenchereOrganisme;
        $commonParametrageEnchereReferenceRelatedByIdenchereOrganisme->setCommonParametrageEnchereRelatedByIdenchereOrganisme($this);
    }

    /**
     * @param	CommonParametrageEnchereReferenceRelatedByIdenchereOrganisme $commonParametrageEnchereReferenceRelatedByIdenchereOrganisme The commonParametrageEnchereReferenceRelatedByIdenchereOrganisme object to remove.
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function removeCommonParametrageEnchereReferenceRelatedByIdenchereOrganisme($commonParametrageEnchereReferenceRelatedByIdenchereOrganisme)
    {
        if ($this->getCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme()->contains($commonParametrageEnchereReferenceRelatedByIdenchereOrganisme)) {
            $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme->remove($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme->search($commonParametrageEnchereReferenceRelatedByIdenchereOrganisme));
            if (null === $this->commonParametrageEnchereReferencesRelatedByIdenchereOrganismeScheduledForDeletion) {
                $this->commonParametrageEnchereReferencesRelatedByIdenchereOrganismeScheduledForDeletion = clone $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme;
                $this->commonParametrageEnchereReferencesRelatedByIdenchereOrganismeScheduledForDeletion->clear();
            }
            $this->commonParametrageEnchereReferencesRelatedByIdenchereOrganismeScheduledForDeletion[]= clone $commonParametrageEnchereReferenceRelatedByIdenchereOrganisme;
            $commonParametrageEnchereReferenceRelatedByIdenchereOrganisme->setCommonParametrageEnchereRelatedByIdenchereOrganisme(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonParametrageEnchere The current object (for fluent API support)
     * @see        addCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere()
     */
    public function clearCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere()
    {
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere = null; // important to set this to null since that means it is uninitialized
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdencherePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere($v = true)
    {
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdencherePartial = $v;
    }

    /**
     * Initializes the collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere collection.
     *
     * By default this just sets the collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere collection to an empty array (like clearcollCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere($overrideExisting = true)
    {
        if (null !== $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere && !$overrideExisting) {
            return;
        }
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere = new PropelObjectCollection();
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere->setModel('CommonParametrageEnchereTranchesBaremeNETC');
    }

    /**
     * Gets an array of CommonParametrageEnchereTranchesBaremeNETC objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonParametrageEnchere is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonParametrageEnchereTranchesBaremeNETC[] List of CommonParametrageEnchereTranchesBaremeNETC objects
     * @throws PropelException
     */
    public function getCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdencherePartial && !$this->isNew();
        if (null === $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere) {
                // return empty collection
                $this->initCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere();
            } else {
                $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere = CommonParametrageEnchereTranchesBaremeNETCQuery::create(null, $criteria)
                    ->filterByCommonParametrageEnchereRelatedByIdenchere($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdencherePartial && count($collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere)) {
                      $this->initCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere(false);

                      foreach ($collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere as $obj) {
                        if (false == $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere->contains($obj)) {
                          $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere->append($obj);
                        }
                      }

                      $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdencherePartial = true;
                    }

                    $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere->getInternalIterator()->rewind();

                    return $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere;
                }

                if ($partial && $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere) {
                    foreach ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere as $obj) {
                        if ($obj->isNew()) {
                            $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere[] = $obj;
                        }
                    }
                }

                $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere = $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere;
                $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdencherePartial = false;
            }
        }

        return $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere;
    }

    /**
     * Sets a collection of CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere(PropelCollection $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere, PropelPDO $con = null)
    {
        $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereToDelete = $this->getCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere(new Criteria(), $con)->diff($commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere);


        $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereScheduledForDeletion = $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereToDelete;

        foreach ($commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereToDelete as $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereRemoved) {
            $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereRemoved->setCommonParametrageEnchereRelatedByIdenchere(null);
        }

        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere = null;
        foreach ($commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere as $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere) {
            $this->addCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere);
        }

        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere = $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere;
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdencherePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonParametrageEnchereTranchesBaremeNETC objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonParametrageEnchereTranchesBaremeNETC objects.
     * @throws PropelException
     */
    public function countCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdencherePartial && !$this->isNew();
        if (null === $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere());
            }
            $query = CommonParametrageEnchereTranchesBaremeNETCQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonParametrageEnchereRelatedByIdenchere($this)
                ->count($con);
        }

        return count($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere);
    }

    /**
     * Method called to associate a CommonParametrageEnchereTranchesBaremeNETC object to this object
     * through the CommonParametrageEnchereTranchesBaremeNETC foreign key attribute.
     *
     * @param   CommonParametrageEnchereTranchesBaremeNETC $l CommonParametrageEnchereTranchesBaremeNETC
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function addCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere(CommonParametrageEnchereTranchesBaremeNETC $l)
    {
        if ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere === null) {
            $this->initCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere();
            $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdencherePartial = true;
        }
        if (!in_array($l, $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($l);
        }

        return $this;
    }

    /**
     * @param	CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere The commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere object to add.
     */
    protected function doAddCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere)
    {
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere[]= $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere;
        $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere->setCommonParametrageEnchereRelatedByIdenchere($this);
    }

    /**
     * @param	CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere The commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere object to remove.
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function removeCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere($commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere)
    {
        if ($this->getCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere()->contains($commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere)) {
            $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere->remove($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere->search($commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere));
            if (null === $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereScheduledForDeletion) {
                $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereScheduledForDeletion = clone $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere;
                $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereScheduledForDeletion->clear();
            }
            $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereScheduledForDeletion[]= clone $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere;
            $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchere->setCommonParametrageEnchereRelatedByIdenchere(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonParametrageEnchere The current object (for fluent API support)
     * @see        addCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme()
     */
    public function clearCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme()
    {
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme = null; // important to set this to null since that means it is uninitialized
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismePartial = null;

        return $this;
    }

    /**
     * reset is the collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme($v = true)
    {
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismePartial = $v;
    }

    /**
     * Initializes the collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme collection.
     *
     * By default this just sets the collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme collection to an empty array (like clearcollCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme($overrideExisting = true)
    {
        if (null !== $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme && !$overrideExisting) {
            return;
        }
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme = new PropelObjectCollection();
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme->setModel('CommonParametrageEnchereTranchesBaremeNETC');
    }

    /**
     * Gets an array of CommonParametrageEnchereTranchesBaremeNETC objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonParametrageEnchere is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonParametrageEnchereTranchesBaremeNETC[] List of CommonParametrageEnchereTranchesBaremeNETC objects
     * @throws PropelException
     */
    public function getCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismePartial && !$this->isNew();
        if (null === $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme) {
                // return empty collection
                $this->initCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme();
            } else {
                $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme = CommonParametrageEnchereTranchesBaremeNETCQuery::create(null, $criteria)
                    ->filterByCommonParametrageEnchereRelatedByIdenchereOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismePartial && count($collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme)) {
                      $this->initCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme(false);

                      foreach ($collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme as $obj) {
                        if (false == $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme->contains($obj)) {
                          $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme->append($obj);
                        }
                      }

                      $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismePartial = true;
                    }

                    $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme->getInternalIterator()->rewind();

                    return $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme;
                }

                if ($partial && $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme) {
                    foreach ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme as $obj) {
                        if ($obj->isNew()) {
                            $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme[] = $obj;
                        }
                    }
                }

                $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme = $collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme;
                $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismePartial = false;
            }
        }

        return $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme;
    }

    /**
     * Sets a collection of CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function setCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme(PropelCollection $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme, PropelPDO $con = null)
    {
        $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeToDelete = $this->getCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme(new Criteria(), $con)->diff($commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeScheduledForDeletion = clone $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeToDelete;

        foreach ($commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeToDelete as $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganismeRemoved) {
            $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganismeRemoved->setCommonParametrageEnchereRelatedByIdenchereOrganisme(null);
        }

        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme = null;
        foreach ($commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme as $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme) {
            $this->addCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme);
        }

        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme = $commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme;
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismePartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonParametrageEnchereTranchesBaremeNETC objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonParametrageEnchereTranchesBaremeNETC objects.
     * @throws PropelException
     */
    public function countCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismePartial && !$this->isNew();
        if (null === $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme());
            }
            $query = CommonParametrageEnchereTranchesBaremeNETCQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonParametrageEnchereRelatedByIdenchereOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme);
    }

    /**
     * Method called to associate a CommonParametrageEnchereTranchesBaremeNETC object to this object
     * through the CommonParametrageEnchereTranchesBaremeNETC foreign key attribute.
     *
     * @param   CommonParametrageEnchereTranchesBaremeNETC $l CommonParametrageEnchereTranchesBaremeNETC
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function addCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme(CommonParametrageEnchereTranchesBaremeNETC $l)
    {
        if ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme === null) {
            $this->initCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme();
            $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismePartial = true;
        }
        if (!in_array($l, $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($l);
        }

        return $this;
    }

    /**
     * @param	CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme The commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme object to add.
     */
    protected function doAddCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme)
    {
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme[]= $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme;
        $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme->setCommonParametrageEnchereRelatedByIdenchereOrganisme($this);
    }

    /**
     * @param	CommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme The commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme object to remove.
     * @return CommonParametrageEnchere The current object (for fluent API support)
     */
    public function removeCommonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme($commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme)
    {
        if ($this->getCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme()->contains($commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme)) {
            $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme->remove($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme->search($commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme));
            if (null === $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeScheduledForDeletion) {
                $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeScheduledForDeletion = clone $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme;
                $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeScheduledForDeletion->clear();
            }
            $this->commonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganismeScheduledForDeletion[]= clone $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme;
            $commonParametrageEnchereTranchesBaremeNETCRelatedByIdenchereOrganisme->setCommonParametrageEnchereRelatedByIdenchereOrganisme(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->refconsultation = null;
        $this->identiteeassociee = null;
        $this->referenceutilisateur = null;
        $this->auteur = null;
        $this->idlot = null;
        $this->objet = null;
        $this->datedebut = null;
        $this->datefin = null;
        $this->datesuspension = null;
        $this->delaiprolongation = null;
        $this->commentaire = null;
        $this->meilleureenchereobligatoire = null;
        $this->typebaremenetc = null;
        $this->typebaremeenchereglobale = null;
        $this->meilleurnotehaute = null;
        $this->nbrcandidatsvisible = null;
        $this->listecandidatsvisible = null;
        $this->rangvisible = null;
        $this->meilleureoffrevisible = null;
        $this->montantreserve = null;
        $this->notemaxbaremerelatif = null;
        $this->coeffa = null;
        $this->coeffb = null;
        $this->coeffc = null;
        $this->mail = null;
        $this->note_entreprises = null;
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
            if ($this->collCommonParametrageEnchereReferencesRelatedByIdenchere) {
                foreach ($this->collCommonParametrageEnchereReferencesRelatedByIdenchere as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme) {
                foreach ($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere) {
                foreach ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme) {
                foreach ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonOrganisme instanceof Persistent) {
              $this->aCommonOrganisme->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonParametrageEnchereReferencesRelatedByIdenchere instanceof PropelCollection) {
            $this->collCommonParametrageEnchereReferencesRelatedByIdenchere->clearIterator();
        }
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchere = null;
        if ($this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme instanceof PropelCollection) {
            $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme->clearIterator();
        }
        $this->collCommonParametrageEnchereReferencesRelatedByIdenchereOrganisme = null;
        if ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere instanceof PropelCollection) {
            $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere->clearIterator();
        }
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchere = null;
        if ($this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme instanceof PropelCollection) {
            $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme->clearIterator();
        }
        $this->collCommonParametrageEnchereTranchesBaremeNETCsRelatedByIdenchereOrganisme = null;
        $this->aCommonOrganisme = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonParametrageEncherePeer::DEFAULT_STRING_FORMAT);
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
