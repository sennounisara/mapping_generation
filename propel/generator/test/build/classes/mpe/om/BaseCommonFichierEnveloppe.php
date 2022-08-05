<?php


/**
 * Base class that represents a row from the 'fichierEnveloppe' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonFichierEnveloppe extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonFichierEnveloppePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonFichierEnveloppePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_fichier field.
     * @var        int
     */
    protected $id_fichier;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_enveloppe field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_enveloppe;

    /**
     * The value for the type_fichier field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $type_fichier;

    /**
     * The value for the num_ordre_fichier field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $num_ordre_fichier;

    /**
     * The value for the nom_fichier field.
     * @var        string
     */
    protected $nom_fichier;

    /**
     * The value for the taille_fichier field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $taille_fichier;

    /**
     * The value for the signature_fichier field.
     * @var        string
     */
    protected $signature_fichier;

    /**
     * The value for the hash field.
     * @var        string
     */
    protected $hash;

    /**
     * The value for the verification_certificat field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $verification_certificat;

    /**
     * The value for the id_blob field.
     * @var        int
     */
    protected $id_blob;

    /**
     * The value for the id_blob_signature field.
     * @var        int
     */
    protected $id_blob_signature;

    /**
     * The value for the type_piece field.
     * Note: this column has a database default value of: 3
     * @var        int
     */
    protected $type_piece;

    /**
     * The value for the id_type_piece field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_type_piece;

    /**
     * The value for the is_hash field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $is_hash;

    /**
     * The value for the nom_referentiel_certificat field.
     * @var        string
     */
    protected $nom_referentiel_certificat;

    /**
     * The value for the statut_referentiel_certificat field.
     * @var        int
     */
    protected $statut_referentiel_certificat;

    /**
     * The value for the nom_referentiel_fonctionnel field.
     * @var        string
     */
    protected $nom_referentiel_fonctionnel;

    /**
     * The value for the message field.
     * @var        string
     */
    protected $message;

    /**
     * The value for the date_signature field.
     * @var        string
     */
    protected $date_signature;

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
        $this->id_enveloppe = 0;
        $this->type_fichier = '';
        $this->num_ordre_fichier = 0;
        $this->taille_fichier = '';
        $this->verification_certificat = '';
        $this->type_piece = 3;
        $this->id_type_piece = 0;
        $this->is_hash = '0';
    }

    /**
     * Initializes internal state of BaseCommonFichierEnveloppe object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_fichier] column value.
     * 
     * @return int
     */
    public function getIdFichier()
    {

        return $this->id_fichier;
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
     * Get the [id_enveloppe] column value.
     * 
     * @return int
     */
    public function getIdEnveloppe()
    {

        return $this->id_enveloppe;
    }

    /**
     * Get the [type_fichier] column value.
     * 
     * @return string
     */
    public function getTypeFichier()
    {

        return $this->type_fichier;
    }

    /**
     * Get the [num_ordre_fichier] column value.
     * 
     * @return int
     */
    public function getNumOrdreFichier()
    {

        return $this->num_ordre_fichier;
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
     * Get the [taille_fichier] column value.
     * 
     * @return string
     */
    public function getTailleFichier()
    {

        return $this->taille_fichier;
    }

    /**
     * Get the [signature_fichier] column value.
     * 
     * @return string
     */
    public function getSignatureFichier()
    {

        return $this->signature_fichier;
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
     * Get the [verification_certificat] column value.
     * 
     * @return string
     */
    public function getVerificationCertificat()
    {

        return $this->verification_certificat;
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
     * Get the [id_blob_signature] column value.
     * 
     * @return int
     */
    public function getIdBlobSignature()
    {

        return $this->id_blob_signature;
    }

    /**
     * Get the [type_piece] column value.
     * 
     * @return int
     */
    public function getTypePiece()
    {

        return $this->type_piece;
    }

    /**
     * Get the [id_type_piece] column value.
     * 
     * @return int
     */
    public function getIdTypePiece()
    {

        return $this->id_type_piece;
    }

    /**
     * Get the [is_hash] column value.
     * 
     * @return string
     */
    public function getIsHash()
    {

        return $this->is_hash;
    }

    /**
     * Get the [nom_referentiel_certificat] column value.
     * 
     * @return string
     */
    public function getNomReferentielCertificat()
    {

        return $this->nom_referentiel_certificat;
    }

    /**
     * Get the [statut_referentiel_certificat] column value.
     * 
     * @return int
     */
    public function getStatutReferentielCertificat()
    {

        return $this->statut_referentiel_certificat;
    }

    /**
     * Get the [nom_referentiel_fonctionnel] column value.
     * 
     * @return string
     */
    public function getNomReferentielFonctionnel()
    {

        return $this->nom_referentiel_fonctionnel;
    }

    /**
     * Get the [message] column value.
     * 
     * @return string
     */
    public function getMessage()
    {

        return $this->message;
    }

    /**
     * Get the [date_signature] column value.
     * 
     * @return string
     */
    public function getDateSignature()
    {

        return $this->date_signature;
    }

    /**
     * Set the value of [id_fichier] column.
     * 
     * @param int $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setIdFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_fichier !== $v) {
            $this->id_fichier = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::ID_FICHIER;
        }


        return $this;
    } // setIdFichier()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_enveloppe] column.
     * 
     * @param int $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setIdEnveloppe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_enveloppe !== $v) {
            $this->id_enveloppe = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::ID_ENVELOPPE;
        }


        return $this;
    } // setIdEnveloppe()

    /**
     * Set the value of [type_fichier] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setTypeFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_fichier !== $v) {
            $this->type_fichier = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::TYPE_FICHIER;
        }


        return $this;
    } // setTypeFichier()

    /**
     * Set the value of [num_ordre_fichier] column.
     * 
     * @param int $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setNumOrdreFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->num_ordre_fichier !== $v) {
            $this->num_ordre_fichier = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::NUM_ORDRE_FICHIER;
        }


        return $this;
    } // setNumOrdreFichier()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

    /**
     * Set the value of [taille_fichier] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setTailleFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille_fichier !== $v) {
            $this->taille_fichier = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::TAILLE_FICHIER;
        }


        return $this;
    } // setTailleFichier()

    /**
     * Set the value of [signature_fichier] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setSignatureFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signature_fichier !== $v) {
            $this->signature_fichier = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::SIGNATURE_FICHIER;
        }


        return $this;
    } // setSignatureFichier()

    /**
     * Set the value of [hash] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setHash($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hash !== $v) {
            $this->hash = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::HASH;
        }


        return $this;
    } // setHash()

    /**
     * Set the value of [verification_certificat] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setVerificationCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->verification_certificat !== $v) {
            $this->verification_certificat = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::VERIFICATION_CERTIFICAT;
        }


        return $this;
    } // setVerificationCertificat()

    /**
     * Set the value of [id_blob] column.
     * 
     * @param int $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setIdBlob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob !== $v) {
            $this->id_blob = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::ID_BLOB;
        }


        return $this;
    } // setIdBlob()

    /**
     * Set the value of [id_blob_signature] column.
     * 
     * @param int $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setIdBlobSignature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_signature !== $v) {
            $this->id_blob_signature = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::ID_BLOB_SIGNATURE;
        }


        return $this;
    } // setIdBlobSignature()

    /**
     * Set the value of [type_piece] column.
     * 
     * @param int $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setTypePiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_piece !== $v) {
            $this->type_piece = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::TYPE_PIECE;
        }


        return $this;
    } // setTypePiece()

    /**
     * Set the value of [id_type_piece] column.
     * 
     * @param int $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setIdTypePiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_piece !== $v) {
            $this->id_type_piece = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::ID_TYPE_PIECE;
        }


        return $this;
    } // setIdTypePiece()

    /**
     * Set the value of [is_hash] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setIsHash($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->is_hash !== $v) {
            $this->is_hash = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::IS_HASH;
        }


        return $this;
    } // setIsHash()

    /**
     * Set the value of [nom_referentiel_certificat] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setNomReferentielCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_referentiel_certificat !== $v) {
            $this->nom_referentiel_certificat = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::NOM_REFERENTIEL_CERTIFICAT;
        }


        return $this;
    } // setNomReferentielCertificat()

    /**
     * Set the value of [statut_referentiel_certificat] column.
     * 
     * @param int $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setStatutReferentielCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_referentiel_certificat !== $v) {
            $this->statut_referentiel_certificat = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::STATUT_REFERENTIEL_CERTIFICAT;
        }


        return $this;
    } // setStatutReferentielCertificat()

    /**
     * Set the value of [nom_referentiel_fonctionnel] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setNomReferentielFonctionnel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_referentiel_fonctionnel !== $v) {
            $this->nom_referentiel_fonctionnel = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::NOM_REFERENTIEL_FONCTIONNEL;
        }


        return $this;
    } // setNomReferentielFonctionnel()

    /**
     * Set the value of [message] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->message !== $v) {
            $this->message = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::MESSAGE;
        }


        return $this;
    } // setMessage()

    /**
     * Set the value of [date_signature] column.
     * 
     * @param string $v new value
     * @return CommonFichierEnveloppe The current object (for fluent API support)
     */
    public function setDateSignature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_signature !== $v) {
            $this->date_signature = $v;
            $this->modifiedColumns[] = CommonFichierEnveloppePeer::DATE_SIGNATURE;
        }


        return $this;
    } // setDateSignature()

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

            if ($this->id_enveloppe !== 0) {
                return false;
            }

            if ($this->type_fichier !== '') {
                return false;
            }

            if ($this->num_ordre_fichier !== 0) {
                return false;
            }

            if ($this->taille_fichier !== '') {
                return false;
            }

            if ($this->verification_certificat !== '') {
                return false;
            }

            if ($this->type_piece !== 3) {
                return false;
            }

            if ($this->id_type_piece !== 0) {
                return false;
            }

            if ($this->is_hash !== '0') {
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

            $this->id_fichier = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_enveloppe = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->type_fichier = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->num_ordre_fichier = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->nom_fichier = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->taille_fichier = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->signature_fichier = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->hash = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->verification_certificat = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->id_blob = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->id_blob_signature = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->type_piece = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->id_type_piece = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->is_hash = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->nom_referentiel_certificat = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->statut_referentiel_certificat = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->nom_referentiel_fonctionnel = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->message = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->date_signature = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = CommonFichierEnveloppePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonFichierEnveloppe object", $e);
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
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonFichierEnveloppePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonFichierEnveloppeQuery::create()
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
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonFichierEnveloppePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonFichierEnveloppePeer::ID_FICHIER;
        if (null !== $this->id_fichier) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonFichierEnveloppePeer::ID_FICHIER . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ID_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`id_fichier`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ID_ENVELOPPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_enveloppe`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::TYPE_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`type_fichier`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::NUM_ORDRE_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`num_ordre_fichier`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::TAILLE_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`taille_fichier`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::SIGNATURE_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`signature_fichier`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::HASH)) {
            $modifiedColumns[':p' . $index++]  = '`hash`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::VERIFICATION_CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`verification_certificat`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ID_BLOB)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ID_BLOB_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob_signature`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::TYPE_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`type_piece`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ID_TYPE_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_piece`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::IS_HASH)) {
            $modifiedColumns[':p' . $index++]  = '`is_hash`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::NOM_REFERENTIEL_CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_referentiel_certificat`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::STATUT_REFERENTIEL_CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`statut_referentiel_certificat`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::NOM_REFERENTIEL_FONCTIONNEL)) {
            $modifiedColumns[':p' . $index++]  = '`nom_referentiel_fonctionnel`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`message`';
        }
        if ($this->isColumnModified(CommonFichierEnveloppePeer::DATE_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = '`date_signature`';
        }

        $sql = sprintf(
            'INSERT INTO `fichierEnveloppe` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_fichier`':						
                        $stmt->bindValue($identifier, $this->id_fichier, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_enveloppe`':						
                        $stmt->bindValue($identifier, $this->id_enveloppe, PDO::PARAM_INT);
                        break;
                    case '`type_fichier`':						
                        $stmt->bindValue($identifier, $this->type_fichier, PDO::PARAM_STR);
                        break;
                    case '`num_ordre_fichier`':						
                        $stmt->bindValue($identifier, $this->num_ordre_fichier, PDO::PARAM_INT);
                        break;
                    case '`nom_fichier`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
                        break;
                    case '`taille_fichier`':						
                        $stmt->bindValue($identifier, $this->taille_fichier, PDO::PARAM_STR);
                        break;
                    case '`signature_fichier`':						
                        $stmt->bindValue($identifier, $this->signature_fichier, PDO::PARAM_STR);
                        break;
                    case '`hash`':						
                        $stmt->bindValue($identifier, $this->hash, PDO::PARAM_STR);
                        break;
                    case '`verification_certificat`':						
                        $stmt->bindValue($identifier, $this->verification_certificat, PDO::PARAM_STR);
                        break;
                    case '`id_blob`':						
                        $stmt->bindValue($identifier, $this->id_blob, PDO::PARAM_INT);
                        break;
                    case '`id_blob_signature`':						
                        $stmt->bindValue($identifier, $this->id_blob_signature, PDO::PARAM_INT);
                        break;
                    case '`type_piece`':						
                        $stmt->bindValue($identifier, $this->type_piece, PDO::PARAM_INT);
                        break;
                    case '`id_type_piece`':						
                        $stmt->bindValue($identifier, $this->id_type_piece, PDO::PARAM_INT);
                        break;
                    case '`is_hash`':						
                        $stmt->bindValue($identifier, $this->is_hash, PDO::PARAM_STR);
                        break;
                    case '`nom_referentiel_certificat`':						
                        $stmt->bindValue($identifier, $this->nom_referentiel_certificat, PDO::PARAM_STR);
                        break;
                    case '`statut_referentiel_certificat`':						
                        $stmt->bindValue($identifier, $this->statut_referentiel_certificat, PDO::PARAM_INT);
                        break;
                    case '`nom_referentiel_fonctionnel`':						
                        $stmt->bindValue($identifier, $this->nom_referentiel_fonctionnel, PDO::PARAM_STR);
                        break;
                    case '`message`':						
                        $stmt->bindValue($identifier, $this->message, PDO::PARAM_STR);
                        break;
                    case '`date_signature`':						
                        $stmt->bindValue($identifier, $this->date_signature, PDO::PARAM_STR);
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
        $this->setIdFichier($pk);

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


            if (($retval = CommonFichierEnveloppePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonFichierEnveloppePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdFichier();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdEnveloppe();
                break;
            case 3:
                return $this->getTypeFichier();
                break;
            case 4:
                return $this->getNumOrdreFichier();
                break;
            case 5:
                return $this->getNomFichier();
                break;
            case 6:
                return $this->getTailleFichier();
                break;
            case 7:
                return $this->getSignatureFichier();
                break;
            case 8:
                return $this->getHash();
                break;
            case 9:
                return $this->getVerificationCertificat();
                break;
            case 10:
                return $this->getIdBlob();
                break;
            case 11:
                return $this->getIdBlobSignature();
                break;
            case 12:
                return $this->getTypePiece();
                break;
            case 13:
                return $this->getIdTypePiece();
                break;
            case 14:
                return $this->getIsHash();
                break;
            case 15:
                return $this->getNomReferentielCertificat();
                break;
            case 16:
                return $this->getStatutReferentielCertificat();
                break;
            case 17:
                return $this->getNomReferentielFonctionnel();
                break;
            case 18:
                return $this->getMessage();
                break;
            case 19:
                return $this->getDateSignature();
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
        if (isset($alreadyDumpedObjects['CommonFichierEnveloppe'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonFichierEnveloppe'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonFichierEnveloppePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdFichier(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdEnveloppe(),
            $keys[3] => $this->getTypeFichier(),
            $keys[4] => $this->getNumOrdreFichier(),
            $keys[5] => $this->getNomFichier(),
            $keys[6] => $this->getTailleFichier(),
            $keys[7] => $this->getSignatureFichier(),
            $keys[8] => $this->getHash(),
            $keys[9] => $this->getVerificationCertificat(),
            $keys[10] => $this->getIdBlob(),
            $keys[11] => $this->getIdBlobSignature(),
            $keys[12] => $this->getTypePiece(),
            $keys[13] => $this->getIdTypePiece(),
            $keys[14] => $this->getIsHash(),
            $keys[15] => $this->getNomReferentielCertificat(),
            $keys[16] => $this->getStatutReferentielCertificat(),
            $keys[17] => $this->getNomReferentielFonctionnel(),
            $keys[18] => $this->getMessage(),
            $keys[19] => $this->getDateSignature(),
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
        $pos = CommonFichierEnveloppePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdFichier($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdEnveloppe($value);
                break;
            case 3:
                $this->setTypeFichier($value);
                break;
            case 4:
                $this->setNumOrdreFichier($value);
                break;
            case 5:
                $this->setNomFichier($value);
                break;
            case 6:
                $this->setTailleFichier($value);
                break;
            case 7:
                $this->setSignatureFichier($value);
                break;
            case 8:
                $this->setHash($value);
                break;
            case 9:
                $this->setVerificationCertificat($value);
                break;
            case 10:
                $this->setIdBlob($value);
                break;
            case 11:
                $this->setIdBlobSignature($value);
                break;
            case 12:
                $this->setTypePiece($value);
                break;
            case 13:
                $this->setIdTypePiece($value);
                break;
            case 14:
                $this->setIsHash($value);
                break;
            case 15:
                $this->setNomReferentielCertificat($value);
                break;
            case 16:
                $this->setStatutReferentielCertificat($value);
                break;
            case 17:
                $this->setNomReferentielFonctionnel($value);
                break;
            case 18:
                $this->setMessage($value);
                break;
            case 19:
                $this->setDateSignature($value);
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
        $keys = CommonFichierEnveloppePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdFichier($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdEnveloppe($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTypeFichier($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNumOrdreFichier($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNomFichier($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTailleFichier($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSignatureFichier($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHash($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setVerificationCertificat($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIdBlob($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdBlobSignature($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTypePiece($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdTypePiece($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIsHash($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setNomReferentielCertificat($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setStatutReferentielCertificat($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNomReferentielFonctionnel($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMessage($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateSignature($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonFichierEnveloppePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonFichierEnveloppePeer::ID_FICHIER)) $criteria->add(CommonFichierEnveloppePeer::ID_FICHIER, $this->id_fichier);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ORGANISME)) $criteria->add(CommonFichierEnveloppePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ID_ENVELOPPE)) $criteria->add(CommonFichierEnveloppePeer::ID_ENVELOPPE, $this->id_enveloppe);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::TYPE_FICHIER)) $criteria->add(CommonFichierEnveloppePeer::TYPE_FICHIER, $this->type_fichier);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::NUM_ORDRE_FICHIER)) $criteria->add(CommonFichierEnveloppePeer::NUM_ORDRE_FICHIER, $this->num_ordre_fichier);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::NOM_FICHIER)) $criteria->add(CommonFichierEnveloppePeer::NOM_FICHIER, $this->nom_fichier);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::TAILLE_FICHIER)) $criteria->add(CommonFichierEnveloppePeer::TAILLE_FICHIER, $this->taille_fichier);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::SIGNATURE_FICHIER)) $criteria->add(CommonFichierEnveloppePeer::SIGNATURE_FICHIER, $this->signature_fichier);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::HASH)) $criteria->add(CommonFichierEnveloppePeer::HASH, $this->hash);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::VERIFICATION_CERTIFICAT)) $criteria->add(CommonFichierEnveloppePeer::VERIFICATION_CERTIFICAT, $this->verification_certificat);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ID_BLOB)) $criteria->add(CommonFichierEnveloppePeer::ID_BLOB, $this->id_blob);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ID_BLOB_SIGNATURE)) $criteria->add(CommonFichierEnveloppePeer::ID_BLOB_SIGNATURE, $this->id_blob_signature);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::TYPE_PIECE)) $criteria->add(CommonFichierEnveloppePeer::TYPE_PIECE, $this->type_piece);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::ID_TYPE_PIECE)) $criteria->add(CommonFichierEnveloppePeer::ID_TYPE_PIECE, $this->id_type_piece);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::IS_HASH)) $criteria->add(CommonFichierEnveloppePeer::IS_HASH, $this->is_hash);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::NOM_REFERENTIEL_CERTIFICAT)) $criteria->add(CommonFichierEnveloppePeer::NOM_REFERENTIEL_CERTIFICAT, $this->nom_referentiel_certificat);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::STATUT_REFERENTIEL_CERTIFICAT)) $criteria->add(CommonFichierEnveloppePeer::STATUT_REFERENTIEL_CERTIFICAT, $this->statut_referentiel_certificat);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::NOM_REFERENTIEL_FONCTIONNEL)) $criteria->add(CommonFichierEnveloppePeer::NOM_REFERENTIEL_FONCTIONNEL, $this->nom_referentiel_fonctionnel);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::MESSAGE)) $criteria->add(CommonFichierEnveloppePeer::MESSAGE, $this->message);
        if ($this->isColumnModified(CommonFichierEnveloppePeer::DATE_SIGNATURE)) $criteria->add(CommonFichierEnveloppePeer::DATE_SIGNATURE, $this->date_signature);

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
        $criteria = new Criteria(CommonFichierEnveloppePeer::DATABASE_NAME);
        $criteria->add(CommonFichierEnveloppePeer::ID_FICHIER, $this->id_fichier);
        $criteria->add(CommonFichierEnveloppePeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdFichier();
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
        $this->setIdFichier($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdFichier()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonFichierEnveloppe (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdEnveloppe($this->getIdEnveloppe());
        $copyObj->setTypeFichier($this->getTypeFichier());
        $copyObj->setNumOrdreFichier($this->getNumOrdreFichier());
        $copyObj->setNomFichier($this->getNomFichier());
        $copyObj->setTailleFichier($this->getTailleFichier());
        $copyObj->setSignatureFichier($this->getSignatureFichier());
        $copyObj->setHash($this->getHash());
        $copyObj->setVerificationCertificat($this->getVerificationCertificat());
        $copyObj->setIdBlob($this->getIdBlob());
        $copyObj->setIdBlobSignature($this->getIdBlobSignature());
        $copyObj->setTypePiece($this->getTypePiece());
        $copyObj->setIdTypePiece($this->getIdTypePiece());
        $copyObj->setIsHash($this->getIsHash());
        $copyObj->setNomReferentielCertificat($this->getNomReferentielCertificat());
        $copyObj->setStatutReferentielCertificat($this->getStatutReferentielCertificat());
        $copyObj->setNomReferentielFonctionnel($this->getNomReferentielFonctionnel());
        $copyObj->setMessage($this->getMessage());
        $copyObj->setDateSignature($this->getDateSignature());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdFichier(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonFichierEnveloppe Clone of current object.
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
     * @return CommonFichierEnveloppePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonFichierEnveloppePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_fichier = null;
        $this->organisme = null;
        $this->id_enveloppe = null;
        $this->type_fichier = null;
        $this->num_ordre_fichier = null;
        $this->nom_fichier = null;
        $this->taille_fichier = null;
        $this->signature_fichier = null;
        $this->hash = null;
        $this->verification_certificat = null;
        $this->id_blob = null;
        $this->id_blob_signature = null;
        $this->type_piece = null;
        $this->id_type_piece = null;
        $this->is_hash = null;
        $this->nom_referentiel_certificat = null;
        $this->statut_referentiel_certificat = null;
        $this->nom_referentiel_fonctionnel = null;
        $this->message = null;
        $this->date_signature = null;
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
        return (string) $this->exportTo(CommonFichierEnveloppePeer::DEFAULT_STRING_FORMAT);
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
