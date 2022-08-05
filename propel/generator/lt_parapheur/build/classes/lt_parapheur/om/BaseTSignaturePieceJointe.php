<?php


/**
 * Base class that represents a row from the 't_signature_piece_jointe' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTSignaturePieceJointe extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TSignaturePieceJointePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TSignaturePieceJointePeer
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
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * The value for the revision field.
     * @var        int
     */
    protected $revision;

    /**
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

    /**
     * The value for the id_historique field.
     * @var        int
     */
    protected $id_historique;

    /**
     * The value for the date_signature field.
     * @var        string
     */
    protected $date_signature;

    /**
     * The value for the emetteur field.
     * @var        string
     */
    protected $emetteur;

    /**
     * The value for the signataire field.
     * @var        string
     */
    protected $signataire;

    /**
     * The value for the revoque field.
     * @var        string
     */
    protected $revoque;

    /**
     * The value for the chaine_valide field.
     * @var        string
     */
    protected $chaine_valide;

    /**
     * The value for the date_deb_periode_validite field.
     * @var        string
     */
    protected $date_deb_periode_validite;

    /**
     * The value for the date_fin_periode_validite field.
     * @var        string
     */
    protected $date_fin_periode_validite;

    /**
     * The value for the signature_valide field.
     * @var        string
     */
    protected $signature_valide;

    /**
     * The value for the from_demandeur field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $from_demandeur;

    /**
     * The value for the type_signature field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $type_signature;

    /**
     * The value for the xml_signature field.
     * @var        string
     */
    protected $xml_signature;

    /**
     * The value for the nom_fichier field.
     * @var        string
     */
    protected $nom_fichier;

    /**
     * The value for the hash field.
     * @var        string
     */
    protected $hash;

    /**
     * The value for the algorithme_hash field.
     * @var        string
     */
    protected $algorithme_hash;

    /**
     * The value for the date_derniere_verification field.
     * @var        string
     */
    protected $date_derniere_verification;

    /**
     * The value for the signature_electronique field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $signature_electronique;

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
        $this->from_demandeur = '0';
        $this->type_signature = '1';
        $this->signature_electronique = '0';
    }

    /**
     * Initializes internal state of BaseTSignaturePieceJointe object.
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
     * Get the [id_blob] column value.
     * 
     * @return int
     */
    public function getIdBlob()
    {

        return $this->id_blob;
    }

    /**
     * Get the [revision] column value.
     * 
     * @return int
     */
    public function getRevision()
    {

        return $this->revision;
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
     * Get the [id_historique] column value.
     * 
     * @return int
     */
    public function getIdHistorique()
    {

        return $this->id_historique;
    }

    /**
     * Get the [optionally formatted] temporal [date_signature] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateSignature($format = 'Y-m-d H:i:s')
    {
        if ($this->date_signature === null) {
            return null;
        }

        if ($this->date_signature === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_signature);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_signature, true), $x);
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
     * Get the [emetteur] column value.
     * 
     * @return string
     */
    public function getEmetteur()
    {

        return $this->emetteur;
    }

    /**
     * Get the [signataire] column value.
     * 
     * @return string
     */
    public function getSignataire()
    {

        return $this->signataire;
    }

    /**
     * Get the [revoque] column value.
     * 
     * @return string
     */
    public function getRevoque()
    {

        return $this->revoque;
    }

    /**
     * Get the [chaine_valide] column value.
     * 
     * @return string
     */
    public function getChaineValide()
    {

        return $this->chaine_valide;
    }

    /**
     * Get the [optionally formatted] temporal [date_deb_periode_validite] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDebPeriodeValidite($format = null)
    {
        if ($this->date_deb_periode_validite === null) {
            return null;
        }

        if ($this->date_deb_periode_validite === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_deb_periode_validite);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_deb_periode_validite, true), $x);
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
     * Get the [optionally formatted] temporal [date_fin_periode_validite] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateFinPeriodeValidite($format = null)
    {
        if ($this->date_fin_periode_validite === null) {
            return null;
        }

        if ($this->date_fin_periode_validite === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_fin_periode_validite);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_fin_periode_validite, true), $x);
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
     * Get the [signature_valide] column value.
     * 
     * @return string
     */
    public function getSignatureValide()
    {

        return $this->signature_valide;
    }

    /**
     * Get the [from_demandeur] column value.
     * 
     * @return string
     */
    public function getFromDemandeur()
    {

        return $this->from_demandeur;
    }

    /**
     * Get the [type_signature] column value.
     * 
     * @return string
     */
    public function getTypeSignature()
    {

        return $this->type_signature;
    }

    /**
     * Get the [xml_signature] column value.
     * 
     * @return string
     */
    public function getXmlSignature()
    {

        return $this->xml_signature;
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
     * Get the [hash] column value.
     * 
     * @return string
     */
    public function getHash()
    {

        return $this->hash;
    }

    /**
     * Get the [algorithme_hash] column value.
     * 
     * @return string
     */
    public function getAlgorithmeHash()
    {

        return $this->algorithme_hash;
    }

    /**
     * Get the [optionally formatted] temporal [date_derniere_verification] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDerniereVerification($format = 'Y-m-d H:i:s')
    {
        if ($this->date_derniere_verification === null) {
            return null;
        }

        if ($this->date_derniere_verification === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_derniere_verification);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_derniere_verification, true), $x);
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
     * Get the [signature_electronique] column value.
     * 
     * @return string
     */
    public function getSignatureElectronique()
    {

        return $this->signature_electronique;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [revision] column.
     * 
     * @param int $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setRevision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->revision !== $v) {
            $this->revision = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::REVISION;
        }


        return $this;
    } // setRevision()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Set the value of [id_historique] column.
     * 
     * @param int $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setIdHistorique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_historique !== $v) {
            $this->id_historique = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::ID_HISTORIQUE;
        }


        return $this;
    } // setIdHistorique()

    /**
     * Sets the value of [date_signature] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setDateSignature($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_signature !== null || $dt !== null) {
            $currentDateAsString = ($this->date_signature !== null && $tmpDt = new DateTime($this->date_signature)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_signature = $newDateAsString;
                $this->modifiedColumns[] = TSignaturePieceJointePeer::DATE_SIGNATURE;
            }
        } // if either are not null


        return $this;
    } // setDateSignature()

    /**
     * Set the value of [emetteur] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setEmetteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->emetteur !== $v) {
            $this->emetteur = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::EMETTEUR;
        }


        return $this;
    } // setEmetteur()

    /**
     * Set the value of [signataire] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setSignataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signataire !== $v) {
            $this->signataire = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::SIGNATAIRE;
        }


        return $this;
    } // setSignataire()

    /**
     * Set the value of [revoque] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setRevoque($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->revoque !== $v) {
            $this->revoque = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::REVOQUE;
        }


        return $this;
    } // setRevoque()

    /**
     * Set the value of [chaine_valide] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setChaineValide($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chaine_valide !== $v) {
            $this->chaine_valide = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::CHAINE_VALIDE;
        }


        return $this;
    } // setChaineValide()

    /**
     * Sets the value of [date_deb_periode_validite] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setDateDebPeriodeValidite($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_deb_periode_validite !== null || $dt !== null) {
            $currentDateAsString = ($this->date_deb_periode_validite !== null && $tmpDt = new DateTime($this->date_deb_periode_validite)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_deb_periode_validite = $newDateAsString;
                $this->modifiedColumns[] = TSignaturePieceJointePeer::DATE_DEB_PERIODE_VALIDITE;
            }
        } // if either are not null


        return $this;
    } // setDateDebPeriodeValidite()

    /**
     * Sets the value of [date_fin_periode_validite] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setDateFinPeriodeValidite($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_fin_periode_validite !== null || $dt !== null) {
            $currentDateAsString = ($this->date_fin_periode_validite !== null && $tmpDt = new DateTime($this->date_fin_periode_validite)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_fin_periode_validite = $newDateAsString;
                $this->modifiedColumns[] = TSignaturePieceJointePeer::DATE_FIN_PERIODE_VALIDITE;
            }
        } // if either are not null


        return $this;
    } // setDateFinPeriodeValidite()

    /**
     * Set the value of [signature_valide] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setSignatureValide($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signature_valide !== $v) {
            $this->signature_valide = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::SIGNATURE_VALIDE;
        }


        return $this;
    } // setSignatureValide()

    /**
     * Set the value of [from_demandeur] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setFromDemandeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->from_demandeur !== $v) {
            $this->from_demandeur = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::FROM_DEMANDEUR;
        }


        return $this;
    } // setFromDemandeur()

    /**
     * Set the value of [type_signature] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setTypeSignature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_signature !== $v) {
            $this->type_signature = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::TYPE_SIGNATURE;
        }


        return $this;
    } // setTypeSignature()

    /**
     * Set the value of [xml_signature] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setXmlSignature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->xml_signature !== $v) {
            $this->xml_signature = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::XML_SIGNATURE;
        }


        return $this;
    } // setXmlSignature()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

    /**
     * Set the value of [hash] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setHash($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hash !== $v) {
            $this->hash = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::HASH;
        }


        return $this;
    } // setHash()

    /**
     * Set the value of [algorithme_hash] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setAlgorithmeHash($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->algorithme_hash !== $v) {
            $this->algorithme_hash = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::ALGORITHME_HASH;
        }


        return $this;
    } // setAlgorithmeHash()

    /**
     * Sets the value of [date_derniere_verification] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setDateDerniereVerification($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_derniere_verification !== null || $dt !== null) {
            $currentDateAsString = ($this->date_derniere_verification !== null && $tmpDt = new DateTime($this->date_derniere_verification)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_derniere_verification = $newDateAsString;
                $this->modifiedColumns[] = TSignaturePieceJointePeer::DATE_DERNIERE_VERIFICATION;
            }
        } // if either are not null


        return $this;
    } // setDateDerniereVerification()

    /**
     * Set the value of [signature_electronique] column.
     * 
     * @param string $v new value
     * @return TSignaturePieceJointe The current object (for fluent API support)
     */
    public function setSignatureElectronique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signature_electronique !== $v) {
            $this->signature_electronique = $v;
            $this->modifiedColumns[] = TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE;
        }


        return $this;
    } // setSignatureElectronique()

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
            if ($this->from_demandeur !== '0') {
                return false;
            }

            if ($this->type_signature !== '1') {
                return false;
            }

            if ($this->signature_electronique !== '0') {
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
            $this->id_blob = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->revision = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_demande = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_historique = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->date_signature = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->emetteur = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->signataire = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->revoque = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->chaine_valide = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->date_deb_periode_validite = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->date_fin_periode_validite = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->signature_valide = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->from_demandeur = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->type_signature = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->xml_signature = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->nom_fichier = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->hash = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->algorithme_hash = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->date_derniere_verification = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->signature_electronique = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = TSignaturePieceJointePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating TSignaturePieceJointe object", $e);
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
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TSignaturePieceJointePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TSignaturePieceJointeQuery::create()
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
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TSignaturePieceJointePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TSignaturePieceJointePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TSignaturePieceJointePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TSignaturePieceJointePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`ID_BLOB`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::REVISION)) {
            $modifiedColumns[':p' . $index++]  = '`REVISION`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::ID_HISTORIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_HISTORIQUE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::DATE_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_SIGNATURE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::EMETTEUR)) {
            $modifiedColumns[':p' . $index++]  = '`EMETTEUR`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::SIGNATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`SIGNATAIRE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::REVOQUE)) {
            $modifiedColumns[':p' . $index++]  = '`REVOQUE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::CHAINE_VALIDE)) {
            $modifiedColumns[':p' . $index++]  = '`CHAINE_VALIDE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::DATE_DEB_PERIODE_VALIDITE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_DEB_PERIODE_VALIDITE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::DATE_FIN_PERIODE_VALIDITE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_FIN_PERIODE_VALIDITE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::SIGNATURE_VALIDE)) {
            $modifiedColumns[':p' . $index++]  = '`SIGNATURE_VALIDE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::FROM_DEMANDEUR)) {
            $modifiedColumns[':p' . $index++]  = '`FROM_DEMANDEUR`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::TYPE_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_SIGNATURE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::XML_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = '`XML_SIGNATURE`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_FICHIER`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::HASH)) {
            $modifiedColumns[':p' . $index++]  = '`hash`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::ALGORITHME_HASH)) {
            $modifiedColumns[':p' . $index++]  = '`algorithme_hash`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::DATE_DERNIERE_VERIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_DERNIERE_VERIFICATION`';
        }
        if ($this->isColumnModified(TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`SIGNATURE_ELECTRONIQUE`';
        }

        $sql = sprintf(
            'INSERT INTO `t_signature_piece_jointe` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`ID_BLOB`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`REVISION`':						
                        $stmt->bindValue($identifier, $this->revision, PDO::PARAM_INT);
                        break;
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_HISTORIQUE`':						
                        $stmt->bindValue($identifier, $this->id_historique, PDO::PARAM_INT);
                        break;
                    case '`DATE_SIGNATURE`':						
                        $stmt->bindValue($identifier, $this->date_signature, PDO::PARAM_STR);
                        break;
                    case '`EMETTEUR`':						
                        $stmt->bindValue($identifier, $this->emetteur, PDO::PARAM_STR);
                        break;
                    case '`SIGNATAIRE`':						
                        $stmt->bindValue($identifier, $this->signataire, PDO::PARAM_STR);
                        break;
                    case '`REVOQUE`':						
                        $stmt->bindValue($identifier, $this->revoque, PDO::PARAM_STR);
                        break;
                    case '`CHAINE_VALIDE`':						
                        $stmt->bindValue($identifier, $this->chaine_valide, PDO::PARAM_STR);
                        break;
                    case '`DATE_DEB_PERIODE_VALIDITE`':						
                        $stmt->bindValue($identifier, $this->date_deb_periode_validite, PDO::PARAM_STR);
                        break;
                    case '`DATE_FIN_PERIODE_VALIDITE`':						
                        $stmt->bindValue($identifier, $this->date_fin_periode_validite, PDO::PARAM_STR);
                        break;
                    case '`SIGNATURE_VALIDE`':						
                        $stmt->bindValue($identifier, $this->signature_valide, PDO::PARAM_STR);
                        break;
                    case '`FROM_DEMANDEUR`':						
                        $stmt->bindValue($identifier, $this->from_demandeur, PDO::PARAM_STR);
                        break;
                    case '`TYPE_SIGNATURE`':						
                        $stmt->bindValue($identifier, $this->type_signature, PDO::PARAM_STR);
                        break;
                    case '`XML_SIGNATURE`':						
                        $stmt->bindValue($identifier, $this->xml_signature, PDO::PARAM_STR);
                        break;
                    case '`NOM_FICHIER`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
                        break;
                    case '`hash`':						
                        $stmt->bindValue($identifier, $this->hash, PDO::PARAM_STR);
                        break;
                    case '`algorithme_hash`':						
                        $stmt->bindValue($identifier, $this->algorithme_hash, PDO::PARAM_STR);
                        break;
                    case '`DATE_DERNIERE_VERIFICATION`':						
                        $stmt->bindValue($identifier, $this->date_derniere_verification, PDO::PARAM_STR);
                        break;
                    case '`SIGNATURE_ELECTRONIQUE`':						
                        $stmt->bindValue($identifier, $this->signature_electronique, PDO::PARAM_STR);
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


            if (($retval = TSignaturePieceJointePeer::doValidate($this, $columns)) !== true) {
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
        $pos = TSignaturePieceJointePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdBlob();
                break;
            case 2:
                return $this->getRevision();
                break;
            case 3:
                return $this->getIdDemande();
                break;
            case 4:
                return $this->getIdHistorique();
                break;
            case 5:
                return $this->getDateSignature();
                break;
            case 6:
                return $this->getEmetteur();
                break;
            case 7:
                return $this->getSignataire();
                break;
            case 8:
                return $this->getRevoque();
                break;
            case 9:
                return $this->getChaineValide();
                break;
            case 10:
                return $this->getDateDebPeriodeValidite();
                break;
            case 11:
                return $this->getDateFinPeriodeValidite();
                break;
            case 12:
                return $this->getSignatureValide();
                break;
            case 13:
                return $this->getFromDemandeur();
                break;
            case 14:
                return $this->getTypeSignature();
                break;
            case 15:
                return $this->getXmlSignature();
                break;
            case 16:
                return $this->getNomFichier();
                break;
            case 17:
                return $this->getHash();
                break;
            case 18:
                return $this->getAlgorithmeHash();
                break;
            case 19:
                return $this->getDateDerniereVerification();
                break;
            case 20:
                return $this->getSignatureElectronique();
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
        if (isset($alreadyDumpedObjects['TSignaturePieceJointe'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TSignaturePieceJointe'][$this->getPrimaryKey()] = true;
        $keys = TSignaturePieceJointePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdBlob(),
            $keys[2] => $this->getRevision(),
            $keys[3] => $this->getIdDemande(),
            $keys[4] => $this->getIdHistorique(),
            $keys[5] => $this->getDateSignature(),
            $keys[6] => $this->getEmetteur(),
            $keys[7] => $this->getSignataire(),
            $keys[8] => $this->getRevoque(),
            $keys[9] => $this->getChaineValide(),
            $keys[10] => $this->getDateDebPeriodeValidite(),
            $keys[11] => $this->getDateFinPeriodeValidite(),
            $keys[12] => $this->getSignatureValide(),
            $keys[13] => $this->getFromDemandeur(),
            $keys[14] => $this->getTypeSignature(),
            $keys[15] => $this->getXmlSignature(),
            $keys[16] => $this->getNomFichier(),
            $keys[17] => $this->getHash(),
            $keys[18] => $this->getAlgorithmeHash(),
            $keys[19] => $this->getDateDerniereVerification(),
            $keys[20] => $this->getSignatureElectronique(),
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
        $pos = TSignaturePieceJointePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdBlob($value);
                break;
            case 2:
                $this->setRevision($value);
                break;
            case 3:
                $this->setIdDemande($value);
                break;
            case 4:
                $this->setIdHistorique($value);
                break;
            case 5:
                $this->setDateSignature($value);
                break;
            case 6:
                $this->setEmetteur($value);
                break;
            case 7:
                $this->setSignataire($value);
                break;
            case 8:
                $this->setRevoque($value);
                break;
            case 9:
                $this->setChaineValide($value);
                break;
            case 10:
                $this->setDateDebPeriodeValidite($value);
                break;
            case 11:
                $this->setDateFinPeriodeValidite($value);
                break;
            case 12:
                $this->setSignatureValide($value);
                break;
            case 13:
                $this->setFromDemandeur($value);
                break;
            case 14:
                $this->setTypeSignature($value);
                break;
            case 15:
                $this->setXmlSignature($value);
                break;
            case 16:
                $this->setNomFichier($value);
                break;
            case 17:
                $this->setHash($value);
                break;
            case 18:
                $this->setAlgorithmeHash($value);
                break;
            case 19:
                $this->setDateDerniereVerification($value);
                break;
            case 20:
                $this->setSignatureElectronique($value);
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
        $keys = TSignaturePieceJointePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdBlob($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRevision($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdDemande($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdHistorique($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateSignature($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEmetteur($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSignataire($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setRevoque($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setChaineValide($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateDebPeriodeValidite($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDateFinPeriodeValidite($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSignatureValide($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFromDemandeur($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTypeSignature($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setXmlSignature($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setNomFichier($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setHash($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAlgorithmeHash($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateDerniereVerification($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setSignatureElectronique($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TSignaturePieceJointePeer::DATABASE_NAME);

        if ($this->isColumnModified(TSignaturePieceJointePeer::ID)) $criteria->add(TSignaturePieceJointePeer::ID, $this->id);
        if ($this->isColumnModified(TSignaturePieceJointePeer::ID_BLOB)) $criteria->add(TSignaturePieceJointePeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(TSignaturePieceJointePeer::REVISION)) $criteria->add(TSignaturePieceJointePeer::REVISION, $this->revision);
        if ($this->isColumnModified(TSignaturePieceJointePeer::ID_DEMANDE)) $criteria->add(TSignaturePieceJointePeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(TSignaturePieceJointePeer::ID_HISTORIQUE)) $criteria->add(TSignaturePieceJointePeer::ID_HISTORIQUE, $this->id_historique);
        if ($this->isColumnModified(TSignaturePieceJointePeer::DATE_SIGNATURE)) $criteria->add(TSignaturePieceJointePeer::DATE_SIGNATURE, $this->date_signature);
        if ($this->isColumnModified(TSignaturePieceJointePeer::EMETTEUR)) $criteria->add(TSignaturePieceJointePeer::EMETTEUR, $this->emetteur);
        if ($this->isColumnModified(TSignaturePieceJointePeer::SIGNATAIRE)) $criteria->add(TSignaturePieceJointePeer::SIGNATAIRE, $this->signataire);
        if ($this->isColumnModified(TSignaturePieceJointePeer::REVOQUE)) $criteria->add(TSignaturePieceJointePeer::REVOQUE, $this->revoque);
        if ($this->isColumnModified(TSignaturePieceJointePeer::CHAINE_VALIDE)) $criteria->add(TSignaturePieceJointePeer::CHAINE_VALIDE, $this->chaine_valide);
        if ($this->isColumnModified(TSignaturePieceJointePeer::DATE_DEB_PERIODE_VALIDITE)) $criteria->add(TSignaturePieceJointePeer::DATE_DEB_PERIODE_VALIDITE, $this->date_deb_periode_validite);
        if ($this->isColumnModified(TSignaturePieceJointePeer::DATE_FIN_PERIODE_VALIDITE)) $criteria->add(TSignaturePieceJointePeer::DATE_FIN_PERIODE_VALIDITE, $this->date_fin_periode_validite);
        if ($this->isColumnModified(TSignaturePieceJointePeer::SIGNATURE_VALIDE)) $criteria->add(TSignaturePieceJointePeer::SIGNATURE_VALIDE, $this->signature_valide);
        if ($this->isColumnModified(TSignaturePieceJointePeer::FROM_DEMANDEUR)) $criteria->add(TSignaturePieceJointePeer::FROM_DEMANDEUR, $this->from_demandeur);
        if ($this->isColumnModified(TSignaturePieceJointePeer::TYPE_SIGNATURE)) $criteria->add(TSignaturePieceJointePeer::TYPE_SIGNATURE, $this->type_signature);
        if ($this->isColumnModified(TSignaturePieceJointePeer::XML_SIGNATURE)) $criteria->add(TSignaturePieceJointePeer::XML_SIGNATURE, $this->xml_signature);
        if ($this->isColumnModified(TSignaturePieceJointePeer::NOM_FICHIER)) $criteria->add(TSignaturePieceJointePeer::NOM_FICHIER, $this->nom_fichier);
        if ($this->isColumnModified(TSignaturePieceJointePeer::HASH)) $criteria->add(TSignaturePieceJointePeer::HASH, $this->hash);
        if ($this->isColumnModified(TSignaturePieceJointePeer::ALGORITHME_HASH)) $criteria->add(TSignaturePieceJointePeer::ALGORITHME_HASH, $this->algorithme_hash);
        if ($this->isColumnModified(TSignaturePieceJointePeer::DATE_DERNIERE_VERIFICATION)) $criteria->add(TSignaturePieceJointePeer::DATE_DERNIERE_VERIFICATION, $this->date_derniere_verification);
        if ($this->isColumnModified(TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE)) $criteria->add(TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE, $this->signature_electronique);

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
        $criteria = new Criteria(TSignaturePieceJointePeer::DATABASE_NAME);
        $criteria->add(TSignaturePieceJointePeer::ID, $this->id);

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
     * @param object $copyObj An object of TSignaturePieceJointe (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setRevision($this->getRevision());
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setIdHistorique($this->getIdHistorique());
        $copyObj->setDateSignature($this->getDateSignature());
        $copyObj->setEmetteur($this->getEmetteur());
        $copyObj->setSignataire($this->getSignataire());
        $copyObj->setRevoque($this->getRevoque());
        $copyObj->setChaineValide($this->getChaineValide());
        $copyObj->setDateDebPeriodeValidite($this->getDateDebPeriodeValidite());
        $copyObj->setDateFinPeriodeValidite($this->getDateFinPeriodeValidite());
        $copyObj->setSignatureValide($this->getSignatureValide());
        $copyObj->setFromDemandeur($this->getFromDemandeur());
        $copyObj->setTypeSignature($this->getTypeSignature());
        $copyObj->setXmlSignature($this->getXmlSignature());
        $copyObj->setNomFichier($this->getNomFichier());
        $copyObj->setHash($this->getHash());
        $copyObj->setAlgorithmeHash($this->getAlgorithmeHash());
        $copyObj->setDateDerniereVerification($this->getDateDerniereVerification());
        $copyObj->setSignatureElectronique($this->getSignatureElectronique());
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
     * @return TSignaturePieceJointe Clone of current object.
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
     * @return TSignaturePieceJointePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TSignaturePieceJointePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_blob = null;
        $this->revision = null;
        $this->id_demande = null;
        $this->id_historique = null;
        $this->date_signature = null;
        $this->emetteur = null;
        $this->signataire = null;
        $this->revoque = null;
        $this->chaine_valide = null;
        $this->date_deb_periode_validite = null;
        $this->date_fin_periode_validite = null;
        $this->signature_valide = null;
        $this->from_demandeur = null;
        $this->type_signature = null;
        $this->xml_signature = null;
        $this->nom_fichier = null;
        $this->hash = null;
        $this->algorithme_hash = null;
        $this->date_derniere_verification = null;
        $this->signature_electronique = null;
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
        return (string) $this->exportTo(TSignaturePieceJointePeer::DEFAULT_STRING_FORMAT);
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
