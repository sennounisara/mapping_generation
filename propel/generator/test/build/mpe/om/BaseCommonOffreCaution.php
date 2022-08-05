<?php


/**
 * Base class that represents a row from the 'offre_caution' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonOffreCaution extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonOffreCautionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonOffreCautionPeer
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
     * The value for the id_demande field.
     * @var        int
     */
    protected $id_demande;

    /**
     * The value for the ref_consultation field.
     * @var        int
     */
    protected $ref_consultation;

    /**
     * The value for the id_offre field.
     * @var        int
     */
    protected $id_offre;

    /**
     * The value for the type_env field.
     * @var        int
     */
    protected $type_env;

    /**
     * The value for the id_entreprise field.
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the id_inscrit field.
     * @var        int
     */
    protected $id_inscrit;

    /**
     * The value for the acronyme field.
     * @var        string
     */
    protected $acronyme;

    /**
     * The value for the intitule field.
     * @var        string
     */
    protected $intitule;

    /**
     * The value for the lot field.
     * @var        int
     */
    protected $lot;

    /**
     * The value for the objet_lot field.
     * @var        string
     */
    protected $objet_lot;

    /**
     * The value for the raison_sociale field.
     * @var        string
     */
    protected $raison_sociale;

    /**
     * The value for the montant field.
     * @var        double
     */
    protected $montant;

    /**
     * The value for the date_demande field.
     * @var        string
     */
    protected $date_demande;

    /**
     * The value for the id_statut_caution field.
     * @var        int
     */
    protected $id_statut_caution;

    /**
     * The value for the id_compte_bancaire field.
     * @var        int
     */
    protected $id_compte_bancaire;

    /**
     * The value for the id_blob_demande field.
     * @var        int
     */
    protected $id_blob_demande;

    /**
     * The value for the nom_doc_demande field.
     * @var        string
     */
    protected $nom_doc_demande;

    /**
     * The value for the id_blob_caution field.
     * @var        int
     */
    protected $id_blob_caution;

    /**
     * The value for the nom_doc_caution field.
     * @var        string
     */
    protected $nom_doc_caution;

    /**
     * The value for the id_inscrit_crea field.
     * @var        int
     */
    protected $id_inscrit_crea;

    /**
     * The value for the date_crea field.
     * @var        string
     */
    protected $date_crea;

    /**
     * The value for the identifiant_bancaire field.
     * @var        string
     */
    protected $identifiant_bancaire;

    /**
     * The value for the acheteur_public field.
     * @var        string
     */
    protected $acheteur_public;

    /**
     * The value for the date_validation field.
     * @var        string
     */
    protected $date_validation;

    /**
     * The value for the depot_annule field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $depot_annule;

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
        $this->depot_annule = '0';
    }

    /**
     * Initializes internal state of BaseCommonOffreCaution object.
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
     * Get the [id_demande] column value.
     * 
     * @return int
     */
    public function getIdDemande()
    {

        return $this->id_demande;
    }

    /**
     * Get the [ref_consultation] column value.
     * 
     * @return int
     */
    public function getRefConsultation()
    {

        return $this->ref_consultation;
    }

    /**
     * Get the [id_offre] column value.
     * 
     * @return int
     */
    public function getIdOffre()
    {

        return $this->id_offre;
    }

    /**
     * Get the [type_env] column value.
     * 
     * @return int
     */
    public function getTypeEnv()
    {

        return $this->type_env;
    }

    /**
     * Get the [id_entreprise] column value.
     * 
     * @return int
     */
    public function getIdEntreprise()
    {

        return $this->id_entreprise;
    }

    /**
     * Get the [id_inscrit] column value.
     * 
     * @return int
     */
    public function getIdInscrit()
    {

        return $this->id_inscrit;
    }

    /**
     * Get the [acronyme] column value.
     * 
     * @return string
     */
    public function getAcronyme()
    {

        return $this->acronyme;
    }

    /**
     * Get the [intitule] column value.
     * 
     * @return string
     */
    public function getIntitule()
    {

        return $this->intitule;
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
     * Get the [objet_lot] column value.
     * 
     * @return string
     */
    public function getObjetLot()
    {

        return $this->objet_lot;
    }

    /**
     * Get the [raison_sociale] column value.
     * 
     * @return string
     */
    public function getRaisonSociale()
    {

        return $this->raison_sociale;
    }

    /**
     * Get the [montant] column value.
     * 
     * @return double
     */
    public function getMontant()
    {

        return $this->montant;
    }

    /**
     * Get the [optionally formatted] temporal [date_demande] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDemande($format = 'Y-m-d H:i:s')
    {
        if ($this->date_demande === null) {
            return null;
        }

        if ($this->date_demande === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_demande);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_demande, true), $x);
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
     * Get the [id_statut_caution] column value.
     * 
     * @return int
     */
    public function getIdStatutCaution()
    {

        return $this->id_statut_caution;
    }

    /**
     * Get the [id_compte_bancaire] column value.
     * 
     * @return int
     */
    public function getIdCompteBancaire()
    {

        return $this->id_compte_bancaire;
    }

    /**
     * Get the [id_blob_demande] column value.
     * 
     * @return int
     */
    public function getIdBlobDemande()
    {

        return $this->id_blob_demande;
    }

    /**
     * Get the [nom_doc_demande] column value.
     * 
     * @return string
     */
    public function getNomDocDemande()
    {

        return $this->nom_doc_demande;
    }

    /**
     * Get the [id_blob_caution] column value.
     * 
     * @return int
     */
    public function getIdBlobCaution()
    {

        return $this->id_blob_caution;
    }

    /**
     * Get the [nom_doc_caution] column value.
     * 
     * @return string
     */
    public function getNomDocCaution()
    {

        return $this->nom_doc_caution;
    }

    /**
     * Get the [id_inscrit_crea] column value.
     * 
     * @return int
     */
    public function getIdInscritCrea()
    {

        return $this->id_inscrit_crea;
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
     * Get the [identifiant_bancaire] column value.
     * 
     * @return string
     */
    public function getIdentifiantBancaire()
    {

        return $this->identifiant_bancaire;
    }

    /**
     * Get the [acheteur_public] column value.
     * 
     * @return string
     */
    public function getAcheteurPublic()
    {

        return $this->acheteur_public;
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
     * Get the [depot_annule] column value.
     * 
     * @return string
     */
    public function getDepotAnnule()
    {

        return $this->depot_annule;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_demande] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIdDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande !== $v) {
            $this->id_demande = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ID_DEMANDE;
        }


        return $this;
    } // setIdDemande()

    /**
     * Set the value of [ref_consultation] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setRefConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ref_consultation !== $v) {
            $this->ref_consultation = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::REF_CONSULTATION;
        }


        return $this;
    } // setRefConsultation()

    /**
     * Set the value of [id_offre] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIdOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_offre !== $v) {
            $this->id_offre = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ID_OFFRE;
        }


        return $this;
    } // setIdOffre()

    /**
     * Set the value of [type_env] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setTypeEnv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_env !== $v) {
            $this->type_env = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::TYPE_ENV;
        }


        return $this;
    } // setTypeEnv()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [acronyme] column.
     * 
     * @param string $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setAcronyme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme !== $v) {
            $this->acronyme = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ACRONYME;
        }


        return $this;
    } // setAcronyme()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::INTITULE;
        }


        return $this;
    } // setIntitule()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [objet_lot] column.
     * 
     * @param string $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setObjetLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet_lot !== $v) {
            $this->objet_lot = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::OBJET_LOT;
        }


        return $this;
    } // setObjetLot()

    /**
     * Set the value of [raison_sociale] column.
     * 
     * @param string $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setRaisonSociale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->raison_sociale !== $v) {
            $this->raison_sociale = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::RAISON_SOCIALE;
        }


        return $this;
    } // setRaisonSociale()

    /**
     * Set the value of [montant] column.
     * 
     * @param double $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setMontant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant !== $v) {
            $this->montant = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::MONTANT;
        }


        return $this;
    } // setMontant()

    /**
     * Sets the value of [date_demande] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setDateDemande($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_demande !== null || $dt !== null) {
            $currentDateAsString = ($this->date_demande !== null && $tmpDt = new DateTime($this->date_demande)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_demande = $newDateAsString;
                $this->modifiedColumns[] = CommonOffreCautionPeer::DATE_DEMANDE;
            }
        } // if either are not null


        return $this;
    } // setDateDemande()

    /**
     * Set the value of [id_statut_caution] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIdStatutCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_statut_caution !== $v) {
            $this->id_statut_caution = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ID_STATUT_CAUTION;
        }


        return $this;
    } // setIdStatutCaution()

    /**
     * Set the value of [id_compte_bancaire] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIdCompteBancaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_compte_bancaire !== $v) {
            $this->id_compte_bancaire = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ID_COMPTE_BANCAIRE;
        }


        return $this;
    } // setIdCompteBancaire()

    /**
     * Set the value of [id_blob_demande] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIdBlobDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_demande !== $v) {
            $this->id_blob_demande = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ID_BLOB_DEMANDE;
        }


        return $this;
    } // setIdBlobDemande()

    /**
     * Set the value of [nom_doc_demande] column.
     * 
     * @param string $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setNomDocDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_doc_demande !== $v) {
            $this->nom_doc_demande = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::NOM_DOC_DEMANDE;
        }


        return $this;
    } // setNomDocDemande()

    /**
     * Set the value of [id_blob_caution] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIdBlobCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_caution !== $v) {
            $this->id_blob_caution = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ID_BLOB_CAUTION;
        }


        return $this;
    } // setIdBlobCaution()

    /**
     * Set the value of [nom_doc_caution] column.
     * 
     * @param string $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setNomDocCaution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_doc_caution !== $v) {
            $this->nom_doc_caution = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::NOM_DOC_CAUTION;
        }


        return $this;
    } // setNomDocCaution()

    /**
     * Set the value of [id_inscrit_crea] column.
     * 
     * @param int $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIdInscritCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit_crea !== $v) {
            $this->id_inscrit_crea = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ID_INSCRIT_CREA;
        }


        return $this;
    } // setIdInscritCrea()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonOffreCautionPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [identifiant_bancaire] column.
     * 
     * @param string $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setIdentifiantBancaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_bancaire !== $v) {
            $this->identifiant_bancaire = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::IDENTIFIANT_BANCAIRE;
        }


        return $this;
    } // setIdentifiantBancaire()

    /**
     * Set the value of [acheteur_public] column.
     * 
     * @param string $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setAcheteurPublic($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acheteur_public !== $v) {
            $this->acheteur_public = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::ACHETEUR_PUBLIC;
        }


        return $this;
    } // setAcheteurPublic()

    /**
     * Sets the value of [date_validation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setDateValidation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_validation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_validation !== null && $tmpDt = new DateTime($this->date_validation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_validation = $newDateAsString;
                $this->modifiedColumns[] = CommonOffreCautionPeer::DATE_VALIDATION;
            }
        } // if either are not null


        return $this;
    } // setDateValidation()

    /**
     * Set the value of [depot_annule] column.
     * 
     * @param string $v new value
     * @return CommonOffreCaution The current object (for fluent API support)
     */
    public function setDepotAnnule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->depot_annule !== $v) {
            $this->depot_annule = $v;
            $this->modifiedColumns[] = CommonOffreCautionPeer::DEPOT_ANNULE;
        }


        return $this;
    } // setDepotAnnule()

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
            if ($this->depot_annule !== '0') {
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
            $this->id_demande = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->ref_consultation = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_offre = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->type_env = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->id_entreprise = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_inscrit = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->acronyme = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->intitule = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->lot = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->objet_lot = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->raison_sociale = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->montant = ($row[$startcol + 12] !== null) ? (double) $row[$startcol + 12] : null;
            $this->date_demande = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->id_statut_caution = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->id_compte_bancaire = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->id_blob_demande = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->nom_doc_demande = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->id_blob_caution = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->nom_doc_caution = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->id_inscrit_crea = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->date_crea = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->identifiant_bancaire = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->acheteur_public = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->date_validation = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->depot_annule = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 26; // 26 = CommonOffreCautionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonOffreCaution object", $e);
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
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonOffreCautionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonOffreCautionQuery::create()
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
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonOffreCautionPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonOffreCautionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonOffreCautionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonOffreCautionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::REF_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`REF_CONSULTATION`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_OFFRE`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::TYPE_ENV)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_ENV`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTREPRISE`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_INSCRIT`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ACRONYME)) {
            $modifiedColumns[':p' . $index++]  = '`ACRONYME`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`INTITULE`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`LOT`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::OBJET_LOT)) {
            $modifiedColumns[':p' . $index++]  = '`OBJET_LOT`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::RAISON_SOCIALE)) {
            $modifiedColumns[':p' . $index++]  = '`RAISON_SOCIALE`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::MONTANT)) {
            $modifiedColumns[':p' . $index++]  = '`MONTANT`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::DATE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_DEMANDE`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_STATUT_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_STATUT_CAUTION`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_COMPTE_BANCAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_COMPTE_BANCAIRE`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_BLOB_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_BLOB_DEMANDE`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::NOM_DOC_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_DOC_DEMANDE`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_BLOB_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_BLOB_CAUTION`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::NOM_DOC_CAUTION)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_DOC_CAUTION`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_INSCRIT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`ID_INSCRIT_CREA`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_CREA`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::IDENTIFIANT_BANCAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_BANCAIRE`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::ACHETEUR_PUBLIC)) {
            $modifiedColumns[':p' . $index++]  = '`ACHETEUR_PUBLIC`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::DATE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_VALIDATION`';
        }
        if ($this->isColumnModified(CommonOffreCautionPeer::DEPOT_ANNULE)) {
            $modifiedColumns[':p' . $index++]  = '`DEPOT_ANNULE`';
        }

        $sql = sprintf(
            'INSERT INTO `offre_caution` (%s) VALUES (%s)',
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
                    case '`ID_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_demande, PDO::PARAM_INT);
                        break;
                    case '`REF_CONSULTATION`':						
                        $stmt->bindValue($identifier, $this->ref_consultation, PDO::PARAM_INT);
                        break;
                    case '`ID_OFFRE`':						
                        $stmt->bindValue($identifier, $this->id_offre, PDO::PARAM_INT);
                        break;
                    case '`TYPE_ENV`':						
                        $stmt->bindValue($identifier, $this->type_env, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTREPRISE`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`ID_INSCRIT`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`ACRONYME`':						
                        $stmt->bindValue($identifier, $this->acronyme, PDO::PARAM_STR);
                        break;
                    case '`INTITULE`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
                        break;
                    case '`LOT`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`OBJET_LOT`':						
                        $stmt->bindValue($identifier, $this->objet_lot, PDO::PARAM_STR);
                        break;
                    case '`RAISON_SOCIALE`':						
                        $stmt->bindValue($identifier, $this->raison_sociale, PDO::PARAM_STR);
                        break;
                    case '`MONTANT`':						
                        $stmt->bindValue($identifier, $this->montant, PDO::PARAM_STR);
                        break;
                    case '`DATE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->date_demande, PDO::PARAM_STR);
                        break;
                    case '`ID_STATUT_CAUTION`':						
                        $stmt->bindValue($identifier, $this->id_statut_caution, PDO::PARAM_INT);
                        break;
                    case '`ID_COMPTE_BANCAIRE`':						
                        $stmt->bindValue($identifier, $this->id_compte_bancaire, PDO::PARAM_INT);
                        break;
                    case '`ID_BLOB_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_blob_demande, PDO::PARAM_INT);
                        break;
                    case '`NOM_DOC_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->nom_doc_demande, PDO::PARAM_STR);
                        break;
                    case '`ID_BLOB_CAUTION`':						
                        $stmt->bindValue($identifier, $this->id_blob_caution, PDO::PARAM_INT);
                        break;
                    case '`NOM_DOC_CAUTION`':						
                        $stmt->bindValue($identifier, $this->nom_doc_caution, PDO::PARAM_STR);
                        break;
                    case '`ID_INSCRIT_CREA`':						
                        $stmt->bindValue($identifier, $this->id_inscrit_crea, PDO::PARAM_INT);
                        break;
                    case '`DATE_CREA`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`IDENTIFIANT_BANCAIRE`':						
                        $stmt->bindValue($identifier, $this->identifiant_bancaire, PDO::PARAM_STR);
                        break;
                    case '`ACHETEUR_PUBLIC`':						
                        $stmt->bindValue($identifier, $this->acheteur_public, PDO::PARAM_STR);
                        break;
                    case '`DATE_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->date_validation, PDO::PARAM_STR);
                        break;
                    case '`DEPOT_ANNULE`':						
                        $stmt->bindValue($identifier, $this->depot_annule, PDO::PARAM_STR);
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


            if (($retval = CommonOffreCautionPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonOffreCautionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDemande();
                break;
            case 2:
                return $this->getRefConsultation();
                break;
            case 3:
                return $this->getIdOffre();
                break;
            case 4:
                return $this->getTypeEnv();
                break;
            case 5:
                return $this->getIdEntreprise();
                break;
            case 6:
                return $this->getIdInscrit();
                break;
            case 7:
                return $this->getAcronyme();
                break;
            case 8:
                return $this->getIntitule();
                break;
            case 9:
                return $this->getLot();
                break;
            case 10:
                return $this->getObjetLot();
                break;
            case 11:
                return $this->getRaisonSociale();
                break;
            case 12:
                return $this->getMontant();
                break;
            case 13:
                return $this->getDateDemande();
                break;
            case 14:
                return $this->getIdStatutCaution();
                break;
            case 15:
                return $this->getIdCompteBancaire();
                break;
            case 16:
                return $this->getIdBlobDemande();
                break;
            case 17:
                return $this->getNomDocDemande();
                break;
            case 18:
                return $this->getIdBlobCaution();
                break;
            case 19:
                return $this->getNomDocCaution();
                break;
            case 20:
                return $this->getIdInscritCrea();
                break;
            case 21:
                return $this->getDateCrea();
                break;
            case 22:
                return $this->getIdentifiantBancaire();
                break;
            case 23:
                return $this->getAcheteurPublic();
                break;
            case 24:
                return $this->getDateValidation();
                break;
            case 25:
                return $this->getDepotAnnule();
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
        if (isset($alreadyDumpedObjects['CommonOffreCaution'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonOffreCaution'][$this->getPrimaryKey()] = true;
        $keys = CommonOffreCautionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdDemande(),
            $keys[2] => $this->getRefConsultation(),
            $keys[3] => $this->getIdOffre(),
            $keys[4] => $this->getTypeEnv(),
            $keys[5] => $this->getIdEntreprise(),
            $keys[6] => $this->getIdInscrit(),
            $keys[7] => $this->getAcronyme(),
            $keys[8] => $this->getIntitule(),
            $keys[9] => $this->getLot(),
            $keys[10] => $this->getObjetLot(),
            $keys[11] => $this->getRaisonSociale(),
            $keys[12] => $this->getMontant(),
            $keys[13] => $this->getDateDemande(),
            $keys[14] => $this->getIdStatutCaution(),
            $keys[15] => $this->getIdCompteBancaire(),
            $keys[16] => $this->getIdBlobDemande(),
            $keys[17] => $this->getNomDocDemande(),
            $keys[18] => $this->getIdBlobCaution(),
            $keys[19] => $this->getNomDocCaution(),
            $keys[20] => $this->getIdInscritCrea(),
            $keys[21] => $this->getDateCrea(),
            $keys[22] => $this->getIdentifiantBancaire(),
            $keys[23] => $this->getAcheteurPublic(),
            $keys[24] => $this->getDateValidation(),
            $keys[25] => $this->getDepotAnnule(),
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
        $pos = CommonOffreCautionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDemande($value);
                break;
            case 2:
                $this->setRefConsultation($value);
                break;
            case 3:
                $this->setIdOffre($value);
                break;
            case 4:
                $this->setTypeEnv($value);
                break;
            case 5:
                $this->setIdEntreprise($value);
                break;
            case 6:
                $this->setIdInscrit($value);
                break;
            case 7:
                $this->setAcronyme($value);
                break;
            case 8:
                $this->setIntitule($value);
                break;
            case 9:
                $this->setLot($value);
                break;
            case 10:
                $this->setObjetLot($value);
                break;
            case 11:
                $this->setRaisonSociale($value);
                break;
            case 12:
                $this->setMontant($value);
                break;
            case 13:
                $this->setDateDemande($value);
                break;
            case 14:
                $this->setIdStatutCaution($value);
                break;
            case 15:
                $this->setIdCompteBancaire($value);
                break;
            case 16:
                $this->setIdBlobDemande($value);
                break;
            case 17:
                $this->setNomDocDemande($value);
                break;
            case 18:
                $this->setIdBlobCaution($value);
                break;
            case 19:
                $this->setNomDocCaution($value);
                break;
            case 20:
                $this->setIdInscritCrea($value);
                break;
            case 21:
                $this->setDateCrea($value);
                break;
            case 22:
                $this->setIdentifiantBancaire($value);
                break;
            case 23:
                $this->setAcheteurPublic($value);
                break;
            case 24:
                $this->setDateValidation($value);
                break;
            case 25:
                $this->setDepotAnnule($value);
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
        $keys = CommonOffreCautionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdDemande($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setRefConsultation($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdOffre($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTypeEnv($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdEntreprise($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdInscrit($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAcronyme($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIntitule($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLot($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setObjetLot($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setRaisonSociale($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMontant($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDateDemande($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdStatutCaution($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdCompteBancaire($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdBlobDemande($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNomDocDemande($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdBlobCaution($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setNomDocCaution($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdInscritCrea($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDateCrea($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setIdentifiantBancaire($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setAcheteurPublic($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDateValidation($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDepotAnnule($arr[$keys[25]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonOffreCautionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonOffreCautionPeer::ID)) $criteria->add(CommonOffreCautionPeer::ID, $this->id);
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_DEMANDE)) $criteria->add(CommonOffreCautionPeer::ID_DEMANDE, $this->id_demande);
        if ($this->isColumnModified(CommonOffreCautionPeer::REF_CONSULTATION)) $criteria->add(CommonOffreCautionPeer::REF_CONSULTATION, $this->ref_consultation);
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_OFFRE)) $criteria->add(CommonOffreCautionPeer::ID_OFFRE, $this->id_offre);
        if ($this->isColumnModified(CommonOffreCautionPeer::TYPE_ENV)) $criteria->add(CommonOffreCautionPeer::TYPE_ENV, $this->type_env);
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_ENTREPRISE)) $criteria->add(CommonOffreCautionPeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_INSCRIT)) $criteria->add(CommonOffreCautionPeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonOffreCautionPeer::ACRONYME)) $criteria->add(CommonOffreCautionPeer::ACRONYME, $this->acronyme);
        if ($this->isColumnModified(CommonOffreCautionPeer::INTITULE)) $criteria->add(CommonOffreCautionPeer::INTITULE, $this->intitule);
        if ($this->isColumnModified(CommonOffreCautionPeer::LOT)) $criteria->add(CommonOffreCautionPeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonOffreCautionPeer::OBJET_LOT)) $criteria->add(CommonOffreCautionPeer::OBJET_LOT, $this->objet_lot);
        if ($this->isColumnModified(CommonOffreCautionPeer::RAISON_SOCIALE)) $criteria->add(CommonOffreCautionPeer::RAISON_SOCIALE, $this->raison_sociale);
        if ($this->isColumnModified(CommonOffreCautionPeer::MONTANT)) $criteria->add(CommonOffreCautionPeer::MONTANT, $this->montant);
        if ($this->isColumnModified(CommonOffreCautionPeer::DATE_DEMANDE)) $criteria->add(CommonOffreCautionPeer::DATE_DEMANDE, $this->date_demande);
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_STATUT_CAUTION)) $criteria->add(CommonOffreCautionPeer::ID_STATUT_CAUTION, $this->id_statut_caution);
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_COMPTE_BANCAIRE)) $criteria->add(CommonOffreCautionPeer::ID_COMPTE_BANCAIRE, $this->id_compte_bancaire);
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_BLOB_DEMANDE)) $criteria->add(CommonOffreCautionPeer::ID_BLOB_DEMANDE, $this->id_blob_demande);
        if ($this->isColumnModified(CommonOffreCautionPeer::NOM_DOC_DEMANDE)) $criteria->add(CommonOffreCautionPeer::NOM_DOC_DEMANDE, $this->nom_doc_demande);
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_BLOB_CAUTION)) $criteria->add(CommonOffreCautionPeer::ID_BLOB_CAUTION, $this->id_blob_caution);
        if ($this->isColumnModified(CommonOffreCautionPeer::NOM_DOC_CAUTION)) $criteria->add(CommonOffreCautionPeer::NOM_DOC_CAUTION, $this->nom_doc_caution);
        if ($this->isColumnModified(CommonOffreCautionPeer::ID_INSCRIT_CREA)) $criteria->add(CommonOffreCautionPeer::ID_INSCRIT_CREA, $this->id_inscrit_crea);
        if ($this->isColumnModified(CommonOffreCautionPeer::DATE_CREA)) $criteria->add(CommonOffreCautionPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonOffreCautionPeer::IDENTIFIANT_BANCAIRE)) $criteria->add(CommonOffreCautionPeer::IDENTIFIANT_BANCAIRE, $this->identifiant_bancaire);
        if ($this->isColumnModified(CommonOffreCautionPeer::ACHETEUR_PUBLIC)) $criteria->add(CommonOffreCautionPeer::ACHETEUR_PUBLIC, $this->acheteur_public);
        if ($this->isColumnModified(CommonOffreCautionPeer::DATE_VALIDATION)) $criteria->add(CommonOffreCautionPeer::DATE_VALIDATION, $this->date_validation);
        if ($this->isColumnModified(CommonOffreCautionPeer::DEPOT_ANNULE)) $criteria->add(CommonOffreCautionPeer::DEPOT_ANNULE, $this->depot_annule);

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
        $criteria = new Criteria(CommonOffreCautionPeer::DATABASE_NAME);
        $criteria->add(CommonOffreCautionPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonOffreCaution (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdDemande($this->getIdDemande());
        $copyObj->setRefConsultation($this->getRefConsultation());
        $copyObj->setIdOffre($this->getIdOffre());
        $copyObj->setTypeEnv($this->getTypeEnv());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setAcronyme($this->getAcronyme());
        $copyObj->setIntitule($this->getIntitule());
        $copyObj->setLot($this->getLot());
        $copyObj->setObjetLot($this->getObjetLot());
        $copyObj->setRaisonSociale($this->getRaisonSociale());
        $copyObj->setMontant($this->getMontant());
        $copyObj->setDateDemande($this->getDateDemande());
        $copyObj->setIdStatutCaution($this->getIdStatutCaution());
        $copyObj->setIdCompteBancaire($this->getIdCompteBancaire());
        $copyObj->setIdBlobDemande($this->getIdBlobDemande());
        $copyObj->setNomDocDemande($this->getNomDocDemande());
        $copyObj->setIdBlobCaution($this->getIdBlobCaution());
        $copyObj->setNomDocCaution($this->getNomDocCaution());
        $copyObj->setIdInscritCrea($this->getIdInscritCrea());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdentifiantBancaire($this->getIdentifiantBancaire());
        $copyObj->setAcheteurPublic($this->getAcheteurPublic());
        $copyObj->setDateValidation($this->getDateValidation());
        $copyObj->setDepotAnnule($this->getDepotAnnule());
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
     * @return CommonOffreCaution Clone of current object.
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
     * @return CommonOffreCautionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonOffreCautionPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_demande = null;
        $this->ref_consultation = null;
        $this->id_offre = null;
        $this->type_env = null;
        $this->id_entreprise = null;
        $this->id_inscrit = null;
        $this->acronyme = null;
        $this->intitule = null;
        $this->lot = null;
        $this->objet_lot = null;
        $this->raison_sociale = null;
        $this->montant = null;
        $this->date_demande = null;
        $this->id_statut_caution = null;
        $this->id_compte_bancaire = null;
        $this->id_blob_demande = null;
        $this->nom_doc_demande = null;
        $this->id_blob_caution = null;
        $this->nom_doc_caution = null;
        $this->id_inscrit_crea = null;
        $this->date_crea = null;
        $this->identifiant_bancaire = null;
        $this->acheteur_public = null;
        $this->date_validation = null;
        $this->depot_annule = null;
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
        return (string) $this->exportTo(CommonOffreCautionPeer::DEFAULT_STRING_FORMAT);
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
