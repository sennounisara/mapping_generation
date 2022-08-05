<?php


/**
 * Base class that represents a row from the 'facture' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonFacture extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonFacturePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonFacturePeer
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
     * The value for the id_type field.
     * @var        int
     */
    protected $id_type;

    /**
     * The value for the id_sous_type field.
     * @var        int
     */
    protected $id_sous_type;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the ref field.
     * @var        string
     */
    protected $ref;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the montant_ht field.
     * @var        double
     */
    protected $montant_ht;

    /**
     * The value for the montant_ttc field.
     * @var        double
     */
    protected $montant_ttc;

    /**
     * The value for the montant_tva field.
     * @var        double
     */
    protected $montant_tva;

    /**
     * The value for the objet field.
     * @var        string
     */
    protected $objet;

    /**
     * The value for the devis field.
     * @var        string
     */
    protected $devis;

    /**
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the numero_depot field.
     * @var        string
     */
    protected $numero_depot;

    /**
     * The value for the numero_marche field.
     * @var        string
     */
    protected $numero_marche;

    /**
     * The value for the id_inscrit field.
     * @var        int
     */
    protected $id_inscrit;

    /**
     * The value for the id_entreprise field.
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the id_blob_facture field.
     * @var        int
     */
    protected $id_blob_facture;

    /**
     * The value for the nom_fichier field.
     * @var        string
     */
    protected $nom_fichier;

    /**
     * The value for the id_blob_facture_signe field.
     * @var        int
     */
    protected $id_blob_facture_signe;

    /**
     * The value for the date_envoi field.
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the date_depot field.
     * @var        string
     */
    protected $date_depot;

    /**
     * @var        CommonTypeFacture
     */
    protected $aCommonTypeFacture;

    /**
     * @var        CommonSousTypeFacture
     */
    protected $aCommonSousTypeFacture;

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
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [id_type] column value.
     * 
     * @return int
     */
    public function getIdType()
    {

        return $this->id_type;
    }

    /**
     * Get the [id_sous_type] column value.
     * 
     * @return int
     */
    public function getIdSousType()
    {

        return $this->id_sous_type;
    }

    /**
     * Get the [type] column value.
     * 
     * @return string
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [ref] column value.
     * 
     * @return string
     */
    public function getRef()
    {

        return $this->ref;
    }

    /**
     * Get the [optionally formatted] temporal [date_creation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCreation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_creation === null) {
            return null;
        }

        if ($this->date_creation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_creation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_creation, true), $x);
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
     * Get the [montant_ht] column value.
     * 
     * @return double
     */
    public function getMontantHt()
    {

        return $this->montant_ht;
    }

    /**
     * Get the [montant_ttc] column value.
     * 
     * @return double
     */
    public function getMontantTtc()
    {

        return $this->montant_ttc;
    }

    /**
     * Get the [montant_tva] column value.
     * 
     * @return double
     */
    public function getMontantTva()
    {

        return $this->montant_tva;
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
     * Get the [devis] column value.
     * 
     * @return string
     */
    public function getDevis()
    {

        return $this->devis;
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
     * Get the [numero_depot] column value.
     * 
     * @return string
     */
    public function getNumeroDepot()
    {

        return $this->numero_depot;
    }

    /**
     * Get the [numero_marche] column value.
     * 
     * @return string
     */
    public function getNumeroMarche()
    {

        return $this->numero_marche;
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
     * Get the [id_entreprise] column value.
     * 
     * @return int
     */
    public function getIdEntreprise()
    {

        return $this->id_entreprise;
    }

    /**
     * Get the [id_blob_facture] column value.
     * 
     * @return int
     */
    public function getIdBlobFacture()
    {

        return $this->id_blob_facture;
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
     * Get the [id_blob_facture_signe] column value.
     * 
     * @return int
     */
    public function getIdBlobFactureSigne()
    {

        return $this->id_blob_facture_signe;
    }

    /**
     * Get the [optionally formatted] temporal [date_envoi] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEnvoi($format = 'Y-m-d H:i:s')
    {
        if ($this->date_envoi === null) {
            return null;
        }

        if ($this->date_envoi === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_envoi);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_envoi, true), $x);
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonFacturePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_type] column.
     * 
     * @param int $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setIdType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type !== $v) {
            $this->id_type = $v;
            $this->modifiedColumns[] = CommonFacturePeer::ID_TYPE;
        }

        if ($this->aCommonTypeFacture !== null && $this->aCommonTypeFacture->getId() !== $v) {
            $this->aCommonTypeFacture = null;
        }


        return $this;
    } // setIdType()

    /**
     * Set the value of [id_sous_type] column.
     * 
     * @param int $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setIdSousType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_sous_type !== $v) {
            $this->id_sous_type = $v;
            $this->modifiedColumns[] = CommonFacturePeer::ID_SOUS_TYPE;
        }

        if ($this->aCommonSousTypeFacture !== null && $this->aCommonSousTypeFacture->getId() !== $v) {
            $this->aCommonSousTypeFacture = null;
        }


        return $this;
    } // setIdSousType()

    /**
     * Set the value of [type] column.
     * 
     * @param string $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CommonFacturePeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [ref] column.
     * 
     * @param string $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ref !== $v) {
            $this->ref = $v;
            $this->modifiedColumns[] = CommonFacturePeer::REF;
        }


        return $this;
    } // setRef()

    /**
     * Sets the value of [date_creation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_creation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_creation !== null && $tmpDt = new DateTime($this->date_creation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_creation = $newDateAsString;
                $this->modifiedColumns[] = CommonFacturePeer::DATE_CREATION;
            }
        } // if either are not null


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [montant_ht] column.
     * 
     * @param double $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setMontantHt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_ht !== $v) {
            $this->montant_ht = $v;
            $this->modifiedColumns[] = CommonFacturePeer::MONTANT_HT;
        }


        return $this;
    } // setMontantHt()

    /**
     * Set the value of [montant_ttc] column.
     * 
     * @param double $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setMontantTtc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_ttc !== $v) {
            $this->montant_ttc = $v;
            $this->modifiedColumns[] = CommonFacturePeer::MONTANT_TTC;
        }


        return $this;
    } // setMontantTtc()

    /**
     * Set the value of [montant_tva] column.
     * 
     * @param double $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setMontantTva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->montant_tva !== $v) {
            $this->montant_tva = $v;
            $this->modifiedColumns[] = CommonFacturePeer::MONTANT_TVA;
        }


        return $this;
    } // setMontantTva()

    /**
     * Set the value of [objet] column.
     * 
     * @param string $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet !== $v) {
            $this->objet = $v;
            $this->modifiedColumns[] = CommonFacturePeer::OBJET;
        }


        return $this;
    } // setObjet()

    /**
     * Set the value of [devis] column.
     * 
     * @param string $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setDevis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->devis !== $v) {
            $this->devis = $v;
            $this->modifiedColumns[] = CommonFacturePeer::DEVIS;
        }


        return $this;
    } // setDevis()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonFacturePeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [numero_depot] column.
     * 
     * @param string $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setNumeroDepot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_depot !== $v) {
            $this->numero_depot = $v;
            $this->modifiedColumns[] = CommonFacturePeer::NUMERO_DEPOT;
        }


        return $this;
    } // setNumeroDepot()

    /**
     * Set the value of [numero_marche] column.
     * 
     * @param string $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setNumeroMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_marche !== $v) {
            $this->numero_marche = $v;
            $this->modifiedColumns[] = CommonFacturePeer::NUMERO_MARCHE;
        }


        return $this;
    } // setNumeroMarche()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonFacturePeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonFacturePeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [id_blob_facture] column.
     * 
     * @param int $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setIdBlobFacture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_facture !== $v) {
            $this->id_blob_facture = $v;
            $this->modifiedColumns[] = CommonFacturePeer::ID_BLOB_FACTURE;
        }


        return $this;
    } // setIdBlobFacture()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = CommonFacturePeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

    /**
     * Set the value of [id_blob_facture_signe] column.
     * 
     * @param int $v new value
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setIdBlobFactureSigne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_facture_signe !== $v) {
            $this->id_blob_facture_signe = $v;
            $this->modifiedColumns[] = CommonFacturePeer::ID_BLOB_FACTURE_SIGNE;
        }


        return $this;
    } // setIdBlobFactureSigne()

    /**
     * Sets the value of [date_envoi] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_envoi !== null || $dt !== null) {
            $currentDateAsString = ($this->date_envoi !== null && $tmpDt = new DateTime($this->date_envoi)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_envoi = $newDateAsString;
                $this->modifiedColumns[] = CommonFacturePeer::DATE_ENVOI;
            }
        } // if either are not null


        return $this;
    } // setDateEnvoi()

    /**
     * Sets the value of [date_depot] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonFacture The current object (for fluent API support)
     */
    public function setDateDepot($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_depot !== null || $dt !== null) {
            $currentDateAsString = ($this->date_depot !== null && $tmpDt = new DateTime($this->date_depot)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_depot = $newDateAsString;
                $this->modifiedColumns[] = CommonFacturePeer::DATE_DEPOT;
            }
        } // if either are not null


        return $this;
    } // setDateDepot()

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
            $this->id_type = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_sous_type = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->type = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->ref = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_creation = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->montant_ht = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->montant_ttc = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->montant_tva = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
            $this->objet = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->devis = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->statut = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->numero_depot = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->numero_marche = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->id_inscrit = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->id_entreprise = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->id_blob_facture = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->nom_fichier = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->id_blob_facture_signe = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->date_envoi = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->date_depot = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = CommonFacturePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonFacture object", $e);
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

        if ($this->aCommonTypeFacture !== null && $this->id_type !== $this->aCommonTypeFacture->getId()) {
            $this->aCommonTypeFacture = null;
        }
        if ($this->aCommonSousTypeFacture !== null && $this->id_sous_type !== $this->aCommonSousTypeFacture->getId()) {
            $this->aCommonSousTypeFacture = null;
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
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonFacturePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonTypeFacture = null;
            $this->aCommonSousTypeFacture = null;
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
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonFactureQuery::create()
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
            $con = Propel::getConnection(CommonFacturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonFacturePeer::addInstanceToPool($this);
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

            if ($this->aCommonTypeFacture !== null) {
                if ($this->aCommonTypeFacture->isModified() || $this->aCommonTypeFacture->isNew()) {
                    $affectedRows += $this->aCommonTypeFacture->save($con);
                }
                $this->setCommonTypeFacture($this->aCommonTypeFacture);
            }

            if ($this->aCommonSousTypeFacture !== null) {
                if ($this->aCommonSousTypeFacture->isModified() || $this->aCommonSousTypeFacture->isNew()) {
                    $affectedRows += $this->aCommonSousTypeFacture->save($con);
                }
                $this->setCommonSousTypeFacture($this->aCommonSousTypeFacture);
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

        $this->modifiedColumns[] = CommonFacturePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonFacturePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonFacturePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonFacturePeer::ID_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type`';
        }
        if ($this->isColumnModified(CommonFacturePeer::ID_SOUS_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_sous_type`';
        }
        if ($this->isColumnModified(CommonFacturePeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CommonFacturePeer::REF)) {
            $modifiedColumns[':p' . $index++]  = '`ref`';
        }
        if ($this->isColumnModified(CommonFacturePeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonFacturePeer::MONTANT_HT)) {
            $modifiedColumns[':p' . $index++]  = '`montant_ht`';
        }
        if ($this->isColumnModified(CommonFacturePeer::MONTANT_TTC)) {
            $modifiedColumns[':p' . $index++]  = '`montant_ttc`';
        }
        if ($this->isColumnModified(CommonFacturePeer::MONTANT_TVA)) {
            $modifiedColumns[':p' . $index++]  = '`montant_tva`';
        }
        if ($this->isColumnModified(CommonFacturePeer::OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`objet`';
        }
        if ($this->isColumnModified(CommonFacturePeer::DEVIS)) {
            $modifiedColumns[':p' . $index++]  = '`devis`';
        }
        if ($this->isColumnModified(CommonFacturePeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonFacturePeer::NUMERO_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`numero_depot`';
        }
        if ($this->isColumnModified(CommonFacturePeer::NUMERO_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_marche`';
        }
        if ($this->isColumnModified(CommonFacturePeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`id_inscrit`';
        }
        if ($this->isColumnModified(CommonFacturePeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise`';
        }
        if ($this->isColumnModified(CommonFacturePeer::ID_BLOB_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob_facture`';
        }
        if ($this->isColumnModified(CommonFacturePeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier`';
        }
        if ($this->isColumnModified(CommonFacturePeer::ID_BLOB_FACTURE_SIGNE)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob_facture_signe`';
        }
        if ($this->isColumnModified(CommonFacturePeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi`';
        }
        if ($this->isColumnModified(CommonFacturePeer::DATE_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`date_depot`';
        }

        $sql = sprintf(
            'INSERT INTO `facture` (%s) VALUES (%s)',
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
                    case '`id_type`':						
                        $stmt->bindValue($identifier, $this->id_type, PDO::PARAM_INT);
                        break;
                    case '`id_sous_type`':						
                        $stmt->bindValue($identifier, $this->id_sous_type, PDO::PARAM_INT);
                        break;
                    case '`type`':						
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`ref`':						
                        $stmt->bindValue($identifier, $this->ref, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`montant_ht`':						
                        $stmt->bindValue($identifier, $this->montant_ht, PDO::PARAM_STR);
                        break;
                    case '`montant_ttc`':						
                        $stmt->bindValue($identifier, $this->montant_ttc, PDO::PARAM_STR);
                        break;
                    case '`montant_tva`':						
                        $stmt->bindValue($identifier, $this->montant_tva, PDO::PARAM_STR);
                        break;
                    case '`objet`':						
                        $stmt->bindValue($identifier, $this->objet, PDO::PARAM_STR);
                        break;
                    case '`devis`':						
                        $stmt->bindValue($identifier, $this->devis, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`numero_depot`':						
                        $stmt->bindValue($identifier, $this->numero_depot, PDO::PARAM_STR);
                        break;
                    case '`numero_marche`':						
                        $stmt->bindValue($identifier, $this->numero_marche, PDO::PARAM_STR);
                        break;
                    case '`id_inscrit`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`id_entreprise`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`id_blob_facture`':						
                        $stmt->bindValue($identifier, $this->id_blob_facture, PDO::PARAM_INT);
                        break;
                    case '`nom_fichier`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
                        break;
                    case '`id_blob_facture_signe`':						
                        $stmt->bindValue($identifier, $this->id_blob_facture_signe, PDO::PARAM_INT);
                        break;
                    case '`date_envoi`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`date_depot`':						
                        $stmt->bindValue($identifier, $this->date_depot, PDO::PARAM_STR);
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

            if ($this->aCommonTypeFacture !== null) {
                if (!$this->aCommonTypeFacture->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonTypeFacture->getValidationFailures());
                }
            }

            if ($this->aCommonSousTypeFacture !== null) {
                if (!$this->aCommonSousTypeFacture->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonSousTypeFacture->getValidationFailures());
                }
            }


            if (($retval = CommonFacturePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonFacturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdType();
                break;
            case 2:
                return $this->getIdSousType();
                break;
            case 3:
                return $this->getType();
                break;
            case 4:
                return $this->getRef();
                break;
            case 5:
                return $this->getDateCreation();
                break;
            case 6:
                return $this->getMontantHt();
                break;
            case 7:
                return $this->getMontantTtc();
                break;
            case 8:
                return $this->getMontantTva();
                break;
            case 9:
                return $this->getObjet();
                break;
            case 10:
                return $this->getDevis();
                break;
            case 11:
                return $this->getStatut();
                break;
            case 12:
                return $this->getNumeroDepot();
                break;
            case 13:
                return $this->getNumeroMarche();
                break;
            case 14:
                return $this->getIdInscrit();
                break;
            case 15:
                return $this->getIdEntreprise();
                break;
            case 16:
                return $this->getIdBlobFacture();
                break;
            case 17:
                return $this->getNomFichier();
                break;
            case 18:
                return $this->getIdBlobFactureSigne();
                break;
            case 19:
                return $this->getDateEnvoi();
                break;
            case 20:
                return $this->getDateDepot();
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
        if (isset($alreadyDumpedObjects['CommonFacture'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonFacture'][$this->getPrimaryKey()] = true;
        $keys = CommonFacturePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdType(),
            $keys[2] => $this->getIdSousType(),
            $keys[3] => $this->getType(),
            $keys[4] => $this->getRef(),
            $keys[5] => $this->getDateCreation(),
            $keys[6] => $this->getMontantHt(),
            $keys[7] => $this->getMontantTtc(),
            $keys[8] => $this->getMontantTva(),
            $keys[9] => $this->getObjet(),
            $keys[10] => $this->getDevis(),
            $keys[11] => $this->getStatut(),
            $keys[12] => $this->getNumeroDepot(),
            $keys[13] => $this->getNumeroMarche(),
            $keys[14] => $this->getIdInscrit(),
            $keys[15] => $this->getIdEntreprise(),
            $keys[16] => $this->getIdBlobFacture(),
            $keys[17] => $this->getNomFichier(),
            $keys[18] => $this->getIdBlobFactureSigne(),
            $keys[19] => $this->getDateEnvoi(),
            $keys[20] => $this->getDateDepot(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonTypeFacture) {
                $result['CommonTypeFacture'] = $this->aCommonTypeFacture->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonSousTypeFacture) {
                $result['CommonSousTypeFacture'] = $this->aCommonSousTypeFacture->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonFacturePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdType($value);
                break;
            case 2:
                $this->setIdSousType($value);
                break;
            case 3:
                $this->setType($value);
                break;
            case 4:
                $this->setRef($value);
                break;
            case 5:
                $this->setDateCreation($value);
                break;
            case 6:
                $this->setMontantHt($value);
                break;
            case 7:
                $this->setMontantTtc($value);
                break;
            case 8:
                $this->setMontantTva($value);
                break;
            case 9:
                $this->setObjet($value);
                break;
            case 10:
                $this->setDevis($value);
                break;
            case 11:
                $this->setStatut($value);
                break;
            case 12:
                $this->setNumeroDepot($value);
                break;
            case 13:
                $this->setNumeroMarche($value);
                break;
            case 14:
                $this->setIdInscrit($value);
                break;
            case 15:
                $this->setIdEntreprise($value);
                break;
            case 16:
                $this->setIdBlobFacture($value);
                break;
            case 17:
                $this->setNomFichier($value);
                break;
            case 18:
                $this->setIdBlobFactureSigne($value);
                break;
            case 19:
                $this->setDateEnvoi($value);
                break;
            case 20:
                $this->setDateDepot($value);
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
        $keys = CommonFacturePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdType($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdSousType($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setType($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRef($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateCreation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMontantHt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMontantTtc($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMontantTva($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setObjet($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDevis($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setStatut($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNumeroDepot($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setNumeroMarche($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdInscrit($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdEntreprise($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdBlobFacture($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setNomFichier($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdBlobFactureSigne($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateEnvoi($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDateDepot($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonFacturePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonFacturePeer::ID)) $criteria->add(CommonFacturePeer::ID, $this->id);
        if ($this->isColumnModified(CommonFacturePeer::ID_TYPE)) $criteria->add(CommonFacturePeer::ID_TYPE, $this->id_type);
        if ($this->isColumnModified(CommonFacturePeer::ID_SOUS_TYPE)) $criteria->add(CommonFacturePeer::ID_SOUS_TYPE, $this->id_sous_type);
        if ($this->isColumnModified(CommonFacturePeer::TYPE)) $criteria->add(CommonFacturePeer::TYPE, $this->type);
        if ($this->isColumnModified(CommonFacturePeer::REF)) $criteria->add(CommonFacturePeer::REF, $this->ref);
        if ($this->isColumnModified(CommonFacturePeer::DATE_CREATION)) $criteria->add(CommonFacturePeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonFacturePeer::MONTANT_HT)) $criteria->add(CommonFacturePeer::MONTANT_HT, $this->montant_ht);
        if ($this->isColumnModified(CommonFacturePeer::MONTANT_TTC)) $criteria->add(CommonFacturePeer::MONTANT_TTC, $this->montant_ttc);
        if ($this->isColumnModified(CommonFacturePeer::MONTANT_TVA)) $criteria->add(CommonFacturePeer::MONTANT_TVA, $this->montant_tva);
        if ($this->isColumnModified(CommonFacturePeer::OBJET)) $criteria->add(CommonFacturePeer::OBJET, $this->objet);
        if ($this->isColumnModified(CommonFacturePeer::DEVIS)) $criteria->add(CommonFacturePeer::DEVIS, $this->devis);
        if ($this->isColumnModified(CommonFacturePeer::STATUT)) $criteria->add(CommonFacturePeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonFacturePeer::NUMERO_DEPOT)) $criteria->add(CommonFacturePeer::NUMERO_DEPOT, $this->numero_depot);
        if ($this->isColumnModified(CommonFacturePeer::NUMERO_MARCHE)) $criteria->add(CommonFacturePeer::NUMERO_MARCHE, $this->numero_marche);
        if ($this->isColumnModified(CommonFacturePeer::ID_INSCRIT)) $criteria->add(CommonFacturePeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonFacturePeer::ID_ENTREPRISE)) $criteria->add(CommonFacturePeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonFacturePeer::ID_BLOB_FACTURE)) $criteria->add(CommonFacturePeer::ID_BLOB_FACTURE, $this->id_blob_facture);
        if ($this->isColumnModified(CommonFacturePeer::NOM_FICHIER)) $criteria->add(CommonFacturePeer::NOM_FICHIER, $this->nom_fichier);
        if ($this->isColumnModified(CommonFacturePeer::ID_BLOB_FACTURE_SIGNE)) $criteria->add(CommonFacturePeer::ID_BLOB_FACTURE_SIGNE, $this->id_blob_facture_signe);
        if ($this->isColumnModified(CommonFacturePeer::DATE_ENVOI)) $criteria->add(CommonFacturePeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(CommonFacturePeer::DATE_DEPOT)) $criteria->add(CommonFacturePeer::DATE_DEPOT, $this->date_depot);

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
        $criteria = new Criteria(CommonFacturePeer::DATABASE_NAME);
        $criteria->add(CommonFacturePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonFacture (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdType($this->getIdType());
        $copyObj->setIdSousType($this->getIdSousType());
        $copyObj->setType($this->getType());
        $copyObj->setRef($this->getRef());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setMontantHt($this->getMontantHt());
        $copyObj->setMontantTtc($this->getMontantTtc());
        $copyObj->setMontantTva($this->getMontantTva());
        $copyObj->setObjet($this->getObjet());
        $copyObj->setDevis($this->getDevis());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setNumeroDepot($this->getNumeroDepot());
        $copyObj->setNumeroMarche($this->getNumeroMarche());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setIdBlobFacture($this->getIdBlobFacture());
        $copyObj->setNomFichier($this->getNomFichier());
        $copyObj->setIdBlobFactureSigne($this->getIdBlobFactureSigne());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setDateDepot($this->getDateDepot());

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
     * @return CommonFacture Clone of current object.
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
     * @return CommonFacturePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonFacturePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonTypeFacture object.
     *
     * @param   CommonTypeFacture $v
     * @return CommonFacture The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonTypeFacture(CommonTypeFacture $v = null)
    {
        if ($v === null) {
            $this->setIdType(NULL);
        } else {
            $this->setIdType($v->getId());
        }

        $this->aCommonTypeFacture = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonTypeFacture object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonFacture($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonTypeFacture object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonTypeFacture The associated CommonTypeFacture object.
     * @throws PropelException
     */
    public function getCommonTypeFacture(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonTypeFacture === null && ($this->id_type !== null) && $doQuery) {
            $this->aCommonTypeFacture = CommonTypeFactureQuery::create()->findPk($this->id_type, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonTypeFacture->addCommonFactures($this);
             */
        }

        return $this->aCommonTypeFacture;
    }

    /**
     * Declares an association between this object and a CommonSousTypeFacture object.
     *
     * @param   CommonSousTypeFacture $v
     * @return CommonFacture The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonSousTypeFacture(CommonSousTypeFacture $v = null)
    {
        if ($v === null) {
            $this->setIdSousType(NULL);
        } else {
            $this->setIdSousType($v->getId());
        }

        $this->aCommonSousTypeFacture = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonSousTypeFacture object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonFacture($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonSousTypeFacture object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonSousTypeFacture The associated CommonSousTypeFacture object.
     * @throws PropelException
     */
    public function getCommonSousTypeFacture(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonSousTypeFacture === null && ($this->id_sous_type !== null) && $doQuery) {
            $this->aCommonSousTypeFacture = CommonSousTypeFactureQuery::create()->findPk($this->id_sous_type, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonSousTypeFacture->addCommonFactures($this);
             */
        }

        return $this->aCommonSousTypeFacture;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_type = null;
        $this->id_sous_type = null;
        $this->type = null;
        $this->ref = null;
        $this->date_creation = null;
        $this->montant_ht = null;
        $this->montant_ttc = null;
        $this->montant_tva = null;
        $this->objet = null;
        $this->devis = null;
        $this->statut = null;
        $this->numero_depot = null;
        $this->numero_marche = null;
        $this->id_inscrit = null;
        $this->id_entreprise = null;
        $this->id_blob_facture = null;
        $this->nom_fichier = null;
        $this->id_blob_facture_signe = null;
        $this->date_envoi = null;
        $this->date_depot = null;
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
            if ($this->aCommonTypeFacture instanceof Persistent) {
              $this->aCommonTypeFacture->clearAllReferences($deep);
            }
            if ($this->aCommonSousTypeFacture instanceof Persistent) {
              $this->aCommonSousTypeFacture->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonTypeFacture = null;
        $this->aCommonSousTypeFacture = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonFacturePeer::DEFAULT_STRING_FORMAT);
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
